<?php global $language ;
$lang_name = $language->language ; ?>

<h4 class="the-title text-center pt-21">The African Declaration on Internet Rights and Freedoms</h4> 
<!-- menu bar -->
<section id="menu" class="pt-21">
  <ul>
	  <li class="cta">
		  <?php
		    $lang_dropdown = lang_dropdown_block_view();
		    print render($lang_dropdown['content']);
		  ?>
	  </li>
    <li class="cta download ph-7">
      <i class="x1-5 sec-color ion-code-download"></i>
      <div class="wrapper">
        <span>Download</span>
      </div>
    </li>
    <li class="cta ph-7">
      <i class="x1-5 sec-color ion-android-share-alt"></i>
      <a target="_blank" href="http://twitter.com/home?status=<?php print t('I just read the African Declaration of Internet Rights and Freedom. Find it here: africaninternetrights.net') ?>">
	      <div class="wrapper">
	        <span>Share</span>
	      </div>
      </a>
    </li>
    <li class="mt--7"><i class="hide-for-small-only pri-color ion-navicon-round x2" id="toggle"></i></li>
  </ul>
</section>  
<!-- menu bar -->
<section id="grid" class="php-3">


<?php

// $result0
$query = db_select('node', 'n');

$query->innerJoin('field_data_body', 'fdb', 'n.nid = fdb.entity_id');
$query->innerJoin('field_data_field_row_number', 'fdfr', 'n.nid = fdfr.entity_id');
$query->innerJoin('field_data_field_number', 'fdn', 'n.nid = fdn.entity_id');
$query->innerJoin('field_data_field_featured_image', 'img', 'n.nid = img.entity_id');

$result0 = $query
    ->fields('n', array('nid', 'title', 'created'))
    ->fields('n', array('nid', 'language', 'created'))
    ->fields('fdb', array('body_value'))
    ->fields('fdfr', array('field_row_number_value'))
    ->fields('fdn', array('field_number_value'))
    ->fields('img', array('field_featured_image_fid'))
    ->orderBy('field_number_value', 'ASC')
    ->condition('type', 'principles')
    ->condition('status', 1)
    ->execute();

$resultPrinciples = $result0->fetchAllAssoc('nid');

?>

<!-- Row 1 begins -->
	<div class="row fpi-row">
		<ul class="fpi-ul text-center small-block-grid-3">
		<?php foreach($resultPrinciples as $node) :?>
			<?php $rowNumber = $node->field_row_number_value; ?>

			<?php if ($rowNumber == 1 && $node->language == $lang_name): ?> 
				 <li data-fpi-num=<?php print $node->field_number_value; ?> class="text-center">
				 	<?php 
				 		$file = file_load($node->field_featured_image_fid);
				 		$route = "sites/default/files/".$file->filename;
				 	?>
				 	<div>
				 		<img src="<?php print_r($route); ?>" alt="">
				 		<h5 class="text-center"><?php print $node->field_number_value; ?>. <?php print $node->title; ?></h5>
				 		<i class="ion-plus-circled x2"></i>
				 	</div>
				 </li>
			<?php endif ?>
			
		<?php endforeach; ?>
		</ul>

		<div class="details-box">
	 	 <div class="text-right pr-7 close">
	 	   <i class="ion-close-circled x2"></i>
	 	 </div>
		<?php foreach($resultPrinciples as $node) :?>
			<?php $rowNumber = $node->field_row_number_value; ?>

			<?php if ($rowNumber == 1 &&$node->language == $lang_name): ?> 
				 	<div data-fpi-details=<?php print $node->field_number_value; ?> class="detail-box hidden">
			 		  <div class="full-text">
			 		    <p><?php print $node->field_number_value; ?>. <?php print $node->body_value; ?></p>
			 		    <a target="_blank" href="http://twitter.com/home?status=%22<?php echo substr($node->body_value, 0, 97); ?>...%22%20<?php print t('Learn more at africaninternetrights.net/') ?>"><i class="ion-social-twitter"></i></a>
			 		  </div>
			 		  <div class="ctas-grid text-center">
			 		    <a class="cta-button" href=/node/<?php print $node->nid; ?>><i class="ion-information-circled bold-icon x2"></i><span>&nbsp;&nbsp;<?php print t('Applying this principle') ?></span></a>
			 		    <a class="cta-button mt-14" href=/see-principle/<?php print $node->nid; ?>><i class="ion-ios-list-outline bold-icon x2"></i><span>&nbsp;<?php print t('Relevant resources') ?></span></a>
			 		    <a class="cta-button mt-14" href=/node/add/resources?nid=<?php print $node->nid; ?>><i class="ion-chatboxes x2"></i><span>&nbsp;<?php print t('Join the conversation') ?></span></a>
			 		  </div>
				 	</div>
			<?php endif ?>
			
		<?php endforeach; ?>
		</div>
	</div>
