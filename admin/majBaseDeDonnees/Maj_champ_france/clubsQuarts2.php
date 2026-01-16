<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
  
<?php $id=$_POST['id']; ?>

<?php $annee=$_GET['annee']; ?>
<?php echo $annee; echo $id; ?>
<?php $annee2=($annee.''."_2"); ?> 

 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  <?php
  //r�cup�ration des valeurs des champs:
  
$E01 = $_POST['E01'];
$E02 = $_POST['E02'];  
$E03 = $_POST['E03'];  
$E04 = $_POST['E04'];  
$E05 = $_POST['E05'];  
$E06 = $_POST['E06'];  
$E07 = $_POST['E07'];  
$E08 = $_POST['E08'];  

?>
  <font size="6"> 
   <br/>
  <br/>
  <br/>
  <br/>
  </font> <font size="4"><b>
  <?php
  //r�cup�ration de l'identifiant de la personne:
  $id = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpf$annee
            SET  E01='$E01',E02='$E02',E03='$E03',E04='$E04', E05='$E05', E06='$E06',E07='$E07',E08='$E08',
		         A3201=1, A3203=1, A3205=1, A3207=1, A3209=1, A3211=1, A3213=1, A3215=1, A3217=1, A3219=1, 
				 A3221=1, A3223=1, A3225=1, A3227=1, A3229=1, A3231=1,
				 A3233=1, A3235=1, A3237=1, A3239=1, A3241=1, A3243=1, A3245=1, A3247=1, A3249=1, A3251=1,
				 A3253=1, A3255=1, A3257=1, A3259=1, A3261=1, A3263=1 
				 WHERE id = '$id' " ;
					 
  
//    $sql2 = "UPDATE bdpf$annee2
//            SET  A1601=1, A1603=1, A1605=1, A1607=1, A1609=1, A1611=1, A1613=1, A1615=1, A1617=1, A1619=1, A1621=1, A1623=1, A1625=1, A1627=1, A1629=1, A1631=1
//			WHERE id = '$id' " ;

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
  
   $sql2 = "UPDATE bdpf$annee2
            SET  A1601=1, A1603=1, A1605=1, A1607=1, A1609=1, A1611=1, A1613=1, A1615=1, A1617=1, A1619=1, A1621=1, A1623=1, A1625=1, A1627=1, A1629=1, A1631=1 
			WHERE id = '$id' " ;
 
				 
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

