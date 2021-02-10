<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>CCAligned</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>CCAligned v1</h1>This corpus was created from 68 Commoncrawl Snapshots (up until March 2020). The documents are split into sentences based on punctuations and deduplication is performed. No claims of intellectual property are made on the work of preparation of the corpus. The original distribution is available from <a href="http://www.statmt.org/cc-aligned/">http://www.statmt.org/cc-aligned/</a>

<p>CCAligned consists of parallel or comparable web-document pairs in 137 languages aligned with English. These web-document pairs were constructed by performing language identification on raw web-documents, and ensuring corresponding language codes were corresponding in the URLs of web documents. This pattern matching approach yielded more than 100 million aligned documents paired with English. Recognizing that each English document was often aligned to mulitple documents in different target language, we can join on English documents to obtain aligned documents that directly pair two non-English documents (e.g., Arabic-French). <p>Sentence pairs were extracted using similarity scores of LASER embeddings from the document pairs (minimum similarity 1.04, sorted based on decreasing similarity score). It misses some languages not covered by LASER.</p>

<p>113 languages, 112 bitexts<br>total number of files: 36,185<br>total number of tokens: 26.39G<br>total number of sentence fragments: 2.25G<br><p>If you use the dataset or code, please cite (<a href="https://www.aclweb.org/anthology/2020.emnlp-main.480.pdf">pdf</a>): <blockquote><pre> @inproceedings{elkishky_ccaligned_2020,</br> author = {El-Kishky, Ahmed and Chaudhary, Vishrav and Guzmán, Francisco and Koehn, Philipp},</br> booktitle = {Proceedings of the 2020 Conference on Empirical Methods in Natural Language Processing (EMNLP 2020)},</br> month = {November},</br> title = {{CCAligned}: A Massive Collection of Cross-lingual Web-Document Pairs},</br> year = {2020}</br> address = "Online",</br> publisher = "Association for Computational Linguistics",</br> url = "https://www.aclweb.org/anthology/2020.emnlp-main.480",</br> doi = "10.18653/v1/2020.emnlp-main.480",</br> pages = "5960--5969"</br> }</pre></blockquote> 
and, please, acknowledge <a href="https://www.aclweb.org/anthology/L12-1246/">OPUS</a> (<a href="https://www.aclweb.org/anthology/L12-1246.bib">bib</a>, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf">pdf</a>) as well for this service. For more information on the sentence pair mining method, see <a href="https://www.aclweb.org/anthology/W19-5435/">Chaudhary et al., WMT 2019</a> (<a href="https://www.aclweb.org/anthology/W19-5435.bib">bib</a>, <a href="https://www.aclweb.org/anthology/W19-5435.pdf">pdf</a>).

<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>

<h3>Release history:</h3><p><ul><li><a href="CCAligned-v1.php">CCAligned v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="CCAligned/v1/af_sample.html">af</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ak_sample.html">ak</a></th>
<th><a rel="nofollow" href="CCAligned/v1/am_sample.html">am</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="CCAligned/v1/as_sample.html">as</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ay_sample.html">ay</a></th>
<th><a rel="nofollow" href="CCAligned/v1/az_sample.html">az</a></th>
<th><a rel="nofollow" href="CCAligned/v1/be_sample.html">be</a></th>
<th><a rel="nofollow" href="CCAligned/v1/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="CCAligned/v1/bm_sample.html">bm</a></th>
<th><a rel="nofollow" href="CCAligned/v1/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="CCAligned/v1/br_sample.html">br</a></th>
<th><a rel="nofollow" href="CCAligned/v1/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="CCAligned/v1/cb_sample.html">cb</a></th>
<th><a rel="nofollow" href="CCAligned/v1/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="CCAligned/v1/cx_sample.html">cx</a></th>
<th><a rel="nofollow" href="CCAligned/v1/cy_sample.html">cy</a></th>
<th><a rel="nofollow" href="CCAligned/v1/da_sample.html">da</a></th>
<th><a rel="nofollow" href="CCAligned/v1/de_sample.html">de</a></th>
<th><a rel="nofollow" href="CCAligned/v1/el_sample.html">el</a></th>
<th><a rel="nofollow" href="CCAligned/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="CCAligned/v1/es_sample.html">es</a></th>
<th></th>
<th><a rel="nofollow" href="CCAligned/v1/et_sample.html">et</a></th>
<th><a rel="nofollow" href="CCAligned/v1/fa_sample.html">fa</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ff_sample.html">ff</a></th>
<th><a rel="nofollow" href="CCAligned/v1/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="CCAligned/v1/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="CCAligned/v1/gu_sample.html">gu</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ha_sample.html">ha</a></th>
<th><a rel="nofollow" href="CCAligned/v1/he_sample.html">he</a></th>
<th><a rel="nofollow" href="CCAligned/v1/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="CCAligned/v1/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ht_sample.html">ht</a></th>
<th><a rel="nofollow" href="CCAligned/v1/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="CCAligned/v1/hy_sample.html">hy</a></th>
<th><a rel="nofollow" href="CCAligned/v1/id_sample.html">id</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ig_sample.html">ig</a></th>
<th><a rel="nofollow" href="CCAligned/v1/is_sample.html">is</a></th>
<th><a rel="nofollow" href="CCAligned/v1/it_sample.html">it</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ja_sample.html">ja</a></th>
<th><a rel="nofollow" href="CCAligned/v1/jv_sample.html">jv</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ka_sample.html">ka</a></th>
<th><a rel="nofollow" href="CCAligned/v1/kg_sample.html">kg</a></th>
<th><a rel="nofollow" href="CCAligned/v1/kk_sample.html">kk</a></th>
<th><a rel="nofollow" href="CCAligned/v1/km_sample.html">km</a></th>
<th><a rel="nofollow" href="CCAligned/v1/kn_sample.html">kn</a></th>
<th></th>
<th><a rel="nofollow" href="CCAligned/v1/ko_sample.html">ko</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ku_sample.html">ku</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ky_sample.html">ky</a></th>
<th><a rel="nofollow" href="CCAligned/v1/lg_sample.html">lg</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ln_sample.html">ln</a></th>
<th><a rel="nofollow" href="CCAligned/v1/lo_sample.html">lo</a></th>
<th><a rel="nofollow" href="CCAligned/v1/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="CCAligned/v1/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="CCAligned/v1/mg_sample.html">mg</a></th>
<th><a rel="nofollow" href="CCAligned/v1/mi_sample.html">mi</a></th>
<th><a rel="nofollow" href="CCAligned/v1/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="CCAligned/v1/mn_sample.html">mn</a></th>
<th><a rel="nofollow" href="CCAligned/v1/mr_sample.html">mr</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ms_sample.html">ms</a></th>
<th><a rel="nofollow" href="CCAligned/v1/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="CCAligned/v1/my_sample.html">my</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ne_sample.html">ne</a></th>
<th><a rel="nofollow" href="CCAligned/v1/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="CCAligned/v1/no_sample.html">no</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ns_sample.html">ns</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ny_sample.html">ny</a></th>
<th><a rel="nofollow" href="CCAligned/v1/om_sample.html">om</a></th>
<th><a rel="nofollow" href="CCAligned/v1/or_sample.html">or</a></th>
<th></th>
<th><a rel="nofollow" href="CCAligned/v1/pa_sample.html">pa</a></th>
<th><a rel="nofollow" href="CCAligned/v1/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ps_sample.html">ps</a></th>
<th><a rel="nofollow" href="CCAligned/v1/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="CCAligned/v1/qa_sample.html">qa</a></th>
<th><a rel="nofollow" href="CCAligned/v1/qd_sample.html">qd</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="CCAligned/v1/si_sample.html">si</a></th>
<th><a rel="nofollow" href="CCAligned/v1/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="CCAligned/v1/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="CCAligned/v1/sn_sample.html">sn</a></th>
<th><a rel="nofollow" href="CCAligned/v1/so_sample.html">so</a></th>
<th><a rel="nofollow" href="CCAligned/v1/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="CCAligned/v1/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ss_sample.html">ss</a></th>
<th><a rel="nofollow" href="CCAligned/v1/st_sample.html">st</a></th>
<th><a rel="nofollow" href="CCAligned/v1/su_sample.html">su</a></th>
<th><a rel="nofollow" href="CCAligned/v1/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="CCAligned/v1/sw_sample.html">sw</a></th>
<th><a rel="nofollow" href="CCAligned/v1/sz_sample.html">sz</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ta_sample.html">ta</a></th>
<th><a rel="nofollow" href="CCAligned/v1/te_sample.html">te</a></th>
<th><a rel="nofollow" href="CCAligned/v1/tg_sample.html">tg</a></th>
<th></th>
<th><a rel="nofollow" href="CCAligned/v1/th_sample.html">th</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ti_sample.html">ti</a></th>
<th><a rel="nofollow" href="CCAligned/v1/tl_sample.html">tl</a></th>
<th><a rel="nofollow" href="CCAligned/v1/tn_sample.html">tn</a></th>
<th><a rel="nofollow" href="CCAligned/v1/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ts_sample.html">ts</a></th>
<th><a rel="nofollow" href="CCAligned/v1/tz_sample.html">tz</a></th>
<th><a rel="nofollow" href="CCAligned/v1/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ur_sample.html">ur</a></th>
<th><a rel="nofollow" href="CCAligned/v1/ve_sample.html">ve</a></th>
<th><a rel="nofollow" href="CCAligned/v1/vi_sample.html">vi</a></th>
<th><a rel="nofollow" href="CCAligned/v1/wo_sample.html">wo</a></th>
<th><a rel="nofollow" href="CCAligned/v1/xh_sample.html">xh</a></th>
<th><a rel="nofollow" href="CCAligned/v1/yo_sample.html">yo</a></th>
<th><a rel="nofollow" href="CCAligned/v1/zh_CN_sample.html">zh_CN</a></th>
<th><a rel="nofollow" href="CCAligned/v1/zh_TW_sample.html">zh_TW</a></th>
<th><a rel="nofollow" href="CCAligned/v1/zu_sample.html">zu</a></th>
<th><a rel="nofollow" href="CCAligned/v1/zz_sample.html">zz</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/af.zip">af</a></th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-English (sample file)" href="CCAligned/v1/af-en_sample.html">view</a></td><td></td><th>af</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>af</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>af</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>af</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/af.zip">af</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ak.zip">ak</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Akan-English (sample file)" href="CCAligned/v1/ak-en_sample.html">view</a></td><td></td><th>ak</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ak</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ak</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ak</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ak.zip">ak</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/am.zip">am</a></th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Amharic-English (sample file)" href="CCAligned/v1/am-en_sample.html">view</a></td><td></td><th>am</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>am</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>am</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>am</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/am.zip">am</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ar.zip">ar</a></th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="CCAligned/v1/ar-en_sample.html">view</a></td><td></td><th>ar</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ar</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ar</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ar</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ar.zip">ar</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/as.zip">as</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Assamese-English (sample file)" href="CCAligned/v1/as-en_sample.html">view</a></td><td></td><th>as</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>as</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>as</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>as</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/as.zip">as</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ay.zip">ay</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Aymara-English (sample file)" href="CCAligned/v1/ay-en_sample.html">view</a></td><td></td><th>ay</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ay</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ay</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ay</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ay.zip">ay</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/az.zip">az</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-English (sample file)" href="CCAligned/v1/az-en_sample.html">view</a></td><td></td><th>az</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>az</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>az</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>az</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/az.zip">az</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/be.zip">be</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-English (sample file)" href="CCAligned/v1/be-en_sample.html">view</a></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/be.zip">be</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/bg.zip">bg</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="CCAligned/v1/bg-en_sample.html">view</a></td><td></td><th>bg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/bg.zip">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/bm.zip">bm</a></th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bambara-English (sample file)" href="CCAligned/v1/bm-en_sample.html">view</a></td><td></td><th>bm</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bm</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bm</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bm</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/bm.zip">bm</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/bn.zip">bn</a></th>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-English (sample file)" href="CCAligned/v1/bn-en_sample.html">view</a></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/bn.zip">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/br.zip">br</a></th>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Breton-English (sample file)" href="CCAligned/v1/br-en_sample.html">view</a></td><td></td><th>br</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>br</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>br</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>br</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/br.zip">br</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/bs.zip">bs</a></th>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="CCAligned/v1/bs-en_sample.html">view</a></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/bs.zip">bs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ca.zip">ca</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="CCAligned/v1/ca-en_sample.html">view</a></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/cb.zip">cb</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="cb-English (sample file)" href="CCAligned/v1/cb-en_sample.html">view</a></td><td></td><th>cb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/cb.zip">cb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/cs.zip">cs</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-English (sample file)" href="CCAligned/v1/cs-en_sample.html">view</a></td><td></td><th>cs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/cs.zip">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/cx.zip">cx</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="cx-English (sample file)" href="CCAligned/v1/cx-en_sample.html">view</a></td><td></td><th>cx</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cx</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cx</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cx</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/cx.zip">cx</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/cy.zip">cy</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-English (sample file)" href="CCAligned/v1/cy-en_sample.html">view</a></td><td></td><th>cy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/cy.zip">cy</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/da.zip">da</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td><a rel="nofollow" title="Danish-English (sample file)" href="CCAligned/v1/da-en_sample.html">view</a></td><td></td><th>da</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>da</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>da</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>da</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/da.zip">da</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/de.zip">de</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td><a rel="nofollow" title="German-English (sample file)" href="CCAligned/v1/de-en_sample.html">view</a></td><td></td><th>de</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>de</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>de</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>de</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/el.zip">el</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td><a rel="nofollow" title="Greek-English (sample file)" href="CCAligned/v1/el-en_sample.html">view</a></td><td></td><th>el</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>el</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>el</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>el</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/el.zip">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Afrikaans' (31 aligned documents, 1.5M links, 54.6M tokens)" href="download.php?f=CCAligned/v1/xml/af-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Akan' (0.5k links, 9.5k tokens)" href="download.php?f=CCAligned/v1/xml/ak-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Amharic' (7 aligned documents, 0.3M links, 11.5M tokens)" href="download.php?f=CCAligned/v1/xml/am-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (507 aligned documents, 25.3M links, 802.4M tokens)" href="download.php?f=CCAligned/v1/xml/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Assamese' (27.0k links, 0.6M tokens)" href="download.php?f=CCAligned/v1/xml/as-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Aymara' (0.5k links, 20.0k tokens)" href="download.php?f=CCAligned/v1/xml/ay-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Azerbaijani' (25 aligned documents, 1.2M links, 31.4M tokens)" href="download.php?f=CCAligned/v1/xml/az-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Belarusian' (23 aligned documents, 1.1M links, 44.5M tokens)" href="download.php?f=CCAligned/v1/xml/be-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (209 aligned documents, 10.4M links, 298.2M tokens)" href="download.php?f=CCAligned/v1/xml/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bambara' (0.1k links, 2.4k tokens)" href="download.php?f=CCAligned/v1/xml/bm-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bengali' (71 aligned documents, 3.5M links, 124.0M tokens)" href="download.php?f=CCAligned/v1/xml/bn-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Breton' (3 aligned documents, 0.1M links, 2.1M tokens)" href="download.php?f=CCAligned/v1/xml/br-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (4 aligned documents, 0.2M links, 13.6M tokens)" href="download.php?f=CCAligned/v1/xml/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (117 aligned documents, 5.8M links, 206.6M tokens)" href="download.php?f=CCAligned/v1/xml/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-cb' (2 aligned documents, 52.3k links, 0.8M tokens)" href="download.php?f=CCAligned/v1/xml/cb-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (255 aligned documents, 12.7M links, 340.0M tokens)" href="download.php?f=CCAligned/v1/xml/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-cx' (5 aligned documents, 0.2M links, 6.7M tokens)" href="download.php?f=CCAligned/v1/xml/cx-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Welsh' (17 aligned documents, 0.8M links, 26.2M tokens)" href="download.php?f=CCAligned/v1/xml/cy-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Danish' (215 aligned documents, 10.7M links, 307.1M tokens)" href="download.php?f=CCAligned/v1/xml/da-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (1,852 aligned documents, 92.6M links, 3.0G tokens)" href="download.php?f=CCAligned/v1/xml/de-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (178 aligned documents, 8.9M links, 223.2M tokens)" href="download.php?f=CCAligned/v1/xml/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="CCAligned/v1/en-es_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Estonian (sample file)" href="CCAligned/v1/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Persian (sample file)" href="CCAligned/v1/en-fa_sample.html">view</a></td><td><a rel="nofollow" title="English-Fulah (sample file)" href="CCAligned/v1/en-ff_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="CCAligned/v1/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="CCAligned/v1/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Gujarati (sample file)" href="CCAligned/v1/en-gu_sample.html">view</a></td><td><a rel="nofollow" title="English-Hausa (sample file)" href="CCAligned/v1/en-ha_sample.html">view</a></td><td><a rel="nofollow" title="English-Hebrew (sample file)" href="CCAligned/v1/en-he_sample.html">view</a></td><td><a rel="nofollow" title="English-Hindi (sample file)" href="CCAligned/v1/en-hi_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="CCAligned/v1/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Haitian (sample file)" href="CCAligned/v1/en-ht_sample.html">view</a></td><td><a rel="nofollow" title="English-Hungarian (sample file)" href="CCAligned/v1/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Armenian (sample file)" href="CCAligned/v1/en-hy_sample.html">view</a></td><td><a rel="nofollow" title="English-Indonesian (sample file)" href="CCAligned/v1/en-id_sample.html">view</a></td><td><a rel="nofollow" title="English-Igbo (sample file)" href="CCAligned/v1/en-ig_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="CCAligned/v1/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="CCAligned/v1/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="CCAligned/v1/en-ja_sample.html">view</a></td><td><a rel="nofollow" title="English-Javanese (sample file)" href="CCAligned/v1/en-jv_sample.html">view</a></td><td><a rel="nofollow" title="English-Georgian (sample file)" href="CCAligned/v1/en-ka_sample.html">view</a></td><td><a rel="nofollow" title="English-Kongo (sample file)" href="CCAligned/v1/en-kg_sample.html">view</a></td><td><a rel="nofollow" title="English-Kazakh (sample file)" href="CCAligned/v1/en-kk_sample.html">view</a></td><td><a rel="nofollow" title="English-Central Khmer (sample file)" href="CCAligned/v1/en-km_sample.html">view</a></td><td><a rel="nofollow" title="English-Kannada (sample file)" href="CCAligned/v1/en-kn_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Korean (sample file)" href="CCAligned/v1/en-ko_sample.html">view</a></td><td><a rel="nofollow" title="English-Kurdish (sample file)" href="CCAligned/v1/en-ku_sample.html">view</a></td><td><a rel="nofollow" title="English-Kirghiz (sample file)" href="CCAligned/v1/en-ky_sample.html">view</a></td><td><a rel="nofollow" title="English-Ganda (sample file)" href="CCAligned/v1/en-lg_sample.html">view</a></td><td><a rel="nofollow" title="English-Lingala (sample file)" href="CCAligned/v1/en-ln_sample.html">view</a></td><td><a rel="nofollow" title="English-Lao (sample file)" href="CCAligned/v1/en-lo_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="CCAligned/v1/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="CCAligned/v1/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Malagasy (sample file)" href="CCAligned/v1/en-mg_sample.html">view</a></td><td><a rel="nofollow" title="English-Maori (sample file)" href="CCAligned/v1/en-mi_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="CCAligned/v1/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Malayalam (sample file)" href="CCAligned/v1/en-ml_sample.html">view</a></td><td><a rel="nofollow" title="English-Mongolian (sample file)" href="CCAligned/v1/en-mn_sample.html">view</a></td><td><a rel="nofollow" title="English-Marathi (sample file)" href="CCAligned/v1/en-mr_sample.html">view</a></td><td><a rel="nofollow" title="English-Malay (sample file)" href="CCAligned/v1/en-ms_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="CCAligned/v1/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-Burmese (sample file)" href="CCAligned/v1/en-my_sample.html">view</a></td><td><a rel="nofollow" title="English-Nepali (sample file)" href="CCAligned/v1/en-ne_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="CCAligned/v1/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Norwegian (sample file)" href="CCAligned/v1/en-no_sample.html">view</a></td><td><a rel="nofollow" title="English-ns (sample file)" href="CCAligned/v1/en-ns_sample.html">view</a></td><td><a rel="nofollow" title="English-Chichewa (sample file)" href="CCAligned/v1/en-ny_sample.html">view</a></td><td><a rel="nofollow" title="English-Oromo (sample file)" href="CCAligned/v1/en-om_sample.html">view</a></td><td><a rel="nofollow" title="English-Oriya (sample file)" href="CCAligned/v1/en-or_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Panjabi (sample file)" href="CCAligned/v1/en-pa_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="CCAligned/v1/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-Pushto (sample file)" href="CCAligned/v1/en-ps_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="CCAligned/v1/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-qa (sample file)" href="CCAligned/v1/en-qa_sample.html">view</a></td><td><a rel="nofollow" title="English-qd (sample file)" href="CCAligned/v1/en-qd_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="CCAligned/v1/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="CCAligned/v1/en-ru_sample.html">view</a></td><td><a rel="nofollow" title="English-Sinhala (sample file)" href="CCAligned/v1/en-si_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovak (sample file)" href="CCAligned/v1/en-sk_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="CCAligned/v1/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Shona (sample file)" href="CCAligned/v1/en-sn_sample.html">view</a></td><td><a rel="nofollow" title="English-Somali (sample file)" href="CCAligned/v1/en-so_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="CCAligned/v1/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="CCAligned/v1/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swati (sample file)" href="CCAligned/v1/en-ss_sample.html">view</a></td><td><a rel="nofollow" title="English-Sotho, Southern (sample file)" href="CCAligned/v1/en-st_sample.html">view</a></td><td><a rel="nofollow" title="English-Sundanese (sample file)" href="CCAligned/v1/en-su_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="CCAligned/v1/en-sv_sample.html">view</a></td><td><a rel="nofollow" title="English-Swahili (sample file)" href="CCAligned/v1/en-sw_sample.html">view</a></td><td><a rel="nofollow" title="English-sz (sample file)" href="CCAligned/v1/en-sz_sample.html">view</a></td><td><a rel="nofollow" title="English-Tamil (sample file)" href="CCAligned/v1/en-ta_sample.html">view</a></td><td><a rel="nofollow" title="English-Telugu (sample file)" href="CCAligned/v1/en-te_sample.html">view</a></td><td><a rel="nofollow" title="English-Tajik (sample file)" href="CCAligned/v1/en-tg_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Thai (sample file)" href="CCAligned/v1/en-th_sample.html">view</a></td><td><a rel="nofollow" title="English-Tigrinya (sample file)" href="CCAligned/v1/en-ti_sample.html">view</a></td><td><a rel="nofollow" title="English-Tagalog (sample file)" href="CCAligned/v1/en-tl_sample.html">view</a></td><td><a rel="nofollow" title="English-Tswana (sample file)" href="CCAligned/v1/en-tn_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="CCAligned/v1/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Tsonga (sample file)" href="CCAligned/v1/en-ts_sample.html">view</a></td><td><a rel="nofollow" title="English-tz (sample file)" href="CCAligned/v1/en-tz_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="CCAligned/v1/en-uk_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="CCAligned/v1/en-ur_sample.html">view</a></td><td><a rel="nofollow" title="English-Venda (sample file)" href="CCAligned/v1/en-ve_sample.html">view</a></td><td><a rel="nofollow" title="English-Vietnamese (sample file)" href="CCAligned/v1/en-vi_sample.html">view</a></td><td><a rel="nofollow" title="English-Wolof (sample file)" href="CCAligned/v1/en-wo_sample.html">view</a></td><td><a rel="nofollow" title="English-Xhosa (sample file)" href="CCAligned/v1/en-xh_sample.html">view</a></td><td><a rel="nofollow" title="English-Yoruba (sample file)" href="CCAligned/v1/en-yo_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="CCAligned/v1/en-zh_CN_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="CCAligned/v1/en-zh_TW_sample.html">view</a></td><td><a rel="nofollow" title="English-Zulu (sample file)" href="CCAligned/v1/en-zu_sample.html">view</a></td><td><a rel="nofollow" title="English-zz (sample file)" href="CCAligned/v1/en-zz_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/es.zip">es</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (1,967 aligned documents, 98.4M links, 3.0G tokens)" href="download.php?f=CCAligned/v1/xml/en-es.xml.gz">ces</a></td>
<th></th>
<th>es</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>es</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>es</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>es</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/es.zip">es</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ak</th>
<th>am</th>
<th>ar</th>
<th>as</th>
<th>ay</th>
<th>az</th>
<th>be</th>
<th>bg</th>
<th>bm</th>
<th>bn</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>cb</th>
<th>cs</th>
<th>cx</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th></th>
<th>et</th>
<th>fa</th>
<th>ff</th>
<th>fi</th>
<th>fr</th>
<th>gu</th>
<th>ha</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>ht</th>
<th>hu</th>
<th>hy</th>
<th>id</th>
<th>ig</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jv</th>
<th>ka</th>
<th>kg</th>
<th>kk</th>
<th>km</th>
<th>kn</th>
<th></th>
<th>ko</th>
<th>ku</th>
<th>ky</th>
<th>lg</th>
<th>ln</th>
<th>lo</th>
<th>lt</th>
<th>lv</th>
<th>mg</th>
<th>mi</th>
<th>mk</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>ms</th>
<th>mt</th>
<th>my</th>
<th>ne</th>
<th>nl</th>
<th>no</th>
<th>ns</th>
<th>ny</th>
<th>om</th>
<th>or</th>
<th></th>
<th>pa</th>
<th>pl</th>
<th>ps</th>
<th>pt</th>
<th>qa</th>
<th>qd</th>
<th>ro</th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sn</th>
<th>so</th>
<th>sq</th>
<th>sr</th>
<th>ss</th>
<th>st</th>
<th>su</th>
<th>sv</th>
<th>sw</th>
<th>sz</th>
<th>ta</th>
<th>te</th>
<th>tg</th>
<th></th>
<th>th</th>
<th>ti</th>
<th>tl</th>
<th>tn</th>
<th>tr</th>
<th>ts</th>
<th>tz</th>
<th>uk</th>
<th>ur</th>
<th>ve</th>
<th>vi</th>
<th>wo</th>
<th>xh</th>
<th>yo</th>
<th>zh_CN</th>
<th>zh_TW</th>
<th>zu</th>
<th>zz</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/et.zip">et</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (83 aligned documents, 4.1M links, 116.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-et.xml.gz">ces</a></td>
<td></td>
<th>et</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>et</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>et</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>et</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/et.zip">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/fa.zip">fa</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-English' (106 aligned documents, 5.3M links, 163.4M tokens)" href="download.php?f=CCAligned/v1/xml/en-fa.xml.gz">ces</a></td>
<td></td>
<th>fa</th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fa</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fa</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fa</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/fa.zip">fa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ff.zip">ff</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Fulah-English' (2 aligned documents, 73.0k links, 1.5M tokens)" href="download.php?f=CCAligned/v1/xml/en-ff.xml.gz">ces</a></td>
<td></td>
<th>ff</th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ff</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ff</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ff</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ff.zip">ff</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/fi.zip">fi</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (194 aligned documents, 9.7M links, 247.5M tokens)" href="download.php?f=CCAligned/v1/xml/en-fi.xml.gz">ces</a></td>
<td></td>
<th>fi</th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/fi.zip">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/fr.zip">fr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (2,067 aligned documents, 103.3M links, 3.6G tokens)" href="download.php?f=CCAligned/v1/xml/en-fr.xml.gz">ces</a></td>
<td></td>
<th>fr</th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/gu.zip">gu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-English' (4 aligned documents, 0.2M links, 6.3M tokens)" href="download.php?f=CCAligned/v1/xml/en-gu.xml.gz">ces</a></td>
<td></td>
<th>gu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/gu.zip">gu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ha.zip">ha</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hausa-English' (7 aligned documents, 0.3M links, 8.2M tokens)" href="download.php?f=CCAligned/v1/xml/en-ha.xml.gz">ces</a></td>
<td></td>
<th>ha</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ha</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ha</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ha</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ha.zip">ha</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/he.zip">he</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-English' (107 aligned documents, 5.3M links, 138.2M tokens)" href="download.php?f=CCAligned/v1/xml/en-he.xml.gz">ces</a></td>
<td></td>
<th>he</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>he</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>he</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>he</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/he.zip">he</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/hi.zip">hi</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-English' (164 aligned documents, 8.2M links, 348.0M tokens)" href="download.php?f=CCAligned/v1/xml/en-hi.xml.gz">ces</a></td>
<td></td>
<th>hi</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/hi.zip">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/hr.zip">hr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (188 aligned documents, 9.4M links, 238.6M tokens)" href="download.php?f=CCAligned/v1/xml/en-hr.xml.gz">ces</a></td>
<td></td>
<th>hr</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ht.zip">ht</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Haitian-English' (12 aligned documents, 0.6M links, 18.8M tokens)" href="download.php?f=CCAligned/v1/xml/en-ht.xml.gz">ces</a></td>
<td></td>
<th>ht</th>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ht</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ht</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ht</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ht.zip">ht</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/hu.zip">hu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-English' (232 aligned documents, 11.6M links, 293.6M tokens)" href="download.php?f=CCAligned/v1/xml/en-hu.xml.gz">ces</a></td>
<td></td>
<th>hu</th>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/hu.zip">hu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/hy.zip">hy</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Armenian-English' (21 aligned documents, 1.0M links, 34.8M tokens)" href="download.php?f=CCAligned/v1/xml/en-hy.xml.gz">ces</a></td>
<td></td>
<th>hy</th>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/hy.zip">hy</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/id.zip">id</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-English' (541 aligned documents, 27.0M links, 477.3M tokens)" href="download.php?f=CCAligned/v1/xml/en-id.xml.gz">ces</a></td>
<td></td>
<th>id</th>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>id</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>id</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>id</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/id.zip">id</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ig.zip">ig</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Igbo-English' (3 aligned documents, 0.1M links, 5.4M tokens)" href="download.php?f=CCAligned/v1/xml/en-ig.xml.gz">ces</a></td>
<td></td>
<th>ig</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ig</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ig</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ig</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ig.zip">ig</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/is.zip">is</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (24 aligned documents, 1.2M links, 42.4M tokens)" href="download.php?f=CCAligned/v1/xml/en-is.xml.gz">ces</a></td>
<td></td>
<th>is</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>is</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>is</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>is</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/is.zip">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/it.zip">it</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (1,161 aligned documents, 58.0M links, 1.9G tokens)" href="download.php?f=CCAligned/v1/xml/en-it.xml.gz">ces</a></td>
<td></td>
<th>it</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>it</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>it</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>it</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/it.zip">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ja.zip">ja</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (525 aligned documents, 26.2M links, 529.6M tokens)" href="download.php?f=CCAligned/v1/xml/en-ja.xml.gz">ces</a></td>
<td></td>
<th>ja</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><th>ja</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ja</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ja</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ja.zip">ja</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/jv.zip">jv</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Javanese-English' (31 aligned documents, 1.5M links, 13.4M tokens)" href="download.php?f=CCAligned/v1/xml/en-jv.xml.gz">ces</a></td>
<td></td>
<th>jv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><th>jv</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>jv</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>jv</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/jv.zip">jv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ka.zip">ka</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-English' (26 aligned documents, 1.3M links, 39.5M tokens)" href="download.php?f=CCAligned/v1/xml/en-ka.xml.gz">ces</a></td>
<td></td>
<th>ka</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><th>ka</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ka</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ka</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ka.zip">ka</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/kg.zip">kg</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kongo-English' (74 links, 1.0k tokens)" href="download.php?f=CCAligned/v1/xml/en-kg.xml.gz">ces</a></td>
<td></td>
<th>kg</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><th>kg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/kg.zip">kg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/kk.zip">kk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-English' (14 aligned documents, 0.7M links, 20.7M tokens)" href="download.php?f=CCAligned/v1/xml/en-kk.xml.gz">ces</a></td>
<td></td>
<th>kk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/kk.zip">kk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/km.zip">km</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-English' (9 aligned documents, 0.4M links, 14.1M tokens)" href="download.php?f=CCAligned/v1/xml/en-km.xml.gz">ces</a></td>
<td></td>
<th>km</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><th>km</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>km</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>km</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/km.zip">km</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/kn.zip">kn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-English' (4 aligned documents, 0.2M links, 5.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-kn.xml.gz">ces</a></td>
<td></td>
<th>kn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<th>kn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/kn.zip">kn</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ak</th>
<th>am</th>
<th>ar</th>
<th>as</th>
<th>ay</th>
<th>az</th>
<th>be</th>
<th>bg</th>
<th>bm</th>
<th>bn</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>cb</th>
<th>cs</th>
<th>cx</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th></th>
<th>et</th>
<th>fa</th>
<th>ff</th>
<th>fi</th>
<th>fr</th>
<th>gu</th>
<th>ha</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>ht</th>
<th>hu</th>
<th>hy</th>
<th>id</th>
<th>ig</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jv</th>
<th>ka</th>
<th>kg</th>
<th>kk</th>
<th>km</th>
<th>kn</th>
<th></th>
<th>ko</th>
<th>ku</th>
<th>ky</th>
<th>lg</th>
<th>ln</th>
<th>lo</th>
<th>lt</th>
<th>lv</th>
<th>mg</th>
<th>mi</th>
<th>mk</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>ms</th>
<th>mt</th>
<th>my</th>
<th>ne</th>
<th>nl</th>
<th>no</th>
<th>ns</th>
<th>ny</th>
<th>om</th>
<th>or</th>
<th></th>
<th>pa</th>
<th>pl</th>
<th>ps</th>
<th>pt</th>
<th>qa</th>
<th>qd</th>
<th>ro</th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sn</th>
<th>so</th>
<th>sq</th>
<th>sr</th>
<th>ss</th>
<th>st</th>
<th>su</th>
<th>sv</th>
<th>sw</th>
<th>sz</th>
<th>ta</th>
<th>te</th>
<th>tg</th>
<th></th>
<th>th</th>
<th>ti</th>
<th>tl</th>
<th>tn</th>
<th>tr</th>
<th>ts</th>
<th>tz</th>
<th>uk</th>
<th>ur</th>
<th>ve</th>
<th>vi</th>
<th>wo</th>
<th>xh</th>
<th>yo</th>
<th>zh_CN</th>
<th>zh_TW</th>
<th>zu</th>
<th>zz</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ko.zip">ko</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-English' (181 aligned documents, 9.0M links, 229.2M tokens)" href="download.php?f=CCAligned/v1/xml/en-ko.xml.gz">ces</a></td>
<td></td>
<th>ko</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ko</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ko</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ko</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ko.zip">ko</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ku.zip">ku</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kurdish-English' (3 aligned documents, 0.1M links, 5.7M tokens)" href="download.php?f=CCAligned/v1/xml/en-ku.xml.gz">ces</a></td>
<td></td>
<th>ku</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ku</th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ku</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ku</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ku.zip">ku</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ky.zip">ky</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kirghiz-English' (5 aligned documents, 0.2M links, 6.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-ky.xml.gz">ces</a></td>
<td></td>
<th>ky</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ky</th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ky</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ky</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ky.zip">ky</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/lg.zip">lg</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ganda-English' (14.7k links, 0.2M tokens)" href="download.php?f=CCAligned/v1/xml/en-lg.xml.gz">ces</a></td>
<td></td>
<th>lg</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lg</th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/lg.zip">lg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ln.zip">ln</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lingala-English' (21.6k links, 0.2M tokens)" href="download.php?f=CCAligned/v1/xml/en-ln.xml.gz">ces</a></td>
<td></td>
<th>ln</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ln</th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ln</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ln</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ln.zip">ln</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/lo.zip">lo</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lao-English' (4 aligned documents, 0.2M links, 4.1M tokens)" href="download.php?f=CCAligned/v1/xml/en-lo.xml.gz">ces</a></td>
<td></td>
<th>lo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/lo.zip">lo</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/lt.zip">lt</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (105 aligned documents, 5.2M links, 146.8M tokens)" href="download.php?f=CCAligned/v1/xml/en-lt.xml.gz">ces</a></td>
<td></td>
<th>lt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/lt.zip">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/lv.zip">lv</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-English' (98 aligned documents, 4.9M links, 144.4M tokens)" href="download.php?f=CCAligned/v1/xml/en-lv.xml.gz">ces</a></td>
<td></td>
<th>lv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lv</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lv</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/lv.zip">lv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/mg.zip">mg</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malagasy-English' (8 aligned documents, 0.4M links, 13.7M tokens)" href="download.php?f=CCAligned/v1/xml/en-mg.xml.gz">ces</a></td>
<td></td>
<th>mg</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mg</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/mg.zip">mg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/mi.zip">mi</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maori-English' (3 aligned documents, 0.1M links, 4.7M tokens)" href="download.php?f=CCAligned/v1/xml/en-mi.xml.gz">ces</a></td>
<td></td>
<th>mi</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mi</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/mi.zip">mi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/mk.zip">mk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (36 aligned documents, 1.8M links, 57.0M tokens)" href="download.php?f=CCAligned/v1/xml/en-mk.xml.gz">ces</a></td>
<td></td>
<th>mk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/mk.zip">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ml.zip">ml</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-English' (12 aligned documents, 0.6M links, 26.3M tokens)" href="download.php?f=CCAligned/v1/xml/en-ml.xml.gz">ces</a></td>
<td></td>
<th>ml</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ml</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ml</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ml.zip">ml</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/mn.zip">mn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Mongolian-English' (12 aligned documents, 0.6M links, 12.8M tokens)" href="download.php?f=CCAligned/v1/xml/en-mn.xml.gz">ces</a></td>
<td></td>
<th>mn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mn</th>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/mn.zip">mn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/mr.zip">mr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-English' (15 aligned documents, 0.7M links, 26.8M tokens)" href="download.php?f=CCAligned/v1/xml/en-mr.xml.gz">ces</a></td>
<td></td>
<th>mr</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/mr.zip">mr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ms.zip">ms</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-English' (108 aligned documents, 5.4M links, 163.0M tokens)" href="download.php?f=CCAligned/v1/xml/en-ms.xml.gz">ces</a></td>
<td></td>
<th>ms</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ms</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ms</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ms.zip">ms</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/mt.zip">mt</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-English' (26 links, 0.2k tokens)" href="download.php?f=CCAligned/v1/xml/en-mt.xml.gz">ces</a></td>
<td></td>
<th>mt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/mt.zip">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/my.zip">my</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-English' (6 aligned documents, 0.3M links, 10.4M tokens)" href="download.php?f=CCAligned/v1/xml/en-my.xml.gz">ces</a></td>
<td></td>
<th>my</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>my</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>my</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>my</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/my.zip">my</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ne.zip">ne</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Nepali-English' (10 aligned documents, 0.5M links, 17.8M tokens)" href="download.php?f=CCAligned/v1/xml/en-ne.xml.gz">ces</a></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><th>ne</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ne</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ne.zip">ne</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/nl.zip">nl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (727 aligned documents, 36.3M links, 1.1G tokens)" href="download.php?f=CCAligned/v1/xml/en-nl.xml.gz">ces</a></td>
<td></td>
<th>nl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><th>nl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/nl.zip">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/no.zip">no</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-English' (184 aligned documents, 9.2M links, 254.5M tokens)" href="download.php?f=CCAligned/v1/xml/en-no.xml.gz">ces</a></td>
<td></td>
<th>no</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>no</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><th>no</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>no</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/no.zip">no</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ns.zip">ns</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'ns-English' (14.1k links, 0.2M tokens)" href="download.php?f=CCAligned/v1/xml/en-ns.xml.gz">ces</a></td>
<td></td>
<th>ns</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ns</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><th>ns</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ns</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ns.zip">ns</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ny.zip">ny</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chichewa-English' (3 aligned documents, 0.1M links, 4.4M tokens)" href="download.php?f=CCAligned/v1/xml/en-ny.xml.gz">ces</a></td>
<td></td>
<th>ny</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ny</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><th>ny</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ny</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ny.zip">ny</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/om.zip">om</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Oromo-English' (22.2k links, 0.2M tokens)" href="download.php?f=CCAligned/v1/xml/en-om.xml.gz">ces</a></td>
<td></td>
<th>om</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>om</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><th>om</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>om</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/om.zip">om</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/or.zip">or</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Oriya-English' (5.5k links, 0.2M tokens)" href="download.php?f=CCAligned/v1/xml/en-or.xml.gz">ces</a></td>
<td></td>
<th>or</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>or</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<th>or</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>or</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/or.zip">or</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ak</th>
<th>am</th>
<th>ar</th>
<th>as</th>
<th>ay</th>
<th>az</th>
<th>be</th>
<th>bg</th>
<th>bm</th>
<th>bn</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>cb</th>
<th>cs</th>
<th>cx</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th></th>
<th>et</th>
<th>fa</th>
<th>ff</th>
<th>fi</th>
<th>fr</th>
<th>gu</th>
<th>ha</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>ht</th>
<th>hu</th>
<th>hy</th>
<th>id</th>
<th>ig</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jv</th>
<th>ka</th>
<th>kg</th>
<th>kk</th>
<th>km</th>
<th>kn</th>
<th></th>
<th>ko</th>
<th>ku</th>
<th>ky</th>
<th>lg</th>
<th>ln</th>
<th>lo</th>
<th>lt</th>
<th>lv</th>
<th>mg</th>
<th>mi</th>
<th>mk</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>ms</th>
<th>mt</th>
<th>my</th>
<th>ne</th>
<th>nl</th>
<th>no</th>
<th>ns</th>
<th>ny</th>
<th>om</th>
<th>or</th>
<th></th>
<th>pa</th>
<th>pl</th>
<th>ps</th>
<th>pt</th>
<th>qa</th>
<th>qd</th>
<th>ro</th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sn</th>
<th>so</th>
<th>sq</th>
<th>sr</th>
<th>ss</th>
<th>st</th>
<th>su</th>
<th>sv</th>
<th>sw</th>
<th>sz</th>
<th>ta</th>
<th>te</th>
<th>tg</th>
<th></th>
<th>th</th>
<th>ti</th>
<th>tl</th>
<th>tn</th>
<th>tr</th>
<th>ts</th>
<th>tz</th>
<th>uk</th>
<th>ur</th>
<th>ve</th>
<th>vi</th>
<th>wo</th>
<th>xh</th>
<th>yo</th>
<th>zh_CN</th>
<th>zh_TW</th>
<th>zu</th>
<th>zz</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/pa.zip">pa</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Panjabi-English' (4 aligned documents, 0.2M links, 5.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-pa.xml.gz">ces</a></td>
<td></td>
<th>pa</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pa</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pa</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>pa</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/pa.zip">pa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/pl.zip">pl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (520 aligned documents, 26.0M links, 716.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-pl.xml.gz">ces</a></td>
<td></td>
<th>pl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pl</th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>pl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/pl.zip">pl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ps.zip">ps</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Pushto-English' (6 aligned documents, 0.3M links, 8.2M tokens)" href="download.php?f=CCAligned/v1/xml/en-ps.xml.gz">ces</a></td>
<td></td>
<th>ps</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ps</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ps</th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ps</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ps.zip">ps</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/pt.zip">pt</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (931 aligned documents, 46.5M links, 1.3G tokens)" href="download.php?f=CCAligned/v1/xml/en-pt.xml.gz">ces</a></td>
<td></td>
<th>pt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pt</th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>pt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/pt.zip">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/qa.zip">qa</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'qa-English' (0.1k links, 3.4k tokens)" href="download.php?f=CCAligned/v1/xml/en-qa.xml.gz">ces</a></td>
<td></td>
<th>qa</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>qa</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>qa</th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>qa</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/qa.zip">qa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/qd.zip">qd</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'qd-English' (0.2k links, 4.6k tokens)" href="download.php?f=CCAligned/v1/xml/en-qd.xml.gz">ces</a></td>
<td></td>
<th>qd</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>qd</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>qd</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>qd</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/qd.zip">qd</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ro.zip">ro</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (211 aligned documents, 10.5M links, 306.2M tokens)" href="download.php?f=CCAligned/v1/xml/en-ro.xml.gz">ces</a></td>
<td></td>
<th>ro</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ro</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ro</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ro</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ro.zip">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ru.zip">ru</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (1,386 aligned documents, 69.3M links, 2.2G tokens)" href="download.php?f=CCAligned/v1/xml/en-ru.xml.gz">ces</a></td>
<td></td>
<th>ru</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ru</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ru</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ru</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ru.zip">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/si.zip">si</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-English' (13 aligned documents, 0.6M links, 23.5M tokens)" href="download.php?f=CCAligned/v1/xml/en-si.xml.gz">ces</a></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>si</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/si.zip">si</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/sk.zip">sk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-English' (139 aligned documents, 6.9M links, 195.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-sk.xml.gz">ces</a></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
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
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/sk.zip">sk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/sl.zip">sl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (88 aligned documents, 4.4M links, 131.3M tokens)" href="download.php?f=CCAligned/v1/xml/en-sl.xml.gz">ces</a></td>
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
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
<td></td>
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
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/sl.zip">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/sn.zip">sn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Shona-English' (2 aligned documents, 86.9k links, 3.3M tokens)" href="download.php?f=CCAligned/v1/xml/en-sn.xml.gz">ces</a></td>
<td></td>
<th>sn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sn</th>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/sn.zip">sn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/so.zip">so</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Somali-English' (8 aligned documents, 0.4M links, 7.7M tokens)" href="download.php?f=CCAligned/v1/xml/en-so.xml.gz">ces</a></td>
<td></td>
<th>so</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>so</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>so</th>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>so</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/so.zip">so</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/sq.zip">sq</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (47 aligned documents, 2.3M links, 66.4M tokens)" href="download.php?f=CCAligned/v1/xml/en-sq.xml.gz">ces</a></td>
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
<td></td>
<td></td>
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
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sq</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/sq.zip">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/sr.zip">sr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (40 aligned documents, 2.0M links, 84.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-sr.xml.gz">ces</a></td>
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
<td></td>
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
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/sr.zip">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ss.zip">ss</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swati-English' (23.0k links, 0.3M tokens)" href="download.php?f=CCAligned/v1/xml/en-ss.xml.gz">ces</a></td>
<td></td>
<th>ss</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ss</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ss</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ss</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ss.zip">ss</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/st.zip">st</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sotho, Southern-English' (0.9k links, 37.7k tokens)" href="download.php?f=CCAligned/v1/xml/en-st.xml.gz">ces</a></td>
<td></td>
<th>st</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>st</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>st</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>st</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/st.zip">st</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/su.zip">su</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sundanese-English' (10 aligned documents, 0.5M links, 12.1M tokens)" href="download.php?f=CCAligned/v1/xml/en-su.xml.gz">ces</a></td>
<td></td>
<th>su</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>su</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>su</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><th>su</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/su.zip">su</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/sv.zip">sv</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (251 aligned documents, 12.5M links, 377.1M tokens)" href="download.php?f=CCAligned/v1/xml/en-sv.xml.gz">ces</a></td>
<td></td>
<th>sv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><th>sv</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/sv.zip">sv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/sw.zip">sw</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-English' (41 aligned documents, 2.0M links, 44.0M tokens)" href="download.php?f=CCAligned/v1/xml/en-sw.xml.gz">ces</a></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><th>sw</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/sw.zip">sw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/sz.zip">sz</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'sz-English' (12 links, 0.3k tokens)" href="download.php?f=CCAligned/v1/xml/en-sz.xml.gz">ces</a></td>
<td></td>
<th>sz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><th>sz</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/sz.zip">sz</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ta.zip">ta</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-English' (18 aligned documents, 0.9M links, 39.1M tokens)" href="download.php?f=CCAligned/v1/xml/en-ta.xml.gz">ces</a></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><th>ta</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ta.zip">ta</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/te.zip">te</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-English' (12 aligned documents, 0.6M links, 22.3M tokens)" href="download.php?f=CCAligned/v1/xml/en-te.xml.gz">ces</a></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th>te</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/te.zip">te</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/tg.zip">tg</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tajik-English' (6 aligned documents, 0.3M links, 7.8M tokens)" href="download.php?f=CCAligned/v1/xml/en-tg.xml.gz">ces</a></td>
<td></td>
<th>tg</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tg</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tg</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<th>tg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/tg.zip">tg</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ak</th>
<th>am</th>
<th>ar</th>
<th>as</th>
<th>ay</th>
<th>az</th>
<th>be</th>
<th>bg</th>
<th>bm</th>
<th>bn</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>cb</th>
<th>cs</th>
<th>cx</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th></th>
<th>et</th>
<th>fa</th>
<th>ff</th>
<th>fi</th>
<th>fr</th>
<th>gu</th>
<th>ha</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>ht</th>
<th>hu</th>
<th>hy</th>
<th>id</th>
<th>ig</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jv</th>
<th>ka</th>
<th>kg</th>
<th>kk</th>
<th>km</th>
<th>kn</th>
<th></th>
<th>ko</th>
<th>ku</th>
<th>ky</th>
<th>lg</th>
<th>ln</th>
<th>lo</th>
<th>lt</th>
<th>lv</th>
<th>mg</th>
<th>mi</th>
<th>mk</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>ms</th>
<th>mt</th>
<th>my</th>
<th>ne</th>
<th>nl</th>
<th>no</th>
<th>ns</th>
<th>ny</th>
<th>om</th>
<th>or</th>
<th></th>
<th>pa</th>
<th>pl</th>
<th>ps</th>
<th>pt</th>
<th>qa</th>
<th>qd</th>
<th>ro</th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sn</th>
<th>so</th>
<th>sq</th>
<th>sr</th>
<th>ss</th>
<th>st</th>
<th>su</th>
<th>sv</th>
<th>sw</th>
<th>sz</th>
<th>ta</th>
<th>te</th>
<th>tg</th>
<th></th>
<th>th</th>
<th>ti</th>
<th>tl</th>
<th>tn</th>
<th>tr</th>
<th>ts</th>
<th>tz</th>
<th>uk</th>
<th>ur</th>
<th>ve</th>
<th>vi</th>
<th>wo</th>
<th>xh</th>
<th>yo</th>
<th>zh_CN</th>
<th>zh_TW</th>
<th>zu</th>
<th>zz</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/th.zip">th</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-English' (215 aligned documents, 10.7M links, 242.0M tokens)" href="download.php?f=CCAligned/v1/xml/en-th.xml.gz">ces</a></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>th</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/th.zip">th</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ti.zip">ti</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tigrinya-English' (7.7k links, 0.3M tokens)" href="download.php?f=CCAligned/v1/xml/en-ti.xml.gz">ces</a></td>
<td></td>
<th>ti</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ti</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ti</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ti</th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ti.zip">ti</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/tl.zip">tl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-English' (132 aligned documents, 6.6M links, 98.3M tokens)" href="download.php?f=CCAligned/v1/xml/en-tl.xml.gz">ces</a></td>
<td></td>
<th>tl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tl</th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/tl.zip">tl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/tn.zip">tn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tswana-English' (2 aligned documents, 71.3k links, 0.7M tokens)" href="download.php?f=CCAligned/v1/xml/en-tn.xml.gz">ces</a></td>
<td></td>
<th>tn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tn</th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/tn.zip">tn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/tr.zip">tr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (406 aligned documents, 20.3M links, 518.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-tr.xml.gz">ces</a></td>
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
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/tr.zip">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ts.zip">ts</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tsonga-English' (2.0k links, 63.8k tokens)" href="download.php?f=CCAligned/v1/xml/en-ts.xml.gz">ces</a></td>
<td></td>
<th>ts</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ts</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ts</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ts</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ts.zip">ts</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/tz.zip">tz</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tz-English' (33 links, 0.8k tokens)" href="download.php?f=CCAligned/v1/xml/en-tz.xml.gz">ces</a></td>
<td></td>
<th>tz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/tz.zip">tz</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/uk.zip">uk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (171 aligned documents, 8.5M links, 268.7M tokens)" href="download.php?f=CCAligned/v1/xml/en-uk.xml.gz">ces</a></td>
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
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/uk.zip">uk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ur.zip">ur</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-English' (28 aligned documents, 1.4M links, 47.8M tokens)" href="download.php?f=CCAligned/v1/xml/en-ur.xml.gz">ces</a></td>
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
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ur.zip">ur</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/ve.zip">ve</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Venda-English' (1.6k links, 51.3k tokens)" href="download.php?f=CCAligned/v1/xml/en-ve.xml.gz">ces</a></td>
<td></td>
<th>ve</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ve</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ve</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ve</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/ve.zip">ve</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/vi.zip">vi</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-English' (248 aligned documents, 12.4M links, 362.4M tokens)" href="download.php?f=CCAligned/v1/xml/en-vi.xml.gz">ces</a></td>
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
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/vi.zip">vi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/wo.zip">wo</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Wolof-English' (2 aligned documents, 88.4k links, 1.1M tokens)" href="download.php?f=CCAligned/v1/xml/en-wo.xml.gz">ces</a></td>
<td></td>
<th>wo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>wo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>wo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>wo</th>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/wo.zip">wo</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/xh.zip">xh</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-English' (3 aligned documents, 0.1M links, 3.6M tokens)" href="download.php?f=CCAligned/v1/xml/en-xh.xml.gz">ces</a></td>
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
<th></th>
<td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/xh.zip">xh</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/yo.zip">yo</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Yoruba-English' (4 aligned documents, 0.2M links, 6.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-yo.xml.gz">ces</a></td>
<td></td>
<th>yo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yo</th>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/yo.zip">yo</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/zh_CN.zip">zh_CN</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (304 aligned documents, 15.2M links, 293.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-zh_CN.xml.gz">ces</a></td>
<td></td>
<th>zh_CN</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_CN</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_CN</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_CN</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/zh_CN.zip">zh_CN</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/zh_TW.zip">zh_TW</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (176 aligned documents, 8.8M links, 137.9M tokens)" href="download.php?f=CCAligned/v1/xml/en-zh_TW.xml.gz">ces</a></td>
<td></td>
<th>zh_TW</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_TW</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_TW</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_TW</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/zh_TW.zip">zh_TW</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/zu.zip">zu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Zulu-English' (3 aligned documents, 0.1M links, 3.6M tokens)" href="download.php?f=CCAligned/v1/xml/en-zu.xml.gz">ces</a></td>
<td></td>
<th>zu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/zu.zip">zu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CCAligned/v1/xml/zz.zip">zz</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'zz-English' (34 links, 0.8k tokens)" href="download.php?f=CCAligned/v1/xml/en-zz.xml.gz">ces</a></td>
<td></td>
<th>zz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<th><a rel="nofollow" href="download.php?f=CCAligned/v1/raw/zz.zip">zz</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ak</th>
<th>am</th>
<th>ar</th>
<th>as</th>
<th>ay</th>
<th>az</th>
<th>be</th>
<th>bg</th>
<th>bm</th>
<th>bn</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>cb</th>
<th>cs</th>
<th>cx</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th></th>
<th>et</th>
<th>fa</th>
<th>ff</th>
<th>fi</th>
<th>fr</th>
<th>gu</th>
<th>ha</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>ht</th>
<th>hu</th>
<th>hy</th>
<th>id</th>
<th>ig</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jv</th>
<th>ka</th>
<th>kg</th>
<th>kk</th>
<th>km</th>
<th>kn</th>
<th></th>
<th>ko</th>
<th>ku</th>
<th>ky</th>
<th>lg</th>
<th>ln</th>
<th>lo</th>
<th>lt</th>
<th>lv</th>
<th>mg</th>
<th>mi</th>
<th>mk</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>ms</th>
<th>mt</th>
<th>my</th>
<th>ne</th>
<th>nl</th>
<th>no</th>
<th>ns</th>
<th>ny</th>
<th>om</th>
<th>or</th>
<th></th>
<th>pa</th>
<th>pl</th>
<th>ps</th>
<th>pt</th>
<th>qa</th>
<th>qd</th>
<th>ro</th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sn</th>
<th>so</th>
<th>sq</th>
<th>sr</th>
<th>ss</th>
<th>st</th>
<th>su</th>
<th>sv</th>
<th>sw</th>
<th>sz</th>
<th>ta</th>
<th>te</th>
<th>tg</th>
<th></th>
<th>th</th>
<th>ti</th>
<th>tl</th>
<th>tn</th>
<th>tr</th>
<th>ts</th>
<th>tz</th>
<th>uk</th>
<th>ur</th>
<th>ve</th>
<th>vi</th>
<th>wo</th>
<th>xh</th>
<th>yo</th>
<th>zh_CN</th>
<th>zh_TW</th>
<th>zu</th>
<th>zz</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized af plain text' href="download.php?f=CCAligned/v1/mono/af.tok.gz">af</a>
</th><th><a rel="nofollow" title='monolingual tokenized ak plain text' href="download.php?f=CCAligned/v1/mono/ak.tok.gz">ak</a>
</th><th><a rel="nofollow" title='monolingual tokenized am plain text' href="download.php?f=CCAligned/v1/mono/am.tok.gz">am</a>
</th><th><a rel="nofollow" title='monolingual tokenized ar plain text' href="download.php?f=CCAligned/v1/mono/ar.tok.gz">ar</a>
</th><th><a rel="nofollow" title='monolingual tokenized as plain text' href="download.php?f=CCAligned/v1/mono/as.tok.gz">as</a>
</th><th><a rel="nofollow" title='monolingual tokenized ay plain text' href="download.php?f=CCAligned/v1/mono/ay.tok.gz">ay</a>
</th><th><a rel="nofollow" title='monolingual tokenized az plain text' href="download.php?f=CCAligned/v1/mono/az.tok.gz">az</a>
</th><th><a rel="nofollow" title='monolingual tokenized be plain text' href="download.php?f=CCAligned/v1/mono/be.tok.gz">be</a>
</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=CCAligned/v1/mono/bg.tok.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bm plain text' href="download.php?f=CCAligned/v1/mono/bm.tok.gz">bm</a>
</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=CCAligned/v1/mono/bn.tok.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized br plain text' href="download.php?f=CCAligned/v1/mono/br.tok.gz">br</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs plain text' href="download.php?f=CCAligned/v1/mono/bs.tok.gz">bs</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=CCAligned/v1/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cb plain text' href="download.php?f=CCAligned/v1/mono/cb.tok.gz">cb</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=CCAligned/v1/mono/cs.tok.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized cx plain text' href="download.php?f=CCAligned/v1/mono/cx.tok.gz">cx</a>
</th><th><a rel="nofollow" title='monolingual tokenized cy plain text' href="download.php?f=CCAligned/v1/mono/cy.tok.gz">cy</a>
</th><th><a rel="nofollow" title='monolingual tokenized da plain text' href="download.php?f=CCAligned/v1/mono/da.tok.gz">da</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=CCAligned/v1/mono/de.tok.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=CCAligned/v1/mono/el.tok.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=CCAligned/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=CCAligned/v1/mono/es.tok.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=CCAligned/v1/mono/et.tok.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized fa plain text' href="download.php?f=CCAligned/v1/mono/fa.tok.gz">fa</a>
</th><th><a rel="nofollow" title='monolingual tokenized ff plain text' href="download.php?f=CCAligned/v1/mono/ff.tok.gz">ff</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=CCAligned/v1/mono/fi.tok.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=CCAligned/v1/mono/fr.tok.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized gu plain text' href="download.php?f=CCAligned/v1/mono/gu.tok.gz">gu</a>
</th><th><a rel="nofollow" title='monolingual tokenized ha plain text' href="download.php?f=CCAligned/v1/mono/ha.tok.gz">ha</a>
</th><th><a rel="nofollow" title='monolingual tokenized he plain text' href="download.php?f=CCAligned/v1/mono/he.tok.gz">he</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=CCAligned/v1/mono/hi.tok.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=CCAligned/v1/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized ht plain text' href="download.php?f=CCAligned/v1/mono/ht.tok.gz">ht</a>
</th><th><a rel="nofollow" title='monolingual tokenized hu plain text' href="download.php?f=CCAligned/v1/mono/hu.tok.gz">hu</a>
</th><th><a rel="nofollow" title='monolingual tokenized hy plain text' href="download.php?f=CCAligned/v1/mono/hy.tok.gz">hy</a>
</th><th><a rel="nofollow" title='monolingual tokenized id plain text' href="download.php?f=CCAligned/v1/mono/id.tok.gz">id</a>
</th><th><a rel="nofollow" title='monolingual tokenized ig plain text' href="download.php?f=CCAligned/v1/mono/ig.tok.gz">ig</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=CCAligned/v1/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=CCAligned/v1/mono/it.tok.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized ja plain text' href="download.php?f=CCAligned/v1/mono/ja.tok.gz">ja</a>
</th><th><a rel="nofollow" title='monolingual tokenized jv plain text' href="download.php?f=CCAligned/v1/mono/jv.tok.gz">jv</a>
</th><th><a rel="nofollow" title='monolingual tokenized ka plain text' href="download.php?f=CCAligned/v1/mono/ka.tok.gz">ka</a>
</th><th><a rel="nofollow" title='monolingual tokenized kg plain text' href="download.php?f=CCAligned/v1/mono/kg.tok.gz">kg</a>
</th><th><a rel="nofollow" title='monolingual tokenized kk plain text' href="download.php?f=CCAligned/v1/mono/kk.tok.gz">kk</a>
</th><th><a rel="nofollow" title='monolingual tokenized km plain text' href="download.php?f=CCAligned/v1/mono/km.tok.gz">km</a>
</th><th><a rel="nofollow" title='monolingual tokenized kn plain text' href="download.php?f=CCAligned/v1/mono/kn.tok.gz">kn</a>
</th><th><a rel="nofollow" title='monolingual tokenized ko plain text' href="download.php?f=CCAligned/v1/mono/ko.tok.gz">ko</a>
</th><th><a rel="nofollow" title='monolingual tokenized ku plain text' href="download.php?f=CCAligned/v1/mono/ku.tok.gz">ku</a>
</th><th><a rel="nofollow" title='monolingual tokenized ky plain text' href="download.php?f=CCAligned/v1/mono/ky.tok.gz">ky</a>
</th><th><a rel="nofollow" title='monolingual tokenized lg plain text' href="download.php?f=CCAligned/v1/mono/lg.tok.gz">lg</a>
</th><th><a rel="nofollow" title='monolingual tokenized ln plain text' href="download.php?f=CCAligned/v1/mono/ln.tok.gz">ln</a>
</th><th><a rel="nofollow" title='monolingual tokenized lo plain text' href="download.php?f=CCAligned/v1/mono/lo.tok.gz">lo</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=CCAligned/v1/mono/lt.tok.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=CCAligned/v1/mono/lv.tok.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized mg plain text' href="download.php?f=CCAligned/v1/mono/mg.tok.gz">mg</a>
</th><th><a rel="nofollow" title='monolingual tokenized mi plain text' href="download.php?f=CCAligned/v1/mono/mi.tok.gz">mi</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=CCAligned/v1/mono/mk.tok.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ml plain text' href="download.php?f=CCAligned/v1/mono/ml.tok.gz">ml</a>
</th><th><a rel="nofollow" title='monolingual tokenized mn plain text' href="download.php?f=CCAligned/v1/mono/mn.tok.gz">mn</a>
</th><th><a rel="nofollow" title='monolingual tokenized mr plain text' href="download.php?f=CCAligned/v1/mono/mr.tok.gz">mr</a>
</th><th><a rel="nofollow" title='monolingual tokenized ms plain text' href="download.php?f=CCAligned/v1/mono/ms.tok.gz">ms</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=CCAligned/v1/mono/mt.tok.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized my plain text' href="download.php?f=CCAligned/v1/mono/my.tok.gz">my</a>
</th><th><a rel="nofollow" title='monolingual tokenized ne plain text' href="download.php?f=CCAligned/v1/mono/ne.tok.gz">ne</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=CCAligned/v1/mono/nl.tok.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized no plain text' href="download.php?f=CCAligned/v1/mono/no.tok.gz">no</a>
</th><th><a rel="nofollow" title='monolingual tokenized ns plain text' href="download.php?f=CCAligned/v1/mono/ns.tok.gz">ns</a>
</th><th><a rel="nofollow" title='monolingual tokenized ny plain text' href="download.php?f=CCAligned/v1/mono/ny.tok.gz">ny</a>
</th><th><a rel="nofollow" title='monolingual tokenized om plain text' href="download.php?f=CCAligned/v1/mono/om.tok.gz">om</a>
</th><th><a rel="nofollow" title='monolingual tokenized or plain text' href="download.php?f=CCAligned/v1/mono/or.tok.gz">or</a>
</th><th><a rel="nofollow" title='monolingual tokenized pa plain text' href="download.php?f=CCAligned/v1/mono/pa.tok.gz">pa</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=CCAligned/v1/mono/pl.tok.gz">pl</a>
</th><th><a rel="nofollow" title='monolingual tokenized ps plain text' href="download.php?f=CCAligned/v1/mono/ps.tok.gz">ps</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=CCAligned/v1/mono/pt.tok.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized qa plain text' href="download.php?f=CCAligned/v1/mono/qa.tok.gz">qa</a>
</th><th><a rel="nofollow" title='monolingual tokenized qd plain text' href="download.php?f=CCAligned/v1/mono/qd.tok.gz">qd</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=CCAligned/v1/mono/ro.tok.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=CCAligned/v1/mono/ru.tok.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized si plain text' href="download.php?f=CCAligned/v1/mono/si.tok.gz">si</a>
</th><th><a rel="nofollow" title='monolingual tokenized sk plain text' href="download.php?f=CCAligned/v1/mono/sk.tok.gz">sk</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=CCAligned/v1/mono/sl.tok.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sn plain text' href="download.php?f=CCAligned/v1/mono/sn.tok.gz">sn</a>
</th><th><a rel="nofollow" title='monolingual tokenized so plain text' href="download.php?f=CCAligned/v1/mono/so.tok.gz">so</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=CCAligned/v1/mono/sq.tok.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=CCAligned/v1/mono/sr.tok.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized ss plain text' href="download.php?f=CCAligned/v1/mono/ss.tok.gz">ss</a>
</th><th><a rel="nofollow" title='monolingual tokenized st plain text' href="download.php?f=CCAligned/v1/mono/st.tok.gz">st</a>
</th><th><a rel="nofollow" title='monolingual tokenized su plain text' href="download.php?f=CCAligned/v1/mono/su.tok.gz">su</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=CCAligned/v1/mono/sv.tok.gz">sv</a>
</th><th><a rel="nofollow" title='monolingual tokenized sw plain text' href="download.php?f=CCAligned/v1/mono/sw.tok.gz">sw</a>
</th><th><a rel="nofollow" title='monolingual tokenized sz plain text' href="download.php?f=CCAligned/v1/mono/sz.tok.gz">sz</a>
</th><th><a rel="nofollow" title='monolingual tokenized ta plain text' href="download.php?f=CCAligned/v1/mono/ta.tok.gz">ta</a>
</th><th><a rel="nofollow" title='monolingual tokenized te plain text' href="download.php?f=CCAligned/v1/mono/te.tok.gz">te</a>
</th><th><a rel="nofollow" title='monolingual tokenized tg plain text' href="download.php?f=CCAligned/v1/mono/tg.tok.gz">tg</a>
</th><th><a rel="nofollow" title='monolingual tokenized th plain text' href="download.php?f=CCAligned/v1/mono/th.tok.gz">th</a>
</th><th><a rel="nofollow" title='monolingual tokenized ti plain text' href="download.php?f=CCAligned/v1/mono/ti.tok.gz">ti</a>
</th><th><a rel="nofollow" title='monolingual tokenized tl plain text' href="download.php?f=CCAligned/v1/mono/tl.tok.gz">tl</a>
</th><th><a rel="nofollow" title='monolingual tokenized tn plain text' href="download.php?f=CCAligned/v1/mono/tn.tok.gz">tn</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=CCAligned/v1/mono/tr.tok.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized ts plain text' href="download.php?f=CCAligned/v1/mono/ts.tok.gz">ts</a>
</th><th><a rel="nofollow" title='monolingual tokenized tz plain text' href="download.php?f=CCAligned/v1/mono/tz.tok.gz">tz</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=CCAligned/v1/mono/uk.tok.gz">uk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ur plain text' href="download.php?f=CCAligned/v1/mono/ur.tok.gz">ur</a>
</th><th><a rel="nofollow" title='monolingual tokenized ve plain text' href="download.php?f=CCAligned/v1/mono/ve.tok.gz">ve</a>
</th><th><a rel="nofollow" title='monolingual tokenized vi plain text' href="download.php?f=CCAligned/v1/mono/vi.tok.gz">vi</a>
</th><th><a rel="nofollow" title='monolingual tokenized wo plain text' href="download.php?f=CCAligned/v1/mono/wo.tok.gz">wo</a>
</th><th><a rel="nofollow" title='monolingual tokenized xh plain text' href="download.php?f=CCAligned/v1/mono/xh.tok.gz">xh</a>
</th><th><a rel="nofollow" title='monolingual tokenized yo plain text' href="download.php?f=CCAligned/v1/mono/yo.tok.gz">yo</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh_CN plain text' href="download.php?f=CCAligned/v1/mono/zh_CN.tok.gz">zh_CN</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh_TW plain text' href="download.php?f=CCAligned/v1/mono/zh_TW.tok.gz">zh_TW</a>
</th><th><a rel="nofollow" title='monolingual tokenized zu plain text' href="download.php?f=CCAligned/v1/mono/zu.tok.gz">zu</a>
</th><th><a rel="nofollow" title='monolingual tokenized zz plain text' href="download.php?f=CCAligned/v1/mono/zz.tok.gz">zz</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized af plain text' href="download.php?f=CCAligned/v1/mono/af.txt.gz">af</a>
</th><td>31</td> <td>27.6M</td> <td>2.1M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ceffce"><a rel="nofollow" title='Afrikaans-English (1,500,526 sentence pairs, 46.27M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/af-en.tmx.gz">1.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ak plain text' href="download.php?f=CCAligned/v1/mono/ak.txt.gz">ak</a>
</th><td>1</td> <td>5.0k</td> <td>0.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Akan-English (479 sentence pairs, 8.04k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/ak-en.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized am plain text' href="download.php?f=CCAligned/v1/mono/am.txt.gz">am</a>
</th><td>7</td> <td>5.4M</td> <td>0.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Amharic-English (342,033 sentence pairs, 9.45M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/am-en.tmx.gz">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ar plain text' href="download.php?f=CCAligned/v1/mono/ar.txt.gz">ar</a>
</th><td>507</td> <td>389.8M</td> <td>25.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Arabic-English (13,036,349 sentence pairs, 389.35M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/ar-en.tmx.gz">13.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized as plain text' href="download.php?f=CCAligned/v1/mono/as.txt.gz">as</a>
</th><td>1</td> <td>0.4M</td> <td>27.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fff0eb"><a rel="nofollow" title='Assamese-English (26,903 sentence pairs, 0.34M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/as-en.tmx.gz">26.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ay plain text' href="download.php?f=CCAligned/v1/mono/ay.txt.gz">ay</a>
</th><td>1</td> <td>11.0k</td> <td>0.8k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Aymara-English (476 sentence pairs, 10.22k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/ay-en.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized az plain text' href="download.php?f=CCAligned/v1/mono/az.txt.gz">az</a>
</th><td>25</td> <td>14.3M</td> <td>1.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Azerbaijani-English (1,171,871 sentence pairs, 25.80M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/az-en.tmx.gz">1.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized be plain text' href="download.php?f=CCAligned/v1/mono/be.txt.gz">be</a>
</th><td>23</td> <td>21.2M</td> <td>1.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d1ffce"><a rel="nofollow" title='Belarusian-English (1,122,545 sentence pairs, 37.20M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/be-en.tmx.gz">1.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=CCAligned/v1/mono/bg.txt.gz">bg</a>
</th><td>209</td> <td>148.1M</td> <td>13.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-English (10,388,889 sentence pairs, 251.01M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/bg-en.tmx.gz">10.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bm plain text' href="download.php?f=CCAligned/v1/mono/bm.txt.gz">bm</a>
</th><td>1</td> <td>1.3k</td> <td>0.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bambara-English (150 sentence pairs, 1.84k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/bm-en.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=CCAligned/v1/mono/bn.txt.gz">bn</a>
</th><td>71</td> <td>77.0M</td> <td>3.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bengali-English (3,481,342 sentence pairs, 76.77M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/bn-en.tmx.gz">3.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized br plain text' href="download.php?f=CCAligned/v1/mono/br.txt.gz">br</a>
</th><td>3</td> <td>1.2M</td> <td>0.1M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffffe7"><a rel="nofollow" title='Breton-English (114,812 sentence pairs, 1.52M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/br-en.tmx.gz">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs plain text' href="download.php?f=CCAligned/v1/mono/bs.txt.gz">bs</a>
</th><td>4</td> <td>6.5M</td> <td>0.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Bosnian-English (191,869 sentence pairs, 11.77M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/bs-en.tmx.gz">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=CCAligned/v1/mono/ca.txt.gz">ca</a>
</th><td>117</td> <td>108.1M</td> <td>7.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Catalan-English (5,787,684 sentence pairs, 173.88M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/ca-en.tmx.gz">5.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cb plain text' href="download.php?f=CCAligned/v1/mono/cb.txt.gz">cb</a>
</th><td>2</td> <td>0.4M</td> <td>52.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='cb-English (52,185 sentence pairs, 0.53M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/cb-en.tmx.gz">52.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=CCAligned/v1/mono/cs.txt.gz">cs</a>
</th><td>255</td> <td>163.8M</td> <td>16.1M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-English (12,706,994 sentence pairs, 284.28M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/cs-en.tmx.gz">12.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cx plain text' href="download.php?f=CCAligned/v1/mono/cx.txt.gz">cx</a>
</th><td>5</td> <td>3.5M</td> <td>0.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='cx-English (244,610 sentence pairs, 5.65M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/cx-en.tmx.gz">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cy plain text' href="download.php?f=CCAligned/v1/mono/cy.txt.gz">cy</a>
</th><td>17</td> <td>13.3M</td> <td>1.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Welsh-English (837,318 sentence pairs, 21.48M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/cy-en.tmx.gz">0.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized da plain text' href="download.php?f=CCAligned/v1/mono/da.txt.gz">da</a>
</th><td>215</td> <td>151.0M</td> <td>13.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-English (10,719,436 sentence pairs, 259.24M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/da-en.tmx.gz">10.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=CCAligned/v1/mono/de.txt.gz">de</a>
</th><td>1,852</td> <td>1.4G</td> <td>121.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-English (15,256,774 sentence pairs, 310.30M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/de-en.tmx.gz">15.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=CCAligned/v1/mono/el.txt.gz">el</a>
</th><td>178</td> <td>110.0M</td> <td>10.5M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-English (8,833,614 sentence pairs, 183.29M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/el-en.tmx.gz">8.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=CCAligned/v1/mono/en.txt.gz">en</a>
</th><td>18,204</td> <td>13.3G</td> <td>1.1G</td><td bgcolor="#ceffce"><a rel="nofollow" title='English-Afrikaans (1,504,065 sentence pairs, 46.31M words) - Moses format' href="download.php?f=CCAligned/v1/moses/af-en.txt.zip">1.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Akan (479 sentence pairs, 8.04k words) - Moses format' href="download.php?f=CCAligned/v1/moses/ak-en.txt.zip">0.5k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='English-Amharic (346,518 sentence pairs, 9.48M words) - Moses format' href="download.php?f=CCAligned/v1/moses/am-en.txt.zip">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Arabic (13,100,264 sentence pairs, 390.61M words) - Moses format' href="download.php?f=CCAligned/v1/moses/ar-en.txt.zip">13.1M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='English-Assamese (27,035 sentence pairs, 0.34M words) - Moses format' href="download.php?f=CCAligned/v1/moses/as-en.txt.zip">27.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Aymara (476 sentence pairs, 10.22k words) - Moses format' href="download.php?f=CCAligned/v1/moses/ay-en.txt.zip">0.5k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='English-Azerbaijani (1,174,345 sentence pairs, 25.83M words) - Moses format' href="download.php?f=CCAligned/v1/moses/az-en.txt.zip">1.2M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='English-Belarusian (1,125,779 sentence pairs, 37.25M words) - Moses format' href="download.php?f=CCAligned/v1/moses/be-en.txt.zip">1.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Bulgarian (10,418,140 sentence pairs, 251.34M words) - Moses format' href="download.php?f=CCAligned/v1/moses/bg-en.txt.zip">10.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Bambara (150 sentence pairs, 1.84k words) - Moses format' href="download.php?f=CCAligned/v1/moses/bm-en.txt.zip">0.1k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='English-Bengali (3,517,663 sentence pairs, 77.56M words) - Moses format' href="download.php?f=CCAligned/v1/moses/bn-en.txt.zip">3.5M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='English-Breton (115,129 sentence pairs, 1.53M words) - Moses format' href="download.php?f=CCAligned/v1/moses/br-en.txt.zip">0.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='English-Bosnian (192,099 sentence pairs, 11.78M words) - Moses format' href="download.php?f=CCAligned/v1/moses/bs-en.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Catalan (5,802,549 sentence pairs, 174.08M words) - Moses format' href="download.php?f=CCAligned/v1/moses/ca-en.txt.zip">5.8M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='English-cb (52,298 sentence pairs, 0.53M words) - Moses format' href="download.php?f=CCAligned/v1/moses/cb-en.txt.zip">52.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Czech (12,730,121 sentence pairs, 284.48M words) - Moses format' href="download.php?f=CCAligned/v1/moses/cs-en.txt.zip">12.7M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='English-cx (245,011 sentence pairs, 5.66M words) - Moses format' href="download.php?f=CCAligned/v1/moses/cx-en.txt.zip">0.2M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='English-Welsh (839,007 sentence pairs, 21.50M words) - Moses format' href="download.php?f=CCAligned/v1/moses/cy-en.txt.zip">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Danish (10,738,610 sentence pairs, 259.41M words) - Moses format' href="download.php?f=CCAligned/v1/moses/da-en.txt.zip">10.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-German (15,300,342 sentence pairs, 310.88M words) - Moses format' href="download.php?f=CCAligned/v1/moses/de-en.txt.zip">15.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Greek (8,878,509 sentence pairs, 183.97M words) - Moses format' href="download.php?f=CCAligned/v1/moses/el-en.txt.zip">8.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Spanish (15,198,423 sentence pairs, 333.54M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-es.tmx.gz">15.2M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='English-Estonian (4,103,722 sentence pairs, 97.38M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-et.tmx.gz">4.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Persian (5,244,197 sentence pairs, 140.88M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-fa.tmx.gz">5.2M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='English-Fulah (72,764 sentence pairs, 0.97M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ff.tmx.gz">72.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Finnish (9,682,912 sentence pairs, 205.35M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-fi.tmx.gz">9.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-French (15,502,845 sentence pairs, 327.22M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-fr.tmx.gz">15.5M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='English-Gujarati (169,111 sentence pairs, 4.27M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-gu.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='English-Hausa (338,468 sentence pairs, 6.71M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ha.tmx.gz">0.3M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='English-Hebrew (5,321,289 sentence pairs, 113.21M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-he.tmx.gz">5.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hindi (8,121,657 sentence pairs, 242.96M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-hi.tmx.gz">8.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Croatian (9,354,913 sentence pairs, 200.26M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-hr.tmx.gz">9.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='English-Haitian (557,106 sentence pairs, 15.86M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ht.tmx.gz">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hungarian (11,567,143 sentence pairs, 241.49M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-hu.tmx.gz">11.6M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='English-Armenian (1,012,654 sentence pairs, 27.49M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-hy.tmx.gz">1.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Indonesian (15,624,406 sentence pairs, 272.71M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-id.tmx.gz">15.6M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='English-Igbo (147,839 sentence pairs, 4.49M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ig.tmx.gz">0.1M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='English-Icelandic (1,190,240 sentence pairs, 36.39M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-is.tmx.gz">1.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Italian (14,404,987 sentence pairs, 365.68M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-it.tmx.gz">14.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Japanese (14,855,480 sentence pairs, 212.33M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ja.tmx.gz">14.9M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-Javanese (1,509,817 sentence pairs, 10.43M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-jv.tmx.gz">1.5M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='English-Georgian (1,261,269 sentence pairs, 32.83M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ka.tmx.gz">1.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Kongo (75 sentence pairs, 0.83k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-kg.tmx.gz">75</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='English-Kazakh (688,309 sentence pairs, 17.22M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-kk.tmx.gz">0.7M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='English-Central Khmer (405,103 sentence pairs, 8.20M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-km.tmx.gz">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='English-Kannada (163,717 sentence pairs, 3.92M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-kn.tmx.gz">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Korean (8,746,260 sentence pairs, 181.59M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ko.tmx.gz">8.7M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='English-Kurdish (137,692 sentence pairs, 4.78M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ku.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='English-Kirghiz (240,232 sentence pairs, 5.71M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ky.tmx.gz">0.2M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='English-Ganda (14,659 sentence pairs, 0.10M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-lg.tmx.gz">14.7k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='English-Lingala (21,536 sentence pairs, 0.20M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ln.tmx.gz">21.5k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='English-Lao (157,815 sentence pairs, 3.29M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-lo.tmx.gz">0.2M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='English-Lithuanian (5,204,336 sentence pairs, 120.90M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-lt.tmx.gz">5.2M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='English-Latvian (4,842,229 sentence pairs, 119.72M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-lv.tmx.gz">4.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='English-Malagasy (379,322 sentence pairs, 11.26M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-mg.tmx.gz">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='English-Maori (132,258 sentence pairs, 4.06M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-mi.tmx.gz">0.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='English-Macedonian (1,784,735 sentence pairs, 48.68M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-mk.tmx.gz">1.8M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='English-Malayalam (560,446 sentence pairs, 15.89M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ml.tmx.gz">0.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-Mongolian (565,417 sentence pairs, 10.22M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-mn.tmx.gz">0.6M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='English-Marathi (748,788 sentence pairs, 17.67M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-mr.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Malay (5,372,310 sentence pairs, 138.18M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ms.tmx.gz">5.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Maltese (27 sentence pairs, 0.10k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-mt.tmx.gz">27</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='English-Burmese (294,354 sentence pairs, 6.20M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-my.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='English-Nepali (486,080 sentence pairs, 11.96M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ne.tmx.gz">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Dutch (13,113,093 sentence pairs, 369.82M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-nl.tmx.gz">13.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Norwegian (9,165,423 sentence pairs, 215.09M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-no.tmx.gz">9.2M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='English-ns (14,100 sentence pairs, 0.17M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ns.tmx.gz">14.1k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='English-Chichewa (131,683 sentence pairs, 3.73M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ny.tmx.gz">0.1M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='English-Oromo (22,113 sentence pairs, 0.13M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-om.tmx.gz">22.1k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='English-Oriya (5,468 sentence pairs, 0.13M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-or.tmx.gz">5.5k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='English-Panjabi (153,003 sentence pairs, 4.18M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-pa.tmx.gz">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Polish (12,904,702 sentence pairs, 355.29M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-pl.tmx.gz">12.9M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='English-Pushto (298,973 sentence pairs, 6.89M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ps.tmx.gz">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Portuguese (13,599,497 sentence pairs, 379.52M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-pt.tmx.gz">13.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-qa (137 sentence pairs, 1.96k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-qa.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-qd (178 sentence pairs, 3.42k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-qd.tmx.gz">0.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Romanian (10,493,087 sentence pairs, 259.30M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ro.tmx.gz">10.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Russian (13,801,277 sentence pairs, 287.64M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ru.tmx.gz">13.8M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='English-Sinhala (617,922 sentence pairs, 16.98M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-si.tmx.gz">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Slovak (6,926,175 sentence pairs, 163.76M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-sk.tmx.gz">6.9M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='English-Slovenian (4,360,584 sentence pairs, 110.01M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-sl.tmx.gz">4.4M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='English-Shona (86,740 sentence pairs, 2.74M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-sn.tmx.gz">86.7k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='English-Somali (364,260 sentence pairs, 6.21M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-so.tmx.gz">0.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Albanian (2,312,878 sentence pairs, 55.75M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-sq.tmx.gz">2.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Serbian (1,989,066 sentence pairs, 73.01M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-sr.tmx.gz">2.0M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='English-Swati (22,897 sentence pairs, 0.21M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ss.tmx.gz">22.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='English-Sotho, Southern (905 sentence pairs, 32.80k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-st.tmx.gz">0.9k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-Sundanese (492,913 sentence pairs, 10.07M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-su.tmx.gz">0.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Swedish (12,523,119 sentence pairs, 321.75M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-sv.tmx.gz">12.5M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='English-Swahili (2,040,086 sentence pairs, 36.64M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-sw.tmx.gz">2.0M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-sz (13 sentence pairs, 0.20k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-sz.tmx.gz">13</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='English-Tamil (878,690 sentence pairs, 22.80M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ta.tmx.gz">0.9M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='English-Telugu (580,778 sentence pairs, 16.35M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-te.tmx.gz">0.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='English-Tajik (251,429 sentence pairs, 6.50M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-tg.tmx.gz">0.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Thai (10,555,469 sentence pairs, 200.14M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-th.tmx.gz">10.6M</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='English-Tigrinya (7,577 sentence pairs, 0.25M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ti.tmx.gz">7.6k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='English-Tagalog (6,562,125 sentence pairs, 78.37M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-tl.tmx.gz">6.6M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='English-Tswana (70,899 sentence pairs, 0.48M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-tn.tmx.gz">70.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Turkish (13,585,048 sentence pairs, 328.05M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-tr.tmx.gz">13.6M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='English-Tsonga (1,968 sentence pairs, 54.40k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ts.tmx.gz">2.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-tz (34 sentence pairs, 0.65k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-tz.tmx.gz">34</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Ukrainian (8,525,500 sentence pairs, 223.18M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-uk.tmx.gz">8.5M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='English-Urdu (1,367,980 sentence pairs, 41.65M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ur.tmx.gz">1.4M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='English-Venda (1,556 sentence pairs, 44.62k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-ve.tmx.gz">1.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Vietnamese (12,320,098 sentence pairs, 308.97M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-vi.tmx.gz">12.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-Wolof (88,286 sentence pairs, 0.80M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-wo.tmx.gz">88.3k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='English-Xhosa (132,312 sentence pairs, 3.00M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-xh.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='English-Yoruba (174,902 sentence pairs, 5.71M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-yo.tmx.gz">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Chinese (15,062,264 sentence pairs, 196.67M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-zh_CN.tmx.gz">15.1M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='English-Chinese (8,698,375 sentence pairs, 91.80M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-zh_TW.tmx.gz">8.7M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='English-Zulu (125,841 sentence pairs, 2.99M words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-zu.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-zz (35 sentence pairs, 0.44k words) - TMX format' href="download.php?f=CCAligned/v1/tmx/en-zz.tmx.gz">35</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=CCAligned/v1/mono/es.txt.gz">es</a>
</th><td>1,967</td> <td>1.5G</td> <td>123.1M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-English (15,250,347 sentence pairs, 334.28M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-es.txt.zip">15.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=CCAligned/v1/mono/et.txt.gz">et</a>
</th><td>83</td> <td>53.0M</td> <td>5.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Estonian-English (4,112,295 sentence pairs, 97.48M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-et.txt.zip">4.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fa plain text' href="download.php?f=CCAligned/v1/mono/fa.txt.gz">fa</a>
</th><td>106</td> <td>85.6M</td> <td>5.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Persian-English (5,287,317 sentence pairs, 141.75M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-fa.txt.zip">5.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ff plain text' href="download.php?f=CCAligned/v1/mono/ff.txt.gz">ff</a>
</th><td>2</td> <td>0.9M</td> <td>88.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Fulah-English (73,023 sentence pairs, 0.97M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ff.txt.zip">73.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=CCAligned/v1/mono/fi.txt.gz">fi</a>
</th><td>194</td> <td>109.8M</td> <td>12.5M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-English (9,699,433 sentence pairs, 205.51M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-fi.txt.zip">9.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=CCAligned/v1/mono/fr.txt.gz">fr</a>
</th><td>2,067</td> <td>1.9G</td> <td>132.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (15,550,339 sentence pairs, 327.87M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-fr.txt.zip">15.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gu plain text' href="download.php?f=CCAligned/v1/mono/gu.txt.gz">gu</a>
</th><td>4</td> <td>3.4M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Gujarati-English (169,267 sentence pairs, 4.27M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-gu.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ha plain text' href="download.php?f=CCAligned/v1/mono/ha.txt.gz">ha</a>
</th><td>7</td> <td>4.1M</td> <td>0.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Hausa-English (339,178 sentence pairs, 6.72M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ha.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized he plain text' href="download.php?f=CCAligned/v1/mono/he.txt.gz">he</a>
</th><td>107</td> <td>65.8M</td> <td>5.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hebrew-English (5,331,608 sentence pairs, 113.31M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-he.txt.zip">5.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=CCAligned/v1/mono/hi.txt.gz">hi</a>
</th><td>164</td> <td>213.6M</td> <td>8.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hindi-English (8,181,587 sentence pairs, 244.20M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-hi.txt.zip">8.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=CCAligned/v1/mono/hr.txt.gz">hr</a>
</th><td>188</td> <td>114.2M</td> <td>11.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-English (9,376,190 sentence pairs, 200.44M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-hr.txt.zip">9.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ht plain text' href="download.php?f=CCAligned/v1/mono/ht.txt.gz">ht</a>
</th><td>12</td> <td>9.7M</td> <td>0.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Haitian-English (558,168 sentence pairs, 15.87M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ht.txt.zip">0.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hu plain text' href="download.php?f=CCAligned/v1/mono/hu.txt.gz">hu</a>
</th><td>232</td> <td>139.7M</td> <td>14.5M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-English (11,586,886 sentence pairs, 241.68M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-hu.txt.zip">11.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hy plain text' href="download.php?f=CCAligned/v1/mono/hy.txt.gz">hy</a>
</th><td>21</td> <td>16.5M</td> <td>1.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d5ffca"><a rel="nofollow" title='Armenian-English (1,015,624 sentence pairs, 27.52M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-hy.txt.zip">1.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized id plain text' href="download.php?f=CCAligned/v1/mono/id.txt.gz">id</a>
</th><td>541</td> <td>233.9M</td> <td>30.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Indonesian-English (15,700,345 sentence pairs, 273.80M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-id.txt.zip">15.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ig plain text' href="download.php?f=CCAligned/v1/mono/ig.txt.gz">ig</a>
</th><td>3</td> <td>2.8M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Igbo-English (148,147 sentence pairs, 4.49M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ig.txt.zip">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=CCAligned/v1/mono/is.txt.gz">is</a>
</th><td>24</td> <td>20.6M</td> <td>1.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Icelandic-English (1,192,542 sentence pairs, 36.43M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-is.txt.zip">1.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=CCAligned/v1/mono/it.txt.gz">it</a>
</th><td>1,161</td> <td>950.8M</td> <td>72.5M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-English (14,450,326 sentence pairs, 366.38M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-it.txt.zip">14.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ja plain text' href="download.php?f=CCAligned/v1/mono/ja.txt.gz">ja</a>
</th><td>525</td> <td>183.9M</td> <td>26.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Japanese-English (15,000,301 sentence pairs, 213.21M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ja.txt.zip">15.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized jv plain text' href="download.php?f=CCAligned/v1/mono/jv.txt.gz">jv</a>
</th><td>31</td> <td>6.7M</td> <td>1.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Javanese-English (1,513,976 sentence pairs, 10.46M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-jv.txt.zip">1.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ka plain text' href="download.php?f=CCAligned/v1/mono/ka.txt.gz">ka</a>
</th><td>26</td> <td>17.9M</td> <td>1.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Georgian-English (1,264,176 sentence pairs, 32.86M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ka.txt.zip">1.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kg plain text' href="download.php?f=CCAligned/v1/mono/kg.txt.gz">kg</a>
</th><td>1</td> <td>0.6k</td> <td>83</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kongo-English (75 sentence pairs, 0.83k words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-kg.txt.zip">75</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kk plain text' href="download.php?f=CCAligned/v1/mono/kk.txt.gz">kk</a>
</th><td>14</td> <td>9.3M</td> <td>0.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Kazakh-English (689,653 sentence pairs, 17.24M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-kk.txt.zip">0.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized km plain text' href="download.php?f=CCAligned/v1/mono/km.txt.gz">km</a>
</th><td>9</td> <td>7.2M</td> <td>0.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Central Khmer-English (412,382 sentence pairs, 8.23M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-km.txt.zip">0.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kn plain text' href="download.php?f=CCAligned/v1/mono/kn.txt.gz">kn</a>
</th><td>4</td> <td>3.0M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Kannada-English (163,922 sentence pairs, 3.92M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-kn.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ko plain text' href="download.php?f=CCAligned/v1/mono/ko.txt.gz">ko</a>
</th><td>181</td> <td>108.5M</td> <td>9.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Korean-English (9,033,238 sentence pairs, 183.46M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ko.txt.zip">9.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ku plain text' href="download.php?f=CCAligned/v1/mono/ku.txt.gz">ku</a>
</th><td>3</td> <td>2.9M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Kurdish-English (137,876 sentence pairs, 4.79M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ku.txt.zip">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ky plain text' href="download.php?f=CCAligned/v1/mono/ky.txt.gz">ky</a>
</th><td>5</td> <td>3.3M</td> <td>0.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Kirghiz-English (240,658 sentence pairs, 5.72M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ky.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lg plain text' href="download.php?f=CCAligned/v1/mono/lg.txt.gz">lg</a>
</th><td>1</td> <td>80.6k</td> <td>15.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Ganda-English (14,702 sentence pairs, 0.10M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-lg.txt.zip">14.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ln plain text' href="download.php?f=CCAligned/v1/mono/ln.txt.gz">ln</a>
</th><td>1</td> <td>0.1M</td> <td>22.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Lingala-English (21,563 sentence pairs, 0.20M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ln.txt.zip">21.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lo plain text' href="download.php?f=CCAligned/v1/mono/lo.txt.gz">lo</a>
</th><td>4</td> <td>1.5M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Lao-English (160,007 sentence pairs, 3.30M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-lo.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=CCAligned/v1/mono/lt.txt.gz">lt</a>
</th><td>105</td> <td>69.1M</td> <td>6.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Lithuanian-English (5,215,271 sentence pairs, 121.01M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-lt.txt.zip">5.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=CCAligned/v1/mono/lv.txt.gz">lv</a>
</th><td>98</td> <td>68.0M</td> <td>6.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Latvian-English (4,850,972 sentence pairs, 119.82M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-lv.txt.zip">4.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mg plain text' href="download.php?f=CCAligned/v1/mono/mg.txt.gz">mg</a>
</th><td>8</td> <td>7.1M</td> <td>0.5M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Malagasy-English (380,161 sentence pairs, 11.28M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-mg.txt.zip">0.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mi plain text' href="download.php?f=CCAligned/v1/mono/mi.txt.gz">mi</a>
</th><td>3</td> <td>2.6M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Maori-English (132,542 sentence pairs, 4.06M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-mi.txt.zip">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=CCAligned/v1/mono/mk.txt.gz">mk</a>
</th><td>36</td> <td>28.3M</td> <td>2.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ceffce"><a rel="nofollow" title='Macedonian-English (1,788,969 sentence pairs, 48.74M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-mk.txt.zip">1.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ml plain text' href="download.php?f=CCAligned/v1/mono/ml.txt.gz">ml</a>
</th><td>12</td> <td>15.5M</td> <td>0.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Malayalam-English (561,906 sentence pairs, 15.91M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ml.txt.zip">0.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mn plain text' href="download.php?f=CCAligned/v1/mono/mn.txt.gz">mn</a>
</th><td>12</td> <td>6.2M</td> <td>0.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Mongolian-English (566,887 sentence pairs, 10.24M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-mn.txt.zip">0.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mr plain text' href="download.php?f=CCAligned/v1/mono/mr.txt.gz">mr</a>
</th><td>15</td> <td>15.6M</td> <td>0.8M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Marathi-English (749,966 sentence pairs, 17.69M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-mr.txt.zip">0.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ms plain text' href="download.php?f=CCAligned/v1/mono/ms.txt.gz">ms</a>
</th><td>108</td> <td>80.4M</td> <td>6.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Malay-English (5,391,823 sentence pairs, 138.58M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ms.txt.zip">5.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=CCAligned/v1/mono/mt.txt.gz">mt</a>
</th><td>1</td> <td>86</td> <td>26</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-English (27 sentence pairs, 0.10k words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-mt.txt.zip">27</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized my plain text' href="download.php?f=CCAligned/v1/mono/my.txt.gz">my</a>
</th><td>6</td> <td>5.6M</td> <td>0.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Burmese-English (294,946 sentence pairs, 6.21M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-my.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ne plain text' href="download.php?f=CCAligned/v1/mono/ne.txt.gz">ne</a>
</th><td>10</td> <td>10.4M</td> <td>0.5M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Nepali-English (487,157 sentence pairs, 11.98M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ne.txt.zip">0.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=CCAligned/v1/mono/nl.txt.gz">nl</a>
</th><td>727</td> <td>550.8M</td> <td>48.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-English (13,150,309 sentence pairs, 370.41M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-nl.txt.zip">13.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized no plain text' href="download.php?f=CCAligned/v1/mono/no.txt.gz">no</a>
</th><td>184</td> <td>124.0M</td> <td>11.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Norwegian-English (9,180,559 sentence pairs, 215.25M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-no.txt.zip">9.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ns plain text' href="download.php?f=CCAligned/v1/mono/ns.txt.gz">ns</a>
</th><td>1</td> <td>0.1M</td> <td>15.8k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='ns-English (14,139 sentence pairs, 0.17M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ns.txt.zip">14.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ny plain text' href="download.php?f=CCAligned/v1/mono/ny.txt.gz">ny</a>
</th><td>3</td> <td>2.1M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='Chichewa-English (131,898 sentence pairs, 3.73M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ny.txt.zip">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized om plain text' href="download.php?f=CCAligned/v1/mono/om.txt.gz">om</a>
</th><td>1</td> <td>0.1M</td> <td>22.9k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Oromo-English (22,207 sentence pairs, 0.13M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-om.txt.zip">22.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized or plain text' href="download.php?f=CCAligned/v1/mono/or.txt.gz">or</a>
</th><td>1</td> <td>0.1M</td> <td>5.6k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Oriya-English (5,527 sentence pairs, 0.13M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-or.txt.zip">5.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pa plain text' href="download.php?f=CCAligned/v1/mono/pa.txt.gz">pa</a>
</th><td>4</td> <td>3.2M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Panjabi-English (153,212 sentence pairs, 4.18M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-pa.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=CCAligned/v1/mono/pl.txt.gz">pl</a>
</th><td>520</td> <td>346.3M</td> <td>33.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-English (12,950,300 sentence pairs, 356.05M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-pl.txt.zip">13.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ps plain text' href="download.php?f=CCAligned/v1/mono/ps.txt.gz">ps</a>
</th><td>6</td> <td>4.3M</td> <td>0.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Pushto-English (299,634 sentence pairs, 6.89M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ps.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=CCAligned/v1/mono/pt.txt.gz">pt</a>
</th><td>931</td> <td>654.7M</td> <td>56.5M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-English (13,650,321 sentence pairs, 380.42M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-pt.txt.zip">13.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized qa plain text' href="download.php?f=CCAligned/v1/mono/qa.txt.gz">qa</a>
</th><td>1</td> <td>1.8k</td> <td>0.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='qa-English (137 sentence pairs, 1.96k words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-qa.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized qd plain text' href="download.php?f=CCAligned/v1/mono/qd.txt.gz">qd</a>
</th><td>1</td> <td>2.4k</td> <td>0.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='qd-English (180 sentence pairs, 3.43k words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-qd.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=CCAligned/v1/mono/ro.txt.gz">ro</a>
</th><td>211</td> <td>154.9M</td> <td>13.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-English (10,525,602 sentence pairs, 259.63M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ro.txt.zip">10.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=CCAligned/v1/mono/ru.txt.gz">ru</a>
</th><td>1,386</td> <td>1.0G</td> <td>90.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Russian-English (13,850,305 sentence pairs, 288.33M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ru.txt.zip">13.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized si plain text' href="download.php?f=CCAligned/v1/mono/si.txt.gz">si</a>
</th><td>13</td> <td>13.3M</td> <td>0.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Sinhala-English (619,730 sentence pairs, 17.00M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-si.txt.zip">0.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sk plain text' href="download.php?f=CCAligned/v1/mono/sk.txt.gz">sk</a>
</th><td>139</td> <td>94.2M</td> <td>8.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovak-English (6,938,181 sentence pairs, 163.89M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-sk.txt.zip">6.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=CCAligned/v1/mono/sl.txt.gz">sl</a>
</th><td>88</td> <td>63.4M</td> <td>5.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Slovenian-English (4,366,555 sentence pairs, 110.08M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-sl.txt.zip">4.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sn plain text' href="download.php?f=CCAligned/v1/mono/sn.txt.gz">sn</a>
</th><td>2</td> <td>1.5M</td> <td>0.1M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Shona-English (86,869 sentence pairs, 2.74M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-sn.txt.zip">86.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized so plain text' href="download.php?f=CCAligned/v1/mono/so.txt.gz">so</a>
</th><td>8</td> <td>3.7M</td> <td>0.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Somali-English (364,960 sentence pairs, 6.21M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-so.txt.zip">0.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=CCAligned/v1/mono/sq.txt.gz">sq</a>
</th><td>47</td> <td>34.2M</td> <td>2.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Albanian-English (2,317,644 sentence pairs, 55.80M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-sq.txt.zip">2.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=CCAligned/v1/mono/sr.txt.gz">sr</a>
</th><td>40</td> <td>40.1M</td> <td>3.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Serbian-English (1,992,692 sentence pairs, 73.06M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-sr.txt.zip">2.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ss plain text' href="download.php?f=CCAligned/v1/mono/ss.txt.gz">ss</a>
</th><td>1</td> <td>0.1M</td> <td>27.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Swati-English (22,961 sentence pairs, 0.21M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ss.txt.zip">23.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized st plain text' href="download.php?f=CCAligned/v1/mono/st.txt.gz">st</a>
</th><td>1</td> <td>19.4k</td> <td>1.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Sotho, Southern-English (905 sentence pairs, 32.80k words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-st.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized su plain text' href="download.php?f=CCAligned/v1/mono/su.txt.gz">su</a>
</th><td>10</td> <td>5.9M</td> <td>0.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Sundanese-English (494,145 sentence pairs, 10.08M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-su.txt.zip">0.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=CCAligned/v1/mono/sv.txt.gz">sv</a>
</th><td>251</td> <td>182.0M</td> <td>16.7M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Swedish-English (12,544,114 sentence pairs, 321.96M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-sv.txt.zip">12.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sw plain text' href="download.php?f=CCAligned/v1/mono/sw.txt.gz">sw</a>
</th><td>41</td> <td>21.5M</td> <td>2.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Swahili-English (2,044,993 sentence pairs, 36.68M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-sw.txt.zip">2.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sz plain text' href="download.php?f=CCAligned/v1/mono/sz.txt.gz">sz</a>
</th><td>1</td> <td>0.1k</td> <td>12</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='sz-English (13 sentence pairs, 0.20k words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-sz.txt.zip">13</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ta plain text' href="download.php?f=CCAligned/v1/mono/ta.txt.gz">ta</a>
</th><td>18</td> <td>24.0M</td> <td>0.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Tamil-English (880,568 sentence pairs, 22.82M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ta.txt.zip">0.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized te plain text' href="download.php?f=CCAligned/v1/mono/te.txt.gz">te</a>
</th><td>12</td> <td>11.7M</td> <td>0.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Telugu-English (581,652 sentence pairs, 16.36M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-te.txt.zip">0.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tg plain text' href="download.php?f=CCAligned/v1/mono/tg.txt.gz">tg</a>
</th><td>6</td> <td>3.8M</td> <td>0.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Tajik-English (251,866 sentence pairs, 6.51M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-tg.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized th plain text' href="download.php?f=CCAligned/v1/mono/th.txt.gz">th</a>
</th><td>215</td> <td>70.7M</td> <td>11.0M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Thai-English (10,746,372 sentence pairs, 201.52M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-th.txt.zip">10.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ti plain text' href="download.php?f=CCAligned/v1/mono/ti.txt.gz">ti</a>
</th><td>1</td> <td>0.2M</td> <td>7.7k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffeae6"><a rel="nofollow" title='Tigrinya-English (7,658 sentence pairs, 0.25M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ti.txt.zip">7.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tl plain text' href="download.php?f=CCAligned/v1/mono/tl.txt.gz">tl</a>
</th><td>132</td> <td>50.5M</td> <td>7.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Tagalog-English (6,593,264 sentence pairs, 78.56M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-tl.txt.zip">6.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tn plain text' href="download.php?f=CCAligned/v1/mono/tn.txt.gz">tn</a>
</th><td>2</td> <td>0.4M</td> <td>74.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Tswana-English (71,254 sentence pairs, 0.48M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-tn.txt.zip">71.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=CCAligned/v1/mono/tr.txt.gz">tr</a>
</th><td>406</td> <td>245.5M</td> <td>25.1M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-English (13,650,311 sentence pairs, 329.23M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-tr.txt.zip">13.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ts plain text' href="download.php?f=CCAligned/v1/mono/ts.txt.gz">ts</a>
</th><td>1</td> <td>31.7k</td> <td>2.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Tsonga-English (1,968 sentence pairs, 54.40k words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ts.txt.zip">2.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tz plain text' href="download.php?f=CCAligned/v1/mono/tz.txt.gz">tz</a>
</th><td>1</td> <td>0.4k</td> <td>38</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='tz-English (34 sentence pairs, 0.65k words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-tz.txt.zip">34</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=CCAligned/v1/mono/uk.txt.gz">uk</a>
</th><td>171</td> <td>127.6M</td> <td>11.6M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-English (8,547,377 sentence pairs, 223.42M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-uk.txt.zip">8.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ur plain text' href="download.php?f=CCAligned/v1/mono/ur.txt.gz">ur</a>
</th><td>28</td> <td>25.8M</td> <td>1.4M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Urdu-English (1,371,930 sentence pairs, 41.70M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ur.txt.zip">1.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ve plain text' href="download.php?f=CCAligned/v1/mono/ve.txt.gz">ve</a>
</th><td>1</td> <td>26.2k</td> <td>2.0k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Venda-English (1,556 sentence pairs, 44.62k words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-ve.txt.zip">1.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized vi plain text' href="download.php?f=CCAligned/v1/mono/vi.txt.gz">vi</a>
</th><td>248</td> <td>204.3M</td> <td>14.9M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Vietnamese-English (12,394,417 sentence pairs, 310.55M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-vi.txt.zip">12.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized wo plain text' href="download.php?f=CCAligned/v1/mono/wo.txt.gz">wo</a>
</th><td>2</td> <td>0.6M</td> <td>94.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Wolof-English (88,442 sentence pairs, 0.80M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-wo.txt.zip">88.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized xh plain text' href="download.php?f=CCAligned/v1/mono/xh.txt.gz">xh</a>
</th><td>3</td> <td>1.6M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Xhosa-English (132,571 sentence pairs, 3.00M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-xh.txt.zip">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized yo plain text' href="download.php?f=CCAligned/v1/mono/yo.txt.gz">yo</a>
</th><td>4</td> <td>3.6M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Yoruba-English (175,193 sentence pairs, 5.71M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-yo.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh_CN plain text' href="download.php?f=CCAligned/v1/mono/zh_CN.txt.gz">zh_CN</a>
</th><td>304</td> <td>103.5M</td> <td>15.3M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Chinese-English (15,181,417 sentence pairs, 198.30M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-zh_CN.txt.zip">15.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh_TW plain text' href="download.php?f=CCAligned/v1/mono/zh_TW.txt.gz">zh_TW</a>
</th><td>176</td> <td>55.3M</td> <td>8.8M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Chinese-English (8,778,973 sentence pairs, 92.95M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-zh_TW.txt.zip">8.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zu plain text' href="download.php?f=CCAligned/v1/mono/zu.txt.gz">zu</a>
</th><td>3</td> <td>1.7M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Zulu-English (126,103 sentence pairs, 2.99M words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-zu.txt.zip">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zz plain text' href="download.php?f=CCAligned/v1/mono/zz.txt.gz">zz</a>
</th><td>1</td> <td>0.4k</td> <td>34</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='zz-English (35 sentence pairs, 0.44k words) - Moses format' href="download.php?f=CCAligned/v1/moses/en-zz.txt.zip">35</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>