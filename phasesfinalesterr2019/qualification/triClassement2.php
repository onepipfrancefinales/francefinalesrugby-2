<?php
//if (isset ($tabEquipe[0])) $clubA1711 = $tabEquipe[0]; 
//if (isset ($tabPoints[0])) $clubA1001 = $tabPoints1[0];
//if (isset ($tabEquipe[1])) $clubA1712 = $tabEquipe[1]; 
//if (isset ($tabPoints[1])) $clubA1001 = $tabPoints1[1];
//if (isset ($tabEquipe[2])) $clubA1713 = $tabEquipe[2]; 
//if (isset ($tabPoints[2])) $clubA1001 = $tabPoints1[2];
//if (isset ($tabEquipe[3])) $clubA1714 = $tabEquipe[3]; 
//if (isset ($tabPoints[3])) $clubA1001 = $tabPoints1[3];






//$tabEquipe = array();
//$tabPoints =array();
/*$requete = "	select NOM, POINTS
						from phpca_clmnt_cache
						where ID_CHAMP=171";
						
			$result = mysql_query($requete);
		

					while ($row = mysql_fetch_array ($result))
							{
						//	$tabEquipe[] = $row[0];
							echo $row[0];		
							}
							

$requete = "SELECT NOM
			FROM phpca_clmnt_cache
			WHERE  ID_CHAMP='171' 
			";	
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
						{ 
					     echo $row[0];
						}
	*/						
?>	

<?php
require ("../connect/connexion2.php");
//mysql_connect("127.0.0.1", "root", ""); 
//mysql_select_db("onepip-france-db2"); 

$tabScores = array() ;
	
	
	$requete = "SELECT NOM
				FROM phpca_clmnt_cache
				WHERE ID_CHAMP='171' 
				ORDER BY POINTS desc limit 0,4"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
						{ 
						$tabScores[] = $row[0];
						}
								
	if (isset ($tabScores[0])) $A4001 = $tabScores[0]; else $A4001='-'; 
	if (isset ($tabScores[1])) $A4002 = $tabScores[1]; else $A4002='-';
	if (isset ($tabScores[2])) $A4003 = $tabScores[2]; else $A4003='-';
	if (isset ($tabScores[3])) $A4004 = $tabScores[3]; else $A4004='-';

echo "Poule 1";	"<br />"	;echo "<br />"	;
echo "1P1 - A8002 -".$tabScores[0];echo "<br />"	;
echo "2P1 - A8010 -".$tabScores[1];echo "<br />"	;
echo "3P1 - A8003 -".$tabScores[2];echo "<br />"	;
echo "4P1 - A8011 -".$tabScores[3];echo "<br />"	;

$A1P1 = $tabScores[0];
$A1P2 = $tabScores[1];
$A1P3 = $tabScores[2];
$A1P4 = $tabScores[3];

//**************************************************************
//**************************************************************



$tabScores = array() ;
	
	
	$requete = "SELECT NOM
				FROM phpca_clmnt_cache
				WHERE ID_CHAMP='172' 
				ORDER BY POINTS desc limit 0,4"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
						{ 
						$tabScores[] = $row[0];
						}
								
	if (isset ($tabScores[0])) $A4001 = $tabScores[0]; else $A4001='-'; 
	if (isset ($tabScores[1])) $A4002 = $tabScores[1]; else $A4002='-';
	if (isset ($tabScores[2])) $A4003 = $tabScores[2]; else $A4003='-';
	if (isset ($tabScores[3])) $A4004 = $tabScores[3]; else $A4004='-';
echo "<br />"	;
echo "Poule 2";	"<br />"	;echo "<br />"	;
echo "1P2 - A8012 -".$tabScores[0];echo "<br />"	;
echo "2P2 - A8004 -".$tabScores[1];echo "<br />"	;
echo "3P2 - A8009 -".$tabScores[2];echo "<br />"	;
echo "4P2 - A8001 -".$tabScores[3];echo "<br />"	;

