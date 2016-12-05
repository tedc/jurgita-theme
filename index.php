<?php get_template_part('templates/page', 'header'); ?>

<div class="container-categories">
    <ul class="categories">
        <?php
        wp_list_categories(array(
            'show_option_all' => __("Tutti gli articoli", "jurgita"),
            'title_li' => "",
        )); ?>
    </ul>
    <div class="line-categories"></div>
</div>

<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
<?php endif; ?>


<div class="sticky">
    <?php
    $sticky = get_option('sticky_posts');
    $args = array(
        'posts_per_page' => 1,
        'post__in' => $sticky,
        'ignore_sticky_posts' => 1
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        $query->the_post();
        get_template_part('templates/sticky', get_post_type() != 'post' ? get_post_type() : get_post_format());
    }
    ?>
</div>


<div class="container-post">
    <?php $query = new WP_Query(array('post__not_in' => get_option('sticky_posts'))); ?>
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php the_posts_navigation(); ?>
</div>