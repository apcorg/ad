<?php global $language ;
$lang_name = $language->language ; ?>
<div class="row">
	<div class="text-left columns small-8"><h4 class="montse"><?php print t('Related resources') ?></h4></div>
	<div class="text-right columns small-4"><a href=/node/add/resources?nid=<?php print_r($view->result[0]->nid); ?> class="custom-button slim"><?php print t('Contribute to this principle') ?></a></div>
</div>
