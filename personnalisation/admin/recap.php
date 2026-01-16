<?php
//session_start ();
 
$id= $_SESSION['id'];
//echo "id : ".$id;
//echo "<br />";
//if (isset ()) $comite1=$comite1;else $comite
$comiteA = $_GET['comiteA']; 
$pouleA = $_GET['poule'];
if (isset ($pouleA)) $pouleA = $pouleA;else $pouleA =""; 
if (isset ($poule)) $poule = $poule;else $poule =""; 
//for ($i=1; $i<6; $i++)
//{
//if (isset ($comite1)) $comite1 = $comite1;else $comite1 ="";
//if (isset ($nomPoule1)) $nomPoule1 = $nomPoule1;else $nomPoule1 ="";
//}
//echo "comiteA (valeur récupérée):".$comiteA;
/*
// lecture des données du membre
include ("../../connect1/connection5.php");
$result =$bdd->query( " SELECT id, nom, mdp, prenom, comite1, division1,  comite2, division2, 
					comite3, division3, comite4, division4, comite5, division5							
				FROM personnel 
				WHERE id ='$id'") ; 				 
				
				while ($row = $result->fetch())
									{ 
									$id = $row[0]; 
									$nom = $row[1]; 
									$mdp = $row[2]; 
									$prenom = $row[3]; 
									$comite1 = $row[4];		$division1 = $row[5]; 	
									$comite2 = $row[6]; 	$division2 = $row[7]; 	
									$comite3 = $row[8]; 	$division3 = $row[9]; 	
									$comite4 = $row[10]; 	$division4 = $row[11]; 	
									$comite5 = $row[12]; 	$division5 = $row[13]; 	
									} 
									
if ($comite1 == NULL)
{
	$comite1 = $comiteA;
	$poule1 = $pouleA;
}

echo "<br />";
echo "comite1(nom court) : ".$comite1;
//Recherche du nom la ligue pour le choix n°1
$result =$bdd->query("SELECT nomLigue
				FROM comite
				WHERE phpcomite='$comite1'"); 
						while ($row = $result->fetch())
							{
							$comite11=$row[0];
							}
echo "<br />";	
echo "comite11 (nomlong): ".$comite11;						
//Recherche du nom la ligue pour le choix n°2						
	$result =$bdd->query("SELECT nomLigue
			FROM comite
			WHERE phpcomite='$comite2'");
					
					while ($row = $result->fetch())
						{
						$comite22=$row[0];
						}
//Recherche du nom la ligue pour le choix n°3						
			$result =$bdd->query("SELECT nomLigue
			FROM comite
			WHERE phpcomite='$comite3'"); 
					while ($row = $result->fetch())
						{
						$comite33=$row[0];
						}
//Recherche du nom la ligue pour le choix n°4						
			$result =$bdd->query("SELECT nomLigue
			FROM comite
			WHERE phpcomite='$comite4'"); 
					while ($row = $result->fetch())
						{
						$comite44=$row[0];
						}


//Recherche du nom la ligue pour le choix n°5
$result =$bdd->query("SELECT nomLigue
			FROM comite
			WHERE phpcomite='$comite5'"); 
					while ($row = $result->fetch())
						{
						$comite55=$row[0];
						}
	
if ($comite1 != "")
{						
	if ($comite1=="phppro" OR $comite1=="phpf1" OR $comite1=="phpfed2" OR $comite1=="phpfed3NE" OR $comite1=="phpfed3GS" OR $comite1=="phpfem")
		include ("../../connect1/connection3.php"); 							
	else
		include ("../../connect1/connection2.php"); 									

$comiteDivision=$comite1."_divisions";
echo "<br />";
echo "comitedivision : ".$comiteDivision;

$result = $bdd->query("	SELECT nom
						FROM $comiteDivision
						WHERE id='$poule1' ");
					
					while ($row = $result->fetch())
						{
						$nomPoule11=$row[0];
						}
echo $nomPoule11;
}


if ($comite2 !="php")
	{
	if ($comite2=="phppro" OR $comite2=="phpf1" OR $comite2=="phpfed2" OR $comite2=="phpfed3NE" OR $comite2=="phpfed3GS" OR $comite2=="phpfem")
		include ("../../connect1/connection3.php");  									
	else
		include ("../../connect1/connection2.php"); 									
	
	$comiteDivision=$comite2.''."_divisions";
	echo $comiteDivision;
	
	$result =$bdd->query("	SELECT nom
							FROM $comiteDivision
							WHERE id=$division2 ");
						
						while ($row = $result->fetch())
							{
							$division22=$row[0];
							}
	}




if ($comite3 !="php")
	{
	if ($comite3=="phppro" OR $comite3=="phpf1" OR $comite3=="phpfed2" OR $comite3=="phpfed3NE" OR $comite3=="phpfed3GS" OR $comite3=="phpfem")
		include ("../../connect1/connection3.php"); 									
	else
		include ("../../connect1/connection2.php"); 									
	
	$comiteDivision=$comite3.''."_divisions";
	echo $comiteDivision;
	
	$result =$bdd->query("	SELECT nom
				FROM $comiteDivision
				WHERE id=$division3 ");
						//$result = mysql_query($query); 
						while ($row = $result->fetch())
							{
							$division33=$row[0];
							}
		}
		
		
		
if ($comite4 !="php")
	{		

	if ($comite4=="phppro" OR $comite4=="phpf1" OR $comite4=="phpfed2" OR $comite4=="phpfed3NE" OR $comite4=="phpfed3GS" OR $comite4=="phpfem")
		include ("../../connect1/connection3.php"); 							
	else
		include ("../../connect1/connection2.php"); 									
	
	$comiteDivision=$comite4.''."_divisions";
	echo $comiteDivision;
	
	$result =$bdd->query("	SELECT nom
				FROM $comiteDivision
				WHERE id=$division4 ");
						//$result = mysql_query($query); 
						while ($row = $result->fetch())
							{
							$division44=$row[0];
							}
	}
	
	
	
if ($comite5 !="php")
	{		

	if (   $comite5=="phppro" OR $comite5=="phpf1" OR $comite5=="phpfed2" OR $comite5=="phpfed3NE" OR $comite5=="phpfed3GS" OR $comite5=="phpfem")
		include ("../../connect1/connection3.php"); 								
	else
		include ("../../connect1/connection2.php"); 									
	
	$comiteDivision=$comite5.''."_divisions";
	echo $comiteDivision;
	
	$result =$bdd->query("	SELECT nom
				FROM $comiteDivision
				WHERE id=$division5 ");
						//$result = mysql_query($query); 
						while ($row = $result->fetch())
							{
							$division55=$row[0];
							}
	}

//$tabComite = array();									
//for ($i=1 ; $i<6 ; $i++)	
//	{
//	echo $i;
	
//$comite=${'comite'.$i};
//echo "<br />";
//echo $comite;echo "<br />";
//$query ="SELECT nomLigue
//			FROM comite
//			WHERE phpcomite='$comite'";
//					$result = mysql_query($query); 
//					while ($row = mysql_fetch_array($result))
//						{
//						$tabComite[]=$row[0];
//						}
//	}		
*/			
			?> 

