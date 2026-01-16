 <?php
 
 if (isset ($comiteNom)) $comiteNom = $comiteNom; else $comiteNom='-';
 if (isset ($ligueNom)) $ligueNom = $ligueNom; else $ligueNom='-';
 $champLigue = substr($division,0,2);
 $comiteMaj=strtoupper($comite);
 $comiteMaj="(".''.$comiteMaj.''.")";
 ?>
 <header>
<table  >
  <tr > 
    <td class="vide"> <a href="/index.php" target="_top">Accueil</a> 
    </td>
    <td class="entete" colspan="6" > 
	<?php if ($annee < 2019 ) 
		{
		$organisation="Phases finales territoriales comité ";
		$comiteNom=$comiteNom;
		$div170 = 170;	$div180 = 180; $div190 = 190; $div200 = 200; $div210 = 210; 
		$div220 = 220;	$div270 = 270;	$div180 = 9180; $div190 = 9190;
		}
		elseif ($annee > 2019 and $annee < 2023)
		{
		$organisation="Phases finales régionales ligue";
		$comiteNom=$ligueNom;
		$valeurLigue=($champLigue * 10000);
		$div170 = $valeurLigue + 170;	$div180 = $valeurLigue + 180; $div190 = $valeurLigue + 190; $div200 = $valeurLigue + 200;
		$div210 = $valeurLigue + 210;	$div220 = $valeurLigue + 220; $div270 = $valeurLigue + 270;
		$div9180 = $valeurLigue + 9180; $div9190 = $valeurLigue + 9190;
		}
		else
		{
		$organisation="Phases finales régionales ligue";
		$comiteNom=$ligueNom;
		$valeurLigue=($champLigue * 10000);
		$div170 = $valeurLigue + 170;	$div180 = $valeurLigue + 180; $div190 = $valeurLigue + 190; 
		$div270 = $valeurLigue + 270;   $div9180 = $valeurLigue + 9180; 
    $div295 = $valeurLigue + 295;  $div300 = $valeurLigue + 300;
		}	
		?>
		<?php echo $organisation;?>
      <?php echo strtoupper($comiteNom);?>
      <?php echo $annee;?>
    </td>
	<?php    if ($annee < 2023)
	{?> 
		<td class="vide"> <a href="mailto:francefinalesrugby@free.fr" >Contact</a></td>
	<?php  }?> 
  </tr>
  <?php 
  if ($annee < 2023)
  { 
?>
  
  <tr > 
    <td class="equipeItitre"> Equipe I </td>
    <td class="equipeI"><a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div170;?>" target="_top">Honneur</a></td>
    <td class="equipeI"><a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div180;?>" target="_top">Promotion</a></td>
    <td class="equipeI"><a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div190;?>" target="_top">1ére  Série</a></td>
    <td class="equipeI"><a href="pageAffichage.php?page=S2S3S4&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div200;?>" target="_top">2ièmeSérie</a></td>
    <td class="equipeI"><a href="pageAffichage.php?page=S2S3S4&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div210;?>" target="_top">3ièmeSérie</a></td>
    <td class="vide" colspan="2" ><a href="/palmares/palmTerritorial/tableauPalmReg.php?sigleLigue=<?php echo $appartenanceLigue;?>" target="_top">Palmarès régional </a></td>
  </tr>
  <tr > 
    <td class="equipeIItitre"   > Réserve </td>
    <td class="equipeII"><a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div270;?>" target="_top">Réserve</a></td>
    <td class="equipeII"><a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div9180;?>" target="_top">Promotion</a></td>
    <td class="equipeII"><a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div9190;?>" target="_top">1re Série</a></td>
    <td class="equipeII"><div id="equipeII" ></div></td>
    <td class="equipeI"><a href="pageAffichage.php?page=S2S3S4&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div220;?>" target="_top">4ièmeSérie</a></td>
    <td class="france" colspan="2" ><a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=110&annee=<?php echo $annee; ?>" target="_blank">Championnat de France</a> </td>
  </tr>
 <?php 
  }
  else
  {
  ?>
<tr > 
    <td class="equipeItitre"> Equipe I </td>
    <td class="equipeI"><a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div170;?>" target="_top">Régionale 1</a></td>
    <td class="equipeI"><a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div180;?>" target="_top">Régionale 2</a></td>
    <td class="equipeI"><a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div190;?>" target="_top">Régionale 3</a></td>
    <td class="vide" colspan="2" ><a href="/palmares/palmTerritorial/tableauPalmReg.php?sigleLigue=<?php echo $appartenanceLigue;?>" target="_top">Palmarès régional </a></td>
  </tr>
  <tr > 
    <td class="equipeIItitre"   > Réserve </td>
    <td class="equipeII"><a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div270;?>" target="_top">Rés régionale 1</a></td>
    <td class="equipeII"><a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div9180;?>" target="_top">Rés régionale 2</a></td>
    <td class="fem"><a href="pageAffichage.php?page=FEM&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div295;?>" target="_top">Féminines</a></td>

    <td class="france" colspan="2" ><a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=110&annee=<?php echo $annee; ?>" target="_blank">Championnat de France</a> </td>
  </tr>
<?php
}
?>
</table>
</header>