<h2 class="shop-title"><?php _e('Dal nostro shop', 'jurgita') ?></h2>
<?php var_dump( the_sub_field('prodotti')) ?>
<?php $posts = the_sub_field('prodotti'); ?>
<?php if ($posts): ?>
    <ul class="products grid-4">
        <?php foreach ($posts as $post):  ?>
            <?php var_dump( $post->ID ) ?>
            <li>
                <a href="<?php the_permalink( $post->ID ); ?>"><?php echo get_the_title( $post->ID ); ?></a>
                <span>Custom field from $post: <?php the_field('author', $post->ID); ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>