<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<font align="center" bgcolor="#FFFFFF" color="#FF0000" size="7" face="Arial, Helvetica, sans-serif">
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
	
	nbrePerequations("au", 10, $bdd);	$nbrePerequationsARA = $nbrePerequations;
	nbrePerequations("pl", 11, $bdd);	$nbrePerequationsBFC = $nbrePerequations;
	nbrePerequations("pl", 12, $bdd); $nbrePerequationsBRE = $nbrePerequations;
	nbrePerequations("pl", 13, $bdd); $nbrePerequationsCVL = $nbrePerequations;
	nbrePerequations("idf", 15, $bdd);$nbrePerequationsGES = $nbrePerequations;
	nbrePerequations("pl", 16, $bdd); $nbrePerequationsHDF = $nbrePerequations;
	nbrePerequations("idf", 17, $bdd);$nbrePerequationsIDF = $nbrePerequations;
	nbrePerequations("idf", 18, $bdd);$nbrePerequationsNOR = $nbrePerequations;
	nbrePerequations("ca", 19, $bdd); $nbrePerequationsNAQ = $nbrePerequations;
	nbrePerequations("ab", 20, $bdd); $nbrePerequationsOCC = $nbrePerequations;
	nbrePerequations("pl", 21, $bdd); $nbrePerequationsPDL = $nbrePerequations;
	nbrePerequations("idf", 22, $bdd); $nbrePerequationsPCA = $nbrePerequations;
	
$totauxReg =	$nbrePerequationsARA + $nbrePerequationsBFC + $nbrePerequationsBRE + $nbrePerequationsCVL + $nbrePerequationsGES + $nbrePerequationsHDF +
			$nbrePerequationsIDF + $nbrePerequationsNOR + $nbrePerequationsNAQ + $nbrePerequationsOCC + $nbrePerequationsPDL + $nbrePerequationsPCA;
	
	nbrePerequations("pro", 14, $bdd); $nbrePerequationsFED1 = $nbrePerequations;
	nbrePerequations("pro", 24, $bdd);$nbrePerequationsESPO = $nbrePerequations;
	nbrePerequations("pro", 15, $bdd);$nbrePerequationsFED2 = $nbrePerequations;
	nbrePerequations("pro", 25, $bdd);$nbrePerequationsFEDB = $nbrePerequations;
	
	nbrePerequations("fed3NE", 116, $bdd);$nbrePerequationsFED31 = $nbrePerequations;
	nbrePerequations("fed3NE", 216, $bdd);$nbrePerequationsFED32 = $nbrePerequations;
	$nbrePerequationsFED3 = $nbrePerequationsFED31+ $nbrePerequationsFED32;
	
	nbrePerequations("fed3NE", 126, $bdd);$nbrePerequationsEXC31 = $nbrePerequations;
	nbrePerequations("fed3NE", 226, $bdd);$nbrePerequationsEXC32 = $nbrePerequations;
	$nbrePerequationsEXC3 = $nbrePerequationsEXC31 + $nbrePerequationsEXC32; 
	 
	//nbrePerequationsFem("pro", 28, $bdd);$nbrePerequationsFEM1 = $nbrePerequations;
	//nbrePerequationsFem("pro", 29, $bdd);$nbrePerequationsFEM2 = $nbrePerequations;
	$nbrePerequationsFEM1 =0;
	$nbrePerequationsFEM2 =0;
	
	$fem = $nbrePerequationsFEM1 + $nbrePerequationsFEM2;
	
	
$totauxNat =	$nbrePerequationsFED1 + $nbrePerequationsESPO + $nbrePerequationsFED2 + $nbrePerequationsFEDB + $nbrePerequationsFED3 + $nbrePerequationsEXC3 +
				$fem;	
	
	
