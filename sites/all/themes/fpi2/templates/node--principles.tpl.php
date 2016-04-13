<div class="see-principle mb-28 clearfix">
	<?php 
		$number = $node->field_number['und'][0]['value'];
		$f_image = file_create_url($node->field_featured_image['und'][0]['uri']);
	?>
	<div class="clearfix">
		<div class="pull-left"><h4 class="montse"></h4><?php print $number; ?>.&nbsp;&nbsp;</div>
		<div class="pull-left"><h4 class="montse"></h4><?php print $title; ?></div>
	</div>
	<div class="row">
		<div class="medium-3 columns">
			<img src="<?php print $f_image; ?>" alt="">
		</div>
		<div class="medium-9 columns">
			<?php print render($content['body']); ?>
		</div>
	</div>
</div>