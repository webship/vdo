<?php

namespace Drupal\vdom\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DemoForm.
 */
class DemoForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $demo = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $demo->label(),
      '#description' => $this->t("Label for the demo."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $demo->id(),
      '#machine_name' => [
        'exists' => '\Drupal\vdom\Entity\demo::load',
      ],
      '#disabled' => !$demo->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $demo = $this->entity;
    $status = $demo->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label demo.', [
          '%label' => $demo->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label demo.', [
          '%label' => $demo->label(),
        ]));
    }
    $form_state->setRedirectUrl($demo->toUrl('collection'));
  }

}
