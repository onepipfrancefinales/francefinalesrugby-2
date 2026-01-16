<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
<?php 
$equipe = $_GET['equipe'];
if (isset($_GET['idFfr'])) $idFfr = $_GET['idFfr']; else $idFfr = 0; 
$nomLigue = $_GET['nomLigue'];
$comite = $_GET['comite'];
 $nom1 = $_GET['sigle'];
 $sigle = $_GET['sigle'];

require 'fonctionsDonnees.php';
?>
<table width="1065" border="0">
  <tr>
    <td height="368" width="534"> 
      <table width="520" border="0" align="left" height="393">
        <tr> 
          <td height="360" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1"  cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"><div align="center"><b><font size="5">Saisons pr&eacute;c&eacute;dentes</font></b></div></td>
                </tr>
              </table>
              <p><b><font size="5"> <strong> <font size="6"> </font></strong></font></b></p>
              <br>
              <table width="250" border="1"  cellspacing="1">
                <tr>
                  <td bgcolor="#CCCCCC"><div align="center"><b><font size="5">Palmar&egrave;s</font></b></div></td>
                </tr>
              </table>
                <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000000">Equipe 
                  Fanion</font></b><br>
                  <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                  <font color="#000000"> 
                  <?php
			//*******  Affichage palmares Equipe Une ********
		require '../../connect/connexion1.php';
		//infosclub($idFfr, $bdd);
		palmaresEquipes ($idFfr, "bdequipe1", $bdd);
		
		if  ($nbreTitre > 5)
		$nbreTitreAffiches = 6;
		else 
		$nbreTitreAffiches = $nbreTitre;
				
				for ($i=0; $i<	$nbreTitreAffiches; $i++)
					{
					echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
         		  	}				
			
			?>
                  </font></font></font></p>
                <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000000">Equipe 
                  II</font></b><br>
				  <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                  <font color="#000000"> 
                  <?php
				  
			//*******  palmares Equipe II ********
			
		palmaresEquipes ($idFfr, "bdequipe2", $bdd);
		if  ($nbreTitre > 5)
		$nbreTitreAffiches = 6;
		else 
		$nbreTitreAffiches = $nbreTitre;


			for ($i=0; $i<	$nbreTitreAffiches; $i++)
					{
					echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
            		  	}
		
			?>
			</font></font></font></p>
              
            </div>
          </td>
          <td height="360" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1"  height="357">
                <tr> 
                  <td height="328"> 
                    <p align="center"><strong> 
                      <?php echo "Ligue r&eacute;gionale"."<br />".$nomLigue;?>
                      </strong>
                    <p align="center"><strong> <font size="6"> 
                      <?php echo $sigle;?>
                      </font></strong> </p>
                    <p align="center"><strong><font size="6"> 
                      <?php 
					  $logo = substr ($equipe, -5);
{print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
?>
                      </font></strong></p>
                    </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
      </table>
    </td>
    <td height="368" width="634"> 
      <table width="520" border="0" align="left" height="393">
        <tr> 
          <td height="370" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1"  cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Saisons pr&eacute;c&eacute;dentes</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font size="5"><br>
                </font></b></p>
              <table width="250" border="1" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Palmar&egrave;s</font></b></div>
                  </td>
                </tr>
              </table>
               <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000000">Equipe 
                  Fanion</font></b><br>
                  <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                  <font color="#000000"> 
                  <?php
			//*******  Affichage palmares Equipe Une ********
		require '../../connect/connexion1.php';
		//infosclub($idFfr, $bdd);
		palmaresEquipes ($idFfr, "bdequipe1", $bdd);
		
		if  ($nbreTitre > 5)
		$nbreTitreAffiches = 6;
		else 
		$nbreTitreAffiches = $nbreTitre;
				
				for ($i=0; $i<	$nbreTitreAffiches; $i++)
					{
					echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
         		  	}				
			
			?>
                  </font></font></font></p>
                <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000000">Equipe 
                  II</font></b><br>
				  <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                  <font color="#000000"> 
                  <?php
				  
			//*******  palmares Equipe II ********
			
		palmaresEquipes ($idFfr, "bdequipe2", $bdd);
		if  ($nbreTitre > 5)
		$nbreTitreAffiches = 6;
		else 
		$nbreTitreAffiches = $nbreTitre;


			for ($i=0; $i<	$nbreTitreAffiches; $i++)
					{
					echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
            		  	}
		
			?>
			</font></font></font></p>
              
            </div>
          </td>
          <td height="370" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1"  height="357">
                <tr> 
                  <td height="328"> 
                    <p align="center"><strong> 
                      <?php echo "Ligue r&eacute;gionale"."<br />".$nomLigue;?>
                      </strong>
                    <p align="center"><strong> <font size="6"> 
                      <?php echo $sigle;?>
                      </font></strong> </p>
                    <p align="center"><strong><font size="6"> 
                      <?php 
					  $logo = substr ($equipe, -5);
{print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
?>
                      </font></strong></p>
                    </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="534" height="370"> 
      <table width="520" border="0" align="left" height="393">
        <tr> 
          <td height="375" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Saisons pr&eacute;c&eacute;dentes</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font size="5"> </font><br>
                </b></p>
              <table width="250" border="1" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Palmar&egrave;s</font></b></div>
                  </td>
                </tr>
              </table>
              <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000000">Equipe 
                  Fanion</font></b><br>
                  <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                  <font color="#000000"> 
                  <?php
			//*******  Affichage palmares Equipe Une ********
		require '../../connect/connexion1.php';
		//infosclub($idFfr, $bdd);
		palmaresEquipes ($idFfr, "bdequipe1", $bdd);
		
		if  ($nbreTitre > 5)
		$nbreTitreAffiches = 6;
		else 
		$nbreTitreAffiches = $nbreTitre;
				
				for ($i=0; $i<	$nbreTitreAffiches; $i++)
					{
					echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
         		  	}				
			
			?>
                  </font></font></font></p>
                <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000000">Equipe 
                  II</font></b><br>
				  <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                  <font color="#000000"> 
                  <?php
				  
			//*******  palmares Equipe II ********
			
		palmaresEquipes ($idFfr, "bdequipe2", $bdd);
		if  ($nbreTitre > 5)
		$nbreTitreAffiches = 6;
		else 
		$nbreTitreAffiches = $nbreTitre;


			for ($i=0; $i<	$nbreTitreAffiches; $i++)
					{
					echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
            		  	}
		
			?>
			</font></font></font></p>
              
            </div>
          </td>
          <td height="375" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1"  height="357">
                <tr> 
                  <td height="328"> 
                    <p align="center"><strong> 
                      <?php echo "Ligue r&eacute;gionale"."<br />".$nomLigue;?>
                      </strong></p>
                    <p align="center"><strong> <font size="6"> 
                      <?php echo $sigle;?>
                      </font></strong> </p>
                    <p align="center"><strong><font size="6"> 
                      <?php 
					  $logo = substr ($equipe, -5);
					  {print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
					  ?>
                      </font></strong></p>
                    <p align="center"><strong> <font size="6"> 
                      
                      </font></strong></p>
                  </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
      </table>
      <font color="#FFFFFF">-----------------------------------------------------------------------------</font> </td>
    <td width="634" height="370"> 
      <table width="520" border="0" align="left" height="393">
        <tr> 
          <td height="388" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Saisons pr&eacute;c&eacute;dentes</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font size="5"> <br>
                </font></b></p>
    <table width="250" border="1" cellspacing="1">
        <tr> 
            <td bgcolor="#CCCCCC" align="center"><b><font size="5">Palmar&egrave;s</font></b></td>
		</tr>
    </table>
	 <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000000">Equipe 
                  Fanion</font></b><br>
                  <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                  <font color="#000000"> 
                  <?php
			//*******  Affichage palmares Equipe Une ********
		require '../../connect/connexion1.php';
		//infosclub($idFfr, $bdd);
		palmaresEquipes ($idFfr, "bdequipe1", $bdd);
		
		if  ($nbreTitre > 5)
		$nbreTitreAffiches = 6;
		else 
		$nbreTitreAffiches = $nbreTitre;
				
				for ($i=0; $i<	$nbreTitreAffiches; $i++)
					{
					echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
         		  	}				
			
			?>
                  </font></font></font></p>
                <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000000">Equipe 
                  II</font></b><br>
				  <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                  <font color="#000000"> 
                  <?php
				  
			//*******  palmares Equipe II ********
			
		palmaresEquipes ($idFfr, "bdequipe2", $bdd);
		if  ($nbreTitre > 5)
		$nbreTitreAffiches = 6;
		else 
		$nbreTitreAffiches = $nbreTitre;


			for ($i=0; $i<	$nbreTitreAffiches; $i++)
					{
					echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
            		  	}
		
			?>
			</font></font></font></p>
              
            </div>
          </td>
          <td height="388" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1"  height="357">
                <tr> 
                  <td height="328">
					<p align="center"><strong>
                      <?php echo "Ligue r&eacute;gionale"."<br />".$nomLigue;?>
                      </strong></p>
                    <p align="center"><strong> <font size="6"> 
                      <?php echo $sigle;?>
                      </font></strong> </p>
                    <p align="center"><strong><font size="6"> 
                      <?php 
					  $logo = substr ($equipe, -5);
					  {print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
					 ?>
                      </font></strong></p>
                    </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p><br>
  <br>
  <br>
</p>
</html>