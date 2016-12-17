<?php
/**
 * Template Name: Contatti
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<h1 class="title"><?php _e('Scrivici', 'jurgita'); ?></h1>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
