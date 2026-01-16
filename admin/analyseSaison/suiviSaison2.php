<?php
if (isset($_GET['suiviLigue'])) $suiviLigue = $_GET['suiviLigue'];
else  $suiviLigue = "suiviChampFranceOCC";
if (isset($_GET['idComite'])) $idComite = $_GET['idComite'];
else  $idComite = "0";
if (isset($_GET['mode'])) $mode = $_GET['mode'];
//echo "idComite :".$idComite;

/*
if ($idComite  == 0) {
switch (substr($suiviLigue, -3)) {
case "ARA";
    $nomLigue  = "AUVERGNE RHONE ALPES";
case "BFC";
    $nomLigue  = "BOURGOGNE FRANCHE COMTE";
case "BRE";
    $nomLigue  = "BRETAGNE";
case "CVL";
    $nomLigue  = "CENTRE VAL DE LOIRE";
case "GES";
    $nomLigue  = "GRAND EST";
case "HDF";
    $nomLigue  = "HAUTS DE FRANCE";
case "IDF";
    $nomLigue  = "ILE DE FRANCE";
case "NOR";
    $nomLigue  = "NORMANDIE";
case "NAQ";
    $nomLigue  = "NOUVELLE AQUITAINE";
case "OCC";
    $nomLigue  = "OCCITANIE";
case "PDL";
    $nomLigue  = "PAYS DE LA LOIRE";
case "PCA";
    $nomLigue  = "PROVENCE ALPES COTE D'AZUR";
}
}
else {

switch ($idComite) {
// Auvergne Rhone Alpes
case "1010";
$nomLigue  = "ALPES";
case "1013";
$nomLigue  = "AUVERGNE";
case "1022";
$nomLigue  = "DROME ARDECHE";
case "1028";
$nomLigue  = "LYONNAIS";
// Nouvelle Aquitaine
case "1914";
$nomLigue  = "BEARN";
case "1919";
$nomLigue  = "COTE BASQUE LANDES";
case "2020";
$nomLigue  = "COTE D'ARGENT";
case "2027";
$nomLigue  = "LIMOUSIN";
case "1932";
$nomLigue  = "PERIGORD AGENAIS";
case "1933";
$nomLigue  = "POITOU CHARENTE";
// Occitanie
case "2012";
$nomLigue  = "ARMAGNAC BIGORRE";
case "2026";
$nomLigue  = "LANGUEDOC";
case "2029";
$nomLigue  = "MIDI PYRENEES";
case "2035";
$nomLigue  = "PAYS CATALAN";
}
}

*/



