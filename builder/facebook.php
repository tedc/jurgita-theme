<div class="container facebook row-lg">
    <span class="pattern"></span>
    <span class="square"></span>
    <div class="gray-square"></div>
    <div class="like-content">
       
        <p class="title" data-scrollmagic='[{"tween":{"text":"<?php for($i=0; $i<strlen(facebook_ratings()); $i++) {echo 0; } ?> <?php _e('Like', 'jurgita'); ?>", "opacity" : 1}, "duration" : 0, "triggerHook" : 1, "reverse" : false}, {"tween":{"text":"<?php echo facebook_ratings(); ?> <?php _e('Like', 'jurgita'); ?>", "opacity" : 1}, "duration" : 0, "triggerHook" : 0.75, "reverse" : false}]'></p>
        <span class="like">
            <img class="facebook-like" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/like.svg' ?>">
        </span>
        <a href="<?php bloginfo('url'); ?>" class="logo">
            <span class="j">J</span>
            <span class="j">J</span>
        </a>
        <a class="btn-social" href="<?php echo get_option("wpseo_social")["facebook_site"]?>" target="_blank"><?php _e('Diventa fan', 'jurgita') ?></a>
    </div>
    <figure>
        <img src=<?php echo get_option("wpseo_social")["og_default_image"] ?>>
    </figure>
</div>