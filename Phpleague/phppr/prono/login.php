<?php
require ("../config.php");
ouverture ();
$autoidentification = isset($_POST['autoidentification']) ? $_POST['autoidentification'] : NULL;
echo $autoidentification;
	if(!isset($_REQUEST['user']) or !isset($_REQUEST['pass']))
	{
   	 header("Location: index.php?page=erreur_login&t=0");
	}
	elseif ($_REQUEST['user']=='' || $_REQUEST['pass']=='')
	{
         header("Location: index.php?page=erreur_login&t=0");
        }

	else
	{
        $user = addslashes($_REQUEST['user']);
        $pass = $_REQUEST['pass'];
        $result =$idconnect->query( "SELECT mot_de_passe FROM phppr_membres WHERE pseudo='$user'");
	//$result = mysql_query($query);
	$row = mysqli_fetch_array($result);
        $password_crypt = md5($pass);

	if($row['mot_de_passe'] != $password_crypt or mysqli_num_rows($result)=="0")
	{
        header("Location: index.php?page=erreur_login&t=1");
	}
	else
	{
    $ip = $_SERVER["REMOTE_ADDR"];
	$time = time();
	$result =$idconnect->query( "SELECT * FROM phppr_membres WHERE pseudo='$user'");
	//$result = mysql_query($query) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$row = mysqli_fetch_array($result);
	$mot_de_passe = $row['mot_de_passe'];

	//$bdd = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db3;charset=utf8', 'root', '');
	mysqli_query( $idconnect,("UPDATE phppr_membres SET ip='$ip', last_connect='$time' WHERE pseudo='$user'"));
        if ($autoidentification) {$expire=365*24*3600;}
        else {$expire=3600;}
	setcookie("user","$user",time()+$expire,"/","");
	setcookie("mot_de_passe","$mot_de_passe",time()+$expire,"/","");
//	session_start();
//	session_register('user');
//	session_register('mot_de_passe');
	$_SESSION['user'] = $user;
	$_SESSION['mot_de_passe'] = $mot_de_passe;
	header("Location: index.php");
}}

