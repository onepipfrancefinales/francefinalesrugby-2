<head>

<link rel="stylesheet" type="text/css" href="2.css">

<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>montees Fedérale</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php
 $annee=$_GET['annee'];
 $division=$_GET['division'];
 // $annee=2022;
 //$division=150;
  require '../../phases_finales2019/fonctionsChampFrance2019.php';
 require '../../connect/connexion6.php';
 nomDivision($division);

 require '../../connect/connexion1.php';
 trenteDeuxieme2019 ($division, $annee, $bdd);

?>


<?php
$division = $_GET['division'];
if ($division == 7140 )
{
	
?><div><b><i>
Les vainqueurs de ces confrontations A/R
	accèdent à la Nationale 2.
</b><i></div>
<table width="300" border="0" align="left" height="500" cellspacing="0">

  <tr>
    <td colspan="3" class="montee2GA" >Montées en Nationale 2 </td>
	<br />
  </tr>
  <tr>
    <td width="10" height="13"></td>
	<td ></td>
	<td height="2" align="center" ><b>Pts</b></td>
    <td width="32" height="13" align="center" ><b>GA</b></td>
  </tr>
  <tr>
	<td rowspan="2" width="6" class="numero"><?php echo "1";?></td>
    <td class="montee"><?php echo $clubA8001;?></td>
    <td class="monteeGA"><?php echo $A8001Pts;?></td>
	<td class="monteeGA"><?php echo $A8001;?></td>
  </tr>
  <tr>
    <td class="montee"> <?php echo $clubA8002;?></td>
   	<td class="monteeGA"><?php echo $A8002Pts;?> </td>
	<td class="monteeGA"><?php echo $A8002;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "2";?></td>
    <td class="montee2"><?php echo $clubA8003;?></td>
	<td class="montee2GA"><?php echo $A8003Pts;?></td>
	<td class="montee2GA"><?php	echo $A8003;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA8004;?></td>
	<td class="montee2GA"><?php echo $A8004Pts;?></td>
	<td class="montee2GA"><?php	echo $A8004;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "3";?></td>
    <td class="montee"><?php echo $clubA8005;?></td>
   	<td class="monteeGA"><?php echo $A8005Pts;?></td>
	<td class="monteeGA"><?php echo $A8005;?></td>
  </tr>
  <tr>
    <td class="montee"> <?php echo $clubA8006;?></td>
   	<td class="monteeGA"><?php echo $A8006Pts;?></td>
	<td class="monteeGA"><?php echo $A8006;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "4";?></td>
    <td class="montee2"><?php echo $clubA8007;?></td>
   	<td class="montee2GA"><?php echo $A8007Pts;?></td>
	<td class="montee2GA"><?php	echo $A8007;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA8008;?></td>
	<td class="montee2GA"><?php echo $A8008Pts;?></td>
	<td class="montee2GA"><?php	echo $A8008;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "5";?></td>
    <td class="montee" ><?php echo $clubA8009;?></td>
	<td class="monteeGA"><?php echo $A8009Pts;?></td>
	<td class="monteeGA"><?php echo $A8009;?></td>
  </tr>
  <tr>
    <td class="montee" ><?php echo $clubA8010;?></td>
	<td class="monteeGA"><?php echo $A8010Pts;?></td>
	<td class="monteeGA"><?php echo $A8010;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "6";?></td>
    <td class="montee2"><?php echo $clubA8011;?></td>
	<td class="montee2GA"><?php echo $A8011Pts;?></td>
	<td class="montee2GA"><?php	echo $A8011;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA8012;?></td>
   <td class="montee2GA"><?php echo $A8012Pts;?></td>
   <td class="montee2GA"><?php echo $A8012;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "7";?></td>
    <td class="montee"><?php echo $clubA8013;?></td>
   	<td class="monteeGA"><?php echo $A8013Pts;?></td>
	<td class="monteeGA"><?php echo $A8013;?></td>
  </tr>
  <tr>
    <td class="montee"><?php echo $clubA8014;?></td>
	<td class="monteeGA"><?php echo $A8014Pts;?></td>
	<td class="monteeGA"><?php echo $A8014;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "8";?></td>
    <td class="montee2"><?php echo $clubA8015;?></td>
	<td class="montee2GA"><?php echo $A8015Pts;?></td>
	<td class="montee2GA"><?php	echo $A8015;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA8016;?></td>
  	<td class="montee2GA"><?php echo $A8016Pts;?></td>
	<td class="montee2GA"><?php	echo $A8016;?></td>
  </tr>
   <tr>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
	<td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>

</table>
<p>&nbsp; </p><br>


<?php
}


