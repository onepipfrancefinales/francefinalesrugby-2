<?php
  include("hautindex.php");
  include("bandeauNavigation.php");
	
				if ($comite == "ab" or $comite == "ld" OR $comite == "mpy" OR $comite == "pc" OR $comite == "r")
				require ("menuOccitanie.php");	

				elseif ($comite == "au" or $comite == "ap" OR $comite == "da" OR $comite == "ly")
				require ("menuAuvergneRhoneAlpes.php");

				elseif ($comite == "be" or $comite == "cbl" OR $comite == "ca" OR $comite == "lm" OR $comite == "pch" OR $comite == "pa")
				require ("menuNouvelleAquitaine.php");

				include("bandeauNavigation2.php");
echo $somme;
			 if ($somme==3)
				{
				include("finale.php");
				}
			 elseif ($somme==6)
				{
				include ("demi.php");
				}
			 elseif ($somme==9)
				{
				include ("demiAR.php");
				}
			 elseif ($somme==14 OR $somme==28 OR $somme==42)
				{
				include ("quart.php");
				}
			 else
				{
				include ("demiMixte.php");
				}
				
?>