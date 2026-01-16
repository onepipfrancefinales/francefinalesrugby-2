<?php

// ADMINISTRATION

// Setup

define("SETUP_HOST_NAME","Host naam");
define("SETUP_DATABASE","Naam database");
define("SETUP_LOGIN","Login");
define("SETUP_PASSWORD","Paswoord");
define("SETUP_TYPE","Installatie type");
define("SETUP_NORMALE","Normale installatie");
define("SETUP_MAJ","Update van vorige versie");
define("SETUP_TITRE_SITE","Naam van uw site"); // 0.82
define("SETUP_URL_SITE","Adres van uw site"); // 0.82
define("SETUP_PSEUDO","Login"); // 0.82
define("SETUP_MDP","Paswoord"); // 0.82
define("SETUP_MAIL","E-mail"); // 0.82
define("SETUP_ERREUR","Onmogelijk om bewerking uit te voeren");
define("SETUP_ERREUR_2","Fout bij het verbinden met de database");
define("SETUP_ID_INCORRECTS","Uw gegevens zijn niet correct !");
define("SETUP_TABLE","De tabel van");
define("SETUP_TABLE_2","is correct gecreëerd");
define("SETUP_TABLE_3","Creëer de tabel van");
define("SETUP_TABLE_4","creëer een account voor de administrator van de pronostieken");
define("SETUP_TABLE_5","De account is correct gecreëerd");
define("SETUP_CONFIRMATION","U hebt het script goed uitgevoerd !");
define("SETUP_FIN","Voor meer veiligheid kan u beter het instell.php bestand verwijderen !
                    Ga daarna naar <a href=\"admin\">administratie</a> om te starten met phppleague !");
define("SETUP_REMPLIR_CHAMP","Gelieve alle velden correct in te vullen !");
define("SETUP_REPERTOIRE_SCRIPT","Script Root");    // 0.82
define("SETUP_MAJ_ACHEVEE","Udate goed uitgevoerd");    // 0.82
define("SETUP_MAJ_INCOH","Niet coherent");    // 0.82
define("SETUP_MAJ_INCOH_2","marked in the folder of");    // 0.82


//Menu
define("MENU_FICHES_CLUBS","Fiches Clubs");
define("MENU_ID","Id");
define("MENU_NOM","Naam");
define("MENU_CREDITS","Crédits");
define("MENU_MEMBRES","Leden");

// Championnats
define("LEAGUE","Kampioenschappen");
define("DATE","Data");
define("TEAM","Ploegen");
define("MATCH","Wedstrijden");
define("PARAMETRE","Parameters");
define("GENERER","Genereren"); //0.82
define("JOUEURS","Spelers"); // 0.82
define("BUTEUR","Doelpuntenmakers");
define("RESULT","Resultaten");
define("EQUIPE","Ploegen");
define("ADMIN_CHAMP_CREER","Creëer een kampioenschap");

// Groupes championnats
define("EDITER","Editer");
define("GR_LEAGUE","Groep van kampioenschappen");
define("ADMIN_GR_CHAMP_CREER","Creëer een groep van kampioenschappen");
define("ADMIN_GR_CHAMP_GENERER","Genereren");



// Création d'un groupe de championnat
define("ADMIN_GR_CHAMPIONNATS_CREA","Creatie van een groep van kampioenschappen");
define("ADMIN_GR_CHAMP_CREER_1","Naam van de groep");

//Suppression d'un groupe de championnats
define("ADMIN_GR_CHAMPIONNATS_SUPP","Verwijderen van een groep");
define("ADMIN_GR_CHAMPIONNATS_SUPP1","Bent u zeker deze groep te willen verwijderen");
define("ADMIN_GR_CHAMPIONNATS_SUPP2"," ?");

//Edition d'un groupe de championnats
define("ADMIN_GR_CHAMP_EDIT","Configuratie van de groep");
define("ADMIN_GR_CHAMP_EDIT_1","Selecteer de kampioenschappen");
define("ADMIN_GR_CHAMP_EDIT_2","Selectie");
define("ADMIN_GR_CHAMP_EDIT_3","Kampioenschap die dient verwijderd te worden");
define("ADMIN_GR_CHAMP_EDIT_4","Update");
define("ADMIN_GR_CHAMP_EDIT_5","Actuele lijst");



