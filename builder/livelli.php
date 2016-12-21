<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4 container">
        <?php foreach ($terms as $term): ?>
            <div class="col-2">
                <h2 class="title title-corso"><?php echo $term->name; ?></h2>
                <ul>
                    <?php while (have_rows('argomenti', 'livelli_' . $term->term_id)) : the_row(); ?>
                        <li class="argomento">
                            <span class="check">
                                <?php echo (get_sub_field('check')) ? '<i class="icon-check"></i>' : ''; ?>
                            </span>
                            <?php echo (get_sub_field('check')) ? '<span class="argomento-text">'.get_sub_field('argomento').'</span>' : ''; ?>
                        </li>
                  <?php  endwhile; ?>
                  </ul>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
