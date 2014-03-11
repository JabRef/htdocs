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
  <title>Help on Strings</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>


    <h1>Help on Strings</h1>
    <p><em>Bibtex</em> supports storing constant strings using <code>@String {key = value}</code>.
    <acronym>JabRef</acronym> supports managing them using <b>BibTeX -> Edit strings</b>, which opens the <a href="StringEditorHelp.php">String Editor</a>. These values can be used
    in fields. For example, you can have:</p>
    <pre><code>@String { kopp = "Kopp, Oliver" }
@String { kubovy = "Kubovy, Jan" }
@String { et = " and " }</code></pre>
<p>and then in some entry for example: <code>@Misc{ author = kopp # et # kubovy }</code> or <code>@Misc{ author = kopp # " and " # kubovy }</code>. In the JabRef field editor, the author has to be inserted as  <code>#kopp# #et# #kubovy#</code> or <code>#kopp# and #kubovy#</code>.</p>

<p>
<acronym>JabRef</acronym> enhances the concept of Strings to add a type to those <code>@String</code>s.
The issue is how to preserve such type of a string in a bibtex file.
<acronym>JabRef</acronym>adds the type though prefixes:</p>

<ul>
<li><code>@String { aKopp = "Kopp, Oliver" }</code> is a <code>@String</code> with the type author.</li>
<li><code>@String { iMIT = "{Massachusetts Institute of Technology ({MIT})}" }</code> is a <code>@String</code> with the type of institution.</li>
<li><code>@String { anct = "Anecdote" }</code> is a <code>@String</code> of type other.</li>
<li><code>@String { lTOSCA = "Topology and Orchestration Specification for Cloud Applications" }</code> is a <code>@String</code> of type other.</li>
</ul>

<p>
Then <code>@String</code>s of type author should be used for author and editors
fields only. <code>@String</code>s of type institution should be used for
institution and organization fields only. <code>@String</code>s of type publisher
should be used only for publisher fields. And finally <code>@String</code>s of type
other can be used anywhere.
</p>

<p>
It can also happen that you will have the same institution for more types:
</p>
<ul>
<li><code>@String { aMIT = "{Massachusetts Institute of Technology ({MIT})}" }</code>
if the institution will appear as author or editor</li>
<li>
<code>@String { iMIT = "{Massachusetts Institute of Technology ({MIT})}" }</code>
if the institution will appear as institution or organization</li>
<li>
<code>@String { pMIT = "{Massachusetts Institute of Technology ({MIT}) press}" }</code> if the institution will appear as publisher.</li>
</ul>
<p>
Even if the last example may appear contradicting the intention was to
remove duplicity and unify the names of persons and institutions.
</p>


  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
