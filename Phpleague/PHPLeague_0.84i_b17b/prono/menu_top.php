<?php

$SEL = ' class="select"';

if (empty($page))      { $SEL01 = $SEL; } else { $SEL01 = ''; }
if ($page == 'profil') { $SEL02 = $SEL; } else { $SEL02 = ''; }
if ($page == 'pronos' OR $page == 'derniers_pronos' OR $page == 'mes_resultats' OR $page == 'baremes') { $SEL03 = $SEL; } else { $SEL03 = ''; }
if ($page == 'inscription') { $SEL04 = $SEL; } else { $SEL04 = ''; }
if ($page == 'classement')  { $SEL05 = $SEL; } else { $SEL05 = ''; }

?>

			<ul id="topnav">
				<li<?php echo $SEL01; ?>><a href="index.php"><?php echo FormatText('Accueil'); ?></a></li>
<?php

	if (VerifSession($user_pseudo, $user_mdp) == 1)
	{
		echo '				<li'.$SEL02.'><a href="index.php?page=profil&amp;gr_champ='.$gr_champ.'">'.FormatText(PRONO_MENU_MON_COMPTE).'</a></li>
				<li'.$SEL03.'><a href="#">'.FormatText(PRONO_MENU_MES_PRONOS).'</a>
					<span>
						<a href="index.php?page=pronos&amp;gr_champ='.$gr_champ.'">'.FormatText(PRONO_MENU_PROCHAINE_GRILLE).'</a> |
						<a href="index.php?page=derniers_pronos&amp;gr_champ='.$gr_champ.'">'.FormatText(PRONO_MENU_DERNIERE_GRILLE).'</a> |
						<a href="index.php?page=mes_resultats&amp;gr_champ='.$gr_champ.'">'.FormatText(PRONO_MENU_MES_RESULTATS).'</a> |
						<a href="index.php?page=baremes&amp;gr_champ='.$gr_champ.'">'.FormatText(PRONO_MENU_BAREME).'</a>
					</span>
				</li>'."\n";
	}
	else
	{ 
		echo '				<li'.$SEL04.'><a href="index.php?page=inscription&amp;gr_champ='.$gr_champ.'">'.FormatText(PRONO_INC_INSCRIPTION).'</a></li>'."\n";
	}

?>
				<li<?php echo $SEL05; ?>><a href="#">Classements</a>
					<span>
						<a href="index.php?page=classement&amp;type=hebdo&amp;gr_champ=<?php echo $gr_champ; ?>"><?php echo FormatText(PRONO_INC_HEBDO); ?></a> |
						<a href="index.php?page=classement&amp;type=mensuel_en_cours&amp;gr_champ=<?php echo $gr_champ; ?>"><?php echo FormatText(PRONO_INC_MOIS); ?></a> |
						<a href="index.php?page=classement&amp;gr_champ=<?php echo $gr_champ; ?>"><?php echo FormatText(PRONO_INC_GENERAL); ?></a>
					</span>
				</li>
<?php

	if (VerifSession($user_pseudo, $user_mdp) == 1)
	{
		echo '				<li style="float:right;"><a href="logout.php">'.FormatText(PRONO_MENU_DECONNEXION).' ['.$user_pseudo.']</a></li>'."\n";
		
	}

?>
			</ul>