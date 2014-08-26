<?php

/*
Template Name: Home Page
*/
/**
 * The template for displaying the home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package pcurio
 */

 get_header(); ?>


<?php echo do_shortcode("[metaslider id=107]"); ?>

<div class="fullBleed contentPreview">
	<div class="container">
		
		<section>
			<figure>
				<img src="<?php bloginfo('template_directory'); ?>/images/available-pub.svg">
			</figure>
			<figcaption>
				<h3>Brewpub</h3>
				<p>For all brews currently on tap and on location at Ossington and Queen</p>
			</figcaption>
		</section>
		<section>
			<figure>
				<img src="<?php bloginfo('template_directory'); ?>/images/available-bottleshop.svg">
			</figure>
			<figcaption>
				<h3>Bottleshop</h3>
				<p>What’s currently available at our bottleshop. Take home your favourites.</p>
			</figcaption>
		</section>
		<section>
			<figure>
				<img src="<?php bloginfo('template_directory'); ?>/images/not-available.svg">
			</figure>
			<figcaption>
				<h3>Beer Archives</h3>
				<p>Still looking for a brew? Check out the archives for our full range of product</p>
			</figcaption>
		</section>
		</article>
	</div>
</div>

 <div class="fullBleed homePosts">
 	<div class="container">

 		<div class="blogSectionHead">
 			<div class="blog-logo">
 				<img src="<?php bloginfo('template_directory'); ?>/images/blog_icon.svg">
 			</div>
 			<h1 class="blog-title"><a href="<?php echo bloginfo('url')?>" rel="home">From the Blog</a></h1>
 		</div>
	
		<!-- <div class="blogSectionHead">
			<img src="<?php bloginfo('template_directory'); ?>/images/blog_icon.svg" class="svg">
	 		<h2><a href="">From the Blog</a></h2>
	 	</div> -->

		<?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 6 ) ); ?>

		<?php if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
		  
		  		<section class="homepagePost">
		  			<header>
		  				<?php the_category(); ?> 
		   				<?php the_title(); ?>
		   			</header>

		   			<figure style="background: url(
		   				<?php
		   				//Get the Thumbnail URL
		   				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
		   				echo $src[0];
		   			?>
		   			) no-repeat center center;
		              background-size: cover;
		              -webkit-background-size: cover;
		              -moz-background-size: cover; 
		              -o-background-size: cover;">
		   			</figure>

		   		 	<article class = "excerpt">
		   				<?php the_excerpt(); ?>
		   			</article>

		   			<footer>
		   				<?php pcurio_posted_on(); ?>
		   			</footer>

		  		</section> <!-- /.homepagePost -->

		 <?php endwhile; endif; ?>

 	</div> <!-- /.container -->
 </div> <!-- ./fullBleed homePosts --> 

 <?php get_footer(); ?>