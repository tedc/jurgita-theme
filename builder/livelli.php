<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4 container">
    <?php foreach ($terms as $term): ?>
        <div class="col-2">
            <h2 class="title title-corso"
                data-scrollmagic='{"tween":[{"x": -50, "opacity" : 0}, {"x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}'><?php echo $term->name; ?></h2>
            <ul class="argomenti">
                <?php while (have_rows('argomenti', 'livelli_' . $term->term_id)) : the_row(); ?>
                    <li class="argomento"
                        data-scrollmagic='{"tween":[{"x": -50, "opacity" : 0}, {"x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}'>
                            <span class="check"
                                  data-scrollmagic='{"tween":[{"x": 20, "y" : 20,  "opacity" : 0}, {"x" : 0, "y" : 0, "opacity" : 1, "delay" : 0.25}], "triggerHook" : 0.5, "duration" : 0}'>
                                <?php echo (get_sub_field('check')) ? '<i class="icon-check"></i>' : ''; ?>
                            </span>
                        <?php echo (get_sub_field('check')) ? '<span class="argomento-text">' . get_sub_field('argomento') . '</span>' : ''; ?>
                    </li>
                <?php endwhile; ?>
            </ul>

            <?php if( get_field('prezzo', $term) ) { ?>
            <div class="price corso-price" data-scrollmagic='{"tween":[{"x": 50, "opacity" : 0}, {"x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}'> <?php the_field('prezzo', $term) ?></div>
            <?php } ?>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>
