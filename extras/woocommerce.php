<?php
add_filter('woocommerce_show_page_title', '__return_false');

add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash' );

remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

function myPrice ($price) {
    $price = str_replace(array('<ins>', '</ins>', '&euro;</span>&nbsp;', ',', ':'), array('', '', '&euro;</span>&nbsp;<span class="int-price">','</span>,', ''), $price);
    return $price;
}
add_filter( 'woocommerce_get_price_html', 'myPrice' );



function custom_woocommerce_get_catalog_ordering_args( $args ) { if (isset($_SESSION['orderby'])) { if($_SESSION['orderby']) { $args['orderby'] = 'category'; } } return $args; }
add_filter('woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby');
function custom_woocommerce_catalog_orderby( $sortby ) { $sortby['category'] = 'Sort by category'; return $sortby; }

function woocommerce_car_icon(){
	global $woocommerce;
	$url = get_permalink( woocommerce_get_page_id( 'cart' ) );
	$icon = ( $woocommerce->cart->cart_contents_count > 0 ) ? '<a href="'.$url.'" class="icon-cart-full"></a>' : '<a href="'.$url.'" class="icon-cart"></a>';
	echo $icon;
}

function my_cart_price ($price) {
    var_dump($price);
    return $price;
}

add_filter('woocommerce_cart_item_price', 'my_cart_price');