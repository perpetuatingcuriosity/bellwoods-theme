<?php
/*
Template Name: Page – Beer
*/

get_header(); ?>


<div class="fullBleed beerPage">
	<div class="container">	

		<main class="beerArchive">

			<section class="onTap">
			<?php
				$beerQuery = new WP_Query( 
					array( 
						'post_type' => 'beer-archive', 
						// 'project_type' => $projectTerms, 
						// 'post__not_in' => array( $post->ID )  
						) 
				); ?>
				
				<?php if ( $beerQuery->have_posts() ) : ?>

					<?php while ($beerQuery->have_posts()) : $beerQuery->the_post(); ?>
						
						<div class="beerPost">
						<div class="featuredImage">
							<?php echo get_the_post_thumbnail( $post->ID); ?> 
						</div>

					</div>
				
					<?php endwhile; ?>
					
					<?php wp_reset_postdata(); ?>
					
			<!-- 	<?php else:  ?>
					[stuff that happens if there aren't any posts] -->
				<?php endif; ?>
				</section>
		</main>

	</div>
</div>