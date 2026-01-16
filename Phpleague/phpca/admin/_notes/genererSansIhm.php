<?php 
require "../../Phpleague/phpca/config2.php";
require '../../Phpleague/phpca/admin/fonctions.php';
include("../../Phpleague/phpca/lang/lang_fr.php");
ouverture();

echo "<br />";
echo $champRecup;
echo "<br />";
echo "<hr />";
if (isset($champRecup)) $champRecup=$champRecup; else $champRecup=0;


if ($champRecup == 190171)
	$tableau = array(190171, 190172, 190173, 190174, 190175);
elseif ($champRecup == 190181)
	$tableau = array(190181, 190182, 190183 , 190184, 190185, 190186, 190187);
elseif ($champRecup == 190191)
	$tableau = array(190191, 190192, 190193, 190194, 190195, 190196, 190197);
elseif ($champRecup == 190271)
	$tableau = array(190271, 190272, 190273, 190274, 190275);
elseif ($champRecup == 199181)
	$tableau = array(199181, 199182, 199183 , 199184, 199185, 199186, 199187);	



//for ($champDiv = $champRecup ; $champDiv < 220 ; $champDiv=$champDiv+10)
foreach ($tableau as $champ)
{	
	//echo $champDiv;echo "<br />";
	//for ($champ =$champDiv; $champ <$champDiv+8; $champ++)
	//{	
	//echo $champ;echo "<br />";
	affich_champ ($champ, $idconnect); 

	include ("tps1.php3"); 
	 
	$result1=$idconnect->query("	SELECT id 
								FROM phpca_equipes 
								WHERE id_champ='$champ'");

	while ($row1=mysqli_fetch_array($result1))
	{ 
	$query="DELETE FROM phpca_clmnt_graph 
		WHERE phpca_clmnt_graph.id_equipe='$row1[0]'" ;
        mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
	}
	$debut=0;
	$fin=1;
	 
  $result = $idconnect->query("
			SELECT accession, barrage, relegation 
			FROM phpca_parametres 
			WHERE id_champ='$champ'");
								
			while ($row=mysqli_fetch_array($result))
				{
				$accession = $row['accession'];
				$barrage = $row['barrage'] + $accession;
				//$relegation = nb_equipes($champ, $idconnect)- $row['relegation'];
				}
	
	$result=$idconnect->query("SELECT max(phpca_journees.numero) 
							 FROM phpca_journees, phpca_matchs 
							 WHERE phpca_journees.id=phpca_matchs.id_journee AND buts_dom is not NULL and phpca_journees.id_champ='$champ'");

	$row=mysqli_fetch_array($result);
	$max=$row[0];

	while ($fin<=$max)
	{                 
	 @db_clmnt($champ, $debut, $fin, 0, $idconnect);
  
	 $result = $idconnect->query("
			SELECT * 
			FROM phpca_clmnt 
			ORDER BY POINTS
			DESC, DIFF DESC, BUTSPOUR 
			DESC, BUTSCONTRE 
			ASC, NOM");
	 $pl=1;

      while ($row=mysqli_fetch_array($result))
		{   
         $x=0;
         $id_equipe=$row["ID_EQUIPE"];

         $query="INSERT INTO phpca_clmnt_graph (id_equipe, fin, classement) 
				 VALUES ('$id_equipe','$fin', '$pl')" ;
         mysqli_query($idconnect, $query);
         $pl++;                    
		}
	 $fin++;
	}     
 
	$result = $idconnect->query("
			SELECT phpca_clmnt_graph.id_equipe 
			FROM phpca_clmnt_graph, phpca_equipes 
			WHERE phpca_equipes.id=phpca_clmnt_graph.id_equipe
            AND phpca_equipes.id_champ=$champ");

			$nb_saving=mysqli_num_rows($result);
 
	$result=$idconnect->query("
		SELECT * 
		FROM phpca_equipes 
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
	
	//}

}
?>
<!--
</td></tr></table>
-->