//Suppression de championnat
define("ADMIN_CHAMPIONNATS_SUPP","Verwijder kampioenschap");
define("ADMIN_CHAMPIONNATS_SUPP1","Bent u zeker dit kampioenschap te willen verwijderen");
define("ADMIN_CHAMPIONNATS_SUPP2","evenals alle gekoppelde wedstrijden ?");

// Création de championnat
define("ADMIN_CHAMPIONNATS_CREA","Creatie van een kampioenschap");
define("ADMIN_CHAMPIONNATS_CREA2","Kies");
define("ADMIN_JOURNEES_MSG3","Seizoen");
define("ADMIN_CHAMP_CREER_2","Afdeling");
define("ADMIN_CHAMP_CREER_3","Creëer");
define("ADMIN_CHAMP_CREER_4","Seizoen (1ste jaar)");

// Equipes
define("ADMIN_CLUB_NOM","Naam van de club :");
define("ADMIN_CLUBS_CREE","Creatie van een club");
define("ADMIN_EQUIPE_TITRE","Configureer de clubs van");
define("ADMIN_EQUIPE_1","Te verwijderen clubs :");
define("ADMIN_EQUIPE_2","Toe te voegen clubs");
define("ADMIN_EQUIPE_3","(Meerder keuzes mogelijk met de toetsen SHIFT et CTRL)");
define("ADMIN_EQUIPE_4","Clubs te verwijderen uit");

// Dates
define("ADMIN_DATES_TITRE","Data van de speeldagen van");
define("ADMIN_JOURNEES_MSG9","Speeldag N°");
define("ADMIN_JOURNEES_MSG10","onder de vorm <b>DDMMJJJJ<b>");
define("ADMIN_DATES_1","Standaart aanvangsuur");
define("ADMIN_DATES_2","Let op, met deze actie kent u hetzelfde uur toe aan alle wedstrijden van het seizoen! Als u enkel de datum of het uur van één match wil aanpassen kan dit via");
define("ADMIN_DATES_HEURES","h");
define("ADMIN_DATES_MINUTES","min");
define("ENVOI","Verstuur");
define("ADMIN_DATES_3","Uw kampioenschap heeft een onpaar aantal ploegen. Voeg een team bij 'buy' om evenwicht te brengen.");
define("ADMIN_DATES_4","Geen enkele");
define("ADMIN_DATES_5","U moet eerste de ploegen aanmaken uitkomend in dit kampioenschap. Ga naar");


// Matchs
define("JOURNEE_MIROIR","Spiegel speeldag ? :");
define("ADMIN_MATCHS_TITRE","Wedstrijden van");
define("ADMIN_COHERENCE_TITRE","Controle van de coherentie van de kalender");
define("ADMIN_COHERENCE_MSG2","Speeldag");
define("ADMIN_COHERENCE_MSG3"," Coherent");
define("ADMIN_COHERENCE_MSG4","<b>incoherent of niet compeelt</b>");
define("ADMIN_COHERENCE_MSG5","Dit kampioenschap lijkt coherent");
define("ADMIN_COHERENCE_MSG6","Dit kampioenschap lijkt incoherent");
define("ADMIN_COHERENCE_MSG7","Voer een controle uit van de coherentie");
define("DOMICILE","Thuis");
define("EXTERIEUR","Uit");
define("ADMIN_MATCHS_1","De speeldagen zijn nog niet aangemaakt, ga eerst naar");

// Paramètres
define("ADMIN_PARAM_MSG2","Punten voor een overwinning ?");
define("ADMIN_PARAM_MSG3","Punten voor een gelijkspel ?");
define("ADMIN_PARAM_MSG4","Punten voor een nederlaag ?");
define("ADMIN_PARAM_MSG5","Aantal ploeg die rechtsreeks promoveren ?");
define("ADMIN_PARAM_MSG6","Aantal ploegen die barrages moeten spelen ?");
define("ADMIN_PARAM_MSG7","Aantal ploegen voor degradatie ?");
define("ADMIN_PARAM_MSG8","Uw favoriete ploeg ?");
define("ADMIN_PARAM_TITRE","Parameters van");
define("ADMIN_TAPVERT_TITRE","Groene tafel van");
define("ADMIN_PARAM_MSG9","Punten voor een correct pronostiek");  
define("ADMIN_PARAM_MSG10","Punten voor deelname aan een pronostiek");
define("ADMIN_PARAM_MSG11","Pseudoniem voor de pronostieker");
define("ADMIN_PARAM_MSG12","Gef het aantal uren weer tussen de validatie van de pronstiek en de wedstrijd");
define("ADMIN_PARAM_MSG13","Pronostiek van");
define("ADMIN_TAPVERT_MSG1","Hier kan u de strafpunten weergeven (sancties, forfaits, etc ...)");
define("ADMIN_TAPVERT_MSG3","Geef de strafpunten in (Ex: -1, -2, ...)");
define("ADMIN_TAPVERT_MSG4","Activeer de clubfiches ?");
define("ADMIN_TAPVERT_MSG5","Activeer de pronostiek ?");
define("ADMIN_TAPVERT_MSG6","Activer les estimations dans la page du classement ? (Attention, cette option ralentit le chargement de la page)"); // 0.82


