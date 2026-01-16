<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
</head>


<?php
$bdcomiteClub=($comite.''."_clubs");
require ("../../connect/connexion6.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");


if (isset($clubA1001)) $clubA1001 = $clubA1001; else $clubA1001 ="-";
if (isset($clubA1002)) $clubA1002 = $clubA1002; else $clubA1002 ="-";
if (isset($champion)) $champion = $champion; else $champion ="-";

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
		$division= $codeLigue + 270;	
		}
		elseif ($page == "FEM")
		{
			$nom1="Fédérale 2";
			$nom2="Régionale à X";
			$nom3="-";
		$division = $codeLigue + 295;
		}
?>

<br />
<div id="palmares2" > Palmarès <?php echo $annee;?></div>

<?php
	$division=$division;
	demi2019 ($comite, $division, $annee, $bdd);
	champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
	traitementScores (2001,2004, $bdd);
	traitementScores (1001,1002, $bdd);
?>
		
<p class="divisionDemi"><?php echo $nom1; ?></p>

<!-- Demi 1 -->
<p class="demi1"> <?php echo $clubA2001 ;?></p>
<p class="demiScore1"><?php echo $A2001 ;?></p>

<!-- Demi 2 -->
<p class="demi2"><?php echo $clubA2002 ;?></p>
<p class="demiScore2"><?php echo $A2002 ;?></p>

<!-- Finale 1 -->
<p class="demi5"><?php echo $clubA1001 ;?></p>
<p class="demiScore5"><?php echo $A1001;?></p>

<!-- Logo + nom du champion -->
<p class="demiChamplogo"><img src="<?php echo $champLogo; ?>" border="0" height="100" width="100"></p>
<p class="demiChampnom"><?php echo $champion; ?></p>

<!-- Demi 3 -->
<p class="demi3"><?php echo $clubA2003 ;?></p>
<p class="demiScore3"><?php echo $A2003 ;?></p>

<!-- Finale 2 -->
<p class="demi6"><?php echo $clubA1002 ;?></p>
<p class="demiScore6"><?php echo $A1002 ;?></p>

<!-- Demi 4 -->
<p class="demi4"><?php echo $clubA2004 ;?></p>
<p class="demiScore4"><?php echo $A2004 ;?></p>

<!--***********************************************************************
***************************************************************************
-->

<?php 		
	$A2001 ="-";$A2002 ="-";$A2003 ="-";$A2004 ="-";
	if ($page == "RRPHR1") $division=$division+8910; 
	elseif ($page == "FEM") $division = $division + 5;
	else $division=$division+10;

	demi2019 ($comite, $division, $annee, $bdd);				
	champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
	traitementScores (2001,2004, $bdd);
?>
<hr />

<p class="divisionDemi"><?php echo $nom2; ?></p>
	
<!-- Demi 1 -->
<p class="demi1"> <?php echo $clubA2001 ;?></p>
<p class="demiScore1"><?php echo $A2001 ;?></p>

<!-- Demi 2 -->
<p class="demi2"><?php echo $clubA2002 ;?></p>
<p class="demiScore2"><?php echo $A2002 ;?></p>

<!-- Finale 1 -->
<p class="demi5"><?php echo $clubA1001 ;?></p>
<p class="demiScore5"><?php echo $A1001;?></p>

<!-- Logo + nom du champion -->
<p class="demiChamplogo"><img src="<?php echo $champLogo; ?>" border="0" height="100" width="100"></p>
<p class="demiChampnom"><?php echo $champion; ?></p>

<!-- Demi 3 -->
<p class="demi3"><?php echo $clubA2003 ;?></p>
<p class="demiScore3"><?php echo $A2003 ;?></p>

<!-- Finale 2 -->
<p class="demi6"><?php echo $clubA1002 ;?></p>
<p class="demiScore6"><?php echo $A1002 ;?></p>

<!-- Demi 4 -->
<p class="demi4"><?php echo $clubA2004 ;?></p>
<p class="demiScore4"><?php echo $A2004 ;?></p>
<!--***********************************************************
*************************************************************
-->
<?php 
	$division = $division + 10;
	$A2001 ="-";$A2002 ="-";$A2003 ="-";$A2004 ="-";	
	demi2019 ($comite, $division, $annee, $bdd);
	champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
	traitementScores (2001,2004, $bdd);
?>


<hr />

<?php 

echo "page demi :".$page;
if ($page == "HPHS1"  ) { 
	?>

<p class="divisionDemi"><?php echo $nom3; ?></p>
	
<!-- Demi 1 -->
<p class="demi1"><?php echo $clubA2001 ;?></p>
<p class="demiScore1"><?php echo $A2001 ;?></p>

<!-- Demi 2 -->
<p class="demi2"><?php echo $clubA2002 ;?></p>
<p class="demiScore2"><?php echo $A2002 ;?></p>

<!-- Finale 1 -->
<p class="demi5"><?php echo $clubA1001 ;?></p>
<p class="demiScore5"><?php echo $A1001;?></p>

<!-- Logo + nom du champion -->
<p class="demiChamplogo"><img src="<?php echo $champLogo; ?>" border="0" height="100" width="100"></p>
<p class="demiChampnom"><?php echo $champion; ?></p>

<!-- Demi 3 -->
<p class="demi3"><?php echo $clubA2003 ;?></p>
<p class="demiScore3"><?php echo $A2003 ;?></p>

<!-- Finale 2 -->
<p class="demi6"><?php echo $clubA1002 ;?></p>
<p class="demiScore6"><?php echo $A1002 ;?></p>

<!-- Demi 4 -->
<p class="demi4"><?php echo $clubA2004 ;?></p>
<p class="demiScore4"><?php echo $A2004 ;?></p>

<hr />

<?php
}
?>

