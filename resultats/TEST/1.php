<html>
<head>
<title>Résultats à saisir</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="../../ligne1.css">
</head>

<font align="left" bgcolor="#FFFFFF" color="#FF0000" size="7" face="Arial, Helvetica, sans-serif">
<b><?php
$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
echo "<br>";
//echo $ma_date;
echo "<br>";

?>
</b></font>
  <?php

require ('../../connect/connexion6.php');
require 'fonctionsConsultation.php';
//echo "<table width=\"600\" border=\"1\">"
//echo "<tr>";
	//echo "<td>";
	
	nbreMatchs("au", 10, $bdd);	$nbreMatchsARA = $nbreMatchs;
	nbreMatchs("pl", 11, $bdd);	$nbreMatchsBFC = $nbreMatchs;
	nbreMatchs("pl", 12, $bdd); $nbreMatchsBRE = $nbreMatchs;
	nbreMatchs("pl", 13, $bdd); $nbreMatchsCVL = $nbreMatchs;
	nbreMatchs("idf", 15, $bdd);$nbreMatchsGES = $nbreMatchs;
	nbreMatchs("pl", 16, $bdd); $nbreMatchsHDF = $nbreMatchs;
	nbreMatchs("idf", 17, $bdd);$nbreMatchsIDF = $nbreMatchs;
	nbreMatchs("idf", 18, $bdd);$nbreMatchsNOR = $nbreMatchs;
	nbreMatchs("ca", 19, $bdd); $nbreMatchsNAQ = $nbreMatchs;
	nbreMatchs("ab", 20, $bdd); $nbreMatchsOCC = $nbreMatchs;
	nbreMatchs("pl", 21, $bdd); $nbreMatchsPDL = $nbreMatchs;
	nbreMatchs("idf", 22, $bdd); $nbreMatchsPCA = $nbreMatchs;
	
$totauxReg =	$nbreMatchsARA + $nbreMatchsBFC + $nbreMatchsBRE + $nbreMatchsCVL + $nbreMatchsGES + $nbreMatchsHDF +
			$nbreMatchsIDF + $nbreMatchsNOR + $nbreMatchsNAQ + $nbreMatchsOCC + $nbreMatchsPDL + $nbreMatchsPCA;
	
	nbreMatchs("pro", 11, $bdd); $nbreMatchsTOP = $nbreMatchs;
	nbreMatchs("pro", 12, $bdd); $nbreMatchsPRO = $nbreMatchs;
	nbreMatchs("pro", 13, $bdd); $nbreMatchsNAT = $nbreMatchs;
	nbreMatchs("pro", 14, $bdd); $nbreMatchsFED1 = $nbreMatchs;
	nbreMatchs("pro", 24, $bdd);$nbreMatchsESPO = $nbreMatchs;
	nbreMatchs("pro", 15, $bdd);$nbreMatchsFED2 = $nbreMatchs;
	nbreMatchs("pro", 25, $bdd);$nbreMatchsFEDB = $nbreMatchs;
	
	nbreMatchs("fed3NE", 116, $bdd);$nbreMatchsFED31 = $nbreMatchs;
	nbreMatchs("fed3NE", 216, $bdd);$nbreMatchsFED32 = $nbreMatchs;
	$nbreMatchsFED3 = $nbreMatchsFED31+ $nbreMatchsFED32;
	
	nbreMatchs("fed3NE", 126, $bdd);$nbreMatchsEXC31 = $nbreMatchs;
	nbreMatchs("fed3NE", 226, $bdd);$nbreMatchsEXC32 = $nbreMatchs;
	$nbreMatchsEXC3 = $nbreMatchsEXC31 + $nbreMatchsEXC32; 
	 
	nbreMatchsFem("pro", 28, $bdd);$nbreMatchsFEM1 = $nbreMatchs;
	nbreMatchsFem("pro", 29, $bdd);$nbreMatchsFEM2 = $nbreMatchs;
	$fem = $nbreMatchsFEM1 + $nbreMatchsFEM2;
	
	
$totauxNat =$nbreMatchsTOP + $nbreMatchsPRO +	$nbreMatchsNAT + $nbreMatchsFED1 + $nbreMatchsESPO + $nbreMatchsFED2 + $nbreMatchsFEDB + $nbreMatchsFED3 + $nbreMatchsEXC3 +
				$fem;	
	
	
