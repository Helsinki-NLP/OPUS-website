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
<div class="header"><?php include("header.php"); ?></div><h1>MultiParaCrawl v9b</h1>Parallel corpora from Web Crawls collected in the <a href="http://paracrawl.eu">ParaCrawl project</a> and further processed for making it a multi-parallel corpus by pivoting via English. Here we only provide the additional language pairs that came out of pivoting. The bitexts for English are available from the <a href="http://opus.nlpl.eu/ParaCrawl-v9.php">ParaCrawl release</a>.<p>41 languages, 708 bitexts<br>total number of files: 41<br>total number of tokens: 22.62G<br>total number of sentence fragments: 1.21G<br><p>Please, acknowledge the ParaCrawl project at <a href="http://paracrawl.eu">http://paracrawl.eu</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>The data is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="http://paracrawl.eu">http://paracrawl.eu</a> for more details<h3>Release history:</h3><p><ul><li><a href="MultiParaCrawl-v5.php">MultiParaCrawl v5</a></li> <li><a href="MultiParaCrawl-v7.1.php">MultiParaCrawl v7.1</a></li> <li><a href="MultiParaCrawl-v8.php">MultiParaCrawl v8</a></li> <li><a href="MultiParaCrawl-v9.php">MultiParaCrawl v9</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/da_sample.html">da</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/de_sample.html">de</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/el_sample.html">el</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/es_sample.html">es</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/et_sample.html">et</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/is_sample.html">is</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/it_sample.html">it</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/km_sample.html">km</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/ko_sample.html">ko</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/lv_sample.html">lv</a></th>
<th></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/my_sample.html">my</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/ne_sample.html">ne</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/ps_sample.html">ps</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/si_sample.html">si</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/so_sample.html">so</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/sw_sample.html">sw</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/tl_sample.html">tl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v9b/zh_sample.html">zh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/bg.zip">bg</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="Bulgarian-Czech (sample file)" href="MultiParaCrawl/v9b/bg-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Danish (sample file)" href="MultiParaCrawl/v9b/bg-da_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-German (sample file)" href="MultiParaCrawl/v9b/bg-de_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="MultiParaCrawl/v9b/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Spanish (sample file)" href="MultiParaCrawl/v9b/bg-es_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="MultiParaCrawl/v9b/bg-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="MultiParaCrawl/v9b/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-French (sample file)" href="MultiParaCrawl/v9b/bg-fr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Irish (sample file)" href="MultiParaCrawl/v9b/bg-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="MultiParaCrawl/v9b/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="MultiParaCrawl/v9b/bg-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="MultiParaCrawl/v9b/bg-is_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Italian (sample file)" href="MultiParaCrawl/v9b/bg-it_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Central Khmer (sample file)" href="MultiParaCrawl/v9b/bg-km_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Korean (sample file)" href="MultiParaCrawl/v9b/bg-ko_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="MultiParaCrawl/v9b/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="MultiParaCrawl/v9b/bg-lv_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Maltese (sample file)" href="MultiParaCrawl/v9b/bg-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Burmese (sample file)" href="MultiParaCrawl/v9b/bg-my_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/bg-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Nepali (sample file)" href="MultiParaCrawl/v9b/bg-ne_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Dutch (sample file)" href="MultiParaCrawl/v9b/bg-nl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/bg-nn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Polish (sample file)" href="MultiParaCrawl/v9b/bg-pl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Pushto (sample file)" href="MultiParaCrawl/v9b/bg-ps_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="MultiParaCrawl/v9b/bg-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="MultiParaCrawl/v9b/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Russian (sample file)" href="MultiParaCrawl/v9b/bg-ru_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Sinhala (sample file)" href="MultiParaCrawl/v9b/bg-si_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="MultiParaCrawl/v9b/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="MultiParaCrawl/v9b/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Somali (sample file)" href="MultiParaCrawl/v9b/bg-so_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swedish (sample file)" href="MultiParaCrawl/v9b/bg-sv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swahili (sample file)" href="MultiParaCrawl/v9b/bg-sw_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Tagalog (sample file)" href="MultiParaCrawl/v9b/bg-tl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/bg-uk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Chinese (sample file)" href="MultiParaCrawl/v9b/bg-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/bg.zip">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/ca.zip">ca</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Nepali (sample file)" href="MultiParaCrawl/v9b/ca-ne_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Russian (sample file)" href="MultiParaCrawl/v9b/ca-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/cs.zip">cs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bulgarian' (2.8M links, 93.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-cs.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Czech-Danish (sample file)" href="MultiParaCrawl/v9b/cs-da_sample.html">view</a></td><td><a rel="nofollow" title="Czech-German (sample file)" href="MultiParaCrawl/v9b/cs-de_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="MultiParaCrawl/v9b/cs-el_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="MultiParaCrawl/v9b/cs-es_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Estonian (sample file)" href="MultiParaCrawl/v9b/cs-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="MultiParaCrawl/v9b/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="MultiParaCrawl/v9b/cs-fr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Irish (sample file)" href="MultiParaCrawl/v9b/cs-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Croatian (sample file)" href="MultiParaCrawl/v9b/cs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="MultiParaCrawl/v9b/cs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="MultiParaCrawl/v9b/cs-is_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Italian (sample file)" href="MultiParaCrawl/v9b/cs-it_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Central Khmer (sample file)" href="MultiParaCrawl/v9b/cs-km_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Korean (sample file)" href="MultiParaCrawl/v9b/cs-ko_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Lithuanian (sample file)" href="MultiParaCrawl/v9b/cs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Latvian (sample file)" href="MultiParaCrawl/v9b/cs-lv_sample.html">view</a></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Maltese (sample file)" href="MultiParaCrawl/v9b/cs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Burmese (sample file)" href="MultiParaCrawl/v9b/cs-my_sample.html">view</a></td><td><a rel="nofollow" title="Czech-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/cs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Nepali (sample file)" href="MultiParaCrawl/v9b/cs-ne_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="MultiParaCrawl/v9b/cs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/cs-nn_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Polish (sample file)" href="MultiParaCrawl/v9b/cs-pl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Pushto (sample file)" href="MultiParaCrawl/v9b/cs-ps_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="MultiParaCrawl/v9b/cs-pt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Romanian (sample file)" href="MultiParaCrawl/v9b/cs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Russian (sample file)" href="MultiParaCrawl/v9b/cs-ru_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Sinhala (sample file)" href="MultiParaCrawl/v9b/cs-si_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovak (sample file)" href="MultiParaCrawl/v9b/cs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="MultiParaCrawl/v9b/cs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Somali (sample file)" href="MultiParaCrawl/v9b/cs-so_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swedish (sample file)" href="MultiParaCrawl/v9b/cs-sv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swahili (sample file)" href="MultiParaCrawl/v9b/cs-sw_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Tagalog (sample file)" href="MultiParaCrawl/v9b/cs-tl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="MultiParaCrawl/v9b/cs-uk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="MultiParaCrawl/v9b/cs-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/cs.zip">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/da.zip">da</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bulgarian' (2.1M links, 80.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-da.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Czech' (6.4M links, 222.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-da.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="MultiParaCrawl/v9b/da-de_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Greek (sample file)" href="MultiParaCrawl/v9b/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="MultiParaCrawl/v9b/da-es_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Estonian (sample file)" href="MultiParaCrawl/v9b/da-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="MultiParaCrawl/v9b/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="MultiParaCrawl/v9b/da-fr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Irish (sample file)" href="MultiParaCrawl/v9b/da-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Croatian (sample file)" href="MultiParaCrawl/v9b/da-hr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hungarian (sample file)" href="MultiParaCrawl/v9b/da-hu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="MultiParaCrawl/v9b/da-is_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="MultiParaCrawl/v9b/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Central Khmer (sample file)" href="MultiParaCrawl/v9b/da-km_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Korean (sample file)" href="MultiParaCrawl/v9b/da-ko_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Lithuanian (sample file)" href="MultiParaCrawl/v9b/da-lt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Latvian (sample file)" href="MultiParaCrawl/v9b/da-lv_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Maltese (sample file)" href="MultiParaCrawl/v9b/da-mt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Burmese (sample file)" href="MultiParaCrawl/v9b/da-my_sample.html">view</a></td><td><a rel="nofollow" title="Danish-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/da-nb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Nepali (sample file)" href="MultiParaCrawl/v9b/da-ne_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="MultiParaCrawl/v9b/da-nl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/da-nn_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Polish (sample file)" href="MultiParaCrawl/v9b/da-pl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Pushto (sample file)" href="MultiParaCrawl/v9b/da-ps_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="MultiParaCrawl/v9b/da-pt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Romanian (sample file)" href="MultiParaCrawl/v9b/da-ro_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Russian (sample file)" href="MultiParaCrawl/v9b/da-ru_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Sinhala (sample file)" href="MultiParaCrawl/v9b/da-si_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovak (sample file)" href="MultiParaCrawl/v9b/da-sk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovenian (sample file)" href="MultiParaCrawl/v9b/da-sl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Somali (sample file)" href="MultiParaCrawl/v9b/da-so_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="MultiParaCrawl/v9b/da-sv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swahili (sample file)" href="MultiParaCrawl/v9b/da-sw_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Tagalog (sample file)" href="MultiParaCrawl/v9b/da-tl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Ukrainian (sample file)" href="MultiParaCrawl/v9b/da-uk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Chinese (sample file)" href="MultiParaCrawl/v9b/da-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/da.zip">da</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/de.zip">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Bulgarian' (3.9M links, 139.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-de.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (13.9M links, 433.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (12.8M links, 442.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-Greek (sample file)" href="MultiParaCrawl/v9b/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="MultiParaCrawl/v9b/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Estonian (sample file)" href="MultiParaCrawl/v9b/de-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="MultiParaCrawl/v9b/de-fi_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="MultiParaCrawl/v9b/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Irish (sample file)" href="MultiParaCrawl/v9b/de-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Croatian (sample file)" href="MultiParaCrawl/v9b/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Hungarian (sample file)" href="MultiParaCrawl/v9b/de-hu_sample.html">view</a></td><td><a rel="nofollow" title="German-Icelandic (sample file)" href="MultiParaCrawl/v9b/de-is_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="MultiParaCrawl/v9b/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Central Khmer (sample file)" href="MultiParaCrawl/v9b/de-km_sample.html">view</a></td><td><a rel="nofollow" title="German-Korean (sample file)" href="MultiParaCrawl/v9b/de-ko_sample.html">view</a></td><td><a rel="nofollow" title="German-Lithuanian (sample file)" href="MultiParaCrawl/v9b/de-lt_sample.html">view</a></td><td><a rel="nofollow" title="German-Latvian (sample file)" href="MultiParaCrawl/v9b/de-lv_sample.html">view</a></td><th>de</th>
<td><a rel="nofollow" title="German-Maltese (sample file)" href="MultiParaCrawl/v9b/de-mt_sample.html">view</a></td><td><a rel="nofollow" title="German-Burmese (sample file)" href="MultiParaCrawl/v9b/de-my_sample.html">view</a></td><td><a rel="nofollow" title="German-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/de-nb_sample.html">view</a></td><td><a rel="nofollow" title="German-Nepali (sample file)" href="MultiParaCrawl/v9b/de-ne_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="MultiParaCrawl/v9b/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/de-nn_sample.html">view</a></td><td><a rel="nofollow" title="German-Polish (sample file)" href="MultiParaCrawl/v9b/de-pl_sample.html">view</a></td><td><a rel="nofollow" title="German-Pushto (sample file)" href="MultiParaCrawl/v9b/de-ps_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="MultiParaCrawl/v9b/de-pt_sample.html">view</a></td><td><a rel="nofollow" title="German-Romanian (sample file)" href="MultiParaCrawl/v9b/de-ro_sample.html">view</a></td><td><a rel="nofollow" title="German-Russian (sample file)" href="MultiParaCrawl/v9b/de-ru_sample.html">view</a></td><td><a rel="nofollow" title="German-Sinhala (sample file)" href="MultiParaCrawl/v9b/de-si_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovak (sample file)" href="MultiParaCrawl/v9b/de-sk_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovenian (sample file)" href="MultiParaCrawl/v9b/de-sl_sample.html">view</a></td><td><a rel="nofollow" title="German-Somali (sample file)" href="MultiParaCrawl/v9b/de-so_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="MultiParaCrawl/v9b/de-sv_sample.html">view</a></td><td><a rel="nofollow" title="German-Swahili (sample file)" href="MultiParaCrawl/v9b/de-sw_sample.html">view</a></td><td><a rel="nofollow" title="German-Tagalog (sample file)" href="MultiParaCrawl/v9b/de-tl_sample.html">view</a></td><td><a rel="nofollow" title="German-Ukrainian (sample file)" href="MultiParaCrawl/v9b/de-uk_sample.html">view</a></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="MultiParaCrawl/v9b/de-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/el.zip">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (2.2M links, 79.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-el.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Czech' (3.6M links, 116.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (3.2M links, 116.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (7.7M links, 241.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-Spanish (sample file)" href="MultiParaCrawl/v9b/el-es_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Estonian (sample file)" href="MultiParaCrawl/v9b/el-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="MultiParaCrawl/v9b/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="MultiParaCrawl/v9b/el-fr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Irish (sample file)" href="MultiParaCrawl/v9b/el-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="MultiParaCrawl/v9b/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hungarian (sample file)" href="MultiParaCrawl/v9b/el-hu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="MultiParaCrawl/v9b/el-is_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="MultiParaCrawl/v9b/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Central Khmer (sample file)" href="MultiParaCrawl/v9b/el-km_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Korean (sample file)" href="MultiParaCrawl/v9b/el-ko_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Lithuanian (sample file)" href="MultiParaCrawl/v9b/el-lt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Latvian (sample file)" href="MultiParaCrawl/v9b/el-lv_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Maltese (sample file)" href="MultiParaCrawl/v9b/el-mt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Burmese (sample file)" href="MultiParaCrawl/v9b/el-my_sample.html">view</a></td><td><a rel="nofollow" title="Greek-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/el-nb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Nepali (sample file)" href="MultiParaCrawl/v9b/el-ne_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="MultiParaCrawl/v9b/el-nl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/el-nn_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Polish (sample file)" href="MultiParaCrawl/v9b/el-pl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Pushto (sample file)" href="MultiParaCrawl/v9b/el-ps_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="MultiParaCrawl/v9b/el-pt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="MultiParaCrawl/v9b/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Russian (sample file)" href="MultiParaCrawl/v9b/el-ru_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Sinhala (sample file)" href="MultiParaCrawl/v9b/el-si_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovak (sample file)" href="MultiParaCrawl/v9b/el-sk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="MultiParaCrawl/v9b/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Somali (sample file)" href="MultiParaCrawl/v9b/el-so_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swedish (sample file)" href="MultiParaCrawl/v9b/el-sv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swahili (sample file)" href="MultiParaCrawl/v9b/el-sw_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Tagalog (sample file)" href="MultiParaCrawl/v9b/el-tl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="MultiParaCrawl/v9b/el-uk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Chinese (sample file)" href="MultiParaCrawl/v9b/el-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/el.zip">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/es.zip">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bulgarian' (3.9M links, 147.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-es.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (12.4M links, 397.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (12.0M links, 445.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (56.9M links, 2.0G tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Greek' (5.8M links, 203.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Estonian (sample file)" href="MultiParaCrawl/v9b/es-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="MultiParaCrawl/v9b/es-fi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="MultiParaCrawl/v9b/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Irish (sample file)" href="MultiParaCrawl/v9b/es-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="MultiParaCrawl/v9b/es-hr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hungarian (sample file)" href="MultiParaCrawl/v9b/es-hu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Icelandic (sample file)" href="MultiParaCrawl/v9b/es-is_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="MultiParaCrawl/v9b/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Central Khmer (sample file)" href="MultiParaCrawl/v9b/es-km_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Korean (sample file)" href="MultiParaCrawl/v9b/es-ko_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Lithuanian (sample file)" href="MultiParaCrawl/v9b/es-lt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Latvian (sample file)" href="MultiParaCrawl/v9b/es-lv_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Maltese (sample file)" href="MultiParaCrawl/v9b/es-mt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Burmese (sample file)" href="MultiParaCrawl/v9b/es-my_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/es-nb_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Nepali (sample file)" href="MultiParaCrawl/v9b/es-ne_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="MultiParaCrawl/v9b/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/es-nn_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="MultiParaCrawl/v9b/es-pl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Pushto (sample file)" href="MultiParaCrawl/v9b/es-ps_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="MultiParaCrawl/v9b/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Romanian (sample file)" href="MultiParaCrawl/v9b/es-ro_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="MultiParaCrawl/v9b/es-ru_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Sinhala (sample file)" href="MultiParaCrawl/v9b/es-si_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovak (sample file)" href="MultiParaCrawl/v9b/es-sk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovenian (sample file)" href="MultiParaCrawl/v9b/es-sl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Somali (sample file)" href="MultiParaCrawl/v9b/es-so_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="MultiParaCrawl/v9b/es-sv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swahili (sample file)" href="MultiParaCrawl/v9b/es-sw_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Tagalog (sample file)" href="MultiParaCrawl/v9b/es-tl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Ukrainian (sample file)" href="MultiParaCrawl/v9b/es-uk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="MultiParaCrawl/v9b/es-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/et.zip">et</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (1.2M links, 41.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Czech' (2.7M links, 78.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Danish' (2.1M links, 73.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-German' (4.1M links, 119.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Greek' (1.3M links, 44.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Spanish' (3.9M links, 125.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-et.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="MultiParaCrawl/v9b/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-French (sample file)" href="MultiParaCrawl/v9b/et-fr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Irish (sample file)" href="MultiParaCrawl/v9b/et-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="MultiParaCrawl/v9b/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hungarian (sample file)" href="MultiParaCrawl/v9b/et-hu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="MultiParaCrawl/v9b/et-is_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Italian (sample file)" href="MultiParaCrawl/v9b/et-it_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Central Khmer (sample file)" href="MultiParaCrawl/v9b/et-km_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Korean (sample file)" href="MultiParaCrawl/v9b/et-ko_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="MultiParaCrawl/v9b/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="MultiParaCrawl/v9b/et-lv_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Maltese (sample file)" href="MultiParaCrawl/v9b/et-mt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Burmese (sample file)" href="MultiParaCrawl/v9b/et-my_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/et-nb_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Nepali (sample file)" href="MultiParaCrawl/v9b/et-ne_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Dutch (sample file)" href="MultiParaCrawl/v9b/et-nl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/et-nn_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Polish (sample file)" href="MultiParaCrawl/v9b/et-pl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Pushto (sample file)" href="MultiParaCrawl/v9b/et-ps_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="MultiParaCrawl/v9b/et-pt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Romanian (sample file)" href="MultiParaCrawl/v9b/et-ro_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Russian (sample file)" href="MultiParaCrawl/v9b/et-ru_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Sinhala (sample file)" href="MultiParaCrawl/v9b/et-si_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="MultiParaCrawl/v9b/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="MultiParaCrawl/v9b/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Somali (sample file)" href="MultiParaCrawl/v9b/et-so_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swedish (sample file)" href="MultiParaCrawl/v9b/et-sv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swahili (sample file)" href="MultiParaCrawl/v9b/et-sw_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Tagalog (sample file)" href="MultiParaCrawl/v9b/et-tl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/et-uk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="MultiParaCrawl/v9b/et-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/et.zip">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/eu.zip">eu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>eu</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Basque-Nepali (sample file)" href="MultiParaCrawl/v9b/eu-ne_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Basque-Russian (sample file)" href="MultiParaCrawl/v9b/eu-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/eu.zip">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/fi.zip">fi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (2.1M links, 67.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' (6.6M links, 186.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (6.4M links, 205.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (13.4M links, 376.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' (2.8M links, 88.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (12.4M links, 378.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (2.3M links, 64.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-fi.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Finnish-French (sample file)" href="MultiParaCrawl/v9b/fi-fr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Irish (sample file)" href="MultiParaCrawl/v9b/fi-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="MultiParaCrawl/v9b/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="MultiParaCrawl/v9b/fi-hu_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="MultiParaCrawl/v9b/fi-is_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="MultiParaCrawl/v9b/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Central Khmer (sample file)" href="MultiParaCrawl/v9b/fi-km_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Korean (sample file)" href="MultiParaCrawl/v9b/fi-ko_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="MultiParaCrawl/v9b/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="MultiParaCrawl/v9b/fi-lv_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Maltese (sample file)" href="MultiParaCrawl/v9b/fi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Burmese (sample file)" href="MultiParaCrawl/v9b/fi-my_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/fi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Nepali (sample file)" href="MultiParaCrawl/v9b/fi-ne_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="MultiParaCrawl/v9b/fi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/fi-nn_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Polish (sample file)" href="MultiParaCrawl/v9b/fi-pl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Pushto (sample file)" href="MultiParaCrawl/v9b/fi-ps_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="MultiParaCrawl/v9b/fi-pt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="MultiParaCrawl/v9b/fi-ro_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Russian (sample file)" href="MultiParaCrawl/v9b/fi-ru_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Sinhala (sample file)" href="MultiParaCrawl/v9b/fi-si_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="MultiParaCrawl/v9b/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="MultiParaCrawl/v9b/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Somali (sample file)" href="MultiParaCrawl/v9b/fi-so_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="MultiParaCrawl/v9b/fi-sv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swahili (sample file)" href="MultiParaCrawl/v9b/fi-sw_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Tagalog (sample file)" href="MultiParaCrawl/v9b/fi-tl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="MultiParaCrawl/v9b/fi-uk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="MultiParaCrawl/v9b/fi-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/fi.zip">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/fr.zip">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Bulgarian' (3.4M links, 135.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (9.4M links, 329.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (8.8M links, 343.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (49.5M links, 1.9G tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (4.5M links, 172.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (52.7M links, 2.1G tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Estonian' (2.2M links, 81.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (7.0M links, 232.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Irish (sample file)" href="MultiParaCrawl/v9b/fr-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Croatian (sample file)" href="MultiParaCrawl/v9b/fr-hr_sample.html">view</a></td><td><a rel="nofollow" title="French-Hungarian (sample file)" href="MultiParaCrawl/v9b/fr-hu_sample.html">view</a></td><td><a rel="nofollow" title="French-Icelandic (sample file)" href="MultiParaCrawl/v9b/fr-is_sample.html">view</a></td><td><a rel="nofollow" title="French-Italian (sample file)" href="MultiParaCrawl/v9b/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Central Khmer (sample file)" href="MultiParaCrawl/v9b/fr-km_sample.html">view</a></td><td><a rel="nofollow" title="French-Korean (sample file)" href="MultiParaCrawl/v9b/fr-ko_sample.html">view</a></td><td><a rel="nofollow" title="French-Lithuanian (sample file)" href="MultiParaCrawl/v9b/fr-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="MultiParaCrawl/v9b/fr-lv_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Maltese (sample file)" href="MultiParaCrawl/v9b/fr-mt_sample.html">view</a></td><td><a rel="nofollow" title="French-Burmese (sample file)" href="MultiParaCrawl/v9b/fr-my_sample.html">view</a></td><td><a rel="nofollow" title="French-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/fr-nb_sample.html">view</a></td><td><a rel="nofollow" title="French-Nepali (sample file)" href="MultiParaCrawl/v9b/fr-ne_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="MultiParaCrawl/v9b/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/fr-nn_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="MultiParaCrawl/v9b/fr-pl_sample.html">view</a></td><td><a rel="nofollow" title="French-Pushto (sample file)" href="MultiParaCrawl/v9b/fr-ps_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="MultiParaCrawl/v9b/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Romanian (sample file)" href="MultiParaCrawl/v9b/fr-ro_sample.html">view</a></td><td><a rel="nofollow" title="French-Russian (sample file)" href="MultiParaCrawl/v9b/fr-ru_sample.html">view</a></td><td><a rel="nofollow" title="French-Sinhala (sample file)" href="MultiParaCrawl/v9b/fr-si_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovak (sample file)" href="MultiParaCrawl/v9b/fr-sk_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="MultiParaCrawl/v9b/fr-sl_sample.html">view</a></td><td><a rel="nofollow" title="French-Somali (sample file)" href="MultiParaCrawl/v9b/fr-so_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="MultiParaCrawl/v9b/fr-sv_sample.html">view</a></td><td><a rel="nofollow" title="French-Swahili (sample file)" href="MultiParaCrawl/v9b/fr-sw_sample.html">view</a></td><td><a rel="nofollow" title="French-Tagalog (sample file)" href="MultiParaCrawl/v9b/fr-tl_sample.html">view</a></td><td><a rel="nofollow" title="French-Ukrainian (sample file)" href="MultiParaCrawl/v9b/fr-uk_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="MultiParaCrawl/v9b/fr-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/ga.zip">ga</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Bulgarian' (0.3M links, 12.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Czech' (0.5M links, 17.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Danish' (0.5M links, 18.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-German' (0.8M links, 24.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Greek' (0.3M links, 13.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Spanish' (0.8M links, 29.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Estonian' (0.3M links, 11.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Finnish' (0.4M links, 12.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-French' (0.6M links, 26.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-ga.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Irish-Croatian (sample file)" href="MultiParaCrawl/v9b/ga-hr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Hungarian (sample file)" href="MultiParaCrawl/v9b/ga-hu_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Icelandic (sample file)" href="MultiParaCrawl/v9b/ga-is_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Italian (sample file)" href="MultiParaCrawl/v9b/ga-it_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Central Khmer (sample file)" href="MultiParaCrawl/v9b/ga-km_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Korean (sample file)" href="MultiParaCrawl/v9b/ga-ko_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Lithuanian (sample file)" href="MultiParaCrawl/v9b/ga-lt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Latvian (sample file)" href="MultiParaCrawl/v9b/ga-lv_sample.html">view</a></td><th>ga</th>
<td><a rel="nofollow" title="Irish-Maltese (sample file)" href="MultiParaCrawl/v9b/ga-mt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Burmese (sample file)" href="MultiParaCrawl/v9b/ga-my_sample.html">view</a></td><td><a rel="nofollow" title="Irish-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/ga-nb_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Nepali (sample file)" href="MultiParaCrawl/v9b/ga-ne_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Dutch (sample file)" href="MultiParaCrawl/v9b/ga-nl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/ga-nn_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Polish (sample file)" href="MultiParaCrawl/v9b/ga-pl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Pushto (sample file)" href="MultiParaCrawl/v9b/ga-ps_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Portuguese (sample file)" href="MultiParaCrawl/v9b/ga-pt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Romanian (sample file)" href="MultiParaCrawl/v9b/ga-ro_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Russian (sample file)" href="MultiParaCrawl/v9b/ga-ru_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Sinhala (sample file)" href="MultiParaCrawl/v9b/ga-si_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovak (sample file)" href="MultiParaCrawl/v9b/ga-sk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovenian (sample file)" href="MultiParaCrawl/v9b/ga-sl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Somali (sample file)" href="MultiParaCrawl/v9b/ga-so_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swedish (sample file)" href="MultiParaCrawl/v9b/ga-sv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swahili (sample file)" href="MultiParaCrawl/v9b/ga-sw_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Tagalog (sample file)" href="MultiParaCrawl/v9b/ga-tl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Ukrainian (sample file)" href="MultiParaCrawl/v9b/ga-uk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Chinese (sample file)" href="MultiParaCrawl/v9b/ga-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/ga.zip">ga</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/gl.zip">gl</a></th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gl</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Galician-Nepali (sample file)" href="MultiParaCrawl/v9b/gl-ne_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Galician-Russian (sample file)" href="MultiParaCrawl/v9b/gl-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/gl.zip">gl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/hr.zip">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (0.5M links, 23.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' (0.9M links, 37.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Danish' (0.7M links, 31.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (1.5M links, 66.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (0.4M links, 20.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (1.3M links, 65.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (0.4M links, 15.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (0.6M links, 26.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (1.0M links, 52.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Irish' (0.1M links, 5.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-hr.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Hungarian (sample file)" href="MultiParaCrawl/v9b/hr-hu_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="MultiParaCrawl/v9b/hr-is_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Italian (sample file)" href="MultiParaCrawl/v9b/hr-it_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Central Khmer (sample file)" href="MultiParaCrawl/v9b/hr-km_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Korean (sample file)" href="MultiParaCrawl/v9b/hr-ko_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="MultiParaCrawl/v9b/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="MultiParaCrawl/v9b/hr-lv_sample.html">view</a></td><th>hr</th>
<td><a rel="nofollow" title="Croatian-Maltese (sample file)" href="MultiParaCrawl/v9b/hr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Burmese (sample file)" href="MultiParaCrawl/v9b/hr-my_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/hr-nb_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Nepali (sample file)" href="MultiParaCrawl/v9b/hr-ne_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Dutch (sample file)" href="MultiParaCrawl/v9b/hr-nl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/hr-nn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Polish (sample file)" href="MultiParaCrawl/v9b/hr-pl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Pushto (sample file)" href="MultiParaCrawl/v9b/hr-ps_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="MultiParaCrawl/v9b/hr-pt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="MultiParaCrawl/v9b/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Russian (sample file)" href="MultiParaCrawl/v9b/hr-ru_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Sinhala (sample file)" href="MultiParaCrawl/v9b/hr-si_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="MultiParaCrawl/v9b/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="MultiParaCrawl/v9b/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Somali (sample file)" href="MultiParaCrawl/v9b/hr-so_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swedish (sample file)" href="MultiParaCrawl/v9b/hr-sv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swahili (sample file)" href="MultiParaCrawl/v9b/hr-sw_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Tagalog (sample file)" href="MultiParaCrawl/v9b/hr-tl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/hr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="MultiParaCrawl/v9b/hr-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/hu.zip">hu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' (2.6M links, 92.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' (10.3M links, 271.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Danish' (5.2M links, 179.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-German' (13.8M links, 421.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Greek' (3.1M links, 101.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Spanish' (13.1M links, 418.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Estonian' (2.2M links, 67.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' (5.8M links, 161.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-French' (8.6M links, 303.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Irish' (0.4M links, 14.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Croatian' (0.7M links, 31.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-hu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="MultiParaCrawl/v9b/hu-is_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Italian (sample file)" href="MultiParaCrawl/v9b/hu-it_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Central Khmer (sample file)" href="MultiParaCrawl/v9b/hu-km_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Korean (sample file)" href="MultiParaCrawl/v9b/hu-ko_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Lithuanian (sample file)" href="MultiParaCrawl/v9b/hu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Latvian (sample file)" href="MultiParaCrawl/v9b/hu-lv_sample.html">view</a></td><th>hu</th>
<td><a rel="nofollow" title="Hungarian-Maltese (sample file)" href="MultiParaCrawl/v9b/hu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Burmese (sample file)" href="MultiParaCrawl/v9b/hu-my_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/hu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Nepali (sample file)" href="MultiParaCrawl/v9b/hu-ne_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="MultiParaCrawl/v9b/hu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/hu-nn_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Polish (sample file)" href="MultiParaCrawl/v9b/hu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Pushto (sample file)" href="MultiParaCrawl/v9b/hu-ps_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="MultiParaCrawl/v9b/hu-pt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Romanian (sample file)" href="MultiParaCrawl/v9b/hu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Russian (sample file)" href="MultiParaCrawl/v9b/hu-ru_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Sinhala (sample file)" href="MultiParaCrawl/v9b/hu-si_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovak (sample file)" href="MultiParaCrawl/v9b/hu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovenian (sample file)" href="MultiParaCrawl/v9b/hu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Somali (sample file)" href="MultiParaCrawl/v9b/hu-so_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swedish (sample file)" href="MultiParaCrawl/v9b/hu-sv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swahili (sample file)" href="MultiParaCrawl/v9b/hu-sw_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Tagalog (sample file)" href="MultiParaCrawl/v9b/hu-tl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/hu-uk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Chinese (sample file)" href="MultiParaCrawl/v9b/hu-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/hu.zip">hu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/is.zip">is</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (0.3M links, 11.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Czech' (0.9M links, 27.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Danish' (0.8M links, 27.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-German' (1.6M links, 51.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' (0.4M links, 13.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Spanish' (1.6M links, 54.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (0.5M links, 15.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (0.9M links, 26.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-French' (1.0M links, 37.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Irish' (0.2M links, 8.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' (0.1M links, 5.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hungarian' (0.8M links, 24.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-is.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Italian (sample file)" href="MultiParaCrawl/v9b/is-it_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Central Khmer (sample file)" href="MultiParaCrawl/v9b/is-km_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Korean (sample file)" href="MultiParaCrawl/v9b/is-ko_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="MultiParaCrawl/v9b/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="MultiParaCrawl/v9b/is-lv_sample.html">view</a></td><th>is</th>
<td><a rel="nofollow" title="Icelandic-Maltese (sample file)" href="MultiParaCrawl/v9b/is-mt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Burmese (sample file)" href="MultiParaCrawl/v9b/is-my_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/is-nb_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Nepali (sample file)" href="MultiParaCrawl/v9b/is-ne_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Dutch (sample file)" href="MultiParaCrawl/v9b/is-nl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/is-nn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Polish (sample file)" href="MultiParaCrawl/v9b/is-pl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Pushto (sample file)" href="MultiParaCrawl/v9b/is-ps_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="MultiParaCrawl/v9b/is-pt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="MultiParaCrawl/v9b/is-ro_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Russian (sample file)" href="MultiParaCrawl/v9b/is-ru_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Sinhala (sample file)" href="MultiParaCrawl/v9b/is-si_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="MultiParaCrawl/v9b/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="MultiParaCrawl/v9b/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Somali (sample file)" href="MultiParaCrawl/v9b/is-so_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swedish (sample file)" href="MultiParaCrawl/v9b/is-sv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swahili (sample file)" href="MultiParaCrawl/v9b/is-sw_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Tagalog (sample file)" href="MultiParaCrawl/v9b/is-tl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Ukrainian (sample file)" href="MultiParaCrawl/v9b/is-uk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Chinese (sample file)" href="MultiParaCrawl/v9b/is-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/is.zip">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/it.zip">it</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bulgarian' (2.5M links, 95.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Czech' (7.3M links, 247.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (6.7M links, 252.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (32.1M links, 1.2G tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (3.8M links, 137.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (33.8M links, 1.3G tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Estonian' (2.0M links, 68.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (5.6M links, 179.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (28.5M links, 1.2G tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Irish' (0.4M links, 17.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Croatian' (0.7M links, 36.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hungarian' (6.1M links, 211.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Icelandic' (0.7M links, 26.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-it.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Italian-Central Khmer (sample file)" href="MultiParaCrawl/v9b/it-km_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Korean (sample file)" href="MultiParaCrawl/v9b/it-ko_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Lithuanian (sample file)" href="MultiParaCrawl/v9b/it-lt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Latvian (sample file)" href="MultiParaCrawl/v9b/it-lv_sample.html">view</a></td><th>it</th>
<td><a rel="nofollow" title="Italian-Maltese (sample file)" href="MultiParaCrawl/v9b/it-mt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Burmese (sample file)" href="MultiParaCrawl/v9b/it-my_sample.html">view</a></td><td><a rel="nofollow" title="Italian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/it-nb_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Nepali (sample file)" href="MultiParaCrawl/v9b/it-ne_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="MultiParaCrawl/v9b/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/it-nn_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Polish (sample file)" href="MultiParaCrawl/v9b/it-pl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Pushto (sample file)" href="MultiParaCrawl/v9b/it-ps_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="MultiParaCrawl/v9b/it-pt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Romanian (sample file)" href="MultiParaCrawl/v9b/it-ro_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Russian (sample file)" href="MultiParaCrawl/v9b/it-ru_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Sinhala (sample file)" href="MultiParaCrawl/v9b/it-si_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovak (sample file)" href="MultiParaCrawl/v9b/it-sk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovenian (sample file)" href="MultiParaCrawl/v9b/it-sl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Somali (sample file)" href="MultiParaCrawl/v9b/it-so_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="MultiParaCrawl/v9b/it-sv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swahili (sample file)" href="MultiParaCrawl/v9b/it-sw_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Tagalog (sample file)" href="MultiParaCrawl/v9b/it-tl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/it-uk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Chinese (sample file)" href="MultiParaCrawl/v9b/it-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/it.zip">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/km.zip">km</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Bulgarian' (1.3k links, 42.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-km.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Czech' (2.8k links, 62.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Danish' (1.5k links, 49.5k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-German' (6.2k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Greek' (1.4k links, 38.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Spanish' (6.0k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Estonian' (1.2k links, 24.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-km.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Finnish' (2.0k links, 39.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-French' (4.1k links, 94.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Irish' (1.2k links, 39.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-km.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Croatian' (0.2k links, 6.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Hungarian' (2.8k links, 73.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Icelandic' (1.3k links, 39.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Italian' (2.9k links, 65.5k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-km.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Central Khmer-Korean (sample file)" href="MultiParaCrawl/v9b/km-ko_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Lithuanian (sample file)" href="MultiParaCrawl/v9b/km-lt_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Latvian (sample file)" href="MultiParaCrawl/v9b/km-lv_sample.html">view</a></td><th>km</th>
<td><a rel="nofollow" title="Central Khmer-Maltese (sample file)" href="MultiParaCrawl/v9b/km-mt_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Burmese (sample file)" href="MultiParaCrawl/v9b/km-my_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/km-nb_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Nepali (sample file)" href="MultiParaCrawl/v9b/km-ne_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Dutch (sample file)" href="MultiParaCrawl/v9b/km-nl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/km-nn_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Polish (sample file)" href="MultiParaCrawl/v9b/km-pl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Pushto (sample file)" href="MultiParaCrawl/v9b/km-ps_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Portuguese (sample file)" href="MultiParaCrawl/v9b/km-pt_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Romanian (sample file)" href="MultiParaCrawl/v9b/km-ro_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Russian (sample file)" href="MultiParaCrawl/v9b/km-ru_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Sinhala (sample file)" href="MultiParaCrawl/v9b/km-si_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Slovak (sample file)" href="MultiParaCrawl/v9b/km-sk_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Slovenian (sample file)" href="MultiParaCrawl/v9b/km-sl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Somali (sample file)" href="MultiParaCrawl/v9b/km-so_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Swedish (sample file)" href="MultiParaCrawl/v9b/km-sv_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Swahili (sample file)" href="MultiParaCrawl/v9b/km-sw_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Tagalog (sample file)" href="MultiParaCrawl/v9b/km-tl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Ukrainian (sample file)" href="MultiParaCrawl/v9b/km-uk_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Chinese (sample file)" href="MultiParaCrawl/v9b/km-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/km.zip">km</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/ko.zip">ko</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bulgarian' (0.2M links, 5.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Czech' (0.4M links, 10.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Danish' (0.4M links, 13.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-German' (1.3M links, 36.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Greek' (0.3M links, 7.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Spanish' (1.5M links, 45.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Estonian' (0.1M links, 2.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Finnish' (0.4M links, 9.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-French' (1.0M links, 31.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Irish' (23.0k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Croatian' (30.9k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hungarian' (0.4M links, 10.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Icelandic' (38.4k links, 1.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Italian' (0.6M links, 19.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Central Khmer' (0.5k links, 14.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-ko.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Korean-Lithuanian (sample file)" href="MultiParaCrawl/v9b/ko-lt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Latvian (sample file)" href="MultiParaCrawl/v9b/ko-lv_sample.html">view</a></td><th>ko</th>
<td><a rel="nofollow" title="Korean-Maltese (sample file)" href="MultiParaCrawl/v9b/ko-mt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Burmese (sample file)" href="MultiParaCrawl/v9b/ko-my_sample.html">view</a></td><td><a rel="nofollow" title="Korean-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/ko-nb_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Nepali (sample file)" href="MultiParaCrawl/v9b/ko-ne_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Dutch (sample file)" href="MultiParaCrawl/v9b/ko-nl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/ko-nn_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Polish (sample file)" href="MultiParaCrawl/v9b/ko-pl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Pushto (sample file)" href="MultiParaCrawl/v9b/ko-ps_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Portuguese (sample file)" href="MultiParaCrawl/v9b/ko-pt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Romanian (sample file)" href="MultiParaCrawl/v9b/ko-ro_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Russian (sample file)" href="MultiParaCrawl/v9b/ko-ru_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Sinhala (sample file)" href="MultiParaCrawl/v9b/ko-si_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Slovak (sample file)" href="MultiParaCrawl/v9b/ko-sk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Slovenian (sample file)" href="MultiParaCrawl/v9b/ko-sl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Somali (sample file)" href="MultiParaCrawl/v9b/ko-so_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Swedish (sample file)" href="MultiParaCrawl/v9b/ko-sv_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Swahili (sample file)" href="MultiParaCrawl/v9b/ko-sw_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Tagalog (sample file)" href="MultiParaCrawl/v9b/ko-tl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Ukrainian (sample file)" href="MultiParaCrawl/v9b/ko-uk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Chinese (sample file)" href="MultiParaCrawl/v9b/ko-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/ko.zip">ko</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/lt.zip">lt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (1.8M links, 62.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Czech' (4.0M links, 112.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Danish' (2.7M links, 91.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-German' (5.5M links, 156.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Greek' (1.9M links, 63.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Spanish' (5.6M links, 174.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (2.2M links, 63.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' (3.1M links, 85.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (4.0M links, 137.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Irish' (0.4M links, 13.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' (0.5M links, 21.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hungarian' (3.7M links, 107.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' (0.5M links, 14.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Italian' (2.9M links, 98.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Central Khmer' (1.3k links, 28.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Korean' (0.1M links, 3.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-lt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="MultiParaCrawl/v9b/lt-lv_sample.html">view</a></td><th>lt</th>
<td><a rel="nofollow" title="Lithuanian-Maltese (sample file)" href="MultiParaCrawl/v9b/lt-mt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Burmese (sample file)" href="MultiParaCrawl/v9b/lt-my_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/lt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Nepali (sample file)" href="MultiParaCrawl/v9b/lt-ne_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Dutch (sample file)" href="MultiParaCrawl/v9b/lt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/lt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Polish (sample file)" href="MultiParaCrawl/v9b/lt-pl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Pushto (sample file)" href="MultiParaCrawl/v9b/lt-ps_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="MultiParaCrawl/v9b/lt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Romanian (sample file)" href="MultiParaCrawl/v9b/lt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Russian (sample file)" href="MultiParaCrawl/v9b/lt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Sinhala (sample file)" href="MultiParaCrawl/v9b/lt-si_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="MultiParaCrawl/v9b/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="MultiParaCrawl/v9b/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Somali (sample file)" href="MultiParaCrawl/v9b/lt-so_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swedish (sample file)" href="MultiParaCrawl/v9b/lt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swahili (sample file)" href="MultiParaCrawl/v9b/lt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Tagalog (sample file)" href="MultiParaCrawl/v9b/lt-tl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/lt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Chinese (sample file)" href="MultiParaCrawl/v9b/lt-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/lt.zip">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/lv.zip">lv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (1.9M links, 63.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Czech' (3.9M links, 113.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Danish' (2.7M links, 96.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-German' (5.1M links, 151.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Greek' (1.9M links, 62.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Spanish' (5.1M links, 165.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (2.3M links, 67.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' (3.1M links, 85.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (3.7M links, 133.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Irish' (0.4M links, 15.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' (0.5M links, 22.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hungarian' (3.6M links, 104.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' (0.6M links, 17.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Italian' (2.7M links, 95.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Central Khmer' (1.3k links, 29.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Korean' (0.1M links, 2.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (3.4M links, 99.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-lv.xml.gz">ces</a></td>
<th></th>
<th>lv</th>
<td><a rel="nofollow" title="Latvian-Maltese (sample file)" href="MultiParaCrawl/v9b/lv-mt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Burmese (sample file)" href="MultiParaCrawl/v9b/lv-my_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/lv-nb_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Nepali (sample file)" href="MultiParaCrawl/v9b/lv-ne_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Dutch (sample file)" href="MultiParaCrawl/v9b/lv-nl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/lv-nn_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Polish (sample file)" href="MultiParaCrawl/v9b/lv-pl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Pushto (sample file)" href="MultiParaCrawl/v9b/lv-ps_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="MultiParaCrawl/v9b/lv-pt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Romanian (sample file)" href="MultiParaCrawl/v9b/lv-ro_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Russian (sample file)" href="MultiParaCrawl/v9b/lv-ru_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Sinhala (sample file)" href="MultiParaCrawl/v9b/lv-si_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="MultiParaCrawl/v9b/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="MultiParaCrawl/v9b/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Somali (sample file)" href="MultiParaCrawl/v9b/lv-so_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swedish (sample file)" href="MultiParaCrawl/v9b/lv-sv_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swahili (sample file)" href="MultiParaCrawl/v9b/lv-sw_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Tagalog (sample file)" href="MultiParaCrawl/v9b/lv-tl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/lv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Chinese (sample file)" href="MultiParaCrawl/v9b/lv-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/lv.zip">lv</a></th></tr>
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
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/mt.zip">mt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bulgarian' (0.4M links, 18.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Czech' (0.6M links, 23.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Danish' (0.5M links, 21.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-German' (0.7M links, 28.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Greek' (0.4M links, 20.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Spanish' (0.7M links, 30.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Estonian' (0.4M links, 18.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Finnish' (0.5M links, 19.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-French' (0.6M links, 31.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Irish' (0.2M links, 8.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Croatian' (0.1M links, 7.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Hungarian' (0.5M links, 23.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Icelandic' (0.1M links, 3.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Italian' (0.5M links, 24.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Central Khmer' (0.5k links, 11.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Korean' (8.1k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Lithuanian' (0.5M links, 21.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Latvian' (0.6M links, 24.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-mt.xml.gz">ces</a></td>
<th>mt</th>
<th></th>
<td><a rel="nofollow" title="Maltese-Burmese (sample file)" href="MultiParaCrawl/v9b/mt-my_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/mt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Nepali (sample file)" href="MultiParaCrawl/v9b/mt-ne_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Dutch (sample file)" href="MultiParaCrawl/v9b/mt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/mt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Polish (sample file)" href="MultiParaCrawl/v9b/mt-pl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Pushto (sample file)" href="MultiParaCrawl/v9b/mt-ps_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Portuguese (sample file)" href="MultiParaCrawl/v9b/mt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Romanian (sample file)" href="MultiParaCrawl/v9b/mt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Russian (sample file)" href="MultiParaCrawl/v9b/mt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Sinhala (sample file)" href="MultiParaCrawl/v9b/mt-si_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovak (sample file)" href="MultiParaCrawl/v9b/mt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovenian (sample file)" href="MultiParaCrawl/v9b/mt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Somali (sample file)" href="MultiParaCrawl/v9b/mt-so_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swedish (sample file)" href="MultiParaCrawl/v9b/mt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swahili (sample file)" href="MultiParaCrawl/v9b/mt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Tagalog (sample file)" href="MultiParaCrawl/v9b/mt-tl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Ukrainian (sample file)" href="MultiParaCrawl/v9b/mt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Chinese (sample file)" href="MultiParaCrawl/v9b/mt-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/mt.zip">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/my.zip">my</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Bulgarian' (0.4k links, 7.4k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-my.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Czech' (1.0k links, 19.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Danish' (0.3k links, 10.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-German' (1.9k links, 31.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Greek' (0.4k links, 7.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Spanish' (2.4k links, 38.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Estonian' (0.4k links, 7.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-my.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Finnish' (0.7k links, 11.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-French' (1.2k links, 24.5k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Irish' (0.3k links, 11.4k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-my.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Croatian' (38 links, 1.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Hungarian' (0.8k links, 18.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Icelandic' (0.3k links, 7.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Italian' (0.8k links, 15.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Central Khmer' (5.5k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Korean' (0.3k links, 8.4k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Lithuanian' (0.6k links, 12.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Latvian' (0.7k links, 14.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-my.xml.gz">ces</a></td>
<th>my</th>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Maltese' (0.2k links, 6.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-my.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Burmese-BokmÃ¥l, Norwegian (sample file)" href="MultiParaCrawl/v9b/my-nb_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Nepali (sample file)" href="MultiParaCrawl/v9b/my-ne_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Dutch (sample file)" href="MultiParaCrawl/v9b/my-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Burmese-Polish (sample file)" href="MultiParaCrawl/v9b/my-pl_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Pushto (sample file)" href="MultiParaCrawl/v9b/my-ps_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Portuguese (sample file)" href="MultiParaCrawl/v9b/my-pt_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Romanian (sample file)" href="MultiParaCrawl/v9b/my-ro_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Russian (sample file)" href="MultiParaCrawl/v9b/my-ru_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Sinhala (sample file)" href="MultiParaCrawl/v9b/my-si_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Slovak (sample file)" href="MultiParaCrawl/v9b/my-sk_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Slovenian (sample file)" href="MultiParaCrawl/v9b/my-sl_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Somali (sample file)" href="MultiParaCrawl/v9b/my-so_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Swedish (sample file)" href="MultiParaCrawl/v9b/my-sv_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Swahili (sample file)" href="MultiParaCrawl/v9b/my-sw_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Tagalog (sample file)" href="MultiParaCrawl/v9b/my-tl_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Ukrainian (sample file)" href="MultiParaCrawl/v9b/my-uk_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Chinese (sample file)" href="MultiParaCrawl/v9b/my-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/my.zip">my</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/nb.zip">nb</a></th>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bulgarian' (1.3M links, 48.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Czech' (3.9M links, 135.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Danish' (6.5M links, 229.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-German' (9.6M links, 327.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Greek' (1.7M links, 59.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Spanish' (9.2M links, 333.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Estonian' (1.1M links, 37.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Finnish' (4.1M links, 129.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-French' (5.9M links, 232.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Irish' (0.3M links, 10.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Croatian' (0.4M links, 18.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hungarian' (3.1M links, 107.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Icelandic' (0.8M links, 28.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Italian' (4.1M links, 155.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Central Khmer' (0.8k links, 31.4k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Korean' (0.2M links, 6.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Lithuanian' (1.6M links, 51.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Latvian' (1.6M links, 53.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-nb.xml.gz">ces</a></td>
<th>nb</th>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Maltese' (0.1M links, 3.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Burmese' (0.2k links, 5.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-nb.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Nepali (sample file)" href="MultiParaCrawl/v9b/nb-ne_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Dutch (sample file)" href="MultiParaCrawl/v9b/nb-nl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/nb-nn_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Polish (sample file)" href="MultiParaCrawl/v9b/nb-pl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Pushto (sample file)" href="MultiParaCrawl/v9b/nb-ps_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Portuguese (sample file)" href="MultiParaCrawl/v9b/nb-pt_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Romanian (sample file)" href="MultiParaCrawl/v9b/nb-ro_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Russian (sample file)" href="MultiParaCrawl/v9b/nb-ru_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Sinhala (sample file)" href="MultiParaCrawl/v9b/nb-si_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovak (sample file)" href="MultiParaCrawl/v9b/nb-sk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovenian (sample file)" href="MultiParaCrawl/v9b/nb-sl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Somali (sample file)" href="MultiParaCrawl/v9b/nb-so_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Swedish (sample file)" href="MultiParaCrawl/v9b/nb-sv_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Swahili (sample file)" href="MultiParaCrawl/v9b/nb-sw_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Tagalog (sample file)" href="MultiParaCrawl/v9b/nb-tl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/nb-uk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Chinese (sample file)" href="MultiParaCrawl/v9b/nb-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/nb.zip">nb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/ne.zip">ne</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Bulgarian' (3.4k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Catalan' (1 links, 2 tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ca-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Czech' (6.1k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Danish' (4.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-German' (12.2k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Greek' (3.6k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Spanish' (11.9k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Estonian' (3.2k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Basque' (1 links, 2 tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/eu-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Finnish' (4.3k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-French' (8.4k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Irish' (4.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Galician' (1 links, 2 tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/gl-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Croatian' (0.9k links, 52.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Hungarian' (5.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Icelandic' (3.0k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Italian' (5.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Central Khmer' (12.4k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Korean' (1.2k links, 42.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Lithuanian' (4.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Latvian' (4.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-ne.xml.gz">ces</a></td>
<th>ne</th>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Maltese' (1.5k links, 54.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Burmese' (3.4k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-BokmÃ¥l, Norwegian' (3.0k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-ne.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Nepali-Dutch (sample file)" href="MultiParaCrawl/v9b/ne-nl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/ne-nn_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Polish (sample file)" href="MultiParaCrawl/v9b/ne-pl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Pushto (sample file)" href="MultiParaCrawl/v9b/ne-ps_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Portuguese (sample file)" href="MultiParaCrawl/v9b/ne-pt_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Romanian (sample file)" href="MultiParaCrawl/v9b/ne-ro_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Russian (sample file)" href="MultiParaCrawl/v9b/ne-ru_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Sinhala (sample file)" href="MultiParaCrawl/v9b/ne-si_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Slovak (sample file)" href="MultiParaCrawl/v9b/ne-sk_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Slovenian (sample file)" href="MultiParaCrawl/v9b/ne-sl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Somali (sample file)" href="MultiParaCrawl/v9b/ne-so_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Swedish (sample file)" href="MultiParaCrawl/v9b/ne-sv_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Swahili (sample file)" href="MultiParaCrawl/v9b/ne-sw_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Tagalog (sample file)" href="MultiParaCrawl/v9b/ne-tl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Ukrainian (sample file)" href="MultiParaCrawl/v9b/ne-uk_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Chinese (sample file)" href="MultiParaCrawl/v9b/ne-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/ne.zip">ne</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/nl.zip">nl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bulgarian' (2.7M links, 99.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (8.9M links, 287.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (9.7M links, 343.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (34.0M links, 1.1G tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (4.3M links, 143.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (28.8M links, 980.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Estonian' (2.2M links, 72.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (7.5M links, 226.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (21.9M links, 813.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Irish' (0.4M links, 16.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Croatian' (0.6M links, 30.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (7.1M links, 229.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Icelandic' (0.8M links, 26.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (13.1M links, 469.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Central Khmer' (1.7k links, 58.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Korean' (0.4M links, 14.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Lithuanian' (3.2M links, 100.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latvian' (3.0M links, 99.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-nl.xml.gz">ces</a></td>
<th>nl</th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Maltese' (0.5M links, 22.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Burmese' (0.4k links, 9.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-BokmÃ¥l, Norwegian' (5.5M links, 199.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Nepali' (4.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-nl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Norwegian Nynorsk (sample file)" href="MultiParaCrawl/v9b/nl-nn_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Polish (sample file)" href="MultiParaCrawl/v9b/nl-pl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Pushto (sample file)" href="MultiParaCrawl/v9b/nl-ps_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="MultiParaCrawl/v9b/nl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Romanian (sample file)" href="MultiParaCrawl/v9b/nl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Russian (sample file)" href="MultiParaCrawl/v9b/nl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Sinhala (sample file)" href="MultiParaCrawl/v9b/nl-si_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovak (sample file)" href="MultiParaCrawl/v9b/nl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovenian (sample file)" href="MultiParaCrawl/v9b/nl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Somali (sample file)" href="MultiParaCrawl/v9b/nl-so_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="MultiParaCrawl/v9b/nl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swahili (sample file)" href="MultiParaCrawl/v9b/nl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Tagalog (sample file)" href="MultiParaCrawl/v9b/nl-tl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Ukrainian (sample file)" href="MultiParaCrawl/v9b/nl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="MultiParaCrawl/v9b/nl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/nl.zip">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/nn.zip">nn</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Bulgarian' (19.4k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-nn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Czech' (35.4k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Danish' (22.6k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-German' (99.7k links, 3.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Greek' (27.6k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Spanish' (0.1M links, 4.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Estonian' (12.3k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-nn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Finnish' (28.5k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-French' (55.8k links, 2.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Irish' (3.0k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-nn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Croatian' (3.5k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Hungarian' (34.0k links, 1.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Icelandic' (10.0k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Italian' (37.0k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Central Khmer' (7 links, 66 tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Korean' (5.2k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Lithuanian' (20.5k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Latvian' (14.9k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-nn.xml.gz">ces</a></td>
<th>nn</th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Maltese' (1.4k links, 51.8k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-nn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-BokmÃ¥l, Norwegian' (56.7k links, 2.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Nepali' (23 links, 1.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Dutch' (51.6k links, 1.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-nn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Norwegian Nynorsk-Polish (sample file)" href="MultiParaCrawl/v9b/nn-pl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Pushto (sample file)" href="MultiParaCrawl/v9b/nn-ps_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Portuguese (sample file)" href="MultiParaCrawl/v9b/nn-pt_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Romanian (sample file)" href="MultiParaCrawl/v9b/nn-ro_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Russian (sample file)" href="MultiParaCrawl/v9b/nn-ru_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Sinhala (sample file)" href="MultiParaCrawl/v9b/nn-si_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Slovak (sample file)" href="MultiParaCrawl/v9b/nn-sk_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Slovenian (sample file)" href="MultiParaCrawl/v9b/nn-sl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Somali (sample file)" href="MultiParaCrawl/v9b/nn-so_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Swedish (sample file)" href="MultiParaCrawl/v9b/nn-sv_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Swahili (sample file)" href="MultiParaCrawl/v9b/nn-sw_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Tagalog (sample file)" href="MultiParaCrawl/v9b/nn-tl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Ukrainian (sample file)" href="MultiParaCrawl/v9b/nn-uk_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Chinese (sample file)" href="MultiParaCrawl/v9b/nn-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/nn.zip">nn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/pl.zip">pl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bulgarian' (2.0M links, 68.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Czech' (7.7M links, 209.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Danish' (4.6M links, 154.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (15.1M links, 476.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Greek' (2.6M links, 83.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (14.4M links, 442.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Estonian' (1.5M links, 50.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Finnish' (4.0M links, 113.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (11.0M links, 401.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Irish' (0.3M links, 12.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Croatian' (0.5M links, 22.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hungarian' (5.8M links, 160.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Icelandic' (0.5M links, 14.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Italian' (7.8M links, 275.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Central Khmer' (0.9k links, 20.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Korean' (0.3M links, 7.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Lithuanian' (2.3M links, 73.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Latvian' (2.2M links, 71.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-pl.xml.gz">ces</a></td>
<th>pl</th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Maltese' (0.4M links, 19.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Burmese' (0.3k links, 6.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-BokmÃ¥l, Norwegian' (2.8M links, 93.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Nepali' (2.4k links, 86.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (7.5M links, 234.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Norwegian Nynorsk' (9.2k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-pl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Polish-Pushto (sample file)" href="MultiParaCrawl/v9b/pl-ps_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="MultiParaCrawl/v9b/pl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Romanian (sample file)" href="MultiParaCrawl/v9b/pl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Russian (sample file)" href="MultiParaCrawl/v9b/pl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Sinhala (sample file)" href="MultiParaCrawl/v9b/pl-si_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovak (sample file)" href="MultiParaCrawl/v9b/pl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovenian (sample file)" href="MultiParaCrawl/v9b/pl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Somali (sample file)" href="MultiParaCrawl/v9b/pl-so_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swedish (sample file)" href="MultiParaCrawl/v9b/pl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swahili (sample file)" href="MultiParaCrawl/v9b/pl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Tagalog (sample file)" href="MultiParaCrawl/v9b/pl-tl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="MultiParaCrawl/v9b/pl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Chinese (sample file)" href="MultiParaCrawl/v9b/pl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/pl.zip">pl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/ps.zip">ps</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Bulgarian' (1.5k links, 46.5k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-ps.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Czech' (3.4k links, 96.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Danish' (2.2k links, 78.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-German' (4.9k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Greek' (1.9k links, 54.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Spanish' (4.8k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Estonian' (2.0k links, 53.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-ps.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Finnish' (2.2k links, 56.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-French' (3.6k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Irish' (2.0k links, 79.8k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-ps.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Croatian' (0.5k links, 23.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Hungarian' (2.7k links, 76.4k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Icelandic' (1.7k links, 53.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Italian' (2.7k links, 78.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Central Khmer' (1.1k links, 60.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Korean' (0.3k links, 4.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Lithuanian' (2.7k links, 75.4k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Latvian' (2.9k links, 88.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-ps.xml.gz">ces</a></td>
<th>ps</th>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Maltese' (1.1k links, 34.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Burmese' (0.6k links, 44.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-BokmÃ¥l, Norwegian' (1.3k links, 49.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Nepali' (4.0k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Dutch' (3.0k links, 78.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Norwegian Nynorsk' (1 links, 6 tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Polish' (2.0k links, 58.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-ps.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Pushto-Portuguese (sample file)" href="MultiParaCrawl/v9b/ps-pt_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Romanian (sample file)" href="MultiParaCrawl/v9b/ps-ro_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Russian (sample file)" href="MultiParaCrawl/v9b/ps-ru_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Sinhala (sample file)" href="MultiParaCrawl/v9b/ps-si_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Slovak (sample file)" href="MultiParaCrawl/v9b/ps-sk_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Slovenian (sample file)" href="MultiParaCrawl/v9b/ps-sl_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Somali (sample file)" href="MultiParaCrawl/v9b/ps-so_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Swedish (sample file)" href="MultiParaCrawl/v9b/ps-sv_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Swahili (sample file)" href="MultiParaCrawl/v9b/ps-sw_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Tagalog (sample file)" href="MultiParaCrawl/v9b/ps-tl_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Ukrainian (sample file)" href="MultiParaCrawl/v9b/ps-uk_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Chinese (sample file)" href="MultiParaCrawl/v9b/ps-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/ps.zip">ps</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/pt.zip">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (2.9M links, 110.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (8.1M links, 256.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (7.5M links, 269.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (26.8M links, 902.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (3.9M links, 136.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (37.6M links, 1.4G tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (1.9M links, 66.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (5.8M links, 179.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (23.7M links, 926.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Irish' (0.4M links, 18.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (0.6M links, 29.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (6.4M links, 207.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (0.6M links, 23.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (15.7M links, 590.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Central Khmer' (1.5k links, 44.8k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Korean' (0.6M links, 19.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (2.9M links, 96.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (2.6M links, 92.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-pt.xml.gz">ces</a></td>
<th>pt</th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Maltese' (0.5M links, 23.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Burmese' (0.4k links, 10.8k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-BokmÃ¥l, Norwegian' (4.4M links, 161.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Nepali' (5.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (13.0M links, 449.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Norwegian Nynorsk' (23.5k links, 1.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (7.6M links, 242.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Pushto' (2.3k links, 76.4k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-pt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="MultiParaCrawl/v9b/pt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="MultiParaCrawl/v9b/pt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Sinhala (sample file)" href="MultiParaCrawl/v9b/pt-si_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="MultiParaCrawl/v9b/pt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="MultiParaCrawl/v9b/pt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Somali (sample file)" href="MultiParaCrawl/v9b/pt-so_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="MultiParaCrawl/v9b/pt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swahili (sample file)" href="MultiParaCrawl/v9b/pt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Tagalog (sample file)" href="MultiParaCrawl/v9b/pt-tl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="MultiParaCrawl/v9b/pt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="MultiParaCrawl/v9b/pt-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/pt.zip">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/ro.zip">ro</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (3.0M links, 110.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' (6.7M links, 204.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Danish' (4.6M links, 176.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-German' (10.9M links, 361.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (2.8M links, 103.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Spanish' (12.0M links, 429.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Estonian' (1.9M links, 64.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' (4.2M links, 131.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-French' (7.9M links, 307.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Irish' (0.4M links, 15.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (0.7M links, 32.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hungarian' (6.1M links, 193.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Icelandic' (0.5M links, 19.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Italian' (5.4M links, 204.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Central Khmer' (1.7k links, 65.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Korean' (0.2M links, 7.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Lithuanian' (2.8M links, 93.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Latvian' (2.8M links, 94.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-ro.xml.gz">ces</a></td>
<th>ro</th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Maltese' (0.5M links, 23.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Burmese' (0.4k links, 9.8k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-BokmÃ¥l, Norwegian' (2.5M links, 95.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Nepali' (4.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Dutch' (6.4M links, 226.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Norwegian Nynorsk' (21.0k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Polish' (4.0M links, 132.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Pushto' (2.2k links, 72.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (6.2M links, 223.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-ro.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Russian (sample file)" href="MultiParaCrawl/v9b/ro-ru_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Sinhala (sample file)" href="MultiParaCrawl/v9b/ro-si_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovak (sample file)" href="MultiParaCrawl/v9b/ro-sk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovenian (sample file)" href="MultiParaCrawl/v9b/ro-sl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Somali (sample file)" href="MultiParaCrawl/v9b/ro-so_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swedish (sample file)" href="MultiParaCrawl/v9b/ro-sv_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swahili (sample file)" href="MultiParaCrawl/v9b/ro-sw_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Tagalog (sample file)" href="MultiParaCrawl/v9b/ro-tl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/ro-uk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Chinese (sample file)" href="MultiParaCrawl/v9b/ro-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/ro.zip">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/ru.zip">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bulgarian' (0.2M links, 6.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Catalan' (3 links, 3 tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ca-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (0.4M links, 10.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Danish' (0.2M links, 9.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (1.1M links, 34.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Greek' (0.2M links, 7.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (1.2M links, 40.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Estonian' (0.1M links, 3.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Basque' (3 links, 3 tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/eu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Finnish' (0.3M links, 8.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (0.8M links, 29.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Irish' (30.6k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Galician' (3 links, 3 tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/gl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Croatian' (32.8k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hungarian' (0.3M links, 10.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Icelandic' (47.8k links, 1.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Italian' (0.5M links, 17.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Central Khmer' (2.4k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Korean' (78.5k links, 2.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Lithuanian' (0.2M links, 5.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Latvian' (0.1M links, 4.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-ru.xml.gz">ces</a></td>
<th>ru</th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Maltese' (13.6k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Burmese' (1.4k links, 81.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-BokmÃ¥l, Norwegian' (0.2M links, 6.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Nepali' (4.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Dutch' (0.5M links, 16.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Norwegian Nynorsk' (4.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Polish' (0.3M links, 7.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Pushto' (0.5k links, 17.4k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (0.5M links, 18.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Romanian' (0.4M links, 12.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ro-ru.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Russian-Sinhala (sample file)" href="MultiParaCrawl/v9b/ru-si_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovak (sample file)" href="MultiParaCrawl/v9b/ru-sk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovenian (sample file)" href="MultiParaCrawl/v9b/ru-sl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Somali (sample file)" href="MultiParaCrawl/v9b/ru-so_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swedish (sample file)" href="MultiParaCrawl/v9b/ru-sv_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swahili (sample file)" href="MultiParaCrawl/v9b/ru-sw_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Tagalog (sample file)" href="MultiParaCrawl/v9b/ru-tl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/ru-uk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Chinese (sample file)" href="MultiParaCrawl/v9b/ru-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/ru.zip">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/si.zip">si</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bulgarian' (13.7k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Czech' (21.4k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Danish' (11.7k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-German' (48.0k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Greek' (13.6k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Spanish' (50.2k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Estonian' (7.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Finnish' (13.7k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-French' (32.3k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Irish' (5.5k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Croatian' (2.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hungarian' (19.5k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Icelandic' (6.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Italian' (19.0k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Central Khmer' (19.7k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Korean' (2.2k links, 59.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Lithuanian' (11.6k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Latvian' (11.3k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-si.xml.gz">ces</a></td>
<th>si</th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Maltese' (2.9k links, 79.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Burmese' (5.5k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-BokmÃ¥l, Norwegian' (8.0k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Nepali' (33.8k links, 2.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Dutch' (25.6k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Norwegian Nynorsk' (0.1k links, 5.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Polish' (7.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Pushto' (6.3k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Portuguese' (21.1k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Romanian' (19.0k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ro-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Russian' (12.4k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ru-si.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Sinhala-Slovak (sample file)" href="MultiParaCrawl/v9b/si-sk_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Slovenian (sample file)" href="MultiParaCrawl/v9b/si-sl_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Somali (sample file)" href="MultiParaCrawl/v9b/si-so_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Swedish (sample file)" href="MultiParaCrawl/v9b/si-sv_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Swahili (sample file)" href="MultiParaCrawl/v9b/si-sw_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Tagalog (sample file)" href="MultiParaCrawl/v9b/si-tl_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Ukrainian (sample file)" href="MultiParaCrawl/v9b/si-uk_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Chinese (sample file)" href="MultiParaCrawl/v9b/si-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/si.zip">si</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/sk.zip">sk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' (2.6M links, 82.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Czech' (9.7M links, 250.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Danish' (3.8M links, 130.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-German' (9.5M links, 280.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Greek' (2.5M links, 80.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Spanish' (9.0M links, 273.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' (1.9M links, 59.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' (4.1M links, 111.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-French' (5.9M links, 203.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Irish' (0.4M links, 14.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' (0.6M links, 28.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hungarian' (6.9M links, 182.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' (0.6M links, 20.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Italian' (4.4M links, 148.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Central Khmer' (1.2k links, 25.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Korean' (0.2M links, 3.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' (3.0M links, 86.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' (3.1M links, 93.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-sk.xml.gz">ces</a></td>
<th>sk</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Maltese' (0.5M links, 23.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Burmese' (0.4k links, 9.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-BokmÃ¥l, Norwegian' (2.2M links, 77.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Nepali' (3.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Dutch' (5.5M links, 171.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Norwegian Nynorsk' (17.5k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Polish' (4.2M links, 119.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Pushto' (2.4k links, 72.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (4.9M links, 150.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Romanian' (4.4M links, 143.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ro-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Russian' (0.1M links, 3.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ru-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Sinhala' (8.4k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/si-sk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="MultiParaCrawl/v9b/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Somali (sample file)" href="MultiParaCrawl/v9b/sk-so_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swedish (sample file)" href="MultiParaCrawl/v9b/sk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swahili (sample file)" href="MultiParaCrawl/v9b/sk-sw_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Tagalog (sample file)" href="MultiParaCrawl/v9b/sk-tl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="MultiParaCrawl/v9b/sk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Chinese (sample file)" href="MultiParaCrawl/v9b/sk-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/sk.zip">sk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/sl.zip">sl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (1.7M links, 60.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' (3.4M links, 108.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Danish' (2.3M links, 84.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-German' (5.0M links, 159.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' (1.5M links, 52.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Spanish' (4.6M links, 161.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (1.6M links, 51.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' (2.4M links, 71.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (3.5M links, 134.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Irish' (0.3M links, 11.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (0.6M links, 26.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hungarian' (3.0M links, 94.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (0.4M links, 14.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Italian' (2.8M links, 102.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Central Khmer' (0.9k links, 19.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Korean' (78.6k links, 1.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (2.0M links, 64.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (2.1M links, 70.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-sl.xml.gz">ces</a></td>
<th>sl</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Maltese' (0.5M links, 21.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Burmese' (0.3k links, 5.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-BokmÃ¥l, Norwegian' (1.3M links, 46.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Nepali' (2.9k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Dutch' (3.2M links, 111.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Norwegian Nynorsk' (8.1k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Polish' (2.0M links, 67.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Pushto' (1.9k links, 55.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (2.6M links, 95.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Romanian' (2.7M links, 98.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ro-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Russian' (69.2k links, 1.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ru-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Sinhala' (6.5k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/si-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' (2.9M links, 93.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Somali (sample file)" href="MultiParaCrawl/v9b/sl-so_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swedish (sample file)" href="MultiParaCrawl/v9b/sl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swahili (sample file)" href="MultiParaCrawl/v9b/sl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Tagalog (sample file)" href="MultiParaCrawl/v9b/sl-tl_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="MultiParaCrawl/v9b/sl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Chinese (sample file)" href="MultiParaCrawl/v9b/sl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/sl.zip">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/so.zip">so</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Bulgarian' (4.2k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-so.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Czech' (4.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Danish' (3.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-German' (15.9k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Greek' (5.2k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Spanish' (22.7k links, 1.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Estonian' (0.7k links, 35.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-so.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Finnish' (5.0k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-French' (9.7k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Irish' (0.9k links, 44.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-so.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Croatian' (1.0k links, 65.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Hungarian' (6.1k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Icelandic' (3.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Italian' (8.1k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Central Khmer' (0.2k links, 12.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Korean' (0.9k links, 49.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Lithuanian' (3.9k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Latvian' (1.3k links, 69.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-so.xml.gz">ces</a></td>
<th>so</th>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Maltese' (0.3k links, 16.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Burmese' (56 links, 3.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-BokmÃ¥l, Norwegian' (2.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Nepali' (0.4k links, 28.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Dutch' (7.3k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Norwegian Nynorsk' (0.9k links, 60.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Polish' (0.8k links, 39.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Pushto' (64 links, 3.4k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Portuguese' (6.5k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Romanian' (14.5k links, 1.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ro-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Russian' (1.9k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ru-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Sinhala' (0.4k links, 23.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/si-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Slovak' (4.1k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sk-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Slovenian' (0.4k links, 16.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sl-so.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Somali-Swedish (sample file)" href="MultiParaCrawl/v9b/so-sv_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Swahili (sample file)" href="MultiParaCrawl/v9b/so-sw_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Tagalog (sample file)" href="MultiParaCrawl/v9b/so-tl_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Ukrainian (sample file)" href="MultiParaCrawl/v9b/so-uk_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Chinese (sample file)" href="MultiParaCrawl/v9b/so-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/so.zip">so</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/sv.zip">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bulgarian' (2.3M links, 82.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Czech' (7.5M links, 227.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (9.9M links, 336.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (20.5M links, 605.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Greek' (3.6M links, 115.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (19.8M links, 625.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Estonian' (2.3M links, 69.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (8.8M links, 247.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (12.5M links, 432.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Irish' (0.4M links, 16.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Croatian' (0.6M links, 28.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hungarian' (6.1M links, 186.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Icelandic' (0.8M links, 26.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (8.4M links, 285.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Central Khmer' (1.7k links, 55.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Korean' (0.4M links, 10.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Lithuanian' (3.1M links, 92.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Latvian' (3.1M links, 94.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-sv.xml.gz">ces</a></td>
<th>sv</th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Maltese' (0.5M links, 21.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Burmese' (0.4k links, 9.5k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-BokmÃ¥l, Norwegian' (6.1M links, 212.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Nepali' (5.4k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (13.1M links, 407.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Norwegian Nynorsk' (20.8k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Polish' (5.5M links, 162.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Pushto' (2.1k links, 62.0k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (9.6M links, 304.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Romanian' (5.1M links, 179.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ro-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Russian' (0.3M links, 10.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ru-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Sinhala' (12.9k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/si-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovak' (4.6M links, 137.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovenian' (2.5M links, 82.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Somali' (4.0k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/so-sv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swedish-Swahili (sample file)" href="MultiParaCrawl/v9b/sv-sw_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Tagalog (sample file)" href="MultiParaCrawl/v9b/sv-tl_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Ukrainian (sample file)" href="MultiParaCrawl/v9b/sv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Chinese (sample file)" href="MultiParaCrawl/v9b/sv-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/sv.zip">sv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/sw.zip">sw</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Bulgarian' (21.7k links, 1.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Czech' (26.5k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Danish' (20.1k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-German' (71.4k links, 3.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Greek' (27.9k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Spanish' (0.1M links, 4.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Estonian' (8.0k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Finnish' (25.5k links, 1.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-French' (53.1k links, 2.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Irish' (8.7k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Croatian' (5.5k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Hungarian' (29.7k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Icelandic' (15.3k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Italian' (40.0k links, 2.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Central Khmer' (0.9k links, 44.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Korean' (8.1k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Lithuanian' (22.8k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Latvian' (14.9k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-sw.xml.gz">ces</a></td>
<th>sw</th>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Maltese' (3.8k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Burmese' (0.5k links, 25.6k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-BokmÃ¥l, Norwegian' (15.3k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Nepali' (2.2k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Dutch' (39.4k links, 1.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Norwegian Nynorsk' (2.9k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Polish' (11.8k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Pushto' (0.7k links, 32.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Portuguese' (40.3k links, 1.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Romanian' (56.0k links, 2.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ro-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Russian' (21.6k links, 1.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ru-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Sinhala' (5.2k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/si-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovak' (25.3k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovenian' (8.8k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Somali' (1.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/so-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Swedish' (27.1k links, 1.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sv-sw.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swahili-Tagalog (sample file)" href="MultiParaCrawl/v9b/sw-tl_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Ukrainian (sample file)" href="MultiParaCrawl/v9b/sw-uk_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Chinese (sample file)" href="MultiParaCrawl/v9b/sw-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/sw.zip">sw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/tl.zip">tl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Bulgarian' (29.5k links, 1.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Czech' (36.6k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Danish' (40.8k links, 2.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-German' (95.9k links, 5.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Greek' (35.9k links, 1.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Spanish' (0.1M links, 7.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Estonian' (13.3k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Finnish' (34.8k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-French' (77.5k links, 4.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Irish' (9.2k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Croatian' (6.3k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Hungarian' (34.0k links, 1.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Icelandic' (16.0k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Italian' (50.0k links, 2.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Central Khmer' (0.6k links, 27.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Korean' (38.4k links, 1.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Lithuanian' (21.8k links, 1.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Latvian' (15.4k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-tl.xml.gz">ces</a></td>
<th>tl</th>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Maltese' (4.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Burmese' (0.4k links, 20.3k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-BokmÃ¥l, Norwegian' (18.3k links, 1.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Nepali' (1.4k links, 85.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Dutch' (43.9k links, 2.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Norwegian Nynorsk' (3.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Polish' (15.2k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Pushto' (0.4k links, 20.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Portuguese' (60.4k links, 3.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Romanian' (62.2k links, 3.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ro-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Russian' (27.4k links, 1.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ru-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Sinhala' (3.7k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/si-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Slovak' (26.9k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sk-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Slovenian' (10.2k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sl-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Somali' (0.1k links, 7.2k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/so-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Swedish' (30.7k links, 1.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sv-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Swahili' (28.6k links, 1.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sw-tl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Tagalog-Ukrainian (sample file)" href="MultiParaCrawl/v9b/tl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Tagalog-Chinese (sample file)" href="MultiParaCrawl/v9b/tl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/tl.zip">tl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/uk.zip">uk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (1.8M links, 53.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Czech' (2.2M links, 60.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Danish' (1.5M links, 49.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-German' (4.2M links, 121.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' (1.4M links, 39.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Spanish' (4.5M links, 139.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Estonian' (0.7M links, 17.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Finnish' (1.5M links, 41.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-French' (2.8M links, 97.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Irish' (0.3M links, 8.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (0.3M links, 12.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hungarian' (1.9M links, 55.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Icelandic' (0.3M links, 11.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Italian' (1.9M links, 62.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Central Khmer' (3.0k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Korean' (0.2M links, 4.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Lithuanian' (1.2M links, 31.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Latvian' (1.3M links, 35.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-uk.xml.gz">ces</a></td>
<th>uk</th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Maltese' (0.1M links, 2.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Burmese' (0.8k links, 27.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-BokmÃ¥l, Norwegian' (1.0M links, 36.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Nepali' (8.4k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Dutch' (2.2M links, 64.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Norwegian Nynorsk' (14.4k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Polish' (1.7M links, 47.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Pushto' (3.0k links, 88.8k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (2.4M links, 75.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Romanian' (2.2M links, 70.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ro-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Russian' (0.3M links, 10.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ru-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Sinhala' (29.4k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/si-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovak' (1.9M links, 49.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (1.0M links, 29.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Somali' (7.5k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/so-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Swedish' (1.9M links, 57.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sv-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Swahili' (30.5k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sw-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Tagalog' (42.4k links, 2.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/tl-uk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Ukrainian-Chinese (sample file)" href="MultiParaCrawl/v9b/uk-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/uk.zip">uk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/xml/zh.zip">zh</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bulgarian' (0.3M links, 6.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/bg-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (0.9M links, 17.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/cs-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Danish' (0.7M links, 15.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/da-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (3.1M links, 61.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/de-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Greek' (0.4M links, 8.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/el-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (3.4M links, 79.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/es-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (0.2M links, 2.9M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/et-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (0.6M links, 10.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fi-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (2.1M links, 53.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/fr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Irish' (26.5k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ga-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (53.6k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hungarian' (0.7M links, 13.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/hu-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Icelandic' (75.3k links, 1.7M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/is-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Italian' (1.2M links, 28.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/it-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Central Khmer' (0.5k links, 12.1k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/km-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Korean' (0.8M links, 18.3M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ko-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Lithuanian' (0.3M links, 4.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Latvian' (0.2M links, 4.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/lv-zh.xml.gz">ces</a></td>
<th>zh</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Maltese' (12.3k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/mt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Burmese' (0.2k links, 5.8k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/my-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-BokmÃ¥l, Norwegian' (0.4M links, 10.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nb-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Nepali' (1.8k links, 60.9k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ne-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (1.4M links, 30.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Norwegian Nynorsk' (9.3k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/nn-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Polish' (0.6M links, 11.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Pushto' (0.2k links, 2.7k tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ps-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (1.6M links, 36.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/pt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Romanian' (0.6M links, 15.0M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ro-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (0.1M links, 2.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/ru-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Sinhala' (5.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/si-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovak' (0.4M links, 7.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sk-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovenian' (0.2M links, 4.2M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Somali' (3.2k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/so-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swedish' (0.9M links, 17.6M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sv-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swahili' (12.1k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/sw-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Tagalog' (41.0k links, 1.5M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/tl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Ukrainian' (0.3M links, 6.8M tokens)" href="download.php?f=MultiParaCrawl/v9b/xml/uk-zh.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v9b/raw/zh.zip">zh</a></th></tr>
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
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=MultiParaCrawl/v9b/mono/bg.tok.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=MultiParaCrawl/v9b/mono/cs.tok.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized da plain text' href="download.php?f=MultiParaCrawl/v9b/mono/da.tok.gz">da</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=MultiParaCrawl/v9b/mono/de.tok.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=MultiParaCrawl/v9b/mono/el.tok.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=MultiParaCrawl/v9b/mono/es.tok.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=MultiParaCrawl/v9b/mono/et.tok.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=MultiParaCrawl/v9b/mono/eu.tok.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=MultiParaCrawl/v9b/mono/fi.tok.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=MultiParaCrawl/v9b/mono/fr.tok.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized ga plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ga.tok.gz">ga</a>
</th><th><a rel="nofollow" title='monolingual tokenized gl plain text' href="download.php?f=MultiParaCrawl/v9b/mono/gl.tok.gz">gl</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=MultiParaCrawl/v9b/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hu plain text' href="download.php?f=MultiParaCrawl/v9b/mono/hu.tok.gz">hu</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=MultiParaCrawl/v9b/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=MultiParaCrawl/v9b/mono/it.tok.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized km plain text' href="download.php?f=MultiParaCrawl/v9b/mono/km.tok.gz">km</a>
</th><th><a rel="nofollow" title='monolingual tokenized ko plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ko.tok.gz">ko</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=MultiParaCrawl/v9b/mono/lt.tok.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=MultiParaCrawl/v9b/mono/lv.tok.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=MultiParaCrawl/v9b/mono/mt.tok.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized my plain text' href="download.php?f=MultiParaCrawl/v9b/mono/my.tok.gz">my</a>
</th><th><a rel="nofollow" title='monolingual tokenized nb plain text' href="download.php?f=MultiParaCrawl/v9b/mono/nb.tok.gz">nb</a>
</th><th><a rel="nofollow" title='monolingual tokenized ne plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ne.tok.gz">ne</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=MultiParaCrawl/v9b/mono/nl.tok.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized nn plain text' href="download.php?f=MultiParaCrawl/v9b/mono/nn.tok.gz">nn</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=MultiParaCrawl/v9b/mono/pl.tok.gz">pl</a>
</th><th><a rel="nofollow" title='monolingual tokenized ps plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ps.tok.gz">ps</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=MultiParaCrawl/v9b/mono/pt.tok.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ro.tok.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ru.tok.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized si plain text' href="download.php?f=MultiParaCrawl/v9b/mono/si.tok.gz">si</a>
</th><th><a rel="nofollow" title='monolingual tokenized sk plain text' href="download.php?f=MultiParaCrawl/v9b/mono/sk.tok.gz">sk</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=MultiParaCrawl/v9b/mono/sl.tok.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized so plain text' href="download.php?f=MultiParaCrawl/v9b/mono/so.tok.gz">so</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=MultiParaCrawl/v9b/mono/sv.tok.gz">sv</a>
</th><th><a rel="nofollow" title='monolingual tokenized sw plain text' href="download.php?f=MultiParaCrawl/v9b/mono/sw.tok.gz">sw</a>
</th><th><a rel="nofollow" title='monolingual tokenized tl plain text' href="download.php?f=MultiParaCrawl/v9b/mono/tl.tok.gz">tl</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=MultiParaCrawl/v9b/mono/uk.tok.gz">uk</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh plain text' href="download.php?f=MultiParaCrawl/v9b/mono/zh.tok.gz">zh</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=MultiParaCrawl/v9b/mono/bg.txt.gz">bg</a>
</th><td>1</td> <td>203.0M</td> <td>11.2M</td><td></td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bulgarian-Czech (2,785,500 sentence pairs, 80.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-cs.tmx.gz">2.8M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Danish (2,110,343 sentence pairs, 69.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-da.tmx.gz">2.1M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Bulgarian-German (3,894,388 sentence pairs, 120.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-de.tmx.gz">3.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Greek (2,174,405 sentence pairs, 69.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-el.tmx.gz">2.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Spanish (3,930,502 sentence pairs, 129.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-es.tmx.gz">3.9M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Bulgarian-Estonian (1,189,078 sentence pairs, 35.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-et.tmx.gz">1.2M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Bulgarian-Finnish (2,063,631 sentence pairs, 57.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-fi.tmx.gz">2.1M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Bulgarian-French (3,364,309 sentence pairs, 115.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-fr.tmx.gz">3.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bulgarian-Irish (317,842 sentence pairs, 11.09M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Bulgarian-Croatian (508,438 sentence pairs, 20.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-hr.tmx.gz">0.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bulgarian-Hungarian (2,635,947 sentence pairs, 78.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-hu.tmx.gz">2.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bulgarian-Icelandic (343,682 sentence pairs, 10.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-is.tmx.gz">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Bulgarian-Italian (2,492,050 sentence pairs, 42.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-it.tmx.gz">2.5M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bulgarian-Central Khmer (1,270 sentence pairs, 22.85k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-km.tmx.gz">1.3k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bulgarian-Korean (185,262 sentence pairs, 5.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Bulgarian-Lithuanian (1,827,829 sentence pairs, 53.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-lt.tmx.gz">1.8M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Bulgarian-Latvian (1,855,547 sentence pairs, 54.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-lv.tmx.gz">1.9M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Bulgarian-Maltese (386,108 sentence pairs, 15.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-mt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Burmese (352 sentence pairs, 4.33k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-my.tmx.gz">0.4k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Bulgarian-BokmÃ¥l, Norwegian (1,302,562 sentence pairs, 41.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-nb.tmx.gz">1.3M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Bulgarian-Nepali (3,408 sentence pairs, 97.57k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-ne.tmx.gz">3.4k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Bulgarian-Dutch (2,720,451 sentence pairs, 86.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-nl.tmx.gz">2.7M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Bulgarian-Norwegian Nynorsk (19,434 sentence pairs, 0.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-nn.tmx.gz">19.4k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Bulgarian-Polish (1,983,920 sentence pairs, 59.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-pl.tmx.gz">2.0M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Bulgarian-Pushto (1,506 sentence pairs, 40.96k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-ps.tmx.gz">1.5k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Portuguese (2,891,366 sentence pairs, 95.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-pt.tmx.gz">2.9M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Romanian (2,959,606 sentence pairs, 96.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-ro.tmx.gz">3.0M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bulgarian-Russian (189,969 sentence pairs, 5.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Bulgarian-Sinhala (13,682 sentence pairs, 0.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-si.tmx.gz">13.7k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Bulgarian-Slovak (2,558,945 sentence pairs, 71.80M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-sk.tmx.gz">2.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Bulgarian-Slovenian (1,696,089 sentence pairs, 51.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-sl.tmx.gz">1.7M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Bulgarian-Somali (4,192 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-so.tmx.gz">4.2k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Bulgarian-Swedish (2,320,594 sentence pairs, 73.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-sv.tmx.gz">2.3M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Bulgarian-Swahili (21,705 sentence pairs, 0.83M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-sw.tmx.gz">21.7k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Bulgarian-Tagalog (29,524 sentence pairs, 1.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-tl.tmx.gz">29.5k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Bulgarian-Ukrainian (1,776,077 sentence pairs, 47.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-uk.tmx.gz">1.8M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Chinese (319,902 sentence pairs, 8.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/bg-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ca.txt.gz">ca</a>
</th><td>1</td> <td>417.6M</td> <td>16.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=MultiParaCrawl/v9b/mono/cs.txt.gz">cs</a>
</th><td>1</td> <td>535.6M</td> <td>36.3M</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Bulgarian (2,785,500 sentence pairs, 80.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-cs.txt.zip">2.8M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Danish (6,367,029 sentence pairs, 189.83M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-da.tmx.gz">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-German (13,866,963 sentence pairs, 371.34M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-de.tmx.gz">13.9M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Czech-Greek (3,591,958 sentence pairs, 99.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-el.tmx.gz">3.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Spanish (12,427,338 sentence pairs, 345.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-es.tmx.gz">12.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Czech-Estonian (2,661,924 sentence pairs, 66.73M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-et.tmx.gz">2.7M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Finnish (6,609,351 sentence pairs, 156.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-fi.tmx.gz">6.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-French (9,397,665 sentence pairs, 279.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-fr.tmx.gz">9.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Czech-Irish (490,840 sentence pairs, 15.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-ga.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Czech-Croatian (863,030 sentence pairs, 32.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-hr.tmx.gz">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Hungarian (10,329,042 sentence pairs, 227.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-hu.tmx.gz">10.3M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Czech-Icelandic (893,771 sentence pairs, 24.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-is.tmx.gz">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Italian (7,275,565 sentence pairs, 211.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-it.tmx.gz">7.3M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Czech-Central Khmer (2,775 sentence pairs, 35.85k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-km.tmx.gz">2.8k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Czech-Korean (448,873 sentence pairs, 9.34M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-ko.tmx.gz">0.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Czech-Lithuanian (3,950,670 sentence pairs, 94.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-lt.tmx.gz">4.0M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Czech-Latvian (3,874,196 sentence pairs, 98.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-lv.tmx.gz">3.9M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Czech-Maltese (553,232 sentence pairs, 19.89M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-mt.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Czech-Burmese (1,035 sentence pairs, 11.91k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-my.tmx.gz">1.0k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Czech-BokmÃ¥l, Norwegian (3,933,204 sentence pairs, 57.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-nb.tmx.gz">3.9M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Czech-Nepali (6,066 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-ne.tmx.gz">6.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Dutch (8,887,796 sentence pairs, 248.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-nl.tmx.gz">8.9M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Czech-Norwegian Nynorsk (35,434 sentence pairs, 0.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-nn.tmx.gz">35.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Polish (7,673,889 sentence pairs, 178.01M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-pl.tmx.gz">7.7M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Czech-Pushto (3,406 sentence pairs, 84.07k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-ps.tmx.gz">3.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Portuguese (8,147,597 sentence pairs, 223.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-pt.tmx.gz">8.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Romanian (6,742,976 sentence pairs, 177.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-ro.tmx.gz">6.7M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Czech-Russian (374,536 sentence pairs, 9.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-ru.tmx.gz">0.4M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Czech-Sinhala (21,408 sentence pairs, 0.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-si.tmx.gz">21.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Slovak (9,702,322 sentence pairs, 214.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-sk.tmx.gz">9.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Czech-Slovenian (3,398,913 sentence pairs, 93.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-sl.tmx.gz">3.4M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Czech-Somali (4,195 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-so.tmx.gz">4.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Swedish (7,471,810 sentence pairs, 197.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-sv.tmx.gz">7.5M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Czech-Swahili (26,496 sentence pairs, 0.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-sw.tmx.gz">26.5k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Czech-Tagalog (36,577 sentence pairs, 1.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-tl.tmx.gz">36.6k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Czech-Ukrainian (2,200,277 sentence pairs, 51.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-uk.tmx.gz">2.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Czech-Chinese (940,405 sentence pairs, 12.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/cs-zh.tmx.gz">0.9M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized da plain text' href="download.php?f=MultiParaCrawl/v9b/mono/da.txt.gz">da</a>
</th><td>1</td> <td>413.6M</td> <td>23.7M</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Danish-Bulgarian (2,110,343 sentence pairs, 69.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-da.txt.zip">2.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Czech (6,367,029 sentence pairs, 189.83M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-da.txt.zip">6.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-German (12,793,185 sentence pairs, 384.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-de.tmx.gz">12.8M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Danish-Greek (3,167,117 sentence pairs, 101.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-el.tmx.gz">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Spanish (12,030,842 sentence pairs, 393.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-es.tmx.gz">12.0M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Estonian (2,120,602 sentence pairs, 62.85M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-et.tmx.gz">2.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Finnish (6,373,879 sentence pairs, 174.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-fi.tmx.gz">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-French (8,829,330 sentence pairs, 297.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-fr.tmx.gz">8.8M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Danish-Irish (454,264 sentence pairs, 16.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-ga.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#d5ffca"><a rel="nofollow" title='Danish-Croatian (669,233 sentence pairs, 27.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-hr.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Hungarian (5,218,256 sentence pairs, 152.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-hu.tmx.gz">5.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Danish-Icelandic (777,927 sentence pairs, 24.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-is.tmx.gz">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Italian (6,700,116 sentence pairs, 209.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-it.tmx.gz">6.7M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Danish-Central Khmer (1,453 sentence pairs, 28.20k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-km.tmx.gz">1.5k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Danish-Korean (414,876 sentence pairs, 11.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-ko.tmx.gz">0.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Danish-Lithuanian (2,660,496 sentence pairs, 78.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-lt.tmx.gz">2.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Danish-Latvian (2,725,846 sentence pairs, 81.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-lv.tmx.gz">2.7M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Danish-Maltese (456,212 sentence pairs, 18.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Burmese (347 sentence pairs, 6.17k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-my.tmx.gz">0.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-BokmÃ¥l, Norwegian (6,477,743 sentence pairs, 203.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-nb.tmx.gz">6.5M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Danish-Nepali (4,613 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-ne.tmx.gz">4.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Dutch (9,677,383 sentence pairs, 301.85M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-nl.tmx.gz">9.7M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Danish-Norwegian Nynorsk (22,610 sentence pairs, 0.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-nn.tmx.gz">22.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Polish (4,620,225 sentence pairs, 134.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-pl.tmx.gz">4.6M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Danish-Pushto (2,197 sentence pairs, 68.17k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-ps.tmx.gz">2.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Portuguese (7,455,791 sentence pairs, 238.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-pt.tmx.gz">7.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Romanian (4,637,701 sentence pairs, 155.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-ro.tmx.gz">4.6M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Danish-Russian (244,671 sentence pairs, 7.79M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Danish-Sinhala (11,713 sentence pairs, 0.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-si.tmx.gz">11.7k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Danish-Slovak (3,784,768 sentence pairs, 113.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-sk.tmx.gz">3.8M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Danish-Slovenian (2,265,781 sentence pairs, 72.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-sl.tmx.gz">2.3M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Danish-Somali (2,964 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-so.tmx.gz">3.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Swedish (9,921,608 sentence pairs, 297.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-sv.tmx.gz">9.9M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Danish-Swahili (20,131 sentence pairs, 0.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-sw.tmx.gz">20.1k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Danish-Tagalog (40,831 sentence pairs, 1.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-tl.tmx.gz">40.8k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Danish-Ukrainian (1,506,017 sentence pairs, 41.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-uk.tmx.gz">1.5M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Danish-Chinese (714,492 sentence pairs, 11.89M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/da-zh.tmx.gz">0.7M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=MultiParaCrawl/v9b/mono/de.txt.gz">de</a>
</th><td>1</td> <td>3.6G</td> <td>220.7M</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='German-Bulgarian (3,894,388 sentence pairs, 120.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-de.txt.zip">3.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Czech (13,866,963 sentence pairs, 371.34M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-de.txt.zip">13.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Danish (12,793,185 sentence pairs, 383.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-de.txt.zip">12.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Greek (7,652,488 sentence pairs, 202.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-el.tmx.gz">7.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Spanish (56,873,541 sentence pairs, 1.73G words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-es.tmx.gz">56.9M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='German-Estonian (4,068,005 sentence pairs, 102.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-et.tmx.gz">4.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Finnish (13,424,982 sentence pairs, 360.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-fi.tmx.gz">13.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-French (49,455,676 sentence pairs, 1.59G words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-fr.tmx.gz">49.5M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='German-Irish (754,270 sentence pairs, 21.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-ga.tmx.gz">0.8M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='German-Croatian (1,455,798 sentence pairs, 57.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-hr.tmx.gz">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Hungarian (13,828,410 sentence pairs, 356.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-hu.tmx.gz">13.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='German-Icelandic (1,559,925 sentence pairs, 45.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-is.tmx.gz">1.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Italian (32,080,322 sentence pairs, 1.00G words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-it.tmx.gz">32.1M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='German-Central Khmer (6,182 sentence pairs, 70.22k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-km.tmx.gz">6.2k</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='German-Korean (1,284,016 sentence pairs, 31.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-ko.tmx.gz">1.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Lithuanian (5,486,923 sentence pairs, 132.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-lt.tmx.gz">5.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Latvian (5,054,509 sentence pairs, 128.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-lv.tmx.gz">5.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='German-Maltese (679,679 sentence pairs, 23.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Burmese (1,917 sentence pairs, 19.72k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-my.tmx.gz">1.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-BokmÃ¥l, Norwegian (9,620,141 sentence pairs, 289.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-nb.tmx.gz">9.6M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='German-Nepali (12,251 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-ne.tmx.gz">12.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Dutch (33,966,183 sentence pairs, 931.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-nl.tmx.gz">34.0M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='German-Norwegian Nynorsk (99,656 sentence pairs, 2.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-nn.tmx.gz">99.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Polish (15,109,077 sentence pairs, 413.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-pl.tmx.gz">15.1M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='German-Pushto (4,894 sentence pairs, 96.96k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-ps.tmx.gz">4.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Portuguese (26,812,769 sentence pairs, 754.87M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-pt.tmx.gz">26.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Romanian (10,943,978 sentence pairs, 302.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-ro.tmx.gz">10.9M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='German-Russian (1,141,052 sentence pairs, 29.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-ru.tmx.gz">1.1M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='German-Sinhala (48,034 sentence pairs, 1.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-si.tmx.gz">48.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Slovak (9,472,796 sentence pairs, 249.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-sk.tmx.gz">9.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Slovenian (5,015,254 sentence pairs, 137.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-sl.tmx.gz">5.0M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='German-Somali (15,949 sentence pairs, 0.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-so.tmx.gz">15.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Swedish (20,489,938 sentence pairs, 530.85M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-sv.tmx.gz">20.5M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='German-Swahili (71,358 sentence pairs, 2.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-sw.tmx.gz">71.4k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='German-Tagalog (95,914 sentence pairs, 4.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-tl.tmx.gz">95.9k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='German-Ukrainian (4,215,581 sentence pairs, 103.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-uk.tmx.gz">4.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='German-Chinese (3,081,451 sentence pairs, 46.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/de-zh.tmx.gz">3.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=MultiParaCrawl/v9b/mono/el.txt.gz">el</a>
</th><td>1</td> <td>312.5M</td> <td>16.8M</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Greek-Bulgarian (2,174,405 sentence pairs, 69.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-el.txt.zip">2.2M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Greek-Czech (3,591,958 sentence pairs, 99.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-el.txt.zip">3.6M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Greek-Danish (3,167,117 sentence pairs, 101.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-el.txt.zip">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-German (7,652,488 sentence pairs, 202.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-el.txt.zip">7.7M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Spanish (5,832,703 sentence pairs, 179.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-es.tmx.gz">5.8M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Greek-Estonian (1,325,443 sentence pairs, 38.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-et.tmx.gz">1.3M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Greek-Finnish (2,787,347 sentence pairs, 74.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-fi.tmx.gz">2.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-French (4,514,864 sentence pairs, 148.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-fr.tmx.gz">4.5M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Greek-Irish (327,500 sentence pairs, 11.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Greek-Croatian (434,244 sentence pairs, 18.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-hr.tmx.gz">0.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Greek-Hungarian (3,132,445 sentence pairs, 87.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-hu.tmx.gz">3.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Greek-Icelandic (422,547 sentence pairs, 11.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-is.tmx.gz">0.4M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Greek-Italian (3,754,790 sentence pairs, 119.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-it.tmx.gz">3.8M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Greek-Central Khmer (1,362 sentence pairs, 21.60k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-km.tmx.gz">1.4k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Greek-Korean (270,636 sentence pairs, 6.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-ko.tmx.gz">0.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Greek-Lithuanian (1,942,014 sentence pairs, 54.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-lt.tmx.gz">1.9M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Greek-Latvian (1,883,367 sentence pairs, 53.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-lv.tmx.gz">1.9M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Greek-Maltese (419,757 sentence pairs, 17.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-mt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Burmese (386 sentence pairs, 4.09k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-my.tmx.gz">0.4k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Greek-BokmÃ¥l, Norwegian (1,723,758 sentence pairs, 52.96M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-nb.tmx.gz">1.7M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Greek-Nepali (3,621 sentence pairs, 91.46k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-ne.tmx.gz">3.6k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Greek-Dutch (4,315,951 sentence pairs, 126.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-nl.tmx.gz">4.3M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Greek-Norwegian Nynorsk (27,603 sentence pairs, 0.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-nn.tmx.gz">27.6k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Greek-Polish (2,563,589 sentence pairs, 72.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-pl.tmx.gz">2.6M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Greek-Pushto (1,852 sentence pairs, 47.72k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-ps.tmx.gz">1.9k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Greek-Portuguese (3,860,018 sentence pairs, 120.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-pt.tmx.gz">3.9M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Greek-Romanian (2,826,183 sentence pairs, 91.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-ro.tmx.gz">2.8M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Greek-Russian (231,674 sentence pairs, 6.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Greek-Sinhala (13,640 sentence pairs, 0.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-si.tmx.gz">13.6k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Greek-Slovak (2,520,794 sentence pairs, 70.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-sk.tmx.gz">2.5M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Greek-Slovenian (1,454,664 sentence pairs, 45.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-sl.tmx.gz">1.5M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Greek-Somali (5,218 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-so.tmx.gz">5.2k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Greek-Swedish (3,574,370 sentence pairs, 101.85M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-sv.tmx.gz">3.6M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Greek-Swahili (27,906 sentence pairs, 1.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-sw.tmx.gz">27.9k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Greek-Tagalog (35,912 sentence pairs, 1.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-tl.tmx.gz">35.9k</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Greek-Ukrainian (1,384,406 sentence pairs, 33.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-uk.tmx.gz">1.4M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Greek-Chinese (443,350 sentence pairs, 6.73M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/el-zh.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=MultiParaCrawl/v9b/mono/es.txt.gz">es</a>
</th><td>1</td> <td>4.6G</td> <td>227.1M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Bulgarian (3,930,502 sentence pairs, 129.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-es.txt.zip">3.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Czech (12,427,338 sentence pairs, 310.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-es.txt.zip">12.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Danish (12,030,842 sentence pairs, 393.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-es.txt.zip">12.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-German (56,873,541 sentence pairs, 1.61G words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-es.txt.zip">56.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Greek (5,832,703 sentence pairs, 179.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-es.txt.zip">5.8M</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Spanish-Estonian (3,889,404 sentence pairs, 109.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-et.tmx.gz">3.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Finnish (12,446,758 sentence pairs, 326.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-fi.tmx.gz">12.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-French (52,681,065 sentence pairs, 1.85G words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-fr.tmx.gz">52.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Spanish-Irish (802,384 sentence pairs, 26.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-ga.tmx.gz">0.8M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Spanish-Croatian (1,311,967 sentence pairs, 56.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-hr.tmx.gz">1.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Hungarian (13,123,032 sentence pairs, 358.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-hu.tmx.gz">13.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Spanish-Icelandic (1,570,241 sentence pairs, 48.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-is.tmx.gz">1.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Italian (33,845,486 sentence pairs, 1.12G words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-it.tmx.gz">33.8M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Spanish-Central Khmer (5,994 sentence pairs, 83.04k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-km.tmx.gz">6.0k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Spanish-Korean (1,495,640 sentence pairs, 40.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-ko.tmx.gz">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Lithuanian (5,573,118 sentence pairs, 149.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-lt.tmx.gz">5.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Latvian (5,130,460 sentence pairs, 142.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-lv.tmx.gz">5.1M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Spanish-Maltese (674,152 sentence pairs, 26.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Spanish-Burmese (2,370 sentence pairs, 24.07k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-my.tmx.gz">2.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-BokmÃ¥l, Norwegian (9,150,312 sentence pairs, 297.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-nb.tmx.gz">9.2M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Spanish-Nepali (11,924 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-ne.tmx.gz">11.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Dutch (28,837,228 sentence pairs, 868.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-nl.tmx.gz">28.8M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Spanish-Norwegian Nynorsk (110,015 sentence pairs, 3.85M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-nn.tmx.gz">0.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Polish (14,379,361 sentence pairs, 421.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-pl.tmx.gz">14.4M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Spanish-Pushto (4,789 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-ps.tmx.gz">4.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Portuguese (37,618,566 sentence pairs, 1.20G words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-pt.tmx.gz">37.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Romanian (12,013,244 sentence pairs, 377.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-ro.tmx.gz">12.0M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Spanish-Russian (1,177,297 sentence pairs, 34.96M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-ru.tmx.gz">1.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Spanish-Sinhala (50,171 sentence pairs, 1.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-si.tmx.gz">50.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Slovak (9,036,861 sentence pairs, 240.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-sk.tmx.gz">9.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Slovenian (4,600,992 sentence pairs, 140.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-sl.tmx.gz">4.6M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Spanish-Somali (22,693 sentence pairs, 1.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-so.tmx.gz">22.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Swedish (19,838,896 sentence pairs, 600.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-sv.tmx.gz">19.8M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Spanish-Swahili (100,047 sentence pairs, 4.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-sw.tmx.gz">0.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Spanish-Tagalog (147,191 sentence pairs, 6.80M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-tl.tmx.gz">0.1M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Spanish-Ukrainian (4,487,873 sentence pairs, 119.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-uk.tmx.gz">4.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-Chinese (3,410,087 sentence pairs, 61.80M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/es-zh.tmx.gz">3.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=MultiParaCrawl/v9b/mono/et.txt.gz">et</a>
</th><td>1</td> <td>99.0M</td> <td>7.0M</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Estonian-Bulgarian (1,189,078 sentence pairs, 35.72M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-et.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Estonian-Czech (2,661,924 sentence pairs, 66.73M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-et.txt.zip">2.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Estonian-Danish (2,120,602 sentence pairs, 62.85M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-et.txt.zip">2.1M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Estonian-German (4,068,005 sentence pairs, 102.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-et.txt.zip">4.1M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Estonian-Greek (1,325,443 sentence pairs, 38.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-et.txt.zip">1.3M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Estonian-Spanish (3,889,404 sentence pairs, 109.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-et.txt.zip">3.9M</a>
</td><td></td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Finnish (2,331,803 sentence pairs, 54.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-fi.tmx.gz">2.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Estonian-French (2,193,029 sentence pairs, 68.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-fr.tmx.gz">2.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Estonian-Irish (318,970 sentence pairs, 7.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Croatian (353,167 sentence pairs, 13.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-hr.tmx.gz">0.4M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Hungarian (2,194,959 sentence pairs, 52.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-hu.tmx.gz">2.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Icelandic (521,066 sentence pairs, 13.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-is.tmx.gz">0.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Estonian-Italian (1,952,074 sentence pairs, 58.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-it.tmx.gz">2.0M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Estonian-Central Khmer (1,169 sentence pairs, 14.21k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-km.tmx.gz">1.2k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Estonian-Korean (108,757 sentence pairs, 2.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-ko.tmx.gz">0.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Lithuanian (2,153,238 sentence pairs, 53.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-lt.tmx.gz">2.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Latvian (2,255,416 sentence pairs, 56.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-lv.tmx.gz">2.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Estonian-Maltese (439,025 sentence pairs, 15.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-mt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Burmese (417 sentence pairs, 4.51k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-my.tmx.gz">0.4k</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Estonian-BokmÃ¥l, Norwegian (1,149,514 sentence pairs, 29.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-nb.tmx.gz">1.1M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Estonian-Nepali (3,208 sentence pairs, 68.34k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-ne.tmx.gz">3.2k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Estonian-Dutch (2,196,205 sentence pairs, 63.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-nl.tmx.gz">2.2M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Estonian-Norwegian Nynorsk (12,331 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-nn.tmx.gz">12.3k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Estonian-Polish (1,539,962 sentence pairs, 43.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-pl.tmx.gz">1.5M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Estonian-Pushto (1,971 sentence pairs, 46.70k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-ps.tmx.gz">2.0k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Estonian-Portuguese (1,895,004 sentence pairs, 48.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-pt.tmx.gz">1.9M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Romanian (1,877,418 sentence pairs, 56.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-ro.tmx.gz">1.9M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Estonian-Russian (120,429 sentence pairs, 3.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Estonian-Sinhala (7,187 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-si.tmx.gz">7.2k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Slovak (1,934,168 sentence pairs, 50.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-sk.tmx.gz">1.9M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Estonian-Slovenian (1,580,836 sentence pairs, 43.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-sl.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Estonian-Somali (722 sentence pairs, 29.66k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-so.tmx.gz">0.7k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Swedish (2,269,655 sentence pairs, 54.88M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-sv.tmx.gz">2.3M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Estonian-Swahili (7,959 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-sw.tmx.gz">8.0k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Estonian-Tagalog (13,253 sentence pairs, 0.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-tl.tmx.gz">13.3k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Ukrainian (653,391 sentence pairs, 14.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-uk.tmx.gz">0.7M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Estonian-Chinese (175,426 sentence pairs, 2.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/et-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=MultiParaCrawl/v9b/mono/eu.txt.gz">eu</a>
</th><td>1</td> <td>52.5M</td> <td>3.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=MultiParaCrawl/v9b/mono/fi.txt.gz">fi</a>
</th><td>1</td> <td>297.9M</td> <td>23.6M</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Finnish-Bulgarian (2,063,631 sentence pairs, 57.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-fi.txt.zip">2.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Czech (6,609,351 sentence pairs, 172.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-fi.txt.zip">6.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Danish (6,373,879 sentence pairs, 174.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-fi.txt.zip">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-German (13,424,982 sentence pairs, 318.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-fi.txt.zip">13.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Greek (2,787,347 sentence pairs, 74.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-fi.txt.zip">2.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Spanish (12,446,758 sentence pairs, 387.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-fi.txt.zip">12.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-Estonian (2,331,803 sentence pairs, 54.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-fi.txt.zip">2.3M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-French (7,035,871 sentence pairs, 194.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-fr.tmx.gz">7.0M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Finnish-Irish (400,189 sentence pairs, 11.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-ga.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Finnish-Croatian (634,663 sentence pairs, 22.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-hr.tmx.gz">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Hungarian (5,790,242 sentence pairs, 133.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-hu.tmx.gz">5.8M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Finnish-Icelandic (885,418 sentence pairs, 22.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-is.tmx.gz">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Italian (5,570,635 sentence pairs, 151.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-it.tmx.gz">5.6M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Finnish-Central Khmer (2,007 sentence pairs, 21.99k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-km.tmx.gz">2.0k</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Finnish-Korean (372,691 sentence pairs, 8.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-ko.tmx.gz">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Lithuanian (3,128,467 sentence pairs, 71.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-lt.tmx.gz">3.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Finnish-Latvian (3,093,656 sentence pairs, 66.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-lv.tmx.gz">3.1M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Finnish-Maltese (475,035 sentence pairs, 15.81M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Burmese (697 sentence pairs, 6.84k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-my.tmx.gz">0.7k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Finnish-BokmÃ¥l, Norwegian (4,067,952 sentence pairs, 112.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-nb.tmx.gz">4.1M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Finnish-Nepali (4,341 sentence pairs, 91.68k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-ne.tmx.gz">4.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Dutch (7,521,458 sentence pairs, 193.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-nl.tmx.gz">7.5M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Finnish-Norwegian Nynorsk (28,547 sentence pairs, 0.79M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-nn.tmx.gz">28.5k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Polish (4,015,766 sentence pairs, 52.87M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-pl.tmx.gz">4.0M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Finnish-Pushto (2,243 sentence pairs, 48.60k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-ps.tmx.gz">2.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Portuguese (5,843,314 sentence pairs, 155.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-pt.tmx.gz">5.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Finnish-Romanian (4,150,174 sentence pairs, 113.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-ro.tmx.gz">4.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Finnish-Russian (297,993 sentence pairs, 7.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Finnish-Sinhala (13,750 sentence pairs, 0.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-si.tmx.gz">13.8k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Finnish-Slovak (4,114,029 sentence pairs, 94.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-sk.tmx.gz">4.1M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Finnish-Slovenian (2,364,660 sentence pairs, 60.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-sl.tmx.gz">2.4M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Finnish-Somali (5,027 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-so.tmx.gz">5.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Swedish (8,753,111 sentence pairs, 213.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-sv.tmx.gz">8.8M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Finnish-Swahili (25,486 sentence pairs, 0.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-sw.tmx.gz">25.5k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Finnish-Tagalog (34,801 sentence pairs, 1.34M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-tl.tmx.gz">34.8k</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Finnish-Ukrainian (1,542,555 sentence pairs, 34.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-uk.tmx.gz">1.5M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Finnish-Chinese (623,602 sentence pairs, 7.34M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fi-zh.tmx.gz">0.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=MultiParaCrawl/v9b/mono/fr.txt.gz">fr</a>
</th><td>1</td> <td>4.2G</td> <td>187.1M</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='French-Bulgarian (3,364,309 sentence pairs, 115.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-fr.txt.zip">3.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Czech (9,397,665 sentence pairs, 250.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-fr.txt.zip">9.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Danish (8,829,330 sentence pairs, 275.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-fr.txt.zip">8.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-German (49,455,676 sentence pairs, 1.48G words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-fr.txt.zip">49.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Greek (4,514,864 sentence pairs, 148.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-fr.txt.zip">4.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Spanish (52,681,065 sentence pairs, 1.84G words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-fr.txt.zip">52.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-Estonian (2,193,029 sentence pairs, 68.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-fr.txt.zip">2.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Finnish (7,035,871 sentence pairs, 155.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-fr.txt.zip">7.0M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='French-Irish (638,676 sentence pairs, 23.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-ga.tmx.gz">0.6M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='French-Croatian (976,263 sentence pairs, 44.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-hr.tmx.gz">1.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Hungarian (8,610,337 sentence pairs, 254.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-hu.tmx.gz">8.6M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='French-Icelandic (1,014,000 sentence pairs, 32.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-is.tmx.gz">1.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Italian (28,538,190 sentence pairs, 1.05G words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-it.tmx.gz">28.5M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='French-Central Khmer (4,076 sentence pairs, 56.05k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-km.tmx.gz">4.1k</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='French-Korean (951,139 sentence pairs, 27.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-ko.tmx.gz">1.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Lithuanian (3,988,322 sentence pairs, 131.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-lt.tmx.gz">4.0M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='French-Latvian (3,680,645 sentence pairs, 126.97M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-lv.tmx.gz">3.7M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='French-Maltese (622,700 sentence pairs, 25.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-mt.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Burmese (1,216 sentence pairs, 14.90k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-my.tmx.gz">1.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-BokmÃ¥l, Norwegian (5,935,091 sentence pairs, 202.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-nb.tmx.gz">5.9M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='French-Nepali (8,355 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-ne.tmx.gz">8.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Dutch (21,877,312 sentence pairs, 705.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-nl.tmx.gz">21.9M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='French-Norwegian Nynorsk (55,811 sentence pairs, 1.87M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-nn.tmx.gz">55.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Polish (10,978,872 sentence pairs, 343.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-pl.tmx.gz">11.0M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='French-Pushto (3,648 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-ps.tmx.gz">3.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Portuguese (23,661,344 sentence pairs, 801.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-pt.tmx.gz">23.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Romanian (7,905,199 sentence pairs, 266.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-ro.tmx.gz">7.9M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='French-Russian (780,853 sentence pairs, 24.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-ru.tmx.gz">0.8M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='French-Sinhala (32,275 sentence pairs, 0.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-si.tmx.gz">32.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Slovak (5,900,834 sentence pairs, 173.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-sk.tmx.gz">5.9M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='French-Slovenian (3,462,684 sentence pairs, 113.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-sl.tmx.gz">3.5M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='French-Somali (9,681 sentence pairs, 0.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-so.tmx.gz">9.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Swedish (12,498,020 sentence pairs, 376.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-sv.tmx.gz">12.5M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='French-Swahili (53,138 sentence pairs, 2.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-sw.tmx.gz">53.1k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='French-Tagalog (77,503 sentence pairs, 3.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-tl.tmx.gz">77.5k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='French-Ukrainian (2,784,818 sentence pairs, 90.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-uk.tmx.gz">2.8M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='French-Chinese (2,090,780 sentence pairs, 39.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/fr-zh.tmx.gz">2.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ga plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ga.txt.gz">ga</a>
</th><td>1</td> <td>61.3M</td> <td>2.8M</td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Bulgarian (317,842 sentence pairs, 11.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-ga.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Irish-Czech (490,840 sentence pairs, 15.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-ga.txt.zip">0.5M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Irish-Danish (454,264 sentence pairs, 16.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-ga.txt.zip">0.5M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Irish-German (754,270 sentence pairs, 21.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-ga.txt.zip">0.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Greek (327,500 sentence pairs, 11.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-ga.txt.zip">0.3M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Irish-Spanish (802,384 sentence pairs, 26.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-ga.txt.zip">0.8M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Irish-Estonian (318,970 sentence pairs, 9.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-ga.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Finnish (400,189 sentence pairs, 11.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-ga.txt.zip">0.4M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Irish-French (638,676 sentence pairs, 23.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-ga.txt.zip">0.6M</a>
</td><td></td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Irish-Croatian (110,148 sentence pairs, 5.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-hr.tmx.gz">0.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Hungarian (382,272 sentence pairs, 12.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-hu.tmx.gz">0.4M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Irish-Icelandic (241,786 sentence pairs, 7.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-is.tmx.gz">0.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Irish-Italian (432,760 sentence pairs, 15.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-it.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Irish-Central Khmer (1,164 sentence pairs, 25.24k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-km.tmx.gz">1.2k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Irish-Korean (22,991 sentence pairs, 0.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-ko.tmx.gz">23.0k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Lithuanian (364,916 sentence pairs, 11.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Latvian (406,356 sentence pairs, 13.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Irish-Maltese (201,925 sentence pairs, 7.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Burmese (334 sentence pairs, 6.83k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-my.tmx.gz">0.3k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Irish-BokmÃ¥l, Norwegian (254,026 sentence pairs, 9.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-nb.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Irish-Nepali (4,173 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-ne.tmx.gz">4.2k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Irish-Dutch (394,787 sentence pairs, 14.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-nl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Irish-Norwegian Nynorsk (3,031 sentence pairs, 0.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-nn.tmx.gz">3.0k</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Irish-Polish (319,033 sentence pairs, 10.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-pl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Irish-Pushto (2,049 sentence pairs, 70.34k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-ps.tmx.gz">2.0k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Irish-Portuguese (446,648 sentence pairs, 16.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Irish-Romanian (374,567 sentence pairs, 13.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-ro.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Irish-Russian (30,632 sentence pairs, 1.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-ru.tmx.gz">30.6k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Irish-Sinhala (5,529 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-si.tmx.gz">5.5k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Slovak (393,566 sentence pairs, 12.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Irish-Slovenian (315,834 sentence pairs, 10.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Irish-Somali (852 sentence pairs, 38.05k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-so.tmx.gz">0.9k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Irish-Swedish (426,113 sentence pairs, 14.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Irish-Swahili (8,692 sentence pairs, 0.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-sw.tmx.gz">8.7k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Irish-Tagalog (9,164 sentence pairs, 0.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-tl.tmx.gz">9.2k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Irish-Ukrainian (258,768 sentence pairs, 7.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Irish-Chinese (26,540 sentence pairs, 0.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ga-zh.tmx.gz">26.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gl plain text' href="download.php?f=MultiParaCrawl/v9b/mono/gl.txt.gz">gl</a>
</th><td>1</td> <td>44.6M</td> <td>1.8M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=MultiParaCrawl/v9b/mono/hr.txt.gz">hr</a>
</th><td>1</td> <td>67.3M</td> <td>2.8M</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Croatian-Bulgarian (508,438 sentence pairs, 21.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-hr.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Croatian-Czech (863,030 sentence pairs, 32.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-hr.txt.zip">0.9M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Croatian-Danish (669,233 sentence pairs, 27.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-hr.txt.zip">0.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Croatian-German (1,455,798 sentence pairs, 57.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-hr.txt.zip">1.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Croatian-Greek (434,244 sentence pairs, 18.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-hr.txt.zip">0.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Croatian-Spanish (1,311,967 sentence pairs, 56.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-hr.txt.zip">1.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Croatian-Estonian (353,167 sentence pairs, 13.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-hr.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Croatian-Finnish (634,663 sentence pairs, 22.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-hr.txt.zip">0.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-French (976,263 sentence pairs, 44.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-hr.txt.zip">1.0M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Croatian-Irish (110,148 sentence pairs, 5.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-hr.txt.zip">0.1M</a>
</td><td></td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Croatian-Hungarian (689,257 sentence pairs, 26.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-hu.tmx.gz">0.7M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Croatian-Icelandic (131,635 sentence pairs, 4.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-is.tmx.gz">0.1M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Croatian-Italian (701,247 sentence pairs, 31.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-it.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Central Khmer (204 sentence pairs, 3.77k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-km.tmx.gz">0.2k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Croatian-Korean (30,865 sentence pairs, 1.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-ko.tmx.gz">30.9k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Croatian-Lithuanian (470,038 sentence pairs, 17.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-lt.tmx.gz">0.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Croatian-Latvian (491,567 sentence pairs, 18.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-lv.tmx.gz">0.5M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Croatian-Maltese (120,681 sentence pairs, 5.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-mt.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Burmese (39 sentence pairs, 0.67k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-my.tmx.gz">39</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Croatian-BokmÃ¥l, Norwegian (418,137 sentence pairs, 16.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-nb.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-Nepali (904 sentence pairs, 34.94k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-ne.tmx.gz">0.9k</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Croatian-Dutch (643,883 sentence pairs, 27.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-nl.tmx.gz">0.6M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Croatian-Norwegian Nynorsk (3,494 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-nn.tmx.gz">3.5k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Croatian-Polish (482,485 sentence pairs, 19.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-pl.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Croatian-Pushto (499 sentence pairs, 21.18k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-ps.tmx.gz">0.5k</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Croatian-Portuguese (580,917 sentence pairs, 25.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-pt.tmx.gz">0.6M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Croatian-Romanian (661,069 sentence pairs, 28.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-ro.tmx.gz">0.7M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Croatian-Russian (32,769 sentence pairs, 1.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-ru.tmx.gz">32.8k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Croatian-Sinhala (2,831 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-si.tmx.gz">2.8k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Croatian-Slovak (634,355 sentence pairs, 24.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Croatian-Slovenian (577,828 sentence pairs, 22.96M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-sl.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Croatian-Somali (981 sentence pairs, 55.90k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-so.tmx.gz">1.0k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Croatian-Swedish (608,973 sentence pairs, 24.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-sv.tmx.gz">0.6M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Croatian-Swahili (5,532 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-sw.tmx.gz">5.5k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Croatian-Tagalog (6,329 sentence pairs, 0.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-tl.tmx.gz">6.3k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Croatian-Ukrainian (287,581 sentence pairs, 10.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Croatian-Chinese (53,620 sentence pairs, 1.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hr-zh.tmx.gz">53.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hu plain text' href="download.php?f=MultiParaCrawl/v9b/mono/hu.txt.gz">hu</a>
</th><td>1</td> <td>389.5M</td> <td>26.5M</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hungarian-Bulgarian (2,635,947 sentence pairs, 83.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-hu.txt.zip">2.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Czech (10,329,042 sentence pairs, 230.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-hu.txt.zip">10.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Danish (5,218,256 sentence pairs, 152.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-hu.txt.zip">5.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-German (13,828,410 sentence pairs, 373.96M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-hu.txt.zip">13.8M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hungarian-Greek (3,132,445 sentence pairs, 87.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-hu.txt.zip">3.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Spanish (13,123,032 sentence pairs, 358.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-hu.txt.zip">13.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Hungarian-Estonian (2,194,959 sentence pairs, 56.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-hu.txt.zip">2.2M</a>
</td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Hungarian-Finnish (5,790,242 sentence pairs, 123.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-hu.txt.zip">5.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-French (8,610,337 sentence pairs, 254.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-hu.txt.zip">8.6M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Hungarian-Irish (382,272 sentence pairs, 5.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-hu.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Hungarian-Croatian (689,257 sentence pairs, 26.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-hu.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Hungarian-Icelandic (811,710 sentence pairs, 21.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-is.tmx.gz">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Italian (6,145,112 sentence pairs, 178.09M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-it.tmx.gz">6.1M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Hungarian-Central Khmer (2,807 sentence pairs, 40.63k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-km.tmx.gz">2.8k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Hungarian-Korean (391,206 sentence pairs, 8.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-ko.tmx.gz">0.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hungarian-Lithuanian (3,700,784 sentence pairs, 89.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-lt.tmx.gz">3.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hungarian-Latvian (3,556,517 sentence pairs, 86.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-lv.tmx.gz">3.6M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Hungarian-Maltese (536,138 sentence pairs, 19.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Burmese (808 sentence pairs, 10.62k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-my.tmx.gz">0.8k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hungarian-BokmÃ¥l, Norwegian (3,146,658 sentence pairs, 87.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-nb.tmx.gz">3.1M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Hungarian-Nepali (5,602 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-ne.tmx.gz">5.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Dutch (7,083,132 sentence pairs, 196.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-nl.tmx.gz">7.1M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Hungarian-Norwegian Nynorsk (33,984 sentence pairs, 1.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-nn.tmx.gz">34.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Polish (5,785,449 sentence pairs, 131.01M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-pl.tmx.gz">5.8M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Hungarian-Pushto (2,660 sentence pairs, 66.13k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-ps.tmx.gz">2.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Portuguese (6,372,728 sentence pairs, 177.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-pt.tmx.gz">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Romanian (6,082,240 sentence pairs, 165.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-ro.tmx.gz">6.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Hungarian-Russian (333,006 sentence pairs, 8.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Hungarian-Sinhala (19,455 sentence pairs, 0.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-si.tmx.gz">19.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Slovak (6,940,684 sentence pairs, 153.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-sk.tmx.gz">6.9M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hungarian-Slovenian (2,955,725 sentence pairs, 80.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-sl.tmx.gz">3.0M</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Hungarian-Somali (6,111 sentence pairs, 0.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-so.tmx.gz">6.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Swedish (6,127,264 sentence pairs, 159.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-sv.tmx.gz">6.1M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Hungarian-Swahili (29,687 sentence pairs, 1.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-sw.tmx.gz">29.7k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Hungarian-Tagalog (33,976 sentence pairs, 1.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-tl.tmx.gz">34.0k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Hungarian-Ukrainian (1,946,314 sentence pairs, 46.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-uk.tmx.gz">1.9M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Hungarian-Chinese (698,193 sentence pairs, 9.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/hu-zh.tmx.gz">0.7M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=MultiParaCrawl/v9b/mono/is.txt.gz">is</a>
</th><td>1</td> <td>34.8M</td> <td>2.3M</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Icelandic-Bulgarian (343,682 sentence pairs, 10.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-is.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Icelandic-Czech (893,771 sentence pairs, 24.05M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-is.txt.zip">0.9M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Icelandic-Danish (777,927 sentence pairs, 24.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-is.txt.zip">0.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Icelandic-German (1,559,925 sentence pairs, 45.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-is.txt.zip">1.6M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Icelandic-Greek (422,547 sentence pairs, 11.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-is.txt.zip">0.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Icelandic-Spanish (1,570,241 sentence pairs, 48.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-is.txt.zip">1.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Icelandic-Estonian (521,066 sentence pairs, 13.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-is.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Icelandic-Finnish (885,418 sentence pairs, 22.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-is.txt.zip">0.9M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Icelandic-French (1,014,000 sentence pairs, 32.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-is.txt.zip">1.0M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Icelandic-Irish (241,786 sentence pairs, 7.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-is.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Icelandic-Croatian (131,635 sentence pairs, 4.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-is.txt.zip">0.1M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Icelandic-Hungarian (811,710 sentence pairs, 21.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-is.txt.zip">0.8M</a>
</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Icelandic-Italian (722,901 sentence pairs, 23.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-it.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Icelandic-Central Khmer (1,301 sentence pairs, 22.18k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-km.tmx.gz">1.3k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Icelandic-Korean (38,383 sentence pairs, 1.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-ko.tmx.gz">38.4k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Icelandic-Lithuanian (509,709 sentence pairs, 12.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-lt.tmx.gz">0.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Icelandic-Latvian (590,551 sentence pairs, 15.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-lv.tmx.gz">0.6M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Icelandic-Maltese (107,097 sentence pairs, 2.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-mt.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Burmese (290 sentence pairs, 4.34k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-my.tmx.gz">0.3k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Icelandic-BokmÃ¥l, Norwegian (773,303 sentence pairs, 25.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-nb.tmx.gz">0.8M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Icelandic-Nepali (3,037 sentence pairs, 78.07k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-ne.tmx.gz">3.0k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Icelandic-Dutch (755,382 sentence pairs, 23.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-nl.tmx.gz">0.8M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Icelandic-Norwegian Nynorsk (10,012 sentence pairs, 0.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-nn.tmx.gz">10.0k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Icelandic-Polish (454,381 sentence pairs, 12.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-pl.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Icelandic-Pushto (1,720 sentence pairs, 46.34k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-ps.tmx.gz">1.7k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Icelandic-Portuguese (647,236 sentence pairs, 20.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-pt.tmx.gz">0.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Icelandic-Romanian (525,646 sentence pairs, 16.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-ro.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Icelandic-Russian (47,783 sentence pairs, 1.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-ru.tmx.gz">47.8k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Icelandic-Sinhala (6,826 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-si.tmx.gz">6.8k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Icelandic-Slovak (638,505 sentence pairs, 17.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Icelandic-Slovenian (438,651 sentence pairs, 12.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Icelandic-Somali (3,568 sentence pairs, 0.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-so.tmx.gz">3.6k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Icelandic-Swedish (793,631 sentence pairs, 23.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-sv.tmx.gz">0.8M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Icelandic-Swahili (15,280 sentence pairs, 0.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-sw.tmx.gz">15.3k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Icelandic-Tagalog (15,983 sentence pairs, 0.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-tl.tmx.gz">16.0k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Icelandic-Ukrainian (325,717 sentence pairs, 9.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Icelandic-Chinese (75,303 sentence pairs, 1.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/is-zh.tmx.gz">75.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=MultiParaCrawl/v9b/mono/it.txt.gz">it</a>
</th><td>1</td> <td>1.7G</td> <td>81.7M</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Italian-Bulgarian (2,492,050 sentence pairs, 82.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-it.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Czech (7,275,565 sentence pairs, 211.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-it.txt.zip">7.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Danish (6,700,116 sentence pairs, 219.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-it.txt.zip">6.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-German (32,080,322 sentence pairs, 969.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-it.txt.zip">32.1M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Italian-Greek (3,754,790 sentence pairs, 119.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-it.txt.zip">3.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Spanish (33,845,486 sentence pairs, 1.12G words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-it.txt.zip">33.8M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Italian-Estonian (1,952,074 sentence pairs, 58.82M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-it.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Finnish (5,570,635 sentence pairs, 151.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-it.txt.zip">5.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-French (28,538,190 sentence pairs, 1.02G words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-it.txt.zip">28.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Italian-Irish (432,760 sentence pairs, 15.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-it.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Italian-Croatian (701,247 sentence pairs, 31.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-it.txt.zip">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Hungarian (6,145,112 sentence pairs, 162.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-it.txt.zip">6.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Italian-Icelandic (722,901 sentence pairs, 23.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-it.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Italian-Central Khmer (2,942 sentence pairs, 39.34k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-km.tmx.gz">2.9k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Italian-Korean (597,632 sentence pairs, 16.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-ko.tmx.gz">0.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Italian-Lithuanian (2,937,138 sentence pairs, 83.01M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-lt.tmx.gz">2.9M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Italian-Latvian (2,746,576 sentence pairs, 89.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-lv.tmx.gz">2.7M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Italian-Maltese (491,943 sentence pairs, 20.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Burmese (820 sentence pairs, 9.25k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-my.tmx.gz">0.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-BokmÃ¥l, Norwegian (4,109,181 sentence pairs, 136.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-nb.tmx.gz">4.1M</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Italian-Nepali (5,821 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-ne.tmx.gz">5.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Dutch (13,121,812 sentence pairs, 409.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-nl.tmx.gz">13.1M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Italian-Norwegian Nynorsk (36,963 sentence pairs, 1.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-nn.tmx.gz">37.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Polish (7,789,351 sentence pairs, 236.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-pl.tmx.gz">7.8M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Italian-Pushto (2,720 sentence pairs, 68.25k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-ps.tmx.gz">2.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Portuguese (15,670,142 sentence pairs, 509.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-pt.tmx.gz">15.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Romanian (5,376,639 sentence pairs, 176.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-ro.tmx.gz">5.4M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Italian-Russian (493,035 sentence pairs, 14.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-ru.tmx.gz">0.5M</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Italian-Sinhala (18,953 sentence pairs, 0.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-si.tmx.gz">19.0k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Italian-Slovak (4,404,603 sentence pairs, 127.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-sk.tmx.gz">4.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Italian-Slovenian (2,755,791 sentence pairs, 93.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-sl.tmx.gz">2.8M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Italian-Somali (8,057 sentence pairs, 0.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-so.tmx.gz">8.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Swedish (8,356,773 sentence pairs, 262.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-sv.tmx.gz">8.4M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Italian-Swahili (39,987 sentence pairs, 1.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-sw.tmx.gz">40.0k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Italian-Tagalog (49,977 sentence pairs, 2.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-tl.tmx.gz">50.0k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Italian-Ukrainian (1,923,959 sentence pairs, 52.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-uk.tmx.gz">1.9M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Italian-Chinese (1,207,121 sentence pairs, 21.34M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/it-zh.tmx.gz">1.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized km plain text' href="download.php?f=MultiParaCrawl/v9b/mono/km.txt.gz">km</a>
</th><td>1</td> <td>1.8M</td> <td>59.8k</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Bulgarian (1,270 sentence pairs, 22.85k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-km.txt.zip">1.3k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Czech (2,775 sentence pairs, 35.85k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-km.txt.zip">2.8k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Danish (1,453 sentence pairs, 28.20k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-km.txt.zip">1.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Central Khmer-German (6,182 sentence pairs, 70.22k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-km.txt.zip">6.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Greek (1,362 sentence pairs, 21.60k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-km.txt.zip">1.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Central Khmer-Spanish (5,994 sentence pairs, 83.04k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-km.txt.zip">6.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Estonian (1,169 sentence pairs, 14.21k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-km.txt.zip">1.2k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Finnish (2,007 sentence pairs, 21.99k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-km.txt.zip">2.0k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Central Khmer-French (4,076 sentence pairs, 56.05k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-km.txt.zip">4.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Irish (1,164 sentence pairs, 25.24k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-km.txt.zip">1.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Croatian (204 sentence pairs, 3.77k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-km.txt.zip">0.2k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Central Khmer-Hungarian (2,807 sentence pairs, 40.63k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-km.txt.zip">2.8k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Icelandic (1,301 sentence pairs, 22.18k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-km.txt.zip">1.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Central Khmer-Italian (2,942 sentence pairs, 39.34k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-km.txt.zip">2.9k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Central Khmer-Korean (484 sentence pairs, 7.93k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-ko.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Lithuanian (1,337 sentence pairs, 17.04k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-lt.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Latvian (1,278 sentence pairs, 17.18k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-lv.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Maltese (461 sentence pairs, 6.89k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-mt.tmx.gz">0.5k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Central Khmer-Burmese (5,550 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-my.tmx.gz">5.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-BokmÃ¥l, Norwegian (787 sentence pairs, 17.67k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-nb.tmx.gz">0.8k</a>
</td><td bgcolor="#fff2ed"><a rel="nofollow" title='Central Khmer-Nepali (12,379 sentence pairs, 0.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-ne.tmx.gz">12.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Dutch (1,665 sentence pairs, 32.91k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-nl.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Norwegian Nynorsk (8 sentence pairs, 41 words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-nn.tmx.gz">8</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Central Khmer-Polish (901 sentence pairs, 12.06k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-pl.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Pushto (1,097 sentence pairs, 36.05k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-ps.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Portuguese (1,483 sentence pairs, 26.89k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-pt.tmx.gz">1.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Romanian (1,750 sentence pairs, 35.92k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-ro.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Central Khmer-Russian (2,367 sentence pairs, 58.49k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-ru.tmx.gz">2.4k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Central Khmer-Sinhala (19,686 sentence pairs, 0.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-si.tmx.gz">19.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Slovak (1,174 sentence pairs, 15.60k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-sk.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Central Khmer-Slovenian (920 sentence pairs, 11.89k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-sl.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Somali (193 sentence pairs, 6.95k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-so.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Swedish (1,704 sentence pairs, 31.66k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-sv.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Swahili (869 sentence pairs, 26.13k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-sw.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Tagalog (556 sentence pairs, 17.76k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-tl.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Central Khmer-Ukrainian (3,027 sentence pairs, 70.20k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-uk.tmx.gz">3.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Chinese (501 sentence pairs, 5.13k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/km-zh.tmx.gz">0.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ko plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ko.txt.gz">ko</a>
</th><td>1</td> <td>53.4M</td> <td>3.7M</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Korean-Bulgarian (185,262 sentence pairs, 5.05M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-ko.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Korean-Czech (448,873 sentence pairs, 9.34M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-ko.txt.zip">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Korean-Danish (414,876 sentence pairs, 11.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-ko.txt.zip">0.4M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Korean-German (1,284,016 sentence pairs, 31.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-ko.txt.zip">1.3M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Korean-Greek (270,636 sentence pairs, 6.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-ko.txt.zip">0.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Korean-Spanish (1,495,640 sentence pairs, 48.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-ko.txt.zip">1.5M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Korean-Estonian (108,757 sentence pairs, 2.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-ko.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Korean-Finnish (372,691 sentence pairs, 8.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-ko.txt.zip">0.4M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Korean-French (951,139 sentence pairs, 27.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-ko.txt.zip">1.0M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Korean-Irish (22,991 sentence pairs, 0.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-ko.txt.zip">23.0k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Korean-Croatian (30,865 sentence pairs, 1.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-ko.txt.zip">30.9k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Korean-Hungarian (391,206 sentence pairs, 8.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-ko.txt.zip">0.4M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Korean-Icelandic (38,383 sentence pairs, 1.05M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-ko.txt.zip">38.4k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Korean-Italian (597,632 sentence pairs, 16.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-ko.txt.zip">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Central Khmer (484 sentence pairs, 7.93k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-ko.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Korean-Lithuanian (122,021 sentence pairs, 2.73M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-lt.tmx.gz">0.1M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Korean-Latvian (103,482 sentence pairs, 2.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Korean-Maltese (8,147 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-mt.tmx.gz">8.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Burmese (301 sentence pairs, 4.92k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-my.tmx.gz">0.3k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Korean-BokmÃ¥l, Norwegian (183,266 sentence pairs, 5.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-nb.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Korean-Nepali (1,218 sentence pairs, 28.88k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-ne.tmx.gz">1.2k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Korean-Dutch (449,503 sentence pairs, 12.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-nl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Korean-Norwegian Nynorsk (5,174 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-nn.tmx.gz">5.2k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Korean-Polish (250,888 sentence pairs, 5.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-pl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Pushto (276 sentence pairs, 4.21k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-ps.tmx.gz">0.3k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Korean-Portuguese (606,677 sentence pairs, 17.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-pt.tmx.gz">0.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Korean-Romanian (225,162 sentence pairs, 6.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Korean-Russian (78,481 sentence pairs, 2.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-ru.tmx.gz">78.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-Sinhala (2,227 sentence pairs, 41.86k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-si.tmx.gz">2.2k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Korean-Slovak (160,339 sentence pairs, 3.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Korean-Slovenian (78,619 sentence pairs, 1.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-sl.tmx.gz">78.6k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-Somali (926 sentence pairs, 43.75k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-so.tmx.gz">0.9k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Korean-Swedish (352,953 sentence pairs, 8.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Korean-Swahili (8,069 sentence pairs, 0.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-sw.tmx.gz">8.1k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Korean-Tagalog (38,409 sentence pairs, 1.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-tl.tmx.gz">38.4k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Korean-Ukrainian (164,204 sentence pairs, 4.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-uk.tmx.gz">0.2M</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Korean-Chinese (831,643 sentence pairs, 13.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ko-zh.tmx.gz">0.8M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=MultiParaCrawl/v9b/mono/lt.txt.gz">lt</a>
</th><td>1</td> <td>147.5M</td> <td>10.5M</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Lithuanian-Bulgarian (1,827,829 sentence pairs, 53.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-lt.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Lithuanian-Czech (3,950,670 sentence pairs, 94.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-lt.txt.zip">4.0M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Lithuanian-Danish (2,660,496 sentence pairs, 83.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-lt.txt.zip">2.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-German (5,486,923 sentence pairs, 132.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-lt.txt.zip">5.5M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Lithuanian-Greek (1,942,014 sentence pairs, 54.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-lt.txt.zip">1.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Spanish (5,573,118 sentence pairs, 149.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-lt.txt.zip">5.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Lithuanian-Estonian (2,153,238 sentence pairs, 53.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-lt.txt.zip">2.2M</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Lithuanian-Finnish (3,128,467 sentence pairs, 66.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-lt.txt.zip">3.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-French (3,988,322 sentence pairs, 131.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-lt.txt.zip">4.0M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Lithuanian-Irish (364,916 sentence pairs, 11.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-lt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Lithuanian-Croatian (470,038 sentence pairs, 17.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-lt.txt.zip">0.5M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Lithuanian-Hungarian (3,700,784 sentence pairs, 89.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-lt.txt.zip">3.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Lithuanian-Icelandic (509,709 sentence pairs, 12.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-lt.txt.zip">0.5M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Lithuanian-Italian (2,937,138 sentence pairs, 92.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-lt.txt.zip">2.9M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Lithuanian-Central Khmer (1,337 sentence pairs, 17.04k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-lt.txt.zip">1.3k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Lithuanian-Korean (122,021 sentence pairs, 2.73M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-lt.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Lithuanian-Latvian (3,428,689 sentence pairs, 82.97M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-lv.tmx.gz">3.4M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Lithuanian-Maltese (515,164 sentence pairs, 17.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Lithuanian-Burmese (610 sentence pairs, 7.56k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-my.tmx.gz">0.6k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Lithuanian-BokmÃ¥l, Norwegian (1,555,940 sentence pairs, 43.89M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-nb.tmx.gz">1.6M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Lithuanian-Nepali (4,797 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-ne.tmx.gz">4.8k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Lithuanian-Dutch (3,155,027 sentence pairs, 86.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-nl.tmx.gz">3.2M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Lithuanian-Norwegian Nynorsk (20,525 sentence pairs, 0.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-nn.tmx.gz">20.5k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Lithuanian-Polish (2,338,573 sentence pairs, 61.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-pl.tmx.gz">2.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Lithuanian-Pushto (2,703 sentence pairs, 65.24k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-ps.tmx.gz">2.7k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Portuguese (2,863,225 sentence pairs, 72.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-pt.tmx.gz">2.9M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Lithuanian-Romanian (2,810,312 sentence pairs, 80.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-ro.tmx.gz">2.8M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Lithuanian-Russian (171,127 sentence pairs, 4.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Lithuanian-Sinhala (11,572 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-si.tmx.gz">11.6k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Slovak (2,977,201 sentence pairs, 73.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-sk.tmx.gz">3.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Lithuanian-Slovenian (2,011,194 sentence pairs, 54.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-sl.tmx.gz">2.0M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Lithuanian-Somali (3,899 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-so.tmx.gz">3.9k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Lithuanian-Swedish (3,066,457 sentence pairs, 79.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-sv.tmx.gz">3.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Lithuanian-Swahili (22,792 sentence pairs, 0.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-sw.tmx.gz">22.8k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Lithuanian-Tagalog (21,819 sentence pairs, 0.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-tl.tmx.gz">21.8k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Lithuanian-Ukrainian (1,196,565 sentence pairs, 26.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-uk.tmx.gz">1.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Lithuanian-Chinese (260,008 sentence pairs, 3.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lt-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=MultiParaCrawl/v9b/mono/lv.txt.gz">lv</a>
</th><td>1</td> <td>154.2M</td> <td>10.1M</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Latvian-Bulgarian (1,855,547 sentence pairs, 54.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-lv.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Latvian-Czech (3,874,196 sentence pairs, 95.87M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-lv.txt.zip">3.9M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Latvian-Danish (2,725,846 sentence pairs, 81.98M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-lv.txt.zip">2.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-German (5,054,509 sentence pairs, 128.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-lv.txt.zip">5.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Latvian-Greek (1,883,367 sentence pairs, 53.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-lv.txt.zip">1.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Spanish (5,130,460 sentence pairs, 160.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-lv.txt.zip">5.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Latvian-Estonian (2,255,416 sentence pairs, 56.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-lv.txt.zip">2.3M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Latvian-Finnish (3,093,656 sentence pairs, 71.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-lv.txt.zip">3.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Latvian-French (3,680,645 sentence pairs, 111.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-lv.txt.zip">3.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Latvian-Irish (406,356 sentence pairs, 13.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-lv.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Latvian-Croatian (491,567 sentence pairs, 18.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-lv.txt.zip">0.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Latvian-Hungarian (3,556,517 sentence pairs, 86.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-lv.txt.zip">3.6M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Icelandic (590,551 sentence pairs, 15.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-lv.txt.zip">0.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Italian (2,746,576 sentence pairs, 81.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-lv.txt.zip">2.7M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latvian-Central Khmer (1,278 sentence pairs, 17.18k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-lv.txt.zip">1.3k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Latvian-Korean (103,482 sentence pairs, 2.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-lv.txt.zip">0.1M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Latvian-Lithuanian (3,428,689 sentence pairs, 82.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-lv.txt.zip">3.4M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Latvian-Maltese (557,354 sentence pairs, 19.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-mt.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Latvian-Burmese (672 sentence pairs, 8.70k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-my.tmx.gz">0.7k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Latvian-BokmÃ¥l, Norwegian (1,609,679 sentence pairs, 46.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-nb.tmx.gz">1.6M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Latvian-Nepali (4,567 sentence pairs, 0.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-ne.tmx.gz">4.6k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Latvian-Dutch (3,001,020 sentence pairs, 85.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-nl.tmx.gz">3.0M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Latvian-Norwegian Nynorsk (14,918 sentence pairs, 0.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-nn.tmx.gz">14.9k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Latvian-Polish (2,194,381 sentence pairs, 60.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-pl.tmx.gz">2.2M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Latvian-Pushto (2,948 sentence pairs, 76.87k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-ps.tmx.gz">2.9k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Portuguese (2,648,963 sentence pairs, 79.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-pt.tmx.gz">2.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Romanian (2,784,121 sentence pairs, 81.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-ro.tmx.gz">2.8M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Latvian-Russian (141,854 sentence pairs, 3.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Latvian-Sinhala (11,285 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-si.tmx.gz">11.3k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Slovak (3,099,843 sentence pairs, 79.07M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-sk.tmx.gz">3.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Latvian-Slovenian (2,133,599 sentence pairs, 56.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-sl.tmx.gz">2.1M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Latvian-Somali (1,332 sentence pairs, 57.39k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-so.tmx.gz">1.3k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Swedish (3,071,548 sentence pairs, 78.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-sv.tmx.gz">3.1M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Latvian-Swahili (14,927 sentence pairs, 0.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-sw.tmx.gz">14.9k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Latvian-Tagalog (15,423 sentence pairs, 0.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-tl.tmx.gz">15.4k</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Latvian-Ukrainian (1,294,382 sentence pairs, 29.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-uk.tmx.gz">1.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Latvian-Chinese (243,285 sentence pairs, 3.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/lv-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=MultiParaCrawl/v9b/mono/mt.txt.gz">mt</a>
</th><td>1</td> <td>22.9M</td> <td>1.1M</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Maltese-Bulgarian (386,108 sentence pairs, 15.82M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-mt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Maltese-Czech (553,232 sentence pairs, 19.89M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-mt.txt.zip">0.6M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Maltese-Danish (456,212 sentence pairs, 18.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-mt.txt.zip">0.5M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Maltese-German (679,679 sentence pairs, 23.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-mt.txt.zip">0.7M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Maltese-Greek (419,757 sentence pairs, 17.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-mt.txt.zip">0.4M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Maltese-Spanish (674,152 sentence pairs, 26.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-mt.txt.zip">0.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Maltese-Estonian (439,025 sentence pairs, 15.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-mt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Maltese-Finnish (475,035 sentence pairs, 15.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-mt.txt.zip">0.5M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Maltese-French (622,700 sentence pairs, 25.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-mt.txt.zip">0.6M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Maltese-Irish (201,925 sentence pairs, 7.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-mt.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Maltese-Croatian (120,681 sentence pairs, 5.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-mt.txt.zip">0.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Maltese-Hungarian (536,138 sentence pairs, 19.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-mt.txt.zip">0.5M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Maltese-Icelandic (107,097 sentence pairs, 2.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-mt.txt.zip">0.1M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Maltese-Italian (491,943 sentence pairs, 20.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-mt.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Central Khmer (461 sentence pairs, 6.89k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-mt.txt.zip">0.5k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Maltese-Korean (8,147 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-mt.txt.zip">8.1k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Maltese-Lithuanian (515,164 sentence pairs, 17.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-mt.txt.zip">0.5M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Maltese-Latvian (557,354 sentence pairs, 19.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-mt.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Burmese (232 sentence pairs, 3.87k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-my.tmx.gz">0.2k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Maltese-BokmÃ¥l, Norwegian (106,305 sentence pairs, 3.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-nb.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Maltese-Nepali (1,546 sentence pairs, 36.91k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-ne.tmx.gz">1.5k</a>
</td><td bgcolor="#d8ffc6"><a rel="nofollow" title='Maltese-Dutch (475,333 sentence pairs, 19.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-nl.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Maltese-Norwegian Nynorsk (1,358 sentence pairs, 42.64k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-nn.tmx.gz">1.4k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Maltese-Polish (406,224 sentence pairs, 16.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-pl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Maltese-Pushto (1,072 sentence pairs, 29.74k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-ps.tmx.gz">1.1k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Maltese-Portuguese (467,652 sentence pairs, 19.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-pt.tmx.gz">0.5M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Maltese-Romanian (492,767 sentence pairs, 20.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-ro.tmx.gz">0.5M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Maltese-Russian (13,580 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-ru.tmx.gz">13.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Maltese-Sinhala (2,937 sentence pairs, 56.61k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-si.tmx.gz">2.9k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Maltese-Slovak (520,789 sentence pairs, 19.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-sk.tmx.gz">0.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Maltese-Slovenian (455,119 sentence pairs, 17.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-sl.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Maltese-Somali (303 sentence pairs, 13.63k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-so.tmx.gz">0.3k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Maltese-Swedish (481,282 sentence pairs, 18.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-sv.tmx.gz">0.5M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Maltese-Swahili (3,770 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-sw.tmx.gz">3.8k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Maltese-Tagalog (4,026 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-tl.tmx.gz">4.0k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Maltese-Ukrainian (100,436 sentence pairs, 2.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-uk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Maltese-Chinese (12,331 sentence pairs, 0.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/mt-zh.tmx.gz">12.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized my plain text' href="download.php?f=MultiParaCrawl/v9b/mono/my.txt.gz">my</a>
</th><td>1</td> <td>0.8M</td> <td>29.7k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Bulgarian (352 sentence pairs, 4.33k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-my.txt.zip">0.4k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Czech (1,035 sentence pairs, 11.91k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-my.txt.zip">1.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Danish (347 sentence pairs, 6.17k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-my.txt.zip">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Burmese-German (1,917 sentence pairs, 19.72k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-my.txt.zip">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Greek (386 sentence pairs, 4.09k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-my.txt.zip">0.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Burmese-Spanish (2,370 sentence pairs, 24.07k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-my.txt.zip">2.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Estonian (417 sentence pairs, 4.51k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-my.txt.zip">0.4k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Finnish (697 sentence pairs, 6.84k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-my.txt.zip">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Burmese-French (1,216 sentence pairs, 14.90k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-my.txt.zip">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Irish (334 sentence pairs, 6.83k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-my.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Croatian (39 sentence pairs, 0.67k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-my.txt.zip">39</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Hungarian (808 sentence pairs, 10.62k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-my.txt.zip">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Icelandic (290 sentence pairs, 4.34k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-my.txt.zip">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Italian (820 sentence pairs, 9.25k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-my.txt.zip">0.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Burmese-Central Khmer (5,550 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-my.txt.zip">5.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Korean (301 sentence pairs, 4.92k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-my.txt.zip">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Lithuanian (610 sentence pairs, 7.56k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-my.txt.zip">0.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Latvian (672 sentence pairs, 8.70k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-my.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Maltese (232 sentence pairs, 3.87k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-my.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-BokmÃ¥l, Norwegian (152 sentence pairs, 2.97k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-nb.tmx.gz">0.2k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Burmese-Nepali (3,364 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-ne.tmx.gz">3.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Dutch (433 sentence pairs, 5.77k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-nl.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Polish (306 sentence pairs, 3.88k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-pl.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Burmese-Pushto (634 sentence pairs, 26.82k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-ps.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Portuguese (442 sentence pairs, 2.32k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-pt.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Romanian (399 sentence pairs, 6.05k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-ro.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Burmese-Russian (1,432 sentence pairs, 38.74k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-ru.tmx.gz">1.4k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Burmese-Sinhala (5,536 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-si.tmx.gz">5.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Slovak (429 sentence pairs, 5.98k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-sk.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Slovenian (287 sentence pairs, 3.59k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-sl.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Somali (57 sentence pairs, 1.77k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-so.tmx.gz">57</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Swedish (421 sentence pairs, 5.70k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-sv.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Burmese-Swahili (461 sentence pairs, 14.84k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-sw.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Tagalog (365 sentence pairs, 12.39k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-tl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Burmese-Ukrainian (793 sentence pairs, 14.56k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-uk.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Chinese (248 sentence pairs, 2.63k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/my-zh.tmx.gz">0.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nb plain text' href="download.php?f=MultiParaCrawl/v9b/mono/nb.txt.gz">nb</a>
</th><td>1</td> <td>259.1M</td> <td>14.7M</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bulgarian (1,302,562 sentence pairs, 41.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-nb.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Czech (3,933,204 sentence pairs, 118.73M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-nb.txt.zip">3.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Danish (6,477,743 sentence pairs, 203.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-nb.txt.zip">6.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-German (9,620,141 sentence pairs, 289.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-nb.txt.zip">9.6M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Greek (1,723,758 sentence pairs, 25.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-nb.txt.zip">1.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Spanish (9,150,312 sentence pairs, 314.80M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-nb.txt.zip">9.2M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Estonian (1,149,514 sentence pairs, 32.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-nb.txt.zip">1.1M</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Finnish (4,067,952 sentence pairs, 112.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-nb.txt.zip">4.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-French (5,935,091 sentence pairs, 202.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-nb.txt.zip">5.9M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Irish (254,026 sentence pairs, 9.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-nb.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Croatian (418,137 sentence pairs, 15.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-nb.txt.zip">0.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hungarian (3,146,658 sentence pairs, 91.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-nb.txt.zip">3.1M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Icelandic (773,303 sentence pairs, 25.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-nb.txt.zip">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Italian (4,109,181 sentence pairs, 136.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-nb.txt.zip">4.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Central Khmer (787 sentence pairs, 17.67k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-nb.txt.zip">0.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Korean (183,266 sentence pairs, 5.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-nb.txt.zip">0.2M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Lithuanian (1,555,940 sentence pairs, 43.89M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-nb.txt.zip">1.6M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Latvian (1,609,679 sentence pairs, 46.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-nb.txt.zip">1.6M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Maltese (106,305 sentence pairs, 3.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-nb.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Burmese (152 sentence pairs, 2.97k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-nb.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Nepali (2,965 sentence pairs, 91.70k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-ne.tmx.gz">3.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Dutch (5,514,923 sentence pairs, 178.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-nl.tmx.gz">5.5M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Norwegian Nynorsk (56,652 sentence pairs, 1.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-nn.tmx.gz">56.7k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Polish (2,777,359 sentence pairs, 81.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-pl.tmx.gz">2.8M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Pushto (1,283 sentence pairs, 42.64k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-ps.tmx.gz">1.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Portuguese (4,400,945 sentence pairs, 143.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-pt.tmx.gz">4.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Romanian (2,474,893 sentence pairs, 84.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-ro.tmx.gz">2.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Russian (157,516 sentence pairs, 5.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Sinhala (8,049 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-si.tmx.gz">8.0k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovak (2,239,607 sentence pairs, 68.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-sk.tmx.gz">2.2M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovenian (1,292,912 sentence pairs, 41.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-sl.tmx.gz">1.3M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Somali (2,811 sentence pairs, 0.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-so.tmx.gz">2.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Swedish (6,098,773 sentence pairs, 190.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-sv.tmx.gz">6.1M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Swahili (15,265 sentence pairs, 0.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-sw.tmx.gz">15.3k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Tagalog (18,313 sentence pairs, 0.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-tl.tmx.gz">18.3k</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Ukrainian (1,048,025 sentence pairs, 31.07M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-uk.tmx.gz">1.0M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Chinese (435,063 sentence pairs, 7.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nb-zh.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ne plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ne.txt.gz">ne</a>
</th><td>1</td> <td>3.7M</td> <td>86.9k</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Nepali-Bulgarian (3,408 sentence pairs, 97.57k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-ne.txt.zip">3.4k</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Nepali-Czech (6,066 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-ne.txt.zip">6.1k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Nepali-Danish (4,613 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-ne.txt.zip">4.6k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Nepali-German (12,251 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-ne.txt.zip">12.3k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Nepali-Greek (3,621 sentence pairs, 91.46k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-ne.txt.zip">3.6k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Nepali-Spanish (11,924 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-ne.txt.zip">11.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Nepali-Estonian (3,208 sentence pairs, 68.34k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-ne.txt.zip">3.2k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Nepali-Finnish (4,341 sentence pairs, 91.68k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-ne.txt.zip">4.3k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Nepali-French (8,355 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-ne.txt.zip">8.4k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Nepali-Irish (4,173 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-ne.txt.zip">4.2k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Nepali-Croatian (904 sentence pairs, 34.94k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-ne.txt.zip">0.9k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Nepali-Hungarian (5,602 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-ne.txt.zip">5.6k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Nepali-Icelandic (3,037 sentence pairs, 78.07k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-ne.txt.zip">3.0k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Nepali-Italian (5,821 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-ne.txt.zip">5.8k</a>
</td><td bgcolor="#fff2ed"><a rel="nofollow" title='Nepali-Central Khmer (12,379 sentence pairs, 0.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-ne.txt.zip">12.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Nepali-Korean (1,218 sentence pairs, 28.88k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-ne.txt.zip">1.2k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Nepali-Lithuanian (4,797 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-ne.txt.zip">4.8k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Nepali-Latvian (4,567 sentence pairs, 0.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-ne.txt.zip">4.6k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Nepali-Maltese (1,546 sentence pairs, 36.91k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-ne.txt.zip">1.5k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Nepali-Burmese (3,364 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-ne.txt.zip">3.4k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Nepali-BokmÃ¥l, Norwegian (2,965 sentence pairs, 91.70k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-ne.txt.zip">3.0k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Nepali-Dutch (4,557 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-nl.tmx.gz">4.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Nepali-Norwegian Nynorsk (24 sentence pairs, 0.69k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-nn.tmx.gz">24</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Nepali-Polish (2,370 sentence pairs, 58.74k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-pl.tmx.gz">2.4k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Nepali-Pushto (3,970 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-ps.tmx.gz">4.0k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Nepali-Portuguese (5,005 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-pt.tmx.gz">5.0k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Nepali-Romanian (4,201 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-ro.tmx.gz">4.2k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Nepali-Russian (4,018 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-ru.tmx.gz">4.0k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Nepali-Sinhala (33,795 sentence pairs, 1.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-si.tmx.gz">33.8k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Nepali-Slovak (3,738 sentence pairs, 88.53k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-sk.tmx.gz">3.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Nepali-Slovenian (2,871 sentence pairs, 68.39k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-sl.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Nepali-Somali (431 sentence pairs, 20.54k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-so.tmx.gz">0.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Nepali-Swedish (5,390 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-sv.tmx.gz">5.4k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Nepali-Swahili (2,211 sentence pairs, 88.81k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-sw.tmx.gz">2.2k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Nepali-Tagalog (1,383 sentence pairs, 62.03k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-tl.tmx.gz">1.4k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Nepali-Ukrainian (8,444 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-uk.tmx.gz">8.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Nepali-Chinese (1,791 sentence pairs, 32.62k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ne-zh.tmx.gz">1.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=MultiParaCrawl/v9b/mono/nl.txt.gz">nl</a>
</th><td>1</td> <td>1.2G</td> <td>72.7M</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Dutch-Bulgarian (2,720,451 sentence pairs, 86.72M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-nl.txt.zip">2.7M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Czech (8,887,796 sentence pairs, 248.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-nl.txt.zip">8.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Danish (9,677,383 sentence pairs, 301.85M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-nl.txt.zip">9.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-German (33,966,183 sentence pairs, 931.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-nl.txt.zip">34.0M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Dutch-Greek (4,315,951 sentence pairs, 126.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-nl.txt.zip">4.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Spanish (28,837,228 sentence pairs, 899.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-nl.txt.zip">28.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-Estonian (2,196,205 sentence pairs, 63.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-nl.txt.zip">2.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Finnish (7,521,458 sentence pairs, 164.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-nl.txt.zip">7.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-French (21,877,312 sentence pairs, 705.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-nl.txt.zip">21.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Dutch-Irish (394,787 sentence pairs, 14.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-nl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d5ffca"><a rel="nofollow" title='Dutch-Croatian (643,883 sentence pairs, 27.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-nl.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Hungarian (7,083,132 sentence pairs, 196.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-nl.txt.zip">7.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Dutch-Icelandic (755,382 sentence pairs, 23.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-nl.txt.zip">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Italian (13,121,812 sentence pairs, 409.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-nl.txt.zip">13.1M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Dutch-Central Khmer (1,665 sentence pairs, 32.91k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-nl.txt.zip">1.7k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Dutch-Korean (449,503 sentence pairs, 12.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-nl.txt.zip">0.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Dutch-Lithuanian (3,155,027 sentence pairs, 86.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-nl.txt.zip">3.2M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Dutch-Latvian (3,001,020 sentence pairs, 77.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-nl.txt.zip">3.0M</a>
</td><td bgcolor="#d8ffc6"><a rel="nofollow" title='Dutch-Maltese (475,333 sentence pairs, 19.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-nl.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Burmese (433 sentence pairs, 5.77k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-nl.txt.zip">0.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-BokmÃ¥l, Norwegian (5,514,923 sentence pairs, 172.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-nl.txt.zip">5.5M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Dutch-Nepali (4,557 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-nl.txt.zip">4.6k</a>
</td><td></td><td bgcolor="#ffffe7"><a rel="nofollow" title='Dutch-Norwegian Nynorsk (51,638 sentence pairs, 1.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-nn.tmx.gz">51.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Polish (7,510,089 sentence pairs, 214.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-pl.tmx.gz">7.5M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Dutch-Pushto (2,986 sentence pairs, 67.47k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-ps.tmx.gz">3.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Portuguese (13,028,274 sentence pairs, 397.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-pt.tmx.gz">13.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Romanian (6,444,522 sentence pairs, 199.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-ro.tmx.gz">6.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Dutch-Russian (514,349 sentence pairs, 15.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-ru.tmx.gz">0.5M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Dutch-Sinhala (25,593 sentence pairs, 0.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-si.tmx.gz">25.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Slovak (5,451,639 sentence pairs, 150.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-sk.tmx.gz">5.5M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Dutch-Slovenian (3,219,419 sentence pairs, 97.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-sl.tmx.gz">3.2M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Dutch-Somali (7,303 sentence pairs, 0.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-so.tmx.gz">7.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Swedish (13,076,162 sentence pairs, 376.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-sv.tmx.gz">13.1M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Dutch-Swahili (39,370 sentence pairs, 1.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-sw.tmx.gz">39.4k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Dutch-Tagalog (43,902 sentence pairs, 2.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-tl.tmx.gz">43.9k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Dutch-Ukrainian (2,228,417 sentence pairs, 55.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-uk.tmx.gz">2.2M</a>
</td><td bgcolor="#d7ffc9"><a rel="nofollow" title='Dutch-Chinese (1,438,804 sentence pairs, 23.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nl-zh.tmx.gz">1.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nn plain text' href="download.php?f=MultiParaCrawl/v9b/mono/nn.txt.gz">nn</a>
</th><td>1</td> <td>5.4M</td> <td>0.3M</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Norwegian Nynorsk-Bulgarian (19,434 sentence pairs, 0.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-nn.txt.zip">19.4k</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Norwegian Nynorsk-Czech (35,434 sentence pairs, 0.98M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-nn.txt.zip">35.4k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Norwegian Nynorsk-Danish (22,610 sentence pairs, 0.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-nn.txt.zip">22.6k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Norwegian Nynorsk-German (99,656 sentence pairs, 2.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-nn.txt.zip">99.7k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Norwegian Nynorsk-Greek (27,603 sentence pairs, 0.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-nn.txt.zip">27.6k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Norwegian Nynorsk-Spanish (110,015 sentence pairs, 3.85M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-nn.txt.zip">0.1M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Norwegian Nynorsk-Estonian (12,331 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-nn.txt.zip">12.3k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Norwegian Nynorsk-Finnish (28,547 sentence pairs, 0.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-nn.txt.zip">28.5k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Norwegian Nynorsk-French (55,811 sentence pairs, 1.87M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-nn.txt.zip">55.8k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Norwegian Nynorsk-Irish (3,031 sentence pairs, 0.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-nn.txt.zip">3.0k</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Norwegian Nynorsk-Croatian (3,494 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-nn.txt.zip">3.5k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Norwegian Nynorsk-Hungarian (33,984 sentence pairs, 1.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-nn.txt.zip">34.0k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Norwegian Nynorsk-Icelandic (10,012 sentence pairs, 0.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-nn.txt.zip">10.0k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Norwegian Nynorsk-Italian (36,963 sentence pairs, 1.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-nn.txt.zip">37.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norwegian Nynorsk-Central Khmer (8 sentence pairs, 41 words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-nn.txt.zip">8</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Norwegian Nynorsk-Korean (5,174 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-nn.txt.zip">5.2k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Norwegian Nynorsk-Lithuanian (20,525 sentence pairs, 0.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-nn.txt.zip">20.5k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Norwegian Nynorsk-Latvian (14,918 sentence pairs, 0.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-nn.txt.zip">14.9k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Norwegian Nynorsk-Maltese (1,358 sentence pairs, 42.64k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-nn.txt.zip">1.4k</a>
</td><td></td><td bgcolor="#ffffe0"><a rel="nofollow" title='Norwegian Nynorsk-BokmÃ¥l, Norwegian (56,652 sentence pairs, 1.98M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-nn.txt.zip">56.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norwegian Nynorsk-Nepali (24 sentence pairs, 0.69k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-nn.txt.zip">24</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Norwegian Nynorsk-Dutch (51,638 sentence pairs, 1.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-nn.txt.zip">51.6k</a>
</td><td></td><td bgcolor="#ffeae7"><a rel="nofollow" title='Norwegian Nynorsk-Polish (9,189 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-pl.tmx.gz">9.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norwegian Nynorsk-Pushto (2 sentence pairs, 6 words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-ps.tmx.gz">2</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Norwegian Nynorsk-Portuguese (23,472 sentence pairs, 0.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-pt.tmx.gz">23.5k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Norwegian Nynorsk-Romanian (21,020 sentence pairs, 0.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-ro.tmx.gz">21.0k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Norwegian Nynorsk-Russian (4,580 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-ru.tmx.gz">4.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norwegian Nynorsk-Sinhala (142 sentence pairs, 3.77k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-si.tmx.gz">0.1k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Norwegian Nynorsk-Slovak (17,507 sentence pairs, 0.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-sk.tmx.gz">17.5k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Norwegian Nynorsk-Slovenian (8,091 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-sl.tmx.gz">8.1k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Norwegian Nynorsk-Somali (868 sentence pairs, 52.33k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-so.tmx.gz">0.9k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Norwegian Nynorsk-Swedish (20,758 sentence pairs, 0.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-sv.tmx.gz">20.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Norwegian Nynorsk-Swahili (2,930 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-sw.tmx.gz">2.9k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Norwegian Nynorsk-Tagalog (2,968 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-tl.tmx.gz">3.0k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Norwegian Nynorsk-Ukrainian (14,447 sentence pairs, 0.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-uk.tmx.gz">14.4k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Norwegian Nynorsk-Chinese (9,288 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/nn-zh.tmx.gz">9.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=MultiParaCrawl/v9b/mono/pl.txt.gz">pl</a>
</th><td>1</td> <td>543.3M</td> <td>33.7M</td><td bgcolor="#caffca"><a rel="nofollow" title='Polish-Bulgarian (1,983,920 sentence pairs, 62.01M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-pl.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Czech (7,673,889 sentence pairs, 178.01M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-pl.txt.zip">7.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Danish (4,620,225 sentence pairs, 137.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-pl.txt.zip">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-German (15,109,077 sentence pairs, 413.70M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-pl.txt.zip">15.1M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Polish-Greek (2,563,589 sentence pairs, 72.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-pl.txt.zip">2.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Spanish (14,379,361 sentence pairs, 387.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-pl.txt.zip">14.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Polish-Estonian (1,539,962 sentence pairs, 43.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-pl.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Polish-Finnish (4,015,766 sentence pairs, 85.88M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-pl.txt.zip">4.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-French (10,978,872 sentence pairs, 376.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-pl.txt.zip">11.0M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Polish-Irish (319,033 sentence pairs, 10.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-pl.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Polish-Croatian (482,485 sentence pairs, 19.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-pl.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Hungarian (5,785,449 sentence pairs, 134.01M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-pl.txt.zip">5.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Polish-Icelandic (454,381 sentence pairs, 12.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-pl.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Italian (7,789,351 sentence pairs, 236.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-pl.txt.zip">7.8M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Central Khmer (901 sentence pairs, 12.06k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-pl.txt.zip">0.9k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Polish-Korean (250,888 sentence pairs, 5.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-pl.txt.zip">0.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Polish-Lithuanian (2,338,573 sentence pairs, 61.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-pl.txt.zip">2.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Polish-Latvian (2,194,381 sentence pairs, 58.07M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-pl.txt.zip">2.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Polish-Maltese (406,224 sentence pairs, 16.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-pl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Burmese (306 sentence pairs, 3.88k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-pl.txt.zip">0.3k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Polish-BokmÃ¥l, Norwegian (2,777,359 sentence pairs, 83.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-pl.txt.zip">2.8M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Polish-Nepali (2,370 sentence pairs, 58.74k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-pl.txt.zip">2.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Dutch (7,510,089 sentence pairs, 204.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-pl.txt.zip">7.5M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Polish-Norwegian Nynorsk (9,189 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-pl.txt.zip">9.2k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Polish-Pushto (1,988 sentence pairs, 50.22k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-ps.tmx.gz">2.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Portuguese (7,551,962 sentence pairs, 210.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-pt.tmx.gz">7.6M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Polish-Romanian (4,010,782 sentence pairs, 115.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-ro.tmx.gz">4.0M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Polish-Russian (254,812 sentence pairs, 6.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Polish-Sinhala (7,832 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-si.tmx.gz">7.8k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Polish-Slovak (4,242,020 sentence pairs, 102.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-sk.tmx.gz">4.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Polish-Slovenian (1,962,370 sentence pairs, 57.81M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-sl.tmx.gz">2.0M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Polish-Somali (762 sentence pairs, 33.08k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-so.tmx.gz">0.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Swedish (5,519,676 sentence pairs, 141.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-sv.tmx.gz">5.5M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Polish-Swahili (11,802 sentence pairs, 0.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-sw.tmx.gz">11.8k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Polish-Tagalog (15,206 sentence pairs, 0.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-tl.tmx.gz">15.2k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Polish-Ukrainian (1,671,925 sentence pairs, 39.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-uk.tmx.gz">1.7M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Polish-Chinese (574,044 sentence pairs, 8.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pl-zh.tmx.gz">0.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ps plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ps.txt.gz">ps</a>
</th><td>1</td> <td>0.8M</td> <td>25.8k</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Pushto-Bulgarian (1,506 sentence pairs, 40.96k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-ps.txt.zip">1.5k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Pushto-Czech (3,406 sentence pairs, 84.07k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-ps.txt.zip">3.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Pushto-Danish (2,197 sentence pairs, 68.17k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-ps.txt.zip">2.2k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Pushto-German (4,894 sentence pairs, 96.96k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-ps.txt.zip">4.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Greek (1,852 sentence pairs, 47.72k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-ps.txt.zip">1.9k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Pushto-Spanish (4,789 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-ps.txt.zip">4.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Estonian (1,971 sentence pairs, 46.70k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-ps.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Finnish (2,243 sentence pairs, 48.60k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-ps.txt.zip">2.2k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Pushto-French (3,648 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-ps.txt.zip">3.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Pushto-Irish (2,049 sentence pairs, 70.34k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-ps.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Pushto-Croatian (499 sentence pairs, 21.18k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-ps.txt.zip">0.5k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Hungarian (2,660 sentence pairs, 66.13k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-ps.txt.zip">2.7k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Icelandic (1,720 sentence pairs, 46.34k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-ps.txt.zip">1.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Pushto-Italian (2,720 sentence pairs, 68.25k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-ps.txt.zip">2.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Pushto-Central Khmer (1,097 sentence pairs, 36.05k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-ps.txt.zip">1.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Pushto-Korean (276 sentence pairs, 4.21k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-ps.txt.zip">0.3k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Lithuanian (2,703 sentence pairs, 65.24k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-ps.txt.zip">2.7k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Pushto-Latvian (2,948 sentence pairs, 76.87k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-ps.txt.zip">2.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Pushto-Maltese (1,072 sentence pairs, 29.74k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-ps.txt.zip">1.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Pushto-Burmese (634 sentence pairs, 26.82k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-ps.txt.zip">0.6k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Pushto-BokmÃ¥l, Norwegian (1,283 sentence pairs, 42.64k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-ps.txt.zip">1.3k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Pushto-Nepali (3,970 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-ps.txt.zip">4.0k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Dutch (2,986 sentence pairs, 67.47k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-ps.txt.zip">3.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Pushto-Norwegian Nynorsk (2 sentence pairs, 6 words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-ps.txt.zip">2</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Polish (1,988 sentence pairs, 50.22k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-ps.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Portuguese (2,268 sentence pairs, 66.98k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-pt.tmx.gz">2.3k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Romanian (2,236 sentence pairs, 63.89k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-ro.tmx.gz">2.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Pushto-Russian (541 sentence pairs, 15.07k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-ru.tmx.gz">0.5k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Pushto-Sinhala (6,295 sentence pairs, 0.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-si.tmx.gz">6.3k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Pushto-Slovak (2,428 sentence pairs, 63.21k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-sk.tmx.gz">2.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Pushto-Slovenian (1,897 sentence pairs, 48.65k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-sl.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Pushto-Somali (65 sentence pairs, 3.05k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-so.tmx.gz">65</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Pushto-Swedish (2,110 sentence pairs, 54.00k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-sv.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Pushto-Swahili (702 sentence pairs, 28.47k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-sw.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Pushto-Tagalog (439 sentence pairs, 17.52k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-tl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Pushto-Ukrainian (2,966 sentence pairs, 77.60k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-uk.tmx.gz">3.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Pushto-Chinese (193 sentence pairs, 2.10k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ps-zh.tmx.gz">0.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=MultiParaCrawl/v9b/mono/pt.txt.gz">pt</a>
</th><td>1</td> <td>1.3G</td> <td>70.0M</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Portuguese-Bulgarian (2,891,366 sentence pairs, 95.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-pt.txt.zip">2.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Czech (8,147,597 sentence pairs, 223.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-pt.txt.zip">8.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Danish (7,455,791 sentence pairs, 238.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-pt.txt.zip">7.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-German (26,812,769 sentence pairs, 412.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-pt.txt.zip">26.8M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Portuguese-Greek (3,860,018 sentence pairs, 120.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-pt.txt.zip">3.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (37,618,566 sentence pairs, 1.22G words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-pt.txt.zip">37.6M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Portuguese-Estonian (1,895,004 sentence pairs, 48.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-pt.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Finnish (5,843,314 sentence pairs, 155.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-pt.txt.zip">5.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-French (23,661,344 sentence pairs, 818.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-pt.txt.zip">23.7M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Irish (446,648 sentence pairs, 16.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-pt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Portuguese-Croatian (580,917 sentence pairs, 25.72M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-pt.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Hungarian (6,372,728 sentence pairs, 177.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-pt.txt.zip">6.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Portuguese-Icelandic (647,236 sentence pairs, 20.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-pt.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Italian (15,670,142 sentence pairs, 514.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-pt.txt.zip">15.7M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Portuguese-Central Khmer (1,483 sentence pairs, 26.89k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-pt.txt.zip">1.5k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Portuguese-Korean (606,677 sentence pairs, 17.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-pt.txt.zip">0.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Portuguese-Lithuanian (2,863,225 sentence pairs, 82.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-pt.txt.zip">2.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-Latvian (2,648,963 sentence pairs, 70.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-pt.txt.zip">2.6M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Portuguese-Maltese (467,652 sentence pairs, 19.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-pt.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Burmese (442 sentence pairs, 6.69k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-pt.txt.zip">0.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-BokmÃ¥l, Norwegian (4,400,945 sentence pairs, 143.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-pt.txt.zip">4.4M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Portuguese-Nepali (5,005 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-pt.txt.zip">5.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (13,028,274 sentence pairs, 397.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-pt.txt.zip">13.0M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Portuguese-Norwegian Nynorsk (23,472 sentence pairs, 0.86M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-pt.txt.zip">23.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Polish (7,551,962 sentence pairs, 210.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-pt.txt.zip">7.6M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Portuguese-Pushto (2,268 sentence pairs, 66.98k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-pt.txt.zip">2.3k</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Romanian (6,246,996 sentence pairs, 197.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-ro.tmx.gz">6.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Portuguese-Russian (517,015 sentence pairs, 15.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-ru.tmx.gz">0.5M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Portuguese-Sinhala (21,088 sentence pairs, 0.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-si.tmx.gz">21.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Slovak (4,865,345 sentence pairs, 131.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-sk.tmx.gz">4.9M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Portuguese-Slovenian (2,630,517 sentence pairs, 83.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-sl.tmx.gz">2.6M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Portuguese-Somali (6,544 sentence pairs, 0.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-so.tmx.gz">6.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Swedish (9,619,896 sentence pairs, 286.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-sv.tmx.gz">9.6M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Portuguese-Swahili (40,288 sentence pairs, 1.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-sw.tmx.gz">40.3k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Portuguese-Tagalog (60,432 sentence pairs, 2.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-tl.tmx.gz">60.4k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-Ukrainian (2,385,203 sentence pairs, 64.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-uk.tmx.gz">2.4M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Portuguese-Chinese (1,573,782 sentence pairs, 28.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/pt-zh.tmx.gz">1.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ro.txt.gz">ro</a>
</th><td>1</td> <td>357.2M</td> <td>19.2M</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Romanian-Bulgarian (2,959,606 sentence pairs, 96.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-ro.txt.zip">3.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Czech (6,742,976 sentence pairs, 177.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-ro.txt.zip">6.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Danish (4,637,701 sentence pairs, 155.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-ro.txt.zip">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-German (10,943,978 sentence pairs, 316.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-ro.txt.zip">10.9M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Romanian-Greek (2,826,183 sentence pairs, 91.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-ro.txt.zip">2.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Spanish (12,013,244 sentence pairs, 377.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-ro.txt.zip">12.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Romanian-Estonian (1,877,418 sentence pairs, 56.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-ro.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Romanian-Finnish (4,150,174 sentence pairs, 113.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-ro.txt.zip">4.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-French (7,905,199 sentence pairs, 266.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-ro.txt.zip">7.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Romanian-Irish (374,567 sentence pairs, 13.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-ro.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d4ffca"><a rel="nofollow" title='Romanian-Croatian (661,069 sentence pairs, 28.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-ro.txt.zip">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Hungarian (6,082,240 sentence pairs, 165.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-ro.txt.zip">6.1M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Romanian-Icelandic (525,646 sentence pairs, 16.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-ro.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Italian (5,376,639 sentence pairs, 177.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-ro.txt.zip">5.4M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Romanian-Central Khmer (1,750 sentence pairs, 35.92k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-ro.txt.zip">1.8k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Romanian-Korean (225,162 sentence pairs, 6.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-ro.txt.zip">0.2M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Romanian-Lithuanian (2,810,312 sentence pairs, 80.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-ro.txt.zip">2.8M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Romanian-Latvian (2,784,121 sentence pairs, 81.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-ro.txt.zip">2.8M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Romanian-Maltese (492,767 sentence pairs, 20.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-ro.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Burmese (399 sentence pairs, 6.05k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-ro.txt.zip">0.4k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Romanian-BokmÃ¥l, Norwegian (2,474,893 sentence pairs, 84.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-ro.txt.zip">2.5M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Romanian-Nepali (4,201 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-ro.txt.zip">4.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Dutch (6,444,522 sentence pairs, 199.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-ro.txt.zip">6.4M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Romanian-Norwegian Nynorsk (21,020 sentence pairs, 0.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-ro.txt.zip">21.0k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Romanian-Polish (4,010,782 sentence pairs, 115.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-ro.txt.zip">4.0M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Romanian-Pushto (2,236 sentence pairs, 63.89k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-ro.txt.zip">2.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Portuguese (6,246,996 sentence pairs, 197.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-ro.txt.zip">6.2M</a>
</td><td></td><td bgcolor="#dfffc7"><a rel="nofollow" title='Romanian-Russian (350,252 sentence pairs, 10.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ro-ru.tmx.gz">0.4M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Romanian-Sinhala (18,998 sentence pairs, 0.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ro-si.tmx.gz">19.0k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Romanian-Slovak (4,428,013 sentence pairs, 125.09M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ro-sk.tmx.gz">4.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Romanian-Slovenian (2,740,906 sentence pairs, 85.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ro-sl.tmx.gz">2.7M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Romanian-Somali (14,484 sentence pairs, 0.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ro-so.tmx.gz">14.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Swedish (5,136,132 sentence pairs, 158.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ro-sv.tmx.gz">5.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Romanian-Swahili (55,965 sentence pairs, 2.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ro-sw.tmx.gz">56.0k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Romanian-Tagalog (62,236 sentence pairs, 2.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ro-tl.tmx.gz">62.2k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Romanian-Ukrainian (2,187,853 sentence pairs, 60.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ro-uk.tmx.gz">2.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Romanian-Chinese (628,290 sentence pairs, 11.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ro-zh.tmx.gz">0.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=MultiParaCrawl/v9b/mono/ru.txt.gz">ru</a>
</th><td>1</td> <td>91.0M</td> <td>5.5M</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Russian-Bulgarian (189,969 sentence pairs, 5.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-ru.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Russian-Czech (374,536 sentence pairs, 9.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-ru.txt.zip">0.4M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Russian-Danish (244,671 sentence pairs, 7.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-ru.txt.zip">0.2M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Russian-German (1,141,052 sentence pairs, 29.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-ru.txt.zip">1.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Russian-Greek (231,674 sentence pairs, 6.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-ru.txt.zip">0.2M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Russian-Spanish (1,177,297 sentence pairs, 34.96M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-ru.txt.zip">1.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Russian-Estonian (120,429 sentence pairs, 3.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-ru.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Russian-Finnish (297,993 sentence pairs, 7.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-ru.txt.zip">0.3M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Russian-French (780,853 sentence pairs, 24.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-ru.txt.zip">0.8M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Russian-Irish (30,632 sentence pairs, 1.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-ru.txt.zip">30.6k</a>
</td><td></td><td bgcolor="#ffffeb"><a rel="nofollow" title='Russian-Croatian (32,769 sentence pairs, 1.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-ru.txt.zip">32.8k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Russian-Hungarian (333,006 sentence pairs, 8.82M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-ru.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Russian-Icelandic (47,783 sentence pairs, 1.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-ru.txt.zip">47.8k</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Russian-Italian (493,035 sentence pairs, 14.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-ru.txt.zip">0.5M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Russian-Central Khmer (2,367 sentence pairs, 58.49k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-ru.txt.zip">2.4k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Russian-Korean (78,481 sentence pairs, 2.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-ru.txt.zip">78.5k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Russian-Lithuanian (171,127 sentence pairs, 4.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-ru.txt.zip">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Russian-Latvian (141,854 sentence pairs, 3.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-ru.txt.zip">0.1M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Russian-Maltese (13,580 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-ru.txt.zip">13.6k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Russian-Burmese (1,432 sentence pairs, 38.74k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-ru.txt.zip">1.4k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Russian-BokmÃ¥l, Norwegian (157,516 sentence pairs, 5.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-ru.txt.zip">0.2M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Russian-Nepali (4,018 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-ru.txt.zip">4.0k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Russian-Dutch (514,349 sentence pairs, 13.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-ru.txt.zip">0.5M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Russian-Norwegian Nynorsk (4,580 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-ru.txt.zip">4.6k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Russian-Polish (254,812 sentence pairs, 6.82M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-ru.txt.zip">0.3M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Russian-Pushto (541 sentence pairs, 15.07k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-ru.txt.zip">0.5k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Russian-Portuguese (517,015 sentence pairs, 15.72M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-ru.txt.zip">0.5M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Russian-Romanian (350,252 sentence pairs, 10.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ro-ru.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ffeeea"><a rel="nofollow" title='Russian-Sinhala (12,367 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ru-si.tmx.gz">12.4k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Russian-Slovak (137,828 sentence pairs, 3.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ru-sk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Russian-Slovenian (69,246 sentence pairs, 1.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ru-sl.tmx.gz">69.2k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Russian-Somali (1,918 sentence pairs, 0.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ru-so.tmx.gz">1.9k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Russian-Swedish (314,572 sentence pairs, 9.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ru-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Russian-Swahili (21,567 sentence pairs, 0.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ru-sw.tmx.gz">21.6k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Russian-Tagalog (27,437 sentence pairs, 1.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ru-tl.tmx.gz">27.4k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Russian-Ukrainian (310,207 sentence pairs, 8.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ru-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Russian-Chinese (111,882 sentence pairs, 1.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/ru-zh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized si plain text' href="download.php?f=MultiParaCrawl/v9b/mono/si.txt.gz">si</a>
</th><td>1</td> <td>7.0M</td> <td>0.2M</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Sinhala-Bulgarian (13,682 sentence pairs, 0.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-si.txt.zip">13.7k</a>
</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Sinhala-Czech (21,408 sentence pairs, 0.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-si.txt.zip">21.4k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Sinhala-Danish (11,713 sentence pairs, 0.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-si.txt.zip">11.7k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Sinhala-German (48,034 sentence pairs, 1.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-si.txt.zip">48.0k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Sinhala-Greek (13,640 sentence pairs, 0.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-si.txt.zip">13.6k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Sinhala-Spanish (50,171 sentence pairs, 1.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-si.txt.zip">50.2k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Sinhala-Estonian (7,187 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-si.txt.zip">7.2k</a>
</td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Sinhala-Finnish (13,750 sentence pairs, 0.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-si.txt.zip">13.8k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Sinhala-French (32,275 sentence pairs, 0.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-si.txt.zip">32.3k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Sinhala-Irish (5,529 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-si.txt.zip">5.5k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Sinhala-Croatian (2,831 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-si.txt.zip">2.8k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Sinhala-Hungarian (19,455 sentence pairs, 0.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-si.txt.zip">19.5k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Icelandic (6,826 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-si.txt.zip">6.8k</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Sinhala-Italian (18,953 sentence pairs, 0.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-si.txt.zip">19.0k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Sinhala-Central Khmer (19,686 sentence pairs, 0.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-si.txt.zip">19.7k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Sinhala-Korean (2,227 sentence pairs, 41.86k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-si.txt.zip">2.2k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Sinhala-Lithuanian (11,572 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-si.txt.zip">11.6k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Sinhala-Latvian (11,285 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-si.txt.zip">11.3k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Sinhala-Maltese (2,937 sentence pairs, 56.61k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-si.txt.zip">2.9k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Burmese (5,536 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-si.txt.zip">5.5k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Sinhala-BokmÃ¥l, Norwegian (8,049 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-si.txt.zip">8.0k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Sinhala-Nepali (33,795 sentence pairs, 1.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-si.txt.zip">33.8k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Sinhala-Dutch (25,593 sentence pairs, 0.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-si.txt.zip">25.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Sinhala-Norwegian Nynorsk (142 sentence pairs, 3.77k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-si.txt.zip">0.1k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Sinhala-Polish (7,832 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-si.txt.zip">7.8k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Sinhala-Pushto (6,295 sentence pairs, 0.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-si.txt.zip">6.3k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Sinhala-Portuguese (21,088 sentence pairs, 0.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-si.txt.zip">21.1k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Sinhala-Romanian (18,998 sentence pairs, 0.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ro-si.txt.zip">19.0k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Sinhala-Russian (12,367 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ru-si.txt.zip">12.4k</a>
</td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Slovak (8,450 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/si-sk.tmx.gz">8.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Sinhala-Slovenian (6,484 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/si-sl.tmx.gz">6.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Sinhala-Somali (443 sentence pairs, 16.70k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/si-so.tmx.gz">0.4k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Sinhala-Swedish (12,947 sentence pairs, 0.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/si-sv.tmx.gz">12.9k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Sinhala-Swahili (5,206 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/si-sw.tmx.gz">5.2k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Sinhala-Tagalog (3,716 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/si-tl.tmx.gz">3.7k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Sinhala-Ukrainian (29,359 sentence pairs, 0.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/si-uk.tmx.gz">29.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Sinhala-Chinese (5,829 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/si-zh.tmx.gz">5.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sk plain text' href="download.php?f=MultiParaCrawl/v9b/mono/sk.txt.gz">sk</a>
</th><td>1</td> <td>228.0M</td> <td>15.9M</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovak-Bulgarian (2,558,945 sentence pairs, 71.80M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-sk.txt.zip">2.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Czech (9,702,322 sentence pairs, 214.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-sk.txt.zip">9.7M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovak-Danish (3,784,768 sentence pairs, 113.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-sk.txt.zip">3.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-German (9,472,796 sentence pairs, 242.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-sk.txt.zip">9.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovak-Greek (2,520,794 sentence pairs, 70.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-sk.txt.zip">2.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Spanish (9,036,861 sentence pairs, 240.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-sk.txt.zip">9.0M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovak-Estonian (1,934,168 sentence pairs, 50.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-sk.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Slovak-Finnish (4,114,029 sentence pairs, 94.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-sk.txt.zip">4.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-French (5,900,834 sentence pairs, 173.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-sk.txt.zip">5.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovak-Irish (393,566 sentence pairs, 14.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-sk.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Slovak-Croatian (634,355 sentence pairs, 24.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-sk.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Hungarian (6,940,684 sentence pairs, 150.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-sk.txt.zip">6.9M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovak-Icelandic (638,505 sentence pairs, 17.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-sk.txt.zip">0.6M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Slovak-Italian (4,404,603 sentence pairs, 127.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-sk.txt.zip">4.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovak-Central Khmer (1,174 sentence pairs, 15.60k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-sk.txt.zip">1.2k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Slovak-Korean (160,339 sentence pairs, 3.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-sk.txt.zip">0.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovak-Lithuanian (2,977,201 sentence pairs, 70.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-sk.txt.zip">3.0M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovak-Latvian (3,099,843 sentence pairs, 79.07M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-sk.txt.zip">3.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-Maltese (520,789 sentence pairs, 19.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-sk.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Burmese (429 sentence pairs, 5.98k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-sk.txt.zip">0.4k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovak-BokmÃ¥l, Norwegian (2,239,607 sentence pairs, 69.97M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-sk.txt.zip">2.2M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Slovak-Nepali (3,738 sentence pairs, 88.53k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-sk.txt.zip">3.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Dutch (5,451,639 sentence pairs, 150.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-sk.txt.zip">5.5M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Slovak-Norwegian Nynorsk (17,507 sentence pairs, 0.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-sk.txt.zip">17.5k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Slovak-Polish (4,242,020 sentence pairs, 102.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-sk.txt.zip">4.2M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Slovak-Pushto (2,428 sentence pairs, 63.21k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-sk.txt.zip">2.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Portuguese (4,865,345 sentence pairs, 131.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-sk.txt.zip">4.9M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Slovak-Romanian (4,428,013 sentence pairs, 125.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ro-sk.txt.zip">4.4M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Slovak-Russian (137,828 sentence pairs, 3.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ru-sk.txt.zip">0.1M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Slovak-Sinhala (8,450 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/si-sk.txt.zip">8.4k</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovak-Slovenian (2,926,901 sentence pairs, 80.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sk-sl.tmx.gz">2.9M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Slovak-Somali (4,062 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sk-so.tmx.gz">4.1k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Slovak-Swedish (4,579,639 sentence pairs, 120.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sk-sv.tmx.gz">4.6M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Slovak-Swahili (25,306 sentence pairs, 0.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sk-sw.tmx.gz">25.3k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Slovak-Tagalog (26,900 sentence pairs, 1.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sk-tl.tmx.gz">26.9k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Slovak-Ukrainian (1,855,280 sentence pairs, 41.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sk-uk.tmx.gz">1.9M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Slovak-Chinese (426,724 sentence pairs, 5.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sk-zh.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=MultiParaCrawl/v9b/mono/sl.txt.gz">sl</a>
</th><td>1</td> <td>126.7M</td> <td>7.7M</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Slovenian-Bulgarian (1,696,089 sentence pairs, 54.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-sl.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovenian-Czech (3,398,913 sentence pairs, 93.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-sl.txt.zip">3.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovenian-Danish (2,265,781 sentence pairs, 72.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-sl.txt.zip">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-German (5,015,254 sentence pairs, 137.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-sl.txt.zip">5.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-Greek (1,454,664 sentence pairs, 45.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-sl.txt.zip">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Spanish (4,600,992 sentence pairs, 140.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-sl.txt.zip">4.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Slovenian-Estonian (1,580,836 sentence pairs, 43.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-sl.txt.zip">1.6M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovenian-Finnish (2,364,660 sentence pairs, 60.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-sl.txt.zip">2.4M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovenian-French (3,462,684 sentence pairs, 113.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-sl.txt.zip">3.5M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Slovenian-Irish (315,834 sentence pairs, 10.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-sl.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Slovenian-Croatian (577,828 sentence pairs, 22.96M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-sl.txt.zip">0.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovenian-Hungarian (2,955,725 sentence pairs, 80.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-sl.txt.zip">3.0M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovenian-Icelandic (438,651 sentence pairs, 12.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-sl.txt.zip">0.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovenian-Italian (2,755,791 sentence pairs, 88.07M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-sl.txt.zip">2.8M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Central Khmer (920 sentence pairs, 11.89k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-sl.txt.zip">0.9k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Slovenian-Korean (78,619 sentence pairs, 1.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-sl.txt.zip">78.6k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Slovenian-Lithuanian (2,011,194 sentence pairs, 54.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-sl.txt.zip">2.0M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovenian-Latvian (2,133,599 sentence pairs, 59.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-sl.txt.zip">2.1M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovenian-Maltese (455,119 sentence pairs, 17.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-sl.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Burmese (287 sentence pairs, 3.59k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-sl.txt.zip">0.3k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Slovenian-BokmÃ¥l, Norwegian (1,292,912 sentence pairs, 41.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-sl.txt.zip">1.3M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Slovenian-Nepali (2,871 sentence pairs, 68.39k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-sl.txt.zip">2.9k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Slovenian-Dutch (3,219,419 sentence pairs, 97.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-sl.txt.zip">3.2M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Slovenian-Norwegian Nynorsk (8,091 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-sl.txt.zip">8.1k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovenian-Polish (1,962,370 sentence pairs, 57.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-sl.txt.zip">2.0M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Slovenian-Pushto (1,897 sentence pairs, 48.65k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-sl.txt.zip">1.9k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovenian-Portuguese (2,630,517 sentence pairs, 83.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-sl.txt.zip">2.6M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovenian-Romanian (2,740,906 sentence pairs, 91.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ro-sl.txt.zip">2.7M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Slovenian-Russian (69,246 sentence pairs, 1.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ru-sl.txt.zip">69.2k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Slovenian-Sinhala (6,484 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/si-sl.txt.zip">6.5k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovenian-Slovak (2,926,901 sentence pairs, 80.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sk-sl.txt.zip">2.9M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Somali (354 sentence pairs, 13.42k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sl-so.tmx.gz">0.4k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovenian-Swedish (2,452,331 sentence pairs, 71.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sl-sv.tmx.gz">2.5M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Slovenian-Swahili (8,775 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sl-sw.tmx.gz">8.8k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Slovenian-Tagalog (10,227 sentence pairs, 0.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sl-tl.tmx.gz">10.2k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Slovenian-Ukrainian (999,102 sentence pairs, 24.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sl-uk.tmx.gz">1.0M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Slovenian-Chinese (221,778 sentence pairs, 3.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sl-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized so plain text' href="download.php?f=MultiParaCrawl/v9b/mono/so.txt.gz">so</a>
</th><td>1</td> <td>0.4M</td> <td>16.9k</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Somali-Bulgarian (4,192 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-so.txt.zip">4.2k</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Somali-Czech (4,195 sentence pairs, 0.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-so.txt.zip">4.2k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Somali-Danish (2,964 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-so.txt.zip">3.0k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Somali-German (15,949 sentence pairs, 0.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-so.txt.zip">15.9k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Somali-Greek (5,218 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-so.txt.zip">5.2k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Somali-Spanish (22,693 sentence pairs, 1.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-so.txt.zip">22.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Somali-Estonian (722 sentence pairs, 29.66k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-so.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffeae7"><a rel="nofollow" title='Somali-Finnish (5,027 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-so.txt.zip">5.0k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Somali-French (9,681 sentence pairs, 0.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-so.txt.zip">9.7k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Somali-Irish (852 sentence pairs, 38.05k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-so.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Somali-Croatian (981 sentence pairs, 55.90k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-so.txt.zip">1.0k</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Somali-Hungarian (6,111 sentence pairs, 0.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-so.txt.zip">6.1k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Somali-Icelandic (3,568 sentence pairs, 0.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-so.txt.zip">3.6k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Somali-Italian (8,057 sentence pairs, 0.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-so.txt.zip">8.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Central Khmer (193 sentence pairs, 6.95k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-so.txt.zip">0.2k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Somali-Korean (926 sentence pairs, 43.75k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-so.txt.zip">0.9k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Somali-Lithuanian (3,899 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-so.txt.zip">3.9k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Somali-Latvian (1,332 sentence pairs, 57.39k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-so.txt.zip">1.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Somali-Maltese (303 sentence pairs, 13.63k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-so.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Burmese (57 sentence pairs, 1.77k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-so.txt.zip">57</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Somali-BokmÃ¥l, Norwegian (2,811 sentence pairs, 0.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-so.txt.zip">2.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Somali-Nepali (431 sentence pairs, 20.54k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-so.txt.zip">0.4k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Somali-Dutch (7,303 sentence pairs, 0.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-so.txt.zip">7.3k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Somali-Norwegian Nynorsk (868 sentence pairs, 52.33k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-so.txt.zip">0.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Somali-Polish (762 sentence pairs, 33.08k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-so.txt.zip">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Pushto (65 sentence pairs, 3.05k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-so.txt.zip">65</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Somali-Portuguese (6,544 sentence pairs, 0.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-so.txt.zip">6.5k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Somali-Romanian (14,484 sentence pairs, 0.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ro-so.txt.zip">14.5k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Somali-Russian (1,918 sentence pairs, 0.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ru-so.txt.zip">1.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Somali-Sinhala (443 sentence pairs, 16.70k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/si-so.txt.zip">0.4k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Somali-Slovak (4,062 sentence pairs, 0.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sk-so.txt.zip">4.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Somali-Slovenian (354 sentence pairs, 13.42k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sl-so.txt.zip">0.4k</a>
</td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Somali-Swedish (3,991 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/so-sv.tmx.gz">4.0k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Somali-Swahili (1,740 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/so-sw.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Tagalog (137 sentence pairs, 6.12k words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/so-tl.tmx.gz">0.1k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Somali-Ukrainian (7,542 sentence pairs, 0.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/so-uk.tmx.gz">7.5k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Somali-Chinese (3,216 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/so-zh.tmx.gz">3.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=MultiParaCrawl/v9b/mono/sv.txt.gz">sv</a>
</th><td>1</td> <td>546.9M</td> <td>36.2M</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Swedish-Bulgarian (2,320,594 sentence pairs, 71.96M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-sv.txt.zip">2.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Czech (7,471,810 sentence pairs, 197.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-sv.txt.zip">7.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Danish (9,921,608 sentence pairs, 297.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-sv.txt.zip">9.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-German (20,489,938 sentence pairs, 530.85M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-sv.txt.zip">20.5M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Swedish-Greek (3,574,370 sentence pairs, 101.85M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-sv.txt.zip">3.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Spanish (19,838,896 sentence pairs, 600.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-sv.txt.zip">19.8M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Swedish-Estonian (2,269,655 sentence pairs, 60.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-sv.txt.zip">2.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Finnish (8,753,111 sentence pairs, 213.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-sv.txt.zip">8.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-French (12,498,020 sentence pairs, 409.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-sv.txt.zip">12.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Swedish-Irish (426,113 sentence pairs, 14.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-sv.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Swedish-Croatian (608,973 sentence pairs, 24.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-sv.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Hungarian (6,127,264 sentence pairs, 159.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-sv.txt.zip">6.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Swedish-Icelandic (793,631 sentence pairs, 23.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-sv.txt.zip">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Italian (8,356,773 sentence pairs, 262.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-sv.txt.zip">8.4M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Swedish-Central Khmer (1,704 sentence pairs, 31.66k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-sv.txt.zip">1.7k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Swedish-Korean (352,953 sentence pairs, 8.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-sv.txt.zip">0.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Swedish-Lithuanian (3,066,457 sentence pairs, 79.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-sv.txt.zip">3.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Swedish-Latvian (3,071,548 sentence pairs, 81.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-sv.txt.zip">3.1M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Swedish-Maltese (481,282 sentence pairs, 18.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-sv.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Burmese (421 sentence pairs, 5.70k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-sv.txt.zip">0.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-BokmÃ¥l, Norwegian (6,098,773 sentence pairs, 190.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-sv.txt.zip">6.1M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Swedish-Nepali (5,390 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-sv.txt.zip">5.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Dutch (13,076,162 sentence pairs, 376.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-sv.txt.zip">13.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Swedish-Norwegian Nynorsk (20,758 sentence pairs, 0.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-sv.txt.zip">20.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Polish (5,519,676 sentence pairs, 142.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-sv.txt.zip">5.5M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Swedish-Pushto (2,110 sentence pairs, 54.00k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-sv.txt.zip">2.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Portuguese (9,619,896 sentence pairs, 270.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-sv.txt.zip">9.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Romanian (5,136,132 sentence pairs, 158.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ro-sv.txt.zip">5.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Swedish-Russian (314,572 sentence pairs, 9.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ru-sv.txt.zip">0.3M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Swedish-Sinhala (12,947 sentence pairs, 0.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/si-sv.txt.zip">12.9k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Swedish-Slovak (4,579,639 sentence pairs, 60.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sk-sv.txt.zip">4.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Swedish-Slovenian (2,452,331 sentence pairs, 71.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sl-sv.txt.zip">2.5M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Swedish-Somali (3,991 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/so-sv.txt.zip">4.0k</a>
</td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='Swedish-Swahili (27,122 sentence pairs, 1.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sv-sw.tmx.gz">27.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Swedish-Tagalog (30,721 sentence pairs, 1.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sv-tl.tmx.gz">30.7k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Swedish-Ukrainian (1,949,367 sentence pairs, 48.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sv-uk.tmx.gz">1.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Swedish-Chinese (924,794 sentence pairs, 13.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sv-zh.tmx.gz">0.9M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sw plain text' href="download.php?f=MultiParaCrawl/v9b/mono/sw.txt.gz">sw</a>
</th><td>1</td> <td>3.5M</td> <td>0.2M</td><td bgcolor="#fffef1"><a rel="nofollow" title='Swahili-Bulgarian (21,705 sentence pairs, 0.83M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-sw.txt.zip">21.7k</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Swahili-Czech (26,496 sentence pairs, 0.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-sw.txt.zip">26.5k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Swahili-Danish (20,131 sentence pairs, 0.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-sw.txt.zip">20.1k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Swahili-German (71,358 sentence pairs, 2.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-sw.txt.zip">71.4k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Swahili-Greek (27,906 sentence pairs, 1.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-sw.txt.zip">27.9k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Swahili-Spanish (100,047 sentence pairs, 4.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-sw.txt.zip">0.1M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Swahili-Estonian (7,959 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-sw.txt.zip">8.0k</a>
</td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Swahili-Finnish (25,486 sentence pairs, 0.86M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-sw.txt.zip">25.5k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Swahili-French (53,138 sentence pairs, 2.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-sw.txt.zip">53.1k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Swahili-Irish (8,692 sentence pairs, 0.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-sw.txt.zip">8.7k</a>
</td><td></td><td bgcolor="#ffeae7"><a rel="nofollow" title='Swahili-Croatian (5,532 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-sw.txt.zip">5.5k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Swahili-Hungarian (29,687 sentence pairs, 1.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-sw.txt.zip">29.7k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Swahili-Icelandic (15,280 sentence pairs, 0.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-sw.txt.zip">15.3k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Swahili-Italian (39,987 sentence pairs, 1.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-sw.txt.zip">40.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Swahili-Central Khmer (869 sentence pairs, 26.13k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-sw.txt.zip">0.9k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Swahili-Korean (8,069 sentence pairs, 0.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-sw.txt.zip">8.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Swahili-Lithuanian (22,792 sentence pairs, 0.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-sw.txt.zip">22.8k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Swahili-Latvian (14,927 sentence pairs, 0.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-sw.txt.zip">14.9k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Swahili-Maltese (3,770 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-sw.txt.zip">3.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Swahili-Burmese (461 sentence pairs, 14.84k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-sw.txt.zip">0.5k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Swahili-BokmÃ¥l, Norwegian (15,265 sentence pairs, 0.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-sw.txt.zip">15.3k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Swahili-Nepali (2,211 sentence pairs, 88.81k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-sw.txt.zip">2.2k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Swahili-Dutch (39,370 sentence pairs, 1.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-sw.txt.zip">39.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Swahili-Norwegian Nynorsk (2,930 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-sw.txt.zip">2.9k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Swahili-Polish (11,802 sentence pairs, 0.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-sw.txt.zip">11.8k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Swahili-Pushto (702 sentence pairs, 28.47k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-sw.txt.zip">0.7k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Swahili-Portuguese (40,288 sentence pairs, 1.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-sw.txt.zip">40.3k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Swahili-Romanian (55,965 sentence pairs, 2.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ro-sw.txt.zip">56.0k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Swahili-Russian (21,567 sentence pairs, 0.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ru-sw.txt.zip">21.6k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Swahili-Sinhala (5,206 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/si-sw.txt.zip">5.2k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Swahili-Slovak (25,306 sentence pairs, 0.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sk-sw.txt.zip">25.3k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Swahili-Slovenian (8,775 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sl-sw.txt.zip">8.8k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Swahili-Somali (1,740 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/so-sw.txt.zip">1.7k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Swahili-Swedish (27,122 sentence pairs, 1.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sv-sw.txt.zip">27.1k</a>
</td><td></td><td bgcolor="#ffffe8"><a rel="nofollow" title='Swahili-Tagalog (28,589 sentence pairs, 1.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sw-tl.tmx.gz">28.6k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Swahili-Ukrainian (30,525 sentence pairs, 1.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sw-uk.tmx.gz">30.5k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Swahili-Chinese (12,115 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/sw-zh.tmx.gz">12.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tl plain text' href="download.php?f=MultiParaCrawl/v9b/mono/tl.txt.gz">tl</a>
</th><td>1</td> <td>7.5M</td> <td>0.3M</td><td bgcolor="#ffffec"><a rel="nofollow" title='Tagalog-Bulgarian (29,524 sentence pairs, 1.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-tl.txt.zip">29.5k</a>
</td><td></td><td bgcolor="#ffffe9"><a rel="nofollow" title='Tagalog-Czech (36,577 sentence pairs, 1.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-tl.txt.zip">36.6k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Tagalog-Danish (40,831 sentence pairs, 1.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-tl.txt.zip">40.8k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Tagalog-German (95,914 sentence pairs, 4.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-tl.txt.zip">95.9k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Tagalog-Greek (35,912 sentence pairs, 1.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-tl.txt.zip">35.9k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Tagalog-Spanish (147,191 sentence pairs, 6.80M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-tl.txt.zip">0.1M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Tagalog-Estonian (13,253 sentence pairs, 0.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-tl.txt.zip">13.3k</a>
</td><td></td><td bgcolor="#ffffea"><a rel="nofollow" title='Tagalog-Finnish (34,801 sentence pairs, 1.34M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-tl.txt.zip">34.8k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Tagalog-French (77,503 sentence pairs, 3.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-tl.txt.zip">77.5k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Tagalog-Irish (9,164 sentence pairs, 0.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-tl.txt.zip">9.2k</a>
</td><td></td><td bgcolor="#ffefea"><a rel="nofollow" title='Tagalog-Croatian (6,329 sentence pairs, 0.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-tl.txt.zip">6.3k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Tagalog-Hungarian (33,976 sentence pairs, 1.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-tl.txt.zip">34.0k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Tagalog-Icelandic (15,983 sentence pairs, 0.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-tl.txt.zip">16.0k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Tagalog-Italian (49,977 sentence pairs, 2.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-tl.txt.zip">50.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Tagalog-Central Khmer (556 sentence pairs, 17.76k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-tl.txt.zip">0.6k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Tagalog-Korean (38,409 sentence pairs, 1.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-tl.txt.zip">38.4k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Tagalog-Lithuanian (21,819 sentence pairs, 0.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-tl.txt.zip">21.8k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Tagalog-Latvian (15,423 sentence pairs, 0.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-tl.txt.zip">15.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Tagalog-Maltese (4,026 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-tl.txt.zip">4.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Burmese (365 sentence pairs, 12.39k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-tl.txt.zip">0.4k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Tagalog-BokmÃ¥l, Norwegian (18,313 sentence pairs, 0.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-tl.txt.zip">18.3k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Tagalog-Nepali (1,383 sentence pairs, 62.03k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-tl.txt.zip">1.4k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Tagalog-Dutch (43,902 sentence pairs, 2.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-tl.txt.zip">43.9k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Tagalog-Norwegian Nynorsk (2,968 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-tl.txt.zip">3.0k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Tagalog-Polish (15,206 sentence pairs, 0.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-tl.txt.zip">15.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Tagalog-Pushto (439 sentence pairs, 17.52k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-tl.txt.zip">0.4k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Tagalog-Portuguese (60,432 sentence pairs, 2.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-tl.txt.zip">60.4k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Tagalog-Romanian (62,236 sentence pairs, 2.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ro-tl.txt.zip">62.2k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Tagalog-Russian (27,437 sentence pairs, 1.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ru-tl.txt.zip">27.4k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Tagalog-Sinhala (3,716 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/si-tl.txt.zip">3.7k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Tagalog-Slovak (26,900 sentence pairs, 1.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sk-tl.txt.zip">26.9k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Tagalog-Slovenian (10,227 sentence pairs, 0.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sl-tl.txt.zip">10.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tagalog-Somali (137 sentence pairs, 6.12k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/so-tl.txt.zip">0.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Tagalog-Swedish (30,721 sentence pairs, 1.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sv-tl.txt.zip">30.7k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Tagalog-Swahili (28,589 sentence pairs, 1.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sw-tl.txt.zip">28.6k</a>
</td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='Tagalog-Ukrainian (42,413 sentence pairs, 1.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/tl-uk.tmx.gz">42.4k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Tagalog-Chinese (40,983 sentence pairs, 1.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/tl-zh.tmx.gz">41.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=MultiParaCrawl/v9b/mono/uk.txt.gz">uk</a>
</th><td>1</td> <td>383.5M</td> <td>11.5M</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Ukrainian-Bulgarian (1,776,077 sentence pairs, 45.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-uk.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Ukrainian-Czech (2,200,277 sentence pairs, 51.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-uk.txt.zip">2.2M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Ukrainian-Danish (1,506,017 sentence pairs, 41.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-uk.txt.zip">1.5M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Ukrainian-German (4,215,581 sentence pairs, 103.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-uk.txt.zip">4.2M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Ukrainian-Greek (1,384,406 sentence pairs, 36.70M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-uk.txt.zip">1.4M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Ukrainian-Spanish (4,487,873 sentence pairs, 119.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-uk.txt.zip">4.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Ukrainian-Estonian (653,391 sentence pairs, 14.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-uk.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Ukrainian-Finnish (1,542,555 sentence pairs, 34.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-uk.txt.zip">1.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Ukrainian-French (2,784,818 sentence pairs, 80.97M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-uk.txt.zip">2.8M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Ukrainian-Irish (258,768 sentence pairs, 7.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-uk.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Ukrainian-Croatian (287,581 sentence pairs, 10.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-uk.txt.zip">0.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Ukrainian-Hungarian (1,946,314 sentence pairs, 46.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-uk.txt.zip">1.9M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Ukrainian-Icelandic (325,717 sentence pairs, 9.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-uk.txt.zip">0.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Ukrainian-Italian (1,923,959 sentence pairs, 52.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-uk.txt.zip">1.9M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Ukrainian-Central Khmer (3,027 sentence pairs, 70.20k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-uk.txt.zip">3.0k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Ukrainian-Korean (164,204 sentence pairs, 4.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-uk.txt.zip">0.2M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Ukrainian-Lithuanian (1,196,565 sentence pairs, 26.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-uk.txt.zip">1.2M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Ukrainian-Latvian (1,294,382 sentence pairs, 29.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-uk.txt.zip">1.3M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Ukrainian-Maltese (100,436 sentence pairs, 2.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-uk.txt.zip">0.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Burmese (793 sentence pairs, 14.56k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-uk.txt.zip">0.8k</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Ukrainian-BokmÃ¥l, Norwegian (1,048,025 sentence pairs, 31.07M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-uk.txt.zip">1.0M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Ukrainian-Nepali (8,444 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-uk.txt.zip">8.4k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Ukrainian-Dutch (2,228,417 sentence pairs, 59.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-uk.txt.zip">2.2M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Ukrainian-Norwegian Nynorsk (14,447 sentence pairs, 0.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-uk.txt.zip">14.4k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Ukrainian-Polish (1,671,925 sentence pairs, 39.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-uk.txt.zip">1.7M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Ukrainian-Pushto (2,966 sentence pairs, 77.60k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-uk.txt.zip">3.0k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Ukrainian-Portuguese (2,385,203 sentence pairs, 64.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-uk.txt.zip">2.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Ukrainian-Romanian (2,187,853 sentence pairs, 60.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ro-uk.txt.zip">2.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Ukrainian-Russian (310,207 sentence pairs, 8.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ru-uk.txt.zip">0.3M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Ukrainian-Sinhala (29,359 sentence pairs, 0.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/si-uk.txt.zip">29.4k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Ukrainian-Slovak (1,855,280 sentence pairs, 41.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sk-uk.txt.zip">1.9M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Ukrainian-Slovenian (999,102 sentence pairs, 24.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sl-uk.txt.zip">1.0M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Ukrainian-Somali (7,542 sentence pairs, 0.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/so-uk.txt.zip">7.5k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Ukrainian-Swedish (1,949,367 sentence pairs, 48.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sv-uk.txt.zip">1.9M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Ukrainian-Swahili (30,525 sentence pairs, 1.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sw-uk.txt.zip">30.5k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Ukrainian-Tagalog (42,413 sentence pairs, 1.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/tl-uk.txt.zip">42.4k</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Ukrainian-Chinese (316,130 sentence pairs, 4.73M words) - TMX format' href="download.php?f=MultiParaCrawl/v9b/tmx/uk-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh plain text' href="download.php?f=MultiParaCrawl/v9b/mono/zh.txt.gz">zh</a>
</th><td>1</td> <td>69.6M</td> <td>9.4M</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Chinese-Bulgarian (319,902 sentence pairs, 4.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/bg-zh.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Chinese-Czech (940,405 sentence pairs, 12.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/cs-zh.txt.zip">0.9M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Chinese-Danish (714,492 sentence pairs, 11.89M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/da-zh.txt.zip">0.7M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Chinese-German (3,081,451 sentence pairs, 46.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/de-zh.txt.zip">3.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Chinese-Greek (443,350 sentence pairs, 6.73M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/el-zh.txt.zip">0.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Chinese-Spanish (3,410,087 sentence pairs, 61.80M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/es-zh.txt.zip">3.4M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Chinese-Estonian (175,426 sentence pairs, 2.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/et-zh.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Chinese-Finnish (623,602 sentence pairs, 7.34M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fi-zh.txt.zip">0.6M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Chinese-French (2,090,780 sentence pairs, 39.82M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/fr-zh.txt.zip">2.1M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Chinese-Irish (26,540 sentence pairs, 0.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ga-zh.txt.zip">26.5k</a>
</td><td></td><td bgcolor="#ffffed"><a rel="nofollow" title='Chinese-Croatian (53,620 sentence pairs, 1.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hr-zh.txt.zip">53.6k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Chinese-Hungarian (698,193 sentence pairs, 9.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/hu-zh.txt.zip">0.7M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Chinese-Icelandic (75,303 sentence pairs, 1.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/is-zh.txt.zip">75.3k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Chinese-Italian (1,207,121 sentence pairs, 21.34M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/it-zh.txt.zip">1.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Central Khmer (501 sentence pairs, 5.13k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/km-zh.txt.zip">0.5k</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Chinese-Korean (831,643 sentence pairs, 13.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ko-zh.txt.zip">0.8M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-Lithuanian (260,008 sentence pairs, 3.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lt-zh.txt.zip">0.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-Latvian (243,285 sentence pairs, 3.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/lv-zh.txt.zip">0.2M</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Chinese-Maltese (12,331 sentence pairs, 0.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/mt-zh.txt.zip">12.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Burmese (248 sentence pairs, 2.63k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/my-zh.txt.zip">0.2k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Chinese-BokmÃ¥l, Norwegian (435,063 sentence pairs, 7.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nb-zh.txt.zip">0.4M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Chinese-Nepali (1,791 sentence pairs, 32.62k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ne-zh.txt.zip">1.8k</a>
</td><td bgcolor="#d7ffc9"><a rel="nofollow" title='Chinese-Dutch (1,438,804 sentence pairs, 23.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nl-zh.txt.zip">1.4M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Chinese-Norwegian Nynorsk (9,288 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/nn-zh.txt.zip">9.3k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Chinese-Polish (574,044 sentence pairs, 8.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pl-zh.txt.zip">0.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Pushto (193 sentence pairs, 2.10k words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ps-zh.txt.zip">0.2k</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Chinese-Portuguese (1,573,782 sentence pairs, 28.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/pt-zh.txt.zip">1.6M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Chinese-Romanian (628,290 sentence pairs, 11.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ro-zh.txt.zip">0.6M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Chinese-Russian (111,882 sentence pairs, 1.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/ru-zh.txt.zip">0.1M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Chinese-Sinhala (5,829 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/si-zh.txt.zip">5.8k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Chinese-Slovak (426,724 sentence pairs, 5.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sk-zh.txt.zip">0.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Chinese-Slovenian (221,778 sentence pairs, 3.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sl-zh.txt.zip">0.2M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Chinese-Somali (3,216 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/so-zh.txt.zip">3.2k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Chinese-Swedish (924,794 sentence pairs, 13.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sv-zh.txt.zip">0.9M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Chinese-Swahili (12,115 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/sw-zh.txt.zip">12.1k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Chinese-Tagalog (40,983 sentence pairs, 1.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/tl-zh.txt.zip">41.0k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Chinese-Ukrainian (316,130 sentence pairs, 4.73M words) - Moses format' href="download.php?f=MultiParaCrawl/v9b/moses/uk-zh.txt.zip">0.3M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>
