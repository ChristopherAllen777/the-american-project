<?php
/**
 * The template part for displaying results in general archive pages.
 *
 * @package Harris Media Base Theme
 */
?>
<!-- 
<style type="text/css">
.bigcitizen-child {
    border-left: #9B59B6;
    border-width: 2px;
    border-left-style: solid;
    padding-left: 15px;
    margin-bottom: 20px;
    min-height: 75px;
    border-right: #9a59b6;
    border-right-width: 2px;
    border-right-style: solid;
    padding-right: 15px;
}
.roleinworld-child {
    border-left: #e44234;
    border-width: 2px;
    border-left-style: solid;
    padding-left: 15px;
    margin-bottom: 20px;
    min-height: 75px;
    border-right: #e44234;
    border-right-width: 2px;
    border-right-style: solid;
    padding-right: 15px;
}
.religiousliberty-child {
    border-left: #eca017;
    border-width: 2px;
    border-left-style: solid;
    padding-left: 15px;
    margin-bottom: 20px;
    min-height: 75px;
    border-right: #eca017;
    border-right-width: 2px;
    border-right-style: solid;
    padding-right: 15px;
}
.fromtheleft-child{
    border-left: #18b491;
    border-width: 2px;
    border-left-style: solid;
    padding-left: 15px;
    margin-bottom: 20px;
    min-height: 75px;
    border-right: #18b491;
    border-right-width: 2px;
    border-right-style: solid;
    padding-right: 15px;
}
.oncampus-child{
    border-left: #73be3a;
    border-width: 2px;
    border-left-style: solid;
    padding-left: 15px;
    margin-bottom: 20px;
    min-height: 75px;
    border-right: #73be3a;
    border-right-width: 2px;
    border-right-style: solid;
    padding-right: 15px;
}
.thinktanks-child{
    border-left: #2649a0;
    border-width: 2px;
    border-left-style: solid;
    padding-left: 15px;
    margin-bottom: 20px;
    min-height: 75px;
    border-right: #2649a0;
    border-right-width: 2px;
    border-right-style: solid;
    padding-right: 15px;
}
.bookreviews-child{
    border-left: #f2747d;
    border-width: 2px;
    border-left-style: solid;
    padding-left: 15px;
    margin-bottom: 20px;
    min-height: 75px;
    border-right: #f2747d;
    border-right-width: 2px;
    border-right-style: solid;
    padding-right: 15px;
}
</style> -->
<!-- Headers & Featured Article for Category Archive -->
<?php if( in_category('on-conservatism') ): ; ?>
	<!-- This is category Big Citizen -->
                    <div class="col-sm-12">
	                    <div class="bigcitizen-child">
                            <p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
                            <a id="article-link-big" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                        </div>
                    </div>
                    <hr/>
<?php elseif( in_category('usroleintheworld')): ; ?>
 <!--    This is U.S. Role In The World -->
                    <div class="col-sm-12">
                    <div class="roleinworld-child">
                        <p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
                        <a id="article-link-world" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
                    </div>
                   <hr/>
<?php elseif( in_category('religiousliberty')): ; ?>
<!--     This is Religious Liberty -->
<div class="col-sm-12">
                        <div class="religiousliberty-child">
                        <p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
                        <a id="article-link-religious" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
                </div>
                   <hr/>
<?php elseif( in_category('fromtheleft')): ; ?>
    <!-- This is From The Left -->
    <div class="col-sm-12">
                        <div class="fromtheleft-child">
                        <p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
                        <a id="article-link-left" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
                </div>
                    <hr/>
<?php elseif( in_category('oncampus-viewpointdiversity')): ; ?>
   <!--  This is On Campus / Viewpoint Diversity -->
   <div class="col-sm-12">
                        <div class="oncampus-child">
                        <p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
                        <a id="article-link-campus" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
                </div>
                    <hr/>
<?php elseif( in_category('thinktanks-and-research')): ; ?>
    <!-- This is Thinktanks & Research -->
    <div class="col-sm-12">
    					<div class="thinktanks-child">
                        <p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
                        <a id="article-link-tank" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
                </div>
                    <hr/>
<?php elseif( in_category('bookreviews')): ; ?>
   <!--  This is Book Reviews -->
   <div class="col-sm-12">
    					<div class="bookreviews-child">
                        <p class="article-source"><?php the_field('source') ?> &#9679; By <?php the_field('author') ?> </p>
                        <a id="article-link-book" href='<?php the_field('article_url')?>'> <h4 class="article-title"> <?php echo get_the_title();?></h4></a>
                    </div>
                </div>
                    <hr/>
<?php else: ; ?>
	
<?php endif; ?>

