<?php
function bosa_child_styles() {
$parent_style = 'parent-style';
wp_enqueue_style($parent_style, get_template_directory_uri().'/style.css');
wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css', array($parent_style), '1.00');
//wp_enqueue_script('main', get_stylesheet_directory_uri().'/includes/js/main.js', array('jquery'), '3.1.1', true);
}
add_action('wp_enqueue_scripts', 'bosa_child_styles');

// Redirect function for the SOAER Presentations page.
add_action('template_redirect', function() {
    // ID of the redirect page
    if (!is_page(1730)) {
        return;
    }
    // URL of page with form that needs to be filled before access:
    if (wp_get_referer() === 'https://sonjamae.ca/mrbb/soaer-committee/soaer-presentations/') {
        return;
    }
	// Redirect to the page with the form:
    wp_redirect('https://sonjamae.ca/mrbb/soaer-committee/soaer-presentations/');
    exit;
} );

add_action( 'wp_dashboard_setup', 'bt_remove_dashboard_widgets' );
/**
 *
 *  Remove WordPress Dashboard Widgets
 * 
 */
function bt_remove_dashboard_widgets() {

	remove_meta_box( 'e-dashboard-overview', 'dashboard', 'normal'); // //Elementor
	remove_meta_box( 'dashboard_plugins','dashboard','normal' ); // Plugins
	remove_meta_box( 'dashboard_right_now','dashboard', 'normal' ); // Right Now
	remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel'); // Try Gutenberg
	remove_meta_box('dashboard_quick_press','dashboard','side'); // Quick Press widget
	remove_meta_box('dashboard_secondary','dashboard','side'); // Other WordPress News
	remove_meta_box('dashboard_incoming_links','dashboard','normal'); //Incoming Links
	remove_meta_box('dashboard_recent_comments','dashboard','normal'); // Recent Comments
	remove_meta_box('dashboard_activity','dashboard', 'normal'); // Activity
}