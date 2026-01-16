<?php
//r�cup�ration des valeurs des champs:

$bddComite = $_GET['bddComite']; 
$comite = $_GET['comite'];   
$maxJournee=$_GET['maxJournee'];
$equipe1 = $_GET['equipe1'];
$equipe2 = $_GET['equipe2'];
$codeEquipe = $_GET['codeEquipe'];
$codeEquipe1 = $_GET['codeEquipe1'];
$codeEquipe2 = $_GET['codeEquipe2'];
$journee = $_GET['journee'];
$nomChampionnat = $_GET['nomChampionnat'];

$score1 = $_POST['score1'];
$score2 = $_POST['score2'];
if (isset($_POST['bonusOffEquipe1'])) $bonusOffEquipe1 = $_POST['bonusOffEquipe1']; else $bonusOffEquipe1=0;
if (isset($_POST['bonusOffEquipe2'])) $bonusOffEquipe2 = $_POST['bonusOffEquipe2']; else $bonusOffEquipe2=0;
if (isset($_POST['bonusDefEquipe1'])) $bonusDefEquipe1 = $_POST['bonusDefEquipe1']; else $bonusDefEquipe1=0;
if (isset($_POST['bonusDefEquipe2'])) $bonusDefEquipe2 = $_POST['bonusDefEquipe2']; else $bonusDefEquipe2=0;


$phpcomite= "php".''.$comite;
$phpcomite_equipes = "php".''.$comite.''."_equipes";
$phpcomite_matchs  = "php".''.$comite.''."_matchs";
$championnat = substr("$journee",0 , 6);
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="majScore.css">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
<table width="100%" border="1" align="center">
  <tr> 
    <td class="h22"> France Finales Rugby </td>
  </tr>
  <tr> 
    <td class="h12">Validation des infos saisies<br /> <?php echo $nomChampionnat; ?>  </td>
  </tr>
</table>
<br>
<h3> 
  SCORE DE LA RENCONTRE</h3> 
<br>
<table width="100%" border="0">
  <tr> 
    <td class="equipe"  width="80%" height="19"> 
        <?php echo $equipe1; 
		if (strlen($codeEquipe) == 8)
				{
					?>
					<id class="equipeII"><?php echo "( Equipe II )";	?></id>
					<?php
				}
				else
				{
					echo "";
				}
	
		?>
    </td>
    <td class="equipe" width="20%" height="19">
      <?php echo $score1; ?>
    </td>
    <td width="20%" height="19">&nbsp; </td>
  </tr>
  <tr> 
    <td class="equipe" width="80%"> 
        <?php echo $equipe2;
if (strlen($codeEquipe) == 8)
				{
					?>
					<id class="equipeII">
						<?php
						echo "( Equipe II )";
						?>
					</id>
					<?php
				}
				else
				{
					echo "";
				}
		?>
    </td>
    <td class="equipe" width="20%">
      <?php echo $score2; ?>
    </td>
    <td width="20%">&nbsp; </td>
  </tr>
</table>


<br />
<h3>BONUS</h3> 

<?php
//echo $score1 ;
//echo $score2 ;
//echo $bonusOffEquipe1 ;
//echo $bonusOffEquipe2 ;

//   *************    Bonus offensif      ********************
if ($bonusOffEquipe1 + $bonusOffEquipe2 == 2)
		{
		?>	
			<meta http-equiv="refresh" content="0; URL=erreurBonusOff.php?codeEquipe=<?php echo $codeEquipe; ?>&equipe1=<?php echo $equipe1; ?>&equipe2=<?php echo $equipe2; ?>&codeEquipe1=<?php echo $codeEquipe1; ?>&codeEquipe2=<?php echo $codeEquipe2; ?>&journee=<?php echo $journee; ?>&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&score1=<?php echo $score1; ?>&score2=<?php echo $score2; ?>">
		<?php	
 		}
elseif ($bonusOffEquipe1 == 1)
		{
		$bonusOffEquipe1 = 1;
		$bonusOffEquipe2 = 0;
	//	echo $equipe1.' '." bonus offensif";
		} 
