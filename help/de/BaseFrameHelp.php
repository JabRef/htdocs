<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Das Hauptfenster von JabRef</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>

    <basefont size="4" color="#2F4958" face="arial" />

    <h1>Das Hauptfenster von JabRef</h1>

    <p><em>Anmerkung:</em> Die
    meisten Men&uuml;funktionen, auf die im Folgenden hingewiesen
    wird, haben Tastenk&uuml;rzel, und viele Funktionen k&ouml;nnen
    &uuml;ber die Werkzeugleiste aufgerufen werden.</p>

    <p>Dies ist das Hauptfenster, in dem Sie mit Ihrer Datei
    arbeiten. Unter der Men&uuml;leiste und der Werkzeugleiste
    befindet sich die Tableiste mit Tabs (Reitern) f&uuml;r jede
    Ihrer ge&ouml;ffneten Dateien. Wenn Sie einen dieser Tabs
    anklicken, erscheint eine Tabelle, die alle Datens&auml;tze und
    einige der Datenfelder auflistet.</p>

    <ul>
        <li>Die Auswahl der entsprechenden Felder k&ouml;nnen Sie
        im <strong>Einstellungs</strong>-Dialog vornehmen.</li>

        <li>Mit einem Doppelklick auf eine Tabellenzeile
        k&ouml;nnen Sie den Inhalt bearbeiten (der
        <a href="EntryEditorHelp.php">Eintragseditor</a> wird
        ge&ouml;ffnet). Sie k&ouml;nnen mit den Pfeiltasten
        innerhalb der Tabelle navigieren. Wenn Sie einen Buchstaben
        dr&uuml;cken, springen Sie zu dem ersten Eintrag, der mit
        diesem Buchstaben beginnt (abh&auml;ngig von der Spalte,
        nach der Sie die Tabelle sortiert haben).</li>

        <li>Die Tabelle wird nach einem Feld Ihrer Wahl sortiert.
        Sie k&ouml;nnen das Standardverhalten unter
        <strong>Optionen -&gt; Einstellungen -&gt;
        Tabellenansicht</strong> angeben. Um die Sortierreihenfolge
        schnell zu &auml;ndern, klicken Sie einfach auf die
        Kopfzeile einer Spalte; damit haben Sie das prim&auml;re
        Sortierkriterium definiert. Klicken Sie erneut auf den
        Spaltenkopf, um die Sortierrichtung umzukehren. Ein
        weiterer Klick sorgt daf&uuml;r, dass die Spalte nicht mehr
        zur Sortierung herangezogen wird. Halten Sie die
        CONTROL-Taste beim Klicken auf einen Spaltenknopf
        gedr&uuml;ckt, um eine zweite Spalte als sekund&auml;res
        Sortierkriterium festzulegen. Sie k&ouml;nnen beliebig
        viele Spalten zur Sortierung heranziehen.</li>

        <li>Sie k&ouml;nnen die Breite der Tabellenspalten
        einstellen, indem Sie die Trennlinie zwischen den
        Spaltenk&ouml;pfen anklicken und verschieben. Die
        Reihenfolge der Spalten k&ouml;nnen Sie festlegen, indem
        Sie mit der Maus auf den Spaltenkopf klicken und die Spalte
        an die gew&uuml;nschte Stelle ziehen.</li>

        <li>Im <strong>Einstellungs</strong>-Dialog k&ouml;nnen Sie
        festlegen, ob die Tabelle an die Bildschirmgr&ouml;&szlig;e
        angepasst werden soll oder nicht. Aktivieren Sie diese
        Funktion, um sicherzustellen, dass Sie die gesamte Tabelle
        sehen k&ouml;nnen. Deaktivieren Sie diese Funktion, wenn
        mehr Informationen dargestellt werden sollen.</li>

        <li>
            Die Farbanzeige kann ebenfalls im
            <strong>Einstellungs</strong>-Dialog ein- und
            ausgeschaltet werden. Die Farbanzeige illustriert, ob
            Ihre Daten vollst&auml;ndig sind, indem sie die Zellen
            wie folgt darstellt:

            <ul>
                <li>Eine <font color="red">rote</font> Zelle in der
                linken Spalte kennzeichnet einen
                unvollst&auml;ndigen Eintrag.</li>

                <li>Eine <font color="#909000">gelbe</font> Zelle
                in der linken Spalte kennzeichnet einen Eintrag,
                der nicht alle ben&ouml;tigten Felder selbst
                enth&auml;lt, der aber einen Querverweis
                enth&auml;lt.</li>

                <li>Eine <font color="blue">blaue</font> Zelle
                kennzeichnet ein ben&ouml;tigtes Feld.</li>

                <li>Eine <font color="green">gr&uuml;ne</font>
                Zelle kennzeichnet ein optionales Feld.</li>

                <li>Eine farblose (wei&szlig;e) Zelle kennzeichnet
                ein Feld, das von BibTeX f&uuml;r diesen
                Eintragstyp nicht benutzt wird. Das Feld can
                selbstverst&auml;ndlich in JabRef bearbeitet
                werden.</li>
            </ul>
        </li>
    </ul>

    <h2>Einen neuen Eintrag hinzuf&uuml;gen</h2>

    <p>Es gibt verschiedene M&ouml;glichkeiten, einen neuen Eintrag
    hinzuzuf&uuml;gen. Im Men&uuml; <strong>BibTeX</strong>
    f&uuml;hrt ein Klick auf <strong>Neuer Eintrag</strong> zu
    einem Dialog, in dem Sie den Eintragstyp aus einer Liste
    w&auml;hlen k&ouml;nnen. Um diesen Dialog zu umgehen, gibt es
    auch eigene Men&uuml;punkte f&uuml;r jeden Eintragstyp und
    au&szlig;erdem Tastenk&uuml;rzel f&uuml;r die g&auml;ngigsten
    Typen.</p>

    <p>Wenn ein Eintrag hinzugef&uuml;gt wird, wird
    standardm&auml;&szlig;ig ein
    <a href="EntryEditorHelp.php">Editor</a> f&uuml;r den Eintrag
    ge&ouml;ffnet. Sie k&ouml;nnen dieses Verhalten im
    <strong>Einstellungs</strong>-Dialog abstellen.</p>

    <p><em>Anmerkung:</em> Wir empfehlen dringend, sich die
    Tastenk&uuml;rzel f&uuml;r die Eintragstypen einzupr&auml;gen,
    die Sie am h&auml;ufigsten benutzen, z.B. STRG-SHIFT-A f&uuml;r
    einen Zeitschriftenaufsatz (<em>article</em>).</p>

    <h2>Einen Eintrag bearbeiten</h2>

    <p>Um den <a href="EntryEditorHelp.php">Eintrags-Editor</a> zur
    Bearbeitung eines existierenden Eintrags zu &ouml;ffnen,
    klicken Sie einfach doppelt auf die Zeile des Eintrags oder
    markieren den Eintrag und dr&uuml;cken auf ENTER.</p>

    <h2>Einen <em>BibTeX</em> String in einem Feld verwenden</h2>

    <p>In JabRef schreiben Sie den Inhalt aller Felder so, wie Sie es in
    einem Texteditor machen w&uuml;rden, mit einer Ausnahme: um
    einen String (Anm. d. &Uuml;bers.: eine Art Abk&uuml;rzung) zu
    verwenden, umschlie&szlig;en Sie den Namen des Strings mit je
    einem #, z.B.</p>
    <p>&nbsp;&nbsp;'#jan# 1997',</p>
    <p>was interpretiert wird als String mit dem Namen 'jan' gefolgt
    von '1997'.</p>

    <p>Vergleichen Sie auch die Hilfeseite zum
    <a href="StringEditorHelp.php">String-Editor</a>. </p>
  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
