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
  <title>Medlineから項目を取得する</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>

    <h1>Medlineから項目を取得する</h1>

    <p>この機能を使うには、<b>検索→ウェブ検索</b>を選択すると、検索操作盤が側面に表示されます。ドロップダウンメニューから<b>Medline</b>を選択してください。</p>

    <p>MEDLINEは、米国国立医学図書館の第一級の書誌情報データベースです。生態臨床医学を重点に生命科学分野の学術論文の書誌情報を収録しています。</p>

    <p>ダウンロードする項目を指定するには、以下の二つの方法があります。</p>

    <ol>
        <li>テキストフィールドに一つもしくはそれ以上のMedline IDを(コンマもしくはセミコロンで区切って)入力します。</li>

        <li>検索する名前や単語の組を入力します。検索表現を絞り込むのに、<em>and</em>演算子や<em>or</em>演算子および括弧を使用することもできます。詳しい説明は、<a href="http://www.ovid.com/site/products/ovidguide/medline.htm">Medline/OVID operators</a>をご覧ください。</li>

       <li>例:
       <ol>
         <li>May [au] AND Anderson [au]</li>
         <li> Anderson RM [au] HIV [ti] </li>
         <li> Valleron [au] 1988:2000[dp] HIV [ti]</li>
         <li> Valleron [au] AND 1987:2000[dp] AND (AIDS [ti] OR HIV[ti])</li>
         <li> Anderson [au] AND Nature [ta]</li>
         <li>Population [ta] </li>
       </ol>
       </li>
    </ol>

    <p>どちらの場合も、<b>Enter</b>鍵か<b>取得</b>ボタンを押してください。テキスト検索を行うと、検出された項目数が表示され、いくつダウンロードするかを尋ねられます。</p>

    <p>取得された項目は、現在アクティブなデータベースに追加されます。</p>

    <h2>プロキシサーバーを利用する</h2>

    <p>httpプロキシサーバーを使用する必要がある場合は、以下のようにサーバー名とポート番号をjava実行時に渡します。</p>

    <p><code>java -Dhttp.proxyHost="ホスト名"
    -Dhttp.proxyPort="ポート番号"</code></p>

    <p>これらの環境設定は、<a href="http://docs.oracle.com/javase/1.4.2/docs/guide/net/properties.html">Oracle J2SE documentation</a>に文書化されています。</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
