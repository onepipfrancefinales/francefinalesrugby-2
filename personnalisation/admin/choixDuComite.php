<!DOCTYPE html>
<html lang="fr">
<head>
<?php 
if (isset($_GET['comiteA'])) $comiteA = $_GET['comiteA'];else  $comiteA = "nc"; 
if (isset($_GET['codeDivision'])) $codeDivisionA = $_GET['codeDivision']; else $codeDivisionA = "nc"; 
if (isset($_GET['division'])) $divisionA = $_GET['division']; else $divisionA = "nc"; 

if (isset ($divisionPoule)) $divisionPoule = $divisionPoule;else $divisionPoule ="";
if (isset ($idPoule)) $idPoule = $idPoule;else $idPoule ="";
if (isset ($nomPoule)) $nomPoule = $nomPoule;else $nomPoule ="";
if (isset ($poule)) $poule = $poule;else $poule =""; 
if (isset ($phpComite)) $phpComite = $phpComite;else $phpComite =""; 
?>


  <title>choixDuComite</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
if (restore) selObj.selectedIndex=0;
}
//-->
  </script>
</head>


<body>

<div align="center"><b><font color="#ff0000" face="Arial, Helvetica, sans-serif" size="5"><br>
<a name="zone1"></a><br>
Faites votre s&eacute;lection</font></b><br>
<br>
</div>
<br>
<br>

<?php 

$adresse="pageChoix.php?comiteA=" ;?>


<div id="text"> 1/ S&eacute;lectionnez une ligue ou une comp&eacute;tition :
<hr> <br>

</div>

<select name="select2" onchange="MM_jumpMenu('parent',this,0)" size="1">
<option value=personnalisation/admin/pageChoix.php selected>S&eacute;lectionner un comit&eacute; ou une comp&eacute;tition</option>
<option value="<?php echo $adresse; ?>phppro&poule=1">Pro</option>
<option value="<?php echo $adresse; ?>phpf1&poule=1">F&eacute;d&eacute;rale
1</option>
<option value="<?php echo $adresse; ?>phpfed2&poule=1">F&eacute;d&eacute;rale
2</option>
<option value="<?php echo $adresse; ?>phpfed3NE&poule=1">F&eacute;d&eacute;rale
3(P1 a P7)</option>
<option value="<?php echo $adresse; ?>phpfed3G&poule=1">F&eacute;d&eacute;rale
3(P9 a P15)</option>
<option value="<?php echo $adresse; ?>phpfem&poule=1">F&eacute;minines</option>
<option value="<?php echo $adresse; ?>phpau&poule=1">Ligue Auvergne Rh&ocirc;ne Alpes</option>
<option value="<?php echo $adresse; ?>phpbg&poule=1">Ligue Bourgogne Franche Comt&eacute;</option>
<option value="<?php echo $adresse; ?>phpbr&poule=1">Ligue Bretagne</option>
<option value="<?php echo $adresse; ?>phpce&poule=1">Ligue Centre Val de Loire</option>
<option value="<?php echo $adresse; ?>phpal&poule=l">Ligue Grand Est</option>
<option value="<?php echo $adresse; ?>phpfl&poule=1">Ligue Hauts de France</option>
<option value="<?php echo $adresse; ?>phpidf&poule=1">Ligue Ile de France</option>
<option value="<?php echo $adresse; ?>phpn&poule=1">Lgue Normandie</option>
<option value="<?php echo $adresse; ?>phpca&poule=1">Ligue Nouvelle Aquitaine</option>
<option value="<?php echo $adresse; ?>phpab&poule=1">Ligue Occitanie</option>
<option value="<?php echo $adresse; ?>phpld&poule=1">Ligue Pays de la Loire</option>
<option value="<?php echo $adresse; ?>phppa&poule=1">Ligue Provence Alpes C&ocirc;te d'Azur</option>
</select>

<div id="choixComite"> <font color="#000000"><br>

