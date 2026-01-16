 <?php  

//******************************************************************************

require ("../../../connect1/connection2.php") ;

if (isset ($division)) $division=$division;else $division='';
if (isset ($tabDivision)) $tabDivision=$tabDivision;else $tabDivision='';

$tabLigue = array ('ca','ab','au');
foreach($tabLigue as $ligue)
{
	
$php_clmnt_cache = "php".$ligue."_clmnt_cache";

	$tabDivision = array (171,172,173,174,181,182,183,184,191,192,193,194,195,201,202,203,204,205,211,212,213,214,215,216,217,271,272,273,274,9181,9182,9183,9184,9191,9192,9193,1914);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	$reponse = $bdd->query("SELECT SUM(POINTS)  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										}
	}

	for ($i = 0; $i<39; $i++)
	{
	if ($tabPoints[$i]>0)
		{
	//	echo $tabDivision[$i].' '.$tabPoints[$i]."<br />";
		${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i];
		}
	}
}


$ligue= 'idf';

$php_clmnt_cache = "php".$ligue."_clmnt_cache";

	$tabDivision = array (171,172,181,182,191,192,201,202,211,271,272,9181,9182);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	 $reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										
										}
	}
for ($i=0; $i<13; $i++) 
	{
	
	if ($tabPoints[$i]>0)
		{
	//	echo $tabDivision[$i].' '.$tabPoints[$i]."<br />";
		${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i];
		}
	}	


echo "****************************"."<br/>";

$ligue= 'bg';


$php_clmnt_cache = "php".$ligue."_clmnt_cache";


	$tabDivision = array (171,181,191,201,211,221,271,9181);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	 $reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<7; $i++) 
	{
	
	${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}	

echo $persobg171;echo "<br />";
echo $persobg181;echo "<br />";

echo "****************************"."<br/>";

$ligue= 'fl';


$php_clmnt_cache = "php".$ligue."_clmnt_cache";


	$tabDivision = array (171,181,191,201,211,221,271,9181);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	 $reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<7; $i++) 
	{
	
	${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}	

//echo $persobg171;echo "<br />";
//echo $persobg181;echo "<br />";

echo "****************************"."<br/>";

$ligue= 'ce';


$php_clmnt_cache = "php".$ligue."_clmnt_cache";


	$tabDivision = array (171,181,191,201,211,221,271,9181);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	 $reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<7; $i++) 
	{
	
	${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}	


echo "****************************"."<br/>";

$ligue= 'br';


$php_clmnt_cache = "php".$ligue."_clmnt_cache";


	$tabDivision = array (171,181,191,201,211,221,271,9181);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	 $reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<7; $i++) 
	{
	
	${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}	


echo "****************************"."<br/>";

$ligue= 'n';


$php_clmnt_cache = "php".$ligue."_clmnt_cache";


	$tabDivision = array (171,181,191,201,211,221,271,9181);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	 $reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<7; $i++) 
	{
	
	${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}	

echo "****************************"."<br/>";

$ligue= 'pl';


$php_clmnt_cache = "php".$ligue."_clmnt_cache";


	$tabDivision = array (171,181,191,201,211,221,271,9181);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	 $reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<7; $i++) 
	{
	
	${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}	

echo "****************************"."<br/>";

$ligue= 'pr';


$php_clmnt_cache = "php".$ligue."_clmnt_cache";


	$tabDivision = array (171,181,191,201,211,221,271,9181);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	 $reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<8; $i++) 
	{
	
	${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}	

echo "****************************"."<br/>";

$ligue= 'al';


$php_clmnt_cache = "php".$ligue."_clmnt_cache";


	$tabDivision = array (171,181,191,201,211,221,271,9181);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	 $reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<7; $i++) 
	{
	
	${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}	







/*

$tabLigue = array ('bg','fl' );

foreach($tabLigue as $ligue)
{


echo $ligue;echo "<br />";	
$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (171,181,191,201,211,221,271,9181);
	
	
	foreach($tabDivision as $division)
	{
	$reponse = $bdd->query("SELECT SUM(POINTS)  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];	
										}
	}
		for ($i = 0; $i<7; $i++)
		{
		if ($tabPoints[$i]>0)
			{
		//	echo $tabDivision[$i].' '.$tabPoints[$i]."<br />";
			${"perso".$ligue.$tabDivision[$i]} = $tabPoints[$i];
			
			
			}
		}
		echo $tabPoints[0];echo "<br />";
			echo $tabPoints[1];echo "<br />";
			echo $tabPoints[2];echo "<br />";
			echo $tabPoints[3];echo "<br />";
			echo $tabPoints[4];echo "<br />";
			echo $tabPoints[5];echo "<br />";
}
	
echo $persobg171;
*/
echo "****************************"."<br/>";
require ("../../../connect1/connection3.php") ;

$ligue= 'f1';
//echo $ligue;
//echo "<br/>";
$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (141,142,143,144);
	$tabPoints = array();
	
	
	foreach($tabDivision as $division)
	{

	$reponse = $bdd->query("SELECT SUM(POINTS),id_champ 
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
	for ($i=0; $i<4; $i++) 
	{
	${"persofed".$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}


//**************************************************************	

$ligue= 'fed2';

$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (151,152,153,154,155,156,157,158,251,252,253,254,255,256,257,258);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	$reponse = $bdd->query("SELECT SUM(POINTS),id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<16; $i++) 
	{
	
	${"persofed".$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}

//**************************************************************	
$ligue= 'fed3NE';

$php_clmnt_cache = "php".$ligue."_clmnt_cache";

	$tabDivision = array (161,162,163,164,165,166,167,261,262,263,264,265,266,267);
	$tabPoints = array();
	foreach($tabDivision as $division)
	{

	$reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<14; $i++) 
	{
	${"persofedNE".$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}
	
	
	
//**************************************************************	
$ligue= 'fed3GS';


$php_clmnt_cache = "php".$ligue."_clmnt_cache";


	$tabDivision = array (161,162,163,164,165,166,167,261,262,263,264,265,266,267);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	 $reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<14; $i++) 
	{
	
	${"persofedGS".$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}	


  ?>

