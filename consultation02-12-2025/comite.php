
<h1 class="center">Comité <?php echo $nomComite;?> </h1>
<div class="center">
<?php 
{print("<img src=\"/images/comites/$sigle.jpg\" border=\"0\" target=_top>");}
?>
</div>

							  
							
<hr>
<p class="center"> 
							 
							  
	<hr>
	<h1>Présentation :</h1>
	<p class="texte">
	Le comité <?php echo $nomComite; ?> se composait  des <?php //echo $donnees['nbre_dep'];?> départements  suivants :
	<?php
	echo "<br>";
							
	echo $dep1.'<br>'.$dep2.'<br>'.$dep3.'<br>'.$dep4.'<br>'.$dep5.'<br>'. $dep6.' '.$dep7.' '.$dep8.' '.$dep9.' '. $dep10.' '.$dep11.' '.$dep12;						
	echo "<br>";
	echo "Depuis la saison 2018-2019 le comité $nomComite a integré la <br><b> Ligue ".$NomLigueParSigle."</b>";
	echo "<br>";
	echo "<br>";
	echo "----------------------------------------------------------";
	echo"<br>";
	?>
	</P>
	<p class="texte">Quelques chiffres :</p>
							
	<?php 
	/*
	//$nb_equipe_tt=mysql_query("SELECT SUM(siglecomite)
	$nb_equipe_tt=$bdd->query("SELECT COUNT(siglecomite) 
								FROM bdsaisons 
							   WHERE siglecomite='$sigle'"); 
		$nb_equipe_tt=$nb_equipe_tt->fetch();
		//echo $nb_equipe_tt[0]; 
	*/
	?>
	
	<p class="texte18">
	<?php
	echo 
	"<strong> Nbre de clubs : </strong>".' '.$nb_equipe_tt[0].'<br><br>'
	.'<strong> Effectif sénior : </strong>'.' '.$nbreSeniors.'<br>'
	.'<strong> Effectif Féminin : </strong>'.' '.$nbreFeminines.'<br>'
	.'<strong> Effectif Jeune : </strong>'.' '.$nbreJeunes.'<br>'
	.'<strong> Effectif dirigeant : </strong>'.' '.$nbreDirigeants.'<br><br>';
	?>
	
	
	
<p class="lien"> 
  <?php 
 if ($mode != "smart") 
{  echo "<a href=../palmares/palmNational/pagePalmComite.php?variable_1=$sigle&mode=$mode> Tous les champions de France du comité </a> ";}
else
{ echo "<a href=../smart/smartPage.php?variable_1=$sigle&mode=smart&page=palmaresParComite> Tous les champions de France du comité </a> ";}
?>
</p>
<br>
<hr>

<?php
if ($mode == "smart")
$lien = "";
else
$lien = "page_comite.php?saisonChoisie=2018&variable_1=";
?>


<hr><div id="palmaresTerritorial"></div>
<?php if (isset($_GET['saisonChoisie'])) $saisonChoisie=$_GET['saisonChoisie']; else $saisonChoisie=2018;


if ($mode == "smart")
$adresse = "../smart/smartPage.php?page=comites&mode=smart&";
else
$adresse = "page_comite.php?";



?>
<form name="form1" method="post" action="page_comite.php?variable_1=(CA)">
  Choisir une saison : 
  <select name="select" onChange="MM_jumpMenu('parent',this,0)" size="1">
		  <option value="<?php echo $adresse; ?>saisonChoisie=2018&variable_1=<?php echo $sigle; ?>#palmaresTerritorial"><?php echo $saisonChoisie-1;echo "-".$saisonChoisie; ?></option>
          <option value="<?php echo $adresse; ?>saisonChoisie=2018&variable_1=<?php echo $sigle; ?>#palmaresTerritorial">2017-2018</option>
          <option value="<?php echo $adresse; ?>saisonChoisie=2017&variable_1=<?php echo $sigle; ?>#palmaresTerritorial">2016-2017</option>
          <option value="<?php echo $adresse; ?>saisonChoisie=2016&variable_1=<?php echo $sigle; ?>#palmaresTerritorial">2015-2016</option>
		  <option value="<?php echo $adresse; ?>saisonChoisie=2015&variable_1=<?php echo $sigle; ?>#palmaresTerritorial">2014-2015</option>
		  <option value="<?php echo $adresse; ?>saisonChoisie=2014&variable_1=<?php echo $sigle; ?>#palmaresTerritorial">2013-2014</option>
  </select>
</form>
<br>

<h1 class="colorRed">Palmarès Territorial 
    <?php echo $saisonChoisie;  ?></h1>
	
	<p class="bold size5"> <br>Equipe I<br></p> 

<?php

