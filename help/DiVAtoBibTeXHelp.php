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
  <title>Fetching entries from DiVA</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>

    <h1>Fetching entries from DiVA</h1>
            
    <p><a href="http://www.diva-portal.org/">DiVA (Digitala Vetenskapliga Arkivet)</a> is a database
        with publications from about <a href="http://www.diva-portal.org/smash/aboutdiva.jsf">30</a>
        Swedish universities and colleges of higher education.
        
    <p>To use this feature, choose <b>Search -&gt; Web search</b>, and the
    search interface will appear in the side pane. Select <b>DiVA</b> in the dropdown menu.</p>

    <p>Enter the DiVA identifier, e.g., <b>diva2:260746</b> in the search field
        and press <b>Enter</b> or the <b>Fetch</b>
    button. The entry will be fetched and added to your currently active
    database. In case an error occurs, it is shown in a popup.</p>

  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
