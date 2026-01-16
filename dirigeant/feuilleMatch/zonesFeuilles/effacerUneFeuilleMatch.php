<?php
$erreur = "test";
?>
<!--
<script type="text/javascript">' . 'alert("Erreur : '.$erreur.'");' . '</script>
-->

<script type="text/javascript">
if ( confirm( "Souhaitez vous effacer cette feuille de match" ) ) {
 "http://127.0.0.1/dirigeant/feuilleMatch/zonesFeuilles/page_feuillematch.php?terrain=ext&id_equipe=&equipe=1317032&equipeB=1317032&equipeA=1317045&connect=connection2&comite=ce&code_match=1301710502&date=2019-10-27&type=S1"
} else {
   "http://127.0.0.1/dirigeant/feuilleMatch/zonesFeuilles/page_feuillematch.php?terrain=ext&id_equipe=&equipe=1317032&equipeB=1317032&equipeA=1317045&connect=connection2&comite=ce&code_match=1301710502&date=2019-10-27&type=S1"
}
</script>

<?php 

//echo '<script type="text/javascript">' . 'alert("Erreur : '.$erreur.'");' . '</script>'; ?>

<?php
if (isset ($_GET['terrain'])) $terrain = $_GET['terrain'];				else $terrain= "Variable terrain non d&eacute;clar&eacute;e";
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect= "Variable connect non d&eacute;clar&eacute;e";
if (isset ($_GET['code_match'])) $code_match = $_GET['code_match'];		else $code_match = "Variable code_match non d&eacute;clar&eacute;e";
if (isset ($_GET['id_equipe'])) $id_equipe = $_GET['id_equipe'];	 				else $id_equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];	 				else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['comite'])) $comite = $_GET['comite'];	 				else $equipe= "Variable comite non d&eacute;clar&eacute;e";
if (isset ($_GET['type'])) $type = $_GET['type'];	 				else $type= "Variable comite non d&eacute;clar&eacute;e";


require   "../../../connect/connexion6.php";



for ($i=1; $i<24; $i++)
	{
	${"N".$i} = 0;
	}
$juge =0;	
$capitaine =0;
$entraineur="null";			
$entraineur2 ="null";
$soigneur ="null";
$adjoint="null";
$medecin ="null";
$prepa ="null";
$responsable ="null";
$dopage="null";	


		

if ($terrain == "dom")
{
 $phpcomite_feuilleA = "php".$comite."_feuilleA";
 $req = $bdd->prepare("UPDATE $phpcomite_feuilleA
						SET	
						   	N1 =:N1,	N2 =:N2,	N3 =:N3,	N4 =:N4,	N5 =:N5,
							N6 =:N6,	N7 =:N7,	N8 =:N8,	N9 =:N9,	N10 =:N10,
							N11 =:N11, N12 =:N12, N13 =:N13,	N14 =:N14, N15 =:N15,
							N16 =:N16, N17 =:N17, N18 =:N18, 	N19 =:N19, N20 =:N20,
							N21 =:N21, N22 =:N22,N23 =:N23,
							
							entraineur =:entraineur,				
							entraineur2 =:entraineur2,
							adjoint =:adjoint,
							medecin =:medecin,
							soigneur =:soigneur,
							responsable =:responsable,
							juge =:juge,
							dopage =:dopage,
							capitaine =:capitaine,	
							prepa =:prepa
							
							
						WHERE  id =:code_match");
}
else
{
 $phpcomite_feuilleB = "php".$comite."_feuilleB";
 $req = $bdd->prepare("UPDATE $phpcomite_feuilleB
						SET	
						   	N1 =:N1,	N2 =:N2,	N3 =:N3,	N4 =:N4,	N5 =:N5,
							N6 =:N6,	N7 =:N7,	N8 =:N8,	N9 =:N9,	N10 =:N10,
							N11 =:N11, N12 =:N12, N13 =:N13,	N14 =:N14,  N15 =:N15,
							N16 =:N16, N17 =:N17, N18 =:N18, 	N19 =:N19,  N20 =:N20,
							N21 =:N21, N22 =:N22 ,N23 =:N23,
							
							entraineur =:entraineur,				
							entraineur2 =:entraineur2,
							adjoint =:adjoint,
							medecin =:medecin,
							soigneur =:soigneur,
							responsable =:responsable,
							juge =:juge,
							dopage =:dopage,
							capitaine =:capitaine,	
							prepa =:prepa
							
							
						WHERE  id =:code_match");

}
		   
	 $req->execute(array(	
						'N1' =>$N1,
						'N2' =>$N2,
						'N3' =>$N3,
						'N4' =>$N4,
						'N5' =>$N5,
						'N6' =>$N6,
						'N7' =>$N7,
						'N8' =>$N8,
						'N9' =>$N9,
						
						'N10' =>$N10,
						'N11' =>$N11,
						'N12' =>$N12,
						'N13' =>$N13,
						'N14' =>$N14,
						'N15' =>$N15,
						'N16' =>$N16,
						'N17' =>$N17,
						'N18' =>$N18,
						'N19' =>$N19,
						
						'N20' =>$N20,
						'N21' =>$N21,
						'N22' =>$N22,
						'N23' =>$N23,
											
						'entraineur' =>$entraineur,
						'entraineur2' =>$entraineur2,
						'adjoint' =>$adjoint,
						'medecin' =>$medecin,
						'soigneur' =>$soigneur,
						'responsable' =>$responsable,
						'juge' =>$juge,
						'capitaine' =>$capitaine,
						'dopage' =>$dopage,
						'prepa' =>$prepa,
						
						'code_match' => $code_match	))	
						
						 or die(print_r($req->errorInfo()))	;


						 
						 ?> <a href="../connexion/page_liste_compet1.php?type=S1&comiteInvite=<?php echo $comiteInvite; ?>&id_equipe=<?php echo $id_equipe; ?>&equipe=<?php echo $equipe; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Retour 
&agrave; accueil</a>