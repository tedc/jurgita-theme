<h2 class="title aligncenter"><?php _e('Dal nostro shop', 'jurgita') ?></h2>
<?php if ( get_sub_field('prodotti') ) { ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_post_thumbnail() ?>
    <?php endwhile; ?>
<?php } ?>
