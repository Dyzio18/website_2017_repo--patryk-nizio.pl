<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dyzio_theme
 */

get_header(); ?>

	<div class="container">
		<div class="row p-t-200"> <!-- POST FRAME -->

			<main id="main" class="col-lg-9 col-md-12 col-sm-12">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content','content' );
						//the_post_navigation();
						// If comments are open or we have at least one comment, load up the comment template.
						/*if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;*/
					endwhile; // End of the loop.
					?>
			</main><!-- #main -->
			<aside style="height:inherit; width:100%;" class="col-lg-3 col-md-12 col-sm-12">
				 	<?php get_sidebar(); ?>
			</aside>

		</div> <!--/ POST FRAME -->
	</div>
<?php
//
get_footer();
