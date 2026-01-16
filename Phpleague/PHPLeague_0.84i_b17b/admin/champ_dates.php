<?php

if ($action2 == 1)
{
	reset($date);

	while(list($cle, $val) = each($date))
	{
		$y      = $cle + 1;
		$dateUS = date_fr_vers_us($val);
		$query  = "UPDATE phpl_journees SET date_prevue='$dateUS' WHERE numero='$y' AND id_champ='$champ'";
		$result = mysql_query($query);

		$query2 = "SELECT phpl_journees.id
				FROM phpl_journees, phpl_matchs
				WHERE phpl_journees.id=phpl_matchs.id_journee
				AND phpl_journees.numero='$y'
				AND id_champ='$champ'";
		$result2 = mysql_query($query2);

		while ($row2 = mysql_fetch_array($result2))
		{
			$date_us_matchs = "$dateUS $heure:$minute:00";
			$query          = "UPDATE phpl_matchs SET date_reelle='$date_us_matchs' WHERE phpl_matchs.id_journee=$row2[0]";
			$result         = mysql_query($query);
		}
	}
}

$nb_equipes = nb_equipes($champ);

if ($nb_equipes == 0)
{
	echo InfoReqSql('Info', 0, 'highlight', 'alert', ADMIN_DATES_5.' [ <a href="?page=championnat&action=equipes&champ='.$champ.'&annee='.$annee.'">'.TEAM.'</a> ]');
}
elseif (($nb_equipes % 2) !== 0)
{
	echo "<p>".ADMIN_DATES_3."</p>";
}
else
{

?>
<script type="text/javascript">
$(function() {
	$('#dialog01').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
	$('#aide01').click(function() { $('#dialog01').dialog('open'); return false; });
});
</script>

	<form method="post" action="">
		<table class="Large50P ui-widget ui-widget-content">
			<caption class="TxtRight"><button id="aide01" class="aide">Aide</button></caption>
			<tbody>
<?php

	$requete     = "SELECT * FROM phpl_journees WHERE id_champ='$champ'";
	$resultats   = mysql_query($requete);
	$nb_equipes1 = mysql_num_rows($resultats);

	if ($nb_equipes1 !== (($nb_equipes) * 2 - 2))
	{
		$x = 1;

		mysql_query("DELETE FROM phpl_journees WHERE id_champ='$champ'");

		while ($x<=($nb_equipes * 2) -2)
		{
			$query  = "INSERT INTO phpl_journees (numero, id_champ) VALUES ('$x','$champ')";
			$result = mysql_query($query);

			$x++;
		}
	}

	$i      = 0;
	$result = mysql_query("SELECT numero, date_prevue FROM phpl_journees WHERE id_champ='$champ' ORDER BY numero");

	while ($row = mysql_fetch_array($result))
	{
		if (($i%2) == 0) { $class = 'ligne1'; } else { $class = 'ligne2'; }

		echo '
		<tr class="'.$class.'">
			<td><label>'.ADMIN_JOURNEES_MSG9.' <b>'.$row[0].'</b></label></td>
			<td><input type="text" name="date[]" value="'.date_us_vers_fr($row[1]).'" size="7" maxlength="8" style="float: left;" />&nbsp;(<i>'.ADMIN_JOURNEES_MSG10.'</i>)</td>
		</tr>'."\n";

		$i++;
	}

	echo "				<tr>
				<tr>
					<td colspan=\"2\" class=\"Alerte\">".ADMIN_DATES_2." <a href=\"?page=championnat&action=resultats&champ=$champ\">".RESULT."</a>.</td>
				</tr>
				<tr>
					<td>".ADMIN_DATES_1."</td>
					<td>
						<select size=\"1\" name=\"heure\">";

	for ($i=1; $i<=24; $i++)
	{
		if ($i == 20) { echo "<option value=\"$i\" selected=\"selected\">$i</option>"; }
		else          { echo "<option value=\"$i\">$i</option>"; }
	}

	echo "				</select> ".ADMIN_DATES_HEURES." 
				<select size=\"1\" name=\"minute\">";

	for ($i=0; $i<=60; $i=$i+5)
	{
		if ($i < 10) { $i = "0$i"; }

		if ($i == 0) { echo "<option value=\"$i\" selected>$i</option>"; }
		else         { echo "<option value=\"$i\">$i</option>"; }
	}

	$button = ENVOI;

	echo "				</select> ".ADMIN_DATES_MINUTES."</td>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr class=\"ui-widget-footer\">
					<td>&nbsp;</td>
					<td>
						<input type=\"hidden\" name=\"page\" value=\"championnat\">
						<input type=\"hidden\" name=\"action\" value=\"dates\">
						<input type=\"hidden\" name=\"action2\" value=\"1\">
						<input type=\"hidden\" name=\"champ\" value=\"$champ\">
						<input type=\"hidden\" name=\"nb_equipes\" value=\"$nb_equipes\">
						<input type=\"hidden\" name=\"yes\" value=\"OUI\">
						<input type=\"submit\" value=$button>
					</td>
				</tr>";

?>
			</tfoot>
		</table>
	</form>

	<div id="dialog01" title="Date et heure des matchs">
		<p>Le nombre de journée est calculé en fonction du nombre d'équipes enregistrée dans le championnat.</p>
		<p>Entrer les dates de chaque journée sous le format <b>JJMMAAAA</b>.</p>
		<p>Régler l'heure par défaut des matchs de la saison.</p>
		<p><b>Attention</b><br />Vous imposez la même heure à tous les matchs de la saison. Si vous ne voulez changer que la date ou l'heure d'un match ou d'une journée passez plutôt par les [ Résultats ].</p>
	</div>

<?php

}

?>