<?php
$terr_annee =("terr_".''.$saison);?>

<br />
<div class="center">

<h1>Ligue <?php echo $nomLigue;?></h1>

<?php 
require ("../connect/connexion1.php") ; 
{print("<img src=\"../images/ligues/$sigleLigue.jpg\" border=\"0\" target=_top>");}
echo "<br/><br/><br/>";
?>
</div>							  

<p class="texteGras">Président : </p>
<p class="texte"> 
   <?php  echo $president;?></p>
<?php
 //{print("<img src=\"../images/presidents/$idLigue.gif\" border=\"0\" target=_top>");}

  
   echo "<br />";?>
  <p class="texteGras">Adresse: </p>
 <p class="texte"> 
  <?php
   echo $batiment;
   echo "<br />";
   echo $adresse;
   echo "<br />";
   echo $cp.'  '.$ville;
   echo "<br />";
  ?>
  </p>

<br>
<br>
<p class="texteGras">Contacts </p>
<p class="texte"> <b>Tél :</b> 
  <?php echo $tel; ?>
  <br />
  <b>Fax :</b> 
  <?php echo $fax; ?>
  <br />
  <b>courriel :</b> 
  <br/><br/>
  <b> Site Internet :</b> 
 
</p>
<br>
  <br>

<hr>				  
<hr>
<?php
echo $mode; ?>
<h1> Présentation :</h1>
							
