<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');

  // DO NOT EDIT BY HAND
  // This file is generated from jabref/src/help.
  // Run generate-htdocs-help-from-jabref-src-help.pl in the root directory
  // of the JabRef repository to regenerate the htdocs out of JabRef's help.
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title></title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">Retour au contenu</a>



    <h1>R&eacute;cup&eacute;ration d'entr&eacute;es depuis
    Medline</h1>

    <p>Pour utiliser cette fonction, choisissez <b>Recherche -&gt; Recherche Web</b>.
    L'interface de recherche apparaitra dans le panneau lat&eacute;ral. S&eacute;lectionnez
    <b>Medline</b> dans le menu d&eacute;roulant.</p>
            
    <p>MEDLINE est la principale base de donn&eacute;es
    bibliographique de la biblioth&egrave;que nationale de
    m&eacute;decine des &Eacute;tats-Unis. Elle contient des
    r&eacute;f&eacute;rences &agrave; des articles de journaux sur
    les sciences de la vie avec une sp&eacute;cialisation sur la
    biom&eacute;decine.</p>

    <p>Il y a deux mani&egrave;res d'indiquer les entr&eacute;es
    &agrave; t&eacute;l&eacute;charger&nbsp;:</p>

    <ol>
        <li>Entrez un ou plusieurs ID Medline
        (s&eacute;par&eacute;s par des virgules/points-virgules)
        dans le champ texte</li>

        <li>Entrez une s&eacute;rie de noms et/ou de mots &agrave;
        rechercher. Vous pouvez utiliser les op&eacute;rateurs
        <em>and</em> et <em>or</em> et les parenth&egrave;ses pour
        raffiner l'expression de votre recherche. Voir
        <a href="http://www.ovid.com/site/products/ovidguide/medline.htm">op&eacute;rateurs Medline/OVID</a>
        pour une description compl&egrave;te.</li>

       <li> Exemples&nbsp;:
       <ol>
         <li>May [au] AND Anderson [au]</li>
         <li> Anderson RM [au] HIV [ti] </li>
         <li> Valleron [au] 1988:2000[dp] HIV [ti]</li>
         <li> Valleron [au] AND 1987:2000[dp] AND (AIDS [ti] OR HIV[ti])</li>
         <li> Anderson [au] AND Nature [ta]</li>
         <li>Population [ta] </li>
       </ol>
       </li>
	   </ol>

       <p>Dans les deux cas, appuyez sur la touche
    <b>Entr&eacute;e</b> du clavier ou sur le bouton
    <b>Rechercher</b>. Si vous utilisez une recherche de texte,
    vous serez inform&eacute; du nombre d'entr&eacute;es
    trouv&eacute;es et vous pourrez choisir le nombre
    d'entr&eacute;es &agrave; t&eacute;l&eacute;charger.</p>

    <p>Les entr&eacute;es recherch&eacute;es seront ajout&eacute;es
    &agrave; votre base de donn&eacute;es active.</p>

    <h2>Utilisation d'un serveur proxy</h2>

    <p>Si vous avez besoin d'utiliser un serveur de proxy, passez
    le nom du serveur et le num&eacute;ro de port au lancement de
    java.</p>

    <p><code>java -Dhttp.proxyHost="hostname"
    -Dhttp.proxyPort="portnumber"</code></p>

    <p>Ces param&egrave;tres d'environnement sont
    expliqu&eacute;s dans la <a href="http://docs.oracle.com/javase/1.4.2/docs/guide/net/properties.html">documentation Oracle J2SE</a>.</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
