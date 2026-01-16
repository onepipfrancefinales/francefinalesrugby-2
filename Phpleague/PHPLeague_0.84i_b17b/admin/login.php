<?php

$pseudo             = isset($_REQUEST['pseudo'])             ? $_REQUEST['pseudo']             : NULL;
$pass               = isset($_REQUEST['pass'])               ? $_REQUEST['pass']               : NULL;
$autoidentification = isset($_REQUEST['autoidentification']) ? $_REQUEST['autoidentification'] : NULL;

require('../config.php');
require('../function_admin.php');

ouverture();

if (empty($pseudo) OR empty($pass))
{
	header('location: index.php?identification=err1');
}
else
{
	$query  = "SELECT mot_de_passe FROM phpl_membres WHERE pseudo='$pseudo' AND admin='1'";
	$result = mysql_query($query);
	$row    = mysql_fetch_array($result);
	$password_crypt = md5($pass);

	if ($row['mot_de_passe'] != $password_crypt OR mysql_num_rows($result) == 0)
	{
		header('location: index.php?identification=err2');
	}
	else
	{
		$pseudo = addslashes($pseudo);
		$ip     = $_SERVER['REMOTE_ADDR'];
		$time   = time();
		$query  = "SELECT * FROM phpl_membres WHERE pseudo='$pseudo' AND admin='1'";
		$result = mysql_query($query);
		$row    = mysql_fetch_array($result);
		$mot_de_passe = $row['mot_de_passe'];

		mysql_query("UPDATE phpl_membres SET ip='$ip', last_connect='$time' WHERE pseudo='$pseudo'");

		if ($autoidentification)
		{
			$expire = 365 * 24 * 3600;
		}
		else
		{
			$expire = 3600;
		}

		setcookie('phpladminuser', $pseudo, time() + $expire, '/', '');
		setcookie('phpladminpass', $mot_de_passe, time() + $expire, '/', '');
		session_start();
		session_register('phpladminuser');
		session_register('phpladminpass');

		$_SESSION['phpladminuser'] = $pseudo;
		$_SESSION['phpladminpass'] = $mot_de_passe;

		header('location: index.php?page=championnat');
	}
}

?>