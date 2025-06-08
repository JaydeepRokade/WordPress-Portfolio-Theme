<?php
function jaydeep_portfolio_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
}
add_action( 'after_setup_theme', 'jaydeep_portfolio_setup' );

function jaydeep_portfolio_scripts() {
  wp_enqueue_style( 'jaydeep-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'jaydeep_portfolio_scripts' );
?>
