<div class="pop-up">
    <div class="blur"></div>
    <div class="pop-up__box">
        <div class="pop-up__box-content">
            <span class="close">
                <span class="toggle-line"></span>
                <span class="toggle-line"></span>
            </span>
            <figure>
                <img src="<?php the_sub_field('immagine'); ?>">
            </figure>
            <p><?php the_sub_field('testo'); ?></p>
            <a href="<?php the_sub_field('link');?>" class="btn min-width"><?php the_sub_field('testo_bottone');?></a>

            <a href="<?php bloginfo('url'); ?>">
                <span class="j">J</span>
                <span class="j">J</span>
            </a>
        </div>
    </div>
</div>