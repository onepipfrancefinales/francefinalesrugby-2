<html>
<head>
<title>FranceFinalesRugby</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilledestyle.css"/>
</head>

<body>
<?php

if (isset ($equipeFeminine)) $equipeFeminine = $equipeFeminine; else $equipeFeminine='0';
if (isset ($equipePro)) $equipePro = equipePro; else $equipePro='0';
if (isset ($equipeFederale1)) $equipeFederale1 = $equipeFederale1; else $equipeFederale1='0';
if (isset ($equipeFederale2)) $equipeFederale2 = $equipeFederale2; else $equipeFederale2='0';
if (isset ($equipeFederale3GS)) $equipeFederale3GS = $equipeFederale3GS; else $equipeFederale3GS='0';
if (isset ($equipeFederale3NE)) $equipeFederale3NE = $equipeFederale3NE; else $equipeFederale3NE='0';
if (isset ($connect)) $connect = connect; else $connect='';


if (isset ($equipe)) $equipe = $equipe; else $equipe='0';
if (isset ($nomClub)) $nomClub = $nomClub; else $nomClub='0';
if (isset ($comiteLong)) $comiteLong = $comiteLong; else $comiteLong='0';
if (isset ($numeroLigue)) $numeroLigue = $numeroLigue; else $numeroLigue='0';
if (isset ($siglecomite)) $siglecomite = $siglecomite; else $siglecomite='';


$id_equipe = $_POST['id_equipe'];
echo "id_equipe : ".$id_equipe;echo "<br />";

//********************************************************************
//        Récupération de l'identifiant "Onepip", du nom etc ....
//                 a partir de l'identifiant FFR
//********************************************************************

require   "../../../connect/connexion1.php";

