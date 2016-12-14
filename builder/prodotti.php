<h2 class="title aligncenter"><?php _e('Dal nostro shop', 'jurgita') ?></h2>
<?php var_dump(get_sub_field('prodotti')); ?>
<?php if ( get_sub_field('prodotti') ) { ?>
    <?php $query = new WP_Query(array(
        'post_type' => 'product',
        'posts_per_page' => 4
    )); ?>
    <?php while ($query -> have_posts()) : $query ->  the_post(); ?>
        <?php wc_get_template_part('content', 'product'); ?>
    <?php endwhile; ?>
    <?php wp_reset_query() ?>
<?php } ?>
