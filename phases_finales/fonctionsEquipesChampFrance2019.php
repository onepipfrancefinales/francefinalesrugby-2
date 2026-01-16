
 <?php
//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------    Sélection des équipes             ------------   **
//**																   **
//***********************************************************************
//*********************************************************************** 



 
function recupEquipes2019 ($division, $annee)

{
if (isset ($type)) $type=$type; else $type = "non type defini";
if (isset ($type2)) $type=$type2; else $type2 = "non type2 defini";
if (isset ($prefixe)) $prefixe = $prefixe; else $prefixe = "variable prefixe non defini";

require '../../connect/connection1.php';
$requete = "SELECT type
			FROM bdpf2018
			WHERE 	id=$division 		";
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$type = $row[0];
						}
						
					
						
																	
echo $type;echo "<br/>";
echo substr($type,3,2);echo "<br/>";
//$type = substr($type,0,3);echo "<br/>";


//$type = substr($type,3,2);echo "<br/>";
echo "test"." ".$type;echo "<br/>";

//trente-deuxième
 if (substr($type,0,3)==932 or substr($type,0,3) ==964)
	{
	$prefixe = "clubA320";
	echo $prefixe;
	}
//seizième
elseif(substr($type,3,2)== 16 or substr($type,3,2)== 32)
	{
	$prefixe = "clubA160";
	echo $prefixe;
	}
//huitième
elseif (substr($type,5,2)== 08 or substr($type,5,2)== 16)
	{
	$prefixe = "ClubA800";
	
	}
//quarts	
elseif (substr($type,7,2)== 08 or substr($type,7,2)== 16)
	{
	$prefixe = "clubA400";
	}
	
	/*
elseif ($type==2me)

	$prefixe = "ClubA200";

elseif ($type==me)

	$prefixe = "clubA100";

*/
	
//Equipes de 	de 1 à 10
	
	$debut =1;
	$fin=10;

	$tabNomEquipes = array();	
    $tabSigleComite = array();
	

	for ($i=$debut ; $i< $fin; $i++)
	{	 

		global ${"E0".($i)};
		$equipes = "E0".''.$i;

	
		$query = "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2019.$equipes 
					FROM bdclubs, bdpf2019 
					WHERE bdclubs.code=bdpf2019.$equipes and bdpf2019.id=$division "; 
		$result = mysql_query($query) or die(mysql_error());
		while ($row = mysql_fetch_array($result) )
			{ 
			$tabNomEquipes[] = $row[1];
			$tabSigleComite[] = $row[2];
			
			
			//$nom = $row[1];
			//$sigle = $row[2];
			}
			
	//	echo $tabNomEquipes[$i];echo "<br/>";

		global ${"$prefixe".(+$i)};
		if (isset(${"$prefixe".(+$i)})) ${"$prefixe".(+$i)}=${"$prefixe".(+$i)};${"$prefixe".(+$i)}="dggdf";	
		//if (isset (${"$prefixe".(+$i)})) ${"$prefixe".(+$i)} =	$tabNomEquipes[$i];	${"$prefixe".(+$i)}="hhhhh";
		${"$prefixe".(+$i)} =	$tabNomEquipes[$i];	
		echo ${"$prefixe".(+$i)};echo "<br/>";
		
		
	/*	
		global ${"clubA320".(+$i)};
		if (isset(${"clubA320".(+$i)})) ${"clubA320".(+$i)}=${"clubA320".(+$i)};${"clubA320".(+$i)}="dggdf";	
		//if (isset (${"clubA320".(+$i)})) ${"clubA320".(+$i)} =	$tabNomEquipes[$i];	${"clubA320".(+$i)}="hhhhh";
		${"clubA320".(+$i)} =	$tabNomEquipes[$i];	
		echo ${"clubA320".(+$i)};echo "<br/>";
 	*/
	}
	
	
	
	
	
	//Equipes de 1 à 64
	
	$debut =10;
	$fin=65;

	$tabNomEquipes = array();	
    $tabSigleComite = array();
	

	for ($i=$debut ; $i< $fin; $i++)
	{	 

		global ${"E".($i)};
		$equipes = "E".''.$i;

	
		$query = "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2019.$equipes 
					FROM bdclubs, bdpf2019 
					WHERE bdclubs.code=bdpf2019.$equipes and bdpf2019.id=$division "; 
		$result = mysql_query($query) or die(mysql_error());
		while ($row = mysql_fetch_array($result) )
			{ 
			$tabNomEquipes[] = $row[1];
			$tabSigleComite[] = $row[2];;
			}
			
		echo $tabNomEquipes[$i];echo "<br/>";

		$prefixe = substr($prefixe,0,7);


		global ${"$prefixe".(+$i)};
		if (isset(${"$prefixe".(+$i)})) ${"$prefixe".(+$i)}=${"$prefixe".(+$i)};${"$prefixe".(+$i)}="dggdf";	
		${"$prefixe".(+$i)} =	$tabNomEquipes[$i];	
		echo ${"$prefixe".(+$i)};echo "<br/>";
		
/*		
		global ${"clubA16".(+$i)};
		if (isset(${"clubA16".(+$i)})) ${"clubA16".(+$i)}=${"clubA16".(+$i)};${"clubA16".(+$i)}="dggdf";	
		${"clubA16".(+$i)} =	$tabNomEquipes[$i];	
		echo ${"clubA16".(+$i)};echo "<br/>";
	*/	
	
	}
	
}

 ?>
 
