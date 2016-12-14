<h2 class="shop-title"><?php _e('Dal nostro shop', 'jurgita') ?></h2>
<?php var_dump( get_field('prodotti')) ?>
<?php $posts = get_field('prodotti'); ?>
<?php if ($posts): ?>
    <ul class="products grid-4">
        <?php foreach ($posts as $post):  ?>
            <li>
                <a href="<?php the_permalink( $post->ID ); ?>"><?php echo get_the_title( $post->ID ); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>