<html>
  <head>
<title>modification de données en PHP :: partie2</title>
<link rel="stylesheet" type="text/css" href="../maj.css">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>

<?php
$page = "saisieLieux";

if (isset($_GET['division'])) $division= $_GET['division']; else $division =100170;
if (isset($_GET['comite'])) $comite=$_GET['comite']; else $comite = "au"; 
if (isset($_GET['annee'])) $annee=$_GET['annee']; else $annee= 2022;
 
$bdcomite_pfterr_ld = "php".$comite.''."_pfterr_ld";


echo " division :".$division; echo "<br />";
echo "comite : ".$comite; echo "<br />";
echo "annee : ".$annee; echo "<br />";
echo $bdcomite_pfterr_ld;echo "<br />";

require '../../../connect/connexion6.php';
require ("../../fonctionspfterrESDL2019.php"); 
afficheLieux ($division, $annee, $comite, $bdd);

//D1600 D8000 D4000 D2000 D1000
?>

<form name="insertion" action="saisieLieux2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
   
<input type="hidden" name="division" value="<?php echo($division) ;?>">
<header>
<hr />
<h2>  Dates  <font size="2">(<font face="Arial, Helvetica, sans-serif">ex : 25 Mai 2019)</font></font></h2>

<h3>Huiti&egrave;me :    <input type="text" name="D8000" value="<?php echo $D8000 ;?>" size="30"> 
<h3>Quarts :  <input type="text" name="D4000" value="<?php echo $D4000 ;?>" size="30">
<h3>Demi :  <input type="text" name="D2000" value="<?php echo $D2000 ;?>" size="30">
<h3>Finale : <input type="text" name="D1000" value="<?php echo $D1000 ;?>" size="30">
    
   
<hr />
<h2>  Lieux  </h2>
<h4>Huiti&egrave;me </h4>
          
<h4><?php //echo $D8000; ?></h4> 
            
<input type="text" name="L8001" value="<?php echo $L8001 ;?>" size="30">
         <hr />		
<input type="text" name="L8003" value="<?php echo $L8003 ;?>" size="30">
      <hr />
<h4><?php	//echo "3. ".$clubA8005.' - '.$clubA8006; ?></h4> 
      
<input type="text" name="L8005" value="<?php echo $L8005 ;?>" size="30">        
         <hr />	
<input type="text" name="L8007" value="<?php echo $L8007 ;?>" size="30">
      	<hr />     
<input type="text" name="L8009" value="<?php echo $L8009 ;?>" size="30">

 		<hr />		
<input type="text" name="L8011" value="<?php echo $L8011 ;?>" size="30">
   		<hr />      
<input type="text" name="L8013" value="<?php echo $L8013 ;?>" size="30">
	 	<hr />		      
<input type="text" name="L8015" value="<?php echo $L8011 ;?>" size="30">
        <hr />
<h4>Quarts </h4>
    		
<input type="text" name="L4001" value="<?php echo $L4001 ;?>" size="25">
		 <hr />		   
<input type="text" name="L4003" value="<?php echo $L4003 ;?>" size="30">
     <hr /> 
<input type="text" name="L4005" value="<?php echo $L4005 ;?>" size="30">
		
<input type="text" name="L4007" value="<?php echo $L4007 ;?>" size="30">

<h4>Demi </h4>
         
<input type="text" name="L2001" value="<?php echo $L2001 ;?>" size="30">
       	  	   
<input type="text" name="L2003" value="<?php echo $L2003 ;?>" size="30">

<h4>Finale </h4>
    
<input type="text" name="L1001" value="<?php echo $L1001 ;?>" size="30">
  <br>
  <br>
  <section> <footer> 
  <input type="submit" value="modifier" name="submit">
      </footer>
	  
     <a href="../accueilMAJ.php">Retour accueil</a>
   
</form>
</body>
</html>
