<?php require ("../../saison.php"); 
	
if (isset($_POST['id_equipe'])) $id_equipe=$_POST['id_equipe']; else $id_equipe="";  // code FFR du type 1111A
if (isset( $division)) $division= $division; else $division="";
if (isset( $equipe)) $equipe = $equipe; else $equipe="";							//  code Onepip du type 20 29 159
if (isset( $numeroLigue)) $numeroLigue= $numeroLigue; else $numeroLigue="";
if (isset( $nom1)) $nom1= $nom1; else $nom1="";
if (isset( $nom2)) $nom1= $nom2; else $nom2="";
if (isset( $nom3)) $nom1= $nom3; else $nom3="";
if (isset( $nom4)) $nom1= $nom4; else $nom4="";
if (isset( $divisionNom)) $divisionNom= $divisionNom; else $divisionNom="";
if (isset( $divisionChiffre)) $divisionChiffre= $divisionChiffre; else $divisionChiffre="";
if (isset( $nomLigue)) $nomLigue= $nomLigue; else $nomLigue="";
if (isset( $sigle)) $sigle= $sigle; else $sigle="";
if (isset( $comite)) $comite= $comite; else $comite="";
if (isset( $titre)) $titre= $titre; else $titre="";
if (isset( $championnat)) $championnat= $championnat; else $championnat="";
if (isset( $equipeR)) $equipeR = $equipeR; else $equipeR="";


//echo "id_equipe : ".$id_equipe;echo "<br />";
$id_equipe="5157F";
// déclaration des fichiers contenant des fonctions

require '../feuilleMatch/fonctions.php';

require '../../connect/connexion1.php';
require 'fonctionsDonnees.php';

identiteClub($id_equipe, $bdd);

echo "equipe : ".$equipe; echo "<br / >";
echo "comite :".$comite;  echo "<br / >";

//******* appels aux fonctions  *******

require ("../../connect/connexion1.php");

$equipeA = $equipe;
AffichageEquipeA($equipeA, $bdd);
palmaresEquipes ($id_equipe, $bdd);		
recherchePresenceEquipe ($equipe, $bdd);

//echo "connection :".$connect; echo "<br / >";
//echo $equipe;
//echo $comite;
if ($connect=="connexion6")
	 require ("../../connect/connexion6.php");
elseif ($connect=="connexion6")
	require ("../../connect/connexion6.php");

divisionEtPoule($comite, $equipe, $bdd);

//echo "divisionchiffre : ".$divisionChiffre;echo "<br / >";
//echo "divisionNom : ".$divisionNom;echo "<br / >";
						

NbreDeJournee ($comite, $equipe, $bdd);echo "<br / >";

//echo "nbreJourneeMax : ".$nbreJourneeMax;echo "<br / >";	
//echo "comite: ".$comite;echo "<br / >";	   
//echo "connection :".$connect;echo "<br / >"; 

?>
<td height="388" width="260" valign="top"> 
    <table width="593" border="0" align="left">
      <tr> 
        
      <td width="289"> 
        <div align="center"><b><font size="3">Palmar&egrave;s </font></b> </div>
        <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
            Fanion</font></b><br>
          <font color="#FF0000">
          <?php
			//*******  Affichage palmares Equipe Une ********

			for ($i=0; $i<	$nbreTitre; $i++)
					{
					echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
         		  	}				
			
			?>
          </font></p>
          <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe II</font></b><br>
			<?php
			//*******  palmares Equipe II ********
			//	palmaresEquipes ($id_equipe, $bdd);
			//	for ($i=0; $i<	$nbreTitre; $i++)
			//		{
			//		echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
            //		  	}
				?>
       </td>
        <td width="294" valign="middle"> 
          <table width="250" border="1" bordercolor="#000000" height="357" align="center">
            <tr> 
              
            <td height="328"> 
        <?php
		echo "<br />";?>
		      <p align="center"><font color="#000000">
                <?php echo "Ligue r&eacute;gionale";?>
                <?php echo "<br />".$nomLigue;?>
                </font></p>
              <p align="center"><font color="#000000"><strong> <font size="6"> 
                <?php echo $sigle; ?>
                </font></strong></font> </p>
         <p align="center"><strong><font size="6"> 
         <?php 
		  $logo = substr ($equipe, -5);
		 {print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
		 ?>
                  </font></strong></p>
                <p align="center"><strong> <font size="6"> </font></strong></p>
              </td>
            </tr>
          </table>
          <div align="center"></div>
          <div align="center"></div>
        </td>
      </tr>
      <tr> 
        <td width="289"> 
          <div align="center"></div>
        </td>
        <td width="294" valign="middle"> 
          <div align="center"></div>
        </td>
      </tr>
      <tr> 
        <td width="289"> 
          <div align="center"></div>
        </td>
        <td width="294" valign="middle"> 
          <div align="center"></div>
        </td>
      </tr>
      <tr> 
        <td colspan="2"> 
          <div align="center"> 
            <table width="520" border="2" bordercolor="#000000" cellspacing="1" align="center">
              <tr> 
                <td bgcolor="#CCCCCC" align="left" height="35"> 
                  <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5">Calendrier 
                    <?php echo $saison-1; ?>
                    - 
                    <?php echo $saison; ?>
                    </font></b></font></div>
                </td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
      <tr> 
        <td colspan="2"> 
          <div >
          </div>
        </td>
      </tr>
      <tr> 
        
      <td colspan="2" height="48"> 
        <div align="center"> 
            <table width="520" border="1" align="center" cellspacing="0" bordercolor="#000000" cellpadding="0">
              <tr valign="top" bordercolor="#000000"> 
                <td height="20" width="70" bgcolor="#FFFFFF"> 
                  <div align="center">Aller</div>
                </td>
                <td height="20" colspan="3" bgcolor="#FFFFFF"> 
                  
                <div align="center"><b><font face="Arial, Helvetica, sans-serif"> 
                  <?php	echo $divisionNom;?>
                  </font></b></div>
                </td>
                <td height="20" width="70" bgcolor="#FFFFFF"> 
                  <div align="center">Retour</div>
                </td>
              </tr>
              <tr valign="top" bordercolor="#000000"> 
                
              <td width="70" height="21"> 
                <p align="center"> <font face="Arial, Helvetica, sans-serif"> 
<?php						
//******** Affichage des Dates aller  ***********
calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd); 
  
  
 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
 	{
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	
	echo $dateA = $jour.'/'.$mois."<br />";
 	} 
 ?>
                  </font> 
              </td>
                
              <td width="190" height="21"> 
  <div align="center"><font face="Arial, Helvetica, sans-serif"> 
