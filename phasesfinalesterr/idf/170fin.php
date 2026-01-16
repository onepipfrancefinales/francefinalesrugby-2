<?php 
$annee=$_GET['variable_1'];

$anneemoins = $annee-1;
$anneeplus = $annee+1;
$annee=$_GET['variable_1'];
$bdcomiteClub=("php".''.$comite.''."_clubs");
$bdcomiteAnnee=("php".''.$comite.''."_pf".''.$annee);

require ("../fonctionspf.php");
require ("../connect2.php") ;
?>
<link rel="stylesheet" type="text/css" href="../champTerr.css">
<div id="Layer1" style="position:absolute; width:381px; height:65px; z-index:14; left: 1011px; top: 7px"> 
  <?php  include("../../pub2.php");   ?>
</div>
<table >
  <tr > 
    <td class="pub"   > 
      <?php	include("../../pub7.php"); ?>
    </td>
    <td class="chevron" > 
      <?php $anneemoins = $annee-1;?>
      <?php $anneeplus = $annee+1;?>
      <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $comite; ?>/pagehonneur.php?variable_1=<?php echo $anneemoins;?>" target="_top" title="Phases finales de la saison <?php echo $anneemoins; ?>">&lt;&lt;</a>nne 
      <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $comite; ?>/pagehonneur.php?variable_1=<?php echo $anneeplus;?>" target="_top" title="Phases finales de la saison <?php echo $anneeplus; ?>">&gt;&gt;</a> 
    </td>
    <td class="pub" > 
      <?php	include("../../pub8.php"); ?>
    </td>
  </tr>
  <tr > 
    <td class="ligneComite" colspan="3" > 
      <? echo "Finales territoriales du comit&eacute;  $comiteNom $annee";?>
    </td>
  </tr>
</table>
<br><br>
<div id="palmares" > Palmar&egrave;s 
        <?php 	echo $annee;?>
      </div>
<br>
<br><br>
 <?php 
	    $id='170';
  		finaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);     
 	 	score ( $id, $annee, $bdcomiteAnnee)
       ?>

	<p class="division">  
			Honneur
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
<br><br><br><br><br>
 <?php 
	    $id='180';
  		finaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);     
 	 	score ( $id, $annee, $bdcomiteAnnee)
       ?>

	
<p class="division"> Promotion</p>
	
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
	    $id='190';
  		finaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);     
 	 	score ( $id, $annee, $bdcomiteAnnee)
       ?>

	
<p class="division"> 1re s&eacute;rie</p>
	
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
<p>
	<?php include("../../pub1.php"); ?>
</p>

