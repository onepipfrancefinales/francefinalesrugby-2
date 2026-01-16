
<?php
$annee=$_GET['variable_1'];
$comite=$_GET['comite'];
$page=$_GET['page'];
$bdcomiteClub=("php".''.$comite.''."_clubs");
$bdcomiteAnnee=("php".''.$comite.''."_pfterr");
?>
<?php require ("../fonctionspfterr.php");?>
 <?php  if ($comite=="pl" OR $comite=="mpy" OR $comite=="pr" OR $comite=="br" OR  $comite=="f1")
				require ("../../connect/connection3.php") ; 
else
				require ("../../connect/connection2.php") ; 
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
  <?php  include("../../pub2.php"); ?>
</div>
<table >
  <tr > 
    <td class="pub"   > 
      <?php	include("../../pub7.php"); ?>
    </td>
    <td class="chevron" > 
      <?php $anneemoins = $annee-1;?>
      <?php $anneeplus = $annee+1;?>
      <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/170/pagehonneur.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&variable_1=<?php echo $anneemoins;?>" target="_top" title="Phases finales de la saison <?php echo $anneemoins; ?>">&lt;&lt;</a>nne 
      <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/170/pagehonneur.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&variable_1=<?php echo $anneeplus;?>" target="_top" title="Phases finales de la saison <?php echo $anneeplus; ?>">&gt;&gt;</a> 
    </td>
    <td class="pub" > 
           <?php include("../../pub8.php"); ?>
    </td>
  </tr>
  <tr > 
    <td class="ligneComite" colspan="3" >
      <? echo "Finales territoriales du comit&eacute;  $comiteNom $annee";?>
    </td>
  </tr>
</table>
<br />
<div id="palmares2" > Palmar&egrave;s 
  <?php 	echo $annee;?>
</div>

<?php $division=$division;
		demiFinaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
       	demiFinaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
	   	demiFinaleC ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
	   	demiFinaleD ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
		scoreDemi ( $division, $annee, $bdcomiteAnnee)
		?>
		
<p class="divisionDemi"> <?php echo $nom1; ?></p>
	
	<p class="demi1"> 
	  <?php  echo $clubA ; ?>
	</p>
	
	<p class="demiScore1"> 
	  <?php  echo $scoreA ; ?>
	</p>

 <p class="demi2"> 
  <?php  echo $clubB ; ?>
</p>

<p class="demiScore2"> 
  <?php  echo $scoreB ; ?>
</p
><p class="demi5"> 
  <?php  echo $finaliste1 ; ?>
</p>


<p class="demiScore5"> 
  <?php  echo $A1001; ?>
</p>

<p class="demiChamplogo"> 
	<?php echo "<img src=\"$demiChampLogo\">"; ?>
</p>

<p class="demiChampnom"> 
  <?php  echo $champion;   ?>
</p>

<p class="demi3"> 
  <?php  echo $clubC ; ?>
</p>

<p class="demiScore3"> 
  <?php  echo $scoreC ; ?>
</p>



<p class="demi6"> 
  <?php  echo $finaliste2 ; ?>
</p>

<p class="demiScore6"> 
  <?php  echo $A1002 ; ?>
</p>




<p class="demi4"> 
  <?php  echo $clubD ; ?>
</p>

<p class="demiScore4"> 
  <?php  echo $scoreD ; ?>
</p>





<?php 	
		if ($page=="RRPHR1") $division=$division+8910; else $division=$division+10;
		demiFinaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
       	demiFinaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
	   	demiFinaleC ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
	   	demiFinaleD ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
		scoreDemi ( $division, $annee, $bdcomiteAnnee)
		
		?>
<hr />

<p class="divisionDemi"> <?php echo $nom2; ?></p>
	
	<p class="demi1"> 
	  <?php  echo $clubA ; ?>
	</p>
	
	<p class="demiScore1"> 
	  <?php  echo $scoreA ; ?>
	</p>

 <p class="demi2"> 
  <?php  echo $clubB ; ?>
</p>

<p class="demiScore2"> 
  <?php  echo $scoreB ; ?>
</p
><p class="demi5"> 
  <?php  echo $finaliste1 ; ?>
</p>


<p class="demiScore5"> 
  <?php  echo $A1001; ?>
</p>

<p class="demiChamplogo"> 
	<?php echo "<img src=\"$demiChampLogo\">"; ?>
</p>

<p class="demiChampnom"> 
  <?php  echo $champion;   ?>
</p>

<p class="demi3"> 
  <?php  echo $clubC ; ?>
</p>

<p class="demiScore3"> 
  <?php  echo $scoreC ; ?>
</p>



<p class="demi6"> 
  <?php  echo $finaliste2 ; ?>
</p>

<p class="demiScore6"> 
  <?php  echo $A1002 ; ?>
</p>




<p class="demi4"> 
  <?php  echo $clubD ; ?>
</p>

<p class="demiScore4"> 
  <?php  echo $scoreD ; ?>
</p>




<?php $division=$division+10;
		demiFinaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
       	demiFinaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
	   	demiFinaleC ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
	   	demiFinaleD ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);
		scoreDemi ( $division, $annee, $bdcomiteAnnee)
?>
<hr />

<p class="divisionDemi"> <?php echo $nom3; ?></p>
	
	<p class="demi1"> 
	  <?php  echo $clubA ; ?>
	</p>
	
	<p class="demiScore1"> 
	  <?php  echo $scoreA ; ?>
	</p>

	 <p class="demi2"> 
	  <?php  echo $clubB ; ?>
	</p>
	
	<p class="demiScore2"> 
	  <?php  echo $scoreB ; ?>
	</p>
	
	<p class="demi5"> 
	  <?php  echo $finaliste1 ; ?>
	</p>


	<p class="demiScore5"> 
	  <?php  echo $A1001; ?>
	</p>
	
	<p class="demiChamplogo"> 
		<?php echo "<img src=\"$demiChampLogo\">"; ?>
	</p>
	
	<p class="demiChampnom"> 
	  <?php  echo $champion;   ?>
	</p>

	<p class="demi3"> 
	  <?php  echo $clubC ; ?>
	</p>
	
	<p class="demiScore3"> 
	  <?php  echo $scoreC ; ?>
	</p>

	<p class="demi6"> 
	  <?php  echo $finaliste2 ; ?>
	</p>
	
	<p class="demiScore6"> 
	  <?php  echo $A1002 ; ?>
	</p>

	<p class="demi4"> 
	  <?php  echo $clubD ; ?>
	</p>
	
	<p class="demiScore4"> 
	  <?php  echo $scoreD ; ?>
	</p>


<hr />
<?php	include("../../pub1.php"); ?>

