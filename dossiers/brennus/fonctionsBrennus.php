<?php

function transformerDonnee($donnee, $bdd)
{

    global $nom;

    $requete = $bdd->query("SELECT nom_1
    FROM bdclubs 
    WHERE id = '$donnee'");
    while ($row = $requete->fetch()) {
        $nom = $row[0];
    };
}


function champFrance($bdd)
{
    global
        $nbreLigne,
        $id,  $edition, $saison, $nomDiv, $dateMatch, $champion, $comite1, $finaliste, $comite2,
        $score1, $score2, $scoreplus, $stade, $ville, $public, $com;

    $id = array();
    $edition = array();
    $saison = array();
    $nomDiv = array();
    $dateMatch = array();
    $champion = array();
    $comite1 =  array();
    $finaliste = array();
    $comite2 = array();
    $score1 =  array();
    $score2 = array();
    $scoreplus =  array();
    $stade = array();
    $ville = array();
    $public = array();
    $com = array();


    // nombre de lignes
    $reponse = $bdd->query("SELECT count(id) 
                        FROM brennus_champions");
    while ($row = $reponse->fetch()) {
        $nbreLigne = $row[0];
    };

    $requete = $bdd->query("SELECT *
		                    FROM brennus_champions
		                    WHERE id < '$nbreLigne'
                            ORDER BY id DESC ");

    while ($row = $requete->fetch()) {
        $id[]  = $row[0];
        $edition[]  = $row[1];
        $saison[] = $row[2];
        $nomDiv[] = $row[3];
        $dateMatch[] = $row[4];
        $champion[] = $row[5];
        $comite1[] = $row[6];
        $finaliste[] = $row[7];
        $comite2[] = $row[8];
        $score1[] = $row[9];
        $score2[] = $row[10];
        $scoreplus[] = $row[11];
        $stade[] = $row[12];
        $ville[] = $row[13];
        $public[] = $row[14];
        $com[] = $row[15];

    }
}
function nomStade($id, $bdd){
    global $nomStade;
    $requete = $bdd->query("SELECT stade
    FROM brennus_stades
    WHERE id = '$id'");
    
    while ($row = $requete->fetch()) {
    $nomStade = $row[0];
  
    };
   echo $nomStade;
    }


//********************** */


//nombre d'édition 

function nbreEdition($bdd)
{
    global $nbreEdition;
    $reponse = $bdd->query("SELECT max(edition) 
                        FROM brennus_champions");
    while ($row = $reponse->fetch()) {
        $nbreEdition = $row[0];
    };
}


function villes($bdd)
{

    global $countVilles, $tabVilles;

    //count Villes
    $reponse = $bdd->query("SELECT count(Distinct ville)
                        FROM brennus_stades");
    while ($row = $reponse->fetch()) {
        $countVilles  = $row[0];
    };


    //liste des villes
    global $listeVilles;

    $listeVilles = array();
    $reponse = $bdd->query("SELECT DISTINCT ville
                        FROM brennus_stades  ");
    while ($row = $reponse->fetch()) {
        $listeVilles[] = $row[0];
    };

   






    }







    function countStadesParVille($nomVille2, $bdd)
    {

        global $countStadesParVille;

        $reponse = $bdd->query("SELECT count(stade)
        FROM brennus_stades 
        WHERE ville = '$nomVille2' ");
       
       while ($row = $reponse->fetch()) {
            $countStadesParVille = $row[0]; 
        
        };
    }


    function stadesParVille($nomVille2,$countStadesParVille, $bdd)
    {

        global $stadesParVille;

        $stadesParVille = array();
       
        $reponse2 = $bdd->query("SELECT stade
        FROM brennus_stades 
        WHERE ville = '$nomVille2' ");
        while ($row = $reponse2->fetch()) {
            $stadesParVille[] = $row[0];
        };
       
        for ($j = 0; $j < $countStadesParVille; $j++) {
            echo $stadesParVille[$j] . "<br>";
        }
    }





    function finalesParVille($nomVille, $bdd)
    {

        global $finalesParVille;

        $reponse = $bdd->query("SELECT count(ville)
        FROM brennus_champions 
        WHERE ville = '$nomVille' ");
        while ($row = $reponse->fetch()) {
            $finalesParVille = $row[0]; 
        };
        echo $finalesParVille;
    }






    //***************************** */
    //***************************** */
    /*
 $nomVille = array();
 $countVilles = array();

foreach ($tabVilles as $ville) {
 
$reponse = $bdd->query("SELECT ville, count(ville) 
FROM brennus_champions
WHERE ville = '$ville'");

        while ($row = $reponse->fetch()) {
            $nomVilles[] = $row[0];
            $countVille[] = $row[1];
           
        }
    }  
    

    //  rsort($countVille). $nomVille;
    
   for ($j=0; $j<=$countVilles; $j++)
        {     
            global ${"ville".($j)},  ${"countVille".($j)} ;
        if (isset ($nomVille[$j])) ${"ville".$j} = $nomVille[$j]; else ${"ville".$j}='-';  

        }
   
        for ($i=0; $i<=$countVilles; $i++) {
         //  echo $nomVille[$i].$countVille[$i];echo "<br>";
      ${"ville".$i} =$nomVille[$i];
      ${"countVille".$i} = $countVille[$i];
// $tableau1 = array ($countVille1, $countVille2, $countVille3);

// array_push($tableau1, array($ville1, $ville2, $ville3));
// echo $tableau1[1];

//   echo ${"countVille".$i}.${"ville".$i};echo "<br>";
    }
*/
    /******************************* */
    /*
$test =array ($ville0 => $countVille0, $ville1 => $countVille1, $ville2 => $countVille2,
$ville3 => $countVille3,$ville4 => $countVille4,$ville5 => $countVille5,$ville6 => $countVille6,$ville7 => $countVille7,);
asort($test);
foreach ($test as $key => $val) {
//    echo "$key , $val<br>";
    }
//echo "<br>";
/*********************************** */
    //echo $ville0;
    /*
$tabAnnee = array();

$reponse = $bdd->query("SELECT saison 
FROM brennus_champions
WHERE ville = '$ville0'");

        while ($row = $reponse->fetch()) {
            $tabAnnee[] = $row[0];     
        }

for ($i=0; $i<$countVille0; $i++)
{
 //   echo $tabAnnee[$i]."<br>";
}
 */

/************************************************* */

//liste des stades
function stades($bdd)
{
    global $countStades, $tabStades, $tabVilles;

    //count Stades
    $reponse = $bdd->query("SELECT count(stade)
                        FROM brennus_stades");
    while ($row = $reponse->fetch()) {
        $countStades  = $row[0];
    };




    // liste des stades- villes
    $tabId = array();
    $tabStades = array();
    $tabVilles = array();

    $reponse = $bdd->query("SELECT id,stade, ville
                        FROM brennus_stades
                       ");
    while ($row = $reponse->fetch()) {
        $tabId[] = $row[0];
        $tabStades[] = $row[1];
        $tabVilles[] = $row[2];
    };


    for ($i = 0; $i < $countStades; $i++) {
        //  echo $tabId[$i]. " ".$tabStades[$i]." ".$tabVilles[$i]."<br>";
    }
    /***************************************************************** */

    global $nomStade, $nomVille, $com;
    //   echo $countStades . "<br>";
    for ($i = 0; $i <= $countStades; $i++) {

        $reponse = $bdd->query("SELECT distinct(stades.stade), stades.ville, stades.com
        FROM brennus_champions as champions
        INNER JOIN brennus_stades as stades WHERE stades.id = '$i' ");
        while ($row = $reponse->fetch()) {

            $nomStade[] = $row[0];
            $nomVille[] = $row[1];
            $com[] = $row[2];
        };
    };
}


 function countSaisonsStade($idStade, $bdd)
    {
        global $countSaisonStade;
        $reponse = $bdd->query("SELECT count(stade)
        FROM brennus_champions 
        WHERE stade = '$idStade'");
        while ($row = $reponse->fetch()) {
            $countSaisonStade = $row[0];
        };
        echo $countSaisonStade;
    }



 function listeSaisonsStade($idStade, $countSaisonStade, $bdd)
    {

        global $tabSaisons;
        $tabSaisons = array();

        $reponse = $bdd->query("SELECT saison
        FROM brennus_champions 
        WHERE stade = '$idStade'");
        while ($row = $reponse->fetch()) {
            $tabSaisons[] = $row[0];
        };

        for ($i = 0; $i < $countSaisonStade; $i++) {
            echo  $tabSaisons[$i] . ' - ';
        }
    }


    function test($bdd) {



        global $listeVilles2;

        $listeVilles2 = array();
        $reponse = $bdd->query("SELECT DISTINCT ville
                            FROM brennus_stades  ");
        while ($row = $reponse->fetch()) {
            $listeVilles2[] = $row[0];
        };
      //  echo  $listeVilles2[1];
       
       
   
        $identite = array(
 
            'ville' => ["$listeVilles2[0]","$listeVilles2[1]","$listeVilles2[2]"], 
            'prenom' => 'Hugo', 
            'nbreMatchs' => [25,20,21] ,
            'estEtudiant' => true
        );
       
      //  echo $identite['ville'][0];

      echo $identite['nbreMatchs'][0].$identite['ville'][0]."<br>";
      echo $identite['nbreMatchs'][1].$identite['ville'][1]."<br>";
      echo $identite['nbreMatchs'][2].$identite['ville'][2]."<br>";
      
    //  echo $identite['ville'][0];
     // sort($identite['nbreMatchs']);
       
      //usort($identite, 'triSelonAge');
      
      
      echo $identite['nbreMatchs'][0].$identite['ville'][0]."<br>";
        echo $identite['nbreMatchs'][1].$identite['ville'][1]."<br>";
        echo $identite['nbreMatchs'][2].$identite['ville'][2]."<br>";
       
   
   
   
    }

 