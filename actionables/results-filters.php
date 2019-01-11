<?php
/**
 * The template part for displaying an filter actionable for Search Results
 * focused on drilling-down through results data
 */
?>

<div class="filters">
	<div class="grid-container">
		<div class="grid-x">
		
			<div class="cell small-12">
				
				<?php echo do_shortcode('[stratum_filter_tags account=84 title="Selected Filters"]'); ?>
				
				<?php ob_start(); ?>
				
				[stratum_filters account=84 threshold=50]
				
				<ul class="tabs" data-tabs data-active-collapse="true" id="filter-actions">
					<li class="tabs-title is-active"><a id="filter-control" href="#filters" aria-selected="true">Filters
						<div class="svg">
							<?php get_template_part( 'assets/icons/svg/filter', 'icon' ); ?>
						</div>
						<div class="svg-close svg">
							<?php get_template_part( 'assets/icons/svg/close', 'icon' ); ?>
						</div>
					</a></li>
				</ul>
				
				<div class="tabs-content" data-tabs-content="filter-actions">
				<div class="tabs-panel is-active" id="filters">
					
					<ul class="tabs" data-responsive-accordion-tabs="tabs small-accordion medium-accordion large-tabs" id="filter-tabs" data-allow-all-closed="true" data-multi-expand="true" data-active-collapse="true">
						[stratum_if_filter key='latitude']<li class="tabs-title"><a href="#radius">Search Radius</a></li>[/stratum_if_filter]
						[stratum_if_filter key='subcategory']<li class="tabs-title"><a href="#category" aria-selected="true">Category</a></li>[/stratum_if_filter]
						[stratum_if_filter key='region']<li class="tabs-title"><a href="#region">County</a></li>[/stratum_if_filter]
						[stratum_if_filter key='city']<li class="tabs-title"><a href="#city">City</a></li>[/stratum_if_filter]
						[stratum_if_filter key='price']<li class="tabs-title"><a href="#price">Price</a></li>[/stratum_if_filter]
						[stratum_if_filter key='bedrooms']<li class="tabs-title"><a href="#beds">Beds</a></li>[/stratum_if_filter]
						[stratum_if_filter key='bathrooms']<li class="tabs-title"><a href="#baths">Baths</a></li>[/stratum_if_filter]
						[stratum_if_filter key='acreage']<li class="tabs-title"><a href="#lot-size">Lot Size</a></li>[/stratum_if_filter]
						[stratum_if_filter key='real-estate-agency']<li class="tabs-title"><a href="#agency">Agency</a></li>[/stratum_if_filter]
						[stratum_if_filter key='realtors']<li class="tabs-title"><a href="#realtor">Realtor</a></li>[/stratum_if_filter]
					</ul>
					
					<div class="tabs-content" data-tabs-content="filter-tabs">
						
						[stratum_if_filter key='latitude']
							<div class="tabs-panel" id="radius">
								<div class="lat-filter-container">[stratum_enumerate key='latitude' title='Filter by Lat']</div>
								<div class="stratum-filter-set search-radius">
									<h3>Filter by Distance</h3>
									[stratum_geo account=84 distances='10, 20, 50, 75, 100, 200, 300, 500, 750']
								</div>
							</div>
						[/stratum_if_filter]
						
						[stratum_if_filter key='subcategory']
							<div class="tabs-panel" id="category">
								[stratum_enumerate key='subcategory' title='Filter by Category']
							</div>
						[/stratum_if_filter]
						
						[stratum_if_filter key='region']
							<div class="tabs-panel" id="region">
								[stratum_enumerate key='region' title='Filter by County']
							</div>
						[/stratum_if_filter]
						
						[stratum_if_filter key='city']
							<div class="tabs-panel" id="city">
								[stratum_enumerate key='city' title='Filter by City']
							</div>
						[/stratum_if_filter]
						
						[stratum_if_filter key='price']
							<div class="tabs-panel" id="price">

								[stratum_range key='price' title='Filter by Max Price']
									[stratum_range_option title='$50,000' from='0' to='50000']
									[stratum_range_option title='$75,000' from='0' to='75000']
									[stratum_range_option title='$100,000' from='0' to='100000']
									[stratum_range_option title='$150,000' from='0' to='150000']
									[stratum_range_option title='$200,000' from='0' to='200000']
									[stratum_range_option title='$250,000' from='0' to='250000']
									[stratum_range_option title='$300,000' from='0' to='300000']
									[stratum_range_option title='$400,000' from='0' to='400000']
									[stratum_range_option title='$500,000' from='0' to='500000']
									[stratum_range_option title='$750,000' from='0' to='750000']
									[stratum_range_option title='$1,000,000' from='0' to='1000000']
									[stratum_range_option title='No Maximum Price' from='0' to='500000000']
								[/stratum_range]
							
							</div>
						[/stratum_if_filter]
						
						[stratum_if_filter key='bedrooms']
							<div class="tabs-panel" id="beds">
														
								[stratum_range key='bedrooms' title='Filter by Bedrooms']
									[stratum_range_option title='0+ Beds' from='0' to='100']
									[stratum_range_option title='1+ Beds' from='1' to='100']
									[stratum_range_option title='2+ Beds' from='2' to='100']
									[stratum_range_option title='3+ Beds' from='3' to='100']
									[stratum_range_option title='4+ Beds' from='4' to='100']
									[stratum_range_option title='5+ Beds' from='5' to='100']
									[stratum_range_option title='6+ Beds' from='6' to='100']
								[/stratum_range]
								
							</div>
						[/stratum_if_filter]
						
						[stratum_if_filter key='bathrooms']
							<div class="tabs-panel" id="baths">
							
								[stratum_range key='bathrooms' title='Filter by Bathrooms']
									[stratum_range_option title='0+ Baths' from='0' to='100']
									[stratum_range_option title='1+ Baths' from='1' to='100']
									[stratum_range_option title='2+ Baths' from='2' to='100']
									[stratum_range_option title='3+ Baths' from='3' to='100']
									[stratum_range_option title='4+ Baths' from='4' to='100']
									[stratum_range_option title='5+ Baths' from='5' to='100']
									[stratum_range_option title='6+ Baths' from='6' to='100']
								[/stratum_range]
								
							</div>
						[/stratum_if_filter]
						
						[stratum_if_filter key='acreage']
							<div class="tabs-panel" id="lot-size">
							
								[stratum_range key='acreage' title='Filter by Acreage']
									[stratum_range_option title='0+ Acres' from='0' to='100000']
									[stratum_range_option title='2+ Acres' from='2' to='100000']
									[stratum_range_option title='5+ Acres' from='5' to='100000']
									[stratum_range_option title='10+ Acres' from='10' to='100000']
									[stratum_range_option title='15+ Acres' from='15' to='100000']
									[stratum_range_option title='20+ Acres' from='20' to='100000']
									[stratum_range_option title='30+ Acres' from='30' to='100000']
									[stratum_range_option title='50+ Acres' from='50' to='100000']
									[stratum_range_option title='100+ Acres' from='100' to='100000']
									[stratum_range_option title='200+ Acres' from='200' to='100000']
									[stratum_range_option title='500+ Acres' from='500' to='100000']
									[stratum_range_option title='1,000+ Acres' from='1000' to='100000']
								[/stratum_range]
								
							</div>
						[/stratum_if_filter]
						
						[stratum_if_filter key='real-estate-agency']
							<div class="tabs-panel" id="agency">
								[stratum_enumerate key='real-estate-agency' title='Filter by Agency']
							</div>
						[/stratum_if_filter]
						
						[stratum_if_filter key='realtors']
							<div class="tabs-panel" id="realtor">
								[stratum_enumerate key='realtors' title='Filter by Realtor']
							</div>
						[/stratum_if_filter]
						
					</div>
					
				</div>
  				</div>
  				
  				[/stratum_filters]

  				<?php echo do_shortcode(ob_get_clean()); ?>
  			
  			</div>
  		</div>
  	</div>
</div>