<?php
//***********************************************************************/
// phpcaeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpcaeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpcaeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
?>
<br /><br /><br /><br /><?php

 //$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $resultats=$idconnect->query("SELECT * FROM phpca_membres order by id");
//$resultats=mysql_query($requete);
$nb_membres=mysqli_num_rows( $resultats );
?>
<table border="0" width="100%">
  <tr>
    <td width="3%" bgcolor="#C0C0C0">
      <p align="center"><font face="Verdana" size="2">id</font></td>
    <td width="12%" bgcolor="#C0C0C0">
      <p align="center"><font face="Verdana" size="2">pseudo</font></td>
    <td width="20%" bgcolor="#C0C0C0">
      <p align="center"><font face="Verdana" size="2">mail</font></td>
    <td width="11%" bgcolor="#C0C0C0">
      <p align="center"><font face="Verdana" size="2">nom</font></td>
    <td width="11%" bgcolor="#C0C0C0">
      <p align="center"><font face="Verdana" size="2">prénom</font></td>
    <td width="11%" bgcolor="#C0C0C0">
      <p align="center"><font face="Verdana" size="2">adresse</font></td>
    <td width="11%" bgcolor="#C0C0C0">
      <p align="center"><font face="Verdana" size="2">code postal</font></td>
    <td width="11%" bgcolor="#C0C0C0">
      <p align="center"><font face="Verdana" size="2">ville</font></td>
    <td width="11%" bgcolor="#C0C0C0">
      <p align="center"><font face="Verdana" size="2">Tel</font></td>
  </tr>
<?php
$i=0;
while ($row=mysqli_fetch_array($resultats))
{
if (($i%2)==0) $color="#FFFFFF";
else  $color="#CCCCCC";
?>
 <table border="0" width="100%">
  <tr>
    <td width="3%" bgcolor="<?php print $color?>">
      <p align="center"><font face="Verdana" size="2"><?php print $row["id"] ?></font></td>
    <td width="12%" bgcolor="<?php print $color?>">
      <p align="center"><font face="Verdana" size="2"><?php print $row["pseudo"] ?></font></td>
    <td width="20%" bgcolor="<?php print $color?>">
      <p align="center"><font face="Verdana" size="2"><?php print $row["mail"] ?></font></td>
    <td width="11%" bgcolor="<?php print $color?>">
      <p align="center"><font face="Verdana" size="2"><?php print $row["nom"] ?></font></td>
    <td width="11%" bgcolor="<?php print $color?>">
      <p align="center"><font face="Verdana" size="2"><?php print $row["prenom"] ?></font></td>
    <td width="11%" bgcolor="<?php print $color?>">
      <p align="center"><font face="Verdana" size="2"><?php print $row["adresse"] ?></font></td>
    <td width="11%" bgcolor="<?php print $color?>">
      <p align="center"><font face="Verdana" size="2"><?php print $row["code_postal"] ?></font></td>
    <td width="11%" bgcolor="<?php print $color?>">
      <p align="center"><font face="Verdana" size="2"><?php print $row["ville"] ?></font></td>
    <td width="11%" bgcolor="<?php print $color?>">
      <p align="center"><font face="Verdana" size="2"><?php print $row["mobile"] ?></font></td>
  </tr>
<?php
$i++;
}

?></table>

<textarea rows="11" cols="57">
<?php
 //$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $resultats=$idconnect->query("SELECT * FROM phpca_membres order by id");
//$resultats=mysql_query($requete)  or die ("probleme " .mysql_error());;
while ($row=mysqli_fetch_array($resultats))
{print $row['mail']; echo ";";}
?>
</textarea>
