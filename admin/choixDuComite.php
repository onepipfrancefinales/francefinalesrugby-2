<!DOCTYPE html>
<html lang="fr">
<head>
<?php $comiteA= isset ($_GET['comiteA']) ? $_GET['comiteA'] : NULL; ?>
<?php $codeDivisionA= isset ($_GET['codeDivision']) ? $_GET['codeDivision'] : NULL ; ?>
<?php $divisionA= isset ($_GET['division']) ? $_GET['division'] : NULL ; ?>
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
Faites votre sélection</font></b><br>
<br>
</div>
<br>
<br>

<?php $adresse="http://francefinalesrugby.franceserv.com/personnalisation/admin/pageChoix.php?comiteA="; ?><a name="zone2"></a>
<div id="text"> 1/
Sélectionnez un comité ou une
compétition :
<hr> <br>

</div>

<select name="select2" onchange="MM_jumpMenu('parent',this,0)" size="1">
<option selected="selected">Sélectionner
un comite ou une
compétition</option>
<option value="<?php echo $adresse; ?>phppro#zone2">Pro</option>
<option value="<?php echo $adresse; ?>phpf1#zone2">Fédérale
1</option>
<option value="<?php echo $adresse; ?>phpfed2#zone2">Fédérale
2</option>
<option value="<?php echo $adresse; ?>phpfed3NE#zone2">Fédérale
3(P1 a P8)</option>
<option value="<?php echo $adresse; ?>phpfed3GS#zone2">Fédérale
3(P9 a P16)</option>
<option value="<?php echo $adresse; ?>phpfem#zone2">Féminines</option>
<option value="<?php echo $adresse; ?>phpap#zone2">Alpes</option>
<option value="<?php echo $adresse; ?>phpal#zone2">Alsace
Lorraine</option>
<option value="<?php echo $adresse; ?>phpab#zone2">Armagnac
Bigorre</option>
<option value="<?php echo $adresse; ?>phpau#zone2">Auvergne</option>
<option value="<?php echo $adresse; ?>phpbe#zone2">Bearn</option>
<option value="<?php echo $adresse; ?>phpbg#zone2">Bourgogne</option>
<option value="<?php echo $adresse; ?>phpbr#zone2">Bretagne</option>
<option value="<?php echo $adresse; ?>phpce#zone2">Centre</option>
<option value="<?php echo $adresse; ?>phpcbl#zone2">Cote
BasqueLandes</option>
<option value="<?php echo $adresse; ?>phpca#zone2">Cote
d'Argent</option>
<option value="<?php echo $adresse; ?>phpda#zone2">Drome
Ardeche</option>
<option value="<?php echo $adresse; ?>phpfl#zone2">Flandres</option>
<option value="<?php echo $adresse; ?>phpidf#zone2">Ile de
France</option>
<option value="<?php echo $adresse; ?>phpld#zone2">Languedoc</option>
<option value="<?php echo $adresse; ?>phplm#zone2">Limousin</option>
<option value="<?php echo $adresse; ?>phply#zone2">Lyonnais</option>
<option value="<?php echo $adresse; ?>phpmpy#zone2">Midi
Pyrénées</option>
<option value="<?php echo $adresse; ?>phpn#zone2">Normandie</option>
<option value="<?php echo $adresse; ?>phppc#zone2">Pays
Catalan</option>
<option value="<?php echo $adresse; ?>phppl#zone2">Pays de
Loire</option>
<option value="<?php echo $adresse; ?>phppa#zone2">Périgord
Agenais</option>
<option value="<?php echo $adresse; ?>phppch#zone2">Poitou
Charente</option>
<option value="<?php echo $adresse; ?>phppr#zone2">Provence</option>
</select>

<div id="choixComite"> <font color="#000000"><br>

<?php 
if ($comiteA=="phpfem" OR $comiteA=="phpfed2" OR $comiteA=="phpf1" OR $comiteA=="phpfed3NE" OR $comiteA=="phpfed3GS" OR $comiteA=="phppro")
		$texte= "Comp&eacute;titions ";
else 
		$texte="Comit&eacute; "; 
?>
 Sélection : </font>

 <?php 
include ("../../connection5.php"); 
$query = " 	SELECT nom 
			FROM comite 
			WHERE phpcomite='$comiteA' "; 
$result = mysql_query($query); 
			while ($row = mysql_fetch_array($result))
					{ 
					$comiteTtesLettres= $row[0];
					}
mysql_close();
echo $texte.''.$comiteTtesLettres; ?></div>

<br>
<br>
 <a name="zone2"></a><br>

<div id="text">
2/Sélectionnez une division ou une poule proposée ci dessous :<br>

<hr></div>


<div id="text">
<p><br>

<?php //************** Choix de la base de donnée**********
 
if ($comiteA=="phpmpy" OR $comiteA=="phppr" OR $comiteA=="phppl" OR $comiteA=="phpbr" OR $comiteA=="phpfed2" OR $comiteA=="phpf1" OR $comiteA=="phpfed3NE" OR $comiteA=="phpfed3GS" OR $comiteA=="phppro")
	include ("../../connection3.php");
elseif ($comiteA == "phpfem")
	include ("../../connection4.php");
else
	include ("../../connection2.php");
?>
</p>

<p>
<?php // ********** affichage des compétitions du comité ***************
$phpComite=$comiteA.''."_divisions";
$query = " 	SELECT nom, id 
			FROM $phpComite 
			WHERE id < 230 OR (id > 279 AND id < 300)
			ORDER BY id";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result))
{ 
$division= $row[0];
$codeDivision=$row[1];
 
?>
</p>




<a href="http://francefinalesrugby.franceserv.com/personnalisation/admin/pageChoix.php?comiteA=<?php echo $comiteA; ?>&codeDivision=<?php echo $codeDivision; ?>"><?php echo $division; ?></a>
<?php echo "<br />"; }
 mysql_close(); ?>
<hr></div>

<p><font size="4"> <i><b><font size="5">Vous avez sélectionné <br>la compétiton
<?php 
 global $DivisionA; echo $divisionA;
global $codeDivisionA; echo $codeDivisionA; ?>
du comité
<?php 
global $comiteA; echo $comiteA ; 
global $comiteTtesLettres; echo $comiteTtesLettres ;
?><br>

</font></b></i></font> 
</p>

<div id="text">
<hr><br>

<p> 3/ Validez votre choix : </p>

<form method="post" action="testReponse.php?division=<?php echo $codeDivisionA; ?>&comite=<?php echo $comiteA; ?>">
  <div align="center"> OUI <input name="reponse" value="1" type="radio"> <input name="Submit" value="Valider" type="submit"> </div>

</form>

<p>&nbsp;</p>

<p>&nbsp;</p>

<hr><a name="zone4"></a></div>

<p>&nbsp;</p>

<p><?php  include ("recap.php") ;?> </p>

<p>&nbsp;</p>

 
</body>
</html>
