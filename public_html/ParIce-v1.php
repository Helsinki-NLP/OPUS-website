<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>ParIce</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>ParIce v1</h1>ParIce is an English-Icelandic parallel corpus for training MT systems. It consists of various subcorpora, some compiled from scratch and some collected from the internet and realigned and filtered as described in <a href="https://www.aclweb.org/anthology/W19-6115/">Barkarson and Steingrímsson, 2019. Compiling and Filtering ParIce: An English-Icelandic Parallel Corpus</a>. The data set is available from <a href="http://parice.arnastofnun.is/">http://parice.arnastofnun.is/</a><p>2 languages, total number of files: 4<br>total number of tokens: 73.64M<br>total number of sentence fragments: 4.34M<br><p>Please, cite <a href="https://www.aclweb.org/anthology/W19-6115/">Barkarson and Steingrímsson, 2019. Compiling and Filtering ParIce: An English-Icelandic Parallel Corpus</a> and also acknowledge OPUS for the distribution of the package<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC-BY-4.0<br/></p><h3>Release history:</h3><p><ul><li><a href="ParIce-v1.php">ParIce v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="ParIce/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="ParIce/v1/is_sample.html">is</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParIce/v1/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Icelandic (sample file)" href="ParIce/v1/en-is_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=ParIce/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParIce/v1/xml/is.zip">is</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (2 aligned documents, 2.1M links, 73.6M tokens)" href="download.php?f=ParIce/v1/xml/en-is.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=ParIce/v1/raw/is.zip">is</a></th></tr>
<tr><th></th>
<th>en</th>
<th>is</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=ParIce/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=ParIce/v1/mono/is.tok.gz">is</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=ParIce/v1/mono/en.txt.gz">en</a>
</th><td>2</td> <td>38.1M</td> <td>2.2M</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Icelandic (1,496,644 sentence pairs, 55.84M words) - TMX format' href="download.php?f=ParIce/v1/tmx/en-is.tmx.gz">1.5M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=ParIce/v1/mono/is.txt.gz">is</a>
</th><td>2</td> <td>35.6M</td> <td>2.2M</td><td bgcolor="#caffca"><a rel="nofollow" title='Icelandic-English (2,097,022 sentence pairs, 63.06M words) - Moses format' href="download.php?f=ParIce/v1/moses/en-is.txt.zip">2.1M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>