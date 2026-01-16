<?php


	$req = $bdd->prepare("UPDATE phpab_feuilleB
							 SET 
							 entraineur =:entraineur,
							 entraineur2 =:entraineur2,
							 soigneur =:soigneur,
							 adjoint =:adjoint,
							 medecin =:medecin,
							 prepa =:prepa
							
							WHERE  id =:code_match");
		   
			 $req->execute(array(
							'entraineur' => $entraineur,
							'entraineur2' => $entraineur2,
							'soigneur' => $soigneur,
							'adjoint' => $adjoint,
							'medecin' => $medecin,
							'prepa' => $prepa,

							'code_match' => $code_match

						));
						
						
?>