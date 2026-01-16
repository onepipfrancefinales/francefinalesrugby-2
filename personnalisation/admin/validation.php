 <?php
 include ("../../connection5.php");
  
$sql = "INSERT INTO personnel(id,nom,nom_cache,prenom,comite1, division1,type1,taille1,
														comite2, division2,type2,taille2,
														comite3, division3,type3,taille3,
														comite4, division4,type4,taille4		)
		VALUES ('','aaAAA','ArrrrrrAA','CgggVV','$comite1','171','2','450','phpbg',171,2,450,'phplm',171,2,450,'phplm',181,1,450)";


$requete = mysql_query( $sql )   ;

 
  ?>