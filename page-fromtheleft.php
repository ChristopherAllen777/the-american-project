<?php
/**
 * Template Name: From The Left Page
 *
 * Template for From The Left page.
 *
 * @package Harris Media Base Theme
 */
get_header(); ?>

<style>
h1.bigcitizen-header{
	font-family:'Raleway', 400;
	font-weight: bold;
	font-size: 40px;
	color: #19bc9c; /* aqua */
	text-transform: uppercase;
	letter-spacing: 2px;
}
h5.bigcitizen-header{
	font-family:'Raleway', 400;
	font-weight: bold;
	color: #19bc9c; /* aqua */
	text-transform: uppercase;
	letter-spacing: 2px;
}
h2.bigcitizen-subheader{
	font-family: Georgia;
}
h2.article-title {
    font-family: Georgia;
    font-size: 36px;
    font-weight: 500;
    line-height: 1.2;
}
h2.article-source {
	color: grey;
	font-family:'Raleway', 400;
	font-weight: bold;
	letter-spacing: 3px;
	text-transform: uppercase;
	font-size: 10pt;
}
#category-row h4 {
    font-family: Georgia;
    font-style: italic;
    line-height: 130%;
}
@media (max-width: 767px){
    h1.bigcitizen-header{
        text-align: center;
    }
    #category-row h4 {
        text-align: center;
    }
}
div#category-row {
    margin: 20px;
}
#category-icon {
    display: block;
    margin: auto;
}
#facebook-2 {
    color: #3b5998;
}
#twitter-2 {
    color: #4099ff;
}
@media (max-width: 767px){
    #facebook, #twitter {
    text-align: center;
}
}
#featured {
    background: #19bc9c; /* aqua */
    padding: 2px;
    text-align: center;
    margin-bottom: 5px;
}
#featured h4 {
    color: white;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-family: Montserrat, sans-serif;
    font-size: 25px;
    font-weight: 500;
}
#featured-row {
    background-color: #f4f4f4;
}
#image-col {
    margin: 0px;
    padding-left: 0px;
    padding-right: 0px;
}
#featured-article {
    padding: 40px;
}
.btn-info {
    color: #fff;
    background-color: #19bc9c; /* aqua */
    border-color: #19bc9c; /* aqua */
    border-radius: 22px;
    text-transform: uppercase;
    font-size: 10px;
}
.btn-info:hover {
    color: #fff;
    background-color: #84bbb0; /* Light aqua */
    border-color: #84bbb0; /* Light aqua */
}
@media (max-width: 767px){
    h5.bigcitizen-header {
        text-align: center;
    }
    h2.bigcitizen-subheader {
        text-align: center;
    }
    h2.article-source {
        text-align: center;
    }
    h2.article-title {
        text-align: center;
    }
    .btn-info {
        display: block;
        margin: auto;
    }
    .easy-wp-page-navigation.align-left.style-default {
        text-align: unset !important;
        margin-bottom: 20px;
        padding-left: 20px;
    }
}
#featured-row {
    background-color: #f4f4f4;
    margin-left: 15px;
    margin-right: 15px;
}
#articles-row {
    padding: 31px;
    max-width: 901px;
    margin: auto;
}
@media screen and (max-width: 991px) and (min-width: 767px){
    #articles-row {
    padding: 0px;
}
}
/*WP Easy Navigation */
.easy-wp-page-navigation a, .easy-wp-page-navigation span {
    display: inline-block;
    padding: 4px 8px;
    line-height: 1;
    border: 2px solid #18b491;
    border-radius: 14px;
    transition: all .2s;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    color: #18b491;
    background: #fff;
    text-decoration: none;
}

.easy-wp-page-navigation a:hover, .easy-wp-page-navigation span.current {
    background: #18b491;
    color: #fff;
}
.easy-wp-page-navigation.align-left.style-default {
    text-align: center;
    margin-bottom: 20px;
}
.fromtheleft-child {
    border-left: #19bc9c; /* aqua */
    border-width: 2px;
    border-left-style: solid;
    padding-left: 15px;
    margin-bottom: 45px;
    min-height: 78px;
    height: 41px;
}
#hover:hover #links {
    height: 5px;
    transform: translate(0px, 2px);
    visibility: visible;
    opacity: 1;
    transition: all 2s;
    transition-duration: .3s;
    transition-delay: 0s;
    transition-property: height;
}
h4.article-title {
    font-family: Georgia;
    font-size: 15px;
}
@media (max-width: 767px){
    #articles-row {
    padding: 0px;
    max-width: 901px;
    margin: auto;
}
}
@media (min-width: 1200px){
    h1.bigcitizen-header{
        margin-top: 52px;
    }
}
@media screen and (min-width: 991px) and (max-width: 1199px) {
        h1.bigcitizen-header{
        margin-top: 36px;
    }
}
</style>

