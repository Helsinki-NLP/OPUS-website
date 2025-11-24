<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>pmindia</title>
<link rev="made" href="mailto:opus-project">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>pmindia v1b</h1>This directory contains the releases of the pmindia corpus. It is a parallel corpus containing 13 Indian languages, plus English, derived from the Prime Minister of India&apos;s news updates (https://www.pmindia.gov.in/en/news-updates/). We release a sentence aligned version of the corpus, as well as the monolingual text extracted from the articles.<p>14 languages, 13 bitexts<br>total number of files: 14<br>total number of tokens: 12.91M<br>total number of sentence fragments: 0.43M<br><p><h3>Acknowledgements</h3> This work has received funding from the European Unions Horizon 2020 research and innovation programme under grant agreement No 825299 (Gourmet). We thank the Prime Minister&apos;s Office of the Government of India for making the content available for re-distribution. If you use the corpus, please cite: <blockquote><pre><br/> @ARTICLE{2020arXiv200109907H,<br/> author = {{Haddow}, Barry and {Kirefu}, Faheem},<br/> title = "{PMIndia -- A Collection of Parallel Corpora of Languages of India}",<br/> journal = {arXiv e-prints},<br/> keywords = {Computer Science - Computation and Language},<br/> year = "2020",<br/> month = "Jan",<br/> eid = {arXiv:2001.09907},<br/> pages = {arXiv:2001.09907},<br/> archivePrefix = {arXiv},<br/> eprint = {2001.09907}<br/> }<br/> </blockquote></pre> and also <a href="http://opus.lingfil.uu.se/LREC2012.txt">acknowledge the following article</a> if you use the OPUS packages and downloads in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC-BY-SA 4.0<br/><b>Copyright:</b> The corpus is released under the CC-BY-4.0, in other words the corpus can be freely shared and adapted as long as appropriate<br/></p>The code for crawling and aligning is available at <a href="https://github.com/bhaddow/pmindia-crawler">https://github.com/bhaddow/pmindia-crawler</a>. Version 1b fixes the alignment problem for bs-en and as-en.<h3>Release history:</h3><p><ul><li><a href="pmindia-v1b.php">pmindia v1b</a></li> <li><a href="pmindia-v1.php">pmindia v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = untokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = tokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th>files</th><th>tokens</th><th>sentences</th>
<th><a rel="nofollow" href="pmindia/v1b/as_sample.html">as</a></th>
<th><a rel="nofollow" href="pmindia/v1b/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="pmindia/v1b/en_sample.html">en</a></th>
<th><a rel="nofollow" href="pmindia/v1b/gu_sample.html">gu</a></th>
<th><a rel="nofollow" href="pmindia/v1b/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="pmindia/v1b/kn_sample.html">kn</a></th>
<th><a rel="nofollow" href="pmindia/v1b/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="pmindia/v1b/mni_sample.html">mni</a></th>
<th><a rel="nofollow" href="pmindia/v1b/mr_sample.html">mr</a></th>
<th><a rel="nofollow" href="pmindia/v1b/or_sample.html">or</a></th>
<th><a rel="nofollow" href="pmindia/v1b/pa_sample.html">pa</a></th>
<th><a rel="nofollow" href="pmindia/v1b/ta_sample.html">ta</a></th>
<th><a rel="nofollow" href="pmindia/v1b/te_sample.html">te</a></th>
<th><a rel="nofollow" href="pmindia/v1b/ur_sample.html">ur</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/as.zip">as</a></th>
<td>1</td><td>0.3M</td><td>9.7k</td><th></th>
<td></td><td><a rel="nofollow" title="Assamese-English (sample file)" href="pmindia/v1b/as-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/as.zip">as</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/bn.zip">bn</a></th>
<td>1</td><td>1.0M</td><td>29.6k</td><td></td>
<th></th>
<td><a rel="nofollow" title="Bengali-English (sample file)" href="pmindia/v1b/bn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/bn.zip">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/en.zip">en</a></th>
<td>1</td><td>0.2M</td><td>11.5k</td><td bgcolor='#ffdcdb'><a rel="nofollow" title="sentence alignments for 'English-Assamese' (9.7k links0.5M tokens)" href="download.php?f=pmindia/v1b/xml/as-en.xml.gz">ces</a></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="sentence alignments for 'English-Bengali' (29.6k links1.2M tokens)" href="download.php?f=pmindia/v1b/xml/bn-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Gujarati (sample file)" href="pmindia/v1b/en-gu_sample.html">view</a></td><td><a rel="nofollow" title="English-Hindi (sample file)" href="pmindia/v1b/en-hi_sample.html">view</a></td><td><a rel="nofollow" title="English-Kannada (sample file)" href="pmindia/v1b/en-kn_sample.html">view</a></td><td><a rel="nofollow" title="English-Malayalam (sample file)" href="pmindia/v1b/en-ml_sample.html">view</a></td><td><a rel="nofollow" title="English-Manipuri (sample file)" href="pmindia/v1b/en-mni_sample.html">view</a></td><td><a rel="nofollow" title="English-Marathi (sample file)" href="pmindia/v1b/en-mr_sample.html">view</a></td><td><a rel="nofollow" title="English-Oriya (sample file)" href="pmindia/v1b/en-or_sample.html">view</a></td><td><a rel="nofollow" title="English-Panjabi (sample file)" href="pmindia/v1b/en-pa_sample.html">view</a></td><td><a rel="nofollow" title="English-Tamil (sample file)" href="pmindia/v1b/en-ta_sample.html">view</a></td><td><a rel="nofollow" title="English-Telugu (sample file)" href="pmindia/v1b/en-te_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="pmindia/v1b/en-ur_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/gu.zip">gu</a></th>
<td>1</td><td>1.6M</td><td>50.5k</td><td></td>
<td></td>
<td bgcolor='#fff7f0'><a rel="nofollow" title="sentence alignments for 'Gujarati-English' (49.8k links1.8M tokens)" href="download.php?f=pmindia/v1b/xml/en-gu.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/gu.zip">gu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/hi.zip">hi</a></th>
<td>1</td><td>1.9M</td><td>56.8k</td><td></td>
<td></td>
<td bgcolor='#fff9f0'><a rel="nofollow" title="sentence alignments for 'Hindi-English' (56.8k links2.1M tokens)" href="download.php?f=pmindia/v1b/xml/en-hi.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/hi.zip">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/kn.zip">kn</a></th>
<td>1</td><td>1.0M</td><td>35.3k</td><td></td>
<td></td>
<td bgcolor='#fff0eb'><a rel="nofollow" title="sentence alignments for 'Kannada-English' (35.2k links1.2M tokens)" href="download.php?f=pmindia/v1b/xml/en-kn.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/kn.zip">kn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/ml.zip">ml</a></th>
<td>1</td><td>0.9M</td><td>33.7k</td><td></td>
<td></td>
<td bgcolor='#fff0eb'><a rel="nofollow" title="sentence alignments for 'Malayalam-English' (33.7k links1.1M tokens)" href="download.php?f=pmindia/v1b/xml/en-ml.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/ml.zip">ml</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/mni.zip">mni</a></th>
<td>1</td><td>0.1M</td><td>7.4k</td><td></td>
<td></td>
<td bgcolor='#ffd9d8'><a rel="nofollow" title="sentence alignments for 'Manipuri-English' (7.4k links0.3M tokens)" href="download.php?f=pmindia/v1b/xml/en-mni.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/mni.zip">mni</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/mr.zip">mr</a></th>
<td>1</td><td>1.0M</td><td>36.1k</td><td></td>
<td></td>
<td bgcolor='#fff1ec'><a rel="nofollow" title="sentence alignments for 'Marathi-English' (36.1k links1.2M tokens)" href="download.php?f=pmindia/v1b/xml/en-mr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/mr.zip">mr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/or.zip">or</a></th>
<td>1</td><td>1.0M</td><td>38.4k</td><td></td>
<td></td>
<td bgcolor='#fff2ec'><a rel="nofollow" title="sentence alignments for 'Oriya-English' (38.4k links1.2M tokens)" href="download.php?f=pmindia/v1b/xml/en-or.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/or.zip">or</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/pa.zip">pa</a></th>
<td>1</td><td>1.2M</td><td>34.4k</td><td></td>
<td></td>
<td bgcolor='#fff0eb'><a rel="nofollow" title="sentence alignments for 'Panjabi-English' (34.4k links1.4M tokens)" href="download.php?f=pmindia/v1b/xml/en-pa.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/pa.zip">pa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/ta.zip">ta</a></th>
<td>1</td><td>1.4M</td><td>39.5k</td><td></td>
<td></td>
<td bgcolor='#fff3ed'><a rel="nofollow" title="sentence alignments for 'Tamil-English' (39.5k links1.7M tokens)" href="download.php?f=pmindia/v1b/xml/en-ta.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/ta.zip">ta</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/te.zip">te</a></th>
<td>1</td><td>0.9M</td><td>40.3k</td><td></td>
<td></td>
<td bgcolor='#fff3ed'><a rel="nofollow" title="sentence alignments for 'Telugu-English' (40.3k links1.2M tokens)" href="download.php?f=pmindia/v1b/xml/en-te.xml.gz">ces</a></td>
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
<td></td><th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/te.zip">te</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=pmindia/v1b/raw/ur.zip">ur</a></th>
<td>1</td><td>0.3M</td><td>11.2k</td><td></td>
<td></td>
<td bgcolor='#ffdddc'><a rel="nofollow" title="sentence alignments for 'Urdu-English' (11.2k links0.5M tokens)" href="download.php?f=pmindia/v1b/xml/en-ur.xml.gz">ces</a></td>
<td></td>
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
<th><a rel="nofollow" href="download.php?f=pmindia/v1b/xml/ur.zip">ur</a></th></tr>
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
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized as plain text' href="download.php?f=pmindia/v1b/mono/as.tok.gz">as</a>
</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=pmindia/v1b/mono/bn.tok.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=pmindia/v1b/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized gu plain text' href="download.php?f=pmindia/v1b/mono/gu.tok.gz">gu</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=pmindia/v1b/mono/hi.tok.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized kn plain text' href="download.php?f=pmindia/v1b/mono/kn.tok.gz">kn</a>
</th><th><a rel="nofollow" title='monolingual tokenized ml plain text' href="download.php?f=pmindia/v1b/mono/ml.tok.gz">ml</a>
</th><th><a rel="nofollow" title='monolingual tokenized mni plain text' href="download.php?f=pmindia/v1b/mono/mni.tok.gz">mni</a>
</th><th><a rel="nofollow" title='monolingual tokenized mr plain text' href="download.php?f=pmindia/v1b/mono/mr.tok.gz">mr</a>
</th><th><a rel="nofollow" title='monolingual tokenized or plain text' href="download.php?f=pmindia/v1b/mono/or.tok.gz">or</a>
</th><th><a rel="nofollow" title='monolingual tokenized pa plain text' href="download.php?f=pmindia/v1b/mono/pa.tok.gz">pa</a>
</th><th><a rel="nofollow" title='monolingual tokenized ta plain text' href="download.php?f=pmindia/v1b/mono/ta.tok.gz">ta</a>
</th><th><a rel="nofollow" title='monolingual tokenized te plain text' href="download.php?f=pmindia/v1b/mono/te.tok.gz">te</a>
</th><th><a rel="nofollow" title='monolingual tokenized ur plain text' href="download.php?f=pmindia/v1b/mono/ur.tok.gz">ur</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized as plain text' href="download.php?f=pmindia/v1b/mono/as.txt.gz">as</a>
</th><td>1</td> <td>0.3M</td> <td>9.7k</td><td></td><td></td><td bgcolor="#ffefea"><a rel="nofollow" title='Assamese-English (9,732 sentence pairs, 0.33M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/as-en.tmx.gz">9.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=pmindia/v1b/mono/bn.txt.gz">bn</a>
</th><td>1</td> <td>1.0M</td> <td>29.6k</td><td></td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Bengali-English (29,556 sentence pairs, 0.63M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/bn-en.tmx.gz">29.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=pmindia/v1b/mono/en.txt.gz">en</a>
</th><td>1</td> <td>0.2M</td> <td>11.5k</td><td bgcolor="#ffefea"><a rel="nofollow" title='English-Assamese (9,732 sentence pairs, 0.33M words) - Moses format' href="download.php?f=pmindia/v1b/moses/as-en.txt.zip">9.7k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='English-Bengali (29,584 sentence pairs, 0.63M words) - Moses format' href="download.php?f=pmindia/v1b/moses/bn-en.txt.zip">29.6k</a>
</td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='English-Gujarati (49,792 sentence pairs, 1.04M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-gu.tmx.gz">49.8k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='English-Hindi (56,743 sentence pairs, 1.35M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-hi.tmx.gz">56.7k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='English-Kannada (35,174 sentence pairs, 0.66M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-kn.tmx.gz">35.2k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='English-Malayalam (33,630 sentence pairs, 0.55M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-ml.tmx.gz">33.6k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='English-Manipuri (7,418 sentence pairs, 0.24M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-mni.tmx.gz">7.4k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='English-Marathi (36,088 sentence pairs, 0.71M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-mr.tmx.gz">36.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-Oriya (38,283 sentence pairs, 0.80M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-or.tmx.gz">38.3k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='English-Panjabi (34,329 sentence pairs, 0.90M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-pa.tmx.gz">34.3k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='English-Tamil (39,482 sentence pairs, 0.71M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-ta.tmx.gz">39.5k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-Telugu (40,250 sentence pairs, 0.76M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-te.tmx.gz">40.2k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='English-Urdu (11,167 sentence pairs, 0.47M words) - TMX format' href="download.php?f=pmindia/v1b/tmx/en-ur.tmx.gz">11.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gu plain text' href="download.php?f=pmindia/v1b/mono/gu.txt.gz">gu</a>
</th><td>1</td> <td>1.6M</td> <td>50.5k</td><td></td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='Gujarati-English (49,844 sentence pairs, 1.04M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-gu.txt.zip">49.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=pmindia/v1b/mono/hi.txt.gz">hi</a>
</th><td>1</td> <td>1.9M</td> <td>56.8k</td><td></td><td></td><td bgcolor="#ffffea"><a rel="nofollow" title='Hindi-English (56,831 sentence pairs, 1.36M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-hi.txt.zip">56.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kn plain text' href="download.php?f=pmindia/v1b/mono/kn.txt.gz">kn</a>
</th><td>1</td> <td>1.0M</td> <td>35.3k</td><td></td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Kannada-English (35,232 sentence pairs, 0.66M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-kn.txt.zip">35.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ml plain text' href="download.php?f=pmindia/v1b/mono/ml.txt.gz">ml</a>
</th><td>1</td> <td>0.9M</td> <td>33.7k</td><td></td><td></td><td bgcolor="#fff9f1"><a rel="nofollow" title='Malayalam-English (33,669 sentence pairs, 0.55M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-ml.txt.zip">33.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mni plain text' href="download.php?f=pmindia/v1b/mono/mni.txt.gz">mni</a>
</th><td>1</td> <td>0.1M</td> <td>7.4k</td><td></td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Manipuri-English (7,419 sentence pairs, 0.24M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-mni.txt.zip">7.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mr plain text' href="download.php?f=pmindia/v1b/mono/mr.txt.gz">mr</a>
</th><td>1</td> <td>1.0M</td> <td>36.1k</td><td></td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Marathi-English (36,131 sentence pairs, 0.71M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-mr.txt.zip">36.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized or plain text' href="download.php?f=pmindia/v1b/mono/or.txt.gz">or</a>
</th><td>1</td> <td>1.0M</td> <td>38.4k</td><td></td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Oriya-English (38,359 sentence pairs, 0.80M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-or.txt.zip">38.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pa plain text' href="download.php?f=pmindia/v1b/mono/pa.txt.gz">pa</a>
</th><td>1</td> <td>1.2M</td> <td>34.4k</td><td></td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Panjabi-English (34,395 sentence pairs, 0.90M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-pa.txt.zip">34.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ta plain text' href="download.php?f=pmindia/v1b/mono/ta.txt.gz">ta</a>
</th><td>1</td> <td>1.4M</td> <td>39.5k</td><td></td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Tamil-English (39,526 sentence pairs, 0.71M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-ta.txt.zip">39.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized te plain text' href="download.php?f=pmindia/v1b/mono/te.txt.gz">te</a>
</th><td>1</td> <td>0.9M</td> <td>40.3k</td><td></td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Telugu-English (40,283 sentence pairs, 0.76M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-te.txt.zip">40.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ur plain text' href="download.php?f=pmindia/v1b/mono/ur.txt.gz">ur</a>
</th><td>1</td> <td>0.3M</td> <td>11.2k</td><td></td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Urdu-English (11,167 sentence pairs, 0.47M words) - Moses format' href="download.php?f=pmindia/v1b/moses/en-ur.txt.zip">11.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents and non-aligned sentences.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>