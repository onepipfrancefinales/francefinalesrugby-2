<?php
if (isset ($_GET['journee'])) $journee=$_GET['journee'];else $journee="xxx";
if (isset ($_GET['comite'])) $comite=$_GET['comite'];
if (isset ($_GET['division'])) $division=$_GET['division'];
if (isset ($_GET['id'])) $id=$_GET['id'];
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
//echo $comite; echo "<br>";
//echo $division; echo "<br>";
//echo $id; echo "<br>";
//echo $journee; echo "<br>";
?>
<br/>
<?php
 require ("choixJournee.php");
  echo "<br>";
 echo "<br>";

// 
 if ($journee<10)
 $journee="0".''.$journee;
 else
 $journee=$journee;
 
 
 
 echo "<br>";
$phpcomite_matchs=$comite.''."_matchs";
$phpcomite_journees=$comite.''."_journees";
$phpcomite_clubs=$comite.''."_clubs"; 

$journeeRecherche=$id.''.$journee; 

//echo $phpcomite_clubs; echo "<br>"; 
//echo $phpcomite_journees; echo "<br>";
//echo $journeeRecherche; echo "<br>";
 
// echo $phpcomite_matchs;
 //echo "<br>";

  if ( $comite=="phpf1"  OR  $comite=="phpfed2" OR  $comite=="phpfed3NE" OR  $comite=="phpfed3GS" )
				require ("../../connect/connection3.php") ; 
