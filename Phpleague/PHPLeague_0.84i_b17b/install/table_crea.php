<?php

$phpl_buteurs = "CREATE TABLE IF NOT EXISTS `phpl_buteurs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_match` int(10) unsigned DEFAULT NULL,
  `id_effectif` smallint(5) unsigned NOT NULL DEFAULT '0',
  `buts` tinyint(4) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des buteurs'";

$phpl_championnats = "CREATE TABLE IF NOT EXISTS `phpl_championnats` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_division` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_saison` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des championnats'";

$phpl_classe = "CREATE TABLE IF NOT EXISTS `phpl_classe` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `rang` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des classes'";

$phpl_clmnt = "CREATE TABLE IF NOT EXISTS `phpl_clmnt` (
  `NOM` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `POINTS` smallint(4) unsigned DEFAULT NULL,
  `JOUES` tinyint(3) unsigned DEFAULT NULL,
  `G` tinyint(3) unsigned DEFAULT NULL,
  `N` tinyint(3) unsigned DEFAULT NULL,
  `P` tinyint(3) unsigned DEFAULT NULL,
  `BUTSPOUR` smallint(4) unsigned DEFAULT NULL,
  `BUTSCONTRE` smallint(4) unsigned DEFAULT NULL,
  `DIFF` smallint(4) DEFAULT NULL,
  `PEN` tinyint(2) DEFAULT NULL,
  `DOMPOINTS` smallint(4) unsigned DEFAULT NULL,
  `DOMJOUES` tinyint(3) unsigned DEFAULT NULL,
  `DOMG` tinyint(3) unsigned DEFAULT NULL,
  `DOMN` tinyint(3) unsigned DEFAULT NULL,
  `DOMP` tinyint(3) unsigned DEFAULT NULL,
  `DOMBUTSPOUR` smallint(4) unsigned DEFAULT NULL,
  `DOMBUTSCONTRE` smallint(4) unsigned DEFAULT NULL,
  `DOMDIFF` smallint(4) DEFAULT NULL,
  `EXTPOINTS` smallint(4) unsigned DEFAULT NULL,
  `EXTJOUES` tinyint(3) unsigned DEFAULT NULL,
  `EXTG` tinyint(3) unsigned DEFAULT NULL,
  `EXTN` tinyint(3) unsigned DEFAULT NULL,
  `EXTP` tinyint(3) unsigned DEFAULT NULL,
  `EXTBUTSPOUR` smallint(4) unsigned DEFAULT NULL,
  `EXTBUTSCONTRE` smallint(4) unsigned DEFAULT NULL,
  `EXTDIFF` tinyint(4) DEFAULT NULL,
  `ID_EQUIPE` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ID_CHAMP` tinyint(3) unsigned NOT NULL DEFAULT '0',
  KEY `ID_CHAMP` (`ID_CHAMP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des classements'";

$phpl_clmnt_cache = "CREATE TABLE IF NOT EXISTS `phpl_clmnt_cache` (
  `NOM` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `POINTS` smallint(4) unsigned DEFAULT NULL,
  `JOUES` tinyint(3) unsigned DEFAULT NULL,
  `G` tinyint(3) unsigned DEFAULT NULL,
  `N` tinyint(3) unsigned DEFAULT NULL,
  `P` tinyint(3) unsigned DEFAULT NULL,
  `BUTSPOUR` smallint(4) unsigned DEFAULT NULL,
  `BUTSCONTRE` smallint(4) unsigned DEFAULT NULL,
  `DIFF` smallint(4) DEFAULT NULL,
  `PEN` tinyint(2) DEFAULT NULL,
  `DOMPOINTS` smallint(4) unsigned DEFAULT NULL,
  `DOMJOUES` tinyint(3) unsigned DEFAULT NULL,
  `DOMG` tinyint(3) unsigned DEFAULT NULL,
  `DOMN` tinyint(3) unsigned DEFAULT NULL,
  `DOMP` tinyint(3) unsigned DEFAULT NULL,
  `DOMBUTSPOUR` smallint(4) unsigned DEFAULT NULL,
  `DOMBUTSCONTRE` smallint(4) unsigned DEFAULT NULL,
  `DOMDIFF` smallint(4) DEFAULT NULL,
  `EXTPOINTS` smallint(4) unsigned DEFAULT NULL,
  `EXTJOUES` tinyint(3) unsigned DEFAULT NULL,
  `EXTG` tinyint(3) unsigned DEFAULT NULL,
  `EXTN` tinyint(3) unsigned DEFAULT NULL,
  `EXTP` tinyint(3) unsigned DEFAULT NULL,
  `EXTBUTSPOUR` smallint(4) unsigned DEFAULT NULL,
  `EXTBUTSCONTRE` smallint(4) unsigned DEFAULT NULL,
  `EXTDIFF` tinyint(4) DEFAULT NULL,
  `ID_EQUIPE` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ID_CHAMP` tinyint(3) unsigned NOT NULL DEFAULT '0',
  KEY `ID_CHAMP` (`ID_CHAMP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table du cache des classements'";

