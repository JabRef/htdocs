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
  <title>文字列ヘルプ</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


    <h1>文字列ヘルプ</h1>
    <p><em>BibTeX</em>は、<code>@String {<ruby><rb>鍵</rb><rp>(</rp><rt>キー</rt><rp>)</rp></ruby> = 値}</code> と指定することで固定文字列を記憶させることをサポートしています。
    <acronym>JabRef</acronym>は、文字列の管理を<b>BibTeX→文字列を編集</b>(これは<a href="StringEditorHelp.php">文字列エディタ</a>を開きます)でサポートしています。指定した値は、フィールド中で使用することができます。例えば、BibTeXファイル中で</p>
    <pre><code>@String { kopp = "Kopp, Oliver" }
@String { kubovy = "Kubovy, Jan" }
@String { et = " and " }</code></pre>
<p>と指定してあれば、どこかの項目中で、例えば、<code>@Misc{ author = kopp # et # kubovy }</code> あるいは <code>@Misc{ author = kopp # " and " # kubovy }</code> として使うことができます。JabRefフィールドエディタ中では、authorフィールドに  <code>#kopp# #et# #kubovy#</code> あるいは <code>#kopp# and #kubovy#</code> のように挿入します。</p>

<p>
<acronym>JabRef</acronym>では、文字列の概念を拡張して、これら<code>@String</code>に型を導入しました。問題は、そのような文字列の型をBibTeXファイル中でどう保管するかですが、<acronym>JabRef</acronym>は、以下のように前置句を加えることで型を追記します。</p>

<ul>
<li><code>@String { aKopp = "Kopp, Oliver" }</code>は、author型の<code>@String</code>です。</li>
<li><code>@String { iMIT = "{Massachusetts Institute of Technology ({MIT})}" }</code>は、institution型の<code>@String</code>です。</li>
<li><code>@String { anct = "Anecdote" }</code>は、other型の<code>@String</code>です。</li>
<li><code>@String { lTOSCA = "Topology and Orchestration Specification for Cloud Applications" }</code>は、other型の<code>@String</code>です。</li>
</ul>

<p>
author型の<code>@String</code>は、authorフィールドとeditorsフィールドでのみ使うことができます。同じく、institution型の<code>@String</code>は、institutionフィールドとorganizationフィールドでのみ使うことができます。other型の<code>@String</code>は、どこでも使用することができます。
</p>

<p>
下記の通り、同じinstitutionを複数の型に持つこともできます。
</p>
<ul>
<li><code>@String { aMIT = "{Massachusetts Institute of Technology ({MIT})}" }</code>
 は、institutionがauthorもしくはeditorとして現れる場合のものです。</li>
<li>
<code>@String { iMIT = "{Massachusetts Institute of Technology ({MIT})}" }</code>
は、institutionがinstitutionもしくはorganizationとして現れる場合のものです。</li>
<li>
<code>@String { pMIT = "{Massachusetts Institute of Technology ({MIT}) press}" }</code>
は、institutionがpublisherとして現れる場合のものです。</li>
</ul>
<p>
最後の例は、矛盾しているように見えるかもしれませんが、重複を避けた上で、人名と組織名を統一的に扱うためのものです。</p>


  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
