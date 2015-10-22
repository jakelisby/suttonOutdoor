<?php

// --------------------------------
// Register Custom Sidebars
// --------------------------------

// Duplicate this for each sidebar widget area.

register_sidebar(array(
	'name'          => 'Sidebar Widgets',
	'id'            => 'sidebar_widgets',
	'description'   => '',
	'before_widget' => '<div class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>' ));
