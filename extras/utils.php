<?php
	function unwrap_cf_checkbox($content) {
		$reg = '/<span class="(.*?)acceptance">(.*?)(<input(.*?)type="checkbox"(.*?)>)(.*?)<\/span>/';
		$content = preg_replace($reg, "$3", $content);
		return $content;
	}
	add_filter('wpcf7_form_elements', 'unwrap_cf_checkbox');