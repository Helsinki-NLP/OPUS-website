<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>ALT</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>ALT v2019</h1>The ALT corpus is part of the <a href="http://www2.nict.go.jp/astrec-att/member/mutiyama/ALT/">Asian Language Treebank (ALT) Project</a>, consisting of twenty thousand Myanmar-English parallel sentences from news articles. The data is distributed at <a href="http://lotus.kuee.kyoto-u.ac.jp/WAT/my-en-data/"></a><p>2 languages, total number of files: 2<br>total number of tokens: 1.28M<br>total number of sentence fragments: 36.29k<br><p>Please, acknowledge the source <a href="http://lotus.kuee.kyoto-u.ac.jp/WAT/my-en-data/">http://lotus.kuee.kyoto-u.ac.jp/WAT/my-en-data/</a> and also acknowledge the distribution of the package via OPUS.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC-BY 4.0<br/><b>Copyright:</b> For more information about the source, see <a href="https://www2.nict.go.jp/astrec-att/member/mutiyama/ALT/">https://www2.nict.go.jp/astrec-att/member/mutiyama/ALT/</a><br/></p><h3>Release history:</h3><p><ul><li><a href="ALT-v2019.php">ALT v2019</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="ALT/v2019/en_sample.html">en</a></th>
<th><a rel="nofollow" href="ALT/v2019/my_sample.html">my</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ALT/v2019/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Burmese (sample file)" href="ALT/v2019/en-my_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=ALT/v2019/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ALT/v2019/xml/my.zip">my</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Burmese-English' (18.1k links, 1.3M tokens)" href="download.php?f=ALT/v2019/xml/en-my.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=ALT/v2019/raw/my.zip">my</a></th></tr>
<tr><th></th>
<th>en</th>
<th>my</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=ALT/v2019/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized my plain text' href="download.php?f=ALT/v2019/mono/my.tok.gz">my</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=ALT/v2019/mono/en.txt.gz">en</a>
</th><td>1</td> <td>0.5M</td> <td>18.2k</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='English-Burmese (18,086 sentence pairs, 1.08M words) - TMX format' href="download.php?f=ALT/v2019/tmx/en-my.tmx.gz">18.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized my plain text' href="download.php?f=ALT/v2019/mono/my.txt.gz">my</a>
</th><td>1</td> <td>0.8M</td> <td>18.1k</td><td bgcolor="#ffffee"><a rel="nofollow" title='Burmese-English (18,089 sentence pairs, 1.08M words) - Moses format' href="download.php?f=ALT/v2019/moses/en-my.txt.zip">18.1k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>