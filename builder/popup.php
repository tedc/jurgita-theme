<div class="pop-up">
    <div class="blur"></div>
    <div class="pop-up__box">
        <div class="pop-up__box-content">
            <span class="pop-up--close">
                <span class="toggle-line"></span>
                <span class="toggle-line"></span>
            </span>
            <figure>
                <img src="<?php the_sub_field('immagine'); ?>">
            </figure>
            <p class="pop-up--date"><?php the_sub_field('date'); ?></p>
            <span class="pop-up--text"><?php the_sub_field('testo'); ?></span>
            <a href="<?php the_sub_field('link');?>" class="btn" target="_blank"><?php the_sub_field('testo_bottone');?></a>

            <a href="<?php bloginfo('url'); ?>" class="logo">
                <span class="j">J</span>
                <span class="j">J</span>
            </a>
        </div>
    </div>
</div>