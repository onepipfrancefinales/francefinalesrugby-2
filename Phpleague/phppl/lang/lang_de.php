<?

// ADMINISTRATION

// Setup

define("SETUP_HOST_NAME","Hostname");
define("SETUP_DATABASE","Name der Datenbank");
define("SETUP_LOGIN","Login");
define("SETUP_PASSWORD","Password");
define("SETUP_TYPE","Art der Installation");
define("SETUP_NORMALE","Erste Installation");
define("SETUP_MAJ","Update von Version 0.71");
define("SETUP_TITRE_SITE","Site Name (Optional for updating from v0.81)"); // 0.82
define("SETUP_URL_SITE","Site URL"); // 0.82
define("SETUP_PSEUDO","Login (For projections page and overall administration. Optional if updating from v0.81)"); // 0.82
define("SETUP_MDP","Password (For projections page and overall administration. Optional if updating from v0.81)"); // 0.82
define("SETUP_MAIL","Email (Optional if updating from v0.81)"); // 0.82
define("SETUP_ERREUR","Folgende Anfrage war unmoeglich");
define("SETUP_ERREUR_2","Nachricht gesendet von der Datenbank");
define("SETUP_ID_INCORRECTS","Deine Login-Daten sind falsch !");
define("SETUP_TABLE","Tabelle der");
define("SETUP_TABLE_2","wurde erfolgreich angelegt");
define("SETUP_TABLE_3","welches eine Tabelle von");
define("SETUP_TABLE_4","um den Administratoraccount fuer die Administration und die Prognosen anzulegen");
define("SETUP_TABLE_5","Der Administratoraccount wurde erfolgreich angelegt");
define("SETUP_CONFIRMATION","Das Script wurde erfolgreich installiert !");
define("SETUP_FIN","Aus Sicherheitsgruenden bitte folgendes File loeschen : install.php3 !
                      Dann klick auf <a href=\"admin\">Administration</a> um zu LIGAadmin zu gelangen!");
define("SETUP_REMPLIR_CHAMP","Danke fuer die Angaben !");
define("SETUP_REPERTOIRE_SCRIPT","Script Root");    // 0.82
define("SETUP_MAJ_ACHEVEE","Update Complete");    // 0.82
define("SETUP_MAJ_INCOH","Inconsistency");    // 0.82
define("SETUP_MAJ_INCOH_2","marked in the folder of");    // 0.82


//Menu
define("MENU_FICHES_CLUBS","Vereinsseiten");
define("MENU_ID","Id");
define("MENU_NOM","Name");
define("MENU_CREDITS","appropriations");
define("MENU_MEMBRES","Spieler");

// Championnats
define("LEAGUE","Liga");
define("DATE","Daten");
define("TEAM","Verein");
define("MATCH","Spiele");
define("PARAMETRE","Parameter");
define("GENERER","Generate"); //0.82
define("JOUEURS","Players"); // 0.82
define("BUTEUR","Torschuetzen");
define("RESULT","Ergebnisse");
define("EQUIPE","Vereine");
define("ADMIN_CHAMP_CREER","Generiere eine Liga");

// Groupes championnats
define("EDITER","Editieren");
define("GR_LEAGUE","Liga Gruppen");
define("ADMIN_GR_CHAMP_CREER","Eine Liga Gruppe anlegen");
define("ADMIN_GR_CHAMP_GENERER","Generieren");



// Création d'un groupe de championnat
define("ADMIN_GR_CHAMPIONNATS_CREA","Anlegen einer Liga-Gruppe");
define("ADMIN_GR_CHAMP_CREER_1","Name der Gruppe");

//Suppression d'un groupe de championnats
define("ADMIN_GR_CHAMPIONNATS_SUPP","Loeschen einer Liga-Gruppe");
define("ADMIN_GR_CHAMPIONNATS_SUPP1","Bist du sicher, dass du eine Liga-Gruppe loeschen willst");
define("ADMIN_GR_CHAMPIONNATS_SUPP2"," ?");

//Edition d'un groupe de championnats
define("ADMIN_GR_CHAMP_EDIT","Bearbeiten einer Liga-Gruppe");
define("ADMIN_GR_CHAMP_EDIT_1","Waehle Ligen, die gruppiert werden sollen");
define("ADMIN_GR_CHAMP_EDIT_2","Anwahl");
define("ADMIN_GR_CHAMP_EDIT_3","Ligen, die entfernt werden sollen");
define("ADMIN_GR_CHAMP_EDIT_4","Update");
define("ADMIN_GR_CHAMP_EDIT_5","Akutelle Liste");



