<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Recherche Google Scholar</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">Retour au contenu</a>


    <h1>Recherche Google Scholar</h1>

    <p>JabRef peut rechercher et t&eacute;l&eacute;charger des citations depuis Google Scholar.
    Pour utiliser cette fonction, choisissez <b>Recherche -&gt; recherche Web</b>,
    et l'interface de recherche s'affichera dans le panneau lat&eacute;ral.
    S&eacute;lectionnez <b>Google Scholar</b> dans le menu d&eacute;roulant.</p>
        
    
    <p>Pour d&eacute;marrer une recherche, entrer les mots de votre requ&ecirc;te
        et presser sur <b>Entrer</b> ou sur le bouton <b>Recherche</b>.</p>

    <p>De fr&eacute;quentes connexions &agrave; Google Scholar feront que Google affichera un
        test CAPTCHA que JabRef ne peut pas passer. Pour &eacute;viter cette situation,
        JabRef affichera pour chaque recherche une pr&eacute;visualisation de la 
        premi&egrave;re page des entr&eacute;es renvoy&eacute;es par le serveur. Vous pouvez alors
        choisir quelles entr&eacute;es doivent &ecirc;tre t&eacute;l&eacute;charg&eacute;es.</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
