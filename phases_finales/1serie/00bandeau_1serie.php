<?php $anneemoins = $annee-1;?>
<?php $anneeplus = $annee+1;?>

<div id="Layer1" style="position:absolute; width:1600px; height:67px; z-index:1; top: 83px; left: 0px"> 
  <table width="100%" border="0" height="30" bordercolor="EAECEB" cellspacing="0">
    <tr valign="top" align="center"> 
      <td colspan="14" bgcolor="006699" height="28">
	  	<font size="5" color="#FFCC00"><b>
        	<?php echo "Championnat de France".' '.$annee.''." : 1re S&eacute;rie";?>
       </b></font></td>
    </tr>
    <tr valign="top" align="center"> 
      <td colspan="10" bgcolor="#EAECEB" height="28"> 
           <?php	include("../pub1.php"); ?>
      </td>
      <td valign="middle" bgcolor="#EAECEB" height="28" width="5%"> 
        <div align="right"> <font size="2" color="#000000"> 
          <?php echo "( ".''.$anneemoins.''." )"; ?>
          </font></div>
      </td>
      <td valign="middle" bgcolor="#EAECEB" height="28" width="19%"> 
		  <a href="http://francefinalesrugby.franceserv.com/phases_finales/1serie/page1serie.php?variable_1=<?php echo $anneemoins;?>" target="_top">
		  <font size="6" color="#FF0000"><b>&lt;&lt;</b></font></a><font size="5" color="#EAECEB">znnne</font><font size="5"></font>
		  <a href="http://francefinalesrugby.franceserv.com/phases_finales/1serie/page1serie.php?variable_1=<?php echo $anneeplus;?>"target="_top">
		  <font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a> 
      </td>
      <td valign="middle" bgcolor="#EAECEB" height="58" width="4%"> 
        <div align="left"><font size="2" color="#000000"> 
          	<?php echo "( ".''.$anneeplus.''." )"; ?>
        </font></div>
      </td>	
      <td width="37%" bgcolor="#EAECEB" height="28"> 
        <?php	include("../pub2.php"); ?>
      </td>
    </tr>
  </table>
</div>
 
<p>&nbsp;</p>
<p align="center">&nbsp;</p>


 

