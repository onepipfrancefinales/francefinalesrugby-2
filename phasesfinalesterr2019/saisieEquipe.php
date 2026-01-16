<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../../maj.css">
</head>
<?php

$page="saisieEquipes";

if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['codeLigue'])) $codeLigue = $_GET['codeLigue']; else $codeLigue='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 

$bdcomiteClub = "php".''.$comite.''."_clubs";
$bdcomite_pfterr_e = "php".''.$comite.''."_pfterr_e";

require ("../../fonctionspfterrESDL2019.php");


echo "Saison : ".$annee; echo "<br />";
echo "Division : ".$division; echo "<br />";
echo "Comite : ".$comite.' '.$codeLigue; echo "<br />";

?>
<body bgcolor="#FFFFFF" text="#000000">
<table width="352">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2">
      <div align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font size="4">Saisie 
        des &eacute;quipes</font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#000000" width="37"> 
      <div align="center"><font size="6"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">3</font></b></font></div>
    </td>
    <td width="303" bgcolor="#006699"> 
      <?php include ("../choixComite.php");?>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#000000" width="37"> 
      <div align="center"><font size="6"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">4</font></b></font></div>
    </td>
    <td width="303" bgcolor="#006699"> 
      <?php include ("../choixDivision.php");
?>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#000000" width="37"><div align="center"><font size="6"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">5</font></b></font></div></td>
    <td width="303" bgcolor="#006699"><?php include ("../choixType.php");?></td>
  </tr>
</table>
<table width="354" border="0" height="66">
  <tr> 
    <td colspan="2" valign="top" height="11" bgcolor="#006699">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" height="22" width="26%"><div align="center"> </div></td>
    <td width="74%" valign="top" height="-4" bgcolor="#FF9933"><div align="left"> </div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="7" width="26%"><div align="center"><font face="Arial, Helvetica, sans-serif">Ann&eacute;e</font></div></td>
    <td width="74%" valign="top" height="7" bgcolor="#000000"><div align="center"><b><font size="5" color="#FFFFFF"><?php echo $annee; ?></font></b></div></td>
  </tr>
  <tr> 
    <td valign="top" height="10" width="26%"><div align="center"><font face="Arial, Helvetica, sans-serif">Comit&eacute;</font></div></td>
    <td width="74%" valign="top" height="10" bgcolor="#FF9933"><div align="center"><?php echo $comite.' '.$codeLigue;?></div></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="26%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif">Division</font></div></td>
    <td width="74%" valign="top" height="13" bgcolor="#FF9933"><div align="center"><?php echo $division;?></div></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="26%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif">Type</font></div></td>
    <td width="74%" valign="top" height="13" bgcolor="#FF9933"><div align="center"><?php echo $type; ?></div></td>
  </tr>
  <tr> 
    <td valign="top" height="13" colspan="2" bgcolor="#000000">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" height="54" colspan="2"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><br>
        **Opposition inconnue:**</font></b><font face="Arial, Helvetica, sans-serif"><br>
        Affichage '-' saisir '99999'</font><br>
      </div>
    </td>
  </tr>
  <tr bgcolor="#000000"> 
    <td valign="top" height="13" colspan="2">&nbsp;</td>
  </tr>
</table>
<a href="../majScores/saisieScore.php?annee=<?php echo $annee; ?>">Saisie des scores</a> 
<!-- ************  Finale   ************ 
-->
<?php 
require '../../../connect/connexion6.php';
if ($type==1)
{

 finale2019 ($comite, $division, $annee, $bdd);
		   
			?>
<br>
<br>
 <form name="insertion" action="saisieEquipe2.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&comite=<?php echo $comite ; ?>&annee=<?php echo $annee ; ?>" method="POST">
					    
		<header><h1>  Division (<?php echo $division; ?>) Ann&eacute;e  <?php echo $annee; ?></h1></header>   
<!-- ************  Finale   ************ -->			
		
	<p class="texte"> Finale </p>
			
	<h3>1</h3>
        <h2><?php echo $clubA1001; ?></h2>
        <h2><?php echo $clubA1002; ?></h2>
	<h4></h4>
		<input type="text" name="clubA1001" value="<?php echo $clubA1001Id ;?>" size="3">
		<input type="text" name="clubA1002" value="<?php echo $clubA1002Id ;?>" size="3">
		
	<footer><input type="submit" value="modifier" name="submit"></footer>	
	<a href="../../accueilMAJ.php">Retour accueil</a>
 </form>
					
		
  <!-- ************  Demi Finale   ************ -->			
					
  <?php	
 }
