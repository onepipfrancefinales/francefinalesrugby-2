<?php

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE )
{
	header('P3P: CP="CAO PSA OUR"');
}

define('MOD', 'prono');

$user_pseudo = isset($_COOKIE['phplpronouser']) ? $_COOKIE['phplpronouser'] : NULL;
$user_mdp    = isset($_COOKIE['phplpronopass']) ? $_COOKIE['phplpronopass'] : NULL;
$page        = isset($_REQUEST['page'])         ? $_REQUEST['page']         : NULL;
$action      = isset($_REQUEST['action'])       ? $_REQUEST['action']       : NULL;
$gr_champ    = isset($_REQUEST['gr_champ'])     ? $_REQUEST['gr_champ']     : NULL;

if (isset($_POST['message'])) {$message=$_POST['message'];} else {$message='';}
if (isset($_POST['ancien_mdp'])) {$ancien_mdp=$_POST['ancien_mdp'];} else {$ancien_mdp='';}
if (isset($_POST['nouveau_mdp'])) {$nouveau_mdp=$_POST['nouveau_mdp'];} else {$nouveau_mdp='';}
if (isset($_POST['nouveau_mdp2'])) {$nouveau_mdp2=$_POST['nouveau_mdp2'];} else {$nouveau_mdp2='';}
if (isset($_POST['annee'])) {$annee=$_POST['annee'];} else {$annee='';}
if (isset($_POST['mois'])) {$mois=$_POST['mois'];} else {$mois='';}
if (isset($_POST['jour'])) {$jour=$_POST['jour'];} else {$jour='';}
if (isset($_POST['site'])) {$site=$_POST['site'];} else {$site='';}
if (isset($_POST['mail'])) {$mail=$_POST['mail'];} else {$mail='';}
if (isset($_POST['nom'])) {$nom=$_POST['nom'];} else {$nom='';}
if (isset($_POST['prenom'])) {$prenom=$_POST['prenom'];} else {$prenom='';}
if (isset($_POST['adresse'])) {$adresse=$_POST['adresse'];} else {$adresse='';}
if (isset($_POST['code_postal'])) {$code_postal=$_POST['code_postal'];} else {$code_postal='';}
if (isset($_POST['ville'])) {$ville=$_POST['ville'];} else {$ville='';}
if (isset($_POST['pays'])) {$pays=$_POST['pays'];} else {$pays='';}
if (isset($_POST['profession'])) {$profession=$_POST['profession'];} else {$profession='';}
if (isset($_POST['mobile'])) {$mobile=$_POST['mobile'];} else {$mobile='';}
if (isset($_REQUEST['confirm'])) {$confirm=$_REQUEST['confirm'];} else {$confirm='';}

// inscription
if (isset($_POST['go'])) {$go=$_POST['go'];} else {$go='';}
if (isset($_POST['mdp_verif'])) {$mdp_verif=$_POST['mdp_verif'];} else {$mdp_verif='';}
if (isset($_POST['pseudo'])) {$pseudo=$_POST['pseudo'];} else {$pseudo='';}
if (isset($_POST['email_verif'])) {$email_verif=$_POST['email_verif'];} else {$email_verif='';}
if (isset($_POST['pseudo_verif'])) {$pseudo_verif=$_POST['pseudo_verif'];} else {$pseudo_verif='';}
if (isset($_POST['mail_verif'])) {$mail_verif=$_POST['mail_verif'];} else {$mail_verif='';}
if (isset($_POST['mdp'])) {$mdp=$_POST['mdp'];} else {$mdp='';}
if (isset($_POST['mdp2'])) {$mdp2=$_POST['mdp2'];} else {$mdp2='';}
if (isset($_POST['id_prono'])) {$id_prono=$_POST['id_prono'];} else {$id_prono='';}
if (isset($_POST['adresse1'])) {$adresse1=$_POST['adresse1'];} else {$adresse1='';}
if (isset($_POST['adresse2'])) {$adresse2=$_POST['adresse2'];} else {$adresse2='';}

