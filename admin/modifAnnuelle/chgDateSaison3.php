<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 


<?php $id=$_POST['id']; ?>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
 
  <?php
  //r�cup�ration des valeurs des champs:
  
//****** Connection � la base de donn�es n�2   *********
$anneeAP 		= $_POST['anneeAP'];  
$anneeAL 		= $_POST['anneeAL'];  
$anneeAB 		= $_POST['anneeAB']; 
$anneeAU 		= $_POST['anneeAU']; 
$anneeBE 		= $_POST['anneeBE']; 
$anneeBG 		= $_POST['anneeBG'];
$anneeCA 		= $_POST['anneeCA'];
$anneeCE 		= $_POST['anneeCE']; 
$anneeCBL 		= $_POST['anneeCBL']; 
$anneeDA		= $_POST['anneeDA']; 
$anneeFL	 	= $_POST['anneeFL']; 
$anneeIDF 		= $_POST['anneeIDF'];
$anneeLD		= $_POST['anneeLD']; 
$anneeLM 		= $_POST['anneeLM']; 
$anneeLY 		= $_POST['anneeLY']; 
$anneeN 		= $_POST['anneeN']; 
$anneePA 		= $_POST['anneePA']; 
$anneePCH 		= $_POST['anneePCH']; 
//****** Connection � la base de donn�es n�3   *********
$anneePC 		= $_POST['anneePC']; 
$anneeMPY 		= $_POST['anneeMPY']; 
$anneeBR 		= $_POST['anneeBR'];
$anneePR 		= $_POST['anneePR']; 
$anneePL 		= $_POST['anneePL']; 
$anneePRO 		= $_POST['anneePRO']; 
$anneeFED1 		= $_POST['anneeFED1'];
$anneeFED2 		= $_POST['anneeFED2'];
$anneeFED3NE 	= $_POST['anneeFED3NE'];
$anneeFED3GS 	= $_POST['anneeFED3GS'];
//****** Connection � la base de donn�es n�4   *********
$anneeFEM 		= $_POST['anneeFEM'];
?>

<?php //****** Connection � la base de donn�es n�2   *********
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db2"); 
?>
<?php 
$sqlAP = "	UPDATE phpap_saisons
			SET  annee='$anneeAP'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlAP )   ;

$sqlAL = "	UPDATE phpal_saisons
			SET  annee='$anneeAL'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlAL )   ;


$sqlAB = "	UPDATE phpab_saisons
			SET  annee='$anneeAB'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlAB )   ;
  
   
$sqlAU = "	UPDATE phpau_saisons
			SET  annee='$anneeAU'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlAU )   ;

$sqlBE = "	UPDATE phpbe_saisons
			SET  annee='$anneeBE'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlBE )   ;

$sqlBG = "	UPDATE phpbg_saisons
			SET  annee='$anneeBG'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlBG )   ;

$sqlCE = "	UPDATE phpce_saisons
			SET  annee='$anneeCE'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlCE )   ;

$sqlCBL = "	UPDATE phpcbl_saisons
			SET  annee='$anneeCBL'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlCBL )   ;

$sqlCA = "	UPDATE phpca_saisons
			SET  annee='$anneeCA'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlCA )   ;

$sqlDA = "	UPDATE phpda_saisons
			SET  annee='$anneeDA'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlDA )   ;

$sqlFL = "	UPDATE phpfl_saisons
			SET  annee='$anneeFL'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlFL)   ;

$sqlIDF = "	UPDATE phpidf_saisons
			SET  annee='$anneeIDF'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlIDF )   ;

$sqlLD = "	UPDATE phpld_saisons
			SET  annee='$anneeLD'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlLD )   ;

$sqlLM = "	UPDATE phplm_saisons
			SET  annee='$anneeLM'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlLM )   ;


$sqlLY = "	UPDATE phply_saisons
			SET  annee='$anneeLY'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlLY )   ;

$sqlN = "	UPDATE phpn_saisons
			SET  annee='$anneeN'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlN )   ;

$sqlPA = "	UPDATE phppa_saisons
			SET  annee='$anneePA'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlPA )   ;

$sqlPCH = "	UPDATE phppch_saisons
			SET  annee='$anneePCH'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlPCH )   ;

$sqlPC = "	UPDATE phppc_saisons
			SET  annee='$anneePC'
			WHERE id = 2010 " ;
$requete = mysql_query( $sqlPC )   ;


mysql_close();
?>



<?php //****** Connection � la base de donn�es n�3    *********
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db3"); 
?>

<?php 
$sqlBR= "	UPDATE phpbr_saisons
			SET  annee='$anneeBR'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlBR )   ;



$sqlMPY = "	UPDATE phpmpy_saisons
			SET  annee='$anneeMPY'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlMPY )   ;



$sqlPL = "	UPDATE phppl_saisons
			SET  annee='$anneePL'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlPL )   ;


$sqlPR = "	UPDATE phppr_saisons
			SET  annee='$anneePR'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlPR )   ;

$sqlPRO = "	UPDATE phppro_saisons
			SET  annee='$anneePRO'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlPRO)   ;


$sqlFED1 = " UPDATE phpf1_saisons
			SET  annee='$anneeFED1'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlFEDl )   ;


$sqlFED2 = "	UPDATE phpfed2_saisons
			SET  annee='$anneeFED2'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlFED2 )   ;


$sqlFED3NE = "	UPDATE phpfed3NE_saisons
			SET  annee='$anneeFED3NE'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlFED3NE )   ;


$sqlFED3GS = "	UPDATE phpfed3GS_saisons
			SET  annee='$anneeFED3GS'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlFED3GS )   ;


mysql_close();
?>


<?php //****** Connection � la base de donn�es n�4    *********
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france_db4"); 
?>

<?php 
$sqlFEM= "	UPDATE phpfem_saisons
			SET  annee='$anneeFEM'
		  	WHERE id = 2010 " ;
$requete = mysql_query( $sqlFEM )   ;



mysql_close();
?>



<?php
//affichage des r�sultats, pour savoir si la modification a march�e:
 	 if($requete)
		  {
			echo("La modification a �t� correctement effectu�e");
		 
		  }
  		else
		  {
			echo("La modification � �chou�e") ;
		  }

mysql_close(); 
?>
</p>

<a href="chgDateSaison2.php">Retour, pour v�rifification </a>