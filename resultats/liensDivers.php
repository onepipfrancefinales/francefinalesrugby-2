<?php
if ($cmt == "fem")
{
?>
<table class = "marginAuto width550 borderWidth3" >
   <tr class="fond" >
    <td rowspan="3"   > 
      <h4><a class="decorationNoneWhite" href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=<?php echo $division; ?>&annee=<?php echo $datePhasesFinales;?>"		target="_top">Phases finales <br> Championnat de France</a></h4></td>
    <td class="tabHautDroit"><a href="/palmares/palmNational/pagePalmares.php?division=280" target="_top">Palmarès Elite 1</a></td>
  </tr>
  <tr> 
    <td class="tabHautDroit"><a href="/palmares/palmNational/pagePalmares.php?division=285" target="_top">Palmarès Elite2</a></td>
  </tr>
  <tr class="fond" >     
	<td class="tabHautDroit"><a href="/palmares/palmNational/pagePalmares.php?division=290" target="_top">Palmarès Fédérale 1</a></td>
	</tr>
</table>	
<?php	
}
elseif ($cmt =="pro")
{
?>	
<table class = "marginAuto width550  borderWidth3" >
   <tr class="fond" >
    <td   rowspan="3"   > 
      <h4 ><a  class="decorationNoneWhite colorWhite" href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=110&annee=<?php echo $datePhasesFinales;?>"
		target="_top">Phases finales <br> Championnat de France</a></h4></td>
    <td class="tabHautDroit"> <a href="/palmares/palmNational/pagePalmares.php?division=110" target="_top">Palmarès Top 14</a></td>
  </tr>
  <tr> 
    <td class="tabHautDroit"> <a href="/palmares/palmNational/pagePalmares.php?division=120" target="_top">Palmarès Pro D2</a></td>
  </tr>
  <tr class="fond">     
	<td class="tabHautDroit"> <a href="/palmares/palmNational/pagePalmares.php?division=130" target="_top">Palmarès Nationale</a></td>
	</tr>
</table>	
<?php	
}
elseif($cmt == "f1" OR $cmt == "fed2" OR $cmt == "fed3NE" OR $cmt == "fed3GS")
{
 
 if ($division == 140)
	{
	$equipe1 = "Fédérale 1";
	$equipe2 = "Espoir";
	}
 elseif ($division == 150)
	{
	$equipe1 = "Fédérale 2";
	$equipe2 = "Fédérale B";
	}
 elseif ($division == 160)
	{
	$equipe1 = "Fédérale 3";
	$equipe2 = "Excellence B";
	}
	?>

<table  class = "marginAuto width550 borderWidth3">
  <tr class="borderColorBlue"> 
    <td rowspan="2" class="backgroundBlue borderColorblue center"> 
      <h4><a class="decorationNoneWhite" href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=<?php echo $division; ?>&annee=<?php echo $datePhasesFinales;?>"
 target="_top">Phase finale du<br>
        championnat de France</a></h4>
    </td>
    <td class="bleuClair" > <a href="../palmares/palmNational/pagePalmares.php?division=<?php echo $division; ?>" alt="text" title = "palmarès">Palmarès 
      <?php echo $equipe1;?> 
      </a> </td>
  </tr>
  <tr class="borderColorBlue"> 
    <td class="bleuClair"> <a href="../palmares/palmNational/pagePalmares.php?division=<?php echo $division+100; ?> " alt="text" title = "palmarès<?php echo $equipe2; ?>">Palmarès <?php echo $equipe2; ?></a> </td>
  </tr>
</table>	
<?php	
}
else
{
	$division = ($champLigue*10000) + 170;
?>
<table class = "marginAuto width550 borderWidth3"  >
   <tr class="fond" >
    <td   rowspan="2" > 
      <h4 ><a class="decorationNoneWhite" href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=HPHS1&comite=<?php echo $cmt;?>&annee=<?php echo $datePhasesFinales;?>&division=<?php echo $division;?>"
		target="_top">Phases finales régionales</a></h4></td>
    <td class="tabHautDroit"> <a href="/palmares/palmTerritorial/tableauPalmReg.php?sigleLigue=<?php echo $sigleLigue;?>"
		target="_top">Palmarès régional</a></td>
  </tr>
  <tr> 
    <td class="tabHautDroit" > <a href="../consultation/page_ligue.php?idLigue=<?php echo $champLigue;?>"
		target="_top">Accès aux infos de la ligue</a></td>
  </tr>
  <tr class="fond">     
	<td class="phasesFinales" colspan="2"> 
    <h4 ><a class="decorationNoneWhite" href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=170&annee=<?php echo $datePhasesFinales;?>"
		target="_top">Championnat de France</a></h4></td>
  </tr>
</table>	
<?php	
}
?>