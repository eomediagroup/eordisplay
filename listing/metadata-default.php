<?php
/**
 * The template part for displaying metadata
 * inside a Stratum app Listing
 */
?>

<?php ob_start(); ?>
	
	<div class="overview">
		
		<h3 class="title">Overview</h3>
		
		<table role="grid" summary="Exterior details for [stratum_listing account=84 key='title']">
			<tbody>
			
			<!-- Identity -->
			
			[stratum_listing_has_value account=84 key='seller']
				<tr>
					<td class="key">Seller</td>
					<td class="value">[stratum_listing account=84 key='seller']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='real-estate-agency']
				<tr>
					<td class="key">Agency</td>
					<td class="value">[stratum_listing account=84 key='real-estate-agency']</td>
				</tr>
			[/stratum_listing_has_value]
			[stratum_listing_has_value account=84 key='realtors']
				[stratum_listing_multi account=84 key='realtors']
				<tr>
					<td class="key">Realtor</td>
					<td class="value">{{realtors}}</td>
				</tr>
				[/stratum_listing_multi]
			[/stratum_listing_has_value]
			
			<!-- Identifiers -->
			
			[stratum_listing_has_value account=84 key='price']
				<tr>
					<td class="key">Price</td>
					<td class="value">[stratum_listing account=84 key='price' transform="money"]</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='year']
				<tr>
					<td class="key">Year</td>
					<td class="value">[stratum_listing account=84 key='year']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='condition']
				<tr>
					<td class="key">Condition</td>
					<td class="value">[stratum_listing account=84 key='condition']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='manufacturer']
				<tr>
					<td class="key">Manufacturer</td>
					<td class="value">[stratum_listing account=84 key='manufacturer']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='model']
				<tr>
					<td class="key">Model</td>
					<td class="value">[stratum_listing account=84 key='model']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='vin']
				<tr>
					<td class="key">VIN</td>
					<td class="value">[stratum_listing account=84 key='vin']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='stock-number']
				<tr>
					<td class="key">Stock Number</td>
					<td class="value">[stratum_listing account=84 key='stock-number']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='serial-number']
				<tr>
					<td class="key">Serial Number</td>
					<td class="value">[stratum_listing account=84 key='serial-number']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='engine']
				<tr>
					<td class="key">Engine</td>
					<td class="value">[stratum_listing account=84 key='engine']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='color']
				<tr>
					<td class="key">Color</td>
					<td class="value">[stratum_listing account=84 key='color']</td>
				</tr>
			[/stratum_listing_has_value]
			
			<!-- Real Estate -->
			
			[stratum_listing_has_value account=84 key='acreage']
				<tr>
					<td class="key">Acres</td>
					<td class="value">[stratum_listing account=84 key='acreage' transform="number(2)"]</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='square-footage']
				<tr>
					<td class="key">Home Sqft</td>
					<td class="value">[stratum_listing account=84 key='square-footage' transform="number(2)"]</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='bedrooms']
				<tr>
					<td class="key">Bedrooms</td>
					<td class="value">[stratum_listing account=84 key='bedrooms']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='bathrooms']
				<tr>
					<td class="key">Bathrooms</td>
					<td class="value">[stratum_listing account=84 key='bathrooms']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='price-sqft']
				<tr>
					<td class="key">Price/Sqft</td>
					<td class="value">[stratum_listing account=84 key='price-sqft']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='mls']
				<tr>
					<td class="key">MLS#</td>
					<td class="value">[stratum_listing account=84 key='mls']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='region']
				<tr>
					<td class="key">County</td>
					<td class="value">[stratum_listing account=84 key='region']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='lender-down-payment']
				<tr>
					<td class="key">Down Payment</td>
					<td class="value">[stratum_listing account=84 key='lender-down-payment']%</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='lender-max-ltv']
				<tr>
					<td class="key">Max LTV</td>
					<td class="value">[stratum_listing account=84 key='lender-max-ltv']%</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='lender-min-fico']
				<tr>
					<td class="key">Min FICO</td>
					<td class="value">[stratum_listing account=84 key='lender-min-fico']</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='lender-max-dti']
				<tr>
					<td class="key">Max DTI</td>
					<td class="value">[stratum_listing account=84 key='lender-max-dti']%</td>
				</tr>
			[/stratum_listing_has_value]
			
			[stratum_listing_has_value account=84 key='rentals-rent']
				<tr>
					<td class="key">Rent per Month</td>
					<td class="value">[stratum_listing account=84 key='rentals-rent' transform="money"]</td>
				</tr>
			[/stratum_listing_has_value]
			
			<!-- Location -->
			
			[stratum_listing_has_value account=84 key='location-name']
				[stratum_listing_multi account=84 key='location-name']
				<tr>
					<td class="key">Location</td>
					<td class="value">{{location-name}}</td>
				</tr>
				[/stratum_listing_multi]
			[/stratum_listing_has_value]
			
			</tbody>
		</table>
		
	</div>
	
<?php echo do_shortcode(ob_get_clean()); ?>