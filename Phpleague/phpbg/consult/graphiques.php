<?php
//***********************************************************************/
// phpbgeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpbgeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpbgeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

include ("avant.php");
require ("../config.php") ;
require ("../consult/fonctions.php");
ouverture ();
ENTETE2 ();

if (!isset($_REQUEST['champ']))
   {
       demande_champ ();
   }
else
{
$champ = $_REQUEST['champ'];
$query="SELECT id FROM phpbg_equipes where id_champ=$champ";
$result=mysql_query($query);
           while ($row = mysql_fetch_array($result))
           { $equipe=$row[0];
             echo "<div align=\"center\"<img src=\"graph.php?equipe=$equipe\"></div>";
           }
}
?>
<br />
<p align=right><font face="Verdana" size="1">Powered by <a href="http://phpbgeague.univert.org" target="_blank">phpbgeague</a></font></p>
