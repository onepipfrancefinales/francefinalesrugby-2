<html>
<head>
<meta name="description"
content="Le site non officiel du Comité Midi Pyrénées de rugby : Histoire, clubs, calendrier des matches, compétitions, résultats, la Coupe du Monde à Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
<meta name="keywords"
content="Comite Midi Pyrenees de Rugby, Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,Equipe,France,Chelem,V,Nations,Webb Ellis, Brennus,Passe,Rives,Blanco,Sella,Ibanez,Transformation,Essai,Mêlée,Touche,Pénalité,En-Avant,Terrain,Mi-temps,Stade,Maillot,XV,Quinze,Jeu,Buteur,Pilier,Talonneur,Calendrier,Match,Elite,Professionnel,Poule,Saison,Championnat,Tournoi,Coupe du Monde,Tri-Series,Arbitre,Compétition,Tri-Nations,Comités,Spanghero,Federation,Union,French,Rugby player,players,Sport,Ball,Oval,Team,Slam,Pass,Conversion,Try,Scrum,Touch,Penalty,Knock-on,Pitch,Half-time,Stadium,Jersey,XV,Fifteen,Game,Goal,kicker,Prop,forward,Hooker,Calendar,Professional,PoolSeason,Championship,Tournament,World Cup,Tri-Series,Referee,Competition,Committees,Matches">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Onepip.free.fr</title>
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
<?php $annee=$_GET['variable_1'];?>
   
</head>
<body link="#FFFFFF" text="#FFFFFF" VLINK="#FFFFFF" ALINK="#FFFFFF">
<table width="100%" border="0" height="30">
  <tr valign="top" align="center"> 
    <td colspan="12" bgcolor="006699" height="28"><font size="5"><b><font color="#FFCC00"> 
      <?php echo "Championnat de France";?>
      <?php echo $annee;?>
      : 
      <?php echo "- de 21 ans Belascain";
		?>
      </font></b></font></td>
  </tr>
  <tr valign="top" align="center"> 
    <td colspan="10" bgcolor="#EAECEB" height="28"> 
      <p align="left"><font size="5"><b><font color="#FFCC00"> </font><font size="5"><b><font color="#FFCC00"> 
        </font></b></font></b></font><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font size="2" color="#FF0000"> 
        <?php
    // On inclut le habt de la page
    
	include("../pub1.php"); ?>
        </font></b></font></b></font></b></font></b></font></p>
    </td>
    <td width="80%" bgcolor="#EAECEB" height="28" valign="middle"><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
      <?php $anneemoins = $annee-1;?>
      <?php $anneeplus = $annee+1;?>
      </font></b></font><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phases_finales/belascain/pagebelascain.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="5" color="#000000">&lt;&lt;</font></a></font><font color="#000000" size="2"><font size="5" color="#EAECEB">znnnnne</font><font size="5"> 
      </font></font></b><a href="http://francefinalesrugby.franceserv.com/phases_finales/belascain/pagebelascain.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#000000">&gt;&gt;</font></a> 
      </font></b></font></td>
    <td width="11%" bgcolor="#EAECEB" height="28"> 
      <div align="right"><font size="5"><b> 
        <?php
    // On inclut le habt de la page
    
	include("../pub2.php"); ?>
        </b></font></div>
    </td>
  </tr>
</table>
<p>&nbsp;</p>

 
</body>
</html>
