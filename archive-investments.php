<?php
/**
 * The template for displaying investment options.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ltbp-wp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that
         * will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    <?php get_template_part( 'template-parts/book-session-block' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
