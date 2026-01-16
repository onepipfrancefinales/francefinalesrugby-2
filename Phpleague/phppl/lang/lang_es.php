<?php

// ADMINISTRATION

// Setup

define("SETUP_HOST_NAME","Host name");
define("SETUP_DATABASE","Nombre de la base de datos");
define("SETUP_LOGIN","Identificante");
define("SETUP_PASSWORD","Contraseña");
define("SETUP_TYPE","Tipo de instalacion");
define("SETUP_NORMALE","Installacion normal");
define("SETUP_MAJ","Actualizacion de la version");
define("SETUP_TITRE_SITE","Titulo de vuestra web (facultativo para la actualizacion de la v0.81)"); // 0.82
define("SETUP_URL_SITE","Direccion de vuestra web"); // 0.82
define("SETUP_PSEUDO","Login (para la administracion y para los pronosticos facultativo para la actualizacion de la v0.81)"); // 0.82
define("SETUP_MDP","Contraseña (para la administracion y para los pronosticos facultativo para la actualizacion de la v0.81)"); // 0.82
define("SETUP_MAIL","E-mail (facultativo para la actualizacion de la v0.81)"); // 0.82
define("SETUP_ERREUR","Impossible de realizar la demanda para");
define("SETUP_ERREUR_2","Mensage de error enviado por la base de datos");
define("SETUP_ID_INCORRECTS","Vuestros identificantes son incorrector !");
define("SETUP_TABLE","La tabla de");
define("SETUP_TABLE_2","a estado creada correctamente");
define("SETUP_TABLE_3","Créar la tabla de");
define("SETUP_TABLE_4","créar la cuenta del administrador para la gestion y los pronosticos");
define("SETUP_TABLE_5","La cuenta del administrador a estado creada correctamente");
define("SETUP_CONFIRMATION","Has configurado correctamente el script !");
define("SETUP_FIN","Para mas seguridad, tienes que esborrar el fichero install.php !
                    Luego, ves a <a href=\"admin\">administracion</a> para empezar a utilizar phppleague !");
define("SETUP_REMPLIR_CHAMP","Tienes que llenar todos los campos !");
define("SETUP_REPERTOIRE_SCRIPT","Répertorio del script");    // 0.82
define("SETUP_MAJ_ACHEVEE","Actualizacion terminada");    // 0.82
define("SETUP_MAJ_INCOH","Incoherencia");    // 0.82
define("SETUP_MAJ_INCOH_2","a marcado con la camiseta de");    // 0.82


//Menu
define("MENU_FICHES_CLUBS","Fichas Clubs");
define("MENU_ID","Id");
define("MENU_NOM","Nombre");
define("MENU_CREDITS","Créditos");
define("MENU_MEMBRES","Miembros");

// Championnats
define("LEAGUE","Campeonatos");
define("DATE","Fechas");
define("TEAM","Equipos");
define("MATCH","Partidos");
define("PARAMETRE","Parametros");
define("GENERER","Génerar"); //0.82
define("JOUEURS","Jugadores"); // 0.82
define("BUTEUR","Goleadores");
define("RESULT","Résultados");
define("EQUIPE","Equipos");
define("ADMIN_CHAMP_CREER","Crear un campeonato");

// Groupes championnats
define("EDITER","Editar");
define("GR_LEAGUE","Grupo de campeonatos");
define("ADMIN_GR_CHAMP_CREER","Créar un grupo de campeonatos");
define("ADMIN_GR_CHAMP_GENERER","Générar");



// Création d'un groupe de championnat
define("ADMIN_GR_CHAMPIONNATS_CREA","Créacion de un grupo de campeonatos");
define("ADMIN_GR_CHAMP_CREER_1","Nombre del grupo");

//Suppression d'un groupe de championnats
define("ADMIN_GR_CHAMPIONNATS_SUPP","Suppression de un grupo de campeonatos");
define("ADMIN_GR_CHAMPIONNATS_SUPP1","Esta seguro que quiere suprimir el campeonato");
define("ADMIN_GR_CHAMPIONNATS_SUPP2"," ?");

//Edition d'un groupe de championnats
define("ADMIN_GR_CHAMP_EDIT","Edicion del grupo de campeonatos");
define("ADMIN_GR_CHAMP_EDIT_1","Séleccionar los campeonatos a reagrupar en");
define("ADMIN_GR_CHAMP_EDIT_2","Séleccion");
define("ADMIN_GR_CHAMP_EDIT_3","Campeonatos a retirar del grupo");
define("ADMIN_GR_CHAMP_EDIT_4","Actualizar");
define("ADMIN_GR_CHAMP_EDIT_5","Lista actual");



