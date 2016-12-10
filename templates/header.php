<header class="banner">
  <div class="container-header">
    <a class="icon icon-pittogramma" href="<?= esc_url(home_url('/')); ?>">j</a>
    <div class="container-menu">
       <a class="btn-header btn-shop">shop</a>
       <a class="btn-header btn-menu">menu</a>
    </div>
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
	<div class="panel">
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
	<a href="#" class="open-courses"><?php _e('Prossimi corsi', 'jurgita'); ?></a>
</aside>
<?php endif; ?>