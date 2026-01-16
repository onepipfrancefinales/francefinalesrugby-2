<?php 
$annee=$_GET['variable_1'];
$comite=$_GET['comite'];
$page=$_GET['page'];
$id=$_GET['id'];

$bdcomiteClub=("php".''.$comite.''."_clubs");
$bdcomiteAnnee=("php".''.$comite.''."_pfterr");
echo $comite;
echo $bdcomiteAnnee;

$anneemoins = $annee-1;
$anneeplus = $annee+1;

require ("../fonctionspfterr.php");
require ("../../connect/choixDeLaBase.php");
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

<div id="Layer1" style="position:absolute; width:381px; height:65px; z-index:14; left: 1010px; top: 1px"> 
  <?php // require("../../pub/pub2.php"); ?>
</div>
<table >
  <tr > 
    <td class="pub" > 
      <?php	require("../../pub/pub7.php"); ?>
    </td>
    <td class="chevron" > <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>&variable_1=<?php echo $anneemoins;?>" target="_top" title="Phases finales de la saison <?php echo $anneemoins; ?>">&lt;&lt;</a>nne 
      <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>&variable_1=<?php echo $anneeplus;?>" target="_top" title="Phases finales de la saison <?php echo $anneeplus; ?>">&gt;&gt;</a> 
    </td>
    <td class="pub" > 
      <?php	require("../../pub/pub8.php"); ?>
    </td>
  </tr>
  <tr >
    <td class="ligneComite" colspan="3" >
      <?php
//	Traitement des comités (ab - ld - mpy - r) ==> Ligue Occitanie

	if (($comite == 'ab' or $comite == 'ld' or $comite == 'mpy' or $comite == 'r' )and ($variable_1 < 2109 ))
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
       echo "Finales $texte  $comiteNom $annee";
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
  		finaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);     
 	 	score ( $division, $annee, $bdcomiteAnnee)
       ?>

	<p class="division">  
			<?php echo $nom1; ?>
	</p>
	
	<p class="finale1"> 
	  <?php  echo $clubA ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $scoreA ; ?>
	</p>

	 <p class="finale2"> 
	  <?php  echo $clubB ; ?>
	</p>

	<p class="score2"> 
	  <?php  echo $scoreB ; ?>
	</p>

<p class="champlogo">
<?php echo "<img src=\"$logo\">"; ?>
</p>
<p class="champnom">
<?php echo $champion; ?>
</p>

 <?php 
	    if ($page=="RRPHR1") $division=$division+8910; else $division=$division+10;
  		finaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);     
 	 	score ( $division, $annee, $bdcomiteAnnee)
       ?>

	
<p class="division"> <?php echo $nom2; ?></p>
	
	<p class="finale1"> 
	  <?php  echo $clubA ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $scoreA ; ?>
	</p>

 <p class="finale2"> 
  <?php  echo $clubB ; ?>
</p>

<p class="score2"> 
  <?php  echo $scoreB ; ?>
</p>

<p class="champlogo">
<?php echo "<img src=\"$logo\">"; ?>
</p>
<p class="champnom">
<?php echo $champion; ?>
</p>
<br><br><br><br><br>
<?php 
	    $division=$division+10;
  		finaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);     
 	 	score ( $division, $annee, $bdcomiteAnnee)
       ?>
<p class="division"> 
  <?php echo $nom3; ?>
</p>
	
	<p class="finale1"> 
	  <?php  echo $clubA ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $scoreA ; ?>
	</p>

 <p class="finale2"> 
  <?php  echo $clubB ; ?>
</p>

<p class="score2"> 
  <?php  echo $scoreB ; ?>
</p>

<p class="champlogo">
<?php echo "<img src=\"$logo\">"; ?>
</p>
<p class="champnom">
<?php echo $champion; ?>
</p><br><br><br>
<hr />
<?php mysql_close();?>
<p>
	<?php require("../../pub/pub1.php"); ?>
</p>

