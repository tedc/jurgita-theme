<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4 container"  data-scrollmagic='{"tween":[{"x": -50, "opacity" : 0}, {"x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}'>
    <?php foreach ($terms as $term): ?>
        <div class="col-2 col-programma">
            <h2 class="title title-corso"><?php echo $term->name; ?></h2>
            <ul class="argomenti">
                <?php while (have_rows('argomenti', 'livelli_' . $term->term_id)) : the_row(); ?>
                    <li class="argomento">
                            <span class="check">
                                <?php echo (get_sub_field('check')) ? '<i class="icon-check"></i>' : ''; ?>
                            </span>
                        <?php echo (get_sub_field('check')) ? '<span class="argomento-text">' . get_sub_field('argomento') . '</span>' : ''; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php $price =  get_field('prezzo', $term);
            $int = strtok($price, '.');
            $dec = substr($price, strpos($price, ".")+1);
            ?>
            <div class="price corso-price"><div class="price-container"> <?php echo '€&nbsp;'.'<span class="int-price">'. $int . ',</span>' . $dec ?></div></div>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>
