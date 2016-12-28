<?php
	function vars() {
		?>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>

		var WebFontConfig = {
			typekit : {
				id : 'qse6jbb'
			},
			google : {
				families : ['Noto Sans:400,400italic,700,700italic', 'Noto Serif:400']
			}
		};
		WebFont.load(WebFontConfig);
		// (function(d) {
		// 	var wf = d.createElement('script'), s = d.scripts[0];
		// 	wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js';
		// 	s.parentNode.insertBefore(wf, s);
		// })(document);
		var isMobile = <?php echo (is_handheld()) ? 'true' : 'false'; ?>;
	</script>
<?php
	}
	add_action('wp_footer', 'vars');