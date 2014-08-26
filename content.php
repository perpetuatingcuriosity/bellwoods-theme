<?php
/**
 * @package pcurio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Get Featured Image -->	
		<figure class="featuredImage">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>
		</figure>

	<header class="entry-header">
		<div class="entry-title">
			<?php the_title( sprintf( '<h1><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		</div>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php pcurio_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'pcurio' ) );
				if ( $categories_list && pcurio_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'pcurio' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'pcurio' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'pcurio' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'pcurio' ), __( '1 Comment', 'pcurio' ), __( '% Comments', 'pcurio' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'pcurio' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->