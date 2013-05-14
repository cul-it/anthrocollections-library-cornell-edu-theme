<?php

/**
 * @file template.php
 */
<?php
function boostrap_anthro_preprocess_page(&$variables) {
  $front_style = path_to_theme() .'/supersized.css';

  if (file_exists($front_style) && $variables['is_front']) {
    $include_style = $front_style;
  }

  if (isset($include_style)) {
    drupal_add_css($include_style, 'theme', 'all', FALSE);
    $variables['styles'] = drupal_get_css();
  }
}
?>