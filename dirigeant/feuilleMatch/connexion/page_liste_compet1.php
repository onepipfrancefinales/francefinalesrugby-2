
<?php
session_start ();

if (isset($_SESSION['login']) && isset($_SESSION['pwd']) && isset($_SESSION['id'])) {
?>


<!DOCTYPE html>        
<html>
<head>
<meta name="description"
content="tous les champions de france de rugby, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>France Finales Rugby</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<?php 
if (isset ($_POST['MDP'])) $MDP = $_POST['MDP'];else $MDP="";
 
$id_equipe = $_GET['id_equipe'];
$equipe = $_GET['equipe'];
$comite = $_GET['comite'];
$connect = $_GET['connect'];
$type = $_GET['type'];

//echo $MDP; echo "<br />";
//echo "id_equipe : ".$id_equipe ;echo "<br />";
echo "equipe : ".$equipe;echo "<br />";
//echo "comite:".$comite;echo "<br />";
echo "connexion : ".$connect;echo "<br />";
//echo "type : ".$type;echo "<br />";
// seniors		1	100
// vide			2	 -
// belascain	3	300	
// juniors		4	400
// Dirigeants	5	500
// Cadets		6	600
// Feminines	7	700

?>





<div align="center">
  <table width="1300" border="0">
    <tr> 
      <td width="288" height="211"> 
        <div align="center"> 
          <?php
//if ($connect == "connexion2")
//require   "../../../connect/connexion2.php";
//else
//require   "../../../connect/connexion3.php";
require   "../../../connect/connexion1.php";

$reponse = $bdd->query("SELECT sigle,comite
						FROM bdclubs 
						WHERE id='$equipe'"); 
	While ($donnees = $reponse->fetch() )
	{ 
										?>
          <strong> 
          <?php echo $donnees['comite'];?>
          <font size="6"> <br>
          <br>
          <?php echo $donnees['sigle'];?>
          </font></strong> </div>
      </td>
      <td width="292" height="211"> 
        <div align="center"> 
          <?php 
	  $logo=substr($equipe, -5);
	{print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
								
	}
?>
        </div>
        <div align="center"></div>
        <div align="center"></div>
      </td>
      <td height="211" width="706"> 
        <div align="center"><b><b><font face="Arial, Helvetica, sans-serif">Acc&egrave;s 
          aux Feuilles de match<br>
          pour les cat&eacute;gories suivantes</font></b><font size="5" face="Arial, Helvetica, sans-serif"><a href="../feuille_match1/page_consulter.php?equipe=<?php echo $equipe; ?>&comite=<?php echo $comite; ?>&id_equipe=<?php echo $id_equipe; ?>&connect=<?php echo $connect; ?>"><br>
          </a></font></b><font face="Arial, Helvetica, sans-serif"><br>
          </font><b><font size="5" face="Arial, Helvetica, sans-serif"><b> 
          <?php

//require   "../../../connect1/connection4.php";

?>
          <?php
/*		  
$requete = mysql_query("SELECT SUM(photo) 
						FROM phpjeunes_joueurs 
						WHERE club='$id_equipe' and photo='3'") ;
							$somme=mysql_fetch_array($requete);
							$nombreBelascain=($somme[0])/3;
							//echo $nombreBelascain;		
							
 	if ($nombreBelascain>=1)
		 {
		
		 ?>
          <a href=\admin/feuille_match1/page_consulter.php?equipe=<?php echo $equipe; ?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&id_equipe=<?php echo $id_equipe?>&photo=3 target=_top >B&eacute;lascain 
          ( 
          <?php echo $nombreBelascain; ?>
          )</a> 
          <?php 
		 }
 	 else
  		 {
 		 echo "B&eacute;lascain";
  		}

*/
 ?>
          <br>
          <?php
/*
$requete = mysql_query("SELECT SUM(photo) FROM phpjeunes_joueurs where club='$id_equipe' and photo='4'") ;
$somme=mysql_fetch_array($requete);
$nombreJuniors=($somme[0])/4;
echo $nombreJuniors;		

 	if ($nombreJuniors>=1)
		 {
		 ?>
          <a href=\admin/feuille_match1/page_consulter.php?equipe=<?php echo $equipe; ?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&id_equipe=<?php echo $id_equipe; ?>&photo=4 target=_top >Juniors 
          ( 
          <?php echo $nombreJuniors; ?>
          )</a> 
          <?php 
		 }
 	 else
  		 {
 		 echo "Juniors";
  		}
*/		
 ?>
          <br>
          <?php
/*		  
$requete = mysql_query("SELECT SUM(photo) 
						FROM phpjeunes_joueurs 
						WHERE club='$id_equipe' AND photo='6'") ;
$somme=mysql_fetch_array($requete);
$nombreCadets=($somme[0])/6;
//echo $nombreCadets;		

 	if ($nombreCadets>=1)
		 {
		 ?>
          <a href=\admin/feuille_match1/page_consulter.php?equipe=<?php echo $equipe; ?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&id_equipe=<?php echo $id_equipe ;?>&photo=6 target=_top >Cadets 
          ( 
          <?php echo $nombreCadets; ?>
          )</a> 
          <?php 
		 }
 	 else
  		 {
 		 echo "Cadets";
  		}
*/		
 ?>
          </b><br>
          <b> 
          <?php

          
//mysql_close(); // Déconnexion de MySQL
?>
          </b></font><br/>
          </b></div>
      </td>
    </tr>
  </table>
</div>
<div align="center">
   <?php  
   if ($type=="S1")
   include "journee.php" ;
   elseif ($type=="S2")
   include "journee2.php" ;
   
   ?>
</div>
<br />

<?php
}
?>