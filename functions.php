<?php

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sona_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Sona, use a find and replace
		* to change 'sona' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('sona', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'sona'),
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
			'sona_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'sona_setup');

/**
 * Enqueue scripts and styles.
 */
function sona_scripts()
{
	wp_enqueue_style('sona-style', get_stylesheet_uri(), array(), _S_VERSION);

	wp_enqueue_style('lora-fonts', 'https://fonts.googleapis.com/css?family=Lora:400,700&display=swap', array(), _S_VERSION);
	wp_enqueue_style('cabin-fonts', 'https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap', array(), _S_VERSION);
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), _S_VERSION);
	wp_enqueue_style('elegant-icons', get_template_directory_uri() . '/css/elegant-icons.css', array(), _S_VERSION);
	wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), _S_VERSION);
	wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), _S_VERSION);
	wp_enqueue_style('nice-select', get_template_directory_uri() . '/css/nice-select.css', array(), _S_VERSION);
	wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), _S_VERSION);
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), _S_VERSION);
	wp_enqueue_style('slicknav', get_template_directory_uri() . '/css/slicknav.min.css', array(), _S_VERSION);
	wp_enqueue_style('sona-style-main', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION);

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('sona-script-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'sona_scripts');
