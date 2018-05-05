<?php

namespace Drupal\vdo\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DevForm.
 */
class DevForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $dev = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $dev->label(),
      '#description' => $this->t("Label for the Dev."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $dev->id(),
      '#machine_name' => [
        'exists' => '\Drupal\vdo\Entity\Dev::load',
      ],
      '#disabled' => !$dev->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $dev = $this->entity;
    $status = $dev->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Dev.', [
          '%label' => $dev->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Dev.', [
          '%label' => $dev->label(),
        ]));
    }
    $form_state->setRedirectUrl($dev->toUrl('collection'));
  }

}
