<?
//***********************************************************************/
// Phpleague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.81                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpleague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpleague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

if (isset($_COOKIE['user'])) {$user_pseudo=$_COOKIE['user'];} else {$user_pseudo='';}
if (isset($_COOKIE['mot_de_passe'])) {$user_mdp=$_COOKIE['mot_de_passe'];} else {$user_mdp='';}

if (VerifSession ($user_pseudo,$user_mdp)=="1")
                {
                $requete= "SELECT pseudo, id_prono FROM phpl_membres WHERE pseudo='$user_pseudo'";
                $result = mysql_query($requete);
                $row = mysql_fetch_array($result);
                $user_pseudo=$row[0];
                $user_id=$row[1];
                $connecte="oui";
                $include="menu.identifie.htm";
                include ($include);
                }
else
 { 
   $include="menu.non-identifie.htm";
   include ($include);
   $connecte="non";
 }

?>
