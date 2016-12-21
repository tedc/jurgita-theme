<?php 
    $today = date('Ymd');
    $args = array (
        'post_type' => 'corsi',
        'meta_query' => array(
            array(
                'key'       => 'data_inizio',
                'compare'   => '>=',
                'value'     => $today,
            ),
             array(
                'key'       => 'data_fine',
                'compare'   => '<=',
                'value'     => $today,
            )
        ),
        'meta_key'  => 'data_fine',
        'orderby'   => 'meta_value_num',
        'order'     => 'ASC'
    );
$corsi = new WP_Query(array(
    'post_type' => 'corsi',
    'orderby' => 'meta_value',
    'meta_query' => array(
        array(
            'key' => 'data_fine',
            'type' => 'date'
        )
    ),
    'order' => 'ASC'
)); if($corsi->have_posts()) : ?>
    <aside class="aside">
        <div class="panel" id="panel">
            <a href="#" data-revael="#panel">
                <ul>
                    <?php
                    while($corsi->have_posts()) : $corsi->the_post();
                        // make date object
                        $start = new DateTime(
                            get_field('data_inizio', false, false)
                        );
                        // make date object
                        $end = new DateTime(
                            get_field('data_fine', false, false)
                        );
                        ?>
                        <li>
                        </li>
                    <?php endwhile; wp_reset_query(); ?>
                </ul>
        </div>
        <a href="#" class="aside-btn"><?php _e('Prossimi corsi', 'jurgita'); ?><i class="icon-arrow-down"></i></a>
    </aside>
<?php endif; ?>