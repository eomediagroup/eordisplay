<?php
/**
 * The template part for displaying a default SEO titles, descriptions
 * for both listings and social channels
 */
?>

<?php ob_start(); ?>
	
	<?php if ( is_front_page() ) { // SEO for the homepage ?>
		<title><?php wp_title('-', true, 'right'); ?> <?php echo get_bloginfo('name') ?> - <?php echo get_bloginfo('description') ?></title>
		<meta name="description" content="Coast Marketplace helps you find the widest selection of items for sale in the Columbia-Pacific region. Our listings are optimized to deliver information the community needs to make buying decisions. By analyzing information on thousands of topics, we make it easy for you to find what you're looking for in Long Beach, Ilwaco, Chinook, Astoria, Warrenton, Gearhart, Seaside and Cannon Beach.">
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Coast Marketplace - Find what you’re looking for in the Columbia-Pacific region">
		<meta property="og:description" content="Coast Marketplace helps you find the widest selection of items for sale in the Columbia-Pacific region. Our listings are optimized to deliver information the community needs to make buying decisions. By analyzing information on thousands of topics, we make it easy for you to find what you're looking for in Long Beach, Ilwaco, Chinook, Astoria, Warrenton, Gearhart, Seaside and Cannon Beach.">
		<meta property="og:url" content="https://coastmarketplace.com/">
		<meta property="og:site_name" content="Coast Marketplace">
		<meta property="og:image" content="https://assets.eomediagroup.com/images/coast-marketplace/fb-cover.jpg">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:description" content="Coast Marketplace helps you find the widest selection of items for sale in the Columbia-Pacific region. Our listings are optimized to deliver information the community needs to make buying decisions. By analyzing information on thousands of topics, we make it easy for you to find what you're looking for in Long Beach, Ilwaco, Chinook, Astoria, Warrenton, Gearhart, Seaside and Cannon Beach.">
		<meta name="twitter:title" content="Coast Marketplace - Find what you’re looking for in the Columbia-Pacific region">
		<meta name="twitter:image" content="https://assets.eomediagroup.com/images/coast-marketplace/fb-cover.jpg">
	<?php } ?>
	
	
	<?php if ( is_page_template('page-results.php') ) { // SEO for search results ?>
		<title><?= esc_html($_GET['stq']); ?> - <?php echo get_bloginfo('name') ?></title>
		<meta name="description" content="Coast Marketplace helps you find items related to <?= esc_html($_GET['stq']); ?> in the Columbia-Pacific region. Our listings are optimized to deliver information the community needs to make buying decisions. By analyzing information on thousands of topics, we make it easy for you to find what you're looking for in Long Beach, Ilwaco, Chinook, Astoria, Warrenton, Gearhart, Seaside and Cannon Beach.">
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?= esc_html($_GET['stq']); ?> - <?php echo get_bloginfo('name') ?>">
		<meta property="og:description" content="Coast Marketplace helps you find items related to <?= esc_html($_GET['stq']); ?> in the Columbia-Pacific region. Our listings are optimized to deliver information the community needs to make buying decisions. By analyzing information on thousands of topics, we make it easy for you to find what you're looking for in Long Beach, Ilwaco, Chinook, Astoria, Warrenton, Gearhart, Seaside and Cannon Beach.">
		<meta property="og:url" content="<?php echo get_permalink(); ?>?stq=<?= esc_html($_GET['stq']); ?>">
		<meta property="og:site_name" content="Coast Marketplace">
		<meta property="og:image" content="https://assets.eomediagroup.com/images/coast-marketplace/fb-cover.jpg">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:description" content="Coast Marketplace helps you find items related to <?= esc_html($_GET['stq']); ?> in the Columbia-Pacific region. Our listings are optimized to deliver information the community needs to make buying decisions. By analyzing information on thousands of topics, we make it easy for you to find what you're looking for in Long Beach, Ilwaco, Chinook, Astoria, Warrenton, Gearhart, Seaside and Cannon Beach.">
		<meta name="twitter:title" content="<?= esc_html($_GET['stq']); ?> - <?php echo get_bloginfo('name') ?>">
		<meta name="twitter:image" content="https://assets.eomediagroup.com/images/coast-marketplace/fb-cover.jpg">
	<?php } ?>
	
	
<?php echo do_shortcode(ob_get_clean()); ?>

<!-- Structured Data -->
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Organization",
	"url": "https://coastmarketplace.com",
	"name": "Coast Marketplace",
	"description": "Coast Marketplace helps you find the widest selection of items for sale in the Columbia-Pacific region. Our listings are optimized to deliver information the community needs to make buying decisions. By analyzing information on thousands of topics, we make it easy for you to find what you're looking for in Long Beach, Ilwaco, Chinook, Astoria, Warrenton, Gearhart, Seaside and Cannon Beach."
}
</script>