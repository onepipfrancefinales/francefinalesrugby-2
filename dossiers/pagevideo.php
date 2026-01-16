<?php
//$annee = $_POST['saison'];
if (isset($_GET['choix'])) $choix = $_GET['choix'];
?>
<html>
<head>
<meta name="description"
content="Le site non officiel du Comit� Midi Pyr�n�es de rugby : Histoire, clubs, calendrier des matches, comp�titions, r�sultats, la Coupe du Monde � Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
<meta name="keywords"
content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">

<title>Tous les Champions de FRANCE <?php echo $annee; ?></title>
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


<body link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF" bgcolor="#000000" text="#FFFFFF">
<div align="center">
  <table width="1100" height="639" align="center">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="153"><font color="#FFFFFF">
        <?php
    
    include("../../images/page_image_al.php");
    ?>
        </font> </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"><font color="#FFFFFF"></font><font color="#FFFFFF"> 
        <?php
    // On inclut le haut de la page
    include("../../01ligne.php");
    ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
            <?php
    // On inclut le haut de la page
    include("../../01gauche.php");
    ?>
            <b><font size="5" color="#FFFFFF"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="550"> 
        <div align="center"> 
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font size="6">Quelques 
            vidéos<br>
            </font></b></font></p>
          <p><font face="Arial, Helvetica, sans-serif" size="3" color="#000000">Sélection 
            de quelques vidéos classées par thémes, et je 
            vous recommande tout particulièrement la série &quot;Quand 
            tu joues au rygby amateur&quot;<br>
            <br>
            </font></p>
          <p> 
            <?php require 'sommaire.php';?>
            <br>
            <br>
          <hr>
          <?php
		  if ($choix == "pla")
		  require 'plaquages.php';
		  elseif ($choix == "ess")
		  require 'essais.php';
		  elseif ($choix == "bag")
		  require 'bagarres.php';
		  elseif ($choix == "ins")
		  require 'insolites.php';
		  elseif ($choix == "cau")
		  require 'causeries.php';
		   elseif ($choix == "ama")
		  require 'rugbyAmateur.php';
		  ?>
          <p><font color="#000000" link="#000000"> </font></p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php
    // On inclut le haut de la page
    include("../../00droite.php");
    ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="100%" border="1" bordercolor="#006699">
            <tr> 
              <td>
                <?php include("../../comitebas.php"); ?>
              </td>
            </tr>
            <tr> 
              <td> 
                <?php include("../../pub/pub_displayHorizontal.php");?>
              </td>
            </tr>
            <tr>
              <td>
                <?php include("../../bas.php"); ?>
              </td>
            </tr>
          </table>
        </div>
      </th>
    </tr>
  </table>
</div>
