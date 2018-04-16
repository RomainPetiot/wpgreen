<?php

// Adding WP Functions & Theme Support
function wpgreen_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	//add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	// Add HTML5 Support
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ));

	add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 200,
    'flex-height' => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );
}
add_action( 'after_setup_theme', 'wpgreen_theme_support' );





add_action('customize_register','wpgreen_customizer_options');
function wpgreen_customizer_options( $wp_customize ) {
	//add section in wordpress customizer
	$wp_customize->add_section('social_settings_section', array(
		'title'          => __('Réseaux sociaux', 'wpgreen')
	));

	// add input
	$wp_customize->add_setting('wpgreen_share_facebook', array(
		'default'        => 'https://www.facebook.com/XXX',
	));

	// add user's control
	$wp_customize->add_control('wpgreen_share_facebook', array(
		'label'   => 'Facebook',
		'section' => 'social_settings_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('wpgreen_share_twitter', array(
		'default'        => 'https://twitter.com/XXX',
	));
	$wp_customize->add_control('wpgreen_share_twitter', array(
		'label'   => 'Twitter',
		'section' => 'social_settings_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('wpgreen_share_linkedin', array(
		'default'        => 'https://www.linkedin.com/XXX',
	));
	$wp_customize->add_control('wpgreen_share_linkedin', array(
		'label'   => 'Linkedin',
		'section' => 'social_settings_section',
		'type'    => 'text',
	));

}
