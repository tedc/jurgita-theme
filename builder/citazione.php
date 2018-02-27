<div class="row-quote"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"backgroundPosition": "0% 0%"}, {"backgroundPosition": "0% 80%"}], "triggerHook" : 1, "duration" : "200vh"}'<?php endif; ?>>
	<blockquote class="quote" id="quote_<?php echo $row; ?>"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"scale": 0.8, "opacity" : 0}, {"scale" : 1, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}'<?php endif; ?>>
		&ldquo;<?php the_sub_field('frase'); ?>&rdquo;
	</blockquote>
	<div class="square-yellow-l"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"y": -50, "x" : -50, "opacity" : 0}, {"y" : 0, "x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0, "triggerElement" : "#quote_<?php echo $row; ?>"}'<?php endif; ?>>
		<div class="square-black-l"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"y": 100, "x" : 100, "opacity" : 0}, {"y" : 0, "x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0, "triggerElement" : "#quote_<?php echo $row; ?>"}'<?php endif; ?>></div>
	</div>
	<div class="square-yellow-r"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"y": 50, "x" : 50, "opacity" : 0}, {"y" : 0, "x" : 0, "opacity" : 1}], "triggerHook" : 0.65, "duration" : 0, "triggerElement" : "#quote_<?php echo $row; ?>"}'<?php endif; ?>>
		<div class="square-black-r"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"y": -100, "x" : -100, "opacity" : 0}, {"y" : 0, "x" : 0, "opacity" : 1}], "triggerHook" : 0.65, "duration" : 0, "triggerElement" : "#quote_<?php echo $row; ?>"}'<?php endif; ?>></div>
	</div>
</div>