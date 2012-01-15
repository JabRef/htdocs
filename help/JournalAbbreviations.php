<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Journal abbreviations</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>
	
    <h1>Journal abbreviations</h1>

    <p>This feature can be configured
    under <b>Options -&gt; Manage journal abbreviations</b>.</p>

    <p>JabRef can automatically toggle journal names between
    abbreviated and unabbreviated form, as long as the names are
    contained in one of your journal lists. JabRef includes a fairly
    extensive list of journal abbreviations, but it it still likely
    to be incomplete for the purposes of many users. You can add
    abbreviations from any number of lists, all realized as external
    text files on your hard disk.</p>

    <h2>Using the feature</h2>

    <p>Journal name conversion can be accessed either from within
    the entry editor, or from the <b>Tools</b> menu. In the entry
    editor you will find a button labelled <i>Toggle
    abbreviation</i> by the <i>journal</i> field. Clicking this
    button will cause the current journal name to be switched to
    the next of three modes:</p>

    <ul>
        <li>Full name, e.g. "Aquacultural Engineering"</li>

        <li>ISO abbreviation, e.g. "Aquacult. Eng."</li>

        <li>MEDLINE abbreviation, e.g. "Aquacult Eng"</li>
    </ul>If the current journal name is not found in your journal
    lists, the field will not be modified.

    <p>To convert the journal names of many entries in bulk, you
    can select any number of entries, and choose <b>Tools -&gt;
    Abbreviate journal names (ISO)</b>, <b>Tools -&gt; Abbreviate
    journal names (MEDLINE)</b> or <b>Tools -&gt; Unabbreviate
    journal names</b>. These three actions will abbreviate and
    unabbreviate the journal names of all selected entries for
    which the journal name could be found in your journal
    lists.</p>

    <h2>Setting up your journal lists</h2>

    <p>In addition to the list included in JabRef by default, you can
    have several lists in the form of external text files linked from JabRef.
    The primary list can be edited from within JabRef.</p>

    <h3>Your personal journal abbreviations list</h3>

    <p>Your personal
    journal list is managed in the upper part of the <b>Manage
    journal abbreviations</b> window. To start building your
    personal journal abbreviations list, choose <i>New file</i>,
    and enter a filename manually or using the <i>Browse</i>
    button. If you already have a file that you want to use as a
    starting point, choose <i>Existing file</i>, and use the
    <i>Browse</i> button to choose the file. The table will update
    to show the contents of the list you have selected.</p>

    <p>The table and the tool buttons to the right allow you to
    add, remove and edit journal entries. For each entry you must
    provide the full journal name, and the ISO abbreviation (e.g.
    "Aquacultural Engineering" and "Aquacult. Eng."). To edit an
    entry, double-click its row in the table.</p>

    <p>Once you click <i>OK</i>, if you have selected a file, and
    the table contains at least one entry, the table contents will
    be stored to the selected file, and JabRef's list of journals
    will be updated.</p>

    <h3>External journal lists</h3>

    <p>In addition to your personal
    list, you can link to a number of external lists. These links
    can be set up in the lower part of the <b>Manage journal
    abbreviations</b> window. External lists are similar to the
    personal list - the only difference is that JabRef doesn't
    provide an interface for editing the external lists.</p>

    <p>To add a new external list, if necessary, click the <b>+</b>
    button to add another slot to the interface. Then use either
    the <i>Browse</i> or <i>Download</i> button next to one of the
    slots in the lower part of the window.</p>

    <ul>
        <li>The <i>Browse</i> button allows you to select an
        existing file on your computer.</li>

        <li>The <i>Download</i> button allows you to download a
        list over the internet by entering and URL, store it to a
        local file on your computer, and link to it as a journal
        list from JabRef. The URL will default to the address of a
        journal list provided from the JabRef web page. This list
        is incomplete, but may be improved in the future.</li>
    </ul>Any entry in your personal journal list will override an
    entry with the same full journal name in one of the external
    lists. Similarly, the external lists are given precedence in
    the order they are listed.
  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
