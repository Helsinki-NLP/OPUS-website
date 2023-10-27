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
<div class="header"><?php include("header.php"); ?></div><h1>MultiParaCrawl v8</h1>Parallel corpora from Web Crawls collected in the <a href="http://paracrawl.eu/download.html">ParaCrawl project</a> and further processed for making it a multi-parallel corpus by pivoting via English. Here we only provide the additional language pairs that came out of pivoting. The bitexts for English are available from the <a href="http://opus.nlpl.eu/ParaCrawl-v8.php">ParaCrawl release</a>.<p>38 languages, 598 bitexts<br>total number of files: 38<br>total number of tokens: 22.13G<br>total number of sentence fragments: 1.19G<br><p>Please, acknowledge the ParaCrawl project at <a href="http://paracrawl.eu">http://paracrawl.eu</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>The data is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="http://paracrawl.eu/download.html">http://paracrawl.eu/download.html</a> for more details<h3>Release history:</h3><p><ul><li><a href="MultiParaCrawl-v5.php">MultiParaCrawl v5</a></li> <li><a href="MultiParaCrawl-v7.1.php">MultiParaCrawl v7.1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/da_sample.html">da</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/de_sample.html">de</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/el_sample.html">el</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/es_sample.html">es</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/et_sample.html">et</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/is_sample.html">is</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/it_sample.html">it</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/km_sample.html">km</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/ko_sample.html">ko</a></th>
<th></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/my_sample.html">my</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/ne_sample.html">ne</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/no_sample.html">no</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/ps_sample.html">ps</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/si_sample.html">si</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/so_sample.html">so</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/sw_sample.html">sw</a></th>
<th><a rel="nofollow" href="MultiParaCrawl/v8/tl_sample.html">tl</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/bg.zip">bg</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="Bulgarian-Czech (sample file)" href="MultiParaCrawl/v8/bg-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Danish (sample file)" href="MultiParaCrawl/v8/bg-da_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-German (sample file)" href="MultiParaCrawl/v8/bg-de_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="MultiParaCrawl/v8/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Spanish (sample file)" href="MultiParaCrawl/v8/bg-es_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="MultiParaCrawl/v8/bg-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="MultiParaCrawl/v8/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-French (sample file)" href="MultiParaCrawl/v8/bg-fr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Irish (sample file)" href="MultiParaCrawl/v8/bg-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="MultiParaCrawl/v8/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="MultiParaCrawl/v8/bg-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="MultiParaCrawl/v8/bg-is_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Italian (sample file)" href="MultiParaCrawl/v8/bg-it_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Central Khmer (sample file)" href="MultiParaCrawl/v8/bg-km_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Korean (sample file)" href="MultiParaCrawl/v8/bg-ko_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="MultiParaCrawl/v8/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="MultiParaCrawl/v8/bg-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Maltese (sample file)" href="MultiParaCrawl/v8/bg-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Burmese (sample file)" href="MultiParaCrawl/v8/bg-my_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Nepali (sample file)" href="MultiParaCrawl/v8/bg-ne_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Dutch (sample file)" href="MultiParaCrawl/v8/bg-nl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Norwegian (sample file)" href="MultiParaCrawl/v8/bg-no_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Polish (sample file)" href="MultiParaCrawl/v8/bg-pl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Pushto (sample file)" href="MultiParaCrawl/v8/bg-ps_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="MultiParaCrawl/v8/bg-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="MultiParaCrawl/v8/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Russian (sample file)" href="MultiParaCrawl/v8/bg-ru_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Sinhala (sample file)" href="MultiParaCrawl/v8/bg-si_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="MultiParaCrawl/v8/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="MultiParaCrawl/v8/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Somali (sample file)" href="MultiParaCrawl/v8/bg-so_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swedish (sample file)" href="MultiParaCrawl/v8/bg-sv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swahili (sample file)" href="MultiParaCrawl/v8/bg-sw_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Tagalog (sample file)" href="MultiParaCrawl/v8/bg-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/bg.zip">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/ca.zip">ca</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="MultiParaCrawl/v8/ca-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/cs.zip">cs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bulgarian' (2.9M links, 107.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-cs.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Czech-Danish (sample file)" href="MultiParaCrawl/v8/cs-da_sample.html">view</a></td><td><a rel="nofollow" title="Czech-German (sample file)" href="MultiParaCrawl/v8/cs-de_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="MultiParaCrawl/v8/cs-el_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="MultiParaCrawl/v8/cs-es_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Estonian (sample file)" href="MultiParaCrawl/v8/cs-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="MultiParaCrawl/v8/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="MultiParaCrawl/v8/cs-fr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Irish (sample file)" href="MultiParaCrawl/v8/cs-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Croatian (sample file)" href="MultiParaCrawl/v8/cs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="MultiParaCrawl/v8/cs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="MultiParaCrawl/v8/cs-is_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Italian (sample file)" href="MultiParaCrawl/v8/cs-it_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Central Khmer (sample file)" href="MultiParaCrawl/v8/cs-km_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Korean (sample file)" href="MultiParaCrawl/v8/cs-ko_sample.html">view</a></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Lithuanian (sample file)" href="MultiParaCrawl/v8/cs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Latvian (sample file)" href="MultiParaCrawl/v8/cs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Maltese (sample file)" href="MultiParaCrawl/v8/cs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Burmese (sample file)" href="MultiParaCrawl/v8/cs-my_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Nepali (sample file)" href="MultiParaCrawl/v8/cs-ne_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="MultiParaCrawl/v8/cs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Norwegian (sample file)" href="MultiParaCrawl/v8/cs-no_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Polish (sample file)" href="MultiParaCrawl/v8/cs-pl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Pushto (sample file)" href="MultiParaCrawl/v8/cs-ps_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="MultiParaCrawl/v8/cs-pt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Romanian (sample file)" href="MultiParaCrawl/v8/cs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Russian (sample file)" href="MultiParaCrawl/v8/cs-ru_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Sinhala (sample file)" href="MultiParaCrawl/v8/cs-si_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovak (sample file)" href="MultiParaCrawl/v8/cs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="MultiParaCrawl/v8/cs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Somali (sample file)" href="MultiParaCrawl/v8/cs-so_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swedish (sample file)" href="MultiParaCrawl/v8/cs-sv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swahili (sample file)" href="MultiParaCrawl/v8/cs-sw_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Tagalog (sample file)" href="MultiParaCrawl/v8/cs-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/cs.zip">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/da.zip">da</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bulgarian' (2.8M links, 109.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-da.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Czech' (6.5M links, 229.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-da.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="MultiParaCrawl/v8/da-de_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Greek (sample file)" href="MultiParaCrawl/v8/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="MultiParaCrawl/v8/da-es_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Estonian (sample file)" href="MultiParaCrawl/v8/da-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="MultiParaCrawl/v8/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="MultiParaCrawl/v8/da-fr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Irish (sample file)" href="MultiParaCrawl/v8/da-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Croatian (sample file)" href="MultiParaCrawl/v8/da-hr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hungarian (sample file)" href="MultiParaCrawl/v8/da-hu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="MultiParaCrawl/v8/da-is_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="MultiParaCrawl/v8/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Central Khmer (sample file)" href="MultiParaCrawl/v8/da-km_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Korean (sample file)" href="MultiParaCrawl/v8/da-ko_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Lithuanian (sample file)" href="MultiParaCrawl/v8/da-lt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Latvian (sample file)" href="MultiParaCrawl/v8/da-lv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Maltese (sample file)" href="MultiParaCrawl/v8/da-mt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Burmese (sample file)" href="MultiParaCrawl/v8/da-my_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Nepali (sample file)" href="MultiParaCrawl/v8/da-ne_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="MultiParaCrawl/v8/da-nl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Norwegian (sample file)" href="MultiParaCrawl/v8/da-no_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Polish (sample file)" href="MultiParaCrawl/v8/da-pl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Pushto (sample file)" href="MultiParaCrawl/v8/da-ps_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="MultiParaCrawl/v8/da-pt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Romanian (sample file)" href="MultiParaCrawl/v8/da-ro_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Russian (sample file)" href="MultiParaCrawl/v8/da-ru_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Sinhala (sample file)" href="MultiParaCrawl/v8/da-si_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovak (sample file)" href="MultiParaCrawl/v8/da-sk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovenian (sample file)" href="MultiParaCrawl/v8/da-sl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Somali (sample file)" href="MultiParaCrawl/v8/da-so_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="MultiParaCrawl/v8/da-sv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swahili (sample file)" href="MultiParaCrawl/v8/da-sw_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Tagalog (sample file)" href="MultiParaCrawl/v8/da-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/da.zip">da</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/de.zip">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Bulgarian' (4.3M links, 169.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-de.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (12.1M links, 390.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (12.9M links, 442.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-Greek (sample file)" href="MultiParaCrawl/v8/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="MultiParaCrawl/v8/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Estonian (sample file)" href="MultiParaCrawl/v8/de-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="MultiParaCrawl/v8/de-fi_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="MultiParaCrawl/v8/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Irish (sample file)" href="MultiParaCrawl/v8/de-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Croatian (sample file)" href="MultiParaCrawl/v8/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Hungarian (sample file)" href="MultiParaCrawl/v8/de-hu_sample.html">view</a></td><td><a rel="nofollow" title="German-Icelandic (sample file)" href="MultiParaCrawl/v8/de-is_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="MultiParaCrawl/v8/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Central Khmer (sample file)" href="MultiParaCrawl/v8/de-km_sample.html">view</a></td><td><a rel="nofollow" title="German-Korean (sample file)" href="MultiParaCrawl/v8/de-ko_sample.html">view</a></td><th>de</th>
<td><a rel="nofollow" title="German-Lithuanian (sample file)" href="MultiParaCrawl/v8/de-lt_sample.html">view</a></td><td><a rel="nofollow" title="German-Latvian (sample file)" href="MultiParaCrawl/v8/de-lv_sample.html">view</a></td><td><a rel="nofollow" title="German-Maltese (sample file)" href="MultiParaCrawl/v8/de-mt_sample.html">view</a></td><td><a rel="nofollow" title="German-Burmese (sample file)" href="MultiParaCrawl/v8/de-my_sample.html">view</a></td><td><a rel="nofollow" title="German-Nepali (sample file)" href="MultiParaCrawl/v8/de-ne_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="MultiParaCrawl/v8/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Norwegian (sample file)" href="MultiParaCrawl/v8/de-no_sample.html">view</a></td><td><a rel="nofollow" title="German-Polish (sample file)" href="MultiParaCrawl/v8/de-pl_sample.html">view</a></td><td><a rel="nofollow" title="German-Pushto (sample file)" href="MultiParaCrawl/v8/de-ps_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="MultiParaCrawl/v8/de-pt_sample.html">view</a></td><td><a rel="nofollow" title="German-Romanian (sample file)" href="MultiParaCrawl/v8/de-ro_sample.html">view</a></td><td><a rel="nofollow" title="German-Russian (sample file)" href="MultiParaCrawl/v8/de-ru_sample.html">view</a></td><td><a rel="nofollow" title="German-Sinhala (sample file)" href="MultiParaCrawl/v8/de-si_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovak (sample file)" href="MultiParaCrawl/v8/de-sk_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovenian (sample file)" href="MultiParaCrawl/v8/de-sl_sample.html">view</a></td><td><a rel="nofollow" title="German-Somali (sample file)" href="MultiParaCrawl/v8/de-so_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="MultiParaCrawl/v8/de-sv_sample.html">view</a></td><td><a rel="nofollow" title="German-Swahili (sample file)" href="MultiParaCrawl/v8/de-sw_sample.html">view</a></td><td><a rel="nofollow" title="German-Tagalog (sample file)" href="MultiParaCrawl/v8/de-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/el.zip">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (2.8M links, 111.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-el.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Czech' (5.7M links, 206.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (6.5M links, 230.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (9.1M links, 322.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-Spanish (sample file)" href="MultiParaCrawl/v8/el-es_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Estonian (sample file)" href="MultiParaCrawl/v8/el-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="MultiParaCrawl/v8/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="MultiParaCrawl/v8/el-fr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Irish (sample file)" href="MultiParaCrawl/v8/el-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="MultiParaCrawl/v8/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hungarian (sample file)" href="MultiParaCrawl/v8/el-hu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="MultiParaCrawl/v8/el-is_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="MultiParaCrawl/v8/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Central Khmer (sample file)" href="MultiParaCrawl/v8/el-km_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Korean (sample file)" href="MultiParaCrawl/v8/el-ko_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Lithuanian (sample file)" href="MultiParaCrawl/v8/el-lt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Latvian (sample file)" href="MultiParaCrawl/v8/el-lv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Maltese (sample file)" href="MultiParaCrawl/v8/el-mt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Burmese (sample file)" href="MultiParaCrawl/v8/el-my_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Nepali (sample file)" href="MultiParaCrawl/v8/el-ne_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="MultiParaCrawl/v8/el-nl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Norwegian (sample file)" href="MultiParaCrawl/v8/el-no_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Polish (sample file)" href="MultiParaCrawl/v8/el-pl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Pushto (sample file)" href="MultiParaCrawl/v8/el-ps_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="MultiParaCrawl/v8/el-pt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="MultiParaCrawl/v8/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Russian (sample file)" href="MultiParaCrawl/v8/el-ru_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Sinhala (sample file)" href="MultiParaCrawl/v8/el-si_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovak (sample file)" href="MultiParaCrawl/v8/el-sk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="MultiParaCrawl/v8/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Somali (sample file)" href="MultiParaCrawl/v8/el-so_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swedish (sample file)" href="MultiParaCrawl/v8/el-sv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swahili (sample file)" href="MultiParaCrawl/v8/el-sw_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Tagalog (sample file)" href="MultiParaCrawl/v8/el-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/el.zip">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/es.zip">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bulgarian' (4.4M links, 179.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (53.5M links, 2.0G tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ca-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (13.1M links, 441.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (14.6M links, 528.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (0 tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Greek' (10.7M links, 377.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Estonian (sample file)" href="MultiParaCrawl/v8/es-et_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Basque (sample file)" href="MultiParaCrawl/v8/es-eu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="MultiParaCrawl/v8/es-fi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="MultiParaCrawl/v8/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Irish (sample file)" href="MultiParaCrawl/v8/es-ga_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Galician (sample file)" href="MultiParaCrawl/v8/es-gl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="MultiParaCrawl/v8/es-hr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hungarian (sample file)" href="MultiParaCrawl/v8/es-hu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Icelandic (sample file)" href="MultiParaCrawl/v8/es-is_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="MultiParaCrawl/v8/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Central Khmer (sample file)" href="MultiParaCrawl/v8/es-km_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Korean (sample file)" href="MultiParaCrawl/v8/es-ko_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Lithuanian (sample file)" href="MultiParaCrawl/v8/es-lt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Latvian (sample file)" href="MultiParaCrawl/v8/es-lv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Maltese (sample file)" href="MultiParaCrawl/v8/es-mt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Burmese (sample file)" href="MultiParaCrawl/v8/es-my_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Nepali (sample file)" href="MultiParaCrawl/v8/es-ne_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="MultiParaCrawl/v8/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Norwegian (sample file)" href="MultiParaCrawl/v8/es-no_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="MultiParaCrawl/v8/es-pl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Pushto (sample file)" href="MultiParaCrawl/v8/es-ps_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="MultiParaCrawl/v8/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Romanian (sample file)" href="MultiParaCrawl/v8/es-ro_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="MultiParaCrawl/v8/es-ru_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Sinhala (sample file)" href="MultiParaCrawl/v8/es-si_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovak (sample file)" href="MultiParaCrawl/v8/es-sk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovenian (sample file)" href="MultiParaCrawl/v8/es-sl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Somali (sample file)" href="MultiParaCrawl/v8/es-so_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="MultiParaCrawl/v8/es-sv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swahili (sample file)" href="MultiParaCrawl/v8/es-sw_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Tagalog (sample file)" href="MultiParaCrawl/v8/es-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/et.zip">et</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (1.7M links, 66.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Czech' (2.7M links, 89.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Danish' (2.5M links, 92.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-German' (3.0M links, 108.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Greek' (2.3M links, 85.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Spanish' (3.3M links, 125.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-et.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="MultiParaCrawl/v8/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-French (sample file)" href="MultiParaCrawl/v8/et-fr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Irish (sample file)" href="MultiParaCrawl/v8/et-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="MultiParaCrawl/v8/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hungarian (sample file)" href="MultiParaCrawl/v8/et-hu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="MultiParaCrawl/v8/et-is_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Italian (sample file)" href="MultiParaCrawl/v8/et-it_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Central Khmer (sample file)" href="MultiParaCrawl/v8/et-km_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Korean (sample file)" href="MultiParaCrawl/v8/et-ko_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="MultiParaCrawl/v8/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="MultiParaCrawl/v8/et-lv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Maltese (sample file)" href="MultiParaCrawl/v8/et-mt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Burmese (sample file)" href="MultiParaCrawl/v8/et-my_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Nepali (sample file)" href="MultiParaCrawl/v8/et-ne_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Dutch (sample file)" href="MultiParaCrawl/v8/et-nl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Norwegian (sample file)" href="MultiParaCrawl/v8/et-no_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Polish (sample file)" href="MultiParaCrawl/v8/et-pl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Pushto (sample file)" href="MultiParaCrawl/v8/et-ps_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="MultiParaCrawl/v8/et-pt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Romanian (sample file)" href="MultiParaCrawl/v8/et-ro_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Russian (sample file)" href="MultiParaCrawl/v8/et-ru_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Sinhala (sample file)" href="MultiParaCrawl/v8/et-si_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="MultiParaCrawl/v8/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="MultiParaCrawl/v8/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Somali (sample file)" href="MultiParaCrawl/v8/et-so_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swedish (sample file)" href="MultiParaCrawl/v8/et-sv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swahili (sample file)" href="MultiParaCrawl/v8/et-sw_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Tagalog (sample file)" href="MultiParaCrawl/v8/et-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/et.zip">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/eu.zip">eu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Spanish' (2.4M links, 81.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-eu.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>eu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/eu.zip">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/fi.zip">fi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (2.1M links, 78.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' (3.5M links, 119.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (4.6M links, 162.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (5.4M links, 189.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' (3.2M links, 118.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (5.6M links, 204.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (2.0M links, 67.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-fi.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Finnish-French (sample file)" href="MultiParaCrawl/v8/fi-fr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Irish (sample file)" href="MultiParaCrawl/v8/fi-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="MultiParaCrawl/v8/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="MultiParaCrawl/v8/fi-hu_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="MultiParaCrawl/v8/fi-is_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="MultiParaCrawl/v8/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Central Khmer (sample file)" href="MultiParaCrawl/v8/fi-km_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Korean (sample file)" href="MultiParaCrawl/v8/fi-ko_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="MultiParaCrawl/v8/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="MultiParaCrawl/v8/fi-lv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Maltese (sample file)" href="MultiParaCrawl/v8/fi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Burmese (sample file)" href="MultiParaCrawl/v8/fi-my_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Nepali (sample file)" href="MultiParaCrawl/v8/fi-ne_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="MultiParaCrawl/v8/fi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Norwegian (sample file)" href="MultiParaCrawl/v8/fi-no_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Polish (sample file)" href="MultiParaCrawl/v8/fi-pl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Pushto (sample file)" href="MultiParaCrawl/v8/fi-ps_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="MultiParaCrawl/v8/fi-pt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="MultiParaCrawl/v8/fi-ro_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Russian (sample file)" href="MultiParaCrawl/v8/fi-ru_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Sinhala (sample file)" href="MultiParaCrawl/v8/fi-si_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="MultiParaCrawl/v8/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="MultiParaCrawl/v8/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Somali (sample file)" href="MultiParaCrawl/v8/fi-so_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="MultiParaCrawl/v8/fi-sv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swahili (sample file)" href="MultiParaCrawl/v8/fi-sw_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Tagalog (sample file)" href="MultiParaCrawl/v8/fi-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/fi.zip">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/fr.zip">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Bulgarian' (4.2M links, 183.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (10.8M links, 395.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (11.5M links, 454.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (47.9M links, 1.9G tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (8.6M links, 339.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (57.1M links, 2.4G tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Estonian' (3.0M links, 122.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (5.3M links, 206.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Irish (sample file)" href="MultiParaCrawl/v8/fr-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Croatian (sample file)" href="MultiParaCrawl/v8/fr-hr_sample.html">view</a></td><td><a rel="nofollow" title="French-Hungarian (sample file)" href="MultiParaCrawl/v8/fr-hu_sample.html">view</a></td><td><a rel="nofollow" title="French-Icelandic (sample file)" href="MultiParaCrawl/v8/fr-is_sample.html">view</a></td><td><a rel="nofollow" title="French-Italian (sample file)" href="MultiParaCrawl/v8/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Central Khmer (sample file)" href="MultiParaCrawl/v8/fr-km_sample.html">view</a></td><td><a rel="nofollow" title="French-Korean (sample file)" href="MultiParaCrawl/v8/fr-ko_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Lithuanian (sample file)" href="MultiParaCrawl/v8/fr-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="MultiParaCrawl/v8/fr-lv_sample.html">view</a></td><td><a rel="nofollow" title="French-Maltese (sample file)" href="MultiParaCrawl/v8/fr-mt_sample.html">view</a></td><td><a rel="nofollow" title="French-Burmese (sample file)" href="MultiParaCrawl/v8/fr-my_sample.html">view</a></td><td><a rel="nofollow" title="French-Nepali (sample file)" href="MultiParaCrawl/v8/fr-ne_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="MultiParaCrawl/v8/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Norwegian (sample file)" href="MultiParaCrawl/v8/fr-no_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="MultiParaCrawl/v8/fr-pl_sample.html">view</a></td><td><a rel="nofollow" title="French-Pushto (sample file)" href="MultiParaCrawl/v8/fr-ps_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="MultiParaCrawl/v8/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Romanian (sample file)" href="MultiParaCrawl/v8/fr-ro_sample.html">view</a></td><td><a rel="nofollow" title="French-Russian (sample file)" href="MultiParaCrawl/v8/fr-ru_sample.html">view</a></td><td><a rel="nofollow" title="French-Sinhala (sample file)" href="MultiParaCrawl/v8/fr-si_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovak (sample file)" href="MultiParaCrawl/v8/fr-sk_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="MultiParaCrawl/v8/fr-sl_sample.html">view</a></td><td><a rel="nofollow" title="French-Somali (sample file)" href="MultiParaCrawl/v8/fr-so_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="MultiParaCrawl/v8/fr-sv_sample.html">view</a></td><td><a rel="nofollow" title="French-Swahili (sample file)" href="MultiParaCrawl/v8/fr-sw_sample.html">view</a></td><td><a rel="nofollow" title="French-Tagalog (sample file)" href="MultiParaCrawl/v8/fr-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/ga.zip">ga</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Bulgarian' (0.3M links, 12.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Czech' (0.3M links, 12.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Danish' (0.4M links, 17.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-German' (0.5M links, 20.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Greek' (0.3M links, 15.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Spanish' (0.5M links, 21.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Estonian' (0.3M links, 12.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Finnish' (0.3M links, 12.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-French' (0.5M links, 22.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-ga.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Irish-Croatian (sample file)" href="MultiParaCrawl/v8/ga-hr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Hungarian (sample file)" href="MultiParaCrawl/v8/ga-hu_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Icelandic (sample file)" href="MultiParaCrawl/v8/ga-is_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Italian (sample file)" href="MultiParaCrawl/v8/ga-it_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Central Khmer (sample file)" href="MultiParaCrawl/v8/ga-km_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Korean (sample file)" href="MultiParaCrawl/v8/ga-ko_sample.html">view</a></td><th>ga</th>
<td><a rel="nofollow" title="Irish-Lithuanian (sample file)" href="MultiParaCrawl/v8/ga-lt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Latvian (sample file)" href="MultiParaCrawl/v8/ga-lv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Maltese (sample file)" href="MultiParaCrawl/v8/ga-mt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Burmese (sample file)" href="MultiParaCrawl/v8/ga-my_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Nepali (sample file)" href="MultiParaCrawl/v8/ga-ne_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Dutch (sample file)" href="MultiParaCrawl/v8/ga-nl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Norwegian (sample file)" href="MultiParaCrawl/v8/ga-no_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Polish (sample file)" href="MultiParaCrawl/v8/ga-pl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Pushto (sample file)" href="MultiParaCrawl/v8/ga-ps_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Portuguese (sample file)" href="MultiParaCrawl/v8/ga-pt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Romanian (sample file)" href="MultiParaCrawl/v8/ga-ro_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Russian (sample file)" href="MultiParaCrawl/v8/ga-ru_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Sinhala (sample file)" href="MultiParaCrawl/v8/ga-si_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovak (sample file)" href="MultiParaCrawl/v8/ga-sk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovenian (sample file)" href="MultiParaCrawl/v8/ga-sl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Somali (sample file)" href="MultiParaCrawl/v8/ga-so_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swedish (sample file)" href="MultiParaCrawl/v8/ga-sv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swahili (sample file)" href="MultiParaCrawl/v8/ga-sw_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Tagalog (sample file)" href="MultiParaCrawl/v8/ga-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/ga.zip">ga</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/gl.zip">gl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Spanish' (12.4M links, 304.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-gl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th>gl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/gl.zip">gl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/hr.zip">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (1.6M links, 59.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' (2.6M links, 82.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Danish' (2.1M links, 73.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (3.4M links, 114.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (2.0M links, 72.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (3.2M links, 111.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (1.1M links, 37.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (1.5M links, 47.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (3.1M links, 115.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Irish' (0.3M links, 10.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-hr.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Hungarian (sample file)" href="MultiParaCrawl/v8/hr-hu_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="MultiParaCrawl/v8/hr-is_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Italian (sample file)" href="MultiParaCrawl/v8/hr-it_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Central Khmer (sample file)" href="MultiParaCrawl/v8/hr-km_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Korean (sample file)" href="MultiParaCrawl/v8/hr-ko_sample.html">view</a></td><th>hr</th>
<td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="MultiParaCrawl/v8/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="MultiParaCrawl/v8/hr-lv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Maltese (sample file)" href="MultiParaCrawl/v8/hr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Burmese (sample file)" href="MultiParaCrawl/v8/hr-my_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Nepali (sample file)" href="MultiParaCrawl/v8/hr-ne_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Dutch (sample file)" href="MultiParaCrawl/v8/hr-nl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Norwegian (sample file)" href="MultiParaCrawl/v8/hr-no_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Polish (sample file)" href="MultiParaCrawl/v8/hr-pl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Pushto (sample file)" href="MultiParaCrawl/v8/hr-ps_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="MultiParaCrawl/v8/hr-pt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="MultiParaCrawl/v8/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Russian (sample file)" href="MultiParaCrawl/v8/hr-ru_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Sinhala (sample file)" href="MultiParaCrawl/v8/hr-si_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="MultiParaCrawl/v8/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="MultiParaCrawl/v8/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Somali (sample file)" href="MultiParaCrawl/v8/hr-so_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swedish (sample file)" href="MultiParaCrawl/v8/hr-sv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swahili (sample file)" href="MultiParaCrawl/v8/hr-sw_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Tagalog (sample file)" href="MultiParaCrawl/v8/hr-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/hu.zip">hu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' (2.1M links, 81.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' (3.5M links, 117.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Danish' (3.1M links, 111.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-German' (4.8M links, 174.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Greek' (3.0M links, 111.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Spanish' (4.7M links, 176.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Estonian' (1.7M links, 62.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' (2.4M links, 83.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-French' (4.6M links, 184.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Irish' (0.3M links, 12.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Croatian' (1.5M links, 50.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-hu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="MultiParaCrawl/v8/hu-is_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Italian (sample file)" href="MultiParaCrawl/v8/hu-it_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Central Khmer (sample file)" href="MultiParaCrawl/v8/hu-km_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Korean (sample file)" href="MultiParaCrawl/v8/hu-ko_sample.html">view</a></td><th>hu</th>
<td><a rel="nofollow" title="Hungarian-Lithuanian (sample file)" href="MultiParaCrawl/v8/hu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Latvian (sample file)" href="MultiParaCrawl/v8/hu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Maltese (sample file)" href="MultiParaCrawl/v8/hu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Burmese (sample file)" href="MultiParaCrawl/v8/hu-my_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Nepali (sample file)" href="MultiParaCrawl/v8/hu-ne_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="MultiParaCrawl/v8/hu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Norwegian (sample file)" href="MultiParaCrawl/v8/hu-no_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Polish (sample file)" href="MultiParaCrawl/v8/hu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Pushto (sample file)" href="MultiParaCrawl/v8/hu-ps_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="MultiParaCrawl/v8/hu-pt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Romanian (sample file)" href="MultiParaCrawl/v8/hu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Russian (sample file)" href="MultiParaCrawl/v8/hu-ru_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Sinhala (sample file)" href="MultiParaCrawl/v8/hu-si_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovak (sample file)" href="MultiParaCrawl/v8/hu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovenian (sample file)" href="MultiParaCrawl/v8/hu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Somali (sample file)" href="MultiParaCrawl/v8/hu-so_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swedish (sample file)" href="MultiParaCrawl/v8/hu-sv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swahili (sample file)" href="MultiParaCrawl/v8/hu-sw_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Tagalog (sample file)" href="MultiParaCrawl/v8/hu-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/hu.zip">hu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/is.zip">is</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (0.5M links, 20.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Czech' (1.3M links, 39.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Danish' (1.1M links, 39.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-German' (1.6M links, 51.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' (1.0M links, 34.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Spanish' (1.6M links, 57.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (0.8M links, 24.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (0.8M links, 23.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-French' (1.4M links, 52.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Irish' (0.2M links, 9.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' (0.7M links, 20.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hungarian' (0.6M links, 18.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-is.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Italian (sample file)" href="MultiParaCrawl/v8/is-it_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Central Khmer (sample file)" href="MultiParaCrawl/v8/is-km_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Korean (sample file)" href="MultiParaCrawl/v8/is-ko_sample.html">view</a></td><th>is</th>
<td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="MultiParaCrawl/v8/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="MultiParaCrawl/v8/is-lv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Maltese (sample file)" href="MultiParaCrawl/v8/is-mt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Burmese (sample file)" href="MultiParaCrawl/v8/is-my_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Nepali (sample file)" href="MultiParaCrawl/v8/is-ne_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Dutch (sample file)" href="MultiParaCrawl/v8/is-nl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Norwegian (sample file)" href="MultiParaCrawl/v8/is-no_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Polish (sample file)" href="MultiParaCrawl/v8/is-pl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Pushto (sample file)" href="MultiParaCrawl/v8/is-ps_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="MultiParaCrawl/v8/is-pt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="MultiParaCrawl/v8/is-ro_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Russian (sample file)" href="MultiParaCrawl/v8/is-ru_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Sinhala (sample file)" href="MultiParaCrawl/v8/is-si_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="MultiParaCrawl/v8/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="MultiParaCrawl/v8/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Somali (sample file)" href="MultiParaCrawl/v8/is-so_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swedish (sample file)" href="MultiParaCrawl/v8/is-sv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swahili (sample file)" href="MultiParaCrawl/v8/is-sw_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Tagalog (sample file)" href="MultiParaCrawl/v8/is-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/is.zip">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/it.zip">it</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bulgarian' (3.2M links, 133.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Czech' (8.4M links, 300.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (9.9M links, 377.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (31.8M links, 1.2G tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (8.0M links, 302.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (37.5M links, 1.5G tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Estonian' (2.7M links, 104.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (4.5M links, 167.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (0 tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Irish' (0.4M links, 19.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Croatian' (2.9M links, 104.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hungarian' (4.1M links, 160.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Icelandic' (1.2M links, 44.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-it.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Italian-Central Khmer (sample file)" href="MultiParaCrawl/v8/it-km_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Korean (sample file)" href="MultiParaCrawl/v8/it-ko_sample.html">view</a></td><th>it</th>
<td><a rel="nofollow" title="Italian-Lithuanian (sample file)" href="MultiParaCrawl/v8/it-lt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Latvian (sample file)" href="MultiParaCrawl/v8/it-lv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Maltese (sample file)" href="MultiParaCrawl/v8/it-mt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Burmese (sample file)" href="MultiParaCrawl/v8/it-my_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Nepali (sample file)" href="MultiParaCrawl/v8/it-ne_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="MultiParaCrawl/v8/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Norwegian (sample file)" href="MultiParaCrawl/v8/it-no_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Polish (sample file)" href="MultiParaCrawl/v8/it-pl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Pushto (sample file)" href="MultiParaCrawl/v8/it-ps_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="MultiParaCrawl/v8/it-pt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Romanian (sample file)" href="MultiParaCrawl/v8/it-ro_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Russian (sample file)" href="MultiParaCrawl/v8/it-ru_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Sinhala (sample file)" href="MultiParaCrawl/v8/it-si_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovak (sample file)" href="MultiParaCrawl/v8/it-sk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovenian (sample file)" href="MultiParaCrawl/v8/it-sl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Somali (sample file)" href="MultiParaCrawl/v8/it-so_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="MultiParaCrawl/v8/it-sv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swahili (sample file)" href="MultiParaCrawl/v8/it-sw_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Tagalog (sample file)" href="MultiParaCrawl/v8/it-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/it.zip">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/km.zip">km</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Bulgarian' (1.3k links, 39.6k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-km.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Czech' (1.7k links, 52.1k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Danish' (1.6k links, 51.1k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-German' (2.1k links, 62.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Greek' (1.7k links, 52.5k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Spanish' (2.9k links, 94.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Estonian' (1.5k links, 41.9k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-km.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Finnish' (1.3k links, 38.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-French' (2.3k links, 76.1k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Irish' (1.0k links, 31.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-km.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Croatian' (1.3k links, 35.2k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Hungarian' (1.3k links, 37.9k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Icelandic' (2.1k links, 75.1k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-km.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Italian' (2.1k links, 64.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-km.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Central Khmer-Korean (sample file)" href="MultiParaCrawl/v8/km-ko_sample.html">view</a></td><th>km</th>
<td><a rel="nofollow" title="Central Khmer-Lithuanian (sample file)" href="MultiParaCrawl/v8/km-lt_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Latvian (sample file)" href="MultiParaCrawl/v8/km-lv_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Maltese (sample file)" href="MultiParaCrawl/v8/km-mt_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Burmese (sample file)" href="MultiParaCrawl/v8/km-my_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Nepali (sample file)" href="MultiParaCrawl/v8/km-ne_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Dutch (sample file)" href="MultiParaCrawl/v8/km-nl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Norwegian (sample file)" href="MultiParaCrawl/v8/km-no_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Polish (sample file)" href="MultiParaCrawl/v8/km-pl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Pushto (sample file)" href="MultiParaCrawl/v8/km-ps_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Portuguese (sample file)" href="MultiParaCrawl/v8/km-pt_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Romanian (sample file)" href="MultiParaCrawl/v8/km-ro_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Russian (sample file)" href="MultiParaCrawl/v8/km-ru_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Sinhala (sample file)" href="MultiParaCrawl/v8/km-si_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Slovak (sample file)" href="MultiParaCrawl/v8/km-sk_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Slovenian (sample file)" href="MultiParaCrawl/v8/km-sl_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Somali (sample file)" href="MultiParaCrawl/v8/km-so_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Swedish (sample file)" href="MultiParaCrawl/v8/km-sv_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Swahili (sample file)" href="MultiParaCrawl/v8/km-sw_sample.html">view</a></td><td><a rel="nofollow" title="Central Khmer-Tagalog (sample file)" href="MultiParaCrawl/v8/km-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/km.zip">km</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/ko.zip">ko</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bulgarian' (0.2M links, 6.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Czech' (0.4M links, 11.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Danish' (0.4M links, 13.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-German' (0.8M links, 24.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Greek' (0.3M links, 8.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Spanish' (1.0M links, 33.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Estonian' (0.1M links, 4.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Finnish' (0.2M links, 7.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-French' (0.8M links, 28.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Irish' (15.6k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Croatian' (0.1M links, 3.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hungarian' (0.2M links, 4.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Icelandic' (53.0k links, 1.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Italian' (0.6M links, 21.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Central Khmer' (0.5k links, 13.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-ko.xml.gz">ces</a></td>
<th></th>
<th>ko</th>
<td><a rel="nofollow" title="Korean-Lithuanian (sample file)" href="MultiParaCrawl/v8/ko-lt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Latvian (sample file)" href="MultiParaCrawl/v8/ko-lv_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Maltese (sample file)" href="MultiParaCrawl/v8/ko-mt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Burmese (sample file)" href="MultiParaCrawl/v8/ko-my_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Nepali (sample file)" href="MultiParaCrawl/v8/ko-ne_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Dutch (sample file)" href="MultiParaCrawl/v8/ko-nl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Norwegian (sample file)" href="MultiParaCrawl/v8/ko-no_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Polish (sample file)" href="MultiParaCrawl/v8/ko-pl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Pushto (sample file)" href="MultiParaCrawl/v8/ko-ps_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Portuguese (sample file)" href="MultiParaCrawl/v8/ko-pt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Romanian (sample file)" href="MultiParaCrawl/v8/ko-ro_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Russian (sample file)" href="MultiParaCrawl/v8/ko-ru_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Sinhala (sample file)" href="MultiParaCrawl/v8/ko-si_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Slovak (sample file)" href="MultiParaCrawl/v8/ko-sk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Slovenian (sample file)" href="MultiParaCrawl/v8/ko-sl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Somali (sample file)" href="MultiParaCrawl/v8/ko-so_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Swedish (sample file)" href="MultiParaCrawl/v8/ko-sv_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Swahili (sample file)" href="MultiParaCrawl/v8/ko-sw_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Tagalog (sample file)" href="MultiParaCrawl/v8/ko-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/ko.zip">ko</a></th></tr>
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
<th></th>
<th>lt</th>
<th>lv</th>
<th>mt</th>
<th>my</th>
<th>ne</th>
<th>nl</th>
<th>no</th>
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
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/lt.zip">lt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (1.9M links, 74.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Czech' (2.6M links, 88.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Danish' (2.5M links, 92.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-German' (3.1M links, 108.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Greek' (2.5M links, 92.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Spanish' (3.2M links, 118.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (2.0M links, 68.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' (2.0M links, 69.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (3.1M links, 122.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Irish' (0.3M links, 12.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' (1.4M links, 45.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hungarian' (2.0M links, 71.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' (0.7M links, 22.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Italian' (2.7M links, 105.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Central Khmer' (1.4k links, 39.8k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Korean' (0.1M links, 3.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-lt.xml.gz">ces</a></td>
<th>lt</th>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="MultiParaCrawl/v8/lt-lv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Maltese (sample file)" href="MultiParaCrawl/v8/lt-mt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Burmese (sample file)" href="MultiParaCrawl/v8/lt-my_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Nepali (sample file)" href="MultiParaCrawl/v8/lt-ne_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Dutch (sample file)" href="MultiParaCrawl/v8/lt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Norwegian (sample file)" href="MultiParaCrawl/v8/lt-no_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Polish (sample file)" href="MultiParaCrawl/v8/lt-pl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Pushto (sample file)" href="MultiParaCrawl/v8/lt-ps_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="MultiParaCrawl/v8/lt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Romanian (sample file)" href="MultiParaCrawl/v8/lt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Russian (sample file)" href="MultiParaCrawl/v8/lt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Sinhala (sample file)" href="MultiParaCrawl/v8/lt-si_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="MultiParaCrawl/v8/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="MultiParaCrawl/v8/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Somali (sample file)" href="MultiParaCrawl/v8/lt-so_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swedish (sample file)" href="MultiParaCrawl/v8/lt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swahili (sample file)" href="MultiParaCrawl/v8/lt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Tagalog (sample file)" href="MultiParaCrawl/v8/lt-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/lt.zip">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/lv.zip">lv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (2.0M links, 78.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Czech' (2.6M links, 92.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Danish' (2.6M links, 97.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-German' (3.1M links, 113.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Greek' (2.5M links, 95.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Spanish' (3.1M links, 120.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (2.0M links, 71.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' (2.1M links, 72.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (3.1M links, 127.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Irish' (0.3M links, 13.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' (1.4M links, 48.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hungarian' (1.9M links, 71.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' (0.8M links, 24.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Italian' (2.8M links, 110.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Central Khmer' (1.4k links, 40.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Korean' (97.7k links, 2.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-lv.xml.gz">ces</a></td>
<th>lv</th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (2.5M links, 91.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-lv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Latvian-Maltese (sample file)" href="MultiParaCrawl/v8/lv-mt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Burmese (sample file)" href="MultiParaCrawl/v8/lv-my_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Nepali (sample file)" href="MultiParaCrawl/v8/lv-ne_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Dutch (sample file)" href="MultiParaCrawl/v8/lv-nl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Norwegian (sample file)" href="MultiParaCrawl/v8/lv-no_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Polish (sample file)" href="MultiParaCrawl/v8/lv-pl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Pushto (sample file)" href="MultiParaCrawl/v8/lv-ps_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="MultiParaCrawl/v8/lv-pt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Romanian (sample file)" href="MultiParaCrawl/v8/lv-ro_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Russian (sample file)" href="MultiParaCrawl/v8/lv-ru_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Sinhala (sample file)" href="MultiParaCrawl/v8/lv-si_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="MultiParaCrawl/v8/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="MultiParaCrawl/v8/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Somali (sample file)" href="MultiParaCrawl/v8/lv-so_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swedish (sample file)" href="MultiParaCrawl/v8/lv-sv_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swahili (sample file)" href="MultiParaCrawl/v8/lv-sw_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Tagalog (sample file)" href="MultiParaCrawl/v8/lv-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/lv.zip">lv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/mt.zip">mt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bulgarian' (0.6M links, 25.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Czech' (0.7M links, 29.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Danish' (0.7M links, 30.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-German' (0.7M links, 32.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Greek' (0.7M links, 30.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Spanish' (0.8M links, 39.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Estonian' (0.7M links, 26.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Finnish' (0.5M links, 22.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-French' (0.7M links, 38.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Irish' (0.3M links, 11.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Croatian' (0.4M links, 15.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Hungarian' (0.5M links, 22.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Icelandic' (0.3M links, 10.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Italian' (0.7M links, 33.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Central Khmer' (1.1k links, 33.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Korean' (16.6k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-mt.xml.gz">ces</a></td>
<th>mt</th>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Lithuanian' (0.6M links, 25.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Latvian' (0.6M links, 28.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-mt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Maltese-Burmese (sample file)" href="MultiParaCrawl/v8/mt-my_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Nepali (sample file)" href="MultiParaCrawl/v8/mt-ne_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Dutch (sample file)" href="MultiParaCrawl/v8/mt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Norwegian (sample file)" href="MultiParaCrawl/v8/mt-no_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Polish (sample file)" href="MultiParaCrawl/v8/mt-pl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Pushto (sample file)" href="MultiParaCrawl/v8/mt-ps_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Portuguese (sample file)" href="MultiParaCrawl/v8/mt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Romanian (sample file)" href="MultiParaCrawl/v8/mt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Russian (sample file)" href="MultiParaCrawl/v8/mt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Sinhala (sample file)" href="MultiParaCrawl/v8/mt-si_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovak (sample file)" href="MultiParaCrawl/v8/mt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovenian (sample file)" href="MultiParaCrawl/v8/mt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Somali (sample file)" href="MultiParaCrawl/v8/mt-so_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swedish (sample file)" href="MultiParaCrawl/v8/mt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swahili (sample file)" href="MultiParaCrawl/v8/mt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Tagalog (sample file)" href="MultiParaCrawl/v8/mt-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/mt.zip">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/my.zip">my</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Bulgarian' (0.6k links, 18.1k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-my.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Czech' (0.5k links, 13.6k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Danish' (0.5k links, 17.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-German' (0.7k links, 22.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Greek' (0.7k links, 22.9k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Spanish' (1.0k links, 31.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Estonian' (0.5k links, 16.0k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-my.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Finnish' (0.5k links, 16.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-French' (0.8k links, 26.6k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Irish' (0.4k links, 16.1k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-my.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Croatian' (0.4k links, 14.0k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Hungarian' (0.4k links, 14.5k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Icelandic' (0.5k links, 17.5k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Italian' (0.7k links, 21.6k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Central Khmer' (5.4k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Korean' (0.2k links, 7.2k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-my.xml.gz">ces</a></td>
<th>my</th>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Lithuanian' (0.5k links, 18.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Latvian' (0.5k links, 17.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-my.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-Maltese' (0.6k links, 19.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-my.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Burmese-Nepali (sample file)" href="MultiParaCrawl/v8/my-ne_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Dutch (sample file)" href="MultiParaCrawl/v8/my-nl_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Norwegian (sample file)" href="MultiParaCrawl/v8/my-no_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Polish (sample file)" href="MultiParaCrawl/v8/my-pl_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Pushto (sample file)" href="MultiParaCrawl/v8/my-ps_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Portuguese (sample file)" href="MultiParaCrawl/v8/my-pt_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Romanian (sample file)" href="MultiParaCrawl/v8/my-ro_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Russian (sample file)" href="MultiParaCrawl/v8/my-ru_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Sinhala (sample file)" href="MultiParaCrawl/v8/my-si_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Slovak (sample file)" href="MultiParaCrawl/v8/my-sk_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Slovenian (sample file)" href="MultiParaCrawl/v8/my-sl_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Somali (sample file)" href="MultiParaCrawl/v8/my-so_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Swedish (sample file)" href="MultiParaCrawl/v8/my-sv_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Swahili (sample file)" href="MultiParaCrawl/v8/my-sw_sample.html">view</a></td><td><a rel="nofollow" title="Burmese-Tagalog (sample file)" href="MultiParaCrawl/v8/my-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/my.zip">my</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/ne.zip">ne</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Bulgarian' (4.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-ne.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Czech' (4.4k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Danish' (7.2k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-German' (9.0k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Greek' (5.8k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Spanish' (10.3k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Estonian' (6.8k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-ne.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Finnish' (5.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-French' (0 tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Irish' (4.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-ne.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Croatian' (4.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Hungarian' (5.3k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Icelandic' (7.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Italian' (8.0k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Central Khmer' (12.4k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Korean' (1.1k links, 40.5k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-ne.xml.gz">ces</a></td>
<th>ne</th>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Lithuanian' (5.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Latvian' (6.2k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Maltese' (5.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Burmese' (3.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-ne.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Nepali-Dutch (sample file)" href="MultiParaCrawl/v8/ne-nl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Norwegian (sample file)" href="MultiParaCrawl/v8/ne-no_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Polish (sample file)" href="MultiParaCrawl/v8/ne-pl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Pushto (sample file)" href="MultiParaCrawl/v8/ne-ps_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Portuguese (sample file)" href="MultiParaCrawl/v8/ne-pt_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Romanian (sample file)" href="MultiParaCrawl/v8/ne-ro_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Russian (sample file)" href="MultiParaCrawl/v8/ne-ru_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Sinhala (sample file)" href="MultiParaCrawl/v8/ne-si_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Slovak (sample file)" href="MultiParaCrawl/v8/ne-sk_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Slovenian (sample file)" href="MultiParaCrawl/v8/ne-sl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Somali (sample file)" href="MultiParaCrawl/v8/ne-so_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Swedish (sample file)" href="MultiParaCrawl/v8/ne-sv_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Swahili (sample file)" href="MultiParaCrawl/v8/ne-sw_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Tagalog (sample file)" href="MultiParaCrawl/v8/ne-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/ne.zip">ne</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/nl.zip">nl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bulgarian' (3.0M links, 124.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (8.2M links, 282.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (10.9M links, 399.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (24.4M links, 828.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (7.5M links, 276.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (24.7M links, 900.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Estonian' (2.4M links, 90.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (4.6M links, 167.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (23.0M links, 899.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Irish' (0.4M links, 17.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Croatian' (2.3M links, 79.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (3.5M links, 128.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Icelandic' (1.3M links, 43.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (16.5M links, 630.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Central Khmer' (2.0k links, 63.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Korean' (0.5M links, 16.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-nl.xml.gz">ces</a></td>
<th>nl</th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Lithuanian' (2.6M links, 98.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latvian' (2.6M links, 101.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Maltese' (0.7M links, 31.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Burmese' (0.7k links, 21.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Nepali' (7.9k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-nl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Norwegian (sample file)" href="MultiParaCrawl/v8/nl-no_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Polish (sample file)" href="MultiParaCrawl/v8/nl-pl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Pushto (sample file)" href="MultiParaCrawl/v8/nl-ps_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="MultiParaCrawl/v8/nl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Romanian (sample file)" href="MultiParaCrawl/v8/nl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Russian (sample file)" href="MultiParaCrawl/v8/nl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Sinhala (sample file)" href="MultiParaCrawl/v8/nl-si_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovak (sample file)" href="MultiParaCrawl/v8/nl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovenian (sample file)" href="MultiParaCrawl/v8/nl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Somali (sample file)" href="MultiParaCrawl/v8/nl-so_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="MultiParaCrawl/v8/nl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swahili (sample file)" href="MultiParaCrawl/v8/nl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Tagalog (sample file)" href="MultiParaCrawl/v8/nl-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/nl.zip">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/no.zip">no</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Bulgarian' (2.7M links, 98.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-no.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Czech' (7.4M links, 231.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Danish' (11.5M links, 379.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-German' (13.3M links, 422.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Greek' (6.5M links, 214.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Spanish' (16.9M links, 543.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Estonian' (2.4M links, 77.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-no.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Finnish' (4.4M links, 143.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-French' (11.7M links, 426.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Irish' (0.4M links, 13.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-no.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Croatian' (2.7M links, 83.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Hungarian' (2.9M links, 98.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Icelandic' (1.7M links, 54.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Italian' (10.0M links, 351.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Central Khmer' (2.3k links, 76.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Korean' (0.3M links, 10.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-no.xml.gz">ces</a></td>
<th>no</th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Lithuanian' (2.5M links, 83.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Latvian' (2.5M links, 84.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Maltese' (0.5M links, 15.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Burmese' (0.7k links, 22.5k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Nepali' (9.0k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Dutch' (11.3M links, 380.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-no.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Norwegian-Polish (sample file)" href="MultiParaCrawl/v8/no-pl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Pushto (sample file)" href="MultiParaCrawl/v8/no-ps_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Portuguese (sample file)" href="MultiParaCrawl/v8/no-pt_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Romanian (sample file)" href="MultiParaCrawl/v8/no-ro_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Russian (sample file)" href="MultiParaCrawl/v8/no-ru_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Sinhala (sample file)" href="MultiParaCrawl/v8/no-si_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Slovak (sample file)" href="MultiParaCrawl/v8/no-sk_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Slovenian (sample file)" href="MultiParaCrawl/v8/no-sl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Somali (sample file)" href="MultiParaCrawl/v8/no-so_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Swedish (sample file)" href="MultiParaCrawl/v8/no-sv_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Swahili (sample file)" href="MultiParaCrawl/v8/no-sw_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Tagalog (sample file)" href="MultiParaCrawl/v8/no-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/no.zip">no</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/pl.zip">pl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bulgarian' (2.9M links, 112.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Czech' (6.7M links, 217.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Danish' (7.7M links, 259.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (13.9M links, 469.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Greek' (6.2M links, 206.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (0 tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Estonian' (2.2M links, 77.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Finnish' (3.8M links, 126.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (12.7M links, 485.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Irish' (0.3M links, 14.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Croatian' (2.2M links, 74.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hungarian' (3.6M links, 128.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Icelandic' (0.9M links, 27.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Italian' (10.9M links, 398.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Central Khmer' (1.5k links, 43.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Korean' (0.3M links, 9.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-pl.xml.gz">ces</a></td>
<th>pl</th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Lithuanian' (2.7M links, 95.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Latvian' (2.5M links, 92.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Maltese' (0.6M links, 27.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Burmese' (0.5k links, 17.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Nepali' (6.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (9.4M links, 319.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Norwegian' (7.7M links, 238.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-pl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Polish-Pushto (sample file)" href="MultiParaCrawl/v8/pl-ps_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="MultiParaCrawl/v8/pl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Romanian (sample file)" href="MultiParaCrawl/v8/pl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Russian (sample file)" href="MultiParaCrawl/v8/pl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Sinhala (sample file)" href="MultiParaCrawl/v8/pl-si_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovak (sample file)" href="MultiParaCrawl/v8/pl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovenian (sample file)" href="MultiParaCrawl/v8/pl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Somali (sample file)" href="MultiParaCrawl/v8/pl-so_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swedish (sample file)" href="MultiParaCrawl/v8/pl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swahili (sample file)" href="MultiParaCrawl/v8/pl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Tagalog (sample file)" href="MultiParaCrawl/v8/pl-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/pl.zip">pl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/ps.zip">ps</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Bulgarian' (3.3k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-ps.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Czech' (2.1k links, 70.0k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Danish' (3.6k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-German' (3.9k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Greek' (4.1k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Spanish' (5.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Estonian' (3.3k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-ps.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Finnish' (2.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-French' (4.1k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Irish' (2.1k links, 91.1k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-ps.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Croatian' (2.6k links, 90.6k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Hungarian' (2.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Icelandic' (3.6k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Italian' (3.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Central Khmer' (1.1k links, 61.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Korean' (0.2k links, 3.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-ps.xml.gz">ces</a></td>
<th>ps</th>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Lithuanian' (3.0k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Latvian' (3.5k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Maltese' (3.0k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Burmese' (0.7k links, 46.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Nepali' (4.1k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Dutch' (3.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Norwegian' (4.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-ps.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-Polish' (3.4k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-ps.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Pushto-Portuguese (sample file)" href="MultiParaCrawl/v8/ps-pt_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Romanian (sample file)" href="MultiParaCrawl/v8/ps-ro_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Russian (sample file)" href="MultiParaCrawl/v8/ps-ru_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Sinhala (sample file)" href="MultiParaCrawl/v8/ps-si_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Slovak (sample file)" href="MultiParaCrawl/v8/ps-sk_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Slovenian (sample file)" href="MultiParaCrawl/v8/ps-sl_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Somali (sample file)" href="MultiParaCrawl/v8/ps-so_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Swedish (sample file)" href="MultiParaCrawl/v8/ps-sv_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Swahili (sample file)" href="MultiParaCrawl/v8/ps-sw_sample.html">view</a></td><td><a rel="nofollow" title="Pushto-Tagalog (sample file)" href="MultiParaCrawl/v8/ps-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/ps.zip">ps</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/pt.zip">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (3.6M links, 147.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (8.2M links, 283.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (10.1M links, 372.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (24.3M links, 879.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (8.0M links, 292.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (37.3M links, 1.5G tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (2.5M links, 96.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (4.5M links, 163.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (26.7M links, 1.1G tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Irish' (0.4M links, 17.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (2.4M links, 86.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (3.7M links, 139.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (1.1M links, 38.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (20.8M links, 829.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Central Khmer' (2.0k links, 62.0k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Korean' (0.7M links, 23.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-pt.xml.gz">ces</a></td>
<th>pt</th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (2.7M links, 104.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (2.7M links, 104.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Maltese' (0.7M links, 34.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Burmese' (0.7k links, 21.8k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Nepali' (8.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (15.1M links, 565.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Norwegian' (10.3M links, 352.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (10.8M links, 389.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Pushto' (3.7k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ps-pt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="MultiParaCrawl/v8/pt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="MultiParaCrawl/v8/pt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Sinhala (sample file)" href="MultiParaCrawl/v8/pt-si_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="MultiParaCrawl/v8/pt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="MultiParaCrawl/v8/pt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Somali (sample file)" href="MultiParaCrawl/v8/pt-so_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="MultiParaCrawl/v8/pt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swahili (sample file)" href="MultiParaCrawl/v8/pt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Tagalog (sample file)" href="MultiParaCrawl/v8/pt-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/pt.zip">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/ro.zip">ro</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (2.7M links, 112.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' (3.5M links, 129.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Danish' (3.2M links, 128.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-German' (4.8M links, 189.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (3.1M links, 127.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Spanish' (5.4M links, 216.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Estonian' (1.7M links, 68.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' (2.3M links, 86.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-French' (4.9M links, 208.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Irish' (0.3M links, 12.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (1.6M links, 60.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hungarian' (2.5M links, 99.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Icelandic' (0.6M links, 21.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Italian' (4.3M links, 180.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Central Khmer' (1.1k links, 37.6k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Korean' (0.2M links, 5.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-ro.xml.gz">ces</a></td>
<th>ro</th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Lithuanian' (2.0M links, 81.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Latvian' (2.0M links, 82.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Maltese' (0.6M links, 26.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Burmese' (0.4k links, 15.8k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Nepali' (3.9k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Dutch' (3.8M links, 150.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Norwegian' (3.3M links, 120.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Polish' (3.8M links, 147.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Pushto' (2.8k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ps-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (4.5M links, 182.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pt-ro.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Russian (sample file)" href="MultiParaCrawl/v8/ro-ru_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Sinhala (sample file)" href="MultiParaCrawl/v8/ro-si_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovak (sample file)" href="MultiParaCrawl/v8/ro-sk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovenian (sample file)" href="MultiParaCrawl/v8/ro-sl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Somali (sample file)" href="MultiParaCrawl/v8/ro-so_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swedish (sample file)" href="MultiParaCrawl/v8/ro-sv_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swahili (sample file)" href="MultiParaCrawl/v8/ro-sw_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Tagalog (sample file)" href="MultiParaCrawl/v8/ro-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/ro.zip">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/ru.zip">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bulgarian' (0.1M links, 5.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (0.2M links, 7.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Danish' (0.2M links, 8.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (0.7M links, 24.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Greek' (0.3M links, 9.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (0.9M links, 32.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Estonian' (0.1M links, 4.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Finnish' (0.2M links, 5.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (0.7M links, 29.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Irish' (21.1k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Croatian' (98.2k links, 3.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hungarian' (98.7k links, 3.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Icelandic' (62.8k links, 2.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Italian' (0.5M links, 19.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Central Khmer' (2.4k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Korean' (71.8k links, 2.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-ru.xml.gz">ces</a></td>
<th>ru</th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Lithuanian' (99.4k links, 3.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Latvian' (91.0k links, 3.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Maltese' (33.8k links, 1.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Burmese' (1.4k links, 78.1k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Nepali' (4.1k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Dutch' (0.4M links, 14.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Norwegian' (0.3M links, 9.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Polish' (0.3M links, 9.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Pushto' (0.6k links, 19.0k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ps-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (0.5M links, 18.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Romanian' (0.2M links, 5.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ro-ru.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Russian-Sinhala (sample file)" href="MultiParaCrawl/v8/ru-si_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovak (sample file)" href="MultiParaCrawl/v8/ru-sk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovenian (sample file)" href="MultiParaCrawl/v8/ru-sl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Somali (sample file)" href="MultiParaCrawl/v8/ru-so_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swedish (sample file)" href="MultiParaCrawl/v8/ru-sv_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swahili (sample file)" href="MultiParaCrawl/v8/ru-sw_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Tagalog (sample file)" href="MultiParaCrawl/v8/ru-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/ru.zip">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/si.zip">si</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bulgarian' (9.5k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Czech' (13.9k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Danish' (13.3k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-German' (19.8k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Greek' (14.1k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Spanish' (24.6k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Estonian' (9.9k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Finnish' (9.7k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-French' (21.0k links, 1.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Irish' (5.3k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Croatian' (8.1k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hungarian' (7.7k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Icelandic' (13.7k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Italian' (17.0k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Central Khmer' (19.8k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Korean' (1.8k links, 54.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-si.xml.gz">ces</a></td>
<th>si</th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Lithuanian' (8.8k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Latvian' (9.5k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Maltese' (7.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Burmese' (5.5k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Nepali' (34.5k links, 2.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Dutch' (17.0k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Norwegian' (18.3k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Polish' (9.7k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Pushto' (6.6k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ps-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Portuguese' (17.9k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Romanian' (7.8k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ro-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Russian' (10.0k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ru-si.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Sinhala-Slovak (sample file)" href="MultiParaCrawl/v8/si-sk_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Slovenian (sample file)" href="MultiParaCrawl/v8/si-sl_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Somali (sample file)" href="MultiParaCrawl/v8/si-so_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Swedish (sample file)" href="MultiParaCrawl/v8/si-sv_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Swahili (sample file)" href="MultiParaCrawl/v8/si-sw_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Tagalog (sample file)" href="MultiParaCrawl/v8/si-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/si.zip">si</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/sk.zip">sk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' (2.6M links, 99.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Czech' (5.0M links, 162.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Danish' (3.6M links, 131.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-German' (5.4M links, 187.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Greek' (3.5M links, 125.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Spanish' (5.0M links, 185.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' (2.0M links, 69.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' (2.6M links, 87.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-French' (4.8M links, 189.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Irish' (0.3M links, 13.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' (2.0M links, 66.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hungarian' (2.6M links, 93.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' (0.9M links, 28.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Italian' (4.3M links, 164.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Central Khmer' (1.4k links, 39.2k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Korean' (0.1M links, 3.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-sk.xml.gz">ces</a></td>
<th>sk</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' (2.4M links, 84.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' (2.6M links, 92.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Maltese' (0.7M links, 29.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Burmese' (0.6k links, 17.8k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Nepali' (6.4k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Dutch' (3.7M links, 136.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Norwegian' (3.7M links, 121.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Polish' (4.2M links, 143.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Pushto' (3.2k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ps-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (4.1M links, 153.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Romanian' (2.9M links, 111.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ro-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Russian' (0.1M links, 3.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ru-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Sinhala' (9.6k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/si-sk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="MultiParaCrawl/v8/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Somali (sample file)" href="MultiParaCrawl/v8/sk-so_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swedish (sample file)" href="MultiParaCrawl/v8/sk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swahili (sample file)" href="MultiParaCrawl/v8/sk-sw_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Tagalog (sample file)" href="MultiParaCrawl/v8/sk-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/sk.zip">sk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/sl.zip">sl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (1.9M links, 76.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' (2.5M links, 93.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Danish' (2.2M links, 89.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-German' (3.1M links, 124.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' (2.0M links, 83.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Spanish' (3.1M links, 127.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (1.7M links, 63.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' (1.6M links, 58.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (3.0M links, 133.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Irish' (0.3M links, 12.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (1.5M links, 51.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hungarian' (1.6M links, 65.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (0.6M links, 20.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Italian' (2.8M links, 118.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Central Khmer' (1.2k links, 35.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Korean' (88.6k links, 2.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-sl.xml.gz">ces</a></td>
<th>sl</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (1.6M links, 63.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (1.7M links, 69.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Maltese' (0.6M links, 27.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Burmese' (0.4k links, 13.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Nepali' (5.6k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Dutch' (2.3M links, 98.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Norwegian' (2.1M links, 77.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Polish' (2.5M links, 93.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Pushto' (2.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ps-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (2.6M links, 107.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Romanian' (2.0M links, 82.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ro-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Russian' (65.5k links, 2.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ru-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Sinhala' (8.0k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/si-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' (2.5M links, 95.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Somali (sample file)" href="MultiParaCrawl/v8/sl-so_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swedish (sample file)" href="MultiParaCrawl/v8/sl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swahili (sample file)" href="MultiParaCrawl/v8/sl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Tagalog (sample file)" href="MultiParaCrawl/v8/sl-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/sl.zip">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/so.zip">so</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Bulgarian' (0.6k links, 35.9k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-so.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Czech' (2.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Danish' (2.5k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-German' (4.8k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Greek' (1.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Spanish' (5.8k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Estonian' (1.2k links, 58.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-so.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Finnish' (2.4k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-French' (5.3k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Irish' (0.9k links, 49.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-so.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Croatian' (0.3k links, 14.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Hungarian' (0.9k links, 47.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Icelandic' (4.2k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Italian' (3.2k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Central Khmer' (0.2k links, 12.5k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Korean' (0.8k links, 45.2k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-so.xml.gz">ces</a></td>
<th>so</th>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Lithuanian' (0.9k links, 46.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Latvian' (1.1k links, 54.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Maltese' (1.0k links, 49.7k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Burmese' (52 links, 2.8k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Nepali' (0.4k links, 28.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Dutch' (3.7k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Norwegian' (3.8k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Polish' (1.1k links, 57.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Pushto' (64 links, 3.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ps-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Portuguese' (4.0k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pt-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Romanian' (1.4k links, 86.8k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ro-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Russian' (1.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ru-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Sinhala' (0.4k links, 23.0k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/si-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Slovak' (1.0k links, 48.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sk-so.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-Slovenian' (0.8k links, 41.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sl-so.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Somali-Swedish (sample file)" href="MultiParaCrawl/v8/so-sv_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Swahili (sample file)" href="MultiParaCrawl/v8/so-sw_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Tagalog (sample file)" href="MultiParaCrawl/v8/so-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/so.zip">so</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/sv.zip">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bulgarian' (2.5M links, 98.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Czech' (6.2M links, 206.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (10.5M links, 360.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (13.1M links, 436.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Greek' (6.2M links, 214.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (14.9M links, 529.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Estonian' (2.4M links, 82.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (4.8M links, 160.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (12.2M links, 472.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Irish' (0.4M links, 15.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Croatian' (2.1M links, 68.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hungarian' (2.9M links, 101.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Icelandic' (1.1M links, 34.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (10.4M links, 390.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Central Khmer' (1.4k links, 41.0k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Korean' (0.4M links, 10.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-sv.xml.gz">ces</a></td>
<th>sv</th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Lithuanian' (2.4M links, 85.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Latvian' (2.4M links, 88.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Maltese' (0.7M links, 28.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Burmese' (0.4k links, 14.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Nepali' (6.5k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (11.0M links, 383.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Norwegian' (10.7M links, 347.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Polish' (7.8M links, 257.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Pushto' (3.0k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ps-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (10.3M links, 375.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Romanian' (3.2M links, 124.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ro-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Russian' (0.3M links, 9.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ru-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Sinhala' (11.1k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/si-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovak' (3.7M links, 130.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovenian' (2.2M links, 88.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Somali' (2.0k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/so-sv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swedish-Swahili (sample file)" href="MultiParaCrawl/v8/sv-sw_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Tagalog (sample file)" href="MultiParaCrawl/v8/sv-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/sv.zip">sv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/sw.zip">sw</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Bulgarian' (15.5k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Czech' (19.5k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Danish' (23.2k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-German' (31.9k links, 1.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Greek' (23.9k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Spanish' (42.8k links, 2.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Estonian' (15.5k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Finnish' (19.3k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-French' (39.5k links, 2.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Irish' (9.1k links, 0.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Croatian' (12.5k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Hungarian' (14.1k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Icelandic' (23.3k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Italian' (30.9k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Central Khmer' (0.9k links, 47.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Korean' (7.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-sw.xml.gz">ces</a></td>
<th>sw</th>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Lithuanian' (15.9k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Latvian' (15.1k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Maltese' (12.5k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Burmese' (0.4k links, 23.4k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Nepali' (2.3k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Dutch' (29.1k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Norwegian' (24.3k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Polish' (16.7k links, 0.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Pushto' (0.7k links, 33.3k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ps-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Portuguese' (34.1k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Romanian' (18.3k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ro-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Russian' (20.0k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ru-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Sinhala' (5.3k links, 0.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/si-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovak' (14.9k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovenian' (12.8k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Somali' (1.7k links, 0.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/so-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Swedish' (18.5k links, 0.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sv-sw.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swahili-Tagalog (sample file)" href="MultiParaCrawl/v8/sw-tl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/sw.zip">sw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/xml/tl.zip">tl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Bulgarian' (56.1k links, 3.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/bg-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Czech' (59.3k links, 3.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/cs-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Danish' (66.5k links, 3.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/da-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-German' (82.1k links, 4.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/de-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Greek' (29.0k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/el-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Spanish' (0.1M links, 5.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/es-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Estonian' (56.4k links, 2.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/et-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Finnish' (62.6k links, 3.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fi-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-French' (82.6k links, 4.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/fr-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Irish' (9.8k links, 0.5M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ga-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Croatian' (27.7k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hr-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Hungarian' (17.9k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/hu-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Icelandic' (24.5k links, 1.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/is-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Italian' (42.5k links, 2.3M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/it-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Central Khmer' (0.6k links, 27.8k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/km-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Korean' (37.5k links, 1.8M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ko-tl.xml.gz">ces</a></td>
<th>tl</th>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Lithuanian' (17.4k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lt-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Latvian' (18.5k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/lv-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Maltese' (12.9k links, 0.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/mt-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Burmese' (0.3k links, 18.1k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/my-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Nepali' (1.4k links, 86.8k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ne-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Dutch' (35.6k links, 2.0M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/nl-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Norwegian' (30.1k links, 1.6M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/no-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Polish' (22.7k links, 1.1M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pl-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Pushto' (0.4k links, 20.5k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ps-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Portuguese' (55.6k links, 2.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/pt-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Romanian' (22.6k links, 1.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ro-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Russian' (25.9k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/ru-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Sinhala' (3.7k links, 0.2M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/si-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Slovak' (17.9k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sk-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Slovenian' (17.7k links, 0.9M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sl-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Somali' (0.1k links, 7.2k tokens)" href="download.php?f=MultiParaCrawl/v8/xml/so-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Swedish' (27.9k links, 1.4M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sv-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Swahili' (28.3k links, 1.7M tokens)" href="download.php?f=MultiParaCrawl/v8/xml/sw-tl.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=MultiParaCrawl/v8/raw/tl.zip">tl</a></th></tr>
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
<th></th>
<th>lt</th>
<th>lv</th>
<th>mt</th>
<th>my</th>
<th>ne</th>
<th>nl</th>
<th>no</th>
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
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=MultiParaCrawl/v8/mono/bg.tok.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=MultiParaCrawl/v8/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=MultiParaCrawl/v8/mono/cs.tok.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized da plain text' href="download.php?f=MultiParaCrawl/v8/mono/da.tok.gz">da</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=MultiParaCrawl/v8/mono/de.tok.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=MultiParaCrawl/v8/mono/el.tok.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=MultiParaCrawl/v8/mono/es.tok.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=MultiParaCrawl/v8/mono/et.tok.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=MultiParaCrawl/v8/mono/eu.tok.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=MultiParaCrawl/v8/mono/fi.tok.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=MultiParaCrawl/v8/mono/fr.tok.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized ga plain text' href="download.php?f=MultiParaCrawl/v8/mono/ga.tok.gz">ga</a>
</th><th><a rel="nofollow" title='monolingual tokenized gl plain text' href="download.php?f=MultiParaCrawl/v8/mono/gl.tok.gz">gl</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=MultiParaCrawl/v8/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hu plain text' href="download.php?f=MultiParaCrawl/v8/mono/hu.tok.gz">hu</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=MultiParaCrawl/v8/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=MultiParaCrawl/v8/mono/it.tok.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized km plain text' href="download.php?f=MultiParaCrawl/v8/mono/km.tok.gz">km</a>
</th><th><a rel="nofollow" title='monolingual tokenized ko plain text' href="download.php?f=MultiParaCrawl/v8/mono/ko.tok.gz">ko</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=MultiParaCrawl/v8/mono/lt.tok.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=MultiParaCrawl/v8/mono/lv.tok.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=MultiParaCrawl/v8/mono/mt.tok.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized my plain text' href="download.php?f=MultiParaCrawl/v8/mono/my.tok.gz">my</a>
</th><th><a rel="nofollow" title='monolingual tokenized ne plain text' href="download.php?f=MultiParaCrawl/v8/mono/ne.tok.gz">ne</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=MultiParaCrawl/v8/mono/nl.tok.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized no plain text' href="download.php?f=MultiParaCrawl/v8/mono/no.tok.gz">no</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=MultiParaCrawl/v8/mono/pl.tok.gz">pl</a>
</th><th><a rel="nofollow" title='monolingual tokenized ps plain text' href="download.php?f=MultiParaCrawl/v8/mono/ps.tok.gz">ps</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=MultiParaCrawl/v8/mono/pt.tok.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=MultiParaCrawl/v8/mono/ro.tok.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=MultiParaCrawl/v8/mono/ru.tok.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized si plain text' href="download.php?f=MultiParaCrawl/v8/mono/si.tok.gz">si</a>
</th><th><a rel="nofollow" title='monolingual tokenized sk plain text' href="download.php?f=MultiParaCrawl/v8/mono/sk.tok.gz">sk</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=MultiParaCrawl/v8/mono/sl.tok.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized so plain text' href="download.php?f=MultiParaCrawl/v8/mono/so.tok.gz">so</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=MultiParaCrawl/v8/mono/sv.tok.gz">sv</a>
</th><th><a rel="nofollow" title='monolingual tokenized sw plain text' href="download.php?f=MultiParaCrawl/v8/mono/sw.tok.gz">sw</a>
</th><th><a rel="nofollow" title='monolingual tokenized tl plain text' href="download.php?f=MultiParaCrawl/v8/mono/tl.tok.gz">tl</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=MultiParaCrawl/v8/mono/bg.txt.gz">bg</a>
</th><td>1</td> <td>200.7M</td> <td>10.4M</td><td></td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Bulgarian-Czech (2,898,619 sentence pairs, 92.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-cs.tmx.gz">2.9M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Danish (2,756,237 sentence pairs, 95.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-da.tmx.gz">2.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-German (4,251,663 sentence pairs, 145.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-de.tmx.gz">4.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Greek (2,752,220 sentence pairs, 97.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-el.tmx.gz">2.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Spanish (4,361,643 sentence pairs, 156.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-es.tmx.gz">4.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Bulgarian-Estonian (1,734,875 sentence pairs, 57.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-et.tmx.gz">1.7M</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Finnish (2,088,317 sentence pairs, 67.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-fi.tmx.gz">2.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-French (4,232,013 sentence pairs, 157.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-fr.tmx.gz">4.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bulgarian-Irish (289,637 sentence pairs, 11.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Bulgarian-Croatian (1,639,567 sentence pairs, 51.62M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-hr.tmx.gz">1.6M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Hungarian (2,096,923 sentence pairs, 69.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-hu.tmx.gz">2.1M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Bulgarian-Icelandic (549,316 sentence pairs, 18.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-is.tmx.gz">0.5M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Bulgarian-Italian (3,234,306 sentence pairs, 115.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-it.tmx.gz">3.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bulgarian-Central Khmer (1,290 sentence pairs, 23.04k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-km.tmx.gz">1.3k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bulgarian-Korean (172,996 sentence pairs, 5.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Bulgarian-Lithuanian (1,937,309 sentence pairs, 63.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-lt.tmx.gz">1.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Latvian (2,000,666 sentence pairs, 67.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-lv.tmx.gz">2.0M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Bulgarian-Maltese (550,233 sentence pairs, 21.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-mt.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bulgarian-Burmese (576 sentence pairs, 10.72k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-my.tmx.gz">0.6k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Bulgarian-Nepali (4,169 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-ne.tmx.gz">4.2k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Bulgarian-Dutch (3,029,022 sentence pairs, 108.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-nl.tmx.gz">3.0M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Bulgarian-Norwegian (2,654,509 sentence pairs, 85.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-no.tmx.gz">2.7M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Polish (2,945,557 sentence pairs, 96.85M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-pl.tmx.gz">2.9M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Bulgarian-Pushto (3,273 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-ps.tmx.gz">3.3k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Bulgarian-Portuguese (3,590,418 sentence pairs, 128.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-pt.tmx.gz">3.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Romanian (2,669,896 sentence pairs, 98.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-ro.tmx.gz">2.7M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Bulgarian-Russian (129,241 sentence pairs, 4.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Bulgarian-Sinhala (9,462 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-si.tmx.gz">9.5k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Bulgarian-Slovak (2,621,126 sentence pairs, 86.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-sk.tmx.gz">2.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Bulgarian-Slovenian (1,891,262 sentence pairs, 66.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-sl.tmx.gz">1.9M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bulgarian-Somali (616 sentence pairs, 30.16k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-so.tmx.gz">0.6k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Bulgarian-Swedish (2,528,636 sentence pairs, 85.88M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-sv.tmx.gz">2.5M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Bulgarian-Swahili (15,461 sentence pairs, 0.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-sw.tmx.gz">15.5k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Bulgarian-Tagalog (56,076 sentence pairs, 2.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/bg-tl.tmx.gz">56.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=MultiParaCrawl/v8/mono/ca.txt.gz">ca</a>
</th><td>1</td> <td>627.4M</td> <td>31.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Catalan-Spanish (53,521,548 sentence pairs, 1.75G words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ca-es.tmx.gz">53.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=MultiParaCrawl/v8/mono/cs.txt.gz">cs</a>
</th><td>1</td> <td>475.5M</td> <td>31.8M</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Czech-Bulgarian (2,898,619 sentence pairs, 92.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-cs.txt.zip">2.9M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Danish (6,515,391 sentence pairs, 195.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-da.tmx.gz">6.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-German (12,055,811 sentence pairs, 334.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-de.tmx.gz">12.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Greek (5,743,356 sentence pairs, 176.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-el.tmx.gz">5.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Spanish (13,102,317 sentence pairs, 381.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-es.tmx.gz">13.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Estonian (2,665,114 sentence pairs, 76.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-et.tmx.gz">2.7M</a>
</td><td></td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Czech-Finnish (3,538,350 sentence pairs, 100.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-fi.tmx.gz">3.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-French (10,755,044 sentence pairs, 335.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-fr.tmx.gz">10.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Czech-Irish (317,448 sentence pairs, 11.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Czech-Croatian (2,575,450 sentence pairs, 71.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-hr.tmx.gz">2.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Czech-Hungarian (3,526,955 sentence pairs, 98.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-hu.tmx.gz">3.5M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Czech-Icelandic (1,271,936 sentence pairs, 33.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-is.tmx.gz">1.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Italian (8,437,837 sentence pairs, 256.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-it.tmx.gz">8.4M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Czech-Central Khmer (1,679 sentence pairs, 28.73k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-km.tmx.gz">1.7k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Czech-Korean (414,122 sentence pairs, 10.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-ko.tmx.gz">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Czech-Lithuanian (2,599,222 sentence pairs, 75.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-lt.tmx.gz">2.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Latvian (2,611,866 sentence pairs, 78.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-lv.tmx.gz">2.6M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Czech-Maltese (679,957 sentence pairs, 24.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Czech-Burmese (502 sentence pairs, 8.20k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-my.tmx.gz">0.5k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Czech-Nepali (4,418 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-ne.tmx.gz">4.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Dutch (8,175,338 sentence pairs, 242.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-nl.tmx.gz">8.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Norwegian (7,417,441 sentence pairs, 199.07M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-no.tmx.gz">7.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Polish (6,687,979 sentence pairs, 187.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-pl.tmx.gz">6.7M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Czech-Pushto (2,097 sentence pairs, 61.41k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-ps.tmx.gz">2.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Portuguese (8,248,492 sentence pairs, 246.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-pt.tmx.gz">8.2M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Czech-Romanian (3,538,345 sentence pairs, 113.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-ro.tmx.gz">3.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Czech-Russian (242,404 sentence pairs, 6.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Czech-Sinhala (13,900 sentence pairs, 0.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-si.tmx.gz">13.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Slovak (4,968,342 sentence pairs, 139.87M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-sk.tmx.gz">5.0M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Slovenian (2,521,455 sentence pairs, 80.81M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-sl.tmx.gz">2.5M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Czech-Somali (2,798 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-so.tmx.gz">2.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Swedish (6,225,612 sentence pairs, 179.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-sv.tmx.gz">6.2M</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Czech-Swahili (19,455 sentence pairs, 0.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-sw.tmx.gz">19.5k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Czech-Tagalog (59,309 sentence pairs, 2.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/cs-tl.tmx.gz">59.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized da plain text' href="download.php?f=MultiParaCrawl/v8/mono/da.txt.gz">da</a>
</th><td>1</td> <td>448.4M</td> <td>26.9M</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Danish-Bulgarian (2,756,237 sentence pairs, 95.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-da.txt.zip">2.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Czech (6,515,391 sentence pairs, 195.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-da.txt.zip">6.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-German (12,873,509 sentence pairs, 381.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-de.tmx.gz">12.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Greek (6,539,631 sentence pairs, 199.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-el.tmx.gz">6.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Spanish (14,552,525 sentence pairs, 459.80M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-es.tmx.gz">14.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Danish-Estonian (2,530,541 sentence pairs, 79.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-et.tmx.gz">2.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Finnish (4,593,460 sentence pairs, 137.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-fi.tmx.gz">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-French (11,461,015 sentence pairs, 388.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-fr.tmx.gz">11.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Danish-Irish (414,456 sentence pairs, 15.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-ga.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Croatian (2,057,721 sentence pairs, 63.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-hr.tmx.gz">2.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Danish-Hungarian (3,067,750 sentence pairs, 94.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-hu.tmx.gz">3.1M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Danish-Icelandic (1,149,087 sentence pairs, 34.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-is.tmx.gz">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Italian (9,940,401 sentence pairs, 324.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-it.tmx.gz">9.9M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Danish-Central Khmer (1,577 sentence pairs, 29.64k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-km.tmx.gz">1.6k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Danish-Korean (423,584 sentence pairs, 12.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-ko.tmx.gz">0.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Danish-Lithuanian (2,495,028 sentence pairs, 78.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-lt.tmx.gz">2.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Danish-Latvian (2,616,233 sentence pairs, 83.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-lv.tmx.gz">2.6M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Danish-Maltese (689,323 sentence pairs, 25.73M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Burmese (508 sentence pairs, 10.19k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-my.tmx.gz">0.5k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Danish-Nepali (7,158 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-ne.tmx.gz">7.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Dutch (10,928,584 sentence pairs, 344.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-nl.tmx.gz">10.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Norwegian (11,484,302 sentence pairs, 330.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-no.tmx.gz">11.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Polish (7,709,555 sentence pairs, 223.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-pl.tmx.gz">7.7M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Danish-Pushto (3,616 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-ps.tmx.gz">3.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Portuguese (10,109,460 sentence pairs, 323.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-pt.tmx.gz">10.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Danish-Romanian (3,237,594 sentence pairs, 112.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-ro.tmx.gz">3.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Danish-Russian (224,349 sentence pairs, 7.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Danish-Sinhala (13,286 sentence pairs, 0.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-si.tmx.gz">13.3k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Danish-Slovak (3,645,187 sentence pairs, 113.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-sk.tmx.gz">3.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Danish-Slovenian (2,227,155 sentence pairs, 77.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-sl.tmx.gz">2.2M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Danish-Somali (2,480 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-so.tmx.gz">2.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Swedish (10,505,003 sentence pairs, 315.30M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-sv.tmx.gz">10.5M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Danish-Swahili (23,205 sentence pairs, 0.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-sw.tmx.gz">23.2k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Danish-Tagalog (66,479 sentence pairs, 3.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/da-tl.tmx.gz">66.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=MultiParaCrawl/v8/mono/de.txt.gz">de</a>
</th><td>1</td> <td>3.1G</td> <td>182.1M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Bulgarian (4,251,663 sentence pairs, 145.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-de.txt.zip">4.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Czech (12,055,811 sentence pairs, 334.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-de.txt.zip">12.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Danish (12,873,509 sentence pairs, 381.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-de.txt.zip">12.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Greek (9,075,567 sentence pairs, 278.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-el.tmx.gz">9.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Spanish (49,600,318 sentence pairs, 1.54G words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-es.tmx.gz">49.6M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='German-Estonian (3,024,673 sentence pairs, 93.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-et.tmx.gz">3.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Finnish (5,424,062 sentence pairs, 160.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-fi.tmx.gz">5.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-French (47,880,278 sentence pairs, 1.59G words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-fr.tmx.gz">47.9M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='German-Irish (473,093 sentence pairs, 17.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-ga.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='German-Croatian (3,374,177 sentence pairs, 98.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-hr.tmx.gz">3.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Hungarian (4,813,143 sentence pairs, 147.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-hu.tmx.gz">4.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='German-Icelandic (1,557,991 sentence pairs, 44.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-is.tmx.gz">1.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Italian (31,754,844 sentence pairs, 1.03G words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-it.tmx.gz">31.8M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='German-Central Khmer (2,123 sentence pairs, 36.78k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-km.tmx.gz">2.1k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='German-Korean (764,962 sentence pairs, 21.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-ko.tmx.gz">0.8M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='German-Lithuanian (3,052,537 sentence pairs, 92.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-lt.tmx.gz">3.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='German-Latvian (3,067,190 sentence pairs, 96.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-lv.tmx.gz">3.1M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='German-Maltese (745,004 sentence pairs, 27.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Burmese (729 sentence pairs, 13.07k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-my.tmx.gz">0.7k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='German-Nepali (9,041 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-ne.tmx.gz">9.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Dutch (24,427,898 sentence pairs, 717.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-nl.tmx.gz">24.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Norwegian (13,261,076 sentence pairs, 365.09M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-no.tmx.gz">13.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Polish (13,914,817 sentence pairs, 403.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-pl.tmx.gz">13.9M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='German-Pushto (3,877 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-ps.tmx.gz">3.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Portuguese (24,252,042 sentence pairs, 764.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-pt.tmx.gz">24.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Romanian (4,849,492 sentence pairs, 165.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-ro.tmx.gz">4.8M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='German-Russian (674,577 sentence pairs, 20.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-ru.tmx.gz">0.7M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='German-Sinhala (19,803 sentence pairs, 0.62M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-si.tmx.gz">19.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Slovak (5,374,751 sentence pairs, 162.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-sk.tmx.gz">5.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='German-Slovenian (3,145,456 sentence pairs, 107.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-sl.tmx.gz">3.1M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='German-Somali (4,848 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-so.tmx.gz">4.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Swedish (13,104,959 sentence pairs, 380.97M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-sv.tmx.gz">13.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='German-Swahili (31,918 sentence pairs, 1.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-sw.tmx.gz">31.9k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='German-Tagalog (82,123 sentence pairs, 3.88M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/de-tl.tmx.gz">82.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=MultiParaCrawl/v8/mono/el.txt.gz">el</a>
</th><td>1</td> <td>394.4M</td> <td>21.7M</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Greek-Bulgarian (2,752,220 sentence pairs, 97.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-el.txt.zip">2.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Czech (5,743,356 sentence pairs, 176.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-el.txt.zip">5.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Danish (6,539,631 sentence pairs, 199.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-el.txt.zip">6.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-German (9,075,567 sentence pairs, 278.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-el.txt.zip">9.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Spanish (10,673,958 sentence pairs, 330.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-es.tmx.gz">10.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Greek-Estonian (2,289,068 sentence pairs, 74.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-et.tmx.gz">2.3M</a>
</td><td></td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Greek-Finnish (3,228,084 sentence pairs, 101.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-fi.tmx.gz">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-French (8,636,951 sentence pairs, 291.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-fr.tmx.gz">8.6M</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Greek-Irish (343,535 sentence pairs, 13.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-Croatian (2,009,460 sentence pairs, 63.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-hr.tmx.gz">2.0M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Greek-Hungarian (3,028,020 sentence pairs, 95.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-hu.tmx.gz">3.0M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Greek-Icelandic (995,735 sentence pairs, 30.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-is.tmx.gz">1.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Italian (7,985,788 sentence pairs, 262.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-it.tmx.gz">8.0M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Greek-Central Khmer (1,716 sentence pairs, 31.13k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-km.tmx.gz">1.7k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Greek-Korean (290,717 sentence pairs, 7.79M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-ko.tmx.gz">0.3M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Greek-Lithuanian (2,465,366 sentence pairs, 80.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-lt.tmx.gz">2.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Greek-Latvian (2,478,378 sentence pairs, 82.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-lv.tmx.gz">2.5M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Greek-Maltese (659,428 sentence pairs, 26.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Greek-Burmese (699 sentence pairs, 13.82k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-my.tmx.gz">0.7k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Greek-Nepali (5,779 sentence pairs, 0.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-ne.tmx.gz">5.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Dutch (7,543,978 sentence pairs, 238.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-nl.tmx.gz">7.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Norwegian (6,540,193 sentence pairs, 186.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-no.tmx.gz">6.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Polish (6,225,700 sentence pairs, 179.58M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-pl.tmx.gz">6.2M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Greek-Pushto (4,105 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-ps.tmx.gz">4.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Portuguese (7,983,534 sentence pairs, 255.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-pt.tmx.gz">8.0M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Greek-Romanian (3,118,016 sentence pairs, 112.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-ro.tmx.gz">3.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Greek-Russian (256,400 sentence pairs, 8.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Greek-Sinhala (14,084 sentence pairs, 0.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-si.tmx.gz">14.1k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Greek-Slovak (3,450,605 sentence pairs, 109.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-sk.tmx.gz">3.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Greek-Slovenian (2,022,185 sentence pairs, 73.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-sl.tmx.gz">2.0M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Greek-Somali (1,712 sentence pairs, 91.25k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-so.tmx.gz">1.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Swedish (6,193,160 sentence pairs, 188.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-sv.tmx.gz">6.2M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Greek-Swahili (23,854 sentence pairs, 0.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-sw.tmx.gz">23.9k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Greek-Tagalog (29,047 sentence pairs, 1.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/el-tl.tmx.gz">29.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=MultiParaCrawl/v8/mono/es.txt.gz">es</a>
</th><td>1</td> <td>5.0G</td> <td>264.6M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Bulgarian (4,361,643 sentence pairs, 156.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-es.txt.zip">4.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Catalan (53,521,548 sentence pairs, 1.75G words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ca-es.txt.zip">53.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Czech (13,102,317 sentence pairs, 381.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-es.txt.zip">13.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Danish (14,552,525 sentence pairs, 459.80M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-es.txt.zip">14.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-German (49,600,318 sentence pairs, 1.54G words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-es.txt.zip">49.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Greek (10,673,958 sentence pairs, 330.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-es.txt.zip">10.7M</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Spanish-Estonian (3,340,614 sentence pairs, 109.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-et.tmx.gz">3.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Spanish-Basque (2,410,847 sentence pairs, 70.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-eu.tmx.gz">2.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Finnish (5,573,357 sentence pairs, 176.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-fi.tmx.gz">5.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-French (57,110,571 sentence pairs, 2.09G words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-fr.tmx.gz">57.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Spanish-Irish (473,535 sentence pairs, 19.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-ga.tmx.gz">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Galician (12,448,734 sentence pairs, 271.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-gl.tmx.gz">12.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Spanish-Croatian (3,229,393 sentence pairs, 97.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-hr.tmx.gz">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Hungarian (4,744,278 sentence pairs, 152.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-hu.tmx.gz">4.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Spanish-Icelandic (1,644,364 sentence pairs, 50.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-is.tmx.gz">1.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Italian (37,517,295 sentence pairs, 1.31G words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-it.tmx.gz">37.5M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Spanish-Central Khmer (2,905 sentence pairs, 57.17k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-km.tmx.gz">2.9k</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Spanish-Korean (984,391 sentence pairs, 29.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-ko.tmx.gz">1.0M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Spanish-Lithuanian (3,205,469 sentence pairs, 102.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-lt.tmx.gz">3.2M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Spanish-Latvian (3,131,174 sentence pairs, 104.09M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-lv.tmx.gz">3.1M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Spanish-Maltese (829,996 sentence pairs, 34.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-mt.tmx.gz">0.8M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Burmese (1,029 sentence pairs, 19.68k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-my.tmx.gz">1.0k</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Spanish-Nepali (10,267 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-ne.tmx.gz">10.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Dutch (24,698,241 sentence pairs, 786.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-nl.tmx.gz">24.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Norwegian (16,921,197 sentence pairs, 476.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-no.tmx.gz">16.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Polish (15,415,923 sentence pairs, 462.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-pl.tmx.gz">15.4M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Spanish-Pushto (4,967 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-ps.tmx.gz">5.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Portuguese (37,276,777 sentence pairs, 1.28G words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-pt.tmx.gz">37.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Romanian (5,396,070 sentence pairs, 191.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-ro.tmx.gz">5.4M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Spanish-Russian (868,256 sentence pairs, 28.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-ru.tmx.gz">0.9M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Spanish-Sinhala (24,620 sentence pairs, 0.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-si.tmx.gz">24.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Slovak (5,041,949 sentence pairs, 162.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-sk.tmx.gz">5.0M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Spanish-Slovenian (3,103,206 sentence pairs, 111.89M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-sl.tmx.gz">3.1M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Spanish-Somali (5,801 sentence pairs, 0.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-so.tmx.gz">5.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Swedish (14,862,362 sentence pairs, 465.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-sv.tmx.gz">14.9M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Spanish-Swahili (42,820 sentence pairs, 1.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-sw.tmx.gz">42.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Spanish-Tagalog (109,580 sentence pairs, 5.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/es-tl.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=MultiParaCrawl/v8/mono/et.txt.gz">et</a>
</th><td>1</td> <td>101.3M</td> <td>6.7M</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Estonian-Bulgarian (1,734,875 sentence pairs, 57.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-et.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Estonian-Czech (2,665,114 sentence pairs, 76.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-et.txt.zip">2.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Estonian-Danish (2,530,541 sentence pairs, 79.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-et.txt.zip">2.5M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Estonian-German (3,024,673 sentence pairs, 93.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-et.txt.zip">3.0M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Estonian-Greek (2,289,068 sentence pairs, 74.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-et.txt.zip">2.3M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Estonian-Spanish (3,340,614 sentence pairs, 109.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-et.txt.zip">3.3M</a>
</td><td></td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Finnish (1,969,937 sentence pairs, 56.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-fi.tmx.gz">2.0M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Estonian-French (3,008,147 sentence pairs, 103.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-fr.tmx.gz">3.0M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Estonian-Irish (312,649 sentence pairs, 10.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Estonian-Croatian (1,131,349 sentence pairs, 32.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-hr.tmx.gz">1.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Hungarian (1,698,958 sentence pairs, 52.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-hu.tmx.gz">1.7M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Estonian-Icelandic (788,983 sentence pairs, 20.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-is.tmx.gz">0.8M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Estonian-Italian (2,692,734 sentence pairs, 89.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-it.tmx.gz">2.7M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Estonian-Central Khmer (1,475 sentence pairs, 23.59k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-km.tmx.gz">1.5k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Estonian-Korean (143,490 sentence pairs, 3.87M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-ko.tmx.gz">0.1M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Estonian-Lithuanian (1,958,983 sentence pairs, 57.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-lt.tmx.gz">2.0M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Estonian-Latvian (1,989,842 sentence pairs, 60.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-lv.tmx.gz">2.0M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Estonian-Maltese (652,725 sentence pairs, 21.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Estonian-Burmese (502 sentence pairs, 9.08k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-my.tmx.gz">0.5k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Estonian-Nepali (6,759 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-ne.tmx.gz">6.8k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Estonian-Dutch (2,411,641 sentence pairs, 79.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-nl.tmx.gz">2.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Estonian-Norwegian (2,388,629 sentence pairs, 67.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-no.tmx.gz">2.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Estonian-Polish (2,190,828 sentence pairs, 66.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-pl.tmx.gz">2.2M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Estonian-Pushto (3,337 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-ps.tmx.gz">3.3k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Estonian-Portuguese (2,513,718 sentence pairs, 84.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-pt.tmx.gz">2.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Estonian-Romanian (1,719,350 sentence pairs, 59.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-ro.tmx.gz">1.7M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Estonian-Russian (114,202 sentence pairs, 3.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Estonian-Sinhala (9,876 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-si.tmx.gz">9.9k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Estonian-Slovak (1,984,242 sentence pairs, 59.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-sk.tmx.gz">2.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Slovenian (1,720,231 sentence pairs, 54.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-sl.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Estonian-Somali (1,201 sentence pairs, 49.07k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-so.tmx.gz">1.2k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Estonian-Swedish (2,364,728 sentence pairs, 72.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-sv.tmx.gz">2.4M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Estonian-Swahili (15,465 sentence pairs, 0.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-sw.tmx.gz">15.5k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Estonian-Tagalog (56,362 sentence pairs, 2.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/et-tl.tmx.gz">56.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=MultiParaCrawl/v8/mono/eu.txt.gz">eu</a>
</th><td>1</td> <td>31.5M</td> <td>2.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Basque-Spanish (2,410,847 sentence pairs, 70.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-eu.txt.zip">2.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=MultiParaCrawl/v8/mono/fi.txt.gz">fi</a>
</th><td>1</td> <td>175.2M</td> <td>12.1M</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Finnish-Bulgarian (2,088,317 sentence pairs, 67.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-fi.txt.zip">2.1M</a>
</td><td></td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Finnish-Czech (3,538,350 sentence pairs, 100.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-fi.txt.zip">3.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Danish (4,593,460 sentence pairs, 137.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-fi.txt.zip">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-German (5,424,062 sentence pairs, 160.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-fi.txt.zip">5.4M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Finnish-Greek (3,228,084 sentence pairs, 101.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-fi.txt.zip">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Spanish (5,573,357 sentence pairs, 176.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-fi.txt.zip">5.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-Estonian (1,969,937 sentence pairs, 56.98M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-fi.txt.zip">2.0M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-French (5,331,598 sentence pairs, 174.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-fr.tmx.gz">5.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Finnish-Irish (319,173 sentence pairs, 11.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-ga.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Finnish-Croatian (1,472,326 sentence pairs, 40.81M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-hr.tmx.gz">1.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Finnish-Hungarian (2,397,610 sentence pairs, 69.90M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-hu.tmx.gz">2.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Finnish-Icelandic (758,692 sentence pairs, 20.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-is.tmx.gz">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Italian (4,517,889 sentence pairs, 142.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-it.tmx.gz">4.5M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Finnish-Central Khmer (1,274 sentence pairs, 21.09k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-km.tmx.gz">1.3k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Finnish-Korean (244,251 sentence pairs, 6.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Finnish-Lithuanian (2,020,185 sentence pairs, 58.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-lt.tmx.gz">2.0M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Finnish-Latvian (2,102,036 sentence pairs, 60.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-lv.tmx.gz">2.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Finnish-Maltese (548,784 sentence pairs, 18.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Finnish-Burmese (494 sentence pairs, 8.98k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-my.tmx.gz">0.5k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Finnish-Nepali (5,575 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-ne.tmx.gz">5.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Dutch (4,609,972 sentence pairs, 143.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-nl.tmx.gz">4.6M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Finnish-Norwegian (4,388,464 sentence pairs, 123.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-no.tmx.gz">4.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Finnish-Polish (3,770,090 sentence pairs, 107.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-pl.tmx.gz">3.8M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Finnish-Pushto (2,672 sentence pairs, 88.36k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-ps.tmx.gz">2.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Portuguese (4,475,689 sentence pairs, 141.00M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-pt.tmx.gz">4.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Romanian (2,288,358 sentence pairs, 75.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-ro.tmx.gz">2.3M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Finnish-Russian (161,499 sentence pairs, 4.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Finnish-Sinhala (9,694 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-si.tmx.gz">9.7k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Slovak (2,581,665 sentence pairs, 74.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-sk.tmx.gz">2.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Slovenian (1,590,093 sentence pairs, 50.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-sl.tmx.gz">1.6M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Finnish-Somali (2,437 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-so.tmx.gz">2.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Swedish (4,840,703 sentence pairs, 139.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-sv.tmx.gz">4.8M</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Finnish-Swahili (19,341 sentence pairs, 0.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-sw.tmx.gz">19.3k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Finnish-Tagalog (62,575 sentence pairs, 2.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fi-tl.tmx.gz">62.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=MultiParaCrawl/v8/mono/fr.txt.gz">fr</a>
</th><td>1</td> <td>4.5G</td> <td>199.1M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Bulgarian (4,232,013 sentence pairs, 157.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-fr.txt.zip">4.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Czech (10,755,044 sentence pairs, 335.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-fr.txt.zip">10.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Danish (11,461,015 sentence pairs, 388.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-fr.txt.zip">11.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-German (47,880,278 sentence pairs, 1.59G words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-fr.txt.zip">47.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Greek (8,636,951 sentence pairs, 291.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-fr.txt.zip">8.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Spanish (57,110,571 sentence pairs, 2.09G words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-fr.txt.zip">57.1M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='French-Estonian (3,008,147 sentence pairs, 103.98M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-fr.txt.zip">3.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Finnish (5,331,598 sentence pairs, 174.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-fr.txt.zip">5.3M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='French-Irish (472,011 sentence pairs, 19.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-ga.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='French-Croatian (3,066,792 sentence pairs, 98.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-hr.tmx.gz">3.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Hungarian (4,642,032 sentence pairs, 154.63M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-hu.tmx.gz">4.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='French-Icelandic (1,411,088 sentence pairs, 45.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-is.tmx.gz">1.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Italian (33,786,010 sentence pairs, 1.23G words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-it.tmx.gz">33.8M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='French-Central Khmer (2,282 sentence pairs, 44.79k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-km.tmx.gz">2.3k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='French-Korean (804,966 sentence pairs, 24.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-ko.tmx.gz">0.8M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='French-Lithuanian (3,075,650 sentence pairs, 103.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-lt.tmx.gz">3.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='French-Latvian (3,054,787 sentence pairs, 107.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-lv.tmx.gz">3.1M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='French-Maltese (746,321 sentence pairs, 31.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Burmese (788 sentence pairs, 16.17k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-my.tmx.gz">0.8k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='French-Nepali (7,272 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-ne.tmx.gz">7.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Dutch (23,016,749 sentence pairs, 771.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-nl.tmx.gz">23.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Norwegian (11,739,637 sentence pairs, 366.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-no.tmx.gz">11.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Polish (12,707,168 sentence pairs, 412.09M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-pl.tmx.gz">12.7M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='French-Pushto (4,077 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-ps.tmx.gz">4.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Portuguese (26,701,048 sentence pairs, 958.09M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-pt.tmx.gz">26.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Romanian (4,852,047 sentence pairs, 180.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-ro.tmx.gz">4.9M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='French-Russian (712,123 sentence pairs, 24.81M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-ru.tmx.gz">0.7M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='French-Sinhala (21,002 sentence pairs, 0.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-si.tmx.gz">21.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Slovak (4,778,601 sentence pairs, 162.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-sk.tmx.gz">4.8M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='French-Slovenian (3,003,475 sentence pairs, 113.83M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-sl.tmx.gz">3.0M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='French-Somali (5,290 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-so.tmx.gz">5.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Swedish (12,180,316 sentence pairs, 407.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-sv.tmx.gz">12.2M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='French-Swahili (39,453 sentence pairs, 1.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-sw.tmx.gz">39.5k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='French-Tagalog (82,564 sentence pairs, 4.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/fr-tl.tmx.gz">82.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ga plain text' href="download.php?f=MultiParaCrawl/v8/mono/ga.txt.gz">ga</a>
</th><td>1</td> <td>39.8M</td> <td>1.6M</td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Bulgarian (289,637 sentence pairs, 11.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-ga.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Czech (317,448 sentence pairs, 11.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-ga.txt.zip">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Irish-Danish (414,456 sentence pairs, 15.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-ga.txt.zip">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Irish-German (473,093 sentence pairs, 17.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-ga.txt.zip">0.5M</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Irish-Greek (343,535 sentence pairs, 13.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-ga.txt.zip">0.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Irish-Spanish (473,535 sentence pairs, 19.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-ga.txt.zip">0.5M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Irish-Estonian (312,649 sentence pairs, 10.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-ga.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Finnish (319,173 sentence pairs, 11.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-ga.txt.zip">0.3M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Irish-French (472,011 sentence pairs, 19.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-ga.txt.zip">0.5M</a>
</td><td></td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Irish-Croatian (256,529 sentence pairs, 8.97M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-hr.tmx.gz">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Irish-Hungarian (289,013 sentence pairs, 10.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Irish-Icelandic (249,140 sentence pairs, 8.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-is.tmx.gz">0.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Irish-Italian (431,426 sentence pairs, 16.79M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-it.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Irish-Central Khmer (960 sentence pairs, 19.37k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-km.tmx.gz">1.0k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Irish-Korean (15,575 sentence pairs, 0.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-ko.tmx.gz">15.6k</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Irish-Lithuanian (305,423 sentence pairs, 10.93M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Latvian (324,166 sentence pairs, 11.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-lv.tmx.gz">0.3M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Irish-Maltese (261,489 sentence pairs, 9.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Irish-Burmese (414 sentence pairs, 9.41k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-my.tmx.gz">0.4k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Irish-Nepali (4,237 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-ne.tmx.gz">4.2k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Irish-Dutch (388,233 sentence pairs, 15.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-nl.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Norwegian (378,289 sentence pairs, 12.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-no.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Polish (348,536 sentence pairs, 12.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-pl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Irish-Pushto (2,111 sentence pairs, 79.72k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-ps.tmx.gz">2.1k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Irish-Portuguese (403,274 sentence pairs, 15.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Romanian (282,354 sentence pairs, 11.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Irish-Russian (21,092 sentence pairs, 0.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-ru.tmx.gz">21.1k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Irish-Sinhala (5,285 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-si.tmx.gz">5.3k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Slovak (336,120 sentence pairs, 12.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Irish-Slovenian (281,894 sentence pairs, 10.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Irish-Somali (861 sentence pairs, 43.20k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-so.tmx.gz">0.9k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Irish-Swedish (357,949 sentence pairs, 13.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Irish-Swahili (9,091 sentence pairs, 0.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-sw.tmx.gz">9.1k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Irish-Tagalog (9,805 sentence pairs, 0.49M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ga-tl.tmx.gz">9.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gl plain text' href="download.php?f=MultiParaCrawl/v8/mono/gl.txt.gz">gl</a>
</th><td>1</td> <td>90.2M</td> <td>5.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Galician-Spanish (12,448,734 sentence pairs, 271.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-gl.txt.zip">12.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=MultiParaCrawl/v8/mono/hr.txt.gz">hr</a>
</th><td>1</td> <td>141.2M</td> <td>8.8M</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Croatian-Bulgarian (1,639,567 sentence pairs, 51.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-hr.txt.zip">1.6M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Croatian-Czech (2,575,450 sentence pairs, 71.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-hr.txt.zip">2.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Croatian-Danish (2,057,721 sentence pairs, 63.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-hr.txt.zip">2.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Croatian-German (3,374,177 sentence pairs, 98.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-hr.txt.zip">3.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Croatian-Greek (2,009,460 sentence pairs, 63.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-hr.txt.zip">2.0M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Croatian-Spanish (3,229,393 sentence pairs, 97.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-hr.txt.zip">3.2M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Croatian-Estonian (1,131,349 sentence pairs, 32.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-hr.txt.zip">1.1M</a>
</td><td></td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Croatian-Finnish (1,472,326 sentence pairs, 40.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-hr.txt.zip">1.5M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Croatian-French (3,066,792 sentence pairs, 98.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-hr.txt.zip">3.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Croatian-Irish (256,529 sentence pairs, 8.97M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-hr.txt.zip">0.3M</a>
</td><td></td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-Hungarian (1,464,999 sentence pairs, 43.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-hu.tmx.gz">1.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Croatian-Icelandic (657,412 sentence pairs, 17.34M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-is.tmx.gz">0.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Croatian-Italian (2,870,135 sentence pairs, 90.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-it.tmx.gz">2.9M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Croatian-Central Khmer (1,270 sentence pairs, 20.71k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-km.tmx.gz">1.3k</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Croatian-Korean (125,127 sentence pairs, 3.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-ko.tmx.gz">0.1M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Croatian-Lithuanian (1,359,305 sentence pairs, 38.98M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-lt.tmx.gz">1.4M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Croatian-Latvian (1,399,335 sentence pairs, 41.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-lv.tmx.gz">1.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Croatian-Maltese (374,680 sentence pairs, 12.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-mt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-Burmese (450 sentence pairs, 8.20k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-my.tmx.gz">0.5k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Croatian-Nepali (4,607 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-ne.tmx.gz">4.6k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Croatian-Dutch (2,260,347 sentence pairs, 68.86M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-nl.tmx.gz">2.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Croatian-Norwegian (2,740,310 sentence pairs, 73.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-no.tmx.gz">2.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Croatian-Polish (2,182,530 sentence pairs, 64.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-pl.tmx.gz">2.2M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Croatian-Pushto (2,581 sentence pairs, 79.22k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-ps.tmx.gz">2.6k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Croatian-Portuguese (2,408,561 sentence pairs, 75.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-pt.tmx.gz">2.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Croatian-Romanian (1,633,824 sentence pairs, 53.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-ro.tmx.gz">1.6M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Croatian-Russian (98,221 sentence pairs, 2.68M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-ru.tmx.gz">98.2k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Croatian-Sinhala (8,058 sentence pairs, 0.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-si.tmx.gz">8.1k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Croatian-Slovak (2,027,399 sentence pairs, 57.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-sk.tmx.gz">2.0M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-Slovenian (1,463,507 sentence pairs, 44.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-sl.tmx.gz">1.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-Somali (351 sentence pairs, 12.36k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-so.tmx.gz">0.4k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Croatian-Swedish (2,051,209 sentence pairs, 60.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-sv.tmx.gz">2.1M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Croatian-Swahili (12,544 sentence pairs, 0.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-sw.tmx.gz">12.5k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Croatian-Tagalog (27,674 sentence pairs, 1.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hr-tl.tmx.gz">27.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hu plain text' href="download.php?f=MultiParaCrawl/v8/mono/hu.txt.gz">hu</a>
</th><td>1</td> <td>170.7M</td> <td>10.6M</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Hungarian-Bulgarian (2,096,923 sentence pairs, 69.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-hu.txt.zip">2.1M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Hungarian-Czech (3,526,955 sentence pairs, 98.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-hu.txt.zip">3.5M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Hungarian-Danish (3,067,750 sentence pairs, 94.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-hu.txt.zip">3.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-German (4,813,143 sentence pairs, 147.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-hu.txt.zip">4.8M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Hungarian-Greek (3,028,020 sentence pairs, 95.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-hu.txt.zip">3.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Spanish (4,744,278 sentence pairs, 152.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-hu.txt.zip">4.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hungarian-Estonian (1,698,958 sentence pairs, 52.72M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-hu.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Hungarian-Finnish (2,397,610 sentence pairs, 69.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-hu.txt.zip">2.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-French (4,642,032 sentence pairs, 154.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-hu.txt.zip">4.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Hungarian-Irish (289,013 sentence pairs, 10.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-hu.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Hungarian-Croatian (1,464,999 sentence pairs, 43.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-hu.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Icelandic (571,317 sentence pairs, 15.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-is.tmx.gz">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Italian (4,145,628 sentence pairs, 136.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-it.tmx.gz">4.1M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Hungarian-Central Khmer (1,307 sentence pairs, 21.76k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-km.tmx.gz">1.3k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Hungarian-Korean (159,301 sentence pairs, 4.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Hungarian-Lithuanian (1,965,798 sentence pairs, 59.87M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-lt.tmx.gz">2.0M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Hungarian-Latvian (1,932,409 sentence pairs, 59.80M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-lv.tmx.gz">1.9M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Hungarian-Maltese (512,114 sentence pairs, 18.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-mt.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Burmese (445 sentence pairs, 8.25k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-my.tmx.gz">0.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Hungarian-Nepali (5,274 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-ne.tmx.gz">5.3k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hungarian-Dutch (3,456,242 sentence pairs, 110.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-nl.tmx.gz">3.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hungarian-Norwegian (2,941,352 sentence pairs, 84.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-no.tmx.gz">2.9M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hungarian-Polish (3,614,496 sentence pairs, 108.28M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-pl.tmx.gz">3.6M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Hungarian-Pushto (2,707 sentence pairs, 92.81k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-ps.tmx.gz">2.7k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Hungarian-Portuguese (3,726,877 sentence pairs, 120.06M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-pt.tmx.gz">3.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hungarian-Romanian (2,470,274 sentence pairs, 85.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-ro.tmx.gz">2.5M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Hungarian-Russian (98,665 sentence pairs, 2.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-ru.tmx.gz">98.7k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Hungarian-Sinhala (7,730 sentence pairs, 0.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-si.tmx.gz">7.7k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hungarian-Slovak (2,606,843 sentence pairs, 79.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-sk.tmx.gz">2.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Hungarian-Slovenian (1,645,463 sentence pairs, 55.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-sl.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Hungarian-Somali (904 sentence pairs, 39.28k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-so.tmx.gz">0.9k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hungarian-Swedish (2,867,294 sentence pairs, 87.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-sv.tmx.gz">2.9M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Hungarian-Swahili (14,103 sentence pairs, 0.52M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-sw.tmx.gz">14.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Hungarian-Tagalog (17,921 sentence pairs, 0.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/hu-tl.tmx.gz">17.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=MultiParaCrawl/v8/mono/is.txt.gz">is</a>
</th><td>1</td> <td>48.5M</td> <td>3.3M</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Icelandic-Bulgarian (549,316 sentence pairs, 18.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-is.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Icelandic-Czech (1,271,936 sentence pairs, 33.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-is.txt.zip">1.3M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Icelandic-Danish (1,149,087 sentence pairs, 34.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-is.txt.zip">1.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Icelandic-German (1,557,991 sentence pairs, 44.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-is.txt.zip">1.6M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Icelandic-Greek (995,735 sentence pairs, 30.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-is.txt.zip">1.0M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Icelandic-Spanish (1,644,364 sentence pairs, 50.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-is.txt.zip">1.6M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Icelandic-Estonian (788,983 sentence pairs, 20.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-is.txt.zip">0.8M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Icelandic-Finnish (758,692 sentence pairs, 20.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-is.txt.zip">0.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Icelandic-French (1,411,088 sentence pairs, 45.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-is.txt.zip">1.4M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Icelandic-Irish (249,140 sentence pairs, 8.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-is.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Icelandic-Croatian (657,412 sentence pairs, 17.34M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-is.txt.zip">0.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Icelandic-Hungarian (571,317 sentence pairs, 15.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-is.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Icelandic-Italian (1,230,749 sentence pairs, 38.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-it.tmx.gz">1.2M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Icelandic-Central Khmer (2,125 sentence pairs, 42.20k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-km.tmx.gz">2.1k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Icelandic-Korean (53,023 sentence pairs, 1.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-ko.tmx.gz">53.0k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Icelandic-Lithuanian (705,389 sentence pairs, 18.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-lt.tmx.gz">0.7M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Icelandic-Latvian (751,280 sentence pairs, 21.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-lv.tmx.gz">0.8M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Icelandic-Maltese (311,924 sentence pairs, 9.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Icelandic-Burmese (511 sentence pairs, 10.14k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-my.tmx.gz">0.5k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Icelandic-Nepali (7,303 sentence pairs, 0.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-ne.tmx.gz">7.3k</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Icelandic-Dutch (1,285,801 sentence pairs, 37.62M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Icelandic-Norwegian (1,732,742 sentence pairs, 48.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-no.tmx.gz">1.7M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Icelandic-Polish (877,967 sentence pairs, 24.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-pl.tmx.gz">0.9M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Icelandic-Pushto (3,608 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-ps.tmx.gz">3.6k</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Icelandic-Portuguese (1,061,522 sentence pairs, 34.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-pt.tmx.gz">1.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Icelandic-Romanian (555,101 sentence pairs, 18.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-ro.tmx.gz">0.6M</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Icelandic-Russian (62,806 sentence pairs, 2.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-ru.tmx.gz">62.8k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Icelandic-Sinhala (13,696 sentence pairs, 0.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-si.tmx.gz">13.7k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Icelandic-Slovak (901,498 sentence pairs, 25.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-sk.tmx.gz">0.9M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Icelandic-Slovenian (558,161 sentence pairs, 17.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-sl.tmx.gz">0.6M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Icelandic-Somali (4,238 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-so.tmx.gz">4.2k</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Icelandic-Swedish (1,055,954 sentence pairs, 30.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-sv.tmx.gz">1.1M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Icelandic-Swahili (23,334 sentence pairs, 0.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-sw.tmx.gz">23.3k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Icelandic-Tagalog (24,484 sentence pairs, 1.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/is-tl.tmx.gz">24.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=MultiParaCrawl/v8/mono/it.txt.gz">it</a>
</th><td>1</td> <td>1.7G</td> <td>85.4M</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Italian-Bulgarian (3,234,306 sentence pairs, 115.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-it.txt.zip">3.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Czech (8,437,837 sentence pairs, 256.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-it.txt.zip">8.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Danish (9,940,401 sentence pairs, 324.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-it.txt.zip">9.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-German (31,754,844 sentence pairs, 1.03G words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-it.txt.zip">31.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Greek (7,985,788 sentence pairs, 262.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-it.txt.zip">8.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Spanish (37,517,295 sentence pairs, 1.31G words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-it.txt.zip">37.5M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Italian-Estonian (2,692,734 sentence pairs, 89.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-it.txt.zip">2.7M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Finnish (4,517,889 sentence pairs, 142.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-it.txt.zip">4.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-French (33,786,010 sentence pairs, 1.23G words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-it.txt.zip">33.8M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Italian-Irish (431,426 sentence pairs, 16.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-it.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Italian-Croatian (2,870,135 sentence pairs, 90.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-it.txt.zip">2.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Hungarian (4,145,628 sentence pairs, 136.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-it.txt.zip">4.1M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Italian-Icelandic (1,230,749 sentence pairs, 38.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-it.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Italian-Central Khmer (2,059 sentence pairs, 38.52k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-km.tmx.gz">2.1k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Italian-Korean (621,113 sentence pairs, 18.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-ko.tmx.gz">0.6M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Italian-Lithuanian (2,714,192 sentence pairs, 89.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-lt.tmx.gz">2.7M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Italian-Latvian (2,789,952 sentence pairs, 94.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-lv.tmx.gz">2.8M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Italian-Maltese (720,609 sentence pairs, 28.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Burmese (679 sentence pairs, 12.95k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-my.tmx.gz">0.7k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Italian-Nepali (7,961 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-ne.tmx.gz">8.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Dutch (16,539,905 sentence pairs, 545.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-nl.tmx.gz">16.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Norwegian (10,042,231 sentence pairs, 304.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-no.tmx.gz">10.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Polish (10,871,513 sentence pairs, 341.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-pl.tmx.gz">10.9M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Italian-Pushto (3,687 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-ps.tmx.gz">3.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Portuguese (20,787,403 sentence pairs, 719.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-pt.tmx.gz">20.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Romanian (4,303,875 sentence pairs, 157.53M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-ro.tmx.gz">4.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Italian-Russian (512,140 sentence pairs, 16.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-ru.tmx.gz">0.5M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Italian-Sinhala (17,022 sentence pairs, 0.55M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-si.tmx.gz">17.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Slovak (4,320,825 sentence pairs, 141.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-sk.tmx.gz">4.3M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Italian-Slovenian (2,797,424 sentence pairs, 102.05M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-sl.tmx.gz">2.8M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Italian-Somali (3,237 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-so.tmx.gz">3.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Swedish (10,411,897 sentence pairs, 339.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-sv.tmx.gz">10.4M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Italian-Swahili (30,918 sentence pairs, 1.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-sw.tmx.gz">30.9k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Italian-Tagalog (42,452 sentence pairs, 1.96M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/it-tl.tmx.gz">42.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized km plain text' href="download.php?f=MultiParaCrawl/v8/mono/km.txt.gz">km</a>
</th><td>1</td> <td>1.8M</td> <td>59.8k</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Bulgarian (1,290 sentence pairs, 23.04k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-km.txt.zip">1.3k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Czech (1,679 sentence pairs, 28.73k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-km.txt.zip">1.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Danish (1,577 sentence pairs, 29.64k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-km.txt.zip">1.6k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Central Khmer-German (2,123 sentence pairs, 36.78k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-km.txt.zip">2.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Central Khmer-Greek (1,716 sentence pairs, 31.13k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-km.txt.zip">1.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Central Khmer-Spanish (2,905 sentence pairs, 57.17k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-km.txt.zip">2.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Estonian (1,475 sentence pairs, 23.59k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-km.txt.zip">1.5k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Finnish (1,274 sentence pairs, 21.09k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-km.txt.zip">1.3k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Central Khmer-French (2,282 sentence pairs, 44.79k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-km.txt.zip">2.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Irish (960 sentence pairs, 19.37k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-km.txt.zip">1.0k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Croatian (1,270 sentence pairs, 20.71k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-km.txt.zip">1.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Hungarian (1,307 sentence pairs, 21.76k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-km.txt.zip">1.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Central Khmer-Icelandic (2,125 sentence pairs, 42.20k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-km.txt.zip">2.1k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Central Khmer-Italian (2,059 sentence pairs, 38.52k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-km.txt.zip">2.1k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Central Khmer-Korean (456 sentence pairs, 7.58k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-ko.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Lithuanian (1,387 sentence pairs, 23.13k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-lt.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Latvian (1,375 sentence pairs, 23.30k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-lv.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Maltese (1,077 sentence pairs, 19.72k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-mt.tmx.gz">1.1k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Central Khmer-Burmese (5,419 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-my.tmx.gz">5.4k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Central Khmer-Nepali (12,384 sentence pairs, 0.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-ne.tmx.gz">12.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Central Khmer-Dutch (2,041 sentence pairs, 37.00k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-nl.tmx.gz">2.0k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Central Khmer-Norwegian (2,304 sentence pairs, 43.78k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-no.tmx.gz">2.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Polish (1,514 sentence pairs, 25.56k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-pl.tmx.gz">1.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Central Khmer-Pushto (1,100 sentence pairs, 36.77k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-ps.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Central Khmer-Portuguese (1,986 sentence pairs, 37.57k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-pt.tmx.gz">2.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Romanian (1,141 sentence pairs, 22.39k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-ro.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Central Khmer-Russian (2,366 sentence pairs, 58.38k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-ru.tmx.gz">2.4k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Central Khmer-Sinhala (19,762 sentence pairs, 0.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-si.tmx.gz">19.8k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Slovak (1,361 sentence pairs, 23.09k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-sk.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Slovenian (1,208 sentence pairs, 20.95k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-sl.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Somali (189 sentence pairs, 6.83k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-so.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Swedish (1,388 sentence pairs, 24.12k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-sv.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Central Khmer-Swahili (905 sentence pairs, 27.35k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-sw.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Central Khmer-Tagalog (559 sentence pairs, 17.65k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/km-tl.tmx.gz">0.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ko plain text' href="download.php?f=MultiParaCrawl/v8/mono/ko.txt.gz">ko</a>
</th><td>1</td> <td>53.4M</td> <td>3.7M</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Korean-Bulgarian (172,996 sentence pairs, 5.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-ko.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Korean-Czech (414,122 sentence pairs, 10.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-ko.txt.zip">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Korean-Danish (423,584 sentence pairs, 12.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-ko.txt.zip">0.4M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Korean-German (764,962 sentence pairs, 21.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-ko.txt.zip">0.8M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Korean-Greek (290,717 sentence pairs, 7.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-ko.txt.zip">0.3M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Korean-Spanish (984,391 sentence pairs, 29.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-ko.txt.zip">1.0M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Korean-Estonian (143,490 sentence pairs, 3.87M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-ko.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Korean-Finnish (244,251 sentence pairs, 6.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-ko.txt.zip">0.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Korean-French (804,966 sentence pairs, 24.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-ko.txt.zip">0.8M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Korean-Irish (15,575 sentence pairs, 0.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-ko.txt.zip">15.6k</a>
</td><td></td><td bgcolor="#ebffcc"><a rel="nofollow" title='Korean-Croatian (125,127 sentence pairs, 3.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-ko.txt.zip">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Korean-Hungarian (159,301 sentence pairs, 4.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-ko.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Korean-Icelandic (53,023 sentence pairs, 1.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-ko.txt.zip">53.0k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Korean-Italian (621,113 sentence pairs, 18.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-ko.txt.zip">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Central Khmer (456 sentence pairs, 7.58k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-ko.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Korean-Lithuanian (108,452 sentence pairs, 2.83M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-lt.tmx.gz">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Korean-Latvian (97,669 sentence pairs, 2.43M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-lv.tmx.gz">97.7k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Korean-Maltese (16,628 sentence pairs, 0.42M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-mt.tmx.gz">16.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Burmese (239 sentence pairs, 4.23k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-my.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Korean-Nepali (1,065 sentence pairs, 27.23k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-ne.tmx.gz">1.1k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Korean-Dutch (506,676 sentence pairs, 14.33M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-nl.tmx.gz">0.5M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Korean-Norwegian (341,793 sentence pairs, 8.89M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-no.tmx.gz">0.3M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Korean-Polish (329,693 sentence pairs, 8.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-pl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Pushto (196 sentence pairs, 3.32k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-ps.tmx.gz">0.2k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Korean-Portuguese (697,511 sentence pairs, 20.32M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-pt.tmx.gz">0.7M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Korean-Romanian (154,742 sentence pairs, 4.39M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Korean-Russian (71,756 sentence pairs, 2.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-ru.tmx.gz">71.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-Sinhala (1,820 sentence pairs, 38.45k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-si.tmx.gz">1.8k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Korean-Slovak (141,650 sentence pairs, 3.41M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-sk.tmx.gz">0.1M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Korean-Slovenian (88,596 sentence pairs, 2.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-sl.tmx.gz">88.6k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-Somali (847 sentence pairs, 40.37k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-so.tmx.gz">0.8k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Korean-Swedish (350,094 sentence pairs, 9.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Korean-Swahili (7,313 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-sw.tmx.gz">7.3k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Korean-Tagalog (37,525 sentence pairs, 1.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ko-tl.tmx.gz">37.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=MultiParaCrawl/v8/mono/lt.txt.gz">lt</a>
</th><td>1</td> <td>101.3M</td> <td>6.4M</td><td bgcolor="#caffca"><a rel="nofollow" title='Lithuanian-Bulgarian (1,937,309 sentence pairs, 63.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-lt.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Czech (2,599,222 sentence pairs, 75.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-lt.txt.zip">2.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Lithuanian-Danish (2,495,028 sentence pairs, 78.86M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-lt.txt.zip">2.5M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Lithuanian-German (3,052,537 sentence pairs, 92.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-lt.txt.zip">3.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Lithuanian-Greek (2,465,366 sentence pairs, 80.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-lt.txt.zip">2.5M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Lithuanian-Spanish (3,205,469 sentence pairs, 102.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-lt.txt.zip">3.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Lithuanian-Estonian (1,958,983 sentence pairs, 57.70M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-lt.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Lithuanian-Finnish (2,020,185 sentence pairs, 58.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-lt.txt.zip">2.0M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Lithuanian-French (3,075,650 sentence pairs, 103.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-lt.txt.zip">3.1M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Lithuanian-Irish (305,423 sentence pairs, 10.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-lt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d0ffce"><a rel="nofollow" title='Lithuanian-Croatian (1,359,305 sentence pairs, 38.98M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-lt.txt.zip">1.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Lithuanian-Hungarian (1,965,798 sentence pairs, 59.87M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-lt.txt.zip">2.0M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Lithuanian-Icelandic (705,389 sentence pairs, 18.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-lt.txt.zip">0.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Lithuanian-Italian (2,714,192 sentence pairs, 89.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-lt.txt.zip">2.7M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Lithuanian-Central Khmer (1,387 sentence pairs, 23.13k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-lt.txt.zip">1.4k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Lithuanian-Korean (108,452 sentence pairs, 2.83M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-lt.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Lithuanian-Latvian (2,536,056 sentence pairs, 76.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-lv.tmx.gz">2.5M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Lithuanian-Maltese (600,067 sentence pairs, 21.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-mt.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Lithuanian-Burmese (503 sentence pairs, 10.45k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-my.tmx.gz">0.5k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Lithuanian-Nepali (5,606 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-ne.tmx.gz">5.6k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Lithuanian-Dutch (2,623,873 sentence pairs, 85.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-nl.tmx.gz">2.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Norwegian (2,518,015 sentence pairs, 71.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-no.tmx.gz">2.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Lithuanian-Polish (2,688,059 sentence pairs, 81.38M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-pl.tmx.gz">2.7M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Lithuanian-Pushto (3,006 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-ps.tmx.gz">3.0k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Lithuanian-Portuguese (2,730,135 sentence pairs, 90.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-pt.tmx.gz">2.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Lithuanian-Romanian (2,049,087 sentence pairs, 70.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-ro.tmx.gz">2.0M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Lithuanian-Russian (99,384 sentence pairs, 3.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-ru.tmx.gz">99.4k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Lithuanian-Sinhala (8,754 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-si.tmx.gz">8.8k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Slovak (2,395,252 sentence pairs, 71.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-sk.tmx.gz">2.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Lithuanian-Slovenian (1,645,016 sentence pairs, 53.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-sl.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Lithuanian-Somali (947 sentence pairs, 38.71k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-so.tmx.gz">0.9k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Swedish (2,407,910 sentence pairs, 74.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-sv.tmx.gz">2.4M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Lithuanian-Swahili (15,938 sentence pairs, 0.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-sw.tmx.gz">15.9k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Lithuanian-Tagalog (17,440 sentence pairs, 0.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lt-tl.tmx.gz">17.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=MultiParaCrawl/v8/mono/lv.txt.gz">lv</a>
</th><td>1</td> <td>110.2M</td> <td>6.5M</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Latvian-Bulgarian (2,000,666 sentence pairs, 67.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-lv.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Czech (2,611,866 sentence pairs, 78.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-lv.txt.zip">2.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Latvian-Danish (2,616,233 sentence pairs, 83.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-lv.txt.zip">2.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Latvian-German (3,067,190 sentence pairs, 96.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-lv.txt.zip">3.1M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Latvian-Greek (2,478,378 sentence pairs, 82.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-lv.txt.zip">2.5M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Latvian-Spanish (3,131,174 sentence pairs, 104.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-lv.txt.zip">3.1M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Latvian-Estonian (1,989,842 sentence pairs, 60.05M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-lv.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Latvian-Finnish (2,102,036 sentence pairs, 60.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-lv.txt.zip">2.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Latvian-French (3,054,787 sentence pairs, 107.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-lv.txt.zip">3.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Latvian-Irish (324,166 sentence pairs, 11.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-lv.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Latvian-Croatian (1,399,335 sentence pairs, 41.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-lv.txt.zip">1.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Latvian-Hungarian (1,932,409 sentence pairs, 59.80M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-lv.txt.zip">1.9M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Latvian-Icelandic (751,280 sentence pairs, 21.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-lv.txt.zip">0.8M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Latvian-Italian (2,789,952 sentence pairs, 94.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-lv.txt.zip">2.8M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Latvian-Central Khmer (1,375 sentence pairs, 23.30k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-lv.txt.zip">1.4k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Latvian-Korean (97,669 sentence pairs, 2.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-lv.txt.zip">97.7k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Lithuanian (2,536,056 sentence pairs, 76.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-lv.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#d7ffc9"><a rel="nofollow" title='Latvian-Maltese (646,408 sentence pairs, 23.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-mt.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Latvian-Burmese (495 sentence pairs, 9.94k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-my.tmx.gz">0.5k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Latvian-Nepali (6,224 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-ne.tmx.gz">6.2k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Latvian-Dutch (2,625,015 sentence pairs, 87.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-nl.tmx.gz">2.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Latvian-Norwegian (2,524,586 sentence pairs, 72.84M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-no.tmx.gz">2.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Polish (2,530,898 sentence pairs, 78.65M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-pl.tmx.gz">2.5M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Latvian-Pushto (3,471 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-ps.tmx.gz">3.5k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Latvian-Portuguese (2,673,071 sentence pairs, 90.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-pt.tmx.gz">2.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Latvian-Romanian (2,043,778 sentence pairs, 71.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-ro.tmx.gz">2.0M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Latvian-Russian (90,964 sentence pairs, 2.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-ru.tmx.gz">91.0k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Latvian-Sinhala (9,517 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-si.tmx.gz">9.5k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Slovak (2,574,838 sentence pairs, 78.82M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-sk.tmx.gz">2.6M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Latvian-Slovenian (1,740,861 sentence pairs, 58.67M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-sl.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Latvian-Somali (1,093 sentence pairs, 45.29k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-so.tmx.gz">1.1k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Latvian-Swedish (2,429,052 sentence pairs, 76.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-sv.tmx.gz">2.4M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Latvian-Swahili (15,111 sentence pairs, 0.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-sw.tmx.gz">15.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Latvian-Tagalog (18,508 sentence pairs, 0.78M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/lv-tl.tmx.gz">18.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=MultiParaCrawl/v8/mono/mt.txt.gz">mt</a>
</th><td>1</td> <td>27.5M</td> <td>1.3M</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Maltese-Bulgarian (550,233 sentence pairs, 21.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-mt.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Maltese-Czech (679,957 sentence pairs, 24.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-mt.txt.zip">0.7M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Maltese-Danish (689,323 sentence pairs, 25.73M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-mt.txt.zip">0.7M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Maltese-German (745,004 sentence pairs, 27.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-mt.txt.zip">0.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Maltese-Greek (659,428 sentence pairs, 26.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-mt.txt.zip">0.7M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Maltese-Spanish (829,996 sentence pairs, 34.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-mt.txt.zip">0.8M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Maltese-Estonian (652,725 sentence pairs, 21.86M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-mt.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Maltese-Finnish (548,784 sentence pairs, 18.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-mt.txt.zip">0.5M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Maltese-French (746,321 sentence pairs, 31.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-mt.txt.zip">0.7M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-Irish (261,489 sentence pairs, 9.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-mt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Maltese-Croatian (374,680 sentence pairs, 12.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-mt.txt.zip">0.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Maltese-Hungarian (512,114 sentence pairs, 18.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-mt.txt.zip">0.5M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Icelandic (311,924 sentence pairs, 9.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-mt.txt.zip">0.3M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Maltese-Italian (720,609 sentence pairs, 28.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-mt.txt.zip">0.7M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Maltese-Central Khmer (1,077 sentence pairs, 19.72k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-mt.txt.zip">1.1k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Maltese-Korean (16,628 sentence pairs, 0.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-mt.txt.zip">16.6k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Maltese-Lithuanian (600,067 sentence pairs, 21.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-mt.txt.zip">0.6M</a>
</td><td bgcolor="#d7ffc9"><a rel="nofollow" title='Maltese-Latvian (646,408 sentence pairs, 23.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-mt.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Maltese-Burmese (556 sentence pairs, 11.36k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-my.tmx.gz">0.6k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Maltese-Nepali (5,803 sentence pairs, 0.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-ne.tmx.gz">5.8k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Maltese-Dutch (688,261 sentence pairs, 26.94M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-nl.tmx.gz">0.7M</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Maltese-Norwegian (453,611 sentence pairs, 13.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-no.tmx.gz">0.5M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Maltese-Polish (636,465 sentence pairs, 23.51M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-pl.tmx.gz">0.6M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Maltese-Pushto (2,959 sentence pairs, 97.65k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-ps.tmx.gz">3.0k</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Maltese-Portuguese (726,616 sentence pairs, 29.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-pt.tmx.gz">0.7M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Maltese-Romanian (559,525 sentence pairs, 22.87M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-ro.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Maltese-Russian (33,841 sentence pairs, 1.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-ru.tmx.gz">33.8k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Maltese-Sinhala (6,978 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-si.tmx.gz">7.0k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Maltese-Slovak (670,764 sentence pairs, 24.40M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-sk.tmx.gz">0.7M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Maltese-Slovenian (609,872 sentence pairs, 23.08M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-sl.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Maltese-Somali (1,011 sentence pairs, 41.45k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-so.tmx.gz">1.0k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Maltese-Swedish (665,074 sentence pairs, 24.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-sv.tmx.gz">0.7M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Maltese-Swahili (12,468 sentence pairs, 0.45M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-sw.tmx.gz">12.5k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Maltese-Tagalog (12,951 sentence pairs, 0.56M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/mt-tl.tmx.gz">13.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized my plain text' href="download.php?f=MultiParaCrawl/v8/mono/my.txt.gz">my</a>
</th><td>1</td> <td>0.8M</td> <td>29.7k</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Bulgarian (576 sentence pairs, 10.72k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-my.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Czech (502 sentence pairs, 8.20k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-my.txt.zip">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Danish (508 sentence pairs, 10.19k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-my.txt.zip">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-German (729 sentence pairs, 13.07k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-my.txt.zip">0.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Greek (699 sentence pairs, 13.82k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-my.txt.zip">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Burmese-Spanish (1,029 sentence pairs, 19.68k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-my.txt.zip">1.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Estonian (502 sentence pairs, 9.08k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-my.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Finnish (494 sentence pairs, 8.98k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-my.txt.zip">0.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Burmese-French (788 sentence pairs, 16.17k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-my.txt.zip">0.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Irish (414 sentence pairs, 9.41k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-my.txt.zip">0.4k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Croatian (450 sentence pairs, 8.20k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-my.txt.zip">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Hungarian (445 sentence pairs, 8.25k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-my.txt.zip">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Icelandic (511 sentence pairs, 10.14k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-my.txt.zip">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Italian (679 sentence pairs, 12.95k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-my.txt.zip">0.7k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Burmese-Central Khmer (5,419 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-my.txt.zip">5.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Korean (239 sentence pairs, 4.23k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-my.txt.zip">0.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Lithuanian (503 sentence pairs, 10.45k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-my.txt.zip">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Latvian (495 sentence pairs, 9.94k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-my.txt.zip">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Maltese (556 sentence pairs, 11.36k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-my.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Burmese-Nepali (3,291 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-ne.tmx.gz">3.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Dutch (686 sentence pairs, 12.63k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-nl.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Norwegian (715 sentence pairs, 13.07k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-no.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Polish (545 sentence pairs, 10.22k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-pl.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Burmese-Pushto (651 sentence pairs, 28.05k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-ps.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Portuguese (665 sentence pairs, 13.26k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-pt.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Romanian (415 sentence pairs, 9.50k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-ro.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Burmese-Russian (1,409 sentence pairs, 37.62k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-ru.tmx.gz">1.4k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Burmese-Sinhala (5,507 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-si.tmx.gz">5.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Slovak (552 sentence pairs, 10.35k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-sk.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Slovenian (377 sentence pairs, 7.79k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-sl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Burmese-Somali (53 sentence pairs, 1.64k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-so.tmx.gz">53</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Swedish (437 sentence pairs, 8.27k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-sv.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Swahili (437 sentence pairs, 13.48k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-sw.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Burmese-Tagalog (333 sentence pairs, 10.91k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/my-tl.tmx.gz">0.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ne plain text' href="download.php?f=MultiParaCrawl/v8/mono/ne.txt.gz">ne</a>
</th><td>1</td> <td>3.7M</td> <td>86.9k</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Nepali-Bulgarian (4,169 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-ne.txt.zip">4.2k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Nepali-Czech (4,418 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-ne.txt.zip">4.4k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Nepali-Danish (7,158 sentence pairs, 0.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-ne.txt.zip">7.2k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Nepali-German (9,041 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-ne.txt.zip">9.0k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Nepali-Greek (5,779 sentence pairs, 0.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-ne.txt.zip">5.8k</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Nepali-Spanish (10,267 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-ne.txt.zip">10.3k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Nepali-Estonian (6,759 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-ne.txt.zip">6.8k</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Nepali-Finnish (5,575 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-ne.txt.zip">5.6k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Nepali-French (7,272 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-ne.txt.zip">7.3k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Nepali-Irish (4,237 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-ne.txt.zip">4.2k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Nepali-Croatian (4,607 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-ne.txt.zip">4.6k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Nepali-Hungarian (5,274 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-ne.txt.zip">5.3k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Nepali-Icelandic (7,303 sentence pairs, 0.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-ne.txt.zip">7.3k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Nepali-Italian (7,961 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-ne.txt.zip">8.0k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Nepali-Central Khmer (12,384 sentence pairs, 0.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-ne.txt.zip">12.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Nepali-Korean (1,065 sentence pairs, 27.23k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-ne.txt.zip">1.1k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Nepali-Lithuanian (5,606 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-ne.txt.zip">5.6k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Nepali-Latvian (6,224 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-ne.txt.zip">6.2k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Nepali-Maltese (5,803 sentence pairs, 0.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-ne.txt.zip">5.8k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Nepali-Burmese (3,291 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-ne.txt.zip">3.3k</a>
</td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Nepali-Dutch (7,939 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-nl.tmx.gz">7.9k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Nepali-Norwegian (9,009 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-no.tmx.gz">9.0k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Nepali-Polish (6,328 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-pl.tmx.gz">6.3k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Nepali-Pushto (4,064 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-ps.tmx.gz">4.1k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Nepali-Portuguese (8,254 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-pt.tmx.gz">8.3k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Nepali-Romanian (3,877 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-ro.tmx.gz">3.9k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Nepali-Russian (4,140 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-ru.tmx.gz">4.1k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Nepali-Sinhala (34,457 sentence pairs, 1.61M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-si.tmx.gz">34.5k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Nepali-Slovak (6,358 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-sk.tmx.gz">6.4k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Nepali-Slovenian (5,629 sentence pairs, 0.16M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-sl.tmx.gz">5.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Nepali-Somali (425 sentence pairs, 20.36k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-so.tmx.gz">0.4k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Nepali-Swedish (6,517 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-sv.tmx.gz">6.5k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Nepali-Swahili (2,263 sentence pairs, 91.17k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-sw.tmx.gz">2.3k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Nepali-Tagalog (1,404 sentence pairs, 62.92k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ne-tl.tmx.gz">1.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=MultiParaCrawl/v8/mono/nl.txt.gz">nl</a>
</th><td>1</td> <td>1.2G</td> <td>69.0M</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Dutch-Bulgarian (3,029,022 sentence pairs, 108.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-nl.txt.zip">3.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Czech (8,175,338 sentence pairs, 242.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-nl.txt.zip">8.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Danish (10,928,584 sentence pairs, 344.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-nl.txt.zip">10.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-German (24,427,898 sentence pairs, 717.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-nl.txt.zip">24.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Greek (7,543,978 sentence pairs, 238.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-nl.txt.zip">7.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Spanish (24,698,241 sentence pairs, 786.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-nl.txt.zip">24.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Dutch-Estonian (2,411,641 sentence pairs, 79.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-nl.txt.zip">2.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Finnish (4,609,972 sentence pairs, 143.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-nl.txt.zip">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-French (23,016,749 sentence pairs, 771.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-nl.txt.zip">23.0M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Dutch-Irish (388,233 sentence pairs, 15.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-nl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Dutch-Croatian (2,260,347 sentence pairs, 68.86M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-nl.txt.zip">2.3M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Dutch-Hungarian (3,456,242 sentence pairs, 110.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-nl.txt.zip">3.5M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Dutch-Icelandic (1,285,801 sentence pairs, 37.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-nl.txt.zip">1.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Italian (16,539,905 sentence pairs, 545.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-nl.txt.zip">16.5M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Dutch-Central Khmer (2,041 sentence pairs, 37.00k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-nl.txt.zip">2.0k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Dutch-Korean (506,676 sentence pairs, 14.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-nl.txt.zip">0.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Dutch-Lithuanian (2,623,873 sentence pairs, 85.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-nl.txt.zip">2.6M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Dutch-Latvian (2,625,015 sentence pairs, 87.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-nl.txt.zip">2.6M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Dutch-Maltese (688,261 sentence pairs, 26.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-nl.txt.zip">0.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-Burmese (686 sentence pairs, 12.63k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-nl.txt.zip">0.7k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Dutch-Nepali (7,939 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-nl.txt.zip">7.9k</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Norwegian (11,262,909 sentence pairs, 330.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-no.tmx.gz">11.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Polish (9,407,622 sentence pairs, 276.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-pl.tmx.gz">9.4M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Dutch-Pushto (3,833 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-ps.tmx.gz">3.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Portuguese (15,095,259 sentence pairs, 492.91M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-pt.tmx.gz">15.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Romanian (3,762,406 sentence pairs, 133.50M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-ro.tmx.gz">3.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Dutch-Russian (388,769 sentence pairs, 12.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-ru.tmx.gz">0.4M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Dutch-Sinhala (16,981 sentence pairs, 0.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-si.tmx.gz">17.0k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Dutch-Slovak (3,690,107 sentence pairs, 119.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-sk.tmx.gz">3.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Dutch-Slovenian (2,334,224 sentence pairs, 85.74M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-sl.tmx.gz">2.3M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Dutch-Somali (3,728 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-so.tmx.gz">3.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Swedish (10,952,218 sentence pairs, 336.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-sv.tmx.gz">11.0M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Dutch-Swahili (29,100 sentence pairs, 1.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-sw.tmx.gz">29.1k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Dutch-Tagalog (35,569 sentence pairs, 1.71M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/nl-tl.tmx.gz">35.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized no plain text' href="download.php?f=MultiParaCrawl/v8/mono/no.txt.gz">no</a>
</th><td>1</td> <td>501.7M</td> <td>34.0M</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Norwegian-Bulgarian (2,654,509 sentence pairs, 85.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-no.txt.zip">2.7M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-Czech (7,417,441 sentence pairs, 199.07M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-no.txt.zip">7.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-Danish (11,484,302 sentence pairs, 330.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-no.txt.zip">11.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-German (13,261,076 sentence pairs, 365.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-no.txt.zip">13.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-Greek (6,540,193 sentence pairs, 186.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-no.txt.zip">6.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-Spanish (16,921,197 sentence pairs, 476.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-no.txt.zip">16.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Norwegian-Estonian (2,388,629 sentence pairs, 67.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-no.txt.zip">2.4M</a>
</td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Norwegian-Finnish (4,388,464 sentence pairs, 123.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-no.txt.zip">4.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-French (11,739,637 sentence pairs, 366.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-no.txt.zip">11.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Norwegian-Irish (378,289 sentence pairs, 12.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-no.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Norwegian-Croatian (2,740,310 sentence pairs, 73.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-no.txt.zip">2.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Norwegian-Hungarian (2,941,352 sentence pairs, 84.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-no.txt.zip">2.9M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Norwegian-Icelandic (1,732,742 sentence pairs, 48.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-no.txt.zip">1.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-Italian (10,042,231 sentence pairs, 304.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-no.txt.zip">10.0M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Norwegian-Central Khmer (2,304 sentence pairs, 43.78k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-no.txt.zip">2.3k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Norwegian-Korean (341,793 sentence pairs, 8.89M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-no.txt.zip">0.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Norwegian-Lithuanian (2,518,015 sentence pairs, 71.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-no.txt.zip">2.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Norwegian-Latvian (2,524,586 sentence pairs, 72.84M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-no.txt.zip">2.5M</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Norwegian-Maltese (453,611 sentence pairs, 13.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-no.txt.zip">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Norwegian-Burmese (715 sentence pairs, 13.07k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-no.txt.zip">0.7k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Norwegian-Nepali (9,009 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-no.txt.zip">9.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-Dutch (11,262,909 sentence pairs, 330.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-no.txt.zip">11.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-Polish (7,685,601 sentence pairs, 207.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-pl.tmx.gz">7.7M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Norwegian-Pushto (4,238 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-ps.tmx.gz">4.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-Portuguese (10,270,938 sentence pairs, 308.47M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-pt.tmx.gz">10.3M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Norwegian-Romanian (3,289,635 sentence pairs, 106.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-ro.tmx.gz">3.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Norwegian-Russian (267,714 sentence pairs, 7.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Norwegian-Sinhala (18,294 sentence pairs, 0.57M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-si.tmx.gz">18.3k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Norwegian-Slovak (3,714,194 sentence pairs, 106.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-sk.tmx.gz">3.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Norwegian-Slovenian (2,112,392 sentence pairs, 67.66M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-sl.tmx.gz">2.1M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Norwegian-Somali (3,786 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-so.tmx.gz">3.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-Swedish (10,702,431 sentence pairs, 307.48M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-sv.tmx.gz">10.7M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Norwegian-Swahili (24,309 sentence pairs, 0.95M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-sw.tmx.gz">24.3k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Norwegian-Tagalog (30,124 sentence pairs, 1.37M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/no-tl.tmx.gz">30.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=MultiParaCrawl/v8/mono/pl.txt.gz">pl</a>
</th><td>1</td> <td>534.4M</td> <td>33.0M</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Polish-Bulgarian (2,945,557 sentence pairs, 96.85M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-pl.txt.zip">2.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Czech (6,687,979 sentence pairs, 187.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-pl.txt.zip">6.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Danish (7,709,555 sentence pairs, 223.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-pl.txt.zip">7.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-German (13,914,817 sentence pairs, 403.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-pl.txt.zip">13.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Greek (6,225,700 sentence pairs, 179.58M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-pl.txt.zip">6.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Spanish (15,415,923 sentence pairs, 462.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-pl.txt.zip">15.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Polish-Estonian (2,190,828 sentence pairs, 66.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-pl.txt.zip">2.2M</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Polish-Finnish (3,770,090 sentence pairs, 107.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-pl.txt.zip">3.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-French (12,707,168 sentence pairs, 412.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-pl.txt.zip">12.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Polish-Irish (348,536 sentence pairs, 12.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-pl.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Polish-Croatian (2,182,530 sentence pairs, 64.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-pl.txt.zip">2.2M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Polish-Hungarian (3,614,496 sentence pairs, 108.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-pl.txt.zip">3.6M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Polish-Icelandic (877,967 sentence pairs, 24.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-pl.txt.zip">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Italian (10,871,513 sentence pairs, 341.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-pl.txt.zip">10.9M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Polish-Central Khmer (1,514 sentence pairs, 25.56k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-pl.txt.zip">1.5k</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Polish-Korean (329,693 sentence pairs, 8.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-pl.txt.zip">0.3M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Polish-Lithuanian (2,688,059 sentence pairs, 81.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-pl.txt.zip">2.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Polish-Latvian (2,530,898 sentence pairs, 78.65M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-pl.txt.zip">2.5M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Polish-Maltese (636,465 sentence pairs, 23.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-pl.txt.zip">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Burmese (545 sentence pairs, 10.22k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-pl.txt.zip">0.5k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Polish-Nepali (6,328 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-pl.txt.zip">6.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Dutch (9,407,622 sentence pairs, 276.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-pl.txt.zip">9.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Norwegian (7,685,601 sentence pairs, 207.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-pl.txt.zip">7.7M</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Polish-Pushto (3,433 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-ps.tmx.gz">3.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Portuguese (10,817,578 sentence pairs, 336.76M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-pt.tmx.gz">10.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Romanian (3,797,284 sentence pairs, 128.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-ro.tmx.gz">3.8M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Polish-Russian (260,903 sentence pairs, 7.70M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Polish-Sinhala (9,705 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-si.tmx.gz">9.7k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Polish-Slovak (4,165,023 sentence pairs, 123.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-sk.tmx.gz">4.2M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Polish-Slovenian (2,468,466 sentence pairs, 80.64M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-sl.tmx.gz">2.5M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Polish-Somali (1,136 sentence pairs, 48.12k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-so.tmx.gz">1.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Swedish (7,793,448 sentence pairs, 223.99M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-sv.tmx.gz">7.8M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Polish-Swahili (16,722 sentence pairs, 0.60M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-sw.tmx.gz">16.7k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Polish-Tagalog (22,669 sentence pairs, 0.96M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pl-tl.tmx.gz">22.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ps plain text' href="download.php?f=MultiParaCrawl/v8/mono/ps.txt.gz">ps</a>
</th><td>1</td> <td>0.8M</td> <td>25.8k</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Pushto-Bulgarian (3,273 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-ps.txt.zip">3.3k</a>
</td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Pushto-Czech (2,097 sentence pairs, 61.41k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-ps.txt.zip">2.1k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Pushto-Danish (3,616 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-ps.txt.zip">3.6k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Pushto-German (3,877 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-ps.txt.zip">3.9k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Pushto-Greek (4,105 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-ps.txt.zip">4.1k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Pushto-Spanish (4,967 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-ps.txt.zip">5.0k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Pushto-Estonian (3,337 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-ps.txt.zip">3.3k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Pushto-Finnish (2,672 sentence pairs, 88.36k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-ps.txt.zip">2.7k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Pushto-French (4,077 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-ps.txt.zip">4.1k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Pushto-Irish (2,111 sentence pairs, 79.72k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-ps.txt.zip">2.1k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Pushto-Croatian (2,581 sentence pairs, 79.22k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-ps.txt.zip">2.6k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Pushto-Hungarian (2,707 sentence pairs, 92.81k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-ps.txt.zip">2.7k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Pushto-Icelandic (3,608 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-ps.txt.zip">3.6k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Pushto-Italian (3,687 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-ps.txt.zip">3.7k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Pushto-Central Khmer (1,100 sentence pairs, 36.77k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-ps.txt.zip">1.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Pushto-Korean (196 sentence pairs, 3.32k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-ps.txt.zip">0.2k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Pushto-Lithuanian (3,006 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-ps.txt.zip">3.0k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Pushto-Latvian (3,471 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-ps.txt.zip">3.5k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Pushto-Maltese (2,959 sentence pairs, 97.65k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-ps.txt.zip">3.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Pushto-Burmese (651 sentence pairs, 28.05k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-ps.txt.zip">0.7k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Pushto-Nepali (4,064 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-ps.txt.zip">4.1k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Pushto-Dutch (3,833 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-ps.txt.zip">3.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Pushto-Norwegian (4,238 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-ps.txt.zip">4.2k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Pushto-Polish (3,433 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-ps.txt.zip">3.4k</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Pushto-Portuguese (3,705 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ps-pt.tmx.gz">3.7k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Pushto-Romanian (2,786 sentence pairs, 0.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ps-ro.tmx.gz">2.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Pushto-Russian (551 sentence pairs, 16.38k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ps-ru.tmx.gz">0.6k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Pushto-Sinhala (6,594 sentence pairs, 0.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ps-si.tmx.gz">6.6k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Pushto-Slovak (3,205 sentence pairs, 0.11M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ps-sk.tmx.gz">3.2k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Pushto-Slovenian (2,673 sentence pairs, 91.09k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ps-sl.tmx.gz">2.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Pushto-Somali (65 sentence pairs, 3.03k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ps-so.tmx.gz">65</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Pushto-Swedish (3,009 sentence pairs, 99.93k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ps-sv.tmx.gz">3.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Pushto-Swahili (712 sentence pairs, 29.00k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ps-sw.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Pushto-Tagalog (447 sentence pairs, 17.73k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ps-tl.tmx.gz">0.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=MultiParaCrawl/v8/mono/pt.txt.gz">pt</a>
</th><td>1</td> <td>1.3G</td> <td>70.5M</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Portuguese-Bulgarian (3,590,418 sentence pairs, 128.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-pt.txt.zip">3.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Czech (8,248,492 sentence pairs, 246.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-pt.txt.zip">8.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Danish (10,109,460 sentence pairs, 323.82M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-pt.txt.zip">10.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-German (24,252,042 sentence pairs, 764.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-pt.txt.zip">24.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Greek (7,983,534 sentence pairs, 255.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-pt.txt.zip">8.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (37,276,777 sentence pairs, 1.28G words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-pt.txt.zip">37.3M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Portuguese-Estonian (2,513,718 sentence pairs, 84.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-pt.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Finnish (4,475,689 sentence pairs, 141.00M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-pt.txt.zip">4.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-French (26,701,048 sentence pairs, 958.09M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-pt.txt.zip">26.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Portuguese-Irish (403,274 sentence pairs, 15.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-pt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Portuguese-Croatian (2,408,561 sentence pairs, 75.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-pt.txt.zip">2.4M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Portuguese-Hungarian (3,726,877 sentence pairs, 120.06M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-pt.txt.zip">3.7M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Portuguese-Icelandic (1,061,522 sentence pairs, 34.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-pt.txt.zip">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Italian (20,787,403 sentence pairs, 719.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-pt.txt.zip">20.8M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Portuguese-Central Khmer (1,986 sentence pairs, 37.57k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-pt.txt.zip">2.0k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Portuguese-Korean (697,511 sentence pairs, 20.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-pt.txt.zip">0.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Portuguese-Lithuanian (2,730,135 sentence pairs, 90.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-pt.txt.zip">2.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Portuguese-Latvian (2,673,071 sentence pairs, 90.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-pt.txt.zip">2.7M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Portuguese-Maltese (726,616 sentence pairs, 29.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-pt.txt.zip">0.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Burmese (665 sentence pairs, 13.26k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-pt.txt.zip">0.7k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Portuguese-Nepali (8,254 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-pt.txt.zip">8.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (15,095,259 sentence pairs, 492.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-pt.txt.zip">15.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Norwegian (10,270,938 sentence pairs, 308.47M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-pt.txt.zip">10.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Polish (10,817,578 sentence pairs, 336.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-pt.txt.zip">10.8M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Portuguese-Pushto (3,705 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ps-pt.txt.zip">3.7k</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Romanian (4,469,912 sentence pairs, 161.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pt-ro.tmx.gz">4.5M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Portuguese-Russian (486,004 sentence pairs, 16.03M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pt-ru.tmx.gz">0.5M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Portuguese-Sinhala (17,862 sentence pairs, 0.59M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pt-si.tmx.gz">17.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Slovak (4,108,963 sentence pairs, 134.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pt-sk.tmx.gz">4.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Portuguese-Slovenian (2,628,240 sentence pairs, 93.72M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pt-sl.tmx.gz">2.6M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Portuguese-Somali (4,014 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pt-so.tmx.gz">4.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Swedish (10,256,280 sentence pairs, 329.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pt-sv.tmx.gz">10.3M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Portuguese-Swahili (34,117 sentence pairs, 1.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pt-sw.tmx.gz">34.1k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Portuguese-Tagalog (55,639 sentence pairs, 2.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/pt-tl.tmx.gz">55.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=MultiParaCrawl/v8/mono/ro.txt.gz">ro</a>
</th><td>1</td> <td>218.4M</td> <td>11.3M</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Romanian-Bulgarian (2,669,896 sentence pairs, 98.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-ro.txt.zip">2.7M</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Romanian-Czech (3,538,345 sentence pairs, 113.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-ro.txt.zip">3.5M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Romanian-Danish (3,237,594 sentence pairs, 112.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-ro.txt.zip">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-German (4,849,492 sentence pairs, 165.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-ro.txt.zip">4.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Romanian-Greek (3,118,016 sentence pairs, 112.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-ro.txt.zip">3.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Spanish (5,396,070 sentence pairs, 191.63M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-ro.txt.zip">5.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Romanian-Estonian (1,719,350 sentence pairs, 59.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-ro.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Romanian-Finnish (2,288,358 sentence pairs, 75.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-ro.txt.zip">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-French (4,852,047 sentence pairs, 180.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-ro.txt.zip">4.9M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Romanian-Irish (282,354 sentence pairs, 11.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Romanian-Croatian (1,633,824 sentence pairs, 53.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-ro.txt.zip">1.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Romanian-Hungarian (2,470,274 sentence pairs, 85.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-ro.txt.zip">2.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Romanian-Icelandic (555,101 sentence pairs, 18.82M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-ro.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Italian (4,303,875 sentence pairs, 157.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-ro.txt.zip">4.3M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Romanian-Central Khmer (1,141 sentence pairs, 22.39k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-ro.txt.zip">1.1k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Romanian-Korean (154,742 sentence pairs, 4.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-ro.txt.zip">0.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Romanian-Lithuanian (2,049,087 sentence pairs, 70.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-ro.txt.zip">2.0M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Romanian-Latvian (2,043,778 sentence pairs, 71.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-ro.txt.zip">2.0M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Romanian-Maltese (559,525 sentence pairs, 22.87M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-ro.txt.zip">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Burmese (415 sentence pairs, 9.50k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-ro.txt.zip">0.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Romanian-Nepali (3,877 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-ro.txt.zip">3.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Dutch (3,762,406 sentence pairs, 133.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-ro.txt.zip">3.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Romanian-Norwegian (3,289,635 sentence pairs, 106.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-ro.txt.zip">3.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Polish (3,797,284 sentence pairs, 128.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-ro.txt.zip">3.8M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Romanian-Pushto (2,786 sentence pairs, 0.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ps-ro.txt.zip">2.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Portuguese (4,469,912 sentence pairs, 161.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pt-ro.txt.zip">4.5M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Romanian-Russian (150,914 sentence pairs, 5.04M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ro-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Romanian-Sinhala (7,835 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ro-si.tmx.gz">7.8k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Romanian-Slovak (2,855,106 sentence pairs, 97.36M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ro-sk.tmx.gz">2.9M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Romanian-Slovenian (1,986,188 sentence pairs, 71.92M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ro-sl.tmx.gz">2.0M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Romanian-Somali (1,356 sentence pairs, 74.67k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ro-so.tmx.gz">1.4k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Romanian-Swedish (3,239,463 sentence pairs, 110.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ro-sv.tmx.gz">3.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Romanian-Swahili (18,265 sentence pairs, 0.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ro-sw.tmx.gz">18.3k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Romanian-Tagalog (22,594 sentence pairs, 1.07M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ro-tl.tmx.gz">22.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=MultiParaCrawl/v8/mono/ru.txt.gz">ru</a>
</th><td>1</td> <td>91.0M</td> <td>5.5M</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Russian-Bulgarian (129,241 sentence pairs, 4.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-ru.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Russian-Czech (242,404 sentence pairs, 6.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-ru.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Russian-Danish (224,349 sentence pairs, 7.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-ru.txt.zip">0.2M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Russian-German (674,577 sentence pairs, 20.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-ru.txt.zip">0.7M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Russian-Greek (256,400 sentence pairs, 8.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-ru.txt.zip">0.3M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Russian-Spanish (868,256 sentence pairs, 28.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-ru.txt.zip">0.9M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Russian-Estonian (114,202 sentence pairs, 3.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-ru.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Russian-Finnish (161,499 sentence pairs, 4.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-ru.txt.zip">0.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Russian-French (712,123 sentence pairs, 24.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-ru.txt.zip">0.7M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Russian-Irish (21,092 sentence pairs, 0.70M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-ru.txt.zip">21.1k</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Russian-Croatian (98,221 sentence pairs, 2.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-ru.txt.zip">98.2k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Russian-Hungarian (98,665 sentence pairs, 2.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-ru.txt.zip">98.7k</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Russian-Icelandic (62,806 sentence pairs, 2.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-ru.txt.zip">62.8k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Russian-Italian (512,140 sentence pairs, 16.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-ru.txt.zip">0.5M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Russian-Central Khmer (2,366 sentence pairs, 58.38k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-ru.txt.zip">2.4k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Russian-Korean (71,756 sentence pairs, 2.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-ru.txt.zip">71.8k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Russian-Lithuanian (99,384 sentence pairs, 3.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-ru.txt.zip">99.4k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Russian-Latvian (90,964 sentence pairs, 2.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-ru.txt.zip">91.0k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Russian-Maltese (33,841 sentence pairs, 1.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-ru.txt.zip">33.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Russian-Burmese (1,409 sentence pairs, 37.62k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-ru.txt.zip">1.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Russian-Nepali (4,140 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-ru.txt.zip">4.1k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Russian-Dutch (388,769 sentence pairs, 12.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-ru.txt.zip">0.4M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Russian-Norwegian (267,714 sentence pairs, 7.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-ru.txt.zip">0.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Russian-Polish (260,903 sentence pairs, 7.70M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-ru.txt.zip">0.3M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Russian-Pushto (551 sentence pairs, 16.38k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ps-ru.txt.zip">0.6k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Russian-Portuguese (486,004 sentence pairs, 16.03M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pt-ru.txt.zip">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Russian-Romanian (150,914 sentence pairs, 5.04M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ro-ru.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffeeea"><a rel="nofollow" title='Russian-Sinhala (10,028 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ru-si.tmx.gz">10.0k</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Russian-Slovak (114,026 sentence pairs, 3.21M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ru-sk.tmx.gz">0.1M</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Russian-Slovenian (65,473 sentence pairs, 2.02M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ru-sl.tmx.gz">65.5k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Russian-Somali (1,725 sentence pairs, 96.10k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ru-so.tmx.gz">1.7k</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Russian-Swedish (262,956 sentence pairs, 8.20M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ru-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Russian-Swahili (19,975 sentence pairs, 0.79M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ru-sw.tmx.gz">20.0k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Russian-Tagalog (25,856 sentence pairs, 1.17M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/ru-tl.tmx.gz">25.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized si plain text' href="download.php?f=MultiParaCrawl/v8/mono/si.txt.gz">si</a>
</th><td>1</td> <td>7.0M</td> <td>0.2M</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Sinhala-Bulgarian (9,462 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-si.txt.zip">9.5k</a>
</td><td></td><td bgcolor="#fff2ec"><a rel="nofollow" title='Sinhala-Czech (13,900 sentence pairs, 0.38M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-si.txt.zip">13.9k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Sinhala-Danish (13,286 sentence pairs, 0.43M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-si.txt.zip">13.3k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Sinhala-German (19,803 sentence pairs, 0.62M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-si.txt.zip">19.8k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Sinhala-Greek (14,084 sentence pairs, 0.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-si.txt.zip">14.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Sinhala-Spanish (24,620 sentence pairs, 0.76M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-si.txt.zip">24.6k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Sinhala-Estonian (9,876 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-si.txt.zip">9.9k</a>
</td><td></td><td bgcolor="#ffede9"><a rel="nofollow" title='Sinhala-Finnish (9,694 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-si.txt.zip">9.7k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Sinhala-French (21,002 sentence pairs, 0.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-si.txt.zip">21.0k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Sinhala-Irish (5,285 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-si.txt.zip">5.3k</a>
</td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Sinhala-Croatian (8,058 sentence pairs, 0.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-si.txt.zip">8.1k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Sinhala-Hungarian (7,730 sentence pairs, 0.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-si.txt.zip">7.7k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Sinhala-Icelandic (13,696 sentence pairs, 0.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-si.txt.zip">13.7k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Sinhala-Italian (17,022 sentence pairs, 0.55M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-si.txt.zip">17.0k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Sinhala-Central Khmer (19,762 sentence pairs, 0.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-si.txt.zip">19.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Sinhala-Korean (1,820 sentence pairs, 38.45k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-si.txt.zip">1.8k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Sinhala-Lithuanian (8,754 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-si.txt.zip">8.8k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Sinhala-Latvian (9,517 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-si.txt.zip">9.5k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Maltese (6,978 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-si.txt.zip">7.0k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Burmese (5,507 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-si.txt.zip">5.5k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Sinhala-Nepali (34,457 sentence pairs, 1.61M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-si.txt.zip">34.5k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Sinhala-Dutch (16,981 sentence pairs, 0.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-si.txt.zip">17.0k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Sinhala-Norwegian (18,294 sentence pairs, 0.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-si.txt.zip">18.3k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Sinhala-Polish (9,705 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-si.txt.zip">9.7k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Sinhala-Pushto (6,594 sentence pairs, 0.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ps-si.txt.zip">6.6k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Sinhala-Portuguese (17,862 sentence pairs, 0.59M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pt-si.txt.zip">17.9k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Sinhala-Romanian (7,835 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ro-si.txt.zip">7.8k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Sinhala-Russian (10,028 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ru-si.txt.zip">10.0k</a>
</td><td></td><td bgcolor="#ffede9"><a rel="nofollow" title='Sinhala-Slovak (9,558 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/si-sk.tmx.gz">9.6k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Sinhala-Slovenian (7,985 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/si-sl.tmx.gz">8.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Sinhala-Somali (440 sentence pairs, 16.63k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/si-so.tmx.gz">0.4k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Sinhala-Swedish (11,094 sentence pairs, 0.35M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/si-sv.tmx.gz">11.1k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Sinhala-Swahili (5,255 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/si-sw.tmx.gz">5.3k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Sinhala-Tagalog (3,690 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/si-tl.tmx.gz">3.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sk plain text' href="download.php?f=MultiParaCrawl/v8/mono/sk.txt.gz">sk</a>
</th><td>1</td> <td>154.8M</td> <td>9.6M</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovak-Bulgarian (2,621,126 sentence pairs, 86.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-sk.txt.zip">2.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Czech (4,968,342 sentence pairs, 139.87M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-sk.txt.zip">5.0M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovak-Danish (3,645,187 sentence pairs, 113.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-sk.txt.zip">3.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-German (5,374,751 sentence pairs, 162.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-sk.txt.zip">5.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Slovak-Greek (3,450,605 sentence pairs, 109.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-sk.txt.zip">3.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Spanish (5,041,949 sentence pairs, 162.51M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-sk.txt.zip">5.0M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovak-Estonian (1,984,242 sentence pairs, 59.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-sk.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovak-Finnish (2,581,665 sentence pairs, 74.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-sk.txt.zip">2.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-French (4,778,601 sentence pairs, 162.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-sk.txt.zip">4.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovak-Irish (336,120 sentence pairs, 12.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-sk.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovak-Croatian (2,027,399 sentence pairs, 57.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-sk.txt.zip">2.0M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovak-Hungarian (2,606,843 sentence pairs, 79.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-sk.txt.zip">2.6M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Slovak-Icelandic (901,498 sentence pairs, 25.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-sk.txt.zip">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Italian (4,320,825 sentence pairs, 141.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-sk.txt.zip">4.3M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Slovak-Central Khmer (1,361 sentence pairs, 23.09k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-sk.txt.zip">1.4k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Slovak-Korean (141,650 sentence pairs, 3.41M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-sk.txt.zip">0.1M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovak-Lithuanian (2,395,252 sentence pairs, 71.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-sk.txt.zip">2.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovak-Latvian (2,574,838 sentence pairs, 78.82M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-sk.txt.zip">2.6M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Slovak-Maltese (670,764 sentence pairs, 24.40M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-sk.txt.zip">0.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovak-Burmese (552 sentence pairs, 10.35k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-sk.txt.zip">0.6k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Slovak-Nepali (6,358 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-sk.txt.zip">6.4k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovak-Dutch (3,690,107 sentence pairs, 119.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-sk.txt.zip">3.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Slovak-Norwegian (3,714,194 sentence pairs, 106.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-sk.txt.zip">3.7M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Slovak-Polish (4,165,023 sentence pairs, 123.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-sk.txt.zip">4.2M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Slovak-Pushto (3,205 sentence pairs, 0.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ps-sk.txt.zip">3.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Portuguese (4,108,963 sentence pairs, 134.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pt-sk.txt.zip">4.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Slovak-Romanian (2,855,106 sentence pairs, 97.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ro-sk.txt.zip">2.9M</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Slovak-Russian (114,026 sentence pairs, 3.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ru-sk.txt.zip">0.1M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Slovak-Sinhala (9,558 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/si-sk.txt.zip">9.6k</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovak-Slovenian (2,503,669 sentence pairs, 82.18M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sk-sl.tmx.gz">2.5M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Slovak-Somali (982 sentence pairs, 40.67k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sk-so.tmx.gz">1.0k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovak-Swedish (3,712,787 sentence pairs, 114.23M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sk-sv.tmx.gz">3.7M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Slovak-Swahili (14,905 sentence pairs, 0.54M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sk-sw.tmx.gz">14.9k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Slovak-Tagalog (17,876 sentence pairs, 0.77M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sk-tl.tmx.gz">17.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=MultiParaCrawl/v8/mono/sl.txt.gz">sl</a>
</th><td>1</td> <td>107.9M</td> <td>6.0M</td><td bgcolor="#caffca"><a rel="nofollow" title='Slovenian-Bulgarian (1,891,262 sentence pairs, 66.05M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-sl.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovenian-Czech (2,521,455 sentence pairs, 80.81M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-sl.txt.zip">2.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovenian-Danish (2,227,155 sentence pairs, 77.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-sl.txt.zip">2.2M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Slovenian-German (3,145,456 sentence pairs, 107.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-sl.txt.zip">3.1M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovenian-Greek (2,022,185 sentence pairs, 73.28M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-sl.txt.zip">2.0M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Slovenian-Spanish (3,103,206 sentence pairs, 111.89M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-sl.txt.zip">3.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Slovenian-Estonian (1,720,231 sentence pairs, 54.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-sl.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovenian-Finnish (1,590,093 sentence pairs, 50.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-sl.txt.zip">1.6M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovenian-French (3,003,475 sentence pairs, 113.83M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-sl.txt.zip">3.0M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Slovenian-Irish (281,894 sentence pairs, 10.42M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-sl.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Slovenian-Croatian (1,463,507 sentence pairs, 44.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-sl.txt.zip">1.5M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Slovenian-Hungarian (1,645,463 sentence pairs, 55.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-sl.txt.zip">1.6M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovenian-Icelandic (558,161 sentence pairs, 17.70M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-sl.txt.zip">0.6M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Slovenian-Italian (2,797,424 sentence pairs, 102.05M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-sl.txt.zip">2.8M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovenian-Central Khmer (1,208 sentence pairs, 20.95k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-sl.txt.zip">1.2k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Slovenian-Korean (88,596 sentence pairs, 2.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-sl.txt.zip">88.6k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Slovenian-Lithuanian (1,645,016 sentence pairs, 53.91M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-sl.txt.zip">1.6M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovenian-Latvian (1,740,861 sentence pairs, 58.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-sl.txt.zip">1.7M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Slovenian-Maltese (609,872 sentence pairs, 23.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-sl.txt.zip">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Burmese (377 sentence pairs, 7.79k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-sl.txt.zip">0.4k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Slovenian-Nepali (5,629 sentence pairs, 0.16M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-sl.txt.zip">5.6k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovenian-Dutch (2,334,224 sentence pairs, 85.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-sl.txt.zip">2.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovenian-Norwegian (2,112,392 sentence pairs, 67.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-sl.txt.zip">2.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovenian-Polish (2,468,466 sentence pairs, 80.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-sl.txt.zip">2.5M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Slovenian-Pushto (2,673 sentence pairs, 91.09k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ps-sl.txt.zip">2.7k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Slovenian-Portuguese (2,628,240 sentence pairs, 93.72M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pt-sl.txt.zip">2.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovenian-Romanian (1,986,188 sentence pairs, 71.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ro-sl.txt.zip">2.0M</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Slovenian-Russian (65,473 sentence pairs, 2.02M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ru-sl.txt.zip">65.5k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Slovenian-Sinhala (7,985 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/si-sl.txt.zip">8.0k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovenian-Slovak (2,503,669 sentence pairs, 82.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sk-sl.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Slovenian-Somali (837 sentence pairs, 34.81k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sl-so.tmx.gz">0.8k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovenian-Swedish (2,242,161 sentence pairs, 77.19M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sl-sv.tmx.gz">2.2M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Slovenian-Swahili (12,847 sentence pairs, 0.46M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sl-sw.tmx.gz">12.8k</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Slovenian-Tagalog (17,688 sentence pairs, 0.75M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sl-tl.tmx.gz">17.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized so plain text' href="download.php?f=MultiParaCrawl/v8/mono/so.txt.gz">so</a>
</th><td>1</td> <td>0.4M</td> <td>16.9k</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Somali-Bulgarian (616 sentence pairs, 30.16k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-so.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Somali-Czech (2,798 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-so.txt.zip">2.8k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Somali-Danish (2,480 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-so.txt.zip">2.5k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Somali-German (4,848 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-so.txt.zip">4.8k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Somali-Greek (1,712 sentence pairs, 91.25k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-so.txt.zip">1.7k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Somali-Spanish (5,801 sentence pairs, 0.32M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-so.txt.zip">5.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Somali-Estonian (1,201 sentence pairs, 49.07k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-so.txt.zip">1.2k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Somali-Finnish (2,437 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-so.txt.zip">2.4k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Somali-French (5,290 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-so.txt.zip">5.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Somali-Irish (861 sentence pairs, 43.20k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-so.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Somali-Croatian (351 sentence pairs, 12.36k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-so.txt.zip">0.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Somali-Hungarian (904 sentence pairs, 39.28k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-so.txt.zip">0.9k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Somali-Icelandic (4,238 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-so.txt.zip">4.2k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Somali-Italian (3,237 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-so.txt.zip">3.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Central Khmer (189 sentence pairs, 6.83k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-so.txt.zip">0.2k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Somali-Korean (847 sentence pairs, 40.37k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-so.txt.zip">0.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Somali-Lithuanian (947 sentence pairs, 38.71k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-so.txt.zip">0.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Somali-Latvian (1,093 sentence pairs, 45.29k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-so.txt.zip">1.1k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Somali-Maltese (1,011 sentence pairs, 41.45k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-so.txt.zip">1.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Burmese (53 sentence pairs, 1.64k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-so.txt.zip">53</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Somali-Nepali (425 sentence pairs, 20.36k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-so.txt.zip">0.4k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Somali-Dutch (3,728 sentence pairs, 0.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-so.txt.zip">3.7k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Somali-Norwegian (3,786 sentence pairs, 0.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-so.txt.zip">3.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Somali-Polish (1,136 sentence pairs, 48.12k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-so.txt.zip">1.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Pushto (65 sentence pairs, 3.03k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ps-so.txt.zip">65</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Somali-Portuguese (4,014 sentence pairs, 0.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pt-so.txt.zip">4.0k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Somali-Romanian (1,356 sentence pairs, 74.67k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ro-so.txt.zip">1.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Somali-Russian (1,725 sentence pairs, 96.10k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ru-so.txt.zip">1.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Somali-Sinhala (440 sentence pairs, 16.63k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/si-so.txt.zip">0.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Somali-Slovak (982 sentence pairs, 40.67k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sk-so.txt.zip">1.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Somali-Slovenian (837 sentence pairs, 34.81k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sl-so.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Somali-Swedish (1,991 sentence pairs, 95.30k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/so-sv.tmx.gz">2.0k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Somali-Swahili (1,738 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/so-sw.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Somali-Tagalog (140 sentence pairs, 6.11k words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/so-tl.tmx.gz">0.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=MultiParaCrawl/v8/mono/sv.txt.gz">sv</a>
</th><td>1</td> <td>477.8M</td> <td>30.1M</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-Bulgarian (2,528,636 sentence pairs, 85.88M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-sv.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Czech (6,225,612 sentence pairs, 179.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-sv.txt.zip">6.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Danish (10,505,003 sentence pairs, 315.30M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-sv.txt.zip">10.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-German (13,104,959 sentence pairs, 380.97M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-sv.txt.zip">13.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Greek (6,193,160 sentence pairs, 188.93M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-sv.txt.zip">6.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Spanish (14,862,362 sentence pairs, 465.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-sv.txt.zip">14.9M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Swedish-Estonian (2,364,728 sentence pairs, 72.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-sv.txt.zip">2.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Finnish (4,840,703 sentence pairs, 139.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-sv.txt.zip">4.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-French (12,180,316 sentence pairs, 407.33M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-sv.txt.zip">12.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Swedish-Irish (357,949 sentence pairs, 13.50M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-sv.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Swedish-Croatian (2,051,209 sentence pairs, 60.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-sv.txt.zip">2.1M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Swedish-Hungarian (2,867,294 sentence pairs, 87.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-sv.txt.zip">2.9M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Swedish-Icelandic (1,055,954 sentence pairs, 30.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-sv.txt.zip">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Italian (10,411,897 sentence pairs, 339.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-sv.txt.zip">10.4M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Swedish-Central Khmer (1,388 sentence pairs, 24.12k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-sv.txt.zip">1.4k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Swedish-Korean (350,094 sentence pairs, 9.24M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-sv.txt.zip">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Swedish-Lithuanian (2,407,910 sentence pairs, 74.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-sv.txt.zip">2.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Swedish-Latvian (2,429,052 sentence pairs, 76.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-sv.txt.zip">2.4M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Swedish-Maltese (665,074 sentence pairs, 24.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-sv.txt.zip">0.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swedish-Burmese (437 sentence pairs, 8.27k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-sv.txt.zip">0.4k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Swedish-Nepali (6,517 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-sv.txt.zip">6.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Dutch (10,952,218 sentence pairs, 336.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-sv.txt.zip">11.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Norwegian (10,702,431 sentence pairs, 307.48M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-sv.txt.zip">10.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Polish (7,793,448 sentence pairs, 223.99M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-sv.txt.zip">7.8M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Swedish-Pushto (3,009 sentence pairs, 99.93k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ps-sv.txt.zip">3.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-Portuguese (10,256,280 sentence pairs, 329.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pt-sv.txt.zip">10.3M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Swedish-Romanian (3,239,463 sentence pairs, 110.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ro-sv.txt.zip">3.2M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Swedish-Russian (262,956 sentence pairs, 8.20M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ru-sv.txt.zip">0.3M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Swedish-Sinhala (11,094 sentence pairs, 0.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/si-sv.txt.zip">11.1k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Swedish-Slovak (3,712,787 sentence pairs, 114.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sk-sv.txt.zip">3.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Swedish-Slovenian (2,242,161 sentence pairs, 77.19M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sl-sv.txt.zip">2.2M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Swedish-Somali (1,991 sentence pairs, 95.30k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/so-sv.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Swedish-Swahili (18,510 sentence pairs, 0.69M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sv-sw.tmx.gz">18.5k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Swedish-Tagalog (27,907 sentence pairs, 1.22M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sv-tl.tmx.gz">27.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sw plain text' href="download.php?f=MultiParaCrawl/v8/mono/sw.txt.gz">sw</a>
</th><td>1</td> <td>3.5M</td> <td>0.2M</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Swahili-Bulgarian (15,461 sentence pairs, 0.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-sw.txt.zip">15.5k</a>
</td><td></td><td bgcolor="#fffdf2"><a rel="nofollow" title='Swahili-Czech (19,455 sentence pairs, 0.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-sw.txt.zip">19.5k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Swahili-Danish (23,205 sentence pairs, 0.90M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-sw.txt.zip">23.2k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Swahili-German (31,918 sentence pairs, 1.25M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-sw.txt.zip">31.9k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Swahili-Greek (23,854 sentence pairs, 0.94M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-sw.txt.zip">23.9k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Swahili-Spanish (42,820 sentence pairs, 1.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-sw.txt.zip">42.8k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Swahili-Estonian (15,465 sentence pairs, 0.53M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-sw.txt.zip">15.5k</a>
</td><td></td><td bgcolor="#fffcf2"><a rel="nofollow" title='Swahili-Finnish (19,341 sentence pairs, 0.68M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-sw.txt.zip">19.3k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Swahili-French (39,453 sentence pairs, 1.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-sw.txt.zip">39.5k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Swahili-Irish (9,091 sentence pairs, 0.39M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-sw.txt.zip">9.1k</a>
</td><td></td><td bgcolor="#fff5ee"><a rel="nofollow" title='Swahili-Croatian (12,544 sentence pairs, 0.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-sw.txt.zip">12.5k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Swahili-Hungarian (14,103 sentence pairs, 0.52M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-sw.txt.zip">14.1k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Swahili-Icelandic (23,334 sentence pairs, 0.92M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-sw.txt.zip">23.3k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Swahili-Italian (30,918 sentence pairs, 1.21M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-sw.txt.zip">30.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Swahili-Central Khmer (905 sentence pairs, 27.35k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-sw.txt.zip">0.9k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Swahili-Korean (7,313 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-sw.txt.zip">7.3k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Swahili-Lithuanian (15,938 sentence pairs, 0.57M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-sw.txt.zip">15.9k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Swahili-Latvian (15,111 sentence pairs, 0.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-sw.txt.zip">15.1k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Swahili-Maltese (12,468 sentence pairs, 0.45M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-sw.txt.zip">12.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swahili-Burmese (437 sentence pairs, 13.48k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-sw.txt.zip">0.4k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Swahili-Nepali (2,263 sentence pairs, 91.17k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-sw.txt.zip">2.3k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Swahili-Dutch (29,100 sentence pairs, 1.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-sw.txt.zip">29.1k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Swahili-Norwegian (24,309 sentence pairs, 0.95M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-sw.txt.zip">24.3k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Swahili-Polish (16,722 sentence pairs, 0.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-sw.txt.zip">16.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Swahili-Pushto (712 sentence pairs, 29.00k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ps-sw.txt.zip">0.7k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Swahili-Portuguese (34,117 sentence pairs, 1.35M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pt-sw.txt.zip">34.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Swahili-Romanian (18,265 sentence pairs, 0.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ro-sw.txt.zip">18.3k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Swahili-Russian (19,975 sentence pairs, 0.79M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ru-sw.txt.zip">20.0k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Swahili-Sinhala (5,255 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/si-sw.txt.zip">5.3k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Swahili-Slovak (14,905 sentence pairs, 0.54M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sk-sw.txt.zip">14.9k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Swahili-Slovenian (12,847 sentence pairs, 0.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sl-sw.txt.zip">12.8k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Swahili-Somali (1,738 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/so-sw.txt.zip">1.7k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Swahili-Swedish (18,510 sentence pairs, 0.69M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sv-sw.txt.zip">18.5k</a>
</td><td></td><td bgcolor="#ffffe8"><a rel="nofollow" title='Swahili-Tagalog (28,270 sentence pairs, 1.44M words) - TMX format' href="download.php?f=MultiParaCrawl/v8/tmx/sw-tl.tmx.gz">28.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tl plain text' href="download.php?f=MultiParaCrawl/v8/mono/tl.txt.gz">tl</a>
</th><td>1</td> <td>7.5M</td> <td>0.3M</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Tagalog-Bulgarian (56,076 sentence pairs, 2.66M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/bg-tl.txt.zip">56.1k</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Tagalog-Czech (59,309 sentence pairs, 2.64M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/cs-tl.txt.zip">59.3k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Tagalog-Danish (66,479 sentence pairs, 3.14M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/da-tl.txt.zip">66.5k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Tagalog-German (82,123 sentence pairs, 3.88M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/de-tl.txt.zip">82.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Tagalog-Greek (29,047 sentence pairs, 1.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/el-tl.txt.zip">29.0k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Tagalog-Spanish (109,580 sentence pairs, 5.08M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/es-tl.txt.zip">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Tagalog-Estonian (56,362 sentence pairs, 2.36M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/et-tl.txt.zip">56.4k</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Tagalog-Finnish (62,575 sentence pairs, 2.67M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fi-tl.txt.zip">62.6k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Tagalog-French (82,564 sentence pairs, 4.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/fr-tl.txt.zip">82.6k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Tagalog-Irish (9,805 sentence pairs, 0.49M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ga-tl.txt.zip">9.8k</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Tagalog-Croatian (27,674 sentence pairs, 1.23M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hr-tl.txt.zip">27.7k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Tagalog-Hungarian (17,921 sentence pairs, 0.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/hu-tl.txt.zip">17.9k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Tagalog-Icelandic (24,484 sentence pairs, 1.11M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/is-tl.txt.zip">24.5k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Tagalog-Italian (42,452 sentence pairs, 1.96M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/it-tl.txt.zip">42.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Tagalog-Central Khmer (559 sentence pairs, 17.65k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/km-tl.txt.zip">0.6k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Tagalog-Korean (37,525 sentence pairs, 1.60M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ko-tl.txt.zip">37.5k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Tagalog-Lithuanian (17,440 sentence pairs, 0.74M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lt-tl.txt.zip">17.4k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Tagalog-Latvian (18,508 sentence pairs, 0.78M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/lv-tl.txt.zip">18.5k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Tagalog-Maltese (12,951 sentence pairs, 0.56M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/mt-tl.txt.zip">13.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Burmese (333 sentence pairs, 10.91k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/my-tl.txt.zip">0.3k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Tagalog-Nepali (1,404 sentence pairs, 62.92k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ne-tl.txt.zip">1.4k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Tagalog-Dutch (35,569 sentence pairs, 1.71M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/nl-tl.txt.zip">35.6k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Tagalog-Norwegian (30,124 sentence pairs, 1.37M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/no-tl.txt.zip">30.1k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Tagalog-Polish (22,669 sentence pairs, 0.96M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pl-tl.txt.zip">22.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Tagalog-Pushto (447 sentence pairs, 17.73k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ps-tl.txt.zip">0.4k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Tagalog-Portuguese (55,639 sentence pairs, 2.46M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/pt-tl.txt.zip">55.6k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Tagalog-Romanian (22,594 sentence pairs, 1.07M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ro-tl.txt.zip">22.6k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Tagalog-Russian (25,856 sentence pairs, 1.17M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/ru-tl.txt.zip">25.9k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Tagalog-Sinhala (3,690 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/si-tl.txt.zip">3.7k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Tagalog-Slovak (17,876 sentence pairs, 0.77M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sk-tl.txt.zip">17.9k</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Tagalog-Slovenian (17,688 sentence pairs, 0.75M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sl-tl.txt.zip">17.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tagalog-Somali (140 sentence pairs, 6.11k words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/so-tl.txt.zip">0.1k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Tagalog-Swedish (27,907 sentence pairs, 1.22M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sv-tl.txt.zip">27.9k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Tagalog-Swahili (28,270 sentence pairs, 1.44M words) - Moses format' href="download.php?f=MultiParaCrawl/v8/moses/sw-tl.txt.zip">28.3k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>