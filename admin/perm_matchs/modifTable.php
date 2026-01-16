<?php
//******** modification de la table match******************
//******** Modification de la ligne Phase ALLER**************
  
 $sql = "	UPDATE $phpcomite_matchs
           	SET  id_equipe_dom='$equipeDomModifAller',
				 id_equipe_ext='$equipeExtModifAller',
				 buts_dom='$scoreDomModifAller',
				 buts_ext='$scoreExtModifAller'
			WHERE id = $idMatch" ;
			




//affichage des résultats, pour savoir si la modification a marché:
					  
			 $requete = mysql_query( $sql )   ;			
 			 if($requete)
					{
					echo("La modification phase ALLER a &eacute;t&eacute; correctement effectu&eacute;e");
					echo "<br />";
					}
				  else
					{
					echo("La modification phase ALLER à &eacute;chou&eacute;") ;
					echo "<br />";
					}
 
?>

<?php
// ******* Modification de la ligne Phase RETOUR****************
  
 $sql = "	UPDATE $phpcomite_matchs
         		SET  	id_equipe_dom='$equipeDomModifRetour',
						id_equipe_ext='$equipeExtModifRetour'
			WHERE id = $idMatchRetour" ;
			

//affichage des résultats, pour savoir si la modification a marché:
					  
		 $requete = mysql_query( $sql )   ;			
 			 if($requete)
					{
					echo("La modification phase RETOUR a &eacute;t&eacute; correctement effectu&eacute;e");
					echo "<br />";
					}
				  else
					{
					echo("La modification phase RETOUR à &eacute;chou&eacute;") ;
					echo "<br />";
					}

?>
<?php
//*********************************************************************
//******************** Modif oppositions Equipe Réserve ***************
//*********************************************************************
echo "<br />";
echo "=========================================================<br />";
echo "==============    EQUIPE RESERVE    =====================<br />";
echo "=========================================================<br />";
//****** Recherche de l'$idmatch*********

$query =" 	SELECT id, buts_dom, buts_ext
			FROM $phpcomite_matchs
			WHERE 	id_equipe_dom= $equipeDom + 90000000 AND
					id_equipe_ext= $equipeExt + 90000000";
					
					$result=mysql_query($query);
						while ($row =mysql_fetch_array($result))
						{
						$idMatchReserve  =$row[0];
						$scoreExtModifAller  =$row[1];
						$scoreDomModifAller  =$row[2];
						}

echo "id match reseve=".''.$idMatchReserve;
echo "<br />";
echo $equipeDom;
echo "<br />";echo "<br />";
//******** modification de la table match******************
//******** Modification de la ligne Phase ALLER**************

  if ($idMatchReserve > 0 )
    {
	$reserveequipeDomModifAller = $equipeDomModifAller + 90000000;
	$reserveequipeExtModifAller = $equipeExtModifAller + 90000000;
	echo $reserveequipeDomModifAller;echo "<br />";
	echo $reserveequipeExtModifAller;echo "<br />";
	
    $sql = "	UPDATE $phpcomite_matchs
           	    SET  id_equipe_dom='$reserveequipeDomModifAller ',
	    			 id_equipe_ext='$reserveequipeExtModifAller ',
				     buts_dom='$scoreDomModifAller',
				     buts_ext='$scoreExtModifAller'
					 WHERE id = $idMatchReserve" ;

//affichage des résultats, pour savoir si la modification a marché:
					  
			 $requete = mysql_query( $sql )   ;			
 			 if($requete)
					{
					echo("La modification phase RESERVE ALLER a &eacute;t&eacute; correctement effectu&eacute;e");
					echo "<br />";
					}
			 else
					{
				echo("La modification phase RESERVE ALLER à &eacute;chou&eacute;") ;
					echo "<br />";
					}
					
	}		
	else
	{
	echo "pas d'équipe réserve";
	}
 
?>

<?php

//****** Recherche de l'$idmatch retour*********

$query =" 	SELECT id
			FROM $phpcomite_matchs
			WHERE 	id_equipe_dom= $equipeExt + 90000000 AND
					id_equipe_ext= $equipeDom + 90000000";
					
					$result=mysql_query($query);
						while ($row =mysql_fetch_array($result))
							{
							$idMatchRetourReserve =$row[0];
							}

if ($idMatchRetourReserve > 0 )
  {

// ******* Modification de la ligne Phase RETOUR****************
  
 			$reserveequipeDomModifRetour = $equipeDomModifRetour + 90000000 ;
			$reserveequipeExtModifRetour = $equipeExtModifRetour + 90000000 ;
			
			echo $reserveequipeDomModifRetour; echo "<br />";
			echo $reserveequipeExtModifRetour; echo "<br />";
 
 
 $sql = "		UPDATE $phpcomite_matchs
           		SET  	id_equipe_dom='$reserveequipeDomModifRetour',
						id_equipe_ext='$reserveequipeExtModifRetour'
						WHERE id = $idMatchRetourReserve" ;
			

//affichage des résultats, pour savoir si la modification a marché:
					  
		 $requete = mysql_query( $sql )   ;			
  			if($requete)
					{
					echo("La modification phase RESERVE RETOUR a &eacute;t&eacute; correctement effectu&eacute;e");
					echo "<br />";
					}
				  else
					{
			echo("La modification phase RESERVE RETOUR à &eacute;chou&eacute;") ;
					echo "<br />";
					}
}




?>