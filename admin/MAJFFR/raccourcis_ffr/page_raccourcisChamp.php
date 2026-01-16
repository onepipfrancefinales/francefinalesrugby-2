<head>
  <meta charset="utf-8">
  <link type="text/css" rel="stylesheet" href="../../../ligne1.css">
  <title>Statistiques de <?php echo $nom; ?></title>
  <meta name="description" content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
</head>

<body>
  <?php
  // ***** Fédérales *****	
  $TOP14 = "";
  $PROD2 = "";
  $NAT1 = 22441;
  $NAT2 = 22442;

  $FED1 = 22440;
  $FED2 = 22443;
  $FED3 = 22444;
  $FED1B = 22449;
  $FED2B = 22459;
  $FED3B = 22455;

  // ***** Féminines *****					

  $FEMH = 22454;
  $FEMPH = 22474;
  $FEMS1 = 22475;
  //	$FEMS2 = $row[3];
  //	$FEMS3 = $row[4];
  //	$FEMS4 = $row[5];

  // ***** Auvergne Rhône Alpes *****	
  $ARAH = 22481;
  $ARAPH = 22412;
  $ARAS1 = 22478;
  $ARAResH = 22480;
  $ARAResPH = 22437;

  // ***** Bretagne *****									
  $BREH = 22534;
  $BREPH = 22537;
  $BRES1 = 22538;
  $BREResH = 22535;
  $BREResPH = " ";

  // ***** Bourgogne *****															
  $BFCH = 22406;
  $BFCPH = 22415;
  $BFCS1 = 22473;
  $BFCResH = 22418;
  $BFCResPH = 22416;

  // ***** centre val de loire *****					
  $CVLH = 22419;
  $CVLPH = 22420;
  $CVLS1 = 22421;
  $CVLResH = 22422;
  $CVLResPH = "";

  // ***** Grand Est *****	
  $GESH = 22405;
  $GESPH = 22409;
  $GESS1 = 22411;
  $GESResH = 22407;
  $GESResPH = 22410;

  // ***** Hauts de France *****					
  $HDFH = 22517;
  $HDFPH = 22519;
  $HDFS1 = 22541;
  $HDFS2 = 22542;
  $HDFResH = 22518;
  $HDFResPH = 22520;

  // ***** ile de france *****							
  $IDFH = 22438;
  $IDFPH = 22462;
  $IDFS1 = 22568;
  $IDFResH = 22461;
  $IDFResPH = 22567;

  // ***** Normandie *****	
  $NORH = 22527;
  $NORPH = 22529;
  $NORS1 = 22531;
  $NORS2 = 0;
  $NORResH = 22528;
  $NORResPH = 22530;

  // ***** Nouvelle Aquitaine *****				
  $NAQH = 22483;
  $NAQPH = 22485;
  $NAQS1 = 22486;
  $NAQS2 = 22487;
  $NAQResH = 22484;
  $NAQResPH = 22488;

  // ***** Occitanie *****		
  $OCCH = 22451;
  $OCCPH = 22453;
  $OCCS1 = 22456;
  $OCCResH = 22457;
  $OCCResPH = 22458;

  // ***** Pays de la Loire *****		
  $PDLH = 22435;
  $PDLPH = 22550;
  $PDLS1 = 22551;
  $PDLResH = 22436;
  $PDLResPH =  "";

  // ***** Provence *****	
  $PCAH = 22430;
  $PCAPH = 22431;
  $PCAS1 = 22432;
  $PCAResH = 22433;
  $PCAResPH = 22434;

  $adresseFFR = "https://ovale2.ffr.fr/Competitions/Resultats/View/"
  ?>
  <table border="1" width="750">
    <tr>
      <td colspan="9" class="size5 styleArial bold"> SCORES ET RESULTATS
      </td>
    </tr>
    <tr class="styleArial">
      <td class="bold">Top 14
      </td>
      <td><a href=" <?php echo $adresseFFR . $TOP14; ?>" target="_blank"><?php echo $TOP14; ?></a>
      </td>
      <td class="bold">Pro D2
      </td>
      <td> <a href=" <?php echo $adresseFFR . $PROD2; ?>" target="_blank"><?php echo $PROD2; ?></a>
      </td>
      <td></td>
      <td class="backgroundBlack"></td>
      <td colspan="3"></td>
    </tr>
    <tr bgcolor="#9999FF" class="styleArial">
      <td class="bold">Nat 1
      </td>
      <td><a href=" <?php echo $adresseFFR . $NAT1; ?>" target="_blank"><?php echo $NAT1; ?></a>
      </td>
      <td class="bold">Nat 2 </td>
      <td> <a href=" <?php echo $adresseFFR . $NAT2; ?>" target="_blank"><?php echo $NAT2; ?></a></td>
      <td ></td>
      <td class="backgroundBlack"></td>
      <td colspan="3">
      </td>
    </tr>
    <tr class="styleArial">
      <td class="bold">Fed 1
      </td>
      <td><a href=" <?php echo $adresseFFR . $FED1; ?>" target="_blank"><?php echo $FED1; ?></a>
      </td>
      <td colspan="2">
      </td>
      <td ></td>
      <td class="backgroundBlack"></td>
      <td class="bold">Nat B
      </td>
      <td><a href=" <?php echo $adresseFFR . $FED1B; ?>" target="_blank"><?php echo $FED1B; ?></a>
      </td>
      <td class="bold">Fed1
      </td>
    </tr>
    <tr bgcolor="#9999FF" class="styleArial">
      <td class="bold">Fed 2
      </td>
      <td><a href="<?php echo $adresseFFR . $FED2; ?>" target="_blank"><?php echo $FED2; ?> </a>
      </td>
      <td colspan="2">
      </td>
      <td ></td>
      <td class="backgroundBlack"></td>
      <td class="bold">Fed B
      </td>
      <td><a href="<?php echo $adresseFFR . $FED2B; ?>" target="_blank"><?php echo $FED2B; ?></a>
      </td>
      <td class="bold">Fed 2
      </td>
    </tr>
    <tr class="styleArial">
      <td class="bold"> Fed 3
      </td>
      <td><a href="<?php echo $adresseFFR . $FED3; ?>" target="_blank"><?php echo $FED3; ?></a>
      </td>
      <td height="28" colspan="2">
      </td>
      <td ></td>
      <td class="backgroundBlack"></td>
      <td class="bold">Exc B
      </td>
      <td class="styleArial"><a href="<?php echo $adresseFFR . $FED3B; ?>" target="_blank"> <?php echo $FED3B; ?> </a>
      </td>
      <td class="bold">Fed3
      </td>
    </tr>
    <tr bgcolor="#FF6699" class="styleArial">
      <td>
      </td>
      <td class="bold">
        Elite 1
      </td>
      <td class="bold">
        Elite 2
      </td>
      <td class="bold">
        Fed 1
      </td>
      <td ></td>
      <td class="backgroundBlack"></td>
      <td colspan="3"></td>
    </tr>
    <tr bgcolor="#FF6699" class="styleArial">
      <td class="bold"> Fém
      </td>
      <td><a href=" <?php echo $adresseFFR . $FEMH; ?>" target="_blank"><?php echo $FEMH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $FEMPH; ?>" target="_blank"><?php echo $FEMPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $FEMS1; ?>" target="_blank"><?php echo $FEMS1; ?></a>
      </td>
      <td ></td>
      <td class="backgroundBlack"></td>
      <td colspan="2">
      </td>
      <td class="bold">Fém
      </td>
    </tr>
    <tr>
      <td colspan="5" width="14%"></td>
      <td class="backgroundBlack" height="29" width="7%" ></td>
      <td colspan="3" height="29" width="11%"></td>
      
    </tr>
    <tr class="styleArial bold" bgcolor="#FF9933">
      <td height="31" width="14%"></td>
      <td>Rég1
      </td>
      <td>Rég2
      </td>
      <td>Rég3
      </td>
      <td>Rég3 Pro</td>
      <td class="backgroundBlack"></td>
      <td>Rés R1
      </td>
      <td>Rés R2
      </td>
      <td height="31" width="17%"></td>
    </tr>
    <tr class="styleArial backgroundFF6666">
      <td class="bold">ARA
      </td>
      <td><a href="<?php echo $adresseFFR . $ARAH; ?>" target="_blank"><?php echo $ARAH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $ARAPH; ?>" target="_blank"><?php echo $ARAPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $ARAS1; ?>" target="_blank"><?php echo $ARAS1; ?></a>
      </td>
      <td></td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $ARAResH; ?>" target="_blank"><?php echo $ARAResH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $ARAResPH; ?>" target="_blank"><?php echo $ARAResPH; ?></a>
      </td>
      <td class="bold">ARA
      </td>
    </tr>
    <tr class="styleArial">
      <td class="bold">BFC
      </td>
      <td><a href="<?php echo $adresseFFR . $BFCH; ?>" target="_blank"><?php echo $BFCH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $BFCPH; ?>" target="_blank"><?php echo $BFCPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $BFCS1; ?>" target="_blank"><?php echo $BFCS1; ?></a>
      </td>
      <td></td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $BFCResH; ?>" target="_blank"><?php echo $BFCResH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $BFCResPH; ?>" target="_blank"><?php echo $BFCResPH; ?></a>
      </td>
      <td class="bold">BFC
      </td>
    </tr>
    <tr class="styleArial backgroundFF6666">
      <td class="bold">BRE
      </td>
      <td><a href="<?php echo $adresseFFR . $BREH; ?>" target="_blank"><?php echo $BREH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $BREPH; ?>" target="_blank"><?php echo $BREPH; ?></a>
      </td>
      <td><a href=" <?php echo $adresseFFR . $BRES1; ?>" target="_blank"><?php echo $BRES1; ?></a>
      </td>
      <td></td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $BREResH; ?>" target="_blank"><?php echo $BREResH; ?> </a>
      </td>
      <td><a href="<?php echo $adresseFFR . $BREResPH; ?>" target="_blank"><?php echo $BREResPH; ?> </a>
      </td>
      <td class="bold"> BRE
      </td>
    </tr>
    <tr class="styleArial">
      <td class="bold">CVL
      </td>
      <td><a href="<?php echo $adresseFFR . $CVLH; ?>" target="_blank"><?php echo $CVLH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $CVLPH; ?>" target="_blank"><?php echo $CVLPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $CVLS1; ?>" target="_blank"><?php echo $CVLS1; ?></a>
      </td>
      <td></td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $CVLResH; ?>" target="_blank"><?php echo $CVLResH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $CVLResPH; ?>" target="_blank"><?php echo $CVLResPH; ?></a>
      </td>
      <td class="bold"> CVL
      </td>
    </tr>
    <tr class="styleArial backgroundFF6666">
      <td class="bold">GES
      </td>
      <td><a href="<?php echo $adresseFFR . $GESH; ?>" target="_blank"><?php echo $GESH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $GESPH; ?>" target="_blank"><?php echo $GESPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $GESS1; ?>" target="_blank"><?php echo $GESS1; ?></a>
      </td>
      <td></td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $GESResH; ?>" target="_blank"><?php echo $GESResH; ?></a>
      </td>
      <td><a href=" <?php echo $adresseFFR . $GESResPH; ?>" target="_blank"><?php echo $GESResPH; ?></a>
      </td>
      <td class="bold"> GES</a></b>
      </td>
    </tr>
    <tr class="styleArial">
      <td class="bold">HDF
      </td>
      <td><a href="<?php echo $adresseFFR . $HDFH; ?>" target="_blank"><?php echo $HDFH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $HDFPH; ?>" target="_blank"><?php echo $HDFPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $HDFS1; ?>" target="_blank"><?php echo $HDFS1; ?></a>
      </td>
  
      <td><a href="<?php echo $adresseFFR . $HDFS2; ?>" target="_blank"><?php echo $HDFS2; ?></td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $HDFResH; ?>" target="_blank"><?php echo $HDFResH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $HDFResPH; ?>" target="_blank"><?php echo $HDFResPH; ?></a>
     
    
    
     
    </td>
      <td class="bold">HDF
      </td>
    </tr>
    <tr class="styleArial backgroundFF6666">
      <td class="bold">IDF
      </td>
      <td><a href="<?php echo $adresseFFR . $IDFH; ?>" target="_blank"><?php echo $IDFH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $IDFPH; ?>" target="_blank"><?php echo $IDFPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $IDFS1; ?>" target="_blank"><?php echo $IDFS1; ?></a>
      </td>
      <td></td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $IDFResH; ?>" target="_blank"><?php echo $IDFResH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $IDFResPH; ?>" target="_blank"><?php echo $IDFResPH; ?></a>
      </td>
      <td class="bold">IDF
      </td>
    </tr>
    <tr class="styleArial">
      <td class="bold">NOR
      </td>
      <td><a href="<?php echo $adresseFFR . $NORH; ?>" target="_blank"><?php echo $NORH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $NORPH; ?>" target="_blank"><?php echo $NORPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $NORS1; ?>" target="_blank"><?php echo $NORS1; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $NORS2; ?>" target="_blank"><?php echo $NORS2; ?></td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $NORResH; ?>" target="_blank"><?php echo $NORResH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $NORResPH; ?>" target="_blank"><?php echo $NORResPH; ?></a>
      </td>
      <td class="bold">NOR
      </td>
    </tr>
    <tr class="styleArial backgroundFF6666">
      <td class="bold">NAQ
      </td>
      <td><a href=" <?php echo $adresseFFR . $NAQH; ?>" target="_blank"><?php echo $NAQH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $NAQPH; ?>" target="_blank"><?php echo $NAQPH; ?></a>
      </td>
      <td><a href=" <?php echo $adresseFFR . $NAQS1; ?>" target="_blank"><?php echo $NAQS1; ?></a>
      </td>
      <td><a href=" <?php echo $adresseFFR . $NAQS2; ?>" target="_blank"><?php echo $NAQS2; ?></a>
      </td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $NAQResH; ?>" target="_blank"><?php echo $NAQResH; ?></a>
      </td>
      <td><a href=" <?php echo $adresseFFR . $NAQResPH; ?>" target="_blank"><?php echo $NAQResPH; ?></a>
      </td>
      <td class="bold">NAQ
      </td>
    </tr>
    <tr class="styleArial">
      <td class="bold">OCC
      </td>
      <td><a href="<?php echo $adresseFFR . $OCCH; ?>" target="_blank"><?php echo $OCCH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $OCCPH; ?>" target="_blank"><?php echo $OCCPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $OCCS1; ?>" target="_blank"><?php echo $OCCS1; ?></a>
      </td>
      <td></td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $OCCResH; ?>" target="_blank"><?php echo $OCCResH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $OCCResPH; ?>" target="_blank"><?php echo $OCCResPH; ?></a>
      </td>
      <td class="bold">OCC
      </td>
    </tr>
    <tr class="backgroundFF6666 styleArial">
      <td class="bold">PDL
      </td>
      <td><a href="  <?php echo $adresseFFR . $PDLH; ?>" target="_blank"><?php echo $PDLH; ?></a>
      </td>
      <td><a href="  <?php echo $adresseFFR . $PDLPH; ?>" target="_blank"><?php echo $PDLPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $PDLS1; ?>" target="_blank"><?php echo $PDLS1; ?></a>
      </td>
      <td></td>
      <td class="backgroundBlack"></td>
      <td><a href="<?php echo $adresseFFR . $PDLResH; ?>" target="_blank"><?php echo $PDLResH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $PDLResH; ?>" target="_blank"><?php echo $PDLResPH; ?></a>
      </td>
      <td class="styleArial bold">PDL
      </td>
    </tr>
    <tr class="styleArial">
      <td class="bold">PCA
      </td>
      <td><a href="<?php echo $adresseFFR . $PCAH; ?>" target="_blank"><?php echo $PCAH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $PCAPH; ?>" target="_blank"><?php echo $PCAPH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $PCAS1; ?>" target="_blank"><?php echo $PCAS1; ?></a>
      </td>
      <td></td>
      <td class=backgroundBlack></td>
      <td><a href="<?php echo $adresseFFR . $PCAResH; ?>" target="_blank"><?php echo $PCAResH; ?></a>
      </td>
      <td><a href="<?php echo $adresseFFR . $PCAResPH; ?>" target="_blank"><?php echo $PCAResPH; ?></a>
      </td>
      <td class="bold">PCA
      </td>
    </tr>
  </table>
</body>

</html>