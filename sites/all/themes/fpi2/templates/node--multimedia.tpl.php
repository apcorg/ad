<?php
$view_args = array( $node->nid );
$display_id = 'page';
$view = views_get_view('multimedia_full');
if (!empty($view)) {
print $view->execute_display($display_id , $view_args);
}
?>
