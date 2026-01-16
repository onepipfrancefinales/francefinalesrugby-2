<?php

$page     = isset($_REQUEST['page'])     ? $_REQUEST['page']     : NULL;
$action   = isset($_REQUEST['action'])   ? $_REQUEST['action']   : NULL;
$go       = isset($_REQUEST['go'])       ? $_REQUEST['go']       : NULL;
$id       = isset($_REQUEST['id'])       ? $_REQUEST['id']       : NULL;
$urllogo  = isset($_REQUEST['urllogo'])  ? $_REQUEST['urllogo']  : NULL;
$urlphoto = isset($_REQUEST['urlphoto']) ? $_REQUEST['urlphoto'] : NULL;
$nom      = isset($_REQUEST['nom'])      ? $_REQUEST['nom']      : NULL;
$etat     = isset($_REQUEST['etat'])     ? $_REQUEST['etat']     : NULL;
$url      = isset($_REQUEST['url'])      ? $_REQUEST['url']      : NULL;
$idd      = isset($_REQUEST['idd'])      ? $_REQUEST['idd']      : NULL;

if ($id)
{
	if ($go == 1)
	{
		$REQ1 = mysql_query("UPDATE phpl_clubs SET url_logo='$urllogo' WHERE id='$id'");
		$REQ2 = mysql_query("UPDATE phpl_clubs SET url_photo='$urlphoto' WHERE id='$id'");

		$NBR_CLASS = nb_classe2();

		if ($NBR_CLASS > 0)
		{
		$NBR_RENS  = nb_rens2();

		for ($i=0; $i<$NBR_RENS; $i++)
		{
			$nom_etat = 'etat_'.$i;
			$NBR_I    = $i;

			if (isset($_REQUEST[$nom_etat])) { $etat[$i] = 1; } else { $etat[$i] = 0; }
		}


			reset($url);
			reset($nom);
			reset($etat);
			reset($idd);

			while (list($cle, $val) = each($url) AND list($cle, $val1) = each($nom) AND list($cle, $val2) = each($etat) AND list($cle, $val3) = each($idd))
			{
				$val_1 = trim(addslashes($val1));

				$REQ3 = mysql_query("UPDATE phpl_donnee SET nom='$val_1', etat='$val2', url='$val' WHERE id='$val3'");
			}
		}

		if ($REQ1)
		{
			echo InfoReqSql('InfUpd01', 1, 'highlight', 'check', ADMIN_GESTEQUIPE_MAJ1);
		}
		else
		{
			echo InfoReqSql('InfUpd01', 0, 'error', 'alert', GestErreur(ADMIN_GESTEQUIPE_MAJ4, $REQ1));
		}

		if ($REQ2)
		{
			echo InfoReqSql('InfUpd02', 1, 'highlight', 'check', ADMIN_GESTEQUIPE_MAJ2);
		}
		else
		{
			echo InfoReqSql('InfUpd02', 0, 'error', 'alert', GestErreur(ADMIN_GESTEQUIPE_MAJ4, $REQ2));
		}

		if ($NBR_CLASS > 0)
		{
			if ($REQ3)
			{
				echo InfoReqSql('InfUpd03', 1, 'highlight', 'check', ADMIN_GESTEQUIPE_MAJ3);
			}
			else
			{
				echo InfoReqSql('InfUpd03', 0, 'error', 'alert', GestErreur(ADMIN_GESTEQUIPE_MAJ4, $REQ3));
			}
		}
	}

	$REQ1  = mysql_query('SELECT id_clubs FROM phpl_donnee WHERE id_clubs='.$id);
	$NBR1  = mysql_num_rows($REQ1);

	mysql_free_result($REQ1);

	if ($NBR1 != nb_rens2())
	{
		mysql_query('DELETE FROM phpl_donnee WHERE id_clubs='.$id);

		$REQ2 = mysql_query('SELECT id FROM phpl_rens');

		while($ROW2 = mysql_fetch_array($REQ2))
		{
			mysql_query("INSERT INTO phpl_donnee (id_clubs, id_rens) VALUES ('$id', '$ROW2[0]')");
		}
		mysql_free_result($REQ2);
	}

	// Nom du club
	$REQ3 = mysql_query('SELECT id, nom FROM phpl_clubs WHERE id='.$id);

	while($ROW3 = mysql_fetch_array($REQ3))
	{
		$CLUB = stripslashes($ROW3['nom']);
	}
	mysql_free_result($REQ3);

	// Renseignements pr�d�finis
	$REQ4 = mysql_query('SELECT id, url_logo, url_photo FROM phpl_clubs WHERE phpl_clubs.id='.$id);

	while($ROW4 = mysql_fetch_array($REQ4))
	{
		$URL_LOGO  = $ROW4['url_logo'];
		$URL_PHOTO = $ROW4['url_photo'];
	}
	mysql_free_result($REQ4);

?>

<form method="post" action="">
	<table class="Large100P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th>Classe</th>
				<th><?php echo ADMIN_GESTEQUIPE_3; ?></th>
				<th><?php echo ADMIN_GESTEQUIPE_4; ?></th>
				<th><?php echo ADMIN_EQUIPE_5; ?></th>
				<th><?php echo ADMIN_EQUIPE_6; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>&nbsp;</td>
				<td><?php echo ADMIN_EQUIPE_7; ?></td>
				<td colspan="3"><input type="text" name="urllogo" value="<?php echo $URL_LOGO; ?>" size="30" maxlength="200" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><?php echo ADMIN_EQUIPE_9; ?></td>
				<td colspan="3"><input type="text" name="urlphoto" value="<?php echo $URL_PHOTO; ?>" size="30" maxlength="200" /></td>
			</tr>
<?php

	$i    = 0;
	$REQ5 = mysql_query('SELECT nom, id FROM phpl_classe ORDER BY rang ASC');

	while($row2 = mysql_fetch_array($REQ5))
	{

		$REQ6 = mysql_query('SELECT phpl_rens.nom, phpl_donnee.nom, phpl_donnee.id, phpl_donnee.etat, phpl_donnee.url, phpl_classe.nom
							FROM phpl_rens, phpl_classe, phpl_clubs, phpl_donnee
							WHERE phpl_clubs.id='.$id.'
							AND id_clubs='.$id.'
							AND id_classe='.$row2[1].'
							AND id_classe=phpl_classe.id
							AND phpl_rens.id=id_rens
							ORDER BY phpl_rens.rang ASC');

		while($row = mysql_fetch_array($REQ6))
		{
			if ($row[3] == 1) { $CHECK = ' checked="checked"'; } else { $CHECK = ''; }

			echo '			<tr>
				<td><b>'.$row[5].'</b></td>
				<td>'.stripslashes($row[0]).'</td>
				<td><input type="text" name="nom[]" value="'.stripslashes($row[1]).'" size="30" /></td>
				<td><input type="text" name="url[]" value="'.$row[4].'" size="40>" /></td>
				<td class="TxtCenter">
					<input type="hidden" name="idd[]" value="'.$row[2].'" />
					<input type="checkbox" name="etat_'.$i.'" value="1"'.$CHECK.' />
				</td>
			</tr>';

			$i++;
		}
		mysql_free_result($REQ6);
	}
	mysql_free_result($REQ5);

	echo '
		</tbody>
		<tfoot>
			<tr class="ui-widget-footer">
				<td colspan="5" class="TxtCenter">
					<input type="hidden" name="page" value="fiches_clubs" />
					<input type="hidden" name="action" value="gest" />
					<input type="hidden" name="go" value="1" />
					<input type="hidden" name="id" value="'.$id.'" />
					<input type="submit" value="'.ENVOI.'" />
				</td>
			</tr>
		</tfoot>
	</table>
</form>'."\n\n";

	$REQ7  = mysql_query('SELECT url_logo FROM phpl_clubs WHERE id='.$id);

	while($ROW7 = mysql_fetch_array($REQ7))
	{
		if (!empty($ROW7['url_logo']) AND file_exists('../'.REP_IMG_CLUB_LARGE.$ROW7['url_logo']))
		{
			echo '	<table class="Large50P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th colspan="3">Logo</th>
			</tr>
			<tr>
				<th class="Large33P">Grand</th>
				<th class="Large33P">Médium</th>
				<th class="Large33P">Petit</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="TxtCenter">'.Image('../'.REP_IMG_CLUB_LARGE, $ROW7['url_logo'], '', '').'</td>
				<td class="TxtCenter">'.Image('../'.REP_IMG_CLUB_MEDIUM, $ROW7['url_logo'], '', '').'</td>
				<td class="TxtCenter">'.Image('../'.REP_IMG_CLUB_SMALL, $ROW7['url_logo'], '', '').'</td>
			</tr>
		</tbody>
	</table>'."\n\n";
		}
	}
	mysql_free_result($REQ7);

	$REQ8 = mysql_query('SELECT id, nom FROM phpl_classe ORDER BY rang ASC');

	while($ROW8 = mysql_fetch_array($REQ8))
	{
 		echo '	<table class="Large50P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th colspan="2">'.$ROW8['nom'].'</th>
			</tr>
		</thead>
		<tbody>
			'.aff_rens($ROW8['id'], $id).'
		</tbody>
	</table>'."\n\n";
	}
	mysql_free_result($REQ8);
}

?>