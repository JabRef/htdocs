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
  <title>DiVAから項目を取得する</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>

    <h1>DiVAから項目を取得する</h1>
            
    <p><a href="http://www.diva-portal.org/">DiVA (Digitala Vetenskapliga Arkivet)</a>は、およそ<a href="http://www.diva-portal.org/smash/aboutdiva.jsf">30</a>校のスウェーデンの大学および高等教育機関からの出版物のデータベースです。</p>

    <p>この機能を使うためには、<b>検索→ウェブ検索</b>を選択すれば、検索インタフェースが側面に表示されます。ドロップダウンメニューから<b>DiVA</b>を選択してください。</p>

    <p>検索フィールドに、DiVA識別子、例えば<b>diva2:260746</b>と入力して<b>Enter</b>鍵もしくは<b>取得</b>ボタンを押します。すると、その項目が取得されて、現在アクティブになっているデータベースに付け加えられます。エラーが起こった場合には、ポップアップ内に表示されます。</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
