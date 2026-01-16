<?php 	
	if ($comite=="fem" OR $comite=="bal" OR $comite=="teu" OR $comite=="phl" )
				require ("../connect1/connection4.php");	
	elseif ($comite=="pl" OR $comite=="mpy" OR $comite=="pr" OR $comite=="br")
				require ("../connect1/connection3.php");	
	else
				require ("../connect1/connection2.php");
				
					$reponse = $bdd->query("	SELECT id, nom
								FROM $phpcomite_divisions
								WHERE id < 230  
								ORDER BY id");

?>
<table width="100%" align="center">
  <tr> 
    <td width="33%"> 	
        <ul class="menu-demo2" >
          
        <li><a href="#"><b> <font color="#FFFFFF">Séniors I</font></b></a> 
          <ul>
            <font size="2"> 
            <?php					 
									while ($row = $reponse->fetch() )
												{                             
												$id=$row[0];
												$nom=$row[1];
?>
            </font> 
            <li> <font size="2"><a href="171.php?champ=<?php echo $id; ?>&comite=<?php echo $comite; ?>"> 
              <?php echo $nom; ?>
              </a> </font></li>
            <font size="2"> 
            <?php	
												}
?>
            </font> 
          </ul>
			</li>
        </ul>
    </td>
   
   <td   width="33%" height="28"> 
	  <ul class="menu-demo2">
          
        <li><a href="#"><b><font color="#FFFFFF">Séniors II</font></b></a> 
          <ul>
				<li><a href="171.php?comite=idf&champ=271">Rés P1</a></li>
				<li><a href="171.php?comite=idf&champ=272">Rés P2</a></li>
				<li><a href="171.php?comite=idf&champ=9181">PH P1</a></li>
				<li><a href="171.php?comite=idf&champ=9182">PH P2</a></li>
							 
			  </ul>
          </li>
        </ul>
    </td>
    
	<td   width="33%" height="28" valign="top"> 
      <ul class="menu-demo2">
         
        <li><a href="#"><b><font color="#FFFFFF">- Autres </font>-</b></a> 
          <ul>
            <li><a href="171.php?comite=pro&champ=110">Top 14</a></li>
            <li><a href="171.php?comite=pro&champ=120">Pro D2</a></li>
            <li><a href="171.php?comite=pro&champ=1411">Féd 
              1</a></li>
		    <li><a href="171.php?comite=pro&champ=151">Féd 
              2</a></li>
		    <li><a href="171.php?comite=pro&champ=161">Féd 
              3</a></li>
		    <li><font color="#000000">  - </font></li>
            <li><a href="sommaire.php">Autres<br />
              ligues</a></li>
            <li><font color="#000000">  -</font> </li>
            <li><a href="171.php?comite=fem&champ=280">Top 8</a></li>
            <li><a href="171.php?comite=fem&champ=285">Elite 2</a></li>
            <li><a href="171.php?comite=fem&champ=291">Féd </a> </li>
          </ul>
        </li>
      </ul>
    </td>
  </tr>
</table>
