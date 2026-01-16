<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="test.css"/>
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head>
<?php require ("../../saison.php");
 $equipe = $_GET['equipe'];
 $code = $_GET['equipe'];
 $nomLigue = $_GET['nomLigue'];
 $bddComite = $_GET['comite'];
 $sigle = $_GET['sigle'];
 $divisionNom = $_GET['divisionNom'];
 $divisionChiffre = $_GET['divisionChiffre'];

require '../../connect/connexion1.php';
require ("../../saison.php"); 
require '../../fonctions.php';
require 'fonctionsDonnees.php';

//require '../../connect/connexion1.php';
//infosclub($idFfr, $bdd);

require '../../connect/connexion6.php';
recherchePresenceEquipe ($equipe, $bdd);
divisionEtPoule($divisionChiffre, $bddComite, $equipe, $bdd);
NbreDeJournee ($bddComite, $equipe, $divisionChiffre, $bdd);
calendrier ($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd);				


?>
<table width="593" border="0" align="left" height="398">
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
        <table width="520" border="2"  cellspacing="1" align="center">
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
      <div > </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="48"> 
      <div align="center"> 
        <table width="520" border="1" align="center" cellspacing="0" cellpadding="0">
          <tr valign="top" > 
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
calendrier ($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd);

 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
		{
		echo substr(${"nomEquipe".$i},0,20)."<br />";
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

 for ($i= round(($nbreJourneeMax/2)+1); $i<= $nbreJourneeMax; $i++)
 	{
//	echo ${"numEquipe".$i}."<br />";
	echo substr(${"nomEquipe".$i},0,20)."<br />";
 	} 
	 ?>
                </font> </div>
            </td>
            <td width="70" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
// ******* Affichege Dates Retour ***************

 for ($i = round(($nbreJourneeMax/2)+1); $i<= $nbreJourneeMax; $i++)
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
</table>
<table width="593" border="0" align="left" height="398">
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
      <div > </div>
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
calendrier ($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd); 
  
  
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
calendrier ($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd);

 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
		{
		echo substr(${"nomEquipe".$i},0,20)."<br />";
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

 for ($i= round(($nbreJourneeMax/2)+1); $i<= $nbreJourneeMax; $i++)
 	{
//	echo ${"numEquipe".$i}."<br />";
	echo substr(${"nomEquipe".$i},0,20)."<br />";
 	} 
	 ?>
                </font> </div>
            </td>
            <td width="70" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
// ******* Affichege Dates Retour ***************

 for ($i = round(($nbreJourneeMax/2)+1); $i<= $nbreJourneeMax; $i++)
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
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="593" border="0" align="left" height="398">
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
      <div > </div>
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
calendrier ($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd);
  
  
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
calendrier ($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd); 

 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
		{
		echo substr(${"nomEquipe".$i},0,20)."<br />";
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

 for ($i= round(($nbreJourneeMax/2)+1); $i<= $nbreJourneeMax; $i++)
 	{
//	echo ${"numEquipe".$i}."<br />";
	echo substr(${"nomEquipe".$i},0,20)."<br />";
 	} 
	 ?>
                </font> </div>
            </td>
            <td width="70" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
// ******* Affichege Dates Retour ***************

 for ($i = round(($nbreJourneeMax/2)+1); $i<= $nbreJourneeMax; $i++)
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
</table>
<table width="593" border="0" align="left" height="398">
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
      <div > </div>
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
calendrier ($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd); 
  
  
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
calendrier ($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd);

 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
		{
		echo substr(${"nomEquipe".$i},0,20)."<br />";
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

 for ($i= round(($nbreJourneeMax/2)+1); $i<= $nbreJourneeMax; $i++)
 	{
//	echo ${"numEquipe".$i}."<br />";
	echo substr(${"nomEquipe".$i},0,20)."<br />";
 	} 
	 ?>
                </font> </div>
            </td>
            <td width="70" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
// ******* Affichege Dates Retour ***************

 for ($i = round(($nbreJourneeMax/2)+1); $i<= $nbreJourneeMax; $i++)
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
</table>
<p>&nbsp; </p>
</html>