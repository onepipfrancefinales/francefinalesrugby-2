<?php
participation($bdd);

 echo "nombre de finalistes : ".$nbreParticipation;
 echo "<br />";
 echo "nbre de champions : ".$nbreChampion;
 echo "<br />";
echo "*************";
	//affichage ordre alphabétique
	for ($i=0; $i < $nbreParticipation; $i++)
	{	
	//echo $tabNomEquipe[$i].' : '.$tabNbre[$i]." participations"."<br />";
	}
	
//	affichage nbre de titre decroissant

echo "<br />";


/*
for ($i=0;$i<$nbreParticipation-1;$i++)
{
	//affichage nbre participation
	if($tabNbreTrier[$i]>$tabNbreTrier[$i+1]and $tabNbreTrier[$i]>1)
	{
		echo "<br />"."<b>".$tabNbreTrier[$i]." participations"."</b>";
		echo "<br />"."<br />";
	
	 //affichage des équipes
	 for ($j=0;$j<$nbreParticipation-1;$j++)
		{
		 if ($tabNbreTrier[$i]==$tabNbre[$j] and $tabNbreTrier[$i]>1)
			{echo $tabNomEquipe[$j].$tabNbre[$j]."<br />";}
		}	
	}
}
*/
/*
echo "<br />";
echo "<b>"."1 participation"."</b>"."<br />";
echo "<br />";
for ($i=0;$i<$nbreParticipation-1;$i++)
{
if ( $tabNbre[$i] == '1' )
	{echo $tabNomEquipe[$i].$tabNbre[$i]."<br />"; }
}
*/

//**************************************
?>
<p class="center size5 styleArial bold"> Titres de champion de France consécutifs<br>
<span class="center size3">(Toutes divisions confondues)</span> </p>
<br>
<p class="center size4 styleArial bold">Quadruplé</p>
<p class="size3 styleArial">
<?php
for($y = 0 ; $y < $cpteMonTableau; $y++)
{
 for ($i=0;$i<$nbreParticipation-1;$i++)
 {
  if ($tabNbre[$i]==$monTableau[$y])
  {
  $nbre=$tabNbre[$i];
  $equipe=$tabNomEquipe[$i];
	titresConsecutifs4($equipe, $nbre, $bdd);
  }
 }
}
?>
</p>
<br>
<p class="center size4 styleArial bold">Triplé</p>
<p class="size3 styleArial">
<?php
for($y = 0 ; $y < $cpteMonTableau; $y++)
{
 for ($i=0;$i<$nbreParticipation-1;$i++)
 {
  if ($tabNbre[$i]==$monTableau[$y])
  {
  $nbre=$tabNbre[$i];
  $equipe=$tabNomEquipe[$i];
	titresConsecutifs3($equipe, $nbre, $bdd);
  }
 }
}
?>
</p>
<br>
<p class="center size4 styleArial bold">Doublé</p>
<p class="size3 styleArial">
<?php
for($y = 0 ; $y < $cpteMonTableau; $y++)
{
	echo $monTableau[$y];
}
echo "<br />";
for($y = 0 ; $y < $cpteMonTableau; $y++)
{
 for ($i=0;$i<$nbreParticipation-1;$i++)
 {
  if ($tabNbre[$i]==$monTableau[$y])
  {
  $nbre=$tabNbre[$i];
  $equipe=$tabNomEquipe[$i];
	titresConsecutifs2($equipe, $nbre, $bdd);
  }
 }
}
?>
</p>
<?php

//*****************************************************
/*
tousLesChampions($bdd);
echo "<br />";
//echo 'nbre Edition : '.$nbreEdition;echo "<br />";
echo "<br />";
//affichage de toutes les éditions
for ($i=0; $i<$nbreEdition; $i++)
{
if (isset($tabSaison[$i])) $saison[$i] = $tabSaison[$i];
if (isset($tabChampion[$i])) $champion[$i] = $tabChampion[$i];
echo $saison[$i].' '.$champion[$i]."<br />";
}
*/
?>
<br><br>
<hr>

