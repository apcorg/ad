<div class="event mb-14 row">
	<div class="columns medium-3">
		<?php print $fields["field_featured_image"]->content; ?>
	</div>
	<div class="columns medium-9">
		<?php print $fields["title"]->content; ?>
		<?php echo substr($fields["field_description"]->content, 0, 300); ?>
	</div>
</div>