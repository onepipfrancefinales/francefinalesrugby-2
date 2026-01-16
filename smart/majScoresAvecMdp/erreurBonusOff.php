<?php
//r�cup�ration des valeurs des champs:

$comite = $_GET['comite'];   
$equipe1 = $_GET['equipe1'];
$equipe2 = $_GET['equipe2'];
$codeEquipe = $_GET['codeEquipe'];
$codeEquipe1 = $_GET['codeEquipe1'];
$codeEquipe2 = $_GET['codeEquipe2'];
$bddComite = $_GET['bddComite'];
$comite = $_GET['comite'];

//echo $codeEquipe;


if ($codeEquipe1 > 90000000)
$codeEquipe = $codeEquipe1-90000000;
else
$codeEquipe = $codeEquipe1;

//echo $codeEquipe;
$journee = $_GET['journee'];
$score1 = $_GET['score1'];
$score2 = $_GET['score2'];

//$phpcomite= "php".''.$comite;
//$phpcomite_equipes = "php".''.$comite.''."_equipes";
//$phpcomite_matchs  = "php".''.$comite.''."_matchs";
//$championnat = substr("$journee",0 , 3);

//echo "bonusoffequipe1= ".''.$bonusOffEquipe1;
//echo "--bonusoffequipe2= ".''.$bonusOffEquipe2;
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
    <td class="h22"> France Finales Rugby</td>
  </tr>
  <tr> 
    <td class="h12">Validation des infos saisies </td>
  </tr>
</table>
<br>
<h3> 
  SCORE DE LA RENCONTRE</h3> 
<br>
<table width="100%" border="0">
  <tr> 
    <td class="equipe"  width="80%" height="19"><?php echo $equipe1; ?></td>
    <td class="equipe" width="20%" height="19"><?php echo $score1; ?></td>
    <td width="20%" height="19">&nbsp; </td>
  </tr>
  <tr> 
    <td class="equipe" width="80%"><?php echo $equipe2; ?></td>
    <td class="equipe" width="20%"><?php echo $score2; ?></td>
    <td width="20%">&nbsp; </td>
  </tr>
</table>
<br />
<h3>BONUS</h3> 
<div align="center"><br/>
  <br/>
  <font face="Arial, Helvetica, sans-serif" size="3" color="#FF0000"><b>Erreur 
  de saisie : vous avez attribué le point de bonus offensif aux 2 équipes. 
  </b></font><br>
  <br/>
  <br/>
</div>
<p class="tab3">
<a href="saisie.php?bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&journee=<?php echo $journee ; ?>&codeEquipe=<?php echo $codeEquipe; ?>">
Retour pour modif
</a>
</p>
 </body>
</html>
 
 
