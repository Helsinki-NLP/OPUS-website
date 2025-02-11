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
<div class="header"><?php include("header.php"); ?></div><h1>MultiHPLT v2</h1>Parallel corpora from Web Crawls collected in the <a href="https://hplt-project.org">HPLT project</a> and further processed for making it a multi-parallel corpus by pivoting via English. Here we provide the additional language pairs that came out of pivoting. The bitexts for English are the same as the ones in the <a href="http://opus.nlpl.eu/HPLT-v2.php">original HPLT release</a>.<p>51 languages, 1,275 bitexts<br>total number of files: 51<br>total number of tokens: 12.01G<br>total number of sentence fragments: 560.91M<br><p>Please, acknowledge the HPLT project at <a href="https://hplt-project.org">https://hplt-project.org</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>The data packaging is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="https://hplt-project.org">https://hplt-project.org</a> for more details<h3>Release history:</h3><p><ul><li><a href="MultiHPLT-v1.1.php">MultiHPLT v1.1</a></li> <li><a href="MultiHPLT-v1.php">MultiHPLT v1</a></li> <li><a href="MultiHPLT-v2.php">MultiHPLT v2</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MultiHPLT/v2/af_sample.html">af</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/az_sample.html">az</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/be_sample.html">be</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/cy_sample.html">cy</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/en_sample.html">en</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/eo_sample.html">eo</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/et_sample.html">et</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/fa_sample.html">fa</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/gl_sample.html">gl</a></th>
<th></th>
<th><a rel="nofollow" href="MultiHPLT/v2/gu_sample.html">gu</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/he_sample.html">he</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/is_sample.html">is</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/ja_sample.html">ja</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/kk_sample.html">kk</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/kn_sample.html">kn</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/ko_sample.html">ko</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/mr_sample.html">mr</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/ms_sample.html">ms</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/ne_sample.html">ne</a></th>
<th></th>
<th><a rel="nofollow" href="MultiHPLT/v2/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/si_sample.html">si</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/sw_sample.html">sw</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/ta_sample.html">ta</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/te_sample.html">te</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/th_sample.html">th</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/ur_sample.html">ur</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/uz_sample.html">uz</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/vi_sample.html">vi</a></th>
<th><a rel="nofollow" href="MultiHPLT/v2/xh_sample.html">xh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/af.zip">af</a></th>
<th></th>
<td><a rel="nofollow" title="Afrikaans-Arabic (sample file)" href="MultiHPLT/v2/af-ar_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Azerbaijani (sample file)" href="MultiHPLT/v2/af-az_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Belarusian (sample file)" href="MultiHPLT/v2/af-be_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Bulgarian (sample file)" href="MultiHPLT/v2/af-bg_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Bengali (sample file)" href="MultiHPLT/v2/af-bn_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Bosnian (sample file)" href="MultiHPLT/v2/af-bs_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Catalan (sample file)" href="MultiHPLT/v2/af-ca_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Welsh (sample file)" href="MultiHPLT/v2/af-cy_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-English (sample file)" href="MultiHPLT/v2/af-en_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Esperanto (sample file)" href="MultiHPLT/v2/af-eo_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Estonian (sample file)" href="MultiHPLT/v2/af-et_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Basque (sample file)" href="MultiHPLT/v2/af-eu_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Persian (sample file)" href="MultiHPLT/v2/af-fa_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Finnish (sample file)" href="MultiHPLT/v2/af-fi_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Irish (sample file)" href="MultiHPLT/v2/af-ga_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Galician (sample file)" href="MultiHPLT/v2/af-gl_sample.html">view</a></td><th>af</th>
<td><a rel="nofollow" title="Afrikaans-Gujarati (sample file)" href="MultiHPLT/v2/af-gu_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Hebrew (sample file)" href="MultiHPLT/v2/af-he_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Hindi (sample file)" href="MultiHPLT/v2/af-hi_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Croatian (sample file)" href="MultiHPLT/v2/af-hr_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Icelandic (sample file)" href="MultiHPLT/v2/af-is_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Japanese (sample file)" href="MultiHPLT/v2/af-ja_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Kazakh (sample file)" href="MultiHPLT/v2/af-kk_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Kannada (sample file)" href="MultiHPLT/v2/af-kn_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Korean (sample file)" href="MultiHPLT/v2/af-ko_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Lithuanian (sample file)" href="MultiHPLT/v2/af-lt_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Latvian (sample file)" href="MultiHPLT/v2/af-lv_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Macedonian (sample file)" href="MultiHPLT/v2/af-mk_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Malayalam (sample file)" href="MultiHPLT/v2/af-ml_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Marathi (sample file)" href="MultiHPLT/v2/af-mr_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Malay (sample file)" href="MultiHPLT/v2/af-ms_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Maltese (sample file)" href="MultiHPLT/v2/af-mt_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/af-nb_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Nepali (sample file)" href="MultiHPLT/v2/af-ne_sample.html">view</a></td><th>af</th>
<td><a rel="nofollow" title="Afrikaans-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/af-nn_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Sinhala (sample file)" href="MultiHPLT/v2/af-si_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Slovak (sample file)" href="MultiHPLT/v2/af-sk_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Slovenian (sample file)" href="MultiHPLT/v2/af-sl_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Albanian (sample file)" href="MultiHPLT/v2/af-sq_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Serbian (sample file)" href="MultiHPLT/v2/af-sr_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Swahili (sample file)" href="MultiHPLT/v2/af-sw_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Tamil (sample file)" href="MultiHPLT/v2/af-ta_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Telugu (sample file)" href="MultiHPLT/v2/af-te_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Thai (sample file)" href="MultiHPLT/v2/af-th_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Turkish (sample file)" href="MultiHPLT/v2/af-tr_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Ukrainian (sample file)" href="MultiHPLT/v2/af-uk_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Urdu (sample file)" href="MultiHPLT/v2/af-ur_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Uzbek (sample file)" href="MultiHPLT/v2/af-uz_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Vietnamese (sample file)" href="MultiHPLT/v2/af-vi_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Xhosa (sample file)" href="MultiHPLT/v2/af-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/af.zip">af</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/ar.zip">ar</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Arabic-Afrikaans' (0.3M links, 10.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-ar.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Arabic-Azerbaijani (sample file)" href="MultiHPLT/v2/ar-az_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Belarusian (sample file)" href="MultiHPLT/v2/ar-be_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Bulgarian (sample file)" href="MultiHPLT/v2/ar-bg_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Bengali (sample file)" href="MultiHPLT/v2/ar-bn_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Bosnian (sample file)" href="MultiHPLT/v2/ar-bs_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Catalan (sample file)" href="MultiHPLT/v2/ar-ca_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Welsh (sample file)" href="MultiHPLT/v2/ar-cy_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="MultiHPLT/v2/ar-en_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Esperanto (sample file)" href="MultiHPLT/v2/ar-eo_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Estonian (sample file)" href="MultiHPLT/v2/ar-et_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Basque (sample file)" href="MultiHPLT/v2/ar-eu_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Persian (sample file)" href="MultiHPLT/v2/ar-fa_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Finnish (sample file)" href="MultiHPLT/v2/ar-fi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Irish (sample file)" href="MultiHPLT/v2/ar-ga_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Galician (sample file)" href="MultiHPLT/v2/ar-gl_sample.html">view</a></td><th>ar</th>
<td><a rel="nofollow" title="Arabic-Gujarati (sample file)" href="MultiHPLT/v2/ar-gu_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Hebrew (sample file)" href="MultiHPLT/v2/ar-he_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Hindi (sample file)" href="MultiHPLT/v2/ar-hi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Croatian (sample file)" href="MultiHPLT/v2/ar-hr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Icelandic (sample file)" href="MultiHPLT/v2/ar-is_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Japanese (sample file)" href="MultiHPLT/v2/ar-ja_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Kazakh (sample file)" href="MultiHPLT/v2/ar-kk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Kannada (sample file)" href="MultiHPLT/v2/ar-kn_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Korean (sample file)" href="MultiHPLT/v2/ar-ko_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Lithuanian (sample file)" href="MultiHPLT/v2/ar-lt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Latvian (sample file)" href="MultiHPLT/v2/ar-lv_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Macedonian (sample file)" href="MultiHPLT/v2/ar-mk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Malayalam (sample file)" href="MultiHPLT/v2/ar-ml_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Marathi (sample file)" href="MultiHPLT/v2/ar-mr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Malay (sample file)" href="MultiHPLT/v2/ar-ms_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Maltese (sample file)" href="MultiHPLT/v2/ar-mt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/ar-nb_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Nepali (sample file)" href="MultiHPLT/v2/ar-ne_sample.html">view</a></td><th>ar</th>
<td><a rel="nofollow" title="Arabic-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/ar-nn_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Sinhala (sample file)" href="MultiHPLT/v2/ar-si_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Slovak (sample file)" href="MultiHPLT/v2/ar-sk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Slovenian (sample file)" href="MultiHPLT/v2/ar-sl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Albanian (sample file)" href="MultiHPLT/v2/ar-sq_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Serbian (sample file)" href="MultiHPLT/v2/ar-sr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Swahili (sample file)" href="MultiHPLT/v2/ar-sw_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Tamil (sample file)" href="MultiHPLT/v2/ar-ta_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Telugu (sample file)" href="MultiHPLT/v2/ar-te_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Thai (sample file)" href="MultiHPLT/v2/ar-th_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Turkish (sample file)" href="MultiHPLT/v2/ar-tr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Ukrainian (sample file)" href="MultiHPLT/v2/ar-uk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Urdu (sample file)" href="MultiHPLT/v2/ar-ur_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Uzbek (sample file)" href="MultiHPLT/v2/ar-uz_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Vietnamese (sample file)" href="MultiHPLT/v2/ar-vi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Xhosa (sample file)" href="MultiHPLT/v2/ar-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/ar.zip">ar</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/az.zip">az</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Azerbaijani-Afrikaans' (0.4M links, 13.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-az.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Azerbaijani-Arabic' (0.2M links, 7.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-az.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Azerbaijani-Belarusian (sample file)" href="MultiHPLT/v2/az-be_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Bulgarian (sample file)" href="MultiHPLT/v2/az-bg_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Bengali (sample file)" href="MultiHPLT/v2/az-bn_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Bosnian (sample file)" href="MultiHPLT/v2/az-bs_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Catalan (sample file)" href="MultiHPLT/v2/az-ca_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Welsh (sample file)" href="MultiHPLT/v2/az-cy_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-English (sample file)" href="MultiHPLT/v2/az-en_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Esperanto (sample file)" href="MultiHPLT/v2/az-eo_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Estonian (sample file)" href="MultiHPLT/v2/az-et_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Basque (sample file)" href="MultiHPLT/v2/az-eu_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Persian (sample file)" href="MultiHPLT/v2/az-fa_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Finnish (sample file)" href="MultiHPLT/v2/az-fi_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Irish (sample file)" href="MultiHPLT/v2/az-ga_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Galician (sample file)" href="MultiHPLT/v2/az-gl_sample.html">view</a></td><th>az</th>
<td><a rel="nofollow" title="Azerbaijani-Gujarati (sample file)" href="MultiHPLT/v2/az-gu_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Hebrew (sample file)" href="MultiHPLT/v2/az-he_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Hindi (sample file)" href="MultiHPLT/v2/az-hi_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Croatian (sample file)" href="MultiHPLT/v2/az-hr_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Icelandic (sample file)" href="MultiHPLT/v2/az-is_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Japanese (sample file)" href="MultiHPLT/v2/az-ja_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Kazakh (sample file)" href="MultiHPLT/v2/az-kk_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Kannada (sample file)" href="MultiHPLT/v2/az-kn_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Korean (sample file)" href="MultiHPLT/v2/az-ko_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Lithuanian (sample file)" href="MultiHPLT/v2/az-lt_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Latvian (sample file)" href="MultiHPLT/v2/az-lv_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Macedonian (sample file)" href="MultiHPLT/v2/az-mk_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Malayalam (sample file)" href="MultiHPLT/v2/az-ml_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Marathi (sample file)" href="MultiHPLT/v2/az-mr_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Malay (sample file)" href="MultiHPLT/v2/az-ms_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Maltese (sample file)" href="MultiHPLT/v2/az-mt_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/az-nb_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Nepali (sample file)" href="MultiHPLT/v2/az-ne_sample.html">view</a></td><th>az</th>
<td><a rel="nofollow" title="Azerbaijani-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/az-nn_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Sinhala (sample file)" href="MultiHPLT/v2/az-si_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Slovak (sample file)" href="MultiHPLT/v2/az-sk_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Slovenian (sample file)" href="MultiHPLT/v2/az-sl_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Albanian (sample file)" href="MultiHPLT/v2/az-sq_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Serbian (sample file)" href="MultiHPLT/v2/az-sr_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Swahili (sample file)" href="MultiHPLT/v2/az-sw_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Tamil (sample file)" href="MultiHPLT/v2/az-ta_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Telugu (sample file)" href="MultiHPLT/v2/az-te_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Thai (sample file)" href="MultiHPLT/v2/az-th_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Turkish (sample file)" href="MultiHPLT/v2/az-tr_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Ukrainian (sample file)" href="MultiHPLT/v2/az-uk_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Urdu (sample file)" href="MultiHPLT/v2/az-ur_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Uzbek (sample file)" href="MultiHPLT/v2/az-uz_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Vietnamese (sample file)" href="MultiHPLT/v2/az-vi_sample.html">view</a></td><td><a rel="nofollow" title="Azerbaijani-Xhosa (sample file)" href="MultiHPLT/v2/az-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/az.zip">az</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/be.zip">be</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Belarusian-Afrikaans' (0.5M links, 21.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-be.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Belarusian-Arabic' (0.2M links, 6.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-be.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Belarusian-Azerbaijani' (0.3M links, 9.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-be.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Belarusian-Bulgarian (sample file)" href="MultiHPLT/v2/be-bg_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Bengali (sample file)" href="MultiHPLT/v2/be-bn_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Bosnian (sample file)" href="MultiHPLT/v2/be-bs_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Catalan (sample file)" href="MultiHPLT/v2/be-ca_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Welsh (sample file)" href="MultiHPLT/v2/be-cy_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-English (sample file)" href="MultiHPLT/v2/be-en_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Esperanto (sample file)" href="MultiHPLT/v2/be-eo_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Estonian (sample file)" href="MultiHPLT/v2/be-et_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Basque (sample file)" href="MultiHPLT/v2/be-eu_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Persian (sample file)" href="MultiHPLT/v2/be-fa_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Finnish (sample file)" href="MultiHPLT/v2/be-fi_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Irish (sample file)" href="MultiHPLT/v2/be-ga_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Galician (sample file)" href="MultiHPLT/v2/be-gl_sample.html">view</a></td><th>be</th>
<td><a rel="nofollow" title="Belarusian-Gujarati (sample file)" href="MultiHPLT/v2/be-gu_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Hebrew (sample file)" href="MultiHPLT/v2/be-he_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Hindi (sample file)" href="MultiHPLT/v2/be-hi_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Croatian (sample file)" href="MultiHPLT/v2/be-hr_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Icelandic (sample file)" href="MultiHPLT/v2/be-is_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Japanese (sample file)" href="MultiHPLT/v2/be-ja_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Kazakh (sample file)" href="MultiHPLT/v2/be-kk_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Kannada (sample file)" href="MultiHPLT/v2/be-kn_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Korean (sample file)" href="MultiHPLT/v2/be-ko_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Lithuanian (sample file)" href="MultiHPLT/v2/be-lt_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Latvian (sample file)" href="MultiHPLT/v2/be-lv_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Macedonian (sample file)" href="MultiHPLT/v2/be-mk_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Malayalam (sample file)" href="MultiHPLT/v2/be-ml_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Marathi (sample file)" href="MultiHPLT/v2/be-mr_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Malay (sample file)" href="MultiHPLT/v2/be-ms_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Maltese (sample file)" href="MultiHPLT/v2/be-mt_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/be-nb_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Nepali (sample file)" href="MultiHPLT/v2/be-ne_sample.html">view</a></td><th>be</th>
<td><a rel="nofollow" title="Belarusian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/be-nn_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Sinhala (sample file)" href="MultiHPLT/v2/be-si_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Slovak (sample file)" href="MultiHPLT/v2/be-sk_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Slovenian (sample file)" href="MultiHPLT/v2/be-sl_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Albanian (sample file)" href="MultiHPLT/v2/be-sq_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Serbian (sample file)" href="MultiHPLT/v2/be-sr_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Swahili (sample file)" href="MultiHPLT/v2/be-sw_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Tamil (sample file)" href="MultiHPLT/v2/be-ta_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Telugu (sample file)" href="MultiHPLT/v2/be-te_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Thai (sample file)" href="MultiHPLT/v2/be-th_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Turkish (sample file)" href="MultiHPLT/v2/be-tr_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Ukrainian (sample file)" href="MultiHPLT/v2/be-uk_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Urdu (sample file)" href="MultiHPLT/v2/be-ur_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Uzbek (sample file)" href="MultiHPLT/v2/be-uz_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Vietnamese (sample file)" href="MultiHPLT/v2/be-vi_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Xhosa (sample file)" href="MultiHPLT/v2/be-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/be.zip">be</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/bg.zip">bg</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bulgarian-Afrikaans' (0.9M links, 36.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-bg.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bulgarian-Arabic' (1.0M links, 34.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-bg.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bulgarian-Azerbaijani' (0.6M links, 20.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-bg.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bulgarian-Belarusian' (0.9M links, 31.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-bg.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bulgarian-Bengali (sample file)" href="MultiHPLT/v2/bg-bn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="MultiHPLT/v2/bg-bs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Catalan (sample file)" href="MultiHPLT/v2/bg-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Welsh (sample file)" href="MultiHPLT/v2/bg-cy_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="MultiHPLT/v2/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Esperanto (sample file)" href="MultiHPLT/v2/bg-eo_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="MultiHPLT/v2/bg-et_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Basque (sample file)" href="MultiHPLT/v2/bg-eu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Persian (sample file)" href="MultiHPLT/v2/bg-fa_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="MultiHPLT/v2/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Irish (sample file)" href="MultiHPLT/v2/bg-ga_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Galician (sample file)" href="MultiHPLT/v2/bg-gl_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Gujarati (sample file)" href="MultiHPLT/v2/bg-gu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hebrew (sample file)" href="MultiHPLT/v2/bg-he_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hindi (sample file)" href="MultiHPLT/v2/bg-hi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="MultiHPLT/v2/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="MultiHPLT/v2/bg-is_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Japanese (sample file)" href="MultiHPLT/v2/bg-ja_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Kazakh (sample file)" href="MultiHPLT/v2/bg-kk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Kannada (sample file)" href="MultiHPLT/v2/bg-kn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Korean (sample file)" href="MultiHPLT/v2/bg-ko_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="MultiHPLT/v2/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="MultiHPLT/v2/bg-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="MultiHPLT/v2/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Malayalam (sample file)" href="MultiHPLT/v2/bg-ml_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Marathi (sample file)" href="MultiHPLT/v2/bg-mr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Malay (sample file)" href="MultiHPLT/v2/bg-ms_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Maltese (sample file)" href="MultiHPLT/v2/bg-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/bg-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Nepali (sample file)" href="MultiHPLT/v2/bg-ne_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/bg-nn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Sinhala (sample file)" href="MultiHPLT/v2/bg-si_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="MultiHPLT/v2/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="MultiHPLT/v2/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="MultiHPLT/v2/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="MultiHPLT/v2/bg-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swahili (sample file)" href="MultiHPLT/v2/bg-sw_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Tamil (sample file)" href="MultiHPLT/v2/bg-ta_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Telugu (sample file)" href="MultiHPLT/v2/bg-te_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Thai (sample file)" href="MultiHPLT/v2/bg-th_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Turkish (sample file)" href="MultiHPLT/v2/bg-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="MultiHPLT/v2/bg-uk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Urdu (sample file)" href="MultiHPLT/v2/bg-ur_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Uzbek (sample file)" href="MultiHPLT/v2/bg-uz_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Vietnamese (sample file)" href="MultiHPLT/v2/bg-vi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Xhosa (sample file)" href="MultiHPLT/v2/bg-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/bg.zip">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/bn.zip">bn</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bengali-Afrikaans' (0.1M links, 6.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-bn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bengali-Arabic' (0.4M links, 21.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-bn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bengali-Azerbaijani' (0.1M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-bn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bengali-Belarusian' (98.9k links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-bn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bengali-Bulgarian' (0.3M links, 12.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-bn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bengali-Bosnian (sample file)" href="MultiHPLT/v2/bn-bs_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Catalan (sample file)" href="MultiHPLT/v2/bn-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Welsh (sample file)" href="MultiHPLT/v2/bn-cy_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-English (sample file)" href="MultiHPLT/v2/bn-en_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Esperanto (sample file)" href="MultiHPLT/v2/bn-eo_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Estonian (sample file)" href="MultiHPLT/v2/bn-et_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Basque (sample file)" href="MultiHPLT/v2/bn-eu_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Persian (sample file)" href="MultiHPLT/v2/bn-fa_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Finnish (sample file)" href="MultiHPLT/v2/bn-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Irish (sample file)" href="MultiHPLT/v2/bn-ga_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Galician (sample file)" href="MultiHPLT/v2/bn-gl_sample.html">view</a></td><th>bn</th>
<td><a rel="nofollow" title="Bengali-Gujarati (sample file)" href="MultiHPLT/v2/bn-gu_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Hebrew (sample file)" href="MultiHPLT/v2/bn-he_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Hindi (sample file)" href="MultiHPLT/v2/bn-hi_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Croatian (sample file)" href="MultiHPLT/v2/bn-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Icelandic (sample file)" href="MultiHPLT/v2/bn-is_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Japanese (sample file)" href="MultiHPLT/v2/bn-ja_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Kazakh (sample file)" href="MultiHPLT/v2/bn-kk_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Kannada (sample file)" href="MultiHPLT/v2/bn-kn_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Korean (sample file)" href="MultiHPLT/v2/bn-ko_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Lithuanian (sample file)" href="MultiHPLT/v2/bn-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Latvian (sample file)" href="MultiHPLT/v2/bn-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Macedonian (sample file)" href="MultiHPLT/v2/bn-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Malayalam (sample file)" href="MultiHPLT/v2/bn-ml_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Marathi (sample file)" href="MultiHPLT/v2/bn-mr_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Malay (sample file)" href="MultiHPLT/v2/bn-ms_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Maltese (sample file)" href="MultiHPLT/v2/bn-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/bn-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Nepali (sample file)" href="MultiHPLT/v2/bn-ne_sample.html">view</a></td><th>bn</th>
<td><a rel="nofollow" title="Bengali-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/bn-nn_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Sinhala (sample file)" href="MultiHPLT/v2/bn-si_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Slovak (sample file)" href="MultiHPLT/v2/bn-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Slovenian (sample file)" href="MultiHPLT/v2/bn-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Albanian (sample file)" href="MultiHPLT/v2/bn-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Serbian (sample file)" href="MultiHPLT/v2/bn-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Swahili (sample file)" href="MultiHPLT/v2/bn-sw_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Tamil (sample file)" href="MultiHPLT/v2/bn-ta_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Telugu (sample file)" href="MultiHPLT/v2/bn-te_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Thai (sample file)" href="MultiHPLT/v2/bn-th_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Turkish (sample file)" href="MultiHPLT/v2/bn-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Ukrainian (sample file)" href="MultiHPLT/v2/bn-uk_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Urdu (sample file)" href="MultiHPLT/v2/bn-ur_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Uzbek (sample file)" href="MultiHPLT/v2/bn-uz_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Vietnamese (sample file)" href="MultiHPLT/v2/bn-vi_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Xhosa (sample file)" href="MultiHPLT/v2/bn-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/bn.zip">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/bs.zip">bs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Afrikaans' (0.1M links, 4.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-bs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Arabic' (0.1M links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-bs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Azerbaijani' (82.0k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-bs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Belarusian' (92.6k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-bs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (0.5M links, 18.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-bs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bengali' (31.1k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-bs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bosnian-Catalan (sample file)" href="MultiHPLT/v2/bs-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Welsh (sample file)" href="MultiHPLT/v2/bs-cy_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="MultiHPLT/v2/bs-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Esperanto (sample file)" href="MultiHPLT/v2/bs-eo_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Estonian (sample file)" href="MultiHPLT/v2/bs-et_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Basque (sample file)" href="MultiHPLT/v2/bs-eu_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Persian (sample file)" href="MultiHPLT/v2/bs-fa_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Finnish (sample file)" href="MultiHPLT/v2/bs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Irish (sample file)" href="MultiHPLT/v2/bs-ga_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Galician (sample file)" href="MultiHPLT/v2/bs-gl_sample.html">view</a></td><th>bs</th>
<td><a rel="nofollow" title="Bosnian-Gujarati (sample file)" href="MultiHPLT/v2/bs-gu_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hebrew (sample file)" href="MultiHPLT/v2/bs-he_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hindi (sample file)" href="MultiHPLT/v2/bs-hi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="MultiHPLT/v2/bs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Icelandic (sample file)" href="MultiHPLT/v2/bs-is_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Japanese (sample file)" href="MultiHPLT/v2/bs-ja_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Kazakh (sample file)" href="MultiHPLT/v2/bs-kk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Kannada (sample file)" href="MultiHPLT/v2/bs-kn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Korean (sample file)" href="MultiHPLT/v2/bs-ko_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Lithuanian (sample file)" href="MultiHPLT/v2/bs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Latvian (sample file)" href="MultiHPLT/v2/bs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="MultiHPLT/v2/bs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Malayalam (sample file)" href="MultiHPLT/v2/bs-ml_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Marathi (sample file)" href="MultiHPLT/v2/bs-mr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Malay (sample file)" href="MultiHPLT/v2/bs-ms_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Maltese (sample file)" href="MultiHPLT/v2/bs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/bs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Nepali (sample file)" href="MultiHPLT/v2/bs-ne_sample.html">view</a></td><th>bs</th>
<td><a rel="nofollow" title="Bosnian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/bs-nn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Sinhala (sample file)" href="MultiHPLT/v2/bs-si_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovak (sample file)" href="MultiHPLT/v2/bs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovenian (sample file)" href="MultiHPLT/v2/bs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="MultiHPLT/v2/bs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="MultiHPLT/v2/bs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Swahili (sample file)" href="MultiHPLT/v2/bs-sw_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Tamil (sample file)" href="MultiHPLT/v2/bs-ta_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Telugu (sample file)" href="MultiHPLT/v2/bs-te_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Thai (sample file)" href="MultiHPLT/v2/bs-th_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Turkish (sample file)" href="MultiHPLT/v2/bs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Ukrainian (sample file)" href="MultiHPLT/v2/bs-uk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Urdu (sample file)" href="MultiHPLT/v2/bs-ur_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Uzbek (sample file)" href="MultiHPLT/v2/bs-uz_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Vietnamese (sample file)" href="MultiHPLT/v2/bs-vi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Xhosa (sample file)" href="MultiHPLT/v2/bs-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/bs.zip">bs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/ca.zip">ca</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Afrikaans' (0.6M links, 25.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Arabic' (0.4M links, 15.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Azerbaijani' (0.3M links, 12.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Belarusian' (0.6M links, 26.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bulgarian' (1.7M links, 72.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bengali' (0.1M links, 6.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bosnian' (0.2M links, 7.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-ca.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Catalan-Welsh (sample file)" href="MultiHPLT/v2/ca-cy_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="MultiHPLT/v2/ca-en_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Esperanto (sample file)" href="MultiHPLT/v2/ca-eo_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Estonian (sample file)" href="MultiHPLT/v2/ca-et_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Basque (sample file)" href="MultiHPLT/v2/ca-eu_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Persian (sample file)" href="MultiHPLT/v2/ca-fa_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Finnish (sample file)" href="MultiHPLT/v2/ca-fi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Irish (sample file)" href="MultiHPLT/v2/ca-ga_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Galician (sample file)" href="MultiHPLT/v2/ca-gl_sample.html">view</a></td><th>ca</th>
<td><a rel="nofollow" title="Catalan-Gujarati (sample file)" href="MultiHPLT/v2/ca-gu_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hebrew (sample file)" href="MultiHPLT/v2/ca-he_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hindi (sample file)" href="MultiHPLT/v2/ca-hi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Croatian (sample file)" href="MultiHPLT/v2/ca-hr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Icelandic (sample file)" href="MultiHPLT/v2/ca-is_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Japanese (sample file)" href="MultiHPLT/v2/ca-ja_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Kazakh (sample file)" href="MultiHPLT/v2/ca-kk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Kannada (sample file)" href="MultiHPLT/v2/ca-kn_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Korean (sample file)" href="MultiHPLT/v2/ca-ko_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Lithuanian (sample file)" href="MultiHPLT/v2/ca-lt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Latvian (sample file)" href="MultiHPLT/v2/ca-lv_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Macedonian (sample file)" href="MultiHPLT/v2/ca-mk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Malayalam (sample file)" href="MultiHPLT/v2/ca-ml_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Marathi (sample file)" href="MultiHPLT/v2/ca-mr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Malay (sample file)" href="MultiHPLT/v2/ca-ms_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Maltese (sample file)" href="MultiHPLT/v2/ca-mt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/ca-nb_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Nepali (sample file)" href="MultiHPLT/v2/ca-ne_sample.html">view</a></td><th>ca</th>
<td><a rel="nofollow" title="Catalan-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/ca-nn_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Sinhala (sample file)" href="MultiHPLT/v2/ca-si_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovak (sample file)" href="MultiHPLT/v2/ca-sk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovenian (sample file)" href="MultiHPLT/v2/ca-sl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Albanian (sample file)" href="MultiHPLT/v2/ca-sq_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Serbian (sample file)" href="MultiHPLT/v2/ca-sr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Swahili (sample file)" href="MultiHPLT/v2/ca-sw_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Tamil (sample file)" href="MultiHPLT/v2/ca-ta_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Telugu (sample file)" href="MultiHPLT/v2/ca-te_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Thai (sample file)" href="MultiHPLT/v2/ca-th_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Turkish (sample file)" href="MultiHPLT/v2/ca-tr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Ukrainian (sample file)" href="MultiHPLT/v2/ca-uk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Urdu (sample file)" href="MultiHPLT/v2/ca-ur_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Uzbek (sample file)" href="MultiHPLT/v2/ca-uz_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Vietnamese (sample file)" href="MultiHPLT/v2/ca-vi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Xhosa (sample file)" href="MultiHPLT/v2/ca-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/cy.zip">cy</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Afrikaans' (0.4M links, 19.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-cy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Arabic' (0.2M links, 6.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-cy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Azerbaijani' (0.2M links, 8.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-cy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Belarusian' (0.4M links, 16.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-cy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Bulgarian' (0.7M links, 27.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-cy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Bengali' (86.7k links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-cy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Bosnian' (60.3k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-cy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Catalan' (0.6M links, 27.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-cy.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Welsh-English (sample file)" href="MultiHPLT/v2/cy-en_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Esperanto (sample file)" href="MultiHPLT/v2/cy-eo_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Estonian (sample file)" href="MultiHPLT/v2/cy-et_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Basque (sample file)" href="MultiHPLT/v2/cy-eu_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Persian (sample file)" href="MultiHPLT/v2/cy-fa_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Finnish (sample file)" href="MultiHPLT/v2/cy-fi_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Irish (sample file)" href="MultiHPLT/v2/cy-ga_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Galician (sample file)" href="MultiHPLT/v2/cy-gl_sample.html">view</a></td><th>cy</th>
<td><a rel="nofollow" title="Welsh-Gujarati (sample file)" href="MultiHPLT/v2/cy-gu_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Hebrew (sample file)" href="MultiHPLT/v2/cy-he_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Hindi (sample file)" href="MultiHPLT/v2/cy-hi_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Croatian (sample file)" href="MultiHPLT/v2/cy-hr_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Icelandic (sample file)" href="MultiHPLT/v2/cy-is_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Japanese (sample file)" href="MultiHPLT/v2/cy-ja_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Kazakh (sample file)" href="MultiHPLT/v2/cy-kk_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Kannada (sample file)" href="MultiHPLT/v2/cy-kn_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Korean (sample file)" href="MultiHPLT/v2/cy-ko_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Lithuanian (sample file)" href="MultiHPLT/v2/cy-lt_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Latvian (sample file)" href="MultiHPLT/v2/cy-lv_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Macedonian (sample file)" href="MultiHPLT/v2/cy-mk_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Malayalam (sample file)" href="MultiHPLT/v2/cy-ml_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Marathi (sample file)" href="MultiHPLT/v2/cy-mr_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Malay (sample file)" href="MultiHPLT/v2/cy-ms_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Maltese (sample file)" href="MultiHPLT/v2/cy-mt_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/cy-nb_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Nepali (sample file)" href="MultiHPLT/v2/cy-ne_sample.html">view</a></td><th>cy</th>
<td><a rel="nofollow" title="Welsh-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/cy-nn_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Sinhala (sample file)" href="MultiHPLT/v2/cy-si_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Slovak (sample file)" href="MultiHPLT/v2/cy-sk_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Slovenian (sample file)" href="MultiHPLT/v2/cy-sl_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Albanian (sample file)" href="MultiHPLT/v2/cy-sq_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Serbian (sample file)" href="MultiHPLT/v2/cy-sr_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Swahili (sample file)" href="MultiHPLT/v2/cy-sw_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Tamil (sample file)" href="MultiHPLT/v2/cy-ta_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Telugu (sample file)" href="MultiHPLT/v2/cy-te_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Thai (sample file)" href="MultiHPLT/v2/cy-th_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Turkish (sample file)" href="MultiHPLT/v2/cy-tr_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Ukrainian (sample file)" href="MultiHPLT/v2/cy-uk_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Urdu (sample file)" href="MultiHPLT/v2/cy-ur_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Uzbek (sample file)" href="MultiHPLT/v2/cy-uz_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Vietnamese (sample file)" href="MultiHPLT/v2/cy-vi_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Xhosa (sample file)" href="MultiHPLT/v2/cy-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/cy.zip">cy</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Afrikaans' (4.0M links, 185.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (17.5M links, 987.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Azerbaijani' (3.2M links, 135.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Belarusian' (3.1M links, 128.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (22.7M links, 1.0G tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bengali' (2.3M links, 165.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (4.6M links, 227.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (13.1M links, 664.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Welsh' (3.9M links, 181.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Esperanto (sample file)" href="MultiHPLT/v2/en-eo_sample.html">view</a></td><td><a rel="nofollow" title="English-Estonian (sample file)" href="MultiHPLT/v2/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="MultiHPLT/v2/en-eu_sample.html">view</a></td><td><a rel="nofollow" title="English-Persian (sample file)" href="MultiHPLT/v2/en-fa_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="MultiHPLT/v2/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-Irish (sample file)" href="MultiHPLT/v2/en-ga_sample.html">view</a></td><td><a rel="nofollow" title="English-Galician (sample file)" href="MultiHPLT/v2/en-gl_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Gujarati (sample file)" href="MultiHPLT/v2/en-gu_sample.html">view</a></td><td><a rel="nofollow" title="English-Hebrew (sample file)" href="MultiHPLT/v2/en-he_sample.html">view</a></td><td><a rel="nofollow" title="English-Hindi (sample file)" href="MultiHPLT/v2/en-hi_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="MultiHPLT/v2/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="MultiHPLT/v2/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="MultiHPLT/v2/en-ja_sample.html">view</a></td><td><a rel="nofollow" title="English-Kazakh (sample file)" href="MultiHPLT/v2/en-kk_sample.html">view</a></td><td><a rel="nofollow" title="English-Kannada (sample file)" href="MultiHPLT/v2/en-kn_sample.html">view</a></td><td><a rel="nofollow" title="English-Korean (sample file)" href="MultiHPLT/v2/en-ko_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="MultiHPLT/v2/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="MultiHPLT/v2/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="MultiHPLT/v2/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Malayalam (sample file)" href="MultiHPLT/v2/en-ml_sample.html">view</a></td><td><a rel="nofollow" title="English-Marathi (sample file)" href="MultiHPLT/v2/en-mr_sample.html">view</a></td><td><a rel="nofollow" title="English-Malay (sample file)" href="MultiHPLT/v2/en-ms_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="MultiHPLT/v2/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/en-nb_sample.html">view</a></td><td><a rel="nofollow" title="English-Nepali (sample file)" href="MultiHPLT/v2/en-ne_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/en-nn_sample.html">view</a></td><td><a rel="nofollow" title="English-Sinhala (sample file)" href="MultiHPLT/v2/en-si_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovak (sample file)" href="MultiHPLT/v2/en-sk_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="MultiHPLT/v2/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="MultiHPLT/v2/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="MultiHPLT/v2/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swahili (sample file)" href="MultiHPLT/v2/en-sw_sample.html">view</a></td><td><a rel="nofollow" title="English-Tamil (sample file)" href="MultiHPLT/v2/en-ta_sample.html">view</a></td><td><a rel="nofollow" title="English-Telugu (sample file)" href="MultiHPLT/v2/en-te_sample.html">view</a></td><td><a rel="nofollow" title="English-Thai (sample file)" href="MultiHPLT/v2/en-th_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="MultiHPLT/v2/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="MultiHPLT/v2/en-uk_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="MultiHPLT/v2/en-ur_sample.html">view</a></td><td><a rel="nofollow" title="English-Uzbek (sample file)" href="MultiHPLT/v2/en-uz_sample.html">view</a></td><td><a rel="nofollow" title="English-Vietnamese (sample file)" href="MultiHPLT/v2/en-vi_sample.html">view</a></td><td><a rel="nofollow" title="English-Xhosa (sample file)" href="MultiHPLT/v2/en-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/eo.zip">eo</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Afrikaans' (0.3M links, 10.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Arabic' (0.1M links, 2.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Azerbaijani' (0.1M links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Belarusian' (0.2M links, 4.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Bulgarian' (0.4M links, 9.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Bengali' (68.4k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Bosnian' (49.7k links, 0.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Catalan' (0.3M links, 8.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Welsh' (0.2M links, 5.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-English' (1.5M links, 27.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-eo.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Esperanto-Estonian (sample file)" href="MultiHPLT/v2/eo-et_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Basque (sample file)" href="MultiHPLT/v2/eo-eu_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Persian (sample file)" href="MultiHPLT/v2/eo-fa_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Finnish (sample file)" href="MultiHPLT/v2/eo-fi_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Irish (sample file)" href="MultiHPLT/v2/eo-ga_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Galician (sample file)" href="MultiHPLT/v2/eo-gl_sample.html">view</a></td><th>eo</th>
<td><a rel="nofollow" title="Esperanto-Gujarati (sample file)" href="MultiHPLT/v2/eo-gu_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Hebrew (sample file)" href="MultiHPLT/v2/eo-he_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Hindi (sample file)" href="MultiHPLT/v2/eo-hi_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Croatian (sample file)" href="MultiHPLT/v2/eo-hr_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Icelandic (sample file)" href="MultiHPLT/v2/eo-is_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Japanese (sample file)" href="MultiHPLT/v2/eo-ja_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Kazakh (sample file)" href="MultiHPLT/v2/eo-kk_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Kannada (sample file)" href="MultiHPLT/v2/eo-kn_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Korean (sample file)" href="MultiHPLT/v2/eo-ko_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Lithuanian (sample file)" href="MultiHPLT/v2/eo-lt_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Latvian (sample file)" href="MultiHPLT/v2/eo-lv_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Macedonian (sample file)" href="MultiHPLT/v2/eo-mk_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Malayalam (sample file)" href="MultiHPLT/v2/eo-ml_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Marathi (sample file)" href="MultiHPLT/v2/eo-mr_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Malay (sample file)" href="MultiHPLT/v2/eo-ms_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Maltese (sample file)" href="MultiHPLT/v2/eo-mt_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/eo-nb_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Nepali (sample file)" href="MultiHPLT/v2/eo-ne_sample.html">view</a></td><th>eo</th>
<td><a rel="nofollow" title="Esperanto-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/eo-nn_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Sinhala (sample file)" href="MultiHPLT/v2/eo-si_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Slovak (sample file)" href="MultiHPLT/v2/eo-sk_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Slovenian (sample file)" href="MultiHPLT/v2/eo-sl_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Albanian (sample file)" href="MultiHPLT/v2/eo-sq_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Serbian (sample file)" href="MultiHPLT/v2/eo-sr_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Swahili (sample file)" href="MultiHPLT/v2/eo-sw_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Tamil (sample file)" href="MultiHPLT/v2/eo-ta_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Telugu (sample file)" href="MultiHPLT/v2/eo-te_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Thai (sample file)" href="MultiHPLT/v2/eo-th_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Turkish (sample file)" href="MultiHPLT/v2/eo-tr_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Ukrainian (sample file)" href="MultiHPLT/v2/eo-uk_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Urdu (sample file)" href="MultiHPLT/v2/eo-ur_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Uzbek (sample file)" href="MultiHPLT/v2/eo-uz_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Vietnamese (sample file)" href="MultiHPLT/v2/eo-vi_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Xhosa (sample file)" href="MultiHPLT/v2/eo-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/eo.zip">eo</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/et.zip">et</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Afrikaans' (0.4M links, 16.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Arabic' (0.5M links, 15.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Azerbaijani' (0.3M links, 10.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Belarusian' (0.5M links, 16.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (2.8M links, 112.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bengali' (92.8k links, 3.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bosnian' (0.2M links, 6.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Catalan' (0.9M links, 33.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Welsh' (0.3M links, 13.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (8.8M links, 366.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Esperanto' (0.2M links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-et.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Estonian-Basque (sample file)" href="MultiHPLT/v2/et-eu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Persian (sample file)" href="MultiHPLT/v2/et-fa_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="MultiHPLT/v2/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Irish (sample file)" href="MultiHPLT/v2/et-ga_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Galician (sample file)" href="MultiHPLT/v2/et-gl_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Gujarati (sample file)" href="MultiHPLT/v2/et-gu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hebrew (sample file)" href="MultiHPLT/v2/et-he_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hindi (sample file)" href="MultiHPLT/v2/et-hi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="MultiHPLT/v2/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="MultiHPLT/v2/et-is_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Japanese (sample file)" href="MultiHPLT/v2/et-ja_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Kazakh (sample file)" href="MultiHPLT/v2/et-kk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Kannada (sample file)" href="MultiHPLT/v2/et-kn_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Korean (sample file)" href="MultiHPLT/v2/et-ko_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="MultiHPLT/v2/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="MultiHPLT/v2/et-lv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Macedonian (sample file)" href="MultiHPLT/v2/et-mk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Malayalam (sample file)" href="MultiHPLT/v2/et-ml_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Marathi (sample file)" href="MultiHPLT/v2/et-mr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Malay (sample file)" href="MultiHPLT/v2/et-ms_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Maltese (sample file)" href="MultiHPLT/v2/et-mt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/et-nb_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Nepali (sample file)" href="MultiHPLT/v2/et-ne_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/et-nn_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Sinhala (sample file)" href="MultiHPLT/v2/et-si_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="MultiHPLT/v2/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="MultiHPLT/v2/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Albanian (sample file)" href="MultiHPLT/v2/et-sq_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Serbian (sample file)" href="MultiHPLT/v2/et-sr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swahili (sample file)" href="MultiHPLT/v2/et-sw_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Tamil (sample file)" href="MultiHPLT/v2/et-ta_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Telugu (sample file)" href="MultiHPLT/v2/et-te_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Thai (sample file)" href="MultiHPLT/v2/et-th_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Turkish (sample file)" href="MultiHPLT/v2/et-tr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Ukrainian (sample file)" href="MultiHPLT/v2/et-uk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Urdu (sample file)" href="MultiHPLT/v2/et-ur_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Uzbek (sample file)" href="MultiHPLT/v2/et-uz_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Vietnamese (sample file)" href="MultiHPLT/v2/et-vi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Xhosa (sample file)" href="MultiHPLT/v2/et-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/et.zip">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/eu.zip">eu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Afrikaans' (0.2M links, 7.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Arabic' (96.0k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Azerbaijani' (0.2M links, 5.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Belarusian' (0.2M links, 5.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Bulgarian' (0.4M links, 12.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Bengali' (56.6k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Bosnian' (44.3k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Catalan' (0.4M links, 18.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Welsh' (0.2M links, 5.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-English' (1.5M links, 66.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Esperanto' (0.1M links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Estonian' (0.2M links, 6.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-eu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Basque-Persian (sample file)" href="MultiHPLT/v2/eu-fa_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Finnish (sample file)" href="MultiHPLT/v2/eu-fi_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Irish (sample file)" href="MultiHPLT/v2/eu-ga_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Galician (sample file)" href="MultiHPLT/v2/eu-gl_sample.html">view</a></td><th>eu</th>
<td><a rel="nofollow" title="Basque-Gujarati (sample file)" href="MultiHPLT/v2/eu-gu_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Hebrew (sample file)" href="MultiHPLT/v2/eu-he_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Hindi (sample file)" href="MultiHPLT/v2/eu-hi_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Croatian (sample file)" href="MultiHPLT/v2/eu-hr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Icelandic (sample file)" href="MultiHPLT/v2/eu-is_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Japanese (sample file)" href="MultiHPLT/v2/eu-ja_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Kazakh (sample file)" href="MultiHPLT/v2/eu-kk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Kannada (sample file)" href="MultiHPLT/v2/eu-kn_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Korean (sample file)" href="MultiHPLT/v2/eu-ko_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Lithuanian (sample file)" href="MultiHPLT/v2/eu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Latvian (sample file)" href="MultiHPLT/v2/eu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Macedonian (sample file)" href="MultiHPLT/v2/eu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Malayalam (sample file)" href="MultiHPLT/v2/eu-ml_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Marathi (sample file)" href="MultiHPLT/v2/eu-mr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Malay (sample file)" href="MultiHPLT/v2/eu-ms_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Maltese (sample file)" href="MultiHPLT/v2/eu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/eu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Nepali (sample file)" href="MultiHPLT/v2/eu-ne_sample.html">view</a></td><th>eu</th>
<td><a rel="nofollow" title="Basque-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/eu-nn_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Sinhala (sample file)" href="MultiHPLT/v2/eu-si_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovak (sample file)" href="MultiHPLT/v2/eu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovenian (sample file)" href="MultiHPLT/v2/eu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Albanian (sample file)" href="MultiHPLT/v2/eu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Serbian (sample file)" href="MultiHPLT/v2/eu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Swahili (sample file)" href="MultiHPLT/v2/eu-sw_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Tamil (sample file)" href="MultiHPLT/v2/eu-ta_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Telugu (sample file)" href="MultiHPLT/v2/eu-te_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Thai (sample file)" href="MultiHPLT/v2/eu-th_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Turkish (sample file)" href="MultiHPLT/v2/eu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Ukrainian (sample file)" href="MultiHPLT/v2/eu-uk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Urdu (sample file)" href="MultiHPLT/v2/eu-ur_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Uzbek (sample file)" href="MultiHPLT/v2/eu-uz_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Vietnamese (sample file)" href="MultiHPLT/v2/eu-vi_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Xhosa (sample file)" href="MultiHPLT/v2/eu-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/eu.zip">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/fa.zip">fa</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Afrikaans' (0.1M links, 5.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Arabic' (0.5M links, 23.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Azerbaijani' (0.1M links, 4.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Belarusian' (0.1M links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Bulgarian' (0.4M links, 13.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Bengali' (0.2M links, 9.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Bosnian' (51.8k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Catalan' (0.2M links, 7.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Welsh' (97.9k links, 4.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-English' (3.4M links, 200.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Esperanto' (56.4k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Estonian' (0.1M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Basque' (49.9k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-fa.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Persian-Finnish (sample file)" href="MultiHPLT/v2/fa-fi_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Irish (sample file)" href="MultiHPLT/v2/fa-ga_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Galician (sample file)" href="MultiHPLT/v2/fa-gl_sample.html">view</a></td><th>fa</th>
<td><a rel="nofollow" title="Persian-Gujarati (sample file)" href="MultiHPLT/v2/fa-gu_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Hebrew (sample file)" href="MultiHPLT/v2/fa-he_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Hindi (sample file)" href="MultiHPLT/v2/fa-hi_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Croatian (sample file)" href="MultiHPLT/v2/fa-hr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Icelandic (sample file)" href="MultiHPLT/v2/fa-is_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Japanese (sample file)" href="MultiHPLT/v2/fa-ja_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Kazakh (sample file)" href="MultiHPLT/v2/fa-kk_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Kannada (sample file)" href="MultiHPLT/v2/fa-kn_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Korean (sample file)" href="MultiHPLT/v2/fa-ko_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Lithuanian (sample file)" href="MultiHPLT/v2/fa-lt_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Latvian (sample file)" href="MultiHPLT/v2/fa-lv_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Macedonian (sample file)" href="MultiHPLT/v2/fa-mk_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Malayalam (sample file)" href="MultiHPLT/v2/fa-ml_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Marathi (sample file)" href="MultiHPLT/v2/fa-mr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Malay (sample file)" href="MultiHPLT/v2/fa-ms_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Maltese (sample file)" href="MultiHPLT/v2/fa-mt_sample.html">view</a></td><td><a rel="nofollow" title="Persian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/fa-nb_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Nepali (sample file)" href="MultiHPLT/v2/fa-ne_sample.html">view</a></td><th>fa</th>
<td><a rel="nofollow" title="Persian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/fa-nn_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Sinhala (sample file)" href="MultiHPLT/v2/fa-si_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Slovak (sample file)" href="MultiHPLT/v2/fa-sk_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Slovenian (sample file)" href="MultiHPLT/v2/fa-sl_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Albanian (sample file)" href="MultiHPLT/v2/fa-sq_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Serbian (sample file)" href="MultiHPLT/v2/fa-sr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Swahili (sample file)" href="MultiHPLT/v2/fa-sw_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Tamil (sample file)" href="MultiHPLT/v2/fa-ta_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Telugu (sample file)" href="MultiHPLT/v2/fa-te_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Thai (sample file)" href="MultiHPLT/v2/fa-th_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Turkish (sample file)" href="MultiHPLT/v2/fa-tr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Ukrainian (sample file)" href="MultiHPLT/v2/fa-uk_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Urdu (sample file)" href="MultiHPLT/v2/fa-ur_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Uzbek (sample file)" href="MultiHPLT/v2/fa-uz_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Vietnamese (sample file)" href="MultiHPLT/v2/fa-vi_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Xhosa (sample file)" href="MultiHPLT/v2/fa-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/fa.zip">fa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/fi.zip">fi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Afrikaans' (0.8M links, 29.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Arabic' (1.0M links, 29.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Azerbaijani' (0.4M links, 12.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Belarusian' (0.6M links, 19.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (4.4M links, 164.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bengali' (0.2M links, 7.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bosnian' (0.3M links, 10.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Catalan' (1.4M links, 51.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Welsh' (0.4M links, 15.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (29.1M links, 1.1G tokens)" href="download.php?f=MultiHPLT/v2/xml/en-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Esperanto' (0.4M links, 8.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (2.7M links, 93.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Basque' (0.3M links, 8.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Persian' (0.2M links, 8.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-Irish (sample file)" href="MultiHPLT/v2/fi-ga_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Galician (sample file)" href="MultiHPLT/v2/fi-gl_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Gujarati (sample file)" href="MultiHPLT/v2/fi-gu_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hebrew (sample file)" href="MultiHPLT/v2/fi-he_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hindi (sample file)" href="MultiHPLT/v2/fi-hi_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="MultiHPLT/v2/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="MultiHPLT/v2/fi-is_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Japanese (sample file)" href="MultiHPLT/v2/fi-ja_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Kazakh (sample file)" href="MultiHPLT/v2/fi-kk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Kannada (sample file)" href="MultiHPLT/v2/fi-kn_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Korean (sample file)" href="MultiHPLT/v2/fi-ko_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="MultiHPLT/v2/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="MultiHPLT/v2/fi-lv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Macedonian (sample file)" href="MultiHPLT/v2/fi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Malayalam (sample file)" href="MultiHPLT/v2/fi-ml_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Marathi (sample file)" href="MultiHPLT/v2/fi-mr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Malay (sample file)" href="MultiHPLT/v2/fi-ms_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Maltese (sample file)" href="MultiHPLT/v2/fi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/fi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Nepali (sample file)" href="MultiHPLT/v2/fi-ne_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/fi-nn_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Sinhala (sample file)" href="MultiHPLT/v2/fi-si_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="MultiHPLT/v2/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="MultiHPLT/v2/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Albanian (sample file)" href="MultiHPLT/v2/fi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Serbian (sample file)" href="MultiHPLT/v2/fi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swahili (sample file)" href="MultiHPLT/v2/fi-sw_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Tamil (sample file)" href="MultiHPLT/v2/fi-ta_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Telugu (sample file)" href="MultiHPLT/v2/fi-te_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Thai (sample file)" href="MultiHPLT/v2/fi-th_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Turkish (sample file)" href="MultiHPLT/v2/fi-tr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="MultiHPLT/v2/fi-uk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Urdu (sample file)" href="MultiHPLT/v2/fi-ur_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Uzbek (sample file)" href="MultiHPLT/v2/fi-uz_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Vietnamese (sample file)" href="MultiHPLT/v2/fi-vi_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Xhosa (sample file)" href="MultiHPLT/v2/fi-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/fi.zip">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/ga.zip">ga</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Afrikaans' (0.4M links, 18.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Arabic' (0.2M links, 7.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Azerbaijani' (0.3M links, 10.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Belarusian' (0.5M links, 19.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Bulgarian' (0.9M links, 39.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Bengali' (81.9k links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Bosnian' (67.9k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Catalan' (0.6M links, 27.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Welsh' (0.5M links, 21.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-English' (2.7M links, 125.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Esperanto' (0.2M links, 4.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Estonian' (0.5M links, 22.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Basque' (0.2M links, 6.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Persian' (0.1M links, 4.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Finnish' (0.7M links, 28.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-ga.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Irish-Galician (sample file)" href="MultiHPLT/v2/ga-gl_sample.html">view</a></td><th>ga</th>
<td><a rel="nofollow" title="Irish-Gujarati (sample file)" href="MultiHPLT/v2/ga-gu_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Hebrew (sample file)" href="MultiHPLT/v2/ga-he_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Hindi (sample file)" href="MultiHPLT/v2/ga-hi_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Croatian (sample file)" href="MultiHPLT/v2/ga-hr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Icelandic (sample file)" href="MultiHPLT/v2/ga-is_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Japanese (sample file)" href="MultiHPLT/v2/ga-ja_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Kazakh (sample file)" href="MultiHPLT/v2/ga-kk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Kannada (sample file)" href="MultiHPLT/v2/ga-kn_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Korean (sample file)" href="MultiHPLT/v2/ga-ko_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Lithuanian (sample file)" href="MultiHPLT/v2/ga-lt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Latvian (sample file)" href="MultiHPLT/v2/ga-lv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Macedonian (sample file)" href="MultiHPLT/v2/ga-mk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Malayalam (sample file)" href="MultiHPLT/v2/ga-ml_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Marathi (sample file)" href="MultiHPLT/v2/ga-mr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Malay (sample file)" href="MultiHPLT/v2/ga-ms_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Maltese (sample file)" href="MultiHPLT/v2/ga-mt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/ga-nb_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Nepali (sample file)" href="MultiHPLT/v2/ga-ne_sample.html">view</a></td><th>ga</th>
<td><a rel="nofollow" title="Irish-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/ga-nn_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Sinhala (sample file)" href="MultiHPLT/v2/ga-si_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovak (sample file)" href="MultiHPLT/v2/ga-sk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovenian (sample file)" href="MultiHPLT/v2/ga-sl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Albanian (sample file)" href="MultiHPLT/v2/ga-sq_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Serbian (sample file)" href="MultiHPLT/v2/ga-sr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swahili (sample file)" href="MultiHPLT/v2/ga-sw_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Tamil (sample file)" href="MultiHPLT/v2/ga-ta_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Telugu (sample file)" href="MultiHPLT/v2/ga-te_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Thai (sample file)" href="MultiHPLT/v2/ga-th_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Turkish (sample file)" href="MultiHPLT/v2/ga-tr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Ukrainian (sample file)" href="MultiHPLT/v2/ga-uk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Urdu (sample file)" href="MultiHPLT/v2/ga-ur_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Uzbek (sample file)" href="MultiHPLT/v2/ga-uz_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Vietnamese (sample file)" href="MultiHPLT/v2/ga-vi_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Xhosa (sample file)" href="MultiHPLT/v2/ga-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/ga.zip">ga</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/gl.zip">gl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Afrikaans' (0.4M links, 15.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Arabic' (0.2M links, 6.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Azerbaijani' (0.3M links, 9.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Belarusian' (0.5M links, 17.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Bulgarian' (0.8M links, 29.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Bengali' (87.9k links, 3.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Bosnian' (81.8k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Catalan' (1.0M links, 46.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Welsh' (0.4M links, 17.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-English' (2.8M links, 133.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Esperanto' (0.2M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Estonian' (0.4M links, 14.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Basque' (0.3M links, 13.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Persian' (0.1M links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Finnish' (0.6M links, 19.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Irish' (0.5M links, 19.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-gl.xml.gz">ces</a></td>
<th></th>
<th>gl</th>
<td><a rel="nofollow" title="Galician-Gujarati (sample file)" href="MultiHPLT/v2/gl-gu_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Hebrew (sample file)" href="MultiHPLT/v2/gl-he_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Hindi (sample file)" href="MultiHPLT/v2/gl-hi_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Croatian (sample file)" href="MultiHPLT/v2/gl-hr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Icelandic (sample file)" href="MultiHPLT/v2/gl-is_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Japanese (sample file)" href="MultiHPLT/v2/gl-ja_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Kazakh (sample file)" href="MultiHPLT/v2/gl-kk_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Kannada (sample file)" href="MultiHPLT/v2/gl-kn_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Korean (sample file)" href="MultiHPLT/v2/gl-ko_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Lithuanian (sample file)" href="MultiHPLT/v2/gl-lt_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Latvian (sample file)" href="MultiHPLT/v2/gl-lv_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Macedonian (sample file)" href="MultiHPLT/v2/gl-mk_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Malayalam (sample file)" href="MultiHPLT/v2/gl-ml_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Marathi (sample file)" href="MultiHPLT/v2/gl-mr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Malay (sample file)" href="MultiHPLT/v2/gl-ms_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Maltese (sample file)" href="MultiHPLT/v2/gl-mt_sample.html">view</a></td><td><a rel="nofollow" title="Galician-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/gl-nb_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Nepali (sample file)" href="MultiHPLT/v2/gl-ne_sample.html">view</a></td><th>gl</th>
<td><a rel="nofollow" title="Galician-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/gl-nn_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Sinhala (sample file)" href="MultiHPLT/v2/gl-si_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Slovak (sample file)" href="MultiHPLT/v2/gl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Slovenian (sample file)" href="MultiHPLT/v2/gl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Albanian (sample file)" href="MultiHPLT/v2/gl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Serbian (sample file)" href="MultiHPLT/v2/gl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Swahili (sample file)" href="MultiHPLT/v2/gl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Tamil (sample file)" href="MultiHPLT/v2/gl-ta_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Telugu (sample file)" href="MultiHPLT/v2/gl-te_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Thai (sample file)" href="MultiHPLT/v2/gl-th_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Turkish (sample file)" href="MultiHPLT/v2/gl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Ukrainian (sample file)" href="MultiHPLT/v2/gl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Urdu (sample file)" href="MultiHPLT/v2/gl-ur_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Uzbek (sample file)" href="MultiHPLT/v2/gl-uz_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Vietnamese (sample file)" href="MultiHPLT/v2/gl-vi_sample.html">view</a></td><td><a rel="nofollow" title="Galician-Xhosa (sample file)" href="MultiHPLT/v2/gl-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/gl.zip">gl</a></th></tr>
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
<th>eo</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>ga</th>
<th>gl</th>
<th></th>
<th>gu</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>is</th>
<th>ja</th>
<th>kk</th>
<th>kn</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>mr</th>
<th>ms</th>
<th>mt</th>
<th>nb</th>
<th>ne</th>
<th></th>
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
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/gu.zip">gu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Afrikaans' (87.3k links, 3.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Arabic' (0.2M links, 7.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Azerbaijani' (76.7k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Belarusian' (86.3k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Bulgarian' (0.2M links, 6.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Bengali' (0.2M links, 12.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Bosnian' (18.8k links, 0.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Catalan' (0.1M links, 5.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Welsh' (79.2k links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-English' (0.7M links, 47.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Esperanto' (65.2k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Estonian' (79.0k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Basque' (47.2k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Persian' (90.2k links, 4.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Finnish' (0.1M links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Irish' (70.3k links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-gu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-Galician' (82.0k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-gu.xml.gz">ces</a></td>
<th>gu</th>
<th></th>
<td><a rel="nofollow" title="Gujarati-Hebrew (sample file)" href="MultiHPLT/v2/gu-he_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Hindi (sample file)" href="MultiHPLT/v2/gu-hi_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Croatian (sample file)" href="MultiHPLT/v2/gu-hr_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Icelandic (sample file)" href="MultiHPLT/v2/gu-is_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Japanese (sample file)" href="MultiHPLT/v2/gu-ja_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Kazakh (sample file)" href="MultiHPLT/v2/gu-kk_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Kannada (sample file)" href="MultiHPLT/v2/gu-kn_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Korean (sample file)" href="MultiHPLT/v2/gu-ko_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Lithuanian (sample file)" href="MultiHPLT/v2/gu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Latvian (sample file)" href="MultiHPLT/v2/gu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Macedonian (sample file)" href="MultiHPLT/v2/gu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Malayalam (sample file)" href="MultiHPLT/v2/gu-ml_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Marathi (sample file)" href="MultiHPLT/v2/gu-mr_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Malay (sample file)" href="MultiHPLT/v2/gu-ms_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Maltese (sample file)" href="MultiHPLT/v2/gu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/gu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Nepali (sample file)" href="MultiHPLT/v2/gu-ne_sample.html">view</a></td><th>gu</th>
<td><a rel="nofollow" title="Gujarati-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/gu-nn_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Sinhala (sample file)" href="MultiHPLT/v2/gu-si_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Slovak (sample file)" href="MultiHPLT/v2/gu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Slovenian (sample file)" href="MultiHPLT/v2/gu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Albanian (sample file)" href="MultiHPLT/v2/gu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Serbian (sample file)" href="MultiHPLT/v2/gu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Swahili (sample file)" href="MultiHPLT/v2/gu-sw_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Tamil (sample file)" href="MultiHPLT/v2/gu-ta_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Telugu (sample file)" href="MultiHPLT/v2/gu-te_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Thai (sample file)" href="MultiHPLT/v2/gu-th_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Turkish (sample file)" href="MultiHPLT/v2/gu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Ukrainian (sample file)" href="MultiHPLT/v2/gu-uk_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Urdu (sample file)" href="MultiHPLT/v2/gu-ur_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Uzbek (sample file)" href="MultiHPLT/v2/gu-uz_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Vietnamese (sample file)" href="MultiHPLT/v2/gu-vi_sample.html">view</a></td><td><a rel="nofollow" title="Gujarati-Xhosa (sample file)" href="MultiHPLT/v2/gu-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/gu.zip">gu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/he.zip">he</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Afrikaans' (0.3M links, 10.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Arabic' (1.5M links, 54.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Azerbaijani' (0.2M links, 4.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Belarusian' (0.2M links, 5.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Bulgarian' (1.1M links, 34.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Bengali' (0.2M links, 11.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Bosnian' (93.2k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Catalan' (0.4M links, 15.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Welsh' (0.1M links, 5.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-English' (8.7M links, 415.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Esperanto' (0.2M links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Estonian' (0.5M links, 14.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Basque' (95.8k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Persian' (0.3M links, 11.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Finnish' (1.2M links, 34.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Irish' (0.2M links, 5.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Galician' (0.2M links, 5.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-he.xml.gz">ces</a></td>
<th>he</th>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Gujarati' (0.1M links, 6.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-he.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hebrew-Hindi (sample file)" href="MultiHPLT/v2/he-hi_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Croatian (sample file)" href="MultiHPLT/v2/he-hr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Icelandic (sample file)" href="MultiHPLT/v2/he-is_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Japanese (sample file)" href="MultiHPLT/v2/he-ja_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Kazakh (sample file)" href="MultiHPLT/v2/he-kk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Kannada (sample file)" href="MultiHPLT/v2/he-kn_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Korean (sample file)" href="MultiHPLT/v2/he-ko_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Lithuanian (sample file)" href="MultiHPLT/v2/he-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Latvian (sample file)" href="MultiHPLT/v2/he-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Macedonian (sample file)" href="MultiHPLT/v2/he-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Malayalam (sample file)" href="MultiHPLT/v2/he-ml_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Marathi (sample file)" href="MultiHPLT/v2/he-mr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Malay (sample file)" href="MultiHPLT/v2/he-ms_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Maltese (sample file)" href="MultiHPLT/v2/he-mt_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/he-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Nepali (sample file)" href="MultiHPLT/v2/he-ne_sample.html">view</a></td><th>he</th>
<td><a rel="nofollow" title="Hebrew-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/he-nn_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Sinhala (sample file)" href="MultiHPLT/v2/he-si_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Slovak (sample file)" href="MultiHPLT/v2/he-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Slovenian (sample file)" href="MultiHPLT/v2/he-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Albanian (sample file)" href="MultiHPLT/v2/he-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Serbian (sample file)" href="MultiHPLT/v2/he-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Swahili (sample file)" href="MultiHPLT/v2/he-sw_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Tamil (sample file)" href="MultiHPLT/v2/he-ta_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Telugu (sample file)" href="MultiHPLT/v2/he-te_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Thai (sample file)" href="MultiHPLT/v2/he-th_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Turkish (sample file)" href="MultiHPLT/v2/he-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Ukrainian (sample file)" href="MultiHPLT/v2/he-uk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Urdu (sample file)" href="MultiHPLT/v2/he-ur_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Uzbek (sample file)" href="MultiHPLT/v2/he-uz_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Vietnamese (sample file)" href="MultiHPLT/v2/he-vi_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Xhosa (sample file)" href="MultiHPLT/v2/he-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/he.zip">he</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/hi.zip">hi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Afrikaans' (0.2M links, 12.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Arabic' (1.2M links, 70.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Azerbaijani' (0.2M links, 6.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Belarusian' (0.2M links, 9.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Bulgarian' (0.8M links, 34.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Bengali' (0.5M links, 37.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Bosnian' (54.4k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Catalan' (0.4M links, 18.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Welsh' (0.2M links, 8.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-English' (9.9M links, 671.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Esperanto' (92.3k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Estonian' (0.3M links, 13.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Basque' (78.5k links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Persian' (0.3M links, 19.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Finnish' (0.7M links, 27.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Irish' (0.2M links, 9.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Galician' (0.2M links, 7.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-hi.xml.gz">ces</a></td>
<th>hi</th>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Gujarati' (0.2M links, 17.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Hebrew' (1.0M links, 51.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-hi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hindi-Croatian (sample file)" href="MultiHPLT/v2/hi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Icelandic (sample file)" href="MultiHPLT/v2/hi-is_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Japanese (sample file)" href="MultiHPLT/v2/hi-ja_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Kazakh (sample file)" href="MultiHPLT/v2/hi-kk_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Kannada (sample file)" href="MultiHPLT/v2/hi-kn_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Korean (sample file)" href="MultiHPLT/v2/hi-ko_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Lithuanian (sample file)" href="MultiHPLT/v2/hi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Latvian (sample file)" href="MultiHPLT/v2/hi-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Macedonian (sample file)" href="MultiHPLT/v2/hi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Malayalam (sample file)" href="MultiHPLT/v2/hi-ml_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Marathi (sample file)" href="MultiHPLT/v2/hi-mr_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Malay (sample file)" href="MultiHPLT/v2/hi-ms_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Maltese (sample file)" href="MultiHPLT/v2/hi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/hi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Nepali (sample file)" href="MultiHPLT/v2/hi-ne_sample.html">view</a></td><th>hi</th>
<td><a rel="nofollow" title="Hindi-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/hi-nn_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Sinhala (sample file)" href="MultiHPLT/v2/hi-si_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Slovak (sample file)" href="MultiHPLT/v2/hi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Slovenian (sample file)" href="MultiHPLT/v2/hi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Albanian (sample file)" href="MultiHPLT/v2/hi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Serbian (sample file)" href="MultiHPLT/v2/hi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Swahili (sample file)" href="MultiHPLT/v2/hi-sw_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Tamil (sample file)" href="MultiHPLT/v2/hi-ta_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Telugu (sample file)" href="MultiHPLT/v2/hi-te_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Thai (sample file)" href="MultiHPLT/v2/hi-th_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Turkish (sample file)" href="MultiHPLT/v2/hi-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Ukrainian (sample file)" href="MultiHPLT/v2/hi-uk_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Urdu (sample file)" href="MultiHPLT/v2/hi-ur_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Uzbek (sample file)" href="MultiHPLT/v2/hi-uz_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Vietnamese (sample file)" href="MultiHPLT/v2/hi-vi_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Xhosa (sample file)" href="MultiHPLT/v2/hi-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/hi.zip">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/hr.zip">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Afrikaans' (0.7M links, 27.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Arabic' (0.7M links, 24.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Azerbaijani' (0.4M links, 14.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Belarusian' (0.6M links, 22.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (4.0M links, 161.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bengali' (0.1M links, 5.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (0.4M links, 13.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Catalan' (1.2M links, 48.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Welsh' (0.5M links, 19.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (14.3M links, 615.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Esperanto' (0.3M links, 6.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (2.0M links, 75.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Basque' (0.2M links, 8.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Persian' (0.2M links, 7.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (3.4M links, 120.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Irish' (0.8M links, 34.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Galician' (0.5M links, 20.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-hr.xml.gz">ces</a></td>
<th>hr</th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Gujarati' (94.9k links, 3.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Hebrew' (0.7M links, 22.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Hindi' (0.5M links, 21.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-hr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="MultiHPLT/v2/hr-is_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Japanese (sample file)" href="MultiHPLT/v2/hr-ja_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Kazakh (sample file)" href="MultiHPLT/v2/hr-kk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Kannada (sample file)" href="MultiHPLT/v2/hr-kn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Korean (sample file)" href="MultiHPLT/v2/hr-ko_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="MultiHPLT/v2/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="MultiHPLT/v2/hr-lv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="MultiHPLT/v2/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Malayalam (sample file)" href="MultiHPLT/v2/hr-ml_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Marathi (sample file)" href="MultiHPLT/v2/hr-mr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Malay (sample file)" href="MultiHPLT/v2/hr-ms_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Maltese (sample file)" href="MultiHPLT/v2/hr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/hr-nb_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Nepali (sample file)" href="MultiHPLT/v2/hr-ne_sample.html">view</a></td><th>hr</th>
<td><a rel="nofollow" title="Croatian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/hr-nn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Sinhala (sample file)" href="MultiHPLT/v2/hr-si_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="MultiHPLT/v2/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="MultiHPLT/v2/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="MultiHPLT/v2/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="MultiHPLT/v2/hr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swahili (sample file)" href="MultiHPLT/v2/hr-sw_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Tamil (sample file)" href="MultiHPLT/v2/hr-ta_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Telugu (sample file)" href="MultiHPLT/v2/hr-te_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Thai (sample file)" href="MultiHPLT/v2/hr-th_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Turkish (sample file)" href="MultiHPLT/v2/hr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="MultiHPLT/v2/hr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Urdu (sample file)" href="MultiHPLT/v2/hr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Uzbek (sample file)" href="MultiHPLT/v2/hr-uz_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Vietnamese (sample file)" href="MultiHPLT/v2/hr-vi_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Xhosa (sample file)" href="MultiHPLT/v2/hr-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/is.zip">is</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Afrikaans' (0.3M links, 14.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Arabic' (0.2M links, 6.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Azerbaijani' (0.2M links, 8.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Belarusian' (0.4M links, 13.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (0.9M links, 36.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bengali' (67.6k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bosnian' (84.4k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Catalan' (0.6M links, 22.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Welsh' (0.3M links, 14.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (2.7M links, 112.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Esperanto' (0.2M links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (0.6M links, 19.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Basque' (0.2M links, 5.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Persian' (0.1M links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (1.0M links, 32.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Irish' (0.4M links, 17.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Galician' (0.4M links, 13.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-is.xml.gz">ces</a></td>
<th>is</th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Gujarati' (63.0k links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hebrew' (0.2M links, 7.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hindi' (0.2M links, 7.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' (0.7M links, 25.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-is.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Japanese (sample file)" href="MultiHPLT/v2/is-ja_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Kazakh (sample file)" href="MultiHPLT/v2/is-kk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Kannada (sample file)" href="MultiHPLT/v2/is-kn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Korean (sample file)" href="MultiHPLT/v2/is-ko_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="MultiHPLT/v2/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="MultiHPLT/v2/is-lv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="MultiHPLT/v2/is-mk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Malayalam (sample file)" href="MultiHPLT/v2/is-ml_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Marathi (sample file)" href="MultiHPLT/v2/is-mr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Malay (sample file)" href="MultiHPLT/v2/is-ms_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Maltese (sample file)" href="MultiHPLT/v2/is-mt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/is-nb_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Nepali (sample file)" href="MultiHPLT/v2/is-ne_sample.html">view</a></td><th>is</th>
<td><a rel="nofollow" title="Icelandic-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/is-nn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Sinhala (sample file)" href="MultiHPLT/v2/is-si_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="MultiHPLT/v2/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="MultiHPLT/v2/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Albanian (sample file)" href="MultiHPLT/v2/is-sq_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Serbian (sample file)" href="MultiHPLT/v2/is-sr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swahili (sample file)" href="MultiHPLT/v2/is-sw_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Tamil (sample file)" href="MultiHPLT/v2/is-ta_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Telugu (sample file)" href="MultiHPLT/v2/is-te_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Thai (sample file)" href="MultiHPLT/v2/is-th_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Turkish (sample file)" href="MultiHPLT/v2/is-tr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Ukrainian (sample file)" href="MultiHPLT/v2/is-uk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Urdu (sample file)" href="MultiHPLT/v2/is-ur_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Uzbek (sample file)" href="MultiHPLT/v2/is-uz_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Vietnamese (sample file)" href="MultiHPLT/v2/is-vi_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Xhosa (sample file)" href="MultiHPLT/v2/is-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/is.zip">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/ja.zip">ja</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Afrikaans' (0.2M links, 9.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Arabic' (1.4M links, 51.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Azerbaijani' (0.1M links, 5.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Belarusian' (0.2M links, 7.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bulgarian' (0.9M links, 38.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bengali' (0.2M links, 9.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bosnian' (67.9k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Catalan' (0.4M links, 19.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Welsh' (0.1M links, 6.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (18.9M links, 882.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Esperanto' (70.9k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Estonian' (0.4M links, 16.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Basque' (71.9k links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Persian' (0.2M links, 8.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Finnish' (1.2M links, 45.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Irish' (0.2M links, 7.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Galician' (0.1M links, 6.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-ja.xml.gz">ces</a></td>
<th>ja</th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Gujarati' (85.6k links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hebrew' (1.2M links, 37.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hindi' (0.8M links, 36.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Croatian' (0.6M links, 26.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Icelandic' (0.2M links, 7.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-ja.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Japanese-Kazakh (sample file)" href="MultiHPLT/v2/ja-kk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Kannada (sample file)" href="MultiHPLT/v2/ja-kn_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Korean (sample file)" href="MultiHPLT/v2/ja-ko_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Lithuanian (sample file)" href="MultiHPLT/v2/ja-lt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Latvian (sample file)" href="MultiHPLT/v2/ja-lv_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Macedonian (sample file)" href="MultiHPLT/v2/ja-mk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Malayalam (sample file)" href="MultiHPLT/v2/ja-ml_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Marathi (sample file)" href="MultiHPLT/v2/ja-mr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Malay (sample file)" href="MultiHPLT/v2/ja-ms_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Maltese (sample file)" href="MultiHPLT/v2/ja-mt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/ja-nb_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Nepali (sample file)" href="MultiHPLT/v2/ja-ne_sample.html">view</a></td><th>ja</th>
<td><a rel="nofollow" title="Japanese-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/ja-nn_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Sinhala (sample file)" href="MultiHPLT/v2/ja-si_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Slovak (sample file)" href="MultiHPLT/v2/ja-sk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Slovenian (sample file)" href="MultiHPLT/v2/ja-sl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Albanian (sample file)" href="MultiHPLT/v2/ja-sq_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Serbian (sample file)" href="MultiHPLT/v2/ja-sr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Swahili (sample file)" href="MultiHPLT/v2/ja-sw_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Tamil (sample file)" href="MultiHPLT/v2/ja-ta_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Telugu (sample file)" href="MultiHPLT/v2/ja-te_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Thai (sample file)" href="MultiHPLT/v2/ja-th_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Turkish (sample file)" href="MultiHPLT/v2/ja-tr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Ukrainian (sample file)" href="MultiHPLT/v2/ja-uk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Urdu (sample file)" href="MultiHPLT/v2/ja-ur_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Uzbek (sample file)" href="MultiHPLT/v2/ja-uz_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Vietnamese (sample file)" href="MultiHPLT/v2/ja-vi_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Xhosa (sample file)" href="MultiHPLT/v2/ja-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/ja.zip">ja</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/kk.zip">kk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Afrikaans' (0.2M links, 6.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Arabic' (0.2M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Azerbaijani' (0.2M links, 7.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Belarusian' (0.2M links, 6.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Bulgarian' (0.4M links, 14.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Bengali' (70.1k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Bosnian' (58.2k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Catalan' (0.2M links, 8.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Welsh' (0.1M links, 4.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-English' (1.9M links, 82.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Esperanto' (92.8k links, 1.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Estonian' (0.3M links, 8.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Basque' (0.1M links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Persian' (67.2k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Finnish' (0.4M links, 10.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Irish' (0.2M links, 6.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Galician' (0.2M links, 5.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-kk.xml.gz">ces</a></td>
<th>kk</th>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Gujarati' (54.2k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Hebrew' (0.1M links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Hindi' (0.1M links, 5.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Croatian' (0.4M links, 11.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Icelandic' (0.2M links, 5.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Japanese' (0.1M links, 4.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-kk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Kazakh-Kannada (sample file)" href="MultiHPLT/v2/kk-kn_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Korean (sample file)" href="MultiHPLT/v2/kk-ko_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Lithuanian (sample file)" href="MultiHPLT/v2/kk-lt_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Latvian (sample file)" href="MultiHPLT/v2/kk-lv_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Macedonian (sample file)" href="MultiHPLT/v2/kk-mk_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Malayalam (sample file)" href="MultiHPLT/v2/kk-ml_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Marathi (sample file)" href="MultiHPLT/v2/kk-mr_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Malay (sample file)" href="MultiHPLT/v2/kk-ms_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Maltese (sample file)" href="MultiHPLT/v2/kk-mt_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/kk-nb_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Nepali (sample file)" href="MultiHPLT/v2/kk-ne_sample.html">view</a></td><th>kk</th>
<td><a rel="nofollow" title="Kazakh-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/kk-nn_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Sinhala (sample file)" href="MultiHPLT/v2/kk-si_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Slovak (sample file)" href="MultiHPLT/v2/kk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Slovenian (sample file)" href="MultiHPLT/v2/kk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Albanian (sample file)" href="MultiHPLT/v2/kk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Serbian (sample file)" href="MultiHPLT/v2/kk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Swahili (sample file)" href="MultiHPLT/v2/kk-sw_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Tamil (sample file)" href="MultiHPLT/v2/kk-ta_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Telugu (sample file)" href="MultiHPLT/v2/kk-te_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Thai (sample file)" href="MultiHPLT/v2/kk-th_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Turkish (sample file)" href="MultiHPLT/v2/kk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Ukrainian (sample file)" href="MultiHPLT/v2/kk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Urdu (sample file)" href="MultiHPLT/v2/kk-ur_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Uzbek (sample file)" href="MultiHPLT/v2/kk-uz_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Vietnamese (sample file)" href="MultiHPLT/v2/kk-vi_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Xhosa (sample file)" href="MultiHPLT/v2/kk-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/kk.zip">kk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/kn.zip">kn</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Afrikaans' (74.4k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Arabic' (0.1M links, 5.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Azerbaijani' (66.9k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Belarusian' (78.5k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Bulgarian' (0.1M links, 5.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Bengali' (0.1M links, 7.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Bosnian' (16.9k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Catalan' (0.1M links, 4.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Welsh' (69.2k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-English' (0.7M links, 48.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Esperanto' (57.0k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Estonian' (68.7k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Basque' (47.4k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Persian' (73.8k links, 3.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Finnish' (0.1M links, 3.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Irish' (68.1k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Galician' (77.5k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-kn.xml.gz">ces</a></td>
<th>kn</th>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Gujarati' (0.1M links, 8.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Hebrew' (0.1M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Hindi' (0.2M links, 14.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Croatian' (0.1M links, 4.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Icelandic' (57.6k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Japanese' (83.9k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-kn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-Kazakh' (48.6k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-kn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Kannada-Korean (sample file)" href="MultiHPLT/v2/kn-ko_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Lithuanian (sample file)" href="MultiHPLT/v2/kn-lt_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Latvian (sample file)" href="MultiHPLT/v2/kn-lv_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Macedonian (sample file)" href="MultiHPLT/v2/kn-mk_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Malayalam (sample file)" href="MultiHPLT/v2/kn-ml_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Marathi (sample file)" href="MultiHPLT/v2/kn-mr_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Malay (sample file)" href="MultiHPLT/v2/kn-ms_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Maltese (sample file)" href="MultiHPLT/v2/kn-mt_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/kn-nb_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Nepali (sample file)" href="MultiHPLT/v2/kn-ne_sample.html">view</a></td><th>kn</th>
<td><a rel="nofollow" title="Kannada-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/kn-nn_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Sinhala (sample file)" href="MultiHPLT/v2/kn-si_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Slovak (sample file)" href="MultiHPLT/v2/kn-sk_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Slovenian (sample file)" href="MultiHPLT/v2/kn-sl_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Albanian (sample file)" href="MultiHPLT/v2/kn-sq_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Serbian (sample file)" href="MultiHPLT/v2/kn-sr_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Swahili (sample file)" href="MultiHPLT/v2/kn-sw_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Tamil (sample file)" href="MultiHPLT/v2/kn-ta_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Telugu (sample file)" href="MultiHPLT/v2/kn-te_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Thai (sample file)" href="MultiHPLT/v2/kn-th_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Turkish (sample file)" href="MultiHPLT/v2/kn-tr_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Ukrainian (sample file)" href="MultiHPLT/v2/kn-uk_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Urdu (sample file)" href="MultiHPLT/v2/kn-ur_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Uzbek (sample file)" href="MultiHPLT/v2/kn-uz_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Vietnamese (sample file)" href="MultiHPLT/v2/kn-vi_sample.html">view</a></td><td><a rel="nofollow" title="Kannada-Xhosa (sample file)" href="MultiHPLT/v2/kn-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/kn.zip">kn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/ko.zip">ko</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Afrikaans' (0.3M links, 13.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Arabic' (2.0M links, 68.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Azerbaijani' (0.2M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Belarusian' (0.2M links, 6.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bulgarian' (1.3M links, 39.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bengali' (0.3M links, 16.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bosnian' (83.1k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Catalan' (0.5M links, 17.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Welsh' (0.2M links, 6.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-English' (18.4M links, 784.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Esperanto' (0.2M links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Estonian' (0.5M links, 16.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Basque' (0.1M links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Persian' (0.3M links, 12.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Finnish' (1.7M links, 47.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Irish' (0.2M links, 6.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Galician' (0.2M links, 5.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-ko.xml.gz">ces</a></td>
<th>ko</th>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Gujarati' (0.1M links, 6.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hebrew' (1.8M links, 56.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hindi' (1.3M links, 60.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Croatian' (0.9M links, 29.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Icelandic' (0.2M links, 7.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Japanese' (3.6M links, 122.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Kazakh' (0.1M links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Kannada' (0.1M links, 4.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-ko.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Korean-Lithuanian (sample file)" href="MultiHPLT/v2/ko-lt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Latvian (sample file)" href="MultiHPLT/v2/ko-lv_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Macedonian (sample file)" href="MultiHPLT/v2/ko-mk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Malayalam (sample file)" href="MultiHPLT/v2/ko-ml_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Marathi (sample file)" href="MultiHPLT/v2/ko-mr_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Malay (sample file)" href="MultiHPLT/v2/ko-ms_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Maltese (sample file)" href="MultiHPLT/v2/ko-mt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/ko-nb_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Nepali (sample file)" href="MultiHPLT/v2/ko-ne_sample.html">view</a></td><th>ko</th>
<td><a rel="nofollow" title="Korean-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/ko-nn_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Sinhala (sample file)" href="MultiHPLT/v2/ko-si_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Slovak (sample file)" href="MultiHPLT/v2/ko-sk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Slovenian (sample file)" href="MultiHPLT/v2/ko-sl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Albanian (sample file)" href="MultiHPLT/v2/ko-sq_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Serbian (sample file)" href="MultiHPLT/v2/ko-sr_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Swahili (sample file)" href="MultiHPLT/v2/ko-sw_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Tamil (sample file)" href="MultiHPLT/v2/ko-ta_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Telugu (sample file)" href="MultiHPLT/v2/ko-te_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Thai (sample file)" href="MultiHPLT/v2/ko-th_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Turkish (sample file)" href="MultiHPLT/v2/ko-tr_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Ukrainian (sample file)" href="MultiHPLT/v2/ko-uk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Urdu (sample file)" href="MultiHPLT/v2/ko-ur_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Uzbek (sample file)" href="MultiHPLT/v2/ko-uz_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Vietnamese (sample file)" href="MultiHPLT/v2/ko-vi_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Xhosa (sample file)" href="MultiHPLT/v2/ko-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/ko.zip">ko</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/lt.zip">lt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Afrikaans' (0.6M links, 22.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Arabic' (0.7M links, 21.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Azerbaijani' (0.4M links, 13.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Belarusian' (0.6M links, 19.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (4.0M links, 157.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bengali' (0.2M links, 6.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bosnian' (0.2M links, 8.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Catalan' (1.1M links, 45.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Welsh' (0.4M links, 16.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (12.9M links, 539.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Esperanto' (0.2M links, 5.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (2.5M links, 95.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Basque' (0.2M links, 7.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Persian' (0.2M links, 6.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' (3.6M links, 124.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Irish' (0.6M links, 25.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Galician' (0.5M links, 16.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-lt.xml.gz">ces</a></td>
<th>lt</th>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Gujarati' (95.6k links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hebrew' (0.8M links, 23.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hindi' (0.5M links, 20.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' (2.8M links, 109.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' (0.6M links, 22.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Japanese' (0.7M links, 27.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Kazakh' (0.3M links, 9.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Kannada' (78.3k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Korean' (0.9M links, 24.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-lt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="MultiHPLT/v2/lt-lv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Macedonian (sample file)" href="MultiHPLT/v2/lt-mk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Malayalam (sample file)" href="MultiHPLT/v2/lt-ml_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Marathi (sample file)" href="MultiHPLT/v2/lt-mr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Malay (sample file)" href="MultiHPLT/v2/lt-ms_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Maltese (sample file)" href="MultiHPLT/v2/lt-mt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/lt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Nepali (sample file)" href="MultiHPLT/v2/lt-ne_sample.html">view</a></td><th>lt</th>
<td><a rel="nofollow" title="Lithuanian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/lt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Sinhala (sample file)" href="MultiHPLT/v2/lt-si_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="MultiHPLT/v2/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="MultiHPLT/v2/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Albanian (sample file)" href="MultiHPLT/v2/lt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Serbian (sample file)" href="MultiHPLT/v2/lt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swahili (sample file)" href="MultiHPLT/v2/lt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Tamil (sample file)" href="MultiHPLT/v2/lt-ta_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Telugu (sample file)" href="MultiHPLT/v2/lt-te_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Thai (sample file)" href="MultiHPLT/v2/lt-th_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Turkish (sample file)" href="MultiHPLT/v2/lt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Ukrainian (sample file)" href="MultiHPLT/v2/lt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Urdu (sample file)" href="MultiHPLT/v2/lt-ur_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Uzbek (sample file)" href="MultiHPLT/v2/lt-uz_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Vietnamese (sample file)" href="MultiHPLT/v2/lt-vi_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Xhosa (sample file)" href="MultiHPLT/v2/lt-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/lt.zip">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/lv.zip">lv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Afrikaans' (0.6M links, 22.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Arabic' (0.6M links, 20.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Azerbaijani' (0.4M links, 13.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Belarusian' (0.6M links, 20.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (3.8M links, 153.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bengali' (0.1M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bosnian' (0.2M links, 8.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Catalan' (1.2M links, 47.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Welsh' (0.5M links, 18.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-English' (11.3M links, 477.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Esperanto' (0.2M links, 4.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (2.6M links, 99.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Basque' (0.2M links, 8.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Persian' (0.2M links, 6.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' (3.4M links, 121.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Irish' (0.7M links, 28.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Galician' (0.5M links, 18.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-lv.xml.gz">ces</a></td>
<th>lv</th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Gujarati' (96.0k links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hebrew' (0.8M links, 23.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hindi' (0.4M links, 19.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' (2.8M links, 109.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' (0.7M links, 23.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Japanese' (0.6M links, 25.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Kazakh' (0.3M links, 9.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Kannada' (78.4k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Korean' (0.8M links, 24.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (3.9M links, 147.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-lv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Latvian-Macedonian (sample file)" href="MultiHPLT/v2/lv-mk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Malayalam (sample file)" href="MultiHPLT/v2/lv-ml_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Marathi (sample file)" href="MultiHPLT/v2/lv-mr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Malay (sample file)" href="MultiHPLT/v2/lv-ms_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Maltese (sample file)" href="MultiHPLT/v2/lv-mt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/lv-nb_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Nepali (sample file)" href="MultiHPLT/v2/lv-ne_sample.html">view</a></td><th>lv</th>
<td><a rel="nofollow" title="Latvian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/lv-nn_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Sinhala (sample file)" href="MultiHPLT/v2/lv-si_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="MultiHPLT/v2/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="MultiHPLT/v2/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Albanian (sample file)" href="MultiHPLT/v2/lv-sq_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Serbian (sample file)" href="MultiHPLT/v2/lv-sr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swahili (sample file)" href="MultiHPLT/v2/lv-sw_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Tamil (sample file)" href="MultiHPLT/v2/lv-ta_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Telugu (sample file)" href="MultiHPLT/v2/lv-te_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Thai (sample file)" href="MultiHPLT/v2/lv-th_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Turkish (sample file)" href="MultiHPLT/v2/lv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="MultiHPLT/v2/lv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Urdu (sample file)" href="MultiHPLT/v2/lv-ur_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Uzbek (sample file)" href="MultiHPLT/v2/lv-uz_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Vietnamese (sample file)" href="MultiHPLT/v2/lv-vi_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Xhosa (sample file)" href="MultiHPLT/v2/lv-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/lv.zip">lv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/mk.zip">mk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Afrikaans' (0.5M links, 20.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Arabic' (0.3M links, 9.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Azerbaijani' (0.4M links, 12.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Belarusian' (0.6M links, 21.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (1.2M links, 47.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bengali' (0.1M links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (0.2M links, 9.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Catalan' (0.7M links, 29.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Welsh' (0.5M links, 19.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (4.0M links, 182.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Esperanto' (0.2M links, 4.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Estonian' (0.6M links, 20.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Basque' (0.2M links, 6.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Persian' (0.2M links, 5.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Finnish' (0.8M links, 28.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Irish' (0.5M links, 22.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Galician' (0.5M links, 20.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-mk.xml.gz">ces</a></td>
<th>mk</th>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Gujarati' (91.2k links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hebrew' (0.3M links, 7.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hindi' (0.2M links, 10.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (1.0M links, 36.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Icelandic' (0.5M links, 18.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Japanese' (0.2M links, 9.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Kazakh' (0.2M links, 7.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Kannada' (79.8k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Korean' (0.3M links, 7.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Lithuanian' (0.8M links, 27.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Latvian' (0.7M links, 27.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Malayalam (sample file)" href="MultiHPLT/v2/mk-ml_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Marathi (sample file)" href="MultiHPLT/v2/mk-mr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Malay (sample file)" href="MultiHPLT/v2/mk-ms_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Maltese (sample file)" href="MultiHPLT/v2/mk-mt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/mk-nb_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Nepali (sample file)" href="MultiHPLT/v2/mk-ne_sample.html">view</a></td><th>mk</th>
<td><a rel="nofollow" title="Macedonian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/mk-nn_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Sinhala (sample file)" href="MultiHPLT/v2/mk-si_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovak (sample file)" href="MultiHPLT/v2/mk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovenian (sample file)" href="MultiHPLT/v2/mk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="MultiHPLT/v2/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="MultiHPLT/v2/mk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Swahili (sample file)" href="MultiHPLT/v2/mk-sw_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Tamil (sample file)" href="MultiHPLT/v2/mk-ta_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Telugu (sample file)" href="MultiHPLT/v2/mk-te_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Thai (sample file)" href="MultiHPLT/v2/mk-th_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Turkish (sample file)" href="MultiHPLT/v2/mk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Ukrainian (sample file)" href="MultiHPLT/v2/mk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Urdu (sample file)" href="MultiHPLT/v2/mk-ur_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Uzbek (sample file)" href="MultiHPLT/v2/mk-uz_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Vietnamese (sample file)" href="MultiHPLT/v2/mk-vi_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Xhosa (sample file)" href="MultiHPLT/v2/mk-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/mk.zip">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/ml.zip">ml</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Afrikaans' (53.8k links, 2.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Arabic' (86.9k links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Azerbaijani' (52.7k links, 2.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Belarusian' (50.5k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Bulgarian' (0.1M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Bengali' (86.7k links, 6.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Bosnian' (15.2k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Catalan' (66.2k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Welsh' (43.0k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-English' (0.5M links, 38.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Esperanto' (39.7k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Estonian' (51.1k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Basque' (34.2k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Persian' (54.2k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Finnish' (98.3k links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Irish' (41.0k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Galician' (48.9k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-ml.xml.gz">ces</a></td>
<th>ml</th>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Gujarati' (70.1k links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Hebrew' (81.8k links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Hindi' (0.1M links, 9.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Croatian' (91.0k links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Icelandic' (43.4k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Japanese' (59.1k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Kazakh' (43.9k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Kannada' (95.7k links, 6.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Korean' (98.7k links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Lithuanian' (79.4k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Latvian' (72.2k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Macedonian' (58.3k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-ml.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Malayalam-Marathi (sample file)" href="MultiHPLT/v2/ml-mr_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Malay (sample file)" href="MultiHPLT/v2/ml-ms_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Maltese (sample file)" href="MultiHPLT/v2/ml-mt_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/ml-nb_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Nepali (sample file)" href="MultiHPLT/v2/ml-ne_sample.html">view</a></td><th>ml</th>
<td><a rel="nofollow" title="Malayalam-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/ml-nn_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Sinhala (sample file)" href="MultiHPLT/v2/ml-si_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Slovak (sample file)" href="MultiHPLT/v2/ml-sk_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Slovenian (sample file)" href="MultiHPLT/v2/ml-sl_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Albanian (sample file)" href="MultiHPLT/v2/ml-sq_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Serbian (sample file)" href="MultiHPLT/v2/ml-sr_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Swahili (sample file)" href="MultiHPLT/v2/ml-sw_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Tamil (sample file)" href="MultiHPLT/v2/ml-ta_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Telugu (sample file)" href="MultiHPLT/v2/ml-te_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Thai (sample file)" href="MultiHPLT/v2/ml-th_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Turkish (sample file)" href="MultiHPLT/v2/ml-tr_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Ukrainian (sample file)" href="MultiHPLT/v2/ml-uk_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Urdu (sample file)" href="MultiHPLT/v2/ml-ur_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Uzbek (sample file)" href="MultiHPLT/v2/ml-uz_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Vietnamese (sample file)" href="MultiHPLT/v2/ml-vi_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Xhosa (sample file)" href="MultiHPLT/v2/ml-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/ml.zip">ml</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/mr.zip">mr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Afrikaans' (59.6k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Arabic' (96.7k links, 5.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Azerbaijani' (53.3k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Belarusian' (53.4k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Bulgarian' (0.1M links, 6.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Bengali' (0.1M links, 8.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Bosnian' (14.0k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Catalan' (67.6k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Welsh' (50.5k links, 2.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-English' (0.7M links, 47.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Esperanto' (42.8k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Estonian' (54.4k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Basque' (33.7k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Persian' (60.2k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Finnish' (0.1M links, 4.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Irish' (44.4k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Galician' (53.0k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-mr.xml.gz">ces</a></td>
<th>mr</th>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Gujarati' (0.1M links, 8.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Hebrew' (97.7k links, 5.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Hindi' (0.2M links, 15.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Croatian' (91.7k links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Icelandic' (52.9k links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Japanese' (63.8k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Kazakh' (43.6k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Kannada' (82.4k links, 5.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Korean' (0.1M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Lithuanian' (85.6k links, 3.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Latvian' (76.9k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Macedonian' (62.2k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-mr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Malayalam' (66.1k links, 4.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-mr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Marathi-Malay (sample file)" href="MultiHPLT/v2/mr-ms_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Maltese (sample file)" href="MultiHPLT/v2/mr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/mr-nb_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Nepali (sample file)" href="MultiHPLT/v2/mr-ne_sample.html">view</a></td><th>mr</th>
<td><a rel="nofollow" title="Marathi-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/mr-nn_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Sinhala (sample file)" href="MultiHPLT/v2/mr-si_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Slovak (sample file)" href="MultiHPLT/v2/mr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Slovenian (sample file)" href="MultiHPLT/v2/mr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Albanian (sample file)" href="MultiHPLT/v2/mr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Serbian (sample file)" href="MultiHPLT/v2/mr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Swahili (sample file)" href="MultiHPLT/v2/mr-sw_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Tamil (sample file)" href="MultiHPLT/v2/mr-ta_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Telugu (sample file)" href="MultiHPLT/v2/mr-te_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Thai (sample file)" href="MultiHPLT/v2/mr-th_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Turkish (sample file)" href="MultiHPLT/v2/mr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Ukrainian (sample file)" href="MultiHPLT/v2/mr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Urdu (sample file)" href="MultiHPLT/v2/mr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Uzbek (sample file)" href="MultiHPLT/v2/mr-uz_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Vietnamese (sample file)" href="MultiHPLT/v2/mr-vi_sample.html">view</a></td><td><a rel="nofollow" title="Marathi-Xhosa (sample file)" href="MultiHPLT/v2/mr-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/mr.zip">mr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/ms.zip">ms</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Afrikaans' (0.6M links, 24.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Arabic' (0.6M links, 21.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Azerbaijani' (0.4M links, 12.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Belarusian' (0.6M links, 22.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Bulgarian' (1.8M links, 65.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Bengali' (0.2M links, 7.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Bosnian' (0.2M links, 6.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Catalan' (1.1M links, 46.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Welsh' (0.5M links, 21.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-English' (8.4M links, 352.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Esperanto' (0.2M links, 4.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Estonian' (1.0M links, 33.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Basque' (0.2M links, 6.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Persian' (0.2M links, 7.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Finnish' (1.7M links, 54.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Irish' (0.6M links, 25.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Galician' (0.5M links, 19.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-ms.xml.gz">ces</a></td>
<th>ms</th>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Gujarati' (0.1M links, 4.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Hebrew' (0.5M links, 16.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Hindi' (0.6M links, 25.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Croatian' (1.4M links, 51.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Icelandic' (0.5M links, 19.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Japanese' (0.6M links, 24.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Kazakh' (0.3M links, 9.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Kannada' (79.8k links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Korean' (0.7M links, 23.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Lithuanian' (1.4M links, 49.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Latvian' (1.4M links, 48.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Macedonian' (0.6M links, 25.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Malayalam' (46.9k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Marathi' (60.7k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-ms.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Malay-Maltese (sample file)" href="MultiHPLT/v2/ms-mt_sample.html">view</a></td><td><a rel="nofollow" title="Malay-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/ms-nb_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Nepali (sample file)" href="MultiHPLT/v2/ms-ne_sample.html">view</a></td><th>ms</th>
<td><a rel="nofollow" title="Malay-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/ms-nn_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Sinhala (sample file)" href="MultiHPLT/v2/ms-si_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Slovak (sample file)" href="MultiHPLT/v2/ms-sk_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Slovenian (sample file)" href="MultiHPLT/v2/ms-sl_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Albanian (sample file)" href="MultiHPLT/v2/ms-sq_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Serbian (sample file)" href="MultiHPLT/v2/ms-sr_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Swahili (sample file)" href="MultiHPLT/v2/ms-sw_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Tamil (sample file)" href="MultiHPLT/v2/ms-ta_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Telugu (sample file)" href="MultiHPLT/v2/ms-te_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Thai (sample file)" href="MultiHPLT/v2/ms-th_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Turkish (sample file)" href="MultiHPLT/v2/ms-tr_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Ukrainian (sample file)" href="MultiHPLT/v2/ms-uk_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Urdu (sample file)" href="MultiHPLT/v2/ms-ur_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Uzbek (sample file)" href="MultiHPLT/v2/ms-uz_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Vietnamese (sample file)" href="MultiHPLT/v2/ms-vi_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Xhosa (sample file)" href="MultiHPLT/v2/ms-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/ms.zip">ms</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/mt.zip">mt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Afrikaans' (0.1M links, 6.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Arabic' (77.3k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Azerbaijani' (99.1k links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Belarusian' (0.2M links, 7.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bulgarian' (0.8M links, 49.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bengali' (33.3k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bosnian' (32.5k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Catalan' (0.3M links, 12.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Welsh' (0.2M links, 8.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-English' (1.5M links, 97.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Esperanto' (67.7k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Estonian' (0.6M links, 35.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Basque' (69.1k links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Persian' (46.9k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Finnish' (0.7M links, 42.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Irish' (0.3M links, 15.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Galician' (0.2M links, 8.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-mt.xml.gz">ces</a></td>
<th>mt</th>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Gujarati' (29.0k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Hebrew' (71.6k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Hindi' (75.0k links, 3.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Croatian' (0.6M links, 37.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Icelandic' (0.2M links, 7.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Japanese' (66.8k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Kazakh' (66.4k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Kannada' (27.4k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Korean' (83.8k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Lithuanian' (0.7M links, 42.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Latvian' (0.7M links, 44.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Macedonian' (0.2M links, 9.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Malayalam' (16.8k links, 0.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Marathi' (19.1k links, 1.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Malay' (0.2M links, 10.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-mt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Maltese-BokmÃ¥l, Norwegian (sample file)" href="MultiHPLT/v2/mt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Nepali (sample file)" href="MultiHPLT/v2/mt-ne_sample.html">view</a></td><th>mt</th>
<td><a rel="nofollow" title="Maltese-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/mt-nn_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Sinhala (sample file)" href="MultiHPLT/v2/mt-si_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovak (sample file)" href="MultiHPLT/v2/mt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovenian (sample file)" href="MultiHPLT/v2/mt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Albanian (sample file)" href="MultiHPLT/v2/mt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Serbian (sample file)" href="MultiHPLT/v2/mt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swahili (sample file)" href="MultiHPLT/v2/mt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Tamil (sample file)" href="MultiHPLT/v2/mt-ta_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Telugu (sample file)" href="MultiHPLT/v2/mt-te_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Thai (sample file)" href="MultiHPLT/v2/mt-th_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Turkish (sample file)" href="MultiHPLT/v2/mt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Ukrainian (sample file)" href="MultiHPLT/v2/mt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Urdu (sample file)" href="MultiHPLT/v2/mt-ur_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Uzbek (sample file)" href="MultiHPLT/v2/mt-uz_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Vietnamese (sample file)" href="MultiHPLT/v2/mt-vi_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Xhosa (sample file)" href="MultiHPLT/v2/mt-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/mt.zip">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/nb.zip">nb</a></th>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Afrikaans' (0.8M links, 34.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Arabic' (0.8M links, 29.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Azerbaijani' (0.4M links, 14.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Belarusian' (0.7M links, 24.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bulgarian' (3.2M links, 125.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bengali' (0.1M links, 6.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bosnian' (0.3M links, 10.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Catalan' (1.5M links, 61.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Welsh' (0.5M links, 21.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-English' (22.9M links, 938.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Esperanto' (0.3M links, 8.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Estonian' (1.7M links, 59.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Basque' (0.2M links, 8.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Persian' (0.2M links, 8.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Finnish' (5.5M links, 184.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Irish' (1.0M links, 39.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Galician' (0.6M links, 22.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-nb.xml.gz">ces</a></td>
<th>nb</th>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Gujarati' (89.1k links, 3.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hebrew' (0.8M links, 25.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hindi' (0.5M links, 24.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Croatian' (2.7M links, 100.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Icelandic' (0.9M links, 35.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Japanese' (1.0M links, 44.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Kazakh' (0.3M links, 10.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Kannada' (72.5k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Korean' (1.2M links, 38.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Lithuanian' (2.3M links, 84.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Latvian' (2.3M links, 83.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Macedonian' (0.8M links, 31.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Malayalam' (57.0k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Marathi' (66.1k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Malay' (1.6M links, 59.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Maltese' (0.3M links, 12.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-nb.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Nepali (sample file)" href="MultiHPLT/v2/nb-ne_sample.html">view</a></td><th>nb</th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/nb-nn_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Sinhala (sample file)" href="MultiHPLT/v2/nb-si_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovak (sample file)" href="MultiHPLT/v2/nb-sk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovenian (sample file)" href="MultiHPLT/v2/nb-sl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Albanian (sample file)" href="MultiHPLT/v2/nb-sq_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Serbian (sample file)" href="MultiHPLT/v2/nb-sr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Swahili (sample file)" href="MultiHPLT/v2/nb-sw_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Tamil (sample file)" href="MultiHPLT/v2/nb-ta_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Telugu (sample file)" href="MultiHPLT/v2/nb-te_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Thai (sample file)" href="MultiHPLT/v2/nb-th_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Turkish (sample file)" href="MultiHPLT/v2/nb-tr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Ukrainian (sample file)" href="MultiHPLT/v2/nb-uk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Urdu (sample file)" href="MultiHPLT/v2/nb-ur_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Uzbek (sample file)" href="MultiHPLT/v2/nb-uz_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Vietnamese (sample file)" href="MultiHPLT/v2/nb-vi_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Xhosa (sample file)" href="MultiHPLT/v2/nb-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/nb.zip">nb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/ne.zip">ne</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Afrikaans' (49.2k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Arabic' (83.7k links, 3.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Azerbaijani' (47.8k links, 1.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Belarusian' (51.6k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Bulgarian' (0.1M links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Bengali' (79.6k links, 4.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Bosnian' (11.7k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Catalan' (59.5k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Welsh' (47.7k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-English' (0.3M links, 17.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Esperanto' (39.4k links, 0.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Estonian' (47.7k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Basque' (31.5k links, 1.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Persian' (51.0k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Finnish' (83.6k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Irish' (44.1k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Galician' (50.9k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-ne.xml.gz">ces</a></td>
<th>ne</th>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Gujarati' (61.2k links, 3.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Hebrew' (78.3k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Hindi' (0.1M links, 7.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Croatian' (77.6k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Icelandic' (42.8k links, 1.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Japanese' (56.3k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Kazakh' (35.9k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Kannada' (51.0k links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Korean' (90.1k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Lithuanian' (71.5k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Latvian' (67.1k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Macedonian' (57.8k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Malayalam' (38.8k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Marathi' (61.9k links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Malay' (59.9k links, 2.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-Maltese' (17.3k links, 0.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-ne.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-BokmÃ¥l, Norwegian' (63.8k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-ne.xml.gz">ces</a></td>
<th></th>
<th>ne</th>
<td><a rel="nofollow" title="Nepali-Norwegian Nynorsk (sample file)" href="MultiHPLT/v2/ne-nn_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Sinhala (sample file)" href="MultiHPLT/v2/ne-si_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Slovak (sample file)" href="MultiHPLT/v2/ne-sk_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Slovenian (sample file)" href="MultiHPLT/v2/ne-sl_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Albanian (sample file)" href="MultiHPLT/v2/ne-sq_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Serbian (sample file)" href="MultiHPLT/v2/ne-sr_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Swahili (sample file)" href="MultiHPLT/v2/ne-sw_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Tamil (sample file)" href="MultiHPLT/v2/ne-ta_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Telugu (sample file)" href="MultiHPLT/v2/ne-te_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Thai (sample file)" href="MultiHPLT/v2/ne-th_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Turkish (sample file)" href="MultiHPLT/v2/ne-tr_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Ukrainian (sample file)" href="MultiHPLT/v2/ne-uk_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Urdu (sample file)" href="MultiHPLT/v2/ne-ur_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Uzbek (sample file)" href="MultiHPLT/v2/ne-uz_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Vietnamese (sample file)" href="MultiHPLT/v2/ne-vi_sample.html">view</a></td><td><a rel="nofollow" title="Nepali-Xhosa (sample file)" href="MultiHPLT/v2/ne-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/ne.zip">ne</a></th></tr>
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
<th>eo</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>ga</th>
<th>gl</th>
<th></th>
<th>gu</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>is</th>
<th>ja</th>
<th>kk</th>
<th>kn</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>mr</th>
<th>ms</th>
<th>mt</th>
<th>nb</th>
<th>ne</th>
<th></th>
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
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/nn.zip">nn</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Afrikaans' (15.0k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Arabic' (12.7k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Azerbaijani' (6.4k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Belarusian' (15.1k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Bulgarian' (50.2k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Bengali' (6.7k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Bosnian' (14.3k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Catalan' (49.6k links, 2.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Welsh' (8.4k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-English' (0.6M links, 25.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Esperanto' (14.4k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Estonian' (17.4k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Basque' (13.8k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Persian' (7.8k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Finnish' (50.8k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Irish' (5.6k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Galician' (25.1k links, 1.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-nn.xml.gz">ces</a></td>
<th>nn</th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Gujarati' (3.7k links, 92.0k tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Hebrew' (15.7k links, 0.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Hindi' (9.3k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Croatian' (27.4k links, 0.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Icelandic' (8.6k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Japanese' (19.0k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Kazakh' (3.1k links, 77.2k tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Kannada' (2.0k links, 70.9k tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Korean' (19.3k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Lithuanian' (30.6k links, 0.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Latvian' (23.6k links, 0.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Macedonian' (20.9k links, 0.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Malayalam' (1.8k links, 69.8k tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Marathi' (1.3k links, 56.0k tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Malay' (15.7k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Maltese' (2.1k links, 96.8k tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-BokmÃ¥l, Norwegian' (0.1M links, 4.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-nn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian Nynorsk-Nepali' (1.3k links, 33.9k tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-nn.xml.gz">ces</a></td>
<th>nn</th>
<th></th>
<td><a rel="nofollow" title="Norwegian Nynorsk-Sinhala (sample file)" href="MultiHPLT/v2/nn-si_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Slovak (sample file)" href="MultiHPLT/v2/nn-sk_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Slovenian (sample file)" href="MultiHPLT/v2/nn-sl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Albanian (sample file)" href="MultiHPLT/v2/nn-sq_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Serbian (sample file)" href="MultiHPLT/v2/nn-sr_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Swahili (sample file)" href="MultiHPLT/v2/nn-sw_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Tamil (sample file)" href="MultiHPLT/v2/nn-ta_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Telugu (sample file)" href="MultiHPLT/v2/nn-te_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Thai (sample file)" href="MultiHPLT/v2/nn-th_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Turkish (sample file)" href="MultiHPLT/v2/nn-tr_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Ukrainian (sample file)" href="MultiHPLT/v2/nn-uk_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Urdu (sample file)" href="MultiHPLT/v2/nn-ur_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Uzbek (sample file)" href="MultiHPLT/v2/nn-uz_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Vietnamese (sample file)" href="MultiHPLT/v2/nn-vi_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian Nynorsk-Xhosa (sample file)" href="MultiHPLT/v2/nn-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/nn.zip">nn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/si.zip">si</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Afrikaans' (39.4k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Arabic' (65.9k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Azerbaijani' (39.6k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Belarusian' (40.5k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bulgarian' (77.5k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bengali' (55.5k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bosnian' (10.3k links, 0.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Catalan' (50.0k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Welsh' (37.4k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-English' (0.3M links, 13.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Esperanto' (30.2k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Estonian' (39.1k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Basque' (26.7k links, 0.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Persian' (36.8k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Finnish' (62.5k links, 1.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Irish' (34.7k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Galician' (40.2k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-si.xml.gz">ces</a></td>
<th>si</th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Gujarati' (44.4k links, 2.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hebrew' (58.4k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hindi' (69.8k links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Croatian' (62.6k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Icelandic' (30.3k links, 1.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Japanese' (42.6k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Kazakh' (35.9k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Kannada' (43.6k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Korean' (67.0k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Lithuanian' (57.6k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Latvian' (54.1k links, 1.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Macedonian' (45.5k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Malayalam' (39.1k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Marathi' (37.4k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Malay' (49.9k links, 1.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Maltese' (14.9k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-BokmÃ¥l, Norwegian' (45.0k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Nepali' (37.2k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-si.xml.gz">ces</a></td>
<th>si</th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Norwegian Nynorsk' (0.9k links, 17.7k tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-si.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Sinhala-Slovak (sample file)" href="MultiHPLT/v2/si-sk_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Slovenian (sample file)" href="MultiHPLT/v2/si-sl_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Albanian (sample file)" href="MultiHPLT/v2/si-sq_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Serbian (sample file)" href="MultiHPLT/v2/si-sr_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Swahili (sample file)" href="MultiHPLT/v2/si-sw_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Tamil (sample file)" href="MultiHPLT/v2/si-ta_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Telugu (sample file)" href="MultiHPLT/v2/si-te_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Thai (sample file)" href="MultiHPLT/v2/si-th_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Turkish (sample file)" href="MultiHPLT/v2/si-tr_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Ukrainian (sample file)" href="MultiHPLT/v2/si-uk_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Urdu (sample file)" href="MultiHPLT/v2/si-ur_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Uzbek (sample file)" href="MultiHPLT/v2/si-uz_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Vietnamese (sample file)" href="MultiHPLT/v2/si-vi_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Xhosa (sample file)" href="MultiHPLT/v2/si-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/si.zip">si</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/sk.zip">sk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Afrikaans' (0.6M links, 25.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Arabic' (0.9M links, 27.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Azerbaijani' (0.5M links, 14.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Belarusian' (0.7M links, 22.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' (4.6M links, 182.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bengali' (0.2M links, 6.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bosnian' (0.3M links, 11.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Catalan' (1.3M links, 50.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Welsh' (0.5M links, 19.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-English' (20.1M links, 821.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Esperanto' (0.2M links, 4.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' (2.3M links, 87.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Basque' (0.3M links, 8.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Persian' (0.2M links, 8.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' (4.3M links, 147.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Irish' (0.7M links, 30.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Galician' (0.6M links, 21.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-sk.xml.gz">ces</a></td>
<th>sk</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Gujarati' (0.1M links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hebrew' (0.9M links, 26.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hindi' (0.6M links, 23.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' (3.6M links, 136.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' (0.7M links, 26.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Japanese' (0.9M links, 36.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Kazakh' (0.3M links, 10.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Kannada' (89.7k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Korean' (1.1M links, 32.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' (3.6M links, 131.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' (3.4M links, 129.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Macedonian' (0.8M links, 30.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Malayalam' (60.9k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Marathi' (74.6k links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Malay' (1.4M links, 49.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Maltese' (0.7M links, 45.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-BokmÃ¥l, Norwegian' (3.1M links, 112.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Nepali' (58.1k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-sk.xml.gz">ces</a></td>
<th>sk</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Norwegian Nynorsk' (25.9k links, 0.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Sinhala' (45.7k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-sk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="MultiHPLT/v2/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Albanian (sample file)" href="MultiHPLT/v2/sk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Serbian (sample file)" href="MultiHPLT/v2/sk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swahili (sample file)" href="MultiHPLT/v2/sk-sw_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Tamil (sample file)" href="MultiHPLT/v2/sk-ta_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Telugu (sample file)" href="MultiHPLT/v2/sk-te_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Thai (sample file)" href="MultiHPLT/v2/sk-th_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Turkish (sample file)" href="MultiHPLT/v2/sk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="MultiHPLT/v2/sk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Urdu (sample file)" href="MultiHPLT/v2/sk-ur_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Uzbek (sample file)" href="MultiHPLT/v2/sk-uz_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Vietnamese (sample file)" href="MultiHPLT/v2/sk-vi_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Xhosa (sample file)" href="MultiHPLT/v2/sk-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/sk.zip">sk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/sl.zip">sl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Afrikaans' (0.5M links, 20.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Arabic' (0.5M links, 17.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Azerbaijani' (0.4M links, 12.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Belarusian' (0.5M links, 18.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (3.3M links, 141.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bengali' (0.1M links, 4.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bosnian' (0.3M links, 9.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Catalan' (1.1M links, 45.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Welsh' (0.4M links, 17.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (10.3M links, 465.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Esperanto' (0.2M links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (2.0M links, 80.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Basque' (0.2M links, 6.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Persian' (0.2M links, 5.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' (2.8M links, 105.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Irish' (0.6M links, 28.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Galician' (0.5M links, 18.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-sl.xml.gz">ces</a></td>
<th>sl</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Gujarati' (79.2k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hebrew' (0.5M links, 16.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hindi' (0.4M links, 16.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (3.0M links, 120.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (0.5M links, 19.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Japanese' (0.5M links, 21.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Kazakh' (0.3M links, 9.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Kannada' (67.9k links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Korean' (0.6M links, 17.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (2.6M links, 104.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (2.6M links, 106.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Macedonian' (0.7M links, 27.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Malayalam' (47.2k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Marathi' (53.6k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Malay' (1.0M links, 37.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Maltese' (0.7M links, 43.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-BokmÃ¥l, Norwegian' (2.0M links, 77.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Nepali' (46.1k links, 1.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-sl.xml.gz">ces</a></td>
<th>sl</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Norwegian Nynorsk' (23.3k links, 0.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Sinhala' (38.3k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' (3.4M links, 137.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Albanian (sample file)" href="MultiHPLT/v2/sl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Serbian (sample file)" href="MultiHPLT/v2/sl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swahili (sample file)" href="MultiHPLT/v2/sl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Tamil (sample file)" href="MultiHPLT/v2/sl-ta_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Telugu (sample file)" href="MultiHPLT/v2/sl-te_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Thai (sample file)" href="MultiHPLT/v2/sl-th_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Turkish (sample file)" href="MultiHPLT/v2/sl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="MultiHPLT/v2/sl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Urdu (sample file)" href="MultiHPLT/v2/sl-ur_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Uzbek (sample file)" href="MultiHPLT/v2/sl-uz_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Vietnamese (sample file)" href="MultiHPLT/v2/sl-vi_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Xhosa (sample file)" href="MultiHPLT/v2/sl-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/sl.zip">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/sq.zip">sq</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Afrikaans' (0.6M links, 28.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Arabic' (0.3M links, 10.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Azerbaijani' (0.3M links, 13.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Belarusian' (0.6M links, 22.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (1.2M links, 54.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bengali' (0.1M links, 5.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (0.3M links, 14.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Catalan' (0.7M links, 30.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Welsh' (0.4M links, 19.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (4.2M links, 209.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Esperanto' (0.3M links, 8.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Estonian' (0.6M links, 23.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Basque' (0.2M links, 6.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Persian' (0.2M links, 6.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Finnish' (0.9M links, 36.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Irish' (0.5M links, 23.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Galician' (0.5M links, 21.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-sq.xml.gz">ces</a></td>
<th>sq</th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Gujarati' (87.9k links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hebrew' (0.3M links, 10.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hindi' (0.2M links, 11.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (1.0M links, 39.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Icelandic' (0.5M links, 22.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Japanese' (0.2M links, 9.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Kazakh' (0.2M links, 7.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Kannada' (69.7k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Korean' (0.3M links, 12.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Lithuanian' (0.7M links, 28.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Latvian' (0.8M links, 31.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (0.8M links, 36.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Malayalam' (55.3k links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Marathi' (66.3k links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Malay' (0.7M links, 26.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Maltese' (0.2M links, 9.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-BokmÃ¥l, Norwegian' (0.9M links, 41.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Nepali' (55.0k links, 2.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-sq.xml.gz">ces</a></td>
<th>sq</th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Norwegian Nynorsk' (12.4k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Sinhala' (40.4k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovak' (1.0M links, 38.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovenian' (0.7M links, 28.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="MultiHPLT/v2/sq-sr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Swahili (sample file)" href="MultiHPLT/v2/sq-sw_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Tamil (sample file)" href="MultiHPLT/v2/sq-ta_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Telugu (sample file)" href="MultiHPLT/v2/sq-te_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Thai (sample file)" href="MultiHPLT/v2/sq-th_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Turkish (sample file)" href="MultiHPLT/v2/sq-tr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Ukrainian (sample file)" href="MultiHPLT/v2/sq-uk_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Urdu (sample file)" href="MultiHPLT/v2/sq-ur_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Uzbek (sample file)" href="MultiHPLT/v2/sq-uz_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Vietnamese (sample file)" href="MultiHPLT/v2/sq-vi_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Xhosa (sample file)" href="MultiHPLT/v2/sq-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/sq.zip">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/sr.zip">sr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Afrikaans' (0.5M links, 19.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Arabic' (0.4M links, 13.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Azerbaijani' (0.3M links, 11.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Belarusian' (0.6M links, 20.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (1.7M links, 60.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bengali' (0.1M links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (0.5M links, 21.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Catalan' (0.8M links, 34.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Welsh' (0.4M links, 17.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (5.3M links, 224.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Esperanto' (0.2M links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Estonian' (0.7M links, 24.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Basque' (0.2M links, 6.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Persian' (0.2M links, 6.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Finnish' (1.3M links, 41.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Irish' (0.5M links, 20.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Galician' (0.5M links, 19.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-sr.xml.gz">ces</a></td>
<th>sr</th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Gujarati' (84.1k links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Hebrew' (0.4M links, 10.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Hindi' (0.3M links, 14.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (1.4M links, 49.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Icelandic' (0.5M links, 17.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Japanese' (0.4M links, 15.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Kazakh' (0.2M links, 7.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Kannada' (72.9k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Korean' (0.4M links, 12.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Lithuanian' (1.1M links, 37.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Latvian' (1.1M links, 37.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (0.8M links, 28.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Malayalam' (53.7k links, 2.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Marathi' (61.9k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Malay' (0.8M links, 28.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Maltese' (0.2M links, 8.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-BokmÃ¥l, Norwegian' (1.4M links, 51.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Nepali' (51.8k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-sr.xml.gz">ces</a></td>
<th>sr</th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Norwegian Nynorsk' (18.4k links, 0.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Sinhala' (41.0k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovak' (1.6M links, 56.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovenian' (1.0M links, 37.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (0.6M links, 26.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-sr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Swahili (sample file)" href="MultiHPLT/v2/sr-sw_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Tamil (sample file)" href="MultiHPLT/v2/sr-ta_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Telugu (sample file)" href="MultiHPLT/v2/sr-te_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Thai (sample file)" href="MultiHPLT/v2/sr-th_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Turkish (sample file)" href="MultiHPLT/v2/sr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Ukrainian (sample file)" href="MultiHPLT/v2/sr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Urdu (sample file)" href="MultiHPLT/v2/sr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Uzbek (sample file)" href="MultiHPLT/v2/sr-uz_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Vietnamese (sample file)" href="MultiHPLT/v2/sr-vi_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Xhosa (sample file)" href="MultiHPLT/v2/sr-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/sr.zip">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/sw.zip">sw</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Afrikaans' (0.4M links, 18.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Arabic' (0.2M links, 7.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Azerbaijani' (0.2M links, 7.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Belarusian' (0.3M links, 13.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Bulgarian' (0.6M links, 22.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Bengali' (93.2k links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Bosnian' (76.9k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Catalan' (0.4M links, 17.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Welsh' (0.3M links, 12.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-English' (2.0M links, 95.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Esperanto' (0.2M links, 3.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Estonian' (0.3M links, 11.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Basque' (0.1M links, 4.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Persian' (92.9k links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Finnish' (0.5M links, 16.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Irish' (0.3M links, 11.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Galician' (0.2M links, 10.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-sw.xml.gz">ces</a></td>
<th>sw</th>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Gujarati' (77.3k links, 3.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Hebrew' (0.2M links, 5.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Hindi' (0.2M links, 10.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Croatian' (0.4M links, 17.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Icelandic' (0.3M links, 10.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Japanese' (0.1M links, 6.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Kazakh' (0.1M links, 4.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Kannada' (57.4k links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Korean' (0.2M links, 7.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Lithuanian' (0.4M links, 13.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Latvian' (0.4M links, 15.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Macedonian' (0.3M links, 13.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Malayalam' (42.6k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Marathi' (50.9k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Malay' (0.4M links, 17.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Maltese' (0.1M links, 4.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-BokmÃ¥l, Norwegian' (0.5M links, 19.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Nepali' (41.5k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-sw.xml.gz">ces</a></td>
<th>sw</th>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Norwegian Nynorsk' (4.6k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Sinhala' (32.1k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovak' (0.5M links, 17.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovenian' (0.3M links, 13.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Albanian' (0.4M links, 15.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Serbian' (0.3M links, 13.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/sr-sw.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swahili-Tamil (sample file)" href="MultiHPLT/v2/sw-ta_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Telugu (sample file)" href="MultiHPLT/v2/sw-te_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Thai (sample file)" href="MultiHPLT/v2/sw-th_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Turkish (sample file)" href="MultiHPLT/v2/sw-tr_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Ukrainian (sample file)" href="MultiHPLT/v2/sw-uk_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Urdu (sample file)" href="MultiHPLT/v2/sw-ur_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Uzbek (sample file)" href="MultiHPLT/v2/sw-uz_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Vietnamese (sample file)" href="MultiHPLT/v2/sw-vi_sample.html">view</a></td><td><a rel="nofollow" title="Swahili-Xhosa (sample file)" href="MultiHPLT/v2/sw-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/sw.zip">sw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/ta.zip">ta</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Afrikaans' (89.3k links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Arabic' (0.2M links, 8.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Azerbaijani' (77.6k links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Belarusian' (77.6k links, 3.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Bulgarian' (0.2M links, 10.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Bengali' (0.2M links, 11.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Bosnian' (21.5k links, 1.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Catalan' (0.1M links, 5.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Welsh' (69.9k links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-English' (1.1M links, 84.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Esperanto' (56.9k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Estonian' (80.3k links, 3.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Basque' (47.1k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Persian' (93.1k links, 5.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Finnish' (0.2M links, 7.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Irish' (64.2k links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Galician' (73.5k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-ta.xml.gz">ces</a></td>
<th>ta</th>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Gujarati' (0.1M links, 9.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Hebrew' (0.1M links, 6.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Hindi' (0.3M links, 20.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Croatian' (0.1M links, 6.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Icelandic' (75.0k links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Japanese' (0.1M links, 5.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Kazakh' (55.8k links, 2.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Kannada' (0.1M links, 8.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Korean' (0.2M links, 9.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Lithuanian' (0.1M links, 5.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Latvian' (0.1M links, 4.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Macedonian' (97.8k links, 4.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Malayalam' (0.1M links, 7.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Marathi' (0.1M links, 8.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Malay' (0.1M links, 5.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Maltese' (25.6k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-BokmÃ¥l, Norwegian' (0.1M links, 6.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Nepali' (66.9k links, 4.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-ta.xml.gz">ces</a></td>
<th>ta</th>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Norwegian Nynorsk' (3.4k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Sinhala' (55.9k links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Slovak' (0.2M links, 7.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Slovenian' (92.5k links, 4.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Albanian' (0.1M links, 5.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Serbian' (97.1k links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/sr-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Swahili' (83.7k links, 4.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/sw-ta.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Tamil-Telugu (sample file)" href="MultiHPLT/v2/ta-te_sample.html">view</a></td><td><a rel="nofollow" title="Tamil-Thai (sample file)" href="MultiHPLT/v2/ta-th_sample.html">view</a></td><td><a rel="nofollow" title="Tamil-Turkish (sample file)" href="MultiHPLT/v2/ta-tr_sample.html">view</a></td><td><a rel="nofollow" title="Tamil-Ukrainian (sample file)" href="MultiHPLT/v2/ta-uk_sample.html">view</a></td><td><a rel="nofollow" title="Tamil-Urdu (sample file)" href="MultiHPLT/v2/ta-ur_sample.html">view</a></td><td><a rel="nofollow" title="Tamil-Uzbek (sample file)" href="MultiHPLT/v2/ta-uz_sample.html">view</a></td><td><a rel="nofollow" title="Tamil-Vietnamese (sample file)" href="MultiHPLT/v2/ta-vi_sample.html">view</a></td><td><a rel="nofollow" title="Tamil-Xhosa (sample file)" href="MultiHPLT/v2/ta-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/ta.zip">ta</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/te.zip">te</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Afrikaans' (94.2k links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Arabic' (0.1M links, 6.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Azerbaijani' (78.0k links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Belarusian' (86.3k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Bulgarian' (0.2M links, 5.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Bengali' (0.2M links, 9.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Bosnian' (20.1k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Catalan' (0.1M links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Welsh' (77.0k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-English' (0.9M links, 51.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Esperanto' (62.8k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Estonian' (79.3k links, 2.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Basque' (49.4k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Persian' (90.6k links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Finnish' (0.1M links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Irish' (73.1k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Galician' (83.7k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-te.xml.gz">ces</a></td>
<th>te</th>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Gujarati' (0.2M links, 8.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Hebrew' (0.1M links, 5.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Hindi' (0.3M links, 17.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Croatian' (0.1M links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Icelandic' (62.7k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Japanese' (0.1M links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Kazakh' (55.8k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Kannada' (0.2M links, 9.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Korean' (0.2M links, 5.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Lithuanian' (0.1M links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Latvian' (0.1M links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Macedonian' (0.1M links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Malayalam' (0.1M links, 5.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Marathi' (0.1M links, 6.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Malay' (0.1M links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Maltese' (28.4k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-BokmÃ¥l, Norwegian' (0.1M links, 3.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Nepali' (64.1k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-te.xml.gz">ces</a></td>
<th>te</th>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Norwegian Nynorsk' (2.9k links, 97.9k tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Sinhala' (48.2k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Slovak' (0.1M links, 4.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Slovenian' (91.1k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Albanian' (92.4k links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Serbian' (95.0k links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/sr-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Swahili' (69.8k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/sw-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Tamil' (0.2M links, 9.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ta-te.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Telugu-Thai (sample file)" href="MultiHPLT/v2/te-th_sample.html">view</a></td><td><a rel="nofollow" title="Telugu-Turkish (sample file)" href="MultiHPLT/v2/te-tr_sample.html">view</a></td><td><a rel="nofollow" title="Telugu-Ukrainian (sample file)" href="MultiHPLT/v2/te-uk_sample.html">view</a></td><td><a rel="nofollow" title="Telugu-Urdu (sample file)" href="MultiHPLT/v2/te-ur_sample.html">view</a></td><td><a rel="nofollow" title="Telugu-Uzbek (sample file)" href="MultiHPLT/v2/te-uz_sample.html">view</a></td><td><a rel="nofollow" title="Telugu-Vietnamese (sample file)" href="MultiHPLT/v2/te-vi_sample.html">view</a></td><td><a rel="nofollow" title="Telugu-Xhosa (sample file)" href="MultiHPLT/v2/te-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/te.zip">te</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/th.zip">th</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Afrikaans' (0.1M links, 5.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Arabic' (0.6M links, 31.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Azerbaijani' (80.9k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Belarusian' (99.1k links, 3.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Bulgarian' (0.6M links, 22.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Bengali' (0.2M links, 10.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Bosnian' (43.8k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Catalan' (0.2M links, 9.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Welsh' (82.1k links, 3.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-English' (4.1M links, 264.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Esperanto' (41.2k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Estonian' (0.2M links, 8.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Basque' (37.4k links, 1.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Persian' (0.2M links, 8.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Finnish' (0.6M links, 20.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Irish' (80.9k links, 3.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Galician' (83.2k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-th.xml.gz">ces</a></td>
<th>th</th>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Gujarati' (71.1k links, 4.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Hebrew' (0.5M links, 22.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Hindi' (0.5M links, 35.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Croatian' (0.4M links, 15.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Icelandic' (98.9k links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Japanese' (0.6M links, 23.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Kazakh' (51.2k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Kannada' (50.9k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Korean' (0.8M links, 35.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Lithuanian' (0.4M links, 14.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Latvian' (0.3M links, 13.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Macedonian' (0.1M links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Malayalam' (41.1k links, 2.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Marathi' (50.3k links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Malay' (0.3M links, 14.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Maltese' (32.0k links, 1.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-BokmÃ¥l, Norwegian' (0.4M links, 17.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Nepali' (41.6k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-th.xml.gz">ces</a></td>
<th>th</th>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Norwegian Nynorsk' (5.2k links, 0.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Sinhala' (27.3k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Slovak' (0.5M links, 18.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Slovenian' (0.2M links, 10.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Albanian' (0.1M links, 5.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Serbian' (0.2M links, 6.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/sr-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Swahili' (85.9k links, 4.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/sw-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Tamil' (86.5k links, 6.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ta-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Telugu' (62.9k links, 3.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/te-th.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Thai-Turkish (sample file)" href="MultiHPLT/v2/th-tr_sample.html">view</a></td><td><a rel="nofollow" title="Thai-Ukrainian (sample file)" href="MultiHPLT/v2/th-uk_sample.html">view</a></td><td><a rel="nofollow" title="Thai-Urdu (sample file)" href="MultiHPLT/v2/th-ur_sample.html">view</a></td><td><a rel="nofollow" title="Thai-Uzbek (sample file)" href="MultiHPLT/v2/th-uz_sample.html">view</a></td><td><a rel="nofollow" title="Thai-Vietnamese (sample file)" href="MultiHPLT/v2/th-vi_sample.html">view</a></td><td><a rel="nofollow" title="Thai-Xhosa (sample file)" href="MultiHPLT/v2/th-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/th.zip">th</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/tr.zip">tr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Afrikaans' (0.3M links, 12.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Arabic' (2.2M links, 84.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Azerbaijani' (0.2M links, 7.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Belarusian' (0.2M links, 7.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bulgarian' (1.7M links, 55.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bengali' (0.4M links, 19.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bosnian' (0.1M links, 5.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Catalan' (0.5M links, 19.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Welsh' (0.2M links, 6.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (21.6M links, 1.0G tokens)" href="download.php?f=MultiHPLT/v2/xml/en-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Esperanto' (0.2M links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Estonian' (0.6M links, 20.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Basque' (0.1M links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Persian' (0.4M links, 18.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Finnish' (2.0M links, 55.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Irish' (0.2M links, 7.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Galician' (0.2M links, 6.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-tr.xml.gz">ces</a></td>
<th>tr</th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Gujarati' (0.1M links, 6.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hebrew' (2.1M links, 71.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hindi' (1.5M links, 81.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Croatian' (1.1M links, 36.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Icelandic' (0.2M links, 7.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Japanese' (2.3M links, 76.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Kazakh' (0.1M links, 3.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Kannada' (0.1M links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Korean' (3.0M links, 96.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Lithuanian' (1.2M links, 35.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Latvian' (1.0M links, 32.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Macedonian' (0.3M links, 9.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Malayalam' (81.9k links, 4.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Marathi' (93.0k links, 5.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Malay' (0.7M links, 24.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Maltese' (74.4k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-BokmÃ¥l, Norwegian' (1.3M links, 44.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Nepali' (73.0k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-tr.xml.gz">ces</a></td>
<th>tr</th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Norwegian Nynorsk' (15.7k links, 0.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Sinhala' (53.0k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovak' (1.6M links, 47.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovenian' (0.7M links, 25.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Albanian' (0.3M links, 12.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Serbian' (0.4M links, 12.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/sr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Swahili' (0.2M links, 6.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/sw-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Tamil' (0.2M links, 9.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ta-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Telugu' (0.1M links, 5.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/te-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Thai' (0.8M links, 38.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/th-tr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Turkish-Ukrainian (sample file)" href="MultiHPLT/v2/tr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Urdu (sample file)" href="MultiHPLT/v2/tr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Uzbek (sample file)" href="MultiHPLT/v2/tr-uz_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Vietnamese (sample file)" href="MultiHPLT/v2/tr-vi_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Xhosa (sample file)" href="MultiHPLT/v2/tr-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/tr.zip">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/uk.zip">uk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Afrikaans' (0.8M links, 31.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Arabic' (1.1M links, 34.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Azerbaijani' (0.5M links, 16.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Belarusian' (1.2M links, 41.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (3.6M links, 135.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bengali' (0.2M links, 9.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bosnian' (0.3M links, 11.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Catalan' (1.4M links, 58.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Welsh' (0.6M links, 22.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (25.1M links, 1.0G tokens)" href="download.php?f=MultiHPLT/v2/xml/en-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Esperanto' (0.3M links, 7.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Estonian' (1.5M links, 52.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Basque' (0.3M links, 9.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Persian' (0.3M links, 10.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Finnish' (3.1M links, 101.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Irish' (0.6M links, 24.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Galician' (0.6M links, 22.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-uk.xml.gz">ces</a></td>
<th>uk</th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Gujarati' (0.1M links, 4.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hebrew' (1.1M links, 32.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hindi' (0.6M links, 27.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (2.5M links, 90.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Icelandic' (0.8M links, 28.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Japanese' (1.2M links, 45.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Kazakh' (0.3M links, 11.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Kannada' (0.1M links, 3.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Korean' (1.4M links, 41.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Lithuanian' (2.5M links, 87.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Latvian' (2.4M links, 84.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Macedonian' (0.8M links, 31.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Malayalam' (75.2k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Marathi' (86.6k links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Malay' (1.5M links, 53.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Maltese' (0.2M links, 10.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-BokmÃ¥l, Norwegian' (2.7M links, 100.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Nepali' (69.1k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-uk.xml.gz">ces</a></td>
<th>uk</th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Norwegian Nynorsk' (34.8k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Sinhala' (50.3k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovak' (3.2M links, 110.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (1.8M links, 66.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Albanian' (0.9M links, 38.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Serbian' (1.4M links, 48.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/sr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Swahili' (0.5M links, 20.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/sw-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Tamil' (0.1M links, 6.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ta-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Telugu' (0.1M links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/te-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Thai' (0.4M links, 16.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/th-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Turkish' (1.7M links, 52.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/tr-uk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Ukrainian-Urdu (sample file)" href="MultiHPLT/v2/uk-ur_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-Uzbek (sample file)" href="MultiHPLT/v2/uk-uz_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-Vietnamese (sample file)" href="MultiHPLT/v2/uk-vi_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-Xhosa (sample file)" href="MultiHPLT/v2/uk-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/uk.zip">uk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/ur.zip">ur</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Afrikaans' (0.1M links, 5.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Arabic' (0.3M links, 13.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Azerbaijani' (98.4k links, 3.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Belarusian' (0.1M links, 4.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Bulgarian' (0.3M links, 10.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Bengali' (0.2M links, 15.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Bosnian' (26.7k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Catalan' (0.2M links, 6.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Welsh' (0.1M links, 5.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-English' (1.4M links, 92.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Esperanto' (68.7k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Estonian' (0.1M links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Basque' (58.3k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Persian' (0.2M links, 9.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Finnish' (0.2M links, 6.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Irish' (96.3k links, 4.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Galician' (0.1M links, 4.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-ur.xml.gz">ces</a></td>
<th>ur</th>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Gujarati' (0.1M links, 8.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Hebrew' (0.2M links, 9.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Hindi' (0.3M links, 23.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Croatian' (0.2M links, 6.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Icelandic' (92.9k links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Japanese' (0.2M links, 6.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Kazakh' (57.0k links, 2.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Kannada' (97.2k links, 5.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Korean' (0.3M links, 10.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Lithuanian' (0.2M links, 6.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Latvian' (0.2M links, 5.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Macedonian' (0.1M links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Malayalam' (63.6k links, 3.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Marathi' (96.3k links, 6.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Malay' (0.2M links, 7.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Maltese' (45.2k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-BokmÃ¥l, Norwegian' (0.2M links, 7.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Nepali' (75.4k links, 3.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-ur.xml.gz">ces</a></td>
<th>ur</th>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Norwegian Nynorsk' (2.4k links, 84.0k tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Sinhala' (47.6k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Slovak' (0.2M links, 7.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Slovenian' (0.1M links, 4.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Albanian' (0.1M links, 6.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Serbian' (0.1M links, 5.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/sr-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Swahili' (0.1M links, 5.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sw-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Tamil' (0.1M links, 9.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ta-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Telugu' (0.1M links, 6.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/te-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Thai' (0.1M links, 7.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/th-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Turkish' (0.3M links, 12.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/tr-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Ukrainian' (0.2M links, 9.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/uk-ur.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Urdu-Uzbek (sample file)" href="MultiHPLT/v2/ur-uz_sample.html">view</a></td><td><a rel="nofollow" title="Urdu-Vietnamese (sample file)" href="MultiHPLT/v2/ur-vi_sample.html">view</a></td><td><a rel="nofollow" title="Urdu-Xhosa (sample file)" href="MultiHPLT/v2/ur-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/ur.zip">ur</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/uz.zip">uz</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Afrikaans' (0.2M links, 7.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Arabic' (98.2k links, 3.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Azerbaijani' (0.2M links, 6.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Belarusian' (0.2M links, 8.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Bulgarian' (0.3M links, 12.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Bengali' (52.5k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Bosnian' (54.0k links, 2.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Catalan' (0.2M links, 7.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Welsh' (0.1M links, 5.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-English' (1.2M links, 51.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Esperanto' (92.7k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Estonian' (0.2M links, 6.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Basque' (83.5k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Persian' (44.7k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Finnish' (0.2M links, 7.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Irish' (0.1M links, 6.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Galician' (0.1M links, 5.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-uz.xml.gz">ces</a></td>
<th>uz</th>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Gujarati' (45.2k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Hebrew' (72.0k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Hindi' (83.7k links, 4.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Croatian' (0.3M links, 9.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Icelandic' (0.1M links, 5.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Japanese' (66.0k links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Kazakh' (0.2M links, 6.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Kannada' (36.5k links, 1.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Korean' (82.4k links, 2.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Lithuanian' (0.2M links, 8.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Latvian' (0.2M links, 8.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Macedonian' (0.2M links, 7.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Malayalam' (30.3k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Marathi' (35.9k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Malay' (0.2M links, 8.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Maltese' (59.2k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-BokmÃ¥l, Norwegian' (0.2M links, 9.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Nepali' (31.0k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-uz.xml.gz">ces</a></td>
<th>uz</th>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Norwegian Nynorsk' (1.5k links, 60.6k tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Sinhala' (28.0k links, 1.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Slovak' (0.3M links, 11.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Slovenian' (0.2M links, 8.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Albanian' (0.2M links, 8.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Serbian' (0.2M links, 7.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sr-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Swahili' (0.1M links, 5.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/sw-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Tamil' (40.8k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ta-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Telugu' (44.4k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/te-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Thai' (40.0k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/th-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Turkish' (98.4k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/tr-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Ukrainian' (0.3M links, 11.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/uk-uz.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Urdu' (52.4k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ur-uz.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Uzbek-Vietnamese (sample file)" href="MultiHPLT/v2/uz-vi_sample.html">view</a></td><td><a rel="nofollow" title="Uzbek-Xhosa (sample file)" href="MultiHPLT/v2/uz-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/uz.zip">uz</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/vi.zip">vi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Afrikaans' (0.8M links, 40.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/af-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Arabic' (1.2M links, 50.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Azerbaijani' (0.4M links, 16.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Belarusian' (0.7M links, 29.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Bulgarian' (2.4M links, 111.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Bengali' (0.3M links, 14.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Bosnian' (0.2M links, 10.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Catalan' (1.2M links, 62.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Welsh' (0.5M links, 25.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-English' (19.2M links, 985.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Esperanto' (0.3M links, 9.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Estonian' (1.1M links, 47.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Basque' (0.2M links, 8.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Persian' (0.3M links, 14.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Finnish' (2.3M links, 95.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Irish' (0.5M links, 26.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Galician' (0.5M links, 24.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-vi.xml.gz">ces</a></td>
<th>vi</th>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Gujarati' (0.1M links, 5.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Hebrew' (1.1M links, 44.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Hindi' (1.2M links, 65.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Croatian' (1.7M links, 75.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Icelandic' (0.6M links, 26.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Japanese' (1.4M links, 66.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Kazakh' (0.3M links, 11.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Kannada' (83.4k links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Korean' (1.7M links, 65.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Lithuanian' (1.7M links, 70.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Latvian' (1.5M links, 66.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Macedonian' (0.7M links, 31.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Malayalam' (59.2k links, 3.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Marathi' (84.0k links, 4.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Malay' (1.7M links, 77.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Maltese' (0.2M links, 11.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-BokmÃ¥l, Norwegian' (2.1M links, 100.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Nepali' (64.8k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-vi.xml.gz">ces</a></td>
<th>vi</th>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Norwegian Nynorsk' (33.0k links, 1.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Sinhala' (44.7k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Slovak' (2.1M links, 88.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Slovenian' (1.3M links, 58.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Albanian' (0.8M links, 42.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Serbian' (1.0M links, 45.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/sr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Swahili' (0.5M links, 25.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/sw-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Tamil' (0.1M links, 8.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ta-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Telugu' (0.1M links, 4.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/te-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Thai' (0.5M links, 27.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/th-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Turkish' (1.9M links, 76.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/tr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Ukrainian' (2.3M links, 99.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/uk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Urdu' (0.2M links, 10.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ur-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Uzbek' (0.2M links, 10.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/uz-vi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Vietnamese-Xhosa (sample file)" href="MultiHPLT/v2/vi-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/vi.zip">vi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/xml/xh.zip">xh</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Afrikaans' (0 tokens)" href="download.php?f=MultiHPLT/v2/xml/af-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Arabic' (51.7k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/ar-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Azerbaijani' (65.6k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/az-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Belarusian' (61.3k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/be-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Bulgarian' (0.1M links, 4.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/bg-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Bengali' (23.1k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/bn-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Bosnian' (19.5k links, 0.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/bs-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Catalan' (74.7k links, 3.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/ca-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Welsh' (62.2k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/cy-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-English' (0.4M links, 18.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/en-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Esperanto' (0.1M links, 3.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/eo-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Estonian' (88.1k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/et-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Basque' (60.5k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/eu-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Persian' (21.1k links, 0.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/fa-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Finnish' (0.2M links, 7.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/fi-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Irish' (57.0k links, 2.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ga-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Galician' (64.2k links, 2.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/gl-xh.xml.gz">ces</a></td>
<th>xh</th>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Gujarati' (27.0k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/gu-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Hebrew' (88.9k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/he-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Hindi' (35.5k links, 1.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/hi-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Croatian' (0.1M links, 5.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/hr-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Icelandic' (76.1k links, 2.8M tokens)" href="download.php?f=MultiHPLT/v2/xml/is-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Japanese' (27.5k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ja-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Kazakh' (57.0k links, 2.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/kk-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Kannada' (24.8k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/kn-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Korean' (0.1M links, 4.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/ko-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Lithuanian' (98.0k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/lt-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Latvian' (0.1M links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/lv-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Macedonian' (77.6k links, 2.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/mk-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Malayalam' (25.3k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/ml-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Marathi' (22.5k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/mr-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Malay' (60.9k links, 2.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ms-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Maltese' (28.1k links, 1.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/mt-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-BokmÃ¥l, Norwegian' (0.2M links, 6.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/nb-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Nepali' (17.4k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/ne-xh.xml.gz">ces</a></td>
<th>xh</th>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Norwegian Nynorsk' (1.0k links, 37.2k tokens)" href="download.php?f=MultiHPLT/v2/xml/nn-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Sinhala' (17.0k links, 0.6M tokens)" href="download.php?f=MultiHPLT/v2/xml/si-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Slovak' (0.1M links, 4.0M tokens)" href="download.php?f=MultiHPLT/v2/xml/sk-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Slovenian' (92.8k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/sl-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Albanian' (0.2M links, 7.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/sq-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Serbian' (87.6k links, 3.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sr-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Swahili' (0.1M links, 4.2M tokens)" href="download.php?f=MultiHPLT/v2/xml/sw-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Tamil' (25.4k links, 1.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/ta-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Telugu' (27.8k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/te-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Thai' (16.7k links, 0.7M tokens)" href="download.php?f=MultiHPLT/v2/xml/th-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Turkish' (84.8k links, 3.4M tokens)" href="download.php?f=MultiHPLT/v2/xml/tr-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Ukrainian' (0.1M links, 5.5M tokens)" href="download.php?f=MultiHPLT/v2/xml/uk-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Urdu' (25.8k links, 1.1M tokens)" href="download.php?f=MultiHPLT/v2/xml/ur-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Uzbek' (48.6k links, 1.9M tokens)" href="download.php?f=MultiHPLT/v2/xml/uz-xh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-Vietnamese' (0.1M links, 6.3M tokens)" href="download.php?f=MultiHPLT/v2/xml/vi-xh.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=MultiHPLT/v2/raw/xh.zip">xh</a></th></tr>
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
<th>eo</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>ga</th>
<th>gl</th>
<th></th>
<th>gu</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>is</th>
<th>ja</th>
<th>kk</th>
<th>kn</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>mr</th>
<th>ms</th>
<th>mt</th>
<th>nb</th>
<th>ne</th>
<th></th>
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
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized af plain text' href="download.php?f=MultiHPLT/v2/mono/af.tok.gz">af</a>
</th><th><a rel="nofollow" title='monolingual tokenized ar plain text' href="download.php?f=MultiHPLT/v2/mono/ar.tok.gz">ar</a>
</th><th><a rel="nofollow" title='monolingual tokenized az plain text' href="download.php?f=MultiHPLT/v2/mono/az.tok.gz">az</a>
</th><th><a rel="nofollow" title='monolingual tokenized be plain text' href="download.php?f=MultiHPLT/v2/mono/be.tok.gz">be</a>
</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=MultiHPLT/v2/mono/bg.tok.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=MultiHPLT/v2/mono/bn.tok.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs plain text' href="download.php?f=MultiHPLT/v2/mono/bs.tok.gz">bs</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=MultiHPLT/v2/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cy plain text' href="download.php?f=MultiHPLT/v2/mono/cy.tok.gz">cy</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=MultiHPLT/v2/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized eo plain text' href="download.php?f=MultiHPLT/v2/mono/eo.tok.gz">eo</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=MultiHPLT/v2/mono/et.tok.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=MultiHPLT/v2/mono/eu.tok.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fa plain text' href="download.php?f=MultiHPLT/v2/mono/fa.tok.gz">fa</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=MultiHPLT/v2/mono/fi.tok.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized ga plain text' href="download.php?f=MultiHPLT/v2/mono/ga.tok.gz">ga</a>
</th><th><a rel="nofollow" title='monolingual tokenized gl plain text' href="download.php?f=MultiHPLT/v2/mono/gl.tok.gz">gl</a>
</th><th><a rel="nofollow" title='monolingual tokenized gu plain text' href="download.php?f=MultiHPLT/v2/mono/gu.tok.gz">gu</a>
</th><th><a rel="nofollow" title='monolingual tokenized he plain text' href="download.php?f=MultiHPLT/v2/mono/he.tok.gz">he</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=MultiHPLT/v2/mono/hi.tok.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=MultiHPLT/v2/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=MultiHPLT/v2/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized ja plain text' href="download.php?f=MultiHPLT/v2/mono/ja.tok.gz">ja</a>
</th><th><a rel="nofollow" title='monolingual tokenized kk plain text' href="download.php?f=MultiHPLT/v2/mono/kk.tok.gz">kk</a>
</th><th><a rel="nofollow" title='monolingual tokenized kn plain text' href="download.php?f=MultiHPLT/v2/mono/kn.tok.gz">kn</a>
</th><th><a rel="nofollow" title='monolingual tokenized ko plain text' href="download.php?f=MultiHPLT/v2/mono/ko.tok.gz">ko</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=MultiHPLT/v2/mono/lt.tok.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=MultiHPLT/v2/mono/lv.tok.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=MultiHPLT/v2/mono/mk.tok.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ml plain text' href="download.php?f=MultiHPLT/v2/mono/ml.tok.gz">ml</a>
</th><th><a rel="nofollow" title='monolingual tokenized mr plain text' href="download.php?f=MultiHPLT/v2/mono/mr.tok.gz">mr</a>
</th><th><a rel="nofollow" title='monolingual tokenized ms plain text' href="download.php?f=MultiHPLT/v2/mono/ms.tok.gz">ms</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=MultiHPLT/v2/mono/mt.tok.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized nb plain text' href="download.php?f=MultiHPLT/v2/mono/nb.tok.gz">nb</a>
</th><th><a rel="nofollow" title='monolingual tokenized ne plain text' href="download.php?f=MultiHPLT/v2/mono/ne.tok.gz">ne</a>
</th><th><a rel="nofollow" title='monolingual tokenized nn plain text' href="download.php?f=MultiHPLT/v2/mono/nn.tok.gz">nn</a>
</th><th><a rel="nofollow" title='monolingual tokenized si plain text' href="download.php?f=MultiHPLT/v2/mono/si.tok.gz">si</a>
</th><th><a rel="nofollow" title='monolingual tokenized sk plain text' href="download.php?f=MultiHPLT/v2/mono/sk.tok.gz">sk</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=MultiHPLT/v2/mono/sl.tok.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=MultiHPLT/v2/mono/sq.tok.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=MultiHPLT/v2/mono/sr.tok.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized sw plain text' href="download.php?f=MultiHPLT/v2/mono/sw.tok.gz">sw</a>
</th><th><a rel="nofollow" title='monolingual tokenized ta plain text' href="download.php?f=MultiHPLT/v2/mono/ta.tok.gz">ta</a>
</th><th><a rel="nofollow" title='monolingual tokenized te plain text' href="download.php?f=MultiHPLT/v2/mono/te.tok.gz">te</a>
</th><th><a rel="nofollow" title='monolingual tokenized th plain text' href="download.php?f=MultiHPLT/v2/mono/th.tok.gz">th</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=MultiHPLT/v2/mono/tr.tok.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=MultiHPLT/v2/mono/uk.tok.gz">uk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ur plain text' href="download.php?f=MultiHPLT/v2/mono/ur.tok.gz">ur</a>
</th><th><a rel="nofollow" title='monolingual tokenized uz plain text' href="download.php?f=MultiHPLT/v2/mono/uz.tok.gz">uz</a>
</th><th><a rel="nofollow" title='monolingual tokenized vi plain text' href="download.php?f=MultiHPLT/v2/mono/vi.tok.gz">vi</a>
</th><th><a rel="nofollow" title='monolingual tokenized xh plain text' href="download.php?f=MultiHPLT/v2/mono/xh.tok.gz">xh</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized af plain text' href="download.php?f=MultiHPLT/v2/mono/af.txt.gz">af</a>
</th><td>1</td> <td>72.9M</td> <td>3.4M</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Afrikaans-Arabic (273,579 sentence pairs, 8.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-ar.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Afrikaans-Azerbaijani (363,323 sentence pairs, 11.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-az.tmx.gz">0.4M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Afrikaans-Belarusian (535,143 sentence pairs, 18.09M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-be.tmx.gz">0.5M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Afrikaans-Bulgarian (885,445 sentence pairs, 30.47M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-bg.tmx.gz">0.9M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Afrikaans-Bengali (135,151 sentence pairs, 3.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-bn.tmx.gz">0.1M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Afrikaans-Bosnian (102,866 sentence pairs, 3.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-bs.tmx.gz">0.1M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Afrikaans-Catalan (565,090 sentence pairs, 21.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-ca.tmx.gz">0.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Afrikaans-Welsh (409,995 sentence pairs, 16.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-cy.tmx.gz">0.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Afrikaans-English (3,987,340 sentence pairs, 158.98M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-en.tmx.gz">4.0M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Afrikaans-Esperanto (347,111 sentence pairs, 14.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-eo.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Afrikaans-Estonian (440,002 sentence pairs, 14.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-et.tmx.gz">0.4M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Afrikaans-Basque (186,965 sentence pairs, 5.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-eu.tmx.gz">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Afrikaans-Persian (125,201 sentence pairs, 4.60M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-fa.tmx.gz">0.1M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Afrikaans-Finnish (753,224 sentence pairs, 24.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-fi.tmx.gz">0.8M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Afrikaans-Irish (397,195 sentence pairs, 16.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-ga.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Afrikaans-Galician (357,486 sentence pairs, 13.40M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-gl.tmx.gz">0.4M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Afrikaans-Gujarati (87,280 sentence pairs, 2.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-gu.tmx.gz">87.3k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Afrikaans-Hebrew (284,208 sentence pairs, 8.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-he.tmx.gz">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Afrikaans-Hindi (244,904 sentence pairs, 8.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-hi.tmx.gz">0.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Afrikaans-Croatian (675,339 sentence pairs, 23.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-hr.tmx.gz">0.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Afrikaans-Icelandic (343,856 sentence pairs, 12.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-is.tmx.gz">0.3M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Afrikaans-Japanese (209,412 sentence pairs, 3.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-ja.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Afrikaans-Kazakh (178,467 sentence pairs, 5.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-kk.tmx.gz">0.2M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Afrikaans-Kannada (74,410 sentence pairs, 2.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-kn.tmx.gz">74.4k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Afrikaans-Korean (345,197 sentence pairs, 10.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-ko.tmx.gz">0.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Afrikaans-Lithuanian (590,081 sentence pairs, 18.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-lt.tmx.gz">0.6M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Afrikaans-Latvian (564,559 sentence pairs, 18.76M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-lv.tmx.gz">0.6M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Afrikaans-Macedonian (474,709 sentence pairs, 17.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Afrikaans-Malayalam (53,825 sentence pairs, 1.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-ml.tmx.gz">53.8k</a>
</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Afrikaans-Marathi (59,580 sentence pairs, 2.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-mr.tmx.gz">59.6k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Afrikaans-Malay (598,078 sentence pairs, 20.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-ms.tmx.gz">0.6M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Afrikaans-Maltese (142,584 sentence pairs, 5.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-mt.tmx.gz">0.1M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Afrikaans-BokmÃ¥l, Norwegian (817,007 sentence pairs, 29.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-nb.tmx.gz">0.8M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Afrikaans-Nepali (49,246 sentence pairs, 1.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-ne.tmx.gz">49.2k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Afrikaans-Norwegian Nynorsk (14,995 sentence pairs, 0.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-nn.tmx.gz">15.0k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Afrikaans-Sinhala (39,376 sentence pairs, 1.15M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-si.tmx.gz">39.4k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Afrikaans-Slovak (643,157 sentence pairs, 21.32M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Afrikaans-Slovenian (508,371 sentence pairs, 17.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-sl.tmx.gz">0.5M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Afrikaans-Albanian (600,319 sentence pairs, 24.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Afrikaans-Serbian (496,486 sentence pairs, 16.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-sr.tmx.gz">0.5M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Afrikaans-Swahili (420,704 sentence pairs, 16.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-sw.tmx.gz">0.4M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Afrikaans-Tamil (89,264 sentence pairs, 2.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-ta.tmx.gz">89.3k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Afrikaans-Telugu (94,250 sentence pairs, 2.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-te.tmx.gz">94.2k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Afrikaans-Thai (126,303 sentence pairs, 2.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-th.tmx.gz">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Afrikaans-Turkish (330,462 sentence pairs, 10.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-tr.tmx.gz">0.3M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Afrikaans-Ukrainian (783,661 sentence pairs, 26.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-uk.tmx.gz">0.8M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Afrikaans-Urdu (117,177 sentence pairs, 4.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Afrikaans-Uzbek (175,296 sentence pairs, 6.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Afrikaans-Vietnamese (795,085 sentence pairs, 34.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-vi.tmx.gz">0.8M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Afrikaans-Xhosa (173,372 sentence pairs, 6.74M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/af-xh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ar plain text' href="download.php?f=MultiHPLT/v2/mono/ar.txt.gz">ar</a>
</th><td>1</td> <td>431.2M</td> <td>15.8M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Arabic-Afrikaans (273,579 sentence pairs, 8.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-ar.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Arabic-Azerbaijani (226,504 sentence pairs, 6.18M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-az.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Arabic-Belarusian (211,075 sentence pairs, 5.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-be.tmx.gz">0.2M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Arabic-Bulgarian (1,008,683 sentence pairs, 29.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-bg.tmx.gz">1.0M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Arabic-Bengali (382,835 sentence pairs, 13.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-bn.tmx.gz">0.4M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Arabic-Bosnian (102,212 sentence pairs, 2.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-bs.tmx.gz">0.1M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Arabic-Catalan (420,991 sentence pairs, 13.43M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-ca.tmx.gz">0.4M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Arabic-Welsh (180,106 sentence pairs, 6.00M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-cy.tmx.gz">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Arabic-English (17,505,366 sentence pairs, 867.16M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-en.tmx.gz">17.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Arabic-Esperanto (115,861 sentence pairs, 3.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-eo.tmx.gz">0.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Arabic-Estonian (469,313 sentence pairs, 13.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-et.tmx.gz">0.5M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Arabic-Basque (95,956 sentence pairs, 2.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-eu.tmx.gz">96.0k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Arabic-Persian (485,873 sentence pairs, 20.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-fa.tmx.gz">0.5M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Arabic-Finnish (984,131 sentence pairs, 25.04M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-fi.tmx.gz">1.0M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Arabic-Irish (193,823 sentence pairs, 6.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-ga.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Arabic-Galician (186,526 sentence pairs, 5.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-gl.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Arabic-Gujarati (150,384 sentence pairs, 5.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-gu.tmx.gz">0.2M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Arabic-Hebrew (1,486,991 sentence pairs, 45.12M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-he.tmx.gz">1.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Arabic-Hindi (1,215,961 sentence pairs, 50.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-hi.tmx.gz">1.2M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Arabic-Croatian (727,685 sentence pairs, 21.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-hr.tmx.gz">0.7M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Arabic-Icelandic (207,691 sentence pairs, 6.05M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-is.tmx.gz">0.2M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Arabic-Japanese (1,394,007 sentence pairs, 22.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-ja.tmx.gz">1.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Arabic-Kazakh (153,965 sentence pairs, 4.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-kk.tmx.gz">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Arabic-Kannada (118,173 sentence pairs, 3.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-kn.tmx.gz">0.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Arabic-Korean (1,974,409 sentence pairs, 56.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-ko.tmx.gz">2.0M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Arabic-Lithuanian (674,733 sentence pairs, 18.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-lt.tmx.gz">0.7M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Arabic-Latvian (634,184 sentence pairs, 17.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-lv.tmx.gz">0.6M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Arabic-Macedonian (271,787 sentence pairs, 8.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-mk.tmx.gz">0.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Arabic-Malayalam (86,933 sentence pairs, 2.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-ml.tmx.gz">86.9k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Arabic-Marathi (96,746 sentence pairs, 3.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-mr.tmx.gz">96.7k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Arabic-Malay (632,209 sentence pairs, 18.88M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-ms.tmx.gz">0.6M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Arabic-Maltese (77,286 sentence pairs, 2.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-mt.tmx.gz">77.3k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Arabic-BokmÃ¥l, Norwegian (825,670 sentence pairs, 25.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-nb.tmx.gz">0.8M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Arabic-Nepali (83,729 sentence pairs, 3.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-ne.tmx.gz">83.7k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Arabic-Norwegian Nynorsk (12,734 sentence pairs, 0.25M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-nn.tmx.gz">12.7k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Arabic-Sinhala (65,945 sentence pairs, 2.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-si.tmx.gz">65.9k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Arabic-Slovak (855,916 sentence pairs, 23.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-sk.tmx.gz">0.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Arabic-Slovenian (506,511 sentence pairs, 15.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-sl.tmx.gz">0.5M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Arabic-Albanian (264,247 sentence pairs, 8.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Arabic-Serbian (384,933 sentence pairs, 11.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-sr.tmx.gz">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Arabic-Swahili (174,913 sentence pairs, 6.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-sw.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Arabic-Tamil (161,435 sentence pairs, 4.98M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-ta.tmx.gz">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Arabic-Telugu (142,230 sentence pairs, 4.49M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-te.tmx.gz">0.1M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Arabic-Thai (603,112 sentence pairs, 15.85M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-th.tmx.gz">0.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Arabic-Turkish (2,223,680 sentence pairs, 71.07M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-tr.tmx.gz">2.2M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Arabic-Ukrainian (1,056,543 sentence pairs, 28.15M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-uk.tmx.gz">1.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Arabic-Urdu (275,123 sentence pairs, 12.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-ur.tmx.gz">0.3M</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Arabic-Uzbek (98,165 sentence pairs, 3.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-uz.tmx.gz">98.2k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Arabic-Vietnamese (1,203,156 sentence pairs, 44.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-vi.tmx.gz">1.2M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Arabic-Xhosa (51,692 sentence pairs, 1.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ar-xh.tmx.gz">51.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized az plain text' href="download.php?f=MultiHPLT/v2/mono/az.txt.gz">az</a>
</th><td>1</td> <td>54.0M</td> <td>3.0M</td><td bgcolor="#deffc6"><a rel="nofollow" title='Azerbaijani-Afrikaans (363,323 sentence pairs, 11.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-az.txt.zip">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Azerbaijani-Arabic (226,504 sentence pairs, 6.18M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-az.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Azerbaijani-Belarusian (289,431 sentence pairs, 8.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-be.tmx.gz">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Azerbaijani-Bulgarian (584,479 sentence pairs, 16.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-bg.tmx.gz">0.6M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Azerbaijani-Bengali (115,526 sentence pairs, 2.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-bn.tmx.gz">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Azerbaijani-Bosnian (81,985 sentence pairs, 2.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-bs.tmx.gz">82.0k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Azerbaijani-Catalan (317,632 sentence pairs, 10.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-ca.tmx.gz">0.3M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Azerbaijani-Welsh (218,844 sentence pairs, 7.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-cy.tmx.gz">0.2M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Azerbaijani-English (3,188,231 sentence pairs, 114.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-en.tmx.gz">3.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Azerbaijani-Esperanto (137,275 sentence pairs, 4.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-eo.tmx.gz">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Azerbaijani-Estonian (330,996 sentence pairs, 8.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-et.tmx.gz">0.3M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Azerbaijani-Basque (158,912 sentence pairs, 4.07M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-eu.tmx.gz">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Azerbaijani-Persian (110,460 sentence pairs, 3.47M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-fa.tmx.gz">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Azerbaijani-Finnish (431,491 sentence pairs, 10.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-fi.tmx.gz">0.4M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Azerbaijani-Irish (265,179 sentence pairs, 8.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-ga.tmx.gz">0.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Azerbaijani-Galician (253,827 sentence pairs, 7.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-gl.tmx.gz">0.3M</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Azerbaijani-Gujarati (76,658 sentence pairs, 2.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-gu.tmx.gz">76.7k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Azerbaijani-Hebrew (155,464 sentence pairs, 3.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-he.tmx.gz">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Azerbaijani-Hindi (151,662 sentence pairs, 4.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-hi.tmx.gz">0.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Azerbaijani-Croatian (422,781 sentence pairs, 11.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-hr.tmx.gz">0.4M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Azerbaijani-Icelandic (243,430 sentence pairs, 7.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-is.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Azerbaijani-Japanese (130,431 sentence pairs, 1.85M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-ja.tmx.gz">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Azerbaijani-Kazakh (241,749 sentence pairs, 6.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-kk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Azerbaijani-Kannada (66,859 sentence pairs, 1.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-kn.tmx.gz">66.9k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Azerbaijani-Korean (166,910 sentence pairs, 3.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Azerbaijani-Lithuanian (431,074 sentence pairs, 11.40M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Azerbaijani-Latvian (396,632 sentence pairs, 10.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Azerbaijani-Macedonian (350,711 sentence pairs, 10.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-mk.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Azerbaijani-Malayalam (52,720 sentence pairs, 1.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-ml.tmx.gz">52.7k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Azerbaijani-Marathi (53,303 sentence pairs, 1.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-mr.tmx.gz">53.3k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Azerbaijani-Malay (355,284 sentence pairs, 10.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-ms.tmx.gz">0.4M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Azerbaijani-Maltese (99,064 sentence pairs, 2.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-mt.tmx.gz">99.1k</a>
</td><td bgcolor="#deffc7"><a rel="nofollow" title='Azerbaijani-BokmÃ¥l, Norwegian (406,670 sentence pairs, 12.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-nb.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Azerbaijani-Nepali (47,819 sentence pairs, 1.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-ne.tmx.gz">47.8k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Azerbaijani-Norwegian Nynorsk (6,437 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-nn.tmx.gz">6.4k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Azerbaijani-Sinhala (39,557 sentence pairs, 1.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-si.tmx.gz">39.6k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Azerbaijani-Slovak (456,263 sentence pairs, 12.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-sk.tmx.gz">0.5M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Azerbaijani-Slovenian (360,106 sentence pairs, 10.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Azerbaijani-Albanian (342,220 sentence pairs, 11.47M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Azerbaijani-Serbian (342,426 sentence pairs, 9.74M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-sr.tmx.gz">0.3M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Azerbaijani-Swahili (197,010 sentence pairs, 6.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-sw.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Azerbaijani-Tamil (77,559 sentence pairs, 1.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-ta.tmx.gz">77.6k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Azerbaijani-Telugu (77,992 sentence pairs, 1.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-te.tmx.gz">78.0k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Azerbaijani-Thai (80,854 sentence pairs, 1.48M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-th.tmx.gz">80.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Azerbaijani-Turkish (236,623 sentence pairs, 6.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Azerbaijani-Ukrainian (508,708 sentence pairs, 14.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-uk.tmx.gz">0.5M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Azerbaijani-Urdu (98,361 sentence pairs, 3.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-ur.tmx.gz">98.4k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Azerbaijani-Uzbek (189,017 sentence pairs, 5.85M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Azerbaijani-Vietnamese (395,580 sentence pairs, 14.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Azerbaijani-Xhosa (65,592 sentence pairs, 1.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/az-xh.tmx.gz">65.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized be plain text' href="download.php?f=MultiHPLT/v2/mono/be.txt.gz">be</a>
</th><td>1</td> <td>51.6M</td> <td>2.8M</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Belarusian-Afrikaans (535,143 sentence pairs, 18.09M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-be.txt.zip">0.5M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Belarusian-Arabic (211,075 sentence pairs, 5.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-be.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Belarusian-Azerbaijani (289,431 sentence pairs, 8.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-be.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Belarusian-Bulgarian (868,255 sentence pairs, 26.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-bg.tmx.gz">0.9M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Belarusian-Bengali (98,919 sentence pairs, 2.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-bn.tmx.gz">98.9k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Belarusian-Bosnian (92,609 sentence pairs, 2.69M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-bs.tmx.gz">92.6k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Belarusian-Catalan (640,025 sentence pairs, 22.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-ca.tmx.gz">0.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Belarusian-Welsh (409,973 sentence pairs, 14.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-cy.tmx.gz">0.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Belarusian-English (3,140,958 sentence pairs, 108.72M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-en.tmx.gz">3.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Belarusian-Esperanto (207,056 sentence pairs, 6.54M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-eo.tmx.gz">0.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Belarusian-Estonian (474,707 sentence pairs, 13.40M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-et.tmx.gz">0.5M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Belarusian-Basque (165,218 sentence pairs, 4.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-eu.tmx.gz">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Belarusian-Persian (126,202 sentence pairs, 3.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-fa.tmx.gz">0.1M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Belarusian-Finnish (588,800 sentence pairs, 15.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-fi.tmx.gz">0.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Belarusian-Irish (460,205 sentence pairs, 16.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-ga.tmx.gz">0.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Belarusian-Galician (459,850 sentence pairs, 14.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-gl.tmx.gz">0.5M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Belarusian-Gujarati (86,261 sentence pairs, 2.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-gu.tmx.gz">86.3k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Belarusian-Hebrew (191,461 sentence pairs, 4.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-he.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Belarusian-Hindi (226,419 sentence pairs, 6.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-hi.tmx.gz">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Belarusian-Croatian (642,371 sentence pairs, 18.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-hr.tmx.gz">0.6M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Belarusian-Icelandic (370,302 sentence pairs, 11.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-is.tmx.gz">0.4M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Belarusian-Japanese (186,571 sentence pairs, 2.74M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-ja.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Belarusian-Kazakh (177,706 sentence pairs, 4.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-kk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Belarusian-Kannada (78,532 sentence pairs, 1.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-kn.tmx.gz">78.5k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Belarusian-Korean (228,162 sentence pairs, 5.43M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Belarusian-Lithuanian (571,543 sentence pairs, 16.04M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-lt.tmx.gz">0.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Belarusian-Latvian (576,898 sentence pairs, 16.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-lv.tmx.gz">0.6M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Belarusian-Macedonian (561,485 sentence pairs, 18.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-mk.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Belarusian-Malayalam (50,543 sentence pairs, 1.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-ml.tmx.gz">50.5k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Belarusian-Marathi (53,396 sentence pairs, 1.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-mr.tmx.gz">53.4k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Belarusian-Malay (619,544 sentence pairs, 19.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-ms.tmx.gz">0.6M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Belarusian-Maltese (178,310 sentence pairs, 5.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Belarusian-BokmÃ¥l, Norwegian (654,180 sentence pairs, 20.77M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-nb.tmx.gz">0.7M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Belarusian-Nepali (51,606 sentence pairs, 1.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-ne.tmx.gz">51.6k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Belarusian-Norwegian Nynorsk (15,138 sentence pairs, 0.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-nn.tmx.gz">15.1k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Belarusian-Sinhala (40,491 sentence pairs, 1.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-si.tmx.gz">40.5k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Belarusian-Slovak (656,852 sentence pairs, 18.98M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-sk.tmx.gz">0.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Belarusian-Slovenian (508,766 sentence pairs, 15.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-sl.tmx.gz">0.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Belarusian-Albanian (550,889 sentence pairs, 19.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Belarusian-Serbian (580,006 sentence pairs, 17.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-sr.tmx.gz">0.6M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Belarusian-Swahili (342,008 sentence pairs, 11.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-sw.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Belarusian-Tamil (77,560 sentence pairs, 1.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-ta.tmx.gz">77.6k</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Belarusian-Telugu (86,337 sentence pairs, 2.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-te.tmx.gz">86.3k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Belarusian-Thai (99,118 sentence pairs, 1.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-th.tmx.gz">99.1k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Belarusian-Turkish (240,658 sentence pairs, 5.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Belarusian-Ukrainian (1,181,682 sentence pairs, 34.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-uk.tmx.gz">1.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Belarusian-Urdu (107,652 sentence pairs, 3.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Belarusian-Uzbek (221,838 sentence pairs, 6.88M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Belarusian-Vietnamese (657,124 sentence pairs, 25.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-vi.tmx.gz">0.7M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Belarusian-Xhosa (61,308 sentence pairs, 1.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/be-xh.tmx.gz">61.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=MultiHPLT/v2/mono/bg.txt.gz">bg</a>
</th><td>1</td> <td>362.5M</td> <td>17.9M</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Bulgarian-Afrikaans (885,445 sentence pairs, 30.47M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-bg.txt.zip">0.9M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Bulgarian-Arabic (1,008,683 sentence pairs, 29.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-bg.txt.zip">1.0M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Bulgarian-Azerbaijani (584,479 sentence pairs, 16.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-bg.txt.zip">0.6M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Bulgarian-Belarusian (868,255 sentence pairs, 26.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-bg.txt.zip">0.9M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Bengali (304,868 sentence pairs, 7.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-bn.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bulgarian-Bosnian (470,366 sentence pairs, 15.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-bs.tmx.gz">0.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Bulgarian-Catalan (1,732,017 sentence pairs, 61.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-ca.tmx.gz">1.7M</a>
</td><td bgcolor="#d7ffc9"><a rel="nofollow" title='Bulgarian-Welsh (653,972 sentence pairs, 23.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-cy.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-English (22,725,326 sentence pairs, 857.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-en.tmx.gz">22.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bulgarian-Esperanto (378,834 sentence pairs, 12.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-eo.tmx.gz">0.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Estonian (2,808,974 sentence pairs, 94.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-et.tmx.gz">2.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bulgarian-Basque (368,954 sentence pairs, 9.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-eu.tmx.gz">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bulgarian-Persian (374,229 sentence pairs, 11.18M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-fa.tmx.gz">0.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Finnish (4,428,249 sentence pairs, 137.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-fi.tmx.gz">4.4M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Bulgarian-Irish (885,287 sentence pairs, 34.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-ga.tmx.gz">0.9M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Bulgarian-Galician (779,457 sentence pairs, 25.48M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-gl.tmx.gz">0.8M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bulgarian-Gujarati (181,446 sentence pairs, 4.60M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-gu.tmx.gz">0.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Bulgarian-Hebrew (1,109,644 sentence pairs, 29.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-he.tmx.gz">1.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Bulgarian-Hindi (789,435 sentence pairs, 24.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-hi.tmx.gz">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Croatian (4,002,498 sentence pairs, 137.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-hr.tmx.gz">4.0M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Bulgarian-Icelandic (918,618 sentence pairs, 31.15M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-is.tmx.gz">0.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bulgarian-Japanese (921,507 sentence pairs, 15.40M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-ja.tmx.gz">0.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bulgarian-Kazakh (433,961 sentence pairs, 12.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-kk.tmx.gz">0.4M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Bulgarian-Kannada (148,663 sentence pairs, 3.54M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-kn.tmx.gz">0.1M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Bulgarian-Korean (1,253,886 sentence pairs, 32.85M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-ko.tmx.gz">1.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Lithuanian (3,966,381 sentence pairs, 131.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-lt.tmx.gz">4.0M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Bulgarian-Latvian (3,752,571 sentence pairs, 127.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-lv.tmx.gz">3.8M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Bulgarian-Macedonian (1,235,056 sentence pairs, 40.90M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-mk.tmx.gz">1.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Bulgarian-Malayalam (121,007 sentence pairs, 2.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-ml.tmx.gz">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bulgarian-Marathi (132,663 sentence pairs, 3.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-mr.tmx.gz">0.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Bulgarian-Malay (1,762,511 sentence pairs, 55.60M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-ms.tmx.gz">1.8M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Bulgarian-Maltese (792,335 sentence pairs, 35.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-mt.tmx.gz">0.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Bulgarian-BokmÃ¥l, Norwegian (3,226,870 sentence pairs, 106.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-nb.tmx.gz">3.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Bulgarian-Nepali (105,830 sentence pairs, 3.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-ne.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Bulgarian-Norwegian Nynorsk (50,229 sentence pairs, 1.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-nn.tmx.gz">50.2k</a>
</td><td bgcolor="#fbffdc"><a rel="nofollow" title='Bulgarian-Sinhala (77,462 sentence pairs, 2.00M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-si.tmx.gz">77.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Slovak (4,641,880 sentence pairs, 155.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-sk.tmx.gz">4.6M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Bulgarian-Slovenian (3,332,240 sentence pairs, 119.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-sl.tmx.gz">3.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Bulgarian-Albanian (1,249,126 sentence pairs, 46.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-sq.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Bulgarian-Serbian (1,661,412 sentence pairs, 51.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-sr.tmx.gz">1.7M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Bulgarian-Swahili (563,700 sentence pairs, 19.43M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-sw.tmx.gz">0.6M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bulgarian-Tamil (226,188 sentence pairs, 5.74M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-ta.tmx.gz">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Bulgarian-Telugu (176,275 sentence pairs, 4.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-te.tmx.gz">0.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bulgarian-Thai (561,452 sentence pairs, 10.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-th.tmx.gz">0.6M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Bulgarian-Turkish (1,678,888 sentence pairs, 45.88M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-tr.tmx.gz">1.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Bulgarian-Ukrainian (3,607,048 sentence pairs, 112.83M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-uk.tmx.gz">3.6M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bulgarian-Urdu (269,416 sentence pairs, 9.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-ur.tmx.gz">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bulgarian-Uzbek (320,369 sentence pairs, 10.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-uz.tmx.gz">0.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Vietnamese (2,408,771 sentence pairs, 96.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-vi.tmx.gz">2.4M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Bulgarian-Xhosa (119,054 sentence pairs, 3.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bg-xh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=MultiHPLT/v2/mono/bn.txt.gz">bn</a>
</th><td>1</td> <td>87.5M</td> <td>1.9M</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bengali-Afrikaans (135,151 sentence pairs, 3.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-bn.txt.zip">0.1M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Bengali-Arabic (382,835 sentence pairs, 13.35M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-bn.txt.zip">0.4M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Bengali-Azerbaijani (115,526 sentence pairs, 2.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-bn.txt.zip">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Bengali-Belarusian (98,919 sentence pairs, 2.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-bn.txt.zip">98.9k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bengali-Bulgarian (304,868 sentence pairs, 7.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-bn.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Bengali-Bosnian (31,078 sentence pairs, 0.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-bs.tmx.gz">31.1k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bengali-Catalan (128,954 sentence pairs, 3.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-ca.tmx.gz">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Bengali-Welsh (86,657 sentence pairs, 2.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-cy.tmx.gz">86.7k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Bengali-English (2,328,136 sentence pairs, 101.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-en.tmx.gz">2.3M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Bengali-Esperanto (68,375 sentence pairs, 1.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-eo.tmx.gz">68.4k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Bengali-Estonian (92,846 sentence pairs, 2.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-et.tmx.gz">92.8k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Bengali-Basque (56,584 sentence pairs, 1.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-eu.tmx.gz">56.6k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Bengali-Persian (165,157 sentence pairs, 6.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-fa.tmx.gz">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Bengali-Finnish (189,593 sentence pairs, 4.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-fi.tmx.gz">0.2M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Bengali-Irish (81,891 sentence pairs, 2.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-ga.tmx.gz">81.9k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Bengali-Galician (87,949 sentence pairs, 2.40M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-gl.tmx.gz">87.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Bengali-Gujarati (176,082 sentence pairs, 6.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-gu.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Bengali-Hebrew (231,238 sentence pairs, 7.31M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-he.tmx.gz">0.2M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Bengali-Hindi (494,326 sentence pairs, 20.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-hi.tmx.gz">0.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Bengali-Croatian (136,719 sentence pairs, 3.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-hr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Bengali-Icelandic (67,642 sentence pairs, 1.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-is.tmx.gz">67.6k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Bengali-Japanese (218,640 sentence pairs, 3.09M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-ja.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Bengali-Kazakh (70,135 sentence pairs, 1.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-kk.tmx.gz">70.1k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bengali-Kannada (123,684 sentence pairs, 3.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-kn.tmx.gz">0.1M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Bengali-Korean (341,210 sentence pairs, 9.72M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-ko.tmx.gz">0.3M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bengali-Lithuanian (155,870 sentence pairs, 3.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Bengali-Latvian (119,673 sentence pairs, 2.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Bengali-Macedonian (107,253 sentence pairs, 2.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Bengali-Malayalam (86,719 sentence pairs, 2.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-ml.tmx.gz">86.7k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bengali-Marathi (119,317 sentence pairs, 4.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-mr.tmx.gz">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bengali-Malay (176,310 sentence pairs, 4.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Bengali-Maltese (33,344 sentence pairs, 0.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-mt.tmx.gz">33.3k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Bengali-BokmÃ¥l, Norwegian (149,984 sentence pairs, 4.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-nb.tmx.gz">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Bengali-Nepali (79,617 sentence pairs, 3.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-ne.tmx.gz">79.6k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Bengali-Norwegian Nynorsk (6,674 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-nn.tmx.gz">6.7k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Bengali-Sinhala (55,453 sentence pairs, 1.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-si.tmx.gz">55.5k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bengali-Slovak (153,211 sentence pairs, 3.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Bengali-Slovenian (114,334 sentence pairs, 3.05M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-sl.tmx.gz">0.1M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Bengali-Albanian (103,237 sentence pairs, 3.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Bengali-Serbian (109,044 sentence pairs, 2.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-sr.tmx.gz">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Bengali-Swahili (93,166 sentence pairs, 3.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-sw.tmx.gz">93.2k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bengali-Tamil (160,261 sentence pairs, 5.16M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-ta.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bengali-Telugu (156,219 sentence pairs, 5.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-te.tmx.gz">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bengali-Thai (154,526 sentence pairs, 3.85M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-th.tmx.gz">0.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bengali-Turkish (377,008 sentence pairs, 11.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-tr.tmx.gz">0.4M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bengali-Ukrainian (216,577 sentence pairs, 5.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-uk.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bengali-Urdu (232,317 sentence pairs, 10.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Bengali-Uzbek (52,455 sentence pairs, 1.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-uz.tmx.gz">52.5k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bengali-Vietnamese (283,913 sentence pairs, 9.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Bengali-Xhosa (23,127 sentence pairs, 0.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bn-xh.tmx.gz">23.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs plain text' href="download.php?f=MultiHPLT/v2/mono/bs.txt.gz">bs</a>
</th><td>1</td> <td>93.2M</td> <td>4.2M</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Bosnian-Afrikaans (102,866 sentence pairs, 3.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-bs.txt.zip">0.1M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Bosnian-Arabic (102,212 sentence pairs, 2.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-bs.txt.zip">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Bosnian-Azerbaijani (81,985 sentence pairs, 2.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-bs.txt.zip">82.0k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Bosnian-Belarusian (92,609 sentence pairs, 2.69M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-bs.txt.zip">92.6k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bosnian-Bulgarian (470,366 sentence pairs, 15.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-bs.txt.zip">0.5M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Bosnian-Bengali (31,078 sentence pairs, 0.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-bs.txt.zip">31.1k</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Bosnian-Catalan (177,997 sentence pairs, 6.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-ca.tmx.gz">0.2M</a>
</td><td bgcolor="#faffdb"><a rel="nofollow" title='Bosnian-Welsh (60,298 sentence pairs, 2.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-cy.tmx.gz">60.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bosnian-English (4,559,328 sentence pairs, 196.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-en.tmx.gz">4.6M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Bosnian-Esperanto (49,742 sentence pairs, 1.49M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-eo.tmx.gz">49.7k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bosnian-Estonian (172,717 sentence pairs, 5.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-et.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Bosnian-Basque (44,347 sentence pairs, 1.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-eu.tmx.gz">44.3k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Bosnian-Persian (51,756 sentence pairs, 1.61M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-fa.tmx.gz">51.8k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bosnian-Finnish (295,269 sentence pairs, 8.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-fi.tmx.gz">0.3M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Bosnian-Irish (67,929 sentence pairs, 2.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-ga.tmx.gz">67.9k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Bosnian-Galician (81,760 sentence pairs, 2.61M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-gl.tmx.gz">81.8k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Bosnian-Gujarati (18,811 sentence pairs, 0.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-gu.tmx.gz">18.8k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Bosnian-Hebrew (93,242 sentence pairs, 2.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-he.tmx.gz">93.2k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Bosnian-Hindi (54,433 sentence pairs, 1.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-hi.tmx.gz">54.4k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bosnian-Croatian (354,788 sentence pairs, 11.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-hr.tmx.gz">0.4M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Bosnian-Icelandic (84,384 sentence pairs, 2.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-is.tmx.gz">84.4k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Bosnian-Japanese (67,899 sentence pairs, 1.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-ja.tmx.gz">67.9k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Bosnian-Kazakh (58,181 sentence pairs, 1.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-kk.tmx.gz">58.2k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Bosnian-Kannada (16,869 sentence pairs, 0.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-kn.tmx.gz">16.9k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Bosnian-Korean (83,054 sentence pairs, 1.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-ko.tmx.gz">83.1k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Bosnian-Lithuanian (243,852 sentence pairs, 7.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Bosnian-Latvian (226,928 sentence pairs, 6.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bosnian-Macedonian (214,541 sentence pairs, 7.83M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Bosnian-Malayalam (15,233 sentence pairs, 0.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-ml.tmx.gz">15.2k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Bosnian-Marathi (14,005 sentence pairs, 0.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-mr.tmx.gz">14.0k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bosnian-Malay (169,127 sentence pairs, 5.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Bosnian-Maltese (32,505 sentence pairs, 1.05M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-mt.tmx.gz">32.5k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bosnian-BokmÃ¥l, Norwegian (263,531 sentence pairs, 8.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-nb.tmx.gz">0.3M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Bosnian-Nepali (11,691 sentence pairs, 0.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-ne.tmx.gz">11.7k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Bosnian-Norwegian Nynorsk (14,312 sentence pairs, 0.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-nn.tmx.gz">14.3k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Bosnian-Sinhala (10,317 sentence pairs, 0.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-si.tmx.gz">10.3k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Bosnian-Slovak (316,048 sentence pairs, 9.77M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bosnian-Slovenian (259,695 sentence pairs, 8.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-Albanian (288,297 sentence pairs, 12.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Bosnian-Serbian (453,381 sentence pairs, 18.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-sr.tmx.gz">0.5M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Bosnian-Swahili (76,948 sentence pairs, 2.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-sw.tmx.gz">76.9k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Bosnian-Tamil (21,502 sentence pairs, 0.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-ta.tmx.gz">21.5k</a>
</td><td bgcolor="#fff5ef"><a rel="nofollow" title='Bosnian-Telugu (20,115 sentence pairs, 0.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-te.tmx.gz">20.1k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Bosnian-Thai (43,773 sentence pairs, 0.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-th.tmx.gz">43.8k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Bosnian-Turkish (145,974 sentence pairs, 4.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bosnian-Ukrainian (300,751 sentence pairs, 9.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Bosnian-Urdu (26,666 sentence pairs, 0.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-ur.tmx.gz">26.7k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Bosnian-Uzbek (53,974 sentence pairs, 1.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-uz.tmx.gz">54.0k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bosnian-Vietnamese (225,238 sentence pairs, 9.16M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Bosnian-Xhosa (19,507 sentence pairs, 0.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/bs-xh.tmx.gz">19.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=MultiHPLT/v2/mono/ca.txt.gz">ca</a>
</th><td>1</td> <td>290.9M</td> <td>11.6M</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Catalan-Afrikaans (565,090 sentence pairs, 21.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-ca.txt.zip">0.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Catalan-Arabic (420,991 sentence pairs, 13.43M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-ca.txt.zip">0.4M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Catalan-Azerbaijani (317,632 sentence pairs, 10.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-ca.txt.zip">0.3M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Catalan-Belarusian (640,025 sentence pairs, 22.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-ca.txt.zip">0.6M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Catalan-Bulgarian (1,732,017 sentence pairs, 61.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-ca.txt.zip">1.7M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Catalan-Bengali (128,954 sentence pairs, 3.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-ca.txt.zip">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Catalan-Bosnian (177,997 sentence pairs, 6.19M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-ca.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Catalan-Welsh (584,201 sentence pairs, 23.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-cy.tmx.gz">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Catalan-English (13,080,859 sentence pairs, 569.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-en.tmx.gz">13.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Catalan-Esperanto (301,041 sentence pairs, 11.12M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-eo.tmx.gz">0.3M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Catalan-Estonian (866,328 sentence pairs, 28.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-et.tmx.gz">0.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Catalan-Basque (444,291 sentence pairs, 15.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-eu.tmx.gz">0.4M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Catalan-Persian (181,769 sentence pairs, 6.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-fa.tmx.gz">0.2M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Catalan-Finnish (1,382,878 sentence pairs, 43.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-fi.tmx.gz">1.4M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Catalan-Irish (589,370 sentence pairs, 24.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-ga.tmx.gz">0.6M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Catalan-Galician (974,793 sentence pairs, 39.76M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-gl.tmx.gz">1.0M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Catalan-Gujarati (110,508 sentence pairs, 3.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-gu.tmx.gz">0.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Catalan-Hebrew (431,054 sentence pairs, 12.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-he.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Catalan-Hindi (366,546 sentence pairs, 13.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-hi.tmx.gz">0.4M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Catalan-Croatian (1,163,851 sentence pairs, 41.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-hr.tmx.gz">1.2M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Catalan-Icelandic (561,470 sentence pairs, 19.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-is.tmx.gz">0.6M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Catalan-Japanese (413,414 sentence pairs, 7.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-ja.tmx.gz">0.4M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Catalan-Kazakh (214,323 sentence pairs, 6.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-kk.tmx.gz">0.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Catalan-Kannada (101,480 sentence pairs, 2.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-kn.tmx.gz">0.1M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Catalan-Korean (506,045 sentence pairs, 14.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-ko.tmx.gz">0.5M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Catalan-Lithuanian (1,144,701 sentence pairs, 38.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-lt.tmx.gz">1.1M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Catalan-Latvian (1,181,748 sentence pairs, 39.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-lv.tmx.gz">1.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Catalan-Macedonian (676,990 sentence pairs, 25.00M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-mk.tmx.gz">0.7M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Catalan-Malayalam (66,182 sentence pairs, 1.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-ml.tmx.gz">66.2k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Catalan-Marathi (67,579 sentence pairs, 2.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-mr.tmx.gz">67.6k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Catalan-Malay (1,094,617 sentence pairs, 39.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-ms.tmx.gz">1.1M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Catalan-Maltese (265,608 sentence pairs, 9.74M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Catalan-BokmÃ¥l, Norwegian (1,460,183 sentence pairs, 52.72M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-nb.tmx.gz">1.5M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Catalan-Nepali (59,463 sentence pairs, 1.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-ne.tmx.gz">59.5k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Catalan-Norwegian Nynorsk (49,583 sentence pairs, 1.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-nn.tmx.gz">49.6k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Catalan-Sinhala (50,004 sentence pairs, 1.49M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-si.tmx.gz">50.0k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Catalan-Slovak (1,284,858 sentence pairs, 43.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-sk.tmx.gz">1.3M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Catalan-Slovenian (1,077,438 sentence pairs, 38.31M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-sl.tmx.gz">1.1M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Catalan-Albanian (659,120 sentence pairs, 26.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Catalan-Serbian (837,250 sentence pairs, 29.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-sr.tmx.gz">0.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Catalan-Swahili (393,393 sentence pairs, 14.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-sw.tmx.gz">0.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Catalan-Tamil (107,872 sentence pairs, 3.09M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Catalan-Telugu (110,391 sentence pairs, 3.16M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-te.tmx.gz">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Catalan-Thai (197,939 sentence pairs, 4.61M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-th.tmx.gz">0.2M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Catalan-Turkish (535,898 sentence pairs, 16.00M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-tr.tmx.gz">0.5M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Catalan-Ukrainian (1,425,247 sentence pairs, 48.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-uk.tmx.gz">1.4M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Catalan-Urdu (154,800 sentence pairs, 5.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Catalan-Uzbek (179,255 sentence pairs, 6.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Catalan-Vietnamese (1,233,926 sentence pairs, 55.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-vi.tmx.gz">1.2M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Catalan-Xhosa (74,710 sentence pairs, 2.47M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ca-xh.tmx.gz">74.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cy plain text' href="download.php?f=MultiHPLT/v2/mono/cy.txt.gz">cy</a>
</th><td>1</td> <td>78.7M</td> <td>3.4M</td><td bgcolor="#daffc6"><a rel="nofollow" title='Welsh-Afrikaans (409,995 sentence pairs, 16.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-cy.txt.zip">0.4M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Welsh-Arabic (180,106 sentence pairs, 6.00M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-cy.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Welsh-Azerbaijani (218,844 sentence pairs, 7.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-cy.txt.zip">0.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Welsh-Belarusian (409,973 sentence pairs, 14.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-cy.txt.zip">0.4M</a>
</td><td bgcolor="#d7ffc9"><a rel="nofollow" title='Welsh-Bulgarian (653,972 sentence pairs, 23.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-cy.txt.zip">0.7M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Welsh-Bengali (86,657 sentence pairs, 2.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-cy.txt.zip">86.7k</a>
</td><td bgcolor="#faffdb"><a rel="nofollow" title='Welsh-Bosnian (60,298 sentence pairs, 2.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-cy.txt.zip">60.3k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Welsh-Catalan (584,201 sentence pairs, 23.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-cy.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Welsh-English (3,867,402 sentence pairs, 160.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-en.tmx.gz">3.9M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Welsh-Esperanto (205,290 sentence pairs, 7.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-eo.tmx.gz">0.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Welsh-Estonian (337,128 sentence pairs, 11.18M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-et.tmx.gz">0.3M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Welsh-Basque (160,771 sentence pairs, 4.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-eu.tmx.gz">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Welsh-Persian (97,877 sentence pairs, 3.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-fa.tmx.gz">97.9k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Welsh-Finnish (423,264 sentence pairs, 13.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-fi.tmx.gz">0.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Welsh-Irish (459,499 sentence pairs, 19.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-ga.tmx.gz">0.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Welsh-Galician (393,349 sentence pairs, 14.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-gl.tmx.gz">0.4M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Welsh-Gujarati (79,154 sentence pairs, 2.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-gu.tmx.gz">79.2k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Welsh-Hebrew (146,490 sentence pairs, 4.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-he.tmx.gz">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Welsh-Hindi (161,323 sentence pairs, 6.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-hi.tmx.gz">0.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Welsh-Croatian (470,917 sentence pairs, 16.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-hr.tmx.gz">0.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Welsh-Icelandic (346,469 sentence pairs, 12.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-is.tmx.gz">0.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Welsh-Japanese (133,958 sentence pairs, 2.60M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-ja.tmx.gz">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Welsh-Kazakh (116,164 sentence pairs, 3.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-kk.tmx.gz">0.1M</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Welsh-Kannada (69,197 sentence pairs, 2.05M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-kn.tmx.gz">69.2k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Welsh-Korean (170,548 sentence pairs, 5.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Welsh-Lithuanian (422,266 sentence pairs, 14.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Welsh-Latvian (456,402 sentence pairs, 15.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-lv.tmx.gz">0.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Welsh-Macedonian (453,048 sentence pairs, 17.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Welsh-Malayalam (42,959 sentence pairs, 1.25M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-ml.tmx.gz">43.0k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Welsh-Marathi (50,484 sentence pairs, 1.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-mr.tmx.gz">50.5k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Welsh-Malay (507,253 sentence pairs, 18.48M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-ms.tmx.gz">0.5M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Welsh-Maltese (182,572 sentence pairs, 6.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Welsh-BokmÃ¥l, Norwegian (516,604 sentence pairs, 18.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-nb.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Welsh-Nepali (47,701 sentence pairs, 1.61M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-ne.tmx.gz">47.7k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Welsh-Norwegian Nynorsk (8,428 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-nn.tmx.gz">8.4k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Welsh-Sinhala (37,422 sentence pairs, 1.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-si.tmx.gz">37.4k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Welsh-Slovak (504,361 sentence pairs, 17.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-sk.tmx.gz">0.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Welsh-Slovenian (412,519 sentence pairs, 14.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Welsh-Albanian (429,672 sentence pairs, 17.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-sq.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Welsh-Serbian (424,258 sentence pairs, 15.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-sr.tmx.gz">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Welsh-Swahili (287,684 sentence pairs, 11.15M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-sw.tmx.gz">0.3M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Welsh-Tamil (69,866 sentence pairs, 2.09M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-ta.tmx.gz">69.9k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Welsh-Telugu (77,006 sentence pairs, 2.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-te.tmx.gz">77.0k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Welsh-Thai (82,121 sentence pairs, 1.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-th.tmx.gz">82.1k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Welsh-Turkish (175,837 sentence pairs, 5.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Welsh-Ukrainian (552,311 sentence pairs, 18.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-uk.tmx.gz">0.6M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Welsh-Urdu (118,906 sentence pairs, 4.76M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Welsh-Uzbek (130,903 sentence pairs, 4.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-uz.tmx.gz">0.1M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Welsh-Vietnamese (507,274 sentence pairs, 23.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-vi.tmx.gz">0.5M</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Welsh-Xhosa (62,168 sentence pairs, 2.07M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/cy-xh.tmx.gz">62.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=MultiHPLT/v2/mono/en.txt.gz">en</a>
</th><td>1</td> <td>5.0G</td> <td>239.4M</td><td></td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='English-Azerbaijani (3,188,231 sentence pairs, 114.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-en.txt.zip">3.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='English-Esperanto (1,521,821 sentence pairs, 64.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-eo.tmx.gz">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Estonian (8,797,574 sentence pairs, 314.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-et.tmx.gz">8.8M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Basque (1,491,873 sentence pairs, 55.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-eu.tmx.gz">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Persian (3,448,296 sentence pairs, 176.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-fa.tmx.gz">3.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Finnish (29,067,875 sentence pairs, 919.47M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-fi.tmx.gz">29.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='English-Irish (2,697,582 sentence pairs, 111.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-ga.tmx.gz">2.7M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='English-Galician (2,783,727 sentence pairs, 115.15M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-gl.tmx.gz">2.8M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='English-Gujarati (716,777 sentence pairs, 32.54M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-gu.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hebrew (8,686,089 sentence pairs, 349.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-he.tmx.gz">8.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hindi (9,926,620 sentence pairs, 480.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-hi.tmx.gz">9.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Croatian (14,263,908 sentence pairs, 532.12M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-hr.tmx.gz">14.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='English-Icelandic (2,694,541 sentence pairs, 98.54M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-is.tmx.gz">2.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Japanese (18,894,019 sentence pairs, 360.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-ja.tmx.gz">18.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-Kazakh (1,943,935 sentence pairs, 69.90M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-kk.tmx.gz">1.9M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='English-Kannada (720,157 sentence pairs, 30.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-kn.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Korean (18,393,859 sentence pairs, 652.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-ko.tmx.gz">18.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Lithuanian (12,881,354 sentence pairs, 458.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-lt.tmx.gz">12.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Latvian (11,294,618 sentence pairs, 405.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-lv.tmx.gz">11.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Macedonian (3,991,617 sentence pairs, 158.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-mk.tmx.gz">4.0M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='English-Malayalam (547,168 sentence pairs, 22.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-ml.tmx.gz">0.5M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='English-Marathi (656,962 sentence pairs, 31.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-mr.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Malay (8,432,285 sentence pairs, 302.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-ms.tmx.gz">8.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-Maltese (1,529,471 sentence pairs, 70.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-mt.tmx.gz">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-BokmÃ¥l, Norwegian (22,912,722 sentence pairs, 816.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-nb.tmx.gz">22.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='English-Nepali (317,120 sentence pairs, 14.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-ne.tmx.gz">0.3M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='English-Norwegian Nynorsk (563,791 sentence pairs, 22.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-nn.tmx.gz">0.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='English-Sinhala (273,430 sentence pairs, 12.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-si.tmx.gz">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Slovak (20,056,339 sentence pairs, 711.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-sk.tmx.gz">20.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Slovenian (10,336,528 sentence pairs, 401.09M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-sl.tmx.gz">10.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Albanian (4,166,536 sentence pairs, 182.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-sq.tmx.gz">4.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Serbian (5,291,686 sentence pairs, 192.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-sr.tmx.gz">5.3M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='English-Swahili (1,985,899 sentence pairs, 82.49M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-sw.tmx.gz">2.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='English-Tamil (1,111,471 sentence pairs, 46.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-ta.tmx.gz">1.1M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='English-Telugu (902,962 sentence pairs, 37.74M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-te.tmx.gz">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Thai (4,088,354 sentence pairs, 134.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-th.tmx.gz">4.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Turkish (21,616,652 sentence pairs, 858.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-tr.tmx.gz">21.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Ukrainian (25,125,019 sentence pairs, 872.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-uk.tmx.gz">25.1M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='English-Urdu (1,399,893 sentence pairs, 82.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-ur.tmx.gz">1.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='English-Uzbek (1,159,869 sentence pairs, 43.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-uz.tmx.gz">1.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Vietnamese (19,231,770 sentence pairs, 864.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-vi.tmx.gz">19.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='English-Xhosa (405,605 sentence pairs, 14.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/en-xh.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eo plain text' href="download.php?f=MultiHPLT/v2/mono/eo.txt.gz">eo</a>
</th><td>1</td> <td>23.6M</td> <td>1.1M</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Esperanto-Afrikaans (347,111 sentence pairs, 14.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-eo.txt.zip">0.3M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Esperanto-Arabic (115,861 sentence pairs, 3.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-eo.txt.zip">0.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Esperanto-Azerbaijani (137,275 sentence pairs, 4.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-eo.txt.zip">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Esperanto-Belarusian (207,056 sentence pairs, 6.54M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-eo.txt.zip">0.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Esperanto-Bulgarian (378,834 sentence pairs, 12.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-eo.txt.zip">0.4M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Esperanto-Bengali (68,375 sentence pairs, 1.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-eo.txt.zip">68.4k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Esperanto-Bosnian (49,742 sentence pairs, 1.49M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-eo.txt.zip">49.7k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Esperanto-Catalan (301,041 sentence pairs, 11.12M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-eo.txt.zip">0.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Esperanto-Welsh (205,290 sentence pairs, 7.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-eo.txt.zip">0.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Esperanto-English (1,521,821 sentence pairs, 64.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/en-eo.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Esperanto-Estonian (169,394 sentence pairs, 5.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-et.tmx.gz">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Esperanto-Basque (139,466 sentence pairs, 4.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-eu.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Esperanto-Persian (56,444 sentence pairs, 1.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-fa.tmx.gz">56.4k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Esperanto-Finnish (361,730 sentence pairs, 12.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-fi.tmx.gz">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Esperanto-Irish (172,371 sentence pairs, 6.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-ga.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Esperanto-Galician (205,338 sentence pairs, 7.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-gl.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Esperanto-Gujarati (65,174 sentence pairs, 1.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-gu.tmx.gz">65.2k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Esperanto-Hebrew (152,616 sentence pairs, 5.04M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-he.tmx.gz">0.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Esperanto-Hindi (92,282 sentence pairs, 3.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-hi.tmx.gz">92.3k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Esperanto-Croatian (280,201 sentence pairs, 9.74M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-hr.tmx.gz">0.3M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Esperanto-Icelandic (158,922 sentence pairs, 5.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-is.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Esperanto-Japanese (70,921 sentence pairs, 1.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-ja.tmx.gz">70.9k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Esperanto-Kazakh (92,828 sentence pairs, 2.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-kk.tmx.gz">92.8k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Esperanto-Kannada (56,960 sentence pairs, 1.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-kn.tmx.gz">57.0k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Esperanto-Korean (188,164 sentence pairs, 6.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Esperanto-Lithuanian (241,606 sentence pairs, 7.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Esperanto-Latvian (231,556 sentence pairs, 7.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Esperanto-Macedonian (193,126 sentence pairs, 6.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Esperanto-Malayalam (39,689 sentence pairs, 1.09M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-ml.tmx.gz">39.7k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Esperanto-Marathi (42,844 sentence pairs, 1.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-mr.tmx.gz">42.8k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Esperanto-Malay (202,070 sentence pairs, 6.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Esperanto-Maltese (67,670 sentence pairs, 2.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-mt.tmx.gz">67.7k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Esperanto-BokmÃ¥l, Norwegian (319,833 sentence pairs, 11.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-nb.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Esperanto-Nepali (39,398 sentence pairs, 1.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-ne.tmx.gz">39.4k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Esperanto-Norwegian Nynorsk (14,418 sentence pairs, 0.47M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-nn.tmx.gz">14.4k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Esperanto-Sinhala (30,240 sentence pairs, 0.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-si.tmx.gz">30.2k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Esperanto-Slovak (230,381 sentence pairs, 7.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Esperanto-Slovenian (171,146 sentence pairs, 5.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Esperanto-Albanian (305,200 sentence pairs, 12.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Esperanto-Serbian (197,030 sentence pairs, 6.32M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Esperanto-Swahili (161,361 sentence pairs, 5.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-sw.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Esperanto-Tamil (56,943 sentence pairs, 1.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-ta.tmx.gz">56.9k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Esperanto-Telugu (62,791 sentence pairs, 1.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-te.tmx.gz">62.8k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Esperanto-Thai (41,158 sentence pairs, 0.90M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-th.tmx.gz">41.2k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Esperanto-Turkish (157,942 sentence pairs, 5.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Esperanto-Ukrainian (325,183 sentence pairs, 10.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Esperanto-Urdu (68,730 sentence pairs, 2.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-ur.tmx.gz">68.7k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Esperanto-Uzbek (92,691 sentence pairs, 3.15M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-uz.tmx.gz">92.7k</a>
</td><td bgcolor="#deffc7"><a rel="nofollow" title='Esperanto-Vietnamese (276,715 sentence pairs, 12.05M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Esperanto-Xhosa (148,757 sentence pairs, 5.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eo-xh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=MultiHPLT/v2/mono/et.txt.gz">et</a>
</th><td>1</td> <td>128.9M</td> <td>7.7M</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Afrikaans (440,002 sentence pairs, 14.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-et.txt.zip">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Arabic (469,313 sentence pairs, 13.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-et.txt.zip">0.5M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Estonian-Azerbaijani (330,996 sentence pairs, 8.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-et.txt.zip">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Belarusian (474,707 sentence pairs, 13.40M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-et.txt.zip">0.5M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Estonian-Bulgarian (2,808,974 sentence pairs, 94.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-et.txt.zip">2.8M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Estonian-Bengali (92,846 sentence pairs, 2.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-et.txt.zip">92.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Estonian-Bosnian (172,717 sentence pairs, 5.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-et.txt.zip">0.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Estonian-Catalan (866,328 sentence pairs, 28.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-et.txt.zip">0.9M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Estonian-Welsh (337,128 sentence pairs, 11.18M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-et.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Estonian-Esperanto (169,394 sentence pairs, 5.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-et.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Estonian-Basque (206,109 sentence pairs, 5.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-eu.tmx.gz">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Estonian-Persian (133,281 sentence pairs, 4.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-fa.tmx.gz">0.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Estonian-Finnish (2,696,040 sentence pairs, 77.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-fi.tmx.gz">2.7M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Estonian-Irish (546,074 sentence pairs, 19.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-ga.tmx.gz">0.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Galician (417,017 sentence pairs, 12.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-gl.tmx.gz">0.4M</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Estonian-Gujarati (79,048 sentence pairs, 2.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-gu.tmx.gz">79.0k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Hebrew (473,428 sentence pairs, 12.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-he.tmx.gz">0.5M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Estonian-Hindi (314,461 sentence pairs, 9.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-hi.tmx.gz">0.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Estonian-Croatian (1,963,241 sentence pairs, 63.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-hr.tmx.gz">2.0M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Estonian-Icelandic (553,203 sentence pairs, 16.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-is.tmx.gz">0.6M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Estonian-Japanese (377,771 sentence pairs, 5.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-ja.tmx.gz">0.4M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Estonian-Kazakh (273,657 sentence pairs, 7.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-kk.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Estonian-Kannada (68,707 sentence pairs, 1.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-kn.tmx.gz">68.7k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Korean (521,582 sentence pairs, 13.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-ko.tmx.gz">0.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Estonian-Lithuanian (2,526,208 sentence pairs, 79.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-lt.tmx.gz">2.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Estonian-Latvian (2,603,706 sentence pairs, 82.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-lv.tmx.gz">2.6M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Estonian-Macedonian (586,781 sentence pairs, 17.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-mk.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Estonian-Malayalam (51,125 sentence pairs, 1.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-ml.tmx.gz">51.1k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Estonian-Marathi (54,402 sentence pairs, 1.47M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-mr.tmx.gz">54.4k</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Estonian-Malay (952,317 sentence pairs, 27.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-ms.tmx.gz">1.0M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Estonian-Maltese (591,693 sentence pairs, 24.43M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-mt.tmx.gz">0.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-BokmÃ¥l, Norwegian (1,655,696 sentence pairs, 50.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-nb.tmx.gz">1.7M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Estonian-Nepali (47,684 sentence pairs, 1.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-ne.tmx.gz">47.7k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Estonian-Norwegian Nynorsk (17,351 sentence pairs, 0.48M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-nn.tmx.gz">17.4k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Estonian-Sinhala (39,099 sentence pairs, 0.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-si.tmx.gz">39.1k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Estonian-Slovak (2,333,410 sentence pairs, 74.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-sk.tmx.gz">2.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Estonian-Slovenian (2,002,442 sentence pairs, 67.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-sl.tmx.gz">2.0M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Estonian-Albanian (597,574 sentence pairs, 20.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Estonian-Serbian (717,484 sentence pairs, 20.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-sr.tmx.gz">0.7M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Estonian-Swahili (292,976 sentence pairs, 9.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-sw.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Estonian-Tamil (80,334 sentence pairs, 1.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-ta.tmx.gz">80.3k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Estonian-Telugu (79,281 sentence pairs, 1.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-te.tmx.gz">79.3k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Estonian-Thai (211,500 sentence pairs, 3.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-th.tmx.gz">0.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Estonian-Turkish (640,751 sentence pairs, 16.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-tr.tmx.gz">0.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Estonian-Ukrainian (1,506,883 sentence pairs, 43.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-uk.tmx.gz">1.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Estonian-Urdu (111,341 sentence pairs, 3.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Estonian-Uzbek (195,786 sentence pairs, 5.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Estonian-Vietnamese (1,103,852 sentence pairs, 41.90M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-vi.tmx.gz">1.1M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Estonian-Xhosa (88,129 sentence pairs, 2.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/et-xh.tmx.gz">88.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=MultiHPLT/v2/mono/eu.txt.gz">eu</a>
</th><td>1</td> <td>24.9M</td> <td>1.4M</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Basque-Afrikaans (186,965 sentence pairs, 5.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-eu.txt.zip">0.2M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Basque-Arabic (95,956 sentence pairs, 2.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-eu.txt.zip">96.0k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Basque-Azerbaijani (158,912 sentence pairs, 4.07M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-eu.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Basque-Belarusian (165,218 sentence pairs, 4.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-eu.txt.zip">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Basque-Bulgarian (368,954 sentence pairs, 9.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-eu.txt.zip">0.4M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Basque-Bengali (56,584 sentence pairs, 1.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-eu.txt.zip">56.6k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Basque-Bosnian (44,347 sentence pairs, 1.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-eu.txt.zip">44.3k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Basque-Catalan (444,291 sentence pairs, 15.35M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-eu.txt.zip">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Basque-Welsh (160,771 sentence pairs, 4.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-eu.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Basque-Esperanto (139,466 sentence pairs, 4.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-eu.txt.zip">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Basque-Estonian (206,109 sentence pairs, 5.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-eu.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffffe8"><a rel="nofollow" title='Basque-Persian (49,913 sentence pairs, 1.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-fa.tmx.gz">49.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Basque-Finnish (264,938 sentence pairs, 6.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-fi.tmx.gz">0.3M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Basque-Irish (175,662 sentence pairs, 5.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-ga.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Basque-Galician (339,641 sentence pairs, 10.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-gl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Basque-Gujarati (47,178 sentence pairs, 1.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-gu.tmx.gz">47.2k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Basque-Hebrew (95,811 sentence pairs, 2.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-he.tmx.gz">95.8k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Basque-Hindi (78,496 sentence pairs, 2.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-hi.tmx.gz">78.5k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Basque-Croatian (242,691 sentence pairs, 6.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-hr.tmx.gz">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Basque-Icelandic (160,246 sentence pairs, 4.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-is.tmx.gz">0.2M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Basque-Japanese (71,851 sentence pairs, 0.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-ja.tmx.gz">71.9k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Basque-Kazakh (117,856 sentence pairs, 3.05M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-kk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Basque-Kannada (47,445 sentence pairs, 1.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-kn.tmx.gz">47.4k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Basque-Korean (106,191 sentence pairs, 2.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-ko.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Basque-Lithuanian (229,302 sentence pairs, 5.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Basque-Latvian (246,177 sentence pairs, 6.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Basque-Macedonian (200,681 sentence pairs, 5.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Basque-Malayalam (34,198 sentence pairs, 0.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-ml.tmx.gz">34.2k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Basque-Marathi (33,655 sentence pairs, 0.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-mr.tmx.gz">33.7k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Basque-Malay (187,121 sentence pairs, 5.07M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Basque-Maltese (69,065 sentence pairs, 1.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-mt.tmx.gz">69.1k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Basque-BokmÃ¥l, Norwegian (233,292 sentence pairs, 6.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-nb.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Basque-Nepali (31,526 sentence pairs, 0.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-ne.tmx.gz">31.5k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Basque-Norwegian Nynorsk (13,832 sentence pairs, 0.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-nn.tmx.gz">13.8k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Basque-Sinhala (26,738 sentence pairs, 0.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-si.tmx.gz">26.7k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Basque-Slovak (254,844 sentence pairs, 6.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Basque-Slovenian (206,251 sentence pairs, 5.61M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Basque-Albanian (182,657 sentence pairs, 5.76M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Basque-Serbian (199,185 sentence pairs, 5.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Basque-Swahili (117,916 sentence pairs, 3.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-sw.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Basque-Tamil (47,056 sentence pairs, 1.12M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-ta.tmx.gz">47.1k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Basque-Telugu (49,358 sentence pairs, 1.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-te.tmx.gz">49.4k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Basque-Thai (37,366 sentence pairs, 0.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-th.tmx.gz">37.4k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Basque-Turkish (106,896 sentence pairs, 2.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Basque-Ukrainian (272,639 sentence pairs, 7.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Basque-Urdu (58,322 sentence pairs, 1.83M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-ur.tmx.gz">58.3k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Basque-Uzbek (83,481 sentence pairs, 2.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-uz.tmx.gz">83.5k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Basque-Vietnamese (194,575 sentence pairs, 6.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Basque-Xhosa (60,496 sentence pairs, 1.74M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/eu-xh.tmx.gz">60.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fa plain text' href="download.php?f=MultiHPLT/v2/mono/fa.txt.gz">fa</a>
</th><td>1</td> <td>90.6M</td> <td>2.9M</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Persian-Afrikaans (125,201 sentence pairs, 4.60M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-fa.txt.zip">0.1M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Persian-Arabic (485,873 sentence pairs, 20.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-fa.txt.zip">0.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Persian-Azerbaijani (110,460 sentence pairs, 3.47M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-fa.txt.zip">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Persian-Belarusian (126,202 sentence pairs, 3.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-fa.txt.zip">0.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Persian-Bulgarian (374,229 sentence pairs, 11.18M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-fa.txt.zip">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Persian-Bengali (165,157 sentence pairs, 6.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-fa.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Persian-Bosnian (51,756 sentence pairs, 1.61M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-fa.txt.zip">51.8k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Persian-Catalan (181,769 sentence pairs, 6.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-fa.txt.zip">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Persian-Welsh (97,877 sentence pairs, 3.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-fa.txt.zip">97.9k</a>
</td><td></td><td bgcolor="#ffffe1"><a rel="nofollow" title='Persian-Esperanto (56,444 sentence pairs, 1.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-fa.txt.zip">56.4k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Persian-Estonian (133,281 sentence pairs, 4.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-fa.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Persian-Basque (49,913 sentence pairs, 1.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-fa.txt.zip">49.9k</a>
</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Persian-Finnish (248,341 sentence pairs, 6.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-fi.tmx.gz">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Persian-Irish (108,532 sentence pairs, 4.31M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-ga.tmx.gz">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Persian-Galician (118,382 sentence pairs, 4.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-gl.tmx.gz">0.1M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Persian-Gujarati (90,190 sentence pairs, 3.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-gu.tmx.gz">90.2k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Persian-Hebrew (274,632 sentence pairs, 9.76M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-he.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Persian-Hindi (317,154 sentence pairs, 14.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-hi.tmx.gz">0.3M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Persian-Croatian (201,137 sentence pairs, 6.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-hr.tmx.gz">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Persian-Icelandic (102,761 sentence pairs, 3.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-is.tmx.gz">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Persian-Japanese (212,995 sentence pairs, 3.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-ja.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Persian-Kazakh (67,234 sentence pairs, 1.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-kk.tmx.gz">67.2k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Persian-Kannada (73,811 sentence pairs, 2.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-kn.tmx.gz">73.8k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Persian-Korean (327,776 sentence pairs, 10.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-ko.tmx.gz">0.3M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Persian-Lithuanian (197,620 sentence pairs, 5.74M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Persian-Latvian (171,744 sentence pairs, 5.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Persian-Macedonian (151,254 sentence pairs, 5.00M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Persian-Malayalam (54,241 sentence pairs, 1.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-ml.tmx.gz">54.2k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Persian-Marathi (60,158 sentence pairs, 2.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-mr.tmx.gz">60.2k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Persian-Malay (209,062 sentence pairs, 6.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Persian-Maltese (46,866 sentence pairs, 1.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-mt.tmx.gz">46.9k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Persian-BokmÃ¥l, Norwegian (236,480 sentence pairs, 7.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-nb.tmx.gz">0.2M</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Persian-Nepali (51,036 sentence pairs, 2.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-ne.tmx.gz">51.0k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Persian-Norwegian Nynorsk (7,822 sentence pairs, 0.18M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-nn.tmx.gz">7.8k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Persian-Sinhala (36,832 sentence pairs, 1.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-si.tmx.gz">36.8k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Persian-Slovak (239,408 sentence pairs, 7.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Persian-Slovenian (158,161 sentence pairs, 5.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Persian-Albanian (157,171 sentence pairs, 5.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Persian-Serbian (160,931 sentence pairs, 5.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Persian-Swahili (92,885 sentence pairs, 3.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-sw.tmx.gz">92.9k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Persian-Tamil (93,090 sentence pairs, 3.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-ta.tmx.gz">93.1k</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Persian-Telugu (90,573 sentence pairs, 3.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-te.tmx.gz">90.6k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Persian-Thai (166,813 sentence pairs, 4.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-th.tmx.gz">0.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Persian-Turkish (431,797 sentence pairs, 15.32M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-tr.tmx.gz">0.4M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Persian-Ukrainian (293,310 sentence pairs, 9.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Persian-Urdu (170,475 sentence pairs, 8.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Persian-Uzbek (44,710 sentence pairs, 1.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-uz.tmx.gz">44.7k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Persian-Vietnamese (302,237 sentence pairs, 12.49M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Persian-Xhosa (21,062 sentence pairs, 0.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fa-xh.tmx.gz">21.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=MultiHPLT/v2/mono/fi.txt.gz">fi</a>
</th><td>1</td> <td>342.0M</td> <td>23.8M</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Finnish-Afrikaans (753,224 sentence pairs, 24.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-fi.txt.zip">0.8M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Finnish-Arabic (984,131 sentence pairs, 25.04M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-fi.txt.zip">1.0M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Finnish-Azerbaijani (431,491 sentence pairs, 10.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-fi.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Finnish-Belarusian (588,800 sentence pairs, 15.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-fi.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-Bulgarian (4,428,249 sentence pairs, 137.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-fi.txt.zip">4.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Finnish-Bengali (189,593 sentence pairs, 4.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-fi.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Finnish-Bosnian (295,269 sentence pairs, 8.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-fi.txt.zip">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Catalan (1,382,878 sentence pairs, 43.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-fi.txt.zip">1.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Finnish-Welsh (423,264 sentence pairs, 13.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-fi.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Esperanto (361,730 sentence pairs, 12.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-fi.txt.zip">0.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Finnish-Estonian (2,696,040 sentence pairs, 77.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-fi.txt.zip">2.7M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Finnish-Basque (264,938 sentence pairs, 6.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-fi.txt.zip">0.3M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Finnish-Persian (248,341 sentence pairs, 6.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-fi.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Finnish-Irish (736,688 sentence pairs, 25.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-ga.tmx.gz">0.7M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Finnish-Galician (593,842 sentence pairs, 16.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-gl.tmx.gz">0.6M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Finnish-Gujarati (134,096 sentence pairs, 2.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-gu.tmx.gz">0.1M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Finnish-Hebrew (1,222,901 sentence pairs, 28.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-he.tmx.gz">1.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Finnish-Hindi (676,146 sentence pairs, 18.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-hi.tmx.gz">0.7M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Finnish-Croatian (3,386,898 sentence pairs, 101.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-hr.tmx.gz">3.4M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Finnish-Icelandic (962,617 sentence pairs, 27.54M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-is.tmx.gz">1.0M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Finnish-Japanese (1,213,766 sentence pairs, 16.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-ja.tmx.gz">1.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Finnish-Kazakh (378,071 sentence pairs, 8.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-kk.tmx.gz">0.4M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Finnish-Kannada (115,400 sentence pairs, 2.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-kn.tmx.gz">0.1M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Finnish-Korean (1,676,302 sentence pairs, 38.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-ko.tmx.gz">1.7M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Finnish-Lithuanian (3,592,056 sentence pairs, 103.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-lt.tmx.gz">3.6M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Finnish-Latvian (3,439,376 sentence pairs, 100.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-lv.tmx.gz">3.4M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Finnish-Macedonian (843,659 sentence pairs, 23.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-mk.tmx.gz">0.8M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Finnish-Malayalam (98,308 sentence pairs, 2.00M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-ml.tmx.gz">98.3k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Finnish-Marathi (101,922 sentence pairs, 2.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-mr.tmx.gz">0.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Malay (1,671,023 sentence pairs, 45.54M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-ms.tmx.gz">1.7M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Finnish-Maltese (725,274 sentence pairs, 28.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-BokmÃ¥l, Norwegian (5,466,127 sentence pairs, 156.98M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-nb.tmx.gz">5.5M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Finnish-Nepali (83,611 sentence pairs, 1.98M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-ne.tmx.gz">83.6k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Finnish-Norwegian Nynorsk (50,790 sentence pairs, 1.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-nn.tmx.gz">50.8k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Finnish-Sinhala (62,471 sentence pairs, 1.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-si.tmx.gz">62.5k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Finnish-Slovak (4,323,876 sentence pairs, 124.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-sk.tmx.gz">4.3M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Finnish-Slovenian (2,794,316 sentence pairs, 88.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-sl.tmx.gz">2.8M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Finnish-Albanian (927,794 sentence pairs, 31.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-sq.tmx.gz">0.9M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Finnish-Serbian (1,333,029 sentence pairs, 35.31M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-sr.tmx.gz">1.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Finnish-Swahili (454,513 sentence pairs, 13.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-sw.tmx.gz">0.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Finnish-Tamil (172,548 sentence pairs, 3.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-ta.tmx.gz">0.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Finnish-Telugu (142,363 sentence pairs, 3.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-te.tmx.gz">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Finnish-Thai (573,094 sentence pairs, 9.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-th.tmx.gz">0.6M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Turkish (1,962,104 sentence pairs, 46.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-tr.tmx.gz">2.0M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Finnish-Ukrainian (3,090,414 sentence pairs, 82.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-uk.tmx.gz">3.1M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Finnish-Urdu (192,133 sentence pairs, 5.85M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Finnish-Uzbek (226,250 sentence pairs, 6.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Finnish-Vietnamese (2,349,172 sentence pairs, 82.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-vi.tmx.gz">2.3M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Finnish-Xhosa (187,453 sentence pairs, 5.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/fi-xh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ga plain text' href="download.php?f=MultiHPLT/v2/mono/ga.txt.gz">ga</a>
</th><td>1</td> <td>55.7M</td> <td>2.4M</td><td bgcolor="#daffc6"><a rel="nofollow" title='Irish-Afrikaans (397,195 sentence pairs, 16.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-ga.txt.zip">0.4M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Irish-Arabic (193,823 sentence pairs, 6.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-ga.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Irish-Azerbaijani (265,179 sentence pairs, 8.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-ga.txt.zip">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Irish-Belarusian (460,205 sentence pairs, 16.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-ga.txt.zip">0.5M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Irish-Bulgarian (885,287 sentence pairs, 34.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-ga.txt.zip">0.9M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Irish-Bengali (81,891 sentence pairs, 2.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-ga.txt.zip">81.9k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Irish-Bosnian (67,929 sentence pairs, 2.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-ga.txt.zip">67.9k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Irish-Catalan (589,370 sentence pairs, 24.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-ga.txt.zip">0.6M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Irish-Welsh (459,499 sentence pairs, 19.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-ga.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Irish-Esperanto (172,371 sentence pairs, 6.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-ga.txt.zip">0.2M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Irish-Estonian (546,074 sentence pairs, 19.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-ga.txt.zip">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Irish-Basque (175,662 sentence pairs, 5.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-ga.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Irish-Persian (108,532 sentence pairs, 4.31M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-ga.txt.zip">0.1M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Irish-Finnish (736,688 sentence pairs, 25.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-ga.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Irish-Galician (454,770 sentence pairs, 17.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-gl.tmx.gz">0.5M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Irish-Gujarati (70,264 sentence pairs, 2.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-gu.tmx.gz">70.3k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Irish-Hebrew (162,050 sentence pairs, 5.05M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-he.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Irish-Hindi (175,994 sentence pairs, 6.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-hi.tmx.gz">0.2M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Irish-Croatian (809,359 sentence pairs, 29.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-hr.tmx.gz">0.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Irish-Icelandic (415,222 sentence pairs, 15.40M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-is.tmx.gz">0.4M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Irish-Japanese (154,271 sentence pairs, 3.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-ja.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Irish-Kazakh (165,126 sentence pairs, 5.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-kk.tmx.gz">0.2M</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Irish-Kannada (68,097 sentence pairs, 2.04M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-kn.tmx.gz">68.1k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Irish-Korean (175,727 sentence pairs, 5.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Irish-Lithuanian (605,589 sentence pairs, 22.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-lt.tmx.gz">0.6M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Irish-Latvian (658,225 sentence pairs, 24.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-lv.tmx.gz">0.7M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Irish-Macedonian (516,767 sentence pairs, 19.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Irish-Malayalam (41,024 sentence pairs, 1.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-ml.tmx.gz">41.0k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Irish-Marathi (44,373 sentence pairs, 1.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-mr.tmx.gz">44.4k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Irish-Malay (588,594 sentence pairs, 21.83M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-ms.tmx.gz">0.6M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Irish-Maltese (285,089 sentence pairs, 11.85M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Irish-BokmÃ¥l, Norwegian (970,474 sentence pairs, 35.32M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-nb.tmx.gz">1.0M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Irish-Nepali (44,075 sentence pairs, 1.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-ne.tmx.gz">44.1k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Irish-Norwegian Nynorsk (5,588 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-nn.tmx.gz">5.6k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Irish-Sinhala (34,654 sentence pairs, 1.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-si.tmx.gz">34.7k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Irish-Slovak (719,304 sentence pairs, 26.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-sk.tmx.gz">0.7M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Irish-Slovenian (630,372 sentence pairs, 24.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-sl.tmx.gz">0.6M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Irish-Albanian (498,190 sentence pairs, 20.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Irish-Serbian (500,058 sentence pairs, 18.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-sr.tmx.gz">0.5M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Irish-Swahili (260,546 sentence pairs, 10.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-sw.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Irish-Tamil (64,234 sentence pairs, 1.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-ta.tmx.gz">64.2k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Irish-Telugu (73,079 sentence pairs, 2.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-te.tmx.gz">73.1k</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Irish-Thai (80,874 sentence pairs, 2.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-th.tmx.gz">80.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Irish-Turkish (202,609 sentence pairs, 6.43M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Irish-Ukrainian (594,617 sentence pairs, 21.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-uk.tmx.gz">0.6M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Irish-Urdu (96,266 sentence pairs, 3.88M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-ur.tmx.gz">96.3k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Irish-Uzbek (147,871 sentence pairs, 5.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-uz.tmx.gz">0.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Irish-Vietnamese (522,055 sentence pairs, 24.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-vi.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Irish-Xhosa (56,960 sentence pairs, 1.98M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ga-xh.tmx.gz">57.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gl plain text' href="download.php?f=MultiHPLT/v2/mono/gl.txt.gz">gl</a>
</th><td>1</td> <td>52.8M</td> <td>2.3M</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Galician-Afrikaans (357,486 sentence pairs, 13.40M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-gl.txt.zip">0.4M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Galician-Arabic (186,526 sentence pairs, 5.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-gl.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Galician-Azerbaijani (253,827 sentence pairs, 7.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-gl.txt.zip">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Galician-Belarusian (459,850 sentence pairs, 14.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-gl.txt.zip">0.5M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Galician-Bulgarian (779,457 sentence pairs, 25.48M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-gl.txt.zip">0.8M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Galician-Bengali (87,949 sentence pairs, 2.40M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-gl.txt.zip">87.9k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Galician-Bosnian (81,760 sentence pairs, 2.61M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-gl.txt.zip">81.8k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Galician-Catalan (974,793 sentence pairs, 39.76M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-gl.txt.zip">1.0M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Galician-Welsh (393,349 sentence pairs, 14.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-gl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Galician-Esperanto (205,338 sentence pairs, 7.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-gl.txt.zip">0.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Galician-Estonian (417,017 sentence pairs, 12.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-gl.txt.zip">0.4M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Galician-Basque (339,641 sentence pairs, 10.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-gl.txt.zip">0.3M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Galician-Persian (118,382 sentence pairs, 4.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-gl.txt.zip">0.1M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Galician-Finnish (593,842 sentence pairs, 16.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-gl.txt.zip">0.6M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Galician-Irish (454,770 sentence pairs, 17.55M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-gl.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Galician-Gujarati (82,004 sentence pairs, 2.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-gu.tmx.gz">82.0k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Galician-Hebrew (183,320 sentence pairs, 4.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-he.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Galician-Hindi (168,417 sentence pairs, 5.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-hi.tmx.gz">0.2M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Galician-Croatian (540,048 sentence pairs, 17.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-hr.tmx.gz">0.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Galician-Icelandic (369,339 sentence pairs, 12.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-is.tmx.gz">0.4M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Galician-Japanese (149,811 sentence pairs, 2.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-ja.tmx.gz">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Galician-Kazakh (166,356 sentence pairs, 5.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-kk.tmx.gz">0.2M</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Galician-Kannada (77,522 sentence pairs, 2.04M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-kn.tmx.gz">77.5k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Galician-Korean (178,883 sentence pairs, 4.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Galician-Lithuanian (472,996 sentence pairs, 14.40M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-lt.tmx.gz">0.5M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Galician-Latvian (508,131 sentence pairs, 15.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-lv.tmx.gz">0.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Galician-Macedonian (531,408 sentence pairs, 18.07M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Galician-Malayalam (48,886 sentence pairs, 1.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-ml.tmx.gz">48.9k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Galician-Marathi (52,989 sentence pairs, 1.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-mr.tmx.gz">53.0k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Galician-Malay (504,182 sentence pairs, 16.88M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-ms.tmx.gz">0.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Galician-Maltese (193,098 sentence pairs, 6.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Galician-BokmÃ¥l, Norwegian (572,959 sentence pairs, 19.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-nb.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Galician-Nepali (50,893 sentence pairs, 1.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-ne.tmx.gz">50.9k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Galician-Norwegian Nynorsk (25,054 sentence pairs, 0.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-nn.tmx.gz">25.1k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Galician-Sinhala (40,218 sentence pairs, 1.16M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-si.tmx.gz">40.2k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Galician-Slovak (597,614 sentence pairs, 18.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Galician-Slovenian (481,126 sentence pairs, 15.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-sl.tmx.gz">0.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Galician-Albanian (502,682 sentence pairs, 18.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Galician-Serbian (517,189 sentence pairs, 16.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-sr.tmx.gz">0.5M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Galician-Swahili (247,318 sentence pairs, 9.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-sw.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Galician-Tamil (73,480 sentence pairs, 1.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-ta.tmx.gz">73.5k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Galician-Telugu (83,660 sentence pairs, 2.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-te.tmx.gz">83.7k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Galician-Thai (83,220 sentence pairs, 1.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-th.tmx.gz">83.2k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Galician-Turkish (192,615 sentence pairs, 5.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Galician-Ukrainian (585,613 sentence pairs, 18.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-uk.tmx.gz">0.6M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Galician-Urdu (102,599 sentence pairs, 3.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Galician-Uzbek (129,089 sentence pairs, 4.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-uz.tmx.gz">0.1M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Galician-Vietnamese (510,633 sentence pairs, 21.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-vi.tmx.gz">0.5M</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Galician-Xhosa (64,151 sentence pairs, 2.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gl-xh.tmx.gz">64.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gu plain text' href="download.php?f=MultiHPLT/v2/mono/gu.txt.gz">gu</a>
</th><td>1</td> <td>23.8M</td> <td>0.6M</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Gujarati-Afrikaans (87,280 sentence pairs, 2.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-gu.txt.zip">87.3k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Gujarati-Arabic (150,384 sentence pairs, 5.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-gu.txt.zip">0.2M</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Gujarati-Azerbaijani (76,658 sentence pairs, 2.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-gu.txt.zip">76.7k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Gujarati-Belarusian (86,261 sentence pairs, 2.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-gu.txt.zip">86.3k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Gujarati-Bulgarian (181,446 sentence pairs, 4.60M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-gu.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Gujarati-Bengali (176,082 sentence pairs, 6.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-gu.txt.zip">0.2M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Gujarati-Bosnian (18,811 sentence pairs, 0.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-gu.txt.zip">18.8k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Gujarati-Catalan (110,508 sentence pairs, 3.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-gu.txt.zip">0.1M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Gujarati-Welsh (79,154 sentence pairs, 2.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-gu.txt.zip">79.2k</a>
</td><td></td><td bgcolor="#ffffe0"><a rel="nofollow" title='Gujarati-Esperanto (65,174 sentence pairs, 1.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-gu.txt.zip">65.2k</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Gujarati-Estonian (79,048 sentence pairs, 2.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-gu.txt.zip">79.0k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Gujarati-Basque (47,178 sentence pairs, 1.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-gu.txt.zip">47.2k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Gujarati-Persian (90,190 sentence pairs, 3.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-gu.txt.zip">90.2k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Gujarati-Finnish (134,096 sentence pairs, 2.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-gu.txt.zip">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Gujarati-Irish (70,264 sentence pairs, 2.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-gu.txt.zip">70.3k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Gujarati-Galician (82,004 sentence pairs, 2.34M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-gu.txt.zip">82.0k</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Gujarati-Hebrew (131,444 sentence pairs, 4.43M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-he.tmx.gz">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Gujarati-Hindi (245,566 sentence pairs, 10.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-hi.tmx.gz">0.2M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Gujarati-Croatian (94,924 sentence pairs, 2.60M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-hr.tmx.gz">94.9k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Gujarati-Icelandic (63,010 sentence pairs, 1.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-is.tmx.gz">63.0k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Gujarati-Japanese (85,552 sentence pairs, 1.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-ja.tmx.gz">85.6k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Gujarati-Kazakh (54,235 sentence pairs, 1.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-kk.tmx.gz">54.2k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Gujarati-Kannada (130,769 sentence pairs, 4.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-kn.tmx.gz">0.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Gujarati-Korean (144,535 sentence pairs, 4.43M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-ko.tmx.gz">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Gujarati-Lithuanian (95,595 sentence pairs, 2.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-lt.tmx.gz">95.6k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Gujarati-Latvian (96,018 sentence pairs, 2.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-lv.tmx.gz">96.0k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Gujarati-Macedonian (91,230 sentence pairs, 2.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-mk.tmx.gz">91.2k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Gujarati-Malayalam (70,122 sentence pairs, 2.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-ml.tmx.gz">70.1k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Gujarati-Marathi (109,170 sentence pairs, 4.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-mr.tmx.gz">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Gujarati-Malay (103,763 sentence pairs, 3.00M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Gujarati-Maltese (29,036 sentence pairs, 0.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-mt.tmx.gz">29.0k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Gujarati-BokmÃ¥l, Norwegian (89,090 sentence pairs, 2.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-nb.tmx.gz">89.1k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Gujarati-Nepali (61,239 sentence pairs, 2.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-ne.tmx.gz">61.2k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Gujarati-Norwegian Nynorsk (3,713 sentence pairs, 64.33k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-nn.tmx.gz">3.7k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Gujarati-Sinhala (44,401 sentence pairs, 1.49M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-si.tmx.gz">44.4k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Gujarati-Slovak (106,384 sentence pairs, 2.72M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-sk.tmx.gz">0.1M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Gujarati-Slovenian (79,154 sentence pairs, 2.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-sl.tmx.gz">79.2k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Gujarati-Albanian (87,877 sentence pairs, 2.83M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-sq.tmx.gz">87.9k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Gujarati-Serbian (84,071 sentence pairs, 2.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-sr.tmx.gz">84.1k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Gujarati-Swahili (77,336 sentence pairs, 2.61M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-sw.tmx.gz">77.3k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Gujarati-Tamil (132,053 sentence pairs, 4.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Gujarati-Telugu (151,161 sentence pairs, 5.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-te.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Gujarati-Thai (71,063 sentence pairs, 1.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-th.tmx.gz">71.1k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Gujarati-Turkish (141,046 sentence pairs, 4.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Gujarati-Ukrainian (117,803 sentence pairs, 3.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-uk.tmx.gz">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Gujarati-Urdu (141,777 sentence pairs, 6.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Gujarati-Uzbek (45,185 sentence pairs, 1.54M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-uz.tmx.gz">45.2k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Gujarati-Vietnamese (113,285 sentence pairs, 4.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Gujarati-Xhosa (26,985 sentence pairs, 0.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/gu-xh.tmx.gz">27.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized he plain text' href="download.php?f=MultiHPLT/v2/mono/he.txt.gz">he</a>
</th><td>1</td> <td>148.7M</td> <td>6.6M</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Hebrew-Afrikaans (284,208 sentence pairs, 8.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-he.txt.zip">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Hebrew-Arabic (1,486,991 sentence pairs, 45.12M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-he.txt.zip">1.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Hebrew-Azerbaijani (155,464 sentence pairs, 3.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-he.txt.zip">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Hebrew-Belarusian (191,461 sentence pairs, 4.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-he.txt.zip">0.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Hebrew-Bulgarian (1,109,644 sentence pairs, 29.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-he.txt.zip">1.1M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Hebrew-Bengali (231,238 sentence pairs, 7.31M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-he.txt.zip">0.2M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Hebrew-Bosnian (93,242 sentence pairs, 2.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-he.txt.zip">93.2k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hebrew-Catalan (431,054 sentence pairs, 12.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-he.txt.zip">0.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Hebrew-Welsh (146,490 sentence pairs, 4.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-he.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Hebrew-Esperanto (152,616 sentence pairs, 5.04M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-he.txt.zip">0.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hebrew-Estonian (473,428 sentence pairs, 12.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-he.txt.zip">0.5M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Hebrew-Basque (95,811 sentence pairs, 2.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-he.txt.zip">95.8k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Hebrew-Persian (274,632 sentence pairs, 9.76M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-he.txt.zip">0.3M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Hebrew-Finnish (1,222,901 sentence pairs, 28.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-he.txt.zip">1.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Hebrew-Irish (162,050 sentence pairs, 5.05M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-he.txt.zip">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Hebrew-Galician (183,320 sentence pairs, 4.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-he.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Hebrew-Gujarati (131,444 sentence pairs, 4.43M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-he.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Hebrew-Hindi (982,115 sentence pairs, 35.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-hi.tmx.gz">1.0M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Hebrew-Croatian (728,148 sentence pairs, 18.69M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-hr.tmx.gz">0.7M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Hebrew-Icelandic (231,475 sentence pairs, 5.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-is.tmx.gz">0.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Hebrew-Japanese (1,157,377 sentence pairs, 16.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-ja.tmx.gz">1.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Hebrew-Kazakh (105,761 sentence pairs, 2.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-kk.tmx.gz">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Hebrew-Kannada (113,721 sentence pairs, 3.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-kn.tmx.gz">0.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Hebrew-Korean (1,796,761 sentence pairs, 45.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-ko.tmx.gz">1.8M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Hebrew-Lithuanian (804,596 sentence pairs, 19.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-lt.tmx.gz">0.8M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Hebrew-Latvian (768,509 sentence pairs, 19.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-lv.tmx.gz">0.8M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Hebrew-Macedonian (254,177 sentence pairs, 6.25M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-mk.tmx.gz">0.3M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Hebrew-Malayalam (81,795 sentence pairs, 2.12M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-ml.tmx.gz">81.8k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Hebrew-Marathi (97,665 sentence pairs, 3.31M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-mr.tmx.gz">97.7k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hebrew-Malay (524,434 sentence pairs, 13.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-ms.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Hebrew-Maltese (71,554 sentence pairs, 1.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-mt.tmx.gz">71.6k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Hebrew-BokmÃ¥l, Norwegian (797,859 sentence pairs, 21.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-nb.tmx.gz">0.8M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Hebrew-Nepali (78,306 sentence pairs, 2.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-ne.tmx.gz">78.3k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Hebrew-Norwegian Nynorsk (15,679 sentence pairs, 0.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-nn.tmx.gz">15.7k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Hebrew-Sinhala (58,369 sentence pairs, 1.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-si.tmx.gz">58.4k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Hebrew-Slovak (909,320 sentence pairs, 21.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-sk.tmx.gz">0.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hebrew-Slovenian (503,247 sentence pairs, 13.60M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-sl.tmx.gz">0.5M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Hebrew-Albanian (275,345 sentence pairs, 8.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Hebrew-Serbian (365,820 sentence pairs, 8.98M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-sr.tmx.gz">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Hebrew-Swahili (151,337 sentence pairs, 4.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-sw.tmx.gz">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Hebrew-Tamil (135,209 sentence pairs, 3.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Hebrew-Telugu (144,876 sentence pairs, 4.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-te.tmx.gz">0.1M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Hebrew-Thai (454,243 sentence pairs, 10.85M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-th.tmx.gz">0.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Hebrew-Turkish (2,068,964 sentence pairs, 58.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-tr.tmx.gz">2.1M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Hebrew-Ukrainian (1,109,735 sentence pairs, 26.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-uk.tmx.gz">1.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Hebrew-Urdu (200,080 sentence pairs, 8.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Hebrew-Uzbek (71,965 sentence pairs, 1.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-uz.tmx.gz">72.0k</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Hebrew-Vietnamese (1,146,436 sentence pairs, 37.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-vi.tmx.gz">1.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Hebrew-Xhosa (88,886 sentence pairs, 2.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/he-xh.tmx.gz">88.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=MultiHPLT/v2/mono/hi.txt.gz">hi</a>
</th><td>1</td> <td>353.2M</td> <td>8.2M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Hindi-Afrikaans (244,904 sentence pairs, 8.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-hi.txt.zip">0.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hindi-Arabic (1,215,961 sentence pairs, 50.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-hi.txt.zip">1.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Hindi-Azerbaijani (151,662 sentence pairs, 4.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-hi.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Hindi-Belarusian (226,419 sentence pairs, 6.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-hi.txt.zip">0.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Hindi-Bulgarian (789,435 sentence pairs, 24.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-hi.txt.zip">0.8M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Hindi-Bengali (494,326 sentence pairs, 20.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-hi.txt.zip">0.5M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Hindi-Bosnian (54,433 sentence pairs, 1.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-hi.txt.zip">54.4k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hindi-Catalan (366,546 sentence pairs, 13.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-hi.txt.zip">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Hindi-Welsh (161,323 sentence pairs, 6.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-hi.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Hindi-Esperanto (92,282 sentence pairs, 3.19M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-hi.txt.zip">92.3k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Hindi-Estonian (314,461 sentence pairs, 9.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-hi.txt.zip">0.3M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Hindi-Basque (78,496 sentence pairs, 2.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-hi.txt.zip">78.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hindi-Persian (317,154 sentence pairs, 14.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-hi.txt.zip">0.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Hindi-Finnish (676,146 sentence pairs, 18.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-hi.txt.zip">0.7M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Hindi-Irish (175,994 sentence pairs, 6.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-hi.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Hindi-Galician (168,417 sentence pairs, 5.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-hi.txt.zip">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Hindi-Gujarati (245,566 sentence pairs, 10.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-hi.txt.zip">0.2M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Hindi-Hebrew (982,115 sentence pairs, 35.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-hi.txt.zip">1.0M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hindi-Croatian (502,398 sentence pairs, 15.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-hr.tmx.gz">0.5M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Hindi-Icelandic (164,714 sentence pairs, 5.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-is.tmx.gz">0.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hindi-Japanese (801,053 sentence pairs, 14.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-ja.tmx.gz">0.8M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Hindi-Kazakh (123,372 sentence pairs, 3.60M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-kk.tmx.gz">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Hindi-Kannada (209,687 sentence pairs, 7.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-kn.tmx.gz">0.2M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Hindi-Korean (1,256,611 sentence pairs, 41.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-ko.tmx.gz">1.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hindi-Lithuanian (469,488 sentence pairs, 13.69M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-lt.tmx.gz">0.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hindi-Latvian (446,330 sentence pairs, 13.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Hindi-Macedonian (228,459 sentence pairs, 7.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Hindi-Malayalam (142,942 sentence pairs, 5.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-ml.tmx.gz">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Hindi-Marathi (208,931 sentence pairs, 9.07M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-mr.tmx.gz">0.2M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Hindi-Malay (556,006 sentence pairs, 18.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-ms.tmx.gz">0.6M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Hindi-Maltese (74,952 sentence pairs, 2.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-mt.tmx.gz">75.0k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Hindi-BokmÃ¥l, Norwegian (532,377 sentence pairs, 17.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-nb.tmx.gz">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Hindi-Nepali (122,008 sentence pairs, 5.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-ne.tmx.gz">0.1M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Hindi-Norwegian Nynorsk (9,341 sentence pairs, 0.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-nn.tmx.gz">9.3k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Hindi-Sinhala (69,793 sentence pairs, 2.60M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-si.tmx.gz">69.8k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Hindi-Slovak (570,406 sentence pairs, 16.88M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Hindi-Slovenian (374,769 sentence pairs, 11.83M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Hindi-Albanian (233,299 sentence pairs, 8.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Hindi-Serbian (333,329 sentence pairs, 10.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-sr.tmx.gz">0.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Hindi-Swahili (201,708 sentence pairs, 7.69M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-sw.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Hindi-Tamil (272,693 sentence pairs, 10.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-ta.tmx.gz">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Hindi-Telugu (275,045 sentence pairs, 10.72M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-te.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Hindi-Thai (509,634 sentence pairs, 15.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-th.tmx.gz">0.5M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Hindi-Turkish (1,544,823 sentence pairs, 55.83M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-tr.tmx.gz">1.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Hindi-Ukrainian (627,400 sentence pairs, 18.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-uk.tmx.gz">0.6M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Hindi-Urdu (349,584 sentence pairs, 17.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-ur.tmx.gz">0.3M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Hindi-Uzbek (83,739 sentence pairs, 3.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-uz.tmx.gz">83.7k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Hindi-Vietnamese (1,184,115 sentence pairs, 48.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-vi.tmx.gz">1.2M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Hindi-Xhosa (35,506 sentence pairs, 1.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hi-xh.tmx.gz">35.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=MultiHPLT/v2/mono/hr.txt.gz">hr</a>
</th><td>1</td> <td>217.1M</td> <td>11.5M</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Croatian-Afrikaans (675,339 sentence pairs, 23.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-hr.txt.zip">0.7M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Croatian-Arabic (727,685 sentence pairs, 21.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-hr.txt.zip">0.7M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Croatian-Azerbaijani (422,781 sentence pairs, 11.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-hr.txt.zip">0.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Croatian-Belarusian (642,371 sentence pairs, 18.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-hr.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Bulgarian (4,002,498 sentence pairs, 137.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-hr.txt.zip">4.0M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Croatian-Bengali (136,719 sentence pairs, 3.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-hr.txt.zip">0.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Croatian-Bosnian (354,788 sentence pairs, 11.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-hr.txt.zip">0.4M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Croatian-Catalan (1,163,851 sentence pairs, 41.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-hr.txt.zip">1.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Croatian-Welsh (470,917 sentence pairs, 16.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-hr.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-English (14,263,908 sentence pairs, 532.12M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/en-hr.txt.zip">14.3M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Croatian-Esperanto (280,201 sentence pairs, 9.74M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-hr.txt.zip">0.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Croatian-Estonian (1,963,241 sentence pairs, 63.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-hr.txt.zip">2.0M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Croatian-Basque (242,691 sentence pairs, 6.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-hr.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Croatian-Persian (201,137 sentence pairs, 6.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-hr.txt.zip">0.2M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Croatian-Finnish (3,386,898 sentence pairs, 101.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-hr.txt.zip">3.4M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Croatian-Irish (809,359 sentence pairs, 29.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-hr.txt.zip">0.8M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Croatian-Galician (540,048 sentence pairs, 17.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-hr.txt.zip">0.5M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Croatian-Gujarati (94,924 sentence pairs, 2.60M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-hr.txt.zip">94.9k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Croatian-Hebrew (728,148 sentence pairs, 18.69M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-hr.txt.zip">0.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Croatian-Hindi (502,398 sentence pairs, 15.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-hr.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Croatian-Icelandic (705,955 sentence pairs, 22.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-is.tmx.gz">0.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Croatian-Japanese (642,233 sentence pairs, 10.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-ja.tmx.gz">0.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Croatian-Kazakh (363,406 sentence pairs, 9.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-kk.tmx.gz">0.4M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Croatian-Kannada (110,277 sentence pairs, 2.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-kn.tmx.gz">0.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Croatian-Korean (927,537 sentence pairs, 24.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-ko.tmx.gz">0.9M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Croatian-Lithuanian (2,844,548 sentence pairs, 91.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-lt.tmx.gz">2.8M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Croatian-Latvian (2,829,093 sentence pairs, 92.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-lv.tmx.gz">2.8M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Croatian-Macedonian (976,959 sentence pairs, 31.77M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-mk.tmx.gz">1.0M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Croatian-Malayalam (90,974 sentence pairs, 2.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-ml.tmx.gz">91.0k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Croatian-Marathi (91,656 sentence pairs, 2.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-mr.tmx.gz">91.7k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-Malay (1,421,972 sentence pairs, 43.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-ms.tmx.gz">1.4M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Croatian-Maltese (628,331 sentence pairs, 26.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-mt.tmx.gz">0.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Croatian-BokmÃ¥l, Norwegian (2,724,618 sentence pairs, 86.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-nb.tmx.gz">2.7M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Croatian-Nepali (77,598 sentence pairs, 2.12M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-ne.tmx.gz">77.6k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Croatian-Norwegian Nynorsk (27,355 sentence pairs, 0.77M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-nn.tmx.gz">27.4k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Croatian-Sinhala (62,606 sentence pairs, 1.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-si.tmx.gz">62.6k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Croatian-Slovak (3,599,530 sentence pairs, 117.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-sk.tmx.gz">3.6M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Croatian-Slovenian (2,980,876 sentence pairs, 102.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-sl.tmx.gz">3.0M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Croatian-Albanian (958,603 sentence pairs, 34.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-sq.tmx.gz">1.0M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-Serbian (1,414,185 sentence pairs, 42.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-sr.tmx.gz">1.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Croatian-Swahili (446,092 sentence pairs, 14.98M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-sw.tmx.gz">0.4M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Croatian-Tamil (138,744 sentence pairs, 3.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Croatian-Telugu (126,163 sentence pairs, 3.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-te.tmx.gz">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-Thai (393,923 sentence pairs, 7.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-th.tmx.gz">0.4M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Croatian-Turkish (1,147,437 sentence pairs, 30.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-tr.tmx.gz">1.1M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Croatian-Ukrainian (2,507,979 sentence pairs, 75.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-uk.tmx.gz">2.5M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Croatian-Urdu (166,700 sentence pairs, 5.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Croatian-Uzbek (270,157 sentence pairs, 8.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-uz.tmx.gz">0.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Croatian-Vietnamese (1,693,328 sentence pairs, 66.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-vi.tmx.gz">1.7M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Croatian-Xhosa (144,992 sentence pairs, 4.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/hr-xh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=MultiHPLT/v2/mono/is.txt.gz">is</a>
</th><td>1</td> <td>39.1M</td> <td>2.2M</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Icelandic-Afrikaans (343,856 sentence pairs, 12.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-is.txt.zip">0.3M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Icelandic-Arabic (207,691 sentence pairs, 6.05M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-is.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Icelandic-Azerbaijani (243,430 sentence pairs, 7.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-is.txt.zip">0.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Icelandic-Belarusian (370,302 sentence pairs, 11.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-is.txt.zip">0.4M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Icelandic-Bulgarian (918,618 sentence pairs, 31.15M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-is.txt.zip">0.9M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Icelandic-Bengali (67,642 sentence pairs, 1.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-is.txt.zip">67.6k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Icelandic-Bosnian (84,384 sentence pairs, 2.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-is.txt.zip">84.4k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Icelandic-Catalan (561,470 sentence pairs, 19.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-is.txt.zip">0.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Icelandic-Welsh (346,469 sentence pairs, 12.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-is.txt.zip">0.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Icelandic-English (2,694,541 sentence pairs, 98.54M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/en-is.txt.zip">2.7M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Icelandic-Esperanto (158,922 sentence pairs, 5.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-is.txt.zip">0.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Icelandic-Estonian (553,203 sentence pairs, 16.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-is.txt.zip">0.6M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Icelandic-Basque (160,246 sentence pairs, 4.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-is.txt.zip">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Icelandic-Persian (102,761 sentence pairs, 3.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-is.txt.zip">0.1M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Icelandic-Finnish (962,617 sentence pairs, 27.54M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-is.txt.zip">1.0M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Icelandic-Irish (415,222 sentence pairs, 15.40M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-is.txt.zip">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Icelandic-Galician (369,339 sentence pairs, 12.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-is.txt.zip">0.4M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Icelandic-Gujarati (63,010 sentence pairs, 1.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-is.txt.zip">63.0k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Icelandic-Hebrew (231,475 sentence pairs, 5.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-is.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Icelandic-Hindi (164,714 sentence pairs, 5.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-is.txt.zip">0.2M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Icelandic-Croatian (705,955 sentence pairs, 22.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-is.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Icelandic-Japanese (162,400 sentence pairs, 2.85M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-ja.tmx.gz">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Icelandic-Kazakh (157,625 sentence pairs, 4.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-kk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Icelandic-Kannada (57,616 sentence pairs, 1.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-kn.tmx.gz">57.6k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Icelandic-Korean (224,272 sentence pairs, 6.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-ko.tmx.gz">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Icelandic-Lithuanian (624,939 sentence pairs, 18.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-lt.tmx.gz">0.6M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Icelandic-Latvian (654,694 sentence pairs, 20.05M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-lv.tmx.gz">0.7M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Icelandic-Macedonian (478,920 sentence pairs, 16.04M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Icelandic-Malayalam (43,446 sentence pairs, 1.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-ml.tmx.gz">43.4k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Icelandic-Marathi (52,896 sentence pairs, 1.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-mr.tmx.gz">52.9k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Icelandic-Malay (542,756 sentence pairs, 17.16M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-ms.tmx.gz">0.5M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Icelandic-Maltese (177,800 sentence pairs, 5.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Icelandic-BokmÃ¥l, Norwegian (918,349 sentence pairs, 30.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-nb.tmx.gz">0.9M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Icelandic-Nepali (42,846 sentence pairs, 1.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-ne.tmx.gz">42.8k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Icelandic-Norwegian Nynorsk (8,555 sentence pairs, 0.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-nn.tmx.gz">8.6k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Icelandic-Sinhala (30,291 sentence pairs, 0.88M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-si.tmx.gz">30.3k</a>
</td><td bgcolor="#d7ffc9"><a rel="nofollow" title='Icelandic-Slovak (738,274 sentence pairs, 23.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-sk.tmx.gz">0.7M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Icelandic-Slovenian (523,583 sentence pairs, 17.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-sl.tmx.gz">0.5M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Icelandic-Albanian (515,039 sentence pairs, 19.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Icelandic-Serbian (470,320 sentence pairs, 15.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-sr.tmx.gz">0.5M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Icelandic-Swahili (253,680 sentence pairs, 8.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-sw.tmx.gz">0.3M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Icelandic-Tamil (75,015 sentence pairs, 2.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-ta.tmx.gz">75.0k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Icelandic-Telugu (62,692 sentence pairs, 1.76M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-te.tmx.gz">62.7k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Icelandic-Thai (98,937 sentence pairs, 2.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-th.tmx.gz">98.9k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Icelandic-Turkish (234,759 sentence pairs, 6.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Icelandic-Ukrainian (753,147 sentence pairs, 24.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-uk.tmx.gz">0.8M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Icelandic-Urdu (92,942 sentence pairs, 3.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-ur.tmx.gz">92.9k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Icelandic-Uzbek (127,434 sentence pairs, 4.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-uz.tmx.gz">0.1M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Icelandic-Vietnamese (554,793 sentence pairs, 23.00M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-vi.tmx.gz">0.6M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Icelandic-Xhosa (76,091 sentence pairs, 2.32M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/is-xh.tmx.gz">76.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ja plain text' href="download.php?f=MultiHPLT/v2/mono/ja.txt.gz">ja</a>
</th><td>1</td> <td>471.3M</td> <td>15.7M</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Japanese-Afrikaans (209,412 sentence pairs, 3.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-ja.txt.zip">0.2M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Japanese-Arabic (1,394,007 sentence pairs, 22.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-ja.txt.zip">1.4M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Japanese-Azerbaijani (130,431 sentence pairs, 1.85M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-ja.txt.zip">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Japanese-Belarusian (186,571 sentence pairs, 2.74M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-ja.txt.zip">0.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Japanese-Bulgarian (921,507 sentence pairs, 15.40M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-ja.txt.zip">0.9M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Japanese-Bengali (218,640 sentence pairs, 3.09M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-ja.txt.zip">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Japanese-Bosnian (67,899 sentence pairs, 1.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-ja.txt.zip">67.9k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Japanese-Catalan (413,414 sentence pairs, 7.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-ja.txt.zip">0.4M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Japanese-Welsh (133,958 sentence pairs, 2.60M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-ja.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Japanese-Esperanto (70,921 sentence pairs, 1.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-ja.txt.zip">70.9k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Japanese-Estonian (377,771 sentence pairs, 5.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-ja.txt.zip">0.4M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Japanese-Basque (71,851 sentence pairs, 0.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-ja.txt.zip">71.9k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Japanese-Persian (212,995 sentence pairs, 3.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-ja.txt.zip">0.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Japanese-Finnish (1,213,766 sentence pairs, 16.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-ja.txt.zip">1.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Japanese-Irish (154,271 sentence pairs, 3.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-ja.txt.zip">0.2M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Japanese-Galician (149,811 sentence pairs, 2.55M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-ja.txt.zip">0.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Japanese-Gujarati (85,552 sentence pairs, 1.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-ja.txt.zip">85.6k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Japanese-Hebrew (1,157,377 sentence pairs, 16.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-ja.txt.zip">1.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Japanese-Hindi (801,053 sentence pairs, 14.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-ja.txt.zip">0.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Japanese-Croatian (642,233 sentence pairs, 10.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-ja.txt.zip">0.6M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Japanese-Icelandic (162,400 sentence pairs, 2.85M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-ja.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffffe8"><a rel="nofollow" title='Japanese-Kazakh (104,795 sentence pairs, 1.47M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-kk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Japanese-Kannada (83,890 sentence pairs, 1.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-kn.tmx.gz">83.9k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Japanese-Korean (3,639,503 sentence pairs, 51.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-ko.tmx.gz">3.6M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Japanese-Lithuanian (707,744 sentence pairs, 10.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-lt.tmx.gz">0.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Japanese-Latvian (648,283 sentence pairs, 10.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-lv.tmx.gz">0.6M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Japanese-Macedonian (223,536 sentence pairs, 3.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Japanese-Malayalam (59,064 sentence pairs, 0.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-ml.tmx.gz">59.1k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Japanese-Marathi (63,837 sentence pairs, 0.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-mr.tmx.gz">63.8k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Japanese-Malay (577,253 sentence pairs, 9.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-ms.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Japanese-Maltese (66,821 sentence pairs, 1.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-mt.tmx.gz">66.8k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Japanese-BokmÃ¥l, Norwegian (989,843 sentence pairs, 17.30M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-nb.tmx.gz">1.0M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Japanese-Nepali (56,343 sentence pairs, 0.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-ne.tmx.gz">56.3k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Japanese-Norwegian Nynorsk (18,953 sentence pairs, 0.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-nn.tmx.gz">19.0k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Japanese-Sinhala (42,599 sentence pairs, 0.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-si.tmx.gz">42.6k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Japanese-Slovak (946,795 sentence pairs, 15.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-sk.tmx.gz">0.9M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Japanese-Slovenian (492,711 sentence pairs, 8.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-sl.tmx.gz">0.5M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Japanese-Albanian (198,952 sentence pairs, 3.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Japanese-Serbian (355,213 sentence pairs, 5.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-sr.tmx.gz">0.4M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Japanese-Swahili (143,495 sentence pairs, 2.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-sw.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Japanese-Tamil (118,497 sentence pairs, 1.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Japanese-Telugu (105,649 sentence pairs, 1.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-te.tmx.gz">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Japanese-Thai (585,735 sentence pairs, 5.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-th.tmx.gz">0.6M</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Japanese-Turkish (2,277,026 sentence pairs, 33.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-tr.tmx.gz">2.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Japanese-Ukrainian (1,212,332 sentence pairs, 18.98M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-uk.tmx.gz">1.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Japanese-Urdu (162,476 sentence pairs, 3.18M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Japanese-Uzbek (66,026 sentence pairs, 1.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-uz.tmx.gz">66.0k</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Japanese-Vietnamese (1,402,029 sentence pairs, 32.12M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-vi.tmx.gz">1.4M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Japanese-Xhosa (27,531 sentence pairs, 0.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ja-xh.tmx.gz">27.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kk plain text' href="download.php?f=MultiHPLT/v2/mono/kk.txt.gz">kk</a>
</th><td>1</td> <td>33.5M</td> <td>1.9M</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Kazakh-Afrikaans (178,467 sentence pairs, 5.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-kk.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Kazakh-Arabic (153,965 sentence pairs, 4.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-kk.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Kazakh-Azerbaijani (241,749 sentence pairs, 6.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-kk.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Kazakh-Belarusian (177,706 sentence pairs, 4.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-kk.txt.zip">0.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Kazakh-Bulgarian (433,961 sentence pairs, 12.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-kk.txt.zip">0.4M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Kazakh-Bengali (70,135 sentence pairs, 1.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-kk.txt.zip">70.1k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Kazakh-Bosnian (58,181 sentence pairs, 1.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-kk.txt.zip">58.2k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Kazakh-Catalan (214,323 sentence pairs, 6.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-kk.txt.zip">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Kazakh-Welsh (116,164 sentence pairs, 3.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-kk.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Kazakh-Esperanto (92,828 sentence pairs, 2.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-kk.txt.zip">92.8k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Kazakh-Estonian (273,657 sentence pairs, 7.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-kk.txt.zip">0.3M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Kazakh-Basque (117,856 sentence pairs, 3.05M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-kk.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Kazakh-Persian (67,234 sentence pairs, 1.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-kk.txt.zip">67.2k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Kazakh-Finnish (378,071 sentence pairs, 8.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-kk.txt.zip">0.4M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Kazakh-Irish (165,126 sentence pairs, 5.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-kk.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Kazakh-Galician (166,356 sentence pairs, 5.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-kk.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Kazakh-Gujarati (54,235 sentence pairs, 1.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-kk.txt.zip">54.2k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Kazakh-Hebrew (105,761 sentence pairs, 2.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-kk.txt.zip">0.1M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Kazakh-Hindi (123,372 sentence pairs, 3.60M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-kk.txt.zip">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Kazakh-Croatian (363,406 sentence pairs, 9.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-kk.txt.zip">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Kazakh-Icelandic (157,625 sentence pairs, 4.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-kk.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Kazakh-Japanese (104,795 sentence pairs, 1.47M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-kk.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Kazakh-Kannada (48,597 sentence pairs, 1.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-kn.tmx.gz">48.6k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Kazakh-Korean (114,179 sentence pairs, 2.69M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-ko.tmx.gz">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Kazakh-Lithuanian (300,749 sentence pairs, 8.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Kazakh-Latvian (298,767 sentence pairs, 8.07M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-lv.tmx.gz">0.3M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Kazakh-Macedonian (222,735 sentence pairs, 6.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Kazakh-Malayalam (43,930 sentence pairs, 1.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-ml.tmx.gz">43.9k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Kazakh-Marathi (43,581 sentence pairs, 1.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-mr.tmx.gz">43.6k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Kazakh-Malay (265,664 sentence pairs, 7.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-ms.tmx.gz">0.3M</a>
</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Kazakh-Maltese (66,418 sentence pairs, 2.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-mt.tmx.gz">66.4k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Kazakh-BokmÃ¥l, Norwegian (310,922 sentence pairs, 8.98M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-nb.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Kazakh-Nepali (35,910 sentence pairs, 1.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-ne.tmx.gz">35.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Kazakh-Norwegian Nynorsk (3,075 sentence pairs, 64.29k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-nn.tmx.gz">3.1k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Kazakh-Sinhala (35,924 sentence pairs, 0.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-si.tmx.gz">35.9k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Kazakh-Slovak (315,146 sentence pairs, 8.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Kazakh-Slovenian (275,685 sentence pairs, 7.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Kazakh-Albanian (191,610 sentence pairs, 6.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Kazakh-Serbian (229,176 sentence pairs, 6.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Kazakh-Swahili (115,313 sentence pairs, 3.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-sw.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Kazakh-Tamil (55,817 sentence pairs, 1.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-ta.tmx.gz">55.8k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Kazakh-Telugu (55,848 sentence pairs, 1.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-te.tmx.gz">55.8k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Kazakh-Thai (51,164 sentence pairs, 0.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-th.tmx.gz">51.2k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Kazakh-Turkish (124,856 sentence pairs, 3.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Kazakh-Ukrainian (332,627 sentence pairs, 9.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-uk.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Kazakh-Urdu (57,027 sentence pairs, 1.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-ur.tmx.gz">57.0k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Kazakh-Uzbek (178,794 sentence pairs, 5.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Kazakh-Vietnamese (265,967 sentence pairs, 9.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Kazakh-Xhosa (57,002 sentence pairs, 1.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kk-xh.tmx.gz">57.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kn plain text' href="download.php?f=MultiHPLT/v2/mono/kn.txt.gz">kn</a>
</th><td>1</td> <td>23.0M</td> <td>0.6M</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Kannada-Afrikaans (74,410 sentence pairs, 2.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-kn.txt.zip">74.4k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Kannada-Arabic (118,173 sentence pairs, 3.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-kn.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Kannada-Azerbaijani (66,859 sentence pairs, 1.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-kn.txt.zip">66.9k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Kannada-Belarusian (78,532 sentence pairs, 1.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-kn.txt.zip">78.5k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Kannada-Bulgarian (148,663 sentence pairs, 3.54M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-kn.txt.zip">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Kannada-Bengali (123,684 sentence pairs, 3.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-kn.txt.zip">0.1M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Kannada-Bosnian (16,869 sentence pairs, 0.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-kn.txt.zip">16.9k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Kannada-Catalan (101,480 sentence pairs, 2.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-kn.txt.zip">0.1M</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Kannada-Welsh (69,197 sentence pairs, 2.05M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-kn.txt.zip">69.2k</a>
</td><td></td><td bgcolor="#ffffe6"><a rel="nofollow" title='Kannada-Esperanto (56,960 sentence pairs, 1.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-kn.txt.zip">57.0k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Kannada-Estonian (68,707 sentence pairs, 1.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-kn.txt.zip">68.7k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Kannada-Basque (47,445 sentence pairs, 1.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-kn.txt.zip">47.4k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Kannada-Persian (73,811 sentence pairs, 2.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-kn.txt.zip">73.8k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Kannada-Finnish (115,400 sentence pairs, 2.35M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-kn.txt.zip">0.1M</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Kannada-Irish (68,097 sentence pairs, 2.04M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-kn.txt.zip">68.1k</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Kannada-Galician (77,522 sentence pairs, 2.04M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-kn.txt.zip">77.5k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Kannada-Gujarati (130,769 sentence pairs, 4.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-kn.txt.zip">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Kannada-Hebrew (113,721 sentence pairs, 3.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-kn.txt.zip">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Kannada-Hindi (209,687 sentence pairs, 7.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-kn.txt.zip">0.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Kannada-Croatian (110,277 sentence pairs, 2.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-kn.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Kannada-Icelandic (57,616 sentence pairs, 1.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-kn.txt.zip">57.6k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Kannada-Japanese (83,890 sentence pairs, 1.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-kn.txt.zip">83.9k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Kannada-Kazakh (48,597 sentence pairs, 1.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-kn.txt.zip">48.6k</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Kannada-Korean (104,933 sentence pairs, 2.83M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-ko.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Kannada-Lithuanian (78,305 sentence pairs, 1.85M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-lt.tmx.gz">78.3k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Kannada-Latvian (78,397 sentence pairs, 1.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-lv.tmx.gz">78.4k</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Kannada-Macedonian (79,815 sentence pairs, 2.07M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-mk.tmx.gz">79.8k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Kannada-Malayalam (95,659 sentence pairs, 2.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-ml.tmx.gz">95.7k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Kannada-Marathi (82,393 sentence pairs, 2.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-mr.tmx.gz">82.4k</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Kannada-Malay (79,797 sentence pairs, 2.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-ms.tmx.gz">79.8k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Kannada-Maltese (27,448 sentence pairs, 0.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-mt.tmx.gz">27.4k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Kannada-BokmÃ¥l, Norwegian (72,464 sentence pairs, 1.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-nb.tmx.gz">72.5k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Kannada-Nepali (50,986 sentence pairs, 1.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-ne.tmx.gz">51.0k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Kannada-Norwegian Nynorsk (2,000 sentence pairs, 45.93k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-nn.tmx.gz">2.0k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Kannada-Sinhala (43,555 sentence pairs, 1.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-si.tmx.gz">43.6k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Kannada-Slovak (89,670 sentence pairs, 2.15M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-sk.tmx.gz">89.7k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Kannada-Slovenian (67,888 sentence pairs, 1.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-sl.tmx.gz">67.9k</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Kannada-Albanian (69,729 sentence pairs, 2.05M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-sq.tmx.gz">69.7k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Kannada-Serbian (72,863 sentence pairs, 1.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-sr.tmx.gz">72.9k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Kannada-Swahili (57,412 sentence pairs, 1.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-sw.tmx.gz">57.4k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Kannada-Tamil (129,511 sentence pairs, 3.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Kannada-Telugu (163,039 sentence pairs, 5.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-te.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Kannada-Thai (50,855 sentence pairs, 1.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-th.tmx.gz">50.9k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Kannada-Turkish (103,615 sentence pairs, 2.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Kannada-Ukrainian (103,653 sentence pairs, 2.47M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-uk.tmx.gz">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Kannada-Urdu (97,222 sentence pairs, 3.77M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-ur.tmx.gz">97.2k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Kannada-Uzbek (36,502 sentence pairs, 1.09M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-uz.tmx.gz">36.5k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Kannada-Vietnamese (83,432 sentence pairs, 2.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-vi.tmx.gz">83.4k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Kannada-Xhosa (24,805 sentence pairs, 0.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/kn-xh.tmx.gz">24.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ko plain text' href="download.php?f=MultiHPLT/v2/mono/ko.txt.gz">ko</a>
</th><td>1</td> <td>293.2M</td> <td>15.2M</td><td bgcolor="#deffc6"><a rel="nofollow" title='Korean-Afrikaans (345,197 sentence pairs, 10.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-ko.txt.zip">0.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Korean-Arabic (1,974,409 sentence pairs, 56.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-ko.txt.zip">2.0M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Korean-Azerbaijani (166,910 sentence pairs, 3.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-ko.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Korean-Belarusian (228,162 sentence pairs, 5.43M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-ko.txt.zip">0.2M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Korean-Bulgarian (1,253,886 sentence pairs, 32.85M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-ko.txt.zip">1.3M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Korean-Bengali (341,210 sentence pairs, 9.72M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-ko.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Korean-Bosnian (83,054 sentence pairs, 1.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-ko.txt.zip">83.1k</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Korean-Catalan (506,045 sentence pairs, 14.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-ko.txt.zip">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Korean-Welsh (170,548 sentence pairs, 5.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-ko.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Korean-Esperanto (188,164 sentence pairs, 6.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-ko.txt.zip">0.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Korean-Estonian (521,582 sentence pairs, 13.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-ko.txt.zip">0.5M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Korean-Basque (106,191 sentence pairs, 2.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-ko.txt.zip">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Korean-Persian (327,776 sentence pairs, 10.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-ko.txt.zip">0.3M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Korean-Finnish (1,676,302 sentence pairs, 38.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-ko.txt.zip">1.7M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Korean-Irish (175,727 sentence pairs, 5.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-ko.txt.zip">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Korean-Galician (178,883 sentence pairs, 4.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-ko.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Korean-Gujarati (144,535 sentence pairs, 4.43M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-ko.txt.zip">0.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Korean-Hebrew (1,796,761 sentence pairs, 45.34M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-ko.txt.zip">1.8M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Korean-Hindi (1,256,611 sentence pairs, 41.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-ko.txt.zip">1.3M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Korean-Croatian (927,537 sentence pairs, 24.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-ko.txt.zip">0.9M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Korean-Icelandic (224,272 sentence pairs, 6.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-ko.txt.zip">0.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Korean-Japanese (3,639,503 sentence pairs, 51.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-ko.txt.zip">3.6M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Korean-Kazakh (114,179 sentence pairs, 2.69M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-ko.txt.zip">0.1M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Korean-Kannada (104,933 sentence pairs, 2.83M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-ko.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Korean-Lithuanian (850,922 sentence pairs, 19.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-lt.tmx.gz">0.9M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Korean-Latvian (827,346 sentence pairs, 19.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-lv.tmx.gz">0.8M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Korean-Macedonian (259,944 sentence pairs, 6.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-mk.tmx.gz">0.3M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Korean-Malayalam (98,656 sentence pairs, 2.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-ml.tmx.gz">98.7k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Korean-Marathi (101,741 sentence pairs, 3.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-mr.tmx.gz">0.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Korean-Malay (745,480 sentence pairs, 19.18M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-ms.tmx.gz">0.7M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Korean-Maltese (83,791 sentence pairs, 2.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-mt.tmx.gz">83.8k</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Korean-BokmÃ¥l, Norwegian (1,177,859 sentence pairs, 32.15M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-nb.tmx.gz">1.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Korean-Nepali (90,052 sentence pairs, 2.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-ne.tmx.gz">90.1k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Korean-Norwegian Nynorsk (19,335 sentence pairs, 0.40M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-nn.tmx.gz">19.3k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Korean-Sinhala (66,972 sentence pairs, 1.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-si.tmx.gz">67.0k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Korean-Slovak (1,101,327 sentence pairs, 26.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-sk.tmx.gz">1.1M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Korean-Slovenian (569,369 sentence pairs, 14.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-sl.tmx.gz">0.6M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Korean-Albanian (337,653 sentence pairs, 10.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Korean-Serbian (414,700 sentence pairs, 10.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-sr.tmx.gz">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Korean-Swahili (207,806 sentence pairs, 6.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-sw.tmx.gz">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Korean-Tamil (183,468 sentence pairs, 4.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-ta.tmx.gz">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Korean-Telugu (161,107 sentence pairs, 4.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-te.tmx.gz">0.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Korean-Thai (806,349 sentence pairs, 16.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-th.tmx.gz">0.8M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Korean-Turkish (3,005,710 sentence pairs, 78.12M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-tr.tmx.gz">3.0M</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Korean-Ukrainian (1,400,485 sentence pairs, 32.90M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-uk.tmx.gz">1.4M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Korean-Urdu (255,279 sentence pairs, 9.25M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-ur.tmx.gz">0.3M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Korean-Uzbek (82,358 sentence pairs, 2.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-uz.tmx.gz">82.4k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Korean-Vietnamese (1,676,139 sentence pairs, 55.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-vi.tmx.gz">1.7M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Korean-Xhosa (114,989 sentence pairs, 3.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ko-xh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=MultiHPLT/v2/mono/lt.txt.gz">lt</a>
</th><td>1</td> <td>174.2M</td> <td>9.8M</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Lithuanian-Afrikaans (590,081 sentence pairs, 18.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-lt.txt.zip">0.6M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Lithuanian-Arabic (674,733 sentence pairs, 18.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-lt.txt.zip">0.7M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Lithuanian-Azerbaijani (431,074 sentence pairs, 11.40M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-lt.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Lithuanian-Belarusian (571,543 sentence pairs, 16.04M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-lt.txt.zip">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Lithuanian-Bulgarian (3,966,381 sentence pairs, 131.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-lt.txt.zip">4.0M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Bengali (155,870 sentence pairs, 3.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-lt.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Lithuanian-Bosnian (243,852 sentence pairs, 7.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-lt.txt.zip">0.2M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Lithuanian-Catalan (1,144,701 sentence pairs, 38.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-lt.txt.zip">1.1M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Welsh (422,266 sentence pairs, 14.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-lt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Lithuanian-Esperanto (241,606 sentence pairs, 7.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-lt.txt.zip">0.2M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Lithuanian-Estonian (2,526,208 sentence pairs, 79.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-lt.txt.zip">2.5M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Lithuanian-Basque (229,302 sentence pairs, 5.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-lt.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Lithuanian-Persian (197,620 sentence pairs, 5.74M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-lt.txt.zip">0.2M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Lithuanian-Finnish (3,592,056 sentence pairs, 103.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-lt.txt.zip">3.6M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Lithuanian-Irish (605,589 sentence pairs, 22.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-lt.txt.zip">0.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Galician (472,996 sentence pairs, 14.40M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-lt.txt.zip">0.5M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Lithuanian-Gujarati (95,595 sentence pairs, 2.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-lt.txt.zip">95.6k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Lithuanian-Hebrew (804,596 sentence pairs, 19.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-lt.txt.zip">0.8M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Hindi (469,488 sentence pairs, 13.69M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-lt.txt.zip">0.5M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Lithuanian-Croatian (2,844,548 sentence pairs, 91.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-lt.txt.zip">2.8M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Lithuanian-Icelandic (624,939 sentence pairs, 18.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-lt.txt.zip">0.6M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Lithuanian-Japanese (707,744 sentence pairs, 10.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-lt.txt.zip">0.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Lithuanian-Kazakh (300,749 sentence pairs, 8.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-lt.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Lithuanian-Kannada (78,305 sentence pairs, 1.85M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-lt.txt.zip">78.3k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Lithuanian-Korean (850,922 sentence pairs, 19.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-lt.txt.zip">0.9M</a>
</td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Lithuanian-Latvian (3,935,260 sentence pairs, 122.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-lv.tmx.gz">3.9M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Lithuanian-Macedonian (778,493 sentence pairs, 23.48M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-mk.tmx.gz">0.8M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Lithuanian-Malayalam (79,413 sentence pairs, 1.69M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-ml.tmx.gz">79.4k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Lithuanian-Marathi (85,624 sentence pairs, 2.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-mr.tmx.gz">85.6k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Lithuanian-Malay (1,413,643 sentence pairs, 41.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-ms.tmx.gz">1.4M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Lithuanian-Maltese (706,321 sentence pairs, 29.40M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Lithuanian-BokmÃ¥l, Norwegian (2,347,132 sentence pairs, 70.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-nb.tmx.gz">2.3M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Lithuanian-Nepali (71,504 sentence pairs, 1.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-ne.tmx.gz">71.5k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Lithuanian-Norwegian Nynorsk (30,571 sentence pairs, 0.77M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-nn.tmx.gz">30.6k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Lithuanian-Sinhala (57,583 sentence pairs, 1.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-si.tmx.gz">57.6k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Lithuanian-Slovak (3,562,070 sentence pairs, 110.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-sk.tmx.gz">3.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Lithuanian-Slovenian (2,565,577 sentence pairs, 87.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-sl.tmx.gz">2.6M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Lithuanian-Albanian (744,467 sentence pairs, 24.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Lithuanian-Serbian (1,104,788 sentence pairs, 31.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-sr.tmx.gz">1.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Lithuanian-Swahili (367,357 sentence pairs, 11.69M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-sw.tmx.gz">0.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Lithuanian-Tamil (135,492 sentence pairs, 2.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Lithuanian-Telugu (118,584 sentence pairs, 2.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-te.tmx.gz">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Lithuanian-Thai (379,872 sentence pairs, 6.61M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-th.tmx.gz">0.4M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Lithuanian-Turkish (1,164,842 sentence pairs, 29.04M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-tr.tmx.gz">1.2M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Lithuanian-Ukrainian (2,534,267 sentence pairs, 71.25M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-uk.tmx.gz">2.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Lithuanian-Urdu (167,430 sentence pairs, 5.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Lithuanian-Uzbek (249,627 sentence pairs, 7.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Lithuanian-Vietnamese (1,656,458 sentence pairs, 60.77M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-vi.tmx.gz">1.7M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Lithuanian-Xhosa (98,027 sentence pairs, 2.72M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lt-xh.tmx.gz">98.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=MultiHPLT/v2/mono/lv.txt.gz">lv</a>
</th><td>1</td> <td>158.3M</td> <td>8.7M</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Latvian-Afrikaans (564,559 sentence pairs, 18.76M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-lv.txt.zip">0.6M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Latvian-Arabic (634,184 sentence pairs, 17.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-lv.txt.zip">0.6M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Latvian-Azerbaijani (396,632 sentence pairs, 10.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-lv.txt.zip">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Latvian-Belarusian (576,898 sentence pairs, 16.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-lv.txt.zip">0.6M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Latvian-Bulgarian (3,752,571 sentence pairs, 127.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-lv.txt.zip">3.8M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Latvian-Bengali (119,673 sentence pairs, 2.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-lv.txt.zip">0.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Latvian-Bosnian (226,928 sentence pairs, 6.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-lv.txt.zip">0.2M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Latvian-Catalan (1,181,748 sentence pairs, 39.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-lv.txt.zip">1.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Welsh (456,402 sentence pairs, 15.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-lv.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Latvian-Esperanto (231,556 sentence pairs, 7.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-lv.txt.zip">0.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Latvian-Estonian (2,603,706 sentence pairs, 82.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-lv.txt.zip">2.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Latvian-Basque (246,177 sentence pairs, 6.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-lv.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Latvian-Persian (171,744 sentence pairs, 5.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-lv.txt.zip">0.2M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Latvian-Finnish (3,439,376 sentence pairs, 100.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-lv.txt.zip">3.4M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Latvian-Irish (658,225 sentence pairs, 24.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-lv.txt.zip">0.7M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Latvian-Galician (508,131 sentence pairs, 15.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-lv.txt.zip">0.5M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Latvian-Gujarati (96,018 sentence pairs, 2.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-lv.txt.zip">96.0k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Latvian-Hebrew (768,509 sentence pairs, 19.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-lv.txt.zip">0.8M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Hindi (446,330 sentence pairs, 13.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-lv.txt.zip">0.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Latvian-Croatian (2,829,093 sentence pairs, 92.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-lv.txt.zip">2.8M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Latvian-Icelandic (654,694 sentence pairs, 20.05M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-lv.txt.zip">0.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Latvian-Japanese (648,283 sentence pairs, 10.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-lv.txt.zip">0.6M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Latvian-Kazakh (298,767 sentence pairs, 8.07M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-lv.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Latvian-Kannada (78,397 sentence pairs, 1.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-lv.txt.zip">78.4k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Latvian-Korean (827,346 sentence pairs, 19.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-lv.txt.zip">0.8M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Latvian-Lithuanian (3,935,260 sentence pairs, 122.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-lv.txt.zip">3.9M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Latvian-Macedonian (743,741 sentence pairs, 23.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-mk.tmx.gz">0.7M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Latvian-Malayalam (72,168 sentence pairs, 1.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-ml.tmx.gz">72.2k</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Latvian-Marathi (76,942 sentence pairs, 2.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-mr.tmx.gz">76.9k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Latvian-Malay (1,364,071 sentence pairs, 40.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-ms.tmx.gz">1.4M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Latvian-Maltese (727,522 sentence pairs, 30.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-mt.tmx.gz">0.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Latvian-BokmÃ¥l, Norwegian (2,276,158 sentence pairs, 70.08M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-nb.tmx.gz">2.3M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Latvian-Nepali (67,107 sentence pairs, 1.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-ne.tmx.gz">67.1k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Latvian-Norwegian Nynorsk (23,616 sentence pairs, 0.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-nn.tmx.gz">23.6k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Latvian-Sinhala (54,131 sentence pairs, 1.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-si.tmx.gz">54.1k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Latvian-Slovak (3,429,372 sentence pairs, 109.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-sk.tmx.gz">3.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Latvian-Slovenian (2,564,398 sentence pairs, 88.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-sl.tmx.gz">2.6M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Latvian-Albanian (771,800 sentence pairs, 26.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-sq.tmx.gz">0.8M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Latvian-Serbian (1,093,789 sentence pairs, 31.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-sr.tmx.gz">1.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Latvian-Swahili (391,249 sentence pairs, 12.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-sw.tmx.gz">0.4M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Latvian-Tamil (114,313 sentence pairs, 2.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Latvian-Telugu (115,679 sentence pairs, 2.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-te.tmx.gz">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Latvian-Thai (335,354 sentence pairs, 6.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-th.tmx.gz">0.3M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Latvian-Turkish (1,041,120 sentence pairs, 26.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-tr.tmx.gz">1.0M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Latvian-Ukrainian (2,404,625 sentence pairs, 69.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-uk.tmx.gz">2.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Latvian-Urdu (159,916 sentence pairs, 5.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Latvian-Uzbek (240,937 sentence pairs, 7.32M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Latvian-Vietnamese (1,542,630 sentence pairs, 58.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-vi.tmx.gz">1.5M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Latvian-Xhosa (107,116 sentence pairs, 3.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/lv-xh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=MultiHPLT/v2/mono/mk.txt.gz">mk</a>
</th><td>1</td> <td>75.2M</td> <td>3.5M</td><td bgcolor="#daffc7"><a rel="nofollow" title='Macedonian-Afrikaans (474,709 sentence pairs, 17.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-mk.txt.zip">0.5M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Arabic (271,787 sentence pairs, 8.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-mk.txt.zip">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Macedonian-Azerbaijani (350,711 sentence pairs, 10.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-mk.txt.zip">0.4M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Macedonian-Belarusian (561,485 sentence pairs, 18.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-mk.txt.zip">0.6M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Macedonian-Bulgarian (1,235,056 sentence pairs, 40.90M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-mk.txt.zip">1.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Macedonian-Bengali (107,253 sentence pairs, 2.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-mk.txt.zip">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Bosnian (214,541 sentence pairs, 7.83M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-mk.txt.zip">0.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Macedonian-Catalan (676,990 sentence pairs, 25.00M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-mk.txt.zip">0.7M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Macedonian-Welsh (453,048 sentence pairs, 17.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-mk.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Esperanto (193,126 sentence pairs, 6.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-mk.txt.zip">0.2M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Macedonian-Estonian (586,781 sentence pairs, 17.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-mk.txt.zip">0.6M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Macedonian-Basque (200,681 sentence pairs, 5.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-mk.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Macedonian-Persian (151,254 sentence pairs, 5.00M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-mk.txt.zip">0.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Macedonian-Finnish (843,659 sentence pairs, 23.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-mk.txt.zip">0.8M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Macedonian-Irish (516,767 sentence pairs, 19.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-mk.txt.zip">0.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Macedonian-Galician (531,408 sentence pairs, 18.07M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-mk.txt.zip">0.5M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Macedonian-Gujarati (91,230 sentence pairs, 2.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-mk.txt.zip">91.2k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Hebrew (254,177 sentence pairs, 6.25M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-mk.txt.zip">0.3M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Macedonian-Hindi (228,459 sentence pairs, 7.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-mk.txt.zip">0.2M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Macedonian-Croatian (976,959 sentence pairs, 31.77M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-mk.txt.zip">1.0M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Macedonian-Icelandic (478,920 sentence pairs, 16.04M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-mk.txt.zip">0.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Macedonian-Japanese (223,536 sentence pairs, 3.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-mk.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Macedonian-Kazakh (222,735 sentence pairs, 6.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-mk.txt.zip">0.2M</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Macedonian-Kannada (79,815 sentence pairs, 2.07M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-mk.txt.zip">79.8k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Korean (259,944 sentence pairs, 6.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-mk.txt.zip">0.3M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Macedonian-Lithuanian (778,493 sentence pairs, 23.48M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-mk.txt.zip">0.8M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Macedonian-Latvian (743,741 sentence pairs, 23.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-mk.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#ffffe8"><a rel="nofollow" title='Macedonian-Malayalam (58,321 sentence pairs, 1.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-ml.tmx.gz">58.3k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Macedonian-Marathi (62,228 sentence pairs, 1.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-mr.tmx.gz">62.2k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Macedonian-Malay (647,520 sentence pairs, 21.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-ms.tmx.gz">0.6M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Macedonian-Maltese (213,949 sentence pairs, 7.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Macedonian-BokmÃ¥l, Norwegian (798,684 sentence pairs, 27.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-nb.tmx.gz">0.8M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Macedonian-Nepali (57,788 sentence pairs, 1.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-ne.tmx.gz">57.8k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Macedonian-Norwegian Nynorsk (20,899 sentence pairs, 0.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-nn.tmx.gz">20.9k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Macedonian-Sinhala (45,536 sentence pairs, 1.25M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-si.tmx.gz">45.5k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Macedonian-Slovak (847,618 sentence pairs, 26.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-sk.tmx.gz">0.8M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Macedonian-Slovenian (719,039 sentence pairs, 24.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-sl.tmx.gz">0.7M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Macedonian-Albanian (821,671 sentence pairs, 32.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-sq.tmx.gz">0.8M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Macedonian-Serbian (753,654 sentence pairs, 24.70M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-sr.tmx.gz">0.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Macedonian-Swahili (317,737 sentence pairs, 11.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-sw.tmx.gz">0.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Macedonian-Tamil (97,773 sentence pairs, 2.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-ta.tmx.gz">97.8k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Macedonian-Telugu (100,196 sentence pairs, 2.55M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-te.tmx.gz">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Macedonian-Thai (113,113 sentence pairs, 2.32M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-th.tmx.gz">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Turkish (279,920 sentence pairs, 7.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-tr.tmx.gz">0.3M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Macedonian-Ukrainian (833,349 sentence pairs, 26.54M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-uk.tmx.gz">0.8M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Macedonian-Urdu (115,950 sentence pairs, 4.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Uzbek (183,574 sentence pairs, 6.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Macedonian-Vietnamese (668,256 sentence pairs, 28.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-vi.tmx.gz">0.7M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Macedonian-Xhosa (77,621 sentence pairs, 2.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mk-xh.tmx.gz">77.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ml plain text' href="download.php?f=MultiHPLT/v2/mono/ml.txt.gz">ml</a>
</th><td>1</td> <td>18.4M</td> <td>0.5M</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Malayalam-Afrikaans (53,825 sentence pairs, 1.55M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-ml.txt.zip">53.8k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Malayalam-Arabic (86,933 sentence pairs, 2.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-ml.txt.zip">86.9k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Malayalam-Azerbaijani (52,720 sentence pairs, 1.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-ml.txt.zip">52.7k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Malayalam-Belarusian (50,543 sentence pairs, 1.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-ml.txt.zip">50.5k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Malayalam-Bulgarian (121,007 sentence pairs, 2.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-ml.txt.zip">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Malayalam-Bengali (86,719 sentence pairs, 2.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-ml.txt.zip">86.7k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Malayalam-Bosnian (15,233 sentence pairs, 0.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-ml.txt.zip">15.2k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Malayalam-Catalan (66,182 sentence pairs, 1.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-ml.txt.zip">66.2k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Malayalam-Welsh (42,959 sentence pairs, 1.25M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-ml.txt.zip">43.0k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Malayalam-Esperanto (39,689 sentence pairs, 1.09M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-ml.txt.zip">39.7k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Malayalam-Estonian (51,125 sentence pairs, 1.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-ml.txt.zip">51.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Malayalam-Basque (34,198 sentence pairs, 0.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-ml.txt.zip">34.2k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Malayalam-Persian (54,241 sentence pairs, 1.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-ml.txt.zip">54.2k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Malayalam-Finnish (98,308 sentence pairs, 2.00M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-ml.txt.zip">98.3k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Malayalam-Irish (41,024 sentence pairs, 1.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-ml.txt.zip">41.0k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Malayalam-Galician (48,886 sentence pairs, 1.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-ml.txt.zip">48.9k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Malayalam-Gujarati (70,122 sentence pairs, 2.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-ml.txt.zip">70.1k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Malayalam-Hebrew (81,795 sentence pairs, 2.12M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-ml.txt.zip">81.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Malayalam-Hindi (142,942 sentence pairs, 5.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-ml.txt.zip">0.1M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Malayalam-Croatian (90,974 sentence pairs, 2.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-ml.txt.zip">91.0k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Malayalam-Icelandic (43,446 sentence pairs, 1.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-ml.txt.zip">43.4k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Malayalam-Japanese (59,064 sentence pairs, 0.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-ml.txt.zip">59.1k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Malayalam-Kazakh (43,930 sentence pairs, 1.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-ml.txt.zip">43.9k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Malayalam-Kannada (95,659 sentence pairs, 2.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-ml.txt.zip">95.7k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Malayalam-Korean (98,656 sentence pairs, 2.34M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-ml.txt.zip">98.7k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Malayalam-Lithuanian (79,413 sentence pairs, 1.69M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-ml.txt.zip">79.4k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Malayalam-Latvian (72,168 sentence pairs, 1.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-ml.txt.zip">72.2k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Malayalam-Macedonian (58,321 sentence pairs, 1.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-ml.txt.zip">58.3k</a>
</td><td></td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Malayalam-Marathi (66,057 sentence pairs, 2.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-mr.tmx.gz">66.1k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Malayalam-Malay (46,942 sentence pairs, 1.20M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-ms.tmx.gz">46.9k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Malayalam-Maltese (16,789 sentence pairs, 0.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-mt.tmx.gz">16.8k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Malayalam-BokmÃ¥l, Norwegian (56,953 sentence pairs, 1.50M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-nb.tmx.gz">57.0k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Malayalam-Nepali (38,762 sentence pairs, 1.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-ne.tmx.gz">38.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Malayalam-Norwegian Nynorsk (1,790 sentence pairs, 41.44k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-nn.tmx.gz">1.8k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Malayalam-Sinhala (39,075 sentence pairs, 1.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-si.tmx.gz">39.1k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Malayalam-Slovak (60,936 sentence pairs, 1.43M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-sk.tmx.gz">60.9k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Malayalam-Slovenian (47,223 sentence pairs, 1.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-sl.tmx.gz">47.2k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Malayalam-Albanian (55,303 sentence pairs, 1.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-sq.tmx.gz">55.3k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Malayalam-Serbian (53,727 sentence pairs, 1.31M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-sr.tmx.gz">53.7k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Malayalam-Swahili (42,590 sentence pairs, 1.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-sw.tmx.gz">42.6k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Malayalam-Tamil (100,514 sentence pairs, 2.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Malayalam-Telugu (101,438 sentence pairs, 2.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-te.tmx.gz">0.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Malayalam-Thai (41,093 sentence pairs, 0.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-th.tmx.gz">41.1k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Malayalam-Turkish (81,919 sentence pairs, 2.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-tr.tmx.gz">81.9k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Malayalam-Ukrainian (75,243 sentence pairs, 1.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-uk.tmx.gz">75.2k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Malayalam-Urdu (63,624 sentence pairs, 2.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-ur.tmx.gz">63.6k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Malayalam-Uzbek (30,315 sentence pairs, 0.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-uz.tmx.gz">30.3k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Malayalam-Vietnamese (59,241 sentence pairs, 1.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-vi.tmx.gz">59.2k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Malayalam-Xhosa (25,283 sentence pairs, 0.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ml-xh.tmx.gz">25.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mr plain text' href="download.php?f=MultiHPLT/v2/mono/mr.txt.gz">mr</a>
</th><td>1</td> <td>21.5M</td> <td>0.5M</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Marathi-Afrikaans (59,580 sentence pairs, 2.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-mr.txt.zip">59.6k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Marathi-Arabic (96,746 sentence pairs, 3.55M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-mr.txt.zip">96.7k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Marathi-Azerbaijani (53,303 sentence pairs, 1.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-mr.txt.zip">53.3k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Marathi-Belarusian (53,396 sentence pairs, 1.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-mr.txt.zip">53.4k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Marathi-Bulgarian (132,663 sentence pairs, 3.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-mr.txt.zip">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Marathi-Bengali (119,317 sentence pairs, 4.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-mr.txt.zip">0.1M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Marathi-Bosnian (14,005 sentence pairs, 0.35M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-mr.txt.zip">14.0k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Marathi-Catalan (67,579 sentence pairs, 2.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-mr.txt.zip">67.6k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Marathi-Welsh (50,484 sentence pairs, 1.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-mr.txt.zip">50.5k</a>
</td><td></td><td bgcolor="#ffffe9"><a rel="nofollow" title='Marathi-Esperanto (42,844 sentence pairs, 1.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-mr.txt.zip">42.8k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Marathi-Estonian (54,402 sentence pairs, 1.47M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-mr.txt.zip">54.4k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Marathi-Basque (33,655 sentence pairs, 0.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-mr.txt.zip">33.7k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Marathi-Persian (60,158 sentence pairs, 2.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-mr.txt.zip">60.2k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Marathi-Finnish (101,922 sentence pairs, 2.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-mr.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Marathi-Irish (44,373 sentence pairs, 1.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-mr.txt.zip">44.4k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Marathi-Galician (52,989 sentence pairs, 1.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-mr.txt.zip">53.0k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Marathi-Gujarati (109,170 sentence pairs, 4.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-mr.txt.zip">0.1M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Marathi-Hebrew (97,665 sentence pairs, 3.31M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-mr.txt.zip">97.7k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Marathi-Hindi (208,931 sentence pairs, 9.07M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-mr.txt.zip">0.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Marathi-Croatian (91,656 sentence pairs, 2.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-mr.txt.zip">91.7k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Marathi-Icelandic (52,896 sentence pairs, 1.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-mr.txt.zip">52.9k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Marathi-Japanese (63,837 sentence pairs, 0.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-mr.txt.zip">63.8k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Marathi-Kazakh (43,581 sentence pairs, 1.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-mr.txt.zip">43.6k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Marathi-Kannada (82,393 sentence pairs, 2.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-mr.txt.zip">82.4k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Marathi-Korean (101,741 sentence pairs, 3.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-mr.txt.zip">0.1M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Marathi-Lithuanian (85,624 sentence pairs, 2.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-mr.txt.zip">85.6k</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Marathi-Latvian (76,942 sentence pairs, 2.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-mr.txt.zip">76.9k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Marathi-Macedonian (62,228 sentence pairs, 1.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-mr.txt.zip">62.2k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Marathi-Malayalam (66,057 sentence pairs, 2.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-mr.txt.zip">66.1k</a>
</td><td></td><td bgcolor="#ffffe1"><a rel="nofollow" title='Marathi-Malay (60,738 sentence pairs, 1.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-ms.tmx.gz">60.7k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Marathi-Maltese (19,113 sentence pairs, 0.60M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-mt.tmx.gz">19.1k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Marathi-BokmÃ¥l, Norwegian (66,067 sentence pairs, 2.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-nb.tmx.gz">66.1k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Marathi-Nepali (61,903 sentence pairs, 2.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-ne.tmx.gz">61.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Marathi-Norwegian Nynorsk (1,327 sentence pairs, 36.06k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-nn.tmx.gz">1.3k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Marathi-Sinhala (37,356 sentence pairs, 1.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-si.tmx.gz">37.4k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Marathi-Slovak (74,619 sentence pairs, 2.13M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-sk.tmx.gz">74.6k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Marathi-Slovenian (53,625 sentence pairs, 1.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-sl.tmx.gz">53.6k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Marathi-Albanian (66,278 sentence pairs, 2.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-sq.tmx.gz">66.3k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Marathi-Serbian (61,914 sentence pairs, 1.90M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-sr.tmx.gz">61.9k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Marathi-Swahili (50,868 sentence pairs, 1.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-sw.tmx.gz">50.9k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Marathi-Tamil (109,225 sentence pairs, 3.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Marathi-Telugu (107,628 sentence pairs, 3.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-te.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Marathi-Thai (50,336 sentence pairs, 1.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-th.tmx.gz">50.3k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Marathi-Turkish (93,012 sentence pairs, 3.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-tr.tmx.gz">93.0k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Marathi-Ukrainian (86,629 sentence pairs, 2.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-uk.tmx.gz">86.6k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Marathi-Urdu (96,257 sentence pairs, 4.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-ur.tmx.gz">96.3k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Marathi-Uzbek (35,944 sentence pairs, 1.25M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-uz.tmx.gz">35.9k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Marathi-Vietnamese (84,040 sentence pairs, 3.32M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-vi.tmx.gz">84.0k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Marathi-Xhosa (22,521 sentence pairs, 0.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mr-xh.tmx.gz">22.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ms plain text' href="download.php?f=MultiHPLT/v2/mono/ms.txt.gz">ms</a>
</th><td>1</td> <td>133.8M</td> <td>6.9M</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Malay-Afrikaans (598,078 sentence pairs, 20.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-ms.txt.zip">0.6M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Malay-Arabic (632,209 sentence pairs, 18.88M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-ms.txt.zip">0.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Malay-Azerbaijani (355,284 sentence pairs, 10.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-ms.txt.zip">0.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Malay-Belarusian (619,544 sentence pairs, 19.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-ms.txt.zip">0.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Malay-Bulgarian (1,762,511 sentence pairs, 55.60M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-ms.txt.zip">1.8M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Malay-Bengali (176,310 sentence pairs, 4.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-ms.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Malay-Bosnian (169,127 sentence pairs, 5.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-ms.txt.zip">0.2M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Malay-Catalan (1,094,617 sentence pairs, 39.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-ms.txt.zip">1.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Malay-Welsh (507,253 sentence pairs, 18.48M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-ms.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Malay-Esperanto (202,070 sentence pairs, 6.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-ms.txt.zip">0.2M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Malay-Estonian (952,317 sentence pairs, 27.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-ms.txt.zip">1.0M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Malay-Basque (187,121 sentence pairs, 5.07M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-ms.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Malay-Persian (209,062 sentence pairs, 6.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-ms.txt.zip">0.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Malay-Finnish (1,671,023 sentence pairs, 45.54M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-ms.txt.zip">1.7M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Malay-Irish (588,594 sentence pairs, 21.83M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-ms.txt.zip">0.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Malay-Galician (504,182 sentence pairs, 16.88M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-ms.txt.zip">0.5M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Malay-Gujarati (103,763 sentence pairs, 3.00M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-ms.txt.zip">0.1M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Malay-Hebrew (524,434 sentence pairs, 13.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-ms.txt.zip">0.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Malay-Hindi (556,006 sentence pairs, 18.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-ms.txt.zip">0.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Malay-Croatian (1,421,972 sentence pairs, 43.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-ms.txt.zip">1.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Malay-Icelandic (542,756 sentence pairs, 17.16M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-ms.txt.zip">0.5M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Malay-Japanese (577,253 sentence pairs, 9.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-ms.txt.zip">0.6M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Malay-Kazakh (265,664 sentence pairs, 7.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-ms.txt.zip">0.3M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Malay-Kannada (79,797 sentence pairs, 2.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-ms.txt.zip">79.8k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Malay-Korean (745,480 sentence pairs, 19.18M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-ms.txt.zip">0.7M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Malay-Lithuanian (1,413,643 sentence pairs, 41.19M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-ms.txt.zip">1.4M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Malay-Latvian (1,364,071 sentence pairs, 40.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-ms.txt.zip">1.4M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Malay-Macedonian (647,520 sentence pairs, 21.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-ms.txt.zip">0.6M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Malay-Malayalam (46,942 sentence pairs, 1.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-ms.txt.zip">46.9k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Malay-Marathi (60,738 sentence pairs, 1.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-ms.txt.zip">60.7k</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Malay-Maltese (238,599 sentence pairs, 7.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Malay-BokmÃ¥l, Norwegian (1,597,214 sentence pairs, 51.03M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-nb.tmx.gz">1.6M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Malay-Nepali (59,854 sentence pairs, 1.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-ne.tmx.gz">59.9k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Malay-Norwegian Nynorsk (15,746 sentence pairs, 0.44M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-nn.tmx.gz">15.7k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Malay-Sinhala (49,853 sentence pairs, 1.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-si.tmx.gz">49.9k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Malay-Slovak (1,449,908 sentence pairs, 42.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-sk.tmx.gz">1.4M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Malay-Slovenian (1,015,252 sentence pairs, 32.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-sl.tmx.gz">1.0M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Malay-Albanian (652,108 sentence pairs, 23.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Malay-Serbian (786,940 sentence pairs, 24.31M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-sr.tmx.gz">0.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Malay-Swahili (429,698 sentence pairs, 14.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-sw.tmx.gz">0.4M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Malay-Tamil (113,539 sentence pairs, 2.95M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Malay-Telugu (105,215 sentence pairs, 2.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-te.tmx.gz">0.1M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Malay-Thai (337,406 sentence pairs, 7.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-th.tmx.gz">0.3M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Malay-Turkish (743,876 sentence pairs, 20.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-tr.tmx.gz">0.7M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Malay-Ukrainian (1,479,351 sentence pairs, 44.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-uk.tmx.gz">1.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Malay-Urdu (180,430 sentence pairs, 6.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Malay-Uzbek (207,853 sentence pairs, 6.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Malay-Vietnamese (1,699,304 sentence pairs, 68.48M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-vi.tmx.gz">1.7M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Malay-Xhosa (60,853 sentence pairs, 1.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ms-xh.tmx.gz">60.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=MultiHPLT/v2/mono/mt.txt.gz">mt</a>
</th><td>1</td> <td>44.0M</td> <td>1.3M</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Maltese-Afrikaans (142,584 sentence pairs, 5.19M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-mt.txt.zip">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Maltese-Arabic (77,286 sentence pairs, 2.35M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-mt.txt.zip">77.3k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Maltese-Azerbaijani (99,064 sentence pairs, 2.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-mt.txt.zip">99.1k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Maltese-Belarusian (178,310 sentence pairs, 5.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-mt.txt.zip">0.2M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Maltese-Bulgarian (792,335 sentence pairs, 35.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-mt.txt.zip">0.8M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Maltese-Bengali (33,344 sentence pairs, 0.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-mt.txt.zip">33.3k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Maltese-Bosnian (32,505 sentence pairs, 1.05M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-mt.txt.zip">32.5k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-Catalan (265,608 sentence pairs, 9.74M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-mt.txt.zip">0.3M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Maltese-Welsh (182,572 sentence pairs, 6.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-mt.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Maltese-Esperanto (67,670 sentence pairs, 2.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-mt.txt.zip">67.7k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Maltese-Estonian (591,693 sentence pairs, 24.43M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-mt.txt.zip">0.6M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Maltese-Basque (69,065 sentence pairs, 1.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-mt.txt.zip">69.1k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Maltese-Persian (46,866 sentence pairs, 1.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-mt.txt.zip">46.9k</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Maltese-Finnish (725,274 sentence pairs, 28.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-mt.txt.zip">0.7M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Maltese-Irish (285,089 sentence pairs, 11.85M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-mt.txt.zip">0.3M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Maltese-Galician (193,098 sentence pairs, 6.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-mt.txt.zip">0.2M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Maltese-Gujarati (29,036 sentence pairs, 0.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-mt.txt.zip">29.0k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Maltese-Hebrew (71,554 sentence pairs, 1.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-mt.txt.zip">71.6k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Maltese-Hindi (74,952 sentence pairs, 2.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-mt.txt.zip">75.0k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Maltese-Croatian (628,331 sentence pairs, 26.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-mt.txt.zip">0.6M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Maltese-Icelandic (177,800 sentence pairs, 5.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-mt.txt.zip">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Maltese-Japanese (66,821 sentence pairs, 1.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-mt.txt.zip">66.8k</a>
</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Maltese-Kazakh (66,418 sentence pairs, 2.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-mt.txt.zip">66.4k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Maltese-Kannada (27,448 sentence pairs, 0.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-mt.txt.zip">27.4k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Maltese-Korean (83,791 sentence pairs, 2.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-mt.txt.zip">83.8k</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Maltese-Lithuanian (706,321 sentence pairs, 29.40M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-mt.txt.zip">0.7M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Maltese-Latvian (727,522 sentence pairs, 30.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-mt.txt.zip">0.7M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Maltese-Macedonian (213,949 sentence pairs, 7.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-mt.txt.zip">0.2M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Maltese-Malayalam (16,789 sentence pairs, 0.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-mt.txt.zip">16.8k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Maltese-Marathi (19,113 sentence pairs, 0.60M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-mt.txt.zip">19.1k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Maltese-Malay (238,599 sentence pairs, 7.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-mt.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-BokmÃ¥l, Norwegian (268,683 sentence pairs, 9.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-nb.tmx.gz">0.3M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Maltese-Nepali (17,290 sentence pairs, 0.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-ne.tmx.gz">17.3k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Maltese-Norwegian Nynorsk (2,065 sentence pairs, 68.51k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-nn.tmx.gz">2.1k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Maltese-Sinhala (14,878 sentence pairs, 0.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-si.tmx.gz">14.9k</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Maltese-Slovak (745,485 sentence pairs, 32.04M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-sk.tmx.gz">0.7M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Maltese-Slovenian (675,983 sentence pairs, 30.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-sl.tmx.gz">0.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Maltese-Albanian (202,645 sentence pairs, 7.49M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Maltese-Serbian (202,606 sentence pairs, 6.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Maltese-Swahili (105,540 sentence pairs, 3.73M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-sw.tmx.gz">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Maltese-Tamil (25,608 sentence pairs, 0.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-ta.tmx.gz">25.6k</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Maltese-Telugu (28,373 sentence pairs, 0.74M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-te.tmx.gz">28.4k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Maltese-Thai (31,973 sentence pairs, 0.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-th.tmx.gz">32.0k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Maltese-Turkish (74,423 sentence pairs, 2.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-tr.tmx.gz">74.4k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Maltese-Ukrainian (247,437 sentence pairs, 7.83M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-uk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Maltese-Urdu (45,241 sentence pairs, 1.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-ur.tmx.gz">45.2k</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Maltese-Uzbek (59,165 sentence pairs, 2.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-uz.tmx.gz">59.2k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Maltese-Vietnamese (209,350 sentence pairs, 8.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Maltese-Xhosa (28,135 sentence pairs, 0.86M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/mt-xh.tmx.gz">28.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nb plain text' href="download.php?f=MultiHPLT/v2/mono/nb.txt.gz">nb</a>
</th><td>1</td> <td>364.1M</td> <td>19.5M</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Afrikaans (817,007 sentence pairs, 29.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-nb.txt.zip">0.8M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Arabic (825,670 sentence pairs, 25.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-nb.txt.zip">0.8M</a>
</td><td bgcolor="#deffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Azerbaijani (406,670 sentence pairs, 12.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-nb.txt.zip">0.4M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Belarusian (654,180 sentence pairs, 20.77M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-nb.txt.zip">0.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bulgarian (3,226,870 sentence pairs, 106.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-nb.txt.zip">3.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bengali (149,984 sentence pairs, 4.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-nb.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bosnian (263,531 sentence pairs, 8.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-nb.txt.zip">0.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Catalan (1,460,183 sentence pairs, 52.72M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-nb.txt.zip">1.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Welsh (516,604 sentence pairs, 18.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-nb.txt.zip">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-English (22,912,722 sentence pairs, 816.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/en-nb.txt.zip">22.9M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Esperanto (319,833 sentence pairs, 11.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-nb.txt.zip">0.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Estonian (1,655,696 sentence pairs, 50.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-nb.txt.zip">1.7M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Basque (233,292 sentence pairs, 6.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-nb.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Persian (236,480 sentence pairs, 7.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-nb.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Finnish (5,466,127 sentence pairs, 156.98M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-nb.txt.zip">5.5M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Irish (970,474 sentence pairs, 35.32M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-nb.txt.zip">1.0M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Galician (572,959 sentence pairs, 19.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-nb.txt.zip">0.6M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Gujarati (89,090 sentence pairs, 2.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-nb.txt.zip">89.1k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hebrew (797,859 sentence pairs, 21.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-nb.txt.zip">0.8M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hindi (532,377 sentence pairs, 17.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-nb.txt.zip">0.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Croatian (2,724,618 sentence pairs, 86.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-nb.txt.zip">2.7M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Icelandic (918,349 sentence pairs, 30.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-nb.txt.zip">0.9M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Japanese (989,843 sentence pairs, 17.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-nb.txt.zip">1.0M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Kazakh (310,922 sentence pairs, 8.98M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-nb.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Kannada (72,464 sentence pairs, 1.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-nb.txt.zip">72.5k</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Korean (1,177,859 sentence pairs, 32.15M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-nb.txt.zip">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Lithuanian (2,347,132 sentence pairs, 70.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-nb.txt.zip">2.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Latvian (2,276,158 sentence pairs, 70.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-nb.txt.zip">2.3M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Macedonian (798,684 sentence pairs, 27.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-nb.txt.zip">0.8M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Malayalam (56,953 sentence pairs, 1.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-nb.txt.zip">57.0k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Marathi (66,067 sentence pairs, 2.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-nb.txt.zip">66.1k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Malay (1,597,214 sentence pairs, 51.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-nb.txt.zip">1.6M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Maltese (268,683 sentence pairs, 9.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-nb.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffffe0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Nepali (63,835 sentence pairs, 1.97M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-ne.tmx.gz">63.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Norwegian Nynorsk (114,177 sentence pairs, 4.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-nn.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Sinhala (44,988 sentence pairs, 1.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-si.tmx.gz">45.0k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovak (3,101,659 sentence pairs, 96.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-sk.tmx.gz">3.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovenian (2,017,943 sentence pairs, 66.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-sl.tmx.gz">2.0M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Albanian (948,467 sentence pairs, 36.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-sq.tmx.gz">0.9M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Serbian (1,385,707 sentence pairs, 44.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-sr.tmx.gz">1.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Swahili (491,524 sentence pairs, 17.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-sw.tmx.gz">0.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Tamil (128,947 sentence pairs, 3.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Telugu (101,501 sentence pairs, 2.78M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-te.tmx.gz">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Thai (398,522 sentence pairs, 8.29M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-th.tmx.gz">0.4M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Turkish (1,313,472 sentence pairs, 37.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-tr.tmx.gz">1.3M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Ukrainian (2,661,339 sentence pairs, 85.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-uk.tmx.gz">2.7M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Urdu (164,719 sentence pairs, 6.21M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Uzbek (239,007 sentence pairs, 7.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Vietnamese (2,145,854 sentence pairs, 88.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-vi.tmx.gz">2.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Xhosa (154,184 sentence pairs, 5.18M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nb-xh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ne plain text' href="download.php?f=MultiHPLT/v2/mono/ne.txt.gz">ne</a>
</th><td>1</td> <td>6.6M</td> <td>0.3M</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Nepali-Afrikaans (49,246 sentence pairs, 1.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-ne.txt.zip">49.2k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Nepali-Arabic (83,729 sentence pairs, 3.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-ne.txt.zip">83.7k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Nepali-Azerbaijani (47,819 sentence pairs, 1.34M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-ne.txt.zip">47.8k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Nepali-Belarusian (51,606 sentence pairs, 1.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-ne.txt.zip">51.6k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Nepali-Bulgarian (105,830 sentence pairs, 3.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-ne.txt.zip">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Nepali-Bengali (79,617 sentence pairs, 3.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-ne.txt.zip">79.6k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Nepali-Bosnian (11,691 sentence pairs, 0.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-ne.txt.zip">11.7k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Nepali-Catalan (59,463 sentence pairs, 1.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-ne.txt.zip">59.5k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Nepali-Welsh (47,701 sentence pairs, 1.61M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-ne.txt.zip">47.7k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Nepali-English (317,120 sentence pairs, 14.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/en-ne.txt.zip">0.3M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Nepali-Esperanto (39,398 sentence pairs, 1.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-ne.txt.zip">39.4k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Nepali-Estonian (47,684 sentence pairs, 1.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-ne.txt.zip">47.7k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Nepali-Basque (31,526 sentence pairs, 0.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-ne.txt.zip">31.5k</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Nepali-Persian (51,036 sentence pairs, 2.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-ne.txt.zip">51.0k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Nepali-Finnish (83,611 sentence pairs, 1.98M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-ne.txt.zip">83.6k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Nepali-Irish (44,075 sentence pairs, 1.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-ne.txt.zip">44.1k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Nepali-Galician (50,893 sentence pairs, 1.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-ne.txt.zip">50.9k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Nepali-Gujarati (61,239 sentence pairs, 2.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-ne.txt.zip">61.2k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Nepali-Hebrew (78,306 sentence pairs, 2.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-ne.txt.zip">78.3k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Nepali-Hindi (122,008 sentence pairs, 5.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-ne.txt.zip">0.1M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Nepali-Croatian (77,598 sentence pairs, 2.12M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-ne.txt.zip">77.6k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Nepali-Icelandic (42,846 sentence pairs, 1.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-ne.txt.zip">42.8k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Nepali-Japanese (56,343 sentence pairs, 0.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-ne.txt.zip">56.3k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Nepali-Kazakh (35,910 sentence pairs, 1.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-ne.txt.zip">35.9k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Nepali-Kannada (50,986 sentence pairs, 1.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-ne.txt.zip">51.0k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Nepali-Korean (90,052 sentence pairs, 2.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-ne.txt.zip">90.1k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Nepali-Lithuanian (71,504 sentence pairs, 1.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-ne.txt.zip">71.5k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Nepali-Latvian (67,107 sentence pairs, 1.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-ne.txt.zip">67.1k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Nepali-Macedonian (57,788 sentence pairs, 1.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-ne.txt.zip">57.8k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Nepali-Malayalam (38,762 sentence pairs, 1.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-ne.txt.zip">38.8k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Nepali-Marathi (61,903 sentence pairs, 2.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-ne.txt.zip">61.9k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Nepali-Malay (59,854 sentence pairs, 1.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-ne.txt.zip">59.9k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Nepali-Maltese (17,290 sentence pairs, 0.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-ne.txt.zip">17.3k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Nepali-BokmÃ¥l, Norwegian (63,835 sentence pairs, 1.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-ne.txt.zip">63.8k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Nepali-Norwegian Nynorsk (1,334 sentence pairs, 28.97k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-nn.tmx.gz">1.3k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Nepali-Sinhala (37,153 sentence pairs, 1.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-si.tmx.gz">37.2k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Nepali-Slovak (58,075 sentence pairs, 1.62M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-sk.tmx.gz">58.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Nepali-Slovenian (46,072 sentence pairs, 1.35M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-sl.tmx.gz">46.1k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Nepali-Albanian (55,035 sentence pairs, 1.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-sq.tmx.gz">55.0k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Nepali-Serbian (51,826 sentence pairs, 1.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-sr.tmx.gz">51.8k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Nepali-Swahili (41,525 sentence pairs, 1.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-sw.tmx.gz">41.5k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Nepali-Tamil (66,942 sentence pairs, 2.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-ta.tmx.gz">66.9k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Nepali-Telugu (64,078 sentence pairs, 2.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-te.tmx.gz">64.1k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Nepali-Thai (41,621 sentence pairs, 1.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-th.tmx.gz">41.6k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Nepali-Turkish (73,020 sentence pairs, 2.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-tr.tmx.gz">73.0k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Nepali-Ukrainian (69,142 sentence pairs, 1.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-uk.tmx.gz">69.1k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Nepali-Urdu (75,423 sentence pairs, 3.40M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-ur.tmx.gz">75.4k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Nepali-Uzbek (31,024 sentence pairs, 1.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-uz.tmx.gz">31.0k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Nepali-Vietnamese (64,824 sentence pairs, 2.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-vi.tmx.gz">64.8k</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Nepali-Xhosa (17,440 sentence pairs, 0.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ne-xh.tmx.gz">17.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nn plain text' href="download.php?f=MultiHPLT/v2/mono/nn.txt.gz">nn</a>
</th><td>1</td> <td>9.3M</td> <td>0.5M</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Norwegian Nynorsk-Afrikaans (14,995 sentence pairs, 0.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-nn.txt.zip">15.0k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Norwegian Nynorsk-Arabic (12,734 sentence pairs, 0.25M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-nn.txt.zip">12.7k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Norwegian Nynorsk-Azerbaijani (6,437 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-nn.txt.zip">6.4k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Norwegian Nynorsk-Belarusian (15,138 sentence pairs, 0.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-nn.txt.zip">15.1k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Norwegian Nynorsk-Bulgarian (50,229 sentence pairs, 1.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-nn.txt.zip">50.2k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Norwegian Nynorsk-Bengali (6,674 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-nn.txt.zip">6.7k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Norwegian Nynorsk-Bosnian (14,312 sentence pairs, 0.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-nn.txt.zip">14.3k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Norwegian Nynorsk-Catalan (49,583 sentence pairs, 1.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-nn.txt.zip">49.6k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Norwegian Nynorsk-Welsh (8,428 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-nn.txt.zip">8.4k</a>
</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Norwegian Nynorsk-Esperanto (14,418 sentence pairs, 0.47M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-nn.txt.zip">14.4k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Norwegian Nynorsk-Estonian (17,351 sentence pairs, 0.48M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-nn.txt.zip">17.4k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Norwegian Nynorsk-Basque (13,832 sentence pairs, 0.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-nn.txt.zip">13.8k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Norwegian Nynorsk-Persian (7,822 sentence pairs, 0.18M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-nn.txt.zip">7.8k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Norwegian Nynorsk-Finnish (50,790 sentence pairs, 1.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-nn.txt.zip">50.8k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Norwegian Nynorsk-Irish (5,588 sentence pairs, 0.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-nn.txt.zip">5.6k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Norwegian Nynorsk-Galician (25,054 sentence pairs, 0.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-nn.txt.zip">25.1k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Norwegian Nynorsk-Gujarati (3,713 sentence pairs, 64.33k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-nn.txt.zip">3.7k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Norwegian Nynorsk-Hebrew (15,679 sentence pairs, 0.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-nn.txt.zip">15.7k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Norwegian Nynorsk-Hindi (9,341 sentence pairs, 0.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-nn.txt.zip">9.3k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Norwegian Nynorsk-Croatian (27,355 sentence pairs, 0.77M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-nn.txt.zip">27.4k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Norwegian Nynorsk-Icelandic (8,555 sentence pairs, 0.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-nn.txt.zip">8.6k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Norwegian Nynorsk-Japanese (18,953 sentence pairs, 0.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-nn.txt.zip">19.0k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Norwegian Nynorsk-Kazakh (3,075 sentence pairs, 64.29k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-nn.txt.zip">3.1k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Norwegian Nynorsk-Kannada (2,000 sentence pairs, 45.93k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-nn.txt.zip">2.0k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Norwegian Nynorsk-Korean (19,335 sentence pairs, 0.40M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-nn.txt.zip">19.3k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Norwegian Nynorsk-Lithuanian (30,571 sentence pairs, 0.77M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-nn.txt.zip">30.6k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Norwegian Nynorsk-Latvian (23,616 sentence pairs, 0.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-nn.txt.zip">23.6k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Norwegian Nynorsk-Macedonian (20,899 sentence pairs, 0.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-nn.txt.zip">20.9k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Norwegian Nynorsk-Malayalam (1,790 sentence pairs, 41.44k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-nn.txt.zip">1.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Norwegian Nynorsk-Marathi (1,327 sentence pairs, 36.06k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-nn.txt.zip">1.3k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Norwegian Nynorsk-Malay (15,746 sentence pairs, 0.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-nn.txt.zip">15.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Norwegian Nynorsk-Maltese (2,065 sentence pairs, 68.51k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-nn.txt.zip">2.1k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Norwegian Nynorsk-BokmÃ¥l, Norwegian (114,177 sentence pairs, 4.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-nn.txt.zip">0.1M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Norwegian Nynorsk-Nepali (1,334 sentence pairs, 28.97k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-nn.txt.zip">1.3k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Norwegian Nynorsk-Sinhala (942 sentence pairs, 15.68k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-si.tmx.gz">0.9k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Norwegian Nynorsk-Slovak (25,854 sentence pairs, 0.77M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-sk.tmx.gz">25.9k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Norwegian Nynorsk-Slovenian (23,280 sentence pairs, 0.71M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-sl.tmx.gz">23.3k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Norwegian Nynorsk-Albanian (12,384 sentence pairs, 0.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-sq.tmx.gz">12.4k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Norwegian Nynorsk-Serbian (18,386 sentence pairs, 0.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-sr.tmx.gz">18.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Norwegian Nynorsk-Swahili (4,551 sentence pairs, 0.14M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-sw.tmx.gz">4.6k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Norwegian Nynorsk-Tamil (3,395 sentence pairs, 81.82k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-ta.tmx.gz">3.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Norwegian Nynorsk-Telugu (2,939 sentence pairs, 71.81k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-te.tmx.gz">2.9k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Norwegian Nynorsk-Thai (5,247 sentence pairs, 85.80k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-th.tmx.gz">5.2k</a>
</td><td bgcolor="#fff2ed"><a rel="nofollow" title='Norwegian Nynorsk-Turkish (15,706 sentence pairs, 0.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-tr.tmx.gz">15.7k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Norwegian Nynorsk-Ukrainian (34,785 sentence pairs, 1.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-uk.tmx.gz">34.8k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Norwegian Nynorsk-Urdu (2,385 sentence pairs, 73.51k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-ur.tmx.gz">2.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Norwegian Nynorsk-Uzbek (1,546 sentence pairs, 50.08k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-uz.tmx.gz">1.5k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Norwegian Nynorsk-Vietnamese (32,993 sentence pairs, 1.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-vi.tmx.gz">33.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Norwegian Nynorsk-Xhosa (1,002 sentence pairs, 30.52k words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/nn-xh.tmx.gz">1.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized si plain text' href="download.php?f=MultiHPLT/v2/mono/si.txt.gz">si</a>
</th><td>1</td> <td>5.9M</td> <td>0.2M</td><td bgcolor="#ffffed"><a rel="nofollow" title='Sinhala-Afrikaans (39,376 sentence pairs, 1.15M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-si.txt.zip">39.4k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Sinhala-Arabic (65,945 sentence pairs, 2.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-si.txt.zip">65.9k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Sinhala-Azerbaijani (39,557 sentence pairs, 1.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-si.txt.zip">39.6k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Sinhala-Belarusian (40,491 sentence pairs, 1.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-si.txt.zip">40.5k</a>
</td><td bgcolor="#fbffdc"><a rel="nofollow" title='Sinhala-Bulgarian (77,462 sentence pairs, 2.00M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-si.txt.zip">77.5k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Sinhala-Bengali (55,453 sentence pairs, 1.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-si.txt.zip">55.5k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Sinhala-Bosnian (10,317 sentence pairs, 0.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-si.txt.zip">10.3k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Sinhala-Catalan (50,004 sentence pairs, 1.49M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-si.txt.zip">50.0k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Sinhala-Welsh (37,422 sentence pairs, 1.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-si.txt.zip">37.4k</a>
</td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Sinhala-Esperanto (30,240 sentence pairs, 0.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-si.txt.zip">30.2k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Sinhala-Estonian (39,099 sentence pairs, 0.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-si.txt.zip">39.1k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Sinhala-Basque (26,738 sentence pairs, 0.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-si.txt.zip">26.7k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Sinhala-Persian (36,832 sentence pairs, 1.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-si.txt.zip">36.8k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Sinhala-Finnish (62,471 sentence pairs, 1.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-si.txt.zip">62.5k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Sinhala-Irish (34,654 sentence pairs, 1.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-si.txt.zip">34.7k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Sinhala-Galician (40,218 sentence pairs, 1.16M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-si.txt.zip">40.2k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Sinhala-Gujarati (44,401 sentence pairs, 1.49M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-si.txt.zip">44.4k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Sinhala-Hebrew (58,369 sentence pairs, 1.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-si.txt.zip">58.4k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Sinhala-Hindi (69,793 sentence pairs, 2.60M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-si.txt.zip">69.8k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Sinhala-Croatian (62,606 sentence pairs, 1.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-si.txt.zip">62.6k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Sinhala-Icelandic (30,291 sentence pairs, 0.88M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-si.txt.zip">30.3k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Sinhala-Japanese (42,599 sentence pairs, 0.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-si.txt.zip">42.6k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Sinhala-Kazakh (35,924 sentence pairs, 0.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-si.txt.zip">35.9k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Sinhala-Kannada (43,555 sentence pairs, 1.35M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-si.txt.zip">43.6k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Sinhala-Korean (66,972 sentence pairs, 1.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-si.txt.zip">67.0k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Sinhala-Lithuanian (57,583 sentence pairs, 1.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-si.txt.zip">57.6k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Sinhala-Latvian (54,131 sentence pairs, 1.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-si.txt.zip">54.1k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Sinhala-Macedonian (45,536 sentence pairs, 1.25M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-si.txt.zip">45.5k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Sinhala-Malayalam (39,075 sentence pairs, 1.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-si.txt.zip">39.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Sinhala-Marathi (37,356 sentence pairs, 1.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-si.txt.zip">37.4k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Sinhala-Malay (49,853 sentence pairs, 1.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-si.txt.zip">49.9k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Sinhala-Maltese (14,878 sentence pairs, 0.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-si.txt.zip">14.9k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Sinhala-BokmÃ¥l, Norwegian (44,988 sentence pairs, 1.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-si.txt.zip">45.0k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Sinhala-Nepali (37,153 sentence pairs, 1.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-si.txt.zip">37.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Sinhala-Norwegian Nynorsk (942 sentence pairs, 15.68k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-si.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#ffffed"><a rel="nofollow" title='Sinhala-Slovak (45,663 sentence pairs, 1.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-sk.tmx.gz">45.7k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Sinhala-Slovenian (38,310 sentence pairs, 1.05M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-sl.tmx.gz">38.3k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Sinhala-Albanian (40,449 sentence pairs, 1.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-sq.tmx.gz">40.4k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Sinhala-Serbian (40,983 sentence pairs, 1.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-sr.tmx.gz">41.0k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Sinhala-Swahili (32,053 sentence pairs, 1.01M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-sw.tmx.gz">32.1k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Sinhala-Tamil (55,866 sentence pairs, 1.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-ta.tmx.gz">55.9k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Sinhala-Telugu (48,232 sentence pairs, 1.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-te.tmx.gz">48.2k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Sinhala-Thai (27,256 sentence pairs, 0.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-th.tmx.gz">27.3k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Sinhala-Turkish (53,026 sentence pairs, 1.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-tr.tmx.gz">53.0k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Sinhala-Ukrainian (50,334 sentence pairs, 1.26M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-uk.tmx.gz">50.3k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Sinhala-Urdu (47,627 sentence pairs, 1.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-ur.tmx.gz">47.6k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Sinhala-Uzbek (27,983 sentence pairs, 0.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-uz.tmx.gz">28.0k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Sinhala-Vietnamese (44,656 sentence pairs, 1.59M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-vi.tmx.gz">44.7k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Sinhala-Xhosa (16,965 sentence pairs, 0.47M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/si-xh.tmx.gz">17.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sk plain text' href="download.php?f=MultiHPLT/v2/mono/sk.txt.gz">sk</a>
</th><td>1</td> <td>269.2M</td> <td>15.1M</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Slovak-Afrikaans (643,157 sentence pairs, 21.32M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-sk.txt.zip">0.6M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Slovak-Arabic (855,916 sentence pairs, 23.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-sk.txt.zip">0.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovak-Azerbaijani (456,263 sentence pairs, 12.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-sk.txt.zip">0.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-Belarusian (656,852 sentence pairs, 18.98M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-sk.txt.zip">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-Bulgarian (4,641,880 sentence pairs, 155.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-sk.txt.zip">4.6M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Slovak-Bengali (153,211 sentence pairs, 3.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-sk.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Slovak-Bosnian (316,048 sentence pairs, 9.77M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-sk.txt.zip">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Slovak-Catalan (1,284,858 sentence pairs, 43.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-sk.txt.zip">1.3M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovak-Welsh (504,361 sentence pairs, 17.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-sk.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Slovak-Esperanto (230,381 sentence pairs, 7.19M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-sk.txt.zip">0.2M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovak-Estonian (2,333,410 sentence pairs, 74.35M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-sk.txt.zip">2.3M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Slovak-Basque (254,844 sentence pairs, 6.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-sk.txt.zip">0.3M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Slovak-Persian (239,408 sentence pairs, 7.19M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-sk.txt.zip">0.2M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Slovak-Finnish (4,323,876 sentence pairs, 124.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-sk.txt.zip">4.3M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Slovak-Irish (719,304 sentence pairs, 26.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-sk.txt.zip">0.7M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-Galician (597,614 sentence pairs, 18.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-sk.txt.zip">0.6M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Slovak-Gujarati (106,384 sentence pairs, 2.72M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-sk.txt.zip">0.1M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Slovak-Hebrew (909,320 sentence pairs, 21.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-sk.txt.zip">0.9M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovak-Hindi (570,406 sentence pairs, 16.88M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-sk.txt.zip">0.6M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovak-Croatian (3,599,530 sentence pairs, 117.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-sk.txt.zip">3.6M</a>
</td><td bgcolor="#d7ffc9"><a rel="nofollow" title='Slovak-Icelandic (738,274 sentence pairs, 23.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-sk.txt.zip">0.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Japanese (946,795 sentence pairs, 15.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-sk.txt.zip">0.9M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Slovak-Kazakh (315,146 sentence pairs, 8.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-sk.txt.zip">0.3M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Slovak-Kannada (89,670 sentence pairs, 2.15M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-sk.txt.zip">89.7k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Slovak-Korean (1,101,327 sentence pairs, 26.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-sk.txt.zip">1.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Slovak-Lithuanian (3,562,070 sentence pairs, 110.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-sk.txt.zip">3.6M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Slovak-Latvian (3,429,372 sentence pairs, 109.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-sk.txt.zip">3.4M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Slovak-Macedonian (847,618 sentence pairs, 26.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-sk.txt.zip">0.8M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Slovak-Malayalam (60,936 sentence pairs, 1.43M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-sk.txt.zip">60.9k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Slovak-Marathi (74,619 sentence pairs, 2.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-sk.txt.zip">74.6k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Slovak-Malay (1,449,908 sentence pairs, 42.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-sk.txt.zip">1.4M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Slovak-Maltese (745,485 sentence pairs, 32.04M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-sk.txt.zip">0.7M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Slovak-BokmÃ¥l, Norwegian (3,101,659 sentence pairs, 96.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-sk.txt.zip">3.1M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Slovak-Nepali (58,075 sentence pairs, 1.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-sk.txt.zip">58.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Slovak-Norwegian Nynorsk (25,854 sentence pairs, 0.77M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-sk.txt.zip">25.9k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Slovak-Sinhala (45,663 sentence pairs, 1.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-sk.txt.zip">45.7k</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovak-Slovenian (3,428,625 sentence pairs, 117.02M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-sl.tmx.gz">3.4M</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Slovak-Albanian (963,000 sentence pairs, 33.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-sq.tmx.gz">1.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovak-Serbian (1,648,816 sentence pairs, 48.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-sr.tmx.gz">1.6M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Swahili (470,461 sentence pairs, 15.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-sw.tmx.gz">0.5M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Slovak-Tamil (170,702 sentence pairs, 3.93M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-ta.tmx.gz">0.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Slovak-Telugu (145,128 sentence pairs, 3.31M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-te.tmx.gz">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Slovak-Thai (504,401 sentence pairs, 8.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-th.tmx.gz">0.5M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Slovak-Turkish (1,555,500 sentence pairs, 39.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-tr.tmx.gz">1.6M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovak-Ukrainian (3,176,602 sentence pairs, 92.46M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-uk.tmx.gz">3.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Slovak-Urdu (205,433 sentence pairs, 6.57M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Slovak-Uzbek (309,647 sentence pairs, 9.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-uz.tmx.gz">0.3M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovak-Vietnamese (2,090,275 sentence pairs, 78.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-vi.tmx.gz">2.1M</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Slovak-Xhosa (109,393 sentence pairs, 3.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sk-xh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=MultiHPLT/v2/mono/sl.txt.gz">sl</a>
</th><td>1</td> <td>175.9M</td> <td>8.9M</td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovenian-Afrikaans (508,371 sentence pairs, 17.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-sl.txt.zip">0.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Arabic (506,511 sentence pairs, 15.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-sl.txt.zip">0.5M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Slovenian-Azerbaijani (360,106 sentence pairs, 10.34M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-sl.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Belarusian (508,766 sentence pairs, 15.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-sl.txt.zip">0.5M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovenian-Bulgarian (3,332,240 sentence pairs, 119.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-sl.txt.zip">3.3M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Slovenian-Bengali (114,334 sentence pairs, 3.05M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-sl.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Slovenian-Bosnian (259,695 sentence pairs, 8.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-sl.txt.zip">0.3M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Slovenian-Catalan (1,077,438 sentence pairs, 38.31M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-sl.txt.zip">1.1M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Welsh (412,519 sentence pairs, 14.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-sl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Slovenian-Esperanto (171,146 sentence pairs, 5.55M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-sl.txt.zip">0.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovenian-Estonian (2,002,442 sentence pairs, 67.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-sl.txt.zip">2.0M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Slovenian-Basque (206,251 sentence pairs, 5.61M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-sl.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Slovenian-Persian (158,161 sentence pairs, 5.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-sl.txt.zip">0.2M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovenian-Finnish (2,794,316 sentence pairs, 88.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-sl.txt.zip">2.8M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Slovenian-Irish (630,372 sentence pairs, 24.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-sl.txt.zip">0.6M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovenian-Galician (481,126 sentence pairs, 15.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-sl.txt.zip">0.5M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Slovenian-Gujarati (79,154 sentence pairs, 2.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-sl.txt.zip">79.2k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Hebrew (503,247 sentence pairs, 13.60M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-sl.txt.zip">0.5M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Slovenian-Hindi (374,769 sentence pairs, 11.83M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-sl.txt.zip">0.4M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Slovenian-Croatian (2,980,876 sentence pairs, 102.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-sl.txt.zip">3.0M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovenian-Icelandic (523,583 sentence pairs, 17.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-sl.txt.zip">0.5M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Slovenian-Japanese (492,711 sentence pairs, 8.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-sl.txt.zip">0.5M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Slovenian-Kazakh (275,685 sentence pairs, 7.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-sl.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Slovenian-Kannada (67,888 sentence pairs, 1.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-sl.txt.zip">67.9k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Korean (569,369 sentence pairs, 14.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-sl.txt.zip">0.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovenian-Lithuanian (2,565,577 sentence pairs, 87.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-sl.txt.zip">2.6M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovenian-Latvian (2,564,398 sentence pairs, 88.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-sl.txt.zip">2.6M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Slovenian-Macedonian (719,039 sentence pairs, 24.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-sl.txt.zip">0.7M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Slovenian-Malayalam (47,223 sentence pairs, 1.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-sl.txt.zip">47.2k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Slovenian-Marathi (53,625 sentence pairs, 1.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-sl.txt.zip">53.6k</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Slovenian-Malay (1,015,252 sentence pairs, 32.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-sl.txt.zip">1.0M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Slovenian-Maltese (675,983 sentence pairs, 30.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-sl.txt.zip">0.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovenian-BokmÃ¥l, Norwegian (2,017,943 sentence pairs, 66.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-sl.txt.zip">2.0M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Slovenian-Nepali (46,072 sentence pairs, 1.35M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-sl.txt.zip">46.1k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Slovenian-Norwegian Nynorsk (23,280 sentence pairs, 0.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-sl.txt.zip">23.3k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Slovenian-Sinhala (38,310 sentence pairs, 1.05M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-sl.txt.zip">38.3k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovenian-Slovak (3,428,625 sentence pairs, 117.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-sl.txt.zip">3.4M</a>
</td><td></td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Slovenian-Albanian (692,494 sentence pairs, 24.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Slovenian-Serbian (1,027,484 sentence pairs, 32.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-sr.tmx.gz">1.0M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Slovenian-Swahili (348,581 sentence pairs, 11.84M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-sw.tmx.gz">0.3M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Slovenian-Tamil (92,466 sentence pairs, 2.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-ta.tmx.gz">92.5k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Slovenian-Telugu (91,089 sentence pairs, 2.33M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-te.tmx.gz">91.1k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Slovenian-Thai (242,319 sentence pairs, 4.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-th.tmx.gz">0.2M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Slovenian-Turkish (739,292 sentence pairs, 21.07M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-tr.tmx.gz">0.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Slovenian-Ukrainian (1,774,895 sentence pairs, 55.37M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-uk.tmx.gz">1.8M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Slovenian-Urdu (123,290 sentence pairs, 4.27M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Slovenian-Uzbek (224,688 sentence pairs, 7.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovenian-Vietnamese (1,268,764 sentence pairs, 51.48M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-vi.tmx.gz">1.3M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Slovenian-Xhosa (92,798 sentence pairs, 2.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sl-xh.tmx.gz">92.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=MultiHPLT/v2/mono/sq.txt.gz">sq</a>
</th><td>1</td> <td>82.3M</td> <td>3.4M</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Albanian-Afrikaans (600,319 sentence pairs, 24.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-sq.txt.zip">0.6M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Arabic (264,247 sentence pairs, 8.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-sq.txt.zip">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Albanian-Azerbaijani (342,220 sentence pairs, 11.47M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-sq.txt.zip">0.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Albanian-Belarusian (550,889 sentence pairs, 19.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-sq.txt.zip">0.6M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Albanian-Bulgarian (1,249,126 sentence pairs, 46.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-sq.txt.zip">1.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Albanian-Bengali (103,237 sentence pairs, 3.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-sq.txt.zip">0.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Albanian-Bosnian (288,297 sentence pairs, 12.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-sq.txt.zip">0.3M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Albanian-Catalan (659,120 sentence pairs, 26.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-sq.txt.zip">0.7M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Albanian-Welsh (429,672 sentence pairs, 17.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-sq.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Albanian-Esperanto (305,200 sentence pairs, 12.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-sq.txt.zip">0.3M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Albanian-Estonian (597,574 sentence pairs, 20.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-sq.txt.zip">0.6M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Albanian-Basque (182,657 sentence pairs, 5.76M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Albanian-Persian (157,171 sentence pairs, 5.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-sq.txt.zip">0.2M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Albanian-Finnish (927,794 sentence pairs, 31.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-sq.txt.zip">0.9M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Albanian-Irish (498,190 sentence pairs, 20.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-sq.txt.zip">0.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Albanian-Galician (502,682 sentence pairs, 18.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-sq.txt.zip">0.5M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Albanian-Gujarati (87,877 sentence pairs, 2.83M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-sq.txt.zip">87.9k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Hebrew (275,345 sentence pairs, 8.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-sq.txt.zip">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Hindi (233,299 sentence pairs, 8.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-sq.txt.zip">0.2M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Albanian-Croatian (958,603 sentence pairs, 34.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-sq.txt.zip">1.0M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Albanian-Icelandic (515,039 sentence pairs, 19.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-sq.txt.zip">0.5M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Albanian-Japanese (198,952 sentence pairs, 3.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Albanian-Kazakh (191,610 sentence pairs, 6.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-sq.txt.zip">0.2M</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Albanian-Kannada (69,729 sentence pairs, 2.05M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-sq.txt.zip">69.7k</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Albanian-Korean (337,653 sentence pairs, 10.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-sq.txt.zip">0.3M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Albanian-Lithuanian (744,467 sentence pairs, 24.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-sq.txt.zip">0.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Albanian-Latvian (771,800 sentence pairs, 26.55M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-sq.txt.zip">0.8M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Albanian-Macedonian (821,671 sentence pairs, 32.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-sq.txt.zip">0.8M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Albanian-Malayalam (55,303 sentence pairs, 1.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-sq.txt.zip">55.3k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Albanian-Marathi (66,278 sentence pairs, 2.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-sq.txt.zip">66.3k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Albanian-Malay (652,108 sentence pairs, 23.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-sq.txt.zip">0.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Albanian-Maltese (202,645 sentence pairs, 7.49M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-sq.txt.zip">0.2M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Albanian-BokmÃ¥l, Norwegian (948,467 sentence pairs, 36.34M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-sq.txt.zip">0.9M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Albanian-Nepali (55,035 sentence pairs, 1.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-sq.txt.zip">55.0k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Albanian-Norwegian Nynorsk (12,384 sentence pairs, 0.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-sq.txt.zip">12.4k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Albanian-Sinhala (40,449 sentence pairs, 1.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-sq.txt.zip">40.4k</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Albanian-Slovak (963,000 sentence pairs, 33.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-sq.txt.zip">1.0M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Albanian-Slovenian (692,494 sentence pairs, 24.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-sq.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Albanian-Serbian (641,126 sentence pairs, 22.89M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-sr.tmx.gz">0.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Albanian-Swahili (359,114 sentence pairs, 13.99M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-sw.tmx.gz">0.4M</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Albanian-Tamil (101,157 sentence pairs, 3.23M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-ta.tmx.gz">0.1M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Albanian-Telugu (92,435 sentence pairs, 2.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-te.tmx.gz">92.4k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Albanian-Thai (115,493 sentence pairs, 2.90M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-th.tmx.gz">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Albanian-Turkish (301,373 sentence pairs, 10.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-tr.tmx.gz">0.3M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Albanian-Ukrainian (902,648 sentence pairs, 32.61M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-uk.tmx.gz">0.9M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Albanian-Urdu (127,597 sentence pairs, 5.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Albanian-Uzbek (190,839 sentence pairs, 7.24M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Albanian-Vietnamese (801,633 sentence pairs, 37.07M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-vi.tmx.gz">0.8M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Albanian-Xhosa (155,501 sentence pairs, 5.72M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sq-xh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=MultiHPLT/v2/mono/sr.txt.gz">sr</a>
</th><td>1</td> <td>90.1M</td> <td>4.8M</td><td bgcolor="#daffc6"><a rel="nofollow" title='Serbian-Afrikaans (496,486 sentence pairs, 16.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-sr.txt.zip">0.5M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Serbian-Arabic (384,933 sentence pairs, 11.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-sr.txt.zip">0.4M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Serbian-Azerbaijani (342,426 sentence pairs, 9.74M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-sr.txt.zip">0.3M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Serbian-Belarusian (580,006 sentence pairs, 17.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-sr.txt.zip">0.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Serbian-Bulgarian (1,661,412 sentence pairs, 51.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-sr.txt.zip">1.7M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Serbian-Bengali (109,044 sentence pairs, 2.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-sr.txt.zip">0.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Serbian-Bosnian (453,381 sentence pairs, 18.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-sr.txt.zip">0.5M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Serbian-Catalan (837,250 sentence pairs, 29.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-sr.txt.zip">0.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Serbian-Welsh (424,258 sentence pairs, 15.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-sr.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Serbian-Esperanto (197,030 sentence pairs, 6.32M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-sr.txt.zip">0.2M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Serbian-Estonian (717,484 sentence pairs, 20.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-sr.txt.zip">0.7M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Serbian-Basque (199,185 sentence pairs, 5.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Serbian-Persian (160,931 sentence pairs, 5.19M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-sr.txt.zip">0.2M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Serbian-Finnish (1,333,029 sentence pairs, 35.31M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-sr.txt.zip">1.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Serbian-Irish (500,058 sentence pairs, 18.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-sr.txt.zip">0.5M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Serbian-Galician (517,189 sentence pairs, 16.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-sr.txt.zip">0.5M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Serbian-Gujarati (84,071 sentence pairs, 2.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-sr.txt.zip">84.1k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Serbian-Hebrew (365,820 sentence pairs, 8.98M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-sr.txt.zip">0.4M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Serbian-Hindi (333,329 sentence pairs, 10.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-sr.txt.zip">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Serbian-Croatian (1,414,185 sentence pairs, 42.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-sr.txt.zip">1.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Serbian-Icelandic (470,320 sentence pairs, 15.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-sr.txt.zip">0.5M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Serbian-Japanese (355,213 sentence pairs, 5.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-sr.txt.zip">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Serbian-Kazakh (229,176 sentence pairs, 6.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-sr.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Serbian-Kannada (72,863 sentence pairs, 1.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-sr.txt.zip">72.9k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Serbian-Korean (414,700 sentence pairs, 10.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-sr.txt.zip">0.4M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Serbian-Lithuanian (1,104,788 sentence pairs, 31.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-sr.txt.zip">1.1M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Serbian-Latvian (1,093,789 sentence pairs, 31.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-sr.txt.zip">1.1M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Serbian-Macedonian (753,654 sentence pairs, 24.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-sr.txt.zip">0.8M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Serbian-Malayalam (53,727 sentence pairs, 1.31M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-sr.txt.zip">53.7k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Serbian-Marathi (61,914 sentence pairs, 1.90M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-sr.txt.zip">61.9k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Serbian-Malay (786,940 sentence pairs, 24.31M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-sr.txt.zip">0.8M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Serbian-Maltese (202,606 sentence pairs, 6.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-sr.txt.zip">0.2M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Serbian-BokmÃ¥l, Norwegian (1,385,707 sentence pairs, 44.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-sr.txt.zip">1.4M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Serbian-Nepali (51,826 sentence pairs, 1.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-sr.txt.zip">51.8k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Serbian-Norwegian Nynorsk (18,386 sentence pairs, 0.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-sr.txt.zip">18.4k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Serbian-Sinhala (40,983 sentence pairs, 1.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-sr.txt.zip">41.0k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Serbian-Slovak (1,648,816 sentence pairs, 48.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-sr.txt.zip">1.6M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Serbian-Slovenian (1,027,484 sentence pairs, 32.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-sr.txt.zip">1.0M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Serbian-Albanian (641,126 sentence pairs, 22.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-sr.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Serbian-Swahili (343,152 sentence pairs, 11.64M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sr-sw.tmx.gz">0.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Serbian-Tamil (97,053 sentence pairs, 2.53M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sr-ta.tmx.gz">97.1k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Serbian-Telugu (94,955 sentence pairs, 2.42M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sr-te.tmx.gz">95.0k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Serbian-Thai (164,811 sentence pairs, 3.15M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sr-th.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Serbian-Turkish (418,695 sentence pairs, 10.82M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sr-tr.tmx.gz">0.4M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Serbian-Ukrainian (1,358,317 sentence pairs, 40.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sr-uk.tmx.gz">1.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Serbian-Urdu (123,342 sentence pairs, 4.39M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sr-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Serbian-Uzbek (186,791 sentence pairs, 6.12M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sr-uz.tmx.gz">0.2M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Serbian-Vietnamese (999,490 sentence pairs, 39.87M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sr-vi.tmx.gz">1.0M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Serbian-Xhosa (87,561 sentence pairs, 2.61M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sr-xh.tmx.gz">87.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sw plain text' href="download.php?f=MultiHPLT/v2/mono/sw.txt.gz">sw</a>
</th><td>1</td> <td>35.9M</td> <td>1.7M</td><td bgcolor="#daffc6"><a rel="nofollow" title='Swahili-Afrikaans (420,704 sentence pairs, 16.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-sw.txt.zip">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Swahili-Arabic (174,913 sentence pairs, 6.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-sw.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Swahili-Azerbaijani (197,010 sentence pairs, 6.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-sw.txt.zip">0.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Swahili-Belarusian (342,008 sentence pairs, 11.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-sw.txt.zip">0.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Swahili-Bulgarian (563,700 sentence pairs, 19.43M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-sw.txt.zip">0.6M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Swahili-Bengali (93,166 sentence pairs, 3.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-sw.txt.zip">93.2k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Swahili-Bosnian (76,948 sentence pairs, 2.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-sw.txt.zip">76.9k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swahili-Catalan (393,393 sentence pairs, 14.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-sw.txt.zip">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Swahili-Welsh (287,684 sentence pairs, 11.15M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-sw.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Swahili-Esperanto (161,361 sentence pairs, 5.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-sw.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Swahili-Estonian (292,976 sentence pairs, 9.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-sw.txt.zip">0.3M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Swahili-Basque (117,916 sentence pairs, 3.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-sw.txt.zip">0.1M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Swahili-Persian (92,885 sentence pairs, 3.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-sw.txt.zip">92.9k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Swahili-Finnish (454,513 sentence pairs, 13.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-sw.txt.zip">0.5M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Swahili-Irish (260,546 sentence pairs, 10.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-sw.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Swahili-Galician (247,318 sentence pairs, 9.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-sw.txt.zip">0.2M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Swahili-Gujarati (77,336 sentence pairs, 2.61M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-sw.txt.zip">77.3k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Swahili-Hebrew (151,337 sentence pairs, 4.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-sw.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Swahili-Hindi (201,708 sentence pairs, 7.69M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-sw.txt.zip">0.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swahili-Croatian (446,092 sentence pairs, 14.98M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-sw.txt.zip">0.4M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Swahili-Icelandic (253,680 sentence pairs, 8.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-sw.txt.zip">0.3M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Swahili-Japanese (143,495 sentence pairs, 2.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-sw.txt.zip">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Swahili-Kazakh (115,313 sentence pairs, 3.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-sw.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Swahili-Kannada (57,412 sentence pairs, 1.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-sw.txt.zip">57.4k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Swahili-Korean (207,806 sentence pairs, 6.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-sw.txt.zip">0.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Swahili-Lithuanian (367,357 sentence pairs, 11.69M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-sw.txt.zip">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Swahili-Latvian (391,249 sentence pairs, 12.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-sw.txt.zip">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Swahili-Macedonian (317,737 sentence pairs, 11.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-sw.txt.zip">0.3M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Swahili-Malayalam (42,590 sentence pairs, 1.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-sw.txt.zip">42.6k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Swahili-Marathi (50,868 sentence pairs, 1.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-sw.txt.zip">50.9k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swahili-Malay (429,698 sentence pairs, 14.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-sw.txt.zip">0.4M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Swahili-Maltese (105,540 sentence pairs, 3.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-sw.txt.zip">0.1M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Swahili-BokmÃ¥l, Norwegian (491,524 sentence pairs, 17.34M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-sw.txt.zip">0.5M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Swahili-Nepali (41,525 sentence pairs, 1.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-sw.txt.zip">41.5k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Swahili-Norwegian Nynorsk (4,551 sentence pairs, 0.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-sw.txt.zip">4.6k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Swahili-Sinhala (32,053 sentence pairs, 1.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-sw.txt.zip">32.1k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swahili-Slovak (470,461 sentence pairs, 15.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-sw.txt.zip">0.5M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Swahili-Slovenian (348,581 sentence pairs, 11.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-sw.txt.zip">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Swahili-Albanian (359,114 sentence pairs, 13.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-sw.txt.zip">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Swahili-Serbian (343,152 sentence pairs, 11.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sr-sw.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Swahili-Tamil (83,736 sentence pairs, 2.61M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sw-ta.tmx.gz">83.7k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Swahili-Telugu (69,773 sentence pairs, 2.17M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sw-te.tmx.gz">69.8k</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Swahili-Thai (85,932 sentence pairs, 2.06M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sw-th.tmx.gz">85.9k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Swahili-Turkish (168,415 sentence pairs, 5.36M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sw-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Swahili-Ukrainian (518,986 sentence pairs, 17.56M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sw-uk.tmx.gz">0.5M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Swahili-Urdu (110,481 sentence pairs, 4.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sw-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Swahili-Uzbek (121,068 sentence pairs, 4.43M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sw-uz.tmx.gz">0.1M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Swahili-Vietnamese (511,019 sentence pairs, 22.63M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sw-vi.tmx.gz">0.5M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Swahili-Xhosa (103,269 sentence pairs, 3.41M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/sw-xh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ta plain text' href="download.php?f=MultiHPLT/v2/mono/ta.txt.gz">ta</a>
</th><td>1</td> <td>43.4M</td> <td>0.9M</td><td bgcolor="#efffd0"><a rel="nofollow" title='Tamil-Afrikaans (89,264 sentence pairs, 2.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-ta.txt.zip">89.3k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Tamil-Arabic (161,435 sentence pairs, 4.98M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-ta.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Tamil-Azerbaijani (77,559 sentence pairs, 1.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-ta.txt.zip">77.6k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Tamil-Belarusian (77,560 sentence pairs, 1.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-ta.txt.zip">77.6k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Tamil-Bulgarian (226,188 sentence pairs, 5.74M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-ta.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Tamil-Bengali (160,261 sentence pairs, 5.16M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-ta.txt.zip">0.2M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Tamil-Bosnian (21,502 sentence pairs, 0.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-ta.txt.zip">21.5k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Tamil-Catalan (107,872 sentence pairs, 3.09M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-ta.txt.zip">0.1M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Tamil-Welsh (69,866 sentence pairs, 2.09M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-ta.txt.zip">69.9k</a>
</td><td></td><td bgcolor="#ffffe5"><a rel="nofollow" title='Tamil-Esperanto (56,943 sentence pairs, 1.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-ta.txt.zip">56.9k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Tamil-Estonian (80,334 sentence pairs, 1.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-ta.txt.zip">80.3k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Tamil-Basque (47,056 sentence pairs, 1.12M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-ta.txt.zip">47.1k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Tamil-Persian (93,090 sentence pairs, 3.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-ta.txt.zip">93.1k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Tamil-Finnish (172,548 sentence pairs, 3.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-ta.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Tamil-Irish (64,234 sentence pairs, 1.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-ta.txt.zip">64.2k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Tamil-Galician (73,480 sentence pairs, 1.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-ta.txt.zip">73.5k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Tamil-Gujarati (132,053 sentence pairs, 4.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-ta.txt.zip">0.1M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Tamil-Hebrew (135,209 sentence pairs, 3.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-ta.txt.zip">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Tamil-Hindi (272,693 sentence pairs, 10.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-ta.txt.zip">0.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Tamil-Croatian (138,744 sentence pairs, 3.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-ta.txt.zip">0.1M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Tamil-Icelandic (75,015 sentence pairs, 2.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-ta.txt.zip">75.0k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Tamil-Japanese (118,497 sentence pairs, 1.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-ta.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Tamil-Kazakh (55,817 sentence pairs, 1.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-ta.txt.zip">55.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Tamil-Kannada (129,511 sentence pairs, 3.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-ta.txt.zip">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Tamil-Korean (183,468 sentence pairs, 4.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-ta.txt.zip">0.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Tamil-Lithuanian (135,492 sentence pairs, 2.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-ta.txt.zip">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Tamil-Latvian (114,313 sentence pairs, 2.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-ta.txt.zip">0.1M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Tamil-Macedonian (97,773 sentence pairs, 2.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-ta.txt.zip">97.8k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Tamil-Malayalam (100,514 sentence pairs, 2.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-ta.txt.zip">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Tamil-Marathi (109,225 sentence pairs, 3.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-ta.txt.zip">0.1M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Tamil-Malay (113,539 sentence pairs, 2.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-ta.txt.zip">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Tamil-Maltese (25,608 sentence pairs, 0.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-ta.txt.zip">25.6k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Tamil-BokmÃ¥l, Norwegian (128,947 sentence pairs, 3.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-ta.txt.zip">0.1M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Tamil-Nepali (66,942 sentence pairs, 2.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-ta.txt.zip">66.9k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Tamil-Norwegian Nynorsk (3,395 sentence pairs, 81.82k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-ta.txt.zip">3.4k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Tamil-Sinhala (55,866 sentence pairs, 1.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-ta.txt.zip">55.9k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Tamil-Slovak (170,702 sentence pairs, 3.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-ta.txt.zip">0.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Tamil-Slovenian (92,466 sentence pairs, 2.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-ta.txt.zip">92.5k</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Tamil-Albanian (101,157 sentence pairs, 3.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-ta.txt.zip">0.1M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Tamil-Serbian (97,053 sentence pairs, 2.53M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sr-ta.txt.zip">97.1k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Tamil-Swahili (83,736 sentence pairs, 2.61M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sw-ta.txt.zip">83.7k</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Tamil-Telugu (160,216 sentence pairs, 4.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ta-te.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Tamil-Thai (86,529 sentence pairs, 1.92M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ta-th.tmx.gz">86.5k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Tamil-Turkish (162,955 sentence pairs, 4.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ta-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Tamil-Ukrainian (139,433 sentence pairs, 3.58M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ta-uk.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Tamil-Urdu (143,369 sentence pairs, 5.68M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ta-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Tamil-Uzbek (40,817 sentence pairs, 1.22M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ta-uz.tmx.gz">40.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Tamil-Vietnamese (149,338 sentence pairs, 5.10M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ta-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Tamil-Xhosa (25,400 sentence pairs, 0.67M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ta-xh.tmx.gz">25.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized te plain text' href="download.php?f=MultiHPLT/v2/mono/te.txt.gz">te</a>
</th><td>1</td> <td>22.9M</td> <td>0.8M</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Telugu-Afrikaans (94,250 sentence pairs, 2.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-te.txt.zip">94.2k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Telugu-Arabic (142,230 sentence pairs, 4.49M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-te.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Telugu-Azerbaijani (77,992 sentence pairs, 1.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-te.txt.zip">78.0k</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Telugu-Belarusian (86,337 sentence pairs, 2.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-te.txt.zip">86.3k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Telugu-Bulgarian (176,275 sentence pairs, 4.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-te.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Telugu-Bengali (156,219 sentence pairs, 5.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-te.txt.zip">0.2M</a>
</td><td bgcolor="#fff5ef"><a rel="nofollow" title='Telugu-Bosnian (20,115 sentence pairs, 0.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-te.txt.zip">20.1k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Telugu-Catalan (110,391 sentence pairs, 3.16M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-te.txt.zip">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Telugu-Welsh (77,006 sentence pairs, 2.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-te.txt.zip">77.0k</a>
</td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='Telugu-Esperanto (62,791 sentence pairs, 1.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-te.txt.zip">62.8k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Telugu-Estonian (79,281 sentence pairs, 1.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-te.txt.zip">79.3k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Telugu-Basque (49,358 sentence pairs, 1.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-te.txt.zip">49.4k</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Telugu-Persian (90,573 sentence pairs, 3.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-te.txt.zip">90.6k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Telugu-Finnish (142,363 sentence pairs, 3.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-te.txt.zip">0.1M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Telugu-Irish (73,079 sentence pairs, 2.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-te.txt.zip">73.1k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Telugu-Galician (83,660 sentence pairs, 2.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-te.txt.zip">83.7k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Telugu-Gujarati (151,161 sentence pairs, 5.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-te.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Telugu-Hebrew (144,876 sentence pairs, 4.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-te.txt.zip">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Telugu-Hindi (275,045 sentence pairs, 10.72M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-te.txt.zip">0.3M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Telugu-Croatian (126,163 sentence pairs, 3.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-te.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Telugu-Icelandic (62,692 sentence pairs, 1.76M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-te.txt.zip">62.7k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Telugu-Japanese (105,649 sentence pairs, 1.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-te.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Telugu-Kazakh (55,848 sentence pairs, 1.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-te.txt.zip">55.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Telugu-Kannada (163,039 sentence pairs, 5.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-te.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Telugu-Korean (161,107 sentence pairs, 4.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-te.txt.zip">0.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Telugu-Lithuanian (118,584 sentence pairs, 2.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-te.txt.zip">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Telugu-Latvian (115,679 sentence pairs, 2.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-te.txt.zip">0.1M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Telugu-Macedonian (100,196 sentence pairs, 2.55M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-te.txt.zip">0.1M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Telugu-Malayalam (101,438 sentence pairs, 2.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-te.txt.zip">0.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Telugu-Marathi (107,628 sentence pairs, 3.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-te.txt.zip">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Telugu-Malay (105,215 sentence pairs, 2.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-te.txt.zip">0.1M</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Telugu-Maltese (28,373 sentence pairs, 0.74M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-te.txt.zip">28.4k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Telugu-BokmÃ¥l, Norwegian (101,501 sentence pairs, 2.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-te.txt.zip">0.1M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Telugu-Nepali (64,078 sentence pairs, 2.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-te.txt.zip">64.1k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Telugu-Norwegian Nynorsk (2,939 sentence pairs, 71.81k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-te.txt.zip">2.9k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Telugu-Sinhala (48,232 sentence pairs, 1.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-te.txt.zip">48.2k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Telugu-Slovak (145,128 sentence pairs, 3.31M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-te.txt.zip">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Telugu-Slovenian (91,089 sentence pairs, 2.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-te.txt.zip">91.1k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Telugu-Albanian (92,435 sentence pairs, 2.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-te.txt.zip">92.4k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Telugu-Serbian (94,955 sentence pairs, 2.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sr-te.txt.zip">95.0k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Telugu-Swahili (69,773 sentence pairs, 2.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sw-te.txt.zip">69.8k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Telugu-Tamil (160,216 sentence pairs, 4.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ta-te.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffffe8"><a rel="nofollow" title='Telugu-Thai (62,929 sentence pairs, 1.45M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/te-th.tmx.gz">62.9k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Telugu-Turkish (138,713 sentence pairs, 4.09M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/te-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Telugu-Ukrainian (125,249 sentence pairs, 3.04M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/te-uk.tmx.gz">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Telugu-Urdu (121,972 sentence pairs, 4.91M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/te-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Telugu-Uzbek (44,442 sentence pairs, 1.38M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/te-uz.tmx.gz">44.4k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Telugu-Vietnamese (109,677 sentence pairs, 3.66M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/te-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Telugu-Xhosa (27,844 sentence pairs, 0.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/te-xh.tmx.gz">27.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized th plain text' href="download.php?f=MultiHPLT/v2/mono/th.txt.gz">th</a>
</th><td>1</td> <td>109.1M</td> <td>3.0M</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Thai-Afrikaans (126,303 sentence pairs, 2.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-th.txt.zip">0.1M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Thai-Arabic (603,112 sentence pairs, 15.85M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-th.txt.zip">0.6M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Thai-Azerbaijani (80,854 sentence pairs, 1.48M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-th.txt.zip">80.9k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Thai-Belarusian (99,118 sentence pairs, 1.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-th.txt.zip">99.1k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Thai-Bulgarian (561,452 sentence pairs, 10.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-th.txt.zip">0.6M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Thai-Bengali (154,526 sentence pairs, 3.85M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-th.txt.zip">0.2M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Thai-Bosnian (43,773 sentence pairs, 0.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-th.txt.zip">43.8k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Thai-Catalan (197,939 sentence pairs, 4.61M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-th.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Thai-Welsh (82,121 sentence pairs, 1.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-th.txt.zip">82.1k</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Thai-Esperanto (41,158 sentence pairs, 0.90M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-th.txt.zip">41.2k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Thai-Estonian (211,500 sentence pairs, 3.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-th.txt.zip">0.2M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Thai-Basque (37,366 sentence pairs, 0.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-th.txt.zip">37.4k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Thai-Persian (166,813 sentence pairs, 4.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-th.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Thai-Finnish (573,094 sentence pairs, 9.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-th.txt.zip">0.6M</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Thai-Irish (80,874 sentence pairs, 2.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-th.txt.zip">80.9k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Thai-Galician (83,220 sentence pairs, 1.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-th.txt.zip">83.2k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Thai-Gujarati (71,063 sentence pairs, 1.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-th.txt.zip">71.1k</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Thai-Hebrew (454,243 sentence pairs, 10.85M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-th.txt.zip">0.5M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Thai-Hindi (509,634 sentence pairs, 15.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-th.txt.zip">0.5M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Thai-Croatian (393,923 sentence pairs, 7.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-th.txt.zip">0.4M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Thai-Icelandic (98,937 sentence pairs, 2.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-th.txt.zip">98.9k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Thai-Japanese (585,735 sentence pairs, 5.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-th.txt.zip">0.6M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Thai-Kazakh (51,164 sentence pairs, 0.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-th.txt.zip">51.2k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Thai-Kannada (50,855 sentence pairs, 1.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-th.txt.zip">50.9k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Thai-Korean (806,349 sentence pairs, 16.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-th.txt.zip">0.8M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Thai-Lithuanian (379,872 sentence pairs, 6.61M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-th.txt.zip">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Thai-Latvian (335,354 sentence pairs, 6.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-th.txt.zip">0.3M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Thai-Macedonian (113,113 sentence pairs, 2.32M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-th.txt.zip">0.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Thai-Malayalam (41,093 sentence pairs, 0.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-th.txt.zip">41.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Thai-Marathi (50,336 sentence pairs, 1.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-th.txt.zip">50.3k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Thai-Malay (337,406 sentence pairs, 7.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-th.txt.zip">0.3M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Thai-Maltese (31,973 sentence pairs, 0.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-th.txt.zip">32.0k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Thai-BokmÃ¥l, Norwegian (398,522 sentence pairs, 8.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-th.txt.zip">0.4M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Thai-Nepali (41,621 sentence pairs, 1.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-th.txt.zip">41.6k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Thai-Norwegian Nynorsk (5,247 sentence pairs, 85.80k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-th.txt.zip">5.2k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Thai-Sinhala (27,256 sentence pairs, 0.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-th.txt.zip">27.3k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Thai-Slovak (504,401 sentence pairs, 8.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-th.txt.zip">0.5M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Thai-Slovenian (242,319 sentence pairs, 4.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-th.txt.zip">0.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Thai-Albanian (115,493 sentence pairs, 2.90M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-th.txt.zip">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Thai-Serbian (164,811 sentence pairs, 3.15M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sr-th.txt.zip">0.2M</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Thai-Swahili (85,932 sentence pairs, 2.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sw-th.txt.zip">85.9k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Thai-Tamil (86,529 sentence pairs, 1.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ta-th.txt.zip">86.5k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Thai-Telugu (62,929 sentence pairs, 1.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/te-th.txt.zip">62.9k</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Thai-Turkish (783,923 sentence pairs, 18.75M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/th-tr.tmx.gz">0.8M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Thai-Ukrainian (414,748 sentence pairs, 7.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/th-uk.tmx.gz">0.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Thai-Urdu (133,478 sentence pairs, 4.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/th-ur.tmx.gz">0.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Thai-Uzbek (39,956 sentence pairs, 0.81M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/th-uz.tmx.gz">40.0k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Thai-Vietnamese (545,747 sentence pairs, 15.72M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/th-vi.tmx.gz">0.5M</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Thai-Xhosa (16,659 sentence pairs, 0.32M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/th-xh.tmx.gz">16.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=MultiHPLT/v2/mono/tr.txt.gz">tr</a>
</th><td>1</td> <td>350.2M</td> <td>22.1M</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Turkish-Afrikaans (330,462 sentence pairs, 10.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-tr.txt.zip">0.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Turkish-Arabic (2,223,680 sentence pairs, 71.07M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-tr.txt.zip">2.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Turkish-Azerbaijani (236,623 sentence pairs, 6.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Turkish-Belarusian (240,658 sentence pairs, 5.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-tr.txt.zip">0.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Turkish-Bulgarian (1,678,888 sentence pairs, 45.88M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-tr.txt.zip">1.7M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Turkish-Bengali (377,008 sentence pairs, 11.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-tr.txt.zip">0.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Turkish-Bosnian (145,974 sentence pairs, 4.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-tr.txt.zip">0.1M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Turkish-Catalan (535,898 sentence pairs, 16.00M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-tr.txt.zip">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Turkish-Welsh (175,837 sentence pairs, 5.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-tr.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-English (21,616,652 sentence pairs, 858.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/en-tr.txt.zip">21.6M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Turkish-Esperanto (157,942 sentence pairs, 5.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-tr.txt.zip">0.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Turkish-Estonian (640,751 sentence pairs, 16.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-tr.txt.zip">0.6M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Turkish-Basque (106,896 sentence pairs, 2.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-tr.txt.zip">0.1M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Turkish-Persian (431,797 sentence pairs, 15.32M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-tr.txt.zip">0.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Turkish-Finnish (1,962,104 sentence pairs, 46.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-tr.txt.zip">2.0M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Turkish-Irish (202,609 sentence pairs, 6.43M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Turkish-Galician (192,615 sentence pairs, 5.13M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Turkish-Gujarati (141,046 sentence pairs, 4.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-tr.txt.zip">0.1M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Turkish-Hebrew (2,068,964 sentence pairs, 58.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-tr.txt.zip">2.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Turkish-Hindi (1,544,823 sentence pairs, 55.83M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-tr.txt.zip">1.5M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Turkish-Croatian (1,147,437 sentence pairs, 30.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-tr.txt.zip">1.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Turkish-Icelandic (234,759 sentence pairs, 6.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-tr.txt.zip">0.2M</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Turkish-Japanese (2,277,026 sentence pairs, 33.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-tr.txt.zip">2.3M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Turkish-Kazakh (124,856 sentence pairs, 3.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-tr.txt.zip">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Turkish-Kannada (103,615 sentence pairs, 2.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-tr.txt.zip">0.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Turkish-Korean (3,005,710 sentence pairs, 78.12M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-tr.txt.zip">3.0M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Turkish-Lithuanian (1,164,842 sentence pairs, 29.04M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-tr.txt.zip">1.2M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Turkish-Latvian (1,041,120 sentence pairs, 26.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-tr.txt.zip">1.0M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Macedonian (279,920 sentence pairs, 7.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-tr.txt.zip">0.3M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Turkish-Malayalam (81,919 sentence pairs, 2.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-tr.txt.zip">81.9k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Turkish-Marathi (93,012 sentence pairs, 3.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-tr.txt.zip">93.0k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Turkish-Malay (743,876 sentence pairs, 20.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-tr.txt.zip">0.7M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Turkish-Maltese (74,423 sentence pairs, 2.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-tr.txt.zip">74.4k</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Turkish-BokmÃ¥l, Norwegian (1,313,472 sentence pairs, 37.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-tr.txt.zip">1.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Turkish-Nepali (73,020 sentence pairs, 2.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-tr.txt.zip">73.0k</a>
</td><td bgcolor="#fff2ed"><a rel="nofollow" title='Turkish-Norwegian Nynorsk (15,706 sentence pairs, 0.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-tr.txt.zip">15.7k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Turkish-Sinhala (53,026 sentence pairs, 1.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-tr.txt.zip">53.0k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Turkish-Slovak (1,555,500 sentence pairs, 39.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-tr.txt.zip">1.6M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Turkish-Slovenian (739,292 sentence pairs, 21.07M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-tr.txt.zip">0.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Turkish-Albanian (301,373 sentence pairs, 10.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-tr.txt.zip">0.3M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Turkish-Serbian (418,695 sentence pairs, 10.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sr-tr.txt.zip">0.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Turkish-Swahili (168,415 sentence pairs, 5.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sw-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Turkish-Tamil (162,955 sentence pairs, 4.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ta-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Turkish-Telugu (138,713 sentence pairs, 4.09M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/te-tr.txt.zip">0.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Turkish-Thai (783,923 sentence pairs, 18.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/th-tr.txt.zip">0.8M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Turkish-Ukrainian (1,710,723 sentence pairs, 42.34M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/tr-uk.tmx.gz">1.7M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Turkish-Urdu (283,523 sentence pairs, 11.15M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/tr-ur.tmx.gz">0.3M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Turkish-Uzbek (98,445 sentence pairs, 2.65M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/tr-uz.tmx.gz">98.4k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Turkish-Vietnamese (1,916,070 sentence pairs, 65.25M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/tr-vi.tmx.gz">1.9M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Turkish-Xhosa (84,835 sentence pairs, 2.51M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/tr-xh.tmx.gz">84.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=MultiHPLT/v2/mono/uk.txt.gz">uk</a>
</th><td>1</td> <td>389.8M</td> <td>21.7M</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Ukrainian-Afrikaans (783,661 sentence pairs, 26.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-uk.txt.zip">0.8M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Ukrainian-Arabic (1,056,543 sentence pairs, 28.15M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-uk.txt.zip">1.1M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Ukrainian-Azerbaijani (508,708 sentence pairs, 14.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-uk.txt.zip">0.5M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Ukrainian-Belarusian (1,181,682 sentence pairs, 34.19M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-uk.txt.zip">1.2M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Ukrainian-Bulgarian (3,607,048 sentence pairs, 112.83M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-uk.txt.zip">3.6M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Ukrainian-Bengali (216,577 sentence pairs, 5.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-uk.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Ukrainian-Bosnian (300,751 sentence pairs, 9.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-uk.txt.zip">0.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Ukrainian-Catalan (1,425,247 sentence pairs, 48.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-uk.txt.zip">1.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Ukrainian-Welsh (552,311 sentence pairs, 18.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-uk.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#dfffc7"><a rel="nofollow" title='Ukrainian-Esperanto (325,183 sentence pairs, 10.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-uk.txt.zip">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Ukrainian-Estonian (1,506,883 sentence pairs, 43.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-uk.txt.zip">1.5M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Ukrainian-Basque (272,639 sentence pairs, 7.34M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-uk.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Ukrainian-Persian (293,310 sentence pairs, 9.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-uk.txt.zip">0.3M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Ukrainian-Finnish (3,090,414 sentence pairs, 82.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-uk.txt.zip">3.1M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Ukrainian-Irish (594,617 sentence pairs, 21.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-uk.txt.zip">0.6M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Ukrainian-Galician (585,613 sentence pairs, 18.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-uk.txt.zip">0.6M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Ukrainian-Gujarati (117,803 sentence pairs, 3.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-uk.txt.zip">0.1M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Ukrainian-Hebrew (1,109,735 sentence pairs, 26.35M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-uk.txt.zip">1.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Ukrainian-Hindi (627,400 sentence pairs, 18.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-uk.txt.zip">0.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Ukrainian-Croatian (2,507,979 sentence pairs, 75.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-uk.txt.zip">2.5M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Ukrainian-Icelandic (753,147 sentence pairs, 24.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-uk.txt.zip">0.8M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Ukrainian-Japanese (1,212,332 sentence pairs, 18.98M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-uk.txt.zip">1.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Ukrainian-Kazakh (332,627 sentence pairs, 9.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-uk.txt.zip">0.3M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Ukrainian-Kannada (103,653 sentence pairs, 2.47M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-uk.txt.zip">0.1M</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Ukrainian-Korean (1,400,485 sentence pairs, 32.90M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-uk.txt.zip">1.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Ukrainian-Lithuanian (2,534,267 sentence pairs, 71.25M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-uk.txt.zip">2.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Ukrainian-Latvian (2,404,625 sentence pairs, 69.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-uk.txt.zip">2.4M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Ukrainian-Macedonian (833,349 sentence pairs, 26.54M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-uk.txt.zip">0.8M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Ukrainian-Malayalam (75,243 sentence pairs, 1.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-uk.txt.zip">75.2k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Ukrainian-Marathi (86,629 sentence pairs, 2.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-uk.txt.zip">86.6k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Ukrainian-Malay (1,479,351 sentence pairs, 44.29M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-uk.txt.zip">1.5M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Ukrainian-Maltese (247,437 sentence pairs, 7.83M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-uk.txt.zip">0.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Ukrainian-BokmÃ¥l, Norwegian (2,661,339 sentence pairs, 85.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-uk.txt.zip">2.7M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Ukrainian-Nepali (69,142 sentence pairs, 1.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-uk.txt.zip">69.1k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Ukrainian-Norwegian Nynorsk (34,785 sentence pairs, 1.01M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-uk.txt.zip">34.8k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Ukrainian-Sinhala (50,334 sentence pairs, 1.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-uk.txt.zip">50.3k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Ukrainian-Slovak (3,176,602 sentence pairs, 92.46M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-uk.txt.zip">3.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Ukrainian-Slovenian (1,774,895 sentence pairs, 55.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-uk.txt.zip">1.8M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Ukrainian-Albanian (902,648 sentence pairs, 32.61M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-uk.txt.zip">0.9M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Ukrainian-Serbian (1,358,317 sentence pairs, 40.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sr-uk.txt.zip">1.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Ukrainian-Swahili (518,986 sentence pairs, 17.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sw-uk.txt.zip">0.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Ukrainian-Tamil (139,433 sentence pairs, 3.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ta-uk.txt.zip">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Ukrainian-Telugu (125,249 sentence pairs, 3.04M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/te-uk.txt.zip">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Ukrainian-Thai (414,748 sentence pairs, 7.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/th-uk.txt.zip">0.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Ukrainian-Turkish (1,710,723 sentence pairs, 42.34M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/tr-uk.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Ukrainian-Urdu (230,524 sentence pairs, 7.79M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/uk-ur.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Ukrainian-Uzbek (321,115 sentence pairs, 9.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/uk-uz.tmx.gz">0.3M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Ukrainian-Vietnamese (2,255,102 sentence pairs, 86.11M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/uk-vi.tmx.gz">2.3M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Ukrainian-Xhosa (143,444 sentence pairs, 4.28M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/uk-xh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ur plain text' href="download.php?f=MultiHPLT/v2/mono/ur.txt.gz">ur</a>
</th><td>1</td> <td>42.4M</td> <td>1.1M</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Urdu-Afrikaans (117,177 sentence pairs, 4.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-ur.txt.zip">0.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Urdu-Arabic (275,123 sentence pairs, 12.20M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-ur.txt.zip">0.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Urdu-Azerbaijani (98,361 sentence pairs, 3.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-ur.txt.zip">98.4k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Urdu-Belarusian (107,652 sentence pairs, 3.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-ur.txt.zip">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Urdu-Bulgarian (269,416 sentence pairs, 9.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-ur.txt.zip">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Urdu-Bengali (232,317 sentence pairs, 10.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-ur.txt.zip">0.2M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Urdu-Bosnian (26,666 sentence pairs, 0.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-ur.txt.zip">26.7k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Urdu-Catalan (154,800 sentence pairs, 5.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-ur.txt.zip">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Urdu-Welsh (118,906 sentence pairs, 4.76M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-ur.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Urdu-Esperanto (68,730 sentence pairs, 2.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-ur.txt.zip">68.7k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Urdu-Estonian (111,341 sentence pairs, 3.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-ur.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Urdu-Basque (58,322 sentence pairs, 1.83M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-ur.txt.zip">58.3k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Urdu-Persian (170,475 sentence pairs, 8.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-ur.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Urdu-Finnish (192,133 sentence pairs, 5.85M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-ur.txt.zip">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Urdu-Irish (96,266 sentence pairs, 3.88M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-ur.txt.zip">96.3k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Urdu-Galician (102,599 sentence pairs, 3.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-ur.txt.zip">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Urdu-Gujarati (141,777 sentence pairs, 6.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-ur.txt.zip">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Urdu-Hebrew (200,080 sentence pairs, 8.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-ur.txt.zip">0.2M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Urdu-Hindi (349,584 sentence pairs, 17.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-ur.txt.zip">0.3M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Urdu-Croatian (166,700 sentence pairs, 5.62M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-ur.txt.zip">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Urdu-Icelandic (92,942 sentence pairs, 3.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-ur.txt.zip">92.9k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Urdu-Japanese (162,476 sentence pairs, 3.18M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-ur.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Urdu-Kazakh (57,027 sentence pairs, 1.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-ur.txt.zip">57.0k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Urdu-Kannada (97,222 sentence pairs, 3.77M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-ur.txt.zip">97.2k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Urdu-Korean (255,279 sentence pairs, 9.25M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-ur.txt.zip">0.3M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Urdu-Lithuanian (167,430 sentence pairs, 5.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-ur.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Urdu-Latvian (159,916 sentence pairs, 5.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-ur.txt.zip">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Urdu-Macedonian (115,950 sentence pairs, 4.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-ur.txt.zip">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Urdu-Malayalam (63,624 sentence pairs, 2.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-ur.txt.zip">63.6k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Urdu-Marathi (96,257 sentence pairs, 4.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-ur.txt.zip">96.3k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Urdu-Malay (180,430 sentence pairs, 6.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-ur.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Urdu-Maltese (45,241 sentence pairs, 1.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-ur.txt.zip">45.2k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Urdu-BokmÃ¥l, Norwegian (164,719 sentence pairs, 6.21M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-ur.txt.zip">0.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Urdu-Nepali (75,423 sentence pairs, 3.40M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-ur.txt.zip">75.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Urdu-Norwegian Nynorsk (2,385 sentence pairs, 73.51k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-ur.txt.zip">2.4k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Urdu-Sinhala (47,627 sentence pairs, 1.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-ur.txt.zip">47.6k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Urdu-Slovak (205,433 sentence pairs, 6.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-ur.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Urdu-Slovenian (123,290 sentence pairs, 4.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-ur.txt.zip">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Urdu-Albanian (127,597 sentence pairs, 5.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-ur.txt.zip">0.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Urdu-Serbian (123,342 sentence pairs, 4.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sr-ur.txt.zip">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Urdu-Swahili (110,481 sentence pairs, 4.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sw-ur.txt.zip">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Urdu-Tamil (143,369 sentence pairs, 5.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ta-ur.txt.zip">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Urdu-Telugu (121,972 sentence pairs, 4.91M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/te-ur.txt.zip">0.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Urdu-Thai (133,478 sentence pairs, 4.34M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/th-ur.txt.zip">0.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Urdu-Turkish (283,523 sentence pairs, 11.15M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/tr-ur.txt.zip">0.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Urdu-Ukrainian (230,524 sentence pairs, 7.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/uk-ur.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Urdu-Uzbek (52,388 sentence pairs, 2.19M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ur-uz.tmx.gz">52.4k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Urdu-Vietnamese (199,728 sentence pairs, 9.16M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ur-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Urdu-Xhosa (25,783 sentence pairs, 0.94M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/ur-xh.tmx.gz">25.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uz plain text' href="download.php?f=MultiHPLT/v2/mono/uz.txt.gz">uz</a>
</th><td>1</td> <td>20.6M</td> <td>1.1M</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Uzbek-Afrikaans (175,296 sentence pairs, 6.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-uz.txt.zip">0.2M</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Uzbek-Arabic (98,165 sentence pairs, 3.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-uz.txt.zip">98.2k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Uzbek-Azerbaijani (189,017 sentence pairs, 5.85M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-uz.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Uzbek-Belarusian (221,838 sentence pairs, 6.88M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-uz.txt.zip">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Uzbek-Bulgarian (320,369 sentence pairs, 10.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-uz.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Uzbek-Bengali (52,455 sentence pairs, 1.71M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-uz.txt.zip">52.5k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Uzbek-Bosnian (53,974 sentence pairs, 1.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-uz.txt.zip">54.0k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Uzbek-Catalan (179,255 sentence pairs, 6.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-uz.txt.zip">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Uzbek-Welsh (130,903 sentence pairs, 4.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-uz.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Uzbek-Esperanto (92,691 sentence pairs, 3.15M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-uz.txt.zip">92.7k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Uzbek-Estonian (195,786 sentence pairs, 5.78M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-uz.txt.zip">0.2M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Uzbek-Basque (83,481 sentence pairs, 2.45M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-uz.txt.zip">83.5k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Uzbek-Persian (44,710 sentence pairs, 1.73M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-uz.txt.zip">44.7k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Uzbek-Finnish (226,250 sentence pairs, 6.17M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-uz.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Uzbek-Irish (147,871 sentence pairs, 5.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-uz.txt.zip">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Uzbek-Galician (129,089 sentence pairs, 4.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-uz.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Uzbek-Gujarati (45,185 sentence pairs, 1.54M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-uz.txt.zip">45.2k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Uzbek-Hebrew (71,965 sentence pairs, 1.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-uz.txt.zip">72.0k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Uzbek-Hindi (83,739 sentence pairs, 3.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-uz.txt.zip">83.7k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Uzbek-Croatian (270,157 sentence pairs, 8.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-uz.txt.zip">0.3M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Uzbek-Icelandic (127,434 sentence pairs, 4.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-uz.txt.zip">0.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Uzbek-Japanese (66,026 sentence pairs, 1.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-uz.txt.zip">66.0k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Uzbek-Kazakh (178,794 sentence pairs, 5.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-uz.txt.zip">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Uzbek-Kannada (36,502 sentence pairs, 1.09M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-uz.txt.zip">36.5k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Uzbek-Korean (82,358 sentence pairs, 2.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-uz.txt.zip">82.4k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Uzbek-Lithuanian (249,627 sentence pairs, 7.36M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-uz.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Uzbek-Latvian (240,937 sentence pairs, 7.32M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-uz.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Uzbek-Macedonian (183,574 sentence pairs, 6.35M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-uz.txt.zip">0.2M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Uzbek-Malayalam (30,315 sentence pairs, 0.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-uz.txt.zip">30.3k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Uzbek-Marathi (35,944 sentence pairs, 1.25M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-uz.txt.zip">35.9k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Uzbek-Malay (207,853 sentence pairs, 6.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-uz.txt.zip">0.2M</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Uzbek-Maltese (59,165 sentence pairs, 2.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-uz.txt.zip">59.2k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Uzbek-BokmÃ¥l, Norwegian (239,007 sentence pairs, 7.99M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-uz.txt.zip">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Uzbek-Nepali (31,024 sentence pairs, 1.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-uz.txt.zip">31.0k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Uzbek-Norwegian Nynorsk (1,546 sentence pairs, 50.08k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-uz.txt.zip">1.5k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Uzbek-Sinhala (27,983 sentence pairs, 0.89M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-uz.txt.zip">28.0k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Uzbek-Slovak (309,647 sentence pairs, 9.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-uz.txt.zip">0.3M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Uzbek-Slovenian (224,688 sentence pairs, 7.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-uz.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Uzbek-Albanian (190,839 sentence pairs, 7.24M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-uz.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Uzbek-Serbian (186,791 sentence pairs, 6.12M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sr-uz.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Uzbek-Swahili (121,068 sentence pairs, 4.43M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sw-uz.txt.zip">0.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Uzbek-Tamil (40,817 sentence pairs, 1.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ta-uz.txt.zip">40.8k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Uzbek-Telugu (44,442 sentence pairs, 1.38M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/te-uz.txt.zip">44.4k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Uzbek-Thai (39,956 sentence pairs, 0.81M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/th-uz.txt.zip">40.0k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Uzbek-Turkish (98,445 sentence pairs, 2.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/tr-uz.txt.zip">98.4k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Uzbek-Ukrainian (321,115 sentence pairs, 9.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/uk-uz.txt.zip">0.3M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Uzbek-Urdu (52,388 sentence pairs, 2.19M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ur-uz.txt.zip">52.4k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Uzbek-Vietnamese (202,233 sentence pairs, 8.80M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/uz-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Uzbek-Xhosa (48,650 sentence pairs, 1.52M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/uz-xh.tmx.gz">48.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized vi plain text' href="download.php?f=MultiHPLT/v2/mono/vi.txt.gz">vi</a>
</th><td>1</td> <td>467.3M</td> <td>17.0M</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Vietnamese-Afrikaans (795,085 sentence pairs, 34.97M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-vi.txt.zip">0.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Vietnamese-Arabic (1,203,156 sentence pairs, 44.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-vi.txt.zip">1.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Vietnamese-Azerbaijani (395,580 sentence pairs, 14.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-vi.txt.zip">0.4M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Vietnamese-Belarusian (657,124 sentence pairs, 25.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-vi.txt.zip">0.7M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Vietnamese-Bulgarian (2,408,771 sentence pairs, 96.84M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-vi.txt.zip">2.4M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Vietnamese-Bengali (283,913 sentence pairs, 9.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-vi.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Vietnamese-Bosnian (225,238 sentence pairs, 9.16M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-vi.txt.zip">0.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Vietnamese-Catalan (1,233,926 sentence pairs, 55.30M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-vi.txt.zip">1.2M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Vietnamese-Welsh (507,274 sentence pairs, 23.06M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-vi.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#deffc7"><a rel="nofollow" title='Vietnamese-Esperanto (276,715 sentence pairs, 12.05M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-vi.txt.zip">0.3M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Vietnamese-Estonian (1,103,852 sentence pairs, 41.90M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-vi.txt.zip">1.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Vietnamese-Basque (194,575 sentence pairs, 6.93M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-vi.txt.zip">0.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Vietnamese-Persian (302,237 sentence pairs, 12.49M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-vi.txt.zip">0.3M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Vietnamese-Finnish (2,349,172 sentence pairs, 82.55M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-vi.txt.zip">2.3M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Vietnamese-Irish (522,055 sentence pairs, 24.23M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-vi.txt.zip">0.5M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Vietnamese-Galician (510,633 sentence pairs, 21.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-vi.txt.zip">0.5M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Vietnamese-Gujarati (113,285 sentence pairs, 4.02M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-vi.txt.zip">0.1M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Vietnamese-Hebrew (1,146,436 sentence pairs, 37.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-vi.txt.zip">1.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Vietnamese-Hindi (1,184,115 sentence pairs, 48.55M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-vi.txt.zip">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Vietnamese-Croatian (1,693,328 sentence pairs, 66.92M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-vi.txt.zip">1.7M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Vietnamese-Icelandic (554,793 sentence pairs, 23.00M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-vi.txt.zip">0.6M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Vietnamese-Japanese (1,402,029 sentence pairs, 32.12M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-vi.txt.zip">1.4M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Vietnamese-Kazakh (265,967 sentence pairs, 9.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-vi.txt.zip">0.3M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Vietnamese-Kannada (83,432 sentence pairs, 2.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-vi.txt.zip">83.4k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Vietnamese-Korean (1,676,139 sentence pairs, 55.08M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-vi.txt.zip">1.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Vietnamese-Lithuanian (1,656,458 sentence pairs, 60.77M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-vi.txt.zip">1.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Vietnamese-Latvian (1,542,630 sentence pairs, 58.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-vi.txt.zip">1.5M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Vietnamese-Macedonian (668,256 sentence pairs, 28.26M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-vi.txt.zip">0.7M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Vietnamese-Malayalam (59,241 sentence pairs, 1.95M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-vi.txt.zip">59.2k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Vietnamese-Marathi (84,040 sentence pairs, 3.32M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-vi.txt.zip">84.0k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Vietnamese-Malay (1,699,304 sentence pairs, 68.48M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-vi.txt.zip">1.7M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Vietnamese-Maltese (209,350 sentence pairs, 8.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-vi.txt.zip">0.2M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Vietnamese-BokmÃ¥l, Norwegian (2,145,854 sentence pairs, 88.37M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-vi.txt.zip">2.1M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Vietnamese-Nepali (64,824 sentence pairs, 2.56M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-vi.txt.zip">64.8k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Vietnamese-Norwegian Nynorsk (32,993 sentence pairs, 1.33M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-vi.txt.zip">33.0k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Vietnamese-Sinhala (44,656 sentence pairs, 1.59M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-vi.txt.zip">44.7k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Vietnamese-Slovak (2,090,275 sentence pairs, 78.27M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-vi.txt.zip">2.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Vietnamese-Slovenian (1,268,764 sentence pairs, 51.48M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-vi.txt.zip">1.3M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Vietnamese-Albanian (801,633 sentence pairs, 37.07M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-vi.txt.zip">0.8M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Vietnamese-Serbian (999,490 sentence pairs, 39.87M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sr-vi.txt.zip">1.0M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Vietnamese-Swahili (511,019 sentence pairs, 22.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sw-vi.txt.zip">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Tamil (149,338 sentence pairs, 5.10M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ta-vi.txt.zip">0.1M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Vietnamese-Telugu (109,677 sentence pairs, 3.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/te-vi.txt.zip">0.1M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Vietnamese-Thai (545,747 sentence pairs, 15.72M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/th-vi.txt.zip">0.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Vietnamese-Turkish (1,916,070 sentence pairs, 65.25M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/tr-vi.txt.zip">1.9M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Vietnamese-Ukrainian (2,255,102 sentence pairs, 86.11M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/uk-vi.txt.zip">2.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Vietnamese-Urdu (199,728 sentence pairs, 9.16M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ur-vi.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Vietnamese-Uzbek (202,233 sentence pairs, 8.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/uz-vi.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Xhosa (122,501 sentence pairs, 4.96M words) - TMX format' href="download.php?f=MultiHPLT/v2/tmx/vi-xh.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized xh plain text' href="download.php?f=MultiHPLT/v2/mono/xh.txt.gz">xh</a>
</th><td>1</td> <td>5.0M</td> <td>0.3M</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Xhosa-Afrikaans (173,372 sentence pairs, 6.74M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/af-xh.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Xhosa-Arabic (51,692 sentence pairs, 1.55M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ar-xh.txt.zip">51.7k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Xhosa-Azerbaijani (65,592 sentence pairs, 1.82M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/az-xh.txt.zip">65.6k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Xhosa-Belarusian (61,308 sentence pairs, 1.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/be-xh.txt.zip">61.3k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Xhosa-Bulgarian (119,054 sentence pairs, 3.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bg-xh.txt.zip">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Xhosa-Bengali (23,127 sentence pairs, 0.65M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bn-xh.txt.zip">23.1k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Xhosa-Bosnian (19,507 sentence pairs, 0.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/bs-xh.txt.zip">19.5k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Xhosa-Catalan (74,710 sentence pairs, 2.47M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ca-xh.txt.zip">74.7k</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Xhosa-Welsh (62,168 sentence pairs, 2.07M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/cy-xh.txt.zip">62.2k</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Xhosa-Esperanto (148,757 sentence pairs, 5.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eo-xh.txt.zip">0.1M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Xhosa-Estonian (88,129 sentence pairs, 2.50M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/et-xh.txt.zip">88.1k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Xhosa-Basque (60,496 sentence pairs, 1.74M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/eu-xh.txt.zip">60.5k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Xhosa-Persian (21,062 sentence pairs, 0.70M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fa-xh.txt.zip">21.1k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Xhosa-Finnish (187,453 sentence pairs, 5.58M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/fi-xh.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Xhosa-Irish (56,960 sentence pairs, 1.98M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ga-xh.txt.zip">57.0k</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Xhosa-Galician (64,151 sentence pairs, 2.03M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gl-xh.txt.zip">64.2k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Xhosa-Gujarati (26,985 sentence pairs, 0.79M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/gu-xh.txt.zip">27.0k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Xhosa-Hebrew (88,886 sentence pairs, 2.63M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/he-xh.txt.zip">88.9k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Xhosa-Hindi (35,506 sentence pairs, 1.19M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hi-xh.txt.zip">35.5k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Xhosa-Croatian (144,992 sentence pairs, 4.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/hr-xh.txt.zip">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Xhosa-Icelandic (76,091 sentence pairs, 2.32M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/is-xh.txt.zip">76.1k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Xhosa-Japanese (27,531 sentence pairs, 0.42M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ja-xh.txt.zip">27.5k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Xhosa-Kazakh (57,002 sentence pairs, 1.57M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kk-xh.txt.zip">57.0k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Xhosa-Kannada (24,805 sentence pairs, 0.66M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/kn-xh.txt.zip">24.8k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Xhosa-Korean (114,989 sentence pairs, 3.44M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ko-xh.txt.zip">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Xhosa-Lithuanian (98,027 sentence pairs, 2.72M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lt-xh.txt.zip">98.0k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Xhosa-Latvian (107,116 sentence pairs, 3.14M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/lv-xh.txt.zip">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Xhosa-Macedonian (77,621 sentence pairs, 2.39M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mk-xh.txt.zip">77.6k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Xhosa-Malayalam (25,283 sentence pairs, 0.64M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ml-xh.txt.zip">25.3k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Xhosa-Marathi (22,521 sentence pairs, 0.68M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mr-xh.txt.zip">22.5k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Xhosa-Malay (60,853 sentence pairs, 1.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ms-xh.txt.zip">60.9k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Xhosa-Maltese (28,135 sentence pairs, 0.86M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/mt-xh.txt.zip">28.1k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Xhosa-BokmÃ¥l, Norwegian (154,184 sentence pairs, 5.18M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nb-xh.txt.zip">0.2M</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Xhosa-Nepali (17,440 sentence pairs, 0.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ne-xh.txt.zip">17.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Xhosa-Norwegian Nynorsk (1,002 sentence pairs, 30.52k words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/nn-xh.txt.zip">1.0k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Xhosa-Sinhala (16,965 sentence pairs, 0.47M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/si-xh.txt.zip">17.0k</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Xhosa-Slovak (109,393 sentence pairs, 3.22M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sk-xh.txt.zip">0.1M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Xhosa-Slovenian (92,798 sentence pairs, 2.80M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sl-xh.txt.zip">92.8k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Xhosa-Albanian (155,501 sentence pairs, 5.72M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sq-xh.txt.zip">0.2M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Xhosa-Serbian (87,561 sentence pairs, 2.61M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sr-xh.txt.zip">87.6k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Xhosa-Swahili (103,269 sentence pairs, 3.41M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/sw-xh.txt.zip">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Xhosa-Tamil (25,400 sentence pairs, 0.67M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ta-xh.txt.zip">25.4k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Xhosa-Telugu (27,844 sentence pairs, 0.75M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/te-xh.txt.zip">27.8k</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Xhosa-Thai (16,659 sentence pairs, 0.32M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/th-xh.txt.zip">16.7k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Xhosa-Turkish (84,835 sentence pairs, 2.51M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/tr-xh.txt.zip">84.8k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Xhosa-Ukrainian (143,444 sentence pairs, 4.28M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/uk-xh.txt.zip">0.1M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Xhosa-Urdu (25,783 sentence pairs, 0.94M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/ur-xh.txt.zip">25.8k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Xhosa-Uzbek (48,650 sentence pairs, 1.52M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/uz-xh.txt.zip">48.6k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Xhosa-Vietnamese (122,501 sentence pairs, 4.96M words) - Moses format' href="download.php?f=MultiHPLT/v2/moses/vi-xh.txt.zip">0.1M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>