// *******fédérale 2 *********************
elseif ($division == 7155 )
{
	
?><div><b><i>
Les vainqueurs de 16me accedent à la Fédérale . <br/>
	Les 16 équipes vaincues en 16me se rencontrent, et les gagnants de ces confrontations A/R
	accèdent à la Fédérale 1.
</b><i></div>
<table width="300" border="0" align="left" height="500" cellspacing="0">

  <tr>
    <td colspan="3" class="montee2GA" >montees en Féd 2 </td>
  </tr>
  <tr>
    <td width="10" height="13"></td>
	<td ></td>
	<td height="2">Pts</td>
    <td width="32" height="13">GA</td>
  </tr>
  <tr>
	<td rowspan="2" width="6" class="numero"><?php echo "1";?></td>
    <td class="montee"><?php echo $clubA1601;?></td>
    <td class="monteeGA"><?php echo $A1601Pts;?></td>
	<td class="monteeGA"><?php echo $A1601;?></td>
  </tr>
  <tr>
    <td class="montee"> <?php echo $clubA1602;?></td>
   	<td class="monteeGA"><?php echo $A1602Pts;?> </td>
	<td class="monteeGA"><?php echo $A1602;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "2";?></td>
    <td class="montee2"><?php echo $clubA1603;?></td>
	<td class="montee2GA"><?php echo $A1603Pts;?></td>
	<td class="montee2GA"><?php	echo $A1603;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA1604;?></td>
	<td class="montee2GA"><?php echo $A1604Pts;?></td>
	<td class="montee2GA"><?php	echo $A1604;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "3";?></td>
    <td class="montee"><?php echo $clubA1605;?></td>
   	<td class="monteeGA"><?php echo $A1605Pts;?></td>
	<td class="monteeGA"><?php echo $A1605;?></td>
  </tr>
  <tr>
    <td class="montee"> <?php echo $clubA1606;?></td>
   	<td class="monteeGA"><?php echo $A1606Pts;?></td>
	<td class="monteeGA"><?php echo $A1606;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "4";?></td>
    <td class="montee2"><?php echo $clubA1607;?></td>
   	<td class="montee2GA"><?php echo $A1607Pts;?></td>
	<td class="montee2GA"><?php	echo $A1607;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA1608;?></td>
	<td class="montee2GA"><?php echo $A1608Pts;?></td>
	<td class="montee2GA"><?php	echo $A1608;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "5";?></td>
    <td class="montee" ><?php echo $clubA1609;?></td>
	<td class="monteeGA"><?php echo $A1609Pts;?></td>
	<td class="monteeGA"><?php echo $A1609;?></td>
  </tr>
  <tr>
    <td class="montee" ><?php echo $clubA1610;?></td>
	<td class="monteeGA"><?php echo $A1610Pts;?></td>
	<td class="monteeGA"><?php echo $A1610;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "6";?></td>
    <td class="montee2"><?php echo $clubA1611;?></td>
	<td class="montee2GA"><?php echo $A1611Pts;?></td>
	<td class="montee2GA"><?php	echo $A1601;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA1612;?></td>
   <td class="montee2GA"><?php echo $A1612Pts;?></td>
   <td class="montee2GA"><?php echo $A1612;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "7";?></td>
    <td class="montee"><?php echo $clubA1613;?></td>
   	<td class="monteeGA"><?php echo $A1613Pts;?></td>
	<td class="monteeGA"><?php echo $A1613;?></td>
  </tr>
  <tr>
    <td class="montee"><?php echo $clubA1614;?></td>
	<td class="monteeGA"><?php echo $A1614Pts;?></td>
	<td class="monteeGA"><?php echo $A1614;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "8";?></td>
    <td class="montee2"><?php echo $clubA1615;?></td>
	<td class="montee2GA"><?php echo $A1615Pts;?></td>
	<td class="montee2GA"><?php	echo $A1615;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA1616;?></td>
  	<td class="montee2GA"><?php echo $A1616Pts;?></td>
	<td class="montee2GA"><?php	echo $A1616;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "9";?></td>
    <td class="montee"><?php echo $clubA1617;?></td>
	<td class="monteeGA"><?php echo $A1617Pts;?></td>
	<td class="monteeGA"><?php echo $A1617;?></td>
  </tr>
  <tr>
    <td class="montee"><?php echo $clubA1618;?></td>
	<td class="monteeGA"><?php echo $A1618Pts;?></td>
	<td class="monteeGA"><?php echo $A1618?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "10";?></td>
    <td class="montee2"><?php echo $clubA1619;?></td>
   <td class="montee2GA"><?php echo $A1619Pts;?></td>
   <td class="montee2GA"><?php echo $A1619;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA1620;?></td>
	<td class="montee2GA"><?php echo $A1620Pts;?></td>
	<td class="montee2GA"><?php	echo $A1620;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "11";?></td>
    <td class="montee"><?php echo $clubA1621;?></td>
  	<td class="monteeGA"><?php echo $A1621Pts;?></td>
	<td class="monteeGA"><?php echo $A1621;?></td>
  </tr>
  <tr>
    <td class="montee"><?php echo $clubA1622;?></td>
	<td class="monteeGA"><?php echo $A1622Pts;?></td>
	<td class="monteeGA"><?php echo $A1622;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "12";?></td>
    <td class="montee2"><?php echo $clubA1623;?></td>
   	<td class="montee2GA"><?php echo $A1623Pts;?></td>
	<td class="montee2GA"><?php	echo $A1623;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA1624;?></td>
   	<td class="montee2GA"><?php echo $A1624Pts;?></td>
	<td class="montee2GA"><?php	echo $A1624;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "13";?></td>
    <td class="montee"><?php echo $clubA1625;?></td>
	<td class="monteeGA"><?php echo $A1625Pts;?></td>
	<td class="monteeGA"><?php echo $A1625;?></td>
  </tr>
  <tr>
    <td class="montee"><?php echo $clubA1626;?></td>
	<td class="monteeGA"><?php echo $A1626Pts;?></td>
	<td class="monteeGA"><?php echo $A1601;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "14";?></td>
    <td class="montee2"><?php echo $clubA1627;?></td>
	<td class="montee2GA"><?php echo $A1627Pts;?></td>
	<td class="montee2GA"><?php	echo $A1627;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA1628;?></td>
	<td class="montee2GA"><?php echo $A1628Pts;?></td>
	<td class="montee2GA"><?php	echo $A1628;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "15";?></td>
    <td class="montee"><?php echo $clubA1629;?></td>
	<td class="monteeGA"><?php echo $A1629Pts;?></td>
	<td class="monteeGA"><?php echo $A1629;?></td>
  </tr>
  <tr>
    <td class="montee"><?php echo $clubA1630;?></td>
	<td class="monteeGA"><?php echo $A1630Pts;?></td>
	<td class="monteeGA"><?php echo $A1630;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "16";?></td>
    <td class="montee2"><?php echo $clubA1631;?></td>
    <td class="montee2GA"><?php echo $A1631Pts;?></td>
	<td class="montee2GA"><?php	echo $A1631;?></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA1632;?></td>
	<td class="montee2GA"><?php echo $A1632Pts;?></td>
	<td class="montee2GA"><?php	echo $A1632;?></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
	<td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>

</table>
<p>&nbsp; </p><br>


<?php
}
// *******Réglement fédérale 3 *********************
elseif ($division == 7165)
{
	if ($division == 7165) $texteDivision = "Matchs d'accès à la féd 2 A/R ";
	else $texteDivision = "Matchs d'accès à la féd 2 ";

	?><div><b><i>
	Les vainqueurs de 16me accedent à la Fédérale . <br/>
	Les 16 équipes vaincues en 16me se rencontrent, et les gagnants de ces confrontations A/R
	accèdent à la Fédérale 1.

</b><i></div>
	<br>
	<table width="300" border="0" align="left" height="500" cellspacing="0">

  <tr>
    <td colspan="4" class="montee2GA" ><?php echo $texteDivision; ?> </td>
  </tr>
  <tr>
	<td colspan="4">les 5 et 12 juin&nbsp;</td>
  </tr>
  <tr>
   <td ></td>
   <td></td>
   <td><b>Pts</b></td>
   <td><b>GA</b></td>
  </tr>
  <tr>
	<td rowspan="2" width="6" class="numero"><?php echo "1";?></td>
   <td class="montee"><div><?php echo $clubA3201;?></div></td>
   <td class="monteeGA"><div><?php echo $pts3201;?></div></td>
   <td class="monteeGA"><div><?php echo $A3201;?></div></td>
  </tr>
  <tr>
    <td class="montee"></div> <?php echo $clubA3202;?></div></td>
	<td class="monteeGA"></div><?php echo $pts3202;?></div> </td>
	<td class="monteeGA"></div><?php echo $A3202;?></div> </td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "2";?></td>
    <td class="montee2"><div><?php echo $clubA3203;?></div></td>
    <td class="montee2GA"><div><?php echo $pts3203;?></div></td>
	<td class="montee2GA"><div><?php echo $A3203;?></div></td>
  </tr>
  <tr>
    <td class="montee2"><?php echo $clubA3204;?></td>
    <td class="montee2GA"><?php echo $pts3204;?></td>
	<td class="montee2GA"><?php echo $A3204;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "3";?></td>
    <td class="montee"><?php echo $clubA3205;?></td>
	<td class="monteeGA"><?php echo $pts3205;?></td>
	<td class="monteeGA"><?php echo $A3205;?></td>
  </tr>
  <tr>
    <td class="montee"> <?php echo $clubA3206;?></td>
	<td class="monteeGA"><?php echo $pts3206;?></td>
	<td class="monteeGA"><?php echo $A3206;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "4";?></td>
    <td class="montee2"><?php echo $clubA3207;?></td>
	<td class="montee2GA"><?php echo $pts3207;?></td>
	<td class="montee2GA"><?php echo $A3207;?></td>
  </tr>

  <tr>
    <td class="montee2"><?php echo $clubA3208;?></td>
    <td class="montee2GA"><?php echo $pts3208;?></td>
	<td class="montee2GA"><?php echo $A3208;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "5";?></td>
    <td class="montee" ><?php echo $clubA3209;?></td>
	<td class="monteeGA"><?php echo $pts3209;?></td>
    <td class="monteeGA"><?php echo $A3209;?></td>
  </tr>
  <tr>
    <td class="montee" ><?php echo $clubA3210;?></td>
    <td class="monteeGA"><?php echo $pts3210;?></td>
	<td class="monteeGA"><?php echo $A3210;?></td>
  </tr>
   </tr>

    <tr>
	<td rowspan="2" width="6" class="numero"><?php echo "6";?></td>
    <td class="montee2"><?php echo $clubA3211;?></td>
    <td class="montee2GA"><?php	echo $pts3211;?></td>
    <td class="montee2GA"><?php	echo $A3211;?></td>

  </tr>
  <tr>
    <td class="montee2"> <?php echo $clubA3212;?></td>
	<td class="montee2GA"><?php echo $pts3212;?> </td>
	<td class="montee2GA"><?php echo $A3212;?> </td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "7";?></td>
    <td class="montee"><?php echo $clubA3213;?></td>
    <td class="monteeGA"><?php echo $pts3213;?></td>
	<td class="monteeGA"><?php echo $A3213;?></td>
  </tr>
  <tr>
    <td class="montee"><?php echo $clubA3214;?></td>
    <td class="monteeGA"><?php echo $pts3214;?></td>
	<td class="monteeGA"><?php echo $A3214;?></td>
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo "8";?></td>
    <td class="montee2"><?php echo $clubA3215;?></td>
	<td class="montee2GA"><?php echo $pts3215;?></td>
	<td class="montee2GA"><?php echo $A3215;?></td>
  </tr>
  <tr>
    <td class="montee2"> <?php echo $clubA3216;?></td>
	<td class="montee2GA"><?php echo $pts3216;?></td>
	<td class="montee2GA"><?php echo $A3216;?></td>
  </tr>
  </table>
<p>&nbsp; </p>



<?php
}

// *******Rélement fédérale 3 *********************

//elseif ($cmt == 'fed3GS' or $cmt == 'fed3NE' or $cmt == '991160' or $cmt == '992160')
//{
?>





<?php
///}
?>