if ($idComite  == 0) {
    if (substr($suiviLigue, -3) == "ARA")
        $nomLigue  = "AUVERGNE RHONE ALPES";
    elseif (substr($suiviLigue, -3) == "BFC")
        $nomLigue  = "BOURGOGNE FRANCHE COMTE";
    elseif (substr($suiviLigue, -3) == "BRE")
        $nomLigue  = "BRETAGNE";
    elseif (substr($suiviLigue, -3) == "CVL")
        $nomLigue  = "CENTRE VAL DE LOIRE";
    elseif (substr($suiviLigue, -3) == "GES")
        $nomLigue  = "GRAND EST";
    elseif (substr($suiviLigue, -3) == "HDF")
        $nomLigue  = "HAUTS DE FRANCE";
    elseif (substr($suiviLigue, -3) == "IDF")
        $nomLigue  = "ILE DE FRANCE";
    elseif (substr($suiviLigue, -3) == "NOR")
        $nomLigue  = "NORMANDIE";
    elseif (substr($suiviLigue, -3) == "NAQ")
        $nomLigue  = "NOUVELLE AQUITAINE";
    elseif (substr($suiviLigue, -3) == "OCC")
        $nomLigue  = "OCCITANIE";
    elseif (substr($suiviLigue, -3) == "PDL")
        $nomLigue  = "PAYS DE LA LOIRE";
    elseif (substr($suiviLigue, -3) == "PCA")
        $nomLigue  = "PROVENCE ALPES COTE D'AZUR";
} else {

/*
    switch ($idComite) {
        // Auvergne Rhone Alpes
        case "1010";
            $nomLigue  = "ALPES";
        case "1013";
            $nomLigue  = "AUVERGNE";
        case "1022";
            $nomLigue  = "DROME ARDECHE";
        case "1028";
            $nomLigue  = "LYONNAIS";
            // Nouvelle Aquitaine
        case "1914";
            $nomLigue  = "BEARN";
        case "1919";
            $nomLigue  = "COTE BASQUE LANDES";
        case "2020";
            $nomLigue  = "COTE D'ARGENT";
        case "2027";
            $nomLigue  = "LIMOUSIN";
        case "1932";
            $nomLigue  = "PERIGORD AGENAIS";
        case "1933";
            $nomLigue  = "POITOU CHARENTE";
            // Occitanie
        case "2012";
            $nomLigue  = "ARMAGNAC BIGORRE";
        case "2026";
            $nomLigue  = "LANGUEDOC";
        case "2029";
            $nomLigue  = "MIDI PYRENEES";
        case "2035";
            $nomLigue  = "PAYS CATALAN";
    }
    */

// Auvergne Rhone Alpes
    if ($idComite == "1010")
    $nomLigue  = "ALPES";
elseif ($idComite == "1013")
    $nomLigue  = "AUVERGNE";
elseif ($idComite == "1022")
    $nomLigue  = "DROME ARDECHE";
elseif ($idComite == "1028")
    $nomLigue  = "LYONNAIS";
// Nouvelle Aquitaine
elseif ($idComite == "1914")
    $nomLigue  = "BEARN";
elseif ($idComite == "1919")
    $nomLigue  = "COTE BASQUE LANDES";
elseif ($idComite == "1920")
    $nomLigue  = "COTE D'ARGENT";
elseif ($idComite == "1927")
    $nomLigue  = "LIMOUSIN";
elseif ($idComite == "1932")
    $nomLigue  = "PERIGORD AGENAIS";
elseif ($idComite == "1933")
    $nomLigue  = "POITOU CHARENTE";
// Occitanie
elseif ($idComite == "2012")
    $nomLigue  = "ARMAGNAC BIGORRE";
elseif ($idComite == "2026")
    $nomLigue  = "LANGUEDOC";
elseif ($idComite == "2029")
    $nomLigue  = "MIDI PYRENEES";
elseif ($idComite == "2035")
    $nomLigue  = "PAYS CATALAN";
    
}

?>
<script>
    function MM_jumpMenu(targ, selObj, restore) { //v3.0
        eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
        if (restore) selObj.selectedIndex = 0;
    }
</script>

