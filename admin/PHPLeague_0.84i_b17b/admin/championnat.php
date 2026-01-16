<?php

// Général
$page    = isset($_REQUEST['page'])    ? $_REQUEST['page']    : NULL;
$champ   = isset($_REQUEST['champ'])   ? $_REQUEST['champ']   : NULL;
$annee   = isset($_REQUEST['annee'])   ? $_REQUEST['annee']   : NULL;
$numero  = isset($_REQUEST['numero'])  ? $_REQUEST['numero']  : NULL;
$action  = isset($_REQUEST['action'])  ? $_REQUEST['action']  : NULL;
$action2 = isset($_REQUEST['action2']) ? $_REQUEST['action2'] : NULL;
$action3 = isset($_REQUEST['action3']) ? $_REQUEST['action3'] : NULL;
$action4 = isset($_REQUEST['action4']) ? $_REQUEST['action4'] : NULL;

$id_journee    = isset($_REQUEST['id_journee'])    ? $_REQUEST['id_journee']    : NULL;
$id_compo_supp = isset($_REQUEST['id_compo_supp']) ? $_REQUEST['id_compo_supp'] : NULL;

$nb_matchs  = isset($_REQUEST['nb_matchs'])  ? $_REQUEST['nb_matchs']  : NULL;
$nbdom      = isset($_REQUEST['nbdom'])      ? $_REQUEST['nbdom']      : NULL;
$nbext      = isset($_REQUEST['nbext'])      ? $_REQUEST['nbext']      : NULL;
$butd       = isset($_REQUEST['butd'])       ? $_REQUEST['butd']       : NULL;
$butv       = isset($_REQUEST['butv'])       ? $_REQUEST['butv']       : NULL;
$joueursDom = isset($_REQUEST['joueursDom']) ? $_REQUEST['joueursDom'] : NULL;
$joueursExt = isset($_REQUEST['joueursExt']) ? $_REQUEST['joueursExt'] : NULL;


$saison   = isset($_REQUEST['saison'])   ? $_REQUEST['saison']   : NULL;
$division = isset($_REQUEST['division']) ? $_REQUEST['division'] : NULL;

$journee_suivante = isset($_REQUEST['journee_suivante']) ? $_REQUEST['journee_suivante'] : NULL;

$id_match = isset($_REQUEST['id_match']) ? $_REQUEST['id_match'] : NULL;


$confirm = isset($_GET['confirm']) ? $_GET['confirm'] : NULL;
$nom_club = isset($_POST['nom_club']) ? $_POST['nom_club'] : NULL;
$club = isset($_POST['club']) ? $_POST['club'] : NULL;
$nb_equipes = isset($_POST['nb_equipes']) ? $_POST['nb_equipes'] : NULL;
$boucle = isset($_POST['boucle']) ? $_POST['boucle'] : NULL;
$coherence = isset($_GET['coherence']) ? $_GET['coherence'] : NULL;
$miroir = isset($_POST['miroir']) ? $_POST['miroir'] : NULL;
$id_domicile = isset($_POST['id_domicile']) ? $_POST['id_domicile'] : NULL;
$id_exterieur = isset($_POST['id_exterieur']) ? $_POST['id_exterieur'] : NULL;

// Paramètres
$malus     = isset($_REQUEST['malus'])     ? $_REQUEST['malus']     : NULL;
$id_equipe = isset($_REQUEST['id_equipe']) ? $_REQUEST['id_equipe'] : NULL;

$pts_victoire = isset($_POST['pts_victoire']) ? $_POST['pts_victoire'] : NULL;
$pts_nul = isset($_POST['pts_nul']) ? $_POST['pts_nul'] : NULL;
$pts_defaite = isset($_POST['pts_defaite']) ? $_POST['pts_defaite'] : NULL;
$accession = isset($_POST['accession']) ? $_POST['accession'] : NULL;
$relegation = isset($_POST['relegation']) ? $_POST['relegation'] : NULL;
$id_equipe_fetiche = isset($_POST['id_equipe_fetiche']) ? $_POST['id_equipe_fetiche'] : NULL;
$estimation = isset($_POST['estimation']) ? $_POST['estimation'] : NULL;
$barrage = isset($_POST['barrage']) ? $_POST['barrage'] : NULL;
$fiches_clubs = isset($_POST['fiches_clubs']) ? $_POST['fiches_clubs'] : NULL;

