<div class="row">
	<h4 class="montse text-center"><?php print $title; ?></h4>
	<div class="text-center">
		<?php print render($content['field_featured_image']); ?>
	</div>
	<div class="columns medium-10 medium-offset-1 pt-28 pb-28">
		<?php 
		print render($content['body']); 
		?>
	</div>
</div>