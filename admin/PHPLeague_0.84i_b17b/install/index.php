<?php

$ETAPE = isset($_REQUEST['etape']) ? $_REQUEST['etape'] : NULL;
$LANG  = isset($_REQUEST['lang'])  ? $_REQUEST['lang']  : 'fr';

$action2           = isset($_REQUEST['action2']) ? $_REQUEST['action2'] : NULL;
$hostname          = isset($_REQUEST['hostname']) ? $_REQUEST['hostname'] : NULL;
$database          = isset($_REQUEST['database']) ? $_REQUEST['database'] : NULL;
$login             = isset($_REQUEST['login']) ? $_REQUEST['login'] : NULL;
$password          = isset($_REQUEST['password']) ? $_REQUEST['password'] : NULL;
$nom_site          = isset($_REQUEST['nom_site']) ? $_REQUEST['nom_site'] : NULL;
$url_site          = isset($_REQUEST['url_site']) ? $_REQUEST['url_site'] : NULL;
$repertoire_script = isset($_REQUEST['repertoire_script']) ? $_REQUEST['repertoire_script'] : NULL;
$pseudo            = isset($_REQUEST['pseudo']) ? $_REQUEST['pseudo'] : NULL;
$mot_de_pass       = isset($_REQUEST['mot_de_pass']) ? $_REQUEST['mot_de_pass'] : NULL;
$mail              = isset($_REQUEST['mail']) ? $_REQUEST['mail'] : NULL;

require('lang_'.$LANG.'.php');

define('IMG_OK', '<img src="img_accept.png" alt="'.utf8_encode('OK').'" title="'.utf8_encode('OK').'" />');
define('IMG_CRE', '<img src="img_db_go.png" alt="'.utf8_encode('CREA').'" title="'.utf8_encode('CREA').'" />');
define('IMG_REN', '<img src="img_db_edit.png" alt="'.utf8_encode('REN').'" title="'.utf8_encode('REN').'" />');
define('IMG_INS', '<img src="img_db_go.png" alt="'.utf8_encode('INSER').'" title="'.utf8_encode('INSER').'" />');
define('IMG_MAJ', '<img src="img_db_refresh.png" alt="'.utf8_encode('MAJ').'" title="'.utf8_encode('MAJ').'" />');
define('IMG_SUP', '<img src="img_db_delete.png" alt="'.utf8_encode('SUPP').'" title="'.utf8_encode('SUPP').'" />');

switch($ETAPE)
{
	case 'etape1'; $STITRE = utf8_encode(ETAPE).' 1'; break;
	case 'etape2'; $STITRE = utf8_encode(ETAPE).' 2'; break;
	case 'etape3'; $STITRE = utf8_encode(ETAPE).' 3'; break;
	case 'etape4'; $STITRE = utf8_encode(ETAPE).' 4'; break;
	default;       $STITRE = utf8_encode(ETAPE).' 1';
}

$SELECT = ' class="NavSel"';

if ($ETAPE == 'etape1') { $SEL01 = $SELECT; } else { $SEL01 = ''; }
if ($ETAPE == 'etape2') { $SEL02 = $SELECT; } else { $SEL02 = ''; }
if ($ETAPE == 'etape3') { $SEL03 = $SELECT; } else { $SEL03 = ''; }
if ($ETAPE == 'etape4') { $SEL04 = $SELECT; } else { $SEL04 = ''; }
if (empty($ETAPE))      { $SEL01 = $SELECT; } else { $SEL01 = ''; }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $LANG; ?>" xml:lang="<?php echo $LANG; ?>">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PhpLeague &bull; <?php echo utf8_encode(INSTALL); ?> &#062; <?php echo $STITRE; ?></title>
<link type="text/css" rel="stylesheet" href="style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="../themes/admin/jquery-ui-1.8.6.custom.css" media="screen" />
<script type="text/javascript" src="../scripts/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-ui-1.8.6.custom.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('input:submit, input:button', '#Content').button();
		$('a', '.back').button();

		$('button', '#Content').button({
			icons: {
				primary: 'ui-icon-help'
			},
			text: false
		});
	});
</script>
</head>

<body>

<div id="Header">
	<h1>PHPLeague &bull; <?php echo utf8_encode(INSTALL); ?></h1>
</div>

<div id="Navi">
	<ul id="nav">
		<li><span<?php echo $SEL01; ?>><?php echo utf8_encode(ETAPE); ?> 1</span></li>
		<li><span<?php echo $SEL02; ?>><?php echo utf8_encode(ETAPE); ?> 2</span></li>
		<li><span<?php echo $SEL03; ?>><?php echo utf8_encode(ETAPE); ?> 3</span></li>
		<li><span<?php echo $SEL04; ?>><?php echo utf8_encode(ETAPE); ?> 4</span></li>
	</ul>
</div>

<div id="Content">

<?php

switch($ETAPE)
{
	case 'etape1'; include('etape_01.php'); break;
	case 'etape2'; include('etape_02.php'); break;
	case 'etape3'; include('etape_03.php'); break;
	case 'etape4'; include('etape_04.php'); break;
	default;       include('etape_01.php');
}

?>

</div>

</body>

</html>