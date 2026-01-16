
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilledestyle.css"/>
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p> 
  <?php 
  $id_equipe = $_GET['id_equipe'];
   $id_equipe =substr($id_equipe,0,5);
  
  echo $id_equipe;
  echo $equipe;
      $bdmatchs=("php".''.$comite.''."_matchs");
      $bdmatchsidequipedom=("php".''.$comite.''."_matchs".''.".id_equipe_dom");
	  $bdmatchsidequipeext=("php".''.$comite.''."_matchs".''.".id_equipe_ext");
	  $bdmatchsidjournee=("php".''.$comite.''."_matchs".''.".id_journee");
	  $bdmatchsid=("php".''.$comite.''."_matchs".''.".id");
	  $bdmatchsdatereelle=("php".''.$comite.''."_matchs".''.".date_reelle");
	  $bdcomite=("php".''.$comite.''."_joueurs");
	  
	  $reserve=($equipe+90000000);

?>
  

<table width="1300" border="1" bordercolor="#000000" cellspacing="3">
  <tr valign="middle" align="center"> 
    <td height="76" bgcolor="#CCCCCC" rowspan="2"> 
      <h4><a href="../adminLicences/page_consulter.php?equipe=<?php echo $equipe;?>&id_equipe=<?php echo $id_equipe;?>&connect=<?php echo $connect;?>&comite=<?php echo $comite;?>">Gestion 
        des licences du club</a></h4>
    </td>
    <td width="292" height="37" bgcolor="#CCCCCC"> 
      <h4><a href="modifMDP.php?id_equipe=<?php echo $id_equipe;?>&type=<?php echo $type;?>&connect=<?php echo $connect;?>&comite=<?php echo $comite;?>&equipe=<?php echo $equipe;?>">Modifier son Mot de passe</a></h4>
    </td>
    <td height="76" bgcolor="#CC6633" rowspan="2"> 
      <h4><a href="page_liste_compet1.php?reserve=<?php echo $reserve;?>&type=S2&equipe=<?php echo $equipe;?>&id_equipe=<?php echo $id_equipe;?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>"><font size="5">Acc&egrave;s 
        au calendrier de l'Equipe R&eacute;serve</font></a></h4>
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
        UNE</font></b></font></div>
    </td>
  </tr>
</table>
<table width="1300" border="0">
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td height="22" colspan="6">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="409" height="12"> 
      <?php
if ($connect == "connexion2")
require   "../../../connect/connexion2.php";
else
require   "../../../connect/connexion3.php";
?>
      <?php
/*
$reponse = $bdd->query("SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.id, bdclubs.nom_1 
						FROM bdclubs, $bdmatchs 
						WHERE $bdmatchsidequipedom = bdclubs.id  
						AND ($bdmatchsidequipedom=$equipe OR $bdmatchsidequipeext=$equipe) 
						ORDER BY  $bdmatchsidjournee");
						
						while ($donnees = $reponse->fetch() )
							{
								 $journee=$donnees[1];
						  		 $minijournee=substr($journee,3,2); ; 
						  		 echo $minijournee ; 
						 		 echo "me journ&eacute;e - Dimanche" ;
						  		 echo $donnees[3]; 
								 echo " <br/>";
								}							
*/
?>
 <?php

