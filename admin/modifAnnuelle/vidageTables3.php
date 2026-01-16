<?php $AP=$_POST['AP']; ?>
<?php $AL=$_POST['AL']; ?>
<?php $AB=$_POST['AB']; ?>
<?php $AU=$_POST['AU']; ?>
<?php $BE=$_POST['BE']; ?>
<?php $BG=$_POST['BG']; ?>
<?php $BR=$_POST['BR']; ?>
<?php $CE=$_POST['CE']; ?>

<?php $CBL=$_POST['CBL']; ?>
<?php $CA=$_POST['CA']; ?>
<?php $DA=$_POST['DA']; ?>
<?php $FL=$_POST['FL']; ?>
<?php $IDF=$_POST['IDF']; ?>
<?php $LD=$_POST['LD']; ?>
<?php $LM=$_POST['LM']; ?>
<?php $LY=$_POST['LY']; ?>

<?php $MPY=$_POST['MPY']; ?>
<?php $N=$_POST['N']; ?>
<?php $PL=$_POST['PL']; ?>
<?php $PA=$_POST['PA']; ?>
<?php $PCH=$_POST['PCH']; ?>
<?php $PC=$_POST['PC']; ?>
<?php $PR=$_POST['PR']; ?>

<?php $PRO=$_POST['PRO']; ?>
<?php $FED1=$_POST['FED1']; ?>
<?php $FED2=$_POST['FED2']; ?>
<?php $FED3NE=$_POST['FED3NE']; ?>
<?php $FED3GS=$_POST['FED3GS']; ?>
<?php $FEM=$_POST['FEM']; ?>

<!DOCTYPE html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p><font size="4" face="Arial, Helvetica, sans-serif">Vider les bases de donn&eacute;es 
  ci dessous : </font></p>


<?php if ($AP == 1)
	{
	echo " Vider les tables du comite des Alpes";
	$AP="phpap";
	}
?>
<br />
<?php if ($AL == 1)
	{
	echo " Vider les tables du comite Alsace Lorraine";
	$AL="phpal";
	}
?>

<br />
<?php if ($AB == 1)
	{
	echo " Vider les tables du comite Armagnac Bigorre";
	$AB="phpab";
	}
?>

<br />
<?php if ($AU == 1)
	{
	echo " Vider les tables du comite Auvergne";
	$AU="phpau";
	}

?>

<br />
<?php if ($BE == 1)
	{
	echo " Vider les tables du comite du B�arn : ";
	$BE="phpbe";
	}

?>

<br />
<?php if ($BG == 1)
	{
	echo " Vider les tables cu comite de Bourgogne";
	$BG="phpbg";
	}?>

<br />
<?php if ($BR == 1)
	{
	echo " Vider les tables du comite de Bretagne";
	$BR="phpbr";
	}
?>

<br />
<?php if ($CA == 1)
	{
	echo " Vider les tables du comite Cote d'Argent";
	$CA="phpca";
	}
?>

<br />
<?php if ($CBL == 1)
	{
	echo " Vider les tables du comite Cote Basque Landes";
	$CBL="phpcbl";
	}
?>

<br />
<?php if ($CE == 1)
	{
	echo " Vider les tables du comite Centre";
	$CE="phpce";
	}
?>

<br />
<?php if ($DA == 1)
	{
	echo " Vider les tables du comite drome Ardeche";
	$DA="phpda";
	}
?>

<br />
<?php if ($FL == 1)
	{
	echo " Vider les tables du comite des Flandres";
	$FL="phpfl";
	}
?>


<br />
<?php if ($IDF == 1)
	{
	echo " Vider les tables du comite Ile de France";
	$IDF="phpidf";
	}
?>


<br />
<?php if ($LD == 1)
	{
	echo " Vider les tables du comite Languedoc";
	$LD="phpld";
	}
?>

<br />
<?php if ($LM == 1)
	{
	echo " Vider les tables du comite Limousin";
	$LM="phplm";
	}
?>

<br />
<?php if ($LY == 1)
	{
	echo " Vider les tables du comite Lyonnais";
	$LY="phply";
	}
?>

<br />
<?php if ($MPY == 1)
	{
	echo " Vider les tables du comite Midi Pyr�n�es";
	$MPY="phpmpy";
	}
?>

<br />
<?php if ($N == 1)
	{
	echo " Vider les tables du comite Normandie";
	$N="phpn";
	}
?>

<br />
<?php if ($PL == 1)
	{
	echo " Vider les tables du comite Pays de Loire";
	$PL="phppl";
	}
?>

<br />
<?php if ($PA == 1)
	{
	echo " Vider les tables du comite Perigord Agenais";
	$PA="phppa";
	}
?>

<br />
<?php if ($PCH == 1)
	{
	echo " Vider les tables du comite Poitou Charente";
	$PCH="phppch";
	}
?>

<br />
<?php if ($PR == 1)
	{
	echo " Vider les tables du comite Povence";
	$PR="phppr";
	}
?>

<br />
<?php if ($PC == 1)
	{
	echo " Vider les tables du comite Pays Catalan";
	$PC="phpr";
	}
?>

<br />
<?php if ($PRO == 1)
	{
	echo " Vider les tables du comp�titions Pro";
	$PRO="phppro";
	}
?>

<br />
<?php if ($FED1== 1)
	{
	echo " Vider les tables de F�d�rale 1";
	$FED1="phpf1";
	}
?>

<br />
<?php if ($FED2 == 1)
	{
	echo " Vider les tables de F�d�rale 2";
	$FED2="phpfed2";
	}
?>

<br />
<?php if ($FED3GS == 1)
	{
	echo " Vider les tables de F�d�rale 3 GS";
	$FED3GS="phpfed3GS";
	}
?>

<br />
<?php if ($FED3NE ==1)
	{
	echo " Vider les tables de f�d�rale 3 NE";
	$FED3NE="phpfed3NE";
	}
?>

<br />
<?php if ($FEM == 1)
	{
	echo " Vider les tables F�minines";
	$FEM="phpfem";
	}
?>




<p>clmnt / clmnt_cache /clmnt_graph</p>
<p>clmnt_pronos / equipes / journee / matchs</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a href="vidageTables2.php">Retour</a></p>
<p><a href="vidageTables4.php?PA=<?php echo $PA;?>">Valider</a></p>

<?php
//mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
//mysql_select_db("onepip-france-db3"); 
?>



<?php //cr�ation de la requ�te SQL:
 // $sql = "TRUNCATE phpbr_matchs2  ";
  
  
  
   
		  
		  
	//	   $requete = mysql_query( $sql )   ;

?>


 
</body>
</html>
