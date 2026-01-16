
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../pf/AA2.css">  
</head>

<?php $annee=$_GET['annee'];?>
<?php $comite=$_GET['comite'];?>
<?php $anneeplus = $annee + 1;?>
<?php $anneemoins = $annee - 1; ?>
<?php $bdcomite="php".''.$comite;?>

<body bgcolor="#FFFFFF" text="#000000">
<table width="95%" border="0" align="center" bordercolor="#000000">
  <tr> 
    <td valign="middle" height="23" colspan="6" align="center"> </td>
  </tr>
  <tr> 
    <td width="17%"> 
      <div id="coin8" ><a href="../qualif/pageQualif.php?division=170&annee=<?php echo $annee; ?>&comite=<?php echo $comite;?>">H</a></div>
    </td>
    <td width="14%"> 
      <div id="coin8" ><a href="../qualif/pageQualif.php?division=180&annee=<?php echo $annee; ?>&comite=<?php echo $comite;?>">PH</a></div>
    </td>
    <td width="19%"> 
      <div id="coin8" ><a href="../qualif/pageQualif.php?division=190&annee=<?php echo $annee; ?>&comite=<?php echo $comite;?>">1S</a></div>
    </td>
    <td width="14%"> 
      <div id="coin8" ><a href="../qualif/pageQualif.php?division=200&annee=<?php echo $annee; ?>&comite=<?php echo $comite;?>">2S</a></div>
    </td>
    <td width="19%"> 
      <div id="coin8" ><a href="../qualif/pageQualif.php?division=210&annee=<?php echo $annee; ?>&comite=<?php echo $comite;?>">3S</a></div>
    </td>
    <td width="17%"> 
      <div id="coin8" ><a href="../qualif/pageQualif.php?division=220&annee=<?php echo $annee; ?>&comite=<?php echo $comite;?>">4S</a></div>
    </td>
  </tr>
  <tr> 
    <td width="14%"> 
      <div id="coin8" ><font size="1">Réserve</font></div>
    </td>
    <td width="17%"> 
      <div id="coin8" ><a href="../qualif/pageQualif.php?division=270&annee=<?php echo $annee; ?>&comite=<?php echo $comite;?>">H</a></div>
    </td>
    <td width="19%"> 
      <div id="coin8" ><a href="../qualif/pageQualif.php?division=9180&annee=<?php echo $annee; ?>&comite=<?php echo $comite;?>">PH</a></div>
    </td>
    <td width="14%"> 
      <div id="coin8" ><a href="../qualif/pageQualif.php?division=9190&annee=<?php echo $annee; ?>&comite=<?php echo $comite;?>">1S</a></div>
    </td>
    <td width="19%"> 
      <div id="coin8" ><a href="../qualif/pageQualif.php?division=9200&annee=<?php echo $annee; ?>&comite=<?php echo $comite;?>">2S</a></div>
    </td>
    <td width="17%"> 
      <div id="coin8" ><font size="2">-</font></div>
    </td>
  </tr>
</table>
</body>
</html>
