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
  <title>データベース特性ウィンドウ</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>

    <h1>データベース特性ウィンドウ</h1>

<p><em>メインウィンドウから<b>ファイル→データベース特性</b>を選べば開きます。</em></p>

データベース特性ウィンドウでは、データベースに関連した設定を行うことができます。

<h2>データベースのエンコーディング</h2>

<p>この設定は、データベースをディスクに書き込む際、JabRefがどの文字エンコーディングを使うべきかを指定します。この設定を変更すると、このデータベースに関しては、この設定が、「JabRefの設定」ダイアログで行った設定よりも優先して用いられます。JabRefはエンコーディングをbibファイルの冒頭部に書き込み、次回このファイルを開いたときに正しいエンコーディングで開くことができるようにします。</p>

<h2>ファイルディレクトリ既定値の上書き</h2>

<p>これらの設定は、一般ファイルリンク(<em>file</em>フィールドで指定)と旧来のPDF/PSリンク(この<em>pdf</em>および<em>ps</em>フィールドは、JabRef第2.3版以前で用いられていましたが、現行版では一般ファイルリンクを用いなくてはなりません)を検索する際、どのディレクトリを対象とするか指定するのに用いられます。</p>

<p>相対ディレクトリを指定することは可能です。この場合、ファイルの場所は、bibファイルのある場所からの相対パスとして解釈されます。ディレクトリを「.」に指定すると(除括弧)、ファイルがbibファイルと同じディレクトリにあることを意味します。</p>

<p>これらの設定は、「JabRefの設定」ダイアログで指定した一般ファイルディレクトリよりも優先して扱われます。ここで値を指定しない場合は、「JabRefの設定」ダイアログの値が用いられます。</p>

<h2>データベース保護</h2>

<p>この設定は、データベースを保存する前に、外部から加えられた変更を常に審査するように強制します。データベース保護を有効にしないと、他のユーザーがファイルに変更を加えていた場合に、変更が為されているという警告は発せられますが、変更内容を審査せずに保存することができてしまいます。データベース保護を有効にすると、外部から加えられた変更を審査し、マージした上でないと保存することができません(ただし審査過程で、ユーザーが各々の変更をなかったことにすることは可能です)。</p>

<p><b>《註》</b>本機能は、セキュリティ機能を提供するものではなく、他のユーザーが加えた変更を意図せずに上書きしてしまうのを避ける機会を提供するだけです。本機能は、悪意を持ったユーザーからあなたのデータベースを守るわけではありません。</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
