<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">


</head>



<?php 

if (isset ($_GET['variable_1'])) $annee = $_GET['variable_1']; else $annee='-';
if (isset ($_GET['id'])) $id = $_GET['id']; else $annee='-';
if (isset ($champion)) $champion = 12 ; else $champion='9';

//$annee=$_GET['variable_1'];
//$id=$_GET['id'];
//$comite=$_GET['comite'];
$comite = "cbl";
$page=$_GET['page'];


$bdcomiteClub=("php".''.$comite.''."_clubs");
$bdcomite_pfterr_e=("php".''.$comite.''."_pfterr_e");
$bdcomite_pfterr_r=("php".''.$comite.''."_pfterr_r");



$anneemoins = $annee-1;
$anneeplus = $annee+1;

require ("../fonctionspfterrESDL.php");


   ?>
   <?php
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

<table >
  <tr > 
    <td class="pub" > 
      <?php //	require("../../pub/pub7.php"); ?>
    </td>
    <td class="chevron" > <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>&variable_1=<?php echo $anneemoins;?>" target="_top" title="Phases finales de la saison <?php echo $anneemoins; ?>">&lt;&lt;</a>nne 
      <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>&variable_1=<?php echo $anneeplus;?>" target="_top" title="Phases finales de la saison <?php echo $anneeplus; ?>">&gt;&gt;</a> 
    </td>
    <td class="pub" > 
      <?php	//require("../../pub/pub8.php"); ?>
    </td>
  </tr>
  <tr >
    <td class="ligneComite" colspan="3" >
      <?php
//	Traitement des comit�s (ab - ld - mpy - r) ==> Ligue Occitanie

	if (($comite == 'ab' or $comite == 'ld' or $comite == 'mpy' or $comite == 'r' )and ($annee < 2109 ))
		{
		include("menuOccitanie.php");
		}
		else
		{
		}
	if ($comite == 'au' or $comite == 'ly' or $comite == 'da' or $comite == 'ap' )
		{
		include("menuAuvergneRhoneAlpes.php");
		}
		else
		{
		}	
		
?>
    </td>
  </tr>
  <tr > 
    <td class="ligneComite" colspan="3" > 
      <?php 	if ($annee > 2018)
				$texte = "r&eacute;gionales de la ligue";
			else
				$texte = "territoriales du comit&eacute;";
				echo "Finales $texte   $annee";
      // echo "Finales $texte  //$comiteNom $annee";
	  ?>
    </td>
  </tr>
</table>
<br><br>
<div id="palmares" > Palmar&egrave;s 
        <?php 	echo $annee;?>
      </div>

 <?php 
	    $division=$division;
		
  		finale ($bdcomiteClub, $division, $annee, $bdd);
   		
       ?>

	<p class="division">  
			<?php echo $nom1; ?>
	</p>
	
	<p class="finale1"> 
	  <?php  echo $clubA1001 ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $A1001 ; ?>
	</p>

	 <p class="finale2"> 
	  <?php  echo $clubA1002 ; ?>
	</p>

	<p class="score2"> 
	  <?php  echo $A1002 ; ?>
	</p>

<p class="champlogo">
<?php // echo "<img src=\"$logo\">"; ?>
</p>
<p class="champnom">
<?php

echo $champion;?>
</p>

 <?php 
	    if ($page=="RRPHR1") 
			$division=$division+8910; 
		else 
			$division=$division+10;
  
  
 
       finale ($bdcomiteClub, $division, $annee, $bdd) ;
 	  ?>
       
<p class="division"> <?php	 echo $nom2; ?></p>
	
	<p class="finale1"> 
	  <?php  echo $clubA1001 ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $A1001 ; ?>
	</p>

 <p class="finale2"> 
  <?php  echo $clubA1002 ; ?>
</p>

<p class="score2"> 
  <?php  echo $A1002 ; ?>
</p>

<p class="champlogo">
<?php //echo "<img src=\"$logo\">"; ?>
</p>
<p class="champnom">
<?php 

echo $champion; ?>
</p>
<br><br><br><br><br>
<?php 
	    $division=$division+10;
		
  	finale ($bdcomiteClub, $division, $annee, $bdd); 
   
       ?>
<p class="division"> 
  <?php echo $nom3; ?>
</p>
	
	<p class="finale1"> 
	  <?php  echo $clubA1001 ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $A1001 ; ?>
	</p>

 <p class="finale2"> 
  <?php  echo $clubA1002 ; ?>
</p>

<p class="score2"> 
  <?php  echo $A1002 ; ?>
</p>

<p class="champlogo">
<?php // echo "<img src=\"$logo\">"; ?>
</p>
<p class="champnom">
<?php echo $champion; ?>
</p><br><br><br>
<hr />

<p>
	<?php require("../../pub/pub1.php"); ?>
</p>

