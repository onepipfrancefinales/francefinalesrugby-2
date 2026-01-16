<?php
echo $division;
$anneeplus = $annee +1;
$anneemoins = $annee -1;
?>
<table border="0" height="30">
  <tr valign="top" align="center"> 
    <td bgcolor="#EAECEB" height="29" align="left" width="375" valign="middle"> 
      <p align="center"> 
        <?php require("../../pub/pub7.php"); ?>
      </p>
    </td>
    <td valign="middle" bgcolor="#EAECEB" height="29" align="left"> 
      <div align="center"><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
        </font></b></font></b><font color="#000000" size="2"><a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&annee=<?php echo $anneemoins;?>&division=<?php echo $division; ?>" target="_top"><font size="6" color="#FF0000">&lt;&lt;</font></a></font></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnne</font><font size="5"> 
        </font></font></b><a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&annee=<?php echo $anneeplus; ?>&division=<?php echo $division; ?>" target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a></font></div>
    </td>
    <td width="375" bgcolor="#EAECEB" height="29" align="left" valign="middle"> 
      <div align="center"> 
        <?php require("../../pub/pub8.php"); ?>
      </div>
    </td>
  </tr>
</table>

