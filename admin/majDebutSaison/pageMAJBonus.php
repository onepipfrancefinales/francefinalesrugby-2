<script language="JavaScript">
<!--
<!--
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
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<div align="center"></div>
<div align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font size="5">Mise 
  a jour des bonus<br>
  <br>
  <br>
  

  </font></b></font> 
  <?php
  if (isset ($_GET['comite'])) $ligue = $_GET['comite']; else $ligue = "aucune ligue selectionnee";
echo "Ligue choisie : ".$ligue;
?>
  <form name="form1" method="GET" action="pageMAJBonus.php?comite=<?php echo $comite;?>">
  <p>&nbsp;</p>
    <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">S&eacute;lection 
      de ligue</font> </b></font> 
      <select name="comite"  size="1">
        <option selected>Ligue</option>
        <option value="phppro-990141"><b>Fédérale 1</b></option>
        <option value="phppro-990241"><b>Espoir</b></option>
		<option value="phppro-990151"><b>Fédérale 2</b></option>
		<option value="phppro-990251"><b>Fédérale B</b></option>
        <option value="phpfed3NE-991161"><b>Fédérale 3</b></option>
		<option value="phpfed3NE-991261"><b>Excellence B</b></option>
        <option value="phpfed3NE"><b>Fédérale 3GS</b></option>
        <option value="phppro"><b>Compétitions féminines</b></option>
        <option value="phpau"><b>Auvergne Rhone Alpes</b></option>
        <option value="phpbg"><b>Bourgogne Franche Comté</b></option>
        <option value="phpbr"><b>Bretagne</b></option>
        <option value="phpce"><b>Centre Val de Loire</b></option>
        <option value="phpal"><b>Grand Est</b></option>
        <option value="phpfl"><b>Hauts de France</b></option>
        <option value="phpidf"><b>Ile de France</b></option>
        <option value="phpn"><b>Normandie</b></option>
        <option value="phpca"><b>Nouvelle Aquitaine</b></option>
        <option value="phpab"><b>Occitanie </b></option>
        <option value="phppl"><b>Pays de la Loire</b></option>
        <option value="phpcbl"><b>test</b></option>
        <option value="phppr"><b>Provence Cotes d'Azur</b></option>
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
 require  '../../admin/majDebutSaison/btnImporterTable3.php';


//require 'ajoutJournee.php';

require '../majScores/bas.php';
 ?>
</div>
</body>
</html>
