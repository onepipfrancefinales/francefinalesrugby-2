<?php
$login=$_POST['creationNom'];
$mdp=$_POST['creationMdp'];
$mdp2=$_POST['creationMdp2'];
?>


<?php

	if ($mdp == $mdp2)
	 {
		include ("../../connection5.php");
		  
		$sql = "INSERT INTO personnel(id,nom,mdp,prenom,comite1, division1,type1,taille1,
														comite2, division2,type2,taille2,
														comite3, division3,type3,taille3,
														comite4, division4,type4,taille4	)
				VALUES ('','$creationNom','$creationMdp','$creationMdp2',	'NULL','NULL','NULL','NULL',
																			'NULL','NULL','NULL','NULL',
																			'NULL','NULL','NULL','NULL',
																			'NULL','NULL','NULL','NULL')";
		
		
		$requete = mysql_query( $sql )   ;
		header ('location: pageConnection2.php');
	}
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Pseudo ou mot de passe non reconnu, ré-essayez\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=pageConnection.php">';
	}

?>

