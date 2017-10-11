<?php
/**
 * @package Harris Media Base Theme
 */
?>
<style>
    h1 {
    font-family: Georgia;
  }
#article {
	padding: 30px;
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
.col-xs-12 {
    margin-bottom: 75px;
}
#big-citizen-big-goverment-articles {
	padding: 15px;
	border-style: solid;
	border-width: 2px;
	border-color: #9b59b6; /* purple */
}
#usroleintheworld-articles {
	padding: 15px;
	border-style: solid;
	border-width: 2px;
	border-color: #e74c3c; /* orange */
}
#religiousliberty-articles {
	padding: 15px;
	border-style: solid;
	border-width: 2px;
	border-color: #eeaa16; /* yellow */
}
#fromtheleft-articles {
	padding: 15px;
	border-style: solid;
	border-width: 2px;
	border-color: #19bc9c; /* aqua */
}
#oncampus-viewpointdiversity-articles {
	padding: 15px;
	border-style: solid;
	border-width: 2px;
	border-color: #7ec642; /* yellowgreen */
}
#thinktanks-and-research-articles {
	padding: 15px;
	border-style: solid;
	border-width: 2px;
	border-color: #2b53aa; /* royalblue */
}
#bookreviews-articles {
	padding: 15px;
	border-style: solid;
	border-width: 2px;
	border-color: #f48088; /* light coral */
}
#similar-articles {
	padding: 15px;
	border-style: solid;
	border-width: 2px;
	border-color: black;
}
.wrapper {
  margin-top: 70px;
  margin-bottom: 70px;
}
div#article {
    padding-right: 30px;
}
@media (max-width: 767px) {
div#article {
    padding-right: 0px !important;
}
}


.btn-purple {
    color: #fff;
    background-color: #9b59b6; /* purple */
    border-color: #9b59b6; /* purple */
    border-radius: 25px;
	  letter-spacing: 2px;
	  padding-top: 4px;
    padding-bottom: 4px;
    padding-right: 20px;
    padding-left: 20px;
}
.btn-purple:hover {
    color: #fff;
    background-color: #b287c3; /* light purple */
    border-color: #b287c3; /* light purple */
}
.btn-purple:active {
    color: #fff;
    background-color: #b287c3; /* light purple */
    border-color: #b287c3; /* light purple */
}
.btn-orange {
    color: #fff;
    background-color: #e74c3c; /* orange */
    border-color: #e74c3c; /* orange */
    border-radius: 25px;
	  letter-spacing: 2px;
	  padding-top: 4px;
    padding-bottom: 4px;
    padding-right: 20px;
    padding-left: 20px;
}
.btn-orange:hover {
    color: #fff;
    background-color: #e08b82; /* light orange */
    border-color: #e08b82; /* light orange */
}
.btn-yellow {
    color: #fff;
    background-color: #eca017; /* yellow */
    border-color: #eca017; /* yellow */
    border-radius: 25px;
    letter-spacing: 2px;
    padding-top: 4px;
    padding-bottom: 4px;
    padding-right: 20px;
    padding-left: 20px;
}
.btn-yellow:hover {
    color: #fff;
    background-color: #e6c07c; /* light yellow */
    border-color: #e6c07c; /* light yellow */
}
.btn-aqua {
    color: #fff;
    background-color: #18b491; /* aqua */
    border-color: #18b491; /* aqua */
    border-radius: 25px;
    letter-spacing: 2px;
    padding-top: 4px;
    padding-bottom: 4px;
    padding-right: 20px;
    padding-left: 20px;
}
.btn-aqua:hover {
    color: #fff;
    background-color: #7abdae; /* light aqua */
    border-color: #7abdae; /* light aqua */
}
.btn-yellowgreen {
    color: #fff;
    background-color: #73be3a; /* yellowgreen */
    border-color: #73be3a; /* yellowgreen */
    border-radius: 25px;
    letter-spacing: 2px;
    padding-top: 4px;
    padding-bottom: 4px;
    padding-right: 20px;
    padding-left: 20px;
}
.btn-yellowgreen:hover {
    color: #fff;
    background-color: #9abf7d; /* light yellowgreen */
    border-color: #9abf7d; /* light yellowgreen */
}
.btn-royalblue {
    color: #fff;
    background-color: #2649a0; /* royalblue */
    border-color: #2649a0; /* royalblue */
    border-radius: 25px;
    letter-spacing: 2px;
    padding-top: 4px;
    padding-bottom: 4px;
    padding-right: 20px;
    padding-left: 20px;
}
.btn-royalblue:hover {
    color: #fff;
    background-color: #5f78b1; /* light royalblue */
    border-color: #5f78b1; /* light royalblue */
}
.btn-coral {
    color: #fff;
    background-color: #f2747d; /* coral */
    border-color: #f2747d; /* coral */
    border-radius: 25px;
    letter-spacing: 2px;
    padding-top: 4px;
    padding-bottom: 4px;
    padding-right: 20px;
    padding-left: 20px;
}
.btn-coral:hover {
    color: #fff;
    background-color: #f3acb0; /* light coral */
    border-color: #f3acb0; /* light coral */
}
</style>

