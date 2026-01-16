<?php
//if (isset ($saison )) $saison = $saison;
if ($equipe > 90000000)
 {$logoEquipe=$equipe - 90000000;}
else
{$logoEquipe=$equipe;}
?>

    <table width="100%" border="0"  cellspacing="0" cellpadding="2" align="center">
      <tr>  
       <td align="center"> 
         <b><font size="6" color="#FF0000" > 
         <?php echo $nom; ?>
          </font></b>
       </td>
     </tr>
     <tr> 
       <td align="center"> 
         <?php $logoEquipe = substr($logoEquipe,-5);
		 echo("<img src=\"/images/blasons200_200/$logoEquipe.gif\" >");?>   
       </td>
     </tr>
     <tr>
       <td width="100%" valign="middle">&nbsp;</td>
     </tr>
     <tr>
      <td align="center"> <b> <?php echo "Ligue ".$nomLigue;?></b><br></td>
	 </tr>
	 <tr>
      <td align="center"><?php echo "(ex ".$nomAncienComite." )";?> </td>
	 </tr>
</table>

<hr /><hr />
  <p>
<h2 align="center">Saisons pr&eacute;c&eacute;dentes</h2>
 
<table  width="95%"  border="0" cellspacing="0" align="center">
  <tr class="ligneA"> 
    <td class="saisons"><?php echo $saison - 2; ?></td>
    <td class="lignePalm"><?php echo $terrMoins1; ?></td>
  </tr>
    <tr class="ligneA"> 
    <td class="saisons"><?php echo $saison - 1; ?></td>
    <td class="lignePalm"><?php echo $franceMoins1; ?></td>
  </tr>
  <tr class="ligneB"> 
    <td class="saisons"><?php echo $saison - 3; ?></td>
    <td class="lignePalm"><?php echo $terrMoins2; ?></td>
  </tr>
 
 <tr class="ligneB"> 
    <td class="saisons"><?php echo $saison - 2; ?></td>
    <td class="lignePalm"><?php echo $franceMoins2; ?></td>
  </tr>
  
  <tr class="ligneA">
	<td class="saisons"><?php echo $saison - 4; ?>   </td>
    <td class="lignePalm"><?php echo $terrMoins3; ?></td>
  </tr> 
  
  <tr class="ligneA">
	<td class="saisons"><?php echo $saison - 3; ?></td>
    <td class="lignePalm"><?php echo $franceMoins3; ?></td>
  </tr>
  
  <tr class="ligneB">  
    <td class="saisons" ><?php echo $saison - 5; ?></td>
    <td class="lignePalm" ><?php echo $terrMoins4; ?></td>
  </tr>
  
  <tr class="ligneB">  
    <td class="saisons"><?php echo $saison - 4; ?></td>
    <td class="lignePalm"><?php echo $franceMoins4; ?></td>
  </tr>
  
  <tr class="ligneA"> 
    <td class="saisons"><?php echo $saison - 6; ?></td>
    <td class="lignePalm"><?php echo $terrMoins5; ?></td>
  </tr>
 
  <tr class="ligneA"> 
    <td class="saisons"><?php echo $saison - 5; ?></td>
    <td class="lignePalm"><?php echo $franceMoins5; ?></td>
  </tr>
 
  <tr class="ligneB">  
    <td class="saisons"><?php echo $saison - 7; ?></td>
    <td class="lignePalm"><?php echo $terrMoins6; ?></td>
  </tr>
  
  <tr class="ligneB"> 
    <td class="saisons"><?php echo $saison - 6; ?></td>
    <td class="lignePalm"><?php echo $franceMoins6; ?></td>
  </tr>
  
  <tr class="ligneA"> 
    <td class="saisons"><?php echo $saison - 8; ?></td>
    <td class="lignePalm"><?php echo $terrMoins7; ?></td>
  </tr>
  
  <tr class="ligneA"> 
    <td class="saisons"><?php echo $saison - 7; ?></td>
    <td class="lignePalm"><?php echo $franceMoins7; ?></td>
  </tr>
</table>
  
  <br>
 <hr/>

<h2> Classement</h2>
<?php clmnt($champ, true, $bdd);?>

<hr/>
 
<h2>Evolution du classement</h2>


<p>Prochainement</p>
  <p>&nbsp;</p>
  
 
<h2>Les r&eacute;sultats </h2>
 <?php
