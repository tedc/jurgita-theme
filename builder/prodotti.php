<h2 class="title aligncenter"><?php _e('Dal nostro shop', 'jurgita') ?></h2>
<?php if ( get_sub_field('prodotti') ) { ?>
    <?php $query = new WP_Query(array(
        'post_type' => 'product',
        'posts_per_page' => 4
    )); ?>
    <?php while ($query -> have_posts()) : $query ->  the_post(); ?>
        <?php the_post_thumbnail();?>
    <?php endwhile; ?>
    <?php wp_reset_query() ?>
<?php } ?>
