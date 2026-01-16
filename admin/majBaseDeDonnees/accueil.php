<?php 
require '../../saison.php';
echo "Saison : " . $saison;
echo "  (valeur obtenue à partie du fichier saison.php)";
echo "<hr />";

$annee =  $_GET['annee'];
echo $annee;


?>
<p><a href="/admin/majDebutSaison/pageAjouterJournee.php">retour accueil</a></p>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<h1 text-align="center">Mise à jour des tables bdSaison / bdequipe1 / bdequipe2</h1>
<br/>
<h2 >Champions régionaux </h2>
  <p><a href="championsRegionaux.php?annee=<?php echo $annee;?>">G&eacute;n&eacute;rer le fichier des champions 
  des diff&eacute;rentes ligues (Equipes premières) (table bdequipe1)</a></p>

<p><a href="championsRegionauxReserves.php?annee=<?php echo $annee;?>">G&eacute;n&eacute;rer le fichier des champions 
  des diff&eacute;rentes ligues (Equipes Réserves) (table bdequipe2) </a></p>


  <h2>Participations et champions aux championnats de France </h2> 
  <p><a href="championsFrance.php?annee=<?php echo $annee;?>">Liste des clubs participants aux phases finales 
  du champs de France (table bdsaisonset bdEquipe1)</a></p>

  <p> -> Mise à jour des tables bdequipe1, bdequipe2 et bdSaison (pour les compétition de 110 à 160)</p>
<!--
  <p><a href="participantschampionsRegionaux.php?annee=<?php echo $saison;?>">Liste des clubs participants aux 
  phases finales du champs des ligues (table bdsaison)</a></p>
-->
<h2>*********************************************************** </h2>
<h2>bdsaisons </h2>
<p> -> Création des colonnes terr_annee et france_annee dans la table bdsaisons</p>
<p> -> Récupèration et insertion des données dans les colonnes terr_annee et france_annee de la table bdsaisons</p>

<p><a href="selectionLigue.php?annee=<?php echo $annee;?>">Liste des clubs participants aux 
  phases finales régionales (Maj tables bdsaison )</a></p>

<h2>bdequipe1 / bdequipe2</h2>
<p> -> Ajout ou modfication des données dans la table bdequipe1</p>
  

</body>
</html>
