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
        $args = array( 'post_type' => 'investments' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>

        <article class="c-investment-block" style="
                                      background-image:
                                        linear-gradient(
                                          to bottom,
                                          rgba(34,85,119,.6),
                                          rgba(34,85,119,.6)
                                        ),
                                        url(<?php the_field('investment_image'); ?>);">

          <div class="o-row g-grid g-grid--columns">
            <div class="c-investment-block__content">
              <h1 class="c-investment-block__name"><?php the_field('investment_name'); ?></h1>
              <div class="c-investment-block__overview"><?php the_field('investment_overview'); ?></div>
              <p>
                <a class="c-link c-link--white" href="<?php esc_url( get_permalink() ); ?>" title="<?php the_field('investment_name'); ?>">
                  Read More
                </a>
              </p>
              <p>
                <a class="c-button c-button--white" href="/contact" title="Book a Session">Book a Session</a>
              </p>
            </div>
          </div>

        </article>

      <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
