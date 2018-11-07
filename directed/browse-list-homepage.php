<?php
/**
 * The template part for displaying a browseable list
 * for Directed Searches on the homepage
 */
?>

<div class="grid-container directed-search-list">
	<div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-3">
		
		<?php get_template_part( 'directed/list/trending', 'counties' ); ?>
		<?php get_template_part( 'directed/list/property', 'types' ); ?>
		<?php get_template_part( 'directed/list/trending', 'cities' ); ?>
		<?php get_template_part( 'directed/list/recommended', 'agencies' ); ?>
		<?php get_template_part( 'directed/list/recommended', 'lenders' ); ?>
		<?php get_template_part( 'directed/list/available', 'rentals' ); ?>
		<?php get_template_part( 'directed/list/recommended', 'agents' ); ?>
		<?php get_template_part( 'directed/list/recommended', 'insurers' ); ?>
		
	</div>
</div>