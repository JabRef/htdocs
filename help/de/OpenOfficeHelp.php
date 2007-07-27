<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <title>JabRef-Bibliographien in OpenOffice.org benutzen</title>
  <link href='/css/style.css' rel='stylesheet' type='text/css' />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">Zur&uuml;ck zum Inhaltsverzeichnis</a>


    <h1>JabRef-Bibliographien in OpenOffice.org benutzen</h1>JabRef
    kann Ihre Datei sowohl in das OpenOffice.org 1.1
    <b>.sxc</b>-Tabellenkalkulationsformat als auch in das
    OpenDocument <b>.ods</b>-Tabellenkalkulationsformat, das von
    OpenOffice.org 2.0 benutzt wird, exportieren. 

    <p>In beiden f&auml;llen besteht die exportierte Tabelle aus
    einem Arbeitsblatt, das die Eintr&auml;ge in Reihen und die
    unterschiedlichen Felder in Spalten enth&auml;lt. Die
    Reihenfolge und Bennung der Spalten ist kompatibel zu den
    Literaturverzeichnis-Funktionen von OpenOffice.org (OOo 1.1:
    <b>.sxc</b>, OOo 2.0: <b>.ods</b>).</p>

    <h2>Die exportierte Datei als Bibliographiedatenbank in
    OpenOffice 2.0 (oder neuer) benutzen</h2>Gehen Sie
    folgenderma&szlig;en vor, um eine Tabelle, die von JabRef
    exportiert wurde, als Bibliographiedatenbank in OpenOffice.org
    zu benutzen: 

    <ul>
        <li>Exportieren Sie Ihre Datenbank in das <b>.ods</b>
        -Format</li>

        <li>Starten Sie OpenOffice.org</li>

        <li>W&auml;hlen Sie <b>Extras -&gt; Optionen -&gt;
        OpenOffice.org Base -&gt; Datenbanken</b></li>

        <li>Bearbeiten Sie die <i>Bibliography</i>-Datenbank und
        &auml;ndern ihren Namen z.B. in
        <i>Bibliographie-alt</i></li>

        <li>Schlie&szlig;en Sie das Fenster <b>Optionen</b> und
        gehen Sie zu <b>Datei -&gt; Neu -&gt; Datenbank</b></li>

        <li>W&auml;hlen Sie <b>Verbindung zu einer bestehenden
        Datenbank herstellen</b>, w&auml;hlen
        <b>Tabellendokument</b> als Datenbanktyp und w&auml;hlen
        die <b>.ods</b>-Datei, die Sie exportiert haben</li>

        <li>Klicken Sie auf <b>Fertig stellen</b> und w&auml;hlen
        den Namen <i>Bibliography</i> im Speicherdialog</li>
    </ul>Anschlie&szlig;end w&auml;hlen Sie <b>Extras -&gt;
    Literaturdatenbank</b>. Ihre Datenbank sollte nun angezeigt
    werden. 

    <h2>Eine exportierte Datei als Datenbank in OpenOffice 1.1.x
    benutzen</h2>

    <ul>
        <li>Exportieren Sie Ihre Datei in das
        <b>.sxc</b>-Format</li>

        <li>Starten Sie OpenOffice.org</li>

        <li>W&auml;hlen Sie <b>Extras -&gt; Datenquellen</b></li>

        <li>W&auml;hlen Sie die <i>Bibliography</i>-Datei und
        &auml;ndern ihren Namen z.B. in
        <i>Bibliographie-alt</i>.</li>

        <li>Dr&uuml;cken Sie <b>Anwenden</b>.</li>

        <li>Klicken Sie <b>Neue Datenquelle</b>. Ein neuer Eintrag
        erscheint. &Auml;ndern Sie den Namen zu
        <i>Bibliography</i>.</li>

        <li>&Auml;ndern Sie den <b>Dateityp</b> zu <b>Tabelle</b>.
        Klicken Sie den <b>...</b>-Button in der Zeile
        <b>Datenquellen URL</b>. W&auml;hlen Sie die
        <b>.sxc</b>-Datei, die Sie exportiert haben.</li>

        <li>Klicken Sie auf <b>OK</b>, um das Fenster
        <b>Datenquellen</b> zu schlie&szlig;en.</li>
    </ul>Anschlie&szlig;end w&auml;hlen Sie <b>Extras -&gt;
    Literaturdatenbank</b>. Ihre Datenbank sollte nun angezeigt
    werden. 
    <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