$A2P1 = $tabScores[0];
$A2P2 = $tabScores[1];
$A2P3 = $tabScores[2];
$A2P4 = $tabScores[3];


//**************************************************************
//**************************************************************


$tabScores = array() ;
	
	
	$requete = "SELECT NOM
				FROM phpca_clmnt_cache
				WHERE ID_CHAMP='173' 
				ORDER BY POINTS desc limit 0,4"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
						{ 
						$tabScores[] = $row[0];
						}
								
	if (isset ($tabScores[0])) $A4001 = $tabScores[0]; else $A4001='-'; 
	if (isset ($tabScores[1])) $A4002 = $tabScores[1]; else $A4002='-';
	if (isset ($tabScores[2])) $A4003 = $tabScores[2]; else $A4003='-';
	if (isset ($tabScores[3])) $A4004 = $tabScores[3]; else $A4004='-';
echo "<br />"	;
echo "Poule 3";	"<br />"	;echo "<br />"	;
echo "1P3 - A8014 -".$tabScores[0];echo "<br />"	;
echo "2P3 - A8008 -".$tabScores[1];echo "<br />"	;
echo "3P3 - A8015 -".$tabScores[2];echo "<br />"	;
echo "4P3 - A8005 -".$tabScores[3];echo "<br />"	;

$A3P1 = $tabScores[0];
$A3P2 = $tabScores[1];
$A3P3 = $tabScores[2];
$A3P4 = $tabScores[3];


//**************************************************************
//**************************************************************

$tabScores = array() ;
	
	
	$requete = "SELECT NOM
				FROM phpca_clmnt_cache
				WHERE ID_CHAMP='174' 
				ORDER BY POINTS desc limit 0,4"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
						{ 
						$tabScores[] = $row[0];
						}
								
	if (isset ($tabScores[0])) $A4001 = $tabScores[0]; else $A4001='-'; 
	if (isset ($tabScores[1])) $A4002 = $tabScores[1]; else $A4002='-';
	if (isset ($tabScores[2])) $A4003 = $tabScores[2]; else $A4003='-';
	if (isset ($tabScores[3])) $A4004 = $tabScores[3]; else $A4004='-';
echo "<br />"	;
echo "Poule 4";	"<br />"	;echo "<br />"	;
echo "1P4 - A8006 -".$tabScores[0];echo "<br />"	;
echo "2P4 - A8016 -".$tabScores[1];echo "<br />"	;
echo "3P4 - A8007 -".$tabScores[2];echo "<br />"	;
echo "4P4 - A8013 -".$tabScores[3];echo "<br />"	;

$A4P1 = $tabScores[0];
$A4P2 = $tabScores[1];
$A4P3 = $tabScores[2];
$A4P4 = $tabScores[3];


//**************************************************************
//**************************************************************
?>





