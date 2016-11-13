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

      <h1>Hello world!</h1>

      <?php
        $args = array( 'post_type' => 'investments' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>

        <article class="c-investment">

          <h1><?php the_field('investment_name'); ?></h1>

        </article>

      <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
