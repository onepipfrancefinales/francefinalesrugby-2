<?php
//suppression des phases finales d'une compétition
if (substr($type,-1)=='1')
$texte ="";

//Covid 1 saison 2019-2020
elseif (substr($type,-1)=='2')
$texte ="En raison de la Covid19, l'ensemble des compétitons et des phases finales de la FFR ont été suspensdus. 
aucune relègation, aucune montée,titre
Aucun titre pour la saison 2019-2020 n'a été decerné. ";

//covid 2 saison 2020-2021
elseif (substr($type,-1)=='3')
$texte ="toutes les compétitions amateurs ont été suspendues. 
seules les compétitions professionnelles sont allées à leur terme";

?> 
<table width="1000" border="0" cellspacing="0" align="center">
  <tr bgcolor="#FFCC66"> 
    <td width="199">&nbsp;</td>
    <td width="628">&nbsp;</td>
    <td width="167">&nbsp;</td>
  </tr>
  <tr> 
    <td width="199">&nbsp;</td>
    <td width="628">&nbsp;</td>
    <td width="167">&nbsp;</td>
  </tr>
  <tr> 
    <td width="199">&nbsp;</td>
    <td width="628">&nbsp;</td>
    <td width="167">&nbsp;</td>
  </tr>
  <tr> 
    <td width="199">&nbsp;</td>
    <td width="628">
      <?php echo $texte;?>
    </td>
    <td width="167">&nbsp;</td>
  </tr>
  <tr> 
    <td width="199">&nbsp;</td>
    <td width="628">&nbsp;</td>
    <td width="167">&nbsp;</td>
  </tr>
  <tr> 
    <td width="199">&nbsp;</td>
    <td width="628">&nbsp;</td>
    <td width="167">&nbsp;</td>
  </tr>
  <tr> 
    <td height="18" width="199">&nbsp;</td>
    <td height="18" width="628">&nbsp;</td>
    <td height="18" width="167">&nbsp;</td>
  </tr>
  <tr> 
    <td width="199">&nbsp;</td>
    <td width="628">&nbsp;</td>
    <td width="167">&nbsp;</td>
  </tr>
  <tr> 
    <td width="199">&nbsp;</td>
    <td width="628">&nbsp;</td>
    <td width="167">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFCC66"> 
    <td width="199">&nbsp;</td>
    <td width="628">&nbsp;</td>
    <td width="167">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
