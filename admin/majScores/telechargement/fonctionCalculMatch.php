 

<?php
function connectionDesFonctions ($comite)
{
if ($comite == "f1" OR $comite =="fed2" OR $comite == "fed3GS" OR $comite =="fed3NE")		  

//require ('../../connect.connection2.php');
//mysql_connect("127.0.0.1", "root", ""); // Connexion à MySQL
//mysql_select_db("onepip-france-db3"); // S&eacute;lection de la base onepip 
//mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion à MySQL
//mysql_select_db("onepip-france-db2"); // S&eacute;lection de la base onepip

require ("../../../connect1/connection3.php") ;		
else
require ("../../../connect1/connection2.php") ;	

}
//*****************************************************


function matchsNonSaisis ($comite, $division)	  
{

if ($comite == "f1" OR $comite =="fed2" OR $comite == "fed3GS" OR $comite =="fed3NE")		  

//require ('../../connect.connection2.php');
//mysql_connect("127.0.0.1", "root", ""); // Connexion à MySQL
//mysql_select_db("onepip-france-db3"); // S&eacute;lection de la base onepip 
//mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion à MySQL
//mysql_select_db("onepip-france-db2"); // S&eacute;lection de la base onepip

require ("../../../connect1/connection3.php") ;		
else
require ("../../../connect1/connection2.php") ;	

if (isset ($comite)) $comite=$comite;else $comite='';

$division;	  
		  
$phpmatchs="php".$comite."_matchs";


 $dateDuJour = date('Y-m-d');
//echo  $dateDuJour;

$debutDivision = $division.'00';
$finDivision = $division.'22';


//$dateDuJour = date("Y-m-d");
//$ma_date=2020-12-26;
   
$reponse = $bdd->query("SELECT COUNT(id) AS sommeDesMatchsNonSaisis
						FROM $phpmatchs
						WHERE buts_dom is NULL and buts_ext is NULL
											and id_journee BETWEEN $debutDivision AND $finDivision
											and date_reelle < '$dateDuJour'
											");
				$donnees = $reponse->fetch();
										
						echo $donnees['sommeDesMatchsNonSaisis'];
						

$reponse->closeCursor();		 
 
}	

//***************************************************************

function matchsReportes ()	  
{
if ($comite == "f1" OR $comite =="fed2" OR $comite == "fed3GS" OR $comite =="fed3NE")		  

//require ('../../connect.connection2.php');
//mysql_connect("127.0.0.1", "root", ""); // Connexion à MySQL
//mysql_select_db("onepip-france-db3"); // S&eacute;lection de la base onepip 
//mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion à MySQL
//mysql_select_db("onepip-france-db2"); // S&eacute;lection de la base onepip

require ("../../../connect1/connection3.php") ;		
else
require ("../../../connect1/connection2.php") ;	






 $ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
//echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
?>
 
  <?php
//$comite="mpy";
$phpComiteMatchs="php".$comite."_matchs";
$phpComiteJournees="php".$comite."_journees";
$phpComiteClubs ="php".$comite."_clubs";

$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
//echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35




	//	echo "matchs a jouer Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom ,  m.id_equipe_ext,  m.id_journee,  m.date_reelle
			FROM  $phpComiteMatchs m 
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			INNER JOIN $phpComiteJournees j ON j.date_prevue != m.date_reelle AND j.id = m.id_journee
			WHERE   m.id_equipe_dom < 900000 and  m.buts_dom is NULL and  m.buts_ext is NULL 
			and '$ma_date' <   m.date_reelle
			AND j.id_champ = $champ
			ORDER BY id_journee";
			
					$result = 	mysql_query($query);		
					while($row = mysql_fetch_array($result))
						{    	
							$test=$row[2];			
						}
		if ($test > 0)
			{
	  echo "Rencontres   de la poule report&eacute;es"; 
	  echo "<br>";
	  		}

	//	echo "matchs a jouer Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom ,  m.id_equipe_ext,  m.id_journee,  m.date_reelle
			FROM  $phpComiteMatchs m 
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			INNER JOIN $phpComiteJournees j ON j.date_prevue != m.date_reelle AND j.id = m.id_journee
			WHERE   m.id_equipe_dom < 900000 and  m.buts_dom is NULL and  m.buts_ext is NULL 
			and '$ma_date' <   m.date_reelle
			AND j.id_champ = $champ
			ORDER BY id_journee";
			
					$result = 	mysql_query($query);		
					while($row = mysql_fetch_array($result))
						{    	
							echo "Journ&eacute;e ".''.substr($row[2],3,2)."<br>";			
						}
	echo "<br>";

	//	echo "matchs a jouer Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom ,  m.id_equipe_ext,  m.id_journee,  m.date_reelle
			FROM  $phpComiteMatchs m 
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			INNER JOIN $phpComiteJournees j ON j.date_prevue != m.date_reelle AND j.id = m.id_journee
			WHERE   m.id_equipe_dom < 900000 and  m.buts_dom is NULL and  m.buts_ext is NULL 
			and '$ma_date' <   m.date_reelle
			AND j.id_champ = $champ
			ORDER BY id_journee";
			
					$result = 	mysql_query($query);		
					while($row = mysql_fetch_array($result))
						{    	
							echo $row[0].''."<br>";			
						}
	echo "<br>";

        	//	echo "matchs a jouer Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom ,  m.id_equipe_ext,  m.id_journee,  m.date_reelle
			FROM  $phpComiteMatchs m 
			INNER JOIN $phpComiteClubs c ON m.id_equipe_ext=c.id
			INNER JOIN $phpComiteJournees j ON j.date_prevue != m.date_reelle AND j.id = m.id_journee
			WHERE   m.id_equipe_ext < 900000 and  m.buts_dom is NULL and  m.buts_ext is NULL 
			and '$ma_date' <   m.date_reelle
			AND j.id_champ = $champ
			ORDER BY id_journee";
			
					$result = 	mysql_query($query);		
					while($row = mysql_fetch_array($result))
						{    	
							echo " - ".$row[0].''."<br>";			
						}
	echo "<br>";

      
	//	echo "matchs a jouer Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom ,  m.id_equipe_ext,  m.id_journee,  m.date_reelle
			FROM  $phpComiteMatchs m 
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			INNER JOIN $phpComiteJournees j ON j.date_prevue != m.date_reelle AND j.id = m.id_journee
			WHERE   m.id_equipe_dom < 900000 and  m.buts_dom is NULL and  m.buts_ext is NULL 
			and '$ma_date' <   m.date_reelle
			AND j.id_champ = $champ
			ORDER BY id_journee";
			
					$result = 	mysql_query($query);		
					while($row = mysql_fetch_array($result))
						{    	
						$dateUS = $row[3];			
						echo "Report&eacute;e au ".''.date('d-m-Y',strtotime($dateUS)).''."<br>";;
						}
	echo "<br>";



}
	
	?>
 
