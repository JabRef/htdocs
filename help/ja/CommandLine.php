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
  <title>コマンドライン オプション</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


    <h1>コマンドライン オプション</h1>

<p>JabRefは、第一にGUIベースのアプリケーションですが、便利なコマンドライン オプションもいくつか提供しており、グラフィカル インタフェースを開くこと無しにファイル変換操作を行うこともできます。</p>

    <p>ファイル名を列挙するだけで、一つ以上のBibTeXファイルを読み込むように指定することができます。オプションを指定する場合には、すべてこのファイル名の列挙よりも前で行ってください。最初のファイル名は、オプションの引数と誤解されないようにしなくてはいけませんので、<code>-n</code>や<code>-l</code>のような二値オプションがファイル名の直前に来る場合には、引数として「true」を指定してください。例えば、</p>

    <p><code>jabref -o filetoexport.xml,docbook -n true
    original.bib</code></p>

    <p>というコマンドラインは、<code>original.bib</code>ファイルを正しく読み込み、docbook形式で<code>filetoexport.xml</code>に書き出し、GUIは抑制します。ここでは、<em>true</em>という単語があることで、ファイル名が<code>-n</code>オプションの引数と解釈されるのを防いでいます。</p>

    <h2>ヘルプ: -h</h2>

<p>このオプションを与えると、JabRefはコマンドライン オプションの概略を表示して、直ちに終了します。</p>

    <h2>GUI無しモード: -n</h2>

    <p>このオプションを与えると、起動時に通常表示されるスプラッシュ ウィンドウとJabRefウィンドウが表示されなくなります。これは、コマンドラインオプションを実行すると、直ちにプログラムを終了します。</p>

    <p>このオプションは、コマンドラインやスクリプトからファイル変換操作を行う際に便利です。</p>

    <h2>セッションの読込: -l</h2>

    <p>このオプションを与えると、JabRefは、保存されたセッションがある場合には其れを読み込み、それから基本ウィンドウを開きます。</p>

    <h2>ファイルの読込: -i ファイル名[,形式]</h2>

    <p>このオプションを与えると、JabRefは指定したファイルを読み込むか開くかします。ファイル名だけが指定された場合やファイル名の後にコンマか*文字を付けた場合には、JabRefはファイル形式の自動検出を試みます。これは、BibTeXファイルとJabRefがサポートしているすべての読込形式に対して機能します。ファイル名の後にコンマと読込形式名を続けると、その読込フィルタが使用されます。使用できる読込形式については、<code>-h</code>オプションを使うと一覧を得ることができます。</p>

    <p>出力オプションが指定されると、読込は出力よりも前に処理されるので、読み込んだり開いたりしたファイルは書出フィルタに渡されます。<code>-n</code>オプションを使ってGUIを抑制しなかった場合には、読み込んだり開いたりしたファイルは、基本ウィンドウに表示されます。</p>

    <p><code>-i</code>オプションは、一度だけかつ一つのファイルについてのみ指定することができます。</p>

    <h2>ファイルの書出: -o ファイル名[,形式]</h2>

    <p>このオプションを与えると、JabRefは同一コマンドライン中で読み込んだり開いたりしたファイルを、保存したり書き出したりします。ファイルが<code>-i</code>を使って読み込まれた場合には、そのデータベースが書き出されます。<code>-i</code>オプションを使わない場合には、指定した(かつ成功裏に開かれた)<b>最後の</b>ファイルが書き出されます。</p>

    <p>ファイル名だけを指定すると、BibTeX形式で保存されます。ファイル名の後にコンマと書出形式を続けると、その書出フィルタが使用されます。この方法で自作書出フィルタも使用することができ、自作書出フィルタと標準書出フィルタの書出名が同一の時には、前者が優先されます。</p>

    <p>使用できる書出形式については、<code>-h</code>オプションを使うと一覧を得ることができます。</p>

    <p><code>-n</code>オプションを使用しなかった場合には、書き出し操作はすべてJabRefウィンドウが開く前に実行され、読み込まれたデータベースがウィンドウに表示されます。</p>

    <p><code>-o</code>オプションは、一度だけかつ一つのファイルについてのみ指定することができます。</p>

    <h2>設定の書出: -x ファイル名</h2>

    <p>このオプションを使うと、ユーザー設定全部をXMLファイルに書き出すようJabRefに指定することができます。書き出した後、JabRefは通常通り起動します。</p>

    <h2>設定の読込: -p ファイル名</h2>

    <p>このオプションを与えると、JabRefは<code>-x</code>オプションを使って書き出した設定を読み込みます。読み込んだ後、JabRefは通常通り起動します。</p>
    
    <h2>一致項目の書出: -m [フィールド=]検索語,書出ファイル[,書出形式]</h2>
    <p>これは、与えられた検索語に一致するデータベース項目をすべて新しいファイルに保存します。書出ファイル形式は選択することができますが、既定形式は(tablerefsabsbibが提供するabstractおよびbibtex付き)HTML表です。</p>

    <p>呼び出し方法l: <code>JabRef.jar -m [フィールド=]検索語,出力ファイル[,書出形式] -n true 入力ファイル</code></p>
    <p>検索機能についての詳細は、説明書の「詳細検索」の項をご覧ください。特定の年の項目を検索できるだけでなく、起源を区切って項目を検索することも可能です。</p>
    <p>空白を含む検索語は引用符で囲む必要があることに留意してください。</p>
	<p>用例</p>
	<ul>
		<li> <code>Year=2005</code> </li>
		<li> <code>title|keywords=Optimization</code> </li>
		<li> <code>(author=bock or title|keywords="computer methods")and not(author=sager)</code> </li>
		<li> <code>Year=1989-2005</code> </li>
	</ul>

    <h2>使用されている項目のみの書出: -a
    ファイル名[.aux],新規bibファイル[.bib]</h2>

    <p>ときどき、使用されているBibTeX項目のみを集めたBibTeXファイルを作ると便利なことがあります。これら使用されている項目の一覧はauxファイルに含まれています。JabRefはこのファイルを解析して、既知の使用されている項目のみを含んだBibTeXファイルを新しく生成することができます。言い換えれば、このauxファイルに項目が定義されていない場合、生成したファイルにも含まれません。</p>
    
    <h2>ウェブからの取得: --fetch==取得法:問い合わせ文字列</h2>
    
    <p>ウェブ検索メニュー中の各取得法は、コマンドラインからも指定することができます。--fetchオプションを使って、取得方法(ieee、medline、jstorなど)と、検索語もしくは論文IDのいずれかを渡すと、その方法で取得が行われます。ユーザーからのフィードバックが必要な場合には、GUIを表示する取得法もありますので、注意してください。利用できる取得法を列挙させるには、パラメーターを与えずに--fetchを実行してください。</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
