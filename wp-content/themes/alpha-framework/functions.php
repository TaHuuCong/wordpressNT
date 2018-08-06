<?php

// Define constants.
define( "THEME_URL", get_template_directory_uri() );
define( "IMAGES", THEME_URL . "/images" );
define( "STYLE", THEME_URL . "/css" );
define( "SCRIPTS", THEME_URL . "/js" );
define( "FRAMEWORK", get_stylesheet_directory() . "/framework" );

// Load the framework.
require_once( FRAMEWORK . "/init.php" );

// Set the content width based on the theme's design and stylesheet.
if( ! isset( $content_width ) ) {
    $content_width = 800;
}

// Set up theme default and register various supported features.
if ( ! function_exists( 'alpha_setup' ) ) {  // nếu chưa tồn tại hàm này thì tạo hàm này
    function alpha_setup() {
        /* Make the theme available for translation. */
        $lang_dir = THEME_URL . '/languages';
        load_theme_textdomain( 'tuts', $lang_dir );

        /* Add support for automatic feed links. */
        add_theme_support( 'automatic-feed-links' );

        /* Add support for post thumbnails. */
        add_theme_support( 'post-thumbnails' );

        /* Register nav menus. */
        register_nav_menus( array(
            'main-menu' => __( 'Main Menu', 'tuts' )
        ) );
    }

    add_action( 'after_setup_theme', 'alpha_setup' );
}


// Nhúng file .css, .js, jquery
if ( ! function_exists('import_style_script' ) ) {
    function import_style_script() {
        wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
        wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style('main-style', THEME_URL . '/style.css', false, null, 'all');
        wp_enqueue_style('custom-style', STYLE . '/custom.css', false, null, 'all');


        // đối với jquery thì phải deregister trước sau đó register lại
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '1.0.0', false);

        wp_enqueue_script('main', SCRIPTS . '/main.js', array(), null, true);
    }

    add_action('wp_enqueue_scripts', 'import_style_script');
}



// Loại bỏ style mặc định của admin_bar:  html { margin-top: 32px !important }
if ( !function_exists( 'my_filter_head' ) ) {
    function my_filter_head() {
        remove_action( 'wp_head', '_admin_bar_bump_cb' );
    }

    add_action( 'get_header', 'my_filter_head' );
}

// Validate field length
if ( ! function_exists( 'alpha_validate_length' ) ) {
    // trả về true khi length > minLength
	function alpha_validate_length( $fieldValue, $minLength ) {
		return ( strlen( trim( $fieldValue ) ) > $minLength );  // strlen() lấy chiều dài chuỗi
	}
}


// function wpb_widgets_init() {

// 	register_sidebar( array(
// 		'name'          => 'Custom Header Widget Area',
// 		'id'            => 'custom-header-widget',
// 		'before_widget' => '<div class="chw-widget">',
// 		'after_widget'  => '</div>',
// 		'before_title'  => '<h2 class="chw-title">',
// 		'after_title'   => '</h2>',
// 	) );

// }
// add_action( 'widgets_init', 'wpb_widgets_init' );