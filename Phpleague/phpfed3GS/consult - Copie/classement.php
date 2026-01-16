<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Fédérale 2</title>
</head>
<body>
<?php
//***********************************************************************/
// phpfed3GSeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpfed3GSeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpfed3GSeague.univert.org/forum               */
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
                        FROM phpfed3GS_parametres
                        WHERE id_champ='$champ'");
   		$row=mysqli_fetch_array($result);
 
       
      
if ($debut=="1" and $fin==$nb_journees)
			{
  
		   
		    	$result= $idconnect->query("SELECT max(phpfed3GS_journees.numero) 
											FROM phpfed3GS_journees, phpfed3GS_matchs 
											WHERE  phpfed3GS_journees.id=phpfed3GS_matchs.id_journee 
											and buts_dom is not NULL 
											and phpfed3GS_journees.id_champ='$champ'");
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
