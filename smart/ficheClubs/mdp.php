<?php
if (isset($_GET['mode'])) $mode = $_GET['mode'];else $mode ="noSmart";
require ("../../saison.php");
require ("../../fonctions.php");
require '../../consultation/fonctions.php';
$id = $_GET['idClub'];
/*
$nouveauClub = $_GET['nouveauClub'];

 if (is_int($chaine)) {

  //   echo " numerique"; echo "<br/>";
   $equipe = substr($chaine, 2, 5);
   $numLigue = substr($chaine, 0, 2);
   $id = substr($chaine, 2, 2);
  // echo $id;
 }
 
 
 //Evaluation de la variable chaine si textuelle
 else {
  // echo " non numerique";echo "<br/>";
   require '../../connect/connexion1.php';
   infosclub($chaine, $bdd);
   $id_equipe=$id;
   $equipe = $numLigue . $code;
   $id = substr($id, 2, 2);
  // echo $id;
 }
*/
 
require '../../connect/connexion1.php'; 
nomComite (0,$id, $bdd);
infosclub($id, $bdd);


?>

<html>
<head>
 <title>Fiche club <?php echo $nomChampion; ?></title>
<content="Présentation de club <?php echo $nomChampion; ?>">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link type="text/css" rel="stylesheet" href="../../ligne1.css">
 <link rel="stylesheet" type="text/css" href="../10.css"> 

 <meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body text="#000000" >
 <div class="fixed-header">
   <div class="container">
   
    <table width="98%" border="1">
     <tr> 
      <td width= "5%"class="h22" height="20"><a href="javascript:history.go(-1)"><img src="../../images/smart/flecheGauche.jpg" height="20"></a></td>
	  <td width= "95%"class="h22" height="20"> France Finales Rugby </td>
     </tr>
     <tr> 
      <td colspan="2" class="h12" width= "100%"><?php echo $nomLong;?> </td>
     </tr>
    </table>
	
   </div>
  </div>
 <div class="container">
   
   <br><br><br><br><br><br><br><br><br>
   
   <?php
   $smart = true;
   
   $idClub = $_GET['idClub']; 

   ?>
  <p class="center"> 
   Pour valider que vous n'êtes pas un robot,
   saississez "pasUnRobot" et validez ;
   
  </p>

   <form
    action="formulaire.php?idClub=<?php echo $idClub."&mode=".$mode; ?>" method="post">
     <p align="center"> 
       <input name="mot_de_passe" type="text"> <input value="Valider" type="submit">
     </p>
   </form>

   <br><br><br><br><br><br><br><br>
   <?php 
   require '../bas.php';

   ?>
 </div>
</body>
</html>