<div class="container">

<div id="category-row" class="row">
    <div class="col-sm-2">
        <img id="category-icon" src="http://americastaging.wpengine.com/wp-content/uploads/2017/09/AP_asset_categorypage_circle-icon_600x600_from-the-left.png" alt="Big Citizen Icon">
    </div>
    <div class="col-sm-10">
        <h1 class="bigcitizen-header"> From The Left</h1>

        <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' );?>

          <?php endwhile; ?>

        <?php endif; ?>
        
        <hr></hr>
        
        <div class="col-sm-6">
            <h5><a id="facebook-2" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>">SHARE THIS PAGE ON FACEBOOK</a></h5>
        </div>
        <div class="col-sm-6">
            <h5><a id="twitter-2" target="blank" href="https://twitter.com/home?status=<?php the_title() ?> - <?php the_permalink() ?>">SHARE THIS PAGE ON TWITTER</a></h5>
        </div>
    </div>
</div>

<!-- Start Featured - From The Left Loop -->
<!-- ================================================ -->
    <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 5, 8, 4, 1, 3, 17, 18,
            'category__in' => 20,
            'posts_per_page'  => 1,
            // 'paged' => $paged
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
    ?>
    <div id="featured-row" class="row">

    <div id="featured">
        <h4>Featured</h4>
    </div>
        <div id="image-col" class="col-sm-4">
            <img id="feature-image" src="<?php the_field('post_image'); ?>" alt="Article Image"> 
        </div>
        <div id="featured-article" class="col-sm-8">
        <h5 class="bigcitizen-header">From The Left</h5>
            <div>
                <!-- <a id="article-link" href='<?php the_field('article_url')?>'> <h2 class="article-title"> <?php echo get_the_title();?></h2></a> -->
                <h2 class="article-title"> <?php echo get_the_title();?></h2>
                <h2 class="article-source">By <?php the_field('author') ?> &#9679; By <?php the_field('source') ?> &#9679; <?php the_field('date'); ?> </h2>
                <br>
                <!-- <button type="button" class="btn btn-info"> View Original Article > </button> -->
                 <a href="<?php the_field('article_url')?>" type="button" class="btn btn-info"> View Original Article <i id="arrow-rgt" class="fa fa-caret-right"></i> </a>
            </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
    <?php wp_reset_postdata(); ?>
    </div> <!-- featured-article -->
</div> <!-- featured-row -->

<br>
<div id="articles-row" class="row">
<!-- Start - From The Left Loop -->
<!-- ================================================ -->
<?php    
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 5, 7, 4, 8, 3, 1,
            'category__in' => 6,
            'posts_per_page'  => 10,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
    $the_query = new WP_Query( $args );     
?>    

<?php if ( have_posts() ) : while( $the_query->have_posts() ) : $i++; if( ($i % 2) == 0 ) : $the_query->next_post(); else : $the_query->the_post(); ?>

                    <div id="list" class="col-sm-6">
                    <div id="hover" class="fromtheleft-child">
                        <p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
                        <a id="article-link-left" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                        <div id="links">
                            <p style="display: inline-block;margin-right: 5px;"><a id="facebook" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('article_url')?>">SHARE ON FACEBOOK</a></p>
                            <p style="display: inline-block;"><a id="twitter" target="blank" href="https://twitter.com/home?status=<?php the_title() ?> - <?php the_field('article_url')?>">SHARE ON TWITTER</a></p>
                        </div>
                    </div>
</div>

<?php endif; endwhile; else: ?>    
Alternate content    
<?php endif; ?>    

<?php $i = 0; rewind_posts(); ?>

<?php if ( have_posts() ) : while( $the_query->have_posts() ) : $i++; if( ($i % 2) !== 0 ) : $the_query->next_post(); else : $the_query->the_post(); ?>    

                    <div id="list" class="col-sm-6">
                    <div id="hover" class="fromtheleft-child">
                        <p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
                        <a id="article-link-left" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                        <div id="links">
                            <p style="display: inline-block;margin-right: 5px;"><a id="facebook" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('article_url')?>">SHARE ON FACEBOOK</a></p>
                            <p style="display: inline-block;"><a id="twitter" target="blank" href="https://twitter.com/home?status=<?php the_title() ?> - <?php the_field('article_url')?>">SHARE ON TWITTER</a></p>
                        </div>
                    </div>
</div>
<?php endif; endwhile; else: ?>    
Alternate content    
<?php endif; ?>
<!-- ============================================ -->
</div>
<?php echo easy_wp_pagenavigation( $the_query ); ?>
</div> <!-- container -->

<?php get_footer(); ?>