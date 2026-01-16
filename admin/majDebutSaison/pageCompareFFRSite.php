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
<div align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font size="5">Compare FFR - Site<br>
  <br>
  <br>
  

  </font></b></font> 
  <?php
  if (isset ($_GET['bddComitePlusId'])) $bddComitePlusId = $_GET['bddComitePlusId']; else $bddComitePlusId = "aucune ligue s&eacute;lectionn&eacute;e";
echo "Bdd et Ligue choisies  : ".$bddComitePlusId;
?>
  <form name="form1" method="GET" action="pageCompareFFRSite.php?comite=<?php echo $bddComitePlusId;?>">
  <p>&nbsp;</p>
    <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">S&eacute;lection 
      de ligue</font> </b></font> 
      <select name="bddComitePlusId"  size="1">
        <option selected>Ligue</option>
        <option value="phppr-990141"><b>F&eacute;d&eacute;rale 1</b></option>
        <option value="phppr-990241"><b>Espoir F&eacute;d 1</b></option>
		<option value="phppr-990151"><b>F&eacute;d&eacute;rale 2</b></option>
        <option value="phppr-990251"><b>F&eacute;d&eacute;rale B</b></option>
	    <option value="phpfe-991161"><b>F&eacute;d&eacute;rale 3NE</b></option>
        <option value="phpfe-992161"><b>F&eacute;d&eacute;rale 3GS</b></option>
		<option value="phpfe-991261"><b>Excellence B NE</b></option>
		<option value="phpfe-992261"><b>Excellence B NE</b></option>
		<option value="phppr-880280"><b>Comp&eacute;titions f&eacute;minines</b></option>
        <option value="phpau-100171"><b>ARA 170/180</b></option>
        <option value="phpau-100191"><b>ARA 190</b></option>
		<option value="phpau-100211"><b>ARA 210</b></option>
		<option value="phpau-100271"><b>ARA 270/9180</b></option>
		<option value="phppl-110171"><b>Bourgogne Franche Comt&eacute;</b></option>
        <option value="phppl-120171"><b>Bretagne</b></option>
        <option value="phppl-130171"><b>Centre Val de Loire</b></option>
        <option value="phpid-150171"><b>Grand Est</b></option>
        <option value="phppl-160171"><b>Hauts de France</b></option>
        <option value="phpid-170171"><b>Ile de France</b></option>
        <option value="phpid-180171"><b>Normandie</b></option>
        <option value="phpca-190171"><b>NAQ 170/180</b></option>
		<option value="phpca-190191"><b>NAQ 195</b></option>
		<option value="phpca-190211"><b>NAQ 215</b></option>
		<option value="phpca-190271"><b>NAQ 271/9180</b></option>
        <option value="phpab-200171"><b>OCC 170/180 </b></option>
		<option value="phpab-200191"><b>OCC 190/200 </b></option>
		<option value="phpab-200211"><b>OCC 210 </b></option>
		<option value="phpab-200271"><b>OCC 270/9180 </b></option>
        <option value="phppl-210171"><b>Pays de la Loire</b></option>
        <option value="phpid-220171"><b>Provence Cotes d'Azur</b></option>
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
 require  '../../admin/majDebutSaison/btnImporterCompare.php';


//require 'ajoutJournee.php';

require '../majScores/bas.php';
 ?>
</div>
</body>
</html>
