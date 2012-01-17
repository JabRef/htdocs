<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>SPIRES-Suche</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>
	
    <basefont size="4" color="#2F4958" face="arial" />

    <h1>SPIRES-Suche</h1>

    <p>Die SPIRES Suchfunktion leitet lediglich ihre Suchanfrage an die SPIRES-Websuche weiter, so dass sie ihre Suchanfrage in der gleichen Weise eingeben sollten, wie bei der Websuche, nur k&ouml;nnen sie den Befehl <em>find</em> oder <em>fin</em> weglassen.    
    Diese Hilfeseite gibt nur eine kurze Einf&uuml;hrung, wie Suchanfragen formuliert werden k&ouml;nnen. Detailierte Informationen, wie sie SPIRES bedienen k&ouml;nnen, finden Sie auf der <a href="http://www.slac.stanford.edu/spires/hep/help/index.shtml">Hilfewebseite zu SPIRES</a>.</p>

    <p>Ihre Suchanfrage kann aus mehreren Teilen zusammengesetzt sein, die durch die logischen Verkn&uuml;pfungen <em>and</em> (und) und <em>or</em> (oder) verkettet sind. Jeder Teil besteht aus einem Buchstaben oder Wort, das den Typ des Suchfeldes angibt, gefolgt von einem Leerzeichen und dem Suchtext.</p>

    <p>Die folgende Liste zeigt einige der Felder field indicators, die verwendet werden können:</p>
    <ul>
        <li><em>a</em> oder <em>author</em>: Suche nach Autornamen</li>
        <li><em>t</em> oder <em>title</em>: Suche nach Titel</li>
        <li><em>j</em>: Journal. Hier kann entweder die &uuml;bliche Abk&uuml;rzung oder die CODEN-Abk&uuml;rzung aus 5 Buchstaben f&uuml;r das Journal verwendet werden. Volume und Seite k&ouml;nnen auch durch Komma getrennt angegeben werden. Zum Beispiel,
        <em>j Phys. Rev.,D54,1</em> sucht im Journal Phys. Rev., Volume D54, Seite 1.</li>
        <li><em>k</em>: Suche in den Schl&uuml;sselworten</li>
    </ul>

    <p>Beispielsuchanfragen:</p>
    <ul>
        <li><em>a smith and a jones</em>: Suche nach Eintr&auml;gen mit den Autoren "smith" und "jones"</li>
        <li><em>a smith or a jones</em>: Suche nach Eintr&auml;gen mit entweder dem Autor "smith" oder dem Autor "jones"</li>
        <li><em>a smith and not t processor</em>: Suche nach dem Autor "smith" und unterdr&uuml;cke Werke mit "processor" im Titel</li>
    </ul>

  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
