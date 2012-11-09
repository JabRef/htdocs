<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Search Google Scholar</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>


    <h1>Search Google Scholar</h1>

    <p>JabRef can search and download citations from Google Scholar.
    To use this feature, choose <b>Search -&gt; Web search</b>, and the search interface will appear in the
    side pane. Select <b>Google Scholar</b> in the dropdown menu.</p>

    <p>To start a search, enter the words of your query, and press
    <b>Enter</b> or the <b>Fetch</b> button.</p>

    <p>Frequent connections to Google Scholar will cause Google to display a CAPTCHA challenge which JabRef
        cannot pass. To avoid this, JabRef will for each search display a preview of the first page of
        entries returned by the server. You can then choose which entries to download.
  	</p>

  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
