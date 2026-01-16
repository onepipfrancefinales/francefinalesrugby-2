<?php 
require "../../Phpleague/phpProno/config2.php";
require '../../Phpleague/phpProno/admin/fonctions.php';
include("../../Phpleague/phpProno/lang/lang_fr.php");
ouverture();

echo "<br />";
echo $champRecup;
echo "<br />";
echo "<hr />";
if (isset($champRecup)) $champRecup=$champRecup; else $champRecup=0;

for ($champDiv = $champRecup ; $champDiv < 220 ; $champDiv=$champDiv+10)
{	
	//echo $champDiv;echo "<br />";
	for ($champ =$champDiv; $champ <$champDiv+8; $champ++)
	{	
	//echo $champ;echo "<br />";
	affich_champ ($champ, $idconnect); 

	include ("tps1.php3"); 
	 
	$result1=$idconnect->query("	SELECT id 
								FROM phpProno_equipes 
								WHERE id_champ='$champ'");

	while ($row1=mysqli_fetch_array($result1))
	{ 
	$query="DELETE FROM phpProno_clmnt_graph 
		WHERE phpProno_clmnt_graph.id_equipe='$row1[0]'" ;
        mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
	}
	$debut=0;
	$fin=1;
	 
  $result = $idconnect->query("
			SELECT accession, barrage, relegation 
			FROM phpProno_parametres 
			WHERE id_champ='$champ'");
								
			while ($row=mysqli_fetch_array($result))
				{
				$accession = $row['accession'];
				$barrage = $row['barrage'] + $accession;
				//$relegation = nb_equipes($champ, $idconnect)- $row['relegation'];
				}
	
	$result=$idconnect->query("SELECT max(phpProno_journees.numero) 
							 FROM phpProno_journees, phpProno_matchs 
							 WHERE phpProno_journees.id=phpProno_matchs.id_journee AND buts_dom is not NULL and phpProno_journees.id_champ='$champ'");

	$row=mysqli_fetch_array($result);
	$max=$row[0];

	while ($fin<=$max)
	{                 
	 @db_clmnt($champ, $debut, $fin, 0, $idconnect);
  
	 $result = $idconnect->query("
			SELECT * 
			FROM phpProno_clmnt 
			ORDER BY POINTS
			DESC, DIFF DESC, BUTSPOUR 
			DESC, BUTSCONTRE 
			ASC, NOM");
	 $pl=1;

      while ($row=mysqli_fetch_array($result))
		{   
         $x=0;
         $id_equipe=$row["ID_EQUIPE"];

         $query="INSERT INTO phpProno_clmnt_graph (id_equipe, fin, classement) 
				 VALUES ('$id_equipe','$fin', '$pl')" ;
         mysqli_query($idconnect, $query);
         $pl++;                    
		}
	 $fin++;
	}     
 
	$result = $idconnect->query("
			SELECT phpProno_clmnt_graph.id_equipe 
			FROM phpProno_clmnt_graph, phpProno_equipes 
			WHERE phpProno_equipes.id=phpProno_clmnt_graph.id_equipe
            AND phpProno_equipes.id_champ=$champ");

			$nb_saving=mysqli_num_rows($result);
 
	$result=$idconnect->query("
		SELECT * 
		FROM phpProno_equipes 
		WHERE id_champ=$champ");

		$nb_equipes=mysqli_num_rows($result);            

	@db_clmnt($champ, $debut, $fin, 1, $idconnect);

	if ($nb_saving=$max*$nb_equipes)
		{
		echo "<br/>";
		//echo "division : ".$champ. " - ";
		echo ADMIN_GRAPH; include ("tps2.php3");
		}
	else
		{
		echo "division : ".$champ. " - ";	
		echo ADMIN_GRAPH_4;
		echo "<br/>";
		}
	
	}

}
?>
<!--
</td></tr></table>
-->