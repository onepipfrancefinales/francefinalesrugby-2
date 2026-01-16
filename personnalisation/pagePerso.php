<?php
session_start ();
include("../resultats/fonctions.php");
?>


<!DOCTYPE html>  
<head>
<meta name="description"
content="">
<meta name="keywords"
content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Mes championnats</title>
<link type="text/css" rel="stylesheet" href="adminUser.css"/> 
<link type="text/css" rel="stylesheet" href="../perso.css"/>
<link type="text/css" rel="stylesheet" href="../resultats/resultat.css"> 
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
</head>
<body bgcolor="#000000">
<div align="center">
  <table width="1100" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="120"> 
        <table width="100%" border="2" bordercolor="#000000" height="100%">
          <tr> 
            <td> 
              <div align="center"><font color="#FFFFFF"> 
                <?php include("../images/page_image_al.php");   ?>
                </font></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000">
      <td height="24" colspan="3"><font color="#FFFFFF">
        <?php include("../01ligne.php");    ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#FFFFFF"> 
      <td height="24" colspan="3"></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> 
          <p align="center"> 
            <?php include("../01gauche.php");    ?>
            <b><font size="5" color="#FFFFFF"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="650"> 
        <div align="center"> 
          <p> 
          <p><b><font color="#FF0000" size="6">-- Mon espace perso --</font></b>
          <p><br>
          <br>
          <?php include("affichage.php");	?>
		  <p>&nbsp; 
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php include("../00droite.php");    ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <table width="100%" border="1" bordercolor="#006699">
            <tr>
              <td> 
                <?php include("../comitebas.php"); ?>
                </td>
            </tr>
            <tr> 
              <td>
                <?php include("../pub/pub1.php"); ?>
               </td>
            </tr>
            <tr> 
              <td> 
                  <?php   include("../bas.php"); ?>     
              </td>
            </tr>
        </table>
    </tr>
  </table>
</div>
   <footer>
      <div id="9129-5">
	    <script src="//ads.themoneytizer.com/s/gen.js?type=5">
	    </script>
	    <script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&formatId=5" >
        </script>
	  </div>
    </footer>
  </body>
</html>
