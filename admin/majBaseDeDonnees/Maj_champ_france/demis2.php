<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>
<?php $niv=$_GET['niv']; ?>

<?php $annee=$_GET['annee']; ?>
<?php echo $annee; ?>
<?php echo $niv; ?>

<?php $annee2=($annee.''."_2"); ?> 



<?php $id=$_POST['id']; ?>

<?php 
	if ($id==110 or $id==120 or $id==130)
	require ("../../phases_finales/fonctionsPhasesFinalesPro.php");
	else
	require ("../../phases_finales/fonctions_phases_finales.php");
	?>


<form name="insertion" action="<?php echo $niv ;?>3.php?annee=<?php echo $annee; ?> " method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id , A2001, A2002, A2003, A2004
    					   			  FROM bdpf$annee2
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
      <td colspan="4"><font face="Arial, Helvetica, sans-serif"><b>DEMI FINALE<font size="4" face="Arial, Helvetica, sans-serif"> 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) 
        <?php echo $annee; ?>
        </font></b></font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2001; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2002; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A2001" value="<?php echo($result->A2001) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A2002" value="<?php echo($result->A2002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2003; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2004; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A2003" value="<?php echo($result->A2003) ;?>" size="3">
        </font></td>
      <td><font face="Arial, Helvetica, sans-serif"></font></td>
      <td> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A2004" value="<?php echo($result->A2004) ;?>" size="3">
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
