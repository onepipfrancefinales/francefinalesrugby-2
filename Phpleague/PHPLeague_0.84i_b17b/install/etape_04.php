<?php

if ($ETAPE == 'etape4' AND (empty($action2) OR empty($url_site) OR empty($repertoire_script) OR empty($pseudo) OR empty($mot_de_pass) OR empty($mail)))
{

?>

	<div id="Info02" class="ui-state-error ui-corner-all" style="margin: 0 0 10px 0; padding: 5px;"> 
		<span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		<span style="font-size: 0.8em"><?php echo utf8_encode(CHAMP_EMPTY); ?></span>
	</div>

	<form method="post" action="" id="formEtape4">
		<p class="TxtLeft">
			<input type="hidden" name="lang" value="<?php echo $LANG; ?>" />
			<input type="hidden" name="etape" value="etape3" />
			<input type="hidden" name="action2" value="<?php echo $action2; ?>" />
			<input type="hidden" name="hostname" value="<?php echo $hostname; ?>" />
			<input type="hidden" name="database" value="<?php echo $database; ?>" />
			<input type="hidden" name="login" value="<?php echo $login; ?>" />
			<input type="hidden" name="password" value="<?php echo $password; ?>" />
			<input type="hidden" name="nom_site" value="<?php echo $nom_site; ?>" />
			<input type="hidden" name="url_site" value="<?php echo $url_site; ?>" />
			<input type="hidden" name="repertoire_script" value="<?php echo $repertoire_script; ?>" />
			<input type="hidden" name="pseudo" value="<?php echo $pseudo; ?>" />
			<input type="hidden" name="mail" value="<?php echo $mail; ?>" />
			<input type="submit" value="<?php echo utf8_encode('&#060;&#060; '.PASS_BACK.' 3'); ?>" />
		</p>
	</form>

<?php

}
else
{
	if ($ETAPE == 'etape4' AND isset($_POST['hostname']) AND isset($_POST['login']) AND isset($_POST['database']) AND isset($_POST['password']) )
	{
		function send_sql($SQL)
		{
			$i = 0;

			while ($REQ = explode(';', $SQL) AND $i < count($REQ))
			{
				if ($RES = @mysql_query($REQ[$i]))
				{       
					$ETAT = IMG_OK;
				}
				else
				{
					$ETAT = utf8_encode('<b>ERREUR '.@mysql_errno().'</b><br /><small><i>'.@mysql_error().'</i></small>');
				}

				return $ETAT;

				$i++;
			}
		}

		function ResReq($REQ)
		{
			$RES = @mysql_query($REQ);

			if ($RES)
			{
				$ETAT = IMG_OK;
			}
			else
			{
				$ETAT = utf8_encode('<b>ERREUR '.@mysql_errno().'</b><br /><small><i>'.@mysql_error().'</i></small>');
			}

			return $ETAT;
		}

		if (($idconnect = @mysql_connect($hostname, $login, $password)) == FALSE OR @mysql_select_db($database, $idconnect) == FALSE)
		{

?>

	<div id="Info03" class="ui-state-error ui-corner-all" style="margin: 0 0 10px 0; padding: 5px;"> 
		<span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		<span style="font-size: 0.8em"><?php echo utf8_encode(TEST_CNX_BDD_NO); ?></span>
	</div>

	<form method="post" action="" id="formEtape4">
		<p class="TxtLeft">
			<input type="hidden" name="lang" value="<?php echo $LANG; ?>" />
			<input type="hidden" name="etape" value="etape3" />
			<input type="hidden" name="action2" value="<?php echo $action2; ?>" />
			<input type="hidden" name="hostname" value="<?php echo $hostname; ?>" />
			<input type="hidden" name="database" value="<?php echo $database; ?>" />
			<input type="hidden" name="login" value="<?php echo $login; ?>" />
			<input type="hidden" name="password" value="<?php echo $password; ?>" />
			<input type="hidden" name="nom_site" value="<?php echo $nom_site; ?>" />
			<input type="hidden" name="url_site" value="<?php echo $url_site; ?>" />
			<input type="hidden" name="repertoire_script" value="<?php echo $repertoire_script; ?>" />
			<input type="hidden" name="pseudo" value="<?php echo $pseudo; ?>" />
			<input type="hidden" name="mail" value="<?php echo $mail; ?>" />
			<input type="submit" value="<?php echo utf8_encode('&#060;&#060; '.PASS_BACK.' 3'); ?>" />
		</p>
	</form>

<?php

		}
		else
		{

?>

	<div id="Info04" class="ui-state-highlight ui-corner-all" style="margin: 0 0 10px 0; padding: 5px;"> 
		<span class="ui-icon ui-icon-check" style="float: left; margin-right: .3em;"></span>
		<span style="font-size: 0.8em"><?php echo utf8_encode(TEST_CNX_BDD_OK); ?></span>
	</div>

<?php

			$FILE_O = '../data_connect.php';
			$FILE_R = '../data_connect_'.date('Ymd_His').'.php';

			if (@file_exists($FILE_O))
			{
				$REN = @rename($FILE_O, $FILE_R);

				if ($REN)
				{

?>

	<div id="Info04" class="ui-state-highlight ui-corner-all" style="margin: 0 0 10px 0; padding: 5px;"> 
		<span class="ui-icon ui-icon-check" style="float: left; margin-right: .3em;"></span>
		<span style="font-size: 0.8em"><?php echo utf8_encode(DC_REN_OK).' [ <small><b>'.$FILE_R.'</b></small> ].'; ?></span>
	</div>

<?php

				}
				else
				{

?>

	<div id="Info04" class="ui-state-error ui-corner-all" style="margin: 0 0 10px 0; padding: 5px;"> 
		<span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		<span style="font-size: 0.8em"><?php echo utf8_encode(DC_REN_NO); ?></span>
	</div>

<?php

				}
			}

			$FILE = fopen($FILE_O, 'w');

			if ($FILE)
			{
				$VAL = '<?php'."\n";
				$VAL.= ''."\n";
				$VAL.= "\$hostname         = '$hostname';\n";
				$VAL.= "\$database         = '$database';\n";
				$VAL.= "\$login            = '$login';\n";
				$VAL.= "\$password         = '$password';\n";
				$VAL.= "\$lang             = '$LANG';\n";
				$VAL.= "\$PHPLEAGUE_RACINE = '$repertoire_script';\n";
				$VAL.= ''."\n";
				$VAL.= '?>';

				fwrite($FILE, $VAL);

?>

	<div id="Info05" class="ui-state-highlight ui-corner-all" style="margin: 0 0 10px 0; padding: 5px;"> 
		<span class="ui-icon ui-icon-check" style="float: left; margin-right: .3em;"></span>
		<span style="font-size: 0.8em"><?php echo utf8_encode(DC_CREA_OK); ?></span>
	</div>

<?php

			}
			else
			{

?>

	<div id="Info05" class="ui-state-error ui-corner-all" style="margin: 0 0 10px 0; padding: 5px;"> 
		<span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		<span style="font-size: 0.8em"><?php echo utf8_encode(DC_CREA_NO); ?></span>
	</div>

<?php

			}

			// Mise à jour 0.71
			if ($action2 == 'majv071') { include('inst_maj071.php'); }

			// Mise à jour 0.81
			if ($action2 == 'majv08x') { include('inst_maj08x.php'); }

			// Mise à jour 0.83
			//if ($action2 == 'majv083') { include('inst_maj083.php'); }

			// Installation complète
			if ($action2 == 'install') { include('inst_full.php'); }
		}
	}
}

?>