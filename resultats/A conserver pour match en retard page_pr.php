<!DOCTYPE html> 
<?php include("../saison.php");?>
        
<html>
<head>
<link type="text/css" rel="stylesheet" href="feuilledestyle.css"/>
<link type="text/css" rel="stylesheet" href="feuilledestyle2.css"/> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description"
content="R�sulats de toutes les comp�titions territoriales s�niors du comit� de Provence. Calendriers, r�sultats et statistiques de l'honneur � la 4me S�rie, �quipes II comprises. Egalement disponible les phases finales territoriales des ann�es pr�c�dentes et les palmar�s territoriaux des differentes divisions du comit�.">
<meta name="keywords"
content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Championnats Territoriaux Provence, Cote d'Azur et Corse</title>
<script language="JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<body text="#000000" link="#FFFFFF" alink="#FFFFFF" vlink="#FFFFFF" bgcolor="#000000">
<div align="center">
  <table width="1100" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="74"> <img src="../images/banniere_haut/(PRCAZC).jpg" width="1100" height="150"></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000">
      <td height="26" colspan="3"><font color="#FFFFFF">
        <?php
    // On inclut le haut de la page
    include("../01ligne.php");
    ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#FFFFFF"> 
      <td height="26" colspan="3"><font color="#FFFFFF"> 
        <?php
    // On inclut le haut de la page
    include("pub12.php");
    ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="5187" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> 
          <p align="center"> 
            <?php
    // On inclut le haut de la page
    include("../01gauche.php");
    ?>
          </p>
        </div>
      </td>
      <td bgcolor="#ffffff" text="#000000" link="#000000" vlink="#000000" alink="#000000" height="5187" valign="top" width="550"> 
        <div align="center"> <br>
          <h1>CHAMPIONNATS TERRITORIAUX</h1>
          <h2>Comités Provence</h2>
          <br>
          <table width="550" border="3" cellspacing="0" bordercolor="#000000" align="center" cellpadding="0">
            <tr bordercolor="#009966"> 
              <td height="23" valign="middle" bgcolor="#006699" align="center" rowspan="2" bordercolor="#006699"> 
                <H4><a href="../phasesfinalesterr/pr/pagehonneur.php?variable_1=<?php echo $saison;?>" target="_top">Phases 
                  finales territoriales</a></H4>
              </td>
              <td height="21" valign="middle" bgcolor="#0099CC" align="center" width="227" bordercolor="#0099CC"> 
                <div align="center"><b><a href="http://francefinalesrugby.franceserv.com/palm_terr2tableau.php?variable_1=(PR)"  target="_blank"><i><font color="#000000" face="Arial, Helvetica, sans-serif">Palmarès 
                  territorial</font></i></a></b></div>
              </td>
            </tr>
            <tr bordercolor="#009966"> 
              <td height="5" valign="middle" align="center" bgcolor="#0099CC" bordercolor="#0099CC"> 
                <div align="center"><a href="../page_comite.php?variable_1=(PR)" target="_blank" ><i><font face="Arial, Helvetica, sans-serif" color="#000000" size="3"><b>Accès 
                  aux infos du comité</b></font></i></a></div>
              </td>
            </tr>
            <tr bordercolor="#006699" valign="middle" bgcolor="#006699"> 
              <td height="40" colspan="2" align="center"> 
                <H4><a href="http://francefinalesrugby.franceserv.com/phases_finales/honneur/pagehonneur.php?variable_1=<?php echo $saison;?>" target="_blank">Championnat 
                  de France</a></H4>
              </td>
            </tr>
          </table>
          <table class="tableau" width="500" align="center" >
            <tr> 
              <td class="tab3" width="122"> 
                <div "><a href="#H">Honneur</a></div>
              </td>
              <td width="140"> 
                <div class="tab3"><a href="#P">Promotion</a></div>
              </td>
              <td class="tab3" width="96"> 
                <div ><a href="#1">1re Série</a></div>
              </td>
              <td  class="tab3" width="126"> 
                <div ><a href="#2">2me Série</a></div>
              </td>
            </tr>
            <tr> 
              <td  class="tab3" width="122" height="15"> 
                <div><a href="#3">3me Série</a> </div>
              </td>
              <td  class="tab3"width="140" height="15"> 
                <div ><a href="#4">4me Série </a> </div>
              </td>
              <td  class="tab3"colspan="2" height="15"> 
                <div ><a href="#fem">Compétitions féminines</a></div>
              </td>
            </tr>
          </table>
          <p> 
            <?php
    // On inclut le haut de la page
    include("../pub4.php");
    ?>
          </p>
          <table width="550" border="0">
            <tr> 
              <td height="3"> 
                <div align="center"> </div>
              </td>
            </tr>
            <tr> 
              <td bgcolor="#006699">&nbsp;</td>
            </tr>
          </table>
          <br>
          <?php   require("comPerso.php"); ?>
          <br>
          <br>
          <br>
          <div id="h5"><a name="H"></a>Honneur</div>
          <table width="600" border="0">
            <tr bordercolor="#000000"> 
              <td height="7" valign="top" width="290"> 
                <div align="center"><font size="4"><b>Equipe I</b></font></div>
              </td>
              <td height="7" valign="top" width="311" nowrap> 
                <div align="center"><font size="4"><b>Equipe II</b></font></div>
              </td>
            </tr>
            <tr bordercolor="#000000"> 
              <td height="7" valign="top" width="290"> 
                <div align="center"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phppr/consult/classement_matchs.php?champ=171"
