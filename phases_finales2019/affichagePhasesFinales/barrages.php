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
<title>Barrages Fédérales</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php
 $annee=$_GET['annee'];
 $division=$_GET['division'];

 require '../../phases_finales2019/fonctionsChampFrance2019.php';
 
 //require '../../connect/connexion6.php';
 //nomDivision($division);

 require '../../connect/connexion1.php';
date2019($division, $annee, $bdd);

trenteDeuxieme2019 ($division, $annee, $bdd);
nomDivision($division);

 $reponse = $bdd->query("SELECT type
						FROM bdpffrance
						WHERE id = '$division' and saison = '$annee' "); 
		while ($row = $reponse->fetch() )
			{ 
			$type = $row[0];
			}
//barragesEquipes($typeBarrage, $divisionBarrage, $annee, $bdd);
//barragesScores($type, $division, $annee, $bdd);

/*
echo "type : ".$type;
//echo "<br />";
//$nombreEquipe = 32;
//echo substr($type,1,2);echo "<br />";
echo "<br />";
echo "typeTableau -> i_min :".$i_min;echo "<br />";
echo "typeTableau -> i_max :" . $j_max;echo "<br />";
echo "typeTableau -> j_min :". $j_min;echo "<br />";
echo "typeTableau -> j_max :". $j_max;echo "<br />";
echo "typeTableau -> num_max :". $num_max;echo "<br />";

echo $clubA1601;echo "<br />";
echo $clubA1602;echo "<br />";
echo "------------------------";echo "<br />";
echo $clubA3201;echo "<br />";
echo $clubA3202;echo "<br />";
*/
if (substr($type,1,2) != 0)
	$nombreMaxEquipe = 64;
elseif (substr($type,3,2) != 0)
	$nombreMaxEquipe = 32;
elseif (substr($type,5,2) != 0)
	$nombreMaxEquipe = 16;
elseif (substr($type,7,2) != 0)
	$nombreMaxEquipe = 8;
elseif (substr($type,9,2) != 0)
	$nombreMaxEquipe = 4;


 $nombreEquipe= substr($type,9,2);
// echo "<br />";
//echo $nombreMaxEquipe;echo "<br />";
//echo $nombreEquipe;echo "<br />";

if ($division == 7140 )
	$texteDivision = "Barrages Fédérale 1 ";
elseif ($division == 7150 )	
	$texteDivision = "Barrages Fédérale 2 ";
elseif ($division == 7160 )	
	$texteDivision = "Barrages Fédérale 3 ";
elseif ($division == 7240 )
	$texteDivision = "Barrages Espoirs Féd  ";
elseif ($division == 7250 )
	$texteDivision = "Barrages Fédérale B ";
elseif ($division == 7260 )
	$texteDivision = "Barrages Excellence B ";


if ($division == 7140 or $division == 7150 or $division == 7160) {
	
	$texte="Les rencontres se jouent sur les installations de l'
	équipe la mieux classée (la première citée)";}
	
	else {
	
	$texte= "Les rencontres se jouent sur terrain neutre.";}

?>

<table width="280" border="0" align="left"  cellspacing="0">
  <tr>
    <b><i>	<?php echo $texte;?></i></b>
  </tr>
</table>
	
	<br /><br />
<table width="280" border="0" align="left"  cellspacing="0">
  <tr>
    <td colspan="3" class="barrage2GA" ><?php echo $texteDivision; echo "<br />";echo $annee;?> </td>
  </tr>
</table>
<br /><br />
<?php echo $D64ME; ?>
	<br />
<table align="left">
 <tr>
    <td width="10" height="13"></td>
	<td width="216" height="2">&nbsp;</td>
    <td width="32" height="13"></td>
  </tr>
<?php 

constructionTableau( $nombreEquipe, $division, $annee) ;
/*
echo "nombreEquipe : ".$nombreEquipe; echo "<br />";
echo "i_min : ".$i_min; echo "<br />";
echo "i_max : ".$i_max; echo "<br />";
echo "j_min : ".$j_min; echo "<br />";
echo "j_max : ".$j_max; echo "<br />";
echo "num_max : ".$num_max; echo "<br />";
*/
for ($num = 1, $i=$i_min, $j= $i+1; $num <= $num_max, $i <= $i_max , $j < $j_max ; $num = $num + 2, $i = $i+4, $j=$j+4)
{
?>
<tr>
	<td rowspan="2" width="6" class="numero"><?php echo $num;?></td>
	
    <td class="barrage"><?php echo ${"clubA".$i};?></td>
      <td class="barrageGA"><?php	echo ${"A".$i};?></td>
	  
  </tr>
 <tr>
    <td class="barrage"> <?php echo ${"clubA".($j)};?></td>
   	<td class="barrageGA"><?php echo ${"A".($j)};?> </td>
		
  </tr>
  <tr>
  <td rowspan="2" width="6" class="numero"><?php echo $num + 1;?></td>
     <td class="barrage2"><?php echo ${"clubA".($i+2)};?></td>
      <td class="barrage2GA"><?php	echo ${"A".($i+2)};?></td>
	    
  </tr>
 <tr>
    <td class="barrage2"> <?php echo ${"clubA".($j+2)};?></td>
   	<td class="barrage2GA"><?php echo ${"A".($j+2)};?> </td>
	 
  </tr>
  <?php
}
?>

</table>
<p>

</p><br/><br/>
