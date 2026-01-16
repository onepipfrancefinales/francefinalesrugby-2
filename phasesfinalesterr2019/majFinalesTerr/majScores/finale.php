<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../maj.css">

</head>
<?php $page="score"; ?>


<?php 
if (isset ($_GET['division'])) $division=$_GET['division'];$division='xx'; ?>
<?php $comite=$_GET['comite']; ?>
<?php $annee=$_GET['annee']; ?>
<?php $type=$_GET['type'];



require '../../../connect/connexion6.php';

require ("../../fonctionspfterrESDL2019.php"); 
finale2019 ($comite, $division, $annee, $bdd);


?>



<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
  
  <input type="hidden" name="division" value="<?php echo($division) ;?>">
 
    <header>
		<h1>FINALE  <?php echo $division.''." ( ".''.$division.''." ) ".''.$annee; ?></h1>
   	<header>

    <nav>
	  <h3>1</h3>
      <h2><?php echo $clubA1001; ?></h2>  
      <h2><?php echo $clubA1002; ?></h2>
	</nav> 
   
	<h4></h4>
	
  	<input type="text" name="A1001" value="<?php echo $A1001 ;?>" size="3">
    <input type="text" name="A1002" value="<?php echo $A1002 ;?>" size="3">
  	
  	<footer> 
  		<input type="submit" value="modifier" name="submit">
  	</footer> 
</form>
      
      
	</body>
</html>
