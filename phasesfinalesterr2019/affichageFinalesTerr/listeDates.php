<?php
if (isset($_GET['division'])) $division = $_GET['division'];
else $division = '2025';
if (isset($_GET['annee'])) $annee = $_GET['annee'];


echo $annee;
echo "<br>";
echo $division;
echo "<br>";

$bdcomite_pfterr_ld = "phpab_pfterr_ld";

$tabDivision = array (200170,200180,200190,200270,209180);

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
foreach ($tabDivision as $division)
{
$tableMatch =  'php'.$ligue;
echo $division;
echo '<br />';

$reponse = $bdd->query("SELECT D1600, D8000, D4000, D2000, D1000
FROM $bdcomite_pfterr_ld
WHERE  division = '$division' and annee = '$annee'");


while ($row = $reponse->fetch()) {
        $seizieme = $row[0];
        $huitieme = $row[1];
        $quart = $row[2];
        $demi = $row[3];
        $finale = $row[4];
}
?>
<table border="1">
        <tr>
                <td>Division</td>
                <td>16me</td>
                <td>8me</td>
                <td>Quarts</td>
                <td>Demi</td>
                <td>Finale</td>
        </tr>
        <tr>
                <td> <?php echo $division; ?></td>
                <td> <?php echo $seizieme; ?></td>
                <td> <?php echo $huitieme; ?></td>
                <td> <?php echo $quart; ?></td>
                <td> <?php echo $demi; ?></td>
                <td> <?php echo $finale; ?></td>
        </tr>
</table>

<?php
}
?>