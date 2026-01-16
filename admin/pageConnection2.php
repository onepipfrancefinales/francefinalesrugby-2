<?php $creationMdp =  $_POST['creationMdp']; ?>
<?php $creationMdp2 = $_POST['creationMdp2'];?>
<?php $creationNom =  $_POST['creationNom'];?>
<!DOCTYPE html><head>
<meta name="description"
content="">
<meta name="keywords"
content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Champions de FRANCE </title>

<link type="text/css" rel="stylesheet" href="../perso.css"/> 
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
</head>



  
<body  bgcolor="#000000">


<?php
include ("../../connection5.php");
$requete = "	SELECT nom, id	
				FROM personnel
				WHERE nom='$creationNom' ";
 					$result = mysql_query($requete) ;
						while ($row = mysql_fetch_array($result) )
								{ 
								$nom = $row[0];
								$verifId = $row[1];
								}
								?>

<?php
//vérification de la validité du pseudo
if ( $verifId == "")
		{
		echo "pseudo valide";
		}
	else
		{
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
						echo '<body onLoad="alert(\'Pseudo invalide\')">';
						// puis on le redirige vers la page d'accueil
						echo '<meta http-equiv="refresh" content="0;URL=pageConnection.php">';
		}
	
	
	
// Vérification de la validité du mot de passe
			if ($creationMdp == $creationMdp2)
					{
					$sql = "INSERT INTO personnel(id,nom,mdp,prenom,comite1, division1,type1,taille1,
																	comite2, division2,type2,taille2,
																	comite3, division3,type3,taille3,
																	comite4, division4,type4,taille4	)
							VALUES ('','$creationNom','$creationMdp','$creationMdp2',	'NULL','NULL','NULL','NULL',
																						'NULL','NULL','NULL','NULL',
																						'NULL','NULL','NULL','NULL',
																						'NULL','NULL','NULL','NULL')";
						$requete = mysql_query( $sql )   ;
								//	header ('location: pageConnection2.php');
					}
			else 	
					{
					// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
					echo '<body onLoad="alert(\'Les mots de passe ne sont pas identiques, r&eacute;-essayez\')">';
					// puis on le redirige vers la page d'accueil
					echo '<meta http-equiv="refresh" content="0;URL=pageConnection.php">';
					}


mysql_close(); 
?>


<div align="center">
  <table width="1100" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="120"> 
        <table width="100%" border="2" bordercolor="#000000" height="100%">
          <tr> 
            <td> 
              <div align="center"><font color="#FFFFFF"> 
                <?php    include("../../page_image_al.php");   ?>
                </font></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000">
      	<td height="24" colspan="3">
			<font color="#FFFFFF">
				<?php    include("../../01ligne.php"); ?>
			</font>
		</td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#FFFFFF"> 
      <td height="24" colspan="3"></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
            <?php include("01gauche.php"); ?>
            <b><font size="5" color="#FFFFFF"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="650"> 
        <div align="center"><br>
          <br>
          <font face="Arial, Helvetica, sans-serif" size="4"><b>Connectez vous 
          et faites votre s&eacute;lection</b></font><br>
          <p><br>
            <br>
            <?php include("saisieIdentifiantDroite.php"); ?>
          </p>
          <p>&nbsp; </p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> <br>
          <?php include("../../00droite.php"); ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="100%" border="1" bordercolor="#006699">
            <tr> 
              <td> 
                <div> 
                  <?php include("../../bas.php"); ?>
                 </div>
              </td>
            </tr>
          </table>
        </div>
      </th>
    </tr>
  </table>
</div>
<footer>
<div id="9129-5"><script src="//ads.themoneytizer.com/s/gen.js?type=5">
</script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&formatId=5" >
</script></div>
</footer>
</body>
</html>
