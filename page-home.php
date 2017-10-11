<?php
/**
 * Template Name: Home Page
 *
 * Template for a home page.
 *
 * @package Harris Media Base Theme
 */
get_header(); ?>

<style>
.ticker {
    padding: 20px;
    padding-left: 50px;
    padding-right: 50px;
    padding-bottom: 3px;
    background: #f3f3f3;
    margin-bottom: 20px;
}
#article-bin1 {
    padding: 0px;
    min-height: 560px;
}
#article-bin2 {
    padding-top: 30px;
    margin-bottom: 50px;
    min-height: 600px;
}
@media (max-width: 767px) {
    #article-bin1 {
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 0px;
        padding-bottom: 0px;
        margin-top: 30px;
    }
    #article-bin2 {
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 0px;
        padding-bottom: 0px;
        margin-bottom: 30px;
    }
    h3.bigcitizen-header {
        min-height: 0px !important
    }
    h3.roleinworld-header {
        min-height: 0px !important
    }
    h3.religiousliberty-header {
        min-height: 0px !important
    }
    h3.fromtheleft-header {
        min-height: 0px !important
    }
    h3.oncampus-header {
        min-height: 0px !important
    }
    h3.thinktanks-header {
        min-height: 0px !important
    }
}
/* Categories list CSS */

#categories {
    padding: 5px;
    padding-top: 25px;
}
/* header1 */

.header1 img {
    float: left;
    width: 30px;
    height: 40px;
    background: none;
}
.header1 h5 {
    position: relative;
    top: 3px;
    left: 18px;
    font-size: 15px;
    color: white;
}
.header1 {
    background: #9b59b6;
    /* purple */
    
    height: 62px;
    margin-top: 5px;
    margin-bottom: 5px;
    padding: 10px;
    border-radius: 3px;
}
/* header2 */

.header2 img {
    float: left;
    width: 30px;
    height: 30px;
    background: none;
}
.header2 h5 {
    position: relative;
    top: -1px;
    left: 18px;
    font-size: 15px;
    color: white;
}
.header2 {
    background: #e74c3c;
    /* orange */
    
    height: 55px;
    margin-top: 5px;
    margin-bottom: 5px;
    padding: 10px;
    border-radius: 3px;
}
/* header3 */

.header3 img {
    float: left;
    width: 30px;
    height: 30px;
    background: none;
}
.header3 h5 {
    position: relative;
    top: -1px;
    left: 18px;
    font-size: 15px;
    color: white;
}
.header3 {
    background: #EEAA16;
    /* yellow */
    
    height: 55px;
    margin-top: 5px;
    margin-bottom: 5px;
    padding: 10px;
    border-radius: 3px;
}
/* header4 */

.header4 img {
    float: left;
    width: 30px;
    height: 30px;
    background: none;
}
.header4 h5 {
    position: relative;
    top: -1px;
    left: 18px;
    font-size: 15px;
    color: white;
}
.header4 {
    background: #19bc9c;
    /* aqua */
    
    height: 55px;
    margin-top: 5px;
    margin-bottom: 5px;
    padding: 10px;
    border-radius: 3px;
}
/* header5 */

.header5 img {
    float: left;
    width: 30px;
    height: 30px;
    background: none;
}
.header5 h5 {
    position: relative;
    top: -1px;
    left: 18px;
    font-size: 15px;
    color: white;
}
.header5 {
    background: #7ec642;
    /* yellowgreen */
    
    height: 55px;
    margin-top: 5px;
    margin-bottom: 5px;
    padding: 10px;
    border-radius: 3px;
}
/* header6 */

.header6 img {
    float: left;
    width: 30px;
    height: 30px;
    background: none;
}
.header6 h5 {
    position: relative;
    top: -1px;
    left: 18px;
    font-size: 15px;
    color: white;
}
.header6 {
    background: #2b53aa;
    /* royalblue */
    
    height: 55px;
    margin-top: 5px;
    margin-bottom: 5px;
    padding: 10px;
    border-radius: 3px;
}
/* header7 */

