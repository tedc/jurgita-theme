<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4">

        <?php foreach ($terms as $term): ?>
            <div class="col-1">
                <h2><?php echo $term->name; ?></h2>

                <?php $args = array(
                    'post_type' => "corsi",
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'livelli',
                            'field' => 'name',
                            'terms' => $term->name
                        )
                    )
                );
                $query = new WP_Query($args);?>
                <?php
                if ($query -> have_rows('argomenti')):

                    while ($query -> have_rows('argomenti')) : $query -> the_row();

                        $query->the_sub_field('argomento');
                        $query->the_sub_field('check');

                    endwhile; ?>
                <?php endif ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
