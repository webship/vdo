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