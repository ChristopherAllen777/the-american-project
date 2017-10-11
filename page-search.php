<?php
/**
 * Template Name: Search Page
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
h1 {
    font-family:'Raleway', 400;
    font-weight: bolder;
    color: #1d315a;
    text-align: center;
    letter-spacing: 4px;
    text-transform: uppercase;
    font-size: 41px;
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
</style>
<div class="container">
    <div id="search-row" class="row">
        <h1> Search </h1>
        <h4> Search the American Project for an article using the search field below:</h4>
        <div class="col-sm-10">
        <?php get_search_form(); ?>
        </div>
        <div class="col-sm-2">
            <!-- Search > Button -->
        </div>
    </div>

<div class="row">
	<div class="col-sm-6">
		<!-- Facebook  -->
	</div>
	<div class="col-sm-6">
		<!-- Twitter -->
	</div>
</div>

</div><!-- container -->

<?php get_footer(); ?>