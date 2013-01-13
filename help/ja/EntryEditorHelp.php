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
  <title>項目エディタ</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>

<h1>項目エディタ</h1>

    <p><em>これは、基本ウィンドウで当該項目行の適当なところをダブルクリックするか、項目を選んでENTER鍵を押すと開きます。パネルはESC鍵を押すと閉じます。</em></p>

    <p>このパネルでは、単一の項目に関連したすべての情報を指定することができます。項目エディタは、ご使用の項目の型を確認し、この項目を<em>BibTeX</em>で参照するための、必須フィールドと非必須フィールドとをすべて列挙します。くわえて、すべての項目型に共通な<em>汎用フィールド</em>と名付けられたフィールドがあります。</p>

    <p>項目型のそれぞれについて、どのフィールドが必須で、どのフィールドが非必須か、またどのフィールドが汎用フィールドタブに表示されるべきかを、完全に指定することができます。これについて詳しくは、<a href="CustomEntriesHelp.php">項目型の自作</a>を参照してください。</p>

    <p>フィールドをどのように埋めていくべきかについての情報は、<a href="BibtexHelp.php">BibTeXヘルプ</a>をご覧ください。</p>

    <h2>項目エディタのパネル</h2>

    <p>項目エディタには、<em>必須フィールド</em>・<em>非必須フィールド</em>・<em>汎用</em>・<em>概要</em>・<em>レビュー</em>・<em>BibTeXソース</em>の6つのパネルがあります。ここで、<em>汎用</em>・<em>概要</em>・<em>レビュー</em>はカスタマイズ可能です(<a href="GeneralFields.php">汎用フィールドの個人設定</a>を参照)。最初の3つのパネルでは、TABとSHIFT-TABがテキストフィールド間でフォーカスを移すのに使用できます。</p>

    <p>パネルを切り替えるにはタブをクリックするか、以下のキーの組み合わせで左右のパネルに移動してください。右側のタブに異動するには、CTRL-TABまたはCTRL-プラス、左側のタブに異動するには、CTRL-SHIFT-TABまたはCTRL-マイナスを使います。また、次または前の項目に移動するには、それぞれCTRL-SHIFT-↓またはCTRL-SHIFT-↑を押すか、適切なツールバーボタンをクリックしてください。</p>

    <p><em>BibTeXソース</em>パネルは、データベースが<em>BibTeX</em>形式に保存されたときに、項目がどのように表記されるかを示します。お望みならば、このパネルで<em>BibTeX</em>ソースを直接編集することもできます。別のパネルに移動したり、CTRL-Sを押したり、あるいは項目エディタを閉じたりした際に、JabRefはソースパネルの内容を解析しようと試みます。問題がある場合には、それを通知して、その項目をさらに編集するのか、以前の内容に戻すのかの選択肢を提示します。<strong>設定</strong>ダイアログの<strong>項目エディタ</strong>タブにある<strong>既定でBibTeXソースを表示</strong>を有効にすると、項目エディタを開く度に、ソースパネルが表示されます。BibTeXの提供する4つのパネルではなく、ソースで編集することをお好みならば、このオプションを有効にしてください。</p>

    <p><strong>一口メモ</strong> お使いのデータベースにJabRefが知らないフィールドが含まれている場合、これらはソースパネルから見ることができます。</p>

    <p><strong>一口メモ</strong> <i>pdf</i>および<i>url</i>フィールドは、ドラッグ＆ドロップ操作をサポートしています。ここにブラウザからURLをドラッグしたり、PDFファイルをドラッグしてJabRefにダウンロードさせるか、リンクのままにしておいたりすることができます。</p>

    <h2>フィールド整合性検査</h2>

    <p>フィールドの内容が変更された場合、JabRefは新しい内容を受諾可能かどうか検査します。<em>BibTeX</em>が使用するフィールド型については、「#」文字の使用法に関しての検査も行われます。#記号は、(「\#」の形でエスケープされている場合を除き)<em>つねに</em>対で使用され、参照されている<em>BibTeX</em>文字列を囲みます。なお、JabRefは、参照されている文字列が実際に存在するかどうかの検査は行わないので注意してください(これは自明ではありません。自分で使用する<em>BibTeX</em>スタイルは、JabRefが知らない文字列を好きなだけ定義することができるからです)。</p>

   <p>内容が受諾されなければ、フィールドが赤く表示されてエラーであることを示します。この場合には、変更点は保存されません。</p>

    <h2>単語/名称自動補完</h2>

    <p>項目エディタでは、単語の自動補完を使うことができます。設定ダイアログで、自動補完を有効にしたり無効にしたりすることができる他、どのフィールドで自動補完をアクティブにするか選ぶことができます。</p>

    <p>自動補完が有効にすると、選択した各フィールドでデータベース中に現れる単語をすべて記録します。これらの単語のどれかを書き始めると、画面上でその候補が提案されます。提案候補を無視するには、そのまま書き続けてください。候補を受け入れるには、ENTERを押すか、矢印キーを押すか、あるいは他の文字を押して提案文字脇の選択ボックスを消してください。</p>

    <p><b>《註》</b> 提案候補の単語は、編集しているデータベースの同じフィールドに現れる単語のみです。この種の機能を実現するには様々な方法が考えられ、もしこれとは違う実装をするべきだと考えられる方がおられれば、ご提案をお聞かせください。</p>

    <h2><em>BibTeX</em>鍵を引用コマンド付きでコピーする</h2>

    <p>CTRL-Kか「鍵」ボタンを押すと、その項目の<em>BibTeX</em>鍵の前後に引用コマンドを付したものがクリップボードにコピーされます。</p>

    <h2><em>BibTeX</em>鍵をコピーする</h2>

    <p>CTRL-SHIFT-Kを押すと、その項目の<em>BibTeX</em>鍵がクリップボードにコピーされます。</p>

    <h2><em>BibTeX</em>鍵自動生成</h2>

    <p>当該項目の必須フィールドの内容に基づいて<em>BibTeX</em>鍵を自動生成させるには、CTRL-Gを押すか「鍵生成」ボタン(魔法の杖)を押してください。</p>

    <p>JabRefがどうやって<em>BibTeX</em>鍵を生成するかについての詳しい情報は、<a href="LabelPatterns.php">BibTeX鍵生成機構の自作</a>をご覧ください。</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
