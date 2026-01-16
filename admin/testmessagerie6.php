<?php
$ligue = "Nouvelle Aquitaine";
$prenom="test1";
$name="test2";
//$mail ="francefinalesrugby@free.fr";
$tabmail = array (
'francefinalesrugby@free.fr','m.delpech@laposte.net','onepipthib@gmail.com',

);		
//$tabmail = array ('francefinalesrugby@free.fr');	
foreach($tabmail as $mail)
{
    echo'- '.$mail.'<br/>';

$message ="

	<div align=\"center\" >
	<object data=http://francefinalesrugby.franceserv.com//Phpleague/phpca/consult2/classement_matchs.php?champ=172
			height=300 width=200>

  </object> 
</font> </div>  
";
$message0 = "<div align=\"center\" ><img src=http://francefinalesrugby.franceserv.com/images/stade3.jpg width=100% ></div>
<br />
<div align=\"center\"><font color=\"#FFFF00\"><b><font color=\"#000000\" face=\"Geneva, Arial, Helvetica, san-serif\">France 
  Finales Rugby vous propose <br>
  r&eacute;sultats et classements de vos &eacute;quipes.</font></b></font> </div>
  <br />
<hr />
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
        Internet</font></div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><font face=\"Arial, Helvetica, sans-serif\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=f1&champion=141&champion30=171>Smartphone</font></div>
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
        Internet</div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=pro&champion=110&champion30=171>Smartphone</div>
    </td>
  </tr>
  <tr> 
    <td width=\"136\"> 
      <div align=\"center\"><b><font color=\"#FF0000\"><i>Fédérale 1<br>
        Espoir</i></font></b></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/resultats/page_f1.php>Site 
        Internet</div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=f1&champion=141&champion30=171>Smartphone</div>
    </td>
  </tr>
  <tr bgcolor=\"#CCCCCC\"> 
    <td width=\"136\"> 
      <div align=\"center\"><font color=\"#FF0000\"><i><b>Fédérale 2<br>
        Fédérale B</b></i></font></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/resultats/page_fed2.php>Site 
        Internet</div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=fed2&champion=151&champion30=171>Smartphone</div>
    </td>
  </tr>
  <tr> 
    <td width=\"136\"> 
      <div align=\"center\"><font color=\"#FF0000\"><i><b> Fédérale 3<br>
        Excellence B</b></i></font></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/resultats/page_fed3NE.php>Site 
        Internet</div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=fed3NE&champion=161&champion30=171>Smartphone</div>
    </td>
  </tr>
  <tr bgcolor=\"#CCCCCC\"> 
    <td width=\"136\"> 
      <div align=\"center\"><font color=\"#FF0000\"><i><b>Comp&eacute;tititons<br>
        f&eacute;minines </b></i></font></div>
    </td>
    <td width=\"87\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/feminine/resultats/page_elite.php>Site 
        Internet</div>
    </td>
    <td width=\"93\"> 
      <div align=\"center\"><a href=http://francefinalesrugby.franceserv.com/smart/171.php?comite=fem&champion=280&champion30=171>Smartphone</div>
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
        , cliquez <a href=http://francefinalesrugby.franceserv.com/communication/ca/desinscription.php>ICI</div>
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
mail($mail, "Résultats et classements de vos équipes (après la 8me journée)", $message0.$message, $headers); // Envoi du mail
echo "message envoyé";
}
?>