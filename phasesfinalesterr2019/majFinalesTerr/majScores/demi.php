<html>
 <head>
 <title>modification de données en PHP :: partie2</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css.css">
	<link rel="stylesheet" type="text/css" href="../../maj.css">
</head>

<body>

<?php 
$page="score"; 
 
if (isset ($_GET['division'])) $division=$_GET['division'];$division='xx'; 
 $comite=$_GET['comite']; 
 $annee=$_GET['annee']; 
 $type=$_GET['type'];

require '../../../connect/connexion6.php';
require ("../../fonctionspfterrESDL2019.php");  
demi2019 ($comite, $division, $annee, $bdd );
?>

<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
  <input type="hidden" name="division" value="<?php echo($division) ;?>">
	<header><h1>DEMI FINALE <?php echo $division.'('.$id.')'.$annee; ?></h1></header>     
	 <h3>1</h3>
	     <h2><?php echo $clubA2001; ?></h2>
         <h2><?php echo $clubA2002; ?></h2>
     <h4></h4>
        <input type="text" name="A2001" value="<?php echo $A2001 ;?>" size="3">
           <input type="text" name="A2002" value="<?php echo $A2002 ;?>" size="3">
	 <h3>2</h3>
       	<h2><?php echo $clubA2003; ?></h2>
       	<h2><?php echo $clubA2004; ?></h2>
     <h4></h4>
		<input type="text" name="A2003" value="<?php echo $A2003 ;?>" size="3">
        <input type="text" name="A2004" value="<?php echo $A2004 ;?>" size="3">
		
	<p class="texte">Finale  </p>
     <h3>1</h3>
        <h2> <?php	echo $clubA1001; ?> </h2> 
        <h2><?php	echo $clubA1002; ?></h2>
     <h4></h4>
        <input type="text" name="A1001" value="<?php echo $A1001 ;?>" size="3">
   		<input type="text" name="A1002" value="<?php echo $A1002 ;?>" size="3">
   	
    <footer><input type="submit" value="modifier" name="submit"></footer>
   </form>
  </body>
</html>
