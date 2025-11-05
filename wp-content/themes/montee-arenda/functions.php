<?php
/**
 * montee-arenda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package montee-arenda
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function montee_arenda_scripts() {
	wp_enqueue_style( 'montee-arenda-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'contact-form', get_template_directory_uri() . '/assets/css/contact-form.css', array(), _S_VERSION );
	wp_enqueue_style( 'popup', get_template_directory_uri() . '/assets/css/popup.css', array(), _S_VERSION );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );

	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/assets/js/contact-form.js', array('app'), _S_VERSION, true );
	wp_enqueue_script( 'popup', get_template_directory_uri() . '/assets/js/popup.js', array('app'), _S_VERSION, true );
	wp_enqueue_script( 'telegram-sender', get_template_directory_uri() . '/assets/js/telegram-sender.js', array('app'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'montee_arenda_scripts' );
add_filter( 'woocommerce_get_breadcrumb', 'change_breadcrumb_text', 20, 2 );

function change_breadcrumb_text( $crumbs, $breadcrumb ) {
    foreach ( $crumbs as $key => $crumb ) {
        if ( $crumb[0] === 'Misc' ) {
            $crumbs[$key][0] = 'Подъемники';
        }
    }
    return $crumbs;
}


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'acf-options-global-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}

