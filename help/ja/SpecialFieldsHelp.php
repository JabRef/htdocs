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
  <title>特殊フィールド</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


<h1>特殊フィールド</h1>

<p>特殊フィールドは以下の機能を提供します。</p>
<ul>
<li>読了論文の評価</li>
<li>論文を作業に関連があるものとして標識</li>
<li>BibTeX項目の品質が保証されているものとして標識</li>
<li>未読の論文に優先度をつける</li>
</ul>
<p>
項目の標識付けと違う主な点は、既定値では、評価した項目は表上部に移動しないことと、評価列のみが着色されることです。したがって、項目には、標識付けと評価の両方を行うことができます。
</p>
<p>
各特殊フィールドは、設定で入切することができます。
</p>

<h2>フィールド型</h2>

<h3>評価</h3>
<p>これは「昇順の」評価を設定する機能です。JabRefでは、1つ星から5つ星までを使って論文を評価できます。</p>

<h3>関連性</h3>
<p>項目を関連があるものとして標識できます。</p>

<h3>品質保証済</h3>
<p>項目を品質保証済として標識できます。BibTeX項目のフィールドの内容について、徹底的なチェックがなされていることを標識するためのものです。</p>

<h3>優先度</h3>
<p>項目の優先度をprio3 (低)からprio1 (高)まで付けることができます。未読論文の優先度を付けるためのものです。</p>

<h2>BibTeX項目への記憶</h2>
<p>
内部的には、特殊フィールドは、独立したBibTeXフィールドとして記憶されます。「特殊フィールドの値を独立したフィールドとしてBibTeXに書き込む」が有効になっている時、これらのフィールドは、データベースが保存される時にも書き込まれます。JabRefには、これらのフィールドをキーワードと同期する機能もあります。これは「キーワードと同期」を設定することで有効になります。この設定が有効になっていると、特殊フィールドを変更した分がキーワードフィールドに反映されます。逆に、キーワードを変更すると、特殊フィールドも変更されます。さらに、データベース読み込み時や新規項目の解析時に、特殊フィールドを設定するのにキーワードが用いられます。
</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
