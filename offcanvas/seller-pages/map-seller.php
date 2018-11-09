<?php
/**
 * The template part for displaying a default map view
 * located inside an offCanvas container
 */
?>

<div class="off-canvas position-left reveal-for-large reveal-turned-off" id="offCanvasMap" data-off-canvas>
	
	<?php ob_start(); ?>
	
	<div class="map-container">
		
	<button class="close-button" aria-label="Close menu" type="button" data-close>
		<span aria-hidden="true">&times;</span>
	</button>
	
	[stratum_map account=98 listing_url_template="https://eastoregonrealestate.com/listing/{{field:author}}/{{slug}}" info_max_width=250 recenter_on_update=1 show_all_results='Center']
	
	<div class="map-pagination">
		[stratum_pagination account=98]
	</div>
	
	</div>
	
	<?php echo do_shortcode(ob_get_clean()); ?>
	
</div>