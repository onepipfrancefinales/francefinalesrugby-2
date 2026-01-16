<?php
if (empty ($numero))
  {
    $requete="SELECT 
	max(phpl_journees.numero) 
	FROM phpl_journees, 
	phpl_matchs 
	WHERE phpl_journees.id=phpl_matchs.id_journee and 
	buts_dom is not NULL and 
	phpl_journees.id_champ='$champ'";
    $resultats=mysql_query($requete);
     while ($row=mysql_fetch_array($resultats))
       {
         $numero=$row[0];
       }
       if ($numero=="") {$numero="1";}
  }

?>
<?php
if ($action3=="2")
{
foreach ($_POST['id22'] as $id => $id22) 
	{
	$tps = ( $_POST['tps'][ $id ] );
	
	$query5="UPDATE phpl_compo SET tps='$tps' WHERE id='$id22'";
                   mysql_query($query5);
}
echo"<script language=\"Javascript\">
window.location='?page=championnat&action=tps&champ=$champ&numero=$numero';
</script>";
}
?>
<table class=phpl width="80%">
  <tr>
    <td class=phpl2 align="center" colspan="3"><? echo ADMIN_COMPO_TITRE." "; affich_champ ($champ); ?></td>
  </tr>
  <td align="center"><?php journees2 ($champ, $numero, $action, $annee);?>
  </td></tr>
  <tr><td>

<?
//buteurs



 echo "<br />".ADMIN_JOUEURS_TPS;
 echo "<form method=\"post\" action=\"\">";
 echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" valign=\"bottom\" align=\"center\" width=\"100%\">
 <tr>
 <td>";

 echo"<tr class=phpl4 align =\"left\">
		<td align=\"right\" class=phpl2>".DOMICILE."
		<td class=phpl2><td class=phpl2>".COMPTPS."
		<td class=phpl2><td class=phpl2>
		<td class=phpl2>".COMPTPS."
		<td class=phpl2>
		<td class=phpl2>".EXTERIEUR."
		</tr>";
		
 $query_menu="SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.id, phpl_equipes.id, EXT.id, date_reelle
         FROM phpl_clubs, phpl_clubs as CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes as EXT
         WHERE phpl_clubs.id = phpl_equipes.id_club
         AND CLEXT.id = EXT.id_club
         AND phpl_equipes.id = phpl_matchs.id_equipe_dom
         AND EXT.id = phpl_matchs.id_equipe_ext
         AND phpl_matchs.id_journee = phpl_journees.id
         AND phpl_journees.numero = '$numero'
         AND phpl_journees.id_champ = '$champ'
         AND CLEXT.nom!='exempte'
         AND phpl_clubs.nom!= 'exempte'
         ORDER by date_reelle";
 $result_menu=mysql_query($query_menu) or die (mysql_error());
 
 $e=0;
 while($row_menu = mysql_fetch_array($result_menu)) 
       {  $query3="SELECT 
	   phpl_joueurs.nom, 
	   phpl_joueurs.prenom, 
	   phpl_compo.id,
	   phpl_compo.id_effectif,
	   phpl_compo.tps,
	   phpl_compo.matchs,
	   phpl_compo.remp
          FROM 
	phpl_compo, 
	phpl_joueurs, 
	phpl_effectif
          WHERE 
	phpl_effectif.id_joueur=phpl_joueurs.id
AND phpl_effectif.id=phpl_compo.id_effectif
AND phpl_effectif.id_equipe='$row_menu[5]'
AND phpl_compo.id_match='$id_match'";

		$result3=mysql_query($query3);
		$nb_buteurs=mysql_num_rows( $result3 );
		$row_menu[0] = stripslashes($row_menu[0]);
		$id = stripslashes($row3[2]);
		$id2 = stripslashes($row3[1]);
         if (($e%2)==0){$class="phpl3";}
         else {$class="phpl4";}
         echo "<tr>";
         print "<td align=\"right\" class=$class>$row_menu[0]
		 <td class=$class>";
		 echo"<td class=$class>";

$i=0;
 while ($row3=mysql_fetch_array($result3))
       {
     $joueurs_nom = stripslashes($row3[0]);
	 $joueurs_prenom = stripslashes($row3[1]);
	 $tps = stripslashes($row3[4]);
	  echo "<input type=\"hidden\" name=\"id22[$i]\" value=\"$row3[2]\" />";
	  if ($row3[5] == '1')
	  {
        echo "<input name=\"tps[$i]\" type=\"text\" size=\"3\" maxlength=\"3\" value=\"$tps\" /><strong> $joueurs_nom $joueurs_prenom (tit)</strong>
		<br />";
		}
		else
		{
        echo "<input name=\"tps[$i]\" type=\"text\" size=\"3\" maxlength=\"3\" value=\"$tps\" /> $joueurs_nom $joueurs_prenom (remp)
		<br />";
		}
		$i++;
		}
				   
 echo "<td width=\"20\" align=\"center\" class=$class>";
 echo " <b>$row_menu[2]</b>";
 echo "<td width=\"20\" align=\"center\" class=$class>";
 echo "<b><b>$row_menu[3]</b></b> ";
 echo "<td class=$class>";
 

        { $query3="SELECT 
		phpl_joueurs.nom, 
	   phpl_joueurs.prenom, 
	   phpl_compo.id,
	   phpl_compo.id_effectif,
	   phpl_compo.tps,
	   phpl_compo.matchs
          FROM 
		  phpl_compo, 
		  phpl_joueurs, 
		  phpl_effectif
          WHERE
		   phpl_effectif.id_joueur=phpl_joueurs.id
          AND phpl_effectif.id=phpl_compo.id_effectif
          AND phpl_effectif.id_equipe=$row_menu[6]
          AND phpl_compo.id_match=$row_menu[4]";
  $result3=mysql_query($query3);
        }
 echo"<td class=$class>";
  
  
  $y=0;
  while ($row3=mysql_fetch_array($result3))
     	{
     $joueurs_nom = stripslashes($row3[0]);
	 $joueurs_prenom = stripslashes($row3[1]);
	 $tps = stripslashes($row3[4]);  
   if ($row3[5] == '1')
	  {
        echo "<strong> $joueurs_nom $joueurs_prenom (tit) $tps</strong>
		<br />";
		}
		else
		{
        echo " $joueurs_nom $joueurs_prenom (remp) $tps 
		<br />";
		}		
		$y++;
		}
		
 $e++;
 echo  "<td class=$class>$row_menu[1]";
}
echo "</td></tr><tr><td colspan=\"8\">
</td></tr></table>";

echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\" />";
echo "<input type=\"hidden\" name=\"action3\" value=\"2\">";
echo "<input type=\"hidden\" name=\"id_journee\" value=\"$id_journee\" />";
$query2="select phpl_matchs.id from phpl_matchs where phpl_matchs.id_journee='$numero'";
$result2=mysql_query($query2);
$nb_matchs=nb_matchs($numero, $champ);
$numero12=$numero+1;

echo "<input type=\"hidden\" name=\"numero\" value=\"$numero\" />";
echo "<input type=\"hidden\" name=\"journee_suivante\" value=\"1\" />";
echo "<input type=\"hidden\" name=\"nb_matchs\" value=\"$nb_matchs\" />";
$button=ENVOI;
echo "<input type=\"submit\" value=\"$button\">";
echo "</form>";
?>
</td></tr></table><br /><br />
