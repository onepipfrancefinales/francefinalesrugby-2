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


<form name="form1" method="POST" action="enregBonus.php">
  <p>&nbsp;</p>
  <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">1.Choix 
    du Comit&eacute; :</font> </b></font> 
    <select name="ligue"  size="1">
      	<option selected>Par ligues</option>
		<option value="phppro"><b>Pro - F&eacute;d 1 - F&eacute;d 2 - F&eacute;m</b></option>
      	<option value="phpfed3NE"><b>F&eacute;d 3</b></option>
       	<option value="phpau"><b>ARA</b></option>
     	<option value="phpidf"><b>GES - IDF - NOR - PCA</b></option>
      	<option value="phpca"><b>NAQ</b></option>
      	<option value="phpab"><b>OCC </b></option>
      	<option value="phppl"><b>BFC - BRE - CVL - HDF - PDL</b></option> 
    </select>
  </p>
  <p> 
    <input type="submit" name="Submit" value="valider">
    </p>
</form>
<p align="center">&nbsp;</p>
<hr/>





