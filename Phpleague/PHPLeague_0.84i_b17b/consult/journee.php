<?php

$champ = isset($_REQUEST['champ']) ? $_REQUEST['champ'] : NULL;

define('MOD', 'consult');

require('../config.php') ;

if ($ACT_CLUB == 1)
{
	require(URL_SCRIPT.'function_consult.php');

	include(URL_SCRIPT.'header.php');

	ouverture();

	if ($AGENT == 'iphone')
	{
		echo '	<div id="topbar">
		<div id="leftnav">
			<a href="index.php"><img src="../themes/iphone/home.png" alt="home" /></a>
		</div>
		<div id="title">
			<h1>'.FormatText('Journée').'</h1>
		</div>
	</div>'."\n\n";
	}
	else
	{
		echo '	<h1>'.FormatText('Journée').'</h1>'."\n\n";
	}

	if (!isset($_REQUEST['champ']))
	{
		demande_champ($champ);
	}
	else
	{
		demande_champ($champ);

		DayLastNext($champ, CONSULT_JOURNEE_LAST);
		DayLastNext($champ, CONSULT_JOURNEE_NEXT, 1);
	}

	include(URL_SCRIPT.'footer.php');
}
else
{
	header('location: index.php');
}

?>