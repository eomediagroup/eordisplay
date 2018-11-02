<?php
/**
 * The template part for displaying an actionable for search
 * results, focused on calls to action
 */
?>

<div class="ctas">
	<div class="grid-container">
		<div class="grid-x">
		
			<div class="cell medium-12">
	
				<?php echo do_shortcode('[stratum_result_summary account=65]'); ?>
	
				<div class="actions">
					<ul>			
						<li><a href="#" id="reveal-map" data-toggle="offCanvasMap"><span>Map</span>
							<div class="svg">
								<?php get_template_part( 'assets/icons/svg/map', 'icon' ); ?>
							</div>
							<div class="svg-close svg">
								<?php get_template_part( 'assets/icons/svg/close', 'icon' ); ?>
							</div>
						</a></li>
					</ul>
					
					<?php ob_start(); ?>
					
						[stratum_sort account=65] 
							[stratum_sort_item key='published_at' order='descending' title='Most Recent Listing']
							[stratum_sort_item key='price' order='ascending' title='Lowest Price First'] 
							[stratum_sort_item key='price' order='descending' title='Highest Price First'] 				 
						[/stratum_sort]
					
					<?php echo do_shortcode(ob_get_clean()); ?>
				</div>
				
			</div>
		</div>
	</div>
</div>