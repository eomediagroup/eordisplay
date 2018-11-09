<?php
/**
 * The template part for displaying a default search bar
 *
 */
?>

<form method="get" action="https://eastoregonrealestate.com/results">

<div class="search-bar grid-container" role="search">
	<div class="grid-x alignment-center">
		<div class="cell medium-11 large-8">
				<?php 
					echo do_shortcode( '[stratum_search account=84 placeholder="Search" listing_url_template="https://eastoregonrealestate.com/listings/{{field:author}}/{{slug}}"]' );
				?>
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