<?php

//***  ***** zone 1 *******



  require   "../../../connect/connexion6.php";


  
if (isset ($_POST['capitaine'])) $capitaine = $_POST['capitaine']; else  $capitaine =""; 
if (empty($capitaine)) 	$capitaine ='0'; 

//if (isset ($_POST['numeroJuge'])) $numeroJuge = $_POST['numeroJuge']; else  $numeroJuge =""; 
//if (empty($numeroJuge)) 	$numeroJuge ='0'; 




 for ($i=1; $i<100; $i++)
		{
		if (empty(${"idPerso".$i})) 
			{
			${"idPerso".$i}='0';
			}
		}  
  
  
  
if ($terrain == "dom")
{
$req = $bdd->prepare('UPDATE phpce_feuilleA
						SET	
						    N1 =:idPerso1,
							N2 =:idPerso2,
							N3 =:idPerso3,
							N4 =:idPerso4,
							N5 =:idPerso5,
							N6 =:idPerso6,
							N7 =:idPerso7,
							N8 =:idPerso8,
							N9 =:idPerso9,
							
							N10 =:idPerso10,
							N11 =:idPerso11,
							N12 =:idPerso12,
							N13 =:idPerso13,
							N14 =:idPerso14,
							N15 =:idPerso15,
							N16 =:idPerso16,
							N17 =:idPerso17,
							N18 =:idPerso18,
							N19 =:idPerso19,
							
							N20 =:idPerso20,
							N21 =:idPerso21,
							N22 =:idPerso22,
							N23 =:idPerso23,
							
							entraineur =:entraineur,
							entraineur2 =:entraineur2,
							adjoint =:adjoint,
							medecin =:medecin,
							soigneur =:soigneur,
							responsable =:responsable,
							
							
							capitaine =:capitaine,
						
							prepa =:prepa
							
						

						WHERE  id =:code_match');

}
else
{
 $req = $bdd->prepare('UPDATE phpce_feuilleB
						SET	
						    N1 =:idPerso1,
							N2 =:idPerso2,
							N3 =:idPerso3,
							N4 =:idPerso4,
							N5 =:idPerso5,
							N6 =:idPerso6,
							N7 =:idPerso7,
							N8 =:idPerso8,
							N9 =:idPerso9,
							
							N10 =:idPerso10,
							N11 =:idPerso11,
							N12 =:idPerso12,
							N13 =:idPerso13,
							N14 =:idPerso14,
							N15 =:idPerso15,
							N16 =:idPerso16,
							N17 =:idPerso17,
							N18 =:idPerso18,
							N19 =:idPerso19,
							
							N20 =:idPerso20,
							N21 =:idPerso21,
							N22 =:idPerso22,
							N23 =:idPerso23,
							
							entraineur =:entraineur,				
							entraineur2 =:entraineur2,
							adjoint =:adjoint,
							medecin =:medecin,
							soigneur =:soigneur,
							responsable =:responsable,
							
							capitaine =:capitaine,	
							
						
							
							prepa =:prepa
							
							
						WHERE  id =:code_match');
}		   
	 $req->execute(array(	
						'idPerso1' =>$idPerso1,
						'idPerso2' =>$idPerso2,
						'idPerso3' =>$idPerso3,
						'idPerso4' =>$idPerso4,
						'idPerso5' =>$idPerso5,
						'idPerso6' =>$idPerso6,
						'idPerso7' =>$idPerso7,
						'idPerso8' =>$idPerso8,
						'idPerso9' =>$idPerso9,
						
						'idPerso10' =>$idPerso10,
						'idPerso11' =>$idPerso11,
						'idPerso12' =>$idPerso12,
						'idPerso13' =>$idPerso13,
						'idPerso14' =>$idPerso14,
						'idPerso15' =>$idPerso15,
						'idPerso16' =>$idPerso16,
						'idPerso17' =>$idPerso17,
						'idPerso18' =>$idPerso18,
						'idPerso19' =>$idPerso19,
						
						'idPerso20' =>$idPerso20,
						'idPerso21' =>$idPerso21,
						'idPerso22' =>$idPerso22,
						'idPerso23' =>$idPerso23,
											
						'entraineur' =>$entraineur,
						'entraineur2' =>$entraineur2,
						'adjoint' =>$adjoint,
						'medecin' =>$medecin,
						'soigneur' =>$soigneur,
						'responsable' =>$responsable,
					//'numeroJuge' =>$juge,
						'capitaine' =>$capitaine,
						'prepa' =>$prepa,
						
						'code_match' => $code_match	))	
						
						 or die(print_r($bdd->errorInfo()))	;

?>