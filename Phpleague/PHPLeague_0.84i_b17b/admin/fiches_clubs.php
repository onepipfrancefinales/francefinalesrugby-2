<?php

$page   = isset($_REQUEST['page'])   ? $_REQUEST['page']   : NULL;
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : NULL;
$id     = isset($_REQUEST['id'])     ? $_REQUEST['id']     : NULL;

switch($action)
{
	case 'classes';	$STITRE = ' &#062; '.ADMIN_CLASSE_CLASSE; $INC_PAGE = 'fiches_clubs_classe.php';  break;
	case 'rens';	$STITRE = ' &#062; '.ADMIN_CLASSE_RENS;   $INC_PAGE = 'fiches_clubs_rens.php';    break;
	case 'gest';	$STITRE = ' &#062; '.ADMIN_CLASSE_GEST;   $INC_PAGE = 'fiches_clubs_equipes.php'; break;
	default:        $STITRE = '';                             $INC_PAGE = 'vide.php';        break;
}

if ($action == 'gest')
{
	$OPT = '	<form method="post" action="" style="float: right">
		<label>'.ADMIN_GESTEQUIPE_2.'</label>
		<select name="id">
			<option value="">&nbsp;</option>'."\n";

	$REQ = mysql_query('SELECT id, nom FROM phpl_clubs ORDER BY nom ASC');

	while($ROW = mysql_fetch_array($REQ))
	{
		$CLUB = stripslashes($ROW['nom']);

		if ($ROW['id'] == $id)
		{
			$SEL        = ' selected="selected"';
			$TITRE_CLUB = ' &#062; '.$CLUB;
		}
		else
		{
			$SEL        = '';
			$TITRE_CLUB = '';
		}

		$OPT.= '<option value="'.$ROW['id'].'"'.$SEL.'>'.$CLUB.'</option>'."\n";
	}
	mysql_free_result($REQ);

	$OPT.= '		</select>
		<input type="hidden" name="page" value="fiches_clubs" />
		<input type="hidden" name="action" value="gest" />
		<input type="submit" value="'.ENVOI.'" />
	</form>';
}
else { $OPT = ''; }

if ($action == 'gest' AND $id)
{
	$REQ = mysql_query('SELECT nom FROM phpl_clubs WHERE id='.$id);

	while($ROW = mysql_fetch_array($REQ))
	{
		$TITRE_CLUB = ' > '.stripslashes($ROW['nom']);

	}
	mysql_free_result($REQ);
}
else { $TITRE_CLUB = ''; }

?>

<h2><?php echo MENU_FICHES_CLUBS.$STITRE.$TITRE_CLUB; ?></h2>

<div class="Cadre">
	<a href="?page=fiches_clubs&action=classes"><?php echo ADMIN_CLASSE_CLASSE; ?></a>
	<a href="?page=fiches_clubs&action=rens"><?php echo ADMIN_CLASSE_RENS; ?></a>
<?php

if (NbrRecord('id', 'phpl_clubs') > 0)
{

?>
	<a href="?page=fiches_clubs&action=gest" style="clear: both"><?php echo ADMIN_CLASSE_GEST; ?></a>
<?php

}

?>

	<?php echo $OPT; ?>
</div>

<?php

include($INC_PAGE);

?>