<?php
// nombres de journees d un championnat
function nb_journees($id_champ, $idconnect)
  {       
   global $nb_journees;
   $result= $idconnect->query("
			SELECT id 
			FROM phpfed2_equipes 
			WHERE id_champ='$id_champ'");
         
    $nb_equipes=mysqli_num_rows( $result );
    $nb_journees=((($nb_equipes)*2)-2) ;
    return("$nb_journees");
   }

	
// Nombres d equipes dans un championnat
function nb_equipes($id_champ, $idconnect)
   {	 
	global $nb_equipes;
	$res = $idconnect->query("
		   SELECT id 
		   FROM phpfed2_equipes 
		   WHERE id_champ='$id_champ'");

    $nb_equipes=mysqli_num_rows($res);
    return("$nb_equipes");	
	}
	
// affichage d'une journée
function aff_journee($champ, $numero, $legende, $proba, $idconnect)
{
    // cellule d'affichage des derniers résultats
	$color=0;

	$result = $idconnect->query("
		  SELECT cldom.nom as cldom, clext.nom as clext, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext,
                 phpfed2_journees.date_prevue, cldom.id as cliddom, clext.id as clidext, date_reelle,
                 dom.id as eqdom, ext.id as eqext, phpfed2_matchs.id as id_match
          FROM phpfed2_equipes as dom, phpfed2_equipes as ext, phpfed2_matchs, phpfed2_journees,
               phpfed2_clubs as cldom, phpfed2_clubs as clext
          WHERE phpfed2_matchs.id_equipe_dom=dom.id
          AND phpfed2_matchs.id_equipe_ext=ext.id
          AND phpfed2_journees.id_champ='$champ'
          AND phpfed2_journees.numero='$numero'
          AND dom.id_club=cldom.id
          AND ext.id_club=clext.id
          AND phpfed2_matchs.id_journee=phpfed2_journees.id
          AND cldom.nom!='exempte'
          AND clext.nom!='exempte'
          ORDER BY date_reelle ASC");
       
    //mise en forme tableau oppositions
    echo "<table align=\"center\" class=\"tablephpfed22\"  width=\"100%\" cellspacing=\"1\" cellpadding=\"1\"><tr><td><table cellspacing=\"0\" align=\"center\" width=\"100%\" cellpadding=\"1\">\n";
    $x=1;
    $minute = 0;
    $heure = 0;
    $jour = 0;
    $mois = 0;
    $annee = 0;

    while ($row=mysqli_fetch_array($result))
    {
      $clubs_nom = stripslashes($row[0]);
      $clubs_nom1 = stripslashes($row[1]);
      $domproba= $row[2];
      $extproba= $row[3];
 
     if ($x==1)
     {
     echo "<tr class=\"trphpfed23\">\n<th colspan=\"5\"><b>".$legende." ". $numero."</b></th>\n</tr>";
     }

     $bgcolor="#FFFFFF";

     if (($color%2)==0) 
		{$classe="ligne1";} 
	 else 
		{$classe="ligne2";}


     if (!($annee==substr($row[7],0,4)) or !($mois==substr($row[7],5,2)) or !($jour==substr($row[7],8,2)) or !($minute==substr($row[7],14,2)) or !($heure==substr($row[7],11,2)))
        {
         $minute = substr($row[7],14,2); // on récupère la minute
         $heure = substr($row[7],11,2); // on récupère l'heure
         $jour = substr($row[7],8,2); // on récupère le jour
         $mois = substr($row[7],5,2); // puis le mois
         $annee = substr($row[7],0,4); // et l'annee

         setlocale(LC_TIME, 'fr_FR.utf8','fra');
         $t= mktime($heure,$minute,0,$mois,$jour,$annee);

         echo "<tr class=\"date\"><td colspan=\"5\" align=\"center\">";

         echo ucfirst(strftime("%A ",$t));
         echo strftime("%d %B ",$t);
         echo strftime("- %Hh%M",$t);
         echo "</td></tr>";

         $color_cell=$bgcolor;
        }

     echo "<tr class=\"$classe\">";
	 echo "<td align=\"right\" width=\"40%\">"."".$clubs_nom.""."</td><td align=\"center\">".$domproba." - ".$extproba."</a></td><td align=\"left\" width=\"40%\">"."".$clubs_nom1.""."</td>";
	 echo "</tr>\n";
                
	 $x++;
     $color+=1;
    }
    
	 echo "</table></td></tr></table>\n<br />\n";
}

//affichage du classement
function clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche, $idconnect)
{
 $comite="phpfed2";	
 echo "<table class=\"tablephpfed22\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpfed23\"><th colspan=\"11\">".$legende."</th></tr>\n";
 echo "<tr class=\"trphpfed23\">
 <th align=\"center\">".CLMNT_POSITION."</th>
 <th align=\"left\">".CLMNT_EQUIPE."</th>
 <th align=\"left\">".CLMNT_POINTS."</th>\n";
 echo "<th align=\"left\">".CLMNT_JOUES."</th>

 <th align=\"left\"></th></tr>\n";

 $pl=1;

 while ($row=mysqli_fetch_array($requete))
    {
     if ($row['NOM']==EXEMPT){continue;}
     if ($pl<=$accession and $type==GENERAL){echo "<tr class=\"accession\">";}
     elseif ($pl<=$barrage and $type==GENERAL){echo "<tr class=\"barrage\">";}
     elseif ($pl>$relegation and $type==GENERAL){echo "<tr class=\"relegation\">";}
     elseif (($pl%2)==0){echo "<tr class=\"ligne1\">";}
     else{echo "<tr class=\"ligne2\">";}

     echo "<td align=\"center\">$pl</td>";
     $pl++;
     $x=0;

	 while($x<3)
		{
		 echo "<td>";
		 
		 if ($x==0)
			{echo "<a href=/resultats/bilan/page_bilan.php?comite=$comite&amp;champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']." target=\"_top\">$row[$x]</a>";}
		 else
			{print $row[$x];}
		 
		 $x++;
		}
    }
    echo "</table>";
}
?>