$totaux = $totauxReg + $totauxNat;
	
		echo "<br />";
	//echo $totaux;echo "<br />";
	/*
	echo "Ligue ARA (10): ".$nbrePerequationsARA;echo "<br />";

	echo "Ligue BFC (11): ".$nbrePerequationsBFC;echo "<br />";
	echo "Ligue BRE (12): ".$nbrePerequationsBRE;echo "<br />";
	echo "Ligue CVL (13): ".$nbrePerequationsCVL;echo "<br />";
	echo "Ligue GES (15): ".$nbrePerequationsGES;echo "<br />";
	echo "Ligue HDF (16): ".$nbrePerequationsHDF;echo "<br />";
	echo "Ligue IDF (17): ".$nbrePerequationsIDF;echo "<br />";
	echo "Ligue NOR (18): ".$nbrePerequationsNOR;echo "<br />";
	echo "Ligue NAQ (19): ".$nbrePerequationsNAQ;echo "<br />";
	echo "Ligue OCC (20): ".$nbrePerequationsOCC;echo "<br />";
	echo "Ligue PDL (21): ".$nbrePerequationsPDL;echo "<br />";
	echo "Ligue PCA (22): ".$nbrePerequationsPCA;echo "<br />";
	//echo "</td>";
	//echo "<td>";


echo "Federale 1 : ".$nbrePerequationsFED1;echo "<br />";
echo "Espoir Federale 1 : ".$nbrePerequationsESPO;;echo "<br />";
echo "Federale 2 : ".$nbrePerequationsFED2;;echo "<br />";
echo "Federale B : ".$nbrePerequationsFEDB;;echo "<br />";
echo "Federale  : ".$nbrePerequationsFED3;;echo "<br />";
echo "Excellence B : ".$nbrePerequationsEXC3;;echo "<br />";
echo "Feminines : ".$fem;;echo "<br />";
*/
echo "<table width=\"600\" border=\"1\" height=\"212\" align=\"center\">";
 echo "<tr>"; 
  echo "  <td colspan=\"2\" align=\"center\" >$totaux</td>";
  echo "</tr>";
  echo "<tr> ";
    echo "<td>	
			Federale 1 : $nbrePerequationsFED1<br />
			Espoir Federale 1 : $nbrePerequationsESPO<br />
			Federale 2 : $nbrePerequationsFED2<br />
			Federale B : $nbrePerequationsFEDB<br />
			Federale 3  : $nbrePerequationsFED3<br />
			Excellence B : $nbrePerequationsEXC3<br />
			Feminines : $fem<br />
		</td>";
    echo "<td>	
			Ligue ARA (10): $nbrePerequationsARA<br />
			Ligue BFC (11): $nbrePerequationsBFC<br />
			Ligue BRE (12): $nbrePerequationsBRE<br />
			Ligue CVL (13): $nbrePerequationsCVL<br />
			Ligue GES (15): $nbrePerequationsGES<br />
			Ligue HDF (16): $nbrePerequationsHDF<br />
			Ligue IDF (17): $nbrePerequationsIDF<br />
			Ligue NOR (18): $nbrePerequationsNOR<br />
			Ligue NAQ (19): $nbrePerequationsNAQ<br />
			Ligue OCC (20): $nbrePerequationsOCC<br />
			Ligue PDL (21): $nbrePerequationsPDL<br />
			Ligue PCA (22): $nbrePerequationsPCA<br />
		   </td>";
  echo "</tr>";
echo "</table>";

//echo "</tr>";
//echo "</table>";

?>

<p align="center"><b><font color="#000000" size="7" >Ligue Auvergne Rh&ocirc;ne Alpes</font>
<p align="center"><b><?php matchsPerequations('au', 10, $bdd) ;?> </font></b></p> <hr />
<p align="center"><?php //matchsEnRetards2('au', 10, $bdd) ;?> </b></font>

 <p align="center"><b><font color="#000000" size="7">Ligue Bourgogne Franche Comté</font>
<p align="center"><b><?php matchsPerequations('pl', 11, $bdd) ;?> </font></b></p><hr />
<p align="center"><?php //matchsEnRetards2('pl', 11, $bdd) ;?> </b></font>

 <p align="center"><b><font color="#000000" size="7">Ligue Bretagne</font>
<p align="center"><b><?php matchsPerequations('pl', 12, $bdd) ;?> </font></b></p> <hr />
<p align="center"><?php //matchsEnRetards2('pl', 12, $bdd) ;?> </b></font>

 <p align="center"><b><font color="#000000" size="7">Ligue Centre Val de Loire</font>
<p align="center"><b><?php matchsPerequations('pl', 13, $bdd) ;?> </font></b></p><hr />
<p align="center"><?php// matchsEnRetards2('pl', 13, $bdd) ;?> </b></font>

 <p align="center"><b><font color="#000000" size="7">Ligue Grand Est</font>
