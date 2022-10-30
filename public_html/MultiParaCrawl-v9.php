<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>MultiParaCrawl</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>MultiParaCrawl v9</h1>Parallel corpora from Web Crawls collected in the <a href="http://paracrawl.eu/download.html">ParaCrawl project</a> and further processed for making it a multi-parallel corpus by pivoting via English. Here we only provide the additional language pairs that came out of pivoting. The bitexts for English are available from the <a href="http://opus.nlpl.eu/ParaCrawl-v9.php">ParaCrawl release</a>.<p>41 languages, 705 bitexts<br>total number of files: 41<br>total number of tokens: 22.62G<br>total number of sentence fragments: 1.21G<br><p>Please, acknowledge the ParaCrawl project at <a href="http://paracrawl.eu">http://paracrawl.eu</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>The data is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="http://paracrawl.eu/download.html">http://paracrawl.eu/download.html</a> for more details<h3>Release history:</h3><p><ul><li><a href="MultiParaCrawl-v5.php">MultiParaCrawl v5</a></li> <li><a href="MultiParaCrawl-v7.1.php">MultiParaCrawl v7.1</a></li> <li><a href="MultiParaCrawl-v8.php">MultiParaCrawl v8</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/da_sample.html">da</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/de_sample.html">de</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/el_sample.html">el</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/es_sample.html">es</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/et_sample.html">et</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/is_sample.html">is</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/it_sample.html">it</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/km_sample.html">km</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/ko_sample.html">ko</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/lv_sample.html">lv</a></th>
<th></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/my_sample.html">my</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/ne_sample.html">ne</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/ps_sample.html">ps</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/si_sample.html">si</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/so_sample.html">so</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/sw_sample.html">sw</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/tl_sample.html">tl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9/zh_sample.html">zh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/bg.zip">bg</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="Bulgarian-Czech (sample file)" href="MultiParaCrawl/v9/bg-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Danish (sample file)" href="MultiParaCrawl/v9/bg-da_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-German (sample file)" href="MultiParaCrawl/v9/bg-de_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="MultiParaCrawl/v9/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Spanish (sample file)" href="MultiParaCrawl/v9/bg-es_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="MultiParaCrawl/v9/bg-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="MultiParaCrawl/v9/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-French (sample file)" href="MultiParaCrawl/v9/bg-fr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Irish (sample file)" href="MultiParaCrawl/v9/bg-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="MultiParaCrawl/v9/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="MultiParaCrawl/v9/bg-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="MultiParaCrawl/v9/bg-is_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Italian (sample file)" href="MultiParaCrawl/v9/bg-it_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Central Khmer (sample file)" href="MultiParaCrawl/v9/bg-km_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Korean (sample file)" href="MultiParaCrawl/v9/bg-ko_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="MultiParaCrawl/v9/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="MultiParaCrawl/v9/bg-lv_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Maltese (sample file)" href="MultiParaCrawl/v9/bg-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Burmese (sample file)" href="MultiParaCrawl/v9/bg-my_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/bg-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Nepali (sample file)" href="MultiParaCrawl/v9/bg-ne_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Dutch (sample file)" href="MultiParaCrawl/v9/bg-nl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/bg-nn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Polish (sample file)" href="MultiParaCrawl/v9/bg-pl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Pushto (sample file)" href="MultiParaCrawl/v9/bg-ps_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="MultiParaCrawl/v9/bg-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="MultiParaCrawl/v9/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Russian (sample file)" href="MultiParaCrawl/v9/bg-ru_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Sinhala (sample file)" href="MultiParaCrawl/v9/bg-si_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="MultiParaCrawl/v9/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="MultiParaCrawl/v9/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Somali (sample file)" href="MultiParaCrawl/v9/bg-so_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swedish (sample file)" href="MultiParaCrawl/v9/bg-sv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swahili (sample file)" href="MultiParaCrawl/v9/bg-sw_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Tagalog (sample file)" href="MultiParaCrawl/v9/bg-tl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="MultiParaCrawl/v9/bg-uk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Chinese (sample file)" href="MultiParaCrawl/v9/bg-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/bg.zip">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/ca.zip">ca</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="MultiParaCrawl/v9/ca-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/cs.zip">cs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bulgarian' (2.5M links, 83.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-cs.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Czech-Danish (sample file)" href="MultiParaCrawl/v9/cs-da_sample.html">view</a></td><td><a rel="nofollow" title="Czech-German (sample file)" href="MultiParaCrawl/v9/cs-de_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="MultiParaCrawl/v9/cs-el_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="MultiParaCrawl/v9/cs-es_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Estonian (sample file)" href="MultiParaCrawl/v9/cs-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="MultiParaCrawl/v9/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="MultiParaCrawl/v9/cs-fr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Irish (sample file)" href="MultiParaCrawl/v9/cs-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Croatian (sample file)" href="MultiParaCrawl/v9/cs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="MultiParaCrawl/v9/cs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="MultiParaCrawl/v9/cs-is_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Italian (sample file)" href="MultiParaCrawl/v9/cs-it_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Central Khmer (sample file)" href="MultiParaCrawl/v9/cs-km_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Korean (sample file)" href="MultiParaCrawl/v9/cs-ko_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Lithuanian (sample file)" href="MultiParaCrawl/v9/cs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Latvian (sample file)" href="MultiParaCrawl/v9/cs-lv_sample.html">view</a></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Maltese (sample file)" href="MultiParaCrawl/v9/cs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Burmese (sample file)" href="MultiParaCrawl/v9/cs-my_sample.html">view</a></td><td><a rel="nofollow" title="Czech-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/cs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Nepali (sample file)" href="MultiParaCrawl/v9/cs-ne_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="MultiParaCrawl/v9/cs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/cs-nn_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Polish (sample file)" href="MultiParaCrawl/v9/cs-pl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Pushto (sample file)" href="MultiParaCrawl/v9/cs-ps_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="MultiParaCrawl/v9/cs-pt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Romanian (sample file)" href="MultiParaCrawl/v9/cs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Russian (sample file)" href="MultiParaCrawl/v9/cs-ru_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Sinhala (sample file)" href="MultiParaCrawl/v9/cs-si_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovak (sample file)" href="MultiParaCrawl/v9/cs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="MultiParaCrawl/v9/cs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Somali (sample file)" href="MultiParaCrawl/v9/cs-so_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swedish (sample file)" href="MultiParaCrawl/v9/cs-sv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swahili (sample file)" href="MultiParaCrawl/v9/cs-sw_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Tagalog (sample file)" href="MultiParaCrawl/v9/cs-tl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="MultiParaCrawl/v9/cs-uk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="MultiParaCrawl/v9/cs-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/cs.zip">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/da.zip">da</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bulgarian' (1.8M links, 71.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-da.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Czech' (5.2M links, 186.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-da.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="MultiParaCrawl/v9/da-de_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Greek (sample file)" href="MultiParaCrawl/v9/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="MultiParaCrawl/v9/da-es_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Estonian (sample file)" href="MultiParaCrawl/v9/da-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="MultiParaCrawl/v9/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="MultiParaCrawl/v9/da-fr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Irish (sample file)" href="MultiParaCrawl/v9/da-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Croatian (sample file)" href="MultiParaCrawl/v9/da-hr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hungarian (sample file)" href="MultiParaCrawl/v9/da-hu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="MultiParaCrawl/v9/da-is_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="MultiParaCrawl/v9/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Central Khmer (sample file)" href="MultiParaCrawl/v9/da-km_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Korean (sample file)" href="MultiParaCrawl/v9/da-ko_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Lithuanian (sample file)" href="MultiParaCrawl/v9/da-lt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Latvian (sample file)" href="MultiParaCrawl/v9/da-lv_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Maltese (sample file)" href="MultiParaCrawl/v9/da-mt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Burmese (sample file)" href="MultiParaCrawl/v9/da-my_sample.html">view</a></td><td><a rel="nofollow" title="Danish-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/da-nb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Nepali (sample file)" href="MultiParaCrawl/v9/da-ne_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="MultiParaCrawl/v9/da-nl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/da-nn_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Polish (sample file)" href="MultiParaCrawl/v9/da-pl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Pushto (sample file)" href="MultiParaCrawl/v9/da-ps_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="MultiParaCrawl/v9/da-pt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Romanian (sample file)" href="MultiParaCrawl/v9/da-ro_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Russian (sample file)" href="MultiParaCrawl/v9/da-ru_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Sinhala (sample file)" href="MultiParaCrawl/v9/da-si_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovak (sample file)" href="MultiParaCrawl/v9/da-sk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovenian (sample file)" href="MultiParaCrawl/v9/da-sl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Somali (sample file)" href="MultiParaCrawl/v9/da-so_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="MultiParaCrawl/v9/da-sv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swahili (sample file)" href="MultiParaCrawl/v9/da-sw_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Tagalog (sample file)" href="MultiParaCrawl/v9/da-tl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Ukrainian (sample file)" href="MultiParaCrawl/v9/da-uk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Chinese (sample file)" href="MultiParaCrawl/v9/da-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/da.zip">da</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/de.zip">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Bulgarian' (3.5M links, 128.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-de.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (11.8M links, 377.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (10.6M links, 371.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-Greek (sample file)" href="MultiParaCrawl/v9/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="MultiParaCrawl/v9/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Estonian (sample file)" href="MultiParaCrawl/v9/de-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="MultiParaCrawl/v9/de-fi_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="MultiParaCrawl/v9/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Irish (sample file)" href="MultiParaCrawl/v9/de-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Croatian (sample file)" href="MultiParaCrawl/v9/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Hungarian (sample file)" href="MultiParaCrawl/v9/de-hu_sample.html">view</a></td><td><a rel="nofollow" title="German-Icelandic (sample file)" href="MultiParaCrawl/v9/de-is_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="MultiParaCrawl/v9/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Central Khmer (sample file)" href="MultiParaCrawl/v9/de-km_sample.html">view</a></td><td><a rel="nofollow" title="German-Korean (sample file)" href="MultiParaCrawl/v9/de-ko_sample.html">view</a></td><td><a rel="nofollow" title="German-Lithuanian (sample file)" href="MultiParaCrawl/v9/de-lt_sample.html">view</a></td><td><a rel="nofollow" title="German-Latvian (sample file)" href="MultiParaCrawl/v9/de-lv_sample.html">view</a></td><th>de</th>
<td><a rel="nofollow" title="German-Maltese (sample file)" href="MultiParaCrawl/v9/de-mt_sample.html">view</a></td><td><a rel="nofollow" title="German-Burmese (sample file)" href="MultiParaCrawl/v9/de-my_sample.html">view</a></td><td><a rel="nofollow" title="German-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/de-nb_sample.html">view</a></td><td><a rel="nofollow" title="German-Nepali (sample file)" href="MultiParaCrawl/v9/de-ne_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="MultiParaCrawl/v9/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/de-nn_sample.html">view</a></td><td><a rel="nofollow" title="German-Polish (sample file)" href="MultiParaCrawl/v9/de-pl_sample.html">view</a></td><td><a rel="nofollow" title="German-Pushto (sample file)" href="MultiParaCrawl/v9/de-ps_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="MultiParaCrawl/v9/de-pt_sample.html">view</a></td><td><a rel="nofollow" title="German-Romanian (sample file)" href="MultiParaCrawl/v9/de-ro_sample.html">view</a></td><td><a rel="nofollow" title="German-Russian (sample file)" href="MultiParaCrawl/v9/de-ru_sample.html">view</a></td><td><a rel="nofollow" title="German-Sinhala (sample file)" href="MultiParaCrawl/v9/de-si_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovak (sample file)" href="MultiParaCrawl/v9/de-sk_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovenian (sample file)" href="MultiParaCrawl/v9/de-sl_sample.html">view</a></td><td><a rel="nofollow" title="German-Somali (sample file)" href="MultiParaCrawl/v9/de-so_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="MultiParaCrawl/v9/de-sv_sample.html">view</a></td><td><a rel="nofollow" title="German-Swahili (sample file)" href="MultiParaCrawl/v9/de-sw_sample.html">view</a></td><td><a rel="nofollow" title="German-Tagalog (sample file)" href="MultiParaCrawl/v9/de-tl_sample.html">view</a></td><td><a rel="nofollow" title="German-Ukrainian (sample file)" href="MultiParaCrawl/v9/de-uk_sample.html">view</a></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="MultiParaCrawl/v9/de-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/el.zip">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (1.9M links, 70.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-el.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Czech' (2.8M links, 95.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (2.6M links, 96.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (4.8M links, 166.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-Spanish (sample file)" href="MultiParaCrawl/v9/el-es_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Estonian (sample file)" href="MultiParaCrawl/v9/el-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="MultiParaCrawl/v9/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="MultiParaCrawl/v9/el-fr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Irish (sample file)" href="MultiParaCrawl/v9/el-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="MultiParaCrawl/v9/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hungarian (sample file)" href="MultiParaCrawl/v9/el-hu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="MultiParaCrawl/v9/el-is_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="MultiParaCrawl/v9/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Central Khmer (sample file)" href="MultiParaCrawl/v9/el-km_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Korean (sample file)" href="MultiParaCrawl/v9/el-ko_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Lithuanian (sample file)" href="MultiParaCrawl/v9/el-lt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Latvian (sample file)" href="MultiParaCrawl/v9/el-lv_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Maltese (sample file)" href="MultiParaCrawl/v9/el-mt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Burmese (sample file)" href="MultiParaCrawl/v9/el-my_sample.html">view</a></td><td><a rel="nofollow" title="Greek-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/el-nb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Nepali (sample file)" href="MultiParaCrawl/v9/el-ne_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="MultiParaCrawl/v9/el-nl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/el-nn_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Polish (sample file)" href="MultiParaCrawl/v9/el-pl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Pushto (sample file)" href="MultiParaCrawl/v9/el-ps_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="MultiParaCrawl/v9/el-pt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="MultiParaCrawl/v9/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Russian (sample file)" href="MultiParaCrawl/v9/el-ru_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Sinhala (sample file)" href="MultiParaCrawl/v9/el-si_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovak (sample file)" href="MultiParaCrawl/v9/el-sk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="MultiParaCrawl/v9/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Somali (sample file)" href="MultiParaCrawl/v9/el-so_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swedish (sample file)" href="MultiParaCrawl/v9/el-sv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swahili (sample file)" href="MultiParaCrawl/v9/el-sw_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Tagalog (sample file)" href="MultiParaCrawl/v9/el-tl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="MultiParaCrawl/v9/el-uk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Chinese (sample file)" href="MultiParaCrawl/v9/el-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/el.zip">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/es.zip">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bulgarian' (3.5M links, 136.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (17.2M links, 896.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ca-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (10.0M links, 333.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (9.8M links, 365.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (43.5M links, 1.6G tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Greek' (5.0M links, 179.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Estonian (sample file)" href="MultiParaCrawl/v9/es-et_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Basque (sample file)" href="MultiParaCrawl/v9/es-eu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="MultiParaCrawl/v9/es-fi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="MultiParaCrawl/v9/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Irish (sample file)" href="MultiParaCrawl/v9/es-ga_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Galician (sample file)" href="MultiParaCrawl/v9/es-gl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="MultiParaCrawl/v9/es-hr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hungarian (sample file)" href="MultiParaCrawl/v9/es-hu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Icelandic (sample file)" href="MultiParaCrawl/v9/es-is_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="MultiParaCrawl/v9/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Central Khmer (sample file)" href="MultiParaCrawl/v9/es-km_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Korean (sample file)" href="MultiParaCrawl/v9/es-ko_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Lithuanian (sample file)" href="MultiParaCrawl/v9/es-lt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Latvian (sample file)" href="MultiParaCrawl/v9/es-lv_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Maltese (sample file)" href="MultiParaCrawl/v9/es-mt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Burmese (sample file)" href="MultiParaCrawl/v9/es-my_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/es-nb_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Nepali (sample file)" href="MultiParaCrawl/v9/es-ne_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="MultiParaCrawl/v9/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/es-nn_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="MultiParaCrawl/v9/es-pl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Pushto (sample file)" href="MultiParaCrawl/v9/es-ps_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="MultiParaCrawl/v9/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Romanian (sample file)" href="MultiParaCrawl/v9/es-ro_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="MultiParaCrawl/v9/es-ru_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Sinhala (sample file)" href="MultiParaCrawl/v9/es-si_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovak (sample file)" href="MultiParaCrawl/v9/es-sk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovenian (sample file)" href="MultiParaCrawl/v9/es-sl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Somali (sample file)" href="MultiParaCrawl/v9/es-so_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="MultiParaCrawl/v9/es-sv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swahili (sample file)" href="MultiParaCrawl/v9/es-sw_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Tagalog (sample file)" href="MultiParaCrawl/v9/es-tl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Ukrainian (sample file)" href="MultiParaCrawl/v9/es-uk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="MultiParaCrawl/v9/es-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/et.zip">et</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (1.0M links, 37.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Czech' (2.1M links, 64.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Danish' (1.7M links, 60.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-German' (2.5M links, 80.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Greek' (1.1M links, 38.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Spanish' (2.3M links, 80.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-et.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="MultiParaCrawl/v9/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-French (sample file)" href="MultiParaCrawl/v9/et-fr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Irish (sample file)" href="MultiParaCrawl/v9/et-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="MultiParaCrawl/v9/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hungarian (sample file)" href="MultiParaCrawl/v9/et-hu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="MultiParaCrawl/v9/et-is_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Italian (sample file)" href="MultiParaCrawl/v9/et-it_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Central Khmer (sample file)" href="MultiParaCrawl/v9/et-km_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Korean (sample file)" href="MultiParaCrawl/v9/et-ko_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="MultiParaCrawl/v9/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="MultiParaCrawl/v9/et-lv_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Maltese (sample file)" href="MultiParaCrawl/v9/et-mt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Burmese (sample file)" href="MultiParaCrawl/v9/et-my_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/et-nb_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Nepali (sample file)" href="MultiParaCrawl/v9/et-ne_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Dutch (sample file)" href="MultiParaCrawl/v9/et-nl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/et-nn_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Polish (sample file)" href="MultiParaCrawl/v9/et-pl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Pushto (sample file)" href="MultiParaCrawl/v9/et-ps_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="MultiParaCrawl/v9/et-pt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Romanian (sample file)" href="MultiParaCrawl/v9/et-ro_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Russian (sample file)" href="MultiParaCrawl/v9/et-ru_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Sinhala (sample file)" href="MultiParaCrawl/v9/et-si_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="MultiParaCrawl/v9/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="MultiParaCrawl/v9/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Somali (sample file)" href="MultiParaCrawl/v9/et-so_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swedish (sample file)" href="MultiParaCrawl/v9/et-sv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swahili (sample file)" href="MultiParaCrawl/v9/et-sw_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Tagalog (sample file)" href="MultiParaCrawl/v9/et-tl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Ukrainian (sample file)" href="MultiParaCrawl/v9/et-uk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="MultiParaCrawl/v9/et-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/et.zip">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/eu.zip">eu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Spanish' (3.3M links, 130.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-eu.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>eu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/eu.zip">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/fi.zip">fi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (1.8M links, 60.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' (5.2M links, 153.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (5.2M links, 169.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (8.3M links, 250.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' (2.3M links, 75.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (7.6M links, 243.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (2.1M links, 58.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-fi.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Finnish-French (sample file)" href="MultiParaCrawl/v9/fi-fr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Irish (sample file)" href="MultiParaCrawl/v9/fi-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="MultiParaCrawl/v9/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="MultiParaCrawl/v9/fi-hu_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="MultiParaCrawl/v9/fi-is_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="MultiParaCrawl/v9/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Central Khmer (sample file)" href="MultiParaCrawl/v9/fi-km_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Korean (sample file)" href="MultiParaCrawl/v9/fi-ko_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="MultiParaCrawl/v9/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="MultiParaCrawl/v9/fi-lv_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Maltese (sample file)" href="MultiParaCrawl/v9/fi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Burmese (sample file)" href="MultiParaCrawl/v9/fi-my_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/fi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Nepali (sample file)" href="MultiParaCrawl/v9/fi-ne_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="MultiParaCrawl/v9/fi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/fi-nn_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Polish (sample file)" href="MultiParaCrawl/v9/fi-pl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Pushto (sample file)" href="MultiParaCrawl/v9/fi-ps_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="MultiParaCrawl/v9/fi-pt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="MultiParaCrawl/v9/fi-ro_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Russian (sample file)" href="MultiParaCrawl/v9/fi-ru_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Sinhala (sample file)" href="MultiParaCrawl/v9/fi-si_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="MultiParaCrawl/v9/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="MultiParaCrawl/v9/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Somali (sample file)" href="MultiParaCrawl/v9/fi-so_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="MultiParaCrawl/v9/fi-sv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swahili (sample file)" href="MultiParaCrawl/v9/fi-sw_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Tagalog (sample file)" href="MultiParaCrawl/v9/fi-tl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="MultiParaCrawl/v9/fi-uk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="MultiParaCrawl/v9/fi-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/fi.zip">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/fr.zip">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Bulgarian' (3.0M links, 125.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (7.8M links, 282.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (7.2M links, 284.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (38.6M links, 1.5G tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (3.9M links, 153.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (40.7M links, 1.7G tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Estonian' (2.0M links, 74.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (5.9M links, 201.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Irish (sample file)" href="MultiParaCrawl/v9/fr-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Croatian (sample file)" href="MultiParaCrawl/v9/fr-hr_sample.html">view</a></td><td><a rel="nofollow" title="French-Hungarian (sample file)" href="MultiParaCrawl/v9/fr-hu_sample.html">view</a></td><td><a rel="nofollow" title="French-Icelandic (sample file)" href="MultiParaCrawl/v9/fr-is_sample.html">view</a></td><td><a rel="nofollow" title="French-Italian (sample file)" href="MultiParaCrawl/v9/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Central Khmer (sample file)" href="MultiParaCrawl/v9/fr-km_sample.html">view</a></td><td><a rel="nofollow" title="French-Korean (sample file)" href="MultiParaCrawl/v9/fr-ko_sample.html">view</a></td><td><a rel="nofollow" title="French-Lithuanian (sample file)" href="MultiParaCrawl/v9/fr-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="MultiParaCrawl/v9/fr-lv_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Maltese (sample file)" href="MultiParaCrawl/v9/fr-mt_sample.html">view</a></td><td><a rel="nofollow" title="French-Burmese (sample file)" href="MultiParaCrawl/v9/fr-my_sample.html">view</a></td><td><a rel="nofollow" title="French-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/fr-nb_sample.html">view</a></td><td><a rel="nofollow" title="French-Nepali (sample file)" href="MultiParaCrawl/v9/fr-ne_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="MultiParaCrawl/v9/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/fr-nn_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="MultiParaCrawl/v9/fr-pl_sample.html">view</a></td><td><a rel="nofollow" title="French-Pushto (sample file)" href="MultiParaCrawl/v9/fr-ps_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="MultiParaCrawl/v9/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Romanian (sample file)" href="MultiParaCrawl/v9/fr-ro_sample.html">view</a></td><td><a rel="nofollow" title="French-Russian (sample file)" href="MultiParaCrawl/v9/fr-ru_sample.html">view</a></td><td><a rel="nofollow" title="French-Sinhala (sample file)" href="MultiParaCrawl/v9/fr-si_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovak (sample file)" href="MultiParaCrawl/v9/fr-sk_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="MultiParaCrawl/v9/fr-sl_sample.html">view</a></td><td><a rel="nofollow" title="French-Somali (sample file)" href="MultiParaCrawl/v9/fr-so_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="MultiParaCrawl/v9/fr-sv_sample.html">view</a></td><td><a rel="nofollow" title="French-Swahili (sample file)" href="MultiParaCrawl/v9/fr-sw_sample.html">view</a></td><td><a rel="nofollow" title="French-Tagalog (sample file)" href="MultiParaCrawl/v9/fr-tl_sample.html">view</a></td><td><a rel="nofollow" title="French-Ukrainian (sample file)" href="MultiParaCrawl/v9/fr-uk_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="MultiParaCrawl/v9/fr-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/ga.zip">ga</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Bulgarian' (0.3M links, 11.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Czech' (0.4M links, 15.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Danish' (0.4M links, 16.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-German' (0.5M links, 17.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Greek' (0.3M links, 11.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Spanish' (0.5M links, 20.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Estonian' (0.3M links, 10.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Finnish' (0.3M links, 11.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-French' (0.5M links, 20.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-ga.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Irish-Croatian (sample file)" href="MultiParaCrawl/v9/ga-hr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Hungarian (sample file)" href="MultiParaCrawl/v9/ga-hu_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Icelandic (sample file)" href="MultiParaCrawl/v9/ga-is_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Italian (sample file)" href="MultiParaCrawl/v9/ga-it_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Central Khmer (sample file)" href="MultiParaCrawl/v9/ga-km_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Korean (sample file)" href="MultiParaCrawl/v9/ga-ko_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Lithuanian (sample file)" href="MultiParaCrawl/v9/ga-lt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Latvian (sample file)" href="MultiParaCrawl/v9/ga-lv_sample.html">view</a></td><th>ga</th>
<td><a rel="nofollow" title="Irish-Maltese (sample file)" href="MultiParaCrawl/v9/ga-mt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Burmese (sample file)" href="MultiParaCrawl/v9/ga-my_sample.html">view</a></td><td><a rel="nofollow" title="Irish-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/ga-nb_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Nepali (sample file)" href="MultiParaCrawl/v9/ga-ne_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Dutch (sample file)" href="MultiParaCrawl/v9/ga-nl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/ga-nn_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Polish (sample file)" href="MultiParaCrawl/v9/ga-pl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Pushto (sample file)" href="MultiParaCrawl/v9/ga-ps_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Portuguese (sample file)" href="MultiParaCrawl/v9/ga-pt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Romanian (sample file)" href="MultiParaCrawl/v9/ga-ro_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Russian (sample file)" href="MultiParaCrawl/v9/ga-ru_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Sinhala (sample file)" href="MultiParaCrawl/v9/ga-si_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovak (sample file)" href="MultiParaCrawl/v9/ga-sk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovenian (sample file)" href="MultiParaCrawl/v9/ga-sl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Somali (sample file)" href="MultiParaCrawl/v9/ga-so_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swedish (sample file)" href="MultiParaCrawl/v9/ga-sv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swahili (sample file)" href="MultiParaCrawl/v9/ga-sw_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Tagalog (sample file)" href="MultiParaCrawl/v9/ga-tl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Ukrainian (sample file)" href="MultiParaCrawl/v9/ga-uk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Chinese (sample file)" href="MultiParaCrawl/v9/ga-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/ga.zip">ga</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/gl.zip">gl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Spanish' (1.9M links, 97.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-gl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/gl.zip">gl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/hr.zip">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (0.4M links, 20.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' (0.7M links, 31.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Danish' (0.5M links, 25.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (1.0M links, 46.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (0.4M links, 17.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (0.8M links, 39.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (0.3M links, 13.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (0.5M links, 21.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (0.7M links, 38.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Irish' (0.1M links, 5.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-hr.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Hungarian (sample file)" href="MultiParaCrawl/v9/hr-hu_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="MultiParaCrawl/v9/hr-is_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Italian (sample file)" href="MultiParaCrawl/v9/hr-it_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Central Khmer (sample file)" href="MultiParaCrawl/v9/hr-km_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Korean (sample file)" href="MultiParaCrawl/v9/hr-ko_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="MultiParaCrawl/v9/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="MultiParaCrawl/v9/hr-lv_sample.html">view</a></td><th>hr</th>
<td><a rel="nofollow" title="Croatian-Maltese (sample file)" href="MultiParaCrawl/v9/hr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Burmese (sample file)" href="MultiParaCrawl/v9/hr-my_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/hr-nb_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Nepali (sample file)" href="MultiParaCrawl/v9/hr-ne_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Dutch (sample file)" href="MultiParaCrawl/v9/hr-nl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/hr-nn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Polish (sample file)" href="MultiParaCrawl/v9/hr-pl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Pushto (sample file)" href="MultiParaCrawl/v9/hr-ps_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="MultiParaCrawl/v9/hr-pt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="MultiParaCrawl/v9/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Russian (sample file)" href="MultiParaCrawl/v9/hr-ru_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Sinhala (sample file)" href="MultiParaCrawl/v9/hr-si_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="MultiParaCrawl/v9/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="MultiParaCrawl/v9/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Somali (sample file)" href="MultiParaCrawl/v9/hr-so_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swedish (sample file)" href="MultiParaCrawl/v9/hr-sv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swahili (sample file)" href="MultiParaCrawl/v9/hr-sw_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Tagalog (sample file)" href="MultiParaCrawl/v9/hr-tl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="MultiParaCrawl/v9/hr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="MultiParaCrawl/v9/hr-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/hu.zip">hu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' (2.3M links, 83.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' (7.6M links, 217.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Danish' (4.2M links, 148.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-German' (9.1M links, 297.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Greek' (2.6M links, 87.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Spanish' (8.1M links, 275.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Estonian' (2.0M links, 61.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' (4.8M links, 137.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-French' (6.2M links, 228.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Irish' (0.3M links, 13.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Croatian' (0.6M links, 28.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-hu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="MultiParaCrawl/v9/hu-is_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Italian (sample file)" href="MultiParaCrawl/v9/hu-it_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Central Khmer (sample file)" href="MultiParaCrawl/v9/hu-km_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Korean (sample file)" href="MultiParaCrawl/v9/hu-ko_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Lithuanian (sample file)" href="MultiParaCrawl/v9/hu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Latvian (sample file)" href="MultiParaCrawl/v9/hu-lv_sample.html">view</a></td><th>hu</th>
<td><a rel="nofollow" title="Hungarian-Maltese (sample file)" href="MultiParaCrawl/v9/hu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Burmese (sample file)" href="MultiParaCrawl/v9/hu-my_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/hu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Nepali (sample file)" href="MultiParaCrawl/v9/hu-ne_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="MultiParaCrawl/v9/hu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/hu-nn_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Polish (sample file)" href="MultiParaCrawl/v9/hu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Pushto (sample file)" href="MultiParaCrawl/v9/hu-ps_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="MultiParaCrawl/v9/hu-pt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Romanian (sample file)" href="MultiParaCrawl/v9/hu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Russian (sample file)" href="MultiParaCrawl/v9/hu-ru_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Sinhala (sample file)" href="MultiParaCrawl/v9/hu-si_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovak (sample file)" href="MultiParaCrawl/v9/hu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovenian (sample file)" href="MultiParaCrawl/v9/hu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Somali (sample file)" href="MultiParaCrawl/v9/hu-so_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swedish (sample file)" href="MultiParaCrawl/v9/hu-sv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swahili (sample file)" href="MultiParaCrawl/v9/hu-sw_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Tagalog (sample file)" href="MultiParaCrawl/v9/hu-tl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="MultiParaCrawl/v9/hu-uk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Chinese (sample file)" href="MultiParaCrawl/v9/hu-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/hu.zip">hu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/is.zip">is</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (0.3M links, 10.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Czech' (0.7M links, 22.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Danish' (0.6M links, 22.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-German' (0.9M links, 31.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' (0.3M links, 10.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Spanish' (0.8M links, 31.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (0.4M links, 13.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (0.7M links, 21.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-French' (0.7M links, 25.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Irish' (0.2M links, 7.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' (0.1M links, 4.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hungarian' (0.6M links, 19.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-is.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Italian (sample file)" href="MultiParaCrawl/v9/is-it_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Central Khmer (sample file)" href="MultiParaCrawl/v9/is-km_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Korean (sample file)" href="MultiParaCrawl/v9/is-ko_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="MultiParaCrawl/v9/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="MultiParaCrawl/v9/is-lv_sample.html">view</a></td><th>is</th>
<td><a rel="nofollow" title="Icelandic-Maltese (sample file)" href="MultiParaCrawl/v9/is-mt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Burmese (sample file)" href="MultiParaCrawl/v9/is-my_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/is-nb_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Nepali (sample file)" href="MultiParaCrawl/v9/is-ne_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Dutch (sample file)" href="MultiParaCrawl/v9/is-nl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/is-nn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Polish (sample file)" href="MultiParaCrawl/v9/is-pl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Pushto (sample file)" href="MultiParaCrawl/v9/is-ps_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="MultiParaCrawl/v9/is-pt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="MultiParaCrawl/v9/is-ro_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Russian (sample file)" href="MultiParaCrawl/v9/is-ru_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Sinhala (sample file)" href="MultiParaCrawl/v9/is-si_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="MultiParaCrawl/v9/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="MultiParaCrawl/v9/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Somali (sample file)" href="MultiParaCrawl/v9/is-so_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swedish (sample file)" href="MultiParaCrawl/v9/is-sv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swahili (sample file)" href="MultiParaCrawl/v9/is-sw_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Tagalog (sample file)" href="MultiParaCrawl/v9/is-tl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Ukrainian (sample file)" href="MultiParaCrawl/v9/is-uk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Chinese (sample file)" href="MultiParaCrawl/v9/is-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/is.zip">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/it.zip">it</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bulgarian' (2.2M links, 87.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Czech' (6.0M links, 211.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (5.5M links, 211.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (24.5M links, 936.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (3.2M links, 121.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (25.2M links, 1.0G tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Estonian' (1.7M links, 62.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (4.6M links, 154.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (23.2M links, 988.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Irish' (0.4M links, 16.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Croatian' (0.6M links, 33.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hungarian' (5.1M links, 182.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Icelandic' (0.6M links, 23.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-it.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Italian-Central Khmer (sample file)" href="MultiParaCrawl/v9/it-km_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Korean (sample file)" href="MultiParaCrawl/v9/it-ko_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Lithuanian (sample file)" href="MultiParaCrawl/v9/it-lt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Latvian (sample file)" href="MultiParaCrawl/v9/it-lv_sample.html">view</a></td><th>it</th>
<td><a rel="nofollow" title="Italian-Maltese (sample file)" href="MultiParaCrawl/v9/it-mt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Burmese (sample file)" href="MultiParaCrawl/v9/it-my_sample.html">view</a></td><td><a rel="nofollow" title="Italian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/it-nb_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Nepali (sample file)" href="MultiParaCrawl/v9/it-ne_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="MultiParaCrawl/v9/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/it-nn_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Polish (sample file)" href="MultiParaCrawl/v9/it-pl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Pushto (sample file)" href="MultiParaCrawl/v9/it-ps_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="MultiParaCrawl/v9/it-pt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Romanian (sample file)" href="MultiParaCrawl/v9/it-ro_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Russian (sample file)" href="MultiParaCrawl/v9/it-ru_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Sinhala (sample file)" href="MultiParaCrawl/v9/it-si_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovak (sample file)" href="MultiParaCrawl/v9/it-sk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovenian (sample file)" href="MultiParaCrawl/v9/it-sl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Somali (sample file)" href="MultiParaCrawl/v9/it-so_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="MultiParaCrawl/v9/it-sv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swahili (sample file)" href="MultiParaCrawl/v9/it-sw_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Tagalog (sample file)" href="MultiParaCrawl/v9/it-tl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Ukrainian (sample file)" href="MultiParaCrawl/v9/it-uk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Chinese (sample file)" href="MultiParaCrawl/v9/it-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/it.zip">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/km.zip">km</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Bulgarian' (1.1k links, 39.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-km.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Czech' (1.7k links, 47.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Danish' (1.1k links, 40.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-German' (1.9k links, 56.8k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Greek' (0.9k links, 32.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Spanish' (2.2k links, 78.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Estonian' (1.0k links, 21.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-km.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Finnish' (1.2k links, 29.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-French' (1.6k links, 49.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Irish' (0.8k links, 25.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-km.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Croatian' (0.2k links, 6.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Hungarian' (1.9k links, 59.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Icelandic' (1.1k links, 37.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Italian' (1.3k links, 40.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-km.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Central Khmer-Korean (sample file)" href="MultiParaCrawl/v9/km-ko_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Lithuanian (sample file)" href="MultiParaCrawl/v9/km-lt_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Latvian (sample file)" href="MultiParaCrawl/v9/km-lv_sample.html">view</a></td><th>km</th>
<td><a rel="nofollow" title="Central Khmer-Maltese (sample file)" href="MultiParaCrawl/v9/km-mt_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Burmese (sample file)" href="MultiParaCrawl/v9/km-my_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/km-nb_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Nepali (sample file)" href="MultiParaCrawl/v9/km-ne_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Dutch (sample file)" href="MultiParaCrawl/v9/km-nl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/km-nn_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Polish (sample file)" href="MultiParaCrawl/v9/km-pl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Pushto (sample file)" href="MultiParaCrawl/v9/km-ps_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Portuguese (sample file)" href="MultiParaCrawl/v9/km-pt_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Romanian (sample file)" href="MultiParaCrawl/v9/km-ro_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Russian (sample file)" href="MultiParaCrawl/v9/km-ru_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Sinhala (sample file)" href="MultiParaCrawl/v9/km-si_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Slovak (sample file)" href="MultiParaCrawl/v9/km-sk_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Slovenian (sample file)" href="MultiParaCrawl/v9/km-sl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Somali (sample file)" href="MultiParaCrawl/v9/km-so_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Swedish (sample file)" href="MultiParaCrawl/v9/km-sv_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Swahili (sample file)" href="MultiParaCrawl/v9/km-sw_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Tagalog (sample file)" href="MultiParaCrawl/v9/km-tl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Ukrainian (sample file)" href="MultiParaCrawl/v9/km-uk_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Chinese (sample file)" href="MultiParaCrawl/v9/km-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/km.zip">km</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/ko.zip">ko</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bulgarian' (0.1M links, 4.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Czech' (0.3M links, 8.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Danish' (0.3M links, 10.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-German' (0.7M links, 23.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Greek' (0.2M links, 6.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Spanish' (0.8M links, 27.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Estonian' (84.5k links, 2.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Finnish' (0.3M links, 7.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-French' (0.6M links, 23.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Irish' (18.5k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Croatian' (26.7k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hungarian' (0.3M links, 7.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Icelandic' (32.4k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Italian' (0.5M links, 15.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Central Khmer' (0.5k links, 13.7k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-ko.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Korean-Lithuanian (sample file)" href="MultiParaCrawl/v9/ko-lt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Latvian (sample file)" href="MultiParaCrawl/v9/ko-lv_sample.html">view</a></td><th>ko</th>
<td><a rel="nofollow" title="Korean-Maltese (sample file)" href="MultiParaCrawl/v9/ko-mt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Burmese (sample file)" href="MultiParaCrawl/v9/ko-my_sample.html">view</a></td><td><a rel="nofollow" title="Korean-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/ko-nb_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Nepali (sample file)" href="MultiParaCrawl/v9/ko-ne_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Dutch (sample file)" href="MultiParaCrawl/v9/ko-nl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/ko-nn_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Polish (sample file)" href="MultiParaCrawl/v9/ko-pl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Pushto (sample file)" href="MultiParaCrawl/v9/ko-ps_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Portuguese (sample file)" href="MultiParaCrawl/v9/ko-pt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Romanian (sample file)" href="MultiParaCrawl/v9/ko-ro_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Russian (sample file)" href="MultiParaCrawl/v9/ko-ru_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Sinhala (sample file)" href="MultiParaCrawl/v9/ko-si_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Slovak (sample file)" href="MultiParaCrawl/v9/ko-sk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Slovenian (sample file)" href="MultiParaCrawl/v9/ko-sl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Somali (sample file)" href="MultiParaCrawl/v9/ko-so_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Swedish (sample file)" href="MultiParaCrawl/v9/ko-sv_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Swahili (sample file)" href="MultiParaCrawl/v9/ko-sw_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Tagalog (sample file)" href="MultiParaCrawl/v9/ko-tl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Ukrainian (sample file)" href="MultiParaCrawl/v9/ko-uk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Chinese (sample file)" href="MultiParaCrawl/v9/ko-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/ko.zip">ko</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/lt.zip">lt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (1.6M links, 56.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Czech' (3.2M links, 94.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Danish' (2.2M links, 78.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-German' (3.5M links, 109.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Greek' (1.6M links, 55.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Spanish' (3.4M links, 113.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (1.9M links, 57.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' (2.5M links, 72.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (2.8M links, 102.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Irish' (0.3M links, 12.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' (0.4M links, 19.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hungarian' (3.0M links, 89.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' (0.5M links, 13.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Italian' (2.4M links, 82.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Central Khmer' (1.3k links, 27.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Korean' (0.1M links, 3.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-lt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="MultiParaCrawl/v9/lt-lv_sample.html">view</a></td><th>lt</th>
<td><a rel="nofollow" title="Lithuanian-Maltese (sample file)" href="MultiParaCrawl/v9/lt-mt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Burmese (sample file)" href="MultiParaCrawl/v9/lt-my_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/lt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Nepali (sample file)" href="MultiParaCrawl/v9/lt-ne_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Dutch (sample file)" href="MultiParaCrawl/v9/lt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/lt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Polish (sample file)" href="MultiParaCrawl/v9/lt-pl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Pushto (sample file)" href="MultiParaCrawl/v9/lt-ps_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="MultiParaCrawl/v9/lt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Romanian (sample file)" href="MultiParaCrawl/v9/lt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Russian (sample file)" href="MultiParaCrawl/v9/lt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Sinhala (sample file)" href="MultiParaCrawl/v9/lt-si_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="MultiParaCrawl/v9/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="MultiParaCrawl/v9/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Somali (sample file)" href="MultiParaCrawl/v9/lt-so_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swedish (sample file)" href="MultiParaCrawl/v9/lt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swahili (sample file)" href="MultiParaCrawl/v9/lt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Tagalog (sample file)" href="MultiParaCrawl/v9/lt-tl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Ukrainian (sample file)" href="MultiParaCrawl/v9/lt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Chinese (sample file)" href="MultiParaCrawl/v9/lt-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/lt.zip">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/lv.zip">lv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (1.6M links, 57.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Czech' (3.1M links, 95.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Danish' (2.3M links, 82.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-German' (3.3M links, 107.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Greek' (1.6M links, 55.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Spanish' (3.2M links, 110.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (2.0M links, 61.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' (2.5M links, 73.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (2.7M links, 101.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Irish' (0.4M links, 14.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' (0.4M links, 20.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hungarian' (2.8M links, 87.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' (0.5M links, 15.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Italian' (2.2M links, 81.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Central Khmer' (1.2k links, 28.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Korean' (92.6k links, 2.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (3.0M links, 90.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-lv.xml.gz">ces</a></td>
<th></th>
<th>lv</th>
<td><a rel="nofollow" title="Latvian-Maltese (sample file)" href="MultiParaCrawl/v9/lv-mt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Burmese (sample file)" href="MultiParaCrawl/v9/lv-my_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/lv-nb_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Nepali (sample file)" href="MultiParaCrawl/v9/lv-ne_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Dutch (sample file)" href="MultiParaCrawl/v9/lv-nl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/lv-nn_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Polish (sample file)" href="MultiParaCrawl/v9/lv-pl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Pushto (sample file)" href="MultiParaCrawl/v9/lv-ps_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="MultiParaCrawl/v9/lv-pt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Romanian (sample file)" href="MultiParaCrawl/v9/lv-ro_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Russian (sample file)" href="MultiParaCrawl/v9/lv-ru_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Sinhala (sample file)" href="MultiParaCrawl/v9/lv-si_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="MultiParaCrawl/v9/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="MultiParaCrawl/v9/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Somali (sample file)" href="MultiParaCrawl/v9/lv-so_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swedish (sample file)" href="MultiParaCrawl/v9/lv-sv_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swahili (sample file)" href="MultiParaCrawl/v9/lv-sw_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Tagalog (sample file)" href="MultiParaCrawl/v9/lv-tl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="MultiParaCrawl/v9/lv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Chinese (sample file)" href="MultiParaCrawl/v9/lv-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/lv.zip">lv</a></th></tr>
<tr><th></th>
<th>bg</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>ga</th>
<th>gl</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>km</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th></th>
<th>mt</th>
<th>my</th>
<th>nb</th>
<th>ne</th>
<th>nl</th>
<th>nn</th>
<th>pl</th>
<th>ps</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>so</th>
<th>sv</th>
<th>sw</th>
<th>tl</th>
<th>uk</th>
<th>zh</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/mt.zip">mt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bulgarian' (0.3M links, 17.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Czech' (0.5M links, 21.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Danish' (0.4M links, 20.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-German' (0.5M links, 23.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Greek' (0.4M links, 18.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Spanish' (0.5M links, 24.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Estonian' (0.4M links, 17.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Finnish' (0.4M links, 17.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-French' (0.5M links, 25.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Irish' (0.2M links, 7.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Croatian' (0.1M links, 6.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Hungarian' (0.5M links, 21.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Icelandic' (99.8k links, 3.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Italian' (0.4M links, 21.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Central Khmer' (0.4k links, 11.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Korean' (6.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Lithuanian' (0.5M links, 20.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Latvian' (0.5M links, 22.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-mt.xml.gz">ces</a></td>
<th>mt</th>
<th></th>
<td><a rel="nofollow" title="Maltese-Burmese (sample file)" href="MultiParaCrawl/v9/mt-my_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/mt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Nepali (sample file)" href="MultiParaCrawl/v9/mt-ne_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Dutch (sample file)" href="MultiParaCrawl/v9/mt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/mt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Polish (sample file)" href="MultiParaCrawl/v9/mt-pl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Pushto (sample file)" href="MultiParaCrawl/v9/mt-ps_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Portuguese (sample file)" href="MultiParaCrawl/v9/mt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Romanian (sample file)" href="MultiParaCrawl/v9/mt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Russian (sample file)" href="MultiParaCrawl/v9/mt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Sinhala (sample file)" href="MultiParaCrawl/v9/mt-si_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovak (sample file)" href="MultiParaCrawl/v9/mt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovenian (sample file)" href="MultiParaCrawl/v9/mt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Somali (sample file)" href="MultiParaCrawl/v9/mt-so_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swedish (sample file)" href="MultiParaCrawl/v9/mt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swahili (sample file)" href="MultiParaCrawl/v9/mt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Tagalog (sample file)" href="MultiParaCrawl/v9/mt-tl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Ukrainian (sample file)" href="MultiParaCrawl/v9/mt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Chinese (sample file)" href="MultiParaCrawl/v9/mt-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/mt.zip">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/my.zip">my</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Bulgarian' (0.2k links, 6.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-my.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Czech' (0.6k links, 13.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Danish' (0.3k links, 8.9k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-German' (0.7k links, 15.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Greek' (0.2k links, 4.9k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Spanish' (0.7k links, 16.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Estonian' (0.3k links, 6.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-my.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Finnish' (0.4k links, 8.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-French' (0.5k links, 13.9k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Irish' (0.3k links, 10.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-my.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Croatian' (39 links, 1.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Hungarian' (0.5k links, 13.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Icelandic' (0.2k links, 6.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Italian' (0.4k links, 9.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Central Khmer' (5.4k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Korean' (0.2k links, 7.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Lithuanian' (0.5k links, 10.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Latvian' (0.4k links, 10.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-my.xml.gz">ces</a></td>
<th>my</th>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Maltese' (0.2k links, 5.8k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-my.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Burmese-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9/my-nb_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Nepali (sample file)" href="MultiParaCrawl/v9/my-ne_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Dutch (sample file)" href="MultiParaCrawl/v9/my-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Burmese-Polish (sample file)" href="MultiParaCrawl/v9/my-pl_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Pushto (sample file)" href="MultiParaCrawl/v9/my-ps_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Portuguese (sample file)" href="MultiParaCrawl/v9/my-pt_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Romanian (sample file)" href="MultiParaCrawl/v9/my-ro_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Russian (sample file)" href="MultiParaCrawl/v9/my-ru_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Sinhala (sample file)" href="MultiParaCrawl/v9/my-si_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Slovak (sample file)" href="MultiParaCrawl/v9/my-sk_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Slovenian (sample file)" href="MultiParaCrawl/v9/my-sl_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Somali (sample file)" href="MultiParaCrawl/v9/my-so_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Swedish (sample file)" href="MultiParaCrawl/v9/my-sv_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Swahili (sample file)" href="MultiParaCrawl/v9/my-sw_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Tagalog (sample file)" href="MultiParaCrawl/v9/my-tl_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Ukrainian (sample file)" href="MultiParaCrawl/v9/my-uk_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Chinese (sample file)" href="MultiParaCrawl/v9/my-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/my.zip">my</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/nb.zip">nb</a></th>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bulgarian' (1.1M links, 41.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Czech' (3.2M links, 111.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Danish' (5.3M links, 190.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-German' (6.0M links, 215.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Greek' (1.4M links, 50.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Spanish' (5.7M links, 215.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Estonian' (1.0M links, 33.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Finnish' (3.3M links, 108.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-French' (4.3M links, 169.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Irish' (0.2M links, 9.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Croatian' (0.4M links, 16.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hungarian' (2.5M links, 88.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Icelandic' (0.7M links, 25.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Italian' (3.4M links, 129.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Central Khmer' (0.8k links, 30.9k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Korean' (0.2M links, 5.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Lithuanian' (1.3M links, 44.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Latvian' (1.4M links, 46.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-nb.xml.gz">ces</a></td>
<th>nb</th>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Maltese' (96.5k links, 3.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Burmese' (0.1k links, 5.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-nb.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Nepali (sample file)" href="MultiParaCrawl/v9/nb-ne_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Dutch (sample file)" href="MultiParaCrawl/v9/nb-nl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/nb-nn_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Polish (sample file)" href="MultiParaCrawl/v9/nb-pl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Pushto (sample file)" href="MultiParaCrawl/v9/nb-ps_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Portuguese (sample file)" href="MultiParaCrawl/v9/nb-pt_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Romanian (sample file)" href="MultiParaCrawl/v9/nb-ro_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Russian (sample file)" href="MultiParaCrawl/v9/nb-ru_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Sinhala (sample file)" href="MultiParaCrawl/v9/nb-si_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovak (sample file)" href="MultiParaCrawl/v9/nb-sk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovenian (sample file)" href="MultiParaCrawl/v9/nb-sl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Somali (sample file)" href="MultiParaCrawl/v9/nb-so_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Swedish (sample file)" href="MultiParaCrawl/v9/nb-sv_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Swahili (sample file)" href="MultiParaCrawl/v9/nb-sw_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Tagalog (sample file)" href="MultiParaCrawl/v9/nb-tl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Ukrainian (sample file)" href="MultiParaCrawl/v9/nb-uk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Chinese (sample file)" href="MultiParaCrawl/v9/nb-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/nb.zip">nb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/ne.zip">ne</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Bulgarian' (2.9k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-ne.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Czech' (4.9k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Danish' (4.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-German' (6.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Greek' (2.8k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Spanish' (6.4k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Estonian' (3.0k links, 99.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-ne.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Finnish' (3.6k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-French' (5.1k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Irish' (4.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-ne.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Croatian' (0.8k links, 46.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Hungarian' (4.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Icelandic' (2.9k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Italian' (4.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Central Khmer' (12.4k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Korean' (1.1k links, 40.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Lithuanian' (4.2k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Latvian' (4.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-ne.xml.gz">ces</a></td>
<th>ne</th>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Maltese' (1.5k links, 51.8k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Burmese' (3.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-BokmÃ¥l, Norwegian' (2.8k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-ne.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Nepali-Dutch (sample file)" href="MultiParaCrawl/v9/ne-nl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/ne-nn_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Polish (sample file)" href="MultiParaCrawl/v9/ne-pl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Pushto (sample file)" href="MultiParaCrawl/v9/ne-ps_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Portuguese (sample file)" href="MultiParaCrawl/v9/ne-pt_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Romanian (sample file)" href="MultiParaCrawl/v9/ne-ro_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Russian (sample file)" href="MultiParaCrawl/v9/ne-ru_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Sinhala (sample file)" href="MultiParaCrawl/v9/ne-si_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Slovak (sample file)" href="MultiParaCrawl/v9/ne-sk_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Slovenian (sample file)" href="MultiParaCrawl/v9/ne-sl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Somali (sample file)" href="MultiParaCrawl/v9/ne-so_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Swedish (sample file)" href="MultiParaCrawl/v9/ne-sv_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Swahili (sample file)" href="MultiParaCrawl/v9/ne-sw_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Tagalog (sample file)" href="MultiParaCrawl/v9/ne-tl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Ukrainian (sample file)" href="MultiParaCrawl/v9/ne-uk_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Chinese (sample file)" href="MultiParaCrawl/v9/ne-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/ne.zip">ne</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/nl.zip">nl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bulgarian' (2.4M links, 88.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (7.2M links, 239.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (8.0M links, 286.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (24.1M links, 794.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (3.6M links, 124.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (19.8M links, 699.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Estonian' (1.9M links, 65.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (6.2M links, 192.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (17.3M links, 657.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Irish' (0.4M links, 14.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Croatian' (0.6M links, 28.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (5.7M links, 192.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Icelandic' (0.7M links, 24.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (11.3M links, 411.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Central Khmer' (1.6k links, 57.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Korean' (0.4M links, 13.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Lithuanian' (2.7M links, 90.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latvian' (2.6M links, 88.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-nl.xml.gz">ces</a></td>
<th>nl</th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Maltese' (0.4M links, 21.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Burmese' (0.4k links, 9.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-BokmÃ¥l, Norwegian' (4.8M links, 173.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Nepali' (4.5k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-nl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9/nl-nn_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Polish (sample file)" href="MultiParaCrawl/v9/nl-pl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Pushto (sample file)" href="MultiParaCrawl/v9/nl-ps_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="MultiParaCrawl/v9/nl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Romanian (sample file)" href="MultiParaCrawl/v9/nl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Russian (sample file)" href="MultiParaCrawl/v9/nl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Sinhala (sample file)" href="MultiParaCrawl/v9/nl-si_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovak (sample file)" href="MultiParaCrawl/v9/nl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovenian (sample file)" href="MultiParaCrawl/v9/nl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Somali (sample file)" href="MultiParaCrawl/v9/nl-so_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="MultiParaCrawl/v9/nl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swahili (sample file)" href="MultiParaCrawl/v9/nl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Tagalog (sample file)" href="MultiParaCrawl/v9/nl-tl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Ukrainian (sample file)" href="MultiParaCrawl/v9/nl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="MultiParaCrawl/v9/nl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/nl.zip">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/nn.zip">nn</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Bulgarian' (13.0k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-nn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Czech' (20.7k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Danish' (15.0k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-German' (35.3k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Greek' (17.3k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Spanish' (40.1k links, 1.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Estonian' (9.4k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-nn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Finnish' (18.2k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-French' (27.9k links, 1.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Irish' (2.5k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-nn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Croatian' (2.8k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Hungarian' (19.7k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Icelandic' (8.2k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Italian' (19.5k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Central Khmer' (6 links, 58 tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Korean' (4.3k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Lithuanian' (14.7k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Latvian' (10.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-nn.xml.gz">ces</a></td>
<th>nn</th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Maltese' (1.1k links, 45.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-nn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-BokmÃ¥l, Norwegian' (46.7k links, 1.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Nepali' (22 links, 1.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Dutch' (23.4k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-nn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Norwegian Nynorsk-Polish (sample file)" href="MultiParaCrawl/v9/nn-pl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Pushto (sample file)" href="MultiParaCrawl/v9/nn-ps_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Portuguese (sample file)" href="MultiParaCrawl/v9/nn-pt_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Romanian (sample file)" href="MultiParaCrawl/v9/nn-ro_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Russian (sample file)" href="MultiParaCrawl/v9/nn-ru_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Sinhala (sample file)" href="MultiParaCrawl/v9/nn-si_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Slovak (sample file)" href="MultiParaCrawl/v9/nn-sk_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Slovenian (sample file)" href="MultiParaCrawl/v9/nn-sl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Somali (sample file)" href="MultiParaCrawl/v9/nn-so_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Swedish (sample file)" href="MultiParaCrawl/v9/nn-sv_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Swahili (sample file)" href="MultiParaCrawl/v9/nn-sw_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Tagalog (sample file)" href="MultiParaCrawl/v9/nn-tl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Ukrainian (sample file)" href="MultiParaCrawl/v9/nn-uk_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Chinese (sample file)" href="MultiParaCrawl/v9/nn-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/nn.zip">nn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/pl.zip">pl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bulgarian' (1.8M links, 62.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Czech' (5.7M links, 168.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Danish' (3.7M links, 126.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (10.3M links, 353.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Greek' (2.1M links, 72.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (9.4M links, 312.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Estonian' (1.4M links, 46.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Finnish' (3.2M links, 94.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (8.2M links, 311.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Irish' (0.3M links, 11.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Croatian' (0.4M links, 21.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hungarian' (4.2M links, 128.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Icelandic' (0.4M links, 13.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Italian' (6.6M links, 240.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Central Khmer' (0.9k links, 19.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Korean' (0.2M links, 6.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Lithuanian' (2.1M links, 66.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Latvian' (1.9M links, 64.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-pl.xml.gz">ces</a></td>
<th>pl</th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Maltese' (0.4M links, 18.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Burmese' (0.3k links, 6.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-BokmÃ¥l, Norwegian' (2.4M links, 79.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Nepali' (2.3k links, 86.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (5.7M links, 184.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Norwegian Nynorsk' (8.7k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-pl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Polish-Pushto (sample file)" href="MultiParaCrawl/v9/pl-ps_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="MultiParaCrawl/v9/pl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Romanian (sample file)" href="MultiParaCrawl/v9/pl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Russian (sample file)" href="MultiParaCrawl/v9/pl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Sinhala (sample file)" href="MultiParaCrawl/v9/pl-si_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovak (sample file)" href="MultiParaCrawl/v9/pl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovenian (sample file)" href="MultiParaCrawl/v9/pl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Somali (sample file)" href="MultiParaCrawl/v9/pl-so_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swedish (sample file)" href="MultiParaCrawl/v9/pl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swahili (sample file)" href="MultiParaCrawl/v9/pl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Tagalog (sample file)" href="MultiParaCrawl/v9/pl-tl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="MultiParaCrawl/v9/pl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Chinese (sample file)" href="MultiParaCrawl/v9/pl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/pl.zip">pl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/ps.zip">ps</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Bulgarian' (1.4k links, 43.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-ps.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Czech' (3.1k links, 91.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Danish' (2.1k links, 75.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-German' (3.1k links, 86.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Greek' (1.6k links, 49.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Spanish' (2.9k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Estonian' (1.9k links, 52.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-ps.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Finnish' (2.0k links, 52.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-French' (2.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Irish' (1.8k links, 70.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-ps.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Croatian' (0.4k links, 20.9k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Hungarian' (2.4k links, 72.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Icelandic' (1.7k links, 51.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Italian' (2.0k links, 66.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Central Khmer' (1.1k links, 61.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Korean' (0.2k links, 3.7k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Lithuanian' (2.5k links, 71.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Latvian' (2.7k links, 84.9k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-ps.xml.gz">ces</a></td>
<th>ps</th>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Maltese' (1.0k links, 31.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Burmese' (0.7k links, 46.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-BokmÃ¥l, Norwegian' (1.3k links, 47.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Nepali' (4.1k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Dutch' (2.2k links, 66.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Norwegian Nynorsk' (1 links, 6 tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Polish' (1.7k links, 53.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-ps.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Pushto-Portuguese (sample file)" href="MultiParaCrawl/v9/ps-pt_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Romanian (sample file)" href="MultiParaCrawl/v9/ps-ro_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Russian (sample file)" href="MultiParaCrawl/v9/ps-ru_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Sinhala (sample file)" href="MultiParaCrawl/v9/ps-si_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Slovak (sample file)" href="MultiParaCrawl/v9/ps-sk_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Slovenian (sample file)" href="MultiParaCrawl/v9/ps-sl_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Somali (sample file)" href="MultiParaCrawl/v9/ps-so_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Swedish (sample file)" href="MultiParaCrawl/v9/ps-sv_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Swahili (sample file)" href="MultiParaCrawl/v9/ps-sw_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Tagalog (sample file)" href="MultiParaCrawl/v9/ps-tl_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Ukrainian (sample file)" href="MultiParaCrawl/v9/ps-uk_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Chinese (sample file)" href="MultiParaCrawl/v9/ps-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/ps.zip">ps</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/pt.zip">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (2.6M links, 99.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (6.4M links, 212.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (6.1M links, 223.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (19.3M links, 689.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (3.3M links, 120.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (27.4M links, 1.1G tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (1.7M links, 60.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (4.8M links, 153.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (18.9M links, 762.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Irish' (0.4M links, 16.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (0.5M links, 26.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (5.1M links, 174.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (0.6M links, 20.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (13.7M links, 529.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Central Khmer' (1.4k links, 42.9k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Korean' (0.6M links, 19.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (2.5M links, 86.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (2.3M links, 82.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-pt.xml.gz">ces</a></td>
<th>pt</th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Maltese' (0.4M links, 21.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Burmese' (0.4k links, 10.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-BokmÃ¥l, Norwegian' (3.8M links, 139.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Nepali' (5.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (10.4M links, 368.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Norwegian Nynorsk' (22.7k links, 1.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (6.5M links, 215.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Pushto' (2.2k links, 76.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-pt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="MultiParaCrawl/v9/pt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="MultiParaCrawl/v9/pt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Sinhala (sample file)" href="MultiParaCrawl/v9/pt-si_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="MultiParaCrawl/v9/pt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="MultiParaCrawl/v9/pt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Somali (sample file)" href="MultiParaCrawl/v9/pt-so_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="MultiParaCrawl/v9/pt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swahili (sample file)" href="MultiParaCrawl/v9/pt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Tagalog (sample file)" href="MultiParaCrawl/v9/pt-tl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="MultiParaCrawl/v9/pt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="MultiParaCrawl/v9/pt-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/pt.zip">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/ro.zip">ro</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (2.6M links, 100.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' (5.1M links, 167.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Danish' (3.6M links, 140.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-German' (6.7M links, 240.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (2.4M links, 90.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Spanish' (7.2M links, 268.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Estonian' (1.7M links, 59.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' (3.4M links, 112.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-French' (5.5M links, 220.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Irish' (0.3M links, 14.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (0.6M links, 30.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hungarian' (4.8M links, 162.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Icelandic' (0.5M links, 17.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Italian' (4.4M links, 170.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Central Khmer' (1.7k links, 63.8k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Korean' (0.2M links, 6.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Lithuanian' (2.5M links, 85.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Latvian' (2.4M links, 85.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-ro.xml.gz">ces</a></td>
<th>ro</th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Maltese' (0.5M links, 22.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Burmese' (0.4k links, 9.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-BokmÃ¥l, Norwegian' (2.2M links, 82.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Nepali' (4.1k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Dutch' (4.7M links, 173.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Norwegian Nynorsk' (20.3k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Polish' (3.4M links, 116.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Pushto' (2.2k links, 71.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (4.8M links, 178.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-ro.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Russian (sample file)" href="MultiParaCrawl/v9/ro-ru_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Sinhala (sample file)" href="MultiParaCrawl/v9/ro-si_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovak (sample file)" href="MultiParaCrawl/v9/ro-sk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovenian (sample file)" href="MultiParaCrawl/v9/ro-sl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Somali (sample file)" href="MultiParaCrawl/v9/ro-so_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swedish (sample file)" href="MultiParaCrawl/v9/ro-sv_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swahili (sample file)" href="MultiParaCrawl/v9/ro-sw_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Tagalog (sample file)" href="MultiParaCrawl/v9/ro-tl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Ukrainian (sample file)" href="MultiParaCrawl/v9/ro-uk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Chinese (sample file)" href="MultiParaCrawl/v9/ro-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/ro.zip">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/ru.zip">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bulgarian' (0.2M links, 5.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (0.3M links, 8.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Danish' (0.2M links, 7.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (0.7M links, 24.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Greek' (0.2M links, 6.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (0.7M links, 26.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Estonian' (0.1M links, 3.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Finnish' (0.2M links, 7.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (0.6M links, 22.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Irish' (24.5k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Croatian' (30.0k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hungarian' (0.2M links, 8.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Icelandic' (42.5k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Italian' (0.4M links, 13.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Central Khmer' (2.4k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Korean' (71.8k links, 2.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Lithuanian' (0.1M links, 4.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Latvian' (0.1M links, 3.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-ru.xml.gz">ces</a></td>
<th>ru</th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Maltese' (12.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Burmese' (1.4k links, 78.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-BokmÃ¥l, Norwegian' (0.1M links, 5.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Nepali' (4.1k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Dutch' (0.4M links, 12.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Norwegian Nynorsk' (4.5k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Polish' (0.2M links, 6.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Pushto' (0.6k links, 19.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (0.4M links, 14.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Romanian' (0.3M links, 9.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ro-ru.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Russian-Sinhala (sample file)" href="MultiParaCrawl/v9/ru-si_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovak (sample file)" href="MultiParaCrawl/v9/ru-sk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovenian (sample file)" href="MultiParaCrawl/v9/ru-sl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Somali (sample file)" href="MultiParaCrawl/v9/ru-so_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swedish (sample file)" href="MultiParaCrawl/v9/ru-sv_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swahili (sample file)" href="MultiParaCrawl/v9/ru-sw_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Tagalog (sample file)" href="MultiParaCrawl/v9/ru-tl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Ukrainian (sample file)" href="MultiParaCrawl/v9/ru-uk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Chinese (sample file)" href="MultiParaCrawl/v9/ru-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/ru.zip">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/si.zip">si</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bulgarian' (11.7k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Czech' (15.1k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Danish' (9.7k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-German' (19.7k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Greek' (9.7k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Spanish' (20.7k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Estonian' (6.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Finnish' (10.4k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-French' (18.1k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Irish' (4.9k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Croatian' (2.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hungarian' (15.1k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Icelandic' (6.3k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Italian' (12.7k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Central Khmer' (19.8k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Korean' (1.8k links, 54.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Lithuanian' (9.4k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Latvian' (9.4k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-si.xml.gz">ces</a></td>
<th>si</th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Maltese' (2.7k links, 72.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Burmese' (5.5k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-BokmÃ¥l, Norwegian' (7.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Nepali' (34.5k links, 2.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Dutch' (14.0k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Norwegian Nynorsk' (0.1k links, 5.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Polish' (5.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Pushto' (6.6k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Portuguese' (13.9k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Romanian' (14.2k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ro-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Russian' (10.0k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ru-si.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Sinhala-Slovak (sample file)" href="MultiParaCrawl/v9/si-sk_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Slovenian (sample file)" href="MultiParaCrawl/v9/si-sl_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Somali (sample file)" href="MultiParaCrawl/v9/si-so_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Swedish (sample file)" href="MultiParaCrawl/v9/si-sv_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Swahili (sample file)" href="MultiParaCrawl/v9/si-sw_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Tagalog (sample file)" href="MultiParaCrawl/v9/si-tl_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Ukrainian (sample file)" href="MultiParaCrawl/v9/si-uk_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Chinese (sample file)" href="MultiParaCrawl/v9/si-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/si.zip">si</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/sk.zip">sk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' (2.3M links, 75.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Czech' (7.1M links, 200.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Danish' (3.1M links, 108.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-German' (6.1M links, 193.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Greek' (2.1M links, 69.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Spanish' (5.3M links, 172.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' (1.7M links, 54.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' (3.4M links, 94.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-French' (4.2M links, 152.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Irish' (0.4M links, 13.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' (0.6M links, 26.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hungarian' (5.1M links, 146.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' (0.6M links, 17.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Italian' (3.6M links, 123.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Central Khmer' (1.1k links, 24.8k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Korean' (0.1M links, 3.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' (2.6M links, 79.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' (2.7M links, 85.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-sk.xml.gz">ces</a></td>
<th>sk</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Maltese' (0.5M links, 21.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Burmese' (0.4k links, 9.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-BokmÃ¥l, Norwegian' (1.9M links, 66.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Nepali' (3.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Dutch' (4.0M links, 129.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Norwegian Nynorsk' (16.9k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Polish' (3.5M links, 103.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Pushto' (2.4k links, 71.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (3.6M links, 119.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Romanian' (3.7M links, 121.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ro-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Russian' (0.1M links, 3.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ru-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Sinhala' (8.3k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/si-sk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="MultiParaCrawl/v9/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Somali (sample file)" href="MultiParaCrawl/v9/sk-so_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swedish (sample file)" href="MultiParaCrawl/v9/sk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swahili (sample file)" href="MultiParaCrawl/v9/sk-sw_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Tagalog (sample file)" href="MultiParaCrawl/v9/sk-tl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="MultiParaCrawl/v9/sk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Chinese (sample file)" href="MultiParaCrawl/v9/sk-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/sk.zip">sk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/sl.zip">sl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (1.5M links, 54.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' (2.7M links, 90.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Danish' (1.8M links, 69.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-German' (3.2M links, 112.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' (1.2M links, 45.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Spanish' (2.8M links, 104.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (1.4M links, 46.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' (1.9M links, 59.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (2.5M links, 99.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Irish' (0.3M links, 11.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (0.5M links, 24.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hungarian' (2.4M links, 80.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (0.4M links, 12.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Italian' (2.2M links, 85.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Central Khmer' (0.9k links, 19.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Korean' (69.4k links, 1.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (1.7M links, 57.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (1.8M links, 62.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-sl.xml.gz">ces</a></td>
<th>sl</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Maltese' (0.4M links, 19.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Burmese' (0.3k links, 5.9k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-BokmÃ¥l, Norwegian' (1.1M links, 38.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Nepali' (2.8k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Dutch' (2.2M links, 81.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Norwegian Nynorsk' (7.6k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Polish' (1.7M links, 60.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Pushto' (1.8k links, 55.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (2.0M links, 75.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Romanian' (2.3M links, 83.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ro-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Russian' (60.4k links, 1.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ru-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Sinhala' (6.4k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/si-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' (2.5M links, 81.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Somali (sample file)" href="MultiParaCrawl/v9/sl-so_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swedish (sample file)" href="MultiParaCrawl/v9/sl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swahili (sample file)" href="MultiParaCrawl/v9/sl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Tagalog (sample file)" href="MultiParaCrawl/v9/sl-tl_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="MultiParaCrawl/v9/sl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Chinese (sample file)" href="MultiParaCrawl/v9/sl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/sl.zip">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/so.zip">so</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Bulgarian' (3.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-so.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Czech' (2.9k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Danish' (2.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-German' (5.9k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Greek' (3.5k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Spanish' (6.5k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Estonian' (0.7k links, 33.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-so.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Finnish' (3.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-French' (5.4k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Irish' (0.8k links, 44.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-so.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Croatian' (0.8k links, 55.8k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Hungarian' (4.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Icelandic' (3.1k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Italian' (4.0k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Central Khmer' (0.2k links, 12.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Korean' (0.8k links, 45.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Lithuanian' (3.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Latvian' (1.2k links, 63.8k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-so.xml.gz">ces</a></td>
<th>so</th>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Maltese' (0.3k links, 16.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Burmese' (52 links, 2.8k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-BokmÃ¥l, Norwegian' (2.4k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Nepali' (0.4k links, 28.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Dutch' (4.5k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Norwegian Nynorsk' (0.9k links, 59.6k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Polish' (0.7k links, 38.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Pushto' (64 links, 3.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Portuguese' (4.2k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Romanian' (5.5k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ro-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Russian' (1.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ru-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Sinhala' (0.4k links, 23.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/si-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Slovak' (3.1k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sk-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Slovenian' (0.3k links, 15.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sl-so.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Somali-Swedish (sample file)" href="MultiParaCrawl/v9/so-sv_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Swahili (sample file)" href="MultiParaCrawl/v9/so-sw_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Tagalog (sample file)" href="MultiParaCrawl/v9/so-tl_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Ukrainian (sample file)" href="MultiParaCrawl/v9/so-uk_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Chinese (sample file)" href="MultiParaCrawl/v9/so-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/so.zip">so</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/sv.zip">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bulgarian' (2.0M links, 73.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Czech' (6.0M links, 188.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (8.2M links, 280.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (13.2M links, 415.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Greek' (2.9M links, 98.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (12.3M links, 411.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Estonian' (2.0M links, 62.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (7.3M links, 212.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (9.0M links, 323.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Irish' (0.4M links, 14.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Croatian' (0.6M links, 25.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hungarian' (4.9M links, 155.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Icelandic' (0.7M links, 23.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (6.9M links, 242.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Central Khmer' (1.7k links, 55.0k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Korean' (0.3M links, 9.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Lithuanian' (2.7M links, 82.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Latvian' (2.7M links, 83.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-sv.xml.gz">ces</a></td>
<th>sv</th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Maltese' (0.4M links, 19.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Burmese' (0.4k links, 9.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-BokmÃ¥l, Norwegian' (5.3M links, 186.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Nepali' (5.4k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (10.0M links, 322.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Norwegian Nynorsk' (19.9k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Polish' (4.7M links, 141.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Pushto' (2.1k links, 61.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (7.3M links, 243.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Romanian' (4.2M links, 146.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ro-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Russian' (0.3M links, 10.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ru-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Sinhala' (12.9k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/si-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovak' (3.8M links, 118.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovenian' (2.1M links, 71.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Somali' (4.0k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/so-sv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swedish-Swahili (sample file)" href="MultiParaCrawl/v9/sv-sw_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Tagalog (sample file)" href="MultiParaCrawl/v9/sv-tl_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Ukrainian (sample file)" href="MultiParaCrawl/v9/sv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Chinese (sample file)" href="MultiParaCrawl/v9/sv-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/sv.zip">sv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/sw.zip">sw</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Bulgarian' (17.8k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Czech' (20.2k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Danish' (17.5k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-German' (29.6k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Greek' (20.5k links, 1.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Spanish' (38.0k links, 1.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Estonian' (7.1k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Finnish' (19.1k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-French' (32.7k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Irish' (8.5k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Croatian' (4.8k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Hungarian' (20.4k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Icelandic' (13.5k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Italian' (24.8k links, 1.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Central Khmer' (0.9k links, 47.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Korean' (7.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Lithuanian' (18.7k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Latvian' (13.0k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-sw.xml.gz">ces</a></td>
<th>sw</th>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Maltese' (3.6k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Burmese' (0.4k links, 23.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-BokmÃ¥l, Norwegian' (13.2k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Nepali' (2.3k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Dutch' (25.4k links, 1.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Norwegian Nynorsk' (2.9k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Polish' (10.4k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Pushto' (0.7k links, 33.3k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Portuguese' (27.8k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Romanian' (26.9k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ro-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Russian' (20.0k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ru-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Sinhala' (5.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/si-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovak' (19.7k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovenian' (7.6k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Somali' (1.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/so-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Swedish' (18.6k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sv-sw.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swahili-Tagalog (sample file)" href="MultiParaCrawl/v9/sw-tl_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Ukrainian (sample file)" href="MultiParaCrawl/v9/sw-uk_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Chinese (sample file)" href="MultiParaCrawl/v9/sw-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/sw.zip">sw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/tl.zip">tl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Bulgarian' (25.5k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Czech' (30.5k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Danish' (37.8k links, 2.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-German' (52.0k links, 2.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Greek' (27.9k links, 1.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Spanish' (82.8k links, 4.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Estonian' (12.6k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Finnish' (28.6k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-French' (56.1k links, 3.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Irish' (9.0k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Croatian' (5.8k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Hungarian' (24.8k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Icelandic' (14.1k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Italian' (34.5k links, 1.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Central Khmer' (0.6k links, 27.8k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Korean' (37.5k links, 1.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Lithuanian' (18.3k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Latvian' (13.8k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-tl.xml.gz">ces</a></td>
<th>tl</th>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Maltese' (3.9k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Burmese' (0.3k links, 18.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-BokmÃ¥l, Norwegian' (16.2k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Nepali' (1.4k links, 86.8k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Dutch' (29.9k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Norwegian Nynorsk' (2.9k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Polish' (13.7k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Pushto' (0.4k links, 20.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Portuguese' (47.3k links, 2.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Romanian' (33.7k links, 1.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ro-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Russian' (25.9k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ru-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Sinhala' (3.7k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/si-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Slovak' (21.3k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sk-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Slovenian' (9.2k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sl-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Somali' (0.1k links, 7.2k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/so-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Swedish' (23.0k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sv-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Swahili' (28.3k links, 1.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sw-tl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Tagalog-Ukrainian (sample file)" href="MultiParaCrawl/v9/tl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Tagalog-Chinese (sample file)" href="MultiParaCrawl/v9/tl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/tl.zip">tl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/uk.zip">uk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (1.5M links, 47.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Czech' (1.8M links, 51.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Danish' (1.2M links, 41.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-German' (2.6M links, 80.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' (1.1M links, 33.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Spanish' (2.6M links, 87.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Estonian' (0.5M links, 14.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Finnish' (1.2M links, 34.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-French' (2.1M links, 75.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Irish' (0.2M links, 8.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (0.3M links, 10.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hungarian' (1.6M links, 46.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Icelandic' (0.3M links, 10.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Italian' (1.6M links, 51.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Central Khmer' (3.1k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Korean' (0.2M links, 4.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Lithuanian' (1.0M links, 28.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Latvian' (1.1M links, 31.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-uk.xml.gz">ces</a></td>
<th>uk</th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Maltese' (93.2k links, 2.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Burmese' (0.8k links, 28.5k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-BokmÃ¥l, Norwegian' (0.9M links, 32.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Nepali' (9.0k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Dutch' (1.6M links, 48.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Norwegian Nynorsk' (14.0k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Polish' (1.5M links, 43.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Pushto' (3.2k links, 96.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (1.8M links, 61.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Romanian' (1.7M links, 56.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ro-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Russian' (0.3M links, 9.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ru-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Sinhala' (30.2k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/si-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovak' (1.6M links, 43.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (0.9M links, 25.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Somali' (7.7k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/so-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Swedish' (1.5M links, 47.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sv-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Swahili' (30.9k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sw-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Tagalog' (40.4k links, 2.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/tl-uk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Ukrainian-Chinese (sample file)" href="MultiParaCrawl/v9/uk-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/uk.zip">uk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/xml/zh.zip">zh</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bulgarian' (0.2M links, 5.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/bg-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (0.6M links, 12.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/cs-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Danish' (0.5M links, 11.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/da-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (1.8M links, 39.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/de-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Greek' (0.3M links, 6.5M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/el-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (1.9M links, 48.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/es-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (0.1M links, 2.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/et-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (0.4M links, 7.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fi-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (1.4M links, 38.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/fr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Irish' (21.0k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ga-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (44.5k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hungarian' (0.5M links, 9.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/hu-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Icelandic' (65.5k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/is-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Italian' (0.9M links, 21.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/it-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Central Khmer' (0.5k links, 12.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/km-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Korean' (0.8M links, 17.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ko-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Lithuanian' (0.2M links, 3.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Latvian' (0.2M links, 3.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/lv-zh.xml.gz">ces</a></td>
<th>zh</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Maltese' (10.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/mt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Burmese' (0.2k links, 5.4k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/my-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-BokmÃ¥l, Norwegian' (0.3M links, 7.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nb-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Nepali' (1.8k links, 60.1k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ne-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (0.9M links, 19.9M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Norwegian Nynorsk' (9.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/nn-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Polish' (0.4M links, 8.8M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Pushto' (0.2k links, 2.7k tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ps-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (1.1M links, 27.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/pt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Romanian' (0.4M links, 9.7M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ro-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (0.1M links, 2.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/ru-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Sinhala' (5.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/si-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovak' (0.3M links, 5.3M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sk-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovenian' (0.2M links, 3.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Somali' (3.3k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/so-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swedish' (0.6M links, 12.2M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sv-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swahili' (12.4k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/sw-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Tagalog' (40.1k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/tl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Ukrainian' (0.2M links, 5.0M tokens)" href="download.php?f=MultiParaCrawl/v9/xml/uk-zh.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9/raw/zh.zip">zh</a></th></tr>
<tr><th></th>
<th>bg</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>ga</th>
<th>gl</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>km</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th></th>
<th>mt</th>
<th>my</th>
<th>nb</th>
<th>ne</th>
<th>nl</th>
<th>nn</th>
<th>pl</th>
<th>ps</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>so</th>
<th>sv</th>
<th>sw</th>
<th>tl</th>
<th>uk</th>
<th>zh</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=MultiParaCrawl/v9/mono/bg.tok.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=MultiParaCrawl/v9/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=MultiParaCrawl/v9/mono/cs.tok.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized da plain text' href="download.php?f=MultiParaCrawl/v9/mono/da.tok.gz">da</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=MultiParaCrawl/v9/mono/de.tok.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=MultiParaCrawl/v9/mono/el.tok.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=MultiParaCrawl/v9/mono/es.tok.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=MultiParaCrawl/v9/mono/et.tok.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=MultiParaCrawl/v9/mono/eu.tok.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=MultiParaCrawl/v9/mono/fi.tok.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=MultiParaCrawl/v9/mono/fr.tok.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized ga plain text' href="download.php?f=MultiParaCrawl/v9/mono/ga.tok.gz">ga</a>
</th><th><a rel="nofollow" title='monolingual tokenized gl plain text' href="download.php?f=MultiParaCrawl/v9/mono/gl.tok.gz">gl</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=MultiParaCrawl/v9/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hu plain text' href="download.php?f=MultiParaCrawl/v9/mono/hu.tok.gz">hu</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=MultiParaCrawl/v9/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=MultiParaCrawl/v9/mono/it.tok.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized km plain text' href="download.php?f=MultiParaCrawl/v9/mono/km.tok.gz">km</a>
</th><th><a rel="nofollow" title='monolingual tokenized ko plain text' href="download.php?f=MultiParaCrawl/v9/mono/ko.tok.gz">ko</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=MultiParaCrawl/v9/mono/lt.tok.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=MultiParaCrawl/v9/mono/lv.tok.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=MultiParaCrawl/v9/mono/mt.tok.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized my plain text' href="download.php?f=MultiParaCrawl/v9/mono/my.tok.gz">my</a>
</th><th><a rel="nofollow" title='monolingual tokenized nb plain text' href="download.php?f=MultiParaCrawl/v9/mono/nb.tok.gz">nb</a>
</th><th><a rel="nofollow" title='monolingual tokenized ne plain text' href="download.php?f=MultiParaCrawl/v9/mono/ne.tok.gz">ne</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=MultiParaCrawl/v9/mono/nl.tok.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized nn plain text' href="download.php?f=MultiParaCrawl/v9/mono/nn.tok.gz">nn</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=MultiParaCrawl/v9/mono/pl.tok.gz">pl</a>
</th><th><a rel="nofollow" title='monolingual tokenized ps plain text' href="download.php?f=MultiParaCrawl/v9/mono/ps.tok.gz">ps</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=MultiParaCrawl/v9/mono/pt.tok.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=MultiParaCrawl/v9/mono/ro.tok.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=MultiParaCrawl/v9/mono/ru.tok.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized si plain text' href="download.php?f=MultiParaCrawl/v9/mono/si.tok.gz">si</a>
</th><th><a rel="nofollow" title='monolingual tokenized sk plain text' href="download.php?f=MultiParaCrawl/v9/mono/sk.tok.gz">sk</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=MultiParaCrawl/v9/mono/sl.tok.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized so plain text' href="download.php?f=MultiParaCrawl/v9/mono/so.tok.gz">so</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=MultiParaCrawl/v9/mono/sv.tok.gz">sv</a>
</th><th><a rel="nofollow" title='monolingual tokenized sw plain text' href="download.php?f=MultiParaCrawl/v9/mono/sw.tok.gz">sw</a>
</th><th><a rel="nofollow" title='monolingual tokenized tl plain text' href="download.php?f=MultiParaCrawl/v9/mono/tl.tok.gz">tl</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=MultiParaCrawl/v9/mono/uk.tok.gz">uk</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh plain text' href="download.php?f=MultiParaCrawl/v9/mono/zh.tok.gz">zh</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=MultiParaCrawl/v9/mono/bg.txt.gz">bg</a>
</th><td>1</td> <td>203.0M</td> <td>11.2M</td><td></td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Bulgarian-Czech (2,460,058 sentence pairs, 72.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-cs.tmx.gz">2.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Bulgarian-Danish (1,843,636 sentence pairs, 62.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-da.tmx.gz">1.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Bulgarian-German (3,549,315 sentence pairs, 111.88M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-de.tmx.gz">3.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Bulgarian-Greek (1,876,292 sentence pairs, 62.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-el.tmx.gz">1.9M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Bulgarian-Spanish (3,545,116 sentence pairs, 119.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-es.tmx.gz">3.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Bulgarian-Estonian (1,036,265 sentence pairs, 13.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-et.tmx.gz">1.0M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Bulgarian-Finnish (1,787,635 sentence pairs, 51.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-fi.tmx.gz">1.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Bulgarian-French (3,049,707 sentence pairs, 106.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-fr.tmx.gz">3.0M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Bulgarian-Irish (274,900 sentence pairs, 9.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Bulgarian-Croatian (441,010 sentence pairs, 18.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-hr.tmx.gz">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Bulgarian-Hungarian (2,340,764 sentence pairs, 71.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-hu.tmx.gz">2.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Icelandic (280,189 sentence pairs, 8.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-is.tmx.gz">0.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Bulgarian-Italian (2,243,033 sentence pairs, 75.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-it.tmx.gz">2.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bulgarian-Central Khmer (1,051 sentence pairs, 20.92k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-km.tmx.gz">1.1k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bulgarian-Korean (137,023 sentence pairs, 4.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-ko.tmx.gz">0.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Bulgarian-Lithuanian (1,611,597 sentence pairs, 47.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-lt.tmx.gz">1.6M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Bulgarian-Latvian (1,636,172 sentence pairs, 26.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-lv.tmx.gz">1.6M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Bulgarian-Maltese (347,497 sentence pairs, 14.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Burmese (246 sentence pairs, 3.51k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-my.tmx.gz">0.2k</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Bulgarian-BokmÃ¥l, Norwegian (1,127,563 sentence pairs, 36.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-nb.tmx.gz">1.1M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Bulgarian-Nepali (2,932 sentence pairs, 89.53k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-ne.tmx.gz">2.9k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bulgarian-Dutch (2,362,130 sentence pairs, 77.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-nl.tmx.gz">2.4M</a>
</td><td bgcolor="#fff5ef"><a rel="nofollow" title='Bulgarian-Norwegian Nynorsk (12,972 sentence pairs, 0.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-nn.tmx.gz">13.0k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Bulgarian-Polish (1,759,010 sentence pairs, 53.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-pl.tmx.gz">1.8M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Bulgarian-Pushto (1,378 sentence pairs, 38.11k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-ps.tmx.gz">1.4k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Bulgarian-Portuguese (2,591,164 sentence pairs, 87.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-pt.tmx.gz">2.6M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Bulgarian-Romanian (2,636,953 sentence pairs, 87.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-ro.tmx.gz">2.6M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bulgarian-Russian (154,677 sentence pairs, 4.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Bulgarian-Sinhala (11,658 sentence pairs, 0.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-si.tmx.gz">11.7k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Bulgarian-Slovak (2,267,858 sentence pairs, 65.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-sk.tmx.gz">2.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Bulgarian-Slovenian (1,488,489 sentence pairs, 46.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-sl.tmx.gz">1.5M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Bulgarian-Somali (3,169 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-so.tmx.gz">3.2k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Bulgarian-Swedish (2,019,306 sentence pairs, 64.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-sv.tmx.gz">2.0M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Bulgarian-Swahili (17,756 sentence pairs, 0.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-sw.tmx.gz">17.8k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Bulgarian-Tagalog (25,487 sentence pairs, 0.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-tl.tmx.gz">25.5k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Bulgarian-Ukrainian (1,540,905 sentence pairs, 40.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-uk.tmx.gz">1.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Bulgarian-Chinese (227,145 sentence pairs, 3.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/bg-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=MultiParaCrawl/v9/mono/ca.txt.gz">ca</a>
</th><td>1</td> <td>417.6M</td> <td>16.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Catalan-Spanish (17,238,954 sentence pairs, 774.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ca-es.tmx.gz">17.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=MultiParaCrawl/v9/mono/cs.txt.gz">cs</a>
</th><td>1</td> <td>535.6M</td> <td>36.3M</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Czech-Bulgarian (2,460,058 sentence pairs, 72.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-cs.txt.zip">2.5M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Danish (5,210,409 sentence pairs, 159.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-da.tmx.gz">5.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-German (11,784,919 sentence pairs, 315.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-de.tmx.gz">11.8M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Czech-Greek (2,784,211 sentence pairs, 82.09M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-el.tmx.gz">2.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Spanish (10,013,529 sentence pairs, 261.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-es.tmx.gz">10.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Czech-Estonian (2,086,592 sentence pairs, 55.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-et.tmx.gz">2.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Finnish (5,233,282 sentence pairs, 128.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-fi.tmx.gz">5.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-French (7,805,131 sentence pairs, 239.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-fr.tmx.gz">7.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Czech-Irish (404,116 sentence pairs, 13.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-ga.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Czech-Croatian (689,428 sentence pairs, 26.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-hr.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Hungarian (7,606,453 sentence pairs, 183.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-hu.tmx.gz">7.6M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Czech-Icelandic (685,498 sentence pairs, 19.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-is.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Italian (6,042,397 sentence pairs, 181.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-it.tmx.gz">6.0M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Czech-Central Khmer (1,698 sentence pairs, 26.25k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-km.tmx.gz">1.7k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Czech-Korean (304,417 sentence pairs, 7.01M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-ko.tmx.gz">0.3M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Lithuanian (3,151,663 sentence pairs, 79.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-lt.tmx.gz">3.2M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Latvian (3,064,776 sentence pairs, 80.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-lv.tmx.gz">3.1M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Czech-Maltese (478,263 sentence pairs, 17.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Czech-Burmese (582 sentence pairs, 7.97k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-my.tmx.gz">0.6k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Czech-BokmÃ¥l, Norwegian (3,176,519 sentence pairs, 97.88M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-nb.tmx.gz">3.2M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Czech-Nepali (4,887 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-ne.tmx.gz">4.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Dutch (7,232,483 sentence pairs, 208.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-nl.tmx.gz">7.2M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Czech-Norwegian Nynorsk (20,724 sentence pairs, 0.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-nn.tmx.gz">20.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Polish (5,650,761 sentence pairs, 143.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-pl.tmx.gz">5.7M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Czech-Pushto (3,064 sentence pairs, 79.95k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-ps.tmx.gz">3.1k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Czech-Portuguese (6,442,997 sentence pairs, 100.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-pt.tmx.gz">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Romanian (5,111,599 sentence pairs, 145.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-ro.tmx.gz">5.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Czech-Russian (274,255 sentence pairs, 7.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Czech-Sinhala (15,086 sentence pairs, 0.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-si.tmx.gz">15.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Slovak (7,072,952 sentence pairs, 172.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-sk.tmx.gz">7.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Slovenian (2,723,954 sentence pairs, 77.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-sl.tmx.gz">2.7M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Czech-Somali (2,863 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-so.tmx.gz">2.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Swedish (6,003,559 sentence pairs, 163.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-sv.tmx.gz">6.0M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Czech-Swahili (20,194 sentence pairs, 0.73M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-sw.tmx.gz">20.2k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Czech-Tagalog (30,516 sentence pairs, 1.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-tl.tmx.gz">30.5k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Czech-Ukrainian (1,772,798 sentence pairs, 43.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-uk.tmx.gz">1.8M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Czech-Chinese (642,700 sentence pairs, 9.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/cs-zh.tmx.gz">0.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized da plain text' href="download.php?f=MultiParaCrawl/v9/mono/da.txt.gz">da</a>
</th><td>1</td> <td>413.6M</td> <td>23.7M</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Bulgarian (1,843,636 sentence pairs, 62.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-da.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Czech (5,210,409 sentence pairs, 159.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-da.txt.zip">5.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-German (10,641,719 sentence pairs, 323.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-de.tmx.gz">10.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Danish-Greek (2,554,802 sentence pairs, 84.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-el.tmx.gz">2.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Spanish (9,805,830 sentence pairs, 323.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-es.tmx.gz">9.8M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Danish-Estonian (1,707,709 sentence pairs, 51.89M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-et.tmx.gz">1.7M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Finnish (5,188,150 sentence pairs, 62.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-fi.tmx.gz">5.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-French (7,160,657 sentence pairs, 245.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-fr.tmx.gz">7.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Irish (392,370 sentence pairs, 14.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-ga.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Danish-Croatian (524,691 sentence pairs, 22.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-hr.tmx.gz">0.5M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Danish-Hungarian (4,213,181 sentence pairs, 126.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-hu.tmx.gz">4.2M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Danish-Icelandic (606,655 sentence pairs, 19.81M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-is.tmx.gz">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Italian (5,510,474 sentence pairs, 175.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-it.tmx.gz">5.5M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Danish-Central Khmer (1,125 sentence pairs, 22.86k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-km.tmx.gz">1.1k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Danish-Korean (319,318 sentence pairs, 9.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-ko.tmx.gz">0.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Danish-Lithuanian (2,228,043 sentence pairs, 66.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-lt.tmx.gz">2.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Danish-Latvian (2,292,375 sentence pairs, 70.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-lv.tmx.gz">2.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Danish-Maltese (409,004 sentence pairs, 16.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-mt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Burmese (283 sentence pairs, 5.16k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-my.tmx.gz">0.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-BokmÃ¥l, Norwegian (5,317,134 sentence pairs, 168.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-nb.tmx.gz">5.3M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Danish-Nepali (4,170 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-ne.tmx.gz">4.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Dutch (7,987,473 sentence pairs, 252.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-nl.tmx.gz">8.0M</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Danish-Norwegian Nynorsk (14,976 sentence pairs, 0.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-nn.tmx.gz">15.0k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Danish-Polish (3,699,914 sentence pairs, 109.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-pl.tmx.gz">3.7M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Danish-Pushto (2,090 sentence pairs, 65.62k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-ps.tmx.gz">2.1k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Danish-Portuguese (6,077,467 sentence pairs, 103.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-pt.tmx.gz">6.1M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Danish-Romanian (3,647,642 sentence pairs, 123.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-ro.tmx.gz">3.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Danish-Russian (200,670 sentence pairs, 6.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Danish-Sinhala (9,702 sentence pairs, 0.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-si.tmx.gz">9.7k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Danish-Slovak (3,090,809 sentence pairs, 94.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-sk.tmx.gz">3.1M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Danish-Slovenian (1,816,119 sentence pairs, 30.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-sl.tmx.gz">1.8M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Danish-Somali (2,588 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-so.tmx.gz">2.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Swedish (8,185,167 sentence pairs, 248.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-sv.tmx.gz">8.2M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Danish-Swahili (17,495 sentence pairs, 0.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-sw.tmx.gz">17.5k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Danish-Tagalog (37,767 sentence pairs, 1.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-tl.tmx.gz">37.8k</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Danish-Ukrainian (1,242,962 sentence pairs, 35.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-uk.tmx.gz">1.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Danish-Chinese (513,362 sentence pairs, 8.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/da-zh.tmx.gz">0.5M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=MultiParaCrawl/v9/mono/de.txt.gz">de</a>
</th><td>1</td> <td>3.6G</td> <td>220.7M</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='German-Bulgarian (3,549,315 sentence pairs, 111.88M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-de.txt.zip">3.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Czech (11,784,919 sentence pairs, 324.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-de.txt.zip">11.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Danish (10,641,719 sentence pairs, 323.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-de.txt.zip">10.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Greek (4,799,008 sentence pairs, 139.01M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-el.tmx.gz">4.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Spanish (43,495,907 sentence pairs, 1.38G words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-es.tmx.gz">43.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='German-Estonian (2,452,130 sentence pairs, 68.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-et.tmx.gz">2.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Finnish (8,299,963 sentence pairs, 212.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-fi.tmx.gz">8.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-French (38,577,587 sentence pairs, 1.22G words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-fr.tmx.gz">38.6M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='German-Irish (489,217 sentence pairs, 15.79M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-ga.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#d0ffcf"><a rel="nofollow" title='German-Croatian (975,600 sentence pairs, 40.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-hr.tmx.gz">1.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Hungarian (9,058,725 sentence pairs, 251.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-hu.tmx.gz">9.1M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='German-Icelandic (869,038 sentence pairs, 27.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-is.tmx.gz">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Italian (24,521,908 sentence pairs, 809.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-it.tmx.gz">24.5M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='German-Central Khmer (1,944 sentence pairs, 32.27k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-km.tmx.gz">1.9k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='German-Korean (739,450 sentence pairs, 20.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-ko.tmx.gz">0.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='German-Lithuanian (3,511,847 sentence pairs, 92.97M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-lt.tmx.gz">3.5M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='German-Latvian (3,305,761 sentence pairs, 48.73M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-lv.tmx.gz">3.3M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='German-Maltese (498,651 sentence pairs, 19.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Burmese (680 sentence pairs, 9.10k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-my.tmx.gz">0.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-BokmÃ¥l, Norwegian (6,046,012 sentence pairs, 192.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-nb.tmx.gz">6.0M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='German-Nepali (6,224 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-ne.tmx.gz">6.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Dutch (24,054,475 sentence pairs, 695.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-nl.tmx.gz">24.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='German-Norwegian Nynorsk (35,325 sentence pairs, 1.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-nn.tmx.gz">35.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Polish (10,340,354 sentence pairs, 306.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-pl.tmx.gz">10.3M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='German-Pushto (3,096 sentence pairs, 75.08k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-ps.tmx.gz">3.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Portuguese (19,295,696 sentence pairs, 603.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-pt.tmx.gz">19.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Romanian (6,706,710 sentence pairs, 201.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-ro.tmx.gz">6.7M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='German-Russian (720,320 sentence pairs, 21.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-ru.tmx.gz">0.7M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='German-Sinhala (19,750 sentence pairs, 0.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-si.tmx.gz">19.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Slovak (6,077,711 sentence pairs, 172.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-sk.tmx.gz">6.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='German-Slovenian (3,229,382 sentence pairs, 96.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-sl.tmx.gz">3.2M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='German-Somali (5,868 sentence pairs, 0.34M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-so.tmx.gz">5.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Swedish (13,206,304 sentence pairs, 364.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-sv.tmx.gz">13.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='German-Swahili (29,605 sentence pairs, 1.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-sw.tmx.gz">29.6k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='German-Tagalog (52,026 sentence pairs, 2.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-tl.tmx.gz">52.0k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='German-Ukrainian (2,577,390 sentence pairs, 68.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-uk.tmx.gz">2.6M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='German-Chinese (1,759,703 sentence pairs, 29.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/de-zh.tmx.gz">1.8M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=MultiParaCrawl/v9/mono/el.txt.gz">el</a>
</th><td>1</td> <td>312.5M</td> <td>16.8M</td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-Bulgarian (1,876,292 sentence pairs, 62.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-el.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Greek-Czech (2,784,211 sentence pairs, 82.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-el.txt.zip">2.8M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Greek-Danish (2,554,802 sentence pairs, 84.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-el.txt.zip">2.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-German (4,799,008 sentence pairs, 144.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-el.txt.zip">4.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Spanish (4,975,470 sentence pairs, 158.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-es.tmx.gz">5.0M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Greek-Estonian (1,079,412 sentence pairs, 33.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-et.tmx.gz">1.1M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-Finnish (2,263,633 sentence pairs, 63.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-fi.tmx.gz">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-French (3,856,073 sentence pairs, 131.79M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-fr.tmx.gz">3.9M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Greek-Irish (277,067 sentence pairs, 10.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Greek-Croatian (356,987 sentence pairs, 15.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-hr.tmx.gz">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Greek-Hungarian (2,553,884 sentence pairs, 75.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-hu.tmx.gz">2.6M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Greek-Icelandic (315,906 sentence pairs, 9.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-is.tmx.gz">0.3M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Greek-Italian (3,199,329 sentence pairs, 105.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-it.tmx.gz">3.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Greek-Central Khmer (926 sentence pairs, 18.09k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-km.tmx.gz">0.9k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Greek-Korean (196,420 sentence pairs, 5.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Greek-Lithuanian (1,602,892 sentence pairs, 47.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-lt.tmx.gz">1.6M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Greek-Latvian (1,571,830 sentence pairs, 47.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-lv.tmx.gz">1.6M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Greek-Maltese (369,234 sentence pairs, 15.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-mt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Burmese (219 sentence pairs, 2.96k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-my.tmx.gz">0.2k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Greek-BokmÃ¥l, Norwegian (1,416,970 sentence pairs, 45.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-nb.tmx.gz">1.4M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Greek-Nepali (2,789 sentence pairs, 79.02k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-ne.tmx.gz">2.8k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Greek-Dutch (3,579,941 sentence pairs, 109.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-nl.tmx.gz">3.6M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Greek-Norwegian Nynorsk (17,339 sentence pairs, 0.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-nn.tmx.gz">17.3k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-Polish (2,119,316 sentence pairs, 63.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-pl.tmx.gz">2.1M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Greek-Pushto (1,581 sentence pairs, 43.56k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-ps.tmx.gz">1.6k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Greek-Portuguese (3,274,696 sentence pairs, 106.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-pt.tmx.gz">3.3M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Greek-Romanian (2,361,258 sentence pairs, 79.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-ro.tmx.gz">2.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Greek-Russian (176,461 sentence pairs, 5.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Greek-Sinhala (9,728 sentence pairs, 0.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-si.tmx.gz">9.7k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Greek-Slovak (2,053,161 sentence pairs, 60.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-sk.tmx.gz">2.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Greek-Slovenian (1,194,192 sentence pairs, 42.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-sl.tmx.gz">1.2M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Greek-Somali (3,488 sentence pairs, 0.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-so.tmx.gz">3.5k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Greek-Swedish (2,916,785 sentence pairs, 87.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-sv.tmx.gz">2.9M</a>
</td><td bgcolor="#fffdf0"><a rel="nofollow" title='Greek-Swahili (20,507 sentence pairs, 0.81M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-sw.tmx.gz">20.5k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Greek-Tagalog (27,930 sentence pairs, 1.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-tl.tmx.gz">27.9k</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Greek-Ukrainian (1,094,075 sentence pairs, 28.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-uk.tmx.gz">1.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Greek-Chinese (299,552 sentence pairs, 4.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/el-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=MultiParaCrawl/v9/mono/es.txt.gz">es</a>
</th><td>1</td> <td>4.6G</td> <td>227.1M</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Spanish-Bulgarian (3,545,116 sentence pairs, 119.05M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-es.txt.zip">3.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Catalan (17,238,954 sentence pairs, 774.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ca-es.txt.zip">17.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Czech (10,013,529 sentence pairs, 290.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-es.txt.zip">10.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Danish (9,805,830 sentence pairs, 323.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-es.txt.zip">9.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-German (43,495,907 sentence pairs, 1.38G words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-es.txt.zip">43.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Greek (4,975,470 sentence pairs, 158.86M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-es.txt.zip">5.0M</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Spanish-Estonian (2,314,571 sentence pairs, 70.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-et.tmx.gz">2.3M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Spanish-Basque (3,344,373 sentence pairs, 111.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-eu.tmx.gz">3.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Finnish (7,589,380 sentence pairs, 210.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-fi.tmx.gz">7.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-French (40,657,608 sentence pairs, 1.49G words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-fr.tmx.gz">40.7M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Spanish-Irish (508,709 sentence pairs, 18.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-ga.tmx.gz">0.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Spanish-Galician (1,879,652 sentence pairs, 86.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-gl.tmx.gz">1.9M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Spanish-Croatian (777,190 sentence pairs, 34.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-hr.tmx.gz">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Hungarian (8,074,110 sentence pairs, 236.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-hu.tmx.gz">8.1M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Spanish-Icelandic (844,009 sentence pairs, 27.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-is.tmx.gz">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Italian (25,212,207 sentence pairs, 882.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-it.tmx.gz">25.2M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Spanish-Central Khmer (2,215 sentence pairs, 45.77k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-km.tmx.gz">2.2k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Spanish-Korean (817,577 sentence pairs, 24.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-ko.tmx.gz">0.8M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Spanish-Lithuanian (3,404,227 sentence pairs, 97.62M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-lt.tmx.gz">3.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Spanish-Latvian (3,208,144 sentence pairs, 95.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-lv.tmx.gz">3.2M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Spanish-Maltese (488,579 sentence pairs, 20.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Burmese (656 sentence pairs, 10.16k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-my.tmx.gz">0.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-BokmÃ¥l, Norwegian (5,710,667 sentence pairs, 192.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-nb.tmx.gz">5.7M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Spanish-Nepali (6,447 sentence pairs, 0.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-ne.tmx.gz">6.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Dutch (19,755,697 sentence pairs, 619.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-nl.tmx.gz">19.8M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Spanish-Norwegian Nynorsk (40,093 sentence pairs, 1.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-nn.tmx.gz">40.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Polish (9,376,497 sentence pairs, 272.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-pl.tmx.gz">9.4M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Spanish-Pushto (2,933 sentence pairs, 91.27k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-ps.tmx.gz">2.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Portuguese (27,397,745 sentence pairs, 930.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-pt.tmx.gz">27.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Romanian (7,172,676 sentence pairs, 236.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-ro.tmx.gz">7.2M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Spanish-Russian (696,969 sentence pairs, 22.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-ru.tmx.gz">0.7M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Spanish-Sinhala (20,738 sentence pairs, 0.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-si.tmx.gz">20.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Slovak (5,312,560 sentence pairs, 151.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-sk.tmx.gz">5.3M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Spanish-Slovenian (2,836,177 sentence pairs, 100.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-sl.tmx.gz">2.8M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Spanish-Somali (6,461 sentence pairs, 0.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-so.tmx.gz">6.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Swedish (12,338,282 sentence pairs, 395.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-sv.tmx.gz">12.3M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Spanish-Swahili (38,038 sentence pairs, 1.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-sw.tmx.gz">38.0k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Spanish-Tagalog (82,824 sentence pairs, 3.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-tl.tmx.gz">82.8k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Spanish-Ukrainian (2,631,293 sentence pairs, 75.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-uk.tmx.gz">2.6M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Spanish-Chinese (1,917,966 sentence pairs, 37.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/es-zh.tmx.gz">1.9M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=MultiParaCrawl/v9/mono/et.txt.gz">et</a>
</th><td>1</td> <td>99.0M</td> <td>7.0M</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Estonian-Bulgarian (1,036,265 sentence pairs, 32.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-et.txt.zip">1.0M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Czech (2,086,592 sentence pairs, 55.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-et.txt.zip">2.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Danish (1,707,709 sentence pairs, 51.89M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-et.txt.zip">1.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Estonian-German (2,452,130 sentence pairs, 68.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-et.txt.zip">2.5M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Estonian-Greek (1,079,412 sentence pairs, 33.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-et.txt.zip">1.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Estonian-Spanish (2,314,571 sentence pairs, 70.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-et.txt.zip">2.3M</a>
</td><td></td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Finnish (2,055,218 sentence pairs, 49.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-fi.tmx.gz">2.1M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Estonian-French (1,956,482 sentence pairs, 62.73M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-fr.tmx.gz">2.0M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Estonian-Irish (283,303 sentence pairs, 8.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Estonian-Croatian (301,498 sentence pairs, 11.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-hr.tmx.gz">0.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Hungarian (1,953,006 sentence pairs, 51.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-hu.tmx.gz">2.0M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Estonian-Icelandic (440,685 sentence pairs, 11.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-is.tmx.gz">0.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Italian (1,726,691 sentence pairs, 53.62M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-it.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Estonian-Central Khmer (985 sentence pairs, 12.44k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-km.tmx.gz">1.0k</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Estonian-Korean (84,460 sentence pairs, 2.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-ko.tmx.gz">84.5k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Estonian-Lithuanian (1,915,127 sentence pairs, 48.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-lt.tmx.gz">1.9M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Latvian (2,011,343 sentence pairs, 51.83M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-lv.tmx.gz">2.0M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Maltese (401,429 sentence pairs, 14.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-mt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Burmese (300 sentence pairs, 3.65k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-my.tmx.gz">0.3k</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Estonian-BokmÃ¥l, Norwegian (989,395 sentence pairs, 28.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-nb.tmx.gz">1.0M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Estonian-Nepali (2,990 sentence pairs, 65.80k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-ne.tmx.gz">3.0k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Dutch (1,932,017 sentence pairs, 57.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-nl.tmx.gz">1.9M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Estonian-Norwegian Nynorsk (9,382 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-nn.tmx.gz">9.4k</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Estonian-Polish (1,354,901 sentence pairs, 39.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-pl.tmx.gz">1.4M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Estonian-Pushto (1,873 sentence pairs, 45.39k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-ps.tmx.gz">1.9k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Portuguese (1,674,718 sentence pairs, 52.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-pt.tmx.gz">1.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Romanian (1,664,069 sentence pairs, 51.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-ro.tmx.gz">1.7M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Estonian-Russian (101,234 sentence pairs, 2.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Estonian-Sinhala (5,983 sentence pairs, 0.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-si.tmx.gz">6.0k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Estonian-Slovak (1,730,935 sentence pairs, 46.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-sk.tmx.gz">1.7M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Estonian-Slovenian (1,393,918 sentence pairs, 39.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-sl.tmx.gz">1.4M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Estonian-Somali (669 sentence pairs, 27.73k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-so.tmx.gz">0.7k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Swedish (1,998,028 sentence pairs, 54.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-sv.tmx.gz">2.0M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Estonian-Swahili (7,142 sentence pairs, 0.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-sw.tmx.gz">7.1k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Estonian-Tagalog (12,643 sentence pairs, 0.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-tl.tmx.gz">12.6k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Ukrainian (547,516 sentence pairs, 12.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-uk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Estonian-Chinese (130,265 sentence pairs, 1.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/et-zh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=MultiParaCrawl/v9/mono/eu.txt.gz">eu</a>
</th><td>1</td> <td>52.5M</td> <td>3.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Basque-Spanish (3,344,373 sentence pairs, 111.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-eu.txt.zip">3.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=MultiParaCrawl/v9/mono/fi.txt.gz">fi</a>
</th><td>1</td> <td>297.9M</td> <td>23.6M</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Bulgarian (1,787,635 sentence pairs, 51.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-fi.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Czech (5,233,282 sentence pairs, 141.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-fi.txt.zip">5.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Danish (5,188,150 sentence pairs, 143.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-fi.txt.zip">5.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-German (8,299,963 sentence pairs, 212.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-fi.txt.zip">8.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-Greek (2,263,633 sentence pairs, 63.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-fi.txt.zip">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Spanish (7,589,380 sentence pairs, 210.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-fi.txt.zip">7.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Estonian (2,055,218 sentence pairs, 49.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-fi.txt.zip">2.1M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-French (5,892,078 sentence pairs, 135.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-fr.tmx.gz">5.9M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Finnish-Irish (339,587 sentence pairs, 9.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Finnish-Croatian (503,705 sentence pairs, 18.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-hr.tmx.gz">0.5M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Finnish-Hungarian (4,755,025 sentence pairs, 114.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-hu.tmx.gz">4.8M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Finnish-Icelandic (669,770 sentence pairs, 16.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-is.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Italian (4,603,721 sentence pairs, 130.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-it.tmx.gz">4.6M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Finnish-Central Khmer (1,218 sentence pairs, 15.82k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-km.tmx.gz">1.2k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Finnish-Korean (261,355 sentence pairs, 6.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-ko.tmx.gz">0.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Finnish-Lithuanian (2,527,199 sentence pairs, 60.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-lt.tmx.gz">2.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-Latvian (2,541,884 sentence pairs, 61.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-lv.tmx.gz">2.5M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Finnish-Maltese (422,201 sentence pairs, 14.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-mt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Burmese (438 sentence pairs, 4.90k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-my.tmx.gz">0.4k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Finnish-BokmÃ¥l, Norwegian (3,348,265 sentence pairs, 94.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-nb.tmx.gz">3.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Finnish-Nepali (3,646 sentence pairs, 83.75k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-ne.tmx.gz">3.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Dutch (6,225,414 sentence pairs, 165.89M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-nl.tmx.gz">6.2M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Finnish-Norwegian Nynorsk (18,247 sentence pairs, 0.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-nn.tmx.gz">18.2k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Finnish-Polish (3,230,496 sentence pairs, 80.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-pl.tmx.gz">3.2M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Finnish-Pushto (1,959 sentence pairs, 45.30k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-ps.tmx.gz">2.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Portuguese (4,815,231 sentence pairs, 132.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-pt.tmx.gz">4.8M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Finnish-Romanian (3,435,209 sentence pairs, 79.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-ro.tmx.gz">3.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Finnish-Russian (230,501 sentence pairs, 6.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Finnish-Sinhala (10,406 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-si.tmx.gz">10.4k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Finnish-Slovak (3,354,663 sentence pairs, 80.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-sk.tmx.gz">3.4M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Slovenian (1,881,379 sentence pairs, 50.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-sl.tmx.gz">1.9M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Finnish-Somali (3,595 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-so.tmx.gz">3.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Swedish (7,319,865 sentence pairs, 184.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-sv.tmx.gz">7.3M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Finnish-Swahili (19,139 sentence pairs, 0.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-sw.tmx.gz">19.1k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Finnish-Tagalog (28,580 sentence pairs, 1.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-tl.tmx.gz">28.6k</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Finnish-Ukrainian (1,212,042 sentence pairs, 28.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-uk.tmx.gz">1.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Finnish-Chinese (419,287 sentence pairs, 5.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fi-zh.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=MultiParaCrawl/v9/mono/fr.txt.gz">fr</a>
</th><td>1</td> <td>4.2G</td> <td>187.1M</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='French-Bulgarian (3,049,707 sentence pairs, 106.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-fr.txt.zip">3.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Czech (7,805,131 sentence pairs, 239.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-fr.txt.zip">7.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Danish (7,160,657 sentence pairs, 227.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-fr.txt.zip">7.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-German (38,577,587 sentence pairs, 1.22G words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-fr.txt.zip">38.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Greek (3,856,073 sentence pairs, 131.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-fr.txt.zip">3.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Spanish (40,657,608 sentence pairs, 1.49G words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-fr.txt.zip">40.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='French-Estonian (1,956,482 sentence pairs, 62.73M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-fr.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Finnish (5,892,078 sentence pairs, 168.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-fr.txt.zip">5.9M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='French-Irish (469,679 sentence pairs, 17.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-ga.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='French-Croatian (698,709 sentence pairs, 32.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-hr.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Hungarian (6,205,945 sentence pairs, 191.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-hu.tmx.gz">6.2M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='French-Icelandic (655,372 sentence pairs, 21.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-is.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Italian (23,211,105 sentence pairs, 872.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-it.tmx.gz">23.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='French-Central Khmer (1,562 sentence pairs, 28.52k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-km.tmx.gz">1.6k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='French-Korean (645,305 sentence pairs, 19.62M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-ko.tmx.gz">0.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='French-Lithuanian (2,822,045 sentence pairs, 98.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-lt.tmx.gz">2.8M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='French-Latvian (2,678,603 sentence pairs, 97.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-lv.tmx.gz">2.7M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='French-Maltese (472,970 sentence pairs, 21.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Burmese (518 sentence pairs, 8.51k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-my.tmx.gz">0.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-BokmÃ¥l, Norwegian (4,271,276 sentence pairs, 148.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-nb.tmx.gz">4.3M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='French-Nepali (5,128 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-ne.tmx.gz">5.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Dutch (17,255,814 sentence pairs, 570.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-nl.tmx.gz">17.3M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='French-Norwegian Nynorsk (27,948 sentence pairs, 1.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-nn.tmx.gz">27.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Polish (8,220,994 sentence pairs, 265.97M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-pl.tmx.gz">8.2M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='French-Pushto (2,662 sentence pairs, 87.36k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-ps.tmx.gz">2.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Portuguese (18,894,602 sentence pairs, 659.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-pt.tmx.gz">18.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Romanian (5,466,438 sentence pairs, 189.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-ro.tmx.gz">5.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='French-Russian (550,318 sentence pairs, 18.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-ru.tmx.gz">0.6M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='French-Sinhala (18,145 sentence pairs, 0.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-si.tmx.gz">18.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Slovak (4,221,660 sentence pairs, 129.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-sk.tmx.gz">4.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='French-Slovenian (2,461,269 sentence pairs, 83.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-sl.tmx.gz">2.5M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='French-Somali (5,383 sentence pairs, 0.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-so.tmx.gz">5.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Swedish (9,039,963 sentence pairs, 280.89M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-sv.tmx.gz">9.0M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='French-Swahili (32,706 sentence pairs, 1.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-sw.tmx.gz">32.7k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='French-Tagalog (56,131 sentence pairs, 2.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-tl.tmx.gz">56.1k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='French-Ukrainian (2,054,775 sentence pairs, 62.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-uk.tmx.gz">2.1M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='French-Chinese (1,414,440 sentence pairs, 28.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/fr-zh.tmx.gz">1.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ga plain text' href="download.php?f=MultiParaCrawl/v9/mono/ga.txt.gz">ga</a>
</th><td>1</td> <td>61.3M</td> <td>2.8M</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Irish-Bulgarian (274,900 sentence pairs, 9.82M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-ga.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Czech (404,116 sentence pairs, 13.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-ga.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Irish-Danish (392,370 sentence pairs, 14.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-ga.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Irish-German (489,217 sentence pairs, 15.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-ga.txt.zip">0.5M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Irish-Greek (277,067 sentence pairs, 10.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-ga.txt.zip">0.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Irish-Spanish (508,709 sentence pairs, 18.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-ga.txt.zip">0.5M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Irish-Estonian (283,303 sentence pairs, 8.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-ga.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Irish-Finnish (339,587 sentence pairs, 9.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-ga.txt.zip">0.3M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Irish-French (469,679 sentence pairs, 17.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-ga.txt.zip">0.5M</a>
</td><td></td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Irish-Croatian (100,279 sentence pairs, 4.89M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-hr.tmx.gz">0.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Hungarian (349,419 sentence pairs, 13.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Irish-Icelandic (216,559 sentence pairs, 6.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-is.tmx.gz">0.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Irish-Italian (391,758 sentence pairs, 14.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-it.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Irish-Central Khmer (779 sentence pairs, 15.69k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-km.tmx.gz">0.8k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Irish-Korean (18,473 sentence pairs, 0.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-ko.tmx.gz">18.5k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Irish-Lithuanian (331,755 sentence pairs, 10.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Latvian (371,492 sentence pairs, 12.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Irish-Maltese (182,106 sentence pairs, 6.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Burmese (309 sentence pairs, 6.33k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-my.tmx.gz">0.3k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Irish-BokmÃ¥l, Norwegian (232,302 sentence pairs, 8.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-nb.tmx.gz">0.2M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Irish-Nepali (4,016 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-ne.tmx.gz">4.0k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Dutch (352,967 sentence pairs, 12.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-nl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Irish-Norwegian Nynorsk (2,500 sentence pairs, 91.76k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-nn.tmx.gz">2.5k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Irish-Polish (288,023 sentence pairs, 9.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-pl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Irish-Pushto (1,769 sentence pairs, 61.63k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-ps.tmx.gz">1.8k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Irish-Portuguese (394,854 sentence pairs, 14.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Romanian (341,460 sentence pairs, 12.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Irish-Russian (24,478 sentence pairs, 0.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-ru.tmx.gz">24.5k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Irish-Sinhala (4,891 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-si.tmx.gz">4.9k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Slovak (359,339 sentence pairs, 11.88M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Irish-Slovenian (285,427 sentence pairs, 9.62M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Irish-Somali (847 sentence pairs, 37.90k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-so.tmx.gz">0.8k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Swedish (379,803 sentence pairs, 12.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Irish-Swahili (8,505 sentence pairs, 0.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-sw.tmx.gz">8.5k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Irish-Tagalog (8,999 sentence pairs, 0.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-tl.tmx.gz">9.0k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Irish-Ukrainian (237,824 sentence pairs, 7.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-uk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Irish-Chinese (21,042 sentence pairs, 0.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ga-zh.tmx.gz">21.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gl plain text' href="download.php?f=MultiParaCrawl/v9/mono/gl.txt.gz">gl</a>
</th><td>1</td> <td>44.6M</td> <td>1.8M</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Galician-Spanish (1,879,652 sentence pairs, 86.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-gl.txt.zip">1.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=MultiParaCrawl/v9/mono/hr.txt.gz">hr</a>
</th><td>1</td> <td>67.3M</td> <td>2.8M</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Croatian-Bulgarian (441,010 sentence pairs, 18.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-hr.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Croatian-Czech (689,428 sentence pairs, 26.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-hr.txt.zip">0.7M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Croatian-Danish (524,691 sentence pairs, 22.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-hr.txt.zip">0.5M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Croatian-German (975,600 sentence pairs, 40.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-hr.txt.zip">1.0M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Croatian-Greek (356,987 sentence pairs, 15.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-hr.txt.zip">0.4M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Croatian-Spanish (777,190 sentence pairs, 38.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-hr.txt.zip">0.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Croatian-Estonian (301,498 sentence pairs, 11.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-hr.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Croatian-Finnish (503,705 sentence pairs, 18.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-hr.txt.zip">0.5M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Croatian-French (698,709 sentence pairs, 32.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-hr.txt.zip">0.7M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Croatian-Irish (100,279 sentence pairs, 4.89M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-hr.txt.zip">0.1M</a>
</td><td></td><td></td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Croatian-Hungarian (634,622 sentence pairs, 24.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-hu.tmx.gz">0.6M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Croatian-Icelandic (116,764 sentence pairs, 4.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-is.tmx.gz">0.1M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Croatian-Italian (647,543 sentence pairs, 29.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-it.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Central Khmer (194 sentence pairs, 3.65k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-km.tmx.gz">0.2k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Croatian-Korean (26,696 sentence pairs, 0.96M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-ko.tmx.gz">26.7k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Croatian-Lithuanian (424,103 sentence pairs, 16.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Croatian-Latvian (446,488 sentence pairs, 18.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Croatian-Maltese (109,283 sentence pairs, 5.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-mt.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Burmese (40 sentence pairs, 0.69k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-my.tmx.gz">40</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Croatian-BokmÃ¥l, Norwegian (378,450 sentence pairs, 14.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-nb.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-Nepali (812 sentence pairs, 31.10k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-ne.tmx.gz">0.8k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Croatian-Dutch (583,818 sentence pairs, 24.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-nl.tmx.gz">0.6M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Croatian-Norwegian Nynorsk (2,827 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-nn.tmx.gz">2.8k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Croatian-Polish (443,983 sentence pairs, 18.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-pl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Croatian-Pushto (447 sentence pairs, 18.55k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-ps.tmx.gz">0.4k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Croatian-Portuguese (535,063 sentence pairs, 23.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-pt.tmx.gz">0.5M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Croatian-Romanian (607,459 sentence pairs, 26.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-ro.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Croatian-Russian (30,006 sentence pairs, 1.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-ru.tmx.gz">30.0k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Croatian-Sinhala (2,582 sentence pairs, 0.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-si.tmx.gz">2.6k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Croatian-Slovak (591,535 sentence pairs, 23.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Croatian-Slovenian (524,414 sentence pairs, 21.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-sl.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Croatian-Somali (841 sentence pairs, 47.76k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-so.tmx.gz">0.8k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Croatian-Swedish (550,406 sentence pairs, 22.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-sv.tmx.gz">0.6M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Croatian-Swahili (4,819 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-sw.tmx.gz">4.8k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Croatian-Tagalog (5,802 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-tl.tmx.gz">5.8k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Croatian-Ukrainian (261,408 sentence pairs, 9.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Croatian-Chinese (44,492 sentence pairs, 0.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hr-zh.tmx.gz">44.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hu plain text' href="download.php?f=MultiParaCrawl/v9/mono/hu.txt.gz">hu</a>
</th><td>1</td> <td>389.5M</td> <td>26.5M</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Hungarian-Bulgarian (2,340,764 sentence pairs, 71.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-hu.txt.zip">2.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Czech (7,606,453 sentence pairs, 183.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-hu.txt.zip">7.6M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Hungarian-Danish (4,213,181 sentence pairs, 126.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-hu.txt.zip">4.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-German (9,058,725 sentence pairs, 251.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-hu.txt.zip">9.1M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hungarian-Greek (2,553,884 sentence pairs, 82.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-hu.txt.zip">2.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Spanish (8,074,110 sentence pairs, 236.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-hu.txt.zip">8.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hungarian-Estonian (1,953,006 sentence pairs, 51.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-hu.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Hungarian-Finnish (4,755,025 sentence pairs, 114.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-hu.txt.zip">4.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-French (6,205,945 sentence pairs, 191.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-hu.txt.zip">6.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Hungarian-Irish (349,419 sentence pairs, 11.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-hu.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Hungarian-Croatian (634,622 sentence pairs, 24.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-hu.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Hungarian-Icelandic (613,523 sentence pairs, 16.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-is.tmx.gz">0.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hungarian-Italian (5,110,540 sentence pairs, 83.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-it.tmx.gz">5.1M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Hungarian-Central Khmer (1,886 sentence pairs, 31.92k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-km.tmx.gz">1.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Hungarian-Korean (258,876 sentence pairs, 6.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-ko.tmx.gz">0.3M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hungarian-Lithuanian (2,952,420 sentence pairs, 76.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-lt.tmx.gz">3.0M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Hungarian-Latvian (2,828,829 sentence pairs, 73.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-lv.tmx.gz">2.8M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Hungarian-Maltese (466,372 sentence pairs, 17.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Burmese (513 sentence pairs, 7.52k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-my.tmx.gz">0.5k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hungarian-BokmÃ¥l, Norwegian (2,546,741 sentence pairs, 76.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-nb.tmx.gz">2.5M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Hungarian-Nepali (4,765 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-ne.tmx.gz">4.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Dutch (5,726,705 sentence pairs, 165.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-nl.tmx.gz">5.7M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Hungarian-Norwegian Nynorsk (19,682 sentence pairs, 0.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-nn.tmx.gz">19.7k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hungarian-Polish (4,203,291 sentence pairs, 108.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-pl.tmx.gz">4.2M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Hungarian-Pushto (2,397 sentence pairs, 62.80k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-ps.tmx.gz">2.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Portuguese (5,109,996 sentence pairs, 134.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-pt.tmx.gz">5.1M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Hungarian-Romanian (4,779,775 sentence pairs, 126.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-ro.tmx.gz">4.8M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Hungarian-Russian (245,152 sentence pairs, 7.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Hungarian-Sinhala (15,108 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-si.tmx.gz">15.1k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Hungarian-Slovak (5,090,698 sentence pairs, 124.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-sk.tmx.gz">5.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Hungarian-Slovenian (2,409,482 sentence pairs, 68.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-sl.tmx.gz">2.4M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Hungarian-Somali (3,990 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-so.tmx.gz">4.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Swedish (4,919,014 sentence pairs, 133.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-sv.tmx.gz">4.9M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Hungarian-Swahili (20,438 sentence pairs, 0.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-sw.tmx.gz">20.4k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Hungarian-Tagalog (24,810 sentence pairs, 1.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-tl.tmx.gz">24.8k</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Hungarian-Ukrainian (1,550,680 sentence pairs, 38.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-uk.tmx.gz">1.6M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Hungarian-Chinese (457,416 sentence pairs, 5.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/hu-zh.tmx.gz">0.5M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=MultiParaCrawl/v9/mono/is.txt.gz">is</a>
</th><td>1</td> <td>34.8M</td> <td>2.3M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Icelandic-Bulgarian (280,189 sentence pairs, 8.70M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-is.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Icelandic-Czech (685,498 sentence pairs, 19.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-is.txt.zip">0.7M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Icelandic-Danish (606,655 sentence pairs, 19.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-is.txt.zip">0.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Icelandic-German (869,038 sentence pairs, 13.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-is.txt.zip">0.9M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Icelandic-Greek (315,906 sentence pairs, 9.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-is.txt.zip">0.3M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Icelandic-Spanish (844,009 sentence pairs, 27.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-is.txt.zip">0.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Icelandic-Estonian (440,685 sentence pairs, 11.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-is.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Icelandic-Finnish (669,770 sentence pairs, 18.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-is.txt.zip">0.7M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Icelandic-French (655,372 sentence pairs, 21.72M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-is.txt.zip">0.7M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Icelandic-Irish (216,559 sentence pairs, 6.72M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-is.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Icelandic-Croatian (116,764 sentence pairs, 4.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-is.txt.zip">0.1M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Icelandic-Hungarian (613,523 sentence pairs, 15.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-is.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Icelandic-Italian (641,803 sentence pairs, 20.85M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-it.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Icelandic-Central Khmer (1,143 sentence pairs, 20.55k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-km.tmx.gz">1.1k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Icelandic-Korean (32,411 sentence pairs, 0.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-ko.tmx.gz">32.4k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Icelandic-Lithuanian (463,565 sentence pairs, 11.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-lt.tmx.gz">0.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Icelandic-Latvian (526,663 sentence pairs, 13.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-lv.tmx.gz">0.5M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Icelandic-Maltese (99,760 sentence pairs, 2.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-mt.tmx.gz">99.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Burmese (233 sentence pairs, 3.60k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-my.tmx.gz">0.2k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Icelandic-BokmÃ¥l, Norwegian (704,927 sentence pairs, 22.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-nb.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Icelandic-Nepali (2,947 sentence pairs, 76.25k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-ne.tmx.gz">2.9k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Icelandic-Dutch (670,346 sentence pairs, 21.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-nl.tmx.gz">0.7M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Icelandic-Norwegian Nynorsk (8,186 sentence pairs, 0.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-nn.tmx.gz">8.2k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Icelandic-Polish (399,690 sentence pairs, 11.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-pl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Icelandic-Pushto (1,653 sentence pairs, 44.59k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-ps.tmx.gz">1.7k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Icelandic-Portuguese (574,900 sentence pairs, 17.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-pt.tmx.gz">0.6M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Icelandic-Romanian (483,315 sentence pairs, 15.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-ro.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Icelandic-Russian (42,472 sentence pairs, 1.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-ru.tmx.gz">42.5k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Icelandic-Sinhala (6,344 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-si.tmx.gz">6.3k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Icelandic-Slovak (563,429 sentence pairs, 15.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Icelandic-Slovenian (372,582 sentence pairs, 10.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Icelandic-Somali (3,065 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-so.tmx.gz">3.1k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Icelandic-Swedish (702,498 sentence pairs, 21.09M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-sv.tmx.gz">0.7M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Icelandic-Swahili (13,530 sentence pairs, 0.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-sw.tmx.gz">13.5k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Icelandic-Tagalog (14,149 sentence pairs, 0.62M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-tl.tmx.gz">14.1k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Icelandic-Ukrainian (298,872 sentence pairs, 8.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Icelandic-Chinese (65,456 sentence pairs, 1.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/is-zh.tmx.gz">65.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=MultiParaCrawl/v9/mono/it.txt.gz">it</a>
</th><td>1</td> <td>1.7G</td> <td>81.7M</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Italian-Bulgarian (2,243,033 sentence pairs, 73.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-it.txt.zip">2.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Czech (6,042,397 sentence pairs, 181.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-it.txt.zip">6.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Danish (5,510,474 sentence pairs, 183.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-it.txt.zip">5.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-German (24,521,908 sentence pairs, 809.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-it.txt.zip">24.5M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Italian-Greek (3,199,329 sentence pairs, 105.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-it.txt.zip">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Spanish (25,212,207 sentence pairs, 882.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-it.txt.zip">25.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Italian-Estonian (1,726,691 sentence pairs, 53.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-it.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Finnish (4,603,721 sentence pairs, 130.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-it.txt.zip">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-French (23,211,105 sentence pairs, 844.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-it.txt.zip">23.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Italian-Irish (391,758 sentence pairs, 14.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-it.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Italian-Croatian (647,543 sentence pairs, 26.85M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-it.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Hungarian (5,110,540 sentence pairs, 153.88M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-it.txt.zip">5.1M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Italian-Icelandic (641,803 sentence pairs, 20.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-it.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Italian-Central Khmer (1,335 sentence pairs, 23.17k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-km.tmx.gz">1.3k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Italian-Korean (455,997 sentence pairs, 13.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-ko.tmx.gz">0.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Italian-Lithuanian (2,369,441 sentence pairs, 69.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-lt.tmx.gz">2.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Italian-Latvian (2,231,620 sentence pairs, 68.62M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-lv.tmx.gz">2.2M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Italian-Maltese (421,996 sentence pairs, 18.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-mt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Burmese (413 sentence pairs, 5.83k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-my.tmx.gz">0.4k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Italian-BokmÃ¥l, Norwegian (3,376,004 sentence pairs, 114.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-nb.tmx.gz">3.4M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Italian-Nepali (4,175 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-ne.tmx.gz">4.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Dutch (11,284,519 sentence pairs, 359.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-nl.tmx.gz">11.3M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Italian-Norwegian Nynorsk (19,459 sentence pairs, 0.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-nn.tmx.gz">19.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Polish (6,562,501 sentence pairs, 207.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-pl.tmx.gz">6.6M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Italian-Pushto (1,970 sentence pairs, 57.51k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-ps.tmx.gz">2.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Portuguese (13,702,962 sentence pairs, 461.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-pt.tmx.gz">13.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Romanian (4,379,480 sentence pairs, 148.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-ro.tmx.gz">4.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Italian-Russian (372,033 sentence pairs, 11.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-ru.tmx.gz">0.4M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Italian-Sinhala (12,653 sentence pairs, 0.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-si.tmx.gz">12.7k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Italian-Slovak (3,559,937 sentence pairs, 106.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-sk.tmx.gz">3.6M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Italian-Slovenian (2,203,495 sentence pairs, 38.96M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-sl.tmx.gz">2.2M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Italian-Somali (3,977 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-so.tmx.gz">4.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Swedish (6,917,506 sentence pairs, 223.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-sv.tmx.gz">6.9M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Italian-Swahili (24,795 sentence pairs, 0.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-sw.tmx.gz">24.8k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Italian-Tagalog (34,536 sentence pairs, 1.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-tl.tmx.gz">34.5k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Italian-Ukrainian (1,550,799 sentence pairs, 43.81M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-uk.tmx.gz">1.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Italian-Chinese (881,785 sentence pairs, 16.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/it-zh.tmx.gz">0.9M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized km plain text' href="download.php?f=MultiParaCrawl/v9/mono/km.txt.gz">km</a>
</th><td>1</td> <td>1.8M</td> <td>59.8k</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Bulgarian (1,051 sentence pairs, 20.92k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-km.txt.zip">1.1k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Czech (1,698 sentence pairs, 26.25k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-km.txt.zip">1.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Danish (1,125 sentence pairs, 22.86k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-km.txt.zip">1.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-German (1,944 sentence pairs, 32.27k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-km.txt.zip">1.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Greek (926 sentence pairs, 18.09k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-km.txt.zip">0.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Central Khmer-Spanish (2,215 sentence pairs, 45.77k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-km.txt.zip">2.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Central Khmer-Estonian (985 sentence pairs, 12.44k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-km.txt.zip">1.0k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Finnish (1,218 sentence pairs, 15.82k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-km.txt.zip">1.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-French (1,562 sentence pairs, 28.52k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-km.txt.zip">1.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Irish (779 sentence pairs, 15.69k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-km.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Croatian (194 sentence pairs, 3.65k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-km.txt.zip">0.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Hungarian (1,886 sentence pairs, 31.92k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-km.txt.zip">1.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Icelandic (1,143 sentence pairs, 20.55k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-km.txt.zip">1.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Italian (1,335 sentence pairs, 23.17k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-km.txt.zip">1.3k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Central Khmer-Korean (456 sentence pairs, 7.58k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-ko.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Lithuanian (1,292 sentence pairs, 16.42k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-lt.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Latvian (1,235 sentence pairs, 16.57k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-lv.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Maltese (437 sentence pairs, 6.49k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-mt.tmx.gz">0.4k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Central Khmer-Burmese (5,419 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-my.tmx.gz">5.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-BokmÃ¥l, Norwegian (759 sentence pairs, 17.35k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-nb.tmx.gz">0.8k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Central Khmer-Nepali (12,384 sentence pairs, 0.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-ne.tmx.gz">12.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Dutch (1,626 sentence pairs, 32.36k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-nl.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Norwegian Nynorsk (7 sentence pairs, 34 words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-nn.tmx.gz">7</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Central Khmer-Polish (863 sentence pairs, 11.52k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-pl.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Central Khmer-Pushto (1,100 sentence pairs, 36.77k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-ps.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Portuguese (1,442 sentence pairs, 25.74k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-pt.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Romanian (1,704 sentence pairs, 35.14k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-ro.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Central Khmer-Russian (2,366 sentence pairs, 58.38k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-ru.tmx.gz">2.4k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Central Khmer-Sinhala (19,762 sentence pairs, 0.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-si.tmx.gz">19.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Slovak (1,130 sentence pairs, 15.07k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-sk.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Central Khmer-Slovenian (883 sentence pairs, 11.58k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-sl.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Somali (189 sentence pairs, 6.83k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-so.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Swedish (1,668 sentence pairs, 31.20k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-sv.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Swahili (905 sentence pairs, 27.35k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-sw.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Tagalog (559 sentence pairs, 17.65k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-tl.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Central Khmer-Ukrainian (3,120 sentence pairs, 71.74k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-uk.tmx.gz">3.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Chinese (495 sentence pairs, 5.14k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/km-zh.tmx.gz">0.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ko plain text' href="download.php?f=MultiParaCrawl/v9/mono/ko.txt.gz">ko</a>
</th><td>1</td> <td>53.4M</td> <td>3.7M</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Korean-Bulgarian (137,023 sentence pairs, 4.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-ko.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Korean-Czech (304,417 sentence pairs, 7.01M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-ko.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Korean-Danish (319,318 sentence pairs, 9.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-ko.txt.zip">0.3M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Korean-German (739,450 sentence pairs, 20.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-ko.txt.zip">0.7M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Korean-Greek (196,420 sentence pairs, 5.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-ko.txt.zip">0.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Korean-Spanish (817,577 sentence pairs, 28.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-ko.txt.zip">0.8M</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Korean-Estonian (84,460 sentence pairs, 2.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-ko.txt.zip">84.5k</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Korean-Finnish (261,355 sentence pairs, 6.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-ko.txt.zip">0.3M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Korean-French (645,305 sentence pairs, 19.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-ko.txt.zip">0.6M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Korean-Irish (18,473 sentence pairs, 0.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-ko.txt.zip">18.5k</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Korean-Croatian (26,696 sentence pairs, 0.96M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-ko.txt.zip">26.7k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Korean-Hungarian (258,876 sentence pairs, 6.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-ko.txt.zip">0.3M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Korean-Icelandic (32,411 sentence pairs, 0.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-ko.txt.zip">32.4k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Korean-Italian (455,997 sentence pairs, 13.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-ko.txt.zip">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Central Khmer (456 sentence pairs, 7.58k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-ko.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Korean-Lithuanian (109,011 sentence pairs, 2.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-lt.tmx.gz">0.1M</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Korean-Latvian (92,644 sentence pairs, 2.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-lv.tmx.gz">92.6k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Korean-Maltese (6,616 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-mt.tmx.gz">6.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Burmese (239 sentence pairs, 4.23k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-my.tmx.gz">0.2k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Korean-BokmÃ¥l, Norwegian (170,432 sentence pairs, 5.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-nb.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Korean-Nepali (1,065 sentence pairs, 27.23k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-ne.tmx.gz">1.1k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Korean-Dutch (424,686 sentence pairs, 11.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-nl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Korean-Norwegian Nynorsk (4,283 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-nn.tmx.gz">4.3k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Korean-Polish (233,789 sentence pairs, 5.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-pl.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Pushto (196 sentence pairs, 3.32k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-ps.tmx.gz">0.2k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Korean-Portuguese (575,307 sentence pairs, 13.85M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-pt.tmx.gz">0.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Korean-Romanian (206,761 sentence pairs, 6.01M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Korean-Russian (71,756 sentence pairs, 2.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-ru.tmx.gz">71.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-Sinhala (1,820 sentence pairs, 38.45k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-si.tmx.gz">1.8k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Korean-Slovak (145,223 sentence pairs, 3.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-sk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Korean-Slovenian (69,425 sentence pairs, 1.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-sl.tmx.gz">69.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-Somali (847 sentence pairs, 40.37k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-so.tmx.gz">0.8k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Korean-Swedish (329,529 sentence pairs, 8.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Korean-Swahili (7,313 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-sw.tmx.gz">7.3k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Korean-Tagalog (37,525 sentence pairs, 1.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-tl.tmx.gz">37.5k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Korean-Ukrainian (150,373 sentence pairs, 3.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-uk.tmx.gz">0.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Korean-Chinese (796,843 sentence pairs, 12.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ko-zh.tmx.gz">0.8M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=MultiParaCrawl/v9/mono/lt.txt.gz">lt</a>
</th><td>1</td> <td>147.5M</td> <td>10.5M</td><td bgcolor="#ceffce"><a rel="nofollow" title='Lithuanian-Bulgarian (1,611,597 sentence pairs, 47.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-lt.txt.zip">1.6M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Lithuanian-Czech (3,151,663 sentence pairs, 82.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-lt.txt.zip">3.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Lithuanian-Danish (2,228,043 sentence pairs, 66.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-lt.txt.zip">2.2M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Lithuanian-German (3,511,847 sentence pairs, 92.97M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-lt.txt.zip">3.5M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Lithuanian-Greek (1,602,892 sentence pairs, 47.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-lt.txt.zip">1.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Lithuanian-Spanish (3,404,227 sentence pairs, 97.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-lt.txt.zip">3.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Lithuanian-Estonian (1,915,127 sentence pairs, 48.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-lt.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Lithuanian-Finnish (2,527,199 sentence pairs, 60.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-lt.txt.zip">2.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Lithuanian-French (2,822,045 sentence pairs, 85.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-lt.txt.zip">2.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Lithuanian-Irish (331,755 sentence pairs, 10.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-lt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Lithuanian-Croatian (424,103 sentence pairs, 16.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-lt.txt.zip">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Hungarian (2,952,420 sentence pairs, 74.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-lt.txt.zip">3.0M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Lithuanian-Icelandic (463,565 sentence pairs, 11.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-lt.txt.zip">0.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Lithuanian-Italian (2,369,441 sentence pairs, 69.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-lt.txt.zip">2.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Lithuanian-Central Khmer (1,292 sentence pairs, 16.42k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-lt.txt.zip">1.3k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Lithuanian-Korean (109,011 sentence pairs, 2.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-lt.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Latvian (3,034,232 sentence pairs, 75.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-lv.tmx.gz">3.0M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Lithuanian-Maltese (464,175 sentence pairs, 16.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Burmese (453 sentence pairs, 5.92k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-my.tmx.gz">0.5k</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Lithuanian-BokmÃ¥l, Norwegian (1,341,523 sentence pairs, 35.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-nb.tmx.gz">1.3M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Lithuanian-Nepali (4,210 sentence pairs, 94.15k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-ne.tmx.gz">4.2k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Lithuanian-Dutch (2,744,811 sentence pairs, 77.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-nl.tmx.gz">2.7M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Lithuanian-Norwegian Nynorsk (14,685 sentence pairs, 0.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-nn.tmx.gz">14.7k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Lithuanian-Polish (2,054,507 sentence pairs, 56.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-pl.tmx.gz">2.1M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Lithuanian-Pushto (2,470 sentence pairs, 61.81k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-ps.tmx.gz">2.5k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Portuguese (2,506,872 sentence pairs, 73.87M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-pt.tmx.gz">2.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Romanian (2,478,441 sentence pairs, 72.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-ro.tmx.gz">2.5M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Russian (133,330 sentence pairs, 3.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Lithuanian-Sinhala (9,451 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-si.tmx.gz">9.5k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Lithuanian-Slovak (2,630,884 sentence pairs, 67.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-sk.tmx.gz">2.6M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Lithuanian-Slovenian (1,728,974 sentence pairs, 48.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-sl.tmx.gz">1.7M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Lithuanian-Somali (2,957 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-so.tmx.gz">3.0k</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Lithuanian-Swedish (2,661,148 sentence pairs, 33.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-sv.tmx.gz">2.7M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Lithuanian-Swahili (18,735 sentence pairs, 0.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-sw.tmx.gz">18.7k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Lithuanian-Tagalog (18,286 sentence pairs, 0.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-tl.tmx.gz">18.3k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Lithuanian-Ukrainian (1,030,640 sentence pairs, 23.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-uk.tmx.gz">1.0M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Lithuanian-Chinese (180,426 sentence pairs, 2.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lt-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=MultiParaCrawl/v9/mono/lv.txt.gz">lv</a>
</th><td>1</td> <td>154.2M</td> <td>10.1M</td><td bgcolor="#ceffce"><a rel="nofollow" title='Latvian-Bulgarian (1,636,172 sentence pairs, 49.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-lv.txt.zip">1.6M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Czech (3,064,776 sentence pairs, 80.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-lv.txt.zip">3.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Latvian-Danish (2,292,375 sentence pairs, 70.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-lv.txt.zip">2.3M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Latvian-German (3,305,761 sentence pairs, 91.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-lv.txt.zip">3.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Latvian-Greek (1,571,830 sentence pairs, 47.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-lv.txt.zip">1.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Latvian-Spanish (3,208,144 sentence pairs, 95.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-lv.txt.zip">3.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Latvian-Estonian (2,011,343 sentence pairs, 51.83M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-lv.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Latvian-Finnish (2,541,884 sentence pairs, 61.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-lv.txt.zip">2.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Latvian-French (2,678,603 sentence pairs, 85.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-lv.txt.zip">2.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Latvian-Irish (371,492 sentence pairs, 12.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-lv.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Latvian-Croatian (446,488 sentence pairs, 17.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-lv.txt.zip">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Latvian-Hungarian (2,828,829 sentence pairs, 73.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-lv.txt.zip">2.8M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Icelandic (526,663 sentence pairs, 13.72M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-lv.txt.zip">0.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Latvian-Italian (2,231,620 sentence pairs, 68.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-lv.txt.zip">2.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latvian-Central Khmer (1,235 sentence pairs, 16.57k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-lv.txt.zip">1.2k</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Latvian-Korean (92,644 sentence pairs, 2.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-lv.txt.zip">92.6k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Latvian-Lithuanian (3,034,232 sentence pairs, 75.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-lv.txt.zip">3.0M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Latvian-Maltese (497,768 sentence pairs, 18.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Burmese (448 sentence pairs, 6.17k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-my.tmx.gz">0.4k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Latvian-BokmÃ¥l, Norwegian (1,379,389 sentence pairs, 21.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-nb.tmx.gz">1.4M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Latvian-Nepali (4,193 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-ne.tmx.gz">4.2k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Dutch (2,591,537 sentence pairs, 76.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-nl.tmx.gz">2.6M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Latvian-Norwegian Nynorsk (10,348 sentence pairs, 0.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-nn.tmx.gz">10.3k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Latvian-Polish (1,908,945 sentence pairs, 54.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-pl.tmx.gz">1.9M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Latvian-Pushto (2,727 sentence pairs, 74.19k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-ps.tmx.gz">2.7k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Latvian-Portuguese (2,323,879 sentence pairs, 70.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-pt.tmx.gz">2.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Latvian-Romanian (2,440,443 sentence pairs, 73.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-ro.tmx.gz">2.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Latvian-Russian (114,383 sentence pairs, 3.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Latvian-Sinhala (9,369 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-si.tmx.gz">9.4k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Latvian-Slovak (2,739,015 sentence pairs, 72.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-sk.tmx.gz">2.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Latvian-Slovenian (1,836,775 sentence pairs, 52.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-sl.tmx.gz">1.8M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Latvian-Somali (1,214 sentence pairs, 53.02k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-so.tmx.gz">1.2k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Latvian-Swedish (2,654,806 sentence pairs, 72.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-sv.tmx.gz">2.7M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Latvian-Swahili (13,014 sentence pairs, 0.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-sw.tmx.gz">13.0k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Latvian-Tagalog (13,780 sentence pairs, 0.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-tl.tmx.gz">13.8k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Latvian-Ukrainian (1,118,180 sentence pairs, 26.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-uk.tmx.gz">1.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Latvian-Chinese (172,860 sentence pairs, 2.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/lv-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=MultiParaCrawl/v9/mono/mt.txt.gz">mt</a>
</th><td>1</td> <td>22.9M</td> <td>1.1M</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Maltese-Bulgarian (347,497 sentence pairs, 14.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-mt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Maltese-Czech (478,263 sentence pairs, 18.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-mt.txt.zip">0.5M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Maltese-Danish (409,004 sentence pairs, 16.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-mt.txt.zip">0.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Maltese-German (498,651 sentence pairs, 19.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-mt.txt.zip">0.5M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Maltese-Greek (369,234 sentence pairs, 15.86M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-mt.txt.zip">0.4M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Maltese-Spanish (488,579 sentence pairs, 20.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-mt.txt.zip">0.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Maltese-Estonian (401,429 sentence pairs, 14.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-mt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#dcffc7"><a rel="nofollow" title='Maltese-Finnish (422,201 sentence pairs, 14.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-mt.txt.zip">0.4M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Maltese-French (472,970 sentence pairs, 21.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-mt.txt.zip">0.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Maltese-Irish (182,106 sentence pairs, 6.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-mt.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Maltese-Croatian (109,283 sentence pairs, 5.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-mt.txt.zip">0.1M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Maltese-Hungarian (466,372 sentence pairs, 17.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-mt.txt.zip">0.5M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Maltese-Icelandic (99,760 sentence pairs, 2.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-mt.txt.zip">99.8k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Maltese-Italian (421,996 sentence pairs, 18.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-mt.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Central Khmer (437 sentence pairs, 6.49k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-mt.txt.zip">0.4k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Maltese-Korean (6,616 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-mt.txt.zip">6.6k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Maltese-Lithuanian (464,175 sentence pairs, 16.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-mt.txt.zip">0.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Maltese-Latvian (497,768 sentence pairs, 18.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-mt.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Burmese (210 sentence pairs, 3.30k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-my.tmx.gz">0.2k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Maltese-BokmÃ¥l, Norwegian (96,457 sentence pairs, 2.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-nb.tmx.gz">96.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Maltese-Nepali (1,513 sentence pairs, 35.38k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-ne.tmx.gz">1.5k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Maltese-Dutch (437,949 sentence pairs, 18.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-nl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Maltese-Norwegian Nynorsk (1,131 sentence pairs, 37.50k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-nn.tmx.gz">1.1k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Maltese-Polish (375,369 sentence pairs, 15.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-pl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Maltese-Pushto (1,011 sentence pairs, 26.72k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-ps.tmx.gz">1.0k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Maltese-Portuguese (430,867 sentence pairs, 18.34M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Maltese-Romanian (456,103 sentence pairs, 18.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-ro.tmx.gz">0.5M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Maltese-Russian (12,322 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-ru.tmx.gz">12.3k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Maltese-Sinhala (2,660 sentence pairs, 51.80k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-si.tmx.gz">2.7k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Maltese-Slovak (482,268 sentence pairs, 18.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-sk.tmx.gz">0.5M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Maltese-Slovenian (419,304 sentence pairs, 16.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Maltese-Somali (300 sentence pairs, 13.61k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-so.tmx.gz">0.3k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Maltese-Swedish (443,091 sentence pairs, 16.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Maltese-Swahili (3,643 sentence pairs, 0.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-sw.tmx.gz">3.6k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Maltese-Tagalog (3,934 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-tl.tmx.gz">3.9k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Maltese-Ukrainian (93,209 sentence pairs, 2.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-uk.tmx.gz">93.2k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Maltese-Chinese (10,585 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/mt-zh.tmx.gz">10.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized my plain text' href="download.php?f=MultiParaCrawl/v9/mono/my.txt.gz">my</a>
</th><td>1</td> <td>0.8M</td> <td>29.7k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Bulgarian (246 sentence pairs, 3.51k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-my.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Czech (582 sentence pairs, 7.97k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-my.txt.zip">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Danish (283 sentence pairs, 5.16k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-my.txt.zip">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-German (680 sentence pairs, 9.10k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-my.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Greek (219 sentence pairs, 2.96k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-my.txt.zip">0.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Spanish (656 sentence pairs, 10.16k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-my.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Estonian (300 sentence pairs, 3.65k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-my.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Finnish (438 sentence pairs, 4.90k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-my.txt.zip">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-French (518 sentence pairs, 8.51k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-my.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Irish (309 sentence pairs, 6.33k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-my.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Croatian (40 sentence pairs, 0.69k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-my.txt.zip">40</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Hungarian (513 sentence pairs, 7.52k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-my.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Icelandic (233 sentence pairs, 3.60k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-my.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Italian (413 sentence pairs, 5.83k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-my.txt.zip">0.4k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Burmese-Central Khmer (5,419 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-my.txt.zip">5.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Korean (239 sentence pairs, 4.23k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-my.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Lithuanian (453 sentence pairs, 5.92k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-my.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Latvian (448 sentence pairs, 6.17k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-my.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Maltese (210 sentence pairs, 3.30k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-my.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-BokmÃ¥l, Norwegian (151 sentence pairs, 2.92k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-nb.tmx.gz">0.2k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Burmese-Nepali (3,291 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-ne.tmx.gz">3.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Dutch (428 sentence pairs, 5.71k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-nl.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Polish (300 sentence pairs, 3.77k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-pl.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Burmese-Pushto (651 sentence pairs, 28.05k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-ps.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Portuguese (429 sentence pairs, 6.41k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-pt.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Romanian (390 sentence pairs, 5.83k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-ro.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Burmese-Russian (1,409 sentence pairs, 37.62k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-ru.tmx.gz">1.4k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Burmese-Sinhala (5,507 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-si.tmx.gz">5.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Slovak (418 sentence pairs, 5.66k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-sk.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Slovenian (287 sentence pairs, 3.60k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-sl.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Somali (53 sentence pairs, 1.64k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-so.tmx.gz">53</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Swedish (414 sentence pairs, 5.62k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-sv.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Swahili (437 sentence pairs, 13.48k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-sw.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Tagalog (333 sentence pairs, 10.91k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-tl.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Burmese-Ukrainian (816 sentence pairs, 14.93k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-uk.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Chinese (239 sentence pairs, 2.46k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/my-zh.tmx.gz">0.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nb plain text' href="download.php?f=MultiParaCrawl/v9/mono/nb.txt.gz">nb</a>
</th><td>1</td> <td>259.1M</td> <td>14.7M</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bulgarian (1,127,563 sentence pairs, 36.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-nb.txt.zip">1.1M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Czech (3,176,519 sentence pairs, 97.88M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-nb.txt.zip">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Danish (5,317,134 sentence pairs, 168.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-nb.txt.zip">5.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-German (6,046,012 sentence pairs, 190.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-nb.txt.zip">6.0M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Greek (1,416,970 sentence pairs, 45.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-nb.txt.zip">1.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Spanish (5,710,667 sentence pairs, 192.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-nb.txt.zip">5.7M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Estonian (989,395 sentence pairs, 28.70M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-nb.txt.zip">1.0M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Finnish (3,348,265 sentence pairs, 94.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-nb.txt.zip">3.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-French (4,271,276 sentence pairs, 148.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-nb.txt.zip">4.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Irish (232,302 sentence pairs, 8.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-nb.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Croatian (378,450 sentence pairs, 14.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-nb.txt.zip">0.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hungarian (2,546,741 sentence pairs, 76.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-nb.txt.zip">2.5M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Icelandic (704,927 sentence pairs, 22.98M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-nb.txt.zip">0.7M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Italian (3,376,004 sentence pairs, 114.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-nb.txt.zip">3.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Central Khmer (759 sentence pairs, 17.35k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-nb.txt.zip">0.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Korean (170,432 sentence pairs, 5.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-nb.txt.zip">0.2M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Lithuanian (1,341,523 sentence pairs, 38.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-nb.txt.zip">1.3M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Latvian (1,379,389 sentence pairs, 38.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-nb.txt.zip">1.4M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Maltese (96,457 sentence pairs, 2.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-nb.txt.zip">96.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Burmese (151 sentence pairs, 2.92k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-nb.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Nepali (2,819 sentence pairs, 88.16k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-ne.tmx.gz">2.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Dutch (4,761,683 sentence pairs, 150.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-nl.tmx.gz">4.8M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Norwegian Nynorsk (46,733 sentence pairs, 1.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-nn.tmx.gz">46.7k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Polish (2,354,850 sentence pairs, 69.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-pl.tmx.gz">2.4M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Pushto (1,255 sentence pairs, 41.50k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-ps.tmx.gz">1.3k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Portuguese (3,789,966 sentence pairs, 124.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-pt.tmx.gz">3.8M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Romanian (2,150,337 sentence pairs, 69.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-ro.tmx.gz">2.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Russian (136,176 sentence pairs, 4.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Sinhala (7,322 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-si.tmx.gz">7.3k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovak (1,923,539 sentence pairs, 58.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-sk.tmx.gz">1.9M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovenian (1,073,819 sentence pairs, 33.73M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-sl.tmx.gz">1.1M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Somali (2,418 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-so.tmx.gz">2.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Swedish (5,324,386 sentence pairs, 167.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-sv.tmx.gz">5.3M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Swahili (13,234 sentence pairs, 0.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-sw.tmx.gz">13.2k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Tagalog (16,183 sentence pairs, 0.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-tl.tmx.gz">16.2k</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Ukrainian (925,356 sentence pairs, 27.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-uk.tmx.gz">0.9M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Chinese (326,264 sentence pairs, 5.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nb-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ne plain text' href="download.php?f=MultiParaCrawl/v9/mono/ne.txt.gz">ne</a>
</th><td>1</td> <td>3.7M</td> <td>86.9k</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Nepali-Bulgarian (2,932 sentence pairs, 89.53k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-ne.txt.zip">2.9k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Nepali-Czech (4,887 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-ne.txt.zip">4.9k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Nepali-Danish (4,170 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-ne.txt.zip">4.2k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Nepali-German (6,224 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-ne.txt.zip">6.2k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Nepali-Greek (2,789 sentence pairs, 79.02k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-ne.txt.zip">2.8k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Nepali-Spanish (6,447 sentence pairs, 0.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-ne.txt.zip">6.4k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Nepali-Estonian (2,990 sentence pairs, 65.80k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-ne.txt.zip">3.0k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Nepali-Finnish (3,646 sentence pairs, 83.75k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-ne.txt.zip">3.6k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Nepali-French (5,128 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-ne.txt.zip">5.1k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Nepali-Irish (4,016 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-ne.txt.zip">4.0k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Nepali-Croatian (812 sentence pairs, 31.10k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-ne.txt.zip">0.8k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Nepali-Hungarian (4,765 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-ne.txt.zip">4.8k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Nepali-Icelandic (2,947 sentence pairs, 76.25k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-ne.txt.zip">2.9k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Nepali-Italian (4,175 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-ne.txt.zip">4.2k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Nepali-Central Khmer (12,384 sentence pairs, 0.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-ne.txt.zip">12.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Nepali-Korean (1,065 sentence pairs, 27.23k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-ne.txt.zip">1.1k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Nepali-Lithuanian (4,210 sentence pairs, 94.15k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-ne.txt.zip">4.2k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Nepali-Latvian (4,193 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-ne.txt.zip">4.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Nepali-Maltese (1,513 sentence pairs, 35.38k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-ne.txt.zip">1.5k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Nepali-Burmese (3,291 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-ne.txt.zip">3.3k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Nepali-BokmÃ¥l, Norwegian (2,819 sentence pairs, 88.16k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-ne.txt.zip">2.8k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Nepali-Dutch (4,543 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-nl.tmx.gz">4.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Nepali-Norwegian Nynorsk (23 sentence pairs, 0.69k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-nn.tmx.gz">23</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Nepali-Polish (2,342 sentence pairs, 58.80k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-pl.tmx.gz">2.3k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Nepali-Pushto (4,064 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-ps.tmx.gz">4.1k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Nepali-Portuguese (5,017 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-pt.tmx.gz">5.0k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Nepali-Romanian (4,146 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-ro.tmx.gz">4.1k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Nepali-Russian (4,140 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-ru.tmx.gz">4.1k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Nepali-Sinhala (34,457 sentence pairs, 1.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-si.tmx.gz">34.5k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Nepali-Slovak (3,740 sentence pairs, 89.52k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-sk.tmx.gz">3.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Nepali-Slovenian (2,840 sentence pairs, 68.33k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-sl.tmx.gz">2.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Nepali-Somali (425 sentence pairs, 20.36k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-so.tmx.gz">0.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Nepali-Swedish (5,379 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-sv.tmx.gz">5.4k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Nepali-Swahili (2,263 sentence pairs, 91.17k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-sw.tmx.gz">2.3k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Nepali-Tagalog (1,404 sentence pairs, 62.92k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-tl.tmx.gz">1.4k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Nepali-Ukrainian (8,961 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-uk.tmx.gz">9.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Nepali-Chinese (1,776 sentence pairs, 32.20k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ne-zh.tmx.gz">1.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=MultiParaCrawl/v9/mono/nl.txt.gz">nl</a>
</th><td>1</td> <td>1.2G</td> <td>72.7M</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Dutch-Bulgarian (2,362,130 sentence pairs, 77.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-nl.txt.zip">2.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Czech (7,232,483 sentence pairs, 196.86M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-nl.txt.zip">7.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Danish (7,987,473 sentence pairs, 252.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-nl.txt.zip">8.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-German (24,054,475 sentence pairs, 695.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-nl.txt.zip">24.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Dutch-Greek (3,579,941 sentence pairs, 109.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-nl.txt.zip">3.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Spanish (19,755,697 sentence pairs, 643.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-nl.txt.zip">19.8M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Dutch-Estonian (1,932,017 sentence pairs, 57.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-nl.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Finnish (6,225,414 sentence pairs, 139.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-nl.txt.zip">6.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-French (17,255,814 sentence pairs, 570.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-nl.txt.zip">17.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Dutch-Irish (352,967 sentence pairs, 12.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-nl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Dutch-Croatian (583,818 sentence pairs, 24.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-nl.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Hungarian (5,726,705 sentence pairs, 165.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-nl.txt.zip">5.7M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Dutch-Icelandic (670,346 sentence pairs, 21.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-nl.txt.zip">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Italian (11,284,519 sentence pairs, 359.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-nl.txt.zip">11.3M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Dutch-Central Khmer (1,626 sentence pairs, 32.36k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-nl.txt.zip">1.6k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Dutch-Korean (424,686 sentence pairs, 11.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-nl.txt.zip">0.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Dutch-Lithuanian (2,744,811 sentence pairs, 77.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-nl.txt.zip">2.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Dutch-Latvian (2,591,537 sentence pairs, 76.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-nl.txt.zip">2.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Maltese (437,949 sentence pairs, 16.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-nl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Burmese (428 sentence pairs, 5.71k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-nl.txt.zip">0.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-BokmÃ¥l, Norwegian (4,761,683 sentence pairs, 154.83M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-nl.txt.zip">4.8M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Dutch-Nepali (4,543 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-nl.txt.zip">4.5k</a>
</td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Dutch-Norwegian Nynorsk (23,432 sentence pairs, 0.83M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-nn.tmx.gz">23.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Polish (5,704,907 sentence pairs, 160.96M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-pl.tmx.gz">5.7M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Dutch-Pushto (2,175 sentence pairs, 57.58k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-ps.tmx.gz">2.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Portuguese (10,367,182 sentence pairs, 325.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-pt.tmx.gz">10.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Romanian (4,745,126 sentence pairs, 152.83M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-ro.tmx.gz">4.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Dutch-Russian (356,542 sentence pairs, 10.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-ru.tmx.gz">0.4M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Dutch-Sinhala (14,000 sentence pairs, 0.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-si.tmx.gz">14.0k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Dutch-Slovak (3,991,065 sentence pairs, 114.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-sk.tmx.gz">4.0M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Dutch-Slovenian (2,241,468 sentence pairs, 71.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-sl.tmx.gz">2.2M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Dutch-Somali (4,518 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-so.tmx.gz">4.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Swedish (10,033,444 sentence pairs, 285.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-sv.tmx.gz">10.0M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Dutch-Swahili (25,425 sentence pairs, 1.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-sw.tmx.gz">25.4k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Dutch-Tagalog (29,855 sentence pairs, 1.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-tl.tmx.gz">29.9k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Dutch-Ukrainian (1,582,747 sentence pairs, 41.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-uk.tmx.gz">1.6M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Dutch-Chinese (872,618 sentence pairs, 15.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nl-zh.tmx.gz">0.9M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nn plain text' href="download.php?f=MultiParaCrawl/v9/mono/nn.txt.gz">nn</a>
</th><td>1</td> <td>5.4M</td> <td>0.3M</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Norwegian Nynorsk-Bulgarian (12,972 sentence pairs, 0.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-nn.txt.zip">13.0k</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Norwegian Nynorsk-Czech (20,724 sentence pairs, 0.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-nn.txt.zip">20.7k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Norwegian Nynorsk-Danish (14,976 sentence pairs, 0.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-nn.txt.zip">15.0k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Norwegian Nynorsk-German (35,325 sentence pairs, 1.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-nn.txt.zip">35.3k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Norwegian Nynorsk-Greek (17,339 sentence pairs, 0.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-nn.txt.zip">17.3k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Norwegian Nynorsk-Spanish (40,093 sentence pairs, 1.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-nn.txt.zip">40.1k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Norwegian Nynorsk-Estonian (9,382 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-nn.txt.zip">9.4k</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Norwegian Nynorsk-Finnish (18,247 sentence pairs, 0.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-nn.txt.zip">18.2k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Norwegian Nynorsk-French (27,948 sentence pairs, 1.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-nn.txt.zip">27.9k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Norwegian Nynorsk-Irish (2,500 sentence pairs, 91.76k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-nn.txt.zip">2.5k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Norwegian Nynorsk-Croatian (2,827 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-nn.txt.zip">2.8k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Norwegian Nynorsk-Hungarian (19,682 sentence pairs, 0.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-nn.txt.zip">19.7k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Norwegian Nynorsk-Icelandic (8,186 sentence pairs, 0.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-nn.txt.zip">8.2k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Norwegian Nynorsk-Italian (19,459 sentence pairs, 0.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-nn.txt.zip">19.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norwegian Nynorsk-Central Khmer (7 sentence pairs, 34 words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-nn.txt.zip">7</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Norwegian Nynorsk-Korean (4,283 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-nn.txt.zip">4.3k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Norwegian Nynorsk-Lithuanian (14,685 sentence pairs, 0.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-nn.txt.zip">14.7k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Norwegian Nynorsk-Latvian (10,348 sentence pairs, 0.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-nn.txt.zip">10.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Norwegian Nynorsk-Maltese (1,131 sentence pairs, 37.50k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-nn.txt.zip">1.1k</a>
</td><td></td><td bgcolor="#ffffe4"><a rel="nofollow" title='Norwegian Nynorsk-BokmÃ¥l, Norwegian (46,733 sentence pairs, 1.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-nn.txt.zip">46.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norwegian Nynorsk-Nepali (23 sentence pairs, 0.69k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-nn.txt.zip">23</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Norwegian Nynorsk-Dutch (23,432 sentence pairs, 0.83M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-nn.txt.zip">23.4k</a>
</td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Norwegian Nynorsk-Polish (8,710 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-pl.tmx.gz">8.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norwegian Nynorsk-Pushto (2 sentence pairs, 6 words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-ps.tmx.gz">2</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Norwegian Nynorsk-Portuguese (22,671 sentence pairs, 0.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-pt.tmx.gz">22.7k</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Norwegian Nynorsk-Romanian (20,322 sentence pairs, 0.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-ro.tmx.gz">20.3k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Norwegian Nynorsk-Russian (4,497 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-ru.tmx.gz">4.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norwegian Nynorsk-Sinhala (136 sentence pairs, 3.68k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-si.tmx.gz">0.1k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Norwegian Nynorsk-Slovak (16,948 sentence pairs, 0.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-sk.tmx.gz">16.9k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Norwegian Nynorsk-Slovenian (7,578 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-sl.tmx.gz">7.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Norwegian Nynorsk-Somali (864 sentence pairs, 52.03k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-so.tmx.gz">0.9k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Norwegian Nynorsk-Swedish (19,898 sentence pairs, 0.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-sv.tmx.gz">19.9k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Norwegian Nynorsk-Swahili (2,897 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-sw.tmx.gz">2.9k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Norwegian Nynorsk-Tagalog (2,946 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-tl.tmx.gz">2.9k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Norwegian Nynorsk-Ukrainian (14,043 sentence pairs, 0.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-uk.tmx.gz">14.0k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Norwegian Nynorsk-Chinese (9,194 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/nn-zh.tmx.gz">9.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=MultiParaCrawl/v9/mono/pl.txt.gz">pl</a>
</th><td>1</td> <td>543.3M</td> <td>33.7M</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Polish-Bulgarian (1,759,010 sentence pairs, 53.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-pl.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Czech (5,650,761 sentence pairs, 143.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-pl.txt.zip">5.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Polish-Danish (3,699,914 sentence pairs, 109.72M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-pl.txt.zip">3.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-German (10,340,354 sentence pairs, 306.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-pl.txt.zip">10.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Polish-Greek (2,119,316 sentence pairs, 63.05M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-pl.txt.zip">2.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Spanish (9,376,497 sentence pairs, 298.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-pl.txt.zip">9.4M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Polish-Estonian (1,354,901 sentence pairs, 39.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-pl.txt.zip">1.4M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Polish-Finnish (3,230,496 sentence pairs, 80.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-pl.txt.zip">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-French (8,220,994 sentence pairs, 265.97M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-pl.txt.zip">8.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Polish-Irish (288,023 sentence pairs, 9.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-pl.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Polish-Croatian (443,983 sentence pairs, 18.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-pl.txt.zip">0.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Polish-Hungarian (4,203,291 sentence pairs, 108.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-pl.txt.zip">4.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Polish-Icelandic (399,690 sentence pairs, 11.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-pl.txt.zip">0.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Italian (6,562,501 sentence pairs, 207.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-pl.txt.zip">6.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Central Khmer (863 sentence pairs, 11.52k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-pl.txt.zip">0.9k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Polish-Korean (233,789 sentence pairs, 5.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-pl.txt.zip">0.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Polish-Lithuanian (2,054,507 sentence pairs, 56.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-pl.txt.zip">2.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Polish-Latvian (1,908,945 sentence pairs, 54.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-pl.txt.zip">1.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Maltese (375,369 sentence pairs, 15.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-pl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Burmese (300 sentence pairs, 3.77k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-pl.txt.zip">0.3k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Polish-BokmÃ¥l, Norwegian (2,354,850 sentence pairs, 69.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-pl.txt.zip">2.4M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Polish-Nepali (2,342 sentence pairs, 58.80k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-pl.txt.zip">2.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Dutch (5,704,907 sentence pairs, 160.96M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-pl.txt.zip">5.7M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Polish-Norwegian Nynorsk (8,710 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-pl.txt.zip">8.7k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Polish-Pushto (1,668 sentence pairs, 46.08k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-ps.tmx.gz">1.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Portuguese (6,499,907 sentence pairs, 187.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-pt.tmx.gz">6.5M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Polish-Romanian (3,389,171 sentence pairs, 101.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-ro.tmx.gz">3.4M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Polish-Russian (199,505 sentence pairs, 5.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Polish-Sinhala (5,195 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-si.tmx.gz">5.2k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Polish-Slovak (3,481,937 sentence pairs, 88.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-sk.tmx.gz">3.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Polish-Slovenian (1,708,649 sentence pairs, 51.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-sl.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Polish-Somali (707 sentence pairs, 32.19k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-so.tmx.gz">0.7k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Polish-Swedish (4,656,730 sentence pairs, 123.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-sv.tmx.gz">4.7M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Polish-Swahili (10,414 sentence pairs, 0.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-sw.tmx.gz">10.4k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Polish-Tagalog (13,675 sentence pairs, 0.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-tl.tmx.gz">13.7k</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Polish-Ukrainian (1,476,823 sentence pairs, 36.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-uk.tmx.gz">1.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Polish-Chinese (431,940 sentence pairs, 6.62M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pl-zh.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ps plain text' href="download.php?f=MultiParaCrawl/v9/mono/ps.txt.gz">ps</a>
</th><td>1</td> <td>0.8M</td> <td>25.8k</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Pushto-Bulgarian (1,378 sentence pairs, 38.11k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-ps.txt.zip">1.4k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Pushto-Czech (3,064 sentence pairs, 79.95k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-ps.txt.zip">3.1k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Danish (2,090 sentence pairs, 65.62k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-ps.txt.zip">2.1k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Pushto-German (3,096 sentence pairs, 75.08k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-ps.txt.zip">3.1k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Pushto-Greek (1,581 sentence pairs, 43.56k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-ps.txt.zip">1.6k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Pushto-Spanish (2,933 sentence pairs, 91.27k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-ps.txt.zip">2.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Estonian (1,873 sentence pairs, 45.39k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-ps.txt.zip">1.9k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Finnish (1,959 sentence pairs, 45.30k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-ps.txt.zip">2.0k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Pushto-French (2,662 sentence pairs, 87.36k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-ps.txt.zip">2.7k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Pushto-Irish (1,769 sentence pairs, 61.63k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-ps.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Pushto-Croatian (447 sentence pairs, 18.55k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-ps.txt.zip">0.4k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Hungarian (2,397 sentence pairs, 62.80k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-ps.txt.zip">2.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Icelandic (1,653 sentence pairs, 44.59k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-ps.txt.zip">1.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Pushto-Italian (1,970 sentence pairs, 57.51k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-ps.txt.zip">2.0k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Pushto-Central Khmer (1,100 sentence pairs, 36.77k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-ps.txt.zip">1.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Pushto-Korean (196 sentence pairs, 3.32k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-ps.txt.zip">0.2k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Pushto-Lithuanian (2,470 sentence pairs, 61.81k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-ps.txt.zip">2.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Pushto-Latvian (2,727 sentence pairs, 74.19k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-ps.txt.zip">2.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Pushto-Maltese (1,011 sentence pairs, 26.72k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-ps.txt.zip">1.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Pushto-Burmese (651 sentence pairs, 28.05k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-ps.txt.zip">0.7k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Pushto-BokmÃ¥l, Norwegian (1,255 sentence pairs, 41.50k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-ps.txt.zip">1.3k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Pushto-Nepali (4,064 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-ps.txt.zip">4.1k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Pushto-Dutch (2,175 sentence pairs, 57.58k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-ps.txt.zip">2.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Pushto-Norwegian Nynorsk (2 sentence pairs, 6 words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-ps.txt.zip">2</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Polish (1,668 sentence pairs, 46.08k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-ps.txt.zip">1.7k</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Portuguese (2,231 sentence pairs, 66.72k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-pt.tmx.gz">2.2k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Romanian (2,184 sentence pairs, 63.30k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-ro.tmx.gz">2.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Pushto-Russian (551 sentence pairs, 16.38k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-ru.tmx.gz">0.6k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Pushto-Sinhala (6,594 sentence pairs, 0.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-si.tmx.gz">6.6k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Slovak (2,381 sentence pairs, 62.80k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-sk.tmx.gz">2.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Slovenian (1,847 sentence pairs, 48.21k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-sl.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Pushto-Somali (65 sentence pairs, 3.03k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-so.tmx.gz">65</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Pushto-Swedish (2,070 sentence pairs, 53.56k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-sv.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Pushto-Swahili (712 sentence pairs, 29.00k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-sw.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Pushto-Tagalog (447 sentence pairs, 17.73k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-tl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Pushto-Ukrainian (3,186 sentence pairs, 83.49k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-uk.tmx.gz">3.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Pushto-Chinese (190 sentence pairs, 2.10k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ps-zh.tmx.gz">0.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=MultiParaCrawl/v9/mono/pt.txt.gz">pt</a>
</th><td>1</td> <td>1.3G</td> <td>70.0M</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Portuguese-Bulgarian (2,591,164 sentence pairs, 87.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-pt.txt.zip">2.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Czech (6,442,997 sentence pairs, 185.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-pt.txt.zip">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Danish (6,077,467 sentence pairs, 188.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-pt.txt.zip">6.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-German (19,295,696 sentence pairs, 603.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-pt.txt.zip">19.3M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Portuguese-Greek (3,274,696 sentence pairs, 106.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-pt.txt.zip">3.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (27,397,745 sentence pairs, 930.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-pt.txt.zip">27.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Portuguese-Estonian (1,674,718 sentence pairs, 43.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-pt.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Finnish (4,815,231 sentence pairs, 132.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-pt.txt.zip">4.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-French (18,894,602 sentence pairs, 659.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-pt.txt.zip">18.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Portuguese-Irish (394,854 sentence pairs, 14.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-pt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Portuguese-Croatian (535,063 sentence pairs, 23.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-pt.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Hungarian (5,109,996 sentence pairs, 149.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-pt.txt.zip">5.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Portuguese-Icelandic (574,900 sentence pairs, 18.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-pt.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Italian (13,702,962 sentence pairs, 461.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-pt.txt.zip">13.7M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Portuguese-Central Khmer (1,442 sentence pairs, 25.74k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-pt.txt.zip">1.4k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Korean (575,307 sentence pairs, 16.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-pt.txt.zip">0.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Portuguese-Lithuanian (2,506,872 sentence pairs, 73.87M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-pt.txt.zip">2.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-Latvian (2,323,879 sentence pairs, 70.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-pt.txt.zip">2.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Portuguese-Maltese (430,867 sentence pairs, 18.34M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-pt.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Burmese (429 sentence pairs, 6.41k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-pt.txt.zip">0.4k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Portuguese-BokmÃ¥l, Norwegian (3,789,966 sentence pairs, 124.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-pt.txt.zip">3.8M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Portuguese-Nepali (5,017 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-pt.txt.zip">5.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (10,367,182 sentence pairs, 325.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-pt.txt.zip">10.4M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Portuguese-Norwegian Nynorsk (22,671 sentence pairs, 0.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-pt.txt.zip">22.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Polish (6,499,907 sentence pairs, 187.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-pt.txt.zip">6.5M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Portuguese-Pushto (2,231 sentence pairs, 66.72k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-pt.txt.zip">2.2k</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Romanian (4,759,080 sentence pairs, 157.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-ro.tmx.gz">4.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Portuguese-Russian (389,072 sentence pairs, 12.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-ru.tmx.gz">0.4M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Portuguese-Sinhala (13,936 sentence pairs, 0.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-si.tmx.gz">13.9k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Portuguese-Slovak (3,611,905 sentence pairs, 104.07M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-sk.tmx.gz">3.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-Slovenian (2,030,874 sentence pairs, 65.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-sl.tmx.gz">2.0M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Portuguese-Somali (4,222 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-so.tmx.gz">4.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Swedish (7,273,833 sentence pairs, 215.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-sv.tmx.gz">7.3M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Portuguese-Swahili (27,775 sentence pairs, 1.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-sw.tmx.gz">27.8k</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Portuguese-Tagalog (47,267 sentence pairs, 2.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-tl.tmx.gz">47.3k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Portuguese-Ukrainian (1,792,445 sentence pairs, 51.89M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-uk.tmx.gz">1.8M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Portuguese-Chinese (1,124,765 sentence pairs, 21.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/pt-zh.tmx.gz">1.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=MultiParaCrawl/v9/mono/ro.txt.gz">ro</a>
</th><td>1</td> <td>357.2M</td> <td>19.2M</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Romanian-Bulgarian (2,636,953 sentence pairs, 87.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-ro.txt.zip">2.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Czech (5,111,599 sentence pairs, 145.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-ro.txt.zip">5.1M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Romanian-Danish (3,647,642 sentence pairs, 123.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-ro.txt.zip">3.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-German (6,706,710 sentence pairs, 210.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-ro.txt.zip">6.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Romanian-Greek (2,361,258 sentence pairs, 79.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-ro.txt.zip">2.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Spanish (7,172,676 sentence pairs, 241.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-ro.txt.zip">7.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Romanian-Estonian (1,664,069 sentence pairs, 51.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-ro.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Romanian-Finnish (3,435,209 sentence pairs, 96.88M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-ro.txt.zip">3.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-French (5,466,438 sentence pairs, 189.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-ro.txt.zip">5.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Irish (341,460 sentence pairs, 12.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Romanian-Croatian (607,459 sentence pairs, 24.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-ro.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Hungarian (4,779,775 sentence pairs, 139.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-ro.txt.zip">4.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Romanian-Icelandic (483,315 sentence pairs, 15.70M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-ro.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Italian (4,379,480 sentence pairs, 148.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-ro.txt.zip">4.4M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Romanian-Central Khmer (1,704 sentence pairs, 35.14k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-ro.txt.zip">1.7k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Romanian-Korean (206,761 sentence pairs, 6.01M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-ro.txt.zip">0.2M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Romanian-Lithuanian (2,478,441 sentence pairs, 72.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-ro.txt.zip">2.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Romanian-Latvian (2,440,443 sentence pairs, 73.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-ro.txt.zip">2.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Romanian-Maltese (456,103 sentence pairs, 18.98M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-ro.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Burmese (390 sentence pairs, 5.83k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-ro.txt.zip">0.4k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Romanian-BokmÃ¥l, Norwegian (2,150,337 sentence pairs, 69.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-ro.txt.zip">2.2M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Romanian-Nepali (4,146 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-ro.txt.zip">4.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Dutch (4,745,126 sentence pairs, 152.83M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-ro.txt.zip">4.7M</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Romanian-Norwegian Nynorsk (20,322 sentence pairs, 0.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-ro.txt.zip">20.3k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Romanian-Polish (3,389,171 sentence pairs, 101.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-ro.txt.zip">3.4M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Romanian-Pushto (2,184 sentence pairs, 63.30k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-ro.txt.zip">2.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Portuguese (4,759,080 sentence pairs, 157.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-ro.txt.zip">4.8M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Romanian-Russian (250,456 sentence pairs, 7.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ro-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#fff5ef"><a rel="nofollow" title='Romanian-Sinhala (14,180 sentence pairs, 0.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ro-si.tmx.gz">14.2k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Romanian-Slovak (3,692,787 sentence pairs, 106.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ro-sk.tmx.gz">3.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Romanian-Slovenian (2,279,093 sentence pairs, 72.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ro-sl.tmx.gz">2.3M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Romanian-Somali (5,458 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ro-so.tmx.gz">5.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Swedish (4,154,538 sentence pairs, 129.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ro-sv.tmx.gz">4.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Romanian-Swahili (26,933 sentence pairs, 1.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ro-sw.tmx.gz">26.9k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Romanian-Tagalog (33,683 sentence pairs, 1.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ro-tl.tmx.gz">33.7k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Romanian-Ukrainian (1,744,291 sentence pairs, 48.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ro-uk.tmx.gz">1.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Romanian-Chinese (407,310 sentence pairs, 7.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ro-zh.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=MultiParaCrawl/v9/mono/ru.txt.gz">ru</a>
</th><td>1</td> <td>91.0M</td> <td>5.5M</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Russian-Bulgarian (154,677 sentence pairs, 4.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-ru.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Russian-Czech (274,255 sentence pairs, 7.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-ru.txt.zip">0.3M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Russian-Danish (200,670 sentence pairs, 6.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-ru.txt.zip">0.2M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Russian-German (720,320 sentence pairs, 21.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-ru.txt.zip">0.7M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Russian-Greek (176,461 sentence pairs, 5.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-ru.txt.zip">0.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Russian-Spanish (696,969 sentence pairs, 12.83M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-ru.txt.zip">0.7M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Russian-Estonian (101,234 sentence pairs, 2.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-ru.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Russian-Finnish (230,501 sentence pairs, 6.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-ru.txt.zip">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Russian-French (550,318 sentence pairs, 18.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-ru.txt.zip">0.6M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Russian-Irish (24,478 sentence pairs, 0.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-ru.txt.zip">24.5k</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Russian-Croatian (30,006 sentence pairs, 1.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-ru.txt.zip">30.0k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Russian-Hungarian (245,152 sentence pairs, 7.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-ru.txt.zip">0.2M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Russian-Icelandic (42,472 sentence pairs, 1.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-ru.txt.zip">42.5k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Russian-Italian (372,033 sentence pairs, 11.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-ru.txt.zip">0.4M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Russian-Central Khmer (2,366 sentence pairs, 58.38k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-ru.txt.zip">2.4k</a>
</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Russian-Korean (71,756 sentence pairs, 2.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-ru.txt.zip">71.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Russian-Lithuanian (133,330 sentence pairs, 3.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-ru.txt.zip">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Russian-Latvian (114,383 sentence pairs, 3.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-ru.txt.zip">0.1M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Russian-Maltese (12,322 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-ru.txt.zip">12.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Russian-Burmese (1,409 sentence pairs, 37.62k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-ru.txt.zip">1.4k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Russian-BokmÃ¥l, Norwegian (136,176 sentence pairs, 4.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-ru.txt.zip">0.1M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Russian-Nepali (4,140 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-ru.txt.zip">4.1k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Russian-Dutch (356,542 sentence pairs, 10.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-ru.txt.zip">0.4M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Russian-Norwegian Nynorsk (4,497 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-ru.txt.zip">4.5k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Russian-Polish (199,505 sentence pairs, 5.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-ru.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Russian-Pushto (551 sentence pairs, 16.38k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-ru.txt.zip">0.6k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Russian-Portuguese (389,072 sentence pairs, 12.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-ru.txt.zip">0.4M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Russian-Romanian (250,456 sentence pairs, 7.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ro-ru.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffeeea"><a rel="nofollow" title='Russian-Sinhala (10,028 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ru-si.tmx.gz">10.0k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Russian-Slovak (125,076 sentence pairs, 3.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ru-sk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Russian-Slovenian (60,450 sentence pairs, 1.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ru-sl.tmx.gz">60.5k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Russian-Somali (1,725 sentence pairs, 96.10k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ru-so.tmx.gz">1.7k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Russian-Swedish (292,539 sentence pairs, 8.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ru-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Russian-Swahili (19,975 sentence pairs, 0.79M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ru-sw.tmx.gz">20.0k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Russian-Tagalog (25,856 sentence pairs, 1.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ru-tl.tmx.gz">25.9k</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Russian-Ukrainian (290,212 sentence pairs, 8.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ru-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Russian-Chinese (105,656 sentence pairs, 1.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/ru-zh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized si plain text' href="download.php?f=MultiParaCrawl/v9/mono/si.txt.gz">si</a>
</th><td>1</td> <td>7.0M</td> <td>0.2M</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Sinhala-Bulgarian (11,658 sentence pairs, 0.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-si.txt.zip">11.7k</a>
</td><td></td><td bgcolor="#fff3ed"><a rel="nofollow" title='Sinhala-Czech (15,086 sentence pairs, 0.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-si.txt.zip">15.1k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Sinhala-Danish (9,702 sentence pairs, 0.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-si.txt.zip">9.7k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Sinhala-German (19,750 sentence pairs, 0.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-si.txt.zip">19.8k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Sinhala-Greek (9,728 sentence pairs, 0.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-si.txt.zip">9.7k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Sinhala-Spanish (20,738 sentence pairs, 0.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-si.txt.zip">20.7k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Sinhala-Estonian (5,983 sentence pairs, 0.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-si.txt.zip">6.0k</a>
</td><td></td><td bgcolor="#ffeae7"><a rel="nofollow" title='Sinhala-Finnish (10,406 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-si.txt.zip">10.4k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Sinhala-French (18,145 sentence pairs, 0.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-si.txt.zip">18.1k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Sinhala-Irish (4,891 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-si.txt.zip">4.9k</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Sinhala-Croatian (2,582 sentence pairs, 0.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-si.txt.zip">2.6k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Sinhala-Hungarian (15,108 sentence pairs, 0.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-si.txt.zip">15.1k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Sinhala-Icelandic (6,344 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-si.txt.zip">6.3k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Sinhala-Italian (12,653 sentence pairs, 0.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-si.txt.zip">12.7k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Sinhala-Central Khmer (19,762 sentence pairs, 0.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-si.txt.zip">19.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Sinhala-Korean (1,820 sentence pairs, 38.45k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-si.txt.zip">1.8k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Sinhala-Lithuanian (9,451 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-si.txt.zip">9.5k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Sinhala-Latvian (9,369 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-si.txt.zip">9.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Sinhala-Maltese (2,660 sentence pairs, 51.80k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-si.txt.zip">2.7k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Burmese (5,507 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-si.txt.zip">5.5k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Sinhala-BokmÃ¥l, Norwegian (7,322 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-si.txt.zip">7.3k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Sinhala-Nepali (34,457 sentence pairs, 1.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-si.txt.zip">34.5k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Sinhala-Dutch (14,000 sentence pairs, 0.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-si.txt.zip">14.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Sinhala-Norwegian Nynorsk (136 sentence pairs, 3.68k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-si.txt.zip">0.1k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Sinhala-Polish (5,195 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-si.txt.zip">5.2k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Sinhala-Pushto (6,594 sentence pairs, 0.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-si.txt.zip">6.6k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Sinhala-Portuguese (13,936 sentence pairs, 0.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-si.txt.zip">13.9k</a>
</td><td bgcolor="#fff5ef"><a rel="nofollow" title='Sinhala-Romanian (14,180 sentence pairs, 0.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ro-si.txt.zip">14.2k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Sinhala-Russian (10,028 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ru-si.txt.zip">10.0k</a>
</td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Slovak (8,350 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/si-sk.tmx.gz">8.3k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Sinhala-Slovenian (6,379 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/si-sl.tmx.gz">6.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Sinhala-Somali (440 sentence pairs, 16.63k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/si-so.tmx.gz">0.4k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Sinhala-Swedish (12,854 sentence pairs, 0.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/si-sv.tmx.gz">12.9k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Sinhala-Swahili (5,255 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/si-sw.tmx.gz">5.3k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Sinhala-Tagalog (3,690 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/si-tl.tmx.gz">3.7k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Sinhala-Ukrainian (30,182 sentence pairs, 0.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/si-uk.tmx.gz">30.2k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Sinhala-Chinese (5,779 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/si-zh.tmx.gz">5.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sk plain text' href="download.php?f=MultiParaCrawl/v9/mono/sk.txt.gz">sk</a>
</th><td>1</td> <td>228.0M</td> <td>15.9M</td><td bgcolor="#caffca"><a rel="nofollow" title='Slovak-Bulgarian (2,267,858 sentence pairs, 65.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-sk.txt.zip">2.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Czech (7,072,952 sentence pairs, 172.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-sk.txt.zip">7.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Slovak-Danish (3,090,809 sentence pairs, 94.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-sk.txt.zip">3.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-German (6,077,711 sentence pairs, 167.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-sk.txt.zip">6.1M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovak-Greek (2,053,161 sentence pairs, 60.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-sk.txt.zip">2.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Spanish (5,312,560 sentence pairs, 151.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-sk.txt.zip">5.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovak-Estonian (1,730,935 sentence pairs, 46.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-sk.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovak-Finnish (3,354,663 sentence pairs, 80.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-sk.txt.zip">3.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-French (4,221,660 sentence pairs, 129.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-sk.txt.zip">4.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Slovak-Irish (359,339 sentence pairs, 11.88M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-sk.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Slovak-Croatian (591,535 sentence pairs, 23.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-sk.txt.zip">0.6M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Slovak-Hungarian (5,090,698 sentence pairs, 124.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-sk.txt.zip">5.1M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Icelandic (563,429 sentence pairs, 15.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-sk.txt.zip">0.6M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Slovak-Italian (3,559,937 sentence pairs, 106.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-sk.txt.zip">3.6M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovak-Central Khmer (1,130 sentence pairs, 15.07k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-sk.txt.zip">1.1k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Slovak-Korean (145,223 sentence pairs, 3.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-sk.txt.zip">0.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovak-Lithuanian (2,630,884 sentence pairs, 67.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-sk.txt.zip">2.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovak-Latvian (2,739,015 sentence pairs, 72.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-sk.txt.zip">2.7M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Slovak-Maltese (482,268 sentence pairs, 18.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-sk.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Burmese (418 sentence pairs, 5.66k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-sk.txt.zip">0.4k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovak-BokmÃ¥l, Norwegian (1,923,539 sentence pairs, 58.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-sk.txt.zip">1.9M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Slovak-Nepali (3,740 sentence pairs, 89.52k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-sk.txt.zip">3.7k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovak-Dutch (3,991,065 sentence pairs, 114.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-sk.txt.zip">4.0M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Slovak-Norwegian Nynorsk (16,948 sentence pairs, 0.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-sk.txt.zip">16.9k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovak-Polish (3,481,937 sentence pairs, 88.98M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-sk.txt.zip">3.5M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Slovak-Pushto (2,381 sentence pairs, 62.80k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-sk.txt.zip">2.4k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Slovak-Portuguese (3,611,905 sentence pairs, 104.07M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-sk.txt.zip">3.6M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Slovak-Romanian (3,692,787 sentence pairs, 106.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ro-sk.txt.zip">3.7M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Slovak-Russian (125,076 sentence pairs, 3.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ru-sk.txt.zip">0.1M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Slovak-Sinhala (8,350 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/si-sk.txt.zip">8.3k</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovak-Slovenian (2,475,966 sentence pairs, 70.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sk-sl.tmx.gz">2.5M</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Slovak-Somali (3,088 sentence pairs, 0.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sk-so.tmx.gz">3.1k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Slovak-Swedish (3,788,094 sentence pairs, 103.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sk-sv.tmx.gz">3.8M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Slovak-Swahili (19,676 sentence pairs, 0.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sk-sw.tmx.gz">19.7k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Slovak-Tagalog (21,350 sentence pairs, 0.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sk-tl.tmx.gz">21.4k</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Slovak-Ukrainian (1,583,884 sentence pairs, 37.09M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sk-uk.tmx.gz">1.6M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Slovak-Chinese (277,000 sentence pairs, 3.97M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sk-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=MultiParaCrawl/v9/mono/sl.txt.gz">sl</a>
</th><td>1</td> <td>126.7M</td> <td>7.7M</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-Bulgarian (1,488,489 sentence pairs, 49.05M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-sl.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovenian-Czech (2,723,954 sentence pairs, 77.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-sl.txt.zip">2.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovenian-Danish (1,816,119 sentence pairs, 60.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-sl.txt.zip">1.8M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Slovenian-German (3,229,382 sentence pairs, 96.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-sl.txt.zip">3.2M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Slovenian-Greek (1,194,192 sentence pairs, 39.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-sl.txt.zip">1.2M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovenian-Spanish (2,836,177 sentence pairs, 91.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-sl.txt.zip">2.8M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Slovenian-Estonian (1,393,918 sentence pairs, 39.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-sl.txt.zip">1.4M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovenian-Finnish (1,881,379 sentence pairs, 50.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-sl.txt.zip">1.9M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovenian-French (2,461,269 sentence pairs, 83.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-sl.txt.zip">2.5M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Slovenian-Irish (285,427 sentence pairs, 9.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-sl.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Slovenian-Croatian (524,414 sentence pairs, 21.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-sl.txt.zip">0.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovenian-Hungarian (2,409,482 sentence pairs, 68.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-sl.txt.zip">2.4M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Slovenian-Icelandic (372,582 sentence pairs, 10.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-sl.txt.zip">0.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovenian-Italian (2,203,495 sentence pairs, 77.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-sl.txt.zip">2.2M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Central Khmer (883 sentence pairs, 11.58k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-sl.txt.zip">0.9k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Slovenian-Korean (69,425 sentence pairs, 0.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-sl.txt.zip">69.4k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-Lithuanian (1,728,974 sentence pairs, 48.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-sl.txt.zip">1.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovenian-Latvian (1,836,775 sentence pairs, 52.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-sl.txt.zip">1.8M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovenian-Maltese (419,304 sentence pairs, 16.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Burmese (287 sentence pairs, 3.60k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-sl.txt.zip">0.3k</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Slovenian-BokmÃ¥l, Norwegian (1,073,819 sentence pairs, 33.73M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-sl.txt.zip">1.1M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Slovenian-Nepali (2,840 sentence pairs, 68.33k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-sl.txt.zip">2.8k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovenian-Dutch (2,241,468 sentence pairs, 71.05M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-sl.txt.zip">2.2M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Slovenian-Norwegian Nynorsk (7,578 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-sl.txt.zip">7.6k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovenian-Polish (1,708,649 sentence pairs, 51.83M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-sl.txt.zip">1.7M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Slovenian-Pushto (1,847 sentence pairs, 48.21k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-sl.txt.zip">1.8k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Slovenian-Portuguese (2,030,874 sentence pairs, 65.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-sl.txt.zip">2.0M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovenian-Romanian (2,279,093 sentence pairs, 72.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ro-sl.txt.zip">2.3M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Slovenian-Russian (60,450 sentence pairs, 1.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ru-sl.txt.zip">60.5k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Slovenian-Sinhala (6,379 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/si-sl.txt.zip">6.4k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovenian-Slovak (2,475,966 sentence pairs, 70.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sk-sl.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Somali (327 sentence pairs, 12.68k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sl-so.tmx.gz">0.3k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Slovenian-Swedish (2,086,618 sentence pairs, 62.01M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sl-sv.tmx.gz">2.1M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Slovenian-Swahili (7,637 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sl-sw.tmx.gz">7.6k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Slovenian-Tagalog (9,170 sentence pairs, 0.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sl-tl.tmx.gz">9.2k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Slovenian-Ukrainian (873,763 sentence pairs, 21.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sl-uk.tmx.gz">0.9M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Slovenian-Chinese (155,321 sentence pairs, 2.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sl-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized so plain text' href="download.php?f=MultiParaCrawl/v9/mono/so.txt.gz">so</a>
</th><td>1</td> <td>0.4M</td> <td>16.9k</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Somali-Bulgarian (3,169 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-so.txt.zip">3.2k</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Somali-Czech (2,863 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-so.txt.zip">2.9k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Somali-Danish (2,588 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-so.txt.zip">2.6k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Somali-German (5,868 sentence pairs, 0.34M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-so.txt.zip">5.9k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Somali-Greek (3,488 sentence pairs, 0.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-so.txt.zip">3.5k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Somali-Spanish (6,461 sentence pairs, 0.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-so.txt.zip">6.5k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Somali-Estonian (669 sentence pairs, 27.73k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-so.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Somali-Finnish (3,595 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-so.txt.zip">3.6k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Somali-French (5,383 sentence pairs, 0.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-so.txt.zip">5.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Somali-Irish (847 sentence pairs, 37.90k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-so.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Somali-Croatian (841 sentence pairs, 47.76k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-so.txt.zip">0.8k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Somali-Hungarian (3,990 sentence pairs, 0.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-so.txt.zip">4.0k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Somali-Icelandic (3,065 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-so.txt.zip">3.1k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Somali-Italian (3,977 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-so.txt.zip">4.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Central Khmer (189 sentence pairs, 6.83k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-so.txt.zip">0.2k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Somali-Korean (847 sentence pairs, 40.37k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-so.txt.zip">0.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Somali-Lithuanian (2,957 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-so.txt.zip">3.0k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Somali-Latvian (1,214 sentence pairs, 53.02k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-so.txt.zip">1.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Somali-Maltese (300 sentence pairs, 13.61k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-so.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Burmese (53 sentence pairs, 1.64k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-so.txt.zip">53</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Somali-BokmÃ¥l, Norwegian (2,418 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-so.txt.zip">2.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Somali-Nepali (425 sentence pairs, 10.33k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-so.txt.zip">0.4k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Somali-Dutch (4,518 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-so.txt.zip">4.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Somali-Norwegian Nynorsk (864 sentence pairs, 52.03k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-so.txt.zip">0.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Somali-Polish (707 sentence pairs, 32.19k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-so.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Pushto (65 sentence pairs, 3.03k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-so.txt.zip">65</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Somali-Portuguese (4,222 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-so.txt.zip">4.2k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Somali-Romanian (5,458 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ro-so.txt.zip">5.5k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Somali-Russian (1,725 sentence pairs, 96.10k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ru-so.txt.zip">1.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Somali-Sinhala (440 sentence pairs, 16.63k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/si-so.txt.zip">0.4k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Somali-Slovak (3,088 sentence pairs, 0.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sk-so.txt.zip">3.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Somali-Slovenian (327 sentence pairs, 12.68k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sl-so.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Somali-Swedish (4,020 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/so-sv.tmx.gz">4.0k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Somali-Swahili (1,738 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/so-sw.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Tagalog (140 sentence pairs, 6.11k words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/so-tl.tmx.gz">0.1k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Somali-Ukrainian (7,695 sentence pairs, 0.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/so-uk.tmx.gz">7.7k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Somali-Chinese (3,325 sentence pairs, 0.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/so-zh.tmx.gz">3.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=MultiParaCrawl/v9/mono/sv.txt.gz">sv</a>
</th><td>1</td> <td>546.9M</td> <td>36.2M</td><td bgcolor="#caffca"><a rel="nofollow" title='Swedish-Bulgarian (2,019,306 sentence pairs, 64.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-sv.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Czech (6,003,559 sentence pairs, 163.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-sv.txt.zip">6.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Danish (8,185,167 sentence pairs, 248.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-sv.txt.zip">8.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-German (13,206,304 sentence pairs, 364.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-sv.txt.zip">13.2M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Swedish-Greek (2,916,785 sentence pairs, 87.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-sv.txt.zip">2.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Spanish (12,338,282 sentence pairs, 365.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-sv.txt.zip">12.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Estonian (1,998,028 sentence pairs, 54.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-sv.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Finnish (7,319,865 sentence pairs, 184.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-sv.txt.zip">7.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-French (9,039,963 sentence pairs, 280.89M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-sv.txt.zip">9.0M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Swedish-Irish (379,803 sentence pairs, 12.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-sv.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Swedish-Croatian (550,406 sentence pairs, 22.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-sv.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Hungarian (4,919,014 sentence pairs, 133.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-sv.txt.zip">4.9M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Swedish-Icelandic (702,498 sentence pairs, 21.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-sv.txt.zip">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Italian (6,917,506 sentence pairs, 212.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-sv.txt.zip">6.9M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Swedish-Central Khmer (1,668 sentence pairs, 31.20k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-sv.txt.zip">1.7k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Swedish-Korean (329,529 sentence pairs, 8.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-sv.txt.zip">0.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Swedish-Lithuanian (2,661,148 sentence pairs, 70.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-sv.txt.zip">2.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Swedish-Latvian (2,654,806 sentence pairs, 72.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-sv.txt.zip">2.7M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Swedish-Maltese (443,091 sentence pairs, 16.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-sv.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Burmese (414 sentence pairs, 5.62k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-sv.txt.zip">0.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-BokmÃ¥l, Norwegian (5,324,386 sentence pairs, 169.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-sv.txt.zip">5.3M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Swedish-Nepali (5,379 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-sv.txt.zip">5.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Dutch (10,033,444 sentence pairs, 285.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-sv.txt.zip">10.0M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Swedish-Norwegian Nynorsk (19,898 sentence pairs, 0.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-sv.txt.zip">19.9k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Swedish-Polish (4,656,730 sentence pairs, 123.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-sv.txt.zip">4.7M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Swedish-Pushto (2,070 sentence pairs, 53.56k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-sv.txt.zip">2.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Portuguese (7,273,833 sentence pairs, 215.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-sv.txt.zip">7.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Romanian (4,154,538 sentence pairs, 129.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ro-sv.txt.zip">4.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Swedish-Russian (292,539 sentence pairs, 8.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ru-sv.txt.zip">0.3M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Swedish-Sinhala (12,854 sentence pairs, 0.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/si-sv.txt.zip">12.9k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Swedish-Slovak (3,788,094 sentence pairs, 103.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sk-sv.txt.zip">3.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Swedish-Slovenian (2,086,618 sentence pairs, 62.01M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sl-sv.txt.zip">2.1M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Swedish-Somali (4,020 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/so-sv.txt.zip">4.0k</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Swedish-Swahili (18,643 sentence pairs, 0.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sv-sw.tmx.gz">18.6k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Swedish-Tagalog (22,972 sentence pairs, 0.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sv-tl.tmx.gz">23.0k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Swedish-Ukrainian (1,506,093 sentence pairs, 41.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sv-uk.tmx.gz">1.5M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Swedish-Chinese (587,652 sentence pairs, 9.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sv-zh.tmx.gz">0.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sw plain text' href="download.php?f=MultiParaCrawl/v9/mono/sw.txt.gz">sw</a>
</th><td>1</td> <td>3.5M</td> <td>0.2M</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Swahili-Bulgarian (17,756 sentence pairs, 0.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-sw.txt.zip">17.8k</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Swahili-Czech (20,194 sentence pairs, 0.73M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-sw.txt.zip">20.2k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Swahili-Danish (17,495 sentence pairs, 0.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-sw.txt.zip">17.5k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Swahili-German (29,605 sentence pairs, 1.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-sw.txt.zip">29.6k</a>
</td><td bgcolor="#fffdf0"><a rel="nofollow" title='Swahili-Greek (20,507 sentence pairs, 0.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-sw.txt.zip">20.5k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Swahili-Spanish (38,038 sentence pairs, 1.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-sw.txt.zip">38.0k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Swahili-Estonian (7,142 sentence pairs, 0.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-sw.txt.zip">7.1k</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Swahili-Finnish (19,139 sentence pairs, 0.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-sw.txt.zip">19.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Swahili-French (32,706 sentence pairs, 1.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-sw.txt.zip">32.7k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Swahili-Irish (8,505 sentence pairs, 0.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-sw.txt.zip">8.5k</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Swahili-Croatian (4,819 sentence pairs, 0.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-sw.txt.zip">4.8k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Swahili-Hungarian (20,438 sentence pairs, 0.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-sw.txt.zip">20.4k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Swahili-Icelandic (13,530 sentence pairs, 0.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-sw.txt.zip">13.5k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Swahili-Italian (24,795 sentence pairs, 0.98M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-sw.txt.zip">24.8k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Swahili-Central Khmer (905 sentence pairs, 27.35k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-sw.txt.zip">0.9k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Swahili-Korean (7,313 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-sw.txt.zip">7.3k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Swahili-Lithuanian (18,735 sentence pairs, 0.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-sw.txt.zip">18.7k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Swahili-Latvian (13,014 sentence pairs, 0.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-sw.txt.zip">13.0k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Swahili-Maltese (3,643 sentence pairs, 0.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-sw.txt.zip">3.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swahili-Burmese (437 sentence pairs, 13.48k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-sw.txt.zip">0.4k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Swahili-BokmÃ¥l, Norwegian (13,234 sentence pairs, 0.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-sw.txt.zip">13.2k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Swahili-Nepali (2,263 sentence pairs, 91.17k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-sw.txt.zip">2.3k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Swahili-Dutch (25,425 sentence pairs, 1.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-sw.txt.zip">25.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Swahili-Norwegian Nynorsk (2,897 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-sw.txt.zip">2.9k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Swahili-Polish (10,414 sentence pairs, 0.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-sw.txt.zip">10.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Swahili-Pushto (712 sentence pairs, 29.00k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-sw.txt.zip">0.7k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Swahili-Portuguese (27,775 sentence pairs, 1.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-sw.txt.zip">27.8k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Swahili-Romanian (26,933 sentence pairs, 1.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ro-sw.txt.zip">26.9k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Swahili-Russian (19,975 sentence pairs, 0.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ru-sw.txt.zip">20.0k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Swahili-Sinhala (5,255 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/si-sw.txt.zip">5.3k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Swahili-Slovak (19,676 sentence pairs, 0.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sk-sw.txt.zip">19.7k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Swahili-Slovenian (7,637 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sl-sw.txt.zip">7.6k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Swahili-Somali (1,738 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/so-sw.txt.zip">1.7k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Swahili-Swedish (18,643 sentence pairs, 0.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sv-sw.txt.zip">18.6k</a>
</td><td></td><td bgcolor="#ffffe8"><a rel="nofollow" title='Swahili-Tagalog (28,270 sentence pairs, 1.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sw-tl.tmx.gz">28.3k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Swahili-Ukrainian (30,921 sentence pairs, 1.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sw-uk.tmx.gz">30.9k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Swahili-Chinese (12,383 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/sw-zh.tmx.gz">12.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tl plain text' href="download.php?f=MultiParaCrawl/v9/mono/tl.txt.gz">tl</a>
</th><td>1</td> <td>7.5M</td> <td>0.3M</td><td bgcolor="#ffffef"><a rel="nofollow" title='Tagalog-Bulgarian (25,487 sentence pairs, 1.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-tl.txt.zip">25.5k</a>
</td><td></td><td bgcolor="#ffffed"><a rel="nofollow" title='Tagalog-Czech (30,516 sentence pairs, 1.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-tl.txt.zip">30.5k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Tagalog-Danish (37,767 sentence pairs, 1.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-tl.txt.zip">37.8k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Tagalog-German (52,026 sentence pairs, 2.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-tl.txt.zip">52.0k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Tagalog-Greek (27,930 sentence pairs, 1.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-tl.txt.zip">27.9k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Tagalog-Spanish (82,824 sentence pairs, 3.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-tl.txt.zip">82.8k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Tagalog-Estonian (12,643 sentence pairs, 0.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-tl.txt.zip">12.6k</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Tagalog-Finnish (28,580 sentence pairs, 0.89M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-tl.txt.zip">28.6k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Tagalog-French (56,131 sentence pairs, 2.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-tl.txt.zip">56.1k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Tagalog-Irish (8,999 sentence pairs, 0.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-tl.txt.zip">9.0k</a>
</td><td></td><td bgcolor="#ffede9"><a rel="nofollow" title='Tagalog-Croatian (5,802 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-tl.txt.zip">5.8k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Tagalog-Hungarian (24,810 sentence pairs, 1.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-tl.txt.zip">24.8k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Tagalog-Icelandic (14,149 sentence pairs, 0.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-tl.txt.zip">14.1k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Tagalog-Italian (34,536 sentence pairs, 1.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-tl.txt.zip">34.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Tagalog-Central Khmer (559 sentence pairs, 17.65k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-tl.txt.zip">0.6k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Tagalog-Korean (37,525 sentence pairs, 1.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-tl.txt.zip">37.5k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Tagalog-Lithuanian (18,286 sentence pairs, 0.70M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-tl.txt.zip">18.3k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Tagalog-Latvian (13,780 sentence pairs, 0.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-tl.txt.zip">13.8k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Tagalog-Maltese (3,934 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-tl.txt.zip">3.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Burmese (333 sentence pairs, 10.91k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-tl.txt.zip">0.3k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Tagalog-BokmÃ¥l, Norwegian (16,183 sentence pairs, 0.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-tl.txt.zip">16.2k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Tagalog-Nepali (1,404 sentence pairs, 62.92k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-tl.txt.zip">1.4k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Tagalog-Dutch (29,855 sentence pairs, 1.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-tl.txt.zip">29.9k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Tagalog-Norwegian Nynorsk (2,946 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-tl.txt.zip">2.9k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Tagalog-Polish (13,675 sentence pairs, 0.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-tl.txt.zip">13.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Tagalog-Pushto (447 sentence pairs, 17.73k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-tl.txt.zip">0.4k</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Tagalog-Portuguese (47,267 sentence pairs, 2.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-tl.txt.zip">47.3k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Tagalog-Romanian (33,683 sentence pairs, 1.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ro-tl.txt.zip">33.7k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Tagalog-Russian (25,856 sentence pairs, 1.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ru-tl.txt.zip">25.9k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Tagalog-Sinhala (3,690 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/si-tl.txt.zip">3.7k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Tagalog-Slovak (21,350 sentence pairs, 0.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sk-tl.txt.zip">21.4k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Tagalog-Slovenian (9,170 sentence pairs, 0.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sl-tl.txt.zip">9.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tagalog-Somali (140 sentence pairs, 6.11k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/so-tl.txt.zip">0.1k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Tagalog-Swedish (22,972 sentence pairs, 0.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sv-tl.txt.zip">23.0k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Tagalog-Swahili (28,270 sentence pairs, 1.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sw-tl.txt.zip">28.3k</a>
</td><td></td><td bgcolor="#ffffe5"><a rel="nofollow" title='Tagalog-Ukrainian (40,396 sentence pairs, 1.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/tl-uk.tmx.gz">40.4k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Tagalog-Chinese (40,082 sentence pairs, 1.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/tl-zh.tmx.gz">40.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=MultiParaCrawl/v9/mono/uk.txt.gz">uk</a>
</th><td>1</td> <td>383.5M</td> <td>11.5M</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Ukrainian-Bulgarian (1,540,905 sentence pairs, 40.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-uk.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Ukrainian-Czech (1,772,798 sentence pairs, 43.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-uk.txt.zip">1.8M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Ukrainian-Danish (1,242,962 sentence pairs, 35.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-uk.txt.zip">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Ukrainian-German (2,577,390 sentence pairs, 68.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-uk.txt.zip">2.6M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Ukrainian-Greek (1,094,075 sentence pairs, 28.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-uk.txt.zip">1.1M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Ukrainian-Spanish (2,631,293 sentence pairs, 75.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-uk.txt.zip">2.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Ukrainian-Estonian (547,516 sentence pairs, 12.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-uk.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Ukrainian-Finnish (1,212,042 sentence pairs, 28.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-uk.txt.zip">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Ukrainian-French (2,054,775 sentence pairs, 62.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-uk.txt.zip">2.1M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Ukrainian-Irish (237,824 sentence pairs, 7.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-uk.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Ukrainian-Croatian (261,408 sentence pairs, 9.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-uk.txt.zip">0.3M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Ukrainian-Hungarian (1,550,680 sentence pairs, 38.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-uk.txt.zip">1.6M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Ukrainian-Icelandic (298,872 sentence pairs, 8.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-uk.txt.zip">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Ukrainian-Italian (1,550,799 sentence pairs, 43.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-uk.txt.zip">1.6M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Ukrainian-Central Khmer (3,120 sentence pairs, 71.74k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-uk.txt.zip">3.1k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Ukrainian-Korean (150,373 sentence pairs, 3.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-uk.txt.zip">0.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Ukrainian-Lithuanian (1,030,640 sentence pairs, 23.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-uk.txt.zip">1.0M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Ukrainian-Latvian (1,118,180 sentence pairs, 26.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-uk.txt.zip">1.1M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Ukrainian-Maltese (93,209 sentence pairs, 2.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-uk.txt.zip">93.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Burmese (816 sentence pairs, 14.93k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-uk.txt.zip">0.8k</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Ukrainian-BokmÃ¥l, Norwegian (925,356 sentence pairs, 27.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-uk.txt.zip">0.9M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Ukrainian-Nepali (8,961 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-uk.txt.zip">9.0k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Ukrainian-Dutch (1,582,747 sentence pairs, 41.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-uk.txt.zip">1.6M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Ukrainian-Norwegian Nynorsk (14,043 sentence pairs, 0.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-uk.txt.zip">14.0k</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Ukrainian-Polish (1,476,823 sentence pairs, 36.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-uk.txt.zip">1.5M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Ukrainian-Pushto (3,186 sentence pairs, 83.49k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-uk.txt.zip">3.2k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Ukrainian-Portuguese (1,792,445 sentence pairs, 51.89M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-uk.txt.zip">1.8M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Ukrainian-Romanian (1,744,291 sentence pairs, 48.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ro-uk.txt.zip">1.7M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Ukrainian-Russian (290,212 sentence pairs, 8.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ru-uk.txt.zip">0.3M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Ukrainian-Sinhala (30,182 sentence pairs, 0.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/si-uk.txt.zip">30.2k</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Ukrainian-Slovak (1,583,884 sentence pairs, 37.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sk-uk.txt.zip">1.6M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Ukrainian-Slovenian (873,763 sentence pairs, 21.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sl-uk.txt.zip">0.9M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Ukrainian-Somali (7,695 sentence pairs, 0.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/so-uk.txt.zip">7.7k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Ukrainian-Swedish (1,506,093 sentence pairs, 39.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sv-uk.txt.zip">1.5M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Ukrainian-Swahili (30,921 sentence pairs, 1.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sw-uk.txt.zip">30.9k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Ukrainian-Tagalog (40,396 sentence pairs, 1.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/tl-uk.txt.zip">40.4k</a>
</td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='Ukrainian-Chinese (229,773 sentence pairs, 3.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v9/tmx/uk-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh plain text' href="download.php?f=MultiParaCrawl/v9/mono/zh.txt.gz">zh</a>
</th><td>1</td> <td>69.6M</td> <td>9.4M</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Chinese-Bulgarian (227,145 sentence pairs, 3.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/bg-zh.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Chinese-Czech (642,700 sentence pairs, 9.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/cs-zh.txt.zip">0.6M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Chinese-Danish (513,362 sentence pairs, 8.86M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/da-zh.txt.zip">0.5M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Chinese-German (1,759,703 sentence pairs, 29.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/de-zh.txt.zip">1.8M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Chinese-Greek (299,552 sentence pairs, 4.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/el-zh.txt.zip">0.3M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Chinese-Spanish (1,917,966 sentence pairs, 37.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/es-zh.txt.zip">1.9M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Chinese-Estonian (130,265 sentence pairs, 1.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/et-zh.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Chinese-Finnish (419,287 sentence pairs, 5.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fi-zh.txt.zip">0.4M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Chinese-French (1,414,440 sentence pairs, 28.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/fr-zh.txt.zip">1.4M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Chinese-Irish (21,042 sentence pairs, 0.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ga-zh.txt.zip">21.0k</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Chinese-Croatian (44,492 sentence pairs, 0.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hr-zh.txt.zip">44.5k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Chinese-Hungarian (457,416 sentence pairs, 11.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/hu-zh.txt.zip">0.5M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Chinese-Icelandic (65,456 sentence pairs, 1.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/is-zh.txt.zip">65.5k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Chinese-Italian (881,785 sentence pairs, 16.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/it-zh.txt.zip">0.9M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Central Khmer (495 sentence pairs, 5.14k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/km-zh.txt.zip">0.5k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Chinese-Korean (796,843 sentence pairs, 12.86M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ko-zh.txt.zip">0.8M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Chinese-Lithuanian (180,426 sentence pairs, 2.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lt-zh.txt.zip">0.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Chinese-Latvian (172,860 sentence pairs, 2.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/lv-zh.txt.zip">0.2M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Chinese-Maltese (10,585 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/mt-zh.txt.zip">10.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Burmese (239 sentence pairs, 2.46k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/my-zh.txt.zip">0.2k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Chinese-BokmÃ¥l, Norwegian (326,264 sentence pairs, 5.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nb-zh.txt.zip">0.3M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Chinese-Nepali (1,776 sentence pairs, 32.20k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ne-zh.txt.zip">1.8k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Chinese-Dutch (872,618 sentence pairs, 15.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nl-zh.txt.zip">0.9M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Chinese-Norwegian Nynorsk (9,194 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/nn-zh.txt.zip">9.2k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Chinese-Polish (431,940 sentence pairs, 6.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pl-zh.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Pushto (190 sentence pairs, 2.10k words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ps-zh.txt.zip">0.2k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Chinese-Portuguese (1,124,765 sentence pairs, 21.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/pt-zh.txt.zip">1.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Chinese-Romanian (407,310 sentence pairs, 7.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ro-zh.txt.zip">0.4M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Chinese-Russian (105,656 sentence pairs, 1.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/ru-zh.txt.zip">0.1M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Chinese-Sinhala (5,779 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/si-zh.txt.zip">5.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Chinese-Slovak (277,000 sentence pairs, 3.97M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sk-zh.txt.zip">0.3M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Chinese-Slovenian (155,321 sentence pairs, 2.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sl-zh.txt.zip">0.2M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Chinese-Somali (3,325 sentence pairs, 0.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/so-zh.txt.zip">3.3k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Chinese-Swedish (587,652 sentence pairs, 9.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sv-zh.txt.zip">0.6M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Chinese-Swahili (12,383 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/sw-zh.txt.zip">12.4k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Chinese-Tagalog (40,082 sentence pairs, 1.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/tl-zh.txt.zip">40.1k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Chinese-Ukrainian (229,773 sentence pairs, 3.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v9/moses/uk-zh.txt.zip">0.2M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>