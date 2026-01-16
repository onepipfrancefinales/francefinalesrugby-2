<?php

include('generer_tps1.php');   

mysql_query("DELETE FROM phpl_clmnt_pronos WHERE id_champ='$gr_champ'") or die (mysql_error());

$REQ1 = mysql_query("SELECT id_membre, pseudo, SUM(points) AS total, SUM(participation) AS participations
					FROM phpl_membres, phpl_pronostics
					WHERE id_champ='$gr_champ'
					AND id_membre=phpl_membres.id
					GROUP BY pseudo
					ORDER BY total, participations");

while ($ROW1 = mysql_fetch_array($REQ1))
{
	$ROW1[1] = addslashes($ROW1[1]);

	mysql_query("INSERT INTO phpl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) VALUES ('$gr_champ', '$ROW1[0]', '$ROW1[1]', '$ROW1[2]', '$ROW1[3]', 'general')") or die (mysql_error());
}
mysql_free_result($REQ1);

$query = "SELECT id_membre, pseudo, SUM(points) AS total, SUM(participation) AS participations
		FROM phpl_membres, phpl_pronostics, phpl_matchs
		WHERE id_champ='$gr_champ'
		AND id_membre=phpl_membres.id
		AND phpl_matchs.id=id_match
		AND MONTH (date_reelle) = MONTH (NOW())
		AND YEAR (date_reelle) = YEAR (NOW())
		GROUP BY pseudo
		ORDER BY total, participations";

$result = mysql_query($query) or die (mysql_error());

while ($row = mysql_fetch_array($result))
{
	$row[1] = addslashes($row[1]);

	mysql_query("INSERT INTO phpl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_en_cours')") or die (mysql_error());
}

$query = "SELECT id_membre, pseudo, SUM(points) AS total, SUM(participation) AS participations
		FROM phpl_membres, phpl_pronostics, phpl_matchs
		WHERE id_champ='$gr_champ'
		AND id_membre=phpl_membres.id
		AND phpl_matchs.id=id_match
		AND DATE_ADD(date_reelle, INTERVAL 30 DAY) >= NOW()
		GROUP BY pseudo
		ORDER BY total, participations";

$result = mysql_query($query) or die (mysql_error());

while ($row = mysql_fetch_array($result))
{
	$row[1] = addslashes($row[1]);

	mysql_query("INSERT INTO phpl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_30_jours')") or die (mysql_error());
}

$query = "SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
		FROM phpl_membres, phpl_pronostics, phpl_matchs
		WHERE id_champ='$gr_champ'
		AND id_membre=phpl_membres.id
		AND phpl_matchs.id=id_match
		AND DATE_ADD(date_reelle, INTERVAL 7 DAY) >= NOW()
		GROUP BY pseudo
		ORDER BY total, participations";

$result = mysql_query($query) or die (mysql_error());

while ($row = mysql_fetch_array($result))
{
	$row[1] = addslashes($row[1]);

	mysql_query("INSERT INTO phpl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'hebdo')") or die (mysql_error());
}

include('generer_tps2.php');

$RESULTAT = ADMIN_GRAPH_PRONO.' '.ADMIN_GRAPH_6.' '.$TPS;

echo InfoReqSql('InfResGrp', 0, 'highlight', 'check', $RESULTAT);

?>