<?php
	function unwrap_cf_checkbox($content) {
		$reg = '/<span class="(.*?)acceptance">(.*?)(<input(.*?)type="checkbox"(.*?)>)(.*?)<\/span>/';
		$content = preg_replace($reg, "$3", $content);
		return $content;
	}
	add_filter('wpcf7_form_elements', 'unwrap_cf_checkbox');

	function data_corsi($s, $e) {
		$start = new DateTime($s);
		$end = new DateTime($e);
		$date = '<span class="corsi-date">';
		if ($end->format('d') === $start->format('d') && $end->format('F') === $start->format('F') ) {
			$date .= '<span class="day-group">'.$start->format('d') . '</span><span class="bottom-date">'.date_i18n('F', strtotime($s)).'<span class="year">'.$start->format('Y').'</span>';
		}
		else if ($start->format('F') === $end->format('F') && $start->format('Y') === $end->format('Y')) :
			$date .= '<span class="day-group">'.$start->format('d') . '<span class="sep">/</span>' . $end->format('d') . '</span><span class="bottom-date">'.date_i18n('F', strtotime($s)).'<span class="year">'.$start->format('Y').'</span>';
		else :
			$date .= '<span class="corsi-date-row">'.$start->format('d') . '<span class="month">' . date_i18n('F', strtotime( $s ) ) . '</span>';
			$date .= ($start->format('Y') != $end->format('Y')) ? '<span class="year">&nbsp;'.$start->format('Y').'</span></span>' : '</span>';
			$date .= '<span class="corsi-date-row">'.$end->format('d') . '<span class="month">' . date_i18n('F', strtotime( $e ) ) . '</span><span class="year">'.$end->format('Y').'</span></span>';
		endif;
		$date .= '</span>';
		echo $date;
	}
	function data_corsi_simple($s, $e) {
		$start = new DateTime($s);
		$end = new DateTime($e);
		$date = '<span class="corsi-date">';
		if($start->format('F') === $end->format('F') && $start->format('Y') === $end->format('Y')) :
			$date .= $start->format('d') . ' - ' . $end->format('d') . ' '.date_i18n('F', strtotime($s)).' '.$start->format('Y');
		elseif($start->format('F') != $end->format('F') && $start->format('Y') === $end->format('Y')) :
			$date .= $start->format('d') . ' '.date_i18n('F', strtotime($s)). ' - ' . $end->format('d') . ' '.date_i18n('F', strtotime($e)).' '.$start->format('Y');
		else :
			$date .= $start->format('d') . ' '.date_i18n('F', strtotime($s)). ' ' .$start->format('Y') . ' - ' . $end->format('d') . ' '.date_i18n('F', strtotime($e)).' '.$end->format('Y');
		endif;
		$date .= '</span>';
		echo $date;
	}