<?php
/**
 * The template part for displaying a map
 * inside a Stratum app Listing
 */
?>

<?php ob_start(); ?>

[stratum_listing_has_value account=84 key='address']

<div class="listing-map">
	
	<a href="https://www.google.com/maps/place/[stratum_listing_has_value account=84 key='address'][stratum_listing account=84 key='address'][/stratum_listing_has_value],+[stratum_listing_has_value account=84 key='city'][stratum_listing account=84 key='city'][/stratum_listing_has_value],+[stratum_listing_has_value account=84 key='state'][stratum_listing account=84 key='state'][/stratum_listing_has_value]+[stratum_listing_has_value account=84 key='zipcode'][stratum_listing account=84 key='zipcode'][/stratum_listing_has_value]/">
	<!--<img src="https://maps.googleapis.com/maps/api/staticmap?size=1140x350&scale=2&maptype=roadmap&markers=color:red%7C[stratum_listing_has_value account=84 key='address'][stratum_listing account=84 key='address'][/stratum_listing_has_value],+[stratum_listing_has_value account=84 key='city'][stratum_listing account=84 key='city'][/stratum_listing_has_value]+[stratum_listing_has_value account=84 key='state'][stratum_listing account=84 key='state'][/stratum_listing_has_value]&key=AIzaSyApc4QQSIRWm2ufI7PJsdSfgJhA64cSjuY">-->
	
	<img src="https://maps.googleapis.com/maps/api/staticmap?size=1140x350&scale=2&maptype=roadmap&markers=color:red%7C[stratum_listing_multi account=84 key='address, city, state, zipcode']{{address}},+{{city}}+{{state}}+{{zipcode}}%7C[/stratum_listing_multi]&key=AIzaSyApc4QQSIRWm2ufI7PJsdSfgJhA64cSjuY">
	</a>

</div>

[/stratum_listing_has_value]

<?php echo do_shortcode(ob_get_clean()); ?>

</div>