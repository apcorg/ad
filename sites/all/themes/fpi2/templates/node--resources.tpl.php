<h3 class="montse text-center"><?php  print $node->title ?></h3>
<?php  print $node->field_description['und'][0]['value'].'<br>'; ?>
<p>associated_with_principle</p>
<?php 
foreach($node->field_associated_with_principle['und'] as $principle) {
  $nid=$principle['entity']->nid;
  $title=$principle['entity']->title;
  print "<a href=/node/$nid > $title </a><br>";
  }
?>

<p>Resource type(s)</p>
<?php
foreach($node->field_resource_type['und'] as $rt) {
  $title=$rt[taxonomy_term]->name;
  print_r($title);
  }
?>
<p>files</P>
<?php
foreach($node->field_files_attached['und'] as $file) {
  $file_uri=file_create_url($file['uri']);
  $file_name=$file['filename'];
 print "<a href=$file_uri > $file_name </a><br>";
  }
?>