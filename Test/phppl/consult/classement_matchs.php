<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>resultats</title>
</head>
<body>
<?php

include ("avant.php");
require ("../config.php") ;
require ("../data_connect.php") ;
require ("fonctions_matchs.php");

ouverture();



if (!isset($_GET['champ']))
   {
    $value=GENERAL;
    demande_champ ();
   }
else
{
$champ=$_GET['champ'];
$nb_equipe = nb_equipes($champ, $idconnect);
$nb_journees=($nb_equipe*2)-2;

if (isset($_GET['debut'])) {$debut=$_GET['debut'];} else {$debut='1';}
if (isset($_GET['fin'])) {$fin=$_GET['fin'];} else {$fin=($nb_equipe*2)-2;}
if (isset($_GET['type'])) {$type=$_GET['type'];} else {$type=GENERAL;}
}

$class=0;
$lien="oui";
if (isset($type))
{
  	
   $res=$idconnect->query("SELECT accession, barrage, estimation, relegation, id_equipe_fetiche, fiches_clubs
                         FROM phppl_parametres
                         WHERE id_champ='$champ'");
   $row=mysqli_fetch_array($res);
	
    $accession = $row['accession'];
    $barrage = $row['barrage'] + $accession;
    $estimation = $row['estimation'];
    $fiches_clubs = $row['fiches_clubs'];
    $id_equipe_fetiche=$row['id_equipe_fetiche'];
    
    $res2=$idconnect->query("SELECT phppl_equipes.id FROM phppl_equipes, phppl_clubs
							WHERE phppl_clubs.id=phppl_equipes.id_club 
							AND id_champ='$champ'
							AND phppl_clubs.nom='exempte'");
    //$resultats=mysql_query($requete) or die (mysql_error());
    $exempte=mysqli_num_rows($res2);
    if ($exempte=='1') {$relegation = $nb_equipe - $row['relegation']-1;}
    else {$relegation = $nb_equipe - $row['relegation'];}
    
if ($debut=="1" and $fin==$nb_journees)
{
  
  
   $res3=$idconnect->query("SELECT max(phppl_journees.numero) FROM phppl_journees, phppl_matchs WHERE phppl_journees.id=phppl_matchs.id_journee and buts_dom is not NULL and     phppl_journees.id_champ='$champ'");
    //$result=mysql_query($query) or die (mysql_error());
        while ($row=mysqli_fetch_array($res3))
        {
        $numero=$row[0];
        }
		//echo "journee: ".$numero;

    //affiche la journée
	if (!empty($numero)) {aff_journee($champ, $numero, CONSULT_CLMNT_MSG6, 0, $fiches_clubs, $id_equipe_fetiche, $idconnect);}
	else
	 							{aff_journee($champ, $numero+1, CONSULT_CLMNT_MSG62, 0, $fiches_clubs, $id_equipe_fetiche, $idconnect);}

   }


if (isset ($legende)) $legende =$legende;else $legende= "";
if ($debut=="1" and $fin==$nb_journees)
{
    $requete=$idconnect->query("SELECT DISTINCT * 
								FROM phppl_clmnt_cache 
								WHERE ID_CHAMP='$champ' 
								ORDER BY POINTS DESC, PEN DESC, DIFF DESC, BUTSPOUR DESC , BUTSCONTRE 
								ASC, NOM");
  
   clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche, $idconnect);


 }
}

?>
</BODY>
</HTML>
