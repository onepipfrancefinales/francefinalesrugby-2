<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
</head>

<?php
require ("../../connect/connexion6.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");

if (isset($clubA1001)) $clubA1001 = '$clubA1001'; else $clubA1001 ="-";
if (isset($clubA1002)) $clubA1002 = '$clubA1002'; else $clubA1002 ="-";
if (isset($A1001)) $A1001 = '$A1001'; else $A1001 ="-";
if (isset($A1002)) $A1002 = '$A1002'; else $A1002 ="-";
if (isset($champion)) $champion = '$champion'; else $champion ="-";

$bdcomiteClub = "php".''.$bddComite.''."Club";
$bdcomite_pfterr_e = "php".''.$bddComite.''."_pfterr_e";
$bdcomite_pfterr_r = "php".''.$bddComite.''."_pfterr_r";


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
		$division=  $codeLigue + 170;
		}
elseif ($page=="S2S3S4")
		{
		$nom1="2me Série";
		$nom2="3me Série";
		$nom3="4me Série";
		$division=  $codeLigue + 200;
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
?>

<br />
<div id="palmares2" > Palmarès  <?php echo $annee;?></div>

<?php
				
	$reponse = $bdd->query("SELECT type as typeHS2R
							FROM $bdcomite_pfterr_e
							WHERE division = $division AND annee=$annee	");
					while ($donnees = $reponse->fetch())
					{$type=$donnees['typeHS2R'];}
		
if ($type==1)
		{finale2019 ($comite, $division, $annee, $bdd);}
elseif ($type==2)		
	{
	 demi2019 ($comite, $division, $annee, $bdd);
	 champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
	 traitementScores (2001,2004, $bdd);
	 traitementScores (1001,1002, $bdd);
	}
elseif ($type==3)
		{demiAR2019 ($comite, $division, $annee, $bdd);}		
		?>

<p class="divisionDemi"> <?php echo $nom1; ?></p>
	
<!-- demi finale Equipe1 et score1-->
<?php
if ($type == 3)
	{ ?>	
	<p class="demi1AR"><?php  echo $clubA2001 ; ?></p>
	<p class="demiScore1AR"><?php  echo $Pts2001 ; ?></p>
	<p class="demiScore1AR2"><?php  echo $GA4001 ; ?></p>
	<?php }
elseif ($type == 2)
	{ ?>
	<p class="demi1"><?php echo $clubA2001; ?></p>
	<p class="demiScore1"><?php  echo $A2001 ; ?></p>
	<?php }
else
	{ ?>
	<p class="demi1"><?php  echo "-"; ?></p>
	<p class="demiScore1"><?php  echo "-" ; ?></p>
	<?php }
		  
//  <!-- demi finale Equipe2 et score2-->
if ($type == 3)
	{ ?>
	<p class="demi2AR"><?php  echo $clubA2002 ; ?></p>
	<p class="demiScore2AR"><?php  echo $Pts2002 ; ?></p>
	<p class="demiScore2AR2"><?php  echo $GA4002 ; ?></p>
	<?php }
elseif ($type == 2) 
	{ ?>
	<p class="demi2"><?php  echo $clubA2002 ; ?></p>
	<p class="demiScore2"><?php  echo $A2002 ; ?></p>
	<?php }
else
	{ ?>
	<p class="demi2"><?php  echo "-"; ?></p>
	<p class="demiScore2"><?php  echo "-" ; ?></p>
	<?php } ?>
	
<!-- finale Equipe1 score1 -->
	<p class="demi5"><?php  echo $clubA1001 ; ?></p>
	<p class="demiScore5"><?php  echo $A1001; ?></p>
	
<!-- logo et nom du champion -->
	<p class="demiChamplogo"> 
	<img src="<?php echo $champLogo;  ?>" border="0" height="100" width="100" ></p>
	<p class="demiChampnom"><?php  echo $champion; ?></p>
	
<!-- demi finale Equipe3 et score3-->
<?php 
if ($type == 3)
	{ ?>	  
	<p class="demi3AR"><?php  echo $clubA2003; ?></p>
	<p class="demiScore3AR"><?php  echo $Pts2003 ; ?></p>
	<p class="demiScore3AR2"><?php  echo $GA4003 ; ?></p>	
	<?php }
elseif  ($type == 2)
	{ ?>	
	<p class="demi3"><?php echo $clubA2003 ; ?></p>
	<p class="demiScore3"><?php echo $A2003 ; ?></p>
	<?php }
else
	{ ?>
	<p class="demi3"><?php echo "-"; ?></p>
	<p class="demiScore3"><?php echo "-" ; ?></p>
	<?php }	?>
	<!-- Finale Equipe2 score2 -->
	<p class="demi6"><?php  echo $clubA1002 ; ?></p>
	<p class="demiScore6"><?php  echo $A1002 ; ?></p>

<!-- demi finale Equipe4 et score4-->
<?php 
if ($type==3)
	{ ?>	
	<p class="demi4AR"><?php  echo $clubA2004 ; ?></p>
	<p class="demiScore4AR"><?php  echo $Pts2004 ; ?></p>
	<p class="demiScore4AR2"><?php  echo $GA4004 ; ?></p>
	<?php }
elseif ($type==2)
	{ ?>		
	<p class="demi4"><?php  echo $clubA2004; ?></p>
	<p class="demiScore4"><?php  echo $A2004 ; ?></p>
	<?php }
else // type == 1
	{ ?>
	<p class="demi4"><?php  echo "-"; ?></p>
	<p class="demiScore4"><?php  echo "-" ; ?></p>
	<?php }

echo "<hr />";

//<!--  ********************PH / S2 / RES PH ***********************************************  -->


// rend la valeur de la variable à null
//unset($variable); // supprime la variable
if ($page=="RRPHR1") $division=$division+8910; else $division=$division+10;
			
					$reponse = $bdd->query("SELECT type as typePHS3RPH
							FROM $bdcomite_pfterr_e
							WHERE division = $division AND annee = $annee	");
					while ($donnees = $reponse->fetch() )
							{$type=$donnees['typePHS3RPH'];}

							$A2001 = null; $A2002 = null; $A2003 = null; $A2004 = null;
							$A1001 = null; $A1002 = null;							
if ($type==1)
		{finale2019 ($comite, $division, $annee, $bdd);}		
elseif ($type==2)		
	{
	 demi2019 ($comite, $division, $annee, $bdd);
	 champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
	 traitementScores (2001,2004, $bdd);	
	}
elseif ($type==3)

		{demiAR2019 ($comite, $division, $annee, $bdd);}		
?>

<p class="divisionDemi"> <?php echo $nom2; ?></p>
	
<!-- demi finale Equipe 1 et score 1-->

<?php 
if ($type==3)
	{ ?>	
	<p class="demi1AR"><?php  echo $clubA2001 ; ?></p>
	<p class="demiScore1AR"><?php  echo $Pts2001 ; ?></p>
	<p class="demiScore1AR2"><?php  echo $GA4001 ; ?></p>  
	<?php } 
elseif ($type==2)
	{ ?>
	<p class="demi1"><?php  echo $clubA2001; ?></p>
	<p class="demiScore1"><?php  echo $A2001 ; ?></p>
	<?php }
else
	{ ?>
	<p class="demi1"><?php  echo "-"; ?></p>
	<p class="demiScore1"><?php  echo "-" ; ?></p>
	<?php }
		  
//<!-- demi finale Equipe2 et score2-->
 
if ($type==3)
	{ ?>
	<p class="demi2AR"><?php  echo $clubA2002 ; ?></p>
	<p class="demiScore2AR"><?php  echo $Pts2002 ; ?></p>
	<p class="demiScore2AR2"><?php echo $GA4002 ; ?></p>
	<?php }
elseif ($type==2) 
	{ ?>
	<p class="demi2"><?php echo $clubA2002 ; ?></p>
	<p class="demiScore2"><?php echo $A2002 ; ?></p>
	<?php }
else
	{ ?>
	<p class="demi2"><?php echo "-"; ?></p>
	<p class="demiScore2"><?php echo "-" ; ?></p>
	<?php } ?>
	
<!-- finale Equipe1 score1 -->
	<p class="demi5"><?php echo $clubA1001 ; ?></p>
	<p class="demiScore5"><?php echo $A1001; ?></p>

<!-- logo et nom du champion -->
	<p class="demiChamplogo"><img src="<?php echo $champLogo;  ?>"border="0" height="100" width="100" ></p>
	<p class="demiChampnom"><?php echo $champion; ?></p>
	
<!-- demi finale Equipe3 et score3-->
<?php
 //$A2004 = null; $A1002 = null;
 if ($type==3)
	{ ?>	  
	<p class="demi3AR"><?php echo $clubA2003; ?></p>
	<p class="demiScore3AR"><?php echo $Pts2003 ; ?></p>
	<p class="demiScore3AR2"><?php echo $GA4003 ; ?></p>	
	<?php }
elseif  ($type==2)
	{ ?>	
	<p class="demi3"><?php echo $clubA2003 ; ?></p>
	<p class="demiScore3"><?php echo $A2003 ; ?></p>
	<?php }
else
	{ ?>
	<p class="demi3"><?php echo "-"; ?></p>
	<p class="demiScore3"><?php echo "-" ; ?></p>
	<?php }
?>

<!-- finale Equipe2 score2 -->
	<p class="demi6"><?php echo $clubA1002 ; ?></p>
	<p class="demiScore6"><?php echo $A1002 ; ?></p>

<!-- demi finale Equipe4 et score4-->
<?php 
if ($type==3)
	{ ?>	
	<p class="demi4AR"><?php echo $clubA2004 ; ?></p>
	<p class="demiScore4AR"><?php echo $Pts2004 ; ?></p>
	<p class="demiScore4AR2"><?php echo $GA4004 ; ?></p>
	<?php }
elseif ($type==2)
	{ ?>		
	<p class="demi4"><?php echo $clubA2004; ?></p>
	<p class="demiScore4"><?php echo $A2004 ; ?></p>
	<?php }
else // type == 1
	{ ?>
	<p class="demi4"><?php echo "-"; ?></p>
	<p class="demiScore4"><?php echo "-" ; ?></p>
<?php }

echo "<hr />";

//<!--  ***************************S1 / S4  /Res S1*************************************  -->
//echo "page mixte :".$page;
if ($page == "HPHS1") {

	$division=$division+10;
		
	$reponse = $bdd->query("SELECT type as typeS2S4R1
						FROM $bdcomite_pfterr_e
						WHERE division = $division AND annee=$annee	");
							while ($donnees = $reponse->fetch() )
									{$type=$donnees['typeS2S4R1'];}
if ($type==1)
		{finale2019 ($comite, $division, $annee, $bdd);}
elseif ($type==2)
	{
	 demi2019 ($comite, $division, $annee, $bdd);
	 champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
	 traitementScores (2001,2004, $bdd);
	}
elseif ($type==3)
	{demiAR2019 ($comite, $division, $annee, $bdd);}				
?>

<p class="divisionDemi"> <?php echo $nom3; ?></p>
		
<!-- demi finale Equipe1 et score1-->
<?php 
if ($type==3)
	{ ?>	
	<p class="demi1AR"><?php echo $clubA2001 ; ?></p>
	<p class="demiScore1AR"><?php echo $Pts2001 ; ?></p>
	<p class="demiScore1AR2"><?php echo $GA4001 ; ?></p>
	<?php }
elseif ($type==2)
	{ ?>
	<p class="demi1"><?php echo $clubA2001; ?></p>
	<p class="demiScore1"><?php echo $A2001 ; ?></p>
	 <?php }
else
	{ ?>
	<p class="demi1"><?php echo "-"; ?></p>
	<p class="demiScore1"><?php echo "-" ; ?></p>
	<?php }
	  
// demi finale Equipe2 et score2
if ($type==3)
	{ ?>
	<p class="demi2AR"><?php echo $clubA2002 ; ?></p>
	<p class="demiScore2AR"><?php echo $Pts2002 ; ?></p>
	<p class="demiScore2AR2"><?php echo $GA4002 ; ?></p>
	<?php }
elseif ($type==2) 
	{ ?>
	<p class="demi2"><?php echo $clubA2002 ; ?></p>
	<p class="demiScore2"><?php echo $A2002 ; ?></p>
	<?php }
else
	{ ?>
	<p class="demi2"><?php echo "-"; ?></p>
	<p class="demiScore2"><?php echo "-" ; ?></p>
	<?php } ?>

<!-- finale Equipe1 score1 -->
	<p class="demi5"><?php echo $clubA1001 ; ?></p>
	<p class="demiScore5"><?php echo $A1001; ?></p>
	
<!-- logo et nom du champion -->
	<p class="demiChamplogo"> 
	<img src="<?php echo $champLogo;  ?>"border="0" height="100" width="100" ></p>
	<p class="demiChampnom"><?php  echo $champion; ?></p>

<!-- demi finale Equipe3 et score3-->
<?php if ($type==3)
	{ ?>	  
	<p class="demi3AR"><?php echo $clubA2003; ?></p>
	<p class="demiScore3AR"><?php echo $Pts2003 ; ?></p>
	<p class="demiScore3AR2"><?php echo $GA4003 ; ?></p>	
	<?php }
elseif  ($type==2)
	{ ?>	
	<p class="demi3"><?php echo $clubA2003 ; ?></p>
	<p class="demiScore3"><?php echo $A2003 ; ?></p>
	<?php }
else
	{ ?>
	<p class="demi3"><?php echo "-"; ?></p>
	<p class="demiScore3"><?php echo "-" ; ?></p>
	<?php }	?>
	
<!-- finale Equipe2 score2 -->
	<p class="demi6"><?php echo $clubA1002 ; ?></p>
	<p class="demiScore6"><?php echo $A1002 ; ?></p>

<!-- demi finale Equipe4 et score4-->
<?php 
if ($type==3)
	{ ?>	
	 <p class="demi4AR"><?php echo $clubA2004 ; ?></p>
	 <p class="demiScore4AR"><?php echo $Pts2004 ; ?></p>
	 <p class="demiScore4AR2"><?php echo $GA4004 ; ?></p>
	 <?php	}
elseif ($type==2)
	{ ?>		
	 <p class="demi4"><?php echo $clubA2004; ?></p>
	 <p class="demiScore4"><?php echo $A2004 ; ?></p>
	 <?php }
else 
	{ ?>
	 <p class="demi4"><?php echo "-"; ?></p>
	 <p class="demiScore4"><?php echo "-" ; ?></p>
	 <?php }

echo "<hr />";

	}

	?>


