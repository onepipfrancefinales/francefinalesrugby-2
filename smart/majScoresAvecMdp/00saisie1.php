<?php 
$codeEquipe=$_GET['codeEquipe']; 
$comite=$_GET['comite']; 
$journee=$_GET['journee'];
$maxJournee=$_GET['maxJournee'];
//$numeroJournee = substr("$journee", -2);

//echo "codeEquipe : ".$codeEquipe;echo "<br />";
//echo "comite : ".$comite;echo "<br />";
//echo "journee : ".$journee;echo "<br />";
//echo "journee max : ".$maxJournee;echo "<br />";

require ("../../connect/connexion6.php");
require 'fonctions.php';
nomChampionnat ($codeEquipe, $journee, $comite, $bdd);


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


//echo $codeEquipe;echo "<br />";
//echo $journee;echo "<br />";
//echo $phpcomite_matchs;echo "<br />";

//if (isset($codeEquipe1)) $codeEquipe1 = $codeEquipe1; 
//if (isset($codeEquipe2)) $codeEquipe2 = $codeEquipe2; 

if (strlen($codeEquipe) == 7)			
	{ 	
	affichageEquipeUne($journee, $codeEquipe, $comite, $bdd)	;						
	}
else
	{	
	affichageEquipeDeux($journee, $codeEquipe, $comite, $bdd)	;	
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
$date=new DateTime($dateBrute); 
echo "Dimanche".' '.$date->format('d M Y'); 
$numeroJournee = substr("$journee", -2);

echo "<br>";
echo $numeroJournee.''."me journée"; 
 
$dateDuJour = date("d M Y");
$dateDuJourPlusUn = date("d M Y", strtotime("+1 day"));
$dateDuJourMoinsUn = date("d M Y", strtotime("-1 day"));
//echo $dateDuJourPlusUn;
//echo $dateDuJourMoinsUn;
?>

</p>
<?php
//if (  $date->format('d M Y') == $dateDuJourMoinsUn  OR   $date->format('d M Y') == $dateDuJour    OR  $date->format('d M Y') == $dateDuJourPlusUn  )
if ( $dateDuJour == $dateDuJour    )
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
