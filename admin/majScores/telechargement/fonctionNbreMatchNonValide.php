 

          <?php
//require ('../../connect.connection2.php');
mysql_connect("127.0.0.1", "root", ""); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&eacute;lection de la base onepip 
//mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion à MySQL
//mysql_select_db("onepip-france-db2"); // S&eacute;lection de la base onepip

		  
		  
		  
$phpmatchs="php".$comite."_matchs";
$phpjournees="php".$comite."_journees";
$phpclubs ="php".$comite."_clubs";


         
$query =  	SELECT COUNT
			FROM phpfed2_matchs
			WHERE buts_dom is NULL and buts_ext is nul 
									and date_reelle < date ("Y-m-d H:i:s") 
									and id_journee = $poule

		 
		 
		 
		 /*							
						
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom,
					$phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE $phpjournees.id_champ <'180' and 
					$phpclubs.id=$phpmatchs.id_equipe_dom and 
					$phpmatchs.id_journee= $phpjournees.id and
				  	$phpmatchs.date_reelle < '$ma_date' and 
				  	$phpclubs.id=$phpmatchs.id_equipe_dom and 
				  	$phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL
				  	
				  
			ORDER BY $phpmatchs.date_reelle";
							$result = 	mysql_query($query);							
							
							
  */      
 		
		 while($row = mysql_fetch_array($result))
         {
		 
			//		 $val1=substr($row[0],5,1);
			//		 $val2=substr($row[1],5,1);
			//	 if ($val1 + $val2 < 4   )
			//		{    
					echo $row[7]."<br>";
			//		}		
	  		}
	echo "<br><br>";

      
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom,
					$phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE $phpjournees.id_champ < '170' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and
				  $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom 
				  and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL
				  
			ORDER BY $phpmatchs.date_reelle"; 
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 
				//	 $val1=substr($row[0],5,1);
				//	 $val2=substr($row[1],5,1);
				// if ($val1 + $val2 < 4   )
				//	{   
					 
					$journee="$row[2]"-("$row[7]"*100); echo $journee ."me journ&eacute;e :<br>";
				//	}
			}
	echo "<br><br>";
?>
 
