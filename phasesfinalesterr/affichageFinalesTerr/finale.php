<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
<title>Finales territoriales</title>
</head>

<?php 
 
if (isset ($_GET['id'])) $id = $_GET['id']; else $id='-'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='Erreur, pas de comite'; 




 require ("../fonctionspfterrESDL.php");


$bdcomiteClub=$comite.''."_clubs";
$bdcomite_pfterr_e = $comite.''."_pfterr_e";
$bdcomite_pfterr_r = $comite.''."_pfterr_r";

//echo $bdcomite_pfterr_e;

//$bdcomiteClub=($comite.''."_clubs");
//$bdcomiteAnnee=($comite.''."_pfterr");





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


<br>
<br>
<div id="palmares" > Palmarès 
        <?php 	echo $annee;?>
      </div>
<br>
<br><br>
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
  <?php logo ($bdcomiteClub, $champion, $bdd); ?>
</p>
<p class="champnom"> 
  <?php echo $champion; ?>
</p>

 <?php 
	    if ($page=="RRPHR1") $division=$division+8910; else $division=$division+10;
  		finale ($bdcomiteClub, $division, $annee, $bdd); 
       
 	 	
       ?>

<br><br><br><br><br>	
<p class="division"> <?php echo $nom2; ?></p>
	
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
  <?php logo ($bdcomiteClub, $champion, $bdd); ?>
</p>
<p class="champnom"> 
  <?php echo $champion; ?>
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
	  <?php  echo $A1001; ?>
	</p>

 
<p class="finale2"> 
  <?php  echo $clubA1002 ; ?>
</p>

<p class="score2"> 
  <?php  echo $A1002 ; ?>
</p>

<p class="champlogo"> 
  <?php logo ($bdcomiteClub, $champion, $bdd); ?>
</p>
<p class="champnom"> 
  <?php echo $champion; ?>
</p>
<br><br><br>
<hr />

<p>
	<?php require("../../pub/pub1.php"); ?>
</p>

