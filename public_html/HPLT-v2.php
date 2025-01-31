<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>HPLT</title>
<link rev="made" href="mailto:opus-project">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>HPLT v2</h1>Parallel corpora from Web Crawls collected in the <a href="https://hplt-project.org/">HPLT project</a><p>50 languages, 49 bitexts<br>total number of files: 806<br>total number of tokens: 17.45G<br>total number of sentence fragments: 838.43M<br><p>Please, acknowledge the HPLT project at <a href="https://hplt-project.org/">https://hplt-project.org/</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>The data packaging is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="https://hplt-project.org/">https://hplt-project.org/</a> for more details<h3>Release history:</h3><p><ul><li><a href="HPLT-v1.1.php">HPLT v1.1</a></li> <li><a href="HPLT-v1.php">HPLT v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="HPLT/v2/af_sample.html">af</a></th>
<th><a rel="nofollow" href="HPLT/v2/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="HPLT/v2/az_sample.html">az</a></th>
<th><a rel="nofollow" href="HPLT/v2/be_sample.html">be</a></th>
<th><a rel="nofollow" href="HPLT/v2/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="HPLT/v2/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="HPLT/v2/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="HPLT/v2/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="HPLT/v2/cy_sample.html">cy</a></th>
<th><a rel="nofollow" href="HPLT/v2/en_sample.html">en</a></th>
<th><a rel="nofollow" href="HPLT/v2/et_sample.html">et</a></th>
<th><a rel="nofollow" href="HPLT/v2/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="HPLT/v2/fa_sample.html">fa</a></th>
<th><a rel="nofollow" href="HPLT/v2/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="HPLT/v2/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="HPLT/v2/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="HPLT/v2/gu_sample.html">gu</a></th>
<th><a rel="nofollow" href="HPLT/v2/he_sample.html">he</a></th>
<th><a rel="nofollow" href="HPLT/v2/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="HPLT/v2/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="HPLT/v2/is_sample.html">is</a></th>
<th><a rel="nofollow" href="HPLT/v2/ja_sample.html">ja</a></th>
<th><a rel="nofollow" href="HPLT/v2/kk_sample.html">kk</a></th>
<th><a rel="nofollow" href="HPLT/v2/kn_sample.html">kn</a></th>
<th><a rel="nofollow" href="HPLT/v2/ko_sample.html">ko</a></th>
<th></th>
<th><a rel="nofollow" href="HPLT/v2/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="HPLT/v2/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="HPLT/v2/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="HPLT/v2/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="HPLT/v2/mr_sample.html">mr</a></th>
<th><a rel="nofollow" href="HPLT/v2/ms_sample.html">ms</a></th>
<th><a rel="nofollow" href="HPLT/v2/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="HPLT/v2/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="HPLT/v2/ne_sample.html">ne</a></th>
<th><a rel="nofollow" href="HPLT/v2/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="HPLT/v2/si_sample.html">si</a></th>
<th><a rel="nofollow" href="HPLT/v2/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="HPLT/v2/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="HPLT/v2/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="HPLT/v2/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="HPLT/v2/sw_sample.html">sw</a></th>
<th><a rel="nofollow" href="HPLT/v2/ta_sample.html">ta</a></th>
<th><a rel="nofollow" href="HPLT/v2/te_sample.html">te</a></th>
<th><a rel="nofollow" href="HPLT/v2/th_sample.html">th</a></th>
<th><a rel="nofollow" href="HPLT/v2/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="HPLT/v2/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="HPLT/v2/ur_sample.html">ur</a></th>
<th><a rel="nofollow" href="HPLT/v2/uz_sample.html">uz</a></th>
<th><a rel="nofollow" href="HPLT/v2/vi_sample.html">vi</a></th>
<th><a rel="nofollow" href="HPLT/v2/xh_sample.html">xh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/af.zip">af</a></th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-English (sample file)" href="HPLT/v2/af-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>af</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/af.zip">af</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/ar.zip">ar</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="HPLT/v2/ar-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ar</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/ar.zip">ar</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/az.zip">az</a></th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-English (sample file)" href="HPLT/v2/az-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>az</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/az.zip">az</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/be.zip">be</a></th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-English (sample file)" href="HPLT/v2/be-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/be.zip">be</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/bg.zip">bg</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="HPLT/v2/bg-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/bg.zip">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/bn.zip">bn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-English (sample file)" href="HPLT/v2/bn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/bn.zip">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/bs.zip">bs</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="HPLT/v2/bs-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/bs.zip">bs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/ca.zip">ca</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="HPLT/v2/ca-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/cy.zip">cy</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Welsh-English (sample file)" href="HPLT/v2/cy-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/cy.zip">cy</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Afrikaans' (4 aligned documents, 4.0M links, 185.9M tokens)" href="download.php?f=HPLT/v2/xml/af-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (18 aligned documents, 17.5M links, 987.6M tokens)" href="download.php?f=HPLT/v2/xml/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Azerbaijani' (4 aligned documents, 3.2M links, 135.0M tokens)" href="download.php?f=HPLT/v2/xml/az-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Belarusian' (4 aligned documents, 3.1M links, 128.1M tokens)" href="download.php?f=HPLT/v2/xml/be-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (23 aligned documents, 22.7M links, 1.0G tokens)" href="download.php?f=HPLT/v2/xml/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bengali' (3 aligned documents, 2.3M links, 165.4M tokens)" href="download.php?f=HPLT/v2/xml/bn-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (5 aligned documents, 4.6M links, 227.5M tokens)" href="download.php?f=HPLT/v2/xml/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (14 aligned documents, 13.1M links, 664.5M tokens)" href="download.php?f=HPLT/v2/xml/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Welsh' (4 aligned documents, 3.9M links, 181.3M tokens)" href="download.php?f=HPLT/v2/xml/cy-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Estonian (sample file)" href="HPLT/v2/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="HPLT/v2/en-eu_sample.html">view</a></td><td><a rel="nofollow" title="English-Persian (sample file)" href="HPLT/v2/en-fa_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="HPLT/v2/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-Irish (sample file)" href="HPLT/v2/en-ga_sample.html">view</a></td><td><a rel="nofollow" title="English-Galician (sample file)" href="HPLT/v2/en-gl_sample.html">view</a></td><td><a rel="nofollow" title="English-Gujarati (sample file)" href="HPLT/v2/en-gu_sample.html">view</a></td><td><a rel="nofollow" title="English-Hebrew (sample file)" href="HPLT/v2/en-he_sample.html">view</a></td><td><a rel="nofollow" title="English-Hindi (sample file)" href="HPLT/v2/en-hi_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="HPLT/v2/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="HPLT/v2/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="HPLT/v2/en-ja_sample.html">view</a></td><td><a rel="nofollow" title="English-Kazakh (sample file)" href="HPLT/v2/en-kk_sample.html">view</a></td><td><a rel="nofollow" title="English-Kannada (sample file)" href="HPLT/v2/en-kn_sample.html">view</a></td><td><a rel="nofollow" title="English-Korean (sample file)" href="HPLT/v2/en-ko_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Lithuanian (sample file)" href="HPLT/v2/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="HPLT/v2/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="HPLT/v2/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Malayalam (sample file)" href="HPLT/v2/en-ml_sample.html">view</a></td><td><a rel="nofollow" title="English-Marathi (sample file)" href="HPLT/v2/en-mr_sample.html">view</a></td><td><a rel="nofollow" title="English-Malay (sample file)" href="HPLT/v2/en-ms_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="HPLT/v2/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (sample file)" href="HPLT/v2/en-nb_sample.html">view</a></td><td><a rel="nofollow" title="English-Nepali (sample file)" href="HPLT/v2/en-ne_sample.html">view</a></td><td><a rel="nofollow" title="English-Norwegian Nynorsk (sample file)" href="HPLT/v2/en-nn_sample.html">view</a></td><td><a rel="nofollow" title="English-Sinhala (sample file)" href="HPLT/v2/en-si_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovak (sample file)" href="HPLT/v2/en-sk_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="HPLT/v2/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="HPLT/v2/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="HPLT/v2/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swahili (sample file)" href="HPLT/v2/en-sw_sample.html">view</a></td><td><a rel="nofollow" title="English-Tamil (sample file)" href="HPLT/v2/en-ta_sample.html">view</a></td><td><a rel="nofollow" title="English-Telugu (sample file)" href="HPLT/v2/en-te_sample.html">view</a></td><td><a rel="nofollow" title="English-Thai (sample file)" href="HPLT/v2/en-th_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="HPLT/v2/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="HPLT/v2/en-uk_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="HPLT/v2/en-ur_sample.html">view</a></td><td><a rel="nofollow" title="English-Uzbek (sample file)" href="HPLT/v2/en-uz_sample.html">view</a></td><td><a rel="nofollow" title="English-Vietnamese (sample file)" href="HPLT/v2/en-vi_sample.html">view</a></td><td><a rel="nofollow" title="English-Xhosa (sample file)" href="HPLT/v2/en-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/et.zip">et</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (9 aligned documents, 8.8M links, 366.4M tokens)" href="download.php?f=HPLT/v2/xml/en-et.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>et</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/et.zip">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/eu.zip">eu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-English' (2 aligned documents, 1.5M links, 66.3M tokens)" href="download.php?f=HPLT/v2/xml/en-eu.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>eu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/eu.zip">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/fa.zip">fa</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-English' (4 aligned documents, 3.4M links, 200.5M tokens)" href="download.php?f=HPLT/v2/xml/en-fa.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fa</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/fa.zip">fa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/fi.zip">fi</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (30 aligned documents, 29.1M links, 1.1G tokens)" href="download.php?f=HPLT/v2/xml/en-fi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/fi.zip">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/ga.zip">ga</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-English' (3 aligned documents, 2.7M links, 125.9M tokens)" href="download.php?f=HPLT/v2/xml/en-ga.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ga</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/ga.zip">ga</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/gl.zip">gl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-English' (3 aligned documents, 2.8M links, 133.2M tokens)" href="download.php?f=HPLT/v2/xml/en-gl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/gl.zip">gl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/gu.zip">gu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-English' (0.7M links, 47.9M tokens)" href="download.php?f=HPLT/v2/xml/en-gu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/gu.zip">gu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/he.zip">he</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-English' (9 aligned documents, 8.7M links, 415.7M tokens)" href="download.php?f=HPLT/v2/xml/en-he.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>he</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/he.zip">he</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/hi.zip">hi</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-English' (10 aligned documents, 9.9M links, 671.9M tokens)" href="download.php?f=HPLT/v2/xml/en-hi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th>hi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/hi.zip">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/hr.zip">hr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (15 aligned documents, 14.3M links, 615.8M tokens)" href="download.php?f=HPLT/v2/xml/en-hr.xml.gz">ces</a></td>
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
<td></td><td></td><td></td><td></td><td></td><th>hr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/is.zip">is</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (3 aligned documents, 2.7M links, 112.3M tokens)" href="download.php?f=HPLT/v2/xml/en-is.xml.gz">ces</a></td>
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
<td></td><td></td><td></td><td></td><th>is</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/is.zip">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/ja.zip">ja</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (19 aligned documents, 18.9M links, 882.6M tokens)" href="download.php?f=HPLT/v2/xml/en-ja.xml.gz">ces</a></td>
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
<td></td><td></td><td></td><th>ja</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/ja.zip">ja</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/kk.zip">kk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-English' (2 aligned documents, 1.9M links, 82.3M tokens)" href="download.php?f=HPLT/v2/xml/en-kk.xml.gz">ces</a></td>
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
<td></td><td></td><th>kk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/kk.zip">kk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/kn.zip">kn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-English' (0.7M links, 48.1M tokens)" href="download.php?f=HPLT/v2/xml/en-kn.xml.gz">ces</a></td>
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
<td></td><th>kn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/kn.zip">kn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/ko.zip">ko</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-English' (19 aligned documents, 18.4M links, 784.3M tokens)" href="download.php?f=HPLT/v2/xml/en-ko.xml.gz">ces</a></td>
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
<th>ko</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/ko.zip">ko</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ar</th>
<th>az</th>
<th>be</th>
<th>bg</th>
<th>bn</th>
<th>bs</th>
<th>ca</th>
<th>cy</th>
<th>en</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>ga</th>
<th>gl</th>
<th>gu</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>is</th>
<th>ja</th>
<th>kk</th>
<th>kn</th>
<th>ko</th>
<th></th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>mr</th>
<th>ms</th>
<th>mt</th>
<th>nb</th>
<th>ne</th>
<th>nn</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sw</th>
<th>ta</th>
<th>te</th>
<th>th</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>vi</th>
<th>xh</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/lt.zip">lt</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (13 aligned documents, 12.9M links, 539.3M tokens)" href="download.php?f=HPLT/v2/xml/en-lt.xml.gz">ces</a></td>
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
<th>lt</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/lt.zip">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/lv.zip">lv</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-English' (12 aligned documents, 11.3M links, 477.1M tokens)" href="download.php?f=HPLT/v2/xml/en-lv.xml.gz">ces</a></td>
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
<th>lv</th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/lv.zip">lv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/mk.zip">mk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (4 aligned documents, 4.0M links, 182.7M tokens)" href="download.php?f=HPLT/v2/xml/en-mk.xml.gz">ces</a></td>
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
<th>mk</th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/mk.zip">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/ml.zip">ml</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-English' (0.5M links, 38.1M tokens)" href="download.php?f=HPLT/v2/xml/en-ml.xml.gz">ces</a></td>
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
<th>ml</th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/ml.zip">ml</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/mr.zip">mr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-English' (0.7M links, 47.1M tokens)" href="download.php?f=HPLT/v2/xml/en-mr.xml.gz">ces</a></td>
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
<th>mr</th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/mr.zip">mr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/ms.zip">ms</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-English' (9 aligned documents, 8.4M links, 352.0M tokens)" href="download.php?f=HPLT/v2/xml/en-ms.xml.gz">ces</a></td>
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
<th>ms</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/ms.zip">ms</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/mt.zip">mt</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-English' (2 aligned documents, 1.5M links, 97.6M tokens)" href="download.php?f=HPLT/v2/xml/en-mt.xml.gz">ces</a></td>
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
<th>mt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/mt.zip">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/nb.zip">nb</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-English' (23 aligned documents, 22.9M links, 938.2M tokens)" href="download.php?f=HPLT/v2/xml/en-nb.xml.gz">ces</a></td>
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
<th>nb</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/nb.zip">nb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/ne.zip">ne</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-English' (0.3M links, 17.2M tokens)" href="download.php?f=HPLT/v2/xml/en-ne.xml.gz">ces</a></td>
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
<th>ne</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/ne.zip">ne</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/nn.zip">nn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-English' (0.6M links, 25.9M tokens)" href="download.php?f=HPLT/v2/xml/en-nn.xml.gz">ces</a></td>
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
<th>nn</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/nn.zip">nn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/si.zip">si</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-English' (0.3M links, 13.9M tokens)" href="download.php?f=HPLT/v2/xml/en-si.xml.gz">ces</a></td>
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
<th>si</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/si.zip">si</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/sk.zip">sk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-English' (21 aligned documents, 20.1M links, 821.6M tokens)" href="download.php?f=HPLT/v2/xml/en-sk.xml.gz">ces</a></td>
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
<th>sk</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/sk.zip">sk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/sl.zip">sl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (11 aligned documents, 10.3M links, 465.3M tokens)" href="download.php?f=HPLT/v2/xml/en-sl.xml.gz">ces</a></td>
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
<th>sl</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/sl.zip">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/sq.zip">sq</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (5 aligned documents, 4.2M links, 209.7M tokens)" href="download.php?f=HPLT/v2/xml/en-sq.xml.gz">ces</a></td>
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
<th>sq</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/sq.zip">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/sr.zip">sr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (6 aligned documents, 5.3M links, 224.0M tokens)" href="download.php?f=HPLT/v2/xml/en-sr.xml.gz">ces</a></td>
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
<th>sr</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/sr.zip">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/sw.zip">sw</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-English' (2 aligned documents, 2.0M links, 95.1M tokens)" href="download.php?f=HPLT/v2/xml/en-sw.xml.gz">ces</a></td>
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
<th>sw</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/sw.zip">sw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/ta.zip">ta</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-English' (2 aligned documents, 1.1M links, 84.5M tokens)" href="download.php?f=HPLT/v2/xml/en-ta.xml.gz">ces</a></td>
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
<th>ta</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/ta.zip">ta</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/te.zip">te</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-English' (0.9M links, 51.9M tokens)" href="download.php?f=HPLT/v2/xml/en-te.xml.gz">ces</a></td>
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
<th>te</th>
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
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/te.zip">te</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/th.zip">th</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-English' (5 aligned documents, 4.1M links, 264.9M tokens)" href="download.php?f=HPLT/v2/xml/en-th.xml.gz">ces</a></td>
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
<th>th</th>
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
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/th.zip">th</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/tr.zip">tr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (22 aligned documents, 21.6M links, 1.0G tokens)" href="download.php?f=HPLT/v2/xml/en-tr.xml.gz">ces</a></td>
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
<th>tr</th>
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
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/tr.zip">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/uk.zip">uk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (26 aligned documents, 25.1M links, 1.0G tokens)" href="download.php?f=HPLT/v2/xml/en-uk.xml.gz">ces</a></td>
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
<th>uk</th>
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
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/uk.zip">uk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/ur.zip">ur</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-English' (2 aligned documents, 1.4M links, 92.4M tokens)" href="download.php?f=HPLT/v2/xml/en-ur.xml.gz">ces</a></td>
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
<th>ur</th>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/ur.zip">ur</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/uz.zip">uz</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-English' (2 aligned documents, 1.2M links, 51.3M tokens)" href="download.php?f=HPLT/v2/xml/en-uz.xml.gz">ces</a></td>
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
<th>uz</th>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/uz.zip">uz</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/vi.zip">vi</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-English' (20 aligned documents, 19.2M links, 985.1M tokens)" href="download.php?f=HPLT/v2/xml/en-vi.xml.gz">ces</a></td>
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
<th>vi</th>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/vi.zip">vi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=HPLT/v2/xml/xh.zip">xh</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-English' (0.4M links, 18.7M tokens)" href="download.php?f=HPLT/v2/xml/en-xh.xml.gz">ces</a></td>
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
<th>xh</th>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=HPLT/v2/raw/xh.zip">xh</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ar</th>
<th>az</th>
<th>be</th>
<th>bg</th>
<th>bn</th>
<th>bs</th>
<th>ca</th>
<th>cy</th>
<th>en</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>ga</th>
<th>gl</th>
<th>gu</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>is</th>
<th>ja</th>
<th>kk</th>
<th>kn</th>
<th>ko</th>
<th></th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>mr</th>
<th>ms</th>
<th>mt</th>
<th>nb</th>
<th>ne</th>
<th>nn</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sw</th>
<th>ta</th>
<th>te</th>
<th>th</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>vi</th>
<th>xh</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized af plain text' href="download.php?f=HPLT/v2/mono/af.tok.gz">af</a>
</th><th><a rel="nofollow" title='monolingual tokenized ar plain text' href="download.php?f=HPLT/v2/mono/ar.tok.gz">ar</a>
</th><th><a rel="nofollow" title='monolingual tokenized az plain text' href="download.php?f=HPLT/v2/mono/az.tok.gz">az</a>
</th><th><a rel="nofollow" title='monolingual tokenized be plain text' href="download.php?f=HPLT/v2/mono/be.tok.gz">be</a>
</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=HPLT/v2/mono/bg.tok.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=HPLT/v2/mono/bn.tok.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs plain text' href="download.php?f=HPLT/v2/mono/bs.tok.gz">bs</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=HPLT/v2/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cy plain text' href="download.php?f=HPLT/v2/mono/cy.tok.gz">cy</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=HPLT/v2/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=HPLT/v2/mono/et.tok.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=HPLT/v2/mono/eu.tok.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fa plain text' href="download.php?f=HPLT/v2/mono/fa.tok.gz">fa</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=HPLT/v2/mono/fi.tok.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized ga plain text' href="download.php?f=HPLT/v2/mono/ga.tok.gz">ga</a>
</th><th><a rel="nofollow" title='monolingual tokenized gl plain text' href="download.php?f=HPLT/v2/mono/gl.tok.gz">gl</a>
</th><th><a rel="nofollow" title='monolingual tokenized gu plain text' href="download.php?f=HPLT/v2/mono/gu.tok.gz">gu</a>
</th><th><a rel="nofollow" title='monolingual tokenized he plain text' href="download.php?f=HPLT/v2/mono/he.tok.gz">he</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=HPLT/v2/mono/hi.tok.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=HPLT/v2/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=HPLT/v2/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized ja plain text' href="download.php?f=HPLT/v2/mono/ja.tok.gz">ja</a>
</th><th><a rel="nofollow" title='monolingual tokenized kk plain text' href="download.php?f=HPLT/v2/mono/kk.tok.gz">kk</a>
</th><th><a rel="nofollow" title='monolingual tokenized kn plain text' href="download.php?f=HPLT/v2/mono/kn.tok.gz">kn</a>
</th><th><a rel="nofollow" title='monolingual tokenized ko plain text' href="download.php?f=HPLT/v2/mono/ko.tok.gz">ko</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=HPLT/v2/mono/lt.tok.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=HPLT/v2/mono/lv.tok.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=HPLT/v2/mono/mk.tok.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ml plain text' href="download.php?f=HPLT/v2/mono/ml.tok.gz">ml</a>
</th><th><a rel="nofollow" title='monolingual tokenized mr plain text' href="download.php?f=HPLT/v2/mono/mr.tok.gz">mr</a>
</th><th><a rel="nofollow" title='monolingual tokenized ms plain text' href="download.php?f=HPLT/v2/mono/ms.tok.gz">ms</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=HPLT/v2/mono/mt.tok.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized nb plain text' href="download.php?f=HPLT/v2/mono/nb.tok.gz">nb</a>
</th><th><a rel="nofollow" title='monolingual tokenized ne plain text' href="download.php?f=HPLT/v2/mono/ne.tok.gz">ne</a>
</th><th><a rel="nofollow" title='monolingual tokenized nn plain text' href="download.php?f=HPLT/v2/mono/nn.tok.gz">nn</a>
</th><th><a rel="nofollow" title='monolingual tokenized si plain text' href="download.php?f=HPLT/v2/mono/si.tok.gz">si</a>
</th><th><a rel="nofollow" title='monolingual tokenized sk plain text' href="download.php?f=HPLT/v2/mono/sk.tok.gz">sk</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=HPLT/v2/mono/sl.tok.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=HPLT/v2/mono/sq.tok.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=HPLT/v2/mono/sr.tok.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized sw plain text' href="download.php?f=HPLT/v2/mono/sw.tok.gz">sw</a>
</th><th><a rel="nofollow" title='monolingual tokenized ta plain text' href="download.php?f=HPLT/v2/mono/ta.tok.gz">ta</a>
</th><th><a rel="nofollow" title='monolingual tokenized te plain text' href="download.php?f=HPLT/v2/mono/te.tok.gz">te</a>
</th><th><a rel="nofollow" title='monolingual tokenized th plain text' href="download.php?f=HPLT/v2/mono/th.tok.gz">th</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=HPLT/v2/mono/tr.tok.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=HPLT/v2/mono/uk.tok.gz">uk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ur plain text' href="download.php?f=HPLT/v2/mono/ur.tok.gz">ur</a>
</th><th><a rel="nofollow" title='monolingual tokenized uz plain text' href="download.php?f=HPLT/v2/mono/uz.tok.gz">uz</a>
</th><th><a rel="nofollow" title='monolingual tokenized vi plain text' href="download.php?f=HPLT/v2/mono/vi.tok.gz">vi</a>
</th><th><a rel="nofollow" title='monolingual tokenized xh plain text' href="download.php?f=HPLT/v2/mono/xh.tok.gz">xh</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized af plain text' href="download.php?f=HPLT/v2/mono/af.txt.gz">af</a>
</th><td>4</td> <td>95.7M</td> <td>4.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Afrikaans-English (3,986,956 sentence pairs, 158.96M words) - TMX format' href="download.php?f=HPLT/v2/tmx/af-en.tmx.gz">4.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ar plain text' href="download.php?f=HPLT/v2/mono/ar.txt.gz">ar</a>
</th><td>18</td> <td>481.2M</td> <td>17.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Arabic-English (17,505,360 sentence pairs, 867.16M words) - TMX format' href="download.php?f=HPLT/v2/tmx/ar-en.tmx.gz">17.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized az plain text' href="download.php?f=HPLT/v2/mono/az.txt.gz">az</a>
</th><td>4</td> <td>62.3M</td> <td>3.5M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Azerbaijani-English (3,188,231 sentence pairs, 114.96M words) - TMX format' href="download.php?f=HPLT/v2/tmx/az-en.tmx.gz">3.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized be plain text' href="download.php?f=HPLT/v2/mono/be.txt.gz">be</a>
</th><td>4</td> <td>60.9M</td> <td>3.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Belarusian-English (3,140,951 sentence pairs, 108.72M words) - TMX format' href="download.php?f=HPLT/v2/tmx/be-en.tmx.gz">3.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=HPLT/v2/mono/bg.txt.gz">bg</a>
</th><td>23</td> <td>501.5M</td> <td>24.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-English (22,725,301 sentence pairs, 857.95M words) - TMX format' href="download.php?f=HPLT/v2/tmx/bg-en.tmx.gz">22.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=HPLT/v2/mono/bn.txt.gz">bn</a>
</th><td>3</td> <td>106.0M</td> <td>2.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Bengali-English (2,328,136 sentence pairs, 101.20M words) - TMX format' href="download.php?f=HPLT/v2/tmx/bn-en.tmx.gz">2.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs plain text' href="download.php?f=HPLT/v2/mono/bs.txt.gz">bs</a>
</th><td>5</td> <td>108.8M</td> <td>4.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bosnian-English (4,559,323 sentence pairs, 196.19M words) - TMX format' href="download.php?f=HPLT/v2/tmx/bs-en.tmx.gz">4.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=HPLT/v2/mono/ca.txt.gz">ca</a>
</th><td>14</td> <td>346.7M</td> <td>13.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Catalan-English (13,080,717 sentence pairs, 569.67M words) - TMX format' href="download.php?f=HPLT/v2/tmx/ca-en.tmx.gz">13.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cy plain text' href="download.php?f=HPLT/v2/mono/cy.txt.gz">cy</a>
</th><td>4</td> <td>93.1M</td> <td>4.1M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Welsh-English (3,867,374 sentence pairs, 160.34M words) - TMX format' href="download.php?f=HPLT/v2/tmx/cy-en.tmx.gz">3.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=HPLT/v2/mono/en.txt.gz">en</a>
</th><td>403</td> <td>8.7G</td> <td>428.0M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Afrikaans (3,987,340 sentence pairs, 158.98M words) - Moses format' href="download.php?f=HPLT/v2/moses/af-en.txt.zip">4.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Arabic (17,505,366 sentence pairs, 867.16M words) - Moses format' href="download.php?f=HPLT/v2/moses/ar-en.txt.zip">17.5M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='English-Azerbaijani (3,188,231 sentence pairs, 114.96M words) - Moses format' href="download.php?f=HPLT/v2/moses/az-en.txt.zip">3.2M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='English-Belarusian (3,140,958 sentence pairs, 108.72M words) - Moses format' href="download.php?f=HPLT/v2/moses/be-en.txt.zip">3.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Bulgarian (22,725,326 sentence pairs, 857.95M words) - Moses format' href="download.php?f=HPLT/v2/moses/bg-en.txt.zip">22.7M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='English-Bengali (2,328,136 sentence pairs, 101.20M words) - Moses format' href="download.php?f=HPLT/v2/moses/bn-en.txt.zip">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Bosnian (4,559,328 sentence pairs, 196.19M words) - Moses format' href="download.php?f=HPLT/v2/moses/bs-en.txt.zip">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Catalan (13,080,859 sentence pairs, 569.68M words) - Moses format' href="download.php?f=HPLT/v2/moses/ca-en.txt.zip">13.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Welsh (3,867,402 sentence pairs, 160.34M words) - Moses format' href="download.php?f=HPLT/v2/moses/cy-en.txt.zip">3.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Estonian (8,797,562 sentence pairs, 314.51M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-et.tmx.gz">8.8M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Basque (1,491,873 sentence pairs, 55.28M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-eu.tmx.gz">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Persian (3,448,296 sentence pairs, 176.24M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-fa.tmx.gz">3.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Finnish (29,067,799 sentence pairs, 919.47M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-fi.tmx.gz">29.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='English-Irish (2,697,581 sentence pairs, 111.41M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-ga.tmx.gz">2.7M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='English-Galician (2,783,727 sentence pairs, 115.15M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-gl.tmx.gz">2.8M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='English-Gujarati (716,776 sentence pairs, 32.54M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-gu.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hebrew (8,686,082 sentence pairs, 349.22M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-he.tmx.gz">8.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hindi (9,926,616 sentence pairs, 480.27M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-hi.tmx.gz">9.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Croatian (14,263,879 sentence pairs, 532.12M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-hr.tmx.gz">14.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='English-Icelandic (2,694,539 sentence pairs, 98.54M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-is.tmx.gz">2.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Japanese (18,894,016 sentence pairs, 360.95M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-ja.tmx.gz">18.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-Kazakh (1,943,935 sentence pairs, 69.90M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-kk.tmx.gz">1.9M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='English-Kannada (720,156 sentence pairs, 30.59M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-kn.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Korean (18,339,488 sentence pairs, 651.30M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-ko.tmx.gz">18.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Lithuanian (12,881,345 sentence pairs, 458.92M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-lt.tmx.gz">12.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Latvian (11,294,614 sentence pairs, 405.35M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-lv.tmx.gz">11.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Macedonian (3,991,614 sentence pairs, 158.29M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-mk.tmx.gz">4.0M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='English-Malayalam (547,168 sentence pairs, 22.33M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-ml.tmx.gz">0.5M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='English-Marathi (656,962 sentence pairs, 31.02M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-mr.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Malay (8,432,258 sentence pairs, 302.93M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-ms.tmx.gz">8.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-Maltese (1,529,464 sentence pairs, 70.37M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-mt.tmx.gz">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-BokmÃ¥l, Norwegian (22,912,648 sentence pairs, 816.27M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-nb.tmx.gz">22.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='English-Nepali (317,120 sentence pairs, 14.78M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-ne.tmx.gz">0.3M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='English-Norwegian Nynorsk (563,781 sentence pairs, 22.14M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-nn.tmx.gz">0.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='English-Sinhala (273,430 sentence pairs, 12.13M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-si.tmx.gz">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Slovak (20,056,321 sentence pairs, 711.82M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-sk.tmx.gz">20.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Slovenian (10,336,520 sentence pairs, 401.09M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-sl.tmx.gz">10.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Albanian (4,166,536 sentence pairs, 182.55M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-sq.tmx.gz">4.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Serbian (5,291,671 sentence pairs, 192.78M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-sr.tmx.gz">5.3M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='English-Swahili (1,985,898 sentence pairs, 82.49M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-sw.tmx.gz">2.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='English-Tamil (1,111,471 sentence pairs, 46.55M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-ta.tmx.gz">1.1M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='English-Telugu (902,962 sentence pairs, 37.74M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-te.tmx.gz">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Thai (4,088,295 sentence pairs, 134.63M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-th.tmx.gz">4.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Turkish (21,616,641 sentence pairs, 858.45M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-tr.tmx.gz">21.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Ukrainian (25,124,856 sentence pairs, 872.50M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-uk.tmx.gz">25.1M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='English-Urdu (1,399,893 sentence pairs, 82.36M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-ur.tmx.gz">1.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='English-Uzbek (1,159,778 sentence pairs, 43.93M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-uz.tmx.gz">1.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Vietnamese (19,231,736 sentence pairs, 864.65M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-vi.tmx.gz">19.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='English-Xhosa (405,605 sentence pairs, 14.92M words) - TMX format' href="download.php?f=HPLT/v2/tmx/en-xh.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=HPLT/v2/mono/et.txt.gz">et</a>
</th><td>9</td> <td>160.0M</td> <td>9.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Estonian-English (8,797,574 sentence pairs, 314.51M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-et.txt.zip">8.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=HPLT/v2/mono/eu.txt.gz">eu</a>
</th><td>2</td> <td>30.5M</td> <td>1.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Basque-English (1,491,873 sentence pairs, 55.28M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-eu.txt.zip">1.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fa plain text' href="download.php?f=HPLT/v2/mono/fa.txt.gz">fa</a>
</th><td>4</td> <td>107.7M</td> <td>3.5M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Persian-English (3,448,296 sentence pairs, 176.24M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-fa.txt.zip">3.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=HPLT/v2/mono/fi.txt.gz">fi</a>
</th><td>30</td> <td>460.4M</td> <td>31.5M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-English (29,067,875 sentence pairs, 919.47M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-fi.txt.zip">29.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ga plain text' href="download.php?f=HPLT/v2/mono/ga.txt.gz">ga</a>
</th><td>3</td> <td>66.3M</td> <td>2.8M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Irish-English (2,697,582 sentence pairs, 111.41M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-ga.txt.zip">2.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gl plain text' href="download.php?f=HPLT/v2/mono/gl.txt.gz">gl</a>
</th><td>3</td> <td>67.6M</td> <td>3.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Galician-English (2,783,727 sentence pairs, 115.15M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-gl.txt.zip">2.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gu plain text' href="download.php?f=HPLT/v2/mono/gu.txt.gz">gu</a>
</th><td>1</td> <td>29.5M</td> <td>0.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Gujarati-English (716,777 sentence pairs, 32.54M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-gu.txt.zip">0.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized he plain text' href="download.php?f=HPLT/v2/mono/he.txt.gz">he</a>
</th><td>9</td> <td>198.1M</td> <td>8.8M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hebrew-English (8,686,089 sentence pairs, 349.22M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-he.txt.zip">8.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=HPLT/v2/mono/hi.txt.gz">hi</a>
</th><td>10</td> <td>422.8M</td> <td>10.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hindi-English (9,926,620 sentence pairs, 480.27M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-hi.txt.zip">9.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=HPLT/v2/mono/hr.txt.gz">hr</a>
</th><td>15</td> <td>292.8M</td> <td>15.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-English (14,263,908 sentence pairs, 532.12M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-hr.txt.zip">14.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=HPLT/v2/mono/is.txt.gz">is</a>
</th><td>3</td> <td>53.9M</td> <td>2.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Icelandic-English (2,694,541 sentence pairs, 98.54M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-is.txt.zip">2.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ja plain text' href="download.php?f=HPLT/v2/mono/ja.txt.gz">ja</a>
</th><td>19</td> <td>550.9M</td> <td>19.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Japanese-English (18,894,019 sentence pairs, 360.95M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-ja.txt.zip">18.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kk plain text' href="download.php?f=HPLT/v2/mono/kk.txt.gz">kk</a>
</th><td>2</td> <td>36.9M</td> <td>2.1M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Kazakh-English (1,943,935 sentence pairs, 69.90M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-kk.txt.zip">1.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kn plain text' href="download.php?f=HPLT/v2/mono/kn.txt.gz">kn</a>
</th><td>1</td> <td>28.7M</td> <td>0.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d3ffca"><a rel="nofollow" title='Kannada-English (720,157 sentence pairs, 30.59M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-kn.txt.zip">0.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ko plain text' href="download.php?f=HPLT/v2/mono/ko.txt.gz">ko</a>
</th><td>19</td> <td>368.4M</td> <td>19.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Korean-English (18,393,859 sentence pairs, 652.27M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-ko.txt.zip">18.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=HPLT/v2/mono/lt.txt.gz">lt</a>
</th><td>13</td> <td>248.5M</td> <td>13.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-English (12,881,354 sentence pairs, 458.92M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-lt.txt.zip">12.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=HPLT/v2/mono/lv.txt.gz">lv</a>
</th><td>12</td> <td>222.4M</td> <td>12.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Latvian-English (11,294,618 sentence pairs, 405.35M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-lv.txt.zip">11.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=HPLT/v2/mono/mk.txt.gz">mk</a>
</th><td>4</td> <td>91.2M</td> <td>4.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Macedonian-English (3,991,617 sentence pairs, 158.29M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-mk.txt.zip">4.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ml plain text' href="download.php?f=HPLT/v2/mono/ml.txt.gz">ml</a>
</th><td>1</td> <td>23.3M</td> <td>0.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Malayalam-English (547,168 sentence pairs, 22.33M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-ml.txt.zip">0.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mr plain text' href="download.php?f=HPLT/v2/mono/mr.txt.gz">mr</a>
</th><td>1</td> <td>28.8M</td> <td>0.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Marathi-English (656,962 sentence pairs, 31.02M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-mr.txt.zip">0.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ms plain text' href="download.php?f=HPLT/v2/mono/ms.txt.gz">ms</a>
</th><td>9</td> <td>173.6M</td> <td>8.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Malay-English (8,432,285 sentence pairs, 302.93M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-ms.txt.zip">8.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=HPLT/v2/mono/mt.txt.gz">mt</a>
</th><td>2</td> <td>53.9M</td> <td>1.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Maltese-English (1,529,471 sentence pairs, 70.37M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-mt.txt.zip">1.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nb plain text' href="download.php?f=HPLT/v2/mono/nb.txt.gz">nb</a>
</th><td>23</td> <td>458.4M</td> <td>24.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-English (22,912,722 sentence pairs, 816.28M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-nb.txt.zip">22.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ne plain text' href="download.php?f=HPLT/v2/mono/ne.txt.gz">ne</a>
</th><td>1</td> <td>8.4M</td> <td>0.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Nepali-English (317,120 sentence pairs, 14.78M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-ne.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nn plain text' href="download.php?f=HPLT/v2/mono/nn.txt.gz">nn</a>
</th><td>1</td> <td>12.4M</td> <td>0.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Norwegian Nynorsk-English (563,791 sentence pairs, 22.14M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-nn.txt.zip">0.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized si plain text' href="download.php?f=HPLT/v2/mono/si.txt.gz">si</a>
</th><td>1</td> <td>6.8M</td> <td>0.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Sinhala-English (273,430 sentence pairs, 12.13M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-si.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sk plain text' href="download.php?f=HPLT/v2/mono/sk.txt.gz">sk</a>
</th><td>21</td> <td>388.3M</td> <td>21.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-English (20,056,339 sentence pairs, 711.82M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-sk.txt.zip">20.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=HPLT/v2/mono/sl.txt.gz">sl</a>
</th><td>11</td> <td>222.3M</td> <td>11.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-English (10,336,528 sentence pairs, 401.09M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-sl.txt.zip">10.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=HPLT/v2/mono/sq.txt.gz">sq</a>
</th><td>5</td> <td>108.2M</td> <td>4.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Albanian-English (4,166,536 sentence pairs, 182.55M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-sq.txt.zip">4.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=HPLT/v2/mono/sr.txt.gz">sr</a>
</th><td>6</td> <td>106.5M</td> <td>5.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Serbian-English (5,291,686 sentence pairs, 192.78M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-sr.txt.zip">5.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sw plain text' href="download.php?f=HPLT/v2/mono/sw.txt.gz">sw</a>
</th><td>2</td> <td>46.3M</td> <td>2.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swahili-English (1,985,899 sentence pairs, 82.49M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-sw.txt.zip">2.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ta plain text' href="download.php?f=HPLT/v2/mono/ta.txt.gz">ta</a>
</th><td>2</td> <td>54.6M</td> <td>1.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ceffce"><a rel="nofollow" title='Tamil-English (1,111,471 sentence pairs, 46.55M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-ta.txt.zip">1.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized te plain text' href="download.php?f=HPLT/v2/mono/te.txt.gz">te</a>
</th><td>1</td> <td>28.4M</td> <td>0.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d1ffce"><a rel="nofollow" title='Telugu-English (902,962 sentence pairs, 37.74M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-te.txt.zip">0.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized th plain text' href="download.php?f=HPLT/v2/mono/th.txt.gz">th</a>
</th><td>5</td> <td>148.5M</td> <td>4.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Thai-English (4,088,354 sentence pairs, 134.63M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-th.txt.zip">4.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=HPLT/v2/mono/tr.txt.gz">tr</a>
</th><td>22</td> <td>485.1M</td> <td>31.8M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-English (21,616,652 sentence pairs, 858.45M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-tr.txt.zip">21.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=HPLT/v2/mono/uk.txt.gz">uk</a>
</th><td>26</td> <td>490.5M</td> <td>27.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-English (25,125,019 sentence pairs, 872.50M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-uk.txt.zip">25.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ur plain text' href="download.php?f=HPLT/v2/mono/ur.txt.gz">ur</a>
</th><td>2</td> <td>52.4M</td> <td>1.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Urdu-English (1,399,893 sentence pairs, 82.36M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-ur.txt.zip">1.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uz plain text' href="download.php?f=HPLT/v2/mono/uz.txt.gz">uz</a>
</th><td>2</td> <td>23.6M</td> <td>1.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Uzbek-English (1,159,869 sentence pairs, 43.93M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-uz.txt.zip">1.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized vi plain text' href="download.php?f=HPLT/v2/mono/vi.txt.gz">vi</a>
</th><td>20</td> <td>564.9M</td> <td>20.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Vietnamese-English (19,231,770 sentence pairs, 864.65M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-vi.txt.zip">19.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized xh plain text' href="download.php?f=HPLT/v2/mono/xh.txt.gz">xh</a>
</th><td>1</td> <td>8.1M</td> <td>0.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Xhosa-English (405,605 sentence pairs, 14.92M words) - Moses format' href="download.php?f=HPLT/v2/moses/en-xh.txt.zip">0.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>