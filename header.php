<!DOCTYPE html>
<html>

<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php get_bloginfo("name"); ?></title>
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.js" rel="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/sweetalert.min.js" rel="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/masonry.js" rel="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/layout.js" rel="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/feedback.js" rel="text/javascript"></script>

	<script id="API_Script" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEZsUjjGEkLUs1CuRhf-cvbbS0obeUhbs"></script>

	<script src="<?php echo get_template_directory_uri() ?>/js/maps.js" rel="text/javascript"></script>

</head>

<body>
	<!-- HEADER -->
	<div class="header">
		<div class="wrapper inner-header">
			<a class="link title" href="/"><?php echo get_bloginfo("name") ?></a>

			<div class="menu">
				<?php wp_nav_menu( array("theme_location"=>"header-menu" ) ); ?>
			</div>
		</div>
	</div>