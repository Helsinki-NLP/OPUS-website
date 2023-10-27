<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>SCB_MT_EN_TH</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>SCB_MT_EN_TH v1.0</h1>The AI Research Institute of Thailand (AIResearch), with the collaboration between Vidyasirimedhi Institute of Science and Technology (VISTEC) and Digital Economy Promotion Agency (depa), published this <a href="https://github.com/vistec-AI/dataset-releases/releases/tag/scb-mt-en-th-2020_v1.0">open English-Thai machine translation dataset</a>, with the sponsorship from Siam Commercial Bank (SCB), namely scb-mt-en-th-2020. The dataset contains parallel sentences from various sources such as task-based conversation, organization websites, Wikipedia articles, and government documents. To obtain parallel sentences, they hired professional and crowdsourced translators and build a module to automatically align parallel sentence pairs from documents, articles, and web pages.<p>2 languages, total number of files: 22<br>total number of tokens: 56.32M<br>total number of sentence fragments: 2.49M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use the OPUS packages and downloads in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>.</p><p><b>License:</b> <a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a><br/><b>Copyright:</b> Information about the sources is available <a href="https://github.com/vistec-AI/dataset-releases/releases/tag/scb-mt-en-th-2020_v1.0">here</a><br/></p>Simple example corpus<h3>Release history:</h3><p><ul><li><a href="SCB_MT_EN_TH-v1.0.php">SCB_MT_EN_TH v1.0</a></li></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="SCB_MT_EN_TH/v1.0/en_sample.html">en</a></th>
<th><a rel="nofollow" href="SCB_MT_EN_TH/v1.0/th_sample.html">th</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SCB_MT_EN_TH/v1.0/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Thai (sample file)" href="SCB_MT_EN_TH/v1.0/en-th_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SCB_MT_EN_TH/v1.0/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SCB_MT_EN_TH/v1.0/xml/th.zip">th</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Thai-English' (11 aligned documents, 1.0M links, 56.3M tokens)" href="download.php?f=SCB_MT_EN_TH/v1.0/xml/en-th.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=SCB_MT_EN_TH/v1.0/raw/th.zip">th</a></th></tr>
<tr><th></th>
<th>en</th>
<th>th</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=SCB_MT_EN_TH/v1.0/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized th plain text' href="download.php?f=SCB_MT_EN_TH/v1.0/mono/th.tok.gz">th</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=SCB_MT_EN_TH/v1.0/mono/en.txt.gz">en</a>
</th><td>11</td> <td>25.4M</td> <td>1.5M</td><td></td><td bgcolor="#d4ffca"><a rel="nofollow" title='English-Thai (987,109 sentence pairs, 28.36M words) - TMX format' href="download.php?f=SCB_MT_EN_TH/v1.0/tmx/en-th.tmx.gz">1.0M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized th plain text' href="download.php?f=SCB_MT_EN_TH/v1.0/mono/th.txt.gz">th</a>
</th><td>11</td> <td>30.9M</td> <td>1.0M</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Thai-English (988,260 sentence pairs, 28.40M words) - Moses format' href="download.php?f=SCB_MT_EN_TH/v1.0/moses/en-th.txt.zip">1.0M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>