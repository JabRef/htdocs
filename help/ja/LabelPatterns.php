<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>BibTeXキー生成機構の個人用設定</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


    <h1>BibTeXキー生成機構の個人用設定</h1>

    <p>JabRef設定の「BibTeXキーの生成」タブでは、BibTeXラベルの自動生成に使用されるフィールドを設定することができます。パターンは、標準的な項目型それぞれに対して設定することができます。</p>

    <h2>キーパターン</h2>

    <p>パターンには、特定の項目フィールドをキー内のその場所に入れることを示すフィールドマーカーの他、好きな文字列を含めることができます。フィールドマーカーは、<b>[volume]</b>のように、通常、フィールド名を角括弧で囲ったものです。キーを生成するときに、項目内でフィールドが定義されていなければ、フィールドマーカーには何も挿入されません。</p>

    <p>フィールド中の特定部分を抜き出す特殊フィールドマーカーがいくつか用意されています。これらを下記に列挙します。追加したい特殊フィールドマーカーがありましたら、ぜひお知らせください。</p>

    <p>特殊フィールドマーカー</p>

    <ul>
        <li><b>[<code>auth</code>]</b>: 第1著者の姓<br /></li>

        <li><b>[<code>authors</code>]</b>: 全著者の姓<br /></li>

        <li><b>[<code>authorLast</code>]</b>: 末尾著者の姓<br /></li>

        <li><b>[<code>authorsN</code>]</b>: N人めの著者までの姓。それよりも多い著者がいる場合は、その後に"EtAl"を付けます。<br /></li>
        
        <li><b>[<code>authorsAlpha</code>]</b>: BibTeXスタイル「alpha」に対応します。著者1名の時：姓の最初の3文字。著者2〜4名：姓の最初の文字を繋げたもの。著者5名以上：最初の著者3名の最初の文字を繋げ、最後に「+」を付けたもの。<br /></li>  

        <li><b>[<code>authIniN</code>]</b>: 各著者の姓の頭部最大N文字。<br /></li>

        <li><b>[<code>authorIni</code>]</b>: 第1著者の姓の最初5文字と、残りの著者の姓の頭文字。<br /></li>

        <li><b>[<code>authN</code>]</b>: 第1著者の姓の頭部N文字。<br /></li>

        <li><b>[<code>authN_M</code>]</b>: M番目の著者の姓の頭部N文字。<br /></li>

        <li><b>[<code>auth.auth.ea</code>]</b>: 最初の著者2名の姓と、3名以上著者がいる時には「.ea」を追加。<br /></li>

        <li><b>[<code>auth.etal</code>]</b>: 第1著者の姓の後に、著者が2名の時は第2著者の姓、著者が3名以上の時は「.etal」。<br /></li>

        <li><b>[<code>authshort</code>]</b>: 著者1名の時はその姓、著者2名以上の時は、3名までの著者の姓の最初の文字。4名以上の著者がいる時には、その後に+文字。<br /></li>

    </ul>

    <p><b>《註》</b>(編集書籍など)著者がいない場合には、上記の<b><code>[auth...]</code></b>マーカーはすべて、編者を(ある場合には)代わりに使用します。したがって、著者のいない書籍の編者は、ラベル生成用には著者として取り扱われます。この挙動を望まない、即ち著者がいない場合は何も出力しないマーカーが必要な場合には、上記のコードにおいて<b><code>auth</code></b>の代わりに<b><code>pureauth</code></b>を使用してください。例：<b><code>[pureauth]</code></b>や<b><code>[pureauthors3]</code></b>など。</p>

    <ul>
        <li><b>[<code>edtr</code>]</b>: 第1編者の姓<br /></li>

        <li><b>[<code>edtrIniN</code>]</b>: 各編者の姓の頭部N文字以内<br /></li>

        <li><b>[<code>editors</code>]</b>: 全編者の姓<br /></li>

        <li><b>[<code>editorLast</code>]</b>: 最後の編者の姓<br /></li>

        <li><b>[<code>editorIni</code>]</b>: 第1編者の姓の頭部5文字と、残りの編者の姓の頭文字<br /></li>

        <li><b>[<code>edtrN</code>]</b>: 第1編者の頭部N文字<br /></li>

        <li><b>[<code>edtrN_M</code>]</b>: 第M編者の頭部N文字<br /></li>

        <li><b>[<code>edtr.edtr.ea</code>]</b>: 最初の2編者の姓と、3名以上の場合は「.ea」を追加。<br /></li>

        <li><b>[<code>edtrshort</code>]</b>: 編者1名の時はその姓、編者2名以上の時は、3名までの編者の姓の最初の文字。4名以上の編者がいる時には、その後に+文字。<br /></li>

        <li><b>[<code>firstpage</code>]</b>: 発行物の最初のページ番号(注意：bibtexは<code>7,41,73--97</code>あるいは<code>43+</code>という表記をするので、pagesフィールド中の最小のページ番号を返します)<br /></li>

        <li><b>[<code>keywordN</code>]</b>: "keywords"フィールドのN番目のキーワード。キーワードがコンマかセミコロンで区切られていると仮定します。<br /></li>

        <li><b>[<code>lastpage</code>]</b>: 発行物の最後のページ(<code>firstpage</code>の註を参照)<br /></li>

        <li><b>[<code>shorttitle</code>]</b>: タイトルの最初の3単語<br /></li>

        <li><b>[<code>shortyear</code>]</b>: 出版年の下2桁<br /></li>

        <li><b>[<code>veryshorttitle</code>]</b>: タイトルの最初の単語。「the」「a」「an」を除く。<br /></li>
    </ul>

    <p>フィールド名(もしくは上記の準フィールド名)には、1つ以上の修正辞を後ろに付けることができます。修正辞は記述順に適用されます。</p>

    <ul>
        <li><b>:abbr</b>: フィールド名や特殊フィールドマーカーで生成された文字列を短縮形にします。最初の文字と、その後は空白の次の文字のみを使います。例えば、<b>[journal:abbr]</b>は、ジャーナル名"Journal of Fish Biology"を"JoFB"と出力します。<br /></li>

        <li><b>:lower</b>: フィールドマーカーが挿入した文字列を強制的に小文字にします。例えば、<b>[auth:lower]</b>は、第1著者の姓を小文字で出力します。<br /></li>

        <li><b>:upper</b>: フィールドマーカーが挿入した文字列を強制的に大文字にします。例えば、<b>[auth:upper]</b>は、第1著者の姓を大文字で出力します。<br /></li>

        <li><b>:(x)</b>: xには任意の文字列を入れてください。この修正辞の前のフィールドマーカーの値が空の時、括弧の間の文字列を挿入します。例えば、<b>[volume:(unknown)]</b>というマーカーは、項目の<code>volume</code>フィールドが設定されていれば、それを返し、設定されていなければ、<b>unknown</b>を返します。
        </li>
    </ul>

    <p>ある項目型に対してキーパターンを定義していない場合には、<b>既定キーパターン</b>が使われます。既定パターンは変更することができ、<b>設定</b>ダイアログの<b>キーパターン</b>セクションの項目型一覧の上で設定します。</p>

    <p>既定キーパターンは[auth][year]となっており、これは<code>Yared1998</code>のようなキーを生成します。現在のデータベース中でキーが一意でない場合には、キーが一意になるようにa-zのうち1文字を付け加えます。したがって、ラベルは以下のような形になります。</p>

    <p style="margin-left: 28pt">
        <code>Yared1998</code><br />
        <code>Yared1998a</code><br />
        <code>Yared1998b</code>
    </p>

    <h2>正規表現での置換</h2>

    <p>キーパターンを適用してキーを生成した後、キー生成機構に特定の正規表現を検索させ、それを文字列で置換することができます。正規表現文字列と置換文字列は、キーパターン一覧の下にあるテキストフィールドに入力します。置換文字列が空の場合、正規表現に一致した文字列は、生成されたキーから削除されます。例えば、置換対象に<code>\p{Punct}</code>あるいは<code>[:/%]</code>を入れ、置換文字列を空にした場合、キーから不必要な文字を取り除くことができます。これは、BibTeXキーにしたがってPDFの名前を付ける時便利です。</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
