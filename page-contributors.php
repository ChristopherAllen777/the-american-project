<?php
/**
 * Template Name: Contributors Page
 *
 * Template for contributors page.
 *
 * @package Harris Media Base Theme
 */
get_header(); ?>

<style>
  html, body {
    overflow-x: hidden;
}
  h3 {
    font-family: Georgia;
  }
p {
    line-height: 1.5;
}
div#contributor-row {
    margin-left: 15px;
    margin-right: 15px;
    padding: 20px;
}

#contributor-row h1 {
    font-family:'Raleway', 400;
    font-weight: bolder;
    color: #1d315a;
    text-align: center;
    letter-spacing: 4px;
    text-transform: uppercase;
}
#contributor-row h4 {
    text-align: center;
    font-family: Georgia;
    font-style: italic;
    line-height: 130%;
}
@media (max-width: 767px){
  #contributor-row h1 {
    font-family:'Raleway', 400;
    font-weight: bolder;
    color: #1d315a;
    text-align: center;
    letter-spacing: 4px;
    text-transform: uppercase;
    font-size: 22px;
}
}
/* Jquery Events bars */
.ui-accordion .ui-accordion-header {
    display: block;
    cursor: pointer;
    position: relative;
    margin: 2px 0 0 0;
    padding: .5em .5em .5em .7em;
    font-size: 100%;
    background: #172b57;
    color: white;
}
.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
    border: none;
    background: red;
    font-weight: normal;
    color: #ffffff;
}

h3#ui-id-1 {
    font-family: Raleway;
    line-height: 153%;
}
h3#ui-id-2 {
    font-family: Raleway;
    line-height: 153%;
}
h3#ui-id-3 {
    font-family: Raleway;
    line-height: 153%;
}
h3#ui-id-4 {
    font-family: Raleway;
    line-height: 153%;
}
h3#ui-id-5{
    font-family: Raleway;
    line-height: 153%;
}
h3#ui-id-7{
    font-family: Raleway;
    line-height: 153%;
}
div#accordion {
    margin-left: 75px;
    margin-right: 75px;
    margin-bottom: 75px;
}
@media (max-width: 767px){
  div#accordion {
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
}

}
.btn-info {
    color: #fff !important;
    background-color: #45d4f2;
    border-color: #45d4f2;
    border-radius: 25px;
    letter-spacing: 2px;
    padding-top: 4px;
    padding-bottom: 4px;
}
div#row1, div#row2, div#row3, div#row4  {
    padding-left: 100px;
    padding-right: 100px;
}
@media (max-width: 767px){
    div#row1, div#row2, div#row3, div#row4  {
    padding-left: 40px;
    padding-right: 40px;
}
}
h4.article-source {
	color: grey;
	font-family:'Raleway', 400;
	font-weight: bold;
	letter-spacing: 3px;
	text-transform: uppercase;
    font-size: 7pt;
    line-height: 188%;
}
p {
    font-family:'Raleway';
    font-size: 11pt;
}

/*Accordian Working Groups*/

#descriptive{
  max-height: 1300px;
}


/*Accordian Arrows*/

/* Working Group #1 */
span.ui-accordion-header-icon.ui-icon.ui-icon-triangle-1-e {
    float: right;
    margin-top: 2px;
}
span.ui-accordion-header-icon.ui-icon.ui-icon-triangle-1-s {
    float: right;
    margin-top: 2px;
}


</style>

<div class="container">

<div id="contributor-row" class="row">
  <h1> Contributors </h1>
  <h4> Project participants are comprised of four working groups listed below: </h4>
</div>

<!-- Start accordion -->

        <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' );?>

          <?php endwhile; ?>

        <?php endif; ?>
