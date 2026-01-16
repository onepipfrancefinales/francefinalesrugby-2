
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p> 
  <?php $id_equipe = $_GET['id_equipe'];?>
<?php $id_equipe =substr($id_equipe,0,5);?>

  
  <?php
  
      $bdmatchs=($php.''.$comite.''."_matchs");
      $bdmatchsidequipedom=($php.''.$comite.''."_matchs".''.".id_equipe_dom");
	  $bdmatchsidequipeext=($php.''.$comite.''."_matchs".''.".id_equipe_ext");
	  $bdmatchsidjournee=($php.''.$comite.''."_matchs".''.".id_journee");
	  $bdmatchsid=($php.''.$comite.''."_matchs".''.".id");
	  $bdmatchsdatereelle=($php.''.$comite.''."_matchs".''.".date_reelle");
	  $reserve=($equipe+900000);
 

?>
  <?php $bdcomite=("$php".''.$comite.''."_joueurs");?>
  <?php //echo $bdcomite; ?>
  <?php //echo $connect; ?>

  
  <?php //prise en compte d'une phase 2
 
 // if ($comite==al)
 // $phase2S1=500000;
  //elseif ($comite==cbl )
 // $phase2S1=500000;

 // else
  $phase2S1=0;
  ?>
  
<table width="1300" border="0">
  <tr valign="middle" align="center"> 
    <td colspan="4" height="37">&nbsp;</td>
    <td colspan="3" height="37" width="653">&nbsp;</td>
  </tr>
  <tr valign="middle" align="center"> 
    <td colspan="3" height="37" bgcolor="#CCCCCC"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="4"><a href="http://francefinalesrugby.franceserv.com/admin/feuille_matchA/page_consulter.php?equipe=<?php echo $equipe;?>&id_equipe=<?php echo $id_equipe;?>&php=<?php echo $php;?>&connect=<?php echo $connect;?>&comite=<?php echo $comite;?>">Gestion 
        des licences du club</a></font></b></font></div>
    </td>
    <td width="292" height="37" bgcolor="#CCCCCC"><b><a href="page_FM.php"><font face="Arial, Helvetica, sans-serif"><b><font size="4">D&eacute;connexion</font></b></font></a></b></td>
    <td colspan="3" height="37" bgcolor="#CC6633" width="653"> 
      <div align="center"><font size="4"><b><font size="4"><b><font face="Arial, Helvetica, sans-serif"><a href="page_liste_compet2.php?reserve=<?php echo $reserve;?>&equipe=<?php echo $equipe;?>&id_equipe=<?php echo $id_equipe;?>&comite=<?php echo $comite; ?>&php=<?php echo $php; ?>&connect=<?php echo $connect; ?>">Acc&egrave;s 
        au calendrier Equipe R&eacute;serve</a></font></b></font></b></font></div>
    </td>
  </tr>
  <tr valign="top"> 
    <td colspan="7" height="22" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td colspan="7" height="30" bgcolor="#FFFFFF"> 
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
    <td height="22" colspan="7">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="409" height="23"> 
      <p> 
        <?php
 require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
        <?php

$query = "SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where( $bdmatchsidequipedom-$phase2S1)=bdclubs.code  and ($bdmatchsidequipedom=($equipe+$phase2S1) or $bdmatchsidequipeext=($equipe+$phase2S1)) order by  $bdmatchsidjournee";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
        <?php $journee=$row[1]; ?>
        <?php $minijournee=substr($journee,3,2); ; ?>
        <?php echo $minijournee ; ?>
        me journ&eacute;e - Dimanche 
        <?php echo $row[3]; ?>
        <br/>
        <?php
}



?>
        <?php
mysql_close(); // Déconnexion de MySQL
?>
    </td>
    <td width="230" height="23"> 
      <div align="center"><b> 
        <?php
 require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
        <?php

$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where ($bdmatchsidequipedom-$phase2S1)=bdclubs.code  and ($bdmatchsidequipedom=($equipe+$phase2S1) or $bdmatchsidequipeext=($equipe+$phase2S1)) order by $bdmatchsidjournee";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
?>
        <?php echo $row[6]; ?>
        <br/>
        <?php
}
?>
        <?php
mysql_close(); // Déconnexion de MySQL
?>
        </b></div>
    </td>
    <td width="13" height="23"> 
      <div align="center"></div>
    </td>
    <td width="234" height="23"> 
      <div align="center"><b> 
        <?php
  require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
        <?php

$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where ($bdmatchsidequipeext-$phase2S1)=bdclubs.code  and ($bdmatchsidequipedom=($equipe+$phase2S1) or $bdmatchsidequipeext=($equipe+$phase2S1)) order by $bdmatchsidjournee";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
?>
        <?php echo $row[6]; ?>
        <br/>
        <?php
}



