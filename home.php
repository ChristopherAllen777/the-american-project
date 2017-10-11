<?php
/**
 * Template Name: Investments Page
 *
 * Template for a custom query.
 *
 * @package Harris Media Base Theme
 */

get_header(); ?>

    <div class="container investments">
        <div class="row">
            <?php if ( have_posts() ) : ?>
            	<?php while ( have_posts() ) : the_post(); ?>
        			<?php echo get_template_part('partials/investment_loop'); ?>
            	<?php endwhile; ?>
            <?php endif; ?>
        </div><!-- .row -->
    </div><!-- .container -->

<?php get_footer(); ?>