//Pronos
if (isset($_POST['f_prono_0'])) {$f_prono_0=$_POST['f_prono_0'];} else {$f_prono_0='';}
if (isset($_POST['f_prono_1'])) {$f_prono_1=$_POST['f_prono_1'];} else {$f_prono_1='';}
if (isset($_POST['f_prono_2'])) {$f_prono_2=$_POST['f_prono_2'];} else {$f_prono_2='';}
if (isset($_POST['f_prono_3'])) {$f_prono_3=$_POST['f_prono_3'];} else {$f_prono_3='';}
if (isset($_POST['f_prono_4'])) {$f_prono_4=$_POST['f_prono_4'];} else {$f_prono_4='';}
if (isset($_POST['f_prono_5'])) {$f_prono_5=$_POST['f_prono_5'];} else {$f_prono_5='';}
if (isset($_POST['f_prono_6'])) {$f_prono_6=$_POST['f_prono_6'];} else {$f_prono_6='';}
if (isset($_POST['f_prono_7'])) {$f_prono_7=$_POST['f_prono_7'];} else {$f_prono_7='';}
if (isset($_POST['f_prono_8'])) {$f_prono_8=$_POST['f_prono_8'];} else {$f_prono_8='';}
if (isset($_POST['f_prono_9'])) {$f_prono_9=$_POST['f_prono_9'];} else {$f_prono_9='';}
if (isset($_POST['id_match_0'])) {$id_match_0=$_POST['id_match_0'];} else {$id_match_0='';}
if (isset($_POST['id_match_1'])) {$id_match_1=$_POST['id_match_1'];} else {$id_match_1='';}
if (isset($_POST['id_match_2'])) {$id_match_2=$_POST['id_match_2'];} else {$id_match_2='';}
if (isset($_POST['id_match_3'])) {$id_match_3=$_POST['id_match_3'];} else {$id_match_3='';}
if (isset($_POST['id_match_4'])) {$id_match_4=$_POST['id_match_4'];} else {$id_match_4='';}
if (isset($_POST['id_match_5'])) {$id_match_5=$_POST['id_match_5'];} else {$id_match_5='';}
if (isset($_POST['id_match_6'])) {$id_match_6=$_POST['id_match_6'];} else {$id_match_6='';}
if (isset($_POST['id_match_7'])) {$id_match_7=$_POST['id_match_7'];} else {$id_match_7='';}
if (isset($_POST['id_match_8'])) {$id_match_8=$_POST['id_match_8'];} else {$id_match_8='';}
if (isset($_POST['id_match_9'])) {$id_match_9=$_POST['id_match_9'];} else {$id_match_9='';}

// Classements
$type = isset($_REQUEST['type']) ? $_REQUEST['type'] : NULL;

//Perdu mdp
$new_mot_de_passe = isset($_REQUEST['new_mot_de_passe']) ? $_REQUEST['new_mot_de_passe'] : NULL;

require('../config.php') ;
require('../function_prono.php');

include('../header.php');

if ($ACT_PRONOSTIC == 1)
{
	ouverture();

	define('CHX_IMG_1', 'affiche1.gif');
	define('CHX_IMG_2', 'affiche2.gif');
	define('CHX_IMG_N', 'afficheN.gif');
	define('CHX_IMG_B', 'affiche_selection.gif');
	define('CHX_IMG_TRUE', 'tick.png');
	define('CHX_IMG_FALSE', 'cross.png');

	define('IMG_1', Image('../'.REP_IMG_PRONO, CHX_IMG_1, '', '', '', ''));
	define('IMG_2', Image('../'.REP_IMG_PRONO, CHX_IMG_2, '', '', '', ''));
	define('IMG_N', Image('../'.REP_IMG_PRONO, CHX_IMG_N, '', '', '', ''));
	define('IMG_B', Image('../'.REP_IMG_PRONO, CHX_IMG_B, '', '', '', ''));

	define('IMG_TRUE', Image('../'.REP_IMG_PRONO, CHX_IMG_TRUE, '', '', '', ''));
	define('IMG_FALSE', Image('../'.REP_IMG_PRONO, CHX_IMG_FALSE, '', '', '', ''));

	if (VerifSession($user_pseudo, $user_mdp) == 1)
	{
		$REQ = mysql_query('SELECT pseudo, id_prono FROM phpl_membres WHERE pseudo="'.$user_pseudo.'"');
		$ROW = mysql_fetch_array($REQ);

		$user_pseudo = $ROW['pseudo'];
		$user_id     = $ROW['id_prono'];

		mysql_free_result($REQ);
	}

	if (!isset($gr_champ) OR empty($gr_champ))
	{
		$REQ = mysql_query('SELECT id FROM phpl_gr_championnats WHERE activ_prono="1" ORDER BY id DESC');
		$ROW = mysql_fetch_array($REQ);

		$gr_champ = $ROW['id'];

		mysql_free_result($REQ);
	}

	if ($AGENT == 'iphone')
	{
		echo '	<div id="topbar">
	<div id="leftnav">
		<a href="../consult/index.php"><img src="../themes/phpleague/iphone/home.png" alt="home" /></a>
	</div>
	<div id="title">
		<h1>'.FormatText(MENU_PRONO).'</h1>
	</div>
	</div>'."\n\n";
	}

?>

<div id="maincontainer">
	<div id="topsection">
		<div id="MenuHeader">
			<?php include('menu_top.php'); ?>
		</div>
	</div>

	<div id="contentwrapper">
		<div id="contentcolumn">
			<div class="innertube">
<?php

switch($page)
{
	case 'pronos':          include('pronos.php');        break;
	case 'derniers_pronos': include('pronos_last.php');   break;
	case 'profil':          include('profil.php');        break;
	case 'mes_resultats':   include('mes_resultats.php'); break;
	case 'baremes':         include('baremes.php');       break;
	case 'classement':      include('classement.php');    break;
	case 'inscription':     include('inscription.php');   break;
	case 'perdu_mdp':       include('perdu_mdp.php');     break;
	default:                include('accueil.php');

}

?>
			</div>
		</div>
	</div>

	<div id="leftcolumn">
		<div class="innertube">
			<?php include('menu_left.php'); ?>
		</div>
	</div>

</div>
<?php

}

include('../footer.php');

?>