<?php
//$saisonChoisie = $_GET['saisonChoisie'];
echo "<br/>";
$terr_annee =("terr_".''.$saison);?>
<h1><font color="#000000">Comit&eacute;   <?php echo $nomComite;?></font> </h1>


<?php 
require ("../connect/connexion1.php") ; 
{print("<img src=\"/images/comites/$sigle.jpg\" border=\"0\" target=_top>");}
echo "<br/><br/><br/>";
$reponse = $bdd->query("SELECT * 
						FROM bdcomite 
						WHERE sigle='$sigle' "); 
							while ($donnees = $reponse->fetch() )
							{ 
							?>
							  <br/>
							  <br/>
<hr />
<p align="center"> 
							 
							  
							<hr />
							<h1><font color="#000000"> Pr&eacute;sentation :</font></h1>
							<p class="texte">
							Le comit&eacute; <?php echo $nomComite; ?> se composait  des <?php //echo $donnees['nbre_dep'];?> d&eacute;partements  suivants :
							<br />
							<?php
							echo $donnees['dep1'].'<br/>'. $donnees['dep2'].'<br/>'.$donnees['dep3'].'<br/>'.$donnees['dep4'].'<br/>'.$donnees['dep5'].'<br/>'. $donnees['dep6'].' '.$donnees['dep7'].' '.$donnees['dep8'].' '.$donnees['dep9'].' '. $donnees['dep10'].' '.$donnees['dep11'].' '.$donnees['dep12'];
							
							echo "<br />";
									echo "Depuis la saison 2018-2019 le comité $nomComite a integré la ligue "/*.$nomLigue*/;
									echo "<br />";
							echo"<br/>";
							echo "----------------------------------------------------------";
							echo"<br/>";
							?>
							</P>
							<p class="texte">
							  Quelques chiffres :
							  </p>
							
							<?php 
							
							
							//$nb_equipe_tt=mysql_query("SELECT SUM(siglecomite)
							$nb_equipe_tt=$bdd->query("SELECT COUNT(siglecomite) 
														FROM bdsaisons 
														WHERE siglecomite='$sigle'"); 
							 $nb_equipe_tt=$nb_equipe_tt->fetch();
							 //echo $nb_equipe_tt[0]; 
							?>
							<p class="texte18">
							<?php
							
							
							echo 
							"<strong> Nbre de clubs : </strong>".' '.$nb_equipe_tt[0].'<br/><br/>'
							.'<strong> Effectif s&eacute;nior : </strong>'.' '.$donnees['nbre_senior'].'<br/>'
							.'<strong> Effectif F&eacute;minin : </strong>'.' '.$donnees['nbre_feminine'].'<br/>'
							.'<strong> Effectif Jeune : </strong>'.' '.$donnees['nbre_jeune'].'<br/>'
							.'<strong> Effectif dirigeant : </strong>'.' '.$donnees['nbre_dirigeant'].'<br/><br/>';
							
							}
							?>
</p>

<?php 
/*
 $nb_equipe_pro=$bdd->query("	SELECT SUM(Nbre) 
 								FROM bdsaisons 
								WHERE siglecomite='$sigle' and($terr_annee= 'Top 14'or $terr_annee= 'Pro D2')");
 $nb_equipe_pro=$nb_equipe_pro->fetch();
// echo "$nb_equipe_pro[0]"; 

 $nb_equipe_fed1=$bdd->query("SELECT SUM(Nbre) from bdsaisons where $terr_annee= 'Federale 1' and siglecomite='$sigle' and type = 'masc'"); 
 $nb_equipe_fed1=$nb_equipe_fed1->fetch();
// echo "$nb_equipe_fed1[0]"; 
 
 $nb_equipe_fed2=$bdd->query("SELECT SUM(Nbre) from bdsaisons where $terr_annee= 'Federale 2' and siglecomite='$sigle' and type = 'masc'"); 
 $nb_equipe_fed2=$nb_equipe_fed2->fetch();
 //echo "$nb_equipe_fed2[0]"; 

 $nb_equipe_fed3=$bdd->query("SELECT SUM(Nbre) from bdsaisons where $terr_annee= 'Federale 3' and siglecomite='$sigle' and type = 'masc'"); 
 $nb_equipe_fed3=$nb_equipe_fed3->fetch();
 //echo "$nb_equipe_fed3[0]"; 
 
 $nb_equipe_fem=$bdd->query("SELECT SUM(Nbre) from bdsaisons where  siglecomite='$sigle' and type = 'fem'"); 
 $nb_equipe_fem=$nb_equipe_fem->fetch();
 //echo "$nb_equipe_fem[0]"; 
 
 $nb_equipe_terr=$nb_equipe_tt[0]-( $nb_equipe_fem[0]+$nb_equipe_fed3[0]+$nb_equipe_fed2[0]+$nb_equipe_fed1[0]+$nb_equipe_pro[0]);

*/
?>

<p class="texte18">
<?php
 /*
echo
"<strong>Nbre de clubs professionnels :</strong> ".' '.$nb_equipe_pro[0].'<br/>'
.'<strong> Nbre de clubs en f&eacute;d&eacute;rale 1 :</strong>'.' '.$nb_equipe_fed1[0].'<br/>'
.'<strong> Nbre de clubs en f&eacute;d&eacute;rale 2 :</strong>'.' '.$nb_equipe_fed2[0].'<br/>'
.'<strong> Nbre de clubs en f&eacute;d&eacute;rale 3 :</strong>'.' '.$nb_equipe_fed3[0].'<br/>'
.'<strong> Nbre de clubs dans les comp&eacute;titions territoriales : </strong>'.' '. $nb_equipe_terr.'<br/>'.'<br/>'

.'<strong> Nbre de clubs f&eacute;minins: </strong>'.' '.$nb_equipe_fem[0].'<strong> dont </strong>'.'  '.$donnees['fem_elite'].' en &eacute;lite'.'<br/><br/>';
*/
?>
</p>

<br/>
<hr />
<br/>



  

<br>
<br>
<hr />

<p align="center"> 
   <?php //include("../pub/pub_displayHorizontal.php");?>
   
  <font color="#FF0000"> <br>
  _______________________________________________________</font> </p>
<br>

<br>
<h1><font color="#000000">Palmar&egrave;s national </font></h1>
<h3> (Les dix derniers titres du comit&eacute;)</h3>


<p class="texte18">
<?php

$reponse = $bdd->query("SELECT saison,championnat, division, champion 
						FROM bdequipe1 
						WHERE comite1='$sigle'and titre='Champion' and  championnat='de France' 
						ORDER BY saison DESC limit 0,10"); 
									while ($donnees = $reponse->fetch() )
									{ ?>
										<?php echo $donnees['saison'].' Champion '. $donnees['championnat'].' '.$donnees['division'].' : <strong> '.$donnees['champion'].'</strong>' ; ?>
										<?php
										 echo "<br />";
									} 
?>

<?php   echo "<br />"; ?>
</p>

 <p class="lien">      
	  <?php

echo "<a href=../palmares/palmNational/pagePalmComite.php?variable_1=$sigle > Tous les champions de France du comite </a> ";
?>
   
</p>

<br />
<hr />
<?php if (isset($_GET['saisonChoisie'])) $saisonChoisie=$_GET['saisonChoisie']; else $saisonChoisie=2018;?>
<form name="form1" method="post" action="page_comite.php?variable_1=(CA)">
 <font color = "#000000" > Choisir une saison : </font>
  <select name="select" onChange="MM_jumpMenu('parent',this,0)" size="1">
		 <option value="page_comite.php?saisonChoisie=2018&variable_1=<?php echo $sigle; ?>"><?php echo $saisonChoisie-1;echo "-".$saisonChoisie; ?></option>
          <option value="page_comite.php?saisonChoisie=2018&variable_1=<?php echo $sigle; ?>">2017-2018</option>
          <option value="page_comite.php?saisonChoisie=2017&variable_1=<?php echo $sigle; ?>">2016-2017</option>
          <option value="page_comite.php?saisonChoisie=2016&variable_1=<?php echo $sigle; ?>">2015-2016</option>
  </select>
</form>
<br />

<h1><font color = "#FF0000" >Palmar&egrave;s Territorial 
    <?php//  $saisonChoisie=$_GET['saisonChoisie'];  ?>
   <?php //echo "$saison1";  ?>
    <?php echo "$saisonChoisie";  ?></font></h1>


 

<p class="texte18">
<?php

$reponse = $bdd->query("SELECT champion, championnat, division 
						FROM bdequipe1 
						WHERE comite1='$sigle' and titre='Champion' and rang <'225' and rang >'165' 
										and saison='$saisonChoisie' and rang2='1' 
										and categorie='A'
						ORDER BY rang "); 

								while ($donnees = $reponse->fetch() )
											{ 
												?>
												Champion 
												<?php echo $donnees['championnat'];  ?> <?php echo $donnees['division'];  ?>
												: <strong> 
												<?php echo $donnees['champion']; ?>
												</strong> 
												<?php
												 echo "<br/>";
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
$reponse = $bdd->query("SELECT champion, championnat, division
						FROM bdequipe2 
						WHERE comite1='$sigle'and titre='Champion' and saison='$saisonChoisie' and categorie='B' 
						ORDER BY rang "); 
echo"<br />";
 

		while ($donnees = $reponse->fetch() )
				{ 
					?>
					Champion 
					<?php echo $donnees['championnat'];  ?> <?php echo $donnees['division'];  ?>
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
require '../connect/connexion1.php';
//nomComite ($sigle, 0, $bdd);
echo "<a href=../../palmares/palmTerritorial/tableauPalmTerr.php?paramIdComite=$idComite target=_top> Tous les champions territoriaux du comite </a> ";
?>
      </p> 
<p align="center"><br>
  <font color="#FF0000"><br>
  <hr /></font> <br>
  <br>
  
  <?php  //  include("pub4.php");
    ?>
 

<!--
 <br>
<font color="#FF0000">_______________________________________________________</font> 
<p>&nbsp;</p>
<h1><font color="#000000">Clubs du comit&eacute;</font></h1>
<br />

<h3> Clubs professionnels :</h3>
<p class="afficheEquipe"><?php // clubsParDivision($sigle, 110, 120, 10,  $saison, $bdd); ?></p>

<h3>Nationale :</h3> 
<p class="afficheEquipe"><?php// clubsParDivision($sigle, 130, 10, 10,  $saison, $bdd); ?></p>

<h3>F&eacute;d&eacute;rale 1 :</h3> 
<p class="afficheEquipe"><?php// clubsParDivision($sigle, 140, 10, 10,  $saison, $bdd); ?></p>

<h3>F&eacute;d&eacute;rale 2 :</h3> 
<p class="afficheEquipe"><?php// clubsParDivision($sigle, 150, 10, 10,  $saison, $bdd);?></p>

<h3>F&eacute;d&eacute;rale 3 :</h3> 
<p class="afficheEquipe"><?php// clubsParDivision($sigle, 160, 10, 10,  $saison, $bdd);?></p>

 <h3>Honneur ou Pr&eacute;-f&eacute;d&eacute;rale :</h3> 
 <p class="afficheEquipe"><?php//	clubsParDivision($sigle, 170, 171, 10, $saison, $bdd);?></p>

 <h3>Promotion honneur ou R&eacute;gionale 1:</h3> 
 <p class="afficheEquipe"><?php//	clubsParDivision($sigle, 180, 181, 10,  $saison, $bdd);?></p>

<h3>1re / 2me S&eacute;rie ou R&eacute;gionale 2:</h3> 
 <p class="afficheEquipe"><?php //clubsParDivision($sigle, 190, 195, 191,  $saison, $bdd);?></p>

<h3>3me / 4me S&eacute;rie ou R&eacute;gionale 3:</h3> 
<p class="afficheEquipe"><?php// clubsParDivision($sigle, 210, 215, 211,   $saison, $bdd);	?></p>

<h3>Equipes f&eacute;minines :</h3>
<p class="afficheEquipe">
-->  
  
  <?php 
  /*
	$reponse = $bdd->query("SELECT bdsaisons.id, bdclubs.nom_1
						FROM bdsaisons, bdclubs 
						WHERE bdsaisons.code_bdsaison=substr(bdclubs.id,-5) 
						AND bdsaisons.siglecomite='$sigle' 
						AND bdclubs.type = 'F'");
						
         			while($row = $reponse->fetch())
								{                 		 
								$codeEquipe=$row[0];
								echo "<a href=\"pageclub00.php?champion=$codeEquipe\"><img src=\"../images/blasons200_200/$codeEquipe.gif\" height=\"25\" width=\"25\">";
								echo "<a href=\"pageclub00.php?champion=$codeEquipe\">$row[1]</a>";
								echo "<br />";
								}
	
	*/
	?>
</p>
<p>&nbsp;</p>
<hr /><hr />
<h3>Clubs ayant fusionn&eacutes : </h3>
<p> 
  <?php
  /*
 require ("../connect/connexion1.php") ;
$query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url, bdclubs.fusion 
			FROM bdsaisons, bdclubs 
			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and (terr_2014='F' )";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result))
						{                                    
						echo "<img src=\"$row[4]\">";
						echo "  </b> <a href=\"$row[3]\">$row[1]</a>    ($row[5])";
						echo "<br>";
						}
mysql_close(); 
echo "<br/>";
*/
echo "<br/>";

?>
</p>
<h3>Clubs en sommeils : </h3>
<p>


<?php
// require ("../connect/connexion1.php") ; 
// $query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url 
// 			FROM bdsaisons, bdclubs 
//			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and (terr_2014='S' )";
// $result = mysql_query($query);
//         while($row = mysql_fetch_array($result))
//	{                  
//   echo "  </b> <a href=\"$row[3]\">$row[1]</a>,";	}
//	mysql_close(); 
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";


  // include("pub_carre.php");  ?>

	
