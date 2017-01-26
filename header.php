<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Real State Property</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-social.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>
  <?php wp_head(); ?>
  <body <?php body_class(); ?>>

	<div class="container-fluid" id="topheader">
		<div class="row">
			<div class="container">

				<div class="col-xs-6">
					<div class="row" id="mobile">
						<?php echo get_theme_mod('mobile_no'); ?>
					</div>

				</div>
				<div class="col-xs-6">
					<div class="row">
						<div  id="social-icon" class="pull-right">

							<a class="btn btn-social-icon  btn-xs btn-facebook">
								<i class="fa fa-facebook"></i> 
							</a>

							<a class="btn btn-social-icon btn-xs btn-twitter">
								<i class="fa fa-twitter"></i> 
							</a>

							<a class="btn btn-social-icon btn-xs btn-google">
								<i class="fa fa-google-plus"></i> 
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end of topheader -->

	<div class="container-fluid" id="header">
		<div class="row">	
			<div class="container">
				<div class="" id="inside-header">
					<div class="col-xs-6">
						<div id="logo">
							<a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_theme_mod('logo_uploader'); ?>" class="img-responsive"></a>
						</div>
						
					</div>
					<div class="col-xs-offset-9" id="searchform">
						<div class="search">
							<i class="glyphicon glyphicon-search"></i>
							<form menthod="get" action="<?php bloginfo('home'); ?>">
								
								<input type="search" name="s" class="form-control" placeholder="search">
							</form>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="container-fluid" id="navbox">
		<div class="row">
			<div class="container">
			<nav class="navbar navbar-default">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php 

							wp_nav_menu(array(

								'theme_location'=>'main_menu',
								'menu_class'=>'nav navbar-nav',
								'fallback_cb'=>'wp_bootstrap_navwalker::fallback',
								'walker'=> new wp_bootstrap_navwalker()


								));

						 ?>

					</div><!-- /.navbar-collapse -->
			</nav>
			</div>
		</div>
	</div>