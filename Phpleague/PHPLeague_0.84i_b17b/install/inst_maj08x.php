<?php

require('table_crea.php');
require('table_maj.php');
require('table_supp.php');

$taille  = 19;
$lettres = 'abcdefghijklmnopqrstuvwxyz0123456789';

srand(time());

for ($i=0; $i<$taille; $i++)
{
	if ($i == 0)
	{
		$id_prono = substr($lettres, (rand()%(strlen($lettres))), 1);
	}
	else
	{
		$id_prono.= substr($lettres, (rand()%(strlen($lettres))), 1);
	}
}

$mdp = md5($mot_de_pass);

$sql_maj_1 = "
ALTER TABLE `phpl_buteurs` CHANGE `buts` `buts` TINYINT( 4 ) DEFAULT NULL;

ALTER TABLE `phpl_championnats` CHANGE `id` `id` TINYINT( 3 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `id_division` `id_division` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `id_saison` `id_saison` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL;

ALTER TABLE `phpl_classe` CHANGE `id` `id` TINYINT( 3 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `nom` `nom` VARCHAR( 255 ) NOT NULL ,
CHANGE `rang` `rang` TINYINT( 3 ) DEFAULT '0' NOT NULL;

ALTER TABLE `phpl_clmnt` CHANGE `NOM` `NOM` VARCHAR( 255 ) DEFAULT NULL ,
CHANGE `POINTS` `POINTS` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `JOUES` `JOUES` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `G` `G` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `N` `N` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `P` `P` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `BUTSPOUR` `BUTSPOUR` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `BUTSCONTRE` `BUTSCONTRE` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `DIFF` `DIFF` SMALLINT( 4 ) DEFAULT NULL ,
CHANGE `PEN` `PEN` TINYINT( 2 ) DEFAULT NULL ,
CHANGE `DOMPOINTS` `DOMPOINTS` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `DOMJOUES` `DOMJOUES` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `DOMG` `DOMG` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `DOMN` `DOMN` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `DOMP` `DOMP` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `DOMBUTSPOUR` `DOMBUTSPOUR` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `DOMBUTSCONTRE` `DOMBUTSCONTRE` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `DOMDIFF` `DOMDIFF` SMALLINT( 4 ) DEFAULT NULL ,
CHANGE `EXTPOINTS` `EXTPOINTS` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `EXTJOUES` `EXTJOUES` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `EXTG` `EXTG` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `EXTN` `EXTN` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `EXTP` `EXTP` TINYINT( 3 ) UNSIGNED DEFAULT NULL ,
CHANGE `EXTBUTSPOUR` `EXTBUTSPOUR` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `EXTBUTSCONTRE` `EXTBUTSCONTRE` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `EXTDIFF` `EXTDIFF` TINYINT( 4 ) DEFAULT NULL ,
CHANGE `ID_EQUIPE` `ID_EQUIPE` SMALLINT( 5 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `ID_CHAMP` `ID_CHAMP` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL;

ALTER TABLE `phpl_clmnt_graph` CHANGE `id_equipe` `id_equipe` SMALLINT( 5 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `fin` `fin` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `classement` `classement` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL;

ALTER TABLE `phpl_clmnt_pronos` CHANGE `id_champ` `id_champ` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `id_membre` `id_membre` SMALLINT( 5 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `pseudo` `pseudo` VARCHAR( 255 ) NOT NULL ,
CHANGE `points` `points` SMALLINT( 5 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `participation` `participation` SMALLINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `type` `type` ENUM( 'hebdo', 'mensuel_30_jours', 'mensuel_en_cours', 'general' ) NOT NULL;

ALTER TABLE `phpl_clmnt_graph` CHANGE `fin` `fin` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `classement` `classement` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL;

ALTER TABLE `phpl_clubs` CHANGE `id` `id` SMALLINT( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `nom` `nom` VARCHAR( 255 ) NOT NULL;

ALTER TABLE `phpl_divisions` CHANGE `id` `id` TINYINT( 3 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `nom` `nom` VARCHAR( 255 ) NOT NULL ;

ALTER TABLE `phpl_donnee` CHANGE `id` `id` SMALLINT( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `nom` `nom` TEXT NOT NULL ,
CHANGE `id_clubs` `id_clubs` SMALLINT( 5 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `id_rens` `id_rens` SMALLINT( 5 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `etat` `etat` ENUM( '0', '1' ) DEFAULT '0' NOT NULL ,
CHANGE `url` `url` VARCHAR( 200 ) NOT NULL ;

ALTER TABLE `phpl_equipes` CHANGE `id` `id` SMALLINT( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `id_champ` `id_champ` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `id_club` `id_club` SMALLINT( 5 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `penalite` `penalite` TINYINT( 3 ) DEFAULT NULL;

ALTER TABLE `phpl_gr_championnats` CHANGE `id` `id` TINYINT( 3 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `nom` `nom` VARCHAR( 255 ) NOT NULL ,
CHANGE `id_champ` `id_champ` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `activ_prono` `activ_prono` ENUM( '0', '1' ) DEFAULT '1' NOT NULL ,
CHANGE `pts_prono_exact` `pts_prono_exact` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `pts_prono_participation` `pts_prono_participation` TINYINT( 2 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `id_master` `id_master` SMALLINT( 5 ) UNSIGNED DEFAULT '0',
CHANGE `tps_avant_prono` `tps_avant_prono` TINYINT( 2 ) UNSIGNED DEFAULT '2' NOT NULL;

ALTER TABLE `phpl_joueurs` CHANGE `nom` `nom` VARCHAR( 100 ) NOT NULL ,
CHANGE `prenom` `prenom` VARCHAR( 100 ) NOT NULL ,
CHANGE `date_naissance` `date_naissance` DATE DEFAULT '0000-00-00' NOT NULL ,
CHANGE `position_terrain` `position_terrain` VARCHAR( 50 ) NOT NULL ,
CHANGE `photo` `photo` VARCHAR( 250 ) NOT NULL ,
CHANGE `id` `id` SMALLINT( 5 ) NOT NULL AUTO_INCREMENT;

ALTER TABLE `phpl_journees` CHANGE `numero` `numero` TINYINT( 3 ) UNSIGNED NOT NULL ,
CHANGE `date_prevue` `date_prevue` DATE NOT NULL ,
CHANGE `id` `id` SMALLINT( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `id_champ` `id_champ` TINYINT( 3 ) UNSIGNED NOT NULL ;

ALTER TABLE `phpl_logo` CHANGE `id` `id` SMALLINT( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `id_club` `id_club` SMALLINT( 5 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `url` `url` TINYTEXT NOT NULL;

ALTER TABLE `phpl_matchs` CHANGE `id` `id` MEDIUMINT( 6 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `id_equipe_dom` `id_equipe_dom` SMALLINT( 5 ) UNSIGNED DEFAULT NULL ,
CHANGE `id_equipe_ext` `id_equipe_ext` SMALLINT( 5 ) UNSIGNED DEFAULT NULL ,
CHANGE `date_reelle` `date_reelle` DATETIME DEFAULT NULL ,
CHANGE `id_journee` `id_journee` SMALLINT( 5 ) UNSIGNED DEFAULT NULL ,
CHANGE `buts_dom` `buts_dom` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `buts_ext` `buts_ext` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ;

ALTER TABLE `phpl_membres` CHANGE `id` `id` SMALLINT( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `id_prono` `id_prono` VARCHAR( 19 ) NOT NULL ,
CHANGE `pseudo` `pseudo` VARCHAR( 20 ) NOT NULL ,
CHANGE `mot_de_passe` `mot_de_passe` VARCHAR( 250 ) NOT NULL ,
CHANGE `mail` `mail` VARCHAR( 40 ) NOT NULL ,
CHANGE `nom_site` `nom_site` VARCHAR( 50 ) NOT NULL ,
CHANGE `url_site` `url_site` VARCHAR( 100 ) NOT NULL ,
CHANGE `nom` `nom` VARCHAR( 50 ) NOT NULL ,
CHANGE `prenom` `prenom` VARCHAR( 50 ) NOT NULL ,
CHANGE `adresse` `adresse` VARCHAR( 100 ) NOT NULL ,
CHANGE `code_postal` `code_postal` MEDIUMINT( 5 ) DEFAULT '0' NOT NULL ,
CHANGE `ville` `ville` VARCHAR( 200 ) NOT NULL ,
CHANGE `pays` `pays` VARCHAR( 200 ) NOT NULL ,
CHANGE `date_naissance` `date_naissance` DATE DEFAULT '0000-00-00' NOT NULL ,
CHANGE `profession` `profession` VARCHAR( 200 ) NOT NULL ,
CHANGE `mobile` `mobile` VARCHAR( 14 ) NOT NULL ,
CHANGE `ip` `ip` VARCHAR( 15 ) NOT NULL ,
CHANGE `last_connect` `last_connect` VARCHAR( 10 ) NOT NULL ,
CHANGE `admin` `admin` ENUM( '0', '1' ) DEFAULT '0' NOT NULL;

ALTER TABLE `phpl_parametres` CHANGE `id_champ` `id_champ` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `pts_victoire` `pts_victoire` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `pts_nul` `pts_nul` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `pts_defaite` `pts_defaite` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `accession` `accession` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `barrage` `barrage` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `relegation` `relegation` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `id_equipe_fetiche` `id_equipe_fetiche` SMALLINT( 4 ) DEFAULT NULL ,
CHANGE `fiches_clubs` `fiches_clubs` ENUM( '0', '1' ) DEFAULT '1' NOT NULL ,
CHANGE `estimation` `estimation` ENUM( '0', '1' ) DEFAULT '1' NOT NULL;

ALTER TABLE `phpl_pronostics` CHANGE `id_membre` `id_membre` SMALLINT( 5 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `id_champ` `id_champ` INT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `id_match` `id_match` MEDIUMINT( 6 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `pronostic` `pronostic` ENUM( '1', 'N', '2' ) DEFAULT NULL ,
CHANGE `buts_dom` `buts_dom` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `buts_ext` `buts_ext` SMALLINT( 4 ) UNSIGNED DEFAULT NULL ,
CHANGE `points` `points` TINYINT( 2 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `participation` `participation` TINYINT( 1 ) DEFAULT '0' NOT NULL ;

ALTER TABLE `phpl_rens` CHANGE `id` `id` SMALLINT( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `nom` `nom` VARCHAR( 50 ) NOT NULL ,
CHANGE `id_classe` `id_classe` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `rang` `rang` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `url` `url` VARCHAR( 200 ) NOT NULL;

ALTER TABLE `phpl_saisons` CHANGE `id` `id` TINYINT( 3 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `annee` `annee` YEAR( 4 ) DEFAULT '0000' NOT NULL;

ALTER TABLE `phpl_buteurs` DROP `id_joueur`;

ALTER TABLE `phpl_joueurs` DROP `id_club`";

$sql_maj_2 = "
ALTER TABLE `phpl_buteurs` ADD `id_effectif` smallint(5) unsigned NOT NULL default '0' AFTER `id_match`;
ALTER TABLE `phpl_clubs` ADD `url_logo` TINYTEXT NOT NULL
ALTER TABLE `phpl_clubs` DROP INDEX `id`;
ALTER TABLE `phpl_clubs` DROP INDEX `nom`;
ALTER TABLE `phpl_championnats` ADD PRIMARY KEY ( `id` );
ALTER TABLE `phpl_championnats` DROP INDEX `id`;
ALTER TABLE `phpl_championnats` DROP INDEX `id_saison`;
ALTER TABLE `phpl_championnats` DROP INDEX `id_division`;
ALTER TABLE `phpl_classe` ADD PRIMARY KEY ( `id` );
ALTER TABLE `phpl_classe` DROP INDEX `id`;
ALTER TABLE `phpl_clmnt` ADD INDEX ( `ID_CHAMP` );
ALTER TABLE `phpl_clmnt_graph` DROP INDEX `nom`;
ALTER TABLE `phpl_clmnt_graph` ADD INDEX ( `id_equipe` );
ALTER TABLE `phpl_clmnt_pronos` DROP INDEX `pseudo`;
ALTER TABLE `phpl_clmnt_pronos` ADD INDEX ( `id_champ` );
ALTER TABLE `phpl_divisions` DROP PRIMARY KEY;
ALTER TABLE `phpl_divisions` DROP INDEX `nom_2`;
ALTER TABLE `phpl_divisions` ADD PRIMARY KEY ( `id` );
ALTER TABLE `phpl_divisions` DROP INDEX `id`;
ALTER TABLE `phpl_equipes` DROP INDEX `id`;
ALTER TABLE `phpl_journees` DROP INDEX `id`;
ALTER TABLE `phpl_journees` DROP INDEX `numero`;
ALTER TABLE `phpl_logo` DROP PRIMARY KEY;
ALTER TABLE `phpl_logo` ADD PRIMARY KEY ( `id_club` );
ALTER TABLE `phpl_logo` DROP INDEX `id_club`;
ALTER TABLE `phpl_parametres` ADD PRIMARY KEY ( `id_champ` );
ALTER TABLE `phpl_parametres` DROP INDEX `id_champ`;
ALTER TABLE `phpl_pronostics` ADD INDEX ( `id_match` );
ALTER TABLE `phpl_pronostics` DROP INDEX `id_champ`;
ALTER TABLE `phpl_pronostics` ADD INDEX ( `id_membre` ); 
ALTER TABLE `phpl_rens` ADD PRIMARY KEY ( `id` );
ALTER TABLE `phpl_rens` DROP INDEX `id`;
ALTER TABLE `phpl_saisons` DROP INDEX `id_2`;
ALTER TABLE `phpl_saisons` DROP PRIMARY KEY;
ALTER TABLE `phpl_saisons` ADD PRIMARY KEY ( `id` )";

$REQ1 = mysql_query('SELECT id_equipe, pts FROM phpl_tapis_vert') or die ('1 :: '.mysql_errno().' :: '.mysql_error());

while ($ROW1 = mysql_fetch_array($REQ1))
{
	$REQ2 = mysql_query('UPDATE phpl_equipes SET penalite='.$ROW1['pts'].' WHERE id='.$ROW1['id_equipe']) or die ('2 :: '.mysql_errno().' :: '.mysql_error());
}
mysql_free_result($REQ1);

?>

<table class="Large100P ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header">
			<th class="TxtLeft"><?php echo utf8_encode(ACTION); ?></th>
			<th class="TxtLeft"><?php echo utf8_encode(TABLE); ?></th>
			<th class="TxtLeft"><?php echo utf8_encode(ETAT); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo IMG_CRE; ?></td>
			<td>phpl_clmnt_cache</td>
			<td><?php echo ResReq($phpl_clmnt_cache); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_CRE; ?></td>
			<td>phpl_compo</td>
			<td><?php echo ResReq($phpl_compo); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_CRE; ?></td>
			<td>phpl_compocj</td>
			<td><?php echo ResReq($phpl_compocj); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_CRE; ?></td>
			<td>phpl_compocr</td>
			<td><?php echo ResReq($phpl_compocr); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_CRE; ?></td>
			<td>phpl_convocation</td>
			<td><?php echo ResReq($phpl_convocation); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_CRE; ?></td>
			<td>phpl_convoques</td>
			<td><?php echo ResReq($phpl_convoques); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_CRE; ?></td>
			<td>phpl_effectif</td>
			<td><?php echo ResReq($phpl_effectif); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_MAJ; ?></td>
			<td>phpl_buteurs</td>
			<td><?php echo send_sql($MAJ_PHPL_BUTEUR); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_MAJ; ?></td>
			<td><?php echo utf8_encode('Toutes les tables'); ?></td>
			<td><?php echo send_sql($sql_maj_2); ?></td>
		</tr>
	</tbody>
</table>

<?php


$requete  = "SELECT id_club, url FROM phpl_logo";
$resultat = mysql_query($requete) or die ('3 :: '.mysql_errno().' :: '.mysql_error());

while($row = mysql_fetch_array($resultat))
{
	$url_logo  = $row["url"];
	$id_club   = $row["id_club"];
	$requete2  = "UPDATE phpl_clubs SET url_logo='$url_logo' WHERE id='$id_club'";
	$resultat2 = mysql_query($requete2) or die ('4 :: '.mysql_errno().' :: '.mysql_error());
}

$requete = "SELECT DISTINCT phpl_joueurs.id, phpl_equipes.id
			FROM phpl_joueurs, phpl_equipes, phpl_buteurs, phpl_matchs, phpl_clubs
			WHERE phpl_equipes.id_club=phpl_clubs.id
			AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
			AND phpl_matchs.id=phpl_buteurs.id_match
			AND phpl_joueurs.id_club=phpl_equipes.id_club
			AND phpl_buteurs.id_joueur=phpl_joueurs.id";
$resultat = mysql_query($requete) or die ('5 :: '.mysql_errno().' :: '.mysql_error());

while ($row = mysql_fetch_array($resultat))
{
	mysql_query ("INSERT INTO phpl_effectif (id_joueur, id_equipe) values ('$row[0]', '$row[1]')") or die ('6 :: '.mysql_errno().' :: '.mysql_error());
}

$requete = "SELECT phpl_effectif.id, phpl_buteurs.id_match, phpl_joueurs.id
			FROM phpl_joueurs, phpl_equipes, phpl_buteurs, phpl_matchs, phpl_clubs, phpl_effectif
			WHERE phpl_equipes.id_club=phpl_clubs.id
			AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
			AND phpl_matchs.id=phpl_buteurs.id_match
			AND phpl_joueurs.id_club=phpl_equipes.id_club
			AND phpl_buteurs.id_joueur=phpl_joueurs.id
			AND phpl_effectif.id_joueur=phpl_joueurs.id
			AND phpl_effectif.id_equipe=phpl_equipes.id";
$resultat = mysql_query($requete) or die ('7 :: '.mysql_errno().' :: '.mysql_error());

while ($row = mysql_fetch_array($resultat))
{
	mysql_query ("UPDATE phpl_buteurs SET id_effectif='$row[0]' WHERE id_match='$row[1]' and id_joueur='$row[2]'") or die ('8 :: '.mysql_errno().' :: '.mysql_error());
}

$requete = "SELECT DISTINCT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_buteurs.id, phpl_journees.numero, phpl_matchs.date_reelle, phpl_joueurs.id
			FROM phpl_joueurs, phpl_buteurs, phpl_matchs, phpl_equipes, phpl_journees
			WHERE phpl_matchs.id=phpl_buteurs.id_match
			AND phpl_buteurs.id_joueur=phpl_joueurs.id
			AND phpl_buteurs.id_effectif=0
			AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
			AND phpl_journees.id=phpl_matchs.id_journee";
$resultat = mysql_query($requete) or die ('9 :: '.mysql_errno().' :: '.mysql_error());

if (!mysql_num_rows($resultat) == '0')
{
	echo "<form method=\"post\" action=\"\">";

	$i = 0;

	while($row = mysql_fetch_array($resultat))
	{  
		echo "Incohérence : $row[0] $row[1] a marqué sous le maillot de : ";

		$requete1 = "SELECT phpl_clubs.nom, phpl_equipes.id, phpl_matchs.id
					FROM phpl_joueurs, phpl_equipes, phpl_buteurs, phpl_matchs, phpl_clubs, phpl_journees
					WHERE phpl_equipes.id_club=phpl_clubs.id
					AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
					AND phpl_matchs.id=phpl_buteurs.id_match
					AND phpl_buteurs.id_joueur=phpl_joueurs.id
					AND phpl_buteurs.id_effectif=0
					AND phpl_journees.id=phpl_matchs.id_journee
					AND phpl_buteurs.id='$row[2]'";
		$resultat1 = mysql_query($requete1) or die ('10 :: '.mysql_errno().' :: '.mysql_error());

		while ($row1 = mysql_fetch_array($resultat1))
		{
			echo "$row1[0]<input type=\"radio\" value=\"$row1[1]\" name=\"id_equipes-".$i."\">";
			echo "<input type=\"hidden\" value=\"$row[5]\" name=\"id_joueur-".$i."\">";
			echo "<input type=\"hidden\" value=\"$row1[2]\" name=\"id_match-".$i."\"><br>";
		}

		$i++;
	}

	echo "<input type=\"hidden\" value=\"1\" name=\"buteurs\">";
	echo "<input type=\"hidden\" value=\"$i\" name=\"nb_joueur\">";
	echo "<input type=\"submit\" value=".ENVOI."></form>";
}

?>

<table class="Large100P ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header">
			<th class="TxtLeft"><?php echo utf8_encode(ACTION); ?></th>
			<th class="TxtLeft"><?php echo utf8_encode(TABLE); ?></th>
			<th class="TxtLeft"><?php echo utf8_encode(ETAT); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo IMG_MAJ; ?></td>
			<td><?php echo utf8_encode('Toutes les tables'); ?></td>
			<td><?php echo send_sql($sql_maj_1); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_SUP; ?></td>
			<td>phpl_logo</td>
			<td><?php echo send_sql($sql_del_logo); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_SUP; ?></td>
			<td>tapis_vert</td>
			<td><?php echo send_sql($sql_del_tapis_vert); ?></td>
		</tr>
	</tbody>
</table>