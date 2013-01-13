<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');

  // DO NOT EDIT BY HAND
  // This file is generated from jabref/src/help.
  // Run generate-htdocs-help-from-jabref-src-help.pl in the root directory
  // of the JabRef repository to regenerate the htdocs out of JabRef's help.
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>汎用フィールドの個人設定</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


    <h1>汎用フィールドの個人設定</h1>

    <p>項目エディタには、好きな数だけタブを追加することができます。これはどの項目型に対しても表示されます。タブを編集するには、「オプション→汎用フィールドを設定」を開いてください。</p>

    <p>一行ごとに一つのタブを指定します。各行の行頭にはタブ名を書いてコロン(:)を続け、その後にタブに入れるフィールドをセミコロン(;)で区切って書き入れます。</p>

    <p>例<br />
    <code>General:url;keywords;doi;pdf<br />
     Abstract:abstract;annote</code></p>

    <p>これは、<em>url</em>・<em>keywords</em>・<em>doi</em>・<em>pdf</em>の各フィールドを含む「General」と云う名のタブと、<em>abstract</em>・<em>annote</em>の各フィールドを含む「Abstract」と云う名のタブを生成します。</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
