<?php

if (VerifSession($user_pseudo, $user_mdp) == 1)
{

?>

<table class="Large100P">
	<thead>
		<tr>
			<th colspan="2"><?php echo FormatText('Statistiques'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo FormatText('Votre score'); ?></td>
			<td><?php affiche_points($user_id, $gr_champ); ?></td>
		</tr>
		<tr>
			<td><?php echo FormatText(PRONO_CLASSEMENT_GENERAL); ?></td>
			<td><?php echo AfficheClassement($user_id, $gr_champ, 'general'); ?></td>
		</tr>
		<tr>
			<td><?php echo FormatText('Classement mois en cours'); ?></td>
			<td><?php echo AfficheClassement($user_id, $gr_champ, 'mensuel_en_cours'); ?></td>
		</tr>
	</tbody>
</table>

<table class="Large100P">
	<thead>
		<tr>
			<th><?php echo FormatText(PRONO_MENU_LES_CHAMPIONNATS); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php champ_prono($gr_champ); ?></td>
		</tr>
	</tbody>
</table>

<?php

}
else
{

?>
<form method="post" action="login.php">
	<table class="Large100P">
		<thead>
			<tr>
				<th colspan="2"><?php echo FormatText(PRONO_MENU_MON_COMPTE); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><label><?php echo FormatText(PRONO_MENU_LOGIN); ?></label></td>
				<td><input type="text" name="user" /></td>
			</tr>
			<tr>
				<td><label><?php echo FormatText(PRONO_MENU_MDP); ?></label></td>
				<td><input type="password" name="pass" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="hidden" name="autoidentification" value="1" />
					<input type="submit" value="OK" />
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="2"><a href="?page=perdu_mdp"><?php echo FormatText(PRONO_MENU_OUBLIE); ?></a></td>
			</tr>
		</tfoot>
	</table>
</form>

<?php

	if (isset($_REQUEST['t']) AND $_REQUEST['t'] == 1)
	{
		echo '<div class="CadreErreur">'.FormatText('Identifiants erron&eacute;s').'</div>';
	}
	elseif (isset($_REQUEST['t']) AND $_REQUEST['t'] == 0)
	{
		echo '<div class="CadreErreur">'.FormatText('Veuillez renseigner tous les champs').'</div>';
	}
}

?>