//Suppression de championnat
define("ADMIN_CHAMPIONNATS_SUPP","Loeschen einer Liga");
define("ADMIN_CHAMPIONNATS_SUPP1","Bist du sicher, dass du diese Liga loeschen willst");
define("ADMIN_CHAMPIONNATS_SUPP2","und alle damit zusammengehoerenden Spiele ?");

// Création de championnat
define("ADMIN_CHAMPIONNATS_CREA","Anlegen einer Liga");
define("ADMIN_CHAMPIONNATS_CREA2","Waehle");
define("ADMIN_JOURNEES_MSG3","Saison");
define("ADMIN_CHAMP_CREER_2","Liga");
define("ADMIN_CHAMP_CREER_3","Anlegen");
define("ADMIN_CHAMP_CREER_4","Saison (1. Jahr)");

// Equipes
define("ADMIN_CLUB_NOM","Name des Clubs : ");
define("ADMIN_CLUBS_CREE","Anlegen von Clubs");
define("ADMIN_EQUIPE_TITRE","Editieren von Teams von");
define("ADMIN_EQUIPE_1","Zu loeschende Clubs :");
define("ADMIN_EQUIPE_2","Hinzufuegen von Clubs zu");
define("ADMIN_EQUIPE_3","(Mehrfachauswahl moeglich mit SHIFT und CTRL)");
define("ADMIN_EQUIPE_4","Loeschen von Clubs von");

// Dates
define("ADMIN_DATES_TITRE","Daten von");
define("ADMIN_JOURNEES_MSG9","Spieltag Nr");
define("ADMIN_JOURNEES_MSG10","als <b>TTMMJJJJ<b>");
define("ADMIN_DATES_1","Standard Uhrzeit Spielbeginn");
define("ADMIN_DATES_2","Achtung bei Aenderung eines Datums werden alle Uhrzeiten wieder auf fie Standard Uhrzeit gestellt!");
define("ADMIN_DATES_HEURES","h");
define("ADMIN_DATES_MINUTES","min");
define("ENVOI","Send");
define("ADMIN_DATES_3","Deine Liga hat eine ungerade Anzahl an Mannschaften. Fuege ein Team Namens 'exempte' hinzu.");
define("ADMIN_DATES_4","Keins");
define("ADMIN_DATES_5","Du musst die Teams erst erstellen, bevor du Daten eingeben kannst. Gehe zu");


// Matchs
define("JOURNEE_MIROIR","Rueckspieltag ? :");
define("ADMIN_MATCHS_TITRE","Spiele am");
define("ADMIN_COHERENCE_TITRE","Plausibilitaetspruefung des Kalenders");
define("ADMIN_COHERENCE_MSG2","Spieltag");
define("ADMIN_COHERENCE_MSG3"," ist plausibel");
define("ADMIN_COHERENCE_MSG4","<b>unplausibel oder unvollstaendig</b>");
define("ADMIN_COHERENCE_MSG5","Diese Liga scheint plausibel zu sein!");
define("ADMIN_COHERENCE_MSG6","Diese Liga scheint unplausibel zu sein!");
define("ADMIN_COHERENCE_MSG7","Plausibilitaet pruefen");
define("DOMICILE","Heim");
define("EXTERIEUR","Auswaerts");
define("ADMIN_MATCHS_1","Die Spieltage wurden noch nicht generiert. Gehe zu");

