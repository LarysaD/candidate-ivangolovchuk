<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Vankoover
 * @since Vankoover
 */
?>

		</div><!-- .site-content -->

</div><!-- .site-inner -->
		<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="site-inner">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'vankoover' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the vankoover footer text for footer customization.
					 *
					 * @since Vankoover
					 */
					do_action( 'vankoover_credits' );
				?>
				<span class="foo-rights">Ⓒ <?php echo date( 'Y' ); ?> All rights reserved</span>
				<div class="bottomMenu">
                    <nav><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?></nav>   
                </div>
			</div><!-- .site-info -->
                
			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'vankoover' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

            <div id="powered_by">
                <span>Powered by</span>
                <a href="http://www.intechdynamics.com/">
                    <img class="powered-img" src="/wp-content/uploads/2016/06/logo2.png" />
                </a>
            </div>
                </div>
		</footer><!-- .site-footer -->
	


<?php wp_footer(); ?>
</body>
</html>
