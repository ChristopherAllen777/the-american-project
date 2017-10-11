<?php
/**
 * Template Name: Contact Page
 *
 * Template for a contact page.
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
#contact-row h4 {
    text-align: center;
    font-family: Georgia;
    font-style: italic;
    line-height: 130%;
}
.btn-info {
    color: #fff;
    background-color: #45d4f2;
    border-color: #45d4f2;
    border-radius: 25px;
    display: block;
    margin: auto;
    letter-spacing: 2px;
}
label {
    display: block;
    text-align: center;
    color: grey;
}
#socials {
    background: #f3f3f3;
}
div#contact-row {
    padding: 50px;
    padding-bottom: 0px;
}
/*div#contact-form {
    padding: 90px;
    padding-top: 0px;
}*/
@media (max-width: 767px){
    div#contact-form {
    padding: 20px;
    padding-top: 0px;
}
div#contact-row {
    padding: 50px;
    padding-bottom: 0px;
}
}
ul#gform_fields_3 {
    text-align: center;
}
.gform_footer.top_label {
    text-align: center;
}
.gform_wrapper textarea.small {
    height: 5em;
    width: 47.5% !important;
}
div#gform_confirmation_message_3 {
    text-align: center;
}

/*Gravity Forms Inputs*/
@media (max-width: 767px){
input#input_3_1 {
    width: 90%;
}
input#input_3_2.medium{
    width: 90%;
}
.gform_wrapper .top_label li.gfield.gf_left_half {
    margin: 0 0 .5em;
    width: 100% !important;
}
input#input_3_3 {
    width: 90%;
}
input#input_3_4 {
    width: 90%;
}
.gform_wrapper textarea.small {
    height: 5em;
    width: 90% !important;
}
}
#icon {
    padding: 22px;
    padding-top: 23px;
}
i.fa.fa-home {
    font-size: 24px;
    text-align: center;
    border: #26add9;
    color: #26add9;
    border-style: solid;
    border-radius: 100%;
    padding: 13px;
    width: 58px;
}
i.fa.fa-envelope {
    font-size: 24px;
    text-align: center;
    border: #26add9;
    color: #26add9;
    border-style: solid;
    border-radius: 100%;
    padding: 13px;
    width: 58px;
}
h4#connect-icon-1 {
    vertical-align: middle;
    padding-top: 27px;
    color: #000000;
    font-family: Raleway;
    letter-spacing: 4px;
    font-size: 15px;
}
h4#connect-icon-2 {
    vertical-align: middle;
    padding-top: 27px;
    color: #3f93fe;
    font-size: 15px;
}
@media (max-width: 767px){
    h4#connect-icon-1, h4#connect-icon-2 {
        font-size: 15px;
    }
    #connect-2 {
        font-size: 13px;
    }
    .col-xs-10 {
        padding-left: 34px;
    }
}
#connect-2 {
    font-family: Georgia;
    font-style: italic;
    font-size: 13px;

}
div#socials {
    padding-bottom: 25px;
    padding-top: 25px;
}
.gform_wrapper .top_label li.gfield.gf_left_half {
    clear: left!important;
    margin-right: 0% !important;
}
li#field_3_2 {
    margin-right: 0% !important;
}
.ginput_container.ginput_container_text {
    margin: auto;
}
.ginput_container.ginput_container_email {
    margin: auto;
}
.ginput_container.ginput_container_textarea {
    margin: auto;
}
input#gform_submit_button_3 {
    color: #fff;
    background-color: #45d4f2;
    border-color: #45d4f2;
    border-radius: 25px;
    letter-spacing: 2px;
    padding-top: 4px;
    padding-bottom: 4px;
    text-transform: uppercase;
    margin-top: 6px;
    padding-left: 20px;
}

h4 {
    padding: 0px!important;
}
#h4 {
    font-family: Georgia; 
    font-style: italic; 
    line-height: 100%;
}
@media (max-width: 767px) {
    #h4 {
        font-size: 12px;
    }
    h3 {
        font-size: 15px;
    }
}
.col-xs-10 {
    padding-top: 22px;
}
</style>

<div id="contact-row" class="row">
	<h1> Contact Us </h1>
	<h4> For questions or concerns regarding the American Project, please feel free to contact us. </h4>
</div>

<br>
<div id="contact-form" class="row">
    <?php gravity_form(3, false, false, false, '', true, 0); ?>
</div>

<div id="socials" class="row hidden-xs">
	<div class="col-sm-6">
        <div class="col-sm-2">
        </div>
        <div id="icon" class="col-sm-2">
           <i class="fa fa-home" style="font-size:24px"></i>
        </div>
        <div class="col-sm-8">
			<!-- <h4 id="connect-icon-1"><strong>School Of Public Policy Pepperdine University</strong></h4>
			<h4 id="connect-2">24255 Pacific Coast Highway</h4>
			<h4 id="connect-2">Malibu, CA 90263</h4> -->
                <h3><strong>Pepperdine University<br>School Of Public Policy</strong></h3>
                <h4 id="h4">24255 Pacific Coast Highway</h4>
                <h4 id="h4">Malibu, CA 90263</h4>
        </div>
	</div>

	<div class="col-sm-6">
<!--         <div class="col-sm-2">
        </div> -->
        <div id="icon" class="col-sm-2">
            <i class="fa fa-envelope" style="font-size:24px"></i>
        </div>
        <div class="col-sm-8">
			<!-- <h4 id="connect-icon-1"><strong> Email Us: </strong></h4>
			<h4 id="connect-2"> americanproject@pepperdine.edu </h4> -->
            <h3><strong> Email Us: </strong></h3>
            <h4 id="h4"> americanproject@pepperdine.edu </h4>
        </div>
	</div>
</div>

<!-- Shows on mobile **** Hides Elsewhere -->

<div id="socials" class="row hidden-sm hidden-md hidden-lg">
    <div class="col-xs-12">
        <div id="icon" class="col-xs-2">
           <i class="fa fa-home" style="font-size:24px"></i>
        </div>
        <div class="col-xs-10">
            <!-- <h4 id="connect-icon-1"><strong>School Of Public Policy Pepperdine University</strong></h4>
            <h4 id="connect-2">24255 Pacific Coast Highway</h4>
            <h4 id="connect-2">Malibu, CA 90263</h4> -->
            <h3><strong>Pepperdine University<br>School Of Public Policy</strong></h3>
                <h4 id="h4">24255 Pacific Coast Highway</h4>
                <h4 id="h4">Malibu, CA 90263</h4>
        </div>
    </div>

    <div class="col-xs-12">
        <div id="icon" class="col-xs-2">
            <i class="fa fa-envelope" style="font-size:24px"></i>
        </div>
        <div class="col-xs-10">
            <!-- <h4 id="connect-icon-1"><strong> Email Us: </strong></h4>
            <h4 id="connect-2"> americanproject@pepperdine.edu </h4> -->
            <h3><strong> Email Us: </strong></h3>
            <h4 id="h4"> americanproject@pepperdine.edu </h4>
        </div>
    </div>
</div>


<?php get_footer(); ?>