<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Harris Media Base Theme
 */
?>

<style>
input#input_1_1 {
    color: black;
}
div#updates {
    padding-top: 10px;
}
#updates {
    font-size: 25px;
}
</style>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container-fluid">
        <div class="row contact">
            <div class="col-xs-12"></div>
                <div id="updates" align="center" class="col-sm-6">
                	<h4 id="updates">GET YOUR UPDATES IN YOUR INBOX!</h4>
                </div>
                <div align="center" style="display: block; margin: auto;" class="col-sm-6 email">
                    <?php gravity_form(1, false, false, false, '', true, 0); ?>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
