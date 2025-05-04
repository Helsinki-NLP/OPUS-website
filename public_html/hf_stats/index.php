<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
  <title>OPUS-MT Download Statistics from Hugging Face</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php

// session_start();
// header();

// echo("<h1>Hugging Face Download Statistics</h1>");


$files = get_stat_files();
$file = isset($_REQUEST['file']) ? $_REQUEST['file'] : $files[0];
$type = isset($_REQUEST['type']) ? $_REQUEST['type'] : 'top-downloads';
// $file = isset($_GET['file']) ? $_GET['file'] : $files[0];
// $type = isset($_GET['type']) ? $_GET['type'] : 'top-downloads';



echo('<small>');
foreach ($files as $f){
    $basename = basename($f,'.txt');
    echo("[<a href='?file=$f&type=$type'>$basename</a>] ");
}
echo('</small><br/><hr/>');
echo("<h1>OPUS-MT Download Statistics from Hugging Face</h1>");

echo("<ul>");
echo("<li><a href='?file=$file&type=top-models'>Top 10 downloaded models from Helsinki-NLP</a></li>");
echo("<li><a href='?file=$file&type=top-datasets'>Top 10 downloaded datasets from Helsinki-NLP</a></li>");
echo("<li><a href='?file=$file&type=liked-models'>Top 10 liked models from Helsinki-NLP</a></li>");
echo("<li><a href='?file=$file&type=top-organizations'>Top 50 organizations (according to downloads)</a></li>");
// echo("<li><a href='?file=$file&type=liked-datasets'>Top 10 liked datasets from Helsinki-NLP</a></li>");
echo("<li><a href='?file=$file&type=all-models'>Statistics of all models from Helsinki-NLP</a></li>");
echo("<li><a href='?file=$file&type=all-datasets'>Statistics of all datasets from Helsinki-NLP</a></li>");
echo("</ul>");


if (isset($_REQUEST['resource'])){
    echo("<h2>Download History</h2>");
    $downloads = get_all_stats($files);
    download_history_plotly($downloads,$_REQUEST['resource']);
}
elseif (isset($_REQUEST['organization'])){
    echo("<h2>Download History for Organizations</h2>");
    $downloads = get_all_organization_stats($files);
    // echo var_dump($downloads);
    download_history_plotly($downloads,$_REQUEST['organization']);
}
else{
    $basename = basename($file,'.txt');
    echo("<h2>Monthly Download Statistics from $basename</h2>");
    $stats = read_stats($file);
    show_stats($stats,$type);
}



function show_stats(&$stats, $type='top-models'){    
    echo("<ul>");
    foreach ($stats as $key => $value){
        $pretty = number_format($value);
        if (! is_array($value)){
            echo("<li>$key: $pretty</li>");
        }
    }
    echo("</ul>");

    if ($type == 'top-datasets')
        plot_stats($stats, 'Top 10 most downloaded datasets by Helsinki-NLP:');
    elseif ($type == 'liked-datasets')
        plot_stats($stats, 'Top 10 most liked datasets by Helsinki-NLP:');
    elseif ($type == 'liked-models')
        plot_stats($stats, 'Top 10 most liked models by Helsinki-NLP:');
    elseif ($type == 'all-models')
        print_all_stats($stats, 'Complete list of downloaded models by Helsinki-NLP:');
    elseif ($type == 'all-datasets')
        print_all_stats($stats, 'Complete list of downloaded datasets by Helsinki-NLP:');
    elseif ($type == 'top-organizations')
        print_top_organizations($stats);
    else
        plot_stats($stats, 'Top 10 most downloaded models by Helsinki-NLP:');
}

