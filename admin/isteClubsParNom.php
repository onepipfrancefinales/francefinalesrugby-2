 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<b><font face="Arial, Helvetica, sans-serif" size="5">ALPES<br>
  <br>
  </font></b> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr 
						FROM bdclubs 
						WHERE siglecomite='(AP)' 
						ORDER BY nom_1 "); 
								while ($donnees = mysql_fetch_array($reponse) )
									{ 
										echo $donnees['id']; 
										echo $donnees['nom_1'];  
										echo $donnees['idffr']; 	
										echo "<br />";
									}
								 ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">ALSACE LORRAINE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs 
WHERE siglecomite='(AL)' 
ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="0" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184"><font face="Arial, Helvetica, sans-serif"><font size="3">
      <?php echo $donnees['accesBase']; ?>
      </font></font></td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">ARMAGNAC BIGORRE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type
FROM bdclubs 
WHERE siglecomite='(AB)' 
ORDER BY nom_1 "); 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">AUVERGNE</font></b></font></p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(AU)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">BEARN</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(BE)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">BOURGOGNE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(BG)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">BRETAGNE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(BR)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">CENTRE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(CE)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">CORSE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(C)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">COTE BASQUE LANDES</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(CBL)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">COTE D ARGENT</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(CA)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">COTE D AZUR</font></b></font></p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(CAZ)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138" height="22"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224" height="22"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139" height="22"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184" height="22">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">DROME ARDECHE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(DA)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">FLANDRES</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(FL)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">FRANCHE COMTE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(FC)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">ILE DE FRANCE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(IDF)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">LANGUEDOC</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(LD)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">LIMOUSIN</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(LM)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">LYONNAIS</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(LY)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">MIDI PYRENEES</font></b></font></p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(MPY)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">NORMANDIE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(N)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">PAYS DE LOIRE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(PL)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">PERIGORD AGENAIS</font></b></font></p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(PA)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">POITOU CHARENTE</font></b></font></p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(PCH)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">PROVENCE</font></b></font></p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(PR)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">PAYS CATALAN</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php
$reponse = mysql_query("SELECT id, nom_1, idffr, type FROM bdclubs WHERE siglecomite='(PC)' ORDER BY nom_1 "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</font></b> 
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3"> 
  </font></b></font> </div>
<table width="695" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['id']; ?>
        </font></font></div>
    </td>
    <td width="224"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $donnees['nom_1'];  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['idffr']; ?>
        </font></font></div>
    </td>
    <td width="184">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $donnees['type']; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php  
 }
 ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif"><font size="3"> </font></font> 

 
 
 <?php
mysql_close(); // D�connexion de MySQL
?>
</p>
<p>&nbsp; </p>
</body>

