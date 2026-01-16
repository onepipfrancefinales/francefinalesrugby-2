
<?php
//*****************************************
//****** choix de la base de données ******
//*****************************************

if ($comite=="phpfem")
	{
	require ("../../connect/connection5.php");
	}
elseif ($comite=="phpf1" or $comite=="phpfed2" or $comite=="phpfed3NE" or $comite=="phpfed3GS")
	{
	require ("../../connect/connection3.php");
	}
else	
	{
	require ("../../connect/connection2.php");
	}
	
