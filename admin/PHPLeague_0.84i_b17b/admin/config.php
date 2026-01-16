<?php

include('data_connect.php');
include('../lang/lang_'.$lang.'.php');

// Activation :: 1 = oui :: 0 = non
$ACT_PRONOSTIC	= 1; // Pronostic
$ACT_MENU		= 1; // Menu
$ACT_CALENDRIER = 1; // Calendrier
$ACT_CLASSEMENT = 1; // Classement
$ACT_CLUB		= 1; // Club
$ACT_BUTEUR		= 1; // Buteur
$ACT_CJ			= 1; // Carton jaune
$ACT_CR			= 1; // Carton rouge
$ACT_STAT		= 1; // Statistique

// Choix du thème
$THEME = 'phpleague';

// Affichage du logo des clubs dans le classement
define('AFF_LOGO_CLUB', 1); // 1 = oui :: 0 = non
// Largeur de la photo des joueurs dans l'info bulle (en px)
define('T_PHOTO_JOUEUR', '110px');

// Mode débug
$DEBUG = 1; // 1 = oui :: 0 = non

// Informations de localisation
setlocale(LC_ALL, LEAGUE_LANGUAGE);
define('ZONE', 'Europe/Paris'); // http://www.php.net/manual/fr/timezones.php

// Version PHPLeague
define('VER', '0.84i-b14');

// Connexion base de données
define('CNX_BDD', $database);

// Répertoires
define('REP_IMG', 'images/');
define('REP_IMG_CLUB', REP_IMG.'clubs/');
define('REP_IMG_CLUB_SMALL', REP_IMG_CLUB.'small/');
define('REP_IMG_CLUB_MEDIUM', REP_IMG_CLUB.'medium/');
define('REP_IMG_CLUB_LARGE', REP_IMG_CLUB.'large/');
define('REP_IMG_DRAPEAU', REP_IMG.'drapeaux/');
define('REP_IMG_EQUIPE', REP_IMG.'equipes/');
define('REP_IMG_JOUEUR', REP_IMG.'joueurs/');
define('REP_IMG_MAILLOT', REP_IMG.'maillots/');
define('REP_IMG_MAILLOT_DOM', REP_IMG_MAILLOT.'dom/');
define('REP_IMG_MAILLOT-EXT', REP_IMG_MAILLOT.'ext/');
define('REP_IMG_STADE', REP_IMG.'stades/');
define('REP_IMG_STADE_PHOTO', REP_IMG_STADE.'photos/');
define('REP_IMG_STADE_PLANS', REP_IMG_STADE.'plans/');
define('REP_THEME', 'themes/');

// Liens
define('URL_SITE', $PHPLEAGUE_RACINE);
define('URL_PRONO', '../prono/index.php');
define('URL_BUTEUR', 'buteur.php');
define('URL_CALENDRIER', 'calendrier.php');
define('URL_CLASSEMENT', 'classement.php');
define('URL_CLUB', 'club.php');
define('URL_CJ', 'carton_j.php');
define('URL_CR', 'carton_r.php');
define('URL_GRAPHIQUE', 'graphique.php');
define('URL_JOUEUR', 'joueur.php');
define('URL_MATCH', 'match.php');
define('URL_RESULTAT', 'resultat.php');
define('URL_STAT', 'statistique.php');

// Tables
define('TBL_BUTEURS', 'phpl_buteurs');
define('TBL_CHAMPIONNATS', 'phpl_championnats');
define('TBL_CLASSE', 'phpl_classe');
define('TBL_CLMNT_GRAPH', 'phpl_clmnt_graph');
define('TBL_CLUBS', 'phpl_clubs');
define('TBL_DIVISIONS', 'phpl_divisions');
define('TBL_DONNEES', 'phpl_donnee');
define('TBL_EFFECTIF', 'phpl_effectif');
define('TBL_EQUIPES', 'phpl_equipes');
define('TBL_JOUEURS', 'phpl_joueurs');
define('TBL_JOURNEES', 'phpl_journees');
define('TBL_MATCHS', 'phpl_matchs');
define('TBL_MEMBRES', 'phpl_membres');
define('TBL_PARAMETRES', 'phpl_parametres');
define('TBL_RENSEIGNEMENTS', 'phpl_rens');
define('TBL_SAISONS', 'phpl_saisons');

// Divers
define('IMG_NO_JOUEUR', 'no_image.jpg');

?>