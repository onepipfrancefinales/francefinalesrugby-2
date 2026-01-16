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

if ($connect == "connexion2")
require   "../../../connect/connexion2.php";
else
require   "../../../connect/connexion3.php";
if (isset ($jug)) $jug = $jug; else $jug ="";
if (isset ($ent)) $ent = $ent; else $ent ="";
if (isset ($ent2)) $ent2 = $ent2; else $ent2 ="";
if (isset ($soi)) $soi = $soi; else $soi ="";
if (isset ($med)) $med = $med; else $med ="";
if (isset ($adj)) $adj = $adj; else $adj ="";
if (isset ($dop)) $dop = $dop; else $dop ="";
if (isset ($pre)) $pre = $pre; else $pre ="";
if (isset ($res)) $res = $res; else $res ="";
$reponse = $bdd->query("SELECT *
						FROM $feuilleAB
						WHERE id = $code_match");
							while ($donnees = $reponse->fetch() )
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
								$jug = $donnees['juge'];
								$med = $donnees['medecin'];
								$soi = $donnees['soigneur'];
								
								$res = $donnees['responsable'];
								$dop = $donnees['dopage'];
								$cap = $donnees['capitaine'];
								$pre = $donnees['prepa'];
								
								}
								
//**** recherche d'homonymes ************


