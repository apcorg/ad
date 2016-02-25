<?php

/**
 * Implements template_preprocess_html().
 */
function fpi2_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function fpi2_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function fpi2_preprocess_node(&$variables) {
}


/**
 * Testin.
 */
function fpi2_links__system_main_menu($variables) {
  $html = "";
  foreach ($variables['links'] as $link) {
    $html .= "<div class='medium-3 columns'>".l($link['title'], $link['href'], $link)."</div>";
  }


  return $html;
}

/**
 * Testin.
 */
function fpi2_links__system_mobile_menu($variables) {

  $html = "";
  foreach ($variables['links'] as $link) {
    $html .= "<li>".l($link['title'], $link['href'], $link)."</li>";
  }


  return $html;
}