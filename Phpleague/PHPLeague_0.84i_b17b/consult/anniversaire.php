<?php

define('MOD', 'consult');

require('../config.php') ;

if ($ACT_CLASSEMENT == 1)
{
	require('../function_consult.php');
	include('../header.php');

	ouverture();

	if ($AGENT == 'iphone')
	{
		echo '	<div id="topbar">
		<div id="leftnav">
			<a href="index.php"><img src="../themes/iphone/home.png" alt="home" /></a>
		</div>
		<div id="title">
			<h1>'.FormatText('Anniversaires').'</h1>
		</div>
	</div>'."\n\n";
	}
	else
	{
		echo '	<h1>'.FormatText('Anniversaires').'</h1>'."\n\n";
	}

?>

<script type="text/javascript">$(document).ready(function(){$('a.TipsJoueur').cluetip({width:'<?php echo T_PHOTO_JOUEUR; ?>',height:'auto',showTitle:false,dropShadow:true,cluetipClass:'default'});});</script>
<?php

	echo Anniversaire('Aujourd\'hui', '"%-'.date('m-d').'"');
	echo Anniversaire('Ce mois-ci', '"%-'.date('m').'-%"');
	echo Anniversaire('Le mois prochain', '"%-'.(date('m') + 1).'-%"');

	include('../footer.php');
}
else
{
	header('location: index.php');
}

?>