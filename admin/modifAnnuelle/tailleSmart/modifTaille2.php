<?php 
$comite=$_POST['comite'];
echo $comite;?>

<!DOCTYPE html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">


<?php

//require ("../../connection5");
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france_db5"); 
?>

<?php
 $requete = "SELECT nom, code
    		FROM taille
			WHERE  comite ='$comite'"  ;
 				$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
							{ 
							$nomComite = $row[0];
							$code = $row[1];
							}
 
echo $nomComite;
 echo $code;
 mysql_close(); ?>


<?php

//require ("../../connection1");
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db2"); 
?>

<?php
 $requete = mysql_query( "SELECT *
    					  FROM tailleSmart
						  WHERE  comite = '$comite'" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
		 {
		 }
mysql_close(); // D�connexion de MySQL
?>

 <input type="hidden" name="H1" value="<?php echo($H1) ;?>">
<b><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Gestion 
du smartphone</font></b> 
<form method="post" action="modifTaille3.php?comite=<?php echo $comite; ?>">
  <table width="341" border="0">
    <tr bgcolor="#CCCCCC"> 
      <td colspan="4"> 
        <div align="center">Comit&eacute; 
          <?php echo $nomComite; ?>
        </div>
      </td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#009966"> 
        <div align="center">Territoriaux</div>
      </td>
      <td width="70">&nbsp;</td>
      <td width="70" bgcolor="#009933">
        <div align="center">F&eacute;d&eacute;rale</div>
      </td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">Honneur</div>
      </td>
      <td width="55"> 
        <div align="center">(171)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T171" value="<?php echo($result->T171) ;?>" size="6">
        </div>
      </td>
      <td width="70"> 
        <div align="center">Poule 1</div>
      </td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">Promotion</div>
      </td>
      <td width="55"> 
        <div align="center">(181)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T181" value="<?php echo($result->T181) ;?>" size="6">
        </div>
      </td>
      <td width="70"> 
        <div align="center">Poule 2</div>
      </td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">1re S&eacute;rie</div>
      </td>
      <td width="55"> 
        <div align="center">(191)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T191" value="<?php echo($result->T191) ;?>" size="6">
        </div>
      </td>
      <td width="70"> 
        <div align="center">Poule 3</div>
      </td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">2me S&eacute;rie</div>
      </td>
      <td width="55"> 
        <div align="center">(182)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T201" value="<?php echo($result->T201) ;?>" size="6">
        </div>
      </td>
      <td width="70"> 
        <div align="center">Poule 4</div>
      </td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">3me S&eacute;rie</div>
      </td>
      <td width="55"> 
        <div align="center">(211)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T211" value="<?php echo($result->T211) ;?>" size="6">
        </div>
      </td>
      <td width="70"> 
        <div align="center">Poule 5</div>
      </td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">4me S&eacute;rie</div>
      </td>
      <td width="55"> 
        <div align="center">(221)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T221" value="<?php echo($result->T221) ;?>" size="6">
        </div>
      </td>
      <td width="70"> 
        <div align="center">Poule 6</div>
      </td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">R&eacute;serve</div>
      </td>
      <td width="55"> 
        <div align="center">(271)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T271" value="<?php echo($result->T271) ;?>" size="6">
        </div>
      </td>
      <td width="70"> 
        <div align="center">Poule 7</div>
      </td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">R&eacute;serve Promotion </div>
      </td>
      <td width="55"> 
        <div align="center">(9181)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T9181" value="<?php echo($result->T9181) ;?>" size="6">
        </div>
      </td>
      <td width="70"> 
        <div align="center">Poule 8</div>
      </td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">R&eacute;serve 1re S&eacute;rie </div>
      </td>
      <td width="55"> 
        <div align="center">(9191)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T9191" value="<?php echo($result->T9191) ;?>" size="6">
        </div>
      </td>
      <td width="70">&nbsp;</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">R&eacute;serve 2me S&eacute;rie</div>
      </td>
      <td width="55"> 
        <div align="center">(9201)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T9201" value="<?php echo($result->T9201) ;?>" size="6">
        </div>
      </td>
      <td width="70">&nbsp;</td>
    </tr>
    <tr> 
      <td width="128"> ------------------ </td>
      <td width="55"> --- </td>
      <td width="70"> ------------- </td>
      <td width="70">&nbsp;</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">Honneur P2</div>
      </td>
      <td width="55"> 
        <div align="center">(172)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T172" value="<?php echo($result->T172) ;?>" size="6">
        </div>
      </td>
      <td width="70">Poule 1</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">Promotion P2</div>
      </td>
      <td width="55"> 
        <div align="center">(182)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T182" value="<?php echo($result->T182) ;?>" size="6">
        </div>
      </td>
      <td width="70">Poule 2</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">1re S&eacute;rie P2</div>
      </td>
      <td width="55"> 
        <div align="center">(192)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T192" value="<?php echo($result->T192) ;?>" size="6">
        </div>
      </td>
      <td width="70">Poule 3</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">2me S&eacute;rie P2</div>
      </td>
      <td width="55"> 
        <div align="center">(202)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T202" value="<?php echo($result->T202) ;?>" size="6">
        </div>
      </td>
      <td width="70">Poule 4</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">3me S&eacute;rie P2</div>
      </td>
      <td width="55"> 
        <div align="center">(212)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T212" value="<?php echo($result->T212) ;?>" size="6">
        </div>
      </td>
      <td width="70">Poule 5</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">4me S&eacute;rie P2</div>
      </td>
      <td width="55"> 
        <div align="center">(222)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T222" value="<?php echo($result->T222) ;?>" size="6">
        </div>
      </td>
      <td width="70">Poule 6</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">R&eacute;serve P2</div>
      </td>
      <td width="55"> 
        <div align="center">(272)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T272" value="<?php echo($result->T272) ;?>" size="6">
        </div>
      </td>
      <td width="70">Poule 7</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">R&eacute;s Promotion P2</div>
      </td>
      <td width="55"> 
        <div align="center">(9182)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T9182" value="<?php echo($result->T9182) ;?>" size="6">
        </div>
      </td>
      <td width="70">Poule 8</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">R&eacute;s 1rie S&eacute;rie P2</div>
      </td>
      <td width="55"> 
        <div align="center">(9192)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T9192" value="<?php echo($result->T9192) ;?>" size="6">
        </div>
      </td>
      <td width="70">&nbsp;</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">R&eacute;s 2me S&eacute;rie P2</div>
      </td>
      <td width="55"> 
        <div align="center">(9202)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T9202" value="<?php echo($result->T9202) ;?>" size="6">
        </div>
      </td>
      <td width="70">&nbsp;</td>
    </tr>
    <tr> 
      <td width="128"> ------------------ </td>
      <td width="55"> --- </td>
      <td width="70"> ------------- </td>
      <td width="70">&nbsp;</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">Honneur P3</div>
      </td>
      <td width="55"> 
        <div align="center">(173)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T173" value="<?php echo($result->T173) ;?>" size="6">
        </div>
      </td>
      <td width="70">&nbsp;</td>
    </tr>
    <tr> 
      <td width="128"> 
        <div align="center">R&eacute;seerve P3</div>
      </td>
      <td width="55"> 
        <div align="center">(273)</div>
      </td>
      <td width="70"> 
        <div align="center"> 
          <input type="text" name="T273" value="<?php echo($result->T273) ;?>" size="6">
        </div>
      </td>
      <td width="70">&nbsp;</td>
    </tr>
    <tr> 
      <td width="128" height="29"> </td>
      <td width="55" height="29"></td>
      <td width="70" height="29"></td>
      <td height="29" width="70"></td>
    </tr>
    <tr bgcolor="#FF0000"> 
      <td colspan="4" height="29"> 
        <div align="center"> 
          <input type="submit" name="Submit" value="Envoyer">
        </div>
      </td>
    </tr>
    <tr> 
      <td colspan="4" height="29"> 
        <div align="center"><a href="../tailleSite/modifTaille.php">retour page pr&eacute;c&eacute;dente</a></div>
      </td>
    </tr>
    <tr> 
      <td colspan="4" height="29"> 
        <div align="center"><a href="../../mdp.php">Retour accueill</a></div>
      </td>
    </tr>
  </table>
 </form>
 
</body>
</html>
