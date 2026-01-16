<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>modification de donn�es en PHP :: partie2</title>
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
<body>
<p>
  
  <b> <font size="4"> </font></b> </p>
<div id="Layer1" style="position:absolute; width:280px; height:115px; z-index:1; left: 706px; top: 284px"> 
  <div align="center">
    <p><b><font size="3" color="#FF0000">Pour toutes modifications, évolutions 
      ou difficultés prendre contact &agrave; l'adresse suivante:<br>
      <a href="mailto:francefinalesrugby@free.fr">francefinalesrugby@free.fr</a></font></b></p>
    </div>
</div>
<form name="insertion" action="modif3.php?" method="POST">
  <b><font size="4"> 
  <?php
require ("../../connect1/connection1.php") ;
 ?>
  </font></b> <b><font size="4">
  <?php
  
  $id  = $_GET["idPersonne"] ;

 
?>
  </font></b>
<input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" cellspacing="2" cellpadding="2" width="683">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="32"> 
        
        <?php
$reponse = $bdd->query("SELECT * FROM infosclub WHERE id='$id'"); 
	While ($donnees = $reponse->fetch() )
		{
		$id = $donnees['id'];	
		$club = $donnees['club'];	
		$ligue = $donnees['ligue'];
		$equipe_fem = $donnees['equipe_fem'];
		
		$A1601 = $donnees['A1601'];
		$A1602 = $donnees['A1602'];
		$A1603 = $donnees['A1603'];
		$A1604 = $donnees['A1604'];
		$A1605 = $donnees['A1605'];
		$A1606 = $donnees['A1606'];
		$A1607 = $donnees['A1607'];
		$A1608 = $donnees['A1608'];
		$A1609 = $donnees['A1609'];
		
		$A1610 = $donnees['A1610'];
		$A1611 = $donnees['A1611'];
		$A1612 = $donnees['A1612'];
		$A1613 = $donnees['A1613'];
		$A1614 = $donnees['A1614'];
		$A1615 = $donnees['A1615'];
		$A1616 = $donnees['A1616'];
		$A1617 = $donnees['A1617'];
		$A1618 = $donnees['A1619'];
		$A1619 = $donnees['A1619'];
			
		$A1620 = $donnees['A1620'];
		$A1621 = $donnees['A1621'];
		$A1622 = $donnees['A1622'];
		$A1623 = $donnees['A1623'];
		$A1624 = $donnees['A1624'];
		$A1625 = $donnees['A1625'];
		$A1626 = $donnees['A1626'];
		$A1627 = $donnees['A1627'];
		$A1628 = $donnees['A1628'];
		$A1629 = $donnees['A1629'];
		$A1630 = $donnees['A1630'];
		$A1631 = $donnees['A1629'];
		$A1632 = $donnees['A1630'];	
 }
