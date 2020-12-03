<?php

echo '<h1>OPUS-MT</h1>';

?>
OPUS-MT provides pre-trained neural translation models trained on <a href="http://opus.nlpl.eu">OPUS data</a>. These models can seamlessly run with the OPUS-MT transation servers that can be installed from our <a href="https://github.com/Helsinki-NLP/OPUS-MT">OPUS-MT github repository</a>.
<?php

$baseUrl = 'https://object.pouta.csc.fi/OPUS-MT';
$xmlstring = file_get_contents($baseUrl);

$xml = simplexml_load_string($xmlstring);
$json = json_encode($xml);
$array = json_decode($json,TRUE);

$modelDate = array();

foreach ($array['Contents'] as &$m){

  // evaluation scores
  if (strpos($m['Key'],'.eval.txt')){
    $model = str_replace('.eval.txt','.zip',$m['Key']);
    $modelEval[$model] = $m['Key'];
  }
  // test set translations
  if (strpos($m['Key'],'.test.txt')){
    $model = str_replace('.test.txt','.zip',$m['Key']);
    $modelTransl[$model] = $m['Key'];
    $pieces = explode('/', $m['Key']);
    $langs = explode('-', $pieces[1]);
    if ($pieces[0] == 'eval'){
      $test = explode('.',$pieces[2]);
      $testset = $test[0].'.'.$test[5].'.'.$test[6];
      $modelTests[$langs[0]][$langs[1]][$testset] = $m['Key'];
      //echo "testset = --$langs[0]--$langs[1]--$testset--<br/>";
    }
  }

  /*
  if (!strpos($m['Key'],'zip')){
      continue;
  }
  */
  // only continue with the model zip files
  // that also contain some date at the end
  if (!preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}.zip/',$m['Key'])){
      continue;
  }


  $pieces = explode('/', $m['Key']);
  $langs = explode('-', $pieces[1]);

  $newModel = true;
  if (array_key_exists($langs[0],$modelDate)){
    if (array_key_exists($langs[1],$modelDate[$langs[0]])){
      if ($m['LastModified'] < $modelDate[$langs[0]][$langs[1]]){
	$newModel = false;
      }
    }
  }

  if ($newModel){
    if (strpos($langs[0],'+') or strpos($langs[1],'+')){
      $multiModels[$langs[0]][$langs[1]]['file'] = $m['Key'];
      $multiModels[$langs[0]][$langs[1]]['size'] = $m['Size'];
    }
    else{
      $singleModels[$langs[0]][$langs[1]]['file'] = $m['Key'];
      $singleModels[$langs[0]][$langs[1]]['size'] = $m['Size'];
    }
    $modelDate[$langs[0]][$langs[1]] = $m['LastModified'];
  }
}

echo '<h2>Pre-Trained Bilingual NMT Models</h2>';

echo 'List of bilingual models sorted by source language. Download a zip file by clicking on the linked target language:';

ksort($singleModels);
echo '<ul>';
foreach ($singleModels as $src => $srcModels){
  echo '<li><b>'.$src.'</b>: ';
  ksort($srcModels);
  foreach ($srcModels as $trg => $trgModels){
    echo '[<a href="'.$baseUrl.'/'.$trgModels['file'].'">'.$trg.'</a>]';
  }
  echo '</li>';
}
echo '</ul>';



echo '<h2>Pre-Trained Multilingual NMT Models</h2>';

echo 'List of multilingual models sorted by the set of source languages. The languages that are supported are separated by "+". Download the zip files by clicking on the linked target language set:';

ksort($multiModels);
echo '<ul>';
foreach ($multiModels as $src => $srcModels){
  echo '<li><b>'.$src.'</b>: ';
  ksort($srcModels);
  foreach ($srcModels as $trg => $trgModels){
    echo '[<a href="'.$baseUrl.'/'.$trgModels['file'].'">'.$trg.'</a>]';
  }
  echo '</li>';
}
echo '</ul>';


echo '<h2>Test Set Translations</h2>';

