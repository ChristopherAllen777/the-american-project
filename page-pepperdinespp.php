<?php
/**
 * Template Name: Pepperdine SPP Page
 *
 * Template for Pepperdine SPP page.
 *
 * @package Harris Media Base Theme
 */
get_header(); ?>

<style>
    html, body {
    overflow-x: hidden;
}
div#pepperdine-row {
    margin-top: 35px;
    margin-bottom: 35px;
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
h4 {
    padding: 0!important;
}
#address {
    background: #f3f3f3;
    margin-top: 73px;
    padding-left: 47px;
}
@media (max-width: 767px){
#address {
    margin-top: 0px;
}
}
@media (max-width: 767px){
    #address {
    padding: 40px;
}
}
#map {
    background: #f3f3f3;
}
#info {
    background: #f3f3f3;
}
#address h4 {
    font-family: Georgia;
    font-style: italic;
    line-height: 100%;
}
/*.embed-responsive-16by9 {
    padding-bottom: 35.25%;
    max-height: 75%;
}*/
#video {
    margin-top: 0px;
}
#pepperdine-row-description{
    padding-bottom: 40px;
}
@media (min-width: 1100px){
    #video {
        margin-right: 100px;
        margin-left: 100px;
        width: 70%;
        margin: auto;
        display: block;
        padding-bottom: 35.25%;
        max-height: 75%;
        margin-top: 35px;
    }
}
</style>

<div id="video" class="embed-responsive embed-responsive-16by9">
			<iframe style="display: block; margin: auto;" align="center"  src="https://www.youtube.com/embed/27hFgR386bI" frameborder="10" allowfullscreen></iframe>
</div>

<div id="pepperdine-row" class="row">
    <h1> About Pepperdine School of Public Policy </h1>
</div>

<div id="pepperdine-row-description" class="row">
    <div class="col-xs-1">
    </div>
    <div class="col-xs-10"> 
        <!-- <p><?php the_field('pepperdine_spp') ?></p> -->

        <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' );?>

          <?php endwhile; ?>

        <?php endif; ?>
        
    <!-- <p> The Pepperdine School of Public Policy (SPP) is a nationally ranked and recognized graduate policy program headquartered in Malibu, CA, offering programming on the campus and in the University’s Washington, DC campus building located at 2011 Pennsylvania Avenue.</p>

    <p>Founded almost two decades ago by a fortuitous mixture of scholars and leaders – from the late political scientist James Q. Wilson and Jack Kemp to Michael Novak and Joel Kotkin – the School enjoys a reputation as one of America’s only graduate policy schools founded on a distinctive liberal arts core curriculum. As one of the very few policy programs based at a major Christian university, Pepperdine’s School of Public Policy understands and teaches the importance of faith-based principles of leadership as well as religious freedom. An interesting historical note as it relates to the intentions of this project, Russell Kirk’s seminal work of conservative thought – The Roots of American Order – was written on campus at Pepperdine back in the early 1970s, and first published by Pepperdine University Press.</p>

    <p>The School is also a national leader in the “participatory governance” movement (the study and practice of citizen involvement in policy-making) through its Davenport Institute for Public Engagement and its courses and events. Through the work of the Davenport Institute, its coursework and other events, the School’s fitting tagline is, “We See Public Policy Differently from Here.”</p>

    <p>With this history and current expertise, Pepperdine School of Public Policy is uniquely situated to host and facilitate thought leaders in the conservative movement to imagine a new future.</p> -->
    </div>
    <div class="col-xs-1">
    </div>
    </div>

<div id="info" class="row">
    <div id="address" class="col-sm-5">
        <h3><strong>Pepperdine University<br>School Of Public Policy</strong></h3>
        <h4>24255 Pacific Coast Highway</h4>
        <h4>Malibu, CA 90263</h4>
    </div>
    <div id="map" class="col-sm-7">
        <!-- map of pepperdine google maps -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26449.546728275705!2d-118.7250032193773!3d34.03891126899741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe726e240415a16f6!2sPepperdine+University+School+of+Public+Policy!5e0!3m2!1sen!2sus!4v1506008071003"  width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>    
</div>

<?php get_footer(); ?>