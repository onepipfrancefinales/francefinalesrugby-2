<?php 

//$codeEquipe1=27045; 
//$comite="lm"; 
//$journee="17118"; 

$codeEquipe1=$_GET['codeEquipe1']; 
$comite=$_GET['comite']; 
$journee=$_GET['journee'];


$phpcomite_matchs = "php".''.$comite.''."_matchs"; 
$phpcomite_clubs = "php".''.$comite.''."_clubs"; ?>


<!DOCTYPE HTML>
<html lang="fr">
<head>
  <title>Untitled Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="majScore.css">
</head>

<body>
<table align="center" border="1" width="100%">
  <tbody>
    <tr>
      <td class="h22">
      France Finales Rugby
      </td>
    </tr>
    <tr>
      <td class="h12">
      Mise à jours des résultats
      </td>
    </tr>
  </tbody>
</table>

<?php if ( $comite == "mpy" or $comite == "pl" OR $comite == "br" OR $comite == "pr" OR $comite == "fed2" OR $comite == "fed3NE" OR $comite == "fed3GS") 
	require ("../../connexion6.php"); 
else 
	require ("../../connexion6.php"); 

$reponseTest = "SELECT buts_dom, buts_ext
FROM $phpcomite_matchs
WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1'"; 
		$result = mysql_query($reponse) ; 
		while ($row = mysql_fetch_array($result) )
				{ 
				$score1 = $row[0]; 
				$score2 = $row[1];
				 }
				 
	if (($score1 + $score2) !=0) 
		{
		?>	
		
		<meta http-equiv="refresh" content="0; URL=http://francefinalesrugby.franceserv.com/smart/SMS/saisie2.php?page=championnat&action=generer&champ=<?php echo $championnat; ?>">
		
		<?php	
		}
		
?>









<?php $reponse = "SELECT c.nom, m.id_equipe_ext, m.buts_dom, m.buts_ext, m.date_reelle 
FROM $phpcomite_matchs m 
INNER JOIN $phpcomite_clubs c ON c.id=m.id_equipe_dom 
WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1'"; 

$result = mysql_query($reponse) ; while ($row = mysql_fetch_array($result) )
{ 
$equipe1 = $row[0]; 
$dateBrute = $row[4];
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
 } ?>

<?php $requete = mysql_query( " SELECT buts_dom, buts_ext 
FROM $phpcomite_matchs m 
INNER JOIN $phpcomite_clubs c ON c.id=m.id_equipe_ext 
WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1' " ) ; 

//affichage des donn�es: 

if( $result = mysql_fetch_object( $requete ) )
	{ 
	} 
mysql_close(); ?>

<p class="equipe">
<?php setlocale(LC_TIME, 'french'); 
$date=new DateTime($dateBrute); 

echo "Dimanche".' '.$date->format('d M Y'); 
$numeroJournee = substr("$journee", -2);


?><br>

<?php echo $numeroJournee.''."me journée"; ?>
</p>

<form id="form" name="form" method="post" action="validation.php?equipe1=<?php echo $equipe1; ?>&equipe2=<?php echo $equipe2; ?>&codeEquipe1=<?php echo $codeEquipe1; ?>&codeEquipe2=<?php echo $codeEquipe2; ?>&journee=<?php echo $journee; ?>&comite=<?php echo $comite; ?>">
  <fieldset> <legend id="legend"> Score de la
rencontre</legend>

  <table border="0" width="100%">

    <tbody>
      <tr>
        <td class="equipe" width="70%"><?php echo $equipe1; ?> </td>
        <td class="equipe" width="30%"> <input id="input" name="score1" value="<?php echo($result->buts_dom) ;?>" size="3" type="text" required> </td>
      </tr>

      <tr>
        <td class="equipe" width="70%"><?php echo $equipe2; ?> </td>
        <td class="equipe" width="30%"> <input id="input" name="score2" value="<?php echo($result->buts_ext) ;?>" size="3" type="text" required> </td>
      </tr>

    </tbody>
  </table>

  </fieldset>
  <fieldset> <legend id="legend"> Bonus Offensif
(si nécessaire)</legend>

  
  <table border="0" height="36" width="100%">

    <tbody>

      <tr>
        <td class="equipe" width="80%">
		<?php echo $equipe1; ?> </td>
        <td width="20%"> 
		<input name="bonusOffEquipe1" value="1" type="checkbox" > </td>
      </tr>

      <tr>
        <td class="equipe" width="80%">
			<?php echo $equipe2;?> 
		</td>
        <td width="20%"> 
        <input name="bonusOffEquipe2" value="1" type="checkbox"> </td>
      </tr>

    </tbody>
  </table>

  </fieldset>
  <fieldset> <legend id="legend"> Bonus Défensif</legend>

  <br>

  <table border="0" height="36" width="100%">
      
        <td class="equipe" width="80%">
		Les bonus défensifs sont gérés automatiquement	
		</td>
      
  </table>

  </fieldset>


  <p align="center"> <input name="Submit2" value="Valider" type="submit"> </p>

</form>

<p>&nbsp;</p>

</body>
</html>
