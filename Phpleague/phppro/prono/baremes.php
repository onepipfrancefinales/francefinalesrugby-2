

<table border="0" cellpadding="0" cellspacing="0" width="100%">
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
