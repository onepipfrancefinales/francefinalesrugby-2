
<html lang="fr">
<head>
</head>
<body>
<?php

require '../../../connect1/connection1.php';

// ***** F�d�rale *****
$requete =$bdd->query ("SELECT H, PH, S1, S2, S3
						FROM accesFFR
						WHERE sigle = 'FED'");
			//	$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$FED1 = $row[0];
					$FED2 = $row[1];
					$FED3 = $row[2];
					$FED1B = $row[3];
					$FED2B = $row[4];
					$FED3B = $row[5];
					}


					
// ***** F�minines *****					

$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4
			FROM accesFFR
			WHERE sigle = 'FEM'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$FEMH = $row[0];
					$FEMPH = $row[1];
					$FEMS1 = $row[2];
					$FEMS2 = $row[3];
					$FEMS3 = $row[4];
					$FEMS4 = $row[5];
					

					}

// ***** Auvergne Rh�ne Alpes *****		


$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'ARA'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$ARAH = $row[0];
					$ARAPH = $row[1];
					$ARAS1 = $row[2];
					$ARAS2 = $row[3];
					$ARAS3 = $row[4];
					$ARAS4 = $row[5];
					$ARAResH = $row[6];
					$ARAResPH = $row[7];
					$ARAResS1 = $row[8];
					$ARAResS2 = $row[9];

					}
					
					
	$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'BRE'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$BREH = $row[0];
					$BREPH = $row[1];
					$BRES1 = $row[2];
					$BRES2 = $row[3];
					$BRES3 = $row[4];
					$BRES4 = $row[5];
					$BREResH = $row[6];
					$BREResPH = $row[7];
					$BREResS1 = $row[8];
					$BREResS2 = $row[9];

					}				
					
					
					
					
					
$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'BFC'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$BFCH = $row[0];
					$BFCPH = $row[1];
					$BFCS1 = $row[2];
					$BFCS2 = $row[3];
					$BFCS3 = $row[4];
					$BFCS4 = $row[5];
					$BFCResH = $row[6];
					$BFCResPH = $row[7];
					$BFCResS1 = $row[8];
					$BFCResS2 = $row[9];

					}
					
$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'CVL'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$CVLH = $row[0];
					$CVLPH = $row[1];
					$CVLS1 = $row[2];
					$CVLS2 = $row[3];
					$CVLS3 = $row[4];
					$CVLS4 = $row[5];
					$CVLResH = $row[6];
					$CVLResPH = $row[7];
					$CVLResS1 = $row[8];
					$CVLResS2 = $row[9];

					}					
										
$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'GES'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$GESH = $row[0];
					$GESPH = $row[1];
					$GESS1 = $row[2];
					$GESS2 = $row[3];
					$GESS3 = $row[4];
					$GESS4 = $row[5];
					$GESResH = $row[6];
					$GESResPH = $row[7];
					$GESResS1 = $row[8];
					$GESResS2 = $row[9];

					}
					
		$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'HDF'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$HDFH = $row[0];
					$HDFPH = $row[1];
					$HDFS1 = $row[2];
					$HDFS2 = $row[3];
					$HDFS3 = $row[4];
					$HDFS4 = $row[5];
					$HDFResH = $row[6];
					$HDFResPH = $row[7];
					$HDFResS1 = $row[8];
					$HDFResS2 = $row[9];

					}			
										
			$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'IDF'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$IDFH = $row[0];
					$IDFPH = $row[1];
					$IDFS1 = $row[2];
					$IDFS2 = $row[3];
					$IDFS3 = $row[4];
					$IDFS4 = $row[5];
					$IDFResH = $row[6];
					$IDFResPH = $row[7];
					$IDFResS1 = $row[8];
					$IDFResS2 = $row[9];

					}
					
			$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'NOR'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$NORH = $row[0];
					$NORPH = $row[1];
					$NORS1 = $row[2];
					$NORS2 = $row[3];
					$NORS3 = $row[4];
					$NORS4 = $row[5];
					$NORResH = $row[6];
					$NORResPH = $row[7];
					$NORResS1 = $row[8];
					$NORResS2 = $row[9];

					}		
						

