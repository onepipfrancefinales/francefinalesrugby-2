
CREATE TABLE `phpl_buteurs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `id_match` int(10) unsigned default NULL,
  `id_effectif` smallint(5) unsigned NOT NULL default '0',
  `buts` tinyint(4) default NULL,
  KEY `id` (`id`)
) ;


CREATE TABLE `phpl_championnats` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `id_division` tinyint(3) unsigned NOT NULL default '0',
  `id_saison` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ;


CREATE TABLE `phpl_classe` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `nom` varchar(255) NOT NULL default '',
  `rang` tinyint(3) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ;



CREATE TABLE `phpl_clmnt` (
  `NOM` varchar(255) default NULL,
  `POINTS` smallint(4) unsigned default NULL,
  `JOUES` tinyint(3) unsigned default NULL,
  `G` tinyint(3) unsigned default NULL,
  `N` tinyint(3) unsigned default NULL,
  `P` tinyint(3) unsigned default NULL,
  `BUTSPOUR` smallint(4) unsigned default NULL,
  `BUTSCONTRE` smallint(4) unsigned default NULL,
  `DIFF` smallint(4) default NULL,
  `PEN` tinyint(2) default NULL,
  `DOMPOINTS` smallint(4) unsigned default NULL,
  `DOMJOUES` tinyint(3) unsigned default NULL,
  `DOMG` tinyint(3) unsigned default NULL,
  `DOMN` tinyint(3) unsigned default NULL,
  `DOMP` tinyint(3) unsigned default NULL,
  `DOMBUTSPOUR` smallint(4) unsigned default NULL,
  `DOMBUTSCONTRE` smallint(4) unsigned default NULL,
  `DOMDIFF` smallint(4) default NULL,
  `EXTPOINTS` smallint(4) unsigned default NULL,
  `EXTJOUES` tinyint(3) unsigned default NULL,
  `EXTG` tinyint(3) unsigned default NULL,
  `EXTN` tinyint(3) unsigned default NULL,
  `EXTP` tinyint(3) unsigned default NULL,
  `EXTBUTSPOUR` smallint(4) unsigned default NULL,
  `EXTBUTSCONTRE` smallint(4) unsigned default NULL,
  `EXTDIFF` tinyint(4) default NULL,
  `ID_EQUIPE` smallint(5) unsigned NOT NULL default '0',
  `ID_CHAMP` tinyint(3) unsigned NOT NULL default '0',
  KEY `ID_CHAMP` (`ID_CHAMP`)
) ;



CREATE TABLE `phpl_clmnt_cache` (
  `NOM` varchar(255) default NULL,
  `POINTS` smallint(4) unsigned default NULL,
  `JOUES` tinyint(3) unsigned default NULL,
  `G` tinyint(3) unsigned default NULL,
  `N` tinyint(3) unsigned default NULL,
  `P` tinyint(3) unsigned default NULL,
  `BUTSPOUR` smallint(4) unsigned default NULL,
  `BUTSCONTRE` smallint(4) unsigned default NULL,
  `DIFF` smallint(4) default NULL,
  `PEN` tinyint(2) default NULL,
  `DOMPOINTS` smallint(4) unsigned default NULL,
  `DOMJOUES` tinyint(3) unsigned default NULL,
  `DOMG` tinyint(3) unsigned default NULL,
  `DOMN` tinyint(3) unsigned default NULL,
  `DOMP` tinyint(3) unsigned default NULL,
  `DOMBUTSPOUR` smallint(4) unsigned default NULL,
  `DOMBUTSCONTRE` smallint(4) unsigned default NULL,
  `DOMDIFF` smallint(4) default NULL,
  `EXTPOINTS` smallint(4) unsigned default NULL,
  `EXTJOUES` tinyint(3) unsigned default NULL,
  `EXTG` tinyint(3) unsigned default NULL,
  `EXTN` tinyint(3) unsigned default NULL,
  `EXTP` tinyint(3) unsigned default NULL,
  `EXTBUTSPOUR` smallint(4) unsigned default NULL,
  `EXTBUTSCONTRE` smallint(4) unsigned default NULL,
  `EXTDIFF` tinyint(4) default NULL,
  `ID_EQUIPE` smallint(5) unsigned NOT NULL default '0',
  `ID_CHAMP` tinyint(3) unsigned NOT NULL default '0',
  KEY `ID_CHAMP` (`ID_CHAMP`)
) ;



CREATE TABLE `phpl_clmnt_graph` (
  `id_equipe` smallint(5) unsigned NOT NULL default '0',
  `fin` tinyint(3) unsigned NOT NULL default '0',
  `classement` tinyint(3) unsigned NOT NULL default '0',
  KEY `id_equipe` (`id_equipe`)
) ;



CREATE TABLE `phpl_clmnt_pronos` (
  `id_champ` tinyint(3) unsigned NOT NULL default '0',
  `id_membre` smallint(5) unsigned NOT NULL default '0',
  `pseudo` varchar(255) NOT NULL default '',
  `points` smallint(5) unsigned NOT NULL default '0',
  `participation` smallint(3) unsigned NOT NULL default '0',
  `type` enum('hebdo','mensuel_30_jours','mensuel_en_cours','general') NOT NULL default 'hebdo',
  KEY `id_membre` (`id_membre`),
  KEY `id_champ` (`id_champ`)
) ;

-- --------------------------------------------------------

-- 
-- Structure de la table `phpl_clubs`
-- 

CREATE TABLE `phpl_clubs` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `nom` varchar(255) NOT NULL default '',
  `url_logo` tinytext NOT NULL,
  PRIMARY KEY  (`id`)
) ;



CREATE TABLE `phpl_divisions` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `nom` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ;



CREATE TABLE `phpl_donnee` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `nom` text NOT NULL,
  `id_clubs` smallint(5) unsigned NOT NULL default '0',
  `id_rens` smallint(5) unsigned NOT NULL default '0',
  `etat` enum('0','1') NOT NULL default '0',
  `url` varchar(200) NOT NULL default '',
  KEY `id` (`id`),
  KEY `id_rens` (`id_rens`),
  KEY `id_clubs` (`id_clubs`),
  KEY `etat` (`etat`)
) ;



CREATE TABLE `phpl_effectif` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `id_joueur` smallint(5) unsigned NOT NULL default '0',
  `id_equipe` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ;



CREATE TABLE `phpl_equipes` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `id_champ` tinyint(3) unsigned NOT NULL default '0',
  `id_club` smallint(5) unsigned NOT NULL default '0',
  `penalite` tinyint(3) default NULL,
  PRIMARY KEY  (`id`),
  KEY `id_champ` (`id_champ`),
  KEY `id_club` (`id_club`)
) ;


CREATE TABLE `phpl_gr_championnats` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `nom` varchar(255) NOT NULL default '',
  `id_champ` tinyint(3) unsigned NOT NULL default '0',
  `activ_prono` enum('0','1') NOT NULL default '1',
  `pts_prono_exact` tinyint(3) unsigned NOT NULL default '0',
  `pts_prono_participation` tinyint(2) unsigned NOT NULL default '0',
  `id_master` smallint(5) unsigned default '0',
  `tps_avant_prono` tinyint(2) unsigned NOT NULL default '2',
  KEY `id` (`id`)
) ;



CREATE TABLE `phpl_joueurs` (
  `nom` varchar(100) NOT NULL default '',
  `prenom` varchar(100) NOT NULL default '',
  `date_naissance` date NOT NULL default '0000-00-00',
  `position_terrain` varchar(50) NOT NULL default '',
  `photo` varchar(250) NOT NULL default '',
  `id` smallint(5) NOT NULL auto_increment,
  KEY `id` (`id`)
) ;



CREATE TABLE `phpl_journees` (
  `numero` tinyint(3) unsigned NOT NULL default '0',
  `date_prevue` date NOT NULL default '0000-00-00',
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `id_champ` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id_champ` (`id_champ`)
) ;



