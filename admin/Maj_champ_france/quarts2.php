<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>
<?php $niv=$_GET['niv']; ?>

<?php $annee=$_GET['annee']; ?>


<?php echo $annee; ?>
<?php $id=$_POST['id']; ?>


<?php $annee2=($annee.''."_2"); ?> 







<?php 
if ($id==110)
	require ("../../phases_finales/fonctionsPhasesFinalesPro.php");
else
	require ("../../phases_finales/fonctions_phases_finales.php");
?>

<?php echo $niv; ?>
<form name="insertion" action="<?php echo $niv ;?>3.php?annee=<?php echo $annee; ?>" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id ,A4001, A4002, A4003, A4004 ,A4005, A4006, A4007, A4008,
  									  A2001, A2002, A2003, A2004,
    					   			  A1001, A1002 FROM bdpf$annee2
									  WHERE  id = ".$id ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); // D�connexion de MySQL
?>
  </font></b> 
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" cellspacing="0" cellpadding="10" width="100%">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td colspan="4" height="32"><b><font size="4" face="Arial, Helvetica, sans-serif">Quarts 
        de Finale 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) 
        <?php echo $annee; ?>
        </font></b></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4001; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4002; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A4001" value="<?php echo($result->A4001) ;?>" size="3">
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A4002" value="<?php echo($result->A4002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4003; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4004; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A4003" value="<?php echo($result->A4003) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A4004" value="<?php echo($result->A4004) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">3</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4005; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4006; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A4005" value="<?php echo($result->A4005) ;?>" size="3">
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A4006" value="<?php echo($result->A4006) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">4</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4007; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4008; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A4007" value="<?php echo($result->A4007) ;?>" size="3">
        </font></td>
      <td><font face="Arial, Helvetica, sans-serif"></font></td>
      <td> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A4008" value="<?php echo($result->A4008) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td colspan="4"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#00FFFF"> 
      <td colspan="4"><a href="http://francefinalesrugby.franceserv.com/admin/sadmin2.php" target="_top"><b><font face="Arial, Helvetica, sans-serif">Retour 
        &agrave; l'accueil</font></b></a></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