$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'NAQ'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$NAQH = $row[0];
					$NAQPH = $row[1];
					$NAQS1 = $row[2];
					$NAQS2 = $row[3];
					$NAQS3 = $row[4];
					$NAQS4 = $row[5];
					$NAQResH = $row[6];
					$NAQResPH = $row[7];
					$NAQResS1 = $row[8];
					$NAQResS2 = $row[9];
					
					
					
					}
					
		$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'OCC'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$OCCH = $row[0];
					$OCCPH = $row[1];
					$OCCS1 = $row[2];
					$OCCS2 = $row[3];
					$OCCS3 = $row[4];
					$OCCS4 = $row[5];
					$OCCResH = $row[6];
					$OCCResPH = $row[7];
					$OCCResS1 = $row[8];
					$OCCResS2 = $row[9];
					}			
		
					
		$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'PDL'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$PDLH = $row[0];
					$PDLPH = $row[1];
					$PDLS1 = $row[2];
					$PDLS2 = $row[3];
					$PDLS3 = $row[4];
					$PDLS4 = $row[5];
					$PDLResH = $row[6];
					$PDLResPH = $row[7];
					$PDLResS1 = $row[8];
					$PDLResS2 = $row[9];
					}			
				$requete =$bdd->query ("SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'PCA'");
				//$result =mysql_query ($requete);
				while ($row = $requete->fetch())
					{
					$PCAH = $row[0];
					$PCAPH = $row[1];
					$PCAS1 = $row[2];
					$PCAS2 = $row[3];
					$PCAS3 = $row[4];
					$PCAS4 = $row[5];
					$PCAResH = $row[6];
					$PCAResPH = $row[7];
					$PCAResS1 = $row[8];
					$PCAResS2 = $row[9];
					}					
										
					
				
				
