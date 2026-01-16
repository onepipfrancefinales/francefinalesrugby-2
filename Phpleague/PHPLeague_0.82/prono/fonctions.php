<?php
function affiche_points ($user_id, $gr_champ)
{
  $query="SELECT points FROM phpl_clmnt_pronos, phpl_membres WHERE phpl_membres.id=phpl_clmnt_pronos.id_membre and phpl_membres.id_prono='$user_id' and type='general' AND id_champ='$gr_champ'";
  $result=mysql_query($query) or die (mysql_error());
  if (mysql_num_rows($result)=="0") {$points=0;}
  while ($row=mysql_fetch_array($result))
  {
    $points=$row[0];
  }
  print $points;
}

function affiche_clmnt_general ($user_id, $gr_champ)
{
  $query="SELECT id_prono FROM phpl_clmnt_pronos, phpl_membres WHERE phpl_membres.id=phpl_clmnt_pronos.id_membre AND id_champ='$gr_champ' AND type='general' AND id_champ='$gr_champ' ORDER by points desc, participation desc, phpl_membres.pseudo";
  $result=mysql_query($query) or die (mysql_error());
  $i = "1";
  while ($row=mysql_fetch_array($result))
  {
    if ($row[0]==$user_id){$class=$i;}
    $i++;
  }
   $clmnt=PRONO_CLASSEMENT_NON_CLASSE;
 if (isset($class))
  {
  if ($class=="1"){print $class; echo PRONO_CLASSEMENT_PREMIER;}
  elseif ($class=="2"){print $class; echo PRONO_CLASSEMENT_SECOND;}
  elseif ($class=="3"){print $class; echo PRONO_CLASSEMENT_TROIS;}
  else {print $class; echo PRONO_CLASSEMENT_AUTRES;}
  }
  if (!isset($class)) print $clmnt;
}

