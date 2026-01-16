<?php
function affiche_points ($user_id, $gr_champ, $idconnect)
{

    /*
  $result=$idconnect->query("SELECT points 
						                 FROM phpab_clmnt_pronos, phpab_membres 
						                 WHERE phpab_membres.id=phpab_clmnt_pronos.id_membre 
						                 AND phpab_membres.id_prono='$user_id' 
                             AND type='general' 
						                 AND id_champ='$gr_champ'");

*/
 $result=$idconnect->query("SELECT points, participation 
						                 FROM phpab_clmnt_pronos, phpab_membres 
						                 WHERE phpab_membres.id = phpab_clmnt_pronos.id_membre 
						                 AND phpab_membres.id_prono='$user_id' 
                          
						                 AND id_champ='$gr_champ'");

  if (mysqli_num_rows($result)=="0") {$points=0;}
  while ($row=mysqli_fetch_array($result))
  {
    $points=$row[0];
    $participation=$row[1];
  }
  echo $points + $participation;

}

function affiche_clmnt_general ($user_id, $gr_champ, $idconnect)
{
 $result=$idconnect->query(" SELECT id_prono 
					            		   FROM phpab_clmnt_pronos, phpab_membres 
							               WHERE phpab_membres.id = phpab_clmnt_pronos.id_membre 
							               AND id_champ='$gr_champ' 
							               AND type='general'  
							               ORDER by points desc, participation desc, phpab_membres.pseudo");
 
  $i = "1";
  while ($row=mysqli_fetch_array($result))
  {
    if ($row[0]==$user_id){$class=$i;}
    $i++;
  }
   $clmnt=PRONO_CLASSEMENT_NON_CLASSE;
 if (isset($class))
  {
  if ($class=="1"){echo $class; echo PRONO_CLASSEMENT_PREMIER;}
  elseif ($class=="2"){echo $class; echo PRONO_CLASSEMENT_SECOND;}
  elseif ($class=="3"){print $class; echo PRONO_CLASSEMENT_TROIS;}
  else {print $class; echo PRONO_CLASSEMENT_AUTRES;}
  }
  if (!isset($class)) echo $clmnt;
}

function affiche_clmnt_mensuel_en_cours ($user_id, $gr_champ, $idconnect)
{
  $result=$idconnect->query("SELECT id_prono
          FROM phpab_clmnt_pronos, phpab_membres
          WHERE phpab_membres.id=phpab_clmnt_pronos.id_membre 
		      AND id_champ='$gr_champ' AND type='mensuel_en_cours' 
		      AND id_champ='$gr_champ' 
		      ORDER by points desc, participation desc, phpab_membres.pseudo");
  //$result=mysql_query($query) or die (mysql_error());
  $i = "1";
  while ($row=mysqli_fetch_array($result))
  { 
    if ($row[0]==$user_id){$class=$i;}
    $i++;
  }

  if (!isset($class)) {echo PRONO_CLASSEMENT_NON_CLASSE;}
  else
  {
  if ($class=="1"){print $class; echo PRONO_CLASSEMENT_PREMIER;}
  elseif ($class=="2"){print $class; echo PRONO_CLASSEMENT_SECOND;}
  elseif ($class=="3"){print $class; echo PRONO_CLASSEMENT_TROIS;}
  else {print $class; echo PRONO_CLASSEMENT_AUTRES;}
  }

}

function affiche_clmnt_mensuel_30_jours ($user_id, $gr_champ, $idconnect)
{
  $result=$idconnect->query("SELECT id_prono 
                             FROM phpab_clmnt_pronos, phpab_membres 
                             WHERE phpab_membres.id=phpab_clmnt_pronos.id_membre 
                             AND id_champ='$gr_champ' 
                             AND id_champ='$gr_champ' 
                             AND type='mensuel_30_jours' 
                             ORDER by points desc, participation desc, phpab_membres.pseudo");
 // $result=mysql_query($query) or die (mysql_error());
  $i = "1";
  while ($row=mysqli_fetch_array($result))
  { if ($row[0]==$user_id){$class=$i;}
    $i++;
  }
 if (!isset($class)) {echo PRONO_CLASSEMENT_NON_CLASSE;}
 else
  {
  if ($class=="1"){print $class; echo PRONO_CLASSEMENT_PREMIER;}
  elseif ($class=="2"){print $class; echo PRONO_CLASSEMENT_SECOND;}
  elseif ($class=="3"){print $class; echo PRONO_CLASSEMENT_TROIS;}
  else {print $class; echo PRONO_CLASSEMENT_AUTRES;}
  }

}

function affiche_clmnt_mensuel_hebdo ($user_id, $gr_champ, $idconnect)
{
  $result=$idconnect->query("SELECT id_prono 
							               FROM phpab_clmnt_pronos, phpab_membres 
                             WHERE phpab_membres.id=phpab_clmnt_pronos.id_membre 
                             AND id_champ='$gr_champ' 
                             AND type='hebdo' 
                             AND id_champ='$gr_champ' 
                             ORDER by points desc, participation desc, phpab_membres.pseudo");
 
  $i = "1";
  while ($row=mysqli_fetch_array($result))
  { if ($row[0]==$user_id){$class=$i;}
    $i++;
  }
 if (!isset($class)) {$clmnt=PRONO_CLASSEMENT_NON_CLASSE;}
 else
  {
  if ($class=="1"){print $class; echo PRONO_CLASSEMENT_PREMIER;}
  elseif ($class=="2"){print $class; echo PRONO_CLASSEMENT_SECOND;}
  elseif ($class=="3"){print $class; echo PRONO_CLASSEMENT_TROIS;}
  else {print $class; echo PRONO_CLASSEMENT_AUTRES;}
  }
}

function login_form()
{
 echo"<form action=login.php method='post'>
   <table border='0' class='univert' cellspacing='0' align='center' width='80%'>
   <tr>
   <td class='univert' align='center'>Veuillez entrer votre nom d'utilisateur et votre mot de passe pour vous connecter<br /><br />
   </td>
   </tr>
   <tr>
  <td class='univert' align='center'>
   <input type='text' name='user'>
   </td>
   </tr>
   <tr>
  <td class='univert' align='center'>
   <input type='password' name='password'>
   </td>
   <tr><td align='center' class='univert'>Se connecter automatiquement � chaque visite: <input type='checkbox' class='checkbox' name='autoidentification' value='1'></td></tr>
   </tr>
   <tr><td colspan='2' class='univert' align='center'><input type='submit' name='submit' value='Connexion' >
   <br />
   <a href='perdu_mdp.php'>J'ai oubli� mon mot de passe</a><br />
   <a href='inscription.php'>Inscription</a><br />
   </td>
   </tr></form></table>";  }

function perdu_mot_de_passe()
{
  echo"<table border='0' class='univert' cellspacing='0' cellpadding='10' align='center' class='textfield2' width='300'>
  <tr>
  <td colspan='2' class='univert' align='center'>
  <div class=\"blanc\"><strong>Mot de passe perdu</strong></div><br /><br />
<div class=\"blanc\">Entrez votre pseudo,
<br />un nouveau mot de passe vous sera alors envoy� par mail.
</div>
<form action='perdu_mdp.php' method='get'>
<input class=textfield type=text name=pseudo size='35'>
<br />
<input type='submit' class='textfield' name='submit' value='ok'>
</form>
</td></tr></table>";
  
}

function classement_general ($gr_champ, $user_pseudo, $idconnect)
{  
$result=$idconnect->query("  SELECT pseudo, points, participation 
							               FROM phpab_clmnt_pronos
							               WHERE id_champ='$gr_champ' 
							               AND type = 'general'
							               ORDER by points desc, participation desc, pseudo LIMIT 0, 10");

$i=1;

       while ($row=mysqli_fetch_array($result))
       {
       echo "<div align=\"center\" class=\"blanc\">$i. ";
       
       if ($user_pseudo==$row[0]) echo "<b>$row[0]</b>";
       else  echo "$row[0]";

       echo "</div>";
       $i++;
       }
       
echo "<a href=\"index.php?page=classement&amp;type=general&amp;complet=1&amp;gr_champ=$gr_champ\" class=\"blanc\"><b>".PRONO_CLASSEMENT_SUITE."</b></a>";
}



//mise au format d'une date
function format_date_fr_red($date){

  list($annee,$mois,$jour) = explode("-",substr($date,0,10));

  return $jour."/".$mois;
}

//date en timestamps
function format_date_timestamp($date){

  list($annee,$mois,$jour) = explode("-",substr($date,0,10));
  list($heure,$minute,$seconde) = explode(":",substr($date, 11,7));
  $timestamp=mktime ($heure,$minute,$seconde,$mois,$jour,$annee);
  return $timestamp;
}


function grille_admin ($gr_champ, $idconnect)
{ 
$result=$idconnect->query("SELECT phpab_clubs.nom, CLEXT.nom, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_matchs.id, phpab_matchs.date_reelle, phpab_journees.numero
                           FROM phpab_clubs, phpab_clubs as CLEXT, phpab_matchs, phpab_journees, phpab_equipes, phpab_equipes as EXT, phpab_gr_championnats
                           WHERE phpab_clubs.id=phpab_equipes.id_club
                           AND CLEXT.id=EXT.id_club
                           AND phpab_equipes.id=phpab_matchs.id_equipe_dom
                           AND EXT.id=phpab_matchs.id_equipe_ext
                           AND phpab_matchs.id_journee=phpab_journees.id
                           AND phpab_journees.id_champ=phpab_gr_championnats.id_champ
                           AND phpab_gr_championnats.id='$gr_champ'
                           AND phpab_matchs.buts_dom is null
                           AND phpab_matchs.buts_ext is null
                           AND phpab_clubs.nom!='exempte'
                           AND CLEXT.nom!='exempte'
                           ORDER by phpab_matchs.date_reelle, phpab_clubs.nom
                           LIMIT 0, 10");

$i=0;

while ($row=mysqli_fetch_array($result) and $i < 10)
  {
$clubs_nom = stripslashes($row[0]);
$clubs_nom1 = stripslashes($row[1]);

$result2=$idconnect->query( "SELECT pronostic 
					                   FROM phpab_pronostics, phpab_gr_championnats 
							               WHERE phpab_pronostics.id_match='$row[4]' 
							               AND phpab_gr_championnats.id='$gr_champ' 
							               AND id_membre=id_master");

$nb_pronos= mysqli_num_rows($result2);

if ($nb_pronos == "0") {$prono="0";}
{
  while ($row2=mysqli_fetch_array($result2))
  {
    $prono=$row2["0"];
    if ($row2["0"] == ""){$prono="0";}
  }
}
  $date=format_date_fr_red($row[5]);



  echo "<tr><td><div class=\"blanc\">$row[6]</div></td>";
  echo "<td><div class=\"blanc\">$date</div></td>";
  echo "<td align=\"right\"><div class=\"blanc\">$clubs_nom</div></td>";

  echo "<td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" >";
  echo "<tr>";
  echo "<td width=\"45\" height=\"10\" valign=\"middle\" align=\"center\">";
  echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"50\"><tr><td>";

         if ($prono==1)
           {
           ?>
             <img src="affiche_selection.gif" border="no" alt=""> <img src="afficheN.gif" border="no" alt=""> <img src="affiche2.gif"  border="no" alt="">
           <?php
           }

         if ($prono=="N")
           {
           ?>
             <img src="affiche1.gif" border="no" alt=""> <img src="affiche_selection.gif" border="no" alt=""> <img src="affiche2.gif"  border="no" alt="">
           <?php
           }

         if ($prono=="2")
         {
         ?>
             <img src="affiche1.gif" border="no" alt=""> <img src="afficheN.gif" border="no" alt=""> <img src="affiche_selection.gif"  border="no" alt="">
         <?php
         }
  
         if ($prono=="0")
         {
          ?> 
             <img src="affiche1.gif" border="no" alt=""> <img src="afficheN.gif" border="no" alt=""> <img src="affiche2.gif"  border="no" alt="">
          <?php
         }
  echo "</td></tr></table>";

  echo "</td></tr></table></td>";

  echo "<td><div class=\"blanc\">$clubs_nom1</div></td>";

  $resultats2=$idconnect->query("SELECT tps_avant_prono FROM phpab_gr_championnats WHERE id='$gr_champ'");

   while ($row2=mysqli_fetch_array($resultats2))
   {
    $temps_avantmatch=$row2[0];
   }

  $date_match_timestamp=format_date_timestamp($row[5]);
  $date_actuelle=time();
  $ecart_secondes=$date_match_timestamp-$date_actuelle;
  $ecart_heures = floor($ecart_secondes / (60*60))-$temps_avantmatch;
  $ecart_minutes = floor($ecart_secondes / 60)-$temps_avantmatch*60;
  $ecart_jours = floor($ecart_secondes / (60*60*24)-$temps_avantmatch/60);
  $date=format_date_fr_red($row[5]);

  echo "<td align=\"center\">";
  if ($ecart_heures>48) echo "<div class=\"blanc\">$ecart_jours jours</div>";
  elseif ($ecart_heures>0) echo "<div class=\"blanc\">$ecart_heures h</div>";
  elseif ($ecart_heures == 0) echo "<div class=\"blanc\">$ecart_minutes min</div>";
  else {echo"<div class=\"blanc\">expir�</div>";}
  echo "</td>";
  echo "</tr>";
  $i++;
}

}

function nom_championnat($gr_champ, $idconnect) {

    $resultat=$idconnect->query("SELECT nom
								 FROM phpab_gr_championnats 
								 WHERE id = '$gr_champ' ");

   while ($row = mysqli_fetch_array($resultat)) {
    $gr_champ_nom = $row[0]; 
   
   }
echo $gr_champ_nom;
  
} 

function classement_type ($type)
{
if ($type=="") {echo "<br>".PRONO_CLASSEMENT_GENERAL_MAJ."<br>"."<br>";}
if ($type=="general") {echo "<br>"."<br>";}
if ($type=="mensuel_en_cours") {echo "<br>"."<br>";}
if ($type=="mensuel_30_jours") {echo "<br>".PRONO_CLASSEMENT_30."<br>"."<br>";}
if ($type=="hebdo") { echo "<br>"."<br>";}
//if ($type=="") {echo "<br>".PRONO_CLASSEMENT_GENERAL_MAJ."<br>"."<br>";}
//if ($type=="general") {echo "<br>".PRONO_CLASSEMENT_GENERAL_MAJ."<br>"."<br>";}
//if ($type=="mensuel_en_cours") {echo "<br>".PRONO_CLASSEMENT_MOIS."<br>"."<br>";}
//if ($type=="mensuel_30_jours") {echo "<br>".PRONO_CLASSEMENT_30."<br>"."<br>";}
//if ($type=="hebdo") { echo "<br>".PRONO_CLASSEMENT_HEBDO."<br>"."<br>";}
}

function classement ($gr_champ, $type, $user_pseudo, $idconnect)
{

if (!($type=="general" or $type=="mensuel_en_cours" or $type=="mensuel_30_jours" or $type=="hebdo")){$type="general";}

// classement mensuel_en_cours
if ($type=="mensuel_en_cours")
{
   mysqli_query($idconnect, ("DELETE FROM phpab_clmnt_pronos 
                              WHERE id_champ='$gr_champ' 
                              AND type='mensuel_en_cours'"));

   $result=$idconnect->query("SELECT id_membre, pseudo, SUM(points) as total, SUM(participation) as participations
                              FROM phpab_membres, phpab_pronostics, phpab_matchs, phpab_gr_championnats
                              WHERE phpab_pronostics.id_champ=phpab_gr_championnats.id
                              AND phpab_gr_championnats.id='$gr_champ'
                              AND id_membre=phpab_membres.id
                              AND phpab_matchs.id=id_match
                              AND MONTH (date_reelle) = MONTH (NOW())
                              AND YEAR (date_reelle) = YEAR (NOW())
                              GROUP by pseudo
                              ORDER by total, participations");

   while ($row=mysqli_fetch_array($result))
         {
         $row[1]=addslashes($row[1]);
         mysqli_query($idconnect, ("INSERT INTO phpab_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
                                    values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_en_cours')"));
         }
}          

// classement mensuel
if ($type=="mensuel_30_jours")
{
   mysqli_query($idconnect, ("DELETE FROM phpab_clmnt_pronos 
                              WHERE id_champ='$gr_champ' 
                              AND type='mensuel_30_jours'"));

   $result=$idconnect->query("SELECT id_membre, pseudo, SUM(points) as total, SUM(participation) as participations
                              FROM phpab_membres, phpab_pronostics, phpab_matchs, phpab_gr_championnats
                              WHERE phpab_pronostics.id_champ=phpab_gr_championnats.id
                              AND phpab_gr_championnats.id='$gr_champ'
                              AND id_membre=phpab_membres.id
                              AND phpab_matchs.id=id_match
                              AND DATE_ADD(date_reelle, INTERVAL 30 DAY) >= NOW()
                              GROUP by pseudo
                              ORDER by total, participations");


       while ($row=mysqli_fetch_array($result))
       {
       $row[1]=addslashes($row[1]);
       mysqli_query($idconnect, ("INSERT INTO phpab_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
                                  values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_30_jours')"));
       }
}
// classement hebdomadaire
if ($type=="hebdo")
{


   mysqli_query($idconnect, ("DELETE FROM phpab_clmnt_pronos 
                              WHERE id_champ='$gr_champ' 
                              AND type='hebdo'"));
/*
   $result=$idconnect->query("SELECT id_membre, pseudo, SUM(points) , SUM(participation) as participations
                              FROM phpab_membres, phpab_pronostics, phpab_matchs, phpab_gr_championnats
                              WHERE phpab_pronostics.id_champ=phpab_gr_championnats.id
                              AND phpab_gr_championnats.id='$gr_champ'
                              AND id_membre=phpab_membres.id
                              AND phpab_matchs.id=id_match
                              AND DATE_ADD( phpab_matchs.date_reelle, INTERVAL 7 DAY) >= NOW()
                              GROUP by pseudo
                              ORDER by  participations");
*/

 $result=$idconnect->query("SELECT id_membre, pseudo, SUM(points) , SUM(participation) as participations
                              FROM phpab_membres, phpab_pronostics, phpab_matchs
                              WHERE phpab_pronostics.id_membre=phpab_membres.id
                               AND phpab_pronostics.id_champ ='$gr_champ'
                              AND phpab_matchs.id=id_match
                              AND DATE_ADD( phpab_matchs.date_reelle, INTERVAL 7 DAY) >= NOW()
                              GROUP by pseudo
                              ORDER by  participations");

       while ($row=mysqli_fetch_array($result))
       {
  
       $row[1]=addslashes($row[1]);
       mysqli_query($idconnect, ("INSERT INTO phpab_clmnt_pronos (id_champ, id_membre, pseudo, points, participation,  type) 
								                  VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'hebdo')"));
      
    }
       
}

if (isset($_REQUEST['complet'])) {$complet=$_REQUEST['complet'];} else {$complet='';}

$result=$idconnect->query("SELECT pseudo, points, participation 
                           FROM phpab_clmnt_pronos
                           WHERE id_champ='$gr_champ' 
                           AND type='$type'
                           ORDER by points desc, participation desc, pseudo");
//if (!($complet== '1'))
//{
//	$query = $query." LIMIT 0, 10";
//}
//$result=mysql_query($query) or die ("probleme " .mysql_error());
$i=1;

while ($row=mysqli_fetch_array($result))
{
$totaux = $row[1] + $row[2] ;
 echo "<tr><td class=\"blanc\">$i</td>";

 if ($user_pseudo==$row[0]) echo "<td class=\"blanc bold\">$row[0]</td>";
 else  
 echo "<td class=\"blanc\">$row[0]</td>";
 echo "<td class=\"blanc\">$row[1]</td>";
 echo "<td class=\"blanc\">$row[2]</td>";
 echo "<td class=\"blanc\">$totaux</td>" ; 
 echo "<td class=\"blanc\">";club($row[0], $idconnect); echo "</td>  </tr>";
 $i++;
}
$champLigue= substr($gr_champ,0,2);
if (!($complet=='1')) echo "<tr><td colspan=\"4\" align = \"right\"><br><a href=\"index.php?page=classement&champLigue=$champLigue&type=$type&amp;complet=1&amp;gr_champ=$gr_champ\" class=\"blanc\"><b>".PRONO_CLASSEMENT_COMPLET."</b></a></td></tr>";
}

function club($pseudo, $idconnect){

  $result=$idconnect->query("SELECT ville
                              FROM phpab_membres
                              WHERE pseudo = '$pseudo' ");

   while ($row = mysqli_fetch_array($result)) {
    $club = $row[0]; 
   }
echo $club;
}

function date_form_inscription ()
{
  for($i=1;$i<=31;$i++){echo "<option value=\"$i\">$i</option>";}
echo "</select> ";

echo "<select size=\"1\" name=\"mois\"><option value=\"\"></option>";
for($i=1;$i<=12;$i++){echo "<option value=\"$i\">$i</option>";}
echo "</select> ";

echo "<select size=\"1\" name=\"annee\"><option value=\"\"></option>";
for($i=2000;$i>1923;$i--){echo "<option value=\"$i\">$i</option>";}
echo "</select>";
}
// Affichage des pronostiques du 
function pseudo_admin ($gr_champ, $idconnect)
{
 $resultat=$idconnect->query("SELECT pseudo 
							                FROM phpab_membres, phpab_gr_championnats 
							                WHERE phpab_gr_championnats.id_master=phpab_membres.id 
							                AND phpab_gr_championnats.id='$gr_champ'");
 
  while ($row= mysqli_fetch_array($resultat))
  {  
    $pseudo = $row[0];
  }
  
 //echo $pseudo;
}

function champ_prono ($champLigue, $gr_champ, $idconnect, $mode)
{
//  echo "champLigue (fonctions) : ".$gr_champ; echo "<br>";
//  echo "gr_champ (fonctions) : ".$gr_champ; echo "<br>";
  
if (is_numeric($gr_champ))
  {$champLigue = $gr_champ; }
   else
  {$champLigue=$champLigue;}

 $minChampLigue = substr($champLigue,0,2)*10000;
 $maxChampLigue = $minChampLigue + 10000;
 $minChampLigue = substr($champLigue,0,2)*10000;
 $maxChampLigue = $minChampLigue + 10000;
// echo $minChampLigue; echo "<br>";
// echo $maxChampLigue; echo "<br>";
 $resultat=$idconnect->query("SELECT DISTINCT id, nom
                              FROM phpab_gr_championnats 
                              WHERE  phpab_gr_championnats.activ_prono='1' 
                              AND id BETWEEN $minChampLigue AND $maxChampLigue
                              ORDER by nom asc");
                
  while ($row= mysqli_fetch_array($resultat))
  {
    echo "&nbsp;";
    echo  "<a href=\"index.php?page=pronos&mode=$mode&gr_champ=$row[0]&champLigue=$champLigue\">";
    if ($gr_champ==$row[0]){echo "<b>";}
    echo "$row[1]";
    if ($gr_champ==$row[0]){echo "</b>";}
    echo "</a><br />";
  }
}

// Nombres d equipes dans un championnat
function nb_equipes($id_champ, $idconnect)
         {
	      $result=$idconnect->query("SELECT id 
                                   FROM phpab_equipes 
                                   WHERE id_champ='$id_champ'");
       
         $nb_equipes=mysqli_num_rows( $result );
         return("$nb_equipes");
         }

function VerifSession ($user_pseudo,$user_mdp, $idconnect)
{
//echo "test fonctions";echo "<br>";
//echo "user_pseudo  : " .$user_pseudo;echo "<br>";
//echo "user_mdp : " .$user_mdp;echo "<br>";
if ($user_pseudo and $user_mdp)
	{
	//  echo "test OK fonctions";echo "<br>";
    $result=$idconnect->query( "SELECT mot_de_passe, id_prono 
									               FROM phpab_membres 
									               WHERE pseudo='$user_pseudo'");
        $row = mysqli_fetch_array($result); 
        
        //  echo $row["mot_de_passe"]; echo "<br>";
        if ($row["mot_de_passe"] == $user_mdp)
          {$a=1;}
        else 
          {$a=0;}

	//session_start();
	}
else {
 // echo "test KO fonctions";echo "<br>";
  $a=0;}
return $a;
}
?>