<?php //*********** compétition ou comité ************
echo "comiteA : ".$comiteA;
if ($comiteA == "phpfem" OR $comiteA == "phpfed2" OR $comiteA == "phpf1" OR $comiteA == "phpfed3NE" OR $comiteA == "phpfed3GS" OR $comiteA == "phppro")
		$texte= "Comp&eacute;titions ";
else 
		$texte="Ligue"; 
?>
 S&eacute;lection : </font>

 <?php 
 if (isset ($comiteTtesLettres)) $comiteTtesLettres = $comiteTtesLettres; else $comiteTtesLettres="NC";
include ("../../connect1/connection5.php"); 

$reponse = $bdd->query("SELECT nomligue 
						FROM comite 
						WHERE phpcomite='$comiteA' "); 

							while ($row = $reponse->fetch() )
									{ 
									$comiteTtesLettres= $row[0];
									}
//mysql_close();
echo $texte.' '.$comiteTtesLettres; ?></div>

<br>
<br>
 <a name="zone2"></a><br>

<div id="text"> 2/ S&eacute;lectionnez une division ou une poule propos&eacute;e ci dessous 
  :<br>

<hr></div>


<div id="text">
<p><br>

<?php //***************  Sélection de la base de données *****************

if ($comiteA == "phpfed2" OR $comiteA == "phpf1" OR $comiteA=="phpfed3NE" OR $comiteA == "phpfed3GS" OR $comiteA == "phppro")
	include ("../../connect1/connection3.php");
else
	include ("../../connect1/connection2.php");
?>
</p>

<p>
<?php // ********** affichage des compétitions du comité ***************

if ($comiteA !="")
{
$phpComite=$comiteA.''."_divisions";

$reponse = $bdd->query("	SELECT nom, id 
							FROM $phpComite 
							WHERE id < 230 OR (id > 279 AND id < 300)
							ORDER BY id");
				
			while ($row = $reponse->fetch() )
					{ 
						$division= $row[0];
						$codeDivision=$row[1];
						
						?>
						<a href=\personnalisation/admin/pageChoix.php?comiteA=<?php echo $comiteA; ?>&poule=<?php echo $codeDivision; ?>&division=<?php echo $division; ?>><?php echo $division; ?></a>
						<?php echo "<br />"; 
					}
					
					
$poule = $_GET['poule'];



$reponse = $bdd->query("	SELECT id, nom 
			FROM $phpComite 
			WHERE id = $poule") ;
				
				while ($row = $reponse->fetch() )
						{ 
						$idPoule= $row[0];
						$nomPoule= $row[1];
						}
	//echo "idPoule : ".$idPoule;echo "<br />";
	//echo "nomPoule : ".$nomPoule;echo "<br />";
}					
 ?>
 </p>
<hr></div>

<p><font size="4"> <i><b><font size="5">Vous avez s&eacute;lectionn&eacute; la comp&eacute;titon de la<br>
<?php 

echo "<br />";
//echo $division;


  
echo "ligue".' '.$comiteTtesLettres; 
echo "<br />";
echo $nomPoule;					
echo "<br />";

?>

<br>

</font></b></i></font> 
</p>

<div id="text">
<hr><br>

<p> 3/ Validez votre choix : </p>


<form method="POST" action="testReponse.php?poule=<?php echo $poule; ?>&comiteA=<?php echo $comiteA; ?>">
    <div align="center"> 
      <table width="22%" border="1" bordercolor="#000000" cellspacing="1" align="center">
        <tr> 
          <td bgcolor="#FF0000"> 
            <div align="left"><a href="validationDuChoix.php?comiteA=<?php echo $comiteA; ?>&poule=<?php echo $poule; ?>&reponse=1"><b><font size="4" face="Arial, Helvetica, sans-serif" color="#000000">valider</font></b></a></div>
          </td>
        </tr>
      </table>
      
    </div>
    <div align="left"></div>
  </form>

<p>&nbsp;</p>

<p>&nbsp;</p>

<hr><a name="zone4"></a></div>

<p>&nbsp;</p>

<p><?php include ("recap.php") ;?> </p>

<p>&nbsp;</p>

 
</body>
</html>
