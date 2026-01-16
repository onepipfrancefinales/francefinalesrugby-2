
<?php
  //r�cup�ration des valeurs des champs:

$comite = $_GET['comite'];  
  
//$equipe1 = $_GET['equipe1'];
//$equipe2 = $_GET['equipe2'];
$codeEquipe = $_GET['codeEquipe'];
//$codeEquipe1 = $_GET['codeEquipe1'];
//$codeEquipe2 = $_GET['codeEquipe2'];
$journee = $_GET['journee'];


$phpcomite_equipesResultat = "php".''.$comite.''."_equipesResultat";
$phpcomite= "php".''.$comite;
$phpcomite_equipes = "php".''.$comite.''."_equipes";
$phpcomite_matchs  = "php".''.$comite.''."_matchs";
$phpcomite_clubs  = "php".''.$comite.''."_clubs";
$phpcomite_divisions = "php".''.$comite.''."_divisions";
$phpcomite_journees  = "php".''.$comite.''."_journees"; 
$championnat = substr("$journee",0 , 3);
?>

<?php




if ( $comite == "mpy" or $comite == "pl" OR $comite == "br" OR $comite == "pr" OR $comite == "fed2" OR $comite == "fed3NE" OR $comite == "fed3GS") 
	require ("../../connexion6.php"); 

else
	require ("../../connexion6.php"); 


//affichage du championnat	


	$codeChampionnat = substr("$journee",-5,3);

$reponse = "SELECT nom
			FROM $phpcomite_divisions 
			WHERE id='$codeChampionnat'"; 

			$result = mysql_query($reponse) ; 
			while ($row = mysql_fetch_array($result) )
					{ 
					$nomChampionnat = $row[0]; 
					}
////////
					
	$reponse = "SELECT id_equipe_dom, id_equipe_ext
				FROM $phpcomite_matchs
				WHERE id_journee='$journee' and (id_equipe_dom='$codeEquipe' OR id_equipe_ext='$codeEquipe') "; 

			$result = mysql_query($reponse) ;
			while ($row = mysql_fetch_array($result) )
				{ 
				$domicile=$row[0];
				$exterieur= $row[1];	
//echo $domicile; 
//echo $exterieur;
//echo $codeEquipe;				
				}		
				if ($domicile == $codeEquipe)
					{
					$codeEquipe1=$codeEquipe;
					$codeEquipe2=$exterieur;
					} 
				else
					{
					$codeEquipe1=$domicile;
					$codeEquipe2=$codeEquipe;
					} 
			//		echo $codeEquipe;
//echo $codeEquipe1;
//echo $codeEquipe2;					
	/////////				
					

if (strlen($codeEquipe1) == 5)
	{					
					
			$reponse = "SELECT c.nom, m.id_equipe_ext, m.buts_dom, m.buts_ext, m.date_reelle 
			FROM $phpcomite_matchs m 
			INNER JOIN $phpcomite_clubs c ON c.id=m.id_equipe_dom 
			WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1'"; 

			$result = mysql_query($reponse) ; while ($row = mysql_fetch_array($result) )
			{ 
			$equipe1 = $row[0]; 
			$dateBrute = $row[4];
			$score1 = $row[2];
			$score2 = $row[3];

			 } ?>
		 
		 
			 <?php $reponse = "SELECT c.nom, m.id_equipe_ext, m.buts_dom, m.buts_ext 
			 FROM $phpcomite_matchs m 
			 INNER JOIN $phpcomite_clubs c ON c.id=m.id_equipe_ext 
			 WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1'"; 
			 
			 $result = mysql_query($reponse) ; 
			 while ($row = mysql_fetch_array($result) )
				 { 
			 $equipe2 = $row[0]; 
			 $codeEquipe2 = $row[1];
			 } 
		 
		 
			 //recuperation des bonus equipe1
			 
			 $reponse = "SELECT penaliteOff, penaliteDef
						 FROM $phpcomite_equipesResultat
						 WHERE id='$codeEquipe1'"; 
							 $result = mysql_query($reponse) ; 
							 while ($row = mysql_fetch_array($result) )
								 { 
								 $bonusOffEquipe1 = $row[0]; 
								 $bonusDefEquipe1 = $row[1];
								 } 
		 
		 
		 
			  //recuperation des bonus equipe2
			  
			  $reponse = "SELECT penaliteOff, penaliteDef
						  FROM $phpcomite_equipesResultat
						  WHERE id='$codeEquipe2'"; 
							 $result = mysql_query($reponse) ; 
							 while ($row = mysql_fetch_array($result) )
								 { 
								 $bonusOffEquipe2 = $row[0]; 
								 $bonusDefEquipe2 = $row[1];
								 } 
 
	}
