<?php

// Créer joueurs > clubs
$OPT_CREER_JOUEUR_CLUB = '<option value="0">&nbsp;</option>'."\n";

$result = mysql_query("SELECT phpl_equipes.id, phpl_clubs.nom
                       FROM phpl_clubs, phpl_equipes
                       WHERE phpl_clubs.id = phpl_equipes.id_club
                       AND phpl_equipes.id_champ='$champ'
                       ORDER BY nom");
while($row = mysql_fetch_array($result))
{
	$OPT_CREER_JOUEUR_CLUB.= '<option value="'.$row['id'].'">'.stripslashes($row['nom']).'</option>'."\n";
}
// Fin

// Créer joueurs > position
$OPT_CREER_JOUEUR_POS = '';

$queryz = "SELECT DISTINCT position_terrain FROM phpl_joueurs ORDER BY position_terrain ASC";
$resultz = mysql_query($queryz);		
while ($rowz = mysql_fetch_array($resultz))
{
	$OPT_CREER_JOUEUR_POS.= '<option value="'.$rowz['position_terrain'].'">'.$rowz['position_terrain'].'</option>'."\n";
}
// Fin

// Liste des joueurs
$OPT_JOUEUR = '<option value=""></option>';

$REQ100 = mysql_query('SELECT phpl_equipes.id, phpl_clubs.id AS IdClub, phpl_clubs.nom
					FROM phpl_clubs, phpl_equipes
					WHERE id_champ = '.$champ.'
					AND phpl_clubs.id = phpl_equipes.id_club ORDER BY nom ASC');

while($ROW100 = mysql_fetch_array($REQ100))
{

	$OPT_JOUEUR.= '<optgroup label="'.stripslashes($ROW100['nom']).'"></option>';

	$result = mysql_query('SELECT phpl_joueurs.id, phpl_joueurs.nom, phpl_joueurs.prenom, phpl_clubs.nom
                       FROM phpl_joueurs, phpl_clubs, phpl_equipes, phpl_effectif
                       WHERE phpl_effectif.id_equipe=phpl_equipes.id
                       AND phpl_clubs.id = '.$ROW100['IdClub'].'
                       AND phpl_effectif.id_joueur=phpl_joueurs.id
                       AND phpl_equipes.id_club = phpl_clubs.id
                       AND phpl_equipes.id_champ = '.$champ.'
					   ORDER BY phpl_joueurs.nom, phpl_joueurs.prenom');

	while($row = mysql_fetch_array($result))
	{
		$a              = $row[1] + 1;
		$joueurs_nom    = stripslashes($row[1]);
		$joueurs_prenom = stripslashes($row[2]);

		$OPT_JOUEUR.= "<option value=\"$row[0]\">$joueurs_nom $joueurs_prenom</option>";
	}

	$OPT_JOUEUR.= '</optgroup>';
}
// Fin

?>


<?php echo InfoReqSql('Info', 0, 'error', 'alert', 'En cours de d&eacute;veloppement. Aucune requ&ecirc;tes MySQL.'); ?>


<script type="text/javascript">
$(document).ready(function() {
		$('#tabsarbitre').tabs({
			selected: parseInt($.cookie('phpl_tabsarbitre')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabsarbitre', tab_id, { expires: 1 });
			}
		});

		$('#nat').msDropDown();
	});
</script>

<div id="tabsarbitre">
	<ul>
		<li><a href="#tabsarbitre-1"><?php echo ADMIN_CHAMP_CREER_3; ?></a></li>
		<li><a href="#tabsarbitre-2"><?php echo ADMIN_RENS_8; ?></a></li>
		<li><a href="#tabsarbitre-3"><?php echo EDITER; ?></a></li>
	</ul>

	<div id="tabsarbitre-1">
		<form method="post" action="" id="formArbitreCrea">
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
						<td><label><?php echo ADMIN_JOUEURS_MSG7; ?></label></td>
						<td><input type="text" name="photo" size="40" /></td>
					</tr>
					<tr class="ligne2">
						<td><label for="crdate"><?php echo ADMIN_JOUEURS_MSG8; ?></label></td>
						<td><input type="text" name="date_naissance" id="crdate" size="10" maxlength="8" /></td>
					</tr>
					<tr class="ligne1">
						<td><label><?php echo ADMIN_JOUEURS_CONVOC_MSG1; ?></label></td>
						<td><input type="text" name="email" size="40" class="email" /></td>
					</tr>
					<tr class="ligne2">
						<td><label><?php echo ADMIN_JOUEURS_CONVOC_MSG2; ?></label></td>
						<td><input type="text" name="adresse" size="40" /></td>
					</tr>
					<tr class="ligne1">
						<td><label for="crtel"><?php echo ADMIN_JOUEURS_CONVOC_MSG3; ?></label></td>
						<td><input type="text" name="num_telephone" id="crtel" size="15" /></td>
					</tr>
					<tr class="ligne2">
						<td><label><?php echo ADMIN_JOUEURS_MSG12; ?></label></td>
						<td>
							<?php ListCountry('nat'); ?>
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
						<td><input type="text" name="taille" id="taille" size="5" style="float: left;" />&nbsp;(ex: 1.80)</td>
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
							<input type="hidden" name="action" value="arbitres" />
							<input type="hidden" name="action2" value="creer" />
							<input type="submit" value="<?php echo ENVOI; ?>" />
						</td>
					</tr>
				</tfoot>
			</table>              
		</form>
	</div>

	<div id="tabsarbitre-2">
		<form method="post" action="" id="formArbitreSupp">

		</form>
	</div>

	<div id="tabsarbitre-3">
		<form method="post" action="" id="formJoueurEdit1">

		</form>
	</div>
</div>