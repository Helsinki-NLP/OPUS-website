<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>EuroPat</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>EuroPat v2</h1>Parallel corpora of patents from the United States Patent and Trademark Office and from the European Patent Organisation compiled into aligned data sets available from <a href="https://europat.net/">https://europat.net/</a><p>7 languages, 21 bitexts<br>total number of files: 7<br>total number of tokens: 4.66G<br>total number of sentence fragments: 143.74M<br><p>Please, acknowledge the EuroPat project at <a href="https://europat.net/">https://europat.net/</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a><br/><b>Copyright:</b> All content is made publicly available through a Creative Commons CC0 license.<br/></p>The data is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="https://europat.net/">https://europat.net/</a> for more details<h3>Release history:</h3><p><ul><li><a href="EuroPat-v1.php">EuroPat v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="EuroPat/v2/de_sample.html">de</a></th>
<th><a rel="nofollow" href="EuroPat/v2/en_sample.html">en</a></th>
<th><a rel="nofollow" href="EuroPat/v2/es_sample.html">es</a></th>
<th><a rel="nofollow" href="EuroPat/v2/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="EuroPat/v2/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="EuroPat/v2/no_sample.html">no</a></th>
<th><a rel="nofollow" href="EuroPat/v2/pl_sample.html">pl</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v2/xml/de.zip">de</a></th>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="EuroPat/v2/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="EuroPat/v2/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="EuroPat/v2/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Croatian (sample file)" href="EuroPat/v2/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Norwegian (sample file)" href="EuroPat/v2/de-no_sample.html">view</a></td><td><a rel="nofollow" title="German-Polish (sample file)" href="EuroPat/v2/de-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v2/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v2/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (15.6M links, 2.7G tokens)" href="download.php?f=EuroPat/v2/xml/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="EuroPat/v2/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="EuroPat/v2/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="EuroPat/v2/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Norwegian (sample file)" href="EuroPat/v2/en-no_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="EuroPat/v2/en-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v2/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v2/xml/es.zip">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (0.2M links, 1.9G tokens)" href="download.php?f=EuroPat/v2/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (44.1M links, 3.7G tokens)" href="download.php?f=EuroPat/v2/xml/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-French (sample file)" href="EuroPat/v2/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="EuroPat/v2/es-hr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Norwegian (sample file)" href="EuroPat/v2/es-no_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="EuroPat/v2/es-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v2/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v2/xml/fr.zip">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (0.2M links, 830.0M tokens)" href="download.php?f=EuroPat/v2/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (12.1M links, 2.7G tokens)" href="download.php?f=EuroPat/v2/xml/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (0.1M links, 1.9G tokens)" href="download.php?f=EuroPat/v2/xml/es-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Croatian (sample file)" href="EuroPat/v2/fr-hr_sample.html">view</a></td><td><a rel="nofollow" title="French-Norwegian (sample file)" href="EuroPat/v2/fr-no_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="EuroPat/v2/fr-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v2/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v2/xml/hr.zip">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (1.0k links, 418.4M tokens)" href="download.php?f=EuroPat/v2/xml/de-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (75.1k links, 2.2G tokens)" href="download.php?f=EuroPat/v2/xml/en-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (30.3k links, 1.5G tokens)" href="download.php?f=EuroPat/v2/xml/es-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (2.6k links, 416.1M tokens)" href="download.php?f=EuroPat/v2/xml/fr-hr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Norwegian (sample file)" href="EuroPat/v2/hr-no_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Polish (sample file)" href="EuroPat/v2/hr-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v2/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v2/xml/no.zip">no</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-German' (7.4k links, 525.6M tokens)" href="download.php?f=EuroPat/v2/xml/de-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-English' (4.1M links, 2.4G tokens)" href="download.php?f=EuroPat/v2/xml/en-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Spanish' (1.3M links, 1.6G tokens)" href="download.php?f=EuroPat/v2/xml/es-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-French' (4.2k links, 523.3M tokens)" href="download.php?f=EuroPat/v2/xml/fr-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Croatian' (2.3k links, 111.7M tokens)" href="download.php?f=EuroPat/v2/xml/hr-no.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Norwegian-Polish (sample file)" href="EuroPat/v2/no-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v2/raw/no.zip">no</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v2/xml/pl.zip">pl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (2.2k links, 417.8M tokens)" href="download.php?f=EuroPat/v2/xml/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (89.0k links, 2.2G tokens)" href="download.php?f=EuroPat/v2/xml/en-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (53.5k links, 1.5G tokens)" href="download.php?f=EuroPat/v2/xml/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (2.6k links, 415.4M tokens)" href="download.php?f=EuroPat/v2/xml/fr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Croatian' (3.8k links, 3.8M tokens)" href="download.php?f=EuroPat/v2/xml/hr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Norwegian' (19.8k links, 111.1M tokens)" href="download.php?f=EuroPat/v2/xml/no-pl.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=EuroPat/v2/raw/pl.zip">pl</a></th></tr>
<tr><th></th>
<th>de</th>
<th>en</th>
<th>es</th>
<th>fr</th>
<th>hr</th>
<th>no</th>
<th>pl</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=EuroPat/v2/mono/de.tok.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=EuroPat/v2/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=EuroPat/v2/mono/es.tok.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=EuroPat/v2/mono/fr.tok.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=EuroPat/v2/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized no plain text' href="download.php?f=EuroPat/v2/mono/no.tok.gz">no</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=EuroPat/v2/mono/pl.tok.gz">pl</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=EuroPat/v2/mono/de.txt.gz">de</a>
</th><td>1</td> <td>416.2M</td> <td>15.4M</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='German-English (15,571,044 sentence pairs, 62.28M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/de-en.tmx.gz">15.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='German-Spanish (215,334 sentence pairs, 10.36M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/de-es.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='German-French (191,855 sentence pairs, 7.95M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/de-fr.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='German-Croatian (971 sentence pairs, 27.73k words) - TMX format' href="download.php?f=EuroPat/v2/tmx/de-hr.tmx.gz">1.0k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='German-Norwegian (7,424 sentence pairs, 0.16M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/de-no.tmx.gz">7.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='German-Polish (2,065 sentence pairs, 36.06k words) - TMX format' href="download.php?f=EuroPat/v2/tmx/de-pl.tmx.gz">2.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=EuroPat/v2/mono/en.txt.gz">en</a>
</th><td>1</td> <td>2.2G</td> <td>70.5M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-German (15,571,045 sentence pairs, 851.77M words) - Moses format' href="download.php?f=EuroPat/v2/moses/de-en.txt.zip">15.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Spanish (44,063,940 sentence pairs, 176.26M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/en-es.tmx.gz">44.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='English-French (12,081,950 sentence pairs, 48.33M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/en-fr.tmx.gz">12.1M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='English-Croatian (75,104 sentence pairs, 0.30M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/en-hr.tmx.gz">75.1k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='English-Norwegian (4,050,340 sentence pairs, 16.20M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/en-no.tmx.gz">4.1M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='English-Polish (88,958 sentence pairs, 0.36M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/en-pl.tmx.gz">89.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=EuroPat/v2/mono/es.txt.gz">es</a>
</th><td>1</td> <td>1.5G</td> <td>42.0M</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Spanish-German (216,821 sentence pairs, 10.43M words) - Moses format' href="download.php?f=EuroPat/v2/moses/de-es.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-English (44,063,941 sentence pairs, 2.67G words) - Moses format' href="download.php?f=EuroPat/v2/moses/en-es.txt.zip">44.1M</a>
</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Spanish-French (126,213 sentence pairs, 6.86M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/es-fr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Spanish-Croatian (26,773 sentence pairs, 1.60M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/es-hr.tmx.gz">26.8k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-Norwegian (1,253,069 sentence pairs, 65.13M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/es-no.tmx.gz">1.3M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Spanish-Polish (50,101 sentence pairs, 1.91M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/es-pl.tmx.gz">50.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=EuroPat/v2/mono/fr.txt.gz">fr</a>
</th><td>1</td> <td>413.8M</td> <td>11.5M</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='French-German (208,601 sentence pairs, 8.97M words) - Moses format' href="download.php?f=EuroPat/v2/moses/de-fr.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (12,081,951 sentence pairs, 746.93M words) - Moses format' href="download.php?f=EuroPat/v2/moses/en-fr.txt.zip">12.1M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='French-Spanish (130,200 sentence pairs, 7.13M words) - Moses format' href="download.php?f=EuroPat/v2/moses/es-fr.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='French-Croatian (2,318 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/fr-hr.tmx.gz">2.3k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='French-Norwegian (4,063 sentence pairs, 92.50k words) - TMX format' href="download.php?f=EuroPat/v2/tmx/fr-no.tmx.gz">4.1k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='French-Polish (2,359 sentence pairs, 47.16k words) - TMX format' href="download.php?f=EuroPat/v2/tmx/fr-pl.tmx.gz">2.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=EuroPat/v2/mono/hr.txt.gz">hr</a>
</th><td>1</td> <td>2.2M</td> <td>65.4k</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-German (1,033 sentence pairs, 30.47k words) - Moses format' href="download.php?f=EuroPat/v2/moses/de-hr.txt.zip">1.0k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Croatian-English (75,105 sentence pairs, 4.51M words) - Moses format' href="download.php?f=EuroPat/v2/moses/en-hr.txt.zip">75.1k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Croatian-Spanish (30,320 sentence pairs, 1.86M words) - Moses format' href="download.php?f=EuroPat/v2/moses/es-hr.txt.zip">30.3k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-French (2,651 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EuroPat/v2/moses/fr-hr.txt.zip">2.7k</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Croatian-Norwegian (2,122 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/hr-no.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Croatian-Polish (3,404 sentence pairs, 58.60k words) - TMX format' href="download.php?f=EuroPat/v2/tmx/hr-pl.tmx.gz">3.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized no plain text' href="download.php?f=EuroPat/v2/mono/no.txt.gz">no</a>
</th><td>1</td> <td>109.5M</td> <td>4.1M</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Norwegian-German (7,440 sentence pairs, 0.16M words) - Moses format' href="download.php?f=EuroPat/v2/moses/de-no.txt.zip">7.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-English (4,050,341 sentence pairs, 217.73M words) - Moses format' href="download.php?f=EuroPat/v2/moses/en-no.txt.zip">4.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Norwegian-Spanish (1,294,596 sentence pairs, 67.97M words) - Moses format' href="download.php?f=EuroPat/v2/moses/es-no.txt.zip">1.3M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Norwegian-French (4,151 sentence pairs, 98.31k words) - Moses format' href="download.php?f=EuroPat/v2/moses/fr-no.txt.zip">4.2k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Norwegian-Croatian (2,345 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EuroPat/v2/moses/hr-no.txt.zip">2.3k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Norwegian-Polish (18,557 sentence pairs, 0.81M words) - TMX format' href="download.php?f=EuroPat/v2/tmx/no-pl.tmx.gz">18.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=EuroPat/v2/mono/pl.txt.gz">pl</a>
</th><td>1</td> <td>1.6M</td> <td>83.0k</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Polish-German (2,174 sentence pairs, 38.09k words) - Moses format' href="download.php?f=EuroPat/v2/moses/de-pl.txt.zip">2.2k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Polish-English (88,959 sentence pairs, 3.27M words) - Moses format' href="download.php?f=EuroPat/v2/moses/en-pl.txt.zip">89.0k</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Polish-Spanish (53,550 sentence pairs, 2.07M words) - Moses format' href="download.php?f=EuroPat/v2/moses/es-pl.txt.zip">53.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Polish-French (2,596 sentence pairs, 53.00k words) - Moses format' href="download.php?f=EuroPat/v2/moses/fr-pl.txt.zip">2.6k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Polish-Croatian (3,790 sentence pairs, 66.61k words) - Moses format' href="download.php?f=EuroPat/v2/moses/hr-pl.txt.zip">3.8k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Polish-Norwegian (19,771 sentence pairs, 0.88M words) - Moses format' href="download.php?f=EuroPat/v2/moses/no-pl.txt.zip">19.8k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>