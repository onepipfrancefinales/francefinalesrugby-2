<?php
//***********************************************************************/
// phpbgeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpbgeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpbgeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

require ("../config.php") ;
ouverture ();

$equipe = $_REQUEST['equipe'];

// On détermine le nom de l'équipe à partir de son id et le championnat
$result=$idconnect->query("SELECT phpbg_clubs.nom, phpbg_equipes.id_club, phpbg_equipes.id_champ FROM phpbg_equipes, phpbg_clubs where phpbg_clubs.id=phpbg_equipes.id_club AND phpbg_equipes.id='$equipe'");
//$result=mysql_query($query);
while ($row=mysqli_fetch_array($result))
{
  $row[0] = stripslashes($row[0]);
  $nom_equipe=$row[0];
  $champ=$row[2];
}


//on détermine le nombre d'équipes
$result=$idconnect->query("SELECT phpbg_equipes.id FROM phpbg_equipes, phpbg_clubs WHERE id_champ='$champ' AND phpbg_equipes.id_club=phpbg_clubs.id AND phpbg_clubs.nom!='exempte'");
//$result=mysql_query($query);
$nb_equipes=mysqli_num_rows($result)+1;

// on détermine la dernière journee jouée
$result=$idconnect->query("SELECT max(phpbg_journees.numero) FROM phpbg_journees, phpbg_matchs where phpbg_journees.id=phpbg_matchs.id_journee and buts_dom is not NULL AND phpbg_journees.id_champ='$champ'");
//$result=mysql_query($query);
while ($row=mysqli_fetch_array($result)){$fin=$row[0];}

// On détermine le nombre de journée total
$result=$idconnect->query("SELECT id FROM phpbg_journees WHERE id_champ='$champ'");
//$result=mysql_query($query);
$nb_journees=mysqli_num_rows($result);

// On déterrmine l'année et le nom de la division
$result=$idconnect->query("SELECT phpbg_saisons.annee, phpbg_divisions.nom FROM phpbg_saisons, phpbg_divisions, phpbg_championnats where phpbg_championnats.id=$champ AND phpbg_divisions.id=phpbg_championnats.id_division and phpbg_championnats.id_saison=phpbg_saisons.id");
//$result=mysql_query($query);

while ($row=mysqli_fetch_array($result)){$annee=($row[0]+1); $nom_champ="$row[1] $row[0]/$annee";}

$largeur=500;
$hauteur=250;
$marge_gauche=10;
$marge_haut=10;

Header("Content-type: image/png");

$image = ImageCreate($largeur+40,$hauteur+40+$marge_haut);
$rouge = ImageColorAllocate($image,255,0,0);
$vert = ImageColorAllocate($image,0,106,54);
$bleu = ImageColorAllocate($image,0,0,255);
$blanc = ImageColorAllocate($image,255,255,255);
$noir = ImageColorAllocate($image,0,0,0);
$gris = ImageColorAllocate($image,150,150,150);


ImageFilledRectangle($image,0,0,$largeur+40,$hauteur+40+$marge_haut,$blanc);
ImageFilledRectangle($image,20+$marge_gauche,10+$marge_haut,20+$marge_gauche,$hauteur+5+$marge_haut,$noir); // trait vertical à gauche
//$titre = "Evolution du classement de $nom_equipe ($nom_champ)";
$titre ="";
$titrePolice = 4;
imageString($image, $titrePolice, ($largeur+40+$marge_gauche-ImageFontWidth($titrePolice)*strlen($titre))/2, 0, $titre, $noir); // titre


$y=1;

while ($y<=$nb_journees)
{
if (!($y%2)==0)
{
$titre = $y;
$titrePolice = 2;
imageString($image, $titrePolice, ($y-1)*($largeur)/$nb_journees+$marge_gauche+20, $hauteur+$marge_haut, $titre, $noir); // numérotation journées
$y++;
}
else {$y++;}
}

$x=$hauteur/$nb_equipes;
$y=1;
while ($x<=$hauteur)
{
ImageFilledRectangle($image,$marge_gauche+15,$x+ $marge_haut,$largeur+15,$x+$marge_haut,$noir); // traits par place

$titre = $y;
$titrePolice = "2";
if ($y<$nb_equipes){ImageString($image, $titrePolice, $marge_gauche+1, $x-8+$marge_haut, $titre, $noir);} // numérotation place
$x=$x+($hauteur/$nb_equipes);
$y++;
}

$requete_sql = "SELECT classement FROM phpbg_clmnt_graph WHERE id_equipe='$equipe' ORDER BY fin";
$resultat_requete = mysql_query($requete_sql);

$x=$marge_gauche+20; //pas nb equipes !
$i=0;
$points=0;
$place=0;
$place=array();
$points=array();
while($colonne=mysql_fetch_array($resultat_requete))
{
        $place[$i] = $colonne['classement'];
	$points[$i][0] = $x;
	$points[$i][1] = $hauteur+$marge_haut-($nb_equipes-$colonne['classement'])*$hauteur/$nb_equipes;
	$x+= ($largeur-$marge_gauche+11)/$nb_journees;
	$titrePolice=2;

	$i++;
}

for($i=0;$i<$fin-1;$i++){ImageLine($image, $points[$i][0],$points[$i][1],$points[$i+1][0],$points[$i+1][1],$rouge);}



for($i=0;$i<$fin;$i++)
{
        if (!isset($place[$i+1])){imageString($image, $titrePolice, $points[$i][0],$points[$i][1] , $place[$i], $rouge);}

	elseif ($place[$i+1]<=$place[$i]){imageString($image, $titrePolice, $points[$i][0],$points[$i][1] , $place[$i], $rouge);}

	elseif ($place[$i+1]>$place[$i]){imageString($image, $titrePolice, $points[$i][0],$points[$i][1]-11 , $place[$i], $rouge);}
	else {imageString($image, $titrePolice, $points[$i][0], $points[$i][1], $place[$i], $rouge);}
}




$titre = "";
$titrePolice = 4;
imageString($image, $titrePolice, ($largeur+$marge_gauche-ImageFontWidth($titrePolice)*strlen($titre))/2, $hauteur+30, $titre, $vert);

ImagePNG($image);
ImageDestroy($image);

?>
