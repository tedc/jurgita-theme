<div class="container instagram row-lg">
    <h2 class="title aligncenter"><?php _e('Jurgita su Instagram', 'jurgita') ?></h2>
    <div class="container-img">
        <?php echo do_shortcode('[instagram-feed]') ?>
        <a href="<?php bloginfo('url'); ?>" class="logo">
            <span class="j">J</span>
            <span class="j">J</span>
        </a>
    </div>
    <div class="container-btn">
        <a href="<?php echo get_option("wpseo_social")["instagram_url"] ?>" class="btn" target="_blank"><?php _e('Segui', 'jurgita') ?></a>
    </div>
</div>