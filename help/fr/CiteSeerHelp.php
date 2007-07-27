<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <title>R&eacute;cup&eacute;ration depuis CiteSeer</title>
  <link href='/css/style.css' rel='stylesheet' type='text/css' />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">Retour au contenu</a>


    <h1>R&eacute;cup&eacute;ration depuis CiteSeer</h1>CiteSeer est
    une biblioth&egrave;que num&eacute;rique et un moteur de
    recherche qui s'int&eacute;resse principalement &agrave; la
    litt&eacute;rature scientifique en informatique et science de
    l'information. 

    <h2>R&eacute;cup&eacute;ration d'une entr&eacute;e depuis
    CiteSeer</h2>

    <p>JabRef peut r&eacute;cup&eacute;rer de l'information sur une
    entr&eacute;e particuli&egrave;re &agrave; partir de la base de
    donn&eacute;es CiteSeer. Pour initier ce processus, ajoutez une
    nouvelle entr&eacute;e dans votre base de donn&eacute;es et
    renseignez le champ citeseerurl avec un lien vers la page de
    contenu sur CiteSeer. Le champ citeseerurl doit &ecirc;tre
    rempli avec l'un des formats suivants :</p>

    <p>http://citeseer.ist.psu.edu/DDDDDD[.html], ou<br />
    oai:CiteSeerPSU:DDDDDD, ou<br />
    DDDDDD</p>

    <p>o&ugrave; DDDDD est une s&eacute;quence de chiffres. Pour
    trouver la s&eacute;quence de chiffres (DDDDD) pour une
    entr&eacute;e CiteSeer, allez sur la page contenant le document
    cit&eacute; avec l'adresse
    http://citeseer.ist.psu.edu/<i>nomAnn&eacute;eTitre</i>.html et
    cliquez sur le lien (update) pour cette citation. L'URL pour le
    lien update devrait contenir l'ID num&eacute;rique de la
    citation.</p>

    <p>Une fois que vous avez renseign&eacute; le champ
    citeseerurl, vous pouvez t&eacute;l&eacute;charger les champs
    sur CiteSeer en s&eacute;lectionnant le menu <b>BibTeX -&gt;
    Importer les champs depuis CiteSeer</b>. V&eacute;rifier que
    vous avez bien s&eacute;lectionn&eacute; la (les) lignes(s) que
    vous voulez mettre &agrave; jour.</p>

    <h2>G&eacute;n&eacute;ration d'une base de citations</h2>

    <p>A partir d'une s&eacute;rie de r&eacute;f&eacute;rences,
    vous pouvez g&eacute;n&eacute;rer une liste de documents qui
    citent les &eacute;l&eacute;ments de cette liste. Pour
    faciliter cette op&eacute;ration, chaque citation de la base de
    donn&eacute;es doit avoir son champ citeseerurl rempli selon
    l'un des formats indiqu&eacute;s dans
    <b>R&eacute;cup&eacute;ration d'une entr&eacute;e depuis
    CiteSeer</b>. Pour r&eacute;aliser cette op&eacute;ration,
    s&eacute;lectionnez <b>Recherche internet -&gt; Recherche de
    citations dans CiteSeer</b>.</p>

    <h2>Utilisation d'un serveur proxy</h2>

    <p>Si vous avez besoin d'utiliser un serveur de proxy, passez
    le nom du serveur et le num&eacute;ro de port au lancement de
    java. Ces param&egrave;tres d'environnement sont
    document&eacute;s sur</p>

    <p>
    http://java.sun.com/j2se/1.4.2/docs/guide/net/properties.html</p>

    <p><code>java -Dhttp.proxyHost="hostname"
    -Dhttp.proxyPort="portnumber"</code></p>
    <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
