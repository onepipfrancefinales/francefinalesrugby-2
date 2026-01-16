

<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
mysql_select_db("onepip-france-db2"); // S�lection de la base onepip


mysql_query("	LOAD DATA LOCAL INFILE '001.csv'
				INTO TABLE phpcbl_matchs
				FIELDS TERMINATED BY ',' 
				LINES TERMINATED BY '\r\n';")
		
		
?>