?>
        <?php
mysql_close(); // Déconnexion de MySQL
?>
        </b></div>
    </td>
    <td width="114" height="23"> 
      <?php
  require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
      <?php

$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where ($bdmatchsidequipeext-$phase2S1)=bdclubs.code  and ($bdmatchsidequipedom=($equipe+$phase2S1) or $bdmatchsidequipeext=($equipe+$phase2S1)) order by $bdmatchsidjournee";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
?>
      <?php 
	  
		
	  echo "  </b> <a href=\"http://francefinalesrugby.franceserv.com/admin/feuille_matchA/page_select_joueurs.php?php=$php&connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_div=$row[1]&equipeA=$row[2]&equipeB=$row[4]&comite=$comite&date=$row[3]&code_match=$row[0]\" target=_top >R&eacute;aliser</a>";
      
	
  ?>
      <br/>
      <?php
}
?>
      <?php
mysql_close(); // Déconnexion de MySQL
?>
    </td>
    <td width="81" height="23"> 
      <?php
 require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
      <?php

$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where ($bdmatchsidequipeext-$phase2S1)=bdclubs.code  and ($bdmatchsidequipedom=($equipe+$phase2S1) or $bdmatchsidequipeext=($equipe+$phase2S1)) order by $bdmatchsidjournee";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
?>
      <?php 
	 
	  
	  echo "  </b> <a href=\"http://francefinalesrugby.franceserv.com/admin/feuille_matchA/select_joueurmodif.php?php=$php&connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_div=$row[1]&equipeA=$row[2]&equipeB=$row[4]&date=$row[3]&code_match=$row[0]\" target=_top >Modifier</a>";
    
	
  ?>
      <br/>
      <?php
}

?>
      <?php
mysql_close(); // Déconnexion de MySQL
?>
    </td>
    <td width="189" height="23"> 
      <?php
  require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
      <?php

$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where ($bdmatchsidequipeext-$phase2S1)=bdclubs.code  and ($bdmatchsidequipedom=($equipe+$phase2S1) or $bdmatchsidequipeext=($equipe+$phase2S1)) order by $bdmatchsidjournee";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
?>
      <?php 
	 
	  echo "  </b> <a href=\"http://francefinalesrugby.franceserv.com/admin/feuille_matchA/page_feuillematchConsultation.php?php=$php&connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_div=$row[1]&equipeA=$row[2]&equipeB=$row[4]&date=$row[3]&code_match=$row[0]\" target=_top >Consulter/ Imprimer</a>";
    
	
  ?>
      <br/>
      <?php
}

?>
      <?php
mysql_close(); // Déconnexion de MySQL
?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="1300" border="0">
  <tr valign="top" bgcolor="#00CCCC"> 
    <td width="377"> 
      <?php

$bdfeuilleA= $php.''.$comite.''."_feuilleA";
echo $bdfeuilleA; echo $connect;
$bdfeuilleB= $php.''.$comite.''."_feuilleB";
echo $bdfeuilleB; 

?>
    </td>
    <td width="262">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="234">&nbsp;</td>
    <td width="114">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="189">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="377"><a href="formulairefinale.php?connect=<?php echo $connect;?>&bdfeuilleA=<?php echo $bdfeuilleA;?>"> 
      </a> 
      <?php

echo $equipe;
?>
      <?php

echo $id_equipe;
?>
      <?php

echo $php;
?>
    </td>
    <td width="262"> 
      <?php
	   require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
      <?php

$query = "SELECT id,equipe_dom, equipe_ext,poule FROM $bdfeuilleA where id>999";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
 
$idF= $row[0];
$equipe_dom= $row[1]; 
$equipeA= $row[1]; 
$equipe_ext= $row[2];  
$equipeB= $row[2];
$competition= $row[3];   
}
echo $equipe_dom;echo "--"; echo $equipe_ext; echo "--"; echo $idF; echo "--";echo $equipeA; echo "--"; echo $equipeB;
?>
    </td>
    <td width="13">&nbsp;</td>
    <td width="234">&nbsp; </td>
    <td width="114">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="189">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="377" height="24"><a href="formulairefinale.php?comite=<?php echo $comite;?>&php=<?php echo $php;?>&connect=<?php echo $connect;?>&id_equipe=<?php echo $id_equipe;?>&equipe=<?php echo $equipe;?>&bdfeuilleA=<?php echo $bdfeuilleA;?>&bdfeuilleB=<?php echo $bdfeuilleB;?>" target="_top">Cr&eacute;ation 
      d'un feuille de match</a></td>
    <td width="262" height="24">&nbsp;</td>
    <td width="13" height="24">&nbsp;</td>
    <td width="234" height="24">&nbsp;</td>
    <td width="114" height="24">&nbsp;</td>
    <td width="81" height="24">&nbsp;</td>
    <td width="189" height="24">&nbsp; </td>
  </tr>
  <tr valign="top"> 
    <td width="377"> 
      <?php
