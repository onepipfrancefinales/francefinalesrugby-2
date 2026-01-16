<?php
//***********************************************************************/
// phpproeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpproeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpproeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
?>

<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
  <tr>
    <td width="100%">
      <?php

      $resultats = $idconnect->query("SELECT pts_prono_exact, pts_prono_participation, tps_avant_prono 
                                    FROM phppro_gr_championnats
                                    WHERE id='$gr_champ'");
      $row = mysqli_fetch_array($resultats);

      include("baremes.htm");
      ?>
    </td>
  </tr>
</table>

<?php
