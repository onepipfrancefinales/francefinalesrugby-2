<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p><b><font size="5">Consultation des MEMBRES</font></b><br>
  <br>
  <font size="4" color="#0000FF"><b>F�d&eacute;rale 1</b></font> 
  <?php
//mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
//mysql_select_db("onepip-france-db3"); // S�lection de la base onepip
require '../../connect1/connection3.php';


?>
  <?php
$reponse = $bdd->query("SELECT id, pseudo, mot_de_passe,mail,nom,pays,admin 
						FROM phpf1_membres 
						WHERE id >'0' ORDER BY id DESC"); 
		while ($donnees = $reponse->fetch() )
			{ 
				?>
				</p>
				<p><font face="Arial, Helvetica, sans-serif"><font size="3"> 
				  <?php echo $donnees['id'].'- '.$donnees['pseudo'].' -'.$donnees['mot_de_passe'].' '.$donnees['mail'].''.$donnees['nom'].'---'.$donnees['pays'].'---'.$donnees['admin']; ?>
				  </font></font> <br/>
				<p>   <?php
			 }
				//mysql_close(); // D�connexion de MySQL
				?>

