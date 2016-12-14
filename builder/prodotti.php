<h2 class="title aligncenter"><?php _e('Dal nostro shop', 'jurgita') ?></h2>

<?php $posts = get_sub_field('prodotti'); ?>
<?php $query = new WP_Query(array(
    'post_type' => 'product',
    'posts' => $posts,
    'posts_per_page' => -1
)); ?>

<?php if (have_posts()): ?>

    <ul class="products grid-4">

        <?php while (have_posts()) : the_post(); ?>

          <?php the_post_thumbnail() ?>

        <?php endwhile;
        wp_reset_postdata() ?>

    </ul>

<?php endif; ?>
