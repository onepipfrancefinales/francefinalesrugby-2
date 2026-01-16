<?php

// ADMINISTRATION

// Setup

define("SETUP_HOST_NAME","Host name");
define("SETUP_DATABASE","Nom de la base de donn&eacute;e");
define("SETUP_LOGIN","Identifiant");
define("SETUP_PASSWORD","Mot de passe");
define("SETUP_TYPE","Type d'installation");
define("SETUP_NORMALE","Installation normale");
define("SETUP_MAJ","Mise &agrave; jour de la version");
define("SETUP_TITRE_SITE","Titre de votre site (facultatif pour la m&agrave;j de la v0.81)"); // 0.82
define("SETUP_URL_SITE","Adresse de votre site"); // 0.82
define("SETUP_PSEUDO","Login (pour l'administration et pour les pronostics facultatif pour la m&agrave;j de la v0.81)"); // 0.82
define("SETUP_MDP","Mot de passe (pour l'administration et pour les pronostics facultatif pour la m&agrave;j de la v0.81)"); // 0.82
define("SETUP_MAIL","E-mail (facultatif pour la m&agrave;j de la v0.81)"); // 0.82
define("SETUP_ERREUR","Impossible d'effectuer la requête pour");
define("SETUP_ERREUR_2","Voici le message d'erreur renvoy&eacute; par la base de donn&eacute;es");
define("SETUP_ID_INCORRECTS","Vos Identifiants sont incorrects !");
define("SETUP_TABLE","La table des");
define("SETUP_TABLE_2","a &eacute;t&eacute; correctement cr&eacute;&eacute;e");
define("SETUP_TABLE_3","Cr&eacute;er la table des");
define("SETUP_TABLE_4","cr&eacute;er le compte de l'administrateur pour la gestion et les pronostics");
define("SETUP_TABLE_5","Le compte de l'administrateur a &eacute;t&eacute; correctement cr&eacute;&eacute;");
define("SETUP_CONFIRMATION","Vous avez bien configurez le script !");
define("SETUP_FIN","Pour plus de s&eacute;curit&eacute;, vous devez &agrave; pr&eacute;sent supprimer le fichiers install.php !
                    Ensuite rendez-vous dans l'<a href=\"admin\">administration</a> pour commencer &agrave; utiliser PhpLeague !");
define("SETUP_REMPLIR_CHAMP","Veuillez remplir tous les champs !");
define("SETUP_REPERTOIRE_SCRIPT","R&eacute;pertoire du script");    // 0.82
define("SETUP_MAJ_ACHEVEE","Mise &agrave; jour achev&eacute;e");    // 0.82
define("SETUP_MAJ_INCOH","Incoh&eacute;rence");    // 0.82
define("SETUP_MAJ_INCOH_2","a marqu&eacute; sous le maillot de");    // 0.82


//Menu
define("MENU_FICHES_CLUBS","Fiches Clubs");
define("MENU_ID","Id");
define("MENU_NOM","Nom");
define("MENU_CREDITS","Cr&eacute;dits");
define("MENU_MEMBRES","Membres");

// Championnats
define("LEAGUE","Championnats");
define("DATE","Dates");
define("TEAM","Equipes");
define("MATCH","Matchs");
define("PARAMETRE","Pts Bonus");
define("GENERER","Valider"); //0.82
define("JOUEURS","Joueurs"); // 0.82
define("BUTEUR","Buteurs");
define("RESULT","Scores");
define("EQUIPE","Equipes");
define("ADMIN_CHAMP_CREER","Cr&eacute;er un championnat");

// Groupes championnats
define("EDITER","Editer");
define("GR_LEAGUE","Groupes de championnats");
define("ADMIN_GR_CHAMP_CREER","Cr&eacute;er un groupe de championnats");
define("ADMIN_GR_CHAMP_GENERER","G&eacute;n&eacute;rer");



// Cr&eacute;ation d'un groupe de championnat
define("ADMIN_GR_CHAMPIONNATS_CREA","Cr&eacute;ation d'un goupe de championnats");
define("ADMIN_GR_CHAMP_CREER_1","Nom du groupement");

//Suppression d'un groupe de championnats
define("ADMIN_GR_CHAMPIONNATS_SUPP","Suppression d'un goupe de championnats");
define("ADMIN_GR_CHAMPIONNATS_SUPP1","Etes vous sure de vouloir supprimer le goupe de championnat");
define("ADMIN_GR_CHAMPIONNATS_SUPP2"," ?");

//Edition d'un groupe de championnats
define("ADMIN_GR_CHAMP_EDIT","Edition du groupe de championnats");
define("ADMIN_GR_CHAMP_EDIT_1","S&eacute;lectionner les championnats &agrave; regrouper dans");
define("ADMIN_GR_CHAMP_EDIT_2","S&eacute;lection");
define("ADMIN_GR_CHAMP_EDIT_3","Championnats &agrave; retirer du groupe");
define("ADMIN_GR_CHAMP_EDIT_4","Mettre &agrave; jour");
define("ADMIN_GR_CHAMP_EDIT_5","Liste actuelle");



//Suppression de championnat
define("ADMIN_CHAMPIONNATS_SUPP","Suppression de championnat");
define("ADMIN_CHAMPIONNATS_SUPP1","Etes vous sure de vouloir supprimer le championnat");
define("ADMIN_CHAMPIONNATS_SUPP2","ainsi que toutes les rencontres attach&eacute;es ?");

// Cr&eacute;ation de championnat
define("ADMIN_CHAMPIONNATS_CREA","Cr&eacute;ation d'un championnat");
define("ADMIN_CHAMPIONNATS_CREA2","Choisir");
define("ADMIN_JOURNEES_MSG3","Saison");
define("ADMIN_CHAMP_CREER_2","Division");
define("ADMIN_CHAMP_CREER_3","Cr&eacute;er");
define("ADMIN_CHAMP_CREER_4","Saison (1ère ann&eacute;e)");

// Equipes
define("ADMIN_CLUB_NOM","Nom du club :");
define("ADMIN_CLUBS_CREE","Cr&eacute;ation des clubs");
define("ADMIN_EQUIPE_TITRE","Edition des &eacute;quipes de");
define("ADMIN_EQUIPE_1","Clubs &agrave; supprimer :");
define("ADMIN_EQUIPE_2","Clubs &agrave; ajouter dans");
define("ADMIN_EQUIPE_3","(Choix multiple possible avec la touche SHIFT et CTRL)");
define("ADMIN_EQUIPE_4","Clubs &agrave; retirer de");

// Dates
define("ADMIN_DATES_TITRE","Dates des journ&eacute;es de");
define("ADMIN_JOURNEES_MSG9","Journ&eacute;e N&deg;");
define("ADMIN_JOURNEES_MSG10","sous la forme <b>JJMMAAAA<b>");
define("ADMIN_DATES_1","Heure des matchs par d&eacute;faut");
define("ADMIN_DATES_2","Attention, en faisant cette op&eacute;ration vous imposez la même heure &agrave; tous les matchs de la saison. Si vous ne voulez changer que la date ou l'heure d'un match ou d'une journ&eacute;e passez plutôt par les");
define("ADMIN_DATES_HEURES","h");
define("ADMIN_DATES_MINUTES","min");
define("ENVOI","Envoi");
define("ADMIN_DATES_3","Votre championnat comporte un nombre d'&eacute;quipes impaire. Rajoutez une &eacute;quipe 'exempte'.");
define("ADMIN_DATES_4","Aucune");
define("ADMIN_DATES_5","Vous devez d'abord cr&eacute;er les &eacute;quipes jouant dans ce championnat. Allez dans");


// Matchs
define("JOURNEE_MIROIR","Journ&eacute;e Miroir ? :");
define("ADMIN_MATCHS_TITRE","Matchs de");
define("ADMIN_COHERENCE_TITRE","Contrôle de coh&eacute;rence du calendrier");
define("ADMIN_COHERENCE_MSG2","Journ&eacute;e");
define("ADMIN_COHERENCE_MSG3"," coh&eacute;rente");
define("ADMIN_COHERENCE_MSG4","<b>incoh&eacute;rente ou incomplète</b>");
define("ADMIN_COHERENCE_MSG5","Ce championnat semble coh&eacute;rent");
define("ADMIN_COHERENCE_MSG6","Ce championnat semble incoh&eacute;rent");
define("ADMIN_COHERENCE_MSG7","Effectuer un contrôle de coh&eacute;rence");
define("DOMICILE","Domicile");
define("EXTERIEUR","Exterieur");
define("ADMIN_MATCHS_1","Les journ&eacute;es n'ont pas encore &eacute;t&eacute; cr&eacute;&eacute;es. Allez d'abord dans");

// Paramètres
define("ADMIN_PARAM_MSG2","Points pour une victoire ?");
define("ADMIN_PARAM_MSG3","Points pour un nul ?");
define("ADMIN_PARAM_MSG4","Points pour une d&eacute;faite ?");
define("ADMIN_PARAM_MSG5","Nombre d'&eacute;quipe pour l'accession directe ?");
define("ADMIN_PARAM_MSG6","Nombre d'&eacute;quipe pour l'accession en barrages ?");
define("ADMIN_PARAM_MSG7","Nombre d'&eacute;quipe pour la rel&eacute;gation ?");
define("ADMIN_PARAM_MSG8","Votre &eacute;quipe pr&eacute;f&eacute;r&eacute;e ?");
define("ADMIN_PARAM_TITRE","Param&egrave;tres de");
define("ADMIN_TAPVERT_TITRE","Points Bonus");
define("ADMIN_PARAM_MSG9","Points prono exact");  
define("ADMIN_PARAM_MSG10","Points participation &agrave; un prono");
define("ADMIN_PARAM_MSG11","Pseudo du pronostiqueur r&eacute;f&eacute;rence");
define("ADMIN_PARAM_MSG12","Indiquer le nombre d'heure entre la fin de validation de la grille et le match");
define("ADMIN_PARAM_MSG13","Pronostics de");
define("ADMIN_TAPVERT_MSG1","Ici, vous pouvez g&eacute;rer les points de p&eacute;nalit&eacute; (sanctions administratives, forfaits, etc ...)");
define("ADMIN_TAPVERT_MSG3","Entrez les points de p&eacute;nalit&eacute; (Ex: -1, -2, ...)");
define("ADMIN_TAPVERT_MSG4","Activer les fiches clubs ?");
define("ADMIN_TAPVERT_MSG5","Activer les pronostics ?");
define("ADMIN_TAPVERT_MSG6","Activer les estimations dans la page du classement ? (Attention, cette option ralentit le chargement de la page)"); // 0.82


// R&eacute;sultats
define("ADMIN_RESULTS_TITRE","R&eacute;sultats de");
define("ADMIN_RESULTS_1","Exempt&eacute;e");

// Buteurs
//define("ADMIN_JOUEURS_TITRE","Fiches joueurs");
define("ADMIN_BUTEUR_TITRE","Buteurs de");

//Graphiques
define("ADMIN_GRAPH_TITRE","R&eacute;sultats et classement mis 	&agrave; jours ");
define("ADMIN_GRAPH","La cr&eacute;ation des graphiques et des classements a &eacute;t&eacute; r&eacute;alis&eacute;e avec succ&egrave;s"); //0.82
define("ADMIN_GRAPH_PRONO","Le classement des membres a &eacute;t&eacute; r&eacute;alis&eacute;e avec succès"); //0.82
define("ADMIN_GRAPH_1","La cr&eacute;ation des graphiques a &eacute;chou&eacute;, veuillez r&eacute;essayer !");
define("ADMIN_GRAPH_2","Cette manoeuvre est &agrave; effectuer après chaque ajout de r&eacute;sultats. Elle peut prendre un certain temps...");
define("ADMIN_GRAPH_3","Evolution du classement de");
define("ADMIN_GRAPH_4","");
define("ADMIN_GRAPH_5","secondes");
define("ADMIN_GRAPH_6","en");

// Mini-classement
define("ADMIN_MINI_1","Mini-Classement");
define("ADMIN_MINI_2","Choisissez la pr&eacute;sentation");
define("ADMIN_MINI_3","Choisissez le type de classement");
define("ADMIN_MINI_4","Choisissez le championnat");
define("ADMIN_MINI_5","Nombre d'&eacute;quipe au dessus de l'&eacute;quipe f&eacute;tiche");
define("ADMIN_MINI_6","Editer le code");
define("ADMIN_MINI_7","Remarques");
define("ADMIN_MINI_8","Championnat non renseign&eacute; !");
define("ADMIN_MINI_9","Type de classement non renseign&eacute; !");
define("ADMIN_MINI_10","Pr&eacute;sentation non renseign&eacute;e !");
define("ADMIN_MINI_11","Code invalide !");
define("ADMIN_MINI_12","Aperçu");
define("ADMIN_MINI_13","Voici le code &agrave; ajouter dans vos pages :");
define("ADMIN_MINI_14","Nombre d'&eacute;quipe en dessous de l'&eacute;quipe f&eacute;tiche");
define("ADMIN_MINI_15","Souhaitez-vous laisser le lien sur les &eacute;quipes ?");
define("ADMIN_MINI_17","Ne pas afficher le classement complet");
define("ADMIN_MINI_18","Afficher le classement complet");
define("ADMIN_MINI_19","Nombre d'&eacute;quipe au dessus non renseign&eacute; !");
define("ADMIN_MINI_20","Nombre d'&eacute;quipe en dessous non renseign&eacute; !");
define("ADMIN_MINI_21","Le code est valide !<br /> R&eacute;ajustez si besoin la taille de l'iframe.");     // 0.82
define("ADMIN_MINI_22","Couleur");
define("ADMIN_MINI_23","Barres");
define("ADMIN_MINI_24","Editeur");

// FICHIER admin/classe.php
define("ADMIN_CLASSE_TITRE","Edition des classes");
define("ADMIN_CLASSE_SUPP1","Suppression de la classe :");
define("ADMIN_CLASSE_BUTTON_SUPP","Suppression classe");
define("ADMIN_CLASSE_CREA","<b>Ajout</b> d'une classe");
define("ADMIN_CLASSE_NOM","Nom de la classe :");
define("ADMIN_CLASSE_BUTTON_CREA","Cr&eacute;ation classe");
define("ADMIN_CLASSE_BUTTON_MSG3","Pour <b>modifier</b> le nom d'une classe, utilisez PHPMyAdmin");
define("ADMIN_CLASSE_1","Classement des classes : 1 : 1er, 2 : 2e...");
define("ADMIN_CLASSE_2","<b>Paramètres enregistr&eacute;s !</b>");
define("ADMIN_CLASSE_3","Vous n'avez pas le droit de supprimer cette classe car elle utilis&eacute;e par");
define("ADMIN_CLASSE_4","renseignement(s). Supprimez le(s) renseignement(s) contenu(s) dans cette classe avant de la supprimer !");
define("ADMIN_CLASSE_5","Informations");
define("ADMIN_CLASSE_CLASSE","Classes");  // 0.82
define("ADMIN_CLASSE_RENS","Renseigenents");  // 0.82
define("ADMIN_CLASSE_GEST","Gestion des clubs");  // 0.82



// FICHIER admin/gestequipes.php
define("ADMIN_GESTEQUIPE_TITRE","Consultation des clubs");  // 0.82
define("ADMIN_GESTEQUIPE_2","Choisissez un club : ");  // 0.82
define("ADMIN_EQUIPE_17","Edition des renseignements de l'&eacute;quipe");
define("ADMIN_GESTEQUIPE_1","R&eacute;glage des param&egrave;tres de : "); // 0.82
define("ADMIN_GESTEQUIPE_3","Nom du renseignement"); // 0.82
define("ADMIN_GESTEQUIPE_4","Valeur du renseignement"); // 0.82
define("ADMIN_EQUIPE_5","Url");
define("ADMIN_EQUIPE_6","Afficher");
define("ADMIN_EQUIPE_7","Url logo : ");
define("ADMIN_EQUIPE_8", "Non renseign&eacute;");


// FICHIER admin/rens.php
define("ADMIN_RENS_TITRE","Edition des renseignements");
define("ADMIN_RENS_SUPP1","<b>Suppression</b> d'un renseignement ");
define("ADMIN_RENS_BUTTON_SUPP","Suppression renseignement");
define("ADMIN_RENS_CREA","<b>Ajout</b> d'un renseignement");
define("ADMIN_RENS_NOM","Nom du renseignement : ");
define("ADMIN_RENS_BUTTON_CREA","Cr&eacute;ation renseignements");
define("ADMIN_RENS_CREA2","<b>Cr&eacute;ation effectu&eacute;e</b>");
define("ADMIN_RENS_SUPP2","<b>Suppression effectu&eacute;e</b>");
define("ADMIN_RENS_1"," dans la classe : ");
define("ADMIN_RENS_2","Vous n'avez pas le droit de supprimer ce renseignement car il est utilis&eacute; ");
define("ADMIN_RENS_3"," fois dans les renseignements.");
define("ADMIN_RENS_4","<b>Ins&eacute;rez</b> les renseignements dans les classes :");
define("ADMIN_RENS_5","<b>Supprimez</b> les param&egrave;tres des renseignements (Choix multiple possible avec la touche SHIFT et CTRL) : ");
define("ADMIN_RENS_6"," dans ");
define("ADMIN_RENS_7","Ajouter");
define("ADMIN_RENS_8","Supprimer");
define("ADMIN_RENS_9","Ordonner les renseignements : 1 pour le 1er, 2 pour le 2e...");
define("ADMIN_RENS_10","<b>Editer</b> les renseignements");
define("ADMIN_RENS_11","Enregistrer");
define("ADMIN_RENS_12","Nom du renseignement");
define("ADMIN_RENS_13","Url du renseignement (facultatif)");
define("ADMIN_RENS_14","Renseignements &agrave; classer :");
define("ADMIN_RENS_15","Tous les renseignements sont class&eacute;s");
define("ADMIN_RENS_16","Etes-vous sure de vouloir supprimer le renseignement");
define("ADMIN_RENS_17","Oui");
define("ADMIN_RENS_18","Non");

/* ZONE PUBLIQUE : CONSULTATION */


// Entete et index
define("CONSULT_HOME","Accueil");
define("CONSULT_CALENDAR","Calendriers");
define("CONSULT_CLASSEMENT","Classements");
define("CONSULT_BUTEUR","Buteurs");
define("CONSULT_DUEL","Duels");
define("MENU_UTILISATEUR","Menu utilisateur");
define("CONSULT_PRONOSTICS","Pronostics");      // 0.82




//classement
define("CONSULT_CLMNT_MSG1","Type de classement :");
define("ADMIN_TAPVERT_MSG2","Quel championnat :");
define("GENERAL","General");
define("ATTAQUE","Attaque");
define("DEFENSE","Defense");
define("GOALDIFF","Diff");
define("BONUS","Bonus");
define("CONSULT_CLMNT_MSG2"," de la journ&eacute;e ");
define("CONSULT_CLMNT_MSG3"," &agrave; la journ&eacute;e ");
define("CONSULT_CLMNT_MSG4","Classement g&eacute;n&eacute;ral, journ&eacute;es ");
define("CONSULT_CLMNT_MSG5"," &agrave; ");
define("CONSULT_CLMNT_MSG6","Journ&eacute;e n&deg;");
define("CONSULT_CLMNT_MSG61","Pr&eacute;c&eacute;dente journ&eacute;e (n&deg;");
define("CONSULT_CLMNT_MSG62","Prochaine journ&eacute;e : n&deg; ");
define("CONSULT_CLMNT_MSG7","ESTIMATION DES SCORES DE LA PROCHAINE JOURNEE :");
define("CONSULT_CLMNT_MSG8","Estim. prochaine journ&eacute;e (n&deg;");
define("CONSULT_CLMNT_MSG9","Prochaine journ&eacute;e : n&deg;  ");
define("CONSULT_CLMNT_MSG10","Classement &agrave; domicile, journ&eacute;es ");
define("CONSULT_CLMNT_MSG11","Classement des attaques, journ&eacute;es ");
define("CONSULT_CLMNT_MSG12","Classement des d&eacute;fenses, journ&eacute;es ");
define("CONSULT_CLMNT_MSG13","Classement au Goal Average, journ&eacute;es ");
define("CONSULT_CLMNT_MSG14","Classement &aacute; l'ext&eacute;rieur, journ&eacute;es ");
define("CLMNT_POSITION","Pl");
define("CLMNT_EQUIPE","Equipe");
define("CLMNT_POINTS","Points");
define("CLMNT_JOUES"," J ");
define("CLMNT_VICTOIRES","V ");
define("CLMNT_NULS","N ");
define("CLMNT_DEFAITES","D ");
define("CLMNT_BUTSPOUR","PP ");
define("CLMNT_BUTSCONTRE","PC ");
define("CLMNT_DIFF","Diff. ");
define("CLMNT_PEN","Bonus ");
define("EXEMPT","Exempt");
define("LEAGUE_LANGUAGE","french");

// Matchs
define("CONSULT_MATCHS","Consultation des calendriers");
define("CONSULT_MATCHS_MSG1","Quel championnat voulez vous consulter ?");
define("CONSULT_MATCHS_MSG2"," le ");

// FICHIER consult/equipes.php
define("CONSULT_INDEX_1","Consultation des &eacute;quipes");//0.82
define("CONSULT_INDEX_2","Fondation");//0.82

// Detail equipe
define("VICTOIRE","VICTOIRE ");
define("NUL"," NUL ");
define("DEFAITE"," DEFAITE");
define("JOURNEE","N&deg;");
define("DETAILEQ_TITRE","Choix &eacute;quipe");
define("DETAILEQ_1","Equipe :");


// calendrier_1.php
define("CONSULT_CALENDAR_1","Cette journ&eacute;e n'existe pas");
define("CONSULT_CALENDAR_2","Journ&eacute;e pr&eacute;c&eacute;dente");
define("CONSULT_CALENDAR_3","Journ&eacute;e suivante");
define("CONSULT_CALENDAR_4","Matchs pr&eacute;c&eacute;dentsourn&eacute;e n&deg;");
define("CONSULT_CALENDAR_5","Derniers r&eacute;sultats : journ&eacute;e n&deg;");


// divers
define("RETOUR","Retour");

// FICHIER admin/clubs.php
define("ADMIN_CLUB_TITRE","Edition des clubs");
define("ADMIN_CLUB_SUPP1","<b>Suppression</b> d'un club ");
define("ADMIN_CLUB_BUTTON_SUPP","Suppression club");
define("ADMIN_CLUB_CREA","<b>Ajout</b> d'un club");
define("ADMIN_CLUB_BUTTON_CREA","Cr&eacute;ation club");
define("ADMIN_CLUB_BUTTON_MSG3","Pour <b>modifier</b> le nom d'un club, utilisez PHPMyAdmin");
define("ADMIN_CLUB_CREA2","<b>Cr&eacute;ation effectu&eacute;e</b>");
define("ADMIN_CLUB_SUPP2","<b>Suppression effectu&eacute;e</b>");




// *********************************************
// ***** NEW ITEMS ADDED DECEMBER 22th 2001 ****
// *********************************************


// consult/buteurs
define("CONSULT_BUTEUR_MSG1","Quel groupe de championnat ?");
define("CONSULT_BUTEUR_MSG2","Classement Buteurs");
define("CONSULT_BUTEUR_TITRE_1","Classement des buteurs");    // 0.82
define("CONSULT_BUTEUR_MSG3","Groupe de Championnats : ");
define("CONSULT_BUTEUR_MSG4","comprenant : ");
define("CONSULT_BUTEUR_MSG5","Quelle &eacute;quipe ?");
define("DUEL_MSG1","Choisissez les adversaires : ");
define("DUEL_MSG2"," Duels");
define("DUEL_MSG3","Voici les probabilit&eacute;s de l'ordinateur ");
define("DUEL_MSG4","PROBABILITES : ");
define("DUEL_MSG5","Les probabilit&eacute;s affich&eacute;es sont le reflet d'un calcul math&eacute;matique simple");

// consult/club
define("CONSULT_CLUB_1","Classement");
define("CONSULT_CLUB_2","Calendrier et r&eacute;sultats");
define("CONSULT_CLUB_3","Historique");
define("CONSULT_CLUB_4","Statistiques");

// S&eacute;curit&eacute;
define("ADMIN_SECURITE_CLUB","Etes vous sur de vouloir supprimer le club suivant :");
define("ADMIN_SECURITE_RENS","Etes vous sur de vouloir supprimer le renseignement suivant :");
define("ADMIN_SECURITE_SAISONS","Etes vous sur de vouloir supprimer la saison ");
define("ADMIN_SECURITE_SAISONS_2","ainsi que les championnats et les rencontres attach&eacute;es");
define("ADMIN_SECURITE_CLASSE","Etes vous sur de vouloir supprimer la classe suivante :");
define("ADMIN_SECURITE_CHAMP","Etes vous sur de vouloir supprimer le championnat suivant :");

// 25/12/2003

//define("ADMIN_BUTEUR_TITRE","Joueurs de ");
define("ADMIN_BUTEUR_TITRE2","Buteurs de ");

// Joueurs et buteurs
define("ADMIN_BUTEURS_TITRE","Edition des Buteurs");
define("ADMIN_BUTEURS_MSG1","Quel championnat voulez vous saisir ?");
define("ADMIN_BUTEURS_MSG2","Quelle journ&eacute;e voulez vous saisir ?");
define("ADMIN_BUTEURS_LAST","Pr&eacute;c.");
define("ADMIN_BUTEURS_NEXT","Suiv.");
define("ADMIN_BUTEURS_MSG3","validation_et_buteur_suivant"); // laisser des _ &agrave; la place des espaces
define("ADMIN_JOUEURS_TITRE","Edition des Joueurs");
define("ADMIN_JOUEURS_MSG1","<b>Suppression</b> d'un joueur <br />Cette manipulation supprime &eacute;galement les buts marqu&eacute;s par le joueur au cours de ce championnat"); // 0.82
define("ADMIN_JOUEURS_MSG2","Suppression");
define("ADMIN_JOUEURS_MSG3","<b>Ajout</b> d'un joueur");
define("ADMIN_JOUEURS_MSG4","Pr&eacute;nom :  ");
define("ADMIN_JOUEURS_MSG5","Nom :  ");
define("ADMIN_JOUEURS_MSG6","Son &eacute;quipe :  "); // 0.82
define("ADMIN_JOUEURS_MSG7","URL Photo : ");
define("ADMIN_JOUEURS_MSG8","Date de Naissance : (JJMMAAAA) ");
define("ADMIN_JOUEURS_MSG9","Position Terrain :  ");
define("ADMIN_JOUEURS_MSG10","Pour <b>modifier</b> le nom d'un joueur, utilisez PHPMyAdmin");
define("ADMIN_JOUEURS_1","<b>Entrez</b> les buteurs match par match. Pour <b>supprimer</b> un buteur, cliquez sur celui-ci.");
define("ADMIN_JOUEURS_2","Buts");
define("ADMIN_JOUEURS_3","&eacute;quipe de");
define("ADMIN_JOUEURS_TRANSFERT","Transf&eacute;rer"); // 0.82
define("ADMIN_JOUEURS_TRANSFERT_VERS","&agrave; transf&eacute;rer vers"); // 0.82
define("ADMIN_JOUEURS_EDITER","Choisir le joueur &agrave; &eacute;diter :"); // 0.82
define("ADMIN_JOUEURS_EDITER_2","Edition du joueur :"); // 0.82


// Pronostics   // 0.82

// Menu identifi&eacute;
define("PRONO_MENU_MON_COMPTE","MON COMPTE");
define("PRONO_MENU_MES_CLASSEMENTS","MES CLASSEMENTS");
define("PRONO_MENU_MES_PRONOS","MES PRONOSTICS");
define("PRONO_MENU_LES_CHAMPIONNATS","LES CHAMPIONNATS");
define("PRONO_MENU_BIENVENUE","Bienvenue");
define("PRONO_MENU_POINTS","POINTS");
define("PRONO_MENU_MON_PROFIL","MON PROFIL");
define("PRONO_MENU_DECONNEXION","DECONNEXION");
define("PRONO_MENU_GENERAL","GENERAL");
define("PRONO_MENU_MOIS","MOIS");
define("PRONO_MENU_PROCHAINE_GRILLE","PROCHAINE GRILLE");
define("PRONO_MENU_DERNIERE_GRILLE","DERNIERE GRILLE");
define("PRONO_MENU_MES_RESULTATS","MES RESULTATS");
define("PRONO_MENU_BAREME","BAREME");
define("PRONO_MENU_AIDE","AIDE");  // 0.82

// Menu non identifi&eacute;
define("PRONO_MENU_LOGIN","LOGIN");
define("PRONO_MENU_MDP","MOT DE PASSE");
define("PRONO_MENU_OUBLIE","MOT DE PASSE OUBLI&Eacute; ?");

// Mot de passe oubli&eacute;
define("PRONO_OUBLIE_PERDU","Mot de passe perdu");
define("PRONO_OUBLIE_TEXTE_1","Entrez votre adresse e-mail, un nouveau mot de passe vous sera alors envoy&eacute;.");
define("PRONO_OUBLIE_TEXTE_2","Votre nouveau mot de passe vous a &eacute;t&eacute; envoy&eacute; &agrave; l'adresse");
define("PRONO_OUBLIE_TEXTE_3","Le mot de passe ne peux vous être envoy&eacute; !<br />Renouvelez votre demande dans un instant, merci.");


//accueil
define("PRONO_ACCUEIL_PRESENTATION","vous pr&eacute;sente ses pronostics pour la prochaine grille");

// GRILLE
define("PRONO_GRILLE_PRONO","Prono");
define("PRONO_GRILLE_TEMPS","Temps restant");
define("PRONO_GRILLE_PRECEDENT","MATCHS PR&Eacute;C&Eacute;DENTS");
define("PRONO_GRILLE_SUIVANT","MATCHS SUIVANTS");
define("PRONO_GRILLE_SCORE","Score r&eacute;el");
define("PRONO_GRILLE_EXPIRE","Expir&eacute;");

// Valider grille
define("PRONO_GRILLE_CONFIRME","Vos pronostics ont bien &eacute;t&eacute; enregistr&eacute;s !");
define("PRONO_GRILLE_PROCHAINE","Prochaine grille");


// Classements
define("PRONO_CLASSEMENT_GENERAL","Classement g&eacute;n&eacute;ral");
define("PRONO_CLASSEMENT_PSEUDO","Pseudo");
define("PRONO_CLASSEMENT_POINTS","Points");
define("PRONO_CLASSEMENT_PARTICIPATIONS","Participations");
define("PRONO_CLASSEMENT_GENERAL_MAJ","CLASSEMENT G&Eacute;N&Eacute;RAL");
define("PRONO_CLASSEMENT_MOIS","CLASSEMENT DU MOIS");
define("PRONO_CLASSEMENT_30","CLASSEMENT DES 30 DERNIERS JOURS");
define("PRONO_CLASSEMENT_HEBDO","CLASSEMENT HEBDO");
define("PRONO_CLASSEMENT_COMPLET","Classement complet");
define("PRONO_CLASSEMENT_SUITE","La suite...");
define("PRONO_CLASSEMENT_NON_CLASSE","Non class&eacute;");
define("PRONO_CLASSEMENT_PREMIER","er");   // Pour 1er    1st
define("PRONO_CLASSEMENT_SECOND","nd");   // Pour 2nd     2nd
define("PRONO_CLASSEMENT_TROIS","e");   // Pour 3e       3rd
define("PRONO_CLASSEMENT_AUTRES","e");   // Pour xe       xth

// Inscription
define("PRONO_INSCRIPTION_TITRE","Inscription");
define("PRONO_INSCRIPTION_MDP","Saisissez &agrave; nouveau votre mot de passe");
define("PRONO_INSCRIPTION_MDP2","Saisissez le club suivi");
define("PRONO_INSCRIPTION_PSEUDO_UTILISE","Ce pseudo est d&eacute;j&agrave; utilis&eacute; !");
define("PRONO_INSCRIPTION_PSEUDO_TAILLE","Votre pseudo et votre mot de passe doivent contenir entre 4 et 20 caract&egrave;res !");
define("PRONO_INSCRIPTION_MAIL_UTILISE","Cette adresse email est d&eacute;ja utilis&eacute;e !");
define("PRONO_INSCRIPTION_MAIL_VIDE","Le champ adresse email ne peut être vide !");
define("PRONO_INSCRIPTION_MAIL_INVALIDE_1","L'adresse email");
define("PRONO_INSCRIPTION_MAIL_INVALIDE_2","n'est pas valide");
define("PRONO_INSCRIPTION_JS_PSEUDO","Veuillez indiquer votre pseudo !");
define("PRONO_INSCRIPTION_JS_MAIL","Veuillez indiquer votre adresse email !");
define("PRONO_INSCRIPTION_JS_MAILVALID","Entrez une adresse e-mail valide !");
define("PRONO_INSCRIPTION_JS_MDP","Veuillez indiquer deux fois votre mot de passe !");
define("PRONO_INSCRIPTION_JS_DIFF","ATTENTION, vos mots de passe sont diff&eacute;rents !");
define("PRONO_INSCRIPTION_JS_NOM","Veuillez indiquer votre nom !");
define("PRONO_INSCRIPTION_JS_PRENOM","Veuillez indiquer votre prenom !");
define("PRONO_INSCRIPTION_JS_ADRESSE","Veuillez indiquer votre adresse !");
define("PRONO_INSCRIPTION_JS_POSTAL","Veuillez indiquer votre code postal !");
define("PRONO_INSCRIPTION_JS_VILLE","Veuillez indiquer votre ville !");
define("PRONO_INSCRIPTION_JS_PAYS","Veuillez indiquer votre pays !");
define("PRONO_INSCRIPTION_JS_NAISS_JOUR","Veuillez indiquer votre jour de naissance !");
define("PRONO_INSCRIPTION_JS_NAISS_MOIS","Veuillez indiquer votre mois de naissance !");
define("PRONO_INSCRIPTION_JS_NAISS_ANNEE","Veuillez indiquer votre ann&eacute;e de naissance !");
define("PRONO_INSCRIPTION_JS_PROF","Veuillez indiquer votre profession !");
define("PRONO_INSCRIPTION_JS_TEL","Veuillez indiquer votre numeros de mobile !");
define("PRONO_INSCRIPTION_SUCCES","Inscription r&eacute;alis&eacute;e avec succès ! Un email vous a &eacute;t&eacute; adress&eacute; pour vous communiquez votre mot de passe !");
define("PRONO_INSCRIPTION_CONNEXION","Connexion");
define("PRONO_INSCRIPTION_ECHOUE","L'envoie de l'e-mail a &eacute;chou&eacute; !");

// Profil
define("PRONO_PROFIL_SUR","Etes vous sûr de vouloir suprimer le compte de");
define("PRONO_PROFIL_SUPP","Compte supprim&eacute; !");
define("PRONO_PROFIL_ANCIEN_MDP","Ancien mot de passe non renseign&eacute;");
define("PRONO_PROFIL_MDP_2_FOIS","Vous devez entrer le nouveau mot de passe 2 fois");
define("PRONO_PROFIL_MDP_2_FOIS_2","Vous devez entrer l'ancien mot de passe 2 fois");
define("PRONO_PROFIL_MDP_DIFF","Nouveaux mots de passe diff&eacute;rents");
define("PRONO_PROFIL_MDP_ERREUR","Ancien mot de passe erron&eacute;");
define("PRONO_PROFIL_SUPP_2","Supprimer mon compte");
define("PRONO_PROFIL_TITRE","Compte de");
define("PRONO_PROFIL_ANCIEN_MDP_2","Ancien mot de passe (&agrave; compl&eacute;ter si vous changer de mot de passe)");
define("PRONO_PROFIL_NOUVEAU_MDP","Nouveau mot de passe");
define("PRONO_PROFIL_NOUVEAU_MDP_2","Resaisissez votre nouveau mot de passe");
define("PRONO_PROFIL_MAIL","E-mail"); // 0.82

// prono.inc
define("PRONO_INC_INSCRIPTION","INSCRIPTION");
define("PRONO_INC_HEBDO","Classement hebdo");
define("PRONO_INC_MOIS","Classement du mois");
define("PRONO_INC_GENERAL","Classement g&eacute;n&eacute;ral");

// DECONNEXION
define("DECONNEXION","D&eacute;connexion en cours...");

//R&eacute;sultats
define("PRONO_RESULTATS_MOY","Moyenne");
define("PRONO_RESULTATS_REUSSITE","R&eacute;ussite");
define("PRONO_RESULTATS_PROGR","Progression");
define("PRONO_RESULTATS_POINTS","Points");

// Bareme
define("PRONO_BAREME_TITRE","Bar&egrave;mes");
define("PRONO_BAREME_TPS","Vous pouvez valid&eacute; la grille jusqu'&agrave;");
define("PRONO_BAREME_TPS2","heure(s) avant le d&eacute;but du match");

// Fiches joueurs   //0.82
define("FICHE_AGE","Age");
define("FICHE_DATE","N&eacute; le");
define("FICHE_DETAIL","D&eacute;tail des buts");
define("FICHE_BUTS","but(s)");

// Cr&eacute;dits
define("CREDITS_VERSION","Version");
define("CREDITS_AUTEUR","Auteur");
define("CREDITS_SITE","Site");
define("CREDITS_FORUM","Une question ?");
define("CREDITS_TRADUC","Traduction anglaise : Curtis LEMAY");


?>
