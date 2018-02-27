<div class="body-container"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"opacity" : 0}, {"opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}'<?php endif; ?>>
    <div class="compasso">
        <div class="container-img">
            <img src="<?php the_sub_field('immagine'); ?>">
           <!-- <div class="dot-icon" id="first-dot">1</div>
            <div class="dot-icon" id="second-dot">2</div>
            <div class="dot-icon" id="third-dot">3</div>
            <div class="dot-icon" id="fourth-dot">4</div>
            <div class="dot-icon" id="fifth-dot">5</div>-->
        </div>
       <!-- <div class="slider" id="first-slider"><span class="circle">1</span><?php /*_e('1 compasso PhiBros', 'jurgita'); */?></div>
        <div class="slider" id="second-slider"><span class="circle">2</span><?php /*_e('1 compasso PhiBros', 'jurgita'); */?></div>
        <div class="slider" id="third-slider"><span class="circle">3</span><?php /*_e('1 compasso PhiBros', 'jurgita'); */?></div>
        <div class="slider" id="fourth-slider"><span class="circle">4</span><?php /*_e('1 compasso PhiBros', 'jurgita'); */?></div>
        <div class="slider" id="fifth-slider"><span class="circle">5</span><?php /*_e('1 compasso PhiBros', 'jurgita'); */?></div>-->
    </div>
</div>
<?php if (have_rows('componenti')): ?>
    <div class="container programma-corsi row-lg">
            <ul class="argomenti grid-4">
                <?php $i = 1; ?>
                <?php while (have_rows('componenti')) : the_row(); ?>
                    <li class="argomento col-2">
                        <span class="check"><i class="number"><?php echo $i; $i++;?></i></span>
                        <span class="argomento-text"> <?php the_sub_field('testo'); ?></span>
                    </li>
                <?php endwhile ?>
            </ul>
    </div>
<?php endif ?>