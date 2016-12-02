<?php
	function vars() {
		?>
	<script>
		var WebFontConfig = {
			typekit : {
				id : 'qse6jbb'
			},
			google : {
				families : ['Noto Sans:400,400italic,700,700italic', 'Noto Serif:400']
			}
		}
		(function(d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js';
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>
<?php
	}
	add_action('wp_footer', 'vars');