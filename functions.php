<?php


// Theme support options
require_once(get_stylesheet_directory().'/inc/theme-support.php');

// Register sidebars/widget areas
require_once(get_stylesheet_directory().'/inc/sidebar.php');

// Register scripts and stylesheets
require_once(get_stylesheet_directory().'/inc/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_stylesheet_directory().'/inc/menu.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_stylesheet_directory().'/inc/page-navi.php');

// ajouter des formats d'image
require_once(get_stylesheet_directory().'/inc/add_image_size.php');

// Ajouter des options dans l'admin
//require_once(get_stylesheet_directory().'/inc/options.php');

// Use this as a template for custom post types
require_once(get_stylesheet_directory().'/inc/custom-post-type.php');

// Customize the WordPress login menu
require_once(get_stylesheet_directory().'/inc/login.php');

require_once(get_stylesheet_directory().'/inc/acf.php');

//contact
require_once(get_stylesheet_directory().'/inc/contact.php');


/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function wpgreen_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="https://www.wpgreen.co" target="_blank">WPgreen</a></span>.', 'wpgreen');
}
// adding it to the admin area
add_filter('admin_footer_text', 'wpgreen_custom_admin_footer');

//cache les erreurs de connexion
add_filter('login_errors',function(){
	return __("Mauvais identifiants ? <a href='".site_url()."/wp-login.php?action=lostpassword'>Mot de passe oublié ?</a>", "wpgreen");
});

define( 'DISALLOW_FILE_EDIT', true );
