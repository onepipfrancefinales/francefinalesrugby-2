 <?php
 /*
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
		$organisation="Phases finales territoriales comit&eacute; ";
		$comiteNom=$comiteNom;
		$div170 = 170;	$div116 = 116; $div190 = 190; $div200 = 200; $div210 = 210; 
		$div220 = 220;	$div270 = 270;	$div116 = 9116; $div190 = 9190;
		}
		elseif ($annee > 2019 and $annee < 2023)
		{
		$organisation="Phases finales r&eacute;gionales ligue";
		$comiteNom=$ligueNom;
		$valeurLigue=($champLigue * 10000);
		$div170 = $valeurLigue + 170;	$div116 = $valeurLigue + 116; $div190 = $valeurLigue + 190; $div200 = $valeurLigue + 200;
		$div210 = $valeurLigue + 210;	$div220 = $valeurLigue + 220; $div270 = $valeurLigue + 270;
		$div9116 = $valeurLigue + 9116; $div9190 = $valeurLigue + 9190;
		}
		else
		{
		$organisation="Phases finales r&eacute;gionales ligue";
		$comiteNom=$ligueNom;
		$valeurLigue=($champLigue * 10000);
		$div170 = $valeurLigue + 170;	$div116 = $valeurLigue + 116; $div190 = $valeurLigue + 190; 
		$div270 = $valeurLigue + 270;   $div9116 = $valeurLigue + 9116; 
		}	
		?>
		<?php echo $organisation;?>
      <?php echo strtoupper($comiteNom);?>
      <?php echo $annee;?>
    </td>
   
  </tr>
  <tr > 
    <td class="equipeItitre"> Equipe I </td>
    <td class="equipeI"><a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div170;?>" target="_top">Régionale 1</a></td>
    <td class="equipeI"><a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div116;?>" target="_top">Régionale 2</a></td>
    <td class="equipeI"><a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div190;?>" target="_top">Régionale 3</a></td>
    <td class="vide" colspan="2" ><a href="/palmares/palmTerritorial/tableauPalmReg.php?sigleLigue=<?php echo $appartenanceLigue;?>" target="_top">Palmar&egrave;s r&eacute;gional </a></td>
  </tr>
  <tr > 
    <td class="equipeIItitre"   > R&eacute;serve </td>
    <td class="equipeII"><a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div270;?>" target="_top">R&eacute;s régionale 1</a></td>
    <td class="equipeII"><a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=<?php echo $div9116;?>" target="_top">R&eacute;s régionale 2</a></td>
    <td class="equipeII"><div id="equipeII" ></div></td>

    <td class="france" colspan="2" ><a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=110&annee=<?php echo $annee; ?>" target="_blank">Championnat de France</a> </td>
  </tr>
</table>
</header>