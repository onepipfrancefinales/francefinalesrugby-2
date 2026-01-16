<?php
//***********************************************************************/
// phpaueague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpaueague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpaueague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

require ("../config.php") ;
ouverture ();

$equipe = $_REQUEST['equipe'];

// On détermine le nom de l'équipe à partir de son id et le championnat
$query="SELECT phpau_clubs.nom, phpau_equipes.id_club, phpau_equipes.id_champ FROM phpau_equipes, phpau_clubs where phpau_clubs.id=phpau_equipes.id_club AND phpau_equipes.id='$equipe'";
$result=mysql_query($query);
while ($row=mysql_fetch_array($result))
{
  $row[0] = stripslashes($row[0]);
  $nom_equipe=$row[0];
  $champ=$row[2];
}


//on détermine le nombre d'équipes
$query="SELECT phpau_equipes.id FROM phpau_equipes, phpau_clubs WHERE id_champ='$champ' AND phpau_equipes.id_club=phpau_clubs.id AND phpau_clubs.nom!='exempte'";
$result=mysql_query($query);
$nb_equipes=mysql_num_rows($result)+1;

// on détermine la dernière journee jouée
$query="SELECT max(phpau_journees.numero) FROM phpau_journees, phpau_matchs where phpau_journees.id=phpau_matchs.id_journee and buts_dom is not NULL AND phpau_journees.id_champ='$champ'";
$result=mysql_query($query);
while ($row=mysql_fetch_array($result)){$fin=$row[0];}

// On détermine le nombre de journée total
$query="SELECT id FROM phpau_journees WHERE id_champ='$champ'";
$result=mysql_query($query);
$nb_journees=mysql_num_rows($result);

// On déterrmine l'année et le nom de la division
$query="SELECT phpau_saisons.annee, phpau_divisions.nom FROM phpau_saisons, phpau_divisions, phpau_championnats where phpau_championnats.id=$champ AND phpau_divisions.id=phpau_championnats.id_division and phpau_championnats.id_saison=phpau_saisons.id";
$result=mysql_query($query);

while ($row=mysql_fetch_array($result)){$annee=($row[0]+1); $nom_champ="$row[1] $row[0]/$annee";}

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
$titre = "Evolution du classement de $nom_equipe ($nom_champ)";
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

$requete_sql = "SELECT classement FROM phpau_clmnt_graph WHERE id_equipe='$equipe' ORDER BY fin";
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
