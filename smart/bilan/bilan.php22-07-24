<?php
//if (isset ($saison )) $saison = $saison;
if ($equipe > 90000000) {
  $logoEquipe = $equipe - 90000000;
} else {
  $logoEquipe = $equipe;
}
?>

<table width="100%" border="0" cellspacing="0" cellpadding="2" align="center">
  <tr>
    <td align="center">
      <b>
        <font size="6" color="#FF0000">
          <?php echo $nom; ?>
        </font>
      </b>
    </td>
  </tr>
  <tr>
    <td align="center">
      <?php $logoEquipe = substr($logoEquipe, -5);
      echo ("<img src=\"/images/blasons200_200/$logoEquipe.gif\" >"); ?>
    </td>
  </tr>
  <tr>
    <td width="100%" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"> <b>
        <?php echo "Ligue " . $nomLigue; ?>
      </b><br></td>
  </tr>
  <tr>
    <td align="center">
      <?php echo "(ex " . $nomAncienComite . " )"; ?>
    </td>
  </tr>
</table>

<hr />
<hr />
<p>
<h2 align="center">Saisons précédentes</h2>

<table class="marginAuto width95PC" border="0" >
  <!--Saison N-1 -->
  <tr class="ligneA">
    <td class="saisons">
      <?php echo $debutSaison - 1;
      echo "-";
      echo $finSaison - 1; ?>
    </td>
    <td class="lignePalm">
      <?php echo $terrMoins1; ?>
    </td>
  </tr>
  <tr class="ligneA">
    <td class="saisons">
      <?php echo "-"; ?>
    </td>
    <td class="lignePalm">
      <?php echo $franceMoins1; ?>
    </td>
  </tr>
  <!--Saison N-2 -->
  <tr class="ligneB">
    <td class="saisons">
      <?php echo $debutSaison - 2;
      echo "-";
      echo $finSaison - 2; ?>
    </td>
    <td class="lignePalm">
      <?php echo $terrMoins2; ?>
    </td>
  </tr>
  <tr class="ligneB">
    <td class="saisons">
      <?php echo "-"; ?>
    </td>
    <td class="lignePalm">
      <?php echo $franceMoins2; ?>
    </td>
  </tr>
  <!--Saison N-3 -->
  <tr class="ligneA">
    <td class="saisons">
      <?php echo $debutSaison - 3;
      echo "-";
      echo $finSaison - 3; ?>
    </td>
    <td class="lignePalm">
      <?php echo $terrMoins3; ?>
    </td>
  </tr>
  <tr class="ligneA">
    <td class="saisons">
      <?php echo "-"; ?>
    </td>
    <td class="lignePalm">
      <?php echo $franceMoins3; ?>
    </td>
  </tr>
  <!--Saison N-4 -->
  <tr class="ligneB">
    <td class="saisons">
      <?php echo $debutSaison - 4;
      echo "-";
      echo $finSaison - 4; ?>
    </td>
    <td class="lignePalm">
      <?php echo $terrMoins4; ?>
    </td>
  </tr>
  <tr class="ligneB">
    <td class="saisons">
      <?php echo "-"; ?>
    </td>
    <td class="lignePalm">
      <?php echo $franceMoins4; ?>
    </td>
  </tr>
  <!--Saison N-5 -->
  <tr class="ligneA">
    <td class="saisons">
      <?php echo $debutSaison - 5;
      echo "-";
      echo $finSaison - 5; ?>
    </td>
    <td class="lignePalm">
      <?php echo $terrMoins5; ?>
    </td>
  </tr>
  <tr class="ligneA">
    <td class="saisons">
      <?php echo "-"; ?>
    </td>
    <td class="lignePalm">
      <?php echo $franceMoins5; ?>
    </td>
  </tr>
  <!--
  <tr class="ligneB">  
    <td class="saisons"><?php echo $saison - 6;
    echo "-";
    echo $saison - 5; ?></td>
    <td class="lignePalm"><?php echo $terrMoins6; ?></td>
  </tr>
  
  <tr class="ligneB"> 
    <td class="saisons"><?php echo "-"; ?></td>
    <td class="lignePalm"><?php // echo $franceMoins6; ?></td>
  </tr>
  
  <tr class="ligneA"> 
    <td class="saisons"><?php echo $saison - 7;
    echo "-";
   // echo $saison - 6; ?></td>
    <td class="lignePalm"><?php  echo $terrMoins7; ?></td>
  </tr>
  
  <tr class="ligneA"> 
    <td class="saisons"><?php echo "-"; ?></td>
    <td class="lignePalm"><?php  echo $franceMoins7; ?></td>
  </tr>
  -->
</table>

<br>
<hr />
<h1 class="titreSaison">Saison
  <?php echo $debutSaison . " - " . $finSaison; ?>
</h1>
<p class="titreRouge11">
  <?php
  //$comite= substr ($comite,0,3);
  echo "Championnat ";
  
  if ($phpComite == "phppro") {
    if (substr($champ, 3, 2) == 11)
      echo "Top 14";
    elseif (substr($champ, 3, 2) == 12)
      echo "Pro D2";
    elseif (substr($champ, 3, 2) == 13)
      echo "Nationale";
    elseif (substr($champ, 3, 2) == 14)
      echo "Fédérale 1";
    elseif (substr($champ, 3, 2) == 24)
      echo "Espoir Féd 1";
    elseif (substr($champ, 3, 2) == 15)
      echo "Fédérale 2";
    elseif (substr($champ, 3, 2) == 25)
      echo "Fédérale B";

  } elseif ($phpComite == "phpfed3NE") {
    if (substr($champ, 3, 2) == 16)
      echo "Fédérale 3";
    else
      echo "Excellence B";
  } else {
    echo "ligue " . $nomLigue;
  }

  ?>
