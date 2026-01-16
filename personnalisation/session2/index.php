<?php
$champ = $_GET['champ'];
$bddComite = $_GET['bddComite'];
$comite = $_GET['comite'];
//echo substr($champ,-3,3 );echo "<br>";
 $champ2=$champ;
 if (substr($champ,-3,3 )>240)
	{ $champ=$champ-100;}

//echo "champ : ".$champ;echo "<br>";
//echo "champ2 : ".$champ2;echo "<br>";
?>
<html>
<head>
<title>Mise à jour des résultats</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="../../personnalisation/admin/formulaire.css"/> 
<link type="text/css" rel="stylesheet" href="../../smart/10.css"> 
<link type="text/css" rel="stylesheet" href="CSS.css">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>
<table width="100%" border="1">
  <tr> 
    <td class="h22"> France Finales Rugby </td>
  </tr>
  <tr> 
    <td class="h12" height="31"> Mise &agrave; jour des r&eacute;sultats</td>
  </tr>
</table>
<p> 
  <?php include ("saisieIdentifiant.php"); ?>
</p>
<!--
<p>l' identifiants et le mot de passe sont le code FFR du club<br>
  (de la forme 4 chiffres + 1 lettre en majuscules)<br>
  <hr />
<p> 
  <link type="text/css" rel="stylesheet" href="personnalisation/admin/formulaire.css"/>
  <b>Exemple :</b> Identifiant : 3345A<br>
  <font color="#FFFFFF"><a href="../../smart/dossiers/sommaire.php"><font color="#FFFFFF">pagetest</font></a>ssss</font>Mot 
  de passe 3345A<br>
</p>
-->
<hr />
<table width="234" align="center">
  <tbody> 
  <tr> 
    <td> 
      <h3 align="center"><a href="../../smart/sommaire.php"><font face="Arial, Helvetica, sans-serif" size="3">Retour 
        &agrave; l'appli</font></a></h3> 
    </td>
  </tr>
  </tbody> 
</table>
</body>
</html>