else
				require ("../../connect/connection2.php") ; 
   
   
 $reponse =mysql_query ("SELECT id_equipe_dom, id_equipe_ext,buts_dom, buts_ext
 						FROM $phpcomite_matchs
						WHERE id_journee=$journeeRecherche ");
 								 while ($donnees = mysql_fetch_array($reponse) )
												{ 
				echo $donnees['id_equipe_dom'].' - '.	$donnees['id_equipe_ext'].'  '. $donnees['buts_dom'].' - '.$donnees['buts_ext'];										
				echo "<br>";
												}
								
echo "<br>";									
?>
<br>
<?php
//echo "______";echo "<br>";
//echo $phpcomite_journees;echo "<br>";
//echo $id;echo "<br>";
// Nombre de journées
$query ="					SELECT max(numero)
							FROM $phpcomite_journees
							WHERE id_champ=$id";
								$result=mysql_query($query);
								while ($row = mysql_fetch_array($result))
									{
									$nbreDeJournee = $row[0];
									echo "Nombre de journee : ".''.$nbreDeJournee;
									
									}
							
								
								?>
<p><b><font face="Arial, Helvetica, sans-serif">Phase Aller : Journ&eacute;e 
  <?php echo $journee ;?>
  </font></b></p>
<table width="933" border="0">
  <tr> 
    <td height="13" width="228"> 
      <div align="right"> 
        <?php
$query ="					SELECT $phpcomite_clubs.nom
							FROM $phpcomite_matchs
							INNER JOIN  $phpcomite_clubs ON $phpcomite_matchs.id_equipe_dom=$phpcomite_clubs.id
							WHERE id_journee=$journeeRecherche";
										$result=mysql_query($query);
								while ($row = mysql_fetch_array($result))
									{
									$equipeDom= $row[0];
									echo $equipeDom;
									echo "<br>";
									echo "<hr>";
									}
									?>
      </div>
    </td>
    <td height="13" width="24">&nbsp; </td>
    <td height="13" width="221"> 
      <?php
	$query2 ="			SELECT $phpcomite_clubs.nom, $phpcomite_matchs.buts_dom, $phpcomite_matchs.buts_ext
						FROM $phpcomite_matchs
						INNER JOIN  $phpcomite_clubs ON $phpcomite_matchs.id_equipe_ext=$phpcomite_clubs.id
						WHERE id_journee=$journeeRecherche";			
																
						$result2=mysql_query($query2);
							while ($row = mysql_fetch_array($result2))
								{
								$equipeExt =$row[0];
								$scoreDom = $row[1];
								$scoreExt = $row[2];
							 echo $equipeExt;									
							echo "<br>";
							echo "<hr>";
								}

					?>
    </td>
    <td height="13" width="67"> 
      <div align="center">
        <?php
	$query2 ="			SELECT $phpcomite_clubs.nom, $phpcomite_matchs.buts_dom, $phpcomite_matchs.buts_ext
						FROM $phpcomite_matchs
						INNER JOIN  $phpcomite_clubs ON $phpcomite_matchs.id_equipe_ext=$phpcomite_clubs.id
						WHERE id_journee=$journeeRecherche";			
																
						$result2=mysql_query($query2);
							while ($row = mysql_fetch_array($result2))
								{
								$equipeExt =$row[0];
								$scoreDom = $row[1];
								$scoreExt = $row[2];
							 echo $scoreDom.' - '.$scoreExt;									
							echo "<br>";
							echo "<hr>";
								}

					?>
      </div>
    </td>
    <td height="13" width="371"> 
      <div align="center">
        <?php
$query ="					SELECT id, id_equipe_dom, id_equipe_ext, buts_dom, buts_ext
							FROM $phpcomite_matchs
							WHERE id_journee=$journeeRecherche";
										$result=mysql_query($query);
										while ($row = mysql_fetch_array($result))
											{
											$idMatch= $row[0];
											$equipeDom= $row[1];
											$equipeExt= $row[2];
											$scoreDom= $row[3];
											$scoreExt= $row[4];
											echo $idMatch; echo "-";
											echo $equipeDom; echo "-";
											echo $equipeExt; echo "-";
											echo $scoreDom; echo "-";
											echo $scoreExt;
											?>
						<a href="/admin/perm_matchs/traitement.php?comite=<?php echo $comite;?>&idMatch=<?php echo $idMatch; ?>&id=<?php echo $id; ?>" target="_top">Permuter</a>
															<?php
											
											echo "<br>";
											echo "<hr>";
											}
									?>
         </div>
    </td>
  </tr>
</table>
<p><b><font face="Arial, Helvetica, sans-serif">Phase Retour : Journ&eacute;e 
  <?php echo $journee + ($nbreDeJournee/2);?>
  </font> </b></p>
<?php
$journeeRechercheRetour= $journeeRecherche+($nbreDeJournee/2);
//echo $journeeRechercheRetour;
?>

<table width="664" border="0">
  <tr> 
    <td height="13" width="215"> 
      <div align="right">
        <?php
$query ="					SELECT $phpcomite_clubs.nom
							FROM $phpcomite_matchs
							INNER JOIN  $phpcomite_clubs ON $phpcomite_matchs.id_equipe_dom=$phpcomite_clubs.id
							WHERE id_journee=$journeeRechercheRetour";
										$result=mysql_query($query);
								while ($row = mysql_fetch_array($result))
									{
									$equipeDom= $row[0];
									echo $equipeDom;
									echo "<br>";
									echo "<hr>";
									}
									?>
      </div>
    </td>
    <td height="13" width="20">&nbsp; </td>
    <td height="13" width="195">
      <?php
	$query2 ="			SELECT $phpcomite_clubs.nom, $phpcomite_matchs.buts_dom, $phpcomite_matchs.buts_ext
						FROM $phpcomite_matchs
						INNER JOIN  $phpcomite_clubs ON $phpcomite_matchs.id_equipe_ext=$phpcomite_clubs.id
						WHERE id_journee=$journeeRechercheRetour";			
																
						$result2=mysql_query($query2);
							while ($row = mysql_fetch_array($result2))
								{
								$equipeExt =$row[0];
								$scoreDom = $row[1];
								$scoreExt = $row[2];
							 echo $equipeExt;									
							echo "<br>";
							echo "<hr>";
								}

					?>
    </td>
    <td height="13" width="61"> 
      <div align="center">
        <?php
	$query2 ="			SELECT $phpcomite_clubs.nom, $phpcomite_matchs.buts_dom, $phpcomite_matchs.buts_ext
						FROM $phpcomite_matchs
						INNER JOIN  $phpcomite_clubs ON $phpcomite_matchs.id_equipe_ext=$phpcomite_clubs.id
						WHERE id_journee=$journeeRechercheRetour";			
																
						$result2=mysql_query($query2);
							while ($row = mysql_fetch_array($result2))
								{
								$equipeExt =$row[0];
								$scoreDom = $row[1];
								$scoreExt = $row[2];
							 echo $scoreDom.' - '.$scoreExt;									
							echo "<br>";
							echo "<hr>";
								}

					?>
      </div>
    </td>
    <td height="13" width="94"> 
      <div align="center"></div>
    </td>
  </tr>
</table>
<p align="center"><a href="accueil.php"><b><font size="4">Retour</font></b></a></p>
</body>
</html>
