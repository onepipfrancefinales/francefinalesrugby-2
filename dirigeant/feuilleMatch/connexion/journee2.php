
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilledestyle.css"/>
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p> 
  <?php// $id_equipe = $_GET['id_equipe'];?>
  <?php// $id_equipe =substr($id_equipe,0,5);?>
  <?php
 // echo $id_equipe;
 // echo $equipe;
      $bdmatchs=("php".''.$comite.''."_matchs");
      $bdmatchsidequipedom=("php".''.$comite.''."_matchs".''.".id_equipe_dom");
	  $bdmatchsidequipeext=("php".''.$comite.''."_matchs".''.".id_equipe_ext");
	  $bdmatchsidjournee=("php".''.$comite.''."_matchs".''.".id_journee");
	  $bdmatchsid=("php".''.$comite.''."_matchs".''.".id");
	  $bdmatchsdatereelle=("php".''.$comite.''."_matchs".''.".date_reelle");
	  $bdcomite=("php".''.$comite.''."_joueurs");
	  
	  $reserve=90000000;
	//  $cadets=;
	//  $juniors=;
 

?>
  

<table width="1300" border="1" bordercolor="#000000" cellspacing="3">
  <tr valign="middle" align="center"> 
    <td height="76" bgcolor="#CCCCCC" rowspan="2"> 
      <h4><a href="/dirigeant/feuilleMatch/adminLicences/page_consulter.php?equipe=<?php echo $equipe;?>&id_equipe=<?php echo $id_equipe;?>&connect=<?php echo $connect;?>&comite=<?php echo $comite;?>">Gestion 
        des licences du club</a></h4>
    </td>
    <td width="292" height="37" bgcolor="#CCCCCC"> 
      <h4>&nbsp;</h4>
    </td>
    <td height="76" bgcolor="#FFCC00" rowspan="2"> 
      <h4><a href="page_liste_compet1.php?reserve=<?php echo $reserve;?>&type=S1&equipe=<?php echo $equipe;?>&id_equipe=<?php echo $id_equipe;?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>"><font size="5">Acc&egrave;s 
        au calendrier de l'Equipe Une</font></a></h4>
    </td>
  </tr>
  <tr valign="middle" align="center"> 
    <td width="292" height="37" bgcolor="#FF0000"><b><a href="deconnexion.php"> 
      <h4>D&eacute;connexion</h4>
      </a></b></td>
  </tr>
</table>
<table width="1300" border="0">
  <tr valign="top"> 
    <td colspan="3" height="22" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td colspan="3" height="30" bgcolor="#FFFFFF"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="5"><b><font color="#FF0000">Feuille 
        de match compl&eacute;te (enregistrable et modifiable)<br>
        <font size="3" color="#000000">( Prenez contact avec les &eacute;quipes 
        de votre poule pour r&eacute;aliser vos feuilles de matchs.)</font></font></b></font></div>
    </td>
  </tr>
</table>
<table width="1300" border="2" bordercolor="#000000" cellspacing="1">
  <tr>
    <td bgcolor="#CCCCCC"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5">EQUIPE 
        RESERVE</font></b></font></div>
    </td>
  </tr>
</table>
<table width="1300" border="0">
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td height="22" colspan="6">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="409" height="21"> 
      <?php
if ($connect == "connexion2")
require   "../../../connect/connexion2.php";
else
require   "../../../connect/connexion3.php";
?>
      <?php

