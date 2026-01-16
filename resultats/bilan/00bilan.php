<table width="600" border="0" cellspacing="0" cellpadding="2" align="center">
  <tr> 
    <td width="572">&nbsp;</td>
    <td width="133" align="center"> </td>
  </tr>
  <tr> 
    <td width="572"> 
      <h2><?php echo $nom; ?></h2>
    </td>
    <td rowspan="2" valign="middle"> 
      <div align="center"> 
        <?php 
		$logoEquipe = substr($logoEquipe,-5);
		{print("<img src=\"/images/blasons200_200/$logoEquipe.gif\" >");}	?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="572" valign="middle"> 
      
    </td>
  </tr>
</table>


    <h1>Saisons précédentes</h1>
	
  <table width="550" border="0" cellspacing="0">
    <tr bgcolor="#CCCCCC" > 
      <td class = "saison"> <?php echo $saison - 2; ?> - <?php echo $saison - 1; ?> </td>
      <td class = "division"> <?php echo $terrMoins1; ?> </td>
    </tr>
    <tr bgcolor="#CCCCCC" > 
      <td class = "saison"> </td>
      <td class = "division">  <?php echo $franceMoins1; ?> </td>
    </tr>
    <tr> 
      <td class = "saison"> <?php echo $saison - 3; ?> - <?php echo $saison - 2; ?></td>
      <td class = "division"> <?php echo $terrMoins2; ?></div>
      </td>
    </tr>
    <tr > 
       <td class = "saison"> </td>
       <td class = "division"><?php echo $franceMoins2; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC" bordercolor="#FFFFFF" > 
      <td class = "saison"><?php echo $saison - 4; ?> - <?php echo $saison - 3; ?> </td>
      <td class = "division"><?php echo $terrMoins3; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC" bordercolor="#FFFFFF" > 
       <td class = "saison"> </td>
       <td class = "division"><?php echo $franceMoins3; ?></td>
    </tr>
    <tr> 
       <td class = "saison"><?php echo $saison - 5; ?> - <?php echo $saison - 4; ?></td>
       <td class = "division"><?php echo $terrMoins4; ?></div>
      </td>
    </tr>
    <tr> 
      <td class = "saison"> </td>
      <td class = "division"><?php echo $franceMoins4; ?></div>
      </td>
    </tr>
    <tr bgcolor="#CCCCCC" > 
       <td class = "saison"><?php echo $saison - 6; ?> - <?php echo $saison - 5; ?></td>
       <td class = "division"><?php echo $terrMoins5; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC" > 
      <td class = "saison"> </td>
      <td class = "division"><?php echo $franceMoins5; ?></td>
    </tr>
  </table>
  <br>
  <hr /><hr />
  <p>
  <h1>Saison <?php echo $saison-1; echo " - "; echo $saison; ?></h1>
  <!-- D�nomination de la comp�tition -->
  <p><font color="#FF0000"><b><font face="Arial, Helvetica, sans-serif" size="5">
    <?php
  //$comite= substr ($comite,0,3);
  echo "Championnat " ;
  
  if ($phpComite == "phppro")
	{
	  if (substr($champ,3,2 )== 11)
		  echo "Top 14";
	  elseif (substr($champ,3,2 )== 12)
		  echo "Pro D2";
	 elseif (substr($champ,3,2) == 13)
		  echo "Nationale";
	 elseif (substr($champ,3,2) == 14)
		  echo "Fédérale 1";
	 elseif (substr($champ,3,2)== 15)
		  echo "Fédérale 2";
	}
  
  elseif ($phpComite == "phpfedNE3" )
	{
	 if (substr($champ,3,2) == 16)
		  echo "Fédérale 3";
	}
  else
  {
  echo "ligue ".$nomLigue; 
  }
  
  ?>
    </font></b><br>
   <font face="Arial, Helvetica, sans-serif"><b><?php echo $division; ?></b></font></font></p> 
  
 <br />
  <p><b><font size="4" face="Arial, Helvetica, sans-serif"><font color="#000000">Classement 
    général<br>
    </font> 
 
    <!-- Classement g�n�ral de la poule -->
   
    <?php 	
	classementDetaille($champ, $bdd);
		include("../../pub/pub4.php");  ?>
    <br>

  <h3><font color="#000000" face="Arial, Helvetica, sans-serif"> Evolution du classement</font></h3>
  <font color="#000000" face="Arial, Helvetica, sans-serif"><p> 
    <br />

	<?php
	
	//require 'graphiqueTest.php';