.header7 img {
    float: left;
    width: 30px;
    height: 30px;
    background: none;
}
.header7 h5 {
    position: relative;
    top: -1px;
    left: 18px;
    font-size: 15px;
    color: white;
}
.header7 {
    background: #f48088;
    /* lightcoral */
    
    height: 55px;
    margin-top: 5px;
    margin-bottom: 5px;
    padding: 10px;
    border-radius: 3px;
}
@media (min-width: 1200px) {
    .col-sm-4 {
        width: 33.33333333%;
        padding-left: 63px;
        padding-right: 63px;
    }
}
@media (max-width: 767px) {
    .col-sm-4 {
        margin-bottom: 67px;
    }
}
#grow:hover {
    -webkit-transition: all 200ms ease-out;
    -webkit-transform: scale(1.05);
    -ms-transition: all 200ms ease-out;
    -ms-transform: scale(1.05);
    -moz-transition: all 200ms ease-out;
    -moz-transform: scale(1.05);
    transition: all 200ms ease-out;
    transform: scale(1.05);
}
.carousel {
    position: relative;
    min-height: 165px;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 30px;
    padding-right: 20px;
    text-align: center;
}
.carousel-indicators li {
    border: 1px solid #112c41;
    bottom: -1px;
}
.carousel-indicators .active {
    margin: 0;
    width: 12px;
    height: 12px;
    background-color: #112c41;
}
@media (max-width: 767px) {
    .container {
        margin-right: auto;
        margin-left: auto;
        padding-left: 0px;
        padding-right: 0px;
    }
}
/* youtube-video */

@media screen and (max-width: 1199px) and (min-width: 992px) {
    #youtube-video {
        padding-top: 60px;
        padding-left: 46px;
    }
}
@media screen and (max-width: 991px) and (min-width: 768px) {
    #youtube-video {
        padding-top: 92px;
        padding-left: 46px;
    }
}
.col-sm-2.hidden-xs {
    width: 15%;
}
/*Social Links Hover*/

/*#facebook {
    color: #3b5998;
    font-size: 10px;
    border: #3b5998;
    border-style: solid;
    border-width: 1px;
    padding: 5px;
    border-radius: 11px;
}
#twitter {
    color: #4099ff;
    font-size: 10px;
    border: #4099ff;
    border-style: solid;
    border-width: 1px;
    padding: 5px;
    border-radius: 11px;
}
#links {
    height: 0px;
    visibility: hidden;
    opacity: 0;
    transition: all .6s .125s;
}
#hover:hover #links {
    height: 60px;
    visibility: visible;
    opacity: 1;
    transition: all 2s;
    transition-duration: .3s;
    transition-delay: 0s;
    transition-property: height;
}*/
</style>


<div class="container">

  <div id="myCarousel" class="carousel slide hidden-sm hidden-md hidden-lg" data-ride="carousel">
    <!-- Indicators -->
		<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">


    <!-- Mobile Ticker Articles -->
		<!-- Ticker Article #1 -->
<!-- ======================================= -->
      <div class="item active">
			<div id="ticker" class="col-xs-12">
				<div class="article-bigcitizen">
				<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 5, 8, 4, 1,
            'category__in' => 3,
            'posts_per_page'  => 1,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>
					<div class="bigcitizen-child">
            <h4 id="big"><a id="big-a" href="/categories/on-conservatism/"> On Conservatism </a></h4>
						<a id="article-link-big" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
          </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
					<?php wp_reset_postdata(); ?>
							</div>
						</div> <!-- col-xs-12 -->

      </div> <!-- item -->

<!-- Ticker Article #2 -->
<!-- ======================================= -->
      <div class="item">

			<div id="ticker" class="col-xs-12">
				<div class="article-roleinworld">
				<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 5, 8, 3, 1,
            'category__in' => 4,
            'posts_per_page'  => 1,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>
					<div class="roleinworld-child">
            <h4 id="us"><a id="us-a" href="categories/us-role-in-the-world/"> U.S. Role In The World </a></h4>
						<a id="article-link-world" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
          </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
					<?php wp_reset_postdata(); ?>
							</div>
						</div> <!-- col-xs-12 -->
      </div>

