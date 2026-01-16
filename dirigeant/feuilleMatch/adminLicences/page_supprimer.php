<html>
<head>
<title>Suppression d'une licence</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilleMatch.css"/>
</head>

<?php 


if (isset ($_GET['code_div'])) $code_div = $_GET['code_div'];			else $code_div= "Variable code_div non d&eacute;clar&eacute;e";
if (isset ($_GET['code_match'])) $code_match = $_GET['code_match'];		else $code_match = "Variable code_match non d&eacute;clar&eacute;e";
if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
			
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect= "Variable connect non d&eacute;clar&eacute;e";
if (isset ($_GET['type']))  $type = $_GET['type'];						else $type= "Variable type non d&eacute;clar&eacute;e";
?>



<table width="100%" border="0">
  <tr> 
    <td rowspan="2" width="200" valign="top"> 
      <?php include "sommaire.php"; ?>
    </td>
    <td width="82%" bgcolor="#CCCCCC"> 
     <p align="left"><b><font size="5" face="Arial, Helvetica, sans-serif">Suppression 
  d'un licenci&eacute;</font></b></p>
<p align="left"><font face="Arial, Helvetica, sans-serif" size="4">Saisir l'identifiant 
  figurant devant le licenci&eacute; &agrave; supprimer et valider</font></p>
<form action="../adminLicences/page_supprimer2.php?equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ; ?>" method="POST">
  <p>
    <input type="text" name="id" maxlength="4" />
    <br>
    <br>
  </p>
        
  <p> 
    <input type="submit" value="Valider" name="submit322" />
        </p>
		</form>
    </td>
  </tr>
  <tr> 
    <td width="82%"> 
      <?php include "consult_id.php"; ?>
    </td>
  </tr>
</table>
</body>
</html>
