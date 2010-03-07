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

      <a href="http://jabref.sourceforge.net/jws/jabref.jnlp">
      <img src="images/RunJabRef.png" alt="Run JabRef instantly" /></a>

      <a href="http://sourceforge.net/projects/jabref/files/jabref/2.5"><img src="images/Download-stable.png" alt="Download current stable version" /></a>

      <a href="download.php#beta"><img src="images/Download-beta.png" alt="Download latest beta version" /></a>

      <h3 id="News">News</h3>

      <ul class="history_column">
	<li class="item">March 7th, 2010</li>
	<li class="item_desc">Version 2.6beta3</li>

	<li class="item">November 1st, 2009</li>
	<li class="item_desc">Version 2.6beta2</li>

	<li class="item">September 29th, 2009</li>
	<li class="item_desc">Version 2.6beta</li>

	<li class="item">June 22th, 2009</li>
	<li class="item_desc">Version 2.5</li>

	<li class="item">May 19th, 2009</li>
	<li class="item_desc">Version 2.5beta2</li>

	<li class="item">April 21st, 2009</li>
	<li class="item_desc">Version 2.5beta</li>

	<li class="item">November 1st, 2008</li>
	<li class="item_desc">Version 2.4.2</li>

	<li class="item">October 8th, 2008</li>
	<li class="item_desc">Version 2.4.1</li>

	<li class="item">September 1st, 2008</li>
	<li class="item_desc">Version 2.4</li>

	<li class="item">March 12th, 2008</li>
	<li class="item_desc">Version 2.4beta</li>

	<li class="item">November 29th, 2007</li>
	<li class="item_desc">Version 2.3.1</li>

	<li class="item">November 8th, 2007</li>
	<li class="item_desc">Version 2.3</li>

	<li class="item">October 6th, 2007</li>
	<li class="item_desc">Version 2.3beta3</li>

	<li class="item">August 29th, 2007</li>
	<li class="item_desc">Version 2.3beta2</li>

	<li class="item">June 28th, 2007</li>
	<li class="item_desc">Version 2.3beta</li>

	<li class="item">January 30th, 2007</li>
	<li class="item_desc">Version 2.2</li>

	<li class="item">November 26th, 2006</li>
	<li class="item_desc">Version 2.2beta2</li>

	<li class="item">October 13th, 2006</li>
	<li class="item_desc">Version 2.2beta</li>

	<li class="item">August 9th, 2006</li>
	<li class="item_desc">Version 2.1</li>

	<li class="item">June 29th, 2006</li>
	<li class="item_desc">Version 2.1beta2</li>

	<li class="item">May 9th, 2006</li>
	<li class="item_desc">Version 2.1beta</li>

	<li class="item">February 2nd, 2006</li>
	<li class="item_desc">Version 2.0.1</li>

	<li class="item">January 30th, 2006</li>
	<li class="item_desc">Version 2.0</li>

	<li class="item">January 15th, 2006</li>
	<li class="item_desc">Version 2.0beta2</li>

	<li class="item">January 4th, 2006</li>
	<li class="item_desc">Version 2.0beta</li>

	<li class="item">September 15th, 2005</li>
	<li class="item_desc">Version 1.8.1</li>

	<li class="item">July 30th, 2005</li>
	<li class="item_desc">Version 1.8</li>

	<li class="item">July 13th, 2005</li>
	<li class="item_desc">Version 1.8beta2</li>

	<li class="item">June 6th, 2005</li>
	<li class="item_desc">Version 1.8beta</li>
      </ul>
    </div>

    <div id="main">
      <h3 id="about">About</h3>

      <p><acronym>JabRef</acronym> is an open source
      bibliography reference manager. The native file format used
      by <acronym>JabRef</acronym> is <acronym>BibTeX</acronym>,
      the standard <acronym>LaTeX</acronym> bibliography format.
      <acronym>JabRef</acronym> runs on the Java VM (version
      1.5 or newer), and should work equally well on Windows,
      Linux and Mac OS X.</p>

      <p><acronym>BibTeX</acronym> is an application and a bibliography file format
      written by Oren Patashnik and Leslie Lamport for the <acronym>LaTeX</acronym>
      document preparation system. <a href=
      "http://www.bibtex.org">
      General information about <acronym>BibTeX</acronym></a>.</p>

      <p>Bibliographies generated by <acronym>LaTeX</acronym> and <acronym>BibTeX</acronym> from a <acronym>BibTeX</acronym>
      file can be formatted to suit any reference list
      specifications through the use of different <acronym>BibTeX</acronym> style
      files. We support this initiative to build a searchable
      database of <acronym>BibTeX</acronym> style files, organized by journal names:
      <a href="http://jo.irisson.free.fr/bstdatabase/"><acronym>LaTeX</acronym>
      bibliography style database</a>.</p>

      <p>You can run <acronym>JabRef</acronym> instantly with Java Web Start:
      <a href="http://jabref.sourceforge.net/jws/jabref.jnlp">Run <acronym>JabRef</acronym>.</a></p>

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
          Fonts, displayed fields, etc
        </li>
	
	<li class="feature">Integrates to your environment</li>
        <li class="feature_desc">
          Launch external applications: PDF/PS viewers, web
          browser, insert citations into
          LyX, Kile, LatexEDitor, Emacs, Vim and WinEdt
        </li>
	
	<li class="feature">Automatic Key generation</li>
        <li class="feature_desc"></li>
	
	<li class="feature">Search Medline, Citeseer, IEEEXplore and arXiv</li>
        <li class="feature_desc"></li>
	
	<li class="feature">Support for XMP Metadata in PDFs</li>
        <li class="feature_desc">Improve the workflow of sharing PDFs and bibliography information</li>

	<li class="feature">Plugin functionality</li>
        <li class="feature_desc"></li>

      </ul>
    </div>
    <?php include("footer.php"); ?>
  </div>

</body>
</html>
