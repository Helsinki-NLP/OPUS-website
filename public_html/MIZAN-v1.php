<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>MIZAN</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>MIZAN v1</h1>MIZAN: A Large Persian-English Parallel Corpus available from <a href="https://github.com/omidkashefi/Mizan/">https://github.com/omidkashefi/Mizan/</a><p>2 languages, total number of files: 2<br>total number of tokens: 27.42M<br>total number of sentence fragments: 2.07M<br><p>Please cite Kashefi, O. (2018). <a href="https://arxiv.org/abs/1801.02107v2">MIZAN: a large persian-english parallel corpus. Computing Research Repository</a>, arXiv:1801.02107. [<a href="https://dblp.uni-trier.de/rec/bibtex0/journals/corr/abs-1801-02107">bibtex</a>] and also acknoweldge OPUS for providing this service<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> <a href="https://github.com/omidkashefi/Mizan/blob/master/LICENSE.md">CC-BY-4.0</a><br/></p><h3>Release history:</h3><p><ul></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MIZAN/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="MIZAN/v1/fa_sample.html">fa</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MIZAN/v1/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Persian (sample file)" href="MIZAN/v1/en-fa_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MIZAN/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MIZAN/v1/xml/fa.zip">fa</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Persian-English' (1.0M links, 27.4M tokens)" href="download.php?f=MIZAN/v1/xml/en-fa.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=MIZAN/v1/raw/fa.zip">fa</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=MIZAN/v1/parsed/en.zip">en</a></th>
<th><a rel="nofollow" href="download.php?f=MIZAN/v1/parsed/fa.zip">fa</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=MIZAN/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized fa plain text' href="download.php?f=MIZAN/v1/mono/fa.tok.gz">fa</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=MIZAN/v1/mono/en.txt.gz">en</a>
</th><td>1</td> <td>13.6M</td> <td>1.1M</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='English-Persian (1,018,735 sentence pairs, 24.39M words) - TMX format' href="download.php?f=MIZAN/v1/tmx/en-fa.tmx.gz">1.0M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fa plain text' href="download.php?f=MIZAN/v1/mono/fa.txt.gz">fa</a>
</th><td>1</td> <td>13.8M</td> <td>1.0M</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Persian-English (1,021,597 sentence pairs, 24.40M words) - Moses format' href="download.php?f=MIZAN/v1/moses/en-fa.txt.zip">1.0M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>