<?php
/**
 * Template Name: Search Page Wordpress
 *
 * Template for Search page.
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
    padding: 15px;
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

/*Search Bar*/
input#s {
    border-color: #aeaeae;
    border-style: solid;
    border-radius: 2px;
    height: 35px;
    width: 60%;
}
input#searchsubmit {
    color: #fff;
    background-color: #45d4f2;
    border-color: #45d4f2;
    border-radius: 25px;
    letter-spacing: 2px;
    padding-top: 4px;
    padding-bottom: 4px;
    text-transform: uppercase;
    margin-top: 6px;
}
#search-row {
    text-align: center;
}
#filter {
    background: #f1f1f1;
    padding-top: 10px;
    padding-bottom: 10px;
    color: black;
}
select#cat {
    height: 40px;
    background-color: #f1f1f1;
/*    border: none;*/
}
input#s::placeholder {
    text-align: -webkit-center;
}
#filter-options-row {
    background: #f1f1f1;
}
@media (max-width: 767px) {
    select#cat {
    display: block;
    margin: auto;
}
    #filter {
        text-align: center;
    }
}
#article-bin {
    padding-left: 100px;
    padding-right: 100px;
/*    text-align: center;*/
}
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 2px solid #eee;
}
/*Sticky Footer*/
.container-search {
min-height: calc(66vh - 35px);
    margin-left: 130px;
    margin-right: 130px;
}
@media (max-width: 767px) {
    .container-search {
    min-height: calc(66vh - 35px);
    margin-left: 20px;
    margin-right: 20px;
}
#article-bin {
    padding-left: 0px;
    padding-right: 0px;
/*    text-align: center;*/
}
}
footer {
    background-color: #001942;
    padding: 2em 0;

}
</style>
<div class="container">
    <div id="search-row" class="row">
        <h1 id="search"> Search </h1>
        <h4> Search the American Project for an article using the search field below:</h4>
    </div>
</div><!-- container -->

	<div class="container-search">

		<?php if ( have_posts() ) : ?>
			<div class="row">
				<div class="col-xs-12">
					
<!-- ===================================================================================== -->
<form role="search" method="get" id="searchform" action="<?php bloginfo('siteurl'); ?>">

  <div id="search-row" class="row">
    <label class="screen-reader-text" for="s">Search for:</label>

    <input type="text" placeholder="Search for an Article" value="" name="s" id="s" /> 

    <input type="submit" id="searchsubmit" value="Search >" /> 
  </div>

  <div id="filter-options-row" class="row">
        <div id="filter" class="col-sm-8">

            <?php wp_dropdown_categories( 'show_option_all=All Categories' ); ?> 
            <!-- <input type="submit" id="searchsubmit" value="Update >" />  -->
            

        </div>
        <div id="filter" class="col-sm-4">
            <?php if($wp_query->post_count > 0): ?>
                SHOWING <?php echo $wp_query->post_count ?> OF <?php echo $wp_query->found_posts; ?> RESULTS
            <?php elseif($wp_query->post_count === 0): ?>
                SHOWING 0 OF <?php echo $wp_query->found_posts; ?> RESULTS
            <?php endif; ?>
        </div>
  </div>
</form>              	
<!-- ===================================================================================== -->

					
				</div>
			</div>
			<hr>
            <p style="font-size: 11px; font-style: italic;" class="pagetitle">Search Term - <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); wp_reset_query(); ?></p>
		<?php while ( have_posts() ) : the_post(); ?>
				<div id="article-bin" class="row">
					<div class="col-xs-12">
						<?php get_template_part( 'content', 'archive' );?>
						<!-- <?php post_class(); ?> -->
					</div>
				</div>
		<?php endwhile; ?>
			<div class="row">
				<div class="col-xs-12">
					<?php echo easy_wp_pagenavigation(); ?>
				</div>
			</div>
		<?php else: ?>
			<div class="row">
				<div class="col-xs-12">
					<?php get_template_part( 'content', 'none' ); ?>
				</div>
			</div>
		<?php endif; ?>
	</div><!-- .container -->

<?php get_footer(); ?>
