<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="maj.css">
</head>
<?php

$page="dates";

if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 
if (isset ($_GET['prefixe'])) $prefixe = $_GET['prefixe']; else $prefixe='-'; 
//echo $annee;
//$bdpfannee =  "bdpf".$annee;
require '../../connect/connexion1.php';
$reponse = $bdd->query("SELECT type
			FROM bdpffrance
			WHERE 	id= '$division' and annee='$annee'");
				
					while ($row = $reponse->fetch() )
						{ 
						$type = $row[0];
						}

//echo "division : ".$division; echo "<br>";
//echo "comite : ".$comite;  echo "<br>";
echo "type (saisieEquipe.php): ".$type;  echo "<br>";






?>
<body bgcolor="#FFFFFF" text="#000000">
<table width="452">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2"> 
      <div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif">Maj Champ de France 
        <?php echo $annee;?>
        </font></b> </div>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font size="4">Saisie 
        des dates</font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="37" bgcolor="#000000"> 
      <div align="center"><font size="6"><b><font face="Arial, Helvetica, sans-serif" color="#FFFFFF">1</font></b></font></div>
    </td>
    <td width="303" bgcolor="#006699"> 
      <?php include ("choixDivision.php");
?>
    </td>
  </tr>
</table>
<table width="354" border="0" height="66">
  <tr bgcolor="#006699"> 
    <td colspan="2" valign="top" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" height="22" width="26%"> 
      <div align="center"> </div>
    </td>
    <td width="74%" valign="top" height="-4" bgcolor="#0099FF"> 
      <div align="left"> </div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="17" width="26%"> 
      <div align="center">Base</div>
    </td>
    <td width="74%" valign="top" height="17" bgcolor="#0099FF"> 
      <div align="center"> </div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="23" width="26%"> 
      <div align="center">Ann&eacute;e</div>
    </td>
    <td width="74%" valign="top" height="23" bgcolor="#000000"> 
      <div align="center"><b><font size="5" color="#FFFFFF"> 
        <?php echo $annee; ?>
        </font></b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="26%"> 
      <div align="center">Division</div>
    </td>
    <td width="74%" valign="top" height="13" bgcolor="#0099FF"> 
      <div align="center"> 
        <?php echo $division;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="26%"> 
      <div align="center"></div>
    </td>
    <td width="74%" valign="top" height="13" bgcolor="#0099FF"> 
      <div align="center"> </div>
    </td>
  </tr>
</table>


 
 



<h2> <?php 



$anneeMoins1 = $annee - 1;
 echo  "Saison : ".$anneeMoins1." - ".$annee;
 echo "<br>"."<br>";?></h2>
   <?php
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 
   if (isset($_GET['page'])) $page = $_GET['page']; else $page ="-";
echo $page;
  require '../../connect/connexion1.php';
 

  ?>
	<form name="insertion" action="validFormulaire.php?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>&page=dates" method="POST">
  <?php

//$bdpf_date= "bdpf".$annee."_date";

  
  	$reponse = $bdd->query("SELECT  D64ME, D32ME, D16ME, D8ME, D4ME, D2ME, D1ME, D0ME
    					   		 FROM bdpffrance_date
								WHERE  id = '$division' and annee='$annee'" ) ;			
  							while ($donnees = $reponse->fetch() )
								{
								$D64ME = $donnees['D64ME'];
								$D32ME = $donnees['D32ME'];
								$D16ME = $donnees['D16ME'];
								$D8ME = $donnees['D8ME'];
								$D4ME = $donnees['D4ME'];
								$D2ME = $donnees['D2ME'];
								$D1ME = $donnees['D1ME'];
								$D0ME = $donnees['D0ME'];
								} 


?> <font size="3" face="Arial, Helvetica, sans-serif"><b>Barrage</b></font> 
    <input type="text" size="30" name="D0ME" value="<?php  echo $D0ME ;?>">
  <br>
    <br>
  <font face="Arial, Helvetica, sans-serif" size="3"><b>64me </b> </font> 
    <input type="text" size="30" name="D64ME" value="<?php  echo $D64ME ;?>">
    <br>
    <br>
    <b><font face="Arial, Helvetica, sans-serif">32me</font></b> 
    <input type="text" name="D32ME" value="<?php echo $D32ME ;?>">
    <br>
    <br>
    <font color="#000000"><b>16me </b></font> 
    <input type="text" name="D16ME" value="<?php  echo $D16ME ;?>">
    <br>
    <br>
    <font color="#000000"><b><font size="3" face="Arial, Helvetica, sans-serif">8me</font></b></font> 
    <input type="text" name="D8ME" value="<?php echo $D8ME ;?>">
    <br>
    <br>
    <b><font face="Arial, Helvetica, sans-serif" size="3">Quarts</font></b> 
    <input type="text" name="D4ME" value="<?php  echo $D4ME ;?>">
    <br>
    <br>
    <font color="#000000" size="3"><b>Demi </b> </font> 
    <input type="text" name="D2ME" value="<?php  echo $D2ME ;?>">
    <br>
    <br>
    <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b>Finale</b></font> 
    <input type="text" name="D1ME" value="<?php  echo $D1ME ;?>">
    <br>
    <br>
    
  </p>
  <p>
    <input type="submit" value="modifier" name="submit">
  </p>
  </form>
 
<p><a href="accueilMAJ.php">retour page accueil</a> </p>