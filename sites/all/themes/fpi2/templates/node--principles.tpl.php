<h3 class="montse"><?php print t('Application of the principles') ?></h3>
<div class="see-principle mt-28 mb-28 clearfix">
	<?php 
		$number = $node->field_number['und'][0]['value'];
		$f_image = file_create_url($node->field_featured_image['und'][0]['uri']);
		$title_1 = $node->title;
		$background = $node->field_background['und'][0]['value'];
		print '<div class="clearfix">';
		print_r( '<div class="pull-left"><h4 class="montse">'.$number.'.&nbsp;&nbsp;'.'</h4></div>'); 
		print_r( '<div class="pull-left"><h4 class="montse">'.$title_1.'</h4></div>'); 
		print '</div>';
	?>
	<div class="row">
		<div class="medium-3 columns">
			<img src="<?php print $f_image; ?>" alt="">
		</div>
		<div class="medium-9 columns">
			<?php print render($content['body']); ?>
		</div>
	</div>
</div>
<div class="row">
	<div class="small-12 columns">
		<?php print_r($background); ?>
	</div>
</div>