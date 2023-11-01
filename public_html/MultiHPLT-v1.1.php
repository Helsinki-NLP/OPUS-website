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
<div class="header"><?php include("header.php"); ?></div><h1>MultiHPLT v1.1</h1>Parallel corpora from Web Crawls collected in the <a href="https://hplt-project.org">HPLT project</a> and further processed for making it a multi-parallel corpus by pivoting via English. Here we provide the additional language pairs that came out of pivoting. The bitexts for English are the same as the ones in the <a href="http://opus.nlpl.eu/HPLT-v1.1.php">original HPLT release</a>.<p>19 languages, 171 bitexts<br>total number of files: 19<br>total number of tokens: 2.68G<br>total number of sentence fragments: 157.25M<br><p>Please, acknowledge the HPLT project at <a href="https://hplt-project.org">https://hplt-project.org</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>The data packaging is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="https://hplt-project.org">https://hplt-project.org</a> for more details<h3>Release history:</h3><p><ul><li><a href="MultiHPLT-v1.php">MultiHPLT v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/et_sample.html">et</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/is_sample.html">is</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/sw_sample.html">sw</a></th>
<th><a rel="nofollow" href="MultiHPLT/v1.1/zh_hant_sample.html">zh_hant</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/ar.zip">ar</a></th>
<th></th>
<td><a rel="nofollow" title="Arabic-Bosnian (sample file)" href="MultiHPLT/v1.1/ar-bs_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Catalan (sample file)" href="MultiHPLT/v1.1/ar-ca_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="MultiHPLT/v1.1/ar-en_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Estonian (sample file)" href="MultiHPLT/v1.1/ar-et_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Basque (sample file)" href="MultiHPLT/v1.1/ar-eu_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Finnish (sample file)" href="MultiHPLT/v1.1/ar-fi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Irish (sample file)" href="MultiHPLT/v1.1/ar-ga_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Galician (sample file)" href="MultiHPLT/v1.1/ar-gl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Hindi (sample file)" href="MultiHPLT/v1.1/ar-hi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Croatian (sample file)" href="MultiHPLT/v1.1/ar-hr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Icelandic (sample file)" href="MultiHPLT/v1.1/ar-is_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Macedonian (sample file)" href="MultiHPLT/v1.1/ar-mk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Maltese (sample file)" href="MultiHPLT/v1.1/ar-mt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/ar-nn_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Albanian (sample file)" href="MultiHPLT/v1.1/ar-sq_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Serbian (sample file)" href="MultiHPLT/v1.1/ar-sr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Swahili (sample file)" href="MultiHPLT/v1.1/ar-sw_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="MultiHPLT/v1.1/ar-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/ar.zip">ar</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/bs.zip">bs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Arabic' (15.7k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-bs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bosnian-Catalan (sample file)" href="MultiHPLT/v1.1/bs-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="MultiHPLT/v1.1/bs-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Estonian (sample file)" href="MultiHPLT/v1.1/bs-et_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Basque (sample file)" href="MultiHPLT/v1.1/bs-eu_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Finnish (sample file)" href="MultiHPLT/v1.1/bs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Irish (sample file)" href="MultiHPLT/v1.1/bs-ga_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Galician (sample file)" href="MultiHPLT/v1.1/bs-gl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hindi (sample file)" href="MultiHPLT/v1.1/bs-hi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="MultiHPLT/v1.1/bs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Icelandic (sample file)" href="MultiHPLT/v1.1/bs-is_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="MultiHPLT/v1.1/bs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Maltese (sample file)" href="MultiHPLT/v1.1/bs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/bs-nn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="MultiHPLT/v1.1/bs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="MultiHPLT/v1.1/bs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Swahili (sample file)" href="MultiHPLT/v1.1/bs-sw_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Chinese (sample file)" href="MultiHPLT/v1.1/bs-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/bs.zip">bs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/ca.zip">ca</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Arabic' (0.4M links, 10.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bosnian' (17.0k links, 0.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-ca.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Catalan-English (sample file)" href="MultiHPLT/v1.1/ca-en_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Estonian (sample file)" href="MultiHPLT/v1.1/ca-et_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Basque (sample file)" href="MultiHPLT/v1.1/ca-eu_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Finnish (sample file)" href="MultiHPLT/v1.1/ca-fi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Irish (sample file)" href="MultiHPLT/v1.1/ca-ga_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Galician (sample file)" href="MultiHPLT/v1.1/ca-gl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hindi (sample file)" href="MultiHPLT/v1.1/ca-hi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Croatian (sample file)" href="MultiHPLT/v1.1/ca-hr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Icelandic (sample file)" href="MultiHPLT/v1.1/ca-is_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Macedonian (sample file)" href="MultiHPLT/v1.1/ca-mk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Maltese (sample file)" href="MultiHPLT/v1.1/ca-mt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/ca-nn_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Albanian (sample file)" href="MultiHPLT/v1.1/ca-sq_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Serbian (sample file)" href="MultiHPLT/v1.1/ca-sr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Swahili (sample file)" href="MultiHPLT/v1.1/ca-sw_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Chinese (sample file)" href="MultiHPLT/v1.1/ca-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (14.6M links, 559.0M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (0.2M links, 6.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (8.9M links, 345.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Estonian (sample file)" href="MultiHPLT/v1.1/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="MultiHPLT/v1.1/en-eu_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="MultiHPLT/v1.1/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-Irish (sample file)" href="MultiHPLT/v1.1/en-ga_sample.html">view</a></td><td><a rel="nofollow" title="English-Galician (sample file)" href="MultiHPLT/v1.1/en-gl_sample.html">view</a></td><td><a rel="nofollow" title="English-Hindi (sample file)" href="MultiHPLT/v1.1/en-hi_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="MultiHPLT/v1.1/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="MultiHPLT/v1.1/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="MultiHPLT/v1.1/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="MultiHPLT/v1.1/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/en-nn_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="MultiHPLT/v1.1/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="MultiHPLT/v1.1/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swahili (sample file)" href="MultiHPLT/v1.1/en-sw_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="MultiHPLT/v1.1/en-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/et.zip">et</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Arabic' (0.5M links, 22.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bosnian' (21.2k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Catalan' (0.8M links, 24.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (6.1M links, 203.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-et.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Estonian-Basque (sample file)" href="MultiHPLT/v1.1/et-eu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="MultiHPLT/v1.1/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Irish (sample file)" href="MultiHPLT/v1.1/et-ga_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Galician (sample file)" href="MultiHPLT/v1.1/et-gl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hindi (sample file)" href="MultiHPLT/v1.1/et-hi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="MultiHPLT/v1.1/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="MultiHPLT/v1.1/et-is_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Macedonian (sample file)" href="MultiHPLT/v1.1/et-mk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Maltese (sample file)" href="MultiHPLT/v1.1/et-mt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/et-nn_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Albanian (sample file)" href="MultiHPLT/v1.1/et-sq_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Serbian (sample file)" href="MultiHPLT/v1.1/et-sr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swahili (sample file)" href="MultiHPLT/v1.1/et-sw_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="MultiHPLT/v1.1/et-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/et.zip">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/eu.zip">eu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Arabic' (31.4k links, 0.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Bosnian' (4.2k links, 76.4k tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Catalan' (0.2M links, 5.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-English' (0.6M links, 21.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Estonian' (46.0k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-eu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Basque-Finnish (sample file)" href="MultiHPLT/v1.1/eu-fi_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Irish (sample file)" href="MultiHPLT/v1.1/eu-ga_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Galician (sample file)" href="MultiHPLT/v1.1/eu-gl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Hindi (sample file)" href="MultiHPLT/v1.1/eu-hi_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Croatian (sample file)" href="MultiHPLT/v1.1/eu-hr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Icelandic (sample file)" href="MultiHPLT/v1.1/eu-is_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Macedonian (sample file)" href="MultiHPLT/v1.1/eu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Maltese (sample file)" href="MultiHPLT/v1.1/eu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/eu-nn_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Albanian (sample file)" href="MultiHPLT/v1.1/eu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Serbian (sample file)" href="MultiHPLT/v1.1/eu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Swahili (sample file)" href="MultiHPLT/v1.1/eu-sw_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Chinese (sample file)" href="MultiHPLT/v1.1/eu-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/eu.zip">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/fi.zip">fi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Arabic' (1.4M links, 29.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bosnian' (52.9k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Catalan' (1.4M links, 39.0M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (25.2M links, 719.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (2.1M links, 61.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Basque' (75.9k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-Irish (sample file)" href="MultiHPLT/v1.1/fi-ga_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Galician (sample file)" href="MultiHPLT/v1.1/fi-gl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hindi (sample file)" href="MultiHPLT/v1.1/fi-hi_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="MultiHPLT/v1.1/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="MultiHPLT/v1.1/fi-is_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Macedonian (sample file)" href="MultiHPLT/v1.1/fi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Maltese (sample file)" href="MultiHPLT/v1.1/fi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/fi-nn_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Albanian (sample file)" href="MultiHPLT/v1.1/fi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Serbian (sample file)" href="MultiHPLT/v1.1/fi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swahili (sample file)" href="MultiHPLT/v1.1/fi-sw_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="MultiHPLT/v1.1/fi-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/fi.zip">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/ga.zip">ga</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Arabic' (44.4k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Bosnian' (5.2k links, 90.3k tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Catalan' (90.0k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-English' (1.0M links, 38.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Estonian' (0.1M links, 5.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Basque' (36.4k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Finnish' (0.2M links, 7.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-ga.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Irish-Galician (sample file)" href="MultiHPLT/v1.1/ga-gl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Hindi (sample file)" href="MultiHPLT/v1.1/ga-hi_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Croatian (sample file)" href="MultiHPLT/v1.1/ga-hr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Icelandic (sample file)" href="MultiHPLT/v1.1/ga-is_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Macedonian (sample file)" href="MultiHPLT/v1.1/ga-mk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Maltese (sample file)" href="MultiHPLT/v1.1/ga-mt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/ga-nn_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Albanian (sample file)" href="MultiHPLT/v1.1/ga-sq_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Serbian (sample file)" href="MultiHPLT/v1.1/ga-sr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swahili (sample file)" href="MultiHPLT/v1.1/ga-sw_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Chinese (sample file)" href="MultiHPLT/v1.1/ga-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/ga.zip">ga</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/gl.zip">gl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Arabic' (54.7k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Bosnian' (8.4k links, 0.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Catalan' (0.3M links, 10.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-English' (1.1M links, 33.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Estonian' (71.4k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Basque' (0.1M links, 3.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Finnish' (0.1M links, 2.7M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Irish' (70.8k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-gl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Galician-Hindi (sample file)" href="MultiHPLT/v1.1/gl-hi_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Croatian (sample file)" href="MultiHPLT/v1.1/gl-hr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Icelandic (sample file)" href="MultiHPLT/v1.1/gl-is_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Macedonian (sample file)" href="MultiHPLT/v1.1/gl-mk_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Maltese (sample file)" href="MultiHPLT/v1.1/gl-mt_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/gl-nn_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Albanian (sample file)" href="MultiHPLT/v1.1/gl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Serbian (sample file)" href="MultiHPLT/v1.1/gl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Swahili (sample file)" href="MultiHPLT/v1.1/gl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Chinese (sample file)" href="MultiHPLT/v1.1/gl-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/gl.zip">gl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/hi.zip">hi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Arabic' (1.5M links, 85.0M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Bosnian' (17.7k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Catalan' (0.3M links, 13.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-English' (12.0M links, 494.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Estonian' (0.5M links, 18.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Basque' (54.8k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Finnish' (0.8M links, 24.9M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Irish' (0.1M links, 4.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Galician' (86.2k links, 3.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/gl-hi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hindi-Croatian (sample file)" href="MultiHPLT/v1.1/hi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Icelandic (sample file)" href="MultiHPLT/v1.1/hi-is_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Macedonian (sample file)" href="MultiHPLT/v1.1/hi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Maltese (sample file)" href="MultiHPLT/v1.1/hi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/hi-nn_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Albanian (sample file)" href="MultiHPLT/v1.1/hi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Serbian (sample file)" href="MultiHPLT/v1.1/hi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Swahili (sample file)" href="MultiHPLT/v1.1/hi-sw_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Chinese (sample file)" href="MultiHPLT/v1.1/hi-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/hi.zip">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/hr.zip">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Arabic' (0.6M links, 16.0M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (70.1k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Catalan' (0.7M links, 22.9M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (9.3M links, 316.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (1.3M links, 45.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Basque' (58.3k links, 1.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (2.2M links, 64.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Irish' (0.2M links, 7.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Galician' (92.3k links, 2.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/gl-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Hindi' (0.6M links, 21.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hi-hr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="MultiHPLT/v1.1/hr-is_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="MultiHPLT/v1.1/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Maltese (sample file)" href="MultiHPLT/v1.1/hr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/hr-nn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="MultiHPLT/v1.1/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="MultiHPLT/v1.1/hr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swahili (sample file)" href="MultiHPLT/v1.1/hr-sw_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="MultiHPLT/v1.1/hr-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/is.zip">is</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Arabic' (0.1M links, 3.9M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bosnian' (12.7k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Catalan' (0.7M links, 23.9M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (2.1M links, 66.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (0.6M links, 19.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Basque' (42.3k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (0.9M links, 25.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Irish' (72.6k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Galician' (89.5k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/gl-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hindi' (0.1M links, 4.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' (0.6M links, 16.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hr-is.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="MultiHPLT/v1.1/is-mk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Maltese (sample file)" href="MultiHPLT/v1.1/is-mt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/is-nn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Albanian (sample file)" href="MultiHPLT/v1.1/is-sq_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Serbian (sample file)" href="MultiHPLT/v1.1/is-sr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swahili (sample file)" href="MultiHPLT/v1.1/is-sw_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Chinese (sample file)" href="MultiHPLT/v1.1/is-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/is.zip">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/mk.zip">mk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Arabic' (73.4k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (21.6k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Catalan' (0.1M links, 4.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (1.1M links, 42.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Estonian' (0.1M links, 3.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Basque' (42.0k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Finnish' (0.2M links, 4.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Irish' (75.0k links, 2.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Galician' (80.3k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/gl-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hindi' (0.1M links, 5.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hi-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (0.3M links, 8.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hr-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Icelandic' (98.4k links, 2.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/is-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Maltese (sample file)" href="MultiHPLT/v1.1/mk-mt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/mk-nn_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="MultiHPLT/v1.1/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="MultiHPLT/v1.1/mk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Swahili (sample file)" href="MultiHPLT/v1.1/mk-sw_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Chinese (sample file)" href="MultiHPLT/v1.1/mk-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/mk.zip">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/mt.zip">mt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Arabic' (41.6k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bosnian' (2.7k links, 0.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Catalan' (66.9k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-English' (0.9M links, 49.9M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Estonian' (0.3M links, 18.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Basque' (13.7k links, 0.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Finnish' (0.3M links, 19.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Irish' (94.2k links, 5.7M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Galician' (25.6k links, 0.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/gl-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Hindi' (55.8k links, 2.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hi-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Croatian' (0.3M links, 17.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Icelandic' (49.7k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/is-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Macedonian' (31.9k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mk-mt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Maltese-Norwegian Nynorsk (sample file)" href="MultiHPLT/v1.1/mt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Albanian (sample file)" href="MultiHPLT/v1.1/mt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Serbian (sample file)" href="MultiHPLT/v1.1/mt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swahili (sample file)" href="MultiHPLT/v1.1/mt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Chinese (sample file)" href="MultiHPLT/v1.1/mt-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/mt.zip">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/nn.zip">nn</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Arabic' (11.5k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Bosnian' (2.1k links, 33.9k tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Catalan' (13.0k links, 0.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-English' (0.1M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Estonian' (6.9k links, 0.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Basque' (3.0k links, 0.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Finnish' (13.6k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Irish' (0.8k links, 33.3k tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Galician' (4.8k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/gl-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Hindi' (6.3k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hi-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Croatian' (13.1k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hr-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Icelandic' (3.2k links, 82.5k tokens)" href="download.php?f=MultiHPLT/v1.1/xml/is-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Macedonian' (4.2k links, 0.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mk-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Maltese' (0.6k links, 12.4k tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mt-nn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Norwegian Nynorsk-Albanian (sample file)" href="MultiHPLT/v1.1/nn-sq_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Serbian (sample file)" href="MultiHPLT/v1.1/nn-sr_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Swahili (sample file)" href="MultiHPLT/v1.1/nn-sw_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Chinese (sample file)" href="MultiHPLT/v1.1/nn-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/nn.zip">nn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/sq.zip">sq</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Arabic' (85.1k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (17.4k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Catalan' (0.2M links, 5.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (1.7M links, 61.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Estonian' (0.2M links, 4.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Basque' (52.2k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Finnish' (0.3M links, 7.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Irish' (0.1M links, 4.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Galician' (91.8k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/gl-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hindi' (0.1M links, 6.0M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hi-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (0.2M links, 7.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Icelandic' (0.1M links, 4.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/is-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (0.2M links, 6.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Maltese' (61.4k links, 2.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Norwegian Nynorsk' (8.7k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/nn-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="MultiHPLT/v1.1/sq-sr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Swahili (sample file)" href="MultiHPLT/v1.1/sq-sw_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Chinese (sample file)" href="MultiHPLT/v1.1/sq-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/sq.zip">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/sr.zip">sr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Arabic' (0.4M links, 9.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (30.4k links, 0.9M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Catalan' (0.3M links, 10.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (3.9M links, 125.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Estonian' (0.4M links, 11.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Basque' (15.4k links, 0.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Finnish' (1.0M links, 24.0M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Irish' (9.3k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Galician' (17.7k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/gl-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Hindi' (86.4k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hi-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (0.9M links, 27.7M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hr-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Icelandic' (0.3M links, 10.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/is-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (0.1M links, 3.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Maltese' (11.5k links, 0.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Norwegian Nynorsk' (1.8k links, 39.4k tokens)" href="download.php?f=MultiHPLT/v1.1/xml/nn-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (88.7k links, 3.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/sq-sr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Swahili (sample file)" href="MultiHPLT/v1.1/sr-sw_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Chinese (sample file)" href="MultiHPLT/v1.1/sr-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/sr.zip">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/sw.zip">sw</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Arabic' (0.3M links, 11.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Bosnian' (13.4k links, 0.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Catalan' (0.1M links, 3.9M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-English' (1.7M links, 50.7M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Estonian' (0.2M links, 4.7M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Basque' (27.9k links, 0.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Finnish' (0.2M links, 4.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Irish' (45.2k links, 1.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Galician' (46.7k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/gl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Hindi' (0.4M links, 16.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hi-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Croatian' (0.2M links, 5.8M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Icelandic' (74.8k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/is-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Macedonian' (69.1k links, 2.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Maltese' (32.5k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Norwegian Nynorsk' (0.5k links, 13.0k tokens)" href="download.php?f=MultiHPLT/v1.1/xml/nn-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Albanian' (86.5k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/sq-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Serbian' (19.1k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/sr-sw.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swahili-Chinese (sample file)" href="MultiHPLT/v1.1/sw-zh_hant_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/sw.zip">sw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/xml/zh_hant.zip">zh_hant</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (0.8M links, 27.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ar-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bosnian' (6.2k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/bs-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Catalan' (0.2M links, 5.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ca-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (5.3M links, 205.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/en-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (0.2M links, 5.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/et-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Basque' (9.4k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/eu-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (0.7M links, 16.7M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/fi-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Irish' (8.5k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/ga-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Galician' (14.7k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/gl-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hindi' (0.3M links, 13.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hi-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (0.2M links, 5.3M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/hr-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Icelandic' (70.1k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/is-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Macedonian' (24.3k links, 0.7M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mk-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Maltese' (11.2k links, 0.4M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/mt-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Norwegian Nynorsk' (1.3k links, 24.0k tokens)" href="download.php?f=MultiHPLT/v1.1/xml/nn-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Albanian' (25.4k links, 0.7M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/sq-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Serbian' (88.9k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/sr-zh_hant.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swahili' (0.3M links, 7.9M tokens)" href="download.php?f=MultiHPLT/v1.1/xml/sw-zh_hant.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=MultiHPLT/v1.1/raw/zh_hant.zip">zh_hant</a></th></tr>
<tr><th></th>
<th>ar</th>
<th>bs</th>
<th>ca</th>
<th>en</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>ga</th>
<th>gl</th>
<th>hi</th>
<th>hr</th>
<th>is</th>
<th>mk</th>
<th>mt</th>
<th>nn</th>
<th>sq</th>
<th>sr</th>
<th>sw</th>
<th>zh_hant</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized ar plain text' href="download.php?f=MultiHPLT/v1.1/mono/ar.tok.gz">ar</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs plain text' href="download.php?f=MultiHPLT/v1.1/mono/bs.tok.gz">bs</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=MultiHPLT/v1.1/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=MultiHPLT/v1.1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=MultiHPLT/v1.1/mono/et.tok.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=MultiHPLT/v1.1/mono/eu.tok.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=MultiHPLT/v1.1/mono/fi.tok.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized ga plain text' href="download.php?f=MultiHPLT/v1.1/mono/ga.tok.gz">ga</a>
</th><th><a rel="nofollow" title='monolingual tokenized gl plain text' href="download.php?f=MultiHPLT/v1.1/mono/gl.tok.gz">gl</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=MultiHPLT/v1.1/mono/hi.tok.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=MultiHPLT/v1.1/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=MultiHPLT/v1.1/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=MultiHPLT/v1.1/mono/mk.tok.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=MultiHPLT/v1.1/mono/mt.tok.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized nn plain text' href="download.php?f=MultiHPLT/v1.1/mono/nn.tok.gz">nn</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=MultiHPLT/v1.1/mono/sq.tok.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=MultiHPLT/v1.1/mono/sr.tok.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized sw plain text' href="download.php?f=MultiHPLT/v1.1/mono/sw.tok.gz">sw</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh_hant plain text' href="download.php?f=MultiHPLT/v1.1/mono/zh_hant.tok.gz">zh_hant</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ar plain text' href="download.php?f=MultiHPLT/v1.1/mono/ar.txt.gz">ar</a>
</th><td>1</td> <td>226.7M</td> <td>12.2M</td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Arabic-Bosnian (15,739 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-bs.tmx.gz">15.7k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Arabic-Catalan (375,342 sentence pairs, 8.89M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-ca.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Arabic-Estonian (546,811 sentence pairs, 18.06M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-et.tmx.gz">0.5M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Arabic-Basque (31,384 sentence pairs, 0.65M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-eu.tmx.gz">31.4k</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Arabic-Finnish (1,434,078 sentence pairs, 25.49M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-fi.tmx.gz">1.4M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Arabic-Irish (44,361 sentence pairs, 1.23M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-ga.tmx.gz">44.4k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Arabic-Galician (54,669 sentence pairs, 1.31M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-gl.tmx.gz">54.7k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Arabic-Hindi (1,472,027 sentence pairs, 61.71M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-hi.tmx.gz">1.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Arabic-Croatian (550,405 sentence pairs, 13.54M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-hr.tmx.gz">0.6M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Arabic-Icelandic (149,197 sentence pairs, 3.50M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-is.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Arabic-Macedonian (73,385 sentence pairs, 1.77M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-mk.tmx.gz">73.4k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Arabic-Maltese (41,574 sentence pairs, 0.99M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-mt.tmx.gz">41.6k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Arabic-Norwegian Nynorsk (11,545 sentence pairs, 0.16M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-nn.tmx.gz">11.5k</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Arabic-Albanian (85,141 sentence pairs, 2.11M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-sq.tmx.gz">85.1k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Arabic-Serbian (388,428 sentence pairs, 8.58M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-sr.tmx.gz">0.4M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Arabic-Swahili (261,560 sentence pairs, 9.21M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-sw.tmx.gz">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Arabic-Chinese (757,820 sentence pairs, 16.53M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ar-zh_hant.tmx.gz">0.8M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs plain text' href="download.php?f=MultiHPLT/v1.1/mono/bs.txt.gz">bs</a>
</th><td>1</td> <td>2.6M</td> <td>0.2M</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Bosnian-Arabic (15,739 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-bs.txt.zip">15.7k</a>
</td><td></td><td bgcolor="#fff1ec"><a rel="nofollow" title='Bosnian-Catalan (16,992 sentence pairs, 0.36M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-ca.tmx.gz">17.0k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bosnian-English (240,013 sentence pairs, 5.35M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-en.tmx.gz">0.2M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Bosnian-Estonian (21,172 sentence pairs, 0.40M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-et.tmx.gz">21.2k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Bosnian-Basque (4,251 sentence pairs, 61.14k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-eu.tmx.gz">4.3k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Bosnian-Finnish (52,891 sentence pairs, 0.93M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-fi.tmx.gz">52.9k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Bosnian-Irish (5,209 sentence pairs, 81.10k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-ga.tmx.gz">5.2k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Bosnian-Galician (8,421 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-gl.tmx.gz">8.4k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Bosnian-Hindi (17,706 sentence pairs, 0.43M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-hi.tmx.gz">17.7k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Bosnian-Croatian (70,110 sentence pairs, 1.47M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-hr.tmx.gz">70.1k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Bosnian-Icelandic (12,670 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-is.tmx.gz">12.7k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Bosnian-Macedonian (21,595 sentence pairs, 0.50M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-mk.tmx.gz">21.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Bosnian-Maltese (2,743 sentence pairs, 74.86k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-mt.tmx.gz">2.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bosnian-Norwegian Nynorsk (2,063 sentence pairs, 28.59k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-nn.tmx.gz">2.1k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Bosnian-Albanian (17,374 sentence pairs, 0.43M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-sq.tmx.gz">17.4k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Bosnian-Serbian (30,408 sentence pairs, 0.73M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-sr.tmx.gz">30.4k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Bosnian-Swahili (13,421 sentence pairs, 0.33M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-sw.tmx.gz">13.4k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Bosnian-Chinese (6,211 sentence pairs, 88.52k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/bs-zh_hant.tmx.gz">6.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=MultiHPLT/v1.1/mono/ca.txt.gz">ca</a>
</th><td>1</td> <td>156.2M</td> <td>7.9M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Catalan-Arabic (375,342 sentence pairs, 8.89M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-ca.txt.zip">0.4M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Catalan-Bosnian (16,992 sentence pairs, 0.36M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-ca.txt.zip">17.0k</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Catalan-English (8,905,890 sentence pairs, 291.72M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-en.tmx.gz">8.9M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Catalan-Estonian (777,017 sentence pairs, 21.69M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-et.tmx.gz">0.8M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Catalan-Basque (152,572 sentence pairs, 4.45M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-eu.tmx.gz">0.2M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Catalan-Finnish (1,393,596 sentence pairs, 33.98M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-fi.tmx.gz">1.4M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Catalan-Irish (90,023 sentence pairs, 2.95M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-ga.tmx.gz">90.0k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Catalan-Galician (277,718 sentence pairs, 8.97M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-gl.tmx.gz">0.3M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Catalan-Hindi (321,724 sentence pairs, 9.72M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-hi.tmx.gz">0.3M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Catalan-Croatian (746,604 sentence pairs, 19.64M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-hr.tmx.gz">0.7M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Catalan-Icelandic (697,130 sentence pairs, 21.62M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-is.tmx.gz">0.7M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Catalan-Macedonian (130,711 sentence pairs, 3.72M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Catalan-Maltese (66,916 sentence pairs, 2.18M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-mt.tmx.gz">66.9k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Catalan-Norwegian Nynorsk (13,010 sentence pairs, 0.34M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-nn.tmx.gz">13.0k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Catalan-Albanian (173,767 sentence pairs, 4.99M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Catalan-Serbian (333,107 sentence pairs, 9.10M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-sr.tmx.gz">0.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Catalan-Swahili (127,015 sentence pairs, 3.39M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-sw.tmx.gz">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Catalan-Chinese (192,929 sentence pairs, 3.14M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ca-zh_hant.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=MultiHPLT/v1.1/mono/en.txt.gz">en</a>
</th><td>1</td> <td>1.2G</td> <td>73.1M</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='English-Bosnian (240,013 sentence pairs, 5.35M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-en.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Catalan (8,905,890 sentence pairs, 291.72M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-en.txt.zip">8.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Estonian (6,089,792 sentence pairs, 172.39M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-et.tmx.gz">6.1M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='English-Basque (610,688 sentence pairs, 17.97M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-eu.tmx.gz">0.6M</a>
</td><td></td><td bgcolor="#d2ffcd"><a rel="nofollow" title='English-Irish (994,747 sentence pairs, 34.70M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-ga.tmx.gz">1.0M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='English-Galician (1,063,104 sentence pairs, 28.41M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-gl.tmx.gz">1.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Croatian (9,310,276 sentence pairs, 267.94M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-hr.tmx.gz">9.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='English-Icelandic (2,148,855 sentence pairs, 59.14M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-is.tmx.gz">2.1M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='English-Macedonian (1,139,052 sentence pairs, 36.97M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-mk.tmx.gz">1.1M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='English-Maltese (854,821 sentence pairs, 35.23M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-mt.tmx.gz">0.9M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='English-Norwegian Nynorsk (132,539 sentence pairs, 4.02M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-nn.tmx.gz">0.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Albanian (1,655,959 sentence pairs, 53.67M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-sq.tmx.gz">1.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='English-Serbian (3,904,384 sentence pairs, 108.77M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-sr.tmx.gz">3.9M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='English-Swahili (1,710,206 sentence pairs, 41.04M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-sw.tmx.gz">1.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='English-Chinese (5,306,571 sentence pairs, 111.27M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/en-zh_hant.tmx.gz">5.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=MultiHPLT/v1.1/mono/et.txt.gz">et</a>
</th><td>1</td> <td>79.6M</td> <td>5.5M</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Estonian-Arabic (546,811 sentence pairs, 18.06M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-et.txt.zip">0.5M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Estonian-Bosnian (21,172 sentence pairs, 0.40M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-et.txt.zip">21.2k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Estonian-Catalan (777,017 sentence pairs, 21.69M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-et.txt.zip">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-English (6,089,792 sentence pairs, 172.39M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-et.txt.zip">6.1M</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Estonian-Basque (46,026 sentence pairs, 0.93M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-eu.tmx.gz">46.0k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Finnish (2,064,592 sentence pairs, 51.31M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-fi.tmx.gz">2.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Estonian-Irish (137,782 sentence pairs, 4.91M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-ga.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Estonian-Galician (71,398 sentence pairs, 1.57M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-gl.tmx.gz">71.4k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Hindi (473,288 sentence pairs, 13.04M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-hi.tmx.gz">0.5M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Estonian-Croatian (1,315,296 sentence pairs, 37.19M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-hr.tmx.gz">1.3M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Estonian-Icelandic (595,728 sentence pairs, 17.27M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-is.tmx.gz">0.6M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Estonian-Macedonian (122,918 sentence pairs, 3.00M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Maltese (307,299 sentence pairs, 12.29M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Estonian-Norwegian Nynorsk (6,863 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-nn.tmx.gz">6.9k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Estonian-Albanian (158,352 sentence pairs, 3.82M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Estonian-Serbian (393,816 sentence pairs, 9.97M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-sr.tmx.gz">0.4M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Estonian-Swahili (162,706 sentence pairs, 3.74M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-sw.tmx.gz">0.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Estonian-Chinese (185,804 sentence pairs, 2.93M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/et-zh_hant.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=MultiHPLT/v1.1/mono/eu.txt.gz">eu</a>
</th><td>1</td> <td>9.5M</td> <td>0.6M</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Basque-Arabic (31,384 sentence pairs, 0.65M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-eu.txt.zip">31.4k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Basque-Bosnian (4,251 sentence pairs, 61.14k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-eu.txt.zip">4.3k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Basque-Catalan (152,572 sentence pairs, 4.45M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-eu.txt.zip">0.2M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Basque-English (610,688 sentence pairs, 17.97M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-eu.txt.zip">0.6M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Basque-Estonian (46,026 sentence pairs, 0.93M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-eu.txt.zip">46.0k</a>
</td><td></td><td bgcolor="#ffffe6"><a rel="nofollow" title='Basque-Finnish (75,864 sentence pairs, 1.58M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-fi.tmx.gz">75.9k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Basque-Irish (36,419 sentence pairs, 0.92M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-ga.tmx.gz">36.4k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Basque-Galician (107,005 sentence pairs, 2.81M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-gl.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Basque-Hindi (54,787 sentence pairs, 1.38M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-hi.tmx.gz">54.8k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Basque-Croatian (58,339 sentence pairs, 1.28M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-hr.tmx.gz">58.3k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Basque-Icelandic (42,258 sentence pairs, 0.93M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-is.tmx.gz">42.3k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Basque-Macedonian (41,976 sentence pairs, 1.00M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-mk.tmx.gz">42.0k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Basque-Maltese (13,682 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-mt.tmx.gz">13.7k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Basque-Norwegian Nynorsk (3,019 sentence pairs, 81.13k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-nn.tmx.gz">3.0k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Basque-Albanian (52,207 sentence pairs, 1.29M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-sq.tmx.gz">52.2k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Basque-Serbian (15,434 sentence pairs, 0.36M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-sr.tmx.gz">15.4k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Basque-Swahili (27,894 sentence pairs, 0.71M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-sw.tmx.gz">27.9k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Basque-Chinese (9,358 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/eu-zh_hant.tmx.gz">9.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=MultiHPLT/v1.1/mono/fi.txt.gz">fi</a>
</th><td>1</td> <td>265.3M</td> <td>21.5M</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Finnish-Arabic (1,434,078 sentence pairs, 25.49M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-fi.txt.zip">1.4M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Finnish-Bosnian (52,891 sentence pairs, 0.93M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-fi.txt.zip">52.9k</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Finnish-Catalan (1,393,596 sentence pairs, 33.98M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-fi.txt.zip">1.4M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Estonian (2,064,592 sentence pairs, 51.31M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-fi.txt.zip">2.1M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Finnish-Basque (75,864 sentence pairs, 1.58M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-fi.txt.zip">75.9k</a>
</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Finnish-Irish (241,757 sentence pairs, 6.92M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-ga.tmx.gz">0.2M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Finnish-Galician (106,582 sentence pairs, 2.26M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-gl.tmx.gz">0.1M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Finnish-Hindi (752,692 sentence pairs, 17.29M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-hi.tmx.gz">0.8M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-Croatian (2,150,057 sentence pairs, 53.32M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-hr.tmx.gz">2.2M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Finnish-Icelandic (917,947 sentence pairs, 23.07M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-is.tmx.gz">0.9M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Finnish-Macedonian (182,706 sentence pairs, 3.97M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Maltese (335,871 sentence pairs, 12.89M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Finnish-Norwegian Nynorsk (13,568 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-nn.tmx.gz">13.6k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Finnish-Albanian (282,395 sentence pairs, 6.34M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Finnish-Serbian (980,417 sentence pairs, 20.83M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-sr.tmx.gz">1.0M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Finnish-Swahili (162,853 sentence pairs, 3.49M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-sw.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Finnish-Chinese (741,676 sentence pairs, 9.28M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/fi-zh_hant.tmx.gz">0.7M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ga plain text' href="download.php?f=MultiHPLT/v1.1/mono/ga.txt.gz">ga</a>
</th><td>1</td> <td>19.1M</td> <td>0.9M</td><td bgcolor="#ffffec"><a rel="nofollow" title='Irish-Arabic (44,361 sentence pairs, 1.23M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-ga.txt.zip">44.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Irish-Bosnian (5,209 sentence pairs, 81.10k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-ga.txt.zip">5.2k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Irish-Catalan (90,023 sentence pairs, 2.95M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-ga.txt.zip">90.0k</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Irish-English (994,747 sentence pairs, 34.70M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-ga.txt.zip">1.0M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Irish-Estonian (137,782 sentence pairs, 4.91M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-ga.txt.zip">0.1M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Irish-Basque (36,419 sentence pairs, 0.92M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-ga.txt.zip">36.4k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Irish-Finnish (241,757 sentence pairs, 6.92M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-ga.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Irish-Galician (70,795 sentence pairs, 2.06M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-gl.tmx.gz">70.8k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Irish-Hindi (101,507 sentence pairs, 3.31M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-hi.tmx.gz">0.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Irish-Croatian (190,490 sentence pairs, 6.68M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-hr.tmx.gz">0.2M</a>
</td><td bgcolor="#fbffdc"><a rel="nofollow" title='Irish-Icelandic (72,631 sentence pairs, 2.00M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-is.tmx.gz">72.6k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Irish-Macedonian (74,987 sentence pairs, 2.32M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-mk.tmx.gz">75.0k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Irish-Maltese (94,244 sentence pairs, 4.15M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-mt.tmx.gz">94.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Irish-Norwegian Nynorsk (753 sentence pairs, 24.85k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-nn.tmx.gz">0.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Irish-Albanian (132,503 sentence pairs, 3.91M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Irish-Serbian (9,340 sentence pairs, 0.24M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-sr.tmx.gz">9.3k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Irish-Swahili (45,195 sentence pairs, 1.38M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-sw.tmx.gz">45.2k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Irish-Chinese (8,491 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/ga-zh_hant.tmx.gz">8.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gl plain text' href="download.php?f=MultiHPLT/v1.1/mono/gl.txt.gz">gl</a>
</th><td>1</td> <td>15.1M</td> <td>0.9M</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Galician-Arabic (54,669 sentence pairs, 1.31M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-gl.txt.zip">54.7k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Galician-Bosnian (8,421 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-gl.txt.zip">8.4k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Galician-Catalan (277,718 sentence pairs, 8.97M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-gl.txt.zip">0.3M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Galician-English (1,063,104 sentence pairs, 28.41M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-gl.txt.zip">1.1M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Galician-Estonian (71,398 sentence pairs, 1.57M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-gl.txt.zip">71.4k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Galician-Basque (107,005 sentence pairs, 2.81M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-gl.txt.zip">0.1M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Galician-Finnish (106,582 sentence pairs, 2.26M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-gl.txt.zip">0.1M</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Galician-Irish (70,795 sentence pairs, 2.06M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-gl.txt.zip">70.8k</a>
</td><td></td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Galician-Hindi (86,171 sentence pairs, 2.41M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/gl-hi.tmx.gz">86.2k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Galician-Croatian (92,272 sentence pairs, 2.21M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/gl-hr.tmx.gz">92.3k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Galician-Icelandic (89,521 sentence pairs, 1.84M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/gl-is.tmx.gz">89.5k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Galician-Macedonian (80,315 sentence pairs, 2.14M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/gl-mk.tmx.gz">80.3k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Galician-Maltese (25,576 sentence pairs, 0.64M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/gl-mt.tmx.gz">25.6k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Galician-Norwegian Nynorsk (4,801 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/gl-nn.tmx.gz">4.8k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Galician-Albanian (91,801 sentence pairs, 2.49M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/gl-sq.tmx.gz">91.8k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Galician-Serbian (17,678 sentence pairs, 0.42M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/gl-sr.tmx.gz">17.7k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Galician-Swahili (46,707 sentence pairs, 1.23M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/gl-sw.tmx.gz">46.7k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Galician-Chinese (14,720 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/gl-zh_hant.tmx.gz">14.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=MultiHPLT/v1.1/mono/hi.txt.gz">hi</a>
</th><td>1</td> <td>276.8M</td> <td>11.3M</td><td bgcolor="#caffca"><a rel="nofollow" title='Hindi-Arabic (1,472,027 sentence pairs, 61.71M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-hi.txt.zip">1.5M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Hindi-Bosnian (17,706 sentence pairs, 0.43M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-hi.txt.zip">17.7k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Hindi-Catalan (321,724 sentence pairs, 9.72M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-hi.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hindi-Estonian (473,288 sentence pairs, 13.04M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-hi.txt.zip">0.5M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Hindi-Basque (54,787 sentence pairs, 1.38M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-hi.txt.zip">54.8k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Hindi-Finnish (752,692 sentence pairs, 17.29M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-hi.txt.zip">0.8M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Hindi-Irish (101,507 sentence pairs, 3.31M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-hi.txt.zip">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Hindi-Galician (86,171 sentence pairs, 2.41M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/gl-hi.txt.zip">86.2k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hindi-Croatian (591,792 sentence pairs, 15.58M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hi-hr.tmx.gz">0.6M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Hindi-Icelandic (107,007 sentence pairs, 3.05M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hi-is.tmx.gz">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Hindi-Macedonian (137,157 sentence pairs, 3.90M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hi-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Hindi-Maltese (55,787 sentence pairs, 1.64M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hi-mt.tmx.gz">55.8k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Hindi-Norwegian Nynorsk (6,330 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hi-nn.tmx.gz">6.3k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Hindi-Albanian (149,077 sentence pairs, 4.45M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hi-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Hindi-Serbian (86,392 sentence pairs, 2.40M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hi-sr.tmx.gz">86.4k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Hindi-Swahili (411,916 sentence pairs, 11.99M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hi-sw.tmx.gz">0.4M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Hindi-Chinese (291,723 sentence pairs, 7.30M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hi-zh_hant.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=MultiHPLT/v1.1/mono/hr.txt.gz">hr</a>
</th><td>1</td> <td>133.8M</td> <td>8.3M</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Croatian-Arabic (550,405 sentence pairs, 13.54M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-hr.txt.zip">0.6M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Croatian-Bosnian (70,110 sentence pairs, 1.47M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-hr.txt.zip">70.1k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Croatian-Catalan (746,604 sentence pairs, 19.64M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-hr.txt.zip">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-English (9,310,276 sentence pairs, 267.94M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-hr.txt.zip">9.3M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Croatian-Estonian (1,315,296 sentence pairs, 37.19M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-hr.txt.zip">1.3M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Croatian-Basque (58,339 sentence pairs, 1.28M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-hr.txt.zip">58.3k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Croatian-Finnish (2,150,057 sentence pairs, 53.32M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-hr.txt.zip">2.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Croatian-Irish (190,490 sentence pairs, 6.68M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-hr.txt.zip">0.2M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Croatian-Galician (92,272 sentence pairs, 2.21M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/gl-hr.txt.zip">92.3k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Croatian-Hindi (591,792 sentence pairs, 15.58M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hi-hr.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Croatian-Icelandic (557,079 sentence pairs, 14.83M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hr-is.tmx.gz">0.6M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Croatian-Macedonian (281,523 sentence pairs, 7.23M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hr-mk.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Croatian-Maltese (297,022 sentence pairs, 12.22M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hr-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Croatian-Norwegian Nynorsk (13,091 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hr-nn.tmx.gz">13.1k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Croatian-Albanian (229,146 sentence pairs, 6.44M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hr-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Croatian-Serbian (936,403 sentence pairs, 24.05M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hr-sr.tmx.gz">0.9M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Croatian-Swahili (193,472 sentence pairs, 4.70M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hr-sw.tmx.gz">0.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Croatian-Chinese (189,064 sentence pairs, 2.95M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/hr-zh_hant.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=MultiHPLT/v1.1/mono/is.txt.gz">is</a>
</th><td>1</td> <td>26.4M</td> <td>1.8M</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Icelandic-Arabic (149,197 sentence pairs, 3.50M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-is.txt.zip">0.1M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Icelandic-Bosnian (12,670 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-is.txt.zip">12.7k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Icelandic-Catalan (697,130 sentence pairs, 21.62M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-is.txt.zip">0.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Icelandic-English (2,148,855 sentence pairs, 59.14M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-is.txt.zip">2.1M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Icelandic-Estonian (595,728 sentence pairs, 17.27M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-is.txt.zip">0.6M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Icelandic-Basque (42,258 sentence pairs, 0.93M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-is.txt.zip">42.3k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Icelandic-Finnish (917,947 sentence pairs, 23.07M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-is.txt.zip">0.9M</a>
</td><td bgcolor="#fbffdc"><a rel="nofollow" title='Icelandic-Irish (72,631 sentence pairs, 2.00M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-is.txt.zip">72.6k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Icelandic-Galician (89,521 sentence pairs, 1.84M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/gl-is.txt.zip">89.5k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Icelandic-Hindi (107,007 sentence pairs, 3.05M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hi-is.txt.zip">0.1M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Icelandic-Croatian (557,079 sentence pairs, 14.83M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hr-is.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Icelandic-Macedonian (98,380 sentence pairs, 2.34M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/is-mk.tmx.gz">98.4k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Icelandic-Maltese (49,690 sentence pairs, 1.26M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/is-mt.tmx.gz">49.7k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Icelandic-Norwegian Nynorsk (3,228 sentence pairs, 66.30k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/is-nn.tmx.gz">3.2k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Icelandic-Albanian (148,446 sentence pairs, 3.79M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/is-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Icelandic-Serbian (328,016 sentence pairs, 9.08M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/is-sr.tmx.gz">0.3M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Icelandic-Swahili (74,755 sentence pairs, 2.10M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/is-sw.tmx.gz">74.8k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Icelandic-Chinese (70,130 sentence pairs, 1.20M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/is-zh_hant.tmx.gz">70.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=MultiHPLT/v1.1/mono/mk.txt.gz">mk</a>
</th><td>1</td> <td>19.7M</td> <td>1.1M</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Macedonian-Arabic (73,385 sentence pairs, 1.77M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-mk.txt.zip">73.4k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Macedonian-Bosnian (21,595 sentence pairs, 0.50M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-mk.txt.zip">21.6k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Macedonian-Catalan (130,711 sentence pairs, 3.72M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-mk.txt.zip">0.1M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Macedonian-English (1,139,052 sentence pairs, 36.97M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-mk.txt.zip">1.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Macedonian-Estonian (122,918 sentence pairs, 3.00M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-mk.txt.zip">0.1M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Macedonian-Basque (41,976 sentence pairs, 1.00M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-mk.txt.zip">42.0k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Macedonian-Finnish (182,706 sentence pairs, 3.97M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-mk.txt.zip">0.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Macedonian-Irish (74,987 sentence pairs, 2.32M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-mk.txt.zip">75.0k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Macedonian-Galician (80,315 sentence pairs, 2.14M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/gl-mk.txt.zip">80.3k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Macedonian-Hindi (137,157 sentence pairs, 3.90M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hi-mk.txt.zip">0.1M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Macedonian-Croatian (281,523 sentence pairs, 7.23M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hr-mk.txt.zip">0.3M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Macedonian-Icelandic (98,380 sentence pairs, 2.34M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/is-mk.txt.zip">98.4k</a>
</td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Macedonian-Maltese (31,922 sentence pairs, 0.87M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mk-mt.tmx.gz">31.9k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Macedonian-Norwegian Nynorsk (4,197 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mk-nn.tmx.gz">4.2k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Macedonian-Albanian (175,115 sentence pairs, 5.68M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mk-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Macedonian-Serbian (117,021 sentence pairs, 3.10M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mk-sr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Macedonian-Swahili (69,081 sentence pairs, 1.91M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mk-sw.tmx.gz">69.1k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Macedonian-Chinese (24,258 sentence pairs, 0.35M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mk-zh_hant.tmx.gz">24.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=MultiHPLT/v1.1/mono/mt.txt.gz">mt</a>
</th><td>1</td> <td>25.8M</td> <td>0.8M</td><td bgcolor="#fffff0"><a rel="nofollow" title='Maltese-Arabic (41,574 sentence pairs, 0.99M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-mt.txt.zip">41.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Maltese-Bosnian (2,743 sentence pairs, 74.86k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-mt.txt.zip">2.7k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Maltese-Catalan (66,916 sentence pairs, 2.18M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-mt.txt.zip">66.9k</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Maltese-English (854,821 sentence pairs, 35.23M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-mt.txt.zip">0.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Maltese-Estonian (307,299 sentence pairs, 12.29M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-mt.txt.zip">0.3M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Maltese-Basque (13,682 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-mt.txt.zip">13.7k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Maltese-Finnish (335,871 sentence pairs, 12.89M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-mt.txt.zip">0.3M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Maltese-Irish (94,244 sentence pairs, 4.15M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-mt.txt.zip">94.2k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Maltese-Galician (25,576 sentence pairs, 0.64M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/gl-mt.txt.zip">25.6k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Maltese-Hindi (55,787 sentence pairs, 1.64M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hi-mt.txt.zip">55.8k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Maltese-Croatian (297,022 sentence pairs, 12.22M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hr-mt.txt.zip">0.3M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Maltese-Icelandic (49,690 sentence pairs, 1.26M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/is-mt.txt.zip">49.7k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Maltese-Macedonian (31,922 sentence pairs, 0.87M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mk-mt.txt.zip">31.9k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Maltese-Norwegian Nynorsk (551 sentence pairs, 8.71k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mt-nn.tmx.gz">0.6k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Maltese-Albanian (61,358 sentence pairs, 1.70M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mt-sq.tmx.gz">61.4k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Maltese-Serbian (11,525 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mt-sr.tmx.gz">11.5k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Maltese-Swahili (32,508 sentence pairs, 0.78M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mt-sw.tmx.gz">32.5k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Maltese-Chinese (11,182 sentence pairs, 0.19M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/mt-zh_hant.tmx.gz">11.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nn plain text' href="download.php?f=MultiHPLT/v1.1/mono/nn.txt.gz">nn</a>
</th><td>1</td> <td>2.1M</td> <td>0.1M</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Norwegian Nynorsk-Arabic (11,545 sentence pairs, 0.16M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-nn.txt.zip">11.5k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Norwegian Nynorsk-Bosnian (2,063 sentence pairs, 28.59k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-nn.txt.zip">2.1k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Norwegian Nynorsk-Catalan (13,010 sentence pairs, 0.34M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-nn.txt.zip">13.0k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Norwegian Nynorsk-English (132,539 sentence pairs, 4.02M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-nn.txt.zip">0.1M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Norwegian Nynorsk-Estonian (6,863 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-nn.txt.zip">6.9k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Norwegian Nynorsk-Basque (3,019 sentence pairs, 81.13k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-nn.txt.zip">3.0k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Norwegian Nynorsk-Finnish (13,568 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-nn.txt.zip">13.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Norwegian Nynorsk-Irish (753 sentence pairs, 24.85k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-nn.txt.zip">0.8k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Norwegian Nynorsk-Galician (4,801 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/gl-nn.txt.zip">4.8k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Norwegian Nynorsk-Hindi (6,330 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hi-nn.txt.zip">6.3k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Norwegian Nynorsk-Croatian (13,091 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hr-nn.txt.zip">13.1k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Norwegian Nynorsk-Icelandic (3,228 sentence pairs, 66.30k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/is-nn.txt.zip">3.2k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Norwegian Nynorsk-Macedonian (4,197 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mk-nn.txt.zip">4.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Norwegian Nynorsk-Maltese (551 sentence pairs, 8.71k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mt-nn.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Norwegian Nynorsk-Albanian (8,702 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/nn-sq.tmx.gz">8.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Norwegian Nynorsk-Serbian (1,817 sentence pairs, 33.13k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/nn-sr.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Norwegian Nynorsk-Swahili (472 sentence pairs, 10.67k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/nn-sw.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Norwegian Nynorsk-Chinese (1,261 sentence pairs, 12.98k words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/nn-zh_hant.tmx.gz">1.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=MultiHPLT/v1.1/mono/sq.txt.gz">sq</a>
</th><td>1</td> <td>29.5M</td> <td>1.6M</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Albanian-Arabic (85,141 sentence pairs, 2.11M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-sq.txt.zip">85.1k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Albanian-Bosnian (17,374 sentence pairs, 0.43M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-sq.txt.zip">17.4k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Albanian-Catalan (173,767 sentence pairs, 4.99M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-sq.txt.zip">0.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Albanian-English (1,655,959 sentence pairs, 53.67M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-sq.txt.zip">1.7M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Albanian-Estonian (158,352 sentence pairs, 3.82M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-sq.txt.zip">0.2M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Albanian-Basque (52,207 sentence pairs, 1.29M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-sq.txt.zip">52.2k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Albanian-Finnish (282,395 sentence pairs, 6.34M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-sq.txt.zip">0.3M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Albanian-Irish (132,503 sentence pairs, 3.91M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-sq.txt.zip">0.1M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Albanian-Galician (91,801 sentence pairs, 2.49M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/gl-sq.txt.zip">91.8k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Albanian-Hindi (149,077 sentence pairs, 4.45M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hi-sq.txt.zip">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Albanian-Croatian (229,146 sentence pairs, 6.44M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hr-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Albanian-Icelandic (148,446 sentence pairs, 3.79M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/is-sq.txt.zip">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Albanian-Macedonian (175,115 sentence pairs, 5.68M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mk-sq.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Albanian-Maltese (61,358 sentence pairs, 1.70M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mt-sq.txt.zip">61.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Albanian-Norwegian Nynorsk (8,702 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/nn-sq.txt.zip">8.7k</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Albanian-Serbian (88,725 sentence pairs, 2.97M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/sq-sr.tmx.gz">88.7k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Albanian-Swahili (86,451 sentence pairs, 2.68M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/sq-sw.tmx.gz">86.5k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Albanian-Chinese (25,383 sentence pairs, 0.41M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/sq-zh_hant.tmx.gz">25.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=MultiHPLT/v1.1/mono/sr.txt.gz">sr</a>
</th><td>1</td> <td>53.6M</td> <td>3.4M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Serbian-Arabic (388,428 sentence pairs, 8.58M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-sr.txt.zip">0.4M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Serbian-Bosnian (30,408 sentence pairs, 0.73M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-sr.txt.zip">30.4k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Serbian-Catalan (333,107 sentence pairs, 9.10M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-sr.txt.zip">0.3M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Serbian-English (3,904,384 sentence pairs, 108.77M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-sr.txt.zip">3.9M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Serbian-Estonian (393,816 sentence pairs, 9.97M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-sr.txt.zip">0.4M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Serbian-Basque (15,434 sentence pairs, 0.36M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-sr.txt.zip">15.4k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Serbian-Finnish (980,417 sentence pairs, 20.83M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-sr.txt.zip">1.0M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Serbian-Irish (9,340 sentence pairs, 0.24M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-sr.txt.zip">9.3k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Serbian-Galician (17,678 sentence pairs, 0.42M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/gl-sr.txt.zip">17.7k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Serbian-Hindi (86,392 sentence pairs, 2.40M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hi-sr.txt.zip">86.4k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Serbian-Croatian (936,403 sentence pairs, 24.05M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hr-sr.txt.zip">0.9M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Serbian-Icelandic (328,016 sentence pairs, 9.08M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/is-sr.txt.zip">0.3M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Serbian-Macedonian (117,021 sentence pairs, 3.10M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mk-sr.txt.zip">0.1M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Serbian-Maltese (11,525 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mt-sr.txt.zip">11.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Serbian-Norwegian Nynorsk (1,817 sentence pairs, 33.13k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/nn-sr.txt.zip">1.8k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Serbian-Albanian (88,725 sentence pairs, 2.97M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/sq-sr.txt.zip">88.7k</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Serbian-Swahili (19,095 sentence pairs, 0.54M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/sr-sw.tmx.gz">19.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Serbian-Chinese (88,900 sentence pairs, 1.33M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/sr-zh_hant.tmx.gz">88.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sw plain text' href="download.php?f=MultiHPLT/v1.1/mono/sw.txt.gz">sw</a>
</th><td>1</td> <td>18.6M</td> <td>1.2M</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Swahili-Arabic (261,560 sentence pairs, 9.21M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-sw.txt.zip">0.3M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Swahili-Bosnian (13,421 sentence pairs, 0.33M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-sw.txt.zip">13.4k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Swahili-Catalan (127,015 sentence pairs, 3.39M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-sw.txt.zip">0.1M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Swahili-English (1,710,206 sentence pairs, 41.04M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-sw.txt.zip">1.7M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Swahili-Estonian (162,706 sentence pairs, 3.74M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-sw.txt.zip">0.2M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Swahili-Basque (27,894 sentence pairs, 0.71M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-sw.txt.zip">27.9k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Swahili-Finnish (162,853 sentence pairs, 3.49M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-sw.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Swahili-Irish (45,195 sentence pairs, 1.38M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-sw.txt.zip">45.2k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Swahili-Galician (46,707 sentence pairs, 1.23M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/gl-sw.txt.zip">46.7k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Swahili-Hindi (411,916 sentence pairs, 11.99M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hi-sw.txt.zip">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Swahili-Croatian (193,472 sentence pairs, 4.70M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hr-sw.txt.zip">0.2M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Swahili-Icelandic (74,755 sentence pairs, 2.10M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/is-sw.txt.zip">74.8k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Swahili-Macedonian (69,081 sentence pairs, 1.91M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mk-sw.txt.zip">69.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Swahili-Maltese (32,508 sentence pairs, 0.78M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mt-sw.txt.zip">32.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swahili-Norwegian Nynorsk (472 sentence pairs, 10.67k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/nn-sw.txt.zip">0.5k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Swahili-Albanian (86,451 sentence pairs, 2.68M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/sq-sw.txt.zip">86.5k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Swahili-Serbian (19,095 sentence pairs, 0.54M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/sr-sw.txt.zip">19.1k</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Swahili-Chinese (271,039 sentence pairs, 4.95M words) - TMX format' href="download.php?f=MultiHPLT/v1.1/tmx/sw-zh_hant.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh_hant plain text' href="download.php?f=MultiHPLT/v1.1/mono/zh_hant.txt.gz">zh_hant</a>
</th><td>1</td> <td>97.1M</td> <td>4.8M</td><td bgcolor="#daffc6"><a rel="nofollow" title='Chinese-Arabic (757,820 sentence pairs, 16.53M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ar-zh_hant.txt.zip">0.8M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Chinese-Bosnian (6,211 sentence pairs, 88.52k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/bs-zh_hant.txt.zip">6.2k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Chinese-Catalan (192,929 sentence pairs, 3.14M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ca-zh_hant.txt.zip">0.2M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Chinese-English (5,306,571 sentence pairs, 111.27M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/en-zh_hant.txt.zip">5.3M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Chinese-Estonian (185,804 sentence pairs, 2.93M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/et-zh_hant.txt.zip">0.2M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Chinese-Basque (9,358 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/eu-zh_hant.txt.zip">9.4k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Chinese-Finnish (741,676 sentence pairs, 9.28M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/fi-zh_hant.txt.zip">0.7M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Chinese-Irish (8,491 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/ga-zh_hant.txt.zip">8.5k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Chinese-Galician (14,720 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/gl-zh_hant.txt.zip">14.7k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Chinese-Hindi (291,723 sentence pairs, 7.30M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hi-zh_hant.txt.zip">0.3M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Chinese-Croatian (189,064 sentence pairs, 2.95M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/hr-zh_hant.txt.zip">0.2M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Chinese-Icelandic (70,130 sentence pairs, 1.20M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/is-zh_hant.txt.zip">70.1k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Chinese-Macedonian (24,258 sentence pairs, 0.35M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mk-zh_hant.txt.zip">24.3k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Chinese-Maltese (11,182 sentence pairs, 0.19M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/mt-zh_hant.txt.zip">11.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Norwegian Nynorsk (1,261 sentence pairs, 12.98k words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/nn-zh_hant.txt.zip">1.3k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Chinese-Albanian (25,383 sentence pairs, 0.41M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/sq-zh_hant.txt.zip">25.4k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Chinese-Serbian (88,900 sentence pairs, 1.33M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/sr-zh_hant.txt.zip">88.9k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Chinese-Swahili (271,039 sentence pairs, 4.95M words) - Moses format' href="download.php?f=MultiHPLT/v1.1/moses/sw-zh_hant.txt.zip">0.3M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>