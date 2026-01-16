<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Fédérale 2</title>
</head>
<body>
<?php
//***********************************************************************/
// phpidf2eague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpidf2eague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpidf2eague.univert.org/forum               */
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

	$fiches_clubs=0 ;
    $id_equipe_fetiche=0;

	if ($debut=="1" and $fin==$nb_journees)
	{
 
    $result=$idconnect->query(" SELECT max(phpidf2_journees.numero) 
								FROM phpidf2_journees, phpidf2_matchs 
								WHERE phpidf2_journees.id=phpidf2_matchs.id_journee 
								AND buts_dom is not NULL 
								AND phpidf2_journees.id_champ='$champ'");
   
        while ($row=mysqli_fetch_array($result))
        {
        $numero=$row[0];
        }	   
   }


if ($debut=="1" and $fin==$nb_journees)
	{
 
	if ($numero<$nb_journees)
   	 {
   	 //  affiche la prochaine journée
     aff_journee($champ, $numero+1, CONSULT_CLMNT_MSG62, 0, $fiches_clubs, $id_equipe_fetiche, $idconnect);
     }
	}


mysqli_close($idconnect);
include ("apres.php");
?>
