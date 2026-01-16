<?php
//***********************************************************************/
// phpfed2eague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpfed2eague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpfed2eague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

require ("../config.php") ;
require ("../config2.php") ;
require ("fonctions.php");
ouverture ();
include ("avant.php");
ENTETE2();
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<div align="center"><h1> phpfed2EAGUE</h1>
<p> (script réalisé par <a href="http://phpfed2eague.univert.org">http://phpfed2eague.univert.org</a>)</p>
<h2> <?php echo MENU_UTILISATEUR; ?> </h2></div>
<p align="center"><img src="http://univert42.free.fr/images/logo20.gif"></p><?php 
include ("apres.php");

?>



