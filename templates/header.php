<?php $shop = woocommerce_get_page_id( 'shop' ); ?>
<header class="banner">
	<a class="logo" href="<?= esc_url(home_url('/')); ?>">
		<span class="j">J</span>
		<span class="j">J</span>
	</a>
	<div class="menu-container">
		<span class="btn-header btn-shop"><a href="<?php echo get_permalink( $shop ); ?>" title="<?php echo get_the_title($shop); ?>" class="btn-header-text"><?php _e('Shop', 'jurgita'); ?></a><?php woocommerce_car_icon(); ?></span>
		<?php wp_nav_menu( ['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container_id' => 'menu', 'container_class' => 'menu'] ); ?>
		<a class="btn-header btn-menu" href="#" data-reveal="#menu">
			<span class="btn-header-text"><?php _e('Menu', 'jurgita'); ?></span>
			<span class="toggle" data-close="<?php _e('Chiudi', 'jurgita'); ?>">
				<span class="toggle-line"></span>
				<span class="toggle-line"></span>
				<span class="toggle-line"></span>
			</span>
		</a>
		<?php icl_selector(); ?>
	</div>
</header>
<?php get_template_part( 'templates/panel' ); ?>