</p>


<p class="titreRouge22">
  <?php 
  echo $division; 
  ?>
<div>
  </p>
  <br>
<h2 class="marginAuto"> Classement général</h2>
<?php clmnt($champ, true, $bdd); ?>

<hr />

<h2 class="marginAuto">Evolution du classement</h2>

<?php //require '../../resultats/bilan/graphiqueTest2.php';?>

<p>Prochainement</p>


<h2 class="marginAuto">Suivi des résultats des rencontres </h2>
<p class="marginAuto"><?php evolutionResultatsSmart ($equipe, $comite, $champ, $bdd);?></p>
<br />
<h2> <span class="marginAuto"> Calendrier et résultats<br>
  de
  <?php echo $nom; ?>
</h2>

<?php oppositionsDetaillees($champ, $id_equipe, true, $bdd); ?>

<hr>
<h2> Quelques Stats</h2>
<table align="center" width="75%" border="0" height="250">
  <tr>
    <td class="taille8B">Résultats à domicile</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td class="taille8">Nbre de match :
      <?php echo $matchDomicile; ?>
    </td>
  </tr>
  <tr>
    <td>
      <?php require '../../resultats/bilan/graphDomicile.php'; ?>
    </td>
  </tr>
</table>
<table align="center" width="16%" border="0">
  <tr>
    <td bgcolor="#FF0000" height="25"></td>
    <td class="taille8B" align="left">Défaite</td>
    <td bgcolor="#00CC00" height="25"></td>
    <td class="taille8B" align="left">Victoire</td>
    <td bgcolor="#FFCC00" height="25"></td>
    <td class="taille8B" align="left">Nul</td>
  </tr>
</table>
<br>
<br>

<table class="marginAuto" width="75%" border="0" height="250">
  <tr>
    <td class="taille8B">Résultats à l'extérieur </td>
  </tr>
  <tr>
    <td class="taille8">Nbre de match :
      <?php echo $matchExterieur; ?>
    </td>
  </tr>
  <td height="37" width="200">
    <?php require '../../resultats/bilan/graphExterieur.php'; ?>
</table>
<br>

<h2> Moyennes </h2>

<table class="marginAuto" width="75%" border="0" border color="#000000"  >
  <tr>
    <td align="center" colspan="2">
      <font color="#109618" size="4"><b>Points marqués par match : </b></font>
   
      <font size="3" face="Arial, Helvetica, sans-serif" color="#FF0000"><b>
          <font color="#109618" size="4">
            <?php
            if ($joues > 0) {
              $moyenne = round($pointsMarques / $joues);
              echo $moyenne;
            } else {
              echo "0";
            }
            ?>
          </font>
        </b></font>
    </td>
  </tr>
</table>
<table class="marginAuto" width="75%" border="1" border color="#000000">
  <tr>
    <td class="texteBgVert"> Moyenne à domicile </td>

  </tr>
  <tr class="backgroundWhite">
    <td class="taille8B">
      <?php
      if ($joues > 0)
        echo round($pointsMarquesDomicile / $matchDomicile);
      else
        echo "0"; ?>
      </font></b></font>
    </td>
  </tr>
</table>
<table class="marginAuto " width="75%" border="1" border color="#000000" >
  <tr>
    <td class="texteBgVert"> Moyenne à l'exterieur  </td>
  </tr>
  <tr class="backgroundWhite">
    <td class="taille8B">
      <?php
      
      if ($joues > 0)
        echo round($pointsMarquesExterieur / $matchExterieur);
      else
        echo "0"; ?>
      </font></b></font>
    </td>
  </tr>
</table>
<br>
<table class="MarginAuto" width="75%" border="0" border color="#000000" >
  <tr>

    <td colspan="2">
      <font size="4" face="Arial, Helvetica, sans-serif" color="#FF0000"><b>
        Points encaissés par match :</font></b></font>
  
      <font size="4" face="Arial, Helvetica, sans-serif" color="#FF0000"><b>
          <?php
          
          if ($joues > 0) {
            $moyenne = round($pointsPris / $joues);
            echo $moyenne;
          } else {
            echo "0";
          }
          ?>
      </font></b>
    </td>
  </tr>
</table>
<table align="center" width="75%" border="1" border color="#000000" >
  <tr>
    <td class="texteBgRouge"> Moyenne à domicile </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td class="taille8B">
      <?php
      
      if ($joues > 0)
        echo round($pointsPrisDomicile / $matchDomicile);
      else
        echo "0"; ?>
    </td>
  </tr>
</table>
<table class="marginAuto" width="75%" border="1" border color="#000000">
  <tr>
    <td class="texteBgRouge">Moyenne à l'exterieur </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td class="taille8B">
      <?php
      
      if ($joues > 0)
        echo round($pointsPrisExterieur / $matchExterieur);
      else
        echo "0"; ?>
    </td>
  </tr>
</table>
</center>
<hr>
<h2>Calendrier et <br /> résultats de la poule</h2>
<?php calendrier($champ, true, $bdd); ?>
<hr>
<h2> Palmarès </h2>
<?php require '../../resultats/bilan/palmares.php'; ?>
<hr>
<?php //include("../../pub/pub25.php"); ?>