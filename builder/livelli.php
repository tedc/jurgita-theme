<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4">

    <?php foreach ($terms as $term): ?>
        <div class="col-1">
        <h2><?php echo $term->name; ?></h2>

        <?php $query = new WP_Query(
            array(
                'post_type' => 'corsi',
                'field' => 'slug',
               /* 'tax_query' => array(
                    array(
                        'taxonomy' => 'livelli',
                        'field' => $term->ID,
                    ))*/
            )
        ); ?>
            <?php var_dump($query->have_posts())?>
        <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
            <?php the_field('argomento'); ?>
            <?php the_field('check'); ?>
                <?php the_title()?>
            <?php endwhile; wp_reset_query(); ?>


  <?php endif; ?>
            </div>

    <?php endforeach; ?>
        </div>
        <?php endif; ?>
