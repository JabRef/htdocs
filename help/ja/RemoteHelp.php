<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>リモート操作</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">目次に戻る</a>


    <h1>リモート操作</h1>

    <p>本機能は、<b>設定→詳細設定</b>で入切したり設定したりすることができます。</p>

    <p><i>Windows XP SP2(恐らく他のシステムでも)で本機能を有効にすると、このプログラムの機能のうち、Windowsファイアウォールによってブロックされる機能があるかもしれないというメッセージボックスが表示されることがあるかもしれません。この場合、ファイアウォールにブロックを続けさせるように返答して構いません。ファイアウォールは、JabRefのリモート操作と干渉しません。</i></p>

    <p>リモート操作の待ち受けを有効にすると、JabRefは、起動時に特定のポートでの待ち受けを開始するように試みます。つまり、他のアプリケーションが、このポートを通じてJabRefに情報を送ることができるようになります。JabRefは、外部からの干渉リスクを回避するため、ローカル接続のみを許可します。</p>

    <p>このポートにバインドすると、2つめのJabRefインスタンスが、最初のインスタンスが実行中であることを発見できるようになります。この場合、明示的にスタンド・アローン・モードで実行するように指示しない限り、2つめのJabRefインスタンスは、最初のJabRefインスタンスに、コマンドラインオプションをこのポートを通じて渡した後、直ちに終了します。</p>

    <p>最初のJabRefインスタンスは、このコマンドラインオプションを読み、ファイルを開いたり読み込んだり等、指定された動作を実行します。ファイルが、コマンドラインオプション<code>--importToOpen</code>を使って読み込まれる場合、読み込まれた項目は、現在表示されているデータベースに追加されます。データベースが開かれていない場合には、新規に作成します。</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
