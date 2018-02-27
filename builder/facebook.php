<div class="container facebook row-lg" id="row_<?php echo $row; ?>">
    <span class="pattern"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": -50}, {"y" : 50}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>></span>
    <span class="square"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": 50}, {"y" : -50}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>></span>
    <div class="gray-square"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": -50}, {"y" : 50}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>></div>
    <div class="like-content">
       
        <p class="title"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y" : -40, "opacity" : 0}, {"y" : 0, "opacity" : 1}], "duration" : "50%", "triggerHook" : 0.75, "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>><?php echo facebook_ratings(); ?> <?php _e('Like', 'jurgita'); ?></p>
        <span class="like"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": 50}, {"y" : -50}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>>
            <img class="facebook-like" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/like.svg' ?>">
        </span>
        <a href="<?php bloginfo('url'); ?>" class="logo"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": "-50%"}, {"y" : "0%"}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>>
            <span class="j">J</span>
            <span class="j">J</span>
        </a>
        <a class="btn-social" href="<?php echo get_option("wpseo_social")["facebook_site"]?>" target="_blank" <?php if(!is_handheld()): ?> data-scrollmagic='{"duration" : "150%", "offset" : 50, "triggerHook" : 1, "tween":[{"opacity" : 0}, {"opacity" : 1}]}'<?php endif; ?>><?php _e('Diventa fan', 'jurgita') ?></a>
    </div>
    <figure<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": 100}, {"y" : -100}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>>
        <img src=<?php echo get_option("wpseo_social")["og_default_image"] ?>>
    </figure>
</div>