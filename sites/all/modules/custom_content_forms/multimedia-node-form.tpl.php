<h5 class="montse">Add a new item to the multimedia gallery.</h5>
<div class="test">
	<?php
	$form=drupal_get_form('multimedia_node_form');
	print drupal_render($form);
	?>
</div>