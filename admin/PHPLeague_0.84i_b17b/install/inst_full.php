<?php

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

require('table_crea.php');

$insert_admin = "INSERT INTO `phpl_membres` (`id_prono`, `pseudo`, `mot_de_passe`, `mail`, `nom_site`, `url_site`, `admin` ) VALUES ('$id_prono', '$pseudo', '$mdp', '$mail', '$nom_site', '$url_site', '1')";

?>

<table class="Large100P ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header">
			<th class="TxtLeft"><?php echo utf8_encode(TABLE); ?></th>
			<th class="TxtLeft"><?php echo utf8_encode(ETAT); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>phpl_buteurs</td>
			<td><?php echo ResReq($phpl_buteurs); ?></td>
		</tr>
		<tr>
			<td>phpl_championnats</td>
			<td><?php echo ResReq($phpl_championnats); ?></td>
		</tr>
		<tr>
			<td>phpl_classe</td>
			<td><?php echo ResReq($phpl_classe); ?></td>
		</tr>
		<tr>
			<td>phpl_clmnt</td>
			<td><?php echo ResReq($phpl_clmnt); ?></td>
		</tr>
		<tr>
			<td>phpl_clmnt_cache</td>
			<td><?php echo ResReq($phpl_clmnt_cache); ?></td>
		</tr>
		<tr>
			<td>phpl_clmnt_graph</td>
			<td><?php echo ResReq($phpl_clmnt_graph); ?></td>
		</tr>
		<tr>
			<td>phpl_clmnt_pronos</td>
			<td><?php echo ResReq($phpl_clmnt_pronos); ?></td>
		</tr>
		<tr>
			<td>phpl_clubs</td>
			<td><?php echo ResReq($phpl_clubs); ?></td>
		</tr>
		<tr>
			<td>phpl_compo</td>
			<td><?php echo ResReq($phpl_compo); ?></td>
		</tr>
		<tr>
			<td>phpl_compocj</td>
			<td><?php echo ResReq($phpl_compocj); ?></td>
		</tr>
		<tr>
			<td>phpl_compocr</td>
			<td><?php echo ResReq($phpl_compocr); ?></td>
		</tr>
		<tr>
			<td>phpl_convocation</td>
			<td><?php echo ResReq($phpl_convocation); ?></td>
		</tr>
		<tr>
			<td>phpl_convoques</td>
			<td><?php echo ResReq($phpl_convoques); ?></td>
		</tr>
		<tr>
			<td>phpl_divisions</td>
			<td><?php echo ResReq($phpl_divisions); ?></td>
		</tr>
		<tr>
			<td>phpl_donnee</td>
			<td><?php echo ResReq($phpl_donnee); ?></td>
		</tr>
		<tr>
			<td>phpl_effectif</td>
			<td><?php echo ResReq($phpl_effectif); ?></td>
		</tr>
		<tr>
			<td>phpl_equipes</td>
			<td><?php echo ResReq($phpl_equipes); ?></td>
		</tr>
		<tr>
			<td>phpl_gr_championnats</td>
			<td><?php echo ResReq($phpl_gr_championnats); ?></td>
		</tr>
		<tr>
			<td>phpl_joueurs</td>
			<td><?php echo ResReq($phpl_joueurs); ?></td>
		</tr>
		<tr>
			<td>phpl_journees</td>
			<td><?php echo ResReq($phpl_journees); ?></td>
		</tr>
		<tr>
			<td>phpl_matchs</td>
			<td><?php echo ResReq($phpl_matchs); ?></td>
		</tr>
		<tr>
			<td>phpl_membres</td>
			<td><?php echo ResReq($phpl_membres); ?></td>
		</tr>
		<tr>
			<td>phpl_parametres</td>
			<td><?php echo ResReq($phpl_parametres); ?></td>
		</tr>
		<tr>
			<td>phpl_pronostics</td>
			<td><?php echo ResReq($phpl_pronostics); ?></td>
		</tr>
		<tr>
			<td>phpl_rens</td>
			<td><?php echo ResReq($phpl_rens); ?></td>
		</tr>
		<tr>
			<td>phpl_saisons</td>
			<td><?php echo ResReq($phpl_saisons); ?></td>
		</tr>
	</tbody>
</table>

<table class="Large100P ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header">
			<th class="TxtLeft"><?php echo utf8_encode(USER); ?></th>
			<th class="TxtLeft"><?php echo utf8_encode(TYPE); ?></th>
			<th class="TxtLeft"><?php echo utf8_encode(ETAT); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo utf8_encode($pseudo); ?></td>
			<td><?php echo utf8_encode('Administrateur'); ?></td>
			<td><?php echo ResReq($insert_admin); ?></td>
		</tr>
		<tr>
	</tbody>
</table>