$reponse = $bdd->query("SELECT champion, championnat, division 
						FROM bdequipe1 
						WHERE comite1='$sigle' and titre='Champion' and rang <'225' and rang >'165' 
										and saison='$saisonChoisie' and rang2='1' 
										and categorie='A'
						ORDER BY rang "); 

		while ($donnees = $reponse->fetch() )
		{ 
		echo "Champion ".$donnees['championnat'].' '.$donnees['division']." : ";
		echo  "<div class =\"bold center\">" . $donnees['champion'] . "</div>";
		echo "<br>";							  
		}?>

<p class="bold size5"> <br>Equipe II<br></p> 

<?php
$reponse = $bdd->query("SELECT champion, championnat, division
						FROM bdequipe2 
						WHERE comite1='$sigle'and titre='Champion' and saison='$saisonChoisie' and categorie='B' 
						ORDER BY rang "); 

	while ($donnees = $reponse->fetch() )
	{ 				
	echo "Champion ".''.$donnees['championnat'].' '.$donnees['division']." : ";
	echo  "<div class =\"bold center\">" . $donnees['champion'] . "</div>";
	echo "<br>";	
	} ?>
	

<?php

if ( $sigle == "(AP)" OR $sigle == "(AU)" OR  $sigle == "(DA)" OR $sigle == "(LY)")
$idLigue = 10;
elseif ( $sigle == "(BG)" OR  $sigle == "(FC)")
$idLigue = 11;
elseif ( $sigle == "(BR)")
$idLigue = 12;
elseif ( $sigle == "(CE)")
$idLigue = 13;
elseif ( $sigle == "(C)")
$idLigue = 14;
elseif ( $sigle == "(AL)")
$idLigue = 15;
elseif ( $sigle == "(FL)")
$idLigue = 16;
elseif ( $sigle == "(IDF)")
$idLigue =17;
elseif ( $sigle == "(N)")
$idLigue = 18;
elseif ( $sigle == "(BE)" OR $sigle == "(CBL)" OR $sigle == "(CA)" OR $sigle == "(LM)" OR $sigle == "(PA)" OR$sigle == "(PCH)")
$idLigue = 19;
elseif ( $sigle == "(AB)" OR $sigle == "(LD)" OR $sigle == "(MPY)" OR $sigle == "(PC)")
$idLigue = 20;
elseif ( $sigle == "(PL)")
$idLigue = 21;
elseif ( $sigle == "(CAZ)" OR  $sigle == "(PR)")
$idLigue = 22;





if ($idLigue == 10) {
  $comite ="au";
$bddComite="au";
}
else if ($idLigue == 11) {
  $comite ="bg";
$bddComite="pl";
}
else if ($idLigue == 12) {
  $comite ="br";
$bddComite="pl";
}
else if ($idLigue == 13) {
  $comite ="ce";
$bddComite="pl";
}
else if ($idLigue == 14) {
  $comite ="";
$bddComite="";
}
else if ($idLigue == 15) {
  $comite ="al";
$bddComite="idf";
}
else if ($idLigue == 16) {
  $comite ="fl";
$bddComite="pl";
}
else if ($idLigue == 17) {
  $comite ="idf";
$bddComite="idf";
}
else if ($idLigue == 18) {
  $comite ="n";
$bddComite="idf";
}
else if ($idLigue == 19) {
  $comite ="ca";
$bddComite="ca";
}
else if ($idLigue == 20) {
  $comite ="ab";
$bddComite="ab";
}
else if ($idLigue == 21) {
  $comite ="pl";
$bddComite="pl";
}
else if ($idLigue == 22) {
  $comite ="pr";
$bddComite="idf";
}

$champ =   $idLigue * 10000 +171;
$seniors="equipeUne";


/***************** */

// $comite ="au";
// $bddComite ="au";
// $champ = 100171;

/*************** */
echo "<p class=\"center lien\">";
 if ($mode != "smart")
echo "<a href=\"../../palmares/palmTerritorial/tableauPalmReg.php?idLigue=$idLigue\" target=\"_top\"> Tous les champions territoriaux du comité <br> et les champions régionaux de la ligue intégrée </a> ";
else
echo "<a href=/smart/palmares/pagePalmTerr.php?comite=$comite&bddComite=$bddComite&champ=$champ&seniors=equipeUne target=\"_top\"> Tous les champions territoriaux du comité <br>
et les champions régionaux de la ligue intégrée</a> ";
echo "</p>";
?>

 <br>
<hr class="colorRed">

<h1>Clubs du comité</h1>
<br>

<h3 class="bold alignLeft"> Clubs professionnels :</h3>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 110, $mode, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 120, $mode, $bdd);?></p>

<h3 class="bold alignLeft">Nationale :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 130, $mode, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 135, $mode, $bdd);?></p>

<h3 class="bold alignLeft">Fédérale 1 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 140, $mode, $bdd);?></p>

<h3 class="bold alignLeft">Fédérale 2 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 150, $mode, $bdd);?></p>

<h3 class="bold alignLeft">Fédérale 3 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 160, $mode, $bdd);?></p>


<?php
?>
 <h3 class="bold alignLeft">Régionale 1 :</h3>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 170, $mode, $bdd);?></p> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 171, $mode, $bdd);?></p> 

 <h3 class="bold alignLeft">Régionale 2 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 180, $mode, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 181, $mode, $bdd);?></p>
 
 <h3 class="bold alignLeft">Régionale 3 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 190, $mode, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 191, $mode, $bdd);?></p>
 

 <?php

?>

<h3 class="bold alignLeft">Equipes féminines :</h3>

<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 281, $mode, $bdd);?></p> 
<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 285, $mode, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 291, $mode, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 295, $mode, $bdd);?></p>



<?php
if ($mode =="smart") {
?>
<style>

h1 {font-size: 23px;}

</style>
<?php
}
?>