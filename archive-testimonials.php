<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ltbp-wp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="o-row">
      <?php
      if ( have_posts() ) : ?>

        <h1 class="text-center entry-title">Testimonials</h1>

        <?php
        /* Start the Loop */
        while ( have_posts() ) : the_post(); ?>

        <article class="c-testimonial">
          <?php if ( get_field( 'testimonial_investment' ) ) : ?>
            <h6 class="c-testimonial__investment"><?php the_field( 'testimonial_investment' ) ?></h6>
          <?php endif; ?>
          <div class="c-testimonial__body">
            <?php the_field( 'testimonial_body' ); ?>
          </div>
          <p class="c-testimonial__customer">&mdash; <?php the_field( 'testimonial_customer' ) ?></p>
        </article>

        <?php endwhile; ?>

      <?php else :

        get_template_part( 'template-parts/content', 'none' );

      endif; ?>
      </div>

    <?php get_template_part( 'template-parts/book-session-block' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
