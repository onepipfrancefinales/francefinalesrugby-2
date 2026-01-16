<?php

// ADMINISTRATION

// Setup

define("SETUP_HOST_NAME","Host name");
define("SETUP_DATABASE","Database Name");
define("SETUP_LOGIN","Login");
define("SETUP_PASSWORD","Password");
define("SETUP_TYPE","Installation Type");
define("SETUP_NORMALE","New Install");
define("SETUP_MAJ","Update from version v0.81");
define("SETUP_TITRE_SITE","Site Name (Optional for updating from v0.81)"); // 0.82
define("SETUP_URL_SITE","Site URL"); // 0.82
define("SETUP_PSEUDO","Login (For projections page and overall administration. Optional if updating from v0.81)"); // 0.82
define("SETUP_MDP","Password (For projections page and overall administration. Optional if updating from v0.81)"); // 0.82
define("SETUP_MAIL","Email (Optional if updating from v0.81)"); // 0.82
define("SETUP_ERREUR","Unable to carry out all requests");
define("SETUP_ERREUR_2","Error encountered when connecting to database");
define("SETUP_ID_INCORRECTS","Your login is incorrect !");
define("SETUP_TABLE","Table of");
define("SETUP_TABLE_2","has been created successfully");
define("SETUP_TABLE_3","to create table of");
define("SETUP_TABLE_4","to create the administrator's account for projections and administration");
define("SETUP_TABLE_5","The account of the administrator has been created successfully");
define("SETUP_CONFIRMATION","The scripts have been installed successfully !");
define("SETUP_FIN","For security reasons, it is <b>highly recommended</b> you delete the file : install.php !
                    Then go to the <a href=\"admin\">administration</a> to start using PhpLeague !");
define("SETUP_REMPLIR_CHAMP","Thank you for entering all data !");
define("SETUP_REPERTOIRE_SCRIPT","Script Root");    // 0.82
define("SETUP_MAJ_ACHEVEE","Update Complete");    // 0.82
define("SETUP_MAJ_INCOH","Inconsistency");    // 0.82
define("SETUP_MAJ_INCOH_2","marked in the folder of");    // 0.82


//Menu
define("MENU_FICHES_CLUBS","Clubs' slips");
define("MENU_ID","Id");
define("MENU_NOM","Name");
define("MENU_CREDITS","Staff");
define("MENU_MEMBRES","Members");

// Championnats
define("LEAGUE","Championships");
define("DATE","Dates");
define("TEAM","Teams");
define("MATCH","Matches");
define("PARAMETRE","Settings");
define("GENERER","Generate"); //0.82
define("JOUEURS","Players"); // 0.82
define("BUTEUR","Strikers");
define("RESULT","Results");
define("EQUIPE","Teams");
define("ADMIN_CHAMP_CREER","Create a championship");

// Groupes championnats
define("EDITER","Edit");
define("GR_LEAGUE","Group of championships");
define("ADMIN_GR_CHAMP_CREER","Create a group of championships");
define("ADMIN_GR_CHAMP_GENERER","Generate");



// Création d'un groupe de championnat
define("ADMIN_GR_CHAMPIONNATS_CREA","Creation of a group of championships");
define("ADMIN_GR_CHAMP_CREER_1","Group Name");

//Suppression d'un groupe de championnats
define("ADMIN_GR_CHAMPIONNATS_SUPP","Remove a group of championships");
define("ADMIN_GR_CHAMPIONNATS_SUPP1","Are you sure you want to delete this group of championships");
define("ADMIN_GR_CHAMPIONNATS_SUPP2"," ?");

//Edition d'un groupe de championnats
define("ADMIN_GR_CHAMP_EDIT","Edit a group of championships");
define("ADMIN_GR_CHAMP_EDIT_1","Select the championships you want to be assigned");
define("ADMIN_GR_CHAMP_EDIT_2","Selection");
define("ADMIN_GR_CHAMP_EDIT_3","Championships to remove from group");
define("ADMIN_GR_CHAMP_EDIT_4","Update");
define("ADMIN_GR_CHAMP_EDIT_5","Current List");



