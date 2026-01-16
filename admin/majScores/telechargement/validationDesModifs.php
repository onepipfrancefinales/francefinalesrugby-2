
<?php 
//echo "ligue : ".$ligueComite;
if ($ligueComite == "phpf1")
	$champ = 141;
elseif ($ligueComite == "phpfed2")
	$champ = 151;
elseif ($ligueComite == "phpfed3NE")
	$champ = 161;
elseif ($ligueComite == "phpfed3GS")
	$champ = 161;
else
	$champ = 171;

?>
<p> 
  <!--
http://francefinalesrugby.franceserv.com/Phpleague/phpfed2/admin/index.php?page=championnat&amp;action=generer&amp;champ=151 
-->
</p>
<hr/>
<p>&nbsp;</p>
<p><a href="../../../Phpleague/<?php echo $ligueComite; ?>/admin/index.php?page=championnat&amp;action=generer&amp;champ=<?php echo $champ; ?>" target="_blank">Validation 
  des modifications</a></p>

<hr/>

