<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('title'); ?></title>

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Stylesheet -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" ref="css/style.css"/>
		
		<!-- jQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


		<!-- [if lt IE9]>
			<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php wp_head()?>
	</head>

	<!-- HEADER -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8"></div> <!-- end span8 -->
					<div class="col-lg-4 col-md-4">
						<h1 class="logo fr">
							<a href="<?php home_url('/')?>">
								<img src="http://localhost/wordpress/wp-content/themes/schrittvermittlung/images/schrittvermittlung-logo.gif" alt="Schrittvermittlung">
							</a>
						</h1>
					</div> <!-- end col-4 -->
				</div> <!--end row -->
				<nav class="navigation">
					<?php wp_nav_menu(); ?>
				</nav> <!-- end main-navigation -->
			</div> <!-- end container -->
		</header> 