if($equipe_dom==$equipe or $equipe_ext==$equipe)
echo $competition;
else
echo "";
?>
    </td>
    <td width="262"> 
      <div align="center"><b> 
        <?php
 require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
        <?php
$query = "SELECT equipe_dom, equipe_ext FROM $bdfeuilleA where id='$idF'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
$equipe_dom= $row[0];   
$equipeA= $row[0]; 
$equipe_ext= $row[1];   
$equipeB= $row[1] ;      
}
//echo $equipeA;
?>
        <?php

$query = "SELECT code, nom_1 FROM bdclubs where id='$equipeA'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
$equipe_dom1= $row[1];   
//$equipeA= $row[0]; 
        
}
if($equipe_dom==$equipe or $equipe_ext==$equipe)
echo $equipe_dom1;
else
echo"";
?>
        </b></div>
    </td>
    <td width="13">&nbsp;</td>
    <td width="234"> 
      <div align="center"><b> 
        <?php
  require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
        <?php

$query = "SELECT equipe_ext FROM $bdfeuilleA where id='$idF'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
$equipe_ext= $row[0];   
$equipeB= $row[0]; 
        
}
//echo $equipe_ext;
?>
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
      ?>
        <?php

$query = "SELECT code, nom_1 FROM bdclubs where id='$equipe_ext'";
$result = mysql_query($query) or die (mysql_error());
while ($row = mysql_fetch_array($result) )
{
$equipe_ext1= $row[1];   
//$equipe= $row[0]; 
        
}
if($equipe==$equipe_dom or $equipe==$equipe_ext)
echo $equipe_ext1;
else
echo "";
?>
        </b></div>
    </td>
    <td width="114"> 
      <?php 
	  if ($equipe==$equipe_dom or $equipe==$equipe_ext)
		
	  echo "  </b> <a href=\"http://francefinalesrugby.franceserv.com/admin/feuille_matchA/page_select_joueurs.php?php=$php&connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_div=$row[1]&equipeA=$equipeA&equipeB=$equipeB&comite=$comite&date=$row[3]&code_match=$idF\" target=_top >Réaliser</a>";
      else
	  echo "";
	
  ?>
    </td>
    <td width="81"> 
      <?php 
	 if($equipe==$equipe_dom or $equipe==$equipe_ext)
	  
	  echo "  </b> <a href=\"http://francefinalesrugby.franceserv.com/admin/feuille_matchA/select_joueurmodif.php?php=$php&connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&code_div=$row[1]&equipeA=$equipeA&equipeB=$equipeB&date=$row[3]&code_match=$idF\" target=_top >Modifier</a>";
    else
	echo "";
	
  ?>
      <br/>
    </td>
    <td width="189"> 
      <?php 
	 if ($equipe==$equipe_dom or $equipe==$equipe_ext)
	  echo "  </b> <a href=\"http://francefinalesrugby.franceserv.com/admin/feuille_matchA/page_feuillematchfinale.php?php=$php&connect=$connect&id_equipe=$id_equipe&equipe=$equipe&comite=$comite&equipeA=$equipeA&bdfeuilleA=$bdfeuilleA&bdfeuilleB=$bdfeuilleB&equipeA=$equipeA&equipeB=$equipeB&idF=$idF\" target=_top >Consulter/ Imprimer</a>";
    else
	echo "";
	
  ?>
      <br/>
    </td>
  </tr>
  <tr valign="top"> 
    <td width="377">&nbsp;</td>
    <td width="262"><a href="formulairesaisiescore.php?code_match=<?php echo $idF;?>&comite=<?php echo $comite; ?>&php=<?php echo $php; ?>&id_equipe=<?php echo $id_equipe; ?>&equipe=<?php echo $equipe; ?>&connect=<?php echo $connect;?>&bdfeuilleA=<?php echo $bdfeuilleA;?>&bdfeuilleB=<?php echo $bdfeuilleB;?>&equipeA=<?php echo $equipeA;?>&equipeB=<?php echo $equipeB;?>">Saisie 
      du r&eacute;sultat</a></td>
    <td width="13">&nbsp;</td>
    <td width="234">&nbsp;</td>
    <td width="114">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="189">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
