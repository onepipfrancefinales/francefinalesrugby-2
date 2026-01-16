<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
</head>


<?php 

if (isset ($_GET['id'])) $id = $_GET['id']; else $id='-'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-'; 
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 

$bdcomiteClub="php".''.$comite.''."_clubs";

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
		$division = $codeLigue + 200;
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
		$division = $codeLigue + 270;	
		}
		elseif ($page=="FEM")
		{
		$nom1="Fédérale 2";
		$nom2="Régionale à X";
		$nom3="-";
	
		$division = $codeLigue + 295;	
		}
?>

<br>
<br>
<div id="palmares" > Palmarès <?php echo $annee;?></div>
<br>
<br><br>
 <?php 
// Affiche 1

finale2019 ($comite, $division, $annee, $bdd); 	
champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
traitementScores (1001,1002, $bdd);
?>

<p class="division"><?php echo $nom1; ?></p>
<p class="finale1"><?php echo $clubA1001 ; ?></p><p class="score1"><?php  echo $A1001 ; ?></p> 
<p class="finale2"><?php echo $clubA1002 ; ?></p><p class="score2"><?php  echo $A1002 ; ?></p>

<p class="demiChamplogo"><img src="<?php echo $champLogo;  ?>" border="0" height="100" width="100"></p>
<p class="champnom"><?php echo $champion; ?></p>

 <?php 
 // Affiche 2
if ($page=="RRPHR1") $division=$division + 8910; 
elseif ($page=="FEM") $division= $division + 5;
else $division=$division + 10;
finale2019 ($comite, $division, $annee, $bdd); 
champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
traitementScores (1001,1002, $bdd);
?>

<br><br><br><br><br>	
<p class="division"> <?php echo $nom2; ?></p>
<p class="finale1"><?php echo $clubA1001 ; ?></p><p class="score1"><?php  echo $A1001 ; ?></p>
<p class="finale2"><?php echo $clubA1002 ; ?></p><p class="score2"><?php  echo $A1002 ; ?></p>

<p class="demiChamplogo"><img src="<?php echo $champLogo;  ?>"border="0" height="100" width="100"></p>
<p class="champnom"><?php echo $champion; ?></p>
<br><br><br><br><br>

<?php 
// Affiche 3

if ($page == "HPHS1" ){

$division=$division + 10;
//echo $division;echo "<br/>";
//echo substr($division,-4);
finale2019 ($comite, $division, $annee, $bdd); 
champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
traitementScores (1001,1002, $bdd);
?>

<?php 
//if ($annee < 2023 and substr($division,-4) == 9190)
//{
?>
<p class="division"><?php echo $nom3; ?></p>	
<p class="finale1"><?php echo $clubA1001 ; ?></p><p class="score1"><?php  echo $A1001; ?></p>
<p class="finale2"><?php echo $clubA1002 ; ?></p><p class="score2"><?php  echo $A1002 ; ?></p>

<p class="demiChamplogo"><img src="<?php echo $champLogo; ?>"border="0" height="100" width="100" ></p>
<p class="champnom"><?php echo $champion; ?></p>
<?php
//}
?>
<br><br><br>
<hr />

<?php

}
?>

