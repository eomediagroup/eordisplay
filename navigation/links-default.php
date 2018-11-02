<?php
/**
 * The template part for displaying a default set of menu links in the navigation
 * and contains all links used when no others are specified
 */
?>

<?php if ( is_page_template('page-listing.php') || is_page_template('page-dsp.php') || is_page_template('page-seller.php') ) { ?>

<li><a href="/"><span>Search</span>
	<div class="svg">
		<?php get_template_part( 'assets/icons/svg/search', 'icon' ); ?>
	</div>
</a></li>

<?php } else { ?>

	<!-- No Search Link Needed -->

<?php } ?>

<li><a href="https://eordisplay.teamstratum.com/#directed"><span>Browse</span>
	<div class="svg">
		<?php get_template_part( 'assets/icons/svg/browse', 'icon' ); ?>
	</div>
</a></li>

<!--<li><a href="#" data-toggle="offCanvasOrdering"><span>Advertise</span>-->
<li><a href="https://eordisplay.teamstratum.com/advertise/"><span>Advertise</span>
	<div class="svg">
		<?php get_template_part( 'assets/icons/svg/promote', 'icon' ); ?>
	</div>
</a></li>