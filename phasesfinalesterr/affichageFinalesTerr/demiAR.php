<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
</head>


<?php

if (isset ($_GET['id'])) $id = $_GET['id']; else $annee='-';
if (isset ($champion)) $champion = 12 ; else $champion='9';


//$bdcomiteClub=($comite.''."_clubs");
//$bdcomite_pfterr_e=($comite.''."_pfterr_e");
//$bdcomite_pfterr_r=($comite.''."_pfterr_r");


//$anneemoins = $annee-1;
//$anneeplus = $annee+1;
//require ('../../connect1/connection2.php');
require ("../fonctionspfterrESDL.php");


if ($page=="HPHS1")
		{
		$nom1="Honneur";
		$nom2="Promotion Honneur";
		$nom3="1re S&eacute;rie";
		$division=170;
		}
elseif ($page=="S2S3S4")
		{
		$nom1="2me S&eacute;rie";
		$nom2="3me S&eacute;rie";
		$nom3="4me S&eacute;rie";
		$division=200;
		}
elseif ($page=="RRPHR1")
		{
		$nom1="R&eacute;serve";
		$nom2="R&eacute;serve Promotion";
		$nom3="R&eacute;serve 1re S&eacute;rie";
		$division=270;
		}
?>

<br />
<div id="palmares2" > Palmar&egrave;s 
  <?php echo $annee;?>
</div>

<?php $division=$division;
//require ('../../connect1/connection2.php');
demiAR ($bdcomiteClub, $division, $annee, $bdd)
?>

<p class="divisionDemi"> 
	<?php echo $nom1; ?>
</p>
	
<p class="ptsGA"> 
	<?php  echo "Pts GA" ; ?>
</p>
	
<p class="demi1AR"> 
	<?php  echo $clubA2001 ; ?>
</p>
	
<p class="demiScore1AR"> 
	 <?php  echo $Pts2001 ; ?>
</p>
	
<p class="demiScore1AR2"> 
	<?php  echo $GA4001 ; ?>
</p>

 <p class="demi2AR"> 
  <?php  echo $clubA2002 ; ?>
</p>

<p class="demiScore2AR"> 
  <?php  echo $Pts2002 ; ?>
</p>

<p class="demiScore2AR2"> 
  <?php  echo $GA4002 ; ?>
</p

><p class="demi5"> 
  <?php  echo $clubA1001 ; ?>
</p>

<p class="demiScore5"> 
  <?php  echo $A1001; ?>
</p>

<p class="demiChamplogo"> 
	<?php logo ($bdcomiteClub, $champion, $bdd);?>
</p>

<p class="demiChampnom"> 
  <?php  echo $champion;   ?>
</p>

<p class="demi3AR"> 
  <?php  echo $clubA2003 ; ?>
</p>

<p class="demiScore3AR"> 
  <?php  echo $Pts2003 ; ?>
</p>

<p class="demiScore3AR2"> 
  <?php  echo $GA4003 ; ?>
</p>

<p class="demi6"> 
  <?php  echo $clubA1002 ; ?>
</p>

<p class="demiScore6"> 
  <?php  echo $A1002 ; ?>
</p>

<p class="demi4AR"> 
  <?php  echo $clubA2004 ; ?>
</p>

<p class="demiScore4AR"> 
  <?php  echo $Pts2004 ; ?>
</p>

<p class="demiScore4AR2"> 
  <?php  echo $GA4004 ; ?>
</p>



<hr />

<?php 
	
if ($page=="RRPHR1") 
	$division=$division+8910; 
else 
	$division=$division+10;
demiAR ($bdcomiteClub, $division, $annee, $bdd)
?>

<p class="divisionDemi"> 
	<?php echo $nom2; ?>
</p>
	
<p class="ptsGA"> 
	<?php  echo " Pts   GA" ; ?>
</p>
	
<p class="demi1AR"> 
	<?php  echo $clubA2001 ; ?>
