<?php
/**
 * The template part for displaying a Topic specific search bar
 * on a Directed Search Page
 *
 */
?>

<?php // Let's load all values and labels for ACF select fields
	
	$dspboxplaceholder = get_field('directed-search-page-box-placeholder'); // Custom search box placeholder
	$dsppermalink = get_field('directed-search-page-url-slug'); // We need to know where to send new results
	$dspaccount = get_field('directed-search-page-account-number'); // Assigns the correct API account
	
	// Get the queried object and sanitize it, we'll use this to display the slug
	$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
	// Get the page slug
	$slug = $current_page->post_name;
	
?>

<?php echo '<form method="get" action="' . $slug . '">'; ?>
	
<div class="search-bar grid-container" role="search">
	<div class="grid-x alignment-center">
		<div class="cell medium-11 large-8">
			
			
			<?php ob_start(); ?>
			
				[stratum_search account=<?= $dspaccount ?> placeholder='<?= $dspboxplaceholder ?>' listing_url_template='https://eordisplay.teamstratum.com/listings/{{slug}}']
			
				<?php if( have_rows('directed-search-parameters') ): // First load the repeater for search parameters ?>
					
					<?php while( have_rows('directed-search-parameters') ): the_row(); 

						// Repeater vars
						$dspparametertype = get_sub_field('directed-search-parameter');
						$dspparametervalue = get_sub_field('directed-search-parameter-value'); ?>

						[stratum_hidden key='<?= $dspparametertype ?>' values='<?= $dspparametervalue ?>']
					
					<?php endwhile; ?>
					
				<?php endif; ?>
				
				[/stratum_search]
						
			<?php echo do_shortcode(ob_get_clean()); ?>
				
			</div>
			<div class="cell medium-1 large-1 svg">
				
				<label>
					<input type="submit" class="search-submit" value='Search' />
					<?php get_template_part( 'assets/icons/svg/search', 'icon' ); ?>
				</label>
				
			</div>
	</div>
</div>

</form>