<!-- Row 2 begins -->
	<div class="row fpi-row">
		<ul class="fpi-ul text-center small-block-grid-3">
		<?php foreach($resultPrinciples as $node) :?>
			<?php $rowNumber = $node->field_row_number_value; ?>

			<?php if ($rowNumber == 2 && $node->language == $lang_name): ?> 
				<li data-fpi-num=<?php print $node->field_number_value; ?> class="text-center">
					<?php 
						$file = file_load($node->field_featured_image_fid);
						$route = "sites/default/files/".$file->filename;
					?>
					<div>
						<img src="<?php print_r($route); ?>" alt="">
						<h5 class="text-center"><?php print $node->field_number_value; ?>. <?php print $node->title; ?></h5>
						<i class="ion-plus-circled x2"></i>
					</div>
				</li>
			<?php endif ?>
			
		<?php endforeach; ?>
		</ul>
		<div class="details-box">
	 	 <div class="text-right pr-7 close">
	 	   <i class="ion-close-circled x2"></i>
	 	 </div>
		<?php foreach($resultPrinciples as $node) :?>
			<?php $rowNumber = $node->field_row_number_value; ?>

			<?php if ($rowNumber == 2 && $node->language == $lang_name): ?> 
			 	<div data-fpi-details=<?php print $node->field_number_value; ?> class="detail-box hidden">
		 		  <div class="full-text">
		 		    <p><?php print $node->field_number_value; ?>. <?php print $node->body_value; ?></p>
		 		    <a target="_blank" href="http://twitter.com/home?status=%22<?php echo substr($node->body_value, 0, 97); ?>...%22%20<?php print t('Learn more at africaninternetrights.net/') ?>"><i class="ion-social-twitter"></i></a>
		 		  </div>
		 		  <div class="ctas-grid text-center">
		 		    <a class="cta-button" href=/node/<?php print $node->nid; ?>><i class="ion-information-circled bold-icon x2"></i><span>&nbsp;&nbsp;<?php print t('Applying this principle') ?></span></a>
		 		    <a class="cta-button mt-14" href=/see-principle/<?php print $node->nid; ?>><i class="ion-ios-list-outline bold-icon x2"></i><span>&nbsp;<?php print t('Relevant resources') ?></span></a>
		 		    <a class="cta-button mt-14" href=/see-principle/<?php print $node->nid; ?>><i class="ion-chatboxes x2"></i><span>&nbsp;<?php print t('Join the conversation') ?></span></a>
		 		  </div>
			 	</div>
			<?php endif ?>
			
		<?php endforeach; ?>
		</div>
	</div>
