<h2 class="shop-title aligncenter"><?php _e('Dal nostro shop', 'jurgita') ?></h2>

<?php $posts = get_sub_field('prodotti'); ?>
<?php $query = new WP_Query(array(
    'post_type' => 'product',
    'post__in' => $posts,
    'posts_per_page' => -1
)); ?>

<?php if ($query -> have_posts()): ?>

    <ul class="products grid-4">


    <?php while ($query -> have_posts()) : $query -> the_post(); ?>

        <?php wc_get_template_part('content', 'product'); ?>

    <?php endwhile; wp_reset_postdata() ?>

  </ul>


<?php endif; ?>
