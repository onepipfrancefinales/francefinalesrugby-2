<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../maj.css">
  <link rel="stylesheet" type="text/css" href="../../../ligne1.css">
</head>
<?php
$page="equipes";

if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 
if (isset ($_GET['prefixe'])) $prefixe = $_GET['prefixe']; else $prefixe='-'; 
echo "type : ".$type; echo "<br />";
echo "division : ".$division;echo "<br />";
echo "annee : ".$annee;echo "<br />";

require '../../../connect/connexion1.php';
require ("../../fonctionsChampFrance2019.php"); 
trenteDeuxieme2019 ($division, $annee, $bdd);

?>

<body>
<table width="352">
  <tr> 
    <td colspan="2" class="center bold size5 styleArial">Maj Champ de France <?php echo $annee;?></td>
  </tr>
  <tr> 
    <td colspan="2" class="center styleArial bold colorRed size4">Saisie des équipes</td>
  </tr>
  <tr> 
    <td width="37" class="backgroundBlack center size6 bold colorWhite styleArial">3</td>
    <td width="303" class ="backgroundBlue"><?php include "../choixDivision.php";?></td>
  </tr>
</table>

<table width="354" class="borderNone" height="188">
  <tr class="backgroundBlue"> 
    <td colspan="2" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="26%" class="center"></td>
    <td width="74%"  class="background0099FF"></td>
  </tr>
  <tr> 
    <td class="center styleArial">Base : </td>
    <td class="background0099FF"></td>
  </tr>
  <tr> 
    <td class="center styleArial">Année : </td>
    <td class="backgroundBlack center bold size5 colorWhite"><?php echo $annee; ?></td>
  </tr>
  <tr> 
    <td class="center styleArial">Division : </td>
    <td class="background0099FF center"><?php echo $division;?></td>
  </tr>
  <tr>
    <td class="center styleArial">Type : </td>
    <td  class="background0099FF center"><?php echo $type; ?></td>
  </tr>
  <tr> 
    <td> 
     
    </td>
    <td height="40"class="background0099FFcenter"><br />
        <form name="form1" method="post" action="saisieEquipe.php?division=<?php echo $division; ?>&type=<?php echo $type; ?>&annee=<?php echo $annee; ?>">
          <input type="submit" name="Submit" value="Valider">
        </form> 
    </td>
  </tr>
</table>

<?php

$tabClubs=array();
// Récupération des Equipes de 1 à 9 
// inscrites en base de données	
for ($i=01; $i<10; $i++)
	{
	 $clubs="E0".$i;
	
	 $reponse = $bdd->query("
			SELECT  $clubs
			FROM   bdpffrance
			WHERE  id = $division AND saison = $annee ");
									
	 while ($row = $reponse->fetch())
		{
		$tabClubs[] = $row[0];
		}
		
	//echo $tabClubs[1]; echo "<br/>";
	//echo $tabClubs[2]; echo "<br/>";
	}

// Récupération des Equipes de 10 à 64 
// inscrites en base de données	
	for ($i=10; $i<65; $i++)
	{
	 $clubs="E".$i;
	
	 $reponse = $bdd->query("
			SELECT  $clubs
			FROM   bdpffrance
			WHERE  id = $division AND saison = $annee");
									
	 while ($row = $reponse->fetch())
		{
		$tabClubs[] = $row[0];
		}
	}
//affichage des clubs 	
require "affichageClubs.php";

?>
					  

		

