<?php
/**
 * Template Name: Advisory Page
 *
 * Template for a custom query.
 *
 * @package Harris Media Base Theme
 */

get_header(); ?>

<style type="text/css">
  p {
    color: black;
}

.advisory-preview .street {
  color: black !important;
  font-size: 11pt;
}
@media (max-width: 1200px) {
    .advisory-preview {
}
}
.advisory-preview .street:hover {
  color: #ff7012 !important;
}
.tag {
  color: #ff7012 !important;
}
@media screen and (max-width: 991px) and (min-width: 767px) {
.advisory-preview {
    margin: 15px 0;
    height: 333px;
  }
  .container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 0px;
    padding-right: 0px;
}
}
@media screen and (max-width: 1200px) and (min-width: 992px) {
.advisory-preview {
    margin: 15px 0;
    height: 397px;
  }
  .container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 0px;
    padding-right: 0px;
}
}
@media screen and (max-width: 4000px) and (min-width: 1201px){
    .container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}
}

.advisory-preview .wrapper .overlay p {
    text-align: center;
    position: relative;
    color: #ffffff;
    margin-top: 35%;
    margin-bottom: 25px;
}
</style>

    <div class="container advisory">
        <div class="row">
        	<div class="col-md-12">
				<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php the_content();?>

						<?php endwhile; ?>

					<?php endif; ?>

          <!-- Advisory Listings Start Loop -->

				    <div class="container advisory-listings">
        				<div class="row">
							<?php echo get_template_part('partials/advisory-listings_loop'); ?>
        				</div><!-- .row -->
   					</div><!-- .container -->

          <!-- Advisory Listings End Loop -->
   					
			</div>
        </div><!-- .row -->
    </div><!-- .container -->

<?php get_footer(); ?>