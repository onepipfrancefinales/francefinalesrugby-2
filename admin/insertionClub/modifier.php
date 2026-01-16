<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link type="text/css" rel="stylesheet" href="../../ligne1.css">
<script language="JavaScript">

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>




<body bgcolor="#FFFFFF" text="#000000">
<h2 class=" formatInput">Modifier un enregistrement à partir d'un Id</b></h2>
<h3>bdclubs (Identifiants du club)</h3>
<h3> infosClub (infos sur le clubs)</h3>
<h3> bdsaisons (historique des saisons précédentes)</h3>
 <br/>
 
 <form action="modifier.php" method="GET">
        <p align="center">
         <br />
          <input type="text" name="value" />
         <br />
          <input  type="submit" value="recherche par Id" />
      </form>
       <hr />

<!------------  bdcluds ----------->

<?php
if (isset($_GET['value'])) $valueId = $_GET['value']; else $valueId ="1010001";


require ("../../connect/connexion1.php");

$reponse = $bdd->query("SELECT *
						FROM bdclubs 
						WHERE id ='$valueId'"); 

while ($row = $reponse->fetch())
		{ 
			$id = $row[0]; $nom_1 = $row[1];  $nom_2 = $row[2]; $nom_3 = $row[3];
            $nom_4 = $row[4]; $fusion = $row[5]; $idffr = $row[6]; 
            $type = $row[7]; $sigle = $row[8];  $ligue =  $row[9]; 
            $sigleComite =  $row[10]; $comite =  $row[11];
        }
?>

<h2>  bdclubs (Identifiants du club)</h2>
<form name="form1" method="POST" action="retourbdclubs.php?table=bdClubs">

 <div align="left">    
   
   <div class=" formatInput">Id : 
    <input type="text"   name="id" value="<?php echo $id ;?>" readonly>
    </div>
    
    <div class=" formatInput">Nom_1 : 
    <input type="text" name="nom_1" value="<?php echo $nom_1 ;?>">
    </div>
    
    <div class=" formatInput">Nom_2 : 
    <input type="text" name="nom_2" value="<?php echo $nom_2 ;?>">
    </div>  
    <div class=" formatInput">Nom_3 : 
    <input type="text" name="nom_3" value="<?php echo $nom_3 ;?>">
    </div>
     
    <div class=" formatInput">Nom_4
    <input type="text" name="nom_4" value="<?php echo $nom_4 ;?>">
    </div>
   
   <div class=" formatInput">Fusion : 
    <input type="text" name="fusion" value="<?php echo $fusion ;?>">
    </div>
   
   <div class=" formatInput">IdFFR : 
    <input type="text" name="idffr" value="<?php echo $idffr ;?>" readonly>
    </div>
    
    <div class=" formatInput">Type : 
    <input type="text" name="type" value="<?php echo $type ;?>">
    </div>
    
    <div class=" formatInput">Sigle : 
    <input type="text" size="50" name="sigle" value="<?php echo $sigle ;?>">
    </div>
    
    <div class=" formatInput">Ligue
    <input type="text" name="ligue" value="<?php echo $ligue ;?>">
    </div>
    
    <div class=" formatInput">SigleComite : 
    <input type="text" name="siglecomite" value="<?php echo $sigleComite ;?>">
    </div>
    
    <div class=" formatInput">Comité : 
    <input type="text" name="comite" value="<?php echo $comite ;?>">
    </div>
  </div>
   <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>

<hr />
<!------------  infosClub ----------->
<?php
$idReduit = substr($valueId,-5);
echo "test ; ".$idReduit;
$reponse = $bdd->query("SELECT *
						FROM infosclub
						WHERE id ='$idReduit'"); 

while ($row = $reponse->fetch())
		{ 
			$id = $row[0]; $club = $row[1];  $ligue = $row[2]; $equipe_fem = $row[3];   
            $A1601=  $row[4]; $A1602=  $row[5]; $A1603=  $row[6]; $A1604=  $row[7]; $A1605=  $row[8];
            $A1606=  $row[9]; $A1607=  $row[10]; $A1608= $row[11]; $A1609= $row[12]; $A1610= $row[13];
            $A1611=  $row[14]; $A1612=  $row[15]; $A1613= $row[16]; $A1614= $row[17]; $A1615= $row[18];
            $A1616=  $row[19]; $A1617=  $row[20]; $A1618= $row[21]; $A1619= $row[22]; $A1620= $row[23];
            $A1621=  $row[24]; $A1622=  $row[25]; $A1623= $row[26]; $A1624= $row[27]; $A1625= $row[28];
            $A1626=  $row[29]; $A1627=  $row[30]; $A1628= $row[31]; $A1629= $row[32]; $A1630= $row[33];
            $A1631=  $row[34]; $A1632=  $row[35];
        }

?>

<h2>infosClub (infos sur le clubs)</h2>

<form name="form1" method="POST" action="retourbdclubs.php?table=infosClub">
  <p></p>
  <div align="left">    
   
    <div class=" formatInput">Id : 
    <input type="text" name="id" value="<?php echo $id ;?>" readonly>
    </div>
    
    <div class=" formatInput">Club : 
    <input type="text" name="club" value="<?php echo $club ;?>">
    </div>
    
    <div class=" formatInput">Ligue : 
    <input type="text" name="ligue" value="<?php echo $ligue ;?>">
    </div>
    <div class=" formatInput">Equipe féminine : 
    <input type="text" name="equipe_fem" value="<?php echo $equipe_fem ;?>">
    </div>
     
    <div class=" formatInput">Président : 
    <input type="text" name="A1601" value="<?php echo $A1601 ;?>">
    </div>
    
    <div class=" formatInput">Secrètaire : 
    <input type="text" name="A1602" value="<?php echo $A1602 ;?>">
    </div>
    
    <div class=" formatInput">Contact : 
    <input type="text" name="A1603" value="<?php echo $A1603 ;?>">
    </div>
    
    <div class=" formatInput">Siège : 
    <input type="text" name="A1604" value="<?php echo $A1604 ;?>">
    </div>
    
    <div class=" formatInput">Adresse : 
    <input type="text" name="A1605" value="<?php echo $A1605 ;?>">
    </div>
    
    <div class=" formatInput">Code Postal : 
    <input type="text" name="A1606" value="<?php echo $A1606 ;?>">
    </div>
    
    <div class=" formatInput">Ville : 
    <input type="text" name="A1607" value="<?php echo $A1607 ;?>">
    </div>
    
    <div class=" formatInput">Tél : 
    <input type="text" name="A1608" value="<?php echo $A1608 ;?>">
    </div>
    
    <div class=" formatInput">A1609 : 
    <input type="text" name="A1609" value="<?php echo $A1609 ;?>">
    </div>
    
    <div class=" formatInput">A1610 : 
    <input type="text" name="A1610" value="<?php echo $A1610 ;?>">
    </div>
    
    <div class=" formatInput">A1611 : 
    <input type="text" name="A1611" value="<?php echo $A1611 ;?>">
    </div>

    <div class=" formatInput">A1612 : 
    <input type="text" name="A1612" value="<?php echo $A1612 ;?>">
    </div>

    <div class=" formatInput">A1613 : 
    <input type="text" name="A1613" value="<?php echo $A1613 ;?>">
     </div>

    <div class=" formatInput">A1614 : 
    <input type="text" name="A1614" value="<?php echo $A1614 ;?>">
    </div>

    <div class=" formatInput">A1615 : 
    <input type="text" name="A1615" value="<?php echo $A1615 ;?>">
    </div>

    <div class=" formatInput">A1616 : 
    <input type="text" name="A1616" value="<?php echo $A1616 ;?>">
    </div>

    <div class=" formatInput">A1617 : 
    <input type="text" name="A1617" value="<?php echo $A1617 ;?>">
    </div>

    <div class=" formatInput">Sigle : 
    <input type="text" name="A1618" value="<?php echo $A1618 ;?>">
     </div>

    <div class=" formatInput">Couleur : 
    <input type="text" name="A1619" value="<?php echo $A1619 ;?>">
    </div>
    
    <div class=" formatInput">Site Internet : 
    <input type="text" name="A1620" value="<?php echo $A1620 ;?>">
    </div>

    <div class=" formatInput">Commentaire 1 : 
    <input type="text" name="A1621" value="<?php echo $A1621 ;?>">
    </div>

    <div class=" formatInput">Commentaire 2 : 
    <input type="text" name="A1622" value="<?php echo $A1622 ;?>">
    </div>

    <div class=" formatInput">Commentaire 3 : 
    <input type="text" name="A1623" value="<?php echo $A1623 ;?>">
    </div>

    <div class=" formatInput">Création du club : 
    <input type="text" name="A1624" value="<?php echo $A1624 ;?>">
    </div>

    <div class=" formatInput">A1625 : 
    <input type="text" name="A1625" value="<?php echo $A1625 ;?>">
    </div>

    <div class=" formatInput">A1626 : 
    <input type="text" name="A1626" value="<?php echo $A1626 ;?>">
    </div>

    <div class=" formatInput">A1627 : 
    <input type="text" name="A1627" value="<?php echo $A1627 ;?>">
    </div>

    <div class=" formatInput">A1628 : 
    <input type="text" name="A1628" value="<?php echo $A1628 ;?>">
    </div>

    <div class=" formatInput">A1629 : 
    <input type="text" name="A1629" value="<?php echo $A1629 ;?>">
    </div>
    
    <div class=" formatInput">Trésorier : 
    <input type="text" name="A1630" value="<?php echo $A1630 ;?>">
    </div>
    
    <div class=" formatInput">A1631 : 
    <input type="text" name="A1631" value="<?php echo $A1631 ;?>">
    </div>
    
    <div class=" formatInput">A1632 : 
    <input type="text" name="A1632" value="<?php echo $A1632 ;?>">
    </div>
    
  </div>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>

<hr/>
<!------------  bdfusion ----------->
<h2> bdfusion (Suivi des changements d'un club (nom, fusion, logo))</h2>


<?php


$reponse = $bdd->query("SELECT *
						FROM bdfusion
						WHERE idffr ='$idffr'"); 

while ($row = $reponse->fetch())
		{ 
			$id = $row[0]; $idffr = $row[1];  $nom = $row[2]; $logo = $row[3];   
            $annee=  $row[4]; $fusion1=  $row[5]; $fusion2=  $row[6]; $fusion3= $row[7]; 
        }

?>


<form name="form1" method="POST" action="retourbdclubs.php?table=bdfusion">
<div class=" formatInput">id (réduit) : 
    <input type="text" name="idReduit" value="<?php echo $idReduit ;?>" readonly>
  </div>

<div class=" formatInput">id FFR : 
    <input type="text" name="idffr" value="<?php echo $idffr ;?>" readonly>
  </div>

  <div class=" formatInput">nom : 
    <input type="text" name="nom" size="50" value="<?php echo $nom ;?>">
  </div>

  <div class=" formatInput">logo : 
    <input type="text" name="logo" value="<?php echo $logo ;?>">
  </div>

  <div class=" formatInput">annee : 
    <input type="text" name="annee" value="<?php echo $annee ;?>">
  </div>

  <div class=" formatInput">fusion1 : 
    <input type="text" name="fusion1" value="<?php echo $fusion1 ;?>">
  </div>

  <div class=" formatInput">fusion2 : 
    <input type="text" name="fusion2" value="<?php echo $fusion2 ;?>">
  </div>

 <div class=" formatInput">fusion3 : 
    <input type="text" name="fusion3" value="<?php echo $fusion3 ;?>">
  </div>


  <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>

<hr>


<!------------  bdsaisons ----------->
<h2>bdsaisons (historique des saisons précédentes)</h2>
<form name="form1" method="POST" action="retour.php?table=bdSaison">

  <div class=" formatInput">Nom Usuel : 
    <input type="text" name="nom">
  </div>

  <div class=" formatInput">Nom complet : 
    <input type="text" name="nomComplet">
  </div>

	 <div class=" formatInput">Saison : 
    <input type="text" name="saison">
   </div>

  <div class=" formatInput">Pour saisir l'id consulter 
    la liste des clubs par Id (<a href="../consultation/listeClubsParNom.php" target="_blank">liste 
    par ID</a>)</div>

  <div class=" formatInput">Id (2029076): 
    <input type="text" name="id">
  </div>

  <div class=" formatInput">IdFFR (1234M): 
    <input type="text" name="idffr">
  </div>
  
  <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>

</body>
</html>



<style>

.formatInput {
  padding-bottom: 20px;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 15px;

}

  </style>
