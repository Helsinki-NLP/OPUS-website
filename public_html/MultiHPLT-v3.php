<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>MultiHPLT</title>
<link rev="made" href="mailto:opus-project">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>MultiHPLT v3</h1>Parallel corpora from Web Crawls collected in the <a href="https://hplt-project.org">HPLT project</a> and further processed for making it a multi-parallel corpus by pivoting via English. Here we provide the additional language pairs that came out of pivoting. The bitexts for English are the same as the ones in the <a href="http://opus.nlpl.eu/HPLT-v3.php">original HPLT release</a>.<p>29 languages, 406 bitexts<br>total number of files: 29<br>total number of tokens: 19.15G<br>total number of sentence fragments: 970.76M<br><p>Please, acknowledge the HPLT project at <a href="https://hplt-project.org">https://hplt-project.org</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>The data packaging is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="https://hplt-project.org">https://hplt-project.org</a> for more details<h3>Release history:</h3><p><ul><li><a href="MultiHPLT-v1.1.php">MultiHPLT v1.1</a></li> <li><a href="MultiHPLT-v1.php">MultiHPLT v1</a></li> <li><a href="MultiHPLT-v2.php">MultiHPLT v2</a></li> <li><a href="MultiHPLT-v3.php">MultiHPLT v3</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = untokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = tokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th>files</th><th>tokens</th><th>sentences</th>
<th><a rel="nofollow" href="MultiHPLT/v3/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/da_sample.html">da</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/el_sample.html">el</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/en_sample.html">en</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/et_sample.html">et</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/is_sample.html">is</a></th>
<th></th>
<th><a rel="nofollow" href="MultiHPLT/v3/ka_sample.html">ka</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="MultiHPLT/v3/uk_sample.html">uk</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/bg.zip">bg</a></th>
<td>1</td><td>615.4M</td><td>29.9M</td><th></th>
<td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="MultiHPLT/v3/bg-bs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Catalan (sample file)" href="MultiHPLT/v3/bg-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Czech (sample file)" href="MultiHPLT/v3/bg-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Danish (sample file)" href="MultiHPLT/v3/bg-da_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="MultiHPLT/v3/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="MultiHPLT/v3/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="MultiHPLT/v3/bg-et_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Basque (sample file)" href="MultiHPLT/v3/bg-eu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="MultiHPLT/v3/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Irish (sample file)" href="MultiHPLT/v3/bg-ga_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Galician (sample file)" href="MultiHPLT/v3/bg-gl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="MultiHPLT/v3/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="MultiHPLT/v3/bg-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="MultiHPLT/v3/bg-is_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Georgian (sample file)" href="MultiHPLT/v3/bg-ka_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="MultiHPLT/v3/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="MultiHPLT/v3/bg-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="MultiHPLT/v3/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Maltese (sample file)" href="MultiHPLT/v3/bg-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/bg-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/bg-nn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="MultiHPLT/v3/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="MultiHPLT/v3/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="MultiHPLT/v3/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="MultiHPLT/v3/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="MultiHPLT/v3/bg-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Turkish (sample file)" href="MultiHPLT/v3/bg-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="MultiHPLT/v3/bg-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/bg.zip">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/bs.zip">bs</a></th>
<td>1</td><td>111.4M</td><td>6.1M</td><td bgcolor='#dbffc7'><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (1.6M links54.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-bs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bosnian-Catalan (sample file)" href="MultiHPLT/v3/bs-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Czech (sample file)" href="MultiHPLT/v3/bs-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Danish (sample file)" href="MultiHPLT/v3/bs-da_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Greek (sample file)" href="MultiHPLT/v3/bs-el_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="MultiHPLT/v3/bs-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Estonian (sample file)" href="MultiHPLT/v3/bs-et_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Basque (sample file)" href="MultiHPLT/v3/bs-eu_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Finnish (sample file)" href="MultiHPLT/v3/bs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Irish (sample file)" href="MultiHPLT/v3/bs-ga_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Galician (sample file)" href="MultiHPLT/v3/bs-gl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="MultiHPLT/v3/bs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hungarian (sample file)" href="MultiHPLT/v3/bs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Icelandic (sample file)" href="MultiHPLT/v3/bs-is_sample.html">view</a></td><th>bs</th>
<td><a rel="nofollow" title="Bosnian-Georgian (sample file)" href="MultiHPLT/v3/bs-ka_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Lithuanian (sample file)" href="MultiHPLT/v3/bs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Latvian (sample file)" href="MultiHPLT/v3/bs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="MultiHPLT/v3/bs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Maltese (sample file)" href="MultiHPLT/v3/bs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/bs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/bs-nn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Romanian (sample file)" href="MultiHPLT/v3/bs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovak (sample file)" href="MultiHPLT/v3/bs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovenian (sample file)" href="MultiHPLT/v3/bs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="MultiHPLT/v3/bs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="MultiHPLT/v3/bs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Turkish (sample file)" href="MultiHPLT/v3/bs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Ukrainian (sample file)" href="MultiHPLT/v3/bs-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/bs.zip">bs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/ca.zip">ca</a></th>
<td>1</td><td>406.7M</td><td>16.2M</td><td bgcolor='#d7ffc8'><a rel="nofollow" title="sentence alignments for 'Catalan-Bulgarian' (2.3M links97.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-ca.xml.gz">ces</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="sentence alignments for 'Catalan-Bosnian' (0.4M links14.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-ca.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Catalan-Czech (sample file)" href="MultiHPLT/v3/ca-cs_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Danish (sample file)" href="MultiHPLT/v3/ca-da_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Greek (sample file)" href="MultiHPLT/v3/ca-el_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="MultiHPLT/v3/ca-en_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Estonian (sample file)" href="MultiHPLT/v3/ca-et_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Basque (sample file)" href="MultiHPLT/v3/ca-eu_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Finnish (sample file)" href="MultiHPLT/v3/ca-fi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Irish (sample file)" href="MultiHPLT/v3/ca-ga_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Galician (sample file)" href="MultiHPLT/v3/ca-gl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Croatian (sample file)" href="MultiHPLT/v3/ca-hr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hungarian (sample file)" href="MultiHPLT/v3/ca-hu_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Icelandic (sample file)" href="MultiHPLT/v3/ca-is_sample.html">view</a></td><th>ca</th>
<td><a rel="nofollow" title="Catalan-Georgian (sample file)" href="MultiHPLT/v3/ca-ka_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Lithuanian (sample file)" href="MultiHPLT/v3/ca-lt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Latvian (sample file)" href="MultiHPLT/v3/ca-lv_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Macedonian (sample file)" href="MultiHPLT/v3/ca-mk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Maltese (sample file)" href="MultiHPLT/v3/ca-mt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/ca-nb_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/ca-nn_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Romanian (sample file)" href="MultiHPLT/v3/ca-ro_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovak (sample file)" href="MultiHPLT/v3/ca-sk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovenian (sample file)" href="MultiHPLT/v3/ca-sl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Albanian (sample file)" href="MultiHPLT/v3/ca-sq_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Serbian (sample file)" href="MultiHPLT/v3/ca-sr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Turkish (sample file)" href="MultiHPLT/v3/ca-tr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Ukrainian (sample file)" href="MultiHPLT/v3/ca-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/cs.zip">cs</a></th>
<td>1</td><td>876.5M</td><td>49.4M</td><td bgcolor='#c5ffc5'><a rel="nofollow" title="sentence alignments for 'Czech-Bulgarian' (9.0M links366.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-cs.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Czech-Bosnian' (1.3M links40.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-cs.xml.gz">ces</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="sentence alignments for 'Czech-Catalan' (2.1M links88.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-cs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Czech-Danish (sample file)" href="MultiHPLT/v3/cs-da_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="MultiHPLT/v3/cs-el_sample.html">view</a></td><td><a rel="nofollow" title="Czech-English (sample file)" href="MultiHPLT/v3/cs-en_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Estonian (sample file)" href="MultiHPLT/v3/cs-et_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Basque (sample file)" href="MultiHPLT/v3/cs-eu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="MultiHPLT/v3/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Irish (sample file)" href="MultiHPLT/v3/cs-ga_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Galician (sample file)" href="MultiHPLT/v3/cs-gl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Croatian (sample file)" href="MultiHPLT/v3/cs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="MultiHPLT/v3/cs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="MultiHPLT/v3/cs-is_sample.html">view</a></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Georgian (sample file)" href="MultiHPLT/v3/cs-ka_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Lithuanian (sample file)" href="MultiHPLT/v3/cs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Latvian (sample file)" href="MultiHPLT/v3/cs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Macedonian (sample file)" href="MultiHPLT/v3/cs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Maltese (sample file)" href="MultiHPLT/v3/cs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/cs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/cs-nn_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Romanian (sample file)" href="MultiHPLT/v3/cs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovak (sample file)" href="MultiHPLT/v3/cs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="MultiHPLT/v3/cs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Albanian (sample file)" href="MultiHPLT/v3/cs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Serbian (sample file)" href="MultiHPLT/v3/cs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Turkish (sample file)" href="MultiHPLT/v3/cs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="MultiHPLT/v3/cs-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/cs.zip">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/da.zip">da</a></th>
<td>1</td><td>1.1G</td><td>55.2M</td><td bgcolor='#c6ffc6'><a rel="nofollow" title="sentence alignments for 'Danish-Bulgarian' (8.5M links362.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-da.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Danish-Bosnian' (1.2M links38.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-da.xml.gz">ces</a></td>
<td bgcolor='#d6ffc9'><a rel="nofollow" title="sentence alignments for 'Danish-Catalan' (2.5M links104.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-da.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Danish-Czech' (13.8M links526.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-da.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Danish-Greek (sample file)" href="MultiHPLT/v3/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-English (sample file)" href="MultiHPLT/v3/da-en_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Estonian (sample file)" href="MultiHPLT/v3/da-et_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Basque (sample file)" href="MultiHPLT/v3/da-eu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="MultiHPLT/v3/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Irish (sample file)" href="MultiHPLT/v3/da-ga_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Galician (sample file)" href="MultiHPLT/v3/da-gl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Croatian (sample file)" href="MultiHPLT/v3/da-hr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hungarian (sample file)" href="MultiHPLT/v3/da-hu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="MultiHPLT/v3/da-is_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Georgian (sample file)" href="MultiHPLT/v3/da-ka_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Lithuanian (sample file)" href="MultiHPLT/v3/da-lt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Latvian (sample file)" href="MultiHPLT/v3/da-lv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Macedonian (sample file)" href="MultiHPLT/v3/da-mk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Maltese (sample file)" href="MultiHPLT/v3/da-mt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/da-nb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/da-nn_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Romanian (sample file)" href="MultiHPLT/v3/da-ro_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovak (sample file)" href="MultiHPLT/v3/da-sk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovenian (sample file)" href="MultiHPLT/v3/da-sl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Albanian (sample file)" href="MultiHPLT/v3/da-sq_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Serbian (sample file)" href="MultiHPLT/v3/da-sr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Turkish (sample file)" href="MultiHPLT/v3/da-tr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Ukrainian (sample file)" href="MultiHPLT/v3/da-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/da.zip">da</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/el.zip">el</a></th>
<td>1</td><td>980.0M</td><td>45.4M</td><td bgcolor='#c5ffc5'><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (9.0M links395.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-el.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Greek-Bosnian' (1.2M links41.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-el.xml.gz">ces</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="sentence alignments for 'Greek-Catalan' (2.3M links98.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-el.xml.gz">ces</a></td>
<td bgcolor='#c1ffc1'><a rel="nofollow" title="sentence alignments for 'Greek-Czech' (11.8M links472.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-el.xml.gz">ces</a></td>
<td bgcolor='#c0ffc0'><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (12.6M links524.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="MultiHPLT/v3/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Estonian (sample file)" href="MultiHPLT/v3/el-et_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Basque (sample file)" href="MultiHPLT/v3/el-eu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="MultiHPLT/v3/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Irish (sample file)" href="MultiHPLT/v3/el-ga_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Galician (sample file)" href="MultiHPLT/v3/el-gl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="MultiHPLT/v3/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hungarian (sample file)" href="MultiHPLT/v3/el-hu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="MultiHPLT/v3/el-is_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Georgian (sample file)" href="MultiHPLT/v3/el-ka_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Lithuanian (sample file)" href="MultiHPLT/v3/el-lt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Latvian (sample file)" href="MultiHPLT/v3/el-lv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="MultiHPLT/v3/el-mk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Maltese (sample file)" href="MultiHPLT/v3/el-mt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/el-nb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/el-nn_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="MultiHPLT/v3/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovak (sample file)" href="MultiHPLT/v3/el-sk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="MultiHPLT/v3/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Albanian (sample file)" href="MultiHPLT/v3/el-sq_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Serbian (sample file)" href="MultiHPLT/v3/el-sr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Turkish (sample file)" href="MultiHPLT/v3/el-tr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="MultiHPLT/v3/el-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/el.zip">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/en.zip">en</a></th>
<td>1</td><td>8.1G</td><td>385.8M</td><td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (35.7M links1.6G tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-en.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (6.8M links272.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-en.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'English-Catalan' (17.6M links884.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-en.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'English-Czech' (57.9M links2.4G tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-en.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'English-Danish' (68.8M links2.8G tokens)" href="download.php?f=MultiHPLT/v3/xml/da-en.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'English-Greek' (55.6M links2.5G tokens)" href="download.php?f=MultiHPLT/v3/xml/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Estonian (sample file)" href="MultiHPLT/v3/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="MultiHPLT/v3/en-eu_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="MultiHPLT/v3/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-Irish (sample file)" href="MultiHPLT/v3/en-ga_sample.html">view</a></td><td><a rel="nofollow" title="English-Galician (sample file)" href="MultiHPLT/v3/en-gl_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="MultiHPLT/v3/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Hungarian (sample file)" href="MultiHPLT/v3/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="MultiHPLT/v3/en-is_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Georgian (sample file)" href="MultiHPLT/v3/en-ka_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="MultiHPLT/v3/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="MultiHPLT/v3/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="MultiHPLT/v3/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="MultiHPLT/v3/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/en-nb_sample.html">view</a></td><td><a rel="nofollow" title="English-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/en-nn_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="MultiHPLT/v3/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovak (sample file)" href="MultiHPLT/v3/en-sk_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="MultiHPLT/v3/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="MultiHPLT/v3/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="MultiHPLT/v3/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="MultiHPLT/v3/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="MultiHPLT/v3/en-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/et.zip">et</a></th>
<td>1</td><td>238.1M</td><td>14.0M</td><td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (5.0M links206.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-et.xml.gz">ces</a></td>
<td bgcolor='#e3ffc7'><a rel="nofollow" title="sentence alignments for 'Estonian-Bosnian' (0.7M links20.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-et.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Estonian-Catalan' (1.2M links49.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-et.xml.gz">ces</a></td>
<td bgcolor='#ccffcc'><a rel="nofollow" title="sentence alignments for 'Estonian-Czech' (5.6M links211.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-et.xml.gz">ces</a></td>
<td bgcolor='#ccffcc'><a rel="nofollow" title="sentence alignments for 'Estonian-Danish' (5.7M links227.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-et.xml.gz">ces</a></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Estonian-Greek' (5.3M links216.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-et.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Estonian-English' (15.5M links643.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-et.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Estonian-Basque (sample file)" href="MultiHPLT/v3/et-eu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="MultiHPLT/v3/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Irish (sample file)" href="MultiHPLT/v3/et-ga_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Galician (sample file)" href="MultiHPLT/v3/et-gl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="MultiHPLT/v3/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hungarian (sample file)" href="MultiHPLT/v3/et-hu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="MultiHPLT/v3/et-is_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Georgian (sample file)" href="MultiHPLT/v3/et-ka_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="MultiHPLT/v3/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="MultiHPLT/v3/et-lv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Macedonian (sample file)" href="MultiHPLT/v3/et-mk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Maltese (sample file)" href="MultiHPLT/v3/et-mt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/et-nb_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/et-nn_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Romanian (sample file)" href="MultiHPLT/v3/et-ro_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="MultiHPLT/v3/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="MultiHPLT/v3/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Albanian (sample file)" href="MultiHPLT/v3/et-sq_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Serbian (sample file)" href="MultiHPLT/v3/et-sr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Turkish (sample file)" href="MultiHPLT/v3/et-tr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Ukrainian (sample file)" href="MultiHPLT/v3/et-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/et.zip">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/eu.zip">eu</a></th>
<td>1</td><td>46.7M</td><td>2.5M</td><td bgcolor='#e3ffc7'><a rel="nofollow" title="sentence alignments for 'Basque-Bulgarian' (0.7M links23.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-eu.xml.gz">ces</a></td>
<td bgcolor='#ffffe5'><a rel="nofollow" title="sentence alignments for 'Basque-Bosnian' (0.2M links4.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-eu.xml.gz">ces</a></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="sentence alignments for 'Basque-Catalan' (0.8M links34.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-eu.xml.gz">ces</a></td>
<td bgcolor='#e3ffc8'><a rel="nofollow" title="sentence alignments for 'Basque-Czech' (0.7M links24.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-eu.xml.gz">ces</a></td>
<td bgcolor='#e3ffc8'><a rel="nofollow" title="sentence alignments for 'Basque-Danish' (0.7M links24.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-eu.xml.gz">ces</a></td>
<td bgcolor='#e3ffc8'><a rel="nofollow" title="sentence alignments for 'Basque-Greek' (0.7M links25.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-eu.xml.gz">ces</a></td>
<td bgcolor='#d5ffc9'><a rel="nofollow" title="sentence alignments for 'Basque-English' (2.6M links114.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-eu.xml.gz">ces</a></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="sentence alignments for 'Basque-Estonian' (0.5M links15.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-eu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Basque-Finnish (sample file)" href="MultiHPLT/v3/eu-fi_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Irish (sample file)" href="MultiHPLT/v3/eu-ga_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Galician (sample file)" href="MultiHPLT/v3/eu-gl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Croatian (sample file)" href="MultiHPLT/v3/eu-hr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Hungarian (sample file)" href="MultiHPLT/v3/eu-hu_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Icelandic (sample file)" href="MultiHPLT/v3/eu-is_sample.html">view</a></td><th>eu</th>
<td><a rel="nofollow" title="Basque-Georgian (sample file)" href="MultiHPLT/v3/eu-ka_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Lithuanian (sample file)" href="MultiHPLT/v3/eu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Latvian (sample file)" href="MultiHPLT/v3/eu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Macedonian (sample file)" href="MultiHPLT/v3/eu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Maltese (sample file)" href="MultiHPLT/v3/eu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/eu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/eu-nn_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Romanian (sample file)" href="MultiHPLT/v3/eu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovak (sample file)" href="MultiHPLT/v3/eu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovenian (sample file)" href="MultiHPLT/v3/eu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Albanian (sample file)" href="MultiHPLT/v3/eu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Serbian (sample file)" href="MultiHPLT/v3/eu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Turkish (sample file)" href="MultiHPLT/v3/eu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Ukrainian (sample file)" href="MultiHPLT/v3/eu-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/eu.zip">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/fi.zip">fi</a></th>
<td>1</td><td>583.8M</td><td>40.2M</td><td bgcolor='#c8ffc8'><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (7.3M links275.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-fi.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Finnish-Bosnian' (1.0M links29.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-fi.xml.gz">ces</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="sentence alignments for 'Finnish-Catalan' (2.0M links75.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-fi.xml.gz">ces</a></td>
<td bgcolor='#c2ffc2'><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' (11.2M links377.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-fi.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (14.8M links520.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-fi.xml.gz">ces</a></td>
<td bgcolor='#c3ffc3'><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' (10.3M links378.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-fi.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Finnish-English' (47.6M links1.7G tokens)" href="download.php?f=MultiHPLT/v3/xml/en-fi.xml.gz">ces</a></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (4.9M links173.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-fi.xml.gz">ces</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Finnish-Basque' (0.5M links16.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-Irish (sample file)" href="MultiHPLT/v3/fi-ga_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Galician (sample file)" href="MultiHPLT/v3/fi-gl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="MultiHPLT/v3/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="MultiHPLT/v3/fi-hu_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="MultiHPLT/v3/fi-is_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Georgian (sample file)" href="MultiHPLT/v3/fi-ka_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="MultiHPLT/v3/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="MultiHPLT/v3/fi-lv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Macedonian (sample file)" href="MultiHPLT/v3/fi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Maltese (sample file)" href="MultiHPLT/v3/fi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/fi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/fi-nn_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="MultiHPLT/v3/fi-ro_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="MultiHPLT/v3/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="MultiHPLT/v3/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Albanian (sample file)" href="MultiHPLT/v3/fi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Serbian (sample file)" href="MultiHPLT/v3/fi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Turkish (sample file)" href="MultiHPLT/v3/fi-tr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="MultiHPLT/v3/fi-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/fi.zip">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/ga.zip">ga</a></th>
<td>1</td><td>84.2M</td><td>3.6M</td><td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Irish-Bulgarian' (1.4M links63.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-ga.xml.gz">ces</a></td>
<td bgcolor='#f2ffd3'><a rel="nofollow" title="sentence alignments for 'Irish-Bosnian' (0.2M links8.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-ga.xml.gz">ces</a></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="sentence alignments for 'Irish-Catalan' (0.8M links40.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-ga.xml.gz">ces</a></td>
<td bgcolor='#dcffc7'><a rel="nofollow" title="sentence alignments for 'Irish-Czech' (1.5M links62.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-ga.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Irish-Danish' (1.6M links70.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-ga.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Irish-Greek' (1.5M links68.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-ga.xml.gz">ces</a></td>
<td bgcolor='#d0ffce'><a rel="nofollow" title="sentence alignments for 'Irish-English' (3.9M links186.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-ga.xml.gz">ces</a></td>
<td bgcolor='#e0ffc6'><a rel="nofollow" title="sentence alignments for 'Irish-Estonian' (0.9M links40.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-ga.xml.gz">ces</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="sentence alignments for 'Irish-Basque' (0.4M links15.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-ga.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Irish-Finnish' (1.2M links50.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-ga.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Irish-Galician (sample file)" href="MultiHPLT/v3/ga-gl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Croatian (sample file)" href="MultiHPLT/v3/ga-hr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Hungarian (sample file)" href="MultiHPLT/v3/ga-hu_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Icelandic (sample file)" href="MultiHPLT/v3/ga-is_sample.html">view</a></td><th>ga</th>
<td><a rel="nofollow" title="Irish-Georgian (sample file)" href="MultiHPLT/v3/ga-ka_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Lithuanian (sample file)" href="MultiHPLT/v3/ga-lt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Latvian (sample file)" href="MultiHPLT/v3/ga-lv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Macedonian (sample file)" href="MultiHPLT/v3/ga-mk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Maltese (sample file)" href="MultiHPLT/v3/ga-mt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/ga-nb_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/ga-nn_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Romanian (sample file)" href="MultiHPLT/v3/ga-ro_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovak (sample file)" href="MultiHPLT/v3/ga-sk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovenian (sample file)" href="MultiHPLT/v3/ga-sl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Albanian (sample file)" href="MultiHPLT/v3/ga-sq_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Serbian (sample file)" href="MultiHPLT/v3/ga-sr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Turkish (sample file)" href="MultiHPLT/v3/ga-tr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Ukrainian (sample file)" href="MultiHPLT/v3/ga-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/ga.zip">ga</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/gl.zip">gl</a></th>
<td>1</td><td>72.3M</td><td>3.3M</td><td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Galician-Bulgarian' (1.1M links41.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-gl.xml.gz">ces</a></td>
<td bgcolor='#f2ffd3'><a rel="nofollow" title="sentence alignments for 'Galician-Bosnian' (0.2M links7.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-gl.xml.gz">ces</a></td>
<td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Galician-Catalan' (1.4M links63.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-gl.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Galician-Czech' (1.1M links39.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-gl.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Galician-Danish' (1.1M links43.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-gl.xml.gz">ces</a></td>
<td bgcolor='#dfffc7'><a rel="nofollow" title="sentence alignments for 'Galician-Greek' (1.1M links42.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-gl.xml.gz">ces</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="sentence alignments for 'Galician-English' (3.5M links161.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-gl.xml.gz">ces</a></td>
<td bgcolor='#e3ffc7'><a rel="nofollow" title="sentence alignments for 'Galician-Estonian' (0.7M links24.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-gl.xml.gz">ces</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="sentence alignments for 'Galician-Basque' (0.6M links23.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-gl.xml.gz">ces</a></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="sentence alignments for 'Galician-Finnish' (0.9M links30.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-gl.xml.gz">ces</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="sentence alignments for 'Galician-Irish' (0.7M links29.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-gl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Galician-Croatian (sample file)" href="MultiHPLT/v3/gl-hr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Hungarian (sample file)" href="MultiHPLT/v3/gl-hu_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Icelandic (sample file)" href="MultiHPLT/v3/gl-is_sample.html">view</a></td><th>gl</th>
<td><a rel="nofollow" title="Galician-Georgian (sample file)" href="MultiHPLT/v3/gl-ka_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Lithuanian (sample file)" href="MultiHPLT/v3/gl-lt_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Latvian (sample file)" href="MultiHPLT/v3/gl-lv_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Macedonian (sample file)" href="MultiHPLT/v3/gl-mk_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Maltese (sample file)" href="MultiHPLT/v3/gl-mt_sample.html">view</a></td><td><a rel="nofollow" title="Galician-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/gl-nb_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/gl-nn_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Romanian (sample file)" href="MultiHPLT/v3/gl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Slovak (sample file)" href="MultiHPLT/v3/gl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Slovenian (sample file)" href="MultiHPLT/v3/gl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Albanian (sample file)" href="MultiHPLT/v3/gl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Serbian (sample file)" href="MultiHPLT/v3/gl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Turkish (sample file)" href="MultiHPLT/v3/gl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Ukrainian (sample file)" href="MultiHPLT/v3/gl-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/gl.zip">gl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/hr.zip">hr</a></th>
<td>1</td><td>422.3M</td><td>22.6M</td><td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (7.0M links284.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-hr.xml.gz">ces</a></td>
<td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (1.4M links44.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-hr.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Croatian-Catalan' (1.8M links77.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-hr.xml.gz">ces</a></td>
<td bgcolor='#c7ffc7'><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' (7.8M links296.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-hr.xml.gz">ces</a></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="sentence alignments for 'Croatian-Danish' (7.3M links291.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-hr.xml.gz">ces</a></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (7.2M links293.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-hr.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Croatian-English' (26.4M links1.1G tokens)" href="download.php?f=MultiHPLT/v3/xml/en-hr.xml.gz">ces</a></td>
<td bgcolor='#d1ffcd'><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (3.7M links142.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-hr.xml.gz">ces</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Croatian-Basque' (0.5M links18.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-hr.xml.gz">ces</a></td>
<td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (6.2M links217.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-hr.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Croatian-Irish' (1.2M links50.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-hr.xml.gz">ces</a></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="sentence alignments for 'Croatian-Galician' (0.9M links33.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-hr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Hungarian (sample file)" href="MultiHPLT/v3/hr-hu_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="MultiHPLT/v3/hr-is_sample.html">view</a></td><th>hr</th>
<td><a rel="nofollow" title="Croatian-Georgian (sample file)" href="MultiHPLT/v3/hr-ka_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="MultiHPLT/v3/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="MultiHPLT/v3/hr-lv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="MultiHPLT/v3/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Maltese (sample file)" href="MultiHPLT/v3/hr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/hr-nb_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/hr-nn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="MultiHPLT/v3/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="MultiHPLT/v3/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="MultiHPLT/v3/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="MultiHPLT/v3/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="MultiHPLT/v3/hr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Turkish (sample file)" href="MultiHPLT/v3/hr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="MultiHPLT/v3/hr-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/hu.zip">hu</a></th>
<td>1</td><td>668.1M</td><td>36.9M</td><td bgcolor='#c6ffc6'><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' (8.5M links350.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-hu.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Hungarian-Bosnian' (1.2M links37.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-hu.xml.gz">ces</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="sentence alignments for 'Hungarian-Catalan' (1.8M links74.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-hu.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' (13.0M links486.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-hu.xml.gz">ces</a></td>
<td bgcolor='#c1ffc1'><a rel="nofollow" title="sentence alignments for 'Hungarian-Danish' (11.9M links463.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-hu.xml.gz">ces</a></td>
<td bgcolor='#c1ffc1'><a rel="nofollow" title="sentence alignments for 'Hungarian-Greek' (11.4M links457.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-hu.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Hungarian-English' (45.5M links1.9G tokens)" href="download.php?f=MultiHPLT/v3/xml/en-hu.xml.gz">ces</a></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="sentence alignments for 'Hungarian-Estonian' (4.6M links180.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-hu.xml.gz">ces</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Hungarian-Basque' (0.5M links17.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-hu.xml.gz">ces</a></td>
<td bgcolor='#c4ffc4'><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' (9.8M links338.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-hu.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Hungarian-Irish' (1.0M links45.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-hu.xml.gz">ces</a></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="sentence alignments for 'Hungarian-Galician' (0.7M links27.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-hu.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Hungarian-Croatian' (6.8M links265.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-hu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="MultiHPLT/v3/hu-is_sample.html">view</a></td><th>hu</th>
<td><a rel="nofollow" title="Hungarian-Georgian (sample file)" href="MultiHPLT/v3/hu-ka_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Lithuanian (sample file)" href="MultiHPLT/v3/hu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Latvian (sample file)" href="MultiHPLT/v3/hu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Macedonian (sample file)" href="MultiHPLT/v3/hu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Maltese (sample file)" href="MultiHPLT/v3/hu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/hu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/hu-nn_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Romanian (sample file)" href="MultiHPLT/v3/hu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovak (sample file)" href="MultiHPLT/v3/hu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovenian (sample file)" href="MultiHPLT/v3/hu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Albanian (sample file)" href="MultiHPLT/v3/hu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Serbian (sample file)" href="MultiHPLT/v3/hu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Turkish (sample file)" href="MultiHPLT/v3/hu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="MultiHPLT/v3/hu-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/hu.zip">hu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/is.zip">is</a></th>
<td>1</td><td>78.2M</td><td>4.4M</td><td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (1.6M links61.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-is.xml.gz">ces</a></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="sentence alignments for 'Icelandic-Bosnian' (0.3M links9.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-is.xml.gz">ces</a></td>
<td bgcolor='#e0ffc6'><a rel="nofollow" title="sentence alignments for 'Icelandic-Catalan' (0.9M links38.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-is.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Icelandic-Czech' (1.8M links63.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-is.xml.gz">ces</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="sentence alignments for 'Icelandic-Danish' (2.2M links80.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-is.xml.gz">ces</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' (2.0M links73.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-is.xml.gz">ces</a></td>
<td bgcolor='#ccffcc'><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (5.5M links215.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-is.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (1.1M links38.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-is.xml.gz">ces</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="sentence alignments for 'Icelandic-Basque' (0.4M links13.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-is.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (1.8M links58.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-is.xml.gz">ces</a></td>
<td bgcolor='#e3ffc8'><a rel="nofollow" title="sentence alignments for 'Icelandic-Irish' (0.7M links29.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-is.xml.gz">ces</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="sentence alignments for 'Icelandic-Galician' (0.6M links24.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-is.xml.gz">ces</a></td>
<td bgcolor='#dbffc7'><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' (1.6M links56.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-is.xml.gz">ces</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="sentence alignments for 'Icelandic-Hungarian' (1.8M links63.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-is.xml.gz">ces</a></td>
<th></th>
<th>is</th>
<td><a rel="nofollow" title="Icelandic-Georgian (sample file)" href="MultiHPLT/v3/is-ka_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="MultiHPLT/v3/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="MultiHPLT/v3/is-lv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="MultiHPLT/v3/is-mk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Maltese (sample file)" href="MultiHPLT/v3/is-mt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/is-nb_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/is-nn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="MultiHPLT/v3/is-ro_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="MultiHPLT/v3/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="MultiHPLT/v3/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Albanian (sample file)" href="MultiHPLT/v3/is-sq_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Serbian (sample file)" href="MultiHPLT/v3/is-sr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Turkish (sample file)" href="MultiHPLT/v3/is-tr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Ukrainian (sample file)" href="MultiHPLT/v3/is-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/is.zip">is</a></th></tr>
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
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/ka.zip">ka</a></th>
<td>1</td><td>41.0M</td><td>1.5M</td><td bgcolor='#ebffcd'><a rel="nofollow" title="sentence alignments for 'Georgian-Bulgarian' (0.3M links14.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-ka.xml.gz">ces</a></td>
<td bgcolor='#fffef1'><a rel="nofollow" title="sentence alignments for 'Georgian-Bosnian' (83.8k links3.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-ka.xml.gz">ces</a></td>
<td bgcolor='#ffffe2'><a rel="nofollow" title="sentence alignments for 'Georgian-Catalan' (0.2M links8.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-ka.xml.gz">ces</a></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="sentence alignments for 'Georgian-Czech' (0.3M links12.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-ka.xml.gz">ces</a></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="sentence alignments for 'Georgian-Danish' (0.3M links12.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-ka.xml.gz">ces</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="sentence alignments for 'Georgian-Greek' (0.4M links14.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-ka.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Georgian-English' (1.5M links86.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-ka.xml.gz">ces</a></td>
<td bgcolor='#faffdb'><a rel="nofollow" title="sentence alignments for 'Georgian-Estonian' (0.2M links7.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-ka.xml.gz">ces</a></td>
<td bgcolor='#ffffef'><a rel="nofollow" title="sentence alignments for 'Georgian-Basque' (0.1M links4.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-ka.xml.gz">ces</a></td>
<td bgcolor='#edffce'><a rel="nofollow" title="sentence alignments for 'Georgian-Finnish' (0.3M links10.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-ka.xml.gz">ces</a></td>
<td bgcolor='#ffffea'><a rel="nofollow" title="sentence alignments for 'Georgian-Irish' (0.1M links6.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-ka.xml.gz">ces</a></td>
<td bgcolor='#ffffea'><a rel="nofollow" title="sentence alignments for 'Georgian-Galician' (0.1M links5.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-ka.xml.gz">ces</a></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="sentence alignments for 'Georgian-Croatian' (0.3M links12.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-ka.xml.gz">ces</a></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="sentence alignments for 'Georgian-Hungarian' (0.3M links11.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-ka.xml.gz">ces</a></td>
<td bgcolor='#ffffe8'><a rel="nofollow" title="sentence alignments for 'Georgian-Icelandic' (0.1M links6.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-ka.xml.gz">ces</a></td>
<th>ka</th>
<th></th>
<td><a rel="nofollow" title="Georgian-Lithuanian (sample file)" href="MultiHPLT/v3/ka-lt_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Latvian (sample file)" href="MultiHPLT/v3/ka-lv_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Macedonian (sample file)" href="MultiHPLT/v3/ka-mk_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Maltese (sample file)" href="MultiHPLT/v3/ka-mt_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/ka-nb_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/ka-nn_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Romanian (sample file)" href="MultiHPLT/v3/ka-ro_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Slovak (sample file)" href="MultiHPLT/v3/ka-sk_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Slovenian (sample file)" href="MultiHPLT/v3/ka-sl_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Albanian (sample file)" href="MultiHPLT/v3/ka-sq_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Serbian (sample file)" href="MultiHPLT/v3/ka-sr_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Turkish (sample file)" href="MultiHPLT/v3/ka-tr_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Ukrainian (sample file)" href="MultiHPLT/v3/ka-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/ka.zip">ka</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/lt.zip">lt</a></th>
<td>1</td><td>314.5M</td><td>17.7M</td><td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (6.5M links267.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-lt.xml.gz">ces</a></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bosnian' (0.9M links27.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-lt.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Catalan' (1.6M links63.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-lt.xml.gz">ces</a></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Czech' (7.3M links279.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-lt.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Danish' (7.0M links280.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-lt.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Greek' (6.9M links280.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-lt.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (21.3M links886.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-lt.xml.gz">ces</a></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (4.8M links182.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-lt.xml.gz">ces</a></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Basque' (0.5M links15.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-lt.xml.gz">ces</a></td>
<td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' (6.2M links217.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-lt.xml.gz">ces</a></td>
<td bgcolor='#e0ffc6'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Irish' (0.9M links40.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-lt.xml.gz">ces</a></td>
<td bgcolor='#e3ffc7'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Galician' (0.7M links25.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-lt.xml.gz">ces</a></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' (5.3M links201.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-lt.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hungarian' (7.0M links271.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-lt.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' (1.3M links44.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-lt.xml.gz">ces</a></td>
<th>lt</th>
<td bgcolor='#f3ffd4'><a rel="nofollow" title="sentence alignments for 'Lithuanian-Georgian' (0.2M links8.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-lt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="MultiHPLT/v3/lt-lv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Macedonian (sample file)" href="MultiHPLT/v3/lt-mk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Maltese (sample file)" href="MultiHPLT/v3/lt-mt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/lt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/lt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Romanian (sample file)" href="MultiHPLT/v3/lt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="MultiHPLT/v3/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="MultiHPLT/v3/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Albanian (sample file)" href="MultiHPLT/v3/lt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Serbian (sample file)" href="MultiHPLT/v3/lt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Turkish (sample file)" href="MultiHPLT/v3/lt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Ukrainian (sample file)" href="MultiHPLT/v3/lt-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/lt.zip">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/lv.zip">lv</a></th>
<td>1</td><td>284.3M</td><td>15.5M</td><td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (6.2M links261.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-lv.xml.gz">ces</a></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="sentence alignments for 'Latvian-Bosnian' (0.8M links25.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-lv.xml.gz">ces</a></td>
<td bgcolor='#dbffc7'><a rel="nofollow" title="sentence alignments for 'Latvian-Catalan' (1.6M links65.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-lv.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Latvian-Czech' (6.7M links262.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-lv.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Latvian-Danish' (6.7M links273.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-lv.xml.gz">ces</a></td>
<td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Latvian-Greek' (6.4M links267.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-lv.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Latvian-English' (18.7M links799.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-lv.xml.gz">ces</a></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (4.8M links187.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-lv.xml.gz">ces</a></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="sentence alignments for 'Latvian-Basque' (0.5M links16.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-lv.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' (5.9M links213.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-lv.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Latvian-Irish' (1.0M links44.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-lv.xml.gz">ces</a></td>
<td bgcolor='#e3ffc8'><a rel="nofollow" title="sentence alignments for 'Latvian-Galician' (0.7M links27.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-lv.xml.gz">ces</a></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' (5.1M links197.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-lv.xml.gz">ces</a></td>
<td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Latvian-Hungarian' (6.4M links258.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-lv.xml.gz">ces</a></td>
<td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' (1.4M links48.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-lv.xml.gz">ces</a></td>
<th>lv</th>
<td bgcolor='#f5ffd6'><a rel="nofollow" title="sentence alignments for 'Latvian-Georgian' (0.2M links8.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-lv.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (6.6M links256.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-lv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Latvian-Macedonian (sample file)" href="MultiHPLT/v3/lv-mk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Maltese (sample file)" href="MultiHPLT/v3/lv-mt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/lv-nb_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/lv-nn_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Romanian (sample file)" href="MultiHPLT/v3/lv-ro_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="MultiHPLT/v3/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="MultiHPLT/v3/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Albanian (sample file)" href="MultiHPLT/v3/lv-sq_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Serbian (sample file)" href="MultiHPLT/v3/lv-sr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Turkish (sample file)" href="MultiHPLT/v3/lv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="MultiHPLT/v3/lv-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/lv.zip">lv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/mk.zip">mk</a></th>
<td>1</td><td>113.0M</td><td>5.4M</td><td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (1.9M links74.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-mk.xml.gz">ces</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (0.5M links17.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-mk.xml.gz">ces</a></td>
<td bgcolor='#e0ffc6'><a rel="nofollow" title="sentence alignments for 'Macedonian-Catalan' (0.9M links40.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-mk.xml.gz">ces</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="sentence alignments for 'Macedonian-Czech' (1.7M links62.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-mk.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Macedonian-Danish' (1.7M links64.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-mk.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Macedonian-Greek' (1.9M links71.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-mk.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (5.8M links255.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-mk.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Macedonian-Estonian' (1.0M links36.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-mk.xml.gz">ces</a></td>
<td bgcolor='#e8ffca'><a rel="nofollow" title="sentence alignments for 'Macedonian-Basque' (0.4M links15.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-mk.xml.gz">ces</a></td>
<td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Macedonian-Finnish' (1.4M links47.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-mk.xml.gz">ces</a></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="sentence alignments for 'Macedonian-Irish' (0.8M links33.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-mk.xml.gz">ces</a></td>
<td bgcolor='#e3ffc8'><a rel="nofollow" title="sentence alignments for 'Macedonian-Galician' (0.7M links29.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-mk.xml.gz">ces</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (1.8M links65.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-mk.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Macedonian-Hungarian' (1.6M links57.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-mk.xml.gz">ces</a></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="sentence alignments for 'Macedonian-Icelandic' (0.8M links31.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-mk.xml.gz">ces</a></td>
<th>mk</th>
<td bgcolor='#ffffe4'><a rel="nofollow" title="sentence alignments for 'Macedonian-Georgian' (0.2M links7.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-mk.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Macedonian-Lithuanian' (1.3M links46.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-mk.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Macedonian-Latvian' (1.2M links45.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Maltese (sample file)" href="MultiHPLT/v3/mk-mt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/mk-nb_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/mk-nn_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Romanian (sample file)" href="MultiHPLT/v3/mk-ro_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovak (sample file)" href="MultiHPLT/v3/mk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovenian (sample file)" href="MultiHPLT/v3/mk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="MultiHPLT/v3/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="MultiHPLT/v3/mk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Turkish (sample file)" href="MultiHPLT/v3/mk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Ukrainian (sample file)" href="MultiHPLT/v3/mk-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/mk.zip">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/mt.zip">mt</a></th>
<td>1</td><td>68.6M</td><td>2.1M</td><td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Bulgarian' (1.2M links76.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-mt.xml.gz">ces</a></td>
<td bgcolor='#fffef0'><a rel="nofollow" title="sentence alignments for 'Maltese-Bosnian' (91.7k links3.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-mt.xml.gz">ces</a></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="sentence alignments for 'Maltese-Catalan' (0.3M links16.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-mt.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Czech' (1.1M links70.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-mt.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Danish' (1.2M links77.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-mt.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Greek' (1.2M links78.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-mt.xml.gz">ces</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="sentence alignments for 'Maltese-English' (2.4M links153.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-mt.xml.gz">ces</a></td>
<td bgcolor='#e0ffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Estonian' (0.9M links57.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-mt.xml.gz">ces</a></td>
<td bgcolor='#ffffea'><a rel="nofollow" title="sentence alignments for 'Maltese-Basque' (0.1M links5.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-mt.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Finnish' (1.1M links63.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-mt.xml.gz">ces</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="sentence alignments for 'Maltese-Irish' (0.4M links22.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-mt.xml.gz">ces</a></td>
<td bgcolor='#efffd0'><a rel="nofollow" title="sentence alignments for 'Maltese-Galician' (0.3M links11.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-mt.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Croatian' (1.0M links60.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-mt.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Hungarian' (1.1M links73.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-mt.xml.gz">ces</a></td>
<td bgcolor='#edffce'><a rel="nofollow" title="sentence alignments for 'Maltese-Icelandic' (0.3M links12.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-mt.xml.gz">ces</a></td>
<th>mt</th>
<td bgcolor='#fff7ef'><a rel="nofollow" title="sentence alignments for 'Maltese-Georgian' (50.5k links2.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-mt.xml.gz">ces</a></td>
<td bgcolor='#dfffc7'><a rel="nofollow" title="sentence alignments for 'Maltese-Lithuanian' (1.1M links67.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-mt.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Maltese-Latvian' (1.1M links71.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-mt.xml.gz">ces</a></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="sentence alignments for 'Maltese-Macedonian' (0.3M links13.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/mk-mt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Maltese-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v3/mt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/mt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Romanian (sample file)" href="MultiHPLT/v3/mt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovak (sample file)" href="MultiHPLT/v3/mt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovenian (sample file)" href="MultiHPLT/v3/mt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Albanian (sample file)" href="MultiHPLT/v3/mt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Serbian (sample file)" href="MultiHPLT/v3/mt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Turkish (sample file)" href="MultiHPLT/v3/mt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Ukrainian (sample file)" href="MultiHPLT/v3/mt-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/mt.zip">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/nb.zip">nb</a></th>
<td>1</td><td>576.0M</td><td>30.8M</td><td bgcolor='#ceffce'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bulgarian' (4.9M links187.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-nb.xml.gz">ces</a></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bosnian' (0.8M links27.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-nb.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Catalan' (1.9M links78.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-nb.xml.gz">ces</a></td>
<td bgcolor='#c7ffc7'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Czech' (8.0M links287.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-nb.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Danish' (13.7M links520.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-nb.xml.gz">ces</a></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Greek' (7.3M links281.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-nb.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-English' (34.5M links1.4G tokens)" href="download.php?f=MultiHPLT/v3/xml/en-nb.xml.gz">ces</a></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Estonian' (2.9M links103.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-nb.xml.gz">ces</a></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Basque' (0.5M links16.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-nb.xml.gz">ces</a></td>
<td bgcolor='#c4ffc4'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Finnish' (9.4M links315.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-nb.xml.gz">ces</a></td>
<td bgcolor='#e0ffc7'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Irish' (1.0M links40.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-nb.xml.gz">ces</a></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Galician' (0.8M links29.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-nb.xml.gz">ces</a></td>
<td bgcolor='#cfffcf'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Croatian' (4.4M links162.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-nb.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hungarian' (6.9M links249.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-nb.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Icelandic' (1.5M links55.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-nb.xml.gz">ces</a></td>
<th>nb</th>
<td bgcolor='#ffffe1'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Georgian' (0.2M links8.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-nb.xml.gz">ces</a></td>
<td bgcolor='#d1ffce'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Lithuanian' (3.7M links133.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-nb.xml.gz">ces</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Latvian' (3.5M links126.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-nb.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Macedonian' (1.2M links46.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/mk-nb.xml.gz">ces</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Maltese' (0.3M links15.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/mt-nb.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v3/nb-nn_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Romanian (sample file)" href="MultiHPLT/v3/nb-ro_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovak (sample file)" href="MultiHPLT/v3/nb-sk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovenian (sample file)" href="MultiHPLT/v3/nb-sl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Albanian (sample file)" href="MultiHPLT/v3/nb-sq_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Serbian (sample file)" href="MultiHPLT/v3/nb-sr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Turkish (sample file)" href="MultiHPLT/v3/nb-tr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Ukrainian (sample file)" href="MultiHPLT/v3/nb-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/nb.zip">nb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/nn.zip">nn</a></th>
<td>1</td><td>2.7M</td><td>0.2M</td><td bgcolor='#fff7f0'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Bulgarian' (49.4k links1.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-nn.xml.gz">ces</a></td>
<td bgcolor='#ffdedd'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Bosnian' (11.8k links0.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-nn.xml.gz">ces</a></td>
<td bgcolor='#ffe6e3'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Catalan' (20.6k links0.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-nn.xml.gz">ces</a></td>
<td bgcolor='#fffcf1'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Czech' (71.7k links2.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-nn.xml.gz">ces</a></td>
<td bgcolor='#fffdf1'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Danish' (80.1k links2.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-nn.xml.gz">ces</a></td>
<td bgcolor='#fffcf2'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Greek' (68.3k links2.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-nn.xml.gz">ces</a></td>
<td bgcolor='#ffffe0'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-English' (0.2M links6.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-nn.xml.gz">ces</a></td>
<td bgcolor='#ffe6e3'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Estonian' (19.6k links0.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-nn.xml.gz">ces</a></td>
<td bgcolor='#ffd7d7'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Basque' (5.9k links0.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-nn.xml.gz">ces</a></td>
<td bgcolor='#fffbf1'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Finnish' (65.2k links1.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-nn.xml.gz">ces</a></td>
<td bgcolor='#ffd7d7'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Irish' (5.8k links0.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-nn.xml.gz">ces</a></td>
<td bgcolor='#ffdad9'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Galician' (7.7k links0.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-nn.xml.gz">ces</a></td>
<td bgcolor='#fff2ed'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Croatian' (37.5k links1.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-nn.xml.gz">ces</a></td>
<td bgcolor='#fffaf1'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Hungarian' (61.9k links1.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-nn.xml.gz">ces</a></td>
<td bgcolor='#ffd8d7'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Icelandic' (6.6k links0.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-nn.xml.gz">ces</a></td>
<th>nn</th>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Georgian' (1.3k links32.5k tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-nn.xml.gz">ces</a></td>
<td bgcolor='#fff1ec'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Lithuanian' (35.4k links1.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-nn.xml.gz">ces</a></td>
<td bgcolor='#ffebe7'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Latvian' (26.9k links0.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-nn.xml.gz">ces</a></td>
<td bgcolor='#ffd9d8'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Macedonian' (7.5k links0.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/mk-nn.xml.gz">ces</a></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Maltese' (1.9k links68.5k tokens)" href="download.php?f=MultiHPLT/v3/xml/mt-nn.xml.gz">ces</a></td>
<td bgcolor='#fff0eb'><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-BokmÃ¥l, Norwegian' (34.9k links1.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/nb-nn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Norwegian Nynorsk-Romanian (sample file)" href="MultiHPLT/v3/nn-ro_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Slovak (sample file)" href="MultiHPLT/v3/nn-sk_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Slovenian (sample file)" href="MultiHPLT/v3/nn-sl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Albanian (sample file)" href="MultiHPLT/v3/nn-sq_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Serbian (sample file)" href="MultiHPLT/v3/nn-sr_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Turkish (sample file)" href="MultiHPLT/v3/nn-tr_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Ukrainian (sample file)" href="MultiHPLT/v3/nn-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/nn.zip">nn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/ro.zip">ro</a></th>
<td>1</td><td>950.8M</td><td>43.9M</td><td bgcolor='#c5ffc5'><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (9.3M links405.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-ro.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Romanian-Bosnian' (1.3M links44.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-ro.xml.gz">ces</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="sentence alignments for 'Romanian-Catalan' (2.2M links96.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-ro.xml.gz">ces</a></td>
<td bgcolor='#c1ffc1'><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' (11.5M links464.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-ro.xml.gz">ces</a></td>
<td bgcolor='#c1ffc1'><a rel="nofollow" title="sentence alignments for 'Romanian-Danish' (11.8M links494.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-ro.xml.gz">ces</a></td>
<td bgcolor='#c2ffc2'><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (11.0M links474.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-ro.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Romanian-English' (54.5M links2.5G tokens)" href="download.php?f=MultiHPLT/v3/xml/en-ro.xml.gz">ces</a></td>
<td bgcolor='#cfffcf'><a rel="nofollow" title="sentence alignments for 'Romanian-Estonian' (4.5M links188.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-ro.xml.gz">ces</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Romanian-Basque' (0.5M links19.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-ro.xml.gz">ces</a></td>
<td bgcolor='#c5ffc5'><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' (8.9M links335.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-ro.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Romanian-Irish' (1.1M links51.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-ro.xml.gz">ces</a></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="sentence alignments for 'Romanian-Galician' (0.9M links34.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-ro.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (6.9M links283.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-ro.xml.gz">ces</a></td>
<td bgcolor='#c2ffc2'><a rel="nofollow" title="sentence alignments for 'Romanian-Hungarian' (11.1M links459.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-ro.xml.gz">ces</a></td>
<td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Romanian-Icelandic' (1.3M links52.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-ro.xml.gz">ces</a></td>
<th>ro</th>
<td bgcolor='#efffd0'><a rel="nofollow" title="sentence alignments for 'Romanian-Georgian' (0.3M links11.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-ro.xml.gz">ces</a></td>
<td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Romanian-Lithuanian' (6.4M links265.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-ro.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Romanian-Latvian' (5.8M links250.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-ro.xml.gz">ces</a></td>
<td bgcolor='#dcffc7'><a rel="nofollow" title="sentence alignments for 'Romanian-Macedonian' (1.5M links58.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/mk-ro.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Romanian-Maltese' (1.0M links66.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/mt-ro.xml.gz">ces</a></td>
<td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Romanian-BokmÃ¥l, Norwegian' (6.4M links251.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/nb-ro.xml.gz">ces</a></td>
<td bgcolor='#fff0eb'><a rel="nofollow" title="sentence alignments for 'Romanian-Norwegian Nynorsk' (34.9k links1.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/nn-ro.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Slovak (sample file)" href="MultiHPLT/v3/ro-sk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovenian (sample file)" href="MultiHPLT/v3/ro-sl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Albanian (sample file)" href="MultiHPLT/v3/ro-sq_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Serbian (sample file)" href="MultiHPLT/v3/ro-sr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Turkish (sample file)" href="MultiHPLT/v3/ro-tr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Ukrainian (sample file)" href="MultiHPLT/v3/ro-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/ro.zip">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/sk.zip">sk</a></th>
<td>1</td><td>467.2M</td><td>25.7M</td><td bgcolor='#c8ffc8'><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' (7.5M links303.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-sk.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Slovak-Bosnian' (1.1M links36.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-sk.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Slovak-Catalan' (1.7M links67.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-sk.xml.gz">ces</a></td>
<td bgcolor='#c1ffc1'><a rel="nofollow" title="sentence alignments for 'Slovak-Czech' (11.8M links442.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-sk.xml.gz">ces</a></td>
<td bgcolor='#c5ffc5'><a rel="nofollow" title="sentence alignments for 'Slovak-Danish' (9.1M links357.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-sk.xml.gz">ces</a></td>
<td bgcolor='#c6ffc6'><a rel="nofollow" title="sentence alignments for 'Slovak-Greek' (8.2M links332.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-sk.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Slovak-English' (32.2M links1.3G tokens)" href="download.php?f=MultiHPLT/v3/xml/en-sk.xml.gz">ces</a></td>
<td bgcolor='#cfffcf'><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' (4.3M links164.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-sk.xml.gz">ces</a></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="sentence alignments for 'Slovak-Basque' (0.5M links16.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-sk.xml.gz">ces</a></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' (7.3M links257.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-sk.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Slovak-Irish' (1.1M links45.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-sk.xml.gz">ces</a></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="sentence alignments for 'Slovak-Galician' (0.8M links30.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-sk.xml.gz">ces</a></td>
<td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' (6.4M links243.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-sk.xml.gz">ces</a></td>
<td bgcolor='#c4ffc4'><a rel="nofollow" title="sentence alignments for 'Slovak-Hungarian' (9.4M links364.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-sk.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' (1.5M links52.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-sk.xml.gz">ces</a></td>
<th>sk</th>
<td bgcolor='#f1ffd2'><a rel="nofollow" title="sentence alignments for 'Slovak-Georgian' (0.2M links9.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-sk.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' (6.0M links227.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-sk.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' (5.7M links226.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-sk.xml.gz">ces</a></td>
<td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Slovak-Macedonian' (1.3M links48.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/mk-sk.xml.gz">ces</a></td>
<td bgcolor='#dfffc7'><a rel="nofollow" title="sentence alignments for 'Slovak-Maltese' (1.1M links66.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/mt-sk.xml.gz">ces</a></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="sentence alignments for 'Slovak-BokmÃ¥l, Norwegian' (4.7M links172.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/nb-sk.xml.gz">ces</a></td>
<td bgcolor='#ffebe7'><a rel="nofollow" title="sentence alignments for 'Slovak-Norwegian Nynorsk' (26.1k links0.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/nn-sk.xml.gz">ces</a></td>
<td bgcolor='#c6ffc6'><a rel="nofollow" title="sentence alignments for 'Slovak-Romanian' (8.7M links359.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/ro-sk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="MultiHPLT/v3/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Albanian (sample file)" href="MultiHPLT/v3/sk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Serbian (sample file)" href="MultiHPLT/v3/sk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Turkish (sample file)" href="MultiHPLT/v3/sk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="MultiHPLT/v3/sk-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/sk.zip">sk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/sl.zip">sl</a></th>
<td>1</td><td>302.1M</td><td>15.0M</td><td bgcolor='#ccffcc'><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (5.5M links243.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-sl.xml.gz">ces</a></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="sentence alignments for 'Slovenian-Bosnian' (0.9M links29.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-sl.xml.gz">ces</a></td>
<td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Slovenian-Catalan' (1.4M links60.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-sl.xml.gz">ces</a></td>
<td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' (6.4M links261.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-sl.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Slovenian-Danish' (6.0M links259.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-sl.xml.gz">ces</a></td>
<td bgcolor='#ccffcc'><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' (5.5M links247.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-sl.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (16.8M links761.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-sl.xml.gz">ces</a></td>
<td bgcolor='#d1ffce'><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (3.7M links153.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-sl.xml.gz">ces</a></td>
<td bgcolor='#e8ffca'><a rel="nofollow" title="sentence alignments for 'Slovenian-Basque' (0.4M links15.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-sl.xml.gz">ces</a></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' (5.1M links195.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-sl.xml.gz">ces</a></td>
<td bgcolor='#e0ffc7'><a rel="nofollow" title="sentence alignments for 'Slovenian-Irish' (1.0M links43.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-sl.xml.gz">ces</a></td>
<td bgcolor='#e3ffc7'><a rel="nofollow" title="sentence alignments for 'Slovenian-Galician' (0.7M links26.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-sl.xml.gz">ces</a></td>
<td bgcolor='#ccffcc'><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (5.3M links215.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-sl.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Slovenian-Hungarian' (6.0M links255.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-sl.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (1.0M links36.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-sl.xml.gz">ces</a></td>
<th>sl</th>
<td bgcolor='#ffffe2'><a rel="nofollow" title="sentence alignments for 'Slovenian-Georgian' (0.2M links7.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-sl.xml.gz">ces</a></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (4.6M links190.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-sl.xml.gz">ces</a></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (4.6M links195.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-sl.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Slovenian-Macedonian' (1.2M links45.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/mk-sl.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Slovenian-Maltese' (1.0M links67.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/mt-sl.xml.gz">ces</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="sentence alignments for 'Slovenian-BokmÃ¥l, Norwegian' (3.2M links121.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/nb-sl.xml.gz">ces</a></td>
<td bgcolor='#ffe5e3'><a rel="nofollow" title="sentence alignments for 'Slovenian-Norwegian Nynorsk' (18.6k links0.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/nn-sl.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Slovenian-Romanian' (5.8M links257.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/ro-sl.xml.gz">ces</a></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' (6.0M links247.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Albanian (sample file)" href="MultiHPLT/v3/sl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Serbian (sample file)" href="MultiHPLT/v3/sl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Turkish (sample file)" href="MultiHPLT/v3/sl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="MultiHPLT/v3/sl-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/sl.zip">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/sq.zip">sq</a></th>
<td>1</td><td>148.8M</td><td>6.3M</td><td bgcolor='#d9ffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (1.8M links76.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-sq.xml.gz">ces</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (0.5M links19.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-sq.xml.gz">ces</a></td>
<td bgcolor='#e0ffc7'><a rel="nofollow" title="sentence alignments for 'Albanian-Catalan' (1.0M links43.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-sq.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Czech' (1.6M links65.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-sq.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Danish' (1.7M links71.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-sq.xml.gz">ces</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Greek' (1.8M links75.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-sq.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Albanian-English' (6.9M links332.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-sq.xml.gz">ces</a></td>
<td bgcolor='#e0ffc7'><a rel="nofollow" title="sentence alignments for 'Albanian-Estonian' (1.0M links37.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-sq.xml.gz">ces</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="sentence alignments for 'Albanian-Basque' (0.4M links15.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-sq.xml.gz">ces</a></td>
<td bgcolor='#dcffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Finnish' (1.4M links51.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-sq.xml.gz">ces</a></td>
<td bgcolor='#e3ffc8'><a rel="nofollow" title="sentence alignments for 'Albanian-Irish' (0.7M links33.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-sq.xml.gz">ces</a></td>
<td bgcolor='#e3ffc8'><a rel="nofollow" title="sentence alignments for 'Albanian-Galician' (0.7M links30.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-sq.xml.gz">ces</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (1.7M links69.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-sq.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Hungarian' (1.6M links64.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-sq.xml.gz">ces</a></td>
<td bgcolor='#e1ffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Icelandic' (0.8M links33.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-sq.xml.gz">ces</a></td>
<th>sq</th>
<td bgcolor='#ffffe5'><a rel="nofollow" title="sentence alignments for 'Albanian-Georgian' (0.2M links7.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-sq.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Lithuanian' (1.2M links45.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-sq.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Latvian' (1.2M links47.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-sq.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (1.2M links53.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/mk-sq.xml.gz">ces</a></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="sentence alignments for 'Albanian-Maltese' (0.3M links13.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/mt-sq.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-BokmÃ¥l, Norwegian' (1.3M links53.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/nb-sq.xml.gz">ces</a></td>
<td bgcolor='#ffd6d6'><a rel="nofollow" title="sentence alignments for 'Albanian-Norwegian Nynorsk' (4.8k links0.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/nn-sq.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Albanian-Romanian' (1.9M links82.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/ro-sq.xml.gz">ces</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Slovak' (1.5M links60.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/sk-sq.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Albanian-Slovenian' (1.1M links46.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/sl-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="MultiHPLT/v3/sq-sr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Turkish (sample file)" href="MultiHPLT/v3/sq-tr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Ukrainian (sample file)" href="MultiHPLT/v3/sq-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/sq.zip">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/sr.zip">sr</a></th>
<td>1</td><td>149.7M</td><td>7.9M</td><td bgcolor='#d5ffc9'><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (2.7M links98.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-sr.xml.gz">ces</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (0.6M links22.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-sr.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Serbian-Catalan' (1.1M links47.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-sr.xml.gz">ces</a></td>
<td bgcolor='#d5ffc9'><a rel="nofollow" title="sentence alignments for 'Serbian-Czech' (2.6M links92.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-sr.xml.gz">ces</a></td>
<td bgcolor='#d5ffc9'><a rel="nofollow" title="sentence alignments for 'Serbian-Danish' (2.7M links98.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-sr.xml.gz">ces</a></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="sentence alignments for 'Serbian-Greek' (2.9M links106.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-sr.xml.gz">ces</a></td>
<td bgcolor='#c6ffc6'><a rel="nofollow" title="sentence alignments for 'Serbian-English' (8.5M links355.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/en-sr.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Serbian-Estonian' (1.2M links42.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-sr.xml.gz">ces</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="sentence alignments for 'Serbian-Basque' (0.4M links14.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-sr.xml.gz">ces</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="sentence alignments for 'Serbian-Finnish' (2.1M links69.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-sr.xml.gz">ces</a></td>
<td bgcolor='#e3ffc8'><a rel="nofollow" title="sentence alignments for 'Serbian-Irish' (0.7M links30.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-sr.xml.gz">ces</a></td>
<td bgcolor='#e3ffc7'><a rel="nofollow" title="sentence alignments for 'Serbian-Galician' (0.7M links26.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-sr.xml.gz">ces</a></td>
<td bgcolor='#d6ffc9'><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (2.5M links88.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-sr.xml.gz">ces</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="sentence alignments for 'Serbian-Hungarian' (2.4M links85.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-sr.xml.gz">ces</a></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="sentence alignments for 'Serbian-Icelandic' (0.8M links29.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-sr.xml.gz">ces</a></td>
<th>sr</th>
<td bgcolor='#ffffe1'><a rel="nofollow" title="sentence alignments for 'Serbian-Georgian' (0.2M links8.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-sr.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Serbian-Lithuanian' (1.9M links63.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-sr.xml.gz">ces</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="sentence alignments for 'Serbian-Latvian' (1.7M links59.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-sr.xml.gz">ces</a></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (1.1M links42.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/mk-sr.xml.gz">ces</a></td>
<td bgcolor='#eeffcf'><a rel="nofollow" title="sentence alignments for 'Serbian-Maltese' (0.3M links12.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/mt-sr.xml.gz">ces</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="sentence alignments for 'Serbian-BokmÃ¥l, Norwegian' (2.1M links78.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/nb-sr.xml.gz">ces</a></td>
<td bgcolor='#ffdbda'><a rel="nofollow" title="sentence alignments for 'Serbian-Norwegian Nynorsk' (9.2k links0.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/nn-sr.xml.gz">ces</a></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="sentence alignments for 'Serbian-Romanian' (2.8M links109.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/ro-sr.xml.gz">ces</a></td>
<td bgcolor='#d6ffc9'><a rel="nofollow" title="sentence alignments for 'Serbian-Slovak' (2.5M links88.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/sk-sr.xml.gz">ces</a></td>
<td bgcolor='#dbffc7'><a rel="nofollow" title="sentence alignments for 'Serbian-Slovenian' (1.6M links59.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/sl-sr.xml.gz">ces</a></td>
<td bgcolor='#e0ffc7'><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (1.0M links40.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/sq-sr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Turkish (sample file)" href="MultiHPLT/v3/sr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Ukrainian (sample file)" href="MultiHPLT/v3/sr-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/sr.zip">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/tr.zip">tr</a></th>
<td>1</td><td>688.8M</td><td>43.3M</td><td bgcolor='#d5ffc9'><a rel="nofollow" title="sentence alignments for 'Turkish-Bulgarian' (2.7M links90.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-tr.xml.gz">ces</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Turkish-Bosnian' (0.5M links15.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-tr.xml.gz">ces</a></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="sentence alignments for 'Turkish-Catalan' (0.8M links28.9M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-tr.xml.gz">ces</a></td>
<td bgcolor='#cfffcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Czech' (4.3M links137.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-tr.xml.gz">ces</a></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="sentence alignments for 'Turkish-Danish' (4.6M links148.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-tr.xml.gz">ces</a></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="sentence alignments for 'Turkish-Greek' (4.7M links156.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-tr.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Turkish-English' (38.8M links1.9G tokens)" href="download.php?f=MultiHPLT/v3/xml/en-tr.xml.gz">ces</a></td>
<td bgcolor='#dfffc7'><a rel="nofollow" title="sentence alignments for 'Turkish-Estonian' (1.1M links34.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-tr.xml.gz">ces</a></td>
<td bgcolor='#ffffe2'><a rel="nofollow" title="sentence alignments for 'Turkish-Basque' (0.2M links6.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-tr.xml.gz">ces</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="sentence alignments for 'Turkish-Finnish' (3.5M links99.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-tr.xml.gz">ces</a></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="sentence alignments for 'Turkish-Irish' (0.3M links11.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-tr.xml.gz">ces</a></td>
<td bgcolor='#eeffcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Galician' (0.3M links9.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-tr.xml.gz">ces</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="sentence alignments for 'Turkish-Croatian' (2.2M links70.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-tr.xml.gz">ces</a></td>
<td bgcolor='#d0ffcf'><a rel="nofollow" title="sentence alignments for 'Turkish-Hungarian' (4.0M links128.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-tr.xml.gz">ces</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="sentence alignments for 'Turkish-Icelandic' (0.6M links17.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-tr.xml.gz">ces</a></td>
<th>tr</th>
<td bgcolor='#ffffe1'><a rel="nofollow" title="sentence alignments for 'Turkish-Georgian' (0.2M links7.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-tr.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Turkish-Lithuanian' (1.8M links56.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-tr.xml.gz">ces</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="sentence alignments for 'Turkish-Latvian' (1.6M links52.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-tr.xml.gz">ces</a></td>
<td bgcolor='#e8ffca'><a rel="nofollow" title="sentence alignments for 'Turkish-Macedonian' (0.4M links15.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/mk-tr.xml.gz">ces</a></td>
<td bgcolor='#ffffee'><a rel="nofollow" title="sentence alignments for 'Turkish-Maltese' (0.1M links4.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/mt-tr.xml.gz">ces</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="sentence alignments for 'Turkish-BokmÃ¥l, Norwegian' (2.3M links77.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/nb-tr.xml.gz">ces</a></td>
<td bgcolor='#ffeae6'><a rel="nofollow" title="sentence alignments for 'Turkish-Norwegian Nynorsk' (25.6k links0.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/nn-tr.xml.gz">ces</a></td>
<td bgcolor='#d0ffce'><a rel="nofollow" title="sentence alignments for 'Turkish-Romanian' (3.9M links135.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/ro-tr.xml.gz">ces</a></td>
<td bgcolor='#d5ffc9'><a rel="nofollow" title="sentence alignments for 'Turkish-Slovak' (2.6M links81.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/sk-tr.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Turkish-Slovenian' (1.2M links42.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/sl-tr.xml.gz">ces</a></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="sentence alignments for 'Turkish-Albanian' (0.5M links19.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/sq-tr.xml.gz">ces</a></td>
<td bgcolor='#e3ffc8'><a rel="nofollow" title="sentence alignments for 'Turkish-Serbian' (0.7M links23.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/sr-tr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Turkish-Ukrainian (sample file)" href="MultiHPLT/v3/tr-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/tr.zip">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/raw/uk.zip">uk</a></th>
<td>1</td><td>724.7M</td><td>40.0M</td><td bgcolor='#ccffcc'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (5.6M links211.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/bg-uk.xml.gz">ces</a></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bosnian' (1.0M links33.3M tokens)" href="download.php?f=MultiHPLT/v3/xml/bs-uk.xml.gz">ces</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Catalan' (1.9M links78.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/ca-uk.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Czech' (6.7M links236.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/cs-uk.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Danish' (6.7M links246.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/da-uk.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' (6.7M links249.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/el-uk.xml.gz">ces</a></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (45.4M links1.9G tokens)" href="download.php?f=MultiHPLT/v3/xml/en-uk.xml.gz">ces</a></td>
<td bgcolor='#d5ffc9'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Estonian' (2.7M links92.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/et-uk.xml.gz">ces</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Basque' (0.5M links17.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/eu-uk.xml.gz">ces</a></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Finnish' (5.3M links171.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/fi-uk.xml.gz">ces</a></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Irish' (0.9M links36.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/ga-uk.xml.gz">ces</a></td>
<td bgcolor='#e1ffc6'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Galician' (0.8M links30.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/gl-uk.xml.gz">ces</a></td>
<td bgcolor='#cfffcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (4.5M links159.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/hr-uk.xml.gz">ces</a></td>
<td bgcolor='#caffca'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hungarian' (6.2M links221.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/hu-uk.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Icelandic' (1.3M links44.8M tokens)" href="download.php?f=MultiHPLT/v3/xml/is-uk.xml.gz">ces</a></td>
<th>uk</th>
<td bgcolor='#eeffcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Georgian' (0.3M links11.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/ka-uk.xml.gz">ces</a></td>
<td bgcolor='#d0ffd0'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Lithuanian' (4.1M links142.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/lt-uk.xml.gz">ces</a></td>
<td bgcolor='#d1ffce'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Latvian' (3.8M links135.0M tokens)" href="download.php?f=MultiHPLT/v3/xml/lv-uk.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Macedonian' (1.3M links47.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/mk-uk.xml.gz">ces</a></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Maltese' (0.3M links14.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/mt-uk.xml.gz">ces</a></td>
<td bgcolor='#d0ffcf'><a rel="nofollow" title="sentence alignments for 'Ukrainian-BokmÃ¥l, Norwegian' (4.0M links150.7M tokens)" href="download.php?f=MultiHPLT/v3/xml/nb-uk.xml.gz">ces</a></td>
<td bgcolor='#fff0eb'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Norwegian Nynorsk' (35.1k links1.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/nn-uk.xml.gz">ces</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Romanian' (6.9M links270.4M tokens)" href="download.php?f=MultiHPLT/v3/xml/ro-uk.xml.gz">ces</a></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovak' (5.2M links184.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/sk-uk.xml.gz">ces</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (3.0M links112.2M tokens)" href="download.php?f=MultiHPLT/v3/xml/sl-uk.xml.gz">ces</a></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Albanian' (1.2M links51.6M tokens)" href="download.php?f=MultiHPLT/v3/xml/sq-uk.xml.gz">ces</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Serbian' (2.0M links74.1M tokens)" href="download.php?f=MultiHPLT/v3/xml/sr-uk.xml.gz">ces</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="sentence alignments for 'Ukrainian-Turkish' (3.1M links95.5M tokens)" href="download.php?f=MultiHPLT/v3/xml/tr-uk.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=MultiHPLT/v3/xml/uk.zip">uk</a></th></tr>
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
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=MultiHPLT/v3/mono/bg.tok.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs plain text' href="download.php?f=MultiHPLT/v3/mono/bs.tok.gz">bs</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=MultiHPLT/v3/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=MultiHPLT/v3/mono/cs.tok.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized da plain text' href="download.php?f=MultiHPLT/v3/mono/da.tok.gz">da</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=MultiHPLT/v3/mono/el.tok.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=MultiHPLT/v3/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=MultiHPLT/v3/mono/et.tok.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=MultiHPLT/v3/mono/eu.tok.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=MultiHPLT/v3/mono/fi.tok.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized ga plain text' href="download.php?f=MultiHPLT/v3/mono/ga.tok.gz">ga</a>
</th><th><a rel="nofollow" title='monolingual tokenized gl plain text' href="download.php?f=MultiHPLT/v3/mono/gl.tok.gz">gl</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=MultiHPLT/v3/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hu plain text' href="download.php?f=MultiHPLT/v3/mono/hu.tok.gz">hu</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=MultiHPLT/v3/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized ka plain text' href="download.php?f=MultiHPLT/v3/mono/ka.tok.gz">ka</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=MultiHPLT/v3/mono/lt.tok.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=MultiHPLT/v3/mono/lv.tok.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=MultiHPLT/v3/mono/mk.tok.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=MultiHPLT/v3/mono/mt.tok.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized nb plain text' href="download.php?f=MultiHPLT/v3/mono/nb.tok.gz">nb</a>
</th><th><a rel="nofollow" title='monolingual tokenized nn plain text' href="download.php?f=MultiHPLT/v3/mono/nn.tok.gz">nn</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=MultiHPLT/v3/mono/ro.tok.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized sk plain text' href="download.php?f=MultiHPLT/v3/mono/sk.tok.gz">sk</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=MultiHPLT/v3/mono/sl.tok.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=MultiHPLT/v3/mono/sq.tok.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=MultiHPLT/v3/mono/sr.tok.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=MultiHPLT/v3/mono/tr.tok.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=MultiHPLT/v3/mono/uk.tok.gz">uk</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=MultiHPLT/v3/mono/bg.txt.gz">bg</a>
</th><td>1</td> <td>615.4M</td> <td>29.9M</td><td></td><td bgcolor="#ceffce"><a rel="nofollow" title='Bulgarian-Bosnian (1,590,593 sentence pairs, 46.30M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-bs.tmx.gz">1.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Bulgarian-Catalan (2,273,346 sentence pairs, 82.22M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-ca.tmx.gz">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Czech (9,019,799 sentence pairs, 311.33M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-cs.tmx.gz">9.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Danish (8,547,759 sentence pairs, 305.27M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-da.tmx.gz">8.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Greek (8,973,509 sentence pairs, 340.67M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-el.tmx.gz">9.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-English (35,660,392 sentence pairs, 1.34G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-en.tmx.gz">35.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Estonian (5,012,103 sentence pairs, 173.15M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-et.tmx.gz">5.0M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Bulgarian-Basque (670,703 sentence pairs, 19.87M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-eu.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Finnish (7,263,819 sentence pairs, 231.12M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-fi.tmx.gz">7.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Bulgarian-Irish (1,362,160 sentence pairs, 54.50M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-ga.tmx.gz">1.4M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Bulgarian-Galician (1,057,928 sentence pairs, 35.69M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-gl.tmx.gz">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Croatian (6,958,768 sentence pairs, 241.56M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-hr.tmx.gz">7.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Hungarian (8,482,293 sentence pairs, 293.87M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-hu.tmx.gz">8.5M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Bulgarian-Icelandic (1,641,896 sentence pairs, 53.33M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-is.tmx.gz">1.6M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bulgarian-Georgian (341,781 sentence pairs, 11.54M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-ka.tmx.gz">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Lithuanian (6,516,829 sentence pairs, 223.31M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-lt.tmx.gz">6.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Latvian (6,183,957 sentence pairs, 217.57M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-lv.tmx.gz">6.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Bulgarian-Macedonian (1,904,693 sentence pairs, 63.40M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-mk.tmx.gz">1.9M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Bulgarian-Maltese (1,182,469 sentence pairs, 53.79M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-mt.tmx.gz">1.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-BokmÃ¥l, Norwegian (4,882,093 sentence pairs, 160.10M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-nb.tmx.gz">4.9M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Bulgarian-Norwegian Nynorsk (49,442 sentence pairs, 1.29M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-nn.tmx.gz">49.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Romanian (9,262,047 sentence pairs, 347.81M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-ro.tmx.gz">9.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Slovak (7,450,470 sentence pairs, 258.44M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-sk.tmx.gz">7.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Slovenian (5,527,416 sentence pairs, 205.68M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-sl.tmx.gz">5.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Albanian (1,792,508 sentence pairs, 66.21M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-sq.tmx.gz">1.8M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Bulgarian-Serbian (2,656,396 sentence pairs, 84.30M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-sr.tmx.gz">2.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Bulgarian-Turkish (2,679,405 sentence pairs, 75.78M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-tr.tmx.gz">2.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Ukrainian (5,638,599 sentence pairs, 175.99M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bg-uk.tmx.gz">5.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs plain text' href="download.php?f=MultiHPLT/v3/mono/bs.txt.gz">bs</a>
</th><td>1</td> <td>111.4M</td> <td>6.1M</td><td bgcolor="#ceffce"><a rel="nofollow" title='Bosnian-Bulgarian (1,590,593 sentence pairs, 46.30M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-bs.txt.zip">1.6M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-Catalan (405,325 sentence pairs, 12.30M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-ca.tmx.gz">0.4M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Bosnian-Czech (1,253,686 sentence pairs, 34.63M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-cs.tmx.gz">1.3M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Bosnian-Danish (1,155,994 sentence pairs, 32.83M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-da.tmx.gz">1.2M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Bosnian-Greek (1,186,429 sentence pairs, 36.52M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-el.tmx.gz">1.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bosnian-English (6,822,086 sentence pairs, 235.27M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-en.tmx.gz">6.8M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Bosnian-Estonian (668,293 sentence pairs, 17.38M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-et.tmx.gz">0.7M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bosnian-Basque (163,269 sentence pairs, 4.09M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-eu.tmx.gz">0.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Bosnian-Finnish (1,014,210 sentence pairs, 24.97M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-fi.tmx.gz">1.0M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Bosnian-Irish (225,402 sentence pairs, 7.23M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-ga.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Bosnian-Galician (226,437 sentence pairs, 6.56M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-gl.tmx.gz">0.2M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Bosnian-Croatian (1,376,850 sentence pairs, 38.60M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-hr.tmx.gz">1.4M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Bosnian-Hungarian (1,173,967 sentence pairs, 32.04M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-hu.tmx.gz">1.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bosnian-Icelandic (317,930 sentence pairs, 8.68M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-is.tmx.gz">0.3M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Bosnian-Georgian (83,823 sentence pairs, 2.46M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-ka.tmx.gz">83.8k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Bosnian-Lithuanian (863,800 sentence pairs, 22.82M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-lt.tmx.gz">0.9M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Bosnian-Latvian (801,920 sentence pairs, 21.42M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-lv.tmx.gz">0.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bosnian-Macedonian (503,194 sentence pairs, 14.98M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Bosnian-Maltese (91,670 sentence pairs, 2.65M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-mt.tmx.gz">91.7k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Bosnian-BokmÃ¥l, Norwegian (841,983 sentence pairs, 23.89M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-nb.tmx.gz">0.8M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Bosnian-Norwegian Nynorsk (11,809 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-nn.tmx.gz">11.8k</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Bosnian-Romanian (1,274,690 sentence pairs, 38.80M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-ro.tmx.gz">1.3M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Bosnian-Slovak (1,125,367 sentence pairs, 31.21M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-sk.tmx.gz">1.1M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Bosnian-Slovenian (882,169 sentence pairs, 25.32M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-sl.tmx.gz">0.9M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Bosnian-Albanian (498,909 sentence pairs, 16.87M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#d8ffc6"><a rel="nofollow" title='Bosnian-Serbian (636,829 sentence pairs, 19.45M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-sr.tmx.gz">0.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-Turkish (520,495 sentence pairs, 13.04M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-tr.tmx.gz">0.5M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Bosnian-Ukrainian (1,013,009 sentence pairs, 28.08M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/bs-uk.tmx.gz">1.0M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=MultiHPLT/v3/mono/ca.txt.gz">ca</a>
</th><td>1</td> <td>406.7M</td> <td>16.2M</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Catalan-Bulgarian (2,273,346 sentence pairs, 82.22M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-ca.txt.zip">2.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Catalan-Bosnian (405,325 sentence pairs, 12.30M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-ca.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Catalan-Czech (2,128,928 sentence pairs, 74.63M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-cs.tmx.gz">2.1M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Catalan-Danish (2,486,872 sentence pairs, 88.63M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-da.tmx.gz">2.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Catalan-Greek (2,257,883 sentence pairs, 84.97M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-el.tmx.gz">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Catalan-English (17,601,213 sentence pairs, 754.28M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-en.tmx.gz">17.6M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Catalan-Estonian (1,249,204 sentence pairs, 41.59M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-et.tmx.gz">1.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Catalan-Basque (800,618 sentence pairs, 28.32M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-eu.tmx.gz">0.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Catalan-Finnish (1,992,481 sentence pairs, 62.75M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-fi.tmx.gz">2.0M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Catalan-Irish (842,119 sentence pairs, 34.99M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-ga.tmx.gz">0.8M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Catalan-Galician (1,350,025 sentence pairs, 54.75M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-gl.tmx.gz">1.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Catalan-Croatian (1,849,338 sentence pairs, 65.61M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-hr.tmx.gz">1.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Catalan-Hungarian (1,803,051 sentence pairs, 61.86M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-hu.tmx.gz">1.8M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Catalan-Icelandic (941,925 sentence pairs, 33.37M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-is.tmx.gz">0.9M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Catalan-Georgian (184,932 sentence pairs, 7.20M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-ka.tmx.gz">0.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Catalan-Lithuanian (1,555,322 sentence pairs, 52.77M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-lt.tmx.gz">1.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Catalan-Latvian (1,597,777 sentence pairs, 54.99M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-lv.tmx.gz">1.6M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Catalan-Macedonian (933,266 sentence pairs, 34.72M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-mk.tmx.gz">0.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Catalan-Maltese (343,703 sentence pairs, 12.63M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Catalan-BokmÃ¥l, Norwegian (1,854,001 sentence pairs, 66.72M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-nb.tmx.gz">1.9M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Catalan-Norwegian Nynorsk (20,596 sentence pairs, 0.58M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-nn.tmx.gz">20.6k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Catalan-Romanian (2,191,219 sentence pairs, 83.16M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-ro.tmx.gz">2.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Catalan-Slovak (1,681,849 sentence pairs, 57.54M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-sk.tmx.gz">1.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Catalan-Slovenian (1,425,743 sentence pairs, 51.10M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-sl.tmx.gz">1.4M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Catalan-Albanian (955,106 sentence pairs, 38.16M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-sq.tmx.gz">1.0M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Catalan-Serbian (1,142,099 sentence pairs, 40.69M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-sr.tmx.gz">1.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Catalan-Turkish (760,461 sentence pairs, 24.07M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-tr.tmx.gz">0.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Catalan-Ukrainian (1,883,045 sentence pairs, 64.99M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ca-uk.tmx.gz">1.9M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=MultiHPLT/v3/mono/cs.txt.gz">cs</a>
</th><td>1</td> <td>876.5M</td> <td>49.4M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Bulgarian (9,019,799 sentence pairs, 311.33M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-cs.txt.zip">9.0M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Czech-Bosnian (1,253,686 sentence pairs, 34.63M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-cs.txt.zip">1.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Czech-Catalan (2,128,928 sentence pairs, 74.63M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-cs.txt.zip">2.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Danish (13,763,489 sentence pairs, 447.57M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-da.tmx.gz">13.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Greek (11,776,768 sentence pairs, 411.18M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-el.tmx.gz">11.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-English (57,873,634 sentence pairs, 2.04G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-en.tmx.gz">57.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Estonian (5,573,905 sentence pairs, 179.59M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-et.tmx.gz">5.6M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Czech-Basque (712,731 sentence pairs, 20.01M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-eu.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Finnish (11,161,603 sentence pairs, 319.93M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-fi.tmx.gz">11.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Czech-Irish (1,450,159 sentence pairs, 54.65M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-ga.tmx.gz">1.5M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Czech-Galician (1,059,549 sentence pairs, 34.26M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-gl.tmx.gz">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Croatian (7,792,535 sentence pairs, 253.95M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-hr.tmx.gz">7.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Hungarian (13,018,659 sentence pairs, 411.92M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-hu.tmx.gz">13.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Czech-Icelandic (1,830,750 sentence pairs, 55.77M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-is.tmx.gz">1.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Czech-Georgian (330,198 sentence pairs, 10.64M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-ka.tmx.gz">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Lithuanian (7,256,671 sentence pairs, 234.92M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-lt.tmx.gz">7.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Latvian (6,656,513 sentence pairs, 220.51M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-lv.tmx.gz">6.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Czech-Macedonian (1,702,614 sentence pairs, 53.69M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-mk.tmx.gz">1.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Czech-Maltese (1,147,133 sentence pairs, 49.20M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-mt.tmx.gz">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-BokmÃ¥l, Norwegian (7,990,827 sentence pairs, 246.95M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-nb.tmx.gz">8.0M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Czech-Norwegian Nynorsk (71,652 sentence pairs, 1.85M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-nn.tmx.gz">71.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Romanian (11,466,250 sentence pairs, 402.93M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-ro.tmx.gz">11.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Slovak (11,761,696 sentence pairs, 380.06M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-sk.tmx.gz">11.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Slovenian (6,377,285 sentence pairs, 222.63M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-sl.tmx.gz">6.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Czech-Albanian (1,620,385 sentence pairs, 56.67M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-sq.tmx.gz">1.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Serbian (2,649,637 sentence pairs, 79.25M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-sr.tmx.gz">2.6M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Czech-Turkish (4,294,925 sentence pairs, 116.15M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-tr.tmx.gz">4.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Ukrainian (6,715,105 sentence pairs, 198.59M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/cs-uk.tmx.gz">6.7M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized da plain text' href="download.php?f=MultiHPLT/v3/mono/da.txt.gz">da</a>
</th><td>1</td> <td>1.1G</td> <td>55.2M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Bulgarian (8,547,759 sentence pairs, 305.27M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-da.txt.zip">8.5M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Danish-Bosnian (1,155,994 sentence pairs, 32.83M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-da.txt.zip">1.2M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Danish-Catalan (2,486,872 sentence pairs, 88.63M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-da.txt.zip">2.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Czech (13,763,489 sentence pairs, 447.57M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-da.txt.zip">13.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Greek (12,601,199 sentence pairs, 452.48M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-el.tmx.gz">12.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-English (68,815,563 sentence pairs, 2.44G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-en.tmx.gz">68.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Estonian (5,698,028 sentence pairs, 190.28M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-et.tmx.gz">5.7M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Danish-Basque (707,285 sentence pairs, 20.61M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-eu.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Finnish (14,762,158 sentence pairs, 436.29M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-fi.tmx.gz">14.8M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Irish (1,558,324 sentence pairs, 61.29M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-ga.tmx.gz">1.6M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Danish-Galician (1,127,123 sentence pairs, 37.84M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-gl.tmx.gz">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Croatian (7,307,956 sentence pairs, 247.16M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-hr.tmx.gz">7.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Hungarian (11,900,008 sentence pairs, 387.87M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-hu.tmx.gz">11.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Danish-Icelandic (2,209,881 sentence pairs, 70.04M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-is.tmx.gz">2.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Danish-Georgian (311,234 sentence pairs, 10.44M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-ka.tmx.gz">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Lithuanian (7,003,165 sentence pairs, 233.63M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-lt.tmx.gz">7.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Latvian (6,659,011 sentence pairs, 227.63M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-lv.tmx.gz">6.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Danish-Macedonian (1,678,660 sentence pairs, 55.36M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-mk.tmx.gz">1.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Danish-Maltese (1,210,839 sentence pairs, 53.62M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-mt.tmx.gz">1.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-BokmÃ¥l, Norwegian (13,690,600 sentence pairs, 445.23M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-nb.tmx.gz">13.7M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Danish-Norwegian Nynorsk (80,116 sentence pairs, 2.11M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-nn.tmx.gz">80.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Romanian (11,785,299 sentence pairs, 424.40M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-ro.tmx.gz">11.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Slovak (9,066,738 sentence pairs, 303.84M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-sk.tmx.gz">9.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Slovenian (6,031,089 sentence pairs, 218.45M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-sl.tmx.gz">6.0M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Albanian (1,688,215 sentence pairs, 61.98M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-sq.tmx.gz">1.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Danish-Serbian (2,669,346 sentence pairs, 84.47M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-sr.tmx.gz">2.7M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Danish-Turkish (4,570,694 sentence pairs, 124.61M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-tr.tmx.gz">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Ukrainian (6,660,119 sentence pairs, 204.63M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/da-uk.tmx.gz">6.7M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=MultiHPLT/v3/mono/el.txt.gz">el</a>
</th><td>1</td> <td>980.0M</td> <td>45.4M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Bulgarian (8,973,509 sentence pairs, 340.67M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-el.txt.zip">9.0M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Greek-Bosnian (1,186,429 sentence pairs, 36.52M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-el.txt.zip">1.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Greek-Catalan (2,257,883 sentence pairs, 84.97M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-el.txt.zip">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Czech (11,776,768 sentence pairs, 411.18M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-el.txt.zip">11.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Danish (12,601,199 sentence pairs, 452.48M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-el.txt.zip">12.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-English (55,649,558 sentence pairs, 2.17G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-en.tmx.gz">55.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Estonian (5,288,892 sentence pairs, 186.61M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-et.tmx.gz">5.3M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Greek-Basque (705,222 sentence pairs, 21.55M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-eu.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Finnish (10,291,342 sentence pairs, 325.87M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-fi.tmx.gz">10.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Greek-Irish (1,491,506 sentence pairs, 60.54M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-ga.tmx.gz">1.5M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Greek-Galician (1,084,920 sentence pairs, 37.48M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-gl.tmx.gz">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Croatian (7,224,226 sentence pairs, 255.08M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-hr.tmx.gz">7.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Hungarian (11,397,864 sentence pairs, 392.69M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-hu.tmx.gz">11.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-Icelandic (2,049,523 sentence pairs, 64.61M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-is.tmx.gz">2.0M</a>
</td><td bgcolor="#deffc7"><a rel="nofollow" title='Greek-Georgian (356,488 sentence pairs, 12.00M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-ka.tmx.gz">0.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Lithuanian (6,891,076 sentence pairs, 240.37M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-lt.tmx.gz">6.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Latvian (6,387,997 sentence pairs, 227.78M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-lv.tmx.gz">6.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-Macedonian (1,856,703 sentence pairs, 62.48M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-mk.tmx.gz">1.9M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Greek-Maltese (1,191,169 sentence pairs, 56.45M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-mt.tmx.gz">1.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-BokmÃ¥l, Norwegian (7,290,035 sentence pairs, 245.55M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-nb.tmx.gz">7.3M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Greek-Norwegian Nynorsk (68,266 sentence pairs, 1.92M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-nn.tmx.gz">68.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Romanian (10,998,127 sentence pairs, 416.23M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-ro.tmx.gz">11.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Slovak (8,191,468 sentence pairs, 289.90M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-sk.tmx.gz">8.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Slovenian (5,547,601 sentence pairs, 214.04M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-sl.tmx.gz">5.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Greek-Albanian (1,773,982 sentence pairs, 66.83M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-sq.tmx.gz">1.8M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Greek-Serbian (2,875,469 sentence pairs, 92.77M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-sr.tmx.gz">2.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Turkish (4,730,361 sentence pairs, 134.66M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-tr.tmx.gz">4.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Ukrainian (6,659,823 sentence pairs, 212.11M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/el-uk.tmx.gz">6.7M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=MultiHPLT/v3/mono/en.txt.gz">en</a>
</th><td>1</td> <td>8.1G</td> <td>385.8M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Bulgarian (35,660,392 sentence pairs, 1.34G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-en.txt.zip">35.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Bosnian (6,822,086 sentence pairs, 235.27M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-en.txt.zip">6.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Catalan (17,601,213 sentence pairs, 754.28M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-en.txt.zip">17.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Czech (57,873,634 sentence pairs, 2.04G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-en.txt.zip">57.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Danish (68,815,563 sentence pairs, 2.44G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-en.txt.zip">68.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Greek (55,649,558 sentence pairs, 2.17G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-en.txt.zip">55.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Estonian (15,520,792 sentence pairs, 550.70M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-et.tmx.gz">15.5M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='English-Basque (2,614,143 sentence pairs, 95.60M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-eu.tmx.gz">2.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Finnish (47,622,955 sentence pairs, 1.49G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-fi.tmx.gz">47.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Irish (3,916,880 sentence pairs, 164.59M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-ga.tmx.gz">3.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Galician (3,548,466 sentence pairs, 141.05M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-gl.tmx.gz">3.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Croatian (26,377,878 sentence pairs, 960.69M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-hr.tmx.gz">26.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hungarian (45,500,610 sentence pairs, 1.63G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-hu.tmx.gz">45.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Icelandic (5,491,654 sentence pairs, 189.01M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-is.tmx.gz">5.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Georgian (1,500,554 sentence pairs, 72.09M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-ka.tmx.gz">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Lithuanian (21,328,192 sentence pairs, 753.38M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-lt.tmx.gz">21.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Latvian (18,743,189 sentence pairs, 677.35M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-lv.tmx.gz">18.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Macedonian (5,818,642 sentence pairs, 221.65M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-mk.tmx.gz">5.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='English-Maltese (2,434,798 sentence pairs, 110.46M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-mt.tmx.gz">2.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-BokmÃ¥l, Norwegian (34,528,565 sentence pairs, 1.21G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-nb.tmx.gz">34.5M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='English-Norwegian Nynorsk (199,114 sentence pairs, 5.61M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-nn.tmx.gz">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Romanian (54,481,584 sentence pairs, 2.17G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-ro.tmx.gz">54.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Slovak (32,237,055 sentence pairs, 1.15G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-sk.tmx.gz">32.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Slovenian (16,845,959 sentence pairs, 655.85M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-sl.tmx.gz">16.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Albanian (6,864,132 sentence pairs, 290.78M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-sq.tmx.gz">6.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Serbian (8,495,542 sentence pairs, 307.79M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-sr.tmx.gz">8.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Turkish (38,800,144 sentence pairs, 1.61G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-tr.tmx.gz">38.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Ukrainian (45,402,157 sentence pairs, 1.57G words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/en-uk.tmx.gz">45.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=MultiHPLT/v3/mono/et.txt.gz">et</a>
</th><td>1</td> <td>238.1M</td> <td>14.0M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Bulgarian (5,012,103 sentence pairs, 173.15M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-et.txt.zip">5.0M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Estonian-Bosnian (668,293 sentence pairs, 17.38M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-et.txt.zip">0.7M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Estonian-Catalan (1,249,204 sentence pairs, 41.59M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-et.txt.zip">1.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Czech (5,573,905 sentence pairs, 179.59M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-et.txt.zip">5.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Danish (5,698,028 sentence pairs, 190.28M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-et.txt.zip">5.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Greek (5,288,892 sentence pairs, 186.61M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-et.txt.zip">5.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-English (15,520,792 sentence pairs, 550.70M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-et.txt.zip">15.5M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Basque (465,954 sentence pairs, 12.52M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-eu.tmx.gz">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Finnish (4,940,226 sentence pairs, 145.39M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-fi.tmx.gz">4.9M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Estonian-Irish (931,701 sentence pairs, 34.83M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-ga.tmx.gz">0.9M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Estonian-Galician (669,011 sentence pairs, 20.83M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-gl.tmx.gz">0.7M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Estonian-Croatian (3,683,771 sentence pairs, 120.88M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-hr.tmx.gz">3.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Hungarian (4,610,132 sentence pairs, 150.52M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-hu.tmx.gz">4.6M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Estonian-Icelandic (1,109,050 sentence pairs, 32.88M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-is.tmx.gz">1.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Estonian-Georgian (200,868 sentence pairs, 6.36M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-ka.tmx.gz">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Lithuanian (4,775,876 sentence pairs, 151.67M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-lt.tmx.gz">4.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Latvian (4,824,310 sentence pairs, 155.02M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-lv.tmx.gz">4.8M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Estonian-Macedonian (1,008,449 sentence pairs, 30.99M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-mk.tmx.gz">1.0M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Estonian-Maltese (921,040 sentence pairs, 38.64M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-mt.tmx.gz">0.9M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Estonian-BokmÃ¥l, Norwegian (2,910,120 sentence pairs, 88.19M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-nb.tmx.gz">2.9M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Estonian-Norwegian Nynorsk (19,591 sentence pairs, 0.47M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-nn.tmx.gz">19.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Romanian (4,450,172 sentence pairs, 161.33M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-ro.tmx.gz">4.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Slovak (4,262,617 sentence pairs, 139.99M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-sk.tmx.gz">4.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-Slovenian (3,725,249 sentence pairs, 129.40M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-sl.tmx.gz">3.7M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Estonian-Albanian (969,897 sentence pairs, 32.68M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-sq.tmx.gz">1.0M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Estonian-Serbian (1,245,926 sentence pairs, 36.16M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-sr.tmx.gz">1.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Estonian-Turkish (1,092,645 sentence pairs, 28.91M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-tr.tmx.gz">1.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Estonian-Ukrainian (2,679,547 sentence pairs, 76.59M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/et-uk.tmx.gz">2.7M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=MultiHPLT/v3/mono/eu.txt.gz">eu</a>
</th><td>1</td> <td>46.7M</td> <td>2.5M</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Basque-Bulgarian (670,703 sentence pairs, 19.87M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-eu.txt.zip">0.7M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Basque-Bosnian (163,269 sentence pairs, 4.09M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-eu.txt.zip">0.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Basque-Catalan (800,618 sentence pairs, 28.32M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-eu.txt.zip">0.8M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Basque-Czech (712,731 sentence pairs, 20.01M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-eu.txt.zip">0.7M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Basque-Danish (707,285 sentence pairs, 20.61M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-eu.txt.zip">0.7M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Basque-Greek (705,222 sentence pairs, 21.55M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-eu.txt.zip">0.7M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Basque-English (2,614,143 sentence pairs, 95.60M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-eu.txt.zip">2.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Basque-Estonian (465,954 sentence pairs, 12.52M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-eu.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Basque-Finnish (508,443 sentence pairs, 13.17M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-fi.tmx.gz">0.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Basque-Irish (379,860 sentence pairs, 13.00M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-ga.tmx.gz">0.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Basque-Galician (610,397 sentence pairs, 20.15M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-gl.tmx.gz">0.6M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Basque-Croatian (534,427 sentence pairs, 15.36M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-hr.tmx.gz">0.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Basque-Hungarian (507,839 sentence pairs, 14.20M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-hu.tmx.gz">0.5M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Basque-Icelandic (395,659 sentence pairs, 11.75M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-is.tmx.gz">0.4M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Basque-Georgian (104,983 sentence pairs, 3.38M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-ka.tmx.gz">0.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Basque-Lithuanian (470,325 sentence pairs, 12.78M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-lt.tmx.gz">0.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Basque-Latvian (481,848 sentence pairs, 13.32M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-lv.tmx.gz">0.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Basque-Macedonian (430,010 sentence pairs, 13.20M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-mk.tmx.gz">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Basque-Maltese (134,504 sentence pairs, 4.02M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-mt.tmx.gz">0.1M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Basque-BokmÃ¥l, Norwegian (450,698 sentence pairs, 13.44M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-nb.tmx.gz">0.5M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Basque-Norwegian Nynorsk (5,919 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-nn.tmx.gz">5.9k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Basque-Romanian (525,522 sentence pairs, 16.43M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-ro.tmx.gz">0.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Basque-Slovak (479,385 sentence pairs, 13.52M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-sk.tmx.gz">0.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Basque-Slovenian (434,111 sentence pairs, 12.62M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Basque-Albanian (396,900 sentence pairs, 13.34M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-sq.tmx.gz">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Basque-Serbian (403,396 sentence pairs, 11.82M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-sr.tmx.gz">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Basque-Turkish (185,236 sentence pairs, 4.84M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Basque-Ukrainian (512,305 sentence pairs, 14.45M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/eu-uk.tmx.gz">0.5M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=MultiHPLT/v3/mono/fi.txt.gz">fi</a>
</th><td>1</td> <td>583.8M</td> <td>40.2M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Bulgarian (7,263,819 sentence pairs, 231.12M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-fi.txt.zip">7.3M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Finnish-Bosnian (1,014,210 sentence pairs, 24.97M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-fi.txt.zip">1.0M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-Catalan (1,992,481 sentence pairs, 62.75M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-fi.txt.zip">2.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Czech (11,161,603 sentence pairs, 319.93M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-fi.txt.zip">11.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Danish (14,762,158 sentence pairs, 436.29M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-fi.txt.zip">14.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Greek (10,291,342 sentence pairs, 325.87M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-fi.txt.zip">10.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-English (47,622,955 sentence pairs, 1.49G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-fi.txt.zip">47.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Estonian (4,940,226 sentence pairs, 145.39M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-fi.txt.zip">4.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Basque (508,443 sentence pairs, 13.17M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-fi.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Irish (1,241,417 sentence pairs, 43.48M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-ga.tmx.gz">1.2M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Finnish-Galician (892,607 sentence pairs, 25.98M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-gl.tmx.gz">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Croatian (6,150,159 sentence pairs, 183.73M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-hr.tmx.gz">6.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Hungarian (9,807,440 sentence pairs, 281.60M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-hu.tmx.gz">9.8M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Icelandic (1,833,961 sentence pairs, 50.61M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-is.tmx.gz">1.8M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Finnish-Georgian (281,591 sentence pairs, 8.23M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-ka.tmx.gz">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Lithuanian (6,156,432 sentence pairs, 180.37M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-lt.tmx.gz">6.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Latvian (5,909,313 sentence pairs, 176.48M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-lv.tmx.gz">5.9M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Finnish-Macedonian (1,414,606 sentence pairs, 40.47M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-mk.tmx.gz">1.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Maltese (1,074,659 sentence pairs, 42.98M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-mt.tmx.gz">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-BokmÃ¥l, Norwegian (9,449,296 sentence pairs, 267.83M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-nb.tmx.gz">9.4M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Finnish-Norwegian Nynorsk (65,168 sentence pairs, 1.47M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-nn.tmx.gz">65.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Romanian (8,946,062 sentence pairs, 287.44M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-ro.tmx.gz">8.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Slovak (7,338,500 sentence pairs, 218.38M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-sk.tmx.gz">7.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Slovenian (5,060,889 sentence pairs, 163.88M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-sl.tmx.gz">5.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Albanian (1,363,609 sentence pairs, 43.89M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-sq.tmx.gz">1.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Finnish-Serbian (2,147,764 sentence pairs, 58.65M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-sr.tmx.gz">2.1M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Finnish-Turkish (3,472,136 sentence pairs, 82.91M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-tr.tmx.gz">3.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Ukrainian (5,270,923 sentence pairs, 141.24M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/fi-uk.tmx.gz">5.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ga plain text' href="download.php?f=MultiHPLT/v3/mono/ga.txt.gz">ga</a>
</th><td>1</td> <td>84.2M</td> <td>3.6M</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Irish-Bulgarian (1,362,160 sentence pairs, 54.50M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-ga.txt.zip">1.4M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Irish-Bosnian (225,402 sentence pairs, 7.23M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-ga.txt.zip">0.2M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Irish-Catalan (842,119 sentence pairs, 34.99M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-ga.txt.zip">0.8M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Irish-Czech (1,450,159 sentence pairs, 54.65M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-ga.txt.zip">1.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Irish-Danish (1,558,324 sentence pairs, 61.29M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-ga.txt.zip">1.6M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Irish-Greek (1,491,506 sentence pairs, 60.54M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-ga.txt.zip">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Irish-English (3,916,880 sentence pairs, 164.59M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-ga.txt.zip">3.9M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Irish-Estonian (931,701 sentence pairs, 34.83M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-ga.txt.zip">0.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Irish-Basque (379,860 sentence pairs, 13.00M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-ga.txt.zip">0.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Irish-Finnish (1,241,417 sentence pairs, 43.48M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-ga.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Irish-Galician (655,886 sentence pairs, 25.67M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-gl.tmx.gz">0.7M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Irish-Croatian (1,153,694 sentence pairs, 43.74M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-hr.tmx.gz">1.2M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Irish-Hungarian (1,018,962 sentence pairs, 38.78M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-hu.tmx.gz">1.0M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Irish-Icelandic (710,494 sentence pairs, 26.42M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-is.tmx.gz">0.7M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Irish-Georgian (132,726 sentence pairs, 5.38M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-ka.tmx.gz">0.1M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Irish-Lithuanian (937,640 sentence pairs, 35.00M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-lt.tmx.gz">0.9M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Irish-Latvian (990,656 sentence pairs, 37.82M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-lv.tmx.gz">1.0M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Irish-Macedonian (767,943 sentence pairs, 29.81M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-mk.tmx.gz">0.8M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Irish-Maltese (397,823 sentence pairs, 16.73M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-mt.tmx.gz">0.4M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Irish-BokmÃ¥l, Norwegian (954,971 sentence pairs, 36.11M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-nb.tmx.gz">1.0M</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Irish-Norwegian Nynorsk (5,786 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-nn.tmx.gz">5.8k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Irish-Romanian (1,099,111 sentence pairs, 45.04M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-ro.tmx.gz">1.1M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Irish-Slovak (1,060,301 sentence pairs, 40.18M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-sk.tmx.gz">1.1M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Irish-Slovenian (957,112 sentence pairs, 37.76M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-sl.tmx.gz">1.0M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Irish-Albanian (727,059 sentence pairs, 30.07M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Irish-Serbian (723,896 sentence pairs, 26.73M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-sr.tmx.gz">0.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Irish-Turkish (305,047 sentence pairs, 10.18M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-tr.tmx.gz">0.3M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Irish-Ukrainian (876,350 sentence pairs, 31.39M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ga-uk.tmx.gz">0.9M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gl plain text' href="download.php?f=MultiHPLT/v3/mono/gl.txt.gz">gl</a>
</th><td>1</td> <td>72.3M</td> <td>3.3M</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Galician-Bulgarian (1,057,928 sentence pairs, 35.69M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-gl.txt.zip">1.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Galician-Bosnian (226,437 sentence pairs, 6.56M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-gl.txt.zip">0.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Galician-Catalan (1,350,025 sentence pairs, 54.75M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-gl.txt.zip">1.4M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Galician-Czech (1,059,549 sentence pairs, 34.26M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-gl.txt.zip">1.1M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Galician-Danish (1,127,123 sentence pairs, 37.84M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-gl.txt.zip">1.1M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Galician-Greek (1,084,920 sentence pairs, 37.48M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-gl.txt.zip">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Galician-English (3,548,466 sentence pairs, 141.05M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-gl.txt.zip">3.5M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Galician-Estonian (669,011 sentence pairs, 20.83M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-gl.txt.zip">0.7M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Galician-Basque (610,397 sentence pairs, 20.15M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-gl.txt.zip">0.6M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Galician-Finnish (892,607 sentence pairs, 25.98M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-gl.txt.zip">0.9M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Galician-Irish (655,886 sentence pairs, 25.67M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-gl.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#d4ffca"><a rel="nofollow" title='Galician-Croatian (869,179 sentence pairs, 28.65M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-hr.tmx.gz">0.9M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Galician-Hungarian (740,324 sentence pairs, 23.71M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-hu.tmx.gz">0.7M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Galician-Icelandic (642,065 sentence pairs, 21.71M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-is.tmx.gz">0.6M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Galician-Georgian (135,030 sentence pairs, 4.92M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-ka.tmx.gz">0.1M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Galician-Lithuanian (698,957 sentence pairs, 21.89M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-lt.tmx.gz">0.7M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Galician-Latvian (727,232 sentence pairs, 23.25M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-lv.tmx.gz">0.7M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Galician-Macedonian (729,988 sentence pairs, 25.48M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-mk.tmx.gz">0.7M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Galician-Maltese (254,701 sentence pairs, 8.76M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Galician-BokmÃ¥l, Norwegian (763,500 sentence pairs, 26.02M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-nb.tmx.gz">0.8M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Galician-Norwegian Nynorsk (7,721 sentence pairs, 0.20M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-nn.tmx.gz">7.7k</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Galician-Romanian (851,237 sentence pairs, 30.17M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-ro.tmx.gz">0.9M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Galician-Slovak (807,081 sentence pairs, 25.96M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-sk.tmx.gz">0.8M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Galician-Slovenian (682,711 sentence pairs, 22.98M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-sl.tmx.gz">0.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Galician-Albanian (706,225 sentence pairs, 26.83M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Galician-Serbian (686,020 sentence pairs, 23.05M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-sr.tmx.gz">0.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Galician-Turkish (271,179 sentence pairs, 7.86M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-tr.tmx.gz">0.3M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Galician-Ukrainian (810,362 sentence pairs, 26.10M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/gl-uk.tmx.gz">0.8M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=MultiHPLT/v3/mono/hr.txt.gz">hr</a>
</th><td>1</td> <td>422.3M</td> <td>22.6M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Bulgarian (6,958,768 sentence pairs, 241.56M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-hr.txt.zip">7.0M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Croatian-Bosnian (1,376,850 sentence pairs, 38.60M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-hr.txt.zip">1.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Croatian-Catalan (1,849,338 sentence pairs, 65.61M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-hr.txt.zip">1.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Czech (7,792,535 sentence pairs, 253.95M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-hr.txt.zip">7.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Danish (7,307,956 sentence pairs, 247.16M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-hr.txt.zip">7.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Greek (7,224,226 sentence pairs, 255.08M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-hr.txt.zip">7.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-English (26,377,878 sentence pairs, 960.69M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-hr.txt.zip">26.4M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Croatian-Estonian (3,683,771 sentence pairs, 120.88M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-hr.txt.zip">3.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Croatian-Basque (534,427 sentence pairs, 15.36M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-hr.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Finnish (6,150,159 sentence pairs, 183.73M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-hr.txt.zip">6.2M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-Irish (1,153,694 sentence pairs, 43.74M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-hr.txt.zip">1.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Croatian-Galician (869,179 sentence pairs, 28.65M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-hr.txt.zip">0.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Hungarian (6,831,443 sentence pairs, 224.10M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-hu.tmx.gz">6.8M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Croatian-Icelandic (1,604,562 sentence pairs, 49.70M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-is.tmx.gz">1.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Croatian-Georgian (315,052 sentence pairs, 10.48M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-ka.tmx.gz">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Lithuanian (5,261,340 sentence pairs, 169.74M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-lt.tmx.gz">5.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Latvian (5,052,902 sentence pairs, 165.85M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-lv.tmx.gz">5.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Croatian-Macedonian (1,751,916 sentence pairs, 56.41M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-mk.tmx.gz">1.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-Maltese (1,002,367 sentence pairs, 42.10M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-mt.tmx.gz">1.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-BokmÃ¥l, Norwegian (4,431,586 sentence pairs, 139.73M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-nb.tmx.gz">4.4M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Croatian-Norwegian Nynorsk (37,495 sentence pairs, 0.94M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-nn.tmx.gz">37.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Romanian (6,867,177 sentence pairs, 245.34M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-ro.tmx.gz">6.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Slovak (6,366,598 sentence pairs, 209.00M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-sk.tmx.gz">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Slovenian (5,299,852 sentence pairs, 184.01M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-sl.tmx.gz">5.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Croatian-Albanian (1,708,044 sentence pairs, 60.97M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-sq.tmx.gz">1.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Croatian-Serbian (2,502,165 sentence pairs, 76.64M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-sr.tmx.gz">2.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Croatian-Turkish (2,193,800 sentence pairs, 59.60M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-tr.tmx.gz">2.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Ukrainian (4,467,514 sentence pairs, 133.94M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hr-uk.tmx.gz">4.5M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hu plain text' href="download.php?f=MultiHPLT/v3/mono/hu.txt.gz">hu</a>
</th><td>1</td> <td>668.1M</td> <td>36.9M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Bulgarian (8,482,293 sentence pairs, 293.87M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-hu.txt.zip">8.5M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Hungarian-Bosnian (1,173,967 sentence pairs, 32.04M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-hu.txt.zip">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hungarian-Catalan (1,803,051 sentence pairs, 61.86M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-hu.txt.zip">1.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Czech (13,018,659 sentence pairs, 411.92M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-hu.txt.zip">13.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Danish (11,900,008 sentence pairs, 387.87M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-hu.txt.zip">11.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Greek (11,397,864 sentence pairs, 392.69M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-hu.txt.zip">11.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-English (45,500,610 sentence pairs, 1.63G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-hu.txt.zip">45.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Estonian (4,610,132 sentence pairs, 150.52M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-hu.txt.zip">4.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hungarian-Basque (507,839 sentence pairs, 14.20M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-hu.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Finnish (9,807,440 sentence pairs, 281.60M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-hu.txt.zip">9.8M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Hungarian-Irish (1,018,962 sentence pairs, 38.78M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-hu.txt.zip">1.0M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Hungarian-Galician (740,324 sentence pairs, 23.71M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-hu.txt.zip">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Croatian (6,831,443 sentence pairs, 224.10M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-hu.txt.zip">6.8M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Hungarian-Icelandic (1,819,976 sentence pairs, 54.84M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-is.tmx.gz">1.8M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Hungarian-Georgian (307,758 sentence pairs, 9.43M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-ka.tmx.gz">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Lithuanian (6,956,865 sentence pairs, 225.32M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-lt.tmx.gz">7.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Latvian (6,443,371 sentence pairs, 213.07M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-lv.tmx.gz">6.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Hungarian-Macedonian (1,569,147 sentence pairs, 49.08M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-mk.tmx.gz">1.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hungarian-Maltese (1,140,811 sentence pairs, 49.99M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-mt.tmx.gz">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-BokmÃ¥l, Norwegian (6,868,619 sentence pairs, 211.58M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-nb.tmx.gz">6.9M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Hungarian-Norwegian Nynorsk (61,891 sentence pairs, 1.53M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-nn.tmx.gz">61.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Romanian (11,123,300 sentence pairs, 393.24M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-ro.tmx.gz">11.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Slovak (9,394,690 sentence pairs, 308.83M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-sk.tmx.gz">9.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Slovenian (6,031,261 sentence pairs, 214.01M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-sl.tmx.gz">6.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Hungarian-Albanian (1,567,653 sentence pairs, 55.53M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-sq.tmx.gz">1.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Hungarian-Serbian (2,432,731 sentence pairs, 72.40M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-sr.tmx.gz">2.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hungarian-Turkish (4,012,497 sentence pairs, 107.76M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-tr.tmx.gz">4.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Ukrainian (6,191,756 sentence pairs, 182.85M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/hu-uk.tmx.gz">6.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=MultiHPLT/v3/mono/is.txt.gz">is</a>
</th><td>1</td> <td>78.2M</td> <td>4.4M</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Icelandic-Bulgarian (1,641,896 sentence pairs, 53.33M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-is.txt.zip">1.6M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Icelandic-Bosnian (317,930 sentence pairs, 8.68M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-is.txt.zip">0.3M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Icelandic-Catalan (941,925 sentence pairs, 33.37M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-is.txt.zip">0.9M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Icelandic-Czech (1,830,750 sentence pairs, 55.77M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-is.txt.zip">1.8M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Icelandic-Danish (2,209,881 sentence pairs, 70.04M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-is.txt.zip">2.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Icelandic-Greek (2,049,523 sentence pairs, 64.61M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-is.txt.zip">2.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Icelandic-English (5,491,654 sentence pairs, 189.01M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-is.txt.zip">5.5M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Icelandic-Estonian (1,109,050 sentence pairs, 32.88M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-is.txt.zip">1.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Icelandic-Basque (395,659 sentence pairs, 11.75M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-is.txt.zip">0.4M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Icelandic-Finnish (1,833,961 sentence pairs, 50.61M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-is.txt.zip">1.8M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Icelandic-Irish (710,494 sentence pairs, 26.42M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-is.txt.zip">0.7M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Icelandic-Galician (642,065 sentence pairs, 21.71M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-is.txt.zip">0.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Icelandic-Croatian (1,604,562 sentence pairs, 49.70M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-is.txt.zip">1.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Icelandic-Hungarian (1,819,976 sentence pairs, 54.84M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-is.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Icelandic-Georgian (144,691 sentence pairs, 5.11M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-ka.tmx.gz">0.1M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Icelandic-Lithuanian (1,297,491 sentence pairs, 38.37M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-lt.tmx.gz">1.3M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Icelandic-Latvian (1,381,744 sentence pairs, 41.74M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-lv.tmx.gz">1.4M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Icelandic-Macedonian (848,079 sentence pairs, 28.03M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-mk.tmx.gz">0.8M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Icelandic-Maltese (292,372 sentence pairs, 9.63M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Icelandic-BokmÃ¥l, Norwegian (1,507,331 sentence pairs, 48.64M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-nb.tmx.gz">1.5M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Icelandic-Norwegian Nynorsk (6,637 sentence pairs, 0.16M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-nn.tmx.gz">6.6k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Icelandic-Romanian (1,348,400 sentence pairs, 46.22M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-ro.tmx.gz">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Icelandic-Slovak (1,499,043 sentence pairs, 45.75M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-sk.tmx.gz">1.5M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Icelandic-Slovenian (990,934 sentence pairs, 31.97M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-sl.tmx.gz">1.0M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Icelandic-Albanian (821,618 sentence pairs, 29.87M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-sq.tmx.gz">0.8M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Icelandic-Serbian (806,972 sentence pairs, 25.60M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-sr.tmx.gz">0.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Icelandic-Turkish (562,416 sentence pairs, 15.44M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-tr.tmx.gz">0.6M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Icelandic-Ukrainian (1,261,062 sentence pairs, 38.12M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/is-uk.tmx.gz">1.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ka plain text' href="download.php?f=MultiHPLT/v3/mono/ka.txt.gz">ka</a>
</th><td>1</td> <td>41.0M</td> <td>1.5M</td><td bgcolor="#deffc6"><a rel="nofollow" title='Georgian-Bulgarian (341,781 sentence pairs, 11.54M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-ka.txt.zip">0.3M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Georgian-Bosnian (83,823 sentence pairs, 2.46M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-ka.txt.zip">83.8k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Georgian-Catalan (184,932 sentence pairs, 7.20M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-ka.txt.zip">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Georgian-Czech (330,198 sentence pairs, 10.64M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-ka.txt.zip">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Georgian-Danish (311,234 sentence pairs, 10.44M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-ka.txt.zip">0.3M</a>
</td><td bgcolor="#deffc7"><a rel="nofollow" title='Georgian-Greek (356,488 sentence pairs, 12.00M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-ka.txt.zip">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Georgian-English (1,500,554 sentence pairs, 72.09M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-ka.txt.zip">1.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Georgian-Estonian (200,868 sentence pairs, 6.36M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-ka.txt.zip">0.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Georgian-Basque (104,983 sentence pairs, 3.38M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-ka.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Georgian-Finnish (281,591 sentence pairs, 8.23M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-ka.txt.zip">0.3M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Georgian-Irish (132,726 sentence pairs, 5.38M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-ka.txt.zip">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Georgian-Galician (135,030 sentence pairs, 4.92M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-ka.txt.zip">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Georgian-Croatian (315,052 sentence pairs, 10.48M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-ka.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Georgian-Hungarian (307,758 sentence pairs, 9.43M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-ka.txt.zip">0.3M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Georgian-Icelandic (144,691 sentence pairs, 5.11M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-ka.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Georgian-Lithuanian (218,759 sentence pairs, 6.98M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Georgian-Latvian (210,984 sentence pairs, 6.90M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Georgian-Macedonian (172,612 sentence pairs, 6.21M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Georgian-Maltese (50,508 sentence pairs, 1.82M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-mt.tmx.gz">50.5k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Georgian-BokmÃ¥l, Norwegian (187,618 sentence pairs, 6.67M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-nb.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Georgian-Norwegian Nynorsk (1,340 sentence pairs, 25.60k words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-nn.tmx.gz">1.3k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Georgian-Romanian (254,192 sentence pairs, 9.37M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Georgian-Slovak (230,245 sentence pairs, 7.67M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Georgian-Slovenian (181,401 sentence pairs, 6.32M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Georgian-Albanian (167,377 sentence pairs, 6.61M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Georgian-Serbian (193,232 sentence pairs, 6.66M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Georgian-Turkish (191,833 sentence pairs, 6.14M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Georgian-Ukrainian (272,590 sentence pairs, 9.11M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ka-uk.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=MultiHPLT/v3/mono/lt.txt.gz">lt</a>
</th><td>1</td> <td>314.5M</td> <td>17.7M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Bulgarian (6,516,829 sentence pairs, 223.31M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-lt.txt.zip">6.5M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Lithuanian-Bosnian (863,800 sentence pairs, 22.82M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-lt.txt.zip">0.9M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Lithuanian-Catalan (1,555,322 sentence pairs, 52.77M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-lt.txt.zip">1.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Czech (7,256,671 sentence pairs, 234.92M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-lt.txt.zip">7.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Danish (7,003,165 sentence pairs, 233.63M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-lt.txt.zip">7.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Greek (6,891,076 sentence pairs, 240.37M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-lt.txt.zip">6.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-English (21,328,192 sentence pairs, 753.38M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-lt.txt.zip">21.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Estonian (4,775,876 sentence pairs, 151.67M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-lt.txt.zip">4.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Lithuanian-Basque (470,325 sentence pairs, 12.78M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-lt.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Finnish (6,156,432 sentence pairs, 180.37M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-lt.txt.zip">6.2M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Lithuanian-Irish (937,640 sentence pairs, 35.00M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-lt.txt.zip">0.9M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Lithuanian-Galician (698,957 sentence pairs, 21.89M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-lt.txt.zip">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Croatian (5,261,340 sentence pairs, 169.74M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-lt.txt.zip">5.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Hungarian (6,956,865 sentence pairs, 225.32M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-lt.txt.zip">7.0M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Lithuanian-Icelandic (1,297,491 sentence pairs, 38.37M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-lt.txt.zip">1.3M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Lithuanian-Georgian (218,759 sentence pairs, 6.98M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-lt.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Latvian (6,639,047 sentence pairs, 212.10M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-lv.tmx.gz">6.6M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Lithuanian-Macedonian (1,297,337 sentence pairs, 39.45M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-mk.tmx.gz">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Lithuanian-Maltese (1,076,794 sentence pairs, 45.99M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-mt.tmx.gz">1.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Lithuanian-BokmÃ¥l, Norwegian (3,706,617 sentence pairs, 112.42M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-nb.tmx.gz">3.7M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Lithuanian-Norwegian Nynorsk (35,384 sentence pairs, 0.87M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-nn.tmx.gz">35.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Romanian (6,357,990 sentence pairs, 225.64M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-ro.tmx.gz">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Slovak (5,960,695 sentence pairs, 192.34M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-sk.tmx.gz">6.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Slovenian (4,576,439 sentence pairs, 159.44M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-sl.tmx.gz">4.6M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Lithuanian-Albanian (1,170,580 sentence pairs, 39.24M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-sq.tmx.gz">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Lithuanian-Serbian (1,878,679 sentence pairs, 53.99M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-sr.tmx.gz">1.9M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Lithuanian-Turkish (1,826,246 sentence pairs, 46.82M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-tr.tmx.gz">1.8M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Lithuanian-Ukrainian (4,098,455 sentence pairs, 116.95M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lt-uk.tmx.gz">4.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=MultiHPLT/v3/mono/lv.txt.gz">lv</a>
</th><td>1</td> <td>284.3M</td> <td>15.5M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Bulgarian (6,183,957 sentence pairs, 217.57M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-lv.txt.zip">6.2M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Latvian-Bosnian (801,920 sentence pairs, 21.42M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-lv.txt.zip">0.8M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Latvian-Catalan (1,597,777 sentence pairs, 54.99M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-lv.txt.zip">1.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Czech (6,656,513 sentence pairs, 220.51M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-lv.txt.zip">6.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Danish (6,659,011 sentence pairs, 227.63M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-lv.txt.zip">6.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Greek (6,387,997 sentence pairs, 227.78M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-lv.txt.zip">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-English (18,743,189 sentence pairs, 677.35M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-lv.txt.zip">18.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Estonian (4,824,310 sentence pairs, 155.02M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-lv.txt.zip">4.8M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Basque (481,848 sentence pairs, 13.32M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-lv.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Finnish (5,909,313 sentence pairs, 176.48M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-lv.txt.zip">5.9M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Latvian-Irish (990,656 sentence pairs, 37.82M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-lv.txt.zip">1.0M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Latvian-Galician (727,232 sentence pairs, 23.25M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-lv.txt.zip">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Croatian (5,052,902 sentence pairs, 165.85M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-lv.txt.zip">5.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Hungarian (6,443,371 sentence pairs, 213.07M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-lv.txt.zip">6.4M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Latvian-Icelandic (1,381,744 sentence pairs, 41.74M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-lv.txt.zip">1.4M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Latvian-Georgian (210,984 sentence pairs, 6.90M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-lv.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Lithuanian (6,639,047 sentence pairs, 212.10M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-lv.txt.zip">6.6M</a>
</td><td></td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Latvian-Macedonian (1,238,594 sentence pairs, 38.57M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-mk.tmx.gz">1.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Latvian-Maltese (1,127,330 sentence pairs, 48.46M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-mt.tmx.gz">1.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Latvian-BokmÃ¥l, Norwegian (3,474,697 sentence pairs, 107.30M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-nb.tmx.gz">3.5M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Latvian-Norwegian Nynorsk (26,884 sentence pairs, 0.66M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-nn.tmx.gz">26.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Romanian (5,797,971 sentence pairs, 211.98M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-ro.tmx.gz">5.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Slovak (5,731,685 sentence pairs, 190.35M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-sk.tmx.gz">5.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-Slovenian (4,562,528 sentence pairs, 162.47M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-sl.tmx.gz">4.6M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Latvian-Albanian (1,182,388 sentence pairs, 40.76M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-sq.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Latvian-Serbian (1,707,754 sentence pairs, 50.39M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-sr.tmx.gz">1.7M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Latvian-Turkish (1,642,220 sentence pairs, 43.50M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-tr.tmx.gz">1.6M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Latvian-Ukrainian (3,797,633 sentence pairs, 111.06M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/lv-uk.tmx.gz">3.8M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=MultiHPLT/v3/mono/mk.txt.gz">mk</a>
</th><td>1</td> <td>113.0M</td> <td>5.4M</td><td bgcolor="#caffca"><a rel="nofollow" title='Macedonian-Bulgarian (1,904,693 sentence pairs, 63.40M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-mk.txt.zip">1.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Macedonian-Bosnian (503,194 sentence pairs, 14.98M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-mk.txt.zip">0.5M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Macedonian-Catalan (933,266 sentence pairs, 34.72M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-mk.txt.zip">0.9M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Macedonian-Czech (1,702,614 sentence pairs, 53.69M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-mk.txt.zip">1.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Macedonian-Danish (1,678,660 sentence pairs, 55.36M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-mk.txt.zip">1.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Macedonian-Greek (1,856,703 sentence pairs, 62.48M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-mk.txt.zip">1.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Macedonian-English (5,818,642 sentence pairs, 221.65M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-mk.txt.zip">5.8M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Macedonian-Estonian (1,008,449 sentence pairs, 30.99M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-mk.txt.zip">1.0M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Macedonian-Basque (430,010 sentence pairs, 13.20M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-mk.txt.zip">0.4M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Macedonian-Finnish (1,414,606 sentence pairs, 40.47M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-mk.txt.zip">1.4M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Macedonian-Irish (767,943 sentence pairs, 29.81M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-mk.txt.zip">0.8M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Macedonian-Galician (729,988 sentence pairs, 25.48M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-mk.txt.zip">0.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Macedonian-Croatian (1,751,916 sentence pairs, 56.41M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-mk.txt.zip">1.8M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Macedonian-Hungarian (1,569,147 sentence pairs, 49.08M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-mk.txt.zip">1.6M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Macedonian-Icelandic (848,079 sentence pairs, 28.03M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-mk.txt.zip">0.8M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Georgian (172,612 sentence pairs, 6.21M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-mk.txt.zip">0.2M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Macedonian-Lithuanian (1,297,337 sentence pairs, 39.45M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-mk.txt.zip">1.3M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Macedonian-Latvian (1,238,594 sentence pairs, 38.57M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-mk.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Macedonian-Maltese (304,194 sentence pairs, 10.16M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mk-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Macedonian-BokmÃ¥l, Norwegian (1,199,451 sentence pairs, 40.43M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mk-nb.tmx.gz">1.2M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Macedonian-Norwegian Nynorsk (7,532 sentence pairs, 0.19M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mk-nn.tmx.gz">7.5k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Macedonian-Romanian (1,463,987 sentence pairs, 51.34M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mk-ro.tmx.gz">1.5M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Macedonian-Slovak (1,339,174 sentence pairs, 41.91M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mk-sk.tmx.gz">1.3M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Macedonian-Slovenian (1,169,795 sentence pairs, 38.97M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mk-sl.tmx.gz">1.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Macedonian-Albanian (1,211,048 sentence pairs, 46.85M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mk-sq.tmx.gz">1.2M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Macedonian-Serbian (1,106,807 sentence pairs, 36.52M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mk-sr.tmx.gz">1.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Macedonian-Turkish (448,440 sentence pairs, 13.05M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mk-tr.tmx.gz">0.4M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Macedonian-Ukrainian (1,270,289 sentence pairs, 40.33M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mk-uk.tmx.gz">1.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=MultiHPLT/v3/mono/mt.txt.gz">mt</a>
</th><td>1</td> <td>68.6M</td> <td>2.1M</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Maltese-Bulgarian (1,182,469 sentence pairs, 53.79M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-mt.txt.zip">1.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Maltese-Bosnian (91,670 sentence pairs, 2.65M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-mt.txt.zip">91.7k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Maltese-Catalan (343,703 sentence pairs, 12.63M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-mt.txt.zip">0.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Maltese-Czech (1,147,133 sentence pairs, 49.20M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-mt.txt.zip">1.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Maltese-Danish (1,210,839 sentence pairs, 53.62M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-mt.txt.zip">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Maltese-Greek (1,191,169 sentence pairs, 56.45M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-mt.txt.zip">1.2M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Maltese-English (2,434,798 sentence pairs, 110.46M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-mt.txt.zip">2.4M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Maltese-Estonian (921,040 sentence pairs, 38.64M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-mt.txt.zip">0.9M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Maltese-Basque (134,504 sentence pairs, 4.02M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-mt.txt.zip">0.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Maltese-Finnish (1,074,659 sentence pairs, 42.98M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-mt.txt.zip">1.1M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Maltese-Irish (397,823 sentence pairs, 16.73M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-mt.txt.zip">0.4M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Maltese-Galician (254,701 sentence pairs, 8.76M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-mt.txt.zip">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Maltese-Croatian (1,002,367 sentence pairs, 42.10M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-mt.txt.zip">1.0M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Maltese-Hungarian (1,140,811 sentence pairs, 49.99M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-mt.txt.zip">1.1M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-Icelandic (292,372 sentence pairs, 9.63M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-mt.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Maltese-Georgian (50,508 sentence pairs, 1.82M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-mt.txt.zip">50.5k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Maltese-Lithuanian (1,076,794 sentence pairs, 45.99M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-mt.txt.zip">1.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Maltese-Latvian (1,127,330 sentence pairs, 48.46M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-mt.txt.zip">1.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-Macedonian (304,194 sentence pairs, 10.16M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mk-mt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Maltese-BokmÃ¥l, Norwegian (349,392 sentence pairs, 11.77M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mt-nb.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Maltese-Norwegian Nynorsk (1,864 sentence pairs, 49.56k words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mt-nn.tmx.gz">1.9k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Maltese-Romanian (995,868 sentence pairs, 47.28M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mt-ro.tmx.gz">1.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Maltese-Slovak (1,075,827 sentence pairs, 46.69M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mt-sk.tmx.gz">1.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Maltese-Slovenian (1,018,860 sentence pairs, 46.60M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mt-sl.tmx.gz">1.0M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-Albanian (298,257 sentence pairs, 10.69M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mt-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Maltese-Serbian (273,443 sentence pairs, 8.93M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mt-sr.tmx.gz">0.3M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Maltese-Turkish (110,501 sentence pairs, 3.15M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mt-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-Ukrainian (325,293 sentence pairs, 10.30M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/mt-uk.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nb plain text' href="download.php?f=MultiHPLT/v3/mono/nb.txt.gz">nb</a>
</th><td>1</td> <td>576.0M</td> <td>30.8M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bulgarian (4,882,093 sentence pairs, 160.10M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-nb.txt.zip">4.9M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bosnian (841,983 sentence pairs, 23.89M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-nb.txt.zip">0.8M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Catalan (1,854,001 sentence pairs, 66.72M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-nb.txt.zip">1.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Czech (7,990,827 sentence pairs, 246.95M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-nb.txt.zip">8.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Danish (13,690,600 sentence pairs, 445.23M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-nb.txt.zip">13.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Greek (7,290,035 sentence pairs, 245.55M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-nb.txt.zip">7.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-English (34,528,565 sentence pairs, 1.21G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-nb.txt.zip">34.5M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Estonian (2,910,120 sentence pairs, 88.19M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-nb.txt.zip">2.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Basque (450,698 sentence pairs, 13.44M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-nb.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Finnish (9,449,296 sentence pairs, 267.83M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-nb.txt.zip">9.4M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Irish (954,971 sentence pairs, 36.11M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-nb.txt.zip">1.0M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Galician (763,500 sentence pairs, 26.02M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-nb.txt.zip">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Croatian (4,431,586 sentence pairs, 139.73M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-nb.txt.zip">4.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hungarian (6,868,619 sentence pairs, 211.58M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-nb.txt.zip">6.9M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Icelandic (1,507,331 sentence pairs, 48.64M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-nb.txt.zip">1.5M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Georgian (187,618 sentence pairs, 6.67M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-nb.txt.zip">0.2M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Lithuanian (3,706,617 sentence pairs, 112.42M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-nb.txt.zip">3.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Latvian (3,474,697 sentence pairs, 107.30M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-nb.txt.zip">3.5M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Macedonian (1,199,451 sentence pairs, 40.43M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mk-nb.txt.zip">1.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Maltese (349,392 sentence pairs, 11.77M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mt-nb.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Norwegian Nynorsk (34,934 sentence pairs, 0.86M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nb-nn.tmx.gz">34.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Romanian (6,380,635 sentence pairs, 218.97M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nb-ro.tmx.gz">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovak (4,748,353 sentence pairs, 148.53M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nb-sk.tmx.gz">4.7M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovenian (3,178,234 sentence pairs, 104.46M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nb-sl.tmx.gz">3.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Albanian (1,260,518 sentence pairs, 47.11M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nb-sq.tmx.gz">1.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Serbian (2,104,549 sentence pairs, 68.03M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nb-sr.tmx.gz">2.1M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Turkish (2,312,036 sentence pairs, 65.50M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nb-tr.tmx.gz">2.3M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Ukrainian (4,026,892 sentence pairs, 127.02M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nb-uk.tmx.gz">4.0M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nn plain text' href="download.php?f=MultiHPLT/v3/mono/nn.txt.gz">nn</a>
</th><td>1</td> <td>2.7M</td> <td>0.2M</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Norwegian Nynorsk-Bulgarian (49,442 sentence pairs, 1.29M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-nn.txt.zip">49.4k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Norwegian Nynorsk-Bosnian (11,809 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-nn.txt.zip">11.8k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Norwegian Nynorsk-Catalan (20,596 sentence pairs, 0.58M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-nn.txt.zip">20.6k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Norwegian Nynorsk-Czech (71,652 sentence pairs, 1.85M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-nn.txt.zip">71.7k</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Norwegian Nynorsk-Danish (80,116 sentence pairs, 2.11M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-nn.txt.zip">80.1k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Norwegian Nynorsk-Greek (68,266 sentence pairs, 1.92M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-nn.txt.zip">68.3k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Norwegian Nynorsk-English (199,114 sentence pairs, 5.61M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-nn.txt.zip">0.2M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Norwegian Nynorsk-Estonian (19,591 sentence pairs, 0.47M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-nn.txt.zip">19.6k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Norwegian Nynorsk-Basque (5,919 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-nn.txt.zip">5.9k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Norwegian Nynorsk-Finnish (65,168 sentence pairs, 1.47M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-nn.txt.zip">65.2k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Norwegian Nynorsk-Irish (5,786 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-nn.txt.zip">5.8k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Norwegian Nynorsk-Galician (7,721 sentence pairs, 0.20M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-nn.txt.zip">7.7k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Norwegian Nynorsk-Croatian (37,495 sentence pairs, 0.94M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-nn.txt.zip">37.5k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Norwegian Nynorsk-Hungarian (61,891 sentence pairs, 1.53M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-nn.txt.zip">61.9k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Norwegian Nynorsk-Icelandic (6,637 sentence pairs, 0.16M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-nn.txt.zip">6.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Norwegian Nynorsk-Georgian (1,340 sentence pairs, 25.60k words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-nn.txt.zip">1.3k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Norwegian Nynorsk-Lithuanian (35,384 sentence pairs, 0.87M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-nn.txt.zip">35.4k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Norwegian Nynorsk-Latvian (26,884 sentence pairs, 0.66M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-nn.txt.zip">26.9k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Norwegian Nynorsk-Macedonian (7,532 sentence pairs, 0.19M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mk-nn.txt.zip">7.5k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Norwegian Nynorsk-Maltese (1,864 sentence pairs, 49.56k words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mt-nn.txt.zip">1.9k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Norwegian Nynorsk-BokmÃ¥l, Norwegian (34,934 sentence pairs, 0.86M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nb-nn.txt.zip">34.9k</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Norwegian Nynorsk-Romanian (34,892 sentence pairs, 1.00M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nn-ro.tmx.gz">34.9k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Norwegian Nynorsk-Slovak (26,118 sentence pairs, 0.68M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nn-sk.tmx.gz">26.1k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Norwegian Nynorsk-Slovenian (18,590 sentence pairs, 0.49M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nn-sl.tmx.gz">18.6k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Norwegian Nynorsk-Albanian (4,829 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nn-sq.tmx.gz">4.8k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Norwegian Nynorsk-Serbian (9,189 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nn-sr.tmx.gz">9.2k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Norwegian Nynorsk-Turkish (25,627 sentence pairs, 0.61M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nn-tr.tmx.gz">25.6k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Norwegian Nynorsk-Ukrainian (35,084 sentence pairs, 0.92M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/nn-uk.tmx.gz">35.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=MultiHPLT/v3/mono/ro.txt.gz">ro</a>
</th><td>1</td> <td>950.8M</td> <td>43.9M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Bulgarian (9,262,047 sentence pairs, 347.81M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-ro.txt.zip">9.3M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Romanian-Bosnian (1,274,690 sentence pairs, 38.80M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-ro.txt.zip">1.3M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Romanian-Catalan (2,191,219 sentence pairs, 83.16M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-ro.txt.zip">2.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Czech (11,466,250 sentence pairs, 402.93M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-ro.txt.zip">11.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Danish (11,785,299 sentence pairs, 424.40M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-ro.txt.zip">11.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Greek (10,998,127 sentence pairs, 416.23M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-ro.txt.zip">11.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-English (54,481,584 sentence pairs, 2.17G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-ro.txt.zip">54.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Estonian (4,450,172 sentence pairs, 161.33M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-ro.txt.zip">4.5M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Romanian-Basque (525,522 sentence pairs, 16.43M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-ro.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Finnish (8,946,062 sentence pairs, 287.44M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-ro.txt.zip">8.9M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Romanian-Irish (1,099,111 sentence pairs, 45.04M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-ro.txt.zip">1.1M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Romanian-Galician (851,237 sentence pairs, 30.17M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-ro.txt.zip">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Croatian (6,867,177 sentence pairs, 245.34M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-ro.txt.zip">6.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Hungarian (11,123,300 sentence pairs, 393.24M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-ro.txt.zip">11.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Romanian-Icelandic (1,348,400 sentence pairs, 46.22M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-ro.txt.zip">1.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Romanian-Georgian (254,192 sentence pairs, 9.37M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-ro.txt.zip">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Lithuanian (6,357,990 sentence pairs, 225.64M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-ro.txt.zip">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Latvian (5,797,971 sentence pairs, 211.98M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-ro.txt.zip">5.8M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Romanian-Macedonian (1,463,987 sentence pairs, 51.34M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mk-ro.txt.zip">1.5M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Romanian-Maltese (995,868 sentence pairs, 47.28M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mt-ro.txt.zip">1.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-BokmÃ¥l, Norwegian (6,380,635 sentence pairs, 218.97M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nb-ro.txt.zip">6.4M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Romanian-Norwegian Nynorsk (34,892 sentence pairs, 1.00M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nn-ro.txt.zip">34.9k</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Slovak (8,670,188 sentence pairs, 311.99M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ro-sk.tmx.gz">8.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Slovenian (5,803,534 sentence pairs, 221.81M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ro-sl.tmx.gz">5.8M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Romanian-Albanian (1,889,675 sentence pairs, 72.71M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ro-sq.tmx.gz">1.9M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Romanian-Serbian (2,836,315 sentence pairs, 95.20M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ro-sr.tmx.gz">2.8M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Romanian-Turkish (3,885,545 sentence pairs, 116.11M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ro-tr.tmx.gz">3.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Ukrainian (6,921,984 sentence pairs, 229.49M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/ro-uk.tmx.gz">6.9M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sk plain text' href="download.php?f=MultiHPLT/v3/mono/sk.txt.gz">sk</a>
</th><td>1</td> <td>467.2M</td> <td>25.7M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Bulgarian (7,450,470 sentence pairs, 258.44M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-sk.txt.zip">7.5M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Slovak-Bosnian (1,125,367 sentence pairs, 31.21M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-sk.txt.zip">1.1M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovak-Catalan (1,681,849 sentence pairs, 57.54M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-sk.txt.zip">1.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Czech (11,761,696 sentence pairs, 380.06M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-sk.txt.zip">11.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Danish (9,066,738 sentence pairs, 303.84M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-sk.txt.zip">9.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Greek (8,191,468 sentence pairs, 289.90M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-sk.txt.zip">8.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-English (32,237,055 sentence pairs, 1.15G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-sk.txt.zip">32.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Estonian (4,262,617 sentence pairs, 139.99M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-sk.txt.zip">4.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovak-Basque (479,385 sentence pairs, 13.52M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-sk.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Finnish (7,338,500 sentence pairs, 218.38M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-sk.txt.zip">7.3M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Slovak-Irish (1,060,301 sentence pairs, 40.18M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-sk.txt.zip">1.1M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Slovak-Galician (807,081 sentence pairs, 25.96M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-sk.txt.zip">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Croatian (6,366,598 sentence pairs, 209.00M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-sk.txt.zip">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Hungarian (9,394,690 sentence pairs, 308.83M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-sk.txt.zip">9.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovak-Icelandic (1,499,043 sentence pairs, 45.75M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-sk.txt.zip">1.5M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Slovak-Georgian (230,245 sentence pairs, 7.67M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-sk.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Lithuanian (5,960,695 sentence pairs, 192.34M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-sk.txt.zip">6.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Latvian (5,731,685 sentence pairs, 190.35M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-sk.txt.zip">5.7M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Slovak-Macedonian (1,339,174 sentence pairs, 41.91M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mk-sk.txt.zip">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovak-Maltese (1,075,827 sentence pairs, 46.69M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mt-sk.txt.zip">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-BokmÃ¥l, Norwegian (4,748,353 sentence pairs, 148.53M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nb-sk.txt.zip">4.7M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Slovak-Norwegian Nynorsk (26,118 sentence pairs, 0.68M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nn-sk.txt.zip">26.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Romanian (8,670,188 sentence pairs, 311.99M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ro-sk.txt.zip">8.7M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Slovenian (5,972,408 sentence pairs, 211.32M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sk-sl.tmx.gz">6.0M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovak-Albanian (1,528,845 sentence pairs, 52.52M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sk-sq.tmx.gz">1.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovak-Serbian (2,515,986 sentence pairs, 75.71M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sk-sr.tmx.gz">2.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovak-Turkish (2,613,159 sentence pairs, 69.47M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sk-tr.tmx.gz">2.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Ukrainian (5,228,645 sentence pairs, 155.29M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sk-uk.tmx.gz">5.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=MultiHPLT/v3/mono/sl.txt.gz">sl</a>
</th><td>1</td> <td>302.1M</td> <td>15.0M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Bulgarian (5,527,416 sentence pairs, 205.68M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-sl.txt.zip">5.5M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Slovenian-Bosnian (882,169 sentence pairs, 25.32M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-sl.txt.zip">0.9M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovenian-Catalan (1,425,743 sentence pairs, 51.10M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-sl.txt.zip">1.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Czech (6,377,285 sentence pairs, 222.63M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-sl.txt.zip">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Danish (6,031,089 sentence pairs, 218.45M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-sl.txt.zip">6.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Greek (5,547,601 sentence pairs, 214.04M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-sl.txt.zip">5.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-English (16,845,959 sentence pairs, 655.85M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-sl.txt.zip">16.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Estonian (3,725,249 sentence pairs, 129.40M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-sl.txt.zip">3.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovenian-Basque (434,111 sentence pairs, 12.62M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-sl.txt.zip">0.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Finnish (5,060,889 sentence pairs, 163.88M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-sl.txt.zip">5.1M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Slovenian-Irish (957,112 sentence pairs, 37.76M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-sl.txt.zip">1.0M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Slovenian-Galician (682,711 sentence pairs, 22.98M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-sl.txt.zip">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Croatian (5,299,852 sentence pairs, 184.01M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-sl.txt.zip">5.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Hungarian (6,031,261 sentence pairs, 214.01M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-sl.txt.zip">6.0M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Slovenian-Icelandic (990,934 sentence pairs, 31.97M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-sl.txt.zip">1.0M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Slovenian-Georgian (181,401 sentence pairs, 6.32M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-sl.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Lithuanian (4,576,439 sentence pairs, 159.44M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-sl.txt.zip">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Latvian (4,562,528 sentence pairs, 162.47M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-sl.txt.zip">4.6M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Slovenian-Macedonian (1,169,795 sentence pairs, 38.97M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mk-sl.txt.zip">1.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-Maltese (1,018,860 sentence pairs, 46.60M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mt-sl.txt.zip">1.0M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Slovenian-BokmÃ¥l, Norwegian (3,178,234 sentence pairs, 104.46M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nb-sl.txt.zip">3.2M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Slovenian-Norwegian Nynorsk (18,590 sentence pairs, 0.49M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nn-sl.txt.zip">18.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Romanian (5,803,534 sentence pairs, 221.81M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ro-sl.txt.zip">5.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-Slovak (5,972,408 sentence pairs, 211.32M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sk-sl.txt.zip">6.0M</a>
</td><td></td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Slovenian-Albanian (1,102,304 sentence pairs, 40.32M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sl-sq.tmx.gz">1.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovenian-Serbian (1,606,055 sentence pairs, 51.07M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sl-sr.tmx.gz">1.6M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Slovenian-Turkish (1,228,522 sentence pairs, 35.74M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sl-tr.tmx.gz">1.2M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Slovenian-Ukrainian (2,990,487 sentence pairs, 93.93M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sl-uk.tmx.gz">3.0M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=MultiHPLT/v3/mono/sq.txt.gz">sq</a>
</th><td>1</td> <td>148.8M</td> <td>6.3M</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Albanian-Bulgarian (1,792,508 sentence pairs, 66.21M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-sq.txt.zip">1.8M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Albanian-Bosnian (498,909 sentence pairs, 16.87M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-sq.txt.zip">0.5M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Albanian-Catalan (955,106 sentence pairs, 38.16M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-sq.txt.zip">1.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Albanian-Czech (1,620,385 sentence pairs, 56.67M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-sq.txt.zip">1.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Albanian-Danish (1,688,215 sentence pairs, 61.98M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-sq.txt.zip">1.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Albanian-Greek (1,773,982 sentence pairs, 66.83M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-sq.txt.zip">1.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Albanian-English (6,864,132 sentence pairs, 290.78M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-sq.txt.zip">6.9M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Albanian-Estonian (969,897 sentence pairs, 32.68M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-sq.txt.zip">1.0M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Albanian-Basque (396,900 sentence pairs, 13.34M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-sq.txt.zip">0.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Albanian-Finnish (1,363,609 sentence pairs, 43.89M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-sq.txt.zip">1.4M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Albanian-Irish (727,059 sentence pairs, 30.07M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-sq.txt.zip">0.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Albanian-Galician (706,225 sentence pairs, 26.83M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-sq.txt.zip">0.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Albanian-Croatian (1,708,044 sentence pairs, 60.97M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-sq.txt.zip">1.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Albanian-Hungarian (1,567,653 sentence pairs, 55.53M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-sq.txt.zip">1.6M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Albanian-Icelandic (821,618 sentence pairs, 29.87M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-sq.txt.zip">0.8M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Albanian-Georgian (167,377 sentence pairs, 6.61M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-sq.txt.zip">0.2M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Albanian-Lithuanian (1,170,580 sentence pairs, 39.24M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-sq.txt.zip">1.2M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Albanian-Latvian (1,182,388 sentence pairs, 40.76M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-sq.txt.zip">1.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Albanian-Macedonian (1,211,048 sentence pairs, 46.85M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mk-sq.txt.zip">1.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Albanian-Maltese (298,257 sentence pairs, 10.69M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mt-sq.txt.zip">0.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Albanian-BokmÃ¥l, Norwegian (1,260,518 sentence pairs, 47.11M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nb-sq.txt.zip">1.3M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Albanian-Norwegian Nynorsk (4,829 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nn-sq.txt.zip">4.8k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Albanian-Romanian (1,889,675 sentence pairs, 72.71M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ro-sq.txt.zip">1.9M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Albanian-Slovak (1,528,845 sentence pairs, 52.52M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sk-sq.txt.zip">1.5M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Albanian-Slovenian (1,102,304 sentence pairs, 40.32M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sl-sq.txt.zip">1.1M</a>
</td><td></td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Albanian-Serbian (978,478 sentence pairs, 35.64M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sq-sr.tmx.gz">1.0M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Albanian-Turkish (474,481 sentence pairs, 16.07M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sq-tr.tmx.gz">0.5M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Albanian-Ukrainian (1,244,126 sentence pairs, 44.13M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sq-uk.tmx.gz">1.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=MultiHPLT/v3/mono/sr.txt.gz">sr</a>
</th><td>1</td> <td>149.7M</td> <td>7.9M</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Serbian-Bulgarian (2,656,396 sentence pairs, 84.30M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-sr.txt.zip">2.7M</a>
</td><td bgcolor="#d8ffc6"><a rel="nofollow" title='Serbian-Bosnian (636,829 sentence pairs, 19.45M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-sr.txt.zip">0.6M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Serbian-Catalan (1,142,099 sentence pairs, 40.69M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-sr.txt.zip">1.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Serbian-Czech (2,649,637 sentence pairs, 79.25M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-sr.txt.zip">2.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Serbian-Danish (2,669,346 sentence pairs, 84.47M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-sr.txt.zip">2.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Serbian-Greek (2,875,469 sentence pairs, 92.77M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-sr.txt.zip">2.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Serbian-English (8,495,542 sentence pairs, 307.79M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-sr.txt.zip">8.5M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Serbian-Estonian (1,245,926 sentence pairs, 36.16M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-sr.txt.zip">1.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Serbian-Basque (403,396 sentence pairs, 11.82M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-sr.txt.zip">0.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Serbian-Finnish (2,147,764 sentence pairs, 58.65M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-sr.txt.zip">2.1M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Serbian-Irish (723,896 sentence pairs, 26.73M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-sr.txt.zip">0.7M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Serbian-Galician (686,020 sentence pairs, 23.05M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-sr.txt.zip">0.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Serbian-Croatian (2,502,165 sentence pairs, 76.64M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-sr.txt.zip">2.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Serbian-Hungarian (2,432,731 sentence pairs, 72.40M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-sr.txt.zip">2.4M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Serbian-Icelandic (806,972 sentence pairs, 25.60M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-sr.txt.zip">0.8M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Serbian-Georgian (193,232 sentence pairs, 6.66M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-sr.txt.zip">0.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Serbian-Lithuanian (1,878,679 sentence pairs, 53.99M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-sr.txt.zip">1.9M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Serbian-Latvian (1,707,754 sentence pairs, 50.39M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-sr.txt.zip">1.7M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Serbian-Macedonian (1,106,807 sentence pairs, 36.52M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mk-sr.txt.zip">1.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Serbian-Maltese (273,443 sentence pairs, 8.93M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mt-sr.txt.zip">0.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Serbian-BokmÃ¥l, Norwegian (2,104,549 sentence pairs, 68.03M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nb-sr.txt.zip">2.1M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Serbian-Norwegian Nynorsk (9,189 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nn-sr.txt.zip">9.2k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Serbian-Romanian (2,836,315 sentence pairs, 95.20M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ro-sr.txt.zip">2.8M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Serbian-Slovak (2,515,986 sentence pairs, 75.71M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sk-sr.txt.zip">2.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Serbian-Slovenian (1,606,055 sentence pairs, 51.07M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sl-sr.txt.zip">1.6M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Serbian-Albanian (978,478 sentence pairs, 35.64M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sq-sr.txt.zip">1.0M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Serbian-Turkish (715,800 sentence pairs, 19.98M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sr-tr.tmx.gz">0.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Serbian-Ukrainian (2,037,803 sentence pairs, 62.48M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/sr-uk.tmx.gz">2.0M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=MultiHPLT/v3/mono/tr.txt.gz">tr</a>
</th><td>1</td> <td>688.8M</td> <td>43.3M</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Turkish-Bulgarian (2,679,405 sentence pairs, 75.78M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-tr.txt.zip">2.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Turkish-Bosnian (520,495 sentence pairs, 13.04M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-tr.txt.zip">0.5M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Turkish-Catalan (760,461 sentence pairs, 24.07M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-tr.txt.zip">0.8M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Turkish-Czech (4,294,925 sentence pairs, 116.15M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-tr.txt.zip">4.3M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Turkish-Danish (4,570,694 sentence pairs, 124.61M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-tr.txt.zip">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-Greek (4,730,361 sentence pairs, 134.66M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-tr.txt.zip">4.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-English (38,800,144 sentence pairs, 1.61G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-tr.txt.zip">38.8M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Turkish-Estonian (1,092,645 sentence pairs, 28.91M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-tr.txt.zip">1.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Turkish-Basque (185,236 sentence pairs, 4.84M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-tr.txt.zip">0.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Turkish-Finnish (3,472,136 sentence pairs, 82.91M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-tr.txt.zip">3.5M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Turkish-Irish (305,047 sentence pairs, 10.18M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-tr.txt.zip">0.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Galician (271,179 sentence pairs, 7.86M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-tr.txt.zip">0.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Turkish-Croatian (2,193,800 sentence pairs, 59.60M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-tr.txt.zip">2.2M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Turkish-Hungarian (4,012,497 sentence pairs, 107.76M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-tr.txt.zip">4.0M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Turkish-Icelandic (562,416 sentence pairs, 15.44M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-tr.txt.zip">0.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Turkish-Georgian (191,833 sentence pairs, 6.14M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-tr.txt.zip">0.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Turkish-Lithuanian (1,826,246 sentence pairs, 46.82M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-tr.txt.zip">1.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Turkish-Latvian (1,642,220 sentence pairs, 43.50M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-tr.txt.zip">1.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Turkish-Macedonian (448,440 sentence pairs, 13.05M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mk-tr.txt.zip">0.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Turkish-Maltese (110,501 sentence pairs, 3.15M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mt-tr.txt.zip">0.1M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Turkish-BokmÃ¥l, Norwegian (2,312,036 sentence pairs, 65.50M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nb-tr.txt.zip">2.3M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Turkish-Norwegian Nynorsk (25,627 sentence pairs, 0.61M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nn-tr.txt.zip">25.6k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Turkish-Romanian (3,885,545 sentence pairs, 116.11M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ro-tr.txt.zip">3.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Turkish-Slovak (2,613,159 sentence pairs, 69.47M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sk-tr.txt.zip">2.6M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Turkish-Slovenian (1,228,522 sentence pairs, 35.74M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sl-tr.txt.zip">1.2M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Turkish-Albanian (474,481 sentence pairs, 16.07M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sq-tr.txt.zip">0.5M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Turkish-Serbian (715,800 sentence pairs, 19.98M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sr-tr.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Turkish-Ukrainian (3,075,441 sentence pairs, 79.05M words) - TMX format' href="download.php?f=MultiHPLT/v3/tmx/tr-uk.tmx.gz">3.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=MultiHPLT/v3/mono/uk.txt.gz">uk</a>
</th><td>1</td> <td>724.7M</td> <td>40.0M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-Bulgarian (5,638,599 sentence pairs, 175.99M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bg-uk.txt.zip">5.6M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Ukrainian-Bosnian (1,013,009 sentence pairs, 28.08M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/bs-uk.txt.zip">1.0M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Ukrainian-Catalan (1,883,045 sentence pairs, 64.99M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ca-uk.txt.zip">1.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-Czech (6,715,105 sentence pairs, 198.59M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/cs-uk.txt.zip">6.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-Danish (6,660,119 sentence pairs, 204.63M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/da-uk.txt.zip">6.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-Greek (6,659,823 sentence pairs, 212.11M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/el-uk.txt.zip">6.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-English (45,402,157 sentence pairs, 1.57G words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/en-uk.txt.zip">45.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Ukrainian-Estonian (2,679,547 sentence pairs, 76.59M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/et-uk.txt.zip">2.7M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Ukrainian-Basque (512,305 sentence pairs, 14.45M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/eu-uk.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-Finnish (5,270,923 sentence pairs, 141.24M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/fi-uk.txt.zip">5.3M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Ukrainian-Irish (876,350 sentence pairs, 31.39M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ga-uk.txt.zip">0.9M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Ukrainian-Galician (810,362 sentence pairs, 26.10M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/gl-uk.txt.zip">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-Croatian (4,467,514 sentence pairs, 133.94M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hr-uk.txt.zip">4.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-Hungarian (6,191,756 sentence pairs, 182.85M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/hu-uk.txt.zip">6.2M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Ukrainian-Icelandic (1,261,062 sentence pairs, 38.12M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/is-uk.txt.zip">1.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Ukrainian-Georgian (272,590 sentence pairs, 9.11M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ka-uk.txt.zip">0.3M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Ukrainian-Lithuanian (4,098,455 sentence pairs, 116.95M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lt-uk.txt.zip">4.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Ukrainian-Latvian (3,797,633 sentence pairs, 111.06M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/lv-uk.txt.zip">3.8M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Ukrainian-Macedonian (1,270,289 sentence pairs, 40.33M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mk-uk.txt.zip">1.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Ukrainian-Maltese (325,293 sentence pairs, 10.30M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/mt-uk.txt.zip">0.3M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Ukrainian-BokmÃ¥l, Norwegian (4,026,892 sentence pairs, 127.02M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nb-uk.txt.zip">4.0M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Ukrainian-Norwegian Nynorsk (35,084 sentence pairs, 0.92M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/nn-uk.txt.zip">35.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-Romanian (6,921,984 sentence pairs, 229.49M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/ro-uk.txt.zip">6.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-Slovak (5,228,645 sentence pairs, 155.29M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sk-uk.txt.zip">5.2M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Ukrainian-Slovenian (2,990,487 sentence pairs, 93.93M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sl-uk.txt.zip">3.0M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Ukrainian-Albanian (1,244,126 sentence pairs, 44.13M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sq-uk.txt.zip">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Ukrainian-Serbian (2,037,803 sentence pairs, 62.48M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/sr-uk.txt.zip">2.0M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Ukrainian-Turkish (3,075,441 sentence pairs, 79.05M words) - Moses format' href="download.php?f=MultiHPLT/v3/moses/tr-uk.txt.zip">3.1M</a>
</td><td></td></tr></table></div><p>Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents and non-aligned sentences.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>