<?php
/**
 * The template part for displaying an actionable for search
 * results, focused on calls to action
 */
?>

<?php ob_start(); ?>

<div class="ctas">
	<div class="grid-container">
		<div class="grid-x">
		
			<div class="cell medium-12">
				
				<div class="stratum-result-summary">
					<!-- No summary --> 
				</div>
	
				<div class="actions">
					<ul>
						<li><a href="#"><span>Website</span>
							<div class="svg">
								<?php get_template_part( 'assets/icons/svg/browser', 'icon' ); ?>
							</div>
						</a></li>
						
						<li><a href="#"><span>View Ad</span>
							<div class="svg">
								<?php get_template_part( 'assets/icons/svg/link', 'icon' ); ?>
							</div>
						</a></li>
						
						<li><a href="#message"><span>Message</span>
							<div class="svg">
								<?php get_template_part( 'assets/icons/svg/message', 'icon' ); ?>
							</div>
						</a></li>
					</ul>
					
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php echo do_shortcode(ob_get_clean()); ?>
