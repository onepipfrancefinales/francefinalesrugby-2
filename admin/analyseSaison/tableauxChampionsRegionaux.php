
<?php
if (isset($_GET['suiviLigue'])) $suiviLigue  = $_GET['suiviLigue'];



//10-ARA
if ($suiviLigue == "suiviChampFranceARA") {
    $nomLigue = "AUVERGNE RHONE ALPES";
 $champR1 ="Saint Flour";
 $champR2 ="Saint Genes Champanelle";
 $champR3 ="Cisternes la Foret";
 $champRX ="En cours";
 $champFED2 ="En cours";
 $champRR1 ="Saint Flour";
 $champRR2 ="Clermont la Plaine";
}

//11-BFC
if ($suiviLigue == "suiviChampFranceBFC") {
    $nomLigue = "BOURGOGNE FRANCHE COMTE";
$champR1 ="Beaune";
$champR2 ="Vesoul";
$champR3 ="Bourbon Sancy";
$champRX ="";
$champFED2 ="En cours";
$champRR1 ="Belfort Montbeliard";
$champRR2 ="Saint Apollinaire";
}

//12-BRE
if ($suiviLigue == "suiviChampFranceBRE") {
    $nomLigue = "BRETAGNE";
$champR1 ="Saint Brieuc";
$champR2 ="Landivisiau";
$champR3 ="Pontivy";
$champRX ="";
$champFED2 ="";
$champRR1 ="Quimper";
$champRR2 =" - ";
}

//13-CVL
if ($suiviLigue == "suiviChampFranceCVL") {
    $nomLigue = "CENTRE VAL DE LOIRE";
$champR1 ="Orléans la source";
$champR2 ="Fleury les aubrais";
$champR3 ="Ovale de Loire";
$champRX ="";
$champFED2 ="";
$champRR1 ="Chinon";
$champRR2 ="Orléans la source";
}

//15-GES
if ($suiviLigue == "suiviChampFranceGES") {
    $nomLigue = "GRAND EST";
$champR1 ="Nancy Seichamps";
$champR2 ="Reims";
$champR3 ="Forbach";
$champRX ="";
$champFED2 ="";
$champRR1 ="Nancy Seichamps";
$champRR2 ="Reims";
}

//16-HDF
if ($suiviLigue == "suiviChampFranceHDF") {
    $nomLigue = "HAUTS DE FRANCE";
$champR1 ="LMRCV";
$champR2 ="Laon";
$champR3 ="Cambrai";
$champRX ="Grande Synthe";
$champFED2 ="Parisis RC";
$champRR1 ="Armentières";
$champRR2 ="Valenciennes";
}

//17-IDF
if ($suiviLigue == "suiviChampFranceIDF") {
    $nomLigue = "ILE DE FRANCE";
$champR1 ="RC Paris XV";
$champR2 ="Suresnes";
$champR3 ="Fontenay aux Roses";
$champRX ="En cours";
$champFED2 ="Parisis RC";
$champRR1 ="Orsay";
$champRR2 ="En cours";
}

//18-NOR
if ($suiviLigue == "suiviChampFranceNOR") {
    $nomLigue = "NORMANDIE";
$champR1 ="Mont Saint Aignan";
$champR2 ="Herouville Saint Clair";
$champR3 ="Bayeux";
$champRX ="Le Havre RC";
$champFED2 ="";
$champRR1 ="Mont Saint Aignan";
$champRR2 ="Cherbourg";
}

//19-NAQ
if ($suiviLigue == "suiviChampFranceNAQ") {
    $nomLigue = "NOUVELLE AQUITAINE";
$champR1 ="Arudy";
$champR2 ="US Aspoise";
$champR3 ="Nord Béarn XV";
$champRX ="En cours";
$champFED2 ="Gradignan";
$champRR1 ="Lembeye";
$champRR2 ="Castelmoron sur Lot";
}

//20-OCC
if ($suiviLigue == "suiviChampFranceOCC") {
    $nomLigue = "OCCITANIE";
$champR1 ="Moissac";
$champR2 ="Fleury Salles Coursan";
$champR3 ="Vinassan";
$champRX ="En cours";
$champFED2 ="Sud Toulousain";
$champRR1 ="Sigean Port la Nouvelle";
$champRR2 ="Montesquieu";
}

