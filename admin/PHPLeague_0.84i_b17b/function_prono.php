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

	mysql_query('SET NAMES '.CHARSET_MYSQL);

	return($idconnect);
	return($PHPLEAGUE_RACINE);
}


function Image($URL, $IMG, $ALT, $TITLE, $CLASS, $ID)
{
	if (file_exists($URL.$IMG))
	{
		list($WIDTH, $HEIGHT) = @getimagesize($URL.$IMG);

		if (empty($CLASS)) { $RCLASS = ''; } else { $RCLASS = ' class="'.$CLASS.'"'; }
		if (empty($ID))    { $RID    = ''; } else { $RID    = ' id="'.$ID.'"'; }

		$TMP = '<img src="'.$URL.$IMG.'" width="'.$WIDTH.'" height="'.$HEIGHT.'" alt="'.$ALT.'" title="'.$TITLE.'"'.$RCLASS.$RID.' />';
	}
	else
	{
		$TMP = '&nbsp;';
	}

	return $TMP;
}


// Formatage du texte en fonction du codage des caractères
// EN TEST
function FormatText($TEXT)
{
	if (CHARSET_HEADER == 'utf-8')
	{
		$TMP = stripslashes(utf8_encode($TEXT));
	}
	elseif (CHARSET_HEADER == 'ISO-8859-1')
	{
		$TMP = stripslashes(htmlspecialchars_decode($TEXT));
	}
	else
	{
		$TMP = stripslashes(utf8_encode($TEXT));
	}

	return $TMP;
}


