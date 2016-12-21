<?php $flags = get_field('lingue'); $partners = get_field('credit'); if($flags || $partners) : ?>
<div class="corsi-meta row-md">
	<?php if(is_singular('corsi')) : ?>
	<figure class="flag"><?php  foreach ($flags as $flag) { echo '<img src="'.$flag['url'].'" alt="'.$flag['alt'].'" class="flag" />'; } ?></figure>
	<?php endif; ?>
	<figure class="partners"><?php foreach ($partners as $partner) { echo '<img src="'.$partner['url'].'" alt="'.$partner['alt'].'" class="partner" />'; } ?></figure>
	<?php if(!is_singular('corsi')) : ?>
	<figure class="flag"><?php  foreach ($flags as $flag) { echo '<img src="'.$flag['url'].'" alt="'.$flag['alt'].'" class="flag" />'; } ?></figure>
	<?php endif; ?>
</div>
<?php endif; ?>
