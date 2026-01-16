<?php 
if (isset($_GET['comite'])){$comite=$_GET['comite'];} 
if (isset($_GET['comite2'])){$comite2=$_GET['comite2'];} 
if (isset($_GET['champ'])){$champ = $_GET['champ'];} 
if (isset($_GET['bddComite'])){$bddComite=$_GET['bddComite'];} 
//if (isset($_GET['ancre'])){$ancre=$_GET['ancre'];} 
/*
echo $comite;echo "<br />";
echo $champ;echo "<br />";
echo $bddComite;echo "<br />";
*/
require '../resultats/fonctions.php';
require 'fonctions.php';
require "../Phpleague/php".$bddComite."/consult/fonctions_matchs.php";
require "../Phpleague/php".$bddComite."/lang/lang_fr.php";
require '../fichierConfig.php';


 $phpcomite_divisions= "php".''.$bddComite.''."_divisions";
 $id=$champ - 1;
 include("../saison.php");

		
require ("../connect/connexion1.php");
		
division($champ, $bdd);

?>
<!DOCTYPE html>
<head> 
<title>Resultats et classement</title>
<link rel="stylesheet" type="text/css" href="menu_smart2.css">  
<link type="text/css" rel="stylesheet" href="10.css"> 
<link type="text/css" rel="stylesheet" href="paramTiroir.css">
<link type="text/css" rel="stylesheet" href="../Phpleague/<?php echo "php".$bddComite;?>/league.css"/>
<meta name="description" 
content="Resultat, classement, stats et infos de la poule nom de la poule nom de la competition">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Francaise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="All">
<meta name=viewport content="width=device-width, initial-scale=1">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
</head>

<body bgcolor="#CCCCCC">
  <div class="fixed-header">
    <div class="container">
	  <table width="99%" border="1">
		<tr> 
	      <td width= "5%" class="h22" height="20"><a href="sommaire.php"><img src="../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
	      <td width= "95%" class="h22" height="20"> France Finales Rugby </td>
		</tr>
		<tr> 
		  <td colspan="2" class="h12"> 
			<?php 
			//affichage du type de championnat
			//	et de la division
			nomLigue2($bddComite, $champ, $bdd);
			echo $ligne1."<br />".$ligne2;
			?>
	  </td>
	</tr>
</table>
	<table width="100%" border="0">
	<tr>
<td >

<?php
    echo "<br/>";	

$champLigue = substr($champ,0,2)*10;
$champDiv = substr($champ,-3);

if ($bddComite=="pro"  OR $bddComite=="fed3NE"   )
{ 
	// Affichage de bandeaux Champ de France et modalités de qualif
	require ("lienPhaseFinaleFrance.php");
}	
else
{
	require ("../connect/connexion2.php"); 
	require ("lienPhaseFinale.php");
}
?>
</td>
	</tr>
	</table>
<?php
echo "<br/>";
//include("texte_defilant.htm");

if ($bddComite=="ab" or $bddComite=="au" or $bddComite=="ca")
	require ("menus/menuARA.php");	
elseif ($bddComite=="pro" and ($champ==990140 or $champ == 990240))
	require ("menus/menuFed1.php");
elseif ( $bddComite=="pro" and ($champ == 990150 or $champ == 990250 ))
	require ("menus/menuFed2.php");
elseif ($bddComite=="fed3NE")  {
	require ("menus/menuFed3.php");
    
	require ("sommaireParticulier.php");
}
//elseif ($comite=="fem")
//	require ("menus/menuFem.php");	
//else
//	require ("menus/menuA.php");
	
	?>
<hr />
	
  </div>
</div>
	
	<!-- fin entete figee -------->
	
	 
<div class="container">	
<?php

 if ($bddComite=="pro")
{
echo "</br>";
}
elseif ($bddComite=="f1" or $bddComite=="fed2" or $bddComite=="fed3NE")
{
echo "</br>";
}

if ($bddComite=="fed3NE" OR $bddComite=="pro")
{
echo "<br /><br /><br /></br /><br /></br /><br /></br /></br /><br /><br /><br />";		
}
elseif ($bddComite=="ab" OR $bddComite=="au" OR $bddComite=="ca")
{
echo "<br><br><br><br><br><br><br><br></br><br><br>";	
}
else
{
echo '<br></br><br><br>';	
}


require ("../connect/connexion6.php"); 	

divisionPlusPoule($bddComite, $champ, $bdd);

//------- Cas comite PRO fed 1, 2, 3 fem----------

$nbreChamp = 1;