else
	{
			$reponse = "SELECT c.nom, m.id_equipe_ext, m.buts_dom, m.buts_ext, m.date_reelle 
			FROM $phpcomite_matchs m 
			INNER JOIN $phpcomite_clubs c ON c.id=m.id_equipe_dom -900000
			WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1'"; 

			$result = mysql_query($reponse) ; while ($row = mysql_fetch_array($result) )
			{ 
			$equipe1 = $row[0]; 
			$dateBrute = $row[4];
			$score1 = $row[2];
			$score2 = $row[3];

			 } ?>
		 
		 
			 <?php $reponse = "SELECT c.nom, m.id_equipe_ext, m.buts_dom, m.buts_ext 
			 FROM $phpcomite_matchs m 
			 INNER JOIN $phpcomite_clubs c ON c.id=m.id_equipe_ext -900000
			 WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1'"; 
			 
			 $result = mysql_query($reponse) ; 
			 while ($row = mysql_fetch_array($result) )
				 { 
			 $equipe2 = $row[0]; 
			 $codeEquipe2 = $row[1];
			 } 
		 
		 
			 //recuperation des bonus equipe1
			 
			 $reponse = "SELECT penaliteOff, penaliteDef
						 FROM $phpcomite_equipesResultat
						 WHERE id='$codeEquipe1'"; 
							 $result = mysql_query($reponse) ; 
							 while ($row = mysql_fetch_array($result) )
								 { 
								 $bonusOffEquipe1 = $row[0]; 
								 $bonusDefEquipe1 = $row[1];
								 } 
		 
		 
		 
			  //recuperation des bonus equipe2
			  
			  $reponse = "SELECT penaliteOff, penaliteDef
						  FROM $phpcomite_equipesResultat
						  WHERE id='$codeEquipe2'"; 
							 $result = mysql_query($reponse) ; 
							 while ($row = mysql_fetch_array($result) )
								 { 
								 $bonusOffEquipe2 = $row[0]; 
								 $bonusDefEquipe2 = $row[1];
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
    <td class="h22"> 
    France Finales Rugby
    </td>
  </tr>
  <tr> 
    <td class="h12">
	Controles des infos collect&eacutees<br />
	  <?php echo $nomChampionnat; ?>
	  
    </td>
  </tr>
</table>
<?php
include ("toutesJournees.php"); 
?>

<?php 

$numeroJournee = substr("$journee", -2);
?>
<p class="equipe">
<font face="Arial, Helvetica, sans-serif" color="#FF0000" size="3"><b>
Les r&eacutesultats ont d&eacuteja &eacutete saisis par votre adversaire du jour.
vous pouvez les confirmer ou nous signaler toutes erreurs.
</b></font></i></a></div>
<?php setlocale(LC_TIME, 'french'); 
$date=new DateTime($dateBrute); 
//echo "Dimanche".' '.$date->format('d M Y'); 
$numeroJournee = substr("$journee", -2);
?><br>

<?php //echo $numeroJournee.''."me journée"; ?>
</p>

<h3> 
  SCORE DE LA RENCONTRE</h3> 
  
<table width="100%" border="0">
  <tr> 
    <td class="equipe"  width="80%" height="19"> 
        <?php echo $equipe1; ?>
    </td>
    <td class="equipe" width="20%" height="19">
      <?php echo $score1; ?>
    </td>
    <td width="20%" height="19">&nbsp; </td>
  </tr>
  <tr> 
    <td class="equipe" width="80%"> 
        <?php echo $equipe2; ?>
    </td>
    <td class="equipe" width="20%">
      <?php echo $score2; ?>
    </td>
    <td width="20%">&nbsp; </td>
  </tr>
</table>



<h3>BONUS</h3> 
  
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
		elseif ($bonusOffEquipe1 >= 1 AND $bonusDefEquipe1 == 0) 
			echo "Bonus Offensif";
		elseif ($bonusOffEquipe1 == 0 AND $bonusDefEquipe1 >= 1)
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
		elseif ($bonusOffEquipe2 >= 1 AND $bonusDefEquipe2 == 0) 
			echo "Bonus Offensif";
		elseif ($bonusOffEquipe2 == 0 AND $bonusDefEquipe2 >= 1)
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
<p class="tab4"> 
<a href="http://francefinalesrugby.franceserv.com/smart/<?php echo $comite; ?>/171.php?champion=<?php echo $codeChampionnat; ?>">Confirmer ces r&eacutesultats et <br />accèder au nouveau classement</a>
</p>


<Hr/>

<p class="tab3">
<a href="mailto:francefinalesrugby@free.fr" >signaler une erreur</a> 


</p>
 </body>
</html>
 
 
