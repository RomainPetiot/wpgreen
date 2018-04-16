<?php
// SIDEBARS AND WIDGETIZED AREAS
function wpgreen_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => __('Sidebar', 'wpgreen'),
		'description' => __('The first (primary) sidebar.', 'wpgreen'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));




} // don't remove this bracket!
