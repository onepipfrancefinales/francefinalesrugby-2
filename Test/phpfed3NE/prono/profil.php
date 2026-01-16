<?php
if ($action == "supp" and !$confirm=="oui")
 {
   echo "<table class=\"marginAuto\"><tr><td class=\"center colorWhite size3\">".PRONO_PROFIL_SUR." $user_pseudo ?<br />";
   echo "<a class=\"center colorWhite size3\" href=\"index.php?champLigue=$champLigue&page=profil&action=supp&confirm=oui\">".ADMIN_RENS_17."</a> - <a class=\"center colorWhite size3\" href=\"index.php?champLigue=$champLigue\">".ADMIN_RENS_18."</a></td></tr></table>";
 }
// suppression du compte
elseif ($action == "supp" and $confirm=="oui")
 {

$tabTables = array('phpau', 'phpfed3NE', 'phpca', 'phpidf', 'phppl', 'phpfed3NE', 'phppro');		
foreach ($tabTables as $table) {

$tablePronostics = $table."_pronostics";
$tableMembres = $table."_membres";
$tableClmntPronos = $table."_clmnt_pronos";



   $user_pseudo=addslashes($user_pseudo);
   $result=$idconnect->query("SELECT id FROM $tableMembres WHERE pseudo='$user_pseudo'");
  // $result=mysql_query($requete) or die ("probleme " .mysql_error());
   $row=mysqli_fetch_array($result);



   
   mysqli_query($idconnect, ("DELETE FROM $tablePronostics WHERE id_membre='$row[0]'"));
   mysqli_query($idconnect, ("DELETE FROM $tableMembres WHERE id='$row[0]'"));
   mysqli_query($idconnect, ("DELETE FROM $tableClmntPronos WHERE id_membre='$row[0]'"));
 
}
 ?>
   <META HTTP-EQUIV="refresh"; CONTENT="0; URL=logout.php">
   <?php
   echo PRONO_PROFIL_SUPP;
 }

