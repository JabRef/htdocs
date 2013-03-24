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
  <title>外部SQLデータベースへの書き出し</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


    <h1>外部SQLデータベースへの書き出し</h1>

    <p>JabRefは、BibTeXデータベースの内容を、グループ情報とともに、外部のMySQLやPostgreSQLデータベースに書き出すことができます。</p>

    <p>ただし、MySQL若しくはPostgreSQLサーバーの全権限を持つユーザー名とパスワードを持っていることが必要です。</p>

    <h2>書き出し</h2>
    <ol>
      <li><b>ファイル→外部SQLデータベースに書き出す</b>を選択するか、ツールバーの対応するボタンを押してください。</li>
      <li><b>サーバー型</b>ドロップダウンメニューからデータベースの型を選択してください。</li>
      <li>データベース接続情報を入力し、<b>接続</b>を押してください。</li>
    </ol>

		<p>すると、JabRefは指定されたデータベースに接続し、新規テーブルを作成し、それらのテーブルに項目とグループ情報を格納します。それ以前に書き出したデータを失うことなく、好きなだけ多くのJabRef書誌情報データベースを書き出すことができます。システムは、フルパス(ディレクトリ構造+ファイル名)を使ってデータベースを一意に識別します。同じJabRefデータベースを二度以上書き出すと、SQLデータベース内のそのデータベースのデータが更新されます。なお、続けて書き出す場合には、接続情報を入力するようには促されません。別のデータベースに書き出したい場合には、<b>ファイル→外部SQLデータベースに接続</b>を選択して(若しくは対応するツールバーボタンを押して)、書き出しを実行してください。第2.8版以降では、テーブルはドロップされませんので、二つ以上のJabRefデータベースを同一のSQLデータベースに保管することができます。</p>	

	<p>SQLデータベースからデータベースを読み込む場合(<b>ファイル→外部SQLデータベースから読み込む</b>)には、読み込まれた各データベースを別々のタブに収録します。</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
