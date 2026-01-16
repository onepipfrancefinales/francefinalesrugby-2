<?php $sigle = $_GET['variable_1'];?>
  <?php
require ("connection.php") ;
 ?>

<?php

$reponse = mysql_query("SELECT * FROM bdcomite WHERE sigle='$sigle' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
 
 <?php $titre = $donnees['nom'];?> 
<?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
      
<html>
<head>
<meta name="description"
content="Tout sur le comité territorial <?php echo $titre;?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comité); les effectifs; les palmarès nationaux; les palmarés territoriaux et l'ensemble des clubs composant le comité avec un lien pour accéder aux différents clubs.">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Comité <?php echo $titre;?>   </title>
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

<body text="#000000" link="#000000" alink="#000000" vlink="#000000" bgcolor="#000000">
<div align="center">
<table width="1000" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
    
	
	  <td colspan="3" height="74"> 
	 <?php $sigle = $_GET['variable_1'];?>
	  <?php 

{
print("<img src=\"http://francefinalesrugby.franceserv.com/images/banniere_haut/$sigle.jpg\" border=\"0\" target=_top>");
}

?> </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"> 
        <?php
    // On inclut le haut de la page
    include("ligne_fem.php");
    ?>
      
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#996699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
            <?php
    // On inclut le haut de la page
    include("01gauche_fem.php");
    ?>
            <b><font size="5" color="#000000"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#ffffff" text="#000000" link="#000000" vlink="#000000" alink="#000000" height="505" valign="top" width="550"> 
        <div align="center"> 
          <p><font color="#000000"> 
            <?php
    // On inclut le haut de la page
    include("comite.php");
    ?>
            </font> </p>
        </div>
      </td>
      <td height="505" bgcolor="#996699" width="225" valign="top"> 
        <p> 
          <?php
    // On inclut le haut de la page
    include("00droite_fem.php");
    ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="900" border="1" bordercolor="#006699">
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("comitebas_fem.php");
    ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center">&nbsp; 
                  <script type="text/javascript"><!--
google_ad_client = "pub-9177538664500260";
/* 728x90, date de création 19/05/10 */
google_ad_slot = "7132874515";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
                  <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
                </div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("../bas.php");
    ?>
                  </font></div>
              </td>
            </tr>
          </table>
          <font color="#000000"> </font></div>
      </th>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>

</body>

</html>
