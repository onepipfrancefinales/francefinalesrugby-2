<!DOCTYPE html>
<head>
	<meta name="description"
	content="Tout sur le comit� territorial <?php echo $titre;?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
	<meta name="keywords"
	content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="Equipe Onepip">
	<meta name="robots" content="All">
	<link type="text/css" rel="stylesheet" href="../ligne1.css"/>
	<link type="text/css" rel="stylesheet" href="../lienNoir.css"/>
	
	<title>Comité <?php echo $titre;?>   </title>
</head>

	<?php $sigle = $_GET['annee'];?>
	<?php require ("connection.php") ; ?>
	<?php require ("saison.php") ; ?>  
<?php
$reponse = mysql_query("SELECT nom FROM bdcomite WHERE sigle='$sigle' "); 
	while ($donnees = mysql_fetch_array($reponse) )
		{ 
		$titre = $donnees['nom'];
		}
mysql_close();
?>
      


<body >
<div align="center">
  <table width="1250" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
    
	
	  <td colspan="3" height="74">
        <?php    include("page_image_al.php");  ?>
        </td>
    </tr>
    <tr   > 
      <td  colspan="3"> 
        <?php    include("01ligne.php");  ?>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
       
        <div align="center"> 
          <p align="center"> 
            <?php    include("01gauche.php");  ?>
            <b><font size="5" color="#000000"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#ffffff" text="#000000" link="#000000" vlink="#000000" alink="#000000" height="505" valign="top" width="550"> 
        <div align="center"> 
          <p><font color="#000000">
            <?php  include("ligue.php");    ?>
            </font> </p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php   include("00droite.php");  ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="78"> 
        <table width="100%" border="1" bordercolor="#006699">
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php    include("comitebas.php");  ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000">
                  <?php    include("pub1.php");   ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php    include("bas.php");  ?>
                  </font></div>
              </td>
            </tr>
          </table>
    </tr>
  </table>
</div>




	</body>
</html>
