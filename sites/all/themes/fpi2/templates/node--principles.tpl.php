<h3 class="montse"><?php print t('Application of the principles') ?></h3>
<div class="see-principle mt-28 mb-28 clearfix">
	<?php 
		$number = $node->field_number['und'][0]['value'];
		$f_image = file_create_url($node->field_featured_image['und'][0]['uri']);
		$title_1 = $node->title;
		$application = $node->field_application['und'][0]['value'];
		print '<div class="clearfix pl-7 pt-7">';
		print_r( '<div class="pull-left"><h4 class="montse">'.$number.'.&nbsp;&nbsp;'.'</h4></div>'); 
		print_r( '<div class="pull-left"><h4 class="montse">'.$title_1.'</h4></div>'); 
		print '</div>';
	?>
	<div class="">
		<div class="medium-3 columns">
			<img src="<?php print $f_image; ?>" alt="">
		</div>
		<div class="medium-9 columns">
			<?php print render($content['body']); ?>
		</div>
	</div>
</div>
<div class="application mb-70">
	<div class="app-text p-7">
		<h5 class="montse"><?php print t('Application') ?>:</h5>
		<?php print nl2br($application); ?>
	</div>
</div>
