<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Fédérale 2</title>
</head>
<body>
<?php
//***********************************************************************/
// phpproeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpproeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpproeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

include ("avantsmart.php");
require ("../config.php") ;
require ("../consult/fonctions123456.php");

ouverture ();

if (!isset($_GET['champ']))
   {
    $value=GENERAL;
    demande_champ ($idconnect);
   }

else
{
$champ=$_GET['champ'];
$nb_equipe = nb_equipes($champ, $idconnect);
$nb_journees=($nb_equipe*2)-2;

if (isset($_GET['debut'])) {$debut=$_GET['debut'];} else {$debut='1';}
if (isset($_GET['fin'])) {$fin=$_GET['fin'];} else {$fin=($nb_equipe*2)-2;}
if (isset($_GET['type'])) {$type=$_GET['type'];} else {$type=GENERAL;}

}
 

$class=0;
$lien="non";
if (isset($type))
{

    // RAPPEL DES PARAMETRES du CHAMPIONNAT
    $result=$idconnect->query("SELECT accession, barrage, estimation, relegation, id_equipe_fetiche, fiches_clubs
                         FROM phppro_parametres
                         WHERE id_champ='$champ'");
    $row=mysqli_fetch_array($result);

    $accession = $row['accession'];
    $barrage = $row['barrage'] + $accession;
    $estimation = $row['estimation'];
    $fiches_clubs = $row['fiches_clubs'];
    $id_equipe_fetiche=$row['id_equipe_fetiche'];
    
   $resultats=$idconnect->query("SELECT phppro_equipes.id FROM phppro_equipes, phppro_clubs
                  WHERE phppro_clubs.id=phppro_equipes.id_club 
                  AND id_champ='$champ'
                  AND phppro_clubs.nom='exempte'");

    $exempte=mysqli_num_rows($resultats);
    if ($exempte=='1') {$relegation = $nb_equipe - $row['relegation']-1;}
    else {$relegation = $nb_equipe - $row['relegation'];}
    
	switch($type)
{
case GENERAL;    // CLASSEMENT GENERAL 111111
{


if ($debut=="1" and $fin==$nb_journees)
{
  
    $result=$idconnect->query(" SELECT max(phppro_journees.numero) 
								FROM phppro_journees, phppro_matchs 
								WHERE phppro_journees.id=phppro_matchs.id_journee 
								AND buts_dom is not NULL 
								AND phppro_journees.id_champ='$champ'");
  
        while ($row=mysqli_fetch_array($result))
        {
        $numero=$row[0];
        }


   		 if ($numero<$nb_journees)
    	    {
  }

   	

   }

  else
   {
 }


}



       


break;
}  
switch($type)
{
case GENERAL;    // CLASSEMENT GENERAL 222222
{
//	$legende=CONSULT_CLMNT_MSG4.$debut.CONSULT_CLMNT_MSG5.$fin;

if ($debut=="1" and $fin==$nb_journees)
{

    ?>

<?php
    
   if ($numero<$nb_journees)
   	     {
   	//   affiche la prochaine journée
     aff_journee($champ, $numero+1, CONSULT_CLMNT_MSG62, 0, $fiches_clubs, $id_equipe_fetiche, $idconnect);
      }

    

 }

 


 }



       


break;
}

}
//}
?>
<?php
include ("apres.php");
?>
