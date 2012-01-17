<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>ACM Portalの検索</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>


    <h1>ACM Portalの検索</h1>

    <p>ACM Portalには二つのデータベースがあります。そのうちの一つ、ACMデジタルライブラリは、50年以上のアーカイブを含む、ACMから出版された論文すべての全文収録コレクションであり、Guide to Computing Literatureは、コンピューティングに関わる主要な出版社からの文献コレクションで、100万以上の項目があります。</p>

    <p>JabRefは、ACM Portalデータベースから文献情報をダウンロードすることができます。この機能を使うには、<b>ウェブ検索→ACMPortalを検索</b>を選択してください。すると検索インタフェースが側面に表示されるようになります。</p>

    <p>検索を始めるには、問い合わせる単語を入力し、<b>Enter</b>鍵を押すか<b>取得</b>ボタンを押してください。</p>

    <p>どのデータベースを検索するかを選択することができるほか、<b>概要を取り込む</b>というチェックボックスを有効にすれば、各項目の文献情報に加えて要約もダウンロードすることを選ぶことができます。</p>

    <p>ACM Portalウェブサイトに過度な負荷をかけることを防ぐために、与えられた数以上の項目をダウンロードすることは、JabRefによって拒否されます。</p>

    <p>この点に関して、ACM Portalに頻繁に接続すると、お使いのIPアドレスが数時間アクセス不能になります。そこで、JabRefは、各接続の間に5秒間待機しますので、ダウンロード手順は非常に遅くなります。</p>

    <p>何かご提案がありましたら、Aaron Chen <b>nextAaron@gmail.com</b>にメールを送ってください。</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