<div class="wrapper">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="article" class="col-md-8">
      <header class="entry-header">



      <?php if( in_category('on-conservatism') ): ; ?>
        <h2 id="big"><a id="big-a" href="/categories/on-conservatism/"> On Conservatism </a></h2>
      <?php elseif( in_category('usroleintheworld')): ; ?>
        <h2 id="us"><a id="us-a" href="/categories/us-role-in-the-world/"> U.S. Role In The World </a></h2>
      <?php elseif( in_category('religiousliberty')): ; ?>
       <h2 id="religious"><a id="religious-a" href="/categories/religious-liberty/"> Religious Liberty </a></h2>
      <?php elseif( in_category('fromtheleft')): ; ?>
        <h2 id="left"><a id="left-a" href="/categories/from-the-left/"> From The Left</a></h2>
      <?php elseif( in_category('oncampus-viewpointdiversity')): ; ?>
        <h2 id="campus"><a id="campus-a" href="/categories/on-campus-viewpoint-diversity/"> On Campus / Viewpoint Diversity</a></h2>
      <?php elseif( in_category('thinktanks-and-research')): ; ?>
        <h2 id="think"><a id="think-a" href="/categories/thinktanks-research/"> Thinktanks & Research </a></h2>
      <?php elseif( in_category('bookreviews')): ; ?>
        <h2 id="book"><a id="book-a" href="/categories/book-reviews/"> Book Reviews </a></h2>

      <?php else: ; ?>
	     
      <!-- <h2 class="article-source" ><?php the_category(); ?></h2>  -->

      <?php endif; ?>

        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <p class="article-source">By <?php the_field('author') ?> &#9679; <?php the_field('source') ?> &#9679; <?php the_field('date'); ?></p>
        <hr> </hr>
        <div class="row">
            <div class="col-sm-4">
                <p><a id="facebook-2" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>">SHARE ON FACEBOOK</a></p>
            </div>
            <div class="col-sm-4">
                <p><a id="twitter-2" target="blank" href="https://twitter.com/home?status=<?php the_title() ?> - <?php the_permalink() ?>">SHARE ON TWITTER</a></p>
            </div>
        </div>

      <div class="entry-content">
        <?php the_content(); ?>
      </div><!-- .entry-content -->
</div>


<!-- Headers & Featured Article for Category Archive -->
<?php if( in_category('on-conservatism') ): ; ?>
	<div id="big-citizen-big-goverment-articles" class="col-md-3">

	<!-- Start - Big Citizen / Big Goverment Loop -->
