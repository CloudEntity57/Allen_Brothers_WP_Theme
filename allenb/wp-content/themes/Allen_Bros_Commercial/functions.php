<?php
  add_theme_support('menus');
  add_theme_support( 'custom-header' );

function register_theme_menus(){
  register_nav_menus(
    array(
      'primary-menu' => __('Primary Menu'),
      'landing-menu' => __('Landing Menu')
    )
  );
}
// add arrows to menu parent
function oenology_add_menu_parent_class( $items ) {

 $parents = array();
 foreach ( $items as $item ) {
 if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
 $parents[] = $item->menu_item_parent;
 }
 }

 foreach ( $items as $item ) {
 if ( in_array( $item->ID, $parents ) ) {
 $item->classes[] = 'has-children';
 }
 }

 return $items;
}
add_filter( 'wp_nav_menu_objects', 'oenology_add_menu_parent_class' );
add_action('init','register_theme_menus');

  function allenb_theme_styles(){
    wp_enqueue_style("bootstrap_css", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" );
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('font_awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" );
  }
  add_action('wp_enqueue_scripts','allenb_theme_styles');

  function allenb_theme_js(){
    wp_enqueue_script("bootstrap_js" , "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '', true);
    wp_enqueue_script("main_js",get_template_directory_uri() . '/js/app.js', array('jquery'),'',true);
  }
  add_action('wp_enqueue_scripts','allenb_theme_js');
?>