// Résultats
$date_reelle = isset($_REQUEST['date_reelle']) ? $_REQUEST['date_reelle'] : NULL;
$matchs_id   = isset($_REQUEST['matchs_id'])   ? $_REQUEST['matchs_id']   : NULL;

// Buteurs

$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$photo = isset($_POST['photo']) ? $_POST['photo'] : NULL;
$position = isset($_POST['position']) ? $_POST['position'] : NULL;
$data = isset($_POST['data']) ? $_POST['data'] : NULL;
$action_transfert = isset($_POST['action_transfert']) ? $_POST['action_transfert'] : NULL;
$joueurs_id = isset($_POST['joueurs_id']) ? $_POST['joueurs_id'] : NULL;



// ???
$joueurs_id = isset($_REQUEST['joueurs_id']) ? $_REQUEST['joueurs_id'] : NULL;
$equipe_id = isset($_REQUEST['equipe_id']) ? $_REQUEST['equipe_id'] : NULL;


// compo2
$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$photo = isset($_POST['photo']) ? $_POST['photo'] : NULL;
$position = isset($_POST['position']) ? $_POST['position'] : NULL;
$data = isset($_POST['data']) ? $_POST['data'] : NULL;
$nbdom = isset($_POST['nbdom']) ? $_POST['nbdom'] : NULL;
$nbext = isset($_POST['nbext']) ? $_POST['nbext'] : NULL;
$action_transfert = isset($_POST['action_transfert']) ? $_POST['action_transfert'] : NULL;
$id_compo2_supp = isset($_GET['id_compo2_supp']) ? $_GET['id_compo2_supp'] : NULL;
$joueurs_id = isset($_POST['joueurs_id']) ? $_POST['joueurs_id'] : NULL;

// CJ
$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$photo = isset($_POST['photo']) ? $_POST['photo'] : NULL;
$position = isset($_POST['position']) ? $_POST['position'] : NULL;
$data = isset($_POST['data']) ? $_POST['data'] : NULL;
$nbdom = isset($_POST['nbdom']) ? $_POST['nbdom'] : NULL;
$nbext = isset($_POST['nbext']) ? $_POST['nbext'] : NULL;
$action_transfert = isset($_POST['action_transfert']) ? $_POST['action_transfert'] : NULL;
$id_compoCJ_supp = isset($_GET['id_compoCJ_supp']) ? $_GET['id_compoCJ_supp'] : NULL;
$joueurs_id = isset($_POST['joueurs_id']) ? $_POST['joueurs_id'] : NULL;
$equipe_id = isset($_POST['equipe_id']) ? $_POST['equipe_id'] : NULL;

// CR
$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$photo = isset($_POST['photo']) ? $_POST['photo'] : NULL;
$position = isset($_POST['position']) ? $_POST['position'] : NULL;
$data = isset($_POST['data']) ? $_POST['data'] : NULL;
$nbdom = isset($_POST['nbdom']) ? $_POST['nbdom'] : NULL;
$nbext = isset($_POST['nbext']) ? $_POST['nbext'] : NULL;
$action_transfert = isset($_POST['action_transfert']) ? $_POST['action_transfert'] : NULL;
$id_compoCR_supp = isset($_GET['id_compoCR_supp']) ? $_GET['id_compoCR_supp'] : NULL;
$joueurs_id = isset($_POST['joueurs_id']) ? $_POST['joueurs_id'] : NULL;
$equipe_id = isset($_POST['equipe_id']) ? $_POST['equipe_id'] : NULL;

// TPS
$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$photo = isset($_POST['photo']) ? $_POST['photo'] : NULL;
$position = isset($_POST['position']) ? $_POST['position'] : NULL;
$data = isset($_POST['data']) ? $_POST['data'] : NULL;
$nbdom = isset($_POST['nbdom']) ? $_POST['nbdom'] : NULL;
$nbext = isset($_POST['nbext']) ? $_POST['nbext'] : NULL;
$action_transfert = isset($_POST['action_transfert']) ? $_POST['action_transfert'] : NULL;
$id_TPS_supp = isset($_GET['id_TPS_supp']) ? $_GET['id_TPS_supp'] : NULL;
$joueurs_id = isset($_POST['joueurs_id']) ? $_POST['joueurs_id'] : NULL;
$equipe_id = isset($_POST['equipe_id']) ? $_POST['equipe_id'] : NULL;

