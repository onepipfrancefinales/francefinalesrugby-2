 
<p><b><font size="5" color="#FF0000" face="Arial, Helvetica, sans-serif">LIGUE 
  A MODIFIER</font></b> <font face="Arial, Helvetica, sans-serif" size="5"> 
  <?php
$ligue = $_POST['ligue'];
echo " : ".$ligue;

?>
  - </font></p>
<table width="1311" height="298">
  <tr> 
    <td width="182">test</td>
    <td width="297">traitement global </td>
    <td width="360">&nbsp;</td>
    <td width="140"></td>
    <td width="52">&nbsp;</td>
    <td width="252"></td>
  </tr>
<tr> 
    <td width="182">&nbsp;</td>
    <td width="297">&nbsp; </td>
    <td width="360">&nbsp;</td>
    <td width="140"></td>
    <td width="52">&nbsp;</td>
    <td width="252"></td>
  </tr>
 <tr> 
    <td width="182">&nbsp;</td>
    <td width="297">&nbsp; </td>
    <td width="360">&nbsp;</td>
    <td width="140">Vidage total</td>
    <td width="52">&nbsp;</td>
    <td width="252">Vidage partiel</td>
  </tr>
  <tr> 
    <td width="182">Equipes</td>
    <td width="297"> 
      <?php


$base ="equipes";
$table="equipes";
require 'btnImporterTable.php';

?>
    </td>
    <td width="360">//C:/Utilisateurs/Public/fichiersMaj</td>
    <td width="140"> 
      <?php


$base ="equipes";
require 'btnViderTable.php';
?>
    </td>
    <td width="52">&nbsp;</td>
    <td width="252"> 
      <?php
		$base ="equipes";
		$table ="equipes";
		require 'btnDeRecherche.php';
		?>
    </td>
  </tr>
  <tr> 
    <td width="182">&nbsp;</td>
    <td width="297">&nbsp;</td>
    <td width="360">&nbsp;</td>
    <td width="140">&nbsp;</td>
    <td width="52">&nbsp;</td>
    <td width="252">&nbsp;</td>
  </tr>
  <tr> 
    <td width="182">&nbsp;</td>
    <td width="297">&nbsp; </td>
    <td width="360">&nbsp;</td>
    <td width="140">&nbsp; </td>
    <td width="52">&nbsp;</td>
    <td width="252">&nbsp;</td>
  </tr>
  <tr> 
    <td width="182">Journees</td>
    <td width="297"> 
      <?php


$base ="journees";
require 'btnImporterTable.php';


?>
    </td>
    <td width="360">//C:/Utilisateurs/Public/fichiersMaj</td>
    <td width="140"> 
      <?php


$base ="journees";
require 'btnViderTable.php';

?>
    </td>
    <td width="52">&nbsp;</td>
    <td width="252"> 
      <?php


$base ="journees";
$table ="journees";
require 'btnDeRecherche.php';
?>
    </td>
  </tr>
  <tr> 
    <td width="182">&nbsp;</td>
    <td width="297">&nbsp;</td>
    <td width="360">&nbsp;</td>
    <td width="140">&nbsp;</td>
    <td width="52">&nbsp;</td>
    <td width="252">&nbsp;</td>
  </tr>
  <tr> 
    <td width="182">&nbsp;</td>
    <td width="297">&nbsp; </td>
    <td width="360">&nbsp;</td>
    <td width="140">&nbsp; </td>
    <td width="52">&nbsp;</td>
    <td width="252">&nbsp;</td>
  </tr>
  <tr> 
    <td width="182">Matchs</td>
    <td width="297"> 
      <?php
		$base ="matchs";
		require 'btnImporterTable.php';
		?>
    </td>
    <td width="360">//C:/Utilisateurs/Public/fichiersMaj</td>
    <td width="140"> 
      <?php
		$base ="matchs";
		require 'btnViderTable.php';
		?>
    </td>
    <td width="52">&nbsp;</td>
    <td width="252"> 
      <?php
		$base = "matchs";
		$table = "matchs";
		require 'btnDeRecherche.php';
		?>
    </td>
  </tr>
    <tr> 
    <td width="182">Paramétres</td>
    <td width="297"> 
      <?php
		$base ="matchs";
		//require 'btnImporterTable.php';
		?>
    </td>
    <td width="360">//C:/Utilisateurs/Public/fichiersMaj</td>
    <td width="140"> 
      <?php
	//	$base ="matchs";
	//	require 'btnViderTable.php';
		?>
    </td>
    <td width="52">&nbsp;</td>
    <td width="252"> 
      <?php
		$base = "matchs";
		$table = "matchs";
		//require 'btnDeRecherche.php';
		?>
    </td>
  </tr>
  <tr> 
    <td width="182">&nbsp;</td>
    <td width="297">&nbsp;</td>
    <td width="360">&nbsp;</td>
    <td width="140">&nbsp;</td>
    <td width="52">&nbsp;</td>
    <td width="252">&nbsp;</td>
  </tr>
  <tr bgcolor="#FF0000"> 
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4" height="29"> 
      <div align="center"> 
        <?php
	  $base = "toutes";
require 'btnViderLesTables.php';
?>
        (equipes, journ&eacute;es, matchs) </div>
    </td>
    <td height="29">&nbsp;</td>
    <td height="29">vidage (division)</td>
  </tr>
  <tr> 
    <td colspan="6"> 
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"> 
        <hr />
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="4"> 
      <div align="center"> 
        <?php
	  $base = "toutes_clmnt";
require 'btnViderLesTables.php';
?>
        (clmnt_cache, clmnt_graph , clmnt_pronos) </div>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="182">&nbsp;</td>
    <td width="297">&nbsp;</td>
    <td width="360">&nbsp;</td>
    <td width="140">&nbsp;</td>
    <td width="52">&nbsp;</td>
    <td width="252">&nbsp;</td>
  </tr>
  <tr> 
    <td width="182">&nbsp;</td>
    <td width="297">&nbsp;</td>
    <td width="360">&nbsp;</td>
    <td width="140">&nbsp;</td>
    <td width="52">&nbsp;</td>
    <td width="252">&nbsp;</td>
  </tr>
</table>
<p><br>
</p>
