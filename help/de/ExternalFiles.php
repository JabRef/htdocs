<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <title>Links zu PDF- und PS-Dateien, URLs und DOIs in JabRef</title>
  <link href='/css/style.css' rel='stylesheet' type='text/css' />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">Zur&uuml;ck zum Inhaltsverzeichnis</a>


    <h1>Links zu PDF- und PS-Dateien, URLs und DOIs in JabRef</h1>
    <b>Anmerkung:</b> Ab JabRef 2.3 gibt es ein
    <a href="FileLinks.php">verbessertes System f&uuml;r Links zu
    externen Dateien</a>. 

    <p>Mit JabRef k&ouml;nnen Sie Ihre Eintr&auml;ge mit den
    entsprechenden PDF- oder PS-Dateien, die sich auf Ihrem
    Computer befinden, verlinken. Ebenso ist es m&ouml;glich,
    Dateien im Internet &uuml;ber ein URL oder DOI zu
    verlinken.</p>

    <h2>Externe Betrachter einrichten</h2>JabRef ben&ouml;tigt
    Informationen dar&uuml;ber, welche Programme es f&uuml;r PDF-
    und PS-Dateien und Internetseiten benutzen soll. In der
    Standardeinstellung werden sie auf Werte gesetzt, die
    wahrscheinlich zu Ihrem Betriebssystem passen, so dass eine
    gute Chance besteht, dass Sie diese Werte nicht zu
    ver&auml;ndern brauchen. 

    <p>Um die Einstellungen der externen Programme zu &auml;ndern,
    &ouml;ffnen Sie den Unterpunkt <em>Externe Programme</em> im
    Dialog <em>Optionen -&gt; Einstellungen</em>.</p>

    <h2>Externe Dateien oder Links &ouml;ffnen</h2>Es gibt
    verschiedene M&ouml;glichkeiten, wie man externe Dateien oder
    Internetseiten aus JabRef &ouml;ffnen kann. Im Eintrags-Editor
    k&ouml;nnen Sie einfach auf das Textfeld, das ein DOI oder URL
    enth&auml;lt, doppelklicken. In der Tabellenansicht k&ouml;nnen
    Sie einen Eintrag ausw&auml;hlen und die Men&uuml;eintr&auml;ge
    (unter <em>Extras</em>), die Tastenkombinationen (in der
    Standardeinstellung F4 f&uuml;r PDF/PS und F3 f&uuml;r DOI/URL)
    oder das Kontextmen&uuml; (mit der rechten Maustaste) benutzen,
    um die Datei oder Internetseite zu &ouml;ffnen.
    Schlie&szlig;lich k&ouml;nnen Sie auch auf ein PDF-, PS-, URL-
    oder DOI-Icon in der Tabelle klicken. 

    <p>In der Standardeinstellung zeigt die Tabellenansicht zwei
    Spalten mit Icons f&uuml;r die Eintr&auml;ge, die mit externen
    Dateien oder URLs verlinkt sind. Beide Spalten k&ouml;nnen im
    Unterpunkt <em>Tabellenansicht</em> des Dialogs <em>Optionen
    -&gt; Einstellungen</em> ausgeblendet werden. Die zweite Spalte
    zeigt Icons f&uuml;r PDF- oder PS-Dateien (nur PDF, wenn beide
    vorhanden sind), die dritte Spalte zeigt Icons f&uuml;r URL
    oder DOI (nur URL, wenn beide vorhanden sind).</p>

    <h2>Der Standard-Ordner f&uuml;r PDF-Dateien</h2>PDF-Dateien
    erhalten von JabRef eine "Spezialbehandlung", um das Verlinken
    mit den entsprechenden Eintr&auml;gen so einfach wie
    m&ouml;glich zu gestalten. Um diese "Spezialbehandlung" nutzen
    zu k&ouml;nnen, m&uuml;ssen Sie im Unterpunkt <em>Externe
    Programme</em> des Dialogs <em>Optionen -&gt;
    Einstellungen</em> einen Ordner als Standard-Ordner f&uuml;r
    Ihre PDF-Dateien angeben. Alle PDF-Dateien, die in diesem
    Ordner oder einem Unterordner gespeichert sind, werden mit
    einer relativen Pfadangabe referenziert, so dass Sie problemlos
    PDF-Verzeichnisse verschieben oder mit mehreren Benutzern von
    verschiedenen Netzwerkarbeitspl&auml;tzen aus an derselben
    Datei arbeiten k&ouml;nnen. 

    <p>Wenn Sie Ihren PDF-Dateien dann noch Namen geben, die mit
    dem BibTeX Key des entsprechenden Eintrags &uuml;bereinstimmen
    (plus '.pdf' im Dateinamen), sucht JabRef in Ihrem
    Standard-PDF-Ordner und dessen Unterordnern nach der richtigen
    PDF-Datei. Sobald die korrekt benannte PDF-Datei sich dort
    befindet, klicken Sie auf die Schaltfl&auml;che <em>Auto</em>
    neben dem PDF-Feld im Eintrags-Editor. Wenn die PDF-Datei
    gefunden wird, wird das Feld entsprechend gesetzt.</p>

    <p>Wenn Sie eine PDF-Datei wie beschrieben benennen,
    k&ouml;nnen Sie sie auch &ouml;ffnen, ohne das PDF-Feld
    &uuml;berhaupt zu benutzen. Der Nachteil ist in diesem Fall
    allerdings, dass das PDF-Icon in der Tabellenansicht nicht
    angezeigt wird, solange das PDF-Feld leer bleibt.</p>

    <h2>Dateispezifische PDF- und PS-Verzeichnisse</h2>

    <p>Sie k&ouml;nnen f&uuml;r jede Datei eigene PDF- und
    PS-Verzeichnisse angeben (<b>Datei -&gt; Eigenschaften der
    Datei</b>). Diese Verzeichnisse ersetzen dann die
    Standardverzeichnisse.</p>

    <h2><a name="RegularExpressionSearch"
       id="RegularExpressionSearch">Die Suche mit regul&auml;ren
       Ausdr&uuml;cken f&uuml;r automatische Verkn&uuml;pfungen
       nutzen</a></h2>

    <p>Wenn Sie Dateinamen verwenden, die dem bibtexkey
    erg&auml;nzt um die Dateiendung entsprechen, findet JabRef
    diese Dateien automatisch.</p>

    <p>Ab Version 2.2 ist mit Hilfe von regul&auml;ren
    Ausdr&uuml;cken eine gr&ouml;&szlig;ere Flexibilit&auml;t beim
    Benennen der Dateien gew&auml;hrleistet. In den meisten
    F&auml;llen d&uuml;rfte das Standardverhalten bereits
    ausreichend sein.</p>

    <p>In den Einstellungen zu externen Programmen (<b>Optionen
    -&gt; Einstellungen -&gt; Externe Programme</b>) findet sich
    eine Option "Suche mit regul&auml;rem Ausdruck benutzen". Wenn
    Sie diese Option aktivieren, k&ouml;nnen Sie f&uuml;r die Suche
    in PDF-Verzeichnissen einen eigenen regul&auml;ren Ausdruck
    angeben.</p>

    <p>Die folgende Syntax wird verwendet:</p>

    <ul>
        <li><code>*</code> - Suche in allen direkten
        Unterverzeichnissen, NICHT im aktuellen Verzeichnis und in
        Unterverzeichnissen zweiter oder tieferer Ebene.</li>

        <li><code>**</code> - Rekursive Suche in allen
        Unterverzeichnissen UND im aktuellen Verzeichnis.</li>

        <li><code>.</code> und <code>..</code> - Das aktuelle
        Verzeichnis und das Elternverzeichnis (eine Ebene
        h&ouml;her).</li>

        <li><code>[title]</code> - Alle Ausdr&uuml;cke in eckigen
        Klammern werden durch den Inhalt des entsprechenden Felds
        ersetzt.</li>

        <li><code>[extension]</code> - Wird durch die Dateiendung
        des Feldes, das Sie benutzen, ersetzt.</li>

        <li>Anderer Text wird als regul&auml;rer Ausdruck
        interpretiert. Aber Vorsicht: <em>backslashes</em>
        m&uuml;ssen mit einem weiteren <em>backslash</em>
        <em>escaped</em> werden (<tt>\\</tt>), damit sie nicht mit
        Separatoren in Pfad-Angaben verwechselt werden.</li>
    </ul>

    <p>Der Standard ist
    <code>**/.*[bibtexkey].*\\.[extension]</code>. Damit wird in
    allen Unterverzeichnissen des Ordners der entsprechenden
    Dateiendung (z.B. das PDF-Verzeichnis) nach allen Dateien mit
    der richtigen Dateiendung gesucht, die den bibtexkey in ihrem
    Namen haben.</p>
    <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