// Dates
$date   = isset($_POST['date'])   ? $_POST['date']   : NULL;
$heure  = isset($_POST['heure'])  ? $_POST['heure']  : NULL;
$minute = isset($_POST['minute']) ? $_POST['minute'] : NULL;



$RESULT = '';

// Création de la saison
if ($action == 'creer' AND $action2 == 'creer' AND $saison)
{
	$REQ1 = mysql_query('SELECT annee FROM phpl_saisons WHERE annee='.$saison);
	$NBR1 = mysql_num_rows($REQ1);

	mysql_free_result($REQ1);

	if ($NBR1 != 0)
	{
		$RESULT.= InfoReqSql('InfCreaSaison', 0, 'highlight', 'check', ADMIN_CHAMP_EXIST1.' [ '.$saison.'/'.($saison + 1).' ]');
	}
	else
	{
		$REQ2 = mysql_query("INSERT INTO phpl_saisons (annee) values ('$saison')");

		if ($REQ2)
		{
			$RESULT.= InfoReqSql('InfCreaSaison', 1, 'highlight', 'check', ADMIN_CHAMP_CREA1);
		}
		else
		{
			$RESULT.= InfoReqSql('InfCreaSaison', 0, 'error', 'alert', GestErreur(ADMIN_CHAMP_ERR1, $REQ2));
		}
	}
}

// Création de la division
if ($action == 'creer' AND $action2 == 'creer' AND $division)
{
	$REQ1 = mysql_query('SELECT nom FROM phpl_divisions WHERE nom="'.$division.'"');
	$NBR1 = mysql_num_rows($REQ1);

	mysql_free_result($REQ1);

	if ($NBR1 != 0)
	{
		$RESULT.= InfoReqSql('InfCreaDivision', 0, 'highlight', 'check', ADMIN_CHAMP_EXIST2.' [ '.$division.' ]');
	}
	else
	{
		$REQ2 = mysql_query("INSERT INTO phpl_divisions (nom) values ('$division')");

		if ($REQ2)
		{
			$RESULT.= InfoReqSql('InfCreaDivision', 1, 'highlight', 'check', ADMIN_CHAMP_CREA2);
		}
		else
		{
			$RESULT.= InfoReqSql('InfCreaDivision', 0, 'error', 'alert', GestErreur(ADMIN_CHAMP_ERR2, $REQ2));
		}
	}
}

// Choix de la saison et de la division
if ($action == 'creer' AND $action3 == 'creer')
{
	$REQ1 = mysql_query('SELECT id_division, id_saison FROM phpl_championnats WHERE id_division='.$division.' AND id_saison='.$saison);
	$NBR1 = mysql_num_rows($REQ1);

	mysql_free_result($REQ1);

	if ($NBR1 != 0)
	{
		$RESULT.= InfoReqSql('InfCreaChamp', 0, 'highlight', 'check', ADMIN_CHAMP_EXIST3.' [ '.$division.' ]');
	}
	else
	{
		$REQ2 = mysql_query("INSERT INTO phpl_championnats (id_division, id_saison) VALUES ('$division', '$saison')");

		if ($REQ2)
		{
			$RESULT.= InfoReqSql('InfCreaChamp', 1, 'highlight', 'check', ADMIN_CHAMP_CREA3);
		}
		else
		{
			$RESULT.= InfoReqSql('InfCreaChamp', 0, 'error', 'alert', GestErreur(ADMIN_CHAMP_ERR3, $REQ2));
		}
	}
}

// Suppression de la saison
if ($action == 'creer' AND $action2 == 'supp' AND $saison)
{
	$REQ = @mysql_query("DELETE FROM phpl_saisons WHERE id='$saison'");

	if ($REQ)
	{
		$RESULT.= InfoReqSql('InfSuppSaison', 1, 'highlight', 'check', ADMIN_CHAMP_SUPP1);
	}
	else
	{
		$RESULT.= InfoReqSql('InfSuppSaison', 0, 'error', 'alert', GestErreur(ADMIN_CHAMP_ERR4, $REQ));
	}
}

// Suppression de la division
if ($action == 'creer' AND $action2 == 'supp' AND $division)
{
	$REQ = @mysql_query("DELETE FROM phpl_divisions WHERE id='$division'");

	if ($REQ)
	{
		$RESULT.= InfoReqSql('InfSuppDivision', 1, 'highlight', 'check', ADMIN_CHAMP_SUPP2);
	}
	else
	{
		$RESULT.= InfoReqSql('InfSuppDivision', 0, 'error', 'alert', GestErreur(ADMIN_CHAMP_ERR5, $REQ));
	}
}

