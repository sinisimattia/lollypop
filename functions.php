<?php

function lollypop_enqueue(){
	wp_enqueue_style( "main-theme", get_template_directory_uri()."/css/main.css", array(), "1.0.0", "all" );
	wp_enqueue_style( "blog-theme", get_template_directory_uri()."/css/blog.css", array(), "1.0.0", "all" );

	wp_enqueue_script( "feedback", get_template_directory_uri()."/js/feedback.js", array(), "1.0.0", true );
	wp_localize_script("feedback", "url", array(get_template_directory_uri()) );
}

add_action( "wp_enqueue_scripts", "lollypop_enqueue" );

function lollypop_setup(){
	add_theme_support('post-thumbnails');	
	add_theme_support( "menus" );
	register_nav_menu( "header-menu", "Header Menu" );
	register_nav_menu( "footer-menu", "Footer Menu" );
}

add_action( "init", "lollypop_setup" );

?>