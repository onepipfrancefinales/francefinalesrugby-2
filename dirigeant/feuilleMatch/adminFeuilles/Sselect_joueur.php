<html>
<head>
<title>Feuille de match</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="1250" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td valign="middle" bgcolor="#CCCCCC">
      <p><font face="Arial, Helvetica, sans-serif"><b><font size="5"><font color="#FF0000"><font size="6"><font color="#003399"> 
        <?php if($fanionOuReserve<900000)
echo "- - -  Equipe Premi&egrave;re -  - -";
else
echo "- - - Equipe R&eacute;serve - - -";
?>
        </font><font face="Arial, Helvetica, sans-serif"><b><font size="5"><font color="#FF0000"><font size="6"><font color="#003399"><br/>
        </font></font></font></font></b></font> 
        
        <?php 
//$nb=mysql_query("SELECT SUM(photo) from $bdcomite where club=$equipe "); 
//$nb=mysql_fetch_array($nb);
//echo "$nb[0]"; 
?>
        <?php 
	  $championnat = $_POST['championnat'];
      $code_div = $_GET['code_div'];
      $code_match = $_GET['code_match'];
      $date = $_GET['date'];
      $comite = $_GET['comite'];
      $equipe = $_GET['equipe'];
   
      $connect = $_GET['connect'];
?>
        <?php //prise en compte d'une phase 2
  if ($comite==al)
  $phase2S1=500000;
  elseif ($comite==cbl)
  $phase2S1=500000;
  
  else
  $phase2S1=0;
  ?>
        <?php 
	  $equipeA=($equipeA - $phase2S1) ;?>
        <?php    $equipeB=($equipeB - $phase2S1) ;?>
        <?php
  // echo $code_match ;
  // echo $championnat;
  // echo $equipe ;
  // echo $equipeA ;
  // echo $equipeB ;
  // echo $connect ;
  ?>
        <?php
if($equipe==$equipeA)
	  $terrain="dom";
	  else
	  $terrain="ext";
	 // echo $terrain;
?>
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
        <?php