// Paramètres
define("ADMIN_PARAM_MSG2","Punkte fuer einen Sieg?");
define("ADMIN_PARAM_MSG3","Punkte fuer ein Unentschieden?");
define("ADMIN_PARAM_MSG4","Punkte fuer eine Niederlage?");
define("ADMIN_PARAM_MSG5","Anzahl Aufsteiger?");
define("ADMIN_PARAM_MSG6","Anzahl Absteiger?"); //markiert siehe franz!
define("ADMIN_PARAM_MSG7","Anzahl Relegationsplaetze?");
define("ADMIN_PARAM_MSG8","Eigenes Team?");
define("ADMIN_PARAM_TITRE","Parameter der");
define("ADMIN_TAPVERT_TITRE","Strafpunkte");
define("ADMIN_PARAM_MSG9","Punkte fuer eine korrekte Prognose");
define("ADMIN_PARAM_MSG10","Punkte fuer eine Beteiligung an einer Prognose");
define("ADMIN_PARAM_MSG11","Refernz Prognosenzahl");
define("ADMIN_PARAM_MSG12","Wieviele Stunden zwischen Matchbeginn und Wettanahmeschluss");
define("ADMIN_PARAM_MSG13","Prognose von");
define("ADMIN_TAPVERT_MSG1","Hier koennen Strafpunkte gemanaged werden (administrative Strafen, feste Preise, etc...)");
define("ADMIN_TAPVERT_MSG3","Strafpunkte hier eintragen (Bsp: -1, -2 etc.)");
define("ADMIN_TAPVERT_MSG4","Die Club Seiten aktivieren?");
define("ADMIN_TAPVERT_MSG5","Die Prognosen aktivieren?");
define("ADMIN_TAPVERT_MSG6","Die Prognosen auf der Tabellenseite aktivieren?");



// Résultats
define("ADMIN_RESULTS_TITRE","Ergebnisse");
define("ADMIN_RESULTS_1","Spielfrei");

// Buteurs
//define("ADMIN_JOUEURS_TITRE","Player cards");
define("ADMIN_BUTEUR_TITRE","Torschuetzen");

