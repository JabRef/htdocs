<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <title>EndNote Export Filter</title>
  <link href='/css/style.css' rel='stylesheet' type='text/css' />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>


    <h1>EndNote Export Filter</h1>

    <h2>Export from JabRef</h2>JabRef can export databases to
    EndNote-readable files. To use this feature, choose <b>File
    -&gt; Export</b>, choose the file type <b>Endnote (txt)</b> and
    then specify the name of the export file. 

    <h2>Import to EndNote</h2>The default EndNote Import filter
    does not handle multiple authors or editors properly. There are
    two options to work around this: 

    <ol>
        <li>Use the built-in filter and fix the file later. To open
        up the file in EndNote, create a new database or open an
        old database in EndNote. Then select <b>File -&gt;
        Import</b>, click on <b>Choose File</b>, then highlight the
        exported file and click <b>Choose</b>. Click on <b>Import
        Options</b> and select <b>EndNote Import</b>. Click
        <b>Import</b> to start the import. After import, select
        <b>Edit-&gt; Change Text</b>. Change <b>Any Field</b> to
        <b>Author</b>. Enter " and " into the search field (without
        quotes). enter a return character into the change field
        (option-return on Mac OS X, ctrl-return on Windows XP).
        Click <b>Change</b>. Repeat with the <b>Secondary
        Author</b> field.</li>

        <li>Install the <i>EndNote Import from JabRef filter</i> in
        the <i>EndNote Extras</i>. Follow the instructions in
        <i>Advanced Use</i> below. To open up the file in EndNote,
        create a new database or open an old database in EndNote.
        Then select <b>File -&gt; Import</b>, click on <b>Choose
        File</b>, then highlight the exported file and click
        <b>Choose</b>. Click on <b>Import Options</b> and select
        <b>EndNote Import from JabRef</b> (if it does not appear,
        select Other filters. If it still doesn't appear, it was
        not correctly installed.) Click <b>Import</b> to start the
        import.</li>
    </ol>

    <h2>Notes</h2>The EndNote Export filter maps BibTeX entrytypes
    to EndNote reference types as follows: 
    <pre>
BibTeX entrytype -&gt; Endnote Reference Type
------------------------------------------
misc, other -&gt; Generic
unpublished -&gt; Manuscript
manual -&gt; Computer Program
article -&gt; Journal Article
book -&gt; Book
booklet -&gt; Personal Communication
inbook,incollection -&gt; Book Section
inproceedings -&gt; Conference Proceedings
techreport -&gt; Report
mastersthesis, phdthesis -&gt; Thesis
</pre>

    <h2>Corporate Authors</h2>By default, the export filter assumes
    that entries in the author or editor fields in brackets are
    corporate authors and replaces the brackets with a trailing
    comma. However, this means that entries that include LaTeX code
    in brackets will be assumed to be corporate authors and
    therefore will be improperly formatted. 

    <h2>Advanced Use: Endnote Extras</h2>

    <h3>Installing the EndNote Import from JabRef filter</h3>The
    default EndNote Import filter does not properly parse authors.
    The EndNote Import from JabRef filter does. Additionally, this
    filter will recognize a field endnotereftype that will override
    the default mapping. To install the filter, extract the EndNote
    Extras (<b>Tools -&gt; Unpack EndNote filter set</b>) and
    unpack the Zip file which is created. Then follow the
    directions in the file Readme.txt.

    <h3>Modifying EndNote Reference Types</h3>Several fields used
    by BibTeX are not part of EndNote's default Reference Types.
    While import from JabRef and export to JabRef will work fine
    without modifying reference types, the field names will not
    display correctly in EndNote (e.g. an entry window will call
    the pdf field <i>Custom 1</i> instead of <i>pdf</i>.
    Additionally, these fields cannot be added to new entries in
    EndNote, since they will not appear in the entry window. To
    modify the EndNote Reference Types, extract the EndNote Extras
    and follow the directions in the file readme.txt.

    <h3>Export to JabRef</h3>EndNote comes with an export style
    BibTeX. However, this does not support all BibTeX types and
    fields, and does not support the additional General Fields
    supported by JabRef (<i>pdf, owner, key,</i> etc.) If you wish
    to have these fields supported, extract the EndNote Extras
    (<b>Tools -&gt; Unpack EndNote filter set</b>) and follow the
    directions in the file readme.txt.
    <?php include("../footer.php"); ?>
  </div>

</body>
</html>
