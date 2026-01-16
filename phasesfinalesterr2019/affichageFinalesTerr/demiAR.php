<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
</head>


<?php
//echo "DAR";
if (isset ($_GET['id'])) $id = $_GET['id']; else $annee='-';
if (isset ($champion)) $champion = 12 ; else $champion='-';

$bdcomiteClub=($comite.''."_clubs");
$bdcomite_pfterr_e=($comite.''."_pfterr_e");
$bdcomite_pfterr_r=($comite.''."_pfterr_r");

//$anneemoins = $annee-1;
//$anneeplus = $annee+1;
require ("../../connect/connexion6.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");

if ($page=="HPHS1")
		{
		if ($annee < 2023){	
		$nom1="Honneur";
		$nom2="Promotion Honneur";
		$nom3="1re Série";
		}
		else{
		$nom1="Régionale 1";
		$nom2="Régionale 2";
		$nom3="Régionale 3";
		}
		$division = $codeLigue + 170;
		}
elseif ($page=="S2S3S4")
		{
		$nom1="2me Série";
		$nom2="3me Série";
		$nom3="4me Série";
		$division= $codeLigue + 200;
		}
elseif ($page=="RRPHR1")
		{
		if ($annee < 2023){	
		$nom1="Réserve";
		$nom2="Réserve Promotion";
		$nom3="Réserve 1re Série";
		}
		else{
		$nom1="Rés régionale 1";
		$nom2="Rés régionale 2";
		$nom3="-";
		}
		}		
?>

<br />
<div id="palmares2" > Palmarès <?php echo $annee;?></div>
  


<?php $division=$division;
demiAR2019 ($comite, $division, $annee, $bdd);
?>

<!-- nom de la comp�tition -->
<p class="divisionDemi"><?php echo $nom1;?></p>

<!-- Affichage Pts et GA -->	
<p class="ptsGA"><?php echo " Pts GA" ;?></p>

<!-- Demi 1 Aller + Retour -->	
<p class="demi1AR"><?php echo $clubA2001 ;?></p>
<p class="demiScore1AR"><?php echo $Pts2001 ;?></p>	
<p class="demiScore1AR2"><?php echo $GA4001 ;?></p>

<!-- Demi 2 Aller + Retour -->
<p class="demi2AR"><?php echo $clubA2002 ;?></p>	
<p class="demiScore2AR"><?php echo $Pts2002 ;?></p>
<p class="demiScore2AR2"><?php echo $GA4002 ;?></p>

<!-- Finale 1 -->		
<p class="demi5"><?php echo $clubA1001 ;?></p>
<p class="demiScore5"><?php echo $A1001 ;?></p>
	
<!-- Logo + nom du champion -->
<p class="demiChamplogo"><img src="<?php echo $champLogo;  ?>"border="0" height="100" width="100" ></p>
<p class="demiChampnom"><?php echo $champion ;?></p>

<!-- Demi 3 Aller + Retour -->	
<p class="demi3AR"><?php echo $clubA2003 ;?></p>
<p class="demiScore3AR"><?php echo $Pts2003 ;?></p>
<p class="demiScore3AR2"><?php echo $GA4003 ;?></p>

<!-- Finale 2 -->	
<p class="demi6"><?php echo $clubA1002 ;?></p>
<p class="demiScore6"><?php echo $A1002 ;?></p>

<!-- Demi 4 Aller + Retour -->
<p class="demi4AR"><?php echo $clubA2004 ;?></p>	
<p class="demiScore4AR"><?php echo $Pts2004 ;?></p>	
<p class="demiScore4AR2"><?php echo $GA4004 ;?></p>


<hr />

<?php 
	if ($page=="RRPHR1") 	$division=$division+8910; else 	$division=$division+10;
	$clubA1001 = "-";$clubA1002 = "-";	
	demiAR2019 ($comite, $division, $annee, $bdd)
?>

<p class="divisionDemi"><?php echo $nom2;?></p>	