$totaux = $totauxReg + $totauxNat;
/*	
		echo "<br />";
	echo $totaux;echo "<br />";
	
	echo "Ligue ARA (10): ".$nbreMatchsARA;echo "<br />";
	echo "Ligue BFC (11): ".$nbreMatchsBFC;echo "<br />";
	echo "Ligue BRE (12): ".$nbreMatchsBRE;echo "<br />";
	echo "Ligue CVL (13): ".$nbreMatchsCVL;echo "<br />";
	echo "Ligue GES (15): ".$nbreMatchsGES;echo "<br />";
	echo "Ligue HDF (16): ".$nbreMatchsHDF;echo "<br />";
	echo "Ligue IDF (17): ".$nbreMatchsIDF;echo "<br />";
	echo "Ligue NOR (18): ".$nbreMatchsNOR;echo "<br />";
	echo "Ligue NAQ (19): ".$nbreMatchsNAQ;echo "<br />";
	echo "Ligue OCC (20): ".$nbreMatchsOCC;echo "<br />";
	echo "Ligue PDL (21): ".$nbreMatchsPDL;echo "<br />";
	echo "Ligue PCA (22): ".$nbreMatchsPCA;echo "<br />";
	//echo "</td>";
	//echo "<td>";
*/
/*
echo "Federale 1 : ".$nbreMatchsFED1;echo "<br />";
echo "Espoir Federale 1 : ".$nbreMatchsESPO;;echo "<br />";
echo "Federale 2 : ".$nbreMatchsFED2;;echo "<br />";
echo "Federale B : ".$nbreMatchsFEDB;;echo "<br />";
echo "Federale  : ".$nbreMatchsFED3;;echo "<br />";
echo "Excellence B : ".$nbreMatchsEXC3;;echo "<br />";
echo "Feminines : ".$fem;;echo "<br />";
*/
echo "<table width=\"600\" border=\"1\" height=\"212\" align=\"center\">";
 echo "<tr>"; 
  echo "  <td colspan=\"2\" align=\"center\" >$totaux</td>";
  echo "</tr>";
  echo "<tr> ";
    echo "<td>
			Top 14 / Pro D2	: $nbreMatchsTOP / $nbreMatchsPRO<br />
			Nationales : $nbreMatchsNAT<br />
			Federale 1 : $nbreMatchsFED1<br />
			Espoir Federale 1 : $nbreMatchsESPO<br />
			Federale 2 : $nbreMatchsFED2<br />
			Federale B : $nbreMatchsFEDB<br />
			Federale 3  : $nbreMatchsFED3<br />
			Excellence B : $nbreMatchsEXC3<br />
			Feminines : $fem<br />
		</td>";
    echo "<td>	
			Ligue ARA (10): $nbreMatchsARA<br />
			Ligue BFC (11): $nbreMatchsBFC<br />
			Ligue BRE (12): $nbreMatchsBRE<br />
			Ligue CVL (13): $nbreMatchsCVL<br />
			Ligue GES (15): $nbreMatchsGES<br />
			Ligue HDF (16): $nbreMatchsHDF<br />
			Ligue IDF (17): $nbreMatchsIDF<br />
			Ligue NOR (18): $nbreMatchsNOR<br />
			Ligue NAQ (19): $nbreMatchsNAQ<br />
			Ligue OCC (20): $nbreMatchsOCC<br />
			Ligue PDL (21): $nbreMatchsPDL<br />
			Ligue PCA (22): $nbreMatchsPCA<br />
		   </td>";
  echo "</tr>";
echo "</table>";

//echo "</tr>";
//echo "</table>";
?>

<p class="center bold size8" >Ligue Auvergne Rh&ocirc;ne Alpes</p>
<p class="center bold"><b><?php matchsEnRetards('au', 10, $bdd) ;?></p> <hr />
<p class="center bold"><?php matchsEnRetards2('au', 10, $bdd) ;?> </p>

