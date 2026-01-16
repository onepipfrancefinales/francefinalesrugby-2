 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<div align="left"><b><font face="Arial, Helvetica, sans-serif" size="5">ALPES<br>
  <br>
  </font></b> 
  <?php
//mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
//mysql_select_db("onepip-france-db1"); 
require ("../connection1.php")
?>
  <b> <font face="Arial, Helvetica, sans-serif"> 
  <?
$reponse = mysql_query("SELECT id, nom_1, idffr, type
				FROM bdclubs 
				WHERE siglecomite='(AP)' ORDER BY id "); 
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  </font></b> </div>
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
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">ALSACE LORRAINE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?
$reponse = mysql_query("SELECT id, nom_1, idffr, type
						FROM bdclubs 
						WHERE siglecomite='(AL)' ORDER BY id "); 

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

<br>

<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">ARMAGNAC BIGORRE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
						FROM bdclubs 
						WHERE siglecomite='(AB)' 
						ORDER BY id "); 
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
<br>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">AUVERGNE</font></b></font></p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
						FROM bdclubs 
						WHERE siglecomite='(AU)' 
						ORDER BY id "); 
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
<br>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">BEARN</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs 
WHERE siglecomite='(BE)' ORDER BY id "); // Requ�te SQL
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
<br>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5"><br>
  BOURGOGNE</font></b></font> </p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?
$reponse = mysql_query("SELECT id, nom_1, idffr, type 
FROM bdclubs 
WHERE siglecomite='(BG)' ORDER BY id "); // Requ�te SQL
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
<br>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5"><br>
  <br>
  <br>
  BRETAGNE</font></b></font> </p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs 
WHERE siglecomite='(BR)' 
ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr, type 
FROM bdclubs 
WHERE siglecomite='(CE)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs WHERE siglecomite='(C)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr, type 
FROM bdclubs 
WHERE siglecomite='(CBL)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr, type
FROM bdclubs
 WHERE siglecomite='(CA)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs 
WHERE siglecomite='(CAZ)' ORDER BY id "); // Requ�te SQL
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
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">DROME ARDECHE</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?
$reponse = mysql_query("SELECT id, nom_1, idffr ,type
FROM bdclubs WHERE siglecomite='(DA)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr, type 
FROM bdclubs WHERE siglecomite='(FL)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr ,type
FROM bdclubs WHERE siglecomite='(FC)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs 
WHERE siglecomite='(IDF)' 
ORDER BY id "); // Requ�te SQL
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
<br>
<p><font face="Arial, Helvetica, sans-serif"><b><font size="5">LANGUEDOC</font></b></font> 
</p>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs
 WHERE siglecomite='(LD)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs WHERE siglecomite='(LM)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs WHERE siglecomite='(LY)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs WHERE siglecomite='(MPY)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs WHERE siglecomite='(N)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs WHERE siglecomite='(PL)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs WHERE siglecomite='(PA)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs WHERE siglecomite='(PCH)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr ,type
FROM bdclubs WHERE siglecomite='(PR)' ORDER BY id "); // Requ�te SQL
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
<?
$reponse = mysql_query("SELECT id, nom_1, idffr , type
FROM bdclubs WHERE siglecomite='(PC)' ORDER BY id "); // Requ�te SQL
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

