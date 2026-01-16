<?php 
require ("../saison.php");
require '../fichierConfig.php';
require ("../fonctions.php");
$chaine = $_GET['champion']; 
 
if (is_numeric($chaine))
 {
	//echo "numerique";
	if(strlen($chaine)==5)
 	 $equipe = $chaine;
	else 
 	 $equipe = substr($chaine,2,5);
 }
 else
 {
	//echo "lettres";
	require '../connect1/connection1.php';
	infosclub($chaine, $bdd);
	//echo $code;
	//echo $numLigue;
	$equipe = $numLigue.$code;
 } 


$smart = 0;


$id = substr($chaine,0,2);

require '../connect1/connection1.php';
echo "test";
nomComite (0, $id, $bdd);
infosclub($chaine, $bdd);
nomLigue ($numLigue, $bdd);
affichageSaisonEnCours($equipe, $bdd);
bdInfosClub($code, $bdd);
saisons($code,$annee, $bdd);
?>



<!DOCTYPE html PUBLIC >
<html lang="fr">

	<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/consultation/00pageclub00.php/" />
<meta charset="utf-8" />
<meta name="description"
content=" <?php echo $titre;?> : Pr�sentation du club (Bureau; Si�ge; Stade; Contacts); les grandes du dates du club; les palmar�s; les r�sultats du clubs au cours des derni�res saisons et un album photos d�di� au club..">
<meta name="keywords"
content="comité
 Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../ligne1.css"/>
<link type="text/css" rel="stylesheet" href="pgclub00.css"/>
<link type="text/css" rel="stylesheet" href="../formulaireDG.css">
<title> fiche club </title>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21215219-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	

	</head>

<body bgcolor="#000000" >

<div align="center">
  <table width="1100" >
    <tr > 
      <td colspan="3" >
        <?php   include("../images/page_image_al.php");    ?>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="24" colspan="3"> 
        <?php    include("../01ligne.php");    ?>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="505" bgcolor="#006699" align="center" valign="top" width="225"> 
            <?php    include("../01gauche.php");    ?>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="650">        
<?php 
 if ($code > 0 ) 
	{
 	include("00clubs.php");
	}
else
	{
	include("02clubs.php");
	}
 ?>		 
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
          <?php    include("../00droite.php");  ?> 
      </td>
    </tr>
  </table>
  <table width="1100" bordercolor="#FFFFFF" align="center">
    <tr valign="top" align="center"> 
      <td bgcolor="#006699" bordercolor="#006699" valign="middle" align="center" height="15"> 
        <b><font color="#FFFFFF" size="+2"> 
 
	   <?php //echo $comite; ?>
 
      
        </font></b></td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF"> 
        <p align="center">
          <?php echo $id; echo $sigleComite; ?>
        </p>
        <p align="center"><font color="#FF0000">____________________________________________________</font></p>
        <div align="center"> 
          <p><font color="#FF0000"><b><font size="+2">Photos du club</font></b></font></p>
          <br>
		  <?php //$sigleComite ="(MPY)";//$id =29076;?>
         
      </td>
    </tr>
    <tr bordercolor="#000000" bgcolor="#FFFFFF"> 
      <td> 
        <div align="center"><font color="#000000"><b> 
          <?php include("../bas2.php");   ?>
          </b></font></div>
      </td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>
	</body>
</html>