<?php
/**
 * The template part for displaying a listing's SEO titles, descriptions
 * for both listings and social channels
 */
?>

<?php ob_start(); ?>
	
	<title>[stratum_listing account=84 key='title'] | [stratum_listing account=84 key='seller'] - East Oregon Real Estate</title>
	<meta name="description" content="<?= esc_attr(do_shortcode("[stratum_listing account=84 key='body_excerpt']")); ?>">
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?= esc_attr(do_shortcode("[stratum_listing account=84 key='title']")); ?>" />
	<meta property="og:description" content="<?= esc_attr(do_shortcode("[stratum_listing account=84 key='body_excerpt']")); ?>" />
	<meta property="og:url" content="<?php echo get_permalink(); ?><?= esc_attr(do_shortcode("[stratum_listing account=84 key='slug']")); ?>" />
	<meta property="og:site_name" content="East Oregon Real Estate" />
	<meta property="article:tag" content="<?= esc_attr(do_shortcode("[stratum_listing account=84 key='category']")); ?>" />
	<meta property="article:section" content="<?= esc_attr(do_shortcode("[stratum_listing account=84 key='subcategory']")); ?>" />
	<meta property="article:published_time" content="<?= esc_attr(do_shortcode("[stratum_listing account=84 key='published_at']")); ?>" />
	[stratum_listing_multi account=84 key='image']
		<meta property="og:image" content="{{image}}" />
	[/stratum_listing_multi]
	[stratum_listing_multi account=84 key='image']
		<meta property="og:image:secure_url" content="{{image}}" />
	[/stratum_listing_multi]
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="<?= esc_attr(do_shortcode("[stratum_listing account=84 key='body_excerpt']")); ?>" />
	<meta name="twitter:title" content="<?= esc_attr(do_shortcode("[stratum_listing account=84 key='title']")); ?>" />
	[stratum_listing_multi account=84 key='image']
		<meta name="twitter:image" content="{{image}}" />
	[/stratum_listing_multi]

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

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Place",
	"url": "<?php echo get_permalink(); ?>?id=<?= esc_html($_GET['id']); ?>",
	"name": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='title']")); ?>",
	"address": {
    	"@type": "PostalAddress",
    	"streetAddress": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='address']")); ?>",
    	"addressLocality": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='city']")); ?>",
    	"addressRegion": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='state']")); ?>",
    	"postalCode": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='zipcode']")); ?>"
    },
    "description": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='body_excerpt']")); ?>",
    "geo": {
	    "@type": "GeoCoordinates",
	    "latitude": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='latitude']")); ?>",
	    "longitude": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='longitude']")); ?>"
    }
}
</script>

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Product",
	"name": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='title']")); ?>",
	"offers": {
		"@type": "Offer",
		"price": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='price']")); ?>",
		"priceCurrency": "USD",
		"seller": "<?= esc_attr(do_shortcode("[stratum_listing account=84 key='seller']")); ?>"
	}
}
</script>

<?php echo do_shortcode(ob_get_clean()); ?>