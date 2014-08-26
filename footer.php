<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package pcurio
 */
?>

	</div><!-- #content -->

	<div class="fullBleed footerSection">
		<div class="footerContainer">

		<footer class="site-footer" role="contentinfo">
			
			<!-- Footer Widgets -->
			<section id="footer-sidebar">
				<!-- Footer Sidebar 1 -->
				<div id="footer-sidebar1" class="footerSidebar">
				<?php
				if(is_active_sidebar('footer-sidebar-1')){
				dynamic_sidebar('footer-sidebar-1');
				}
				?>
				</div>
				<!-- Footer Sidebar 2 -->
				<div id="footer-sidebar2" class="footerSidebar">
				<?php
				if(is_active_sidebar('footer-sidebar-2')){
				dynamic_sidebar('footer-sidebar-2');
				}
				?>
				</div>
				<!-- Footer Sidebar 3 -->
				<div id="footer-sidebar3" class="footerSidebar">
				<?php
				if(is_active_sidebar('footer-sidebar-3')){
				dynamic_sidebar('footer-sidebar-3');
				}
				?>
				</div>
				<!-- Footer Sidebar 4 -->
				<div id="footer-sidebar4" class="footerSidebar">
				<?php
				if(is_active_sidebar('footer-sidebar-4')){
				dynamic_sidebar('footer-sidebar-4');
				}
				?>
				</div>
			</section>
		</div> <!-- /.footerContainer -->

		<div class="container">
				<div class="site-info">
					<p>&copy; <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> | Theme by pcurio using Underscores</p>
				</div><!-- .site-info -->
		</div>

		</footer><!-- footer -->

	</div> <!-- ./fullBleed -->	

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
