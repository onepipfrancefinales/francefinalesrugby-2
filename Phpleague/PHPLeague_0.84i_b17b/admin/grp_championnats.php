<?php

$page      = isset($_REQUEST['page'])      ? $_REQUEST['page']      : NULL;
$champ     = isset($_REQUEST['champ'])     ? $_REQUEST['champ']     : NULL;
$gr_champ  = isset($_REQUEST['gr_champ'])  ? $_REQUEST['gr_champ']  : NULL;
$action    = isset($_REQUEST['action'])    ? $_REQUEST['action']    : NULL;
$action2   = isset($_REQUEST['action2'])   ? $_REQUEST['action2']   : NULL;
$action3   = isset($_REQUEST['action3'])   ? $_REQUEST['action3']   : NULL;
$confirm   = isset($_REQUEST['confirm'])   ? $_REQUEST['confirm']   : NULL;
$nom_group = isset($_REQUEST['nom_group']) ? $_REQUEST['nom_group'] : NULL;

$id_master               = isset($_REQUEST['id_master'])               ? $_REQUEST['id_master']               : NULL;
$activ_prono             = isset($_REQUEST['activ_prono'])             ? $_REQUEST['activ_prono']             : NULL;
$tps_avant_prono         = isset($_REQUEST['tps_avant_prono'])         ? $_REQUEST['tps_avant_prono']         : NULL;
$pts_prono_exact         = isset($_REQUEST['pts_prono_exact'])         ? $_REQUEST['pts_prono_exact']         : NULL;
$pts_prono_participation = isset($_REQUEST['pts_prono_participation']) ? $_REQUEST['pts_prono_participation'] : NULL;

$SELECT  = ' selected="selected"';
$RESULT  = '';

if ($action2 == 'creer' AND isset($nom_group) AND $action == 'creer')
{   
	$REQ = @mysql_query('INSERT INTO phpl_gr_championnats (nom) VALUES ("'.$nom_group.'")');

	if ($REQ)
	{
		$RESULT.= InfoReqSql('InfGrpCrea', 1, 'highlight', 'check', ADMIN_GRP_CHAMP_CREA1);
	}
	else
	{
		$RESULT.= InfoReqSql('InfGrpCrea', 0, 'error', 'alert', GestErreur(ADMIN_GRP_CHAMP_CREA2, $REQ));
	}
}

if ($confirm == 'ok' AND $gr_champ AND $action == 'supp')
{
	$REQ = @mysql_query('DELETE FROM phpl_gr_championnats WHERE id='.$gr_champ);

	if ($REQ)
	{
		$RESULT.= InfoReqSql('InfGrpSupp', 0, 'highlight', 'check', ADMIN_GRP_CHAMP_SUPP1);
	}
	else
	{
		$RESULT.= InfoReqSql('InfGrpSupp', 0, 'error', 'alert', GestErreur(ADMIN_GRP_CHAMP_SUPP2, $REQ));
	}
}

$REQ = mysql_query('SELECT DISTINCT id, nom FROM phpl_gr_championnats ORDER BY id DESC');
$NBR = mysql_num_rows($REQ);

if ($NBR > 0)
{
	$OPT_GRP = '';

	while($ROW = mysql_fetch_array($REQ))
	{
		if ($gr_champ == $ROW['id']) { $SEL = $SELECT; } else { $SEL = ''; }

		$OPT_GRP.= '<option value="'.$ROW['id'].'"'.$SEL.'>'.stripslashes($ROW['nom']).'</option>'."\n";
	}
}
mysql_free_result($REQ);

if ($action == 'editer')  { $SEL01 = $SELECT; } else { $SEL01 = ''; }
if ($action == 'generer') { $SEL02 = $SELECT; } else { $SEL02 = ''; }
if ($action == 'supp')    { $SEL03 = $SELECT; } else { $SEL03 = ''; }

?>

<h2><?php echo GR_LEAGUE; ?></h2>


<?php echo InfoReqSql('Info', 0, 'error', 'alert', 'En cours de correction. Désolé de la gène occasionnée.'); ?>


<div class="Cadre">
	<form method="post" action="">
<?php

if ($NBR > 0)
{

?>
		<label>Groupe</label>
		<select name="gr_champ">
		<?php echo $OPT_GRP; ?>
		</select>
		<label>Choix</label>
		<select name="action" id="action">
			<option value="0">&nbsp;</option>
			<option value="editer"<?php echo $SEL01; ?>><?php echo EDITER; ?></option>
			<option value="generer"<?php echo $SEL02; ?>><?php echo ADMIN_GR_CHAMP_GENERER; ?></option>
			<option value="supp"<?php echo $SEL03; ?>><?php echo ADMIN_RENS_8; ?></option>
		</select>
		<input type="submit" value="Envoyer" />
<?php

}

?>
		<input type="button" value="<?php echo ADMIN_GR_CHAMP_CREER; ?>" onclick="window.location.href='?page=groupes_championnats&action=creer'" />
	</form>
</div>

<?php echo $RESULT; ?>

<?php

if ($action == 'supp' AND $gr_champ) { include('grp_champ_supp.php'); }
if ($action == 'creer')              { include('grp_champ_crea.php'); }
if ($action == 'editer')             { include('grp_champ_edit.php'); }
if ($action == 'generer')            { include('grp_champ_generer.php'); }

?>