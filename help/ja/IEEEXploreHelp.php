<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>IEEEXploreの検索</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>

    <h1>IEEEXploreの検索</h1>

    <p>この機能を使うには、<b>検索→ウェブ検索</b>を選択すれば、操作盤がサイドペーンに表示されますので、そのドロップダウンメニューから<b>IEEEXplore</b>を選択してください。</p>

    <p>IEEEXploreは、電気工学やコンピューター科学、電子工学分野の技術文献へのアクセスを提供しています。検索を始めるには、問い合わせる単語を入力し、<b>Enter</b>を押すか<b>取得</b>ボタンを押してください。</p>

    <p>検索はゲストモードで為されますので、最大100個の結果が返されます。</p>

    <p>好みによって、<b>概要を取り込む</b>というチェックボックスを有効にすれば、各項目の文献情報に加えて要約もダウンロードすることを選ぶことができます。これはネットワークへの問い合わせを増やすことは<b>ありません</b>。</p>

    <p>BibTeX引用をIEEEXploreから直接ダウンロードするオプションは、まだ動作しません。</p>

    <p>何かご提案がありましたら、Oscar Gustafsson (<b>ogib73@gmail.com</b>)かAaron Chen (<b>nextAaron@gmail.com</b>)までメールをお送りください。</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
