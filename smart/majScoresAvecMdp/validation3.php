
<?php
  //r�cup�ration des valeurs des champs:
$bddComite = $_GET['bddComite']; 
$comite = $_GET['comite'];  
$maxJournee=$_GET['maxJournee'];  
//$equipe1 = $_GET['equipe1'];
//$equipe2 = $_GET['equipe2'];
$codeEquipe = $_GET['codeEquipe'];
//$codeEquipe1 = $_GET['codeEquipe1'];
//$codeEquipe2 = $_GET['codeEquipe2'];
$journee = $_GET['journee'];
$jour = substr("$journee",-2);
$J="J".''.$jour;

$phpcomite_equipesResultat = "php".''.$bddComite.''."_equipesresultat";
$phpcomite= "php".''.$bddComite;
$phpcomite_equipes = "php".''.$bddComite.''."_equipes";
$phpcomite_matchs  = "php".''.$bddComite.''."_matchs";
$phpcomite_clubs  = "php".''.$bddComite.''."_clubs";
$phpcomite_divisions = "php".''.$bddComite.''."_divisions";
$phpcomite_journees  = "php".''.$bddComite.''."_journees"; 
$championnat = substr("$journee",0 , 6);

?>

<?php

require ("../../connect/connexion6.php"); 

require 'fonctions.php';
nomChampionnat ($codeEquipe, $journee, $bddComite, $bdd);
//affichage du championnat	
	$codeChampionnat = (substr("$journee",0,6));
	$codeChampionnatAffichage = (substr("$journee",0,5)*10)+1;
					
	$result =$bdd->query( "SELECT id_equipe_dom, id_equipe_ext
				FROM $phpcomite_matchs
				WHERE id_journee='$journee' 
				and (id_equipe_dom='$codeEquipe' 
				OR id_equipe_ext='$codeEquipe') "); 

	while ($row = $result->fetch() )
		{ 
		$domicile=$row[0];
		$exterieur= $row[1];		
		}		
				
	$domicile == $codeEquipe ? $codeEquipe1=$codeEquipe: $codeEquipe1=$domicile;
	$domicile == $codeEquipe ? $codeEquipe2=$exterieur : $codeEquipe2=$codeEquipe;
					
				

//******   Traitement des bonus equipes Une *******
if (strlen($codeEquipe1) == 7)
	{					
			
	$result =$bdd->query( "SELECT c.nom, m.id_equipe_ext, m.buts_dom, m.buts_ext, m.date_reelle 
						FROM $phpcomite_matchs m 
						INNER JOIN $phpcomite_clubs c ON c.id=m.id_equipe_dom 
						WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1'"); 

	while ($row = $result->fetch() )
			{ 
			$equipe1 = $row[0]; 
			$dateBrute = $row[4];
			$score1 = $row[2];
			$score2 = $row[3];
			} 
	
	
	$result =$bdd->query( "	SELECT c.nom, m.id_equipe_ext, m.buts_dom, m.buts_ext 
			 				FROM $phpcomite_matchs m 
			 				INNER JOIN $phpcomite_clubs c ON c.id=m.id_equipe_ext 
			 				WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1'"); 
			 
	while ($row = $result->fetch())
			{ 
			$equipe2 = $row[0]; 
			//$codeEquipe2 = $row[1];
			} 
		 
							 
	//recuperation des bonus equipe1
				 
	 $result =$bdd->query( "SELECT $J
						 FROM $phpcomite_equipesResultat
						 WHERE id='$codeEquipe1'"); 

	 while ($row = $result->fetch())
		{ 
		$totalBonusEquipe1 = $row[0]; 
		} 
			 
	//recuperation des bonus equipe2
			  
	 $result =$bdd->query( "SELECT $J
						  FROM $phpcomite_equipesResultat
						  WHERE id='$codeEquipe2'"); 

	 while ($row = $result->fetch())
		{ 
		$totalBonusEquipe2 = $row[0]; 
		} 
	
	}
else
//******   Traitement des bonus equipes Deux *******
	{
	 
	  $result =$bdd->query( "SELECT c.nom, m.id_equipe_ext, m.buts_dom, m.buts_ext, m.date_reelle 
							 FROM $phpcomite_matchs m 
							 INNER JOIN $phpcomite_clubs c ON c.id=m.id_equipe_dom -90000000
							 WHERE id_journee='$journee'
							 AND id_equipe_dom='$codeEquipe1'"); 
	
	  while ($row = $result->fetch())
			{ 
			$equipe1 = $row[0]; 
			$dateBrute = $row[4];
			$score1 = $row[2];
			$score2 = $row[3];
			} 


	  $result =$bdd->query( "SELECT c.nom, m.id_equipe_ext, m.buts_dom, m.buts_ext 
			 FROM $phpcomite_matchs m 
			 INNER JOIN $phpcomite_clubs c ON c.id=m.id_equipe_ext -90000000
			 WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1'"); 
			 
	  while ($row = $result->fetch())
				{ 
				$equipe2 = $row[0]; 
				$codeEquipe2 = $row[1];
				} 
		 	 
//r�cup�ration des bonus equipe1
			 
	 $result =$bdd->query( "SELECT $J
						 FROM $phpcomite_equipesResultat
						 WHERE id='$codeEquipe1'"); 
							 
	 while ($row = $result->fetch())
			{ 
			$totalBonusEquipe1 = $row[0]; 
			} 
		 
//r�cup�ration des bonus equipe2
			  
	$result =$bdd->query( "SELECT $J
						  FROM $phpcomite_equipesResultat
						  WHERE id='$codeEquipe2'"); 
				
	while ($row = $result->fetch())
			{ 
			$totalBonusEquipe2 = $row[0]; 
			} 
	}
	


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
    <td class="h22">France Finales Rugby </td>
  </tr>
  <tr> 
    <td class="h12"><?php echo $nomChampionnat; ?></td>
  </tr>
</table>
<?php
include ("toutesJournees.php"); 

$numeroJournee = substr("$journee", -2);
?>
<p class="equipe"> <font face="Arial, Helvetica, sans-serif" color="#FF0000" size="3"><b> 
  Cette journée a déjà été renseignée. vous 
  pouvez confirmer ou signaler une erreur. </b></font><br/>
<?php 
if (isset($dateBrute)) $dateBrute = $dateBrute;else $dateBrute = $date ;
setlocale(LC_TIME, 'french'); 
$date=new DateTime($dateBrute); 
echo "Dimanche".' '.$date->format('d M Y'); 
$numeroJournee = substr("$journee", -2);
echo "<br>";
echo $numeroJournee.''."me journée"; ?>
</p>

<h3> 
  SCORE DE LA RENCONTRE</h3> 
  
<table width="100%" border="0">
  <tr> 
    <td class="equipe"  width="80%" height="19"> 
      <?php echo $equipe1; 
	  if (strlen($codeEquipe) == 8){
		?>
		  <id class="equipeII"><?php echo "( Equipe II )"; ?>	</id>
		<?php
		}
	  else{
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
		
     if (strlen($codeEquipe) == 8){
		?>
		  <id class="equipeII"><?php	echo "( Equipe II )";?>	</id>
		<?php
		}
	 else{
		  echo "";
		}
		?>
    </td>
    <td class="equipe" width="20%"><?php echo $score2; ?> </td>
    <td width="20%">&nbsp; </td>
  </tr>
</table>

<h3>BONUS</h3> 
  
<table width="100%" border="0">
  <tr valign="top"> 
    <td class="equipe"  width="49%" height="19"> <?php echo $equipe1;   ?>  <br> </td>
    <td class="equipe" width="51%" height="19"> 
      <?php 
		if (isset($totalBonusEquipe1)) $totalBonusEquipe1 = $totalBonusEquipe1; else $totalBonusEquipe1=0;
		if ($totalBonusEquipe1 == 0)
			{
			echo "Non renseigné";	
			//echo "Pas de bonus";
			}
		elseif ($totalBonusEquipe1 == 2)
			{
			echo "Non renseigné";	
			//echo "Bonus Offensif et Défensif" ; 
			
			}
		elseif ($totalBonusEquipe1 == 1 AND ($score2-$score1)<=7 AND ($score2-$score1)>0)
			{
			echo "Non renseigné";	
			//echo "Bonus Défensif";
			}
		else
			{
			echo "Non renseigné";	
		 	//echo "Bonus Offensif" ; 
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
	  if (isset($totalBonusEquipe2)) $totalBonusEquipe2=$totalBonusEquipe2; else $totalBonusEquipe2=0;
		if ($totalBonusEquipe2 == 0)
			{
			echo "Non renseigné";
		//	echo "Pas de bonus";
			}
		elseif ($totalBonusEquipe2 == 2)
			{
			echo "Non renseigné";
		//	echo "Bonus Offensif et Défensif" ;
			}
		elseif ($totalBonusEquipe2 == 1 AND ($score1-$score2)<=7 AND ($score1-$score2)>0)
			{
			echo "Non renseigné";
		//	echo "Bonus Défensif";
			}
		else
			{
			echo "Non renseigné";
		 //	echo "Bonus Offensif" ; 
			}
/*

	if ($bddComite== 'fed3ne' OR $bddComite=='pro' OR $bddComite== 'fed3NE')
	{	
	$champ = substr($journee,0,5)*10;	
	}
	else
	$champ = substr($journee,0,6);
	*/



	if (substr($championnat, 2, 1) == 1)
	$poule = substr($championnat, -1);
  else
	$poule = substr($championnat, -1) + 8;
	
	if (substr($championnat, 3, 1) == 1) {
		$champ = 991161;
	  } else {
		$champ = 991261;
	  }



			
			?>
    </td>
  </tr>
</table>
<p class="tab4"> 
	<!--
<a href="../171.php?comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&champ=<?php echo $champ; ?>">Confirmer ces résultats et <br />accèder au nouveau classement</a>
-->
<a href="../171.php?champ=<?php echo $champ; ?>&comite=fed3NE&bddComite=fed3NE&comite2=fed3GS&ancre=<?php echo "#".$poule; ?>">Confirmer ces résultats et <br />accèder au nouveau classement</a>


</p>


<Hr/>

<p class="tab3">
<a href="mailto:francefinalesrugby@free.fr" >signaler une erreur</a> 


</p>
 </body>
</html>
 
 
