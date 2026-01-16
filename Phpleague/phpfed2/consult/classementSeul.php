<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>resultats</title>
</head>
<body>
<?php

include ("avant.php");
require ("../config.php") ;
require ("../consult/fonctions_matchsSmart.php");

ouverture ();



if (!isset($_GET['champ']))
   {
    $value=GENERAL;
    demande_champ ($idconnect);
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
?>
  
  
<?php
$class=0;
$lien="oui";
if (isset($type))
{

  // $idconnect=@mysqli_connect('sql.franceserv.fr','onepip-france','lavelan09','onepip-france-db3');	
   $res=$idconnect->query("SELECT accession, barrage, estimation, relegation, id_equipe_fetiche, fiches_clubs
                         FROM phpfed2_parametres
                         WHERE id_champ='$champ'");
    $row=mysqli_fetch_array($res);

    $accession = $row['accession'];
    $barrage = $row['barrage'] + $accession;
    $estimation = $row['estimation'];
    $fiches_clubs = $row['fiches_clubs'];
    $id_equipe_fetiche=$row['id_equipe_fetiche'];
    
    $res2=$idconnect->query("SELECT phpfed2_equipes.id FROM phpfed2_equipes, phpfed2_clubs
							WHERE phpfed2_clubs.id=phpfed2_equipes.id_club 
							AND id_champ='$champ'
							AND phpfed2_clubs.nom='exempte'");
    //$resultats=mysql_query($requete) or die (mysql_error());
    $exempte=mysqli_num_rows($res2);
    if ($exempte=='1') {$relegation = $nb_equipe - $row['relegation']-1;}
    else {$relegation = $nb_equipe - $row['relegation'];}
    
if ($debut=="1" and $fin==$nb_journees)
{
  
  
   $res3=$idconnect->query("SELECT max(phpfed2_journees.numero) 
						    FROM phpfed2_journees, phpfed2_matchs 
						    WHERE phpfed2_journees.id=phpfed2_matchs.id_journee 
						    and buts_dom is not NULL 
						    and phpfed2_journees.id_champ='$champ'");
    //$result=mysql_query($query) or die (mysql_error());
        while ($row=mysqli_fetch_array($res3))
        {
        $numero=$row[0];
        }
		//echo "journee: ".$numero;
    ?>

<?php
    //affiche la journée
	//if (!empty($numero)) {aff_journee($champ, $numero, CONSULT_CLMNT_MSG6, 0, $fiches_clubs, $id_equipe_fetiche);}
	//else
	// 							{aff_journee($champ, $numero+1, CONSULT_CLMNT_MSG62, 0, $fiches_clubs, $id_equipe_fetiche);}

   }


if (isset ($legende)) $legende =$legende;else $legende= "";
if ($debut=="1" and $fin==$nb_journees)
{
    $requete=$idconnect->query("SELECT DISTINCT * 
								FROM phpfed2_clmnt_cache 
								WHERE ID_CHAMP='$champ' 
								ORDER BY POINTS DESC, PEN DESC, DIFF DESC, BUTSPOUR DESC , BUTSCONTRE 
								ASC, NOM");
  
   clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche, $idconnect)
    ?>

<?php
    

    

 }


}

?>
</BODY>
</HTML>
