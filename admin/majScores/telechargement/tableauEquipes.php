<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">



<table width="1440" border="1">
  <!-- Ligne 1 : entete du tableau -->
  <tr bgcolor="#0099FF"> 
    
	<!-- colonne 1  -->
	<td width="603"> </td>
    
	
	<!-- colonne 2  -->
	<?php 
	  for ($i = 1; $i<19; $i++)
	     {
		 ?>
    <td width="704">
		<div align="center"><font color="#0099FF"> <font color="#333333">  
	  <?php
         $journeeJ = "J0".$i;
	 	 echo $journeeJ;
	     $php_equipesResultat = $ligue."_equipesResultat";
	     $php_clubs = $ligue."_clubs";
   		?>
        </font></font> </div>
    </td>
	<?php
	 }
		?>
    <!-- colonne 3  -->
	<td width="111"> 
      <div align="center">Totaux</div>
    </td>
    
  </tr>
</table>

<table width="1441" border="1">
  <!-- 1re ligne -->
  <?php
  for ($j=1 ; $j<11 ; $j++)
  {
  ?>
  <tr>
    <td width="593" height="22">
      <?php echo $j;?>
    </td>
    <!-- 1re colonne -->


<?php





 require ("../../../connect/connection2.php") ;

$reponse = "SELECT $php_clubs.nom, $php_equipesResultat.J04, $php_equipesResultat.id
			FROM $php_equipesResultat
			INNER JOIN $php_clubs ON $php_equipesResultat.id = $php_clubs.id
			WHERE id_champ = 171 ";
							$result = mysql_query($reponse) ;
							while ($row = mysql_fetch_array($result) )
										{ 
										$equipe = $row[0];
		 								$pointsBonus =$row[1];
										$idEquipe =$row[2];

										 ?>
										 
	
	
	
										 

    <td width="593" height="22"> 
      <?php echo $equipe;?>
    </td>
    <!-- 2me colonne -->
    <?php 
		  for ($i = 1; $i<19; $i++)
		  {
		  ?>
    <td width="712" height="22"> 
      <div align="center"> 
        <input type="text" name="A8002" value="<?php echo $pointsBonus ;?>" size="1">
      </div>
    </td>
    <?php
   		  }
		  ?>
    <!-- 3me colonne -->
    <td width="114" height="22"> 
      <div align="center"> 
        <?php 
	  
	  $reponse = "SELECT penalite
			FROM phpab_equipes
			WHERE id_champ = 171  AND id = $idEquipe";
							$result = mysql_query($reponse) ;
							while ($row = mysql_fetch_array($result) )
										{ 
										$TotalpointsBonus =$row[0];
										}
		?>
        <input type="text" name="A80022" value="<?php echo $TotalpointsBonus ;?>" size="1">
      </div>
    </td>
    <?php

}
?>
  </tr>
  <?php
  }
  ?>
</table>

 
</body>
</html>
