<?php $img = get_sub_field('immagine'); ?>
<figure class="container-img">
    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="row-img full-img"/>
    <?php $random = rand(0, 2);?>
    <?php if ($random == 0) {
    } ?>
    <?php if ($random == 1){?>
    <?php echo '<div class="square"></div><div class="square-shadow"></div>' ?>
    <?php } else { ?>
    <?php echo '<div class="square-shadow"></div>'?>
    <?php } ?>
</figure>