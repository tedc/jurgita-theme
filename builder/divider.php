<div class="divider container" id="row_<?php echo $row; ?>"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"opacity" : 0}, {"opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}'<?php endif; ?>>
    <div class="square-gray"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"y": -50, "x" : 50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>></div>
    <div class="square-yellow"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"y": 50}, {"y" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>></div>
    <a href="<?php bloginfo('url'); ?>" class="logo"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"y": -50, "x" : -50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'<?php endif; ?>>
        <span class="j">J</span>
        <span class="j">J</span>
    </a>
</div>