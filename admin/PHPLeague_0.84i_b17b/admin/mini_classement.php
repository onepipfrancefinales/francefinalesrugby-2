<?php

$champmini        = isset($_REQUEST['champmini'])        ? $_REQUEST['champmini']        : NULL;
$typemini         = isset($_REQUEST['typemini'])         ? $_REQUEST['typemini']         : NULL;
$nb_dessusmini    = isset($_REQUEST['nb_dessusmini'])    ? $_REQUEST['nb_dessusmini']    : NULL;
$nb_dessousmini   = isset($_REQUEST['nb_dessousmini'])   ? $_REQUEST['nb_dessousmini']   : NULL;
$presentationmini = isset($_REQUEST['presentationmini']) ? $_REQUEST['presentationmini'] : NULL;
$lienmini         = isset($_REQUEST['lienmini'])         ? $_REQUEST['lienmini']         : NULL;
$cheminmini_admin = isset($_REQUEST['cheminmini_admin']) ? $_REQUEST['cheminmini_admin'] : NULL;
$classmini        = isset($_REQUEST['classmini'])        ? $_REQUEST['classmini']        : NULL;

$general   = GENERAL;
$domicle   = DOMICILE;
$exterieur = EXTERIEUR;
$attaque   = ATTAQUE;
$defense   = DEFENSE;
$diff      = GOALDIFF;

?>

<script type="text/javascript">
	$(function() {
		$('#formClassMini').validate();

		$('.optaff').hide();
		$('.affclass').click(function(){
			if($(this).val()==='0')
			{
				$('.optaff').show();
			}
			else
			{
				$('.optaff').hide();
			}
		});
	});
</script>

<h2><?php echo utf8_encode(ADMIN_MINI_1); ?></h2>

<?php


echo InfoReqSql('Info', 0, 'error', 'alert', 'En cours de correction. Désolé de la gène occasionnée.');


