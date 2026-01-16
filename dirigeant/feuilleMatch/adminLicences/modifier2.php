
<p>
  <?php
  
 $comite = $_GET['comite'];
 $equipe = $_GET['equipe'];
 $idSaisie=$_POST['ID'];

 
 $bdcomite=("php".''.$comite.''."_joueurs");
  
 $prefixeId = substr($equipe,0,5);
 $id = $idSaisie;echo "<br />";
 
 
echo "prefixe : ".$prefixeId."<br/>";
echo "id saisie :".$idSaisie."<br/>"; 
echo "id : ".$id."<br/>"."<br />";
 ?>
</p>

<form name="insertion" action="page_modifier3.php?equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ; ?>&id=<?php echo $id ; ?>" method="POST">
  <b><font size="4"> 
  <?php

require   "../../../connect/connexion2.php";
?>
  </font></b> <b><font size="4"> 
  <?php
 

 $reponse = $bdd->query(" SELECT nom, prenom, licence, type_licence, premiereLigne 
						FROM $bdcomite  
						WHERE club=$equipe and id = '$id'" ) ;
 
							while ($donnees = $reponse->fetch() )
 
 					 				{
 									$nom = $donnees['nom'];
									$prenom = $donnees['prenom'];
									$position_terrain = $donnees['position_terrain'];
									$type_licence = $donnees['type_licence'];
									$premiereLigne = $donnees['premiereLigne'];

 									 }
									 


?>
  </font></b> 
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" cellspacing="2" cellpadding="2" width="1050">
    <tr align="center"> 
      <td colspan="4" height="2"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="3" height="32" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"><b>Concernant 
        la rubrique cat&eacute;gorie des licences :</b></font></td>
      <td rowspan="14" height="32" width="322" valign="top"> 
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr align="center"> 
      <td width="263" height="32"><font size="5" face="Arial, Helvetica, sans-serif"><b><font size="4">Pour 
        les joueurs</font></b></font></td>
      <td height="32" colspan="2"><font face="Arial, Helvetica, sans-serif"> <br>
        Inscrire <b>A</b> , <b>B</b> , <b> C</b> <br>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="263" height="32">&nbsp;</td>
      <td height="32" colspan="2">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="263" height="32" valign="top"><b><font face="Arial, Helvetica, sans-serif" size="4">Pour 
        les dirigeants</font></b></td>
      <td height="32" colspan="2" valign="top"> 
        <p align="left"><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font color="#000000">1</font></b></font><font color="#000000"><b><font face="Arial, Helvetica, sans-serif">- 
          E</font></b></font><font face="Arial, Helvetica, sans-serif"><b>NT</b> 
          pour les entraineurs et adjoints<br>
          <b>2- RES</b> pour les responsables du dopage et des visas<br>
          <b>3- SOI</b> pour soigneur<b>,</b>.<br>
          </font><b><font face="Arial, Helvetica, sans-serif"><br>
          <i><font color="#FF0000">Obligatoire uniquement pour les comp&eacute;titons 
          f&eacute;d&eacute;rales</font></i></font></b><br>
          <br>
          <font face="Arial, Helvetica, sans-serif"><b>4-MED </b>pour m&eacute;decin<br>
          <b>5-PRE </b>pour pr&eacute;parateur<br>
          </font></p>
      </td>
    </tr>
    <tr align="center"> 
      <td width="263" height="32">&nbsp;</td>
      <td height="32" colspan="2"><br>
      </td>
    </tr>
    <tr align="center"> 
      <td width="263" height="32"> 
        <?php
		

require   "../../../connect/connexion2.php";

// vérification des la saisie 
//*******
//********  pramaetrage joueurs dirigeants *********
//**************************************************
//*************************************************
		$indicatifJoueur =1*1000;
		$indicatifDirigeant =5*1000;
		$equipe1000 = $equipe * 10000;
		$id = $equipe1000 + $indicatifJoueur + $idSaisie;
		
		echo "id :".$id;echo "<br />";
		
$reponse = $bdd->query("SELECT COUNT(id)
						FROM $bdcomite 
						WHERE id='$id'");  	
								while ($row = $reponse->fetch() )
									{
									$verif_id = $row[0];
									}
		echo "verif : ".$verif_id."<br />";
		
		
		if ($verif_id == 1)
		{
		
$reponse = $bdd->query("SELECT nom, prenom, licence, type_licence, premiereLigne 
						FROM $bdcomite 
						WHERE club=$equipe and id='$id'");  
									while ($donnees = $reponse->fetch() )
									{ 
									$nom = $donnees['nom'];	
									$prenom = $donnees['prenom'];
									$licence = $donnees['licence'];
									$type_licence = $donnees['type_licence'];
									$premiereLigne = $donnees['premiereLigne'];
									 }




?>
      </td>
      <td height="32" colspan="2">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="263" height="32">&nbsp;</td>
      <td height="32" colspan="2">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="263"><font face="Arial, Helvetica, sans-serif"><b>Nom :</b></font></td>
      <td colspan="2"> 
        <div align="left"> 
          <input type="text" name="nom" value="<?php echo $nom ;?>" size="50">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="263"><font face="Arial, Helvetica, sans-serif"><b>Pr&eacute;nom 
        :</b></font></td>
      <td colspan="2"> 
        <div align="left"> 
          <input type="text" name="prenom" value="<?php echo $prenom ;?>" size="50">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="263"><font face="Arial, Helvetica, sans-serif"><b>N&deg; de licence 
        : </b></font></td>
      <td colspan="2"> 
        <div align="left"> 
          <input type="text" name="licence" value="<?php echo $licence ;?>" size="50">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="263" height="22"><font face="Arial, Helvetica, sans-serif"><b>Cat&eacute;gorie 
        de la licence :</b></font></td>
      <td width="167" height="22"> 
        <div align="left"> 
          <input type="text" name="type_licence" value="<?php echo $type_licence ;?>" size="5">
          <select name="select">
          </select>
        </div>
      </td>
      <td width="272" height="22"><font size="3">En</font><font size="3"> cas 
        de tutorat, ajouter un <b><font face="Arial, Helvetica, sans-serif">T</font></b>, 
        apr&egrave;s la couleur de la licence sans espace.</font></td>
    </tr>
    <tr align="center"> 
      <td width="263">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="263">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="3" height="64"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
<?php
}
else
{
?>
<br/><br/><br/>
<h2>
  Traitement impossible, erreur de saisie.<br>
  <?php
}
?>
  <a href="page_modifier.php?id_equipe=&equipe=<?php echo $equipe;?>&comite=<?php echo $comite;?>&connect=<?php echo $connect;?>"> 
  R&eacute;esssayez</a> 
  
  </h2>
