<?php
require ("../../connect/connexion1.php") ;
if (isset($_POST['A1601']))$A1601 = $_POST['A1601'];else $A1601="";
if (isset($_POST['A1602']))$A1602 = $_POST['A1602'];else $A1602="";
if (isset($_POST['A1603']))$A1603 = $_POST['A1603'];else $A1603="";
if (isset($_POST['A1604']))$A1604 = $_POST['A1604'];else $A1604="";
if (isset($_POST['A1605']))$A1605 = $_POST['A1605'];else $A1605="";
if (isset($_POST['A1606']))$A1606 = $_POST['A1606'];else $A1606="";
if (isset($_POST['A1607']))$A1607 = $_POST['A1607'];else $A1607="";
if (isset($_POST['A1608']))$A1608 = $_POST['A1608'];else $A1608="";
if (isset($_POST['A1609']))$A1609 = $_POST['A1609'];else $A1609="";
if (isset($_POST['A1610']))$A1610 = $_POST['A1610'];else $A1610="";
if (isset($_POST['A1611']))$A1611 = $_POST['A1611'];else $A1611="";
if (isset($_POST['A1612']))$A1612 = $_POST['A1612'];else $A1612="";
if (isset($_POST['A1613']))$A1613 = $_POST['A1613'];else $A1613="";
if (isset($_POST['A1614']))$A1614 = $_POST['A1614'];else $A1614="";
if (isset($_POST['A1615']))$A1615 = $_POST['A1615'];else $A1615="";
if (isset($_POST['A1616']))$A1616 = $_POST['A1616'];else $A1616="";
if (isset($_POST['A1617']))$A1617 = $_POST['A1617'];else $A1617="";
if (isset($_POST['A1618']))$A1618 = $_POST['A1618'];else $A1618="";
if (isset($_POST['A1619']))$A1619 = $_POST['A1619'];else $A1619="";
if (isset($_POST['A1620']))$A1620 = $_POST['A1620'];else $A1620="";
if (isset($_POST['A1621']))$A1621 = $_POST['A1621'];else $A1621="";
if (isset($_POST['A1622']))$A1622 = $_POST['A1622'];else $A1622="";
if (isset($_POST['A1623']))$A1623 = $_POST['A1623'];else $A1623="";
if (isset($_POST['A1624']))$A1624 = $_POST['A1624'];else $A1624="";
if (isset($_POST['A1625']))$A1625 = $_POST['A1625'];else $A1625="";
if (isset($_POST['A1626']))$A1626 = $_POST['A1626'];else $A1626="";
if (isset($_POST['A1627']))$A1627 = $_POST['A1627'];else $A1627="";
if (isset($_POST['A1628']))$A1628 = $_POST['A1628'];else $A1628="";
if (isset($_POST['A1629']))$A1629 = $_POST['A1629'];else $A1629="";
if (isset($_POST['A1630']))$A1630 = $_POST['A1630'];else $A1630="";
if (isset($_POST['A1631']))$A1631 = $_POST['A1631'];else $A1631="";
if (isset($_POST['A1632']))$A1632 = $_POST['A1632'];else $A1632="";

echo "test : ".$A1601;
  //récupération de l'identifiant de la personne:
  $id  = $_POST["id"] ;
 
  //création de la requête SQL:
  $bdd->exec( "UPDATE infosclub
           SET A1601='$A1601', A1602='$A1602',A1603='$A1603', A1604='$A1604',A1605='$A1605', A1606='$A1606',A1607='$A1607', A1608='$A1608', A1609='$A1609', A1610='$A1610',A1611='$A1611', A1612='$A1612',A1613='$A1613', A1614='$A1614',A1615='$A1615', A1616='$A1616',
		       A1617='$A1617', A1618='$A1618',A1619='$A1619', A1620='$A1620',A1621='$A1621', A1622='$A1622',A1623='$A1623', A1624='$A1624',A1625='$A1625', A1626='$A1626',A1627='$A1627', A1628='$A1628',A1629='$A1629', A1630='$A1630',A1631='$A1631', A1632='$A1632'
           WHERE id = '$id' " );
/*
  if($bdd)
  {
    echo("La modification a été correctement effectuée") ;
  }
  else
  {
    echo("La modification à échouée") ;
  }

  echo "<br />";
  echo "<br />";
  echo "<a href=../../>retour vers la page modifiée</a>";
  echo $id;
  */
 ?>
 <html>
 <script>
//window.location = "https://francefinalesrugby.fr/consultation/pageclub00.php?champion=<?php echo $id; ?>";
 </script>
 </html>