<!-- Row 3 begins -->
	<div class="row fpi-row">
		<ul class="fpi-ul text-center small-block-grid-3">
		<?php foreach($resultPrinciples as $node) :?>
			<?php $rowNumber = $node->field_row_number_value; ?>

			<?php if ($rowNumber == 3 && $node->language == $lang_name): ?> 
				<li data-fpi-num=<?php print $node->field_number_value; ?> class="text-center">
					<?php 
						$file = file_load($node->field_featured_image_fid);
						$route = "sites/default/files/".$file->filename;
					?>
					<div>
						<img src="<?php print_r($route); ?>" alt="">
						<h5 class="text-center"><?php print $node->field_number_value; ?>. <?php print $node->title; ?></h5>
						<i class="ion-plus-circled x2"></i>
					</div>
				</li>
			<?php endif ?>
			
		<?php endforeach; ?>
		</ul>
		<div class="details-box">
	 	 <div class="text-right pr-7 close">
	 	   <i class="ion-close-circled x2"></i>
	 	 </div>
		<?php foreach($resultPrinciples as $node) :?>
			<?php $rowNumber = $node->field_row_number_value; ?>

			<?php if ($rowNumber == 3 && $node->language == $lang_name): ?> 
			 	<div data-fpi-details=<?php print $node->field_number_value; ?> class="detail-box hidden">
		 		  <div class="full-text">
		 		    <p><?php print $node->field_number_value; ?>. <?php print $node->body_value; ?></p>
		 		    <a target="_blank" href="http://twitter.com/home?status=%22<?php echo substr($node->body_value, 0, 97); ?>...%22%20<?php print t('Learn more at africaninternetrights.net/') ?>"><i class="ion-social-twitter"></i></a>
		 		  </div>
		 		  <div class="ctas-grid text-center">
		 		    <a class="cta-button" href=/node/<?php print $node->nid; ?>><i class="ion-information-circled bold-icon x2"></i><span>&nbsp;&nbsp;<?php print t('Applying this principle') ?></span></a>
		 		    <a class="cta-button mt-14" href=/see-principle/<?php print $node->nid; ?>><i class="ion-ios-list-outline bold-icon x2"></i><span>&nbsp;<?php print t('Relevant resources') ?></span></a>
		 		    <a class="cta-button mt-14" href=/see-principle/<?php print $node->nid; ?>><i class="ion-chatboxes x2"></i><span>&nbsp;<?php print t('Join the conversation') ?></span></a>
		 		  </div>
			 	</div>
			<?php endif ?>
			
		<?php endforeach; ?>
		</div>
	</div>
<!-- Row 4 begins -->
	<div class="row fpi-row">
		<ul class="fpi-ul text-center small-block-grid-3">
		<?php foreach($resultPrinciples as $node) :?>
			<?php $rowNumber = $node->field_row_number_value; ?>

			<?php if ($rowNumber == 4 && $node->language == $lang_name): ?> 
				<li data-fpi-num=<?php print $node->field_number_value; ?> class="text-center">
					<?php 
						$file = file_load($node->field_featured_image_fid);
						$route = "sites/default/files/".$file->filename;
					?>
					<div>
						<img src="<?php print_r($route); ?>" alt="">
						<h5 class="text-center"><?php print $node->field_number_value; ?>. <?php print $node->title; ?></h5>
						<i class="ion-plus-circled x2"></i>
					</div>
				</li>
			<?php endif ?>
		<?php endforeach; ?>
		</ul>
		<div class="details-box">
	 	 <div class="text-right pr-7 close">
	 	   <i class="ion-close-circled x2"></i>
	 	 </div>
		<?php foreach($resultPrinciples as $node) :?>
			<?php $rowNumber = $node->field_row_number_value; ?>

			<?php if ($rowNumber == 4 && $node->language == $lang_name): ?> 
			 	<div data-fpi-details=<?php print $node->field_number_value; ?> class="detail-box hidden">
		 		  <div class="full-text">
		 		    <p><?php print $node->field_number_value; ?>. <?php print $node->body_value; ?></p>
		 		    <a target="_blank" href="http://twitter.com/home?status=%22<?php echo substr($node->body_value, 0, 97); ?>...%22%20<?php print t('Learn more at africaninternetrights.net/') ?>"><i class="ion-social-twitter"></i></a>
		 		  </div>
		 		  <div class="ctas-grid text-center">
		 		    <a class="cta-button" href=/node/<?php print $node->nid; ?>><i class="ion-information-circled bold-icon x2"></i><span>&nbsp;&nbsp;<?php print t('Applying this principle') ?></span></a>
		 		    <a class="cta-button mt-14" href=/see-principle/<?php print $node->nid; ?>><i class="ion-ios-list-outline bold-icon x2"></i><span>&nbsp;<?php print t('Relevant resources') ?></span></a>
		 		    <a class="cta-button mt-14" href=/see-principle/<?php print $node->nid; ?>><i class="ion-chatboxes x2"></i><span>&nbsp;<?php print t('Join the conversation') ?></span></a>
		 		  </div>
			 	</div>
			<?php endif ?>
		<?php endforeach; ?>
		</div>
	</div>
