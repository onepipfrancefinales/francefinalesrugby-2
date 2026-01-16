

<div class="titreBandeau"> 
  <?php echo ucfirst(strtolower($organisation)).' '.$ligueNom.' '.$annee ;?>
</div>  
  
  <h2>
  <?php 
 
  require ("../../phasesfinalesterr/fonctionspfterrESDL.php");
  affichage($division, $annee);?>
  </h2>