<!-- ================================================ -->

		<div class="article-bigcitizen">
			<h3 class="bigcitizen-header"> Other Articles In This Category:</h3>
			<br>
		<?php
		  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		  $currentID = get_the_ID();
          $args = array(
            'category__not_in' => 9, 6, 7, 5, 8, 4, 1,
            'category__in' => 3,
			      'posts_per_page'  => 5,
			      'post__not_in' => array($currentID),
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
			<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
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
    <a href="/categories/on-conservatism/" type="button" class="btn-purple"> VIEW MORE <i id="arrow-rgt" class="fa fa-caret-right"></i></a>
<!-- ================================================ -->




<?php elseif( in_category('usroleintheworld')): ; ?>
	<div id="usroleintheworld-articles" class="col-md-3">
		<!-- Start U.S. Role In The World Loop -->
<!-- ================================================ -->

<div class="article-roleinworld">
			<h3 class="roleinworld-header">Other Articles In This Category:</h3>
			<br>
			<?php
		  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		  $currentID = get_the_ID();
          $args = array(
            'category__not_in' => 9, 6, 7, 5, 8, 3, 1,
            'category__in' => 4,
            'posts_per_page'  => 5,
            'post__not_in' => array($currentID),
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
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
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
    <a href="/categories/us-role-in-the-world/" type="button" class="btn-orange"> VIEW MORE <i id="arrow-rgt" class="fa fa-caret-right"></i> </a>

<!-- ================================================ -->

<?php elseif( in_category('religiousliberty')): ; ?>
	<div id="religiousliberty-articles" class="col-md-3">
		<!-- Start Religious Liberty Loop -->
<!-- ================================================ -->

<div class="article-religiousliberty">
			<h3 class="religiousliberty-header"> Other Articles In This Category: </h3>
			<br>
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $currentID = get_the_ID();
          $args = array(
            'category__not_in' => 9, 6, 7, 4, 8, 3, 1,
            'category__in' => 5,
			'posts_per_page'  => 5,
			'post__not_in' => array($currentID),
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
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
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
    <a href="/categories/religious-liberty/" type="button" class="btn-yellow"> VIEW MORE <i id="arrow-rgt" class="fa fa-caret-right"></i> </a>
<!-- ================================================ -->

<?php elseif( in_category('fromtheleft')): ; ?>
	<div id="fromtheleft-articles" class="col-md-3">
		<!-- Start - From The Left Loop -->
<!-- ================================================ -->

<div class="article-fromtheleft">
			<h3 class="fromtheleft-header"> Other Articles In This Category:</h3>
			<br>
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $currentID = get_the_ID();
          $args = array(
            'category__not_in' => 9, 5, 7, 4, 8, 3, 1,
            'category__in' => 6,
            'posts_per_page'  => 5,
            'post__not_in' => array($currentID),
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

					<div class="fromtheleft-child">
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
						<a id="article-link-left" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>			
		</div>
    <a href="/categories/from-the-left/" type="button" class="btn-aqua"> VIEW MORE <i id="arrow-rgt" class="fa fa-caret-right"></i> </a>

<!-- ================================================ -->

<?php elseif( in_category('oncampus-viewpointdiversity')): ; ?>
	<div id="oncampus-viewpointdiversity-articles" class="col-md-3">

<!-- Start - On Campus / Viewpoint Diversity Loop -->
<!-- ================================================ -->
<div class="article-oncampus">
			<h3 class="oncampus-header">Other Articles In This Category:</h3>
			<br>
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $currentID = get_the_ID();
          $args = array(
            'category__not_in' => 9, 6, 5, 4, 8, 3, 1,
            'category__in' => 7,
            'posts_per_page'  => 5,
            'post__not_in' => array($currentID),
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

					<div class="oncampus-child">
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
						<a id="article-link-campus" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>			
		</div>
	<!-- 	<button href="#" type="button" class="btn btn-info"> VIEW MORE > </button> -->
  <a href="/categories/on-campus-viewpoint-diversity/" type="button" class="btn-yellowgreen"> VIEW MORE <i id="arrow-rgt" class="fa fa-caret-right"></i> </a>

<!-- ================================================ -->

<?php elseif( in_category('thinktanks-and-research')): ; ?>
	<div id="thinktanks-and-research-articles" class="col-md-3">
		<!-- Start - Thinktanks & Research Loop -->
<!-- ================================================ -->

<div class="article-thinktanks">
			<h3 class="thinktanks-header">Other Articles In This Category:</h3>
			<br>
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $currentID = get_the_ID();
          $args = array(
            'category__not_in' => 9, 6, 7, 4, 5, 3, 1,
            'category__in' => 8,
            'posts_per_page'  => 5,
            'post__not_in' => array($currentID),
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

					<div class="thinktanks-child">
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
						<a id="article-link-tank" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>			
		</div>
		<!-- <button href="#" type="button" class="btn btn-info"> VIEW MORE > </button> -->
    <a href="/categories/thinktanks-research/" type="button" class="btn-royalblue"> VIEW MORE <i id="arrow-rgt" class="fa fa-caret-right"></i> </a>

<!-- ================================================ -->

<?php elseif( in_category('bookreviews')): ; ?>
	<div id="bookreviews-articles" class="col-md-3">
		<!-- Start - Book Reviews Loop -->
<!-- ================================================ -->

<div class="article-bookreviews">
			<h3 class="bookreviews-header">Other Articles In This Category:</h3>
			<br>
			<?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $currentID = get_the_ID();
          $args = array(
            'category__not_in' => 8, 6, 7, 4, 5, 3, 1,
            'category__in' => 9,
            'posts_per_page'  => 5,
            'post__not_in' => array($currentID),
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

					<div class="bookreviews-child">
						<p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
						<a id="article-link-book" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
            <?
            //closing while ( $the_query->have_posts() ) statement
              }

            //closing if ( $the_query->have_posts() ) statement
              }
            ?>
<?php wp_reset_postdata(); ?>			
		</div>
		<!-- <button href="#" type="button" class="btn btn-info"> VIEW MORE > </button> -->
    <a href="/categories/book-reviews/" type="button" class="btn-coral"> VIEW MORE <i id="arrow-rgt" class="fa fa-caret-right"></i> </a>

<!-- ================================================ -->

<?php else: ; ?>
	<!-- <div id="similar-articles" class="col-sm-3"> -->

<?php endif; ?>

	</div>
</article><!-- #post-## -->
</div>

