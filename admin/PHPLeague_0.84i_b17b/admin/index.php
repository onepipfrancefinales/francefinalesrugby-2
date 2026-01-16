<?php

$user_pseudo    = isset($_COOKIE['phpladminuser'])   ? $_COOKIE['phpladminuser']   : NULL;
$user_mdp       = isset($_COOKIE['phpladminpass'])   ? $_COOKIE['phpladminpass']   : NULL;
$page           = isset($_REQUEST['page'])           ? $_REQUEST['page']           : NULL;
$action         = isset($_REQUEST['action'])         ? $_REQUEST['action']         : NULL;
$actionc        = isset($_REQUEST['actionc'])        ? $_REQUEST['actionc']        : NULL;
$identification = isset($_REQUEST['identification']) ? $_REQUEST['identification'] : NULL;
$ga             = isset($_REQUEST['ga'])             ? $_REQUEST['ga']             : NULL;
$go             = isset($_REQUEST['go'])             ? $_REQUEST['go']             : NULL;
$id             = isset($_REQUEST['id'])             ? $_REQUEST['id']             : NULL;

ini_set('error_reporting', (version_compare(PHP_VERSION, '6.0.0', '<') ? E_ALL|E_STRICT : E_ALL));

require('../config.php');
require('../function_admin.php');

if (version_compare(PHP_VERSION, '5.1.0', '>='))
{
	date_default_timezone_set(ZONE);
}

if (version_compare(PHP_VERSION, '6.0.0') >= 0)
{
    $VER_PHP = 'Votre version PHP : '.PHP_VERSION.'.<br />PHPLeague peut comporter des erreurs à cause des fonctions obsolètes.';
}
else
{
	$VER_PHP = '';
}

ouverture();

