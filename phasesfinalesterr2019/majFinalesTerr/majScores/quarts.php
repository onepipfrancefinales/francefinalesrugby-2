<html>
  <head>
<title>modification de données en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../maj.css">
</head>

<body>

<?php $page="score"; ?>


<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
 
<?php 
echo "test2222";echo "<br>";
$division=$_GET['division']; 
$comite=$_GET['comite']; 
$annee=$_GET['annee']; 
$type=$_GET['type']; 

require '../../../connect/connexion6.php';
require ("../../fonctionspfterrESDL2019.php"); 
quarts2019 ($comite, $division, $annee, $bdd);

 ?>
  
  <header>
 
 <h1> QUARTS DE FINALE  <?php echo $division; ?> (   <?php echo $id; ?>  )    <?php echo $annee; ?></h1>
          
	<h3>1</h3>
	<input type="hidden" name="division" value="<?php echo($division) ;?>">
		<h2><?php echo $clubA4001; ?></h2>
        <h2><?php echo $clubA4002; ?></h2>
    <h4></h4>
    <input type="text" name="A4001" value="<?php echo $A4001 ;?>" size="3">
    <input type="text" name="A4002" value="<?php echo $A4002 ;?>" size="3">
      
	<h3>2</h3>  
		<h2><?php echo $clubA4003; ?></h2>
        <h2><?php echo $clubA4004; ?></h2>
    <h4></h4> 	
		<input type="text" name="A4003" value="<?php echo $A4003 ;?>" size="3">
        <input type="text" name="A4004" value="<?php echo $A4004 ;?>" size="3">
	  
	<h3>3</h3>
        <h2><?php echo $clubA4005; ?></h2>
        <h2><?php echo $clubA4006; ?></h2>
    <h4></h4>
		<input type="text" name="A4005" value="<?php echo $A4005 ;?>" size="3">
        <input type="text" name="A4006" value="<?php echo $A4006 ;?>" size="3">
      
	<h3>4</h3>
        <h2><?php echo $clubA4007; ?></h2>
		<h2><?php echo $clubA4008; ?></h2>
    <h4></h4>		
		<input type="text" name="A4007" value="<?php echo $A4007 ;?>" size="3">
        <input type="text" name="A4008" value="<?php echo $A4008 ;?>" size="3">
      
	<p class="texte"> Demi finale </p>
	 
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
	 
	<p class="texte"> Finale  </p>
         
	<h3>1</h3>
		<h2><?php echo $clubA1001; ?></h2>
        <h2><?php echo $clubA1002; ?></h2>
    <h4></h4>
	    <input type="text" name="A1001" value="<?php echo $A1001 ;?>" size="3">
   		<input type="text" name="A1002" value="<?php echo $A1002 ;?>" size="3">

	<footer><input type="submit" value="modifier" name="submit"></footer>
  
    </form>
  </body>
</html>
