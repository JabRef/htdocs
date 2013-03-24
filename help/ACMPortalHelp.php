<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');

  // DO NOT EDIT BY HAND
  // This file is generated from jabref/src/help.
  // Run generate-htdocs-help-from-jabref-src-help.pl in the root directory
  // of the JabRef repository to regenerate the htdocs out of JabRef's help.
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Search ACM Portal</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>


    <h1>Search ACM Portal</h1>

    <p>The ACM Portal includes two databases: the ACM Digital Library that is a full text collection of every article published by ACM, including over 50 years of archives, and the Guide to Computing Literature that is a bibliographic collection from major publishers in computing with over one million entries.</p>

    <p>JabRef can download citations from the ACM Portal database.
    To use this feature, choose <b>Search -&gt; Web search</b>, and the search interface will appear in the
    side pane. Select <b>ACM Portal</b> in the dropdown menu.</p>

    <p>To start a search, enter the words of your query, and press
    <b>Enter</b> or the <b>Fetch</b> button.</p>

    <p>You may choose which database to search and you may opt to download the abstracts along with the cite information for each entry, by checking the <b>Include abstracts</b> checkbox.</p>

	<p>Frequent connections to ACM Portal may get your IP banned for hours. To avoid this, JabRef will for each search display a
        preview of the first page of entries returned by the server. You can then choose which entries to download.
	</p>

	<p>Please email Aaron Chen <b>nextAaron@gmail.com</b> for any suggestions.</p>
  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
