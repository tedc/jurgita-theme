<?php
/**
 * Template Name: Contatti
 */
?>


<?php while (have_posts()) : the_post(); ?>
<<<<<<< HEAD
    <div class="container scrivimi">
        <h1 class="title"><?php _e('Scrivimi', 'jurgita'); ?></h1>
        <?php get_template_part('templates/content', 'page'); ?>
    </div>
=======
	<article <?php post_class("container row-lg content"); ?>>
		<header class="contact-header">
			<h1 class="title"><?php _e('Scrivici', 'jurgita'); ?></h1>
			<div class="right">
			<span class="whatsapp"><?php _e('anche su', 'jurgita'); ?><?php acf_set_language_to_default(); ?><a href="whatsapp://send?abid=<?php the_field('whatsapp', 'options'); ?>&text=<?php _e('Ciao Jurgita', 'jurgita'); ?>" class="whatsapp-link">WhatsApp</a><a href="tel:<?php echo get_field('telefono', 'options'); ?>"><?php the_field('telefono', 'options'); ?></a><?php acf_unset_language_to_default(); ?></span>
		</header>
		<?php get_template_part('templates/content', 'page'); ?>
	</article>
>>>>>>> 5372de3ac1397f1f957063e0e7501ef381bc1d8f
<?php endwhile; ?>