function affiche_points($user_id, $gr_champ)
{
	$REQ = mysql_query('SELECT points 
						FROM phpl_clmnt_pronos, phpl_membres
						WHERE phpl_membres.id=phpl_clmnt_pronos.id_membre
						AND phpl_membres.id_prono="'.$user_id.'"
						AND type="general"
						AND id_champ='.$gr_champ);
	$NBR = mysql_num_rows($REQ);
	$ROW = mysql_fetch_array($REQ);

	mysql_free_result($REQ);

	if ($NBR == 0) { $PTS = 0; } else { $PTS = $ROW['points']; }

	echo $PTS;
}



function AfficheClassement($user_id, $gr_champ, $type)
{
	$i   = 1;
	$REQ = mysql_query('SELECT id_prono
						FROM phpl_clmnt_pronos, phpl_membres
						WHERE phpl_membres.id=phpl_clmnt_pronos.id_membre
						AND id_champ='.$gr_champ.'
						AND type="'.$type.'"
						ORDER BY points DESC, participation DESC, phpl_membres.pseudo');

	while ($ROW = mysql_fetch_array($REQ))
	{
		if ($ROW['id_prono'] == $user_id) { $CLASS = $i; }

		$i++;
	}

	if (isset($CLASS))
	{
		if     ($CLASS == 1) { $TMP = $CLASS.FormatText(PRONO_CLASSEMENT_PREMIER); }
		elseif ($CLASS == 2) { $TMP = $CLASS.FormatText(PRONO_CLASSEMENT_SECOND); }
		elseif ($CLASS == 3) { $TMP = $CLASS.FormatText(PRONO_CLASSEMENT_TROIS); }
		else				 { $TMP = FormatText(PRONO_CLASSEMENT_AUTRES); }
	}
	else
	{
		$TMP = utf8_encode(PRONO_CLASSEMENT_NON_CLASSE);
	}

	return $TMP;
}


function affiche_clmnt_mensuel_30_jours ($user_id, $gr_champ)
{
	$query="SELECT id_prono
			FROM phpl_clmnt_pronos, phpl_membres
			WHERE phpl_membres.id=phpl_clmnt_pronos.id_membre
			AND id_champ='$gr_champ'
			AND id_champ='$gr_champ'
			AND type='mensuel_30_jours'
			ORDER by points desc, participation desc, phpl_membres.pseudo";
  $result=mysql_query($query) or die (mysql_error());
  $i = 1;
  while ($row=mysql_fetch_array($result))
  { if ($row[0]==$user_id){$class=$i;}
    $i++;
  }
 if (!isset($class)) {$clmnt=PRONO_CLASSEMENT_NON_CLASSE;}
 else
  {
  if ($class=="1"){print $class; echo PRONO_CLASSEMENT_PREMIER;}
  elseif ($class=="2"){print $class; echo PRONO_CLASSEMENT_SECOND;}
  elseif ($class=="3"){print $class; echo PRONO_CLASSEMENT_TROIS;}
  else {print $class; echo PRONO_CLASSEMENT_AUTRES;}
  }

}


function affiche_clmnt_mensuel_hebdo ($user_id, $gr_champ)
{
  $query="SELECT id_prono FROM phpl_clmnt_pronos, phpl_membres WHERE phpl_membres.id=phpl_clmnt_pronos.id_membre AND id_champ='$gr_champ' AND type='hebdo' AND id_champ='$gr_champ' ORDER by points desc, participation desc, phpl_membres.pseudo";
  $result=mysql_query($query) or die (mysql_error());
  $i = "1";
  while ($row=mysql_fetch_array($result))
  { if ($row[0]==$user_id){$class=$i;}
    $i++;
  }
 if (!isset($class)) {$clmnt=PRONO_CLASSEMENT_NON_CLASSE;}
 else
  {
  if ($class=="1"){print $class; echo PRONO_CLASSEMENT_PREMIER;}
  elseif ($class=="2"){print $class; echo PRONO_CLASSEMENT_SECOND;}
  elseif ($class=="3"){print $class; echo PRONO_CLASSEMENT_TROIS;}
  else {print $class; echo PRONO_CLASSEMENT_AUTRES;}
  }
}

function login_form()
{
echo"<form action=login.php method='post'>
   <table border='0' class='univert' cellspacing='0' align='center' width='80%'>
   <tr>
   <td class='univert' align='center'>Veuillez entrer votre nom d'utilisateur et votre mot de passe pour vous connecter<br /><br />
   </td>
   </tr>
   <tr>
  <td class='univert' align='center'>
   <input type='text' name='user'>
   </td>
   </tr>
   <tr>
  <td class='univert' align='center'>
   <input type='password' name='password'>
   </td>
   <tr><td align='center' class='univert'>Se connecter automatiquement à chaque visite: <input type='checkbox' class='checkbox' name='autoidentification' value='1'></td></tr>
   </tr>
   <tr><td colspan='2' class='univert' align='center'><input type='submit' name='submit' value='Connexion' >
   <br />
   <a href='perdu_mdp.php'>J'ai oublié mon mot de passe</a><br />
   <a href='inscription.php'>Inscription</a><br />
   </td>
   </tr></form></table>";  }


function perdu_mot_de_passe()
{
  echo"<table>
  <tr>
  <td colspan='2' class='univert' align='center'>
  <div class=\"blanc\"><strong>ooMot de passe perdu</strong></div><br /><br />
<div class=\"blanc\">Entrez votre pseudo,
<br />un nouveau mot de passe vous sera alors envoyé par mail.
</div>
<form action='perdu_mdp.php' method='get'>
<input class=textfield type=text name=pseudo size='35'>
<br />
<input type='submit' class='textfield' name='submit' value='ok'>
</form>
</td></tr></table>";
  
}


function classement_general($gr_champ, $user_pseudo)
{
	$i = 1;
	$REQ = mysql_query('SELECT pseudo, points, participation
						FROM phpl_clmnt_pronos
						WHERE id_champ='.$gr_champ.'
						AND type="general"
						ORDER BY points DESC, participation DESC, pseudo LIMIT 0, 10');
	$NBR = mysql_num_rows($REQ);

	if ($NBR > 0)
	{
?>
<table class="Large100P">
	<thead>
		<tr>
			<th><?php echo FormatText(PRONO_CLASSEMENT_GENERAL); ?></th>
		</tr>
	</thead>
	<tbody>
<?php
		while ($ROW = mysql_fetch_array($REQ))
		{
			if ($user_pseudo == $ROW['pseudo']) { $BD = '<b>'; $BF = '</b>'; }
			else								{ $BD = '';    $BF = ''; }

			echo '		<tr>
			<td>'.$BD.$i.'. '.stripslashes($ROW['pseudo']).$BF.'</td>
		</tr>'."\n";

			$i++;
		}

?>
	</tbody>
	<tfoot>
		<tr>
			<td><a href="index.php?page=classement&amp;type=general&amp;complet=1&amp;gr_champ=<?php echo $gr_champ; ?>"><?php echo FormatText(PRONO_CLASSEMENT_SUITE); ?></a></td>
		</tr>
	</tfoot>
</table>
<?php

	}
	mysql_free_result($REQ);
}



//mise au format d'une date
function format_date_fr($date)
{
	list($annee, $mois, $jour) = explode('-', substr($date, 0, 10));

	return $jour.'/'.$mois.'/'.$annee;
}


//date en timestamps
function format_date_timestamp($date)
{
	list($annee, $mois, $jour) = explode('-', substr($date, 0, 10));
	list($heure, $minute, $seconde) = explode(':', substr($date, 11, 7));

	$timestamp = mktime($heure, $minute, $seconde, $mois, $jour, $annee);

	return $timestamp;
}


function grille_admin($gr_champ)
{

?>
<table class="Large100P">
	<thead>
		<tr>                                                 
			<th><?php echo FormatText(ADMIN_COHERENCE_MSG2); ?></th>
			<th><?php echo FormatText(DATE); ?></th>
			<th>&nbsp;</th>
			<th><?php echo FormatText(PRONO_GRILLE_PRONO); ?></th>
			<th>&nbsp;</th>
			<th><?php echo FormatText(PRONO_GRILLE_TEMPS); ?></th>
		</tr>
	</thead>
	<tbody>
<?php

	$i = 0;

	if     ($gr_champ == 1) { $j = 10; }
	elseif ($gr_champ == 2) { $j = 8; }
	elseif ($gr_champ == 3) { $j = 7; }
	else					{ $j = 6; }

	$REQ1 = mysql_query('SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.id, phpl_matchs.date_reelle, phpl_journees.numero
						FROM phpl_clubs, phpl_clubs AS CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes AS EXT, phpl_gr_championnats
						WHERE phpl_clubs.id=phpl_equipes.id_club
						AND CLEXT.id=EXT.id_club
						AND phpl_equipes.id=phpl_matchs.id_equipe_dom
						AND EXT.id=phpl_matchs.id_equipe_ext
						AND phpl_matchs.id_journee=phpl_journees.id
						AND phpl_journees.id_champ=phpl_gr_championnats.id_champ
						AND phpl_gr_championnats.id='.$gr_champ.'
						AND phpl_matchs.buts_dom is null
						AND phpl_matchs.buts_ext is null
						AND phpl_clubs.nom!="exempte"
						AND CLEXT.nom!="exempte"
						ORDER BY phpl_matchs.date_reelle ASC, phpl_clubs.nom ASC');

	while ($row = mysql_fetch_array($REQ1)) 
	{
		$REQ2 = mysql_query('SELECT pronostic
							FROM phpl_pronostics, phpl_gr_championnats
							WHERE phpl_pronostics.id_match='.$row[4].'
							AND phpl_gr_championnats.id='.$gr_champ.'
							AND id_membre=id_master');

		$NBR2 = mysql_num_rows($REQ2);

		if ($NBR2 == 0)
		{
			$prono = '0';
		}
		else
		{
			while ($ROW2 = mysql_fetch_array($REQ2))
			{
				if (empty($ROW2['pronostic']))
				{
					$prono = '0';
				}
				else
				{
					$prono = $ROW2['pronostic'];
				}
			}
			mysql_free_result($REQ2);
		}

		if (empty($row[5]))
		{
			$date = '&nbsp;';
		}
		else
		{
			$date = format_date_fr($row[5]);
		}

		if ($prono == 1)   { $IMG_PRONO = IMG_B.' '.IMG_N.' '.IMG_2; }
		if ($prono == 'N') { $IMG_PRONO = IMG_1.' '.IMG_B.' '.IMG_2; }
		if ($prono == 2)   { $IMG_PRONO = IMG_1.' '.IMG_N.' '.IMG_B; }
		if ($prono == '0') { $IMG_PRONO = IMG_1.' '.IMG_N.' '.IMG_2; }

		echo '		<tr>
			<td class="TxtCenter">'.$row[6].'</td>
			<td class="TxtCenter">'.$date.'</td>
			<td class="TxtRight">'.stripslashes($row[0]).'</td>
			<td class="TxtCenter">'.$IMG_PRONO.'</td>
			<td>'.stripslashes($row[1]).'</td>
			<td class="TxtCenter Bold">';

		if (empty($row[5]))
		{
			echo '&nbsp;';
		}
		else
		{
			$REQ3 = mysql_query('SELECT tps_avant_prono FROM phpl_gr_championnats WHERE id='.$gr_champ);

			while ($ROW3 = mysql_fetch_array($REQ3))
			{
				$temps_avantmatch = $ROW3['tps_avant_prono'];
			}
			mysql_free_result($REQ3);

			$date_match_timestamp = format_date_timestamp($row[5]);
			$date_actuelle        = time();
			$ecart_secondes       = $date_match_timestamp - $date_actuelle;
			$ecart_heures         = floor($ecart_secondes / (60 * 60)) - $temps_avantmatch;
			$ecart_minutes        = floor($ecart_secondes / 60) - $temps_avantmatch * 60;
			$ecart_jours          = floor($ecart_secondes / (60 * 60 * 24) - $temps_avantmatch / 60);
			$date                 = format_date_fr($row[5]);

			$TPS = $ecart_secondes - ($temps_avantmatch * 3600);

			if ($TPS <= 0)
			{
				$VAL = '<span class="LimitColor">'.FormatText(PRONO_GRILLE_EXPIRE).'</span>';
			}
			else
			{
				$VAL = '';

?>

<script type="text/javascript">$(function(){$('#count<?php echo $i; ?>').countdown({until:'+<?php echo $TPS; ?>s',onTick:CountLimit,layout:'{dn} {dl} {hnn}{sep}{mnn}{sep}{snn} {desc}',description:'',expiryText:'<div class="expire"><?php echo FormatText(PRONO_GRILLE_EXPIRE); ?></div>'});});</script>

<?php

			}

?>

<div id="count<?php echo $i; ?>"><?php echo $VAL; ?></div>

<?php

		}

		echo '</td>
		</tr>'."\n";

		$i++;
	}
	mysql_free_result($REQ1);

?>
	</tbody>
</table>

<?php

}


function classement_type($type)
{
	switch($type)
	{
		case 'general';			 $TITRE = PRONO_CLASSEMENT_GENERAL; break;
		case 'mensuel_en_cours'; $TITRE = PRONO_CLASSEMENT_MOIS;	break;
		case 'mensuel_30_jours'; $TITRE = PRONO_CLASSEMENT_30;		break;
		case 'hebdo';			 $TITRE = PRONO_CLASSEMENT_HEBDO;	break;
		default:				 $TITRE = PRONO_CLASSEMENT_GENERAL;
	}

	echo FormatText($TITRE);
}


function classement($gr_champ, $type, $user_pseudo)
{
	if (!($type == 'general' OR $type == 'mensuel_en_cours' OR $type == 'mensuel_30_jours' OR $type == 'hebdo'))
	{
		$type = 'general';
	}

	if ($type == 'mensuel_en_cours')
	{
		$REQ1 = mysql_query('DELETE FROM phpl_clmnt_pronos WHERE id_champ='.$gr_champ.' AND type="mensuel_en_cours"');

		$REQ2 = mysql_query('SELECT id_membre, pseudo, SUM(points) AS total, SUM(participation) AS participations
							FROM phpl_membres, phpl_pronostics, phpl_matchs, phpl_gr_championnats
							WHERE phpl_pronostics.id_champ=phpl_gr_championnats.id
							AND phpl_gr_championnats.id='.$gr_champ.'
							AND id_membre=phpl_membres.id
							AND phpl_matchs.id=id_match
							AND MONTH(date_reelle)=MONTH(NOW())
							AND YEAR(date_reelle)=YEAR(NOW())
							GROUP BY pseudo
							ORDER BY total, participations');

		while ($ROW2 = mysql_fetch_array($REQ2))
		{
			$ROW2[1] = addslashes($ROW2[1]);

			$REQ3 = mysql_query("INSERT INTO phpl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) VALUES ('$gr_champ', '$ROW2[0]', '$ROW2[1]', '$ROW2[2]', '$ROW2[3]', 'mensuel_en_cours')");
		}
		mysql_free_result($REQ2);
	}          

if ($type == 'mensuel_30_jours')
{
   mysql_query("DELETE FROM phpl_clmnt_pronos WHERE id_champ='$gr_champ' AND type='mensuel_30_jours'");

   $query="SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
   FROM phpl_membres, phpl_pronostics, phpl_matchs, phpl_gr_championnats
   WHERE phpl_pronostics.id_champ=phpl_gr_championnats.id
   AND phpl_gr_championnats.id='$gr_champ'
   AND id_membre=phpl_membres.id
   AND phpl_matchs.id=id_match
   AND DATE_ADD(date_reelle, INTERVAL 30 DAY) >= NOW()
   GROUP by pseudo
   ORDER by total, participations";

   $result = mysql_query($query);
       while ($row=mysql_fetch_array($result))
       {
       $row[1]=addslashes($row[1]);
       mysql_query("INSERT INTO phpl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_30_jours')") or die (mysql_error());
       }
}

if ($type=="hebdo")
{
   mysql_query("DELETE FROM phpl_clmnt_pronos WHERE id_champ='$gr_champ' AND type='hebdo'") or die (mysql_error());

   $query="SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
   FROM phpl_membres, phpl_pronostics, phpl_matchs, phpl_gr_championnats
   WHERE phpl_pronostics.id_champ=phpl_gr_championnats.id
   AND phpl_gr_championnats.id='$gr_champ'
   AND id_membre=phpl_membres.id
   AND phpl_matchs.id=id_match
   AND DATE_ADD(date_reelle, INTERVAL 7 DAY) >= NOW()
   GROUP by pseudo
   ORDER by total, participations";

   $result=mysql_query ($query) or die ("probleme " .mysql_error());
       while ($row=mysql_fetch_array($result))
       {
       $row[1]=addslashes($row[1]);
       mysql_query("INSERT INTO phpl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'hebdo')") or die (mysql_error());
       }
}
if (isset($_REQUEST['complet'])) {$complet=$_REQUEST['complet'];} else {$complet='';}

	echo '<tbody>'."\n";

	$i = 1;
	$query = "SELECT pseudo, points, participation FROM phpl_clmnt_pronos
WHERE id_champ='$gr_champ' AND type='$type'
ORDER by points desc, participation desc, pseudo";

	if (!($complet== '1')){$query = $query. " LIMIT 0, 10";}

	$result = mysql_query($query);

	while ($row = mysql_fetch_array($result))
	{
		echo "<tr><td>$i</td>";

		if ($user_pseudo==$row[0]) { echo "<td><b>$row[0]</b></td>"; }
		else  { echo "<td>$row[0]</td>"; }

		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td></tr>";

		$i++;
	}

	echo '	</tbody>
	<tfoot>
		<tr>
			<td colspan="4">';

	if (!($complet == 1))
	{
		echo "<a href=\"index.php?page=classement&amp;type=$type&amp;complet=1&amp;gr_champ=$gr_champ\">".FormatText(PRONO_CLASSEMENT_COMPLET)."</a>";
	}
	else
	{
		echo "<a href=\"index.php?page=classement&amp;type=$type&amp;complet=0&amp;gr_champ=$gr_champ\">".FormatText(PRONO_CLASSEMENT_REDUIT)."</a>";
	}

	echo '			</td>
		</tr>
	</tfoot>'."\n";

}


function date_form_inscription()
{
	for($i=1; $i<=31; $i++)
	{
		echo "<option value=\"$i\">$i</option>";
	}

	echo "	</select>
	<select size=\"1\" name=\"mois\">
		<option value=\"\"></option>";

	for($i=1; $i<=12; $i++)
	{
		echo "<option value=\"$i\">$i</option>";
	}

	echo "	</select>
	<select size=\"1\" name=\"annee\">
		<option value=\"\"></option>";

	for($i=2000; $i>1923; $i--)
	{
		echo "<option value=\"$i\">$i</option>";
	}

	echo "</select>";
}


function pseudo_admin($gr_champ)
{
	$REQ = mysql_query('SELECT pseudo
						FROM phpl_membres, phpl_gr_championnats 
						WHERE phpl_gr_championnats.id_master = phpl_membres.id
						AND phpl_gr_championnats.id = "'.$gr_champ.'"');
	$ROW = mysql_fetch_array($REQ);
		   mysql_free_result($REQ);

    return stripslashes($ROW['pseudo']);
}


function champ_prono($gr_champ)
{
	$REQ = mysql_query('SELECT DISTINCT id, nom
						FROM phpl_gr_championnats
						WHERE phpl_gr_championnats.activ_prono="1"
						ORDER BY id DESC');

	$NBR = mysql_num_rows($REQ);

	if ($NBR > 0)
	{
		while ($ROW = mysql_fetch_array($REQ))
		{
			if ($gr_champ == $ROW[0]) { $BDEB = '<b>'; $BFIN = '</b>'; } else  { $BDEB = ''; $BFIN = ''; }

			echo '<a href="index.php?gr_champ='.$ROW[0].'">'.$BDEB.$ROW[1].$BFIN.'</a><br />';
		}
	}

	mysql_free_result($REQ);
}


// Nombres d'équipes dans un championnat
function nb_equipes($id_champ)
{
	$REQ = mysql_query('SELECT id FROM phpl_equipes WHERE id_champ="'.$id_champ.'"');
	$NBR = mysql_num_rows($REQ);

	mysql_free_result($REQ);

	return $NBR;
}


function VerifSession($user_pseudo, $user_mdp)
{
	if ($user_pseudo AND $user_mdp)
	{
		$REQ = mysql_query('SELECT mot_de_passe, id_prono FROM phpl_membres WHERE pseudo="'.$user_pseudo.'"');
		$ROW = mysql_fetch_array($REQ);

		if ($ROW['mot_de_passe'] == $user_mdp)
		{
			$VAL = 1;
		}
		else
		{
			$VAL = 0;
		}

		mysql_free_result($REQ);
	}
	else
	{
		$VAL = 0;
	}

	return $VAL;
}

?>