<?php
if (isset($_GET['mode'])) $mode = $_GET['mode'];else $mode ="noSmart";


require ("../../saison.php");
require ("../../fonctions.php");
require '../../consultation/fonctions.php';
$id = $_GET['idClub'];
require '../../connect/connexion1.php'; 
nomComite (0,$id, $bdd);
infosclub($id, $bdd);
?>

<!DOCTYPE html PUBLIC>       
<html lang="fr">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Modification des données du club</title>
 <link rel="stylesheet" type="text/css" href="../10.css"> 
 <link type="text/css" rel="stylesheet" href="../../ligne1.css">
 <!--
 <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
 <link type="text/css" rel="stylesheet" href="../../resultats/resultat.css">
-->
 <meta name=viewport content="width=device-width, initial-scale=1">
 
</head>

<body>

<table width="98%" border="1">
     <tr> 
      <td width= "5%"class="h22" height="20"><a href="javascript:history.go(-1)"><img src="../../images/smart/flecheGauche.jpg" height="20"></a></td>
	  <td width= "95%"class="h22" height="20"> France Finales Rugby </td>
     </tr>
     <tr> 
      <td colspan="2" class="h12" width= "100%"><?php echo "Modification des  données". "<br>" . $nomLong;?> </td>
     </tr>
    </table>
  
	  <!-- Colonne centrale --> 
	
       
    <?php // J'ai choisi le mot de passe "pasUnRobot
