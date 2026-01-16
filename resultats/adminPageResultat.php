<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>
<form name="insertion" action="http://francefinalesrugby.franceserv.com/admin/modifAnnuelle/chgDateSaison3.php" method="POST">
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db2"); 
?>
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  
  <table border="0" cellspacing="0" cellpadding="10" width="54%">
    <tr align="center"> 
      <td colspan="8"> </td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td width="177">Changement de date</td>
      <td width="78">&nbsp;</td>
      <td width="86">&nbsp;</td>
      <td width="62">&nbsp;</td>
      <td width="62">&nbsp;</td>
      <td width="62">&nbsp;</td>
      <td width="68">&nbsp;</td>
      <td width="80">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="177">&nbsp;</td>
      <td width="78">Honneur</td>
      <td width="86">Promotion</td>
      <td width="62">1re Série</td>
      <td width="62">2me Série</td>
      <td width="62">3me Série</td>
      <td width="68">4me Série</td>
      <td width="80">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="177"> <font face="Arial, Helvetica, sans-serif"> 
        <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpap_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comite de Alpes</font></td>
      <td width="78"><font face="Arial, Helvetica, sans-serif">
        <input type="text" name="AP171" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
      <td width="86"><font face="Arial, Helvetica, sans-serif">
        <input type="text" name="AP181" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
      <td width="62"><font face="Arial, Helvetica, sans-serif">
        <input type="text" name="AP191" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
      <td width="62"><font face="Arial, Helvetica, sans-serif">
        <input type="text" name="AP201" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
      <td width="62"><font face="Arial, Helvetica, sans-serif">
        <input type="text" name="AP211" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
      <td width="68"><font face="Arial, Helvetica, sans-serif">
        <input type="text" name="AP221" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
      <td width="80"> 
        <input type="submit" value="modifier" name="submit2">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td width="177"> 
        <input type="submit" value="modifier" name="submit">
      </td>
      <td width="78">&nbsp;</td>
      <td width="86">&nbsp;</td>
      <td width="62">&nbsp;</td>
      <td width="62">&nbsp;</td>
      <td width="62">&nbsp;</td>
      <td width="68">&nbsp;</td>
      <td width="80">&nbsp;</td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
<table border="0" cellspacing="0" cellpadding="10" width="54%">
  <tr align="center"> 
    <td colspan="8"> </td>
  </tr>
  <tr align="center" bgcolor="#FF0000"> 
    <td width="177">Changement de date</td>
    <td width="78">&nbsp;</td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177">&nbsp;</td>
    <td width="78">Honneur</td>
    <td width="86">Promotion</td>
    <td width="62">1re Série</td>
    <td width="62">2me Série</td>
    <td width="62">3me Série</td>
    <td width="68">4me Série</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"> <font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpap_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      Comite de Alpes</font></td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeAP2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80"> 
      <input type="submit" value="modifier" name="submit22">
    </td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpal_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comite Alsace Lorraine</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeAL2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpab_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      Comité Armagnac Bigorre</font></td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeAB2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpau_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Auvergne</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeAU2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpbe_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comite du Béarn</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeBE2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpbg_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Bourgogne</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeBG2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpbr_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Bretagne</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeBR2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpce_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Centre</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeCE2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpcbl_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comite Cote Basques Landes</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeCBL2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpca_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Cote d'argent</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeCA2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpda_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comite Drome Ardeche</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeDA2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpfl_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comite Flandres</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeFL2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpidf_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comite Ile de France</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeAB122" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpld_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comite Languedoc</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeLD2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phplm_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Limousin</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeLM2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phply_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Lyonnais</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeLY2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpmpy_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Midi Pyrénées</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeMPY2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpn_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Normandie</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeN2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phppl_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Pays de Loire</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneePL2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phppa_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Perigord Agenais</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneePA2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phppch_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Poitou Charente</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneePCH2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phppr_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Provence</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneePR2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpr_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Comité Pays Catalan</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneePC2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db3"); 
?>
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phppro_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }


?>
      </font>Compétitons Pro</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneePRO2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpf1_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Compétitions Fédérale 1</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeFED12" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpfed2_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Compétitions Fédérale 2</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeFED22" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpfed3NE_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Compétitions Fédérale 3/NE</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeFED3NE2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpfed3GS_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
      </font>Compétitions Fédérale 3/GS</td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneeFEM2" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="177"><font face="Arial, Helvetica, sans-serif"> 
      <?php
  $id=2010;

  $requete = mysql_query( "	SELECT annee
  							FROM phpr_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

mysql_close();?>
      Compétitions Féminines </font></td>
    <td width="78"><font face="Arial, Helvetica, sans-serif"> 
      <input type="text" name="anneePC72" value="<?php echo($result->annee) ;?>" size="3">
      </font></td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr align="center" valign="top" bgcolor="#FF0000"> 
    <td width="177"> 
      <input type="submit" value="modifier" name="submit3">
    </td>
    <td width="78">&nbsp;</td>
    <td width="86">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="62">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
