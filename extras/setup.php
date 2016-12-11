<?php
	
	function main_menu_footer($nav_menu, $args) {
		print_r($args);
		if($args['theme_location'] === 'primary_navigation') : 
			ob_start();
			get_template_part( 'templates/menu', 'footer' );
			$html = ob_get_contents();
			ob_end_clean();
			$nav_menu .= $html;
		endif;
	}

	add_filter( 'wp_nav_menu', 'main_menu_footer', 10, 2 );

	if( function_exists('acf_add_options_page') ) {	
		acf_add_options_page(array(
			'page_title' 	=> 'Telefono e WhatsApp',
			'menu_title'	=> 'Telefono',
			'menu_slug' 	=> 'telephones',
			'parent_slug'   => 'options-general'
		));
	}
	