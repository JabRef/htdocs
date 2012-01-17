<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>JStor search</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>


  <h1>JStor search</h1>

   <p>To use this feature, choose <b>Search -&gt; Web search</b>, and the search interface
   will appear in the side pane. Select <b>JStor</b> in the dropdown menu.
   The JStor search relies on the BibSonomy scraper project (http://scraper.bibsonomy.org/) to
   extract information from the JStor web page.</p>

    <p>The following help was taken from the JStor website and may change if JStor does:</p>
    <ul>
      <li>You will be searching the author, title, and full-text of all types of journal content (articles, book reviews, etc.) by default</li>
      <li>Use quotation marks to search for a phrase (e.g., &quot;punctuated equilibrium&quot;)</li>
      <li>Use ti: to search for an article title, au: to search for an author (e.g., ti:&quot;two-person cooperative games&quot;, au:&quot;john nash&quot;)</li>
      <li>Use AND, OR, NOT to combine terms (e.g., ti:&quot;two-person cooperative games&quot; AND au:&quot;john nash&quot;)</li>
    </ul>

    <p>JStor is a not-for-profit organization with a dual mission to create and maintain a trusted archive of important scholarly journals, and to provide access to these journals as widely as possible. JSTOR offers researchers the ability to retrieve high-resolution, scanned images of journal issues and pages as they were originally designed, printed, and illustrated. The journals archived in JSTOR span many disciplines.</p>

    <p>JStor offers access to the following topics:</p>
    <ul>
      <li>art &amp; sciences</li>
      <li>biology</li>
      <li>business</li>
      <li>ecology &amp; botany</li>
      <li>health &amp; general sciences</li>
      <li>languages &amp; literature</li>
      <li>mathematics &amp; statistics</li>
      <li>music</li>
    </ul>

    <p>You will be prompted with the
    number of entries found, and given a choice of how many to download.
    The search provides a maximum of 200 results (8 pages of 25 hits) to
    limit the burden.</p>


  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
