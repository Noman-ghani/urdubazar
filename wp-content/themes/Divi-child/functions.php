<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
function cloudways_short_des_product() {
   $html = '<p class="short-des">'.get_the_excerpt().'</p>';
   echo $html;
}
add_action( 'woocommerce_after_shop_loop_item_title', 'cloudways_short_des_product', 40 );