echo 'Below you can look at test set translations and their automatic scores (computed using multeval) when compared to reference translations. Typically test sets are extracted from Tatoeba, a user contributed database of translations, which includes rather short and easy sentences. In the translation files (linked to the language IDs), there are three lines per record: (1) The original input, (2) the reference translation, and (3) the system translation:';

echo '<ul>';
foreach ($singleModels as $src => $srcModels){
  echo '<li><b>'.$src.'</b>: ';
  ksort($srcModels);
  foreach ($srcModels as $trg => $trgModels){
    if (array_key_exists($trgModels['file'],$modelEval)){
      if (array_key_exists($trgModels['file'],$modelTransl)){
	echo '[<a href="'.$baseUrl.'/'.$modelTransl[$trgModels['file']].'">'.$trg.'</a>';
      }
      else{
	echo '['.$trg;
      }
      echo ' <a href="'.$baseUrl.'/'.$modelEval[$trgModels['file']].'">scores</a>]';
    }
  }
  echo '</li>';
}
echo '</ul>';

echo "<p>Multilingual models:</p>";

echo '<ul>';
foreach ($multiModels as $src => $srcModels){
  echo '<li><b>'.$src.'</b>: ';
  ksort($srcModels);
  foreach ($srcModels as $trg => $trgModels){
    if (array_key_exists($trgModels['file'],$modelEval)){
      if (array_key_exists($trgModels['file'],$modelTransl)){
	echo '[<a href="'.$baseUrl.'/'.$modelTransl[$trgModels['file']].'">'.$trg.'</a>';
      }
      else{
	echo '['.$trg;
      }
      echo ' <a href="'.$baseUrl.'/'.$modelEval[$trgModels['file']].'">scores</a>]';
    }
  }
  echo '</li>';
}
echo '</ul>';





echo '<h2>NMT Benchmark Scores</h2>';

echo '<p>Latest benchmark results (Note: may currently not match the models above):</p>';

$scores = file_get_contents($baseUrl.'/eval/scores.txt');

echo '<table><tr><th>source language(s)</th><th>target language(s)</th><th>test set</th><th>BLEU</th><th>METEOR</th><th>TER</th><th>LENGTH</th></tr>';
$tests = explode("\n",$scores);
foreach ($tests as $test){
  echo '<tr>';
  $parts = explode("\t",$test);
  echo '<td>'.$parts[0].'</td>';
  echo '<td>'.$parts[1].'</td><td>';
  $test_exist = false;
  if (array_key_exists($parts[0],$modelTests)){
    if (array_key_exists($parts[1],$modelTests[$parts[0]])){
      if (array_key_exists($parts[2],$modelTests[$parts[0]][$parts[1]])){
	echo '<a href="'.$baseUrl.'/'.$modelTests[$parts[0]][$parts[1]][$parts[2]].'">';
	$test_exist = true;
      }
    }
  }
  echo $parts[2];
  if ($test_exist){
    echo '</a>';
  }
  echo '</td><td>'.$parts[3].'</td>';
  echo '<td>'.$parts[4].'</td>';
  echo '<td>'.$parts[5].'</td>';
  echo '<td>'.$parts[6].'</td>';
  echo '</tr>';
}
echo '</td></tr></table>';

/*
$scores = preg_replace('/\t/','</td><td>',$scores);
$scores = str_replace("\n",'</td></tr><tr><td>',$scores);

echo '<table><tr><th>source language(s)</th><th>target language(s)</th><th>test set</th><th>BLEU</th><th>METEOR</th><th>TER</th><th>LENGTH</th></tr>';
echo '<tr><td>';
echo $scores;
echo '</td></tr></table>';
*/

/*
echo "<pre>";
var_dump($array['Contents']);
echo "</pre>";
*/

?>
<h3>TODO</h3>

<ul>
<li>Downloadable OPUS-MT server image</li>
<li>Downloadable OPUS-MT docker container</li>
<li>Download links of alternative / old models</li>
<li>Reliable benchmarks of all models</li>
<li>Downloadable test set translations</li>
</ul>
