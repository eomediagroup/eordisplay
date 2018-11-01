<?php
/**
 * The template part for displaying a default slider
 * inside a Listing
 */
?>

<?php ob_start(); ?>

[stratum_listing_has_value account=65 key='image']
	
	<div class="carousel" data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>
		
		[stratum_listing_multi account=65 key='image']
		
			<img src="{{image}}" alt="[stratum_listing account=5 key='title']">
  
		[/stratum_listing_multi]
	
	</div>
	
[/stratum_listing_has_value]

<?php echo do_shortcode(ob_get_clean()); ?>