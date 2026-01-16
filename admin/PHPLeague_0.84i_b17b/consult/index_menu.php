	<h2><?php echo FormatText(MENU_UTILISATEUR); ?></h2>

	<div id="Menu">
		<ul class="pageitem">
			<?php
			if ($ACT_PRONOSTIC == 1)
			{?>
			<li class="menu"><a href="<?php echo URL_PRONO; ?>"><span class="name"><?php echo FormatText(MENU_PRONO); ?></span><span class="arrow"></span></a></li>
			<?php
			}
			if ($ACT_CALENDRIER == 1)
			{?>
			<li class="menu"><a href="<?php echo URL_CALENDRIER; ?>"><span class="name"><?php echo FormatText(CONSULT_CALENDAR); ?></span><span class="arrow"></span></a></li>
			<?php
			}
			if ($ACT_CLASSEMENT == 1)
			{?>
			<li class="menu"><a href="<?php echo URL_CLASSEMENT; ?>"><span class="name"><?php echo FormatText(CONSULT_CLASSEMENT); ?></span><span class="arrow"></span></a></li>
			<?php
			}
			if ($ACT_CLUB == 1)
			{?>
			<li class="menu"><a href="<?php echo URL_CLUB; ?>"><span class="name"><?php echo FormatText('Clubs'); ?></span><span class="arrow"></span></a></li>
			<?php
			}
			if ($ACT_BUTEUR == 1)
			{?>
			<li class="menu"><a href="<?php echo URL_BUTEUR; ?>"><span class="name"><?php echo FormatText(CONSULT_BUTEUR); ?></span><span class="arrow"></span></a></li>
			<?php
			}
			if ($ACT_CJ == 1)
			{?>
			<li class="menu"><a href="<?php echo URL_CJ; ?>"><span class="name"><?php echo FormatText(CJ); ?></span><span class="arrow"></span></a></li>
			<?php
			}
			if ($ACT_CR == 1)
			{?>
			<li class="menu"><a href="<?php echo URL_CR; ?>"><span class="name"><?php echo FormatText(CR); ?></span><span class="arrow"></span></a></li>
			<?php
			}
			if ($ACT_STAT == 1)
			{?>
			<li class="menu"><a href="<?php echo URL_STAT; ?>"><span class="name"><?php echo FormatText('Statistiques'); ?></span><span class="arrow"></span></a></li>
			<?php
			}
			if ($ACT_ANNIV == 1)
			{?>
			<li class="menu"><a href="<?php echo URL_ANNIV; ?>"><span class="name"><?php echo FormatText('Anniversaires'); ?></span><span class="arrow"></span></a></li>
			<?php
			}
			if ($ACT_JOURNEE == 1)
			{?>
			<li class="menu"><a href="<?php echo URL_JOURNEE; ?>"><span class="name"><?php echo FormatText('Journée'); ?></span><span class="arrow"></span></a></li>
			<?php
			}?>
		</ul>
	</div>

	<div style="clear: both;"></div>
