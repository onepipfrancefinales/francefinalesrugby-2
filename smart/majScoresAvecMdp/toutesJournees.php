<?php
$journee = $_GET['journee'];
$numeroJournee = substr("$journee", -2);
$maxJournee=$_GET['maxJournee'];

$journeeMax=substr("$journee",0,6)*100 + $maxJournee;
$journeeMin=substr("$journee",0,6)*100 + 1;
/*
echo "<br/>";
echo "journee : ".$journee; echo "<br/>";
echo "max : ".$journeeMax; echo "<br/>";
echo "min : ".$journeeMin; echo "<br/>";
echo "<br/>";
echo "numeroJournee : ".$numeroJournee; echo "<br/>";
*/
?>

<p class="lien"> <font face="Arial, Helvetica, sans-serif" size="3" color="#000000"> 
  <?php echo "JournÃ©es : "; ?>
  </font> 
 <br/>  
 <?php
// affichage de la double fléche gauche

  if ($journeeMin+2 < $journee)
    {
	 ?>

    <a href="saisie.php?journee=<?php echo $journee-3; ?>&maxJournee=<?php echo $maxJournee; ?>&codeEquipe=<?php echo $codeEquipe; ?>&comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>"><<</a>  </font>
    <font face="Arial, Helvetica, sans-serif" size="3" color="#FFFFFF"> -- </font> 
    <?php
  }
   
//affichage des journées (5 journées) 
if ($numeroJournee>2)
{
for($i=$numeroJournee-2; $i<= $numeroJournee+2 ; $i++)
	{
	$journee2 = (substr($journee,0,6)*100)+$i;
	 
	 ?>
	
     <a href="saisie.php?journee=<?php echo $journee2; ?>&maxJournee=<?php echo $maxJournee; ?>&codeEquipe=<?php echo $codeEquipe; ?>&comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>"> 
     <?php echo $i; ?>
     </a> -- 
     <?php
	}
}
else
{
for($i=1; $i<= $numeroJournee+4 ; $i++)
	{
	$journee2 = (substr($journee,0,6)*100)+$i;
	 
	 ?>
	
     <a href="saisie.php?journee=<?php echo $journee2; ?>&maxJournee=<?php echo $maxJournee; ?>&codeEquipe=<?php echo $codeEquipe; ?>&comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>"> 
     <?php echo $i; ?>
     </a> -- 
     <?php
	}


	
}	

// affichage de la double fléche droite
if( $journee <=$journeeMax-3)
	{ ?> 
     <a href="saisie.php?journee=<?php echo $journee2+1; ?>&maxJournee=<?php echo $maxJournee; ?>&codeEquipe=<?php echo $codeEquipe; ?>&comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>">>></a> </font>
	 <?php
	}
?>  
</font> </p>
<hr />
