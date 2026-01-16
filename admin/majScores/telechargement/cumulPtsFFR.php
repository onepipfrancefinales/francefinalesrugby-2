 <?php  

require ("../../../connect1/connection1.php") ;


for ($i=1; $i<=231 ; $i++)
{ 
	$tabId = array();
	$tabDivision = array();
	$tabPoints = array();
	
	$reponse = $bdd->query("SELECT id , division , points
							FROM bdcomparepoints
							where id = $i");
								while ($row = $reponse->fetch() )
										{ 
										$tabId[] = $row[0];
										$tabDivision[] =$row[1];
										$tabPoints[] =$row[2];
										}
									
${"fedffr".$i} =  $tabPoints[0];

}


  ?>

