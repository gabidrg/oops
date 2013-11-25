<?php

/**
 * @file
 * Process theme data.
 */

drupal_add_library('system', 'ui.tabs');

/**
 * Implementation of hook_preprocess_page().
 */
function oops_responsive_preprocess_page(&$variables) {
  // Tab Tamer
  $unwanted_tabs = array('user/register');
  foreach ($variables['tabs'] as $group_key => $tab_group) {
    if (is_array($tab_group)) {
      foreach ($tab_group as $key => $tab) {
        if (isset($tab['#link']['path']) && in_array($tab['#link']['path'], $unwanted_tabs)){
          unset($variables['tabs'][$group_key][$key]);
        }
      }
    }
  }
}

