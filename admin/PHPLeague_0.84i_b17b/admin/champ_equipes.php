<?php

if ($action2 == 'creer' AND isset($nom_club))
{
	$REQ1 = mysql_query('SELECT nom FROM phpl_clubs WHERE nom="'.$nom_club.'"');
	$NBR1 = mysql_num_rows($REQ1);

	mysql_free_result($REQ1);

	if ($NBR1 != 0)
	{
		echo InfoReqSql('InfCreaSaison', 0, 'highlight', 'check', ADMIN_EQUIPE_CREA_2.' [ '.trim($nom_club).' ]');
	}
	else
	{
		$REQ2 = mysql_query('INSERT INTO phpl_clubs (nom) VALUES ("'.trim(addslashes($nom_club)).'")');

		if ($REQ2)
		{
			echo InfoReqSql('InfCreaSaison', 1, 'highlight', 'check', ADMIN_EQUIPE_CREA_1.' [ '.trim($nom_club).' ]');
		}
		else
		{
			echo InfoReqSql('InfCreaSaison', 0, 'error', 'alert', GestErreur(ADMIN_EQUIPE_CREA_3, $REQ2));
		}
	}
}

if ($action2 == 'supp' AND isset($club))
{
	reset($club);

	while (list($cle, $val) = each($club))
	{
		$REQ1 = @mysql_query('DELETE FROM phpl_clubs WHERE id='.$val);
		$REQ2 = @mysql_query('DELETE FROM phpl_donnee WHERE id_clubs='.$val);
	}

	if ($REQ1) { echo InfoReqSql('InfSupp01', 1, 'highlight', 'check', ADMIN_EQUIPE_SUPPR_1); }
	else       { echo InfoReqSql('InfErr01', 0, 'error', 'alert', GestErreur(ADMIN_EQUIPE_CREA_3, $REQ1)); }

	if ($REQ2) { echo InfoReqSql('InfSupp02', 1, 'highlight', 'check', ADMIN_EQUIPE_SUPPR_2); }
	else       { echo InfoReqSql('InfErr02', 0, 'error', 'alert', GestErreur(ADMIN_EQUIPE_CREA_3, $REQ2)); }
}

if ($action2 == 'modifupd')
{
	$REQ1 = @mysql_query('UPDATE phpl_clubs SET nom="'.trim(addslashes($club)).'" WHERE id='.$id_equipe);

	if ($REQ1)
	{
		echo InfoReqSql('InfClubUpd', 1, 'highlight', 'check', 'Mise � jour du nom effectu�e avec succ�s');

		include('generer.php');
	}
	else
	{
		echo InfoReqSql('InfClubUpd', 0, 'error', 'alert', GestErreur('Mise � jour non effectu�e. Erreur', $REQ1));
	}
}

if ($action3 == 'creer')
{
	reset($club);

	while (list($cle, $val) = each($club))
	{
		$REQ = @mysql_query('INSERT INTO phpl_equipes (id_champ, id_club) VALUES ("'.$champ.'", "'.$val.'")');
	}

	if ($REQ) { echo InfoReqSql('InfSupp01', 1, 'highlight', 'check', ADMIN_EQUIPE_CREA_4); }
	else      { echo InfoReqSql('InfErr01', 0, 'error', 'alert', GestErreur(ADMIN_EQUIPE_CREA_5, $REQ)); }
}

if ($action3 == 'supp')
{
	reset($club);

	while (list($cle, $val) = each($club))
	{
		$REQ = @mysql_query('DELETE FROM phpl_equipes WHERE id = '.$val);
	}

	if ($REQ) { echo InfoReqSql('InfSupp01', 1, 'highlight', 'check', ADMIN_EQUIPE_SUPPR_1); }
	else      { echo InfoReqSql('InfErr01', 0, 'error', 'alert', GestErreur(ADMIN_EQUIPE_SUPPR_4, $REQ)); }
}

?>

<script type="text/javascript">
	$(function() {
		$('#tabsequipe').tabs({
			selected: parseInt($.cookie('phpl_tabsequipe')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabsequipe', tab_id, { expires: 1 });
			}
		});

		$('#dialog01').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
		$('#aide01').click(function() { $('#dialog01').dialog('open'); return false; });
		$('#dialog02').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
		$('#aide02').click(function() { $('#dialog02').dialog('open'); return false; });
		$('#dialog03').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
		$('#aide03').click(function() { $('#dialog03').dialog('open'); return false; });
		$('#dialog04').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
		$('#aide04').click(function() { $('#dialog04').dialog('open'); return false; });
	});
</script>

