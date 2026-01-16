<html>
<head>

<link type="text/css" rel="stylesheet" href="sommaire.css">
</head>
<body>

<script type="text/javascript" language="javascript">
		 function twFermer() {
		 window.close();
		 }
  </script>     
     <div align = "center">
            <input type="button" onClick="twFermer()" value="Fermer" name="button2">
       </div>
	  <hr/>

<?php
require "../datesReglementsFed.php";
$cmt = $_GET['cmt'];

//*******************************************************************
//*                                                                 *
//*                       Réglement féderale 1                      *
//*                                                                 *
//*******************************************************************
if ($cmt == 'f1' or $cmt==990140 or $division== 140 or $division == 240)
{
?>
<p class="reg_nomDivision">Fédérale 1 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 Les qualifiés (16 équipes)</p>
<p class="reg_texte">
Sont qualifiés directement pour les 1/8ème de finale du championnat de France, les 1er, 2e de chaque poules <br><br>
Sont qualifiés pour les barrages les équipes classées 3me, 4me, 5me et 6me.
Les vainqueurs de ces barrages participeront aux 1/8ème du champ de France.<p>
    
<p class="reg_sousTitre">1.2 Modalités des  rencontres</p>
<p class="reg_texte">  Les 1/8èmes , les quarts se jouent en rencontres Aller 
  Retour ( les rencontres Aller auront lieu sur les terrains des équipes 
  les moins bien classées) .<br>
  les demi-finales et la finale se jouent sur une rencontre et sur terrain neutre.  </p>
  
<p class="reg_titre">2.Accession à la division Nationale 2</p>
<p class="reg_texte">	
  Les équipes qualifiées en demi-finales seront promues en Nationale 2</p>
  
  
<p class="reg_titre">3.Relègation en Fédérale 2</p>
<p class="reg_texte">Les équipes classées 11me et 12me seront relèguées en fédérale 2.</p>

<p class="reg_titre">4.Calendrier</p>
<p class="reg_texte">
  Barrages : Le 26 Avril<br/>
  Huitième A/R : Les 3 et 10 mai <br/>
  Quarts A/R : Les 17 et 24 mai<br/>
  Demi : Le 07 juin <br/>
  Finale : Le 14 juin<br/></p>
<?php
}
//*******************************************************************
//*                                                                 *
//*           Réglement fédérale 2 / fédérale B                     *
//*                                                                 *
//*******************************************************************
elseif ($cmt == 'fed2' or $cmt==990150  or $division== 150 or $division == 250)
{
?>
<p class="reg_nomDivision">Fédérale 2 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 les qualifiés (32 équipes)</p>
<p class="reg_texte">
Sont qualifiés directement pour les 1/16ème A/R du championnat de France, les 1er et 2e de chaque poule <br><br>
Sont qualifiés pour les barrages les équipes classées 3me, 4me, 5me et 6me.
Les vainqueurs de ces barrages participeront aux 16ème A/R du champ de France.</p>
   
 
<p class="reg_sousTitre">1.2 Modalités des rencontres</p>
<p class="reg_texte">
  Les 1/16èmes et 1/8èmes de finale se jouent en rencontres Aller 
  Retour ( Les rencontres Aller auront lieu sur les terrains des équipes 
  les moins bien classées).<br>
  Les quarts, demi-finales et la finale se jouent sur une rencontre sur terrain neutre. </p>
  
<p class="reg_titre">2.Accession en Fédérale 1 </p>
<p class="reg_texte">	
 Les 8 équipes qualifiées en quarts de finale seront promues en Fédérale 1 la saison suivante. 24 equipes pourront acceder à la fédérale 1</p>
 
<p class="reg_titre">3.Relègation en Fédérale 3</p>
<p class="reg_texte">Les équipes classées 11me et 12 me de chaque poule seront relèguées en  Fédérale 3 la saison suivante.</p>
    
<p class="reg_titre">4.Calendrier </p>
 <p class="reg_texte">
  Barrages : <?php echo $barrageFed2; ?><br/>
  Seizième A/R : <?php echo $seiziemeFed2; ?><br/>
  Huitième A/R : <?php echo $huitiemeFed2; ?><br/>
  Quarts : <?php echo $quartFed2; ?><br/>
  Demi : <?php echo $demiFed2; ?><br/>
  Finale : <?php echo $finaleFed2; ?><br/></p>
  
  
<p class="reg_nomDivision">Fédérale B </p>
 

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 les qualifiés (32 équipes)</p>
<p class="reg_texte">
Sont qualifiés directement pour les 1/16ème du championnat de France, les 1er et 2e de chaque poules <br><br>
Sont qualifiés pour les barrages les équipes classées 3me, 4me, 5me et 6me.
Les vainqueurs de ces barrages participeront aux 16ème du champ de France.</p>
   
<p class="reg_sousTitre">1.2 Modalités des rencontres</u><br>
<p class="reg_texte">
  Toutes les confrontations ont lieu sur une seule rencontre. </p>

<p class="reg_titre">2.Calendrier </p>
<p class="reg_texte">
Barrages : <?php echo $barrageFedB; ?><br/>
  Seizième A/R : <?php echo $seiziemeFedB; ?><br/>
  Huitième A/R : <?php echo $huitiemeFedB; ?><br/>
  Quarts : <?php echo $quartFedB; ?><br/>
  Demi : <?php echo $demiFedB; ?><br/>
  Finale : <?php echo $finaleFedB; ?><br/></p>


<?php
}

