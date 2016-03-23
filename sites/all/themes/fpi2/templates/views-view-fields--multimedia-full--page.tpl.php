<div class="row pbp-7">
	<h4 class="text-center montse"><?php print $fields['title']->content;?></h4>
	<div class="columns medium-10 medium-offset-1 pt-28 pb-28">
		<?php print $fields['field_mm_description']->content; ?>
		<div class="text-center pt-28">
			<?php if (strpos($fields['field_media_type']->content,'Audio') > 0): ?>
			<?php print $fields['field_asset']->content; ?>
			<?php else: ?>
			<?php print $fields['field_image']->content; ?>
			<?php endif ?>
		</div>
	</div>
</div>
