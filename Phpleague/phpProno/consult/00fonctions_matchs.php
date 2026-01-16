<?php
//***********************************************************************/
// phpPronoeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpPronoeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpPronoeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

function ENTETE2()
{
 ?>


      </td>
    </tr>
  </table>
</div>
<br />
<?php
}


// nombres de journees d un championnat

function nb_journees($id_champ, $idconnect)
         {
        global $nb_journees;
$result=$idconnect->query("SELECT id FROM phpProno_equipes WHERE id_champ='$id_champ'");
         //$result=mysql_query($query);
         $nb_equipes=mysqli_num_rows( $result );
         $nb_journees=((($nb_equipes)*2)-2) ;
        // return("$nb_journees");
         }

// Nombres d equipes dans un championnat
function nb_equipes($id_champ, $idconnect)
         {	 
 $res=$idconnect->query("SELECT id 
						 FROM phpProno_equipes 
						 WHERE id_champ='$id_champ'");
		   
		 $nb_equipes=mysqli_num_rows($res);
         return("$nb_equipes");	
		// echo "nombre d'equipes : ".$nb_equipes;		 
        // $query="SELECT id FROM phpProno_equipes WHERE id_champ='$id_champ'";
        // $result=mysql_query($query);
        // $nb_equipes=mysql_num_rows( $result );
        // return("$nb_equipes");

		}

function aff_journee($champ, $bdd)
{
  $legende="Journ&eacute;e N&deg;";
  $color=0;
 // echo $champ;echo "</br>";
  if (isset ($journee)) $journee = $journee; else $journee =($champ*1000)+01;
  
  $res3=$bdd->query("SELECT phpProno_matchs.id_journee
					 FROM phpProno_journees, phpProno_matchs 
					 WHERE phpProno_journees.id = phpProno_matchs.id_journee 
					 AND phpProno_matchs.buts_dom is not NULL 
					 AND phpProno_matchs.buts_ext is not NULL
					 AND phpProno_journees.id_champ = '$champ'
					 ORDER BY phpProno_matchs.id_journee asc");
    
        while ($row=$res3->fetch())
        {
        $journee=$row[0];
        }
		
 // echo "journee : ".$journee;echo "</br>";
  
 
  $numero=substr($journee,-2);
 //echo $numero;
 // echo "</br>";
  $result=$bdd->query("SELECT cldom.nom as cldom, clext.nom as clext, phpProno_matchs.buts_dom, phpProno_matchs.buts_ext,
                        phpProno_journees.date_prevue, cldom.id as cliddom, clext.id as clidext, date_reelle,
                        dom.id as eqdom, ext.id as eqext, phpProno_matchs.id as id_match
                FROM phpProno_equipes as dom, phpProno_equipes as ext, phpProno_matchs, phpProno_journees,
                     phpProno_clubs as cldom, phpProno_clubs as clext
                WHERE phpProno_matchs.id_equipe_dom=dom.id
                        AND phpProno_matchs.id_equipe_ext=ext.id
                        AND phpProno_journees.id_champ='$champ'
                        AND phpProno_journees.numero='$numero'
                        AND dom.id_club=cldom.id
                        AND ext.id_club=clext.id
                        AND phpProno_matchs.id_journee=phpProno_journees.id
                        AND cldom.nom!='exempte'
                        AND clext.nom!='exempte'
                        ORDER BY date_reelle asc");

  //mise en forme tableau oppositions
  echo "<br />";
  echo "<table align=\"center\" class=\"tablephpProno2\"  width=\"90%\" cellspacing=\"1\" cellpadding=\"1\"><tr><td><table cellspacing=\"0\" align=\"center\" width=\"100%\" cellpadding=\"1\">\n";
  $x=1;
  $minute = 0;  $heure = 0;  $jour = 0;  $mois = 0;  $annee = 0;

  while ($row=$result->fetch())
    {
      $clubs_nom = $row[0];
     $clubs_nom1 = $row[1];
     $domproba= $row[2];
     $extproba= $row[3];
      
	 
	 
	 
	 
	/* 
	 if ($row['buts_dom']=='' and $row['buts_ext']=='' and $numero>=4)
      {
       $result2=$bdd->query("SELECT DOMBUTSPOUR, DOMG, DOMN, DOMP, DOMBUTSCONTRE 
							 FROM phpProno_clmnt_cache 
							 WHERE ID_EQUIPE='$row[eqdom]'");
               
       while ($row2=$result2->fetch())
        { 
         $dom_buts=($row2['DOMBUTSPOUR']);
         $dom_joues=($row2['DOMG']+$row2['DOMN']+$row2['DOMP']);
         $ext_buts=($row2['DOMBUTSCONTRE']);
         $ext_joues=($row2['DOMG']+$row2['DOMN']+$row2['DOMP']);
        }

      $result2=$bdd->query("SELECT EXTG, EXTN, EXTP, EXTBUTSCONTRE, EXTBUTSPOUR 
						    FROM phpProno_clmnt_cache 
						    WHERE ID_EQUIPE='$row[eqext]'");
               
      while ($row2=$result2->fetch())
        {
         $dom_joues+=($row2['EXTG']+$row2['EXTN']+$row2['EXTP']);
         $ext_joues+=$row2['EXTG']+$row2['EXTN']+$row2['EXTP'];
         $dom_buts+=($row2['EXTBUTSCONTRE']);
         $ext_buts+=($row2['EXTBUTSPOUR']);
         $dom_buts=intval((($dom_buts)/$dom_joues));
         $ext_buts=intval((($ext_buts)/$ext_joues));
        }

     $domproba="<font size=\"2\">".$dom_buts."</font>";
     $extproba="<font size=\"2\">".$ext_buts."</font>";
    }
*/
    if ($x==1)
     {
      echo "<tr class=\"trphpProno3\">\n<th colspan=\"3\"><b>".$legende." ". $numero."</b></th>\n</tr>";
     }

     
	 $bgcolor="#FFFFFF";

     if (($color%2)==0) {$classe="ligne1";} else {$classe="ligne2";}


                //echo "<tr bgcolor=\"$bgcolor\" class=\"trphpProno\">";

                //if (($minute==substr($row[7],14,2)) and ($heure==substr($row[7],11,2)) and ($jour==substr($row[7],8,2)) and ($mois==substr($row[7],5,2)) and ($annee==substr($row[7],0,4)))
                if (!($annee==substr($row[7],0,4)) or !($mois==substr($row[7],5,2)) or !($jour==substr($row[7],8,2)) or !($minute==substr($row[7],14,2)) or !($heure==substr($row[7],11,2)))
                {

                $minute = substr($row[7],14,2); // on récupère la minute
                $heure = substr($row[7],11,2); // on récupère l'heure
                $jour = substr($row[7],8,2); // on récupère le jour
                $mois = substr($row[7],5,2); // puis le mois
                $annee = substr($row[7],0,4); // et l'annee

                setlocale(LC_TIME, 'fr_FR.utf8','fra');
                $t= mktime($heure,$minute,0,$mois,$jour,$annee);

                echo "<tr class=\"date\"><td colspan=\"3\" align=\"left\" ><font color=\"#FFffff\" >";

                echo ucfirst(strftime("%A ",$t));
                echo strftime("%d %B ",$t);
                echo strftime("- %Hh%M",$t);
                echo "</font></td></tr>";

                $color_cell=$bgcolor;
                }

                echo "<tr class=\"$classe\">";


                $activ_prono=0;
				
				
			if ($domproba > $extproba)	
			echo "<td class=\"domicile\">"."<b>".$clubs_nom."</b>"."</td>";
			else
			echo "<td class=\"domicile\">".$clubs_nom."</td>";
			
			
			echo "<td class=\"tiret\">".$domproba.' - '.$extproba."</td>";
		   
			if ($domproba < $extproba)
			echo "<td class=\"exterieur\">"."<b>".$clubs_nom1."<b>"."</td>";

			else
			echo "<td class=\"exterieur\">".$clubs_nom1."</td>";	
			
			
?>
			<!--   
			<td><div align="right" width="40%"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><?php echo $DebMarqueur1.$clubs_nom.$FinMarqueur1;?></font></div></td>
			<td><div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><?php echo $domproba.' - '.$extproba;?></font></div></td>
		    <td><div align="left" width="40%"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><?php echo$DebMarqueur2.$clubs_nom1.$FinMarqueur2;?></font></div></td>		   
--->
<?php
                echo "</tr>\n";
                $x++;
                $color+=1;

              }
 
    echo "</table></td></tr></table>\n<br />\n";
	echo "<br />";
}
  
  
function aff_journeeSupp($champ, $bdd)
{

 // cellule d'affichage des derniers résultats
 $color=0;
 $legende="Prochaine journ&eacute;e N&deg;";
  if (isset ($journee)) $journee = $journee; else $journee =($champ*1000)+01;
 $res3=$bdd->query("SELECT phpProno_matchs.id_journee
					FROM phpProno_journees, phpProno_matchs 
					WHERE phpProno_journees.id = phpProno_matchs.id_journee 
					AND phpProno_matchs.buts_dom is not NULL 
					AND phpProno_matchs.buts_ext is not NULL
					AND phpProno_journees.id_champ='$champ'
					ORDER BY phpProno_matchs.id_journee asc");
    
        while ($row=$res3->fetch())
        {
        $journee=$row[0];
        }
  //echo $journee; echo "</br>";
  $numero=substr($journee,-2);
  $journeeSupp = $numero+1;
  //echo $journeeSupp;

 $result=$bdd->query("SELECT cldom.nom as cldom, clext.nom as clext, phpProno_matchs.buts_dom, phpProno_matchs.buts_ext,
                        phpProno_journees.date_prevue, cldom.id as cliddom, clext.id as clidext, date_reelle,
                        dom.id as eqdom, ext.id as eqext, phpProno_matchs.id as id_match
                FROM phpProno_equipes as dom, phpProno_equipes as ext, phpProno_matchs, phpProno_journees,
                     phpProno_clubs as cldom, phpProno_clubs as clext
                WHERE phpProno_matchs.id_equipe_dom=dom.id
                        AND phpProno_matchs.id_equipe_ext=ext.id
                        AND phpProno_journees.id_champ='$champ'
                        AND phpProno_journees.numero='$journeeSupp'
                        AND dom.id_club=cldom.id
                        AND ext.id_club=clext.id
                        AND phpProno_matchs.id_journee=phpProno_journees.id
                        AND cldom.nom!='exempte'
                        AND clext.nom!='exempte'
                        ORDER BY date_reelle asc");

//mise en forme tableau oppositions
echo "<br />";
echo "<table align=\"center\" class=\"tablephpProno2\"  width=\"90%\" cellspacing=\"1\" cellpadding=\"1\"><tr><td><table cellspacing=\"0\" align=\"center\" width=\"100%\" cellpadding=\"1\">\n";
$x=1;
$minute = 0;$heure = 0;  $jour = 0; $mois = 0;$annee = 0;

    while ($row=$result->fetch())
    {
     $clubs_nom = $row[0];
     $clubs_nom1 = $row[1];
	 
       if ($x==1)
       {echo "<tr class=\"trphpProno3\">\n<th colspan=\"5\"><b>".$legende." ". $journeeSupp."</b></th>\n</tr>";}

       //$bgcolor="#FF0000";

       if (($color%2)==0) {$classe="ligne1";} else {$classe="ligne2";}
          
	   if (!($annee==substr($row[7],0,4)) or !($mois==substr($row[7],5,2)) or !($jour==substr($row[7],8,2)) or !($minute==substr($row[7],14,2)) or !($heure==substr($row[7],11,2)))
       {
        $minute = substr($row[7],14,2); // on récupère la minute
        $heure = substr($row[7],11,2); // on récupère l'heure
        $jour = substr($row[7],8,2); // on récupère le jour
        $mois = substr($row[7],5,2); // puis le mois
        $annee = substr($row[7],0,4); // et l'annee

        setlocale(LC_TIME, 'fr_FR.utf8','fra');
        $t= mktime($heure,$minute,0,$mois,$jour,$annee);

        echo "<tr bgcolor= \"#ff0000\" color=\"#ffffff\"><td colspan=\"5\" ><font color=\"#ffffff\">";

        echo ucfirst(strftime("%A ",$t));
        echo strftime("%d %B ",$t);
        echo strftime("- %Hh%M",$t);
        echo "</font></td></tr>";

       // $color_cell=$bgcolor;
       }
	
     echo "<tr class=\"$classe\">";       
 		   
	


	 echo "<td class=\"domicile\">".$clubs_nom."</td>";	
     echo "<td class=\"tiret\">"."-"."</td>";	 
	 echo "<td class=\"exterieur\">".$clubs_nom1."</td>";   
     echo "</tr>\n";
     $x++;
     $color+=1;
    }
  echo "</table></td></tr></table>\n<br />\n";
  echo "<br />";
}


// *** REMPLI LA TABLE CLMNT
function db_clmnt($champ, $debut, $fin, $cache, $idconnect)
{
	 
  $nb_requete=0;

  if($cache=="1"){ 
  mysqli_query("DELETE FROM phpProno_clmnt_cache WHERE ID_CHAMP='$champ'") or die (mysqli_error());
  }
  else{ 
  mysqli_query("DELETE FROM phpProno_clmnt") or die (mysqli_error());}
          $nb_requete++;

          if (!$fin){$fin=(nb_equipes($champ)*2)-2;}
          if (!$debut){$debut=1;}

// SELECTION DES PARAMETRES
$resultats=$idconnect->query=("SELECT pts_victoire, pts_nul, pts_defaite FROM phpProno_parametres WHERE id_champ='$champ'");
$nb_requete++;
//$result=(mysql_query($query)) or die (mysql_error()) ;
      while ($row=mysqli_fetch_array($resultats) )
      {
      $pts_victoire=$row['pts_victoire'];
      $pts_nul=$row['pts_nul'];
      $pts_defaite=$row['pts_defaite'];
      }

// victoires domicile
$resultats=$idconnect->query("SELECT dom.id, count(dom.id), phpProno_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpProno_equipes as dom, phpProno_clubs, phpProno_matchs, phpProno_journees, phpProno_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpProno_clubs.id
      AND dom.id=phpProno_matchs.id_equipe_dom
      AND buts_dom > buts_ext
      AND phpProno_championnats.id=phpProno_journees.id_champ
      AND phpProno_journees.id=phpProno_matchs.id_journee
      AND phpProno_journees.numero>='$debut'
      AND phpProno_journees.numero<='$fin'
      GROUP by phpProno_clubs.nom ");
      $nb_requete++;
//$dom = mysqli_query($query) or die (mysqli_error());
     while($row= mysqli_fetch_array($resultats))
     {
     $clmnt[$row[2]]['GDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     }

// Defaites domicile
$dom=$idconnect->query("SELECT dom.id, count(dom.id), phpProno_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpProno_equipes as dom, phpProno_clubs, phpProno_matchs, phpProno_journees, phpProno_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpProno_clubs.id
      AND dom.id=phpProno_matchs.id_equipe_dom
      AND buts_dom < buts_ext
      AND phpProno_championnats.id=phpProno_journees.id_champ
      AND phpProno_journees.id=phpProno_matchs.id_journee
      AND phpProno_journees.numero>='$debut'
      AND phpProno_journees.numero<='$fin'
      GROUP by phpProno_clubs.nom ");

       //$dom = mysql_query($query) or die (mysql_error());

     while($row= mysqli_fetch_array($dom))
     {
     $clmnt[$row[2]]['PDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     }
// Nuls domicile
$dom=$idconnect->query("SELECT dom.id, count(dom.id), phpProno_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpProno_equipes as dom, phpProno_clubs, phpProno_matchs, phpProno_journees, phpProno_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpProno_clubs.id
      AND dom.id=phpProno_matchs.id_equipe_dom
      AND buts_dom = buts_ext
      AND buts_dom is not null
      AND buts_ext is not null
      AND phpProno_championnats.id=phpProno_journees.id_champ
      AND phpProno_journees.id=phpProno_matchs.id_journee
      AND phpProno_journees.numero>='$debut'
      AND phpProno_journees.numero<='$fin'
      GROUP by phpProno_clubs.nom ");

//$dom = mysqli_query($query) or die (mysqli_error());

     while($row= mysqli_fetch_array($dom))
     {
     $clmnt[$row[2]]['NDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     }
// Resultats à domicile
$result=$idconnect->query("SELECT phpProno_clubs.nom FROM phpProno_clubs, phpProno_equipes, phpProno_championnats
WHERE phpProno_equipes.id_champ=phpProno_championnats.id
      AND phpProno_championnats.id='$champ'
      AND phpProno_equipes.id_club=phpProno_clubs.id");

$result=mysqli_query($query) or die (mysqli_error());

        
// RESULTATS EXTERIEURS :
// victoires exterieur
$dom=$idconnect->query("SELECT ext.id, count(ext.id), phpProno_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpProno_equipes as ext, phpProno_clubs, phpProno_matchs, phpProno_journees, phpProno_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpProno_clubs.id
      AND ext.id=phpProno_matchs.id_equipe_ext
      AND buts_ext > buts_dom
      AND phpProno_championnats.id=phpProno_journees.id_champ
      AND phpProno_journees.id=phpProno_matchs.id_journee
      AND phpProno_journees.numero>='$debut'
      AND phpProno_journees.numero<='$fin'
      GROUP by phpProno_clubs.nom ");

//$dom = mysql_query($query) or die (mysql_error());;


     while($row= mysqli_fetch_array($dom))
     {
     $clmnt[$row[2]]['GEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}

     }
// Defaites exterieur
$dom=$idconnect->query("SELECT ext.id, count(ext.id), phpProno_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpProno_equipes as ext, phpProno_clubs, phpProno_matchs, phpProno_journees, phpProno_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpProno_clubs.id
      AND ext.id=phpProno_matchs.id_equipe_ext
      AND buts_ext < buts_dom
      AND phpProno_championnats.id=phpProno_journees.id_champ
      AND phpProno_journees.id=phpProno_matchs.id_journee
      AND phpProno_journees.numero>='$debut'
      AND phpProno_journees.numero<='$fin'
      GROUP by phpProno_clubs.nom ");

//$dom=mysql_query($query) or die (mysql_error());
                    
      While($row= mysqli_fetch_array($dom))
      {
      $clmnt[$row[2]]['PEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
      }

// Nuls exterieur
$dom=$idconnect->query("SELECT ext.id, count(ext.id), phpProno_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpProno_equipes as ext, phpProno_clubs, phpProno_matchs, phpProno_journees, phpProno_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpProno_clubs.id
      AND ext.id=phpProno_matchs.id_equipe_ext
      AND buts_ext = buts_dom
      AND buts_dom is not null
      AND buts_ext is not null
      AND phpProno_championnats.id=phpProno_journees.id_champ
      AND phpProno_journees.id=phpProno_matchs.id_journee
      AND phpProno_journees.numero>='$debut'
      AND phpProno_journees.numero<='$fin'
      GROUP by phpProno_clubs.nom ");


//$dom=mysql_query($query) or die (mysql_error());;

      while($row= mysqli_fetch_array($dom))
      {
      $clmnt[$row[2]]['NEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
      }
                 
// TABLEAU DE CLASSEMENT
$result=$idconnect->query("SELECT phpProno_clubs.nom, phpProno_equipes.penalite, phpProno_equipes.id
        FROM phpProno_clubs, phpProno_equipes, phpProno_championnats
        WHERE phpProno_equipes.id_champ=phpProno_championnats.id
        AND phpProno_championnats.id='$champ'
        AND phpProno_equipes.id_club=phpProno_clubs.id");

//$result=mysqli_query($query) or die (mysqli_error());

//mysql_query("LOCK TABLE phpProno_clmnt WRITE, phpProno_equipes WRITE, phpProno_clubs WRITE") or die (mysql_error());

    if (mysqli_num_rows($result)==0)
    {
    $result="SELECT phpProno_clubs.nom, phpProno_equipes.id 
            FROM phpProno_clubs, phpProno_equipes, phpProno_championnats
            WHERE phpProno_equipes.id_champ=phpProno_championnats.id
            AND phpProno_championnats.id='$champ'
            AND phpProno_equipes.id_club=phpProno_clubs.id";

   //$result=mysqli_query($query) or die (mysqli_error());
    }

    while($row = mysqli_fetch_array($result))
    {
    $NOM=$row['nom'];
    $DOMJOUES=$clmnt[$NOM]['GDOM']+$clmnt[$NOM]['NDOM'] + $clmnt[$NOM]['PDOM'];
    $EXTJOUES=$clmnt[$NOM]['GEXT']+$clmnt[$NOM]['NEXT'] + $clmnt[$NOM]['PEXT'];
    $JOUES=$EXTJOUES + $DOMJOUES;
    $DOMPOINTS=(($clmnt[$NOM]['GDOM'])*$pts_victoire) + (($clmnt[$NOM]['NDOM'])*$pts_nul) + (($clmnt[$NOM]['PDOM'])*$pts_defaite);
    $EXTPOINTS=(($clmnt[$NOM]['GEXT'])*$pts_victoire) + (($clmnt[$NOM]['NEXT'])*$pts_nul) + (($clmnt[$NOM]['PEXT'])*$pts_defaite);
    $POINTS= $DOMPOINTS+ $EXTPOINTS + $row['penalite'];
    $G=($clmnt[$NOM]['GEXT'])+($clmnt[$NOM]['GDOM']);
    $N=($clmnt[$NOM]['NEXT'])+($clmnt[$NOM]['NDOM']);
    $P=$clmnt[$NOM]['PEXT'] + $clmnt[$NOM]['PDOM'];
    $DOMG=($clmnt[$NOM]['GDOM']);
    $DOMN=($clmnt[$NOM]['NDOM']);
    $DOMP=$clmnt[$NOM]['PDOM'];
    $EXTG=($clmnt[$NOM]['GEXT']);
    $EXTN=($clmnt[$NOM]['NEXT']);
    $EXTP=$clmnt[$NOM]['PEXT'];
    $BUTSPOUR=$clmnt[$NOM]['BUTSEXTPOUR'] + $clmnt[$NOM]['BUTSDOMPOUR'];
    $DOMBUTSPOUR=$clmnt[$NOM]['BUTSDOMPOUR'];
    $EXTBUTSPOUR=$clmnt[$NOM]['BUTSEXTPOUR'];
    $BUTSCONTRE=$clmnt[$NOM]['BUTSEXTCONTRE'] + $clmnt[$NOM]['BUTSDOMCONTRE'];
    $DOMBUTSCONTRE= $clmnt[$NOM]['BUTSDOMCONTRE'];
    $EXTBUTSCONTRE=$clmnt[$NOM]['BUTSEXTCONTRE'] ;
    $DIFF=$BUTSPOUR - $BUTSCONTRE;
    $DOMDIFF=$DOMBUTSPOUR-$DOMBUTSCONTRE;
    $EXTDIFF=$EXTBUTSPOUR - $EXTBUTSCONTRE;
    $PEN = $row['penalite'];
    $NOM=addslashes($row['nom']);

    $question="INSERT INTO ";

    if($cache=="1"){$question.="phpProno_clmnt_cache ";}
    else{$question.="phpProno_clmnt ";}
            
    $question.="SET NOM='$NOM',
          ID_EQUIPE='$row[id]',
          ID_CHAMP='$champ',
          POINTS='$POINTS',
          DOMPOINTS='$DOMPOINTS',
          EXTPOINTS='$EXTPOINTS',
          JOUES= '$JOUES',
          DOMJOUES= '$DOMJOUES',
          EXTJOUES= '$EXTJOUES',
          G='$G',
          DOMG='$DOMG',
          EXTG='$EXTG',
          N='$N',
          DOMN='$DOMN',
          EXTN='$EXTN',
          P='$P',
          DOMP='$DOMP',
          EXTP='$EXTP',
          BUTSPOUR='$BUTSPOUR',
          DOMBUTSPOUR='$DOMBUTSPOUR',
          EXTBUTSPOUR='$EXTBUTSPOUR',
          BUTSCONTRE='$BUTSCONTRE',
          DOMBUTSCONTRE='$DOMBUTSCONTRE',
          EXTBUTSCONTRE='$EXTBUTSCONTRE',
          DIFF='$DIFF',
          DOMDIFF='$DOMDIFF',
          EXTDIFF='$EXTDIFF',
          PEN='$PEN'";
          $result2=mysqli_query($question) or die(mysqli_error());

    }
    
if($cache=="1")
	{
	mysqli_query($idconnect, ("DELETE FROM phpProno_clmnt_cache WHERE nom='exempte'"));
	}
else
	{
	mysqli_query($idconnect, ("DELETE FROM phpProno_clmnt WHERE nom='exempte'"));
	}

//$resultat=mysqli_query($requete) or die (mysqli_error());
//mysql_query("UNLOCK TABLES") or die (mysql_error());
}

function clmnt($champ,  $bdd)
{
  $comite ="phpProno";
  $lien="oui";
  $type= "GENERAL";
  $legende = "";
 
 //barèmes du championnat
 $res=$bdd->query("SELECT accession, barrage, relegation 
				   FROM phpProno_parametres 
				   WHERE ID_CHAMP='$champ' 
								");

 while ($row = $res->fetch())
	{
	$accession = $row[0];
	$barrage = $row[1];
	$relegation =  $row[2]; 
	}
	
	
  $res=$bdd->query("SELECT count(*) 
						 FROM phpProno_equipes 
						 WHERE id_champ='$champ'");
		   
  $nb_equipes=$res->fetch();
  
  
  echo "<table class=\"tablephpProno2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpProno3\"><th colspan=\"11\">".$legende."</th></tr>\n";
  echo "<tr class=\"trphpProno3\">

  <th align=\"center\">".CLMNT_POSITION."</th>
  <th align=\"left\">".CLMNT_EQUIPE."</th>
  <th align=\"left\">".CLMNT_POINTS."</th>\n";
  echo "<th align=\"left\">".CLMNT_JOUES."</th>
  <th align=\"left\"></th></tr>\n";

 //  if (isset ($legende)) $legende =$legende;else $legende= "";
 // if ($debut=="1" and $fin==$nb_journees)
 // {
	$nom = array();
	$points= array();
	$joues = array();
	$id_equipe = array();

	$res=$bdd->query("SELECT NOM, POINTS, JOUES, ID_EQUIPE 
								FROM phpProno_clmnt_cache 
								WHERE ID_CHAMP='$champ' 
								ORDER BY POINTS DESC, PEN DESC, DIFF DESC, BUTSPOUR DESC , BUTSCONTRE 
								ASC, NOM");

	//echo "<table class=\"tablephpProno2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpProno3\"><th colspan=\"11\">".$legende."</th></tr>\n";
	//echo "<tr class=\"trphpProno3\>";

	$pl=1;

	while ($row = $res->fetch())
	{
      if ($row['NOM']==EXEMPT){continue;}
      if ($pl<=$accession){echo "<tr class=\"accession\">";}
      elseif ($pl<=$barrage){echo "<tr class=\"barrage\">";}
	  elseif ($pl==$nb_equipes[0]-1){echo "<tr class=\"relegation\">";}
      elseif ($pl==$nb_equipes[0]){echo "<tr class=\"relegation\">";}
      elseif (($pl%2)==0){echo "<tr class=\"ligne1\">";}
      else{echo "<tr class=\"ligne2\">";}
		
	  //colonne 1
      echo "<td><div align=\"center\"><font color=\"#000000\"> $pl</font> </div></td>";
      $pl++;
      $x=0;
		
	  while($x<3)
	  {
         //colonne 2/3 et 4
		 echo "<td><div align=\"left\">";
			   
         if ($x==0)
		 {
		   echo "<a href=/resultats/bilan/page_bilan.php?comite=$comite&amp;champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']." target=\"_top\">$row[$x]</a>";
		 }
         else
		 {
		   print $row[$x];
		 }
       echo "</div></td>";
       $x++;
      }
		 echo "</div></tr>\n";
	}
 echo "</table>";
 echo "<br />";
}		



function Buteur($legende, $requete, $type, $EquipeFetiche, $champ, $debut, $fin, $equipe, $complet)
{
echo "<table class=\"tablephpProno2\" align=\"center\" cellspacing=\"0\" width=\"80%\" bgcolor=\"#FFFFFF\"><tr class=\"trphpProno3\"><th colspan=\"11\">".$legende."<br /></th></tr>\n";
echo "<tr class=\"trphpProno3\"><th>".CLMNT_POSITION."</th><th align=\"left\">".MENU_NOM."</th><th align=\"left\">".TEAM."</th><th align=\"left\">".ADMIN_JOUEURS_2."</th></tr>\n";
$resultats=mysql_query($requete) or die (mysql_error());
$pl=1;
$total="-1";
      while ($row=mysql_fetch_array($resultats))
      {
        
        $joueurs_nom=stripslashes($row["NomJoueur"]);
        $joueurs_prenom=stripslashes($row["PrenomJoueur"]);
        $row["nom"]=stripslashes($row["nom"]);
      echo "<tr class=\"trphpProno2\">";
      echo "<td align=\"center\">";
      if ($total>$row["Total"] or ($pl=="1")){ print $pl;} else {echo "-";}
      $pl++;
      echo "</td>";
      $Test="NON";
      $array = explode(",",$EquipeFetiche);

      if (sizeof($array)==1)
      {
      if ($row['idClub']==$array[0]){$Test="OUI";}
      }

      else
      {
              for ($i="0"; $i < sizeof($array); $i++)
              {
              if ("'$row[idClub]'"==$array[$i]){$Test="OUI";}
              }
       }

       if ($Test=="OUI")
       {
       echo "<td><b><a href=\"#\" onclick=\"window.open('joueurs.php?id_joueur=$row[id_joueur]','Fichejoueur','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">".$joueurs_nom." ".$joueurs_prenom."</a></b></td>" ;
       echo "<td><b>".$row["nom"]."</b></td>" ;
       echo "<td><b>".$row["Total"]."</b></td></tr>\n" ;
       }

       else
       {
       echo "<td><a href=\"#\" onclick=\"window.open('joueurs.php?id_joueur=$row[id_joueur]','Fichejoueur','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">".$joueurs_nom." ".$joueurs_prenom."</a></td>";
       echo "<td>".$row["nom"]."</td>";
       echo "<td>".$row["Total"]."</td></tr>\n";
       }
       $total=$row["Total"];
}
if (!isset($complet)) {echo "<tr><td align=\"right\" colspan=\"4\"><a href=\"buteur.php?champ=$champ&amp;complet=1&amp;type=$type&amp;equipe=$equipe&amp;debut=$debut&amp;fin=$fin\">".PRONO_CLASSEMENT_COMPLET."</a></td></tr>";}
echo "</table>";
}


/////////////////////////////////////////////////////////////////////////////////////////////////
// Titre       : Add-on Gestion des clubs (fiches clubs), mini-classement,                     //
//               statistiques, amélioration de la gestion des buteurs pour phpPronoeague.          //
// Auteur      : Alexis MANGIN                                                                 //
// Email       : Alexis@univert.org                                                            //
// Url         : http://www.univert.org                                                        //
// Démo        : http://phpPronoeague.univert.org/demo.php                                         //
// Description : Edition, gestion, fiches phpProno_clubs, statistiques, mini-classement...         //
// Version     : 0.71 (29/03/2003)                                                             //
//                                                                                             //
//                                                                                             //
// L'Univert   : Retrouvez quotidiennement l'actualité des Verts ainsi que de                  //
//               nombreuses autres rubriques consacrées à l'AS Saint-Etienne. Mais             //
//               L'Univert c'est avant tout la présentation d'un club devenu légende.          //
//                                                                                             //
/////////////////////////////////////////////////////////////////////////////////////////////////


// Affichage renseignements utilisée dans consult/club.php
//function aff_rens ($id_classe, $id_clubs)
//{
//$query="SELECT phpProno_donnee.id, phpProno_donnee.nom, id_rens, id_clubs, phpProno_rens.id, phpProno_rens.nom, phpProno_rens.id_classe, phpProno_clubs.id, etat, phpProno_donnee.url, phpProno_rens.url
//FROM phpProno_donnee, phpProno_rens, phpProno_clubs
//WHERE id_clubs='$id_clubs'
//      AND id_clubs=phpProno_clubs.id
//      AND id_rens=phpProno_rens.id
//      AND id_classe='$id_classe'
//      AND etat='1' order by rang";
//$result = mysql_query ($query) or die(mysql_error());
//$nb_rens=mysql_num_rows($result);

 //        if ($nb_rens=="0"){echo "<center>".ADMIN_EQUIPE_8."</center>";}

//         while($row = mysql_fetch_array($result))
//         {

//                    if (empty ($row[9]) and empty ($row[10])){$donnee_nom=stripslashes($row[1]);echo "<b>$row[5] :</b> $donnee_nom <br />";}
//                    elseif (empty ($row[9])){echo "<b><a href=\"$row[10]\">$row[5]</a> :</b> $row[1]<br />";}
//                    elseif (empty ($row[10])){echo "<b>$row[5] :</b> <a href=\"$row[9]\">$row[1]</a><br />";}
//                    else {echo "<b><a href=\"$row[10]\">$row[5]</a> :</b> <a href=\"$row[9]\">$row[1]</a><br />";}          
//        }
//        }


function clmntmini($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $phpPronoEAGUE_RACINE, $id_equipe_fetiche)
{

echo "<table class=tablephpProno2 align=\"center\" cellspacing=\"0\" width=\"200\"><tr class=trphpProno3><th colspan=10>".$legendemini;
echo "<tr class=trphpProno3>";
echo "<th align=\"center\">".CLMNT_POSITION."";
echo "<th align=\"left\">".CLMNT_EQUIPE."";
echo "<th align=\"left\">".CLMNT_POINTS."";
echo "<th align=\"center\">".CLMNT_JOUES."";
$result=mysqli_query($requetemini) or die (mysqli_error());
$pl=1;
$pl2=1;

       while ($row=mysqli_fetch_array($result))
      {
        if ($row['ID_EQUIPE']==$id_equipe_fetiche)
        {
       $av=$pl2-$nb_dessusmini;
       $ap=$pl2+$nb_dessousmini;
        }
       $pl2++;
       }


$result=mysqli_query($requetemini) or die (mysqli_error());
      while ($row=mysqli_fetch_array($result))
      {

if ($pl<=$ap and $pl>=$av)
{          
                        if ($row['NOM']==EXEMPT){continue;}
                        elseif ($pl<=$accessionmini and $typemini==GENERAL){echo "<TR class=accession>";}  //accession
                        elseif ($pl<=$barragemini and $typemini==GENERAL){echo "</tr><TR class=barrage>";}  //barrage
                        elseif ($pl>$relegationmini and $typemini==GENERAL){echo "</tr><TR class=relegation>";} //relegation
                        elseif (($pl%2)==0){echo "<TR class=ligne1>";}
                        else {echo "<TR class=ligne2>";}


        echo "<TD align=center>";
        print $pl;
        $pl++;
        $x=0;

               while($x<3)   // nb de colones
               {
               echo "<td align=\"left\">";

                    
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}
                     if ($lienmini=='non'){echo "$row[$x]";}
                     else {echo "<a href=\"".$phpPronoEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                     }

                     else print $row[$x];
                     $x++;

                     }
     
            }
elseif ($pl>$ap){$pl++;}
elseif ($pl<$av){$pl++;}
    }
echo "</table>";
}

function clmnt_barre($legende, $type, $accession, $barrage, $relegation,  $champ, $requete, $lien, $id_equipe_fetiche)
{
echo "<table class=\"tablephpProno2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpProno3\"><th colspan=\"11\">".$legende;
echo "</th></tr>\n<tr class=\"trphpProno3\">
<th align=\"center\">".CLMNT_POSITION."</th>
<th align=\"left\">".CLMNT_EQUIPE."</th>
<th align=\"left\">".CLMNT_POINTS."</th>\n";
echo "<th align=\"left\">".CLMNT_JOUES."</th>
<th align=\"left\">".CLMNT_VICTOIRES."</th>
<th align=\"left\">".CLMNT_NULS."</th>
<th align=\"left\">".CLMNT_DEFAITES."</th>
<th align=\"left\">".CLMNT_BUTSPOUR."</th>
<th align=\"left\">".CLMNT_BUTSCONTRE."</th>
<th align=\"left\">".CLMNT_DIFF."</th>
<th align=\"left\">".CLMNT_PEN."</th>
<th align=\"left\"></th></tr>\n";

$result=mysqli_query($requete) or die (mysqli_error());
$pl=1;
$action=0;
      while ($row=mysqli_fetch_array($result))
      {      
                if ($row['NOM']==EXEMPT){continue;}
                if ($pl==$accession and $type==GENERAL){$action=1;}
                if (($pl%2)==0)
                {
                     echo "<tr class=\"ligne1\">";
                }
                else
                {
                     echo "<tr class=\"ligne2\">";
                }
                if ($pl==$relegation and $type==GENERAL){$action=1;}
                if ($pl==$barrage and $type==GENERAL){$action=1;}

        echo "<td align=\"center\">";
        print $pl;
        echo "</td>";
        $pl++;
        $x=0;

               while($x<10)
               {
               echo "<td>";

                    //if ($row[$x]==$equipe_fetiche){echo "<b>";}
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}

                     if ($lien=='non'){echo "$row[$x]";}
                     else {echo "<a href=\"detaileq.php?champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']."\">$row[$x]</a>";}
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}

                     }


                     else print $row[$x];
                     $x++;

                     echo "</td>";
                     }
          echo "<td align=\"right\">";
          $leg=CONSULT_CLUB_4;
          if ($type==GENERAL){echo "<a href=\"#\" onclick=\"window.open('graph.php?equipe=".$row['ID_EQUIPE']."','Stats','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\"><img src=\"graph.gif\" border=\"0\" alt=\"$leg\"></a>";}
             echo "</td></tr>";
             echo"";
          if ($action==0){echo "<tr><td bgcolor=\"#000000\" colspan=\"11\" height=\"1\"></td></tr>";$action=0;}
          if ($action==1){echo"<tr><td bgcolor=\"#000000\" colspan=\"11\"><img height=\"2\" src=\"pix.gif\" width=\"1\" border=\"0\" alt=\"\"></td></tr>";$action=0;}
            echo "";
        }
        echo "</table>\n";
   }

function clmntmini_barre($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche)
{
echo "<table class=tablephpProno2 align=\"center\" cellspacing=\"0\" width=\"200\"><tr class=trphpProno3><th colspan=10>".$legendemini;
echo "<tr class=trphpProno3>";
echo "<th align=center>".CLMNT_POSITION."";
echo "<th align=left>".CLMNT_EQUIPE."";
echo "<th align=center>".CLMNT_POINTS."";
echo "<th align=\"left\">".CLMNT_JOUES."";
$result=mysqli_query($requetemini) or die (mysqli_error());
$pl=1;


$pl2=1;

        while ($row=mysqli_fetch_array($result))
      {
        if ($row['ID_EQUIPE']==$id_equipe_fetiche)
        {

       $av=$pl2-$nb_dessusmini;
       $ap=$pl2+$nb_dessousmini;

        }
$pl2++;
}


$result=mysqli_query($requetemini) or die (mysqli_error());
      while ($row=mysqli_fetch_array($result))
      {




if ($pl<=$ap and $pl>=$av)
{
        if ($row['NOM']==EXEMPT){continue; $action=0;}
        if ($pl==$accessionmini){$action=1;}
        if (($pl%2)==0)
        {
             echo "<tr class=ligne1>";
             $action=0;
        }
        else
        {
             echo "<tr class=ligne2>";
             $action=0;
        }
        if ($pl==$relegationmini){$action=1;}
        if ($pl==$barragemini){$action=1;}
        
        echo "<td align=center>";
        print $pl;
        $pl++;
        $x=0;
                        
               while($x<3) // nb de colone
               {
               echo "<td>";
                    
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";} 
                     if ($lienmini=='non'){echo "$row[$x]";}
                     else {echo "<a href=\"".$PHPLEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                    }
                     else print $row[$x];
                     $x++;
             }
     if ($action==1  and $typemini==GENERAL){echo"<tr><td bgcolor=\"#000000\" colspan=\"11\"><img height=\"2\" src=\"pix.gif\" width=\"1\" border=\"0\" alt=\"\"></td></tr>";$action=0;}
     elseif ($typemini==GENERAL){echo"<tr><td bgcolor=\"#000000\" colspan=\"10\" height=\"1\"></td></tr>";$action=0;}

            }
elseif ($pl>$ap){$pl++;}
elseif ($pl<$av){$pl++;}
}


echo "</table>";
}

function clmntred($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche)
{
echo "<table class=tablephpProno2 align=\"center\" cellspacing=\"0\"  width=\"200\"><tr class=trphpProno3><th colspan=10>".$legendemini;
echo "<tr class=trphpProno3>
<th align=\"center\">".CLMNT_POSITION."
<th align=\"center\">".CLMNT_EQUIPE."
<th align=\"left\">".CLMNT_POINTS."
<th align=\"center\">".CLMNT_JOUES."";
$result=mysqli_query($requetemini);
$pl=1;
      
      while ($row=mysqli_fetch_array($result))
      {
                        if ($row['NOM']==EXEMPT){continue;}
                        if ($pl<=$accessionmini and $typemini==GENERAL){echo "<tr class=accession>";}
                        elseif ($pl<=$barragemini and $typemini==GENERAL){echo "</tr><tr class=barrage>";}
                        elseif ($pl>$relegationmini and $typemini==GENERAL){echo "</tr><tr class=relegation>";}
                        elseif (($pl%2)==0){echo "<tr class=ligne1>";}
                      	else{echo "<tr class=ligne2>";}

                      	

        echo "<td align=center>";
        print $pl;
        $pl++;
        $x=0;
        
              while($x<3)
               {
               echo "<td>";

      
                    
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}
                     if ($lienmini=='non'){echo "$row[$x]";}
                     else 
                      {
                        echo "<a href=\"".$PHPLEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";
                      }
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";} 
                     }
                     
                     else print $row[$x];
                     $x++;
                     }
            }

        echo "</table>";
}

function clmnt_barrered($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche)
{
//mise en forme du mini classement
echo "<table class=tablephpProno2 align=\"center\"  cellspacing=\"0\" width=\"95%\"><tr class=trphpProno3><th colspan=10>".$legendemini;
echo "<tr class=trphpProno3>
<th align=\"center\">".CLMNT_POSITION."
<th align=\"center\">".CLMNT_EQUIPE."
<th align=\"left\">".CLMNT_POINTS."
<th align=\"center\">".CLMNT_JOUES."";

$result=mysqli_query($requetemini) or die (mysqli_error());
$pl=1;
$action=0;
      while ($row=mysqli_fetch_array($result))
      {
                if ($row['NOM']==EXEMPT){continue;}
                if ($pl==$accessionmini and $typemini==GENERAL){$action=1;}
                if (($pl%2)==0)
                {
                     echo "<tr class=ligne1>";
                }
                else
                {
                     echo "<tr class=ligne2>";
                }
                //if ($pl==($accession+1) and $type==GENERAL){$action=1;} // Si vous souhaitez encadrer le premier non promu
                if ($pl==$relegationmini and $typemini==GENERAL){$action=1;}
                if ($pl==$barragemini and $typemini==GENERAL){$action=1;}

        echo "<td align=center>";
        print $pl;
        $pl++;
        $x=0;



              while($x<3)
               {
               echo "<td>";
                    

                    
                    if ($x==0)
                    {
                   //  if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}
                     if ($lienmini=='non'){echo "$row[$x]";}
                   //  else {echo "<a href=\"".$phpPronoEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
                   //  if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                     }

                     else print $row[$x];
                     $x++;
          
                 }
          if ($action==0){echo"<tr><td bgcolor=\"#000000\" colspan=\"10\" height=\"1\"></td></tr>";$action=0;}
          if ($action==1){echo"<tr><td bgcolor=\"#000000\" colspan=\"11\"><img height=\"2\" src=\"pix.gif\" width=\"1\" border=\"0\" alt=\"\"></td></tr>";$action=0;}


        }
        echo "</table>";
   }

function demande_champ ()
{
// pour quel championnat ?
  ?>
<form method="get" action=""><div align="center">
       <h4>
       
  <?php print ADMIN_TAPVERT_MSG2; ?>
  
       </h4>
       <select name="champ">
       <option value="0"> </option>
  
  <?php       
       $query = "SELECT phpProno_divisions.nom, phpProno_saisons.annee, phpProno_championnats.id
                 FROM phpProno_championnats, phpProno_divisions, phpProno_saisons
                 WHERE phpProno_championnats.id_division=phpProno_divisions.id
                 AND phpProno_championnats.id_saison=phpProno_saisons.id
                 ORDER BY phpProno_saisons.annee DESC, phpProno_championnats.id";

       $result = mysqli_query($query) or die (mysqli_error());

           while ($row = mysqli_fetch_array($result))
           {
               echo ("<option value=\"$row[2]\">$row[0]\n $row[1]/". ($row[1]+1)."\n");
               echo ("</option>\n");
           }
       $button=ENVOI;
  ?>
        </select>

        <?php
        if (isset($value)){ echo "value=$value";echo "<input type=\"hidden\" name=\"type\" value=\"$value\">";}
        ?>

        <input type="submit" value="<?php print $button; ?>"></div></form>
  <?php
}

function demande_equipe($champ)
{
  
  
  
  $requete = "SELECT phpProno_clubs.nom, id_champ, phpProno_equipes.id
              FROM phpProno_clubs, phpProno_equipes
              WHERE phpProno_equipes.id_champ='$champ' and phpProno_clubs.id=phpProno_equipes.id_club
              ORDER BY nom";
$resultat = mysqli_query($requete) or die (mysqli_error());

echo "<form method=\"get\" action=\"\">";

echo "<select name=\"id_equipe\">";
echo "option value=\"0\"> </option>";

      while($row = mysqli_fetch_array($resultat))
      {
      $row[0] = stripslashes($row[0]);
      $a=$row[1]+1;
      echo (" <option value=\"$row[2]\">$row[0]");
      echo ("</option>\n");
      }
echo "</select>";
$button=ENVOI;
echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";
echo "<input type=\"submit\" value=\"$button\">";
echo "</form>";
}

?>
