<?php
$nid = $_GET['nid'];
echo $nid;
echo $nid;echo $nid;
?> 
  
 <?php
require ("connect.php") ;
 ?> 
 <?php
  //récupération des valeurs des champs:
$president = $_POST["president"];
$secretariat = $_POST["secretariat"];
$contact = $_POST["contact"];
$siege = $_POST["siege"];

  //récupération de l'identifiant de la personne:
  $nid         = $_POST["nid"] ;
 echo $nid;

 
  
 
  //création de la requête SQL:


  
  
  $sql = "UPDATE infosclub
            SET siege='$siege',
			    president='$president',
				secretaire='$secretaire',
				contact='$contact'
				
							
		           WHERE id = '$nid' " ;
 
 //exécution de la requête SQL:
 $requete = mysql_query ($sql);
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("La modification à été correctement effectuée") ;
	

  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
<a href="modif1_quart.php">Retour mise à jour</a> </html>

<?php echo $nid;?>

<?php echo $president;?>
<?php echo $secretaire;?>
<?php echo $contact;?>