<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php 
//$championnat = $_POST['championnat'];
// $code_div = $_GET['code_div'];
// $code_match = $_GET['idF'];
 //$bdfeuilleA = $_GET['bdfeuilleA'];

// $date = $_GET['date'];
 $comite = $_GET['comite'];
 $equipe = $_GET['equipe'];// echo $equipe ;
 $equipeA = $_GET['equipeA'];// echo $equipeA ;
 $equipeB = $_GET['equipeB'];// echo $equipeB ;
 $terrain = $_GET['terrain'];
 $connect = $_GET['connect'];
 $bdcomite=("php".''.$comite.''."_joueurs");

// require ("../feuilles/fonctions.php");
// require ("../feuilles/fonctionsA.php");
// require ("../feuilles/fonctionsB.php");
// $jugedetouche = $_GET['jugedetouche'];
// echo $comite;
?>
<table width="780" border="0" align="left">
  <tr> 
    <td valign="top" align="left" colspan="2"><?php //include "zoneF.php"; ?> </td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2"><?php include "zone1Consultation.php"; ?></td>
  </tr>
  <tr> 
    <td valign="top" height="21" align="left" colspan="2"><?php  include "zone2Consultation.php"; ?></td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2"><?php	  include "zone5ConsultationF.php"; ?></td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2"> <?php  include "zoneR.php";  ?></td>
  </tr>
</table>
<p><br>
  <br>
</p>
</body>
</html>