$reponse = mysql_query("	SELECT sigle,comite, code 
							FROM bdclubs 
							WHERE code='$equipe'");  
								While ($donnees = mysql_fetch_array($reponse) )
								{ 
								  $equipe = $donnees['code'];
								}
?>
        <?php $bdcomite=("php".''.$comite.''."_joueurs");?>
        <?php //echo $bdcomite;?>
        <?php
require ("../../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip


?>
        <font face="Arial, Helvetica, sans-serif"> <b> 
        <?php// $bdcomite=("Php".''.$comite.''."_joueurs");?>
        <font size="3" color="#000000">Composition pour la rencontre du</font><font size="5"> 
        <font color="#FF0000"> 
        <?php $date=substr($date,0,10);?>
        <?php echo $date; ?>
        </font> <font size="3" color="#000000">face &agrave;</font> <font color="#FF0000"> 
        <?php
if($equipe==$equipeA)
	  $terrain="dom";
	  else
	  $terrain="ext";
	 

?>
        <?php
	if($terrain=="dom")
	  $equipeC=$equipeB;
	  elseif($terrain=="ext")
	  $equipeC=$equipeA;
?>
        <?php
$reponse = mysql_query("SELECT sigle,comite, code 
FROM bdclubs 
WHERE code='$equipeC'"); 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php echo $donnees['sigle'];?>
        <font size="6"> 
        <?php
 }

?>
        </font></font></font></b></font></font></font></font></b></font></p>
      <p><font face="Arial, Helvetica, sans-serif"><b><font size="5"><font color="#FF0000"><font size="6"><font face="Arial, Helvetica, sans-serif"><b><font size="5"><font color="#FF0000"><font size="3" color="#000000"><br>
        Saisir les postes (num&eacute;ros de maillots) en face des diff&eacute;rents 
        joueurs</font><font size="3" color="#000000">, puis valider en bas &agrave; 
        droite de cette page.</font><font size="6"><br>
        </font></font></font></b></font></font></font></font></b></font></p>
    </td>
  </tr>
</table>
<br>
<form name="form1" method="POST" action="../zonesFeuilles/page_feuillematch.php?terrain=<?php echo $terrain; ?>&equipe=<?php echo $equipe; ?>&equipeB=<?php echo $equipeB;?>&equipeA=<?php echo $equipeA; ?>&connect=<?php echo $connect; ?>&comite=<?php echo $comite; ?>&code_match=<?php echo $code_match; ?>&date=<?php echo $date; ?>&code_div=<?php echo $code_div; ?>">
  <table width="1250" border="0">
    <tr> 
      <td width="240" height="10"><font face="Arial, Helvetica, sans-serif">1 
      
	   
	    <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso 
						FROM $bdcomite 
						WHERE club='$equipe' and photo='1' 
						ORDER BY  nom_cache  
						LIMIT 0,1"); 
							while ($donnees = mysql_fetch_array($reponse) )
									{ 
									 $nom1= $donnees['nom'];
									 $prenom1=$donnees['prenom'];
									 $id1= $donnees['id_perso'];
									 echo $nom1.' '.$prenom1;
								 	}
 ?>
        </font></td>
      <td width="10" height="25"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id1; ?>" size="2">
        </font></td>
      <td rowspan="20" height="251" bgcolor="#999999" width="1"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="25" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">21 
<?php
$reponse = mysql_query("SELECT nom, prenom, id_perso 
						FROM $bdcomite 
						WHERE club='$equipe'  and photo='1'  
						ORDER BY nom_cache 
						LIMIT 20,1"); 
							while ($donnees = mysql_fetch_array($reponse) )
									{ 
									 $nom21= $donnees['nom'];
									 $prenom21=$donnees['prenom'];
									 $id21= $donnees['id_perso'];
									 echo $nom21.' '.$prenom21;
								 	}
 ?>
          </font></div>
      </td>
      <td width="20" height="25"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id21; ?>" size="2">
        </font></td>
      <td rowspan="20" height="251" bgcolor="#CCCCCC" width="1"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="25" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">41 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso 
						FROM $bdcomite 
						WHERE club='$equipe'  and photo='1'  
						ORDER BY nom_cache 
						LIMIT 40,1"); 
							while ($donnees = mysql_fetch_array($reponse) )
								{ 
								 $nom41= $donnees['nom'];
								 $prenom41=$donnees['prenom'];
								 $id41= $donnees['id_perso'];
								 echo $nom41.' '.$prenom41;
							 	 }
 ?>
          </font></div>
      </td>
      <td width="20" height="25"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id41; ?>" size="2">
        </font></td>
      <td rowspan="20" height="251" bgcolor="#999999" width="1"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240" height="25"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">61 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'   and photo='1' ORDER BY nom_cache LIMIT 60,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom61= $donnees['nom'];
 $prenom61=$donnees['prenom'];
 $id61= $donnees['id_perso'];
 echo $nom61.' '.$prenom61;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="25"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id61; ?>" size="2">
          </font></div>
      </td>
      <td rowspan="20" height="251" bgcolor="#999999" width="1"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240" height="25"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">81 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 80,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom81= $donnees['nom'];
 $prenom81=$donnees['prenom'];
 $id81= $donnees['id_perso'];
 echo $nom81.' '.$prenom81;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="25"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id81; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="25"><font face="Arial, Helvetica, sans-serif"></font> 
      </td>
    </tr>
    <tr> 
      <td width="240" height="32"><font face="Arial, Helvetica, sans-serif">2 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY  nom_cache LIMIT 1,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom2= $donnees['nom'];
 $prenom2=$donnees['prenom'];
 $id2= $donnees['id_perso'];
 echo $nom2.' '.$prenom2;
 }
 ?>
        </font></td>
      <td width="10" height="32"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id2;?>" size="2">
        </font></td>
      <td width="240" height="32"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">22 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 21,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom22= $donnees['nom'];
 $prenom22=$donnees['prenom'];
 $id22= $donnees['id_perso'];
 echo $nom22.' '.$prenom22;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="32"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id22; ?>" size="2">
        </font></td>
      <td width="240" height="32"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">42 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 41,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom42= $donnees['nom'];
 $prenom42=$donnees['prenom'];
 $id42= $donnees['id_perso'];
 echo $nom42.' '.$prenom42;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="32"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id42; ?>" size="2">
        </font></td>
      <td width="240" height="32"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">62 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 61,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom62= $donnees['nom'];
 $prenom62=$donnees['prenom'];
 $id62= $donnees['id_perso'];
 echo $nom62.' '.$prenom62;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="32"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id62; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="32"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">82 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'   and photo='1' ORDER BY nom_cache LIMIT 81,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom82= $donnees['nom'];
 $prenom82=$donnees['prenom'];
 $id82= $donnees['id_perso'];
 echo $nom82.' '.$prenom82;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="32"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id82; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="32"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240"><font face="Arial, Helvetica, sans-serif">3 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 2,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom3= $donnees['nom'];
 $prenom3=$donnees['prenom'];
 $id3= $donnees['id_perso'];
 echo $nom3.' '.$prenom3;
 }
 ?>
        </font></td>
      <td width="10"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id3; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">23 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 22,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom23= $donnees['nom'];
 $prenom23=$donnees['prenom'];
 $id23= $donnees['id_perso'];
 echo $nom23.' '.$prenom23;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id23; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">43 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'   and photo='1' ORDER BY nom_cache LIMIT 42,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom43= $donnees['nom'];
 $prenom43=$donnees['prenom'];
 $id43= $donnees['id_perso'];
 echo $nom43.' '.$prenom43;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id43; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">63 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 62,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom63= $donnees['nom'];
 $prenom63=$donnees['prenom'];
 $id63= $donnees['id_perso'];
 echo $nom63.' '.$prenom63;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id63; ?>" size="2">
          </font></div>
      </td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">83 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'  ORDER BY nom_cache LIMIT 82,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom83= $donnees['nom'];
 $prenom83=$donnees['prenom'];
 $id83= $donnees['id_perso'];
 echo $nom83.' '.$prenom83;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id83; ?>" size="2">
          </font></div>
      </td>
      <td width="10"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240"><font face="Arial, Helvetica, sans-serif">4 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 3,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom4= $donnees['nom'];
 $prenom4=$donnees['prenom'];
 $id4= $donnees['id_perso'];
 echo $nom4.' '.$prenom4;
 }
 ?>
        </font></td>
      <td width="10"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id4; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">24 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 23,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom24= $donnees['nom'];
 $prenom24=$donnees['prenom'];
 $id24= $donnees['id_perso'];
 echo $nom24.' '.$prenom24;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id24; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">44 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 43,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom44= $donnees['nom'];
 $prenom44=$donnees['prenom'];
 $id44= $donnees['id_perso'];
 echo $nom44.' '.$prenom44;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id44; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">64 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 63,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom64= $donnees['nom'];
 $prenom64=$donnees['prenom'];
 $id64= $donnees['id_perso'];
 echo $nom64.' '.$prenom64;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id64; ?>" size="2">
          </font></div>
      </td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">84 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 83,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom84= $donnees['nom'];
 $prenom84=$donnees['prenom'];
 $id84= $donnees['id_perso'];
 echo $nom84.' '.$prenom84;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id84; ?>" size="2">
          </font></div>
      </td>
      <td width="10"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240"><font face="Arial, Helvetica, sans-serif">5 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 4,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom5= $donnees['nom'];
 $prenom5=$donnees['prenom'];
 $id5= $donnees['id_perso'];
 echo $nom5.' '.$prenom5;
 }
 ?>
        </font></td>
      <td width="10"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id5; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">25 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1' ORDER BY nom_cache LIMIT 24,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom25= $donnees['nom'];
 $prenom25=$donnees['prenom'];
 $id25= $donnees['id_perso'];
 echo $nom25.' '.$prenom25;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id25; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">45 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 44,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom45= $donnees['nom'];
 $prenom45=$donnees['prenom'];
 $id45= $donnees['id_perso'];
 echo $nom45.' '.$prenom45;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id45; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">65 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 64,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom65= $donnees['nom'];
 $prenom65=$donnees['prenom'];
 $id65= $donnees['id_perso'];
 echo $nom65.' '.$prenom65;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id65; ?>" size="2">
          </font></div>
      </td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">85 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'   and photo='1' ORDER BY nom_cache LIMIT 84,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom85= $donnees['nom'];
 $prenom85=$donnees['prenom'];
 $id85= $donnees['id_perso'];
 echo $nom85.' '.$prenom85;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id85; ?>" size="2">
          </font></div>
      </td>
      <td width="10"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="26"><font face="Arial, Helvetica, sans-serif">6 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 5,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom6= $donnees['nom'];
 $prenom6=$donnees['prenom'];
 $id6= $donnees['id_perso'];
 echo $nom6.' '.$prenom6;
 }
 ?>
        </font></td>
      <td width="10" height="26"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id6; ?>" size="2">
        </font></td>
      <td height="26" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">26 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'  ORDER BY nom_cache LIMIT 25,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom26= $donnees['nom'];
 $prenom26=$donnees['prenom'];
 $id26= $donnees['id_perso'];
 echo $nom26.' '.$prenom26;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="26"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id26; ?>" size="2">
        </font></td>
      <td height="26" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">46 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 45,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom46= $donnees['nom'];
 $prenom46=$donnees['prenom'];
 $id46= $donnees['id_perso'];
 echo $nom46.' '.$prenom46;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="26"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id46; ?>" size="2">
        </font></td>
      <td width="240" height="26"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">66 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 65,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom66= $donnees['nom'];
 $prenom66=$donnees['prenom'];
 $id66= $donnees['id_perso'];
 echo $nom66.' '.$prenom66;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="26"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id66; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="26"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">86 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 85,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom86= $donnees['nom'];
 $prenom86=$donnees['prenom'];
 $id86= $donnees['id_perso'];
 echo $nom86.' '.$prenom86;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="26"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id86; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="26"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240"><font face="Arial, Helvetica, sans-serif">7 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 6,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom7= $donnees['nom'];
 $prenom7=$donnees['prenom'];
 $id7= $donnees['id_perso'];
 echo $nom7.' '.$prenom7;
 }
 ?>
        </font></td>
      <td width="10"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id7; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">27 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 26,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom27= $donnees['nom'];
 $prenom27=$donnees['prenom'];
 $id27= $donnees['id_perso'];
 echo $nom27.' '.$prenom27;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id27; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">47 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 46,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom47= $donnees['nom'];
 $prenom47=$donnees['prenom'];
 $id47= $donnees['id_perso'];
 echo $nom47.' '.$prenom47;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id47; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">67 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 66,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom67= $donnees['nom'];
 $prenom67=$donnees['prenom'];
 $id67= $donnees['id_perso'];
 echo $nom67.' '.$prenom67;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id67; ?>" size="2">
          </font></div>
      </td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">87 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 86,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom87= $donnees['nom'];
 $prenom87=$donnees['prenom'];
 $id87= $donnees['id_perso'];
 echo $nom87.' '.$prenom87;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id87; ?>" size="2">
          </font></div>
      </td>
      <td width="10"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240"><font face="Arial, Helvetica, sans-serif">8 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 7,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom8= $donnees['nom'];
 $prenom8=$donnees['prenom'];
 $id8= $donnees['id_perso'];
 echo $nom8.' '.$prenom8;
 }
 ?>
        </font></td>
      <td width="10"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id8; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">28 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'   ORDER BY nom_cache LIMIT 27,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom28= $donnees['nom'];
 $prenom28=$donnees['prenom'];
 $id28= $donnees['id_perso'];
 echo $nom28.' '.$prenom28;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id28; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">48 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 47,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom48= $donnees['nom'];
 $prenom48=$donnees['prenom'];
 $id48= $donnees['id_perso'];
 echo $nom48.' '.$prenom48;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id48; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">68 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 67,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom68= $donnees['nom'];
 $prenom68=$donnees['prenom'];
 $id68= $donnees['id_perso'];
 echo $nom68.' '.$prenom68;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id68; ?>" size="2">
          </font></div>
      </td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">88 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 87,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom88= $donnees['nom'];
 $prenom88=$donnees['prenom'];
 $id88= $donnees['id_perso'];
 echo $nom88.' '.$prenom88;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id88; ?>" size="2">
          </font></div>
      </td>
      <td width="10"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="2"><font face="Arial, Helvetica, sans-serif">9 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 8,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom9= $donnees['nom'];
 $prenom9=$donnees['prenom'];
 $id9= $donnees['id_perso'];
 echo $nom9.' '.$prenom9;
 }
 ?>
        </font></td>
      <td width="10" height="2"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id9; ?>" size="2">
        </font></td>
      <td height="2" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">29 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'   ORDER BY nom_cache LIMIT 28,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom29= $donnees['nom'];
 $prenom29=$donnees['prenom'];
 $id29= $donnees['id_perso'];
 echo $nom29.' '.$prenom29;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="2"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id29; ?>" size="2">
        </font></td>
      <td height="2" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">49 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 48,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom49= $donnees['nom'];
 $prenom49=$donnees['prenom'];
 $id49= $donnees['id_perso'];
 echo $nom49.' '.$prenom49;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="2"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id49; ?>" size="2">
        </font></td>
      <td width="240" height="2"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">69 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 68,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom69= $donnees['nom'];
 $prenom69=$donnees['prenom'];
 $id69= $donnees['id_perso'];
 echo $nom69.' '.$prenom69;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="2"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id69; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="2"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">89 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 88,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom89= $donnees['nom'];
 $prenom89=$donnees['prenom'];
 $id89= $donnees['id_perso'];
 echo $nom89.' '.$prenom89;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="2"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id89; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="2"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240"><font face="Arial, Helvetica, sans-serif">10 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 9,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom10= $donnees['nom'];
 $prenom10=$donnees['prenom'];
 $id10= $donnees['id_perso'];
 echo $nom10.' '.$prenom10;
 }
 ?>
        </font></td>
      <td width="10"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id10; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">30 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'  ORDER BY nom_cache LIMIT 29,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom30= $donnees['nom'];
 $prenom30=$donnees['prenom'];
 $id30= $donnees['id_perso'];
 echo $nom30.' '.$prenom30;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id30; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">50 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 49,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom50= $donnees['nom'];
 $prenom50=$donnees['prenom'];
 $id50= $donnees['id_perso'];
 echo $nom50.' '.$prenom50;
 }
 ?>
          </font></div>
      </td>
      <td width="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id50; ?>" size="2">
        </font></td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">70 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 69,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom70= $donnees['nom'];
 $prenom70=$donnees['prenom'];
 $id70= $donnees['id_perso'];
 echo $nom70.' '.$prenom70;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id70; ?>" size="2">
          </font></div>
      </td>
      <td width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">90 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 89,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom90= $donnees['nom'];
 $prenom90=$donnees['prenom'];
 $id90= $donnees['id_perso'];
 echo $nom90.' '.$prenom90;
 }
 ?>
          </font></div>
      </td>
      <td width="10"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id90; ?>" size="2">
          </font></div>
      </td>
      <td width="10"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="21"><font face="Arial, Helvetica, sans-serif">11 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 10,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom11= $donnees['nom'];
 $prenom11=$donnees['prenom'];
 $id11= $donnees['id_perso'];
 echo $nom11.' '.$prenom11;
 }
 ?>
        </font></td>
      <td width="10" height="21"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id11; ?>" size="2">
        </font></td>
      <td height="21" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">31 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'  ORDER BY nom_cache LIMIT 30,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom31= $donnees['nom'];
 $prenom31=$donnees['prenom'];
 $id31= $donnees['id_perso'];
 echo $nom31.' '.$prenom31;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="21"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id31; ?>" size="2">
        </font></td>
      <td height="21" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">51 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 50,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom51= $donnees['nom'];
 $prenom51=$donnees['prenom'];
 $id51= $donnees['id_perso'];
 echo $nom51.' '.$prenom51;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="21"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id51; ?>" size="2">
        </font></td>
      <td width="240" height="21"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">71 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 70,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom71= $donnees['nom'];
 $prenom71=$donnees['prenom'];
 $id71= $donnees['id_perso'];
 echo $nom71.' '.$prenom71;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="21"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id71; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="21"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">91 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 90,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom91= $donnees['nom'];
 $prenom91=$donnees['prenom'];
 $id91= $donnees['id_perso'];
 echo $nom91.' '.$prenom91;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="21"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id91; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="21"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="22"><font face="Arial, Helvetica, sans-serif">12 
        <?php
