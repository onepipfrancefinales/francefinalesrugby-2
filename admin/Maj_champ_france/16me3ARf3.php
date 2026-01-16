<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 

<?php $annee=$_GET['annee']; ?>
<?php $annee=$annee; ?>


 <?php $annee2 ="bdpf".''.$annee.''."_2";  ?> 
<?php $id=160;?>
<?php $id2=130; ?>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
<?php echo $A1601; ?>
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  <?php
  //r�cup�ration des valeurs des champs:
  
$A1601 = $_POST['A1601'];
$A1602 = $_POST['A1602'];
$A1603 = $_POST['A1603'];
$A1604 = $_POST['A1604'];

$A1605 = $_POST['A1605'];  
$A1606 = $_POST['A1606'];
$A1607 = $_POST['A1607'];
$A1608 = $_POST['A1608'];

$A1609 = $_POST['A1609'];  
$A1610 = $_POST['A1610'];
$A1611 = $_POST['A1611'];
$A1612 = $_POST['A1612'];

$A1613 = $_POST['A1613'];  
$A1614 = $_POST['A1614'];
$A1615 = $_POST['A1615'];
$A1616 = $_POST['A1616'];

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

$A1629 = $_POST['A1629'];  
$A1630 = $_POST['A1630'];
$A1631 = $_POST['A1631'];
$A1632 = $_POST['A1632'];

$ptsA1601 = $_POST['ptsA1601'];
$ptsA1602 = $_POST['ptsA1602'];
$ptsA1603 = $_POST['ptsA1603'];
$ptsA1604 = $_POST['ptsA1604'];
$ptsA1605 = $_POST['ptsA1605'];
$ptsA1606 = $_POST['ptsA1606'];
$ptsA1607 = $_POST['ptsA1607'];
$ptsA1608 = $_POST['ptsA1608'];
$ptsA1609 = $_POST['ptsA1609'];
$ptsA1610 = $_POST['ptsA1610'];
$ptsA1611 = $_POST['ptsA1611'];
$ptsA1612 = $_POST['ptsA1612'];
$ptsA1613 = $_POST['ptsA1613'];
$ptsA1614 = $_POST['ptsA1614'];
$ptsA1615 = $_POST['ptsA1615'];
$ptsA1616 = $_POST['ptsA1616'];

$ptsA1617 = $_POST['ptsA1617'];
$ptsA1618 = $_POST['ptsA1618'];
$ptsA1619 = $_POST['ptsA1619'];
$ptsA1620 = $_POST['ptsA1620'];
$ptsA1621 = $_POST['ptsA1621'];
$ptsA1622 = $_POST['ptsA1622'];
$ptsA1623 = $_POST['ptsA1623'];
$ptsA1624 = $_POST['ptsA1624'];
$ptsA1625 = $_POST['ptsA1625'];
$ptsA1626 = $_POST['ptsA1626'];
$ptsA1627 = $_POST['ptsA1627'];
$ptsA1628 = $_POST['ptsA1628'];
$ptsA1629 = $_POST['ptsA1629'];
$ptsA1630 = $_POST['ptsA1630'];
$ptsA1631 = $_POST['ptsA1631'];
$ptsA1632 = $_POST['ptsA1632'];



?>
  <?php
  //r�cup�ration de l'identifiant de la personne:
 // $id         = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
 $sql = "UPDATE bdpf2018_2
        SET  A1601='$A1601',A1602='$A1602',A1603='$A1603',A1604='$A1604',A1605='$A1605',A1606='$A1606',A1607='$A1607',A1608='$A1608',
			 A1609='$A1609',A1610='$A1610',A1611='$A1611',A1612='$A1612',A1613='$A1613',A1614='$A1614',A1615='$A1615',A1616='$A1616',
			 A1617='$A1617',A1618='$A1618',A1619='$A1619',A1620='$A1620',A1621='$A1621',A1622='$A1622',A1623='$A1623',A1624='$A1624',
			 A1625='$A1625',A1626='$A1626',A1627='$A1627',A1628='$A1628',A1629='$A1629',A1630='$A1630',A1631='$A1631',A1632='$A1632'
	  WHERE id = 160 " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 ?>
  <?php
  //r�cup�ration de l'identifiant de la personne:
  //$id2        = $_POST["id2"] ;
 
  //cr�ation de la requ�te SQL:
  $sql2 = "UPDATE bdpf2018_2
            SET A1601='$ptsA1601',A1602='$ptsA1602',A1603='$ptsA1603',A1604='$ptsA1604',A1605='$ptsA1605',A1606='$ptsA1606',A1607='$ptsA1607',A1608='$ptsA1608',
				A1609='$ptsA1609',A1610='$ptsA1610',A1611='$ptsA1611',A1612='$ptsA1612',A1613='$ptsA1613',A1614='$ptsA1614',A1615='$ptsA1615',A1616='$ptsA1616',
 				A1617='$ptsA1617',A1618='$ptsA1618',A1619='$ptsA1619',A1620='$ptsA1620',A1621='$ptsA1621',A1622='$ptsA1622',A1623='$ptsA1623',A1624='$ptsA1624',
				A1625='$ptsA1625',A1626='$ptsA1626',A1627='$ptsA1627',A1628='$ptsA1628',A1629='$ptsA1629',A1630='$ptsA1630',A1631='$ptsA1631',A1632='$ptsA1632' 		 
		  WHERE id = 130 " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql2 )   ;
 
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