</p>
	
<p class="demiScore1AR"> 
	<?php  echo $Pts2001 ; ?>
</p>
	
<p class="demiScore1AR2"> 
	<?php  echo $GA4001 ; ?>
</p>
	
<p class="demi2AR"> 
	<?php  echo $clubA2002 ; ?>
</p>
	
<p class="demiScore2AR"> 
	<?php  echo $Pts2002 ; ?>
</p>
	
<p class="demiScore2AR2"> 
	<?php  echo $GA4002 ; ?>
</p>
	
<p class="demi5"> 
	<?php  echo $clubA1001 ; ?>
</p>
	
<p class="demiScore5"> 
	<?php  echo $A1001; ?>
</p>
	
<p class="demiChamplogo"> 
	<?php logo ($bdcomiteClub, $champion, $bdd);?>
</p>
	
<p class="demiChampnom"> 
	<?php  echo $champion;   ?>
</p>
	
<p class="demi3AR"> 
	<?php  echo $clubA2003 ; ?>
</p>
	
<p class="demiScore3AR"> 
	<?php  echo $Pts2003 ; ?>
</p>
	
<p class="demiScore3AR2"> 
	<?php  echo $GA4003 ; ?>
</p>
	
<p class="demi6"> 
	<?php  echo $clubA1002 ; ?>
</p>
	
<p class="demiScore6"> 
	<?php  echo $A1002 ; ?>
</p>
	
<p class="demi4AR"> 
	<?php  echo $clubA2004 ; ?>
</p>
	
<p class="demiScore4AR"> 
	<?php  echo $Pts2004 ; ?>
</p>
	
<p class="demiScore4AR2"> 
	<?php  echo $GA4004 ; ?>
</p>

<hr />

<?php 
$division=$division+10;
demiAR ($bdcomiteClub, $division, $annee, $bdd)
?>
		
<p class="divisionDemi"> 
	<?php echo $nom3; ?>
</p>
	
<p class="ptsGA"> 
	<?php  echo " Pts   GA" ; ?>
</p>
	
<p class="demi1AR"> 
	<?php  echo $clubA2001 ; ?>
</p>
	
<p class="demiScore1AR"> 
	<?php  echo $Pts2001 ; ?>
</p>
	
<p class="demiScore1AR2"> 
	<?php  echo $GA4001 ; ?>
</p>

<p class="demi2AR"> 
  <?php  echo $clubA2002 ; ?>
</p>

<p class="demiScore2AR"> 
  <?php  echo $Pts2002 ; ?>
</p>

<p class="demiScore2AR2"> 
  <?php  echo $GA4002 ; ?>
</p

><p class="demi5"> 
  <?php  echo $clubA1001 ; ?>
</p>

<p class="demiScore5"> 
  <?php  echo $A1001; ?>
</p>

<p class="demiChamplogo"> 
	<?php logo ($bdcomiteClub, $champion, $bdd); ?>
</p>

<p class="demiChampnom"> 
  <?php  echo $champion;   ?>
</p>

<p class="demi3AR"> 
  <?php  echo $clubA2003 ; ?>
</p>

<p class="demiScore3AR"> 
  <?php  echo $Pts2003 ; ?>
</p>

<p class="demiScore3AR2"> 
  <?php  echo $GA4003 ; ?>
</p>

<p class="demi6"> 
  <?php  echo $clubA1002 ; ?>
</p>

<p class="demiScore6"> 
  <?php  echo $A1002 ; ?>
</p>

<p class="demi4AR"> 
  <?php  echo $clubA2004 ; ?>
</p>

<p class="demiScore4AR"> 
  <?php  echo $Pts2004 ; ?>
</p>
<p class="demiScore4AR2"> 
  <?php  echo $GA4004 ; ?>
</p>

<hr />

<?php 	require("../../pub/pub1.php"); ?>