if ($bddComite =="pro" OR $bddComite == "fed3NE")
{
	$phpComite = "php".$bddComite;	  
	$finChamp=	$champ+$max;
//	if (substr($champ,-1)==0)
//	$champ=$champ+1;
	
	// Divisions pros (top14, Pro D2, Nationale 1 et 2)
	if ($champ == 990110)
//	{$tabLigue = array(990110, 990120, 990130, 990135, 990136);}
		$tabLigue = $tableau110;
	// Fédérale 1
	elseif ($champ== 990140)
	{$tabLigue = array(990141, 990142, 990143, 990144);}
	elseif ($champ== 990240)
	{$tabLigue = array(990241, 990242, 990243, 990244);}

	// Fédérale 2
	elseif ($champ== 990150)
	{$tabLigue = array(990151, 990152, 990153, 990154, 990155, 990156, 990157, 990158);}
	elseif ($champ== 990250)
	{$tabLigue = array(990251, 990252, 990253, 990254, 990255, 990256, 990257, 990258);}

	// Fédérale 3
	elseif ($champ == 991161 OR $champ == 992161)
	{$tabLigue = array(	991161, 991162, 991163, 991164, 991165, 991166, 991167, 991168 ,991169, 
						992161, 992162, 992163, 992164, 992165, 992166, 992167, 992168 ,992169);}
	elseif ($champ == 991261 OR $champ == 992261)
	{$tabLigue = array(	991261, 991262, 991263, 991264, 991265, 991266, 991267, 991268 ,991269,  
						992261, 992262, 992263, 992264, 992265, 992266, 992267, 992268 ,992269);}
	
	// Féminines
	elseif ($champ == 816216)
	{$tabLigue = array(816281, 816282, 816285, 816291, 816292, 816293, 816294);}
	
	 
	
	foreach ($tabLigue as $champ)
	{

	
	//echo "champ : ".$champ;
	//Traitement du numéro des poules
	if (substr($champ,-1)==0)
	{	
		$poule1 = substr($champ,-1);
		$poule = $poule1 + 10;
	}
	else
		$poule = substr($champ,-1);


		//echo "poule 1 ".$poule;
	// traitement des poules de 10 à 20
	$pref = 9;
	$pouleGS = $pref + $poule;	
	
	// définiton de l'ancre -->

	$ancre = substr($champ,-1);
				$pref = 9;
				$ancreGS = $pref + $ancre;		
	
	if  ($champ >= 992161 and $champ < 992170) $ancre = intval($ancreGS);
	elseif ($champ >= 992261 and $champ < 992270) $ancre = intval($ancreGS);
	else
	$ancre = substr($champ,-1);
		
	//if ($champ == 991161 or $champ == 991261 or $champ == 992161 or $champ == 992261) 
	//$ancre = $ancre +9;
	//echo "champ : ".$champ;
	//echo "<br />";
	//echo "ancre : ".$ancre;	
	
	?>
		
		<a name="<?php echo $ancre ; ?>"></a>
	
		<table width="90%" border="1" align="center">
		  <tr> 
		    <td class="titre">
		      <?php 
				
				if ($champ == 990110) echo "TOP 14"; 
				elseif ($champ == 990120) echo "Pro D2";
				elseif  ($champ == 990130) echo "Nationale";
				elseif  ($champ == 990135) echo "Nationale 2 - Poule 1";
				elseif  ($champ == 990136) echo "Nationale 2 - Poule 2";
				elseif  ($champ == 816281 or $champ == 816282) echo "Elite 1  - Poule ".substr($champ,-1);
				elseif  ($champ == 816285) echo "Elite 2";
				//elseif  ($champ >= 816291 and $champ < 816295) echo "F&eacute;d&eacute;rale 1 - Poule ".substr($champ,-1);
				elseif  ($champ >= 992161 and $champ < 992169) echo "Poule ".intval($pouleGS);
				elseif  ($champ >= 992261 and $champ < 992269) echo "Poule ".intval($pouleGS);
				else  echo "Poule ".intval($poule);?>
		   </td>
		  </tr>
		</table>
	 <br />
	  <div align="center"> 
	
	  <?php
	 
	  
	  //echo $nbreChamp;
	  AffichageLogos($champ, $phpComite, true, $bdd); ?>
	  </div>
	  <?php	 
	 aff_journee($champ, $bdd);
	 maj($champ, true, 'php'.$comite, $bdd);
	 clmnt($champ, true, $bdd);
	 journeesReportees($phpComite, $champ, $bdd);  
	 perequation($phpComite, $champ, $bdd);?> 
	 <br /> 
	 <table width="90%" border="0" align="center">
	    <tr border="0"> 
         <td border="0" align="center" bgcolor="#FFFF00" ><a href="calendrier.php?champ=<?php echo $champ;?>&comite=<?php echo $comite;?>&bddComite=<?php echo $bddComite;?>" target="_blank"><font color="#FF0000"><font size="4"><b>-- 
		     Calendrier complet --</font></font></a></td>
       </tr>
	 </table>
	  
	  <?php aff_journeeSupp($champ,  $bdd);
    
	 include("../pub/pub25.php"); 
	
	
	echo "<hr />"."<hr />";
    echo "<br />"; 
  
    
	$nbreChamp = $nbreChamp + 1 ;
 }
}
//************************************  
//------  ligues (ARA, NAQ, OCC)------
//************************************
elseif ( $bddComite == "au" OR $bddComite == "ca" OR $bddComite == "ab")
{
 
	if ( substr($champ,-3) != 271)
	{
		$phpComite = "php".$bddComite;	  
		
		if (substr($champ,-1)==0)
		$champ=$champ+1;

		if (is_numeric($champ) && is_numeric($max)){
			// cas d'une division avec 10 poules (saison 2022-2023 ARA R�gionale 3)
			if ($champ==100191)
				$finChamp = 100201;
			else	
				$finChamp = $champ+$max;
		}
	//echo "champ :".$champ;echo "<br/>";
	//echo "max :".$max;echo "<br/>";
	//echo "finchamp :".$finChamp;
	echo "<br/>";
 
		for ($i=$champ; $i < $finChamp; $i++)
		{
		divisionPlusPoule($bddComite, $champ, $bdd);		
		// echo "poule : ".$poule; echo "champ : ".$i; 
		?>
	 
		<table width="90%" border="1" align="center">
		<tr> 
		<td class="titre"><?php echo $poule;?></td>
		</tr>
		</table>
	 
		<br />
		<div align="center">
		<?php 
	/*	
	if ($comite == "au" and $champ > 100190 and $champ < 100230  )
	{
		if ($champ < '100210')	
		$newChamp = '100691'; else $newChamp ='100711';
	
	echo "<font size=\"2\">"."<center>"."<b>"."<a href=\"171.php?champ=$newChamp&comite=au&bddComite=au\">Consulter la phase pr&eacute;c&eacute;dente</a>"."</b>"."</center>"."</font>";		
	}
	*/
	echo "<br />";
		
		//echo $nbreChamp;
		AffichageLogos($champ, $phpComite, true, $bdd);?>
		</div>
			<?php	 
		aff_journee($champ, $bdd);
		maj($champ, true, 'php'.$comite, $bdd);
		clmnt($champ, true, $bdd);
		journeesReportees($phpComite, $champ, $bdd); 
		perequation($phpComite, $champ, $bdd);		?>
	   <br />
		<table width="90%" border="0" align="center">
	    <tr border="0"> 
         <td border="0" align="center" bgcolor="#FFFF00" ><a href="calendrier.php?champ=<?php echo $champ;?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>" target="_blank"><font color="#FF0000"><font size="4"><b>-- 
		     Calendrier complet --</font></font></a></td>
		</tr>
		</table>
	  
		<?php aff_journeeSupp($champ,  $bdd);
    
		include("../pub/pub25.php"); 
		echo "<hr />"."<hr />";
		echo "<br />"; 
		$champ = $champ +1;
		$nbreChamp = $nbreChamp + 1;
		}
	}
	else
		{
			//Traitement des �quipes r�serves (affichage ind�pendants des equipes Unes ";
			//ARA
			if ($champ == 100271)
			{$tabLigue = array(100271, 100272, 100273, 100274, 109181, 109182, 109183, 109184);}
      
			//NAQ
			elseif ($champ == 190271)
			{$tabLigue = array(190271, 190272, 190273, 190274, 199181, 199182, 199183, 199184);}
   
			elseif ($champ == 200271)
			//OCC
			{$tabLigue = array(200271, 200272, 200273, 200274);}
  
			elseif ($champ == 209181 )
			//OCC
			{$tabLigue = array(209181, 209182, 209183, 209184, 209185, 209186, 209187);}
			
			foreach ($tabLigue as $champ)
			{
				echo "<br/>";
				//echo $champ;
				//  echo "champ apres else :".$champ;
				  require ("../connect/connexion6.php");
				  divisionPlusPoule($bddComite, $champ, $bdd); 
				 ?>
				 <table width="90%" border="1" align="center">
				  <tr> 
				   <td class="titre"><?php echo $poule;?></td>
				  </tr>
				 </table>
				 <br />
				  <div align="center"> 
				  <?php  
				 // echo $nbreChamp ;
				  AffichageLogos($champ, "php".$bddComite, true, $bdd);
					
				  aff_journee($champ, $bdd);
				  maj($champ,true, 'php'.$comite, $bdd);
				  clmnt($champ, true, $bdd);
				  
				  journeesReportees($phpComite, $champ, $bdd);  ?>
				<br />
				  <table width="90%" border="" align="center">
					<tr> 
					 <td align="center" bgcolor="#FFFF00" class="calendrier"><a href="calendrier.php?champ=<?php echo $champ;?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>" target="_blank"><font color="#FF0000"><font size="4"><b>-- 
						 Calendrier complet --</font></font></a></td>
				   </tr>
				 </table>
				  
				  <?php aff_journeeSupp($champ,  $bdd);
				
				 include("../pub/pub25.php"); ?>
				 <hr /><hr />
				 <br /> 
			  
				 <?php
			 $nbreChamp = $nbreChamp + 1;
			}
			
		}
}   
 else
 { 

 // Autre Ligues
/*
  if ($comite == "pl")
   {
		//Bourgogne Franche Comt�
		if ($champ == 110171)
		{$tabLigue = array(110171, 110181, 110201, 110211, 110221, 110271);}
      
		//BREtagne
		elseif ($champ == 120171)
		{$tabLigue = array(120171, 120181, 120191, 120192, 120211, 120271, 129212);}
   
		elseif ($champ == 130171)
		//Centre Val de Loire
		{$tabLigue = array(130171, 130172, 130191, 130211, 130212, 130271, 130272);}
  
		//Hauts De France
		elseif ($champ == 160171)
		{$tabLigue = array(160171, 160181, 160191, 160201, 160271, 169181);}
  
		//Pays De la Loire
		elseif ($champ == 210171)
		{$tabLigue = array(210171, 210191, 210211, 210271);}
	} 
	elseif ($comite == "idf")
	{
		//Grand ESt
		if ($champ == 150171)
		{$tabLigue = array(150171, 150181, 150182, 150211, 150212, 150271);}
  
		//Ile De France
		elseif ($champ == 170000)
		{$tabLigue = array(170171, 170172, 170181, 170182, 170191, 170192, 170201, 170202, 170211, 170212, 170213, 170271, 170272, 179181 ,179182);}
  
		// NORmandie
		elseif ($champ == 116171)
		{$tabLigue = array(116171, 116181, 116191, 116211, 116271);}
   
		// Provence alpes Cotes d'Azur
		elseif ($champ == 220171)
		{$tabLigue = array(220171, 220172, 220173, 220174, 220175, 220176, 220177, 
		                   220191, 220192, 220193, 220194, 220195,
						   220271, 220272, 220273, 220274, 220275, 220276, 220277
						   );}
   
	}
*/
  listePoule ($champ, $bddComite, $bdd);

  foreach ($tabDivisions as $champ)
    {
	   echo "<br/>";
	 // echo "champ :".$champ;
	 //  echo "champ apres else :".$champ;
	  require ("../connect/connexion6.php");
	  divisionPlusPoule($bddComite, $champ, $bdd); 
     ?>
	 <table width="90%" border="1" align="center">
	  <tr> 
       <td class="titre"><?php echo $poule;?></td>
      </tr>
	 </table>
	 <br />
	  <div align="center"> 
	  <?php 
	  //echo $nbreChamp ;
	  AffichageLogos($champ, "php".$bddComite, true, $bdd);?></div>
		<?php
		
	  aff_journee($champ, $bdd);
	  maj($champ,true, 'php'.$comite, $bdd);
	  clmnt($champ, true, $bdd);
	  $phpComite = "php".$bddComite;
	  journeesReportees($phpComite, $champ, $bdd);
	  perequation($phpComite, $champ, $bdd);
	 ?> 
	   <br />
	  <table width="90%" border="" align="center">
	    <tr> 
         <td align="center" bgcolor="#FFFF00" class="calendrier"><a href="calendrier.php?champ=<?php echo $champ;?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>" target="_blank"><font color="#FF0000"><font size="4"><b>-- 
		     Calendrier complet --</font></font></a></td>
       </tr>
	 </table>
	  
	  <?php aff_journeeSupp($champ,  $bdd);
    
	 include("../pub/pub25.php"); ?>
	 <hr /><hr />
     <br /> 
  
     <?php
	 $nbreChamp = $nbreChamp + 1;
	}
 }
/*
  <!--
  <a href="prono/prono.php">test</a>
  -->
*/  
  echo "<br>";	
  include("infos_centre.php");
  echo "<br />"."<br />";
  require ("bas.php");
  echo "<hr />";
  include("../pub/pub_displayCarre.php");  
  ?>
   </div>
 </body>
</html>
