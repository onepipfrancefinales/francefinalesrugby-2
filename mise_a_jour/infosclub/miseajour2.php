
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
//-->
</script>
</head>
<?PHP
$annee = $_GET['annee'];
echo $annee;
?>
<body bgcolor="#FFFFFF" text="#000000">
<div id="Layer1" style="position:absolute; width:889px; height:31px; z-index:1; left: 332px; top: 60px"> 
  <table width="100%" border="1">
    <tr> 
      <td width="13%"> 
        <div align="center"><a href="../recupdonnee/modif1_32me.php?annee=<?php echo $annee?>" target="_top">32me (1-16)</a></div>
      </td>
      <td width="16%"> 
        <div align="center"><a href="../recupdonnee/modif1_32me2.php?annee=<?php echo $annee?>" target="_top">32me (17-32)</a></div>
      </td>
      <td width="7%"> 
        <div align="center"><a href="../recupdonnee/modif1_16me.php?annee=<?php echo $annee ?>" target="_top">16me</a></div>
      </td>
      <td width="9%"> 
        <div align="center"><a href="../recupdonnee/modif1_8me.php?annee=<?php echo $annee ?>" target="_top">8me</a></div>
      </td>
      <td width="10%"> 
        <div align="center"><a href="../recupdonnee/modif1_quart.php?annee=<?php echo $annee ?>" target="_top">Quart</a></div>
      </td>
      <td width="11%"> 
        <div align="center"><a href="../recupdonnee/modif1_demi.php?annee=<?php echo $annee?>" target="_top">Demi</a></div>
      </td>
      <td width="13%"> 
        <div align="center"><a href="../recupdonnee/modif1_finale.php?annee=<?php echo $annee?>" target="_top">Finale</a></div>
      </td>
      <td width="21%"> 
        <div align="center">Champion</div>
      </td>
    </tr>
  </table>
</div>

<div id="Layer2" style="position:absolute; width:825px; height:23px; z-index:2; left: 368px; top: 26px"> 
  <div align="center"><b>MISE A JOUR PHASES FINALES</b></div>
</div>
</body>
<?PHP
$annee = $_GET['annee'];
echo $annee;
?>
</html>
