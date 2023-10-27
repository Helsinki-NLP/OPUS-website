<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Joshua-IPC</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>Joshua-IPC v1</h1>This directory contains data sets for Bengali, Hindi, Malayalam, Tamil, Telugu, and Urdu. Each data set was created by taking around 100 Indian-language Wikipedia pages and obtaining four independent translations of each of the sentences in those documents.<p>7 languages, 6 bitexts<br>total number of files: 12<br>total number of tokens: 7.43M<br>total number of sentence fragments: 0.41M<br><p>The procedure used to create them, along with descriptions of initial experiments, is described in: <a href="http://www.aclweb.org/anthology/W12-3152">Constructing Parallel Corpora for Six Indian Languages via Crowdsourcing</a>. 2012. Matt Post, Chris Callison-Burch, and Miles Osborne. Proceedings of the NAACL Workshop for Statistical Machine Translation (WMT).<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC-BY 3.0<br/><b>Copyright:</b> This work is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0</a> Unported License. More information can be found in the attached LICENSE file.<br/></p>Original source: <a href="https://github.com/joshua-decoder/indian-parallel-corpora/archive/a2cd1a99.tar.gz">https://github.com/joshua-decoder/indian-parallel-corpora/archive/a2cd1a99.tar.gz</a><h3>Release history:</h3><p><ul></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="Joshua-IPC/v1/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="Joshua-IPC/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Joshua-IPC/v1/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="Joshua-IPC/v1/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="Joshua-IPC/v1/ta_sample.html">ta</a></th>
<th><a rel="nofollow" href="Joshua-IPC/v1/te_sample.html">te</a></th>
<th><a rel="nofollow" href="Joshua-IPC/v1/ur_sample.html">ur</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/xml/bn.zip">bn</a></th>
<th></th>
<td><a rel="nofollow" title="Bengali-English (sample file)" href="Joshua-IPC/v1/bn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/raw/bn.zip">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Bengali' (20.8k links, 0.8M tokens)" href="download.php?f=Joshua-IPC/v1/xml/bn-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Hindi (sample file)" href="Joshua-IPC/v1/en-hi_sample.html">view</a></td><td><a rel="nofollow" title="English-Malayalam (sample file)" href="Joshua-IPC/v1/en-ml_sample.html">view</a></td><td><a rel="nofollow" title="English-Tamil (sample file)" href="Joshua-IPC/v1/en-ta_sample.html">view</a></td><td><a rel="nofollow" title="English-Telugu (sample file)" href="Joshua-IPC/v1/en-te_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="Joshua-IPC/v1/en-ur_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/xml/hi.zip">hi</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-English' (37.7k links, 1.7M tokens)" href="download.php?f=Joshua-IPC/v1/xml/en-hi.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/raw/hi.zip">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/xml/ml.zip">ml</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-English' (29.5k links, 1.1M tokens)" href="download.php?f=Joshua-IPC/v1/xml/en-ml.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/raw/ml.zip">ml</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/xml/ta.zip">ta</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-English' (35.0k links, 1.4M tokens)" href="download.php?f=Joshua-IPC/v1/xml/en-ta.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/raw/ta.zip">ta</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/xml/te.zip">te</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-English' (43.0k links, 1.3M tokens)" href="download.php?f=Joshua-IPC/v1/xml/en-te.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/raw/te.zip">te</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/xml/ur.zip">ur</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-English' (33.8k links, 1.2M tokens)" href="download.php?f=Joshua-IPC/v1/xml/en-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=Joshua-IPC/v1/raw/ur.zip">ur</a></th></tr>
<tr><th></th>
<th>bn</th>
<th>en</th>
<th>hi</th>
<th>ml</th>
<th>ta</th>
<th>te</th>
<th>ur</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=Joshua-IPC/v1/mono/bn.tok.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=Joshua-IPC/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=Joshua-IPC/v1/mono/hi.tok.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized ml plain text' href="download.php?f=Joshua-IPC/v1/mono/ml.tok.gz">ml</a>
</th><th><a rel="nofollow" title='monolingual tokenized ta plain text' href="download.php?f=Joshua-IPC/v1/mono/ta.tok.gz">ta</a>
</th><th><a rel="nofollow" title='monolingual tokenized te plain text' href="download.php?f=Joshua-IPC/v1/mono/te.tok.gz">te</a>
</th><th><a rel="nofollow" title='monolingual tokenized ur plain text' href="download.php?f=Joshua-IPC/v1/mono/ur.tok.gz">ur</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=Joshua-IPC/v1/mono/bn.txt.gz">bn</a>
</th><td>1</td> <td>0.5M</td> <td>20.8k</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Bengali-English (19,214 sentence pairs, 0.52M words) - TMX format' href="download.php?f=Joshua-IPC/v1/tmx/bn-en.tmx.gz">19.2k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=Joshua-IPC/v1/mono/en.txt.gz">en</a>
</th><td>6</td> <td>3.0M</td> <td>0.2M</td><td bgcolor="#fff8f0"><a rel="nofollow" title='English-Bengali (20,789 sentence pairs, 0.53M words) - Moses format' href="download.php?f=Joshua-IPC/v1/moses/bn-en.txt.zip">20.8k</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='English-Hindi (36,173 sentence pairs, 1.21M words) - TMX format' href="download.php?f=Joshua-IPC/v1/tmx/en-hi.tmx.gz">36.2k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='English-Malayalam (28,505 sentence pairs, 0.64M words) - TMX format' href="download.php?f=Joshua-IPC/v1/tmx/en-ml.tmx.gz">28.5k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='English-Tamil (33,672 sentence pairs, 0.72M words) - TMX format' href="download.php?f=Joshua-IPC/v1/tmx/en-ta.tmx.gz">33.7k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='English-Telugu (41,401 sentence pairs, 0.92M words) - TMX format' href="download.php?f=Joshua-IPC/v1/tmx/en-te.tmx.gz">41.4k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='English-Urdu (32,148 sentence pairs, 1.09M words) - TMX format' href="download.php?f=Joshua-IPC/v1/tmx/en-ur.tmx.gz">32.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=Joshua-IPC/v1/mono/hi.txt.gz">hi</a>
</th><td>1</td> <td>1.0M</td> <td>37.9k</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Hindi-English (37,727 sentence pairs, 1.22M words) - Moses format' href="download.php?f=Joshua-IPC/v1/moses/en-hi.txt.zip">37.7k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ml plain text' href="download.php?f=Joshua-IPC/v1/mono/ml.txt.gz">ml</a>
</th><td>1</td> <td>0.7M</td> <td>29.5k</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Malayalam-English (29,519 sentence pairs, 0.65M words) - Moses format' href="download.php?f=Joshua-IPC/v1/moses/en-ml.txt.zip">29.5k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ta plain text' href="download.php?f=Joshua-IPC/v1/mono/ta.txt.gz">ta</a>
</th><td>1</td> <td>0.9M</td> <td>35.0k</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Tamil-English (35,028 sentence pairs, 0.72M words) - Moses format' href="download.php?f=Joshua-IPC/v1/moses/en-ta.txt.zip">35.0k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized te plain text' href="download.php?f=Joshua-IPC/v1/mono/te.txt.gz">te</a>
</th><td>1</td> <td>0.7M</td> <td>43.1k</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Telugu-English (43,039 sentence pairs, 0.92M words) - Moses format' href="download.php?f=Joshua-IPC/v1/moses/en-te.txt.zip">43.0k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ur plain text' href="download.php?f=Joshua-IPC/v1/mono/ur.txt.gz">ur</a>
</th><td>1</td> <td>0.7M</td> <td>33.8k</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Urdu-English (33,799 sentence pairs, 1.10M words) - Moses format' href="download.php?f=Joshua-IPC/v1/moses/en-ur.txt.zip">33.8k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>