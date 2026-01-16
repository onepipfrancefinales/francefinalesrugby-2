<?php
require '../saison.php';
$cmt = $_GET['champ'];
$division = substr($champ,3,3);

if ($division == 161)
{
	$division = $division - 1;
}
else
$division =substr($champ,3,3);
?>
<script language="JavaScript">
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script>

<table width="95%" class="backgroundWhite marginAuto">
<tr>
<!-- Affichage des phases finales champ de France -->
<td class="france"> 
	<a href="pf/pagePhaseFinale.php?annee=2024&division=<?php echo $division ;?>"> 
 		<font color="#FFFFFF">Phases finales champ de France <?php echo $finSaison -1;?></font>
	</a>
</td>
<tr>
	
<!-- Affichage modalités de qualification -->
<?php 


if ($cmt == 990140 or $cmt== 990150 or $cmt == 991161 or $cmt == 992161 or $cmt == 990240 or $cmt == 990250 or $cmt == 9912161 or $cmt == 9922161)
{
	?>
	<td class="bulleReglement"> 
		 <a href="javascript:ouvrirPopup('/resultats/reglements2024_2025.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=516, height=600, menubar=no')">Modalit&eacutes de qualification</a>	
	</td>
<?php
}
elseif ($cmt == 816216) 
{
	?>
	<td class="bulleReglement"> 
		 <a href="javascript:ouvrirPopup('/resultats/reglements2024_2025.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=516, height=600, menubar=no')">Modalit&eacutes de qualification</a>	
	</td>
<?php
}
?>
</tr>
</table>
