<?php
/**
 * The template part for displaying a Seller specific search bar
 * on a Seller Page
 *
 */
?>

<?php // Let's load all values and labels for ACF select fields
	
	$spboxplaceholder = get_field('seller-page-box-placeholder'); // Custom search box placeholder
	$spaccount = get_field('seller-page-account-number'); // Assigns the correct API account
	
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
			
				[stratum_search account=<?= $spaccount ?> placeholder='<?= $spboxplaceholder ?>' listing_url_template='https://eastoregonrealestate.com/listing/{{field:author}}/{{slug}}']
			
				<?php if( have_rows('seller-page-parameters') ): // First load the repeater for search parameters ?>
					
					<?php while( have_rows('seller-page-parameters') ): the_row(); 

						// Repeater vars
						$spparametertype = get_sub_field('seller-page-parameter');
						$spparametervalue = get_sub_field('seller-page-parameter-value'); ?>

						[stratum_hidden key='<?= $spparametertype ?>' values='<?= $spparametervalue ?>']
					
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