if (NbrRecord('id', 'phpl_championnats') > 0)
{
	if (!isset($_POST['champmini']) AND !isset($_POST['typemini']))
	{
		$REQ1  = mysql_query('SELECT MAX(id) FROM phpl_championnats');
		$ROW1  = mysql_fetch_array($REQ1);
		$champ = $ROW1[0];

		mysql_free_result($REQ1);


		$OPT_SAISON = '<option value="">&nbsp;</option>';
		$REQ2 = mysql_query('SELECT phpl_divisions.nom, phpl_saisons.annee, phpl_championnats.id
							FROM phpl_championnats, phpl_divisions, phpl_saisons
							WHERE phpl_championnats.id_division=phpl_divisions.id
							AND phpl_championnats.id_saison=phpl_saisons.id
							ORDER BY phpl_saisons.annee DESC, phpl_championnats.id');

		while ($ROW2 = mysql_fetch_array($REQ2))
		{
			$OPT_SAISON.= '<option value="'.$ROW2[2].'">'.$ROW2[0].' '.$ROW2[1].'/'.($ROW2[1] + 1).'</option>'."\n";
		}
		mysql_free_result($REQ2);

?>

<form method="post" action="" id="formClassMini">
	<table class="Large50P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th colspan="2"><?php echo ADMIN_MINI_24; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr class="ligne1">
				<td><?php echo ADMIN_MINI_2; ?></td>
				<td>
					<select name="presentationmini" class="required">
						<option value="">&nbsp;</option>
						<option value="1"><?php echo ADMIN_MINI_22; ?></option>
						<option value="2"><?php echo ADMIN_MINI_23; ?></option>
					</select>
				</td>
			</tr>
			<tr class="ligne2">
				<td><?php echo ADMIN_MINI_3; ?></td>
				<td>
					<select name="typemini" class="required">
						<option value="">&nbsp;</option>
						<option value="<?php echo $general; ?>"><?php echo GENERAL; ?></option>
						<option value="<?php echo $domicle; ?>"><?php echo DOMICILE; ?></option>
						<option value="<?php echo $exterieur; ?>"><?php echo EXTERIEUR; ?></option>
						<option value="<?php echo $attaque; ?>"><?php echo ATTAQUE; ?></option>
						<option value="<?php echo $defense; ?>"><?php echo DEFENSE; ?></option>
						<option value="<?php echo $diff; ?>"><?php echo GOALDIFF; ?></option>
					</select>
				</td>
			</tr>
			<tr class="ligne1">
				<td><?php echo ADMIN_MINI_4; ?></td>
				<td>
					<select name="champmini" class="required">
						<?php echo $OPT_SAISON; ?>
					</select>
				</td>
			</tr>
			<tr class="ligne2">
				<td><?php echo ADMIN_MINI_15; ?></td>
				<td>
					<div class="radio">
						<input type="radio" name="lienmini" id="minnon" value="non" checked="checked" /><label for="minnon"><?php echo ADMIN_RENS_18; ?></label>
						<input type="radio" name="lienmini" id="minoui" value="oui" /><label for="minoui"><?php echo ADMIN_RENS_17; ?></label>
					</div>
				</td>
			</tr>
			<tr class="ligne1">
				<td colspan="2">
					<div class="radio TxtCenter">
						<input type="radio" name="classmini" id="min1" value="1" class="affclass" checked="checked" /><label for="min1"><?php echo ADMIN_MINI_18; ?></label>
						<input type="radio" name="classmini" id="min0" value="0" class="affclass" /><label for="min0"><?php echo ADMIN_MINI_17; ?></label>
					</div>
				</td>
			</tr>
			<tr class="ligne2 optaff">
				<td><?php echo ADMIN_MINI_5; ?></td>
				<td><input type="text" name="nb_dessusmini" size="2" maxlength="2" class="TxtCenter" /></td>
			</tr>
			<tr class="optaff">
				<td><?php echo ADMIN_MINI_14; ?></td>
				<td><input type="text" name="nb_dessousmini" size="2" maxlength="2" class="TxtCenter" /></td>
			</tr>
		</tbody>
		<tfoot>
			<tr class="ui-widget-footer">
				<td>&nbsp;</td>
				<td>
					<input type="hidden" name="page" value="mini_classement" />
					<input type="submit" value="<?php echo ADMIN_MINI_6;?>" />
				</td>
			</tr>
		</tfoot>
	</table>
</form>

<?php

	}
	else
	{
		$champ1        = $champmini;
		$type1         = $typemini;
		$nb_dessus1    = $nb_dessusmini;
		$nb_dessous1   = $nb_dessousmini;
		$presentation1 = $presentationmini;
		$lien1         = $lienmini;
		$class1        = $classmini;

		$IFRAME_DEB = '&#060;iframe src=&#034;'.URL_SITE;
		$IFRAME_FIN = '&#034; height=&#034;430&#034; width=&#034;250&#034;&#062;&#060;/iframe&#062;';
		$DIV_DEB    = '&#060;div&#062;&#060;?php include(\'';
		$DIV_FIN    = '\'); ?&#062;&#060;/div&#062;';

		$VAL_TEXTAREA = 'consult/classement_mini.php?champmini='.$champmini.'&typemini='.$typemini;

		if (!$classmini == 1)
		{
			$VAL_TEXTAREA.= '&amp;nb_dessusmini='.$nb_dessusmini.'&amp;nb_dessousmini='.$nb_dessousmini;
		}

		$VAL_TEXTAREA.= '&amp;presentationmini='.$presentationmini.'&amp;lienmini='.$lienmini.'&amp;classmini='.$classmini;

		echo '	<table class="Large100P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th class="Large40P">&#060;IFRAME&#062;</th>
				<th class="Latge20P">&nbsp;</th>
				<th class="Large40P">&#060;DIV&#062;</th>
			</tr>
		</thead>	
		<tbody>
			<tr>
				<td class="TxtCenter">
					<p>'.ADMIN_MINI_13.'</p>
					<textarea readonly name="code_ajouter" rows="6" cols="50" onclick="this.focus(); this.select()">'.$IFRAME_DEB.$VAL_TEXTAREA.$IFRAME_FIN.'</textarea>
				</td>
				<td class="ligne2">&nbsp;</td>
				<td class="TxtCenter">
					<p>'.ADMIN_MINI_13.'</p>
					<textarea readonly name="code_ajouter" rows="6" cols="50" onclick="this.focus(); this.select()">'.$DIV_DEB.$VAL_TEXTAREA.$DIV_FIN.'</textarea>
				</td>
			</tr>
		</tbody>
	</table>

	<table class="Large100P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th class="Large40P">Aper&ccedil;u &#060;IFRAME&#062;</th>
				<th class="Large20P">&nbsp;</th>
				<th class="Latge40P">Aper&ccedil;u &#060;DIV&#062;</th>
			</tr>
		</thead>	
		<tbody>
			<tr>
				<td class="TxtCenter"><iframe src="'.URL_SITE.$VAL_TEXTAREA.'" height="430" width="250"></iframe></td>
				<td class="ligne2">&nbsp;</td>
				<td class="TxtCenter"><div style="margin: 0 auto; height:430px; width:250px; border: 1px solid #000;"><p>Développement en cours.</p></div></td>
			</tr>
		</tbody>
	</table>'."\n";

	}
}
else
{
	echo InfoReqSql('InfoNbrChamp', 0, 'highlight', 'info', 'Aucun championnat dans la base.');
}

?>