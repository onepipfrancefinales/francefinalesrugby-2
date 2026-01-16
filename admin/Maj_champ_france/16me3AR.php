<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
<?php $annee=$_GET['annee']; ?>
<?php $annee=2018; ?>
<?php echo $annee; ?>
 
 
 
 <?php $annee2 ="bdpf".''.$annee.''."_2";  ?> 
<?php $id=$_POST['id']; echo $id;?>
<?php $id2=$_POST['id2'];echo $id2; ?>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
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
$A1631 = $_POST['A1631'];echo $A1602;
$A1632 = $_POST['A1632'];echo $A1601;

$A3201 = $_POST['A3201'];echo $A3201;
$A3202 = $_POST['A3202'];echo $A3202;
$A3203 = $_POST['A3203'];
$A3204 = $_POST['A3204'];
$A3205 = $_POST['A3205'];
$A3206 = $_POST['A3206'];
$A3207 = $_POST['A3207'];
$A3208 = $_POST['A3208'];
$A3209 = $_POST['A3209'];
$A3210 = $_POST['A3210'];
$A3211 = $_POST['A3211'];
$A3212 = $_POST['A3212'];
$A3213 = $_POST['A3213'];
$A3214 = $_POST['A3214'];
$A3215 = $_POST['A3215'];
$A3216 = $_POST['A3216'];
$A3217 = $_POST['A3217'];
$A3218 = $_POST['A3218'];
$A3219 = $_POST['A3219'];
$A3220 = $_POST['A3220'];
$A3221 = $_POST['A3221'];
$A3222 = $_POST['A3222'];
$A3223 = $_POST['A3223'];
$A3224 = $_POST['A3224'];
$A3225 = $_POST['A3225'];
$A3226 = $_POST['A3226'];
$A3227 = $_POST['A3227'];
$A3228 = $_POST['A3228'];
$A3229 = $_POST['A3229'];
$A3230 = $_POST['A3230'];
$A3231 = $_POST['A3231'];
$A3232 = $_POST['A3232'];



?>
  <?php
  //r�cup�ration de l'identifiant de la personne:
 // $id         = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
 $sql = "UPDATE $annee2
        SET  A1601='$A1601',A1602='$A1602',A1603='$A1603',A1604='$A1604',A1605='$A1605',A1606='$A1606',A1607='$A1607',A1608='$A1608',
			 A1609='$A1609',A1610='$A1610',A1611='$A1611',A1612='$A1612',A1613='$A1613',A1614='$A1614',A1615='$A1615',A1616='$A1616',
			 A1617='$A1617',A1618='$A1618',A1619='$A1619',A1620='$A1620',A1621='$A1621',A1622='$A1622',A1623='$A1623',A1624='$A1624',
			 A1625='$A1625',A1626='$A1626',A1627='$A1627',A1628='$A1628',A1629='$A1629',A1630='$A1630',A1631='$A1631',A1632='$A1632'
	  WHERE id = '$id' " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 ?>
  <?php
  //r�cup�ration de l'identifiant de la personne:
  //$id2        = $_POST["id2"] ;
 
  //cr�ation de la requ�te SQL:
  $sql2 = "UPDATE bdpf$annee
            SET A3201='$A3201',A3202='$A3202',A3203='$A3203',A3204='$A3204',A3205='$A3205',A3206='$A3206',A3207='$A3207',A3208='$A3208',
				A3209='$A3209',A3210='$A3210',A3211='$A3211',A3212='$A3212',A3213='$A3213',A3214='$A3214',A3215='$A3215',A3216='$A3216',
 				A3217='$A3217',A3218='$A3218',A3219='$A3219',A3220='$A3220',A3221='$A3221',A3222='$A3222',A3223='$A3223',A3224='$A3224',
				A3225='$A3225',A3226='$A3226',A3227='$A3227',A3228='$A3228',A3229='$A3229',A3230='$A3230',A3231='$A3231',A3232='$A3232' 		 
		  WHERE id = 120 " ;
 
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