//Suppression de championnat
define("ADMIN_CHAMPIONNATS_SUPP","Deletion of a championship");
define("ADMIN_CHAMPIONNATS_SUPP1","Are you sure you want to delete this championship");
define("ADMIN_CHAMPIONNATS_SUPP2","and all past championships and matches played in it ?");

// Création de championnat
define("ADMIN_CHAMPIONNATS_CREA","Creation of a championship");
define("ADMIN_CHAMPIONNATS_CREA2","Choose");
define("ADMIN_JOURNEES_MSG3","Season");
define("ADMIN_CHAMP_CREER_2","League");
define("ADMIN_CHAMP_CREER_3","Create");
define("ADMIN_CHAMP_CREER_4","Season (1st year)");

// Equipes
define("ADMIN_CLUB_NOM","Club name :");
define("ADMIN_CLUBS_CREE","Creation of the clubs");
define("ADMIN_EQUIPE_TITRE","Edit teams of");
define("ADMIN_EQUIPE_1","Clubs to delete :");
define("ADMIN_EQUIPE_2","Clubs to add in");
define("ADMIN_EQUIPE_3","(Multiple choice possible with SHIFT and CTRL)");
define("ADMIN_EQUIPE_4","Clubs to delete");

// Dates
define("ADMIN_DATES_TITRE","Dates of match days");
define("ADMIN_JOURNEES_MSG9","Day #°");
define("ADMIN_JOURNEES_MSG10","in the form <b>DDMMYYYY<b>");
define("ADMIN_DATES_1","Default match time");
define("ADMIN_DATES_2","Warning, by carrying out this operation you impose the same hour on all the matches for the season. If you want to change the dates or hours of some matches or days, do not continue");
define("ADMIN_DATES_HEURES","h");
define("ADMIN_DATES_MINUTES","min");
define("ENVOI","Sending");
define("ADMIN_DATES_3","Your championship has an odd number of teams. Create a team named 'bye' to bring a balance to the schedule.");
define("ADMIN_DATES_4","None");
define("ADMIN_DATES_5","You must first create the teams that will participate in this championship. Go in");


// Matchs
define("JOURNEE_MIROIR","Mirror Day ? :");
define("ADMIN_MATCHS_TITRE","Matches of");
define("ADMIN_COHERENCE_TITRE","Check balance of the calendar");
define("ADMIN_COHERENCE_MSG2","Day");
define("ADMIN_COHERENCE_MSG3"," is balanced?");
define("ADMIN_COHERENCE_MSG4","<b>unbalanced or incomplete</b>");
define("ADMIN_COHERENCE_MSG5","This championship is balanced");
define("ADMIN_COHERENCE_MSG6","This championship is unbalanced");
define("ADMIN_COHERENCE_MSG7","Do a check of balance");
define("DOMICILE","Home");
define("EXTERIEUR","Away");
define("ADMIN_MATCHS_1","The schedule has not yet been created. Create the schedule before beginning the championship");

// Paramètres
define("ADMIN_PARAM_MSG2","Points for a victory ?");
define("ADMIN_PARAM_MSG3","Points for a draw ?");
define("ADMIN_PARAM_MSG4","Points for a loss ?");
define("ADMIN_PARAM_MSG5","Number of teams receiving direct entry into the playoffs ?");
define("ADMIN_PARAM_MSG6","Number of teams receiving a chance to make the playoffs ?");
define("ADMIN_PARAM_MSG7","Number of teams not receiving a chance at making the playoffs ?");
define("ADMIN_PARAM_MSG8","Your favourite team?");
define("ADMIN_PARAM_TITRE","Parameters of");
define("ADMIN_TAPVERT_TITRE","Points of fine of");
define("ADMIN_PARAM_MSG9","Points for a correct prediction");
define("ADMIN_PARAM_MSG10","Points for participating in a prediction");
define("ADMIN_PARAM_MSG11","Nickname of the predictor of reference");
define("ADMIN_PARAM_MSG12","How many hours between the validation of the form and the end of the match");
define("ADMIN_PARAM_MSG13","Predictions of");
define("ADMIN_TAPVERT_MSG1","Here, you can manage the penalty points (administrative penalties, fixed prices, etc...)");
define("ADMIN_TAPVERT_MSG3","Enter the amount of points to fine (Ex: -1, -2 ...) ");
define("ADMIN_TAPVERT_MSG4","Activate the clubs' slips ?");
define("ADMIN_TAPVERT_MSG5","Activate predictions ?");
define("ADMIN_TAPVERT_MSG6","Activate the predictions on the standings page ?(Warning: this may slow down the speed with which the page loads)"); // 0.82


