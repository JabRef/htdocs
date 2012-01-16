<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Filtre d'exportation EndNote</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>
	
 />

    <h1>Filtre d'exportation EndNote</h1>

    <h2>Exportation &agrave; partir de JabRef</h2>

    <p>JabRef peut
    exporter des bases de donn&eacute;es dans des fichiers lisibles
    par EndNote. Pour utiliser cette fonction, choisissez
    <b>Fichier -&gt; Export</b>, choisissez le type de fichier
    <b>Endnote (*.txt)</b> et sp&eacute;cifiez le nom du fichier
    d'exportation.</p>

    <h2>Importer dans EndNote</h2>

    <p>Le fichier par d&eacute;faut
    d'importation d'EndNote ne traite pas proprement les auteurs ou
    les &eacute;diteurs multiples. Il y a deux fa&ccedil;ons de
    contourner cela&nbsp;:</p>

    <ol>
        <li>Utiliser le filtre interne et corriger ensuite le
        fichier. Pour ouvrir le fichier dans EndNote, cr&eacute;ez
        une nouvelle base de donn&eacute;es ou ouvrez une ancienne
        base de donn&eacute;es dans EndNote. Ensuite,
        s&eacute;lectionnez <b>Fichier -&gt; Importer</b>, cliquer
        sur <b>Choisir le filtre</b>, puis s&eacute;lectionnez le
        fichier export&eacute; et cliquez sur <b>Choisir</b>.
        Cliquez sur <b>Options d'importation</b> et
        s&eacute;lectionnez <b>Importation EndNote</b>. Cliquez sur
        <b>Importer</b> pour d&eacute;marrer l'importation.
        Apr&egrave;s l'importation, s&eacute;lectionnez
        <b>Edition-&gt; Changer le texte</b>. Changez <b>N'importe
        quel champ</b> en <b>Author</b>. Entrez " and " &agrave;
        l'int&eacute;rieur du champ de recherche (sans les
        guillemets). Entrez un retour chariot dans le champ
        Remplacer (option-return pour Mac OS X, ctrl-return pour
        Windows XP). Cliquez sur <b>Remplacer</b>.
        R&eacute;p&eacute;tez avec le champ <b>Secondary
        Author</b>. [NdT: difficile &agrave; traduire sans avoir
        EndNote... oui]</li>

        <li>Installer le <i>filtre d'importation d'EndNote depuis
        JabRef</i> dans le <i>EndNote Extras</i>. Suivez les
        instructions dans la section <i>Utilisation
        avanc&eacute;e</i> ci-dessous. Pour ouvrir le fichier dans
        EndNote, cr&eacute;ez une nouvelle base de donn&eacute;es
        ou ouvrez une ancienne base de donn&eacute;es dans EndNote.
        Ensuite, s&eacute;lectionnez <b>Fichier -&gt; Importer</b>,
        cliquez sur <b>Choisir le filtre</b>, puis
        s&eacute;lectionnez le fichier export&eacute; et cliquez
        sur <b>Choisir</b>. Cliquez sur <b>Options
        d'importation</b> et s&eacute;lectionnez <b>Filtre
        d'importation d'EndNote depuis JabRef</b> (s'il n'est pas
        pr&eacute;sent, s&eacute;lectionnez Autres filtres. S'il
        n'appara&icirc;t toujours pas, il n'a pas &eacute;t&eacute;
        install&eacute; correctement). Cliquer sur <b>Importer</b>
        pour d&eacute;marrer l'importation.</li>
    </ol>

    <h2>Notes</h2>

    <p>Le filtre d'exportation EndNote fait correspondre
    les types d'entr&eacute;es BibTeX avec les types de
    r&eacute;f&eacute;rence d'EndNote de la fa&ccedil;on
    suivante&nbsp;:</p>
    <pre>
Type d'entr&eacute;e BibTeX -&gt; Type de r&eacute;f&eacute;rence d'EndNote
---------------------------------------------------
misc, other -&gt; Generic
unpublished -&gt; Manuscript
manual -&gt; Computer Program
article -&gt; Journal Article
book -&gt; Book
booklet -&gt; Personal Communication
inbook,incollection -&gt; Book Section
inproceedings -&gt; Conference Proceedings
techreport -&gt; Report
mastersthesis, phdthesis -&gt; Thesis</pre>

    <h2>Auteurs collectifs</h2>

    <p>Par d&eacute;faut, le filtre
    d'exportation suppose que le contenu des champs author ou
    editor qui sont dans des accolades sont des auteurs collectifs
    et remplace les accolades par une virgule. Cependant, cela
    signifie que les champs qui contiennent du code LaTeX entre
    accolades seront suppos&eacute;s &ecirc;tre des auteurs
    collectifs et seront donc improprement format&eacute;s.</p>

    <h2>Utilisation avanc&eacute;e&nbsp;: Suppl&eacute;ments
    EndNote</h2>

    <h3>Installation du filtre d'importation d'EndNote depuis
    JabRef</h3>Le filtre par d&eacute;faut d'importation d'EndNote
    ne traite pas correctement les auteurs. Le filtre d'importation
    d'EndNote depuis JabRef le fait proprement. De plus, ce filtre
    reconna&icirc;tra un champ EndNotereftype qui supplantera la
    table des correspondances par d&eacute;faut. Pour installer ce
    filtre, extraire les suppl&eacute;ments pour EndNote (<b>Outils
    -&gt; D&eacute;compacter la s&eacute;rie de filtres
    EndNote</b>) et d&eacute;compresser le fichier Zip qui est
    cr&eacute;e. Ensuite, suivez les instructions du fichier
    readme.txt.

    <h3>Modification des types de r&eacute;f&eacute;rence
    d'EndNote</h3>Plusieurs champs utilis&eacute;s par BibTeX ne
    font pas partie des Types de R&eacute;f&eacute;rence par
    d&eacute;faut d'EndNote. Alors que l'importation depuis JabRef
    et l'exportation &agrave; partir de JabRef fonctionneront
    correctement sans modifier les types de
    r&eacute;f&eacute;rences, les noms de champs ne seront pas
    affich&eacute;s correctement dans EndNote (par exemple, une
    fen&ecirc;tre d'entr&eacute;e appellera le champ PDF <i>"Custom
    1"</i> au lieu de <i>"pdf"</i>. De plus, puisque ces champs
    n'appara&icirc;tront pas dans la fen&ecirc;tre
    d'&eacute;dition, ces champs ne pourront pas &ecirc;tre
    ajout&eacute;s &agrave; de nouvelles entr&eacute;es dans
    EndNote. Pour modifier les Types de R&eacute;f&eacute;rences
    d'EndNote, extrayez les Suppl&eacute;ments EndNote et suivez
    les instructions du fichier readme.txt.
 
    <h3>Exportation vers JabRef</h3>EndNote est fourni avec un
    style d'exportation BibTeX. Cependant, il ne prend pas en
    compte tous les types et les champs BibTeX et ne prend pas non
    plus en compte les Champs G&eacute;n&eacute;raux additionnels
    support&eacute;s par JabRef (<i>pdf, owner, key,</i> etc.). Si
    vous souhaitez que ces champs soient pris en compte, extrayez
    les Suppl&eacute;ments EndNote (<b>Outils - &gt;
    D&eacute;compacter la s&eacute;rie de filtres EndNote</b>) et
    suivez les instructions du fichier readme.txt.
  <?php include("../footer.php"); ?>
  </div>

</body>
</html>
