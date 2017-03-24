<?php	

	require "includes/cpt.php";
	require "includes/acf.php";

	function theme_scripts(){
		wp_enqueue_style( 'font-awesome' , get_template_directory_uri().'/assets/css/font-awesome.css' );
		wp_enqueue_style( 'style' , get_template_directory_uri().'/assets/css/style.css' );
		
		wp_enqueue_script('scripts', get_template_directory_uri().'/assets/js/scripts.js' , array('jquery'), false, true);
		wp_enqueue_script( 'owl' , get_template_directory_uri().'/assets/js/owl.carousel.js' , array('jquery') , false , false );
	}
	
	add_action('wp_enqueue_scripts', 'theme_scripts');

	/* Register menu 
	---------------------------------------------------------------------------------------------*/
	
	function register_my_menu() {
		register_nav_menu( 'huvudmeny' , 'Huvudmeny' );
	}
	
	add_action( 'after_setup_theme' , 'register_my_menu' );

	
	if ( function_exists( 'acf_add_options_page' ) ){
		acf_add_options_page();
	}



	add_theme_support('post-thumbnails');



	function register_my_sidebars(){
		register_sidebar(array(
			'name' => 'Min sidebar',
			'id' => 'my-sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
		));
	}

	add_action( 'widgets_init' , 'register_my_sidebars' );