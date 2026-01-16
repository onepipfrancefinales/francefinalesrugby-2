
<?php 
echo "ligue : ".$ligueComite;
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
<p>

<?php

//for ($i=$champ; $i<$champ+8; $i++)
//{
//	echo $champ;

?>
<!--
<meta http-equiv="refresh" content="0; URL=http:../../../Phpleague/<?php echo $ligueComite; ?>/admin/index5.php?page=championnat&action=generer&champ=<?php echo $champ; ?>">
-->
<?php
//}

?>


<a href="../../../Phpleague/<?php echo $ligueComite; ?>/admin/index6.php?page=championnat2&amp;action=genererGroupe&amp;champ=<?php echo $champ; ?>" target="_blank">Validation 
  des modifications</a></p>







<hr/>

