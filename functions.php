<?php
/**
 * Functions and definitions
*/
 
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array(), null, 'all' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        null,
        'all'
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


/* Add a Label Visibility option on GF fields
   per https://gravitywiz.com/how-to-hide-gravity-form-field-labels-when-using-placeholders/ */

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


/* Rewrite for pretty urls using Swiftype slug field */
add_action('init', function() {
	
  add_rewrite_rule('^listing/([a-zA-Z0-9-_]+)$', 'index.php?pagename=listing&sl=$matches[1]', 'top');

});


?>