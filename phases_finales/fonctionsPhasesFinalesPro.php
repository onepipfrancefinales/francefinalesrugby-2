<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php

require '../../connect/connexion1.php';

//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>




<?php //E01

$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E01 
			FROM bdclubs, bdpf$annee 
			WHERE substr(bdclubs.id,-5)=bdpf$annee.E01 and bdpf$annee.id=$id "); 
					//$result = mysql_query($query) or die(mysql_error());
					while ($row = $reponse->fetch() )
						{ 
						$nom = $row[1];
						$sigle = $row[2];
						}
$nom20 = substr($nom,0,20);	
$clubA3201 = ($nom20.' '.$sigle);
?>
<?php //E02
$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E02 
			FROM bdclubs, bdpf$annee 
			WHERE substr(bdclubs.id,-5)=bdpf$annee.E02 and bdpf$annee.id=$id "); 
				 //$result = mysql_query($query) ;
					while ($row = $reponse->fetch() )
					{ 
					$nom = $row[1];
					$sigle = $row[2];
					}
$nom20 = substr($nom,0,20);		
$clubA3202 = ($nom20.' '.$sigle);
?>

<?php //E03
$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E03 
				FROM bdclubs, bdpf$annee 
				WHERE substr(bdclubs.id,-5)=bdpf$annee.E03 and bdpf$annee.id=$id"); 
					// $result = mysql_query($requete) ;
						while ($row = $reponse->fetch() )
						{ 
						$nom = $row[1];
						$sigle = $row[2];
						}
$nom20 = substr($nom,0,20);		
$clubA3203 = ($nom20.' '.$sigle);
?>

<?php //E04
$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E04 
			FROM bdclubs, bdpf$annee 
			WHERE substr(bdclubs.id,-5)=bdpf$annee.E04 and bdpf$annee.id=$id "); 
					 //$result = mysql_query($query) ;
						while ($row = $reponse->fetch() )
						{ 
						$nom = $row[1];
						$sigle = $row[2];
						}
$nom20 = substr($nom,0,20);		
$clubA3204 = ($nom20.' '.$sigle);
?>

<?php //E05
$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E05 
			FROM bdclubs, bdpf$annee 
			WHERE substr(bdclubs.id,-5)=bdpf$annee.E05 and bdpf$annee.id=$id "); 
					 //$result = mysql_query($query) ;
						while ($row = $reponse->fetch() )
						{ 
						$nom = $row[1];
						$sigle = $row[2];
						}
$nom20 = substr($nom,0,20);		
$clubA3205 = ($nom20.' '.$sigle);
?>

<?php //E06
$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E06 
			FROM bdclubs, bdpf$annee 
			WHERE substr(bdclubs.id,-5)=bdpf$annee.E06 and bdpf$annee.id=$id "); 
					 //$result = mysql_query($query) ;
						while ($row = $reponse->fetch() )
						{ 
						$nom = $row[1];
						$sigle = $row[2];
						}
$nom20 = substr($nom,0,20);		
$clubA3206 = ($nom20.' '.$sigle);
?>

<?php //E07
$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E07 
			FROM bdclubs, bdpf$annee 
			WHERE substr(bdclubs.id,-5)=bdpf$annee.E07 and bdpf$annee.id=$id "); 
 				//$result = mysql_query($query) ;
					while ($row = $reponse->fetch() )
					{ 
					$nom = $row[1];
					$sigle = $row[2];
					}
$nom20 = substr($nom,0,20);		
$clubA3207 = ($nom20.' '.$sigle);
?>

<?php //E08
$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E08 
			FROM bdclubs, bdpf$annee 
			WHERE substr(bdclubs.id,-5)=bdpf$annee.E08 and bdpf$annee.id=$id "); 
				 //$result = mysql_query($query) ;
					while ($row = $reponse->fetch() )
					{ 
					$nom = $row[1];
					$sigle = $row[2];
					}
$nom20 = substr($nom,0,20);		
$clubA3208 = ($nom20.' '.$sigle);
?>


<?php 
if($id==110)
{
		$clubA2001=$clubA3201;
		$clubA2003=$clubA3202;
		$clubA4001=$clubA3203;
		$clubA4002=$clubA3206;
		$clubA4003=$clubA3204;
		$clubA4004=$clubA3205;
		?>

		<?php // Quarts----Demi------Finale-------
		$reponse = $bdd->query("	SELECT id, A4001, A4002, A4003, A4004, A2001, A2002, A2003, A2004, A1001, A1002 
					FROM bdpf$annee2 
					WHERE id=$id "); // Requête SQL
							//$result = mysql_query($query) ;
 							while ($row = $reponse->fetch() )
			{ 
			$A4001 = $row[1];
			$A4002 = $row[2];
			$A4003 = $row[3];
			$A4004 = $row[4];
				
			$A2001 = $row[5];
			$A2002 = $row[6];
			$A2003 = $row[7];
			$A2004 = $row[8];
	
			$A1001 = $row[9];
			$A1002 = $row[10];
	
	
			}
		?>

		<?php	
	//	mysql_close(); // Déconnexion de MySQL
		?>

		<?php $clubA =" ";?>	 
	

		<?php //------Demi--------
       
  		if ($A4001+$A4002>0)  if ($A4001>$A4002)	$clubA2004= $clubA4001;	else	$clubA2004= $clubA4002;  else $clubA2002=$clubA;
 		if ($A4003+$A4004>0)  if ($A4003>$A4004)	$clubA2002= $clubA4003;	else	$clubA2002= $clubA4004;  else $clubA2004=$clubA;?>								  
								  
 		<?php	//------Finale--------							  
       			if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;?>
		<?php   if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;?>

		<?php //------Champion--------
       			 if ($A1001+$A1002>0)  if ($A1001>$A1002)	$clubA1000= $clubA1001;	else	$clubA1000= $clubA1002;  else $clubA1000=$clubA;

}
else	
{

		 
		$clubAchamp=$clubA3201;
		$clubA2001=$clubA3202;
		$clubA2002=$clubA3205;
		$clubA2003=$clubA3203;
		$clubA2004=$clubA3204;
		
		?>

		<?php // Quarts----Demi------Finale-------
		$reponse = $bdd->query("	SELECT id, A2001, A2002, A2003, A2004, A1001, A1002 
					FROM bdpf$annee2 
					WHERE id=$id "); // Requête SQL
						//$result = mysql_query($query) ;
 						while ($row = $reponse->fetch() )
							{ 
							$A2001 = $row[1];
							$A2002 = $row[2];
							$A2003 = $row[3];
							$A2004 = $row[4];
	
							$A1001 = $row[5];
							$A1002 = $row[6];
							}
		?>

		<?php	
		//mysql_close(); // Déconnexion de MySQL
		?>

		<?php $clubA =" ";?>	 
	

										  
								  
 		<?php	//------Finale--------							  
       			if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;?>
		<?php   if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;?>

		<?php //------Champion--------
       			 if ($A1001+$A1002>0)  if ($A1001>$A1002)	$clubA1000= $clubA1001;	else	$clubA1000= $clubA1002;  else $clubA1000=$clubA;

}  
?>								  