<!-- 
<div id="accordion">
  <h3>Working Group #1: History of Conservative Thought and Coalition</h3>
      <div id="row1">
        <div class="row">
            <h3>Ted McAllister</h3>
            <h4 class="article-source"> Edward L Gaylord Chair/Associate Professor of Public Policy Pepperdine University</h4>
            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
            condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
            Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
            ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
            <br>
            <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
            <br>
            <br>
        </div>
        <div class="row">
            <h3>Wilfred M. McClay</h3>
            <h4 class="article-source"> G. T. And Libby Blankenship Chair In The History of Liberty. The University Of Oklahoma</h4>
            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
            condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
            Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
            ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
            <br>
            <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
            <br>
            <br>
        </div>
        <div class="row">
            <h3>Ted McAllister</h3>
            <h4 class="article-source"> Edward L Gaylord Chair/Associate Professor of Public Policy Pepperdine University</h4>
            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
            condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
            Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
            ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
            <br>
            <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
            <br>
            <br>
        </div>
      </div>

  <h3>Working Group #2: Religious Liberty</h3>
    <div id="row2">
      <div class="row">
            <h3>Ted McAllister</h3>
            <h4 class="article-source"> Edward L Gaylord Chair/Associate Professor of Public Policy Pepperdine University</h4>
            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
            condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
            Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
            ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
            <br>
            <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
            <br>
            <br>
        </div>
        <div class="row">
            <h3>Wilfred M. McClay</h3>
            <h4 class="article-source"> G. T. And Libby Blankenship Chair In The History of Liberty. The University Of Oklahoma</h4>
            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
            condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
            Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
            ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
            <br>
            <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
            <br>
            <br>
        </div>
        <div class="row">
            <h3>Ted McAllister</h3>
            <h4 class="article-source"> Edward L Gaylord Chair/Associate Professor of Public Policy Pepperdine University</h4>
            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
            condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
            Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
            ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
            <br>
            <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
            <br>
            <br>
        </div>
    </div>

  <h3>Working Group #3: The Role of Citizens and Government Institutions</h3>
      <div id="row3">
          <div class="row">
            <h3>Ted McAllister</h3>
            <h4 class="article-source"> Edward L Gaylord Chair/Associate Professor of Public Policy Pepperdine University</h4>
            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
            condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
            Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
            ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
                  <br>
                  <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
                  <br>
                  <br>
          </div>
          <div class="row">
            <h3>Wilfred M. McClay</h3>
            <h4 class="article-source"> G. T. And Libby Blankenship Chair In The History of Liberty. The University Of Oklahoma</h4>
            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
            condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
            Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
            ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
                  <br>
                  <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
                  <br>
                  <br>
          </div>
          <div class="row">
            <h3>Ted McAllister</h3>
            <h4 class="article-source"> Edward L Gaylord Chair/Associate Professor of Public Policy Pepperdine University</h4>
            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
            condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
            Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
            ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
            scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
            augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
            Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
                  <br>
                  <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
                  <br>
                  <br>
          </div>
    </div>

  <h3>Working Group #4: America's Role in the World</h3>
      <div id="row4">
          <div class="row">
              <h3>Ted McAllister</h3>
              <h4 class="article-source"> Edward L Gaylord Chair/Associate Professor of Public Policy Pepperdine University</h4>
              <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
              condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
              Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
              ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
              scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
              augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
              Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
              scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
              augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
              Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
              <br>
              <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
              <br>
              <br>
          </div>

          <div class="row">
              <h3>Wilfred M. McClay</h3>
              <h4 class="article-source"> G. T. And Libby Blankenship Chair In The History of Liberty. The University Of Oklahoma</h4>
              <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
              condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
              Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
              ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
              scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
              augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
              Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
              scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
              augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
              Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
              <br>
              <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
              <br>
              <br>
          </div>

          <div class="row">
              <h3>Ted McAllister</h3>
              <h4 class="article-source"> Edward L Gaylord Chair/Associate Professor of Public Policy Pepperdine University</h4>
              <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, 
              condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 
              Vestibulum a velit eu ante scelerisque vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mi semper, tempus 
              ligula vestibulum, tincidunt ex. In nulla magna, accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
              scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
              augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
              Integer a enim ornare nisl mattis pharetra eu suscipit odio. accumsan in sollicitudin a, euismod sed nulla. Aenean rhoncus ex ac lectus 
              scelerisque commodo. Sed in justo sit amet ante hendrerit euismod. Suspendisse quis orci ex. Proin diam tortor, vestibulum et 
              augue et, iaculis suscipit nunc. Praesent ante turpis, rhoncus et tortor ac, tincidunt viverra felis. 
              Integer a enim ornare nisl mattis pharetra eu suscipit odio.</p>
              <br>
              <a href="#" type="button" class="btn btn-info"> LEARN MORE > </a>
              <br>
              <br>
          </div>
      </div>
</div>  -->
<!-- End of accordion -->


</div> <!-- container -->

<?php get_footer(); ?>

<script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>