function affiche_clmnt_mensuel_en_cours ($user_id, $gr_champ)
{
  $query="SELECT id_prono
          FROM phpl_clmnt_pronos, phpl_membres
          WHERE phpl_membres.id=phpl_clmnt_pronos.id_membre AND id_champ='$gr_champ' AND type='mensuel_en_cours' AND id_champ='$gr_champ' ORDER by points desc, participation desc, phpl_membres.pseudo";
  $result=mysql_query($query) or die (mysql_error());
  $i = "1";
  while ($row=mysql_fetch_array($result))
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

function affiche_clmnt_mensuel_30_jours ($user_id, $gr_champ)
{
  $query="SELECT id_prono FROM phpl_clmnt_pronos, phpl_membres WHERE phpl_membres.id=phpl_clmnt_pronos.id_membre AND id_champ='$gr_champ' AND id_champ='$gr_champ' AND type='mensuel_30_jours' ORDER by points desc, participation desc, phpl_membres.pseudo";
  $result=mysql_query($query) or die (mysql_error());
  $i = "1";
  while ($row=mysql_fetch_array($result))
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

function affiche_clmnt_mensuel_hebdo ($user_id, $gr_champ)
{
  $query="SELECT id_prono FROM phpl_clmnt_pronos, phpl_membres WHERE phpl_membres.id=phpl_clmnt_pronos.id_membre AND id_champ='$gr_champ' AND type='hebdo' AND id_champ='$gr_champ' ORDER by points desc, participation desc, phpl_membres.pseudo";
  $result=mysql_query($query) or die (mysql_error());
  $i = "1";
  while ($row=mysql_fetch_array($result))
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

function classement_general ($gr_champ, $user_pseudo)
{
$query="SELECT pseudo, points, participation FROM phpl_clmnt_pronos
WHERE id_champ='$gr_champ' AND type='general'
ORDER by points desc, participation desc, pseudo LIMIT 0, 10";
$result=mysql_query($query) or die ("probleme " .mysql_error());
$i=1;

       while ($row=mysql_fetch_array($result))
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


function grille_admin ($gr_champ)
{
$query="SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.id, phpl_matchs.date_reelle, phpl_journees.numero
FROM phpl_clubs, phpl_clubs as CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes as EXT, phpl_gr_championnats
WHERE phpl_clubs.id=phpl_equipes.id_club
AND CLEXT.id=EXT.id_club
AND phpl_equipes.id=phpl_matchs.id_equipe_dom
AND EXT.id=phpl_matchs.id_equipe_ext
AND phpl_matchs.id_journee=phpl_journees.id
AND phpl_journees.id_champ=phpl_gr_championnats.id_champ
AND phpl_gr_championnats.id='$gr_champ'
AND phpl_matchs.buts_dom is null
AND phpl_matchs.buts_ext is null
AND phpl_clubs.nom!='exempte'
AND CLEXT.nom!='exempte'
ORDER by phpl_matchs.date_reelle, phpl_clubs.nom
LIMIT 0, 10";

$i=0;
$result=mysql_query($query) or die ("probleme " .mysql_error());

while ($row=mysql_fetch_array($result) and $i<10)
  {
$clubs_nom = stripslashes($row[0]);
$clubs_nom1 = stripslashes($row[1]);
$query2= "SELECT pronostic FROM phpl_pronostics, phpl_gr_championnats WHERE phpl_pronostics.id_match='$row[4]' AND phpl_gr_championnats.id='$gr_champ' AND id_membre=id_master";
$result2=mysql_query($query2) or die ("probleme " .mysql_error());
$nb_pronos= mysql_num_rows($result2);

if ($nb_pronos == "0") {$prono="0";}
{
  while ($row2=mysql_fetch_array($result2))
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

         if ($prono=="1")
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

  $requete2="SELECT tps_avant_prono FROM phpl_gr_championnats WHERE id='$gr_champ'";
  $resultats2=mysql_query($requete2) or die ("probleme " .mysql_error());
   while ($row2=mysql_fetch_array($resultats2))
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

function classement_type ($type)
{
if ($type=="") {echo PRONO_CLASSEMENT_GENERAL_MAJ;}
if ($type=="general") {echo PRONO_CLASSEMENT_GENERAL_MAJ;}
if ($type=="mensuel_en_cours") {echo PRONO_CLASSEMENT_MOIS;}
if ($type=="mensuel_30_jours") {echo PRONO_CLASSEMENT_30;}
if ($type=="hebdo") {echo PRONO_CLASSEMENT_HEBDO;}
}

function classement ($gr_champ, $type, $user_pseudo)
{
if (!($type=="general" or $type=="mensuel_en_cours" or $type=="mensuel_30_jours" or $type=="hebdo")){$type="general";}

if ($type=="mensuel_en_cours")
{
   mysql_query("DELETE FROM phpl_clmnt_pronos WHERE id_champ='$gr_champ' AND type='mensuel_en_cours'") or die (mysql_error());

   $query="SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
   FROM phpl_membres, phpl_pronostics, phpl_matchs, phpl_gr_championnats
   WHERE phpl_pronostics.id_champ=phpl_gr_championnats.id
   AND phpl_gr_championnats.id='$gr_champ'
   AND id_membre=phpl_membres.id
   AND phpl_matchs.id=id_match
   AND MONTH (date_reelle) = MONTH (NOW())
   AND YEAR (date_reelle) = YEAR (NOW())
   GROUP by pseudo
   ORDER by total, participations";

   $result=mysql_query ($query) or die ("probleme " .mysql_error());
   while ($row=mysql_fetch_array($result))
         {
         $row[1]=addslashes($row[1]);
         mysql_query("INSERT INTO phpl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_en_cours')") or die (mysql_error());
         }
}          

if ($type=="mensuel_30_jours")
{
   mysql_query("DELETE FROM phpl_clmnt_pronos WHERE id_champ='$gr_champ' AND type='mensuel_30_jours'") or die (mysql_error());

   $query="SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
   FROM phpl_membres, phpl_pronostics, phpl_matchs, phpl_gr_championnats
   WHERE phpl_pronostics.id_champ=phpl_gr_championnats.id
   AND phpl_gr_championnats.id='$gr_champ'
   AND id_membre=phpl_membres.id
   AND phpl_matchs.id=id_match
   AND DATE_ADD(date_reelle, INTERVAL 30 DAY) >= NOW()
   GROUP by pseudo
   ORDER by total, participations";

   $result=mysql_query ($query) or die ("probleme " .mysql_error());
       while ($row=mysql_fetch_array($result))
       {
       $row[1]=addslashes($row[1]);
       mysql_query("INSERT INTO phpl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_30_jours')") or die (mysql_error());
       }
}

if ($type=="hebdo")
{
   mysql_query("DELETE FROM phpl_clmnt_pronos WHERE id_champ='$gr_champ' AND type='hebdo'") or die (mysql_error());

   $query="SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
   FROM phpl_membres, phpl_pronostics, phpl_matchs, phpl_gr_championnats
   WHERE phpl_pronostics.id_champ=phpl_gr_championnats.id
   AND phpl_gr_championnats.id='$gr_champ'
   AND id_membre=phpl_membres.id
   AND phpl_matchs.id=id_match
   AND DATE_ADD(date_reelle, INTERVAL 7 DAY) >= NOW()
   GROUP by pseudo
   ORDER by total, participations";

   $result=mysql_query ($query) or die ("probleme " .mysql_error());
       while ($row=mysql_fetch_array($result))
       {
       $row[1]=addslashes($row[1]);
       mysql_query("INSERT INTO phpl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'hebdo')") or die (mysql_error());
       }
}
if (isset($_REQUEST['complet'])) {$complet=$_REQUEST['complet'];} else {$complet='';}

$query="SELECT pseudo, points, participation FROM phpl_clmnt_pronos
WHERE id_champ='$gr_champ' AND type='$type'
ORDER by points desc, participation desc, pseudo";
if (!($complet== '1')){$query = $query. " LIMIT 0, 10";}
$result=mysql_query($query) or die ("probleme " .mysql_error());
$i=1;
while ($row=mysql_fetch_array($result))
{
 echo "<tr><td><div class=\"blanc\">$i</div></td>";

 if ($user_pseudo==$row[0]) echo "<td><div class=\"blanc\"><b>$row[0]</b></div></td>";
 else  echo "<td><div class=\"blanc\">$row[0]</div></td>";
 echo "<td><div class=\"blanc\">$row[1]</div></td>";
 echo "<td><div class=\"blanc\">$row[2]</div></td></tr>";

 $i++;
}
if (!($complet=='1')) echo "<tr><td colspan=\"4\" align = \"right\"><a href=\"index.php?page=classement&amp;type=$type&amp;complet=1&amp;gr_champ=$gr_champ\" class=\"blanc\"><b>".PRONO_CLASSEMENT_COMPLET."</b></a></td></tr>";
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

function pseudo_admin ($gr_champ)
{
  $requete="SELECT pseudo FROM phpl_membres, phpl_gr_championnats WHERE phpl_gr_championnats.id_master=phpl_membres.id AND phpl_gr_championnats.id='$gr_champ'";
  $resultat=mysql_query ($requete) or die ("probleme " .mysql_error());;

  while ($row= mysql_fetch_array($resultat))
  {  
    $pseudo = $row[0];
  }
print $pseudo;
}

function champ_prono ($gr_champ)
{
  $requete="SELECT DISTINCT id, nom FROM phpl_gr_championnats WHERE  phpl_gr_championnats.activ_prono='1' ORDER by id";
  $resultat=mysql_query ($requete) or die ("probleme " .mysql_error());;

  while ($row= mysql_fetch_array($resultat))
  {
    echo "<a href=\"index.php?gr_champ=$row[0]\">";
    if ($gr_champ==$row[0]){echo "<b>";}
    echo "$row[1]";
    if ($gr_champ==$row[0]){echo "</b>";}
    echo "</a><br />";
  }

}

// Nombres d equipes dans un championnat
function nb_equipes($id_champ)
         {
         $query="SELECT id FROM phpl_equipes WHERE id_champ='$id_champ'";
         $result=mysql_query($query);
         $nb_equipes=mysql_num_rows( $result );
         return("$nb_equipes");
         }

function VerifSession ($user_pseudo,$user_mdp)
{

if ($user_pseudo and $user_mdp)
	{
        $requete= "SELECT mot_de_passe, id_prono FROM phpl_membres WHERE pseudo='$user_pseudo'";
        $result = mysql_query($requete);
        $row = mysql_fetch_array($result);
        
        if ($row["mot_de_passe"] == $user_mdp){;$a=1;}
        else {$a=0;}

	//session_start();
	}
else {$a=0;}
return ("$a");
}
?>
