<?php
/**
 * The template part for displaying a browseable list
 * for Directed Searches on the homepage
 */
?>

<div class="grid-container directed-search-list">
	<div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-3">
		
		<?php get_template_part( 'directed/list/sales', 'list' ); ?>
		<?php get_template_part( 'directed/list/classified', 'list' ); ?>
		<?php get_template_part( 'directed/list/notices', 'list' ); ?>
		<?php get_template_part( 'directed/list/vehicles', 'list' ); ?>
		<?php get_template_part( 'directed/list/real-estate', 'list' ); ?>
		
	</div>
</div>