<!-- Affichage Pts et GA -->	
<p class="ptsGA"><?php echo " Pts GA" ;?></p>

<!-- Demi 1 Aller + Retour -->	
<p class="demi1AR"><?php echo $clubA2001 ;?></p>
<p class="demiScore1AR"><?php echo $Pts2001 ;?></p>	
<p class="demiScore1AR2"><?php echo $GA4001 ;?></p>

<!-- Demi 2 Aller + Retour -->
<p class="demi2AR"><?php echo $clubA2002 ;?></p>	
<p class="demiScore2AR"><?php echo $Pts2002 ;?></p>
<p class="demiScore2AR2"><?php echo $GA4002 ;?></p>

<!-- Finale 1 -->		
<p class="demi5"><?php echo $clubA1001 ;?></p>
<p class="demiScore5"><?php echo $A1001 ;?></p>
	
<!-- Logo + nom du champion -->
<p class="demiChamplogo"><img src="<?php echo $champLogo;  ?>"border="0" height="100" width="100" ></p>
<p class="demiChampnom"><?php echo $champion;?></p>

<!-- Demi 3 Aller + Retour -->	
<p class="demi3AR"><?php echo $clubA2003 ;?></p>
<p class="demiScore3AR"><?php echo $Pts2003 ;?></p>
<p class="demiScore3AR2"><?php echo $GA4003 ;?></p>

<!-- Finale 2 -->	
<p class="demi6"><?php echo $clubA1002 ;?></p>
<p class="demiScore6"><?php echo $A1002 ;?></p>

<!-- Demi 4 Aller + Retour -->
<p class="demi4AR"><?php echo $clubA2004 ;?></p>	
<p class="demiScore4AR"><?php echo $Pts2004 ;?></p>	
<p class="demiScore4AR2"><?php echo $GA4004 ;?></p>

<hr />

<?php 

//echo "page AR :".$page;
//********************************************
	$division=$division+10;
	$clubA1001 = "-";$clubA1002 = "-";
	demiAR2019 ($comite, $division, $annee, $bdd)
?>
		
<p class="divisionDemi"><?php echo $nom3;?></p>	

<!-- Affichage Pts et GA -->	
<p class="ptsGA"><?php echo " Pts GA" ;?></p>
	
<!-- Demi 1 Aller + Retour -->	
<p class="demi1AR"><?php echo $clubA2001 ;?></p>
<p class="demiScore1AR"><?php echo $Pts2001 ;?></p>	
<p class="demiScore1AR2"><?php echo $GA4001 ;?></p>

<!-- Demi 2 Aller + Retour -->
<p class="demi2AR"><?php echo $clubA2002 ;?></p>	
<p class="demiScore2AR"><?php echo $Pts2002 ;?></p>
<p class="demiScore2AR2"><?php echo $GA4002 ;?></p>

<!-- Finale 1 -->		
<p class="demi5"><?php echo $clubA1001 ;?></p>
<p class="demiScore5"><?php echo $A1001;?></p>
	
<!-- Logo + nom du champion -->
<p class="demiChamplogo"><img src="<?php echo $champLogo;?>"border="0" height="100" width="100" ></p>
<p class="demiChampnom"><?php echo $champion;?></p>

<!-- Demi 3 Aller + Retour -->	
<p class="demi3AR"><?php echo $clubA2003 ;?></p>
<p class="demiScore3AR"><?php echo $Pts2003 ;?></p>
<p class="demiScore3AR2"><?php echo $GA4003 ;?></p>

<!-- Finale 2 -->	
<p class="demi6"><?php echo $clubA1002 ;?></p>
<p class="demiScore6"><?php echo $A1002 ;?></p>

<!-- Demi 4 Aller + Retour -->
<p class="demi4AR"><?php echo $clubA2004 ;?></p>	
<p class="demiScore4AR"><?php echo $Pts2004 ;?></p>	
<p class="demiScore4AR2"><?php echo $GA4004 ;?></p>

<hr />
<?php require("../../pub/pub1.php");?>

