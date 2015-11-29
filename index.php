<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <title>JabRef reference manager</title>
  <link href='css/style.css' rel='stylesheet' type='text/css' />
</head>

<body>
  <div id="container">

    <?php include("navigation.php"); ?>

    <div id="rightpanel">

      <a href="https://github.com/JabRef/jabref/wiki/Translating-JabRef">
      <img src="images/jti.png" alt="JabRef translation initiative" /></a>

      <p>Please help us to translate <acronym>JabRef</acronym> into your language.</p>
      <p class="item_desc"><a href="https://github.com/JabRef/jabref/wiki/Translating-JabRef">See translation page for details.</a></p>


      <h3 id="Download">Download</h3>

      <p>Please consult our <a href="download.php">download page</a>.</p>

      <h3 id="News">News</h3>

      <ul class="history_column">

	<li class="item">November 16th, 2015</li>
	<li class="item_desc">Version 2.11.1</li>

	<li class="item">November 11th, 2015</li>
	<li class="item_desc">Version 2.11</li>

	<li class="item">September 10th, 2015</li>
	<li class="item_desc">Version 2.11 beta 4</li>

	<li class="item">June 21th, 2015</li>
	<li class="item_desc">Version 2.11 beta 3</li>

	<li class="item">May 19th, 2015</li>
	<li class="item_desc">Version 2.11 beta 2</li>

	<li class="item">May 17th, 2015</li>
	<li class="item_desc">Version 2.11 beta</li>

	<li class="item">March 11th, 2014</li>
	<li class="item_desc">Version 2.10</li>

	<li class="item">February 12th, 2014</li>
	<li class="item_desc">Version 2.10 beta 3</li>

	<li class="item">June 19th, 2013</li>
	<li class="item_desc">Version 2.10 beta 2</li>

	<li class="item">March 28th, 2013</li>
	<li class="item_desc">Version 2.10 beta</li>

	<li class="item">January 12th, 2013</li>
	<li class="item_desc">Version 2.9.2</li>

	<li class="item_desc"><a href="revisionhistory.php">Older versions</a></li>

      </ul>
    </div>

    <div id="main">
      <h3 id="about">Migration</h3>
      <p>This page is being migrated to <a href="http://www.jabref.org">www.jabref.org</a>. Help wanted.</p>

      <h3 id="about">About</h3>

      <p><acronym>JabRef</acronym> is an open source
      bibliography reference manager. The native file format used
      by <acronym>JabRef</acronym> is <acronym>BibTeX</acronym>,
      the standard <acronym>LaTeX</acronym> bibliography format.
      <acronym>JabRef</acronym> runs on the Java VM (version
      1.6 or newer), and should work equally well on Windows,
      Linux and Mac OS X.</p>

      <p><acronym>BibTeX</acronym> is an application and a bibliography file format
      written by Oren Patashnik and Leslie Lamport for the <acronym>LaTeX</acronym>
      document preparation system. General information can be found on the
      <a href="http://www.bibtex.org">official <acronym>BibTeX</acronym> homepage</a>.</p>

      <p>Bibliographies generated by <acronym>LaTeX</acronym> and <acronym>BibTeX</acronym>
      from a <acronym>BibTeX</acronym> file can be formatted to suit any reference list
      specifications through the use of different <acronym>BibTeX</acronym> style
      files. There currently is no <acronym>BibTeX</acronym> style database.
      See <a href="http://tex.stackexchange.com/questions/152490/bibtex-style-database">StackExchange</a> for more information.</p>

      <h3 id="features">Features</h3>

      <ul class="features_column">

        <li class="feature">Advanced <acronym>BibTeX</acronym> editor</li>
        <li class="feature_desc">
	  Detailed editing of <acronym>BibTeX</acronym> entries.
	</li>

	<li class="feature">Search functions</li>
        <li class="feature_desc">
          Search a pattern in the whole bibliography.
        </li>

	<li class="feature">Classification of entries</li>
        <li class="feature_desc">
          You can group entries explicitly, by keywords or any
          other fields.
        </li>

	<li class="feature">Import of various formats</li>
        <li class="feature_desc">
          BibTeXML, CSA, Refer/Endnote, ISI Web of Science,
          SilverPlatter, Medline/Pubmed (xml), Scifinder, OVID,
          INSPEC, Biblioscape, Sixpack, JStor and RIS.
        </li>

	<li class="feature">Built-in and custom export formats</li>
        <li class="feature_desc">
          HTML, Docbook, BibTeXML, MODS, RTF, Refer/Endnote and
          OpenOffice.org.
        </li>

        <li class="feature">Customization of <acronym>BibTeX</acronym> fields</li>
        <li class="feature_desc">
          You can add your own fields to any <acronym>BibTeX</acronym> entry type.
        </li>

	<li class="feature">Customization of the <acronym>JabRef</acronym> interface</li>
        <li class="feature_desc">
          Fonts, displayed fields, etc.
        </li>

	<li class="feature">Integrates to your environment</li>
        <li class="feature_desc">
          Launch external applications: PDF/PS viewers, web browser, insert citations into
          LyX, Kile, LatexEDitor, Emacs, Vim and WinEdt
        </li>

	<li class="feature">Automatic Key generation</li>
        <li class="feature_desc">
          <acronym>BibTeX</acronym> keys can be automatically generated in a customizable way
          from document data, e.g. using author names, title and year.
        </li>

	<li class="feature">Search Medline, CiteseerX, Google Scholar, IEEEXplore, and arXiv</li>
        <li class="feature_desc">Entries can be searched in external databases and BibTeX entries can be fetched from there</li>

	<li class="feature">Support for XMP Metadata in PDFs</li>
        <li class="feature_desc">Improve the workflow of sharing PDFs and bibliography information</li>

	<li class="feature">Translations</li>
        <li class="feature_desc">
          <acronym>JabRef</acronym> menus and dialog boxes are translated into
          Chinese (simplified), Danish, English, French, German, Indonesian, Italian, Japanese, Norwegian, Spanish, Turkish and Vietnamese.
        </li>

<!--
	<li class="feature">Plugin functionality</li>
        <li class="feature_desc">Please see our <a href="resources.php">resources page</a> for details.</li>
-->

      </ul>
    </div>
    <?php include("footer.php"); ?>
  </div>

</body>
</html>
