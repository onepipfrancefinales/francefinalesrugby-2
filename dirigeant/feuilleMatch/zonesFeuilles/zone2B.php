
<?php
//********   recuperation des données issues de saisie *********


?>

<?php
//$bdcomite=("php".''.$comite.''."_joueurs");
//$bdfeuilleB=("php".''.$comite.''."_feuilleB");


/*

if ($connect == "connection2")
require   "../../../connect1/connection2.php";
else
require   "../../../connect1/connection3.php";
	
	$reponse = $bdd->query("SELECT connectInvitee, comiteInvite
				FROM $bdfeuilleB 
				WHERE id=$code_match");
							//$result = mysql_query($requete) or die(mysql_error());
							while ($donnees = $reponse->fetch() )
								{    
								$connectEquipeInvitee ="$row[0]";
								$comiteEquipeInvitee ="$row[1]";
								}
//	echo $connectEquipeInvitee;						
//	echo $comiteEquipeInvitee;						
			
	if ($equipe == $equipeA)
			{
			$connectA = $connect;
			$comiteA = $comite;
			$connectB = $connectEquipeInvitee;
			$comiteB = $comiteEquipeInvitee;
			}
		else
			{
			$connectB = $connect;
			$comiteB = $comite;
			$connectA = $connectEquipeInvitee;
			$comiteA = $comiteEquipeInvitee;
			}
			
		//	echo $connectA;
		//	echo $comiteA;
		//	echo $connectB;
		//	echo $comiteB;



// ******** Saisie des données collectées,  dans la base de données

/*
if (isset ($_GET['doubleBase'])) $doubleBase = $_GET['doubleBase'];else $doubleBase = "";
 
 if ($doubleBase == 0)
{
		
		 $sql = "UPDATE $bdfeuilleB
			  SET  entraineur='$entraineur',entraineur2='$entraineur2',soigneur='$soigneur',adjoint='$adjoint',medecin='$medecin',prepa='$prepa'
			  WHERE id = $code_match ";
			  
		$requete = mysql_query( $sql );
		
*/
/*		
		//$bdfeuilleB
		$req = $bdd->prepare("UPDATE phpab_feuilleB
							 SET 
							 entraineur =:entraineur,
							 entraineur2 =:entraineur2,
							 soigneur =:soigneur,
							 adjoint =:adjoint,
							 medecin =:medecin,
							 prepa =:prepa
							
							WHERE  id =:code_match");
		   
			 $req->execute(array(
							'entraineur' => $entraineur,
							'entraineur2' => $entraineur2,
							'soigneur' => $soigneur,
							'adjoint' => $adjoint,
							'medecin' => $medecin,
							'prepa' => $prepa,

							'code_match' => $code_match

						));		
		
		
*/		
/*		
		
	   }
 else
	 	{ 
	  
	  		if ($equipe==$equipeA)
			{
			$terrain = "dom";
			
			$bdfeuilleA = "php".''.$comiteA.''."_feuilleB";
			

			$sql = "UPDATE $bdfeuilleB
				 SET  entraineur='$entraineur',entraineur2='$entraineur2',soigneur='$soigneur',adjoint='$adjoint',medecin='$medecin',prepa='$prepa'
				 WHERE id = $code_match" ;
		 
		  		$requete = mysql_query( $sql )   ;
				
				
			 $req = $bdd->prepare('UPDATE $bdfeuilleB
							SET N1 =:idPerso1
							
							WHERE  id =:code_match');
		   
			 $req->execute(array(
						'idPerso1' => $idPerso1,
						'code_match' => $code_match
						));		 	
				
				
				
				
				
				
			}
			else
			{
			
			$terrain = "ext";

			$bdfeuilleB = "php".''.$comiteB.''."_feuilleB";
			

			$sql = "UPDATE $bdfeuilleB
				 SET  entraineur='$entraineur',entraineur2='$entraineur2',soigneur='$soigneur',adjoint='$adjoint',medecin='$medecin',prepa='$prepa'
				 WHERE id = $code_match" ;
		 
		  		$requete = mysql_query( $sql )   ;

				
			 $req = $bdd->prepare('UPDATE $bdfeuilleB
							SET N1 =:idPerso1
							
							WHERE  id =:code_match');
		   
			 $req->execute(array(
						'idPerso1' => $idPerso1,
						'code_match' => $code_match
						));		 		
			}
}
*/
//echo $connectB;
//echo $comiteB;
//***** A partir de la base de données reconstitution des licences
/*
	$bdcomite=("php".''.$comiteB.''."_joueurs");

*/		 
?>

