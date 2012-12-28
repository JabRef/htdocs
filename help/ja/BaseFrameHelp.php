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
  <title>JabRef 基本ウィンドウ</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


    <h1>JabRef 基本ウィンドウ</h1>

    <p><b>《註》</b>以下に言及されているメニューアクションのほとんどには、短絡キーがあり、多くはツールバーからも使用できます。短絡キーは、プルダウンメニューに表示されます。</p>

    <p>これは基本ウィンドウであり、ここからあなたのデータベースを操作します。メニューバーとツールバーの下には、タブ付きのパネルがあり、各パネルが現在開いているデータベースの各々に対応しています。これらのパネルの一つを選択すると、表が表われて、データベース全項目のうち主要なフィールド(表示フィールドは設定可能)が表示されます。</p>

    <ul>
        <li>表中どのフィールドを表示するかを選ぶには、見たいフィールドを<strong>設定</strong>ダイアログの中でチェックします。</li>

        <li>項目の内容を編集するには、表中の行をダブルクリックしてください。表内部は矢印キーで移動することができます。</li>

	<li>表は、あなたの選択したフィールド群を使って整序されます。既定の整序順は、<strong>設定→項目表</strong>で設定することができますが、もっと間便に順序を変えるには、適切な列のヘッダをクリックすれば、それが第一の整序基準に据えられるか、仮に既にそうなっている場合には整序順が反転されます。もう一度クリックすれば、そのコラムが整序基準から外されます。列を第二の整序基準に加えたり、その整序順を反転させたり、あるいは基準から外したりする場合には、<b>コントロール</b>キーを押しながら、列をクリックしてください。第二の整序基準は、いくつでも追加できますが、次回JabRefを起動したときに保存されているのは、第三レベルまでです。</li>

	<li>各列の幅を調整するには、各列ヘッダ間の境界をドラッグしてください。</li>

	<li>色コードは、<strong>設定</strong>ダイアログの中で入切することができ、以下のようにセルを色づけすることによって、お使いのデータベースの完全性を維持するために視覚化することができます。

	<ul>
	  <li>最左列の<span style="color: red">赤色</span>セルは、その項目が不完全であることを示します。</li>

	  <li>最左列の<span style="color: #909000">黄色</span>セルは、それ自身で全必須フィールドを定義しておらず、内部参照が使用されていることを示します。</li>

	  <li><span style="color: blue">青色</span>セルは、必須フィールドを示します。</li>

	  <li><span style="color: green">緑色</span>セルは、非必須フィールドを示します。</li>

	  <li>色づけされていないセルは、<em>bibtex</em>プログラムが、この型の項目用にこのフィールドを使用していないことを示します。このフィールドは、JabRef中では編集することができます。</li>
	</ul>
      </li>
    </ul>

    <h2>項目を新しく追加するには</h2>

    <p>項目を新しく追加するには、いくつかの方法があります。<strong>新規項目</strong>メニューを選ぶと、ダイアログが表示されて、一覧から項目型を選択することができます。このダイアログを飛ばすためには、各項目型に対応したメニューがあり、良く使用されるほとんどの型については短絡キーもあります。</p>

    <p>新しい項目が追加されると、既定ではその項目の<a href="EntryEditorHelp.php">項目エディタ</a>が開きます。この挙動は、<strong>設定</strong>ダイアログの中で切り替えることができます。</p>

    <p><b>《註》</b>もっともよく使う項目型の短絡キーを覚えておくことを、つよくお勧めします。たとえば、<em>article</em>型項目を追加するのはCTRL-SHIFT-Aです。</p>

    <h2>項目の編集</h2>

    <p>既存の項目の<a href="EntryEditorHelp.php">項目エディタ</a>を開くには、適切な行のどこでもいいのでダブルクリックするか、項目を選択してENTERキーを押してください。</p>

    <h2>フィールド中で<em>bibtex</em>文字列を参照するには</h2>

    <p>JabRefでは、全フィールドの中身は、テキストエディタ中で書くのと同じようにそのまま書くことができますが、一つだけ例外があります。文字列を参照するには、<br />
    &nbsp;&nbsp;「#jan# 1997」<br />
    のように、文字列名を#で囲んでください。こうすると、文字列名「jan」の後に「 1997」が続いているものと解釈されます。</p>

    <p><a href="StringEditorHelp.php">文字列エディタ</a>もご参照ください。</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
