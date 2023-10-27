<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>WikiTitles</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>WikiTitles v3</h1>This corpus contains data released for the WMT series of shared tasks. It consists of parallel wikipedia titles.<p>19 languages, 18 bitexts<br>total number of files: 36<br>total number of tokens: 39.71M<br>total number of sentence fragments: 16.08M<br><p>If you use the data, please cite the most recent WMT overview paper (currently https://aclanthology.info/papers/W18-6401/w18-6401) and also <a href="http://opus.lingfil.uu.se/LREC2012.txt">acknowledge the following article</a> if you use the OPUS packages and downloads in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC-BY-SA 4.0<br/><b>Copyright:</b> The actual packaging of this parallel data is licensed under the Creative Commons CC0 license ("no rights reserved"). For take-down policy, see <a href="https://www.paracrawl.eu/releases.html">https://www.paracrawl.eu/releases.html</a><br/></p>The code used to extract the wikititles is available at <a href="https://github.com/bhaddow/wikipedia-interlanguage-titles">https://github.com/bhaddow/wikipedia-interlanguage-titles</a><h3>Release history:</h3><p><ul><li><a href="WikiTitles-v3.php">WikiTitles v3</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="WikiTitles/v3/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/de_sample.html">de</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/en_sample.html">en</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/es_sample.html">es</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/ha_sample.html">ha</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/ig_sample.html">ig</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/is_sample.html">is</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/ja_sample.html">ja</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/ps_sample.html">ps</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/xh_sample.html">xh</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/zh_sample.html">zh</a></th>
<th><a rel="nofollow" href="WikiTitles/v3/zu_sample.html">zu</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/bn.zip">bn</a></th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-Hindi (sample file)" href="WikiTitles/v3/bn-hi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/bn.zip">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/ca.zip">ca</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="WikiTitles/v3/ca-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Portuguese (sample file)" href="WikiTitles/v3/ca-pt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Romanian (sample file)" href="WikiTitles/v3/ca-ro_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/cs.zip">cs</a></th>
<td></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Czech-English (sample file)" href="WikiTitles/v3/cs-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/cs.zip">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/de.zip">de</a></th>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="WikiTitles/v3/de-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-French (sample file)" href="WikiTitles/v3/de-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/en.zip">en</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (0.4M links, 2.1M tokens)" href="download.php?f=WikiTitles/v3/xml/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (1.5M links, 7.0M tokens)" href="download.php?f=WikiTitles/v3/xml/de-en.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="English-Hausa (sample file)" href="WikiTitles/v3/en-ha_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Igbo (sample file)" href="WikiTitles/v3/en-ig_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="WikiTitles/v3/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="WikiTitles/v3/en-ja_sample.html">view</a></td><td><a rel="nofollow" title="English-Pushto (sample file)" href="WikiTitles/v3/en-ps_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="English-Russian (sample file)" href="WikiTitles/v3/en-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="WikiTitles/v3/en-zh_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/es.zip">es</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (0.5M links, 2.3M tokens)" href="download.php?f=WikiTitles/v3/xml/ca-es.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="WikiTitles/v3/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Romanian (sample file)" href="WikiTitles/v3/es-ro_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/fr.zip">fr</a></th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (1.0M links, 4.7M tokens)" href="download.php?f=WikiTitles/v3/xml/de-fr.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/ha.zip">ha</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hausa-English' (7.5k links, 29.4k tokens)" href="download.php?f=WikiTitles/v3/xml/en-ha.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/ha.zip">ha</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/hi.zip">hi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Bengali' (43.1k links, 0.4M tokens)" href="download.php?f=WikiTitles/v3/xml/bn-hi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/hi.zip">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/ig.zip">ig</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Igbo-English' (2.1k links, 7.8k tokens)" href="download.php?f=WikiTitles/v3/xml/en-ig.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/ig.zip">ig</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/is.zip">is</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (50.2k links, 0.2M tokens)" href="download.php?f=WikiTitles/v3/xml/en-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/is.zip">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/ja.zip">ja</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (0.8M links, 4.6M tokens)" href="download.php?f=WikiTitles/v3/xml/en-ja.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/ja.zip">ja</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/ps.zip">ps</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-English' (10.6k links, 42.9k tokens)" href="download.php?f=WikiTitles/v3/xml/en-ps.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/ps.zip">ps</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/pt.zip">pt</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Catalan' (0.3M links, 1.5M tokens)" href="download.php?f=WikiTitles/v3/xml/ca-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (0.7M links, 3.6M tokens)" href="download.php?f=WikiTitles/v3/xml/es-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="WikiTitles/v3/pt-ro_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/pt.zip">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/ro.zip">ro</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Catalan' (0.2M links, 0.7M tokens)" href="download.php?f=WikiTitles/v3/xml/ca-ro.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Spanish' (0.3M links, 1.2M tokens)" href="download.php?f=WikiTitles/v3/xml/es-ro.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (0.3M links, 1.2M tokens)" href="download.php?f=WikiTitles/v3/xml/pt-ro.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/ro.zip">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/ru.zip">ru</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (1.2M links, 6.5M tokens)" href="download.php?f=WikiTitles/v3/xml/en-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/ru.zip">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/xh.zip">xh</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Xhosa-Zulu (sample file)" href="WikiTitles/v3/xh-zu_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/xh.zip">xh</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/zh.zip">zh</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (0.9M links, 3.9M tokens)" href="download.php?f=WikiTitles/v3/xml/en-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/zh.zip">zh</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WikiTitles/v3/xml/zu.zip">zu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Zulu-Xhosa' (0.9k links, 3.4k tokens)" href="download.php?f=WikiTitles/v3/xml/xh-zu.xml.gz">ces</a></td>
<td></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=WikiTitles/v3/raw/zu.zip">zu</a></th></tr>
<tr><th></th>
<th>bn</th>
<th>ca</th>
<th>cs</th>
<th>de</th>
<th>en</th>
<th>es</th>
<th>fr</th>
<th>ha</th>
<th>hi</th>
<th>ig</th>
<th>is</th>
<th>ja</th>
<th>ps</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>xh</th>
<th>zh</th>
<th>zu</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=WikiTitles/v3/mono/bn.tok.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=WikiTitles/v3/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=WikiTitles/v3/mono/cs.tok.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=WikiTitles/v3/mono/de.tok.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=WikiTitles/v3/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=WikiTitles/v3/mono/es.tok.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=WikiTitles/v3/mono/fr.tok.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized ha plain text' href="download.php?f=WikiTitles/v3/mono/ha.tok.gz">ha</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=WikiTitles/v3/mono/hi.tok.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized ig plain text' href="download.php?f=WikiTitles/v3/mono/ig.tok.gz">ig</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=WikiTitles/v3/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized ja plain text' href="download.php?f=WikiTitles/v3/mono/ja.tok.gz">ja</a>
</th><th><a rel="nofollow" title='monolingual tokenized ps plain text' href="download.php?f=WikiTitles/v3/mono/ps.tok.gz">ps</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=WikiTitles/v3/mono/pt.tok.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=WikiTitles/v3/mono/ro.tok.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=WikiTitles/v3/mono/ru.tok.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized xh plain text' href="download.php?f=WikiTitles/v3/mono/xh.tok.gz">xh</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh plain text' href="download.php?f=WikiTitles/v3/mono/zh.tok.gz">zh</a>
</th><th><a rel="nofollow" title='monolingual tokenized zu plain text' href="download.php?f=WikiTitles/v3/mono/zu.tok.gz">zu</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=WikiTitles/v3/mono/bn.txt.gz">bn</a>
</th><td>1</td> <td>0.2M</td> <td>43.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Bengali-Hindi (41,532 sentence pairs, 0.18M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/bn-hi.tmx.gz">41.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=WikiTitles/v3/mono/ca.txt.gz">ca</a>
</th><td>3</td> <td>2.3M</td> <td>1.0M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Catalan-Spanish (443,761 sentence pairs, 2.15M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/ca-es.tmx.gz">0.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffffea"><a rel="nofollow" title='Catalan-Portuguese (299,742 sentence pairs, 1.37M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/ca-pt.tmx.gz">0.3M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Catalan-Romanian (149,332 sentence pairs, 0.61M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/ca-ro.tmx.gz">0.1M</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=WikiTitles/v3/mono/cs.txt.gz">cs</a>
</th><td>1</td> <td>1.0M</td> <td>0.4M</td><td></td><td></td><td></td><td></td><td bgcolor="#ffffe1"><a rel="nofollow" title='Czech-English (382,851 sentence pairs, 1.90M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/cs-en.tmx.gz">0.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=WikiTitles/v3/mono/de.txt.gz">de</a>
</th><td>2</td> <td>5.4M</td> <td>2.5M</td><td></td><td></td><td></td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='German-English (1,386,770 sentence pairs, 6.39M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/de-en.tmx.gz">1.4M</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='German-French (926,512 sentence pairs, 4.27M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/de-fr.tmx.gz">0.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=WikiTitles/v3/mono/en.txt.gz">en</a>
</th><td>9</td> <td>12.8M</td> <td>4.8M</td><td></td><td></td><td bgcolor="#ffffe0"><a rel="nofollow" title='English-Czech (410,935 sentence pairs, 2.00M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/cs-en.txt.zip">0.4M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='English-German (1,474,138 sentence pairs, 6.69M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/de-en.txt.zip">1.5M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='English-Hausa (7,350 sentence pairs, 27.51k words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/en-ha.tmx.gz">7.3k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Igbo (1,946 sentence pairs, 7.15k words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/en-ig.tmx.gz">1.9k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='English-Icelandic (46,700 sentence pairs, 0.18M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/en-is.tmx.gz">46.7k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='English-Japanese (713,816 sentence pairs, 2.63M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/en-ja.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='English-Pushto (10,399 sentence pairs, 40.71k words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/en-ps.tmx.gz">10.4k</a>
</td><td></td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='English-Russian (1,123,893 sentence pairs, 5.74M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/en-ru.tmx.gz">1.1M</a>
</td><td></td><td bgcolor="#ebffcc"><a rel="nofollow" title='English-Chinese (889,940 sentence pairs, 3.25M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/en-zh.tmx.gz">0.9M</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=WikiTitles/v3/mono/es.txt.gz">es</a>
</th><td>3</td> <td>3.5M</td> <td>1.4M</td><td></td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Spanish-Catalan (476,463 sentence pairs, 2.25M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/ca-es.txt.zip">0.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Spanish-Portuguese (629,755 sentence pairs, 3.30M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/es-pt.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Spanish-Romanian (239,865 sentence pairs, 1.07M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/es-ro.tmx.gz">0.2M</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=WikiTitles/v3/mono/fr.txt.gz">fr</a>
</th><td>1</td> <td>2.5M</td> <td>1.0M</td><td></td><td></td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='French-German (1,006,522 sentence pairs, 4.52M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/de-fr.txt.zip">1.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ha plain text' href="download.php?f=WikiTitles/v3/mono/ha.txt.gz">ha</a>
</th><td>1</td> <td>14.8k</td> <td>7.5k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Hausa-English (7,501 sentence pairs, 27.95k words) - Moses format' href="download.php?f=WikiTitles/v3/moses/en-ha.txt.zip">7.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=WikiTitles/v3/mono/hi.txt.gz">hi</a>
</th><td>1</td> <td>0.2M</td> <td>43.1k</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Hindi-Bengali (43,144 sentence pairs, 0.18M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/bn-hi.txt.zip">43.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ig plain text' href="download.php?f=WikiTitles/v3/mono/ig.txt.gz">ig</a>
</th><td>1</td> <td>4.0k</td> <td>2.1k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Igbo-English (2,079 sentence pairs, 7.54k words) - Moses format' href="download.php?f=WikiTitles/v3/moses/en-ig.txt.zip">2.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=WikiTitles/v3/mono/is.txt.gz">is</a>
</th><td>1</td> <td>90.6k</td> <td>50.4k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Icelandic-English (50,176 sentence pairs, 0.19M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/en-is.txt.zip">50.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ja plain text' href="download.php?f=WikiTitles/v3/mono/ja.txt.gz">ja</a>
</th><td>1</td> <td>2.6M</td> <td>0.8M</td><td></td><td></td><td></td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Japanese-English (757,034 sentence pairs, 2.76M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/en-ja.txt.zip">0.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ps plain text' href="download.php?f=WikiTitles/v3/mono/ps.txt.gz">ps</a>
</th><td>1</td> <td>22.2k</td> <td>10.6k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Pushto-English (10,561 sentence pairs, 41.26k words) - Moses format' href="download.php?f=WikiTitles/v3/moses/en-ps.txt.zip">10.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=WikiTitles/v3/mono/pt.txt.gz">pt</a>
</th><td>3</td> <td>3.1M</td> <td>1.3M</td><td></td><td bgcolor="#ffffe9"><a rel="nofollow" title='Portuguese-Catalan (324,281 sentence pairs, 1.44M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/ca-pt.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='Portuguese-Spanish (691,081 sentence pairs, 3.51M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/es-pt.txt.zip">0.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Portuguese-Romanian (237,988 sentence pairs, 1.07M words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/pt-ro.tmx.gz">0.2M</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=WikiTitles/v3/mono/ro.txt.gz">ro</a>
</th><td>3</td> <td>1.5M</td> <td>0.7M</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Romanian-Catalan (154,810 sentence pairs, 0.63M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/ca-ro.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Romanian-Spanish (253,700 sentence pairs, 1.12M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/es-ro.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Romanian-Portuguese (251,832 sentence pairs, 1.12M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/pt-ro.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=WikiTitles/v3/mono/ru.txt.gz">ru</a>
</th><td>1</td> <td>3.2M</td> <td>1.2M</td><td></td><td></td><td></td><td></td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Russian-English (1,189,057 sentence pairs, 6.00M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/en-ru.txt.zip">1.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized xh plain text' href="download.php?f=WikiTitles/v3/mono/xh.txt.gz">xh</a>
</th><td>1</td> <td>1.7k</td> <td>0.9k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Xhosa-Zulu (852 sentence pairs, 2.86k words) - TMX format' href="download.php?f=WikiTitles/v3/tmx/xh-zu.tmx.gz">0.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh plain text' href="download.php?f=WikiTitles/v3/mono/zh.txt.gz">zh</a>
</th><td>1</td> <td>1.3M</td> <td>0.9M</td><td></td><td></td><td></td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-English (921,959 sentence pairs, 3.35M words) - Moses format' href="download.php?f=WikiTitles/v3/moses/en-zh.txt.zip">0.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zu plain text' href="download.php?f=WikiTitles/v3/mono/zu.txt.gz">zu</a>
</th><td>1</td> <td>1.7k</td> <td>0.9k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Zulu-Xhosa (876 sentence pairs, 2.94k words) - Moses format' href="download.php?f=WikiTitles/v3/moses/xh-zu.txt.zip">0.9k</a>
</td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>