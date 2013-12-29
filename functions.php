<?php
if ( function_exists( 'add_theme_support' ) ):
  add_theme_support( 'menus' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
endif;

// loading modernizr and jquery, and reply elements on single pages automatically
function plainpaper_js() {
  if (!is_admin()) {

    wp_enqueue_script( 'jquery' );

    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

    // Scripts
    wp_register_script( 'infinite_scroll',  get_template_directory_uri() . '/library/js/jquery.infinitescroll.min.js', array('jquery'), '2013-12-22-1530',true );
    if( ! is_singular() ) { 
      wp_enqueue_script('infinite_scroll'); 
    }

    wp_register_script( 'fittext-js', get_template_directory_uri() . '/library/js/jquery.fittext.js', array( 'jquery' ), '2013-12-22-1357', true );
    wp_enqueue_script( 'fittext-js' );
    
    wp_register_script( 'plainpaper-js', get_template_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), '2013-12-22-1350', true );
    wp_enqueue_script( 'plainpaper-js' );

  }
}

// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'plainpaper_js', 1);

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-primary"';
}

function post_link_attributes($format){
     $format = str_replace('href=', 'class="btn btn-primary" href=', $format);
     return $format;
}

function new_excerpt_more( $more ) {
  return ' &hellip;';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}