echo "<br />";echo "<br />";echo "<br />";

	require '../../connect/connexion6.php'; 

	evolutionResultats ($equipe, $comite, $champ, $bdd)
	
	?>
 </p></font>
 

 
  <h3><font color="#000000" face="Arial, Helvetica, sans-serif"> Journée(s) reportée(s)</font></h3>
  <?php //journeesReporteesCovid($comite, $champ, $bdd);  ?>
 
  <font color="#000000"><b><font size="4" face="Arial, Helvetica, sans-serif">Calendrier 
    et résultats de<br>
    <?php echo $nom; ?>
    </font></b></font> 
   <?php oppositionsDetaillees($champ, $id_equipe, false, $bdd);?>
  <hr>
  <hr><br>
 <h1> Quelques Stats</h1> 
  <!-- font size="3" face="Arial, Helvetica, sans-serif" color="#FF0000">Victoires 
    consécutives</font>
	-->	
    <table width="400" border="0" height="250">
      <tr> 
        <td class = "stats"  bgcolor="#CCCCCC">Résultats &agrave; domicile</td>
        <td class = "stats"  bgcolor="#CCCCCC">Résultats &agrave; l'exterieur </td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td class = "stats" >Nbre de match : <?php echo $matchDomicile ?></td>
		<td class = "stats" >Nbre de match : <?php echo $matchExterieur; ?></td>
      <tr> 
        <td height="37" width="200"> <?php	require 'graphDomicile.php';?></td>
        <td height="37" width="200"> <?php	require 'graphExterieur.php';?></td>
      </tr>
	</table>

   <h1>Moyennes</h1>
  <br>
  <table width="73%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td class ="moyPP" colspan="2"> Points marqués par match </td>
      <td class ="moyPC" colspan="2"> Points encaissés par match </td>
    </tr>
    <tr> 
      <td class ="moyPP" colspan="2"> 
        <?php
		if ( $joues>0)
		{$moyenne=round($pointsMarques / $joues); echo $moyenne;} 
		else {echo "0";}?>  
      </td>
      <td class ="moyPC" colspan="2">  
         <?php 
		if ( $joues>0)
		{$moyenne=round($pointsPris / $joues);	echo  $moyenne; 	}
		else{echo "0";}	?>
      </td>
    </tr>
  </table>
  <br>
  <table width="73%" border="1" cellspacing="0" cellpadding="0">
    <tr> 
      <td class = "moyVert"> Moyenne  &agrave; domicile </td>
      <td class = "moyVert"> Moyenne  &agrave; l'exterieur </td>
      <td class = "moyRouge"> Moyenne &agrave; domicile </td>
      <td class = "moyRouge"> Moyenne &agrave; l'exterieur </td>
    </tr>
    <tr > 
      <td class = "moyResultat">
          <?php 
		  if ( $matchDomicile>0)
		  echo round($pointsMarquesDomicile/$matchDomicile) ;
		  else
		  echo "-";?>
      </td>
     <td class = "moyResultat">
          <?php 
		  if ( $matchExterieur>0)
		  echo round($pointsMarquesExterieur/$matchExterieur) ;
		  else
		  echo "-";?>
      </td>
      <td class = "moyResultat">
          <?php 
		  if ( $matchDomicile>0)
		  echo round($pointsPrisDomicile/$matchDomicile);
		  else
		  echo "-"; ?>
      </td>
      <td class = "moyResultat">
          <?php 
		  if ( $matchExterieur>0)
		  echo round($pointsPrisExterieur/$matchExterieur); 
		  else 
		  echo "-";?>
      </td>
    </tr>
  </table>
 <br>
 <hr />
  <br>
  <table width="72%" border="0">
    <tr> 
      <td class="QLiens">Meilleure attaque de la poule :</td>
      <td class="QLiens"><?php echo $nomMeilleureAttaque; ?></td>
      <td width="20%"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="3"> 
        <?php echo round($moyenneMeilleureAttaque); ?>
        <font size="2"> points par match</font></font></b></td>
    </tr>
    <tr> 
      <td class="QLiens">Meilleure défense de la poule : </td>
      <td class="QLiens">    <?php echo $nomMeilleureDefense; ?></td>
      <td width="20%"><b><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"> 
        <?php echo round($moyenneMeilleureDefense); ?>
        <font size="2">points par match</font> </font></b></td>
    </tr>
  </table>
  <h1><font size="3"><br>
    </font></h1>
  <hr>
  <div align="left"><a href="javascript:history.go(-1)"><font color="#000099"><i><b>&lt;--- 
    Retour résultats du comité</b></i></font></a></div>
  <hr>
  <br>
  <p class="QLiens">
    Calendrier et résulats des rencontres de la poule
  </p>
  
 <?php calendrier($champ, false, $bdd);?>

  <hr/>
  <p><font size="5" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000" >Quelques 
    liens concernant
    <br> <?php echo $nom; ?></font></b><br>
    </font></p>
	</p>
  <font class="QLiens"><a href="/consultation/pageclub00.php?champion=<?php echo $equipe; ?>" target="_blank"><font color="#000000">Compléter 
    les infos du club</font></a>
    </p>
    <font class="QLiens"><a href="../../dirigeant/calendrier/pageCalendrier.php?idEquipe=<?php echo $equipe; ?>&comite=<?php echo substr($comite,3,5); ?>" target="_blank"> 
    <font color="#000000">Télécharger le calendrier du club</font></a><br>
  <hr />
    <h1>  Palmarès </h1> 
  <br>
    <?php include("palmares.php");  ?>
    <br>
  <br>