CREATE TABLE `phpl_matchs` (
  `id` mediumint(6) unsigned NOT NULL auto_increment,
  `id_equipe_dom` smallint(5) unsigned default NULL,
  `id_equipe_ext` smallint(5) unsigned default NULL,
  `date_reelle` datetime default NULL,
  `id_journee` smallint(5) unsigned default NULL,
  `buts_dom` smallint(4) unsigned default NULL,
  `buts_ext` smallint(4) unsigned default NULL,
  PRIMARY KEY  (`id`),
  KEY `id_equipe_dom` (`id_equipe_dom`),
  KEY `id_equipe_ext` (`id_equipe_ext`),
  KEY `buts_dom` (`buts_dom`),
  KEY `buts_ext` (`buts_ext`),
  KEY `id_journee` (`id_journee`)
) ;



CREATE TABLE `phpl_membres` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `id_prono` varchar(19) NOT NULL default '',
  `pseudo` varchar(20) NOT NULL default '',
  `mot_de_passe` varchar(250) NOT NULL default '',
  `mail` varchar(40) NOT NULL default '',
  `nom_site` varchar(50) NOT NULL default '',
  `url_site` varchar(100) NOT NULL default '',
  `nom` varchar(50) NOT NULL default '',
  `prenom` varchar(50) NOT NULL default '',
  `adresse` varchar(100) NOT NULL default '',
  `code_postal` mediumint(5) NOT NULL default '0',
  `ville` varchar(200) NOT NULL default '',
  `pays` varchar(200) NOT NULL default '',
  `date_naissance` date NOT NULL default '0000-00-00',
  `profession` varchar(200) NOT NULL default '',
  `mobile` varchar(14) NOT NULL default '',
  `ip` varchar(15) NOT NULL default '',
  `last_connect` varchar(10) NOT NULL default '',
  `admin` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ;


