<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<?php $equipe = $_GET['equipe'];?>
<?php $id_equipe = $_GET['id_equipe'];?>
<?php $comite = $_GET['comite'];?>

<?php $connect = $_GET['connect'];?>
<?php //echo $comite;?><?php// echo $equipe;?><?php// echo $id_equipe;?><?php// echo $connect;?>
 



<div align="center">
  <table width="1300" border="0" cellpadding="0">
    <tr> 
      <td width="291" height="211"> 
        <div align="center"> 
          <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
          <?php
$reponse = mysql_query("SELECT sigle,comite, code 
						FROM bdclubs 
						WHERE code='$equipe'"); // Requête SQL 
								While ($donnees = mysql_fetch_array($reponse) )
								{ 
								?>
										  <strong> 
										  <?php echo $donnees['comite'];?>
										  <font size="6"> <br>
										  <br>
										  <?php echo $donnees['sigle'];?>
										  </font></strong> </div>
									  </td>
									  <td width="285" height="211"> 
										<div align="center"> 
										  <?php 
										 $logo=substr($equipe, -5);
								{print("<img src=\"http://francefinalesrugby.franceserv.com/images/blasons200_200/$logo.gif\" >");}
								?>
          <?php
 }

mysql_close(); // Déconnexion de MySQL
?>
        </div>
        <div align="center"></div>
        <div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif"><b> 
          </b></font></b></div>
      </td>
      <td bordercolor="#000000" height="211" valign="top" width="716"> 
        <?php $feminines=($id_equipe.''."F");?>
        <?php $belascain=($id_equipe.''."B");?>
        <?php $juniors=($id_equipe.''."J"); ?>
        <?php $cadets=($id_equipe.''."C"); ?>
        <font size="5" face="Arial, Helvetica, sans-serif" color="#FF0000"> 
        <?php
//require ("../../../$connect.php")
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
        </font> 
        <div align="center"><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#FF0000"><b>Feuille 
          de match<br>
          <font size="3">(Compl&eacute;te ou partielle)</font></b></font></b></font></b></font><font size="5" face="Arial, Helvetica, sans-serif"><a href="../feuille_match1/page_consulter.php?equipe=<?php echo $equipe; ?>&comite=<?php echo $comite; ?>&id_equipe=<?php echo $id_equipe; ?>&connect=<?php echo $connect; ?>"><br>
          <br>
          S&eacute;niors</a></font></b></font> 
          <b><font size="5"><b><font size="5" face="Arial, Helvetica, sans-serif"> 
          </font></b></font><font size="5" face="Arial, Helvetica, sans-serif"></font></b> 
          <font face="Arial, Helvetica, sans-serif"><br>
          </font></b></font><b><font size="5" face="Arial, Helvetica, sans-serif"><b> 
          <?php
		  
//  require ("../../$connect.php")
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>
          <?php
$equipeF=($equipe+800);
//echo $equipeF;
?>
          <?php

$requete = "SELECT code, id FROM bdclubs where id='$equipeF'";
$result = mysql_query($requete) or die (mysql_error());
while($row = mysql_fetch_array($result))
		{
         $codeF=$row[0];
		}
 ?>
          <?php 
 	if ($codeF==$equipeF)
		 {
		 ?>
          <a href=\admin/feuille_match1/page_consulter.php?equipe=<?php echo $equipe; ?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&id_equipe=<?php echo $feminines?> target=_top >F&eacute;minines</a> 
          <?php
  		}
 	 else
  		{
 		echo "F&eacute;minines";
  		}
 ?>
          </b><br>
          </font><font size="5" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$equipeB=($equipe+600);

?>
          <?php

$requete = "SELECT code, id FROM bdclubs where id='$equipeB'";
$result = mysql_query($requete) or die (mysql_error());
while($row = mysql_fetch_array($result))
		{
         $codeB=$row[0];
		}
 ?>
          <?php 
 	if ($codeB==$equipeB)
		 {
		 ?>
          <a href=\admin/feuille_match1/page_consulter.php?equipe=<?php echo $equipe; ?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&id_equipe=<?php echo $belascain?> target=_top >B&eacute;lascain</a> 
          <?php
  		}
 	 else
  		{
 		echo "B&eacute;lascain";
  		}
 ?>
          <br>
          </b></font></b><b><font size="5" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$equipeJ=($equipe+400);
//echo $equipeJ;
?>
          <?php

$requete = "SELECT code, id FROM bdclubs where id='$equipeJ'";
$result = mysql_query($requete) or die (mysql_error());
while($row = mysql_fetch_array($result))
		{
         $codeJ=$row[0];
		}
 ?>
          <?php 
 	if ($codeJ==$equipeJ)
		 {
		 ?>
          <a href=\admin/feuille_match1/page_consulter.php?equipe=<?php echo $equipe; ?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&id_equipe=<?php echo $juniors?> target=_top >Juniors</a> 
          <?php
  		}
 	 else
  		{
 		echo "Juniors";
  		}
 ?>
          </b></font></b><b><font size="5" face="Arial, Helvetica, sans-serif"><b> 
          <br>
          <?php
$equipeC=($equipe+200);
//echo $equipeC;
?>
          <?php

$requete = "SELECT code, id FROM bdclubs where id='$equipeC'";
$result = mysql_query($requete) or die (mysql_error());
while($row = mysql_fetch_array($result))
		{
         $codeC=$row[0];
		}
 ?>
          <?php 
 	if ($codeC==$equipeC)
		 {
		 ?>
          <a href=\admin/feuille_match1/page_consulter.php?equipe=<?php echo $equipe; ?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&id_equipe=<?php echo $cadets ?> target=_top >Cadets</a> 
          <?php
  		}
 	 else
  		{
 		echo "Cadets";
  		}
 ?>
          <font size="5" face="Arial, Helvetica, sans-serif"><b> 
          <?php
		  
mysql_close(); // Déconnexion de MySQL
?>
          </b></font></b></font></b></div>
        </td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;
<div align="center"></div>
<div align="center">
  <p><font face="Arial, Helvetica, sans-serif">
<?php  echo $equipe;
     include "journee2.php" ;	 ?>
    </font></p>
  <p><font face="Arial, Helvetica, sans-serif">
    
    <br>
    </font></p>
  </div>
