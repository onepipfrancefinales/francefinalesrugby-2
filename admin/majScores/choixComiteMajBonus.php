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
<?php
if ($page == "traitement")
$page = "pageTraitementBonusOffensifs.php";
elseif ($page == "saisie")
$page = "pageSaisieDesBonus.php";
?>

<form name="form1" method="POST" action="<?php echo $page;?>">
  <p>&nbsp;</p>
  <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">1.Choix 
    du Comit&eacute; :</font> </b></font> 
    <select name="ligue"  size="1">
      	<option selected>Par comit&eacute;</option>
		<option value="phpf1"><b>F&eacute;d&eacute;rale 1</b></option>
      	<option value="phpfed2"><b>F&eacute;d&eacute;rale 2</b></option>
	  	<option value="phpfed3NE"><b>F&eacute;d&eacute;rale 3NE</b></option>
		<option value="phpfed3GS"><b>F&eacute;d&eacute;rale 3GS</b></option>
	    <option value="phpfem"><b>Comp&eacute;titions f&eacute;minines</b></option>
       	<option value="phpau"><b>Auvergne Rhone Alpes</b></option>
      	<option value="phpbg"><b>Bourgogne Franche Comt&eacute;</b></option>
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
  </p>
  <p>&nbsp;</p>
  <p><font size="5"><b><font face="Arial, Helvetica, sans-serif" size="3">2.Choix 
    de la Journ&eacute;e : 
    <select name="journee"  size="1">
      <option selected>Journ&eacute;e</option>
      <option value="1"><b>Journ&eacute;e 1</b></option>
      <option value="2"><b>Journ&eacute;e 2</b></option>
      <option value="3"><b>Journ&eacute;e 3</b></option>
      <option value="4"><b>Journ&eacute;e 4</b></option>
      <option value="5"><b>Journ&eacute;e 5</b></option>
      <option value="6"><b>Journ&eacute;e 6</b></option>
      <option value="7"><b>Journ&eacute;e 7</b></option>
      <option value="8"><b>Journ&eacute;e 8</b></option>
      <option value="9"><b>Journ&eacute;e 9</b></option>
      <option value="10"><b>Journ&eacute;e 10</b></option>
      <option value="11"><b>Journ&eacute;e 11</b></option>
      
    </select>
    </font></b></font></p>
  <p>&nbsp;</p>
  <p> 
    <input type="submit" name="Submit" value="valider">
    </p>
</form>
<p align="center">&nbsp;</p>
<hr/>





