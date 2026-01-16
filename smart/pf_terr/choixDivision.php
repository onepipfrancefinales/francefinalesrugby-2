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
   
<p align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3">Division :</font> </b></font> 
  <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
    <option selected></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $codeLigue.'0170';?>&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Régionale 1</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $codeLigue.'0180';?>&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Régionale 2</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $codeLigue.'0190';?>&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Régionale 3</b></option>
<br>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $codeLigue.'0290';?>&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Fém Régionales X </b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $codeLigue.'0190';?>&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>         </b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $codeLigue.'0270';?>&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Rés Rég 1</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=<?php echo $codeLigue.'9180';?>&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Rés Rég 2</b></option>
 <!--   
  	<option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=171&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>171(tableau2)</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=172&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>172 (tableau3)</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=181&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>181 (tableau2)</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=182&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>182 (tableau3)</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=191&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>191 (tableau2)</b></option>
	<option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=192&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>192 (tableau3)</b></option>
    <option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=201&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>201 (tableau2)</b></option>
	<option value="/phasesfinalesterr2019/<?php echo $ad ;?>.php?division=202&comite=<?php echo $comite ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>202 (tableau3)</b></option>
 -->
 </select>
  <br>
