<h2 class="shop-title"><?php _e('Dal nostro shop', 'jurgita') ?></h2>
<?php $posts = the_sub_field('prodotti'); ?>
<?php if ($posts): ?>
    <ul class="products grid-4">
        <?php foreach ($posts as $post):  ?>
            <?php setup_postdata($post); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span>Custom field from $post: <?php the_field('author'); ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>