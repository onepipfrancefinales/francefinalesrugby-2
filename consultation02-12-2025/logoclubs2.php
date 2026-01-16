   <?php
   if (isset($_REQUEST['variableLettre'])) $rechecheSmart=$_REQUEST['variableLettre'];else $rechecheSmart="0";

   if ($mode == "smart")
      $adresseLettres = "../smart/smartPage.php?mode=smart";
    else
      $adresseLettres = "page_recherche_comite2.php?mode=";
    ?>


   <br> <br>
   <table width="90%" class="marginAuto">
     <tr>
       <td class="backgroundCCCCCC">
         <div class="center size6">Autre recherche <br>
           <select name="select3" onChange="MM_jumpMenu('parent',this,0)" size="1">
             <option selected>Alphabétique</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=A&page=lettres">A</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=B&page=lettres">B</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=C&page=lettres">C</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=D&page=lettres">D</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=E&page=lettres">E</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=F&page=lettres">F</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=G&page=lettres">G</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=H&page=lettres">H</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=I&page=lettres">I</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=J&page=lettres">J</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=K&page=lettres">K</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=L&page=lettres">L</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=M&page=lettres">M</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=N&page=lettres">N</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=O&page=lettres">O</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=P&page=lettres">P</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=Q&page=lettres">Q</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=R&page=lettres">R</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=S&page=lettres">S</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=T&page=lettres">T</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=U&page=lettres">U</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=V&page=lettres">V</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=W&page=lettres">W</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=X&page=lettres">X</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=Y&page=lettres">Y</option>
             <option value="<?php echo $adresseLettres; ?>&variableLettre=Z&page=lettres">Z</option>
           </select>
         </div>
       </td>

       <?php if ($mode != "smart") { ?>

         <td width="50%" class="backgroundCCCCCC">
           <div class="center size6">Recherche par comité<br>
             <select id="inputG" name="select3" onChange="MM_jumpMenu('parent',this,0)" size="1">
               <option selected>Par comité</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(AP)">Alpes</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(AL)">Alsace Lorraine</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(AB)">Armagnac Bigorre</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(AU)">Auvergne</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(BE)">Béarn</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(BG)">Bourgogne</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(BR)">Bretagne</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(CE)">Centre</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(C)">Corse</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(CBL)">Côte Basque Landes</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(CA)">Côte d'Argent</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(CAZ)">Côte d'Azur</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(DA)">Drôme Ardèche</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(FL)">Flandres</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(FC)">Franche Comté</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(IDF)">Ile de France</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(LD)">Languedoc</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(LM)">Limousin</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(LY)">Lyonnais</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(MPY)">Midi Pyrénées</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(N)">Normandie</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(PL)">Pays de Loire</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(PA)">Périgord Agenais</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(PCH)">Poitou Charente</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(PR)">Provence</option>
               <option value="/consultation/page_recherche_comite2.php?variable_1=(PC)">Pays Catalan</option>
             </select>
           </div>
         </td>

       <?php
        }
        ?>
     </tr>
   </table>
   </div>
   <br>
   <hr />


   <?php 
if ($mode =="smart")
 $recherche= $rechecheSmart;
 else  
  $recherche = $chaine.$variable_1;
   ?>

   <h1 class="titrePage center ">Tous les Clubs <br>
     commençant par <?php echo $recherche; ?>
   </h1>

   <p>
     <?php
      require("../connect/connexion1.php");

      // $NbrCol : le nombre de colonnes
      // $NbrLigne : calcul automatique a la FIN
      // --------------------------------
      // (exemple)
      $NbreData = array();
      //echo "recherche : ".$recherche;
      $NbrCol = 4;
      // La requete (exemple) : toutes les "CHOSE" commençant par un "b", classées par ordre alphabétique.
      $requete = $bdd->query("SELECT COUNT(id)
						FROM bdclubs 
						WHERE nom_1 LIKE '$recherche%'
            AND id < '2400000'
            AND substr(id,-3,1) NOT LIKE '8' 
            AND substr(id,-3,1) NOT LIKE '9'
          ");

      $NbreData = $requete->fetch();
      //echo " - data : ".$NbreData[0];	  


      // --------------------------------
      // nombre de cellules a remplir
      //$NbreData = $query->num_rows;
      // --------------------------------
      // affichage
      $NbrLigne = 0;
      if ($NbreData != 0) {
        $j = 1;
      ?>
   </p>
   <table class="marginAuto  width95PC backgroundWhite">

     <?php
        if (strlen($recherche) == 1) {
          $query = $bdd->query("SELECT id, nom_1
						                    FROM bdclubs 
						                    WHERE nom_1 LIKE '$recherche%' 
                                AND id < '2400000' 
						                    AND siglecomite !=''
                                AND substr(id,-3,1) NOT LIKE '8' 
                                AND substr(id,-3,1) NOT LIKE '9'
                    						ORDER BY  nom_1 ASC");
        } else {
          $query = $bdd->query("SELECT id, nom_1
                                FROM bdclubs 
                                WHERE siglecomite = '$recherche' 
                                AND id < '2400000' 
                                AND substr(id,-3,1) NOT LIKE '8' 
                                AND substr(id,-3,1) NOT LIKE '9'
                                ORDER BY  nom_1 ASC");
        }
        while ($val = $query->fetch()) {
          if ($j % $NbrCol == 1) {
            $NbrLigne++;
            $fintr = 0;
      ?>
         <tr>
         <?php    }
          ?>
         <td class="width25PC">
           <div id="affichage" class="center">
             <?php      // -------------------------
              // DONNEES A AFFICHER dans la cellule
              $valReduit[0] = substr($val[0], -5);


              if ($mode != "smart") {
                echo "<a href=\"../consultation/pageclub00.php?champion=$val[0]\"><img src=\"../images/blasons200_200/$valReduit[0].gif\" height=\"100\" width=\"100\"></a>";
                echo '<br/>';
                echo "  </b> <a href=\"../consultation/pageclub00.php?champion=$val[0]\">$val[1]</a>";
                echo '<hr />';
              } else {
                echo "<a href=\"ficheClubs/pageFicheClubs.php?mode=&page=comite&champion=$valReduit[0]\"><img src=\"../images/blasons200_200/$valReduit[0].gif\" height=\"100\" width=\"100\"></a>";


                //https://francefinalesrugby.fr/smart/ficheClubs/pageFicheClubs.php?mode=&page=comite&champion=29076

                echo '<br/>';
                echo "  </b> <a href=\"ficheClubs/pageFicheClubs.php?mode=&page=comite&champion=$valReduit[0]\">$val[1]</a>";
                echo '<hr />';
              }
              // -------------------------
              ?>
           </div>
         </td>
         <?php if ($j % $NbrCol == 0) {
            $fintr = 1;
          ?>
         </tr>
       <?php    }
          $j++;
        }




        if ($fintr != 1) {
        ?>
     <?php  } ?>

   </table>

   <?php
      } else {
        echo "Aucun club en " . $recherche;
      }

    ?>