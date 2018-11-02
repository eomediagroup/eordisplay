<?php
/**
 * The template part for displaying an embeddable for Search Results
 * within a real estate based Stratum app
 */
?>

<?php // Let's load all values and labels for ACF select fields
	
	$spaccount = get_field('seller-page-account-number'); // Assigns the correct API account
	$spdisplaytotal = get_field('seller-page-results-display-total'); // Total results per page
	
?>

<div class="cell large-9">

	<?php ob_start(); ?>
	
	[stratum_results account=<?= $spaccount ?> listing_url_template="https://eordisplay.teamstratum.com/listings/{{slug}}" num=<?= $spdisplaytotal ?>]
		[stratum_result_template]
	    
	    	
		    	[stratum_if_value key='image_thumb']
					<div class='thumbnail'>[stratum_thumb key='image_thumb']</div>
				[/stratum_if_value]
				
				<div class='content'>
	        	<h1 class='title'>[stratum_data key="title"]</h1>
				
				<div class="identifiers">
					<ul>
						[stratum_if_value key='preview-type' value='Property Preview']
							<li class="realtor">[stratum_data key="realtors"]</li>
						[/stratum_if_value]
						[stratum_if_value key='preview-type' value='Lender Preview']
							<li class="realtor">[stratum_data key="lender-rate-type"] Loans</li>
						[/stratum_if_value]
						[stratum_if_value key='preview-type' value='Rental Property Preview']
							<li class="realtor">[stratum_data key="city"]</li>
						[/stratum_if_value]
						<li class="seller">[stratum_data key="seller"]</li>
					</ul>
				</div>
				
				<div class="metadata">
					<ul>
						[stratum_if_value key='price']<li class="price">[stratum_data key="price" transform="money"]</li>[/stratum_if_value]
						[stratum_if_value key='lender-down-payment']<li class="down-payment">[stratum_data key="lender-down-payment"]% Down</li>[/stratum_if_value]
						[stratum_if_value key='rentals-rent']<li class="down-payment">[stratum_data key="rentals-rent" transform="money"]/Month</li>[/stratum_if_value]
						[stratum_if_value key='bedrooms']<li class="bedrooms">[stratum_data key="bedrooms"]<span class="descriptor">beds</span></li>[/stratum_if_value]
						[stratum_if_value key='bathrooms']<li class="bathrooms">[stratum_data key="bathrooms"]<span class="descriptor">baths</span></li>[/stratum_if_value]
						[stratum_if_value key='square-footage']<li class="price-sqft">[stratum_data key="square-footage" transform="number(2)"]<span class="descriptor">sqft</span></li>[/stratum_if_value]
						[stratum_if_value key='acreage']<li class="acreage">[stratum_data key="acreage" transform="number(2)"]<span class="descriptor">acres</span></li>[/stratum_if_value]
						[stratum_if_value key='lender-max-ltv']<li class="max-ltv">[stratum_data key="lender-max-ltv"]% <span class="descriptor">LTV</span></li>[/stratum_if_value]
						[stratum_if_value key='lender-min-fico']<li class="min-fico">[stratum_data key="lender-min-fico"] <span class="descriptor">Min FICO</span></li>[/stratum_if_value]
						[stratum_if_value key='lender-max-dti']<li class="max-dti">[stratum_data key="lender-max-dti"] <span class="descriptor">Max DTI</span></li>[/stratum_if_value]
						[stratum_if_value key='rentals-lease']<li class="max-dti">[stratum_data key="rentals-lease"] <span class="descriptor">Lease</span></li>[/stratum_if_value]				
					</ul>
					
					[stratum_if_value key='preview-type' value='Default Preview']
						<p class="results-preview">[stratum_data key="body_excerpt"]</p>
					[/stratum_if_value]
				</div>
				</div>
			
		
		[/stratum_result_template]
	[/stratum_results]
	
	<?php echo do_shortcode(ob_get_clean()); ?>
	
	<?php echo do_shortcode('[stratum_pagination account=' . $spaccount .']'); ?>
	
</div>