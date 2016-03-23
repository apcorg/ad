<?php print $fields['title']->content;?>
<?php print $fields['field_mm_description']->content; ?>
<?php if (strpos($fields['field_media_type']->content,'Audio') > 0): ?>
<?php print $fields['field_asset']->content; ?>
<?php else: ?>
<?php print $fields['field_image']->content; ?>
<?php endif ?>
