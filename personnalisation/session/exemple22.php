<?php
$login=$_POST['login'];
$pwd=$_POST['pwd'];

echo "login : ".''.$login; echo"   mot de passe : ".''. $pwd;
?>
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france_db5"); // Sélection de la base onepip
?>
<?php
$reponse = mysql_query("SELECT nom ,mdp
						FROM personnel
						WHERE nom='$login' and mdp='$pwd' "); 
								while ($donnees = mysql_fetch_array($reponse) )
								{ 
								$test1= $donnees['nom'];	
								$test2= $donnees['mdp'];
								
								}
								
								
mysql_close(); ?>

<br/><br />
<?php
echo $test1 ;
echo $test2 ;
