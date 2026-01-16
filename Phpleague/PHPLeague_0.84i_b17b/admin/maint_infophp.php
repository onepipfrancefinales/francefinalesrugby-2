<?php

require('../config.php');
require('../function_admin.php');

$CHOIX = isset($_GET['chx']) ? $_GET['chx'] : NULL;

// http://www.php.net/manual/fr/reserved.constants.php#reserved.constants.core

switch($CHOIX)
{
	// INFO_VERSION
	case '1';
		ouverture();

		if (function_exists('mysql_get_server_info'))
		{
			$VER_SRV_MYSQL = mysql_get_server_info();
		}
		else
		{
			$VER_SRV_MYSQL = 'Inconnue';
		}

		if (function_exists('mysql_get_client_info'))
		{
			$VER_CLI_MYSQL = mysql_get_client_info();
		}
		else
		{
			$VER_CLI_MYSQL = 'Inconnue';
		}

		echo '	<table class="Large100P ui-widget ui-widget-content">
		<tbody>
			<tr class="ligne1">
				<td>Version PHP serveur</td>
				<td>'.PHP_VERSION.'</td>
			</tr>
			<tr class="ligne2">
				<td>Version MySQL serveur</td>
				<td>'.$VER_SRV_MYSQL.'</td>
			</tr>
			<tr class="ligne1">
				<td>Version MySQL client</td>
				<td>'.$VER_CLI_MYSQL.'</td>
			</tr>
			<tr class="ligne2">
				<td>Système</td>
				<td>'.$_SERVER['SERVER_SOFTWARE'].'</td>
			</tr>
			<tr class="ligne1">
				<td>Moteur Zend</td>
				<td>'.zend_version().'</td>
			</tr>
			<tr class="ligne2">
				<td>Plateforme</td>
				<td>'.PHP_OS.' '.(PHP_INT_SIZE * 8).' Bit</td>
			</tr>
			<tr class="ligne1">
				<td>Navigateur</td>
				<td>'.$_SERVER['HTTP_USER_AGENT'].'</td>
			</tr>
		</tbody>
	</table>'."\n\n";

		mysql_close();
	break;
	// INFO_CONFIGURATION
	case '2'; InfoPhp(4); break;
	// INFO_MODULES
	case '3'; InfoPhp(8); break;
	// INFO_ENVIRONMENT
	case '4'; InfoPhp(16); break;
	// INFO_VARIABLES
	case '5'; InfoPhp(32); break;
	// INFO_ALL
	//case '5'; phpinfo(-1); break;
	//default:  'Pas de valeur'; break;
}

?>