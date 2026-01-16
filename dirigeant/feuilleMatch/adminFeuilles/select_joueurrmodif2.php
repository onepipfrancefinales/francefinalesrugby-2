
 <?php $championnat = $_POST['championnat'];?>
 <?php $code_div = $_GET['code_div'];?>
 <?php $code_match = $_GET['code_match'];?>
 <?php $date = $_GET['date'];?>
 <?php $comite = $_GET['comite'];?>
 <?php $id_equipe = $_GET['id_equipe'];?>
 <?php $equipe = $_GET['equipe'];?>
 <?php $equipeA = $_GET['equipeA'];?>
 <?php $equipeB = $_GET['equipeB'];?>

 <?php $connect = $_GET['connect'];?>
 <?php// $bdfeuilleA=("php".''.$comite.''."_feuilleA");?>
 <?php// $bdfeuilleB=("php".''.$comite.''."_feuilleB");?>

 
<?php //echo $bdfeuilleA;?>
<?php// echo $code_match ;?>
<?php// echo $comite ;?>
<?php// echo $championnat;?>
<?php// echo $equipe ;?>
<?php// echo $connect;?>
<?php// echo $equipeA ;?>

<?php// echo $equipeB ;?>
<?php// echo $bdcomite;?>

<?php
if($equipe==$equipeA)
	 {
	  
	  $bdfeuille=("php".''.$comite.''."_feuilleA");
	  }
	  else
	  {
	  
	  $bdfeuille=("php".''.$comite.''."_feuilleB");
	  }
	  echo $bdfeuille;
?>

<?php $bdcomite=("php".''.$comite.''."_joueurs");?>

<?php
require ("../../../$connect.php")	
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db2"); // Sélection de la base onepip
?>
<?php
  //récupération des valeurs des champs:
$N1 = $_POST['N1'];
$N2 = $_POST['N2'];
$N3 = $_POST['N3'];
$N4 = $_POST['N4'];
$N5 = $_POST['N5'];
$N6 = $_POST['N6'];
$N7 = $_POST['N7'];
$N8 = $_POST['N8'];
$N9 = $_POST['N9'];
$N10 = $_POST['N10'];
$N11 = $_POST['N11'];
$N12 = $_POST['N12'];
$N13 = $_POST['N13'];
$N14 = $_POST['N14'];
$N15 = $_POST['N15'];
$N16 = $_POST['N16'];
$N17 = $_POST['N17'];
$N18 = $_POST['N18'];
$N19 = $_POST['N19'];
$N20 = $_POST['N20'];
$N21 = $_POST['N21'];
$N22 = $_POST['N22'];
$N23 = $_POST['N23'];
$entraineur = $_POST['entraineur'];
$adjoint = $_POST['adjoint'];
$soigneur = $_POST['soigneur'];
$capitaine = $_POST['capitaine'];
$dopage = $_POST['dopage'];
$juge = $_POST['juge'];


 
  //récupération de l'identifiant de la personne:
  $id  = $code_match;
 
  //création de la requête SQL:
  $sql = "UPDATE $bdfeuille
            SET N1='$N1', N2='$N2', N3='$N3', N4='$N4', N5='$N5', N6='$N6', N7='$N7', N8='$N8', N9='$N9',
		 	 	N10='$N10', N11='$N11', N12='$N12', N13='$N13', N14='$N14', N15='$N15', N16='$N16', N17='$N17', N18='$N18', N19='$N19',
			 	N20='$N20', N21='$N21', N22='$N22', N23='$N23',
                entraineur='$entraineur', adjoint='$adjoint', soigneur='$soigneur', capitaine='$capitaine',juge='$juge',dopage='$dopage'
		  
		   WHERE id = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query( $sql )   ;
 ?>
 
 
 
  <?php require "../zonesFeuilles/feuilleMatchConsultation.php";?>
<p>&nbsp;
<table width="900" border="0">
  <tr bgcolor="#CCCCCC" bordercolor="#000000"> 
    <td valign="top" align="left" colspan="3"> 
      <div align="center"> 
        <?php
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("La modification a &eacute;t&eacute; effectu&eacute;e") ;
  }
  else
  {
    echo("La modification a &eacute;chou&eacute;") ;
  }
?>
      </div>
      <div align="center"></div>
    </td>
  </tr>
  <tr bgcolor="#CCCCCC" bordercolor="#000000"> 
    <td valign="top" align="left" rowspan="2" width="305"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif">Modification 
        de la feuille<br>
        &agrave; partir d'un PC</font></div>
      </td>
    <td valign="top" align="left" rowspan="2" width="289">
      <div align="center"><font face="Arial, Helvetica, sans-serif">Modification 
        de la feuille<br>
        &agrave; partir d'un smartphone</font></div>
    </td>
    <td valign="top" align="left" width="292"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><a href="../connexion/page_liste_compet1.php?equipe=<?php echo $equipe; ?>&comite=<?php echo $comite ; ?>&id_equipe=<?php echo $id_equipe; ?>&connect=<?php echo $connect ;?>" target="_top">R&eacute;tour 
        &agrave; l'accueil</a></b></font></div>
    </td>
  </tr>
  <tr bgcolor="#CCCCCC" bordercolor="#000000"> 
    <td valign="top" align="left" width="292"> 
      <div align="center"><a href="../connexion/page_FM.php"><font face="Arial, Helvetica, sans-serif"><b>D&eacute;connexion</b></font></a></div>
    </td>
  </tr>
</table>
<p>&nbsp; 
  <?php

mysql_close(); // Déconnexion de MySQL
?>