$reponse = mysql_query("SELECT  nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 11,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom12= $donnees['nom'];
 $prenom12=$donnees['prenom'];
 $id12= $donnees['id_perso'];
 echo $nom12.' '.$prenom12;
 }
 ?>
        </font></td>
      <td width="10" height="22"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id12; ?>" size="2">
        </font></td>
      <td height="22" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">32 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1' ORDER BY nom_cache LIMIT 31,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom32= $donnees['nom'];
 $prenom32=$donnees['prenom'];
 $id32= $donnees['id_perso'];
 echo $nom32.' '.$prenom32;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="22"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id32; ?>" size="2">
        </font></td>
      <td height="22" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">52 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 51,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom52= $donnees['nom'];
 $prenom52=$donnees['prenom'];
 $id52= $donnees['id_perso'];
 echo $nom52.' '.$prenom52;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="22"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id52; ?>" size="2">
        </font></td>
      <td width="240" height="22"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">72 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 71,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom72= $donnees['nom'];
 $prenom72=$donnees['prenom'];
 $id72= $donnees['id_perso'];
 echo $nom72.' '.$prenom72;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="22"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id72; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="22"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">92 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'   and photo='1' ORDER BY nom_cache LIMIT 91,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom92= $donnees['nom'];
 $prenom92=$donnees['prenom'];
 $id92= $donnees['id_perso'];
 echo $nom92.' '.$prenom92;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="22"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id92; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="22"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="31"><font face="Arial, Helvetica, sans-serif">13 
        <?php
