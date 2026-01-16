<?php

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE' ) !== FALSE )
{
	header('P3P: CP="CAO PSA OUR"');
}

$auto_identif = isset($_REQUEST['autoidentification']) ? $_REQUEST['autoidentification'] : NULL;
$user         = isset($_REQUEST['user']) ? $_REQUEST['user'] : NULL;
$pass         = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : NULL;

require('../config.php') ;
require('../function_prono.php');

ouverture();

if (!isset($_REQUEST['user']) OR !isset($_REQUEST['pass']))
{
	header('location: index.php?t=0');
}
elseif (empty($user) || empty($pass))
{
	header('location: index.php?t=0');
}
else
{
	$user = addslashes($_REQUEST['user']);
	$pass = $_REQUEST['pass'];

	$query          = mysql_query('SELECT mot_de_passe FROM phpl_membres WHERE pseudo="'.$user.'"');
	$row            = mysql_fetch_array($query);
	$password_crypt = md5($pass);

	if ($row['mot_de_passe'] != $password_crypt OR mysql_num_rows($query) == 0)
	{
        header('location: index.php?t=1');
	}
	else
	{
		$ip           = $_SERVER['REMOTE_ADDR'];
		$time         = time();
		$query        = mysql_query('SELECT mot_de_passe, pseudo FROM phpl_membres WHERE pseudo="'.$user.'"');
		$row          = mysql_fetch_array($query);
		$mot_de_passe = $row['mot_de_passe'];

		mysql_query("UPDATE phpl_membres SET ip='$ip', last_connect='$time' WHERE pseudo='$user'");

		if ($auto_identif) { $expire = 365 * 24 * 3600; } else { $expire = 3600; }

		setcookie('phplpronouser', $user, time() + $expire, '/', '');
		setcookie('phplpronopass', $mot_de_passe, time() + $expire, '/', '');

		session_start();
		session_register('phplpronouser');
		session_register('phplpronopass');

		$_SESSION['phplpronouser'] = $user;
		$_SESSION['phplpronopass'] = $mot_de_passe;

		header('location: index.php');
	}
}