//*******************************************************************
//*                                                                 *
//*           Réglement fédérale 3 / Excellence B                   *
//*                                                                 *
//*******************************************************************
elseif ($cmt == 'fed3GS' or $cmt == 'fed3NE' or $cmt == '991161' or $cmt == '991261' or $cmt == '992161' or $cmt == '992261')
{
?>

<p class="reg_nomDivision">Fédérale 3 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 Les qualifiés (64 équipes)</p>
<p class="reg_texte">
Sont qualifiés directement pour les 1/32ème A/R du championnat de France, les 1er, 2ème et 3ème de chaque poule <br><br>
Sont qualifiés pour les barrages les équipes classées 4ème et 5ème de chaque poule et les 2 meilleurs 5ème.
Les vainqueurs de ces barrages participeront aux 1/32ème A/R du champ de France.</p>
   
<p class="reg_sousTitre">1.2 Modalités des rencontres</p>
<p class="reg_texte">
  Les 1/32èmes et 1/16èmes de finale se jouent en rencontres Aller 
  Retour ( Les rencontres Aller auront lieux sur les terrains des équipes 
  les moins bien classées).<br>
  Les huitièmes, les quarts, demi-finales et la finale se jouent sur une rencontre sur terrain neutre. 
</p> 
  
<p class="reg_titre">2.Accession en Fédérale 2 </p>
<p class="reg_texte">	
  Les 16 équipes qualifiées en 1/8ème de finale seront promues en Fédérale 2 la saison suivante.</p>


<p class="reg_titre">3.Relègation </p>
<p class="reg_texte">
Les équipes classées 9ème et 10ème de chaque poule seront relèguées en régionale 1 la saison prochaine.</p>

 <p class="reg_titre">4.Calendrier</p>
 <p class="reg_texte"> 
  Barrages : <?php echo $barrageFed3; ?><br/>
  Trente huitième A/R : <?php echo $trenteDeuxFed3; ?><br/>
  Seizième A/R : <?php echo $seiziemeFed3; ?><br/>
  Huitième : <?php echo $huitiemeFed3; ?><br/>
  Quarts : <?php echo $quartFed3; ?><br/>
  Demi : <?php echo $demiFed3; ?><br/>
  Finale : <?php echo $finaleFed3; ?><br/>
  </p>
  

<p class="reg_nomDivision">Excellence B</p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 Les qualifiés (64 équipes)</p>
<p class="reg_texte">
Sont qualifiés directement pour les 1/32ème du championnat de France, les 1er, 2ème et 3ème de chaque poule <br><br>
Sont qualifiés pour les barrages les équipes classées 4ème et 5ème de chaque poule et les 2 meilleurs 5ème.
Les vainqueurs de ces barrages participeront aux 1/32ème du champ de France.</p>
 
<p class="reg_sousTitre">1.2 Modalités des rencontres</p>
<p class="reg_texte">  Toutes les confrontations ont lieu sur une seule rencontre. </p> 

<p class="reg_titre">2.Calendrier</p>
<p class="reg_texte"> 
  Barrages : <?php echo $barrageExcB; ?><br/>
  Trente huitième : <?php echo $trenteDeuxeExcB; ?><br/>
  Seizième : <?php echo $seiziemeExcB; ?><br/>
  Huitième : <?php echo $huitiemeExcB; ?><br/>
  Quarts : <?php echo $quartExcB; ?><br/>
  Demi : <?php echo $demiExcB; ?><br/>
  Finale : <?php echo $finaleExcB; ?><br/>
  </p>

<?php
}
 
