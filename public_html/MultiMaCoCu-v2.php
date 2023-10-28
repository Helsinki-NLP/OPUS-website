<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>MultiMaCoCu</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>MultiMaCoCu v2</h1>The <a href="https://macocu.eu">MaCoCu project</a> collected monolingual and parallel data from the Internet, especially for under-resourced languages and DSI-specific data. Parallel texts have been extracted using the bitextor toolbox. This release is further processed for making it a multi-parallel corpus by pivoting via English. Here we provide the additional language pairs that came out of pivoting. The bitexts for English are the same as the ones in the <a href="http://opus.nlpl.eu/MaCoCu-v2.php">original MaCoCu release</a>.<p>18 languages, 153 bitexts<br>total number of files: 18<br>total number of tokens: 1.21G<br>total number of sentence fragments: 51.52M<br><p>Please, acknowledge the MaCoCu project at <a href="https://macocu.eu">https://macocu.eu</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>The data packaging is licensed under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="https://macocu.eu">https://macocu.eu</a> for more details<h3>Release history:</h3><p><ul><li><a href="MultiMaCoCu-v2.php">MultiMaCoCu v2</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/bs_Cyrl_sample.html">bs_Cyrl</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/bs_Latn_sample.html">bs_Latn</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/el_sample.html">el</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/en_sample.html">en</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/is_sample.html">is</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/me_Cyrl_sample.html">me_Cyrl</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/me_Latn_sample.html">me_Latn</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/sr_Cyrl_sample.html">sr_Cyrl</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/sr_Latn_sample.html">sr_Latn</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="MultiMaCoCu/v2/uk_sample.html">uk</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/bg.zip">bg</a></th>
<th></th>
<td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="MultiMaCoCu/v2/bg-bs_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="MultiMaCoCu/v2/bg-bs_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Catalan (sample file)" href="MultiMaCoCu/v2/bg-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="MultiMaCoCu/v2/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="MultiMaCoCu/v2/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="MultiMaCoCu/v2/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="MultiMaCoCu/v2/bg-is_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-me (sample file)" href="MultiMaCoCu/v2/bg-me_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-me (sample file)" href="MultiMaCoCu/v2/bg-me_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="MultiMaCoCu/v2/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Maltese (sample file)" href="MultiMaCoCu/v2/bg-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="MultiMaCoCu/v2/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="MultiMaCoCu/v2/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="MultiMaCoCu/v2/bg-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="MultiMaCoCu/v2/bg-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Turkish (sample file)" href="MultiMaCoCu/v2/bg-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="MultiMaCoCu/v2/bg-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/bg.zip">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl.zip">bs_Cyrl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (0.1k links, 2.4k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-bs_Cyrl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bosnian-Bosnian (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-bs_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Catalan (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Greek (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-el_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Icelandic (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-is_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-me (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-me_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-me (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-me_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Maltese (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovenian (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Turkish (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Ukrainian (sample file)" href="MultiMaCoCu/v2/bs_Cyrl-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/bs_Cyrl.zip">bs_Cyrl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn.zip">bs_Latn</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (1.9k links, 60.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-bs_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bosnian' (24.6k links, 1.4M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-bs_Latn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bosnian-Catalan (sample file)" href="MultiMaCoCu/v2/bs_Latn-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Greek (sample file)" href="MultiMaCoCu/v2/bs_Latn-el_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="MultiMaCoCu/v2/bs_Latn-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="MultiMaCoCu/v2/bs_Latn-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Icelandic (sample file)" href="MultiMaCoCu/v2/bs_Latn-is_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-me (sample file)" href="MultiMaCoCu/v2/bs_Latn-me_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-me (sample file)" href="MultiMaCoCu/v2/bs_Latn-me_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="MultiMaCoCu/v2/bs_Latn-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Maltese (sample file)" href="MultiMaCoCu/v2/bs_Latn-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovenian (sample file)" href="MultiMaCoCu/v2/bs_Latn-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="MultiMaCoCu/v2/bs_Latn-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="MultiMaCoCu/v2/bs_Latn-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="MultiMaCoCu/v2/bs_Latn-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Turkish (sample file)" href="MultiMaCoCu/v2/bs_Latn-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Ukrainian (sample file)" href="MultiMaCoCu/v2/bs_Latn-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/bs_Latn.zip">bs_Latn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/ca.zip">ca</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bulgarian' (6.4k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bosnian' (0.1k links, 2.2k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bosnian' (1.1k links, 25.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-ca.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Catalan-Greek (sample file)" href="MultiMaCoCu/v2/ca-el_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="MultiMaCoCu/v2/ca-en_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Croatian (sample file)" href="MultiMaCoCu/v2/ca-hr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Icelandic (sample file)" href="MultiMaCoCu/v2/ca-is_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-me (sample file)" href="MultiMaCoCu/v2/ca-me_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-me (sample file)" href="MultiMaCoCu/v2/ca-me_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Macedonian (sample file)" href="MultiMaCoCu/v2/ca-mk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Maltese (sample file)" href="MultiMaCoCu/v2/ca-mt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovenian (sample file)" href="MultiMaCoCu/v2/ca-sl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Albanian (sample file)" href="MultiMaCoCu/v2/ca-sq_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Serbian (sample file)" href="MultiMaCoCu/v2/ca-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Serbian (sample file)" href="MultiMaCoCu/v2/ca-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Turkish (sample file)" href="MultiMaCoCu/v2/ca-tr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Ukrainian (sample file)" href="MultiMaCoCu/v2/ca-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/el.zip">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (16.6k links, 0.6M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bosnian' (0.2k links, 2.2k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bosnian' (2.9k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Catalan' (20.0k links, 0.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="MultiMaCoCu/v2/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="MultiMaCoCu/v2/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="MultiMaCoCu/v2/el-is_sample.html">view</a></td><td><a rel="nofollow" title="Greek-me (sample file)" href="MultiMaCoCu/v2/el-me_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-me (sample file)" href="MultiMaCoCu/v2/el-me_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="MultiMaCoCu/v2/el-mk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Maltese (sample file)" href="MultiMaCoCu/v2/el-mt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="MultiMaCoCu/v2/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Albanian (sample file)" href="MultiMaCoCu/v2/el-sq_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Serbian (sample file)" href="MultiMaCoCu/v2/el-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Serbian (sample file)" href="MultiMaCoCu/v2/el-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Turkish (sample file)" href="MultiMaCoCu/v2/el-tr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="MultiMaCoCu/v2/el-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/el.zip">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (1.8M links, 83.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (0.1M links, 4.7M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (0.4M links, 20.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (3.1M links, 165.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (3.6M links, 173.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Croatian (sample file)" href="MultiMaCoCu/v2/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="MultiMaCoCu/v2/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-me (sample file)" href="MultiMaCoCu/v2/en-me_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="English-me (sample file)" href="MultiMaCoCu/v2/en-me_Latn_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="MultiMaCoCu/v2/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="MultiMaCoCu/v2/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="MultiMaCoCu/v2/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="MultiMaCoCu/v2/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="MultiMaCoCu/v2/en-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="MultiMaCoCu/v2/en-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="MultiMaCoCu/v2/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="MultiMaCoCu/v2/en-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/hr.zip">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (24.0k links, 0.9M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (0.2k links, 3.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (4.7k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Catalan' (17.1k links, 0.6M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (30.5k links, 1.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (2.3M links, 114.9M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-hr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="MultiMaCoCu/v2/hr-is_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-me (sample file)" href="MultiMaCoCu/v2/hr-me_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-me (sample file)" href="MultiMaCoCu/v2/hr-me_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="MultiMaCoCu/v2/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Maltese (sample file)" href="MultiMaCoCu/v2/hr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="MultiMaCoCu/v2/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="MultiMaCoCu/v2/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="MultiMaCoCu/v2/hr-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="MultiMaCoCu/v2/hr-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Turkish (sample file)" href="MultiMaCoCu/v2/hr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="MultiMaCoCu/v2/hr-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/is.zip">is</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (2.1k links, 67.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bosnian' (25 links, 0.3k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bosnian' (0.4k links, 7.9k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Catalan' (2.9k links, 92.7k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' (7.8k links, 0.3M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (0.3M links, 11.9M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' (4.1k links, 0.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-is.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-me (sample file)" href="MultiMaCoCu/v2/is-me_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-me (sample file)" href="MultiMaCoCu/v2/is-me_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="MultiMaCoCu/v2/is-mk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Maltese (sample file)" href="MultiMaCoCu/v2/is-mt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="MultiMaCoCu/v2/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Albanian (sample file)" href="MultiMaCoCu/v2/is-sq_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Serbian (sample file)" href="MultiMaCoCu/v2/is-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Serbian (sample file)" href="MultiMaCoCu/v2/is-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Turkish (sample file)" href="MultiMaCoCu/v2/is-tr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Ukrainian (sample file)" href="MultiMaCoCu/v2/is-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/is.zip">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/me_Cyrl.zip">me_Cyrl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'me-Bulgarian' (80 links, 2.1k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-me_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Bosnian' (15 links, 0.6k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-me_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Bosnian' (74 links, 3.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-me_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Catalan' (81 links, 1.8k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-me_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Greek' (0.1k links, 2.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-me_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-English' (9.5k links, 0.6M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-me_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Croatian' (80 links, 1.1k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-me_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Icelandic' (38 links, 1.0k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/is-me_Cyrl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="me-me (sample file)" href="MultiMaCoCu/v2/me_Cyrl-me_Latn_sample.html">view</a></td><td><a rel="nofollow" title="me-Macedonian (sample file)" href="MultiMaCoCu/v2/me_Cyrl-mk_sample.html">view</a></td><td><a rel="nofollow" title="me-Maltese (sample file)" href="MultiMaCoCu/v2/me_Cyrl-mt_sample.html">view</a></td><td><a rel="nofollow" title="me-Slovenian (sample file)" href="MultiMaCoCu/v2/me_Cyrl-sl_sample.html">view</a></td><td><a rel="nofollow" title="me-Albanian (sample file)" href="MultiMaCoCu/v2/me_Cyrl-sq_sample.html">view</a></td><td><a rel="nofollow" title="me-Serbian (sample file)" href="MultiMaCoCu/v2/me_Cyrl-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="me-Serbian (sample file)" href="MultiMaCoCu/v2/me_Cyrl-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="me-Turkish (sample file)" href="MultiMaCoCu/v2/me_Cyrl-tr_sample.html">view</a></td><td><a rel="nofollow" title="me-Ukrainian (sample file)" href="MultiMaCoCu/v2/me_Cyrl-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/me_Cyrl.zip">me_Cyrl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/me_Latn.zip">me_Latn</a></th>
<td><a rel="nofollow" title="sentence alignments for 'me-Bulgarian' (0.9k links, 25.2k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-me_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Bosnian' (39 links, 1.1k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-me_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Bosnian' (0.9k links, 36.1k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-me_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Catalan' (1.5k links, 52.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-me_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Greek' (1.7k links, 54.2k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-me_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-English' (0.2M links, 12.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-me_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Croatian' (1.5k links, 35.1k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-me_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-Icelandic' (0.2k links, 3.1k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/is-me_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'me-me' (6.5k links, 0.4M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Cyrl-me_Latn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="me-Macedonian (sample file)" href="MultiMaCoCu/v2/me_Latn-mk_sample.html">view</a></td><td><a rel="nofollow" title="me-Maltese (sample file)" href="MultiMaCoCu/v2/me_Latn-mt_sample.html">view</a></td><td><a rel="nofollow" title="me-Slovenian (sample file)" href="MultiMaCoCu/v2/me_Latn-sl_sample.html">view</a></td><td><a rel="nofollow" title="me-Albanian (sample file)" href="MultiMaCoCu/v2/me_Latn-sq_sample.html">view</a></td><td><a rel="nofollow" title="me-Serbian (sample file)" href="MultiMaCoCu/v2/me_Latn-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="me-Serbian (sample file)" href="MultiMaCoCu/v2/me_Latn-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="me-Turkish (sample file)" href="MultiMaCoCu/v2/me_Latn-tr_sample.html">view</a></td><td><a rel="nofollow" title="me-Ukrainian (sample file)" href="MultiMaCoCu/v2/me_Latn-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/me_Latn.zip">me_Latn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/mk.zip">mk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (13.7k links, 0.6M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (33 links, 0.3k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (1.0k links, 35.9k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Catalan' (3.7k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Greek' (5.4k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (0.4M links, 20.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (9.0k links, 0.3M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Icelandic' (0.7k links, 23.2k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/is-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-me' (65 links, 2.2k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Cyrl-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-me' (1.7k links, 78.4k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Latn-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Maltese (sample file)" href="MultiMaCoCu/v2/mk-mt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovenian (sample file)" href="MultiMaCoCu/v2/mk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="MultiMaCoCu/v2/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="MultiMaCoCu/v2/mk-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="MultiMaCoCu/v2/mk-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Turkish (sample file)" href="MultiMaCoCu/v2/mk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Ukrainian (sample file)" href="MultiMaCoCu/v2/mk-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/mk.zip">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/mt.zip">mt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bulgarian' (3.2k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bosnian' (29 links, 0.7k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bosnian' (0.9k links, 62.9k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Catalan' (1.4k links, 51.7k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Greek' (19.5k links, 1.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-English' (0.9M links, 74.9M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Croatian' (0.2M links, 15.7M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Icelandic' (0.4k links, 15.9k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/is-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-me' (18 links, 0.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Cyrl-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-me' (83 links, 2.1k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Latn-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Macedonian' (0.7k links, 32.0k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mk-mt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Maltese-Slovenian (sample file)" href="MultiMaCoCu/v2/mt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Albanian (sample file)" href="MultiMaCoCu/v2/mt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Serbian (sample file)" href="MultiMaCoCu/v2/mt-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Serbian (sample file)" href="MultiMaCoCu/v2/mt-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Turkish (sample file)" href="MultiMaCoCu/v2/mt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Ukrainian (sample file)" href="MultiMaCoCu/v2/mt-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/mt.zip">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/sl.zip">sl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (24.9k links, 1.0M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bosnian' (89 links, 1.9k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bosnian' (4.0k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Catalan' (9.3k links, 0.3M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' (33.1k links, 1.4M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (1.9M links, 97.6M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (0.4M links, 24.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (2.9k links, 0.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/is-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-me' (68 links, 2.0k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Cyrl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-me' (2.7k links, 0.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Latn-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Macedonian' (5.8k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mk-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Maltese' (0.2M links, 17.0M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mt-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Albanian (sample file)" href="MultiMaCoCu/v2/sl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Serbian (sample file)" href="MultiMaCoCu/v2/sl-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Serbian (sample file)" href="MultiMaCoCu/v2/sl-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Turkish (sample file)" href="MultiMaCoCu/v2/sl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="MultiMaCoCu/v2/sl-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/sl.zip">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/sq.zip">sq</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (6.4k links, 0.3M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (0.8k links, 29.4k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (3.5k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Catalan' (4.4k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Greek' (23.6k links, 1.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (0.5M links, 27.7M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (5.8k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Icelandic' (0.8k links, 24.4k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/is-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-me' (81 links, 2.6k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Cyrl-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-me' (2.9k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Latn-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (3.4k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Maltese' (4.1k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovenian' (6.6k links, 0.3M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sl-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="MultiMaCoCu/v2/sq-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="MultiMaCoCu/v2/sq-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Turkish (sample file)" href="MultiMaCoCu/v2/sq-tr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Ukrainian (sample file)" href="MultiMaCoCu/v2/sq-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/sq.zip">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/sr_Cyrl.zip">sr_Cyrl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (2.5k links, 84.9k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (0.4k links, 21.0k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (1.9k links, 89.6k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Catalan' (3.8k links, 0.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Greek' (5.2k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (0.5M links, 27.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (2.6k links, 71.2k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Icelandic' (0.4k links, 7.8k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/is-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-me' (98 links, 3.2k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Cyrl-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-me' (0.4k links, 12.0k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Latn-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (1.0k links, 31.7k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mk-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Maltese' (0.7k links, 31.8k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mt-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovenian' (5.3k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sl-sr_Cyrl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (1.2k links, 46.9k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sq-sr_Cyrl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Serbian (sample file)" href="MultiMaCoCu/v2/sr_Cyrl-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Turkish (sample file)" href="MultiMaCoCu/v2/sr_Cyrl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Ukrainian (sample file)" href="MultiMaCoCu/v2/sr_Cyrl-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/sr_Cyrl.zip">sr_Cyrl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/sr_Latn.zip">sr_Latn</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (12.9k links, 0.5M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (1.1k links, 61.8k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (2.7k links, 93.6k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Catalan' (10.1k links, 0.4M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Greek' (17.1k links, 0.6M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (1.6M links, 81.9M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (11.8k links, 0.4M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Icelandic' (0.7k links, 14.4k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/is-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-me' (0.1k links, 5.6k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Cyrl-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-me' (2.9k links, 0.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Latn-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (3.5k links, 0.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mk-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Maltese' (2.2k links, 0.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mt-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovenian' (47.3k links, 1.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sl-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (71.5k links, 3.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sq-sr_Latn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Serbian' (0.3M links, 15.3M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sr_Cyrl-sr_Latn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Turkish (sample file)" href="MultiMaCoCu/v2/sr_Latn-tr_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Ukrainian (sample file)" href="MultiMaCoCu/v2/sr_Latn-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/sr_Latn.zip">sr_Latn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/tr.zip">tr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bulgarian' (12.7k links, 0.4M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bosnian' (49 links, 0.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bosnian' (0.6k links, 17.0k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Catalan' (6.6k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Greek' (10.9k links, 0.3M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (1.6M links, 103.5M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Croatian' (11.8k links, 0.4M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Icelandic' (1.2k links, 33.7k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/is-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-me' (28 links, 0.6k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Cyrl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-me' (0.2k links, 2.7k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Latn-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Macedonian' (2.2k links, 71.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Maltese' (0.8k links, 31.4k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovenian' (15.9k links, 0.5M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Albanian' (1.8k links, 60.9k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sq-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Serbian' (1.4k links, 47.0k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sr_Cyrl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Serbian' (23.5k links, 0.7M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sr_Latn-tr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Turkish-Ukrainian (sample file)" href="MultiMaCoCu/v2/tr-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/tr.zip">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/xml/uk.zip">uk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (14.3k links, 0.5M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bg-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bosnian' (0.3k links, 3.2k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Cyrl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bosnian' (3.8k links, 0.2M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/bs_Latn-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Catalan' (20.6k links, 0.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/ca-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' (45.3k links, 1.8M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/el-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (6.4M links, 283.3M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/en-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (23.1k links, 0.7M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/hr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Icelandic' (1.7k links, 39.7k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/is-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-me' (65 links, 1.5k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Cyrl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-me' (0.7k links, 17.6k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/me_Latn-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Macedonian' (2.4k links, 74.2k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Maltese' (2.2k links, 0.1M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/mt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (12.8k links, 0.5M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Albanian' (7.3k links, 0.3M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sq-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Serbian' (2.7k links, 78.8k tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sr_Cyrl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Serbian' (19.8k links, 0.7M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/sr_Latn-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Turkish' (11.0k links, 0.3M tokens)" href="download.php?f=MultiMaCoCu/v2/xml/tr-uk.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=MultiMaCoCu/v2/raw/uk.zip">uk</a></th></tr>
<tr><th></th>
<th>bg</th>
<th>bs_Cyrl</th>
<th>bs_Latn</th>
<th>ca</th>
<th>el</th>
<th>en</th>
<th>hr</th>
<th>is</th>
<th>me_Cyrl</th>
<th>me_Latn</th>
<th>mk</th>
<th>mt</th>
<th>sl</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sr_Latn</th>
<th>tr</th>
<th>uk</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=MultiMaCoCu/v2/mono/bg.tok.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs_Cyrl plain text' href="download.php?f=MultiMaCoCu/v2/mono/bs_Cyrl.tok.gz">bs_Cyrl</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs_Latn plain text' href="download.php?f=MultiMaCoCu/v2/mono/bs_Latn.tok.gz">bs_Latn</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=MultiMaCoCu/v2/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=MultiMaCoCu/v2/mono/el.tok.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=MultiMaCoCu/v2/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=MultiMaCoCu/v2/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=MultiMaCoCu/v2/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized me_Cyrl plain text' href="download.php?f=MultiMaCoCu/v2/mono/me_Cyrl.tok.gz">me_Cyrl</a>
</th><th><a rel="nofollow" title='monolingual tokenized me_Latn plain text' href="download.php?f=MultiMaCoCu/v2/mono/me_Latn.tok.gz">me_Latn</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=MultiMaCoCu/v2/mono/mk.tok.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=MultiMaCoCu/v2/mono/mt.tok.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=MultiMaCoCu/v2/mono/sl.tok.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=MultiMaCoCu/v2/mono/sq.tok.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr_Cyrl plain text' href="download.php?f=MultiMaCoCu/v2/mono/sr_Cyrl.tok.gz">sr_Cyrl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr_Latn plain text' href="download.php?f=MultiMaCoCu/v2/mono/sr_Latn.tok.gz">sr_Latn</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=MultiMaCoCu/v2/mono/tr.tok.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=MultiMaCoCu/v2/mono/uk.tok.gz">uk</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=MultiMaCoCu/v2/mono/bg.txt.gz">bg</a>
</th><td>1</td> <td>40.2M</td> <td>1.8M</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Bosnian (141 sentence pairs, 1.94k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-bs_Cyrl.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Bulgarian-Bosnian (1,875 sentence pairs, 51.19k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-bs_Latn.tmx.gz">1.9k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Bulgarian-Catalan (6,356 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-ca.tmx.gz">6.4k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Bulgarian-Greek (16,605 sentence pairs, 0.56M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-el.tmx.gz">16.6k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Bulgarian-English (1,760,778 sentence pairs, 72.13M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-en.tmx.gz">1.8M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Bulgarian-Croatian (23,983 sentence pairs, 0.77M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-hr.tmx.gz">24.0k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Bulgarian-Icelandic (2,129 sentence pairs, 58.94k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-is.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-me (81 sentence pairs, 1.74k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-me_Cyrl.tmx.gz">81</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bulgarian-me (869 sentence pairs, 21.53k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-me_Latn.tmx.gz">0.9k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Bulgarian-Macedonian (13,714 sentence pairs, 0.48M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-mk.tmx.gz">13.7k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Bulgarian-Maltese (3,220 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-mt.tmx.gz">3.2k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Bulgarian-Slovenian (24,874 sentence pairs, 0.88M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-sl.tmx.gz">24.9k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Bulgarian-Albanian (6,398 sentence pairs, 0.28M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-sq.tmx.gz">6.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Bulgarian-Serbian (2,537 sentence pairs, 72.91k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-sr_Cyrl.tmx.gz">2.5k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Bulgarian-Serbian (12,857 sentence pairs, 0.40M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-sr_Latn.tmx.gz">12.9k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Bulgarian-Turkish (12,725 sentence pairs, 0.37M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-tr.tmx.gz">12.7k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Bulgarian-Ukrainian (14,302 sentence pairs, 0.44M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bg-uk.tmx.gz">14.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs_Cyrl plain text' href="download.php?f=MultiMaCoCu/v2/mono/bs_Cyrl.txt.gz">bs_Cyrl</a>
</th><td>1</td> <td>2.2M</td> <td>0.1M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Bulgarian (141 sentence pairs, 1.94k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-bs_Cyrl.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Bosnian-Bosnian (24,619 sentence pairs, 1.19M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-bs_Latn.tmx.gz">24.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Catalan (110 sentence pairs, 1.87k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-ca.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Greek (164 sentence pairs, 1.83k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-el.tmx.gz">0.2k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bosnian-English (110,872 sentence pairs, 4.10M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-en.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Croatian (188 sentence pairs, 3.00k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-hr.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Icelandic (26 sentence pairs, 0.24k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-is.tmx.gz">26</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-me (16 sentence pairs, 0.54k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-me_Cyrl.tmx.gz">16</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-me (40 sentence pairs, 0.94k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-me_Latn.tmx.gz">40</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Macedonian (34 sentence pairs, 0.28k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-mk.tmx.gz">34</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Maltese (30 sentence pairs, 0.46k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-mt.tmx.gz">30</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Slovenian (90 sentence pairs, 1.63k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-sl.tmx.gz">90</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bosnian-Albanian (757 sentence pairs, 24.04k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-sq.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Serbian (426 sentence pairs, 16.88k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-sr_Cyrl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Bosnian-Serbian (1,076 sentence pairs, 51.74k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-sr_Latn.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Turkish (50 sentence pairs, 0.44k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-tr.tmx.gz">50</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Ukrainian (264 sentence pairs, 2.63k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Cyrl-uk.tmx.gz">0.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs_Latn plain text' href="download.php?f=MultiMaCoCu/v2/mono/bs_Latn.txt.gz">bs_Latn</a>
</th><td>1</td> <td>9.7M</td> <td>0.4M</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Bosnian-Bulgarian (1,875 sentence pairs, 51.19k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-bs_Latn.txt.zip">1.9k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Bosnian-Bosnian (24,619 sentence pairs, 1.19M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-bs_Latn.txt.zip">24.6k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bosnian-Catalan (1,066 sentence pairs, 21.81k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-ca.tmx.gz">1.1k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Bosnian-Greek (2,882 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-el.tmx.gz">2.9k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Bosnian-English (390,369 sentence pairs, 18.10M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-en.tmx.gz">0.4M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Bosnian-Croatian (4,689 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-hr.tmx.gz">4.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bosnian-Icelandic (361 sentence pairs, 7.02k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-is.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-me (75 sentence pairs, 2.93k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-me_Cyrl.tmx.gz">75</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bosnian-me (922 sentence pairs, 31.25k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-me_Latn.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bosnian-Macedonian (1,043 sentence pairs, 31.44k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-mk.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Bosnian-Maltese (907 sentence pairs, 47.50k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-mt.tmx.gz">0.9k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Bosnian-Slovenian (4,046 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-sl.tmx.gz">4.0k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Bosnian-Albanian (3,539 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-sq.tmx.gz">3.5k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Bosnian-Serbian (1,882 sentence pairs, 76.73k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-sr_Cyrl.tmx.gz">1.9k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Bosnian-Serbian (2,674 sentence pairs, 80.50k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-sr_Latn.tmx.gz">2.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Turkish (639 sentence pairs, 14.77k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-tr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Bosnian-Ukrainian (3,831 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/bs_Latn-uk.tmx.gz">3.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=MultiMaCoCu/v2/mono/ca.txt.gz">ca</a>
</th><td>1</td> <td>82.7M</td> <td>3.1M</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Catalan-Bulgarian (6,356 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-ca.txt.zip">6.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Bosnian (110 sentence pairs, 1.87k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-ca.txt.zip">0.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Catalan-Bosnian (1,066 sentence pairs, 21.81k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-ca.txt.zip">1.1k</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Catalan-Greek (19,990 sentence pairs, 0.69M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-el.tmx.gz">20.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Catalan-English (3,130,520 sentence pairs, 142.86M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-en.tmx.gz">3.1M</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Catalan-Croatian (17,099 sentence pairs, 0.52M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-hr.tmx.gz">17.1k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Catalan-Icelandic (2,919 sentence pairs, 81.67k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-is.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-me (82 sentence pairs, 1.61k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-me_Cyrl.tmx.gz">82</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Catalan-me (1,513 sentence pairs, 45.13k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-me_Latn.tmx.gz">1.5k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Catalan-Macedonian (3,736 sentence pairs, 0.13M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-mk.tmx.gz">3.7k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Catalan-Maltese (1,364 sentence pairs, 37.56k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-mt.tmx.gz">1.4k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Catalan-Slovenian (9,275 sentence pairs, 0.30M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-sl.tmx.gz">9.3k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Catalan-Albanian (4,445 sentence pairs, 0.15M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-sq.tmx.gz">4.4k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Catalan-Serbian (3,815 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-sr_Cyrl.tmx.gz">3.8k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Catalan-Serbian (10,137 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-sr_Latn.tmx.gz">10.1k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Catalan-Turkish (6,557 sentence pairs, 0.19M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-tr.tmx.gz">6.6k</a>
</td><td bgcolor="#fffaf0"><a rel="nofollow" title='Catalan-Ukrainian (20,625 sentence pairs, 0.63M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/ca-uk.tmx.gz">20.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=MultiMaCoCu/v2/mono/el.txt.gz">el</a>
</th><td>1</td> <td>83.5M</td> <td>3.6M</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Greek-Bulgarian (16,605 sentence pairs, 0.56M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-el.txt.zip">16.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Bosnian (164 sentence pairs, 1.83k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-el.txt.zip">0.2k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Greek-Bosnian (2,882 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-el.txt.zip">2.9k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Greek-Catalan (19,990 sentence pairs, 0.69M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-el.txt.zip">20.0k</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-English (3,583,975 sentence pairs, 151.08M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-en.tmx.gz">3.6M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Greek-Croatian (30,481 sentence pairs, 1.06M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-hr.tmx.gz">30.5k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Greek-Icelandic (7,788 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-is.tmx.gz">7.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-me (105 sentence pairs, 2.24k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-me_Cyrl.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Greek-me (1,704 sentence pairs, 48.35k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-me_Latn.tmx.gz">1.7k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Greek-Macedonian (5,407 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-mk.tmx.gz">5.4k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Greek-Maltese (19,467 sentence pairs, 0.84M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-mt.tmx.gz">19.5k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Greek-Slovenian (33,085 sentence pairs, 1.23M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-sl.tmx.gz">33.1k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Greek-Albanian (23,610 sentence pairs, 0.96M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-sq.tmx.gz">23.6k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Greek-Serbian (5,227 sentence pairs, 0.17M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-sr_Cyrl.tmx.gz">5.2k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Greek-Serbian (17,100 sentence pairs, 0.56M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-sr_Latn.tmx.gz">17.1k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Greek-Turkish (10,949 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-tr.tmx.gz">10.9k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Greek-Ukrainian (45,336 sentence pairs, 1.55M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/el-uk.tmx.gz">45.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=MultiMaCoCu/v2/mono/en.txt.gz">en</a>
</th><td>1</td> <td>597.2M</td> <td>24.8M</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Bulgarian (1,760,778 sentence pairs, 72.13M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-en.txt.zip">1.8M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='English-Bosnian (110,872 sentence pairs, 4.10M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-en.txt.zip">0.1M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='English-Bosnian (390,369 sentence pairs, 18.10M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-en.txt.zip">0.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Catalan (3,130,520 sentence pairs, 142.86M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-en.txt.zip">3.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Greek (3,583,975 sentence pairs, 151.08M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-en.txt.zip">3.6M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='English-Croatian (2,266,005 sentence pairs, 99.50M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-hr.tmx.gz">2.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-Icelandic (267,366 sentence pairs, 10.62M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-is.tmx.gz">0.3M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='English-me (9,493 sentence pairs, 0.49M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-me_Cyrl.tmx.gz">9.5k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-me (209,180 sentence pairs, 10.74M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-me_Latn.tmx.gz">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='English-Macedonian (376,748 sentence pairs, 18.33M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-mk.tmx.gz">0.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Maltese (925,327 sentence pairs, 53.86M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-mt.tmx.gz">0.9M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='English-Slovenian (1,875,517 sentence pairs, 84.96M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-sl.tmx.gz">1.9M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='English-Albanian (507,538 sentence pairs, 24.30M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='English-Serbian (479,259 sentence pairs, 24.35M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-sr_Cyrl.tmx.gz">0.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Serbian (1,589,659 sentence pairs, 71.51M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-sr_Latn.tmx.gz">1.6M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='English-Turkish (1,646,740 sentence pairs, 89.23M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-tr.tmx.gz">1.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Ukrainian (6,406,288 sentence pairs, 238.84M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/en-uk.tmx.gz">6.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=MultiMaCoCu/v2/mono/hr.txt.gz">hr</a>
</th><td>1</td> <td>53.1M</td> <td>2.3M</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Croatian-Bulgarian (23,983 sentence pairs, 0.77M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-hr.txt.zip">24.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Bosnian (188 sentence pairs, 3.00k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-hr.txt.zip">0.2k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Bosnian (4,689 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-hr.txt.zip">4.7k</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Croatian-Catalan (17,099 sentence pairs, 0.52M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-hr.txt.zip">17.1k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Croatian-Greek (30,481 sentence pairs, 1.06M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-hr.txt.zip">30.5k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Croatian-English (2,266,005 sentence pairs, 99.50M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-hr.txt.zip">2.3M</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Croatian-Icelandic (4,135 sentence pairs, 0.12M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-is.tmx.gz">4.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-me (81 sentence pairs, 0.90k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-me_Cyrl.tmx.gz">81</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-me (1,457 sentence pairs, 30.44k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-me_Latn.tmx.gz">1.5k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Croatian-Macedonian (9,015 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-mk.tmx.gz">9.0k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Croatian-Maltese (199,660 sentence pairs, 11.00M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Croatian-Slovenian (442,690 sentence pairs, 21.35M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Croatian-Albanian (5,753 sentence pairs, 0.20M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-sq.tmx.gz">5.8k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Croatian-Serbian (2,595 sentence pairs, 62.67k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-sr_Cyrl.tmx.gz">2.6k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Croatian-Serbian (11,849 sentence pairs, 0.31M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-sr_Latn.tmx.gz">11.8k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Croatian-Turkish (11,775 sentence pairs, 0.32M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-tr.tmx.gz">11.8k</a>
</td><td bgcolor="#fffaf0"><a rel="nofollow" title='Croatian-Ukrainian (23,057 sentence pairs, 0.63M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/hr-uk.tmx.gz">23.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=MultiMaCoCu/v2/mono/is.txt.gz">is</a>
</th><td>1</td> <td>5.4M</td> <td>0.3M</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Icelandic-Bulgarian (2,129 sentence pairs, 58.94k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-is.txt.zip">2.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Bosnian (26 sentence pairs, 0.24k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-is.txt.zip">26</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Icelandic-Bosnian (361 sentence pairs, 7.02k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-is.txt.zip">0.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Icelandic-Catalan (2,919 sentence pairs, 81.67k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-is.txt.zip">2.9k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Icelandic-Greek (7,788 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-is.txt.zip">7.8k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Icelandic-English (267,366 sentence pairs, 10.62M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-is.txt.zip">0.3M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Icelandic-Croatian (4,135 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-is.txt.zip">4.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-me (39 sentence pairs, 0.90k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/is-me_Cyrl.tmx.gz">39</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-me (162 sentence pairs, 2.69k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/is-me_Latn.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Icelandic-Macedonian (734 sentence pairs, 20.59k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/is-mk.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Icelandic-Maltese (389 sentence pairs, 11.48k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/is-mt.tmx.gz">0.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Icelandic-Slovenian (2,935 sentence pairs, 97.27k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/is-sl.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Icelandic-Albanian (809 sentence pairs, 21.66k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/is-sq.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Serbian (370 sentence pairs, 6.89k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/is-sr_Cyrl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Icelandic-Serbian (721 sentence pairs, 12.76k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/is-sr_Latn.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Icelandic-Turkish (1,173 sentence pairs, 29.63k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/is-tr.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Icelandic-Ukrainian (1,686 sentence pairs, 33.30k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/is-uk.tmx.gz">1.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized me_Cyrl plain text' href="download.php?f=MultiMaCoCu/v2/mono/me_Cyrl.txt.gz">me_Cyrl</a>
</th><td>1</td> <td>0.3M</td> <td>9.7k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Bulgarian (81 sentence pairs, 1.74k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-me_Cyrl.txt.zip">81</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Bosnian (16 sentence pairs, 0.54k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-me_Cyrl.txt.zip">16</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Bosnian (75 sentence pairs, 2.93k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-me_Cyrl.txt.zip">75</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Catalan (82 sentence pairs, 1.61k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-me_Cyrl.txt.zip">82</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Greek (105 sentence pairs, 2.24k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-me_Cyrl.txt.zip">0.1k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='me-English (9,493 sentence pairs, 0.49M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-me_Cyrl.txt.zip">9.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Croatian (81 sentence pairs, 0.90k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-me_Cyrl.txt.zip">81</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Icelandic (39 sentence pairs, 0.90k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/is-me_Cyrl.txt.zip">39</a>
</td><td></td><td bgcolor="#ffefea"><a rel="nofollow" title='me-me (6,494 sentence pairs, 0.32M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Cyrl-me_Latn.tmx.gz">6.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Macedonian (66 sentence pairs, 1.88k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Cyrl-mk.tmx.gz">66</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Maltese (19 sentence pairs, 0.35k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Cyrl-mt.tmx.gz">19</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Slovenian (69 sentence pairs, 1.72k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Cyrl-sl.tmx.gz">69</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Albanian (82 sentence pairs, 2.18k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Cyrl-sq.tmx.gz">82</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Serbian (99 sentence pairs, 2.73k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Cyrl-sr_Cyrl.tmx.gz">99</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Serbian (145 sentence pairs, 4.79k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Cyrl-sr_Latn.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Turkish (29 sentence pairs, 0.49k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Cyrl-tr.tmx.gz">29</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Ukrainian (66 sentence pairs, 1.26k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Cyrl-uk.tmx.gz">66</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized me_Latn plain text' href="download.php?f=MultiMaCoCu/v2/mono/me_Latn.txt.gz">me_Latn</a>
</th><td>1</td> <td>5.6M</td> <td>0.2M</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='me-Bulgarian (869 sentence pairs, 21.53k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-me_Latn.txt.zip">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Bosnian (40 sentence pairs, 0.94k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-me_Latn.txt.zip">40</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='me-Bosnian (922 sentence pairs, 31.25k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-me_Latn.txt.zip">0.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='me-Catalan (1,513 sentence pairs, 45.13k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-me_Latn.txt.zip">1.5k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='me-Greek (1,704 sentence pairs, 48.35k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-me_Latn.txt.zip">1.7k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='me-English (209,180 sentence pairs, 10.74M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-me_Latn.txt.zip">0.2M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='me-Croatian (1,457 sentence pairs, 30.44k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-me_Latn.txt.zip">1.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Icelandic (162 sentence pairs, 2.69k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/is-me_Latn.txt.zip">0.2k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='me-me (6,494 sentence pairs, 0.32M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Cyrl-me_Latn.txt.zip">6.5k</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='me-Macedonian (1,660 sentence pairs, 67.83k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Latn-mk.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Maltese (84 sentence pairs, 1.55k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Latn-mt.tmx.gz">84</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='me-Slovenian (2,723 sentence pairs, 0.10M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Latn-sl.tmx.gz">2.7k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='me-Albanian (2,899 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Latn-sq.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='me-Serbian (369 sentence pairs, 10.35k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Latn-sr_Cyrl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='me-Serbian (2,922 sentence pairs, 99.33k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Latn-sr_Latn.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='me-Turkish (196 sentence pairs, 2.30k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Latn-tr.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='me-Ukrainian (725 sentence pairs, 14.83k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/me_Latn-uk.tmx.gz">0.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=MultiMaCoCu/v2/mono/mk.txt.gz">mk</a>
</th><td>1</td> <td>10.0M</td> <td>0.4M</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Macedonian-Bulgarian (13,714 sentence pairs, 0.48M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-mk.txt.zip">13.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Bosnian (34 sentence pairs, 0.28k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-mk.txt.zip">34</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Macedonian-Bosnian (1,043 sentence pairs, 31.44k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-mk.txt.zip">1.0k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Macedonian-Catalan (3,736 sentence pairs, 0.13M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-mk.txt.zip">3.7k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Macedonian-Greek (5,407 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-mk.txt.zip">5.4k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Macedonian-English (376,748 sentence pairs, 18.33M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-mk.txt.zip">0.4M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Macedonian-Croatian (9,015 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-mk.txt.zip">9.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Macedonian-Icelandic (734 sentence pairs, 20.59k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/is-mk.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-me (66 sentence pairs, 1.88k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Cyrl-mk.txt.zip">66</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Macedonian-me (1,660 sentence pairs, 67.83k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Latn-mk.txt.zip">1.7k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Macedonian-Maltese (680 sentence pairs, 23.47k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mk-mt.tmx.gz">0.7k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Macedonian-Slovenian (5,771 sentence pairs, 0.20M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mk-sl.tmx.gz">5.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Macedonian-Albanian (3,353 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mk-sq.tmx.gz">3.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Macedonian-Serbian (984 sentence pairs, 27.46k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mk-sr_Cyrl.tmx.gz">1.0k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Macedonian-Serbian (3,508 sentence pairs, 0.11M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mk-sr_Latn.tmx.gz">3.5k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Macedonian-Turkish (2,221 sentence pairs, 62.12k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mk-tr.tmx.gz">2.2k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Macedonian-Ukrainian (2,372 sentence pairs, 62.93k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mk-uk.tmx.gz">2.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=MultiMaCoCu/v2/mono/mt.txt.gz">mt</a>
</th><td>1</td> <td>41.2M</td> <td>0.9M</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Maltese-Bulgarian (3,220 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-mt.txt.zip">3.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Bosnian (30 sentence pairs, 0.46k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-mt.txt.zip">30</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Maltese-Bosnian (907 sentence pairs, 47.50k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-mt.txt.zip">0.9k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Maltese-Catalan (1,364 sentence pairs, 37.56k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-mt.txt.zip">1.4k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Maltese-Greek (19,467 sentence pairs, 0.84M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-mt.txt.zip">19.5k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Maltese-English (925,327 sentence pairs, 53.86M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-mt.txt.zip">0.9M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Maltese-Croatian (199,660 sentence pairs, 11.00M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-mt.txt.zip">0.2M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Maltese-Icelandic (389 sentence pairs, 11.48k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/is-mt.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-me (19 sentence pairs, 0.35k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Cyrl-mt.txt.zip">19</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-me (84 sentence pairs, 1.55k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Latn-mt.txt.zip">84</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Maltese-Macedonian (680 sentence pairs, 23.47k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mk-mt.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Maltese-Slovenian (215,545 sentence pairs, 11.82M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mt-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Maltese-Albanian (4,137 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mt-sq.tmx.gz">4.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Maltese-Serbian (706 sentence pairs, 23.38k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mt-sr_Cyrl.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Maltese-Serbian (2,185 sentence pairs, 72.89k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mt-sr_Latn.tmx.gz">2.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Maltese-Turkish (815 sentence pairs, 22.11k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mt-tr.tmx.gz">0.8k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Maltese-Ukrainian (2,231 sentence pairs, 83.59k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/mt-uk.tmx.gz">2.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=MultiMaCoCu/v2/mono/sl.txt.gz">sl</a>
</th><td>1</td> <td>44.8M</td> <td>1.9M</td><td bgcolor="#fffef0"><a rel="nofollow" title='Slovenian-Bulgarian (24,874 sentence pairs, 0.88M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-sl.txt.zip">24.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Bosnian (90 sentence pairs, 1.63k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-sl.txt.zip">90</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Slovenian-Bosnian (4,046 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-sl.txt.zip">4.0k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Slovenian-Catalan (9,275 sentence pairs, 0.30M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-sl.txt.zip">9.3k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Slovenian-Greek (33,085 sentence pairs, 1.23M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-sl.txt.zip">33.1k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovenian-English (1,875,517 sentence pairs, 84.96M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-sl.txt.zip">1.9M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Slovenian-Croatian (442,690 sentence pairs, 21.35M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Slovenian-Icelandic (2,935 sentence pairs, 97.27k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/is-sl.txt.zip">2.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-me (69 sentence pairs, 1.72k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Cyrl-sl.txt.zip">69</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Slovenian-me (2,723 sentence pairs, 0.10M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Latn-sl.txt.zip">2.7k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Slovenian-Macedonian (5,771 sentence pairs, 0.20M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mk-sl.txt.zip">5.8k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Slovenian-Maltese (215,545 sentence pairs, 11.82M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mt-sl.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Slovenian-Albanian (6,615 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sl-sq.tmx.gz">6.6k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Slovenian-Serbian (5,340 sentence pairs, 0.16M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sl-sr_Cyrl.tmx.gz">5.3k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Slovenian-Serbian (47,314 sentence pairs, 1.52M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sl-sr_Latn.tmx.gz">47.3k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Slovenian-Turkish (15,913 sentence pairs, 0.46M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sl-tr.tmx.gz">15.9k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Slovenian-Ukrainian (12,831 sentence pairs, 0.38M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sl-uk.tmx.gz">12.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=MultiMaCoCu/v2/mono/sq.txt.gz">sq</a>
</th><td>1</td> <td>14.1M</td> <td>0.5M</td><td bgcolor="#ffece8"><a rel="nofollow" title='Albanian-Bulgarian (6,398 sentence pairs, 0.28M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-sq.txt.zip">6.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Albanian-Bosnian (757 sentence pairs, 24.04k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-sq.txt.zip">0.8k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Albanian-Bosnian (3,539 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-sq.txt.zip">3.5k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Albanian-Catalan (4,445 sentence pairs, 0.15M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-sq.txt.zip">4.4k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Albanian-Greek (23,610 sentence pairs, 0.96M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-sq.txt.zip">23.6k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Albanian-English (507,538 sentence pairs, 24.30M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-sq.txt.zip">0.5M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Albanian-Croatian (5,753 sentence pairs, 0.20M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-sq.txt.zip">5.8k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Albanian-Icelandic (809 sentence pairs, 21.66k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/is-sq.txt.zip">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-me (82 sentence pairs, 2.18k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Cyrl-sq.txt.zip">82</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Albanian-me (2,899 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Latn-sq.txt.zip">2.9k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Albanian-Macedonian (3,353 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mk-sq.txt.zip">3.4k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Albanian-Maltese (4,137 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mt-sq.txt.zip">4.1k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Albanian-Slovenian (6,615 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sl-sq.txt.zip">6.6k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Albanian-Serbian (1,249 sentence pairs, 41.12k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sq-sr_Cyrl.tmx.gz">1.2k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Albanian-Serbian (71,452 sentence pairs, 3.37M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sq-sr_Latn.tmx.gz">71.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Albanian-Turkish (1,801 sentence pairs, 52.73k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sq-tr.tmx.gz">1.8k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Albanian-Ukrainian (7,310 sentence pairs, 0.28M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sq-uk.tmx.gz">7.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr_Cyrl plain text' href="download.php?f=MultiMaCoCu/v2/mono/sr_Cyrl.txt.gz">sr_Cyrl</a>
</th><td>1</td> <td>12.8M</td> <td>0.5M</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Bulgarian (2,537 sentence pairs, 72.91k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-sr_Cyrl.txt.zip">2.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Serbian-Bosnian (426 sentence pairs, 16.88k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-sr_Cyrl.txt.zip">0.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Serbian-Bosnian (1,882 sentence pairs, 76.73k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-sr_Cyrl.txt.zip">1.9k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Serbian-Catalan (3,815 sentence pairs, 0.12M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-sr_Cyrl.txt.zip">3.8k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Serbian-Greek (5,227 sentence pairs, 0.17M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-sr_Cyrl.txt.zip">5.2k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Serbian-English (479,259 sentence pairs, 24.35M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-sr_Cyrl.txt.zip">0.5M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Serbian-Croatian (2,595 sentence pairs, 62.67k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-sr_Cyrl.txt.zip">2.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Icelandic (370 sentence pairs, 6.89k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/is-sr_Cyrl.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-me (99 sentence pairs, 2.73k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Cyrl-sr_Cyrl.txt.zip">99</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Serbian-me (369 sentence pairs, 10.35k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Latn-sr_Cyrl.txt.zip">0.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Serbian-Macedonian (984 sentence pairs, 27.46k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mk-sr_Cyrl.txt.zip">1.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Serbian-Maltese (706 sentence pairs, 23.38k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mt-sr_Cyrl.txt.zip">0.7k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Serbian-Slovenian (5,340 sentence pairs, 0.16M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sl-sr_Cyrl.txt.zip">5.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Serbian-Albanian (1,249 sentence pairs, 41.12k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sq-sr_Cyrl.txt.zip">1.2k</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Serbian-Serbian (265,379 sentence pairs, 13.24M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sr_Cyrl-sr_Latn.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Serbian-Turkish (1,385 sentence pairs, 40.52k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sr_Cyrl-tr.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Serbian-Ukrainian (2,655 sentence pairs, 66.20k words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sr_Cyrl-uk.tmx.gz">2.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr_Latn plain text' href="download.php?f=MultiMaCoCu/v2/mono/sr_Latn.txt.gz">sr_Latn</a>
</th><td>1</td> <td>38.2M</td> <td>1.6M</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Serbian-Bulgarian (12,857 sentence pairs, 0.40M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-sr_Latn.txt.zip">12.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Serbian-Bosnian (1,076 sentence pairs, 51.74k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-sr_Latn.txt.zip">1.1k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Serbian-Bosnian (2,674 sentence pairs, 80.50k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-sr_Latn.txt.zip">2.7k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Serbian-Catalan (10,137 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-sr_Latn.txt.zip">10.1k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Serbian-Greek (17,100 sentence pairs, 0.56M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-sr_Latn.txt.zip">17.1k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Serbian-English (1,589,659 sentence pairs, 71.51M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-sr_Latn.txt.zip">1.6M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Serbian-Croatian (11,849 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-sr_Latn.txt.zip">11.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Serbian-Icelandic (721 sentence pairs, 12.76k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/is-sr_Latn.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-me (145 sentence pairs, 4.79k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Cyrl-sr_Latn.txt.zip">0.1k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Serbian-me (2,922 sentence pairs, 99.33k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Latn-sr_Latn.txt.zip">2.9k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Serbian-Macedonian (3,508 sentence pairs, 0.11M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mk-sr_Latn.txt.zip">3.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Maltese (2,185 sentence pairs, 72.89k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mt-sr_Latn.txt.zip">2.2k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Serbian-Slovenian (47,314 sentence pairs, 1.52M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sl-sr_Latn.txt.zip">47.3k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Serbian-Albanian (71,452 sentence pairs, 3.37M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sq-sr_Latn.txt.zip">71.5k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Serbian-Serbian (265,379 sentence pairs, 13.24M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sr_Cyrl-sr_Latn.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#fffaf0"><a rel="nofollow" title='Serbian-Turkish (23,515 sentence pairs, 0.63M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sr_Latn-tr.tmx.gz">23.5k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Serbian-Ukrainian (19,828 sentence pairs, 0.55M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/sr_Latn-uk.tmx.gz">19.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=MultiMaCoCu/v2/mono/tr.txt.gz">tr</a>
</th><td>1</td> <td>46.0M</td> <td>2.6M</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Turkish-Bulgarian (12,725 sentence pairs, 0.37M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-tr.txt.zip">12.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Bosnian (50 sentence pairs, 0.44k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-tr.txt.zip">50</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Turkish-Bosnian (639 sentence pairs, 14.77k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-tr.txt.zip">0.6k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Turkish-Catalan (6,557 sentence pairs, 0.19M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-tr.txt.zip">6.6k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Turkish-Greek (10,949 sentence pairs, 0.31M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-tr.txt.zip">10.9k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Turkish-English (1,646,740 sentence pairs, 89.23M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-tr.txt.zip">1.6M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Turkish-Croatian (11,775 sentence pairs, 0.32M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-tr.txt.zip">11.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Turkish-Icelandic (1,173 sentence pairs, 29.63k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/is-tr.txt.zip">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-me (29 sentence pairs, 0.49k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Cyrl-tr.txt.zip">29</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-me (196 sentence pairs, 2.30k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Latn-tr.txt.zip">0.2k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Turkish-Macedonian (2,221 sentence pairs, 62.12k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mk-tr.txt.zip">2.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Turkish-Maltese (815 sentence pairs, 22.11k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mt-tr.txt.zip">0.8k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Turkish-Slovenian (15,913 sentence pairs, 0.46M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sl-tr.txt.zip">15.9k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Turkish-Albanian (1,801 sentence pairs, 52.73k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sq-tr.txt.zip">1.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Turkish-Serbian (1,385 sentence pairs, 40.52k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sr_Cyrl-tr.txt.zip">1.4k</a>
</td><td bgcolor="#fffaf0"><a rel="nofollow" title='Turkish-Serbian (23,515 sentence pairs, 0.63M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sr_Latn-tr.txt.zip">23.5k</a>
</td><td></td><td bgcolor="#ffede9"><a rel="nofollow" title='Turkish-Ukrainian (11,044 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiMaCoCu/v2/tmx/tr-uk.tmx.gz">11.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=MultiMaCoCu/v2/mono/uk.txt.gz">uk</a>
</th><td>1</td> <td>126.5M</td> <td>6.5M</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Ukrainian-Bulgarian (14,302 sentence pairs, 0.44M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bg-uk.txt.zip">14.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Bosnian (264 sentence pairs, 2.63k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Cyrl-uk.txt.zip">0.3k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Ukrainian-Bosnian (3,831 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/bs_Latn-uk.txt.zip">3.8k</a>
</td><td bgcolor="#fffaf0"><a rel="nofollow" title='Ukrainian-Catalan (20,625 sentence pairs, 0.63M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/ca-uk.txt.zip">20.6k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Ukrainian-Greek (45,336 sentence pairs, 1.55M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/el-uk.txt.zip">45.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-English (6,406,288 sentence pairs, 238.84M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/en-uk.txt.zip">6.4M</a>
</td><td bgcolor="#fffaf0"><a rel="nofollow" title='Ukrainian-Croatian (23,057 sentence pairs, 0.63M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/hr-uk.txt.zip">23.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Ukrainian-Icelandic (1,686 sentence pairs, 33.30k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/is-uk.txt.zip">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-me (66 sentence pairs, 1.26k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Cyrl-uk.txt.zip">66</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-me (725 sentence pairs, 14.83k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/me_Latn-uk.txt.zip">0.7k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Ukrainian-Macedonian (2,372 sentence pairs, 62.93k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mk-uk.txt.zip">2.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Ukrainian-Maltese (2,231 sentence pairs, 83.59k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/mt-uk.txt.zip">2.2k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Ukrainian-Slovenian (12,831 sentence pairs, 0.38M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sl-uk.txt.zip">12.8k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Ukrainian-Albanian (7,310 sentence pairs, 0.28M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sq-uk.txt.zip">7.3k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Ukrainian-Serbian (2,655 sentence pairs, 66.20k words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sr_Cyrl-uk.txt.zip">2.7k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Ukrainian-Serbian (19,828 sentence pairs, 0.55M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/sr_Latn-uk.txt.zip">19.8k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Ukrainian-Turkish (11,044 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiMaCoCu/v2/moses/tr-uk.txt.zip">11.0k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>