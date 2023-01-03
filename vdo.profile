<?php

/**
 * @file
 * Site configuration for Visual Distribution Operator (VDO) installation.
 */

use Drupal\Core\Form\FormStateInterface;

 /**
 * Implements hook_form_FORM_ID_alter() for install_configure_form().
 *
 * Allows the profile to alter the site configuration form.
 */
function vdo_form_install_configure_form_alter(&$form, FormStateInterface $form_state) {
  $form['site_information']['site_name']['#default_value'] = t('Visual Distribution Operator (VDO)');
  $form['site_information']['site_mail']['#default_value'] = 'admin@webship.co';
  $form['admin_account']['account']['name']['#default_value'] = 'webmaster';
  $form['admin_account']['account']['mail']['#default_value'] = 'admin@webship.co';
}

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