elseif ($bonusOffEquipe2 == 1)	
		{
		$bonusOffEquipe1 = 0;
		$bonusOffEquipe2 = 1;
	//	echo $equipe2 .' '." bonus offensif";
		}
		
	
	
	
	
	
?>

<?php
//   *************      Bonus D�fensif      ********************
if ($score1 < $score2 and ($score2 - $score1 <= 7))
			{
			$bonusDefEquipe1 = 1;
		//	echo $equipe1.''." bonus defensif "  ;
			}			
	elseif($score2 < $score1 and ($score1 - $score2 <= 7))
			{
			$bonusDefEquipe2 = 1;
		//	echo $equipe2.''." bonus defensif "  ;
			}
	else
			{
			$bonusDefEquipe1 = 0;
			$bonusDefEquipe2 = 0;
			//echo "aucun bonus defensif";
			}
?>
<?php



 
//$bonusEquipe1 = $bonusOffEquipe1 + $bonusDefEquipe1;
//$bonusEquipe2 = $bonusOffEquipe2 + $bonusDefEquipe2;

?>

<p> 
  
<table width="100%" border="0">
  <tr valign="top"> 
    <td class="equipe"  width="49%" height="19"> 
      <?php echo $equipe1; ?>
      <br>
     
    </td>
    <td class="equipe" width="51%" height="19"> 
      <?php 
		if ($bonusOffEquipe1 + $bonusDefEquipe1 == 0)
			echo "Pas de bonus";
		elseif ($bonusOffEquipe1 == 1 AND $bonusDefEquipe1 == 0) 
			echo "Bonus Offensif";
		elseif ($bonusOffEquipe1 == 0 AND $bonusDefEquipe1 == 1)
			echo "Bonus Défensif";
		elseif($bonusOffEquipe1 + $bonusDefEquipe1 == 2)
		{
		 	echo "Bonus Offensif" ; ?>
      <br />
      <?php echo "Bonus  Défensif";
			}
			?>
    </td>
  </tr>
</table>
<hr />
<table width="100%" border="0">
  <tr valign="top"> 
    <td class="equipe" width="49%"> 
      <?php echo $equipe2; ?>
      <br>
     
    </td>
    <td class="equipe" width="51%"> 
      <?php 
		if ($bonusOffEquipe2 + $bonusDefEquipe2 == 0)
			echo "Pas de bonus";
		elseif ($bonusOffEquipe2 == 1 AND $bonusDefEquipe2 == 0) 
			echo "Bonus Offensif";
		elseif ($bonusOffEquipe2 == 0 AND $bonusDefEquipe2 == 1)
			echo "Bonus Défensif";
		elseif($bonusOffEquipe2 + $bonusDefEquipe2 == 2)
		{
		 	echo "Bonus Offensif" ; ?>
      <br />
      <?php echo "Bonus  Défensif";
			}
			?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<?php
if (strlen($codeEquipe) == 7)
	{
	$codeEquipe1 = $codeEquipe1;
	$codeEquipe2 = $codeEquipe2;
	}
	else
	{
	$codeEquipe1 = $codeEquipe1 + 90000000;
	$codeEquipe2 = $codeEquipe2 + 90000000;	
		
	}

?>

<p class="tab4"> 
<a href="traitement.php?comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&journee=<?php echo $journee; ?>&codeEquipe1=<?php echo $codeEquipe1; ?>&codeEquipe2=<?php echo $codeEquipe2; ?>&score1=<?php echo $score1; ?>&score2=<?php echo $score2; ?>&bonusDefEquipe1=<?php echo $bonusDefEquipe1; ?>&bonusDefEquipe2=<?php echo $bonusDefEquipe2; ?>&bonusOffEquipe1=<?php echo $bonusOffEquipe1; ?>&bonusOffEquipe2=<?php echo $bonusOffEquipe2; ?>">Confirmer et accèder <br />au nouveau classement</a>
</p>

<p class="tab3">
<a href="saisie.php?comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&journee=<?php echo $journee ; ?>&codeEquipe=<?php echo $codeEquipe; ?>&maxJournee=<?php echo $maxJournee; ?>&score1=<?php echo $score1; ?>&score2=<?php echo $score2; ?>">Retour pour modif</a>
 
</p>
 </body>
</html>
 
 
