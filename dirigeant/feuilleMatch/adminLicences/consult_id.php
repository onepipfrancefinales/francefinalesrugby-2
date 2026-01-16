

<p>
<?php $comite = $_GET['comite'];?>
<?php
if (isset ($id_equipe1)) $id_equipe1=$id_equipe1;$id_equipe1="";
 $id_equipe2 = $_GET['equipe'];?>
<?php if ($id_equipe1>$id_equipe2)
   $id_equipe=$id_equipe1;
   else
   $id_equipe=$id_equipe2;
   ?>
<?php
    $bdcomite=("php".''.$comite.''."_joueurs");
  
 



require '../fonctions.php';
require   "../../../connect/connexion2.php";
calculEffectif ($comite, $equipe, $bdd);

?>
<?php
require   "../../../connect/connexion1.php";
$reponse = $bdd->query("SELECT sigle,comite, id 
						FROM bdclubs 
						WHERE idffr='$id_equipe'"); 
							while ($donnees = $reponse->fetch() )
								{ 
								$equipe = $donnees['id'];
								}
?>

<p class="texte"> Effectif s&eacute;nior : 
  <?php echo $effectifJoueurs;?>
  licenci&eacute;s

</p>  
<table width="1250" border="0">
  <tr valign="top"> 
    <td colspan="4" bgcolor="#999999" height="12"></td>
  </tr>
  <tr valign="top"> 
    <td class="texte" colspan="3"> Joueurs </td>
    <td class="texte" width="250"> Dirigeants</td>
  </tr>
  <tr valign="top" bgcolor="#CCCCCC"> 
    <td colspan="4" height="12"></td>
  </tr>
  <tr valign="top"> 
    <td > 
      
      <?php

require   "../../../connect/connexion2.php";

?>
      <p class="nomJoueur"> 
        <?php
$reponse = $bdd->query("SELECT nom, prenom, id, licence
						FROM $bdcomite 
						WHERE club=$equipe and fonction='1'and comite ='1' 
						ORDER BY nom_cache limit 0,33");
						while ($donnees = $reponse->fetch() )
									{
									 $id = $donnees['id'];
									 $nom = $donnees['nom'];
									 $prenom = $donnees['prenom'];
									 
									
									echo substr($id,-3).' '. $nom.' '. $prenom; ;
									echo "<br />".''."<br />";							
									}
									?>
      </p>
    </td>
    <td > 
      <p class="nomJoueur"> 
        <?php		
$reponse = $bdd->query("SELECT nom, prenom, id, licence 
						FROM $bdcomite 
						WHERE club=$equipe  and fonction='1' and comite ='1' 
						ORDER BY nom_cache 
						LIMIT 33,33");
							while ($donnees = $reponse->fetch() )
									{
									 $id = $donnees['id'];
									 $nom = $donnees['nom'];
									 $prenom = $donnees['prenom'];
									 
									
									echo substr($id,-3).' '. $nom.' '. $prenom; ;
									echo "<br />".''."<br />";	
									}
							?>
      </p>
    </td>
    <td > 
      <p class="nomJoueur"> 
        <?php
$reponse = $bdd->query("SELECT nom, prenom, id, licence
						FROM $bdcomite 
						WHERE club=$equipe and fonction='1' and comite ='1'  
						ORDER BY nom_cache 
						LIMIT 66,33");
							while ($donnees = $reponse->fetch() )
									{
									 $id = $donnees['id'];
									 $nom = $donnees['nom'];
									 $prenom = $donnees['prenom'];
									 
									
									echo substr($id,-3).' '. $nom.' '. $prenom; ;
									echo "<br />".''."<br />";
									}
?>
      </p>
    </td>
    <td > 
      <p class="nomJoueur"> 
        <?php
$reponse = $bdd->query("SELECT nom, prenom, id, licence 
						FROM $bdcomite 
						WHERE club=$equipe  and fonction='5' 
						ORDER BY nom_cache ");
							while ($donnees = $reponse->fetch() )
										{
									 $id = $donnees['id'];
									 $nom = $donnees['nom'];
									 $prenom = $donnees['prenom'];
									 
									
									echo substr($id,-3).' '. $nom.' '. $prenom; ;
									echo "<br />".''."<br />";
									}
//mysql_close(); ?>
      </p>
    </td>
  </tr>
</table>
