
<html>

<head>
  <title>Untitled Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" rel="stylesheet" href="../../../ligne1.css">

</head>

<h2>Maj de la table _clmnt_prono</h2>

<?php




require '..//admin/fonctions.php';
require '../config.php';
ouverture();

//récupèration des id des goupes de championnats créé

$tabId = array();	
$result = $idconnect->query("SELECT DISTINCT(id)
			FROM phppro_gr_championnats
		 ");
while($row= mysqli_fetch_array($result))
		{
		$tabId[]= $row[0];
		}
/*
foreach ($tabId as $gr_champ)	{
echo $gr_champ; 
}	
*/
echo "action -> impacte uniquement la table phppro_clmnt_pronos";echo "<br />";

echo "<div class=\"alignLeft\">";
foreach ($tabId as $gr_champ) {



	echo $gr_champ; 



//echo ADMIN_GRAPH_TITRE;

affich_gr_champ ($gr_champ, $idconnect); 
	

		include ("tps1.php3");

		mysqli_query($idconnect,("DELETE FROM phppro_clmnt_pronos 
						  WHERE id_champ='$gr_champ'"));

		$result=$idconnect->query(" 
				SELECT id_membre, pseudo, 
				SUM(points) as total, 
				SUM(participation) as participations 
				FROM phppro_membres, phppro_pronostics
				WHERE id_champ='$gr_champ' 
				AND id_membre=phppro_membres.id
				GROUP by pseudo
				ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phppro_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
				  VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'general')"));
		}

		$result=$idconnect->query("
				SELECT id_membre, pseudo, SUM(points) as total, SUM(participation) as participations
				FROM phppro_membres, phppro_pronostics, phppro_matchs
				WHERE id_champ='$gr_champ'
				AND id_membre=phppro_membres.id
				AND phppro_matchs.id=id_match
				AND MONTH (date_reelle) = MONTH (NOW())
				AND YEAR (date_reelle) = YEAR (NOW())
				GROUP by pseudo
				ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phppro_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
								VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_en_cours')") );
		}

		$result = $idconnect->query("
					SELECT id_membre, pseudo, SUM(points) as total, SUM(participation) as participations
					FROM phppro_membres, phppro_pronostics, phppro_matchs
					WHERE id_champ='$gr_champ'
					AND id_membre=phppro_membres.id
					AND phppro_matchs.id=id_match
					AND DATE_ADD(date_reelle, INTERVAL 30 DAY) >= NOW()
					GROUP by pseudo
					ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phppro_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
								VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_30_jours')"));
		}

		$result = $idconnect->query("
				SELECT id_membre, pseudo, SUM(points) as total, SUM(participation) as participations
				FROM phppro_membres, phppro_pronostics, phppro_matchs
				WHERE id_champ='$gr_champ'
				AND id_membre=phppro_membres.id
				AND phppro_matchs.id=id_match
				AND DATE_ADD(date_reelle, INTERVAL 7 DAY) >= NOW()
				GROUP by pseudo
				ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phppro_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
							VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'hebdo')"));
		}

	//	echo ADMIN_GRAPH_PRONO;
		 include ("tps2.php3");
		echo "<br>";

}
echo "</div>";
echo "<br>";
echo "<br>";
require '../../../admin/majScores/bas.php';
?>