<?php
//récuperation des données pour complèter le tableau recap
include ("../../connect1/connection5.php");
$result =$bdd->query( " SELECT id, nom, mdp, prenom, comite1, division1,  comite2, division2, 
					comite3, division3, comite4, division4, comite5, division5							
				FROM personnel 
				WHERE id ='$id'") ; 				 
				
				while ($row = $result->fetch())
									{ 
									$id = $row[0]; 
									$nom = $row[1]; 
									$mdp = $row[2]; 
									$prenom = $row[3]; 
									$phpComite1 = $row[4];	$idPoule1 = $row[5]; 	
									$phpComite2 = $row[6]; 	$idPoule2 = $row[7]; 	
									$phpComite3 = $row[8]; 	$idPoule3 = $row[9]; 	
									$phpComite4 = $row[10]; $idPoule4 = $row[11]; 	
									$phpComite5 = $row[12]; $idPoule5 = $row[13]; 	
									} 


//********   recherche des comites  ******
$tabNomComite = array ();
$tabPhpComite = array ($phpComite1, $phpComite2, $phpComite3, $phpComite4, $phpComite5);
foreach ($tabPhpComite as $valeurPhpComite)
{
//echo $valeurPhpComite;echo "<br />";
$result =$bdd->query( " SELECT nom							
						FROM ligue 
						WHERE phpcomite ='$valeurPhpComite'") ; 				 
				
				while ($row = $result->fetch())
									{ 
									$tabNomComite[] = $row[0];	 	 	
									} 

	//for ($i=0; $i<6; $i++)
	//{
	//${"nomComite".$i+1}=$nomComite[$i];																		
	//}
}

if (isset($tabNomComite[0])) $nomComite1 = $tabNomComite[0];else $nomComite1="";
if (isset($tabNomComite[1])) $nomComite2 = $tabNomComite[1];else $nomComite2="";
if (isset($tabNomComite[2])) $nomComite3 = $tabNomComite[2];else $nomComite3="";
if (isset($tabNomComite[3])) $nomComite4 = $tabNomComite[3];else $nomComite4="";
if (isset($tabNomComite[4])) $nomComite5 = $tabNomComite[4];else $nomComite5="";
	
							
									
//**** recherche des divisions ******


// déclaration des tableaux
$nomPoule = array();
$tabNomPoule = array($idPoule1, $idPoule2, $idPoule3, $idPoule4, $idPoule5);

// parcours du tableau
foreach ($tabNomPoule as $valeurNomPoule)
 {
  //requête	
  $result =$bdd->query( " SELECT division							
						FROM divisions 
						WHERE id ='$valeurNomPoule'") ; 				 
				
				while ($row = $result->fetch())
									{ 
									$nomPoule[] = $row[0];	 
									}									
 }
 
//récupération des valeurs 
if (isset($nomPoule[0])) $nomPoule1 =$nomPoule[0];else $nomPoule1="";
if (isset($nomPoule[1])) $nomPoule2 =$nomPoule[1];else $nomPoule2="";
if (isset($nomPoule[2])) $nomPoule3 =$nomPoule[2];else $nomPoule3="";
if (isset($nomPoule[3])) $nomPoule4 =$nomPoule[3];else $nomPoule4="";
if (isset($nomPoule[4])) $nomPoule5 =$nomPoule[4];else $nomPoule5="";

?>



<div id="text">Liste de votre s&eacute;lection :</div><br>
<table align="center" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0" width="600"> 
	<tbody>
		<tr bgcolor="#cccccc">
			 <td width="29">&nbsp;	
			 </td>		
    <td width="157"> 
      <div align="center">Ligue / Comp&eacute;tititons </div>
    </td> 
			<td valign="middle" width="311"> 
				Division 
			</td>
			<td width="93"> 
			 </td> 
		 </tr> 
	</tbody>
	</table>
<div align="center"> 
  <table border="1" bordercolor="#000000" cellpadding="0" cellspacing="0" width="600">
    <tr> 
      <td width="29"> 
        <div align="center">1</div>
      </td>
      <td width="158"> 
        <?php echo $nomComite1; ?>
      </td>
      <td width="310"> 
        <?php echo $nomPoule1; ?>
      </td>
      <td bgcolor="#000000" width="93"> <a href="bdEffacer.php?i=1&id=<?php echo $id; ?>">Supprimer</a> 
      </td>
    </tr>
    <tr> 
      <td width="29"> 
        <div align="center">2</div>
      </td>
      <td width="158"> 
        <?php echo $nomComite2; ?>
      </td>
      <td width="310"> 
        <?php echo $nomPoule2; ?>
      </td>
      <td bgcolor="#000000" width="93"><a href="bdEffacer.php?i=2&id=<?php echo $id; ?>">Supprimer</a> 
      </td>
    </tr>
    <tr> 
      <td width="29"> 
        <div align="center">3</div>
      </td>
      <td width="158"> 
        <?php echo $nomComite3; ?>
      </td>
      <td width="310"> 
        <?php echo $nomPoule3; ?>
      </td>
      <td bgcolor="#000000" width="93"><a href="bdEffacer.php?i=3&id=<?php echo $id; ?>">Supprimer</a> 
      </td>
    </tr>
    <tr> 
      <td width="29"> 
        <div align="center">4</div>
      </td>
      <td width="158"> 
        <?php echo $nomComite4; ?>
      </td>
      <td width="310"> 
        <?php echo $nomPoule4; ?>
      </td>
      <td bgcolor="#000000" width="93"><a href="bdEffacer.php?i=4&id=<?php echo $id; ?>">Supprimer</a> 
      </td>
    </tr>
    <tr> 
      <td width="29"> 
        <div align="center">5</div>
      </td>
      <td width="158"> 
        <?php echo $nomComite5; ?>
      </td>
      <td width="310"> 
        <?php echo $nomPoule5; ?>
      </td>
      <td bgcolor="#000000" width="93"><a href="bdEffacer.php?i=5&id=<?php echo $id; ?>">Supprimer</a> 
      </td>
    </tr>
  </table>
 </div>
 </body></html>