<?php				
/*							
echo $tabEquipe[0];	 echo "<br />"	;			
echo $tabEquipe[1]; echo "<br />"	;	
echo $tabEquipe[2]; echo "<br />"	;	
echo $tabEquipe[3]; echo "<br />"	;	



?>
<br><br>
<?php



if (isset ($tabEquipe2[0])) $tabEquipes1[0] = $tabEquipes1[0]; 
if (isset ($tabPoints2[0])) $clubA1001 = $tabPoints2[0];
if (isset ($tabEquipe2[1])) $clubA1001 = $tabEquipes2[1]; 
if (isset ($tabPoints2[1])) $clubA1001 = $tabPoints2[1];
if (isset ($tabEquipe2[2])) $clubA1001 = $tabEquipes2[2]; 
if (isset ($tabPoints2[2])) $clubA1001 = $tabPoints2[2];
if (isset ($tabEquipe2[3])) $clubA1001 = $tabEquipes2[3]; 
if (isset ($tabPoints2[3])) $clubA1001 = $tabPoints2[3];

$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from phpab_clmnt_cache
						where ID_CHAMP=172
						ORDER BY POINTS desc limit 0,4";
			
		$res= $conn ->query ($requete);

					while ($data = mysqli_fetch_array ($res))
							{
							$tabEquipe2[] = $data['NOM'];
					 		$tabPoints2[] = $data['POINTS'];	
							}
echo "-172-";echo "<br />"	;

$clubA1721=$tabPoints2[0];
$club2 = $tabEquipe2[0];
echo $tabEquipe2[0].' '.$tabPoints2[0]; echo "<br />"	;					
echo $tabEquipe2[1].' '.$tabPoints2[1]; echo "<br />"	;	
echo $tabEquipe2[2].' '.$tabPoints2[2]; echo "<br />"	;	
echo $tabEquipe2[3].' '.$tabPoints2[3]; echo "<br />"	;	
?>


<?php
if (isset ($tabEquipe3[0])) $clubA1001 = $tabEquipes3[0]; 
if (isset ($tabPoints3[0])) $clubA1001 = $tabPoints3[0];
if (isset ($tabEquipe3[1])) $clubA1001 = $tabEquipes3[1]; 
if (isset ($tabPoints3[1])) $clubA1001 = $tabPoints3[1];
if (isset ($tabEquipe3[2])) $clubA1001 = $tabEquipes3[2]; 
if (isset ($tabPoints3[2])) $clubA1001 = $tabPoints3[2];
if (isset ($tabEquipe3[3])) $clubA1001 = $tabEquipes3[3]; 
if (isset ($tabPoints3[3])) $clubA1001 = $tabPoints3[3];

$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from phpab_clmnt_cache
						where ID_CHAMP=173
						ORDER BY POINTS desc limit 0,4";
			
		$res= $conn ->query ($requete);

					while ($data = mysqli_fetch_array ($res))
							{
							$tabEquipe3[] = $data['NOM'];
					 		$tabPoints3[] = $data['POINTS'];	
							}
echo "<br />"	;echo "<br />"	;							
echo "-173-";echo "<br />"	;

$clubA1731=$tabPoints3[0];
$club3 = $tabEquipe3[0];
echo $tabEquipe3[0].' '.$tabPoints3[0]; echo "<br />"	;					
echo $tabEquipe3[1].' '.$tabPoints3[1]; echo "<br />"	;	
echo $tabEquipe3[2].' '.$tabPoints3[2]; echo "<br />"	;	
echo $tabEquipe3[3].' '.$tabPoints3[3]; echo "<br />"	;	
?>
<br/><br/>
<?php
if (isset ($tabEquipe4[0])) $clubA1001 = $tabEquipes4[0]; 
if (isset ($tabPoints4[0])) $clubA1001 = $tabPoints4[0];
if (isset ($tabEquipe4[1])) $clubA1001 = $tabEquipes4[1]; 
if (isset ($tabPoints4[1])) $clubA1001 = $tabPoints4[1];
if (isset ($tabEquipe4[2])) $clubA1001 = $tabEquipes4[2]; 
if (isset ($tabPoints4[2])) $clubA1001 = $tabPoints4[2];
if (isset ($tabEquipe4[3])) $clubA1001 = $tabEquipes4[3]; 
if (isset ($tabPoints4[3])) $clubA1001 = $tabPoints4[3];

$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from phpab_clmnt_cache
						where ID_CHAMP=174
						ORDER BY POINTS desc limit 0,4";
			
		$res= $conn ->query ($requete);

					while ($data = mysqli_fetch_array ($res))
							{
							$tabEquipe4[] = $data['NOM'];
					 		$tabPoints4[] = $data['POINTS'];	
							}
echo "-174-";echo "<br />"	;


$clubA1741=$tabPoints4[0];
$club4 = $tabEquipe4[0];
echo $tabEquipe4[0].' '.$tabPoints4[0]; echo "<br />"	;					
echo $tabEquipe4[1].' '.$tabPoints4[1]; echo "<br />"	;	
echo $tabEquipe4[2].' '.$tabPoints4[2]; echo "<br />"	;	
echo $tabEquipe4[3].' '.$tabPoints4[3]; echo "<br />"	;	
?>
<br/><br/>
<?php
if (isset ($tabEquipe5[0])) $clubA1001 = $tabEquipes5[0]; 
if (isset ($tabPoints5[0])) $clubA1001 = $tabPoints5[0];
if (isset ($tabEquipe5[1])) $clubA1001 = $tabEquipes5[1]; 
if (isset ($tabPoints5[1])) $clubA1001 = $tabPoints5[1];
if (isset ($tabEquipe5[2])) $clubA1001 = $tabEquipes5[2]; 
if (isset ($tabPoints5[2])) $clubA1001 = $tabPoints5[2];
if (isset ($tabEquipe5[3])) $clubA1001 = $tabEquipes5[3]; 
if (isset ($tabPoints5[3])) $clubA1001 = $tabPoints5[3];

$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from phpab_clmnt_cache
						where ID_CHAMP=175
						ORDER BY POINTS desc limit 0,4";
			
		$res= $conn ->query ($requete);

					while ($data = mysqli_fetch_array ($res))
							{
							$tabEquipe5[] = $data['NOM'];
					 		$tabPoints5[] = $data['POINTS'];	
							}
echo "-175-";echo "<br />"	;


$clubA1751=$tabPoints5[0];
$club5 = $tabEquipe5[0];
echo $tabEquipe5[0].' '.$tabPoints5[0]; echo "<br />"	;					
echo $tabEquipe5[1].' '.$tabPoints5[1]; echo "<br />"	;	
echo $tabEquipe5[2].' '.$tabPoints5[2]; echo "<br />"	;	
echo $tabEquipe5[3].' '.$tabPoints5[3]; echo "<br />"	;	
?>
- - -- - - - - - -- - - -- - -- - 
<BR>
<?php
echo $clubA1711;echo "<br />"	;
echo $clubA1721;echo "<br />"	;
echo $clubA1731;echo "<br />"	;
echo $clubA1741;echo "<br />"	;
echo $clubA1751;echo "<br />"	;

for ($i=1711; $i<1761; $i= $i+10)
{
echo $i;echo "<br />"	;




}
?>
<?php
$Tableau = array( $clubA1711,  $clubA1721,  $clubA1731,  $clubA1741, $clubA1751);
$TableauClub = array( $club1,  $club2,  $club3,  $club4, $club5); 
echo "Avant:";
for($K = 0; $K < count($Tableau); $K++) {
 echo  $Tableau[$K].", ";
}

for($K = 0; $K < count($Tableau); $K++) {
 echo  $TableauClub[$K].", ";
}

if (isset ($tableauClub[0])) $tableauClub[0] = $tableauClub[0];
if (isset ($tableauClub[1])) $tableauClub[1] = $tableauClub[1];
if (isset ($tableauClub[2])) $tableauClub[2] = $tableauClub[2];
if (isset ($tableauClub[3])) $tableauClub[3] = $tableauClub[3];
if (isset ($tableauClub[4])) $tableauClub[4] = $tableauClub[4];
if (isset ($tableauClub[5])) $tableauClub[5] = $tableauClub[5];
 
for($I = count($Tableau) - 2;$I >= 0; $I--) {
 for($J = 0; $J <= $I; $J++) {
  if($Tableau[$J + 1] > $Tableau[$J]) 
  {
   $t = $Tableau[$J + 1];
   $club = $tableauClub[$J +1];
   
   $Tableau[$J + 1] = $Tableau[$J];
   $tableauClub[$J +1] = $tableauClub[$J];
   
   $Tableau[$J] = $t;
   $tableauClub[$J] = $tableauClub;
  }
 }
}
 
echo "<br />Apr&egrave; s:";
for($L = 0; $L < count($Tableau); $L++) {
  echo $Tableau[$L].", ";
}
echo "<br />";
?>
*/