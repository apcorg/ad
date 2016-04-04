<?php $param=drupal_get_query_parameters();
$principle='';
if (array_key_exists('nid',$param)) {
   $principle=node_load($param['nid']);
   $number = $principle->field_number['und'][0]['value'];
   $title = $principle->title;
   print '<div class="chosen-resource">';
   print_r( '<h5 class="montse">'.$number.'.&nbsp;'.$title.'</h5>'); 
   print_r( $principle->body['und'][0]['value']); 
   print '</div>';
   print '<h5>Add a new resource. Contribute to this principle.</h5>';
   } else {
   print '<h5>Add a new resource. Contribute to the Feminist Principles of the Internet.</h5>';
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
  <div>
    <?php print drupal_render_children($form);  ?>
  </div>
  <div>
    <?php print drupal_render($form['actions']); ?>
  </div>
</div>