//Graphiques
define("ADMIN_GRAPH_TITRE","Generieren der Graphen und Prognosen");
define("ADMIN_GRAPH","Graphen erfolgreich generiert, in");
define("ADMIN_GRAPH_PRONO","Members classification was successfully done"); //0.82
define("ADMIN_GRAPH_1","Generieren der Graphen fehlgeschlagen, neu versuchen!");
define("ADMIN_GRAPH_2","Muss nach hinzufuegen der neuen Ergebnisse gemacht werden. Nimmt etwas Zeit in Anspruch...");
define("ADMIN_GRAPH_3","Tabellenplatz-Chart fuer");
define("ADMIN_GRAPH_4","Generieren der Graphen fehlgeschlagen, neu versuchen!<br>
                      Wenn das Problem weiterhin bestehen sollte: max_execution_time in C:\windows\php.ini erhoehen");
define("ADMIN_GRAPH_5","Sekunden");
define("ADMIN_GRAPH_6","in");

// Mini-classement
define("ADMIN_MINI_1","Mini-Tabelle");
define("ADMIN_MINI_2","Ausgabeart waehlen");
define("ADMIN_MINI_3","Waehle die Art der Anzeige");
define("ADMIN_MINI_4","Waehle eine Liga");
define("ADMIN_MINI_5","Anzahl der Teams ueber dem Eigenen");
define("ADMIN_MINI_6","Editiere Code");
define("ADMIN_MINI_7","Remark");
define("ADMIN_MINI_8","Die Liga ist nicht gewaehlt!");
define("ADMIN_MINI_9","Typ der Tabelle ist nicht gewaehlt!");
define("ADMIN_MINI_10","Ausgabeart nicht gewaehlt!");
define("ADMIN_MINI_11","Ungueltiger Code !");
define("ADMIN_MINI_12","Zeige");
define("ADMIN_MINI_13","Diesen Code in die Seite einfuegen : ");
define("ADMIN_MINI_14","Anzahl der Teams unter dem Eigenen");
define("ADMIN_MINI_15","Soll ein Link auf den Teams sein?");
define("ADMIN_MINI_17","Zeige nicht die gesamte Tabelle");
define("ADMIN_MINI_18","Zeige die gesamte Tabelle");
define("ADMIN_MINI_19","Anzahl der Teams ueber dem Eigenen nicht gewaehlt!");
define("ADMIN_MINI_20","Anzahl der Teams unter dem Eignen nicht gewaehlt!");
define("ADMIN_MINI_21","Der Quelltext ist gueltig <br> Sollte es probleme geben die Mini-Tabelle einzufuegen nutze: iframe...");
define("ADMIN_MINI_22","Farbe");
define("ADMIN_MINI_23","Linien");
define("ADMIN_MINI_24","Editor");

// FICHIER admin/classe.php
define("ADMIN_CLASSE_TITRE","Kategorien editieren");
define("ADMIN_CLASSE_SUPP1","Kategorie loeschen:");
define("ADMIN_CLASSE_BUTTON_SUPP","Loesche Kategorie");
define("ADMIN_CLASSE_CREA","Kategorie <b>hinzufuegen</b");
define("ADMIN_CLASSE_NOM","Name der Kategorie: ");
define("ADMIN_CLASSE_BUTTON_CREA","Kategorie erstellen");
define("ADMIN_CLASSE_BUTTON_MSG3","Zum <b>veraendern</b> einer Kategore nutze: PHPMyAdmin");
define("ADMIN_CLASSE_1","Sortieren der Kategorien : 1 : erste, 2 : zweite...");
define("ADMIN_CLASSE_2","<b>Parameteraufnahme! !</b>");
define("ADMIN_CLASSE_3","Sie duerfen diese Kategorie nicht loeschen, da sie verwendet wird von: ");
define("ADMIN_CLASSE_4"," Information. Loesche erst die Info, dann die Kategorie.");
define("ADMIN_CLASSE_5","Information");
define("ADMIN_CLASSE_CLASSE","Classes");  // 0.82
define("ADMIN_CLASSE_RENS","Information");  // 0.82
define("ADMIN_CLASSE_GEST","Club Administration");  // 0.82



// FICHIER admin/gestequipes.php
define("ADMIN_GESTEQUIPE_TITRE","Club Consultation"); // 0.82
define("ADMIN_GESTEQUIPE_2","Choose a club : ");  // 0.82
define("ADMIN_EQUIPE_17","Editieren der Teaminformationen");
define("ADMIN_GESTEQUIPE_1","Adjust the parameters of : "); // 0.82
define("ADMIN_GESTEQUIPE_3","Information name"); // 0.82
define("ADMIN_GESTEQUIPE_4","Information value"); // 0.82
define("ADMIN_EQUIPE_5","Url");
define("ADMIN_EQUIPE_6","Sichtbar (=1)<br>oder nicht (=0)");
define("ADMIN_EQUIPE_7","Bild URL : ");
define("ADMIN_EQUIPE_8","keine Informationen");


// FICHIER admin/rens.php
define("ADMIN_RENS_TITRE","Vereins Information");
define("ADMIN_RENS_SUPP1","<b>Loeschen</b> einer Information ");
define("ADMIN_RENS_BUTTON_SUPP","Loeschen");
define("ADMIN_RENS_CREA","<b>Hinzufuegen</b> einer Information");
define("ADMIN_RENS_NOM","Name der Information : ");
define("ADMIN_RENS_BUTTON_CREA","Generiere");
define("ADMIN_RENS_CREA2","<b>Generieren fertig</b>");
define("ADMIN_RENS_SUPP2","<b>Loeschen fertig</b>");
define("ADMIN_RENS_1"," in der Klasse : ");
define("ADMIN_RENS_2","Du kannst die Information nicht loeschen, da sie benutzt wird ");
define("ADMIN_RENS_3"," Mal in den Informationen.");
define("ADMIN_RENS_4","<b>Zuordnen</b> der Information zu Klassen :");
define("ADMIN_RENS_5","<b>Loeschen</b> der Parameter der Information (Mehrfachanwahl mit SHIFT und CTRL moeglich) : ");
define("ADMIN_RENS_6"," in ");
define("ADMIN_RENS_7","To add"); //0.82
define("ADMIN_RENS_8","To remove"); //0.82
define("ADMIN_RENS_9","Reihenfolge der Informationen : 1 : 1st, 2 : 2nd...");
define("ADMIN_RENS_10","<b>Editiern</b> der Informationen");
define("ADMIN_RENS_11","Speichern");
define("ADMIN_RENS_12","Name der Information");
define("ADMIN_RENS_13","URL der Information (optional)");
define("ADMIN_RENS_14","Information in Klasse :");
define("ADMIN_RENS_15","Alle Informationen sind klassifiziert");
define("ADMIN_RENS_16","Sicher, dass du loeschen willst?");
define("ADMIN_RENS_17","Ja");
define("ADMIN_RENS_18","Nein");

/* ZONE PUBLIQUE : CONSULTATION */


// Entete et index
define("CONSULT_HOME","Heimspiele");
define("CONSULT_CALENDAR","Kalender");
define("CONSULT_CLASSEMENT","Tabellen ");
define("CONSULT_BUTEUR","Torschuetzen");
define("CONSULT_DUEL","Begegnungen");
define("MENU_UTILISATEUR","Benutzermenu ");
define("CONSULT_PRONOSTICS","Predictions");      // 0.82




//classement
define("CONSULT_CLMNT_MSG1","Typ der Tabelle:");
define("ADMIN_TAPVERT_MSG2","Welche Liga:");
define("GENERAL","Gesamt");
define("ATTAQUE","Angriff");
define("DEFENSE","Verteidigung");
define("GOALDIFF","Tordurchschnitt");
define("CONSULT_CLMNT_MSG2"," von Spieltag ");
define("CONSULT_CLMNT_MSG3"," bis Spieltag ");
define("CONSULT_CLMNT_MSG4","Tabelle, Spieltage ");
define("CONSULT_CLMNT_MSG5"," bis ");
define("CONSULT_CLMNT_MSG6","Letzte Ergebnisse : Spieltag Nr");
define("CONSULT_CLMNT_MSG61","Letzer Spieltag (Nr");
define("CONSULT_CLMNT_MSG62","Naechster Spieltag Nr (Nr");
define("CONSULT_CLMNT_MSG7","Prognose fuer die Ergebnisse des naechsten Spieltages:");
define("CONSULT_CLMNT_MSG8","Prognose fuer die Ergebnisse des <br>naechsten Spieltages : Nr");
define("CONSULT_CLMNT_MSG9","Naechster Spieltag : Nr ");
define("CONSULT_CLMNT_MSG10","Heimspiel Tabelle, Spieltage ");
define("CONSULT_CLMNT_MSG11","Angriff Tabelle, Spieltage ");
define("CONSULT_CLMNT_MSG12","Verteidigungen Tabelle, Spieltage ");
define("CONSULT_CLMNT_MSG13","Tordurchschnitttabelle, Spieltage ");
define("CONSULT_CLMNT_MSG14","Auswaertstabelle, Spieltage ");
define("CLMNT_POSITION","Platz");
define("CLMNT_EQUIPE","Mannschaft");
define("CLMNT_POINTS","Pkt");
define("CLMNT_JOUES"," Sp ");
define("CLMNT_VICTOIRES","S ");
define("CLMNT_NULS","U ");
define("CLMNT_DEFAITES","N ");
define("CLMNT_BUTSPOUR","T ");
define("CLMNT_BUTSCONTRE","GT ");
define("CLMNT_DIFF","Diff ");
define("EXEMPT","Exempt");
define("LEAGUE_LANGUAGE","english");// 0.82

// Matchs
define("CONSULT_MATCHS","Kalender ");
define("CONSULT_MATCHS_MSG1","Welche Liga?");
define("CONSULT_MATCHS_MSG2"," der ");

// FICHIER consult/equipes.php
define("CONSULT_INDEX_1","Team consultation");// 0.82
define("CONSULT_INDEX_2","Foundation");//0.82

// Detail equipe
define("VICTOIRE","SIEG ");
define("NUL"," UNEN ");
define("DEFAITE"," NIED");
define("JOURNEE","TAG");
define("DETAILEQ_TITRE","Bitte Verein waehlen");
define("DETAILEQ_1","Mannschaft :");

// divers
define("RETOUR","ZURUECK");

// calendrier_1.php
define("CONSULT_CALENDAR_1","Diesen Spieltag gibt es nicht");
define("CONSULT_CALENDAR_2","Vorangegangener Spieltag");
define("CONSULT_CALENDAR_3","Naechster Spieltag");
define("CONSULT_CALENDAR_4","Naechste Spiele : Spieltag Nr");
define("CONSULT_CALENDAR_5","Vorherige Spiele : Spieltag Nr");


// FICHIER admin/clubs.php
define("ADMIN_CLUB_TITRE","Club Management");
define("ADMIN_CLUB_SUPP1","<b>Loesche</b> einen Club ");
define("ADMIN_CLUB_BUTTON_SUPP","Loesche_club");
define("ADMIN_CLUB_CREA","<b>Hinzufuegen</b> eines Clubs");
define("ADMIN_CLUB_BUTTON_CREA","Hinzufuegen");
define("ADMIN_CLUB_BUTTON_MSG3","Zum <b>aendern</b>, benutze PHPMyAdmin");
define("ADMIN_CLUB_CREA2","<b>Hinzufuegen abgeschlossen</b>");
define("ADMIN_CLUB_SUPP2","<b>Loeschen abgeschlossen</b>");




// *********************************************
// ***** NEW ITEMS ADDED DECEMBER 22th 2001 ****
// *********************************************


// consult/buteurs
define("CONSULT_BUTEUR_MSG1","Welche Liga Gruppe?");
define("CONSULT_BUTEUR_MSG2","Torschuetzen-Tabelle");
define("CONSULT_BUTEUR_TITRE_1","Striker standings");    // 0.82
define("CONSULT_BUTEUR_MSG3","Gruppe der Liga : ");
define("CONSULT_BUTEUR_MSG4","beinhaltet : ");
define("CONSULT_BUTEUR_MSG5","Welche Mannschaft ?");
define("DUEL_MSG1","Waehle deinen Gegner : ");
define("DUEL_MSG2"," Begegnungen");
define("DUEL_MSG3","Hier sind die Computererrechneten Wahrscheinlichkeiten");
define("DUEL_MSG4","Wahrscheinlichkeiten : ");
define("DUEL_MSG5","Die Wahrscheinlichkeiten sind das Ergebnis einer einfachen mathematischen Berechnung");

// consult/club
define("CONSULT_CLUB_1","Platzierung");
define("CONSULT_CLUB_2","Kalender und Ergebnisse");
define("CONSULT_CLUB_3","Geschichte");
define("CONSULT_CLUB_4","Statistik");

// Security
define("ADMIN_SECURITE_CLUB","Sicher, dass du die folgenden Vereine loeschen willst? :");
define("ADMIN_SECURITE_RENS","Sicher, dass du die folgenden Informationen loeschen willst? :");
define("ADMIN_SECURITE_SAISONS","Sicher, dass du die folgende Saison loeschen willst? :");
define("ADMIN_SECURITE_SAISONS_2","und alle damit verbundenen Ligen und Spiele");
define("ADMIN_SECURITE_CLASSE","Sicher, dass du die folgenden Klasse loeschen willst? :");
define("ADMIN_SECURITE_CHAMP","Sicher, dass du die folgende Liga loeschen willst? :");

// 25/12/2003

//define("ADMIN_BUTEUR_TITRE","Players of ");
define("ADMIN_BUTEUR_TITRE2","Strikers of ");

// Joueurs et buteurs
define("ADMIN_BUTEURS_TITRE","Editieren der Torschuetzen");
define("ADMIN_BUTEURS_MSG1","which championship do you want to seize?");
define("ADMIN_BUTEURS_MSG2","What day do you want to seize?");
define("ADMIN_BUTEURS_LAST","Vorherige");
define("ADMIN_BUTEURS_NEXT","Naechste");
define("ADMIN_BUTEURS_MSG3","Validierung_und_folgender_Schuetze "); // laisser des _ à la place des espaces
define("ADMIN_JOUEURS_TITRE","Editieren der Spieler");
define("ADMIN_JOUEURS_MSG1","<b>Loeschen</b> eines Spielers  ");
define("ADMIN_JOUEURS_MSG2","loesche_spieler");
define("ADMIN_JOUEURS_MSG3","<b>Hinzufuegen</b> eines Spielers");
define("ADMIN_JOUEURS_MSG4","Vorname:   ");
define("ADMIN_JOUEURS_MSG5","Nachname:  ");
define("ADMIN_JOUEURS_MSG6","Verein:  ");
define("ADMIN_JOUEURS_MSG7","URL Bild: ");
define("ADMIN_JOUEURS_MSG8","Geboren am: (TTMMJJJJ)  ");
define("ADMIN_JOUEURS_MSG9","Position:   ");
define("ADMIN_JOUEURS_MSG10","Zum <b>aendern</b>,PHPMyAdmin benutzen");
define("ADMIN_JOUEURS_1","<b>Eingeben</b> der Torschuetzen. Anklicken um zu <b>loeschen</b>");
define("ADMIN_JOUEURS_2","Tore");
define("ADMIN_JOUEURS_3","Verein: ");
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
define("CREDITS_TRADUC","Dutch translation : Markus Hoffmann");

?>
