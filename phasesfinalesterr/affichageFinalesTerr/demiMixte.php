<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
</head>

<?php
echo "test";
 if (isset ($champion)) $champion = 12 ; else $champion='9';


 if (isset ($clubA2001A)) ; else $clubA2001A='-';
 if (isset ($clubA2002A)) ; else $clubA2002A='-';
 if (isset ($clubA2003A)) ; else $clubA2003A='-';
 if (isset ($clubA2004A)) ; else $clubA2004A='-';


 if (isset ($clubA2001B)) ; else $clubA2001B='-';
 if (isset ($clubA2002B)) ; else $clubA2002B='-';
 if (isset ($clubA2003B)) ; else $clubA2003B='-';
 if (isset ($clubA2004B)) ; else $clubA2004B='-';
 
 if (isset ($clubA2001C)) ; else $clubA2001C='-';
 if (isset ($clubA2002C)) ; else $clubA2002C='-';
 if (isset ($clubA2003C)) ; else $clubA2003C='-';
 if (isset ($clubA2004C)) ; else $clubA2004C='-';
 
 
 if (isset ($A2001A)) ; else $A2001A='-';
 if (isset ($A2002A)) ; else $A2002A='-';
 if (isset ($A2003A)) ; else $A2003A='-';
 if (isset ($A2004A)) ; else $A2004A='-';
 
 if (isset ($Pts2001A)) ; else $Pts2001A='-';
 if (isset ($Pts2002A)) ; else $Pts2002A='-';
 if (isset ($Pts2003A)) ; else $Pts2003A='-';
 if (isset ($Pts2004A)) ; else $Pts2004A='-';
 
 if (isset ($GA4001A)) ; else $GA4001A='-';
 if (isset ($GA4002A)) ; else $GA4002A='-';
 if (isset ($GA4003A)) ; else $GA4003A='-';
 if (isset ($GA4004A)) ; else $GA4004A='-';
 


 if (isset ($A2001B)) ; else $A2001B='-';
 if (isset ($A2002B)) ; else $A2002B='-';
 if (isset ($A2003B)) ; else $A2003B='-';
 if (isset ($A2004B)) ; else $A2004B='-';
 
 
 if (isset ($Pts2001B)) ; else $Pts2001B='-';
 if (isset ($Pts2002B)) ; else $Pts2002B='-';
 if (isset ($Pts2003B)) ; else $Pts2003B='-';
 if (isset ($Pts2004B)) ; else $Pts2004B='-';
 
 if (isset ($GA4001B)) ; else $GA4001B='-';
 if (isset ($GA4002B)) ; else $GA4002B='-';
 if (isset ($GA4003B)) ; else $GA4003B='-';
 if (isset ($GA4004B)) ; else $GA4004B='-';
 
 
 
 if (isset ($A2001C)) ; else $A2001C='-';
 if (isset ($A2002C)) ; else $A2002C='-';
 if (isset ($A2003C)) ; else $A2003C='-';
 if (isset ($A2004C)) ; else $A2004C='-';
 
 if (isset ($A1001C)) ; else $A1001C='-';
 if (isset ($A1002C)) ; else $A1002C='-';
 
 
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


<div id="palmares2" > Palmar&egrave;s 
  <?php echo $annee;?>
</div>
<?php 	unset($demiChampLogo);
//---------------------------------------------------------------------------
	if ($page=="RRPHR1") $division=$division;
