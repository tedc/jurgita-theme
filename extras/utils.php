<?php
	function unwrap_cf_checkbox($content) {
		$reg = '/<span class="(.*?)acceptance">(.*?)(<input(.*?)type="checkbox"(.*?)>)(.*?)<\/span>/';
		$content = preg_replace($reg, "$3", $content);
		return $content;
	}
	add_filter('wpcf7_form_elements', 'unwrap_cf_checkbox');

	function data_corsi($start, $end) {
		$date = '<span class="corsi-date">';
		if($start->format('F') === $end->format('F') && $start->format('Y') === $end->format('Y')) :
			$date .= '<span class="day-group">'.$start->format('d') . '<span class="sep">/</span>' . $end->format('d') . '</span><span class="bottom-date">'.$start->format('F').'<span class="year">'.$start->format('Y').'</span>';
		else :
			$date .= '<span class="corsi-date-row">'.$start->format('d') . '<span class="month">' . $start->format('F') . '</span>';
			$date .= ($start->format('Y') != $end->format('Y')) ? '<span class="year">'.$start->format('Y').'</span></span>' : '</span>';
			$date .= '<span class="corsi-date-row">'.$end->format('d') . '<span class="month">' . $end->format('F') . '</span><span class="year">'.$end->format('Y').'</span></span>';
		$date .= '</span>';
		echo $date;
	}