<?php

$champ   = isset($_REQUEST['champ'])    ? $_REQUEST['champ']    : NULL;
$IdEqDom = isset($_REQUEST['IdEqDom'])  ? $_REQUEST['IdEqDom']  : NULL;
$IdEqExt = isset($_REQUEST['$IdEqExt']) ? $_REQUEST['$IdEqExt'] : NULL;

define('MOD', 'consult');

require('../config.php') ;

	require('../function_consult.php');

	include('../header.php');

	ouverture();

if (!isset($_REQUEST['IdEqDom']) OR !isset($_REQUEST['IdEqExt']))
{
	if (!isset($_REQUEST['champ']))
	{
		demande_champ($champ);
	}
	else
	{
		demande_champ($champ);

		echo '	<h1>'.stripslashes(utf8_encode(CONSULT_DUEL)).'</h1>
	<h2>'.stripslashes(utf8_encode(DUEL_MSG1)).'</h2>

	<form method="get" action="">
		<table class="TblCenter Large400">
			<thead>
				<tr>
					<th class="Large40P">'.stripslashes(utf8_encode(DOMICILE)).'</th>
					<th class="Large20P">&nbsp;</th>
					<th class="Large40P">'.stripslashes(utf8_encode(EXTERIEUR)).'</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="TxtRight">'."\n";

		$result = mysql_query("SELECT phpl_clubs.nom FROM phpl_clubs, phpl_equipes WHERE phpl_equipes.id_champ='$champ' AND phpl_clubs.id=phpl_equipes.id_club AND phpl_clubs.nom!='exempte' ORDER BY nom");

		while ($row = mysql_fetch_array($result))
		{
			echo stripslashes(utf8_encode($row[0])).' <input type="radio" name="IdEqDom" value="'.$row[0].'" /><br />'."\n";
		}

		echo '					</td>
					<td>&nbsp;</td>
					<td class="TxtLeft">';

		$result = mysql_query("select phpl_clubs.nom from phpl_clubs, phpl_equipes WHERE phpl_equipes.id_champ='$champ' AND phpl_clubs.id=phpl_equipes.id_club AND phpl_clubs.nom!='exempte' ORDER BY nom");

		while ($row = mysql_fetch_array($result))
		{
			echo '<input type="radio" name="IdEqExt" value="'.$row[0].'" /> '.stripslashes(utf8_encode($row[0])).'<br />'."\n";
		}

		echo '					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3" class="TxtCenter">
						<input type="hidden" name="champ" value="'.$champ.'" />
						<input type="submit" value="'.ENVOI.'" />
					</td>
				</tr>
			</tfoot>
		</table>
	</form>'."\n\n";
	}
}
elseif ($IdEqDom == $IdEqExt)
{
	echo "<div align=\"center\"<h5>choix impossible</h5></div><br />";
	echo "<br /><br /><a href=\"";
	print $_SERVER['HTTP_REFERER'];
	echo "\"><b>Autre duel ...</b></a>";
}
else
{
	$IdEqDom = addslashes($_REQUEST['IdEqDom']);
	$IdEqExt = addslashes($_REQUEST['IdEqExt']);

	$query = "SELECT DOMG, DOMN, EXTG, DOMJOUES, EXTN,EXTJOUES FROM phpl_clmnt_cache WHERE NOM='$IdEqDom' AND ID_CHAMP='$champ'";

	$result = mysql_query($query) or die (mysql_error());

	while ($row = mysql_fetch_array($result))
	{
		$dom_points = (($row['DOMG'] * 2) + $row['DOMN']) / $row['DOMJOUES'] * 3;
		$dom_points+= (($row['EXTG'] * 2) + $row['EXTN']) / $row['EXTJOUES'];
	}

	$query = "SELECT EXTG, EXTN, EXTJOUES, DOMG, DOMN, DOMJOUES FROM phpl_clmnt_cache WHERE NOM='$IdEqExt' AND ID_CHAMP='$champ'";
	$result = mysql_query($query);

	while ($row = mysql_fetch_array($result))
	{
		$ext_points = (($row['EXTG'] * 2) + $row['EXTN']) / $row['EXTJOUES'] * 3;
		$ext_points+= (($row['DOMG'] * 2) + $row['DOMN']) / $row['DOMJOUES'];
	}

	$x = $dom_points + $ext_points;

	$domproba = intval((($dom_points / $x) + 0.005) * 100);
	$extproba = intval((($ext_points / $x) + 0.005) * 100);

		echo "<table class=\"tablephpl2\" align=\"center\" cellspacing=\"0\"><tr class=\"trphpl3\"> <td colspan=\"6\" align=\"center\"><b>".DUEL_MSG3."</b></td></tr><tr><td>".DUEL_MSG4."</td><td><b>".stripslashes($IdEqDom)."</b></td><td align=\"right\"><b>$domproba % </b></td><td>-</td><td align=\"left\"><b> $extproba % </b></td><td><b>".stripslashes($IdEqExt)."</b></td></tr>";

	$query2 = "SELECT DOMBUTSPOUR, DOMG, DOMN, DOMP, DOMBUTSCONTRE, DOMG, DOMN, DOMP FROM phpl_clmnt_cache WHERE NOM='$IdEqDom' AND ID_CHAMP='$champ'";
	$result2 = mysql_query($query2);

	while ($row2 = mysql_fetch_array($result2))
	{
		$dom_buts  = $row2['DOMBUTSPOUR'];
		$dom_joues = $row2['DOMG'] + $row2['DOMN'] + $row2['DOMP'];
		$ext_buts  = $row2['DOMBUTSCONTRE'];
		$ext_joues = $row2['DOMG'] + $row2['DOMN'] + $row2['DOMP'];
	}

	$query2 = "SELECT EXTG, EXTN, EXTP, EXTBUTSCONTRE, EXTBUTSPOUR FROM phpl_clmnt_cache WHERE NOM='$IdEqExt' AND ID_CHAMP='$champ'";
	$result2 = mysql_query($query2);

	while ($row2 = mysql_fetch_array($result2))
	{
		$dom_joues+= $row2['EXTG'] + $row2['EXTN'] + $row2['EXTP'];
		$ext_joues+= $row2['EXTG'] + $row2['EXTN'] + $row2['EXTP'];
		$dom_buts += $row2['EXTBUTSCONTRE'];
		$ext_buts += $row2['EXTBUTSPOUR'];
		$dom_buts  = intval($dom_buts / $dom_joues);
		$ext_buts  = intval($ext_buts / $ext_joues);
	}

	$domproba = "<i>".$dom_buts."</i>";
	$extproba = "<i>".$ext_buts."</i>";

	echo "<tr><td>SCORE : </td><td><b>".stripslashes($IdEqDom)."</b></td><td align=\"right\"><b>$domproba </b></td><td>-</td><td align=\"left\"><b> $extproba</b></td><td><b>".stripslashes($IdEqExt)."</b></td></tr></table>";

	echo "<br /><br /><a href=\"";
	print $_SERVER['HTTP_REFERER'];
	echo "\"><b>Autre duel ...</b></a>";
}

	include('../footer.php');

?>