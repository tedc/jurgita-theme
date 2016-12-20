<?php
/**
 * Template Name: Contatti
 */
?>


<?php while (have_posts()) : the_post(); ?>
    <div class="container scrivimi">
        <h1 class="title"><?php _e('Scrivimi', 'jurgita'); ?></h1>
        <?php get_template_part('templates/content', 'page'); ?>
    </div>
<?php endwhile; ?>