$comite ="php".$comite; 
evolutionResultatsSmart ($equipe, $comite, $champ, $bdd);
  ?>
  
  
  
 <?php oppositionsDetaillees($champ, $id_equipe, true, $bdd);?>

  <hr>
 <h2> Quelques Stats</h2>
  <table  align="center" width="80%" border="0" height="250" >
    <tr> 
      <td class="taille8B">R&eacute;sultats &agrave; domicile</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td class="taille8">Nbre de match : <?php echo $matchDomicile; ?></td>
	</tr>
	<tr> 
      <td>  <?php require '../../resultats/bilan/graphDomicile.php';?></td>
    </tr>
     </table>
	   <table  align="center" width="80%" border="0">
          <tr> 
            <td bgcolor="#FF0000" height="25"></td>
            <td class="taille8B" align="left">D&eacute;faite</td>
            <td bgcolor="#00CC00" height="25"></td>
            <td class="taille8B" align="left">Victoire</td>
            <td bgcolor="#FFCC00" height="25"></td>
            <td class="taille8B" align="left">Nul</td>
          </tr>
        </table>
     <br>
  <br>   
	  
	<table  align="center" width="80%" border="0" height="250" >
    <tr> 
      <td class="taille8B">R&eacute;sultats &agrave; l'exterieur </td>
    </tr> 
	 <tr>
      <td class="taille8">Nbre de match : <?php echo $matchExterieur; ?></td>  
    </tr> 
      <td height="37" width="200"> 
        <?php require '../../resultats/bilan/graphExterieur.php';?>
  </table>
  <br>

  <h2> Moyennes  </h2>
  
  <table align="center" width="80%" border="0" border color="#000000" cellspacing="0" cellpadding="0" align="center">
    <tr> 
      <td align="center" colspan="2"><font color="#109618" size="4"><b>Points marqu&eacute;s par match </b></font></td>
    </tr>
    <tr> 
      <td align="center" colspan="2"> 
        <font size="3" face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font color="#109618" size="4"> 
          <?php
	if ( $joues>0)
	{
	$moyenne=round($pointsMarques / $joues);
	echo  $moyenne;
	} 
	else
	{
	echo "0";
	}
	?>
          </font></b></font>
      </td>
    </tr>
  </table>
  <table align="center" width="80%" border="1" border color="#000000" cellspacing="0" cellpadding="0">
    <tr> 
	<td class="texteBgVert"> Moyenne &agrave; domicile </td>
     
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td  class="taille8B"> 
          <?php 
		  if ( $joues>0)
		  echo round($pointsMarquesDomicile/$matchDomicile) ;
		  else
		  echo "0";?>
          </font></b></font>
      </td>
    </tr>
  </table>
  <table align="center" width="80%" border="1" border color="#000000" cellspacing="0" cellpadding="0">
    <tr> 
      <td class="texteBgVert"> Moyenne &agrave; l'exterieur </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td class="taille8B"> 
          <?php 
		  if ( $joues>0)
		  echo round($pointsMarquesExterieur/$matchExterieur) ;
		  else
		  echo "0";?>
          </font></b></font>
      </td>
    </tr>
  </table>
  
  <table align="center" width="80%" border="0" border color="#000000" cellspacing="0" cellpadding="0">
    <tr> 
     
	  <td align="center" colspan="2"> 
        <font size="4" face="Arial, Helvetica, sans-serif" color="#FF0000"><b>Points 
          encaiss&eacute;s par match</font></b></font>
    </tr>
    <tr> 
      <td align="center" colspan="2"> 
        <font size="4" face="Arial, Helvetica, sans-serif" color="#FF0000"><b> 
          <?php 
	if ( $joues>0)
	{
	$moyenne=round($pointsPris / $joues);
	echo  $moyenne; 
	}
	else
	{echo "0";}
	?>
          </font></b>
      </td>
    </tr>
  </table>
  <table align="center" width="80%" border="1" border color="#000000" cellspacing="0" cellpadding="0">
    <tr> 
      <td class="texteBgRouge"> Moyenne &agrave; domicile </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td class="taille8B">
          <?php 
		  if ( $joues>0)
		  echo round($pointsPrisDomicile/$matchDomicile);
		  else
		  echo "0"; ?>
      </td>
    </tr>
  </table>
  <table align="center" width="80%" border="1" border color="#000000" cellspacing="0" cellpadding="0">
    <tr> 
      <td class="texteBgRouge">Moyenne &agrave; l'exterieur </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td class="taille8B"> 
          <?php 
		  if ( $joues>0)
		  echo round($pointsPrisExterieur/$matchExterieur); 
		  else 
		  echo "0";?>
      </td>
    </tr>
  </table>
</center>
 <hr>
<h2>Calendrier et <br /> r&eacute;sultats de la poule</h2>
	<?php calendrier($champ,true, $bdd);?>
<hr>   
<h2> Palmar&egrave;s </h2>
    <?php require '../../resultats/bilan/palmares.php'; ?>
<hr>
    <?php include("../../pub/pub25.php"); ?>