// Résultats
define("ADMIN_RESULTS_TITRE","Results of");
define("ADMIN_RESULTS_1","Bye");

// Buteurs
//define("ADMIN_JOUEURS_TITRE","Player cards");
define("ADMIN_BUTEUR_TITRE","Strikers of");

//Graphiques
define("ADMIN_GRAPH_TITRE","Creation of graphs and predictions of");
define("ADMIN_GRAPH","Graph creation was successfully done in");
define("ADMIN_GRAPH_PRONO","Members classification was successfully done"); //0.82
define("ADMIN_GRAPH_1","Graph creation was a failure, try again !");
define("ADMIN_GRAPH_2","This operation is carried out after each addition of results. It may take a while...");
define("ADMIN_GRAPH_3","Progression of the group of");
define("ADMIN_GRAPH_4","Error encountered while creating the graphs, try again !<br>
                      If the problem remains, modify the max_execution_time in C:\windows\php.ini");
define("ADMIN_GRAPH_5","seconds");
define("ADMIN_GRAPH_6","in");

// Mini-classement
define("ADMIN_MINI_1","Mini-Group");
define("ADMIN_MINI_2","Choose the presentation");
define("ADMIN_MINI_3","Choose the type of group");
define("ADMIN_MINI_4","Choose the championship");
define("ADMIN_MINI_5","Number of teams above the favourite team");
define("ADMIN_MINI_6","Edit code");
define("ADMIN_MINI_7","Comment");
define("ADMIN_MINI_8","Championship isn't updated !");
define("ADMIN_MINI_9","Type of group isn't updated !");
define("ADMIN_MINI_10","Showing isn't updated !");
define("ADMIN_MINI_11","Invalid code !");
define("ADMIN_MINI_12","Show");
define("ADMIN_MINI_13","Insert this code : ");
define("ADMIN_MINI_14","Number of teams under the favourite team");
define("ADMIN_MINI_15","Do you want to allow links to the teams ?");
define("ADMIN_MINI_17","Don't show the entire group");
define("ADMIN_MINI_18","Show the entire group");
define("ADMIN_MINI_19","Number of teams above isn't updated !");
define("ADMIN_MINI_20","Number of teams under isn't updated !");
define("ADMIN_MINI_21","The code is valid ! <br> If there are problems inserting the group on a page, use iframes...");
define("ADMIN_MINI_22","Colour");
define("ADMIN_MINI_23","Lines");
define("ADMIN_MINI_24","Editor");

// FICHIER admin/classe.php
define("ADMIN_CLASSE_TITRE","Editing of classes");
define("ADMIN_CLASSE_SUPP1","Deletion of the class :");
define("ADMIN_CLASSE_BUTTON_SUPP","Delete class");
define("ADMIN_CLASSE_CREA","<b>Add</b> one class");
define("ADMIN_CLASSE_NOM","Class name : ");
define("ADMIN_CLASSE_BUTTON_CREA","Creation of one class");
define("ADMIN_CLASSE_BUTTON_MSG3","To <b>modify</b> a class' name, use PHPMyAdmin");
define("ADMIN_CLASSE_1","Ordering of classes : 1 : 1st, 2 : 2nd...");
define("ADMIN_CLASSE_2","<b>Parameters recorded !</b>");
define("ADMIN_CLASSE_3","You cannot delete this class because it is currently in use by ");
define("ADMIN_CLASSE_4"," information(s). Delete the content information(s) and then delete the class.");
define("ADMIN_CLASSE_5","Information");
define("ADMIN_CLASSE_CLASSE","Classes");  // 0.82
define("ADMIN_CLASSE_RENS","Information");  // 0.82
define("ADMIN_CLASSE_GEST","Club Administration");  // 0.82



// FICHIER admin/gestequipes.php
define("ADMIN_GESTEQUIPE_TITRE","Club Consultation"); // 0.82
define("ADMIN_GESTEQUIPE_2","Choose a club : ");  // 0.82
define("ADMIN_EQUIPE_17","Edit club information");
define("ADMIN_GESTEQUIPE_1","Adjust the parameters of : "); // 0.82
define("ADMIN_GESTEQUIPE_3","Information name"); // 0.82
define("ADMIN_GESTEQUIPE_4","Information value"); // 0.82
define("ADMIN_EQUIPE_5","URL");
define("ADMIN_EQUIPE_6","View (=1)<br />or not (=0)");
define("ADMIN_EQUIPE_7","Logo URL : ");
define("ADMIN_EQUIPE_8", "Not updated");


// FICHIER admin/rens.php
define("ADMIN_RENS_TITRE","Edit Information");
define("ADMIN_RENS_SUPP1","<b>Remove</b> the information ");
define("ADMIN_RENS_BUTTON_SUPP","Delete information");
define("ADMIN_RENS_CREA","<b>Add</b> some information");
define("ADMIN_RENS_NOM","Information name : ");
define("ADMIN_RENS_BUTTON_CREA","Information creation");
define("ADMIN_RENS_CREA2","<b>Creation performed</b>");
define("ADMIN_RENS_SUPP2","<b>Deletion performed</b>");
define("ADMIN_RENS_1"," in the class : ");
define("ADMIN_RENS_2","This information cannot be removed because it is currently in use ");
define("ADMIN_RENS_3"," time in the information.");
define("ADMIN_RENS_4","<b>Insert</b> the information into the classes :");
define("ADMIN_RENS_5","<b>Remove</b> the parameters of information (Multiple choice possible with SHIFT or CTRL keys) : ");
define("ADMIN_RENS_6"," in ");
define("ADMIN_RENS_7","To add");
define("ADMIN_RENS_8","To remove");
define("ADMIN_RENS_9","To order the information : 1 for the 1st, 2 for the 2nd...");
define("ADMIN_RENS_10","<b>Publish</b> the information");
define("ADMIN_RENS_11","To record");
define("ADMIN_RENS_12","Information name");
define("ADMIN_RENS_13","Information URL (optional)");
define("ADMIN_RENS_14","Information to be classified :");
define("ADMIN_RENS_15","All the information is classified");
define("ADMIN_RENS_16","Are you sure you want to remove the information");
define("ADMIN_RENS_17","Yes");
define("ADMIN_RENS_18","No");

/* ZONE PUBLIQUE : CONSULTATION */


// Entete et index
define("CONSULT_HOME","Home");
define("CONSULT_CALENDAR","Calendar");
define("CONSULT_CLASSEMENT","Classifications ");
define("CONSULT_BUTEUR","Strikers");
define("CONSULT_DUEL","Duels");
define("MENU_UTILISATEUR","User menu ");
define("CONSULT_PRONOSTICS","Predictions");      // 0.82




//classement
define("CONSULT_CLMNT_MSG1","Type of standings :");
define("ADMIN_TAPVERT_MSG2","Which championship :");
define("GENERAL","General");
define("ATTAQUE","Attacks");
define("DEFENSE","Defense");
define("GOALDIFF","+/-");
define("CONSULT_CLMNT_MSG2"," from day ");
define("CONSULT_CLMNT_MSG3"," to day ");
define("CONSULT_CLMNT_MSG4","General standings, days ");
define("CONSULT_CLMNT_MSG5"," to ");
define("CONSULT_CLMNT_MSG6","Last results : day #");
define("CONSULT_CLMNT_MSG61","Previous day (#");
define("CONSULT_CLMNT_MSG62","Next day (#");
define("CONSULT_CLMNT_MSG7","NEXT DAY's SCORE PREDICTIONS :");
define("CONSULT_CLMNT_MSG8","PROBABILITY calculated of<br>the Next day: #");
define("CONSULT_CLMNT_MSG9","Next day : # ");
define("CONSULT_CLMNT_MSG10","Home ranks, days ");
define("CONSULT_CLMNT_MSG11","Attacks ranks, days ");
define("CONSULT_CLMNT_MSG12","Defenses ranks, days ");
define("CONSULT_CLMNT_MSG13","Goal Average ranks, days ");
define("CONSULT_CLMNT_MSG14","Away ranks, days ");
define("CLMNT_POSITION","Pos.");
define("CLMNT_EQUIPE","Team");
define("CLMNT_POINTS","Pts");
define("CLMNT_JOUES"," Pld ");
define("CLMNT_VICTOIRES","HW ");
define("CLMNT_NULS","HD ");
define("CLMNT_DEFAITES","HL ");
define("CLMNT_BUTSPOUR","AF ");
define("CLMNT_BUTSCONTRE","AA ");
define("CLMNT_DIFF","GD ");
define("EXEMPT","Bye");
define("LEAGUE_LANGUAGE","english");

// Matchs
define("CONSULT_MATCHS","Calendar consultation ");
define("CONSULT_MATCHS_MSG1","Which championship would you like to consult ?");
define("CONSULT_MATCHS_MSG2"," the ");

// FICHIER consult/equipes.php
define("CONSULT_INDEX_1","Team consultation");//0.82
define("CONSULT_INDEX_2","Foundation");//0.82

// Detail equipe
define("VICTOIRE","WIN ");
define("NUL"," DRAW ");
define("DEFAITE"," LOSS");
define("JOURNEE","#");
define("DETAILEQ_TITRE","Team choice");
define("DETAILEQ_1","Team :");

// divers
define("RETOUR","Back");

// calendrier_1.php
define("CONSULT_CALENDAR_1","This day does not exist");
define("CONSULT_CALENDAR_2","previous day");
define("CONSULT_CALENDAR_3","next day");
define("CONSULT_CALENDAR_4","Matches preceding day #");
define("CONSULT_CALENDAR_5","Latest results : day #");


// FICHIER admin/clubs.php
define("ADMIN_CLUB_TITRE","Club edition");
define("ADMIN_CLUB_SUPP1","<b>Deletion</b> of a club ");
define("ADMIN_CLUB_BUTTON_SUPP","Club deletion");
define("ADMIN_CLUB_CREA","<b>Addition</b> of a club");
define("ADMIN_CLUB_BUTTON_CREA","Club Creation");
define("ADMIN_CLUB_BUTTON_MSG3","To <b>modify</b> the name of a club, use PHPMyAdmin");
define("ADMIN_CLUB_CREA2","<b>Creation performed</b>");
define("ADMIN_CLUB_SUPP2","<b>Deletion performed</b>");




// *********************************************
// ***** NEW ITEMS ADDED DECEMBER 22th 2001 ****
// *********************************************


// consult/buteurs
define("CONSULT_BUTEUR_MSG1","Which group of championship ?");
define("CONSULT_BUTEUR_MSG2","Classification of the strikers");
define("CONSULT_BUTEUR_TITRE_1","Striker standings");    // 0.82
define("CONSULT_BUTEUR_MSG3","Group of championship : ");
define("CONSULT_BUTEUR_MSG4","including : ");
define("CONSULT_BUTEUR_MSG5","Which team ?");
define("DUEL_MSG1","Choose your opponent : ");
define("DUEL_MSG2"," Duels");
define("DUEL_MSG3","Here are the probabilities");
define("DUEL_MSG4","PROBABILITIES : ");
define("DUEL_MSG5","The probabilities are the result of a simple mathematic calculation");

// consult/club
define("CONSULT_CLUB_1","Standings");
define("CONSULT_CLUB_2","Calendar and results");
define("CONSULT_CLUB_3","Historical");
define("CONSULT_CLUB_4","Statistical");

// Security
define("ADMIN_SECURITE_CLUB","Are you sure you want to delete the following clubs :");
define("ADMIN_SECURITE_RENS","Are you sure you want to delete the following informations :");
define("ADMIN_SECURITE_SAISONS","Are you sure you want to delete the following season :");
define("ADMIN_SECURITE_SAISONS_2","and all the championships and the matches concerned");
define("ADMIN_SECURITE_CLASSE","Are you sure you want to delete the following classe :");
define("ADMIN_SECURITE_CHAMP","Are you sure you want to delete the following championship :");

// 25/12/2003

//define("ADMIN_BUTEUR_TITRE","Players of ");
define("ADMIN_BUTEUR_TITRE2","Strikers of ");

// Joueurs et buteurs
define("ADMIN_BUTEURS_TITRE","Edition of the strikers");
define("ADMIN_BUTEURS_MSG1","which championship do you want to seize?");
define("ADMIN_BUTEURS_MSG2","What day do you want to seize?"); 
define("ADMIN_BUTEURS_LAST","Previous");
define("ADMIN_BUTEURS_NEXT","Next");
define("ADMIN_BUTEURS_MSG3","Validation_and_following_striker "); // laisser des _ à la place des espaces
define("ADMIN_JOUEURS_TITRE","Edition of the players");
define("ADMIN_JOUEURS_MSG1","<b>Deletion</b> of a player  ");
define("ADMIN_JOUEURS_MSG2","delete_player");
define("ADMIN_JOUEURS_MSG3","<b>Add</b> a player");
define("ADMIN_JOUEURS_MSG4","First name:   ");
define("ADMIN_JOUEURS_MSG5","Last name:  ");
define("ADMIN_JOUEURS_MSG6","Club :  ");
define("ADMIN_JOUEURS_MSG7","URL Photo : ");
define("ADMIN_JOUEURS_MSG8","Date of birth: (DDMMYYYY)  ");
define("ADMIN_JOUEURS_MSG9","Position Ground:   ");
define("ADMIN_JOUEURS_MSG10","To <b>modify</b>, use PHPMyAdmin");
define("ADMIN_JOUEURS_1","<b>Enter</b> the stickers. Click to <b>delete</b> him");
define("ADMIN_JOUEURS_2","Sticks");
define("ADMIN_JOUEURS_3","Team : ");
define("ADMIN_JOUEURS_TRANSFERT","To transfer"); // 0.82
define("ADMIN_JOUEURS_TRANSFERT_VERS","to transfer towards"); // 0.82
define("ADMIN_JOUEURS_EDITER","Choose the player to be published :"); // 0.82
define("ADMIN_JOUEURS_EDITER_2","Edition of the player :"); // 0.82


// Pronostics   // 0.82

// Menu identifié
define("PRONO_MENU_MON_COMPTE","MY ACCOUNT");
define("PRONO_MENU_MES_CLASSEMENTS","MY STANDINGS");
define("PRONO_MENU_MES_PRONOS","MY PREDICTIONS");
define("PRONO_MENU_LES_CHAMPIONNATS","CHAMPIONSHIPS");
define("PRONO_MENU_BIENVENUE","Welcome");
define("PRONO_MENU_POINTS","POINTS");
define("PRONO_MENU_MON_PROFIL","MY PROFILE");
define("PRONO_MENU_DECONNEXION","LOG OUT");
define("PRONO_MENU_GENERAL","GENERAL");
define("PRONO_MENU_MOIS","MONTH");
define("PRONO_MENU_PROCHAINE_GRILLE","NEXT GRID");
define("PRONO_MENU_DERNIERE_GRILLE","PREVIOUS GRID");
define("PRONO_MENU_MES_RESULTATS","MY RESULTS");
define("PRONO_MENU_BAREME","ODDS");
define("PRONO_MENU_AIDE","HELP");  // 0.82

// Menu non identifié
define("PRONO_MENU_LOGIN","LOGIN");
define("PRONO_MENU_MDP","PASSWORD");
define("PRONO_MENU_OUBLIE","FORGOT YOUR PASSWORD ?");

// Mot de passe oublié
define("PRONO_OUBLIE_PERDU","Password lost");
define("PRONO_OUBLIE_TEXTE_1","Enter your email address. A new password will then be sent to you.");
define("PRONO_OUBLIE_TEXTE_2","Your new password was sent to the provided address");
define("PRONO_OUBLIE_TEXTE_3","The password was not sent to you !<br />Please try again in a few minutes.");


//accueil
define("PRONO_ACCUEIL_PRESENTATION","Presents you with these predictions for the next grid");

// GRILLE
define("PRONO_GRILLE_PRONO","Prediction");
define("PRONO_GRILLE_TEMPS","Time remaining");
define("PRONO_GRILLE_PRECEDENT","PREVIOUS MATCHES");
define("PRONO_GRILLE_SUIVANT","LATER MATCHES");
define("PRONO_GRILLE_SCORE","Real score");
define("PRONO_GRILLE_EXPIRE","Expired");

// Valider grille
define("PRONO_GRILLE_CONFIRME","Your predictions have been recorded !");
define("PRONO_GRILLE_PROCHAINE","Next grid");


// Classements
define("PRONO_CLASSEMENT_GENERAL","Overall Standings");
define("PRONO_CLASSEMENT_PSEUDO","Username");
define("PRONO_CLASSEMENT_POINTS","Points");
define("PRONO_CLASSEMENT_PARTICIPATIONS","Matches");
define("PRONO_CLASSEMENT_GENERAL_MAJ","OVERALL STANDINGS");
define("PRONO_CLASSEMENT_MOIS","MONTHLY STANDINGS");
define("PRONO_CLASSEMENT_30","LAST 30 DAYS' STANDINGS");
define("PRONO_CLASSEMENT_HEBDO","WEEKLY STANDINGS");
define("PRONO_CLASSEMENT_COMPLET","Show All");
define("PRONO_CLASSEMENT_SUITE","Continued...");
define("PRONO_CLASSEMENT_NON_CLASSE","Not classified");
define("PRONO_CLASSEMENT_PREMIER","st");   // Pour 1er    1st
define("PRONO_CLASSEMENT_SECOND","nd");   // Pour 2nd     2nd
define("PRONO_CLASSEMENT_TROIS","rd");   // Pour 3e       3rd
define("PRONO_CLASSEMENT_AUTRES","th");   // Pour xe       xth

// Inscription
define("PRONO_INSCRIPTION_TITRE","Registration");
define("PRONO_INSCRIPTION_MDP","Retry your password");
define("PRONO_INSCRIPTION_PSEUDO_UTILISE","This username is already in use !");
define("PRONO_INSCRIPTION_PSEUDO_TAILLE","Your username must contain between 4 and 20 characters !");
define("PRONO_INSCRIPTION_MAIL_UTILISE","This email address has already been used !");
define("PRONO_INSCRIPTION_MAIL_VIDE","The email address field cannot be left blank !");
define("PRONO_INSCRIPTION_MAIL_INVALIDE_1","Email address");
define("PRONO_INSCRIPTION_MAIL_INVALIDE_2","is not valid");
define("PRONO_INSCRIPTION_JS_PSEUDO","Please indicate your username !");
define("PRONO_INSCRIPTION_JS_MAIL","Please indicate your email address !");
define("PRONO_INSCRIPTION_JS_MAILVALID","Enter a valid email address !");
define("PRONO_INSCRIPTION_JS_MDP","Please indicate your password twice !");
define("PRONO_INSCRIPTION_JS_DIFF","ATTENTION, your passwords are different !");
define("PRONO_INSCRIPTION_JS_NOM","Please indicate your name !");
define("PRONO_INSCRIPTION_JS_PRENOM","Please indicate your first name !");
define("PRONO_INSCRIPTION_JS_ADRESSE","Please indicate your address !");
define("PRONO_INSCRIPTION_JS_POSTAL","Please indicate your postal code !");
define("PRONO_INSCRIPTION_JS_VILLE","Please indicate your city !");
define("PRONO_INSCRIPTION_JS_PAYS","Please indicate your country !");
define("PRONO_INSCRIPTION_JS_NAISS_JOUR","Please indicate your date of birth !");
define("PRONO_INSCRIPTION_JS_NAISS_MOIS","Please indicate your month of birth !");
define("PRONO_INSCRIPTION_JS_NAISS_ANNEE","Please indicate your year of birth !");
define("PRONO_INSCRIPTION_JS_PROF","Please indicate your profession !");
define("PRONO_INSCRIPTION_JS_TEL","Please indicate your number of cellphone !");
define("PRONO_INSCRIPTION_SUCCES","The registration was a success ! A mail has been sent !");
define("PRONO_INSCRIPTION_CONNEXION","Log in");
define("PRONO_INSCRIPTION_ECHOUE","The sent of the mail was a failure !");

// Profil
define("PRONO_PROFIL_SUR","Are you sure you want to delete the account of");
define("PRONO_PROFIL_SUPP","Account removed !");
define("PRONO_PROFIL_ANCIEN_MDP","Old Password");
define("PRONO_PROFIL_MDP_2_FOIS","You must enter the new password two times");
define("PRONO_PROFIL_MDP_2_FOIS_2","You must enter the old password two times");
define("PRONO_PROFIL_MDP_DIFF","New password must be different");
define("PRONO_PROFIL_MDP_ERREUR","Old erroneous password");
define("PRONO_PROFIL_SUPP_2","To delete my account");
define("PRONO_PROFIL_TITRE","Account of");
define("PRONO_PROFIL_ANCIEN_MDP_2","Old password (to be replaced if you change your password)");
define("PRONO_PROFIL_NOUVEAU_MDP","New password");
define("PRONO_PROFIL_NOUVEAU_MDP_2","Repeat your new password");
define("PRONO_PROFIL_MAIL","E-mail"); // 0.82

// prono.inc
define("PRONO_INC_INSCRIPTION","REGISTER");
define("PRONO_INC_HEBDO","WEEKLY STANDINGS");
define("PRONO_INC_MOIS","MONTHLY STANDINGS");
define("PRONO_INC_GENERAL","OVERALL STANDINGS");

// DECONNEXION
define("DECONNEXION","Logging out...");

//Results
define("PRONO_RESULTATS_MOY","Average");
define("PRONO_RESULTATS_REUSSITE","Success");
define("PRONO_RESULTATS_PROGR","Progression");
define("PRONO_RESULTATS_POINTS","Points");

// Odds
define("PRONO_BAREME_TITRE","Odds");
define("PRONO_BAREME_TPS","You can validate the grid up to");
define("PRONO_BAREME_TPS2","hour(s) before the beginning of the match");

// Player Cards   //0.82
define("FICHE_AGE","Age");
define("FICHE_DATE","Born on");
define("FICHE_DETAIL","Goal details");
define("FICHE_BUTS","goal(s)");

// Crédits
define("CREDITS_VERSION","Version");
define("CREDITS_AUTEUR","Author");
define("CREDITS_SITE","Website");
define("CREDITS_FORUM","A question ?");
define("CREDITS_TRADUC","English translation : Curtis LEMAY");

?>