<p class="texte"> La ligue <?php echo $nomLigue; ?> se compose <br/>
	des anciens comités suivants : <br />
  <?php
	echo "<br>";
	$sigle = 0;
							
	if($comite1 !=null)
	{
	 $id = $comite1;
	 nomComite($sigle, $id,$bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
							
	if($comite2 !=null)
	{
	 $id = $comite2;
	 nomComite($sigle, $id,$bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
							
	if($comite3 !=null)
	{
	 $id = $comite3;
	 nomComite($sigle, $id,$bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
	
	if($comite2 !=null)
	{
	 $id = $comite4;
	 nomComite($sigle, $id,$bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
							
	if($comite5 !=null)
	{
	 $id = $comite5;
	 nomComite($sigle, $id, $bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
							
	if($comite6 !=null)
	{
	 $id = $comite6;
	 nomComite($sigle, $id, $bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
							
	echo "<br />";
	//echo "Depuis la saison 2018-2019 le comité $nomComite a integré la ligue "/*.$nomLigue*/;
	echo "<br />";
	echo"<br/>";
	echo "----------------------------------------------------------";
	echo"<br/>";
	?>
</P>
	<h1> Quelques chiffres : </h1>
		<br>												
<?php 

$nb_equipe_tt = $bdd->query("
				SELECT COUNT(siglecomite) 
				FROM bdsaisons 
				WHERE siglecomite='$sigle'"); 
				
	$nb_equipe_tt=$nb_equipe_tt->fetch();?>
	
	
<p class="texte18">
<?php
echo 
"<strong> Nbre de clubs : </strong>".' '.$nb_equipe_tt[0].'<br/><br/>'
.'<strong> Effectif séniors : </strong>'.' '.number_format ($nbreSeniors).'<br/>'.'<br/>'
.'<strong> Effectif Féminins : </strong>'.' '.number_format ($nbreFeminines).'<br/>'.'<br/>'
.'<strong> Effectif Jeunes : </strong>'.' '.number_format ($nbreJeunes+$nbreFemininesJeunes).'<br/>'
.'<strong> dont </strong>'.' '.    number_format ($nbreFemininesJeunes).' féminines'.'<br/>'
.'<strong>  et </strong> '.number_format ($nbreJeunes).' jeunes hommes'.'<br/>'.'<br/>'
.'<strong> Effectif dirigeants : </strong>'.' '.number_format ($nbreDirigeants).'<br/><br/>';
?>
</p>

<?php 

echo"<br/>";
echo "--------------------------------------------------------------";
echo"<br/>";

structureLigue($idLigue, $bdd);
?>

<h1  > Structure de la ligue :<br></h1>
<table width="95%" class="marginAuto">
 <tr> 
    <td width="150" class="texte18"> Divisions </td>
    <td width="80" class="texte18"> <span class=" size2">(En nombre de clubs actifs) </span></td>
 </tr>
 <tr> 
    <td colspan="2"> 
      <hr>
    </td>
  </tr>
 <tr> 
    <td width="150" class="texte18">Professionnelles : </td>
    <td width="80" class="texte18"><?php echo ($d110+$d120);?></td>
  </tr>
  <tr class="backgroundCCCCCC"> 
    <td class="texte18">  Nationales : </td>
    <td class="texte18"><?php echo ($d130+$d135);?></td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <hr>
    </td>
  </tr>
  
  <tr> 
    <td class="texte18">Fédérale  1 : </td>
    <td class="texte18"><?php echo $d140;?></td>
  </tr>
  <tr class="backgroundCCCCCC"> 
    <td class="texte18">Fédérale 2 :</td>
    <td class="texte18"><?php echo $d150;?></td>
  </tr>
  <tr> 
    <td class="texte18">Fédérale 3 :</td>
    <td class="texte18">  <?php echo $d160;?></td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <hr>
    </td>
  </tr>
  <tr class="backgroundCCCCCC"> 
    <td class="texte18">Régionale 1 : </td>
    <td class="texte18"> <?php if($d170 > 0) echo $d170;?></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td class="texte18">Régionale 2 : </td>
    <td class="texte18">  <?php if($d180 > 0) echo $d180;?></td>
  </tr>
  <tr class="backgroundCCCCCC"> 
    <td colspan="4" ></td>
  </tr>
  <tr class="backgroundCCCCCC"> 
    <td class="texte18">Régionale 3 :</td>
    <td class="texte18"><?php if($d190 >0) echo $d190;?> </td>
  </tr>
 
  <tr> 
    <td colspan="2"></td>
  </tr>
<tr> 
    <td colspan="2"> <hr></td>
  </tr>
  <tr> 
    <td class="texte18">Féminines Elite:</td>
    <td class="texte18"><?php  if($d281 >0) echo ($d281+$d285); ?></td>
  </tr>
  </tr>
  <tr class="backgroundCCCCCC"> 
    <td class="texte18">Féminines Fédérale:</td>
    <td class="texte18"><?php  if($d291 >0) echo ($d291+$d301); ?></td>
  </tr>
  <tr> 
    <td colspan="2"> <hr></td>
  </tr>
  <tr> 
    <td class="texte18 bold">Total :</td>
    <td class="texte18 bold"><?php echo ($d110+$d120+$d130+$d135+$d140+$d150+$d160+$d170+$d180+$d190+$d291+$d301); ?></td>
  </tr>
</table>

<br>
<hr>
<br>
<hr>

<p align="center"> 
  <?php   // include("../pub/pub_carre.php");
    echo"<br/>";
	?>
  <font color="#FF0000"> <br>
  ____________________________________________</font> </p>
<br>

<br>
<h1><font color="#000000">Palmarès national </font></h1>
<h3><font size="3"> (Les dix derniers titres de la ligue)</font></h3>
<p class="texte18">
<?php
$sigle = '('.$sigleLigue.')';

$reponse =  $bdd->query("
			SELECT saison,championnat, division, champion 
			FROM bdequipe1 
			WHERE comite1='$sigle'
			AND titre='Champion' 
			AND  championnat='de France' 
			ORDER BY saison 
			DESC limit 0,10"); 
									
	while ($donnees = $reponse->fetch() )
		{ 
		?>
		<?php echo $donnees['saison'].' Champion '. $donnees['championnat'].' '.$donnees['division'].' : <strong> '.$donnees['champion'].'</strong>' ; ?>
		<?php
		echo "<br />";
		} 
?>

<br />
</p>

 <p class="lien">      
<?php
//echo "<a href=../palmares/palmNational/pagePalmLigue.php?idLigue=$idLigue&mode=$mode&page=palmaresRegions > Tous les champions de France de la ligue </a> ";


if ($mode != "smart") 
{  echo "<a href=../palmares/palmNational/pagePalmComite.php?idLigue=$idLigue&mode=$mode> Tous les champions de France de la ligue </a> ";}
else
{ echo "<a href=../smart/smartPage.php?idLigue=$idLigue&mode=smart&page=palmaresRegions> Tous les champions de France de la ligue </a> ";}

?>
   
</p>

<br>
<hr>
<?php if (isset($_GET['saisonChoisie'])) $saisonChoisie=$_GET['saisonChoisie']; else $saisonChoisie=2020;?>
<br />
<!--
<form name="form1" method="post" action="page_comite.php?variable_1=<?php echo $sigle; ?>">
  Choisir une saison : 
  <select name="select" onChange="MM_jumpMenu('parent',this,0)" size="1">
		 <option value="page_ligue.php?saisonChoisie=2018&idLigue=<?php echo $idLigue; ?>"><?php echo $saisonChoisie-1;echo "-".$saisonChoisie; ?></option>
         <option value="page_ligue.php?saisonChoisie=2018&idLigue=<?php echo $idLigue; ?>">2018-2019</option>
  </select>
</form>
-->
<h1 class="colorBlack">Palmarès Régional 
  <?php  $saisonChoisie = 2024;
  echo $saisonChoisie; 
?>
</h1>

<p class="texte18"> 
<?php
  //**** palmarès equipe I de la saison passée *****

$reponse =  $bdd->query("
			SELECT champion, championnat, division 
			FROM bdequipe1 
			WHERE comite1='$sigle' 
			AND titre='Champion' 
			AND rang <'225' 
			AND rang >'165' 
			AND saison='$saisonChoisie' 
			AND rang2='1' 
			AND categorie='A'
			ORDER BY rang "); 

	while ($donnees = $reponse->fetch() )
	{ 											
	 echo "Champion ".$donnees['championnat'].' '.$donnees['division'].' '.":";  
 ?>
 <strong> 
  <?php echo $donnees['champion']; ?>
  </strong>
  <br/>
  <?php
	}											
?>
  <strong> 
	<?php
	echo "<br/>";
	echo "Equipe II";
	echo "<br/>";
	?>
  </strong> 
  <?php
//**** palmarès équipe II de la saison passée*****
 
$reponse = $bdd->query("SELECT champion, championnat, division
						FROM bdequipe2 
						WHERE comite1='$sigle'
						AND titre='Champion' 
						AND saison='$saisonChoisie' 
						AND rang2='2'  and categorie='B' 
						ORDER BY rang "); 
echo"<br />";
 

		while ($donnees = $reponse->fetch() )
				{ 				
  echo "Champion ".$donnees['championnat'].' '.$donnees['division'];
  
  ?>
  : <strong> 
  <?php echo $donnees['champion']; ?>
  </strong> 
  <?php
					 echo "<br/>";
				 } 
				 
?>
</p>
<?php
echo "<br/>";
?>
 
 <p class="lien">     
 <?php
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


 if ($mode != "smart")
echo "<a href=\"../../palmares/palmTerritorial/tableauPalmReg.php?idLigue=$idLigue\" target=\"_top\"> Tous les champions régionaux de la ligue</a> ";
else
echo "<a href=/smart/palmares/pagePalmTerr.php?comite=$comite&bddComite=$bddComite&champ=$champ&seniors=equipeUne target=\"_top\"> Tous les champions régionaux de la ligue</a> ";

?>
      </p> 
<p class="center">
<br>
  <br>
  <hr> <br>
  <br>
  <?php  // include("../pub/pub4.php");
    ?>
  <br>
<font color="#FF0000">____________________________________________</font> 
<br>
<h1>Clubs de la ligue</h1>
<br>
<h3> Clubs professionnels <span class="size3 ">(<?php echo $d110+$d120;?> clubs)</span> :</h3>
 <p class="afficheEquipe"> 
 <?php  
 clubsParLigue($idLigue, "M", 110, $mode, $bdd);
 clubsParLigue($idLigue, "M", 120, $mode, $bdd);
 ?>
 </p>
<h3> Nationales <span class="size3 ">(<?php echo $d130+$d135;?> clubs)</span> :</h3> 
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 130, $mode, $bdd); ?></p>
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 135, $mode, $bdd); ?></p>

<h3>Fédérale 1 <span class="size3 ">(<?php echo $d140;?> clubs)</span> :</h3> 
<p class="afficheEquipe"> <?php clubsParLigue($idLigue, "M", 140, $mode, $bdd);?></p>
<h3>Fédérale 2 <span class="size3 ">(<?php echo $d150;?> clubs)</span> :</h3> 
<p class="afficheEquipe"> <?php clubsParLigue($idLigue, "M", 150, $mode, $bdd);?></p>

<h3>Fédérale 3 <span class="size3 ">(<?php echo $d160;?> clubs)</span> :</h3> 
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 160, $mode, $bdd);?></p>
<br />
<h3>
 

<h3>Régionale 1 <span class="size3 ">(<?php echo $d170;?> clubs)</span> :</h3>
 <p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 170, $mode, $bdd);?></p> 
 
 <h3>Régionale 2 <span class="size3 ">(<?php echo $d180;?> clubs)</span> :</h3> 
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 180, $mode, $bdd);?></p>

<h3>Régionale 3 <span class="size3 ">(<?php echo $d190;?> clubs)</span> :</h3> 
 <p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 190, $mode, $bdd);?></p>

<h3>Equipes féminines :</h3>
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "F", 281, $mode, $bdd);?></p> 
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "F", 285, $mode, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "F", 291, $mode, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "F", 295, $mode, $bdd);?></p>
</p>
<p>&nbsp;</p>
<hr /><hr />

<p> 
  <?php // require ("../connect1/connection1.php") ;?>
  <?php


//$query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url, bdclubs.fusion 
//			FROM bdsaisons, bdclubs 
//			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and (terr_2014='F' )";
//				$result = mysql_query($query);
//				while($row = mysql_fetch_array($result))
//						{                                    
//						echo "<img src=\"$row[4]\">";
//						echo "  </b> <a href=\"$row[3]\">$row[1]</a>    ($row[5])";
//						echo "<br>";
//						}
//mysql_close(); ?>
  <?php
//echo "<br/>";
echo "<br/>";
?>
</p>

<?php if($mode != "smart")
$marginLeft = "150px";
else
$marginLeft = "0px";
?>
<style>
.accordion {
  margin-left: <?php echo $marginLeft; ?>;
  font-family:arial;
  background-color: white;
  color: red;
  cursor: pointer;
  padding: 18px;
  width: 80%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 23px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: white; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>

<button class="accordion ">Ententes, regroupements, fusions : <span class="size3">(Cliquer pour ouvrir)</span></button>
<div class="panel">
  <p class="afficheEquipe"><?php clubsParLigueEnEntente($idLigue,"M", 970, $bdd); ?></p>
 
</div>


<button class="accordion ">Clubs en sommeil : <span class="size3">(Cliquer pour ouvrir)</span></button>
<div class="panel">
  <p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 980, $mode, $bdd);?></p>
</div>

<button class="accordion">Que sont ils devenus ? : <span class="size3">(Cliquer pour ouvrir)</span></button>
<div class="panel">
  <p></p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<?php if($mode =="smart") {
?>
<style>

h1 {

 font-size :18px; 
}



</style>
<?php
}

?>