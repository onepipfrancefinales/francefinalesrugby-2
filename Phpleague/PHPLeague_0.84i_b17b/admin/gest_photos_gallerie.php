<?php

$REP = isset($_REQUEST['rep']) ? $_REQUEST['rep'] : $DOSSIER;

if ($dossier = opendir($REP))
{
	echo '<table class="Large100P ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header">
			<th class="TxtLeft">Fichier</th>
			<th class="TxtRight">Taille</th>
			<th>Date/Heure</th>
		</tr>
	</thead>
	<tbody>'."\n";

	$nb_fichier = 0;
	$i = 0;

	while (false !== ($fichier = readdir($dossier)))
	{

		if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != 'index.html' && $fichier != 'no_image.jpg')
		{
			$ListFiles[$i] = $fichier;
			$nb_fichier++;
			$i++;
		}
	}
	closedir($dossier);

	if ($nb_fichier > 0)
	{
		if (count($ListFiles) != 0)
		{
			sort($ListFiles);
		}

		$e = 0;
		$i = 0;

		while ($i < count($ListFiles))
		{
			if (($e%2) == 0) { $class = 'ligne1'; } else { $class = 'ligne2'; }

			echo '<tr class="'.$class.'">
			<td>'.$ListFiles[$i].'</td>
			<td class="TxtRight">'.round(filesize($REP.'/'.$ListFiles[$i]) / 1024, 2).' Ko</td>
			<td class="TxtCenter">'.date('d/m/y H:i', filectime($REP.'/'.$ListFiles[$i])).'</td>
			</tr>'."\n";

			$e++;
			$i++;
		}
	}
	else
	{
		echo '<tr>
			<td colspan="3">&nbsp;</td>
			</tr>'."\n";
	}

	if ($nb_fichier > 1) { $S = 's'; } else { $S = ''; }

	echo '</tbody>
	<tfoot>
		<tr class="ui-widget-footer">
			<td colspan="3">'.$nb_fichier.' fichier'.$S.' dans le dossier</td>
		</tr>
	</tfoot>
</table>'."\n";
}
else
{
	echo 'Le dossier n\' a pas pu être ouvert';
}

?>