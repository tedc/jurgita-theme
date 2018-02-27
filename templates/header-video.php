<?php acf_set_language_to_default(); if(get_field('cover_video', 'options')) : ?>
<?php $file = preg_replace('/\\.[^.\\s]{3,4}$/', '', get_field('cover_video', 'options')); ?>
<div class="video-cover video-cover-header" style="background-image:url(<?php echo $file; ?>.jpg)">
    <video class="video-item" autoplay loop poster="<?php echo $file; ?>.jpg">
        <source src="<?php echo $file; ?>.mp4" type="video/mp4" />
        <source src="<?php echo $file; ?>.ogv" type="video/ogv" />
        <source src="<?php echo $file; ?>.webm" type="video/webm" />
    </video>
</div>
<?php endif; acf_unset_language_to_default(); ?>