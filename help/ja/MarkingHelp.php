<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Mark entries</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>

    <h1>Mark entries</h1>

    <p>You have the option of <em>marking</em>
    entries. Keyboard shortcuts are CTRL-M and CTRL-SHIFT-M to mark
    and unmark the selected entries, respectively, and you can also
    access these actions in the menus.</p>

    <p>Marking is not the same as selecting entries.
    Marked entries behave differently from other entries in two
    ways. First, they are always displayed with a different background
    color in the entry table. Second, they will float to the top of your
    entry list, as long as your table is not sorted according to
    groups or a Float search.</p>

    <p>The color each marked entry is displayed in depends on the marking
    level of the entry, with the default colors ranging from yellow to red.
    There are menu choices both for incrementing the marking level of the
    selected entry or entries, and for directly setting the marking to a specific
    level.</p>

    <p>Marking entries can be useful for instance if you need to do
    several searches without losing your first search results, or
    if you need to remember which articles or books to look more
    closely at.</p>
    
    <p>In addition to manually marking entries, JabRef can optionally auto-mark
    the latest imported entries, and at the same time unmark the previous entries
    marked in this way. Such entries will be shown in a different color
    from manually marked entries - by default green. This feature is toggled under
    <b>Options -> Preferences -> General</b></p>

    <p>Marking of entries will be associated with your username, the same name as is
    used to fill in the "owner" field of entries you create or import (this will by
    default match your user name in the operating system, but can be changed under
    <b>Options -> Preferences -> General</b>). Different users can mark entries
    independently. Saving the database will preserve the markings.</p>


  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
