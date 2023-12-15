<?php
add_theme_support('menus');
add_theme_support( 'widgets' );
add_theme_support( 'post-thumbnails' );
// ADD MENU SUPPORT
add_theme_support( 'nav-menus' );

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),
        'footer-menu' => __( 'Footer Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
  

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

function customtheme_add_woocommerce_support()
 {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 400,
        'thumbnail_image_height' => 500,
        'single_image_width'    => 1000,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 40,
            'default_columns' => 2,
            'min_columns'     => 1,
            'max_columns'     => 5,
        ),
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    function avia_woocommerce_gallery_thumbnail_description($img, $attachment_id, $post_id, $image_class ) {
	    return $img;
	}

	function avia_woocommerce_post_thumbnail_description($img, $post_id){
	    return $img;
	}
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );


/* Redirect if there is only one product in the category or tag, or anywhere... */

function redirect_to_single_post(){
    global $wp_query;
    if( (is_product_category() || is_product_tag()) && $wp_query->post_count == 1 )//Woo single only
    //if( is_archive() && $wp_query->post_count == 1 )//redirect all single posts 
    {
        the_post();
        $post_url = get_permalink();
        wp_safe_redirect($post_url , 302 );
    exit;
    }
} 
add_action('template_redirect', 'redirect_to_single_post');
    
    

function add_product_desc(){
        echo '<div class="product-desc">';
        echo the_field('product_desc'); 
        echo '</div>';
}
add_action('woocommerce_after_shop_loop_item_title', 'add_product_desc');




function webroom_add_custom_js_file_to_admin( $hook ) {
    wp_enqueue_script ( 'custom-script', get_template_directory_uri() . '/js/admin-area.js' );
  }
  add_action('admin_enqueue_scripts', 'webroom_add_custom_js_file_to_admin');