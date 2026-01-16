<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /login.php
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
<table cellpadding=0 cellspacing=0 class=tablo width=100%>
	<tr>
		<td class=tablo-titre><span class=texte-titre>Connexion</span></td>
	</tr>
	<tr>
		<td align="center">
			<form action="login2.php" method="post">
			<ul style="list-style-type:none;margin-left:0;">
			<li>Nom d'utilisateur : <input name="user" type="text"></li>
			<li>Mot de passe : <input name="password" type="password"></li>
			<?php
			if (isset($_GET['e']) and $_GET['e']==1) {
				echo "<li style=\"color:red\">Mauvais nom d'utilisateur ou mot de passe.</li>";
			}
			?>
			<li><input name="" type="submit" value="Login"></li>
			</ul>
			</form>
		</td>
	</tr>
</table>