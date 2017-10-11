<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Harris Media Base Theme
 */

get_header(); ?>
<style>
html, body {
    overflow-x: hidden;
}
#search {
    font-family:'Raleway', 400;
    font-weight: bolder;
    color: #1d315a;
    text-align: center;
    letter-spacing: 4px;
    text-transform: uppercase;
    font-size: 41px;
}
form.search-form {
    text-align: center;
}
div#search-row {
    padding: 50px;
}
#search-row h4 {
    text-align: center;
    font-family: Georgia;
    font-style: italic;
    line-height: 130%;
}
input.search-field {
    border-color: #aeaeae;
    border-style: solid;
    border-radius: 2px;
    height: 35px;
    width: 100%;
    margin-right: 357px;
}
input.search-submit {
    border-radius: 19px;
    border-color: #26add9;
    background: #26add9;
    color: white;
    padding: 6px;
    width: 94px;
    margin-left: 20px;
    letter-spacing: 2px;
}
/*WP Easy Navigation */
.easy-wp-page-navigation a, .easy-wp-page-navigation span {
    display: inline-block;
    padding: 4px 8px;
    line-height: 1;
    border: 2px solid #00183a;
    border-radius: 14px;
    transition: all .2s;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    color: #00183a;
    background: #fff;
    text-decoration: none;
}

.easy-wp-page-navigation a:hover, .easy-wp-page-navigation span.current {
    background: #00183a;
    color: #fff;
}
.easy-wp-page-navigation.align-left.style-default {
    text-align: center;
    margin-bottom: 20px;
}
#filter-row {
    margin-top: 70px;
    margin-bottom: 20px;
}
input.search-submit {
    color: #fff;
    background-color: #45d4f2;
    border-color: #45d4f2;
    border-radius: 25px;
    letter-spacing: 2px;
    padding-top: 4px;
    padding-bottom: 4px;
    text-transform: uppercase;
    margin-top: 6px;
    /* padding-left: 20px; */
}
</style>
	<div class="container posts archive">
		

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="row">

					<div class="col-xs-12">

						<?php get_template_part( 'content', 'archive' );?>

					</div>

				</div>

			<?php endwhile; ?>

			<div class="row">

				<div class="col-xs-12">

					<?php hm_posts_navigation(); ?>

				</div>

			</div>

		<?php endif; ?>

	</div><!-- .container -->

<?php get_footer(); ?>
