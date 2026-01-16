<?php
$anneeplus = $annee +1;
$anneemoins = $annee -1;

if ($anneeplus == 2019)
{
	if ($comite == "au" or $comite == "ap" or $comite == "ly" or $comite == "da")
	{  $comite = "au"; $codeLigue = 100000; $division = $codeLigue + $division;}
	elseif ($comite == "be" or $comite == "cbl" or $comite == "ca" or $comite == "lm" or $comite == "lm" or $comite == "pa" or $comite == "pch")
	{ $comite = "ca"; $codeLigue = 190000;$division = $codeLigue + $division;}
	elseif ($comite == "ab" or $comite == "mpy" or $comite == "ld" or $comite == "pc")
	{ $comite = "ab"; $codeLigue = 200000; $divison = $codeLigue + $division;}
/*
	elseif ($comite == "al") 
		{$codeLigue = 150000; $division = $codeLigue + $division;}
	elseif ($comite == "n")
		{$codeLigue = 180000; $division = $codeLigue + $division;}
	elseif ($comite == "pr")
		{$codeLigue = 220000; $division = $codeLigue + $division;}
	elseif ($comite == "idf")
		{$codeLigue = 170000; $division = $codeLigue + $division;}
	
    elseif ($comite == "bg")
		{$codeLigue = 110000; $division = $codeLigue + $division;}
	elseif ($comite == "br")
		{$codeLigue = 120000; $division = $codeLigue + $division;}
	elseif ($comite == "ce")
		{$codeLigue = 130000; $division = $codeLigue + $division;}
	elseif ($comite == "fl")
		{$codeLigue = 160000; $division = $codeLigue + $division;}
	elseif ($comite == "pr")
		{$codeLigue = 220000; $division = $codeLigue + $division;}
*/	
	
echo $division;
}
?>

<nav>
  <div class="lien">
        <?php require("../../pub/pub7.php"); ?> 
    
      	<a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&annee=<?php echo $anneemoins;?>&division=<?php echo $division;?>" target="_top">&lt;&lt;</a>nnnne
        <a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&annee=<?php echo $anneeplus;?>&division=<?php echo $division;?>"target="_top">&gt;&gt;</a>
		
	<?php require("../../pub/pub8.php"); ?>
</div>

</nav>
