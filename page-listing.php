<?php 
/**
 * Template Name: Listing
 * The template for displaying Stratum's Swiftype content as a listing
 *
 */

get_header(); ?>
	
	<?php echo do_shortcode('[stratum_listing_check account=84 404_url="https://eordisplay.teamstratum.com/404-error/"]'); ?>
	
	<header class="header listings" role="banner">
		
		<?php get_template_part( 'navigation/navigation', 'default' ); ?>
		
	</header>
	
	<section class="main-content listings" role="main">
		<?php get_template_part( 'listing/slider', 'default' ); ?>
		<?php get_template_part( 'actionables/listing', 'ctas' ); ?>
		
		<div class="grid-container">
			<div class="listings-content grid-x grid-padding-x">
			
				<?php get_template_part( 'listing/content', 'default' ); ?>
				<?php get_template_part( 'listing/metadata', 'default' ); ?>
				<?php get_template_part( 'listing/map', 'default' ); ?>
				<?php get_template_part( 'actionables/listing', 'sidebar' ); ?>
			
			</div>
		</div>
			
	</section>

<?php get_footer(); ?>