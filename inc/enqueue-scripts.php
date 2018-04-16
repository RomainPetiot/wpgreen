<?php
function site_scripts() {
  	global $wp_styles;

    //remove jquery on the footer
    wp_deregister_script( 'jquery' );

    // Adding scripts file in the footer
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.min.js', false, '', true );
    wp_localize_script('script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );

	if(get_page_template_slug() == 'template-contact.php' ){
		wp_enqueue_script( 'googleCaptcha', 'https://www.google.com/recaptcha/api.js');
		wp_localize_script('script', 'contactTitle', __('Formulaire de contact', 'wpgreen') );
		wp_localize_script('script', 'contactText', __('Votre message a été envoyé,<br>il sera traité rapidement.', 'wpgreen') );
	}

	//stylesheet
	wp_enqueue_style( 'global-site-min', get_stylesheet_directory_uri() . '/assets/css/global.min.css', '', '', 'all' );
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