<!-- Ticker Article #3 -->
<!-- ======================================= -->
      <div class="item">
			<div id="ticker" class="col-xs-12">
			<div class="article-religiousliberty">
				<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 4, 8, 3, 1,
            'category__in' => 5,
            'posts_per_page'  => 1,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>
					<div class="religiousliberty-child">
            <h4 id="religious"><a id="religious-a" href="/categories/religious-liberty/"> Religious Liberty </a></h4>
						<a id="article-link-religious" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
          </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
					<?php wp_reset_postdata(); ?>
							</div>
						</div> <!-- col-xs-12 -->
      </div>
    </div> <!-- carousel -->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="ticker hidden-xs">
	<div class="row">

	<div class="col-sm-2 hidden-xs">
  </div>

	<div id="ticker" class="col-sm-3">
		<div class="article-bigcitizen">
		<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 5, 8, 4, 1,
            'category__in' => 3,
            'posts_per_page'  => 1,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>
					<div class="bigcitizen-child">
            <p id="big"><a id="big-ticker" href="/categories/on-conservatism/"> On Conservatism </a></p>
						<a id="article-link-big" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>
		</div>
	</div> <!-- col-sm-4 -->
<!-- =================================================== -->
	<div id="ticker" class="col-sm-3">
		<div class="article-roleinworld">
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 5, 8, 3, 1,
            'category__in' => 4,
            'posts_per_page'  => 1,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>

					<div class="roleinworld-child">
            <p id="us"><a id="us-ticker" href="categories/us-role-in-the-world/"> U.S. Role In The World </a></p>
						<a id="article-link-world" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>
		</div>
	</div> <!-- col-sm-4 -->
<!-- =================================================== -->
<div id="ticker" class="col-sm-3">
		<div class="article-religiousliberty">
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 4, 8, 3, 1,
            'category__in' => 5,
            'posts_per_page'  => 1,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>

					<div class="religiousliberty-child">
            <p id="religious"><a id="religious-ticker" href="/categories/religious-liberty/"> Religious Liberty </a></p>
						<a id="article-link-religious" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>
		</div>
	</div> <!-- col-sm-4 -->

	<div class="col-sm-2 hidden-xs">
	</div>
	
	</div> <!-- /.row -->
</div> <!-- /.ticker -->

<div class="container">
<div class="row">
	<div id="categories" class="col-xs-4 hidden-xs">
		<div class="categories-list">

				<a id="cat-link" href="categories/on-conservatism/">
				<div id="grow" class="header1">
					<img src="http://americastaging.wpengine.com/wp-content/uploads/2017/09/American-Project_asset_homepage_category-icon_big-government-1.png" alt="logo" />
					<h5 id="header1"> On Conservatism </h5>
				</div></a>

				<a id="cat-link" href="categories/us-role-in-the-world/">
				<div id="grow" class="header2">
					<img src="http://americastaging.wpengine.com/wp-content/uploads/2017/09/American-Project_asset_homepage_category-icon_us-role.png" alt="logo" />
					<h5 id="header1"> U.S. Role In The World </h5>
				</div></a>
				  
				<a id="cat-link" href="categories/religious-liberty/">
				<div id="grow" class="header3">
					<img src="http://americastaging.wpengine.com/wp-content/uploads/2017/10/American-Project_asset_homepage_category-icon_religious-liberty-new.png" alt="logo" />
					<h5 id="header1"> Religious Liberty </h5>
				</div></a>
				
				<a id="cat-link" href="categories/from-the-left/">
				<div id="grow" class="header4">
					<img src="http://americastaging.wpengine.com/wp-content/uploads/2017/09/American-Project_asset_homepage_category-icon_from-the-left.png" alt="logo" />
					<h5 id="header1"> From The Left </h5>
				</div></a>
				
				<a id="cat-link" href="categories/on-campus-viewpoint-diversity/">
				<div id="grow" class="header5">
					<img src="http://americastaging.wpengine.com/wp-content/uploads/2017/09/American-Project_asset_homepage_category-icon_on-campus.png" alt="logo" />
					<h5 id="header1"> On Campus Viewpoint Diversity </h5>
				</div></a>			
				  
				<a id="cat-link" href="categories/thinktanks-research/">
				<div id="grow" class="header6">
					<img src="http://americastaging.wpengine.com/wp-content/uploads/2017/09/American-Project_asset_homepage_category-icon_thinktanks.png" alt="logo" />
					<h5 id="header1"> Thinktanks & Research </h5>
				</div></a>
				
				<a id="cat-link" href="categories/book-reviews/">
				<div id="grow" class="header7">
					<img src="http://americastaging.wpengine.com/wp-content/uploads/2017/09/American-Project_asset_homepage_category-icon_book-reviews-1.png" alt="logo" />
					<h5 id="header1"> Book Reviews </h5>
				</div></a>	
		</div>

	</div>
	<div id="youtube-video" class="col-xs-12 col-sm-8">

