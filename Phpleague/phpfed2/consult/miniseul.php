<?php
//***********************************************************************/
// phpfed2eague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpfed2eague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpfed2eague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
?>
<html>
<?php
if (isset($_GET['champmini'])){$champmini=$_GET['champmini'];}
if (isset($_GET['typemini'])) {$typemini=$_GET['typemini'];}
if (isset($_GET['nb_dessusmini'])) {$nb_dessusmini=$_GET['nb_dessusmini'];}
if (isset($_GET['nb_dessousmini'])) {$nb_dessousmini=$_GET['nb_dessousmini'];}
if (isset($_GET['presentationmini'])) {$presentationmini=$_GET['presentationmini'];}
if (isset($_GET['lienmini'])) {$lienmini=$_GET['lienmini'];}
if (isset($_GET['classmini'])) {$classmini=$_GET['classmini'];}
if (isset($_GET['ouverture'])) {$ouverture=$_GET['ouverture'];}


   require ("../config.php");
   require ("fonctions_matchs.php");
   ?>
   <link rel="stylesheet" type="text/css" href="../league.css"></head>

   <?php
ouverture();

if (isset($typemini))
{

// RAPPEL DES PARAMETRES du CHAMPIONNAT
//$result=mysql_query("SELECT * FROM phpfed2_parametres WHERE id_champ='$champmini'");
//while ($row=mysql_fetch_array($result))
// {
//   $accessionmini = $row['accession'];
//   $barragemini = $row['barrage'] + $accessionmini;
//   $id_equipe_fetiche=$row['id_equipe_fetiche'];
//   $relegation = $row['relegation'];
// }
//   $requete = "SELECT * FROM phpfed2_equipes, phpfed2_clubs WHERE phpfed2_clubs.id=phpfed2_equipes.id_club AND id_champ='$champmini' AND phpfed2_clubs.nom='exempte'";
//     $resultats=mysql_query($requete);
//     $exempte=mysql_num_rows($resultats);
//     if ($exempte=='1') {$relegationmini = nb_equipes($champmini)- $relegation-1;}
//     else {$relegationmini = nb_equipes($champmini)- $relegation;}

    //$relegationmini = nb_equipes($champmini)- $row[relegation];
  
$legendemini='';

  switch($typemini)
{                        
case GENERAL;    // CLASSEMENT GENERAL
        {


$requetemini=$idconnect->query("
			 SELECT * 
			 FROM phpfed2_clmnt_cache 
			 WHERE ID_CHAMP='$champmini' 
			 ORDER BY POINTS DESC, DIFF DESC, BUTSPOUR DESC , BUTSCONTRE ASC, NOM");

           if ($presentationmini=="1")
        {
          if ($classmini=='1')
        {
         clmntred($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
        if ($presentationmini=="2")
        {
        if ($classmini=="1")
        {
        clmnt_barrered($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini_barre($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
}

break;



case DOMICILE;
        {
        $requetemini=$idconnect->query("SELECT NOM, DOMPOINTS, DOMJOUES, DOMG,  DOMN, DOMP, DOMBUTSPOUR, DOMBUTSCONTRE, DOMDIFF, ID_EQUIPE FROM phpfed2_clmnt_cache WHERE ID_CHAMP='$champmini' 
		ORDER BY DOMPOINTS DESC, DOMDIFF DESC");
        if ($presentationmini=="1")
        {
          if ($classmini=='1')
        {
         clmntred($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
        if ($presentationmini=="2")
        {
        if ($classmini=='1')
        {
         clmnt_barrered($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini, $champminimini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini_barre ($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
}
break;


case ATTAQUE;
        {
        $requetemini=$idconnect->query("SELECT * FROM phpfed2_clmnt_cache WHERE ID_CHAMP='$champmini' 
		ORDER BY BUTSPOUR DESC, DIFF DESC");
        if ($presentationmini=="1")
        {
          if ($classmini=='1')
        {
         clmntred($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
        if ($presentationmini=="2")
        {
        if ($classmini=='1')
        {
         clmnt_barrered($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini, $champminimini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini_barre ($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
}

break;


case DEFENSE;
        {  

        $requetemini=$idconnect->query("SELECT * FROM phpfed2_clmnt_cache WHERE ID_CHAMP='$champmini' ORDER BY BUTSCONTRE ASC, DIFF DESC");
        if ($presentationmini=="1")
        {
          if ($classmini=='1')
        {
         clmntred($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
        if ($presentationmini=="2")
        {
        if ($classmini=='1')
        {
         clmnt_barrered($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini, $champminimini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini_barre ($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
}
break;


case GOALDIFF;
        {
        $requetemini=$idconnect->query("SELECT * FROM phpfed2_clmnt_cache WHERE ID_CHAMP='$champmini' 
		ORDER BY DIFF DESC, BUTSPOUR DESC, BUTSCONTRE ASC ");
        if ($presentationmini=="1")
        {
          if ($classmini=='1')
        {
         clmntred($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
        if ($presentationmini=="2")
        {
        if ($classmini=='1')
        {
         clmnt_barrered($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini, $champminimini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini_barre ($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
}
break;
case EXTERIEUR;
        {
         $requetemini=$idconnect->query("SELECT NOM, EXTPOINTS, EXTJOUES, EXTG,  EXTN, EXTP, EXTBUTSPOUR, EXTBUTSCONTRE, EXTDIFF, ID_EQUIPE FROM phpfed2_clmnt_cache WHERE ID_CHAMP='$champmini' 
		 ORDER BY EXTPOINTS DESC, EXTDIFF DESC ");
        if ($presentationmini=="1")
        {
          if ($classmini=='1')
        {
         clmntred($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
        if ($presentationmini=="2")
        {
        if ($classmini=='1')
        {
         clmnt_barrered($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini, $champminimini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini_barre ($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
}
break;}
//mysql_query("UNLOCK TABLE clmnt");
}

?>
</body></html>
