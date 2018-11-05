<?php
/**
 * The template part for displaying a lead form
 * inside a Stratum app Listing
 */
?>

<div id="message" class="lead-generation">
	
	<?php ob_start(); ?>
	
	<h3 class="title">Message [stratum_listing account=84 key='seller']</h3>
	
	<?php echo do_shortcode(ob_get_clean()); ?>
	
	<?php gravity_form( 1, $display_title = false, $display_description = false ); ?>
	
</div>