frameborder="no" 
height="510" width="290"" type="text/html"   />
                  </object></div>
              </td>
              <td height="7" valign="top" width="311"> 
                <div align="center"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phppr/consult/classement_matchs.php?champ=271"
frameborder="no" 
height="510" width="290"" type="text/html"   />
                  </object></div>
              </td>
            </tr>
          </table>
          <table width="515" border="0" align="center">
            <tr> 
              <td width="220" height="59"> 
                <h6> <a href="PR/171.php" target="_blank">Plus d'infos </a></h6>
                <h6><a href="PR/calendrier/171.php" target="_blank">Calendrier 
                  complet</a></h6>
                <h6> 
                  <?php
	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
	mysql_select_db("onepip-france-db3"); // S�lection de la base onepip
  
	$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ='171' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle != phppr_journees.date_prevue and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL"; // Requ�te SQL
	$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 $journee171="$row[2]";
		 }
  
   if ($journee1717>1)
	{ 
	  ?>
                  <a href="LM/page_retards.php" target="_blank"> <h8> 
                  <?php echo " Rencontres 
                  reportées "; ?>
                  </h8> </a> 
                  <?php
	}
    else   
	{     
        echo " ";
	}	
     	 
 mysql_close(); ?>
                </h6>
              </td>
              <td width="178" height="59">&nbsp;</td>
              <td width="220" height="59"> 
                <h6><a href="PR/271.php" target="_blank">Plus d'infos </a></h6>
                <h6><a href="PR/calendrier/271.php" target="_blank">Calendrier 
                  complet</a> </h6>
                <h6> 
                  <?php
	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
	mysql_select_db("onepip-france-db3"); // S�lection de la base onepip
   
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE phppr_journees.id_champ='271' and (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle != phppr_journees.date_prevue and
 (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 $journeer275="$row[2]";
		 }
  
   if ($journeer275>1)
	{ 
	  ?>
                  <a href="PR/page_retards.php" target="_blank"> <h8> 
                  <?php echo " Rencontres 
                  reportées "; ?>
                  </h8> </a> 
                  <?php
	}
    else   
	{     
        echo " ";
	}	
     	 
 mysql_close(); ?>
                </h6>
              </td>
            </tr>
          </table>
          <br>
          <br>
          <div id="h5"><a name="P"></a>Promotion Honneur</div>
          <table width="600" border="0">
            <tr bordercolor="#000000"> 
              <td height="7" valign="top" width="290"> 
                <div align="center"><font size="4"><b>Equipe I</b></font></div>
              </td>
              <td height="7" valign="top" width="311" nowrap> 
                <div align="center"><font size="4"><b>Equipe II</b></font></div>
              </td>
            </tr>
            <tr bordercolor="#000000"> 
              <td height="7" valign="top" width="290"> 
                <div align="center"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phppr/consult/classement_matchs.php?champ=181"
frameborder="no" 
height="450" width="290"" type="text/html"   />
                  </object></div>
              </td>
              <td height="7" valign="top" width="311"> 
                <div align="center"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phppr/consult/classement_matchs.php?champ=9181"
frameborder="no" 
height="450" width="290"" type="text/html"   />
                  </object></div>
              </td>
            </tr>
          </table>
          <table width="515" border="0" align="center">
            <tr> 
              <td width="220" height="59"> 
                <h6> <a href="PR/181.php" target="_blank">Plus d'infos </a></h6>
                <h6><a href="PR/calendrier/181.php" target="_blank">Calendrier 
                  complet</a></h6>
                <h6> 
                  <?php
	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
	mysql_select_db("onepip-france-db3"); // S�lection de la base onepip
  
	$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ='185' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle != phppr_journees.date_prevue and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL"; // Requ�te SQL
	$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 $journee181="$row[2]";
		 }
  
   if ($journee181>1)
	{ 
	  ?>
                  <a href="PR/page_retards.php" target="_blank"> <h8> 
                  <?php echo " Rencontres 
                  reportées "; ?>
                  </h8> </a> 
                  <?php
	}
    else   
	{     
        echo " ";
	}	
     	 
 mysql_close(); ?>
                </h6>
              </td>
              <td width="178" height="59">&nbsp;</td>
              <td width="220" height="59"> 
                <h6><a href="PR/9181.php" target="_blank">Plus d'infos </a></h6>
                <h6><a href="PR/calendrier/9181.php" target="_blank">Calendrier 
                  complet</a> </h6>
                <h6 > 
                  <?php
	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
	mysql_select_db("onepip-france-db3"); // S�lection de la base onepip
   
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE phppr_journees.id_champ='9185' and (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle != phppr_journees.date_prevue and
 (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 $journeer9181="$row[2]";
		 }
  
   if ($journeer9181>1)
	{ 
	  ?>
                  <a href="PR/page_retards.php" target="_blank"> <h8> 
                  <?php echo " Rencontres 
                  reportées "; ?>
                  </h8> </a> 
                  <?php
	}
    else   
	{     
        echo " ";
	}	
     	 
 mysql_close(); ?>
                </h6>
              </td>
            </tr>
          </table>
          <br>
          <br>
          <br>
          <br>
          <table width="550" border="0" cellspacing="0" cellpadding="0">
            <tr> 
              <td bgcolor="#FFFFFF"> 
                <div id="annonce"> 
                  <p><b><font size="3"><a href="../copies_mel/pr/inscriptionsimple.php" target="_top"><font color="#000000" size="5">Inscrivez 
                    vous &agrave; la newsletter</font></a> <br>
                    et recevez l'ensemble des classements des équipes du 
                    comité <br>
                    <br>
                    <a href="http://francefinalesrugby.franceserv.com/copies_mel/0capture/comite/comite_pr.php" target="_blank"><font color="#0000FF" size="4">- 
                    - - Consultez le dernier envoi</font> - - -</a></font></b></p>
                </div>
              </td>
            </tr>
          </table>
          <br>
          <br>
          <div id="h5"><a name="1"></a>1re Série</div>
          <object data="http://francefinalesrugby.franceserv.com/Phpleague/phppr/consult/classement_matchs.php?champ=191"
frameborder="no" 
height="400" width="440"" type="text/html"   />
          </object> 
          <table width="240" border="0" align="center">
            <tr> 
              <td height="59"> 
                <h6> <a href="PR/191.php" target="_blank">Plus d'infos </a></h6>
                <h6><a href="PR/calendrier/191.php" target="_blank">Calendrier 
                  complet</a></h6>
                <h6> 
                  <?php
	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
	mysql_select_db("onepip-france-db3"); // S�lection de la base onepip
  
	$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ='191' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle != phppr_journees.date_prevue and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL"; // Requ�te SQL
	$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 $journee191="$row[2]";
		 }
  
   if ($journee191>1)
	{ 
	  ?>
                  <a href="PR/page_retards.php" target="_blank"> <h8> 
                  <?php echo " Rencontres 
                  reportées "; ?>
                  </h8> </a> 
                  <?php
	}
    else   
	{     
        echo " ";
	}	
     	 
 mysql_close(); ?>
                </h6>
              </td>
            </tr>
          </table>
          <br>
          <br>
          <div id="h5"><a name="2"></a>2me Série</div>
          <object data="http://francefinalesrugby.franceserv.com/Phpleague/phppr/consult/classement_matchs.php?champ=201"
