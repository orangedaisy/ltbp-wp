<?php
/**
 * Template part for displaying investments.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ltbp-wp
 */

?>

<?php if ( is_single() ) : ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class( 'c-investment' ); ?>>
    <header class="c-investment__header"
            style="
                  background-image:
                    linear-gradient(
                      to bottom,
                      rgba(34,85,119,.6),
                      rgba(34,85,119,.6)
                    ),
                    url(<?php the_field('investment_image'); ?>);">
      <div class="o-row">
        <h1><?php the_field( 'investment_name' ); ?></h1>
        <div><?php the_field( 'investment_overview' ); ?></div>
      </div>
    </header><!-- .c-investment__header -->

    <div class="o-row c-investment__description">
      <?php the_field( 'investment_description' ); ?>
    </div><!-- .c-investment__description -->

    <footer class="o-row c-investment__footer">
      <?php ltbp_wp_entry_footer(); ?>
    </footer><!-- .c-investment__footer -->
  </article><!-- #post-## -->

<?php else : ?>

  <article class="c-investment-block"
            style="
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
        <div class="c-investment-block__overview">
          <?php the_field('investment_overview'); ?>
          <p>
            <a class="c-link c-link--white" href="<?php the_permalink(); ?>" title="<?php the_field('investment_name'); ?>">
              Read More
            </a>
          </p>
        </div>
        <p>
          <a class="c-button c-button--white" href="/contact" title="Book a Session">Book a Session</a>
        </p>
      </div>
    </div>
  </article>

<?php endif; ?>