$reponse = mysql_query("SELECT   nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 12,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom13= $donnees['nom'];
 $prenom13=$donnees['prenom'];
 $id13= $donnees['id_perso'];
 echo $nom13.' '.$prenom13;
 }
 ?>
        </font></td>
      <td width="10" height="31"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id13; ?>" size="2">
        </font></td>
      <td height="31" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">33 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 32,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom33= $donnees['nom'];
 $prenom33=$donnees['prenom'];
 $id33= $donnees['id_perso'];
 echo $nom33.' '.$prenom33;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="31"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id33; ?>" size="2">
        </font></td>
      <td height="31" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">53 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 52,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom53= $donnees['nom'];
 $prenom53=$donnees['prenom'];
 $id53= $donnees['id_perso'];
 echo $nom53.' '.$prenom53;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="31"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id53; ?>" size="2">
        </font></td>
      <td width="240" height="31"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">73 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 72,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom73= $donnees['nom'];
 $prenom73=$donnees['prenom'];
 $id73= $donnees['id_perso'];
 echo $nom73.' '.$prenom73;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="31"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id73; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="31"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">93 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 92,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom93= $donnees['nom'];
 $prenom93=$donnees['prenom'];
 $id93= $donnees['id_perso'];
 echo $nom93.' '.$prenom93;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="31"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id93; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="31"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="22"><font face="Arial, Helvetica, sans-serif">14 
        <?php
$reponse = mysql_query("SELECT   nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 13,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom14= $donnees['nom'];
 $prenom14=$donnees['prenom'];
 $id14= $donnees['id_perso'];
 echo $nom14.' '.$prenom14;
 }
 ?>
        </font></td>
      <td width="10" height="22"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id14; ?>" size="2">
        </font></td>
      <td height="22" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">34 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1' ORDER BY nom_cache LIMIT 33,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom34= $donnees['nom'];
 $prenom34=$donnees['prenom'];
 $id34= $donnees['id_perso'];
 echo $nom34.' '.$prenom34;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="22"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id34; ?>" size="2">
        </font></td>
      <td height="22" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">54 
          <?php	
		
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'   ORDER BY nom_cache LIMIT 53,1"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
 	$nom54= $donnees['nom'];
 	$prenom54=$donnees['prenom'];
 	$id54= $donnees['id_perso'];

 	echo $nom54.' '.$prenom54;
  
	}
 
   
   ?>
          </font></div>
      </td>
      <td width="20" height="22"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id54;?>" size="2">
        </font></td>
      <td width="240" height="22"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">74 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 73,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom74= $donnees['nom'];
 $prenom74=$donnees['prenom'];
 $id74= $donnees['id_perso'];
 echo $nom74.' '.$prenom74;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="22"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id74; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="22"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">94 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 93,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom94= $donnees['nom'];
 $prenom94=$donnees['prenom'];
 $id94= $donnees['id_perso'];
 echo $nom94.' '.$prenom94;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="22"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id94; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="22"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="13"><font face="Arial, Helvetica, sans-serif">15 
        <?php
$reponse = mysql_query("SELECT   nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 14,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom15= $donnees['nom'];
 $prenom15=$donnees['prenom'];
 $id15= $donnees['id_perso'];
 echo $nom15.' '.$prenom15;
 }
 ?>
        </font></td>
      <td width="10" height="13"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id15; ?>" size="2">
        </font></td>
      <td height="13" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">35 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1' ORDER BY nom_cache LIMIT 34,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom35= $donnees['nom'];
 $prenom35=$donnees['prenom'];
 $id35= $donnees['id_perso'];
 echo $nom35.' '.$prenom35;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="13"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id35; ?>" size="2">
        </font></td>
      <td height="13" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">55 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'   ORDER BY nom_cache LIMIT 54,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom55= $donnees['nom'];
 $prenom55=$donnees['prenom'];
 $id55= $donnees['id_perso'];
echo $nom55.' '.$prenom55;
 	
	}

 
 ?>
          </font></div>
      </td>
      <td width="20" height="13"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id55; ?>" size="2">
        </font></td>
      <td width="240" height="13"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">75 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 74,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom= $donnees['nom'];
 $prenom=$donnees['prenom'];
 $id= $donnees['id_perso'];
 echo $nom.' '.$prenom;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="13"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="13"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">95 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 94,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom95= $donnees['nom'];
 $prenom95=$donnees['prenom'];
 $id95= $donnees['id_perso'];
 echo $nom95.' '.$prenom95;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="13"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id95; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="13"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="20"><font face="Arial, Helvetica, sans-serif">16 
        <?php