// Suppression du championnat
if ($confirm == 'ok' AND $champ AND $action == 'supp')
{
	$REQ1 = @mysql_query('SELECT phpl_equipes.id FROM phpl_equipes, phpl_championnats WHERE id_champ='.$champ);

	if ($REQ1)
	{
		while($ROW1 = mysql_fetch_array($REQ1))
		{
			$REQ2 = @mysql_query('DELETE FROM phpl_matchs WHERE id_equipe_dom='.$ROW1[0]);
			$REQ3 = @mysql_query('DELETE FROM phpl_matchs WHERE id_equipe_ext='.$ROW1[0]);
		}
		mysql_free_result($REQ1);

		if ($REQ2) { $RESULT.= InfoReqSql('InfSupp2', 0, 'highlight', 'check', 'Equipes domiciles du championnat supprimées avec succès'); }
		else       { $RESULT.= InfoReqSql('InfSupp2', 0, 'error', 'alert', GestErreur(ADMIN_GRP_CHAMP_SUPP2, $REQ4)); }

		if ($REQ3) { $RESULT.= InfoReqSql('InfSupp3', 0, 'highlight', 'check', 'Equipes externes du championnat supprimées avec succès'); }
		else       { $RESULT.= InfoReqSql('InfSupp3', 0, 'error', 'alert', GestErreur(ADMIN_GRP_CHAMP_SUPP2, $REQ5)); }


		$REQ4 = @mysql_query("DELETE FROM phpl_championnats WHERE id='$champ'");
		$REQ5 = @mysql_query("DELETE FROM phpl_journees WHERE id_champ='$champ'");
		$REQ6 = @mysql_query("DELETE FROM phpl_equipes WHERE id_champ='$champ'");
		$REQ7 = @mysql_query("DELETE FROM phpl_parametres WHERE id_champ='$champ'");

		if ($REQ4) { $RESULT.= InfoReqSql('InfSupp4', 0, 'highlight', 'check', 'Championnat supprimé avec succès'); }
		else       { $RESULT.= InfoReqSql('InfSupp4', 0, 'error', 'alert', GestErreur(ADMIN_GRP_CHAMP_SUPP2, $REQ4)); }

		if ($REQ5) { $RESULT.= InfoReqSql('InfSupp5', 0, 'highlight', 'check', 'Journées du championnat supprimé avec succès'); }
		else       { $RESULT.= InfoReqSql('InfSupp5', 0, 'error', 'alert', GestErreur(ADMIN_GRP_CHAMP_SUPP2, $REQ5)); }

		if ($REQ6) { $RESULT.= InfoReqSql('InfSupp6', 0, 'highlight', 'check', 'Equipes du championnat supprimé avec succès'); }
		else       { $RESULT.= InfoReqSql('InfSupp6', 0, 'error', 'alert', GestErreur(ADMIN_GRP_CHAMP_SUPP2, $REQ6)); }

		if ($REQ7) { $RESULT.= InfoReqSql('InfSupp7', 0, 'highlight', 'check', 'Paramètres du championnat supprimé avec succès'); }
		else       { $RESULT.= InfoReqSql('InfSupp7', 0, 'error', 'alert', GestErreur(ADMIN_GRP_CHAMP_SUPP2, $REQ7)); }
	}
	else
	{
		$RESULT.= InfoReqSql('InfSupp1', 0, 'error', 'alert', GestErreur('Erreur', $REQ1));
	}
}



//select la derniere saison
$requete0 = mysql_query('SELECT MAX(annee) FROM phpl_saisons');

while ($row0 = mysql_fetch_array($requete0))
{      
	$anneemax = stripslashes($row0[0]);
}
mysql_free_result($requete0);
// Fin

if (empty($annee)) { $annee = $anneemax; }

$OPT_SAISON = '';

$requete1 = mysql_query('SELECT annee FROM phpl_saisons ORDER BY annee DESC');

while($row1 = mysql_fetch_array($requete1))
{
	$anneebis  = $row1['annee'];
	$anneebis2 = $anneebis + 1;

	if ($annee == $anneebis) { $SEL = ' selected="selected"'; } else { $SEL = ''; }

	$OPT_SAISON.= '		<option value="'.$anneebis.'"'.$SEL.'>'.$anneebis.'/'.$anneebis2.'</option>'."\n";
}
mysql_free_result($requete1);

