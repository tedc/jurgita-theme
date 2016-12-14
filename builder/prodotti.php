<h2 class="title aligncenter"><?php _e('Dal nostro shop', 'jurgita') ?></h2>

<?php $posts = get_sub_field('prodotti'); ?>
<?php $query = new WP_Query(array(
    'post_type' => 'product',
    'post__in' => $posts,
    'posts_per_page' => -1
)); ?>

<?php if ($query->have_posts()): ?>

    <ul class="products grid-4">

        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <?php wc_get_template_part('content', 'product'); ?>

        <?php endwhile;
        wp_reset_postdata() ?>

    </ul>

    <?php $shop = woocommerce_get_page_id( 'shop' ); ?>
    <a class="btn-header btn-shop" href="<?php echo get_permalink( $shop ); ?>" title="<?php echo get_the_title($shop); ?>"><span class="btn"><?php _e('Visita lo shop', 'jurgita'); ?></span></a>

<?php endif; ?>
