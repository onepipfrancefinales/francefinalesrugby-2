<?php 
require "../../Phpleague/phppro/config2.php";
require '../../Phpleague/phppro/admin/fonctions.php';
include("../../Phpleague/phppro/lang/lang_fr.php");
ouverture();

echo "<br />";
echo "champRecup : ".$champRecup;
echo "<br />";
echo "<hr />";
if (isset($champRecup)) $champRecup=$champRecup; else $champRecup=0;


if ($champRecup == 990141)
	$tableau = array(990141, 990142, 990143, 990144, 990241, 990242, 990243, 990244);	
elseif ($champRecup == 990241)
	$tableau = array(990241, 990242, 990243, 990244);	
//fed2
elseif ($champRecup == 990151)
	$tableau = array(990151, 990152, 990153, 990154,990155, 990156, 990157, 990158);	
elseif ($champRecup == 990251)
	$tableau = array(990251, 990252, 990253, 990254,990255, 990256, 990257, 990258);	

	//fed2Test
elseif ($champRecup == 990651)
$tableau = array(990651, 990652, 990653, 990654,990655, 990656, 990657, 990658);	
elseif ($champRecup == 990751)
$tableau = array(990751, 990752, 990753, 990754,990755, 990756, 990757, 990758);	
//fed3NE

elseif ($champRecup == 991161)
	$tableau = array(991161, 991162, 991163, 991164,991165, 991166, 991167, 991168);	
elseif ($champRecup == 991251)
	$tableau = array(991261, 991262, 991263, 991264,991265, 991266, 991267, 991268);

//fed3GS

elseif ($champRecup == 992161)
	$tableau = array(992161, 992162, 992163, 992164,992165, 992166, 992167, 992168);	
elseif ($champRecup == 992251)
	$tableau = array(992261, 992262, 992263, 992264,992265, 992266, 992267, 992268);

//fem
elseif ($champRecup == 880285)
	$tableau = array(880281, 880282, 880285, 880191,880192, 880193, 880194);	


//for ($champ =$champRecup; $champ <$champRecup+8; $champ++)
foreach ($tableau as $champ)
{	
	//echo $champDiv;echo "<br />";
	//for ($champ =$champDiv; $champ <$champDiv+8; $champ++)
	//{	
	//echo $champ;echo "<br />";
	affich_champ ($champ, $idconnect); 

	include ("tps1.php3"); 
	 
	$result1=$idconnect->query("	SELECT id 
								FROM phppro_equipes 
								WHERE id_champ='$champ'");

	while ($row1=mysqli_fetch_array($result1))
	{ 
	$query="DELETE FROM phppro_clmnt_graph 
		WHERE phppro_clmnt_graph.id_equipe='$row1[0]'" ;
        mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
	}
	$debut=0;
	$fin=1;
	 
  $result = $idconnect->query("
			SELECT accession, barrage, relegation 
			FROM phppro_parametres 
			WHERE id_champ='$champ'");
								
			while ($row=mysqli_fetch_array($result))
				{
				$accession = $row['accession'];
				$barrage = $row['barrage'] + $accession;
				//$relegation = nb_equipes($champ, $idconnect)- $row['relegation'];
				}
	
	$result=$idconnect->query("SELECT max(phppro_journees.numero) 
							 FROM phppro_journees, phppro_matchs 
							 WHERE phppro_journees.id=phppro_matchs.id_journee AND buts_dom is not NULL and phppro_journees.id_champ='$champ'");

	$row=mysqli_fetch_array($result);
	$max=$row[0];

	while ($fin<=$max)
	{                 
	 @db_clmnt($champ, $debut, $fin, 0, $idconnect);
  
	 $result = $idconnect->query("
			SELECT * 
			FROM phppro_clmnt 
			ORDER BY POINTS
			DESC, DIFF DESC, BUTSPOUR 
			DESC, BUTSCONTRE 
			ASC, NOM");
	 $pl=1;

      while ($row=mysqli_fetch_array($result))
		{   
         $x=0;
         $id_equipe=$row["ID_EQUIPE"];

         $query="INSERT INTO phppro_clmnt_graph (id_equipe, fin, classement) 
				 VALUES ('$id_equipe','$fin', '$pl')" ;
         mysqli_query($idconnect, $query);
         $pl++;                    
		}
	 $fin++;
	}     
 
	$result = $idconnect->query("
			SELECT phppro_clmnt_graph.id_equipe 
			FROM phppro_clmnt_graph, phppro_equipes 
			WHERE phppro_equipes.id=phppro_clmnt_graph.id_equipe
            AND phppro_equipes.id_champ=$champ");

			$nb_saving=mysqli_num_rows($result);
 
	$result=$idconnect->query("
		SELECT * 
		FROM phppro_equipes 
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