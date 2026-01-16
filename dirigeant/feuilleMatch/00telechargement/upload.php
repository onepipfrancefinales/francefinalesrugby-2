<?php

//$dossier = '127.0.0.1/dirigeant/feuilleMatch/telechargement/upload/';
$dossier = 'c:/program Files/EasyPHP-Devserver-17/eds-www/dirigeant/feuilleMatch/telechargement/';
//$dossier = 'c:/upload/';
$fichier = basename($_FILES['avatar']['name']);



echo "chemin:".$_FILES['avatar']['tmp_name'];echo "<br/>";
echo "fichier:".$fichier;echo "<br/>";

//**********   Recherche du  caractère de séparation  **********************

$fichier = fopen($fichier, 'r+');

$fichier = fgets($fichier, 4096); 

if (preg_match('#;#', $fichier))
{
echo "Caractere de separation reconnu (;) ";
$caratereSeparation =";";

} 
elseif (preg_match('#,#', $fichier))
{
echo "Caractere de separation reconnu (,) ";
$caratereSeparation =",";
}
else
echo "aucun caractère de séparation reconnu";

//************************************

echo "<br/>";








$taille_maxi = 100000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.doc', '.ods', '.csv', '.txt');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
//Début des vérifications de sécurité...


if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
    
	
	
	 if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectu&eacute; avec succ&egrave;s !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}
?>


<?php 


//if (isset ($_GET['equipe'])) $club = $_GET['equipe']; else $club = "";
//if (isset ($_GET['comite'])) $comiteLigue = $_GET['comite']; else $comiteLigue = "";
//if (isset ($_GET['fonction'])) $fonction = $_GET['fonction']; else $fonction = "";
//if (isset ($_GET['connect'])) $connect = $_GET['connect']; else $connect = "";



//echo "<br / >";
//echo "club : ".$club;echo "<br / >";
//echo "comiteLigue : ".$comiteLigue;echo "<br / >";
//echo "fonction : ".$fonction;echo "<br / >";
//echo "<br / >";


//$ligueComite ="ab";
//$club =2029076;

//constantes

$naissance = 1;
//$type = "JOU";
$prem_ligne =" ";
$comite= 1;

//$fonction =1;
$id_perso = 1;



if ($fonction == 1 )
	{
	$id = (substr($club,2,5)*1000) + $id_perso;
	$type = "JOU";
	}
else
	{
	$id = (substr($club,2,5)*1000) + 500 + $id_perso;
	$type = "DIR";
	}

//echo $id;
echo "<br/>";
 $table = "php".$comiteLigue."_joueurs";
 echo "<br/>";
 
 echo "table : ".$table."<br/>";
mysql_connect("127.0.0.1", "root", ""); 
mysql_select_db("onepip-france-db3"); 


//Vidage de la table

//$query="TRUNCATE $table";

$query="DELETE FROM $table
		WHERE id_perso BETWEEN 1 AND 100 and fonction='1'";
$result= MYSQL_QUERY($query); 

echo $fichier;

	$fp = fopen("$fichier", "r"); 


   
    while (!feof($fp)) 
    { 
       $ligne = fgets($fp,4096); 

       
       $liste = explode( $caratereSeparation,$ligne);  
    
      
       $nom = $liste[0]; 
       $prenom = $liste[1]; 
	   $licence = $liste[2]; 
	   echo "<br/>";
	   echo "nom : ".$nom; echo "<br/>";
	   echo "prenom : ".$prenom; echo "<br/>";
	   echo "licence : ".$licence; echo "<br/>";
	   echo "id : ".$id; echo "<br/>";
	   echo "<br/>";
	echo $table;
	 
       $query = "INSERT INTO $table VALUES('$nom','$nom','$prenom','$naissance', '$licence','$type','$prem_ligne','$comite','$club','$fonction','$id_perso','$id')"; 
       $result= mysql_query($query); 
	   
	   $id = $id +1;
	   $id_perso = $id_perso +1;
	  } 
     
 
       
   
     fclose($fp); 
     MYSQL_CLOSE();  



?>
