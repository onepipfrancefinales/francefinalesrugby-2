<?php

require('table_crea.php');
require('table_maj.php');
require('table_ren.php');
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

$sql_parametres = "ALTER TABLE `parametres` ADD `fiches_clubs` ENUM('0', '1') NOT NULL;
ALTER TABLE `parametres` ADD `estimation` ENUM('0', '1') NOT NULL;
ALTER TABLE `parametres` CHANGE `id_champ` `id_champ` INT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `pts_victoire` `pts_victoire` INT(3) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `pts_nul` `pts_nul` INT(3) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `pts_defaite` `pts_defaite` INT(3) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `accession` `accession` INT(3) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `barrage` `barrage` INT(3) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `relegation` `relegation` INT(3) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `id_equipe_fetiche` `id_equipe_fetiche` SMALLINT(6) DEFAULT NULL ,
CHANGE `fiches_clubs` `fiches_clubs` INT(1) UNSIGNED DEFAULT '1' NOT NULL ,
CHANGE `estimation` `estimation` INT(1) UNSIGNED DEFAULT '1' NOT NULL";

$sql_maj_1 = "ALTER TABLE `phpl_championnats` CHANGE `id` `id` MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT";

$sql_maj_2 = "ALTER TABLE `phpl_joueurs` CHANGE `photo` `photo` VARCHAR(250) NOT NULL,
CHANGE `id` `id` INT(5) NOT NULL AUTO_INCREMENT,
CHANGE `nom` `nom` VARCHAR(100) NOT NULL,
CHANGE `prenom` `prenom` VARCHAR(100) NOT NULL,
CHANGE `id_club` `id_club` INT(4) NOT NULL,
CHANGE `position_terrain` `position_terrain` VARCHAR(50) NOT NULL;

