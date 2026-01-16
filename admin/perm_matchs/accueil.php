<?php
if (isset($_GET['comite'] ))$comite=$_GET['comite'];else $comite = "ab";
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php include ("choixComite.php");?>
<p>

<br>

<?php 
 $phpcomite_divisions=$comite.''."_divisions";
 $phpcomite_matchs=$comite.''."_matchs";
 
 
 echo "choix de la Ligue ou de la competition à modifier"."<br />";
 echo "<br />";
 echo $phpcomite_divisions."<br />";
 echo $phpcomite_matchs;
 ?>   
 <br>
 <?php  
//***** choix de la base****

 if ( $comite=="phpf1"  OR   $comite=="phpfed2" OR  $comite=="phpfed3NE" OR  $comite=="phpfed3GS" or $comite=="phpfem")
				require ("../../connect/connection3.php") ; 
else
				require ("../../connect/connection2.php") ; 
 
 
 
  $reponse = mysql_query ("	SELECT nom, id
							FROM $phpcomite_divisions
							WHERE id<225  ");
								  while ($donnees = mysql_fetch_array($reponse) )
													{ 
													$id = $donnees['id'];
													$division = $donnees['nom'];
													echo "<br />";
													?>
				<a href="/admin/perm_matchs/permut1.php?comite=<?php echo $comite;?>&division=<?php echo $division; ?>&id=<?php echo $id; ?>" target="_top"><?php echo $division; ?></a>
													<?php			
											 		}
   
 

?>

</p>Retour page admin
</body>
</html>
