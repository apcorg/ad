<?php $param=drupal_get_query_parameters();
$principle='';
if (array_key_exists('nid',$param)) {
   $principle=node_load($param['nid']);

   print '<div class="chosen-resource">';
   print_r( $principle->body['und'][0]['value']); 
   print '</div>';
   print '<h5 class="montse">Add a new resource. Contribute to this principle.</h5>';
   } else {
   print '<h5 class="montse">Add a new resource. Contribute to the African Declaration On Internet Rights and Freedom.</h5>';
   }
?>
<div class="add-resource">
  <div>   
      <?php print drupal_render($form['title']); ?>
  </div>
  <div>
      <?php print drupal_render($form['field_description']); ?>   
  </div>
  <div class="associated">
      <?php print drupal_render($form['field_resource_type']); ?>   
  </div>
  <div style="display: none;">
      <?php print drupal_render($form['language']); ?>   
  </div>
  <div>
      <?php print drupal_render($form['field_associated_with_principle']); ?>   
  </div>
  <div>
      <?php print drupal_render($form['field_files_attached']); ?>   
  </div>
  <div><?php print drupal_render($form['actions']); ?></div>
  <!-- <?php print drupal_render_children($form);  ?> -->
</div>
