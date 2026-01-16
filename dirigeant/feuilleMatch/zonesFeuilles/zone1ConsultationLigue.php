<?php		
	
$bdfeuilleA = "php".''.$comite.''."_feuilleA";
$bdcomite = "php".''.$comite.''."_joueurs";

$tabJoueurA = array ();
for ($i = 1 ; $i < 24; $i++)
{


$numero = "N".''.$i;
require   "../../../connect/connexion2.php";
$reponse = $bdd->query("SELECT $bdcomite.nom, $bdcomite.licence
			FROM $bdfeuilleA  
			INNER JOIN $bdcomite ON $bdcomite.id_perso=$bdfeuilleA.$numero
			WHERE $bdfeuilleA.id=$code_match AND $bdcomite.club=$equipeA AND $bdcomite.fonction=1");
			
			while ($row = $reponse->fetch() )
					{
				  	$tabJoueurA[]=$row[0];
				 	$tabLicenceA[]=substr($row[1],0,4).' '.substr($row[1],4,2).' '.substr($row[1],6,1).' '.substr($row[1],-6);
					}
if (isset ($tabJoueurA[$i-1])) ${"joueurA".$i}=$tabJoueurA[$i-1];else  ${"joueurA".$i}="";
if (isset ($tabLicenceA[$i-1])) $tabLicenceA[$i-1]=$tabLicenceA[$i-1];else $tabLicenceA[$i-1]="";
}



$bdfeuilleB = "php".''.$comite.''."_feuilleB";
$bdcomite = "php".''.$comite.''."_joueurs";	  
//echo $bdfeuilleB;
//echo $bdcomite;		  
		  
$tabJoueurB = array ();

for ($j = 1 ; $j < 24; $j++ )
{
$numero = "N".''.$j;
$reponse = $bdd->query("	SELECT $bdcomite.nom, $bdcomite.licence
				FROM $bdfeuilleB 
				INNER JOIN $bdcomite ON $bdcomite.id_perso=$bdfeuilleB.$numero
				WHERE $bdfeuilleB.id=$code_match AND $bdcomite.club=$equipeB AND $bdcomite.fonction='1'");
				
					
					while ($row = $reponse->fetch() )
						{
						  $tabJoueurB[]=$row[0];
						  $tabLicenceB[]=substr($row[1],0,4).' '.substr($row[1],4,2).' '.substr($row[1],6,1).' '.substr($row[1],-6);
						}

if (isset ($tabJoueurB[$j-1])) $tabJoueurB[$j-1]=$tabJoueurB[$j-1];else $tabJoueurB[$j-1]="";
if (isset ($tabLicenceB[$j-1])) $tabLicenceB[$j-1]=$tabLicenceB[$j-1];else $tabLicenceB[$j-1]="";

}


        
//	$comite = $_GET['comite'];
//	$connect = $_GET['connect'];
//	
//		  if ($doubleBase != 1)
//		  	{
//			$connect=$connect;
//			$comite=$comite;
//			}
//		elseif ($doubleBase == 1 and $equipe == $equipeB)
//			{
//			$connect=$connect;
//			$comite=$comite;
//			}
//		elseif	($doubleBase == 1 and $equipe != $equipeB)
//			{
//			$connect=$connectInvitee;
//			$comite = $comiteInvite;
//			}	  
		  
//	$connect = "connection3";
//	$comite = "fed3GS";	
		
		//echo $connect;
//echo $comite;  
		  

?>

<table width="900" border="1" cellspacing="0"  cellpadding="0" align="left" height="500">
  <tr> 
    <td height="14" width="25" bgcolor="#000000"><div ><div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><font color="#FFFFFF">A</font></font></b></div></div></td>
    <td colspan="3" height="14" ><div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"><?php echo $clubA; ?> </font></b></div></td>
    <td rowspan="2" height="39" bgcolor="#CCCCCC" >  <div align="center"></div></td>
    <td height="14" width="26" bgcolor="#000000" ><div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><font color="#FFFFFF">B</font></font></b></div></td>
    <td height="14" colspan="3" ><div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"><?php echo $clubB; ?></font></b></div></td>
    <td rowspan="2" height="39" bgcolor="#CCCCCC" ><div align="center"></div></td>
  </tr>
  
  <tr> 
    <td height="400" rowspan="16" ></td>
    <td width="16" height="25"  id="Taille">N&deg;</td>
    <td width="138" height="25" id="Taille">NOM (lettres capitales)</td>
    <td width="135" height="25" id="Taille">N&deg;de licence </td>
    <td height="400" bgcolor="#FFFFFF" rowspan="16"></td>
    <td height="25" width="39"  id="Taille">N&deg;</td>
    <td height="25" width="136" id="Taille">NOM (lettres capitales)</td>
    <td height="25" width="141" id="Taille">N&deg;de licence</td>
  </tr>
 
  <?php 
 for ($i=0; $i<24; $i++)
 {
?>
 <tr  valign="middle" align="center"> 
    <td width="16" height="25" id="Taille"><?php echo $i+1;?> </td>
    <td width="138" height="25"><div id="Taillebold"><?php echo $tabJoueurA[$i];?></div></td>
    <td width="135" height="25" id="Taille"><?php if ($tabLicenceA[$i]>0) echo $tabLicenceA[$i];?></td>
	<td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
   
    <td width="39" height="25"><div id="Taille"> <?php echo $i+1;?></div></td>
    <td width="136" height="25"><div id="Taillebold"><?php echo $tabJoueurB[$i];?></div></td>
    <td width="141" height="25"><div id="Taille"><?php if ($tabLicenceB[$i]>0) echo $tabLicenceB[$i];?></div></td>
    <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
  </tr>
  <?php
 }
?> 
 
  <tr valign="middle" align="center"> 
    <td colspan="2" height="25" >&nbsp;</td>
    <td colspan="2" height="25" ><div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Capitaine :N&deg; <?php if ($capitaine >0) echo $capitaine;?><b> </b> </font></div></td>
    <td width="31" bgcolor="#CCCCCC" height="25" >&nbsp;</td>
    <td colspan="2" height="25" >&nbsp;</td>
    <td colspan="2" height="25" ><div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Capitaine :N&deg; <?php if ($capitaineB >0) echo $capitaineB;?><b> </b> </font></div></td>
    <td width="27" bgcolor="#CCCCCC" height="25" >&nbsp;</td>
  </tr>
</table>
</body>
</html>
