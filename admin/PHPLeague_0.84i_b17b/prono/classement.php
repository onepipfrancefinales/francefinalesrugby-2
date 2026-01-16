<h4><?php classement_type($type); ?></h4>

<table class="Large100P">
	<thead>
		<tr>
			<th class="TxtLeft"><?php echo FormatText(CONSULT_CLASSEMENT); ?></th>
			<th class="TxtLeft"><?php echo FormatText(PRONO_CLASSEMENT_PSEUDO); ?></th>
			<th class="TxtLeft"><?php echo FormatText(PRONO_CLASSEMENT_POINTS); ?></th>
			<th class="TxtLeft"><?php echo FormatText(PRONO_CLASSEMENT_PARTICIPATIONS); ?></th>
		</tr>
	</thead>
	<?php classement($gr_champ, $type, $user_pseudo); ?>
</table>