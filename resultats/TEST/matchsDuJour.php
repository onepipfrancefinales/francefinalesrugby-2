<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<font align="center" bgcolor="#FFFFFF" color="#FF0000" size="7" face="Arial, Helvetica, sans-serif">
<b><?php
$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53

//echo date('l j F Y'); // Thursday 11 October 2012, 15:35
//echo $dateDuJour;
setlocale(LC_TIME, 'fra_fra');
 
//echo strftime('%Y-%m-%d %H:%M:%S');  // 2012-10-11 16:03:04
echo "Rencontres du ".strftime('%A %d %B %Y'); // jeudi 11 octobre 2012, 16:03
echo "<br>";



//echo $ma_date;
echo "<br>";
?>
</b></font>
  <?php

require ('../../connect/connexion6.php');
require 'fonctionsConsultation.php';
nbreMatchs('pro', 11 , $bdd); $M99110 = $nbreMatchs;
echo "<br>"; echo $M99110;
nbreMatchs('pro', 12 , $bdd); $M99120 = $nbreMatchs;
echo "<br>";echo $M99120;
nbreMatchs('pro', 13 , $bdd); $M99130 = $nbreMatchs;
echo "<br>";echo $M99130;
nbreMatchs('pro', 14 , $bdd); $M99140 = $nbreMatchs;
echo "<br>";echo $M99140;
nbreMatchs('pro', 24 , $bdd); $M99240 = $nbreMatchs;
echo "<br>";echo $M99240;
nbreMatchs('pro', 15 , $bdd); $M99150 = $nbreMatchs;
echo "<br>";echo $M99150;
nbreMatchs('pro', 25 , $bdd); $M99250 = $nbreMatchs;
echo "<br>";echo $M99250;
nbreMatchs('fed3NE', 16 , $bdd); $M99160 = $nbreMatchs;
echo "<br>";echo $M99160;
nbreMatchs('fed3NE', 26 , $bdd); $M99260 = $nbreMatchs;
echo "<br>";echo $M99260;



nbreMatchs('au', 10, $bdd);  $M10 = $nbreMatchs;
nbreMatchs('pl', 11, $bdd);  $M11 = $nbreMatchs;
nbreMatchs('pl', 12, $bdd);  $M12 = $nbreMatchs;
nbreMatchs('pl', 13, $bdd);  $M13 = $nbreMatchs;
nbreMatchs('idf', 15, $bdd); $M15 = $nbreMatchs;
nbreMatchs('pl', 16, $bdd);  $M16 = $nbreMatchs;
nbreMatchs('idf', 17, $bdd); $M17 = $nbreMatchs;
nbreMatchs('idf', 18, $bdd); $M18 = $nbreMatchs;
nbreMatchs('ca', 19, $bdd);  $M19 = $nbreMatchs;
nbreMatchs('ab', 20, $bdd);  $M20 = $nbreMatchs;
nbreMatchs('pl', 21, $bdd) ; $M21 = $nbreMatchs;
nbreMatchs('idf', 22, $bdd); $M22 = $nbreMatchs;








echo "<br>";echo "<br>";

 //$totaux = is_numeric($M99110) + is_numeric($nbreMatchs99120)+ is_numeric($nbreMatchs99130);

 $totaux = $M99110+$M99120+$M99130+$M99140+$M99240+$M99150+$M99250+$M99160+$M99260
 +$M11+$M12+$M13+$M15+$M16+$M17+$M18+$M19+$M20+$M21+$M22;


echo "totaux1 : ".$totaux;
?>



<p align="center"><b><font color="#000000" size="7" >Ligue Auvergne Rh&ocirc;ne Alpes</font>
<?php matchsEnRetards('au', 10, $bdd) ;?> </font></b></p>
 
 <p align="center"><b><font color="#000000" size="7">Ligue Bourgogne Franche Comté</font>
<?php matchsEnRetards('pl', 11, $bdd) ;?> </font></b></p>

 <p align="center"><b><font color="#000000" size="7">Ligue Bretagne</font>
<?php matchsEnRetards('pl', 12, $bdd) ;?> </font></b></p>
 
 <p align="center"><b><font color="#000000" size="7">Ligue Centre Val de Loire</font>
<?php matchsEnRetards('pl', 13, $bdd) ;?> </font></b></p> 

 <p align="center"><b><font color="#000000" size="7">Ligue Grand Est</font>
<?php matchsEnRetards('idf', 15, $bdd) ;?> </font></b></p>

 <p align="center"><b><font color="#000000" size="7">Ligue Hauts de France</font>
<?php matchsEnRetards('pl', 16, $bdd) ;?> </font></b></p>

 <p align="center"><b><font color="#000000" size="7">Ligue Ile de France</font>
<?php matchsEnRetards('idf', 17, $bdd) ;?> </font></b></p>

<p align="center"><b><font color="#000000" size="7">Ligue Normandie</font>
<?php matchsEnRetards('idf', 18, $bdd) ;?> </font></b></p>

 <p align="center"><b><font color="#000000" size="7">Ligue Nouvelle Aquitaine</font>
<?php matchsEnRetards('ca', 19, $bdd) ;?> </font></b></p>

 <p align="center"><b><font color="#000000" size="7">Ligue Occitanie</font>
<?php matchsEnRetards('ab', 20, $bdd) ;?> </font></b></p>

 <p align="center"><b><font color="#000000" size="7">Ligue Pays de la Loire</font>
<?php matchsEnRetards('pl', 21, $bdd) ;?> </font></b></p>

 <p align="center"><b><font color="#000000" size="7">Ligue Provence Alpes C&ocirc;te d'Azur</font>
<?php matchsEnRetards('idf', 22, $bdd) ;?> </font></b></p>

<p align="center"><b><font color="#000000" size="7">Pro</font>
<?php matchsEnRetards('pro', 11, $bdd) ;// $nbre110=$nbreMatchs2;?> </font></b></p>
<?php matchsEnRetards('pro', 12, $bdd) ;//$nbre120= $nbreMatchs2;?> </font></b></p>
<?php matchsEnRetards('pro', 13, $bdd) ;//$nbre130= $nbreMatchs2;?> </font></b></p>

 
<p align="center"><b><font color="#000000" size="7">Fédérale 1</font>
<?php matchsEnRetards('pro', 14, $bdd) ;//$nbre140= $nbreMatchs2?> </font></b></p>
<p align="center"><b><font color="#000000" size="7"></font>
<?php matchsEnRetards2('pro', 24, $bdd) ;//$nbre240= $nbreMatchs2?> </font></b></p>

<p align="center"><b><font color="#000000" size="7">Fédérale 2</font>
<?php matchsEnRetards('pro', 15, $bdd) ;?> </font></b></p>
<p align="center"><b><font color="#000000" size="7"></font>
<?php matchsEnRetards2('pro', 25, $bdd) ;?> </font></b></p>
 
 <p align="center"><b><font color="#000000" size="7">Fédérale 3</font>
<?php matchsEnRetards('fed3NE', 16, $bdd) ;?> </font></b></p>
  <p align="center"><b><font color="#000000" size="7"></font>
<?php matchsEnRetards('fed3NE', 26, $bdd) ;?> </font></b></p>
 
 <p align="center"><b><font color="#000000" size="7">Féminines</font>
<?php matchsEnRetards('pro', 85, $bdd) ;?> </font></b></p>
  

<?php
$totaux=$nbreMatchs2;
 
 echo "totaux : ".$totaux?> 
</body>
</html>