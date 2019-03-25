<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Algori_Blogger
 */

?>

	</div><!-- #content -->
	
	<footer id="colophon" class="site-footer black-wrapper">
		<div class="site-info">
			
			<div class="sub-footer">
			  <div class="container">
			  <?php
				if (has_nav_menu('menu-2')) {
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_class' => 'footer-menu pull-left',
							'menu_id'        => 'footer-menu',
						) );
					}
			  ?>
				<p class="pull-right">
					<?php
						/* translators: %s: Proudly powered by . */
						printf( ' %s', esc_html__( 'Proudly powered by', 'algori-blogger' ) );
					?>
					
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'algori-blogger' ) ); ?>"><u><?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( ' %s', esc_html__( 'WordPress', 'algori-blogger' ) );
					?></u></a>
					
					<span class="sep"> | </span>
					<?php
						$my_theme = wp_get_theme();
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'algori-blogger' ), 'Algori Blogger', '<a href="' . esc_html($my_theme->get( 'AuthorURI' )) .'"><u>Kevin Bazira</u></a>' );
					?>
				</p>
			  </div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
	
	
	
	</div><!-- body-wrapper --> 
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
