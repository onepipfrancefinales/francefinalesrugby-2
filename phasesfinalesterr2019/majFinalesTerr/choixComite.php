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
if ($page=="saisieEquipes")
	$ad = "majFinalesTerr/majEquipes/saisieEquipe" ;
elseif ($page=="saisieScores")
	$ad = "majFinalesTerr/majScores/saisieScore" ;
elseif ($page=="saisieLieux")
	$ad = "majFinalesTerr/majLieux/saisieLieux" ;
?>
  
<p align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3">Comit&eacute; :</font> </b></font> 
   
  <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
    <option selected>Par ligue</option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=au&annee=<?php echo $annee ;?>&codeLigue=10"><b>Auvergne Rhone Alpes</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=pl&annee=<?php echo $annee ;?>&codeLigue=11"><b>Bourgogne Franche Comte</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=pl&annee=<?php echo $annee ;?>&codeLigue=12"><b>Bretagne</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=pl&annee=<?php echo $annee ;?>&codeLigue=13"><b>Centre Val de Loire</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=idf&annee=<?php echo $annee ;?>&codeLigue=15"><b>Grand Est</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=pl&annee=<?php echo $annee ;?>&codeLigue=16"><b>Hauts de France</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=idf&annee=<?php echo $annee;?>&codeLigue=17"><b>Ile de France</b></option>
	<option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=idf&annee=<?php echo $annee ;?>&codeLigue=18"><b>Normandie</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=ca&annee=<?php echo $annee ;?>&codeLigue=19"><b>Nouvelle Aquitaine</b></option>
	<option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=ab&annee=<?php echo $annee ;?>&codeLigue=20"><b>Occitanie</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=pl&annee=<?php echo $annee ;?>&codeLigue=21"><b>Pays de la Loire</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?comite=idf&annee=<?php echo $annee ;?>&codeLigue=22"><b>Provence Alpes Cote d'Azur</b></option>
  </select>
</p>






