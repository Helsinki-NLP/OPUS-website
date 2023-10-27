<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Anuvaad</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>Anuvaad v1</h1>This repository contains parallel language corpus links for popular Indian languages developed as part of the <a href="http://anuvaad.org/">Anuvaad project</a>. The Anuvaad Parallel Corpus is available from <a href="https://github.com/project-anuvaad/anuvaad-parallel-corpus">https://github.com/project-anuvaad/anuvaad-parallel-corpus</a>.<p>13 languages, 12 bitexts<br>total number of files: 387<br>total number of tokens: 1.07G<br>total number of sentence fragments: 37.02M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use the OPUS packages and downloads in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC-BY-4.0<br/></p>Please reach out to nlp-nmt@tarento.com for any clarification/interpretation/usage of the linked datasets.<h3>Release history:</h3><p><ul><li><a href="Anuvaad-v1.php">Anuvaad v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="Anuvaad/v1/as_sample.html">as</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/gu_sample.html">gu</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/kn_sample.html">kn</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/mr_sample.html">mr</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/or_sample.html">or</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/pa_sample.html">pa</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/ta_sample.html">ta</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/te_sample.html">te</a></th>
<th><a rel="nofollow" href="Anuvaad/v1/ur_sample.html">ur</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/as.zip">as</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="Assamese-English (sample file)" href="Anuvaad/v1/as-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/as.zip">as</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/bn.zip">bn</a></th>
<td></td>
<th></th>
<td><a rel="nofollow" title="Bengali-English (sample file)" href="Anuvaad/v1/bn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/bn.zip">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Assamese' (3 aligned documents, 47.2k links, 2.8M tokens)" href="download.php?f=Anuvaad/v1/xml/as-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bengali' (0 tokens)" href="download.php?f=Anuvaad/v1/xml/bn-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Gujarati (sample file)" href="Anuvaad/v1/en-gu_sample.html">view</a></td><td><a rel="nofollow" title="English-Hindi (sample file)" href="Anuvaad/v1/en-hi_sample.html">view</a></td><td><a rel="nofollow" title="English-Kannada (sample file)" href="Anuvaad/v1/en-kn_sample.html">view</a></td><td><a rel="nofollow" title="English-Malayalam (sample file)" href="Anuvaad/v1/en-ml_sample.html">view</a></td><td><a rel="nofollow" title="English-Marathi (sample file)" href="Anuvaad/v1/en-mr_sample.html">view</a></td><td><a rel="nofollow" title="English-Oriya (sample file)" href="Anuvaad/v1/en-or_sample.html">view</a></td><td><a rel="nofollow" title="English-Panjabi (sample file)" href="Anuvaad/v1/en-pa_sample.html">view</a></td><td><a rel="nofollow" title="English-Tamil (sample file)" href="Anuvaad/v1/en-ta_sample.html">view</a></td><td><a rel="nofollow" title="English-Telugu (sample file)" href="Anuvaad/v1/en-te_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="Anuvaad/v1/en-ur_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/gu.zip">gu</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-English' (9 aligned documents, 1.7M links, 108.5M tokens)" href="download.php?f=Anuvaad/v1/xml/en-gu.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/gu.zip">gu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/hi.zip">hi</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-English' (0 tokens)" href="download.php?f=Anuvaad/v1/xml/en-hi.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/hi.zip">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/kn.zip">kn</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-English' (13 aligned documents, 1.4M links, 79.3M tokens)" href="download.php?f=Anuvaad/v1/xml/en-kn.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/kn.zip">kn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/ml.zip">ml</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-English' (21 aligned documents, 1.5M links, 90.0M tokens)" href="download.php?f=Anuvaad/v1/xml/en-ml.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/ml.zip">ml</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/mr.zip">mr</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-English' (20 aligned documents, 2.6M links, 141.4M tokens)" href="download.php?f=Anuvaad/v1/xml/en-mr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/mr.zip">mr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/or.zip">or</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Oriya-English' (2 aligned documents, 92.3k links, 4.4M tokens)" href="download.php?f=Anuvaad/v1/xml/en-or.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/or.zip">or</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/pa.zip">pa</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Panjabi-English' (15 aligned documents, 1.7M links, 122.2M tokens)" href="download.php?f=Anuvaad/v1/xml/en-pa.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/pa.zip">pa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/ta.zip">ta</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-English' (21 aligned documents, 1.4M links, 88.4M tokens)" href="download.php?f=Anuvaad/v1/xml/en-ta.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/ta.zip">ta</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/te.zip">te</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-English' (15 aligned documents, 1.6M links, 81.0M tokens)" href="download.php?f=Anuvaad/v1/xml/en-te.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/te.zip">te</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Anuvaad/v1/xml/ur.zip">ur</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-English' (3 aligned documents, 0.2M links, 14.2M tokens)" href="download.php?f=Anuvaad/v1/xml/en-ur.xml.gz">ces</a></td>
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
<th><a rel="nofollow" href="download.php?f=Anuvaad/v1/raw/ur.zip">ur</a></th></tr>
<tr><th></th>
<th>as</th>
<th>bn</th>
<th>en</th>
<th>gu</th>
<th>hi</th>
<th>kn</th>
<th>ml</th>
<th>mr</th>
<th>or</th>
<th>pa</th>
<th>ta</th>
<th>te</th>
<th>ur</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized as plain text' href="download.php?f=Anuvaad/v1/mono/as.tok.gz">as</a>
</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=Anuvaad/v1/mono/bn.tok.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=Anuvaad/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized gu plain text' href="download.php?f=Anuvaad/v1/mono/gu.tok.gz">gu</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=Anuvaad/v1/mono/hi.tok.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized kn plain text' href="download.php?f=Anuvaad/v1/mono/kn.tok.gz">kn</a>
</th><th><a rel="nofollow" title='monolingual tokenized ml plain text' href="download.php?f=Anuvaad/v1/mono/ml.tok.gz">ml</a>
</th><th><a rel="nofollow" title='monolingual tokenized mr plain text' href="download.php?f=Anuvaad/v1/mono/mr.tok.gz">mr</a>
</th><th><a rel="nofollow" title='monolingual tokenized or plain text' href="download.php?f=Anuvaad/v1/mono/or.tok.gz">or</a>
</th><th><a rel="nofollow" title='monolingual tokenized pa plain text' href="download.php?f=Anuvaad/v1/mono/pa.tok.gz">pa</a>
</th><th><a rel="nofollow" title='monolingual tokenized ta plain text' href="download.php?f=Anuvaad/v1/mono/ta.tok.gz">ta</a>
</th><th><a rel="nofollow" title='monolingual tokenized te plain text' href="download.php?f=Anuvaad/v1/mono/te.tok.gz">te</a>
</th><th><a rel="nofollow" title='monolingual tokenized ur plain text' href="download.php?f=Anuvaad/v1/mono/ur.tok.gz">ur</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized as plain text' href="download.php?f=Anuvaad/v1/mono/as.txt.gz">as</a>
</th><td>3</td> <td>1.8M</td> <td>47.2k</td><td></td><td></td><td bgcolor="#ffffe4"><a rel="nofollow" title='Assamese-English (47,172 sentence pairs, 1.74M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/as-en.tmx.gz">47.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=Anuvaad/v1/mono/bn.txt.gz">bn</a>
</th><td>20</td> <td>29.4M</td> <td>1.0M</td><td></td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Bengali-English (783,965 sentence pairs, 22.87M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/bn-en.tmx.gz">0.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=Anuvaad/v1/mono/en.txt.gz">en</a>
</th><td>194</td> <td>445.2M</td> <td>18.7M</td><td bgcolor="#ffffe4"><a rel="nofollow" title='English-Assamese (47,177 sentence pairs, 1.74M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/as-en.txt.zip">47.2k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='English-Bengali (1,001,740 sentence pairs, 26.79M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/bn-en.txt.zip">1.0M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Gujarati (1,655,103 sentence pairs, 75.59M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/en-gu.tmx.gz">1.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hindi (4,963,347 sentence pairs, 210.55M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/en-hi.tmx.gz">5.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Kannada (1,347,258 sentence pairs, 53.27M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/en-kn.tmx.gz">1.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Malayalam (1,446,781 sentence pairs, 55.56M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/en-ml.tmx.gz">1.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='English-Marathi (2,566,818 sentence pairs, 93.69M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/en-mr.tmx.gz">2.6M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='English-Oriya (92,307 sentence pairs, 3.18M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/en-or.tmx.gz">92.3k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='English-Panjabi (1,723,881 sentence pairs, 89.13M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/en-pa.tmx.gz">1.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='English-Tamil (1,408,622 sentence pairs, 49.59M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/en-ta.tmx.gz">1.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-Telugu (1,565,067 sentence pairs, 61.55M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/en-te.tmx.gz">1.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='English-Urdu (161,265 sentence pairs, 12.96M words) - TMX format' href="download.php?f=Anuvaad/v1/tmx/en-ur.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gu plain text' href="download.php?f=Anuvaad/v1/mono/gu.txt.gz">gu</a>
</th><td>9</td> <td>63.7M</td> <td>1.7M</td><td></td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Gujarati-English (1,656,626 sentence pairs, 75.64M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/en-gu.txt.zip">1.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=Anuvaad/v1/mono/hi.txt.gz">hi</a>
</th><td>51</td> <td>177.1M</td> <td>5.0M</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hindi-English (5,029,374 sentence pairs, 212.49M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/en-hi.txt.zip">5.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kn plain text' href="download.php?f=Anuvaad/v1/mono/kn.txt.gz">kn</a>
</th><td>13</td> <td>43.4M</td> <td>1.4M</td><td></td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Kannada-English (1,352,029 sentence pairs, 53.43M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/en-kn.txt.zip">1.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ml plain text' href="download.php?f=Anuvaad/v1/mono/ml.txt.gz">ml</a>
</th><td>21</td> <td>50.8M</td> <td>1.5M</td><td></td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Malayalam-English (1,461,280 sentence pairs, 55.61M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/en-ml.txt.zip">1.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mr plain text' href="download.php?f=Anuvaad/v1/mono/mr.txt.gz">mr</a>
</th><td>20</td> <td>82.1M</td> <td>2.6M</td><td></td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Marathi-English (2,569,024 sentence pairs, 93.74M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/en-mr.txt.zip">2.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized or plain text' href="download.php?f=Anuvaad/v1/mono/or.txt.gz">or</a>
</th><td>2</td> <td>2.5M</td> <td>92.4k</td><td></td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Oriya-English (92,311 sentence pairs, 3.18M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/en-or.txt.zip">92.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pa plain text' href="download.php?f=Anuvaad/v1/mono/pa.txt.gz">pa</a>
</th><td>15</td> <td>74.2M</td> <td>1.8M</td><td></td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Panjabi-English (1,726,928 sentence pairs, 89.26M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/en-pa.txt.zip">1.7M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ta plain text' href="download.php?f=Anuvaad/v1/mono/ta.txt.gz">ta</a>
</th><td>21</td> <td>54.7M</td> <td>1.5M</td><td></td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Tamil-English (1,448,186 sentence pairs, 50.67M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/en-ta.txt.zip">1.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized te plain text' href="download.php?f=Anuvaad/v1/mono/te.txt.gz">te</a>
</th><td>15</td> <td>40.1M</td> <td>1.6M</td><td></td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Telugu-English (1,578,731 sentence pairs, 61.60M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/en-te.txt.zip">1.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ur plain text' href="download.php?f=Anuvaad/v1/mono/ur.txt.gz">ur</a>
</th><td>3</td> <td>9.5M</td> <td>0.2M</td><td></td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Urdu-English (162,051 sentence pairs, 13.01M words) - Moses format' href="download.php?f=Anuvaad/v1/moses/en-ur.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>