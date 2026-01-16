
<table width="1250" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td valign="middle" bgcolor="#CCCCCC">
     
<?php

 $bdcomite=("php".''.$comite.''."_joueurs");


 
if($equipe==$equipeA OR $equipe==$equipeA-90000000)
	{
	  $terrain="dom";
	  $feuilleAB="php".''.$comite.''."_feuilleA";
	}
	else
	{
	  $terrain="ext";
	  $feuilleAB="php".''.$comite.''."_feuilleB";
	}

if ($connect == "connection2")
require   "../../../connect1/connection2.php";
else
require   "../../../connect1/connection3.php";

//if ($comite=="f1" OR $comite=="fed2" OR $comite=="fed3NE" OR $comite=="fed3GS" OR $comite=="pro")
// {
// mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db3"); 
// }
//elseif ($comite=="fem") 
 //{
// mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france_db4"); 
// } 
 
// else
// {  
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db2"); 
//}


$requete =mysql_query( "SELECT *
						FROM $feuilleAB
						WHERE id = $code_match");
							While ($donnees = mysql_fetch_array($requete) )
								{ 
								$N1= $donnees['N1'];
								$N2= $donnees['N2'];
								$N3= $donnees['N3'];
								$N4= $donnees['N4'];
								$N5= $donnees['N5'];
								$N6= $donnees['N6'];
						        $N7= $donnees['N7'];
								$N8= $donnees['N8'];
								$N9= $donnees['N9'];
							    $N10= $donnees['N10'];
							    $N11= $donnees['N11'];
							    $N12= $donnees['N12'];
							 	$N13= $donnees['N13'];
							  	$N14= $donnees['N14'];
							   	$N15= $donnees['N15'];
								$N16= $donnees['N16'];
								$N17= $donnees['N17'];
								$N18= $donnees['N18'];
								$N19= $donnees['N19'];
								$N20= $donnees['N20'];
								$N21= $donnees['N21'];
								$N22= $donnees['N22'];
								$N23= $donnees['N23'];
								
								$ent = $donnees['entraineur'];
								$ent2 = $donnees['entraineur2'];
								$adj = $donnees['adjoint'];
								
								$med = $donnees['medecin'];
								$soi = $donnees['soigneur'];
								
								$res = $donnees['responsable'];
								$dop = $donnees['dopage'];
								
								$pre = $donnees['prepa'];
								
								}




$nb=mysql_query("	SELECT COUNT(DISTINCT nom) 
					FROM $bdcomite
					WHERE club=$equipe AND photo='1' AND comite='1'"); 
 							$nbreDeNomDifferent=mysql_fetch_array($nb);
?>							
	<font color="#000000" size="1">						
<?php							
echo "(".''.$nbreDeNomDifferent[0].''.")";
?>
      
	  </font>
	  
	  
	  <font face="Arial, Helvetica, sans-serif"><font color="#FF0000" size="5"><b>
      <?php
if ($nbreDeNomDifferent[0]< $effectif)
	{
	echo "Attention : Vous avez des homonymes dans votre effectif.";
	?>
	
	</b></font>
	
	<font face="Arial, Helvetica, sans-serif"><font color="#000000" size="3"><b>
<br />
<?php
echo "Il vous faut modifier leurs noms en ajoutant la ou les premi&egrave;res lettres de leurs pr&eacute;noms pour permettre de les diff&eacute;rencier.";
	}
?>
       </b></font></font></font><hr />
	   
	   
      <p><font color="#003399"><b> <font size="5">
        <?php if($fanionOuReserve<90000000)
echo "- - -  Equipe Premi&egrave;re -  - -";
else
echo "- - - Equipe R&eacute;serve - - -";
?>
        </font></b></font><br />
        <?php
  // echo $code_match ;
  // echo $championnat;
  // echo $equipe ;
  // echo $equipeA ;
  // echo $equipeB ;
  // echo $connect ;
  
  ?>

        <?php
$reponse = mysql_query("	SELECT sigle,comite, code 
							FROM bdclubs 
							WHERE code='$equipe'");  
								While ($donnees = mysql_fetch_array($reponse) )
								{ 
								  $equipe = $donnees['code'];
								}
?>
        <?php //echo $bdcomite;?>
      
        <font face="Arial, Helvetica, sans-serif"> <font size="3" color="#000000"><b>Composition 
        pour la rencontre du </b></font><b><font color="#FF0000"> 
        <?php $date=substr($date,0,10);?>
        <?php echo $date; ?>
        </font></b><font color="#FF0000"> </font> <b><font size="3" color="#000000">face 
        &agrave;</font><font color="#FF0000">
        <?php
		
		
	if($terrain=="dom")
	
	 $clubC=$clubB;
	  elseif($terrain=="ext")
	  $clubC=$clubA;
echo $clubC;
							

?>
        </font></b></font></p>
      <p><font face="Arial, Helvetica, sans-serif"><b><font size="5"><font color="#FF0000"><font size="3" color="#000000"><br>
        Saisir les postes (num&eacute;ros de maillots) en face des diff&eacute;rents 
        joueurs</font><font size="3" color="#000000">, puis valider en bas de 
        cette page.</font><font size="6"><br>
        </font></font></font></b></font></p>
    </td>
  </tr>
</table>
<br>
<form name="form1" method="POST" action="../zonesFeuilles/page_feuillematch.php?terrain=<?php echo $terrain; ?>&equipe=<?php echo $equipe; ?>&equipeB=<?php echo $equipeB;?>&equipeA=<?php echo $equipeA; ?>&connect=<?php echo $connect; ?>&comite=<?php echo $comite; ?>&code_match=<?php echo $code_match; ?>&date=<?php echo $date; ?>">
  <table width="1250">
    <tr>
      <td bgcolor="#000000" valign="middle" height="37" align="right"> 
        <div align="left"> 
          <p><font face="Arial, Helvetica, sans-serif"><font size="5" color="#FFFFFF"><br>
            <b>S&eacute;lection des joueurs :</b> 
            <?php 

echo " ( Effectif disponible  " .''.$effectif .''. " joueurs )";
?>
            </font></font></p>
          </div>
      </td>
    </tr> 
  </table>
  <table width="1250" border="0">
    <tr> 
      <td width="216" height="31"><font face="Arial, Helvetica, sans-serif"> 
        <?php
// recuperation et affichage des joueurs

$tabNom = array();
$tabPrenom = array();
$tabId = array();
echo $effectif;
for ($i=0; $i <= $effectif ; $i++)
{
			$query = "	SELECT nom, prenom, id_perso 
						FROM $bdcomite
						WHERE club='$equipe' AND photo='1' 
						ORDER BY  nom_cache  
						LIMIT $i,1"; 
							$result = mysql_query($query);
							while ($row = mysql_fetch_array($result) )
									{ 
									 	$tabNom[]= $row[0];
										$tabPrenom[]=$row[1];
									 	$tabId[]= $row[2];
										
								 	}
 

}

$id1= $tabId[0];
$id2= $tabId[1];
$id3= $tabId[2];
$id4= $tabId[3];
$id5= $tabId[4];
$id6= $tabId[5];
$id7= $tabId[6];
$id8= $tabId[7];
$id9= $tabId[8];

$id10= $tabId[9];
$id11= $tabId[10];
$id12= $tabId[11];
$id13= $tabId[12];
$id14= $tabId[13];
$id15= $tabId[14];
$id16= $tabId[15];
$id17= $tabId[16];
$id18= $tabId[17];
$id19= $tabId[18];

$id20= $tabId[19];
$id21= $tabId[20];
$id22= $tabId[21];
$id23= $tabId[22];
$id24= $tabId[23];
$id25= $tabId[24];
$id26= $tabId[25];
$id27= $tabId[26];
$id28= $tabId[27];
$id29= $tabId[28];

$id30= $tabId[29];
$id31= $tabId[30];
$id32= $tabId[31];
$id33= $tabId[32];
$id34= $tabId[33];
$id35= $tabId[34];
$id36= $tabId[35];
$id37= $tabId[36];
$id38= $tabId[37];
$id39= $tabId[38];

$id40= $tabId[39];
$id41= $tabId[40];
$id42= $tabId[41];
$id43= $tabId[42];
$id44= $tabId[43];
$id45= $tabId[44];
$id46= $tabId[45];
$id47= $tabId[46];
$id48= $tabId[47];
$id49= $tabId[48];

$id50= $tabId[49];
$id51= $tabId[50];
$id52= $tabId[51];
$id53= $tabId[52];
$id54= $tabId[53];
$id55= $tabId[54];
$id56= $tabId[55];

/*



$id57= $tabId[56];
$id58= $tabId[57];
$id59= $tabId[58];

$id60= $tabId[59];
$id61= $tabId[60];
$id62= $tabId[61];
$id63= $tabId[62];
$id64= $tabId[63];
$id65= $tabId[64];
$id66= $tabId[65];
$id67= $tabId[66];
$id68= $tabId[67];
$id69= $tabId[68];

$id70= $tabId[69];
$id71= $tabId[70];
$id72= $tabId[71];
$id73= $tabId[72];
$id74= $tabId[73];
$id75= $tabId[74];
$id76= $tabId[75];
$id77= $tabId[76];
$id78= $tabId[77];
$id79= $tabId[78];

$id80= $tabId[79];
$id81= $tabId[80];
$id82= $tabId[81];
$id83= $tabId[82];
$id84= $tabId[83];
$id85= $tabId[84];
$id86= $tabId[85];
$id87= $tabId[86];
$id88= $tabId[87];
$id89= $tabId[88];

$id90= $tabId[89];
$id91= $tabId[90];
$id92= $tabId[91];
$id93= $tabId[92];
$id94= $tabId[93];
$id95= $tabId[94];
$id96= $tabId[95];
$id97= $tabId[96];
$id98= $tabId[97];
$id99= $tabId[98]; 
 */


for ($i =0  ; $i< $effectif ; $i++ )
{
if (isset(${"retour".$i}))   ${"retour".$i}  =${"retour".$i};else ${"retour".$i} ="";
}






for ($j=1; $j<24; $j++)
{
		
		for ($i=1; $i<= $effectif; $i++)
			{
					if (${'N'.$j}==${'id'.$i})
							{
							${"retour".$i}=$j;
							}
							
							
			}
}



?>
        <div id="listeJoueurs"> <font face="Arial, Helvetica, sans-serif">
          <?php echo $tabNom[0].' '.$tabPrenom[0]; ?>
          </font></div>
        </font></td>
      <td width="20" height="31"> 
        <input type="text" name="M<?php echo $id1; ?>" value="<?php echo $retour1 ;?>" size="2">
      </td>
      <td rowspan="20" height="251" bgcolor="#999999" width="1"></td>
      <td height="31" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[20].' '.$tabPrenom[20]; ?>
        </div>
      </td>
      <td width="21" height="31"> 
        <input type="text" name="M<?php echo $id21; ?>" value="<?php echo $retour21 ;?>" size="2">
      </td>
      <td rowspan="20" height="251" bgcolor="#CCCCCC" width="1"></td>
      <td height="31" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[40].' '.$tabPrenom[40]; ?>
        </div>
      </td>
      <td width="20" height="31"> 
        <input type="text" name="M<?php echo $id41; ?>" value="<?php echo $retour41 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="30" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[1].' '.$tabPrenom[1]; ?>
        </div>
      </td>
      <td width="20" height="30" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id2; ?>"value="<?php echo $retour2 ;?>" size="2">
      </td>
      <td width="216" height="30" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[21].' '.$tabPrenom[21]; ?>
        </div>
      </td>
      <td width="21" height="30" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id22; ?>" value="<?php echo $retour22 ;?>"  size="2">
      </td>
      <td width="211" height="30" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[41].' '.$tabPrenom[41]; ?>
        </div>
      </td>
      <td width="20" height="30" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id42; ?>" value="<?php echo $retour42 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[2].' '.$tabPrenom[2]; ?>
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id3; ?>" value="<?php echo $retour3 ;?>" size="2">
      </td>
      <td width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[22].' '.$tabPrenom[22]; ?>
        </div>
      </td>
      <td width="21"> 
        <input type="text" name="M<?php echo $id23; ?>" value="<?php echo $retour23 ;?>"  size="2">
      </td>
      <td width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[42].' '.$tabPrenom[42]; ?>
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id43; ?>" value="<?php echo $retour43 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[3].' '.$tabPrenom[3]; ?>
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id4; ?>" value="<?php echo $retour4 ;?>" size="2">
      </td>
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[23].' '.$tabPrenom[23]; ?>
        </div>
      </td>
      <td width="21" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id24; ?>" value="<?php echo $retour24 ;?>"  size="2">
      </td>
      <td width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[40].' '.$tabPrenom[40]; ?>
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id44; ?>" value="<?php echo $retour44 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[4].' '.$tabPrenom[4]; ?>
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id5; ?>"  value="<?php echo $retour5 ;?>"size="2">
      </td>
      <td width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[24].' '.$tabPrenom[24]; ?>
        </div>
      </td>
      <td width="21"> 
        <input type="text" name="M<?php echo $id25; ?>" value="<?php echo $retour25 ;?>"  size="2">
      </td>
      <td width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[44].' '.$tabPrenom[44]; ?>
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id45; ?>" value="<?php echo $retour45 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="26" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[5].' '.$tabPrenom[5]; ?>
        </div>
      </td>
      <td width="20" height="26" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id6; ?>" value="<?php echo $retour6 ;?>" size="2">
      </td>
      <td height="26" width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[25].' '.$tabPrenom[25]; ?>
        </div>
      </td>
      <td width="21" height="26" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id26; ?>" value="<?php echo $retour26 ;?>"  size="2">
      </td>
      <td height="26" width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[45].' '.$tabPrenom[45]; ?>
        </div>
      </td>
      <td width="20" height="26" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id46; ?>" value="<?php echo $retour46 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[6].' '.$tabPrenom[6]; ?>
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id7; ?>"  value="<?php echo $retour7 ;?>"size="2">
      </td>
      <td width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[26].' '.$tabPrenom[26]; ?>
        </div>
      </td>
      <td width="21"> 
        <input type="text" name="M<?php echo $id27; ?>" value="<?php echo $retour27 ;?>"  size="2">
      </td>
      <td width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[46].' '.$tabPrenom[46]; ?>
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id47; ?>" value="<?php echo $retour47 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[7].' '.$tabPrenom[7]; ?>
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id8; ?>" value="<?php echo $retour8 ;?>" size="2">
      </td>
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[27].' '.$tabPrenom[27]; ?>
        </div>
      </td>
      <td width="21" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id28; ?>" value="<?php echo $retour28 ;?>"  size="2">
      </td>
      <td width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[47].' '.$tabPrenom[47]; ?>
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id48; ?>" value="<?php echo $retour48 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="2"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[8].' '.$tabPrenom[8]; ?>
        </div>
      </td>
      <td width="20" height="2"> 
        <input type="text" name="M<?php echo $id9; ?>"  value="<?php echo $retour9 ;?>"size="2">
      </td>
      <td height="2" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[28].' '.$tabPrenom[28]; ?>
        </div>
      </td>
      <td width="21" height="2"> 
        <input type="text" name="M<?php echo $id29; ?>" value="<?php echo $retour29 ;?>"  size="2">
      </td>
      <td height="2" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[48].' '.$tabPrenom[48]; ?>
        </div>
      </td>
      <td width="20" height="2"> 
        <input type="text" name="M<?php echo $id49; ?>" value="<?php echo $retour49 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[9].' '.$tabPrenom[9]; ?>
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id10; ?>" value="<?php echo $retour10 ;?> "size="2">
      </td>
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[29].' '.$tabPrenom[29]; ?>
        </div>
      </td>
      <td width="21" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id30; ?>" value="<?php echo $retour30 ;?>"  size="2">
      </td>
      <td width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[49].' '.$tabPrenom[49]; ?>
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id50; ?>" value="<?php echo $retour50 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="21"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[10].' '.$tabPrenom[10]; ?>
        </div>
      </td>
      <td width="20" height="21"> 
        <input type="text" name="M<?php echo $id11; ?>" value="<?php echo $retour11 ;?>" size="2">
      </td>
      <td height="21" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[30].' '.$tabPrenom[30]; ?>
        </div>
      </td>
      <td width="21" height="21"> 
        <input type="text" name="M<?php echo $id31; ?>" value="<?php echo $retour31 ;?>"  size="2">
      </td>
      <td height="21" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[50].' '.$tabPrenom[50]; ?>
        </div>
      </td>
      <td width="20" height="21"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id51; ?>" value="<?php echo $retour51 ;?>"  size="2">
        </font></td>
    </tr>
    <tr> 
      <td width="216" height="34" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[11].' '.$tabPrenom[11]; ?>
        </div>
      </td>
      <td width="20" height="34" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id12; ?>"  value="<?php echo $retour12 ;?>"  size="2">
      </td>
      <td height="34" width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[31].' '.$tabPrenom[31]; ?>
        </div>
      </td>
      <td width="21" height="34" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id32; ?>" value="<?php echo $retour32 ;?>"  size="2">
      </td>
      <td height="34" width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[51].' '.$tabPrenom[51]; ?>
        </div>
      </td>
      <td width="20" height="34" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id52; ?>" value="<?php echo $retour52 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="31"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[12].' '.$tabPrenom[12]; ?>
        </div>
      </td>
      <td width="20" height="31"> 
        <input type="text" name="M<?php echo $id13; ?>" value="<?php echo $retour13 ;?>"  size="2">
      </td>
      <td height="31" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[32].' '.$tabPrenom[32]; ?>
        </div>
      </td>
      <td width="21" height="31"> 
        <input type="text" name="M<?php echo $id33; ?>"  value="<?php echo $retour33 ;?>" size="2">
      </td>
      <td height="31" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[52].' '.$tabPrenom[52]; ?>
        </div>
      </td>
      <td width="20" height="31"> 
        <input type="text" name="M<?php echo $id53; ?>"  value="<?php echo $retour53 ;?>" size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="22" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[13].' '.$tabPrenom[13];?>
        </div>
      </td>
      <td width="20" height="22" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id14; ?>"  value="<?php echo $retour14 ;?>" size="2">
      </td>
      <td height="22" width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[33].' '.$tabPrenom[33]; ?>
        </div>
      </td>
      <td width="21" height="22" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id34; ?>" value="<?php echo $retour34 ;?>"  size="2">
      </td>
      <td height="22" width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[53].' '.$tabPrenom[53]; ?>
        </div>
      </td>
      <td width="20" height="22" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id54;?>" value="<?php echo $retour54 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="13"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[14].' '.$tabPrenom[14]; ?>
        </div>
      </td>
      <td width="20" height="13"> 
        <input type="text" name="M<?php echo $id15; ?>"  value="<?php echo $retour15 ;?>" size="2">
      </td>
      <td height="13" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[34].' '.$tabPrenom[34]; ?>
        </div>
      </td>
      <td width="21" height="13"> 
        <input type="text" name="M<?php echo $id35; ?>" value="<?php echo $retour35 ;?>"  size="2">
      </td>
      <td height="13" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[54].' '.$tabPrenom[54]; ?>
        </div>
      </td>
      <td width="20" height="13"> 
        <input type="text" name="M<?php echo $id55; ?>" value="<?php echo $retour55 ;?>"  size="2">
      </td>
    </tr>
    <tr bgcolor="#CCCCCC"> 
      <td width="216" height="33"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[15].' '.$tabPrenom[15]; ?>
        </div>
      </td>
      <td width="20" height="33"> 
        <input type="text" name="M<?php echo $id16; ?>"  value="<?php echo $retour16 ;?>" size="2">
      </td>
      <td height="33" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[35].' '.$tabPrenom[35]; ?>
        </div>
      </td>
      <td width="21" height="33"> 
        <input type="text" name="M<?php echo $id36; ?>" value="<?php echo $retour36 ;?>"  size="2">
      </td>
      <td height="33" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[55].' '.$tabPrenom[55]; ?>
        </div>
      </td>
      <td width="20" height="33"> 
        <input type="text" name="M<?php echo $id56; ?>" value="<?php echo $retour56 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="2"><font face="Arial, Helvetica, sans-serif"> 
        <?php
echo $tabNom[16].' '.$tabPrenom[16];
 ?>
        </font></td>
      <td width="20" height="2"> 
        <input type="text" name="M<?php echo $id17; ?>"  value="<?php echo $retour17 ;?>" size="2">
      </td>
      <td height="2" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[36].' '.$tabPrenom[36]; ?>
        </div>
      </td>
      <td width="21" height="2"> 
        <input type="text" name="M<?php echo $id37; ?>" value="<?php echo $retour37 ;?>"  size="2">
      </td>
      <td height="2" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[56].' '.$tabPrenom[56]; ?>
        </div>
      </td>
      <td width="20" height="2"> 
        <input type="text" name="M<?php echo $id57; ?>" value="<?php echo $retour57 ;?>"  size="2">
      </td>
    </tr>
    <tr bgcolor="#CCCCCC"> 
      <td width="216" height="29"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[17].' '.$tabPrenom[17]; ?>
        </div>
      </td>
      <td width="20" height="29"> 
        <input type="text" name="M<?php echo $id18; ?>"  value="<?php echo $retour18 ;?>" size="2">
      </td>
      <td height="29" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[37].' '.$tabPrenom[37]; ?>
        </div>
      </td>
      <td width="21" height="29"> 
        <input type="text" name="M<?php echo $id38; ?>" value="<?php echo $retour38 ;?>"  size="2">
      </td>
      <td height="29" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[57].' '.$tabPrenom[57]; ?>
        </div>
      </td>
      <td width="20" height="29"> 
        <input type="text" name="M<?php echo $id58; ?>" value="<?php echo $retour58 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="12"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[18].' '.$tabPrenom[18]; ?>
        </div>
      </td>
      <td width="20" height="12"> 
        <input type="text" name="M<?php echo $id19; ?>"  value="<?php echo $retour19 ;?>" size="2">
      </td>
      <td height="12" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[38].' '.$tabPrenom[38]; ?>
        </div>
      </td>
      <td width="21" height="12"> 
        <input type="text" name="M<?php echo $id39; ?>"  value="<?php echo $retour39 ;?>" size="2">
      </td>
      <td height="12" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[58].' '.$tabPrenom[58]; ?>
        </div>
      </td>
      <td width="20" height="12"> 
        <input type="text" name="M<?php echo $id59; ?>" value="<?php echo $retour59 ;?>"  size="2">
      </td>
    </tr>
    <tr bgcolor="#CCCCCC"> 
      <td width="216" height="36"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[19].' '.$tabPrenom[19]; ?>
        </div>
      </td>
      <td width="20" height="36"> 
        <input type="text" name="M<?php echo $id20; ?>"  value="<?php echo $retour20 ;?>" size="2">
      </td>
      <td height="36" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[39].' '.$tabPrenom[39]; ?>
        </div>
      </td>
      <td width="21" height="36"> 
        <input type="text" name="M<?php echo $id40; ?>" value="<?php echo $retour40 ;?>"  size="2">
      </td>
      <td height="36" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom[59].' '.$tabPrenom[59]; ?>
        </div>
      </td>
      <td width="20" height="36"> 
        <input type="text" name="M<?php echo $id60; ?>" value="<?php echo $retour60 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td colspan="2" height="31" bgcolor="#999999"> 
        <div align="right"><font face="Arial, Helvetica, sans-serif"><b>Choix 
          du capitaine :</b></font></div>
      </td>
      <td height="31" bgcolor="#999999" width="1"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" width="216" bgcolor="#999999"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">Indiquer 
          le N&deg;du capitaine 
          <input type="text" name="capitaine" size="3">
          </font></div>
      </td>
      <td width="21" height="31"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" bgcolor="#CCCCCC" width="1"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" colspan="2" bgcolor="#999999"> 
        <div align="right"><font face="Arial, Helvetica, sans-serif"> </font></div>
        <font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
  </table>
  <table width="1250" border="0">
    <tr>
      <td bgcolor="#000000" valign="middle" height="59"><font size="5" color="#FFFFFF"> 
        <br>
        S&eacute;lection des dirigeants :<br>
        </font></td>
    </tr>
  </table>
  <table width="1250" border="0" align="left" cellspacing="0" cellpadding="0">
    <tr> 
      <td valign="middle" height="19" bgcolor="#E3F3FF" width="10"> </td>
      <td width="170" valign="middle" height="19"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
// ******* Choix de l'entraineur  ********

$nb=mysql_query("	SELECT COUNT(type_licence) 
							FROM $bdcomite 
							WHERE club=$equipe AND (type_licence='ENT' OR type_licence='ADJ') "); 
 								$nbEntraineur=mysql_fetch_array($nb);
$nbreEntraineur=$nbEntraineur[0];								


$tabEntraineur = array();
for ($i=0; $i<$nbreEntraineur ; $i++)			
	{		
		$query = "	SELECT nom 
					FROM $bdcomite 
					WHERE club='$equipe' and (type_licence='ENT' OR type_licence='ADJ' )  
					ORDER BY nom 
					LIMIT $i,1 ";
						$result = mysql_query($query);
						while ($row = mysql_fetch_array($result) )
								{
								$tabEntraineur[]=$row[0];
								}
	
		}
?>
        </font></td>
      <td width="188" valign="middle" height="19">&nbsp;</td>
      <td width="18" valign="middle" height="19">&nbsp;</td>
      <td width="186" valign="middle" height="19">&nbsp;</td>
      <td width="360" valign="middle" height="19">&nbsp;</td>
      <td width="175" valign="middle" height="19">&nbsp;</td>
      <td colspan="2" valign="middle" height="19">&nbsp;</td>
      <td width="118" valign="middle" height="19">&nbsp;</td>
    </tr>
    <tr> 
      <td valign="middle" height="19" bgcolor="#E3F3FF" width="10"></td>
      <td width="170" valign="middle" height="19"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php echo " Entraineurs :  " ;?>
          </font> <font size="3" face="Arial, Helvetica, sans-serif"></font></div>
      </td>
      <td width="188" valign="middle" height="19"> 
        <select id="formSp" name="ent"  size="1">
          <option value=<?php echo $ent;?> selected>Choix d'un entraineur</option>
          <?php
					 	 for ($i=0; $i<$nbreEntraineur ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabEntraineur[$i]; ?>"><?php echo $tabEntraineur[$i]; ?>
          </option>
          <?php
							}
							?>
        </select>
      </td>
      <td width="18" valign="middle" height="19">&nbsp;</td>
      <td width="186" valign="middle" height="19"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php echo " Entraineurs 2 :  " ;?>
          </font></div>
      </td>
      <td width="360" valign="middle" height="19"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <select id="formSp" name="ent2" size="1">
          <option value=<?php echo $ent2;?> selected>Choix d'un 2me entraineur</option>
          <?php
					 	 for ($i=0; $i<$nbreEntraineur ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabEntraineur[$i]; ?>"> 
          <?php echo $tabEntraineur[$i]; ?>
          </option>
          <?php
							}
							?>
        </select>
        </font></td>
      <td width="175" valign="top" height="19">&nbsp;</td>
      <td colspan="2" valign="middle" height="19">&nbsp;</td>
      <td width="118" valign="middle" height="19">&nbsp;</td>
    </tr>
    <tr> 
      <td valign="middle" height="19" bgcolor="#E3F3FF" width="10"></td>
      <td width="170" valign="middle" height="19">&nbsp;</td>
      <td width="188" valign="middle" height="19"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></td>
      <td width="18" valign="middle" height="19">&nbsp;</td>
      <td width="186" valign="middle" height="19"></td>
      <td width="360" valign="middle" height="19"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></td>
      <td width="175" valign="top" height="19">&nbsp;</td>
      <td colspan="2" valign="middle" height="19">&nbsp;</td>
      <td width="118" valign="middle" height="19">&nbsp;</td>
    </tr>
    <tr> 
      <td valign="middle" height="19" bgcolor="#E3F3FF" width="10"></td>
      <td width="170" valign="middle" height="19"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php echo " Adjoints terrain :  " ;?>
          </font></div>
      </td>
      <td width="188" valign="middle" height="19"> 
        <select id="formSp" name="adj"   size="1">
          <option value=<?php echo $adj;?> selected> 
				<font size="3" face="Arial, Helvetica, sans-serif"> 
					Choix d'un adjoint terrain 
				</font>
		  </option>
          <?php
					 	 for ($i=0; $i<$nbreEntraineur ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabEntraineur[$i]; ?>"> 
				<font size="3" face="Arial, Helvetica, sans-serif"> 
					<?php echo $tabEntraineur[$i]; ?>
				</font>
			</option>
          <?php
							}
							?>
        </select>
      </td>
      <td width="18" valign="middle" height="19">&nbsp;</td>
      <td width="186" valign="middle" height="19"><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></font></font></td>
      <td width="360" valign="middle" height="19">&nbsp;</td>
      <td width="175" valign="top" height="19">&nbsp;</td>
      <td colspan="2" valign="middle" height="19">&nbsp;</td>
      <td width="118" valign="middle" height="19">&nbsp;</td>
    </tr>
  </table>
  <br>
  <br>  <br>
  <br>
  <br>
 
  <hr />
  <table width="1250" border="0" align="left" cellspacing="0" cellpadding="0" bordercolor="#66CC33">
    <tr> 
      <td height="23" valign="middle" width="10" bgcolor="#ff9966">&nbsp;</td>
      <td height="23" valign="middle" width="172"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
		  
$nb=mysql_query("	SELECT COUNT(type_licence) 
							FROM $bdcomite 
							WHERE club=$equipe AND type_licence='MED' "); 
 								$nbMedecin=mysql_fetch_array($nb);
$nbreMedecin=$nbMedecin[0];		  
//echo $nbreMedecin;		  

$tabMedecin = array(); 
for ($i=0; $i<=$nbreMedecin ; $i++)			
	{		
		$query = "	SELECT nom 
					FROM $bdcomite 
					WHERE club='$equipe' and type_licence='MED'  
					ORDER BY nom 
					LIMIT $i,1 ";
						$result = mysql_query($query);
						while ($row = mysql_fetch_array($result) )
								{
								$tabMedecin[]=$row[0];
								}
	
		}
?>

          M&eacute;decins</font></div>
      </td>
      <td height="23" valign="middle" width="234"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
       <select id="formMed" name="med"  size="1">
          <option value=<?php echo $med;?> selected>Choix d'un medecin</option>
          <?php
					 	 for ($i=0; $i<$nbreMedecin ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabMedecin[$i]; ?>"> 
          <?php echo $tabMedecin[$i]; ?>
          </option>
          <?php
							}
							?>
        </select>
       
        </font></td>
      <td height="23" valign="middle" width="20">&nbsp;</td>
      <td height="23" valign="middle" width="138"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php            
		$nb=mysql_query("	SELECT COUNT(type_licence) 
							FROM $bdcomite 
							WHERE club=$equipe AND type_licence='SOI' "); 
 								$nbSoigneur=mysql_fetch_array($nb);
$nbreSoigneur=$nbSoigneur[0];			
			
			
			
$tabSoigneur = array();
for ($i=0; $i<=$nbreSoigneur ; $i++)
	{
	$query = "	SELECT nom 
				FROM $bdcomite 
				WHERE club='$equipe' AND type_licence='SOI'  
				ORDER BY nom limit $i,1 ";
					$result = mysql_query($query);
					while ($row = mysql_fetch_array($result) )
						{
						$tabSoigneur[]=$row[0];
						}
	}

?>
          Soigneurs : </font></div>
      </td>
      <td height="23" valign="middle" width="486"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <select id="formMed" name="soi" size="1">
          	<option value=<?php echo $soi;?> selected>
		  		Choix d'un soigneur
		  	</option>
          <?php
					 for ($i=0; $i<$nbreSoigneur ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabSoigneur[$i];  ?>"> 
          <?php echo $tabSoigneur[$i]; ?>
          </option>
          <?php
							}
							?>
        </select>
        </font></td>
      <td height="23" valign="middle" width="190">&nbsp;</td>
    </tr>
  </table>
  <br /> <br />
  <hr />
  <table width="1250" border="0" align="left" cellspacing="0" cellpadding="0">
    <tr> 
      <td height="10" valign="middle" width="10" bgcolor="#00FF99">&nbsp;</td>
      <td height="10" valign="middle" width="166"> 
        <div align="right"><font face="Arial, Helvetica, sans-serif" size="3">Responsable 
          Visa : </font></div>
      </td>
      <td height="10" valign="middle" width="209"> 
        <?php		 
		 
		  $nb=mysql_query("	SELECT COUNT(type_licence) 
							FROM $bdcomite 
							WHERE club=$equipe AND type_licence='RES'   "); 
 								$nbResponsable=mysql_fetch_array($nb);
$nbreResponsable=$nbResponsable[0];								


$tabResponsable = array();
for ($i=0; $i<=$nbreResponsable ; $i++)			
	{		
		$query = "	SELECT nom 
					FROM $bdcomite 
					WHERE club='$equipe' and type_licence='RES' 
					ORDER BY nom 
					LIMIT $i,1 ";
						$result = mysql_query($query);
						while ($row = mysql_fetch_array($result) )
								{
								$tabResponsable[]=$row[0];
								}
	
		}
?>
        <select id="formAdm" name="res" size="1">
          	<option value=<?php echo $res;?>  selected>
		   		<font size="3" face="Arial, Helvetica, sans-serif"> 
          			Responsable visa
		   		</font>
		   	</option>
          <?php
					 	 for ($i=0; $i<$nbreResponsable ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabResponsable[$i]; ?>"> 
          	<?php echo $tabResponsable[$i]; ?>
          </option>
          <?php
							}
							?>
        </select>
      </td>
      <td height="10" valign="middle" colspan="2"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
          </font><font size="3"><font size="3"> <font size="3" face="Arial, Helvetica, sans-serif"> 
          </font></font></font><font size="3" face="Arial, Helvetica, sans-serif"> 
          Contr&ocirc;le anti dopage : </font></div>
      </td>
      <td height="10" valign="bottom" width="499"> 
        <select id="formAdm" name="dop" size="1">
          	<option value=<?php echo $dop;?>  selected> 
		 	 	Controle dopage 
		  	</option>
          <?php
					for ($i=0; $i<$nbreResponsable ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabResponsable[$i]; ?>"> 
          	<?php echo $tabResponsable[$i]; ?>
          </option>
          <?php
							}
			?>
        </select>
        <font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></font></font> </td>
      <td height="23" valign="middle" width="178">
	  <font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></td>
    </tr>
  </table>
    <br /> <br />
  <hr />
  <table width="750" border="0" align="left" cellspacing="0" cellpadding="0">
    <tr> 
      <td height="10" bgcolor="#FFFFFF" valign="top" width="19"> 
        <div align="center"> 
          <div align="center"></div>
          <div align="right"> 
            <div align="left"></div>
          </div>
        </div>
      </td>
      <td colspan="3" height="10" bgcolor="#CCCCCC" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif"><b>Uniquement 
          pour les comp&eacute;titions<font size="3"> f&eacute;d&eacute;rales</font></b></font><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif">:</font></font></font></div>
      </td>
      <td height="10" bgcolor="#CCCCCC" valign="top">&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF" height="23" width="19">&nbsp;</td>
      <td bgcolor="#CCCCCC" height="23" width="155"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
    <?php 
	     $nb=mysql_query("	SELECT COUNT(type_licence) 
							FROM $bdcomite 
							WHERE club=$equipe AND type_licence='PRE' "); 
 								$nbPrepa=mysql_fetch_array($nb);
$nbrePrepa=$nbPrepa[0];								


$tabPrepa = array();
for ($i=0; $i<=$nbrePrepa ; $i++)			
	{		
		$query = "	SELECT nom 
					FROM $bdcomite 
					WHERE club='$equipe' and type_licence='PRE'  
					ORDER BY nom 
					LIMIT $i,1 ";
						$result = mysql_query($query);
						while ($row = mysql_fetch_array($result) )
								{
								$tabPrepa[]=$row[0];
								}
	
		}
?>
          <?php echo " Preparateurs :  " ;?>
          </font> <font size="3" face="Arial, Helvetica, sans-serif"></font></div>
      </td>
      <td width="188" valign="middle" height="19" bgcolor="#CCCCCC"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <select id="formSp" name="pre"  size="1">
          <option value=<?php echo $pre;?> selected>Choix d'un preparateur</option>
          <?php
					 	 for ($i=0; $i<$nbrePrepa ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabPrepa[$i]; ?>"> 
          <?php echo $tabPrepa[$i]; ?>
          </option>
          <?php
							}
							?>
        </select>
        </font> </td>
      <td bgcolor="#CCCCCC" height="23" width="104"> 
        <div align="right"><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
          </font></font></font></div>
      </td>
      <td bgcolor="#CCCCCC" height="23" width="117"><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font> </td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF" height="14" width="19">&nbsp;</td>
      <td bgcolor="#CCCCCC" height="14" width="155">&nbsp;</td>
      <td bgcolor="#CCCCCC" height="14" width="362">&nbsp;</td>
      <td bgcolor="#CCCCCC" height="14" width="104">&nbsp;</td>
      <td bgcolor="#CCCCCC" height="14" width="117">&nbsp;</td>
    </tr>
    <tr> 
      <td height="14" width="19">&nbsp;</td>
      <td height="14" width="155"><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></td>
      <td height="14" width="362">&nbsp;</td>
      <td height="14" width="104">&nbsp;</td>
      <td height="14" width="117">&nbsp;</td>
    </tr>
    <tr bgcolor="#FF0000" valign="middle"> 
      <td height="14" colspan="5"><br>
        <div align="center"><font face="Arial, Helvetica, sans-serif"> 
          <input type="submit" value="Visualiser la feuille de match" name="submit">
          <br>
          <br>
          </font></div>
      </td>
    </tr>
  </table>


</form>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
