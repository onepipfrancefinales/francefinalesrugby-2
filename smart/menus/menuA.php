<?php 
/*
	if ($comite=="fem" OR $comite=="bal" OR $comite=="teu" OR $comite=="phl" )
				
	
				require ("../connect/connection3.php");	
	else
				require ("../connect/connection2.php");
				
					$reponse = $bdd->query("	SELECT id, nom
								FROM $phpcomite_divisions
								WHERE id < 9300  
								ORDER BY id");
*/
?>
<!--
<table width="100%" align="center">
  <tr> 
    <td width="33%"> 	
        <ul class="menu-demo2" >
          
        <li><a href="#"><b><font color="#FFFFFF">Territoriales</font></b></a> 
          <ul> 					 
							<?php	
/*							
									while ($row = $reponse->fetch() )
												{                             
												$id=$row[0];
												$nom=$row[1];


*/
?>			
								<li>
									<a href="171.php?champ=<?php// echo $id; ?>&comite=<?php// echo $comite; ?>"><?php// echo $nom; ?></a>
								</li>
							<?php	
							/*}*/
							?>
				
				</ul>
			</li>
        </ul>
    </td>
   
   <td   width="33%" height="28"> 
	  <ul class="menu-demo2">
          
        <li><a href="#"><b><font color="#FFFFFF">Fédérales</font> 
          </b></a> 
          <ul>
				<li><a href="171.php?comite=f1&champ=141">Féd 1</a></li>
				<li><a href="171.php?comite=fed2&champ=151">Féd 2</a></li>
				<li><a href="171.php?comite=fed3NE&champ=161">Féd 3</a></li>
				<li><a href="171.php?comite=f1&champ=241">Nat B</a></li>
				<li><a href="171.php?comite=fed2&champ=251">Féd B</a></li>
				<li><a href="171.php?comite=fed3NE&champ=261">Excel B</a></li>
				<li><a href="171.php?comite=fem&champ=291">Féminines<br /> Fédérale</a></li>  
			  </ul>
          </li>
        </ul>
    </td>
    
	<td   width="33%" height="28" valign="top"> 
      <ul class="menu-demo2">
         
        <li><a href="#"><font color="#FFFFFF"><b>- Autres -</b></font></a> 
          <ul>
            <li><a href="171.php?comite=pro&champ=110">Top 14</a></li>
            <li><a href="171.php?comite=pro&champ=120">Pro D2</a></li>
            <li><font color="#000000">  - </font></li>
            <li><a href="sommaire.php">Autres<br />ligues</a></li>
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
-->