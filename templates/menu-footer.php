<footer class="menu-footer">
	<nav classs="menu-footer-social">
		<a class="icon-linkedin" href="<?php echo get_option("wpseo_social")["linkedin_url"] ?>"></a>
		<a class="icon-facebook" href="<?php echo get_option("wpseo_social")["facebook_site"] ?>"></a>
	</nav>
	<div class="menu-footer-phone">
		<?php _e('Tel', 'jurgita'); ?>: <?php acf_set_language_to_default(); ?><a href="tel:<?php echo get_field('telefono', 'options'); ?>"><?php the_field('telefono', 'options'); ?></a><?php acf_unset_language_to_default(); ?>
	</div>
</footer>