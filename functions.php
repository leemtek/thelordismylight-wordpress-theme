<?php
/**
 * The Lord is My Light Photography functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Lord_is_My_Light_Photography
 */

if ( ! function_exists( 'the_lord_is_my_light_photography_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function the_lord_is_my_light_photography_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on The Lord is My Light Photography, use a find and replace
     * to change 'the-lord-is-my-light-photography' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'the-lord-is-my-light-photography', get_template_directory() . '/languages' );

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
    // ADDED BY GABE - lets set the thumb size to something smaller
    set_post_thumbnail_size( 200, 200, array( 'center', 'center')  ); // 200 pixels wide by 200 pixels tall, crop from the center

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'menu-1' => esc_html__( 'Primary', 'the-lord-is-my-light-photography' ),
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

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'the_lord_is_my_light_photography_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    ) ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );
  }
endif;
add_action( 'after_setup_theme', 'the_lord_is_my_light_photography_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_lord_is_my_light_photography_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'the_lord_is_my_light_photography_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_lord_is_my_light_photography_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_lord_is_my_light_photography_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'the-lord-is-my-light-photography' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'the-lord-is-my-light-photography' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'the_lord_is_my_light_photography_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_lord_is_my_light_photography_scripts() {
  wp_enqueue_style( 'the-lord-is-my-light-photography-style', get_stylesheet_uri() );
  //for dev, we'll use microtime so its always new. otherwise, lets use the latest date
  //$cacheBust = microtime();
  $cacheBust = "20190716";
  wp_enqueue_style( 'bootstrapcss', get_bloginfo('template_url') . '/css/bootstrap.min.css', false, $cacheBust, 'all' );
  wp_enqueue_style( 'themecss', get_bloginfo('template_url') . '/css/style.css', false, $cacheBust, 'all' );
  wp_enqueue_style( 'responsivecss', get_bloginfo('template_url') . '/css/responsive.css', false, $cacheBust, 'all' );

  wp_enqueue_script( 'the-lord-is-my-light-photography-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'the-lord-is-my-light-photography-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'the_lord_is_my_light_photography_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
  require get_template_directory() . '/inc/woocommerce.php';
}



/* Time to load my custom stuffs */
if (!function_exists('load_my_scripts')) {
  function load_my_scripts() {
    wp_deregister_script( 'jquery' );

    wp_register_script('jquery', get_bloginfo('template_url') . '/js/vendor/jquery-3.2.1.min.js', array(), '1.0', true);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap4', get_bloginfo('template_url') . '/js/vendor/bootstrap.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script('bootstrap4');
  }
}
add_action('init', 'load_my_scripts');