if     (empty($action))								   { $STITRE = ''; $INC_PAGE = 'vide.php'; }
elseif ($action == 'equipes' AND $champ)			   { $STITRE = ' &#062; '.TEAM; $INC_PAGE = 'champ_equipes.php'; }
elseif ($action == 'joueurs' AND $champ)			   { $STITRE = ' &#062; '.JOUEURS; $INC_PAGE = 'champ_joueurs.php'; }
elseif ($action == 'arbitres' AND $champ)			   { $STITRE = ' &#062; '.ARBITRE; $INC_PAGE = 'champ_arbitres.php'; }
elseif ($action == 'dates' AND $champ)				   { $STITRE = ' &#062; '.DATE; $INC_PAGE = 'champ_dates.php'; }
elseif ($action == 'matchs' AND $champ)				   { $STITRE = ' &#062; '.MATCH; $INC_PAGE = 'champ_matchs.php'; }
elseif ($action == 'parametres' AND $champ)			   { $STITRE = ' &#062; '.PARAMETRE; $INC_PAGE = 'champ_parametres.php'; }
elseif ($action == 'resultats')						   { $STITRE = ' &#062; '.RESULT; $INC_PAGE = 'champ_resultats.php'; }
elseif ($action == 'buteurs' AND $champ)			   { $STITRE = ' &#062; '.BUTEUR; $INC_PAGE = 'champ_buteurs.php'; }
elseif ($action == 'compo' AND $champ)				   { $STITRE = ' &#062; '.COMPO; $INC_PAGE = 'champ_titulaires.php'; }
elseif ($action == 'compo2' AND $champ)				   { $STITRE = ' &#062; '.COMPO2; $INC_PAGE = 'champ_remplacants.php'; }
elseif ($action == 'tps' AND $champ)				   { $STITRE = ' &#062; '.COMPTPS; $INC_PAGE = 'champ_tps.php'; }
elseif ($action == 'tps_dom' AND $champ AND $id_match) { $STITRE = ' &#062; '.COMPTPS.' &#062 '.DOMICILE; $INC_PAGE = 'champ_tps_dom.php'; }
elseif ($action == 'tps_ext' AND $champ AND $id_match) { $STITRE = ' &#062; '.COMPTPS.' &#062 '.EXTERIEUR; $INC_PAGE = 'champ_tps_ext.php'; }
elseif ($action == 'compoCJ' AND $champ)			   { $STITRE = ' &#062; '.CJ; $INC_PAGE = 'champ_cartonJ.php'; }
elseif ($action == 'compoCR' AND $champ)			   { $STITRE = ' &#062; '.CR; $INC_PAGE = 'champ_cartonR.php'; }
elseif ($action == 'generer' AND $champ)			   { $STITRE = ' &#062; '.GENERER; $INC_PAGE = 'generer.php'; }
elseif ($action == 'convocation' AND $champ)		   { $STITRE = ''; $INC_PAGE = 'convocation.php'; }
elseif ($action == 'supp' AND $champ)				   { $STITRE = ' &#062; '.ADMIN_RENS_8; $INC_PAGE = 'champ_supp.php'; }
elseif ($action == 'creer')							   { $STITRE = ' &#062; Cr&eacute;ation d\'un championnat'; $INC_PAGE = 'creer_champ.php'; }
else												   { $STITRE = ''; $INC_PAGE = 'vide.php'; }

if (empty($champ))
{
	$AFF_CHAMP = '';
}
else
{
	$AFF_CHAMP = ' > '.affich_champ($champ);
}

?>

<h2><?php echo LEAGUE.$AFF_CHAMP.$STITRE; ?></h2>

<div class="Cadre">
<?php

if (NbrRecord('id', 'phpl_championnats') > 0)
{

?>
	<form method="post" action="" class="FormSaison">
		<label><?php echo ADMIN_JOURNEES_MSG3; ?></label>
		<select name="annee" onchange="javascript:document.location.href=('?page=championnat&amp;annee='+this.value);">
		<?php echo $OPT_SAISON; ?>
		</select>
	</form>
<?php

}

?>
	<?php affich_championnats($champ, $action, $annee); ?>
</div>

<?php echo $RESULT; ?>

<?php

include($INC_PAGE);

?>