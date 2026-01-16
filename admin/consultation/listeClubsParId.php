 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php

require ("../../connect/connexion1.php");

$tabComite = array ('(AP)','(AL)','(AB)','(AU)','(BE)','(BG)','(BR)','(CE)','(C)','(CBL)','(CA)','(CAZ)','(DA)','(FL)','(FC)','(IDF)','(LD)','(LM)','(LY)','(MPY)','(N)','(PL)','(PA)','(PCH)','(PR)','(PC)');
foreach ($tabComite as $valeurComite)
{
$reponse = $bdd->query("SELECT id, nom_1, idffr
						FROM bdclubs 
						WHERE siglecomite='$valeurComite' ORDER BY id "); 
             while ($row = $reponse->fetch() ){ 
			$id = $row[0];
     	$nom_1 = $row[1];
      $idffr = $row[2];
		}
echo "<br/>";
echo $valeurComite;
echo "<br/>";




?>
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3">
  
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $id; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $nom;  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $idffr; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php // echo $type; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php
}
echo "<br />";

?>