$phpl_clmnt_graph = "CREATE TABLE IF NOT EXISTS `phpl_clmnt_graph` (
  `id_equipe` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fin` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `classement` tinyint(3) unsigned NOT NULL DEFAULT '0',
  KEY `id_equipe` (`id_equipe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des classements graphique'";

$phpl_clmnt_pronos = "CREATE TABLE IF NOT EXISTS `phpl_clmnt_pronos` (
  `id_champ` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_membre` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pseudo` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `points` smallint(5) unsigned NOT NULL DEFAULT '0',
  `participation` smallint(3) unsigned NOT NULL DEFAULT '0',
  `type` enum('hebdo','mensuel_30_jours','mensuel_en_cours','general') COLLATE latin1_general_ci NOT NULL DEFAULT 'hebdo',
  KEY `id_membre` (`id_membre`),
  KEY `id_champ` (`id_champ`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des classements pronostics'";

$phpl_clubs = "CREATE TABLE IF NOT EXISTS `phpl_clubs` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `url_logo` tinytext COLLATE latin1_general_ci NOT NULL,
  `url_photo` tinytext COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des clubs'";

$phpl_compo = "CREATE TABLE IF NOT EXISTS `phpl_compo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_match` int(10) unsigned DEFAULT NULL,
  `id_effectif` smallint(5) unsigned NOT NULL DEFAULT '0',
  `matchs` tinyint(4) DEFAULT NULL,
  `remp` int(1) NOT NULL,
  `tps` int(3) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des titulaires'";

$phpl_compocj = "CREATE TABLE IF NOT EXISTS `phpl_compocj` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_match` int(10) unsigned DEFAULT NULL,
  `id_effectif` smallint(5) unsigned NOT NULL DEFAULT '0',
  `CJ` tinyint(4) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des cartons jaunes'";

$phpl_compocr = "CREATE TABLE IF NOT EXISTS `phpl_compocr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_match` int(10) unsigned DEFAULT NULL,
  `id_effectif` smallint(5) unsigned NOT NULL DEFAULT '0',
  `CR` tinyint(4) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des cartons rouges'";

$phpl_convocation = "CREATE TABLE IF NOT EXISTS `phpl_convocation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heure` varchar(5) NOT NULL DEFAULT '',
  `lieux` varchar(255) NOT NULL DEFAULT '',
  `accompagnateurs` varchar(255) NOT NULL DEFAULT '',
  `id_match` int(11) NOT NULL DEFAULT '0',
  `id_equipe` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des convocations'";

$phpl_convoques = "CREATE TABLE IF NOT EXISTS `phpl_convoques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_effectif` int(11) NOT NULL DEFAULT '0',
  `id_convocation` int(11) NOT NULL DEFAULT '0',
  `transmis` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `confirm` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `ok` enum('0','1') COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des états des convocations'";

$phpl_divisions = "CREATE TABLE IF NOT EXISTS `phpl_divisions` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des divisions'";

$phpl_donnee = "CREATE TABLE IF NOT EXISTS `phpl_donnee` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom` text COLLATE latin1_general_ci NOT NULL,
  `id_clubs` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_rens` smallint(5) unsigned NOT NULL DEFAULT '0',
  `etat` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `url` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  KEY `id` (`id`),
  KEY `id_rens` (`id_rens`),
  KEY `id_clubs` (`id_clubs`),
  KEY `etat` (`etat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des données'";

$phpl_effectif = "CREATE TABLE IF NOT EXISTS `phpl_effectif` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_joueur` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_equipe` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des effectifs'";

$phpl_equipes = "CREATE TABLE IF NOT EXISTS `phpl_equipes` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_champ` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_club` smallint(5) unsigned NOT NULL DEFAULT '0',
  `penalite` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_champ` (`id_champ`),
  KEY `id_club` (`id_club`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des équipes'";

$phpl_gr_championnats = "CREATE TABLE IF NOT EXISTS `phpl_gr_championnats` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `id_champ` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `activ_prono` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `pts_prono_exact` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pts_prono_participation` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `id_master` smallint(5) unsigned DEFAULT '0',
  `tps_avant_prono` tinyint(2) unsigned NOT NULL DEFAULT '2',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des groupes de championnats'";

$phpl_joueurs = "CREATE TABLE IF NOT EXISTS `phpl_joueurs` (
  `nom` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `prenom` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `date_naissance` date NOT NULL DEFAULT '0000-00-00',
  `position_terrain` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `photo` varchar(250) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `mail_stop` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `nat` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `poid` tinyint(3) DEFAULT NULL,
  `taille` decimal(3,2) DEFAULT NULL,
  `drapeau` enum('0','1') COLLATE latin1_general_ci DEFAULT '1',
  `num` tinyint(4) DEFAULT NULL,
  `email` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `num_telephone` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des joueurs'";

$phpl_journees = "CREATE TABLE IF NOT EXISTS `phpl_journees` (
  `numero` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_prevue` date NOT NULL DEFAULT '0000-00-00',
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_champ` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_champ` (`id_champ`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des journées'";

$phpl_matchs = "CREATE TABLE IF NOT EXISTS `phpl_matchs` (
  `id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_equipe_dom` smallint(5) unsigned DEFAULT NULL,
  `id_equipe_ext` smallint(5) unsigned DEFAULT NULL,
  `date_reelle` datetime DEFAULT NULL,
  `id_journee` smallint(5) unsigned DEFAULT NULL,
  `buts_dom` smallint(4) unsigned DEFAULT NULL,
  `buts_ext` smallint(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_equipe_dom` (`id_equipe_dom`),
  KEY `id_equipe_ext` (`id_equipe_ext`),
  KEY `buts_dom` (`buts_dom`),
  KEY `buts_ext` (`buts_ext`),
  KEY `id_journee` (`id_journee`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des matchs'";

$phpl_membres = "CREATE TABLE IF NOT EXISTS `phpl_membres` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_prono` varchar(19) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pseudo` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `mot_de_passe` varchar(250) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `mail` varchar(40) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nom_site` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `url_site` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nom` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `prenom` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `adresse` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `code_postal` mediumint(5) NOT NULL DEFAULT '0',
  `ville` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pays` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `date_naissance` date NOT NULL DEFAULT '0000-00-00',
  `profession` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `mobile` varchar(14) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ip` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `last_connect` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `admin` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des membres'";

$phpl_parametres = "CREATE TABLE IF NOT EXISTS `phpl_parametres` (
  `id_champ` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pts_victoire` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pts_nul` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pts_defaite` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `accession` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `barrage` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `relegation` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_equipe_fetiche` smallint(4) DEFAULT NULL,
  `fiches_clubs` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `estimation` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_champ`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des paramètres'";

$phpl_pronostics = "CREATE TABLE IF NOT EXISTS `phpl_pronostics` (
  `id_membre` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_champ` int(3) unsigned NOT NULL DEFAULT '0',
  `id_match` mediumint(6) unsigned NOT NULL DEFAULT '0',
  `pronostic` enum('1','N','2') COLLATE latin1_general_ci DEFAULT NULL,
  `buts_dom` smallint(4) unsigned DEFAULT NULL,
  `buts_ext` smallint(4) unsigned DEFAULT NULL,
  `points` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `participation` tinyint(1) NOT NULL DEFAULT '0',
  KEY `id_match` (`id_match`),
  KEY `id_membre` (`id_membre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des pronostics'";

$phpl_rens = "CREATE TABLE IF NOT EXISTS `phpl_rens` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `id_classe` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `rang` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `url` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des renseignements'";

$phpl_saisons = "CREATE TABLE IF NOT EXISTS `phpl_saisons` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `annee` year(4) NOT NULL DEFAULT '0000',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table des saisons'";

?>