// Résultats
define("ADMIN_RESULTS_TITRE","Uitslagen van");
define("ADMIN_RESULTS_1","Buy");

// Buteurs
//define("ADMIN_JOUEURS_TITRE","Fiches joueurs");
define("ADMIN_BUTEUR_TITRE","Doelpuntenmakers van");

//Graphiques
define("ADMIN_GRAPH_TITRE","Genereer de grafieken en de pronostieken");
define("ADMIN_GRAPH","De creatie van de grafieken en pronostieken is succesvol verlopen"); //0.82
define("ADMIN_GRAPH_PRONO","De ledenclassificatie is succesvol verlopen"); //0.82
define("ADMIN_GRAPH_1","De creatie van de grafiek is mislukt, probeer opnieuw !");
define("ADMIN_GRAPH_2","Deze actie moet worden uitgevoerd na elke toevoeging van een resultaat.");
define("ADMIN_GRAPH_3","Verloop van het klassement van");
define("ADMIN_GRAPH_4","De creatie van de grafiek is mislukt, probeer opnieuw !<br />
                      Als het probleem zich blijft voordoen verander dan het max_execution_time in php.ini.");
define("ADMIN_GRAPH_5","secondes");
define("ADMIN_GRAPH_6","in");

// Mini-classement
define("ADMIN_MINI_1","Mini-Rangschikking");
define("ADMIN_MINI_2","Kies de uitvoering");
define("ADMIN_MINI_3","Kies het type van rangschikking");
define("ADMIN_MINI_4","Kies het kampioenschap");
define("ADMIN_MINI_5","Aantal weer te geven ploegen boven uw favoriete ploeg");
define("ADMIN_MINI_6","Configureer de code");
define("ADMIN_MINI_7","OPmerkingen");
define("ADMIN_MINI_8","Kampioenschap niet geupdate !");
define("ADMIN_MINI_9","Type van rangschikking niet geupdate !");
define("ADMIN_MINI_10","UItvoering niet geupdate !");
define("ADMIN_MINI_11","Code ongeldig !");
define("ADMIN_MINI_12","Toon");
define("ADMIN_MINI_13","Code die u dient in de voegen in uw pagina's :");
define("ADMIN_MINI_14","Aantal weer te geven ploegen onder uw favoriete ploeg");
define("ADMIN_MINI_15","Wil u de link behouden op de ploegen ?");
define("ADMIN_MINI_17","Niet de volledige rangschikking weergeven");
define("ADMIN_MINI_18","De volledige rangschikking weergeven");
define("ADMIN_MINI_19","Aantal ploegen boven zijn niet geupdate !");
define("ADMIN_MINI_20","Aantal ploegen onder zijn niet geupdate !");
define("ADMIN_MINI_21","De code is niet geldig <br /> Verander indien nodig de grote van het iFrame.");     // 0.82
define("ADMIN_MINI_22","Kleuren");
define("ADMIN_MINI_23","Lijnen");
define("ADMIN_MINI_24","Editor");

// FICHIER admin/classe.php
define("ADMIN_CLASSE_TITRE","Configuratie van de blokken");
define("ADMIN_CLASSE_SUPP1","Verwijdering van de blokken :");
define("ADMIN_CLASSE_BUTTON_SUPP","Verwijdering van het blok");
define("ADMIN_CLASSE_CREA","<b>Voeg</b> een blok toe");
define("ADMIN_CLASSE_NOM","Naam van het blok :");
define("ADMIN_CLASSE_BUTTON_CREA","Creëer een blok");
define("ADMIN_CLASSE_BUTTON_MSG3","Om de naam van een blok <b>aan te passen</b> gebruik PHPMyAdmin");
define("ADMIN_CLASSE_1","Volgorde van de blokken : 1 : 1ste, 2 : 2de...");
define("ADMIN_CLASSE_2","<b>Geregistreerde parameters !</b>");
define("ADMIN_CLASSE_3","U hebt niet het recht dit blok te verwijderen omdat het gebruikt wordt door");
define("ADMIN_CLASSE_4","Inlichtingen. Verwijder eerst de gegevens vooraleer het blok te verwijderen !");
define("ADMIN_CLASSE_5","Inlichtingen");
define("ADMIN_CLASSE_CLASSE","Blokken");  // 0.82
define("ADMIN_CLASSE_RENS","Gegevens");  // 0.82
define("ADMIN_CLASSE_GEST","gegevens van de club");  // 0.82



// FICHIER admin/gestequipes.php
define("ADMIN_GESTEQUIPE_TITRE","Consulteer de clubs");
define("ADMIN_GESTEQUIPE_2","Kies een club : ");
define("ADMIN_EQUIPE_17","Configuratie van de gegevens van een club");
define("ADMIN_GESTEQUIPE_1","Pas de parameters aan van : ");
define("ADMIN_GESTEQUIPE_3","Naam van de gegevens");
define("ADMIN_GESTEQUIPE_4","Waarde van de gegevens");
define("ADMIN_EQUIPE_5","Url");
define("ADMIN_EQUIPE_6","Tonen");
define("ADMIN_EQUIPE_7","Url logo : ");
define("ADMIN_EQUIPE_8", "Niet geupdate");


// FICHIER admin/rens.php
define("ADMIN_RENS_TITRE","Configuratie van de gegevens");
define("ADMIN_RENS_SUPP1","<b>Verwijdering</b> van gegevens ");
define("ADMIN_RENS_BUTTON_SUPP","Verwijdering gegevens");
define("ADMIN_RENS_CREA","<b>Voer</b> gegevens toe");
define("ADMIN_RENS_NOM","Naam van gegevens : ");
define("ADMIN_RENS_BUTTON_CREA","Creatie van gegevens");
define("ADMIN_RENS_CREA2","<b>Creatie uitgevoerd</b>");
define("ADMIN_RENS_SUPP2","<b>Verwijdering uitgevoerd</b>");
define("ADMIN_RENS_1"," in het blok : ");
define("ADMIN_RENS_2","U hebt niet het recht deze gegevens te verwijderen daar ze gebruikt worden ");
define("ADMIN_RENS_3"," keer in de gegevens.");
define("ADMIN_RENS_4","<b>Voeg</b> de gegevens in in de blokken :");
define("ADMIN_RENS_5","<b>Verwijder</b> de parameters van de gegevens (Meerdere keuzes mogelijk met de toetsen SHIFT et CTRL) : ");
define("ADMIN_RENS_6"," in ");
define("ADMIN_RENS_7","Toevoegen");
define("ADMIN_RENS_8","Verwijderen");
define("ADMIN_RENS_9","Rangschikken van de gegevens : 1 voor 1ste, 2 voor 2de...");
define("ADMIN_RENS_10","<b>Configuratie</b> van de gegevens");
define("ADMIN_RENS_11","Registreren");
define("ADMIN_RENS_12","Naam van de gegevens");
define("ADMIN_RENS_13","Url van de gegevens (facultatief)");
define("ADMIN_RENS_14","Te klasseren gegevens :");
define("ADMIN_RENS_15","Alle gegevens zijn geklasseerd");
define("ADMIN_RENS_16","Bent u zeker dat u de gegevens wil verwijderen");
define("ADMIN_RENS_17","Ja");
define("ADMIN_RENS_18","Nee");

/* ZONE PUBLIQUE : CONSULTATION */


// Entete et index
define("CONSULT_HOME","Home");
define("CONSULT_CALENDAR","Kalenders");
define("CONSULT_CLASSEMENT","Rangschikkingen");
define("CONSULT_BUTEUR","Doelpuntenmakers");
define("CONSULT_DUEL","Wedstrijden");
define("MENU_UTILISATEUR","Menu gebruiker");
define("CONSULT_PRONOSTICS","Pronostieken");      // 0.82




//classement
define("CONSULT_CLMNT_MSG1","Type rangschikking :");
define("ADMIN_TAPVERT_MSG2","Welk kampioenschap :");
define("GENERAL","Algemeen");
define("ATTAQUE","Aanval");
define("DEFENSE","Verdediging");
define("GOALDIFF","Dif");
define("CONSULT_CLMNT_MSG2"," van speeldag ");
define("CONSULT_CLMNT_MSG3"," tot speeldag ");
define("CONSULT_CLMNT_MSG4","Algemene rangschikking, speeldagen ");
define("CONSULT_CLMNT_MSG5"," tot ");
define("CONSULT_CLMNT_MSG6","Laatste speeldag : n°");
define("CONSULT_CLMNT_MSG61","Vorige speeldag : n°");
define("CONSULT_CLMNT_MSG62","Volgende speeldag (n°");
define("CONSULT_CLMNT_MSG7","SCHATTING VAN DE UITSLAGEN VAN DE VOLGENDE SPEELDAG :");
define("CONSULT_CLMNT_MSG8","Schatting volgende speeldag (n°");
define("CONSULT_CLMNT_MSG9","Volgende speeldag : n° ");
define("CONSULT_CLMNT_MSG10","Thuisrangschikking, speeldagen ");
define("CONSULT_CLMNT_MSG11","Rangschikking volgens aanval, speeldagen ");
define("CONSULT_CLMNT_MSG12","Rangschikking volgens verdediging, speeldagen ");
define("CONSULT_CLMNT_MSG13","Rangschikking volgens doelpuntencoëficiënt, speeldagen ");
define("CONSULT_CLMNT_MSG14","Uitrangschikking, speeldagen ");
define("CLMNT_POSITION","pos");
define("CLMNT_EQUIPE","ploeg");
define("CLMNT_POINTS","pts");
define("CLMNT_JOUES"," m ");
define("CLMNT_VICTOIRES","w ");
define("CLMNT_NULS","g ");
define("CLMNT_DEFAITES","v ");
define("CLMNT_BUTSPOUR","a ");
define("CLMNT_BUTSCONTRE","v ");
define("CLMNT_DIFF","d ");
define("EXEMPT","bey");
define("LEAGUE_LANGUAGE","nederlands");

// Matchs
define("CONSULT_MATCHS","Weergave van de kalender");
define("CONSULT_MATCHS_MSG1","Welk kampioenschap wil u zien ?");
define("CONSULT_MATCHS_MSG2"," - ");

// FICHIER consult/equipes.php
define("CONSULT_INDEX_1","Weergave van de ploegen");
define("CONSULT_INDEX_2","Oprichting");

// Detail equipe
define("VICTOIRE","OVERWINNING ");
define("NUL"," GELIJKSPEL ");
define("DEFAITE"," NEDERLAAG");
define("JOURNEE","N°");
define("DETAILEQ_TITRE","Keuze ploeg");
define("DETAILEQ_1","Ploeg :");


// calendrier_1.php
define("CONSULT_CALENDAR_1","Deze speeldag bestaat niet");
define("CONSULT_CALENDAR_2","Vorige speeldag");
define("CONSULT_CALENDAR_3","Volgende speeldag");
define("CONSULT_CALENDAR_4","Volgende wedstrijden : speeldag n°");
define("CONSULT_CALENDAR_5","Laatste wedstrijden : speeldag n°");


// divers
define("RETOUR","Terug");

// FICHIER admin/clubs.php
define("ADMIN_CLUB_TITRE","Edition des clubs");
define("ADMIN_CLUB_SUPP1","<b>Suppression</b> d'un club ");
define("ADMIN_CLUB_BUTTON_SUPP","Suppression club");
define("ADMIN_CLUB_CREA","<b>Ajout</b> d'un club");
define("ADMIN_CLUB_BUTTON_CREA","Création club");
define("ADMIN_CLUB_BUTTON_MSG3","Pour <b>modifier</b> le nom d'un club, utilisez PHPMyAdmin");
define("ADMIN_CLUB_CREA2","<b>Création effectuée</b>");
define("ADMIN_CLUB_SUPP2","<b>Suppression effectuée</b>");




// *********************************************
// ***** NEW ITEMS ADDED DECEMBER 22th 2001 ****
// *********************************************


// consult/buteurs
define("CONSULT_BUTEUR_MSG1","Welke groep van het kampioenschap ?");
define("CONSULT_BUTEUR_MSG2","Rangschikking doelpuntenmakers");
define("CONSULT_BUTEUR_TITRE_1","Rangschikking van de doelpuntenmakers");    // 0.82
define("CONSULT_BUTEUR_MSG3","Groep van kampioenscahppen : ");
define("CONSULT_BUTEUR_MSG4","omvattend : ");
define("CONSULT_BUTEUR_MSG5","Welke ploeg ?");
define("DUEL_MSG1","Kies de tegenstanders : ");
define("DUEL_MSG2"," Wedstrijden");
define("DUEL_MSG3","Ziehier de mogelijkheden van de computer ");
define("DUEL_MSG4","MOGELIJKHEDEN : ");
define("DUEL_MSG5","De weergegeven mogelijkheden zijn het resultaat van een eenvoudige berekening");

// consult/club
define("CONSULT_CLUB_1","Rangschikking");
define("CONSULT_CLUB_2","Kalender en resultaten");
define("CONSULT_CLUB_3","Historiek");
define("CONSULT_CLUB_4","Statistieken");

// Sécurité
define("ADMIN_SECURITE_CLUB","Bent u zeker dat u volgende club wil verwijderen :");
define("ADMIN_SECURITE_RENS","Bent u zeker dat u volgende gegevens wil verwijderen :");
define("ADMIN_SECURITE_SAISONS","Bent u zeker dat u dit seizoen wil verwijderen ");
define("ADMIN_SECURITE_SAISONS_2","evenals het kampioenschap en de wedstrijden");
define("ADMIN_SECURITE_CLASSE","Bent u zeker dat u volgend blok wil verwijderen :");
define("ADMIN_SECURITE_CHAMP","Bent u zeker dat u volgend kampioenschap wil verwijderen :");

// 25/12/2003

//define("ADMIN_BUTEUR_TITRE","Joueurs de ");
define("ADMIN_BUTEUR_TITRE2","Doelpuntenmakers van ");

// Joueurs et buteurs
define("ADMIN_BUTEURS_TITRE","Configuratie van de doelpuntenmakers");
define("ADMIN_BUTEURS_MSG1","Welk kampioenschap kiest u ?");
define("ADMIN_BUTEURS_MSG2","Welke speeldag kiest u ?");
define("ADMIN_BUTEURS_LAST","Vor.");
define("ADMIN_BUTEURS_NEXT","Volg.");
define("ADMIN_BUTEURS_MSG3","bevestiging_en_volgende_doelpuntenmaker"); // laisser des _ à la place des espaces
define("ADMIN_JOUEURS_TITRE","Configuratie van de spelers");
define("ADMIN_JOUEURS_MSG1","<b>Verwijdering</b> van een speler <br />Deze handeling verwijderd eveneens de gemaakte doelpunten van deze speler"); // 0.82
define("ADMIN_JOUEURS_MSG2","Verwijdering");
define("ADMIN_JOUEURS_MSG3","<b>Voeg</b> een speler toe");
define("ADMIN_JOUEURS_MSG4","Voornaam :  ");
define("ADMIN_JOUEURS_MSG5","Naam :  ");
define("ADMIN_JOUEURS_MSG6","Zijn Ploeg :  "); // 0.82
define("ADMIN_JOUEURS_MSG7","URL Foto : ");
define("ADMIN_JOUEURS_MSG8","Geboortedatum : (DDMMJJJJ) ");
define("ADMIN_JOUEURS_MSG9","Positie :  ");
define("ADMIN_JOUEURS_MSG10","Om de naam van de speler te <b>wijzigen</b> gebruik PHPMyAdmin");
define("ADMIN_JOUEURS_1","<b>Vul</b> de doelpuntenmakers per match in. Om een doelpuntenmaker te <b>verwijderen</b>, klik op deze speler.");
define("ADMIN_JOUEURS_2","Doelpunten");
define("ADMIN_JOUEURS_3","ploeg van");
define("ADMIN_JOUEURS_TRANSFERT","Transfereren"); // 0.82
define("ADMIN_JOUEURS_TRANSFERT_VERS","transfereren naar"); // 0.82
define("ADMIN_JOUEURS_EDITER","Kies de te configurerern speler :"); // 0.82
define("ADMIN_JOUEURS_EDITER_2","Configuratie van de speler :"); // 0.82


// Pronostics   // 0.82

// Menu identifié
define("PRONO_MENU_MON_COMPTE","Mijn account");
define("PRONO_MENU_MES_CLASSEMENTS","Mijn klassementen");
define("PRONO_MENU_MES_PRONOS","Mijn pronostieken");
define("PRONO_MENU_LES_CHAMPIONNATS","De kampioenschappen");
define("PRONO_MENU_BIENVENUE","Welkom");
define("PRONO_MENU_POINTS","Punten");
define("PRONO_MENU_MON_PROFIL","Mijn profiel");
define("PRONO_MENU_DECONNEXION","Uitloggen");
define("PRONO_MENU_GENERAL","Algemeen");
define("PRONO_MENU_MOIS","Maand");
define("PRONO_MENU_PROCHAINE_GRILLE","Volgende rooster");
define("PRONO_MENU_DERNIERE_GRILLE","Laatste rooster");
define("PRONO_MENU_MES_RESULTATS","Mijn resultaten");
define("PRONO_MENU_BAREME","Barema");
define("PRONO_MENU_AIDE","Help");  // 0.82

// Menu non identifié
define("PRONO_MENU_LOGIN","Login");
define("PRONO_MENU_MDP","Paswoord");
define("PRONO_MENU_OUBLIE","Paswoord vergeten ?");

// Mot de passe oublié
define("PRONO_OUBLIE_PERDU","Paswoord verloren");
define("PRONO_OUBLIE_TEXTE_1","Vul uw emailadres in, een nieuw paswoord wordt u vervolgens opgestuurd.");
define("PRONO_OUBLIE_TEXTE_2","Uw nieuw paswoord is opgestuurd");
define("PRONO_OUBLIE_TEXTE_3","Uw nieuw paswoord kon niet worden verstuurd !<br />Vernieuw uw aanvragag binnen enkele ogenblikken,dank u.");


//accueil
define("PRONO_ACCUEIL_PRESENTATION","presenteert u de pronostieken voor het volgende rooster");

// GRILLE
define("PRONO_GRILLE_PRONO","Prono");
define("PRONO_GRILLE_TEMPS","Resterende tijd");
define("PRONO_GRILLE_PRECEDENT","Vorige matchen");
define("PRONO_GRILLE_SUIVANT","Volgende matchen");
define("PRONO_GRILLE_SCORE","Reëele score");
define("PRONO_GRILLE_EXPIRE","Vervallen");

// Valider grille
define("PRONO_GRILLE_CONFIRME","Uw pronostieken zijn geregistreerd !");
define("PRONO_GRILLE_PROCHAINE","Volgend rooster");


// Classements
define("PRONO_CLASSEMENT_GENERAL","Algemene rangschikking");
define("PRONO_CLASSEMENT_PSEUDO","Login");
define("PRONO_CLASSEMENT_POINTS","Punten");
define("PRONO_CLASSEMENT_PARTICIPATIONS","Deelnames");
define("PRONO_CLASSEMENT_GENERAL_MAJ","Algemene rangschikking");
define("PRONO_CLASSEMENT_MOIS","Rangschikking van deze maand");
define("PRONO_CLASSEMENT_30","Rangschikking van de laatste 30 dagen");
define("PRONO_CLASSEMENT_HEBDO","Wekelijkse rangschikking");
define("PRONO_CLASSEMENT_COMPLET","Volledige rangschikking");
define("PRONO_CLASSEMENT_SUITE","De rest...");
define("PRONO_CLASSEMENT_NON_CLASSE","Niet gerangschikt");
define("PRONO_CLASSEMENT_PREMIER","ste");   // Pour 1er    1st
define("PRONO_CLASSEMENT_SECOND","de");   // Pour 2nd     2nd
define("PRONO_CLASSEMENT_TROIS","de");   // Pour 3e       3rd
define("PRONO_CLASSEMENT_AUTRES","de");   // Pour xe       xth

// Inscription
define("PRONO_INSCRIPTION_TITRE","Inschrijving");
define("PRONO_INSCRIPTION_MDP","Vul uw paswoord opnieuw in");
define("PRONO_INSCRIPTION_PSEUDO_UTILISE","Deze loging werd reeds gebruikt !");
define("PRONO_INSCRIPTION_PSEUDO_TAILLE","Uw loging moet tussen de 4 en 20 karakters tellen !");
define("PRONO_INSCRIPTION_MAIL_UTILISE","Dit emailadres is reeds gebruikt !");
define("PRONO_INSCRIPTION_MAIL_VIDE","Het emailadres moet ingevuld worden !");
define("PRONO_INSCRIPTION_MAIL_INVALIDE_1","Emailadres");
define("PRONO_INSCRIPTION_MAIL_INVALIDE_2","is niet geldig");
define("PRONO_INSCRIPTION_JS_PSEUDO","Vul gebruikersnaam in !");
define("PRONO_INSCRIPTION_JS_MAIL","Vul emailadres in !");
define("PRONO_INSCRIPTION_JS_MAILVALID","Vul een geldig emailadres in !");
define("PRONO_INSCRIPTION_JS_MDP","Twee maal uw paswoord invullen !");
define("PRONO_INSCRIPTION_JS_DIFF","OPGELET, uw twee paswoorden zijn verschillend !");
define("PRONO_INSCRIPTION_JS_NOM","Vul uw naam in !");
define("PRONO_INSCRIPTION_JS_PRENOM","Vul uw voornaam in !");
define("PRONO_INSCRIPTION_JS_ADRESSE","Vul uw adres in !");
define("PRONO_INSCRIPTION_JS_POSTAL","Vul uw postcode in !");
define("PRONO_INSCRIPTION_JS_VILLE","Vul uw stad in !");
define("PRONO_INSCRIPTION_JS_PAYS","Vul uw land in !");
define("PRONO_INSCRIPTION_JS_NAISS_JOUR","Vul uw geboortedatum in !");
define("PRONO_INSCRIPTION_JS_NAISS_MOIS","Vul uw geboortemaand in !");
define("PRONO_INSCRIPTION_JS_NAISS_ANNEE","Vul uw geboortejaar in !");
define("PRONO_INSCRIPTION_JS_PROF","Vul uw beroep in !");
define("PRONO_INSCRIPTION_JS_TEL","Vul uw gsm-nummer in !");
define("PRONO_INSCRIPTION_SUCCES","Inschrijving met succes afgerond ! Een email met uw paswoord werd u verstuurd !");
define("PRONO_INSCRIPTION_CONNEXION","Verbinding");
define("PRONO_INSCRIPTION_ECHOUE","Het versturen van de email is mislukt !");

// Profil
define("PRONO_PROFIL_SUR","Bent u zeker op volgende account te verwijderen");
define("PRONO_PROFIL_SUPP","Account verwijderd !");
define("PRONO_PROFIL_ANCIEN_MDP","Oud paswoord niet ingevuld");
define("PRONO_PROFIL_MDP_2_FOIS","U moet het nieuwe paswoord twee maal invullen");
define("PRONO_PROFIL_MDP_2_FOIS_2","U moet het oude paswoord twee maal invullen");
define("PRONO_PROFIL_MDP_DIFF","Nieuwe paswoorden zijn verschillend");
define("PRONO_PROFIL_MDP_ERREUR","Oud paswoord niet correct");
define("PRONO_PROFIL_SUPP_2","Verwijder mijn account");
define("PRONO_PROFIL_TITRE","Account van");
define("PRONO_PROFIL_ANCIEN_MDP_2","Oud paswoord (in te vullen als u van paswoord wil veranderen)");
define("PRONO_PROFIL_NOUVEAU_MDP","Nieuw paswoord");
define("PRONO_PROFIL_NOUVEAU_MDP_2","Vul uw nieuw paswoord in");
define("PRONO_PROFIL_MAIL","Email"); // 0.82

// prono.inc
define("PRONO_INC_INSCRIPTION","Inschrijving");
define("PRONO_INC_HEBDO","Wekelijkse pronostiek");
define("PRONO_INC_MOIS","Maandelijkse pronostiek");
define("PRONO_INC_GENERAL","Algemene Rangschikking");

// DECONNEXION
define("DECONNEXION","Uitloggen is bezig...");

//Résultats
define("PRONO_RESULTATS_MOY","Misselmatig");
define("PRONO_RESULTATS_REUSSITE","geslaagd");
define("PRONO_RESULTATS_PROGR","Progressie");
define("PRONO_RESULTATS_POINTS","Punten");

// Bareme
define("PRONO_BAREME_TITRE","Barema");
define("PRONO_BAREME_TPS","U mag het rooster valideren tot ");
define("PRONO_BAREME_TPS2","uren voor het begin van de wedstrijd");

// Fiches joueurs   //0.82
define("FICHE_AGE","Leeftijd");
define("FICHE_DATE","Geboren op");
define("FICHE_DETAIL","Details van de gemaakte doelpunten");
define("FICHE_BUTS","doelpunten");

// Crédits
define("CREDITS_VERSION","Versie");
define("CREDITS_AUTEUR","Auteur");
define("CREDITS_SITE","Site");
define("CREDITS_FORUM","UEen vraag ?");
define("CREDITS_TRADUC","Nederlandse vertaling : Ken De Nil");


?>
