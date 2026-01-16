<?php

if (isset($champ2 )) $champ2=$champ2; else $champ2=0;
/*
echo $champ;
echo "--champ : ".$champ;echo "<br />";
echo "--champ2 : ".$champ2;echo "<br />";
echo $champ;echo "<br>";
*/
$php_equipes = "php".$bddComite."_equipes";
$php_clubs = "php".$bddComite."_clubs";

require ("../../connect/connexion6.php");


$requete = $bdd->query("SELECT COUNT(id)
						FROM $php_equipes		
						WHERE id_champ = '$champ' ");

$row = $requete->fetch();
$nbreEquipes = $row[0];	

//echo "nbreEquipes : ".$nbreEquipes;echo "<br>";

$listeEquipe = array();
//echo $champ;										
// récupération  du nom et du code FFR(url_logo)
$reponse = $bdd->query("	
				SELECT $php_clubs.nom, $php_clubs.url_logo
				FROM $php_equipes
				INNER JOIN $php_clubs ON $php_equipes.id_club = $php_clubs.id
				WHERE $php_equipes.id_champ = '$champ'
				 "); 

	while ($row = $reponse->fetch() )
		{ 
		 $listeEquipe[] = $row[0];
		 $listeEquipeCodeFFR[] = $row[1];
		}

for($i=0; $i< $nbreEquipes; $i++)
	{	

	//$listeEquipeCodeFFR[$i]= substr($listeEquipeCodeFFR[$i],-7,6).substr($listeEquipeCodeFFR[$i],1,5);
	 $listeNomsCodes = $listeEquipe[$i].substr($listeEquipeCodeFFR[$i],-5,5);
	// echo 	$listeNomsCodes."<br>";
	}


?>

 
<div align="center">
<form id="form" action="verifIdMdp.php?champ2=<?php echo $champ2; ?>" method="POST">
    <fieldset > <legend id="legend"> <font color="#000000">Choisir une équipe</font></legend> 
    <br />
 
 <!--  Login : -->
    <select id="formSp" name="login"   size="1">
        <option >
		  <font size="3" face="Arial, Helvetica, sans-serif"> Choix de l'équipe </font>
		</option>
    <?php
	for ($i=0; $i<$nbreEquipes ; $i++)			
		{	          
		$listeEquipeCodeFFR[$i]= substr($listeEquipeCodeFFR[$i],-7,6).substr($listeEquipeCodeFFR[$i],1,5);
		$listeNomsCodes = $listeEquipe[$i].substr($listeEquipeCodeFFR[$i],-5,5);	
		$listeEquipes=$listeEquipe[$i];							
								?>
        <option value="<?php echo $listeNomsCodes; ?>"> 
		<font size="3" face="Arial, Helvetica, sans-serif"> <?php echo $listeEquipes; ?></font>
		</option>
    <?php
		}
		
		?>
    </select>
		<br/>

							
							
      

<!--
   <input id="input" type="password" name="pwd" maxlength="6" required >
   -->
    <br />
    <br/>
    <input id="input" type="submit" value="Valider" maxlength="6" required />
    </fieldset> 
  </form>

   <br/>
</div>
