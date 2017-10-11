<?php
/**
 * Template Name: Sign Up Page
 *
 * Template for Sign Up page.
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
#signup-row h4 {
    text-align: center;
    font-family: Georgia;
    font-style: italic;
    line-height: 130%;
}
#connect-fb {
    text-align: center;
    font-family: Georgia;
    font-style: italic;
    line-height: 130%;
}
#connect-tw {
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
.gform_footer.top_label {
    text-align: center;
}
form#gform_2 {
    text-align: center;
}
#socials {
    background: #f3f3f3;
}
#icon {
    padding: 22px;
}
div#signup-row {
    padding: 50px;
    padding-bottom: 20px;
}
div#signup-form {
    padding: 90px;
    padding-top: 0px;
}
@media (max-width: 767px){
    div#contact-form {
    padding: 20px;
    padding-top: 0px;
}
    div#signup-row {
    padding: 50px;
    padding-bottom: 0px;
}
    div#signup-form {
    padding: 20px;
    padding-top: 0px;
}
}

/*Gravity Forms Inputs*/
@media (max-width: 767px){
input#input_2_1 {
    width: 90%;
}
input#input_2_2 {
    width: 90%;
}
input#input_2_3 {
    width: 90%;
}
}
i.fa.fa-facebook {
    font-size: 24px;
    text-align: center;
    border: #34508e;
    color: #34508e;
    border-style: solid;
    border-radius: 100%;
    padding: 13px;
    width: 58px;
}
i.fa.fa-twitter {
    font-size: 24px;
    text-align: center;
    border: #3688fe;
    color: #3688fe;
    border-style: solid;
    border-radius: 100%;
    padding: 13px;
    width: 58px;
}
h4#connect-icon-1 {
    vertical-align: middle;
    padding-bottom: 20px;
    padding-top: 27px;
    color: #35508e;
}
h4#connect-icon-2 {
    vertical-align: middle;
    padding-bottom: 20px;
    padding-top: 27px;
    color: #3f93fe;
}
@media (max-width: 767px){
    h4#connect-icon-1, h4#connect-icon-2 {
        font-size: 14px;
    }
    i.fa.fa-facebook {
    cursor: pointer;
    font-size: 24px;
    text-align: center;
    background: blue;
    border: #ffffff;
    color: #ffffff;
    background-color: #2e4683;
    border-style: solid;
    border-radius: 100%;
    padding: 13px;
    width: 58px;
}
    div#fb-div {
    background-color: #2e4683;
}
    div#fb-div h4#connect-icon-1 {
    color: white;
}
i.fa.fa-twitter {
    cursor: pointer;
    font-size: 24px;
    text-align: center;
    border: white;
    color: #ffffff;
    background-color: #3688fe;
    border-style: solid;
    border-radius: 100%;
    padding: 13px;
    width: 58px;
}
div#tw-div h4#connect-icon-2 {
    color: white;
}
div#tw-div {
    background-color: #2e7dfe;
}
}

div#fb-div:hover i.fa.fa-facebook {
    cursor: pointer;
    font-size: 24px;
    text-align: center;
    background: blue;
    border: #ffffff;
    color: #ffffff;
    background-color: #2e4683;
    border-style: solid;
    border-radius: 100%;
    padding: 13px;
    width: 58px;
}
div#fb-div:hover  {
    background-color: #2e4683;
}
div#fb-div:hover h4#connect-icon-1 {
    color: white;
}
div#tw-div:hover i.fa.fa-twitter {
    cursor: pointer;
    font-size: 24px;
    text-align: center;
    border: white;
    color: #ffffff;
    background-color: #3688fe;
    border-style: solid;
    border-radius: 100%;
    padding: 13px;
    width: 58px;
}
div#tw-div:hover h4#connect-icon-2 {
    color: white;
}
div#tw-div:hover {
    background-color: #2e7dfe;
}




input#gform_submit_button_2 {
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
.ginput_container.ginput_container_text {
    margin: auto;
}
.ginput_container.ginput_container_email {
    margin: auto;
}
</style>

<div id="signup-row" class="row">
	<h1> The American Project Updates </h1>
	<h4> Sign up with your email address to receive news and updates</h4>
</div>
<br>
<div id="signup-form" class="row">
<?php gravity_form(2, false, false, false, '', true, 0); ?>
</div>

<div id="socials" class="row hidden-xs">
	<a target="blank" href="https://www.facebook.com/PepAmericanProject/">
        <div id="fb-div" class="col-sm-6">
            <div id="icon" class="col-sm-4">
               <i style="font-size:24px; float: right;" class="fa fa-facebook"></i>
            </div>
            <div id="connect-fb" class="col-sm-8">
                <h4 style="text-align: left;" id="connect-icon-1"> Connect with the American Project on Facebook </h4>
            </div>
        </div>
    </a>
    
	<a target="blank" href="https://twitter.com/AmericanProjPU">
        <div id="tw-div" class="col-sm-6">
            <div id="icon" class="col-sm-2">
                <i style="font-size:24px; float: right;" class="fa fa-twitter"></i>
            </div>
            <div id="connect-tw" class="col-sm-8">
                <h4 style="float: left;" id="connect-icon-2"> Connect with the American Project on Twitter </h4>
            </div>
	   </div>
    </a>
</div>

<!-- Shows on mobile **** Hides Elsewhere -->

<div id="fb-div" id="socials" class="row hidden-sm hidden-md hidden-lg">
    <a target="blank" href="https://www.facebook.com/PepAmericanProject/">
        <div class="col-sm-12">
            <div id="icon" class="col-xs-3">
                <i style="font-size:24px; float: right;" class="fa fa-facebook"></i>
            </div>
            <div id="connect-fb" class="col-xs-8">
                <h4 style="float: left;" id="connect-icon-1"> Connect with the American Project on Facebook </h4>
            </div>
        </div>
    </a>
</div>
<div id="tw-div" id="socials" class="row hidden-sm hidden-md hidden-lg">
    <a target="blank" href="https://twitter.com/AmericanProjPU">
        <div  class="col-sm-12">
            <div id="icon" class="col-xs-3">
               <i style="font-size:24px; float: right;" class="fa fa-twitter"></i>
            </div>
            <div id="connect-tw" class="col-xs-8">
                <h4 style="float: left;" id="connect-icon-2"> Connect with the American Project on Twitter </h4>
            </div>
        </div>
    </a>
</div>



<?php get_footer(); ?>

