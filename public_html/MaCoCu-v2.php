<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>MaCoCu</title>
<link rev="made" href="mailto:opus-project">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>MaCoCu v2</h1>The <a href="https://macocu.eu">MaCoCu project</a> collected monolingual and parallel data from the Internet, especially for under-resourced languages and DSI-specific data. Parallel texts have been extracted using the bitextor toolbox.<p>18 languages, 17 bitexts<br>total number of files: 70<br>total number of tokens: 1.31G<br>total number of sentence fragments: 56.06M<br><p>Please, acknowledge the MaCoCu project at <a href="https://macocu.eu">https://macocu.eu</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p></p>The data packaging is licensed under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="https://macocu.eu">https://macocu.eu</a> for more details<h3>Release history:</h3><p><ul><li><a href="MaCoCu-v2.php">MaCoCu v2</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MaCoCu/v2/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/bs_Cyrl_sample.html">bs_Cyrl</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/bs_Latn_sample.html">bs_Latn</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/el_sample.html">el</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/en_sample.html">en</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/is_sample.html">is</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/me_Cyrl_sample.html">me_Cyrl</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/me_Latn_sample.html">me_Latn</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/sr_Cyrl_sample.html">sr_Cyrl</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/sr_Latn_sample.html">sr_Latn</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="MaCoCu/v2/uk_sample.html">uk</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/bg.zip">bg</a></th>
<th></th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="MaCoCu/v2/bg-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/bg.zip">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/bs_Cyrl.zip">bs_Cyrl</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="MaCoCu/v2/bs_Cyrl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/bs_Cyrl.zip">bs_Cyrl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/bs_Latn.zip">bs_Latn</a></th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="MaCoCu/v2/bs_Latn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/bs_Latn.zip">bs_Latn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/ca.zip">ca</a></th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="MaCoCu/v2/ca-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/el.zip">el</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="MaCoCu/v2/el-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/el.zip">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (2 aligned documents, 1.8M links, 83.8M tokens)" href="download.php?f=MaCoCu/v2/xml/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (0.1M links, 4.7M tokens)" href="download.php?f=MaCoCu/v2/xml/bs_Cyrl-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (0.4M links, 20.8M tokens)" href="download.php?f=MaCoCu/v2/xml/bs_Latn-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (4 aligned documents, 3.1M links, 165.8M tokens)" href="download.php?f=MaCoCu/v2/xml/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (4 aligned documents, 3.6M links, 173.1M tokens)" href="download.php?f=MaCoCu/v2/xml/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Croatian (sample file)" href="MaCoCu/v2/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="MaCoCu/v2/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-me (sample file)" href="MaCoCu/v2/en-me_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="English-me (sample file)" href="MaCoCu/v2/en-me_Latn_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="MaCoCu/v2/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="MaCoCu/v2/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="MaCoCu/v2/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="MaCoCu/v2/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="MaCoCu/v2/en-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="MaCoCu/v2/en-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="MaCoCu/v2/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="MaCoCu/v2/en-uk_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/hr.zip">hr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (3 aligned documents, 2.3M links, 114.9M tokens)" href="download.php?f=MaCoCu/v2/xml/en-hr.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/is.zip">is</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (0.3M links, 11.9M tokens)" href="download.php?f=MaCoCu/v2/xml/en-is.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/is.zip">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/me_Cyrl.zip">me_Cyrl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'me-English' (9.5k links, 0.6M tokens)" href="download.php?f=MaCoCu/v2/xml/en-me_Cyrl.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/me_Cyrl.zip">me_Cyrl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/me_Latn.zip">me_Latn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'me-English' (0.2M links, 12.2M tokens)" href="download.php?f=MaCoCu/v2/xml/en-me_Latn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/me_Latn.zip">me_Latn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/mk.zip">mk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (0.4M links, 20.8M tokens)" href="download.php?f=MaCoCu/v2/xml/en-mk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/mk.zip">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/mt.zip">mt</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-English' (0.9M links, 74.9M tokens)" href="download.php?f=MaCoCu/v2/xml/en-mt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/mt.zip">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/sl.zip">sl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (2 aligned documents, 1.9M links, 97.6M tokens)" href="download.php?f=MaCoCu/v2/xml/en-sl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/sl.zip">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/sq.zip">sq</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (0.5M links, 27.7M tokens)" href="download.php?f=MaCoCu/v2/xml/en-sq.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/sq.zip">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/sr_Cyrl.zip">sr_Cyrl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (0.5M links, 27.8M tokens)" href="download.php?f=MaCoCu/v2/xml/en-sr_Cyrl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/sr_Cyrl.zip">sr_Cyrl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/sr_Latn.zip">sr_Latn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (2 aligned documents, 1.6M links, 81.9M tokens)" href="download.php?f=MaCoCu/v2/xml/en-sr_Latn.xml.gz">ces</a></td>
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
<td></td><td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/sr_Latn.zip">sr_Latn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/tr.zip">tr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (2 aligned documents, 1.6M links, 103.5M tokens)" href="download.php?f=MaCoCu/v2/xml/en-tr.xml.gz">ces</a></td>
<td></td>
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
<td></td><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/tr.zip">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MaCoCu/v2/xml/uk.zip">uk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (7 aligned documents, 6.4M links, 283.3M tokens)" href="download.php?f=MaCoCu/v2/xml/en-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
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
<th><a rel="nofollow" href="download.php?f=MaCoCu/v2/raw/uk.zip">uk</a></th></tr>
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
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=MaCoCu/v2/mono/bg.tok.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs_Cyrl plain text' href="download.php?f=MaCoCu/v2/mono/bs_Cyrl.tok.gz">bs_Cyrl</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs_Latn plain text' href="download.php?f=MaCoCu/v2/mono/bs_Latn.tok.gz">bs_Latn</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=MaCoCu/v2/mono/ca.tok.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=MaCoCu/v2/mono/el.tok.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=MaCoCu/v2/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=MaCoCu/v2/mono/hr.tok.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=MaCoCu/v2/mono/is.tok.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized me_Cyrl plain text' href="download.php?f=MaCoCu/v2/mono/me_Cyrl.tok.gz">me_Cyrl</a>
</th><th><a rel="nofollow" title='monolingual tokenized me_Latn plain text' href="download.php?f=MaCoCu/v2/mono/me_Latn.tok.gz">me_Latn</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=MaCoCu/v2/mono/mk.tok.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=MaCoCu/v2/mono/mt.tok.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=MaCoCu/v2/mono/sl.tok.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=MaCoCu/v2/mono/sq.tok.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr_Cyrl plain text' href="download.php?f=MaCoCu/v2/mono/sr_Cyrl.tok.gz">sr_Cyrl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr_Latn plain text' href="download.php?f=MaCoCu/v2/mono/sr_Latn.tok.gz">sr_Latn</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=MaCoCu/v2/mono/tr.tok.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=MaCoCu/v2/mono/uk.tok.gz">uk</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=MaCoCu/v2/mono/bg.txt.gz">bg</a>
</th><td>2</td> <td>41.7M</td> <td>1.9M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Bulgarian-English (1,760,777 sentence pairs, 7.04M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/bg-en.tmx.gz">1.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs_Cyrl plain text' href="download.php?f=MaCoCu/v2/mono/bs_Cyrl.txt.gz">bs_Cyrl</a>
</th><td>1</td> <td>2.2M</td> <td>0.1M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Bosnian-English (110,871 sentence pairs, 0.22M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/bs_Cyrl-en.tmx.gz">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs_Latn plain text' href="download.php?f=MaCoCu/v2/mono/bs_Latn.txt.gz">bs_Latn</a>
</th><td>1</td> <td>9.9M</td> <td>0.4M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Bosnian-English (390,368 sentence pairs, 0.78M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/bs_Latn-en.tmx.gz">0.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=MaCoCu/v2/mono/ca.txt.gz">ca</a>
</th><td>4</td> <td>86.2M</td> <td>3.3M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Catalan-English (3,130,519 sentence pairs, 12.52M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/ca-en.tmx.gz">3.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=MaCoCu/v2/mono/el.txt.gz">el</a>
</th><td>4</td> <td>87.0M</td> <td>3.8M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Greek-English (3,583,974 sentence pairs, 14.34M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/el-en.tmx.gz">3.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=MaCoCu/v2/mono/en.txt.gz">en</a>
</th><td>35</td> <td>664.3M</td> <td>27.7M</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Bulgarian (1,760,779 sentence pairs, 72.13M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/bg-en.txt.zip">1.8M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='English-Bosnian (110,872 sentence pairs, 4.10M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/bs_Cyrl-en.txt.zip">0.1M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='English-Bosnian (390,369 sentence pairs, 18.10M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/bs_Latn-en.txt.zip">0.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Catalan (3,130,523 sentence pairs, 142.86M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/ca-en.txt.zip">3.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Greek (3,583,978 sentence pairs, 151.08M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/el-en.txt.zip">3.6M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='English-Croatian (2,266,004 sentence pairs, 9.06M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-hr.tmx.gz">2.3M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='English-Icelandic (267,365 sentence pairs, 1.07M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-is.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-me (9,492 sentence pairs, 18.98k words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-me_Cyrl.tmx.gz">9.5k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='English-me (209,179 sentence pairs, 0.42M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-me_Latn.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='English-Macedonian (376,747 sentence pairs, 1.51M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-mk.tmx.gz">0.4M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='English-Maltese (925,326 sentence pairs, 3.70M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-mt.tmx.gz">0.9M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='English-Slovenian (1,875,516 sentence pairs, 7.50M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-sl.tmx.gz">1.9M</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='English-Albanian (507,537 sentence pairs, 2.03M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='English-Serbian (479,258 sentence pairs, 0.96M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-sr_Cyrl.tmx.gz">0.5M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='English-Serbian (1,589,658 sentence pairs, 3.18M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-sr_Latn.tmx.gz">1.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='English-Turkish (1,646,739 sentence pairs, 6.59M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-tr.tmx.gz">1.6M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='English-Ukrainian (6,406,287 sentence pairs, 25.63M words) - TMX format' href="download.php?f=MaCoCu/v2/tmx/en-uk.tmx.gz">6.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=MaCoCu/v2/mono/hr.txt.gz">hr</a>
</th><td>3</td> <td>54.7M</td> <td>2.4M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Croatian-English (2,266,007 sentence pairs, 99.50M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-hr.txt.zip">2.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=MaCoCu/v2/mono/is.txt.gz">is</a>
</th><td>1</td> <td>5.6M</td> <td>0.3M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Icelandic-English (267,366 sentence pairs, 10.62M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-is.txt.zip">0.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized me_Cyrl plain text' href="download.php?f=MaCoCu/v2/mono/me_Cyrl.txt.gz">me_Cyrl</a>
</th><td>1</td> <td>0.3M</td> <td>10.1k</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fff7f0"><a rel="nofollow" title='me-English (9,493 sentence pairs, 0.49M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-me_Cyrl.txt.zip">9.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized me_Latn plain text' href="download.php?f=MaCoCu/v2/mono/me_Latn.txt.gz">me_Latn</a>
</th><td>1</td> <td>5.8M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='me-English (209,180 sentence pairs, 10.74M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-me_Latn.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=MaCoCu/v2/mono/mk.txt.gz">mk</a>
</th><td>1</td> <td>10.3M</td> <td>0.4M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Macedonian-English (376,748 sentence pairs, 18.33M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-mk.txt.zip">0.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=MaCoCu/v2/mono/mt.txt.gz">mt</a>
</th><td>1</td> <td>42.2M</td> <td>1.0M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Maltese-English (925,327 sentence pairs, 53.86M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-mt.txt.zip">0.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=MaCoCu/v2/mono/sl.txt.gz">sl</a>
</th><td>2</td> <td>46.2M</td> <td>2.0M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovenian-English (1,875,518 sentence pairs, 84.96M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-sl.txt.zip">1.9M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=MaCoCu/v2/mono/sq.txt.gz">sq</a>
</th><td>1</td> <td>14.3M</td> <td>0.5M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Albanian-English (507,538 sentence pairs, 24.30M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-sq.txt.zip">0.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr_Cyrl plain text' href="download.php?f=MaCoCu/v2/mono/sr_Cyrl.txt.gz">sr_Cyrl</a>
</th><td>1</td> <td>13.1M</td> <td>0.5M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Serbian-English (479,259 sentence pairs, 24.35M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-sr_Cyrl.txt.zip">0.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr_Latn plain text' href="download.php?f=MaCoCu/v2/mono/sr_Latn.txt.gz">sr_Latn</a>
</th><td>2</td> <td>39.0M</td> <td>1.7M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Serbian-English (1,589,660 sentence pairs, 71.51M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-sr_Latn.txt.zip">1.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=MaCoCu/v2/mono/tr.txt.gz">tr</a>
</th><td>2</td> <td>50.1M</td> <td>2.9M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Turkish-English (1,646,741 sentence pairs, 89.23M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-tr.txt.zip">1.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=MaCoCu/v2/mono/uk.txt.gz">uk</a>
</th><td>7</td> <td>132.7M</td> <td>7.0M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Ukrainian-English (6,406,294 sentence pairs, 238.84M words) - Moses format' href="download.php?f=MaCoCu/v2/moses/en-uk.txt.zip">6.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>