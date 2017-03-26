<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row footer-inner">
			<div class="footer-about-section col-sm-12 col-lg-5">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://dev-deliver-hw.pantheonsite.io/wp-content/uploads/2017/03/deliver-1.png" alt="sitelogo"></a>
				<p><?php echo get_theme_mod('footer-about-description'); ?></p>
			</div>
			<div class="footer-contact-info col-sm-12 col-lg-3">
				<h4 class="footer-title">Contact info</h4>
				<p><?php echo get_theme_mod('footer-contact-info'); ?></p>
				<p><?php echo get_theme_mod('footer-contact-info-email'); ?></p>
				<p class="footer-contact-info-phone text-white"><?php echo get_theme_mod('footer-contact-info-phone'); ?></p>
			</div>
			<div class="footer-links col-sm-12 col-lg-2">
				<h4 class="footer-title">Quick Links</h4>
				<?php wp_nav_menu(
					array(
						'theme_location' 	=> 'footer',
						'depth'             => 2,
						'container'         => 'nav footer-nav',
						'container_id'      => 'navbar-collapse',
						'container_class'   => 'collapse navbar-collapse',
						'menu_class' 		=> 'nav navbar-nav',
						'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
						'menu_id'			=> 'footer-menu',
						'walker' 			=> new wp_bootstrap_navwalker()
					)
				); ?>
			</div>
			<div class="news-letter col-sm-12 col-lg-2">
				<h4 class="footer-title">Newsletter</h4>
			</div>
		</div>
		<div class="row site-info">
			<div class="copyrights col-md-6 col-sm-12">
				<span>Copyright 2013 <span class="text-white">Deliver</span>. All Rights Reserved.</span>
			</div>
			<div class="col-md-6 col-sm-12 site-privacy-info">
				<span><a href="">About</a>  /  <a href="#">Privacy Policy</a>  /  <a href="#">Contact</a></span>
			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
