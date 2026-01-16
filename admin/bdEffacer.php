
<?php
$id=$_GET['id'];
$comite=$_GET['comite'];
echo $comite;
echo "<br />";

echo $id;
?>

<?php

//include ("../../connection5.php");
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
mysql_select_db("onepip-france_db5"); // S�lection de la base onepip
?>
<?php
$query = "	SELECT id, nom, mdp, prenom, 	comite1, division1, type1, taille1,
											comite2, division2, type2, taille2,
											comite3, division3, type3, taille3,
											comite4, division4, type4, taille4,
											comite5, division5, type5, taille5
			FROM personnel
			WHERE id ='$id'";
			
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
					{ 
					$id			= $row[0];	
					$nom		= $row[1];
					$mdp		= $row[2];
					$prenom		= $row[3];
					
					$comite1	= $row[4];
					$division1	= $row[5];
					$type1		= $row[6];
					$taille1	= $row[7];
					
					$comite2	= $row[8];
					$division2	= $row[9];
					$type2		= $row[10];
					$taille2	= $row[11];
					
					$comite3	= $row[12];
					$division3	= $row[13];	
					$type3		= $row[14];
					$taille3	= $row[15];
					
					$comite4    = $row[16];
					$division4	= $row[17];
					$type4		= $row[18];
					$taille4	= $row[19];
					
					$comite5	= $row[20];
					$division5	= $row[21];
					$type5		= $row[22];
					$taille5	= $row[23];
					
					}
					
	echo $id.' '.$nom  .' '.$mdp  .' '.$prenom  .' '.$comite1  .' '.$division1.' '.$type1.' '.$taille1
												.' '.$comite2  .' '.$division2.' '.$type2.' '.$taille2
												.' '.$comite3  .' '.$division3.' '.$type3.' '.$taille3
												.' '.$comite4  .' '.$division4.' '.$type4.' '.$taille4
												.' '.$comite5  .' '.$division5.' '.$type5.' '.$taille5;				
?>
<br />
<?php $comite=$_GET['comite'];
 echo $comite;    
if ($comite == "comite1")
	{
	$comite1	="NULL";
	$division1	="NULL"; 
	$type1		="NULL";
	$taille1	="NULL";
	
	}
elseif ($comite == "comite2")	
	{
	$comite2	="NULL";
	$division2	="NULL"; 
	$type2		="NULL";
	$taille2	="NULL";
	}
elseif ($comite == "comite3")	
	{
	$comite3	="NULL";
	$division3	="NULL"; 
	$type3		="NULL";
	$taille3	="NULL";
	}
elseif ($comite == "comite4")	
	{
	$comite4	="NULL";
	$division4	="NULL"; 
	$type4		="NULL";
	$taille4	="NULL";
	}
	
elseif ($comite == "comite5")	
	{
	$comite5	="NULL";
	$division5	="NULL"; 
	$type5		="NULL";
	$taille5	="NULL";
	}
	
	?>
	<br />
	<?php
echo $id.' '.$nom  .' '.$mdp  .' '.$prenom  .' '.$comite1  .' '.$division1.' '.$type1.' '.$taille1
											.' '.$comite2  .' '.$division2.' '.$type2.' '.$taille2
											.' '.$comite3  .' '.$division3.' '.$type3.' '.$taille3
											.' '.$comite4  .' '.$division4.' '.$type4.' '.$taille4
											.' '.$comite5  .' '.$division5.' '.$type5.' '.$taille5;	



 $sql = "	UPDATE personnel
 			SET id='$id',nom='$nom',mdp='$mdp',prenom='$prenom',comite1='$comite1' , division1='$division1' , type1='$type1' , taille1='$taille1',
																comite2='$comite2' , division2='$division2' , type2='$type2' , taille2='$taille2',
																comite3='$comite3' , division3='$division3' , type3='$type3' , taille3='$taille3',
																comite4='$comite4' , division4='$division4' , type4='$type4' , taille4='$taille4',
																comite5='$comite5' , division5='$division5' , type5='$type5' , taille5='$taille5'
			WHERE id='$id'";	
		
		


$requete = mysql_query( $sql )   ;

 header ('location: http://francefinalesrugby.franceserv.com/personnalisation/admin/pageChoix.php');
  ?>