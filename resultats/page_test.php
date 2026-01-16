     
<!DOCTYPE html>
<head>
<title>pageTest</title>
<link type="text/css" rel="stylesheet" href="resultat.css"/> 
<link type="text/css" rel="stylesheet" href="../ligne1.css"/>
<meta name="description"
content="Le site non officiel du Comité Midi Pyrénées de rugby : Histoire, clubs, calendrier des matches, compétitions, 
résultats, la Coupe du Monde � Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, 
history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
<meta name="keywords"
content="comité Bourgogne, Rugby breton,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<meta name="revisit-after" content="15 day">
<meta charset="UTF-8">

<script language="JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>
<body bgcolor="#000000"  >
<?php include("../saison.php");?>
<div align="center">
  <table width="1250" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="140"><img src="../images/stade3.jpg" width="1250" height="150"> 
      </td>
    </tr>
    <tr valign="middle" align="center"> 
      <td  colspan="3" >
        <?php    include("../01ligne.php");   ?>
        </td>
    </tr>
    <tr valign="middle" align="center"> 
      <td width="225" height="4612"  align="center" valign="top"> 
        <?php    include("../01gauche.php");  ?>
      </td>
      <td  height="4612" valign="top" width="580" bgcolor="#FFFFFF" > 
        <div align="center"> <br />
          <h1>CHAMPIONNATS TERRITORIAUX</h1>
          <h1><font color="#FF0000">TEST - TEST</font> </h1>
		  <br />
          <table width="550" border="3" cellspacing="0" align="center" cellpadding="0" bordercolor="#000000">
            <tr bordercolor="#009966"> 
              <td height="23" valign="middle" bgcolor="#006699" align="center" rowspan="2" bordercolor="#006699"> 
                <h4><a href="../phasesfinalesterr/bg/pagehonneur.php?annee=<?php echo $saison;?>" target="_top">Phases 
                  finales territoriales</a></h4>
              </td>
              <td  class="coindroit" height="19" width="227" "> 
                <a href="http://francefinalesrugby.franceserv.com/palm_terr2tableau.php?annee=(MPY)"  target="_top">Palmarès 
                  territorial</a>
              </td>
            </tr>
            <tr > 
              <td class="coindroit" height="5" > 
                <a href="../page_comite.php?annee=(MPY)" target="_top" >Accès 
                  aux infos du comité</a>
              </td>
            </tr>
            <tr bordercolor="#006699" valign="middle" bgcolor="#006699"> 
              <td height="40" colspan="2" align="center"> 
                <h4><a href="http://francefinalesrugby.franceserv.com/phases_finales/honneur/pagehonneur.php?annee=<?php echo $saison;?>" target="_top">Championnat 
                  de France</a></h4>
              </td>
            </tr>
          </table>
          
            <?php include("sommaire.php"); ?>
          
          <p><br />
            <a name="H"></a><a name="p"></a><br />
          </p>
          <h5>Poule 1</h5>
       <table width="600" >
            <tr  > 
              <td class="titreEquipe" width="295" > Equipe I </td>           	
              <td class="titreEquipe" width="293"  > Equipe II </td>
            </tr>
         </table>
         <object data="http://francefinalesrugby.franceserv.com/Phpleague/Phpmpy/consult/classement.php?champ=171" 
			frameborder="no"  scrolling="AUTO" width="300" type="text/html" align="top"   />
            </object>
			<object data="http://francefinalesrugby.franceserv.com/Phpleague/Phpmpy/consult/classement.php?champ=271" 
			frameborder="no"   width="300" type="text/html" align="top"   />
            </object>
			
          <table width="515" border="0" align="center">
            <tr> 
              <td width="220" height="59"> 
                <h6> <a href="TEST/141.php" target="_top">Plus d'infos </a></h6>
                <h6><a href="TEST/calendrier/141.php" target="_top">Calendrier 
                  complet</a></h6>
                <h6> 
                  <?php
	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
	mysql_select_db("onepip-france-db3"); // Sélection de la base onepip
    
	$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, phptest_matchs.buts_dom, phptest_matchs.buts_ext, phptest_journees.date_prevue, phptest_journees.id_champ, phptest_clubs.nom, phptest_clubs.id FROM  phptest_matchs, phptest_journees, phptest_clubs 
	WHERE phptest_clubs.id=phptest_matchs.id_equipe_dom and phptest_matchs.id_journee= phptest_journees.id and phptest_matchs.date_reelle != phptest_journees.date_prevue and phptest_clubs.id=phptest_matchs.id_equipe_dom and phptest_matchs.buts_dom is NULL and phptest_matchs.buts_ext is NULL"; 
	$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 $journee="$row[2]";
		 }
  
   if ($journee>1)
	{ 
	  ?>
                  <a href="TEST/page_retards_TEST.php" target="_top">
                  <h8><?php echo " Rencontres 
                  reportées "; ?></h8>
                  </a> 
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
                <h6><a href="TEST/241.php" target="_top">Plus d'infos </a></h6>
                <h6><a href="TEST/calendrier/241.php" target="_top">Calendrier complet</a> </h6>
                <h6 ><a href="TEST/page_retards_TEST.php" target="_top"><h8> 
                  <?php
	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
	mysql_select_db("onepip-france-db3"); 
    
	$query = "SELECT  phptest_matchs.id_equipe_dom, phptest_matchs.id_equipe_ext, phptest_matchs.id_journee, phptest_matchs.date_reelle, phptest_matchs.buts_dom, phptest_matchs.buts_ext, phptest_journees.date_prevue, phptest_journees.id_champ, phptest_clubs.nom, phptest_clubs.id 
			  FROM  phptest_matchs, phptest_journees, phptest_clubs 
			  WHERE phptest_clubs.id=phptest_matchs.id_equipe_dom and phptest_matchs.id_journee= phptest_journees.id and phptest_matchs.date_reelle != phptest_journees.date_prevue and phptest_clubs.id=phptest_matchs.id_equipe_dom and phptest_matchs.buts_dom is NULL and phptest_matchs.buts_ext is NULL"; 
	$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 $journee="$row[2]";
		 }
  
   if ($journee>1)
	{ 
	  ?>
                  <h8>
                  <?php echo " Rencontres 
                  reportées "; ?>
                  </h8> 
                  <?php
	}
    else   
	{     
        echo " ";
	}	
     	 
 mysql_close(); ?>
                  </h8></a></h6>
              </td>
            </tr>
          </table>
          <br />
          <table width="550" border="0" bgcolor="#CCCCCC">
            <tr> 
              <td height="135"> 
                <div align="center"><a href="https://play.google.com/store/apps/details?id=com.roro.rjere" target="_top"><img src="../images/images%20GOOGLE%20PLAY2.jpg" width="254" height="83" border="0"></a></div>
                <div align="center"><font face="Arial, Helvetica, sans-serif"><b>Télécharger 
                  l'appli <font color="#FF0000">France Finales Rugby App</font><br>
                  pour consulter résultats et classements</b></font></div>
                </td>
            </tr>
          </table>
          <a name="H"></a> <a name="p"></a> 
          <h5>Poule 2</h5>
       
          <table width="600" border="0">
            <tr bordercolor="#000000"> 
              <td class="titreEquipe" width="291" > Equipe I </td>
              <td class="titreEquipe" width="299" > Equipe II </td>
            </tr>
          </table>
          <object data="http://francefinalesrugby.franceserv.com/Phpleague/Phpmpy/consult/classement_matchs.php?champ=171" 
			frameborder="no" 
				height="250" width="450" type="text/html" align="top"   />
            </object>
			
			<object data="http://francefinalesrugby.franceserv.com/Phpleague/Phpmpy/consult/classement_matchs.php?champ=271"
			frameborder="no" height="450" width="300" type="text/html" align="top"   />
            </object>
          <table width="515" border="0" align="center">
            <tr> 
              <td width="220" height="31"> 
                <h6> <a href="TEST/142.php" target="_top">Plus d'infos </a></h6>
                <h6><a href="TEST/calendrier/142.php" target="_top">Calendrier complet</a></h6>
                
              
              </td>
              <td width="178" height="31">&nbsp;</td>
              <td width="220" height="31"> 
                <h6><a href="TEST/242.php" target="_top">Plus d'infos </a></h6>
                <h6><a href="TEST/calendrier/242.php" target="_top">Calendrier complet</a> </h6>
           
                
              </td>
            </tr>
          </table>
          <br>
          <a name="H"></a><a name="p"></a><br>
          <h5>Poule 3</h5>
          <object data="http://francefinalesrugby.franceserv.com/Phpleague/phpn/consult/classement_matchs.php?champ=191"
				frameborder="no"  framespacing="no" noresize scrolling="no" width="440" type="text/html"   />
          </object> 
          <table width="240" border="0" align="center">
            <tr> 
              <td height="35"> 
                <h6> <a href="N/191.php" target="_top">Plus d'infos </a></h6>
                <h6><a href="N/calendrier/191.php" target="_top">Calendrier complet</a></h6>
              	 
              
              </td>
            </tr>
          </table>
          <br />
          <a name="2"></a><br>
          <h5>Poule 4</h5>
          <object data="http://francefinalesrugby.franceserv.com/Phpleague/phpn/consult/classement_matchs.php?champ=191"
				frameborder="no" height="350" width="440"" type="text/html"   />
          </object> 
          <table width="240" border="0" align="center">
            <tr> 
              <td height="33"> 
                <h6> <a href="N/191.php" target="_top">Plus d'infos </a></h6>
                <h6><a href="N/calendrier/191.php" target="_top">Calendrier complet</a></h6>               
              </td>
            </tr>
          </table>
          <br>
          <a name="p"></a><a name="H"></a><br>
          <h5>Honneur - Promotion Honneur</h5>
          <table cellspacing="0" cellpadding="0"  height="30" width="600">
            <tr> 
              <td class="titreEquipe"  width="300"> Poule 1 </td>
              <td class="titreEquipe"  width="300"> Poule 2 </td>
            </tr>
          </table>
         <object data="http://francefinalesrugby.franceserv.com/Phpleague/phptest/consult/classement_matchs.php?champ=171" 
				frameborder="no" height="380" width="300"" type="text/html" align="top"   />
         </object>
			<object data="http://francefinalesrugby.franceserv.com/Phpleague/phptest/consult/classement_matchs.php?champ=171" 
				frameborder="no" height="380" width="300"" type="text/html" align="top"   />
            </object>
          <table width="515" border="0" align="center">
            <tr> 
              <td width="220" height="32"> 
                <h6> <a href="TEST/171.php" target="_top">Plus d'infos </a></h6>
                <h6><a href="TEST/calendrier/171.php" target="_top">Calendrier complet</a></h6>           
              </td>
              <td width="178" height="32">&nbsp;</td>
              <td width="220" height="32"> 
                <h6><a href="TEST/271.php" target="_top">Plus d'infos </a></h6>
                <h6><a href="TEST/calendrier/271.php" target="_top">Calendrier complet</a> </h6>              
              </td>
            </tr>
          </table>
          <br>
        
            <?php include("sommaire.php"); ?>
          
          <table width="550" border="3" cellspacing="0" bordercolor="#000000" align="center">
            <tr bordercolor="#009966"> 
              <td height="23" valign="middle" bgcolor="#006699" align="center" rowspan="2" bordercolor="#006699"> 
                <h4><a href="javascript:;" onClick="MM_openBrWindow('../phasesfinalesterr/bg/pagehonneur.php?annee=<?php echo $saison;?>','','width=1000,height=690')" target="_top">Phases 
                  finales territoriales</a> </h4>
              </td>
              <td class="coindroit" height="21" valign="middle" bgcolor="#0099CC" align="center" width="227" bordercolor="#0099CC"> 
                <a href="http://francefinalesrugby.franceserv.com/palm_terr2tableau.php?annee=(AU)"  target="_top">Palmarès 
                territorial</a> </td>
            </tr>
            <tr bordercolor="#009966"> 
              <td  class="coindroit" height="5" valign="middle" align="center" bgcolor="#0099CC" bordercolor="#0099CC"> 
                <a href="../page_comite.php?annee=(AU)" target="_top" >Accès 
                aux infos du comité</a> </td>
            </tr>
            <tr bordercolor="#006699" valign="middle" bgcolor="#006699"> 
              <td height="40" colspan="2" align="center"> 
                <h4><a href="http://francefinalesrugby.franceserv.com/phases_finales/honneur/pagehonneur.php?annee=<?php echo $saison;?>" target="_top">Championnat 
                  de France</a> </h4>
              </td>
            </tr>
          </table>
          <p><br>
            <?php   include("pub2.php"); ?>
            <a name="fem"></a><br>
          </p>
          <table width="468" border="0" cellspacing="0" bordercolor="#FFCCFF" bgcolor="#FFCCFF">
            <tr > 
              <td colspan="2" height="116"> <br>
                <table width="500" border="3" cellspacing="0" bordercolor="#FF0000" align="center">
                  <tr  bgcolor="#FF9933" > 
                    <td height="78" align="center"> 
                      <h1>COMPETITIONS<br />
                        FEMININES</h1>
                    </td>
                  </tr>
                </table>
                <div align="center"></div>
              </td>
            </tr>
            <tr> 
              <td colspan="2"  height="51" bgcolor="#FFFFFF" > 
                <hr />
                <hr noshade />
              </td>
            </tr>
            <tr > 
              <td colspan="2"  height="19"> 
                <h1>Championnats de France</h1>
              </td>
            </tr>
            <tr > 
              <td colspan="2"  height="16"> 
                <h2>Elite 1 - Top 8</h2>
                <h2> <img src="../images/top8.jpg" width="106" height="144"> </h2>
              </td>
            </tr>
            <tr > 
              <td colspan="2" height="193"> 
                <p align="center"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phpfem/consult/classementA.php?champ=280
 									type="text/html" height="200"  width="250""  />
                  </object></p>
              </td>
            </tr>
            <tr > 
              <td colspan="2" height="9"> 
                <div align="center"><font size="2">Pas d'équipe du comité 
                  dans cette compétition</font></div>
              </td>
            </tr>
            <tr > 
              <td colspan="2" height="40"> 
                <div align="center"><font size="2" color="#FF0000" face="Geneva, Arial, Helvetica, san-serif"><b><a href="javascript:;" onClick="MM_openBrWindow('../feminine/resultats/elite/280.php','','scrollbars=yes,width=930')"><i>Plus 
                  d'infos</i></a><br>
                  <br>
                  </b></font></div>
              </td>
            </tr>
            <tr > 
              <td colspan="2" height="11" bgcolor="#FFFFFF"> 
                <div > 
                  <hr />
                  <hr noshade />
                </div>
              </td>
            </tr>
            <tr > 
              <td colspan="2"> 
                <h2>Elite 2 <br>
                  Armelle Auclair</h2>
              </td>
            </tr>
            <tr > 
              <td height="23"> 
                <p class="titreEquipe">Poule 1</p>
              </td>
              <td height="23"> 
                <p class="titreEquipe">Poule 2</p>
              </td>
            </tr>
            <tr > 
              <td width="231" height="47"> 
                <p> <object data="http://francefinalesrugby.franceserv.com/Phpleague/phpfem/consult/classementA.php?champ=291
								 type="text/html" height="240"  width="300""  />
                  </object></p>
              </td>
              <td width="236" height="47"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phpfem/consult/classementA.php?champ=292
 type="text/html" height="240"  width="300""  />
                </object></td>
            </tr>
            <tr > 
              <td width="231" height="58"> 
                <div align="center"><b><font size="2" color="#FF0000" face="Geneva, Arial, Helvetica, san-serif"><a href="../feminine/resultats/elite/290.php">Plus 
                  d'infos</a><br>
                  </font></b></div>
              </td>
              <td width="236" height="58"> 
                <div align="center"><b><font size="2" color="#FF0000" face="Geneva, Arial, Helvetica, san-serif"><a href="javascript:;" onClick="MM_openBrWindow('../feminine/resultats/elite/292.php','','scrollbars=yes,width=930')"><i>Plus 
                  d'infos</i></a><br>
                  </font></b></div>
              </td>
            </tr>
            <tr > 
              <td colspan="2" bgcolor="#FFFFFF"> 
                <hr />
                <hr noshade />
              </td>
            </tr>
            <tr > 
              <td colspan="2"> 
                <div align="center"></div>
              </td>
            </tr>
            <tr > 
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr> 
              <td colspan="2" bgcolor="#FF9933" bordercolor="#FFCCFF"> 
                <div align="center">Toutes les poules et les informations sur 
                  les compétitions<br>
                  et les équipes féminines <a href="http://francefinalesrugby.franceserv.com/feminine/index_fem.php" target="_top">ICI 
                  </a></div>
              </td>
            </tr>
            <tr > 
              <td colspan="2"> 
                <div align="center"> <br />
                  <br>
                  <?php include("pub4.php");  ?>
                  <br>
                  <br />
                </div>
              </td>
            </tr>
            <tr > 
              <td colspan="2" height="91"> 
                <table width="468" border="3" cellspacing="0" bordercolor="#FF0000" align="center" height="20">
                  <tr bordercolor="#FF9966" bgcolor="#FF9933" valign="middle"> 
                    <td class="tab3" height="43" width="223" align="center"> <a href="http://francefinalesrugby.franceserv.com/phases_finales/fem_federale1/pagefem_federale1.php?annee=<?php echo $saison;?>" target="_top">Championnat 
                      de France</a> </td>
                    <td class="tab3" height="43" width="231" align="center"> <a href="http://francefinalesrugby.franceserv.com/divisions/page_fem_elite1.php">Palmarès 
                      </a> </td>
                  </tr>
                </table>
                <div align="center"> 
                  <p>&nbsp;</p>
                </div>
              </td>
            </tr>
          </table>
         
          <br>
        </div>
      </td>
      <td height="4612"  width="225" valign="top"> 
        <?php    include("../00droite.php");    ?>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="1000" border="1" bordercolor="#006699">
            <tr> 
              <td>
                <div align="center"><font color="#000000"> 
                  <?php    include("../comitebas.php");  ?>
                  </font></div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="center">&nbsp; <font color="#000000"> 
                  <?php    include("pub1.php");   ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000">
                  <?php    include("../bas.php");    ?>
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
