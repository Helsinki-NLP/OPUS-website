<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>EuroPat</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>EuroPat v1</h1>Parallel corpora of patents from the United States Patent and Trademark Office and from the European Patent Organisation compiled into aligned data sets available from <a href="https://europat.net/">https://europat.net/</a><p>3 languages, 3 bitexts<br>total number of files: 3<br>total number of tokens: 1.37G<br>total number of sentence fragments: 43.66M<br><p>Please, acknowledge the EuroPat project at <a href="https://europat.net/">https://europat.net/</a>. This version is derived from the original release at their website adjusted for redistribution via the OPUS corpus collection. Please, acknowledge OPUS as well for this service.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> <a hre="https://tico-19.github.io/LICENSE.md">Creative Commons CC0 license</a><br/><b>Copyright:</b> All content is made publicly available through a Creative Commons CC0 license.<br/></p>The data is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="https://europat.net/">https://europat.net/</a> for more details<h3>Release history:</h3><p><ul></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="EuroPat/v1/de_sample.html">de</a></th>
<th><a rel="nofollow" href="EuroPat/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="EuroPat/v1/fr_sample.html">fr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v1/xml/de.zip">de</a></th>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="EuroPat/v1/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="EuroPat/v1/de-fr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v1/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (12.6M links, 1.1G tokens)" href="download.php?f=EuroPat/v1/xml/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-French (sample file)" href="EuroPat/v1/en-fr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EuroPat/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EuroPat/v1/xml/fr.zip">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (7.4k links, 664.7M tokens)" href="download.php?f=EuroPat/v1/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (9.2M links, 1.0G tokens)" href="download.php?f=EuroPat/v1/xml/en-fr.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=EuroPat/v1/raw/fr.zip">fr</a></th></tr>
<tr><th></th>
<th>de</th>
<th>en</th>
<th>fr</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=EuroPat/v1/mono/de.tok.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=EuroPat/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=EuroPat/v1/mono/fr.tok.gz">fr</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=EuroPat/v1/mono/de.txt.gz">de</a>
</th><td>1</td> <td>346.7M</td> <td>12.6M</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-English (12,614,043 sentence pairs, 706.02M words) - TMX format' href="download.php?f=EuroPat/v1/tmx/de-en.tmx.gz">12.6M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='German-French (7,366 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EuroPat/v1/tmx/de-fr.tmx.gz">7.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=EuroPat/v1/mono/en.txt.gz">en</a>
</th><td>1</td> <td>704.4M</td> <td>22.1M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-German (12,614,161 sentence pairs, 706.02M words) - Moses format' href="download.php?f=EuroPat/v1/moses/de-en.txt.zip">12.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-French (9,213,171 sentence pairs, 567.96M words) - TMX format' href="download.php?f=EuroPat/v1/tmx/en-fr.tmx.gz">9.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=EuroPat/v1/mono/fr.txt.gz">fr</a>
</th><td>1</td> <td>318.0M</td> <td>8.9M</td><td bgcolor="#ffdedd"><a rel="nofollow" title='French-German (7,422 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EuroPat/v1/moses/de-fr.txt.zip">7.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (9,213,466 sentence pairs, 567.97M words) - Moses format' href="download.php?f=EuroPat/v1/moses/en-fr.txt.zip">9.2M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>