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
<?php require ("../../saison.php"); ?>
<?php $equipe = $_GET['equipe'];?>
<?php $code = $_GET['equipe'];?>
<?php $connect = $_GET['connect'];?>
<?php $nomLigue = $_GET['nomLigue'];?>
<?php $comite = $_GET['comite'];?>
<?php $sigle = $_GET['sigle'];?>
<?php $divisionNom = $_GET['divisionNom'];?>
<?php $divisionChiffre = $_GET['divisionChiffre'];?>

<?php
//echo $code;
//echo $equipe;
//echo $connect;
//echo $nomLigue;
//echo $comite;
//echo $divisionNom;
//echo $divisionChiffre;
?>

<?php //echo $equipe;?>

  
<table width="575" border="0" align="left">
  <tr> 
      
    <td height="368" width="584"> 
      <div align="left"> 
        <table width="565" border="0" align="left" height="393">
          <tr> 
            <td height="370" width="272" valign="top"> 
              <p><b><font size="5"> 
                <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
                <?php
$reponse = mysql_query("SELECT sigle,comite, code, nom_1, nom_2, nom_3, nom_4 
						FROM bdclubs 
						WHERE id='$equipe'");  
						While ($donnees = mysql_fetch_array($reponse) )
					{ 
						?>
                <strong> <font size="6"> 
                <?php $nom1= $donnees['nom_1'];?>
                <?php $nom2= $donnees['nom_2'];?>
                <?php $nom3= $donnees['nom_3'];?>
                <?php $nom4= $donnees['nom_4'];?>
                <?php
 }

mysql_close(); // Déconnexion de MySQL
?>
                </font></strong></font></b>
              <div id="image">
<table width="250" border="1" bordercolor="#000000" cellspacing="1">
                  <tr> 
                    <td bgcolor="#CCCCCC"> 
                      <div align="center"><b><font size="5">Saisons pr&eacute;c&eacute;dentes</font></b></div>
                    </td>
                  </tr>
                </table>
                
                  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>
                  <br>
                  2018<br>
                  2017<br>
                  2016<br>
                  2015 <br>
                  <br>
                <table width="250" border="1" bordercolor="#000000" cellspacing="1">
                  <tr> 
                    <td bgcolor="#CCCCCC"> 
                      <div align="center"><b><font size="5">Palmar&egrave;s <font size="3">(Extrait)</font></font></b></div>
                    </td>
                  </tr>
                </table>
                <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
                  Fanion</font></b><br>
                  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>
                  <?php
$reponse = mysql_query("SELECT saison, titre, championnat, division 
						FROM bdequipe1 
						WHERE entente='$nom1' or entente='$nom2' or entente='$nom3' or entente='$nom4' 
						ORDER BY saison 
						DESC LIMIT 0,5 "); 
							While ($donnees = mysql_fetch_array($reponse) )
								{ 
										$saison=$donnees['saison'];
										$titre=$donnees['titre'];
										$championnat=$donnees['championnat'];
										$division=$donnees['division'];
										
										 echo ($saison.' '.$titre.' '.$championnat);?>
                  <?php echo $division ;?>
                  <?php		
								}		
			
			?>
                <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
                  II</font></b><br>
                  <?php
$reponse = mysql_query("SELECT saison, titre, championnat, division 
						FROM bdequipe2 
						WHERE entente='$nom1' or entente='$nom2' or entente='$nom3' or entente='$nom4'
						ORDER BY  saison 
						DESC  "); 
While ($donnees = mysql_fetch_array($reponse) )
	{ 
            $saison=$donnees['saison'];
            $titre=$donnees['titre'];
            $championnat=$donnees['championnat'];
            $division=$donnees['division'];
            
			 echo ($saison.' '.$titre.' '.$championnat.' '.$division) ;?>
                  <?php		
	}		
			
			?>
                  <br>
                  <br>
                </p>
              </div>
            </td>
            <td height="370" width="290" valign="middle"> 
              <div align="center"> 
                <table width="234" border="1" bordercolor="#000000" height="357">
                  <tr> 
                    <td height="328"> 
                      <div id="image"> 
                        <p align="center"><strong> 
                          <?php echo "Ligue r&eacute;gionale";?>
                          <?php echo "<br />";?>
                          <?php echo $nomLigue;?>
                          </strong> 
                        <p align="center"><strong> <font size="6"> 
                          <?php echo $sigle;?>
                          </font></strong> </p>
                        <p align="center"><strong><font size="6"> 
                          <?php 
					  $logo = substr ($equipe, -5);
{print("<img src=\"http://francefinalesrugby.franceserv.com/images/blasons200_200/$logo.gif\" >");}
?>
                          </font></strong></p>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
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
  
<p>&nbsp;</p>
<p>&nbsp; </p>
  
<table width="551" border="0" height="191" align="left">
  <tr> 
    <td height="210"> 
      <table width="520" border="0" align="center">
        <tr> 
          <td> 
            <table width="520" border="2" bordercolor="#000000" cellspacing="1" align="left">
              <tr> 
                <td bgcolor="#CCCCCC" align="left"> 
                  <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5">Calendrier 
                    </font><font face="Arial, Helvetica, sans-serif"><b><font size="5"> 
                    <?php echo $annee-1; ?>
                    - 
                    <?php echo $annee; ?>
                    </font></b></font></b></font></div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td> 
            <div align="center"></div>
          </td>
        </tr>
        <tr> 
          <td> 
            <table width="520" border="1" align="left" cellspacing="0" bordercolor="#000000" cellpadding="0">
              <tr valign="top" bordercolor="#000000"> 
                <td height="20" width="70" bgcolor="#FFFFFF"> 
                  <div align="center">Aller</div>
                </td>
                <td height="20" colspan="3" bgcolor="#FFFFFF"> 
                  <div align="center"><b><font size="4" face="Arial, Helvetica, sans-serif"> 
                    <?php
		echo $divisionNom;					
	//echo $divisionChiffre;echo "<br / >";
	
	if ($divisionChiffre>0)
	$connect="connexion6.php";
	else
	$connect="connexion6.php";
	
 
?>
                    </font></b></div>
                </td>
                <td height="20" width="70" bgcolor="#FFFFFF"> 
                  <div align="center">Retour</div>
                </td>
              </tr>
              <tr valign="top" bordercolor="#000000"> 
                <td width="70" height="55"> 
                  <p align="center"><font face="Arial, Helvetica, sans-serif"> 
                    <?php
  // Dates aller
  
  require ("../../$connect");
  	$bdcomite_matchs="php".''.$comite.''."_matchs";
  	$reponse =mysql_query("	SELECT id_equipe_dom, id_equipe_ext, date_reelle
							FROM $bdcomite_matchs
							WHERE id_equipe_dom=$equipe OR id_equipe_ext=$equipe 
							ORDER BY id_journee
							LIMIT 0,9	");
									While ($donnees = mysql_fetch_array($reponse) )
										{ 
										echo "<br / >";
										$dateBrute= $donnees['date_reelle'];
										$moisJour = substr($dateBrute,5,-8);
										$mois = substr($moisJour,0,2);
										$jour = substr($moisJour,3,2);
										$dateA = $jour.'/'.$mois;
										echo $dateA;
										
										
										}

 
 ?>
                    </font> <font face="Arial, Helvetica, sans-serif"> </font> 
                </td>
                <td width="190" height="55"> 
                  <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                    <?php
// Oppositions domiciles
 
 
 	
	$bdcomite_clubs="php".''.$comite.''."_clubs";
	
  	$query ="	SELECT c.nom, c.nom
				FROM $bdcomite_matchs m
				INNER JOIN $bdcomite_clubs c ON c.id=m.id_equipe_dom 
				WHERE m.id_equipe_dom=$equipe OR m.id_equipe_ext=$equipe
				ORDER BY m.id_journee
				LIMIT 0,9	";
						$reponse=mysql_query($query);
						While ($row = mysql_fetch_array($reponse) )
										{ 
										echo "<br />";
										$equipeA= $row[0];							
										echo $equipeA;
										}
										
 ?>
                    </font></div>
                </td>
                <td width="30" valign="middle" height="55"> 
                  <div align="center"></div>
                </td>
                <td width="190" height="55"> 
                  <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                    <?php
// Oppositions exterieures										
	$query ="	SELECT c.nom, c.nom
				FROM $bdcomite_matchs m
				INNER JOIN $bdcomite_clubs c ON c.id=m.id_equipe_ext
				WHERE m.id_equipe_dom=$equipe OR m.id_equipe_ext=$equipe
				ORDER BY m.id_journee
				LIMIT 0,9	";
						$reponse=mysql_query($query);
						While ($row = mysql_fetch_array($reponse) )
										{ 
										echo "<br / >";
										$equipeR = $row[0];			
										echo $equipeR;
										}
								

  ?>
                    </font></div>
                </td>
                <td width="70" height="55"> 
                  <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                    <?php
// dates retour
 
 $bdcomite_matchs="php".''.$comite.''."_matchs";
  	$reponse =mysql_query("	SELECT id_equipe_dom, id_equipe_ext, date_reelle
							FROM $bdcomite_matchs
							WHERE id_equipe_dom=$equipe OR id_equipe_ext=$equipe 
							ORDER BY id_journee
							LIMIT 9,18	");
									While ($donnees = mysql_fetch_array($reponse) )
										{ 
										echo "<br / >";
										$dateBrute= $donnees['date_reelle'];
										$moisJour = substr($dateBrute,5,-8);
										$mois = substr($moisJour,0,2);
										$jour = substr($moisJour,3,2);
										$dateR = $jour.'/'.$mois;
										echo $dateR;
										
										}

?>
                    </font></div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
</table>
<br>
</html>