<?php if ( get_sub_field('prodotti') ) {
    $args = array(
        'post_type' => 'product',
        'post__in' => get_sub_field('prodotti'),
        'posts_per_page' => count(get_sub_field('prodotti'))
    );
} else {
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 4
    );
} 
$query = new WP_Query($args);
if($query->have_posts()) :
?>
<div class="row-lg">
    <header>
<h2 class="title aligncenter"><?php _e('Dal nostro shop', 'jurgita') ?></h2>
</header>
    <?php  ?>
    <ul class="grid-4 products">
    <?php while ($query -> have_posts()) : $query ->  the_post(); ?>
        <?php wc_get_template_part('content', 'product'); ?>
    <?php endwhile; ?>
    <?php wp_reset_query() ?>
    </ul>
    <?php $shop = woocommerce_get_page_id( 'shop' ); ?>
    <div class="btn-container">
        <a class="btn-header btn-shop" href="<?php echo get_permalink( $shop ); ?>" title="<?php echo get_the_title($shop); ?>"><span class="btn"><?php _e('Visita lo shop', 'jurgita'); ?></span></a>
    </div>
</div>
<?php endif; ?>
