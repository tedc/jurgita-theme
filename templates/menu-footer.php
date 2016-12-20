<footer class="menu-footer">
	<nav class="menu-footer-social">
		<a class="icon-facebook" href="<?php echo get_option("wpseo_social")["facebook_site"] ?>"></a>
		<a class="icon-instagram" href="<?php echo get_option("wpseo_social")["instagram_url"] ?>"></a>
	</nav>
	<div class="menu-footer-phone">
		<?php _e('Tel', 'jurgita'); ?>: <?php acf_set_language_to_default(); ?><a href="tel:<?php echo get_field('telefono', 'options'); ?>"><?php the_field('telefono', 'options'); ?></a><?php acf_unset_language_to_default(); ?><span class="whatsapp"><?php _e('anche su', 'jurgita'); ?><?php acf_set_language_to_default(); ?><a href="whatsapp://send?abid=<?php the_field('whatsapp', 'options'); ?>&text=<?php _e('Ciao Jurgita', 'jurgita'); ?>" class="whatsapp-link">WhatsApp</a><?php acf_unset_language_to_default(); ?></span>
	</div>
</footer>