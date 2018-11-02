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
	<meta property="og:site_name" content="East Oregon Real Estate">
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
	"url": "https://eastoregonrealestate.com",
	"name": "<?php the_field('seller-page-title'); ?>",
	"description": "<?php the_field('seller-page-tagline'); ?> East Oregon Real Estate helps you find the newest Eastern Oregon real estate listings. By analyzing information on thousands of acreage for sale, single family homes for sale, ranches for sale, and farms for sale in Pendleton, Hermiston, Enterprise, John Day, Baker City, Oregon and across Eastern Oregon. We make it easy to find your dream home by filtering home types, price, lot size and much more."
}
</script>

<?php echo do_shortcode(ob_get_clean()); ?>