$reponse = $bdd->query("SELECT $bdmatchsidjournee, $bdmatchsdatereelle
						FROM  $bdmatchs
						WHERE $bdmatchsidequipedom  = $equipe  or $bdmatchsidequipeext  = $equipe
						ORDER BY  $bdmatchsidjournee
						");
						
						while ($donnees = $reponse->fetch() )
							{
								 $journee=$donnees[0];
						  		 $minijournee=substr($journee,3,2); ; 
						  		 echo $minijournee ; 
						 		 echo "me journ&eacute;e - Dimanche" ;
						  		 echo $donnees[1]; 
								 echo " <br/>";
								}
																
?>



    </td>
    <td width="230" height="12" align="center"> 
      <font face="Arial, Helvetica, sans-serif"><b> 
        <?php

$reponse = $bdd->query("	SELECT $bdmatchsidequipedom,$bdmatchsidequipeext
							FROM  $bdmatchs 
							WHERE $bdmatchsidequipedom=$equipe OR $bdmatchsidequipeext=$equipe
							ORDER BY $bdmatchsidjournee");
					
		while ($row = $reponse->fetch() )
			{
			$idEquipeDom =  $row[0]; 
			$idEquipeExt = $row[1];
			//echo $idEquipeDom;
					require   "../../../connect/connexion1.php";
					$reponse2 = $bdd->query("	SELECT nom_1
												FROM  bdclubs
												WHERE id = $idEquipeDom
												");
												
									while ($row = $reponse2->fetch() )
									{
									$EquipeDom =  $row[0]; 
									}									
												
			echo $EquipeDom;
			echo "<br/>";						 
			
			}
		?>
        </b></font>
    </td>
    <td width="13" height="12"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="../adminFeuilles/page_select_joueurs.php?terrain=dom&equipe=<?php echo $equipe; ?>&equipeB=<?php echo $equipeB; ?>&equipeA=<?php echo $equipeA; ?>&php=php&connect=<?php echo $connect ;?>&comite=<?php echo $comite ; ?>&code_match=<?php echo $code_match; ?>&date=<?php echo $date; ?>&code_div=<?php echo $div; ?>&N1=<?php echo $idPerso1; ?>&N2=<?php echo $idPerso2; ?>&N3=<?php echo $idPerso3; ?>&N4=<?php echo $idPerso4; ?>&N5=<?php echo $idPerso5; ?>&N6=<?php echo $idPerso6; ?>&N7=<?php echo $idPerso7; ?>&N8=<?php echo $idPerso8; ?>&N9=<?php echo $idPerso9; ?>&N10=<?php echo $idPerso10; ?>&N11=<?php echo $idPerso11; ?>&N12=<?php echo $idPerso12; ?>&N13=<?php echo $idPerso13; ?>&N14=<?php echo $idPerso14; ?>&N15=<?php echo $idPerso15; ?>&N16=<?php echo $idPerso16; ?>&N17=<?php echo $idPerso17; ?>&N18=<?php echo $idPerso18; ?>&N19=<?php echo $idPerso19; ?>&N20=<?php echo $idPerso20; ?>&N21=<?php echo $idPerso21; ?>&N22=<?php echo $idPerso22; ?>&N23=<?php echo $idPerso23; ?>"><font face="Arial, Helvetica, sans-serif"></font></a></font></div>
    </td>
    <td width="234" height="12" align="center"> 
      <font face="Arial, Helvetica, sans-serif"><b> 
        <?php
				if ($connect == "connexion2")
require   "../../../connect/connexion2.php";
else
require   "../../../connect/connexion3.php";

$reponse = $bdd->query("SELECT $bdmatchsidequipeext
						FROM  $bdmatchs 
						WHERE $bdmatchsidequipedom=$equipe OR $bdmatchsidequipeext=$equipe
						ORDER BY $bdmatchsidjournee");
					
		while ($row = $reponse->fetch() )
			{	
        	 $idEquipeExt = $row[0]; 
			 require   "../../../connect/connexion1.php";
					$reponse2 = $bdd->query("	SELECT nom_1
												FROM  bdclubs
												WHERE id = $idEquipeExt
												");
												
									while ($row = $reponse2->fetch() )
									{
									$EquipeExt =  $row[0]; 
									}	
			 echo $EquipeExt;
        	 echo "<br/>";	
			}
?>
        </b></font>
    </td>
    <td height="12" align="center"> 
     
        <?php
						if ($connect == "connexion2")
require   "../../../connect/connexion2.php";
else
require   "../../../connect/connexion3.php";
$reponse = $bdd->query("	SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext
							FROM  $bdmatchs 
							WHERE $bdmatchsidequipedom=$equipe OR $bdmatchsidequipeext=$equipe 
							ORDER BY $bdmatchsidjournee");
			
		while ($row = $reponse->fetch() )
			{	
			 echo "  </b> <a href=\"/dirigeant/feuilleMatch/adminFeuilles/page_select_joueurs.php?meth=2&connect=$connect&type=$type&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_div=$row[1]&equipeA=$row[2]&equipeB=$row[4]&comite=$comite&date=$row[3]&code_match=$row[0]\" target=_top >R&eacute;aliser /Modifier</a>";		  
     		 echo " <br/>";   
			}
?>
      
    </td>
    <td width="189" height="12"> 
      <div align="center">
        <?php
$reponse = $bdd->query("	SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext 
			FROM $bdmatchs 
			WHERE $bdmatchsidequipedom=$equipe OR $bdmatchsidequipeext=$equipe 
			ORDER BY $bdmatchsidjournee");
			
			while ($row = $reponse->fetch() )
				{
				 echo "  </b> <a href=\"/dirigeant/feuilleMatch/zonesFeuilles/page_feuillematchConsultation.php?connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_div=$row[1]&equipeA=$row[2]&equipeB=$row[4]&date=$row[3]&code_match=$row[0]\" target=_top >Consulter/ Imprimer</a>";
     			 echo " <br/>";
				}

        $reponse->closeCursor(); // Termine le traitement de la requête
?>
     




	 </div>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php// echo $id_equipe; ?>
<!--
<table width="1300" border="0">
  <tr valign="top"> 
    <td colspan="7" bgcolor="#00CCCC" height="29"> 
      <div align="center"><font size="4" face="Arial, Helvetica, sans-serif"><b>Cr&eacute;ation 
        de feuilles de matchs pour les rencontres amicales ou les phases finales</b></font></div>
    </td>
  </tr>
</table>
<form name="form1" method="POST" action="http://francefinalesrugby.franceserv.com/admin/feuilleMatch/adminFeuilles/page_select_joueursFMLibre.php?equipe=<?php echo $equipe ;?>&doubleBase=1&connectInvitee=<?php echo $connectInvitee ;?>&comiteInvite=<?php echo $comiteInvite ;?>&comite=<?php echo $comite ;?>&connect=<?php echo $connect ;?>&id_equipe=<?php echo $id_equipe ;?>">
<table width="1300" border="0">
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td height="22" colspan="6">&nbsp;</td>
  </tr>
  <tr valign="top"> 
      <td width="409" height="18">&nbsp;</td>
      <td width="230" height="18"><font face="Arial, Helvetica, sans-serif"><b>Identifiant 
        du club (code ffr)</b></font></td>
      <td width="13" height="18">&nbsp;</td>
      <td width="234" height="18"> 
        <input type="text" name="equipeInvitee">
      </td>
      <td height="18">&nbsp;</td>
      <td width="189" height="18">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="409" height="12">&nbsp; </td>
    <td width="230" height="12"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="13" height="12"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="../adminFeuilles/page_select_joueurs.php?terrain=dom&equipe=<?php echo $equipe; ?>&equipeB=<?php echo $equipeB; ?>&equipeA=<?php echo $equipeA; ?>&php=php&connect=<?php echo $connect ;?>&comite=<?php echo $comite ; ?>&code_match=<?php echo $code_match; ?>&date=<?php echo $date; ?>&code_div=<?php echo $div; ?>&N1=<?php echo $idPerso1; ?>&N2=<?php echo $idPerso2; ?>&N3=<?php echo $idPerso3; ?>&N4=<?php echo $idPerso4; ?>&N5=<?php echo $idPerso5; ?>&N6=<?php echo $idPerso6; ?>&N7=<?php echo $idPerso7; ?>&N8=<?php echo $idPerso8; ?>&N9=<?php echo $idPerso9; ?>&N10=<?php echo $idPerso10; ?>&N11=<?php echo $idPerso11; ?>&N12=<?php echo $idPerso12; ?>&N13=<?php echo $idPerso13; ?>&N14=<?php echo $idPerso14; ?>&N15=<?php echo $idPerso15; ?>&N16=<?php echo $idPerso16; ?>&N17=<?php echo $idPerso17; ?>&N18=<?php echo $idPerso18; ?>&N19=<?php echo $idPerso19; ?>&N20=<?php echo $idPerso20; ?>&N21=<?php echo $idPerso21; ?>&N22=<?php echo $idPerso22; ?>&N23=<?php echo $idPerso23; ?>"><font face="Arial, Helvetica, sans-serif"></font></a></font></div>
    </td>
    <td width="234" height="12"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b> </b></font></div>
    </td>
    <td height="12"> 
      <div align="center"> </div>
    </td>
    <td width="189" height="12"> 
      <div align="center"> </div>
    </td>
  </tr>
  <tr valign="top"> 
    <td width="409" height="12">&nbsp;</td>
      <td width="230" height="12">Quelle &eacute;quipe occupera la partie A<br>
        de la feuille de match (code FFR)</td>
    <td width="13" height="12">&nbsp;</td>
    <td width="234" height="12">
        <input type="text" name="equipePositionA">
      </td>
    <td height="12">&nbsp;</td>
    <td width="189" height="12">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="409" height="12">&nbsp;</td>
    <td width="230" height="12">&nbsp;</td>
    <td width="13" height="12">&nbsp;</td>
    <td width="234" height="12">&nbsp;</td>
    <td height="12">&nbsp;</td>
    <td width="189" height="12">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="409" height="12">&nbsp;</td>
    <td width="230" height="12">&nbsp;</td>
    <td width="13" height="12">&nbsp;</td>
    <td width="234" height="12">
     
        <input type="submit" name="Submit" value="Envoyer">
      
    </td>
    <td height="12">&nbsp;</td>
    <td width="189" height="12">&nbsp;</td>
  </tr>
</table>
</form>
-->
<hr /><hr />
<table width="1300" border="0">
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td height="22" colspan="7">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="378" height="12"> 
  

  <?php
//if ($connect == "connexion2")
require   "../../../connect/connexion6.php";
//else
//require   "../../../connect/connexion3.php";
?>
      <?php
/*
$reponse = $bdd->query("	SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext 
			FROM $bdmatchs 
			WHERE $bdmatchsidequipedom=$equipe OR $bdmatchsidequipeext=$equipe
			ORDER BY  $bdmatchsidjournee");
					//$result = mysql_query($query) or die .(mysql_error ());
					while ($row = $reponse->fetch() )
								{
								 $journee=$row[1];
						  		 $minijournee=substr($journee,3,2); ; 
						 // 		 echo $minijournee ; 
						// 		 echo "me journ&eacute;e - Dimanche" ;
						//  		 echo $row[3]; 
						//		 echo " <br/>";

								}
*/								
?>
    </td>
    <td width="217" height="12"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b> 
        <?php
		$phpComite_feuilleA = "php".''.$comite.''."_feuilleA";
		
/*		
$reponse = $bdd->query("	SELECT f.equipe_dom, c.nom_1
			FROM $phpComite_feuilleA f
			INNER JOIN bdclubs c ON c.id = f.equipe_dom
			WHERE (f.equipe_dom=$equipe OR f.equipe_ext=$equipe) and f.id >= 3999
			ORDER BY f.id");
					
					while ($row = $reponse->fetch() )
						{
							
							//echo $row[0]; 
							echo $row[1]; 
       						echo "<br/>";						 
						}
*/						
		?>
        </b></font></div>
    </td>
    <td width="27" height="12"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="../adminFeuilles/page_select_joueurs.php?terrain=dom&equipe=<?php echo $equipe; ?>&equipeB=<?php echo $equipeB; ?>&equipeA=<?php echo $equipeA; ?>&php=php&connect=<?php echo $connect ;?>&comite=<?php echo $comite ; ?>&code_match=<?php echo $code_match; ?>&date=<?php echo $date; ?>&code_div=<?php echo $div; ?>&N1=<?php echo $idPerso1; ?>&N2=<?php echo $idPerso2; ?>&N3=<?php echo $idPerso3; ?>&N4=<?php echo $idPerso4; ?>&N5=<?php echo $idPerso5; ?>&N6=<?php echo $idPerso6; ?>&N7=<?php echo $idPerso7; ?>&N8=<?php echo $idPerso8; ?>&N9=<?php echo $idPerso9; ?>&N10=<?php echo $idPerso10; ?>&N11=<?php echo $idPerso11; ?>&N12=<?php echo $idPerso12; ?>&N13=<?php echo $idPerso13; ?>&N14=<?php echo $idPerso14; ?>&N15=<?php echo $idPerso15; ?>&N16=<?php echo $idPerso16; ?>&N17=<?php echo $idPerso17; ?>&N18=<?php echo $idPerso18; ?>&N19=<?php echo $idPerso19; ?>&N20=<?php echo $idPerso20; ?>&N21=<?php echo $idPerso21; ?>&N22=<?php echo $idPerso22; ?>&N23=<?php echo $idPerso23; ?>"><font face="Arial, Helvetica, sans-serif"></font></a></font></div>
    </td>
    <td width="160" height="12"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b> 
        <?php
	/*	
$reponse = $bdd->query("	SELECT f.equipe_ext, c.nom_1
			FROM $phpComite_feuilleA f
			INNER JOIN bdclubs c ON c.id = f.equipe_ext
			WHERE (f.equipe_dom=$equipe OR f.equipe_ext=$equipe) and f.id >= 3999
			ORDER BY f.id");
					//$result = mysql_query($query);
					while ($row = $reponse->fetch() )
						{
							//echo $row[0]; 
							echo $row[1]; 
       						echo "<br/>";						 
						}
		
	*/	
		?>
        </b></font></div>
    </td>
    <td height="12" width="143"> 
      <div align="center"> 
        <?php
/*		
$reponse = $bdd->query("	SELECT id, equipe_dom, equipe_ext
			FROM $phpComite_feuilleA
			WHERE (equipe_dom=$equipe OR equipe_ext=$equipe) and id >= 3999
			ORDER BY id");
					//$result = mysql_query($query);
					while ($row = $reponse->fetch() )
						{	
						//echo "  </b> <a href=\"http://francefinalesrugby.franceserv.com/admin/feuilleMatch/adminFeuilles/page_select_joueurs.php?doubleBase=$doubleBase&connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comiteInvite=$comiteInvite&connectInvitee=$connectInvitee&comite=$comite&code_div=$row[1]&equipeA=$row[1]&equipeB=$row[2]&comite=$comite&date=$row[3]&code_match=$row[0]\" target=_top >Modifier</a>";		  
     					//echo " <br/>";   
						}
*/						
?>
      </div>
    </td>
    <td width="201" height="12"> 
      <div align="center">
        <?php
/*		
$reponse = $bdd->query("	SELECT id, equipe_dom, equipe_ext
			FROM $phpComite_feuilleA
			WHERE (equipe_dom=$equipe OR equipe_ext=$equipe) and id >= 3999
			ORDER BY id");
					//$result = mysql_query($query);
					while ($row = $reponse->fetch() )
							{
							//	echo "  </b> <a href=\"http://francefinalesrugby.franceserv.com/admin/feuilleMatch/zonesFeuilles/page_feuillematchConsultationAB.php?connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_div=$row[1]&equipeA=$row[1]&equipeB=$row[2]&date=$row[3]&code_match=$row[0]\" target=_top >Consulter/ Imprimer</a>";
     				//echo " <br/>";
							}
*/
?>
      </div>
    </td>
    <td width="144" height="12"> 
      <div align="center">
        <?php
	/*	
$reponse = $bdd->query("	SELECT id, equipe_dom, equipe_ext
			FROM $phpComite_feuilleA
			WHERE (equipe_dom=$equipe OR equipe_ext=$equipe) and id >= 3999
			ORDER BY id");
					//$result = mysql_query($query);
					while ($row = $reponse->fetch() )
							{
								echo "  </b> <a href=\"http://francefinalesrugby.franceserv.com/admin/feuilleMatch/adminFeuilles/suppEnreg.php?connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_match=$row[0]\" target=_top >Supprimer</a>";
     							echo " <br/>";
							}
*/
?>
        <?php
//mysql_close(); // Déconnexion de MySQL
?>
      </div>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
