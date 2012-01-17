<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Liens de fichier dans JabRef</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">Retour au contenu</a>



    <h1>Liens de fichier dans JabRef</h1>

    <p>JabRef vous permet de lier
    vos entr&eacute;es avec des fichiers de n'importe quel type
    stock&eacute;s sur votre syst&egrave;me, ainsi qu'avec des
    documents sur internet sous forme d'une URL ou d'un identifiant
    DOI. Chaque entr&eacute;e peut contenir un nombre arbitraire de
    liens de fichier et chaque fichier li&eacute; peut &ecirc;tre
    ouvert rapidement depuis JabRef.</p>

    <p>En termes BibTeX, dans une entr&eacute;e, les liens de
    fichier sont encod&eacute;s dans un unique champ. Cependant,
    &agrave; l'int&eacute;rieur de JabRef, ils apparaissent comme
    une liste modifiable de liens &agrave; laquelle on
    acc&egrave;de depuis l'&eacute;diteur d'entr&eacute;es, comme
    pour les autres champs BibTeX.</p>

    <h2>Configurer les types de fichiers externes</h2>

    <p>Pour chaque
    lien de fichier, un type de fichier doit &ecirc;tre choisi afin
    de d&eacute;terminer quel ic&ocirc;ne devra &ecirc;tre
    utilis&eacute; et quelle application devra &ecirc;tre
    appel&eacute;e pour ouvrir le fichier. La liste des types de
    fichier peut &ecirc;tre affich&eacute;e et &eacute;dit&eacute;e
    en choisissant <b>Options -&gt; G&eacute;rer les types de
    fichiers externes</b> ou en cliquant sur le bouton
    <b>G&eacute;rer les types de fichiers externes</b> dans
    l'onglet <b>Programmes externes</b> des
    pr&eacute;f&eacute;rences.</p>

    <p>Un type de fichier est d&eacute;fini par un nom, un
    ic&ocirc;ne, une extension de fichier et une application pour
    afficher les fichiers. Sous Windows, le nom de l'application
    peut &ecirc;tre omis afin d'utiliser l'afficheur par
    d&eacute;faut de Windows.</p>

    <h2>Ajouter des liens externes &agrave; une
    entr&eacute;e</h2>

    <p>Si le champ "File" (fichier) est inclus dans les
    <a href="GeneralFields.php">champs g&eacute;n&eacute;raux</a>,
    vous pouvez &eacute;diter la liste des liens externes d'une
    entr&eacute;e dans
    l'<a href="EntryEditorHelp.php">&eacute;diteur
    d'entr&eacute;es</a>. L'&eacute;diteur d'entr&eacute;e inclut
    des boutons pour ins&eacute;rer, &eacute;diter et supprimer des
    liens, ainsi que des boutons pour r&eacute;-ordonner la liste
    de liens.</p>

    <p>Si vous avez un fichier &agrave; l'int&eacute;rieur ou en
    aval de votre r&eacute;pertoire de fichiers (configur&eacute;
    dans <b>Pr&eacute;f&eacute;rences -&gt; Programmes externes
    -&gt; Liens vers les fichiers externes -&gt; R&eacute;pertoire
    de fichiers principal</b>), si son extension correspondant
    &agrave; l'un des types de fichiers externes d&eacute;finis, et
    si son nom contient la clef d'une entr&eacute;e BibTeX, le
    fichier pourra &ecirc;tre li&eacute; automatiquement en
    cliquant sur le bouton <b>Auto</b> dans l'&eacute;diteur
    d'entr&eacute;es. Les r&egrave;gles d&eacute;crivant les noms
    de fichiers pouvant &ecirc;tre li&eacute;s automatiquement
    &agrave; une clef BibTeX peuvent &ecirc;tre configur&eacute;es
    dans <b>Pr&eacute;f&eacute;rences -&gt; Programmes externes
    -&gt; Liens vers les fichiers externes -&gt; Utiliser une
    recherche par expression r&eacute;guli&egrave;re</b>.</p>

    <p>Si vous voulez t&eacute;l&eacute;charger un fichier et le
    lier &agrave; partir d'une entr&eacute;e BibTeX, vous pouvez le
    faire en cliquant sur le bouton
    <b>T&eacute;l&eacute;charger</b> de l'&eacute;diteur
    d'entr&eacute;es. Une bo&icirc;te de dialogue va s'afficher,
    vous demandant d'entrer l'URL. Le fichier sera
    t&eacute;l&eacute;charg&eacute; dans votre r&eacute;pertoire de
    fichiers principal, renomm&eacute; selon la clef BibTeX de
    l'entr&eacute;e et finalement li&eacute; depuis cette
    entr&eacute;e.</p>
    
    <p>Il y a plusieurs alternatives au r&eacute;pertoire de fichiers principal.
    Vous avez la possibilit&eacute; (dans <b>Pr&eacute;f&eacute;rences -&gt; Programmes externes</b>)
    d'autoriser des liens relatifs &agrave; la localisation du fichier bib. Les
    fichiers li&eacute;s de cette mani&egrave;re peuvent &ecirc;tre d&eacute;plac&eacute;s avec le fichier bib
    sans casser ces liens. Il y a un autre param&egrave;tre sp&eacute;cifiant si la
    localisation du fichier bib doit &ecirc;tre le r&eacute;pertoire de fichier
    <i>principal</i>. Cela d&eacute;termine quel r&eacute;pertoire sera utilis&eacute; par JabRef
    lors du t&eacute;l&eacute;chargement ou du d&eacute;placement de liens li&eacute;s dans votre
    r&eacute;pertoire de fichiers.</p>
    
    <p>Vous pouvez aussi configurer un r&eacute;pertoire de fichiers (absolu ou
    relatif &agrave; la localisation du fichier bib) sp&eacute;cifiquement pour une base de
    donn&eacute;es dans <b>Fichier -&gt; Propri&eacute;t&eacute;s de la base de donn&eacute;es</b>.
    Finalement, dans la bo&icirc;te de dialogue <b>Propri&eacute;t&eacute;s de la base de
    donn&eacute;es</b>, vous pouvez configurer un r&eacute;pertoire de fichiers sp&eacute;cifique &agrave;
    l'utilisateur qui n'est valable uniquement quand vous &ecirc;tes celui travaillant
    sur le fichier bib.</p>    
    
    <h2>Ouvrir les fichiers externes</h2>

    <p>Il y a plusieurs
    fa&ccedil;ons d'ouvrir un fichier externe ou une page web. Dans
    la table d'entr&eacute;es, vous pouvez s&eacute;lectionner une
    entr&eacute;e et utiliser le menu, le raccourci-clavier ou le
    menu d&eacute;roulant pour ouvrir le premier lien externe d'une
    entr&eacute;e. Alternativement, si la table d'entr&eacute;es
    est configur&eacute;e pour afficher la colonne <b>Fichier</b>
    (configur&eacute; dans <b>Pr&eacute;f&eacute;rences -&gt; Table
    des entr&eacute;es -&gt; Colonnes de tableau
    particuli&egrave;res -&gt; Afficher la colonne Fichier</b>),
    vous pouvez cliquer sur l'ic&ocirc;ne fichier pour ouvrir le
    premier lien externe d'une entr&eacute;e. Pour acc&eacute;der
    &agrave; un lien particulier d'une entr&eacute;e, cliquez sur
    l'ic&ocirc;ne avec le bouton droit de la souris (ou
    <b>Ctrl-clic</b> sur Max OS X) pour afficher un menu montrant
    tous les liens.</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