ALTER TABLE `phpl_buteurs` CHANGE `id` `id` INT( 10 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `id_match` `id_match` INT( 10 ) UNSIGNED DEFAULT NULL ,
CHANGE `buts` `buts` TINYINT( 4 ) DEFAULT NULL;

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

ALTER TABLE `phpl_rens` CHANGE `id` `id` SMALLINT( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `nom` `nom` VARCHAR( 50 ) NOT NULL ,
CHANGE `id_classe` `id_classe` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `rang` `rang` TINYINT( 3 ) UNSIGNED DEFAULT '0' NOT NULL ,
CHANGE `url` `url` VARCHAR( 200 ) NOT NULL;

ALTER TABLE `phpl_saisons` CHANGE `id` `id` TINYINT( 3 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE `annee` `annee` YEAR( 4 ) DEFAULT '0000' NOT NULL;

ALTER TABLE `phpl_buteurs` DROP `id_joueur`;

ALTER TABLE `phpl_joueurs` DROP `id_club`";

$sql_maj_3 = "
ALTER TABLE `phpl_buteurs` ADD `id_effectif` smallint(5) unsigned NOT NULL default '0' AFTER `id_match`;
ALTER TABLE `phpl_clmnt` ADD `ID_CHAMP` INT( 3 ) UNSIGNED NOT NULL;
ALTER TABLE `phpl_clubs` DROP INDEX `id`;
ALTER TABLE `phpl_clubs` DROP INDEX `nom`;
ALTER TABLE `phpl_clubs` ADD `url_logo` TINYTEXT NOT NULL;
ALTER TABLE `phpl_championnats` ADD PRIMARY KEY ( `id` );
ALTER TABLE `phpl_championnats` DROP INDEX `id`;
ALTER TABLE `phpl_championnats` DROP INDEX `id_saison`;
ALTER TABLE `phpl_championnats` DROP INDEX `id_division`;
ALTER TABLE `phpl_classe` ADD PRIMARY KEY ( `id` );
ALTER TABLE `phpl_classe` DROP INDEX `id`;
ALTER TABLE `phpl_clmnt` ADD INDEX ( `ID_CHAMP` );
ALTER TABLE `phpl_clmnt_graph` DROP INDEX `nom`;
ALTER TABLE `phpl_clmnt_graph` ADD INDEX ( `id_equipe` );
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
ALTER TABLE `phpl_rens` ADD PRIMARY KEY ( `id` );
ALTER TABLE `phpl_rens` DROP INDEX `id`;
ALTER TABLE `phpl_saisons` DROP INDEX `id_2`;
ALTER TABLE `phpl_saisons` DROP PRIMARY KEY;
ALTER TABLE `phpl_saisons` ADD PRIMARY KEY ( `id` )";

$insert_admin = "INSERT INTO `phpl_membres` (`id_prono`, `pseudo`, `mot_de_passe`, `mail`, `nom_site`, `url_site`, `admin` ) VALUES ('$id_prono', '$pseudo', '$mdp', '$mail', '$nom_site', '$url_site', '1')";

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
			<td>phpl_clmnt_pronos</td>
			<td><?php echo ResReq($phpl_clmnt_pronos); ?></td>
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
			<td><?php echo IMG_CRE; ?></td>
			<td>phpl_gr_championnats</td>
			<td><?php echo ResReq($phpl_gr_championnats); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_CRE; ?></td>
			<td>phpl_membres</td>
			<td><?php echo ResReq($phpl_membres); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_CRE; ?></td>
			<td>phpl_pronostics</td>
			<td><?php echo ResReq($phpl_pronostics); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_MAJ; ?></td>
			<td>parametres</td>
			<td><?php echo send_sql($sql_parametres); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>buteurs &#062; phpl_buteurs</td>
			<td><?php echo ResReq($sql_ren_buteurs); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>championnats &#062; phpl_championnats</td>
			<td><?php echo ResReq($sql_ren_championnats); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>classe &#062; phpl_classe</td>
			<td><?php echo ResReq($sql_ren_classe); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>clmnt &#062; phpl_clmnt</td>
			<td><?php echo ResReq($sql_ren_clmnt); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>clmnt_graph &#062; phpl_clmnt_graph</td>
			<td><?php echo ResReq($sql_ren_clmnt_graph); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>clubs &#062; phpl_clubs</td>
			<td><?php echo ResReq($sql_ren_clubs); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>divisions &#062; phpl_divisions</td>
			<td><?php echo ResReq($sql_ren_divisions); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>donnee &#062; phpl_donnee</td>
			<td><?php echo ResReq($sql_ren_donnee); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>equipes &#062; phpl_equipes</td>
			<td><?php echo ResReq($sql_ren_equipes); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>joueurs &#062; phpl_joueurs</td>
			<td><?php echo ResReq($sql_ren_joueurs); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>journees &#062; phpl_journees</td>
			<td><?php echo ResReq($sql_ren_journees); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>logo &#062; phpl_logo</td>
			<td><?php echo ResReq($sql_ren_logo); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>matchs &#062; phpl_matchs</td>
			<td><?php echo ResReq($sql_ren_matchs); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>parametres &#062; phpl_parametres</td>
			<td><?php echo ResReq($sql_ren_parametres); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>rens &#062; phpl_rens</td>
			<td><?php echo ResReq($sql_ren_rens); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>saisons &#062; phpl_saisons</td>
			<td><?php echo ResReq($sql_ren_saisons); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_REN; ?></td>
			<td>tapis_vert &#062; phpl_tapis_vert</td>
			<td><?php echo ResReq($sql_ren_tapis_vert); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_MAJ; ?></td>
			<td>phpl_buteurs</td>
			<td><?php echo send_sql($MAJ_PHPL_BUTEUR); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_MAJ; ?></td>
			<td>MAJ 1</td>
			<td><?php echo send_sql($sql_maj_1); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_MAJ; ?></td>
			<td>MAJ 3</td>
			<td><?php echo send_sql($sql_maj_3); ?></td>
		</tr>
	</tbody>
</table>

<?php

/////////////////////////////////////////////////

$REQ1  = mysql_query('SELECT id_club, url FROM phpl_logo') or die ('1 :: '.mysql_errno().' :: '.mysql_error());

while($ROW1 = mysql_fetch_array($REQ1))
{
	$REQ2 = mysql_query('UPDATE phpl_clubs SET url_logo="'.$ROW1['url'].'" WHERE id='.$ROW1['id_club']) or die ('2 :: '.mysql_errno().' :: '.mysql_error());
}
mysql_free_result($REQ1);

/////////////////////////////////////////////////

$REQ3 = mysql_query('SELECT DISTINCT phpl_joueurs.id, phpl_equipes.id
					FROM phpl_joueurs, phpl_equipes, phpl_buteurs, phpl_matchs, phpl_clubs
					WHERE phpl_equipes.id_club=phpl_clubs.id
					AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
					AND phpl_matchs.id=phpl_buteurs.id_match
					AND phpl_joueurs.id_club=phpl_equipes.id_club
					AND phpl_buteurs.id_joueur=phpl_joueurs.id') or die ('3 :: '.mysql_errno().' :: '.mysql_error());

while($ROW3 = mysql_fetch_array($REQ3))
{
	$REQ4 = mysql_query("INSERT INTO phpl_effectif (id_joueur, id_equipe) VALUES ('$ROW3[0]', '$ROW3[1]')") or die ('4 :: '.mysql_errno().' :: '.mysql_error());
}
mysql_free_result($REQ3);

/////////////////////////////////////////////////

$REQ5 = mysql_query('SELECT phpl_effectif.id, phpl_buteurs.id_match, phpl_joueurs.id
					FROM phpl_joueurs, phpl_equipes, phpl_buteurs, phpl_matchs, phpl_clubs, phpl_effectif
					WHERE phpl_equipes.id_club=phpl_clubs.id
					AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
					AND phpl_matchs.id=phpl_buteurs.id_match
					AND phpl_joueurs.id_club=phpl_equipes.id_club
					AND phpl_buteurs.id_joueur=phpl_joueurs.id
					AND phpl_effectif.id_joueur=phpl_joueurs.id
					AND phpl_effectif.id_equipe=phpl_equipes.id') or die ('5 :: '.mysql_errno().' :: '.mysql_error());
          
while($ROW5 = mysql_fetch_array($REQ5))
{
	$REQ6 = mysql_query('UPDATE phpl_buteurs SET id_effectif='.$ROW5[0].' WHERE id_match='.$ROW5[1].' AND id_joueur='.$ROW5[2]) or die ('6 :: '.mysql_errno().' :: '.mysql_error());
}
mysql_free_result($REQ5);

/////////////////////////////////////////////////

$REQ7 = mysql_query('SELECT DISTINCT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_buteurs.id, phpl_journees.numero, phpl_matchs.date_reelle, phpl_joueurs.id
					FROM phpl_joueurs, phpl_buteurs, phpl_matchs, phpl_equipes, phpl_journees
					WHERE phpl_matchs.id=phpl_buteurs.id_match
					AND phpl_buteurs.id_joueur=phpl_joueurs.id
					AND phpl_buteurs.id_effectif="0"
					AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
					AND phpl_journees.id=phpl_matchs.id_journee') or die ('7 :: '.mysql_errno().' :: '.mysql_error());
          
if (!mysql_num_rows($REQ7) == 0)
{
	$i = 0;

	echo '<form method="post" action="">'."\n";

	while($ROW7 = mysql_fetch_array($REQ7))
	{  
		echo SETUP_MAJ_INCOH." : $ROW7[0] $ROW7[1] ".SETUP_MAJ_INCOH_2." : ";

		$REQ8 = mysql_query('SELECT phpl_clubs.nom, phpl_equipes.id, phpl_matchs.id
							FROM phpl_joueurs, phpl_equipes, phpl_buteurs, phpl_matchs, phpl_clubs, phpl_journees
							WHERE phpl_equipes.id_club=phpl_clubs.id
							AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
							AND phpl_matchs.id=phpl_buteurs.id_match
							AND phpl_buteurs.id_joueur=phpl_joueurs.id
							AND phpl_buteurs.id_effectif="0"
							AND phpl_journees.id=phpl_matchs.id_journee
							AND phpl_buteurs.id='.$ROW7[2]) or die ('8 :: '.mysql_errno().' :: '.mysql_error());

		while($ROW8 = mysql_fetch_array($REQ8))
		{
			echo "$ROW8[0]<input type=\"radio\" value=\"$ROW8[1]\" name=\"id_equipes-".$i."\">";
			echo "<input type=\"hidden\" value=\"$ROW8[5]\" name=\"id_joueur-".$i."\">";
			echo "<input type=\"hidden\" value=\"$ROW8[2]\" name=\"id_match-".$i."\"><br>";
		}
		mysql_free_result($REQ8);

		$i++;
	}
	mysql_free_result($REQ7);

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
			<td><?php echo IMG_SUP; ?></td>
			<td>phpl_logo</td>
			<td><?php echo send_sql($sql_del_logo); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_SUP; ?></td>
			<td>tapis_vert</td>
			<td><?php echo send_sql($sql_del_tapis_vert); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_MAJ; ?></td>
			<td>MAJ 2</td>
			<td><?php echo send_sql($sql_maj_2); ?></td>
		</tr>
		<tr>
			<td><?php echo IMG_INS; ?></td>
			<td>phpl_membres [ <small><?php echo utf8_encode(USER); ?> : <strong><?php echo utf8_encode($pseudo); ?></strong> &bull; <?php echo utf8_encode(TYPE); ?> : <strong><?php echo utf8_encode('Administrateur'); ?></strong></small> ]</td>
			<td><?php echo ResReq($insert_admin); ?></td>
		</tr>
	</tbody>
</table>