<?php
/**
 * sachyya functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sachyya
 */

if ( ! function_exists( 'sachyya_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sachyya_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sachyya, use a find and replace
	 * to change 'sachyya' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sachyya', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'sachyya' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sachyya_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'sachyya_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sachyya_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sachyya_content_width', 640 );
}
add_action( 'after_setup_theme', 'sachyya_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sachyya_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sachyya' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sachyya' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sachyya_widgets_init' );

/**
 * Get fonts url
 * @return string returns fonts url
 */
function sachyya_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Lora, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$robotoSlab = _x( 'on', 'Roboto Slab: on or off', 'sachyya' );

	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$roboto = _x( 'on', 'Roboto: on or off', 'sachyya' );

	if ( 'off' !== $robotoSlab || 'off' !== $roboto ) {
		$font_families = array();

		if ( 'off' !== $robotoSlab ) {
			$font_families[] = 'Roboto+Slab:400,700';
		}

		if ( 'off' !== $roboto ) {
			$font_families[] = 'Roboto:400,300,500,700';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function sachyya_scripts() {
	/**
	 * Enqueue style
	 */
	wp_enqueue_style( 'sachyya-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );

	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.css' );

	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );

	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );

	wp_enqueue_style( 'sachyya-fonts', sachyya_fonts_url() );

	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );


	/**
	 * Enqueue scripts
	 */
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'jquery-appear', get_template_directory_uri() . '/js/jquery.appear.js', array(), '', true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );

	wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', array(), '', true );

	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );

	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '', true );

	wp_enqueue_script( 'masonry-pkgd', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '', true );

	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.js', array(), '', true );

	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.min.js', array(), '', true );

	wp_enqueue_script( 'typed', get_template_directory_uri() . '/js/typed.js', array(), '', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '', true );

	wp_enqueue_script( 'sachyya-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sachyya-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sachyya_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
