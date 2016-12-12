<?php
add_filter('woocommerce_show_page_title', '__return_false');

add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash' );
/*
function myPrice ($price) {
	$price_split = explode(",", $price);
	$int_price = $price_split[0].",";
	$cent_price = $price_split[1];


<div class="price">
    <span class="int-price"><?php echo $int_price */?><!--</span>
    <span class="cent-price"><?php /*echo $cent_price */?></span>
</div>

'woocommerce_get_price_html'
}-->
?>