<?php
require '../saison.php';
$cmt = $_GET['champ'];

$division =substr($champ,3,3);
?>
<script language="JavaScript">
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script>

<table align="center" width="90%">
<tr>
<!-- Affichage des phases finales champ de France -->
<td class="france"> 
	<a href="pf/pagePhaseFinale.php?annee=<?php echo $saison; ?>&division=<?php echo $division ;?>"> 
 		<font color="#FFFFFF">Phases finales champ de France <?php echo $saison;?></font>
	</a>
</td>
<tr>
<!-- Affichage modalités de qualification -->
<?php if ($cmt == 990140 or $cmt== 990150 or $cmt== 991160 )
{
	?>
	<td class="bulleReglement"> 
		 <a href="javascript:ouvrirPopup('/resultats/reglements2022_2023.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification</a>	
	</td>
<?php
}
elseif ($cmt == 880280) 
{
	?>
	<td class="bulleReglement"> 
		 <a href="javascript:ouvrirPopup('/resultats/reglements2022_2023.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification</a>	
	</td>
<?php
}





?>
</tr>
</table>
