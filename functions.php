<?php
/**
 * Belka functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Belka
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function belka_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Belka, use a find and replace
		* to change 'belka' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'belka', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'belka' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'belka_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'belka_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function belka_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'belka_content_width', 640 );
}
add_action( 'after_setup_theme', 'belka_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function belka_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'belka' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'belka' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'belka_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function belka_scripts() {
	wp_enqueue_style( 'belka-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'belka-style', 'rtl', 'replace' );

	wp_enqueue_script ('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js');
	wp_enqueue_script ('gsa-ScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/ScrollTrigger.min.js');

	wp_enqueue_script( 'belka-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// PLUGINS
	wp_enqueue_style( 'slick_css', get_stylesheet_directory_uri() .  '/assets/plugin/slick/slick.css',array(), '' );
	wp_enqueue_script( 'slick_css', get_stylesheet_directory_uri() . '/assets/plugin/slick/slick.min.js', array('jquery'), '', true); 
	// MAIN
	wp_enqueue_style('theme_css', get_stylesheet_directory_uri().'/assets/css/theme.css', false, null);
  	wp_enqueue_script ('theme_script', get_template_directory_uri (). '/assets/js/theme.js', array(), false, true);

	if( str_contains(get_permalink(), '/servicios/') ){	
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/css/services.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/js/services.js', array('jquery'), '', true); 
	}
	
	
	wp_enqueue_style( 'main_blog', get_stylesheet_directory_uri() .  '/assets/css/blog.css',array(), '' );
	if( is_page_template( 'page-templates/template_page_blog.php' )){	
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/js/services.js', array('jquery'), '', true); 
	}
	if( is_page_template( 'page-templates/template_page_home.php' ) ) {
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/css/home.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/js/home.js', array('jquery'), '', true); 		
	}
	if( is_page_template( 'page-templates/template_page_contact.php' ) ) {
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/css/contact.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/js/contact.js', array('jquery'), '', true); 
	}
	
	if( is_page_template( 'page-templates/template_page_about.php' ) ) {
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/css/about-us.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/js/about-us.js', array('jquery'), '', true); 
	}
	if( is_page_template( 'page-templates/template_page_success.php' ) ) {
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/css/success.css',array(), '' );
		wp_enqueue_script( 'counter_js', get_stylesheet_directory_uri() . '/assets/js/counter.js', array(), '', true); 
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/js/success.js', array('jquery'), '', true); 
	}
	
	if( is_404() ) {
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/css/404.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/js/404.js', array('jquery'), '', true); 
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'belka_scripts' );


function belka_whatsapp() {
	$whatsapp = '3002960792';
	return $whatsapp;
}


function limit_string($string, $repl, $limit) 
{
  if(strlen($string) > $limit) 
  {
    return substr($string, 0, $limit) . $repl; 
  }
  else 
  {
    return $string;
  }
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

