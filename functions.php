<?php

/*
  Enqueue styles and scripts
*/

function startertheme_enqueue_files() {
  wp_enqueue_script('startertheme_scripts', get_theme_file_uri('/assets/dist/js/frontend/app.js'), NULL, '1.0', true);
  wp_enqueue_style('startertheme_style', get_theme_file_uri('/assets/dist/css/style.css'), NULL, '1.0');
}
add_action('wp_enqueue_scripts', 'startertheme_enqueue_files');

/*
  Theme Setup
*/

function startertheme_setup() {
    add_theme_support( 'title-tag' );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
    ) );
	}
add_action( 'after_setup_theme', 'startertheme_setup' );