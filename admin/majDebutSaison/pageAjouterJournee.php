<script language="JavaScript">

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<html>
<head>
<title>MAJ journées</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<div align="center"></div>
<div align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font size="5">Mise a jour d'une journ&eacute;e<br>
  <br>
  <br>
  

  </font></b></font> 
  <?php
  if (isset ($_GET['bddComitePlusId'])) $bddComitePlusId = $_GET['bddComitePlusId']; else $bddComitePlusId = "aucune ligue s&eacute;lectionn&eacute;e";
echo "Bdd et Ligue choisies  : ".$bddComitePlusId;
?>
  <form name="form1" method="GET" action="pageAjouterJournee.php?comite=<?php echo $bddComitePlusId;?>">
  <p>&nbsp;</p>
    <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">S&eacute;lection 
      de ligue</font> </b></font> 
      <select name="bddComitePlusId"  size="1">
        <option selected>Ligue</option>
        <option value="phppr-99"><b>Nationale</b></option>
        <option value="phppr-99"><b>Fédérale 1</b></option>
        <option value="phppr-99"><b>Fédérale 2</b></option>
        <option value="phpfe-99"><b>Fédérale 3</b></option>
        <option value="phppr-99"><b>Compétitions féminines</b></option>
        <option value="phpau-10"><b>Auvergne Rhone Alpes</b></option>
        
		    <option value="phppl-11"><b>Bourgogne Franche Comté</b></option>
        <option value="phppl-12"><b>Bretagne</b></option>
        <option value="phppl-13"><b>Centre Val de Loire</b></option>
        <option value="phpid-15"><b>Grand Est</b></option>
        <option value="phppl-16"><b>Hauts de France</b></option>
        <option value="phpid-17"><b>Ile de France</b></option>
        <option value="phpid-18"><b>Normandie</b></option>
        <option value="phpca-19"><b>Nouvelle Aquitaine</b></option>
        <option value="phpab-20"><b>Occitanie </b></option>
        <option value="phppl-21"><b>Pays de la Loire</b></option>
        <option value="phpid-22"><b>Provence Cotes d'Azur</b></option>
      </select>
      <br>
      <br>
      <input type="submit" name="Submit" value="valider">
  </form>
    <br>
    <br>
    <hr />
    <br>
    <?php 
 require  '../../admin/majDebutSaison/btnImporterTable2.php';


//require 'ajoutJournee.php';

require '../majScores/bas.php';
 ?>
</div>
</body>
</html>
