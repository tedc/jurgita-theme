<?php $shop = woocommerce_get_page_id( 'shop' ); ?>
<header class="banner">
	<a class="logo" href="<?= esc_url(home_url('/')); ?>">
		<span class="j">J</span>
		<span class="j">J</span>
	</a>
	<div class="menu-container">
		<?php icl_selector(); ?>
		<a class="btn-header btn-shop" href="<?php echo get_permalink( $shop ); ?>" title="<?php echo get_the_title($shop); ?>">shop</a>
		<?php wp_nav_menu( ['theme_location' => 'primary_menu', 'menu_class' => 'nav', 'menu_id' => 'menu', 'container' => '' ] ); ?>
		<a class="btn-header btn-menu" href="#" data-reveal="#menu">menu</a>
	</div>
</header>
<?php $corsi = new WP_Query(array(
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
		<a href="#" data-revael="#panel">
		<ul>
			<?php 
				while($corsi->have_posts()) : $corsi->the_post();
				// make date object
				$start = new DateTime(
					get_field('data_inizio', false, false)
				);
				// make date object
				$end = new DateTime(
					get_field('data_fine', false, false)
				);
			?>
			<li>
			</li>
			<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div>
	<a href="#" class="aside-btn"><?php _e('Prossimi corsi', 'jurgita'); ?></a>
</aside>
<?php endif; ?>