function plot_stats(&$stats, $list){
    echo("<h3>$list</h3>\n");
    if (array_key_exists($list,$stats)){
        if (is_array($stats[$list])){
            echo('<form>');
            echo('<input type="submit" value="plot download history" />');
            $data=array();
            foreach ($stats[$list] as $line){
                if (!$line) continue;
                list($value,$key) = explode("\t",$line);
                list($org,$resource) = explode('/',$key);
                if ($value){
                    $data[$resource] = $value;
                    echo("<input type='hidden' name='resource[]' value='$key'>");
                }
            }
            echo('</form>');
            barchart_plotly($data);
        }
    }
}

function get_all_stats(&$files){
    $downloads = array();
    $lists = array('Complete list of downloaded models by Helsinki-NLP:',
                   'Complete list of downloaded datasets by Helsinki-NLP:');
    foreach ($lists as $list){
        foreach ($files as $file){
            $date = basename($file,'.txt');
            $stats = read_stats($file);
            if (array_key_exists($list,$stats)){
                if (is_array($stats[$list])){
                    foreach ($stats[$list] as $line){
                        if (!$line) continue;
                        list($down,$name,$likes) = explode("\t",$line);
                        $downloads[$name][$date] = $down;
                    }                
                }
            }
        }
    }
    return $downloads;
}

function get_all_organization_stats(&$files){
    $downloads = array();
    $lists = array('Top 50 organisations with the most downloads:');
    foreach ($lists as $list){
        foreach ($files as $file){
            $date = basename($file,'.txt');
            $stats = read_stats($file);
            if (array_key_exists($list,$stats)){
                if (is_array($stats[$list])){
                    foreach ($stats[$list] as $line){
                        if (!$line) continue;
                        list($pos,$down,$likes,$name) = explode("\t",$line);
                        $downloads[$name][$date] = $down;
                    }                
                }
            }
        }
    }
    return $downloads;
}


function print_all_stats(&$stats, $list='Complete list of downloaded models by Helsinki-NLP:'){
    
    if (array_key_exists($list,$stats)){
        if (is_array($stats[$list])){
            echo('<form>');
            echo('<input type="submit" value="plot download history" />');
            echo('<table><tr><th></th><th>resource name</th><th>downloads</th><th>likes</th></tr>');
            $i=0;
            foreach ($stats[$list] as $line){
                if (!$line) continue;
                $arr = explode("\t",$line);
                echo('<tr><td>');
                if ($i<3)
                    echo("<input type='checkbox' checked='1' name='resource[]' value='$arr[1]'>");
                else
                    echo("<input type='checkbox' name='resource[]' value='$arr[1]'>");
                echo('</td><td>');
                if ($list == 'Complete list of downloaded datasets by Helsinki-NLP:'){
                    $link = "<a href='https://huggingface.co/datasets/$arr[1]'>$arr[1]</a>";
                }
                else{
                    $link = "<a href='https://huggingface.co/$arr[1]'>$arr[1]</a>";
                }
                echo(implode('</td><td>',[$link,$arr[0],$arr[2]]));
                echo('</td></tr>');
                $i++;
            }
            echo('</table>');
            echo('</form>');
        }
    }
}


function print_top_organizations(&$stats, $list='Top 50 organisations with the most downloads:'){
    if (array_key_exists($list,$stats)){
        if (is_array($stats[$list])){
            echo('<form>');
            echo('<input type="submit" value="plot download history" />');
            echo('<table><tr><th></th><th>organization</th><th>downloads</th><th>likes</th></tr>');
            foreach ($stats[$list] as $line){
                if (!$line) continue;
                $arr = explode("\t",$line);
                echo('<tr><td>');
                if ($arr[3] == 'Helsinki-NLP')
                    echo("<input type='checkbox' checked='1' name='organization[]' value='$arr[3]' /> $arr[0]");
                else
                    echo("<input type='checkbox' name='organization[]' value='$arr[3]' /> $arr[0]");
                echo('</td><td>');
                $link = "<a href='https://huggingface.co/$arr[3]'>$arr[3]</a>";
                echo(implode('</td><td>',[$link,$arr[1],$arr[2]]));
                echo('</td></tr>');
            }
            echo('</table>');
            echo('</form>');
        }
    }
}


