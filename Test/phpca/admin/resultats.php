<?php
if (empty($numero)) {

  $resultats = $idconnect->query("  SELECT max(phpca_journees.numero) 
								  from phpca_journees, phpca_matchs 
								  where phpca_journees.id=phpca_matchs.id_journee 
								  and buts_dom is not NULL 
								  and phpca_journees.id_champ='$champ'");

 

while ($row = mysqli_fetch_array($resultats)) {
    $numero = $row[0];
  }
  if ($numero == "") {
    $numero = "1";
  }
}
if (empty($numero)) { $numero = 1;}

echo "numero : ".$numero; echo "<br />";
echo "championnat : ".$champ; echo "<br />";
$journee = $champ*100 + $numero;
echo "journée : ".$journee;echo "<br />";



$resultats = $idconnect->query("  SELECT COUNT(*)
								  from phpca_matchs 
								  where id_journee = '$journee'");

while($row= mysqli_fetch_array($resultats))
     {
$nbreMatchParJournee[] = $row[0];
	 }

$nbreDeMatchs = $nbreMatchParJournee[0];
//$int = (int)$nbr;
$nbreDeMatchs = (int)$nbreDeMatchs;
var_dump($nbreDeMatchs);
echo "nbre de matchs : ".$nbreDeMatchs; echo "<br />";
echo "---------------------------------------------"; echo "<br />";
  $points_prono_exact=4;
/***********************************/

for ($i = 0; $i < $nbreDeMatchs ; $i++) {

//echo "date FR : ".$date_reelle[$i];echo "<br />";

$dateJM[$i] = explode("/", $date_reelle[$i]);

//  TRAITEMENT 1
//jour
$date_jour[$i]= $dateJM[$i][0];
// echo "jour : ".$date_jour[$i];echo "<br />";

//mois
$date_mois[$i]= $dateJM[$i][1];
//  echo "mois : ". $date_mois[$i];echo "<br />";

//annee + heure
$date_annee_heure [$i]= $dateJM[$i][2];
//echo  "annee + heure : ".$date_annee_heure[$i];echo "<br />";

//  TRAITEMENT 2

$dateAHMS[$i]  =  explode(" ", $date_annee_heure[$i]); 

// annee
$date_annee[$i]= $dateAHMS[$i][0];
//echo "annee : ". $date_annee[$i];echo "<br />";

// heure
$date_heure[$i]= $dateAHMS[$i][1];
//echo "heures : ". $date_heure[$i];echo "<br />";

echo "<br />";


  $dateUSA[$i] = $date_annee[$i] . '-' . $date_mois[$i] . '-' . $date_jour[$i] . ' ' . $date_heure[$i];
//echo $dateUSA[$i];echo "<br />";

  if (!(($butd[$i] == '') or ($butv[$i] == ''))) {
  
   echo "Traitement des scores"; echo "<br />";
    mysqli_query($idconnect, ("UPDATE phpca_matchs  
                               SET buts_dom ='$butd[$i]', buts_ext='$butv[$i]', date_reelle='$dateUSA[$i]'
                               WHERE id='$matchs_id[$i]'"));
 
   mysqli_query($idconnect, ("UPDATE phpca_pronostics  
                              SET buts_dom='$butd[$i]',     buts_ext='$butv[$i]'
                              WHERE id_match='$matchs_id[$i]'"));

    echo "MAJ en table effectuée"    ;echo "<br />";                      
   /////***************************************************/******************** */ */
   
   echo "Scores : ".$matchs_id[$i]." : ".$butd[$i]. "- ".$butv[$i];echo "<br />";
   echo "matchs_id[$i]".$matchs_id[$i]; echo "<br>";
  

   /* A verifier l'interet de cette requete
   $requete3=$idconnect->query("SELECT pronostic
                                FROM phpca_pronostics 
                                WHERE id_match='$matchs_id[$i]'");
            while ($row=mysqli_fetch_array($requete3))
           {
              $pronosticfait = $row[0];
           }  
*/
echo "<br>";echo "<br>";


echo "<br>";echo "<br>";
//count du nombre de pronostiqueurs


/*
$requete = $idconnect->query("SELECT COUNT(id_match) 	
			                        FROM phpca_pronostics 											   
                              WHERE id_match='$matchs_id[$i]'");
                               

echo $matchs_id[$i];echo "<br>";
while($row= mysqli_fetch_array($requete))
{$nb_de_pronostiqueurs[]= $row[0];}echo $nb_de_pronostiqueurs[0] ." pronostiqueurs";echo "<br>";
*/


  
   
 
 echo "debut : ".$matchs_id[$i];
 $tabParieurs = array();
 
 
 $requete2=$idconnect->query("SELECT pronostic, id_membre 
                                FROM phpca_pronostics 
                                WHERE id_match='$matchs_id[$i]'");
            while ($row=mysqli_fetch_array($requete2))
                                 {  
                                    $tabParieurs[] = $row[1];
                                }  


echo "<br>";
foreach ($tabParieurs as $parieur) {
 echo "-------------------";echo "<br>";
echo "parieur :".$parieur; echo "<br>";
echo "-------------------";echo "<br>";



$requete2=$idconnect->query("SELECT pronostic
                                FROM phpca_pronostics 
                                WHERE id_match='$matchs_id[$i]' and id_membre = '$parieur' ");
            while ($row=mysqli_fetch_array($requete2))
                                 {  $prono = $row[0];
                                   
                                }  
echo "---------zz----------";echo "<br>";
echo "prono : ".$prono;echo "<br>";
echo "---------zz----------";echo "<br>";

                             

 //cas d'un pronostic exact d'une victoire
   if ($butd[$i] > $butv[$i] & $prono == "1") {
    echo "prono victoire ok";
          mysqli_query($idconnect,"UPDATE phpca_pronostics 
                                   SET points = '$points_prono_exact', participation='1' 
                                   WHERE id_match = '$matchs_id[$i]' and id_membre = '$parieur' "); }
  //cas d'un pronostic exact d'un null
   elseif ($butd[$i] == $butv[$i] & $prono == "N")  {
    echo "prono null ok";
           mysqli_query($idconnect,"UPDATE phpca_pronostics 
                                    SET points = '$points_prono_exact', participation='1' 
                                    WHERE id_match = '$matchs_id[$i]' and id_membre = '$parieur' ");}
//cas d'un pronostic exact d'une défaite
   elseif ($butd[$i] < $butv[$i] & $prono == "2")  {
    echo "prono defaite ok";
          mysqli_query($idconnect,"UPDATE phpca_pronostics 
                                   SET points = '$points_prono_exact', participation='1' 
                                   WHERE id_match = '$matchs_id[$i]' and id_membre = '$parieur'");}
//cas non null
  elseif ($prono != NULL) { 
   // else { 
 echo "prono echec : O point";
          mysqli_query($idconnect,"UPDATE phpca_pronostics 
                                   SET points = '0', participation = '1'
                                   WHERE id_match = '$matchs_id[$i]'and id_membre = '$parieur' ");}
         
  echo "<br />";

   /********************************************************************* */
  }
  } elseif (($butv[$i] == '') or ($butd[$i] == '')) {
    echo "Absences de scores" . "<br />"; echo "<br />";

    mysqli_query($idconnect, ("UPDATE phpca_matchs 
					SET buts_dom = NULL, buts_ext = NULL,  date_reelle='$dateUSA[$i]'
          WHERE id ='$matchs_id[$i]' "));

          mysqli_query($idconnect, ("UPDATE phpca_pronostics  
    SET buts_dom = NULL,     buts_ext = NULL
    WHERE id_match='$matchs_id[$i]'"));


  }
   
}
?>

<table class=phpca width="80%">
  <tr>
    <td class=phpca2 align="center" colspan="3">
      <?php echo ADMIN_RESULTS_TITRE . " ";
      affich_champ($champ, $idconnect); ?>
    </td>
  </tr>
  <tr>
    <td align="center">
      <?php journees($champ, $numero, $action, $idconnect); ?><br /><br />
    </td>
  </tr>
  <tr>
    <td>
      <table align=center cellspacing="0" width="100%">
        <form method="post" action="">
          <?php resultats($champ, $numero, $idconnect); ?>
        </form>
    </td>
  </tr>
</table>
<br /><br />