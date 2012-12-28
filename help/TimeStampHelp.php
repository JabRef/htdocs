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
  <title>Entry time stamps</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>


    <h1>Entry time stamps</h1>

    <p>This feature can be toggled and configured under <b>Options -&gt;
    Preferences -&gt; General</b>.</p>

    <p>JabRef can automatically set a field to contain the date an
    entry was added to the database.</p>

    <h2>Formatting</h2>

    <p>The formatting of the time stamp is
    determined by a string containing designator words that
    indicate the position of the various parts of the date.</p>

    <p>These are some of the available designator letters (examples
    are given in parentheses for Wednesday 14th of September 2005
    at 5.45 PM):</p>

    <ul>
        <li><b>yy</b>: year (05)</li>

        <li><b>yyyy</b>: year (2005)</li>

        <li><b>MM</b>: month (09)</li>

        <li><b>dd</b>: day in month (14)</li>

        <li><b>HH</b>: hour in day (17)</li>

        <li><b>mm</b>: minute in hour (45)</li>
    </ul>These designators can be combined along with punctuation
    and whitespace. A couple of examples:

    <ul>
        <li><b>yyyy.MM.dd</b> gives <b>2005.09.14</b></li>

        <li><b>yy.MM.dd</b> gives <b>05.09.14</b></li>

        <li><b>yyyy.MM.dd HH:mm</b> gives <b>2005.09.14
        17:45</b></li>
    </ul>
  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