frameborder="no" 
height="370" width="440"" type="text/html"   />
          </object> 
          <table width="240" border="0" align="center">
            <tr> 
              <td height="59"> 
                <h6> <a href="PR/201.php" target="_blank">Plus d'infos </a></h6>
                <h6><a href="PR/calendrier/201.php" target="_blank">Calendrier 
                  complet</a></h6>
                <h6> 
                  <?php
	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
	mysql_select_db("onepip-france-db3"); // S�lection de la base onepip
  
	$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ='201' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle != phppr_journees.date_prevue and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL"; // Requ�te SQL
	$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 $journee201="$row[2]";
		 }
  
   if ($journee201>1)
	{ 
	  ?>
                  <a href="PR/page_retards.php" target="_blank"> <h8> 
                  <?php echo " Rencontres 
                  reportées "; ?>
                  </h8> </a> 
                  <?php
	}
    else   
	{     
        echo " ";
	}	
     	 
 mysql_close(); ?>
                </h6>
              </td>
            </tr>
          </table>
          <br>
          <br>
          <div id="h5"><a name="3"></a><a name="4"></a>3me / 4me Série</div>
          <object data="http://francefinalesrugby.franceserv.com/Phpleague/phppr/consult/classement_matchs.php?champ=221"
frameborder="no" 
height="370" width="440"" type="text/html"   />
          </object> 
          <table width="240" border="0" align="center">
            <tr> 
              <td height="59"> 
                <h6> <a href="PR/221.php" target="_blank">Plus d'infos </a></h6>
                <h6><a href="PR/calendrier/221.php" target="_blank">Calendrier 
                  complet</a></h6>
                <h6> 
                  <?php
	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
	mysql_select_db("onepip-france-db3"); // S�lection de la base onepip
  
	$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ='221' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle != phppr_journees.date_prevue and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL"; // Requ�te SQL
	$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 $journee221="$row[2]";
		 }
  
   if ($journee221>1)
	{ 
	  ?>
                  <a href="PR/page_retards.php" target="_blank"> <h8> 
                  <?php echo " Rencontres 
                  reportées "; ?>
                  </h8> </a> 
                  <?php
	}
    else   
	{     
        echo " ";
	}	
     	 
 mysql_close(); ?>
                </h6>
              </td>
            </tr>
          </table>
          <br>
          <table cellspacing="0" cellpadding="0" border="0" align="center" bordercolor="#000000" height="56" width="550">
            <tr> 
              <td height="7" valign="top" bgcolor="#006699">&nbsp;</td>
            </tr>
            <tr> 
              <td height="21" valign="top"> 
                <div align="center"> </div>
              </td>
            </tr>
          </table>
          <p> 
            <?php
    // On inclut le haut de la page
    include("../pub4.php");
    ?>
            <br>
          </p>
          <table class="tableau" width="500" align="center" >
            <tr> 
              <td class="tab3" width="122"> 
                <div "><a href="#H">Honneur</a></div>
              </td>
              <td width="140"> 
                <div class="tab3"><a href="#P">Promotion</a></div>
              </td>
              <td class="tab3" width="96"> 
                <div ><a href="#1">1re Série</a></div>
              </td>
              <td  class="tab3" width="126"> 
                <div ><a href="#2">2me Série</a></div>
              </td>
            </tr>
            <tr> 
              <td  class="tab3" width="122" height="15"> 
                <div><a href="#3">3me Série</a> </div>
              </td>
              <td  class="tab3"width="140" height="15"> 
                <div ><a href="#4">4me Série </a> </div>
              </td>
              <td  class="tab3"colspan="2" height="15"> 
                <div ><a href="#fem">Compétitions féminines</a></div>
              </td>
            </tr>
          </table>
          <table width="550" border="3" cellspacing="0" bordercolor="#000000" align="center">
            <tr bordercolor="#009966"> 
              <td height="23" valign="middle" bgcolor="#006699" align="center" rowspan="2" bordercolor="#006699"> 
                <H4><a href="../phasesfinalesterr/pr/pagehonneur.php?variable_1=<?php echo $saison;?>" target="_top">Phases 
                  finales territoriales</a></H4>
              </td>
              <td height="21" valign="middle" bgcolor="#0099CC" align="center" width="227" bordercolor="#0099CC"> 
                <div align="center"><b><a href="http://francefinalesrugby.franceserv.com/palm_terr2tableau.php?variable_1=(PR)"  target="_blank"><i><font color="#000000" face="Arial, Helvetica, sans-serif">Palmarès 
                  territorial</font></i></a></b></div>
              </td>
            </tr>
            <tr bordercolor="#009966"> 
              <td height="5" valign="middle" align="center" bgcolor="#0099CC" bordercolor="#0099CC"> 
                <div align="center"><a href="../page_comite.php?variable_1=(PR)" target="_blank" ><i><font face="Arial, Helvetica, sans-serif" color="#000000" size="3"><b>Accès 
                  aux infos du comité</b></font></i></a></div>
              </td>
            </tr>
            <tr bordercolor="#006699" valign="middle" bgcolor="#006699"> 
              <td height="40" colspan="2" align="center"> 
                <H4><a href="http://francefinalesrugby.franceserv.com/phases_finales/honneur/pagehonneur.php?variable_1=<?php echo $saison;?>" target="_blank">Championnat 
                  de France</a></H4>
              </td>
            </tr>
          </table>
          <p> 
            <?php
    // On inclut le haut de la page
    include("../pub_carre.php");
    ?>
          </p>
          <table width="468" border="0" cellspacing="0" bordercolor="#FF66FF" bgcolor="#FFFFFF">
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2" height="72"> 
                <table width="100%" border="3" cellspacing="0" bordercolor="#FF0000" align="center">
                  <tr bordercolor="#FF9966" bgcolor="#FF9933" valign="middle"> 
                    <td height="42" align="center"> 
                      <h1><a name="fem"></a>COMPETITIONS<br>
                        FEMININES </h1>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2" height="26"> 
                <div align="center"> 
                  <p><font color="#000000"> 
                    <?php
    // On inclut le haut de la page
    include("../pub2.php");
    ?>
                    </font></p>
                </div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2" height="2">&nbsp;</td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FF9933"> 
              <td colspan="2" height="25"> 
                <div align="center"><b><font color="#000000">Toutes les poules 
                  et les informations sur les compétitions<br>
                  et les équipes féminines <a href="http://francefinalesrugby.franceserv.com/feminine/index_fem.php" target="_blank">ICI 
                  </a></font></b></div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF"> 
              <td colspan="2" bgcolor="#FFCCFF" height="13">&nbsp; </td>
            </tr>
            <tr bordercolor="#FFCCFF"> 
              <td colspan="2" bgcolor="#FFCCFF" height="27"> 
                <h1>Championnats de France</h1>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF"> 
              <td colspan="2" bgcolor="#FFCCFF" height="33"> 
                <h2> Elite 1 - Top 8</h2>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2" height="193"> 
                <div align="center"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phpfem/consult/classementA.php?champ=280
 type="text/html" height="200"  width="250""  />
                  </object></div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2" height="9"> 
                <div align="center"><font size="2"><i><font color="#000000">Pas 
                  d'équipe du comité dans cette compétition</font></i></font></div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2"> 
                <h2>Elite 2 <br>
                  Armelle Auclair</h2>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td> 
                <div align="center"><font size="4" color="#000000"><b>Poule 1</b></font></div>
              </td>
              <td> 
                <div align="center"><font size="4" color="#000000"><b>Poule 2</b></font></div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td width="231" height="47"><b><font size="1"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phpfem/consult/classementA.php?champ=285
 type="text/html" height="240"  width="250""  />
                </object></font></b></td>
              <td width="236" height="47"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phpfem/consult/classementA.php?champ=286
 type="text/html" height="240"  width="250""  />
                </object></td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2" height="19"> 
                <div align="center"><font size="2"><i><font color="#000000">Pas 
                  d'équipe du comité dans cette compétition</font></i></font></div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2" height="47"> 
                <h2>Fédérale &agrave; XV</h2>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2"> 
                <div align="center"><b><font size="3">Poule 2</font></b></div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2"> 
                <div align="center"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phpfem/consult/classementA.php?champ=292
 type="text/html" height="250"  width="250""  />
                  </object></div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2"> 
                <div align="center"><font size="2" color="#FF0000" face="Geneva, Arial, Helvetica, san-serif"><b><a href="javascript:;" onClick="MM_openBrWindow('../feminine/resultats/fed/292.php','','scrollbars=yes,width=930')"><i></i></a></b></font></div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FF9933"> 
              <td colspan="2"> 
                <div align="center"><b><font color="#000000">Toutes les poules 
                  et les informations sur les compétitions<br>
                  et les équipes féminines <a href="http://francefinalesrugby.franceserv.com/feminine/index_fem.php" target="_blank">ICI 
                  </a></font></b></div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2"> 
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("../pub4.php");
    ?>
                  </font></div>
              </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2">&nbsp; </td>
            </tr>
            <tr bordercolor="#FFCCFF" bgcolor="#FFCCFF"> 
              <td colspan="2"> 
                <table width="100%" border="3" cellspacing="0" bordercolor="#FF0000" align="center">
                  <tr bordercolor="#FF9966" bgcolor="#FF9933" valign="middle"> 
                    <td height="42" width="223" align="center"> 
                      <div align="center"><font face="Arial, Helvetica, sans-serif" color="#FFFFFF"><b><a href="http://francefinalesrugby.franceserv.com/phases_finales/fem_federale1/pagefem_federale1.php?variable_1=<?php echo $saison;?>" target="_blank">Championnat 
                        de France</a></b></font></div>
                    </td>
                    <td height="42" width="231" align="center"> 
                      <div align="center"><font face="Arial, Helvetica, sans-serif" color="#FFFFFF"><b><a href="javascript:;" onClick="MM_openBrWindow('http://francefinalesrugby.franceserv.com/divisions/page_fem_elite1.php','','scrollbars=yes,width=1025,height=700')">Palmarès 
                        </a></b></font></div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <p><font color="#FFFFFF"></font></p>
        </div>
      </td>
      <td height="5187" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php
    // On inclut le haut de la page
    include("../00droite.php");
    ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="100%" border="1" bordercolor="#006699">
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("../comitebas.php");
    ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("pub1.php");
    ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("../bas.php");
    ?>
                  </font></div>
              </td>
            </tr>
          </table>
        </div>
      </th>
    </tr>
  </table>
</div>
<footer>
<div id="9129-5"><script src="//ads.themoneytizer.com/s/gen.js?type=5">
</script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&formatId=5" >
</script></div>
</footer>
</body>

</html>
