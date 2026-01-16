 
 <h2> 
  <?php
 echo "Mise &agrave; jour dates";?>
</h2>


<h2> <?php 
//$annee = 2019;
//$division = 170;

$anneeMoins1 = $annee - 1;
 echo  "Saison : ".$anneeMoins1." - ".$annee;?></h2>
   <?php
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 
   if (isset($_GET['page'])) $page = $_GET['page']; else $page ="-";
echo $page;
  require '../../connect/connexion1.php';
 
    include ("choixDivision.php");
echo $division;
  ?>
	<form name="insertion" action="validFormulaire.php?division=<?php echo $division; ?>&page=dates" method="POST">
  <?php 
  	$requete = mysql_query( "SELECT  D64ME, D32ME, D16ME, D8ME, D4ME, D2ME, D1ME, D0ME
    					   		 FROM bdpffrance_date
								WHERE  id = '$division' and annee='$annee'" ) ;			
  	if( $result = mysql_fetch_object( $requete ) )
  		{
 		} 
  	?>
  <p> 64me 
    <input type="text" name="D64ME" value="<?php echo $D64ME ;?>">
    <br>
    <br>
    32me 
    <input type="text" name="D32ME" value="<?php echo $D32ME ;?>">
    <br>
    <br>
    16me 
    <input type="text" name="D16ME" value="<?php echo $D16ME ;?>">
    <br>
    <br>
    8me 
    <input type="text" name="D8ME" value="<?php echo $D8ME ;?>">
    <br>
    <br>
    Quarts 
    <input type="text" name="D4ME" value="<?php echo $D4ME ;?>">
    <br>
    <br>
    Demi 
    <input type="text" name="D2ME" value="<?php echo $D2ME ;?>">
    <br>
    <br>
    Finale 
    <input type="text" name="D1ME" value="<?php echo $D1ME ;?>">
    <br>
    <br>
    Autre 
    <input type="text" name="D0ME" value="<?php echo $D0ME ;?>">
  </p>
  <p>
    <input type="submit" value="modifier" name="submit">
  </p>
  </form>
 
<p><a href="accueilMAJ.php">retour page accueil</a> </p>