$reponse = mysql_query("SELECT   nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 15,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom16= $donnees['nom'];
 $prenom16=$donnees['prenom'];
 $id16= $donnees['id_perso'];
 echo $nom16.' '.$prenom16;
 }
 ?>
        </font></td>
      <td width="10" height="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id16; ?>" size="2">
        </font></td>
      <td height="20" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">36 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1' ORDER BY nom_cache LIMIT 35,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom36= $donnees['nom'];
 $prenom36=$donnees['prenom'];
 $id36= $donnees['id_perso'];
 echo $nom36.' '.$prenom36;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id36; ?>" size="2">
        </font></td>
      <td height="20" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">56 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 55,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom56= $donnees['nom'];
 $prenom56=$donnees['prenom'];
 $id56= $donnees['id_perso'];
 echo $nom56.' '.$prenom56;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="20"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id56; ?>" size="2">
        </font></td>
      <td width="240" height="20"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">76 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 75,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom76= $donnees['nom'];
 $prenom76=$donnees['prenom'];
 $id76= $donnees['id_perso'];
 echo $nom76.' '.$prenom76;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="20"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id76; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="20"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">96
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 95,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom96= $donnees['nom'];
 $prenom96=$donnees['prenom'];
 $id96= $donnees['id_perso'];
 echo $nom96.' '.$prenom96;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="20"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id96; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="20"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="2"><font face="Arial, Helvetica, sans-serif">17 
        <?php
$reponse = mysql_query("SELECT   nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'  ORDER BY nom_cache LIMIT 16,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom17= $donnees['nom'];
 $prenom17=$donnees['prenom'];
 $id17= $donnees['id_perso'];
 echo $nom17.' '.$prenom17;
 }
 ?>
        </font></td>
      <td width="10" height="2"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id17; ?>" size="2">
        </font></td>
      <td height="2" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">37 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1' ORDER BY nom_cache LIMIT 36,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom37= $donnees['nom'];
 $prenom7=$donnees['prenom'];
 $id37= $donnees['id_perso'];
 echo $nom37.' '.$prenom37;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="2"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id37; ?>" size="2">
        </font></td>
      <td height="2" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">57 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 56,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom57= $donnees['nom'];
 $prenom57=$donnees['prenom'];
 $id57= $donnees['id_perso'];
 echo $nom57.' '.$prenom57;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="2"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id57; ?>" size="2">
        </font></td>
      <td width="240" height="2"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">77 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 76,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom77= $donnees['nom'];
 $prenom77=$donnees['prenom'];
 $id77= $donnees['id_perso'];
 echo $nom77.' '.$prenom77;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="2"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id77; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="2"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">97 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 96,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom97= $donnees['nom'];
 $prenom97=$donnees['prenom'];
 $id97= $donnees['id_perso'];
 echo $nom97.' '.$prenom97;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="2"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id97; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="2"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="29"><font face="Arial, Helvetica, sans-serif">18 
        <?php
$reponse = mysql_query("SELECT   nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 17,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom18= $donnees['nom'];
 $prenom18=$donnees['prenom'];
 $id18= $donnees['id_perso'];
 echo $nom18.' '.$prenom18;
 }
 ?>
        </font></td>
      <td width="10" height="29"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id18; ?>" size="2">
        </font></td>
      <td height="29" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">38 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'  ORDER BY nom_cache LIMIT 37,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom38= $donnees['nom'];
 $prenom38=$donnees['prenom'];
 $id38= $donnees['id_perso'];
 echo $nom38.' '.$prenom38;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="29"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id38; ?>" size="2">
        </font></td>
      <td height="29" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">58 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 57,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom58= $donnees['nom'];
 $prenom58=$donnees['prenom'];
 $id58= $donnees['id_perso'];
 echo $nom58.' '.$prenom58;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="29"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id58; ?>" size="2">
        </font></td>
      <td width="240" height="29"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">78 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 77,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom78= $donnees['nom'];
 $prenom78=$donnees['prenom'];
 $id78= $donnees['id_perso'];
 echo $nom78.' '.$prenom78;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="29"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id78; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="29"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">98 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 97,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom98= $donnees['nom'];
 $prenom98=$donnees['prenom'];
 $id98= $donnees['id_perso'];
 echo $nom98.' '.$prenom98;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="29"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id98; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="29"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="12"><font face="Arial, Helvetica, sans-serif">19 
        <?php
$reponse = mysql_query("SELECT   nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 18,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
  $nom19= $donnees['nom'];
 $prenom19=$donnees['prenom'];
 $id19= $donnees['id_perso'];
 echo $nom19.' '.$prenom19;
 }
 ?>
        </font></td>
      <td width="10" height="12"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id19; ?>" size="2">
        </font></td>
      <td height="12" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">39 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'  ORDER BY nom_cache LIMIT 38,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom39= $donnees['nom'];
 $prenom39=$donnees['prenom'];
 $id39= $donnees['id_perso'];
 echo $nom39.' '.$prenom39;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="12"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id39; ?>" size="2">
        </font></td>
      <td height="12" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">59 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 58,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom59= $donnees['nom'];
 $prenom59=$donnees['prenom'];
 $id59= $donnees['id_perso'];
 echo $nom59.' '.$prenom59;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="12"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id59; ?>" size="2">
        </font></td>
      <td width="240" height="12"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">79 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 78,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom79= $donnees['nom'];
 $prenom79=$donnees['prenom'];
 $id79= $donnees['id_perso'];
 echo $nom79.' '.$prenom79;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="12"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id79; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="12"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">99 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 98,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom99= $donnees['nom'];
 $prenom99=$donnees['prenom'];
 $id99= $donnees['id_perso'];
 echo $nom99.' '.$prenom99;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="12"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id99; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="12"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td width="240" height="36"><font face="Arial, Helvetica, sans-serif">20 
        <?php
$reponse = mysql_query("SELECT   nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1' ORDER BY nom_cache LIMIT 19,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom20= $donnees['nom'];
 $prenom20=$donnees['prenom'];
 $id20= $donnees['id_perso'];
 echo $nom20.' '.$prenom20;
 }
 ?>
        </font></td>
      <td width="10" height="36"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id20; ?>" size="2">
        </font></td>
      <td height="36" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">40 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe' and photo='1'  ORDER BY nom_cache LIMIT 39,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom40= $donnees['nom'];
 $prenom40=$donnees['prenom'];
 $id40= $donnees['id_perso'];
 echo $nom40.' '.$prenom40;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="36"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id40; ?>" size="2">
        </font></td>
      <td height="36" width="240"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">60 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 59,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom60= $donnees['nom'];
 $prenom60=$donnees['prenom'];
 $id60= $donnees['id_perso'];
 echo $nom60.' '.$prenom60;
 }
 ?>
          </font></div>
      </td>
      <td width="20" height="36"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id60; ?>" size="2">
        </font></td>
      <td width="240" height="36"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">80 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 79,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom80= $donnees['nom'];
 $prenom80=$donnees['prenom'];
 $id80= $donnees['id_perso'];
 echo $nom80.' '.$prenom80;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="36"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id80; ?>" size="2">
          </font></div>
      </td>
      <td width="240" height="36"> 
        <div align="left"><font face="Arial, Helvetica, sans-serif">100 
          <?php
