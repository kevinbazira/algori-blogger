<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Algori_Blogger
 */

get_header(); ?>
	
	<div class="offset"></div>
	<div id="primary" class="content-area">
	
		 <div class="dark-wrapper page-title">
			<div class="container inner">
			  
			  <?php the_title( '<h1>', '</h1>' ); ?>
			  
			</div>
		  </div>
		  
		 <div class="light-wrapper">
			<div class="container inner">
			  <div class="row">
				<main id="main" class="site-main col-sm-8 content">
				  <div class="classic-blog">
				  
				  <?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
					
				  </div><!-- .classic-blog -->
				</main><!-- #main -->
				
				
				<?php get_sidebar(); ?>
				<!-- /col-sm-4 .sidebar --> 
				
				
			  </div>
			  <!-- /row --> 
			</div>
			<!-- /container --> 
		  </div>
		  <!-- /light-wrapper -->
	
	</div><!-- #primary -->

<?php
get_footer();
