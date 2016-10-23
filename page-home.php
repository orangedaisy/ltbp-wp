<?php
/**
 * The template for displaying the home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ltbp-wp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="o-row site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				//get_template_part( 'template-parts/content', 'page' );
        the_content();

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
