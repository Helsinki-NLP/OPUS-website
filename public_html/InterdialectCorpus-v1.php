<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>InterdialectCorpus</title>
<link rev="made" href="mailto:opus-project">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>InterdialectCorpus v1</h1>InterdialectCorpus is a parallel corpus of Kurdish (Sorani and Kurmanji) and English available from <a href="https://github.com/KurdishBLARK/InterdialectCorpus">https://github.com/KurdishBLARK/InterdialectCorpus</a>.<p>3 languages, 2 bitexts<br>total number of files: 4<br>total number of tokens: 0.11M<br>total number of sentence fragments: 4.89k<br><p>Please cite <pre>@misc{ahmadi2020leveraging,<br /> title={Leveraging Multilingual News Websites for Building a Kurdish Parallel Corpus}, <br /> author={Sina Ahmadi and Hossein Hassani and Daban Q. Jaff},<br /> year={2020},<br /> eprint={2010.01554},<br /> archivePrefix={arXiv},<br /> primaryClass={cs.CL}<br /> }</pre> and also acknowledge OPUS for providing this package.<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> CC BY-NC-SA 4.0<br/></p><h3>Release history:</h3><p><ul><li><a href="InterdialectCorpus-v1.php">InterdialectCorpus v1</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = untokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = tokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th>files</th><th>tokens</th><th>sentences</th>
<th><a rel="nofollow" href="InterdialectCorpus/v1/ckb_sample.html">ckb</a></th>
<th><a rel="nofollow" href="InterdialectCorpus/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="InterdialectCorpus/v1/kmr_sample.html">kmr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=InterdialectCorpus/v1/raw/ckb.zip">ckb</a></th>
<td>1</td><td>13.0k</td><td>0.7k</td><th></th>
<td><a rel="nofollow" title="ckb-English (sample file)" href="InterdialectCorpus/v1/ckb-en_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=InterdialectCorpus/v1/xml/ckb.zip">ckb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=InterdialectCorpus/v1/raw/en.zip">en</a></th>
<td>2</td><td>52.1k</td><td>2.4k</td><td bgcolor='#ffd0d0'><a rel="nofollow" title="sentence alignments for 'English-ckb' (0.7k links26.5k tokens)" href="download.php?f=InterdialectCorpus/v1/xml/ckb-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-kmr (sample file)" href="InterdialectCorpus/v1/en-kmr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=InterdialectCorpus/v1/xml/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=InterdialectCorpus/v1/raw/kmr.zip">kmr</a></th>
<td>1</td><td>40.3k</td><td>1.8k</td><td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="sentence alignments for 'kmr-English' (1.8k links78.9k tokens)" href="download.php?f=InterdialectCorpus/v1/xml/en-kmr.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=InterdialectCorpus/v1/xml/kmr.zip">kmr</a></th></tr>
<tr><th></th>
<th>ckb</th>
<th>en</th>
<th>kmr</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized ckb plain text' href="download.php?f=InterdialectCorpus/v1/mono/ckb.tok.gz">ckb</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=InterdialectCorpus/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized kmr plain text' href="download.php?f=InterdialectCorpus/v1/mono/kmr.tok.gz">kmr</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ckb plain text' href="download.php?f=InterdialectCorpus/v1/mono/ckb.txt.gz">ckb</a>
</th><td>1</td> <td>13.0k</td> <td>0.7k</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='ckb-English (643 sentence pairs, 22.66k words) - TMX format' href="download.php?f=InterdialectCorpus/v1/tmx/ckb-en.tmx.gz">0.6k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=InterdialectCorpus/v1/mono/en.txt.gz">en</a>
</th><td>2</td> <td>52.1k</td> <td>2.4k</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='English-ckb (650 sentence pairs, 23.07k words) - Moses format' href="download.php?f=InterdialectCorpus/v1/moses/ckb-en.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='English-kmr (1,796 sentence pairs, 69.02k words) - TMX format' href="download.php?f=InterdialectCorpus/v1/tmx/en-kmr.tmx.gz">1.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kmr plain text' href="download.php?f=InterdialectCorpus/v1/mono/kmr.txt.gz">kmr</a>
</th><td>1</td> <td>40.3k</td> <td>1.8k</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='kmr-English (1,797 sentence pairs, 69.03k words) - Moses format' href="download.php?f=InterdialectCorpus/v1/moses/en-kmr.txt.zip">1.8k</a>
</td><td></td></tr></table></div><p>Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents and non-aligned sentences.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>