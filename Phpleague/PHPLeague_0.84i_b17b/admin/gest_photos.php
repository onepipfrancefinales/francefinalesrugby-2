<h2><?php echo utf8_encode(MENU_GEST_PHOTOS); ?></h2>

<?php echo InfoReqSql('Info', 0, 'error', 'alert', 'En cours de développement. Aucune requ&ecirc;tes MySQL.'); ?>

<script type="text/javascript">
$(document).ready(function() {
		$('#tabsGestPhotos').tabs( {
			selected: parseInt($.cookie('phpl_tabsgestphotos')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabsgestphotos', tab_id, { expires: 1 });
			},
			ajaxOptions: {
				error: function(xhr, status, index, anchor) {
					$(anchor.hash).html('Page inconnue.');
				}
			},
			spinner: '',
			select: function(event, ui) { 
				$('#tabsGestPhotos li a .loader').remove();
				$('#tabsGestPhotos li a').eq(ui.index).append('<span class="loader">&nbsp;<img src="images/loader_12.gif" /></span>'); 
			},
			load: function(event, ui) {
				$('#tabsGestPhotos li a').eq(ui.index).find('.loader').remove();
			}
		});
	}
);
</script>

<div id="tabsGestPhotos">
	<ul>
		<li><a href="gest_photos_upload.php?chx=1">Arbitres</a></li>
		<li><a href="gest_photos_upload.php?chx=2">Joueurs</a></li>
		<li><a href="gest_photos_upload.php?chx=3">Equipes</a></li>
		<li><a href="gest_photos_upload.php?chx=4">Stades</a></li>
	</ul>
</div>