<!-- 		<div class="embed-responsive embed-responsive-16by9">
			<iframe style="display: block; margin: auto;" align="center"  src="https://www.youtube.com/embed/ruc_MoYST38" frameborder="10" allowfullscreen></iframe>
		</div> -->
<!--     <div class="embed-responsive embed-responsive-16by9"> -->
            <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' );?>

          <?php endwhile; ?>

        <?php endif; ?>
<!--     </div> -->
	</div>
</div> <!-- row -->
<!-- Articles  -->
<!-- ================================================ -->
<div id="article-bin1" class="row">

<!-- Start - On Conservatism Loop -->
<!-- ================================================ -->
	<div class="col-sm-4">
		<div class="article-bigcitizen">
			<h3 class="bigcitizen-header"><a href="categories/on-conservatism/"> On Conservatism </a></h3>
			<br>
		<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 5, 8, 4, 1,
            'category__in' => 3,
            'posts_per_page'  => 3,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>

					<div id="hover" class="bigcitizen-child">
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
            <a id="article-link-big" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                <div id="links">
                    <p><a id="facebook" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('article_url')?>">SHARE THIS ARTICLE ON FACEBOOK</a></p>
                    <p><a id="twitter" target="blank" href="https://twitter.com/home?status=<?php the_title() ?> - <?php the_field('article_url')?>">SHARE THIS ARTICLE ON TWITTER</a></p>
                </div>
          </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>
		</div>
		<a href="/categories/on-conservatism/" type="button" class="btn btn-info"> SEE MORE <i id="arrow-rgt" class="fa fa-caret-right"></i> </a>
	</div> <!-- col-sm-4 -->
<!-- ================================================ -->


<!-- Start U.S. Role In The World Loop -->
<!-- ================================================ -->
	<div class="col-sm-4">
		<div class="article-roleinworld">
			<h3 class="roleinworld-header"><a href="categories/us-role-in-the-world/"> U.S. Role In The World</a></h3>
			<br>
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 5, 8, 3, 1,
            'category__in' => 4,
            'posts_per_page'  => 3,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>

					<div id="hover"  class="roleinworld-child">
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
						<a id="article-link-world" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                <div id="links">
                    <p><a id="facebook" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('article_url')?>">SHARE THIS ARTICLE ON FACEBOOK</a></p>
                    <p><a id="twitter" target="blank" href="https://twitter.com/home?status=<?php the_title() ?> - <?php the_field('article_url')?>">SHARE THIS ARTICLE ON TWITTER</a></p>
                </div>
          </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>
		</div>
		<a href="categories/us-role-in-the-world/" type="button" class="btn btn-info"> SEE MORE <i id="arrow-rgt" class="fa fa-caret-right"></i> </a>
	</div> <!-- col-sm-4 -->
<!-- ================================================ -->


<!-- Start Religious Liberty Loop -->
<!-- ================================================ -->
	<div class="col-sm-4">
		<div class="article-religiousliberty">
			<h3 class="religiousliberty-header"><a href="categories/religious-liberty/"> Religious Liberty </a></h3>
			<br>
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 4, 8, 3, 1,
            'category__in' => 5,
            'posts_per_page'  => 3,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>

					<div id="hover" class="religiousliberty-child">
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
						<a id="article-link-religious" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                <div id="links">
                    <p><a id="facebook" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('article_url')?>">SHARE THIS ARTICLE ON FACEBOOK</a></p>
                    <p><a id="twitter" target="blank" href="https://twitter.com/home?status=<?php the_title() ?> - <?php the_field('article_url')?>">SHARE THIS ARTICLE ON TWITTER</a></p>
                </div>       
          </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>
		</div>
		<a href="categories/religious-liberty/" type="button" class="btn btn-info"> SEE MORE <i id="arrow-rgt" class="fa fa-caret-right"></i>  </a>
	</div> <!-- col-sm-4 -->
