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
	
//$annee='2019';		
	
if ($page=="saisieEquipes")
	$ad = "majFinalesTerr/majEquipes/saisieEquipe" ;
elseif ($page=="saisieScores")
	$ad = "majFinalesTerr/majScores/saisieScore" ;
elseif ($page=="saisieLieux")
	$ad = "majFinalesTerr/majLieux/saisieLieux" ;



?>


      
<p align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3">Barrage
 :</font> </b></font> 
  <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
    <option selected></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>non</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division + 7000000 ;?>&comite=<?php echo $comite ;?>&type=<?php echo $ytype ;?>&annee=<?php echo $annee ;?>&barrage=oui"><b>oui</b></option>
  </select>
</p>
 