//echo $division;//	echo $type;		
					$reponse  = $bdd->query("SELECT type as typePHS3RPH
							FROM $bdcomite_pfterr
							WHERE division = '$division' AND annee='$annee'");
					while ($donnees = $reponse->fetch())
					{
					$type=$donnees['typePHS3RPH'];
					}
//echo $type;	
if ($type==1)
		{
		finale ($bdcomiteClub, $division, $annee, $bdd);
		$clubA1001A = $clubA1001;
		$clubA1002A = $clubA1002;
		
		$A1001A = $A1001;
		$A1002A = $A1002;
		
		}
	
		
elseif ($type==2)		
		{
		demi ($bdcomiteClub, $division, $annee, $bdd);
		$clubA2001A = $clubA2001;
		$clubA2002A = $clubA2002;
		$clubA2003A = $clubA2003;
		$clubA2004A = $clubA2004;
//echo $clubA2001;$clubA2002;
		$A2001A = $A2001;
		$A2002A = $A2002;
		$A2003A = $A2003;
		$A2004A = $A2004;
		
		
		}
	
		
elseif ($type==3)
		{		
		demiAR ($bdcomiteClub, $division, $annee, $bdd);		
		$clubA2001A = $clubA2001;
		$clubA2002A = $clubA2002;
		$clubA2003A = $clubA2003;
		$clubA2004A = $clubA2004;
		
		$A2001A = $A2001;
		$A2002A = $A2002;
		$A2003A = $A2003;
		$A2004A = $A2004;
		}		
		
		?>
		
		
		
<!-- demi finale Equipe1 et score1-->		
<p class="divisionDemi"> <?php echo $nom1; ?></p>

<?php 
if ($type==3)
	{
		//echo $type;
	?>	
		<p class="demi1AR">
	  		<?php  echo $clubA2001A ; ?>
		</p>
		<p class="demiScore1AR"> 
	  		<?php echo $Pts2001 ; ?>
		</p>
		<p class="demiScore1AR2"> 
	  		<?php  echo $GA4001 ; ?>
	<?php	  
	}
else 
	{
	?>
	 	<p class="demi1"> 
	  		<?php  echo $clubA2001A; ?>
		</p>
		<p class="demiScore1"> 
	  		<?php  echo $A2001A ; ?>
		</p>
	<?php
	}
?>
	  
<!-- demi finale Equipe2 et score2-->
<?php 
if ($type==3)
	{
?>
		<p class="demi2AR"> 
  			<?php  echo $clubA2002A ; ?>
		</p>
		<p class="demiScore2AR"> 
  			<?php  echo $Pts2002 ; ?>
		</p>
		<p class="demiScore2AR2"> 
			<?php  echo $GA4002 ; ?>
		</p>
<?php	  
	}
	else 
	{
?>
	 	<p class="demi2"> 
	  		<?php  echo $clubA2002A ; ?>
		</p>
		<p class="demiScore2"> 
	  		<?php  echo $A2002A ; ?>
		</p>
<?php
	}
?>
	
	<!-- finale Equipe1 score1 -->
	<p class="demi5"> 
	  <?php  echo $clubA1001 ; ?>
	</p>

	<p class="demiScore5"> 
	  <?php  echo $A1001; ?>
	</p>
	<!-- logo et nom du champion -->
	<p class="demiChamplogo"> 
		<?php logo ($bdcomiteClub, $champion, $bdd); ?>
	</p>
	
	<p class="demiChampnom"> 
	  <?php  echo $champion;   ?>
	</p>
	
<!-- demi finale Equipe3 et score3-->
<?php if ($type==3)
	{
?>	  
	<p class="demi3AR"> 
	  <?php  echo $clubA2003A ; ?>
	</p>
	<p class="demiScore3AR"> 
	  <?php  echo $Pts2003 ; ?>
	</p>
	<p class="demiScore3AR2"> 
	  <?php  echo $GA4003 ; ?>
	</p>	
<?php
	 }
	 else 
	 {
?>	
	<p class="demi3"> 
	  <?php  echo $clubA2003A ; ?>
	</p>
	<p class="demiScore3"> 
	  <?php  echo $A2003A ; ?>
	</p>
<?php
}
?>	
	
<!-- finale Equipe1 score1 -->
	<p class="demi6"> 
	  <?php  echo $clubA1002 ; ?>
	</p>
	<p class="demiScore6"> 
	  <?php  echo $A1002 ; ?>
	</p>

<!-- demi finale Equipe4 et score4-->
<?php if ($type==3)
	{
?>	
	<p class="demi4AR"> 
  		<?php  echo $clubA2004A ; ?>
	</p>
	<p class="demiScore4AR"> 
  		<?php  echo $Pts2004 ; ?>
	</p>
	<p class="demiScore4AR2"> 
  		<?php  echo $GA4004 ; ?>
	</p>
<?php
	 }
	 else 
	 {
?>		
	
	<p class="demi4"> 
	  <?php  echo $clubA2004A ; ?>
	</p>
	<p class="demiScore4"> 
	  <?php  echo $A2004A ; ?>
	</p>
<?php
}
?>

<hr />
<!--  *******************************************************************  -->

<?php 	

	if ($page=="RRPHR1") $division=$division+8910; else $division=$division+10;
	
	$reponse  = $bdd->query("SELECT type as typePHS3RPH
							 FROM $bdcomite_pfterr
							 WHERE division = '$division' AND annee='$annee'	");
					while ($donnees= $reponse->fetch())
					{
					$type=$donnees['typePHS3RPH'];
					}
//echo $type;	
if ($type==1)
		{
		finale ($bdcomiteClub, $division, $annee, $bdd);
		$clubA1001B = $clubA1001;
		$clubA1002B = $clubA1002;
		
		$A1001B = $A1001;
		$A1002B = $A1002;
		
		}
	
		
elseif ($type==2)		
		{
		demi ($bdcomiteClub, $division, $annee, $bdd);
		$clubA2001B = $clubA2001;
		$clubA2002B = $clubA2002;
		$clubA2003B = $clubA2003;
		$clubA2004B = $clubA2004;
		
		$A2001B = $A2001;
		$A2002B = $A2002;
		$A2003B = $A2003;
		$A2004B = $A2004;
		
		
		}
	
		
elseif ($type==3)
		{		
		demiAR ($bdcomiteClub, $division, $annee, $bdd);		
		$clubA2001B = $clubA2001;
		$clubA2002B = $clubA2002;
		$clubA2003B = $clubA2003;
		$clubA2004B = $clubA2004;
		
		$A2001B = $A2001;
		$A2002B = $A2002;
		$A2003B = $A2003;
		$A2004B = $A2004;
		}		
		
		?>


<p class="divisionDemi"> <?php echo $nom2; ?></p>
	
	<!-- demi finale Equipe1 et score1-->
	<?php if ($type==3)
	{
?>	
	<p class="demi1AR">
	  <?php  echo $clubA2001B ; ?>
	</p>
	<p class="demiScore1AR"> 
	  <?php  echo $Pts2001 ; ?>
	</p>
	<p class="demiScore1AR2"> 
	  <?php  echo $GA4001 ; ?>
<?php	  
	 }
	 else 
	 {
?>
	 <p class="demi1"> 
	  <?php  echo $clubA2001B; ?>
	</p>
	<p class="demiScore1"> 
	  <?php  echo $A2001B ; ?>
	</p>
<?php
	}
?>
	  
<!-- demi finale Equipe2 et score2-->
<?php if ($type==3)
	{
?>
	<p class="demi2AR"> 
  		<?php  echo $clubA2002B ; ?>
	</p>
	<p class="demiScore2AR"> 
  		<?php  echo $Pts2002 ; ?>
	</p>
	<p class="demiScore2AR2"> 
  		<?php  echo $GA4002 ; ?>
	</p>
<?php	  
	 }
	 else 
	 {
?>
	 <p class="demi2"> 
	  <?php  echo $clubA2002B ; ?>
	</p>

	<p class="demiScore2"> 
	  <?php  echo $A2002B ; ?>
	</p>
<?php
}
?>
	<!-- finale Equipe1 score1 -->
	<p class="demi5"> 
	  <?php  echo $clubA1001 ; ?>
	</p>

	<p class="demiScore5"> 
	  <?php  echo $A1001; ?>
	</p>
	<!-- logo et nom du champion -->
	<p class="demiChamplogo"> 
		<?php logo ($bdcomiteClub, $champion, $bdd); ?>
	</p>
	
	<p class="demiChampnom"> 
	  <?php  echo $champion;   ?>
	</p>
	<!-- demi finale Equipe3 et score3-->
	
	
	<?php if ($type==3)
	{
?>	  
	<p class="demi3AR"> 
	  <?php  echo $clubA2003B; ?>
	</p>
	<p class="demiScore3AR"> 
	  <?php  echo $Pts2003 ; ?>
	</p>
	<p class="demiScore3AR2"> 
	  <?php  echo $GA4003 ; ?>
	</p>	
<?php
	 }
	 else 
	 {
?>	
	<p class="demi3"> 
	  <?php  echo $clubA2003B ; ?>
	</p>
	<p class="demiScore3"> 
	  <?php  echo $A2003B ; ?>
	</p>
<?php
}
?>	
	<!-- finale Equipe1 score1 -->
	<p class="demi6"> 
	  <?php  echo $clubA1002 ; ?>
	</p>

	<p class="demiScore6"> 
	  <?php  echo $A1002 ; ?>
	</p>

	<!-- demi finale Equipe4 et score4-->
	<?php if ($type==3)
	{
?>	
	<p class="demi4AR"> 
  		<?php  echo $clubA2004B ; ?>
	</p>
	<p class="demiScore4AR"> 
  		<?php  echo $Pts2004 ; ?>
	</p>
	<p class="demiScore4AR2"> 
  		<?php  echo $GA4004 ; ?>
	</p>
<?php
	 }
	 else 
	 {
?>		
	<p class="demi4"> 
	  <?php  echo $clubA2004B; ?>
	</p>
	<p class="demiScore4"> 
	  <?php  echo $A2004B ; ?>
	</p>
<?php
}
?>
<hr />
<!--  *******************************************************************  -->
<?php 
		unset($demiChampLogo);
		$division=$division+10;
//echo $division;		
		$reponse  = $bdd->query("SELECT type as typeS2S4R1
							FROM $bdcomite_pfterr
							WHERE division = '$division' AND annee='$annee'	");
					while ($donnees = $reponse->fetch())
					{
					$type=$donnees['typeS2S4R1'];
					}

if ($type==1)
		{
		finale ($bdcomiteClub, $division, $annee, $bdd);
		$clubA1001C = $clubA1001;
		$clubA1002C = $clubA1002;
		
		$A1001C = $A1001;
		$A1002C = $A1002;
		
		}
			

elseif ($type==2)
		{
		demi ($bdcomiteClub, $division, $annee, $bdd);
		$clubA2001C = $clubA2001;
		$clubA2002C = $clubA2002;
		$clubA2003C = $clubA2003;
		$clubA2004C = $clubA2004;
		
		$A2001C = $A2001;
		$A2002C = $A2002;
		$A2003C = $A2003;
		$A2004C = $A2004;
		}
			
	
elseif ($type==3)
		{		
		demiAR ($bdcomiteClub, $division, $annee, $bdd);
		$clubA2001C = $clubA2001;
		$clubA2002C = $clubA2002;
		$clubA2003C = $clubA2003;
		$clubA2004C = $clubA2004;
		
		$A2001C = $A2001;
		$A2002C = $A2002;
		$A2003C = $A2003;
		$A2004C = $A2004;
		
		
		}			
	
?>


<p class="divisionDemi"> <?php echo $nom3; ?></p>
	
	
	<!-- demi finale Equipe1 et score1-->
	<?php if ($type==3)
	{
?>	
	<p class="demi1AR">
	  <?php  echo $clubA2001C ; ?>
	</p>
	<p class="demiScore1AR"> 
	  <?php  echo $A2001C ; ?>
	</p>
	<p class="demiScore1AR2"> 
	  <?php  echo $A4001C ; ?>
<?php	  
	 }
	 else 
	 {
?>
	 <p class="demi1"> 
	  <?php  echo $clubA2001C; ?>
	</p>
	<p class="demiScore1"> 
	  <?php  echo $A2001C ; ?>
	</p>
<?php
	}
?>
	  
<!-- demi finale Equipe2 et score2-->
<?php if ($type==3)
	{
?>
	<p class="demi2AR"> 
  		<?php  echo $clubA2002C ; ?>
	</p>
	<p class="demiScore2AR"> 
  		<?php  echo $A2002C ; ?>
	</p>
	<p class="demiScore2AR2"> 
  		<?php  echo $A2004C ; ?>
	</p>
<?php	  
	 }
	 else 
	 {
?>
	 <p class="demi2"> 
	  <?php  echo $clubA2002C ; ?>
	</p>

	<p class="demiScore2"> 
	  <?php  echo $A2002C ; ?>
	</p>
<?php
}
?>
	<!-- finale Equipe1 score1 -->
	<p class="demi5"> 
	  <?php  echo $clubA1001C ; ?>
	</p>

	<p class="demiScore5"> 
	  <?php  echo $A1001; ?>
	</p>
	<!-- logo et nom du champion -->
	<p class="demiChamplogo"> 
		<?php logo ($bdcomiteClub, $champion, $bdd); ?>
	</p>
	
	<p class="demiChampnom"> 
	  <?php  echo $champion;   ?>
	</p>
	<!-- demi finale Equipe3 et score3-->
	<?php if ($type==3)
	{
?>	  
	<p class="demi3AR"> 
	  <?php  echo $clubA2003C; ?>
	</p>
	<p class="demiScore3AR"> 
	  <?php  echo $A2003C ; ?>
	</p>
	<p class="demiScore3AR2"> 
	  <?php  echo $A4003C ; ?>
	</p>	
<?php
	 }
	 else 
	 {
?>	
	<p class="demi3"> 
	  <?php  echo $clubA2003C ; ?>
	</p>
	<p class="demiScore3"> 
	  <?php  echo $A2003C ; ?>
	</p>
<?php
}
?>	
	<!-- finale Equipe1 score1 -->
	<p class="demi6"> 
	  <?php  echo $clubA1002 ; ?>
	</p>

	<p class="demiScore6"> 
	  <?php  echo $A1002 ; ?>
	</p>

	<!-- demi finale Equipe4 et score4-->
	<?php if ($type==3)
	{
?>	
	<p class="demi4AR"> 
  		<?php  echo $clubA2004; ?>
	</p>
	<p class="demiScore4AR"> 
  		<?php  echo $A2004C ; ?>
	</p>
	<p class="demiScore4AR2"> 
  		<?php  echo $A4004C ; ?>
	</p>
<?php
	 }
	 else 
	 {
?>		
	
	<p class="demi4"> 
	  <?php  echo $clubA2004C; ?>
	</p>
	<p class="demiScore4"> 
	  <?php  echo $A2004C ; ?>
	</p>
<?php
}
?>


<hr />

<?php	require("../../pub/pub1.php"); ?>

