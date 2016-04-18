<?php global $language ;
$lang_name = $language->language ; ?>
<div class="row pt-14">
	<div class="text-left columns medium-9"><h4 class="montse"><?php print t('Related resources') ?></h4></div>
	<div class="text-right columns medium-3"><a href=/node/add/resources?nid=<?php print_r($view->result[0]->nid); ?> class="custom-button slim"><?php print t('Contribute to this principle') ?></a></div>
</div>
