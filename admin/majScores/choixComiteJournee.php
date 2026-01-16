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

   
<p align="center">&nbsp;</p>
<p align="center"><font size="5" color="#FF0000"><b><font face="Arial, Helvetica, sans-serif">Suppression 
  d'une journ&eacute;e</font></b></font></p>
<p align="center">&nbsp;</p>
<form name="form1" method="POST" action="recuperationDesDonnees.php?type=journee">
  <p>&nbsp;</p>
  <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">1.Choix 
    du Comit&eacute; :</font> </b></font> 
    <select name="comite"  size="1">
      	<option selected>Par ligues</option>
		<option value="phppro"><b>Pro - F&eacute;d 1 - F&eacute;d 2</b></option>
      	<option value="phpfed3NE"><b>F&eacute;d 3</b></option>
	    <option value="phpfem"><b>xx-f&eacute;minines-xx</b></option>
       	<option value="phpau"><b>ARA</b></option>
     	<option value="phpidf"><b>GES - IDF - NOR - PCA</b></option>
      	<option value="phpca"><b>NAQ</b></option>
      	<option value="phpab"><b>OCC </b></option>
      	<option value="phppl"><b>BFC - BRE - CVL - HDF - PDL</b></option> 
    </select>

<?php 
 //require '../majDebutSaison/choixComite.php'; 
  ?>
  </p>
  <p>&nbsp;</p>
  <p><font size="3">2.Saisir division et journ&eacute;e &agrave; effacer</font></p>
  <p>Division : 
    <input type="text" name="borne1" maxlength="6">
    (170, 180, 190,....)</p>
  <p>Journ&eacute;e : 
    <input type="text" name="borne2" maxlength="6">
    (1,2,3.....)</p>
  <p>&nbsp;</p>
  <p> 
    <input type="submit" name="Submit" value="valider">
  </p>
</form>
<p align="center">&nbsp;</p>
<hr/>
 <?php require 'bas.php';?>