//Suppression de championnat
define("ADMIN_CHAMPIONNATS_SUPP","Suppression de un campeonato");
define("ADMIN_CHAMPIONNATS_SUPP1","Esta seguro de querer suprimir el campeonato");
define("ADMIN_CHAMPIONNATS_SUPP2","con todos los partidos ?");

// Création de championnat
define("ADMIN_CHAMPIONNATS_CREA","Créacion de un campeonato");
define("ADMIN_CHAMPIONNATS_CREA2","Elegir");
define("ADMIN_JOURNEES_MSG3","Temporada");
define("ADMIN_CHAMP_CREER_2","Division");
define("ADMIN_CHAMP_CREER_3","Créar");
define("ADMIN_CHAMP_CREER_4","Temporada (1er año)");

// Equipes
define("ADMIN_CLUB_NOM","Nombre del Club :");
define("ADMIN_CLUBS_CREE","Créacion del Club");
define("ADMIN_EQUIPE_TITRE","Edicion de los équipos de");
define("ADMIN_EQUIPE_1","Clubs para suprimir :");
define("ADMIN_EQUIPE_2","Clubs à añadir en");
define("ADMIN_EQUIPE_3","(Eleccion multiple possible con las teclas SHIFT y CTRL)");
define("ADMIN_EQUIPE_4","Clubs para suprimir de");

// Dates
define("ADMIN_DATES_TITRE","Datos de las jornadas de");
define("ADMIN_JOURNEES_MSG9","Journada n°");
define("ADMIN_JOURNEES_MSG10","bajo la forma <b>DDMMAAAA<b>");
define("ADMIN_DATES_1","Horario de los partidos por defecto");
define("ADMIN_DATES_2","Attencion, haciendo esta operacion, poneis todos los partidos de la temporada a la misma hora. Si solo quieres cambiar la hora de un partido ou de una jornada, utiliza mas bien los");
define("ADMIN_DATES_HEURES","h");
define("ADMIN_DATES_MINUTES","min");
define("ENVOI","Envio");
define("ADMIN_DATES_3","Vuestro campeonato tiene un numero impar de equipos. Añade un equipo 'exencion'.");
define("ADMIN_DATES_4","Ninguna");
define("ADMIN_DATES_5","Primero tiene que crear los equipos que evolucionan en este campeonato. Ir a");


// Matchs
define("JOURNEE_MIROIR","Journada Espejo ? :");
define("ADMIN_MATCHS_TITRE","Partidos de");
define("ADMIN_COHERENCE_TITRE","Control de coherencia del calendario");
define("ADMIN_COHERENCE_MSG2","Journada");
define("ADMIN_COHERENCE_MSG3"," coherente");
define("ADMIN_COHERENCE_MSG4","<b>incoherencia o incompleta</b>");
define("ADMIN_COHERENCE_MSG5","Este campeonato parece coherente");
define("ADMIN_COHERENCE_MSG6","Este campeonato no parece coherente");
define("ADMIN_COHERENCE_MSG7","Effectuar un control de coherencia");
define("DOMICILE","Casa");
define("EXTERIEUR","Fuera");
define("ADMIN_MATCHS_1","Las jornadas no han sido creadas. Primero tienes que ir en");

// Paramètres
define("ADMIN_PARAM_MSG2","Puntos por victoria ?");
define("ADMIN_PARAM_MSG3","Puntos por un empate ?");
define("ADMIN_PARAM_MSG4","Puntos por partido perdido ?");
define("ADMIN_PARAM_MSG5","Numero de equipos que ascienden directamente ?");
define("ADMIN_PARAM_MSG6","Numero de equipos que ascienden indirectamente ?");
define("ADMIN_PARAM_MSG7","Numero de equipos que descienden ?");
define("ADMIN_PARAM_MSG8","Vuestro equipo preferido ?");
define("ADMIN_PARAM_TITRE","Parametros de");
define("ADMIN_TAPVERT_TITRE","Tapete verde de");
define("ADMIN_PARAM_MSG9","Puntos por pronostico exacto");  
define("ADMIN_PARAM_MSG10","Puntos para la participacion a un pronostico");
define("ADMIN_PARAM_MSG11","Pseudonimo del pronosticador référencia");
define("ADMIN_PARAM_MSG12","Indicar el numero de horas entre el fin de la validacion de la quiniela y el partido");
define("ADMIN_PARAM_MSG13","Pronosticos de");
define("ADMIN_TAPVERT_MSG1","Aqui, podeis gestionar los puntos de penalidad (sanciones administrativas, etc ...)");
define("ADMIN_TAPVERT_MSG3","Entrar los puntos de pénalidad (Ej: -1, -2, ...)");
define("ADMIN_TAPVERT_MSG4","Activar las fichas de los clubs ?");
define("ADMIN_TAPVERT_MSG5","Activar los pronosticos ?");
define("ADMIN_TAPVERT_MSG6","Activar las estimaciones en la pagina de la clasificacion ? (Atencion, esta opcion ralentiza el cargamiento de la pagina)"); // 0.82