<!-- Row 5 begins -->
	<div class="row fpi-row">
		<ul class="fpi-ul text-center small-block-grid-3">
		<?php foreach($resultPrinciples as $node) :?>
			<?php $rowNumber = $node->field_row_number_value; ?>

			<?php if ($rowNumber == 5 && $node->language == $lang_name): ?> 
				<li data-fpi-num=<?php print $node->field_number_value; ?> class="text-center">
					<?php 
						$file = file_load($node->field_featured_image_fid);
						$route = "sites/default/files/".$file->filename;
					?>
					<div>
						<img src="<?php print_r($route); ?>" alt="">
						<h5 class="text-center"><?php print $node->field_number_value; ?>. <?php print $node->title; ?></h5>
						<i class="ion-plus-circled x2"></i>
					</div>
				</li>
			<?php endif ?>
		<?php endforeach; ?>
		</ul>
		<div class="details-box">
	 	 <div class="text-right pr-7 close">
	 	   <i class="ion-close-circled x2"></i>
	 	 </div>
		<?php foreach($resultPrinciples as $node) :?>
			<?php $rowNumber = $node->field_row_number_value; ?>

			<?php if ($rowNumber == 5 && $node->language == $lang_name): ?> 
			 	<div data-fpi-details=<?php print $node->field_number_value; ?> class="detail-box hidden">
		 		  <div class="full-text">
		 		    <p><?php print $node->field_number_value; ?>. <?php print $node->body_value; ?></p>
		 		    <a target="_blank" href="http://twitter.com/home?status=%22<?php echo substr($node->body_value, 0, 97); ?>...%22%20<?php print t('Learn more at africaninternetrights.net/') ?>"><i class="ion-social-twitter"></i></a>
		 		  </div>
		 		  <div class="ctas-grid text-center">
		 		    <a class="cta-button" href=/node/<?php print $node->nid; ?>><i class="ion-information-circled bold-icon x2"></i><span>&nbsp;&nbsp;<?php print t('Applying this principle') ?></span></a>
		 		    <a class="cta-button mt-14" href=/see-principle/<?php print $node->nid; ?>><i class="ion-ios-list-outline bold-icon x2"></i><span>&nbsp;<?php print t('Relevant resources') ?></span></a>
		 		    <a class="cta-button mt-14" href=/see-principle/<?php print $node->nid; ?>><i class="ion-chatboxes x2"></i><span>&nbsp;<?php print t('Join the conversation') ?></span></a>
		 		  </div>
			 	</div>
			<?php endif ?>
		<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- FPIs list starts -->
<section id="list" class="row hidden">
  <div class="columns small-10 small-offset-1 end medium-8 medium-offset-2">
    <ul>   
  	<?php foreach($resultPrinciples as $node) :?>
  		<?php if ($node->language == $lang_name): ?> 
      <li class="row">
        <div class="columns medium-1 pt-14"><h4 class="text-center"><?php print $node->field_number_value; ?>.</h4></div>
        <div class="columns medium-11">
          <div class="list-fpi">
            <span><?php print $node->body_value; ?></span>
            <div class="ctas text-right">
              <a class="custom-button mr-7 slim" href=/see-principle/<?php print $node->nid; ?>>Learn more</a>
              <a target="_blank" class="custom-button tweet sec-color slim" href="http://twitter.com/home?status=%22<?php echo substr($node->body_value, 0, 97); ?>...%22%20<?php print t('Learn more at africaninternetrights.net') ?>"><i class="ion-social-twitter"></i></a>
            </div>
          </div>
        </div>
      </li> 
    	<?php endif ?>
    <?php endforeach; ?>  
    </ul>
  </div>
</section>
<!-- FPIs list ends -->