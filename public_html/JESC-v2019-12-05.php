<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>JESC</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>JESC v2019-12-05</h1>The Japanese-English Subtitle Corpus (JESC) is distributed from <a href="https://nlp.stanford.edu/projects/jesc/">https://nlp.stanford.edu/projects/jesc/</a>. JESC aims to support the research and development of machine translation systems, information extraction, and other language processing techniques.<p>2 languages, total number of files: 2<br>total number of tokens: 48.17M<br>total number of sentence fragments: 5.60M<br><p>Please, acknowledge the source and cite the paper <a href="https://aclanthology.org/L18-1182/">JESC: Japanese-English Subtitle Corpus, LREC 2018</a> as specified on <a href="https://nlp.stanford.edu/projects/jesc/">https://nlp.stanford.edu/projects/jesc/</a> and also acknowledge the distribution of the package via OPUS.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC-BY-SA-4.0<br/></p>JESC is the product of a collaboration between Stanford University, Google Brain, and Rakuten Institute of Technology. It was created by crawling the internet for movie and tv subtitles and aligining their captions. It is one of the largest freely available EN-JA corpus, and covers the poorly represented domain of colloquial language.<h3>Release history:</h3><p><ul><li><a href="JESC-v2019-12-05.php">JESC v2019-12-05</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="JESC/v2019-12-05/en_sample.html">en</a></th>
<th><a rel="nofollow" href="JESC/v2019-12-05/ja_sample.html">ja</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=JESC/v2019-12-05/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Japanese (sample file)" href="JESC/v2019-12-05/en-ja_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=JESC/v2019-12-05/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=JESC/v2019-12-05/xml/ja.zip">ja</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (2.8M links, 48.2M tokens)" href="download.php?f=JESC/v2019-12-05/xml/en-ja.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=JESC/v2019-12-05/raw/ja.zip">ja</a></th></tr>
<tr><th></th>
<th>en</th>
<th>ja</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=JESC/v2019-12-05/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized ja plain text' href="download.php?f=JESC/v2019-12-05/mono/ja.tok.gz">ja</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=JESC/v2019-12-05/mono/en.txt.gz">en</a>
</th><td>1</td> <td>23.9M</td> <td>2.8M</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='English-Japanese (2,797,389 sentence pairs, 24.19M words) - TMX format' href="download.php?f=JESC/v2019-12-05/tmx/en-ja.tmx.gz">2.8M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ja plain text' href="download.php?f=JESC/v2019-12-05/mono/ja.txt.gz">ja</a>
</th><td>1</td> <td>24.3M</td> <td>2.8M</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Japanese-English (2,797,389 sentence pairs, 24.19M words) - Moses format' href="download.php?f=JESC/v2019-12-05/moses/en-ja.txt.zip">2.8M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact Joerg Tiedemann at the following email address: jorg.tiedemann at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>