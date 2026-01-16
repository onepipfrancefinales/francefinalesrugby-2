<?php
$journee = $_GET['journee'];
$numeroJournee = substr("$journee", -2);
$maxJournee = $_GET['maxJournee'];

echo "journee : ".$journee;echo "<br />";
echo "max journee : ".$maxJournee;echo "<br />";
echo "numero journee : ".$numeroJournee;echo "<br />";

$journeeMax=substr("$journee",0,3)*100+ $maxJournee;
$journeeMin=substr("$journee",0,3)*100+ 3;

?>

<p class="lien"> <font face="Arial, Helvetica, sans-serif" size="3" color="#000000"> 
  <?php echo "JournÃ©es : "; ?>
  </font> 
  <?php 
  echo "<br/>  ";
  
  // affichage de la double fléche gauche
  if ($journeeMin < $journee)
  {
	?>
    <a href="saisie.php?journee=<?php echo $journee-3; ?>&maxJournee=<?php echo $maxJournee; ?>&codeEquipe=<?php echo $codeEquipe; ?>&comite=<?php echo $comite; ?>"><<</a>  </font>
    <font face="Arial, Helvetica, sans-serif" size="3" color="#FFFFFF"> -- </font> 
    <?php
  }
   
//affichage des journées (5 journées) 
for($i=$numeroJournee-2; $i<= $numeroJournee+2 ; $i++)
  {
	?>
    <a href="saisie.php?journee=<?php echo $numeroJournee; ?>&codeEquipe=<?php echo $codeEquipe; ?>&maxJournee=<?php echo $maxJournee; ?>&comite=<?php echo $comite; ?>"> 
    <?php echo $i; ?>
    </a> -- 
    <?php
  }

// affichage de la double fléche droite
if( $journee+1<=$journeeMax)
  {
    ?> 
    <a href="saisie.php?journee=<?php echo $journee+1; ?>&maxJournee=<?php echo $maxJournee; ?>&codeEquipe=<?php echo $codeEquipe; ?>&comite=<?php echo $comite; ?>">>></a> </font>
    <?php
  }
?>  
  
  </font> </p>

<hr />
