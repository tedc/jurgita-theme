<?php
	
	function main_menu_footer($nav_menu, $args) {
		if($args->theme_location === 'primary_navigation') : 
			ob_start();
			get_template_part( 'templates/menu', 'footer' );
			$html = ob_get_contents();
			ob_end_clean();
			$nav_menu = str_replace('</div>', $html . '</div>', $nav_menu);
		endif;
		return $nav_menu;
	}

	add_filter( 'wp_nav_menu', 'main_menu_footer', 10, 2 );

	if( function_exists('acf_add_options_page') ) {	
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Telefono e WhatsApp',
			'menu_title'	=> 'Telefono',
			'parent_slug'   => 'options-general.php'
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Extra',
			'menu_title'	=> 'Impostaioni extra del tema',
			'parent_slug'	=> 'themes.php'
		));
	}
	
	function image() {
		add_image_size('post-size', 1000, 400, true);
	}

	add_action('after_setup_theme', __NAMESPACE__ . '\\image');

add_action( 'admin_init', 'facebook_settings_init' );

function facebook_add_admin_menu(  ) { 

	#add_submenu_page( null, null, null, 'manage_options', 'social', 'facebook_options_page' );
	add_menu_page( __('Facebook  settings'), __('Facebook'), 'manage_options', 'facebook', 'facebook_options_page' );
}

add_action( 'admin_menu', 'facebook_add_admin_menu' );

function facebook_settings_init(  ) { 
    
	add_settings_section(
		'facebook_section', 
		__( 'Settings per i like di Facebook', 'frt' ), 
		'facebook_settings_section_callback', 
		'facebook'
	);
 
	register_setting( 'facebook', 'facebook_settings' );

	add_settings_field( 
		'facebook_page_id', 
		__( 'Facebook Page Id', 'frt' ), 
		'facebook_pi_field', 
		'facebook', 
		'facebook_section' 
	);
	
	add_settings_field( 
		'facebook_app_id', 
		__( 'Facebook App Id', 'frt' ), 
		'facebook_ai_field', 
		'facebook', 
		'facebook_section' 
	);
    add_settings_field( 
		'facebook_app_secret', 
		__( 'Facebook App Secret', 'frt' ), 
		'facebook_as_field', 
		'facebook', 
		'facebook_section' 
	);
    add_settings_field( 
		'facebook_access_token', 
		__( 'Facebook Access Token', 'frt' ), 
		'facebook_at_field', 
		'facebook', 
		'facebook_section' 
	);

}
function facebook_pi_field(  ) { 

	$options = get_option( 'facebook_settings' );
	?>
	<input type='text' name='facebook_settings[facebook_page_id]' value='<?php echo $options['facebook_page_id']; ?>'>	
<?php

}
function facebook_ai_field(  ) { 

	$options = get_option( 'facebook_settings' );
	?>
	<input type='text' name='facebook_settings[facebook_app_id]' value='<?php echo $options['facebook_app_id']; ?>'>	
<?php

}
function facebook_as_field(  ) { 

	$options = get_option( 'facebook_settings' );
	?>
	<input type='text' name='facebook_settings[facebook_app_secret]' value='<?php echo $options['facebook_app_secret']; ?>'>	
<?php

}
function facebook_at_field(  ) { 

	$options = get_option( 'facebook_settings' );
	?>
	<input type='text' name='facebook_settings[facebook_access_token]' value='<?php echo $options['facebook_access_token']; ?>'>
<?php if(isset(get_option('facebook_settings')['facebook_error_message'])) : ?>
<div><?php echo get_option('facebook_settings')['facebook_error_message']; ?></div>
	<?php endif; ?>
<?php
}


function facebook_settings_section_callback(  ) { 

	echo __( 'Setting per i like di Facebook', 'frt' );

}


function facebook_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>Facebook settings</h2>

		<?php
		settings_fields( 'facebook' );
		do_settings_sections( 'facebook' );
		submit_button();
		?>

	</form>
	<?php

}

function update_facebook_settings($new_value, $old_value) {
	if($old_value['facebook_access_token'] != $new_value['facebook_access_token']) {
		$new_value = extend_access_token($new_value);
	} else {
		$new_value = $old_value;
	}
	return $new_value;
}
function facebook_at_init() {
	add_filter('pre_update_option_facebook_settings', 'update_facebook_settings', 10, 2);
}
						  
add_action('init', 'facebook_at_init');


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );