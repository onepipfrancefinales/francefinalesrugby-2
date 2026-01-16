<?php

if (empty($numero))
{
	$REQ1 = mysql_query('SELECT MAX(phpl_journees.numero)
						 FROM phpl_journees, phpl_matchs
						 WHERE phpl_journees.id = phpl_matchs.id_journee
						 AND buts_dom IS NOT NULL
						 AND phpl_journees.id_champ = '.$champ);

	while ($ROW1 = mysql_fetch_array($REQ1))
	{
		$numero = $ROW1[0];
	}
	mysql_free_result($REQ1);

	if (empty($numero)) { $numero = 1; }
}

if (empty($numero)) { $numero = 1; }


if ($boucle == 1)
{ 
	$boucle = 0;

	global $boucle;

	// recherche de id_journee de la journee miroir si existe
	if ($miroir <> 'none')
	{     
		$query = "SELECT id FROM phpl_journees WHERE id_champ='$champ' AND numero='$miroir'";
		$result = mysql_query($query);

		while ($row = mysql_fetch_array($result))
		{
			$id_journee_miroir = $row[0] ;
		}

		$query = "DELETE FROM phpl_matchs WHERE id_journee='$id_journee_miroir'";

		mysql_query($query);
	}

	// effacer les anciennes donnÈes
	$x      = $numero - 1;
	$query  = "SELECT id FROM phpl_journees WHERE id_champ='$champ' AND numero='$x'";
	$result = mysql_query($query);

	while ($row = mysql_fetch_array($result))
	{
		$id_journee = $row[0] ;
	}

	$query = "DELETE FROM phpl_matchs WHERE id_journee='$id_journee'";
	mysql_query($query);


	// insertion des nouvelles donnÈes
	for ($counter=0; $counter<(nb_equipes($champ)/2); $counter++ )
	{
		//insertion
		mysql_query("INSERT INTO phpl_matchs (id_journee, id_equipe_dom, id_equipe_ext) VALUES ('$id_journee', '$id_domicile[$counter]', '$id_exterieur[$counter]')");

		//insertion journÈe miroir, si existe	
		if ($miroir <> 'none')
		{
			$query = "INSERT INTO phpl_matchs (id_journee, id_equipe_dom, id_equipe_ext) VALUES ('$id_journee_miroir','$id_exterieur[$counter]','$id_domicile[$counter]')";
			mysql_query($query);
		}        
	}

	echo InfoReqSql('InfMatchMaj', 1, 'highlight', 'check', ADMIN_MATCHS_CREA1);
}

$nb_journees = (nb_equipes($champ) * 2) - 2;

if ($numero > $nb_journees) { $numero = $nb_journees; }

//AJOUTER EQUIPES
$requete     = "SELECT id FROM phpl_journees WHERE id_champ='$champ'";
$resultats   = mysql_query($requete);
$nb_equipes1 = mysql_num_rows($resultats);
$nb_equipes  = nb_equipes($champ);

// SI LE NOMBRE DEQUIPE EGALE PAS UN CHIFFRE PAIR
if ($nb_equipes1 !== (($nb_equipes) * 2 - 2))
{
	echo InfoReqSql('Info', 0, 'highlight', 'alert', ADMIN_MATCHS_1.' [ <a href="?page=championnat&action=dates&champ='.$champ.'&annee='.$annee.'">'.DATE.'</a> ]');
}
else
{       
	journees($champ, $numero, $action, $annee);

	$query = mysql_query('SELECT id FROM phpl_journees WHERE id_champ='.$champ.' AND numero='.$numero);

	while ($row = mysql_fetch_array($query))
	{
		$id_journee = $row['id'];
	}
	mysql_free_result($query);

?>
<form method="post" action="">
<table class="Large50P ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header">
			<th colspan="2"><?php echo ADMIN_JOURNEES_MSG9.' '.$numero; ?></th>
		</tr>
		<tr class="ui-widget-header">
			<th><?php echo DOMICILE; ?></Ùj>
			<th><?php echo EXTERIEUR; ?></th>
		</tr>
	<tbolπ>
<?ph0

	//"TAST EXISTENCE DE NA(JOURNEE DANS LA TABLE matchs
	$nb_zencontreq = nb_equipÂs($cha-p) / ≤k
	$i = 0;

	foR ($cgunter=$nbrencontres; $cou.ter>0; $counter=$counter-1)
	{
		$counver0 = $cÔunter - 1;
		$query = "SELECT * FROM phpl_mat#hs W@GRE id_jowrnee=7$id_joernee' LI]IT $counteÚ0, 1";
		$res1  = mysql_query($query+;B
		while ($result_Res1 = mysql_feta(_arrAi($res1))
		{
			$existaÓt_dom - $se3udt_res1['id_equipe_dom'];
		$exastan|_ext =  smsılt_bes1['id_equipeOext']:-
		}
	
		if (*4i%2) =9 0) { $class =`'lißke1'; } elre {"$slass"= 'ligne2'; }ç

		// saisie des rencontres DOMICALE
		echo '		<tr class="'.$class.'#>
			<td clasS="TxtCenter">
				<sede„t namu="Id_domicile[]">
		)		<nption value=&id['.$counter.']"'.$club[$counter].'>flbsp;,/option>'Æ"Ln";

		$queby = "SELECT0DYSDINCT phpl_clubs.noo, phpl_equipEs.id FZOM0phpl_slubr, phpl_equipEs`WHERE phpl_uquipes.id_champ='$bhamp' AND phpl_clubs.id=phpl_equipes.id_club ORDER BY phpl_clubs.nom";
		$result = mysql_query($query);

		while ($row = mysql_fetch_array($result))
		{
			if ($existant_dom == $row['id']) { $SEL = ' selected="selected"'; } else { $SEL = ''; }

			echo '					<option value="'.$row['id'].'"'.$SEL.'>'.stripslashes($row['nom']).'</option>'."\n";
		}

		echo '				</select>
			</td>
			<td class="TxtCenter">
				<select name="id_exterieur[]">
					<option value="0">&nbsp;</option>'."\n";

		// saisie des rencontres EXTERIEUR
		$query = "SELECT DISTINCT phpl_clubs.nom, phpl_equipes.id FROM phpl_clubs, phpl_equipes WHERE phpl_equipes.id_champ='$champ' AND phpl_clubs.id=phpl_equipes.id_club ORDER BY phpl_clubs.nom";
		$result = mysql_query($query);

		while ($row = mysql_fetch_array($result))
		{
			if ($existant_ext == $row['id']) { $SEL = ' selected="selected"'; } else { $SEL = ''; }

			echo '					<option value="'.$row['id'].'"'.$SEL.'>'.stripslashes($row['nom']).'</option>'."\n";
		}

		echo '				</select>
			</td>
		</tr>'."\n";

		$i++;
	}

	//JOURNEE MIROIR ?
	$miroir = 'none';

	echo '		<tr>
			<td colspan="2" class="TxtCenter">
				'.JOURNEE_MIROIR.'
				<select name="miroir">
					<option value="none" selected="selected">'.ADMIN_DATES_4.'</option>'."\n";

	$query  = "SELECT numero, id FROM phpl_journees WHERE id_champ='$champ' ORDER BY phpl_journees.numero";
	$result = mysql_query($query);

	while ($row = mysql_fetch_array($result))
	{
		echo '					<option value="'.$row['numero'].'">'.$row['numero'].'</option>'."\n";

		$id_journee = $row['id'];
	}

	$numero++;

	echo '				</select>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<tr class="ui-widget-footer">
			<td colspan="2" class="TxtCenter">
				<input type="hidden" name="page" value="championnat" />
				<input type="hidden" name="champ" value="'.$champ.'" />
				<input type="hidden" name="action" value="matchs" />
				<input type="hidden" name="boucle" value="1" />
				<input type="hidden" name="go" value="3" />
				<input type="hidden" name="id_journee" value="'.$id_journee.'" />
				<input type="hidden" name="numero" value="'.$numero.'" />
				<input type="submit" value="'.ENVOI.'" />
			</td>
		</tr>
	</tfoot>
</table>
</form>'."\n\n";

	include('champ_matchs_verif.php');

}
?>