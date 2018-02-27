<div class="container instagram row-lg" id="row_<?php echo $row; ?>">
    <h2 class="title aligncenter"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"opacity" : 0}, {"opacity" : 1}], "triggerHook" : 0.65, "duration" : 0}'<?php endif; ?>><?php _e('Jurgita su Instagram', 'jurgita') ?></h2>
    <div class="container-img">
        <?php echo do_shortcode('[instagram-feed]') ?>
        <a href="<?php bloginfo('url'); ?>" class="logo"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": -50, "opacity" : 0}, {"y" : 0, "opacity" : 1}], "triggerHook" : 0.4, "duration" : "100%", "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>>
            <span class="j">J</span>
            <span class="j">J</span>
        </a>
    </div>
    <div class="container-btn">
        <a href="<?php echo get_option("wpseo_social")["instagram_url"] ?>" class="btn" target="_blank" <?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": -50, "opacity" : 0}, {"y" : 0, "opacity" : 1}], "triggerHook" : 0.4, "duration" : "100%", "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>><?php _e('Segui', 'jurgita') ?></a>
    </div>
</div>