// Résultats
define("ADMIN_RESULTS_TITRE","Résultados de");
define("ADMIN_RESULTS_1","Exempcion");

// Buteurs
//define("ADMIN_JOUEURS_TITRE","Fiches joueurs");
define("ADMIN_BUTEUR_TITRE","Goleadores de");

//Graphiques
define("ADMIN_GRAPH_TITRE","Généracion de los graficos y de los pronosticos de");
define("ADMIN_GRAPH","La créacion de los graficos y de las classificaciones han sido realizados correctamente"); //0.82
define("ADMIN_GRAPH_PRONO","La classificacion de los miembros ha estado realizada correctamente"); //0.82
define("ADMIN_GRAPH_1","La creacion de los graficos no ha funcionado, intentadlo de nuevo !");
define("ADMIN_GRAPH_2","Esta maniobra debe realizarse despues cada nuevo resultado. Puede durar bastante tiempo...");
define("ADMIN_GRAPH_3","Evolucion de la clasificacion de");
define("ADMIN_GRAPH_4","Error durante la creacion del grafico, intentadlo de nuevo !<br />
                      Si el problema perdura, modificar el max_execution_time en php.ini.");
define("ADMIN_GRAPH_5","segundos");
define("ADMIN_GRAPH_6","en");

// Mini-classement
define("ADMIN_MINI_1","Mini-Classificacion");
define("ADMIN_MINI_2","Elegir la presentacion");
define("ADMIN_MINI_3","Elegir el tipo de clasificacion");
define("ADMIN_MINI_4","Elegir el campeonato");
define("ADMIN_MINI_5","Numero de equipos por delante del equipo preferido");
define("ADMIN_MINI_6","Editar el codigo");
define("ADMIN_MINI_7","Observaciones");
define("ADMIN_MINI_8","Campeonato no introducido !");
define("ADMIN_MINI_9","Tipo de clasificacion no introducido !");
define("ADMIN_MINI_10","Presentacion no introducida !");
define("ADMIN_MINI_11","Codigo invalido !");
define("ADMIN_MINI_12","Ojeada");
define("ADMIN_MINI_13","Aqui tiene el codigo que tiene que agregar a vuestras paginas :");
define("ADMIN_MINI_14","Numero de equipos por debajo del equipo preferido");
define("ADMIN_MINI_15","Quiere dejar el link sobre los equipos ?");
define("ADMIN_MINI_17","No anunciar la clasificacion completa");
define("ADMIN_MINI_18","Anunciar la clasificacion completa");
define("ADMIN_MINI_19","Numero de equipos por debajo no informado !");
define("ADMIN_MINI_20","Numero de equipos por debajo, no informado!");
define("ADMIN_MINI_21","El codigo es valido !<br /> Reajustad si necesario la talla de la i frame.");     // 0.82
define("ADMIN_MINI_22","Color");
define("ADMIN_MINI_23","Barras");
define("ADMIN_MINI_24","Editor");

// FICHIER admin/classe.php
define("ADMIN_CLASSE_TITRE","Edicion de las clases");
define("ADMIN_CLASSE_SUPP1","Supression de la classe :");
define("ADMIN_CLASSE_BUTTON_SUPP","Supression classe");
define("ADMIN_CLASSE_CREA","<b>Añadir</b> una classe");
define("ADMIN_CLASSE_NOM","Nombre de la classe :");
define("ADMIN_CLASSE_BUTTON_CREA","Créacion classe");
define("ADMIN_CLASSE_BUTTON_MSG3","Para <b>modificar</b> el nombre de una clase, utilizad PHPMyAdmin");
define("ADMIN_CLASSE_1","Classificacion de las classes : 1 : 1ero, 2 : 2ndo...");
define("ADMIN_CLASSE_2","<b>Paramètros grabados !</b>");
define("ADMIN_CLASSE_3","No podeis suprimir la classe porque esta utilizada por");
define("ADMIN_CLASSE_4","informacion(es). Suprimir la(s) informacion(es) contenido(s) en esta classe antes de suprimirla !");
define("ADMIN_CLASSE_5","Informaciones");
define("ADMIN_CLASSE_CLASSE","Classes");  // 0.82
define("ADMIN_CLASSE_RENS","Informaciones");  // 0.82
define("ADMIN_CLASSE_GEST","Gestion de clubs");  // 0.82



// FICHIER admin/gestequipes.php
define("ADMIN_GESTEQUIPE_TITRE","Consultacion de los clubs");  // 0.82
define("ADMIN_GESTEQUIPE_2","Elegir un club : ");  // 0.82
define("ADMIN_EQUIPE_17","Edicion de las informaciones del equipo");
define("ADMIN_GESTEQUIPE_1","Arreglo de los parametros de : "); // 0.82
define("ADMIN_GESTEQUIPE_3","Nombre de la informacion"); // 0.82
define("ADMIN_GESTEQUIPE_4","Valor de la informacion"); // 0.82
define("ADMIN_EQUIPE_5","Url");
define("ADMIN_EQUIPE_6","Anunciar");
define("ADMIN_EQUIPE_7","Url logo : ");
define("ADMIN_EQUIPE_8", "No informado");


// FICHIER admin/rens.php
define("ADMIN_RENS_TITRE","Edicion de las informaciones");
define("ADMIN_RENS_SUPP1","<b>Supression</b> de una informacion ");
define("ADMIN_RENS_BUTTON_SUPP","Supression informacion");
define("ADMIN_RENS_CREA","<b>Añadir</b> una informacion");
define("ADMIN_RENS_NOM","Nombre de la informacion : ");
define("ADMIN_RENS_BUTTON_CREA","Créacion de informaciones");
define("ADMIN_RENS_CREA2","<b>Créacion efectuada</b>");
define("ADMIN_RENS_SUPP2","<b>Supression efectuada</b>");
define("ADMIN_RENS_1"," en la classe : ");
define("ADMIN_RENS_2","No podeis suprimir esta informacion porque esta utilizada ");
define("ADMIN_RENS_3"," veces en las informaciones.");
define("ADMIN_RENS_4","<b>Insertar</b> las informaciones de las clases :");
define("ADMIN_RENS_5","<b>Suprimir</b> los parametros de las informaciones (Eleccion multiple possible con las teclas SHIFT y CTRL) : ");
define("ADMIN_RENS_6"," en ");
define("ADMIN_RENS_7","Añadir");
define("ADMIN_RENS_8","Suprimir");
define("ADMIN_RENS_9","Ordenar las informaciones : 1 para el 1ero, 2 para el 2ndo...");
define("ADMIN_RENS_10","<b>Editar</b> las informaciones");
define("ADMIN_RENS_11","Grabar");
define("ADMIN_RENS_12","Nombre de la informacion");
define("ADMIN_RENS_13","Url de la informacion (facultativo)");
define("ADMIN_RENS_14","Informacion à classificar :");
define("ADMIN_RENS_15","Todas las informaciones estan clasificadas");
define("ADMIN_RENS_16","Etes-vous sure de vouloir supprimer le renseignement");
define("ADMIN_RENS_17","Si");
define("ADMIN_RENS_18","No");

/* ZONE PUBLIQUE : CONSULTATION */


// Entete et index
define("CONSULT_HOME","Inicio");
define("CONSULT_CALENDAR","Calendarios");
define("CONSULT_CLASSEMENT","Classificacion");
define("CONSULT_BUTEUR","Goleadores");
define("CONSULT_DUEL","Duelos");
define("MENU_UTILISATEUR","Menu utilizador");
define("CONSULT_PRONOSTICS","Pronosticos");      // 0.82




//classement
define("CONSULT_CLMNT_MSG1","Tipo de clasificacion :");
define("ADMIN_TAPVERT_MSG2","Que campeonato :");
define("GENERAL","Général");
define("ATTAQUE","Ataque");
define("DEFENSE","Défensa");
define("GOALDIFF","Diff");
define("CONSULT_CLMNT_MSG2"," de la jornada ");
define("CONSULT_CLMNT_MSG3"," à la jornada ");
define("CONSULT_CLMNT_MSG4","Classificacion general, jornadas ");
define("CONSULT_CLMNT_MSG5"," a ");
define("CONSULT_CLMNT_MSG6","Ultima jornada : n°");
define("CONSULT_CLMNT_MSG61","Jornada precedente (n°");
define("CONSULT_CLMNT_MSG62","Proxima jornada : n°");
define("CONSULT_CLMNT_MSG7","ESTIMACION DE LOS RESULTADOS DE LA PROXIMA JORNADA :");
define("CONSULT_CLMNT_MSG8","Estim. proxima jornada (n°");
define("CONSULT_CLMNT_MSG9","Proxima jornada : n° ");
define("CONSULT_CLMNT_MSG10","Classificacion cada, journadas ");
define("CONSULT_CLMNT_MSG11","Classificacion de los ataques, jornadas ");
define("CONSULT_CLMNT_MSG12","Classificacion de las défensas, jornadas ");
define("CONSULT_CLMNT_MSG13","Classificacion de la diferencia de goles, jornadas ");
define("CONSULT_CLMNT_MSG14","Classement à l'extérieur, journées ");
define("CLMNT_POSITION","Pl");
define("CLMNT_EQUIPE","Equipo");
define("CLMNT_POINTS","Puntos");
define("CLMNT_JOUES"," J ");
define("CLMNT_VICTOIRES","V ");
define("CLMNT_NULS","E ");
define("CLMNT_DEFAITES","P ");
define("CLMNT_BUTSPOUR","GF ");
define("CLMNT_BUTSCONTRE","GC ");
define("CLMNT_DIFF","Diff. ");
define("EXEMPT","Exempt");
define("LEAGUE_LANGUAGE","spanish");

// Matchs
define("CONSULT_MATCHS","Consultacion de los calendarios");
define("CONSULT_MATCHS_MSG1","Que campeonato quiere consultar ?");
define("CONSULT_MATCHS_MSG2"," el ");

// FICHIER consult/equipes.php
define("CONSULT_INDEX_1","Consultacion de equipos");//0.82
define("CONSULT_INDEX_2","Fundacion");//0.82

// Detail equipe
define("VICTOIRE","VICTORIA ");
define("NUL"," EMPATE ");
define("DEFAITE"," PERDIDO");
define("JOURNEE","n°");
define("DETAILEQ_TITRE","Eleccion del equipo");
define("DETAILEQ_1","Equipo :");


// calendrier_1.php
define("CONSULT_CALENDAR_1","Esta jornada no existe");
define("CONSULT_CALENDAR_2","Journada precedente");
define("CONSULT_CALENDAR_3","Journada siguiente");
define("CONSULT_CALENDAR_4","Partidos anteriores journada n°");
define("CONSULT_CALENDAR_5","Ultimos resultados : jornada n°");


// divers
define("RETOUR","Volver");

// FICHIER admin/clubs.php
define("ADMIN_CLUB_TITRE","Edicion de los clubs");
define("ADMIN_CLUB_SUPP1","<b>Supression</b> de un club ");
define("ADMIN_CLUB_BUTTON_SUPP","Supression club");
define("ADMIN_CLUB_CREA","<b>Añadir</b> un club");
define("ADMIN_CLUB_BUTTON_CREA","Créacion club");
define("ADMIN_CLUB_BUTTON_MSG3","Para <b>modificar</b> el nombre de un Club, utilizad PHPMyAdmin");
define("ADMIN_CLUB_CREA2","<b>Créacion efectuada</b>");
define("ADMIN_CLUB_SUPP2","<b>Supression efectuada</b>");




// *********************************************
// ***** NEW ITEMS ADDED DECEMBER 22th 2001 ****
// *********************************************


// consult/buteurs
define("CONSULT_BUTEUR_MSG1","Que grupo de campeonato ?");
define("CONSULT_BUTEUR_MSG2","Classificacion de goleadores");
define("CONSULT_BUTEUR_TITRE_1","Classificacion de goleadores");    // 0.82
define("CONSULT_BUTEUR_MSG3","Grupo de campeonatos : ");
define("CONSULT_BUTEUR_MSG4","comprendiendo : ");
define("CONSULT_BUTEUR_MSG5","Que équipo ?");
define("DUEL_MSG1","Elegid los adversarios : ");
define("DUEL_MSG2"," Duelos");
define("DUEL_MSG3","Aqui tiene las posibilidades del ordenador ");
define("DUEL_MSG4","PROBABILIDADES : ");
define("DUEL_MSG5","Las probabilidades son el reflejo de un calculo matematico simple");

// consult/club
define("CONSULT_CLUB_1","Classificacion");
define("CONSULT_CLUB_2","Calendario y resultados");
define("CONSULT_CLUB_3","Historico");
define("CONSULT_CLUB_4","Estadisticas");

// Sécurité
define("ADMIN_SECURITE_CLUB","Esta seguro de querer suprimir el Club siguiente :");
define("ADMIN_SECURITE_RENS","Esta seguro de querer suprimir la informacion siguiente :");
define("ADMIN_SECURITE_SAISONS","Esta seguro de querer suprimir la temporada siguiente ");
define("ADMIN_SECURITE_SAISONS_2","y los campeonatos y partidos liados");
define("ADMIN_SECURITE_CLASSE","Esta seguro de querer suprimir la classe siguiente :");
define("ADMIN_SECURITE_CHAMP","Esta seguro de querer suprimir el campeonato siguiente :");

// 25/12/2003

//define("ADMIN_BUTEUR_TITRE","Jugadores de ");
define("ADMIN_BUTEUR_TITRE2","Goleadores de ");

// Joueurs et buteurs
define("ADMIN_BUTEURS_TITRE","Edicion de los goleadores");
define("ADMIN_BUTEURS_MSG1","Que campeonato quiere insertar ?");
define("ADMIN_BUTEURS_MSG2","Que jornada quiere insertar ?");
define("ADMIN_BUTEURS_LAST","Préc.");
define("ADMIN_BUTEURS_NEXT","Suiv.");
define("ADMIN_BUTEURS_MSG3","validacion_y_goleador_siguiente"); // laisser des _ à la place des espaces
define("ADMIN_JOUEURS_TITRE","Edicion de los jugadores");
define("ADMIN_JOUEURS_MSG1","<b>Supression</b> de un jugador <br />Esta manipulacion suprime igualmente les buts marqués par le joueur au cours de ce championnat"); // 0.82
define("ADMIN_JOUEURS_MSG2","Suppression");
define("ADMIN_JOUEURS_MSG3","<b>Añadir</b> un jugador");
define("ADMIN_JOUEURS_MSG4","Nombre :  ");
define("ADMIN_JOUEURS_MSG5","Apellidos :  ");
define("ADMIN_JOUEURS_MSG6","Su équipo :  "); // 0.82
define("ADMIN_JOUEURS_MSG7","URL Foto : ");
define("ADMIN_JOUEURS_MSG8","Fecha de nacimiento : (DDMMAAAA) ");
define("ADMIN_JOUEURS_MSG9","Puesto en el terreno :  ");
define("ADMIN_JOUEURS_MSG10","Para <b>modificar</b> el nombre de un jugador, utilizad PHPMyAdmin");
define("ADMIN_JOUEURS_1","<b>Insertar</b> los goleadores partido tras partido. Para <b>suprimir</b> un goleador, haz click.");
define("ADMIN_JOUEURS_2","Goles");
define("ADMIN_JOUEURS_3","équipo de");
define("ADMIN_JOUEURS_TRANSFERT","Transférir"); // 0.82
define("ADMIN_JOUEURS_TRANSFERT_VERS","a transférir hacia"); // 0.82
define("ADMIN_JOUEURS_EDITER","Elegir el jugador a editar :"); // 0.82
define("ADMIN_JOUEURS_EDITER_2","Edicion del jugador :"); // 0.82


// Pronostics   // 0.82

// Menu identifié
define("PRONO_MENU_MON_COMPTE","MI CUENTA");
define("PRONO_MENU_MES_CLASSEMENTS","MI CLASSIFICACION");
define("PRONO_MENU_MES_PRONOS","MIS PRONOSTICOS");
define("PRONO_MENU_LES_CHAMPIONNATS","LOS CAMPEONATOS");
define("PRONO_MENU_BIENVENUE","Bienvenida");
define("PRONO_MENU_POINTS","PUNTOS");
define("PRONO_MENU_MON_PROFIL","MI PROFIL");
define("PRONO_MENU_DECONNEXION","DESCONEXION");
define("PRONO_MENU_GENERAL","GENERAL");
define("PRONO_MENU_MOIS","MES");
define("PRONO_MENU_PROCHAINE_GRILLE","PROXIMA QUINIELA");
define("PRONO_MENU_DERNIERE_GRILLE","ULTIMA QUINIELA");
define("PRONO_MENU_MES_RESULTATS","MIS RESULTADOS");
define("PRONO_MENU_BAREME","BAREME");
define("PRONO_MENU_AIDE","AYUDA");  // 0.82

// Menu non identifié
define("PRONO_MENU_LOGIN","LOGIN");
define("PRONO_MENU_MDP","CONTRASEÑA");
define("PRONO_MENU_OUBLIE","CONTRASEÑA OLVIDADA ?");

// Mot de passe oublié
define("PRONO_OUBLIE_PERDU","Contraseña perdida");
define("PRONO_OUBLIE_TEXTE_1","Entrad vuestro e mail, una constraseña nueva os sera enviada.");
define("PRONO_OUBLIE_TEXTE_2","Vuestra nueva contraseña ha sido enviada en vuestro e mail");
define("PRONO_OUBLIE_TEXTE_3","La contraseña no ha podido ser enviada !<br />Pedirlo otra vez dentro de un instante, gracias.");


//accueil
define("PRONO_ACCUEIL_PRESENTATION","os presenta sus pronosticos para la proxima quiniela");

// GRILLE
define("PRONO_GRILLE_PRONO","Prono");
define("PRONO_GRILLE_TEMPS","Timpo restante");
define("PRONO_GRILLE_PRECEDENT","PARTIDOS PRECEDENTES");
define("PRONO_GRILLE_SUIVANT","PARTIDOS SIGUIENTES");
define("PRONO_GRILLE_SCORE","Resultado real");
define("PRONO_GRILLE_EXPIRE","Expirado");

// Valider grille
define("PRONO_GRILLE_CONFIRME","Vuestros pronosticos han sido tomados en cuenta !");
define("PRONO_GRILLE_PROCHAINE","Proxima quiniela");


// Classements
define("PRONO_CLASSEMENT_GENERAL","Classificacion general");
define("PRONO_CLASSEMENT_PSEUDO","Pseudo");
define("PRONO_CLASSEMENT_POINTS","Puntos");
define("PRONO_CLASSEMENT_PARTICIPATIONS","Participaciones");
define("PRONO_CLASSEMENT_GENERAL_MAJ","CLASSIFICACION GÉNÉRAL");
define("PRONO_CLASSEMENT_MOIS","CLASSIFICACION DEL MES");
define("PRONO_CLASSEMENT_30","CLASSIFICACION DE LOS ULTIMOS 30 DIAS");
define("PRONO_CLASSEMENT_HEBDO","CLASSIFICACION SEMANA");
define("PRONO_CLASSEMENT_COMPLET","Classificacion completa");
define("PRONO_CLASSEMENT_SUITE","La continuacion...");
define("PRONO_CLASSEMENT_NON_CLASSE","No classificado");
define("PRONO_CLASSEMENT_PREMIER","ero");   // Pour 1er    1st
define("PRONO_CLASSEMENT_SECOND","ndo");   // Pour 2nd     2nd
define("PRONO_CLASSEMENT_TROIS","ero");   // Pour 3e       3rd
define("PRONO_CLASSEMENT_AUTRES","arto");   // Pour xe       xth

// Inscription
define("PRONO_INSCRIPTION_TITRE","Inscripcion");
define("PRONO_INSCRIPTION_MDP","Insertar otra vez vuestra contraseña");
define("PRONO_INSCRIPTION_PSEUDO_UTILISE","Este pseudonimo ya esta utilizado !");
define("PRONO_INSCRIPTION_PSEUDO_TAILLE","Vuestro pseudonimo tiene que ser entre 4 y 20 letras !");
define("PRONO_INSCRIPTION_MAIL_UTILISE","Esta direccion e mail ya esta utilizada !");
define("PRONO_INSCRIPTION_MAIL_VIDE","El campo e mail no puede estar vacio !");
define("PRONO_INSCRIPTION_MAIL_INVALIDE_1","Direccion email");
define("PRONO_INSCRIPTION_MAIL_INVALIDE_2","no es valida");
define("PRONO_INSCRIPTION_JS_PSEUDO","Indicad vuestro pseudonimo !");
define("PRONO_INSCRIPTION_JS_MAIL","Indicad vuestro e mail !");
define("PRONO_INSCRIPTION_JS_MAILVALID","Entrar un email valido !");
define("PRONO_INSCRIPTION_JS_MDP","Indicad dos veces vuestra contraseña !");
define("PRONO_INSCRIPTION_JS_DIFF","CUIDADO, vuestras contraseñas no coinciden !");
define("PRONO_INSCRIPTION_JS_NOM","Indicad vuestro apellido !");
define("PRONO_INSCRIPTION_JS_PRENOM","Indicad vuestro nombre !");
define("PRONO_INSCRIPTION_JS_ADRESSE","Indicad vuestra direccion !");
define("PRONO_INSCRIPTION_JS_POSTAL","Indicad vuestro codigo postal !");
define("PRONO_INSCRIPTION_JS_VILLE","Indicad vuestra ciudad !");
define("PRONO_INSCRIPTION_JS_PAYS","Indicad vuestro pais !");
define("PRONO_INSCRIPTION_JS_NAISS_JOUR","Indicad vuestra fecha de nacimiento !");
define("PRONO_INSCRIPTION_JS_NAISS_MOIS","Indicad vuestro mes de nacimiento !");
define("PRONO_INSCRIPTION_JS_NAISS_ANNEE","Indicad vuestro año de nacimiento !");
define("PRONO_INSCRIPTION_JS_PROF","Indicad vuestra profesion !");
define("PRONO_INSCRIPTION_JS_TEL","Veuillez indiquer votre numeros de mobile !");
define("PRONO_INSCRIPTION_SUCCES","Inscripcion terminada ! Un email os ha sido enviado para informarle de vuestra contraseña !");
define("PRONO_INSCRIPTION_CONNEXION","Connexion");
define("PRONO_INSCRIPTION_ECHOUE","El envio de e mail no ha funcionado !");

// Profil
define("PRONO_PROFIL_SUR","Esta seguro que quiere suprimir la cuenta de");
define("PRONO_PROFIL_SUPP","Cuenta suprimida !");
define("PRONO_PROFIL_ANCIEN_MDP","Ultima contraseña no informada");
define("PRONO_PROFIL_MDP_2_FOIS","Tiene que entrar su contraseña dos veces");
define("PRONO_PROFIL_MDP_2_FOIS_2","Tienes que entrar tu contraseña 2 veces");
define("PRONO_PROFIL_MDP_DIFF","Nuevas contraseñas diferentes");
define("PRONO_PROFIL_MDP_ERREUR","Ancien mot de passe erroné");
define("PRONO_PROFIL_SUPP_2","Supprimer mon compte");
define("PRONO_PROFIL_TITRE","Compte de");
define("PRONO_PROFIL_ANCIEN_MDP_2","Ancien mot de passe (à compléter si vous changer de mot de passe)");
define("PRONO_PROFIL_NOUVEAU_MDP","Nouveau mot de passe");
define("PRONO_PROFIL_NOUVEAU_MDP_2","Resaisissez votre nouveau mot de passe");
define("PRONO_PROFIL_MAIL","E-mail"); // 0.82

// prono.inc
define("PRONO_INC_INSCRIPTION","INSCRIPCION");
define("PRONO_INC_HEBDO","CLASSIFICACION SEMANA");
define("PRONO_INC_MOIS","CLASSIFICACION DEL MES");
define("PRONO_INC_GENERAL","CLASSIFICACION GENERAL");

// DECONNEXION
define("DECONNEXION","Desconectando...");

//Résultats
define("PRONO_RESULTATS_MOY","Media");
define("PRONO_RESULTATS_REUSSITE","Logro");
define("PRONO_RESULTATS_PROGR","Progression");
define("PRONO_RESULTATS_POINTS","Puntos");

// Bareme
define("PRONO_BAREME_TITRE","Barèmes");
define("PRONO_BAREME_TPS","Puede validar la quiniela hasta");
define("PRONO_BAREME_TPS2","hora(s) antes del inicio del partido");

// Fiches joueurs   //0.82
define("FICHE_AGE","Edad");
define("FICHE_DATE","Nacido el");
define("FICHE_DETAIL","Detalle de los goles");
define("FICHE_BUTS","gol(es)");

// Crédits
define("CREDITS_VERSION","Version");
define("CREDITS_AUTEUR","Autor");
define("CREDITS_SITE","Web");
define("CREDITS_FORUM","Una pregunta ?");
define("CREDITS_TRADUC","Traduction anglaise : Curtis LEMAY");


?>

