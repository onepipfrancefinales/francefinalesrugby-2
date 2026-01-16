<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../maj.css">
</head>
<?php 
$page="score"; 
$division=$_GET['division']; 
$comite=$_GET['comite']; 
$annee=$_GET['annee']; 
$type=$_GET['type'];

$phpbd_pfterr_e=$comite.''."_pfterr_e"; 
$phpbd_pfterr_r=$comite.''."_pfterr_r";
$bdcomiteClub = $comite.''."_clubs";
require '../../../connect/connexion6.php';
require ("../../fonctionspfterrESDL2019.php");    
demiAR2019 ($comite, $division, $annee, $bdd);

?>

<body bgcolor="#FFFFFF" text="#000000">
 
<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
  <header>
     <h1><?php echo "DEMI FINALE AR".''.$division.' ('.$id.' ) '.$annee; ?></h1>
  </header>    
        
  <h3>Aller 1</h3>
	    <h2><?php	echo $clubA2001; ?></h2>
        <h2><?php	echo $clubA2002; ?></h2>
        <h4></h4>
		<input type="text" name="A2001" value="<?php echo $A2001 ;?>" size="3" placeholder="Points terrain">
  		<input type="text" name="A2002" value="<?php echo $A2002 ;?>" size="3" placeholder="Points terrain">
  <h4></h4>
        <input type="text" name="A4001" value="<?php echo $A4001 ;?>" size="3" placeholder="Goal Average">
        <input type="text" name="A4002" value="<?php echo $A4002 ;?>" size="3" placeholder="Goal Average">
       
  <h3>Aller 2</h3>
      <h2><?php	echo $clubA2003; ?></h2>
      <h2><?php	echo $clubA2004; ?></h2> 
  <h4></h4>
        <input type="text" name="A2003" value="<?php echo $A2003 ;?>" size="3" placeholder="Points terrain">  
        <input type="text" name="A2004" value="<?php echo $A2004 ;?>" size="3" placeholder="Goal Average"> 
  <h4></h4> 
        <input type="text" name="A4003" value="<?php echo $A4003 ;?>" size="3" placeholder="Points terrain">
        <input type="text" name="A4004" value="<?php echo $A4004 ;?>" size="3" placeholder="Goal Average">
       
    <hr/>
  <h3>Retour 1</h3>
       <h2> <?php	echo $clubA2002; ?></h2>
       <h2> <?php	echo $clubA2001; ?></h2>
		<h4></h4>
        <input type="text" name="R2002" value="<?php echo $R2002 ;?>" size="3" placeholder="Points terrain">
        <input type="text" name="R2001" value="<?php echo $R2001 ;?>" size="3" placeholder="Points terrain">
   <h4></h4>  
        <input type="text" name="R4002" value="<?php echo $R4002 ;?>" size="3" placeholder="Goal Average">
        <input type="text" name="R4001" value="<?php echo $R4001 ;?>" size="3" placeholder="Goal Average">

  <h3>Retour 2</h3>
        <h2><?php	echo $clubA2004; ?></h2>
        <h2><?php	echo $clubA2003; ?></h2>
  <h4></h4>  
        <input type="text" name="R2004" value="<?php echo $R2004 ;?>" size="3" placeholder="Points terrain">
        <input type="text" name="R2003" value="<?php echo $R2003 ;?>" size="3" placeholder="Points terrain">
   <h4></h4> 
        <input type="text" name="R4004" value="<?php echo $R4004 ;?>" size="3" placeholder="Goal Average">
        <input type="text" name="R4003" value="<?php echo $R4003 ;?>" size="3" placeholder="Goal Average">
       
  <p class="texte">	Finale </p>
       
  <h3>1</h3>
		<h2> <?php echo $clubA1001; ?></h2>
        <h2> <?php echo $clubA1002; ?></h2>
   <h4></h4>
        <input type="text" name="A1001" value="<?php echo $A1001 ;?>" size="3">
        <input type="text" name="A1002" value="<?php echo $A1002 ;?>" size="3">

	<footer>
		<input type="submit" value="modifier" name="submit">
    </footer>
    </form>
  </body>
</html>
