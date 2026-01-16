<?php
$debutSaison = 2024;
$saison  = $debutSaison;
require('connect/connexion1.php');
?>

<table class="marginAuto border borderSpacing" width="600">
	<tr class="size6 style">
		<td colspan="2" align="center"> <font color="#000000" size="5">Champions de France <?php echo $debutSaison; ?><br></font></td>
	</tr>
	<tr>
		<td colspan="2"  bgcolor="#006699" align="center" > <font color="#FFFFFF" size="5">Séniors I</font></td>
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Top 14 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 110, $bdd);?></font></td>
	</tr>
	<tr bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Pro D2 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 120, $bdd);?></font></td>
	</tr>
	<tr class="size4 " align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Nationale :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 130, $bdd);?></font></td>
	</tr>
	<tr bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Nationale 2 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 135, $bdd);?></font></td>
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Fédérale 1 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 140, $bdd);?></font></td>
	</tr>
	<tr bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Fédérale 2 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 150, $bdd);?></font></td>
		</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Fédérale 3 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 160, $bdd);?></font></td>
	</tr>
	<tr bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Régionale 1 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 170, $bdd);?></font></td>
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Régionale 2 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 180, $bdd);?></font></td>
		</tr>
		<tr bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Régionale 3 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 190, $bdd);?></font></td>
	</tr>
	<tr align="center">
	<td width="35%"><font face="Arial, Helvetica, sans-serif" >Promotion Régionale 1 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 175, $bdd);?></font></td>
	</tr>
	<tr bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Promotion Régionale 2 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 185, $bdd);?></font></td>
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Promotion Régionale 3 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 195, $bdd);?></font></td>	
	</tr>


	
		<tr class="size5 backgroundBlue colorWhite">
		<td colspan="2"  bgcolor="#006699"  align="center"> <font color="#FFFFFF"size="5">Séniors II</font></td>
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Fédérale B :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 250, $bdd);?></font></td>	
	</tr>
	<tr  bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Excellence B :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 260, $bdd);?></font></td>	
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Réserve régionale 1 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 270, $bdd);?></font></td>	
	</tr>
<tr bgcolor="#c8caca" align="center">
	<td width="35%"><font face="Arial, Helvetica, sans-serif" >Réserve régionale 2 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 9180, $bdd);?></font></td>	
	</tr>
	<tr class="size5 backgroundBlue colorWhite">
		<td colspan="2" bgcolor="#006699"  align="center"> <font color="#FFFFFF"size="5">Féminines</font></td>
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Elite 1 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 280, $bdd);?></font></td>	
	</tr>
	<tr bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Elite 2 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 285, $bdd);?></font></td>	
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Fédérale 1 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 290, $bdd);?></font></td>	
	</tr>
	<tr bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Fédérale 2 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 295, $bdd);?></font></td>		
	</tr>
<tr align="center">
	<td width="35%"><font face="Arial, Helvetica, sans-serif" >Réserve Elite :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 295, $bdd);?></font></td>		
	</tr>
	<tr bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Cadettes Elite :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 295, $bdd);?></font></td>		
	</tr>

<tr class="size5 backgroundBlue colorWhite">
		<td colspan="2"  bgcolor="#006699"  align="center"> <font color="#FFFFFF"size="5">Espoirs</font></td>
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Espoirs Elite :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 225, $bdd);?></font></td>	
	</tr>
	<tr  bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Espoirs Nationaux :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 232, $bdd);?></font></td>	
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Espoirs Fédéraux :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 245, $bdd);?></font></td>	
	<tr >
	<tr class="size5 backgroundBlue colorWhite">
		<td colspan="2"  bgcolor="#006699"  align="center"> <font color="#FFFFFF"size="5">Jeunes</font></td>
	</tr>
	<tr>
		<td colspan="3" class="style styleDivision colorRed styleItalic">Juniors (-18ans)</td>
	</tr>
	<tr  bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Crabos :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 325, $bdd);?></font></td>	
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >U18 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 330, $bdd);?></font></td>	
	</tr class="size5">

<tr  bgcolor="#c8caca" align="center">
	<td width="35%"><font face="Arial, Helvetica, sans-serif" >Régionale 1 U18 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 335, $bdd);?></font></td>	
	</tr>

	<td colspan="3" class="style styleDivision colorRed styleItalic">Cadets (-16ans)</font></td>
	</tr>
	<tr  bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Alamercery :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 360, $bdd);?></font></td>		
	</tr>
	<tr align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >Gaudermen :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 365, $bdd);?></font></td>	
	</tr>
	<tr  bgcolor="#c8caca" align="center">
		<td width="35%"><font face="Arial, Helvetica, sans-serif" >U16 :</font></td>
		<td><?php championAnnee($saison, 370, $bdd);?></td>
	</tr>

<tr align="center">
	<td width="35%"><font face="Arial, Helvetica, sans-serif" >Régionale 1 U16 :</font></td>
		<td width="51%"><font face="Arial, Helvetica, sans-serif" ><?php championAnnee($saison, 375, $bdd);?></font></td>	
	</tr>
	<tr class="size5 backgroundBlue colorWhite">
		<td colspan="2"  bgcolor="#006699"  align="center"> <font color="#FFFFFF"size="4">Consultation </br> des tableaux des phases finales</font></td>
	</tr>

</table>

<style>
	.style {
		font-family: Arial, Helvetica, sans-serif;
		font-weight: bold;
	}

	.styleDivision {
		font-family: Arial, Helvetica, sans-serif;
	}

	.styleItalic {
		font-style: italic;
	}
</style>


<?php 
function championAnnee($saison, $division, $bdd)
{
   $tabDivisionSeniors = array('110', '120', '130', '135', '140', '150', '160', '170', '180', '190', '175', '185', '195');
   $listeDivisionsFeminines = array('280', '285', '290', '295'); 
   $listeDivisionsReserves = array('225', '232', '235', '245','250', '260', '270', '9180'); 
   $listeDivisionsJeunes = array( '365', '360', '370', '325', '330', '335', '330', '375'); 

if(in_array($division,$tabDivisionSeniors))
  $table = "bdequipe1";
else if(in_array($division,$listeDivisionsFeminines))
  $table =  "bdfem";
else if(in_array($division,$listeDivisionsReserves))
  $table =  "bdequipe2";
else if(in_array($division,$listeDivisionsJeunes))
  $table =  "bdjeunes";

global $champion, $comite;

	$reponse = $bdd->query("SELECT champion, comite1 
						FROM $table
						WHERE saison='$saison' and titre = 'champion' 
						AND rang = '$division'
						AND championnat='de France'");

	while ($donnees =  $reponse->fetch()) {
	
		$champion = $donnees['champion'];
		$comite = $donnees['comite1'];
	}

	echo "<div>"."<font face=\"Arial, Helvetica, sans-serif`\">"."<b>".$champion.' '.$comite."</b>"."</font>"."</div>";
}

?>