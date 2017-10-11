<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Harris Media Base Theme
 */

get_header('opening');
?>

<style>


</style>

<header id="masthead" class="site-header" role="banner">
	<?php if( is_front_page() ): ; ?>
	<div class="hero">
	<?php else: ; ?>
	<div class="subpage hero">
	<?php endif; ?>
		<div class="container-fluid">
			<div class="row">
				<nav class="col-md-12 navbar navbar-static-top">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed hidden-md" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a href="http://americastaging.wpengine.com/" class="logo">The American Project</a>
				    </div>
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<!-- Facebook and Twitter Social Icons -->
					&nbsp;<a href="/search"><i class="fa fa-search hidden-xs" style="font-size:20px;color:white;padding:15px;float:right; background-color:#2cb6de;"></i></a>&nbsp;
					<!-- <a href="#"><i class="fa fa-twitter hidden-xs" style="font-size:18px;color:white;float:right;margin:7px;margin-top:7px;"></i></a> -->
					<a href="https://twitter.com/AmericanProjPU"><img src="http://americastaging.wpengine.com/wp-content/uploads/2017/09/American-Project_asset_nav_social-tw.png" alt="twitter" class="fa fa-twitter hidden-xs" style="font-size:18px;color:white;float:right;margin:7px;margin-top:7px;"></img></a>
					<a href="https://www.facebook.com/PepAmericanProject/"><img src="http://americastaging.wpengine.com/wp-content/uploads/2017/09/American-Project_asset_nav_social-fb.png" alt="facebook" class="fa fa-facebook hidden-xs" style="font-size:18px;color:white;float:right;margin:7px;margin-top:7px;"></img></a>
					<!-- <a href="#"><i class="fa fa-facebook-f hidden-xs" style="font-size:18px;color:white;float:right;margin:7px;margin-top:7px;"></i></a> -->
					
				      <?php wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_id' => 'primary-menu',
										'container' => '',
										'menu_class' => 'nav navbar-nav',
										'fallback_cb' => 'wp_bootstrap_navwalker::falback',
										'walker' => new wp_bootstrap_navwalker()
									) ); ?>
				    </div><!-- /.navbar-collapse -->
				</nav>
			</div><!-- /.row -->
			<?php if( is_front_page() ): ; ?>
				<div class="row">
					<div align="center" style="text-align: center;" class="col-xs-12 company-name">
						<h1>The American Project:</h1>
						<h3> Convening The Conversation On American Conservatism </h3>
						<!-- <h4>at Pepperdine School of Public Policy</h4> -->
					<div id="span">
						<div><span class="spacer"></span><h4>at Pepperdine School of Public Policy</h4><span class="spacer"></span>
						</div>
					</div>
				</div><!-- /.row -->

	
			<?php endif; ?>
			
		</div><!-- /.container-fluid -->
	</div><!-- /.hero -->
</header><!-- #masthead -->

<div id="content" class="site-content">