$reponse = $bdd->query("SELECT count(DISTINCT nom) 
						FROM $bdcomite 
						WHERE club=$equipe AND fonction='1' and comite ='1' "); 
								while ($row = $reponse->fetch())
									{
									$nbreDeNomDifferent= $row[0];
									}
?>							
	<font color="#000000" size="1">						
<?php							
echo "(".''.$nbreDeNomDifferent.''.")";
?>
      
	  </font>
	  
	  
	  <font face="Arial, Helvetica, sans-serif"><font color="#FF0000" size="5"><b>
      <?php
	  
if ($nbreDeNomDifferent != $effectifJoueurs)
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
require   "../../../connect/connexion1.php";
$reponse = $bdd->query("	SELECT sigle,comite, id 
							FROM bdclubs 
							WHERE id='$equipe'");  
								while ($donnees = $reponse->fetch() )
								{ 
								  $equipe = $donnees['id'];
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
<form name="form1" method="POST" action="../zonesFeuilles/page_feuillematch.php?terrain=<?php echo $terrain; ?>&id_equipe=<?php echo $id_equipe; ?>&equipe=<?php echo $equipe; ?>&equipeB=<?php echo $equipeB;?>&equipeA=<?php echo $equipeA; ?>&connect=<?php echo $connect; ?>&comite=<?php echo $comite; ?>&code_match=<?php echo $code_match; ?>&date=<?php echo $date; ?>&type=<?php echo $type; ?>">
  <table width="1250">
    <tr>
      <td bgcolor="#000000" valign="middle" height="42" align="right"> 
        <div align="left"> 
          <p><font face="Arial, Helvetica, sans-serif"><font size="5" color="#FFFFFF"><b>S&eacute;lection 
            des joueurs :</b> 
            <?php 

echo " ( Effectif disponible  " .''.$effectifJoueurs .''. " joueurs )";
?>
            </font><font face="Arial, Helvetica, sans-serif"> 
            <?php            
//*****************************************************************			
			
	
// recuperation et affichage des joueurs
require   "../../../connect/connexion2.php";
$tabNom = array();
$tabPrenom = array();
$tabId = array();
//echo $effectif;
for ($i=0; $i <= 100 ; $i++)
{
				
			$reponse = $bdd->query("	SELECT nom, prenom, id_perso 
						FROM $bdcomite
						WHERE club='$equipe' AND fonction='1' and comite= '1' 
						ORDER BY  nom_cache  
						LIMIT $i,1"); 
							while ($row = $reponse->fetch() )
									{ 
									 	$tabNom[]= $row[0];
										$tabPrenom[]=$row[1];
									 	$tabId[]= $row[2];

									}
	if (isset ($tabNom[$i]))		${"tabNom".($i+1)} = $tabNom[$i]; else ${"tabNom".($i+1)}= "";		
	if (isset ($tabPrenom[$i]))		${"tabPrenom".($i+1)} = $tabPrenom[$i]; else ${"tabPrenom".($i+1)}= "";
	if (isset ($tabId[$i]))         ${"id".($i+1)} = $tabId[$i]; else ${"id".($i+1)}= "-";
									
									
}

?>



<?php
//for ($i=1; $i <= 60 ; $i++)
//{
	//if (isset (${"tabPrenom".($i)})) ${"tabPrenom".($i)}=${"tabPrenom".($i)};else ${"tabPrenom".($i)}="-";
	//if (isset (${"tabNom".($i)})) ${"tabNom".($i)}=${"tabNom".($i)};else ${"tabNom".($i)}="-";
//}

?>
            <?php
/*
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
$id57= $tabId[56];
$id58= $tabId[57];
$id59= $tabId[58];
*/
?>
<?php
for ($i=0  ; $i< $effectifJoueurs ; $i++ )
	{
		${"id".$i+1}=$tabId[$i];
	}
?>
            <?php
//for ($i =1  ; $i<= 60 ; $i++ )
//{


//}

?>

 <?php
for ($i =1  ; $i<= 60 ; $i++ )
{
if (isset(${"id".$i}))   ${"id".$i}  =${"id".$i}; else ${"id".$i} ="";
if (isset(${"retour".$i}))   ${"retour".$i}  =${"retour".$i}; else ${"retour".$i} ="";
}

?>
            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
            <?php

for ($j=1; $j<24; $j++)
{
	if (isset(${"N".$j}))   ${"N".$j}  =${"N".$j}; else ${"N".$j} ="";	
		for ($i=1; $i<= 60; $i++)
			{
					if (${'N'.$j}==${'id'.$i})
							{
							${"retour".$i}=$j;
							}
				
			}
}

//*************

?>
            </font></font> </font><font size="5" color="#FFFFFF"> </font></font></p>
          </div>
      </td>
    </tr> 
  </table>
  <table width="1250" border="0">
    <tr> 
      <td width="216" height="31"><font face="Arial, Helvetica, sans-serif"> 
        <div id="listeJoueurs"> <font face="Arial, Helvetica, sans-serif"> <font face="Arial, Helvetica, sans-serif"> 
          </font> 
          <?php echo $tabNom1.' '.$tabPrenom1?>
          </font></div>
        </font></td>
      <td width="20" height="31"> 
        <input type="text" name="M<?php echo $id1; ?>" value="<?php echo $retour1 ;?>" size="2">
      </td>
      <td rowspan="20" height="251" bgcolor="#999999" width="1"></td>
      <td height="31" width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom21.' '.$tabPrenom21;?>
        </div>
      </td>
      <td width="21" height="31"> 
        <input type="text" name="M<?php echo $id21; ?>" value="<?php echo $retour21 ;?>" size="2">
      </td>
      <td rowspan="20" height="251" bgcolor="#CCCCCC" width="1"></td>
      <td height="31" width="211"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom41.' '.$tabPrenom41;?> 
        </div>
      </td>
      <td width="20" height="31"> 
        <input type="text" name="M<?php echo $id41; ?>" value="<?php echo $retour41 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="2" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom2.' '.$tabPrenom2;?>
        </div>
      </td>
      <td width="20" height="2" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id2; ?>"value="<?php echo $retour2 ;?>" size="2">
      </td>
      <td width="216" height="2" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom22.' '.$tabPrenom22;?> 
        </div>
      </td>
      <td width="21" height="2" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id22; ?>" value="<?php echo $retour22 ;?>"  size="2">
      </td>
      <td width="211" height="2" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom42.' '.$tabPrenom42;?> 
        </div>
      </td>
      <td width="20" height="2" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id42; ?>" value="<?php echo $retour42 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom3.' '.$tabPrenom3;?>  
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id3; ?>" value="<?php echo $retour3 ;?>" size="2">
      </td>
      <td width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom23.' '.$tabPrenom23;?>
        </div>
      </td>
      <td width="21"> 
        <input type="text" name="M<?php echo $id23; ?>" value="<?php echo $retour23 ;?>"  size="2">
      </td>
      <td width="211"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom43.' '.$tabPrenom43;?> 
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id43; ?>" value="<?php echo $retour43 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom4.' '.$tabPrenom4;?>
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id4; ?>" value="<?php echo $retour4 ;?>" size="2">
      </td>
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom24.' '.$tabPrenom24;?>
        </div>
      </td>
      <td width="21" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id24; ?>" value="<?php echo $retour24 ;?>"  size="2">
      </td>
      <td width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom44.' '.$tabPrenom44;?> 
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id44; ?>" value="<?php echo $retour44 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom5.' '.$tabPrenom5;?>
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id5; ?>"  value="<?php echo $retour5 ;?>"size="2">
      </td>
      <td width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom25.' '.$tabPrenom25;?> 
        </div>
      </td>
      <td width="21"> 
        <input type="text" name="M<?php echo $id25; ?>" value="<?php echo $retour25 ;?>"  size="2">
      </td>
      <td width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom45.' '.$tabPrenom45;?>
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id45; ?>" value="<?php echo $retour45 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="26" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom6.' '.$tabPrenom6;?> 
        </div>
      </td>
      <td width="20" height="26" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id6; ?>" value="<?php echo $retour6 ;?>" size="2">
      </td>
      <td height="26" width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom26.' '.$tabPrenom26;?>
        </div>
      </td>
      <td width="21" height="26" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id26; ?>" value="<?php echo $retour26 ;?>"  size="2">
      </td>
      <td height="26" width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom46.' '.$tabPrenom46;?>
        </div>
      </td>
      <td width="20" height="26" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id46; ?>" value="<?php echo $retour46 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom7.' '.$tabPrenom7;?> 
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id7; ?>"  value="<?php echo $retour7 ;?>"size="2">
      </td>
      <td width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom27.' '.$tabPrenom27;?>
        </div>
      </td>
      <td width="21"> 
        <input type="text" name="M<?php echo $id27; ?>" value="<?php echo $retour27 ;?>"  size="2">
      </td>
      <td width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom47.' '.$tabPrenom47;?>
        </div>
      </td>
      <td width="20"> 
        <input type="text" name="M<?php echo $id47; ?>" value="<?php echo $retour47 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom8.' '.$tabPrenom8;?>
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id8; ?>" value="<?php echo $retour8 ;?>" size="2">
      </td>
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom28.' '.$tabPrenom28;?> 
        </div>
      </td>
      <td width="21" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id28; ?>" value="<?php echo $retour28 ;?>"  size="2">
      </td>
      <td width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
        <?php echo $tabNom48.' '.$tabPrenom48;?> 
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id48; ?>" value="<?php echo $retour48 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="2"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom9.' '.$tabPrenom9;?> 
        </div>
      </td>
      <td width="20" height="2"> 
        <input type="text" name="M<?php echo $id9; ?>"  value="<?php echo $retour9 ;?>"size="2">
      </td>
      <td height="2" width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom29.' '.$tabPrenom29;?> 
        </div>
      </td>
      <td width="21" height="2"> 
        <input type="text" name="M<?php echo $id29; ?>" value="<?php echo $retour29 ;?>"  size="2">
      </td>
      <td height="2" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom49.' '.$tabPrenom49;?>
          
        </div>
      </td>
      <td width="20" height="2"> 
        <input type="text" name="M<?php echo $id49; ?>" value="<?php echo $retour49 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom10.' '.$tabPrenom10;?> 
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id10; ?>" value="<?php echo $retour10 ;?> "size="2">
      </td>
      <td width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom30.' '.$tabPrenom30;?> 
        </div>
      </td>
      <td width="21" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id30; ?>" value="<?php echo $retour30 ;?>"  size="2">
      </td>
      <td width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom50.' '.$tabPrenom50;?> 
        </div>
      </td>
      <td width="20" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id50; ?>" value="<?php echo $retour50 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="21"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom11.' '.$tabPrenom11;?> 
        </div>
      </td>
      <td width="20" height="21"> 
        <input type="text" name="M<?php echo $id11; ?>" value="<?php echo $retour11 ;?>" size="2">
      </td>
      <td height="21" width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom31.' '.$tabPrenom31;?> 
        </div>
      </td>
      <td width="21" height="21"> 
        <input type="text" name="M<?php echo $id31; ?>" value="<?php echo $retour31 ;?>"  size="2">
      </td>
      <td height="21" width="211"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom51.' '.$tabPrenom51;?> 
        </div>
      </td>
      <td width="20" height="21"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="M<?php echo $id51; ?>" value="<?php echo $retour51 ;?>"  size="2">
        </font></td>
    </tr>
    <tr> 
      <td width="216" height="34" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom12.' '.$tabPrenom12;?> 
        </div>
      </td>
      <td width="20" height="34" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id12; ?>"  value="<?php echo $retour12 ;?>"  size="2">
      </td>
      <td height="34" width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom32.' '.$tabPrenom32;?> 
        </div>
      </td>
      <td width="21" height="34" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id32; ?>" value="<?php echo $retour32 ;?>"  size="2">
      </td>
      <td height="34" width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom52.' '.$tabPrenom52;?>
        </div>
      </td>
      <td width="20" height="34" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id52; ?>" value="<?php echo $retour52 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="31"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom13.' '.$tabPrenom13;?> 
        </div>
      </td>
      <td width="20" height="31"> 
        <input type="text" name="M<?php echo $id13; ?>" value="<?php echo $retour13 ;?>"  size="2">
      </td>
      <td height="31" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom33.' '.$tabPrenom33;?>
        </div>
      </td>
      <td width="21" height="31"> 
        <input type="text" name="M<?php echo $id33; ?>"  value="<?php echo $retour33 ;?>" size="2">
      </td>
      <td height="31" width="211"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom53.' '.$tabPrenom53;?> 
        </div>
      </td>
      <td width="20" height="31"> 
        <input type="text" name="M<?php echo $id53; ?>"  value="<?php echo $retour53 ;?>" size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="22" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom14.' '.$tabPrenom14;?>
        </div>
      </td>
      <td width="20" height="22" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id14; ?>"  value="<?php echo $retour14 ;?>" size="2">
      </td>
      <td height="22" width="216" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom34.' '.$tabPrenom34;?> 
        </div>
      </td>
      <td width="21" height="22" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id34; ?>" value="<?php echo $retour34 ;?>"  size="2">
      </td>
      <td height="22" width="211" bgcolor="#CCCCCC"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom54.' '.$tabPrenom54;?>
        </div>
      </td>
      <td width="20" height="22" bgcolor="#CCCCCC"> 
        <input type="text" name="M<?php echo $id54;?>" value="<?php echo $retour54 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="13"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom15.' '.$tabPrenom15;?>
        </div>
      </td>
      <td width="20" height="13"> 
        <input type="text" name="M<?php echo $id15; ?>"  value="<?php echo $retour15 ;?>" size="2">
      </td>
      <td height="13" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom35.' '.$tabPrenom35;?>
        </div>
      </td>
      <td width="21" height="13"> 
        <input type="text" name="M<?php echo $id35; ?>" value="<?php echo $retour35 ;?>"  size="2">
      </td>
      <td height="13" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom55.' '.$tabPrenom55;?>
        </div>
      </td>
      <td width="20" height="13"> 
        <input type="text" name="M<?php echo $id55; ?>" value="<?php echo $retour55 ;?>"  size="2">
      </td>
    </tr>
    <tr bgcolor="#CCCCCC"> 
      <td width="216" height="33"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom16.' '.$tabPrenom16;?>
        </div>
      </td>
      <td width="20" height="33"> 
        <input type="text" name="M<?php echo $id16; ?>"  value="<?php echo $retour16 ;?>" size="2">
      </td>
      <td height="33" width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom36.' '.$tabPrenom36;?> 
        </div>
      </td>
      <td width="21" height="33"> 
        <input type="text" name="M<?php echo $id36; ?>" value="<?php echo $retour36 ;?>"  size="2">
      </td>
      <td height="33" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom56.' '.$tabPrenom56;?>
        </div>
      </td>
      <td width="20" height="33"> 
        <input type="text" name="M<?php echo $id56; ?>" value="<?php echo $retour56 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="2"><font face="Arial, Helvetica, sans-serif"> 
        <?php echo $tabNom17.' '.$tabPrenom17;?>
        </font></td>
      <td width="20" height="2"> 
        <input type="text" name="M<?php echo $id17; ?>"  value="<?php echo $retour17 ;?>" size="2">
      </td>
      <td height="2" width="216"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom37.' '.$tabPrenom37;?>
        </div>
      </td>
      <td width="21" height="2"> 
        <input type="text" name="M<?php echo $id37; ?>" value="<?php echo $retour37 ;?>"  size="2">
      </td>
      <td height="2" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom57.' '.$tabPrenom57;?>
        </div>
      </td>
      <td width="20" height="2"> 
        <input type="text" name="M<?php echo $id57; ?>" value="<?php echo $retour57 ;?>"  size="2">
      </td>
    </tr>
    <tr bgcolor="#CCCCCC"> 
      <td width="216" height="29"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom18.' '.$tabPrenom18;?> 
        </div>
      </td>
      <td width="20" height="29"> 
        <input type="text" name="M<?php echo $id18; ?>"  value="<?php echo $retour18 ;?>" size="2">
      </td>
      <td height="29" width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom38.' '.$tabPrenom38;?> 
        </div>
      </td>
      <td width="21" height="29"> 
        <input type="text" name="M<?php echo $id38; ?>" value="<?php echo $retour38 ;?>"  size="2">
      </td>
      <td height="29" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom58.' '.$tabPrenom58; ?>
        </div>
      </td>
      <td width="20" height="29"> 
        <input type="text" name="M<?php echo $id58; ?>" value="<?php echo $retour58 ;?>"  size="2">
      </td>
    </tr>
    <tr> 
      <td width="216" height="12"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom19.' '.$tabPrenom19;?> 
        </div>
      </td>
      <td width="20" height="12"> 
        <input type="text" name="M<?php echo $id19; ?>"  value="<?php echo $retour19 ;?>" size="2">
      </td>
      <td height="12" width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom39.' '.$tabPrenom39;?> 
        </div>
      </td>
      <td width="21" height="12"> 
        <input type="text" name="M<?php echo $id39; ?>"  value="<?php echo $retour39 ;?>" size="2">
      </td>
      <td height="12" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom59.' '.$tabPrenom59; ?>
        </div>
      </td>
      <td width="20" height="12"> 
        <input type="text" name="M<?php echo $id59; ?>" value="<?php echo $retour59 ;?>"  size="2">
      </td>
    </tr>
    <tr bgcolor="#CCCCCC"> 
      <td width="216" height="36"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom20.' '.$tabPrenom20;?> 
        </div>
      </td>
      <td width="20" height="36"> 
        <input type="text" name="M<?php echo $id20; ?>"  value="<?php echo $retour20 ;?>" size="2">
      </td>
      <td height="36" width="216"> 
        <div id="listeJoueurs"> 
         <?php echo $tabNom40.' '.$tabPrenom40;?> 
        </div>
      </td>
      <td width="21" height="36"> 
        <input type="text" name="M<?php echo $id40; ?>" value="<?php echo $retour40 ;?>"  size="2">
      </td>
      <td height="36" width="211"> 
        <div id="listeJoueurs"> 
          <?php echo $tabNom60.' '.$tabPrenom60;?>
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
        <div align="left"><font face="Arial, Helvetica, sans-serif">Indiquer le 
          N&deg; 
          <input type="text" name="capitaine" value="<?php if (empty($cap))echo ""; else echo $cap ;?>" size="3">
          </font></div>
      </td>
      <td width="21" height="31" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" bgcolor="#CCCCCC" width="1"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" colspan="2" bgcolor="#999999"> 
      
          <div align="center"> 
            <div align="left"></div>
          </div>
          <font face="Arial, Helvetica, sans-serif"><b><font size="2">Juge de touche</font></b> 
          <select name="numeroJuge" size="1">
		 <option value=<?php echo $jug;?> selected><?php if (empty($jug))echo "Faites votre choix";  else echo "Numéro ".$jug; ?></option>
            <option value=""> </option>
            <option value="16">Num&eacute;ro_16</option>
            <option value="17">Num&eacute;ro_17</option>
            <option value="18">Num&eacute;ro_18</option>
            <option value="19">Num&eacute;ro_19</option>
            <option value="20">Num&eacute;ro_20</option>
            <option value="21">Num&eacute;ro_21</option>
            <option value="22">Num&eacute;ro_22</option>
            <option value="23">Num&eacute;ro_23</option>
          </select>
        </font><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
  </table>
  <table width="1250" border="0">
    <tr>
      <td bgcolor="#000000" valign="middle" height="49"><font size="5" color="#FFFFFF"> 
        S&eacute;lection des dirigeants :</font></td>
    </tr>
  </table>
  <table width="1250" border="0" align="left" cellspacing="0" cellpadding="0">
    <tr> 
      <td valign="middle" height="19" bgcolor="#E3F3FF" width="10"> </td>
      <td width="170" valign="middle" height="19"><font size="3" face="Arial, Helvetica, sans-serif"> 
<?php
// *************                 Choix de l'entraineurs / adjoint               *****************

$reponse = $bdd->query("SELECT count(type_licence) 
						FROM $bdcomite 
						WHERE club=$equipe AND (type_licence='ENT' OR type_licence='ADJ') ");

								while ($row = $reponse->fetch())
									{
									$nbreEntraineur= $row[0]; 
									}

$tabEntraineur = array();
for ($i=0; $i <= $nbreEntraineur ; $i++)			
	{		
	$reponse = $bdd->query("SELECT nom 
							FROM $bdcomite 
							WHERE club='$equipe' and (type_licence='ENT' OR type_licence='ADJ'  )  
							ORDER BY nom 
							LIMIT $i,1 ");
					
								while ($donnees = $reponse->fetch())
										{
										$tabEntraineur[]= $donnees['nom'];
										
										}
										
		
	}
	

//*******************************************************************************************

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
         Entraineurs : 
          </font> <font size="3" face="Arial, Helvetica, sans-serif"></font></div>
      </td>
      <td width="188" valign="middle" height="19"> 
	
        <select id="formSp" name="ent"  size="1">
          <option value=<?php echo $ent;?> selected> <?php if (empty($ent))echo "Choix d'un entraineur";  else echo $ent; ?></option>
          <?php
					 	 for ($i=0; $i < $nbreEntraineur ; $i++)			
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
           Entraineurs 2 : 
          </font></div>
      </td>
      <td width="360" valign="middle" height="19"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <select id="formSp" name="ent2" size="1">
          <option value=<?php echo $ent2;?> selected><?php if (empty($ent2))echo "Choix d'un 2me entraineur";  else echo $ent2; ?></option>
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
         Adjoints terrain :
          </font></div>
      </td>
      <td width="188" valign="middle" height="19"> 
        <select id="formSp" name="adj"   size="1">
          <option value=<?php echo $adj;?> selected> 
				<font size="3" face="Arial, Helvetica, sans-serif"> 
					<?php if (empty($adj))echo "Choix d'un adjoint";  else echo $adj; ?>
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
// *************                 Choix du médecin               *****************

$reponse = $bdd->query("SELECT count(nom) 
						FROM $bdcomite 
						WHERE club=$equipe AND type_licence='MED' ");  

								while ($row = $reponse->fetch())
									{
									 $nbreMedecin= $row[0]; 
									}

$tabMedecin = array(); 
for ($i=0; $i<=$nbreMedecin ; $i++)			
	{		
		$reponse = $bdd->query("	SELECT nom 
					FROM $bdcomite 
					WHERE club='$equipe' and type_licence='MED'  
					ORDER BY nom 
					LIMIT $i,1 ");
						
					while ($donnees = $reponse->fetch())
										{
										$tabMedecin[]= $donnees['nom'];									
										}
		}

// *********************************************************************
		?>

          M&eacute;decins :</font></div>
      </td>
      <td height="23" valign="middle" width="234"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
       <select id="formMed" name="med"  size="1">
          <option value=<?php echo $med;?> selected><?php if (empty($med))echo "Choix d'un m&eacute;decin";  else echo $med; ?></option>
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
// *************                 Choix soigneur               *****************
		
$reponse = $bdd->query("SELECT count(nom) 
						FROM $bdcomite 
						WHERE club=$equipe AND type_licence='SOI' ");  

								while ($row = $reponse->fetch())
									{
									$nbreSoigneur= $row[0]; 
									}
			

$tabSoigneur = array();
for ($i=0; $i<=$nbreSoigneur ; $i++)
	{
	$reponse = $bdd->query("	SELECT nom 
				FROM $bdcomite 
				WHERE club='$equipe' AND type_licence='SOI'  
				ORDER BY nom limit $i,1 ");
					//$result = mysql_query($query);
					while ($donnees = $reponse->fetch() )
						{
						$tabSoigneur[]=$donnees[0];
						}
	}

?>
          Soigneurs : </font></div>
      </td>
      <td height="23" valign="middle" width="486"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <select id="formMed" name="soi" size="1">
          	<option value=<?php echo $soi;?> selected>
		  		<?php if (empty($soi))echo "Choix d'un soigneur";  else echo $soi; ?>
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
// *************                 Choix responsable             *****************

$reponse = $bdd->query("SELECT count(nom) 
						FROM $bdcomite 
						WHERE club=$equipe AND type_licence='RES'   ");

								while ($row = $reponse->fetch())
									{
									$nbreResponsable= $row[0]; 
									}


$tabResponsable = array();
for ($i=0; $i<=$nbreResponsable ; $i++)			
	{		
		$reponse = $bdd->query("	SELECT nom 
					FROM $bdcomite 
					WHERE club='$equipe' and type_licence='RES' 
					ORDER BY nom 
					LIMIT $i,1 ");
						while ($donnees = $reponse->fetch() )
								{
								$tabResponsable[]=$donnees[0];
								}
	
		}
		
// *******************************************************************		
?>
        <select id="formAdm" name="res" size="1">
          	<option value=<?php echo $res;?>  selected>
		   		<font size="3" face="Arial, Helvetica, sans-serif"> 
          		<?php if (empty($res))echo "Choix d'un responsable";  else echo $res; ?>
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
		 	 <?php if (empty($dop)) echo "Controle Anti dopage"; else echo $dop; ?>
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
	
// *************                 Choix preparateur            *****************

$reponse = $bdd->query("SELECT count(nom) 
						FROM $bdcomite 
						WHERE club=$equipe AND type_licence='PRE' ");

								while ($row = $reponse->fetch())
									{
									$nbrePrepa= $row[0]; 
									}

$tabPrepa = array();
for ($i=0; $i<=$nbrePrepa ; $i++)			
	{		
		$reponse = $bdd->query("	SELECT nom 
					FROM $bdcomite 
					WHERE club='$equipe' and type_licence='PRE'  
					ORDER BY nom 
					LIMIT $i,1 ");
						
						while ($donnees = $reponse->fetch() )
								{
								$tabPrepa[]=$donnees[0];
								}
	
		}
// ***************************************************************************		
?>
          Preparateurs : </font> <font size="3" face="Arial, Helvetica, sans-serif"></font></div>
      </td>
      <td width="188" valign="middle" height="19" bgcolor="#CCCCCC"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <select id="formSp" name="pre"  size="1">
          <option value=<?php echo $pre;?> selected> 
          <?php if (empty($pre))echo "Choix d'un pr&eacute;parateur";  else echo $pre; ?>
          </option>
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
    <tr valign="middle"> 
      <td height="14" colspan="5">
        <h4 align="center"> <br>
          <input type="submit" value="Visualiser la feuille de match" name="submit">
          <br>
          <br>
        </h4>
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
