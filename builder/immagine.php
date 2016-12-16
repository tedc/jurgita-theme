<?php $img = get_sub_field('immagine'); ?>
<div class="container-img">
    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="row-img full-img"/>
    <?php $random = rand(0, 2);?>
    <?php if ($rand == 0) {
    } ?>
    <?php if ($rand == 1){?>
    <?php echo '<div class="square"></div><div class="square-shadow"></div>' ?>
    <?php } else { ?>
    <?php echo '<div class="square-shadow"></div>'?>
    <?php } ?>
</div>