//*******************************************************************
//*                                                                 *
//*                       Réglement Elite 1                         *
//*                                                                 *
//*******************************************************************



elseif ($cmt == 'elite1' or $cmt == '880280')
{
?>

<p class="reg_nomDivision">Elite 1 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 Les qualifiés (8)</p>
<p class="reg_texte">
Sont qualifiés directement pour les quarts du championnat de France, les 1er 2ème, 3ème et 4ème de chaque poule </p>

<p class="reg_sousTexte">1.2 Modalités des rencontres</p>
<p class="reg_texte">
 Les quarts de finale se jouent sur le terrain de l'équipe la mieux mieux classée.
Les demi-finales et la finale se jouent sur terrain neutre.</p> 
 
<p class="reg_titre">2.Relègation en Elite 2 </p>
<p class="reg_texte">
Des rencontres croiséés opposeront les 5ème et 6ème de chaque poule.
Les perdants de ces confrontations se rencontreront en match A/R. Le perdant de ce match sera relègue en Elite 2.</p>

<p class="reg_titre">3.Calendriers</p>
<p class="reg_sousTitre">3.1 Pour le titre</p> 
<p class="reg_texte">
  Quarts : le 21 mai 2025.<br/>
  Demi : le 03 juin 2025.<br/>
  Finale : le 11 juin 2025<br/></p>
  
  <p class="reg_sousTitre">3.2 Pour le maintien </p>
  <p class="reg_texte">
  Premier tour de maintien : le 21 mai 2025.<br/>
  Match de maintien A/R : les 04 et 11 juin 2025.<br/>
</p>

<?php
}
 
//*******************************************************************
//*                                                                 *
//*                       Réglement Elite 2                         *
//*                                                                 *
//*******************************************************************
elseif ($cmt == 'elite2' or $cmt == '880285')
{
?>

<p class="reg_texte">Elite 2 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTexte">1.1 les qualifiés (4)</p>
<p class="reg_texte">
Sont qualifiés en demi finale du championnat de France, les 1er, 2me, 3me et 4me de chaque poules </p>

<p class="reg_sousTitre">1.2 Modalités des rencontres</u><br>
<p class="reg_texte">
    Les demies finale se jouent sur le terrain de l'équipe la mieux mieux classée et la finale se jouent sur terrain neutre. </p> 
  
<p class="reg_titre">2.Accession en Elite 2 </p>
<p class="reg_texte">
Les 8 équipes qualifiées en 8me de finale seront promues en Fédérale 2 la saison suivante.</p>

<p class="reg_titre">3.Relègation en Fédérale 1 </p>
<p class="reg_texte">
Les équipes classées 10me et 11me seront relègués en Fédérale 1 la saison suivante.</p>

<p class="reg_titre"> 4.Calendrier  </p>
<p class="reg_texte">
Demi : le 04 juin 2025.<br/>
Finale : le 11 juin 2025<br/>
  </p>
 

<?php
}
  

//*******************************************************************
//*                                                                 *
//*                       Réglement fédérale 1    (féminini)        *
//*                                                                 *
//*******************************************************************
elseif ($cmt == 'fem'  or $cmt == '880190')
{
?>

<p class="reg_nomDivision">Fédérale 1 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 les qualifiés (8)</p>
<p class="reg_texte">
Sont qualifiés directement pour les quarts de finale du championnat de France, les 1er et 2e de chaque poules </p>

 
<p class="reg_sousTitre">1.2 Modalités des   rencontres</p>
<p class="reg_texte">
  Les quarts de finale se jouent sur le terrain de l'équipe la mieux mieux classée.
  Les demies finale et la finale se jouent sur terrain neutre. </p> 
  
<p class="reg_titre">2.Accession en Elite 2 </p>
<p class="reg_texte">	
  L'équipe championne de France sera promu en Elite 2 la saison suivante.</p>
 
<p class="reg_titre">3.Relègation en Fédérale 2 
<p class="reg_texte">
Les équipes classées 8me de chaque poule seront relèguées en fédérale 2 la saison prochaine.</p>

<p class="reg_titre">  4.Calendrier</p>
<p class="reg_texte">
  Quarts : le 21 mai 2025.<br/>
  Demi : le 28 mai 2025.<br/>
  Finale : le 11 juin 2025<br/></p>
 

<?php
}
?>  

	<hr/><br/>
 
     <div align = "center">
            <input type="button" onClick="twFermer()" value="Fermer" name="button2">
     </div>

</body>
</html>