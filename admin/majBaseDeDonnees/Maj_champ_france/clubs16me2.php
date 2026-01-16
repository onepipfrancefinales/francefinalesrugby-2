<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
  <?php $id=$_POST['id']; ?>
  <?php echo $id; ?>
  <?php $annee=$_POST['annee']; ?>
  <?php $annee=$_GET['annee']; ?>
  <?php $annee2=($annee.''."_2"); 
echo $annee;
echo $annee2;
?>
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  <?php
  //r�cup�ration des valeurs des champs:
  
$E01 = $_POST['E01'];
$E03 = $_POST['E03'];

$E05 = $_POST['E05'];  
$E07 = $_POST['E07'];

$E09 = $_POST['E09'];  
$E11 = $_POST['E11'];

$E13 = $_POST['E13'];  
$E15 = $_POST['E15'];

$E17 = $_POST['E17'];  
$E19 = $_POST['E19'];

$E21 = $_POST['E21'];  
$E23 = $_POST['E23'];

$E25 = $_POST['E25'];  
$E27 = $_POST['E27'];

$E29 = $_POST['E29'];  
$E31 = $_POST['E31'];

$E33 = $_POST['E33'];
$E35 = $_POST['E35'];

$E37 = $_POST['E37'];  
$E39 = $_POST['E39'];

$E41 = $_POST['E41'];  
$E43 = $_POST['E43'];
  
$E45 = $_POST['E45'];
$E47 = $_POST['E47'];  

$E49 = $_POST['E49'];
$E51 = $_POST['E51'];
  
$E53 = $_POST['E53'];
$E55 = $_POST['E55']; 
 
$E57 = $_POST['E57'];
$E59 = $_POST['E59']; 
 
$E61 = $_POST['E61'];
$E63 = $_POST['E63'];
?>
  <font size="6"> </font> <font size="4"><b> 
<?php
  //r�cup�ration de l'identifiant de la personne:
  $id = $_POST["id"] ;
?>

<?php
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpf$annee
            SET  E01='$E01', E03='$E03', E05='$E05', E07='$E07', E09='$E09', E11='$E11', E13='$E13', E15='$E15', E17='$E17', E19='$E19', E21='$E21', E23='$E23', E25='$E25', E27='$E27', E29='$E29', E31='$E31',
		         E33='$E33', E35='$E35', E37='$E37', E39='$E39', E41='$E41', E43='$E43', E45='$E45', E47='$E47', E49='$E49', E51='$E51', E53='$E53', E55='$E55', E57='$E57', E59='$E59', E61='$E61', E63='$E63',
				 
				 A3201=1, A3203=1, A3205=1, A3207=1, A3209=1, A3211=1, A3213=1, A3215=1, A3217=1, A3219=1, A3221=1, A3223=1, A3225=1, A3227=1, A3229=1, A3231=1,
				 A3233=1, A3235=1, A3237=1, A3239=1, A3241=1, A3243=1, A3245=1, A3247=1, A3249=1, A3251=1, A3253=1, A3255=1, A3257=1, A3259=1, A3261=1, A3263=1 WHERE id = '$id' " ;

  $requete = mysql_query( $sql )   ;
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
  	{
    echo("La modification a �t� correctement effectu�e");
	}
  else
  	{
    echo("La modification � �chou�e") ;
  	}
?>

 
 
  </b></font> 
  <?php

mysql_close(); // D�connexion de MySQL
?>
  </p>
<p> 
  <?php
echo "<a href=http://francefinalesrugby.franceserv.com/admin/sadmin2.php> Retour &agrave; l'accueil</a>";
 ?>
<p>&nbsp;

