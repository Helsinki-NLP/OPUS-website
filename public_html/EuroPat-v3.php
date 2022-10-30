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
<div class="header"><?php include("header.php"); ?></div><h1>EuroPat v3</h1>Parallel corpora of patents from the United States Patent and Trademark Office and from the European Patent Organisation compiled into aligned data sets available from <a href="https://europat.net/">https://europat.net/</a><p>7 languages, 21 bitexts<br>total number of files: 7<br>total number of tokens: 5.23G<br>total number of sentence fragments: 163.10M<br><p>Please, acknowledge the EuroPat project at <a href="https://europat.net/">https://europat.net/</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a><br/><b>Copyright:</b> All content is made publicly available through a Creative Commons CC0 license.<br/></p>The data is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="https://europat.net/">https://europat.net/</a> for more details<h3>Release history:</h3><p><ul><li><a href="EuroPat-v1.php">EuroPat v1</a></li> <li><a href="EuroPat-v2.php">EuroPat v2</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="EuroPat/v3/de_sample.html">de</a></th>
<th><a rel="nofollow" href="EuroPat/v3/en_sample.html">en</a></th>
<th><a rel="nofollow" href="EuroPat/v3/es_sample.html">es</a></th>
<th><a rel="nofollow" href="EuroPat/v3/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="EuroPat/v3/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="EuroPat/v3/no_sample.html">no</a></th>
<th><a rel="nofollow" href="EuroPat/v3/pl_sample.html">pl</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v3/xml/de.zip">de</a></th>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="EuroPat/v3/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="EuroPat/v3/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="EuroPat/v3/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Croatian (sample file)" href="EuroPat/v3/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Norwegian (sample file)" href="EuroPat/v3/de-no_sample.html">view</a></td><td><a rel="nofollow" title="German-Polish (sample file)" href="EuroPat/v3/de-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v3/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v3/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (19.7M links, 1.2G tokens)" href="download.php?f=EuroPat/v3/xml/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="EuroPat/v3/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="EuroPat/v3/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="EuroPat/v3/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Norwegian (sample file)" href="EuroPat/v3/en-no_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="EuroPat/v3/en-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v3/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v3/xml/es.zip">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (0.3M links, 17.2M tokens)" href="download.php?f=EuroPat/v3/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (51.4M links, 3.5G tokens)" href="download.php?f=EuroPat/v3/xml/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-French (sample file)" href="EuroPat/v3/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="EuroPat/v3/es-hr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Norwegian (sample file)" href="EuroPat/v3/es-no_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="EuroPat/v3/es-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v3/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v3/xml/fr.zip">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (17.2k links, 0.4M tokens)" href="download.php?f=EuroPat/v3/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (11.1M links, 780.8M tokens)" href="download.php?f=EuroPat/v3/xml/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (0.1M links, 9.0M tokens)" href="download.php?f=EuroPat/v3/xml/es-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Croatian (sample file)" href="EuroPat/v3/fr-hr_sample.html">view</a></td><td><a rel="nofollow" title="French-Norwegian (sample file)" href="EuroPat/v3/fr-no_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="EuroPat/v3/fr-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v3/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v3/xml/hr.zip">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (1.5k links, 81.1k tokens)" href="download.php?f=EuroPat/v3/xml/de-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (0.2M links, 11.9M tokens)" href="download.php?f=EuroPat/v3/xml/en-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (55.1k links, 4.2M tokens)" href="download.php?f=EuroPat/v3/xml/es-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (0.6k links, 36.3k tokens)" href="download.php?f=EuroPat/v3/xml/fr-hr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Norwegian (sample file)" href="EuroPat/v3/hr-no_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Polish (sample file)" href="EuroPat/v3/hr-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v3/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v3/xml/no.zip">no</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-German' (6.5k links, 0.2M tokens)" href="download.php?f=EuroPat/v3/xml/de-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-English' (4.3M links, 265.8M tokens)" href="download.php?f=EuroPat/v3/xml/en-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Spanish' (1.4M links, 82.5M tokens)" href="download.php?f=EuroPat/v3/xml/es-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-French' (3.0k links, 0.1M tokens)" href="download.php?f=EuroPat/v3/xml/fr-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Croatian' (5.7k links, 0.4M tokens)" href="download.php?f=EuroPat/v3/xml/hr-no.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Norwegian-Polish (sample file)" href="EuroPat/v3/no-pl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v3/raw/no.zip">no</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v3/xml/pl.zip">pl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (6.2k links, 0.3M tokens)" href="download.php?f=EuroPat/v3/xml/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (0.3M links, 19.5M tokens)" href="download.php?f=EuroPat/v3/xml/en-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (0.2M links, 9.3M tokens)" href="download.php?f=EuroPat/v3/xml/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (2.9k links, 0.1M tokens)" href="download.php?f=EuroPat/v3/xml/fr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Croatian' (1.2k links, 63.4k tokens)" href="download.php?f=EuroPat/v3/xml/hr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Norwegian' (36.1k links, 1.9M tokens)" href="download.php?f=EuroPat/v3/xml/no-pl.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=EuroPat/v3/raw/pl.zip">pl</a></th></tr>
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
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=EuroPat/v3/mono/de.tok.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=EuroPat/v3/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=EuroPat/v3/mono/es.tok.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=EuroPat/v3/mono/fr.tok.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=EuroPat/v3/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized no plain text' href="download.php?f=EuroPat/v3/mono/no.tok.gz">no</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=EuroPat/v3/mono/pl.tok.gz">pl</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=EuroPat/v3/mono/de.txt.gz">de</a>
</th><td>1</td> <td>513.5M</td> <td>19.4M</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='German-English (19,734,742 sentence pairs, 78.94M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/de-en.tmx.gz">19.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='German-Spanish (284,895 sentence pairs, 15.22M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/de-es.tmx.gz">0.3M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='German-French (16,720 sentence pairs, 0.33M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/de-fr.tmx.gz">16.7k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='German-Croatian (1,402 sentence pairs, 63.12k words) - TMX format' href="download.php?f=EuroPat/v3/tmx/de-hr.tmx.gz">1.4k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='German-Norwegian (6,472 sentence pairs, 0.17M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/de-no.tmx.gz">6.5k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='German-Polish (6,074 sentence pairs, 0.24M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/de-pl.tmx.gz">6.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=EuroPat/v3/mono/en.txt.gz">en</a>
</th><td>1</td> <td>2.5G</td> <td>79.9M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-German (19,734,743 sentence pairs, 1.06G words) - Moses format' href="download.php?f=EuroPat/v3/moses/de-en.txt.zip">19.7M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Spanish (51,352,279 sentence pairs, 205.41M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/en-es.tmx.gz">51.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='English-French (11,098,710 sentence pairs, 44.39M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/en-fr.tmx.gz">11.1M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='English-Croatian (154,774 sentence pairs, 0.62M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/en-hr.tmx.gz">0.2M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='English-Norwegian (4,341,458 sentence pairs, 17.37M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/en-no.tmx.gz">4.3M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='English-Polish (332,119 sentence pairs, 1.33M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/en-pl.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=EuroPat/v3/mono/es.txt.gz">es</a>
</th><td>1</td> <td>1.7G</td> <td>48.3M</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Spanish-German (287,525 sentence pairs, 15.39M words) - Moses format' href="download.php?f=EuroPat/v3/moses/de-es.txt.zip">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-English (51,352,280 sentence pairs, 3.09G words) - Moses format' href="download.php?f=EuroPat/v3/moses/en-es.txt.zip">51.4M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Spanish-French (134,803 sentence pairs, 7.82M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/es-fr.tmx.gz">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Spanish-Croatian (49,066 sentence pairs, 3.14M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/es-hr.tmx.gz">49.1k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Spanish-Norwegian (1,326,868 sentence pairs, 68.95M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/es-no.tmx.gz">1.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Spanish-Polish (152,154 sentence pairs, 7.73M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/es-pl.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=EuroPat/v3/mono/fr.txt.gz">fr</a>
</th><td>1</td> <td>383.8M</td> <td>10.7M</td><td bgcolor="#fff0eb"><a rel="nofollow" title='French-German (17,185 sentence pairs, 0.34M words) - Moses format' href="download.php?f=EuroPat/v3/moses/de-fr.txt.zip">17.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (11,098,711 sentence pairs, 683.45M words) - Moses format' href="download.php?f=EuroPat/v3/moses/en-fr.txt.zip">11.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='French-Spanish (135,652 sentence pairs, 7.87M words) - Moses format' href="download.php?f=EuroPat/v3/moses/es-fr.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='French-Croatian (640 sentence pairs, 29.85k words) - TMX format' href="download.php?f=EuroPat/v3/tmx/fr-hr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='French-Norwegian (3,007 sentence pairs, 89.03k words) - TMX format' href="download.php?f=EuroPat/v3/tmx/fr-no.tmx.gz">3.0k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='French-Polish (2,854 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/fr-pl.tmx.gz">2.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=EuroPat/v3/mono/hr.txt.gz">hr</a>
</th><td>1</td> <td>4.0M</td> <td>0.1M</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Croatian-German (1,462 sentence pairs, 66.55k words) - Moses format' href="download.php?f=EuroPat/v3/moses/de-hr.txt.zip">1.5k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Croatian-English (154,775 sentence pairs, 9.95M words) - Moses format' href="download.php?f=EuroPat/v3/moses/en-hr.txt.zip">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Croatian-Spanish (55,146 sentence pairs, 3.60M words) - Moses format' href="download.php?f=EuroPat/v3/moses/es-hr.txt.zip">55.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-French (645 sentence pairs, 30.06k words) - Moses format' href="download.php?f=EuroPat/v3/moses/fr-hr.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Croatian-Norwegian (5,144 sentence pairs, 0.28M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/hr-no.tmx.gz">5.1k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Croatian-Polish (1,032 sentence pairs, 46.64k words) - TMX format' href="download.php?f=EuroPat/v3/tmx/hr-pl.tmx.gz">1.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized no plain text' href="download.php?f=EuroPat/v3/mono/no.txt.gz">no</a>
</th><td>1</td> <td>116.0M</td> <td>4.4M</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Norwegian-German (6,495 sentence pairs, 0.18M words) - Moses format' href="download.php?f=EuroPat/v3/moses/de-no.txt.zip">6.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-English (4,341,459 sentence pairs, 231.72M words) - Moses format' href="download.php?f=EuroPat/v3/moses/en-no.txt.zip">4.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Norwegian-Spanish (1,368,791 sentence pairs, 71.70M words) - Moses format' href="download.php?f=EuroPat/v3/moses/es-no.txt.zip">1.4M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Norwegian-French (3,024 sentence pairs, 90.38k words) - Moses format' href="download.php?f=EuroPat/v3/moses/fr-no.txt.zip">3.0k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Norwegian-Croatian (5,727 sentence pairs, 0.32M words) - Moses format' href="download.php?f=EuroPat/v3/moses/hr-no.txt.zip">5.7k</a>
</td><td></td><td bgcolor="#ffffe6"><a rel="nofollow" title='Norwegian-Polish (34,550 sentence pairs, 1.56M words) - TMX format' href="download.php?f=EuroPat/v3/tmx/no-pl.tmx.gz">34.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=EuroPat/v3/mono/pl.txt.gz">pl</a>
</th><td>1</td> <td>8.1M</td> <td>0.3M</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Polish-German (6,173 sentence pairs, 0.24M words) - Moses format' href="download.php?f=EuroPat/v3/moses/de-pl.txt.zip">6.2k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Polish-English (332,120 sentence pairs, 16.94M words) - Moses format' href="download.php?f=EuroPat/v3/moses/en-pl.txt.zip">0.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Polish-Spanish (158,026 sentence pairs, 8.09M words) - Moses format' href="download.php?f=EuroPat/v3/moses/es-pl.txt.zip">0.2M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Polish-French (2,883 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EuroPat/v3/moses/fr-pl.txt.zip">2.9k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Polish-Croatian (1,152 sentence pairs, 53.49k words) - Moses format' href="download.php?f=EuroPat/v3/moses/hr-pl.txt.zip">1.2k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Polish-Norwegian (36,062 sentence pairs, 1.65M words) - Moses format' href="download.php?f=EuroPat/v3/moses/no-pl.txt.zip">36.1k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>