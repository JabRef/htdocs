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

      <h3 id="tools_rightpanel"><a href="#exttools">External tools</a></h3>
      <ul>
        <li><a href="#OOtool">Export-Filter Editor</a></li>
        <li><a href="#PocketBib">PocketBib</a></li>
        <li><a href="#bibtex4word">Bibtex4Word</a></li>
        <li><a href="#feinerleiser">Feinerleiser</a></li>
        <li><a href="#bibsync">BibSync</a></li>
        <li><a href="#PrettyJabRef">PrettyJabRef</a></li>
        <li><a href="#FirefoxAddon">Firefox Addon</a></li>
      </ul>

      <h3 id="plugins_rightpanel"><a href="#plugins">Plugins</a></h3>

      <h3 id="fetchers_rightpanel"><a href="#entryfetchers">Entry fetchers</a></h3>

      <h3 id="exportfilters_rightpanel"><a href="#export_filters">Export filters</a></h3>
      <ul>
        <li><a href="#Marks_filters">Mark Schenk's HTML export filters</a></li>
        <li><a href="#Martens_filters">Marten Kooiker's RTF export filters</a></li>
        <li><a href="#Edward_Elgar_filters">Edward Elgar export filters</a></li>
        <li><a href="#IJoGGC">International Journal of Greenhouse Gas export filter</a></li>
        <li><a href="#RIS_export">RIS export format</a></li>
        <li><a href="#Chicago_Manual">Chicago Manual of Style export filters</a></li>
        <li><a href="#Turabian">Turabian export filters</a></li>
      </ul>

      <h3 id="endnote_rightpanel"><a href="#endnote_filters">Endnote filter set</a></h3>

      <h3 id="journallists_rightpanel"><a href="#abbrev_lists">Journal lists</a></h3>
      <ul>
        <li><a href="#downloadlists">Downloadable journal abbreviation lists</a></li>
        <li><a href="#contribution">Contribution to journal abbreviation lists</a></li>
        <li><a href="#availablelists">Available journal abbreviation lists</a></li>
      </ul>

    </div>

    <div id="main">

      <p style="font-weight: bold; color:turquoise">This page is not maintained any more. We really seek for help. Feel free to contribute an updated page at <a href="https://github.com/JabRef/www.jabref.org">https://github.com/JabRef/www.jabref.org</a></p>

      <h2 id="exttools">External tools</h2>

      <h3 id="OOtool">Export-Filter Editor</h3>
      <p><em>by Felix Wilke</em></p>

      <p>Using this tool you can easily create a custom export filter for JabRef to build you own bibliography style.</p>
      <p>It supports:
      <ul><li>HTML Export Filter</li>
      <li>RTF Export Filter</li>
      <li>OpenOffice/ LibreOffice Style File</li>
      <li>Saving the filter for later refinements</li>
      </ul>
      </p>

      <a href="https://sourceforge.net/projects/efe/?source=dlp">Export-Filter Editor</a>

      <h3 id="PocketBib">PocketBib</h3>
      <p><em>by Graham Dennis</em></p>

      <p>PocketBib is a BibTeX library reader for iPads and iPhones that's compatible with JabRef.  With PocketBib you can search, browse and read the linked papers in your library, and synchronise them over Dropbox.</p>

      <a href="http://www.grahamdennis.me/pocketbib/">PocketBib</a>

      <h3 id="bibtex4word">Bibtex4word</h3>
      <p><em>by Mike Brookes</em></p>
      <p>Bibtex4Word is an add-in for Microsoft Word that allows the citation of references and the insertion of a bibliography into your document using your choice of formatting style. It is lightweight, transparent and does not mess up your documents.</p>
      <a href="http://www.ee.ic.ac.uk/hp/staff/dmb/perl/index.html">Bibtex4Word</a>

    <h3 id="feinerleiser">Feinerleiser</h3>
    <p><em>by Niklas Alt</em></p>
    <p>Feinerleiser is a tool for improving the JabRef-LibreOffice integration
    when writing for the humanities. This tool can be run to finalize a document,
    providing citation features that are not supported by JabRef itself.</p>
    <a href="http://www.sourceforge.net/projects/feinerleiser/">Feinerleiser</a>

    <h3 id="bibsync">BibSync</h3>
    <p><em>by Daniel Mendler</em></p>
    <p>BibSync is a tool to synchronize your paper database with a BibTeX file, and supports
    synchronization with DOI and arXiv.</p>
    <a href="https://github.com/minad/bibsync">BibSync</a>

      <h3 id="PrettyJabRef">PrettyJabRef</h3>
      <p>Better icons for JabRef</p>
      <a href="https://github.com/theyate/PrettyJabRef">PrettyJabRef</a>

      <h3 id="FirefoxAddon">Firefox Addon</h3>
      <p><em>by Tobias Diez</em></p>
      <p>Firefox addon allowing the import of new items directly from the browser.</p>
      <a href="https://github.com/tobiasdiez/Jabref-FirefoxAddon">Firefox Addon</a>

      <h2 id="plugins">Plugins</h2>

      <p>Until version 2.11 JabRef offered a plugin framework.
      Support for that has been removed.
      See <a href="https://github.com/JabRef/jabref/issues/152">issue #152</a> for the current status of integration of the plugins into JabRef.
      </p>

      <h2 id="entryfetchers">Entry fetchers</h2>

      <p>Until version 2.11 JabRef offered a plugin framework.
      Support for that has been removed.
      See <a href="https://github.com/JabRef/jabref/issues/152">issue #152</a> for the current status of integration of the plugins into JabRef.
      </p>

      <h2 id="export_filters">Export filters</h2>

      <p><acronym>JabRef</acronym> allows you to create custom export filters. This functionality is described in the help file
      on <a href="http://jabref.sourceforge.net/help/CustomExports.php">Custom export filters</a>. Some users have created export filters that
      can be useful to many others, and on this page we provide links or direct downloads for some of these export filters.</p>

      <p>If you have created one or more export filters that you want to share with other users, please notify us,
      and we can provide a download from this page, or link to your own page.</p>


      <h3 id="Marks_filters">Mark Schenk's HTML export filters</h3>
      <p><a href="http://www.markschenk.com/tools/jabref/">Mark Schenk's
      HTML export filters</a> provide HTML listings of your reference
      list. The exported HTML comes complete with scripts for quick
      filtering of the list.</p>
      <p><i>Note: some of Mark Schenk's filters
      are distributed with JabRef as standard export filters.</i></p>



      <h2 id="endnote_filters">Endnote filter set</h2>

      <p>The default EndNote Import filter does not properly parse authors. The
      EndNote <b>Import from JabRef</b> filter does. Additionally, this filter will
      recognize a field endnotereftype that will override the default
      mapping. To install the filter, download and extract the file
      <a href="plugins/EndNote.zip">EndNote.zip</a>. Then follow the directions in the file Readme.txt.</p>

      <h3 id="Modifying_EndNote_Reference_Types">Modifying EndNote Reference Types</h3>
      <p>Several fields used by BibTeX are not part of EndNote's default
      Reference Types. While import from JabRef and export to JabRef will
      work fine without modifying reference types, the field names will not
      display correctly in EndNote (e.g. an entry window will call the pdf
      field Custom 1 instead of pdf. Additionally, these fields cannot be
      added to new entries in EndNote, since they will not appear in the
      entry window. To modify the EndNote Reference Types, extract
      EndNote.zip and follow the directions in the file readme.txt.</p>

      <h3 id="Export_to_JabRef">Export to JabRef</h3>
      <p>EndNote comes with an export style BibTeX. However, this does not
      support all BibTeX types and fields, and does not support the
      additional General Fields supported by JabRef (pdf, owner, key, etc.)
      If you wish to have these fields supported, extract EndNote.zip and
      follow the directions in the file readme.txt.</p>


      <h2 id="abbrev_lists"><acronym>JabRef</acronym> journal abbreviation lists</h2>

      <p><acronym>JabRef</acronym> can help you refactor your reference list by
      automatically abbreviating or unabbreviating journal names. This
      requires that you keep one or more lists of journal names and their
      respective abbreviations. to set up these lists, choose 
      <b>Options -> Manage journal abbreviations</b>.</p>

      <p>The format of the file is </p>
      <pre>&lt;full name&gt; = &lt;abbreviation&gt; [;shortest unique abbreviation[;frequency]].</pre>
      <p>The two last fields are not currently used, and you can actually safely omit them.
      The intention of the third field is to contain the &ldquo;shortest unique abbreviation&rdquo;, and the
      fourth field gives frequency (e.g., M for monthly). For instance:</p>
      <pre>Accounts of Chemical Research=Acc. Chem. Res.;ACHRE4;M</pre>
      <p>This was done in old versions of the &ldquo;general journals list&rdquo; primarily
      because the information was available.</p>

      <h3 id="downloadlists">Downloadable journal abbreviation lists</h3>
      <p><acronym>JabRef</acronym> includes no list of journals by default. Instead, the
      management window allows you to edit a personal list of
      journals, and to reference one or more external lists. To make this
      process more efficient for you, we offer a couple of lists from this
      web page, which can be downloaded by clicking a <b>Download</b> button
      in the <b>External files</b> section of the management window and
      entering the correct URL. You will then be asked to provide a local
      filename for the list.</p>

      <p>The download URL defaults to the general list linked below, which
      is a large list of journals, not limited to a single subject area. In
      addition there are (or will be) other, smaller, lists that contain
      journals from specific fields. To get one of these, just copy the URL
      from one of the links below, click <b>Download</b> in <acronym>JabRef</acronym>, and
      paste the URL into the query dialog that appears.</p>

      <h3 id="contribution">Contribution to journal abbreviation lists</h3>
      <p>We want to expand both the general list and the selection of
      smaller lists, so if you have set up a representative list for your
      own subject area, we would appreciate it if you share your list via
      <a href="https://github.com/JabRef/reference-abbreviations">github</a>
      or by dropping a note to our developers mailinglist.</p>

      <h3 id="availablelists">Available journal lists</h3>
      <ul>
        <li><a href="https://raw.githubusercontent.com/JabRef/reference-abbreviations/master/journals/journal_abbreviations_general.txt">General list</a></li>
        <li><a href="https://raw.githubusercontent.com/JabRef/reference-abbreviations/master/journals/journal_abbreviations_ams.txt">American Mathematical Society journals abbreviation list</a> by Tzu-Hao Wei.</li>
        <li><a href="https://github.com/timstaley/jabref-astro-abbreviations/blob/master/MNRAS_abbreviations.txt">Astronomy journals abbreviation list</a> by Tim Staley. <i>Note: Please contribute using <a href="https://github.com/timstaley/jabref-astro-abbreviations">github</a>.</i></li>
        <li><a href="https://raw.github.com/jrnold/jabref-econ-journal-abbrevs/master/aea-abbrevs.txt">Economics journal abbreviations as posted on the AEA website</a> by Jeff Arnold.</li>
        <li><a href="https://raw.githubusercontent.com/JabRef/reference-abbreviations/master/journals/journal_abbreviations_entrez.txt">Entrez journals abbreviation list</a> by Emmanuel Charpentier. <i>Note: provides Medline (dotless) abbr. only.</i></li>
        <li><a href="https://raw.githubusercontent.com/JabRef/reference-abbreviations/master/journals/journal_abbreviations_geology_physics.txt">Geology and Physics abbreviation list</a> by an <a href="https://sourceforge.net/p/jabref/patches/164/">anonymous user</a>.</li>
        <li><a href="https://raw.githubusercontent.com/JabRef/reference-abbreviations/master/journals/journal_abbreviations_ieee.txt">IEEE abbreviation list</a> by Thomas Arildsen and &ldquo;eyliu&rdquo;.</li>
        <li><a href="https://raw.githubusercontent.com/JabRef/reference-abbreviations/master/journals/journal_abbreviations_medicus.txt">Index Medicus abbreviation list</a> by Guy Tsafnat.
        <i>Note: provides Medline (dotless) abbr. only.</i></li>
        <li><a href="http://people.su.se/~alau4517/jabref.wos.txt">ISI Web of Science journal list</a> by Alistair Auffret.</li>
        <li><a href="https://raw.githubusercontent.com/JabRef/reference-abbreviations/master/journals/journal_abbreviations_lifescience.txt">Life Science abbreviation list</a> by Z&eacute; Roberto Ribeiro.</li>
        <li><a href="https://raw.githubusercontent.com/JabRef/reference-abbreviations/master/journals/journal_abbreviations_mechanical.txt">Mechanical and biomechanical abbreviation list</a> by an <a href="https://sourceforge.net/p/jabref/patches/151/">anonymous user</a>.</li>
        <li><a href="https://raw.githubusercontent.com/JabRef/reference-abbreviations/master/journals/journal_abbreviations_meteorology.txt">Meteorology journal list</a> by Thijs Heus.</li>
        <li><a href="https://raw.githubusercontent.com/JabRef/reference-abbreviations/master/journals/journal_abbreviations_sociology.txt">Sociology journal list</a> by Ronggui Huang.</li>
      </ul>
    </div>
  </div>
  <?php include("footer.php"); ?>

</body>
</html>
