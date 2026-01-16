<table width="1250" border="1" cellspacing="0" cellpadding="0">
  <tr> 
    <td valign="middle" bgcolor="#CCCCCC">
     
<?php

//$bdcomite=("php".''.$comite.''."_joueurs");
 
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

function rechercherHomonyme($equipe, $bdcomite, $bdd){
	
	$reponse = $bdd->query("SELECT count(DISTINCT nom) 
						FROM $bdcomite 
						WHERE club=$equipe AND fonction='1' and comite ='1' "); 
								while ($row = $reponse->fetch())
									{
									$nbreDeNomDifferent= $row[0];
									}
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
		echo $equipe."avant ligne143";
/*		
		require   "../../../connect/connexion1.php";
$reponse = $bdd->query("	SELECT sigle,comite, id 
							FROM bdclubs 
							WHERE id='$equipe'");  
								while ($donnees = $reponse->fetch() )
								{ 
								  $equipe = $donnees['id'];
								}
								echo $equipe."ligne143";
*/
?>
        <?php //echo $bdcomite;?>
      
        <font face="Arial, Helvetica, sans-serif"> <font size="3" color="#000000"><b>Composition pour la rencontre du </b></font><b><font color="#FF0000"> 
        <?php $date=substr($date,0,10);?>
        <?php echo $date; ?>
        </font></b><font color="#FF0000"> </font> <b><font size="3" color="#000000">face &agrave;</font><font color="#FF0000">
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
  <table width="1300">
    <tr>
      <td bgcolor="#000000" valign="middle" height="42" align="right"> 
        <div align="left">
          <p><font face="Arial, Helvetica, sans-serif"><font size="5" color="#FFFFFF"><b>S&eacute;lection des joueurs :</b> 
            <?php echo " ( Effectif disponible  " .''.$effectifJoueurs .''. " joueurs )";?>
            </font><font face="Arial, Helvetica, sans-serif"> 
            <?php
// recuperation et affichage des joueurs

$tabNom = array();
$tabPrenom = array();
$tabId = array();
//echo $effectif;
for ($i=0; $i <= 79 ; $i++)
{
	require   "../../../connect/connexion2.php";	
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
 	if (isset ($tabNom[$i]))		${"tabNom".($i+1)} = $tabNom[$i]; else ${"tabNom".($i+1)}= "-";		
	if (isset ($tabPrenom[$i]))		${"tabPrenom".($i+1)} = $tabPrenom[$i]; else ${"tabPrenom".($i+1)}= "-";				
	if (isset ($tabId[$i]))         ${"id".($i+1)} = $tabId[$i]; else ${"id".($i+1)}= "A";

}

for ($i=1; $i <= 80 ; $i++)
{
	if (isset (${"tabPrenom".($i)})) ${"tabPrenom".($i)}=${"tabPrenom".($i)};else ${"tabPrenom".($i)}="-";
	if (isset (${"tabNom".($i)}))   ${"tabNom".($i)}= ${"tabNom".($i)};else ${"tabNom".($i)}="-";
	if (isset(${"retour".$i}))   ${"retour".$i}  =${"retour".$i}; else ${"retour".$i} ="";
}






for ($j=1; $j<24; $j++)
{
	if (isset(${"N".$j}))   ${"N".$j}  =${"N".$j}; else ${"N".$j} ="";	
		for ($i=1; $i<= 80; $i++)
			{
					if (${'N'.$j}==${'id'.$i})
							{
							${"retour".$i}=$j;
							}
				
			}
}



?>
            </font><font size="5" color="#FFFFFF"> </font></font></p>
          </div>
      </td>
    </tr> 
  </table>
<table width="1300" border="0">
  <?php $a=1;
  for ($i1=1 ,$i2=21 , $i3=41, $i4=61; $i1 < 21 ,$i2 < 41 , $i3 < 61, $i4 < 81; $i1=$i1+2 , $i2=$i2+2 , $i3=$i3+2, $i4=$i4+2){
    ?>
	<tr> 
      <td width="267" height="31" class ="listeJoueurs"><?php echo ${"tabNom".$i1}.' '.${"tabPrenom".$i1};?></td>
      <td width="28"  height="31"><input type="text" name="M<?php echo ${"id".$i1}; ?>" value="<?php echo ${"retour".$i1} ;?>" size="2"></td>
      <td bgcolor="#999999" width="10"></td>
      <td width="255" height="31"  class ="listeJoueurs"> <?php echo ${"tabNom".$i2}.' '.${"tabPrenom".$i2};?></div></td>
      <td width="34"  height="31"><input type="text" name="M<?php  echo ${"id".$i2}; ?>" value="<?php echo ${"retour".$i2} ;?>" size="2"></td>
      <td bgcolor="#CCCCCC" width="10"></td>
      <td width="256" height="31"  class ="listeJoueurs"><?php echo ${"tabNom".$i3}.' '.${"tabPrenom".$i3};?></div></td>
      <td width="33"  height="31"><input type="text" name="M<?php echo ${"id".$i3}; ?>" value="<?php echo ${"retour".$i3} ;?>"  size="2"></td>
      <td bgcolor="#CCCCCC" width="10"></td>
      <td width="306" height="31" class ="listeJoueurs"><?php echo ${"tabNom".$i4}.' '.${"tabPrenom".$i4};?></div></td>
      <td width="38"  height="31"><input type="text" name="M<?php echo ${"id".$i4}; ?>" value="<?php echo ${"retour".$i4} ;?>"  size="2"></td>
	</tr>
	
	<tr> 
      <td width="267" height="31" bgcolor="#CCCCCC" class ="listeJoueurs"><?php echo ${"tabNom".($i1+$a)}.' '.${"tabPrenom".($i1+$a)};?></td>
      <td width="28"  height="31" bgcolor="#CCCCCC"><input type="text" name="M<?php echo ${"id".($i1+$a)}; ?>" value="<?php echo ${"retour".($i1+$a)} ;?>" size="2"></td>
      <td bgcolor="#999999" width="10"></td>
      <td width="255" height="31" bgcolor="#CCCCCC" class ="listeJoueurs"> <?php echo ${"tabNom".($i2+$a)}.' '.${"tabPrenom".($i2+$a)};?></div></td>
      <td width="34"  height="31" bgcolor="#CCCCCC"><input type="text" name="M<?php  echo ${"id".($i2+$a)}; ?>" value="<?php echo ${"retour".($i2+$a)} ;?>" size="2"></td>
      <td bgcolor="#CCCCCC" width="10"></td>
      <td width="256" height="31" bgcolor="#CCCCCC" class ="listeJoueurs"><?php echo ${"tabNom".($i3+$a)}.' '.${"tabPrenom".($i3+$a)};?></div></td>
      <td width="33"  height="31" bgcolor="#CCCCCC"><input type="text" name="M<?php echo ${"id".($i3+$a)}; ?>" value="<?php echo ${"retour".($i3+$a)} ;?>"  size="2"></td>
      <td bgcolor="#CCCCCC" width="10"></td>
      <td width="306" height="31" bgcolor="#CCCCCC" class ="listeJoueurs"><?php echo ${"tabNom".($i4+$a)}.' '.${"tabPrenom".($i4+$a)};?></div></td>
      <td width="38"  height="31" bgcolor="#CCCCCC"><input type="text" name="M<?php echo ${"id".($i4+$a)}; ?>" value="<?php echo ${"retour".($i4+$a)} ;?>"  size="2"></td>
	</tr>

	<?php
	}
	?>
	
    
    <tr> 
      <td colspan="2" height="31" bgcolor="#999999"><div align="right"><font face="Arial, Helvetica, sans-serif"><b>Choix du capitaine :</b></font></div></td>
      <td height="31" bgcolor="#999999" width="10"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" width="255" bgcolor="#999999"><div align="left"><font face="Arial, Helvetica, sans-serif">Indiquer le N&deg; <input type="text" name="capitaine" value="<?php if (empty($cap))echo ""; else echo $cap ;?>" size="3"></font></div></td>
      <td width="34" height="31" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" bgcolor="#CCCCCC" width="10"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td height="31" colspan="5" bgcolor="#999999"> 
        <font face="Arial, Helvetica, sans-serif"><b><font size="2">Juge de touche</font></b> 
        <select name="numeroJuge" size="1">
          <option value=<?php echo $jug;?> selected> 
          <?php if (empty($jug))echo "Faites votre choix";  else echo "Numéro ".$jug; ?>
          </option>
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
      <td bgcolor="#000000" valign="middle" height="59"><font size="5" color="#FFFFFF"><br> S&eacute;lection des dirigeants :<br></font></td>
    </tr>
  </table>
  <table width="1250" border="0" align="left" cellspacing="0" cellpadding="0">
    <tr> 
      <td valign="middle" height="19" bgcolor="#E3F3FF" width="10"> </td>
      <td width="170" valign="middle" height="19"></td>
      <td width="188" valign="middle" height="19"></td>
      <td width="18" valign="middle" height="19"></td>
      <td width="186" valign="middle" height="19"></td>
      <td width="360" valign="middle" height="19"></td>
      <td width="175" valign="middle" height="19"></td>
      <td colspan="2" valign="middle" height="19"></td>
      <td width="118" valign="middle" height="19"></td>
    </tr>
    <tr> 
      <td valign="middle" height="19" bgcolor="#E3F3FF" width="10"></td>
      <td width="170" valign="middle" height="19"><div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
         Entraineurs : 	 <?php listeDesDirigeants($bdcomite, $equipe, "entraineurs", $bdd);   echo $nbreDirigeant;?>  </font></div></td>
      <td width="188" valign="middle" height="19"> 
        <select id="formSp" name="ent"  size="1">
          <option value=<?php echo $ent;?> selected> <?php if (empty($ent))echo $ent;  else echo "Choix d'un entraineur"; ?></option>
          <?php // echo $nbreEntraineur;
				listeDesDirigeants($bdcomite, $equipe, "entraineurs", $bdd);
				for ($i=0; $i < $nbreDirigeant ; $i++)	{ ?>
          <option value="<?php echo $tabDirigeant[$i]; ?>"><?php echo $tabDirigeant[$i]; ?></option>
          <?php	} ?>
        </select></td>
		
      <td width="18" valign="middle" height="19">&nbsp;</td>
      <td width="186" valign="middle" height="19"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 
           Entraineurs 2 : 
		   <?php $tabDirigeant=[];
		   listeDesDirigeants($bdcomite, $equipe, "entraineurs", $bdd);
				echo $nbreDirigeant;?>
          </font></div>
      </td>
      <td width="360" valign="middle" height="19"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <select id="formSp" name="ent2" size="1">
          <option value=<?php echo $ent2;?> selected><?php if (empty($ent2))echo "Choix d'un 2me entraineur";  else echo $ent2; ?></option>
          <?php
					 	 for ($i=0; $i<$nbreDirigeant ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabDirigeant[$i]; ?>"> 
          <?php echo $tabDirigeant[$i]; ?>
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
      <td width="170" valign="middle" height="19"><div align="right"><font size="3" face="Arial, Helvetica, sans-serif">  Adjoints terrain : </font></div></td>
      <td width="188" valign="middle" height="19"> 
        <select id="formSp" name="adj"   size="1">
          <option value=<?php echo $adj;?> selected> 
				<font size="3" face="Arial, Helvetica, sans-serif"> 
					<?php if (empty($adj))echo "Choix d'un adjoint";  else echo $adj; ?>
				</font>
		  </option>
          <?php
					 	 for ($i=0; $i<$nbreDirigeant ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabDirigeant[$i]; ?>"> 
				<font size="3" face="Arial, Helvetica, sans-serif"><?php echo $tabDirigeant[$i]; ?></font>
			</option>
          <?php	} ?>
        </select>
      </td>
      <td width="18" valign="middle" height="19">&nbsp;</td>
      <td width="186" valign="middle" height="19"><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> </font></font></font></td>
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


          M&eacute;decins :
		  <?php $tabDirigeant=[];
				listeDesDirigeants($bdcomite, $equipe, "medecins", $bdd);
				echo $nbreDirigeant;?></font></div></td>
      <td height="23" valign="middle" width="234"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <select id="formMed" name="med"  size="1">
          <option value=<?php echo $med;?> selected><?php if (empty($med))echo "Choix d'un m&eacute;decin";  else echo $med; ?></option>
          <?php	 for ($i=0; $i<$nbreDirigeant ; $i++) {	?>
          <option value="<?php //echo $tabDirigeant[$i]; ?>"> <?php echo $tabDirigeant[$i]; ?></option>
          <?php	}?>
        </select>
       
        </font></td>
      <td height="23" valign="middle" width="20">&nbsp;</td>
      <td height="23" valign="middle" width="138"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif"> 

          Soigneurs : 
		  <?php $tabDirigeant=[];
				listeDesDirigeants($bdcomite, $equipe, "soigneurs", $bdd);
				echo $nbreDirigeant;?>
		  </font></div>
      </td>
      <td height="23" valign="middle" width="486"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <select id="formMed" name="soi" size="1">
          	<option value=<?php echo $soi;?> selected>
		  		<?php if (empty($soi))echo "Choix d'un soigneur";  else echo $soi; ?>
		  	</option>
          <?php
					  
					 for ($i=0; $i<$nbreDirigenat ; $i++)			
							{	          
								?>
          <option value="<?php echo $tabDirigeant[$i];  ?>"><?php echo $tabDirigeant[$i]; ?></option>
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
          Visa : 
		<?php $tabDirigeant=[];
				listeDesDirigeants($bdcomite, $equipe, "responsables", $bdd);
				echo $nbreDirigeant;?>  
		  
		  
		  </font></div>
      </td>
      <td height="10" valign="middle" width="209"> 

        <select id="formAdm" name="res" size="1">
          	<option value=<?php echo $res;?>  selected>
		   		<font size="3" face="Arial, Helvetica, sans-serif"> 
          		<?php if (empty($res))echo "Choix d'un responsable";  else echo $res; ?>
		   		</font>
		   	</option>
           <?php for ($i=0; $i<$nbreDirigeant ; $i++){?>
			<option value="<?php echo $tabDirigeant[$i]; ?>"> <?php echo $tabDirigeant[$i]; ?>  </option>
           <?php } ?>
        </select>
      </td>
      <td height="10" valign="middle" colspan="2"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif">Contr&ocirc;le anti dopage : 
		<?php $tabDirigeant=[];	listeDesDirigeants($bdcomite, $equipe, "responsables", $bdd); echo $nbreDirigeant;?></font>
		</div>
	  </td>
      <td height="10" valign="bottom" width="499"> 
        <select id="formAdm" name="dop" size="1">
          	<option value=<?php echo $dop;?>  selected> 
		 	 <?php if (empty($dop)) echo "Controle Anti dopage"; else echo $dop; ?>
		  	</option>
          <?php	for ($i=0; $i<$nbreDirigeant ; $i++){ ?> <option value="<?php echo $tabDirigeant[$i]; ?>"> 
          	<?php echo $tabDirigeant[$i]; ?>
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
          Preparateurs : 
		  <?php $tabDirigeant=[];
				listeDesDirigeants($bdcomite, $equipe, "preparateurs", $bdd);
				echo $nbreDirigeant;?>
		  
		  
		  </font> </div></td>
      <td width="188" valign="middle" height="19" bgcolor="#CCCCCC"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <select id="formSp" name="pre"  size="1">
          <option value=<?php echo $pre;?> selected ><?php 
		  echo "test".$pre;
		  
		  if (empty($pre))echo "Choix d'un pr&eacute;parateur";  else //echo $pre; ?></option>
           <?php for ($i=0; $i<$nbreDirigeant ; $i++) {	 ?>
          <option value="<?php echo $tabDirigeant[$i]; ?>"><?php echo $tabDirigeant[$i]; ?></option>
		  <?php }	?>
		</select></font></td>
      <td bgcolor="#CCCCCC" height="23" width="104"></td>
      <td bgcolor="#CCCCCC" height="23" width="117"></td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF" height="14" width="19"></td>
      <td bgcolor="#CCCCCC" height="14" width="155"></td>
      <td bgcolor="#CCCCCC" height="14" width="362"></td>
      <td bgcolor="#CCCCCC" height="14" width="104"></td>
      <td bgcolor="#CCCCCC" height="14" width="117"></td>
    </tr>
    <tr valign="middle"> 
      <td height="92" colspan="5"><br>
        <h5 align="center"> 
		<br>
          <input type="submit" value="Visualiser la feuille de match" name="submit">
          <br>
          <br>
        </h5>
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