<!-- ================================================ -->
</div> <!-- row -->

<div id="article-bin2" class="row">

<!-- Start - From The Left Loop -->
<!-- ================================================ -->
	<div class="col-sm-4">
		<div class="article-fromtheleft">
			<h3 class="fromtheleft-header"><a href="categories/from-the-left/"> From The Left </a></h3>
			<br>
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 5, 7, 4, 8, 3, 1,
            'category__in' => 6,
            'posts_per_page'  => 3,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>

					<div id="hover" class="fromtheleft-child">
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
						<a id="article-link-left" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                <div id="links">
                    <p><a id="facebook" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('article_url')?>">SHARE THIS ARTICLE ON FACEBOOK</a></p>
                    <p><a id="twitter" target="blank" href="https://twitter.com/home?status=<?php the_title() ?> - <?php the_field('article_url')?>">SHARE THIS ARTICLE ON TWITTER</a></p>
                </div>          
          </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>			
		</div>
		<a href="categories/from-the-left/" type="button" class="btn btn-info"> SEE MORE <i id="arrow-rgt" class="fa fa-caret-right"></i> </a>
	</div> <!-- col-sm-4 -->
<!-- ================================================ -->

<!-- Start - On Campus / Viewpoint Diversity Loop -->
<!-- ================================================ -->
	<div class="col-sm-4">
		<div class="article-oncampus">
			<h3 class="oncampus-header"><a href="categories/on-campus-viewpoint-diversity/"> On Campus / Viewpoint Diversity </a></h3>
			<br>
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 5, 4, 8, 3, 1,
            'category__in' => 7,
            'posts_per_page'  => 3,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>

					<div id="hover" class="oncampus-child">
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
						<a id="article-link-campus" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                <div id="links">
                    <p><a id="facebook" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('article_url')?>">SHARE THIS ARTICLE ON FACEBOOK</a></p>
                    <p><a id="twitter" target="blank" href="https://twitter.com/home?status=<?php the_title() ?> - <?php the_field('article_url')?>">SHARE THIS ARTICLE ON TWITTER</a></p>
                </div>          
          </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>			
		</div>
		<a href="categories/on-campus-viewpoint-diversity/" type="button" class="btn btn-info"> SEE MORE <i id="arrow-rgt" class="fa fa-caret-right"></i>  </a>
	</div> <!-- col-sm-4 -->
<!-- ================================================ -->

<!-- Start - Thinktanks & Research Loop -->
<!-- ================================================ -->
	<div class="col-sm-4">
		<div class="article-thinktanks">
			<h3 class="thinktanks-header"><a href="categories/thinktanks-research/"> Thinktanks & Research </a></h3>
			<br>
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'category__not_in' => 9, 6, 7, 4, 5, 3, 1,
            'category__in' => 8,
            'posts_per_page'  => 3,
            'paged' => $paged
          );
          $pagination = get_the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Newer', 'textdomain' ),
                'next_text' => __( 'Older', 'textdomain' ),
            ) );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                  $the_query->the_post();
        	?>

					<div id="hover" class="thinktanks-child">
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
						<a id="article-link-tank" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                <div id="links">
                    <p><a id="facebook" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('article_url')?>">SHARE THIS ARTICLE ON FACEBOOK</a></p>
                    <p><a id="twitter" target="blank" href="https://twitter.com/home?status=<?php the_title() ?> - <?php the_field('article_url')?>">SHARE THIS ARTICLE ON TWITTER</a></p>
                </div>          
          </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>			
		</div>
		<a href="categories/thinktanks-research/" type="button" class="btn btn-info"> SEE MORE <i id="arrow-rgt" class="fa fa-caret-right"></i>  </a>
	</div> <!-- col-sm-4 -->
<!-- ================================================ -->

</div> <!-- row -->
</div> <!-- container -->

<?php get_footer(); ?>