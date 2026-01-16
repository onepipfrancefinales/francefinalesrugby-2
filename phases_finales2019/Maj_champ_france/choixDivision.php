<script language="JavaScript">

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);


function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

</script>
<?php
if ($page == "equipes")
	$ad = "../../Maj_champ_france/majClubs/saisieEquipe.php" ;
elseif ($page == "scores")
	$ad = "../../Maj_champ_france/majScores/saisieScore.php" ;
elseif ($page == "dates" )
	$ad = "../../Maj_champ_france/majDates/saisieDate.php" ;
	
?>


 
      
<p align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3">Division 
  :</font> </b></font> 
  <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
    <option selected></option>
   <option value=""><b>----Barrages----------</b></option>
    <option value="<?php echo $ad ;?>?division=7140&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>barrages Féd 1</b></option>
	<option value="<?php echo $ad ;?>?division=7150&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>barrages Féd 2</b></option>
    <option value="<?php echo $ad ;?>?division=7160&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>barrages Féd 3 </b></option>
	<option value="<?php echo $ad ;?>?division=7240&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>barrages Espoir Fed 1</b></option>
	<option value="<?php echo $ad ;?>?division=7250&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>barrages Féd B</b></option>
    <option value="<?php echo $ad ;?>?division=7260&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>barrages Excellence B</b></option>

<option value=""><b>--------Séniors I------</b></option>
    <option value="<?php echo $ad ;?>?division=110&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Top14</b></option>
    <option value="<?php echo $ad ;?>?division=120&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Pro D2 </b></option>
	<option value="<?php echo $ad ;?>?division=115&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Accession Pro D2 Top14 </b></option>
    <option value="<?php echo $ad ;?>?division=130&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Nationale 1 </b></option>
	<option value="<?php echo $ad ;?>?division=135&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Nationale 2 </b></option>
	
	<option value="<?php echo $ad ;?>?division=140&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Fédérale 1 J Prat </b></option>
    <option value="<?php echo $ad ;?>?division=150&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Fédérale 2</b></option>
    <option value="<?php echo $ad ;?>?division=160&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Fédérale 3 </b></option>
    <option value="<?php echo $ad ;?>?division=170&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Régionale 1</b></option>
    <option value="<?php echo $ad ;?>?division=180&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Régionale 2 </b></option>
    <option value="<?php echo $ad ;?>?division=190&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Régionale 3 </b></option>
    <option value="<?php echo $ad ;?>?division=175&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Promotion Régionale 1</b></option>
    <option value="<?php echo $ad ;?>?division=185&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Promotion Régionale 2 </b></option>
    <option value="<?php echo $ad ;?>?division=195&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Promotion Régionale 3 </b></option>
    	
	<option value=""><b>------Réserves--------</b></option>
	<option value="<?php echo $ad ;?>?division=225&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Espoirs Elite</b></option>
	<option value="<?php echo $ad ;?>?division=230&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Espoirs Nationaux</b></option>
	<option value="<?php echo $ad ;?>?division=240&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Espoirs  Federaux</b></option>
    <option value="<?php echo $ad ;?>?division=250&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Fédérale B</b></option>
    <option value="<?php echo $ad ;?>?division=260&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Excellence B</b></option>
	<option value="<?php echo $ad ;?>?division=270&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Res Régionale</b></option>
   
  	<option value=""><b>------Féminines--------</b></option> 
    <option value="<?php echo $ad ;?>?division=280&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Elite 1</b></option>
    <option value="<?php echo $ad ;?>?division=285&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Elite 2</b></option>
    <option value="<?php echo $ad ;?>?division=290&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Fédérale 1</b></option>
    <option value="<?php echo $ad ;?>?division=295&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Fédérale 2</b></option>

    <option value=""><b>-----Jeunes---------</b></option>
    <option value="<?php echo $ad ;?>?division=325&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Crabos</b></option>
    <option value="<?php echo $ad ;?>?division=330&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Balandrade U18</b></option>
	<option value="<?php echo $ad ;?>?division=360&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Alamercery</b></option>
	<option value="<?php echo $ad ;?>?division=365&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Gaudermen</b></option>
	<option value="<?php echo $ad ;?>?division=370&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Teuliere U16</b></option>
  
  </select>
  <br>