function read_stats($file){

    $lines = file($file);
    $stats = array();
    $key = '';
    foreach ($lines as $line) {
        if ($line){
            $line = rtrim($line);
            if (substr($line, -1) === ':'){
                $key = $line;
                $stats[$key] = array();
            }
            else{
                $a = explode(':',$line);
                if (count($a)>1) $stats[$a[0]] = $a[1];
                else{
                    array_push($stats[$key],$line);
                }
            }
        }
    }
    ksort($stats);
    return $stats;
}


function get_stat_files(){
    $files = array();
    if ($handle = opendir('.')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                if (substr($entry, -4) === '.txt'){
                    array_push($files,$entry);
                }
            }
        }
        closedir($handle);
    }
    rsort($files);
    return $files;
}




function download_history_plotly(&$downloads,&$selected){

    // echo('<pre>');
    // echo var_dump($selected);
    // echo var_dump($downloads);
    
    echo('<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>');
    echo('<div id="myPlot" style="width:200%;max-width:680px;max-height:400px"></div><script>');

    $nrSel = count($selected);
    
    echo("const xArray = new Array($nrSel);\n");
    echo("const yArray = new Array($nrSel);\n");

    $i=0;
    foreach ($selected as $sel){
        $nrDates = count($downloads[$sel]);
        echo("xArray[$i] = new Array($nrDates);\n");
        echo("yArray[$i] = new Array($nrDates);\n");
        $j=0;
        foreach ($downloads[$sel] as $date => $nr){
            echo("xArray[$i][$j] = '$date';\n");
            echo("yArray[$i][$j] = $nr;\n");
            $j++;
        }
        $i++;
    }
    echo("const data = [\n");
    for ($i = 0; $i < $nrSel; $i++) {
        $arr = explode('/',$selected[$i]);
        $name = count($arr) > 1 ? $arr[1] : $arr[0];
        // list($org,$resource) = explode('/',$selected[$i]);
        echo("{x: xArray[$i], y: yArray[$i], mode: 'lines+markers', name: '$name'},\n");
    }
    echo("];\n");

    
    echo("const layout = {
xaxis:{title: '$label'},
margin: {
    l: 50,
    r: 150,
    b: 100,
    t: 10,
    pad: 4 }
};\n");
    echo('Plotly.newPlot("myPlot", data, layout);');
    //xaxis: { tickangle: -45 },
    //xaxis: { nticks: 50, tickmode: 'auto' },

    // echo('</pre>');
    echo('</script>');

}



function barchart_plotly(&$data){

    /*
    echo('<pre>');
    echo var_dump($data);
    echo('</pre>');
    return;
    */

    echo('<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>');
    echo('<div id="myPlot" style="width:200%;max-width:680px;max-height:400px"></div><script>');

    echo("\n".'const xArray = ["');
    echo(implode('","',array_keys($data)));
    echo('"];');

    echo('const yArray = ["');
    echo(implode('","',array_values($data)));
    echo('"];');

    echo("\n".'const text = ["');
    echo(implode('","',array_keys($data)));
    echo('"];');

    /*
    echo('const colors = ["');
    echo(implode('","',array_values($rgba)));
    echo('"];');
    */
    
    echo("const data = [{");
    echo("x:xArray,");
    echo("y:yArray,");
    echo("text:text,");
    echo('type:"bar",');
    echo('textposition: "auto",');
    // echo('orientation:"v",');
    // echo('marker: {color: colors}');
    echo("}];\n");

    echo("const layout = {
xaxis:{title: '$label'},
margin: {
    l: 50,
    r: 150,
    b: 100,
    t: 10,
    pad: 4 }
};");
    echo('Plotly.newPlot("myPlot", data, layout);');
    //xaxis: { tickangle: -45 },
    //xaxis: { nticks: 50, tickmode: 'auto' },
    echo('</script>');
}



?>
</body>
</html>