CREATE TABLE `phpl_parametres` (
  `id_champ` tinyint(3) unsigned NOT NULL default '0',
  `pts_victoire` tinyint(3) unsigned NOT NULL default '0',
  `pts_nul` tinyint(3) unsigned NOT NULL default '0',
  `pts_defaite` tinyint(3) unsigned NOT NULL default '0',
  `accession` tinyint(3) unsigned NOT NULL default '0',
  `barrage` tinyint(3) unsigned NOT NULL default '0',
  `relegation` tinyint(3) unsigned NOT NULL default '0',
  `id_equipe_fetiche` smallint(4) default NULL,
  `fiches_clubs` enum('0','1') NOT NULL default '1',
  `estimation` enum('0','1') NOT NULL default '1',
  PRIMARY KEY  (`id_champ`)
) ;



CREATE TABLE `phpl_pronostics` (
  `id_membre` smallint(5) unsigned NOT NULL default '0',
  `id_champ` int(3) unsigned NOT NULL default '0',
  `id_match` mediumint(6) unsigned NOT NULL default '0',
  `pronostic` enum('1','N','2') default NULL,
  `buts_dom` smallint(4) unsigned default NULL,
  `buts_ext` smallint(4) unsigned default NULL,
  `points` tinyint(2) unsigned NOT NULL default '0',
  `participation` tinyint(1) NOT NULL default '0',
  KEY `id_match` (`id_match`),
  KEY `id_membre` (`id_membre`)
) ;



CREATE TABLE `phpl_rens` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `nom` varchar(50) NOT NULL default '',
  `id_classe` tinyint(3) unsigned NOT NULL default '0',
  `rang` tinyint(3) unsigned NOT NULL default '0',
  `url` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ;



CREATE TABLE `phpl_saisons` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `annee` year(4) NOT NULL default '0000',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ;
