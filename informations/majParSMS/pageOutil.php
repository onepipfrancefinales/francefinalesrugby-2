<?php 
if (isset($_GET['contenu'])) $contenu = $_GET['contenu'];else $contenu = 'outil';
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>

  <meta name="description"
 content="Tout sur le comit� territorial  : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords"
 content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link type="text/css" rel="stylesheet" href="../../lienNoir.css">
  <link type="text/css" rel="stylesheet" href="sms.css">
  <title>Mise a jour des resultats</title>
</head>
<body>
<div align="center">
<table height="639" width="1100">
  <tbody>
    <tr  align="center" valign="middle">
      <td colspan="3" height="74"><?php include("../../images/page_image_al.php"); ?></td>
    </tr>
    <tr>
      <td colspan="3" height="21"><?php include("../../01ligne.php"); ?></td>
    </tr>
    <tr align="center" bgcolor="#000000" valign="middle">
      <td align="center" bgcolor="#006699" height="505" valign="top" width="225"><p align="center"><?php include("../../01gauche.php"); ?></p></td>
      
	  <td bgcolor="#ffffff" height="505" valign="top" width="550" > 
       
	   <?php
	   include 'menu.php';
	   
	   switch ($contenu){
		   case 'outil':
			include 'outil.php';
			break;
		case 'controle':
			include 'controle.php';
			break;
		case 'equipe2':
			include 'equipe2.php';
			break;
		case 'SMS':
			include 'SMS.php';
			break;
	   }
	   ?>
	   
      </td>
	  
      <td bgcolor="#006699" height="505" valign="top" width="225"> <p><?php include("../../00droite.php"); ?> </p></td>
    </tr>
    <tr>
      <th colspan="3" bgcolor="#ffffff" height="78" valign="top">
      <table border="1"  width="100%">
        <tbody>
          <tr>
            <td><?php include("../../comitebas.php"); ?></td>
          </tr>
          <tr>
            <td><?php include("../../pub/pub1.php"); ?></td>
          </tr>
          <tr>
            <td><?php include("../../bas.php"); ?></td>
          </tr>
        </tbody>
      </table>
      </th>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
