<div class="event mb-21 row">
	<div class="columns medium-4">
		<?php print $fields["field_featured_image"]->content; ?>
	</div>
	<div class="columns medium-8">
		<?php print $fields["title"]->content; ?>
		<?php echo substr($fields["field_description"]->content, 0, 300); ?>
	</div>
</div>