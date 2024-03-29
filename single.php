<?php
/**
 * The template for displaying all single posts.
 *
 * @package pcurio
 */

get_header(); ?>

<div class="fullBleed blogPage singlePage">
	<div class="container">	
		<div class="blogSectionHead">
			<h3 class="blogBack"><a href="<?php echo bloginfo('url')?>" rel="home">← Blog Main</a></h3>
		</div>
		<main id="singlePost">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php pcurio_post_nav(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
		</main>
		<?php get_sidebar(); ?>
		</div><!-- .container -->
	</div><!-- singlePage -->



<?php get_footer(); ?>