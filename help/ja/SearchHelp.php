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
  <title>検索</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


    <h1>検索</h1>

    <h2>キーボード<ruby><rb>捷径鍵</rb><rp>(</rp><rt>ショートカット</rt><rp>)</rp></ruby></h2>

    <p><em>CTRL-F</em>を押すと、検索操作盤が開くかフォーカスを得ます。<em>CTRL-F</em>を押すたびに、検索モードが切り替わります。<ruby><rb>逐次検索</rb><rp>(</rp><rt>インクリメンタルサーチ</rt><rp>)</rp></ruby>中に、<em>CTRL-F</em>を押すと、プログラムは、検索文字列の次の該当箇所を探します。</p>

    <p><em>CTRL-SHIFT-F</em>を押すと、検索操作盤が開くかフォーカスを得て、逐次検索が選択されます。逐次検索中に、<em>CTRL-SHIFT-F</em>を押すと、プログラムは、検索文字列の次の該当箇所を探します。</p>

    <h2>検索モード</h2>
   
    <p>JabRefには3つの検索モードがあります。</p>
    
    <h3><ruby><rb>逐次検索</rb><rp>(</rp><rt>インクリメンタルサーチ</rt><rp>)</rp></ruby></h3>

    <p>逐次検索では、あなたが一文字入力するごとにプログラムが即座に検索を開始します。検索結果は、ステイタスラインに表示されます。検索捷径鍵を押すと、現在の検索文字列の次の該当箇所を探し始めます。次の該当箇所がない場合には、その旨ステイタスラインに表示されます。そのまま検索を続けると、検索は冒頭から再開されます。検索順は、常に現在のデータベースの整序順に従います。逐次検索を終えるには、ESC鍵を押すか「消去」ボタンを押してください。</p>

    <h3>通常検索</h3>

    <p>通常検索では、ENTERを押すと、入力した検索文字列に含まれる単語の該当箇所すべてが、データベースから検索されます。ここでは、すべての単語を含む項目のみが、一致項目と見なされます。連続した単語群を検索するには、その単語群を引用符""で括ってください。例えば、<b>progress "marine aquaculture"</b>という問い合わせは、"progress"という単語と"marine aquaculture"という句をともに含む項目に一致します。一致しない項目はすべて非表示となり、一致項目だけを残すか(フィルターモード)、一致しない項目を淡色表示します(上部表示モード)。検索結果の表示を終了するには、ESC鍵を押すか「消去」ボタンを押してください。</p>

    <h3><a name="advanced" id="advanced"></a>詳細検索</h3>

    <p>特定のフィールドのみを検索したかったり、検索表現に論理演算子を含めたい場合には、これらを使用するための特別な文法があります。例えば、著者が「Miller」である項目を検索するには、(逐次検索モード以外で)</p>

    <p>author = miller</p>

<p>と入力してください。フィールドの指定方法と検索文字列の双方とも正規表現をサポートしています。検索文字列に空白が含まれる場合には、文字列を引用符で囲んでください。フィールドの指定に空白は<b>決して</b>使わないでください！例えば、画像処理に関する項目を検索するには、</p>

    <p>title|keywords = "image processing"</p>

<p>と入力してください。この中で、下記のように「and」「or」「not」および括弧を使用することができます。</p>

    <p>(author = miller or title|keywords = "image processing") and
    not author = brown</p>

    <p>「=」記号は、実は「contains」の省略形です。完全一致検索は、「matches」あるいは「==」を使って行うことができます。「!=」を使うと、フィールドに含まれて<b>いない</b>検索語を探します(「not ... contains ...」と等価)。検索対象のフィールド型の選択(必須/非必須/すべて)よりも、検索表現中のフィールド指定の方が常に優先されます。ある型の項目を検索するには、下記のように「entrytype」という準フィールドを使うことができます。</p>

    <p>entrytype = thesis</p>

    <p>こうすると、(「Entrytype」列に表示されている)型に「thesis」という単語(「phdthesis」「mastewrthesis」等)を含む項目を検索します。下記のように、別の準フィールド「bibtexkey」を使うと、引用鍵を検索することができます。</p>

    <p>bibtexkey = miller2005</p>

    <h2>検索設定</h2>

    <p><b>設定</b>ボタンを押すと、大小文字を区別するかを切り替えたり、検索に正規表現を使うようにしたり、検索結果が表中で選択されるようにするか、エディタとプレビュー中において検索語を着色するかを切り替えることができるメニューが表示されます。</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
