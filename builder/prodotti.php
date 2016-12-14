<h2 class="shop-title"><?php _e('Dal nostro shop', 'jurgita') ?></h2>

<?php $posts = get_sub_field('prodotti'); ?>
<?php $query = new WP_Query(array(
    'post_type' => 'product',
    'post__in' => $posts,
    'posts_per_page' => -1
)); ?>

<?php if ($query -> have_posts()): ?>


    <?php woocommerce_product_loop_start(); ?>

    <?php while ($query -> have_posts()) : $query -> the_post(); ?>

        <?php get_template_part('content', 'product'); ?>

    <?php endwhile; wp_reset_query() ?>

    <?php woocommerce_product_loop_end(); ?>


<?php endif; ?>
