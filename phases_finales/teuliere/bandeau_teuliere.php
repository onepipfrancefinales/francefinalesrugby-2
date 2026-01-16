<?php $annee=$_GET['variable_1'];?> 
<?php $variable_1=$_GET['variable_1'];?> 
 <?php $anneemoins = $annee-1;?>
 <?php $anneeplus = $annee+1;?>
<table width="100%" border="0" height="90">
  <tr valign="top" align="center"> 
    <td colspan="16" bgcolor="006699" height="36"><font size="5" color="#FFCC00"><b> 
      <?php echo "Championnat de France";?>
      <?php echo $annee;?>
      : 
      <?php echo "Teulière";?>
      </b></font></td>
  </tr>
  <tr valign="top" align="center"> 
    <td bgcolor="#EAECEB" height="28" width="9%"> 
      <?php	include("../../pub/pub101.php"); ?>
    </td>
    <td bgcolor="#EAECEB" height="28" valign="middle" align="center" width="30%"> 
      <div align="right"><font color="#000000" size="2"> 
        <?php echo "( ".$anneemoins." )";?>
        </font></div>
    </td>
    <td bgcolor="#EAECEB" height="28" valign="middle" align="center" width="26%"> 
      <a href="/phases_finales/teuliere/pageteuliere.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000"><b>&lt;&lt;</b></font></a> 
      <font size="5" color="#EAECEB">nnnnne</font> 
      <?php if ($variable_1 < 2018 or $annee < 2018)	
		{
		?>
      <a href="/phases_finales/teuliere/pageteuliere.php?variable_1=<?php echo $anneeplus;?>" target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a> 
    </td>
    <td bgcolor="#EAECEB" height="28" valign="middle" align="center" width="25%"> 
      <div align="left"> <font size="2" color="#000000"> 
        <?php echo "( ".$anneeplus." )"; ?>
         </font> </div>
    </td>
    <?php
	  	}
	  else
	  	{
		?>
    <a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?annee=<?php echo $anneeplus;?>&division=370" target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a> 
    <td bgcolor="#EAECEB" height="28" valign="middle" align="center" width="25%"> 
      <div align="left"><font size="2" color="#000000"> ( 
        <?php echo $anneeplus; ?>
        ) </font></div>
    </td>
    <?php
	  }	  
	  ?>
    <td colspan="12" bgcolor="#EAECEB" height="28" valign="top" width="10%"> 
      <?php	include("../../pub/pub201.php"); ?>
    </td>
  </tr>
</table>
