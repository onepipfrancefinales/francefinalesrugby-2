<?php
/* ---  Début  --- */

if ($id == 31)
  $debut = 1997;

  else if ($id == 35)
  $debut = 2011;


else
  $debut = 1999;

/* ---  Fin  --- */


 if ($id == 35)
$fin = 1989;
else
  $fin = 1979;
  ?>
  <table class="borderNone marginAuto width1250  backgroundBlack">
    <tr>
      <th class="equipeI width50"></th>
      <th class="equipeI width200">honneur</th>
      <th class="equipeI width200">promotion <br>honneur</th>
      <th class="equipeI width200">1re série</th>
      <th class="equipeI width200">2me série</th>
      <th class="equipeI width200">3me série</th>
      <th class="equipeI width200">4me série</th>
    </tr>
    <tr>
      <td class="equipes "> <?php saison(170, $comite, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 170, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 180, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 190, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 200, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 210, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 220, $bdd, $debut, $fin); ?></td>
    </tr>
  </table>