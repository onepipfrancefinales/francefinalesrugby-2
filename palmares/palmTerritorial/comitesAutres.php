<table  class=" width1250 borderNone colorWhite">
  <tr> 
    <td width="65" align="center"><a href="tableauPalmTerr.php?paramIdComite=<?php echo $idComite; ?>"></a></td>
    <td width="65"> 
      <div align="center"></div>
    </td>
    <td width="74"> 
      <div align="center"></div>
      <div align="center"></div>
    </td>
    <td width="186"> 
      <?php 
	if ($sigleLigue == "BFC")
		{
		$nomComite = "Bourgogne Franche Comte";
		$idComite=15;
		$sigleComite = "(BG)";
		}
	elseif ($sigleLigue == "BRE")
		{
		$nomComite = "Bretagne";
		$idComite=16;
		$sigleComite = "(BR)";
		}		
	elseif ($sigleLigue == "CVL")
		{
		$nomComite = "Centre";
		$idComite=17;
		$sigleComite = "(CE)";
		}	
	elseif ($sigleLigue == "GES")
		{
		$nomComite = "Alsace Lorraine";
		$idComite=11;
		$sigleComite = "(AL)";
		}
	elseif ($sigleLigue == "HDF")
		{
		$nomComite = "Flandres";
		$idComite=23;
		$sigleComite = "(FL)";
		}
	elseif ($sigleLigue == "IDF")
		{
		$nomComite = "Ile de France";
		$idComite=25;
		$sigleComite = "(IDF)";
		}
	elseif ($sigleLigue == "NOR")
		{
		$nomComite = "Normandie";
		$idComite=30;
		$sigleComite = "(N)";
		}
	elseif ($sigleLigue == "PDL")
		{
		$nomComite = "Pays de Loire"; 
		$idComite=31;
		$sigleComite = "(PL)";
		}
		elseif ($sigleLigue == "PCA")
		{
		$nomComite = "Provence Alpes côte d'Azur"; 
		$idComite=34;
		$sigleComite = "(PCA)";
		}
		?>
      <div align="right"><a href="tableauPalmTerr.php?paramIdComite=<?php echo $idComite; ?>"><font color="FFFFFF">Comit&eacute; 
        <?php echo $nomComite; ?></Font></a></td>
    <td width="125"> 
      <div align="center"><a href="tableauPalmTerr.php?paramIdComite=<?php echo $idComite; ?>"><img src="../../images/comites/<?php echo $sigleComite; ?>.jpg" width="50" height="50"></a></div>
      </td>
    <td width="81"> 
      <div align="center"></div>
    </td>
    <td width="91"> 
      <div align="center"></div>
      <div align="center"></div>
    </td>
    <td width="71"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="8"> 
      <hr>
    </td>
  </tr>
</table>

