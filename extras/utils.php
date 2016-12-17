<?php
	function unwrap_cf_checkbox($content) {
		$reg = '/<span class="wpcf7-form-control-wrap acceptance">()</span>';
	}
	add_filter('wpcf7_form_elements', 'unwrap_cf_checkbox');