$reponse = mysql_query("SELECT nom, prenom, id_perso FROM $bdcomite WHERE club='$equipe'  and photo='1'  ORDER BY nom_cache LIMIT 99,1"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
 $nom99= $donnees['nom'];
 $prenom99=$donnees['prenom'];
 $id99= $donnees['id_perso'];
 echo $nom99.' '.$prenom99;
 }
 ?>
          </font></div>
      </td>
      <td width="10" height="36"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="M<?php echo $id99; ?>" size="2">
          </font></div>
      </td>
      <td width="10" height="36"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td colspan="2" height="31" bgcolor="#999999"> 
        <div align="right"><font face="Arial, Helvetica, sans-serif"><b>Choix 
          du capitaine :</b></font></div>
      </td>
      <td height="31" bgcolor="#999999" width="1"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" width="240" bgcolor="#999999"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">Indiquer 
          le N&deg;du capitaine 
          <input type="text" name="capitaine" size="3">
          </font></div>
      </td>
      <td width="20" height="31"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" bgcolor="#CCCCCC" width="1"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" width="240"> 
        <div align="right"><font face="Arial, Helvetica, sans-serif"> : </font></div>
      </td>
      <td width="20" height="31"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" bgcolor="#999999" width="1"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td colspan="4" height="31" bgcolor="#999999" valign="middle" align="center"> 
        <div align="center"> 
          <div align="left"></div>
          <div align="left"><font face="Arial, Helvetica, sans-serif"><b><font size="2">Juge 
            de touche</font></b> 
            <select name="jugedetouche" size="1">
			   <option value="">Faites votre choix</option>
			  <option value="16">Num&eacute;ro_16</option>
              <option value="17">Num&eacute;ro_17</option>
			  <option value="18">Num&eacute;ro_18</option>
			  <option value="19">Num&eacute;ro_19</option>
              <option value="20">Num&eacute;ro_20</option>
              <option value="21">Num&eacute;ro_21</option>
              <option value="22">Num&eacute;ro_22</option>
              <option value="23">Num&eacute;ro_23</option>
			  
            </select>
            </font></div>
          <font face="Arial, Helvetica, sans-serif"></font></div>
        <font face="Arial, Helvetica, sans-serif"></font><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="10" height="31"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
      </td>
      <td width="10" height="31"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
  </table>
  <div align="center">
    <table width="1250" border="0" align="left" cellspacing="0" cellpadding="0">
      <tr> 
        <td colspan="10" bgcolor="#000000"><font face="Arial, Helvetica, sans-serif"><b><font size="5" color="#FFFFFF">S&eacute;lection 
          des dirigeants</font></b></font></td>
      </tr>
      <tr> 
        <td width="159" valign="middle" height="39"> 
          <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
            <?php $bdcomite=("php".''.$comite.''."_joueurs");?>
            <?php require ("../../../$connect.php")?>
            <?php
$query = "	SELECT nom 
			FROM $bdcomite 
			WHERE club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5' 
			ORDER BY nom 
			LIMIT 0,1 ";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result) )
						{
						$entraineur1=$row[0];
						}
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5' ORDER BY nom limit 1,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur2=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 2,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur3=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 3,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur4=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 4,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur5=$row[0];
    }
?>
<?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 5,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur6=$row[0];
    }
?>
<?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 6,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur7=$row[0];
    }
?>
<?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 7,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur8=$row[0];
    }
?>
<?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 8,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur9=$row[0];
    }
?>
<?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 9,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur10=$row[0];
    }
?>

            Entraineur : </font></div>
        </td>
        <td width="181" valign="middle" height="39">  
     <select name="entraineur"  method="POST"  size="1">
            <option value="">Faites votre choix</option>
            <option value="<?php echo $entraineur1; ?>"> <?php echo $entraineur1; ?> </option>
            <option value="<?php echo $entraineur2; ?>"> <?php echo $entraineur2; ?> </option>
            <option value="<?php echo $entraineur3; ?>"> <?php echo $entraineur3; ?> </option>
            <option value="<?php echo $entraineur4; ?>"> <?php echo $entraineur4; ?> </option>
            <option value="<?php echo $entraineur5; ?>"> <?php echo $entraineur5; ?> </option>
         <option value="<?php echo $entraineur6; ?>"> <?php echo $entraineur6; ?> </option>
		 <option value="<?php echo $entraineur7; ?>"> <?php echo $entraineur7; ?> </option>
		 <option value="<?php echo $entraineur8; ?>"> <?php echo $entraineur8; ?> </option>
		 <option value="<?php echo $entraineur9; ?>"> <?php echo $entraineur9; ?> </option> 
		 <option value="<?php echo $entraineur10; ?>"><?php echo $entraineur10;?> </option>
	</select>
          </td>
        <td width="102" valign="middle" height="39"> 
          <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
    <?php
	$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='SOI' AND photo='5'  ORDER BY nom limit 0,1 ";
	$result = mysql_query($query);
	while ($row = mysql_fetch_array($result) )
		{
    	$soigneur1=$row[0];
   		}
	?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='SOI' AND photo='5'  ORDER BY nom limit 1,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $soigneur2=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='SOI' AND photo='5'  ORDER BY nom limit 2,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $soigneur3=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='SOI' AND photo='5'  ORDER BY nom limit 3,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $soigneur4=$row[0];
    }
?>
     <?php
	$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='SOI' AND photo='5'  ORDER BY nom limit 4,1 ";
	$result = mysql_query($query);
	while ($row = mysql_fetch_array($result) )
		{
    	$soigneur5=$row[0];
    	}
	?>
            Soigneur :</font></div>
        </td>
        <td width="116" valign="middle" height="39"> <font size="3" face="Arial, Helvetica, sans-serif"> 
          <select name="soigneur" size="1">
            <option value="">Faites votre choix</option>
            <option value="<?php echo $soigneur1; ?>"> <?php echo $soigneur1; ?> </option>
            <option value="<?php echo $soigneur2; ?>"> <?php echo $soigneur2; ?> </option>
            <option value="<?php echo $soigneur3; ?>"> <?php echo $soigneur3; ?> </option>
            <option value="<?php echo $soigneur4; ?>"> <?php echo $soigneur4; ?> </option>
            <option value="<?php echo $soigneur5; ?>"> <?php echo $soigneur5; ?> </option>		 	
          </select>
          </font> </td>
        <td width="178" valign="middle" height="39"> 
          <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 0,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $adjoint1=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 1,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $adjoint2=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 2,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $adjoint3=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 3,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $adjoint4=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 4,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $adjoint5=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 5,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $adjoint6=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 6,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $adjoint7=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 7,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $adjoint8=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='ENT' or type_licence='ADJ') AND photo='5'  ORDER BY nom limit 8,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $adjoint9=$row[0];
    }
