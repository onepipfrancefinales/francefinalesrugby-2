 <?php
 
 if (isset ($_GET['annee'])) $saison = $_GET['annee']; else $annee='-';
 $comiteMaj=strtoupper($comite);
 $comiteMaj="(".''.$comiteMaj.''.")";
 ?>
<table width="997" >
  <tr > 
    <td class="vide"> <a href="/index.php" target="_top">Accueil</a> 
    </td>
    <td class="entete" colspan="6" > 
      <?php if ($saison < 2019 ) 
		{
		$organisation="TERRITORIALES COMITE";
		}
		else
		{
		$organisation="REGIONALES LIGUE";
		}
		?>
		<?php echo $organisation;?>
	  
	  <?php echo strtoupper($comiteNom);?>
      <?php echo $saison;?>
    </td>
    <td class="vide"> <a href="mailto:francefinalesrugby@free.fr" >Contact</a> 
    </td>
  </tr>
  <tr > 
    <td class="equipeItitre"> Equipe I </td>
    <td class="equipeI" > <a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=170" target="_top">Honneur</a> 
    </td>
    <td class="equipeI" > <a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=180" target="_top">Promotion</a> 
    </td>
    <td class="equipeI" >
	 	<a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=190" target="_top">1&eacute;re  S&eacute;rie</a> </td>
    <td class="equipeI" > 
		<a href="pageAffichage.php?page=S2S3S4&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=200" target="_top">2i&egrave;meS&eacute;rie</a> 
    </td>
    <td class="equipeI" >
		<a href="pageAffichage.php?page=S2S3S4&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=210" target="_top">3i&egrave;meS&eacute;rie</a> 
    </td>
    <td class="vide" colspan="2" > <a href="../../palmares/palmTerritorial/tableauPalmTerr.php?variable_1=<?php echo $comiteMaj; ?>" target="_blank">Palmar&egrave;s 
      r&eacute;gional </a></td>
 	 </tr>
  <tr > 
    <td class="equipeIItitre"   > R&eacute;serve </td>
    <td class="equipeII"  >
	 	<a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=270" target="_top">R&eacute;serve</a> 
    </td>
    <td class="equipeII"  > 
		<a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=9180" target="_top">Promotion</a> 
    </td>
    <td class="equipeII" >
	 <a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=9190" target="_top">1re S&eacute;rie</a> </td>
    <td class="equipeII"  > 
      <div id="equipeII" ></div>
    </td>
    <td class="equipeI"  > 
	<a href="pageAffichage.php?page=S2S3S4&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=220" target="_top">4i&egrave;meS&eacute;rie</a> 
    </td>
    <td  class="france" colspan="2" > 
	<a href="/phases_finales/honneur/pagehonneur.php?variable_1=<?php echo $annee;?>" target="_blank">Championnat 
      de France</a> </td>
  </tr>
</table>
