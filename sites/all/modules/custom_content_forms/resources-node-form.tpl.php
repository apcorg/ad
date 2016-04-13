<?php $param=drupal_get_query_parameters();
$principle='';
if (array_key_exists('nid',$param)) {
   $principle=node_load($param['nid']);
   $number = $principle->field_number['und'][0]['value'];
   $title = $principle->title;
   print '<div class="see-principle mb-28 clearfix">';
   print '<div class="clearfix">';
   print_r( '<div class="pull-left"><h4 class="montse">'.$number.'.&nbsp;&nbsp;'.'</h4></div>'); 
   print_r( '<div class="pull-left"><h4 class="montse">'.$title.'</h4></div>'); 
   print '</div>';
   print '<div class="medium-3 columns">';
   print '<img src="';
   print_r(file_create_url($principle->field_featured_image['und'][0]['uri']));
   print '">';
   print '</div>';
   print '<div class="medium-9 columns">';
   print_r( $principle->body['und'][0]['value']); 
   print '</div>';
   print '</div>';
   print '<h5 class="montse">';
   print t("Add a new resource. Contribute to this principle.");
   print '</h5>';
   } else {
   print '<h5 class="montse">';
   print t("Add a new resource. Contribute to The African Declaration On Internet Rights And Freedoms.");
   print '</h5>';
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