<?php
echo "Phpleague (login)";
if (isset($_GET['mode'])) $mode = $_GET['mode'];else $mode ="AAAA";
if (isset($_REQUEST['champLigue'])) $champLigue = $_REQUEST['champLigue'];else $champLigue ="AAAA";


echo "mode : ".$mode;
echo "champLigue (login): ".$champLigue;

require ("../config.php");
echo "Phpleague (login)";

ouverture ();
echo "Phpleague3";
echo "<br>";
$autoidentification = isset($_POST['autoidentification']) ? $_POST['autoidentification'] : NULL;
$mode = isset($_POST['PhpleagueMode']) ? $_POST['PhpleagueMode'] : NULL;
$user = isset($_POST['user']) ? $_POST['user'] : NULL;
$pass = isset($_POST['pass']) ? $_POST['pass'] : NULL;

echo "user : ".$user;echo "<br>";
echo "autoidentification : ".$autoidentification;echo "<br>";
echo "mode : ".$mode;echo "<br>";
echo "pass : ".$pass;echo "<br>";

	if(!isset($_REQUEST['user']) or !isset($_REQUEST['pass']))
	{

		echo "Phpleague5";echo "<br>";
   	 header("Location: /Phpleague/phpidf/prono/index.php?champLigue=$champLigue&mode=$mode&page=erreur_login&t=0");
	}
	elseif ($_REQUEST['user']=='' || $_REQUEST['pass']=='')
	{

		echo "Phpleague6";echo "<br>";
	 header("Location: /Phpleague/phpidf/prono/index.php?champLigue=$champLigue&mode=$mode&page=erreur_login&t=0");
	 echo "Phpleague66";echo "<br>";
    }
	
	else
	{
      echo "Phpleague7";echo "<br>";
		
		
		$user = addslashes($_REQUEST['user']);
        $pass = $_REQUEST['pass'];
        $result =$idconnect->query( "SELECT mot_de_passe 
									 FROM phpidf_membres 
									 WHERE pseudo='$user'");
		//$result = mysql_query($query);
		$row = mysqli_fetch_array($result);
        $password_crypt = md5($pass);


		echo "mdp crypté : ".$password_crypt;

		

		if($row['mot_de_passe'] != $password_crypt or mysqli_num_rows($result)=="0")
		{
        	header("Location: /Phpleague/phpidf/prono/index.php?champLigue=$champLigue&mode=$mode&page=erreur_login&t=1");
		}
			
		else
		{
			echo "<br>";
			echo "Phpleague7";echo "<br>";
			echo "user : ".$user;echo "<br>";
    	$ip = $_SERVER["REMOTE_ADDR"];
		$time = time();

		$result =$idconnect->query( "SELECT * FROM phpidf_membres WHERE pseudo='$user'");
		//$result = mysql_query($query) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
		$row = mysqli_fetch_array($result);
		$mot_de_passe = $row['mot_de_passe'];

		//$bdd = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db3;charset=utf8', 'root', '');
		
		
		mysqli_query( $idconnect,("UPDATE phpidf_membres SET ip='$ip', last_connect='$time' WHERE pseudo='$user'"));
        if ($autoidentification) {$expire=365*24*3600;}
        else {$expire=3600;}
		
		setcookie("user","$user",time()+$expire,"/","");
		setcookie("mot_de_passe","$mot_de_passe",time()+$expire,"/","");
		session_start();
		// $_SESSION('user');
		// $_SESSION('mot_de_passe');
		
		$_SESSION['user'] = $user;
		$_SESSION['mot_de_passe'] = $mot_de_passe;


	echo "login.php : user -".$_SESSION['user'];echo "<br>";
	echo "login.php : mot_de_passe -".$_SESSION['mot_de_passe'];echo "<br>";

		//header("Location: /Phpleague/phpidf/prono/index.php?champLigue=$champLigue");
		header("Location: /Phpleague/phpidf/prono/index.php?page=pronos&champLigue=$champLigue");
		
	}
	}

?>