if (isset($_POST['mot_de_passe'])) // Si la variable existe
{
  // On se cr�e une variable $mot_de_passe avec le mot de passe entr�
  $mot_de_passe = $_POST['mot_de_passe'];
} else // La variable n'existe pas encore
{
  $mot_de_passe = ""; // On crée une variable $mot_de_passe vide
}
if ($mot_de_passe == "pasUnRobot") // Si le mot de passe est bon
{
  require("../../connect/connexion1.php");
  $id  = $_GET["idClub"]; 

  //echo "id".$id;

  $reponse = $bdd->query("SELECT * FROM infosclub WHERE id='$id'");
  while ($donnees = $reponse->fetch()) {
    $id = $donnees['id'];
    $club = $donnees['club'];
    $ligue = $donnees['ligue'];
    $equipe_fem = $donnees['equipe_fem'];

    $A1601 = $donnees['A1601']; // président
    $A1602 = $donnees['A1602']; // secretaire
    $A1603 = $donnees['A1603']; // contact
    $A1604 = $donnees['A1604']; // siege
    $A1605 = $donnees['A1605']; // adresse
    $A1606 = $donnees['A1606']; // cp
    $A1607 = $donnees['A1607']; // ville
    $A1608 = $donnees['A1608']; // tél
    $A1609 = $donnees['A1609'];

    $A1610 = $donnees['A1610'];
    $A1611 = $donnees['A1611'];
    $A1612 = $donnees['A1612'];
    $A1613 = $donnees['A1613'];
    $A1614 = $donnees['A1614'];
    $A1615 = $donnees['A1615'];
    $A1616 = $donnees['A1616'];
    $A1617 = $donnees['A1617'];
    $A1618 = $donnees['A1618']; // sigle
    $A1619 = $donnees['A1619']; // couleur

    $A1620 = $donnees['A1620']; // site Internet
    $A1621 = $donnees['A1621']; // commentaire 1
    $A1622 = $donnees['A1622']; // commentaire 2
    $A1623 = $donnees['A1623']; // commentaire 3
    $A1624 = $donnees['A1624'];
    $A1625 = $donnees['A1625'];
    $A1626 = $donnees['A1626'];
    $A1627 = $donnees['A1627'];
    $A1628 = $donnees['A1628'];
    $A1629 = $donnees['A1629'];
    $A1630 = $donnees['A1630']; // trésorier
    $A1631 = $donnees['A1629'];
    $A1632 = $donnees['A1632'];
  }

 // echo $ligue;
  ?>

 
    <form name="insertion" action="enregFormulaire.php?mode=<?php echo $mode;?>" method="POST">

      <input type="hidden" name="id" value="<?php echo ($id); ?>">

 
  
  <table class="marginAuto">
        <tr>
          <td>Création du club</td>
          <td class="alignLeft"> <input type="text" name="A1624" value="<?php echo $A1624; ?>" size="6"></td>
        </tr>
        <tr>
          <td colspan="2" class="backgroundRed center bold colorWhite" >BUREAU</td>
        </tr>
        <tr>
          <td>Président</td>
          <td class="alignLeft"><input type="text" name="A1601" value="<?php echo $A1601; ?>" size="20"></td>
        </tr>
        <tr>
          <td>Vice Président(s)</td>
          <td class="alignLeft"><input type="text" name="A1615" value="<?php echo $A1615; ?>" size="50"></td>
        </tr>
        <tr>
          <td>Trésorier</td>
          <td class="alignLeft"><input type="text" name="A1630" value="<?php echo $A1630; ?>" size="20"></td>
        </tr>
        <tr>
          <td>Secrétaire</td>
          <td class="alignLeft"><input type="text" name="A1602" value="<?php echo $A1602; ?>" size="20"></td>
        </tr>
        <tr>
          <td class="paddingBottom25">Contact</td>
          <td class="alignLeft paddingBottom25"><input type="text" name="A1603" value="<?php echo $A1603; ?>" size="20"></td>
        </tr>
        <tr>
          <td colspan="2" class="backgroundRed center bold colorWhite" >SIEGE</td>
        </tr>
        <tr>
          <td >Siège</td>
          <td class="alignLeft"><input type="text" name="A1604" value="<?php echo $A1604; ?>" size="20"></td>
        </tr>
        <tr>
          <td>Adresse</td>
          <td class="alignLeft"><input type="text" name="A1605" value="<?php echo $A1605; ?>" size="20"></div>
        </tr>
        <tr>
          <td>CP</td>
          <td class="alignLeft"><input type="text" name="A1606" value="<?php echo $A1606; ?>" size="5"></td>
        </tr>
        <tr>
          <td>Ville</td>
          <td class="alignLeft"><input type="text" name="A1607" value="<?php echo $A1607; ?>" size="20"></td>
        </tr>
        <tr>
          <td class=" paddingBottom25">Tél</td>
          <td class="alignLeft paddingBottom25"><input type="text" name="A1608" value="<?php echo $A1608; ?>" size="15"></td>
        </tr>
        <tr>
          <td colspan="2" class="backgroundRed center bold colorWhite">STADE</td>
        </tr>
        <tr>
          <!--1609-->
          <td>Nom du stade</td>
          <td class="alignLeft"><input type="text" name="A1609" value="<?php echo $A1609; ?>" size="20"></td>
        </tr>
        <tr>
          <!--1610-->
          <td>Adresse</td>
          <td class="alignLeft"><input type="text" name="A1610" value="<?php echo $A1610; ?>" size="20"></td>
        </tr>
        <tr>
          <!--1611-->
          <td>CP</td>
          <td class="alignLeft"><input type="text" name="A1611" value="<?php echo $A1611; ?>" size="5"></td>
        </tr>
        <tr>
          <!--1612-->
          <td>Ville</td>
          <td class="alignLeft"><input type="text" name="A1612" value="<?php echo $A1612; ?>" size="20"></td>
        </tr>
        <tr>
          <!--1613-->
          <td>Tél</td>
          <td class="alignLeft"><input type="text" name="A1613" value="<?php echo $A1613; ?>" size="15"></td>
        </tr>
        <tr>
          <!--1614-->
          <td class="paddingBottom25">Capacité</td>
          <td class="alignLeft paddingBottom25"><input type="text" name="A1614" value="<?php echo $A1614; ?>" size="6"></td>

        </tr>
        <tr>
          <td colspan="2" class="backgroundRed center bold colorWhite">CONTACT</td>
        </tr>
        <tr>
          <!--1620-->
          <td>Site Internet</td>
          <td class="alignLeft"><input type="text" name="A1620" value="<?php echo $A1620; ?>" size="20"></td>
        </tr>
        <tr>
          <!--1616-->
          <td>Mél</td>
          <td class="alignLeft"><input type="text" name="A1616" value="<?php echo $A1616; ?>" size="20"></td>
        </tr>
        <tr>
          <!--1617-->
          <td>Correspondant</td>
          <td class="alignLeft"><input type="text" name="A1617" value="<?php echo $A1617; ?>" size="15"></td>
        </tr>
        <tr>
          <!--1618-->
          <td>Sigle</td>
          <td class="alignLeft"><input type="text" name="A1618" value="<?php echo $A1618; ?>" size="8"></td>
        </tr>
        <tr>
          <!--1619-->
          <td class="paddingBottom25">Couleurs</td>
          <td class="alignLeft paddingBottom25"><input type="text" name="A1619" value="<?php echo $A1619; ?>" size="20"></td>
        </tr>
        <tr>
          <td colspan="2" class="backgroundRed center bold colorWhite">SECTION FEMININE</td>
        </tr>
        <tr>
          <!--1631-->
          <td>Nom/ Entente</td>
          <td class="alignLeft"><input type="text" name="A1631" value="<?php echo $A1631; ?>" size="20"></td>
        </tr>
        <tr>
          <!--1632-->
          <td class="paddingBottom25">Niveau</td>
          <td class="alignLeft paddingBottom25"><input type="text" name="A1632" value="<?php echo $A1632; ?>" size="20"></td>
        </tr>
        <tr>
          <td colspan="2" class="backgroundRed center bold colorWhite">DATES IMPORTANTES</td>
        </tr>
        <tr>
          <!--1621-->
          <td colspan="2" class="alignLeft">
            <b><textarea name="A1621" cols="30" rows="6">
              <?php echo $A1621; ?></textarea></b>
          </td>
        </tr>
        <tr>
          <!--1622-->
          <td colspan="2" class="alignLeft">
            <b><textarea name="A1622" cols="30" rows="6">
            <?php echo $A1622; ?></textarea></b>
          </td>
        </tr>
        <tr>
          <!--1623-->
          <td colspan="2" class="alignLeft">
            <b><textarea name="A1623" cols="30" rows="6">
              <?php echo $A1623; ?></textarea></b>
          </td>
        </tr>
        <tr>
          <!--1626-->
          <td colspan="2" class="alignLeft"><b><textarea name="A1626" cols="30" rows="6">
            <?php echo $A1626; ?></textarea></b></td>
        </tr>
        <tr>
          <!--1627-->
          <td colspan="2" class="alignLeft">
            <b><textarea name="1627" cols="30" rows="6">
            <?php echo $A1627; ?></textarea></b>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="Valider" name="submit">
          </td>
        </tr>
      </table>
    </form>
<br>
   <h3 class="center bold">
  <?php
 // echo "<a href=../../consultation/pageclub00.php?champion=$id&mode=$smart>retour vers la page précédente</a>";
  echo "<a href=pageFicheClubs.php?mode=smart&page=recherche&champion=$id>retour vers la page précédente</a>";
  //smart/ficheClubs/pageFicheClubs.php?mode=smart&page=recherche
} 
  ?>
</h3>
<br><br>
 </td>
    </tr>
</table>
 </body>
  <footer> 
  <?php require '../bas.php'; ?>
  </footer>

</html> 