?>
<?php
$query = "SELECT nom 
			FROM $bdcomite 
			WHERE club='$equipe' AND (type_licence='ENT' OR type_licence='ADJ') AND photo='5'  
			ORDER BY nom limit 9,1 ";
					$result = mysql_query($query);
					while ($row = mysql_fetch_array($result) )
						{
						$adjoint10=$row[0];
						}
?>
           


            Adjoint terrain :</font></div>
        </td>
        <td width="166" valign="middle" height="39"> <font size="3" face="Arial, Helvetica, sans-serif"> 
         <select name="adjoint" size="1"> <option value="">Faites votre choix</option>
            <option value="<?php echo $adjoint1;?>"> <?php echo $adjoint1;?> </option>          
            <option value="<?php echo $adjoint2;?>"> <?php echo $adjoint2;?> </option>
            <option value="<?php echo $adjoint3;?>"> <?php echo $adjoint3;?> </option>
            <option value="<?php echo $adjoint4;?>"> <?php echo $adjoint4;?> </option>
            <option value="<?php echo $adjoint5;?>"> <?php echo $adjoint5;?> </option>
         <option value="<?php echo $adjoint6;?>"> <?php echo $adjoint6;?>  </option>
		 <option value="<?php echo $adjoint7;?>"> <?php echo $adjoint7;?>  </option>	 
		 <option value="<?php echo $adjoint8;?>"> <?php echo $adjoint8;?>  </option>
		 <option value="<?php echo $adjoint9;?>"> <?php echo $adjoint9;?>  </option>
		  <option value="<?php echo $adjoint10;?>"><?php echo $adjoint10;?> </option>
	  </select>
          </font> </td>
        <td width="74" valign="middle" height="39"><font size="3" face="Arial, Helvetica, sans-serif"> 
          </font></td>
        <td width="92" valign="middle" height="39"><font size="3" face="Arial, Helvetica, sans-serif"> 
          </font></td>
        <td width="116" valign="middle" height="39"> <font size="3" face="Arial, Helvetica, sans-serif"> 
          </font> </td>
        <td width="24" height="39">&nbsp;</td>
      </tr>
      <tr> 
        <td width="159"> 
          <div align="right"><font size="3" face="Arial, Helvetica, sans-serif">:</font></div>
        </td>
        <td width="181"><font size="3" face="Arial, Helvetica, sans-serif"> </font></td>
        <td width="102"><font size="3" face="Arial, Helvetica, sans-serif"></font></td>
        <td width="116"><font size="3" face="Arial, Helvetica, sans-serif"></font></td>
        <td width="178"><font size="3" face="Arial, Helvetica, sans-serif"></font></td>
        <td width="166"><font size="3" face="Arial, Helvetica, sans-serif"></font></td>
        <td width="74">&nbsp;</td>
        <td width="92">&nbsp;</td>
        <td width="116">&nbsp;</td>
        <td width="24">&nbsp;</td>
      </tr>
      <tr> 
        <td height="23" valign="middle"> 
          <div align="center"><font size="3" face="Arial, Helvetica, sans-serif">
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 0,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $responsable1=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 1,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $responsable2=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 2,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $responsable3=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 3,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $responsable4=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 4,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $responsable5=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 5,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $responsable6=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 6,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $responsable7=$row[0];
    }
?>
            Responsable</font></div>
          <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
            </font> </div>
        </td>
        <td height="23" valign="middle"><font size="3" face="Arial, Helvetica, sans-serif">
          <select name="responsable" size="1">   <option value="">Faites votre choix</option>
            <option value="<?php echo $responsable1;?>"> <?php echo $responsable1;?>  </option>
            <option value="<?php echo $responsable2;?>"> <?php echo $responsable2;?>  </option>
            <option value="<?php echo $responsable3;?>"> <?php echo $responsable3;?>  </option>
            <option value="<?php echo $responsable4;?>"> <?php echo $responsable4;?>  </option>
            <option value="<?php echo $responsable5;?>"> <?php echo $responsable5;?>  </option>
			<option value="<?php echo $responsable6;?>"> <?php echo $responsable6;?>  </option>
			<option value="<?php echo $responsable7;?>"> <?php echo $responsable7;?>  </option>
          </select>
          </font></td>
        <td height="23" valign="middle"><font size="3" face="Arial, Helvetica, sans-serif"> 
          </font></td>
        <td height="23" valign="middle"><font size="3" face="Arial, Helvetica, sans-serif"> 
          </font></td>
        <td height="23" valign="middle">
          <div align="right">
            <p><font size="3"><font size="3"><font size="3"><font size="3"><font size="3"><font size="3"><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
              <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5' ORDER BY nom limit 0,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $dopage1=$row[0];
    }
?>
              <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 1,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $dopage2=$row[0];
    }
?>
              <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 2,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $dopage3=$row[0];
    }
?>
              <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 3,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $dopage4=$row[0];
    }
?>
              <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 4,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $dopage5=$row[0];
    }
?>
              <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 5,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $dopage6=$row[0];
    }
?>
              <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and (type_licence='DOP' or type_licence='RES') AND photo='5'  ORDER BY nom limit 6,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $dopage7=$row[0];
    }
