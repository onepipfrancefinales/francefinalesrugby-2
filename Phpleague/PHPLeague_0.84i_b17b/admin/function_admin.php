<?php

function ouverture() {
	require('data_connect.php');

	if (($idconnect = @mysql_connect($hostname, $login, $password)) == false)
	{
		$error = 'Impossible de creer une connexion persistante !';

		return(0);
	}

	if (@mysql_select_db($database, $idconnect) == false)
	{
		$error = 'Impossible de selectionner la base !';

		return(0);
	}

	return($idconnect);
	return($PHPLEAGUE_RACINE);
}


function VerifSession($user_pseudo, $user_mdp)
{
	if ($user_pseudo AND $user_mdp)
	{
		$REQ = @mysql_query('SELECT pseudo, mot_de_passe FROM phpl_membres
							WHERE pseudo="'.$user_pseudo.'"
							AND admin="1"');

		if ($REQ)
		{
			$ROW = mysql_fetch_array($REQ);

			if ($ROW['mot_de_passe'] == $user_mdp) { $a = 1; } else { $a = 0; }
		}
		else
		{
			echo InfoReqSql('InfSess', 0, 'error', 'alert', 'Erreur code '.mysql_errno().' &bull; '.mysql_error());

			$a = 0;
		}
	}
	else { $a = 0; }

	return $a;
}


// Affichage des images
function Image($URL, $IMG, $ALT, $TITLE)
{
	if (file_exists($URL.$IMG))
	{
		list($WIDTH, $HEIGHT) = @getimagesize($URL.$IMG);

		$TMP = '<img src="'.$URL.$IMG.'" width="'.$WIDTH.'" height="'.$HEIGHT.'" alt="'.$ALT.'" title="'.$TITLE.'" />';
	}
	else
	{
		$TMP = '&nbsp;';
	}

	return $TMP;
}


// Affichage des erreurs des requêtes
function GestErreur($TEXT, $REQ)
{
	if (empty($REQ)) { $CODE = 'inconnu'; $ERR = 'inconnu'; } else { $CODE = mysql_errno($REQ); $ERR = mysql_error($REQ); }

	$TMP =  $TEXT.' : <i>[ Code '.$CODE.' ] - '.$ERR.'</i>';

	return $TMP;
}


// Affichage des erreurs des requêtes
function GestInclude($FICHIER)
{
	if (file_exists($FICHIER))
	{
		include($FICHIER);
	}
	else
	{
		echo InfoReqSql('InfInclude', 0, 'error', 'alert', 'Fichier <i>'.$FICHIER.'</i> inconnu.');
	}
}


// Affiche le résultat des requêtes :: ALL
function InfoReqSql($DIV, $EFFECT, $TYPE, $ICON, $TEXT)
{
	$TMP1 = '<div id="'.$DIV.'" class="ui-state-'.$TYPE.' ui-corner-all" style="margin: 0 0 10px 0; padding: 5px;"> 
			<span class="ui-icon ui-icon-'.$ICON.'" style="float: left; margin-right: .3em;"></span>
			<span class="Info">'.$TEXT.'</span>
	</div>'."\n\n";

	if ($EFFECT == 1)
	{
		$TMP2 = '	<script type="text/javascript">jQuery(function(){$(\'#'.$DIV.'\').delay(3000).effect(\'blind\',1500);});</script>
	'.$TMP1."\n\n";
	}
	else
	{
		$TMP2 = $TMP1;
	}

	return $TMP2;
}


// Affiche le menu du Championnat :: championnat.php
function affich_championnats($champ, $action, $annee)
{
	echo '	<form method="post" action="">
		<label>'.LEAGUE.'</label>
		<select name="champ" id="champ">
			<option value="0">&nbsp;</option>'."\n";

		$SELECT = ' selected="selected"';

		$REQ = mysql_query('SELECT phpl_championnats.id, phpl_divisions.nom, phpl_saisons.annee 
            				FROM phpl_championnats, phpl_divisions, phpl_saisons 
            				WHERE phpl_championnats.id_division = phpl_divisions.id 
            				AND phpl_championnats.id_saison = phpl_saisons.id 
            				AND phpl_saisons.annee = '.$annee.'
            				ORDER BY annee DESC, id');

		while ($ROW = mysql_fetch_array($REQ))
		{
			if ($champ == $ROW['id']) { $SEL = $SELECT; } else { $SEL = ''; }

			echo '			<option value="'.$ROW['id'].'"'.$SEL.'>'.$ROW['nom'].'</option>'."\n";
		}
		mysql_free_result($REQ);

		if ($action == 'equipes')    { $SEL01 = $SELECT; } else { $SEL01 = ''; }
		if ($action == 'joueurs')    { $SEL02 = $SELECT; } else { $SEL02 = ''; }
		if ($action == 'dates')      { $SEL03 = $SELECT; } else { $SEL03 = ''; }
		if ($action == 'matchs')     { $SEL04 = $SELECT; } else { $SEL04 = ''; }
		if ($action == 'parametres') { $SEL05 = $SELECT; } else { $SEL05 = ''; }
		if ($action == 'resultats')  { $SEL06 = $SELECT; } else { $SEL06 = ''; }
		if ($action == 'buteurs')    { $SEL07 = $SELECT; } else { $SEL07 = ''; }
		if ($action == 'compo')      { $SEL08 = $SELECT; } else { $SEL08 = ''; }
		if ($action == 'compo2')     { $SEL09 = $SELECT; } else { $SEL09 = ''; }
		if ($action == 'tps')        { $SEL10 = $SELECT; }
		elseif ($action == 'tps_dom'){ $SEL10 = $SELECT; }
		elseif ($action == 'tps_ext'){ $SEL10 = $SELECT; }
		else                         { $SEL10 = ''; }
		if ($action == 'compoCJ')    { $SEL11 = $SELECT; } else { $SEL11 = ''; }
		if ($action == 'compoCR')    { $SEL12 = $SELECT; } else { $SEL12 = ''; }
		if ($action == 'generer')    { $SEL13 = $SELECT; } else { $SEL13 = ''; }
		if ($action == 'arbitres')   { $SEL14 = $SELECT; } else { $SEL14 = ''; }
		if ($action == 'supp')       { $SEL15 = $SELECT; } else { $SEL15 = ''; }

		echo '		</select>
		<label>Choix</label>
		<select name="action" id="action">
			<option value="0">&nbsp;</option>
			<option value="equipes"'.$SEL01.'>'.EQUIPE.'</option>
			<option value="arbitres"'.$SEL14.'>'.ARBITRE.'</option>
			<option value="joueurs"'.$SEL02.'>'.JOUEURS.'</option>
			<option value="dates"'.$SEL03.'>'.DATE.'</option>
			<option value="matchs"'.$SEL04.'>'.MATCH.'</option>
			<option value="resultats"'.$SEL06.'>'.RESULT.'</option>
			<option value="buteurs"'.$SEL07.'>'.BUTEUR.'</option>
			<option value="compo"'.$SEL08.'>'.COMPO.'</option>
			<option value="compo2"'.$SEL09.'>'.COMPO2.'</option>
			<option value="tps"'.$SEL10.'>'.COMPTPS.'</option>
			<option value="compoCJ"'.$SEL11.'>'.CJ.'</option>
			<option value="compoCR"'.$SEL12.'>'.CR.'</option>
			<optgroup label="Gestion">
				<option value="generer"'.$SEL13.'>'.GENERER.'</option>
				<option value="parametres"'.$SEL05.'>'.PARAMETRE.'</option>
				<option value="supp"'.$SEL15.'>'.ADMIN_RENS_8.'</option>
			</optgroup>
		</select>
		<input type="hidden" name="page" value="championnat" />
		<input type="hidden" name="annee" value="'.$annee.'" />
		<input type="submit" value="Envoyer" />
		<input type="button" value="'.ADMIN_CHAMP_CREER.'" onclick="window.location.href=\'?page=championnat&amp;action=creer\'" />
	</form>'."\n";
}


function affich_champ($champ)
{
	if (!empty($champ))
	{
		$REQ = mysql_query('SELECT phpl_divisions.nom, phpl_saisons.annee
							FROM phpl_championnats, phpl_divisions, phpl_saisons
							WHERE phpl_championnats.id_division = phpl_divisions.id
							AND phpl_championnats.id_saison = phpl_saisons.id
							AND phpl_championnats.id='.$champ.'
							ORDER BY annee DESC');
		$NBR = mysql_num_rows($REQ);

		if ($NBR > 0)
		{
			while ($ROW = mysql_fetch_array($REQ))
			{
				$TMP = stripslashes($ROW['nom']).' saison '.$ROW['annee'].'/'.($ROW['annee'] + 1);
			}
		}
		else
		{
			$TMP = 0;
		}
	
		mysql_free_result($REQ);
	}
	else
	{
		$TMP = 0;
	}

	return $TMP;
}


function affich_gr_champ($gr_champ)
{
	$REQ = mysql_query('SELECT nom FROM phpl_gr_championnats WHERE id='.$gr_champ);
	$ROW = mysql_fetch_array($REQ);

	mysql_free_result($REQ);

	return $ROW['nom'];
}


function divisions_menu()
{
$requete ="SELECT phpl_divisions.id, phpl_divisions.nom FROM phpl_divisions ORDER by nom";
$result = mysql_query($requete);
echo "<select name=division>";
echo "<option></option>";
while($row = mysql_fetch_array($result))
                {
                echo ("<option value=\"$row[0]\">$row[1]</option>\n");
                }
echo "</select>";
}


function saisons_menu()
{
 $requete ="SELECT phpl_saisons.id, phpl_saisons.annee FROM phpl_saisons ORDER by annee";
$result = mysql_query($requete);
echo "<select name=saison>";
echo "<option></option>";
while($row = mysql_fetch_array($result))
                {
                $saison1=$row[1]+1;
                echo ("<option value=\"$row[0]\">$row[1]/$saison1</option>\n");
                }
echo "</select>";
}


function clubs_menu()
{    
	echo '<select name="club[]" size="10" multiple="multiple" class="Large200M required">'."\n";

	$REQ = mysql_query('SELECT id, nom FROM phpl_clubs ORDER BY nom ASC');

	while($ROW = mysql_fetch_array($REQ))
	{
		echo '<option value="'.$ROW['id'].'">'.stripslashes($ROW['nom']).'</option>'."\n";
	}
	mysql_free_result($REQ);

	echo '</select>'."\n";
}


function clubs_select($ID_EQUIPE)
{    
	echo '<select name="id_equipe" class="required">
	<option value="">&nbsp;</option>'."\n";

	$REQ = mysql_query('SELECT id, nom FROM phpl_clubs ORDER BY nom ASC');

	while($ROW = mysql_fetch_array($REQ))
	{
		if ($ROW['id'] == $ID_EQUIPE) { $SEL = ' selected="selected"'; } else { $SEL = ''; }

		echo '<option value="'.$ROW['id'].'"'.$SEL.'>'.stripslashes($ROW['nom']).'</option>'."\n";
	}
	mysql_free_result($REQ);

	echo '</select>'."\n";
}


function champ_menu()
{
	echo '<select name="champ[]" size="10" multiple="multiple">'."\n";

	$REQ = mysql_query('SELECT phpl_championnats.id, phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1
						FROM phpl_championnats, phpl_divisions, phpl_saisons
						WHERE phpl_divisions.id = phpl_championnats.id_division
						AND phpl_saisons.id = phpl_championnats.id_saison
						ORDER BY annee DESC, phpl_divisions.nom');

	while($ROW = mysql_fetch_array($REQ))
	{
		echo '<option value="'.$ROW[0].'">'.$ROW[1].' '.$ROW[2].'/'.$ROW[3].'</option>'."\n";
	}
	mysql_free_result($REQ);

	echo '</select>'."\n";
}


function equipes_menu($champ)
{
	$REQ = mysql_query('SELECT phpl_equipes.id, phpl_clubs.nom
						FROM phpl_equipes, phpl_clubs
						WHERE id_champ = '.$champ.'
						AND phpl_clubs.id = phpl_equipes.id_club
						ORDER BY nom ASC');

	$NBR = mysql_num_rows($REQ);

	if ($NBR == 0)
	{
		echo '<p>Pas de clubs &agrave; supprimer.</p>';

		define('VAL', ' disabled="disabled"');

		return $NBR;
	}
	else
	{
		echo '<select name="club[]" multiple="multiple" size="10" class="Large200M required">'."\n";

		while($ROW = mysql_fetch_array($REQ))
		{
			echo '<option value="'.$ROW['id'].'">'.stripslashes($ROW['nom']).'</option>'."\n";
		}

		echo '</select>'."\n";


		define('VAL', '');

	}

	mysql_free_result($REQ);
}


function champ_gr_menu($gr_champ)
{
	//echo '<select name="champ[]" size="10" multiple="multiple">';

	$REQ1 = mysql_query('SELECT id_champ FROM phpl_gr_championnats WHERE id='.$gr_champ);

	while ($ROW1 = mysql_fetch_array($REQ1))
	{
		$REQ2 = mysql_query('SELECT phpl_championnats.id, phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1
				FROM phpl_championnats, phpl_divisions, phpl_saisons
				WHERE phpl_divisions.id=phpl_championnats.id_division
				AND phpl_saisons.id=phpl_championnats.id_saison
				AND phpl_championnats.id='.$ROW1[0].'
				ORDER BY annee DESC, phpl_divisions.nom');

		while ($ROW2 = mysql_fetch_array($REQ2))
		{
			//echo '<option value="'.$ROW2[0].'">'.$ROW2[1].' '.$ROW2[2].'/'.$ROW2[3].'</option>'."\n";
			echo $ROW2[1].' &bull; '.$ROW2[2].'/'.$ROW2[3].'<br />'."\n";
		}
		mysql_free_result($REQ2);
	}
	mysql_free_result($REQ1);

	//echo '</select>'."\n";
}


// Affiche le nombre de journées
function journees($champ, $numero, $action, $annee)
{
	echo '<div class="Large100P">
	<ul id="NumJour" class="ui-widget ui-helper-clearfix">'."\n";

	$REQ = mysql_query('SELECT numero, id FROM phpl_journees WHERE id_champ='.$champ.' ORDER BY numero ASC');

	while ($ROW = mysql_fetch_array($REQ))
	{
		if ($numero == $ROW['numero']) { $SEL = ' class="Select"'; } else { $SEL = ''; }
		if ($ROW['numero'] < 10) { $NUM = '0'.$ROW['numero']; } else { $NUM = $ROW['numero']; }

		echo '	<li class="ui-state-default ui-corner-all"><a href="?page=championnat&action='.$action.'&champ='.$champ.'&id_journee='.$ROW['id'].'&numero='.$ROW['numero'].'&annee='.$annee.'"'.$SEL.'>'.$NUM.'</a></li>'."\n";
	}
	mysql_free_result($REQ);

	echo '</div>
	</ul>'."\n\n";
}


function journees2($champ, $numero, $action, $annee)
{        
  $requete="SELECT numero, id FROM phpl_journees WHERE id_champ='$champ' ORDER BY numero";
  $resultats=mysql_query($requete);
  while ($row=mysql_fetch_array($resultats))
     {
       if ($numero==$row[0]) {echo "<b><a href=\"?page=championnat&action=tps&champ=$champ&id_journee=$row[1]&numero=$row[0]&annee=$annee\">$row[0]</a></b> ";}
       else {echo "<a href=\"?page=championnat&action=tps&id_journee=$row[1]&champ=$champ&numero=$row[0]&annee=$annee\">$row[0]</a> ";}
     }

}


// Date/Heure US vers FR
function format_date_fr($date) {
	list($annee, $mois, $jour)      = explode('-', substr($date, 0, 10));
	list($heure, $minute, $seconde) = explode(':', substr($date, 11, 7));

	return $jour.'/'.$mois.'/'.$annee.' '.$heure.':'.$minute;
}


function nb_equipes($id_champ)
{
	$REQ = mysql_query('SELECT id FROM phpl_equipes WHERE id_champ='.$id_champ);
	$NBR = mysql_num_rows($REQ);

	mysql_free_result($REQ);

	return $NBR;
}


function format_date_us($date)
{
	list($jour, $mois, $annee) = explode('/', substr($date, 0, 10));
	list($heure, $minute)      = explode(':', substr($date, 10, 22));

	return $annee.'-'.$mois.'-'.$jour.' '.$heure.':'.$minute.':00';
}

// AAAA-MM-JJ => JJMMAAAA
function date_us_vers_fr($dateUS)
{
	$elementsdate = explode('-', $dateUS);
	$jour         = $elementsdate[2];
	$mois         =  $elementsdate[1];
	$annee        = $elementsdate[0];

	return $dateFR = $jour.$mois.$annee;
}


function date_fr_vers_us($dateFR)
{
	if ($dateFR)
	{
		$elementsdate = chunk_split($dateFR, 2, '-');
		$elementsdate = explode('-', $elementsdate);

		$annee  = $elementsdate[2].$elementsdate[3];
		$mois   = $elementsdate[1];
		$jour   = $elementsdate[0];
		$dateUS = $annee.'-'.$mois.'-'.$jour;

		return $dateUS;
	}
	else
	{
		return '00000000';
	}
}


function nom_club($id_equipe)
{
	$REQ = mysql_query('SELECT nom 
						FROM phpl_clubs, phpl_equipes
						WHERE phpl_clubs.id = phpl_equipes.id_club
						AND phpl_equipes.id = '.$id_equipe);

	$ROW = mysql_fetch_array($REQ);

	mysql_free_result($REQ);

	return stripslashes($ROW['nom']);
}


function nb_journees($id_champ)
{
	$REQ = mysql_query('SELECT id FROM phpl_equipes WHERE id_champ = '.$id_champ);

	$NBR_E = mysql_num_rows($REQ);
	$NBR_J = ($NBR_E * 2) - 2;

	mysql_free_result($REQ);

	return $NBR_J;
}


function nb_matchs($numero, $champ)
{
	$REQ = mysql_query('SELECT *
						FROM phpl_matchs, phpl_journees
						WHERE phpl_matchs.id_journee = phpl_journees.id
						AND phpl_journees.numero = '.$numero.'
						AND phpl_journees.id_champ = '.$champ);

	$NBR = mysql_num_rows($REQ);

	mysql_free_result($REQ);

	return $NBR;
}


// *** REMPLI LA TABLE CLMNT
function db_clmnt($champ, $debut, $fin, $cache)
{
	if ($cache == 1)
	{
		mysql_query('DELETE FROM phpl_clmnt_cache WHERE ID_CHAMP='.$champ);
	}
	else
	{
		mysql_query('DELETE FROM phpl_clmnt');
	}

	if (!$fin)   { $fin   = (nb_equipes($champ) * 2) - 2; }
	if (!$debut) { $debut = 1; }

	// Sélection des paramètres
	$REQ2 = mysql_query('SELECT pts_victoire, pts_nul, pts_defaite FROM phpl_parametres WHERE id_champ='.$champ);

	while ($ROW2 = mysql_fetch_array($REQ2))
	{
		$pts_victoire = $ROW2['pts_victoire'];
		$pts_nul      = $ROW2['pts_nul'];
		$pts_defaite  = $ROW2['pts_defaite'];
	}
	mysql_free_result($REQ2);

	// Victoires domicile
	$REQ3 = mysql_query('SELECT dom.id, COUNT(dom.id), phpl_clubs.nom, SUM(buts_dom), SUM(buts_ext)
			FROM phpl_equipes AS dom, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
			WHERE dom.id_champ='.$champ.'
			AND dom.id_club=phpl_clubs.id
			AND dom.id=phpl_matchs.id_equipe_dom
			AND buts_dom > buts_ext
			AND phpl_championnats.id=phpl_journees.id_champ
			AND phpl_journees.id=phpl_matchs.id_journee
			AND phpl_journees.numero>='.$debut.'
			AND phpl_journees.numero<='.$fin.'
			GROUP BY phpl_clubs.nom');

	while($row = mysql_fetch_array($REQ3))
	{
		$clmnt[$row[2]]['GDOM'] = $row[1];

		if (!isset($clmnt[$row[2]]['BUTSDOMPOUR']))
		{
			$clmnt[$row[2]]['BUTSDOMPOUR'] = $row[3];
		}
		else
		{
			$clmnt[$row[2]]['BUTSDOMPOUR']+= $row[3];
		}

		if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE']))
		{
			$clmnt[$row[2]]['BUTSDOMCONTRE'] = $row[4];
		}
		else
		{
			$clmnt[$row[2]]['BUTSDOMCONTRE']+= $row[4];
		}
	}
	mysql_free_result($REQ3);

	// Defaites domicile
	$query="SELECT dom.id, count(dom.id), phpl_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpl_equipes as dom, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpl_clubs.id
      AND dom.id=phpl_matchs.id_equipe_dom
      AND buts_dom < buts_ext
      AND phpl_championnats.id=phpl_journees.id_champ
      AND phpl_journees.id=phpl_matchs.id_journee
      AND phpl_journees.numero>='$debut'
      AND phpl_journees.numero<='$fin'
      GROUP BY phpl_clubs.nom";

       $dom = mysql_query($query) or die (mysql_error());

	while($row= mysql_fetch_array($dom))
	{
		$clmnt[$row[2]]['PDOM'] = $row[1];

		if (!isset($clmnt[$row[2]]['BUTSDOMPOUR']))
		{
			$clmnt[$row[2]]['BUTSDOMPOUR'] = $row[3];
		}
		else
		{
			$clmnt[$row[2]]['BUTSDOMPOUR'] += $row[3];
		}

		if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE']))
		{
			$clmnt[$row[2]]['BUTSDOMCONTRE'] = $row[4];
		}
		else
		{
			$clmnt[$row[2]]['BUTSDOMCONTRE'] += $row[4];
		}
	}

	// Nuls domicile
$query="SELECT dom.id, count(dom.id), phpl_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpl_equipes as dom, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpl_clubs.id
      AND dom.id=phpl_matchs.id_equipe_dom
      AND buts_dom = buts_ext
      AND buts_dom is not null
      AND buts_ext is not null
      AND phpl_championnats.id=phpl_journees.id_champ
      AND phpl_journees.id=phpl_matchs.id_journee
      AND phpl_journees.numero>='$debut'
      AND phpl_journees.numero<='$fin'
      GROUP by phpl_clubs.nom ";

$dom = mysql_query($query) or die (mysql_error());

     while($row= mysql_fetch_array($dom))
     {
     $clmnt[$row[2]]['NDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     }
// Resultats à domicile
$query="SELECT phpl_clubs.nom FROM phpl_clubs, phpl_equipes, phpl_championnats
WHERE phpl_equipes.id_champ=phpl_championnats.id
      AND phpl_championnats.id='$champ'
      AND phpl_equipes.id_club=phpl_clubs.id";

$result=mysql_query($query) or die (mysql_error());

        
// RESULTATS EXTERIEURS :
// victoires exterieur
$query="SELECT ext.id, count(ext.id), phpl_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpl_equipes as ext, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpl_clubs.id
      AND ext.id=phpl_matchs.id_equipe_ext
      AND buts_ext > buts_dom
      AND phpl_championnats.id=phpl_journees.id_champ
      AND phpl_journees.id=phpl_matchs.id_journee
      AND phpl_journees.numero>='$debut'
      AND phpl_journees.numero<='$fin'
      GROUP by phpl_clubs.nom ";

$dom = mysql_query($query) or die (mysql_error());;


     while($row= mysql_fetch_array($dom))
     {
     $clmnt[$row[2]]['GEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}

     }
// Defaites exterieur
$query="SELECT ext.id, count(ext.id), phpl_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpl_equipes as ext, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpl_clubs.id
      AND ext.id=phpl_matchs.id_equipe_ext
      AND buts_ext < buts_dom
      AND phpl_championnats.id=phpl_journees.id_champ
      AND phpl_journees.id=phpl_matchs.id_journee
      AND phpl_journees.numero>='$debut'
      AND phpl_journees.numero<='$fin'
      GROUP by phpl_clubs.nom ";

$dom=mysql_query($query) or die (mysql_error());
                    
      While($row= mysql_fetch_array($dom))
      {
      $clmnt[$row[2]]['PEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
      }

	// Nuls exterieur
	$query = "SELECT ext.id, COUNT(ext.id), phpl_clubs.nom, SUM(buts_ext), SUM(buts_dom) FROM phpl_equipes AS ext, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
			WHERE ext.id_champ='$champ'
			AND ext.id_club=phpl_clubs.id
			AND ext.id=phpl_matchs.id_equipe_ext
			AND buts_ext = buts_dom
			AND buts_dom IS NOT null
			AND buts_ext IS NOT null
			AND phpl_championnats.id=phpl_journees.id_champ
			AND phpl_journees.id=phpl_matchs.id_journee
			AND phpl_journees.numero>='$debut'
			AND phpl_journees.numero<='$fin'
			GROUP BY phpl_clubs.nom";

	$dom = mysql_query($query) or die (mysql_error());

	while ($row = mysql_fetch_array($dom))
	{
		$clmnt[$row[2]]['NEXT'] = $row[1];

		if (!isset($clmnt[$row[2]]['BUTSEXTPOUR']))
		{
			$clmnt[$row[2]]['BUTSEXTPOUR'] = $row[3];
		}
		else
		{
			$clmnt[$row[2]]['BUTSEXTPOUR'] += $row[3];
		}

		if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE']))
		{
			$clmnt[$row[2]]['BUTSEXTCONTRE'] = $row[4];
		}
		else
		{
			$clmnt[$row[2]]['BUTSEXTCONTRE'] += $row[4];
		}
	}

	// TABLEAU DE CLASSEMENT
	$query = "SELECT phpl_clubs.nom, phpl_equipes.penalite, phpl_equipes.id
        FROM phpl_clubs, phpl_equipes, phpl_championnats
        WHERE phpl_equipes.id_champ=phpl_championnats.id
        AND phpl_championnats.id='$champ'
        AND phpl_equipes.id_club=phpl_clubs.id";

	$result = mysql_query($query) or die (mysql_error());

	if (mysql_num_rows($result) == 0)
	{
		$query="SELECT phpl_clubs.nom, phpl_equipes.id 
            FROM phpl_clubs, phpl_equipes, phpl_championnats
            WHERE phpl_equipes.id_champ=phpl_championnats.id
            AND phpl_championnats.id='$champ'
            AND phpl_equipes.id_club=phpl_clubs.id";

		$result = mysql_query($query) or die (mysql_error());
	}

    while ($row = mysql_fetch_array($result))
    {
		$NOM           = addslashes($row[0]);
		$PEN           = $row['penalite'];

		if (empty($clmnt[$NOM]['GDOM'])) { $DOMG = ''; } else { $DOMG = $clmnt[$NOM]['GDOM']; }
		if (empty($clmnt[$NOM]['NDOM'])) { $DOMN = ''; } else { $DOMN = $clmnt[$NOM]['NDOM']; }
		if (empty($clmnt[$NOM]['PDOM'])) { $DOMP = ''; } else { $DOMP = $clmnt[$NOM]['PDOM']; }
		if (empty($clmnt[$NOM]['GEXT'])) { $EXTG = ''; } else { $EXTG = $clmnt[$NOM]['GEXT']; }
		if (empty($clmnt[$NOM]['NEXT'])) { $EXTN = ''; } else { $EXTN = $clmnt[$NOM]['NEXT']; }
		if (empty($clmnt[$NOM]['PEXT'])) { $EXTP = ''; } else { $EXTP = $clmnt[$NOM]['PEXT']; }
		if (empty($clmnt[$NOM]['BUTSDOMPOUR'])) { $DOMBUTSPOUR = ''; } else { $DOMBUTSPOUR = $clmnt[$NOM]['BUTSDOMPOUR']; }
		if (empty($clmnt[$NOM]['BUTSEXTPOUR'])) { $EXTBUTSPOUR = ''; } else { $EXTBUTSPOUR = $clmnt[$NOM]['BUTSEXTPOUR']; }
		if (empty($clmnt[$NOM]['BUTSDOMCONTRE'])) { $DOMBUTSCONTRE = ''; } else { $DOMBUTSCONTRE = $clmnt[$NOM]['BUTSDOMCONTRE']; }
		if (empty($clmnt[$NOM]['BUTSEXTCONTRE'])) { $EXTBUTSCONTRE = ''; } else { $EXTBUTSCONTRE = $clmnt[$NOM]['BUTSEXTCONTRE']; }

		$DOMJOUES      = $DOMG + $DOMN + $DOMP;
		$EXTJOUES      = $EXTG + $EXTN + $EXTP;
		$JOUES         = $EXTJOUES + $DOMJOUES;
		$DOMPOINTS     = ($DOMG * $pts_victoire) + ($DOMN * $pts_nul) + ($DOMP * $pts_defaite);
		$EXTPOINTS     = ($EXTG * $pts_victoire) + ($EXTN * $pts_nul) + ($EXTP * $pts_defaite);
		$POINTS        = $DOMPOINTS + $EXTPOINTS + $PEN;
		$G             = $EXTG + $DOMG;
		$N             = $EXTN + $DOMN;
		$P             = $EXTP + $DOMP;
		$BUTSPOUR      = $DOMBUTSPOUR + $EXTBUTSPOUR;
		$BUTSCONTRE    = $DOMBUTSCONTRE + $EXTBUTSCONTRE;
		$DIFF          = $BUTSPOUR - $BUTSCONTRE;
		$DOMDIFF       = $DOMBUTSPOUR - $DOMBUTSCONTRE;
		$EXTDIFF       = $EXTBUTSPOUR - $EXTBUTSCONTRE;

		$question = 'INSERT INTO ';

		if ($cache == 1) { $question.= 'phpl_clmnt_cache '; }
		else             { $question.= 'phpl_clmnt '; }
            
		$question.= "SET NOM='$NOM',
          ID_EQUIPE='$row[id]',
          ID_CHAMP='$champ',
          POINTS='$POINTS',
          DOMPOINTS='$DOMPOINTS',
          EXTPOINTS='$EXTPOINTS',
          JOUES= '$JOUES',
          DOMJOUES= '$DOMJOUES',
          EXTJOUES= '$EXTJOUES',
          G='$G',
          DOMG='$DOMG',
          EXTG='$EXTG',
          N='$N',
          DOMN='$DOMN',
          EXTN='$EXTN',
          P='$P',
          DOMP='$DOMP',
          EXTP='$EXTP',
          BUTSPOUR='$BUTSPOUR',
          DOMBUTSPOUR='$DOMBUTSPOUR',
          EXTBUTSPOUR='$EXTBUTSPOUR',
          BUTSCONTRE='$BUTSCONTRE',
          DOMBUTSCONTRE='$DOMBUTSCONTRE',
          EXTBUTSCONTRE='$EXTBUTSCONTRE',
          DIFF='$DIFF',
          DOMDIFF='$DOMDIFF',
          EXTDIFF='$EXTDIFF',
          PEN='$PEN'";

		$result2 = mysql_query($question) or die(mysql_error());
	}
    
	if ($cache == 1)
	{
		$requete = "DELETE FROM phpl_clmnt_cache WHERE nom='exempte'" or die (mysql_error());
	}
	else
	{
		$requete = "DELETE FROM phpl_clmnt WHERE nom='exempte'" or die (mysql_error());
	}

	$resultat = mysql_query($requete) or die (mysql_error());
}


// Nombres de renseignement dans cette classe à partir de l'id_classe :: phpl_classe.php
function nb_classe($data)
{
	$REQ = mysql_query('SELECT id FROM phpl_rens WHERE id_classe = '.$data);
	$NBR = mysql_num_rows($REQ);

	mysql_free_result($REQ);

	return $NBR;
}


// Nombres de classes enregistrées :: classe.php
function nb_classe2()
{
	$REQ = mysql_query('SELECT * FROM phpl_classe');
	$NBR = mysql_num_rows($REQ);

	mysql_free_result($REQ);

	return $NBR;
}


// Nombres de renseignements classés :: rens.php
function nb_rens()
{
$query="SELECT id FROM phpl_rens where id_classe>'0'";
$result=mysql_query($query);
$nb_rens=mysql_num_rows( $result );
return("$nb_rens");
}


// Nombres de renseignements enregistrés :: rens.php
function nb_rens2()
{
	$REQ = mysql_query('SELECT * FROM phpl_rens');
	$NBR = mysql_num_rows($REQ);

	mysql_free_result($REQ);

	return $NBR;
}


// ID du renseignement à partir du nom du rens :: rens.php
function rens2($rens)
{
	$REQ = mysql_query('SELECT id, nom FROM phpl_rens WHERE nom='.$rens);
	$ROW = mysql_fetch_array($REQ) or die (mysql_error());

	mysql_free_result($REQ);

	return $ROW['id'];
}


// Affichage des renseignements :: gestequipes.php
function aff_rens($id_classe, $id_clubs)
{
	$REQ = mysql_query('SELECT phpl_donnee.id, phpl_donnee.nom, id_rens, id_clubs, phpl_rens.id, phpl_rens.nom, phpl_rens.id_classe, phpl_clubs.id, etat, phpl_donnee.url, phpl_rens.url
						FROM phpl_donnee, phpl_rens, phpl_clubs
						WHERE id_clubs='.$id_clubs.'
						AND id_clubs=phpl_clubs.id
						AND id_rens=phpl_rens.id
						AND id_classe='.$id_classe.'
						AND etat="1" ORDER BY rang ASC');

	$NBR = mysql_num_rows($REQ);

	$TMP = '';

	if ($NBR == 0)
	{
		$TMP.= '				<tr><td colspan="2">'.ADMIN_EQUIPE_8.'</td></tr>'."\n";
	}
	else
	{
		while($ROW = mysql_fetch_array($REQ))
		{
			$donnee_nom = stripslashes($ROW[1]);
			$rens_nom   = stripslashes($ROW[5]);

			$TMP.= '			<tr>'."\n";

			if (empty($ROW[9]) AND empty($ROW[10]))
			{
				$TMP.= '				<td class="Large50P"><b>'.$rens_nom.'</b></td>
				<td class="Large50P">'.$donnee_nom.'</td>'."\n";
			}
			elseif (empty($ROW[9]))
			{
				$TMP.= '				<td class="Large50P"><b><a href="'.$ROW[10].'">'.$rens_nom.'</a></b></td>
				<td class="Large50P">'.$donnee_nom.'</td>'."\n";
			}
			elseif (empty($ROW[10]))
			{
				$TMP.= '				<td class="Large50P"><b>'.$rens_nom.'</b></td>
				<td class="Large50P"><a href="'.$ROW[9].'">'.$donnee_nom.'</a></td>'."\n";
			}
			else
			{
				$TMP.= '				<td class="Large50P"><b><a href="'.$ROW[10].'">'.$rens_nom.'</a></b></td>
				<td class="Large50P"><a href="'.$ROW[9].'">'.$donnee_nom.'</a></td>'."\n";
			}

			$TMP.= '			</tr>'."\n";
		}
		mysql_free_result($REQ);
	}

	return $TMP;
}


//fonction pour les convocations
function effectifbis($id_club,$id_champ,$effectif_choisis){
	$requete ="SELECT phpl_effectif.id, phpl_effectif.id_equipe, phpl_joueurs.nom, phpl_joueurs.prenom
         FROM phpl_joueurs, phpl_clubs, phpl_equipes, phpl_effectif
         WHERE phpl_effectif.id_equipe=phpl_equipes.id
         AND phpl_equipes.id_club=phpl_clubs.id
         AND phpl_clubs.id=$id_club
         AND phpl_equipes.id_champ=$id_champ
         AND phpl_effectif.id_joueur=phpl_joueurs.id
         and phpl_effectif.id not in (-1";
          $i=0;
          while ($i < count($effectif_choisis)){
    	   $requete.=",".$effectif_choisis[$i]['id'];
    	   $i++;
          }
         $requete .=" ) ORDER BY phpl_joueurs.nom, phpl_joueurs.prenom";
         $result=mysql_query($requete) or die ("probleme " .mysql_error());
         //if (!$resultJ) die (mysql_error());
        echo "<select name=\"effectif[]\" multiple=\"multiple\" size=\"20\" >";
	 while ($row=mysql_fetch_array($result))
              	{
                 $joueurs_nom = stripslashes($row[2]);
	         $joueurs_prenom = stripslashes($row[3]);

		 echo "<option value=\"$row[0]\">$joueurs_nom $joueurs_prenom</option>";
                }
         echo "</select><br />";

}

// Sélection des joueurs :: convocation.php
function effectif($id_club, $id_champ, $effectif_choisis)
{
	$i   = 0;
	$REQ = mysql_query('SELECT phpl_effectif.id, phpl_effectif.id_equipe, phpl_joueurs.nom, phpl_joueurs.prenom, phpl_joueurs.position_terrain, phpl_joueurs.email
						FROM phpl_effectif, phpl_joueurs, phpl_clubs, phpl_equipes
						WHERE phpl_effectif.id_equipe=phpl_equipes.id
						AND phpl_equipes.id_club=phpl_clubs.id
						AND phpl_clubs.id='.$id_club.'
						AND phpl_equipes.id_champ='.$id_champ.'
						AND phpl_effectif.id_joueur=phpl_joueurs.id
						ORDER BY phpl_joueurs.position_terrain ASC, phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC');

	$NBR = mysql_num_rows($REQ);

	if ($NBR != 0)
	{
		define('NBR_EFFECTIF', 1);

		echo '			<thead>
				<tr class="ui-widget-header">
					<th>&nbsp;</th>
					<th class="TxtLeft">Joueurs</th>
					<th class="TxtLeft">Email</th>
					<th class="TxtLeft">Position</th>
				</tr>
			</thead>
			<tbody>'."\n";

		while ($ROW = mysql_fetch_array($REQ))
		{
			if (isset($effectif_choisis[$ROW[0]])) { $CHECK = ' checked="checked"'; } else { $CHECK = ''; }

			if (empty($ROW[5])) { $ETAT = ' disabled="disabled"'; } else { $ETAT = ''; }

			if (($i%2) == 0) { $CLASS = 'ligne1'; } else { $CLASS = 'ligne2'; }

			echo '				<tr class="'.$CLASS.'">
					<td><input type="checkbox" name="effectif[]" id="eff'.$ROW[0].'" value="'.$ROW[0].'"'.$CHECK.$ETAT.' /></td>
					<td><label for="eff'.$ROW[0].'">'.stripslashes($ROW[2].' '.$ROW[3]).'</label></td>
					<td>'.$ROW[5].'</td>
					<td>'.stripslashes($ROW[4]).'</td>
				</tr>'."\n";

			$i++;
		}

		echo '			</tbody>'."\n";
	}
	else
	{
		define('NBR_EFFECTIF', 0);

		echo '			<tbody>
				<tr class="'.$CLASS.'">
					<td colspan="4">Aucun joueur pour cette équipe.</td>
				</tr>
			</tbody>'."\n";
	}

	mysql_free_result($REQ);
}


function club_menu()
{    
    $requete ="SELECT phpl_clubs.id, phpl_clubs.nom FROM phpl_clubs ORDER by nom";
    $result = mysql_query($requete);
    echo "<select name=\"club\" onchange=\"javascript:document.location.href=('?page=convocations&champ=$champ&club='+this.value);\" class=\"inputbox\">";
      while($row = mysql_fetch_array($result))
      {
        $row[1] = stripslashes($row[1]);
        echo ("<option value=\"$row[0]\">$row[1]\n");
        echo ("</option>\n");
      }
echo "</select>";
}


function champ_menu_for()
{
    $requete = "SELECT phpl_championnats.id, phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1 ";
    $requete .=" FROM phpl_championnats, phpl_divisions, phpl_saisons, phpl_equipes ";
    $requete .=" WHERE phpl_divisions.id=phpl_championnats.id_division AND phpl_saisons.id=phpl_championnats.id_saison ";
    $requete .=" and phpl_equipes.id_champ=phpl_championnats.id";
    $requete .=" ORDER by annee desc, phpl_divisions.nom";
    $result = mysql_query($requete);
    echo "<select name=\"champ\" onchange=\"javascript:document.location.href=('?page=convocations&club=$club&champ='+this.value);\" class=\"inputbox\">";
      while($row = mysql_fetch_array($result))
      {
        echo ("<option value=\"$row[0]\">$row[1] $row[2]/$row[3]\n");
        echo ("</option>\n");
      }
echo "</select>";
}


// Choix de la saison :: convocation.php
function champ_choix($champ)
{
	$VAL = '<option value="">&nbsp;</option>'."\n";
	$REQ = mysql_query('SELECT phpl_divisions.nom, phpl_saisons.annee, phpl_championnats.id
						FROM phpl_championnats, phpl_divisions, phpl_saisons
						WHERE phpl_championnats.id_division=phpl_divisions.id
						AND phpl_championnats.id_saison=phpl_saisons.id
						ORDER BY phpl_saisons.annee DESC, phpl_championnats.id');

	while ($ROW = mysql_fetch_array($REQ))
	{
		if ($champ == $ROW[2]) { $SEL = ' selected="selected"'; } else { $SEL = ''; }

		$VAL.= '			<option value="'.$ROW[2].'"'.$SEL.'>'.$ROW[0].' '.$ROW[1].'/'.($ROW[1] + 1).'</option>'."\n";
	}
	mysql_free_result($REQ);

?>
	<form method="post" action="" class="FormSaison">
		<label><?php echo ADMIN_TAPVERT_MSG2; ?></label>
		<select name="champ" onchange="javascript:document.location.href=('?page=convocations&amp;champ=' + this.value);">
			<?php echo $VAL; ?>
        </select>
	</form>

<?php
}


// Choix de la saison :: convocation.php
function champ_choix2($champ, $club) {
$requete = "SELECT distinct phpl_championnats.id, phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1 ";
    $requete .=" FROM phpl_championnats, phpl_divisions, phpl_saisons, phpl_equipes ";
    $requete .=" WHERE phpl_divisions.id=phpl_championnats.id_division AND phpl_saisons.id=phpl_championnats.id_saison ";
    $requete .=" and phpl_equipes.id_champ=phpl_championnats.id";
    $requete .=" ORDER by annee desc, phpl_divisions.nom";
    $result = mysql_query($requete);
    echo "<select name=\"champ\" onchange=\"javascript:document.location.href=('?page=convocations&club=$club&champ='+this.value);\" class=\"inputbox\">";
    while($row = mysql_fetch_array($result))
      {
         echo "<option ";

       if ($champ==$row[0]) 
       {
       	echo " selected=\"selected\" ";
       }
       echo ("value=\"$row[0]\">$row[1] $row[2]/$row[3]\n");

        echo ("</option>\n");
      }
echo "</select>";
}


// Choix de l'équipe :: convocation.php
function club_choix($champ)
{
	$VAL = '<option value="">&nbsp;</option>'."\n";
	$REQ = mysql_query('SELECT id, nom FROM phpl_clubs ORDER BY nom ASC');

	while ($ROW = mysql_fetch_array($REQ))
	{
		$VAL.= '			<option value="'.$ROW['id'].'">'.$ROW['nom'].'</option>'."\n";
	}
	mysql_free_result($REQ);

?>

	<form method="post" action="">
		<label><?php echo ADMIN_TAPVERT_MSG2a; ?></label>
		<select name="club" onchange="javascript:document.location.href=('?page=convocations&amp;champ=<?php echo $champ; ?>&amp;club=' + this.value);">
			<?php echo $VAL; ?>
        </select>
	</form>

<?php

}


function maila($id_effectif, $id, $accompagnateur, $id_matchup, $heure, $lieux, $club_dom, $club_ext, $dateok, $expediteur, $pseudoa, $quia, $site, $id_equipeup, $champ, $annul) 
{
	global $transmis;

	$requetea = "SELECT phpl_joueurs.email,phpl_joueurs.mail_stop,phpl_joueurs.nom,phpl_joueurs.prenom,phpl_joueurs.id
		FROM phpl_joueurs, phpl_effectif
		WHERE phpl_effectif.id_joueur=phpl_joueurs.id
		AND phpl_effectif.id='$id_effectif'";               

	$resultatsa = mysql_query($requetea) or die (mysql_error());

	while ($rowa = mysql_fetch_array($resultatsa))
	{
		$destinataire = $rowa[0]; 
		$mail_stop    = $rowa[1]; 
		$nom          = $rowa[2]; 
		$prenom       = $rowa[3];
		$qui          = $prenom.' '.$nom;
		$id_joueur    = $rowa[4];
	}

	if ($mail_stop == 1)
	{
		$requete = "UPDATE phpl_convoques SET transmis='1' WHERE id_convocation='$id' AND id_effectif=$id_effectif";

		mysql_query($requete) or die (mysql_error());
	}

	if ($mail_stop == 0)
	{
		$requeteb = "SELECT phpl_convoques.transmis
				FROM phpl_convoques
				WHERE id_convocation='$id' 
				AND id_effectif=$id_effectif";               

		$resultatsb = mysql_query($requeteb) or die (mysql_error());

		while ($rowb = mysql_fetch_array($resultatsb))
		{
			$transmis = $rowb[0];
		}

		if ($transmis == 0)
		{
			if (!$accompagnateur == '')
			{
				$accompagnateurok = "avec $accompagnateur";
			}

			if ($annul == 1)
			{
				$sujet = "Match annule le $dateok à $heure";
				$az    = "ANNULE";
				$az2   = '';
				$az4   = '';
			} 
			else 
			{ 
				$sujet = "Convocation le $dateok à $heure"; 
				$az    = '';
				$az2   = "$lieux $accompagnateurok"; 
				$az4   = "<p>$quia</p> 
<p><a href=\"".$site."/consult/confirm.php?id_effectif=$id_effectif&id_convocation=$id\">Confirmation</a> &bull; <a href=\"".$site."/consult/convocation.php?champ=$champ&id_equipe=$id_equipeup&id_match=$id_matchup&bloque=1\">Voir la feuille de match</p>"; 
			} 

			$from    = "From:$expediteur\n";
			$from   .= "MIME-version: 1.0\n";
			$from   .= "Content-type: text/html; charset= iso-8859-1\n";
			$message = "<html>
<head>
</head>

<body>

<table width=\"100%\">
	<tr>
		<td align=\"center\"><b>".utf8_encode($sujet)."</b></td>
	</tr>
	<tr>
		<td>
			<p>Bonjour, $qui</p> 
			<p>Le match $az est <b>$club_dom - $club_ext</b></p>
			<p>Lieu du rendez-vous : $az2</p>
			$az4
		</td>
	</tr>
	<tr>
		<td><a href=\"".$site."/consult/mailstop.php?id=$id_joueur\">Ne plus recevoir de mail</td>
	</tr>
</table>

</body>

</html>";

			$email = @mail($destinataire, $sujet, $message, $from);
 
			if ($email)
			{
				$requete = "UPDATE phpl_convoques SET transmis='1' WHERE id_convocation='$id' AND id_effectif='$id_effectif'";

				mysql_query($requete) or die (mysql_error());
			}
		}
	}
}


function match_by_club ($champ,$id_match,$club)
{
  $requete=" SELECT j.numero, j.date_prevue, m.date_reelle, id_equipe_dom, id_equipe_ext, cdom.nom, cext.nom,m.id ";
  $requete.=" FROM phpl_journees j, phpl_matchs m, phpl_equipes e, phpl_equipes dom, phpl_clubs cdom, phpl_equipes ext, phpl_clubs cext ";
  $requete.=" WHERE m.id_journee = j.id ";
  $requete.=" AND ( ";
  $requete.=" id_equipe_dom = e.id ";
  $requete.=" OR id_equipe_ext = e.id ";
  $requete.=" ) ";
  $requete.=" AND j.id_champ =$champ ";
  $requete.=" AND e.id_club =$club ";
  $requete.=" AND e.id_champ =$champ ";
  $requete.=" AND dom.id_champ =$champ ";
  $requete.=" AND ext.id_champ =$champ ";
  $requete.=" AND dom.id = id_equipe_dom ";
  $requete.=" AND id_equipe_ext = ext.id ";
  $requete.=" AND ext.id_club = cext.id ";
  $requete.=" AND dom.id_club = cdom.id ";
  $requete.=" ORDER BY ifnull( m.date_reelle, j.date_prevue ) ASC ";
        
   $resultats=mysql_query($requete);
 echo "<select name=\"id_match\" onchange=\"javascript:document.location.href=('?page=convocations&champ=$champ&club=$club&bloque=1&id_match='+this.value);\" class=\"inputbox\">";
   
  while ($row=mysql_fetch_array($resultats))
     {
$date_prevu=$row[1];
$date_reelle=$row[2];

if(($date_reelle=="") or ($date_reelle=="0000-00-00 00:00:00"))
{
$jour = substr($row[1],8,2); // on récupère le jour
$mois = substr($row[1],5,2); // puis le mois
$annee = substr($row[1],0,4); // et l'annee

$dateok="$jour/$mois/$annee";
}

else
{
$jour = substr($row[2],8,2); // on récupère le jour
$mois = substr($row[2],5,2); // puis le mois
$annee = substr($row[2],0,4); // et l'annee

$dateok="$jour/$mois/$annee";
}
        echo "<option ";

       if ($id_match==$row[7]) 
       {
       	echo " selected=\"selected\" ";
       }
       echo ("value=\"$row[7]\">$dateok &nbsp;&nbsp; $row[5] - $row[6]\n");

        echo ("</option>\n");
      }
echo "</select>";
}


// Ajout 0.84i :: equipes.php / joueurs.php
function remove_querystring_var($url, $key) {
	$url = preg_replace('/(.*)(\?|&)'.$key.'=[^&]+?(&)(.*)/i', '$1$2$4', $url.'&');
	$url = substr($url, 0, -1);

	return $url;
}


// Convocation
function getEquipe($club,$champ)
{
$id=-1;
$requete="select id from phpl_equipes where id_club='$club' and id_champ='$champ'";
$resultats=mysql_query($requete) or die (mysql_error());
  while ($row=mysql_fetch_array($resultats))
  {
   $id=$row[0];
  }
return $id;  
}


// Convocation
function getConvocation($id_match, $id_equipe)
{
  $requete="select id,heure,lieux,accompagnateurs,id_match,id_equipe from phpl_convocation where id_match='$id_match' and id_equipe='$id_equipe'";
  $convoc=array();
  $convoc['id']='';
  $convoc['heure']='';
  $convoc['lieux']='';
  $convoc['accompagnateurs']='';
  $convoc['id_match']='';
  $convoc['id_equipe']='';
  $resultats=mysql_query($requete) or die (mysql_error());

  while ($row=mysql_fetch_array($resultats))
  {
   $convoc['id']=$row[0];
   $convoc['heure']=$row[1];
   $convoc['lieux']=$row[2];
   $convoc['accompagnateurs']=$row[3];
   $convoc['id_match']=$row[4];
   $convoc['id_equipe']=$row[4];
  }
  
  $convoques=array();
  $convoc['convoques']=$convoques;
  if (isset($convoc['id'])&&$convoc['id']!=""){
  $requete2="SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_convoques.id, phpl_convoques.id_effectif
          FROM phpl_convoques, phpl_joueurs, phpl_effectif
          WHERE phpl_effectif.id_joueur=phpl_joueurs.id
          AND phpl_effectif.id=phpl_convoques.id_effectif
          AND phpl_effectif.id_equipe=$id_equipe
          AND phpl_convoques.id_convocation=".$convoc['id'];         
  $resultats2=mysql_query($requete2) or die (mysql_error());
  $i=0;
  while ($row2=mysql_fetch_array($resultats2))
  {
    $convoques["$row2[3]"]=$row2;
    $i++;
  }

   $convoc['convoques']=$convoques;
}
  return $convoc;
}


// Convocation
function insertConvocation($heure,$lieux,$accompagnateur,$id_match,$id_equipe,$convoques,$noma,$prenoma,$pseudoa,$expediteur,$dateok,$club_ext,$club_dom,$site,$champ)
{
	global $annul;

$id_equipeup=$id_equipe;
$id_matchup=$id_match;
$quia="<p><font size=\"2\" face=\"Verdana\">$prenoma $noma</font>";

  $requete="insert into phpl_convocation (heure,lieux,accompagnateurs,id_match,id_equipe) values('$heure','$lieux','$accompagnateur','$id_match','$id_equipe')"; 
  mysql_query($requete) or die (mysql_error());
  $id=mysql_insert_id();
  $i=0;
	while ($i < count($convoques))
        {
       $requete = "INSERT INTO phpl_convoques (id_effectif,id_convocation) VALUES ($convoques[$i],$id)";
       mysql_query($requete) or die (mysql_error());

$id_effectif = $convoques[$i];

echo maila($id_effectif, $id, $accompagnateur, $id_matchup, $heure, $lieux, $club_dom, $club_ext, $dateok, $expediteur, $pseudoa, $quia, $site, $id_equipeup, $champ, $annul);
        
$i++;
        }

 $nb=0;
 $requetee="SELECT phpl_convoques.id
          FROM phpl_convoques,phpl_convocation
          WHERE phpl_convocation.id=phpl_convoques.id_convocation
          and phpl_convoques.transmis='0'";               
  $resultatse=mysql_query($requetee) or die (mysql_error());
  while ($rowe=mysql_fetch_array($resultatse))
  {
$nb++;
  }

if($i=="1"){$comb="LE MAIL A ETE ENVOYE AVEC SUCCES";}

if($i>"1") {$comb="LES MAILS ONT ETE ENVOYE AVEC SUCCES";}

if($nb=="0"){echo"<font color=\"#ff3333\" size=\"4\"><b>$comb</b></font><br><br>";}

else
{
if($nb=="1"){$comb2="$nb MAIL N'A PAS ETE ENVOYER";}

if($nb>"1") {$comb2="$nb MAILS N'ONT PAS ETE ENVOYER";}

echo"<font color=\"#ff3333\" size=\"4\"><b>$comb2</b></font><br><br>";
}

return $id;
}


// Convocation
function updateConvocation($id_convoc, $heure, $lieux, $accompagnateur, $id_match, $id_equipe, $convoques, $noma, $prenoma, $pseudoa, $expediteur, $dateok, $club_ext, $club_dom, $site, $champ)
{
	global $annul, $id, $exist;

	$i = 0;
	$id_equipeup = $id_equipe;
	$id_matchup  = $id_match;
	$quia        = "<p>$prenoma $noma</p>";

	$requete = "update phpl_convocation set heure='$heure', lieux='$lieux', accompagnateurs='$accompagnateur' where id='$id_convoc' and id_equipe='$id_equipe' and id_match='$id_match'";

	mysql_query($requete) or die (mysql_error());

	while ($i < count($convoques))
	{
		$requetez = "SELECT phpl_convoques.id_effectif
				FROM phpl_convoques
				WHERE phpl_convoques.id_convocation='$id_convoc'";               

		$resultatsz = mysql_query($requetez) or die (mysql_error());

		while ($rowz = mysql_fetch_array($resultatsz))
		{
			if ($rowz[0] == $convoques[$i])
			{
				$exist = 1;
				$requete = "update phpl_convoques set ok='1' where id_convocation='$id_convoc' and id_effectif='$convoques[$i]'";

				mysql_query($requete) or die (mysql_error());
			}
		}

		if (!$exist == 1)
		{
			$requete = "insert into phpl_convoques (id_effectif,id_convocation,ok) values ('$convoques[$i]','$id_convoc','1')";

			mysql_query($requete) or die (mysql_error());
		}

		$exist = 0;
		$id_effectif = $convoques[$i];
		$id = $id_convoc;

		echo maila($id_effectif, $id, $accompagnateur, $id_matchup, $heure, $lieux, $club_dom, $club_ext, $dateok, $expediteur, $pseudoa, $quia, $site, $id_equipeup, $champ, $annul);

		$i++;
	}

	$requetef = "SELECT phpl_convoques.id_effectif
			FROM phpl_convoques
			WHERE phpl_convoques.id_convocation='$id_convoc'
			AND ok='0'";               

	$resultatsf = mysql_query($requetef) or die (mysql_error());

	while ($rowf = mysql_fetch_array($resultatsf))
	{
		$id_effectif = $rowf[0];
		$annul = 1;
		$requete = "update phpl_convoques set transmis='0' where id_convocation='$id_convoc' and id_effectif='$id_effectif'";

		mysql_query($requete) or die (mysql_error());

		echo maila($id_effectif, $id, $accompagnateur, $id_matchup, $heure, $lieux, $club_dom, $club_ext, $dateok, $expediteur, $pseudoa, $quia, $site, $id_equipeup, $champ, $annul);
	}

	$requete = "delete from phpl_convoques where id_convocation='$id_convoc' and ok='0'";

	mysql_query($requete) or die (mysql_error());

	$requete = "update phpl_convoques set ok='0' where id_convocation='$id_convoc'";

	mysql_query($requete) or die (mysql_error());

	$nb = 0;
	$requetee = "SELECT phpl_convoques.id
			FROM phpl_convoques,phpl_convocation
			WHERE phpl_convocation.id=phpl_convoques.id_convocation
			AND phpl_convoques.transmis='0'";               

	$resultatse = mysql_query($requetee) or die (mysql_error());

	while ($rowe = mysql_fetch_array($resultatse))
	{
		$nb++;
	}

	if($i=="1"){$comb="LE MAIL A ETE ENVOYE AVEC SUCCES";}
	if($i>"1") {$comb="LES MAILS ONT ETE ENVOYE AVEC SUCCES";}

	if($nb=="0"){echo"<font color=\"#ff3333\" size=\"4\"><b>$comb</b></font><br><br>";}
	else
	{
		if($nb=="1"){$comb2="$nb MAIL N'A PAS ETE ENVOYER";}
		if($nb>"1") {$comb2="$nb MAILS N'ONT PAS ETE ENVOYER";}

		echo"<font color=\"#ff3333\" size=\"4\"><b>$comb2</b></font><br><br>";
	}

	//return $id;
}


// Information PHP :: maintenance.php
function phpinfo1($return=false){
	ob_start();
	phpinfo(-1);

	$pi = preg_replace(array(
			'#^.*<body>(.*)</body>.*$#ms',
			'#<h2>PHP License</h2>.*$#ms',
			'#<h1>Configuration</h1>#',
			"#\r?\n#", "#</(h1|h2|h3|tr)>#",
			'# +<#',
			"#[ \t]+#",
			'#&nbsp;#',
			'#  +#',
			'# class=".*?"#',
			'%&#039;%',
			'#<tr>(?:.*?)" src="(?:.*?)=(.*?)" alt="PHP Logo" /></a>'.'<h1>PHP Version (.*?)</h1>(?:\n+?)</td></tr>#',
			'#<h1><a href="(?:.*?)\?=(.*?)">PHP Credits</a></h1>#',
			'#<tr>(?:.*?)" src="(?:.*?)=(.*?)"(?:.*?)Zend Engine (.*?),(?:.*?)</tr>#',
			"# +#", '#<tr>#',
			'#</tr>#'
		),
		array(
			'$1',
			'',
			'',
			'',
			'</$1>' . "\n",
			'<',
			' ',
			' ',
			' ',
			'',
			' ',
			'<h2>PHP Configuration</h2>'."\n".'<tr><td>PHP Version</td><td>$2</td></tr>'."\n".'<tr><td>PHP Egg</td><td>$1</td></tr>',
			'<tr><td>PHP Credits Egg</td><td>$1</td></tr>',
			'<tr><td>Zend Engine</td><td>$2</td></tr>' . "\n" .'<tr><td>Zend Egg</td><td>$1</td></tr>',
			' ',
			'%S%',
			'%E%'
		),
		ob_get_clean()
	);

	$sections = explode('<h2>', strip_tags($pi, '<h2><th><td>'));

	unset($sections[0]);

	$pi = array();

	foreach($sections AS $section)
	{
		$n = substr($section, 0, strpos($section, '</h2>'));

		preg_match_all('#%S%(?:<td>(.*?)</td>)?(?:<td>(.*?)</td>)?(?:<td>(.*?)</td>)?%E%#', $section, $askapache, PREG_SET_ORDER);

		foreach($askapache AS $m)
		{
			$pi[$n][$m[1]] = (!isset($m[3])||$m[2] == $m[3]) ? $m[2] : array_slice($m, 2);
		}
	}

	//return ($return === false) ? print_r($pi) : $pi;

	$TMP = '	<table class="Large50P ui-widget ui-widget-content">
		<tbody>
			<tr>
				<td>Version PHP</td>
				<td><b>'.$pi['PHP Configuration']['PHP Version'].'</b></td>
			</tr>
			<tr>
				<td>Système</td>
				<td>'.$pi['PHP Configuration']['System'].'</td>
			</tr>
			<tr>
				<td>Génération du système</td>
				<td>'.$pi['PHP Configuration']['Build Date'].'</td>
			</tr>
		</tbody>
	</table>'."\n\n";

	echo $TMP;
}

// Information PHP :: maint_infophp.php
function phpinfo2($INFO)
{
	ob_start();

	phpinfo($INFO);

	$i       = 0;
	$phpinfo = array('Résultat' => array());

	if (preg_match_all('#(?:<h2>(?:<a name=".*?">)?(.*?)(?:</a>)?</h2>)|(?:<tr(?: class=".*?")?><t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>)?)?</tr>)#s', ob_get_clean(), $matches, PREG_SET_ORDER))

	foreach($matches AS $match)
	{
		if (strlen($match[1]))
		{
			$phpinfo[$match[1]] = array();
		}
        elseif (isset($match[3]))
		{
			$phpinfo[end(array_keys($phpinfo))][$match[2]] = isset($match[4]) ? array($match[3], $match[4]) : $match[3];
		}
        else
		{
			$phpinfo[end(array_keys($phpinfo))][] = $match[2];
		}
	}

	foreach($phpinfo AS $name => $section)
	{
		echo '<h3>'.$name.'</h3><table class="Large100P ui-widget ui-widget-content"><tbody>';

		foreach($section AS $key => $val)
		{
			if (($i%2) == 0) { $CLASS = 'ligne1'; } else { $CLASS = 'ligne2'; }

			if (is_array($val))
			{
				echo '<tr class="'.$CLASS.'"><td class="Large33P">'.$key.'</td><td class="Large33P">'.$val[0].'</td><td class="Large33P">'.$val[1].'</td></tr>';
			}
			elseif (is_string($key))
			{
				echo '<tr class="'.$CLASS.'"><td class="Large33P">'.$key.'</td><td class="Large33P">'.$val.'</td><td class="Large33P">&nbsp;</td></tr>';
			}
            else
			{
				echo '<tr class="'.$CLASS.'"><td class="Large33P">'.$val.'</td><td class="Large33P">&nbsp;</td><td class="Large33P">&nbsp;</td></tr>';
			}

			$i++;
		}

		echo '</tbody></table>';
	}
}

?>