<?php
/**
 * Template Name: Contatti
 */
?>


<?php while (have_posts()) : the_post(); ?>
<<<<<<< Updated upstream
	<article <?php post_class("body-container row-lg content"); ?>>
=======
<<<<<<< HEAD
	<article <?php post_class("container row-lg entry-content"); ?>>
=======
	<article <?php post_class("body-container row-lg content"); ?>>
>>>>>>> origin/master
>>>>>>> Stashed changes
		<header class="contact-header">
			<h1 class="title"><?php _e('Scrivici', 'jurgita'); ?></h1>
			<div class="right">
			<span class="whatsapp"><?php _e('anche su', 'jurgita'); ?><?php acf_set_language_to_default(); ?><a href="whatsapp://send?abid=<?php the_field('whatsapp', 'options'); ?>&text=<?php _e('Ciao Jurgita', 'jurgita'); ?>" class="whatsapp-link">WhatsApp</a><a href="tel:<?php echo get_field('telefono', 'options'); ?>"><?php the_field('telefono', 'options'); ?></a><?php acf_unset_language_to_default(); ?></span>
		</header>
		<?php get_template_part('templates/content', 'page'); ?>
	</article>
<?php endwhile; ?>
