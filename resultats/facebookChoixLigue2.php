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


<form name="form1" method="POST" action="facebookResultatsDeLaJournee.php">
  <p>&nbsp;</p>
  <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">Choix 
    de la ligue :</font> </b></font> 
    <select name="ligue"  size="1">
      	<option selected>Par ligues</option>
		<option value="1000000"><b>Auvergne Rhône Alpes</b></option>
     	<option value="1100000"><b>Bourgogne France Comté</b></option>
      	<option value="1200000"><b>Bretagne</b></option>
		<option value="1300000"><b>Centre Val de Loire</b></option>
		<option value="1400000"><b>Corse</b></option>
		<option value="1500000"><b>Grand Est</b></option>
      	<option value="1600000"><b>Hauts de france </b></option>
      	<option value="1700000"><b>Ile de france</b></option> 
		<option value="1800000"><b>Normandie</b></option> 
		<option value="1900000"><b>Nouvelle Aquitaine</b></option> 
		<option value="2000000"><b>Occitanie</b></option> 
		<option value="2100000"><b>Pays de la loire</b></option> 
		<option value="2200000"><b>Provence Alpes Côte d'azur</b></option> 
    </select>
	
  
  <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">Journée choisie 
    :</font> </b></font>  
		 
			 
					<input  name="date" maxlength="12" size="8" type="text"> format : AAAA-MM-JJ (2017-09-17)
			  
  
  
  </p>
 




 <p> 
    <input type="submit" name="Submit" value="valider">
    </p>
</form>
<p align="center">&nbsp;</p>
<hr/>





