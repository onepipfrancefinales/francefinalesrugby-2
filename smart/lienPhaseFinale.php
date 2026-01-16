<?php 
$champ2 =substr($champ,0,2);
$division =$champ2*10;


$champLigue = substr($division,0,2);
$div =170;

if ($champLigue == 10)
$base="phpau";
elseif ( $champLigue == 11 or $champLigue == 12 or $champLigue == 13 or  $champLigue == 16 or $champLigue == 21)
$base="phppl";
elseif ($champLigue == 19)
$base="phpca";	
elseif ($champLigue == 20)
$base="phpab";
	elseif ($champLigue == 15 or $champLigue == 17 or $champLigue == 18 or $champLigue == 22)
$base="phpidf";
		

$adresse = "../Phpleague/$base/prono/index.php?mode=smart&?division=$division$div&champLigue=$champLigue";

?>
<table class="marginAuto width95PC backgroundWhite">
<tr>
 <td class="france"><a href="pf_terr/phase_finale.php?comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&annee=<?php echo $datePhasesFinales;?>&division=<?php echo substr($champ,0,5).'0';?>"> 
		Phases finales régionales <?php echo $datePhasesFinales;?>
	</a></td>
</tr>

<tr>
 <td class="franceBleu"><a href="palmares/pagePalmTerr.php?comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&champ=<?php echo $champ ;?>"> 
 		Palmarès régional</a></td>
</tr>
<tr>
 <td height="5"></td>
</tr>
<tr>
 <td class="franceProno "><a style ="text-decoration: none; color:#FFFFFF;" href="<?php echo $adresse ;?>"> 
 		Pronostiquez sur les compétitions de la ligue</a></td>
</tr>
</table>

