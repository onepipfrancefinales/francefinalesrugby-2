<?php
//***********************************************************************/
// phpbgeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpbgeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpbgeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
?>
<SCRIPT type="text/JavaScript">
<!--
var PL = new InitTab(64);
var ChN="N";
var Ch1="1";
var Ch2="2";

ImgN=new Image(10,14); ImgN.src="N.gif";
Img1=new Image(10,14); Img1.src="1.gif";
Img2=new Image(10,14); Img2.src="2.gif";

ImgNR=new Image(10,14); ImgNR.src="barre.gif";
Img1R=new Image(10,14); Img1R.src="barre.gif";
Img2R=new Image(10,14); Img2R.src="barre.gif";

function Change(match, res) {
	if (res==1) {
		eval("document.matchid.m"+match+"_0.src = ImgN.src");
		eval("document.matchid.m"+match+"_1.src = Img1R.src");
		eval("document.matchid.m"+match+"_2.src = Img2.src");
		eval("PL["+match+"]=Ch1;");
	} else if (res==2) {
		eval("document.matchid.m"+match+"_0.src = ImgN.src");
		eval("document.matchid.m"+match+"_1.src = Img1.src");
		eval("document.matchid.m"+match+"_2.src = Img2R.src");
		eval("PL["+match+"]=Ch2;");
	} else {
		eval("document.matchid.m"+match+"_0.src = ImgNR.src");
		eval("document.matchid.m"+match+"_1.src = Img1.src");
		eval("document.matchid.m"+match+"_2.src = Img2.src");
		eval("PL["+match+"]=ChN;");
	}
}

function InitTab(length) {
	this.length = length;
	for(i=1; i<=length; i++) this[i] = "";
	return this;
}

function ValideGrille(tot) {
	for (i=1; i<=tot; i++) {
		if (PL[i]!="") { if (PL[i]!="undefined"){
			eval("document.matchid.r_"+i+".value=PL["+i+"];");
		} else {eval("document.matchid.r_"+i+".value=undefined;");}}
		else {eval("document.matchid.r_"+i+".value=undefined;");}
	}
	document.matchid.submit();
	return;
}

// -->
</SCRIPT>
<?php
 
if (isset ($debut)) $debut=$debut; else $debut =0;
echo "debut : ".$debut;

$nb_matchs=22;
//echo "debut : ".$_REQUEST['debut'];
if (isset($_REQUEST['debut'])) 
	{$debut=$_REQUEST['debut'];} 
else 
	{$debut='';}

if (empty ($debut) or $debut=="0") $debut=0; $apres=1;
//$debut = 0;
if (is_numeric($debut) && is_numeric($nb_matchs))
{
$fin = $debut+$nb_matchs;
}

