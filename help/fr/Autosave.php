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



    <p>La fonction de sauvegarde automatique aide &agrave; pr&eacute;venir la perte de donn&eacute;es si votre ordinateur ou JabRef plante.
    Quand la sauvegarde automatique est activ&eacute;e, JabRef v&eacute;rifie r&eacute;guli&egrave;rement (&agrave; un intervalle de temps configurable)
    si l'une de vos bases a &eacute;t&eacute; modifi&eacute;e depuis votre dernier enregistrement. Si c'est le cas,
    JabRef cr&eacute;era une copie de la base dans un fichier nomm&eacute; <code>.$[fichier]$</code>,
    o&ugrave; <code>[fichier]</code> est le nom de fichier de la base en question. Le fichier de sauvegarde automatique
    se trouve dans le m&ecirc;me r&eacute;pertoire que le fichier bib.</p>
    <p>Le fichier de sauvegarde automatique sera effac&eacute; d&egrave;s que vous enregistrerez la base, ainsi qui si vous
    quittez normalement JabRef. Cependant, si JabRef se ferme &agrave; cause d'un plantage, le fichier de sauvegarde automatique
    persistera. Dans ce cas, il sera d&eacute;tect&eacute; la prochaine fois que vous essayerez d'ouvrir la base, et on vous proposera
    alors de r&eacute;cup&eacute;rer la base &agrave; partir du fichier de sauvegarde automatique.</p>
    <p>La sauvegarde automatique est activ&eacute;e par d&eacute;faut, avec un intervalle de sauvegarde de 5&nbsp;minutes. Si vous le voulez, vous
    pouvez d&eacute;sactiver l'option vous demandant de confirmer la r&eacute;cup&eacute;ration de la base &agrave; partir du fichier de sauvegarde automatique.
    Dans ce cas, JabRef r&eacute;cup&eacute;rera la base directement, sans vous en informer.</p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
