<h2 class="title aligncenter"><?php _e('Dal nostro shop', 'jurgita') ?></h2>
<?php if ( get_sub_field('prodotti') ) { ?>
    <?php $query = new WP_Query(array(
        'post_type' => 'product',
        'post__in' => get_sub_field('prodotti'),
        'posts_per_page' => count(get_sub_field('prodotti'))
    )); ?>
    <?php while ($query -> have_posts()) : $query ->  the_post(); ?>
        <?php wc_get_template_part('content', 'product'); ?>
    <?php endwhile; ?>
    <?php wp_reset_query() ?>
<?php } ?>
