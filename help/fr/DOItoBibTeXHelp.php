<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
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

    <h1>R&eacute;cup&eacute;ration d'entr&eacute;es en utilisant
         l'identifiant d'objet num&eacute;rique (DOI)</h1>

    <p>Pour utiliser cette fonction, choisissez <b>Recherche -&gt; recherche Web</b>,
    et l'interface de recherche s'affichera dans le panneau lat&eacute;ral.
    S&eacute;lectionnez <b>DOI vers BibTeX</b> dans le menu d&eacute;roulant.</p>

    <p>Ce moteur de recherche utilise
    <a href="http://dx.doi.org/">http://dx.doi.org/</a>
    pour convertir un DOI en une entr&eacute;e BibTeX.</p>

    <p>Entrer le DOI dans le champ de recherche et presser sur <b>Entrer</b>
        ou sur le bouton <b>Recherche</b>.
        L'entr&eacute;e sera r&eacute;cup&eacute;r&eacute;e et ajout&eacute;e &agrave; votre base actuellement active.
        En cas de survenue d'une erreur, elle s'affichera dans une fen&ecirc;tre.</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
