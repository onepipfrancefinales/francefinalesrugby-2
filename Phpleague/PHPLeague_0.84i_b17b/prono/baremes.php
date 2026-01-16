<?php

if (VerifSession($user_pseudo, $user_mdp) == 1)
{
	$REQ = mysql_query('SELECT pts_prono_exact, pts_prono_participation, tps_avant_prono
						FROM phpl_gr_championnats
						WHERE id='.$gr_champ);
	$ROW = mysql_fetch_array($REQ);
		   mysql_free_result($REQ);

?>

<table class="Large100P">
	<thead>
		<tr>
			<th><?php echo FormatText(PRONO_BAREME_TITRE); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo FormatText(ADMIN_PARAM_MSG9).' : <b>'.$ROW['pts_prono_exact'].'</b>'; ?></td>
		</tr>
		<tr>
			<td><?php echo FormatText(ADMIN_PARAM_MSG10).' : <b>'.$ROW['pts_prono_participation'].'</b>'; ?></td>
		</tr>
		<tr>
			<td><?php echo FormatText(PRONO_BAREME_TPS).' <b>'.$ROW['tps_avant_prono'].'</b> '.FormatText(PRONO_BAREME_TPS2); ?></td>
		</tr>
	</tbody>
</table>

<?php

}

?>