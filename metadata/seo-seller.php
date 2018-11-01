<?php
/**
 * The template part for displaying a Seller Page's SEO titles, descriptions
 * for both listings and social channels
 */
?>

<?php ob_start(); ?>
	
	<title><?php wp_title('-', true, 'right'); ?> <?php echo get_bloginfo('name') ?></title>
	<meta name="description" content="<?php the_field('seller-page-tagline'); ?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:title" content="<?php wp_title('-', true, 'right'); ?> <?php echo get_bloginfo('name') ?>">
	<meta property="og:description" content="<?php the_field('seller-page-tagline'); ?>">
	<meta property="og:url" content="<?php echo get_permalink(); ?>">
	<meta property="og:site_name" content="Coast Marketplace">
	<meta property="og:image" content="<?php the_field('seller-page-cover-photo-url'); ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:description" content="<?php the_field('seller-page-tagline'); ?>">
	<meta name="twitter:title" content="<?php wp_title('-', true, 'right'); ?> <?php echo get_bloginfo('name') ?>">
	<meta name="twitter:image" content="<?php the_field('seller-page-cover-photo-url'); ?>">

<!-- Structured Data -->
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Organization",
	"url": "https://coastmarketplace.com",
	"name": "<?php the_field('seller-page-title'); ?>",
	"description": "<?php the_field('seller-page-tagline'); ?> Coast Marketplace helps you find the widest selection of items for sale in the Columbia-Pacific region. Our listings are optimized to deliver information the community needs to make buying decisions. By analyzing information on thousands of topics, we make it easy for you to find what you're looking for in Long Beach, Ilwaco, Chinook, Astoria, Warrenton, Gearhart, Seaside and Cannon Beach."
}
</script>

<?php echo do_shortcode(ob_get_clean()); ?>