<p align="center"><b><?php matchsPerequations('idf', 15, $bdd) ;?> </font></b></p><hr />
<p align="center"><?php //matchsEnRetards2('idf', 15, $bdd) ;?> </b></font>

 <p align="center"><b><font color="#000000" size="7">Ligue Hauts de France</font>
<p align="center"><b><?php matchsPerequations('pl', 16, $bdd) ;?> </font></b></p><hr />
<p align="center"><b><?php //matchsEnRetards2('pl', 16, $bdd) ;?> </b></font>

 <p align="center"><b><font color="#000000" size="7">Ligue Ile de France</font>
<p align="center"><b><?php matchsPerequations('idf', 17, $bdd) ;?> </font></b></p><hr />
<p align="center"><?php //matchsEnRetards2('idf', 17, $bdd) ;?> </b></font>

<p align="center"><b><font color="#000000" size="7">Ligue Normandie</font>
<p align="center"><b><?php matchsPerequations('idf', 18, $bdd) ;?> </font></b></p><hr />
<p align="center"><?php //matchsEnRetards2('idf', 18, $bdd) ;?> </b></font>

 <p align="center"><b><font color="#000000" size="7">Ligue Nouvelle Aquitaine</font>
<p align="center"><b><?php matchsPerequations('ca', 19, $bdd) ;?> </font></b></p><hr />
<p align="center"><?php //matchsEnRetards2('ca', 19, $bdd) ;?> </b></font>

 <p align="center"><b><font color="#000000" size="7">Ligue Occitanie</font>
<p align="center"><b><?php matchsPerequations('ab', 20, $bdd) ;?> </b></p></font><hr />
<p align="center"><?php //matchsEnRetards2('ab', 20, $bdd) ;?> </b></font>


 <p align="center"><b><font color="#000000" size="7">Ligue Pays de la Loire</font>
<p align="center"><b><?php matchsPerequations('pl', 21, $bdd) ;?> </font></b></p><hr />
<p align="center"><?php //matchsEnRetards2('pl', 21, $bdd) ;?> </b></font>


 <p align="center"><b><font color="#000000" size="7">Ligue Provence Alpes C&ocirc;te d'Azur</font>
<p align="center"><b><?php matchsPerequations('idf', 22, $bdd) ;?> </font></b></p><hr />
<p align="center"><?php //matchsEnRetards2('idf', 22, $bdd) ;?> </b></font>

<p align="center"><b><font color="#000000" size="7">Pro</font>
<?php matchsPerequations('pro', 11, $bdd) ;?> </font></b>
<?php matchsPerequations('pro', 12, $bdd) ;?> </font></b>
<?php matchsPerequations('pro', 13, $bdd) ;?> </font></b></p>

 
<p align="center"><b><font color="#000000" size="7">Fédérale 1</font>
<?php matchsPerequations('pro', 14, $bdd) ;?> </font></b><hr /></p>
<p align="center"><?php //matchsEnRetards2('pro', 24, $bdd) ;?> </font></b></p>

<p align="center"><b><font color="#000000" size="7">Fédérale 2</font>
<?php matchsPerequations('pro', 15, $bdd) ;?> </font></b><hr />
 <p align="center"><b><font color="#000000" size="7"></font>
<?php //matchsEnRetards2('pro', 25, $bdd) ;?> </font></b></p>
 
 <p align="center"><b><font color="#000000" size="7">Fédérale 3</font>
<?php matchsPerequations('fed3NE', 116, $bdd) ;?> </font></b>
<?php matchsPerequations('fed3NE', 216, $bdd) ;?> </font></b></p><hr />

  <p align="center"><b><font color="#000000" size="7"></font>
<?php// matchsEnRetards2('fed3NE', 126, $bdd) ;?> </font></b>
<?php// matchsEnRetards2('fed3NE', 226, $bdd) ;?> </font></b></p>
 <p align="center"><b><font color="#000000" size="7">Féminines</font>
<?php //matchsEnRetardsFem('pro', 28, $bdd) ;?> </font></b>
 

<?php //matchsEnRetardsFem('pro', 29, $bdd) ;?> </font></b></p>

  
</body>
</html>