$reponse = $bdd->query("	SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext 
			FROM  $bdmatchs 
			WHERE $bdmatchsidequipedom=$equipe+$reserve OR $bdmatchsidequipeext=$equipe+$reserve 
			ORDER BY  $bdmatchsidjournee");
					
					while ($row = $reponse->fetch() )
							{
								$journee=$row[1]; 
							 	$minijournee=substr($journee,3,2); ;
							   	echo $minijournee ; 
							  	echo "me journ&eacute;e - Dimanche ";
							  	echo $row[3]; 
							 	echo " <br/>"; 
							}

?>
    </td>
    <td width="230" height="21"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b> 
        <?php
$reponse = $bdd->query("SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext
						FROM $bdmatchs 
						WHERE $bdmatchsidequipedom=$equipe+$reserve OR $bdmatchsidequipeext=$equipe+$reserve 
						ORDER BY $bdmatchsidjournee");
					
			while ($row = $reponse->fetch() )
				{					
     			echo $row[2]; 
				echo "<br/>";
        		}
	?>
        </b></font></div>
    </td>
    <td width="13" height="21"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="../adminFeuilles/page_select_joueurs.php?terrain=dom&equipe=<?php echo $equipe; ?>&equipeB=<?php echo $equipeB; ?>&equipeA=<?php echo $equipeA; ?>&php=php&connect=<?php echo $connect ;?>&comite=<?php echo $comite ; ?>&code_match=<?php echo $code_match; ?>&date=<?php echo $date; ?>&code_div=<?php echo $div; ?>&N1=<?php echo $idPerso1; ?>&N2=<?php echo $idPerso2; ?>&N3=<?php echo $idPerso3; ?>&N4=<?php echo $idPerso4; ?>&N5=<?php echo $idPerso5; ?>&N6=<?php echo $idPerso6; ?>&N7=<?php echo $idPerso7; ?>&N8=<?php echo $idPerso8; ?>&N9=<?php echo $idPerso9; ?>&N10=<?php echo $idPerso10; ?>&N11=<?php echo $idPerso11; ?>&N12=<?php echo $idPerso12; ?>&N13=<?php echo $idPerso13; ?>&N14=<?php echo $idPerso14; ?>&N15=<?php echo $idPerso15; ?>&N16=<?php echo $idPerso16; ?>&N17=<?php echo $idPerso17; ?>&N18=<?php echo $idPerso18; ?>&N19=<?php echo $idPerso19; ?>&N20=<?php echo $idPerso20; ?>&N21=<?php echo $idPerso21; ?>&N22=<?php echo $idPerso22; ?>&N23=<?php echo $idPerso23; ?>"><font face="Arial, Helvetica, sans-serif"></font></a></font></div>
    </td>
    <td width="234" height="21"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b> 
        <?php
$reponse = $bdd->query("SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsidequipeext
						FROM  $bdmatchs 
						WHERE $bdmatchsidequipedom=$equipe+$reserve OR $bdmatchsidequipeext=$equipe+$reserve 
						ORDER BY $bdmatchsidjournee");
					
			while ($row = $reponse->fetch() )
				{					
  				echo $row[3]; 
       			echo "<br/>";
				}
?>
        </b></font></div>
    </td>
    <td height="21"> 
      <div align="center">
        <?php
$reponse = $bdd->query("SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext
						FROM $bdmatchs 
						WHERE $bdmatchsidequipedom=$equipe+$reserve OR $bdmatchsidequipeext=$equipe+$reserve 
						ORDER BY $bdmatchsidjournee");
					
		while ($row = $reponse->fetch() )
			{
			echo " </b> <a href=\"/dirigeant/feuilleMatch/adminFeuilles/page_select_joueurs.php?&code_match=$row[0]&meth=2&connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_div=$row[1]&equipeA=$row[2]&equipeB=$row[4]&comite=$comite&date=$row[3]\" target=_top >R&eacute;aliser</a>";					
			echo "<br/>";
			}
?>
      </div>
    </td>
    <td width="189" height="21"> 
      <div align="center"> 
        <?php
$reponse = $bdd->query("SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext 
						FROM  $bdmatchs 
						WHERE $bdmatchsidequipedom=$equipe+$reserve OR $bdmatchsidequipeext=$equipe+$reserve 
						ORDER BY $bdmatchsidjournee");
					
		while ($row = $reponse->fetch() )
			{
			 echo "  </b> <a href=\"/dirigeant/feuilleMatch/zonesFeuilles/page_feuillematchConsultation.php?code_match=$row[0]&connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_div=$row[1]&equipeA=$row[2]-90000000&equipeB=$row[4]-90000000&date=$row[3]\" target=_top >Consulter/ Imprimer</a>";
			 echo "<br/>";
			}
	
//mysql_close(); 
?>
      </div>
      </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
