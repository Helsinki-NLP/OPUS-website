<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Salome</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>Salome v1</h1>This is a parallel corpus compiled from <a href="https://en.wikisource.org/wiki/Salomé">translations of Oscar Wilde’s Salomé</a>, a play originally written in French. Supported by the QuantiQual Project [Irish Research Council, COALESCE/2017/117]<p>4 languages, 6 bitexts<br>total number of files: 4<br>total number of tokens: 52.73k<br>total number of sentence fragments: 6.45k<br><p>Please, cite: <blockquote><pre>@article{poncelas2020esperanto,<br/>  title = {Using Multiple Subwords for Improving English-Esperanto Automated Literary Translation Quality},<br/>  author={Poncelas, Alberto and Buts, Jan and Hadley, James and Way, Andy}<br/>}</pre></blockquote><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> <a href="">CC-BY-SA-3.0</a><br/><b>Copyright:</b> <a href="https://creativecommons.org/licenses/by-sa/3.0/">Wikisource</a><br/></p><h3>Release history:</h3><p><ul></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="Salome/v1/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Salome/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Salome/v1/eo_sample.html">eo</a></th>
<th><a rel="nofollow" href="Salome/v1/fr_sample.html">fr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Salome/v1/xml/de.zip">de</a></th>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="Salome/v1/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Esperanto (sample file)" href="Salome/v1/de-eo_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="Salome/v1/de-fr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Salome/v1/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Salome/v1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (1.6k links, 26.3k tokens)" href="download.php?f=Salome/v1/xml/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Esperanto (sample file)" href="Salome/v1/en-eo_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="Salome/v1/en-fr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Salome/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Salome/v1/xml/eo.zip">eo</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-German' (1.6k links, 24.8k tokens)" href="download.php?f=Salome/v1/xml/de-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-English' (1.6k links, 25.3k tokens)" href="download.php?f=Salome/v1/xml/en-eo.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Esperanto-French (sample file)" href="Salome/v1/eo-fr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Salome/v1/raw/eo.zip">eo</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Salome/v1/xml/fr.zip">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (1.6k links, 27.4k tokens)" href="download.php?f=Salome/v1/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (1.6k links, 27.9k tokens)" href="download.php?f=Salome/v1/xml/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Esperanto' (1.6k links, 26.4k tokens)" href="download.php?f=Salome/v1/xml/eo-fr.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=Salome/v1/raw/fr.zip">fr</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=Salome/v1/parsed/de.zip">de</a></th>
<th><a rel="nofollow" href="download.php?f=Salome/v1/parsed/en.zip">en</a></th>
<th>eo</th>
<th><a rel="nofollow" href="download.php?f=Salome/v1/parsed/fr.zip">fr</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=Salome/v1/mono/de.tok.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=Salome/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized eo plain text' href="download.php?f=Salome/v1/mono/eo.tok.gz">eo</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=Salome/v1/mono/fr.tok.gz">fr</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=Salome/v1/mono/de.txt.gz">de</a>
</th><td>1</td> <td>12.9k</td> <td>1.6k</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-English (1,217 sentence pairs, 20.94k words) - TMX format' href="download.php?f=Salome/v1/tmx/de-en.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Esperanto (1,250 sentence pairs, 19.18k words) - TMX format' href="download.php?f=Salome/v1/tmx/de-eo.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-French (1,231 sentence pairs, 20.36k words) - TMX format' href="download.php?f=Salome/v1/tmx/de-fr.tmx.gz">1.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=Salome/v1/mono/en.txt.gz">en</a>
</th><td>1</td> <td>13.4k</td> <td>1.6k</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='English-German (1,571 sentence pairs, 22.17k words) - Moses format' href="download.php?f=Salome/v1/moses/de-en.txt.zip">1.6k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-Esperanto (1,250 sentence pairs, 19.88k words) - TMX format' href="download.php?f=Salome/v1/tmx/en-eo.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-French (1,227 sentence pairs, 21.02k words) - TMX format' href="download.php?f=Salome/v1/tmx/en-fr.tmx.gz">1.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eo plain text' href="download.php?f=Salome/v1/mono/eo.txt.gz">eo</a>
</th><td>1</td> <td>11.9k</td> <td>1.6k</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Esperanto-German (1,571 sentence pairs, 20.16k words) - Moses format' href="download.php?f=Salome/v1/moses/de-eo.txt.zip">1.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Esperanto-English (1,571 sentence pairs, 20.87k words) - Moses format' href="download.php?f=Salome/v1/moses/en-eo.txt.zip">1.6k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Esperanto-French (1,252 sentence pairs, 19.21k words) - TMX format' href="download.php?f=Salome/v1/tmx/eo-fr.tmx.gz">1.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=Salome/v1/mono/fr.txt.gz">fr</a>
</th><td>1</td> <td>14.5k</td> <td>1.6k</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='French-German (1,571 sentence pairs, 21.49k words) - Moses format' href="download.php?f=Salome/v1/moses/de-fr.txt.zip">1.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='French-English (1,571 sentence pairs, 22.20k words) - Moses format' href="download.php?f=Salome/v1/moses/en-fr.txt.zip">1.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Esperanto (1,571 sentence pairs, 20.19k words) - Moses format' href="download.php?f=Salome/v1/moses/eo-fr.txt.zip">1.6k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>