<body>

    <?php
    if ($mode == "smart")
        $adresse = "/smart/smartPage.php?page=actualites2&mode=smart&suiviLigue=";
    else
        $adresse = "../../dossiers/actualites/pagesSuiviChampFrance.php?suiviLigue=";
   
        echo "<br>";
        echo "<br>";
   
   
   
  
   ?>


    <fieldset class="fieldsetG">
        <legend class="legendG">
            Suivi des équipes engagées en championnats  <br>de france 2025 par ligue </legend><br>
        <select class="inputGG" name="select" onChange="MM_jumpMenu('parent',this,0)" size="1" title="Recherche par ligue">
            <option selected>Par ligue</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceARA">Auvergne Rhône Alpes</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceBFC">Bourgogne Franche Comté</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceBRE">Bretagne</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceCVL">Centre Val de Loire</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceGES">Grand Est</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceHDF">Hauts de France</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceIDF">Ile de France</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceNOR">Normandie</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceNAQ">Nouvelle Aquitaine</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceOCC">Occitanie</option>
            <option value="<?php echo $adresse; ?>suiviChampFrancePDL">Pays de la Loire</option>
            <option value="<?php echo $adresse; ?>suiviChampFrancePCA">Provence Alpes Côte d'Azur</option>
        </select>
    </fieldset>
    <br>
    <br>
    <fieldset class="fieldsetA">
        <legend class="legendG">
            Suivi des équipes des anciens comités territoriaux <br> engagées en championnats de france 2025 </legend> <br>
        <select class="inputG" name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1" title="Recherche par comité">
            <option value="<?php echo $adresse; ?>suiviChampFranceARA">AUVERGNE RHONE ALPES</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceARA&idComite=1010">Alpes</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceARA&idComite=1013">Auvergne</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceARA&idComite=1022">Drôme Ardèche</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceARA&idComite=1028">Lyonnais</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceNAQ">NOUVELLE AQUITAINE</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceNAQ&idComite=1914">Béarn</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceNAQ&idComite=1919">Côte Basque Landes</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceNAQ&idComite=1920">Côte d'Argent</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceNAQ&idComite=1927">Limousin</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceNAQ&idComite=1932">Périgord Agenais</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceNAQ&idComite=1933">Poitou Charente</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceOCC">OCCITANIE</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceOCC&idComite=2012">Armagnac Bigorre</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceOCC&idComite=2026">Languedoc</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceOCC&idComite=2029">Midi Pyrénées</option>
            <option value="<?php echo $adresse; ?>suiviChampFranceOCC&idComite=2035">Pays Catalan</option>
        </select>
    </fieldset>





    <?php
   
  
 require '../../admin/analyseSaison/tableauxChampionsRegionaux.php'; 
  
    echo "<br>";
    echo "<br>";
    if ($idComite == 0) {
if ($mode =="smart") 
        {echo "<p class=\"size4 bold center\">";}
else
{echo "<p class=\"size5 bold center\">";}

        echo "Suivi des équipes de la ligue" . "<br>" . $nomLigue . "<br>" . " engagées en champ de France"."</p>";
        echo "<br>";
    } else {

        if ($mode =="smart") 
        {echo "<p class=\"size4 bold center\">";}
else
        {echo "<p class=\"size5 bold center\">" ;}
        echo "Suivi des équipes de l'ancien comité territorial " . "<br>" . $nomLigue . "<br>" . " engagées en champ de France"."</p>";
    echo "<br>";
    }

    if ($mode == "smart")
        require('../connect/connexion1.php');
    else
        require('../../connect/connexion1.php');

    affichageCompetitions("Compétitions Séniors");
    $listeDivisions = array('110', '120', '130', '135', '140', '150', '160', '170', '180', '190');

    foreach ($listeDivisions as $idDivision) {
        constructionDuTableau($idDivision, $idComite, $suiviLigue, $bdd);
        affichageNomDivision($nb_equipe, $idDivision, $bdd);
        affichage($nb_equipe, $tabParcours, $tabIdClub, $mode, $bdd);
    }
    echo "<br>"."<br>";

    affichageCompetitions("Compétitions Féminines");
    $listeDivisions = array('280', '285', '290', '295'); 

    foreach ($listeDivisions as $idDivision) {
        constructionDuTableau($idDivision, $idComite, $suiviLigue, $bdd);
        affichageNomDivision($nb_equipe, $idDivision, $bdd);
        affichage($nb_equipe, $tabParcours, $tabIdClub, $mode, $bdd);
    }
    echo "<br>"."<br>";

    affichageCompetitions("Compétitions Réserves");
    $listeDivisions = array('250', '260', '270', '9180'); 

    foreach ($listeDivisions as $idDivision) {
        constructionDuTableau($idDivision, $idComite, $suiviLigue, $bdd);
        affichageNomDivision($nb_equipe, $idDivision, $bdd);
        affichage($nb_equipe, $tabParcours, $tabIdClub, $mode, $bdd);
    }
    echo "<br>"."<br>";

    affichageCompetitions("Compétitions Espoirs et Jeunes");
    $listeDivisions = array('225', '235', '245', '365', '360', '370', '325', '330'); 
    foreach ($listeDivisions as $idDivision) {
        constructionDuTableau($idDivision, $idComite, $suiviLigue, $bdd);
        affichageNomDivision($nb_equipe, $idDivision, $bdd);
        affichage($nb_equipe, $tabParcours, $tabIdClub, $mode, $bdd);
    }
    echo "<br>"."<br>";

    /**************************  FONCTIONS  *********************************** */
    function affichageCompetitions($competition)
    {
        echo "<table width=\"90%\" border=\"1\" cellspacing=\"0\" bordercolor=\"#000000\" align=\"center\">";
        echo "<tr>";
        echo "<td colspan=\"2\" bgcolor=\"#FFCC33\" align=\"center\">";
        echo " <font size=\"5\">" . "<b>" . $competition  . "<b>" .  "</font>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    }

    function nomEquipe($equipeLigue, $bdd)
    {
        $reponse = $bdd->query("SELECT nom_1
                                  FROM bdclubs
                                  WHERE id = $equipeLigue");
        while ($row = $reponse->fetch()) {
            echo $row[0];
        }
    }

    function affichageNomDivision($nb_equipe, $idDivision, $bdd)
    {
        if ($nb_equipe[0] > 0) {
    ?>
            <table width="90%" border="1" align="center">
                <tr>
                    <td colspan="2" style="font-weight: bold; font-size: 25px"  align="center">
                        <?php echo  nomdivision($idDivision, $bdd); ?>
                    </td>
                </tr>
            </table>
        <?php
        }
    }

    function nomdivision($idDivision, $bdd)
    {
        $reponse = $bdd->query("SELECT division
                                  FROM bddivisions
                                  WHERE id = '$idDivision' and actif='1'");
        while ($row = $reponse->fetch()) {
            echo $row[0];
        }
    }

    function constructionDuTableau($idDivision, $idComite, $suiviLigue, $bdd)
    {

        global $nb_equipe, $tabDivision, $tabParcours, $tabIdClub, $tabMontee;

        $tabDivision = array();
        $tabParcours = array();
        $tabIdClub = array();
        $tabMontee = array();

        if ($idComite == 0) {
            $reponse = $bdd->query(" SELECT COUNT(*)
                FROM $suiviLigue
                WHERE division = $idDivision 
                ");

            $nb_equipe = $reponse->fetch();

            $reponse = $bdd->query(" SELECT division, parcours, idclub, montee
                            FROM $suiviLigue
                            WHERE division = '$idDivision' ");
        } else {
            $reponse = $bdd->query(" SELECT COUNT(*)
                FROM $suiviLigue
                WHERE division = $idDivision and idClub LIKE '%$idComite%'
                ");

            $nb_equipe = $reponse->fetch();

            $reponse = $bdd->query(" SELECT division, parcours, idclub, montee
                            FROM $suiviLigue
                            WHERE division = '$idDivision' and idClub LIKE '%$idComite%'");
        }

        while ($row = $reponse->fetch()) {
            $tabDivision[] = $row[0];
            $tabParcours[] = $row[1];
            $tabIdClub[] = $row[2];
            $tabMontee[] = $row[3];
        }
    }

    function affichage($nb_equipe, $tabParcours, $tabIdClub, $mode, $bdd)
    {
        echo    "<table width=\"90%\" border=\"1\" align=\"center\">";
        for ($i = 0; $i < $nb_equipe[0]; $i++) {
        ?>
            <tr style ="font-family: Arial, Helvetica, sans-serif">
                <td width="50%" align="center">
                    <?php
                    if ($tabParcours[$i] == "Champion de France" or  $tabParcours[$i] == "Vice champion de France") {
                        echo " <font color=\"#000000\" face=\"Arial, Helvetica, sans-serif\">";
                        echo "<b>";
                        echo $tabParcours[$i];
                        echo "</b>";
                        echo  "</font>";
                    } else {
                        echo " <font color=\"#FF0000\" face=\"Arial, Helvetica, sans-serif\">";
                         if ($mode == "smart") { 
                         echo substr($tabParcours[$i],0,strlen($tabParcours[$i])-10);
                        } else echo $tabParcours[$i];
                        echo  "</font>";
                    } ?> </td>

                <td width="50%" align="center" <?php if ($tabParcours[$i] == "Champion de France") echo "bgcolor=\"#009900\"";   ?>>
                    <?php
                    if ($tabParcours[$i] == "Champion de France") {
                        echo " <font color=\"#FFFFFF\" face=\"Arial, Helvetica, sans-serif\"> ";
                        echo "<b>";
                        nomEquipe($tabIdClub[$i], $bdd);
                        echo "</b>";
                        echo  "</font>";
                    } else if ($tabParcours[$i] == "Vice champion de France") {
                        echo " <font color=\"#009900\" face=\"Arial, Helvetica, sans-serif\">";
                        echo "<b>";
                        nomEquipe($tabIdClub[$i], $bdd);
                        echo "</b>";
                        echo  "</font>";
                    } else if ($tabParcours[$i] == " ") {
                        echo "<b>";
                        nomEquipe($tabIdClub[$i], $bdd);
                        echo "</b>";
                    } else
                        nomEquipe($tabIdClub[$i], $bdd);
                    ?>
                </td>
            </tr>
    <?php
        }
        echo "</table>";
    }

    ?>

    <style>




    </style>