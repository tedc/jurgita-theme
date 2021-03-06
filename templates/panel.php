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
            <div class="blur"></div>
            <div class="panel-content" id="panel-content">
                <h4 class="title"><?php _e('Prossimi corsi di Microblanding', 'jurgita'); ?></h4>
                <ul>
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
                                    'compare'   => '>=',
                                    'value'     => $today,
                                )
                            ),
                            'meta_key'  => 'data_fine',
                            'orderby'   => 'meta_value_num',
                            'order'     => 'ASC'
                        );
                        $query = new WP_Query($args);
                        while ($query->have_posts()) : $query->the_post(); ?>
                        <li <?php post_class(); ?>>
                            <a href="<?php the_permalink(  ); ?>" class="permalink">
                                <?php data_corsi_simple(get_field('data_inizio', false, false), get_field('data_fine', false, false)); ?>
                                <span class="place"><?php the_field('luogo'); ?></span>
                            </a>
                        </li>
                    <?php endwhile; wp_reset_query(); ?>
                        <li class="last">
                            <a href="<?php echo get_post_type_archive_link('corsi'); ?>" class="btn-reverse">
                                <?php _e('Tutti i corsi', 'jurgita'); ?>
                            </a>
                        </li>
                </ul>
            </div>
            <a href="<?php the_field('contact_page', 'options'); ?>" class="btn btn-contact"><?php _e('Contattami', 'jurgita'); ?></a>
        </div>    
        <a class="main-permalink" href="#" data-reveal="#panel"><span class="panel-btn"><?php _e('Prossimi corsi', 'jurgita'); ?><i class="icon-arrow-down"></i></span></a>
    </aside>
<?php endif; ?>