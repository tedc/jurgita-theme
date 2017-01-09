<?php get_template_part('templates/page', 'header'); ?>

<div class="container-categories">
    <ul class="categories">
        <?php
        wp_list_categories(array(
            'show_option_all' => __("Tutti i corsi", "jurgita"),
            'title_li' => "",
            'taxonomy' => 'livelli'
        )); ?>
    </ul>
    <div class="line-categories"></div>
</div>

<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
<?php endif; ?>




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
    'order'     => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => get_queried_object()->taxonomy,
            'terms' => get_queried_object()->term_id,
            'field' => 'term_id'
        )
    )
);
$query = new WP_Query($args); ?>
<?php if ($query->have_posts()) : $i = 0; while ($query->have_posts()) : $query->the_post(); ?>

    <?php include(locate_template( 'templates/content-' . get_post_type() . '.php', false, false )); ?>
    <?php $i++; endwhile; wp_reset_postdata(); ?>

<?php endif; ?>



<div class="navigation-page">
    <?php
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    echo paginate_links(array(
        'base' => str_replace( $big, '%#%', esc_url(get_pagenum_link( $big )) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('Precedente', 'jurgita'),
        'next_text' => __('Successiva', 'jurgita'),
    ));
    ?>
    <div class="line-categories"></div>
</div>
