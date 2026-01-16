
  <?php
  if ($id == 20  or $id == 29 )
  { ?> 
  
  <table class="borderNone marginAuto width1250  backgroundBlack">
    <tr>
      <th class="equipeII width50"></th>
      <th class="equipeII width200">Réserve <br>  honneur</th>
      <th class="equipeII width200">Réserve  <br> promotion honneur</th>
      <th class="equipeII width200">Réserve  <br> 1re série</th>
      <th class="equipeII width200">Réserve <br>  2me série</th>
    </tr>
    <tr>
      <td class="equipes "> <?php saison2(270, $comite, $bdd); ?></td>
      <td class="equipes width200"> <?php palmares2($comite, 270, $bdd); ?></td>
      <td class="equipes width200"> <?php palmares2($comite, 9180, $bdd); ?></td>
      <td class="equipes width200"> <?php palmares2($comite, 9190, $bdd); ?></td>
      <td class="equipes width200"> <?php palmares2($comite, 9200, $bdd); ?></td>
    </tr>
  </table>
 <?php
  }

  else if ($id == 16 OR $id == 31 OR $id == 35)
  {
 ?>
<table class="borderNone marginAuto width750  backgroundBlack">
    <tr>
      <th class="equipeII width50"></th>
      <th class="equipeII width200">Réserve <br>  honneur</th>
    </tr>
    <tr>
      <td class="equipes "> <?php saison2(270, $comite, $bdd); ?></td>
      <td class="equipes width200"> <?php palmares2($comite, 270, $bdd); ?></td>  
    </tr>
  </table>
  <?php
}

else
{
  ?>
  <table class="borderNone marginAuto width750  backgroundBlack">
    <tr>
      <th class="equipeII width50"></th>
      <th class="equipeII width200">Réserve <br>  honneur</th>
      <th class="equipeII width200">Réserve  <br> promotion honneur</th>
    </tr>
    <tr>
      <td class="equipes "> <?php saison2(270, $comite, $bdd); ?></td>
      <td class="equipes width200"> <?php palmares2($comite, 270, $bdd); ?></td>
      <td class="equipes width200"> <?php palmares2($comite, 9180, $bdd); ?></td>
    </tr>
  </table>
<?php
}
?>