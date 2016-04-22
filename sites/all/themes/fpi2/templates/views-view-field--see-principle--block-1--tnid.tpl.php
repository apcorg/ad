<?php $lang_name=array('en' => 'English', 'fr' => "French", 'es' => 'Spanish');
   print "<div class=resource-translations-block>";
   foreach(translation_node_get_translations($output) as $lang => $value)
    {
     print "<a href=/$lang/see-principle/$value->nid>".t($lang_name[$lang])."</a> ";

    }
   print "</div>";