<?php
// **********Affichage Equipe Aller ****************				
 calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd); 

 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
		{
		echo ${"nomEquipe".$i}."<br />";
		} 

 ?>
                  </font></div>
                </td>
                
              <td width="30" valign="middle" height="21"> 
                <div align="center"></div>
                </td>
                
              <td width="190" height="21"> 
                <div align="center"><font face="Arial, Helvetica, sans-serif"> 
<?php				
  //******** Affichage Equipes Retour  ***********

 for ($i= ($nbreJourneeMax/2)+1; $i<= $nbreJourneeMax; $i++)
 	{
//	echo ${"numEquipe".$i}."<br />";
	echo ${"nomEquipe".$i}."<br />";
 	} 
	 ?>
                  </font> </div>
                </td>
                
              <td width="70" height="21"> 
                <div align="center"><font face="Arial, Helvetica, sans-serif"> 
<?php				
// ******* Affichege Dates Retour ***************

 for ($i = ($nbreJourneeMax/2)+1; $i<= $nbreJourneeMax; $i++)
 {
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	echo $dateA = $jour.'/'.$mois."<br />";
 } 
 ?>
                  </font></div>
                </td>
              </tr>
            </table>
          
        </div>
        </td>
      </tr>
      <tr> 
        <td colspan="2"> 
          <div align="center"></div>
        </td>
      </tr>
      <tr> 
        <td colspan="2"> 
          <div align="center"><a href="impressionCalendrier2verso.php?equipe=<?php echo $equipe; ?>&sigle=<?php echo $sigle; ?>&connect=<?php echo $connect; ?>&nomLigue=<?php echo $nomLigue; ?>&division=<?php echo $division; ?>&divisionNom=<?php echo $divisionNom; ?>&comite=<?php echo $comite; ?>&divisionChiffre=<?php echo $divisionChiffre; ?>">impression 
            verso</a></div>
        </td>
      </tr>
      <tr> 
        <td colspan="2"> 
          <div align="center"><a href="impressionCalendrier2recto.php?equipe=<?php echo $equipe; ?>&sigle=<?php echo $sigle; ?>&connect=<?php echo $connect; ?>&nomLigue=<?php echo $nomLigue; ?>&division=<?php echo $division; ?>&comite=<?php echo $comite; ?>">impression 
            recto</a></div>
        </td>
      </tr>
    </table>
  
</td>
<p align="center"><br>
  <br>
<p align="center">&nbsp;
<p align="center">&nbsp;
<p align="center">&nbsp;
<p align="center">&nbsp;
<p align="center">&nbsp;
<p align="center">&nbsp;
<p align="center">&nbsp;
<p align="center">&nbsp;
<p align="center">&nbsp;
<p align="center">&nbsp; 
<div align="center"> 
  <p>&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"> <a href="impressionCalendrier2verso.php?equipe=<?php echo $equipe; ?>&sigle=<?php echo $sigle; ?>&connect=<?php echo $connect; ?>&nomLigue=<?php echo $nomLigue; ?>&division=<?php echo $division; ?>&divisionNom=<?php echo $divisionNom; ?>&comite=<?php echo $comite; ?>&divisionChiffre=<?php echo $divisionChiffre; ?>"> 
  </a></p>
<p align="center">&nbsp;</p>
