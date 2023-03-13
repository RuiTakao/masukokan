<?php
/* -------------------------
  hidden admin bar
--------------------------- */
add_filter( 'show_admin_bar', '__return_false' );

/* -------------------------
  theme support
--------------------------- */
function theme_support_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption',
  ));
}
add_action('after_setup_theme', 'theme_support_setup');

/* -------------------------
  stylesheet javascript
--------------------------- */
function add_assets_files() {

  // style.css
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', '', '1.0.0');

  // main.js
  wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', '', false, true);
}
add_action('wp_enqueue_scripts', 'add_assets_files');