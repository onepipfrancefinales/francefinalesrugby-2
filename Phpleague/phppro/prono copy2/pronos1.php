<SCRIPT type="text/JavaScript">

  var PL = new InitTab(64);
var ChN="N";
var Ch1="1";
var Ch2="2";

ImgN=new Image(10,14); ImgN.src="afficheN.gif";
Img1=new Image(10,14); Img1.src="affiche1.gif";
Img2=new Image(10,14); Img2.src="affiche2.gif";

ImgNR=new Image(10,14); ImgNR.src="affiche_selection.gif";
Img1R=new Image(10,14); Img1R.src="affiche_selection.gif";
Img2R=new Image(10,14); Img2R.src="affiche_selection.gif";

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


</SCRIPT>
<?php

if (isset($debut)) $debut = $debut;
else $debut = 0;


$nb_matchs = 18;
//echo "debut : ".$_REQUEST['debut'];echo "<br>";
if (isset($_REQUEST['debut'])) {
  $debut = $_REQUEST['debut'];
} else {
  $debut = '';
}

if (empty($debut) or $debut == "0") $debut = 0;
$apres = 1;
//$debut = 0;
if (is_numeric($debut) && is_numeric($nb_matchs)) {
  $fin = $debut + $nb_matchs;
}


if ($action == "reset") {
  $resultat = $idconnect->query("SELECT tps_avant_prono 
							 FROM phppro_gr_championnats 
							 WHERE id='$gr_champ'");
  //$resultat=mysql_query($requete);
  while ($row = mysqli_fetch_array($resultat)) {
    $temps_avant_prono = $row[0];
  }


  $date_actuelle = time();


  $resultat = $idconnect->query("
			SELECT id 
			FROM phppro_membres 
			WHERE id_prono='$user_id'");

  //$resultat = mysql_query($requete);
  if (is_numeric($debut) && is_numeric($nb_matchs)) {
    $fin = $debut + $nb_matchs;
  }
  while ($row = mysqli_fetch_array($resultat)) {
    $id = $row["id"];
  }
  $resultat = $idconnect->query("SELECT phppro_matchs.id
          FROM phppro_clubs, phppro_clubs as CLEXT, phppro_matchs, phppro_journees, phppro_equipes, phppro_equipes as EXT, phppro_gr_championnats
          WHERE phppro_clubs.id=phppro_equipes.id_club
          AND CLEXT.id=EXT.id_club
          AND phppro_equipes.id=phppro_matchs.id_equipe_dom
          AND EXT.id=phppro_matchs.id_equipe_ext
          AND phppro_matchs.id_journee=phppro_journees.id
          AND phppro_journees.id_champ=phppro_gr_championnats.id_champ
          AND phppro_gr_championnats.id='$gr_champ'
          AND phppro_matchs.buts_dom is null
          AND phppro_matchs.buts_ext is null
          ORDER by phppro_matchs.date_reelle, phppro_clubs.nom
          LIMIT $debut, $fin ");

  while ($row = mysqli_fetch_array($resultat)) {
    $resultat1 = $idconnect->query("SELECT phppro_matchs.date_reelle 
                                    FROM phppro_matchs 
                                    WHERE phppro_matchs.id='$row[0]'");
 
    while ($row1 = mysqli_fetch_array($resultat1)) {
      $date_relle = $row1[0];
    }
    $date_match_timestamp = format_date_timestamp($date_relle);

    if ($date_actuelle < ($date_match_timestamp + $temps_avant_prono * 60)) {
      mysqli_query($idconnect, ("UPDATE  phppro_pronostics 
                                 SET pronostic='0' 
                                 WHERE id_match='$row[0]' 
                                 AND id_membre='$id'"));
    }
    mysqli_query($idconnect, ("DELETE FROM phppro_pronostics WHERE pronostic='0'"));
  }
}

if ($action == "valid_pronos") {


  for ($i = 1; $i <= $_REQUEST['nb_fiche']; $i++) {
    $nom_f_prono = "r_$i";
    $nom_id_match = "id_match_$i";

    if ($_REQUEST[$nom_f_prono]) {
      $f_prono[$i] = $_REQUEST[$nom_f_prono];
    }
    if ($_REQUEST[$nom_id_match]) {
      $id_match[$i] = $_REQUEST[$nom_id_match];
    }

    $resultat = $idconnect->query("SELECT phppro_matchs.date_reelle 
                                   FROM phppro_matchs 
                                   WHERE phppro_matchs.id='$id_match[$i]'");

    while ($row = mysqli_fetch_array($resultat)) {
      $date_relle = $row[0];
    }

    $resultat = $idconnect->query("SELECT tps_avant_prono 
                                   FROM phppro_gr_championnats 
                                   WHERE id='$gr_champ'");

    while ($row = mysqli_fetch_array($resultat)) {
      $temps_avant_prono = $row[0];
    }

    $date_match_timestamp = format_date_timestamp($date_relle);
    $date_actuelle = time();

    if ($f_prono[$i] !== "undefined") {

      mysqli_query($idconnect, ("DELETE FROM phppro_pronostics 
                                 WHERE pronostic=' '"));

      $resultat = $idconnect->query("SELECT * 
                                     FROM phppro_matchs, phppro_pronostics, phppro_membres 
                                     WHERE phppro_membres.id_prono='$user_id'
                                     AND phppro_membres.id=phppro_pronostics.id_membre
                                     AND phppro_pronostics.id_match=phppro_matchs.id
                                     AND phppro_pronostics.id_match='$id_match[$i]'");
    
      $nb_prono = mysqli_num_rows($resultat);

      $resultat = $idconnect->query("SELECT id 
                                     FROM phppro_membres 
                                     WHERE id_prono='$user_id'");
  

      while ($row = mysqli_fetch_array($resultat)) {
        $id = $row["id"];
      }

      if ($nb_prono == "1") {
        if ($date_actuelle < ($date_match_timestamp + $temps_avant_prono * 60)) {
          mysqli_query($idconnect, ("UPDATE phppro_pronostics 
                                     SET pronostic='$f_prono[$i]'
                                     WHERE phppro_pronostics.id_membre='$id'
                                     AND phppro_pronostics.id_match='$id_match[$i]'"));
        }
      }
      if ($nb_prono == "0") {
        if ($date_actuelle < ($date_match_timestamp + $temps_avant_prono * 60)) {
          mysqli_query($idconnect, ("INSERT INTO phppro_pronostics (id_membre, pronostic, id_match, id_champ) 
                                     VALUES ('$id','$f_prono[$i]','$id_match[$i]', '$gr_champ')"));
        }
      } elseif ($nb_prono != "1" and $nb_prono != "0") {
        echo "erreur !<br />";
      }
    }
  }
  echo "<table><tr><td align=\"left\"><div class=\"bleu\"><font color=\"#FFFFFF\">" . PRONO_GRILLE_CONFIRME .PRONO_GRILLE_CONFIRME. "</font><br /><a href=\"index.php?page=pronos&amp;gr_champ=$gr_champ&amp;debut=$debut\"><font color=\"#FFFFFF\">" . RETOUR . "</font></a> - <a href=\"index.php?page=pronos&amp;debut=$fin&amp;gr_champ=$gr_champ\"><font color=\"#FFFFFF\">" . PRONO_GRILLE_PROCHAINE . "</font></a></div></td></tr></table>";
} elseif ($action !== "valid_pronos") {
  if ($debut == "0") {
    $prec = "index.php?page=derniers_pronos&amp;gr_champ=$gr_champ";
  } else {
    if (is_numeric($debut) && is_numeric($nb_matchs)) {
      $debut1 = $debut - $nb_matchs;
      $prec = "index.php?page=pronos&amp;
			debut=$debut1&amp;
			gr_champ=$gr_champ";
    }
  }


  include("pronos.htm");

  $resultat = $idconnect->query("
			 SELECT phppro_clubs.nom, CLEXT.nom, phppro_matchs.id, phppro_matchs.date_reelle, phppro_journees.numero
			 FROM phppro_clubs, phppro_clubs as CLEXT, phppro_matchs, phppro_journees, phppro_equipes, phppro_equipes as EXT, phppro_gr_championnats
			 WHERE phppro_clubs.id=phppro_equipes.id_club
			 AND CLEXT.id=EXT.id_club
			 AND phppro_equipes.id=phppro_matchs.id_equipe_dom
			 AND EXT.id=phppro_matchs.id_equipe_ext
			 AND phppro_matchs.id_journee=phppro_journees.id
			 AND phppro_journees.id_champ=phppro_gr_championnats.id_champ
			 AND phppro_gr_championnats.id='$gr_champ'
			 AND phppro_matchs.buts_dom is null
			 AND phppro_matchs.buts_ext is null
			 AND phppro_clubs.nom!='exempte'
			 AND CLEXT.nom!='exempte'
			 ORDER by phppro_matchs.date_reelle, phppro_clubs.nom
			 LIMIT $debut, $fin ");

  $i = 0;
  $x = 0;
  //$resultat=mysql_query($requete);




  if (mysqli_num_rows($resultat) == "0") {
    echo "<tr><td colspan=6 class=\"blanc center\">Journée Inexistante</td></tr>";
  }

  while ($row = mysqli_fetch_array($resultat) and $i < $nb_matchs) {
    $clubs_nom = stripslashes($row[0]);
    $clubs_nom1 = stripslashes($row[1]);
    $resultat2 = $idconnect->query(" SELECT pronostic 
									   FROM phppro_pronostics, phppro_membres 
									   WHERE phppro_pronostics.id_match='$row[2]' 
									   AND phppro_membres.id=phppro_pronostics.id_membre 
									   AND phppro_membres.id_prono='$user_id'");
 
    $nb_pronos = mysqli_num_rows($resultat2);


    if ($nb_pronos == "0") {
      $prono = "0";
    } {
      while ($row2 = mysqli_fetch_array($resultat2)) {
        $prono = $row2["0"];

        if ($row2["0"] == "") {
          $prono = "0";
        }
      }
    }

    $resultat2 = $idconnect->query("SELECT tps_avant_prono 
                                    FROM phppro_gr_championnats 
                                    WHERE id = '$gr_champ'");

    while ($row2 = mysqli_fetch_array($resultat2)) {
      $temps_avantmatch = $row2[0];
    }

    $date_match_timestamp = format_date_timestamp($row[3]);
    $date_actuelle = time();
    $ecart_secondes = $date_match_timestamp - $date_actuelle;
    $ecart_heures = floor($ecart_secondes / (60 * 60)) - $temps_avantmatch;
    $ecart_minutes = floor($ecart_secondes / 60) - $temps_avantmatch * 60;
    $ecart_jours = floor($ecart_secondes / (60 * 60 * 24) - $temps_avantmatch / 60);
    $date = format_date_fr_red($row[3]);

    echo "<tr><td class=\"blanc center\">$row[4]</td>";
    echo "<td class=\"blanc\">$date</td>";
    echo "<td align=\"right\" class=\"blanc\">$clubs_nom</td>";

    if ($ecart_heures >= "0") {
      $x++;
      echo "<td>";
      echo "<input type=\"hidden\" name=\"id_match_$x\" value=\"$row[2]\">";
?><input type="hidden" value="1" name="r_<?php echo $x; ?>">

      <table  width="100">
        <tr>
          <td class= "center">
         
            <?php
          
            //$prono=1;
            if ($prono == "0") {
              //  echo "0";
            ?>
              <a href="javascript:Change(<?php echo $x; ?>,1);"><img src="affiche1.gif" name="m<?php echo $x; ?>_1" alt=""></a>
              <a href="javascript:Change(<?php echo $x; ?>,0);"><img src="afficheN.gif" name="m<?php echo $x; ?>_0" alt=""></a>
              <a href="javascript:Change(<?php echo $x; ?>,2);"><img src="affiche2.gif" name="m<?php echo $x; ?>_2" alt=""></a>
            <?php
            }

            if ($prono == "1") {
            ?>
              <a href="javascript:Change(<?php echo $x; ?>,1);"><img src="affiche_selection.gif" name="m<?php echo $x; ?>_1" alt=""></a>
              <a href="javascript:Change(<?php echo $x; ?>,0);"><img src="afficheN.gif" name="m<?php echo $x; ?>_0" alt=""></a>
              <a href="javascript:Change(<?php echo $x; ?>,2);"><img src="affiche2.gif" name="m<?php echo $x; ?>_2" alt=""></a>
            <?php
            }

            if ($prono == "N") {
            ?>
              <a href="javascript:Change(<?php echo $x; ?>,1);"><img src="affiche1.gif" name="m<?php echo $x; ?>_1" alt=""></a>
              <a href="javascript:Change(<?php echo $x; ?>,0);"><img src="affiche_selection.gif" name="m<?php echo $x; ?>_0" alt=""></a>
              <a href="javascript:Change(<?php echo $x; ?>,2);"><img src="affiche2.gif" name="m<?php echo $x; ?>_2" alt=""></a>
            <?php
            }

            if ($prono == "2") {
            ?>
              <a href="javascript:Change(<?php echo $x; ?>,1);"><img src="affiche1.gif" name="m<?php echo $x; ?>_1" alt=""></a>
              <a href="javascript:Change(<?php echo $x; ?>,0);"><img src="afficheN.gif" name="m<?php echo $x; ?>_0" alt=""></a>
              <a href="javascript:Change(<?php echo $x; ?>,2);"><img src="affiche_selection.gif" name="m<?php echo $x; ?>_2" alt=""></a>
            <?php
            }
            echo "</td></tr></table></td>";
           } else {
            echo "<td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\">\n";
            echo "<tr>\n";
            echo "<td width=\"45\" height=\"10\" valign=\"middle\" align=\"center\">\n";
            echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"50\">\n<tr>\n<td>\n";

            if ($prono == "1") {
            ?>
              <img src="affiche_selection.gif"><img src="afficheN.gif"><img src="affiche2.gif">
            <?php
            }

            if ($prono == "N") {
            ?>
              <img src="affiche1.gif"><img src="affiche_selection.gif"><img src="affiche2.gif">
            <?php
            }

            if ($prono == "2") {
            ?>
              <img src="affiche1.gif"><img src="afficheN.gif"><img src="affiche_selection.gif">
            <?php
            }

            if ($prono == "0") {
            ?>
              <img src="affiche1.gif"><img src="afficheN.gif"><img src="affiche2.gif">
               <?php
            }
            echo "</td></tr></table>";
            echo "</td></tr></table></td>";
          }

          echo "<td class=\"blanc\">$clubs_nom1</td><td align=center>";

          if ($ecart_heures > 48) echo "<div class=\"blanc\">$ecart_jours jours</div>";
          elseif ($ecart_heures > 0) echo "<div class=\"blanc\">$ecart_heures h</div>";
          elseif ($ecart_heures == 0) echo "<div class=\"blanc\">$ecart_minutes min</div>";
          else {
            echo "<div class=\"blanc\">" . PRONO_GRILLE_EXPIRE . "</div>";
          }
          echo "</td>";
          echo "</tr>";
          $i++;
        }
        ?>
        <tr>
          <td colspan="6" align="center">
            <input type="hidden" name="action" value="valid_pronos">
            <input type="hidden" name="nb_fiche" value="<?php echo $x; ?>">
            <input type="hidden" name="debut" value="<?php echo $debut; ?>"><br />
            <a href="index.php?page=pronos&amp;action=reset&amp;debut=<?php echo $debut; ?>&amp;gr_champ=<?php echo "$gr_champ"; ?>"><img border="0" src="btn_ANNULER.gif" alt=""></a>
            <a href="javascript:ValideGrille(<?php echo $x; ?>);"><img border="0" src="btn_VALIDER.gif" alt=""></a>
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