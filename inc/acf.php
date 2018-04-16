<?php

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/backup';
    // return
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    // append path
    $paths[] = get_stylesheet_directory() . '/backup';
    // return
    return $paths;
}

function my_acf_init() {
	//acf_update_setting('google_api_key', '');
}
add_action('acf/init', 'my_acf_init');
