<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../../maj.css">
</head>
<?php

$page="equipe";

//if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
//if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
//if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
//if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 


$bdcomiteClub = $comite.''."_clubs";
$bdcomite_pfterr_e=$comite.''."_pfterr_e";

huitieme2019 ($comite, $division, $annee, $bdd) ;

?>
<body bgcolor="#FFFFFF" text="#000000">
<!-- ************  Quarts de finale   ************ -->
  <form name="insertion" action="saisieEquipe2.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&comite=<?php echo $comite ; ?>&annee=<?php echo $annee ; ?>" method="POST">
						 	   
	<input type="hidden" name="division" value="<?php echo($division) ;?>">		  
	<header><h1> Division ) Ann&eacute;e  <?php echo $annee; ?></h1></header>          
    
	<p class="texte">8me de finale</p>
	   
	<h3>1</h3>
    <h2><?php echo $clubA8001; ?></h2>
    <h2><?php echo $clubA8002; ?></h2>
	<h4></h4>
    <input type="text" name="clubA8001" value="<?php echo $id8001 ;?>" size="3">
    <input type="text" name="clubA8002" value="<?php echo $id8002 ;?>" size="3">
     
	<h3>2</h3>
    <h2> <?php	echo $clubA8003; ?></h2>
    <h2> <?php	echo $clubA8004; ?></h2>
	<h4></h4>
    <input type="text" name="clubA8003" value="<?php echo $id8003 ;?>" size="3">
    <input type="text" name="clubA8004" value="<?php echo $id8004 ;?>" size="3">
      
	<h3>3</h3>
    <h2> <?php echo $clubA8005; ?></h2>
    <h2><?php echo $clubA8006; ?></h2>
	<h4></h4>
    <input type="text" name="clubA8005" value="<?php echo $id8005 ;?>" size="3">
    <input type="text" name="clubA8006" value="<?php echo $id8006 ;?>" size="3">
     
	<h3>4</h3>
    <h2><?php echo $clubA8007; ?></h2>
    <h2><?php echo $clubA8008; ?></h2>
	<h4></h4>
    <input type="text" name="clubA8007" value="<?php echo $id8007 ;?>" size="3">
    <input type="text" name="clubA8008" value="<?php echo $id8008 ;?>" size="3">
      
	<h3>5</h3>
    <h2> <?php	echo $clubA8009; ?></h2>
    <h2> <?php	echo $clubA8010; ?></h2>
	<h4></h4>
    <input type="text" name="clubA8009" value="<?php echo $id8009 ;?>" size="3">
    <input type="text" name="clubA8010" value="<?php echo $id8010 ;?>" size="3">
      
	<h3>6</h3>
    <h2><?php	echo $clubA8011; ?></h2>
    <h2>  <?php	echo $clubA8012; ?></h2>
	<h4></h4>
    <input type="text" name="clubA8011" value="<?php echo $id8011 ;?>" size="3">
    <input type="text" name="clubA8012" value="<?php echo $id8012 ;?>" size="3">
       
	<h3>7</h3>
    <h2><?php echo $clubA8013; ?></h2>
    <h2><?php echo $clubA8014; ?></h2>
	<h4></h4>
    <input type="text" name="clubA8013" value="<?php echo $id8013 ;?>" size="3">
    <input type="text" name="clubA8014" value="<?php echo $id8014 ;?>" size="3">
        
	<h3>8</h3>
    <h2><?php	echo $clubA8015; ?></h2>
    <h2><?php	echo $clubA8016; ?></h2>
	<h4></h4>
    <input type="text" name="clubA8015" value="<?php echo $id8015 ;?>" size="3">
    <input type="text" name="clubA8016" value="<?php echo $id8016 ;?>" size="3">
   
	<footer><input type="submit" value="modifier" name="submit"></footer>
		
    <a href="../../accueilMAJ.php" target="_top">Retour</a> 
  </form>
						
						
						
						