elseif ($type==2 OR $type==3)
 {
    demi2019 ($comite, $division, $annee, $bdd);
    ?>
  <form name="insertion" action="saisieEquipe2.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&comite=<?php echo $comite ; ?>&annee=<?php echo $annee ; ?>" method="POST">
				  
    <header><h1><?php echo "Division ( ".''.$division.''." )Ann&eacute;e ".''.$annee; ?> </h1></header>
  
    <p class="texte"> Demi finale  </p>
	  
	<h3>1</h3>
        <h2><?php echo $clubA2001; ?></h2>
        <h2><?php echo $clubA2002; ?></h2>
    <h4></h4>
		<input type="text" name="clubA2001" value="<?php echo $id2001 ;?>" size="3">
		<input type="text" name="clubA2002" value="<?php echo $id2002 ;?>" size="3">
		
	<h3>2</h3>
        <h2><?php echo $clubA2003; ?></h2>
        <h2><?php echo $clubA2004; ?></h2> 
	<h4></h4>
        <input type="text" name="clubA2003" value="<?php echo $id2003 ;?>" size="3">
        <input type="text" name="clubA2004" value="<?php echo $id2004 ;?>" size="3">
      
	<footer><input type="submit" value="modifier" name="submit"></footer>
	<a href="../../accueilMAJ.php" target="_top">Retour    </a> 
  
  </form>
				
  <!-- ************  Quarts de finale   ************ -->
  <?php
 }
elseif ($type==14 OR $type==15)
 {
  quarts2019 ($comite, $division, $annee, $bdd);
  ?>
  <form name="insertion" action="saisieEquipe2.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&comite=<?php echo $comite ; ?>&annee=<?php echo $annee ; ?>" method="POST">
						  <b><font size="4"> 
						  			
    <header><h1> <?php echo  "Division (".''.$division.''." ) Ann&eacute;e ".''.$annee; ?></h1></header>		  
	
	<p class="texte"> Quarts de finale</p>
			 
	<h3>1</h3>     
		<h2><?php echo $clubA4001; ?></h2>
		<h2><?php echo $clubA4002; ?></h2>
	<h3></h3>
		<input type="text" name="clubA4001" value="<?php echo $id4001 ;?>" size="3">
		<input type="text" name="clubA4002" value="<?php echo $id4002 ;?>" size="3">
	
	<h3>2</h3>
        <h2><?php echo $clubA4003; ?></h2>
        <h2><?php echo $clubA4004; ?></h2>
	<h3></h3>
		<input type="text" name="clubA4003" value="<?php echo $id4003 ;?>" size="3">
		<input type="text" name="clubA4004" value="<?php echo $id4004 ;?>" size="3">	  
    
	<h3>3</h3>
       <h2><?php echo $clubA4005; ?></h2>
       <h2><?php echo $clubA4006; ?></h2>
	<h3></h3>
		<input type="text" name="clubA4005" value="<?php echo $id4005 ;?>" size="3">
		<input type="text" name="clubA4006" value="<?php echo $id4006 ;?>" size="3">	  
    
	<h3>4</h3>
        <h2><?php echo $clubA4007; ?></h2>
        <h2><?php echo $clubA4008; ?></h2>
	<h3></h3>
		<input type="text" name="clubA4007" value="<?php echo $id4007 ;?>" size="3">
		<input type="text" name="clubA4008" value="<?php echo $id4008 ;?>" size="3">
			
	<footer><input type="submit" value="modifier" name="submit"></footer>
				
	<a href="../../accueilMAJ.php" target="_top">Retour </a> 
						</form>				
<!-- ************ Barrages(8 équipes) Quarts (4 équipes)   ************-->
						
  <?php		
 }
