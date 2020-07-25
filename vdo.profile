<?php

/**
 * @file
 * Site configuration for VDO site installation.
 */

/**
 * Implements hook_install_tasks_alter().
 */
function vdo_install_tasks_alter(&$tasks, $install_state) {
  unset($tasks['install_select_language']);
  unset($tasks['install_download_translation']);
}

/**
 * Implements hook_preprocess_install_page().
 */
function vdo_preprocess_install_page(&$variables) {
  // VDO has custom styling for the install page.
  $variables['#attached']['library'][] = 'vdo/install-page';
}

/**
 * Implements hook_toolbar_alter().
 */
function vdo_toolbar_alter(&$items) {
  $items['admin_toolbar_tools']['#attached']['library'][] = 'vdo/toolbar-icon';
}

