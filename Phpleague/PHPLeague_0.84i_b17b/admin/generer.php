<?php

include('generer_tps1.php');   

$debut = 0;
$fin   = 1;

$REQ1  = mysql_query('SELECT id FROM phpl_equipes WHERE id_champ='.$champ);

while ($ROW1 = mysql_fetch_array($REQ1))
{ 
	mysql_query('DELETE FROM phpl_clmnt_graph WHERE phpl_clmnt_graph.id_equipe='.$ROW1['id']);
}
mysql_free_result($REQ1);


$result = mysql_query('SELECT accession, barrage, relegation FROM phpl_parametres WHERE id_champ='.$champ);

while ($row = mysql_fetch_array($result))
{
	$accession  = $row['accession'];
	$barrage    = $row['barrage'] + $accession;
	$relegation = nb_equipes($champ) - $row['relegation'];
}

$REQ2 = mysql_query('SELECT MAX(phpl_journees.numero)
					 FROM phpl_journees, phpl_matchs
					 WHERE phpl_journees.id = phpl_matchs.id_journee
					 AND buts_dom IS NOT NULL
					 AND phpl_journees.id_champ = '.$champ);
$ROW2 = mysql_fetch_array($REQ2);
$max  = $ROW2[0];

mysql_free_result($REQ2);

while ($fin <= $max)
{                 
	$pl = 1;

	db_clmnt($champ, $debut, $fin, 0);

	$REQ3 = mysql_query('SELECT * FROM phpl_clmnt ORDER BY POINTS DESC, DIFF DESC, BUTSPOUR DESC, BUTSCONTRE ASC, NOM');

	while ($ROW3 = mysql_fetch_array($REQ3))
	{   
		mysql_query('INSERT INTO phpl_clmnt_graph (id_equipe, fin, classement) VALUES ('.$ROW3['ID_EQUIPE'].', '.$fin.', '.$pl.')');

		$pl++;                    
	}
	mysql_free_result($REQ3);

	$fin++;
}     

$REQ4 = mysql_query('SELECT phpl_clmnt_graph.id_equipe
					 FROM phpl_clmnt_graph, phpl_equipes
					 WHERE phpl_equipes.id = phpl_clmnt_graph.id_equipe
					 AND phpl_equipes.id_champ = '.$champ);
$nb_saving = mysql_num_rows($REQ4);

mysql_free_result($REQ4);

$REQ5 = mysql_query('SELECT * FROM phpl_equipes WHERE id_champ='.$champ);

$nb_equipes = mysql_num_rows($REQ5);

mysql_free_result($REQ5);

db_clmnt($champ, $debut, $fin, 1);

if ($nb_saving = ($max * $nb_equipes))
{
	include('generer_tps2.php');

	$ETAT     = 1;
	$STYLE    = 'highlight';
	$ICON     = 'check';
	$RESULTAT = ADMIN_GRAPH.' '.ADMIN_GRAPH_6.' '.$TPS;
}
else
{
	$ETAT     = 0;
	$STYLE    = 'error';
	$ICON     = 'alert';
	$RESULTAT = ADMIN_GRAPH_4a;
}

if ($action == 'resultats' OR $action2 == 'modifupd' OR $action2 == 'malusadd')
{
	echo InfoReqSql('InfResGen', $ETAT, $STYLE, $ICON, $RESULTAT);
}
else
{
	echo InfoReqSql('InfResGen', $ETAT, $STYLE, $ICON, $RESULTAT);
}

?>