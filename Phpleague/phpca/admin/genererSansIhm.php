<?php 
echo "1";echo "<br />";
require '../../Phpleague/phpca/config2.php';
echo "2";echo "<br />";
require '../../Phpleague/phpca/admin/fonctions.php';
echo "3";echo "<br />";
include '../../Phpleague/phpca/lang/lang_fr.php';
echo "4";echo "<br />";
include '../../fichierConfig.php';
echo "5";echo "<br />";
ouverture();
echo "6";echo "<br />";

echo "<br />";
echo "champRecup : ".$champRecup;
echo "<br />";
echo "<hr />";
/*
	if ($champRecup == 110171) { $tableau = array(110171, 110172, 110181, 110191, 110192, 110193, 110271, 110272, 119181);}	//BFC
elseif ($champRecup == 120171) { $tableau = array(120171, 120181, 120191, 120192, 120271, 129181);} //BRE
elseif ($champRecup == 130171) { $tableau = array(130171, 130181, 130191, 130192, 130271);}// CVL
elseif ($champRecup == 160171) { $tableau = array(160171, 160181, 160182, 160191, 160192,160271, 169181,169182);}	//HDF
elseif ($champRecup == 210171) { $tableau = array(210171, 210181, 210191, 210271);} // PDL
*/
	


$tableauNAQ1 = array(190171, 190172, 190173, 190174, 190271, 190272, 190273, 190274);
$tableauNAQ2 = array(190181, 190182, 190183, 190184, 190185, 190186);
$tableauNAQ3 = array(190191, 190192, 190193, 190194, 190201, 190202, 190203, 190204, 190205, 190206);
$tableauRES_NAQ1 = array(190271, 190272, 190273, 190274);
$tableauRES_NAQ2 = array(199181, 199182, 199183, 199184, 199185, 199186, 199187, 199188);

if ($champRecup == 190171)	$tableau = $tableauNAQ1;
elseif ($champRecup == 190181)	$tableau = $tableauNAQ2;
elseif ($champRecup == 190191)	$tableau = $tableauNAQ3;
elseif ($champRecup == 190271)	$tableau = $tableauRES_NAQ1;
elseif ($champRecup == 199181)	$tableau = $tableauRES_NAQ2;


//for ($champ =$champRecup; $champ <$champRecup+8; $champ++)
foreach ($tableau as $champ)
{

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
}

?>
<!--
</td></tr></table>
-->