$reponse = $bdd->query("SELECT id, sigle,comite, siglecomite, ligue
						FROM bdclubs 
						WHERE idffr='$id_equipe' or id='$id_equipe'"); 
								while ($donnees = $reponse->fetch())
									{ 
								  	$equipe = $donnees['id'];
									$comiteLong = $donnees['comite'];
									$nomClub = $donnees['sigle'];
									$siglecomite = $donnees['siglecomite'];
									$numeroLigue = $donnees['ligue'];
									}


if ($numeroLigue == 10)
	{
	$comite = "au";
	$ligue="Auvergne Rhône Alpes";
	}	
elseif ($numeroLigue == 11)
{
	$comite = "bg";
	$ligue="Auvergne Rhône Alpes";
	}
elseif ($numeroLigue == 12)
	{	
	$comite = "br";
	$ligue="Bretagne";
	}
elseif ($numeroLigue == 13)
	{
	$comite = "ce";
	$ligue="Centre Val de Loire";
	}
elseif ($numeroLigue == 14)
	{
	$comite = "-";
	$ligue="Corse";
	}
elseif ($numeroLigue == 15)
	{
	$comite = "al";
	$ligue="Grand Est";
	}
elseif ($numeroLigue == 16)
	{
	$comite = "fl";
	$ligue="Hauts de France";
	}
elseif ($numeroLigue == 17)
	{
	$comite = "idf";
	$ligue="Ile de France";
	}
elseif ($numeroLigue == 18)
	{
	$comite = "n";
	$ligue="Normandie";
	}
elseif ($numeroLigue == 19)
	{
	$comite = "ca";
	$ligue="Nouvelle Aquitaine";
	}
elseif ($numeroLigue == 20)
	{
	$comite = "ab";
	$ligue="Occitanie";
	}
elseif ($numeroLigue == 21)

	{
	$comite = "pl";
	$ligue="Pays de la Loire";
	}
elseif ($numeroLigue == 22)
	{
	$comite = "pr";
	$ligue="Provence Alpes Côte d'Azur";
	}
		

echo "<br />";
echo $equipe; echo "<br />";
echo $nomClub; echo "<br />";
echo $comiteLong; echo "<br />";
echo $numeroLigue; echo "<br />";
echo $siglecomite; echo "<br />";
//echo $comite; echo "<br />";

 $reserve=90000000+$equipe;

?>

<?php





/*
require   "../../../connect1/connection3.php";

 
//  *********   recherche d'un club féminin  ************
	$reponse = $bdd->query("SELECT id_club 
							FROM phpfem_equipes
							WHERE id_club='$equipe'"); 
									While ($donnees = mysql_fetch_array($reponse) )
										{ 
										$equipefFeminine = $row[0];
										}

*/



require   "../../../connect/connexion6.php";
 
//  *********   recherche dans bddpro  ************
	$reponse = $bdd->query("SELECT COUNT(id_club) 
							FROM phppro_equipes
							WHERE id_club='$equipe'"); 
									while ($row = $reponse->fetch() )
										{ 
										$bddPro = $row[0];;
										}
	
// **************   recherche dans bddFed3NE   ****************************

	$reponse = $bdd->query("SELECT COUNT(id_club) 
							FROM phpfed3NE_equipes 
							WHERE id_club='$equipe'"); 
									while ($row = $reponse->fetch() )
										{ 
										$bddFed3NE = $row[0];
										}
									
 
// **************    recherche d'un club dans bddAU    ****************

	$reponse = $bdd->query("SELECT COUNT(id_club) 
							FROM phpau_equipes 
							WHERE id_club='$equipe'"); 
									while ($row = $reponse->fetch() )
										{ 
										$bddau = $row[0];
										}
	

// *********************   recherche d'un club de federale 3GS   *********************
/*
	$reponse = $bdd->query("SELECT COUNT(id_club) 
							FROM phpfed3GS_equipes 
							WHERE id_club='$equipe'"); 
									while ($row = $reponse->fetch() )
										{ 
										$equipeFederale3GS = $row[0];
										}
	
*/
//  ******************   recherche d'un club dans bddAB  *****************************

	$reponse = $bdd->query("SELECT COUNT(id_club) 
							FROM phpab_equipes 
							WHERE id_club='$equipe'"); 
									while ($row = $reponse->fetch() )
										{ 
										$bddab = $row[0];
										}
	




 // Définition des parametres de la connexion à la BD




	$connect = "connexion6";
	if  ($bddpro > 0) 
		$comite = "pro";
	elseif ($bddFed3NE > 0) 
		$comite = "fed3NE";
	elseif ($bddau > 0) 
		$comite = "au";
	elseif ($bddab > 0) 	
		$comite = "ab";
//	}
//	else
//	$connect = "connexion6";
	
echo "<br />";
//echo $connect;echo "<br />";
//echo $comite;echo "<br />";

echo $comite; echo "<br />";
?>
<p align="center"> 

<?php 

$logo=substr($equipe, -5); 
//echo "logo : ".$logo;
?>
	<h2 align="center"><strong> 
										  <?php echo "Ligue ".$ligue;?>
										  </strong></h2>
										
<div align="center"><strong> 
  <?php echo "( Ex ".$comiteLong." )";?>
  </strong></div>
<h1 align="center"><strong>
										  <?php echo $nomClub;?>
										  </strong></h1>
										
<div align="center"> 
  <p><br/>
    <?php	
	{print("<img src=/images/blasons200_200/$logo.gif>");}


?>
    <br>
    <font size="3"> <br>
    <br>
    <br>
    <font face="Arial, Helvetica, sans-serif" size="4">A la premi&egrave;re connexion 
    le mot de passe est identique &agrave; l'identifiant</font></font></p>
  <form name="form1" method="POST" action="page_liste_competMDP.php?id_equipe=<?php echo $id_equipe;?>&type=S1&equipe=<?php echo $equipe;?>&login=<?php echo $id_equipe;?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&reserve=<?php echo $reserve; ?> ">
    <table width="932" border="0"  cellspacing="0" cellpadding="1">
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6" height="32"> 
          <div align="center">
<div class=""></div>
            </div>
        </td>
        <td width="189" height="32">&nbsp;</td>
        <td width="267" height="32">&nbsp;</td>
        <td width="250" height="32">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6"> 
        
        </td>
        <td width="189"> 
          <div class="label">Identifiant :  </div></td>
        <td width="267"> 
          <input type="text" name="login" value="<?php echo $id_equipe ;?>" "size="2" >
        </td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6">&nbsp;</td>
        <td width="189">&nbsp;</td>
        <td width="267">&nbsp;</td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6">&nbsp;</td>
        <td width="189"> 
          <div class="label">Mot de passe : </div></td>
        <td width="267"> 
          <input type="text" name="MDP">
        </td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6">&nbsp;</td>
        <td width="189">&nbsp;</td>
        <td width="267">&nbsp;</td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6">&nbsp; </td>
        <td width="189">&nbsp;</td>
        <td width="267"> 
          <input type="submit" value="Valider" name="submit" />
        </td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6">&nbsp;</td>
        <td width="189">&nbsp;</td>
        <td width="267">&nbsp;</td>
        <td width="250">&nbsp;</td>
      </tr>
    </table>
    <br>
  </form>
  
 <br><br>
  <p><b><font face="Arial, Helvetica, sans-serif" color="#FF0000" size="4">Pour 
    r&eacute;initialiser votre mot de passe , contactez nous par courriel <br>
    en pr&eacute;cisant le code FFR de votre club</font></b></p>
  <p><b><font face="Arial, Helvetica, sans-serif" color="#FF0000" size="4"><br>
    Sur la page suivante doit appa&icirc;tre le calendrier <br>
    avec les diff&eacute;rentes oppositions de votre club.</font></b></p>
  <p><b><font face="Arial, Helvetica, sans-serif" size="4" color="#FF0000">Si 
    ce n'est pas le cas, contactez nous par courriel en pr&eacute;cisant le code 
    FFR de votreclub.</font></b></p>
</div>

	</body>
</html>