<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Digital Object Identifier (DOI)を使用して項目を取得する</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>

    <h1>Digital Object Identifier (DOI)を使用して項目を取得する</h1>

    <p>この機能を使うには、<b>検索→ウェブ検索</b>を選択すれば、操作盤がサイドペーンに表示されますので、そのドロップダウンメニューから<b>DOI to BibTeX</b>を選択してください。</p>

    <p>この取得子は、DOIからBibTeX項目に変換するのに、<a href="http://dx.doi.org/">http://dx.doi.org/</a>を使用しています。</p>

    <p>検索フィールドにDOIを入力し、<b>Enter</b>を押すか<b>取得</b>ボタンを押してください。項目が取得されて、現在アクティブになっているデータベースに追加されます。エラーが発生した場合には、その旨ポップアップで表示されます。</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
