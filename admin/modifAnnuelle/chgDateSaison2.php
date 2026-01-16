<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>
<form name="insertion" action="http://francefinalesrugby.franceserv.com/admin/modifAnnuelle/chgDateSaison3.php" method="POST">
  <?php //****** Connection � la base de donn�es n�2    *********
  
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db2"); 
?>
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  
  <table border="0" cellspacing="0" cellpadding="10" width="40%">
    <tr align="center"> 
      <td colspan="2"> </td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td colspan="2"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="5">Changement 
        de date (saisons)</font></b></td>
    </tr>
    <tr align="center"> 
      <td width="260"> <font face="Arial, Helvetica, sans-serif"> 
        <?php
   $requete = mysql_query( "	SELECT annee
  							FROM phpap_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comite de Alpes</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeAP" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpal_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comite Alsace Lorraine</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeAL" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpab_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Armagnac Bigorre</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeAB" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpau_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Auvergne</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeAU" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
 

  $requete = mysql_query( "	SELECT annee
  							FROM phpbe_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comite du B&eacute;arn</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeBE" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
 

  $requete = mysql_query( "	SELECT annee
  							FROM phpbg_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Bourgogne</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeBG" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpce_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Centre</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeCE" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpcbl_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comite Cote Basques Landes</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeCBL" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  
  $requete = mysql_query( "	SELECT annee
  							FROM phpca_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Cote d'argent</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeCA" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpda_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comite Drome Ardeche</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeDA" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpfl_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comite Flandres</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeFL" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpidf_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comite Ile de France</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeIDF" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpld_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comite Languedoc</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeLD" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phplm_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Limousin</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeLM" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phply_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

mysql_close();?>


        Comit&eacute; Lyonnais</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeLY" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        
		
		<?php //****** Connection � la base de donn�es n�3    *********
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db3"); 
?>
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpmpy_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

mysql_close();?>
        Comit&eacute; Midi Pyr&eacute;n&eacute;es</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeMPY" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db2"); 
?>
        <?php
 

  $requete = mysql_query( "	SELECT annee
  							FROM phpn_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Normandie</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeN" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phppa_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Perigord Agenais</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneePA" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phppch_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Poitou Charente</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneePCH" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phppc_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Pays Catalan</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneePC" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db3"); 
?>
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpbr_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Bretagne</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeBR" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
 

  $requete = mysql_query( "	SELECT annee
  							FROM phppl_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Pays de Loire</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneePL" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phppr_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comit&eacute; Provence</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneePR" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phppro_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }


?>
        Comp&eacute;titons Pro</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneePRO" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpf1_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comp&eacute;titions F&eacute;d&eacute;rale 1</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeFED1" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpfed2_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comp&eacute;titions F&eacute;d&eacute;rale 2</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeFED2" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpfed3NE_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

?>
        Comp&eacute;titions F&eacute;d&eacute;rale 3/NE</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeFED3NE" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
 

  $requete = mysql_query( "	SELECT annee
  							FROM phpfed3GS_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }


mysql_close();?>
        Comp&eacute;titions F&eacute;d&eacute;rale 3/GS</font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeFED3GS" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="260"><font face="Arial, Helvetica, sans-serif"> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france_db4"); 
?>
        <?php
  

  $requete = mysql_query( "	SELECT annee
  							FROM phpfem_saisons 
						  	WHERE  id = 2010" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 		
		 }

mysql_close();?>
        Comp&eacute;titions F&eacute;minines </font></td>
      <td width="59"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="anneeFEM" value="<?php echo($result->annee) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td colspan="2"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
