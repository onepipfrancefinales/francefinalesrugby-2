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

include ("avant.php");
require ("../config.php") ;
require ("../consult/fonctions.php");

ouverture ();

if (!isset($_GET['champ']))
   {
    $value=GENERAL;
    demande_champ ();
  }

else
{
$champ=$_GET['champ'];
$nb_equipe = nb_equipes($champ);
$nb_journees=($nb_equipe*2)-2;

if (isset($_GET['debut'])) {$debut=$_GET['debut'];} else {$debut='1';}
if (isset($_GET['fin'])) {$fin=$_GET['fin'];} else {$fin=($nb_equipe*2)-2;}
if (isset($_GET['type'])) {$type=$_GET['type'];} else {$type=GENERAL;}


if (isset($type))
		{
   		$result=$idconnect->query("SELECT accession, barrage, estimation, relegation, id_equipe_fetiche, fiches_clubs
                        FROM phppro_parametres
                        WHERE id_champ='$champ'");
   		$row=mysqli_fetch_array($result);
 
       
      
if ($debut=="1" and $fin==$nb_journees)
			{
  
		   
		    	$result= $idconnect->query("SELECT max(phppro_journees.numero) 
											FROM phppro_journees, phppro_matchs 
											WHERE  phppro_journees.id=phppro_matchs.id_journee 
											and buts_dom is not NULL 
											and phppro_journees.id_champ='$champ'");
               		// $result=mysql_query($query) or die (mysql_error());
      			 		while ($row=mysqli_fetch_array($result))
        		 		{
						$numero=$row[0];
						}
   
    		if (!empty($numero)) {aff_journee($champ, $numero, CONSULT_CLMNT_MSG6, 0, $fiches_clubs, $id_equipe_fetiche);}
    
   //ligne 65 et 66 ajoutées
    							else
	 							{aff_journee($champ, $numero+1, CONSULT_CLMNT_MSG62, 0, $fiches_clubs, $id_equipe_fetiche);}
   			}
   		 }
	
   }

?>

<?php
include ("apres.php");
?>
