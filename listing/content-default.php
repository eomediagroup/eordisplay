<?php
/**
 * The template part for displaying content
 * inside a Listing
 */
?>

<div class="cell large-9">
	
<?php ob_start(); ?>
	
	<h1 class="title">[stratum_listing account=65 key='title']</h1>

	<div class="identifiers">
		<ul>
			[stratum_listing_has_value account=65 key='realtors']
				[stratum_listing_multi account=65 key='realtors']
					<li class="realtor">{{realtors}}</li>
				[/stratum_listing_multi]
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=65 key='lender-rate-type']
				<li class="realtor">[stratum_listing account=65 key='lender-rate-type'] Loans</li>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=65 key='seller']
				[stratum_listing_multi account=65 key='seller']
					<li class="seller">{{seller}}</li>
				[/stratum_listing_multi]
			[/stratum_listing_has_value]
		</ul>
	</div>

	<div class="metadata">
		<ul>
			[stratum_listing_has_value account=65 key='price']
				<li class="price">[stratum_listing account=65 key='price' transform="money"]</li>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=65 key='lender-down-payment']<li class="down-payment">[stratum_listing account=5 key="lender-down-payment"]% Down</li>[/stratum_listing_has_value]
			[stratum_listing_has_value account=65 key='rentals-rent']<li class="down-payment">[stratum_listing account=5 key="rentals-rent" transform="money"]/Month</li>[/stratum_listing_has_value]
			[stratum_listing_has_value account=65 key='bedrooms']
				<li class="bedrooms">[stratum_listing account=65 key='bedrooms']<span class="descriptor">beds</span></li>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=65 key='bathrooms']
				<li class="bathrooms">[stratum_listing account=65 key='bathrooms']<span class="descriptor">baths</span></li>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=65 key='square-footage']
				<li class="price-sqft">[stratum_listing account=65 key='square-footage' transform="number(2)"]<span class="descriptor">sqft</span></li>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=65 key='acreage']
				<li class="acreage">[stratum_listing account=65 key='acreage' transform="number(2)"]<span class="descriptor">acres</span></li>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=65 key='lender-max-ltv']<li class="max-ltv">[stratum_listing account=65 key="lender-max-ltv"]% <span class="descriptor">LTV</span></li>[/stratum_listing_has_value]
			[stratum_listing_has_value account=65 key='lender-min-fico']<li class="min-fico">[stratum_listing account=65 key="lender-min-fico"] <span class="descriptor">Min FICO</span></li>[/stratum_listing_has_value]
			[stratum_listing_has_value account=65 key='lender-max-dti']<li class="max-dti">[stratum_listing account=65 key="lender-max-dti"] <span class="descriptor">Max DTI</span></li>[/stratum_listing_has_value]
			[stratum_listing_has_value account=65 key='rentals-lease']<li class="rentals-lease">[stratum_listing account=65 key="rentals-lease"] <span class="descriptor">Lease</span></li>[/stratum_listing_has_value]			
		</ul>
		
	</div>
	
	<div class="content">
		<p>[stratum_listing account=65 key='body-encoded' encoding='base64' fallback='body']</p>
	</div>
	
<?php echo do_shortcode(ob_get_clean()); ?>