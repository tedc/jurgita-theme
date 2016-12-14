<h2 class="shop-title"><?php _e('Dal nostro shop', 'jurgita') ?></h2>
<?php $posts = the_sub_field('prodotti'); ?>
<?php if ($posts): ?>
    <ul class="products grid-4">
        <?php foreach ($posts as $post):  ?>
            <li>
                <a href="<?php the_permalink( $post->ID ); ?>">ciao</a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>