
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="../feuilledestyle.css"/>
</head>

<body bgcolor="#FFFFFF" text="#000000">

<?php
 if (isset ($_GET['id_equipe'])) $id_equipe = $_GET['id_equipe']; else  $id_equipe ="";
if (isset ($_GET['nomLigue'])) $nomLigue = $_GET['nomLigue']; else  $nomLigue ="";
if (isset ($_GET['sigle'])) $sigle = $_GET['sigle']; else  $sigle ="";
 if (isset ($_GET['comite'])) $comite = $_GET['comite']; else  $comite =""; 
 if (isset ($_GET['connect'])) $connect = $_GET['connect']; else  $connect =""; 

 $equipe = $_GET['equipe'];?>
<?php
require   "../../../connect/connexion1.php";
?>
<?php
$reponse = $bdd->query("SELECT sigle,comite, id 
						FROM bdclubs 
						WHERE id='$equipe'"); 
							While ($donnees = $reponse->fetch() )
								{ 
							  	$equipe = $donnees['id'];
								
								$sigle=$donnees['sigle'];	  
								}
//mysql_close(); 
?>
<?php// echo $equipe;?>
<?php// echo $comite;?>
<div align="center"></div>
<p align="center"> 


<?php
require   "../../../connect/connexion5.php";
?> 
<?php
$codeComite=substr($equipe,-5,2);
//echo $codeComite;
$reponse = $bdd->query("	SELECT nomLigue
							FROM comite 
							WHERE code='$codeComite'"); 
								While ($donnees = $reponse->fetch() )
											{ 
										$nomLigue = $donnees['nomLigue'];	  
										 }
?>										 
<h3 align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif">
  <?php
echo "<br />";echo "Ligue";
echo "<br />";
echo $nomLigue;
//mysql_close(); 

?>
   </font></h3>
<h3 align="center">&nbsp;</h3>
					<h1 align="center"><strong>
					<?php echo $sigle;?>
					  </strong></h1>
					<div align="center"><br/>
					  <?php 
					  $logo=substr($equipe, -5);
					{print("<img src=\"../../../images/blasons200_200/$logo.gif\" >");}
						?>


</div>

<h4><a href="../adminLicences/page_consulter.php?id_equipe=<?php echo $id_equipe ; ?>&equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Effectif   complet </a></h4>
	<h4><a href="../adminLicences/page_info_licence.php?id_equipe=<?php echo $id_equipe ; ?>&equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Informations 
  licence</a></h4>
<br/>

<h5> <a href="../connexion/page_liste_compet1.php?type=S1&id_equipe=<?php echo $id_equipe ; ?>&equipe=<?php echo $equipe; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Accueil</a></h5>
<br>
<h4><a href="../adminLicences/page_ajouter.php?id_equipe=<?php echo $id_equipe ; ?>&equipe=<?php echo $equipe; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Ajouter une licence</a></h4>
<h4><a href="../adminLicences/page_modifier.php?id_equipe=<?php echo $id_equipe ; ?>&equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Modifier 
  une licence</a></h4>
<h4><a href="../adminLicences/page_supprimer.php?id_equipe=<?php echo $id_equipe ; ?>&equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Supprimer 
  une licence</a></h4>
<br/>

<h4><b><a href="../stat/feuilleStat.php?comite=<?php echo $comite;?>&equipe=<?php echo $equipe; ?>"><font face="Arial, Helvetica, sans-serif"><b>Statistiques</b></font></a></b></h4>

<h4><b><a href="../telechargement/page_accueil.php?id_equipe=<?php echo $id_equipe ; ?>&equipe=<?php echo $equipe; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>"><font face="Arial, Helvetica, sans-serif">T&eacute;l&eacute;charger 

  vos licences</font></a></b></h4>
   <br>
<h4><a href="../adminLicences/page_FAQ.php?id_equipe=<?php echo $id_equipe ; ?>&equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Foire 
  aux questions</a></h4>
<h4><a href="mailto:francefinalesrugby@free.fr" > Contact</a></h4>
<h5><b><a href="../connexion/deconnexion.php"><font face="Arial, Helvetica, sans-serif"><b>D&eacute;connexion</b></font></a></b></h5>  
  
  
</body>
</html>
