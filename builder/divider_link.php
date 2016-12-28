<div class="divider-link row-lg" id="row_<?php echo $row; ?>" data-scrollmagic='{"tween":[{"opacity": 0}, {"opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}'>
    <div class="gray-line" data-scrollmagic='{"tween":[{"scaleX": 0, "transformOrigin" : "left center"}, {"scaleX" : 1, "transformOrigin" : "left center"}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'></div>
    <div class="shadow" data-scrollmagic='{"tween":[{"y": 50, "x" : -50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'></div>
    <div class="square-gray" data-scrollmagic='{"tween":[{"y": -50, "x" : 50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'></div>
    <div class="square-yellow" data-scrollmagic='{"tween":[{"y": 50, "x" : 50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'>
        <a href="<?php the_field('link_corsi', 'options'); ?>"><?php _e('Calendario<br>dei corsi', 'jurgita') ?></a>
        <a href="<?php the_field('link_corsi', 'options'); ?>" class="square-yellow-permalink"></a>
    </div>
    <a href="<?php bloginfo('url'); ?>" class="logo" data-scrollmagic='{"tween":[{"y": -50, "x" : -50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'>
        <span class="j">J</span>
        <span class="j">J</span>
    </a>
</div>