elseif ($type==13)
 {
	quartsPlusBarrages2019 ($comite, $division, $annee, $bdd);
		?>
<form name="insertion" action="saisieEquipe2.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&comite=<?php echo $comite ; ?>&annee=<?php echo $annee ; ?>" method="POST">
						  			   
	<input type="hidden" name="division" value="<?php echo($division) ;?>">
						  
	<header><h1> Division ( <?php echo $division; ?> ) Ann&eacute;e <?php echo $annee; ?> </h1></header>  
	  
	<p class="texte">  Barrages </p>
	      
    <h3>1</h3>
	    <h2><?php echo $clubA8001; ?></h2>
        <h2><?php echo $clubA8002; ?></h2>
	<h4></h4>
        <input type="text" name="clubA8001" value="<?php echo($result->clubA8001) ;?>" size="3">
        <input type="text" name="clubA8002" value="<?php echo($result->clubA8002) ;?>" size="3">
    
	<h3>2</h3>
       <h2><?php echo $clubA8003; ?></h2>
       <h2><?php echo $clubA8004; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA8003" value="<?php echo($result->clubA8003) ;?>" size="3">
        <input type="text" name="clubA8004" value="<?php echo($result->clubA8004) ;?>" size="3">
    
	<h3>3</h3>
        <h2><?php echo $clubA8005; ?></h2>
		<h2><?php echo $clubA8006; ?></h2>
    <h4></h4>
		<input type="text" name="clubA8005" value="<?php echo($result->clubA8005) ;?>" size="3">
        <input type="text" name="clubA8006" value="<?php echo($result->clubA8006) ;?>" size="3">
    
	<h3>4</h3>
        <h2><?php echo $clubA8007; ?></h2>
		<h2><?php echo $clubA8008; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA8007" value="<?php echo($result->clubA8007) ;?>" size="3">
        <input type="text" name="clubA8008" value="<?php echo($result->clubA8008) ;?>" size="3">
      
    <p class="texte"> Quarts de finale </p>
   
    <h3>1</h3>
        <h2><?php echo $clubA4001; ?></h2>
        <h2><?php echo $clubA4002; ?></h2>
    <h4></h4>
        <input type="text" name="clubA4001" value="<?php echo($result->clubA4001) ;?>" size="3">
		<input type="text" name="clubA40022" value="<?php echo($result->clubA4002) ;?>" size="3">
	
	<h3>2</h3>
        <h2><?php echo $clubA4003; ?></h2>
		<h2><?php echo $clubA4004; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA4003" value="<?php echo($result->clubA4003) ;?>" size="3">
        <input type="text" name="clubA4004" value="<?php echo($result->clubA4004) ;?>" size="3">
 
    <h3>3</h3>
        <h2><?php echo $clubA4005; ?></h2>
		<h2><?php echo $clubA4006; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA4005" value="<?php echo($result->clubA4005) ;?>" size="3">
        <input type="text" name="clubA4006" value="<?php echo($result->clubA4006) ;?>" size="3">
    
	<h3>4</h3>
        <h2><?php echo $clubA4007; ?></h2>
        <h2><?php echo $clubA4008; ?></h2>
	<h4></h4>
		<input type="text" name="clubA4007" value="<?php echo($result->clubA4007) ;?>" size="3">
        <input type="text" name="clubA4008" value="<?php echo($result->clubA4008) ;?>" size="3">
		
       <footer><input type="submit" value="modifier" name="submit"></footer>
  </form>
						
  <?php
 }
		
elseif ($type==16)
	{require ('saisieEquipe16me.php');}
elseif ($type==17)
	{require ('saisieEquipe8meEtBarrages.php');}
elseif ($type==18 OR $type==19)
	{require ('saisieEquipe8me.php');}		
else
	{echo "Il faut choisir une phase finale";}
	?>