?>
              </font></font></font></font></font></font></font></font></font></p>
            <p><font size="3"><font size="3"><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif">Contr&ocirc;le 
              anti dopage</font></font></font></font></font></p>
          </div>
        </td>
        <td height="23" valign="middle"><font size="3" face="Arial, Helvetica, sans-serif"> 
      <select name="dopage" size="1">
         <option value="">Faites votre choix</option>
        <option value="<?php echo $dopage1;?>"> <?php echo $dopage1;?></option>  
        <option value="<?php echo $dopage2;?>"> <?php echo $dopage2;?></option>       
        <option value="<?php echo $dopage3;?>"> <?php echo $dopage3;?></option>
		<option value="<?php echo $dopage4;?>"> <?php echo $dopage4;?></option>
		<option value="<?php echo $dopage5;?>"> <?php echo $dopage5;?></option> 
		<option value="<?php echo $dopage6;?>"> <?php echo $dopage6;?></option>
		<option value="<?php echo $dopage7;?>"> <?php echo $dopage7;?></option>
		 
     </select>
          </font></td>
        <td colspan="3" height="23" valign="middle" bgcolor="#FF0000"> 
          <div align="right"></div>
          <div align="center"><font face="Arial, Helvetica, sans-serif"> 
            <input type="submit" value="Visualiser la feuille de match" name="submit">
            </font></div>
        </td>
        <td width="24" height="23">&nbsp;</td>
      </tr>
      <tr> 
        <td height="23" valign="middle">&nbsp;</td>
        <td height="23" valign="middle">&nbsp;</td>
        <td height="23" valign="middle">&nbsp;</td>
        <td height="23" valign="middle">&nbsp;</td>
        <td height="23" valign="middle">&nbsp;</td>
        <td height="23" valign="middle">&nbsp;</td>
        <td colspan="3" height="23" valign="middle">&nbsp;</td>
        <td width="24" height="23">&nbsp;</td>
      </tr>
      <tr> 
        <td colspan="6" height="10" bgcolor="#CCCCCC" valign="top"> 
          <div align="center"> 
            <div align="center"><font face="Arial, Helvetica, sans-serif"><b>Uniquement 
              pour les comp&eacute;titions<font size="3"> f&eacute;d&eacute;rales</font></b></font><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif">:</font></font></font></div>
            <div align="right"> 
              <div align="left"></div>
            </div>
          </div>
        </td>
        <td colspan="3" height="10" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="24" height="10">&nbsp;</td>
      </tr>
      <tr> 
        <td bgcolor="#CCCCCC" height="14"> 
          <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
            <?php $bdcomite=("php".''.$comite.''."_joueurs");?>
            <?php require ("../../../$connect.php")?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='ENT' AND photo='5' ORDER BY nom limit 0,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur1=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='ENT' AND photo='5' ORDER BY nom limit 1,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur2=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='ENT' AND photo='5'  ORDER BY nom limit 2,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur3=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='ENT' AND photo='5'  ORDER BY nom limit 3,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur4=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='ENT' AND photo='5'  ORDER BY nom limit 4,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur5=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='ENT' AND photo='5'  ORDER BY nom limit 5,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur6=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='ENT' AND photo='5'  ORDER BY nom limit 6,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur7=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='ENT' AND photo='5'  ORDER BY nom limit 7,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur8=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='ENT' AND photo='5'  ORDER BY nom limit 8,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur9=$row[0];
    }
?>
 <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='ENT' AND photo='5'  ORDER BY nom limit 9,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $entraineur10=$row[0];
    }
?>
            Entraineur 2 : </font></div>
        </td>
        <td bgcolor="#CCCCCC" height="14"><font size="3" face="Arial, Helvetica, sans-serif"> 
          <select name="entraineur2"  method="POST"  size="1">
            <option value=""><font size="3" face="Arial, Helvetica, sans-serif">Faites votre choix</font></option>
            <option value="<?php echo $entraineur1; ?>"> <?php echo $entraineur1; ?> </option>
            <option value="<?php echo $entraineur2; ?>"> <?php echo $entraineur2; ?> </option>
            <option value="<?php echo $entraineur3; ?>"> <?php echo $entraineur3; ?> </option>
            <option value="<?php echo $entraineur4; ?>"> <?php echo $entraineur4; ?> </option>
            <option value="<?php echo $entraineur5; ?>"> <?php echo $entraineur5; ?> </option>
		<option value="<?php echo $entraineur6; ?>"> <?php echo $entraineur6; ?> </option>	
		<option value="<?php echo $entraineur7; ?>"> <?php echo $entraineur7; ?> </option>	
		<option value="<?php echo $entraineur8; ?>"> <?php echo $entraineur8; ?> </option>
		<option value="<?php echo $entraineur9; ?>"> <?php echo $entraineur9; ?> </option>	
		<option value="<?php echo $entraineur10; ?>"><?php echo $entraineur10; ?> </option>	
				
          </select>
          </font></td>
        <td bgcolor="#CCCCCC" height="14"> 
          <div align="right"><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='MED' AND photo='5'  ORDER BY nom limit 0,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $medecin1=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='MED' AND photo='5'  ORDER BY nom limit 1,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $medecin2=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='MED' AND photo='5'  ORDER BY nom limit 2,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $medecin3=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='MED' AND photo='5'  ORDER BY nom limit 3,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $medecin4=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='MED' AND photo='5'  ORDER BY nom limit 4,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $medecin5=$row[0];
    }
?>
            Medecin : :</font></font></font></div>
        </td>
        <td bgcolor="#CCCCCC" height="14"> 
          <select name="medecin" size="1">
            <option value="">Faites votre choix</option>
            <option value="<?php echo $medecin1; ?>"> <?php echo $medecin1; ?> </option>
            <option value="<?php echo $medecin2; ?>"> <?php echo $medecin2; ?> </option>
            <option value="<?php echo $medecin3; ?>"> <?php echo $medecin3; ?> </option>
            <option value="<?php echo $medecin4; ?>"> <?php echo $medecin4; ?> </option>    
			<option value="<?php echo $medecin5; ?>"> <?php echo $medecin5; ?> </option> 
		 </select>
        </td>
        <td bgcolor="#CCCCCC" height="14"> 
          <div align="right"><font size="3"><font size="3"><font size="3"><font size="3"><font size="3"><font size="3"><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='PRE' AND photo='5' ORDER BY nom limit 0,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $prepa1=$row[0];
    }
?>
            </font></font></font></font></font><font size="3" face="Arial, Helvetica, sans-serif"> 
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='PRE' AND photo='5'  ORDER BY nom limit 1,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $prepa2=$row[0];
    }
?>
            <?php
$query = "SELECT nom FROM $bdcomite where club='$equipe' and type_licence='PRE' AND photo='5'  ORDER BY nom limit 2,1 ";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
	{
    $prepa3=$row[0];
    }
?>
            
           
            Pr&eacute;pa physique : </font></font></font></font></font></div>
        </td>
        <td bgcolor="#CCCCCC" height="14"><font size="3" face="Arial, Helvetica, sans-serif"> 
          <select name="prepa" size="1">
            <option value="">Faites votre choix</option>
            <option value="<?php echo $prepa1;?>"> <?php echo $prepa1;?> </option>
            <option value="<?php echo $prepa2;?>"> <?php echo $prepa2;?> </option>
            <option value="<?php echo $prepa3;?>"> <?php echo $prepa3;?> </option>
            
          </select>
          </font></td>
        <td colspan="2" height="14"> 
          <div align="right"><font size="3"><font size="3"><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
            :</font></font></font></font></font></div>
        </td>
        <td width="116" height="14"><font size="3" face="Arial, Helvetica, sans-serif"> 
          </font></td>
        <td width="24" height="14">&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp; </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <font face="Arial, Helvetica, sans-serif"> </font> </div>
</form>


</body>
</html>
