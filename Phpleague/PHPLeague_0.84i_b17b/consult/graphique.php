<?php

$equipe = isset($_REQUEST['equipe']) ? $_REQUEST['equipe'] : NULL;

define('MOD', 'consult');

if (!empty($equipe))
{
	require('../config.php');
	require('../function_consult.php');

	ouverture();

	// Détermine le nom de l'équipe à partir de son id et le championnat
	$REQ1 = mysql_query('SELECT '.TBL_CLUBS.'.nom, '.TBL_CLUBS.'.url_logo, '.TBL_EQUIPES.'.id_club, '.TBL_EQUIPES.'.id_champ
						FROM '.TBL_CLUBS.', '.TBL_EQUIPES.'
						WHERE '.TBL_CLUBS.'.id='.TBL_EQUIPES.'.id_club
						AND '.TBL_EQUIPES.'.id='.$equipe);

	while ($ROW1 = mysql_fetch_array($REQ1))
	{
		$nom_equipe = $ROW1['nom'];
		$logo       = $ROW1['url_logo'];
		$champ      = $ROW1['id_champ'];
	}
	mysql_free_result($REQ1);

	// Détermine le nombre d'équipes
	$REQ2 = mysql_query('SELECT '.TBL_EQUIPES.'.id
					 	FROM '.TBL_EQUIPES.', '.TBL_CLUBS.'
					 	WHERE '.TBL_EQUIPES.'.id_champ='.$champ.'
					 	AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id
					 	AND '.TBL_CLUBS.'.nom!="exempte"');
	$nb_equipes = mysql_num_rows($REQ2) + 1;
	mysql_free_result($REQ2);

	// Détermine la dernière journee jouée
	$REQ3 = mysql_query('SELECT MAX('.TBL_JOURNEES.'.numero)
					 	FROM '.TBL_JOURNEES.', '.TBL_MATCHS.'
					 	WHERE '.TBL_JOURNEES.'.id='.TBL_MATCHS.'.id_journee
					 	AND buts_dom IS NOT NULL
					 	AND '.TBL_JOURNEES.'.id_champ='.$champ);

	while ($ROW3 = mysql_fetch_array($REQ3))
	{
		$fin = $ROW3[0];
	}
	mysql_free_result($REQ3);

	// Détermine le nombre de journée total
	$REQ4 = mysql_query('SELECT id FROM '.TBL_JOURNEES.' WHERE id_champ='.$champ);
	$NBR4 = mysql_num_rows($REQ4);
			mysql_free_result($REQ4);

	// Détermine l'année et le nom de la division
	$REQ5 = mysql_query('SELECT '.TBL_SAISONS.'.annee, '.TBL_DIVISIONS.'.nom
					 	FROM '.TBL_SAISONS.', '.TBL_DIVISIONS.', '.TBL_CHAMPIONNATS.'
					 	WHERE '.TBL_CHAMPIONNATS.'.id='.$champ.'
					 	AND '.TBL_DIVISIONS.'.id='.TBL_CHAMPIONNATS.'.id_division
					 	AND '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id');

	while ($ROW5 = mysql_fetch_array($REQ5))
	{
		$nom_champ = $ROW5['nom'].' '.$ROW5['annee'].'/'.($ROW5['annee'] + 1);
	}
	mysql_free_result($REQ5);

	$largeur      = 470;
	$hauteur      = 210;
	$marge_gauche = 10;
	$marge_haut   = 45;
	$SIZE         = 10;
	$FONT         = '../'.REP_FONTS.'arial.ttf';
	$titrePolice  = 3;
	$titre        = stripslashes('Evolution du classement de '.$nom_equipe);
	$titre2       = stripslashes('( '.$nom_champ.' )');
	$LOGO_IMAGE   = '../'.REP_IMG_CLUB_LARGE.$logo;

	if (!empty($logo) AND file_exists($LOGO_IMAGE))
	{
		if (function_exists('exif_imagetype'))
		{
			$EXT = exif_imagetype($LOGO_IMAGE);

			switch($EXT)
			{
				case IMAGETYPE_PNG:  $logo_inser = imagecreatefrompng($LOGO_IMAGE); break;
				case IMAGETYPE_GIF:  $logo_inser = imagecreatefromgif($LOGO_IMAGE); break;
				case IMAGETYPE_JPEG: $logo_inser = imagecreatefromjpeg($LOGO_IMAGE); break;
			}
		}
		else
		{
			$EXT = pathinfo($LOGO_IMAGE, PATHINFO_EXTENSION);

			switch($EXT)
			{
				case 'png': $logo_inser = imagecreatefrompng($LOGO_IMAGE); break;
				case 'gif': $logo_inser = imagecreatefromgif($LOGO_IMAGE); break;
				case 'jpg': $logo_inser = imagecreatefromjpeg($LOGO_IMAGE); break;
			}
		}

		list($w_copy, $h_copy) = getimagesize($LOGO_IMAGE);

		$transparence = imagecolorallocate($logo_inser, 255, 255, 255);

		imagefill($logo_inser, 0, 0, $transparence);
		imagecolortransparent($logo_inser, $transparence);

		$pos_x = $largeur - ($w_copy + 4);
		$pos_y = $hauteur - ($h_copy + 4);
	}

	//$image = imagecreate($largeur + 20, $hauteur + 20 + $marge_haut);
	$image = imagecreatetruecolor($largeur + 20, $hauteur + 20 + $marge_haut);

	imageantialias($image, true);
	imagealphablending($image, true);

	$rouge = imagecolorallocate($image, 255, 0, 0);
	$blanc = imagecolorallocate($image, 255, 255, 255);
	$noir  = imagecolorallocate($image, 0, 0, 0);
	$gris  = imagecolorallocate($image, 150, 150, 150);

	imagefilledrectangle($image, 0, 0, $largeur + 40, $hauteur + 40 + $marge_haut, $blanc);

	// Trait vertical à gauche
	imagefilledrectangle($image, 20 + $marge_gauche, 10 + $marge_haut, 20 + $marge_gauche, $hauteur + 5 + $marge_haut, $noir);

	// Titre
	imagettftext($image, $SIZE, 0, ($largeur + 40 + $marge_gauche - imagefontwidth($titrePolice) * strlen($titre)) / 2, 15, $noir, $FONT, $titre);
	imagettftext($image, $SIZE, 0, ($largeur + 40 + $marge_gauche - imagefontwidth($titrePolice) * strlen($titre2)) / 2, 32, $noir, $FONT, $titre2);

	//imagestring($image, $titrePolice, ($largeur + 40 + $marge_gauche - imagefontwidth($titrePolice) * strlen($titre)) / 2, 0, $titre, $noir);
	//imagestring($image, $titrePolice, ($largeur + 40 + $marge_gauche - imagefontwidth($titrePolice) * strlen($titre2)) / 2, 15, $titre2, $noir);

	$y = 1;

	while ($y <= $NBR4)
	{
		if (!($y % 2) == 0)
		{
			$titre       = $y;
			$titrePolice = 2;

			// Numérotation journées
			imagestring($image, $titrePolice, ($y - 1) * ($largeur) / $NBR4 + $marge_gauche + 20, $hauteur + $marge_haut, $titre, $noir);

			$y++;
		}
		else
		{
			$y++;
		}
	}

	$x = $hauteur / $nb_equipes;
	$y = 1;

	while ($x <= $hauteur)
	{
		// Traits par place
		imagefilledrectangle($image, $marge_gauche + 15, $x + $marge_haut, $largeur + 15, $x + $marge_haut, $gris);

		$titre       = $y;
		$titrePolice = 2;

		if ($y < $nb_equipes)
		{
			// Numérotation place
			imagestring($image, $titrePolice, $marge_gauche + 1, $x - 8 + $marge_haut, $titre, $noir);
		}

		$x = $x + ($hauteur / $nb_equipes);

		$y++;
	}

	$x      = $marge_gauche + 20; // Pas nb equipes !
	$i      = 0;
	$points = 0;
	$place  = 0;
	$place  = array();
	$points = array();

	$REQ6 = mysql_query('SELECT classement
					 	FROM '.TBL_CLMNT_GRAPH.'
					 	WHERE id_equipe = '.$equipe.'
					 	ORDER BY fin');

	while ($ROW6 = mysql_fetch_array($REQ6))
	{
		$place[$i]     = $ROW6['classement'];
		$points[$i][0] = $x;
		$points[$i][1] = $hauteur + $marge_haut - ($nb_equipes - $ROW6['classement']) * $hauteur / $nb_equipes;
		$x            += ($largeur - $marge_gauche + 11) / $NBR4;
		$titrePolice   = 2;

		$i++;
	}
	mysql_free_result($REQ6);

	for($i=0; $i<$fin-1; $i++)
	{
		imageline($image, $points[$i][0], $points[$i][1], $points[$i + 1][0], $points[$i + 1][1], $rouge);
	}

	for($i=0; $i<$fin; $i++)
	{
		if (!isset($place[$i + 1]))
		{
			imagestring($image, $titrePolice, $points[$i][0], $points[$i][1] , $place[$i], $rouge);
		}
		elseif ($place[$i+1] <= $place[$i])
		{
			imagestring($image, $titrePolice, $points[$i][0], $points[$i][1], $place[$i], $rouge);
		}
		elseif ($place[$i+1] > $place[$i])
		{
			imagestring($image, $titrePolice, $points[$i][0], $points[$i][1] - 11, $place[$i], $rouge);
		}
		else
		{
			imagestring($image, $titrePolice, $points[$i][0], $points[$i][1], $place[$i], $rouge);
		}
	}

	if (!empty($logo) AND file_exists($LOGO_IMAGE))
	{
		imagecopymerge($image, $logo_inser, $pos_x, $pos_y, 0, 0, $w_copy, $h_copy, 35);
	}

	header('pragma: public');
	header('expires: 0');
	header('cache-control: must-revalidate, post-check=0, pre-check=0');
	header('content-type: image/png');

	imagepng($image);
	imagedestroy($image);

	if (!empty($logo) AND file_exists($LOGO_IMAGE))
	{
		imagedestroy($logo_inser);
	}
}

?>