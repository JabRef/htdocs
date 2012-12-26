<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>項目の標識付け</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>

    <h1>項目の標識付け</h1>

    <p>項目には，<ruby><rb><strong>標識</strong></rb><rp>(</rp><rt>マーク</rt><rp>)</rp></ruby>を付けることができます。選択項目を標識付けする<ruby><rb>短絡鍵</rb><rp>(</rp><rt>ショートカット</rt><rp>)</rp></ruby>はCTRL-M，外す短絡鍵はCTRL-SHIFT-Mです。これらはメニューからもアクセスすることができます。</p>

    <p>標識付けは項目の選択とは違います。標識を付けた項目は，他の項目と2つの点で異なる働きをします。まず，項目表中でこれらの項目は，常に異なる背景色で表示されます。第二に，グループ順に整序されていたり，検索結果を上部に表示する設定をしていない限り，これらは項目一覧の最上位に表示されます。</p>

    <p>項目が表示される標識色は，項目の標識階層に依存し，規定値では黄色から赤色になっています。メニュー中には，選択項目の標識階層を上げたり，直接指定した階層に標識する選択肢があります。</p>

    <p>項目の標識付けは，例えば，最初の検索結果を消さないで，複数の検索を行う必要があるときや，後に詳細に検討する必要がある論文や書籍を覚えておかなくてはならない時などに便利です。</p>
    
    <p>手動での標識付けに加えて，JabRefでは，自動的に直近の読み込み項目を標識付けし，同時に以前に同じ方法で標識を付けた項目を自動的に標識から外すことも可能です。これらの項目は，手動で標識を付けた色とは別の色 ―規定値では緑― で表示されます。この機能は，<b>オプション→設定→一般</b>で入切することができます。</p>

    <p>項目の標識は、項目を作成したり読み込んだりする際の「owner」フィールドの入力に用いる、ユーザー名に関連付けられます(これは、既定値ではオペレーティング・システムのユーザー名と同じですが、<b>オプション→設定→一般</b>で変更することができます)。つまり、ユーザーごとに独立した標識を付けることができます。データベースを保存すると、標識も保存されます。</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