<p class="center bold size8">Ligue Bourgogne Franche Comté</p>
<p class="center bold"><b><?php matchsEnRetards('pl', 11, $bdd) ;?></p><hr />
<p class="center bold"><?php matchsEnRetards2('pl', 11, $bdd) ;?></p>

 <p class="center bold size8">Ligue Bretagne</p>
 <p class="center bold"><b><?php matchsEnRetards('pl', 12, $bdd) ;?></p> <hr />
 <p class="center bold"><?php matchsEnRetards2('pl', 12, $bdd) ;?> </p>

 <p class="center bold size8">Ligue Centre Val de Loire</p>
 <p class="center bold"><?php matchsEnRetards('pl', 13, $bdd) ;?></p><hr />
 <p class="center bold"><?php matchsEnRetards2('pl', 13, $bdd) ;?> </b></p>

 <p class="center bold size8">Ligue Grand Est</p>
 <p class="center bold"><?php matchsEnRetards('idf', 15, $bdd) ;?></p><hr />
<p class="center bold"><?php matchsEnRetards2('idf', 15, $bdd) ;?> </p>

 <p class="center bold size8">Ligue Hauts de France</p>
 <p class="center bold"><?php matchsEnRetards('pl', 16, $bdd) ;?></p><hr />
<p class="center bold"><?php matchsEnRetards2('pl', 16, $bdd) ;?></p>

 <p class="center bold size8">Ligue Ile de France</p>
 <p class="center bold"><?php matchsEnRetards('idf', 17, $bdd) ;?></p><hr />
<p class="center bold"><?php matchsEnRetards2('idf', 17, $bdd) ;?></p>

<p class="center bold size8">Ligue Normandie</p>
<p class="center bold"><?php matchsEnRetards('idf', 18, $bdd) ;?></p><hr />
<p class="center bold"><?php matchsEnRetards2('idf', 18, $bdd) ;?></p>

<p class="center bold size8">Ligue Nouvelle Aquitaine</p>
 <p class="center bold"><b><?php matchsEnRetards('ca', 19, $bdd) ;?> </fpont></b></p><hr />
<p class="center bold"><?php matchsEnRetards2('ca', 19, $bdd) ;?> </b></p>

<p class="center bold size8">Ligue Occitanie</fpont>
 <p class="center bold"><?php matchsEnRetards('ab', 20, $bdd) ;?></p><hr />
<p class="center bold"><?php matchsEnRetards2('ab', 20, $bdd) ;?></p>


<p class="center bold size8">Ligue Pays de la Loire</fopnt>
 <p class="center bold"><?php matchsEnRetards('pl', 21, $bdd) ;?></p><hr />
<p class="center bold"><?php matchsEnRetards2('pl', 21, $bdd) ;?></p>


<p class="center bold size8">Ligue Provence Alpes C&ocirc;te d'Azur</p>
<p class="center bold"><?php matchsEnRetards('idf', 22, $bdd) ;?> </p><hr />
<p class="center bold"><?php matchsEnRetards2('idf', 22, $bdd) ;?></p>

<p class="center bold size8">Pro</p>
<p class="center bold"><?php matchsEnRetards('pro', 11, $bdd) ;?> </p>
<p class="center bold"><?php matchsEnRetards('pro', 12, $bdd) ;?> </p>
<p class="center bold"><?php matchsEnRetards('pro', 13, $bdd) ;?></p>

 
<p class="center bold size8">Fédérale 1</p>
<p class="center bold"><?php matchsEnRetards('pro', 14, $bdd) ;?></p><hr />
<p class="center bold"><?php matchsEnRetards2('pro', 24, $bdd) ;?></p>

<p class="center bold size8">Fédérale 2</p>
<p class="center bold"><?php matchsEnRetards('pro', 15, $bdd) ;?> </p><hr />
<p class="center bold"><?php matchsEnRetards2('pro', 25, $bdd) ;?> </p>
 
<p class="center bold size8">Fédérale 3</p>
<p class="center bold"><?php matchsEnRetards('fed3NE', 116, $bdd) ;?> </p>
<p class="center bold"><?php matchsEnRetards('fed3NE', 216, $bdd) ;?> </p><hr />


  <p class="center bold"><?php matchsEnRetards2('fed3NE', 126, $bdd) ;?> </p>
  <p class="center bold"><?php matchsEnRetards2('fed3NE', 226, $bdd) ;?></p>


<p class="center bold size8">Féminines</p>
 <p class="center bold"><?php matchsEnRetardsFem('pro', 28, $bdd) ;?> </p>
 <p class="center bold"><?php matchsEnRetardsFem('pro', 29, $bdd) ;?> </p>

  
</body>
</html>