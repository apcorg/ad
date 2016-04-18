<h3 class="montse text-center"><?php print $title; ?></h3>
<p class="text-center"><?php print t('Submitted by') ?> <?php print($node->name); ?></p>
<div class="text-center">
	<?php print render($content['field_featured_image']); ?>
</div>
<div class="columns medium-10 medium-offset-1 pt-28 pb-28">
	<?php 
	print render($content['body']); 
	print render($content['field_place_of_the_event']); 
	print render($content['field_event_date']); 
	?>
</div>
