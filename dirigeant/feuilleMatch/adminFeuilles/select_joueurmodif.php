<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../feuilledestyle2.css"/>
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head> 

  
 
  <?php $championnat = $_POST['championnat'];?>
  <?php $code_div = $_GET['code_div'];?>
  <?php $code_match = $_GET['code_match'];?>
  <?php $date = $_GET['date'];?>
  <?php $comite = $_GET['comite'];?>
  <?php $equipe = $_GET['equipe'];?>
  <?php $equipeA = $_GET['equipeA'];?>
  <?php $equipeB = $_GET['equipeB'];?>
  <?php $connect = $_GET['connect'];?>
  <?php $id_equipe = $_GET['id_equipe'];?>

 




<?php// echo $connect;?>
<?php// echo $code_match ;?>
<?php// echo $championnat;?>
<?php// echo $equipe ;?>
<?php// echo $equipeA ;?>
<?php// echo $equipeB ;?>

<?php// echo $comite ;?>
<?php
require ("../../../$connect.php")	
	  
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>

<?php
$reponse = mysql_query("SELECT sigle,comite, code 
						FROM bdclubs 
						WHERE code='$equipe'"); 
								While ($donnees = mysql_fetch_array($reponse) )
									{ 
								  	$equipe = $donnees['code'];
									}
?>
<? //echo $equipe;?>
<? //echo $comite;?>
<?php $bdcomite=("php".''.$comite.''."_joueurs");?>
<?php //echo $bdcomite;?>
<?php
require ("../../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip


?>
<b><font size="4"> </font></b> 
<form name="insertion" action="select_joueurrmodif2.php?equipe=<?php echo $equipe; ?>&id-equipe=<?php echo $id_equipe; ?>&connect=<?php echo $connect; ?>&comite=<?php echo $comite; ?>&code_div=<?php echo $code_div; ?>&equipeA=<?php echo $equipeA; ?>&equipeB=<?php echo $equipeB; ?>&date=<?php echo $date; ?>&code_match=<?php echo$code_match;?>" method="POST">
  <b><font size="4"> </font></b> 
  <table border="0" cellspacing="0" cellpadding="2" width="300" height="1071">
    <tr align="center"> 
      <td height="20" valign="top" colspan="7"><font face="Arial, Helvetica, sans-serif"><b> 
        <?php// $bdcomite=("Php".''.$comite.''."_joueurs");?>
        <font size="2">Feuille de match de la rencontre </font></b></font></td>
    </tr>
    <tr align="center"> 
      <td height="0" valign="top" colspan="7"><font face="Arial, Helvetica, sans-serif"><b><font size="2">du 
        <font color="#FF0000"> 
        <?php $date=substr($date,0,10);?>
        <?php echo $date; ?>
        </font> &agrave; <font color="#FF0000"> 
        <?php
if($equipe==$equipeA)
	 {
	  $terrain="domicile";
	  $bdfeuille=("php".''.$comite.''."_feuilleA");
	  }
	  else
	  {
	  $terrain="l'extérieur";
	  $bdfeuille=("php".''.$comite.''."_feuilleB");
	  }
	  echo $terrain;
?>
        </font><font face="Arial, Helvetica, sans-serif"><b><font size="2"> face</font></b></font><font color="#FF0000"> 
        <?php
	if($terrain=="domicile")
	  $equipeC=$equipeB;
	elseif($terrain=="ext")
	  $equipeC=$equipeA;
	  
	 
?>
        <?php
$reponse = mysql_query("SELECT sigle,comite, code 
						FROM bdclubs 
						WHERE code='$equipeC'"); // Requête SQL 
								While ($donnees = mysql_fetch_array($reponse) )
										{ 
										 echo $donnees['sigle'];
								 		}

?>
        <?php// echo $bdfeuille;?>
        </font></font></b></font></td>
    </tr>
    <tr align="center"> 
      <td height="0" valign="top" colspan="3">&nbsp;</td>
      <td height="1" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" height="12" bgcolor="#99FF99">&nbsp;</td>
      <td width="110" height="12" bgcolor="#99FF99"></td>
      <td height="1" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="0" valign="top" colspan="3"><b><font face="Arial, Helvetica, sans-serif">Effectif</font></b></td>
      <td height="1" bgcolor="#CCCCCC" width="6"></td>
      <td colspan="2" height="12" bgcolor="#99FF99"><font face="Arial, Helvetica, sans-serif"><b>Feuille 
        de match</b></font></td>
      <td height="1" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="2" valign="top" width="60">&nbsp;</td>
      <td height="2" bgcolor="#CCCCCC" valign="top" width="6"> 
        <div align="center">
<p><font face="Arial, Helvetica, sans-serif" color="#000000" size="3"><b> 
            </b></font></p>
          </div>
      </td>
      <td height="2" valign="top" width="60"></td>
      <td height="2" bgcolor="#CCCCCC" width="6"> 
        <div align="center"></div>
        </td>
      <td width="50" height="2" bgcolor="#99FF99">&nbsp;</td>
      <td width="110" height="2" bgcolor="#99FF99"></td>
      <td height="2" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="223" rowspan="48" valign="top"> 
         <div id="Taillebold">
<?php


require ("../../../$connect.php")	

?>
          <?php $requete="	SELECT nom, premiereLigne 
		  					FROM $bdcomite 
							WHERE club=$equipe AND photo='1' limit 0,50";
								  $result=mysql_query ($requete);
								  while ($row=mysql_fetch_array ($result))
									 {
									 echo $row[0];
									 echo " <br/>";
									 echo " <br/>";
								 	} 
								 ?>
           </div>
      </td>
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td rowspan="48" height="522" valign="top"> 
        <div id="Taillebold"> 
       
          <?php $requete="	SELECT nom, premiereLigne 
		  					FROM $bdcomite 
							WHERE club=$equipe AND photo='1' limit 51,99";
								  $result=mysql_query ($requete);
								  while ($row=mysql_fetch_array ($result))
									 {
									 echo $row[0];
									 echo " <br/>";
									 echo " <br/>";
								 	} 
								 ?>
        </div>
      </td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" height="12" bgcolor="#99FF99"><b><font size="4"> 
<?php
	 	

$tabN = array ();
for ($i=1 ; $i<24  ; $i++) 
{
$numero ="N".''.$i;
$requete = "	SELECT $bdcomite.nom 
				FROM $bdfeuille 
				INNER JOIN $bdcomite ON $bdcomite.id_perso = $bdfeuille.$numero
				WHERE $bdfeuille.id = $code_match"  ;
						$result=mysql_query ($requete);
						while ($row=mysql_fetch_array ($result))
								{
								$tabN[]=$row[0];
								}
}
										
mysql_close(); 										
?>
        <input type="hidden" name="id" value="<?php echo($id) ;?>">
        </font></b></td>
      <td width="110" height="12" bgcolor="#99FF99"></td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99">&nbsp;</td>
      <td width="110" bgcolor="#99FF99">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"> <b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">1</font></b> 
      </td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N1" value="<?php echo $tabN[0] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99" height="13"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">2</font></b></td>
      <td width="110" bgcolor="#99FF99" height="13"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399"> 
        <input type="text" name="N2" value="<?php echo $tabN[1] ;?>" size="20">
        </font></b></td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"> 
        <div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">3</font></b></div>
      </td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N3" value="<?php echo $tabN[2] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">4</font></b> 
      </td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N4" value="<?php echo $tabN[3] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">5</font></b> 
      </td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N5" value="<?php echo $tabN[4] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">6</font></b> 
      </td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N6" value="<?php echo $tabN[5] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">7</font></b></td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N7" value="<?php echo $tabN[6] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">8</font></b> 
      </td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N8" value="<?php echo $tabN[7] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99" height="5"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">9</font></b></td>
      <td width="110" bgcolor="#99FF99" height="5"> 
        <input type="text" name="N9" value="<?php echo $tabN[8] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">10</font></b></td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N10" value="<?php echo $tabN[9] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">11</font></b> 
      </td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N11" value="<?php echo $tabN[10] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">12</font></b></td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N12" value="<?php echo $tabN[11] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">13</font></b></td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N13" value="<?php echo $tabN[12] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">14</font></b></td>
      <td width="110" bgcolor="#99FF99"> 
        <input type="text" name="N14" value="<?php echo $tabN[13] ;?>" size="20">
      </td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">15</font></b></td>
      <td width="110" bgcolor="#99FF99"><b> 
        <input type="text" name="N15" value="<?php echo $tabN[14] ;?>" size="20">
        </b></td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#99FF99">&nbsp;</td>
      <td width="110" bgcolor="#99FF99">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="0" bgcolor="#CCCCCC" width="6"></td>
      <td colspan="2" bgcolor="#99FF99"><font size="4" face="Arial, Helvetica, sans-serif"><b><font color="#003399" size="3">N&deg; 
        du capitaine</font></b></font></td>
      <td height="0" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="1" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="1" bgcolor="#CCCCCC" width="6"></td>
      <td colspan="2" bgcolor="#99FF99"> 
        <input type="text" name="capitaine" value="<?php echo($result->capitaine) ;?>" size="3">
      </td>
      <td height="1" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="2" bgcolor="#CCCCCC" width="6"></td>
      <td width="50">&nbsp;</td>
      <td width="110">&nbsp;</td>
      <td height="2" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="4" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#00CC99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">16</font></b></td>
      <td width="110" bgcolor="#00CC99"> 
        <input type="text" name="N16" value="<?php echo $tabN[15] ;?>" size="20">
      </td>
      <td height="4" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="7" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#00CC99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">17</font></b></td>
      <td width="110" bgcolor="#00CC99"><b> 
        <input type="text" name="N17" value="<?php echo $tabN[16] ;?>" size="20">
        </b></td>
      <td height="7" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="15" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" bgcolor="#00CC99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">18</font></b></td>
      <td width="110" bgcolor="#00CC99"> 
        <input type="text" name="N18" value="<?php echo $tabN[17] ;?>" size="20">
      </td>
      <td height="15" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" height="19" bgcolor="#00CC99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">19</font></b></td>
      <td width="110" height="19" bgcolor="#00CC99"> 
        <input type="text" name="N19" value="<?php echo $tabN[18] ;?>" size="20">
      </td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" height="19" bgcolor="#00CC99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">20</font></b> 
      </td>
      <td width="110" height="19" bgcolor="#00CC99"> 
        <input type="text" name="N20" value="<?php echo $tabN[19] ;?>" size="20">
      </td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" height="19" bordercolor="#000000" bgcolor="#00CC99" valign="middle"> 
        <div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">21</font></b></div>
      </td>
      <td width="110" height="19" bordercolor="#000000" bgcolor="#00CC99" valign="middle"> 
        <input type="text" name="N21" value="<?php echo $tabN[20] ;?>" size="20">
      </td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" height="19" bordercolor="#000000" bgcolor="#00CC99"> 
        <div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">22 
          </font></b> </div>
      </td>
      <td width="110" height="19" bordercolor="#000000" bgcolor="#00CC99"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399"> 
        <input type="text" name="N22" value="<?php echo $tabN[21] ;?>" size="20">
        </font></b></td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" height="19" bordercolor="#000000" bgcolor="#00CC99"> 
        <div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#003399">23</font></b></div>
      </td>
      <td width="110" height="19" bordercolor="#000000" bgcolor="#00CC99"> 
        <input type="text" name="N23" value="<?php echo $tabN[22] ;?>" size="20">
      </td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bordercolor="#000000" height="19" width="50" bgcolor="#00CC99">&nbsp;</td>
      <td bordercolor="#000000" height="19" width="110" bgcolor="#00CC99">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td colspan="2" height="19" bgcolor="#00CC99"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#003399">N&deg; 
        du Juge <br>
        de touche</font></b></font></b></td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#00CC99" height="19" colspan="2"> 
        <input type="text" name="juge" value="<?php echo($result->juge) ;?>" size="3">
      </td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="25" bgcolor="#CCCCCC" width="6"></td>
      <td bordercolor="#000000" height="25" width="50" bgcolor="#FFFFFF">&nbsp;</td>
      <td bordercolor="#000000" height="25" width="110" bgcolor="#FFFFFF">&nbsp;</td>
      <td height="25" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#0099FF" height="19" colspan="2"><font size="5"><b><font face="Arial, Helvetica, sans-serif">Staff 
        :</font></b></font></td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bordercolor="#000000" height="19" colspan="2" bgcolor="#0099FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Entraineur</font></b></td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="0" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#0099FF" height="19" colspan="2"> 
        <input type="text" name="entraineur" value="<?php echo($result->entraineur) ;?>" size="20">
      </td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="1" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#0099FF" height="19" colspan="2"><b><font face="Arial, Helvetica, sans-serif" size="2">Soigneur</font></b></td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="1" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#0099FF" height="19" colspan="2"> 
        <input type="text" name="soigneur" value="<?php echo($result->soigneur) ;?>" size="20">
      </td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="19" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#0099FF" height="19" colspan="2"><b><font face="Arial, Helvetica, sans-serif" size="2">Adjoint</font></b></td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="19" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#0099FF" height="19" colspan="2"> 
        <input type="text" name="adjoint" value="<?php echo($result->adjoint) ;?>" size="20">
      </td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="19" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#0099FF" height="19" colspan="2"><b><font face="Arial, Helvetica, sans-serif" size="2">Resp 
        Dopage</font></b></td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="19" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#0099FF" height="19" colspan="2"> 
        <input type="text" name="dopage" value="<?php echo($result->dopage) ;?>" size="20">
      </td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="19" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#0099FF" height="19" colspan="2"><b><font face="Arial, Helvetica, sans-serif" size="2">Responsable</font></b></td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="19" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bgcolor="#0099FF" height="19" colspan="2"> 
        <input type="text" name="responsable" value="<?php echo($result->responsable) ;?>" size="20">
      </td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="19" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td bordercolor="#000000" height="19" width="50" bgcolor="#0099FF">&nbsp;</td>
      <td bordercolor="#000000" height="19" width="110" bgcolor="#0099FF">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="19" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="6"></td>
      <td width="50" height="19" bordercolor="#000000" bgcolor="#0099FF"> 
        <div align="right"> </div>
      </td>
      <td width="110" height="19" bordercolor="#000000" bgcolor="#0099FF">&nbsp;</td>
      <td height="19" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="23" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="23" bgcolor="#CCCCCC" width="6"></td>
      <td colspan="2" height="23" bordercolor="#000000" valign="middle">&nbsp;</td>
      <td height="23" bgcolor="#CCCCCC" width="5"></td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="45" bgcolor="#CCCCCC" valign="top" width="6">&nbsp;</td>
      <td height="45" bgcolor="#CCCCCC" width="6"></td>
      <td colspan="2" height="45" bordercolor="#000000" bgcolor="#339966" valign="middle"> 
        <div align="center"><font size="5"><b> 
          <input type="submit" value="modifier" name="submit2">
          </b></font></div>
      </td>
      <td height="45" bgcolor="#CCCCCC" width="5"></td>
    </tr>
  </table>
  <p align="left">&nbsp; </p>
</form>

<p>&nbsp;</p>




</body>
</html>
