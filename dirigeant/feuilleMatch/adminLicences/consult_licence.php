
  <?php 
  
 if (isset ($id_equipe1)) $id_equipe1 = $id_equipe1; else  $id_equipe1 ="";  
 if (isset ($_GET['comite'])) $comite = $_GET['comite']; else  $comite =""; 
 if (isset ($_GET['equipe'])) $equipe = $_GET['equipe']; else  $equipe =""; 
  
  
 ?>
  <?php //$id_equipe1 = $_POST['equipe'];?>
  <?php $id_equipe2 = $_GET['equipe'];?>
  <?php 

 if ($id_equipe1>$id_equipe2)
   $id_equipe=$id_equipe1;
   else
   $id_equipe=$id_equipe2;


require   "../../../connect/connexion1.php";


$reponse = $bdd->query("SELECT sigle,comite, id 
						FROM bdclubs 
						WHERE idffr='$id_equipe'"); 
								while ($donnees = $reponse->fetch() )
										{ 
										$equipe = $donnees['id'];
										}
?>
 <font size="5"><b>
 <?php  echo  "Effectif seniors : ".$effectifJoueurs; ?>

 licenci&eacute;s</b></font><br/>

   
 <?php $bdcomite=("php".''.$comite.''."_joueurs");
// echo $bdcomite;
// echo $connect;
 ?>
<table width="1250" border="0">
  <tr valign="top"> 
    <td bgcolor="#999999" height="12" colspan="4"><font face="Arial, Helvetica, sans-serif"></font></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td colspan="3" height="20"> 
      <div align="center"><font color="#000000" size="5" face="Arial, Helvetica, sans-serif"><b><font size="4">JOUEURS</font></b></font></div>
    </td>
    <td height="20" width="411"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">DIRIGEANTS</font></b></div>
    </td>
  </tr>
  <tr valign="top" bgcolor="#CCCCCC"> 
    <td height="12" colspan="4">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td width="815">
      <p>
        <?php


require   "../../../connect/connexion2.php";

?>
        <?php
//echo "equipe : ".$equipe;echo "<br />";
//echo "bdcomite : ".$bdcomite;echo "<br />";



nom_joueur ($comite, $equipe, $bdd, $effectifJoueurs);

for ($i=0; $i< $effectifJoueurs/2; $i++)
	{
	?>
      <div class="nomJoueurConsult"> 
        <?php	echo ${"tabNom".$i}.'  '.${"tabPrenom".$i};	?>
      </div>
      <div class="licenceConsult"> 
        <?php echo "Licence : ".${"tabLicence".$i};?>
      </div>
      <?php	
	echo "<br/>";echo "<br/>";
	}


?>
    </td>
    <td width="815"> 
      <p>
        <?php


require   "../../../connect/connexion6.php";

?>
        <?php
//echo "equipe : ".$equipe;echo "<br />";
//echo "bdcomite : ".$bdcomite;echo "<br />";



nom_joueur ($comite, $equipe, $bdd, $effectifJoueurs);

for ($i=ceil($effectifJoueurs/2); $i< $effectifJoueurs; $i++)
	{
	?>
      <div class="nomJoueurConsult"> 
        <?php	echo ${"tabNom".$i}.'  '.${"tabPrenom".$i};	?>
      </div>
      <div class="licenceConsult"> 
        <?php echo "Licence : ".${"tabLicence".$i};?>
      </div>
      <?php	
	echo "<br/>";echo "<br/>";
	}


?>
      <p>&nbsp; 
    </td>
    <td width="10" bgcolor="#999999">&nbsp;</td>
    <td width="411"> 
      <p><font face="Arial, Helvetica, sans-serif"> 
        <?php
$reponse = $bdd->query("SELECT nom, prenom, id, licence, type_licence, premiereLigne 
						FROM $bdcomite 
						WHERE club=$equipe and fonction='5'  
						ORDER BY nom_cache limit 0,100");
							while ($donnees = $reponse->fetch() )
									{
									?>
        </font> 
      <p><font face="Arial, Helvetica, sans-serif"> <font size="5"> 
        <?php echo $donnees['nom']; ?>
        <?php echo $donnees['prenom']; ?>
        </font><b><br>
        Lic<font size="3">ence</font> :</b> 
        <?php echo $donnees['licence']; ?>
        - <b>Qualit&eacute; :</b> 
        <?php echo $donnees['type_licence']; ?>
        </font> 
      <p> 
        <?php
									}
?>
      <p>&nbsp; 
    </td>
  </tr>
</table>

