<?php if (isset ($nomDivision)) $nomDivision=$nomDivision; else $nomDivision="";?>
<table width="1460" border="0" height="22" align="left">
  <tr> 
    <td width="730" height="15"> 
      <div align="center"><b><a href="/palmares/palmNational/pagePalmares.php?division=<?php echo $id;?>" target="_top"><font size="5" color="#000000">Palmar&egrave;s 
        champions de France 
        <?php echo $nomDivision ;?>
        </font></a></b></div>
    </td>
    <td width="730" height="15" valign="top"> 
      <div align="center"><b><a href="/palmares/palmNational/pagePalmares.php?division=<?php echo $id;?>" target="_top"><font size="5" color="#000000">Palmar&egrave;s 
        champions de France 
        <?php echo $nomDivision ;?>
        </font></a></b></div>
    </td>
  </tr>
  <tr> 
    <td width="730" height="15"> 
      <?php require("../../pub/pub12-2.php"); ?>
    </td>
    <td width="730" height="15" valign="top"> 
      <?php require("../../pub/pub12-2.php"); ?>
    </td>
  </tr>
</table>

