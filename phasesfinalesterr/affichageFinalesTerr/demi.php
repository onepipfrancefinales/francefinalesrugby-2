<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
<title>Finales territoriales</title>
</head>


<?php

require ("../fonctionspfterrESDL.php");
$bdcomiteClub=("php".''.$comite.''."_clubs");
?>
 
 <?php 
if ($page=="HPHS1")
		{
		$nom1="Honneur";
		$nom2="Promotion Honneur";
		$nom3="1re Série";
		$division=170;
		}
elseif ($page=="S2S3S4")
		{
		$nom1="2me Série";
		$nom2="3me Série";
		$nom3="4me Série";
		$division=200;
		}
elseif ($page=="RRPHR1")
		{
		$nom1="Réserve";
		$nom2="Réserve Promotion";
		$nom3="Réserve 1re Série";
		$division=270;
		}
?>


<br />
<div id="palmares2" > Palmarès 
  <?php echo $annee;?>  
</div>

<?php $division=$division;
		demi ($bdcomiteClub, $division, $annee, $bdd)
		?>
		
<p class="divisionDemi"> 
	<?php echo $nom1; ?>
</p>
<p class="demi1"> 
	 <?php  echo $clubA2001 ; ?>
</p>
<p class="demiScore1"> 
	  <?php  echo $A2001 ; ?>
</p>

 <p class="demi2"> 
  	<?php  echo $clubA2002 ; ?>
</p>
<p class="demiScore2"> 
  	<?php  echo $A2002 ; ?>
</p>

<p class="demi5"> 
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

<p class="demi3"> 
  <?php  echo $clubA2003 ; ?>
</p>

<p class="demiScore3"> 
  <?php  echo $A2003 ; ?>
</p>

<p class="demi6"> 
  <?php  echo $clubA1002 ; ?>
</p>

<p class="demiScore6"> 
  <?php  echo $A1002 ; ?>
</p>




<p class="demi4"> 
  <?php  echo $clubA2004 ; ?>
</p>

<p class="demiScore4"> 
  <?php  echo $A2004 ; ?>
</p>


<?php 	
		if ($page=="RRPHR1") $division=$division+8910; else $division=$division+10;
		demi ($bdcomiteClub, $division, $annee, $bdd)
		
		?>
<hr />

<p class="divisionDemi"> <?php echo $nom2; ?></p>
	
	<p class="demi1"> 
	  <?php  echo $clubA2001 ; ?>
	</p>
	
	<p class="demiScore1"> 
	  <?php  echo $A2001 ; ?>
	</p>

 <p class="demi2"> 
  <?php  echo $clubA2002 ; ?>
</p>

<p class="demiScore2"> 
  <?php  echo $A2002 ; ?>
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

<p class="demi3"> 
  <?php  echo $clubA2003 ; ?>
</p>

<p class="demiScore3"> 
  <?php  echo $A2003 ; ?>
</p>



<p class="demi6"> 
  <?php  echo $clubA1002 ; ?>
</p>

<p class="demiScore6"> 
  <?php  echo $A1002 ; ?>
</p>




<p class="demi4"> 
  <?php  echo $clubA2004 ; ?>
</p>

<p class="demiScore4"> 
  <?php  echo $A2004 ; ?>
</p>

<?php $division=$division+10;
		demi ($bdcomiteClub, $division, $annee, $bdd)
?>		
<hr />

<p class="divisionDemi"> <?php echo $nom3; ?></p>
	
	<p class="demi1"> 
	  <?php  echo $clubA2001 ; ?>
	</p>
	
	<p class="demiScore1"> 
	  <?php  echo $A2001 ; ?>
	</p>

	 <p class="demi2"> 
	  <?php  echo $clubA2002 ; ?>
	</p>
	
	<p class="demiScore2"> 
	  <?php  echo $A2002 ; ?>
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

	<p class="demi3"> 
	  <?php  echo $clubA2003; ?>
	</p>
	
	<p class="demiScore3"> 
	  <?php  echo $A2003 ; ?>
	</p>

	<p class="demi6"> 
	  <?php  echo $clubA1002 ; ?>
	</p>
	
	<p class="demiScore6"> 
	  <?php  echo $A1002 ; ?>
	</p>

	<p class="demi4"> 
	  <?php  echo $clubA2004 ; ?>
	</p>
	
	<p class="demiScore4"> 
	  <?php  echo $A2004; ?>
	</p>
<hr />

<?php require("../../pub/pub1.php"); 
echo "eeeeeeee";
?>

