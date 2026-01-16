<?php 
$annee = $_GET['annee'];
$division = $_GET['division'];
echo "annee :".$annee; echo "<br>";
echo "division : ".$division; echo "<br>";
 require '../../connect/connexion1.php';
$division = 7160;
//if (isset ($_GET['champ'])) $champ = $_GET['champ']; 
$annee = 2022;
$annee2 ="bdpf".''.$annee.''."_2"; 
?>
<head>

<link rel="stylesheet" type="text/css" href="barrages.css">

<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Barrages</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


</head>
<?php

require '../../phases_finales2019/fonctionsChampFrance2019.php';
trenteDeuxieme2019 ($division, $annee, $bdd);




?>

 


<body bgcolor="#EAECEB">
<?php


$clubA6405=  '  Drancy (IDF)  ';
$clubA6406=  '  Clamart (IDF)  ';
$clubA6407=  ' Rennes (BR)   ';
$clubA6408=  ' Le Rheu (BR)   ';

$clubA6409=  '  Bedarrides (PR)  ';
$clubA6410=  '  Nice (CAZ)  ';
$clubA6411=  '   Beaune	(BG) ';
$clubA6412=  '  Annecy	(AP)  ';

$clubA6413=  '  Saint Savin	(LY)  ';
$clubA6414=  '  Meyzieu (LY) ';
$clubA6415=  '  Saint Jean en Royans (DA)  ';
$clubA6416=  '  Tricastin (DA)  ';

$clubA6417=  '  Peyrehorade (CBl ';
$clubA6418=  '  Nafarroa (CBL) ';
$clubA6419=  '  Villefranche de Laur (MPY)  ';
$clubA6420=  '  10  ';

$clubA6421=  ' Leucate (LD)   ';
$clubA6422=  ' Millau (MPY)   ';
$clubA6423=  ' Pamiers (MPY)  ';
$clubA6424=  ' Lannemezan (AB)  ';

$clubA6425=  ' Lormont	(CA)  ';
$clubA6426=  ' Morlaas	(BE)  ';
$clubA6427=  ' Bergerac	(PA)   ';
$clubA6428=  ' Malemort (LM)  ';

$clubA6429=  ' Cahors (MPY)';
$clubA6430=  ' Issoire (AU)';
$clubA6431=  ' Orthez	(CBL)  ';
$clubA6432=  ' Salles	(CA)  ';
$A3201 ='0';
?>

<table width="300" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="13" bgcolor="#FFCC66" width="216"> 
      <div align="center"><i></i></div>
    </td>
    <td height="13" bgcolor="#FFCC66" width="32">&nbsp;</td>
  </tr>
  <tr> 
    <td width="216" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2" height="24"> 
      <div id="coin5" >Barrages d'acc&egrave;s aux 32me de finale</div>
    </td>
  </tr>
  <tr> 
    <td width="216" height="2">&nbsp;</td>
    <td width="32" height="13" align="center"><font face="Arial, Helvetica, sans-serif"></font> </td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage"> <?php echo $clubA3201;?>   </td>
    <td width="32" height="20" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="8" class="barrage"> <?php echo $clubA3202;?>   </td>
    <td width="32" height="8" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="16" class="barrage"><?php	echo $clubA3203;?>  </td>
    <td width="32" height="16" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage"> <?php	echo $clubA3204;?>   </td>
    <td width="32" height="20" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"><?php echo $clubA6405;?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"> <?php	echo $clubA3202;?>  </td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?>   </td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2">  <?php echo $clubA3202;?>  </td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"> <?php echo $clubA3202;	?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" class="barrage" > <?php echo $clubA6409;?></td>
    <td width="32" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="11" class="barrage" ><?php	echo $clubA6410;?> </td>
    <td width="32" height="12" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="21" class="barrage"><?php echo $clubA6411;?></td>
    <td width="32" height="21" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" class="barrage"> <?php echo $clubA6412;?></td>
    <td width="32" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2">  <?php echo $clubA6413;?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"><?php	echo $clubA6414;?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"> <?php echo $clubA6415;?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"> <?php echo $clubA6416;?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" class="barrage"><?php	echo $clubA6417;?></td>
    <td width="32" class="coin4"><?php echo $A3201; ?>
    </td>
  </tr>
  <tr> 
    <td width="216" class="barrage"><?php echo $clubA6418;?>  </td>
    <td width="32" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="11" class="barrage"> <?php echo $clubA6419;?> </td>
    <td width="32" height="11" class="coin4"><?php echo $A3201;?></td>
  </tr>
  <tr> 
    <td width="216" class="barrage"> <?php echo $clubA6420;?> </td>
    <td width="32" class="coin4"><?php echo $A3201; ?> </td>
  </tr>
 
<!--
 <tr> 
    <td width="216" height="20" class="barrage2"><?php	echo $clubA6421;?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"><?php echo $clubA6422;?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"><?php echo $clubA6423;?> </td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2">  <?php	echo $clubA6424;?>  </td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?> </td>
  </tr>
  <tr> 
    <td width="216" height="21" class="barrage"> <?php echo $clubA6425;	?>    </td>
    <td width="32" height="21" class="coin4"><?php echo $A3201; ?>   </td>
  </tr>
  <tr> 
    <td width="216" class="barrage"><?php echo $clubA6426;?> </td>
    <td width="32" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="7" class="barrage"> <?php	echo $clubA6427;?>   </td>
    <td width="32" height="7" class="coin4"><?php echo $A3201; ?> </td>
  </tr>
  <tr> 
    <td width="216" class="barrage"> <?php 	echo $clubA6428;?>  </td>
    <td width="32" class="coin4"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"><?php echo $clubA6429;?> </td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"><?php echo $clubA6430;?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"> <?php echo $clubA6431;?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  <tr> 
    <td width="216" height="20" class="barrage2"><?php echo $clubA6432;?></td>
    <td width="32" height="20" class="coin5"><?php echo $A3201; ?></td>
  </tr>
  -->
  <tr> 
    <td width="216">&nbsp;</td>
    <td width="32">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FFCC66" width="216">&nbsp;</td>
    <td bgcolor="#FFCC66" width="32">&nbsp;</td>
  </tr>
  <tr> 
    <td width="216"> 
      <div align="center"> 
    </td>
    <td width="32">&nbsp;</td>
  </tr>
</table>
<p>&nbsp; </p>