?>
     <h1><strong> 
          <?php echo $club;?>
          </strong></h1>

	</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">création du club :</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1624" value="<?php echo $A1624 ;?>" size="6">
        </div>
      </td>
      <td width="48">1624</td>
    </tr>
    <tr align="center" valign="middle"> 
      <td colspan="4" bgcolor="#FF0000"><b></b><b></b><b>BUREAU</b></td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Président </td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1601" value="<?php echo $A1601 ;?>" size="50">
        </div>
      </td>
      <td width="48">1601 </td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Trésorier</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1630" value="<?php echo $A1630 ;?>" size="50">
        </div>
      </td>
      <td width="48">1630</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Secretaire </td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1602" value="<?php echo $A1602 ;?>" size="50">
        </div>
      </td>
      <td width="48">1602</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Contact</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1603" value="<?php echo $A1603 ;?>" size="50">
        </div>
      </td>
      <td width="48">1603 </td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" height="14" bgcolor="#FF0000"><b><font color="#000000">SIEGE</font></b></td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Siege </td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1604" value="<?php echo $A1604 ;?>" size="25">
        </div>
      </td>
      <td width="48">1604</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Adresse </td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1605" value="<?php echo $A1605 ;?>" size="25">
        </div>
      </td>
      <td width="48">1605</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">CP</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1606" value="<?php echo $A1606 ;?>" size="5">
        </div>
      </td>
      <td width="48">1606</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Ville</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1607" value="<?php echo $A1607 ;?>" size="25">
        </div>
      </td>
      <td width="48">1607</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Tél</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1608" value="<?php echo $A1608 ;?>" size="15">
        </div>
      </td>
      <td width="48">1608</td>
    </tr>
    <tr align="center"> 
      <td colspan="4" bgcolor="#FF0000"><b></b><b></b><b>STADE</b></td>
    </tr>
    <tr align="center"> 
      <td width="1" height="24">&nbsp;</td>
      <td width="91" height="24">Nom du stade</td>
      <td width="533" height="24"> 
        <div align="left"> 
          <input type="text" name="A1609" value="<?php echo $A1609 ;?>" size="25">
        </div>
      </td>
      <td width="48" height="24">1609</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Adresse</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1610" value="<?php echo $A1610;?>" size="25">
        </div>
      </td>
      <td width="48">1610</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">CP</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1611" value="<?php echo $A1611 ;?>" size="5">
        </div>
      </td>
      <td width="48">1611 </td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Ville</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1612" value="<?php echo $A1612 ;?>" size="25">
        </div>
      </td>
      <td width="48">1612</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">tel</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1613" value="<?php echo $A1613 ;?>" size="15">
        </div>
      </td>
      <td width="48">1613</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">capacité</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1614" value="<?php echo $A1614 ;?>" size="6">
        </div>
      </td>
      <td width="48">1614</td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" height="18" bgcolor="#FF0000"><b></b><b></b><b>CONTACT</b></td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Site Internet</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1620" value="<?php echo $A1620 ;?>" size="75">
        </div>
      </td>
      <td width="48">1620</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Mel</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1616" value="<?php echo $A1616 ;?>" size="50">
        </div>
      </td>
      <td width="48">1616</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Correspondant</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1617" value="<?php echo $A1617 ;?>" size="15">
        </div>
      </td>
      <td width="48">1617</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91"><b></b></td>
      <td width="533"> 
        <div align="left"></div>
      </td>
      <td width="48">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Sigle</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1618" value="<?php echo $A1618 ;?>" size="8">
        </div>
      </td>
      <td width="48">1618</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">couleurs</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1619" value="<?php echo $A1619 ;?>" size="30">
        </div>
      </td>
      <td width="48">1619</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">&nbsp;</td>
      <td width="533"> 
        <div align="left"> </div>
      </td>
      <td width="48">1615</td>
    </tr>
    <tr align="center"> 
      <td width="1" bgcolor="#FF0000">&nbsp;</td>
      <td width="91" bgcolor="#FF0000">&nbsp;</td>
      <td width="533" bgcolor="#FF0000"><b>SECTION FEMININE</b></td>
      <td width="48" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">&nbsp;</td>
      <td width="533">&nbsp;</td>
      <td width="48">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Nom/ Entente</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1631" value="<?php echo $A1631 ;?>" size="50">
        </div>
      </td>
      <td width="48">1631</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Niveau</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="A1632" value="<?php echo $A1632 ;?>" size="50">
        </div>
      </td>
      <td width="48">1632</td>
    </tr>
    <tr align="center"> 
      <td width="1" bgcolor="#FF0000">&nbsp;</td>
      <td width="91" bgcolor="#FF0000">&nbsp;</td>
      <td width="533" bgcolor="#FF0000">&nbsp;</td>
      <td width="48" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="1" bgcolor="#FF0000">&nbsp;</td>
      <td width="91" bgcolor="#FF0000">&nbsp;</td>
      <td width="533" bgcolor="#FF0000"> 
        <div align="center"><b>DATES IMPORTANTES</b></div>
      </td>
      <td width="48" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="142" width="1">&nbsp;</td>
      <td height="142" width="91">&nbsp;</td>
      <td height="142" width="533"> 
        <div align="left"> 
          <p><b> 
            <textarea name="A1621" cols="100" rows="7"><?php echo $A1621 ;?></textarea>
            <br>
            </b><b> </b></p>
        </div>
      </td>
      <td height="142" width="48"> 
        <p>1621</p>
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr align="center" valign="top"> 
      <td width="1"> 
        <p>&nbsp; </p>
      </td>
      <td width="91">&nbsp;</td>
      <td width="533"> 
        <div align="left"><b> 
          <textarea name="A1622" cols="75" rows="7"><?php echo $A1622 ;?></textarea>
          </b></div>
      </td>
      <td width="48">1622</td>
    </tr>
    <tr align="center" valign="top"> 
      <td width="1">&nbsp;</td>
      <td width="91">&nbsp;</td>
      <td width="533"> 
        <div align="left"><b> 
          <textarea name="A1623" cols="75" rows="7"><?php echo $A1623 ;?></textarea>
          </b></div>
      </td>
      <td width="48">1623</td>
    </tr>
    <tr align="center" valign="top"> 
      <td width="1">&nbsp;</td>
      <td width="91">&nbsp;</td>
      <td width="533"> 
        <div align="left"><b> 
          <textarea name="A1626" cols="75" rows="7"><?php echo $A1626 ;?></textarea>
          </b></div>
      </td>
      <td width="48">1626</td>
    </tr>
    <tr align="center" valign="top"> 
      <td width="1"><b> </b></td>
      <td width="91">&nbsp;</td>
      <td width="533"> 
        <div align="left"><b> 
          <textarea name="1627" cols="75" rows="7"><?php echo $A1627;?></textarea>
          </b></div>
      </td>
      <td width="48">1627</td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
  </table>
</form>

<p>&nbsp;<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- modif_16me2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:250px"
     data-ad-client="ca-pub-9177538664500260"
     data-ad-slot="3642939314"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></p>
