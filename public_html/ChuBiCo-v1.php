<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>ChuBiCo</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>ChuBiCo v1</h1>The <a href="https://en.corpus.chv.su/">Chuvash bilingual corpus</a> is part of the "Chuvash language laboratory". The laboratory is a project created and developed by an initiative of activists and supported by their own funds. Its goal is to provide digital resources for the Chuvash language.<p>3 languages, 2 bitexts<br>total number of files: 4<br>total number of tokens: 34.33M<br>total number of sentence fragments: 2.52M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC0<br/><b>Copyright:</b> <a href="https://en.corpus.chv.su/content/about.html">chuvash.org</a><br/></p><h3>Release history:</h3><p><ul><li><a href="ChuBiCo-v1.php">ChuBiCo v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="ChuBiCo/v1/chv_sample.html">chv</a></th>
<th><a rel="nofollow" href="ChuBiCo/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="ChuBiCo/v1/ru_sample.html">ru</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ChuBiCo/v1/xml/chv.zip">chv</a></th>
<th></th>
<td><a rel="nofollow" title="Chuvash-English (sample file)" href="ChuBiCo/v1/chv-en_sample.html">view</a></td><td><a rel="nofollow" title="Chuvash-Russian (sample file)" href="ChuBiCo/v1/chv-ru_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=ChuBiCo/v1/raw/chv.zip">chv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ChuBiCo/v1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Chuvash' (0.2M links, 7.5M tokens)" href="download.php?f=ChuBiCo/v1/xml/chv-en.xml.gz">ces</a></td>
<th></th>
<td></td><th><a rel="nofollow" href="download.php?f=ChuBiCo/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ChuBiCo/v1/xml/ru.zip">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Chuvash' (1.0M links, 26.8M tokens)" href="download.php?f=ChuBiCo/v1/xml/chv-ru.xml.gz">ces</a></td>
<td></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=ChuBiCo/v1/raw/ru.zip">ru</a></th></tr>
<tr><th></th>
<th>chv</th>
<th>en</th>
<th>ru</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized chv plain text' href="download.php?f=ChuBiCo/v1/mono/chv.tok.gz">chv</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=ChuBiCo/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=ChuBiCo/v1/mono/ru.tok.gz">ru</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized chv plain text' href="download.php?f=ChuBiCo/v1/mono/chv.txt.gz">chv</a>
</th><td>2</td> <td>16.6M</td> <td>1.3M</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Chuvash-English (199,459 sentence pairs, 6.18M words) - TMX format' href="download.php?f=ChuBiCo/v1/tmx/chv-en.tmx.gz">0.2M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Chuvash-Russian (1,000,540 sentence pairs, 21.71M words) - TMX format' href="download.php?f=ChuBiCo/v1/tmx/chv-ru.tmx.gz">1.0M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=ChuBiCo/v1/mono/en.txt.gz">en</a>
</th><td>1</td> <td>4.2M</td> <td>0.2M</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='English-Chuvash (200,001 sentence pairs, 6.18M words) - Moses format' href="download.php?f=ChuBiCo/v1/moses/chv-en.txt.zip">0.2M</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=ChuBiCo/v1/mono/ru.txt.gz">ru</a>
</th><td>1</td> <td>13.5M</td> <td>1.0M</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Russian-Chuvash (1,002,014 sentence pairs, 21.72M words) - Moses format' href="download.php?f=ChuBiCo/v1/moses/chv-ru.txt.zip">1.0M</a>
</td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>