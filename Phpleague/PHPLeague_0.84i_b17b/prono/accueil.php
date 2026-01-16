<script type="text/javascript">function CountLimit(periods){if($.countdown.periodsToSeconds(periods)==3600){$(this).addClass('LimitColor');}}</script>

<h4><?php echo FormatText(PRONO_MENU_PROCHAINE_GRILLE); ?></h4>

<h5><?php echo pseudo_admin($gr_champ).' '.FormatText(PRONO_ACCUEIL_PRESENTATION); ?></h5>

<?php grille_admin($gr_champ); ?>

<?php classement_general($gr_champ, $user_pseudo); ?>