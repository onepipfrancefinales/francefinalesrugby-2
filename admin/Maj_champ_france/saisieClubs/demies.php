<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<p> 


   <?php
require ("../../../phasesFinales/fonctionListeEquipes.php");
?>
   <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  
</p>

<form name="insertion" action="transfertBD.php?annee=<?php echo $annee;?>&champ=<?php echo $champ;?>&type=<?php echo $type;?>" method="POST">
  <b><font size="4"> 

  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id ,	E101, E102, E103, E104					  
						  FROM bdpfClubs 
						  WHERE  division = $champ and annee = $annee ") ;

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); 
?>
  </font></b> 
  <input type="hidden" name="champ" value="<?php echo($champ) ;?>">
  <table border="0" cellspacing="2" cellpadding="2" width="500">
    <tr align="center"> 
      <td colspan="3"> </td>
    </tr>
    <tr align="center">
      <td colspan="3" height="32"><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif">
        <?php echo $nomDivision; ?>
        </font></b></font></td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td colspan="3" height="32"><font color="#FF0000"><b><font size="7" face="Arial, Helvetica, sans-serif"> 
        </font><font size="5" face="Arial, Helvetica, sans-serif"> <font color="#000000"> 
        ( 
        <?php echo $champ; ?>
        )</font></font></b></font> <font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"><font color="#000000"> 
        <?php echo $annee; ?>
        </font></font></b></font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">1</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2001; ?>
        </font></td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA2001" value="<?php echo($result->E101) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">2</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2002; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA2002" value="<?php echo($result->E102) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">3</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2003; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA2003" value="<?php echo($result->E103) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">4</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2004; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA2004" value="<?php echo($result->E104) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td valign="middle" height="36" colspan="3"><a href="http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/superaccueil.php" target="_top"><b></b> 
        </a> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#00FFFF"> 
      <td valign="middle" height="36" colspan="3"><a href="http://francefinalesrugby.franceserv.com/admin/sadmin2.php" target="_top"><b><font face="Arial, Helvetica, sans-serif">Retour 
        &agrave; l'accueil</font></b></a></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
