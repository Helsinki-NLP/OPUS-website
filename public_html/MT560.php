<?php include("count.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>OPUS-100 Corpus</title>
  <link rev="made" href="mailto:Joerg%20Tiedemann">
  <meta name="robots" content="NOFOLLOW">
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
  <div class="header">
    <?php include("header.php"); ?>
  </div>

<h1>MT560 - A Many-to-English Machine Translation Dataset</h1>

This is a large scale machine translation dataset for over 500 languages to English.
This dataset is curated from various sources; please see acknowlegement section. 

<ul>
<li>Github: <a href="https://github.com/thammegowda/006-many-to-eng">https://github.com/thammegowda/006-many-to-eng</a></li>
<li>Paper:  <a href="https://arxiv.org/abs/2104.00290">https://arxiv.org/abs/2104.00290</a></li>
<li>Website: <a href="http://rtg.isi.edu/many-eng/">http://rtg.isi.edu/many-eng/</a></li>
</ul>

This dataset is collected using <a href="https://github.com/thammegowda/mtdata ">mtdata</a>


<h2>Files</h2>


<ul>
<li><a href="https://object.pouta.csc.fi/OPUS-MT560/train.raw.tsv.gz"> train.raw.tsv.gz</a>   :  Training data in raw form, before cleaning, deduping and tokenization</li>
</ul>

<ul>
<li><a href="https://object.pouta.csc.fi/OPUS-MT560/train.v1.eng.tok.gz">train.v1.eng.tok.gz</a>:  good training data, tokenized; english side</li>
<li><a href="https://object.pouta.csc.fi/OPUS-MT560/train.v1.src.tok.gz">train.v1.src.tok.gz</a>:  good training data, tokenized; source size</li>
<li><a href="https://object.pouta.csc.fi/OPUS-MT560/train.v1.lang.gz">train.v1.lang.gz</a>   :  lang ID of source side sentences</li>
<li><a href="https://object.pouta.csc.fi/OPUS-MT560/train.v1.prov.gz">train.v1.prov.gz</a>   :  provinance of training record (if you want to see where we got this record)</li>
</ul>

<ul>
<li><a href="https://object.pouta.csc.fi/OPUS-MT560/train.v1.tok.stats.tsv">train.v1.tok.stats.tsv</a>:  stats such as sentence and token count per language</li>
</ul>

<ul>
<li><a href="https://object.pouta.csc.fi/OPUS-MT560/devs-combo-shuf10k-raw+tok.tgz">devs-combo-shuf10k-raw+tok.tgz</a>:  dev data that has random 10K sentences for validation </li>
<li><a href="https://object.pouta.csc.fi/OPUS-MT560/devtests-raw+tok.tgz">devtests-raw+tok.tgz</a>  :  all the dev and test data; both raw and tokenized</li>
<li><a href="MT560/citations.txt">citations.bib</a>:  BibTeX of articles which published the datastes collected in this work</li>
</ul>

Note: train.v1.{eng.tok,src.tok,lang,prov} are plain text files after running gunzip.
They should have same number of lines. Line number is the way to cross refrence between them.


<h2>Data Size</h2>

<blockquote><pre>
(head -1 &amp;&amp; tail -1) &lt;  train.v1.tok.stats.tsv
Lang    Sents   Source  English
Total   473791770       9001780032      9072887211
</pre></blockquote>

This data set has 473M sentences, 9 Billion source tokens and 9 Billion English tokens, after deduplication and cleaning.
The raw data (train.raw.tsv.gz) is much larger.


<blockquote><pre>
$ cut -f1  train.v1.tok.stats.tsv  | grep  '^[a-z]' | wc -l
560
</pre></blockquote>

It has 560 languages on source side. Target side is English.
However, not all languages have sufficient training data.


<blockquote><pre>
cat  train.v1.tok.stats.tsv  | grep  '^[a-z]' | less  | awk -F '\t' 'int($2) &gt;= 10000' |wc -l
334
</pre></blockquote>
334 langs have at least 10,000 sentences


<blockquote><pre>
cat  train.v1.tok.stats.tsv  | grep  '^[a-z]' | less  | awk -F '\t' 'int($3) &gt;= 1000000' |wc -l
214
</pre></blockquote>

214 languages have atleast 1 Million source tokens.



<h2>Acknowledgements</h2>

All the data consolidated in this work are retrieved from various sources. If you use this dataset, please cite all the articles in `citations.bib` file. 
We are enabling this derived dataset to be easily accessible, with the intention to accelerate the reseach of language technologies to low resource languages. However, if you view this derived dataset as a violation of intellectual property rights, please let us know, so we will be happy to remove it from the corpus.

Thanks to all the amazing folks who spent years of effort in creating parallel datasets.

Most notably, these: 

<ul>
<li>OPUS  -- Thanks ^ billion</li>
 <ul>
 <li>JW300</li>
 <li>OPUS100</li>
 </ul>
<li>StatMT.org -- Thanks ^ Billion</li>
  <ul>
  <li>Lots and lots of thanks for the test sets</li>
  </ul>
<li>NeuLab for TEDTalks</li>
  <ul>
  <li>Japanese-English dataset</li>
  </ul>
<li>Wikimatrix</li>
<li>Joshua Indian Parallel Corpus</li>
<li>PMIndia Corpus</li>
<li>Paracrawl </li>
<li>IITB Hindi-English </li>
<li>TILDE MODEL</li>
</ul>


</body>
</html>
