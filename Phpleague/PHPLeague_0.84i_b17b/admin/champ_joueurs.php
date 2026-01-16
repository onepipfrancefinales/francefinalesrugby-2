<?php

$ID_TABS = isset($_REQUEST['id_tabs']) ? $_REQUEST['id_tabs'] : NULL;

// Joueurs
$id_joueur      = isset($_REQUEST['id_joueur'])   ? $_REQUEST['id_joueur']   : NULL;
$prenom         = isset($_POST['prenom'])         ? $_POST['prenom']         : NULL;
$nom            = isset($_POST['nom'])            ? $_POST['nom']            : NULL;
$id_equipe      = isset($_POST['id_equipe'])      ? $_POST['id_equipe']      : NULL;
$photo          = isset($_POST['photo'])          ? $_POST['photo']          : NULL;
$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : NULL;
$email          = isset($_POST['email'])          ? $_POST['email']          : NULL;
$adresse        = isset($_POST['adresse'])        ? $_POST['adresse']        : NULL;
$num_telephone  = isset($_POST['num_telephone'])  ? $_POST['num_telephone']  : NULL;
$positiona      = isset($_POST['positiona'])      ? $_POST['positiona']      : NULL;
$positionb      = isset($_POST['positionb'])      ? $_POST['positionb']      : NULL;
$creer          = isset($_POST['creer'])          ? $_POST['creer']          : NULL;
$num            = isset($_POST['num'])            ? $_POST['num']            : NULL;
$nat            = isset($_POST['nat'])            ? $_POST['nat']            : NULL;
$drapeau        = isset($_POST['drapeau'])        ? $_POST['drapeau']        : NULL;
$poid           = isset($_POST['poid'])           ? $_POST['poid']           : NULL;
$taille         = isset($_POST['taille'])         ? $_POST['taille']         : NULL;

$postes = 'Gardien,Défenseur,Milieu,Attaquant';

