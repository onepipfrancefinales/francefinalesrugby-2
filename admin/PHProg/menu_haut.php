<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /menu_haut.php
#          --------------------------------------
#          Copyright © 2005-2006 LECOINTRE Adrien
#          --------------------------------------
#          Site Internet : http://www.phprog.com/
#          e-mail : adrien.lecointre@phprog.com
#          ---------------------------------------------------------------------------
#          Ce fichier est une partie de PHProg.
#          PHProg est un programme libre, vous pouvez le redistribuer
#          et/ou le modifier selon les termes de la Licence Publique Générale
#          GNU publiée par la Free Software Foundation version 2.
#          PHProg est distribué car potentiellement utile, mais
#          SANS AUCUNE GARANTIE, ni explicite ni implicite, y compris les
#          garanties de commercialisation ou d'adaptation dans un but spécifique.
#          Reportez-vous à la Licence Publique Générale GNU version 2 pour plus de
#          détails.
#          Licence Publique Générale GNU version 2 disponible sous /docs/licence/
###################################################
?>
<table width="100%" height="50" border="0" cellspacing="0" cellpadding="0">
  <tr>
   	<td width="255" height="50" valign="bottom" rowspan="2">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td height="50" width="255" background="images/logo_phprog.gif">
				</td>
			</tr>
		</table>
  	</td>
  	<td align="center" colspan="2">
		<b><font size=6><?php if (isset($titre_site)) {echo $titre_site;} ?></font></b>
	</td>
  </tr>
  <tr>
  	<td align="left" valign="bottom">
		<span class="texte">
  		<?php include('fonction/date_fr.func.php'); echo date_fr(); ?>
		</span>	
	</td>
    <td align="right" valign="bottom"> 
		<?php
		if (isset($_SESSION['name'])) {
			echo "<a class=\"lien\" href=\"?id=11\">Se déconnecter</a>";
			}
		else {
			echo "<a class=\"lien\" href=\"?id=3\">Se connecter</a>";
			}
		?>
	</td>
  </tr>
</table>
<a href="http://francefinalesrugby.franceserv.com/">cvbcvx</a>