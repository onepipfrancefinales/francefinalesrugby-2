<?php 


			
	if ($comite=="fem" OR $comite=="bal" OR $comite=="teu" OR $comite=="phl" )
				require ("../connect/connection4.php");	
	elseif ($comite=="pl" OR $comite=="mpy" OR $comite=="pr" OR $comite=="br")
				require ("../connect/connection3.php");	
	else
				require ("../connect/connection2.php");
				
					$query = "	SELECT id, nom
								FROM $phpcomite_divisions
								WHERE id < 9300  
								ORDER BY id";

?>
<table width="100%" align="center">
  <tr> 
    <td width="33%"> 	
        <ul class="menu-demo2" >
          <li><a href="#"><b>Territoriales</b></a> 
			<ul> 					 
<?php					 
									$result = mysql_query($query) or die (mysql_error());
											  while($row = mysql_fetch_array($result))
												{                             
												$id=$row[0];
												$nom=$row[1];
?>			
								<li>
									<a href="171.php?champion=<?php echo $id; ?>&comite=<?php echo $comite; ?>"><?php echo $nom; ?></a>
								</li>
<?php	
												}
?>
				
				</ul>
			</li>
        </ul>
    </td>
   
   <td   width="33%" height="28"> 
	  <ul class="menu-demo2">
          <li><a href="#"><b>Fédérales </b></a> 
			  <ul>
				<li><a href="fed1/171.php?champion=141">Féd 1</a></li>
				<li><a href="fed2/171.php?champion=151">Féd 2</a></li>
				<li><a href="fed3NE/171.php?champion=161">Féd 3</a></li>
				<li><a href="fed1/171.php?champion=241">Nat B</a></li>
				<li><a href="fed2/171.php?champion=251">Féd B</a></li>
				<li><a href="fed3NE/171.php?champion=261">Excel B</a></li>
				<li><a href="fem/171.php?champion=280">Féminines<br /> Fédérale</a></li> 
				 
			  </ul>
          </li>
        </ul>
    </td>
    
	<td   width="33%" height="28" valign="top"> 
      <ul class="menu-demo2">
         <li><a href="#"><b>-  Autres  -</b></a> 
          <ul>
            <li><a href="pro/110.php">Top 14</a></li>
            <li><a href="pro/120.php">Pro D2</a></li>
            <li><font color="#000000">  - </font></li>
            <li><a href="sommaire.php">Autres<br />
              comités</a></li>
            <li><font color="#000000">  -</font> </li>
            <li><a href="fem/171.php?champion=280">Top 8</a></li>
            <li><a href="fem/171.php?champion=285">Elite 2</a></li>
            <li><a href="fem/171.php?champion=291">Féd 1</a> </li>
          </ul>
        </li>
      </ul>
    </td>
  </tr>
</table>