<table width="900" border="1" cellspacing="0" cellpadding="0">
  <tr bordercolor="#333333"> 
    <td width="89" height="25" bgcolor="#CCCCCC"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">A</font></b></div>
    </td>
    <td width="208" height="25"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM 
        <font size="1">(lettres capitales)<font size="2"> et Pr&eacute;nom</font></font></font></b></div>
    </td>
    <td width="135" height="25"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de 
        licence</font></b></div>
    </td>
    <td width="90" height="25" bgcolor="#CCCCCC"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">B</font></b><b></b></div>
    </td>
    <td width="210" height="25"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM 
        <font size="1">(lettres capitales)<font size="2"> et Pr&eacute;nom</font></font></font></b></div>
    </td>
    <td width="154" height="25"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de 
        licence</font></b></div>
    </td>
  </tr>
  <tr bordercolor="#333333"> 
    <td rowspan="2" height="48" width="89"><font face="Arial, Helvetica, sans-serif" size="2">Entraineur(s)</font></td>
    <td width="208" height="24">&nbsp;</td>
    <td width="135" height="24">&nbsp;</td>
    <td rowspan="2" height="48" valign="middle" width="90"> 
      	<div id="affichage">
	  		Entraineur(s)
	  	</div>
    </td>
    <td width="210" height="24"> 
      <div class="Taillebold"> 
        <?php   echo $nomEntraineur.' '.ucfirst(strtolower($prenomEntraineur));?>
      </div>
    </td>
    <td width="154" height="24"> 
      <div class="Taille"> 
        <?php  echo substr($licenceEntraineur,0,4).' '.substr($licenceEntraineur,4,2).' '.substr($licenceEntraineur,6,1).' '.substr($licenceEntraineur,-6);?>
      </div>
    </td>
  </tr>
  <tr bordercolor="#333333"> 
    <td width="208" height="24">&nbsp;</td>
    <td width="135" height="24">&nbsp;</td>
    <td width="210" height="24"> 
      <div class="Taillebold">
        <?php   echo $nomEntraineur2.' '.ucfirst(strtolower($prenomEntraineur2));?>
      </div>
    </td>
    <td width="154" height="24"> 
      <div class="Taille"> 
        <?php  echo substr($licenceEntraineur2,0,4).' '.substr($licenceEntraineur2,4,2).' '.substr($licenceEntraineur2,6,1).' '.substr($licenceEntraineur2,-6);?>
      </div>
    </td>
  </tr>
  <tr bordercolor="#333333"> 
    <td width="89" height="24">
		<div id="affichage">
			Soigneur
		</div>	
	</td>
    <td width="208" height="24">&nbsp;</td>
    <td width="135" height="24">&nbsp;</td>
    <td width="90" height="24"> 
      	<div id="affichage">
			Soigneur
	  	</div>
    </td>
    <td width="210" height="24"> 
      <div class="Taillebold">
        <?php   echo $nomSoigneur.' '.ucfirst(strtolower($prenomSoigneur));?>
        </div>
    </td>
    <td width="154" height="24"> 
      <div class="Taille"> 
        <?php  echo substr($licenceSoigneur,0,4).' '.substr($licenceSoigneur,4,2).' '.substr($licenceSoigneur,6,1).' '.substr($licenceSoigneur,-6);?>
      </div>
    </td>
  </tr>
  <tr bordercolor="#333333"> 
    <td width="89" height="24">
		<div id="affichage">
			Adjoint terrain
		</div>
	</td>
    <td width="208" height="24">&nbsp;</td>
    <td width="135" height="24">&nbsp;</td>
    <td width="90" height="24"> 
      	<div id="affichage">
	  		Adjoint terrain
	  	</div>
    </td>
    <td width="210" height="24"> 
      <div class="Taillebold">
        <?php   echo $nomAdjoint.' '.ucfirst(strtolower($prenomAdjoint));?>
        </div>
    </td>
    <td width="154" height="24"> 
      <div class="Taille"> 
        <?php  echo substr($licenceAdjoint,0,4).' '.substr($licenceAdjoint,4,2).' '.substr($licenceAdjoint,6,1).' '.substr($licenceAdjoint,-6);?>
      </div>
    </td>
  </tr>
  <tr bordercolor="#333333"> 
    <td width="89" height="24">
		<div id="affichage">
			M&eacute;decin*
		</div>
	</td>
    <td width="208" height="24">&nbsp;</td>
    <td width="135" height="24">&nbsp;</td>
    <td width="90" height="24"> 
     	 
      <div id="affichage"> M&eacute;decin*</div>
    </td>
    <td width="210" height="24"> 
      <div class="Taillebold">
        <?php   echo $nomMedecin.' '.$prenomMedecin;?>
   </div>
    </td>
    <td width="154" height="24"> 
      <div class="Taille"> 
        <?php  echo substr($licenceMedecin,0,4).' '.substr($licenceMedecin,4,2).' '.substr($licenceMedecin,6,1).' '.substr($licenceMedecin,-6);?>
      </div>
    </td>
  </tr>
</table>
<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr bordercolor="#333333">
    <td height="24" valign="top"> 
      <div align="center"><font size="2">* En cas de non-pr&eacute;sence physique 
        d'un m&eacute;decin, porter les coordonn&eacute;es t&eacute;l&eacute;phoniques 
        du m&eacute;decin de garde : .......................................................</font></div>
    </td>
  </tr>
  <tr bordercolor="#333333"> 
    <td height="24"> 
      	<div id="TITRE">
	  		PREPARAREUR PHYSIQUE (1DF, 2DF, 3DF, Top 8, Armelle Auclair uniquement)
	  	</div>
    </td>
  </tr>
</table>
<table width="900" border="1" cellspacing="0" cellpadding="0">
  <tr bordercolor="#333333"> 
    <td width="89" height="24">
      	<div id="affichage">
	  		Equipe A
		</div>
    </td>
    <td width="208" height="24">&nbsp;</td>
    <td width="135" height="24" bgcolor="#CCCCCC">&nbsp;</td>
    <td width="90" height="24">
      <div id="affichage">
	 	 Equipe B 
	  </div>
    </td>
    <td width="210" height="24"> 
       <div class="Taillebold">
        <?php   echo $nomPrepa.' '.ucfirst(strtolower($prenomPrepa));?>
        </div>
    </td>
    <td width="154" height="24" bgcolor="#CCCCCC"> 
      <div class="Taille"> 
        <?php echo substr($licencePrepa,0,4).' '.substr($licencePrepa,4,2).' '.substr($licencePrepa,6,1).' '.substr($licencePrepa,-6);?>
      </div>
    </td>
  </tr>
</table>