if ($action3 == 'editer')
{
	$prenom         = trim(addslashes($prenom));
	$nom            = trim(addslashes($nom));
	$id_equipe      = $id_equipe;
	$photo          = trim($photo);
	$date_naissance = date_fr_vers_us($date_naissance);
	$email          = trim($email);
	$adresse        = trim(addslashes($adresse));
	$num_telephone  = trim($num_telephone);
	$creer          = $creer;
	$num            = trim(addslashes($num));
	$nat            = trim(addslashes($nat)); 
	$drapeau        = $drapeau;
	$poid           = trim($poid);
	$taille         = trim($taille);

	if ($creer == 0) { $position = trim(addslashes($positiona)); }
	if ($creer == 1) { $position = trim(addslashes($positionb)); }

	mysql_query ("UPDATE phpl_joueurs SET position_terrain='$position',
                prenom='$prenom',
                photo='$photo',
                date_naissance='$date_naissance',
                nom='$nom',
                nat='$nat',
                taille='$taille',
                poid='$poid',
                drapeau='$drapeau', 
                num='$num',
				email='$email',
                adresse='$adresse',
                num_telephone='$num_telephone'
                WHERE id='$id_joueur'");

	echo InfoReqSql('InfJoueurMaj02', 1, 'highlight', 'check', ADMIN_JOUEUR_EDIT_1);
}

// Suppression d'un joueur
if ($action2 == 'supp')
{
	$REQ1 = mysql_query('SELECT id FROM phpl_effectif WHERE id_joueur='.$data);
	$NBR1 = mysql_num_rows($REQ1);

	if ($NBR1 > 0)
	{
		while ($ROW1 = mysql_fetch_array($REQ1))
		{
			$REQ2 = mysql_query('DELETE FROM phpl_buteurs WHERE id_effectif='.$ROW1[0]);
		}

		if ($REQ2)
		{
			echo InfoReqSql('InfJoueurDel01', 1, 'highlight', 'check', 'Suppression des buts avec succès');
		}
		else
		{
			echo InfoReqSql('InfJoueurDel01', 0, 'error', 'alert', GestErreur('Suppression des buts non effectuée', $REQ2));
		}
	}

	mysql_free_result($REQ1);

	$REQ3 = mysql_query('DELETE FROM phpl_effectif WHERE id_joueur='.$data);
	$REQ4 = mysql_query('DELETE FROM phpl_joueurs WHERE id='.$data);

	if ($REQ3)
	{
		echo InfoReqSql('InfJoueurDel02', 1, 'highlight', 'check', 'Suppression du joueur de l\'effectif avec succès');
	}
	else
	{
		echo InfoReqSql('InfJoueurDel02', 0, 'error', 'alert', GestErreur('Suppression du joueur de l\'effectif non effectuée', $REQ3));
	}

	if ($REQ4)
	{
		echo InfoReqSql('InfJoueurDel03', 1, 'highlight', 'check', 'Suppression du joueur avec succès');
	}
	else
	{
		echo InfoReqSql('InfJoueurDel03', 0, 'error', 'alert', GestErreur('Suppression du joueur non effectuée', $REQ4));
	}
}

// Création d'un joueur
if ($action2 == 'creer')
{
	$joueurs_prenom = trim(addslashes($prenom));
	$joueurs_nom    = trim(addslashes($nom));
	$id_equipe      = $id_equipe;
	$photo          = trim($photo);
	$dateFR         = date_fr_vers_us($date_naissance);
	$email          = trim($email);
	$adresse        = trim(addslashes($adresse));
	$num_telephone  = trim($num_telephone);
	$creer          = $creer;
	$num            = trim(addslashes($num));
	$nat            = trim(addslashes($nat)); 
	$drapeau        = $drapeau;
	$poid           = trim($poid);
	$taille         = trim($taille);

	if ($creer == 0) { $position = trim(addslashes($positiona)); }
	if ($creer == 1) { $position = trim(addslashes($positionb)); }

	mysql_query("INSERT INTO phpl_joueurs (
					nom,
					prenom,
					photo,
					date_naissance,
					position_terrain,
					nat,
					poid,
					taille,
					drapeau,
					num,
					email,
					adresse,
					num_telephone)
				VALUES (
					'$joueurs_nom',
					'$joueurs_prenom',
					'$photo',
					'$dateFR',
					'$position',
					'$nat',
					'$poid',
					'$taille',
					'$drapeau',
					'$num',
					'$email',
					'$adresse',
					'$num_telephone')");

	$REQ2 = mysql_query('SELECT id
						FROM phpl_joueurs
						WHERE nom="'.$joueurs_nom.'"
						AND prenom="'.$joueurs_prenom.'"');
	$ROW2 = mysql_fetch_array($REQ2);

	if (!$id_equipe == 0)
	{
		mysql_query("INSERT INTO phpl_effectif (id_joueur, id_equipe) VALUES ('$ROW2[0]','$id_equipe')");
	}

	echo InfoReqSql('InfJoueurInser01', 1, 'highlight', 'check', ADMIN_JOUEUR_CREA_1);
}

// Transfert d'un joueur
if ($action_transfert == 1)
{
	reset($joueurs_id);

	while (list($cle, $val) = each($joueurs_id))
	{
		$REQ1 = mysql_query('SELECT id FROM phpl_effectif WHERE id_joueur='.$val.' AND id_equipe='.$equipe_id);
		$NBR1 = mysql_num_rows($REQ1);

		mysql_free_result($REQ1);

		if ($NBR1 == 0)
		{
			mysql_query("INSERT INTO phpl_effectif (id_joueur, id_equipe) VALUES ('$val','$equipe_id')");
		}
	}

	echo InfoReqSql('InfJoueurInser02', 1, 'highlight', 'check', ADMIN_JOUEUR_TRANS_1);
}

// Compte le nombre de joueurs
$REQ1 = mysql_query('SELECT id FROM phpl_joueurs');
$NBR1 = mysql_num_rows($REQ1);

mysql_free_result($REQ1);

// Créer joueurs > clubs
$OPT_CREER_JOUEUR_CLUB = '<option value="0">&nbsp;</option>'."\n";

$REQ2 = mysql_query('SELECT phpl_equipes.id, phpl_clubs.nom
                       FROM phpl_equipes, phpl_clubs 
                       WHERE phpl_clubs.id = phpl_equipes.id_club
                       AND phpl_equipes.id_champ='.$champ.'
                       ORDER BY phpl_clubs.nom ASC');
while ($ROW2 = mysql_fetch_array($REQ2))
{
	$OPT_CREER_JOUEUR_CLUB.= '<option value="'.$ROW2[0].'">'.stripslashes($ROW2[1]).'</option>'."\n";
}
mysql_free_result($REQ2);
// Fin

// Créer joueurs > position
$OPT_CREER_JOUEUR_POS = '<option value="0">&nbsp;</option>'."\n";

$REQ3 = mysql_query('SELECT DISTINCT position_terrain
					FROM phpl_joueurs
					ORDER BY position_terrain ASC');

while ($ROW3 = mysql_fetch_array($REQ3))
{
	$OPT_CREER_JOUEUR_POS.= '<option value="'.$ROW3['position_terrain'].'">'.$ROW3['position_terrain'].'</option>'."\n";
}
mysql_free_result($REQ3);
// Fin

if ($NBR1 > 0)
{
	// Liste des joueurs
	$OPT_LISTE_JOUEUR = '';

	$REQ4 = mysql_query('SELECT id, nom, prenom
						FROM phpl_joueurs
						ORDER BY nom ASC, prenom ASC');

	while ($ROW4 = mysql_fetch_array($REQ4))
	{
		$OPT_LISTE_JOUEUR.= '<option value="'.$ROW4['id'].'">'.stripslashes($ROW4['nom'].' '.$ROW4['prenom']).'</option>'."\n";
	}
	mysql_free_result($REQ4);
	// Fin

	// Transfert joueurs > clubs
	$OPT_TRANS_JOUEUR_CLUB = '';

	$REQ5 = mysql_query('SELECT phpl_clubs.nom, phpl_equipes.id
						FROM phpl_clubs, phpl_equipes
						WHERE phpl_equipes.id_champ='.$champ.'
						AND phpl_clubs.id=phpl_equipes.id_club
						ORDER BY nom ASC');

	while ($ROW5 = mysql_fetch_array($REQ5))
	{
		$OPT_TRANS_JOUEUR_CLUB.= '<option value="'.$ROW5[1].'">'.stripslashes($ROW5[0]).'</option>'."\n";
	}
	mysql_free_result($REQ5);
	// Fin

	// Liste des joueurs
	$OPT_JOUEUR = '<option value="">&nbsp;</option>';

	$REQ6 = mysql_query('SELECT phpl_equipes.id, phpl_clubs.id AS ClubID, phpl_clubs.nom AS ClubNom
						FROM phpl_equipes, phpl_clubs
						WHERE id_champ = '.$champ.'
						AND phpl_clubs.id = phpl_equipes.id_club
						ORDER BY phpl_clubs.nom ASC');

	while ($ROW6 = mysql_fetch_array($REQ6))
	{
		$OPT_JOUEUR.= '<optgroup label="'.stripslashes($ROW6['ClubNom']).'"></option>';

		$REQ7 = mysql_query('SELECT phpl_joueurs.id, phpl_joueurs.nom, phpl_joueurs.prenom, phpl_clubs.nom
							FROM phpl_joueurs, phpl_clubs, phpl_equipes, phpl_effectif
							WHERE phpl_effectif.id_equipe=phpl_equipes.id
							AND phpl_clubs.id='.$ROW6['ClubID'].'
							AND phpl_effectif.id_joueur=phpl_joueurs.id
							AND phpl_equipes.id_club=phpl_clubs.id
							AND phpl_equipes.id_champ='.$champ.'
							ORDER BY phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC');

		while ($ROW7 = mysql_fetch_array($REQ7))
		{
			$OPT_JOUEUR.= '<option value="'.$ROW7[0].'">'.stripslashes($ROW7[1].' '.$ROW7[2]).'</option>';
		}
		mysql_free_result($REQ7);

		$OPT_JOUEUR.= '</optgroup>';
	}
	mysql_free_result($REQ6);
	// Fin
}

?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#tabsjoueur').tabs({
			selected: parseInt($.cookie('phpl_tabsjoueur')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabsjoueur', tab_id, { expires: 1 });
			}
		});

		$('#dialog').dialog({
			autoOpen: false,
			show: 'blind',
			hide: 'blind',
			height: 350,
			resizable: false
		});
		
		$('#opener').click(function(){$('#dialog').dialog('open');return false;});

		$('#extra1').css('display','none');
		$('#extra2').css('display','none');
		$('#croui').click(function(){if($('#croui').is(':checked')){$('#extra1').show();}});
		$('#ecroui').click(function(){if($('#ecroui').is(':checked')){$('#extra2').show();}});
		$('#crnon').click(function(){if($('#crnon').is(':checked')){$('#extra1').hide();}});
		$('#ecrnon').click(function(){if($('#ecrnon').is(':checked')){$('#extra2').hide();}});

		$('#formJoueurTrans').validate();
		$('#formJoueurCrea').validate();
		$('#formJoueurSupp').validate();
		$('#formJoueurEdit1').validate();
		$('#formJoueurEdit2').validate();

		$('.datenaiss').mask('99999999');
		$('.tel').mask('99.99.99.99.99');
		$('.taille').mask('9.99');

		//$('#nat').msDropDown();
		//$('#enat').msDropDown();
	});
</script>

<?php

if ($NBR1 > 0)
{

?>
<script type="text/javascript">
$(function() {
	function log(message) {
		$('<div/>').html(message).prependTo('#log');
		$('#log').attr('scrollTop', 0);
	}

	$('#searchJoueur').autocomplete({
		source: 'champ_joueurs_ajax.php',
		minLength: 2,
		select: function(event, ui) {
			$('#joueur_id').val(ui.item.id);
			log(ui.item ? '<form method="post" action="" class="ui-widget"><label>Sélection : ' + ui.item.label + '</label><input type="hidden" name="page" value="championnat" /><input type="hidden" name="champ" value="<?php echo $champ; ?>" /><input type="hidden" name="action" value="joueurs" /><input type="hidden" name="action2" value="edit" /><input type="hidden" name="id_joueur" value="' + ui.item.id + '" /><input type="hidden" name="id_tabs" value="tabsjoueur-3" /><input type="submit" value="Editer" />' : 'Aucune sélection');
		}
	});
});
</script>

<div id="dialog" title="Recherche">

	<h3>Nom ou prénom</h3>
		<form>
			<div class="ui-widget">
				<input type="text" name="searchJoueur" id="searchJoueur" class="Large100P ui-autocomplete-input" />
			</div>
			<input type="hidden" name="joueur_id" id="joueur_id" />

			<div class="ui-widget" style="margin-top:10px;">
				<div id="log" style="height:200px; overflow:auto;" class="Large100P ui-widget-content"></div>
			</div>
		</form>
</div>
<?php

}

?>

<div id="tabsjoueur">
	<ul>
		<li><a href="#tabsjoueur-1"><?php echo ADMIN_CHAMP_CREER_3; ?></a></li>
<?php

if ($NBR1 > 0)
{

?>
		<li><a href="#tabsjoueur-2"><?php echo ADMIN_RENS_8; ?></a></li>
		<li><a href="#tabsjoueur-3"><?php echo EDITER; ?></a></li>
		<li><a href="#tabsjoueur-4"><?php echo ADMIN_JOUEURS_TRANSFERT; ?></a></li>
		<li>
			<div class="Search">
				<button id="opener">Rechercher un joueur</button>
			</div>
		</li>
<?php

}

?>
	</ul>

	<div id="tabsjoueur-1">
		<form method="post" action="" id="formJoueurCrea">
			<table class="Large50P ui-widget ui-widget-content">
				<tbody>
					<tr class="ligne1">
						<td><label for="prenom"><?php echo ADMIN_JOUEURS_MSG4; ?></label></td>
						<td><input type="text" name="prenom" id="prenom" size="40" class="required" /></td>
					</tr>
					<tr class="ligne2">
						<td><label for="nom"><?php echo ADMIN_JOUEURS_MSG5; ?></label></td>
						<td><input type="text" name="nom" id="nom" size="40" class="required" /></td>
					</tr>
					<tr class="ligne1">
						<td><label for="id_equipe"><?php echo ADMIN_JOUEURS_MSG6; ?></label></td>
						<td>
							<select name="id_equipe" id="id_equipe">
								<?php echo $OPT_CREER_JOUEUR_CLUB; ?>
							</select>
						</td>
					</tr>
					<tr class="ligne2">
						<td><label for="photo"><?php echo ADMIN_JOUEURS_MSG7; ?></label></td>
						<td><input type="text" name="photo" id="photo" size="40" /></td>
					</tr>
					<tr class="ligne1">
						<td><label for="crdate"><?php echo ADMIN_JOUEURS_MSG8; ?></label></td>
						<td>
							<input type="text" name="date_naissance" id="crdate" size="10" maxlength="8" class="datenaiss" />
						</td>
					</tr>
					<tr class="ligne2">
						<td><label for="email"><?php echo ADMIN_JOUEURS_CONVOC_MSG1; ?></label></td>
						<td><input type="text" name="email" id="email" size="40" class="email" /></td>
					</tr>
					<tr class="ligne1">
						<td><label for="adresse"><?php echo ADMIN_JOUEURS_CONVOC_MSG2; ?></label></td>
						<td><input type="text" name="adresse" id="adresse" size="40" /></td>
					</tr>
					<tr class="ligne2">
						<td><label for="crtel"><?php echo ADMIN_JOUEURS_CONVOC_MSG3; ?></label></td>
						<td><input type="text" name="num_telephone" id="crtel" size="15" class="tel" /></td>
					</tr>
					<tr class="ligne1">
						<td><label for="positiona"><?php echo ADMIN_JOUEURS_MSG9a; ?></label></td>
						<td>
							<select name="positiona" id="positiona">
								<?php echo $OPT_CREER_JOUEUR_POS; ?>
							</select>
						</td>
					</tr>
					<tr class="ligne2">
						<td><?php echo ADMIN_POS; ?></td>
						<td>
							<div class="radio">
								<input type="radio" name="creer" id="crnon" value="0" checked="checked" /><label for="crnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="creer" id="croui" value="1" /><label for="croui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
							<div id="extra1">
								<input type="text" name="positionb" id="positionb" size="23" />
							</div>
						</td>
					</tr>
					<tr class="ligne1">
						<td><label for="num"><?php echo FICHE_MAILLOTa; ?></label></td>
						<td><input type="text" name="num" id="num" size="5" /></td>
					</tr>
					<tr class="ligne2">
						<td><label><?php echo ADMIN_JOUEURS_MSG12; ?></label></td>
						<td>
							<?php ListCountry('nat', 'nat', ''); ?>
						</td>
					</tr>
					<tr class="ligne1">
						<td><?php echo FICHE_DRAPEAU; ?></td>
						<td>
							<div class="radio">
								<input type="radio" name="drapeau" id="drnon" value="0" /><label for="drnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="drapeau" id="droui" value="1" checked="checked" /><label for="droui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne2">
						<td><label for="taille"><?php echo ADMIN_JOUEURS_MSG13; ?></label></td>
						<td><input type="text" name="taille" id="taille" size="5" class="taille" style="float: left;" />&nbsp;(ex: 1.80)</td>
					</tr>
					<tr class="ligne1">
						<td><label for="poid"><?php echo ADMIN_JOUEURS_MSG14; ?></label></td>
						<td><input type="text" name="poid" id="poid" size="5" style="float: left;" />&nbsp;(ex: 80)</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="action" value="joueurs" />
							<input type="hidden" name="action2" value="creer" />
							<input type="submit" value="<?php echo ENVOI; ?>" />
						</td>
					</tr>
				</tfoot>
			</table>              
		</form>
	</div>

<?php

if ($NBR1 > 0)
{

?>
	<div id="tabsjoueur-2">
		<form method="post" action="" id="formJoueurSupp">
			<div class="Large50P">
				<?php echo InfoReqSql('InfDel', 0, 'error', 'alert', ADMIN_JOUEURS_MSG1); ?>
			</div>
			<table class="Large50P ui-widget ui-widget-content">
				<tbody>
					<tr>
						<td>
							<select name="data" size="20" class="Large200M required">
								<?php echo $OPT_LISTE_JOUEUR; ?>
							</select>
						</td>
						<td class="TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="action" value="joueurs" />
							<input type="hidden" name="action2" value="supp" />
							<input type="submit" value="<?php echo ADMIN_RENS_8; ?>" />
						</td>
					</tr>
				</tbody>
			</table>              
		</form>
	</div>

	<div id="tabsjoueur-3">
		<form method="post" action="" id="formJoueurEdit1">
			<table class="Large50P ui-widget ui-widget-content">
				<tbody>
					<tr>
						<td><label for="id_joueur"><?php echo ADMIN_JOUEURS_EDITER; ?></label></td>
						<td>
							<select name="id_joueur" id="id_joueur" class="required">
								<?php echo $OPT_JOUEUR; ?>
							</select>
						</td>
						<td class="TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="action" value="joueurs" />
							<input type="hidden" name="action2" value="edit" />
							<input type="submit" value="<?php echo ENVOI; ?>" />
						</td>
					</tr>
				</tbody>
			</table>              
		</form>

<?php

if (isset($id_joueur) AND $action2 == 'edit')
{
	$REQ1 = mysql_query('SELECT prenom, nom, photo, date_naissance, position_terrain, nat, poid, taille, drapeau, num, email, adresse, num_telephone
						FROM phpl_joueurs
						WHERE id='.$id_joueur);
	$ROW1 = mysql_fetch_array($REQ1);

	$DATE_NAISS = date_us_vers_fr($ROW1['date_naissance']);
	$POS_REQ1   = trim($ROW1['position_terrain']);

	mysql_free_result($REQ1);

	if ($ROW1['drapeau'] == 1)
	{
		$checked17 = '';
		$checked18 = 'checked';
	}
	else
	{
		$checked17 = 'checked';
		$checked18 = '';
	}

	$OPT2 = '';
	$REQ2 = mysql_query('SELECT DISTINCT position_terrain
						FROM phpl_joueurs
						ORDER BY position_terrain ASC');

	while ($ROW2 = mysql_fetch_array($REQ2))
	{
		$POS_REQ2 = trim($ROW2['position_terrain']);

		if ($POS_REQ1 == $POS_REQ2) { $SEL2 = ' selected="selected"'; } else { $SEL2 = ''; }

		$OPT2.= '<option value="'.$POS_REQ2.'"'.$SEL2.'>'.$POS_REQ2.'</option>'."\n";
	}
	mysql_free_result($REQ2);

?>
		<form method="post" action="" id="formJoueurEdit2">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="2"><?php echo ADMIN_JOUEURS_EDITER_2.' '.stripslashes($ROW1['prenom']).' '.stripslashes($ROW1['nom']); ?></th>
					</tr>
				</thead>
				<tbody>
					<tr class="ligne1">
						<td><label for="eprenom"><?php echo ADMIN_JOUEURS_MSG4; ?></label></td>
						<td><input type="text" name="prenom" id="eprenom" size="40" value="<?php echo stripslashes($ROW1['prenom']); ?>" class="required" /></td>
						</tr>
					<tr class="ligne2">
						<td><label for="enom"><?php echo ADMIN_JOUEURS_MSG5; ?></label></td>
						<td><input type="text" name="nom" id="enom" size="40" value="<?php echo stripslashes($ROW1['nom']); ?>" class="required" /></td>
					</tr>
					<tr class="ligne1">
						<td><label for="ephoto"><?php echo ADMIN_JOUEURS_MSG7; ?></label></td>
						<td><input type="text" name="photo" id="ephoto" size="40" value="<?php echo $ROW1['photo']; ?>" />
					</tr>
					<tr class="ligne2">
						<td><label for="eddate"><?php echo ADMIN_JOUEURS_MSG8; ?></label></td>
						<td><input type="text" name="date_naissance" id="eddate" size="7" maxlength="8" value="<?php echo $DATE_NAISS; ?>" class="datenaiss" /></td>
					</tr>
					<tr class="ligne1">
						<td><label for="eemail"><?php echo ADMIN_JOUEURS_CONVOC_MSG1; ?></label></td>
						<td><input type="text" name="email" id="eemail" size="40" value="<?php echo $ROW1['email']; ?>" class="email" /></td>
					</tr>
					<tr class="ligne2">
						<td><label for="eadresse"><?php echo ADMIN_JOUEURS_CONVOC_MSG2; ?></label></td>
						<td><input type="text" name="adresse" id="eadresse" size="40" value="<?php echo stripslashes($ROW1['adresse']); ?>" /></td>
					</tr>
					<tr class="ligne1">
						<td><label for="edtel"><?php echo ADMIN_JOUEURS_CONVOC_MSG3; ?></label></td>
						<td><input type="text" name="num_telephone" id="edtel" size="15" value="<?php echo $ROW1['num_telephone']; ?>" class="tel" /></td>
					</tr>
					<tr class="ligne2">
						<td><?php echo ADMIN_JOUEURS_MSG9a; ?></td>
						<td>
							<select name="positiona">
								<?php echo $OPT2; ?>
							</select>
						</td>
					</tr>
					<tr class="ligne1">
						<td><?php echo ADMIN_POS; ?></td>
						<td>
							<div class="radio">
								<input type="radio" name="creer" id="ecrnon" value="0" checked="checked" /><label for="ecrnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="creer" id="ecroui" value="1" /><label for="ecroui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
							<div id="extra2">
								<input type="text" name="positionb" id="positionb" size="23" />
							</div>
						</td>
					</tr>
					<tr class="ligne2">
						<td><label for="enum"><?php echo FICHE_MAILLOTa; ?></label></td>
						<td><input type="text" name="num" id="enum" size="4" value="<?php echo $ROW1['num']; ?>" /></td>
					</tr>
					<tr class="ligne1">
						<td><label for="enat"><?php echo ADMIN_JOUEURS_MSG12; ?></label></td>
						<td>



							<?php ListCountry('nat', 'enat', stripslashes($ROW1['nat'])); ?>


						</td>
					</tr>
					<tr class="ligne2">
						<td><?php echo FICHE_DRAPEAU; ?></td>
						<td>
							<div class="radio">
								<input type="radio" name="drapeau" id="edrnon" value="0" <?php echo $checked17; ?> /><label for="edrnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="drapeau" id="edroui" value="1" <?php echo $checked18; ?> /><label for="edroui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne1">
						<td><label for="etaille"><?php echo ADMIN_JOUEURS_MSG13; ?></label></td>
						<td><input type="text" name="taille" id="etaille" size="5" value="<?php echo $ROW1['taille']; ?>" class="taille" style="float: left;" />&nbsp;(ex: 1.80)</td>
					</tr>
					<tr class="ligne2">
						<td><label for="epoid"><?php echo ADMIN_JOUEURS_MSG14; ?></label></td>
						<td><input type="text" name="poid" id="epoid" size="5" value="<?php echo $ROW1['poid']; ?>" style="float: left;" />&nbsp;(ex: 80)</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="action" value="joueurs" />
							<input type="hidden" name="action2" value="edit" />
							<input type="hidden" name="action3" value="editer" />
							<input type="hidden" name="id_joueur" value="<?php echo $id_joueur; ?>" />
							<input type="submit" value="<?php echo ENVOI; ?>" />
						</td>
					</tr>
				</tfoot>
			</table>
		</form>
<?php

}

?>
	</div>

	<div id="tabsjoueur-4">
		<form method="post" action="" id="formJoueurTrans">
			<table class="Large50P ui-widget ui-widget-content">
				<tbody>
					<tr>
						<td class="Large50P">
							<select name="joueurs_id[]" multiple="multiple" size="20" class="Large200M required">
								<?php echo $OPT_LISTE_JOUEUR; ?>
							</select>
						</td>
						<td class="Large50P TxtCenter">
							<label for="equipe_id"><?php echo ADMIN_JOUEURS_TRANSFERT_VERS; ?></label>
							<br />
							<select name="equipe_id" id="equipe_id">
								<?php echo $OPT_TRANS_JOUEUR_CLUB; ?>
							</select>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td colspan="2" class="TxtCenter">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="action" value="joueurs" />
							<input type="hidden" name="action_transfert" value="1" />
							<input type="submit" value="<?php echo ENVOI; ?>" />
						</td>
					</tr>
				</tfoot>
			</table>              
		</form>
	</div>
<?php

}

?>
</div>