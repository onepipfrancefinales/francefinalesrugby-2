
<p> 
  <?php $comite = $_GET['comite'];?>
  <?php// $equipe = $_POST['equipe'];?>
  <?php   $bdcomite=("php".''.$comite.''."_joueurs");?>
  <?php

if (isset($nbre)) $nbre=$nbre; else $nbre="non defini";

require   "../../../connect/connexion2.php";


require '../fonctions.php';
calculEffectif ($comite, $equipe, $bdd);
nom_joueur ($comite, $equipe, $bdd, $effectifJoueurs); 
?>
 
<p class="texte">  Effectif s&eacute;niors : 
<?php echo $effectifJoueurs;?>
  licenci&eacute;s <br/>
  Nombre de dirigeants : 

 </p>
  
<table width="1250" border="0">
  <tr valign="top"> 
    <td colspan="5" bgcolor="#999999" height="12"></td>
  </tr>
  <tr valign="top"> 
    <td colspan="4"> 
      <h4>Joueurs</h4>
    </td>
    <td width="250"> 
      <h4>Dirigeants</h4>
    </td>
  </tr>
  <tr valign="top" bgcolor="#CCCCCC"> 
    <td colspan="5" height="7">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td > 
      <p class="nomJoueur"> 
        <?php



$nbreNomColonne = $effectifJoueurs / 4;

//arrondi à l'entier inrterieur

$nbreNomColonne=floor($nbreNomColonne);

for ($i=0; $i < $nbreNomColonne; $i++)
	{
	echo ${"tabNom".$i}.' '.${"tabPrenom".$i}.' '."<br />".''."<br />"; 
	}

										
?>
    </td>
    <td > 
      <p class="nomJoueur"> 
        <?php

for ($i= $nbreNomColonne; $i<($nbreNomColonne*2); $i++)
	{
	echo ${"tabNom".$i}.' '.${"tabPrenom".$i}.' '."<br />".''."<br />"; 
	}

										
?>
      </p> 
    </td>
    <td > 
      <p class="nomJoueur"> 
        <?php



for ($i=$nbreNomColonne*2; $i<($nbreNomColonne*3); $i++)
	{
	echo ${"tabNom".$i}.' '.${"tabPrenom".$i}.' '."<br />".''."<br />"; 
	}

										
?>
      </p> 
    </td>
    <td > 
      <p class="nomJoueur"> 
        <?php



for ($i=$nbreNomColonne*3; $i<=$effectifJoueurs; $i++)
	{
	echo ${"tabNom".$i}.' '.${"tabPrenom".$i}.' '."<br />".''."<br />"; 
	}

										
?>
      </p> 
    </td>
    <td > 
   <p class="nomJoueur">  
<?php
$reponse = $bdd->query("SELECT nom, prenom, id, fonction 
						FROM $bdcomite 
						WHERE club=$equipe and fonction='5' 
						ORDER BY nom_cache ");
							while ($donnees = $reponse->fetch() )
										{
										echo $donnees['nom'].' '.$donnees['prenom'].''."<br />".''."<br />";  
										}
										
 ?>
        </p> 
    
    </td>
  </tr>
</table>