<h2 class="shop-title"><?php _e('Dal nostro shop', 'jurgita') ?></h2>
<?php $posts = get_sub_field('prodotti'); ?>
<?php $query = new WP_Query(array(
    'post_type' => 'product',
    'post__in' => $posts,
    'posts_per_page' => -1
)); ?>

<?php if ($query->have_posts()): ?>


    <?php woocommerce_product_loop_start(); ?>

    <?php woocommerce_product_subcategories(); ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php wc_get_template_part('content', 'product'); ?>

    <?php endwhile; // end of the loop. ?>

    <?php woocommerce_product_loop_end(); ?>


<?php endif; ?>