if (VerifSession($user_pseudo, $user_mdp) == 1)
{
	if (is_dir('../install/') == TRUE)
	{
		$FOLD_INST = InfoReqSql('InfInst', 0, 'error', 'alert', 'Dossier "install" encore présent. Par mesure de sécurités, je vous conseille de le supprimer.');
	}
	else
	{
		$FOLD_INST = '';
	}
}
else
{
	$FOLD_INST = '';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $lang; ?>" xml:lang="<?php echo $lang; ?>">

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>PHPLeague &bull; Administration</title>
<link type="text/css" rel="stylesheet" href="../<?php echo REP_THEME; ?>admin/stylesheet.css" media="screen" />
<script type="text/javascript" src="../<?php echo REP_SCRIPTS; ?>jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="../<?php echo REP_SCRIPTS; ?>jquery-ui-1.8.6.custom.min.js"></script>
<script type="text/javascript" src="<?php echo REP_SCRIPTS; ?>jquery-plugin.min.js"></script>
<script type="text/javascript" src="<?php echo REP_SCRIPTS; ?>jquery-lang.min.js"></script>
<script type="text/javascript" src="<?php echo REP_SCRIPTS; ?>phpleague.min.js"></script>
</head>

<body>

<div id="maincontainer">

	<div id="topsection">
		<div class="innertube">
			<div class="FloatLeft">
				<h1>PHPLeague &bull; Administration</h1>
			</div>
			<div class="FloatRight">
				<?php echo $FOLD_INST; ?>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>

	<div id="contentwrapper">
		<div id="contentcolumn" class="content">
			<div class="innertube">
<?php

if (VerifSession($user_pseudo, $user_mdp) == 1)
{
	switch($page)
	{
		case 'championnat';			 GestInclude('championnat.php'); break;
		case 'groupes_championnats'; GestInclude('grp_championnats.php'); break;
		case 'mini_classement';		 GestInclude('mini_classement.php'); break;
		case 'fiches_clubs';		 GestInclude('fiches_clubs.php'); break;
		case 'gest_photos';			 GestInclude('gest_photos.php'); break;
		case 'membres';				 GestInclude('membres.php'); break;
		case 'membres';				 GestInclude('membres.php'); break;
		case 'consult';				 GestInclude('consultation.php'); break;
		case 'credits';				 GestInclude('credits.php'); break;
		case 'convocations';		 GestInclude('convocations.php'); break;
		case 'maintenance';			 GestInclude('maintenance.php'); break;
		default;					 GestInclude('accueil.php');
	}
}
elseif ($identification == 'err1')
{
	$ERR = 'Veuillez renseigner tous les champs !';
	include('menu.non-identifie.htm');
}
elseif ($identification == 'err2')
{
	$ERR = 'Identifiants erronés !';
	include('menu.non-identifie.htm');
}
else
{
	$ERR = '';
	include('menu.non-identifie.htm');
}

?>
			</div>
		</div>
	</div>

	<div id="leftcolumn">
		<div class="innertube">
<?php

if (VerifSession($user_pseudo, $user_mdp) == 1)
{
	$SELECT = ' class="Select"';

	if ($page == 'championnat')          { $SEL01 = $SELECT; } else { $SEL01 = ''; }
	if ($page == 'groupes_championnats') { $SEL02 = $SELECT; } else { $SEL02 = ''; }
	if ($page == 'fiches_clubs')         { $SEL03 = $SELECT; } else { $SEL03 = ''; }
	if ($page == 'convocations')         { $SEL04 = $SELECT; } else { $SEL04 = ''; }
	if ($page == 'mini_classement')      { $SEL05 = $SELECT; } else { $SEL05 = ''; }
	if ($page == 'membres')              { $SEL06 = $SELECT; } else { $SEL06 = ''; }
	if ($page == 'consult')              { $SEL07 = $SELECT; } else { $SEL07 = ''; }
	if ($page == 'maintenance')          { $SEL08 = $SELECT; } else { $SEL08 = ''; }
	if ($page == 'credits')              { $SEL09 = $SELECT; } else { $SEL09 = ''; }
	if ($page == 'gest_photos')          { $SEL10 = $SELECT; } else { $SEL10 = ''; }

?>
			<ul class="MenuLeft">
				<li><a href="logout.php"><?php echo MENU_LOGOUT.' [ '.$user_pseudo.' ]'; ?></a></li>
				<li><a href="?page=championnat"<?php echo $SEL01; ?>><?php echo LEAGUE; ?></a></li>
				<li><a href="?page=groupes_championnats"<?php echo $SEL02; ?>><?php echo GR_LEAGUE; ?></a></li>
				<li><a href="?page=fiches_clubs"<?php echo $SEL03; ?>><?php echo MENU_FICHES_CLUBS; ?></a></li>
				<li><a href="?page=convocations"<?php echo $SEL04; ?>><?php echo MENU_CONVOCATIONS; ?></a></li>
				<li><a href="?page=gest_photos"<?php echo $SEL10; ?>><?php echo MENU_GEST_PHOTOS; ?></a></li>
				<li><a href="?page=mini_classement"<?php echo $SEL05; ?>><?php echo ADMIN_MINI_1; ?></a></li>
				<li><a href="?page=membres"<?php echo $SEL06; ?>><?php echo MENU_MEMBRES; ?></a></li>
				<li><a href="?page=consult"<?php echo $SEL07; ?>><?php echo MENU_CONSULT; ?></a></li>
				<li><a href="?page=maintenance"<?php echo $SEL08; ?>>Maintenance</a></li>
				<li><a href="?page=credits"<?php echo $SEL09; ?>><?php echo MENU_CREDITS; ?></a></li>
			</ul>
<?php

}

?>
		</div>
	</div>

	<div id="footer">
		<a>PHPLeague <?php echo VER; ?></a> - Copyright &copy; 2004-<?php echo date('Y'); ?> - Tous droits r&eacute;serv&eacute;s - <a href="mailto:Alexis@univert.org">Alexis MANGIN</a>
	</div>

</div>

</body>

</html>