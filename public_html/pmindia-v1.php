<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>pmindia</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>pmindia v1</h1>This directory contains the releases of the pmindia corpus. It is a parallel corpus containing 13 Indian languages, plus English, derived from the Prime Minister of Indias news updates (https://www.pmindia.gov.in/en/news-updates/). We release a sentence aligned version of the corpus, as well as the monolingual text extracted from the articles.<p>14 languages, 13 bitexts<br>total number of files: 26<br>total number of tokens: 21.37M<br>total number of sentence fragments: 0.86M<br><p>If you use the corpus, please cite: <blockquote><pre><br/> @ARTICLE{2020arXiv200109907H,<br/> author = {{Haddow}, Barry and {Kirefu}, Faheem},<br/> title = "{PMIndia -- A Collection of Parallel Corpora of Languages of India}",<br/> journal = {arXiv e-prints},<br/> keywords = {Computer Science - Computation and Language},<br/> year = "2020",<br/> month = "Jan",<br/> eid = {arXiv:2001.09907},<br/> pages = {arXiv:2001.09907},<br/> archivePrefix = {arXiv},<br/> eprint = {2001.09907}<br/> }<br/> </blockquote></pre> and also <a href="http://opus.lingfil.uu.se/LREC2012.txt">acknowledge the following article</a> if you use the OPUS packages and downloads in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC-BY-SA 4.0<br/><b>Copyright:</b> The corpus is released under the CC-BY-4.0, in other words the corpus can be freely shared and adapted as long as appropriate<br/></p>The code for crawling and aligning is available at <a href="https://github.com/bhaddow/pmindia-crawler">https://github.com/bhaddow/pmindia-crawler</a> <h3>Acknowledgements</h3> This work has received funding from the European Unions Horizon 2020 research and innovation programme under grant agreement No 825299 (Gourmet). We thank the Prime Ministers Office of the Government of India for making the content available for re-distribution.<h3>Release history:</h3><p><ul><li><a href="pmindia-v1.php">pmindia v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="pmindia/v1/as_sample.html">as</a></th>
<th><a rel="nofollow" href="pmindia/v1/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="pmindia/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="pmindia/v1/gu_sample.html">gu</a></th>
<th><a rel="nofollow" href="pmindia/v1/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="pmindia/v1/kn_sample.html">kn</a></th>
<th><a rel="nofollow" href="pmindia/v1/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="pmindia/v1/mni_sample.html">mni</a></th>
<th><a rel="nofollow" href="pmindia/v1/mr_sample.html">mr</a></th>
<th><a rel="nofollow" href="pmindia/v1/or_sample.html">or</a></th>
<th><a rel="nofollow" href="pmindia/v1/pa_sample.html">pa</a></th>
<th><a rel="nofollow" href="pmindia/v1/ta_sample.html">ta</a></th>
<th><a rel="nofollow" href="pmindia/v1/te_sample.html">te</a></th>
<th><a rel="nofollow" href="pmindia/v1/ur_sample.html">ur</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/as.zip">as</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="Assamese-English (sample file)" href="pmindia/v1/as-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/as.zip">as</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/bn.zip">bn</a></th>
<td></td>
<th></th>
<td><a rel="nofollow" title="Bengali-English (sample file)" href="pmindia/v1/bn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/bn.zip">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Assamese' (9.7k links, 0.6M tokens)" href="download.php?f=pmindia/v1/xml/as-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bengali' (29.6k links, 1.5M tokens)" href="download.php?f=pmindia/v1/xml/bn-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Gujarati (sample file)" href="pmindia/v1/en-gu_sample.html">view</a></td><td><a rel="nofollow" title="English-Hindi (sample file)" href="pmindia/v1/en-hi_sample.html">view</a></td><td><a rel="nofollow" title="English-Kannada (sample file)" href="pmindia/v1/en-kn_sample.html">view</a></td><td><a rel="nofollow" title="English-Malayalam (sample file)" href="pmindia/v1/en-ml_sample.html">view</a></td><td><a rel="nofollow" title="English-Manipuri (sample file)" href="pmindia/v1/en-mni_sample.html">view</a></td><td><a rel="nofollow" title="English-Marathi (sample file)" href="pmindia/v1/en-mr_sample.html">view</a></td><td><a rel="nofollow" title="English-Oriya (sample file)" href="pmindia/v1/en-or_sample.html">view</a></td><td><a rel="nofollow" title="English-Panjabi (sample file)" href="pmindia/v1/en-pa_sample.html">view</a></td><td><a rel="nofollow" title="English-Tamil (sample file)" href="pmindia/v1/en-ta_sample.html">view</a></td><td><a rel="nofollow" title="English-Telugu (sample file)" href="pmindia/v1/en-te_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="pmindia/v1/en-ur_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/gu.zip">gu</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gujarati-English' (49.8k links, 2.6M tokens)" href="download.php?f=pmindia/v1/xml/en-gu.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/gu.zip">gu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/hi.zip">hi</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-English' (56.8k links, 3.1M tokens)" href="download.php?f=pmindia/v1/xml/en-hi.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/hi.zip">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/kn.zip">kn</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kannada-English' (35.2k links, 1.7M tokens)" href="download.php?f=pmindia/v1/xml/en-kn.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/kn.zip">kn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/ml.zip">ml</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-English' (33.7k links, 1.6M tokens)" href="download.php?f=pmindia/v1/xml/en-ml.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/ml.zip">ml</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/mni.zip">mni</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Manipuri-English' (7.4k links, 0.3M tokens)" href="download.php?f=pmindia/v1/xml/en-mni.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/mni.zip">mni</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/mr.zip">mr</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-English' (36.1k links, 1.8M tokens)" href="download.php?f=pmindia/v1/xml/en-mr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/mr.zip">mr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/or.zip">or</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Oriya-English' (38.4k links, 1.8M tokens)" href="download.php?f=pmindia/v1/xml/en-or.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/or.zip">or</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/pa.zip">pa</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Panjabi-English' (34.4k links, 1.9M tokens)" href="download.php?f=pmindia/v1/xml/en-pa.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/pa.zip">pa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/ta.zip">ta</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-English' (39.5k links, 2.2M tokens)" href="download.php?f=pmindia/v1/xml/en-ta.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/ta.zip">ta</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/te.zip">te</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-English' (40.3k links, 1.7M tokens)" href="download.php?f=pmindia/v1/xml/en-te.xml.gz">ces</a></td>
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
<td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/te.zip">te</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1/xml/ur.zip">ur</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-English' (11.2k links, 0.5M tokens)" href="download.php?f=pmindia/v1/xml/en-ur.xml.gz">ces</a></td>
<td></td>
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
<th><a rel="nofollow" href="download.php?f=pmindia/v1/raw/ur.zip">ur</a></th></tr>
<tr><th></th>
<th>as</th>
<th>bn</th>
<th>en</th>
<th>gu</th>
<th>hi</th>
<th>kn</th>
<th>ml</th>
<th>mni</th>
<th>mr</th>
<th>or</th>
<th>pa</th>
<th>ta</th>
<th>te</th>
<th>ur</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized as plain text' href="download.php?f=pmindia/v1/mono/as.tok.gz">as</a>
</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=pmindia/v1/mono/bn.tok.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=pmindia/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized gu plain text' href="download.php?f=pmindia/v1/mono/gu.tok.gz">gu</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=pmindia/v1/mono/hi.tok.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized kn plain text' href="download.php?f=pmindia/v1/mono/kn.tok.gz">kn</a>
</th><th><a rel="nofollow" title='monolingual tokenized ml plain text' href="download.php?f=pmindia/v1/mono/ml.tok.gz">ml</a>
</th><th><a rel="nofollow" title='monolingual tokenized mni plain text' href="download.php?f=pmindia/v1/mono/mni.tok.gz">mni</a>
</th><th><a rel="nofollow" title='monolingual tokenized mr plain text' href="download.php?f=pmindia/v1/mono/mr.tok.gz">mr</a>
</th><th><a rel="nofollow" title='monolingual tokenized or plain text' href="download.php?f=pmindia/v1/mono/or.tok.gz">or</a>
</th><th><a rel="nofollow" title='monolingual tokenized pa plain text' href="download.php?f=pmindia/v1/mono/pa.tok.gz">pa</a>
</th><th><a rel="nofollow" title='monolingual tokenized ta plain text' href="download.php?f=pmindia/v1/mono/ta.tok.gz">ta</a>
</th><th><a rel="nofollow" title='monolingual tokenized te plain text' href="download.php?f=pmindia/v1/mono/te.tok.gz">te</a>
</th><th><a rel="nofollow" title='monolingual tokenized ur plain text' href="download.php?f=pmindia/v1/mono/ur.tok.gz">ur</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized as plain text' href="download.php?f=pmindia/v1/mono/as.txt.gz">as</a>
</th><td>1</td> <td>0.3M</td> <td>9.7k</td><td></td><td></td><td bgcolor="#fff1ec"><a rel="nofollow" title='Assamese-English (9,733 sentence pairs, 0.36M words) - TMX format' href="download.php?f=pmindia/v1/tmx/as-en.tmx.gz">9.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=pmindia/v1/mono/bn.txt.gz">bn</a>
</th><td>1</td> <td>1.0M</td> <td>29.6k</td><td></td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Bengali-English (29,585 sentence pairs, 0.95M words) - TMX format' href="download.php?f=pmindia/v1/tmx/bn-en.tmx.gz">29.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=pmindia/v1/mono/en.txt.gz">en</a>
</th><td>13</td> <td>8.7M</td> <td>0.4M</td><td bgcolor="#fff1ec"><a rel="nofollow" title='English-Assamese (9,733 sentence pairs, 0.36M words) - Moses format' href="download.php?f=pmindia/v1/moses/as-en.txt.zip">9.7k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='English-Bengali (29,585 sentence pairs, 0.95M words) - Moses format' href="download.php?f=pmindia/v1/moses/bn-en.txt.zip">29.6k</a>
</td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='English-Gujarati (49,845 sentence pairs, 1.79M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-gu.tmx.gz">49.8k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='English-Hindi (56,832 sentence pairs, 2.23M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-hi.tmx.gz">56.8k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='English-Kannada (35,231 sentence pairs, 1.13M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-kn.tmx.gz">35.2k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='English-Malayalam (33,670 sentence pairs, 0.96M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-ml.tmx.gz">33.7k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='English-Manipuri (7,420 sentence pairs, 0.26M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-mni.tmx.gz">7.4k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='English-Marathi (36,132 sentence pairs, 1.16M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-mr.tmx.gz">36.1k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='English-Oriya (38,360 sentence pairs, 1.30M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-or.tmx.gz">38.4k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='English-Panjabi (34,396 sentence pairs, 1.36M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-pa.tmx.gz">34.4k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='English-Tamil (39,526 sentence pairs, 1.23M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-ta.tmx.gz">39.5k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='English-Telugu (40,284 sentence pairs, 1.27M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-te.tmx.gz">40.3k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='English-Urdu (11,168 sentence pairs, 0.47M words) - TMX format' href="download.php?f=pmindia/v1/tmx/en-ur.tmx.gz">11.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gu plain text' href="download.php?f=pmindia/v1/mono/gu.txt.gz">gu</a>
</th><td>1</td> <td>1.6M</td> <td>50.5k</td><td></td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='Gujarati-English (49,845 sentence pairs, 1.79M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-gu.txt.zip">49.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=pmindia/v1/mono/hi.txt.gz">hi</a>
</th><td>1</td> <td>1.9M</td> <td>56.8k</td><td></td><td></td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Hindi-English (56,832 sentence pairs, 2.23M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-hi.txt.zip">56.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kn plain text' href="download.php?f=pmindia/v1/mono/kn.txt.gz">kn</a>
</th><td>1</td> <td>1.0M</td> <td>35.3k</td><td></td><td></td><td bgcolor="#ffffed"><a rel="nofollow" title='Kannada-English (35,233 sentence pairs, 1.13M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-kn.txt.zip">35.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ml plain text' href="download.php?f=pmindia/v1/mono/ml.txt.gz">ml</a>
</th><td>1</td> <td>0.9M</td> <td>33.7k</td><td></td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Malayalam-English (33,670 sentence pairs, 0.96M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-ml.txt.zip">33.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mni plain text' href="download.php?f=pmindia/v1/mono/mni.txt.gz">mni</a>
</th><td>1</td> <td>0.1M</td> <td>7.4k</td><td></td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Manipuri-English (7,420 sentence pairs, 0.26M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-mni.txt.zip">7.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mr plain text' href="download.php?f=pmindia/v1/mono/mr.txt.gz">mr</a>
</th><td>1</td> <td>1.0M</td> <td>36.1k</td><td></td><td></td><td bgcolor="#ffffed"><a rel="nofollow" title='Marathi-English (36,132 sentence pairs, 1.16M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-mr.txt.zip">36.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized or plain text' href="download.php?f=pmindia/v1/mono/or.txt.gz">or</a>
</th><td>1</td> <td>1.0M</td> <td>38.4k</td><td></td><td></td><td bgcolor="#ffffeb"><a rel="nofollow" title='Oriya-English (38,360 sentence pairs, 1.30M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-or.txt.zip">38.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pa plain text' href="download.php?f=pmindia/v1/mono/pa.txt.gz">pa</a>
</th><td>1</td> <td>1.2M</td> <td>34.4k</td><td></td><td></td><td bgcolor="#ffffea"><a rel="nofollow" title='Panjabi-English (34,396 sentence pairs, 1.36M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-pa.txt.zip">34.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ta plain text' href="download.php?f=pmindia/v1/mono/ta.txt.gz">ta</a>
</th><td>1</td> <td>1.4M</td> <td>39.5k</td><td></td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Tamil-English (39,527 sentence pairs, 1.23M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-ta.txt.zip">39.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized te plain text' href="download.php?f=pmindia/v1/mono/te.txt.gz">te</a>
</th><td>1</td> <td>0.9M</td> <td>40.3k</td><td></td><td></td><td bgcolor="#ffffeb"><a rel="nofollow" title='Telugu-English (40,284 sentence pairs, 1.27M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-te.txt.zip">40.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ur plain text' href="download.php?f=pmindia/v1/mono/ur.txt.gz">ur</a>
</th><td>1</td> <td>0.3M</td> <td>11.2k</td><td></td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Urdu-English (11,168 sentence pairs, 0.47M words) - Moses format' href="download.php?f=pmindia/v1/moses/en-ur.txt.zip">11.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>