<?php

$CHOIX = isset($_REQUEST['chx']) ? $_REQUEST['chx'] : NULL;

switch($CHOIX)
{
	case 'phpinfo';	$STITRE = ' &#062; Information PHP'; break;
	case 'meminfo';	$STITRE = ' &#062; Information mémoire'; break;
	case 'bddinfo';	$STITRE = ' &#062; Base de données'; break;
	default:        $STITRE = ''; break;
}

?>

<h2>Maintenance<?php echo $STITRE; ?></h2>

<div class="Cadre">
	<a href="?page=maintenance&amp;chx=phpinfo">Info. configuration</a>
	<a href="?page=maintenance&amp;chx=meminfo">Info. mémoire</a>
	<a href="?page=maintenance&amp;chx=bddinfo">Base de données</a>
</div>

<?php

switch($CHOIX)
{
	// Information version PHP
	case 'phpinfo':

?>
<script type="text/javascript">
	$(function(){
		$('#tabsInfPhp').tabs( {
			selected: parseInt($.cookie('phpl_tabsinfophp')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabsinfophp', tab_id, { expires: 1 });
			},
			ajaxOptions: {
				error: function(xhr, status, index, anchor) {
					$(anchor.hash).html('Erreur');
				}
			},
			spinner: '',
			select: function(event, ui) { 
				$('#tabsInfPhp li a .loader').remove();
				$('#tabsInfPhp li a').eq(ui.index).append('<span class="loader">&nbsp;<img src="images/loader_12.gif" /></span>'); 
			},
			load: function(event, ui) {
				$('#tabsInfPhp li a').eq(ui.index).find('.loader').remove();
			}
		});
	});
</script>

<div id="tabsInfPhp">
	<ul>
		<li><a href="maint_infophp.php?chx=1">G�n�ral</a></li>
		<li><a href="maint_infophp.php?chx=2">Configuration</a></li>
		<li><a href="maint_infophp.php?chx=3">Modules</a></li>
		<li><a href="maint_infophp.php?chx=4">Environnement</a></li>
		<li><a href="maint_infophp.php?chx=5">Variables</a></li>
	</ul>
</div>

<?php
		
	break;


	// Information m�moire
	case 'meminfo':

		$MEM_LIMIT = (int) ini_get('memory_limit');
		$MEM_USED  = function_exists('memory_get_usage') ? round(memory_get_usage() / 1024 / 1024, 2) : 0;

		if (!empty($MEM_USED) && !empty($MEM_LIMIT))
		{
			$MEM_POURCENT = round($MEM_USED / $MEM_LIMIT * 100, 0);
			$MEM_COLOR    = '#21759b';

			if ($MEM_POURCENT > 80) $MEM_COLOR = '#e66f00';
			if ($MEM_POURCENT > 95) $MEM_COLOR = 'red';
		}		

		if (empty($MEM_LIMIT)) { $VAL_MEM_LIMIT = 'n/a'; } else { $VAL_MEM_LIMIT = $MEM_LIMIT.' Mo'; }
		if (empty($MEM_USED))  { $VAL_MEM_USED  = 'n/a'; } else { $VAL_MEM_USED  = $MEM_USED.' Mo'; }

?>

	<table class="Large50P">
		<thead>
			<tr class="ui-widget-header">
				<th colspan="2">Mémoire volatile</th>
			</tr>
		</thead>
		<tbody>
			<tr class="ligne1">
				<td class="Large50P">Mémoire allouée</td>
				<td><?php echo $VAL_MEM_LIMIT; ?></td>
			</tr>
			<tr class="ligne2">
				<td>Mémoire utilisée</td>
				<td><?php echo $VAL_MEM_USED; ?></td>
			</tr>
				<?php if (!empty($MEM_POURCENT)) { ?>
			<tr>
				<td colspan="2">
					<div style="height: 2em; border: 1px solid #ddd; background-color:#f9f9f9;">
						<div style="width: <?php echo $MEM_POURCENT; ?>%; height: 100%; background-color: <?php echo $MEM_COLOR; ?>; border-width:0; text-shadow:0 1px 0 #000; color:#fff; text-align:right; font-weight:bold;">
							<div style="padding: 6px"><?php echo $MEM_POURCENT; ?>%</div>
						</div>
					</div>
				</td>
			</tr>
				<?php } ?>
		</tbody>
	</table>

<?php

	break;


	// Information base de donn�es
	case 'bddinfo':
?>
<table class="Large100P ui-widget ui-widget-content">
	<caption>
		<a href="?page=maintenance&amp;chx=bddanal">Analyse des tables</a>
		<a href="?page=maintenance&amp;chx=bddcheck">Int�grée; des tables</a>
		<a href="?page=maintenance&amp;chx=bddrepar">Réparation des tables</a>
		<a href="?page=maintenance&amp;chx=bddopt">Optimiser les tables</a>
	</caption>
	<thead>
		<tr class="ui-widget-header">
			<th class="Large20P TxtLeft">Table</th>
			<th class="Large10P TxtRight">Nbr<br />d'enreg.</th>
			<th class="Large10P TxtRight">Taille</th>
			<th class="Large10P TxtRight">Perte</th>
			<th class="Large20P">Dernier<br />contr&ocirc;le</th>
			<th class="Large30P">Comm.</th>
		</tr>
	</thead>
	<tbody>
<?php

		$i    = 0;
		$REQ1 = mysql_query('SHOW TABLE STATUS FROM '.CNX_BDD);

		while ($ROW1 = mysql_fetch_array($REQ1))
		{
			$VAL_TAB = substr($ROW1['Name'], 0, 5);

			if ($VAL_TAB == 'phpl_')
			{
				if (($i%2) == 0) { $CLASS = 'ligne3 Bold'; } else { $CLASS = 'ligne4 Bold'; }
			}
			else
			{
				if (($i%2) == 0) { $CLASS = 'ligne1'; } else { $CLASS = 'ligne2'; }
			}

?>
		<tr class="<?php echo $CLASS; ?>">
			<td><?php echo $ROW1['Name']; ?></td>
			<td class="TxtRight"><?php echo $ROW1['Rows']; ?></td>
			<td class="TxtRight"><?php echo $ROW1['Data_length']; ?></td>
			<td class="TxtRight"><?php echo $ROW1['Data_free']; ?></td>
			<td class="TxtCenter"><?php echo $ROW1['Check_time']; ?></td>
			<td class="TxtCenter"><?php echo $ROW1['Comment']; ?></td>
		</tr>
<?php

			$i++;
		}
		mysql_free_result($REQ1);

?>
	</tbody>
</table>

<?php
	break;

	// Analyse de la base de donn�es
	case 'bddanal':
		echo '	<table class="Large50P ui-widget ui-widget-content">
		<caption>
			<div class="Back">
				<a href="?page=maintenance&amp;chx=bddinfo">Retour</a>
			</div>
		</caption>
		<thead>
			<tr class="ui-widget-header">
				<th class="TxtLeft Large10P">Etat</th>
				<th class="TxtLeft">Table</th>
			</tr>
		</thead>
		<tbody>'."\n";

		$i    = 0;
		$REQ1 = mysql_query('SHOW TABLES');

		while ($ROW1 = mysql_fetch_assoc($REQ1))
		{
			foreach ($ROW1 AS $BD => $TABLE)
			{
				if (($i%2) == 0) { $CLASS = 'ligne1'; } else { $CLASS = 'ligne2'; }

				echo '			<tr class="'.$CLASS.'">'."\n";

				$REQ2 = mysql_query('ANALYZE TABLE '.$TABLE);

				if ($REQ2)
				{
					echo '					<td class="TxtCenter"><span class="ui-icon ui-icon-check"></span></td><td>'.$TABLE.'</td>'."\n";
				}
				else
				{
					echo '					<td><span class="ui-icon ui-icon-alert"></td><td>'.$TABLE.'</td>'."\n";
				}

				echo '			</tr>'."\n";

				$i++;
			}
		}

		echo '		</tbody>
	</table>'."\n\n";
	break;

	// Contr�le de l'int�grit� des tables
	case 'bddcheck':
		$REQ1 = mysql_query('SHOW TABLES');

		while ($ROW1 = mysql_fetch_assoc($REQ1))
		{
			foreach ($ROW1 AS $BD => $TABLE)
			{
				$REQ2 = mysql_query('CHECK TABLE '.$TABLE.' MEDIUM') or die(mysql_error());

				echo 'OK - '.$TABLE.'<br />';
			}
		}
	break;

	// R�paration des tables
	case 'bddrepar':
		$REQ1 = mysql_query('SHOW TABLES');

		while ($ROW1 = mysql_fetch_assoc($REQ1))
		{
			foreach ($ROW1 AS $BD => $TABLE)
			{
				$REQ2 = mysql_query('REPAIR TABLE '.$TABLE.' EXTENDED') or die(mysql_error());

				echo 'OK - '.$TABLE.'<br />';
			}
		}
	break;

	// Optimise les tables
	case 'bddopt':
		$REQ1 = mysql_query('SHOW TABLES');

		while ($ROW1 = mysql_fetch_assoc($REQ1))
		{
			foreach ($ROW1 AS $BD => $TABLE)
			{
				$REQ2 = mysql_query('OPTIMIZE TABLE '.$TABLE) or die(mysql_error());

				echo 'OK - '.$TABLE.'<br />';
			}
		}
	break;
}

?>