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


      
<p align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3">Type 
  de finale :</font> </b></font> 
  <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
    <option selected></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=1&annee=<?php echo $annee ;?>"><b>Finale (1)</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=2&annee=<?php echo $annee ;?>"><b>Demi Finale (2)</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=3&annee=<?php echo $annee ;?>"><b>Demi finale AR (3) </b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=14&annee=<?php echo $annee ;?>"><b>Quarts de finale (14)</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=15&annee=<?php echo $annee ;?>"><b>Quarts et demi AR (15)</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=20&annee=<?php echo $annee ;?>"><b>Quarts AR et demi (20)</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=13&annee=<?php echo $annee ;?>"><b>Barr + Quarts</b></option>
	<option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=18&annee=<?php echo $annee ;?>"><b>Huitieme de finale (18) </b></option>
	<option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=17&annee=<?php echo $annee ;?>"><b>Barr + Huitieme de finale(17) </b></option>
	<option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=19&annee=<?php echo $annee ;?>"><b>Huitieme de finale AR(19)</b></option>	
	<option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $division ;?>&comite=<?php echo $comite ;?>&type=16&annee=<?php echo $annee ;?>"><b>Seizieme de finale (16)</b></option>	
	
  </select>
</p>
 






