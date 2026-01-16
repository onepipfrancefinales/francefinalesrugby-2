
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

<select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
  <option selected>S&eacute;lectionner un comit&eacute;</option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpf1"><b>F&eacute;d&eacute;rale 
  1</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpfed2"><b>F&eacute;d&eacute;rale 
  2</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpfed3NE"><b>F&eacute;d&eacute;rale 
  3-1</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpfed3GS"><b>F&eacute;d&eacute;rale 
  3-2</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpal"><b>Grand Est</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpab">Occitanie</option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpau"><b>Auvergne Rhone Alpes</b></option>
  <option value="h/admin/perm_matchs/accueil.php?comite=phpbr"><b>Bretagne</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpbg"><b>Bourgogne Franche comté</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpce"><b>Centre Val de Loire</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpfl"><b>Hauts de France</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpidf"><b>Ile de France</b></option>
  <option value="h/admin/perm_matchs/accueil.php?comite=phppl"><b>Pays de la Loire</b></option>
  <option value="h/admin/perm_matchs/accueil.php?comite=phpn"><b>Normandie</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phppr"><b>Provence Alpes cote d'azur
  </b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phppro"><b>Professionnel</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phpfem"><b>F&eacute;minines 
  Elite</b></option>
  <option value="/admin/perm_matchs/accueil.php?comite=phptest"><b>F&eacute;minines 
  Fédérales</b></option>

</select>






