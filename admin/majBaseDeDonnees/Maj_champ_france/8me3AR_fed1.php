<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
  <?php $id=140; ?>
 
 
  <?php $annee=$_GET['annee']; ?>
<?php $annee=2017; ?>
 

 <?php $annee2 ="bdpf".''.$annee.''."_2";  ?> 
 


 
 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  <?php
  //r�cup�ration des valeurs des champs:
  
$A8001 = $_POST['A8001'];
$A8002 = $_POST['A8002'];
$A8003 = $_POST['A8003'];
$A8004 = $_POST['A8004'];

$A8005 = $_POST['A8005'];  
$A8006 = $_POST['A8006'];
$A8007 = $_POST['A8007'];
$A8008 = $_POST['A8008'];

$A8009 = $_POST['A8009'];  
$A8010 = $_POST['A8010'];
$A8011 = $_POST['A8011'];
$A8012 = $_POST['A8012'];

$A8013 = $_POST['A8013'];  
$A8014 = $_POST['A8014'];
$A8015 = $_POST['A8015'];
$A8016 = $_POST['A8016'];

$A1601 = $_POST['essai1601'];
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

?>
  <?php
  //r�cup�ration de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpf2017_2
            SET  A8001='$A8001',A8002='$A8002',A8003='$A8003',A8004='$A8004',A8005='$A8005',A8006='$A8006',A8007='$A8007',A8008='$A8008',
				 A8009='$A8009',A8010='$A8010',A8011='$A8011',A8012='$A8012',A8013='$A8013',A8014='$A8014',A8015='$A8015',A8016='$A8016',
				 A1601='$A1601',A1602='$A1602',A1603='$A1603',A1604='$A1604',A1605='$A1605',A1606='$A1606',A1607='$A1607',A1608='$A1608',
				 A1609='$A1609',A1610='$A1610',A1611='$A1611',A1612='$A1612',A1613='$A1613',A1614='$A1614',A1615='$A1615',A1616='$A1616'
				 
		  WHERE id = '$id' " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 ?>
  <?php
  //r�cup�ration de l'identifiant de la personne:
  //$id2        = $_POST["id2"] ;
 
  //cr�ation de la requ�te SQL:
//  $sql2 = "UPDATE bdpf2017
//            SET A3233='$A3233',A3234='$A3234',A3235='$A3235',A3236='$A3236',A3237='$A3237',A3238='$A3238',A3239='$A3239',A3240='$A3240',
//				A3241='$A3241',A3242='$A3242',A3243='$A3243',A3244='$A3244',A3245='$A3245',A3246='$A3246',A3247='$A3247',A3248='$A3248' 		 
//		  WHERE id = 120 " ;
 
  //ex�cution de la requ�te SQL:
 // $requete = mysql_query( $sql2 )   ;
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

