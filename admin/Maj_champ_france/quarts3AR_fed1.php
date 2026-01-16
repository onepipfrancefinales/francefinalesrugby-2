<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
 <?php// $annee2="2015_2"; ?> 
<?php //$id=$_POST['id']; ?>
  <br/>
  
<?php $id=140; ?>

<?php $annee=$_GET['annee']; ?>
<?php $annee=$annee; ?>


 
 <?php $annee2 ="bdpf".''.$annee.''."_2";  ?>   
  
  
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  <?php
  //r�cup�ration des valeurs des champs:
  

$A1617 = $_POST['A1617'];
$A1618 = $_POST['A1618'];
$A1619 = $_POST['A1619'];
$A1620 = $_POST['A1620'];
$A1621 = $_POST['A1621'];
$A1622 = $_POST['A1622'];
$A1623 = $_POST['A1623'];
$A1624 = $_POST['A1624'];
$A1625 = $_POST['A1625'];
$A1626 = $_POST['A1626'];
$A1627 = $_POST['A1627'];
$A1628 = $_POST['A1628'];




$A4001 = $_POST['A4001'];
$A4002 = $_POST['A4002'];
$A4003 = $_POST['A4003'];
$A4004 = $_POST['A4004'];

$A4005 = $_POST['A4005'];  
$A4006 = $_POST['A4006'];
$A4007 = $_POST['A4007'];
$A4008 = $_POST['A4008'];

$A2001 = $_POST['A2001'];  
$A2002 = $_POST['A2002'];
$A2003 = $_POST['A2003'];
$A2004 = $_POST['A2004'];




?>
  <?php
  //r�cup�ration de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpf2016_2
            SET  
			    A1617='$A1617',A1618='$A1618',A1619='$A1619',A1620='$A1620',A1621='$A1621',A1622='$A1622',A1623='$A1623',A1624='$A1624',
			    A1625='$A1625',A1626='$A1626',A1627='$A1627',A1628='$A1628',
				A4001='$A4001',A4002='$A4002',A4003='$A4003',A4004='$A4004',A4005='$A4005',A4006='$A4006',A4007='$A4007',A4008='$A4008',
		        A2001='$A2001',A2002='$A2002',A2003='$A2003',A2004='$A2004'
			   
		  WHERE id = 140" ;
 
  //ex�cution de la requ�te SQL:
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
  <?php

mysql_close(); // D�connexion de MySQL
?>
</p>
<p> 
  <?php
echo "<a href=http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/accueilsaisiescore.php> Retour </a>";
 ?>
<p>&nbsp;