else
 {

?>
<table width="90%" class="marginAuto">
<tr>
<td colspan="2">
<table cellSpacing="0" cellPadding="0" width="100%" align="center" border="1"  class="prono marginAuto">
<tr><td>

<?php
        
 	echo "<table align=\"center\" width=\"100%\">";
 	echo"<tr><td colspan=\"2\" class=\"blanc center bold\">".PRONO_PROFIL_TITRE." $user_pseudo</td></tr>";
 	ouverture ();
 
 $user_pseudo = addslashes($user_pseudo);

  if ($action == "1")
 	 {

    $result = $idconnect->query("
				 SELECT mot_de_passe 
				 FROM phpfed3NE_membres 
				 WHERE  pseudo='$user_pseudo'");
				 
          while ($row=mysqli_fetch_array($result))
			{
			 $mot_de_passe_correct=$row["0"];
			}

		  $ancien_mdp_crypt = md5($ancien_mdp);

          $date_naissance=$annee."-".$mois."-".$jour;
          if (!empty($mobile1) and !empty($mobile2) and !empty($mobile3) and !empty($mobile4) and !empty($mobile5))
           {
		    $mobile=$mobile1."-".$mobile2."-".$mobile3."-".$mobile4."-".$mobile5;
		   }

          if (empty ($ancien_mdp) and empty ($nouveau_mdp) and empty ($nouveau_mdp2))
           {

$tabTables = array('phpau', 'phpfed3NE', 'phpca', 'phpidf', 'phppl', 'phpfed3NE', 'phppro');		
foreach ($tabTables as $table) {


$tableMembres = $table."_membres";



       mysqli_query ($idconnect, ("UPDATE $tableMembres 
			 SET nom_site='$site', mail='$mail', nom='$nom', prenom='$prenom', adresse='$adresse', code_postal='$code_postal', ville='$ville', pays='$nouveau_mdp', date_naissance='$date_naissance', profession='$profession', mobile='$mobile' 
			 WHERE  pseudo='$user_pseudo'"));
}             
			 $message.="profil mis à jour";
           }
          elseif (empty ($ancien_mdp)) {$message.= PRONO_PROFIL_ANCIEN_MDP;}
          elseif (empty ($nouveau_mdp)) {$message.=PRONO_PROFIL_MDP_2_FOIS;}
          elseif (empty ($nouveau_mdp2)) {$message.=PRONO_PROFIL_MDP_2_FOIS_2;}
          elseif ($nouveau_mdp!=$nouveau_mdp2) {$message.=PRONO_PROFIL_MDP_DIFF;}
          elseif ($ancien_mdp_crypt!=$mot_de_passe_correct) {$message.=PRONO_PROFIL_MDP_ERREUR;}
          elseif (!empty ($ancien_mdp) and !empty ($nouveau_mdp) and !empty ($nouveau_mdp2))
           {
             
             print $row["0"];
             if ($ancien_mdp_crypt=$mot_de_passe_correct and $nouveau_mdp=$nouveau_mdp2)
             {
              $nouveau_mdp_crypt=md5($nouveau_mdp2);

              $tabTables = array('phpau', 'phpfed3NE', 'phpca', 'phpidf', 'phppl', 'phpfed3NE', 'phppro');		
foreach ($tabTables as $table) {


$tableMembres = $table."_membres";

              mysqli_query ($idconnect, ("UPDATE $tableMembres  SET nom_site='$site', mail='$mail', mot_de_passe='$nouveau_mdp_crypt', nom='$nom', prenom='$prenom', adresse='$adresse', code_postal='$code_postal', ville='$ville', pays='$nouveau_mdp', date_naissance='$date_naissance', profession='$profession', mobile='$mobile'  WHERE id_prono='$user_id' and pseudo='$user_pseudo'"));
             
}       
             
              $message.="profil mis à jour";
             }
             //elseif ($nouveau_mdp!=$nouveau_mdp2) {$message.="Nouveaux mots de passe diff�rents";}
             
           }
         }
        echo "<tr><td><form action=\"\" method=\"post\" name=\"profil\" onsubmit=\"javascript:return VerifForm()\"><table><tr><td colspan=\"2\" align=\"center\"><div class=\"blanc\">$message</div></td></tr>";
 	
	 $result= $idconnect->query("
				SELECT pseudo, mot_de_passe, mail, nom_site, nom, prenom, adresse, code_postal, ville, pays, date_naissance, profession, mobile  
				FROM phpfed3NE_membres 
				WHERE pseudo='$user_pseudo' 
				 ");

        while ($row=mysqli_fetch_array($result))
       { 
         echo "<tr><td align=\"center\" width=\"50%\">\n";
         echo "<div class=\"blanc\">".PRONO_CLASSEMENT_PSEUDO." : </div></td><td><div class=\"blanc\">$row[pseudo]</div></td></tr>\n";
         echo "<tr><td class=\"blanc center\">".PRONO_PROFIL_ANCIEN_MDP_2." :</td><td><input type=\"password\" name=\"ancien_mdp\"></td></tr>\n";
         echo "<tr><td class=\"blanc center\">".PRONO_PROFIL_NOUVEAU_MDP." :</td><td><input type=\"password\" name=\"nouveau_mdp\"></td></tr>\n";
         echo "<tr><td class=\"blanc center\">".PRONO_PROFIL_NOUVEAU_MDP_2." :</td><td><input type=\"password\" name=\"nouveau_mdp2\"></td></tr>\n";
         echo "<tr><td class=\"blanc center\">".PRONO_PROFIL_MAIL." :</td><td ><input type=\"text\" name=\"mail\" value=\"$row[mail]\"></td></tr>\n";

         echo "<tr><td width=\"50%\" center=\"center\"><br /></td>\n";
         echo "<td></td></tr>";

//echo "<tr><td colspan=\"2\"  align=\"center\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" color=\"#ffffff\"><strong>Coordonn�es</strong></font></td></tr>";

// Nom
//echo "<tr><td width=\"50%\" align=\"right\"><font face=\"Verdana\" color=\"#ffffff\" size=\"1\">Nom :</font></td>";
//echo "<td><input type=\"text\" name=\"nom\" value=\"$row[nom]\" maxlength=\"50\"></td></tr>";

// Prénom
//echo "<tr><td width=\"50%\" align=\"right\"><font face=\"Verdana\" color=\"#ffffff\" size=\"1\">Pr�nom :</font></td>";
//echo "<td><input type=\"text\" name=\"prenom\" value=\"$row[prenom]\" maxlength=\"50\"></td></tr>";

// Adresse
//echo "<tr><td width=\"50%\" align=\"right\"><font face=\"Verdana\" color=\"#ffffff\" size=\"1\">Adresse :</font></td>";
//echo "<td><input type=\"text\" name=\"adresse\" value=\"$row[adresse]\" maxlength=\"100\" size=\"45\"></td></tr>";

// Code postal
//echo "<tr><td width=\"50%\" align=\"right\"><font face=\"Verdana\" color=\"#ffffff\" size=\"1\">Code postal :</font></td>";
//echo "<td><input type=\"text\" name=\"code_postal\" value=\"$row[code_postal]\" maxlength=\"5\" size=\"5\"></td></tr>";

// Ville
//echo "<tr><td width=\"50%\" align=\"right\"><font face=\"Verdana\" color=\"#ffffff\" size=\"1\">Ville :</font></td>";
//echo "<td><input type=\"text\" name=\"ville\" value=\"$row[ville]\" maxlength=\"200\"></td></tr>";

// Pays
//echo "<tr><td width=\"50%\" align=\"right\"><font face=\"Verdana\" color=\"#ffffff\" size=\"1\">Pays :</font></td>";
//echo "<td><input type=\"text\" name=\"pays\" value=\"$row[pays]\" maxlength=\"200\"></td></tr>";

// Date de naissance
//$elementsdate=explode("-",$row['date_naissance']);
//$jour=$elementsdate[2];
//$mois= $elementsdate[1];
//$annee=$elementsdate[0];
/*
echo "<tr><td width=\"50%\" align=\"right\"><font face=\"Verdana\" color=\"#ffffff\" size=\"1\">Date de naissance :</font></td>";
echo "<td>";
echo "<select size=\"1\" name=\"jour\"><option value=\"\"></option>";
for($i=1;$i<32;$i++)
{
if ($i==$jour) echo "<option value=\"$i\" selected>$i</option>";
else echo "<option value=\"$i\">$i</option>";
}
echo "</select> ";
echo "<select size=\"1\" name=\"mois\"><option value=\"\"></option>";
for($i=1;$i<13;$i++)
{
if ($i==$mois) echo "<option value=\"$i\" selected>$i</option>";
else echo "<option value=\"$i\">$i</option>";
}
echo "</select> ";

echo "<select size=\"1\" name=\"annee\"><option value=\"\"></option>";
for($i=2000;$i>1923;$i--)
{
if ($i==$annee) echo "<option value=\"$i\" selected>$i</option>";
else echo "<option value=\"$i\">$i</option>";
}
echo "</select>";

echo "</td></tr>";
*/
// Profession
//echo "<tr><td width=\"50%\" align=\"right\"><font face=\"Verdana\" color=\"#ffffff\" size=\"1\">Profession :</font></td>";
//echo "<td><input type=\"text\" name=\"profession\" value=\"$row[profession]\" maxlength=\"200\"></td></tr>";

// N° Mobile
//$elementsmobile=explode("-",$row[mobile]);
//$mobile1=$elementsmobile[0];
//$mobile2=$elementsmobile[1];
//$mobile3=$elementsmobile[2];
//$mobile4=$elementsmobile[3];
//$mobile5=$elementsmobile[4];
/*
echo "<tr><td width=\"50%\" align=\"right\"><font face=\"Verdana\" color=\"#ffffff\" size=\"1\">N� de mobile :</font></td>";
echo "<td><input type=\"text\" name=\"mobile1\" value=\"$mobile1\" maxlength=\"2\" size=\"2\">
<input type=\"text\" name=\"mobile2\" value=\"$mobile2\" maxlength=\"2\" size=\"2\">
<input type=\"text\" name=\"mobile3\" value=\"$mobile3\" maxlength=\"2\" size=\"2\">
<input type=\"text\" name=\"mobile4\" value=\"$mobile4\" maxlength=\"2\" size=\"2\">
<input type=\"text\" name=\"mobile5\" value=\"$mobile5\" maxlength=\"2\" size=\"2\">
</td></tr>";
   */      
         echo "<tr bgcolor=\"#FFFFFF\"><td colspan=\"2\" align=\"center\">\n";
         echo "<input type=\"hidden\" name=\"page\" value=\"profil\">\n";
         echo "<input type=\"hidden\" name=\"action\" value=\"1\">\n";
         echo "<a href=\"index.php?page=profil&action=supp&champLigue=$champLigue\"><font face=\"Verdana\" color=\"#000000\" size=\"1\">>> ".PRONO_PROFIL_SUPP_2." <<</font></a></td></tr>\n";
         echo "<tr><td colspan=\"2\" align=\"center\"><br /><input type=\"submit\" value=".ENVOI."></td></tr></table></form></td></tr></table>\n";
      echo "</table>";
 	 echo "</td></tr></table>"; 
 	 }
       }
 	 
?>