//21-PDL
if ($suiviLigue == "suiviChampFrancePDL") {
$nomLigue = "PAYS DE LA LOIRE";
$champR1 ="Saint Herblain";
$champR2 ="Guenrouet";
$champR3 ="Seiches sur le loir";
$champRX ="";
$champFED2 ="";
$champRR1 ="Saint Herblain";
$champRR2 ="-";
}

//22-PCA
if ($suiviLigue == "suiviChampFrancePCA") {
    $nomLigue = "PROVENCE ALPES COTE D'AZUR";
$champR1 ="Digne les bains";
$champR2 ="Le Beausset";
$champR3 ="Hyeres Carqueiranne";
$champRX ="En cours";
$champFED2 ="RC Toulon";
$champRR1 ="";
$champRR2 ="Gap";
}

        echo "<p class=\"size5 bold center\">";
        echo "Champions régionaux" . "<br>";
        echo  "ligue ". $nomLigue . "<br>" ."</p>";
     
//10-  ARA -->
if ($suiviLigue == "suiviChampFranceARA") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}

//11 - BFC 
else if ($suiviLigue == "suiviChampFranceBFC") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}

//--12 - BRE -->
else if ($suiviLigue == "suiviChampFranceBRE") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}
//--13 -  CVL-->
else if ($suiviLigue == "suiviChampFranceCVL") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}

//--15 - GES -->
else if ($suiviLigue == "suiviChampFranceGES") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}

//--16 - HDF -->
else if($suiviLigue == "suiviChampFranceHDF") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}

//--17 - IDF -->
else if($suiviLigue == "suiviChampFranceIDF") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}

//--18 - NOR -->
else if ($suiviLigue == "suiviChampFranceNOR") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}

//--19 - NAQ -->
else if ($suiviLigue == "suiviChampFranceNAQ") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}

//--20 - OCC -->
else if ($suiviLigue == "suiviChampFranceOCC") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}

//--21 - PDL -->
else if ($suiviLigue == "suiviChampFrancePDL") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}

//--22 - PCA -->
else if ($suiviLigue == "suiviChampFrancePCA") {
    tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2);
}


function tableau($champR1, $champR2, $champR3, $champRR1, $champRR2, $champRX, $champFED2) {
?>

    <table width="600" border="1" cellspacing="0" bordercolor="#000000" align="center">
    <tr>
        <td colspan="2" bgcolor="#FFCC33" align="center"> <font size="5"><b>Championnats masculins<b></font></td>
    </tr>
</table>
<table width="600" border="1" align="center" style ="font-family: Arial, Helvetica, sans-serif">   
<tr>
    <td width="50%" align="center" bgcolor="#d4ced0"> Régionale 1 </td>
    <td width="50%" align="center" bgcolor="#d4ced0"> <b><?php echo $champR1; ?></b>  </td>
</tr>
<tr>
    <td width="50%" align="center"> Régionale 2</td>
    <td width="50%" align="center"> <b><?php echo $champR2; ?></b></td>
</tr>
<tr>
    <td width="50%" align="center" bgcolor="#d4ced0">Régionale 3</td>
    <td width="50%" align="center" bgcolor="#d4ced0"> <b><?php echo $champR3; ?></b></td>
</tr>
<tr>
    <td width="50%" align="center"> Réserve Régionale 1</td>
    <td width="50%" align="center"> <b><?php echo $champRR1; ?></b></td>
</tr>
<tr>
    <td width="50%" align="center" bgcolor="#d4ced0"> Réserve Régionale 2</td>
    <td width="50%" align="center" bgcolor="#d4ced0"> <b><?php echo $champRR2; ?></b></td>
</tr>
</table>
<table width="600" border="1" cellspacing="0" bordercolor="#000000" align="center">
    <tr>
        <td colspan="2" bgcolor="#FFCC33" align="center"> <font size="5"><b>Championnats Féminins<b></font></td>
    </tr>
</table>
<table width="600" border="1" align="center" style ="font-family: Arial, Helvetica, sans-serif">

<tr>
    <td width="50%" align="center">Régionale à X</td>
    <td width="50%" align="center"> <b><?php echo $champRX; ?></b></td>
</tr>
<tr>
    <td width="50%" align="center" bgcolor="#d4ced0">Fédérale 2</td>
    <td width="50%" align="center" bgcolor="#d4ced0"> <b><?php echo $champFED2; ?></b></td>
</tr>

</table>

<?php
}


?>






