  <table width="900" border="1" cellspacing="0"  cellpadding="0" align="left" height="500">
    <tr> 
      <td height="14" width="25" bordercolor="#000000" bgcolor="#000000"> 
        <div > 
          <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
            <font color="#FFFFFF">A</font></font></b></div>
        </div>
      </td>
      <td colspan="3" height="14" bordercolor="#000000"> 
        <div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"> 

		<?php echo $clubA; ?>
          </font></b></div>
      </td>
      <td colspan="3" height="14" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Type<br>
          Qualif</font></div>
      </td>
      <td rowspan="2" height="39" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"></div>
      </td>
      <td height="14" width="26" bgcolor="#000000" bordercolor="#000000"> 
        <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
          <font color="#FFFFFF">B</font></font></b></div>
      </td>
      <td height="14" colspan="3" bordercolor="#000000"> 
        <div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"> 

          <?php echo $clubB; ?>
          </font></b></div>
      </td>
      <td colspan="3" height="14" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Type<br>
          Qualif</font></div>
      </td>
      <td rowspan="2" height="39" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"></div>
      </td>
    </tr>
    <tr> 
      <td height="400" rowspan="16" bordercolor="#000000"><font size="2" face="Arial, Helvetica, sans-serif"> 
        </font></td>
      <td width="16" height="25" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;</font></div>
      </td>
      <td width="138" height="25" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM 
          (lettres capitales)</font></div>
      </td>
      <td width="135" height="25" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de 
          licence</font></div>
      </td>
      <td width="26" height="25" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">A</font></div>
      </td>
      <td width="27" height="25" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">B</font></div>
      </td>
      <td width="28" height="25" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">C</font></div>
      </td>
      <td height="400" bgcolor="#FFFFFF" bordercolor="#000000" rowspan="16"> 
        <div align="center"></div>
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"> 
          </font></div>
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"> 
          </font></div>
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"> 
          </font></div>
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"> 
          </font></div>
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"> 
          </font></div>
        <font size="2" face="Arial, Helvetica, sans-serif"> </font></td>
      <td height="25" width="39" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">N&deg;</font></div>
      </td>
      <td height="25" width="136" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM 
          (lettres capitales)</font></div>
      </td>
      <td height="25" width="141" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de 
          licence</font></div>
      </td>
      <td height="25" width="23" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">A</font></div>
      </td>
      <td height="25" width="22" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">B</font></div>
      </td>
      <td height="25" width="26" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">C</font></div>
      </td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 1 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"><font size="2" face="Arial, Helvetica, sans-serif"> 
          <?php		
	
$bdfeuilleA = "php".''.$comite.''."_feuilleA";
$bdcomite = "php".''.$comite.''."_joueurs";
?>
          <?php
