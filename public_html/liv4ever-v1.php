<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>liv4ever</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>liv4ever v1</h1><p>This is the Livonian 4-lingual parallel corpus. Livonian is a Uralic / Finnic language with just about 20 fluent speakers and no native speakers (as of 2021). The texts and translations in this corpus were collected from all the digital text resources that could be found by the authors; scanned and printed materials are left for future work.<br></p> <p>The corpus includes parallel data for Livonian-Latvian, Livonian-Estonian and Livonian-English; the data has been collected in 2021. After retrieval it was normalized in terms of different orthographies of Livonian and manually sentence-aligned where needed. It was collected from the following sources, with sentence counts per language pair:<br></p> <ul> <li><b>Dictionary</b> - example sentences from the Livonian-Latvian-Estonian <a href="http://www.livones.net/lili/en/vardnica/" target="_blank">dictionary</a>;<br>liv-lv: 10&#39;388, liv-et: 10&#39;378</li> <li><b>Stalte</b> - the alphabet <a href="https://www.worldcat.org/title/jelzi-sona-abed-ja-rgandoks-lugdobrontoz/oclc/930808935" target="_blank">book</a> by Kōrli Stalte, translated into Estonian and Latvian;<br>liv-lv: 842, liv-et: 685</li> <li><b>Poetry</b> - the poetry collection <a href="https://artiklid.elnet.ee/record=b2493630~S1*est" target="_blank">book</a> &quot;Ma võtan su õnge, tursk / Ma akūb sīnda vizzõ, tūrska&quot;, with Estonian translations;<br>liv-et: 770</li> <li><b>Vääri</b> - the <a href="https://www.digar.ee/arhiiv/nlib-digar:286389" target="_blank">book</a> by Eduard Vääri about Livonian language and culture;<br>liv-et: 592</li> <li><b>Satversme</b> - translations of the <a href="https://m.likumi.lv/saistitie.php?id=57980&saistitie_id=9" target="_blank">Latvian Constitution</a> into Livonian, Estonian and English;<br>liv-en: 380, liv-lv: 414, liv-et: 413</li> <li><b>Facebook</b> - social media posts by the <a href="https://www.facebook.com/livodinstitut/" target="_blank">Livonian Institute</a> and <a href="https://www.facebook.com/livudiena" target="_blank">Livonian Days</a> with original translations;<br>liv-en: 123, liv-lv: 124, liv-et: 7<br></li> <li><b>JEFUL</b> - article abstracts from the <a href="https://jeful.ut.ee" target="_blank">Journal</a> of Estonian and Finno-Ugric Linguistics, special issues dedicated to Livonian studies, translated into Estonian and English;<br>liv-en: 36, liv-et: 49<br></li> <li><b>Trilium</b> - the <a href="http://www.livones.net/lv/norises/2018/trillium-an-anthology-of-the-work-of-three-livonian-poets" target="_blank">book</a> with a collection of Livonian poetry, foreword and afterword translated into Estonian and Latvian;<br>liv-lv: 51, liv-et: 53<br></li> <li><b>Songs</b> - material crawled off <a href="http://lyricstranslate.com" target="_blank">lyricstranslate.com</a>;<br>liv-en: 54, liv-lv: 54, liv-fr: 31<br></li> </ul> <p>A small part of the corpus is held out in order to be used as a <b>translation benchmark (dev and test set, see below for download). </b>Its material was manually translated in order to have each sentence translated in all four languages (Livonian-English-Latvian-Estonian). The material sources and resulting sentence counts:<br></p> <ul> <li><b>Livones.net</b> - web crawl of the Livonian culture, language and history <a href="http://www.livones.net/en" target="_blank">web portal</a>;<br>163 sentences<br></li> <li><b>Stalte</b> - 310 sentences</li> <li><b>Dictionary</b> - 298 sentences</li> <li><b>Facebook</b> - 189 sentences</li> <li><b>Satversme</b> - 188 sentences</li> <li><b>Trilium</b> - 172 sentences</li> <li><b>JEFUL</b> - 120 sentences<br></li> </ul> <p>5 languages, 4 bitexts<br>total number of files: 38<br>total number of tokens: 0.40M<br>total number of sentence fragments: 54.74k<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC BY-SA<br/></p><p><h3>Other Download Packages</h3> <ul> <li>Independent development set: <a href="https://object.pouta.csc.fi/OPUS-liv4ever/v1/src/liv4ever-dev.tgz">liv4ever-dev.tgz</a></li> <li>Independent test set: <a href="https://object.pouta.csc.fi/OPUS-liv4ever/v1/src/liv4ever-test.tgz">liv4ever-test.tgz</a></li> <li>Original training set: <a href="https://object.pouta.csc.fi/OPUS-liv4ever/v1/src/liv4ever-train.tgz">liv4ever-train.tgz</a></li> </ul><h3>Release history:</h3><p><ul><li><a href="liv4ever-v1.php">liv4ever v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="liv4ever/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="liv4ever/v1/et_sample.html">et</a></th>
<th><a rel="nofollow" href="liv4ever/v1/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="liv4ever/v1/liv_sample.html">liv</a></th>
<th><a rel="nofollow" href="liv4ever/v1/lv_sample.html">lv</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=liv4ever/v1/xml/en.zip">en</a></th>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="English-liv (sample file)" href="liv4ever/v1/en-liv_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=liv4ever/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=liv4ever/v1/xml/et.zip">et</a></th>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Estonian-liv (sample file)" href="liv4ever/v1/et-liv_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=liv4ever/v1/raw/et.zip">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=liv4ever/v1/xml/fr.zip">fr</a></th>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="French-liv (sample file)" href="liv4ever/v1/fr-liv_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=liv4ever/v1/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=liv4ever/v1/xml/liv.zip">liv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'liv-English' (4 aligned documents, 0.6k links, 35.5k tokens)" href="download.php?f=liv4ever/v1/xml/en-liv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'liv-Estonian' (8 aligned documents, 14.6k links, 0.2M tokens)" href="download.php?f=liv4ever/v1/xml/et-liv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'liv-French' (31 links, 0.4k tokens)" href="download.php?f=liv4ever/v1/xml/fr-liv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="liv-Latvian (sample file)" href="liv4ever/v1/liv-lv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=liv4ever/v1/raw/liv.zip">liv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=liv4ever/v1/xml/lv.zip">lv</a></th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-liv' (6 aligned documents, 12.0k links, 0.2M tokens)" href="download.php?f=liv4ever/v1/xml/liv-lv.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=liv4ever/v1/raw/lv.zip">lv</a></th></tr>
<tr><th></th>
<th>en</th>
<th>et</th>
<th>fr</th>
<th>liv</th>
<th>lv</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=liv4ever/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=liv4ever/v1/mono/et.tok.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=liv4ever/v1/mono/fr.tok.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized liv plain text' href="download.php?f=liv4ever/v1/mono/liv.tok.gz">liv</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=liv4ever/v1/mono/lv.tok.gz">lv</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=liv4ever/v1/mono/en.txt.gz">en</a>
</th><td>4</td> <td>13.2k</td> <td>0.6k</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-liv (585 sentence pairs, 19.82k words) - TMX format' href="download.php?f=liv4ever/v1/tmx/en-liv.tmx.gz">0.6k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=liv4ever/v1/mono/et.txt.gz">et</a>
</th><td>8</td> <td>94.7k</td> <td>14.7k</td><td></td><td></td><td></td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Estonian-liv (14,263 sentence pairs, 0.15M words) - TMX format' href="download.php?f=liv4ever/v1/tmx/et-liv.tmx.gz">14.3k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=liv4ever/v1/mono/fr.txt.gz">fr</a>
</th><td>1</td> <td>0.2k</td> <td>31</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-liv (31 sentence pairs, 0.29k words) - TMX format' href="download.php?f=liv4ever/v1/tmx/fr-liv.tmx.gz">31</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized liv plain text' href="download.php?f=liv4ever/v1/mono/liv.txt.gz">liv</a>
</th><td>19</td> <td>0.2M</td> <td>27.3k</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='liv-English (611 sentence pairs, 20.11k words) - Moses format' href="download.php?f=liv4ever/v1/moses/en-liv.txt.zip">0.6k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='liv-Estonian (14,611 sentence pairs, 0.15M words) - Moses format' href="download.php?f=liv4ever/v1/moses/et-liv.txt.zip">14.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='liv-French (32 sentence pairs, 0.30k words) - Moses format' href="download.php?f=liv4ever/v1/moses/fr-liv.txt.zip">32</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='liv-Latvian (11,733 sentence pairs, 0.12M words) - TMX format' href="download.php?f=liv4ever/v1/tmx/liv-lv.tmx.gz">11.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=liv4ever/v1/mono/lv.txt.gz">lv</a>
</th><td>6</td> <td>78.3k</td> <td>12.0k</td><td></td><td></td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Latvian-liv (12,012 sentence pairs, 0.12M words) - Moses format' href="download.php?f=liv4ever/v1/moses/liv-lv.txt.zip">12.0k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>