?>
<table border="1" width="750">
  <tr> 
    <td colspan="13" height="25"> 
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif"><b><font size="5"> 
        SCORES ET RESULTATS (calendriers)</font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="7%" height="25">&nbsp;</td>
    <td width="6%" height="25">&nbsp;</td>
    <td width="6%" height="25">&nbsp; </td>
    <td width="9%" height="25">&nbsp;</td>
    <td bordercolor="#FFFFCC" width="6%" height="25">&nbsp;</td>
    <td width="5%" height="25">&nbsp;</td>
    <td bordercolor="#FFFFCC" width="9%" height="25">&nbsp;</td>
    <td width="3%" height="25" bgcolor="#000000">&nbsp;</td>
    <td width="8%" height="25">&nbsp;</td>
    <td width="7%" height="25">&nbsp;</td>
    <td width="8%" height="25">&nbsp;</td>
    <td width="6%" height="25">&nbsp;</td>
    <td width="20%" height="25">&nbsp;</td>
  </tr>
  <tbody> 
  <tr> 
    <td width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Fed 
        1</b></font></div>
    </td>
    <td width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="FED1.php?codeFFR=<?php echo $FED1; ?>" target="_blank"> 
        <?php echo $FED1; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="6%"> 
      <div align="center"><font color="#000000"><b><font face="Arial, Helvetica, sans-serif"></font></b></font></div>
    </td>
    <td width="9%"> 
      <div align="center"><font color="#000000"><b><font face="Arial, Helvetica, sans-serif"></font></b></font></div>
    </td>
    <td bordercolor="#FFFFCC" width="6%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td colspan="2"> 
      <div align="center"><font color="#000000"><font face="Arial, Helvetica, sans-serif"></font></font></div>
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Nat 
        B</b></font></div>
    </td>
    <td width="3%" bgcolor="#000000">&nbsp;</td>
    <td width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="FED1.php?codeFFR=<?php echo $FED1B; ?>" target="_blank"> 
        <?php echo $FED1B; ?>
        </a></font></div>
    </td>
    <td width="7%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td width="8%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td width="6%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td width="20%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=FED1">Fed1</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="30" width="7%" bgcolor="#9999FF"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Fed 
        2</b></font></div>
    </td>
    <td height="30" width="6%" bgcolor="#9999FF"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $FED2; ?>" target="_blank"> 
        <?php echo $FED2; ?>
        </a></font></div>
    </td>
    <td height="30" width="6%" bgcolor="#9999FF"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="30" width="9%" bgcolor="#9999FF"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="30" width="6%" bgcolor="#9999FF"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="30" colspan="2" bgcolor="#9999FF"><font face="Arial, Helvetica, sans-serif"></font> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Fed 
        B</b></font></div>
    </td>
    <td height="30" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="30" width="8%" bgcolor="#9999FF"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $FED2B; ?>" target="_blank"> 
        <?php echo $FED2B; ?>
        </a></font></div>
    </td>
    <td height="30" width="7%" bgcolor="#9999FF"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="30" width="8%" bgcolor="#9999FF"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="30" width="6%" bgcolor="#9999FF"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="30" width="20%" bgcolor="#9999FF"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=FED2">Fed2</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="28" width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Fed 
        3 </b></font></div>
    </td>
    <td height="28" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $FED3; ?>" target="_blank"> 
        <?php echo $FED3; ?>
        </a></font></div>
    </td>
    <td height="28" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="28" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="28" width="6%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="28" colspan="2"><font face="Arial, Helvetica, sans-serif"></font> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Exc 
        B </b></font></div>
    </td>
    <td height="28" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="28" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $FED3B; ?>" target="_blank"> 
        </a><a href="calendrier.php?codeFFR=<?php echo $FED1B; ?>" target="_blank"> 
        <?php echo $FED1B; ?>
        </a></font></div>
    </td>
    <td height="28" width="7%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="28" width="8%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="28" width="6%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="28" width="20%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=FED3">Fed3</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="29" width="7%" bgcolor="#9999CC"> 
      <div align="center"></div>
    </td>
    <td height="29" width="6%" bgcolor="#9999CC"> 
      <div align="center">Elite 1</div>
    </td>
    <td height="29" width="6%" bgcolor="#9999CC"> 
      <div align="center">Elite 2</div>
    </td>
    <td height="29" width="9%" bgcolor="#9999CC"> 
      <div align="center">Fed 1</div>
    </td>
    <td height="29" width="6%" bgcolor="#9999CC"> 
      <div align="center">Fed 2</div>
    </td>
    <td height="29" width="5%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="9%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="29" width="8%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="7%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="8%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="6%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="20%" bgcolor="#9999CC">&nbsp;</td>
  </tr>
  <tr> 
    <td height="29" width="7%" bgcolor="#9999CC"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Fém</b></font></div>
    </td>
    <td height="29" width="6%" bgcolor="#9999CC"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $FEMH; ?>" target="_blank"> 
        <?php echo $FEMH; ?>
        </a></font></div>
    </td>
    <td height="29" width="6%" bgcolor="#9999CC"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $FEMPH; ?>" target="_blank"> 
        <?php echo $FEMPH; ?>
        </a></font></div>
    </td>
    <td height="29" width="9%" bgcolor="#9999CC"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $FEMS1; ?>" target="_blank"> 
        <?php echo $FEMS1; ?>
        </a></font></div>
    </td>
    <td height="29" width="6%" bgcolor="#9999CC"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $FEMS2; ?>" target="_blank"> 
        <?php echo $FEMS2; ?>
        </a></font></div>
    </td>
    <td height="29" width="5%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="9%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="29" width="8%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="7%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="8%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="6%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="20%" bgcolor="#9999CC"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=FEM">Fem</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="29" width="7%">&nbsp;</td>
    <td height="29" width="6%">&nbsp;</td>
    <td height="29" width="6%">&nbsp;</td>
    <td height="29" width="9%">&nbsp;</td>
    <td height="29" width="6%">&nbsp;</td>
    <td height="29" width="5%">&nbsp;</td>
    <td height="29" width="9%">&nbsp;</td>
    <td height="29" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="29" width="8%">&nbsp;</td>
    <td height="29" width="7%">&nbsp;</td>
    <td height="29" width="8%">&nbsp;</td>
    <td height="29" width="6%">&nbsp;</td>
    <td height="29" width="20%">&nbsp;</td>
  </tr>
  <tr> 
    <td height="29" width="7%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">JEU</font></b></div>
    </td>
    <td height="29" width="6%">&nbsp;</td>
    <td height="29" width="6%">&nbsp;</td>
    <td height="29" width="9%">&nbsp;</td>
    <td height="29" width="6%">&nbsp;</td>
    <td height="29" width="5%">&nbsp;</td>
    <td height="29" width="9%">&nbsp;</td>
    <td height="29" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="29" width="8%">&nbsp;</td>
    <td height="29" width="7%">&nbsp;</td>
    <td height="29" width="8%">&nbsp;</td>
    <td height="29" width="6%">&nbsp;</td>
    <td height="29" width="20%"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr bgcolor="#FF9933"> 
    <td height="31" width="7%">&nbsp;</td>
    <td height="31" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">H</font></b></div>
    </td>
    <td height="31" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">PH</font></b></div>
    </td>
    <td height="31" width="9%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">1</font></b></div>
    </td>
    <td height="31" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">2</font></b></div>
    </td>
    <td height="31" width="5%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">3</font></b></div>
    </td>
    <td height="31" width="9%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">4</font></b></div>
    </td>
    <td height="31" width="3%">&nbsp;</td>
    <td height="31" width="8%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">H</font></b></div>
    </td>
    <td height="31" width="7%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">PH</font></b></div>
    </td>
    <td height="31" width="8%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">1</font></b></div>
    </td>
    <td height="31" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">2</font></b></div>
    </td>
    <td height="31" width="20%">&nbsp;</td>
  </tr>
  <tr> 
    <td height="24" width="7%" bgcolor="#ff6666"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>ARA</b></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $ARAH; ?>" target="_blank"> 
        <?php echo $ARAH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $ARAPH; ?>" target="_blank"> 
        <?php echo $ARAPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" bgcolor="#ff6666" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $ARAS1; ?>" target="_blank"> 
        <?php echo $ARAS1; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $ARAS2; ?>" target="_blank"> 
        <?php echo $ARAS2; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $ARAS3; ?>" target="_blank"> 
        <?php echo $ARAS3; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $ARAS4; ?>" target="_blank"> 
        <?php echo $ARAS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $ARAResH; ?>" target="_blank"> 
        <?php echo $ARAResH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $ARAResPH; ?>" target="_blank"> 
        <?php echo $ARAResPH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $ARAResS1; ?>" target="_blank"> 
        <?php echo $ARAResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#ff6666"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $ARAResS2; ?>" target="_blank"> 
        <?php echo $HARAResS2; ?>
        </a></font></b></div>
    </td>
    <td height="24" width="20%" bgcolor="#ff6666"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=ARA">ARA</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>BFC</b></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCH; ?>" target="_blank"> 
        <?php echo $BFCH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCPH; ?>" target="_blank"> 
        <?php echo $BFCPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCS1; ?>" target="_blank"> 
        <?php echo $BFCS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCS2; ?>" target="_blank"> 
        <?php echo $BFCS2; ?>
        </a></font></div>
    </td>
    <td height="24" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCS3; ?>" target="_blank"> 
        <?php echo $BFCS3; ?>
        </a></font></div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCS4; ?>" target="_blank"> 
        <?php echo $BFCS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCResH; ?>" target="_blank"> 
        <?php echo $BFCResH; ?>
        </a></font></div>
    </td>
    <td height="24" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCResPH; ?>" target="_blank"> 
        <?php echo $BFCResPH; ?>
        </a></font></div>
    </td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCResS1; ?>" target="_blank"> 
        <?php echo $BFCResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCResS2; ?>" target="_blank"> 
        <?php echo $BFCResS2; ?>
        </a></font></b></div>
    </td>
    <td width="20%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=BFC">BFC</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="22" width="7%" bgcolor="#ff6666"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">BRE</font></b></div>
    </td>
    <td height="24" width="6%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BREH; ?>" target="_blank"> 
        <?php echo $BREH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BREPH; ?>" target="_blank"> 
        <?php echo $BREPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" bgcolor="#ff6666" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BRES1; ?>" target="_blank"> 
        <?php echo $BRES1; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BRES2; ?>" target="_blank"> 
        <?php echo $BRES2; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BRES3; ?>" target="_blank"> 
        <?php echo $BRES3; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BRES4; ?>" target="_blank"> 
        <?php echo $BRES4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BREResH; ?>" target="_blank"> 
        <?php echo $BREResH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BREResPH; ?>" target="_blank"> 
        <?php echo $BREResPH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCResS1; ?>" target="_blank"> 
        <?php echo $BREResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#ff6666"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $BFCResS2; ?>" target="_blank"> 
        <?php echo $BREResS2; ?>
        </a></font></b></div>
    </td>
    <td height="22" width="20%" bgcolor="#ff6666"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=BRE">BRE</a></b></font></b></div>
    </td>
  </tr>
  <tr> 
    <td height="22" width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><b>CVL</b></b></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $CVLH; ?>" target="_blank"> 
        <?php echo $CVLH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $CVLPH; ?>" target="_blank"> 
        <?php echo $CVLPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $CVLS1; ?>" target="_blank"> 
        <?php echo $CVLS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $CVLS2; ?>" target="_blank"> 
        <?php echo $CVLS2; ?>
        </a></font></div>
    </td>
    <td height="24" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $CVLS3; ?>" target="_blank"> 
        <?php echo $CVLS3; ?>
        </a></font></div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $CVLS4; ?>" target="_blank"> 
        <?php echo $CVLS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $CVLResH; ?>" target="_blank"> 
        <?php echo $CVLResH; ?>
        </a></font></div>
    </td>
    <td height="24" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $CVLResPH; ?>" target="_blank"> 
        <?php echo $CVLResPH; ?>
        </a></font></div>
    </td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $CVLResS1; ?>" target="_blank"> 
        <?php echo $CVLResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $CVLResS2; ?>" target="_blank"> 
        <?php echo $CVLResS2; ?>
        </a></font></b></div>
    </td>
    <td height="22" width="20%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=CVL">CVL</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#ff6666" height="15" width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><b>GES</b></b></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#FF6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $GESH; ?>" target="_blank"> 
        <?php echo $GESH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $GESPH; ?>" target="_blank"> 
        <?php echo $GESPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" bgcolor="#FF6666" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $GESS1; ?>" target="_blank"> 
        <?php echo $GESS1; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $GESS2; ?>" target="_blank"> 
        <?php echo $GESS2; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $GESS3; ?>" target="_blank"> 
        <?php echo $GESS3; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $GESS4; ?>" target="_blank"> 
        <?php echo $GESS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%" bgcolor="#FF6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $GESResH; ?>" target="_blank"> 
        <?php echo $GESResH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $GESResPH; ?>" target="_blank"> 
        <?php echo $GESResPH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="GESResS1.php?codeFFR=<?php echo $GESResS1; ?>" target="_blank"> 
        <?php echo $GESResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#FF6666"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="GESResS2.php?codeFFR=<?php echo $GESResS2; ?>" target="_blank"> 
        <?php echo $GESResS2; ?>
        </a></font></b></div>
    </td>
    <td bgcolor="#ff6666" height="15" width="20%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=GES">GES</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="7%" height="18"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><b>HDF</b></b></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $HDFH; ?>" target="_blank"> 
        <?php echo $HDFH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $HDFPH; ?>" target="_blank"> 
        <?php echo $HDFPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $HDFS1; ?>" target="_blank"> 
        <?php echo $HDFS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $HDFS2; ?>" target="_blank"> 
        <?php echo $HDFS2; ?>
        </a></font></div>
    </td>
    <td height="24" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $HDFS3; ?>" target="_blank"> 
        <?php echo $HDFS3; ?>
        </a></font></div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $HDFS4; ?>" target="_blank"> 
        <?php echo $HDFS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $HDFResH; ?>" target="_blank"> 
        <?php echo $HDFResH; ?>
        </a></font></div>
    </td>
    <td height="24" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $HDFResPH; ?>" target="_blank"> 
        <?php echo $HDFResPH; ?>
        </a></font></div>
    </td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $HDFResS1; ?>" target="_blank"> 
        <?php echo $HDFResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $HDFResS2; ?>" target="_blank"> 
        <?php echo $HDFResS2; ?>
        </a></font></b></div>
    </td>
    <td width="20%" height="18"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=HDF">HDF</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="7%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#000000"><b>IDF 
        </b></font></b></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#FF6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $IDFH; ?>" target="_blank"> 
        <?php echo $IDFH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $IDFPH; ?>" target="_blank"> 
        <?php echo $IDFPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" bgcolor="#FF6666" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $IDFS1; ?>" target="_blank"> 
        <?php echo $IDFS1; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $IDFS2; ?>" target="_blank"> 
        <?php echo $IDFS2; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $IDFS3; ?>" target="_blank"> 
        <?php echo $IDFS3; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $IDFS4; ?>" target="_blank"> 
        <?php echo $IDFS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%" bgcolor="#FF6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $IDFResH; ?>" target="_blank"> 
        <?php echo $IDFResH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $IDFResPH; ?>" target="_blank"> 
        <?php echo $IDFResPH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $IDFResS1; ?>" target="_blank"> 
        <?php echo $IDFResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#FF6666"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $IDFResS2; ?>" target="_blank"> 
        <?php echo $IDFResS2; ?>
        </a></font></b></div>
    </td>
    <td width="20%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=IDF">IDF</a></b></font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>NOR</b></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NORH; ?>" target="_blank"> 
        <?php echo $NORH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NORPH; ?>" target="_blank"> 
        <?php echo $NORPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NORS1; ?>" target="_blank"> 
        <?php echo $NORS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NORS2; ?>" target="_blank"> 
        <?php echo $NORS2; ?>
        </a></font></div>
    </td>
    <td height="24" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NORS3; ?>" target="_blank"> 
        <?php echo $NORS3; ?>
        </a></font></div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NORS4; ?>" target="_blank"> 
        <?php echo $NORS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NORResH; ?>" target="_blank"> 
        <?php echo $NORResH; ?>
        </a></font></div>
    </td>
    <td height="24" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NORResPH; ?>" target="_blank"> 
        <?php echo $NORResPH; ?>
        </a></font></div>
    </td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NORResS1; ?>" target="_blank"> 
        <?php echo $NORResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NORResS2; ?>" target="_blank"> 
        <?php echo $NORResS2; ?>
        </a></font></b></div>
    </td>
    <td width="20%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=NOR">NOR</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="7%" height="25" bgcolor="#ff6666"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>NAQ</b></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NAQH; ?>" target="_blank"> 
        <?php echo $NAQH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NAQPH; ?>" target="_blank"> 
        <?php echo $NAQPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" bgcolor="#ff6666" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NAQS1; ?>" target="_blank"> 
        <?php echo $NAQS1; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NAQS2; ?>" target="_blank"> 
        <?php echo $NAQS2; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NAQS3; ?>" target="_blank"> 
        <?php echo $NAQS3; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NAQS4; ?>" target="_blank"> 
        <?php echo $NAQS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NAQResH; ?>" target="_blank"> 
        <?php echo $NAQResH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NAQResPH; ?>" target="_blank"> 
        <?php echo $NAQResPH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NAQResS1; ?>" target="_blank"> 
        <?php echo $NAQResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#ff6666"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $NAQResS2; ?>" target="_blank"> 
        <?php echo $NAQResS2; ?>
        </a></font></b></div>
    </td>
    <td width="20%" height="25" bgcolor="#ff6666"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=NAQ">NAQ</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>OCC</b></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $OCCH; ?>" target="_blank"> 
        <?php echo $OCCH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $OCCPH; ?>" target="_blank"> 
        <?php echo $OCCPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $OCCS1; ?>" target="_blank"> 
        <?php echo $OCCS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $OCCS2; ?>" target="_blank"> 
        <?php echo $OCCS2; ?>
        </a></font></div>
    </td>
    <td height="24" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $OCCS3; ?>" target="_blank"> 
        <?php echo $OCCS3; ?>
        </a></font></div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $OCCS4; ?>" target="_blank"> 
        <?php echo $OCCS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $OCCResH; ?>" target="_blank"> 
        <?php echo $OCCResH; ?>
        </a></font></div>
    </td>
    <td height="24" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $OCCResPH; ?>" target="_blank"> 
        <?php echo $OCCResPH; ?>
        </a></font></div>
    </td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $OCCResS1; ?>" target="_blank"> 
        <?php echo $OCCResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $OCCResS2; ?>" target="_blank"> 
        <?php echo $OCCResS2; ?>
        </a></font></b></div>
    </td>
    <td width="20%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=OCC">OCC</a></b></font></div>
    </td>
  </tr>
  <tr bordercolor="#FFFFFF"> 
    <td width="7%" height="14" bgcolor="#FF6666"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>PDL</b></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#FF6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PDLH; ?>" target="_blank"> 
        <?php echo $PDLH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PDLPH; ?>" target="_blank"> 
        <?php echo $PDLPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" bgcolor="#FF6666" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PDLS1; ?>" target="_blank"> 
        <?php echo $PDLS1; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PDLS2; ?>" target="_blank"> 
        <?php echo $PDLS2; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PDLS3; ?>" target="_blank"> 
        <?php echo $PDLS3; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PDLS4; ?>" target="_blank"> 
        <?php echo $PDLS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%" bgcolor="#FF6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PDLResH; ?>" target="_blank"> 
        <?php echo $PDLResH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PDLResPH; ?>" target="_blank"> 
        <?php echo $PDLResPH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#FF6666" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PDLResS1; ?>" target="_blank"> 
        <?php echo $PDLResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#FF6666"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PDLResS2; ?>" target="_blank"> 
        <?php echo $PDLResS2; ?>
        </a></font></b></div>
    </td>
    <td width="20%" height="14" bgcolor="#FF6666"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=PDL">PDL</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>PCA</b></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PCAH; ?>" target="_blank"> 
        <?php echo $PCAH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PCAPH; ?>" target="_blank"> 
        <?php echo $PCAPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PCAS1; ?>" target="_blank"> 
        <?php echo $PCAS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PCAS2; ?>" target="_blank"> 
        <?php echo $PCAS2; ?>
        </a></font></div>
    </td>
    <td height="24" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PCAS3; ?>" target="_blank"> 
        <?php echo $PCAS3; ?>
        </a></font></div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PCAS4; ?>" target="_blank"> 
        <?php echo $PCAS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PCAResH; ?>" target="_blank"> 
        <?php echo $PCAResH; ?>
        </a></font></div>
    </td>
    <td height="24" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PCAResPH; ?>" target="_blank"> 
        <?php echo $PCAResPH; ?>
        </a></font></div>
    </td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="PCAResS1.php?codeFFR=<?php echo $PCAResS1; ?>" target="_blank"> 
        <?php echo $PCAResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="calendrier.php?codeFFR=<?php echo $PCAResS2; ?>" target="_blank"> 
        <?php echo $PCAResS2; ?>
        </a></font></b></div>
    </td>
    <td width="20%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=PCA">PCA</a></b></font></div>
    </td>
  </tr>
  </tbody> 
</table>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
