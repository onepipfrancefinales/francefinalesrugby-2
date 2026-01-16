<?php 
$bddComite=$_GET['bddComite'];
$codeEquipe=$_GET['codeEquipe']; 
$comite=$_GET['comite']; 
$journee=$_GET['journee'];
$maxJournee=$_GET['maxJournee'];
if (isset($_GET['score1'])) $score1=$_GET['score1'];else $score1="";
if (isset($_GET['score2'])) $score2=$_GET['score2'];else $score2="";

require ("../../connect/connexion6.php");
require 'fonctions.php';
nomChampionnat ($codeEquipe, $journee, $bddComite, $bdd);

$php_journees ="php".$bddComite."_journees";
$reponse = $bdd->query("	
				SELECT date_prevue
				FROM $php_journees
				WHERE id=$journee
				 "); 
										
	 while ($row = $reponse->fetch() )
		{ 
		 $journeeDeChampionnat = $row[0];
		}

$journeeDeChampionnatUS = substr($journeeDeChampionnat,0,10);
//$journeeDeChampionnatFR=new DateTime(); 
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
$date = date_create($journeeDeChampionnatUS);
$journeeDeChampionnatFR = date_format($date, 'd M Y');
//$numeroJournee = substr("$journee", -2);

/*
echo "journee de championnat : ".$journeeDeChampionnat;echo "<br />";
echo "journee de championnat US : ".$journeeDeChampionnatUS;echo "<br />";
echo strftime('%A %d %B %Y %I:%M:%S'). '<br>';
echo "codeEquipe : ".$codeEquipe;echo "<br />";
echo "comite : ".$comite;echo "<br />";
echo "journee : ".$journee;echo "<br />";
echo "journee max : ".$maxJournee;echo "<br />";
echo "journee de championnat FR : ".$journeeDeChampionnatFR;echo "<br />";
*/
?>


<!DOCTYPE HTML>
<html lang="fr">
<head>
  <title>Untitled Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="majScore.css">
</head>

<body>
<table align="center" border="1" width="95%">
  <tbody>
    <tr>
      <td class="h22">France Finales Rugby</td>
    </tr>
    <tr>
      <td class="h12"> Mise &agrave; jours des résultats <br /> <?php echo $nomChampionnat;?></td>
    </tr>
  </tbody>
</table>

<?php

/*
echo $codeEquipe;echo "<br />";
echo $journee;echo "<br />";
echo $bddComite;echo "<br />";
*/
//if (isset($codeEquipe1)) $codeEquipe1 = $codeEquipe1; 
//if (isset($codeEquipe2)) $codeEquipe2 = $codeEquipe2; 

if (strlen($codeEquipe) == 7)			
	{ 	
	affichageEquipeUne($journee, $codeEquipe, $bddComite, $bdd)	;						
	}
else
	{	
	affichageEquipeDeux($journee, $codeEquipe, $bddComite, $bdd)	;	
	}								
									
 

//require ("toutesJourneesRetour.php");
 
require ("toutesJournees.php"); 

$exempt1=substr($codeEquipe1,-3, 1);
//echo $exempt1;

$exempt2=substr($codeEquipe2,-3, 1);
//echo $exempt2;

?>

<p class="equipe">


<?php 
setlocale(LC_TIME, 'french'); 
$date=new DateTime(); 
echo "Dimanche".' '.$journeeDeChampionnatFR; 
$numeroJournee = substr("$journee", -2);

echo "<br>";
echo $numeroJournee.''."me journée"; 
 
$dateDuJour = date("d M Y");
$dateDuJourPlusUn = date("d M Y", strtotime("+2 day"));
$dateDuJourMoinsUn = date("d M Y", strtotime("-2 day"));

echo "<br>";
/*
echo $dateDuJourMoinsUn;echo "<br>";
echo $dateDuJour;echo "<br>";
echo $dateDuJourPlusUn;echo "<br>";
echo "journeeDeChampionnatFR : ".$journeeDeChampionnatFR;echo "<br>";
*/
?>

</p>
<?php

if (($journeeDeChampionnatFR >= $dateDuJourMoinsUn) OR
			($journeeDeChampionnatFR == $dateDuJour)   OR 
				($journeeDeChampionnatFR <= $dateDuJourPlusUn))

//if (  $date->format('d M Y') == $dateDuJourMoinsUn  OR   $date->format('d M Y') == $dateDuJour    OR  $date->format('d M Y') == $dateDuJourPlusUn  )
//if ( $journeeDeChampionnatFR == $dateDuJour)
//if ( $dateDuJour == $dateDuJour)	
	{
	?>
		<form id="form" name="form" method="post" action="validation.php?equipe1=<?php echo $equipe1;?>&equipe2=<?php echo $equipe2;?>&codeEquipe=<?php echo $codeEquipe;?>&codeEquipe1=<?php echo $codeEquipe1;?>&codeEquipe2=<?php echo $codeEquipe2; ?>&journee=<?php echo $journee; ?>&comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&nomChampionnat=<?php echo $nomChampionnat; ?>&maxJournee=<?php echo $maxJournee;?>">
	<?php
	}
	
	else
	{
	
	?>
		<form id="form" name="form" method="post" action="erreurJournee.php?codeEquipe=<?php echo $codeEquipe; ?>&comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&journee=<?php echo $journee; ?>&nomChampionnat=<?php echo $nomChampionnat; ?>&maxJournee=<?php echo $maxJournee;?>">
	<?php
	}
	?>

 <fieldset> <legend > Score de la
rencontre</legend>

  <table border="0" width="100%">

    <tbody>
      <tr>
        <td class="equipe" width="80%">
		<?php echo $equipe1; 
				
				if (strlen($codeEquipe) == 8)
				{
					?>
					<id class="equipeII">
						<?php	echo "( Equipe II )";?>
					</id>
					<?php
				}
				else
				{
					echo "";
				}
		?>
		</td>
		<?php 
		if ($exempt1 == 5 OR $exempt2 ==5 )
		{
		?>
        <td class="equipe" width="20%">  </td>
		<?php
		}
		else
		{
		?>
		<td class="equipe" width="20%"> <input id="input" name="score1" value="" size="3" type="text" required> </td>
		 <?php
		}
		?>
	 </tr>

      <tr>
        <td class="equipe" width="80%">
		
		<?php echo $equipe2; 
			if (strlen($codeEquipe) == 8)
				{
					?>
					<id class="equipeII">
						<?php echo "( Equipe II )";	?>
					</id>
					<?php
				}
				else
				{
					echo "";
				}

		?>
		</td>
<?php 
		if ($exempt1 ==5 OR $exempt2==5 )
		{
		?>
        <td class="equipe" width="20%">  </td>
		<?php
		}
		else
		{
		?>
		<td class="equipe" width="20%"> <input id="input" name="score2" value="" size="3" type="text" required> </td>
		 <?php
		}
		?>
		
      </tr>

    </tbody>
  </table>

  </fieldset> <fieldset > <legend > Bonus Offensif (si nécessaire)</legend> 
  <table border="0" height="36" width="100%">
    <tbody>
      <tr>
        <td class="equipe" width="80%">
		<?php echo $equipe1; ?> </td>
		<?php 
		if ($exempt1 ==5 OR $exempt2==5 ){
		?>
        <td class="equipe" width="20%">  </td>
		<?php
		}
		else{
		?>
		 <td width="20%"> <input name="bonusOffEquipe1" value="1" type="checkbox" > </td><?php
		}
		?>
		       
      </tr>

      <tr>
        <td class="equipe" width="80%">
			<?php echo $equipe2;?> 
		</td>
		
		<?php 
		if ($exempt1 ==5 OR $exempt2==5 ){
		?>
        <td class="equipe" width="20%">  </td>
		<?php
		}
		else{
		?>
		 <td width="20%">  <input name="bonusOffEquipe2" value="1" type="checkbox"> </td>
		 <?php
		}
		?>
		
       
      </tr>

    </tbody>
  </table>

  </fieldset> <fieldset id="test" > <legend> Bonus Défensif</legend> 
  <table border="0" height="36" width="100%">
      
        
      <td class="equipe" width="80%"> Les bonus défensifs sont gérés 
        automatiquement </td>
      
  </table>

  </fieldset>
<?php 
		if ($exempt1 ==5 OR $exempt2==5 ){
		?>
          <td class="equipe" width="20%">  </td>
		<?php
		}
		else{
		?>
		
  <p align="center"> 
    <input id="valider" name="Submit2" value="Valider" type="submit">
    <?php
		}
		?>
  </p>
</form>
<hr />
<table width="142" align="center">
  <tbody> 
  <tr> 
    <td bgcolor="#CCCCCC"> 
      <div align="center"><a href="../sommaire.php"><font face="Arial, Helvetica, sans-serif" size="3" color="#000000">Retour 
        &agrave; l'appli</font></a> </div>
    </td>
  </tr>
  </tbody> 
</table>
</body>
</html>