if ($action == "reset")
{
$resultat=$idconnect->query("SELECT tps_avant_prono 
							 FROM phpbg_gr_championnats 
							 WHERE id='$gr_champ'");
//$resultat=mysql_query($requete);
while ($row = mysqli_fetch_array($resultat))
     {
       $temps_avant_prono=$row[0];
     }
$date_actuelle=time();
$resultat = $idconnect->query("
			SELECT id 
			FROM phpbg_membres 
			WHERE id_prono='$user_id'");
			
//$resultat = mysql_query($requete);
if (is_numeric($debut) && is_numeric($nb_matchs))
{
$fin = $debut+$nb_matchs;
}
        while ($row= mysqli_fetch_array($resultat))
        {
          $id=$row["id"];
        }
$resultat=$idconnect->query("SELECT phpbg_matchs.id
          FROM phpbg_clubs, phpbg_clubs as CLEXT, phpbg_matchs, phpbg_journees, phpbg_equipes, phpbg_equipes as EXT, phpbg_gr_championnats
          WHERE phpbg_clubs.id=phpbg_equipes.id_club
          AND CLEXT.id=EXT.id_club
          AND phpbg_equipes.id=phpbg_matchs.id_equipe_dom
          AND EXT.id=phpbg_matchs.id_equipe_ext
          AND phpbg_matchs.id_journee=phpbg_journees.id
          AND phpbg_journees.id_champ=phpbg_gr_championnats.id_champ
          AND phpbg_gr_championnats.id='$gr_champ'
          AND phpbg_matchs.buts_dom is null
          AND phpbg_matchs.buts_ext is null
          ORDER by phpbg_matchs.date_reelle, phpbg_clubs.nom
          LIMIT $debut, $fin ");
  //$resultat=mysql_query($requete) or die ("probleme " .mysql_error());
      while ($row=mysqli_fetch_array($resultat))
      {
        $resultat1=$idconnect->query("SELECT phpbg_matchs.date_reelle FROM phpbg_matchs WHERE phpbg_matchs.id='$row[0]'");
       // $resultat1=mysql_query($requete1);
         while ($row1= mysqli_fetch_array($resultat1))
         {
           $date_relle=$row1[0];
         }
        $date_match_timestamp=format_date_timestamp($date_relle);

        if ($date_actuelle<($date_match_timestamp+$temps_avant_prono*60))
        {
           mysqli_query($idconnect, ("UPDATE  phpbg_pronostics SET pronostic='0' WHERE id_match='$row[0]' AND id_membre='$id'"));}
           mysqli_query($idconnect, ("DELETE FROM phpbg_pronostics WHERE pronostic='0'"));
        }
      }

  if ($action == "valid_pronos")
  {

       
    for($i=1;$i<=$_REQUEST['nb_fiche'];$i++)
    {   
     $nom_f_prono = "r_$i";
     $nom_id_match = "id_match_$i";

     if ($_REQUEST[$nom_f_prono]) {$f_prono[$i]=$_REQUEST[$nom_f_prono];}
     if ($_REQUEST[$nom_id_match]) {$id_match[$i]=$_REQUEST[$nom_id_match];}

     $resultat=$idconnect->query("SELECT phpbg_matchs.date_reelle FROM phpbg_matchs WHERE phpbg_matchs.id='$id_match[$i]'");
    // $resultat=mysql_query($requete);

       while ($row= mysqli_fetch_array($resultat))
       {      
         $date_relle=$row[0];
       }

     $resultat=$idconnect->query("SELECT tps_avant_prono FROM phpbg_gr_championnats WHERE id='$gr_champ'");
     //$resultat=mysql_query($requete);

       while ($row= mysqli_fetch_array($resultat))
       {
         $temps_avant_prono=$row[0];
       }

     $date_match_timestamp=format_date_timestamp($date_relle);
     $date_actuelle=time();

     if ($f_prono[$i] !== "undefined")
     {
       mysqli_query($idconnect, ("DELETE FROM phpbg_pronostics WHERE pronostic=' '"));
       $resultat =$idconnect->query( "SELECT * FROM phpbg_matchs, phpbg_pronostics, phpbg_membres WHERE phpbg_membres.id_prono='$user_id'
                   AND phpbg_membres.id=phpbg_pronostics.id_membre
                   AND phpbg_pronostics.id_match=phpbg_matchs.id
                   AND phpbg_pronostics.id_match='$id_match[$i]'");
      // $resultat=mysql_query($requete);
       $nb_prono=mysqli_num_rows($resultat);

       $resultat = $idconnect->query("SELECT id FROM phpbg_membres WHERE id_prono='$user_id'");
       //$resultat = mysql_query($requete);

         while ($row= mysqli_fetch_array($resultat))
         {
           $id=$row["id"];
         }

       if ($nb_prono == "1")
       {
         if ($date_actuelle<($date_match_timestamp+$temps_avant_prono*60))
         {
           mysqli_query($idconnect, ("UPDATE phpbg_pronostics SET pronostic='$f_prono[$i]'
                        WHERE phpbg_pronostics.id_membre='$id'
                        AND phpbg_pronostics.id_match='$id_match[$i]'"));
         }
       }
       if ($nb_prono == "0")
       {
         if ($date_actuelle<($date_match_timestamp+$temps_avant_prono*60))
         {
           mysqli_query($idconnect, ("INSERT INTO phpbg_pronostics (id_membre, pronostic, id_match, id_champ) VALUES ('$id','$f_prono[$i]','$id_match[$i]', '$gr_champ')"));
         }
       }
       elseif ($nb_prono!= "1" and $nb_prono != "0") {echo "erreur !<br />";}
     }
    }
  echo "<table><tr><td align=\"center\"><div class=\"bleu\">".PRONO_GRILLE_CONFIRME."<br /><a href=\"index.php?page=pronos&amp;gr_champ=$gr_champ&amp;debut=$debut\">".RETOUR."</a> - <a href=\"index.php?page=pronos&amp;debut=$fin&amp;gr_champ=$gr_champ\">".PRONO_GRILLE_PROCHAINE."</a></div></td></tr></table>";
  }

  elseif ($action !== "valid_pronos")
  {    if ($debut=="0") 
		{
		$prec="index.php?page=derniers_pronos&amp;gr_champ=$gr_champ";
		}
		else 
		{
			if (is_numeric($debut) && is_numeric($nb_matchs)) 
			{
			$debut1=$debut-$nb_matchs; 
			$prec="index.php?page=pronos&amp;
			debut=$debut1&amp;
			gr_champ=$gr_champ"; 
			}
		}
    
	
	include ("pronos.htm");

    $resultat=$idconnect->query("
			 SELECT phpbg_clubs.nom, CLEXT.nom, phpbg_matchs.id, phpbg_matchs.date_reelle, phpbg_journees.numero
			 FROM phpbg_clubs, phpbg_clubs as CLEXT, phpbg_matchs, phpbg_journees, phpbg_equipes, phpbg_equipes as EXT, phpbg_gr_championnats
			 WHERE phpbg_clubs.id=phpbg_equipes.id_club
			 AND CLEXT.id=EXT.id_club
			 AND phpbg_equipes.id=phpbg_matchs.id_equipe_dom
			 AND EXT.id=phpbg_matchs.id_equipe_ext
			 AND phpbg_matchs.id_journee=phpbg_journees.id
			 AND phpbg_journees.id_champ=phpbg_gr_championnats.id_champ
			 AND phpbg_gr_championnats.id='$gr_champ'
			 AND phpbg_matchs.buts_dom is null
			 AND phpbg_matchs.buts_ext is null
			 AND phpbg_clubs.nom!='exempte'
			 AND CLEXT.nom!='exempte'
			 ORDER by phpbg_matchs.date_reelle, phpbg_clubs.nom
			 LIMIT $debut, $fin ");

    $i=0;
    $x=0;
    //$resultat=mysql_query($requete);
  
    if (mysqli_num_rows($resultat)=="0") 
		{
		echo "<tr><td colspan=6 align=center><div class=\"blanc\">Journée Inexistante</div></td></tr>";
		}

      while ($row=mysqli_fetch_array($resultat) and $i<$nb_matchs)
      {
       $clubs_nom = stripslashes($row[0]);
       $clubs_nom1 = stripslashes($row[1]);
       $resultat2=$idconnect->query( " SELECT pronostic 
									   FROM phpbg_pronostics, phpbg_membres 
									   WHERE phpbg_pronostics.id_match='$row[2]' 
									   AND phpbg_membres.id=phpbg_pronostics.id_membre 
									   AND phpbg_membres.id_prono='$user_id'");
       //$resultat2=mysql_query($requete2) or die ("probleme " .mysql_error());
       $nb_pronos= mysqli_num_rows($resultat2 );



       if ($nb_pronos == "0") {$prono="0";}
        {
          while ($row2=mysqli_fetch_array($resultat2))
           {
            $prono=$row2["0"];

            if ($row2["0"] == ""){$prono="0";}

           }
        }


       $resultat2=$idconnect->query("SELECT tps_avant_prono FROM phpbg_gr_championnats WHERE id='$gr_champ'");
      //$resultat2=mysql_query($requete2) or die ("probleme " .mysql_error());

         while ($row2=mysqli_fetch_array($resultat2))
         {
          $temps_avantmatch=$row2[0];
         }

       $date_match_timestamp=format_date_timestamp($row[3]);
       $date_actuelle=time();
       $ecart_secondes=$date_match_timestamp-$date_actuelle;
       $ecart_heures = floor($ecart_secondes / (60*60))-$temps_avantmatch;
       $ecart_minutes = floor($ecart_secondes / 60)-$temps_avantmatch*60;
       $ecart_jours = floor($ecart_secondes / (60*60*24)-$temps_avantmatch/60);
       $date=format_date_fr_red($row[3]);

       echo"<tr><td><div class=\"blanc\">$row[4]</div></td>";
       echo "<td><div class=\"blanc\">$date</div></td>";
       echo "<td align=\"right\"><div class=\"blanc\">$clubs_nom</div></td>";

       if ($ecart_heures>="0")
       {    $x++;
         echo"<td>";
         echo "<input type=\"hidden\" name=\"id_match_$x\" value=\"$row[2]\">";
         ?><INPUT type="hidden" value="1" name="r_<?php print $x;?>">

         <table  border="0" cellpadding="0" cellspacing="0" align="center" width="50">
         <tr>
         <td>
         <?php

             if ($prono=="0")
           {
             ?>
             <a href="javascript:Change(<?php print $x; ?>,1);"><img src="1.gif" border="no" name="m<?php print $x; ?>_1" alt=""></a>
             <a href="javascript:Change(<?php print $x; ?>,0);"><img src="N.gif" border="no" name="m<?php print $x; ?>_0" alt=""></a>
             <a href="javascript:Change(<?php print $x; ?>,2);"><img src="2.gif"  border="no" name="m<?php print $x;?>_2" alt=""></a>
             <?php
           }

         if ($prono=="1")
           {
             ?>
             <a href="javascript:Change(<?php print $x; ?>,1);"><img src="barre.gif" border="no" name="m<?php print $x; ?>_1" alt=""></a>
             <a href="javascript:Change(<?php print $x; ?>,0);"><img src="N.gif" border="no" name="m<?php print $x; ?>_0" alt=""></a>
             <a href="javascript:Change(<?php print $x; ?>,2);"><img src="2.gif"  border="no" name="m<?php print $x;?>_2" alt=""></a>
             <?php
           }

         if ($prono=="N")
           {
             ?>    
             <a href="javascript:Change(<?php print $x; ?>,1);"><img src="1.gif" border="no" name="m<?php print $x; ?>_1" alt=""></a>
             <a href="javascript:Change(<?php print $x; ?>,0);"><img src="barre.gif" border="no" name="m<?php print $x; ?>_0" alt=""></a>
             <a href="javascript:Change(<?php print $x; ?>,2);"><img src="2.gif"  border="no" name="m<?php print $x;?>_2" alt=""></a>
             <?php
           }

         if ($prono=="2")
           {
             ?>
             <a href="javascript:Change(<?php print $x; ?>,1);"><img src="1.gif" border="no" name="m<?php print $x; ?>_1" alt=""></a>
             <a href="javascript:Change(<?php print $x; ?>,0);"><img src="N.gif" border="no" name="m<?php print $x; ?>_0" alt=""></a>
             <a href="javascript:Change(<?php print $x; ?>,2);"><img src="barre.gif"  border="no" name="m<?php print $x;?>_2" alt=""></a>
             <?php
           }
         echo "</td></tr></table></td>";
               
       }

       else
       {
         echo "<td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\">\n";
         echo "<tr>\n";
         echo "<td width=\"45\" height=\"10\" valign=\"middle\" align=\"center\">\n";
         echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"50\">\n<tr>\n<td>\n";

         if ($prono=="1")
           {
           ?>
             <img src="barre.gif" border="no" alt=""> <img src="N.gif" border="no" alt=""> <img src="2.gif"  border="no" alt="">
           <?php
           }

         if ($prono=="N")
           {
           ?>
             <img src="1.gif" border="no" alt=""> <img src="barre.gif" border="no" alt=""> <img src="2.gif"  border="no" alt="">
           <?php
           }

         if ($prono=="2")
         {
         ?>
             <img src="1.gif" border="no" alt=""> <img src="N.gif" border="no" alt=""> <img src="barre.gif"  border="no" alt="">
         <?php
         }
  
         if ($prono=="0")
         {
          ?> 
             <img src="1.gif" border="no" alt=""> <img src="N.gif" border="no" alt=""> <img src="2.gif"  border="no" alt="">
          <?php
         }
         echo "</td></tr></table>";
         echo "</td></tr></table></td>";
       }
  
       echo "<td><div class=\"blanc\">$clubs_nom1</div></td><td align=center>";
  
       if ($ecart_heures>48) echo "<div class=\"blanc\">$ecart_jours jours</div>";
       elseif ($ecart_heures>0) echo "<div class=\"blanc\">$ecart_heures h</div>";
       elseif ($ecart_heures == 0) echo "<div class=\"blanc\">$ecart_minutes min</div>";
       else {echo"<div class=\"blanc\">".PRONO_GRILLE_EXPIRE."</div>";}
       echo "</td>";
       echo "</tr>";
       $i++;
      }
?>

<tr><td colspan="6" align="center">
<input type="hidden" name="action" value="valid_pronos">
<input type="hidden" name="nb_fiche" value="<?php print $x; ?>">


<input type="hidden" name="debut" value="<?php print $debut; ?>"><br />
<a href="index.php?page=pronos&amp;action=reset&amp;debut=<?php echo "$debut";?>&amp;gr_champ=<?php echo "$gr_champ"; ?>"><img border="0" src="reset.gif" alt=""></a>
<a href="javascript:ValideGrille(<?php print $x; ?>);"><img border="0" src="s_1.gif" alt=""></a>

          
         
</td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<?php

}


?>
