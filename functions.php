<?php
/**
 * udeb_pazdziernik functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package udeb_pazdziernik
 */

if ( ! function_exists( 'udeb_pazdziernik_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function udeb_pazdziernik_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on udeb_pazdziernik, use a find and replace
		 * to change 'udeb_pazdziernik' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'udeb_pazdziernik', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'udeb_pazdziernik' ),
            'menu-social' => 'menu-odnosnikow-serwisow-spolecznosciowych'
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
		add_theme_support( 'custom-background', apply_filters( 'udeb_pazdziernik_custom_background_args', array(
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
			'before_title'  => '<p class="">',
			'after_title'   => '</>',
		) );
	}
endif;
add_action( 'after_setup_theme', 'udeb_pazdziernik_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function udeb_pazdziernik_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'udeb_pazdziernik_content_width', 640 );
}
add_action( 'after_setup_theme', 'udeb_pazdziernik_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function udeb_pazdziernik_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'udeb_pazdziernik' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'udeb_pazdziernik' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
        'name' => 'Stopka',
        'id' => 'footer-sidebar',
        'description' => 'Treść Stopki'
    ) );
    register_sidebar( array(
        'name' => 'Społeczności',
        'id' => 'social-sidebar',
        'description' => 'Strona główna społeczności'
    ) );
		register_sidebar( array(
        'name' => 'Społeczności Front',
        'id' => 'social-sidebar-front',
        'description' => 'Wszystkie strony społeczności Facebook i Tweeter',
				// 'before_widget' => '<a>',
				// 'after_widget'  => '</a>',
		) );
		register_sidebar( array(
			'name'          => 'Footer Sidebar', 'udeb' ,
			'id'            => 'footer',
			'before_widget' => '<section id="%1$s" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => 'Aboute Sidebar', 'udeb' ,
			'id'            => 'aboute',
			'before_widget' => '<section id="%1$s" class="widgetAboute  widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		) );
		register_sidebar( array(
			'name'          => 'AbouteImg Sidebar', 'udeb' ,
			'id'            => 'abouteimg',
			'before_widget' => '<section id="%1$s" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
		register_sidebar( array(
			'name'          => 'Contact Sidebar', 'udeb' ,
			'id'            => 'contact',
			'before_widget' => '<section id="%1$s" class=" widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title_contact">',
			'after_title'   => '</h6>',
		) );
		register_sidebar( array(
			'name'          => 'ContactForm Sidebar', 'udeb' ,
			'id'            => 'contactform',
			'before_widget' => '<section id="%1$s" class=" widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title_contact">',
			'after_title'   => '</h6>',
		) );
		register_sidebar( array(
			'name'          => 'TimeOpen Sidebar', 'udeb' ,
			'id'            => 'timeopen',
			'before_widget' => '<section id="%1$s" class=" widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title_contact">',
			'after_title'   => '</h6>',
		) );
	}



add_action( 'widgets_init', 'udeb_pazdziernik_widgets_init' );

function wpb_add_google_fonts() {
 wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&subset=latin-ext', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

function SearchFilter($query)
{
    if (($query->is_search)&&(!is_admin())) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','SearchFilter');

function my_custom_post_types() {
	register_post_type( 'products', array( 'public' => true, 'has_archive' => true, 'label' => 'Produkty', 'taxonomies' => array( 'category' ) ) );
}
add_action( 'init', 'my_custom_post_types' );


//section shortcode
function caption_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'class' => '',
	), $atts );

    switch ($a['class']) {
        case 'colorWhite':
            return '<div class="container-fluid overflow '.$a['class'].' main_width"><div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">'. do_shortcode($content) .'</div></div>';
            break;
        case 'colorSilver':
            return '<div class="container-fluid overflow '.$a['class'].' main_width"><div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">'. do_shortcode($content) .'</div></div>';
            break;
        case 'imageFull':
            return '<div class="container-fluid overflow '.$a['class'].' main_width">'. do_shortcode($content) .'</div>';
            break;
        case 'contact':
            return '<div class="container-fluid overflow contact main_width"> <div class="row"> <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <div class="contact_text col-lg-offset-3 col-lg-6  col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">'. do_shortcode($content) .'</div> <div class="col-lg-offset-3 col-lg-6  col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12 contakt_form">'. do_shortcode('[contact-form-7 id="133" title=""]') .'</div> </div>  </div> </div> <!-- /kontakt_form_map-->  <!-- Modal --> <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <p class="modal_icon_contact "> </p> <h4 class="modal-title" id="myModalLabel">Dziękujemy za wiadomość!</h4> </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">ZAMKNIJ OKNO</button> </div> </div> </div> </div>';
            break;
        case 'img_home_icon':
            return '<div class="container-fluid colorWhite main_width"> <div class="row col-lg-offset-3 col-lg-6  col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">  <div class="ecology_actual" > <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 "> <p class=" img_home_icon"></p> </div> <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ">'. do_shortcode($content) .'</div> </div> </div> </div>';
            break;
        case 'img_light_icon':
            return '<div class="container-fluid colorWhite main_width"> <div class="row col-lg-offset-3 col-lg-6  col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12"> <div class="ecology_actual"> <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 "> <p class=" img_light_icon"></p> </div>  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">'. do_shortcode($content) .'</div> </div> </div> </div>';
            break;
        case 'history':
            preg_match_all ("/<li>([^`]*?)<\/li>/", $content, $matches);
            return '<div class="container-fluid overflow colorWhite main_width history"> <article class="col-lg-offset-3 col-lg-6  col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">  <div class="history_graph col-lg-12"> <div class="history_graph_text col-lg-5 col-md-5 col-sm-5 col-xs-5"> <p>'. $matches[1][0] .'</p> </div> <div class="history_graph col-lg-2 col-md-2 col-sm-2 col-xs-2"> <p class="history_graph_border"></p> </div> <div class="history_graph col-lg-5 col-md-5 col-sm-5 col-xs-5"> <p class="history_graph_circle">2004</p> </div> </div>  <div class="history_graph  col-lg-12"> <div class="history_graph_section2 col-lg-5 col-md-5 col-sm-5 col-xs-5"> <p class="history_graph_circle">2009</p> <p class="history_graph_circle">140 tys. m&#179; rocznie etanolu</p> <p class="history_graph_circle">350 tys. ton kukurydzy</p> <p class="history_graph_circle">ponad 100 tys. ton DDGS</p> </div> <div class="history_graph col-lg-2 col-md-2 col-sm-2 col-xs-2"> <p class="history_graph_border_section2"></p> </div> <div class="history_graph_text col-lg-5 col-md-5 col-sm-5 col-xs-5"> <p class="">'. $matches[1][1] .'</p> </div> </div>   <div class="history_graph col-lg-12"> <div class="history_graph_text col-lg-5 col-md-5 col-sm-5 col-xs-5"> <p>'. $matches[1][2] .'</p> </div> <div class="history_graph col-lg-2 col-md-2 col-sm-2 col-xs-2"> <p class="history_graph_border_section3"></p> </div> <div class="history_graph_section3 col-lg-5 col-md-5 col-sm-5 col-xs-5"> <p class="history_graph_circle">2010</p> <p class="history_graph_circle">magazyn na 700 tys. ton zbóż</p> </div> </div>   <div class="history_graph  col-lg-12"> <div class="history_graph_section2 history_graph_section4 col-lg-5 col-md-5 col-sm-5 col-xs-5"> <p class="history_graph_circle">2010</p> <p class="history_graph_circle">Uzyskanie certyfikatu ISCC</p> </div> <div class="history_graph col-lg-2 col-md-2 col-sm-2 col-xs-2"> <p class="history_graph_border_section4"></p> </div> <div class="history_graph_text col-lg-5 col-md-5 col-sm-5 col-xs-5"> <p class="">'. $matches[1][3] .'</p> </div> </div>  <div class="history_graph history_graph_margin col-lg-12"> <div class="history_graph_text col-lg-5 col-md-5 col-sm-5 col-xs-5"> <p>'. $matches[1][4] .'</p> </div> <div class="history_graph col-lg-2 col-md-2 col-sm-2 col-xs-2"> <p class="history_graph_border_section5"></p> </div> <div class="history_graph history_graph_section5 col-lg-5 col-md-5 col-sm-5 col-xs-5"> <p class="history_graph_circle">2010</p> </div> </div>  </article>  </div>';
            break;
        default:
        return false;
    }
}
add_shortcode( 'add_section', 'caption_shortcode' );

/**
 * Enqueue scripts and styles.
 */
function udeb_pazdziernik_scripts() {
	wp_enqueue_style( 'udeb_pazdziernik-style', get_stylesheet_uri() );

	wp_enqueue_script( 'udeb_pazdziernik-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'udeb_pazdziernik-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_script( 'udeb_pazdziernik-vendor', get_template_directory_uri() . '/js/vendor.min.js', array(), '20151215', true );

    wp_enqueue_script( 'udeb_pazdziernik-main', get_template_directory_uri() . '/js/main.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'udeb_pazdziernik_scripts' );

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

/*
* Button for Aktualnosci
*/
function sButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<div class="container-fluid colorWhite main_width buttonPadding"><div class="buttonText col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12"><a class="button" id="scroll-to-top"  href="'.$link.'"><span class="buttontext">' . do_shortcode($content) . '</span></a> </div></div>';
}
add_shortcode('button', 'sButton');

/*
* Nav active menu
*/
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'hoverMenu ';
    }
    return $classes;
}
