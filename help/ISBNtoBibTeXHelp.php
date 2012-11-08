<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Fetching entries using the ISBN number</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>

    <h1>Fetching entries using the ISBN number</h1>

    <p>To use this feature, choose <b>Search -&gt; Web search</b>, and the
    search interface will appear in the side pane. Select <b>ISBN to BibTeX</b> in the dropdown menu.</p>

    <p>This fetcher uses <a href="http://manas.tungare.name/software/isbn-to-bibtex/">Manas Tungare's ISBN to BibTeX Converter</a>
    to convert an ISBN to a BibTeX entry.</p>

    <p>Enter the ISBN number in the search field and press <b>Enter</b> or the <b>Fetch</b>
    button. The entry will be fetched will be added to your currently active
    database. In case an error occurs, it is shown in a popup.</p>

  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
