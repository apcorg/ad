<?php $default_image="<img src='/sites/default/files/video.png'>";
      $image=$fields["field_image"]->content;
      if (! $image) $image=$default_image;
 ?>
<li>
  <a href=/node/<?php print $fields["nid"]->content; ?>>
  	<div class="image">
          <?php print $image; ?>
  	</div>
  </a>
  <div class="asset-info p-7">
		<?php print $fields["title"]->content; ?>
  </div>
</li>
