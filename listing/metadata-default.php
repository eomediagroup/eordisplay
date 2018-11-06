<?php
/**
 * The template part for displaying metadata
 * inside a Stratum app Listing
 */
?>

<?php ob_start(); ?>
	
	<div class="overview">
		
		<h3 class="title">Overview</h3>
		
		<table role="grid" summary="Exterior details for [stratum_listing account=81 key='title']">
			<tbody>
			
			<!-- Standard Overview -->	
			[stratum_listing_has_value account=81 key='seller']
				<tr>
					<td class="key">Seller</td>
					<td class="value">[stratum_listing account=81 key='seller']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='acreage']
				<tr>
					<td class="key">Acres</td>
					<td class="value">[stratum_listing account=81 key='acreage' transform="number(2)"]</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='year']
				<tr>
					<td class="key">Year Built</td>
					<td class="value">[stratum_listing account=81 key='year']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='square-footage']
				<tr>
					<td class="key">Home Sqft</td>
					<td class="value">[stratum_listing account=81 key='square-footage' transform="number(2)"]</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='bedrooms']
				<tr>
					<td class="key">Bedrooms</td>
					<td class="value">[stratum_listing account=81 key='bedrooms']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='bathrooms']
				<tr>
					<td class="key">Bathrooms</td>
					<td class="value">[stratum_listing account=81 key='bathrooms']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='price-sqft']
				<tr>
					<td class="key">Price/Sqft</td>
					<td class="value">[stratum_listing account=81 key='price-sqft']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='mls']
				<tr>
					<td class="key">MLS#</td>
					<td class="value">[stratum_listing account=81 key='mls']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='region']
				<tr>
					<td class="key">County</td>
					<td class="value">[stratum_listing account=81 key='region']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=81 key='location-name']
				[stratum_listing_multi account=81 key='location-name']
				<tr>
					<td class="key">Location</td>
					<td class="value">{{location-name}}</td>
				</tr>
				[/stratum_listing_multi]
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=81 key='real-estate-agency']
				<tr>
					<td class="key">Agency</td>
					<td class="value">[stratum_listing account=81 key='real-estate-agency']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='realtors']
				[stratum_listing_multi account=81 key='realtors']
				<tr>
					<td class="key">Realtor</td>
					<td class="value">{{realtors}}</td>
				</tr>
				[/stratum_listing_multi]
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='lender-down-payment']
				<tr>
					<td class="key">Down Payment</td>
					<td class="value">[stratum_listing account=81 key='lender-down-payment']%</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='lender-max-ltv']
				<tr>
					<td class="key">Max LTV</td>
					<td class="value">[stratum_listing account=81 key='lender-max-ltv']%</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='lender-min-fico']
				<tr>
					<td class="key">Min FICO</td>
					<td class="value">[stratum_listing account=81 key='lender-min-fico']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=81 key='lender-max-dti']
				<tr>
					<td class="key">Max DTI</td>
					<td class="value">[stratum_listing account=81 key='lender-max-dti']%</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=81 key='rentals-rent']
				<tr>
					<td class="key">Rent per Month</td>
					<td class="value">[stratum_listing account=81 key='rentals-rent' transform="money"]</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=81 key='rentals-lease']
				<tr>
					<td class="key">Lease</td>
					<td class="value">[stratum_listing account=81 key='rentals-lease']</td>
				</tr>
			[/stratum_listing_has_value]
			
			
			
			<!-- Seller Page Overview -->
			[stratum_listing_has_value account=98 key='seller']
				<tr>
					<td class="key">Seller</td>
					<td class="value">[stratum_listing account=98 key='seller']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='acreage']
				<tr>
					<td class="key">Acres</td>
					<td class="value">[stratum_listing account=98 key='acreage' transform="number(2)"]</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='year']
				<tr>
					<td class="key">Year Built</td>
					<td class="value">[stratum_listing account=98 key='year']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='square-footage']
				<tr>
					<td class="key">Home Sqft</td>
					<td class="value">[stratum_listing account=98 key='square-footage' transform="number(2)"]</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='bedrooms']
				<tr>
					<td class="key">Bedrooms</td>
					<td class="value">[stratum_listing account=98 key='bedrooms']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='bathrooms']
				<tr>
					<td class="key">Bathrooms</td>
					<td class="value">[stratum_listing account=98 key='bathrooms']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='price-sqft']
				<tr>
					<td class="key">Price/Sqft</td>
					<td class="value">[stratum_listing account=98 key='price-sqft']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='mls']
				<tr>
					<td class="key">MLS#</td>
					<td class="value">[stratum_listing account=98 key='mls']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='region']
				<tr>
					<td class="key">County</td>
					<td class="value">[stratum_listing account=98 key='region']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=98 key='location-name']
				[stratum_listing_multi account=98 key='location-name']
				<tr>
					<td class="key">Location</td>
					<td class="value">{{location-name}}</td>
				</tr>
				[/stratum_listing_multi]
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=98 key='real-estate-agency']
				<tr>
					<td class="key">Agency</td>
					<td class="value">[stratum_listing account=98 key='real-estate-agency']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='realtors']
				[stratum_listing_multi account=98 key='realtors']
				<tr>
					<td class="key">Realtor</td>
					<td class="value">{{realtors}}</td>
				</tr>
				[/stratum_listing_multi]
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='lender-down-payment']
				<tr>
					<td class="key">Down Payment</td>
					<td class="value">[stratum_listing account=98 key='lender-down-payment']%</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='lender-max-ltv']
				<tr>
					<td class="key">Max LTV</td>
					<td class="value">[stratum_listing account=98 key='lender-max-ltv']%</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='lender-min-fico']
				<tr>
					<td class="key">Min FICO</td>
					<td class="value">[stratum_listing account=98 key='lender-min-fico']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=98 key='lender-max-dti']
				<tr>
					<td class="key">Max DTI</td>
					<td class="value">[stratum_listing account=98 key='lender-max-dti']%</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=98 key='rentals-rent']
				<tr>
					<td class="key">Rent per Month</td>
					<td class="value">[stratum_listing account=98 key='rentals-rent' transform="money"]</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=98 key='rentals-lease']
				<tr>
					<td class="key">Lease</td>
					<td class="value">[stratum_listing account=98 key='rentals-lease']</td>
				</tr>
			[/stratum_listing_has_value]
			
			</tbody>
		</table>
		
	</div>
	
<?php echo do_shortcode(ob_get_clean()); ?>