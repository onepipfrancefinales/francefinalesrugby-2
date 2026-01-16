<?php $AP=$_GET['AP']; ?>
<?php $AL=$_GET['AL']; ?>
<?php $AB=$_GET['AB']; ?>
<?php $AU=$_GET['AU']; ?>
<?php $BE=$_GET['BE']; ?>
<?php $BG=$_GET['BG']; ?>
<?php $BR=$_GET['BR']; ?>
<?php $CE=$_GET['CE']; ?>

<?php $CBL=$_GET['CBL']; ?>
<?php $CA=$_GET['CA']; ?>
<?php $DA=$_GET['DA']; ?>
<?php $FL=$_GET['FL']; ?>
<?php $IDF=$_GET['IDF']; ?>
<?php $LD=$_GET['LD']; ?>
<?php $LM=$_GET['LM']; ?>
<?php $LY=$_GET['LY']; ?>

<?php $MPY=$_GET['MPY']; ?>
<?php $N=$_GET['N']; ?>
<?php $PL=$_GET['PL']; ?>
<?php $comite=$_GET['PA']; echo $comite;?>
<?php $PCH=$_GET['PCH']; ?>
<?php $PC=$_GET['PC']; ?>
<?php $PR=$_GET['PR']; ?>

<?php $PRO=$_GET['PRO']; ?>
<?php $FED1=$_GET['FED1']; ?>
<?php $FED2=$_GET['FED2']; ?>
<?php $FED3NE=$_GET['FED3NE']; ?>
<?php $FED3GS=$_GET['FED3GS']; ?>
<?php $FEM=$_GET['FEM']; ?>



<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p>Vider les bases de donn&eacute;es ci dessous : </p>

<p>_clmnt<br>
  _clmnt_cache<br>
  _clmnt_graph<br>
  _clmnt_pronos<br>
  _equipes<br>
  _journee <br>
  _matchs</p>


<p>Valider</p>
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db2"); 


//$matchs2=$PA.''."_matchs2";

$clmnt=$comite.''."_clmnt";
$clmntCache=$comite.''."_clmnt_cache";
$clmntGraph=$comite.''."_clmnt_graph";
$clmntPronos=$comite.''."_clmnt_pronos";
$equipes=$comite.''."_equipes";
$journees=$comite.''."_journees";
$matchs=$comite.''."_matchs";


?>
<?php //cr�ation de la requ�te SQL:
 
$sql1 = "	TRUNCATE $clmnt  ";
		$requete = mysql_query( $sql1 )   ;

$sql2 = "	TRUNCATE $clmntCache  ";
	  $requete = mysql_query( $sql2 )   ;
		   
		   
$sql3 = "	TRUNCATE $clmntGraph  ";
	   $requete = mysql_query( $sql3 )   ;
		   
		   
$sql4 = "	TRUNCATE $clmntPronos  ";
	  $requete = mysql_query( $sql4 )   ;
		  
		  
 $sql5 = "	TRUNCATE $equipes  ";
 	   $requete = mysql_query( $sql5 )   ;
		   
 $sql6 = "	TRUNCATE $journees  ";
	   $requete = mysql_query( $sql6 )   ;
		   
		   
$sql7 = "	TRUNCATE $matchs  ";
	  $requete = mysql_query( $sql7 )   ;
		   


?>


 
</body>
</html>
