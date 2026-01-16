<?php
$ligue = "Nouvelle Aquitaine";
$prenom="test1";
$name="test2";
//$mail ="francefinalesrugby@free.fr";
$tabmail = array (
'francefinalesrugby@free.fr',
'larrondo-bixente@hotmail.fr',
'ludovic6892@hotmail.com',
'maitecurutchet@orange.fr',
'notaryc@wanadoo.fr',
'olivier.gachen@wanadoo.fr',
'sergebaile@yahoo.fr',
'socatp@wanadoo.fr',
'wolffquentin@yahoo.fr',
'ximista@sfr.fr',
'7580v@ffr.fr',
'alain.stgo@wanadoo.fr',
'batou1997@live.fr',
'bernard.minvielle@wanadoo.fr',
'berotche@hotmail.fr',
'capde.ju@wanadoo.fr',
'christian.sangla@orange.fr',
'dominique.touya@wanadoo.fr',
'jeanbatisteamulet@gmail.com',
'jeanluc.arriau@cneap.fr',
'jf.s4@wanadoo.fr',
'jmdachary@orange.fr',
'michel.haget@gmail.com',
'nicobeach@hotmail.fr',
'patricklaclau@orange.fr',
'peppacourbasson@hotmail.fr',
'andre.lapeyre@neuf.fr',
'anthony.rey@gmail.com',
'belamarque@orange.fr',
'benoit.pailhassar@laposte.net',
'casabonne.gerard@neuf.fr',
'casaux.florence@neuf.fr',
'celine.iralde@wanadoo.fr',
'damienmondot@hotmail.fr',
'fabinho64@hotmail.fr',
'famille.tisne@sfr.fr',
'guillaumegarrocq@gmail.com',
'hidalgomichel@neuf.fr',
'kikou-64@live.fr',
'marielle.rachou@sfr.fr',
'norbert.corlieu@laposte.net',
'oscamou.frederic@neuf.fr',
'paul.bayautet@hotmail.fr',
'phillip.bru@wanadoo.fr',
'philou.bourdieu@orange.fr',
'poup64@neuf.fr',
't.laperne@gmail.com',
'xavier.tucoo@hotmail.fr'




);		
//$tabmail = array ('francefinalesrugby@free.fr');	
foreach($tabmail as $mail)
{
    echo'- '.$mail.'<br/>';

//$message ="

//	http://francefinalesrugby.franceserv.com//Phpleague/phpca/consult2/classement_matchs.php?champ=174
//	http://francefinalesrugby.franceserv.com//Phpleague/phpca/consult2/classement_matchs.php?champ=274
//	<iframe scr=\"/http://francefinalesrugby.franceserv.com/Phpleague/phpab/consult/classement_journeesupp.php?champ=171\"
//			  type=\"text/html\" >
//  </iframe> 	
//";
$message0 = "<div align=\"center\" ><img src=http://francefinalesrugby.franceserv.com/images/stade3.jpg width=100% ></div>
<br />
<div align=\"center\"><font color=\"#FFFF00\"><b><font color=\"#000000\" face=\"Geneva, Arial, Helvetica, san-serif\">France 
  Finales Rugby vous propose <br>
  r&eacute;sultats et classements de vos &eacute;quipes.</font></b></font> </div>
  <br />
<hr />
";
$titre1 = "<div align=\"center\" color=\"#ff0000\"><h2>Equipe Fanion</h2></div>";
$message1 ="
<!--							-->
<!-- Zone de copie : equipe 1 	-->
<!--							-->




<head> 

<style>
table.tablephpca2 {border-style: solid; border-color:#3B487F; border-width: 2;} /* bordure tableau */

tr.accession {background-color: #ccffcc} /* couleur partie accession ou coupe d'europe */
tr.barrage {background-color: #66CCFF} /* couleur partie barrage ou coupe d'europe*/
tr.relegation {background-color: #FFcc99} /* couleur partie relégation */

tr.ligne1 {background-color: #E5E5E5} /* première ligne grise du classement */
tr.ligne2 {background-color: #FFFFFF} /* seconde ligne blanche du classement */

/* --------- tableau journée --------- */

tr.date {color: #FFFFFF; background-color: #0066cc} /* date des rencontres*/

tr.trphpca3 {background-color: #3b487f ; color: #FFFF00; font-size: 10pt;} /* titre dans les tableaux */



</style>
</head>
<body>

 

<table align=\"center\" class=\"tablephpca2\"  width=\"100%\" cellspacing=\"1\" cellpadding=\"1\"><tr><td><table cellspacing=\"0\" align=\"center\" width=\"100%\" cellpadding=\"1\">
<tr class=\"trphpca3\">
<th colspan=\"5\"><b>Journ&eacute;e n&deg; 8</b></th>
</tr><tr class=\"date\"><td colspan=\"5\" align=\"center\">Dimanche 17 novembre - 15h30</td></tr><tr class=\"ligne1\"><td align=\"right\" width=\"40%\">Saint Sever</td><td align=\"center\">10 - 16</a></td><td align=\"left\" width=\"40%\">Vallee de l Escou</td></tr>
<tr class=\"ligne2\"><td align=\"right\" width=\"40%\">Salies de Bearn</td><td align=\"center\">13 - 19</a></td><td align=\"left\" width=\"40%\">Leon</td></tr>
<tr class=\"ligne1\"><td align=\"right\" width=\"40%\">Nord Bearn XV</td><td align=\"center\">6 - 13</a></td><td align=\"left\" width=\"40%\">Lembeye</td></tr>
<tr class=\"ligne2\"><td align=\"right\" width=\"40%\">Saint Palais</td><td align=\"center\">32 - 9</a></td><td align=\"left\" width=\"40%\">Benejacq</td></tr>
<tr class=\"date\"><td colspan=\"5\" align=\"center\">Dimanche 05 janvier - 15h30</td></tr><tr class=\"ligne1\"><td align=\"right\" width=\"40%\">Habas</td><td align=\"center\"> - </a></td><td align=\"left\" width=\"40%\">Montfort en Chalosse</td></tr>
</table></td></tr></table>
<br />
<table class=\"tablephpca2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpca3\"><th colspan=\"11\"></th></tr>
<tr class=\"trphpca3\">


<th align=\"center\">Pl</th>
<th align=\"left\">Equipe</th>
<th align=\"left\">Points</th>
<th align=\"left\"> J </th>

<th align=\"left\"></th></tr>
<tr class=\"accession\">
<td align=\"center\">1</td><td>Nord Bearn XV<td>26<td>8<tr class=\"accession\">
<td align=\"center\">2</td><td>Saint Palais<td>25<td>7<tr class=\"accession\">
<td align=\"center\">3</td><td>Lembeye<td>19<td>7<tr class=\"accession\">
<td align=\"center\">4</td><td>Habas<td>18<td>6<tr class=\"ligne2\">
<td align=\"center\">5</td><td>Benejacq<td>15<td>7<tr class=\"ligne1\">
<td align=\"center\">6</td><td>Salies de Bearn<td>13<td>7<tr class=\"ligne2\">
<td align=\"center\">7</td><td>Montfort en Chalosse<td>13<td>5<tr class=\"ligne1\">
<td align=\"center\">8</td><td>Leon<td>12<td>7<tr class=\"relegation\">
<td align=\"center\">9</td><td>Saint Sever<td>10<td>6<tr class=\"relegation\">
<td align=\"center\">10</td><td>Vallee de l Escou<td>9<td>8</table>



<!-- Fin de la zone de copie Equipe 1 -->


";
$titre2 = "<div align=\"center\" color=\"#ff0000\"><h2>Equipe Réserve</h2></div>";
$message2 ="

<!--							-->
<!-- Zone de copie : equipe 2 	-->
<!--							-->


<table align=\"center\" class=\"tablephpca2\"  width=\"100%\" cellspacing=\"1\" cellpadding=\"1\"><tr><td><table cellspacing=\"0\" align=\"center\" width=\"100%\" cellpadding=\"1\">
<tr class=\"trphpca3\">
<th colspan=\"5\"><b>Journ&eacute;e n&deg; 8</b></th>
</tr><tr class=\"date\"><td colspan=\"5\" align=\"center\">Dimanche 17 novembre - 13h45</td></tr><tr class=\"ligne1\"><td align=\"right\" width=\"40%\">Nord Bearn XV</td><td align=\"center\">7 - 3</a></td><td align=\"left\" width=\"40%\">Lembeye</td></tr>
<tr class=\"ligne2\"><td align=\"right\" width=\"40%\">Saint Palais</td><td align=\"center\"> - </a></td><td align=\"left\" width=\"40%\">Benejacq</td></tr>
<tr class=\"ligne1\"><td align=\"right\" width=\"40%\">Saint Sever</td><td align=\"center\">23 - 10</a></td><td align=\"left\" width=\"40%\">Vallee de l Escou</td></tr>
<tr class=\"ligne2\"><td align=\"right\" width=\"40%\">Salies de Bearn</td><td align=\"center\">22 - 5</a></td><td align=\"left\" width=\"40%\">Leon</td></tr>
<tr class=\"date\"><td colspan=\"5\" align=\"center\">Dimanche 05 janvier - 13h45</td></tr><tr class=\"ligne1\"><td align=\"right\" width=\"40%\">Habas</td><td align=\"center\"> - </a></td><td align=\"left\" width=\"40%\">Montfort en Chalosse</td></tr>
</table></td></tr></table>
<br />
<table class=\"tablephpca2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpca3\"><th colspan=\"11\"></th></tr>
<tr class=\"trphpca3\">


<th align=\"center\">Pl</th>
<th align=\"left\">Equipe</th>
<th align=\"left\">Points</th>
<th align=\"left\"> J </th>

<th align=\"left\"></th></tr>
<tr class=\"accession\">
<td align=\"center\">1</td><td>Nord Bearn XV<td>30<td>8<tr class=\"accession\">
<td align=\"center\">2</td><td>Lembeye<td>27<td>7<tr class=\"accession\">
<td align=\"center\">3</td><td>Saint Palais<td>24<td>6<tr class=\"accession\">
<td align=\"center\">4</td><td>Benejacq<td>23<td>6<tr class=\"ligne2\">
<td align=\"center\">5</td><td>Salies de Bearn<td>20<td>7<tr class=\"ligne1\">
<td align=\"center\">6</td><td>Montfort en Chalosse<td>13<td>5<tr class=\"ligne2\">
<td align=\"center\">7</td><td>Leon<td>8<td>7<tr class=\"ligne1\">
<td align=\"center\">8</td><td>Saint Sever<td>8<td>6<tr class=\"ligne2\">
<td align=\"center\">9</td><td>Habas<td>6<td>6<tr class=\"ligne1\">
<td align=\"center\">10</td><td>Vallee de l Escou<td>0<td>8</table>


</body>




<!-- Fin de la zone de copie Equipe 2 -->


<!-- Prochaine journée 	-->


<p align=\"center\"><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>
Prochaine journ&eacute;e le 24 Novembre 2019</b></font></p>
<hr />
<hr /><hr />
";
$message3 ="
<!--Tableau des differents liens-->
<br />



<table width=\"360\" border=\"1\" align=\"center\" bordercolor=\"#000000\" cellspacing=\"0\">
  <tr> 
    <td colspan=\"3\" height=\"80\"> 
      <div align=\"center\"> 
        <p><b><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Consultez les 
          autres résultats et classements du rugby fran&ccedil;ais<br>
          &agrave; partir de votre smartphone<br>
          </font></b><b><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">ou 
          de votre PC</font></b></p>
      </div>
    </td>
  </tr>
  <tr> 
    <td width=\"136\">&nbsp;</td>
    <td width=\"87\"> 
      <div align=\"center\"></div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"></div>
    </td>
  </tr>
  <tr> 
    <td width=\"136\"> 
      <div align=\"center\"><font face=\"Arial, Helvetica, sans-serif\"><b><font color=\"#FF0000\"><i>Autres 
        résultats <br>
        de la Ligue</i></font></b></font></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"><font face=\"Arial, Helvetica, sans-serif\"><a href=http://francefinalesrugby.franceserv.com>Site 
        Internet</a></font></div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><font face=\"Arial, Helvetica, sans-serif\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=f1&champion=141&champion30=171>Smartphone</a></font></div>
    </td>
  </tr>
  <tr> 
    <td width=\"136\"> 
      <div align=\"center\"></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"></div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"></div>
    </td>
  </tr>
  <tr bgcolor=\"#CCCCCC\"> 
    <td width=\"136\"> 
      <div align=\"center\"><b><font color=\"#FF0000\"><i>Top14<br>
        Pro D2</i></font></b></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/resultats/page_pro.php>Site 
        Internet</a></div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=pro&champion=110&champion30=171>Smartphone</a></div>
    </td>
  </tr>
  <tr> 
    <td width=\"136\"> 
      <div align=\"center\"><b><font color=\"#FF0000\"><i>Fédérale 1<br>
        Espoir</i></font></b></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/resultats/page_f1.php>Site 
        Internet</a></div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=f1&champion=141&champion30=171>Smartphone</a></div>
    </td>
  </tr>
  <tr bgcolor=\"#CCCCCC\"> 
    <td width=\"136\"> 
      <div align=\"center\"><font color=\"#FF0000\"><i><b>Fédérale 2<br>
        Fédérale B</b></i></font></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/resultats/page_fed2.php>Site 
        Internet</a></div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=fed2&champion=151&champion30=171>Smartphone</a></div>
    </td>
  </tr>
  <tr> 
    <td width=\"136\"> 
      <div align=\"center\"><font color=\"#FF0000\"><i><b> Fédérale 3<br>
        Excellence B</b></i></font></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/resultats/page_fed3NE.php>Site 
        Internet</a></div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=fed3NE&champion=161&champion30=171>Smartphone</a></div>
    </td>
  </tr>
  <tr bgcolor=\"#CCCCCC\"> 
    <td width=\"136\"> 
      <div align=\"center\"><font color=\"#FF0000\"><i><b>Comp&eacute;tititons<br>
        f&eacute;minines </b></i></font></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/feminine/resultats/page_elite.php>Site 
        Internet</a></div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=fem&champion=280&champion30=171>Smartphone</a></div>
    </td>
  </tr>
</table>
</div>

<!-- Desincription et adresse -->
<hr />

<table align=\"center\">
<tr bgcolor=\"#FFFFFF\"> 
    <td height=\"16\"  bordercolor=\"#000000\"> 
      <div align=\"center\">Si vous ne souhaitez plus recevoir la Newsletter de FranceFinalesrugby 
        , cliquez <a href=http://francefinalesrugby.franceserv.com/communication/ca/desinscription.php>ICI</a></div>
    </td>
  </tr>
  <tr bgcolor=\"#FFFFFF\"> 
    
  </tr>
  <tr bgcolor=\"#FFFFFF\"> 
    <td height=\"48\"  bordercolor=\"#000000\"> 
      <div align=\"center\"> 
        <p><b><font size=\"4\" color=\"#0000FF\">France Finales Rugby<br>
          </font></b><font size=\"4\" color=\"#0000FF\"><b>80 Avenue du 11 novembre 31230 
          L'Isle en Dodon</b></font></p>
      </div>
    </td>
  </tr>
</table>
<br />
";	

$headers =  "From: \"FranceFinalesRugby\"<francefinalesrugby@free.fr>\n"; // Expéditeur
$headers .= "Content-type: text/html; charset=\"utf-8\""; // Encodage en HTML et UTF-8
mail($mail, "Résultats et classements de vos équipes (après la 8me journée)", $message0.$titre1.$message1.$titre2.$message2.$message3, $headers); // Envoi du mail
echo "message envoyé";
}
?>