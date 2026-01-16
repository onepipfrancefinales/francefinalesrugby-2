<?php
require("../config.php");

//$idconnect=@mysqli_connect($hostname,$login,$password,$database);
//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');//
ouverture();
if (isset($_POST['pseudo'])){$pseudo=$_POST['pseudo'];}
if (isset($_POST['pass'])){$pass=$_POST['pass'];}
if (isset($_POST['autoidentification'])) {$autoidentification=$_POST['autoidentification'];} else {$autoidentification='';}

	if($pseudo=='' || $pass=='')
	{
   	header("Location:index.php?identification=non");
	}
	else
	{
    $query2=$idconnect->query("SELECT mot_de_passe FROM phppro_membres WHERE pseudo='$pseudo' and admin='1'");
	$result = mysqli_query($query2);
	$row = mysqli_fetch_array($result);
        $password_crypt = md5($pass);

	if($row['mot_de_passe'] != $password_crypt or mysql_num_rows($result)=="0")
	{
        header("Location:index.php?identification=non2");
	}
	else

	{
	$pseudo = addslashes($pseudo);

        $ip = $_SERVER["REMOTE_ADDR"];
	$time = time();
	 $result=$idconnect->query("SELECT * FROM phppro_membres WHERE pseudo='$pseudo' and admin='1'");
	//$result = mysql_query($query) or die ('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$row = mysqli_fetch_array($result);
	$mot_de_passe = $row['mot_de_passe'];

	mysqli_query("UPDATE phppro_membres SET ip='$ip', last_connect='$time' WHERE pseudo='$pseudo'");
        if ($autoidentification) {$expire=365*24*3600;}
        else {$expire=3600;}
	setcookie("user","$pseudo",time()+$expire,"/","");
	setcookie("mot_de_passe","$mot_de_passe",time()+$expire,"/","");
	session_start();
	//session_register('user');
	//session_register('mot_de_passe');
	//$_SESSION['user'] = $pseudo;
	//$_SESSION['mot_de_passe'] = $mot_de_passe;
	header("Location: index.php?page=championnat");
}
}
?>
