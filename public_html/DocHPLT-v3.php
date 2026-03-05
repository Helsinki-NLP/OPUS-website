<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>DocHPLT</title>
<link rev="made" href="mailto:opus-project">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>DocHPLT v3</h1>Parallel corpora from Web Crawls collected in the <a href="https://hplt-project.org">HPLT project</a>. This is the document-aligned version of the data that provides the original parallel documents that contain aligned sentences extracted into the bitextreleased in the <a href="http://opus.nlpl.eu/legacy/HPLT-3.php">HPLT 3 release</a>.<p>29 languages, 395 bitexts<br>total number of files: 228,526,263<br>total number of tokens: 165.19G<br>total number of sentence fragments: 16.02G<br><p>Please, acknowledge the HPLT project at <a href="https://hplt-project.org">https://hplt-project.org</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>The data packaging is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="https://hplt-project.org">https://hplt-project.org</a> for more details<h3>Release history:</h3><p><ul><li><a href="DocHPLT-v2.1.php">DocHPLT v2.1</a></li> <li><a href="DocHPLT-v2.php">DocHPLT v2</a></li> <li><a href="DocHPLT-v3.php">DocHPLT v3</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = untokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = tokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th>files</th><th>tokens</th><th>sentences</th>
<th><a rel="nofollow" href="DocHPLT/v3/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/da_sample.html">da</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/el_sample.html">el</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/en_sample.html">en</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/et_sample.html">et</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/is_sample.html">is</a></th>
<th></th>
<th><a rel="nofollow" href="DocHPLT/v3/ka_sample.html">ka</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="DocHPLT/v3/uk_sample.html">uk</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/bg.zip">bg</a></th>
<td>6,853,049</td><td>6.7G</td><td>472.0M</td><th></th>
<td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="DocHPLT/v3/bg-bs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Catalan (sample file)" href="DocHPLT/v3/bg-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Czech (sample file)" href="DocHPLT/v3/bg-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Danish (sample file)" href="DocHPLT/v3/bg-da_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="DocHPLT/v3/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="DocHPLT/v3/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="DocHPLT/v3/bg-et_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Basque (sample file)" href="DocHPLT/v3/bg-eu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="DocHPLT/v3/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Irish (sample file)" href="DocHPLT/v3/bg-ga_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Galician (sample file)" href="DocHPLT/v3/bg-gl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="DocHPLT/v3/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="DocHPLT/v3/bg-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="DocHPLT/v3/bg-is_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Georgian (sample file)" href="DocHPLT/v3/bg-ka_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="DocHPLT/v3/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="DocHPLT/v3/bg-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="DocHPLT/v3/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Maltese (sample file)" href="DocHPLT/v3/bg-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/bg-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/bg-nn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="DocHPLT/v3/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="DocHPLT/v3/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="DocHPLT/v3/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="DocHPLT/v3/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="DocHPLT/v3/bg-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Turkish (sample file)" href="DocHPLT/v3/bg-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="DocHPLT/v3/bg-uk_sample.html">view</a></td><th>bg</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/bs.zip">bs</a></th>
<td>3,366,647</td><td>2.5G</td><td>169.9M</td><td bgcolor='#cfffcf'><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (4.3M links)" href="download.php?f=DocHPLT/v3/xml/bg-bs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bosnian-Catalan (sample file)" href="DocHPLT/v3/bs-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Czech (sample file)" href="DocHPLT/v3/bs-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Danish (sample file)" href="DocHPLT/v3/bs-da_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Greek (sample file)" href="DocHPLT/v3/bs-el_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="DocHPLT/v3/bs-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Estonian (sample file)" href="DocHPLT/v3/bs-et_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Basque (sample file)" href="DocHPLT/v3/bs-eu_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Finnish (sample file)" href="DocHPLT/v3/bs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Irish (sample file)" href="DocHPLT/v3/bs-ga_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Galician (sample file)" href="DocHPLT/v3/bs-gl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="DocHPLT/v3/bs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hungarian (sample file)" href="DocHPLT/v3/bs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Icelandic (sample file)" href="DocHPLT/v3/bs-is_sample.html">view</a></td><th>bs</th>
<td><a rel="nofollow" title="Bosnian-Georgian (sample file)" href="DocHPLT/v3/bs-ka_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Lithuanian (sample file)" href="DocHPLT/v3/bs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Latvian (sample file)" href="DocHPLT/v3/bs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="DocHPLT/v3/bs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Maltese (sample file)" href="DocHPLT/v3/bs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/bs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/bs-nn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Romanian (sample file)" href="DocHPLT/v3/bs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovak (sample file)" href="DocHPLT/v3/bs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovenian (sample file)" href="DocHPLT/v3/bs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="DocHPLT/v3/bs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="DocHPLT/v3/bs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Turkish (sample file)" href="DocHPLT/v3/bs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Ukrainian (sample file)" href="DocHPLT/v3/bs-uk_sample.html">view</a></td><th>bs</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/ca.zip">ca</a></th>
<td>3,334,363</td><td>2.0G</td><td>136.0M</td><td bgcolor='#c8ffc8'><a rel="nofollow" title="sentence alignments for 'Catalan-Bulgarian' (7.3M links)" href="download.php?f=DocHPLT/v3/xml/bg-ca.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Catalan-Bosnian' (1.9M links)" href="download.php?f=DocHPLT/v3/xml/bs-ca.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Catalan-Czech (sample file)" href="DocHPLT/v3/ca-cs_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Danish (sample file)" href="DocHPLT/v3/ca-da_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Greek (sample file)" href="DocHPLT/v3/ca-el_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="DocHPLT/v3/ca-en_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Estonian (sample file)" href="DocHPLT/v3/ca-et_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Basque (sample file)" href="DocHPLT/v3/ca-eu_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Finnish (sample file)" href="DocHPLT/v3/ca-fi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Irish (sample file)" href="DocHPLT/v3/ca-ga_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Galician (sample file)" href="DocHPLT/v3/ca-gl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Croatian (sample file)" href="DocHPLT/v3/ca-hr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hungarian (sample file)" href="DocHPLT/v3/ca-hu_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Icelandic (sample file)" href="DocHPLT/v3/ca-is_sample.html">view</a></td><th>ca</th>
<td><a rel="nofollow" title="Catalan-Georgian (sample file)" href="DocHPLT/v3/ca-ka_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Lithuanian (sample file)" href="DocHPLT/v3/ca-lt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Latvian (sample file)" href="DocHPLT/v3/ca-lv_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Macedonian (sample file)" href="DocHPLT/v3/ca-mk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Maltese (sample file)" href="DocHPLT/v3/ca-mt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/ca-nb_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/ca-nn_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Romanian (sample file)" href="DocHPLT/v3/ca-ro_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovak (sample file)" href="DocHPLT/v3/ca-sk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovenian (sample file)" href="DocHPLT/v3/ca-sl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Albanian (sample file)" href="DocHPLT/v3/ca-sq_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Serbian (sample file)" href="DocHPLT/v3/ca-sr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Turkish (sample file)" href="DocHPLT/v3/ca-tr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Ukrainian (sample file)" href="DocHPLT/v3/ca-uk_sample.html">view</a></td><th>ca</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/cs.zip">cs</a></th>
<td>11,750,580</td><td>9.1G</td><td>730.9M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Czech-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-cs.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Czech-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-cs.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Czech-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-cs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Czech-Danish (sample file)" href="DocHPLT/v3/cs-da_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="DocHPLT/v3/cs-el_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Estonian (sample file)" href="DocHPLT/v3/cs-et_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Basque (sample file)" href="DocHPLT/v3/cs-eu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="DocHPLT/v3/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Irish (sample file)" href="DocHPLT/v3/cs-ga_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Galician (sample file)" href="DocHPLT/v3/cs-gl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Croatian (sample file)" href="DocHPLT/v3/cs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="DocHPLT/v3/cs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="DocHPLT/v3/cs-is_sample.html">view</a></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Georgian (sample file)" href="DocHPLT/v3/cs-ka_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Lithuanian (sample file)" href="DocHPLT/v3/cs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Latvian (sample file)" href="DocHPLT/v3/cs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Macedonian (sample file)" href="DocHPLT/v3/cs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Maltese (sample file)" href="DocHPLT/v3/cs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/cs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/cs-nn_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Romanian (sample file)" href="DocHPLT/v3/cs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovak (sample file)" href="DocHPLT/v3/cs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="DocHPLT/v3/cs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Albanian (sample file)" href="DocHPLT/v3/cs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Serbian (sample file)" href="DocHPLT/v3/cs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Turkish (sample file)" href="DocHPLT/v3/cs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="DocHPLT/v3/cs-uk_sample.html">view</a></td><th>cs</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/da.zip">da</a></th>
<td>14,536,511</td><td>10.6G</td><td>786.5M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Danish-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-da.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Danish-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-da.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Danish-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-da.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Danish-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-da.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Danish-Greek (sample file)" href="DocHPLT/v3/da-el_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Estonian (sample file)" href="DocHPLT/v3/da-et_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Basque (sample file)" href="DocHPLT/v3/da-eu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="DocHPLT/v3/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Irish (sample file)" href="DocHPLT/v3/da-ga_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Galician (sample file)" href="DocHPLT/v3/da-gl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Croatian (sample file)" href="DocHPLT/v3/da-hr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hungarian (sample file)" href="DocHPLT/v3/da-hu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="DocHPLT/v3/da-is_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Georgian (sample file)" href="DocHPLT/v3/da-ka_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Lithuanian (sample file)" href="DocHPLT/v3/da-lt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Latvian (sample file)" href="DocHPLT/v3/da-lv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Macedonian (sample file)" href="DocHPLT/v3/da-mk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Maltese (sample file)" href="DocHPLT/v3/da-mt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/da-nb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/da-nn_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Romanian (sample file)" href="DocHPLT/v3/da-ro_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovak (sample file)" href="DocHPLT/v3/da-sk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovenian (sample file)" href="DocHPLT/v3/da-sl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Albanian (sample file)" href="DocHPLT/v3/da-sq_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Serbian (sample file)" href="DocHPLT/v3/da-sr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Turkish (sample file)" href="DocHPLT/v3/da-tr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Ukrainian (sample file)" href="DocHPLT/v3/da-uk_sample.html">view</a></td><th>da</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/el.zip">el</a></th>
<td>13,037,951</td><td>9.5G</td><td>638.6M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-el.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Greek-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-el.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Greek-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-el.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Greek-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-el.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Greek-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-el.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Greek-Estonian (sample file)" href="DocHPLT/v3/el-et_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Basque (sample file)" href="DocHPLT/v3/el-eu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="DocHPLT/v3/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Irish (sample file)" href="DocHPLT/v3/el-ga_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Galician (sample file)" href="DocHPLT/v3/el-gl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="DocHPLT/v3/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hungarian (sample file)" href="DocHPLT/v3/el-hu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="DocHPLT/v3/el-is_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Georgian (sample file)" href="DocHPLT/v3/el-ka_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Lithuanian (sample file)" href="DocHPLT/v3/el-lt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Latvian (sample file)" href="DocHPLT/v3/el-lv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="DocHPLT/v3/el-mk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Maltese (sample file)" href="DocHPLT/v3/el-mt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/el-nb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/el-nn_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="DocHPLT/v3/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovak (sample file)" href="DocHPLT/v3/el-sk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="DocHPLT/v3/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Albanian (sample file)" href="DocHPLT/v3/el-sq_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Serbian (sample file)" href="DocHPLT/v3/el-sr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Turkish (sample file)" href="DocHPLT/v3/el-tr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="DocHPLT/v3/el-uk_sample.html">view</a></td><th>el</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/en.zip">en</a></th>
<td>88,237,304</td><td>73.0G</td><td>5.2G</td><td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (543.9M links)" href="download.php?f=DocHPLT/v3/xml/bg-en.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (163.4M links)" href="download.php?f=DocHPLT/v3/xml/bs-en.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'English-Catalan' (251.1M links)" href="download.php?f=DocHPLT/v3/xml/ca-en.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="English-Estonian (sample file)" href="DocHPLT/v3/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="DocHPLT/v3/en-eu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Irish (sample file)" href="DocHPLT/v3/en-ga_sample.html">view</a></td><td><a rel="nofollow" title="English-Galician (sample file)" href="DocHPLT/v3/en-gl_sample.html">view</a></td><td></td><td></td><td></td><th>en</th>
<td><a rel="nofollow" title="English-Georgian (sample file)" href="DocHPLT/v3/en-ka_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="DocHPLT/v3/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="DocHPLT/v3/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="DocHPLT/v3/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="DocHPLT/v3/en-mt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/en-nn_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="DocHPLT/v3/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="DocHPLT/v3/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="DocHPLT/v3/en-sr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="DocHPLT/v3/en-uk_sample.html">view</a></td><th>en</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/et.zip">et</a></th>
<td>2,564,772</td><td>164.5M</td><td>2.0G</td><td bgcolor='#c2ffc2'><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (10.9M links)" href="download.php?f=DocHPLT/v3/xml/bg-et.xml.gz">ces</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="sentence alignments for 'Estonian-Bosnian' (2.4M links)" href="download.php?f=DocHPLT/v3/xml/bs-et.xml.gz">ces</a></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Estonian-Catalan' (5.0M links)" href="download.php?f=DocHPLT/v3/xml/ca-et.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Estonian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-et.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Estonian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-et.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Estonian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-et.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Estonian-English' (225.2M links)" href="download.php?f=DocHPLT/v3/xml/en-et.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Estonian-Basque (sample file)" href="DocHPLT/v3/et-eu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="DocHPLT/v3/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Irish (sample file)" href="DocHPLT/v3/et-ga_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Galician (sample file)" href="DocHPLT/v3/et-gl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="DocHPLT/v3/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hungarian (sample file)" href="DocHPLT/v3/et-hu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="DocHPLT/v3/et-is_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Georgian (sample file)" href="DocHPLT/v3/et-ka_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="DocHPLT/v3/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="DocHPLT/v3/et-lv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Macedonian (sample file)" href="DocHPLT/v3/et-mk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Maltese (sample file)" href="DocHPLT/v3/et-mt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/et-nb_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/et-nn_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Romanian (sample file)" href="DocHPLT/v3/et-ro_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="DocHPLT/v3/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="DocHPLT/v3/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Albanian (sample file)" href="DocHPLT/v3/et-sq_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Serbian (sample file)" href="DocHPLT/v3/et-sr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Turkish (sample file)" href="DocHPLT/v3/et-tr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Ukrainian (sample file)" href="DocHPLT/v3/et-uk_sample.html">view</a></td><th>et</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/eu.zip">eu</a></th>
<td>474,241</td><td>285.2M</td><td>22.3M</td><td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Basque-Bulgarian' (1.4M links)" href="download.php?f=DocHPLT/v3/xml/bg-eu.xml.gz">ces</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Basque-Bosnian' (0.5M links)" href="download.php?f=DocHPLT/v3/xml/bs-eu.xml.gz">ces</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="sentence alignments for 'Basque-Catalan' (1.8M links)" href="download.php?f=DocHPLT/v3/xml/ca-eu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Basque-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-eu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Basque-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-eu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Basque-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-eu.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Basque-English' (30.4M links)" href="download.php?f=DocHPLT/v3/xml/en-eu.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Basque-Estonian' (1.3M links)" href="download.php?f=DocHPLT/v3/xml/et-eu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Basque-Finnish (sample file)" href="DocHPLT/v3/eu-fi_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Irish (sample file)" href="DocHPLT/v3/eu-ga_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Galician (sample file)" href="DocHPLT/v3/eu-gl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Croatian (sample file)" href="DocHPLT/v3/eu-hr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Hungarian (sample file)" href="DocHPLT/v3/eu-hu_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Icelandic (sample file)" href="DocHPLT/v3/eu-is_sample.html">view</a></td><th>eu</th>
<td><a rel="nofollow" title="Basque-Georgian (sample file)" href="DocHPLT/v3/eu-ka_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Lithuanian (sample file)" href="DocHPLT/v3/eu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Latvian (sample file)" href="DocHPLT/v3/eu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Macedonian (sample file)" href="DocHPLT/v3/eu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Maltese (sample file)" href="DocHPLT/v3/eu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/eu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/eu-nn_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Romanian (sample file)" href="DocHPLT/v3/eu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovak (sample file)" href="DocHPLT/v3/eu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovenian (sample file)" href="DocHPLT/v3/eu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Albanian (sample file)" href="DocHPLT/v3/eu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Serbian (sample file)" href="DocHPLT/v3/eu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Turkish (sample file)" href="DocHPLT/v3/eu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Ukrainian (sample file)" href="DocHPLT/v3/eu-uk_sample.html">view</a></td><th>eu</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/fi.zip">fi</a></th>
<td>9,529,743</td><td>580.8M</td><td>580.8M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-fi.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Finnish-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-fi.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Finnish-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-fi.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-fi.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-fi.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-fi.xml.gz">ces</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' ()" href="download.php?f=DocHPLT/v3/xml/et-fi.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Finnish-Basque' ()" href="download.php?f=DocHPLT/v3/xml/eu-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-Irish (sample file)" href="DocHPLT/v3/fi-ga_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Galician (sample file)" href="DocHPLT/v3/fi-gl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="DocHPLT/v3/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="DocHPLT/v3/fi-hu_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="DocHPLT/v3/fi-is_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Georgian (sample file)" href="DocHPLT/v3/fi-ka_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="DocHPLT/v3/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="DocHPLT/v3/fi-lv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Macedonian (sample file)" href="DocHPLT/v3/fi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Maltese (sample file)" href="DocHPLT/v3/fi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/fi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/fi-nn_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="DocHPLT/v3/fi-ro_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="DocHPLT/v3/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="DocHPLT/v3/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Albanian (sample file)" href="DocHPLT/v3/fi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Serbian (sample file)" href="DocHPLT/v3/fi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Turkish (sample file)" href="DocHPLT/v3/fi-tr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="DocHPLT/v3/fi-uk_sample.html">view</a></td><th>fi</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/ga.zip">ga</a></th>
<td>556,811</td><td>524.3M</td><td>28.9M</td><td bgcolor='#d5ffc9'><a rel="nofollow" title="sentence alignments for 'Irish-Bulgarian' (2.7M links)" href="download.php?f=DocHPLT/v3/xml/bg-ga.xml.gz">ces</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="sentence alignments for 'Irish-Bosnian' (0.6M links)" href="download.php?f=DocHPLT/v3/xml/bs-ga.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Irish-Catalan' (1.7M links)" href="download.php?f=DocHPLT/v3/xml/ca-ga.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Irish-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-ga.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Irish-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-ga.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Irish-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-ga.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Irish-English' (49.2M links)" href="download.php?f=DocHPLT/v3/xml/en-ga.xml.gz">ces</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="sentence alignments for 'Irish-Estonian' (2.2M links)" href="download.php?f=DocHPLT/v3/xml/et-ga.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Irish-Basque' (1.2M links)" href="download.php?f=DocHPLT/v3/xml/eu-ga.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Irish-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-ga.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Irish-Galician (sample file)" href="DocHPLT/v3/ga-gl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Croatian (sample file)" href="DocHPLT/v3/ga-hr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Hungarian (sample file)" href="DocHPLT/v3/ga-hu_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Icelandic (sample file)" href="DocHPLT/v3/ga-is_sample.html">view</a></td><th>ga</th>
<td><a rel="nofollow" title="Irish-Georgian (sample file)" href="DocHPLT/v3/ga-ka_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Lithuanian (sample file)" href="DocHPLT/v3/ga-lt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Latvian (sample file)" href="DocHPLT/v3/ga-lv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Macedonian (sample file)" href="DocHPLT/v3/ga-mk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Maltese (sample file)" href="DocHPLT/v3/ga-mt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/ga-nb_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/ga-nn_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Romanian (sample file)" href="DocHPLT/v3/ga-ro_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovak (sample file)" href="DocHPLT/v3/ga-sk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovenian (sample file)" href="DocHPLT/v3/ga-sl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Albanian (sample file)" href="DocHPLT/v3/ga-sq_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Serbian (sample file)" href="DocHPLT/v3/ga-sr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Turkish (sample file)" href="DocHPLT/v3/ga-tr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Ukrainian (sample file)" href="DocHPLT/v3/ga-uk_sample.html">view</a></td><th>ga</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/gl.zip">gl</a></th>
<td>563,973</td><td>389.3M</td><td>23.3M</td><td bgcolor='#d8ffc7'><a rel="nofollow" title="sentence alignments for 'Galician-Bulgarian' (2.0M links)" href="download.php?f=DocHPLT/v3/xml/bg-gl.xml.gz">ces</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="sentence alignments for 'Galician-Bosnian' (0.6M links)" href="download.php?f=DocHPLT/v3/xml/bs-gl.xml.gz">ces</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="sentence alignments for 'Galician-Catalan' (2.3M links)" href="download.php?f=DocHPLT/v3/xml/ca-gl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Galician-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-gl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Galician-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-gl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Galician-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-gl.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Galician-English' (35.3M links)" href="download.php?f=DocHPLT/v3/xml/en-gl.xml.gz">ces</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="sentence alignments for 'Galician-Estonian' (1.7M links)" href="download.php?f=DocHPLT/v3/xml/et-gl.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Galician-Basque' (1.6M links)" href="download.php?f=DocHPLT/v3/xml/eu-gl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Galician-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-gl.xml.gz">ces</a></td>
<td bgcolor='#dbffc7'><a rel="nofollow" title="sentence alignments for 'Galician-Irish' (1.6M links)" href="download.php?f=DocHPLT/v3/xml/ga-gl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Galician-Croatian (sample file)" href="DocHPLT/v3/gl-hr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Hungarian (sample file)" href="DocHPLT/v3/gl-hu_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Icelandic (sample file)" href="DocHPLT/v3/gl-is_sample.html">view</a></td><th>gl</th>
<td><a rel="nofollow" title="Galician-Georgian (sample file)" href="DocHPLT/v3/gl-ka_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Lithuanian (sample file)" href="DocHPLT/v3/gl-lt_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Latvian (sample file)" href="DocHPLT/v3/gl-lv_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Macedonian (sample file)" href="DocHPLT/v3/gl-mk_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Maltese (sample file)" href="DocHPLT/v3/gl-mt_sample.html">view</a></td><td><a rel="nofollow" title="Galician-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/gl-nb_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/gl-nn_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Romanian (sample file)" href="DocHPLT/v3/gl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Slovak (sample file)" href="DocHPLT/v3/gl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Slovenian (sample file)" href="DocHPLT/v3/gl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Albanian (sample file)" href="DocHPLT/v3/gl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Serbian (sample file)" href="DocHPLT/v3/gl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Turkish (sample file)" href="DocHPLT/v3/gl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Ukrainian (sample file)" href="DocHPLT/v3/gl-uk_sample.html">view</a></td><th>gl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/hr.zip">hr</a></th>
<td>5,693,362</td><td>5.0G</td><td>379.8M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-hr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-hr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-hr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-hr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-hr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-hr.xml.gz">ces</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' ()" href="download.php?f=DocHPLT/v3/xml/et-hr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Basque' ()" href="download.php?f=DocHPLT/v3/xml/eu-hr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-hr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Irish' ()" href="download.php?f=DocHPLT/v3/xml/ga-hr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Croatian-Galician' ()" href="download.php?f=DocHPLT/v3/xml/gl-hr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Hungarian (sample file)" href="DocHPLT/v3/hr-hu_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="DocHPLT/v3/hr-is_sample.html">view</a></td><th>hr</th>
<td><a rel="nofollow" title="Croatian-Georgian (sample file)" href="DocHPLT/v3/hr-ka_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="DocHPLT/v3/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="DocHPLT/v3/hr-lv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="DocHPLT/v3/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Maltese (sample file)" href="DocHPLT/v3/hr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/hr-nb_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/hr-nn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="DocHPLT/v3/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="DocHPLT/v3/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="DocHPLT/v3/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="DocHPLT/v3/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="DocHPLT/v3/hr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Turkish (sample file)" href="DocHPLT/v3/hr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="DocHPLT/v3/hr-uk_sample.html">view</a></td><th>hr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/hu.zip">hu</a></th>
<td>10,190,529</td><td>9.5G</td><td>758.3M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-hu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-hu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-hu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-hu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-hu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-hu.xml.gz">ces</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Estonian' ()" href="download.php?f=DocHPLT/v3/xml/et-hu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Basque' ()" href="download.php?f=DocHPLT/v3/xml/eu-hu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-hu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Irish' ()" href="download.php?f=DocHPLT/v3/xml/ga-hu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Galician' ()" href="download.php?f=DocHPLT/v3/xml/gl-hu.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-hu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="DocHPLT/v3/hu-is_sample.html">view</a></td><th>hu</th>
<td><a rel="nofollow" title="Hungarian-Georgian (sample file)" href="DocHPLT/v3/hu-ka_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Lithuanian (sample file)" href="DocHPLT/v3/hu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Latvian (sample file)" href="DocHPLT/v3/hu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Macedonian (sample file)" href="DocHPLT/v3/hu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Maltese (sample file)" href="DocHPLT/v3/hu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/hu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/hu-nn_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Romanian (sample file)" href="DocHPLT/v3/hu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovak (sample file)" href="DocHPLT/v3/hu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovenian (sample file)" href="DocHPLT/v3/hu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Albanian (sample file)" href="DocHPLT/v3/hu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Serbian (sample file)" href="DocHPLT/v3/hu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Turkish (sample file)" href="DocHPLT/v3/hu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="DocHPLT/v3/hu-uk_sample.html">view</a></td><th>hu</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/is.zip">is</a></th>
<td>1,168,430</td><td>749.2M</td><td>63.3M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-is.xml.gz">ces</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' ()" href="download.php?f=DocHPLT/v3/xml/et-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Basque' ()" href="download.php?f=DocHPLT/v3/xml/eu-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Irish' ()" href="download.php?f=DocHPLT/v3/xml/ga-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Galician' ()" href="download.php?f=DocHPLT/v3/xml/gl-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-is.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Icelandic-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-is.xml.gz">ces</a></td>
<th></th>
<th>is</th>
<td><a rel="nofollow" title="Icelandic-Georgian (sample file)" href="DocHPLT/v3/is-ka_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="DocHPLT/v3/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="DocHPLT/v3/is-lv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="DocHPLT/v3/is-mk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Maltese (sample file)" href="DocHPLT/v3/is-mt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/is-nb_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/is-nn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="DocHPLT/v3/is-ro_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="DocHPLT/v3/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="DocHPLT/v3/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Albanian (sample file)" href="DocHPLT/v3/is-sq_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Serbian (sample file)" href="DocHPLT/v3/is-sr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Turkish (sample file)" href="DocHPLT/v3/is-tr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Ukrainian (sample file)" href="DocHPLT/v3/is-uk_sample.html">view</a></td><th>is</th></tr>
<tr><th></th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>el</th>
<th>en</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>ga</th>
<th>gl</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th></th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>mt</th>
<th>nb</th>
<th>nn</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>tr</th>
<th>uk</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/ka.zip">ka</a></th>
<td>306,972</td><td>152.1M</td><td>8.3M</td><td bgcolor='#e3ffc7'><a rel="nofollow" title="sentence alignments for 'Georgian-Bulgarian' (0.7M links)" href="download.php?f=DocHPLT/v3/xml/bg-ka.xml.gz">ces</a></td>
<td bgcolor='#efffd0'><a rel="nofollow" title="sentence alignments for 'Georgian-Bosnian' (0.3M links)" href="download.php?f=DocHPLT/v3/xml/bs-ka.xml.gz">ces</a></td>
<td bgcolor='#e8ffca'><a rel="nofollow" title="sentence alignments for 'Georgian-Catalan' (0.4M links)" href="download.php?f=DocHPLT/v3/xml/ca-ka.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Georgian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-ka.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Georgian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-ka.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Georgian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-ka.xml.gz">ces</a></td>
<td bgcolor='#ccffcc'><a rel="nofollow" title="sentence alignments for 'Georgian-English' (5.7M links)" href="download.php?f=DocHPLT/v3/xml/en-ka.xml.gz">ces</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Georgian-Estonian' (0.5M links)" href="download.php?f=DocHPLT/v3/xml/et-ka.xml.gz">ces</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="sentence alignments for 'Georgian-Basque' (0.4M links)" href="download.php?f=DocHPLT/v3/xml/eu-ka.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Georgian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-ka.xml.gz">ces</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="sentence alignments for 'Georgian-Irish' (0.4M links)" href="download.php?f=DocHPLT/v3/xml/ga-ka.xml.gz">ces</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="sentence alignments for 'Georgian-Galician' (0.4M links)" href="download.php?f=DocHPLT/v3/xml/gl-ka.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Georgian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-ka.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Georgian-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-ka.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Georgian-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-ka.xml.gz">ces</a></td>
<th>ka</th>
<th></th>
<td><a rel="nofollow" title="Georgian-Lithuanian (sample file)" href="DocHPLT/v3/ka-lt_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Latvian (sample file)" href="DocHPLT/v3/ka-lv_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Macedonian (sample file)" href="DocHPLT/v3/ka-mk_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Maltese (sample file)" href="DocHPLT/v3/ka-mt_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/ka-nb_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/ka-nn_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Romanian (sample file)" href="DocHPLT/v3/ka-ro_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Slovak (sample file)" href="DocHPLT/v3/ka-sk_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Slovenian (sample file)" href="DocHPLT/v3/ka-sl_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Albanian (sample file)" href="DocHPLT/v3/ka-sq_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Serbian (sample file)" href="DocHPLT/v3/ka-sr_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Turkish (sample file)" href="DocHPLT/v3/ka-tr_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Ukrainian (sample file)" href="DocHPLT/v3/ka-uk_sample.html">view</a></td><th>ka</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/lt.zip">lt</a></th>
<td>4,192,582</td><td>3.7G</td><td>306.7M</td><td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (15.2M links)" href="download.php?f=DocHPLT/v3/xml/bg-lt.xml.gz">ces</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bosnian' (3.2M links)" href="download.php?f=DocHPLT/v3/xml/bs-lt.xml.gz">ces</a></td>
<td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Catalan' (6.3M links)" href="download.php?f=DocHPLT/v3/xml/ca-lt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-lt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-lt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-lt.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (397.3M links)" href="download.php?f=DocHPLT/v3/xml/en-lt.xml.gz">ces</a></td>
<td bgcolor='#c0ffc0'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (12.5M links)" href="download.php?f=DocHPLT/v3/xml/et-lt.xml.gz">ces</a></td>
<td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Basque' (1.3M links)" href="download.php?f=DocHPLT/v3/xml/eu-lt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-lt.xml.gz">ces</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Irish' (2.4M links)" href="download.php?f=DocHPLT/v3/xml/ga-lt.xml.gz">ces</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Galician' (1.7M links)" href="download.php?f=DocHPLT/v3/xml/gl-lt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-lt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-lt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-lt.xml.gz">ces</a></td>
<th>lt</th>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Georgian' (0.6M links)" href="download.php?f=DocHPLT/v3/xml/ka-lt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="DocHPLT/v3/lt-lv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Macedonian (sample file)" href="DocHPLT/v3/lt-mk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Maltese (sample file)" href="DocHPLT/v3/lt-mt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/lt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/lt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Romanian (sample file)" href="DocHPLT/v3/lt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="DocHPLT/v3/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="DocHPLT/v3/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Albanian (sample file)" href="DocHPLT/v3/lt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Serbian (sample file)" href="DocHPLT/v3/lt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Turkish (sample file)" href="DocHPLT/v3/lt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Ukrainian (sample file)" href="DocHPLT/v3/lt-uk_sample.html">view</a></td><th>lt</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/lv.zip">lv</a></th>
<td>3,188,578</td><td>3.1G</td><td>244.3M</td><td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (14.0M links)" href="download.php?f=DocHPLT/v3/xml/bg-lv.xml.gz">ces</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="sentence alignments for 'Latvian-Bosnian' (3.0M links)" href="download.php?f=DocHPLT/v3/xml/bs-lv.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Latvian-Catalan' (6.1M links)" href="download.php?f=DocHPLT/v3/xml/ca-lv.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Latvian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-lv.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Latvian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-lv.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Latvian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-lv.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Latvian-English' (357.8M links)" href="download.php?f=DocHPLT/v3/xml/en-lv.xml.gz">ces</a></td>
<td bgcolor='#c0ffc0'><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (12.3M links)" href="download.php?f=DocHPLT/v3/xml/et-lv.xml.gz">ces</a></td>
<td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Latvian-Basque' (1.3M links)" href="download.php?f=DocHPLT/v3/xml/eu-lv.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-lv.xml.gz">ces</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="sentence alignments for 'Latvian-Irish' (2.4M links)" href="download.php?f=DocHPLT/v3/xml/ga-lv.xml.gz">ces</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="sentence alignments for 'Latvian-Galician' (1.7M links)" href="download.php?f=DocHPLT/v3/xml/gl-lv.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-lv.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Latvian-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-lv.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-lv.xml.gz">ces</a></td>
<th>lv</th>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="sentence alignments for 'Latvian-Georgian' (0.5M links)" href="download.php?f=DocHPLT/v3/xml/ka-lv.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (17.9M links)" href="download.php?f=DocHPLT/v3/xml/lt-lv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Latvian-Macedonian (sample file)" href="DocHPLT/v3/lv-mk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Maltese (sample file)" href="DocHPLT/v3/lv-mt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/lv-nb_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/lv-nn_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Romanian (sample file)" href="DocHPLT/v3/lv-ro_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="DocHPLT/v3/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="DocHPLT/v3/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Albanian (sample file)" href="DocHPLT/v3/lv-sq_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Serbian (sample file)" href="DocHPLT/v3/lv-sr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Turkish (sample file)" href="DocHPLT/v3/lv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="DocHPLT/v3/lv-uk_sample.html">view</a></td><th>lv</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/mk.zip">mk</a></th>
<td>923,161</td><td>34.7M</td><td>34.7M</td><td bgcolor='#d4ffc9'><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (2.8M links)" href="download.php?f=DocHPLT/v3/xml/bg-mk.xml.gz">ces</a></td>
<td bgcolor='#dfffc7'><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (1.1M links)" href="download.php?f=DocHPLT/v3/xml/bs-mk.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Macedonian-Catalan' (1.7M links)" href="download.php?f=DocHPLT/v3/xml/ca-mk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Macedonian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-mk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Macedonian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-mk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Macedonian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-mk.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (40.6M links)" href="download.php?f=DocHPLT/v3/xml/en-mk.xml.gz">ces</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="sentence alignments for 'Macedonian-Estonian' (2.0M links)" href="download.php?f=DocHPLT/v3/xml/et-mk.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Macedonian-Basque' (1.2M links)" href="download.php?f=DocHPLT/v3/xml/eu-mk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Macedonian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-mk.xml.gz">ces</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="sentence alignments for 'Macedonian-Irish' (1.7M links)" href="download.php?f=DocHPLT/v3/xml/ga-mk.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Macedonian-Galician' (1.5M links)" href="download.php?f=DocHPLT/v3/xml/gl-mk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-mk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Macedonian-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-mk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Macedonian-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-mk.xml.gz">ces</a></td>
<th>mk</th>
<td bgcolor='#e7ffca'><a rel="nofollow" title="sentence alignments for 'Macedonian-Georgian' (0.5M links)" href="download.php?f=DocHPLT/v3/xml/ka-mk.xml.gz">ces</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="sentence alignments for 'Macedonian-Lithuanian' (2.2M links)" href="download.php?f=DocHPLT/v3/xml/lt-mk.xml.gz">ces</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="sentence alignments for 'Macedonian-Latvian' (2.1M links)" href="download.php?f=DocHPLT/v3/xml/lv-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Maltese (sample file)" href="DocHPLT/v3/mk-mt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/mk-nb_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/mk-nn_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Romanian (sample file)" href="DocHPLT/v3/mk-ro_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovak (sample file)" href="DocHPLT/v3/mk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovenian (sample file)" href="DocHPLT/v3/mk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="DocHPLT/v3/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="DocHPLT/v3/mk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Turkish (sample file)" href="DocHPLT/v3/mk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Ukrainian (sample file)" href="DocHPLT/v3/mk-uk_sample.html">view</a></td><th>mk</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/mt.zip">mt</a></th>
<td>557,906</td><td>679.7M</td><td>41.6M</td><td bgcolor='#d1ffcd'><a rel="nofollow" title="sentence alignments for 'Maltese-Bulgarian' (3.6M links)" href="download.php?f=DocHPLT/v3/xml/bg-mt.xml.gz">ces</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="sentence alignments for 'Maltese-Bosnian' (0.6M links)" href="download.php?f=DocHPLT/v3/xml/bs-mt.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Catalan' (1.6M links)" href="download.php?f=DocHPLT/v3/xml/ca-mt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Maltese-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-mt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Maltese-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-mt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Maltese-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-mt.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Maltese-English' (67.8M links)" href="download.php?f=DocHPLT/v3/xml/en-mt.xml.gz">ces</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="sentence alignments for 'Maltese-Estonian' (3.0M links)" href="download.php?f=DocHPLT/v3/xml/et-mt.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Basque' (1.0M links)" href="download.php?f=DocHPLT/v3/xml/eu-mt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Maltese-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-mt.xml.gz">ces</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="sentence alignments for 'Maltese-Irish' (2.0M links)" href="download.php?f=DocHPLT/v3/xml/ga-mt.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Galician' (1.5M links)" href="download.php?f=DocHPLT/v3/xml/gl-mt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Maltese-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-mt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Maltese-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-mt.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Maltese-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-mt.xml.gz">ces</a></td>
<th>mt</th>
<td bgcolor='#ebffcd'><a rel="nofollow" title="sentence alignments for 'Maltese-Georgian' (0.3M links)" href="download.php?f=DocHPLT/v3/xml/ka-mt.xml.gz">ces</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="sentence alignments for 'Maltese-Lithuanian' (3.5M links)" href="download.php?f=DocHPLT/v3/xml/lt-mt.xml.gz">ces</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="sentence alignments for 'Maltese-Latvian' (3.5M links)" href="download.php?f=DocHPLT/v3/xml/lv-mt.xml.gz">ces</a></td>
<td bgcolor='#dbffc7'><a rel="nofollow" title="sentence alignments for 'Maltese-Macedonian' (1.6M links)" href="download.php?f=DocHPLT/v3/xml/mk-mt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Maltese-BokmÃ¥l, Norwegian (sample file)" href="DocHPLT/v3/mt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/mt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Romanian (sample file)" href="DocHPLT/v3/mt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovak (sample file)" href="DocHPLT/v3/mt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovenian (sample file)" href="DocHPLT/v3/mt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Albanian (sample file)" href="DocHPLT/v3/mt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Serbian (sample file)" href="DocHPLT/v3/mt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Turkish (sample file)" href="DocHPLT/v3/mt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Ukrainian (sample file)" href="DocHPLT/v3/mt-uk_sample.html">view</a></td><th>mt</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/nb.zip">nb</a></th>
<td>5,945,724</td><td>324.5M</td><td>324.5M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-nb.xml.gz">ces</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Estonian' ()" href="download.php?f=DocHPLT/v3/xml/et-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Basque' ()" href="download.php?f=DocHPLT/v3/xml/eu-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Irish' ()" href="download.php?f=DocHPLT/v3/xml/ga-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Galician' ()" href="download.php?f=DocHPLT/v3/xml/gl-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-nb.xml.gz">ces</a></td>
<th>nb</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Georgian' ()" href="download.php?f=DocHPLT/v3/xml/ka-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Lithuanian' ()" href="download.php?f=DocHPLT/v3/xml/lt-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Latvian' ()" href="download.php?f=DocHPLT/v3/xml/lv-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Macedonian' ()" href="download.php?f=DocHPLT/v3/xml/mk-nb.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Maltese' ()" href="download.php?f=DocHPLT/v3/xml/mt-nb.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Norwegian Nynorsk (sample file)" href="DocHPLT/v3/nb-nn_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Romanian (sample file)" href="DocHPLT/v3/nb-ro_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovak (sample file)" href="DocHPLT/v3/nb-sk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovenian (sample file)" href="DocHPLT/v3/nb-sl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Albanian (sample file)" href="DocHPLT/v3/nb-sq_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Serbian (sample file)" href="DocHPLT/v3/nb-sr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Turkish (sample file)" href="DocHPLT/v3/nb-tr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Ukrainian (sample file)" href="DocHPLT/v3/nb-uk_sample.html">view</a></td><th>nb</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/nn.zip">nn</a></th>
<td>135,884</td><td>83.2M</td><td>6.0M</td><td bgcolor='#ffffef'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Bulgarian' (0.1M links)" href="download.php?f=DocHPLT/v3/xml/bg-nn.xml.gz">ces</a></td>
<td bgcolor='#ffefea'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Bosnian' (32.1k links)" href="download.php?f=DocHPLT/v3/xml/bs-nn.xml.gz">ces</a></td>
<td bgcolor='#fffaf1'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Catalan' (60.0k links)" href="download.php?f=DocHPLT/v3/xml/ca-nn.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-nn.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-nn.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-nn.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-English' (5.9M links)" href="download.php?f=DocHPLT/v3/xml/en-nn.xml.gz">ces</a></td>
<td bgcolor='#fff6ef'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Estonian' (46.2k links)" href="download.php?f=DocHPLT/v3/xml/et-nn.xml.gz">ces</a></td>
<td bgcolor='#ffe4e2'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Basque' (17.7k links)" href="download.php?f=DocHPLT/v3/xml/eu-nn.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-nn.xml.gz">ces</a></td>
<td bgcolor='#ffe1df'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Irish' (14.8k links)" href="download.php?f=DocHPLT/v3/xml/ga-nn.xml.gz">ces</a></td>
<td bgcolor='#ffebe7'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Galician' (26.7k links)" href="download.php?f=DocHPLT/v3/xml/gl-nn.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-nn.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-nn.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-nn.xml.gz">ces</a></td>
<th>nn</th>
<td bgcolor='#ffd5d5'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Georgian' (4.0k links)" href="download.php?f=DocHPLT/v3/xml/ka-nn.xml.gz">ces</a></td>
<td bgcolor='#fffef0'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Lithuanian' (89.3k links)" href="download.php?f=DocHPLT/v3/xml/lt-nn.xml.gz">ces</a></td>
<td bgcolor='#fff8f0'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Latvian' (53.0k links)" href="download.php?f=DocHPLT/v3/xml/lv-nn.xml.gz">ces</a></td>
<td bgcolor='#ffe8e5'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Macedonian' (22.7k links)" href="download.php?f=DocHPLT/v3/xml/mk-nn.xml.gz">ces</a></td>
<td bgcolor='#ffdddc'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Maltese' (10.3k links)" href="download.php?f=DocHPLT/v3/xml/mt-nn.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-BokmÃ¥l, Norwegian' ()" href="download.php?f=DocHPLT/v3/xml/nb-nn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Norwegian Nynorsk-Romanian (sample file)" href="DocHPLT/v3/nn-ro_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Slovak (sample file)" href="DocHPLT/v3/nn-sk_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Slovenian (sample file)" href="DocHPLT/v3/nn-sl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Albanian (sample file)" href="DocHPLT/v3/nn-sq_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Serbian (sample file)" href="DocHPLT/v3/nn-sr_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Turkish (sample file)" href="DocHPLT/v3/nn-tr_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Ukrainian (sample file)" href="DocHPLT/v3/nn-uk_sample.html">view</a></td><th>nn</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/ro.zip">ro</a></th>
<td>13,589,930</td><td>12.5G</td><td>827.2M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-ro.xml.gz">ces</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Estonian' ()" href="download.php?f=DocHPLT/v3/xml/et-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Basque' ()" href="download.php?f=DocHPLT/v3/xml/eu-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Irish' ()" href="download.php?f=DocHPLT/v3/xml/ga-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Galician' ()" href="download.php?f=DocHPLT/v3/xml/gl-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-ro.xml.gz">ces</a></td>
<th>ro</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Georgian' ()" href="download.php?f=DocHPLT/v3/xml/ka-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Lithuanian' ()" href="download.php?f=DocHPLT/v3/xml/lt-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Latvian' ()" href="download.php?f=DocHPLT/v3/xml/lv-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Macedonian' ()" href="download.php?f=DocHPLT/v3/xml/mk-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Maltese' ()" href="download.php?f=DocHPLT/v3/xml/mt-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-BokmÃ¥l, Norwegian' ()" href="download.php?f=DocHPLT/v3/xml/nb-ro.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Norwegian Nynorsk' ()" href="download.php?f=DocHPLT/v3/xml/nn-ro.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Slovak (sample file)" href="DocHPLT/v3/ro-sk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovenian (sample file)" href="DocHPLT/v3/ro-sl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Albanian (sample file)" href="DocHPLT/v3/ro-sq_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Serbian (sample file)" href="DocHPLT/v3/ro-sr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Turkish (sample file)" href="DocHPLT/v3/ro-tr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Ukrainian (sample file)" href="DocHPLT/v3/ro-uk_sample.html">view</a></td><th>ro</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/sk.zip">sk</a></th>
<td>6,394,803</td><td>408.4M</td><td>408.4M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-sk.xml.gz">ces</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' ()" href="download.php?f=DocHPLT/v3/xml/et-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Basque' ()" href="download.php?f=DocHPLT/v3/xml/eu-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Irish' ()" href="download.php?f=DocHPLT/v3/xml/ga-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Galician' ()" href="download.php?f=DocHPLT/v3/xml/gl-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-sk.xml.gz">ces</a></td>
<th>sk</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Georgian' ()" href="download.php?f=DocHPLT/v3/xml/ka-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' ()" href="download.php?f=DocHPLT/v3/xml/lt-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' ()" href="download.php?f=DocHPLT/v3/xml/lv-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Macedonian' ()" href="download.php?f=DocHPLT/v3/xml/mk-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Maltese' ()" href="download.php?f=DocHPLT/v3/xml/mt-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-BokmÃ¥l, Norwegian' ()" href="download.php?f=DocHPLT/v3/xml/nb-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Norwegian Nynorsk' ()" href="download.php?f=DocHPLT/v3/xml/nn-sk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Romanian' ()" href="download.php?f=DocHPLT/v3/xml/ro-sk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="DocHPLT/v3/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Albanian (sample file)" href="DocHPLT/v3/sk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Serbian (sample file)" href="DocHPLT/v3/sk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Turkish (sample file)" href="DocHPLT/v3/sk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="DocHPLT/v3/sk-uk_sample.html">view</a></td><th>sk</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/sl.zip">sl</a></th>
<td>2,572,467</td><td>2.7G</td><td>187.7M</td><td bgcolor='#c2ffc2'><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (11.2M links)" href="download.php?f=DocHPLT/v3/xml/bg-sl.xml.gz">ces</a></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="sentence alignments for 'Slovenian-Bosnian' (2.9M links)" href="download.php?f=DocHPLT/v3/xml/bs-sl.xml.gz">ces</a></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Slovenian-Catalan' (5.1M links)" href="download.php?f=DocHPLT/v3/xml/ca-sl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-sl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovenian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-sl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-sl.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (251.9M links)" href="download.php?f=DocHPLT/v3/xml/en-sl.xml.gz">ces</a></td>
<td bgcolor='#c5ffc5'><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (8.9M links)" href="download.php?f=DocHPLT/v3/xml/et-sl.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Slovenian-Basque' (1.2M links)" href="download.php?f=DocHPLT/v3/xml/eu-sl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-sl.xml.gz">ces</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="sentence alignments for 'Slovenian-Irish' (2.2M links)" href="download.php?f=DocHPLT/v3/xml/ga-sl.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Slovenian-Galician' (1.6M links)" href="download.php?f=DocHPLT/v3/xml/gl-sl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-sl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovenian-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-sl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-sl.xml.gz">ces</a></td>
<th>sl</th>
<td bgcolor='#e7ffca'><a rel="nofollow" title="sentence alignments for 'Slovenian-Georgian' (0.5M links)" href="download.php?f=DocHPLT/v3/xml/ka-sl.xml.gz">ces</a></td>
<td bgcolor='#c3ffc3'><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (10.5M links)" href="download.php?f=DocHPLT/v3/xml/lt-sl.xml.gz">ces</a></td>
<td bgcolor='#c3ffc3'><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (10.3M links)" href="download.php?f=DocHPLT/v3/xml/lv-sl.xml.gz">ces</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="sentence alignments for 'Slovenian-Macedonian' (2.0M links)" href="download.php?f=DocHPLT/v3/xml/mk-sl.xml.gz">ces</a></td>
<td bgcolor='#d2ffcc'><a rel="nofollow" title="sentence alignments for 'Slovenian-Maltese' (3.4M links)" href="download.php?f=DocHPLT/v3/xml/mt-sl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovenian-BokmÃ¥l, Norwegian' ()" href="download.php?f=DocHPLT/v3/xml/nb-sl.xml.gz">ces</a></td>
<td bgcolor='#fffaf1'><a rel="nofollow" title="sentence alignments for 'Slovenian-Norwegian Nynorsk' (59.5k links)" href="download.php?f=DocHPLT/v3/xml/nn-sl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovenian-Romanian' ()" href="download.php?f=DocHPLT/v3/xml/ro-sl.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' ()" href="download.php?f=DocHPLT/v3/xml/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Albanian (sample file)" href="DocHPLT/v3/sl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Serbian (sample file)" href="DocHPLT/v3/sl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Turkish (sample file)" href="DocHPLT/v3/sl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="DocHPLT/v3/sl-uk_sample.html">view</a></td><th>sl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/sq.zip">sq</a></th>
<td>1,208,363</td><td>800.9M</td><td>44.4M</td><td bgcolor='#d4ffcb'><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (3.0M links)" href="download.php?f=DocHPLT/v3/xml/bg-sq.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (1.2M links)" href="download.php?f=DocHPLT/v3/xml/bs-sq.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Albanian-Catalan' (1.9M links)" href="download.php?f=DocHPLT/v3/xml/ca-sq.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Albanian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-sq.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Albanian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-sq.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Albanian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-sq.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Albanian-English' (53.1M links)" href="download.php?f=DocHPLT/v3/xml/en-sq.xml.gz">ces</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="sentence alignments for 'Albanian-Estonian' (2.1M links)" href="download.php?f=DocHPLT/v3/xml/et-sq.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Basque' (1.2M links)" href="download.php?f=DocHPLT/v3/xml/eu-sq.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Albanian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-sq.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Irish' (1.6M links)" href="download.php?f=DocHPLT/v3/xml/ga-sq.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Galician' (1.6M links)" href="download.php?f=DocHPLT/v3/xml/gl-sq.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-sq.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Albanian-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-sq.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Albanian-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-sq.xml.gz">ces</a></td>
<th>sq</th>
<td bgcolor='#e7ffca'><a rel="nofollow" title="sentence alignments for 'Albanian-Georgian' (0.5M links)" href="download.php?f=DocHPLT/v3/xml/ka-sq.xml.gz">ces</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="sentence alignments for 'Albanian-Lithuanian' (2.2M links)" href="download.php?f=DocHPLT/v3/xml/lt-sq.xml.gz">ces</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="sentence alignments for 'Albanian-Latvian' (2.2M links)" href="download.php?f=DocHPLT/v3/xml/lv-sq.xml.gz">ces</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (2.3M links)" href="download.php?f=DocHPLT/v3/xml/mk-sq.xml.gz">ces</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="sentence alignments for 'Albanian-Maltese' (1.7M links)" href="download.php?f=DocHPLT/v3/xml/mt-sq.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Albanian-BokmÃ¥l, Norwegian' ()" href="download.php?f=DocHPLT/v3/xml/nb-sq.xml.gz">ces</a></td>
<td bgcolor='#ffe4e2'><a rel="nofollow" title="sentence alignments for 'Albanian-Norwegian Nynorsk' (18.1k links)" href="download.php?f=DocHPLT/v3/xml/nn-sq.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Albanian-Romanian' ()" href="download.php?f=DocHPLT/v3/xml/ro-sq.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Albanian-Slovak' ()" href="download.php?f=DocHPLT/v3/xml/sk-sq.xml.gz">ces</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="sentence alignments for 'Albanian-Slovenian' (2.0M links)" href="download.php?f=DocHPLT/v3/xml/sl-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="DocHPLT/v3/sq-sr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Turkish (sample file)" href="DocHPLT/v3/sq-tr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Ukrainian (sample file)" href="DocHPLT/v3/sq-uk_sample.html">view</a></td><th>sq</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/sr.zip">sr</a></th>
<td>1,196,766</td><td>82.8M</td><td>1.1G</td><td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (5.8M links)" href="download.php?f=DocHPLT/v3/xml/bg-sr.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (1.6M links)" href="download.php?f=DocHPLT/v3/xml/bs-sr.xml.gz">ces</a></td>
<td bgcolor='#d2ffcc'><a rel="nofollow" title="sentence alignments for 'Serbian-Catalan' (3.4M links)" href="download.php?f=DocHPLT/v3/xml/ca-sr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-sr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-sr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-sr.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Serbian-English' (112.3M links)" href="download.php?f=DocHPLT/v3/xml/en-sr.xml.gz">ces</a></td>
<td bgcolor='#d0ffcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Estonian' (4.0M links)" href="download.php?f=DocHPLT/v3/xml/et-sr.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Serbian-Basque' (1.1M links)" href="download.php?f=DocHPLT/v3/xml/eu-sr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-sr.xml.gz">ces</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="sentence alignments for 'Serbian-Irish' (1.8M links)" href="download.php?f=DocHPLT/v3/xml/ga-sr.xml.gz">ces</a></td>
<td bgcolor='#dbffc7'><a rel="nofollow" title="sentence alignments for 'Serbian-Galician' (1.6M links)" href="download.php?f=DocHPLT/v3/xml/gl-sr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-sr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-sr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-sr.xml.gz">ces</a></td>
<th>sr</th>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Serbian-Georgian' (0.5M links)" href="download.php?f=DocHPLT/v3/xml/ka-sr.xml.gz">ces</a></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Serbian-Lithuanian' (5.2M links)" href="download.php?f=DocHPLT/v3/xml/lt-sr.xml.gz">ces</a></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="sentence alignments for 'Serbian-Latvian' (4.8M links)" href="download.php?f=DocHPLT/v3/xml/lv-sr.xml.gz">ces</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (2.1M links)" href="download.php?f=DocHPLT/v3/xml/mk-sr.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Serbian-Maltese' (1.6M links)" href="download.php?f=DocHPLT/v3/xml/mt-sr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Serbian-BokmÃ¥l, Norwegian' ()" href="download.php?f=DocHPLT/v3/xml/nb-sr.xml.gz">ces</a></td>
<td bgcolor='#fff1ec'><a rel="nofollow" title="sentence alignments for 'Serbian-Norwegian Nynorsk' (36.9k links)" href="download.php?f=DocHPLT/v3/xml/nn-sr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Romanian' ()" href="download.php?f=DocHPLT/v3/xml/ro-sr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Slovak' ()" href="download.php?f=DocHPLT/v3/xml/sk-sr.xml.gz">ces</a></td>
<td bgcolor='#d0ffce'><a rel="nofollow" title="sentence alignments for 'Serbian-Slovenian' (3.9M links)" href="download.php?f=DocHPLT/v3/xml/sl-sr.xml.gz">ces</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (2.1M links)" href="download.php?f=DocHPLT/v3/xml/sq-sr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Turkish (sample file)" href="DocHPLT/v3/sr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Ukrainian (sample file)" href="DocHPLT/v3/sr-uk_sample.html">view</a></td><th>sr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/tr.zip">tr</a></th>
<td>15,906,573</td><td>9.6G</td><td>535.2M</td><td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Bulgarian' ()" href="download.php?f=DocHPLT/v3/xml/bg-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Bosnian' ()" href="download.php?f=DocHPLT/v3/xml/bs-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Catalan' ()" href="download.php?f=DocHPLT/v3/xml/ca-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-tr.xml.gz">ces</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Estonian' ()" href="download.php?f=DocHPLT/v3/xml/et-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Basque' ()" href="download.php?f=DocHPLT/v3/xml/eu-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Irish' ()" href="download.php?f=DocHPLT/v3/xml/ga-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Galician' ()" href="download.php?f=DocHPLT/v3/xml/gl-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-tr.xml.gz">ces</a></td>
<th>tr</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Georgian' ()" href="download.php?f=DocHPLT/v3/xml/ka-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Lithuanian' ()" href="download.php?f=DocHPLT/v3/xml/lt-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Latvian' ()" href="download.php?f=DocHPLT/v3/xml/lv-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Macedonian' ()" href="download.php?f=DocHPLT/v3/xml/mk-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Maltese' ()" href="download.php?f=DocHPLT/v3/xml/mt-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-BokmÃ¥l, Norwegian' ()" href="download.php?f=DocHPLT/v3/xml/nb-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Norwegian Nynorsk' ()" href="download.php?f=DocHPLT/v3/xml/nn-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Romanian' ()" href="download.php?f=DocHPLT/v3/xml/ro-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Slovak' ()" href="download.php?f=DocHPLT/v3/xml/sk-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Slovenian' ()" href="download.php?f=DocHPLT/v3/xml/sl-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Albanian' ()" href="download.php?f=DocHPLT/v3/xml/sq-tr.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Serbian' ()" href="download.php?f=DocHPLT/v3/xml/sr-tr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Turkish-Ukrainian (sample file)" href="DocHPLT/v3/tr-uk_sample.html">view</a></td><th>tr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DocHPLT/v3/raw/uk.zip">uk</a></th>
<td>548,288</td><td>377.4M</td><td>36.9M</td><td bgcolor='#d7ffc7'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (2.2M links)" href="download.php?f=DocHPLT/v3/xml/bg-uk.xml.gz">ces</a></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bosnian' (0.5M links)" href="download.php?f=DocHPLT/v3/xml/bs-uk.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Catalan' (1.7M links)" href="download.php?f=DocHPLT/v3/xml/ca-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Czech' ()" href="download.php?f=DocHPLT/v3/xml/cs-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Danish' ()" href="download.php?f=DocHPLT/v3/xml/da-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' ()" href="download.php?f=DocHPLT/v3/xml/el-uk.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (60.7M links)" href="download.php?f=DocHPLT/v3/xml/en-uk.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Estonian' (1.3M links)" href="download.php?f=DocHPLT/v3/xml/et-uk.xml.gz">ces</a></td>
<td bgcolor='#fffef1'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Basque' (86.6k links)" href="download.php?f=DocHPLT/v3/xml/eu-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Finnish' ()" href="download.php?f=DocHPLT/v3/xml/fi-uk.xml.gz">ces</a></td>
<td bgcolor='#ffffe8'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Irish' (0.1M links)" href="download.php?f=DocHPLT/v3/xml/ga-uk.xml.gz">ces</a></td>
<td bgcolor='#ffffed'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Galician' (0.1M links)" href="download.php?f=DocHPLT/v3/xml/gl-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' ()" href="download.php?f=DocHPLT/v3/xml/hr-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hungarian' ()" href="download.php?f=DocHPLT/v3/xml/hu-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Icelandic' ()" href="download.php?f=DocHPLT/v3/xml/is-uk.xml.gz">ces</a></td>
<th>uk</th>
<td bgcolor='#ffebe7'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Georgian' (26.0k links)" href="download.php?f=DocHPLT/v3/xml/ka-uk.xml.gz">ces</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Lithuanian' (2.1M links)" href="download.php?f=DocHPLT/v3/xml/lt-uk.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Latvian' (1.9M links)" href="download.php?f=DocHPLT/v3/xml/lv-uk.xml.gz">ces</a></td>
<td bgcolor='#ffffea'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Macedonian' (0.1M links)" href="download.php?f=DocHPLT/v3/xml/mk-uk.xml.gz">ces</a></td>
<td bgcolor='#ffffec'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Maltese' (0.1M links)" href="download.php?f=DocHPLT/v3/xml/mt-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-BokmÃ¥l, Norwegian' ()" href="download.php?f=DocHPLT/v3/xml/nb-uk.xml.gz">ces</a></td>
<td bgcolor='#ffe4e2'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Norwegian Nynorsk' (17.3k links)" href="download.php?f=DocHPLT/v3/xml/nn-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Romanian' ()" href="download.php?f=DocHPLT/v3/xml/ro-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovak' ()" href="download.php?f=DocHPLT/v3/xml/sk-uk.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (1.3M links)" href="download.php?f=DocHPLT/v3/xml/sl-uk.xml.gz">ces</a></td>
<td bgcolor='#ffffe4'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Albanian' (0.2M links)" href="download.php?f=DocHPLT/v3/xml/sq-uk.xml.gz">ces</a></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Serbian' (0.9M links)" href="download.php?f=DocHPLT/v3/xml/sr-uk.xml.gz">ces</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Turkish' ()" href="download.php?f=DocHPLT/v3/xml/tr-uk.xml.gz">ces</a></td>
<th></th>
<th>uk</th></tr>
<tr><th></th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>el</th>
<th>en</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>ga</th>
<th>gl</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th></th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>mt</th>
<th>nb</th>
<th>nn</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>tr</th>
<th>uk</th>
<th></th></tr>
</table>
</div><p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>