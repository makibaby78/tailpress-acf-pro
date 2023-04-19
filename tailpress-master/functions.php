<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Rubik:wght@700&display=swap', array(), $theme->get( 'Version' ) );
	wp_enqueue_style( 'cloudflare', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css', array(), $theme->get( 'Version' ) );
	wp_enqueue_style( 'tailpress_output', get_template_directory_uri() . '/dist/output.css', array(), $theme->get( 'Version' ) );
	wp_enqueue_style( 'customStyles', tailpress_asset( 'css/styles.css' ), array(), $theme->get( 'Version' ) );
	
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null);
	wp_enqueue_script( 'app-js', tailpress_asset( 'js/app.js' ), array(), '1.0.1', true );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

/**
* This is use to return logo setup from customizer
*
* @return Logo Image
*/
if ( ! function_exists( 'tailpress_get_logo' ) ) :

    function tailpress_get_logo() {

        $custom_logo_id = get_theme_mod( 'custom_logo' );

        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( $logo  ) {
                echo wp_get_attachment_image($custom_logo_id, 'full', false, array('class' => 'website-logo', 'alt' => 'TPP Logo' ));
        } else {
                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
        }
    }

endif;

function tailpress_customize_register( $wp_customize ) {


	$wp_customize->add_section('themezero_theme_option', array(
        'title'    => __('Theme options', 'themezero'),
        'priority' => 120,
    ));
//
	$wp_customize->add_setting( 'header_btn', array(
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options',
		'theme_supports' => '', 
		'default' => '',
		'transport' => 'refresh', 
		'themezero_sanitize_js_callback' => '', 
	  ) );
  
	  $wp_customize->add_control('header_btn_text', array(
		  'type' => 'text',
		  'label'      => __('Header Button Text', 'themezero'),
		  'section'    => 'themezero_theme_option',
		  'settings'   => 'header_btn',
	  ));
//
	  $wp_customize->add_setting( 'header_link', array(
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options',
		'theme_supports' => '', 
		'default' => '',
		'transport' => 'refresh', 
		'themezero_sanitize_js_callback' => '', 
	  ) );
  
	  $wp_customize->add_control('header_btn_link', array(
		  'type' => 'text',
		  'label'      => __('Header Button Link', 'themezero'),
		  'section'    => 'themezero_theme_option',
		  'settings'   => 'header_link',
	  ));
//
//
	$wp_customize->add_setting( 'footer_info', array(
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options',
		'theme_supports' => '', 
		'default' => '',
		'transport' => 'refresh', 
		'themezero_sanitize_js_callback' => '', 
	) );

	$wp_customize->add_control('copyright', array(
		'type' => 'text',
		'label'      => __('Footer Copyright', 'themezero'),
		'section'    => 'themezero_theme_option',
		'settings'   => 'footer_info',
	));
	$wp_customize->add_setting( 'footer_logo_link', array(
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options',
		'theme_supports' => '', 
		'default' => '',
		'transport' => 'refresh', 
		'themezero_sanitize_js_callback' => '', 
	));

	$wp_customize->add_control('header_btn_text', array(
		'type' => 'text',
		'label'      => __('Footer Logo Link', 'themezero'),
		'section'    => 'themezero_theme_option',
		'settings'   => 'footer_logo_link',
	));
}


add_action( 'customize_register', 'tailpress_customize_register' );