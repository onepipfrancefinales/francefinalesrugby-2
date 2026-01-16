<script language="JavaScript">

  function MM_reloadPage(init) {  //reloads the window if Nav4 resized
    if (init == true) with (navigator) {
      if ((appName == "Netscape") && (parseInt(appVersion) == 4)) {
        document.MM_pgW = innerWidth; document.MM_pgH = innerHeight; onresize = MM_reloadPage;
      }
    }
    else if (innerWidth != document.MM_pgW || innerHeight != document.MM_pgH) location.reload();
  }
  MM_reloadPage(true);
  // -->

  function MM_jumpMenu(targ, selObj, restore) { //v3.0
    eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
    if (restore) selObj.selectedIndex = 0;
  }
//-->
</script>
<?php
$ad = "championsFrance.php";

?>

<p text-align="center">
  <font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b>
      <font size="3">Division
        :</font>
    </b></font>
  <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
    <option selected></option>
    <option value="<?php echo $ad; ?>?division=110&annee=<?php echo $annee; ?> "><b>Top14</b></option>
    <option value="<?php echo $ad; ?>?division=120&annee=<?php echo $annee; ?> "><b>Pro D2 </b></option>
    <option value="<?php echo $ad; ?>?division=130&annee=<?php echo $annee; ?> "><b>Nationale 1 </b></option>
    <option value="<?php echo $ad; ?>?division=135&annee=<?php echo $annee; ?> "><b>Nationale 2 </b></option>
    <option value="<?php echo $ad; ?>?division=140&annee=<?php echo $annee; ?> "><b>F&eacute;d&eacute;rale 1 </b></option>
    <option value="<?php echo $ad; ?>?division=150&annee=<?php echo $annee; ?> "><b>F&eacute;d&eacute;rale 2</b></option>
    <option value="<?php echo $ad; ?>?division=160&annee=<?php echo $annee; ?> "><b>F&eacute;d&eacute;rale 3 </b>
    </option>

    <option value=""><b>--------------</b></option>

    <option value="<?php echo $ad; ?>?division=170&annee=<?php echo $annee; ?> "><b>R&eacute;gionale 1</b></option>
    <option value="<?php echo $ad; ?>?division=180&annee=<?php echo $annee; ?> "><b>R&eacute;gionale 2 </b></option>
    <option value="<?php echo $ad; ?>?division=190&annee=<?php echo $annee; ?> "><b>R&eacute;gionale 3</b></option>
    <!--  
    <option value="<?php echo $ad; ?>?division=200&annee=<?php echo $annee; ?> "><b>2me s&eacute;rie </b></option>
    <option value="<?php echo $ad; ?>?division=210&annee=<?php echo $annee; ?> "><b>3me s&eacute;rie</b></option>
    <option value="<?php echo $ad; ?>?division=220&annee=<?php echo $annee; ?> "><b>4me s&eacute;rie</b></option>
-->
    <option value=""><b>--------------</b></option>

    <option value="<?php echo $ad; ?>?division=225&annee=<?php echo $annee; ?>"><b>Espoir Elite</b></option>
    <option value="<?php echo $ad; ?>?division=230&annee=<?php echo $annee; ?>"><b>Espoir Nationaux</b></option>
    <option value="<?php echo $ad; ?>?division=240&annee=<?php echo $annee; ?>"><b>Espoir Fed1</b></option>
    <option value="<?php echo $ad; ?>?division=250&annee=<?php echo $annee; ?>"><b>F&eacute;d&eacute;rale B</b></option>
    <option value="<?php echo $ad; ?>?division=260&annee=<?php echo $annee; ?>"><b>Excellence B</b></option>
    <option value="<?php echo $ad; ?>?division=270&annee=<?php echo $annee; ?>"><b>R&eacute;s R&eacute;g 1</b></option>

    <option value=""><b>--------------</b></option>

    <option value="<?php echo $ad; ?>?division=280&annee=<?php echo $annee; ?>"><b>Elite 1</b></option>
    <option value="<?php echo $ad; ?>?division=285&annee=<?php echo $annee; ?>"><b>Elite 2</b></option>
    <option value="<?php echo $ad; ?>?division=290&annee=<?php echo $annee; ?>"><b>F&eacute;d&eacute;rale 1</b></option>
    <option value="<?php echo $ad; ?>?division=295&annee=<?php echo $annee; ?>"><b>F&eacute;d&eacute;rale 2</b></option>

    <option value=""><b>--------------</b></option>

    <option value="<?php echo $ad; ?>?division=325&annee=<?php echo $annee; ?>"><b>Crabos</b></option>
    <option value="<?php echo $ad; ?>?division=330&annee=<?php echo $annee; ?>"><b>Balandrade U18</b></option>
    <option value="<?php echo $ad; ?>?division=360&annee=<?php echo $annee; ?>"><b>Alamercery</b></option>
    <option value="<?php echo $ad; ?>?division=365&annee=<?php echo $annee; ?>"><b>Gaudermen</b></option>
    <option value="<?php echo $ad; ?>?division=370&annee=<?php echo $annee; ?>"><b>Teuliere U16</b></option>

  </select>
  <br>