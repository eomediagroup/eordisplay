<?php
/**
 * The template part for displaying a default SEO titles, descriptions
 * for both listings and social channels
 */
?>

<?php ob_start(); ?>
	
	<?php if ( is_front_page() ) { // SEO for the homepage ?>
		<title><?php wp_title('-', true, 'right'); ?> <?php echo get_bloginfo('name') ?> - <?php echo get_bloginfo('description') ?></title>
		<meta name="description" content="East Oregon Real Estate helps you find the newest Eastern Oregon real estate listings. By analyzing information on thousands of acreage for sale, single family homes for sale, ranches for sale, and farms for sale in Pendleton, Hermiston, Enterprise, John Day, Baker City, Oregon and across Eastern Oregon. We make it easy to find your dream home by filtering home types, price, lot size and much more.">
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="website">
		<meta property="og:title" content="East Oregon Real Estate - Find the property you're looking for in Eastern Oregon">
		<meta property="og:description" content="East Oregon Real Estate helps you find the newest Eastern Oregon real estate listings. By analyzing information on thousands of acreage for sale, single family homes for sale, ranches for sale, and farms for sale in Pendleton, Hermiston, Enterprise, John Day, Baker City, Oregon and across Eastern Oregon. We make it easy to find your dream home by filtering home types, price, lot size and much more.">
		<meta property="og:url" content="https://eastoregonrealestate.com/">
		<meta property="og:site_name" content="East Oregon Real Estate">
		<meta property="og:image" content="https://assets.eomediagroup.com/images/east-oregon-real-estate/fb-cover.jpg">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:description" content="East Oregon Real Estate helps you find the newest Eastern Oregon real estate listings. By analyzing information on thousands of acreage for sale, single family homes for sale, ranches for sale, and farms for sale in Pendleton, Hermiston, Enterprise, John Day, Baker City, Oregon and across Eastern Oregon. We make it easy to find your dream home by filtering home types, price, lot size and much more.">
		<meta name="twitter:title" content="East Oregon Real Estate - Find the property you're looking for in Eastern Oregon">
		<meta name="twitter:image" content="https://assets.eomediagroup.com/images/east-oregon-real-estate/fb-cover.jpg">
	<?php } ?>
	
	
	<?php if ( is_page_template('page-results.php') ) { // SEO for search results ?>
		<title><?= esc_html($_GET['stq']); ?> - <?php echo get_bloginfo('name') ?></title>
		<meta name="description" content="East Oregon Real Estate helps you find the newest <?= esc_html($_GET['stq']); ?> real estate listings. By analyzing information on thousands of acreage for sale, single family homes for sale, ranches for sale, and farms for sale in Pendleton, Hermiston, Enterprise, John Day, Baker City, Oregon and across Eastern Oregon. We make it easy to find your dream home by filtering home types, price, lot size and much more.">
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?= esc_html($_GET['stq']); ?> - <?php echo get_bloginfo('name') ?>">
		<meta property="og:description" content="East Oregon Real Estate helps you find the newest <?= esc_html($_GET['stq']); ?> real estate listings. By analyzing information on thousands of acreage for sale, single family homes for sale, ranches for sale, and farms for sale in Pendleton, Hermiston, Enterprise, John Day, Baker City, Oregon and across Eastern Oregon. We make it easy to find your dream home by filtering home types, price, lot size and much more.">
		<meta property="og:url" content="<?php echo get_permalink(); ?>?stq=<?= esc_html($_GET['stq']); ?>">
		<meta property="og:site_name" content="East Oregon Real Estate">
		<meta property="og:image" content="https://assets.eomediagroup.com/images/east-oregon-real-estate/fb-cover.jpg">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:description" content="East Oregon Real Estate helps you find the newest <?= esc_html($_GET['stq']); ?> real estate listings. By analyzing information on thousands of acreage for sale, single family homes for sale, ranches for sale, and farms for sale in Pendleton, Hermiston, Enterprise, John Day, Baker City, Oregon and across Eastern Oregon. We make it easy to find your dream home by filtering home types, price, lot size and much more.">
		<meta name="twitter:title" content="<?= esc_html($_GET['stq']); ?> - <?php echo get_bloginfo('name') ?>">
		<meta name="twitter:image" content="https://assets.eomediagroup.com/images/east-oregon-real-estate/fb-cover.jpg">
	<?php } ?>
	
	
<?php echo do_shortcode(ob_get_clean()); ?>

<!-- Structured Data -->
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Organization",
	"url": "https://eastoregonrealestate.com",
	"name": "East Oregon Real Estate",
	"description": "East Oregon Real Estate helps you find the newest Eastern Oregon real estate listings. By analyzing information on thousands of acreage for sale, single family homes for sale, ranches for sale, and farms for sale in Pendleton, Hermiston, Enterprise, John Day, Baker City, Oregon and across Eastern Oregon. We make it easy to find your dream home by filtering home types, price, lot size and much more."
}
</script>