$tabJoueurA = array ();
for ($i = 1 ; $i < 24; $i++)
{


$numero = "N".''.$i;

$reponse = $bdd->query("SELECT $bdcomite.nom, $bdcomite.licence
			FROM $bdfeuilleA  
			INNER JOIN $bdcomite ON $bdcomite.id_perso=$bdfeuilleA.$numero
			WHERE $bdfeuilleA.id=$code_match AND $bdcomite.club=$equipeA AND $bdcomite.fonction=1");
			
			while ($row = $reponse->fetch() )
					{
				  	$tabJoueurA[]=$row[0];
				 	$tabLicenceA[]=substr($row[1],0,4).' '.substr($row[1],4,2).' '.substr($row[1],6,1).' '.substr($row[1],-6);
					}
if (isset ($tabJoueurA[$i-1])) $tabJoueurA[$i-1]=$tabJoueurA[$i-1];else $tabJoueurA[$i-1]="";
if (isset ($tabLicenceA[$i-1])) $tabLicenceA[$i-1]=$tabLicenceA[$i-1];else $tabLicenceA[$i-1]="";
}

?>
          </font> 
          <?php echo $tabJoueurA[0];?>
        </div>
      </td>
      <td width="135" height="25"> 
        
      <div id="Taille"> 
        <?php echo $tabLicenceA[0];?>
      </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 1 </div>
      </td>
      <td width="136" height="25"> 
        
      <div id="Taillebold"> <font size="2" face="Arial, Helvetica, sans-serif"> 
        <?php
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
?>
        </font> 
        <?php echo $tabJoueurB[0];?>
      </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[0];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 2 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[1];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[1];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 2 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[1];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[1];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 3 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[2];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[2];?>
        </div>
      </td>
      <td width="26" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="27" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="28" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="31" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 3 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[2];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[2];?>
        </div>
      </td>
      <td width="23" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="22" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="26" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="27" height="25" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 4 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[3];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[3];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 4 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[3];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[3];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 5 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[4];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[4];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 5 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[4];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[4];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 6 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[5];   ?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[5];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 6 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[5];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[5];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 7 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[6];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[6];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 7 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[6];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[6];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 8 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[7];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[7];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 8 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[7];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[7];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 9 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[8];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[8];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 9 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[8];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[8];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 10 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[9];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[9];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 10 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[9];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[9];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 11 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[10];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[10];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 11 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[10];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[10];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 12</div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[11];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[11];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 12 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[11];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[11];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 13 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[12];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[12];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 13 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[12];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[12];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 14 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[13];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[13];?>
        </div>
      </td>
      <td width="26" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="27" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="28" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="31" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 14 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[13];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[13];?>
        </div>
      </td>
      <td width="23" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="22" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="26" height="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="27" height="25" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 15 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[14];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[14];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 15 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[14];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[14];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr valign="middle" align="center"> 
      <td rowspan="8" bordercolor="#000000" height="203"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"> 
          </font></div>
        <font size="2" face="Arial, Helvetica, sans-serif"> </font><font size="2" face="Arial, Helvetica, sans-serif"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"> </font><font size="2" face="Arial, Helvetica, sans-serif"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"> </font><font size="2" face="Arial, Helvetica, sans-serif"> 
        </font></td>
      <td width="16" height="28" bordercolor="#000000"> 
        <div id="Taille"> 16 </div>
      </td>
      <td width="138" height="28" bordercolor="#000000"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[15];?>
        </div>
      </td>
      <td width="135" height="28" bordercolor="#000000"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[15];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="28" bordercolor="#000000">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="28" bordercolor="#000000">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="28" bordercolor="#000000">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="28" bordercolor="#000000">&nbsp;</td>
      <td bgcolor="#FFFFFF" height="203" bordercolor="#000000" rowspan="8"><font size="2" face="Arial, Helvetica, sans-serif"> 
        </font></td>
      <td width="39" height="28" bordercolor="#000000"> 
        <div id="Taille"> 16 </div>
      </td>
      <td width="136" height="28" bordercolor="#000000"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[15];?>
        </div>
      </td>
      <td width="141" height="28" bordercolor="#000000"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[15];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="28" bordercolor="#000000">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="28" bordercolor="#000000">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="28" bordercolor="#000000">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="28" bordercolor="#000000">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 17 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[16];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[16];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">17</font></div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[16];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[16];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 18 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[17];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[17];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 18 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[17];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[17];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 19 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[18];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[18];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 19 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[18];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[18];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 20 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[19];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[19];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 20 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[19];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[19];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 21 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[20];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[20];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 21</div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[20];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[20];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25"> 
        <div id="Taille"> 22 </div>
      </td>
      <td width="138" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[21];?>
        </div>
      </td>
      <td width="135" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[21];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25"> 
        <div id="Taille"> 22 </div>
      </td>
      <td width="136" height="25"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[21];?>
        </div>
      </td>
      <td width="141" height="25"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[21];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr bordercolor="#000000" valign="middle" align="center"> 
      <td width="16" height="25" bgcolor="#CCCCCC"> 
        <div id="Taille"> 23 </div>
      </td>
      <td width="138" height="25" bgcolor="#CCCCCC"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurA[22];?>
        </div>
      </td>
      <td width="135" height="25" bgcolor="#CCCCCC"> 
        <div id="Taille"> 
          <?php echo $tabLicenceA[22];?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="39" height="25" bgcolor="#CCCCCC"> 
        <div id="Taille"> 23 </div>
      </td>
      <td width="136" height="25" bgcolor="#CCCCCC"> 
        <div id="Taillebold"> 
          <?php echo $tabJoueurB[22];?>
        </div>
      </td>
      <td width="141" height="25" bgcolor="#CCCCCC"> 
        <div id="Taille"> 
          <?php echo $tabLicenceB[22];?>
        </div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25">&nbsp;</td>
    </tr>
    <tr valign="middle" align="center"> 
      <td colspan="2" height="25" bordercolor="#000000">&nbsp;</td>
      <td colspan="2" height="25" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          Capitaine :N&deg; <b> </b> </font></div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="25" bordercolor="#000000">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25" bordercolor="#000000">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="25" bordercolor="#000000">&nbsp;</td>
      <td width="31" bgcolor="#CCCCCC" height="25" bordercolor="#000000">&nbsp;</td>
      <td colspan="2" height="25" bordercolor="#000000">&nbsp;</td>
      <td colspan="2" height="25" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          Capitaine :N&deg; <b> </b> </font></div>
      </td>
      <td width="23" bgcolor="#CCCCCC" height="25" bordercolor="#000000">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="25" bordercolor="#000000">&nbsp;</td>
      <td width="26" bgcolor="#CCCCCC" height="25" bordercolor="#000000">&nbsp;</td>
      <td width="27" bgcolor="#CCCCCC" height="25" bordercolor="#000000">&nbsp;</td>
    </tr>
  </table>
</body>
</html>
