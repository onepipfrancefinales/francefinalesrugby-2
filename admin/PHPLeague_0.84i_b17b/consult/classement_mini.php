<?php

$champmini      = isset($_REQUEST['champmini'])      ? $_REQUEST['champmini']      : NULL;
$typemini       = isset($_REQUEST['typemini'])       ? $_REQUEST['typemini']       : NULL;
$nb_dessusmini  = isset($_REQUEST['nb_dessusmini'])  ? $_REQUEST['nb_dessusmini']  : NULL;
$nb_dessousmini = isset($_REQUEST['nb_dessousmini']) ? $_REQUEST['nb_dessousmini'] : NULL;

if (isset($_GET['presentationmini'])) {$presentationmini=$_GET['presentationmini'];}
if (isset($_GET['lienmini'])) {$lienmini=$_GET['lienmini'];}
if (isset($_GET['classmini'])) {$classmini=$_GET['classmini'];}
if (isset($_GET['ouverture'])) {$ouverture=$_GET['ouverture'];}

define('MOD', 'consult');

require('../config.php');
require('../function_consult.php');

include('../header_min.php');

if (isset($typemini))
{
	ouverture();

	$REQ1 = mysql_query('SELECT accession, barrage, id_equipe_fetiche, relegation FROM phpl_parametres WHERE id_champ='.$champmini);

	while ($ROW1 = mysql_fetch_array($REQ1))
	{
		$accessionmini     = $ROW1['accession'];
		$barragemini       = $ROW1['barrage'] + $accessionmini;
		$id_equipe_fetiche = $ROW1['id_equipe_fetiche'];
		$relegation        = $ROW1['relegation'];
	}
	mysql_free_result($REQ1);

	$requete   = "SELECT * FROM phpl_equipes, phpl_clubs WHERE phpl_clubs.id=phpl_equipes.id_club AND id_champ='$champmini' AND phpl_clubs.nom='exempte'";
	$resultats = mysql_query($requete);
	$exempte   = mysql_num_rows($resultats);

	if ($exempte == 1)
	{
		$relegationmini = nb_equipes($champmini) - $relegation - 1;
	}
	else
	{
		$relegationmini = nb_equipes($champmini) - $relegation;
	}
  
	switch($typemini)
	{                        
		case GENERAL;
		{
			$requetemini = "SELECT * FROM phpl_clmnt_cache WHERE ID_CHAMP='$champmini' ORDER BY POINTS DESC, DIFF DESC, BUTSPOUR DESC, BUTSCONTRE ASC, NOM";

			if ($presentationmini == 1)
			{
				if ($classmini == 1)
				{
					clmntred($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
				}
				else
				{
					clmntmini($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
				}
			}

			if ($presentationmini == 2)
			{
				if ($classmini == 1)
				{
					clmnt_barrered($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
				}
				else
				{
					clmntmini_barre($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
				}
			}
		}
		break;

		case DOMICILE;
		{
			$requetemini="SELECT NOM, DOMPOINTS, DOMJOUES, DOMG,  DOMN, DOMP, DOMBUTSPOUR, DOMBUTSCONTRE, DOMDIFF, ID_EQUIPE FROM phpl_clmnt_cache WHERE ID_CHAMP='$champmini' ORDER BY DOMPOINTS DESC, DOMDIFF DESC";

			if ($presentationmini == 1)
			{
				if ($classmini == 1)
				{
					clmntred($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
				}
				else
				{
					clmntmini($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
				}
			}

			if ($presentationmini == 2)
			{
				if ($classmini == 1)
				{
					clmnt_barrered($typemini, $accessionmini, $barragemini, $relegationmini, $champminimini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
				}
				else
				{
					clmntmini_barre ($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
				}
			}
		}
		break;




case ATTAQUE;
        {
        $requetemini="SELECT * FROM phpl_clmnt_cache WHERE ID_CHAMP='$champmini' ORDER BY BUTSPOUR DESC, DIFF DESC";
        if ($presentationmini=="1")
        {
          if ($classmini=='1')
        {
         clmntred($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
        if ($presentationmini=="2")
        {
        if ($classmini=='1')
        {
         clmnt_barrered($typemini, $accessionmini, $barragemini, $relegationmini, $champminimini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini_barre ($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
}

break;


case DEFENSE;
        {  

        $requetemini="SELECT * FROM phpl_clmnt_cache WHERE ID_CHAMP='$champmini' ORDER BY BUTSCONTRE ASC, DIFF DESC";
        if ($presentationmini=="1")
        {
          if ($classmini=='1')
        {
         clmntred($typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini($typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
        if ($presentationmini=="2")
        {
        if ($classmini=='1')
        {
         clmnt_barrered($typemini, $accessionmini, $barragemini, $relegationmini, $champminimini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini_barre ($typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
}
break;


case GOALDIFF;
        {
        $requetemini="SELECT * FROM phpl_clmnt_cache WHERE ID_CHAMP='$champmini' ORDER BY DIFF DESC, BUTSPOUR DESC, BUTSCONTRE ASC ";
        if ($presentationmini=="1")
        {
          if ($classmini=='1')
        {
         clmntred($typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini($typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
        if ($presentationmini=="2")
        {
        if ($classmini=='1')
        {
         clmnt_barrered($typemini, $accessionmini, $barragemini, $relegationmini, $champminimini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini_barre ($typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
}
break;
case EXTERIEUR;
        {
         $requetemini="SELECT NOM, EXTPOINTS, EXTJOUES, EXTG,  EXTN, EXTP, EXTBUTSPOUR, EXTBUTSCONTRE, EXTDIFF, ID_EQUIPE FROM phpl_clmnt_cache WHERE ID_CHAMP='$champmini' ORDER BY EXTPOINTS DESC, EXTDIFF DESC ";
        if ($presentationmini=="1")
        {
          if ($classmini=='1')
        {
         clmntred($typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini($typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
        if ($presentationmini=="2")
        {
        if ($classmini=='1')
        {
         clmnt_barrered($typemini, $accessionmini, $barragemini, $relegationmini, $champminimini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
          }
        else
        {
        clmntmini_barre ($typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche);
        }
        }
}
break;}

}

//include('../footer.php');

?>

</body>

</html>