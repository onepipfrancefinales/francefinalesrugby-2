<?php
require ("../../saison.php");
require '../../fichierConfig.php';
require ("../../fonctions.php");
require "../../consultation/fonctions.php";
$mode = $_REQUEST['mode'];
$chaine = $_REQUEST['champion'];
$nouveauClub = $_REQUEST['nouveauClub'];

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

 
require '../../connect/connexion1.php'; 
$code = substr($chaine,-5);

nomComite (0,$id, $bdd);
infosclub($chaine, $bdd);
nomLiguePalm ($numLigue, $bdd);
affichageSaisonEnCours($equipe, $bdd);
bdInfosClub($code, $bdd);
saisons($code, $annee, $bdd);

consultationEvolutionClub ($equipe, $bdd);
fusionDeClubs2 ($equipe, $bdd) ;

?>

<html>
<head>
 <title><?php echo $nomLong; ?></title>
 <link rel="canonical" href="https://francefinalesrugby.fr/smart/ficheClubs/pageFicheClubs.php" >
 <meta name="description" content="Présentation du club <?php echo $nomLong; ?> (bureau, contact, palmarès, etc...">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link type="text/css" rel="stylesheet" href="../../ligne1.css">
 <link rel="stylesheet" type="text/css" href="../menu_smart2.css">  
 <link type="text/css" rel="stylesheet" href="../10.css">
 <link type="text/css" rel="stylesheet" href="paramTiroir.css">
 <link type="text/css" rel="stylesheet" href="../../consultation/pgclub00.css"/>
 <meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body text="#000000">
 <div class="fixed-header">
   <div class="container">
   
    <table width="98%" class="borderWidth1 borderColorBlack">
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
   <?php
   $smart = true;
   echo "<br>"; echo "<br>";
 echo "test";
   require '../../consultation/00clubs2.php?mode=smart';

// require '../../consultation/02clubs.php?mode=smart';
//   require '../bas2.php';

   ?>
 </div>
</body>
</html>