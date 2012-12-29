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
  <title>JabRef におけるファイルリンク</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


    <h1>JabRef におけるファイルリンク</h1>

    <p>JabRefでは、使用中のシステムに保管されているあらゆる型の文書のみならず、URLやDOI識別子の形でウェブ上の文書も、項目にリンクさせることができます。各項目にはいくつでもファイルリンクを付けることができ、リンクされた各ファイルはJabRefから簡単に開くことができます。</p>

    <p>BibTeXから見れば、項目のファイルリンクはすべて一つのフィールドにコーディングされますが、JabRef内部では、編集可能なリンク一覧として表示されます。これは、他のBibTeXフィールドと同様に項目エディタからアクセスすることができます。</p>

    <h2>外部ファイル型を設定する</h2>

    <p>ファイルを開く際にどのアプリケーションを呼び出せばよいのか、アイコンはどれを表示すればよいのかを特定するために、各ファイルリンクに対しては、ファイル型を選択しなくてはなりません。ファイル型の一覧は、<b>オプション→外部ファイル型の管理</b>を選ぶか、設定ダイアログの<b>外部プログラム</b>タブ中の<b>外部ファイル型の管理</b>ボタンをクリックすることで、閲覧したり編集したりすることができます。</p>

    <p>ファイル型には、名称・グラフィカルアイコン・ファイル拡張子・ファイルを閲覧するためのアプリケーションが指定されます。Windows上では、Windowsの既定ビューアを使用するためには、アプリケーション名を省略すれば結構です。</p>

    <h2>項目に外部リンクを追加する</h2>

    <p><a href="GeneralFields.php">汎用フィールド</a>に「file」フィールドが含まれている場合、<a href="EntryEditorHelp.php">項目エディタ</a>内で、項目中の外部ファイル一覧を編集することができます。エディタには、リンクの挿入や編集、削除のためのボタンの他、リンク一覧を整序するためのボタンがあります。</p>

    <p>お使いのファイルディレクトリ(<b>設定→外部プログラム→外部ファイルリンク→基本ファイルディレクトリ</b>で設定)に、定義済みの外部ファイル型のいずれかを拡張子として持ち、名称にBibTeX項目のBibTeXキーが含まれているファイルがある場合、項目エディタの<b>自動</b>ボタンをクリックすれば、このファイルを自動的にリンクすることができます。どのファイル名をBibTeXキーに自動リンクするかの規則は、<b>設定→外部プログラム→外部ファイルリンク→正規表現検索を使用</b>で設定できます。</p>

    <p>ファイルをダウンロードし、それに対してBibTeX項目からリンクを張るには、項目エディタから<b>ダウンロード</b>ボタンをクリックします。すると、ダイアログボックスが現れ、URLを入力するよう促されます。ファイルは基本ファイルディレクトリにダウンロードされ、その項目のBibTeXキーに基づいて名称が割り振られた上で、この項目からのリンクが張られます。</p>

    <h2>外部ファイルを開く</h2>

    <p>外部ファイルやウェブページを開くにはいくつかの方法があります。項目の最優先外部リンクを開くには、項目表から項目を選び、メニューを選ぶか、短絡キーを使用するか、あるいは右クリックメニューを使用します。または、項目表が<b>ファイル</b>列を表示するように設定されている場合には(<b>設定→項目表→特殊な表列→ファイル列を表示</b>で設定)、ファイルアイコンをクリックすれば、項目の最優先リンクが開きます。項目のその他のリンクにアクセスするには、アイコンを右マウスボタンでクリックし(Mac OS Xの場合はCtrl-クリック)、すべてのリンクが載っているメニューを表示させてください。</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
