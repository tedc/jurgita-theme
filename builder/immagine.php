<?php $img = get_sub_field('immagine'); ?>
<figure class="container-img" id="img_<?php echo $row; ?>">
    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="row-img full-img"/>
    <?php $random = rand(0, 2);?>
    <?php if ($random == 0) {
    } ?>
    <?php if ($random == 1){?>
    <div class="square"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": 200}, {"y" : 0}], "triggerHook" : 0.5, "duration" : "200vh", "triggerElement" : "#img_<?php echo $row; ?>"}'<?php endif; ?>></div>
    <div class="square-shadow"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": 100}, {"y" : 0}], "triggerHook" : 0.5, "duration" : "200vh", "triggerElement" : "#img_<?php echo $row; ?>"}'<?php endif; ?>></div>
    <?php } else { ?>
    <div class="square-shadow"<?php if(!is_handheld()): ?> data-scrollmagic='{"tween":[{"y": 200}, {"y" : 0}], "triggerHook" : 0.5, "duration" : "200vh","triggerElement" : "#img_<?php echo $row; ?>"}'<?php endif; ?>></div>
    <?php } ?>
</figure>