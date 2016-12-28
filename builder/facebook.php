<div class="container facebook row-lg" id="row_<?php echo $row; ?>">
    <span class="pattern" data-scrollmagic='{"tween":[{"y": -50}, {"y" : 50}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'></span>
    <span class="square" data-scrollmagic='{"tween":[{"y": 50}, {"y" : -50}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'></span>
    <div class="gray-square" data-scrollmagic='{"tween":[{"y": -50}, {"y" : 50}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'></div>
    <div class="like-content">
       
        <p class="title" data-scrollmagic='{"tween":{"text":"<?php echo facebook_ratings(); ?> <?php _e('Like', 'jurgita'); ?>", "opacity" : 1}, "duration" : 0, "triggerHook" : 0.75, "reverse" : false}'><?php for($i=0; $i<strlen(facebook_ratings()); $i++) {echo 0; } ?> <?php _e('Like', 'jurgita'); ?></p>
        <span class="like" data-scrollmagic='{"tween":[{"y": 50}, {"y" : -50}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'>
            <img class="facebook-like" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/like.svg' ?>">
        </span>
        <a href="<?php bloginfo('url'); ?>" class="logo" data-scrollmagic='{"tween":[{"y": "-50%"}, {"y" : "0%"}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'>
            <span class="j">J</span>
            <span class="j">J</span>
        </a>
        <a class="btn-social" href="<?php echo get_option("wpseo_social")["facebook_site"]?>" target="_blank"  data-scrollmagic='{"duration" : "150%", "offset" : 50, "triggerHook" : 1, "tween":[{"opacity" : 0}, {"opacity" : 1}]}'><?php _e('Diventa fan', 'jurgita') ?></a>
    </div>
    <figure data-scrollmagic='{"tween":[{"y": 100}, {"y" : -100}], "duration" : "200vh", "triggerHook" : 1, "triggerElement": "#row_<?php echo $row; ?>"}'>
        <img src=<?php echo get_option("wpseo_social")["og_default_image"] ?>>
    </figure>
</div>