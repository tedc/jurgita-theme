<div class="container box-carousel row-lg" id="row_<?php echo $row; ?>">
    <div class="grid-4" data-scrollmagic='{"tween":[{"opacity" : 0}, {"opacity" : 1}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'>
        <div class="col-2 carousel" data-scrollmagic='{"tween":[{"x" : -50}, {"x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'>
            <?php the_sub_field('carousel'); ?>
        </div>
        <div class="col-2 square-container">
            <div class="square" data-scrollmagic='{"tween":[{"y": -50, "x" : 50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'></div>
            <div class="square-shadow" data-scrollmagic='{"tween":[{"y": 50, "x" : 50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'></div>
            <div class="gray-square" data-scrollmagic='{"tween":[{"y": -50, "x" : -50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'></div>
            <a href="<?php bloginfo('url'); ?>" class="logo" data-scrollmagic='{"tween":[{"y": 50, "x" : -50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : 0, "triggerElement": "#row_<?php echo $row; ?>"}'>
                <span class="j">J</span>
                <span class="j">J</span>
            </a>
        </div>
    </div>
</div>