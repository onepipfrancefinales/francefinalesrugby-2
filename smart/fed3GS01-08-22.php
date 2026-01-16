<?php

// echo $comite;
	// echo "on continue1";
	// fed 3 poule 8 à 15 ------*/
   if ($comite == "fed3NE")
   {
	// echo "on continue2";
	   $champ = 161;
	for ($i=$champ; $i <= $champ+7; $i++)
	{
	// echo "test : ".$i;		
	 $comite="fed3GS";
	// echo "poule : ".$poule; echo "champ : ".$champ; 
 
	 ?>
	 <table width="90%" border="1" align="center">
	  <tr> 
       <td class="titre"><?php 
	   $prePoule= substr($i,2,1);
	  // echo $prePoule;
	   $NumPoule = $prePoule+7;
	   if ( $champ > 169 and $champ < 240) echo $poule; else echo "Poule ".$NumPoule;?></td>
      </tr>
	 </table>
	 <br />
	  <div align="center">
	   <?php AffichageLogos($i, "phpfed3GS", true, $bdd);?>
	  </div>
		<?php	
		require "../Phpleague/phpfed3GS/consult/fonctions_matchs.php";		
	   aff_journee($i, $bdd);
	   clmnt($i, true, $bdd);?>
	  
	  <table width="90%" border="0" align="center">
	    <tr border="0"> 
         <td border="0" align="center" bgcolor="#FFFF00" ><a href="calendrier.php?champ=<?php echo $champ;?>&comite=<?php echo substr($comite,3,8);?>" target="_blank"><font color="#FF0000"><font size="4"><b>-- 
		     Calendrier complet --</b></font></font></a></td>
       </tr>
	 </table>
	  
	  <?php aff_journeeSupp($i,  $bdd);
    
	include("../pub/pub25.php"); 
	echo "<hr />"."<hr />";
    echo "<br />"; 
  }
 }