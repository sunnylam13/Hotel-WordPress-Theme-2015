<?php
/**
 * hospitality functions and definitions
 *
 * @package hospitality
 */

if ( ! function_exists( 'hospitality_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hospitality_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hospitality, use a find and replace
	 * to change 'hospitality' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'hospitality', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'hospitality' ),
		'footer_menu' => esc_html__( 'Footer Menu', 'hospitality' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hospitality_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // hospitality_setup
add_action( 'after_setup_theme', 'hospitality_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hospitality_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hospitality_content_width', 640 );
}
add_action( 'after_setup_theme', 'hospitality_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function hospitality_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hospitality' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'hospitality_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hospitality_scripts() {
	wp_enqueue_style( 'hospitality-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');

	wp_enqueue_script(
		'jquery',
		"http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js",
		false, //dependencies
		null, //version number
		true //load in footer
	);

	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), null, true );

	wp_enqueue_script( 'hospitality-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'hospitality-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script(
	  'scripts', //handle
	  get_template_directory_uri() . '/js/scripts.js', //source
	  array( 'jquery', 'plugins' ), //dependencies
	  null, // version number
	  true //load in footer
	);
}
add_action( 'wp_enqueue_scripts', 'hospitality_scripts' );

// function to get a specific page's specific information
function grab_specific_page_info($my_id,$wpFunction,$filterTarget)
{
	// where
	// $my_id = 51; (page ID, could be post ID)
	// $wpFunction = post_title (WordPress target data output field as a string)
	// $filterTarget = 'the_title' (string)
	
	$post_id = get_post($my_id);
	switch ($wpFunction) {
		case 'post_title':
			$content = $post_id->post_title;
			break;
		case 'post_link':
			$content = $post_id->post_link;
			break;
		case 'post_content':
			$content = $post_id->post_content;
			break;
		case 'post_content':
			$content = $post_id->post_content;
			break;
		default:
			echo "Error.  You did not enter the correct WP target field.";
			break;
	};

	// $content = $post_id->post_title;
	
	$content = apply_filters($filterTarget, $content);
	$content = str_replace(']]>', ']]>', $content);
	// return the content
	echo $content;
}

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
