<html>

<head>
        <title>Untitled Document</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../../ligne1.css">

</head>

<?php
if (isset($_GET['division'])) $division = $_GET['division'];
if (isset($_GET['annee'])) $annee = $_GET['annee'];



//(100170,100180,100190,100270,109180)

//(190170,190180,190190,190270,199180)

//(110170,110180,110190,110270,119180)
//(120170,120180,120190,120270,129180)
//(130170,130180,130190,130270,139180)
//(160170,160180,160190,160270,169180)
//(210170,210180,210190,210270,219180)

//(150170,150180,150190,150270,159180)
//(170170,170180,170190,170270,179180)
//(180170,180180,180190,180270,189180)
//(220170,220180,220190,220270,229180)

require '../../connect/connexion6.php';



echo "<h2>"."Auvergne Rhône Alpes"."</h2>";
entete();
recupDatesPF($tabDivision, "au", 10, $annee, $bdd);



echo "<h2>"."Bourgogne"."</h2>";
entete();
recupDatesPF($tabDivision, "pl", 11, $annee, $bdd);


echo "<h2>"."Bretagne"."</h2>";
entete();
recupDatesPF($tabDivision, "pl", 12, $annee, $bdd);


echo "<h2>"."Centre Val de Loire"."</h2>";
entete();
recupDatesPF($tabDivision, "pl", 13, $annee, $bdd);


echo "<h2>"."Grand Est"."</h2>";
entete();
recupDatesPF($tabDivision, "idf", 15, $annee, $bdd);


echo "<h2>"."Hauts de France"."</h2>";
entete();
recupDatesPF($tabDivision, "pl", 16, $annee, $bdd);


echo "<h2>"."Ile de France"."</h2>";
entete();
recupDatesPF($tabDivision, "idf", 17, $annee, $bdd);

echo "<h2>"."Normandie"."</h2>";
entete();
recupDatesPF($tabDivision, "idf", 18, $annee, $bdd);


echo "<h2>"."Nouvelle Aquitaine"."</h2>";
entete();
recupDatesPF($tabDivision, "ca", 19, $annee, $bdd);


echo "<h2>"."Occitanie"."</h2>";
entete();
recupDatesPF($tabDivision, "ab", 20, $annee, $bdd);

echo "<h2>"."Pays de la loire"."</h2>";
entete();
recupDatesPF($tabDivision, "pl", 21, $annee, $bdd);

echo "<h2>"."Provence alpes Côte  d'Azur"."</h2>";
entete();
recupDatesPF($tabDivision, "idf", 22, $annee, $bdd);




function entete()
{
     ?>  
        <table class="backgroundGray" border="1">
        <tr>
                <td class="width100">Divisions</td>
                <td class="width100">Fin champ</td>
                <td class="width100">Seizième</td>
                <td class="width100">Huitième</td>
                <td class="width100">Quart</td>
                <td class="width100">Demi</td>
                <td class="width100">Finale</td>
        </tr>
</table>      

<?php
}


function recupDatesPF($tabDivision, $bddComite, $codeLigue,  $annee, $bdd)
{
       $tabDivision = array($codeLigue*10000+170,$codeLigue*10000+180,$codeLigue*10000+190,$codeLigue*10000+270,$codeLigue*10000+9180
       ,$codeLigue*10000+295,$codeLigue*10000+300);
       
       
        foreach ($tabDivision as $division) {
                $bddComite_pfterr_ld = "php" . $bddComite . "_pfterr_ld";

                $reponse = $bdd->query("SELECT D1600, D8000, D4000, D2000, D1000,finChamp
        FROM $bddComite_pfterr_ld
        WHERE  division = '$division' and annee = '$annee'");


                while ($row = $reponse->fetch()) {
                        $seizieme = $row[0];
                        $huitieme = $row[1];
                        $quart = $row[2];
                        $demi = $row[3];
                        $finale = $row[4];
                        $finChamp =$row[5];
                }

?>
                <table border="1">
                        <tr>
                        <td class="width100"> <?php echo $division; ?></td>       
                        <td class="width100 colorRed bold styleArial"> <?php echo $finChamp; ?></td>
                                <td class="width100"> <?php echo $seizieme; ?></td>
                                <td class="width100"> <?php echo $huitieme; ?></td>
                                <td class="width100"> <?php echo $quart; ?></td>
                                <td class="width100"> <?php echo $demi; ?></td>
                                <td class="width100"> <?php echo $finale; ?></td>
                        </tr>
                </table>
<?php
        }
}
?>