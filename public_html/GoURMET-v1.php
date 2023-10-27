<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>GoURMET</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>GoURMET v1</h1>Parallel corpora from Web Crawls collected in the <a href="https://gourmet-project.eu/data-model-releases/">gourmet project</a> and further processed for making it a multi-parallel corpus by pivoting via English.<p>8 languages, 7 bitexts<br>total number of files: 20<br>total number of tokens: 1.48G<br>total number of sentence fragments: 47.54M<br><p>Please, acknowledge the gourmet project at <a href="https://gourmet-project.eu">https://gourmet-project.eu</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a><br/><b>Copyright:</b> All content is made publicly available through a Creative Commons CC0 license.<br/></p>The data is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved")<h3>Release history:</h3><p><ul><li><a href="GoURMET-v1.php">GoURMET v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="GoURMET/v1/am_sample.html">am</a></th>
<th><a rel="nofollow" href="GoURMET/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="GoURMET/v1/hbs_sample.html">hbs</a></th>
<th><a rel="nofollow" href="GoURMET/v1/ky_sample.html">ky</a></th>
<th><a rel="nofollow" href="GoURMET/v1/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="GoURMET/v1/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="GoURMET/v1/sw_sample.html">sw</a></th>
<th><a rel="nofollow" href="GoURMET/v1/tr_sample.html">tr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=GoURMET/v1/xml/am.zip">am</a></th>
<th></th>
<td><a rel="nofollow" title="Amharic-English (sample file)" href="GoURMET/v1/am-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=GoURMET/v1/raw/am.zip">am</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=GoURMET/v1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Amharic' (57.8k links, 2.0M tokens)" href="download.php?f=GoURMET/v1/xml/am-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-hbs (sample file)" href="GoURMET/v1/en-hbs_sample.html">view</a></td><td><a rel="nofollow" title="English-Kirghiz (sample file)" href="GoURMET/v1/en-ky_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="GoURMET/v1/en-sr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="GoURMET/v1/en-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=GoURMET/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=GoURMET/v1/xml/hbs.zip">hbs</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'hbs-English' (0.4M links, 21.5M tokens)" href="download.php?f=GoURMET/v1/xml/en-hbs.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=GoURMET/v1/raw/hbs.zip">hbs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=GoURMET/v1/xml/ky.zip">ky</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kirghiz-English' (14.5k links, 0.5M tokens)" href="download.php?f=GoURMET/v1/xml/en-ky.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Kirghiz-Russian (sample file)" href="GoURMET/v1/ky-ru_sample.html">view</a></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=GoURMET/v1/raw/ky.zip">ky</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=GoURMET/v1/xml/ru.zip">ru</a></th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Kirghiz' (23.0k links, 0.7M tokens)" href="download.php?f=GoURMET/v1/xml/ky-ru.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=GoURMET/v1/raw/ru.zip">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=GoURMET/v1/xml/sr.zip">sr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (0.3M links, 22.4M tokens)" href="download.php?f=GoURMET/v1/xml/en-sr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><th><a rel="nofollow" href="download.php?f=GoURMET/v1/raw/sr.zip">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=GoURMET/v1/xml/sw.zip">sw</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Swahili-Turkish (sample file)" href="GoURMET/v1/sw-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=GoURMET/v1/raw/sw.zip">sw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=GoURMET/v1/xml/tr.zip">tr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (4 aligned documents, 1.3M links, 95.5M tokens)" href="download.php?f=GoURMET/v1/xml/en-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Swahili' (13.1M links, 1.3G tokens)" href="download.php?f=GoURMET/v1/xml/sw-tr.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=GoURMET/v1/raw/tr.zip">tr</a></th></tr>
<tr><th></th>
<th>am</th>
<th>en</th>
<th>hbs</th>
<th>ky</th>
<th>ru</th>
<th>sr</th>
<th>sw</th>
<th>tr</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized am plain text' href="download.php?f=GoURMET/v1/mono/am.tok.gz">am</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=GoURMET/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized hbs plain text' href="download.php?f=GoURMET/v1/mono/hbs.tok.gz">hbs</a>
</th><th><a rel="nofollow" title='monolingual tokenized ky plain text' href="download.php?f=GoURMET/v1/mono/ky.tok.gz">ky</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=GoURMET/v1/mono/ru.tok.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=GoURMET/v1/mono/sr.tok.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized sw plain text' href="download.php?f=GoURMET/v1/mono/sw.tok.gz">sw</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=GoURMET/v1/mono/tr.tok.gz">tr</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized am plain text' href="download.php?f=GoURMET/v1/mono/am.txt.gz">am</a>
</th><td>1</td> <td>0.9M</td> <td>58.1k</td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='Amharic-English (57,785 sentence pairs, 1.78M words) - TMX format' href="download.php?f=GoURMET/v1/tmx/am-en.tmx.gz">57.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=GoURMET/v1/mono/en.txt.gz">en</a>
</th><td>8</td> <td>75.2M</td> <td>2.2M</td><td bgcolor="#ffffe3"><a rel="nofollow" title='English-Amharic (57,836 sentence pairs, 1.78M words) - Moses format' href="download.php?f=GoURMET/v1/moses/am-en.txt.zip">57.8k</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='English-hbs (363,130 sentence pairs, 18.76M words) - TMX format' href="download.php?f=GoURMET/v1/tmx/en-hbs.tmx.gz">0.4M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='English-Kirghiz (14,493 sentence pairs, 0.41M words) - TMX format' href="download.php?f=GoURMET/v1/tmx/en-ky.tmx.gz">14.5k</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='English-Serbian (328,995 sentence pairs, 19.60M words) - TMX format' href="download.php?f=GoURMET/v1/tmx/en-sr.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Turkish (778,683 sentence pairs, 56.50M words) - TMX format' href="download.php?f=GoURMET/v1/tmx/en-tr.tmx.gz">0.8M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hbs plain text' href="download.php?f=GoURMET/v1/mono/hbs.txt.gz">hbs</a>
</th><td>1</td> <td>10.1M</td> <td>0.4M</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='hbs-English (363,132 sentence pairs, 18.76M words) - Moses format' href="download.php?f=GoURMET/v1/moses/en-hbs.txt.zip">0.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ky plain text' href="download.php?f=GoURMET/v1/mono/ky.txt.gz">ky</a>
</th><td>2</td> <td>0.5M</td> <td>38.6k</td><td></td><td bgcolor="#fff4ee"><a rel="nofollow" title='Kirghiz-English (14,498 sentence pairs, 0.41M words) - Moses format' href="download.php?f=GoURMET/v1/moses/en-ky.txt.zip">14.5k</a>
</td><td></td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Kirghiz-Russian (23,013 sentence pairs, 0.59M words) - TMX format' href="download.php?f=GoURMET/v1/tmx/ky-ru.tmx.gz">23.0k</a>
</td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=GoURMET/v1/mono/ru.txt.gz">ru</a>
</th><td>1</td> <td>0.4M</td> <td>23.8k</td><td></td><td></td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Russian-Kirghiz (23,017 sentence pairs, 0.59M words) - Moses format' href="download.php?f=GoURMET/v1/moses/ky-ru.txt.zip">23.0k</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=GoURMET/v1/mono/sr.txt.gz">sr</a>
</th><td>1</td> <td>10.5M</td> <td>0.4M</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Serbian-English (329,004 sentence pairs, 19.60M words) - Moses format' href="download.php?f=GoURMET/v1/moses/en-sr.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sw plain text' href="download.php?f=GoURMET/v1/mono/sw.txt.gz">sw</a>
</th><td>1</td> <td>841.2M</td> <td>13.1M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=GoURMET/v1/mono/tr.txt.gz">tr</a>
</th><td>5</td> <td>539.0M</td> <td>31.4M</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Turkish-English (1,308,307 sentence pairs, 81.02M words) - Moses format' href="download.php?f=GoURMET/v1/moses/en-tr.txt.zip">1.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>