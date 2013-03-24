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
  <title>Google Scholarを検索</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


    <h1>Google Scholarを検索</h1>

    <p>JabRefは、Google Scholarで検索を行い、引用をダウンロードすることができます。この機能を使うには、<b>検索→ウェブ検索</b>を選択すれば、操作盤が側面に表示されますので、そのドロップダウンメニューから<b>Google Scholar</b>を選択してください。</p>

    <p>検索を開始するには、問い合わせる単語を入力し、<b>Enter</b>鍵を押すか、<b>取得</b>ボタンを押してください。</p>

    <p>Google Scholarに頻繁に接続すると、Googleは画像認証を問い合わせてくるので、JabRefには対応することができません。この問題に対処するため、JabRefは、各検索毎にサーバーが返す項目1ページ目のプレビューを表示します。そこからどの項目をダウンロードするか選択してください。</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