<p class="center size5 styleArial bold"> Nombre de participations à <br>une finale du champ de france </p>
<p class="size3 styleArial">
stade toulousain : 27 finales / 23 victoires<br>
stade francais : 23 finales / 14 victoires<br>
<br>
<br>
USA Perpignan : 16 finales / 7 victoires<br>
AS Béziers : 15 finales / 11 victoures<br>
Agen : 14 finales / 8 victoires<br>
AS Montfrrand : 14 finales / 2 victoires<br>
Racing 92 (racing club de France jusqu'en 2001) : 13 finales / 6 victoires<br>
RC Toulon : 13 finales /  4 victoires <br>
Stade bordelais : 12 finales   / 7 victoires<br>
FC Lourdes : 11 finales   / 8 victoires<br>
<br>
<br>
Biarritz : 8 finales / 5  victoires<br>
Narbonne : 5 finales / 2  victoires<br>
Castres olympique : 7 finales   / 5 victoires<br>
Aviron bayonnais : 7 finales / 3 victoires<br>
</p> 
  <br>
  <br>
<p class="center size4 styleArial bold">5 participations</p>
<p class="size3 styleArial">
  Stadoceste tarbais : 5 finales / 2 victoires<br>
  US Dax : 5 finales / 0 victoire<br>
</p>
<br>
<br>
<p class="center size4 styleArial bold">4 participations</p>
<p class="size3 styleArial">
Stade montois 4 finales / 1 victoire<br>
CA Brive 4 finales / 0 victoire</p>
<br>
<br>
<p class="center size4 styleArial bold">3 participations</p>
<p class="size3 styleArial">  
  Lyon OU : 3 finales / 2 victoires<br>
  CA Bègles 3 finales / 2 victoires
  Olympique 3 finales / 1 victoire<br>
  US Quillan 3 finales /1 victoire<br>
  Section paloise 3 finales / 0 victoire
</p>
<br>
<br>
<p class="center size4 styleArial bold">2 Participations</p>
<p class="size3 styleArial">
FC Grenoble : 2 finales /  1 victoire<br>
SCUF : 2 finales / 0 victoire<br><br>
Stade bagnérais :  2 finales / 0 victoire<br>
Montpellier HR : 2 finales / 0 victoire
</p>
<br>
<br>
<p class="center size4 styleArial bold">1 Participation</p>
<p class="size3 styleArial">FC Lyon 1 finale /1 victoire<br>
  CS Vienne 1 finale /1 victoire<br>
  US Carmaux 1 finale /1 victoire<br>
  US Montauban 1 final e/1 victoire<br>
  La Voulte sportif 1 finale /1 victoire<br>
  US Carcassonne : 1 finale  / 0 victoire<br>
  FC Lézignan : 1finale / 0 victoire<br>
  US Cognac : 1 finale/ 0 victoire<br>
  SC Mazamet : 1 finale/ 0 victoire<br>
  Nice UR : 1 finale/ victoire<br>
  CS Bourgoin-Jallieu :1 finale/ / 0 victoire<br>
  US Colomiers : 1 finale/ 0 victoire</p>
  <br>
  <br>

<p><font face="Arial, Helvetica, sans-serif" size="3">Records de finale perdues<br>
  l'ASM Clermont Auvergne, se distingue par le fait d'avoir perdu 12 finales (1936, 
  1937, 1970, 1978, 1994, 1999, 2001, 2007, 2008, 2009, 2015, 2019).</font></p>
<p>&nbsp;</p>
</body>
</html>


<!--

<p><b><font size="6" face="Verdana, Arial, Helvetica, sans-serif"><br>
  - Meilleure série pour un club -</font></b><br>
</p>
<p align="center">&nbsp;</p>
<p align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">4 titres 
  consécutifs</font></b></p>
<p> <font face="Arial, Helvetica, sans-serif" size="3">SBUC 1904 &agrave; 1907</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3"> Stade Toulousain 1994 &agrave; 
  1997 </font></p>
<p>&nbsp; </p>
<p><b><font size="4" face="Arial, Helvetica, sans-serif">3 titres consecutifs</font></b></p>
<p><font size="3" face="Arial, Helvetica, sans-serif">FC Lourdes 1956 &agrave; 
  1958</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Stade Toulousain 1922 &agrave; 
  1924</font></p>
<p><font size="3" face="Arial, Helvetica, sans-serif">Stade Fran&ccedil;ais 1893 
  &agrave; 1896</font></p>
<p>&nbsp;</p>
<p><b><font size="4" face="Arial, Helvetica, sans-serif">2 titres consecutifs</font></b></p>
<p></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">AS Béziers (1983-1984) 
  (1980-1981) (1977-1978) (1974-1975) (1971-1972)</font></p>
<p><font size="3" face="Arial, Helvetica, sans-serif">Stade Toulousain (1985-1986) 
  (1926-1927) (2011-2012)</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Stade Fran&ccedil;ais (2003-2004) 
  (1897-1898)</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Lourdes (1952-1953)</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Biarritz (2005-2006)</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Lyon OU(1932-1933)<br>
  </font></p>
<p><b><font size="6" face="Verdana, Arial, Helvetica, sans-serif"><br>

-->
<hr>

<p class="center size5 styleArial bold"> Meilleure série pour un joueur </p>

<p class="center size4 styleArial bold">4 titres consécutifs</p>
<p class="size3 styleArial alignLeft">

<b>5 joueurs du SBUC, de 1904 à 1907 :</b> <br>
  Bruneau , Dufourcq Lacassagne (2 fois ouvreur - 2 fois demi-de-mélée) , Laporte et Tilh
  <br>  <br>
  <b>8 joueurs du Stade Toulousain, en 1994-1997 (à vérifier) : </b><br>
Belot - Berty - Califano - Castaignède - Cazalbou - Deylaud - Miorin - Soula 
<br>  <br>
<b> Benoît August</b>, champion quatre fois consécutivement<br>
  en 2003, 2004 avec le Stade Français et en 2005 et 2006 avec le Biarritz 
  Olympique.
</p>
<br><br>

</body>
</html>