<div id="tabsequipe">
	<ul>
		<li><a href="#tabsequipe-1">Cr�ation</a></li>
		<li><a href="#tabsequipe-2">Edition</a></li>
		<li><a href="#tabsequipe-3">Modification</a></li>
	</ul>

	<div id="tabsequipe-1">
		<form method="post" action="" id="formEquipCrea1">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="3"><?php echo ADMIN_RENS_7; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="Large33P"><label for="nom_club"><?php echo ADMIN_CLUB_NOM; ?></label></td>
						<td class="Large33P"><input type="texte" name="nom_club" id="nom_club" class="Large200M required" /></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="action" value="equipes" />
							<input type="hidden" name="action2" value="creer" />
							<input type="submit" value="<?php echo ADMIN_RENS_7; ?>" />
							<button id="aide01" class="aide">Aide</button>
						</td>
					</tr>
				</tbody>
			</table>              
		</form>

		<div id="dialog01" title="Ajout de clubs">
			<p><u>Championnat � nombre d'�quipe impair</u> :<br />En plus des �quipes de votre championnat, cr�ez une �quipe nomm� "<b>exempte</b>" (sans majuscule) afin d'avoir un nombre pair.</p>
			<p>Lors de la cr�ation des matchs, l'�quipe �tant exclue jouera contre l'�quipe "exempte".</p>
		</div>

		<form method="post" action="" id="formEquipSupp1">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="3"><?php echo ADMIN_RENS_8; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="Large33P"><label><?php echo ADMIN_EQUIPE_1; ?></label></td>
						<td class="Large33P"><?php clubs_menu(); ?></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="action2" value="supp" />
							<input type="hidden" name="action" value="equipes" />
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="submit" value="<?php echo ADMIN_RENS_8; ?>" />
							<button id="aide02">Aide</button>
						</td>
					</tr>
				</tbody>
			</table>              
		</form>

		<div id="dialog02" title="Suppression de clubs">
			<p><?php echo ADMIN_EQUIPE_3; ?>.</p>
			<p>Si vous supprimez un club utilis&eacute; dans un championnat, ce dernier ne fonctionnera plus !<br />Soyez donc très vigilant lors de la suppression d'un club.</p>
		</div>

	</div>

	<div id="tabsequipe-2">
		<form method="post" action="" id="formEquipCrea2">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="2"><?php echo ADMIN_RENS_7; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="Large50P"><?php clubs_menu(); ?></td>
						<td class="TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="action" value="equipes" />
							<input type="hidden" name="action3" value="creer" />
							<input type="submit" value="<?php echo ADMIN_RENS_7; ?>" />
							<button id="aide03">Aide</button>
						</td>
					</tr>
				</tbody>
			</table>              
		</form>

		<div id="dialog03" title="Ajout de clubs">
			<p>S&eacute;lectionnez les clubs &agrave; regrouper dans <b><?php echo affich_champ($champ); ?></b>.</p>
			<p><?php echo ADMIN_EQUIPE_3; ?>.</p>
		</div>

		<form method="post" action="" id="formEquipSupp2">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="2"><?php echo ADMIN_RENS_8; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="Large50P"><?php equipes_menu($champ); ?></td>
						<td class="TxtRight">
							<input type="hidden" name="action3" value="supp" />
							<input type="hidden" name="action" value="equipes" />
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="submit" value="<?php echo ADMIN_RENS_8; ?>" <?php echo VAL; ?> />
							<button id="aide04">Aide</button>
						</td>
					</tr>
				</tbody>
			</table>              
		</form>

		<div id="dialog04" title="Suppression de clubs">
			<p><?php echo ADMIN_EQUIPE_3; ?>.</p>
			<p>Si vous supprimez un club utilis&eacute; de <b><?php echo affich_champ($champ); ?></b>, ce dernier ne fonctionnera plus !<br />Soyez donc très vigilant lors de la suppression d'un club.</p>
		</div>
	</div>

	<div id="tabsequipe-3">
		<form method="post" action="" id="formEquipModif1">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="3">Modification du nom de l'�quipe</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="Large33P"><label for="nom_club"><?php echo ADMIN_CLUB_NOM; ?></label></td>
						<td class="Large33P"><?php echo clubs_select($id_equipe); ?></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="action" value="equipes" />
							<input type="hidden" name="action2" value="modifselect" />
							<input type="submit" value="Modifier" />
						</td>
					</tr>
				</tbody>
			</table>              
		</form>

<?php

if ($action2 == 'modifselect' OR $action2 == 'modifupd')
{
	$REQ = mysql_query('SELECT id, nom FROM phpl_clubs WHERE id='.$id_equipe);

	while($ROW = mysql_fetch_array($REQ))
	{
		$ID  = $ROW['id'];
		$NOM = $ROW['nom'];
	}
	mysql_free_result($REQ);

?>
		<form method="post" action="" id="formEquipModif2">
			<table class="Large50P ui-widget ui-widget-content">
				<tbody>
					<tr>
						<td class="Large33P"><label for="club">Nouveau nom du club</label></td>
						<td class="Large33P"><input type="texte" name="club" id="club" value="<?php echo $NOM; ?>" class="Large200M required" /></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="action" value="equipes" />
							<input type="hidden" name="action2" value="modifupd" />
							<input type="hidden" name="id_equipe" value="<?php echo $ID; ?>" />
							<input type="submit" value="Modifier" />
						</td>
					</tr>
				</tbody>
			</table>              
		</form>
<?php

}

?>
	</div>
</div>